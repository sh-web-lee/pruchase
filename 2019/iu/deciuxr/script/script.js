function numberJump() {
  $(".change-num").prop('number', 50).animateNumber({
    number: 100,
  }, 1000);
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".packsNum").html(num);
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var _list = '';
  var len = String(number).length;
  var str = number.toString();
  var _box = $(".flipNum");
  var createobj;
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#flip .list").eq(a).animate({
      marginTop: -curNum * 47,
    }, "slow");
    $("#fliptwo .list").eq(a).animate({
      marginTop: -curNum * 47,
    }, "slow");
  }
}
// flipNum(48, 3);

function scrollFunc(evt) {
  evt = evt || window.event;
  if (evt.preventDefault) {
    // Firefox
    evt.preventDefault();
    evt.stopPropagation();
  } else {
    // IE
    evt.cancelBubble = true;
    evt.returnValue = false;
  }
  return false;
}

function disabledMouseWheel(obj) {
  if (document.addEventListener) {
    obj.addEventListener('DOMMouseScroll', scrollFunc, false);
  } //W3C
  obj.onmousewheel = scrollFunc; //IE/Opera/Chrome
}

function abledMouseWheel(obj) {
  if (document.removeEventListener) {
    obj.removeEventListener('DOMMouseScroll', scrollFunc, false);
  }
  obj.onmousewheel = obj.onmousewheel = obj.onkeydown = null;
}

$.fn.target = function(target, yoffset, event) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({
    scrollTop: Theigth
  }, 'slow');
};

var div = document.getElementById('inner');

$('.intro .inner').scroll(function() {
  if (div.scrollTop >= 200) {
    $(".intro").addClass("firstStop");
    change03();
    $(".intro .waitbox, .intro .finishbox,.intro .gray-bg").css("display", "none");
  }
});


function change01() {
  var c1 = new TimelineMax();
  var c2 = new TimelineMax();

  if ($('.intro').hasClass('animate-started')) {
    return;
  }
  if ($(window).scrollTop() > $(".intro").offset().top - 50) {

    $('.intro').each(function() {
      disabledMouseWheel(this);
    });

    if (!$(".intro").hasClass("stop")) {
      // alert("h");
      $("html, body").target($(".intro"), 0);
    } else {
      event.stopPropagation();
    }

    $(".intro").each(function() {
      disabledMouseWheel(this);
    });

    $('.intro').addClass('animate-started');

    c2.set('.intro .fast,.intro .fast-list,.secure,.scancircle,.intro .gray-bg,.waitbox,.waitbox .gree,.finishbox,.deepbox,.toolbar', {
      opacity: 0,
    }).set(".secure,.waitbox .gree,.finishbox", {
      scale: 0,
    }).set('.intro .intro-list', {
      left: 219,
      y: -100,
    }).set('.waitbox .load-bar', {
      width: 0,
    }).set(".fast", {
      opacity: 0,
      y: 300,
    }).set(".fast-list", {
      opacity: 0,
      y: -150,
    });

    c1.to(".intro .fast", 0.8, {
      delay: 0.5,
      y: 0,
      opacity: 1,
      ease: Bounce.easeOut,
    }, "-=0.2");
    c1.to(".intro .fast-list", 1, {
      delay: 0.6,
      opacity: 1,
      y: 0,
      onComplete: function() {
        c1.to('.intro .secure', 0.8, {
          delay: 0.2,
          opacity: 1,
          scale: 1,
        }, "-=0.1");
        c1.to('.intro .scancircle', 0.8, {
          opacity: 1,
          rotation: 360,
          onComplete: function() {
            $(".secure,.scancircle").remove();
            c1.to(".intro .gray-bg", 0.8, {
              opacity: 1,
              onComplete: function() {
                c1.to('.waitbox', 0.8, {
                  opacity: 1,
                  onComplete: function() {
                    c1.to(".waitbox .load-bar", 2, {
                      width: 355,
                      // ease: Power3.easeOut,
                      /*ease: SlowMo.ease.config(0.7, 0.7, false),*/
                      onComplete: function() {
                        $(".intro .waitbox").remove();
                        c1.to(".finishbox", 0.6, {
                          opacity: 1,
                          scale: 1,
                          onComplete: function() {
                            $('.intro').each(function() {
                              abledMouseWheel(this);
                            });
                            setTimeout(function() {
                              div.innerHTML = div.innerHTML;
                              $(div).animate({
                                scrollTop: div.scrollHeight
                              }, 1200);
                            }, 800);
                            setTimeout('change03()', 1200);
                          },
                        });
                      },
                    });
                    TweenLite.to(".waitbox .gree.one", 0.6, {
                      opacity: 1,
                      scale: 1,
                    });
                    TweenLite.to(".waitbox .gree.two", 0.6, {
                      delay: 0.2,
                      opacity: 1,
                      scale: 1,
                    });
                    TweenLite.to(".waitbox .gree.three", 0.6, {
                      delay: 0.4,
                      opacity: 1,
                      scale: 1,
                    });
                    TweenLite.to(".waitbox .gree.four", 0.6, {
                      delay: 0.4,
                      opacity: 1,
                      scale: 1,
                    });
                    TweenLite.to(".waitbox .gree.five", 0.6, {
                      delay: 0.8,
                      opacity: 1,
                      scale: 1,
                    });
                    TweenLite.to(".waitbox .gree.six", 0.6, {
                      delay: 1,
                      opacity: 1,
                      scale: 1,
                    });
                    TweenLite.to(".waitbox .gree.seven", 0.6, {
                      delay: 1.4,
                      opacity: 1,
                      scale: 1,
                    });
                  },
                });
              },
            });
          },
        }, "-=0.1");
      }
    }, "-=0.45");
  }
}

