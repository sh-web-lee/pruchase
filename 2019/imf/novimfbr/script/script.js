function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".packsNum").html(num);
  $(".listbox").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var _list = '';
  var len = String(number).length;
  var str = number.toString();
  var _box = $(".flipNum");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<div class="listbox"><div class="list"></div></div>'));
    } else {
      createobj = $('<div class="listbox"><div class="list"></div></div>');
    }
    _box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    _list += '<b>' + arr[j] + '</b>';
  }
  $(".list").append(_list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#flip .list").eq(a).animate({
      marginTop: -curNum * 46,
    }, "slow");
    $("#fliptwo .list").eq(a).animate({
      marginTop: -curNum * 46,
    }, "slow");
  }
}
// flipNum(48, 4);

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

function changeStart() {
  var cstar = new TimelineMax();

  cstar.set(".intro-list", {
    left: 219,
    top: -50,
  }).set($('.intro-list,.intro .computer,.intro .shield,.malwarebox .malware,.malwarebox b,.intro-txt .slow,.intro .scanbox,.intro .fast,.fast-list,.intro .safe,.intro .safe-words'), {
    opacity: 0,
  }).set($('.malwarebox .malware'), {
    scale: 0,
  }).set(".intro-txt .slow", {
    x: 200,
    y: 0,
  }).set($('.intro .scanbox'), {
    scale: 0,
  }).set($('.intro .computer.two'), {
    height: 0,
  }).set($('.intro .imflight'), {
    width: 0,
  }).set($('.intro .shield'), {
    x: -60,
  }).set(".fast", {
    y: 300,
  }).set(".fast-list", {
    y: 150,
  });
}

function change01() {

  var c1 = new TimelineMax();

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

    $(".intro").each(function() {
      disabledMouseWheel(this);
    });

    $('.intro').addClass('animate-started');

    c1.to(".intro-list", 0.8, {
      left: 219,
      top: 0,
      opacity: 1,
      onComplete: function() {
        TweenLite.to($('.malwarebox b'), 0, {
          opacity: 1,
        });
        c1.to($('.malwarebox .malware'), 0.5, {
          opacity: 1,
          scale: 1,
          repeat: 2,
          yoyo: true,
          onComplete: function() {
            c1.to($('.intro-list'), 0.8, {
              left: 0,
              onComplete: function() {
                c1.to($('.intro-txt .slow'), 0.8, {
                  opacity: 1,
                  x: 0,
                  y: 0,
                  onComplete: function() {
                    c1.to($('.intro .computer.one'), 0.8, {
                      opacity: 1,
                    }).to($('.intro .scanbox'), 0.8, {
                      opacity: 1,
                      scale: 1,
                      transformOrigin: "30% 100%",
                      onComplete: function() {
                        c1.to($('.intro .computer.two'), 0.8, {
                          opacity: 1,
                        }, '-=0.5').to('.intro .computer.two', 1, {
                          height: 0,
                        }, "-=0.8").to('.intro .imfline', 1, {
                          opacity: 0,
                          bottom: 0,
                        }, "-=1.2");
                        var _width = $(".intro .slow h3 span").width();
                        var _width2 = $(".intro .slow p span.one").width();
                        var _width3 = $(".intro .slow p span.two").width();
                        $(".intro .slow h3 span,.intro .slow p span").append('<em class="line"></em>');
                        TweenLite.to('.intro .slow h3 span em', 0.8, {
                          delay: 1.6,
                          width: _width,
                        }, "+=0.25");
                        TweenLite.to('.intro .slow p span.one em', 0.8, {
                          delay: 1.6,
                          width: _width2,
                        }, "+=0.25");
                        TweenLite.to('.intro .slow p span.two em', 0.8, {
                          delay: 1.6,
                          width: _width3,
                          onComplete: function() {
                            c1.to('.intro .slow', 0.8, {
                              y: -50,
                              opacity: 0,
                            });
                            c1.to('.intro .fast', 1.5, {
                              y: 125,
                              opacity: 1,
                              onComplete: function() {
                                c1.to(".intro .fast", 0.8, {
                                  delay: 0.5,
                                  y: 0,
                                }, "+=0.2");
                                c1.to(".intro .fast-list", 1, {
                                  opacity: 1,
                                  y: 0,
                                  onComplete: function() {
                                    c1.to($('.intro .imflight'), 1, {
                                      delay: 0.4,
                                      width: 206,
                                    }).to($('.intro .shield'), 0.8, {
                                      delay: 0.2,
                                      opacity: 1,
                                      x: 0,
                                      onComplete: function() {
                                        $('.intro').each(function() {
                                          abledMouseWheel(this);
                                        });
                                        $(window).on('scroll', function() {
                                          if ($(window).scrollTop() > $(".intro").offset().top) {
                                            $('.intro').each(function() {
                                              disabledMouseWheel(this);
                                            });
                                          }
                                          change02();
                                        });
                                      },
                                    }, '+=0.25');
                                  },
                                });
                              },
                            }, "+=0.25");
                          },
                        });
                        TweenLite.to('.intro .computer.two', 3, {
                          delay: 0.2,
                          height: 183,
                        });
                        TweenLite.to('.intro .imfline', 0.8, {
                          delay: 0.4,
                          opacity: 1,
                          bottom: -2,
                        });
                        TweenLite.to('.intro .imfline', 0.8, {
                          delay: 1.2,
                          opacity: 0,
                        });
                      },
                    }, "-=0.2");
                  },
                });
              }
            });
          },
        }, "-=0.4");
      },
    });
  }
}


