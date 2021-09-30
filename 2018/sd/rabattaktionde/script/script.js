$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
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

var countdown = function(countdown) {
  getCycleCountdown(countTime);
  $(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
}

(function($) {
  $.fn.isOnScreen = function(x, y) {
    if (x == null || typeof x == 'undefined') x = 1;
    if (y == null || typeof y == 'undefined') y = 1;
    var win = $(window);
    var viewport = {
      top: win.scrollTop(),
      left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var height = this.outerHeight();
    var width = this.outerWidth();
    if (!width || !height) {
      return false;
    }
    var bounds = this.offset();
    bounds.right = bounds.left + width;
    bounds.bottom = bounds.top + height;
    var visible = (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    if (!visible) {
      return false;
    }
    var deltas = {
      top: Math.min(1, (bounds.bottom - viewport.top) / height),
      bottom: Math.min(1, (viewport.bottom - bounds.top) / height),
      left: Math.min(1, (bounds.right - viewport.left) / width),
      right: Math.min(1, (viewport.right - bounds.left) / width)
    };
    return (deltas.left * deltas.right) >= x && (deltas.top * deltas.bottom) >= y;

  };
})(jQuery);

$(function() {
  timeInit();
  countdown(("#countdown strong"));
  $(".intro .more").target($("#compare"), 0);
  $(".floatlayer .gift").target($(".donation"), 0);
  $(".floatlayer .comment").target($(".review"), 0);
  $(".floatlayer .free").target($("#compare"), 0);
  $(".floatlayer .backtotop").target($(".banner"), 0);
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $(".floatlayer li").on("click", function() {
    $(this).addClass("on").siblings().removeClass("on");
  });

  $(window).on('scroll', function() {
    if ($('.intro').isOnScreen(0, 0)) {
      $(".floatlayer li").removeClass("on");
    } else if ($('.donation').isOnScreen(0, 0)) {
      $(".floatlayer li").removeClass("on");
      $(".floatlayer li.gift").addClass("on");
    } else if ($('.review').isOnScreen(0, 0)) {
      $(".floatlayer li").removeClass("on");
      $(".floatlayer li.comment").addClass("on");
    } else if ($('.comparison').isOnScreen(0, 0)) {
      $(".floatlayer li").removeClass("on");
      $(".floatlayer li.free").addClass("on");
    } else {
      $(".floatlayer li").removeClass("on");
      $(".floatlayer li.backtotop").addClass("on");
    }
  });

  var sWidth = $(".intro .focus").width();
  var len = $(".intro .focus li").length;
  var index = 0;
  var picTimer;

  var btn = "<div class='btn'>";
  for (var i = 0; i < len; i++) {
    btn += "<span></span>";
  }
  btn += "</div>";
  $(".intro .focus").append(btn);

  $(".intro .focus .btn span").css("opacity", 0.4).mouseover(function() {
    index = $(".intro .focus .btn span").index(this);
    showPics(index);
  }).eq(0).trigger("mouseover");

  $(".intro .focus .prev").click(function() {
    index -= 1;
    if (index == -1) {
      index = len - 1;
    }
    showPics(index);
  });

  $(".intro .focus .next").click(function() {
    index += 1;
    if (index == len) {
      index = 0;
    }
    showPics(index);
  });

  $(".intro .focus ul").css("width", sWidth * (len));

  $(".intro .focus").hover(function() {
    clearInterval(picTimer);
  }, function() {
    picTimer = setInterval(function() {
      showPics(index);
      index++;
      if (index == len) {
        index = 0;
      }
    }, 8000);
  }).trigger("mouseleave");

  function showPics(index) {
    var nowLeft = -index * sWidth;
    $(".intro .focus ul").stop(true, false).animate({
      "left": nowLeft
    }, 300);
    if (nowLeft === -1100) {
      $(".intro .focus .prev").addClass("on");
    }
    $(".intro .focus .btn span").removeClass("on").eq(index).addClass("on");
    $(".intro .focus .btn span").stop(true, false).animate({
      "opacity": "1"
    }, 300).removeClass("on").eq(index).stop(true, false).animate({
      "opacity": "1"
    }, 300).addClass("on");
  }
});

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "deascumod" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 3600 * 10;
    cSet(cName, countTime);
  } else {
    countTime = arr[2];
  }
  countdown(("#countdown strong"));
}

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  while (remainingTime <= 0) {
    remainingTime += 3600 * 10;
  }
  if (remainingTime > 0) {
    var d = Math.floor(remainingTime / (24 * 60 * 60));
    var h = Math.floor(remainingTime / (60 * 60) % 24);
    var i = Math.floor(remainingTime / 60 % 60);
    var s = Math.floor(remainingTime % 60);
    return [d, h, i, s];
  } else {
    return [0, 0, 0, 0];
  }
}