// change01();

var _num = 0;
var p = 0,
  t = 0,
  _first = 0,
  yoffset = 0;

function change03() {
  var c3 = new TimelineMax();
  var c4 = new TimelineMax();

  if ($('.intro').hasClass('animate-started2')) {
    if ($('.intro').hasClass('stop')) {
      $('.intro').each(function() {
        abledMouseWheel(this);
      });
      changeContent();
    }
    return;
  }

  $('.intro').addClass('animate-started2');
  $(".intro .gray-bg").remove();
  $(".secure,.scancircle").remove();
  // $(".intro .loading").remove();
  // $(".intro .gray").removeClass("on").addClass("on");
  // $(".intro .percent, .intro .rocket").css("display", "none");
  TweenLite.set($(".intro .percent, .intro .rocket"), {
    clearProps: 'all',
    opacity: 0,
  });

  c3.to(".finishbox", 0.6, {
    opacity: 0,
  });
  c4.to('.deepbox', 0.8, {
    opacity: 1,
    onComplete: function() {
      c4.to('.toolbar', 0.8, {
        delay: 1,
        opacity: 1,
        onComplete: function() {
          setTimeout(function() {
            $(".intro").addClass("stop");
            $('.intro').each(function() {
              abledMouseWheel(this);
            });
          }, 400);
        },
      });
    },
  });
}
// change03();

