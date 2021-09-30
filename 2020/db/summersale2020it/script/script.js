$.fn.target = function(target, yoffset, event) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({
    scrollTop: Theigth
  }, 'slow');
};

function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function numberJump(obj, num) {
  $(obj).prop('number', 0).animateNumber({
    number: num,
  }, 1000);
}

var start = new TimelineMax();
var t1 = new TimelineMax();
var t2 = new TimelineMax();
var t3 = new TimelineMax();
var t4 = new TimelineMax();
var t5 = new TimelineMax();
var t6 = new TimelineMax();

function scanStart() {
  start.set('.scan-complete,.repair-green,.repair-green em,.sold-word', {
    opacity: 0,
  });
}

// scanStart();

function scanDriver() {
  t1.set('.feature .scan .circleprogress', {
    rotation: 0,
  }).set('.scan-complete,.scan-complete em', {
    opacity: 0,
  }).set('.scan-complete em', {
    scale: 2,
  }).to('.feature .scan .rightcircle', 0.6, {
    rotation: 180,
  }).to('.feature .scan .leftcircle', 0.6, {
    rotation: 180,
  }).to('.scan-complete', 0.1, {
    opacity: 1,
  }).to('.scan-complete em', 0.8, {
    opacity: 1,
    scale: 1,
    ease: Bounce.easeOut,
    onComplete: function() {
      t1.clear();
      t1.eventCallback("onComplete", null);
      $(".feature").addClass("action");
    },
  });
}

// scanDriver();

function gameBoost() {
  t2.set('.game-screen .circleprogress,.game .pointer', {
    rotation: 0,
  }).set('.game-screen .mask-left,.game-screen .mask-right,.game-screen .circleprogress', {
    opacity: 1,
  }).set('.game .pointer', {
    x: 0,
    y: 0,
    z: 0,
  }).to('.game-screen .leftcircle', 0.8, {
    rotation: 180,
  }).to('.game-screen .mask-left', 0, {
    opacity: 0,
  }, "-=0.8").to('.game-screen .rightcircle', 0.8, {
    rotation: 180,
  }).to('.game-screen .circleprogress', 0, {
    opacity: 0,
    onComplete: function() {
      $(".game-screen .mask-right").css("opacity", 0);
    },
  }, "-=0.8").addLabel("blueGreenSpin", "-=1.6").to(".game .pointer", 1, {
    x: -12,
    y: -2,
    z: -4,
    rotation: 274,
    transformOrigin: "100% 0% 0%",
    onComplete: function() {
      t2.clear();
      t2.eventCallback("onComplete", null);
    },
  }, "blueGreenSpin");
}

// gameBoost();

function repair() {
  t3.set('.repair-icon,.repair-green,.repair-green em', {
    opacity: 0,
    // scaleX: 0.66,
    // scaleY: 0.76,
  }).set('.repair-green em', {
    scale: 2,
  }).set('.repair-icon em', {
    rotation: 0,
  }).set('.repair .warning', {
    opacity: 0,
  }).to('.repair .warning', 0.4, {
    opacity: 1,
  }).to('.repair .warning', 0.4, {
    opacity: 0,
  }).to('.repair .warning', 0.4, {
    opacity: 1,
  }).to('.repair-icon', 0.6, {
    opacity: 1,
    ease: Bounce.easeInOut,
    onComplete: function() {
      $(".repair-icon").addClass("on");
    },
  }).to('.repair-icon em', 0.6, {
    rotation: 360,
  }, "+=0.4").to('.repair .warning', 0, {
    opacity: 0,
  }).to('.repair-green', 0, {
    opacity: 1,
  }).to('.repair-green em', 0.8, {
    opacity: 1,
    scale: 1,
    ease: Bounce.easeOut,
    onComplete: function() {
      t3.clear();
      t3.eventCallback("onComplete", null);
    },
  }, "+=0.4");
}

// repair();

function download() {
  t4.set('.down-bar em', {
    width: 0,
  }).to('.down-bar em', 1.2, {
    width: 348,
    ease: Power1.easeOut,
  }).addLabel("blueGreenSpin2", "-=1.6").to(".percent", 0, {
    onComplete: function() {
      numberJump(".percent em", 100);
    },
  }, "blueGreenSpin2").to('.percent', 0, {
    onComplete: function() {
      t4.clear();
      t4.eventCallback("onComplete", null);
    },
  });
}

// download();

function soldWord() {
  t5.set('.sold-word', {
    opacity: 0,
    scale: 3,
  }).to('.sold-word', 0.6, {
    delay: 0.4,
    opacity: 1,
    scale: 1,
    ease: Bounce.easeOut,
  });
}

// soldWord();

function lastNumber() {
  t6.set('.countdown strong.last .countcirlce.right,.countdown strong.last .countcirlce.left', {
    rotation: 0,
  }).to('.countdown strong.last .countcirlce.right', 0.08, {
    rotation: 180,
  }).to('.countdown strong.last .countcirlce.left', 0.08, {
    delay: 0.9,
    rotation: 180,
    onComplete: function() {
      t6.clear();
      t6.eventCallback("onComplete", null);
    },
  });
}
// setInterval(lastNumber, 2000);

