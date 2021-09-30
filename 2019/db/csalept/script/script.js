//count down
function cycleCountdown(){
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0,2);
  $(".countdown strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $('#pop-countdown strong').eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $('#popsmall-countdown strong').eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout('cycleCountdown()', 1);
}
cycleCountdown();

function strFormat(str){
  return str.replace(/,/g,'.');
}

$.fn.target=function (target,yoffset) {
  $(this).click(function() { 
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};
function popShow() {
  $(".pop-small").hide();
  $(".pop").fadeIn(300, function () {
    $(".pop-coupon").addClass("on");
  });
}
function smallPopShow() {
  $(".pop-coupon").removeClass("on");
  $(".pop").fadeOut(300, function(){
    $(".pop-small").fadeIn();
  });
}

$(function(){
  $('.buy-num-bot').html(strFormat($('.buy-num-bot').html()));
  $(".imf-message a").target($("#compare"),0);
});

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}
function cClear(name){
  var exp = new Date();
  exp.setTime(exp.getTime() - 1);
  document.cookie= name + "=;expires="+exp.toGMTString();
}
function timeInit(){
  var date = new Date();
  var cName = "ptdbc_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 285;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  countdown();
}
var countdown = function() {
  var statusNow=statusCheck();
  if(statusNow==2){
    if(($(".pop-small").is(":hidden"))&&($(".pop").is(":hidden"))){
      popShow();
    }
  }else{
    setTimeout("countdown()", 1000);
  }
};
function statusCheck() {
  var date = new Date();
  var cName = "ptdbc_t" + date.getDate();
  var timeNow = date.getTime() / 1000;
  if (timeNow < countTime) {
    return 1;
  } else {
    cClear(cName);
    return 2;
  }
}
$(function(){
  timeInit();
});