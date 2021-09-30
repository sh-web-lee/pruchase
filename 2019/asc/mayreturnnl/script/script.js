$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function goTarget(target, yoffset) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}

$(function () {
  nlAscReturn.standardFun();
  init();
  timeInit();
  $(".bottomcart ul li").hover(function () {
    nlAscReturn.bottomcartFun($(this));
  });
  $(window).scrollWindow($(".benfits .textlink"),$('.reviews dl'),("on"));
  //benfits
  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555*($(this).index()+1));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()+1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .list-icon li").removeClass('active').eq($(this).index()+1).addClass('active');

  });
  $(".benfits .list-icon li").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555*($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if(num==0) {
      $(".benfits .detail-list dl").removeClass("active");
    } else {
      $(".benfits .detail-list dl").eq($(this).index()-1).addClass("active").siblings().removeClass("active");
    }
    $(".benfits .list-icon li").removeClass('active');
    $(this).addClass('active');
  });
});

function cGet(name,notByDay) {
  var exp = new Date();
  if(notByDay!=1){
    name = name + exp.getDate();
  }
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function cSet(name, value, notByDay) {
  var Days = 2;
  var exp = new Date();
  if(notByDay!=1){
    name = name + exp.getDate();
  }
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function init(){
  isReturn=false;
  var cName="nlascre_r";
  var date=new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var returnTime=cGet(cName,1);
  if(returnTime==null){
    uvStatistic(1);
    cSet(cName,nowTime+30*60,1);
  }else{
    if(returnTime<=nowTime){
      if(cGet("nlascre_r_init")==null){
        cSet("nlascre_r_init",1);
        var cNameCount = "nlascre_t";
        cSet(cNameCount, nowTime + 409);
      }
      uvStatistic(2);
      nlAscReturn.returnFun();
      isReturn=true;
    }else{
      uvStatistic(1);
    }
  }
}

function timeInit(){
  var cName = "nlascre_t";
  countTime=cGet(cName);
  if (countTime == null) {
    var date=new Date();
    var nowTime = Math.floor(date.getTime() / 1000);
    countTime = nowTime + 409;
    cSet(cName, countTime);
  }
  countdown((".countdown1 strong"), (".countdown2 strong"), (".countdown3 strong"), (".countdown4 strong"));
  if(cGet('enascanni_s')==-1) {
    maskTimeInit();
  }else if(cGet('enascanni_s')!=-2){
    setTimeout("$(document).bind('mousemove', mouseOut)",30000);
  }
}

function mouseOut(e) {
  if (e.clientY < 3) {
    var cName='enascanni_s';
    cSet(cName,-1);
    maskTimeInit();
    $(document).unbind('mousemove', mouseOut);
  }
}

function maskTimeInit(){
  if((cGet('enascanni_s')==-1)&&(!popupShow)){
    nlAscReturn.showPopup();
    var date = new Date();
    var cName = "enascanni_c";
    var arr = cGet("enascanni_c");
    var nowTime = Math.floor(date.getTime() / 1000);
    if (arr == null) {
      maskCountTime = nowTime + 60;
      cSet(cName, maskCountTime);
    } else {
      maskCountTime = parseInt(arr);
    }
    maskCountdown();
  }
}

var maskCountdown = function() {
  var statusNow=maskStatusSet();
  getCycleCountdownPop(maskCountTime);
  $(".popup-countdown").html(s);
  if(statusNow==1) {
    setTimeout("maskCountdown()", 1000);
  }
};

function getCycleCountdownPop(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

function maskStatusSet() {
  var statusNow =maskStatusCheck();
  if (statusNow == 2) {
    nlAscReturn.closePopup();
  }
  return statusNow;
}

function maskStatusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < maskCountTime) {
    return 1;
  } else {
    return 2;
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

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

var countdown = function (countdown1, countdown2, countdown3, countdown4){
  var statusNow = statusSet();
  if ((statusNow == 1)) {
    getCycleCountdown(countTime);
    $(countdown1).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
    $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
    $(countdown3).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
    $(countdown4).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
    setTimeout("countdown('"+ countdown1 +"', '"+ countdown2 +"', '"+ countdown3 +"', '"+ countdown4 +"')", 1);
  }
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if(isReturn){
      nlAscReturn.finalFun();
    }else{
      nlAscReturn.soldoutFun();
    }
  }
  return statusNow;
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow <= countTime) {
    return 1;
  } else {
    return 2;
  }
}

function uvStatistic(type){
  $.ajax({
    type: "GET",
    url: "return.php",
    data: "action=statistic&type="+type
  });
}
