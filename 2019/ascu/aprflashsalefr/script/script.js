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

function saleOut() {
  $(".mask").remove();
  $(".banner .offer").find(".countdown").remove();
  $(".banner .offer").removeClass("sold").addClass("sold");
  $(".banner .offer.left").find(".buybtn").removeClass("gray");
  $(".banner .offer.left").append('<div class="countdown countdown2"><i class="all-icons"></i> <span>Plus que</span> <b>09</b> H <b>09</b> M <b>10</b> s <b>18</b> Ms*</div>');
  $(".footbuy li.pc").removeClass("on").siblings().addClass('on');
  $(".footbuy li.pc").css("cursor", "default");
  $(".complimentary .price").find(".buybtn").removeClass("on").addClass('on');
  $(".complimentary .price").find(".buybtn").attr("href", "javascript:void(0);");
  $(".banner .offer.right").append('<div class="mask"><span>TERMINE</span></div>');
  $(".complimentary .price").append('<div class="mask"><span>TERMINE</span></div>');
  $(".footbuy li.pc").append('<div class="mask"><span>TERMINE</span></div>');
  setTimeout(function() {
    $(".mask span").addClass("on");
  }, 300);
  selectfun($(".footbuy li").eq(1));
  countdownoff(".countdown2 b");
}
// saleOut();

function selectfun(selector) {
  var index = selector.index();
  var num = selector.attr("data-num");
  var _href = $(".banner .offer").eq(num).find(".buybtn").attr("href");
  var _ga = $(".banner .offer").eq(num).find(".buybtn").attr("onclick");
  var original = $(".banner .offer").eq(num).find(".price del").text();
  selector.addClass("on").siblings().removeClass('on');
  $(".footbuy .imgbox").find("img").eq(index).addClass("on").siblings().removeClass('on');
  $(".footbuy .price").find(".buybtn").attr({
    'href': _href,
    'onclick': _ga
  });
  $(".footbuy .price").find("del").text(original);
}

$(document).ready(function() {
  timeInit();
  $(".comparebtn").target($(".comparison"));
  $(".footbuy ul").on("mouseover", "li", function() {
    if (!$(".banner .offer").hasClass("sold")) {
      selectfun($(this));
    }
  });

  // review
  $('.review .handle li').hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
  });

});

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "frascuapr" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 550;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  countdown((".countdown1:eq(0) b"), ("#centercount:eq(0) b"));
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

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$(".banner .offer").hasClass('sold')) {
      saleOut();
    }
  }
  return statusNow;
}

var countdown = function(countdown, countdown2) {
  var statusNow = statusSet();
  getCycleCountdown(countTime);
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  // $(countdown2).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if (statusNow != 2) {
    setTimeout("countdown('" + countdown + "','" + countdown2 + "')", 1);
  }
};

function getCycleCountdown(endTime) {
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