function change04() {
  var c5 = new TimelineMax();

  if ($('.feature').hasClass('animate-started')) {
    return;
  }
  if ($(window).scrollTop() > $(".feature").offset().top - 320) {
    $('.feature').addClass('animate-started');
    c5.set($('.feature .feature-img'), {
      opacity: 0,
      top: -100,
      left: 356,
    }).set($('.feature .light-box'), {
      opacity: 0,
      width: 0,
    }).set($('.feature .feature-list'), {
      opacity: 0,
      right: 100,
    }).set($('.feature .small-box'), {
      opacity: 0,
      left: 62,
    }).set($('.feature .price'), {
      opacity: 0,
      y: 60,
    });
    c5.to(".feature .feature-img", 0.6, {
      delay: 0.5,
      left: 356,
      top: 0,
      opacity: 1,
      onComplete: function() {
        TweenLite.to($('.feature .light-box'), 0.8, {
          opacity: 1,
          width: 0,
        }, "-=0.25");
        TweenLite.to($('.feature .light-box'), 1.6, {
          width: 273,
          ease: Linear.easeNone,
          onComplete: function() {
            $('.feature .light').remove();
            TweenLite.to($('.feature .feature-img'), 1, {
              left: 28,
            }, "+=0.25");
            TweenLite.to($('.feature .feature-list'), 1, {
              delay: 0.6,
              opacity: 1,
              right: 0,
              ease: Linear.easeNone,
            });
            TweenLite.to($('.feature .small-box'), 1, {
              delay: 0.8,
              opacity: 1,
              left: -32,
              ease: Linear.easeNone,
              onComplete: function() {
                TweenLite.to($('.feature .price'), 0.8, {
                  opacity: 1,
                  y: 0,
                });
              },
            });
          },
        });
      },
    }, "-=0.25");
  }
}

function changeContent(event) {
  $('.intro .inner').scroll(function() {
    $(".intro .loading,.secure,.scancircle,.waitbox,.finishbox").remove();
    $(".intro .intro-bg").removeClass("on");
    if (div.scrollTop >= 210) {
      TweenLite.set($(".scanbox,.toolbar,.deepbox"), {
        clearProps: 'all',
      });

      TweenLite.set(".scanbox", {
        opacity: 0,
      });

      TweenLite.set(".toolbar,.deepbox", {
        opacity: 1,
      });

    }
    if (div.scrollTop <= 105) {
      TweenLite.set(".scanbox,.toolbar,.deepbox", {
        clearProps: 'all',
      });

      TweenLite.set(".toolbar,.deepbox", {
        opacity: 0,
      });

      TweenLite.set(".scanbox", {
        opacity: 1,
      });
    }
  });
}

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var paramPop = MApp(2.2).url.getParameters('pop');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.discount,.buybtn,.price,.feature,.numbox,.popbox").removeClass("soldout").addClass("soldout");
  $(".change").html('Sorry, 50% discount is sold out.');
  $(".change-title").html("<p>Oops, 50% discount SOLD OUT!</p><h2>However, <span>45% discount</span> is still available.</h2>");
  if ($(".compare-wrap").hasClass("new")) {
    $(".feature h2").html('Activate all features with <span>45% OFF</span> today!');
  }
  $(".change-price").html('$<big>16</big>.77');
  $(".popbox .change-price").html('$<big>12</big>.97');
  $(".buybtn.exbtn.soldout").attr({
    "href": 'https://www.iobit.com/buy.php?product=iu93pc1677x&ref=xr_iu1677' + refStr + '&refs=purchase_iux',
    "onclick": "ga('send', 'event', 'iubuysold', 'buy', 'iupurchase-xmas);",
  });
}

// soldOut();

var d = 0;

