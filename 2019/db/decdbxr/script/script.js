$.fn.userMouseover = function(UserMessage, arrow) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(arrow).stop().animate({
      marginLeft: 220 * num
    }, 300);
  });
};

function numberJump(name) {
  $(name + " .down-num span").prop('number', 0).animateNumber({
    number: 100,
  }, 1800);
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
    change02();
    $(".intro .attention, .intro .attention").css("display", "none");
  }
});

function startChange() {
  var cstar = new TimelineMax();
  cstar.set('.intro .circleprogress', {
    rotation: 0,
  }).set(".fast", {
    opacity: 0,
    y: 200,
  }).set(".fast-list", {
    opacity: 0,
    y: -150,
  }).set('.intro .attention', {
    opacity: 0,
    scale: 0,
  }).set('.intro .downbox', {
    opacity: 0,
  }).set('.intro .installbox', {
    opacity: 0,
  }).set('.intro .completed', {
    opacity: 0,
    scale: 0,
  }).set('.intro .down-red-bar', {
    width: 0,
  }).set('.intro .down-red-light', {
    opacity: 0,
  });
}
startChange();


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

    c1.to('.intro .fast', 1, {
      delay: 0.5,
      y: 0,
      opacity: 1,
      ease: Bounce.easeOut,
      onComplete: function() {
        c1.to(".intro .fast-list", 1, {
          delay: 0.6,
          opacity: 1,
          y: 0,
          onComplete: function() {
            TweenLite.to($('.intro .leftcircle'), 0.8, {
              rotation: 180,
            });
            TweenLite.to($('.intro .rightcircle'), 0.8, {
              delay: 0.68,
              rotation: 180,
              onComplete: function() {
                $(".intro .scanbox").remove();
                c1.to('.intro .attention', 0.8, {
                  opacity: 1,
                  scale: 1,
                  transformOrigin: "50% 100%",
                  onComplete: function() {
                    div.innerHTML = div.innerHTML;
                    setTimeout(function() {
                      $(div).animate({
                        scrollTop: div.scrollHeight
                      }, 1200);
                      change02();
                    }, 800);
                  },
                });
              },
            });
          },
        });
      },
    }, '-=0.85');
  }
}

function change02() {
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

  var c3 = new TimelineMax();
  var c4 = new TimelineMax();
  $(".intro .scanbox").remove();
  c3.to('.intro .attention', 0.1, {
    delay: 0.8,
    opacity: 0,
    zIndex: -1,
  });
  c3.to('.intro .downbox', 0.8, {
    opacity: 1,
    onComplete: function() {
      c3.to('#down .down-icon em', 0.8, {
        delay: 0.3,
        rotation: 360,
        repeat: -1,
      });
      TweenLite.to('#down .down-red-light', 0.8, {
        delay: 0.3,
        opacity: 1,
      });
      TweenLite.to('#down .down-num span', 0.1, {
        onComplete: function() {
          numberJump('#down');
        },
      });
      TweenLite.to('#down .down-red-bar', 2, {
        width: 380,
        onComplete: function() {
          $(".intro .downbox").remove();
          c4.to('.intro .installbox', 0.8, {
            delay: 0.5,
            opacity: 1,
            onComplete: function() {
              c4.to('#install .down-icon em', 0.8, {
                delay: 0.3,
                rotation: 360,
                repeat: -1,
              });
              TweenLite.to('#install .down-red-light', 0.8, {
                delay: 0.3,
                opacity: 1,
              });
              TweenLite.to('#install .down-num span', 0.1, {
                onComplete: function() {
                  numberJump('#install');
                },
              });
              TweenLite.to('#install .down-red-bar', 2, {
                width: 380,
                onComplete: function() {
                  $("#install").remove();
                  TweenLite.to('.intro .completed', 0.8, {
                    opacity: 1,
                    scale: 1,
                    transformOrigin: "50% 100%",
                    onComplete: function() {
                      setTimeout(function() {
                        $(".intro").addClass("stop");
                        $('.intro').each(function() {
                          abledMouseWheel(this);
                        });
                      }, 300);
                    },
                  });
                },
              });
            },
          });
        }
      });
    },
  });

}

