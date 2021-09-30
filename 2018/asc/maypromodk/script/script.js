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
  $(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
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

function pop() {
  $(".pop-bg,.pop").addClass("on");
}

$(function() {
  popShow=1;
  countdown(("#countdown strong"));
  countdown(("#countdown2 strong"));
  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(".banner .off").addClass('shake');

  $(window).on('scroll', function() {　
    if ($(document).scrollTop() > $(".intro").offset().top - 300) {
      $(".intro .list").addClass("active");
    }
  });
  packsInit();
  setTimeout('getPacks()', 12000);

  $(".close").click(function() {
    $(".pop-bg,.pop").removeClass("on");
    $(".pop-small").removeClass("on");
    popShow=0;
  });

  $(".smaller").click(function() {
    $(".pop-bg,.pop").removeClass("on");
    $(".pop-small").addClass("on");
  });
  $(".larger").click(function() {
    var statusNow=statusCheck();
    if(statusNow==1){
      pop();
      $(".pop-small").removeClass("on");
    }
  });
  //pop();
  timeInit();
});

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2017-08-15')) / (3600 * 24 * 1000));
  var buyNum = 6063294 + daysDiff * 164 + (164 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}

function packsInit() {
  date = new Date();
  var cName = 'deascaug' + date.getDate();
  var packsNow, arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packsNow = 164;
  } else {
    packsNow = arr[2];
  }
  $('.packsNum').html(packsNow);
  getSalesNum(packsNow);
}

function getPacks() {
  var date = new Date();
  $.ajax({
    'url': './maypromode.php',
    'type': 'get',
    'data': 'action=getPacks&d=' + date.getDate(),
    success: function(sPacks) {
      $('.packsNum').html(sPacks);
      getSalesNum(sPacks);
    }
  });
  setTimeout('getPacks()', 12000);
}

function commafy(num) {
  num = num + "";
  num = num.replace(/[ ]/g, "");
  if (num == "") {
    return;
  }
  if (isNaN(num)) {
    return;
  }
  var index = num.indexOf(".");
  if (index == -1) {
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(num)) {
      num = num.replace(reg, "$1.$2");
    }
  } else {
    var intPart = num.substring(0, index);
    var pointPart = num.substring(index + 1, num.length);
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(intPart)) {
      intPart = intPart.replace(reg, "$1.$2");
    }
    num = intPart + "." + pointPart;
  }
  return num;
}

function cSet(cName,cVal){
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days*24*60*60*1000);
  document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "dkasct" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime=Math.floor(date.getTime()/1000);
  if (arr == null) {
    countTime=nowTime+550;
    cSet(cName,countTime);
  } else {
    countTime=parseInt(arr[2]);
  }
  countdownPop('#countdown3 strong',1);
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
    $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
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
      $(".pop-bg,.pop").removeClass("on");
      $(".pop-small").addClass("on").addClass('over');
      $('#countdown3 strong').eq(0).html('00').end().eq(1).html('00').end().eq(2).html('000');
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