function soldOut() {
  $(".banner,.gifts,.changelist li.one").removeClass("sold").addClass("sold");
  $(".banner .offer.big,.gift-box").append('<div class="mask"><span class="sold-word">TERMINATO</span></div>');
  $(".changelist li.one").append('<span class="sold-word">TERMINATO</span>');
  soldWord();
  $(".banner .offer.big").find(".imgbox img").attr("src", _imgSrc);
  $(".gifts").find("img").attr("src", _imgSrcMid);
  $(".changelist li.one,.footbuy .small").removeClass("on");
  $(".changelist li.two").addClass("on");
  $(".db-discount").addClass("two");
  $(".footbuy .price strong").find("big").text('23');
  $(".footbuy .price").find("del").text('59,85€');
  var _href = $(".banner .offer").eq(0).find(".buybtn").attr("href");
  var _ga = $(".banner .offer").eq(0).find(".buybtn").attr("onclick");
  $(".footbuy .buybtn").attr({
    "href": _href,
    "onclick": _ga,
  });
}

// soldOut();

var className = ["one", "two", "three", "four"];
var _index = 0;

function nextFun() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $(".review-tab li").length; i++) {
    $(".review-tab li").eq(i).attr("class", className[i]);
  }
  if (_index < 3) {
    _index++;
    review(_index);
  } else {
    _index = 0;
    review(_index);
  }
}

function prevFun() {
  var addName = className.shift();
  className.push(addName);
  for (var i = 0; i < $(".review-tab li").length; i++) {
    $(".review-tab li").eq(i).attr("class", className[i]);
  }
  if (_index > 0) {
    _index--;
    review(_index);
  } else {
    _index = 3;
    review(_index);
  }
}

function review(index) {
  $(".review .detail-list").eq(index).addClass("on").siblings().removeClass('on');
}

function showPics(index) {
  var _index = index + 1;
  $(".feature-tab dl").eq(index).addClass("on").siblings().removeClass("on");
  $(".feature-list").eq(index).addClass("on").siblings().removeClass("on");
  $(".feature-tag").stop().animate({
    top: index * 128
  }, 300);
  switch (index) {
    case 1:
      gameBoost();
      break;
    case 2:
      repair();
      break;
    case 3:
      download();
      break;
    default:
      scanDriver();
  }
}

var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

var len = $(".feature-tab dl").length;
var index = 0;
var picTimer;
var flag = true;

$(function() {

  scanStart();

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".intro").offset().top - 100) {
      $(".intro-list,.intro-screen").removeClass("on").addClass("on");
    }

    if ($(window).scrollTop() > $(".feature").offset().top) {

      if (flag) {
        flag = false;
        scanDriver();
      } else {
        return flag;
      }

      if (flag === false) {
        $(".feature-tab").hover(function() {
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
    }
  });

  $(".feature-tab dl").mouseover(function() {
    index = $(".feature-tab dl").index(this);
    showPics(index);
  }).eq(0).trigger("mouseover");

  $(".feature-prev").click(function() {
    index -= 1;
    if (index == -1) {
      index = len - 1;
    }
    showPics(index);
  });

  $(".feature-next").click(function() {
    index += 1;
    if (index == len) {
      index = 0;
    }
    showPics(index);
  });

  $(".footbuy li").mouseover(function() {
    var index = $(this).index();
    var _num = $(this).attr("data-num");
    var _price = $(".banner .offer").eq(_num).find(".price strong big").text();
    var _discount = $(".banner .offer").eq(_num).find(".price del").text();
    var _href = $(".banner .offer").eq(_num).find(".buybtn").attr("href");
    var _ga = $(".banner .offer").eq(_num).find(".buybtn").attr("onclick");

    if (!$(this).hasClass("sold")) {
      $(this).addClass("on").siblings().removeClass("on");
      $(".imglist .small").removeClass("on");
      $(".db-discount").removeClass("two");
      if (index === 0) {
        $(".imglist .small").addClass("on");
      } else if (index === 1) {
        $(".db-discount").addClass("two");
        $(".imglist .small").removeClass("on");
      }
      $(".footbuy .price").find("del").text(_discount);
      $(".footbuy .price").find("strong big").text(_price);
      $(".footbuy .price").find(".buybtn").attr({
        "href": _href,
        "onclick": _ga
      });
    }
  });
});


function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function Time(needle = 0) {
  date = new Date();
  min = date.getMinutes();
  date.setMinutes(min + needle);
  var y = date.getFullYear();
  var m = (date.getMonth() + 1) < 10 ? ("0" + (date.getMonth() + 1)) : (date.getMonth() + 1);
  var d = date.getDate() < 10 ? ("0" + date.getDate()) : date.getDate();
  var h = date.getHours() < 10 ? ('0' + date.getHours()) : date.getHours();
  var f = date.getMinutes() < 10 ? ('0' + date.getMinutes()) : date.getMinutes();
  var s = date.getSeconds() < 10 ? ('0' + date.getSeconds()) : date.getSeconds();
  return time = y + '-' + m + '-' + d + " " + h + ":" + f + ":" + s;
}

function getTime() {
  var time = cGet("summersale");
  if (time == null) {
    time = Time(10);
    cSet("summersale", time);
  }

  if (Time() <= time) {
    setTimeout('getTime()', 1);
    countdown((".countdown strong.last .number"));
  } else {
    soldOut();
    $(".countdown strong.last .number").html("00");
  }
  return time;
}