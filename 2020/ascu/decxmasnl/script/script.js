$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("on").siblings().removeClass("on");
    $(UserMessage).eq(num).addClass("on").siblings().removeClass("on");
  });
};
$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

function showPics(index) {
  $(".feature-btn em").removeClass("on").eq(index).addClass("on");
  $(".feature-list").removeClass("on").eq(index).addClass("on");
  $(".feature-tab li").removeClass("on").eq(index).addClass("on");
}

function showTwoPics(index) {
  $(".feature02-screen img").removeClass("on").eq(index).addClass("on");
  $(".feature02-list li").removeClass("on").eq(index).addClass("on");
}

function featureOne() {
  var len = $(".feature-btn em").length;
  var index = 0;
  var picTimer;

  $(".feature-btn em").mouseover(function() {
    index = $(".feature-btn em").index(this);
    showPics(index);
  }).eq(0).trigger("mouseover");

  $(".feature-tab li").mouseover(function() {
    index = $(".feature-tab li").index(this);
    showPics(index);
  }).eq(0).trigger("mouseover");

  $(".feature-box").hover(function() {
    clearInterval(picTimer);
  }, function() {
    picTimer = setInterval(function() {
      showPics(index);
      index++;
      if (index == len) {
        index = 0;
      }
    }, 4000);
  }).trigger("mouseleave");
}

function featureTwo() {
  var len2 = $(".feature02-list li").length;
  var index2 = 0;
  var picTimer2;

  $(".feature02-list li").mouseover(function() {
    index2 = $(".feature02-list li").index(this);
    showTwoPics(index2);
  }).eq(0).trigger("mouseover");

  $(".feature02-list").hover(function() {
    clearInterval(picTimer2);
  }, function() {
    picTimer2 = setInterval(function() {
      showTwoPics(index2);
      index2++;
      if (index2 == len2) {
        index2 = 0;
      }
    }, 4000);
  }).trigger("mouseleave");
}

function soldOut() {
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".mask").remove();
  $(".banner,.footbuy,.giftbox").removeClass("sold").addClass("sold");
  $(".banner .offer.big,.giftwrap").append('<div class="mask"><span class="sold-word">UITVERKOCHT</span></div>');
  setTimeout('$(".sold-word").addClass("on")', 300);
  $(".banner .small .buybtn").removeClass("hollow");
  $(".banner .offer").eq(0).append('<span class="discount">-40<small>%</small></span>');
  $(".footbuy .discount").html("-40<small>%</small>");
  $(".footbuy .price del").html("€49,99");
  $("#botcount").remove();
  $(".buybtn").attr("href", 'https://www.iobit.com/buy.php?product=nl-ascu133pc2999&ref=nl_au13purchase2011&aff=&refs=nl_purchase_ascu&tw='+tw);
}
// soldOut();

$(function() {
  featureOne();
  featureTwo();
  $(".review-tab li").userMouseover(".review-list");

  timeInit();
  countdown(("#topcount b"));
  countdown(("#midcount b"));
  countdown(("#botcount b"));
});


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
  var cName = "ascupurchase2011" + date.getDate();
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
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
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