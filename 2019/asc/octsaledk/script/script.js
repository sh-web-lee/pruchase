var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
  setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$(function () {
  timeInit();
  //countdown
  countdown((".countdown strong"));
  countdown((".countdown2 strong"));
  //feature
  $(window).scrollWindow($(".banner h1"),$('.feature dl'),("on"));
  //gifts
  $(window).scrollWindow($(".feature .content"),$('.gifts dl'),("on"));
  //review
  $(".review ul li").hover(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review-list div").eq(index).addClass("active").siblings().removeClass("active");
    $(".review-arrow").stop().animate({"marginLeft": 128*index}, 300);
  });
  //bottom-buy
  $(".bottom-buy ul li").hover(function () {
    var index = $(this).index();
    var url = $(this).attr("data-url");
    var ga = $(this).attr("data-ga");
    var price = $(this).attr("data-price");
    var del = $(this).attr("data-del");
    $(this).addClass("active").siblings().removeClass("active");
    $(".bottom-buy dl .box img").stop().animate({"marginLeft": -140*index}, 300);
    if(index === 1) {
      $(".bottom-buy dl .price").html(price + "<del>"+ del +"</del>");
      $(".bottom-buy dl .countdown2").css({"visibility": "visible"});
    }else {
      $(".bottom-buy dl .price").html(price);
      $(".bottom-buy dl .countdown2").css({"visibility": "hidden"});
    }

    $(".bottom-buy dl .buybtn").attr({
      "href": url,
      "onclick": ga
    });
  });
  //float
  $(window).scrollWindow($(".banner .buybtn"),$('.float'),("on"));
});

function couponShow () {
  $(".coupon").fadeIn(500);
}
function couponHide () {
  $(".coupon").fadeOut(500);
}
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
  var cName = "dkascoct_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 10;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  timeCountdown();
}
var timeCountdown = function() {
  var statusNow=statusCheck();
  if(statusNow==2){
    couponShow();
  }else{
    setTimeout("timeCountdown()", 1000);
  }
};
function statusCheck() {
  var date = new Date();
  var cName = "dkascoct_t" + date.getDate();
  var timeNow = date.getTime() / 1000;
  if (timeNow < countTime) {
    return 1;
  } else {
    cClear(cName);
    return 2;
  }
}