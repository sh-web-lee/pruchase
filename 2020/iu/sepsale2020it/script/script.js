
$.fn.target=function (target,yoffset) {
  $(this).click(function() { 
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "iusemmer2020" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 600;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
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
    var mi = Math.floor((999 - dateObj.getMilliseconds()) / 10);
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}
var countdown = function(countdown) {
  var statusNow = statusSet();
  getCycleCountdown(countTime);
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if (statusNow == 1) {
    setTimeout("countdown('" + countdown + "')", 1);
  }
};

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 2);
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$(".banner").hasClass('"sold"')) {
      soldout();
    }
  }
  return statusNow;
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < countTime) {
    return 1;
  } else {
    return 2;
  }
}

function soldout() {
  $(".banner .gift-box,.gift-content,.bottom-content ul li:eq(0)").addClass("soldout")
  $(".bottom-content ul li:eq(0)").removeClass("active")
  $(".gift-content .buybtn").attr('href','javascript:;')
  $(".bottom-content .img-box").addClass("one-box").removeClass("three-box");
  $(".bottom-content ul li:eq(1)").addClass("active")
  $(".bottom-content .discount").addClass("other-pc").html("-50<sup>%</sup>")
  $(".bottom-content .price").html("<strong>14</strong><span>99 €<b>&nbsp;</b></span>")
  $('.bottom-content .buybtn').attr("href",$(".banner .box").eq("1").find(".buybtn").attr("href"));
  $('.bottom-content .buybtn').attr("onclick",$(".banner .box").eq("1").find(".buybtn").attr("onclick"));
  $(".gift-content dl").html("");
}

$(function () {
  timeInit();
  //review
  $('#dg-container').gallery();
  countdown((".date strong b"));
  $('.feature dl').hover(function(event) {
    var num =$(this).attr("data-num");
    $(this).addClass("active").siblings().removeClass("active");
    $('.feature .img-box img').eq(num).addClass("active").siblings().removeClass("active");
  });

});
$('.bottom-content ul li').click(function ( event ) {
  var num =$(this).index();
  var numbox =$(this).attr("data-num");
  if(!$('.bottom-content ul li:eq(0)').hasClass("soldout")) {
    $(this).addClass("active").siblings().removeClass("active");
    $('.bottom-content .buybtn').attr("href",$(".banner .box").eq(numbox).find(".buybtn").attr("href"));
    $('.bottom-content .buybtn').attr("onclick",$(".banner .box").eq(numbox).find(".buybtn").attr("onclick"));
    if(num==0) {
      $(".bottom-content .discount").removeClass("other-pc").html("-85<sup>%</sup>")
      $(".bottom-content .img-box").removeClass("one-box").removeClass("three-box");
      $(".bottom-content .price").html("<strong>15</strong><span>99 €<b>0,04€ al giorno</b></span>")
    }
    else {
      $(".bottom-content .discount").addClass("other-pc").html("-50<sup>%</sup>")
      $(".bottom-content .img-box").addClass("one-box").removeClass("three-box");
      $(".bottom-content .price").html("<strong>14</strong><span>99 €<b>&nbsp;</b></span>")
    }
  }
  else {
    soldout();
  }
});

