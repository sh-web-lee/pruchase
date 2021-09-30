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

function numberJump(target, num, starnumber, time) {
  target.prop('number', starnumber).animateNumber({
    number: num,
  }, time);
}

function focus() {
  $('.progressbar span').append('<em class="reduce"></em>');
  $('.reduceGift').append('<b class="reduceGift reduceNum"></b>');
  var tReduce = new TimelineLite();
  tReduce.to('.reduce', 1, {
    y: -100,
    autoAlpha: 0,
    onComplete: function() {
      $('.reduce').remove();
    }
  }, "-=0.25").to('.reduceNum', 0.8, {
    scale: 2,
    autoAlpha: 0,
    onComplete: function() {
      $('.reduceNum').remove();
    }
  }, "+=0.25");
}

function flipNum(num, numRe) {
  var number = num * 2.31;
  $(".progressbar span").css("width", number);
  if (numRe == 1) {
    setTimeout(function() {
      $(".reduceNum").text(num);
    }, 500);
  }
}

function maskShow() {
  $(".floatlayer").remove();
  $(".mask").remove();
  $(".mask-box").remove();
  $('.main').append('<div class="mask"></div><div class="mask-box"><p>Opps, Das heute 0€ Angebot ist bereits erschöpft.</p><h2>Ab sofort können Sie den exklusiven 70% Rabatt genießen.</h2><div class="imgbox"><img src="' + imgUrl + '" alt="Advanced SystemCare 12 PRO"/><p>1Jahr/ 3 PCs</p></div><p class="price"><strong>17,99€</strong> <del>59,99€</del></p><a class="buybtn" href="' + _url + '" onclick="' + _ga + '" data-text="JETZT KAUFEN"><span>JETZT KAUFEN</span></a></div>');
  $('.mask').addClass('started');
  var tMask = new TimelineLite();
  tMask.from('.mask', 0.5, {
      autoAlpha: 1
    }, "-=0.25")
    .from('.mask-box', 0.8, {
      scale: 0.3,
      autoAlpha: 0
    }, "-=0.75");
  if ($(".mask").hasClass("started")) {
    $(".mask-box .close").on("click", function() {
      $(".mask").remove();
      $(".mask-box").remove();
    });
  }
}

var bightWidth = 0;

function getBightWidth() {
  if (bightWidth === 0) {
    var getWidth = setInterval(function() {
      bightWidth += 2;
      $(".bight").width(bightWidth);
      if (bightWidth === 250) {
        $(".intro-part01 dl.optimized").addClass("on")
      } else if (bightWidth === 470) {
        $(".intro-part01 dl.online").addClass("on")
      } else if (bightWidth === 720) {
        $(".intro-part01 dl.disk").addClass("on")
      } else if (bightWidth === 1130) {
        $(".intro-part01 p.better").addClass("on")
      } else if (bightWidth === 1358) {
        clearInterval(getWidth);
      }
    }, 6);
  }
}

$(function() {
  $('#dg-container').gallery();
  $(window).on('scroll', function() {
    if ($(window).scrollTop() >= $(".banner .buybtn").offset().top) {
      getBightWidth();
      setTimeout(function() {
        $('.floatlayer').addClass("on");
      }, 2500);
    } else {
      $('.floatlayer').removeClass("on");
    }
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
  var cName = "ascpre" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 300;
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

var countdown = function(countdown, tType) {
  statusSet();
  if (tType == 1) {
    getCycleCountdown(countTime);
  }
  $(countdown).each(function() {
    $(this).find('b').eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi)
  });
  setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
};

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function packsInit() {
  var date = new Date();
  var cName = "ascprepa" + date.getDate();

  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = countTime - nowTime;
  packs = Math.ceil(timeDiff / 5.9) > 0 ? Math.ceil(timeDiff / 5.9) : 0;
  flipNum(packs, 1);

  numberJump($('.packsNum'), packs, 100, 1500);
  numberJump($('.soldNum'), 500 - packs, 500, 1500);

  $('.progressbar span').css('transition', '.5s linear');
}

function getSales() {
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = countTime - nowTime;
  var packsNow = Math.ceil(timeDiff / 5.9) > 0 ? Math.ceil(timeDiff / 5.9) : 0;
  if (packsNow != packs) {
    if (statusCheck() == 2) {
      packs = 0;
    } else {
      packs = packsNow;
    }
    flipNum(packs, 1);
    focus(packs);
    $('.packsNum').html(packs);
    $('.soldNum').html(500 - packs);
  }
  if (statusCheck() != 2) {
    setTimeout('getSales()', 6000);
  }
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
    if (!$('.mask').hasClass('started')) {
      maskShow();
      $('.packsNum').html(0);
    }
  }
}

function getViewNum() {
  $.ajax({
    type: "GET",
    url: "asc12preorderexpired.php",
    data: "action=getViewNum",
    success: function(res) {
      $('.viewNum').html(res);
    }
  });
  setTimeout('getViewNum()', 15000);
}

$(function() {
   timeInit();
   packsInit();
   countdown((".countdown"), 1);
   setTimeout('getSales()', 6000);
   setTimeout('getViewNum()', 15000);
});