$(window).on('scroll', function() {

  change01();

  if (!$(".compare-wrap").hasClass("new")) {
    change04();
  }

  // changeContent();

  if ($(window).scrollTop() < $(".comparison").offset().top) {
    $('.floatlayer').removeClass('on');
  } else {
    $('.floatlayer').addClass('on');
  }

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
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function mouseMove(e) {
  if (e.clientY > 6 || e.clientX > 6) {
    mask(1);
  }

  $(document).unbind('mousemove', mouseMove);
}

function mask(scroll) {
  var maskTimetwoiu = new Date();
  var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
  maskTimeiu = cGet('maskiuxr_t');

  if ((scroll == 1) && (_maskTimetwoiu - maskTimeiu) < 300) {
    return false;
  } else {
    var expireTime = cGet('maskiuxr_e');
    if (expireTime == null) {
      expireTime = Date.parse(new Date()) + 60 * 1000;
      cSet('maskiuxr_e', expireTime);
    }
    popShow();
    cycleCountdown();
  }
}

function expireTimeCheck() {
  var expireTime = cGet('maskiuxr_e');
  if (Date.parse(new Date()) < expireTime) {
    return (expireTime - Date.parse(new Date())) / 1000;
  } else {
    return false;
  }
}

function cycleCountdown() {
  remainTime = expireTimeCheck();
  if (remainTime > 0) {
    var s = ((remainTime % 60) < 10) ? ('0' + (remainTime % 60)) : (remainTime % 60);
    var m = Math.floor(remainTime / 60);
    var arr = String(s).split("");
    $(".minute em").html(arr[0]);
    $(".minute em.last").html(arr[1]);
    remainTime--;
    setTimeout('cycleCountdown(remainTime)', 1000);
  } else {
    //console.log("11");
    $(".pop-bg,.popbox").remove();
  }
}

function timeInit() {
  maskTimeiu = cGet('maskiuxr_t');
  if (maskTimeiu == null) {
    var maskTimeiu = new Date();
    var _maskTimeiu = Math.floor(maskTimeiu.getTime() / 1000);
    cSet('maskiuxr_t', _maskTimeiu);
  }
  mouseCheck = 0;
  maskTimeCountDown();
}

function maskTimeCountDown() {
  var maskTimetwoiu = new Date();
  var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
  maskTimeiu = cGet('maskiuxr_t');
  if ((_maskTimetwoiu - maskTimeiu) < 300) {
    setTimeout('maskTimeCountDown()', 1000);
  } else {
    $(document).bind('mousemove', mouseMove);
  }
}

function packsInit() {
  var cName = "endeciuxr_p";
  packs = cGet(cName);
  if (packs === 0) {
    soldOut();
  } else {
    if (packs == null) {
      getSales(2);
    } else {
      getSales(1);
    }
  }
}

function getSales(isInit) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xiu.php",
    data: "action=getPacks&isInit=" + isInit + "&d=" + date.getDate() + "&packsNum=" + packsNum,
    success: function(res) {
      var sales = JSON.parse(res);
      if ((sales.packsNum != packs) || (isInit)) {
        packs = sales.packsNum;
        if (isInit) {
          flipNum(sales.packsNum, 3, 1000);
        } else {
          flipNum(sales.packsNum, 3, 100);
        }
      }
      if (packs > 0) {
        setTimeout('getSales(0)', getRetime(isInit));
      } else {
        flipNum(0, 3);
        if (!$(".discount,.buybtn").hasClass("soldout")) {
          soldOut();
        }
      }
    }
  });
}

function getRetime(isInit) {
  if (isInit == 2) {
    return 1000;
  } else {
    var reTime = 6.3;
    var packsNumTotal = cGet('endeciuxr_t');
    if (packsNumTotal > 1) {
      if ((packsNumTotal !== null) && (!isNaN(packsNumTotal))) {
        return (600 / packsNumTotal) * 1000;
      }
    } else {
      return 20000;
    }
  }
}

function getViewNum() {
  if (packs > 0) {
    $.ajax({
      type: "GET",
      url: "xiu.php",
      data: "action=getViewNum",
      success: function(res) {
        $('.viewNum').html(res);
      }
    });
    setTimeout('getViewNum()', 15000);
  }
}

function popShow() {
  $(".pop-bg,.popbox").addClass("on");
}

$(function() {
  $(".review li").mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review-box").find(".reviews").eq(num).addClass("active").siblings().removeClass("active");
  });
  //flipNum(50, 4);

  $(".close").click(function() {
    $(".pop-bg,.popbox").removeClass("on");
  });

  packsInit();
  timeInit();
  setTimeout('getViewNum()', 15000);
});