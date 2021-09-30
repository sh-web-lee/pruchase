//target
$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};
//scrollWindow
$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}
function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".countdown-fl .scroll-tick").html(list);
  for (var i = 0; i <= len; i++) {
      var curNum = str.substring(i, i + 1);
      $(".countdown-fl .scroll-tick").eq(i).animate({
          marginTop: -curNum * 20,
      }, "slow");
  }
}
function saleOut () {
  $(".banner ul li").addClass("saleout");
  $(".prev").find(".countdown").removeClass("hide").end().find(".buybtn").addClass("yellow");
  $(".last .countdown").addClass("hide");
  $(".last").append("<span class='termine'></span>");
  $(".donation").append("<span class='termine'></span>");
  $(".donation .buybtn").addClass("saleout");
  $(".bottombuy .middle").addClass("saleout");
  $(".bottombuy .select li").eq(0).removeClass("active").next().addClass("active");
  selectfun($(".bottombuy .select li").eq(1));
  countdownoff(".countdown2 strong");
}

function selectfun (selector) {
  var index = selector.index();
  var href = selector.attr("data-url");
  var ga = selector.attr("data-ga");
  var del = selector.attr("data-del");
  var price = selector.attr("data-price");
  selector.addClass("active").siblings().removeClass("active");
  $(".bottombuy .box ul").stop().animate({ "marginLeft": index*(-330)}, 500);
  $(".bottombuy .box ul li").eq(index).addClass("active").siblings().removeClass("active");
  $(".bottombuy .another .price del").text(del);
  $(".bottombuy .another .price strong").text(price);
  $(".bottombuy .another .buybtn").attr("href", href).attr("onclick", ga);
}

$(document).ready(function() {
  //
  timeInit();
  //compare
  $(".comparebtn").target($(".comparison"));
  //review
  $(window).scrollWindow($(".donation .buybtn"),$('.review dl'),("on"));
  //bottombuy
  $(".bottombuy .select").on("mouseover", "li",  function () {
    selectfun($(this));
  });
  //intro
  $('.intro .cont li').mouseover(function() {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass('active');
    $(".intro .img-change > img").eq(num).addClass("active").siblings().removeClass('active');
    $(".intro .img-glass li").eq(num).addClass("active").siblings().removeClass('active');
  });
});

function cSet(cName,cVal){
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days*24*60*60*1000);
  document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function timeInit(){
  var date = new Date();
  var cName = "itascjan" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime=Math.floor(date.getTime()/1000);
  if (arr == null) {
    countTime=nowTime+600;
    cSet(cName,countTime);
  } else {
    countTime=parseInt(arr[2]);
  }
  mouseEvent = false;
  countdown((".countdown1:eq(0) strong"), (".countdown1:eq(1) strong"));
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
    if(!$(".banner ul li").hasClass('saleout')){
      saleOut();
    }
  }
  return statusNow;
}

var countdown = function(countdown,countdown2) {
  var statusNow=statusSet();
  getCycleCountdown(countTime);
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown2).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if(statusNow!=2){
    setTimeout("countdown('" + countdown + "','" + countdown2 + "')", 1);
  }
};

function getCycleCountdown (endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 2).substr(0, 2);
}

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
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

var countdownoff = function(countdownOff) {
  getCycleCountdownoff();
  $(countdownOff).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdownoff('" + countdownOff + "')", 1);
};

function getCycleCountdownoff() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2019-02-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 2).substr(0, 2);
}