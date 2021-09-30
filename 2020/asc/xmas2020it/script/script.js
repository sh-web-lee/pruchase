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


var start = new TimelineMax();
var t1 = new TimelineMax();
var t2 = new TimelineMax();
var t3 = new TimelineMax();
var t4 = new TimelineMax();
var t5 = new TimelineMax();
var t6 = new TimelineMax();
var t7 = new TimelineMax();
var _end = new TimelineMax();
var _gift;

function scanStart() {
  start.set('.banner .sd,.banner .iu,.banner .pf', {
    opacity: 0,
    scale: 0.5,
    transformOrigin: "50% 100%",
  }).set('.banner .gift-line', {
    width: 0,
  }).set('.banner .gift-flower', {
    scale: 0,
  }).set('.banner .discount', {
    opacity: 0,
    y: -100,
  }).set('.feature-screen', {
    scale: 0.8,
    x: -140,
    y: -20,
    z: 0,
    transformOrigin: "50% 100% 100%",
  });
}

function giftAction() {
  t1.to('.banner .discount', 0.5, {
    opacity: 1,
    y: 0,
  }).to('.banner .sd,.banner .iu,.banner .pf', 0.8, {
    opacity: 1,
    scale: 1,
    ease: Bounce.easeOut,
  }).to('.banner .gift-bg', 0.1, {
    opacity: 0,
    onComplete: function() {
      t2.to('.banner .sd,.banner .iu,.banner .pf', 0, {
        delay: 0.5,
        width: 140,
      }).to('.banner .iu', 0.3, {
        left: 0,
      }).to('.banner .sd', 0.3, {
        left: 46,
      }).to('.banner .pf', 0.3, {
        left: 106,
      }).to('.banner .pf', 0.3, {
        left: 106,
        onComplete: function() {
          t3.to('.banner .gift-line.one', 0.6, {
            width: 217,
          }).to('.banner .gift-flower', 0.6, {
            scale: 1,
            ease: Bounce.easeOut,
          });
        },
      });
    },
  }, '-=0.5');
}

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

var len = $(".feature-tab dl").length;
var index = 0;
var picTimer;
var flag = true;

function featureAction() {
  t7.to('.feature-screen', 0.5, {
    scale: 1,
    x: 0,
    y: 0,
    z: 0,
    onComplete: function() {
      t7.set('.feature-screen', {
        clearProps: 'all'
      });
      $(".feature-wrap").hover(function() {
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
    },
  });
}

var _soldCount = 0;

function soldOut() {
  t1.clear();
  t1.eventCallback("onComplete", null);
  clearInterval(_gift);
  t1.set('.banner .discount,.banner .iu,.banner .sd,.banner .pf', {
    clearProps: 'all'
  });
  $(".banner,.gifts,.footbuy").removeClass("sold").addClass("sold");
  $(".banner .offer.big").append('<div class="mask"><span class="sold-word">TERMINATO</span></div>');
  $(".gifts .price").append('<span class="sold-word">TERMINATO</span>');
  if (_soldCount > 0) {
    return;
  } else {
    soldWord();
    _soldCount = 1;
  }
  $(".gifts").find(".buybtn").attr("href", "javascript: void(0)");
  $(".footbuy .tag").html('<span>1 anno /</span> 1 PC');
  $(".footbuy .price").html('<strong>16,99<small>€</small></strong> <del>29,99€</del>');
  $(".footbuy .price").next().hide();
  var _href = $(".banner .offer").eq(1).find(".buybtn").attr("href");
  var _ga = $(".banner .offer").eq(1).find(".buybtn").attr("onclick");
  $(".banner .big .buybtn,.footbuy .buybtn").attr({
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
}

$(function() {

  var _count = 0;

  $('#dg-container').gallery();

  scanStart();
  _gift = setTimeout(giftAction, 1000);

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".service").offset().top + 100) {
      if (_count > 0) {
        return;
      }
      featureAction();
      _count = 1;

    }
  });

  $(".feature-tab dl").mouseover(function() {
    index = $(".feature-tab dl").index(this);
    showPics(index);
  }).eq(0).trigger("mouseover");
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

// function Time(needle = 0) {
//   date = new Date();
//   min = date.getMinutes();
//   date.setMinutes(min + needle);
//   var y = date.getFullYear();
//   var m = (date.getMonth() + 1) < 10 ? ("0" + (date.getMonth() + 1)) : (date.getMonth() + 1);
//   var d = date.getDate() < 10 ? ("0" + date.getDate()) : date.getDate();
//   var h = date.getHours() < 10 ? ('0' + date.getHours()) : date.getHours();
//   var f = date.getMinutes() < 10 ? ('0' + date.getMinutes()) : date.getMinutes();
//   var s = date.getSeconds() < 10 ? ('0' + date.getSeconds()) : date.getSeconds();
//   return time = y + '-' + m + '-' + d + " " + h + ":" + f + ":" + s;
// }
//
// function getTime() {
//   var time = cGet("xmas2020it");
//   if (time == null) {
//     time = Time(10);
//     cSet("xmas2020it", time);
//   }
//
//   if (Time() <= time) {
//     setTimeout('getTime()', 100);
//     countdown((".countdown b"));
//   } else {
//     soldOut();
//     $(".countdown b").html("00");
//   }
//   return time;
// }

var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi).end();
  if (d != 0 || h != 0 || i != 0 || s != 0 || mi != 0)
    setTimeout("countdown('" + countdown + "')", 100);
  else soldOut();
};

function getCycleCountdown() {
  var date = new Date();
  if (MApp(2.2).cookie.get('xmas2020it')) {
    dt = MApp(2.2).cookie.get('xmas2020it');

  } else {
    dt = date.setMinutes(date.getMinutes() + 15);
    MApp(2.2).cookie.set('xmas2020it', dt);
  }

  var datetime = getCountdown(dt);
  if (datetime == 0) {
    d = h = i = s = mi = "00";
    soldOut();
  } else {
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
  }
}

function getCountdown(t) {
  var e = new Date,
    i = Math.floor(e.getTime() / 1000),
    r = t / 1000,
    n = r - i;
  if (n > 0) {
    var s = Math.floor(n / 86400),
      a = Math.floor(n / 3600 % 24),
      o = Math.floor(n / 60 % 60),
      u = Math.floor(n % 60),
      h = 999 - e.getMilliseconds();
    return 10 > h ? h = "00" + h : 100 > h && (h = "0" + h),
      Array(s, a, o, u, h)
  }
  return 0
}

$(function() {
  countdown((".countdown b"))
});