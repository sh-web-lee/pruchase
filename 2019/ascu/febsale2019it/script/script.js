$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
  });
};

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function showPop() {
  $('.popout').addClass('on');
}

function reduce() {
  $(".banner .offer.big").append("<span class='reduce'></span>");
  setTimeout(function() {
    $(".reduce").addClass("on");
  }, 300);
  setTimeout(function() {
    $(".reduce").remove();
  }, 1600);
}

var over = 0;
var discount = ['€99.94', '€30'];

function offerPrice() {
  var _ga = $(".banner .offer .price").eq(0).find(".buybtn").attr("onclick");
  var _href = $(".banner .offer .price").eq(0).find(".buybtn").attr("href");
  $(".footbuy li").eq(0).css("cursor", "default");
  $(".footbuy .imgbox img").eq(1).addClass("active").siblings().removeClass("active");
  $(".footbuy li").eq(1).addClass("active").siblings().removeClass("active");
  $(".footbuy .price").find("del").text($(".banner .offer .price").eq(0).find("del").text());
  $(".footbuy .price").find(".discount").text(discount[1]);
  $(".footbuy .buybtn").attr({
    "href": _href,
    "onclick": _ga
  });
}

function offerOver() {
  offerPrice();
  $(".banner .offer.big").addClass("sold");
  $(".banner .offer.big").html('<span class="soldbox"></span><span class="soldwords"></span>');
  $(".footbuy li.one").append("<em class='soldwords'></em>");
  $(".centbuy .buybtn").addClass("gray");
  $(".centbuy .buybtn").attr("href", "javascript: void(0);");
  setTimeout(function() {
    $('.banner .soldbox').addClass('on');
    $(".soldwords").addClass("slipUp");
  }, 300);
  over = 1;
  $(".float").remove();
  return over;
}

$(function() {
  $(window).scrollWindow($(".banner .buybtn"), $('.float'), ("on"));
  $(".handle li").userMouseover($(".content .reviews"));
  $(".float i.close").on("click", function() {
    $(".float").remove();
  });

  //offerOver();

  $(".footbuy li").hover(function() {
    var index = $(this).index();
    var num = $(this).attr("data-num");
    var original = $(".banner .offer .price").eq(num).find("del").text();
    var _href = $(".banner .offer .price").eq(num).find(".buybtn").attr("href");
    var _ga = $(".banner .offer .price").eq(num).find(".buybtn").attr("onclick");
    if (over != 1) {
      $(this).addClass("active").siblings().removeClass("active");
      $(".footbuy .imgbox").find("img").eq(index).addClass("active").siblings().removeClass("active");
      $(".footbuy .price").find("del").text(original);
      $(".footbuy .price").find(".discount").text(discount[index]);
      $(".footbuy .buybtn").attr({
        "href": _href,
        "onclick": _ga
      });
    } else {
      offerPrice();
    }
  });

  var ver = MApp(2.2).url.getParameters('ver');
  var patt = new RegExp('^12\.0\.(.*)');
  if (patt.test(ver)) {
    showPop();
  }
  timeInit();
  countdown(1);
  packsInit();
});

function timeInit() {
  var date = new Date();
  var cName = "itascufebt" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 600;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
}

function packsInit() {
  packsNumGift = 0;
  getPacksWithGift();
}

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
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
    if (!$(".banner .offer.big").hasClass('sold')) {
      offerOver();
    }
  }
  return statusNow;
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

var countdown = function() {
  var statusNow = statusSet();
  getCycleCountdown(countTime);
  $(".countdown strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if (statusNow == 1) {
    setTimeout("countdown()", 1);
  }
};

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function getPacksWithGift() {
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = countTime - nowTime;
  var packsNow;
  packsNow = Math.ceil(timeDiff / 11.12) > 0 ? Math.ceil(timeDiff / 11.12) : 0;
  if (statusCheck() == 1) {
    if (packsNumGift != packsNow) {
      packsNumGift = packsNow;
      $('.packsNum').html(packsNumGift);
      getUserInfo();
    }
    setTimeout('getPacksWithGift()', 11120);
  }
}

function getUserInfo() {
  $.ajax({
    type: 'GET',
    url: 'index.php',
    data: 'action=getUser',
    success: function(res) {
      res = JSON.parse(res);
      var scrollHeight = $(".banner").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $(".float").removeClass('on');
        setTimeout("$('.float').addClass('on');", 800);
      }
      $("#firstName").html(res.firstName);
      $("#lastName").html(res.lastName);
    }
  });
}