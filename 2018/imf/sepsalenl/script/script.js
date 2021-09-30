// Cycle count down
//function getCycleCountdown () {
//  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 24:00:00');
//  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
//  d = MApp(2.2).packages.zeroize(datetime[0], 2);
//  h = MApp(2.2).packages.zeroize(datetime[1], 2);
//  i = MApp(2.2).packages.zeroize(datetime[2], 2);
//  s = MApp(2.2).packages.zeroize(datetime[3], 2);
//  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0,3);
//  $(".countdown:eq(0) strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
//  $(".countdown:eq(1) strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
//  setTimeout("getCycleCountdown()", 1);
//}

$(function () {
  //getCycleCountdown ();
  // bottombuy
  $(".bottombuy").on("click", "li", function () {
    bottombuy($(this));
  });
  // feature
  $(".feature").on("mouseenter", "dl", function () {
    var index = $(this).attr("data-index");
    $("#show" + index).addClass("on").siblings().removeClass("on");
    $(".detail-show").addClass("on");
  }).stop().on("mouseleave", "dl", function () {
    $(".showes").removeClass("on");
    $(".detail-show").removeClass("on");
  });
  // review
  $(".review").on("hover", "li", function () {
    var index = $(this).index();
    $(".review .content > span").stop().animate({left: (10+index*20)+"%"}, 150);
    setTimeout(function () {
      $(".review .details dl").eq(index).addClass("active").siblings().removeClass("active");
    },150);
  });
  timeInit();
});

function soldOut () {
  //banner
  $(".banner .offer1 h3").text($(".banner .offer2 h3").text());
  $(".banner .offer1 .countdown").hide();
  $(".banner .offer1 .box").attr("src", _src).css({"width": 227, "height": 217, "marginTop": 34, "marginLeft": 80});
  $(".banner .offer1 .buybtn").attr({"href": $(".banner .offer2 .buybtn").attr("href"), "onclick": $(".banner .offer2 .buybtn").attr("onclick")});
  $(".banner .offer1").addClass("soldout");
  $(".banner .offer2").addClass("soldout");
  //gift
  $(".gift").slideUp(300);
  //bottombuy
  $(".bottombuy .wrapper").append("<span class='soldout'></span>");
  $(".bottombuy ul li").eq(0).css({"visibility": "hidden"});
  $(".bottombuy p.price").css({"backgroundImage": "url(\"../../2018/imf/sepsalenl/images/price-pass3.png\")"});
  bottombuy($(".bottombuy ul li").eq(1));
}

function bottombuy(selector) {
  var index = selector.index();
  var url = selector.attr("data-url");
  var ga  = selector.attr("data-ga");
  var price = selector.attr("data-price");
  selector.addClass("active").siblings().removeClass("active");
  $(".boxes").stop().animate({ "marginLeft": -index*271}, 500);
  $(".bottombuy .price strong").text(price);
  $(".bottombuy .price").attr("class", "price price0"+index);
  $(".bottombuy .buybtn").attr("href", url).attr("onclick", ga);
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "nlimfsep_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 664;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  countdown();
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

var countdown = function() {
  var statusNow=statusSet();
  getCycleCountdown(countTime);
  $(".countdown:eq(0) strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(".countdown:eq(1) strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if(statusNow==1) {
    setTimeout("countdown()", 1);
  }
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    //if($(".footbuy li").eq(1).hasClass('active')){
    if (!$(".banner .offer1").hasClass('soldout')) {
      soldOut();
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