var _num = 0;
var p = 0,
  t = 0,
  _first = 0,
  yoffset = 0;

function change02() {
  var c2 = new TimelineMax();

  if ($('.intro').hasClass('animate-started2')) {
    if ($('.intro').hasClass('stop')) {

      $('.intro').each(function() {
        abledMouseWheel(this);
      });
      changeContent();
    } else {
      event.stopPropagation();
    }
    return;
  }
  if ($(window).scrollTop() > $(".intro").offset().top) {
    $('.intro').addClass('animate-started2');

    if (!$(".intro").hasClass("stop")) {
      $("html, body").target($(".intro"), 0);
    } else {
      event.stopPropagation();
    }

    c2.set($('.intro .fast'), {
      opacity: 1,
      top: 0,
    }).set($('.intro .fast-list .two'), {
      opacity: 0,
      y: 150,
    }).set($('.intro .safe'), {
      scale: 0,
    }).set($('.intro .safe-words'), {
      y: 40,
    });

    c2.set('.intro .shield', {
      clearProps: 'all'
    }).to($(".intro .shield"), 0, {
      opacity: 0,
      onComplete: function() {
        c2.to($('.intro .line .red'), 0.8, {
          y: 100,
        }, "-=0.25").to($('.intro .fast-list .one'), 0.8, {
          opacity: 0,
        }, "-=0.25").to($('.intro .fast-list .two'), 0.8, {
          y: 0,
          opacity: 1,
        }, "-=0.25");

        c2.to($('.intro .safe-words'), 1, {
          opacity: 1,
          y: 0,
        }, "-=1").to($('.intro .safe'), 1, {
          opacity: 1,
          scale: 1,
          onComplete: function() {
            setTimeout(function() {
              $(".intro").addClass("stop");
              $('.intro').each(function() {
                abledMouseWheel(this);
              });
            }, 300);
          },
        }, "-=0.5");
      },
    }, "-=0.25");
  }
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
              left: 122,
            }, "+=0.25");
            TweenLite.to($('.feature .feature-list'), 1, {
              delay: 0.6,
              opacity: 1,
              right: 110,
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
// change04();

function change05() {
  var c6 = new TimelineMax();
  c6.set($('.banner .chartbox'), {
    opacity: 0,
    y: -100,
    onComplete: function() {
      TweenLite.to($('.banner .chartbox'), 1, {
        opacity: 1,
        y: 0,
        onComplete: function() {
          TweenLite.to($('.banner .chartbox.center'), 0.6, {
            y: -50,
          }, "-=0.5");
          TweenLite.to($('.banner .chartbox.center'), 0.8, {
            delay: 0.4,
            y: 0,
            ease: Bounce.easeOut,
          }, "-=0.5");
        },
      });
    },
  });
}

function changeContent(event) {
  if ($(window).scrollTop() > $(".banner .buybtn").offset().top && $(window).scrollTop() < $(".comparison").offset().top - 900) {
    $(".intro").css("height", "1400px");
    $(".intro .intro-bg").addClass("on");
    $(".intro").addClass("exchange");
    TweenLite.set($(".intro .intro-list"), {
      y: 270,
    });
    TweenLite.set($(".intro .intro-list"), {
      x: -28,
    });

    p = $(this).scrollTop();

    if (t <= p) { //down
      // console.log("down");
      $(".intro").addClass("exchange");
      $(".intro .loading").remove();
      $(".intro .intro-bg").removeClass("on2").removeClass("on");
      TweenLite.set($(".intro .shield,.intro .safe,.intro .safe-words,.intro .line .red,.intro .fast-list .one,.intro .fast-list .two"), {
        clearProps: 'all',
      });

      TweenLite.set($(".intro .shield,.intro .safe,.intro .safe-words"), {
        opacity: 0,
      });

      TweenLite.set($(".intro .safe,.intro .safe-words"), {
        opacity: 1,
      });

      TweenLite.set($(".intro .line .red"), {
        y: 100,
      });
      $(".intro.exchange .fast-list .one").addClass("on");
      $(".intro.exchange .fast-list .two").addClass("on");

    } else { //up
      // console.log("up");
      $(".intro .loading").remove();
      TweenLite.set($(".intro .shield,.intro .safe,.intro .safe-words,.intro .line .red,.intro .fast-list .one,.intro .fast-list .two"), {
        clearProps: 'all',
      });
      TweenLite.set($(".intro .shield,.intro .safe,.intro .safe-words"), {
        opacity: 0,
      });
      TweenLite.set($(".intro .shield"), {
        opacity: 1,
      });

      TweenLite.set($(".intro .line .red"), {
        y: 0,
      });

      $(".intro.exchange .fast-list .one").removeClass("on");
      $(".intro.exchange .fast-list .two").removeClass("on");
    }
    setTimeout(function() {
      t = p;
    }, 0);

    if ($(window).scrollTop() > $(".banner .buybtn").offset().top && $(window).scrollTop() < $(".comparison").offset().top - 600) {
      $(".intro .intro-bg").addClass("on");

    }
  } else {
    $(".intro").css("height", "884px");
    $(".intro .intro-bg").removeClass("on");
    $(".intro").removeClass("exchange");
    TweenLite.set($(".intro .intro-list"), {
      y: 0,
    });
    TweenLite.set($(".intro .intro-list"), {
      x: 0,
    });
  }
  // console.log("gg");
}

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".discount,.buybtn,.price,.feature,.numbox").removeClass("soldout").addClass("soldout");
  $(".change").html('Sorry, 70% OFF offer is sold out.');
  $(".change-price").html('$<big>17</big>.99');
  $(".floatlayer .change-price").html('$17.99');
  $(".banner .buybtn small").html('- $17.99');
  $(".buybtn.soldout").attr({
    "href": _href,
    "onclick": _ga,
  });
}
// soldOut();

