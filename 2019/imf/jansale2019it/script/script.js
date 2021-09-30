$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function getMessage (_this) {
  var message = {};
  var index = _this.index();
  message.url = _this.attr("data-url");
  message.ga = _this.attr("data-ga");
  message.price = _this.attr("data-price");
  message.del = _this.attr("data-del");
  message.off = _this.attr("data-off");
  $(".bottom-box img").animate({ "marginLeft": index*(-271)}, 500);
  $(".bottombuy .price strong").text(message.price);
  $(".bottombuy .price del").text(message.del);
  $(".bottombuy .price i").text("Risparmi " + message.off);
  $(".bottombuy .buybtn").attr("href", message.url).attr("onclick", message.ga);
}

function overoff () {
  $(".largebox").html("").addClass("over");
  $(".gift").html("").addClass("over");
  $(".imf3pcpfover").addClass("show");
  $(".imf3pcpf").removeClass("active").next().addClass("active");
  var _this = $(".imf3pcpf").next();
  getMessage(_this);
}

$(function () {

  $(window).scrollWindow($(".gift"), $('.review dl'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"), $('.float'), ("on"));
  $(".bottombuy ul li").click( function () {
    $(this).addClass("active").siblings().removeClass("active");
    getMessage($(this));
  });
  timeInit();
  countdown(1);
});

function closeFloat() {
  $(".float").removeClass("on").hide();
}

function timeInit(){
  var date = new Date();
  var cName = "itimfjan" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime=Math.floor(date.getTime()/1000);
  if (arr == null) {
    countTime=nowTime+1800;
    cSet(cName,countTime);
  } else {
    countTime=parseInt(arr[2]);
  }
}

function cSet(cName,cVal){
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days*24*60*60*1000);
  document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
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
    if(!$(".largebox").hasClass('over')){
      overoff();
    }
  }
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

var countdown = function (countdown,tType){
  statusSet();
  getCycleCountdown(countTime);
  $(".countdown:eq(0) strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(".countdown:eq(1) strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout("countdown('"+ countdown +"',"+tType+")", 1);
};

function getCycleCountdown (endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}
