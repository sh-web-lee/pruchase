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

$.fn.target = function(target, yoffset, event) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({
    scrollTop: Theigth
  }, 'slow');
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
  var len = String(number).length;
  var str = number.toString();
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

function startChange() {
  var cstar = new TimelineMax();
  cstar.set('.intro .circleprogress', {
    rotation: 0,
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

var intro = '.intro';
var introli = '.intro .intro-details li';
var tagred = '.intro .tag-red';
var lcircle = '.intro .leftcircle';
var rcircle = '.intro .rightcircle';
var introattention = '.intro .attention';
var scanbox = '.intro .scanbox';
var downbox = '.intro .downbox';
var downloading = '#down';
var installing = '#install';

function change01() {
  var c1 = new TimelineMax();
  var c2 = new TimelineMax();
  var c3 = new TimelineMax();
  var c4 = new TimelineMax();

  if ($('.intro').hasClass('animate-started')) {
    return;
  }
  if ($(window).scrollTop() > $(".intro").offset().top - 50) {

    $('.intro').each(function() {
      disabledMouseWheel(this);
    });

    if (!$(".intro").hasClass("stop")) {
      $("html, body").target($(".intro"), 0);
    } else {
      event.stopPropagation();
    }

    $('.intro').addClass('animate-started');
    //step 1:  show number 1
    c1.to($(tagred), 1, {
      delay: .5,
      top: -288,
      onStart: function () {
        $(introli).eq(0).find('h3').addClass('red');
        //step 2: show the circle
        c2.to($(lcircle), 1, {
          delay: .3,
          ease: Power0.easeIn,
          rotation: 180
        });
        c2.to($(rcircle), 1, {
          ease: Power0.easeIn,
          rotation: 180,
          onComplete: function () {
            //step 3: scan box remove
            c4.to($(scanbox), 1, {
              delay: .5,
              opacity: 0,
              onComplete: function () {
                $(scanbox).remove();
              }
            });
            //step 4: show attention(list)
            c2.to($(introattention), 1, {
              delay: .5,
              opacity: 1,
              scale: 1,
              transformOrigin: "50% 100%",
              //step 5: show number 2
              onComplete: function () {
                c1.to($(tagred), 2, {
                  top: -140,
                  onStart: function () {
                    $(introli).eq(1).find('h3').addClass('red');
                  }
                });
                //step 6: change02
                change02();
                //step 7: attention remove
                c4.to($(introattention), 1, {
                  delay: 1,
                  opacity: 0
                });
                //step 8: show down box
                c2.to($(downbox), 1, {
                  delay: 1,
                  opacity: 1,
                  onStart: function () {
                    //step 9: show the first progress
                    c3.to($(downloading), .5, {
                      opacity: 1,
                      top: 62,
                      left: 20,
                      scale: 1,
                      //step 10: progress working
                      onComplete: function () {
                        c2.to('#down .down-icon em', 1.0, {
                          delay: 0.3,
                          rotation: 360,
                          repeat: 1,
                        });
                        TweenLite.to('#down .down-red-light', 1.0, {
                          delay: 0.3,
                          opacity: 1,
                        });
                        TweenLite.to('#down .down-num span', 0.2, {
                          onComplete: function() {
                            numberJump('#down');
                          },
                        });
                        TweenLite.to('#down .down-red-bar', 2, {
                          width: 380,
                          onComplete: function () {
                            //step 11: show number 3
                            c1.to($(tagred), 1, {
                              top: 0,
                              onStart: function () {
                                $(introli).eq(2).find('h3').addClass('red');
                              },
                              onComplete: function () {
                                //step 12: down box remove
                                c4.to($(downbox), 1.0, {
                                  opacity: 0,
                                  onComplete: function () {
                                    $(downbox).remove();
                                  }
                                });
                                //step 13: show install box
                                c2.to('.intro .installbox', 1.0, {
                                  opacity: 1,
                                  //step 14: show the second progress
                                  onStart: function () {
                                    c3.to($(installing), .5, {
                                      opacity: 1,
                                      top: 62,
                                      left: 20,
                                      scale: 1,
                                      onComplete: function () {
                                        c3.to('#install .down-icon em', 1.0, {
                                          delay: 0.5,
                                          rotation: 360,
                                          repeat: 1,
                                        });
                                        TweenLite.to('#install .down-red-light', 1.0, {
                                          delay: 0.5,
                                          opacity: 1,
                                        });
                                        TweenLite.to('#install .down-num span', 0.2, {
                                          onComplete: function() {
                                            numberJump('#install');
                                          },
                                        });
                                        TweenLite.to('#install .down-red-bar', 2, {
                                          width: 380,
                                          onComplete: function () {
                                            setTimeout(' $("#install").remove();', 1000);
                                            TweenLite.to('.intro .completed', 1.0, {
                                              delay: 1,
                                              opacity: 1,
                                              scale: 1,
                                              transformOrigin: "50% 100%",
                                              onComplete: function () {
                                                setTimeout(function() {
                                                  $(intro).addClass("stop");
                                                  $(intro).each(function() {
                                                    abledMouseWheel(this);
                                                  });
                                                }, 500);
                                              }
                                            });
                                          }
                                        });
                                      }
                                    });
                                  }
                                });
                              }
                            });
                          }
                        });
                      }
                    })
                  }
                });
              }
            });
          }
        });
      }
    });

  }
}

function change02() {
  if ($('.intro').hasClass('animate-started2')) {
    if ($('.intro').hasClass('stop')) {
      $('.intro').each(function() {
        abledMouseWheel(this);
      });
    }
    return;
  }
  $('.intro').addClass('animate-started2');
}

var _num = 0,
  p = 0,
  t = 0,
  _first = 0,
  yoffset = 0;

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var paramPop = MApp(2.2).url.getParameters('pop');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.discount,.buybtn,.price,.feature,.numbox,.popbox").removeClass("soldout").addClass("soldout");
  $(".change").html('Sorry, 70% discount is sold out.');
  $(".change-title").html("<p>Oops, 70% discount SOLD OUT!</p><h2>However, <span>65% discount</span> is still available.</h2>");
  $(".comparison .comparethree").html("");
  $(".comparison .comparefive").html("");
  $(".feature h2").find("span").html("65% OFF");
  $(".change-price").html('$<big>22</big>.95');
  $(".popbox .change-price").html('$<big>18</big>.95');
  $(".buybtn.exbtn.soldout").attr({
    "href": "https://www.iobit.com/buy.php?product=db3pc2295&ref=xr_ascpdbsold&refs=purchase_dbx&tw=" + tw,
    "onclick": "ga('send', 'event', 'dbbuysold', 'buy', 'dbpurchase-xmasascp');",
  });
}
// soldOut();

var d = 0;


$(window).on('scroll', function() {
  change01()
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
  maskTimeiu = cGet('maskasc_t');

  if ((scroll == 1) && (_maskTimetwoiu - maskTimeiu) < 300) {
    return false;
  } else {
    var expireTime = cGet('maskasc_e');
    if (expireTime == null) {
      expireTime = Date.parse(new Date()) + 60 * 1000;
      cSet('maskasc_e', expireTime);
    }
    popShow();
    cycleCountdown();
  }
}

function expireTimeCheck() {
  var expireTime = cGet('maskasc_e');
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
    $(".pop-bg,.popbox").remove();
  }
}

function timeInit() {
  maskTimeiu = cGet('maskasc_t');
  if (maskTimeiu == null) {
    var maskTimeiu = new Date();
    var _maskTimeiu = Math.floor(maskTimeiu.getTime() / 1000);
    cSet('maskasc_t', _maskTimeiu);
  }
  mouseCheck = 0;
  maskTimeCountDown();
}

function maskTimeCountDown() {
  var maskTimetwoiu = new Date();
  var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
  maskTimeiu = cGet('maskasc_t');
  if ((_maskTimetwoiu - maskTimeiu) < 300) {
    setTimeout('maskTimeCountDown()', 1000);
  } else {
    $(document).bind('mousemove', mouseMove);
  }
}

function packsInit() {
  var cName = "endecascpdbxr_p";
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
    url: "xascpdb.php",
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
    var packsNumTotal = cGet('endecascpdbxr_t');
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
      url: "xascpdb.php",
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