$(function() {
  changeStart();

  flipNum(50, 4);

  setTimeout(change05(), 500);

  $(".review li").mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review-box").find(".reviews").eq(num).addClass("active").siblings().removeClass("active");
  });
});

var d = 0;

$(window).on('scroll', function() {

  change01();

  if (!$(".feature").hasClass("new")) {
    change04();
  }

  // changeContent();

  if ($(window).scrollTop() < $(".comparison").offset().top) {
    $('.floatlayer').removeClass('on');
  } else {
    $('.floatlayer').addClass('on');
  }
});

function packsInit() {
  var cName = "enimfnovbr_p";
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

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function getSales(isInit) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "bimf.php",
    data: "action=getPacks&isInit=" + isInit + "&d=" + date.getDate() + "&packsNum=" + packsNum,
    success: function(res) {
      var sales = JSON.parse(res);
      if ((sales.packsNum != packs) || (isInit)) {
        packs = sales.packsNum;
        if (isInit) {
          flipNum(sales.packsNum, 4, 1000);
        } else {
          flipNum(sales.packsNum, 4, 100);
        }
      }
      if (packs > 0) {
        setTimeout('getSales(0)', getRetime(isInit));
      } else {
        flipNum(0, 4);
        if (!$(".discount,.buybtn,.price,.feature,.numbox").hasClass("soldout")) {
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
    var packsNumTotal = cGet('enimfnovbr_t');
    if (packsNumTotal > 1) {
      return (900 / packsNumTotal) * 1000;
    } else {
      return 20000;
    }
  }
}

function getViewNum() {
  $.ajax({
    type: "GET",
    url: "bimf.php",
    data: "action=getViewNum",
    success: function(res) {
      $('.viewNum').html(res);
    }
  });
  setTimeout('getViewNum()', 15000);
}

$(function() {
  packsInit(1);
  setTimeout('getViewNum()', 15000);
});


function getDateStr(daysArr, isBef) {
  var tempArr = [];
  for (var i = 0; i < daysArr.length; i++) {
    var exit = 0;
    for (var j = 0; j < tempArr.length; j++) {
      if (tempArr[j][0] == daysArr[i][0]) {
        tempArr[j][1] += '<i></i>' + daysArr[i][1];
        exit = 1;
      }
    }
    if (exit == 0) {
      tempArr.push([daysArr[i][0], daysArr[i][1]]);
    }
  }
  //return tempArr;
  if (tempArr.length == 1) {
    if (isBef) {
      return daysArr[0][0] + ' ' + daysArr[0][1] + ' - ' + daysArr[1][1];
    } else {
      return tempArr[0][0] + ' ' + tempArr[0][1];
    }
  } else {
    if (isBef) {
      return daysArr[0][0] + ' ' + daysArr[0][1] + ' - ' + daysArr[1][0] + ' ' + daysArr[1][1];
    } else {
      return daysArr[0][0] + ' ' + daysArr[0][1] + ' - ' + daysArr[3][0] + ' ' + daysArr[3][1];
    }
  }

}

function getMonthStr(i) {
  var month = ["Jan.", "Feb.", "Mar.", "Apr.", "May", "Jun.", "Jul.", "Aug.", "Sep.", "Oct.", "Nov.", "Dec."];
  return month[i - 1];
}

function getDate(AddDayCount) {
  var dd = new Date();
  dd.setDate(dd.getDate() + AddDayCount);
  var y = dd.getFullYear();
  var m = (dd.getMonth() + 1) < 10 ? "0" + (dd.getMonth() + 1) : (dd.getMonth() + 1);
  var d = dd.getDate() < 10 ? "0" + dd.getDate() : dd.getDate();
  return [getMonthStr(parseInt(m)), d];
}

$(function() {
  //var currentDayArr=[getDate(0)];
  var befDaysArr = [
    ["Nov.", "18"], getDate(-1)
  ];
  var afterDaysArr = [getDate(1), ["Dec.", "30"]];

  var befDaysStr = getDateStr(befDaysArr, 1);
  var afterDaysStr = getDateStr(afterDaysArr, 1);

  $(".chartbox.two .date-str").html(befDaysStr);
  $(".chartbox.four .date-str").html(afterDaysStr);
});