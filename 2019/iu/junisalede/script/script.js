$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function goTarget(target) {
  var Theigth = target.offset().top;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}

var review = function (review) {
  $(review).mouseover(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $("span.line").stop().animate({"marginLeft": 98*index}, 200);
    $(".review-message p").eq(index).addClass("active").siblings().removeClass("active");
  });
};

var soldout = function () {
  var ref = MApp(2.2).url.getParameters('ref');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner .large-message .off").html("-73<small>%</small>");
  $(".banner .large-message .price").html("20,99€<small>/Jahr</small>");
  $(".banner .large-message .buybtn").attr({"href": "https://www.iobit.com/buy.php?product=de-iu9pfbundle2099&ref=de_iu9bundleafter1907" + refStr + "&refs=de_purchase_iu&tw=" + tw, "onclick": "ga('send', 'event', 'iubuy', 'buy', 'iubundleafter1907-de');"});
};

$(function () {
  timeInit();
  packsInit();
  //review
  review((".review ul li"));
  //backtotop
  $(window).scrollWindow($(".banner .buybtn"), $('.backtotop'), ("on"));
  //float
  $(window).scrollWindow($(".banner .buybtn"), $('.float'), ("on"));
});

function cSet(cName,cVal){
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days*24*60*60*1000);
  document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "deiujun_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime=Math.floor(date.getTime()/1000);
  if (arr == null) {
    countTime=nowTime+300;
    cSet(cName,countTime);
  } else {
    countTime=parseInt(arr[2]);
  }
  countdown((".banner .countdown strong"), (".float .countdown strong"));
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
    if($(".banner .large-message .off").html()!='-73<small>%</small>'){
      $(".viewNum").eq(1).html(589);
      soldout();
    }
  }
  return statusNow;
}

var countdown = function(countdown,countdown2) {
  var statusNow=statusSet();
  getCycleCountdown(countTime);
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s);
  $(countdown2).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s);
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

function packsInit(){
  var date = new Date();
  var cName = "deiujun_p" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var packsArr;
  if (arr == null) {
    packsArr=[134,235798,1001];
  } else {
    packsArr=arr[2].split('.');
  }
  setNum(packsArr);
  setTimeout('getPacksNum()', 8000);
}

function getPacksNum() {
  var date = new Date();
  var statusNow=statusCheck();
  $.ajax({
    type: "GET",
    url: "junisale.php",
    data: "action=getPacks&d=" + date.getDate() + "&r=" + Math.random()+"&status="+statusNow,
    success: function(res) {
      var packsArr=JSON.parse(res);
      if(packsArr.length==3){
        setNum(packsArr);
      }
    }
  });
  setTimeout('getPacksNum()', 8000);
}

function setNum(packsArr){
  $(".viewNum").eq(0).html(commafy(packsArr[0])).end().eq(1).html(commafy(packsArr[1])).end().eq(2).html(commafy(packsArr[2]));
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