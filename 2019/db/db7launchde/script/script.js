//userreview 
function switchover(name, clickname, active, contname) {
  $(name).on(clickname, function() {
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
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

function over() {
  var _href5 = $(".banner .box").eq(2).find(".buybtn").attr("href");
  var _ga5 = $(".banner .box").eq(2).find(".buybtn").attr("onclick");
  var _discount5 = "80€";
  $(".footbuy li").removeClass("active");
  $(".footbuy .imgbox img").removeClass("active");
  $(".footbuy li").eq(1).addClass("sold");
  $(".footbuy li").eq(2).addClass("active");
  $(".footbuy .imgbox img").eq(2).addClass("active");
  $(".footbuy .imgbox").find(".point").remove();
  $(".banner .right").html('<div class="gray"></div><div class="ausbox"></div>');
  $(".footbuy li.three").addClass("default");
  $(".footbuy .buybtn").attr({
    "href": _href5,
    "onclick": _ga5
  });
  $(".footbuy .price .off").text(_discount5);
  setTimeout(function() {
    $(".banner .ausbox").addClass("zoomout");
  }, 300);
}

$(function() {
  timeInit();
  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(".backtotop").target($(".banner"), 0);
  $(window).scrollWindow($(".intro .list.two"), $('.backtotop'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"), $('.intro .list'), ("active"));
  if ($(document).scrollTop() > $(".intro").offset().top - 300) {
    $(".intro .list").addClass("active");
  }
  $(".intro .panel .list").hover(function() {
    $(".intro .panel ul").css('marginLeft', -700 * ($(this).index()));
    $(this).addClass('on').siblings().removeClass("on");
  });

  $(".footbuy li").on("click", function() {
    if (!$(this).hasClass("sold")) {
      var index = $(this).index();
      $(this).addClass('active').siblings().removeClass("active");
      $(".footbuy .imgbox img").eq(index).addClass("active").siblings().removeClass("active");
      switch (index) {
        case 0:
          $(".footbuy li").removeClass("min small");
          $(".footbuy li.five,.footbuy li.three").addClass("small").removeClass("min");
          $(".footbuy .point").removeClass("show");
          break;
        case 1:
          $(".footbuy li").removeClass("min small");
          $(".footbuy li.one,.footbuy li.five").addClass("min").removeClass("small");
          setTimeout('$(".footbuy .point").addClass("show");', 300);
          break;
        case 2:
          $(".footbuy li").removeClass("min small");
          $(".footbuy .point").removeClass("show");
          break;
        default:
      }
      var discount = $(".banner .box").eq(index).find(".imgbox span").text();
      var _discount = discount.substr(1, discount.length);
      var btnHref = $(".banner .box").eq(index).find(".buybtn").attr("href");
      var btnGa = $(".banner .box").eq(index).find(".buybtn").attr("onclick");
      $(".footbuy .price").find(".off").text(_discount);
      $(".footbuy .price").find(".buybtn").attr("href", btnHref);
      $(".footbuy .price").find(".buybtn").attr("onclick", btnGa);
    }
  });

});

function timeInit() {
  var date = new Date();
  var cName = "itdbdecny_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 600 + Math.floor(Math.random() * 6) * 60;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  countdown((".countdown b"), 1);
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

var countdown = function(countdown, tType) {
  var statusnow = statusSet();
  if (tType == 1) {
    getCycleCountdown(countTime);
  }
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if (statusnow == 1) {
    setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
  }
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$(".footbuy li").eq(2).hasClass('sold')) {
      over();
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

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}