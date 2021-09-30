//userreview 
function switchover(name, clickname, active, contname) {
  $(name).on(clickname, function() {
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

//time
var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

//choice
$.fn.changeActive = function(name, clickName, buybtn, fun) {
  $(this).on(clickName, function() {
     var num = $(this).index();
    if(!$(this).hasClass("default")) {
      $(".countdown").removeClass('on').eq(num).addClass("on");
      $(this).addClass("active").siblings().removeClass("active");
      $(".footbuy .list").eq(num).addClass("active").siblings().removeClass("active");
      $(name + " .boxpc").find("img").eq(num).addClass("active").siblings().removeClass("active");
      var dataUrl = $(".banner .list").eq(num).attr("data-url");
      var dataOff = $(".banner .list").eq(num).attr("data-off");
      var dataPercent = $(".banner .list").eq(num).attr("data-percent");
      var original = $(".banner .list").eq(num).find(".original").text();
      var discount = $(".banner .list").eq(num).find(".discount").text();
      $(name + " .buybtn").attr("href", dataUrl);
      $(".footbuy").find(".buybtn").attr("href", dataUrl);
      $(name + " .price").find(".original").text(original);
      $(name + " .price").find(".discount").text(discount);
      $(".off").text(dataOff);
      $(".percent").text(dataPercent);
    }
    fun(num);
  });
};
function pop() {
  $(".pop-bg,.pop").addClass("on");
}
$(".smaller").click(function () {
 $(".pop-bg,.pop").removeClass("on");
 $(".pop-small").addClass("on")
})
$(".close").click(function () {
  popShow=0;
 $(".pop-bg,.pop").hide();
})
$(".larger").click(function () {
  var statusNow=statusCheck();
  if(statusNow==1){
    pop();
    $(".pop-small").removeClass("on");
  }
})

function soldout() {
  $(".choice .pcs,.smchoice .pcs,.fchoice .list:eq(0)").removeClass("active").addClass("default");
  $(".boxpc .pcs").removeClass("active");
  $(".boxpc .pc").addClass("active");
  //$(".pop-small").addClass("over");
  $(".choice .list").eq(1).addClass("active").siblings().removeClass("active");
  $(".smchoice .list").eq(1).addClass("active").siblings().removeClass("active");
  $(".banner .boxpc").find("img").eq(1).addClass("active").siblings().removeClass("active");
  $(".centbuy .boxpc").find("img").eq(1).addClass("active").siblings().removeClass("active");
  var dataUrl = $(".banner .list").eq(1).attr("data-url");
  var original = $(".banner .list").eq(1).find(".original").text();
  var discount = $(".banner .list").eq(1).find(".discount").text();
  var dataOff = $(".banner .list").eq(1).attr("data-off");
  var dataPercent = $(".banner .list").eq(1).attr("data-percent");
  $(".buybtn").attr("href", dataUrl);
  $(".buybtn").attr("href", dataUrl);
  $(".centbuy .price").find(".original").text(original);
  $(".centbuy .price").find(".discount").text(discount);
  $(".off").text(dataOff);
  $(".percent").text(dataPercent);
}
function getScrollTop() {
  $(window).scroll(function() {　　
    var scrollTop = $(this).scrollTop();　　
    var scrollHeight = $(document).height();　　
    var windowHeight = $(this).height();　　
    if (scrollTop + windowHeight < scrollHeight && scrollTop > 200) {　　　　
      $(".footbuy").addClass("on");
    } else if (scrollTop + windowHeight == scrollHeight) {
      $(".footbuy").removeClass("on");
    } else if (scrollTop == 0) {
      $(".footbuy").removeClass("on");
    }
  });
}

function strFormat(str) {
  return str.replace(/,/g, '.');
}

$(function() {
  popShow=1;
  timeInit();
  countdown(("#countdown strong"));
  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(".choice .list").changeActive(".banner", "click", $(".buybtn"), function(num) {});
  $(".smchoice .list").changeActive(".centbuy", "click", $(".buybtn"), function(num) {});
  $(".fchoice .list").changeActive(".footbuy", "click", $(".buybtn"), function(num) {
    if(!$(".fchoice .list:eq(0)").hasClass("default")) {
      $(".choice .list").eq(num).addClass("active").siblings().removeClass("active");
      $(".smchoice .list").eq(num).addClass("active").siblings().removeClass("active");
      $(".banner .boxpc").find("img").eq(num).addClass("active").siblings().removeClass("active");
      $(".centbuy .boxpc").find("img").eq(num).addClass("active").siblings().removeClass("active");
      var dataUrl = $(".banner .list").eq(num).attr("data-url");
      var original = $(".banner .list").eq(num).find(".original").text();
      var discount = $(".banner .list").eq(num).find(".discount").text();
      $(".centbuy .buybtn").attr("href", dataUrl);
      $(".banner .buybtn").attr("href", dataUrl);
      $(".centbuy .price").find(".original").text(original);
      $(".centbuy .price").find(".discount").text(discount);
    }
  });
  getScrollTop();
  $('.buy-num').html(strFormat($('.buy-num').html()));
});

function cSet(cName,cVal){
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days*24*60*60*1000);
  document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "dkdbt" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime=Math.floor(date.getTime()/1000);
  if (arr == null) {
    countTime=nowTime+550;
    cSet(cName,countTime);
  } else {
    countTime=parseInt(arr[2]);
  }
  countdownPop('.countdown3pc strong',1);
}

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    if(remainingTime<=540){
      if((!$(".pop-bg").hasClass('on'))&&(!$(".pop-small").hasClass('on'))&&(popShow==1)){
        pop();
      }
    }
    var d = Math.floor(remainingTime / (24 * 60 * 60));
    var h = Math.floor(remainingTime / (60 * 60) % 24);
    var i = Math.floor(remainingTime / 60 % 60);
    var s = Math.floor(remainingTime % 60);
    var mi = 999 - dateObj.getMilliseconds();
    if (mi < 10) {
      mi = '00' + mi;
    } else if (mi < 100) {
      mi = '0' + mi;
    }
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}

var countdownPop = function (countdown,tType){
  var statusNow=statusSet();
  if(tType==1){
    getCycleCountdownPop(countTime);
  }
  if(statusNow==1){
    $(".countdown3pc").eq(0).find("strong").eq(0).html('00').end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    $(".countdown3pc").eq(1).find("strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
    setTimeout("countdownPop('"+ countdown +"',"+tType+")", 1);
  }
};

function getCycleCountdownPop (endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function statusCheck(){
  var date=new Date();
  var timeNow=date.getTime()/1000;
  if(timeNow<countTime){
    return 1;
  }else{
    return 2;
  }
}

function statusSet(){
  var statusNow=statusCheck();
  if(statusNow==2){
    if(!$(".pop-small").hasClass('over')){
      $(".countdown").removeClass('on').eq(1).addClass("on");
      soldout();
      $(".pop-bg,.pop").removeClass("on");
      $(".pop-small").addClass("on").addClass('over');
      $(".countdown3pc").each(function(){
        $(this).find("strong").eq(0).html('00').end().eq(1).html('00').end().eq(2).html('00').end().eq(3).html('000');
      });
    }
    if(!$(".pop-small").hasClass('on')){
      $(".pop-small").addClass("on");
    }
    if(!$(".pop-small").hasClass('over')){
      $(".pop-small").addClass("over");
    }
  }
  return statusNow;
}