var _num = 0;
var p = 0,
  t = 0,
  _first = 0,
  yoffset = 0;

function changeContent(event) {
  $(".intro .installbox").remove();
  $('.intro .inner').scroll(function() {
    if (div.scrollTop >= 210) {
      TweenLite.set(".intro .attention, .intro .attention,.intro .downbox, .intro installbox,.intro .completed", {
        clearProps: 'all',
      });
      TweenLite.set(".intro .completed", {
        opacity: 1,
        zIndex: 9,
      });
    }
    if (div.scrollTop <= 105) {
      TweenLite.set(".intro .attention, .intro .attention,.intro .downbox, .intro installbox,.intro .completed", {
        clearProps: 'all',
      });
      TweenLite.set(".intro .attention", {
        opacity: 1,
        zIndex: 9,
      });
    }
  });
}

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var paramPop = MApp(2.2).url.getParameters('pop');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.discount,.buybtn,.price,.feature,.numbox,.popbox").removeClass("soldout").addClass("soldout");
  $(".change").html('Sorry, 70% discount is sold out.');
  $(".change-title").html("<p>Oops, 70% discount SOLD OUT!</p><h2>However, <span>65% discount</span> is still available.</h2>");
  $(".feature h2").find("span").html("65% OFF");
  $(".change-price").html('$<big>22</big>.95');
  $(".popbox .change-price").html('$<big>18</big>.95');
  $(".buybtn.exbtn.soldout").attr({
    "href": "https://www.iobit.com/buy.php?product=db73pc2295&ref=xr_db2295sold" + refStr + "&refs=purchase_dbx",
    "onclick": "ga('send', 'event', 'dbbuysold', 'buy', 'dbpurchase-xmas);",
  });
}
// soldOut();

var d = 0;

$(window).on('scroll', function() {

  change01();

  // changeContent();

  if ($(window).scrollTop() < $(".comparison").offset().top) {
    $('.floatlayer').removeClass('on');
  } else {
    $('.floatlayer').addClass('on');
  }

});

function popShow() {
  $(".pop-bg,.popbox").addClass("on");
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
  maskTimeiu = cGet('maskdbxr_t');

  if ((scroll == 1) && (_maskTimetwoiu - maskTimeiu) < 300) {
    return false;
  } else {
    var expireTime = cGet('maskdbxr_e');
    if (expireTime == null) {
      expireTime = Date.parse(new Date()) + 60 * 1000;
      cSet('maskdbxr_e', expireTime);
    }
    popShow();
    cycleCountdown();
  }
}

function expireTimeCheck() {
  var expireTime = cGet('maskdbxr_e');
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
  maskTimeiu = cGet('maskdbxr_t');
  if (maskTimeiu == null) {
    var maskTimeiu = new Date();
    var _maskTimeiu = Math.floor(maskTimeiu.getTime() / 1000);
    cSet('maskdbxr_t', _maskTimeiu);
  }
  mouseCheck = 0;
  maskTimeCountDown();
}

function maskTimeCountDown() {
  var maskTimetwoiu = new Date();
  var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
  maskTimeiu = cGet('maskdbxr_t');
  if ((_maskTimetwoiu - maskTimeiu) < 300) {
    setTimeout('maskTimeCountDown()', 1000);
  } else {
    $(document).bind('mousemove', mouseMove);
  }
}

function packsInit() {
  var cName = "endecdbxr_p";
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
    url: "xdb.php",
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
    var packsNumTotal = cGet('endecdbxr_t');
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
      url: "xdb.php",
      data: "action=getViewNum",
      success: function(res) {
        $('.viewNum').html(res);
      }
    });
    setTimeout('getViewNum()', 15000);
  }
}

$(function() {
  //review
  $(".users li").userMouseover($(".content dl"), $(".review span.arrow"));

  packsInit();
  timeInit();

  //feature
  // fillFeature(13);

  $(".close").click(function() {
    $(".pop-bg,.popbox").removeClass("on");
  });


  setTimeout('getViewNum()', 15000);

  // $(".intro .circleprogress").addClass("on");
});