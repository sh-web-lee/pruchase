function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');

function animateNumber(select, number) {
  $(select).prop('number',  10).animateNumber({
    number: number,
    numberStep:  comma_separator_number_step
  }, 2000);
}

function numberJump() {
  $(".change-num").prop('number', 50).animateNumber({
    number: 100,
  }, 1000);
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
      marginTop: -curNum * 30,
    }, "slow");
    $("#fliptwo .list").eq(a).animate({
      marginTop: -curNum * 46,
    }, "slow");
  }
}
// flipNum(48, 4);


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

// $('.intro').each(function() {
//   disabledMouseWheel(this);
// });
//winwow
// window.onload = disabledMouseWheel(this);

$.fn.target = function(target, yoffset, event) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({
    scrollTop: Theigth
  }, 'slow');
};


function change01() {
  var c1 = new TimelineMax();
  var c2 = new TimelineMax();

  if ($('.intro').hasClass('animate-started')) {
    return;
  }
  if ($('.intro').isOnScreen(0.2, 0.2)) {

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
    c1.to($('.intro .loading'), 1.5, {
      rotation: 360,
      ease: Linear.easeNone
    }, "-=.8");
    c2.set($('.intro .scanbox'), {
      opacity: 0,
      scale: 0,
    }).set($('.intro .scan'), {
      opacity: 0,
    }).set($('.intro .rightcircle'), {
      rotation: 45,
    }).set($('.intro .leftcircle'), {
      rotation: 45,
    }).set(".intro-txt .slow", {
      opacity: 0,
      right: -200,
    }).set(".intro-list.one", {
      left: 219,
      top: -50,
    }).set(".fast", {
      opacity: 0,
      y: 300,
    }).set(".fast-list", {
      opacity: 0,
      y: 150,
    });
    c2.to(".intro-list.one", 0.6, {
      left: 219,
      top: 0,
      opacity: 1,
      onComplete: function() {
        c2.to($('.intro-list.one'), 0.8, {
          delay: 0.5,
          left: 0,
          onComplete: function() {
            c2.to($('.intro-txt .slow'), 0.8, {
              opacity: 1,
              right: 0,
              onComplete: function() {
                setTimeout(function() {
                  $(".intro .gray").removeClass("on").addClass("on");
                  $(".intro .loading").remove();
                }, 600);
                TweenLite.to($('.intro .scanbox'), 0.8, {
                  delay: 0.8,
                  opacity: 1,
                  scale: 1,
                  transformOrigin: "50% 100%",
                }, '-=0.3');
                TweenLite.to($('.intro .scan'), 0.8, {
                  delay: 0.6,
                  opacity: 1,
                  scale: 1,
                  onComplete: function() {
                    var _width = $(".intro .slow h3 span").width();
                    var _width2 = $(".intro .slow p span.one").width();
                    var _width3 = $(".intro .slow p span.two").width();
                    var _width4 = $(".intro .slow p span.three").width();
                    $(".intro .slow h3 span,.intro .slow p span").append('<em class="line"></em>');
                    TweenLite.to($('.intro .slow h3 span em'), 0.8, {
                      width: _width,
                    }, "+=0.25");
                    TweenLite.to($('.intro .slow p span.one em'), 0.8, {
                      width: _width2,
                    }, "+=0.25");
                    TweenLite.to($('.intro .slow p span.two em'), 0.8, {
                      width: _width3,
                    }, "+=0.25");
                    TweenLite.to($('.intro .slow p span.three em'), 0.8, {
                      width: _width4,
                      onComplete: function() {
                        c2.to($('.intro .slow'), 1, {
                          top: 25,
                          opacity: 0,
                        }, '-=0.2');
                        c2.to($('.intro .fast'), 1.5, {
                          y: 125,
                          opacity: 1,
                          onComplete: function() {
                            c2.to(".intro .fast", 0.8, {
                              delay: 0.5,
                              y: 0,
                            }, "-=0.2");
                            c2.to(".intro .fast-list", 1, {
                              opacity: 1,
                              y: 0,
                              onComplete: function() {
                                c2.to($('.intro .rightcircle'), 0.8, {
                                  rotation: 226,
                                  onComplete: function() {
                                    c2.to($('.intro .leftcircle'), 0.8, {
                                      rotation: 224,
                                      onComplete: change02,
                                    }, "-=0.1");
                                  },
                                });
                              },
                            }, '-=0.45');
                          },
                        }, "-=0.35");
                      },
                    });
                  },
                });
              },
            });
          },
        }, "-=0.25");
      },
    });
  }
}
// change01();

function change02() {
  var c3 = new TimelineMax();
  $(".intro .gray").removeClass("on").addClass("on");
  c3.set($('.intro .rocket'), {
    scale: 0.8,
    x: -100,
    y: 40,
  });
  c3.set($('.intro .percent'), {
    opacity: 0,
    onComplete: function() {
      $(".intro .scanbox").remove();
      TweenLite.to($('.intro .percent'), 1, {
        delay: 0.2,
        opacity: 1,
        top: 16,
      });
      setTimeout(numberJump(), 1100);
      TweenLite.to($('.intro .bottom-circle'), 1, {
        delay: 0.2,
        height: 114,
        onComplete: function() {
          TweenLite.to($('.intro .completed'), 0.8, {
            opacity: 1,
          }, "-=0.25");
        },
      });
      TweenLite.to($('.intro .rocket'), 1, {
        delay: 0.5,
        opacity: 1,
        scale: 1,
        x: 0,
        y: 0,
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
            change03();
          });
        },
      });
    },
  });

}
var _num = 0;
var p = 0,
  t = 0,
  _first = 0,
  yoffset = 0;

function change03() {
  var c4 = new TimelineMax();

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
  if ($('.intro').isOnScreen(0.5, 0.5)) {
    $('.intro').addClass('animate-started2');

    if (!$(".intro").hasClass("stop")) {
      // alert("h2");
      $("html, body").target($(".intro"), 0);
    } else {
      event.stopPropagation();
    }

    $(".intro .loading").remove();
    $(".intro .gray").removeClass("on").addClass("on");
    TweenLite.set($(".intro .percent, .intro .rocket"), {
      clearProps: 'all',
      opacity: 0,
    });
    c4.set($('.intro .privacy'), {
      scale: 0,
    }).set($('.intro .privacy-right'), {
      opacity: 0,
      scale: 0,
    }).set($('.intro .shield-img'), {
      opacity: 0,
      scale: 0.6,
      x: -100,
      y: 40,
    }).set($('.intro .fast'), {
      opacity: 1,
      top: 0,
    }).set($('.intro .fast-list .two'), {
      opacity: 0,
      y: 150,
    });
    c4.set($('.intro .safebox'), {
      opacity: 0,
      onComplete: function() {
        TweenLite.to($('.intro .safebox'), 1, {
          delay: 0.2,
          opacity: 1,
          onComplete: function() {
            TweenLite.to($('.intro .privacy'), 1, {
              opacity: 1,
              scale: 1,
              onComplete: function() {
                TweenLite.to($('.intro .check'), 1, {
                  width: 28,
                  background: '#326de8',
                  onComplete: function() {
                    $('.intro .privacy .icon').removeClass("on").addClass('on');
                  },
                });
                TweenLite.to($('.intro .privacy .text'), 0.6, {
                  delay: 0.9,
                  opacity: 1,
                  bottom: 32,
                  onComplete: function() {
                    TweenLite.to($('.intro .privacy-right'), 0.8, {
                      opacity: 1,
                      scale: 1,
                    });
                    TweenLite.to($('.intro .shield-img'), 0.8, {
                      opacity: 1,
                      scale: 1,
                      x: 0,
                      y: 0,
                    });
                  },
                });
              },
            });
          },
        });
        $('.intro .fast-list .one').css("opacity", 0);
        TweenLite.to($('.intro .line .red'), 1, {
          y: 120,
        });
        TweenLite.to($('.intro .fast-list .two'), 1, {
          delay: 0.6,
          y: 0,
          opacity: 1,
          onComplete: function() {
            setTimeout(function() {
              $(".intro").addClass("stop");
              $('.intro').each(function() {
                abledMouseWheel(this);
              });
            }, 2600);
          },
        });
      },
    });
  }
}
// change03();

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
      top: 270,
    });

    p = $(this).scrollTop();

    if (t <= p) { //down
      // console.log("down");
      $(".intro").addClass("exchange");
      $(".intro .loading").remove();
      $(".intro .intro-bg").removeClass("on2").removeClass("on");
      TweenLite.set($(".intro .safebox,.intro .percent, .intro .rocket,.intro .privacy,.intro .privacy-right,.intro .shield-img,.intro .line .red,.intro .fast-list .one,.intro .fast-list .two"), {
        clearProps: 'all',
      });

      TweenLite.set($(".intro .safebox,.intro .privacy,.intro .privacy-right,.intro .shield-img"), {
        opacity: 1,
      });

      TweenLite.set($(".intro .line .red"), {
        y: 120,
      });
      $(".intro.exchange .fast-list .one").addClass("on");
      $(".intro.exchange .fast-list .two").addClass("on");

    } else { //up
      // console.log("up");
      $(".intro .loading").remove();
      TweenLite.set($(".intro .safebox,.intro .percent, .intro .rocket,.intro .privacy,.intro .privacy-right,.intro .shield-img,.intro .line .red,.intro .fast-list .one,.intro .fast-list .two"), {
        clearProps: 'all',
      });
      TweenLite.set($(".intro .percent, .intro .rocket"), {
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
      top: 0,
    });
  }
  // console.log("gg");
}

// soldOut();
function soldOut() {
  var tw = MApp(2.2).datetime.getTimeZone();
  var aff = MApp(2.2).url.getParameters('aff');
  $(".price").addClass("soldout");
  $(".change-price").html("<big>19</big>,99€");
  $(".price strong").html("<big>19</big>,99€");
  $(".discount").addClass("soldout");
  $(".banner .price strong").after("<del>59,99€</del>");
  $(".banner .numbox").css({'visibility': 'hidden','height': '20'});
  $("p.change").html("Oops, 70% Rabatt ist leider ausverkauft.");
  $(".banner .number").html("Oops, <strong>70%</strong> Rabatt ist leider ausverkauft.").addClass("soldout");
  //$(".floatlayer .number").html("Don't miss out <strong>65%</strong> discount again!").addClass("soldout");
  $(".banner .buybtn,.floatlayer .buybtn").html("Jetzt aktivieren - 66% sparen")
  $(".buybtn").attr({
    "href": 'https://www.iobit.com/buy.php?product=de-asc3pc1999&ref=de_ascbf1999sale1911'+refStr+'&refs=de_purchase_asc&tw=' + tw,
    "onclick": "ga('send', 'event', 'ascbuy', 'buy', 'asc1999bfsale1911-de');"
  });
}

function prev() {
  $(".dg-prev").click(function(){ 
    var message = $('.dg-container ul li:last');

    $('.dg-container ul li:eq(0)').removeClass("two");
    $('.dg-container ul li:eq(1)').removeClass("three");
    $('.dg-container ul li:eq(2)').removeClass("active");
    $('.dg-container ul li:eq(3)').removeClass("four");
    $('.dg-container ul li:eq(4)').removeClass("five");
    $('.dg-container ul li:eq(0)').before(message);
    setTimeout(function() {
          $('.dg-container ul li:eq(0)').addClass("two")
     }, 100);
   
    $('.dg-container ul li:eq(1)').addClass("three");
    $('.dg-container ul li:eq(2)').addClass("active");
    $('.dg-container ul li:eq(3)').addClass("four");
    $('.dg-container ul li:eq(4)').addClass("five");
    

    var num =$('.dg-container ul li.active').attr("data-num");
    $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
    setTimeout('$(".review .reviews dd p").eq(' + num + ').addClass("on");', 100);
  });
}

function next() {
  $(".dg-next").click(function(){ 
    var message = $('.dg-container ul li:eq(0)')
    $('.dg-container ul li').removeClass("first");
    $('.dg-container ul li:eq(0)').removeClass("two");
    $('.dg-container ul li:eq(1)').removeClass("three");
    $('.dg-container ul li:eq(2)').removeClass("active");
    $('.dg-container ul li:eq(3)').removeClass("four");
    $('.dg-container ul li:eq(4)').removeClass("five");


    $('.dg-container ul').find('li:first').appendTo($('.dg-container ul'));

    $('.dg-container ul li:eq(0)').addClass("two");
    $('.dg-container ul li:eq(1)').addClass("three");
    $('.dg-container ul li:eq(2)').addClass("active");
    $('.dg-container ul li:eq(3)').addClass("four");

    $('.dg-container ul li:eq(4)').addClass("first");
    setTimeout(function() {
          $('.dg-container ul li:eq(4)').addClass("five").removeClass("first");
     }, 100);

    var num =$('.dg-container ul li.active').attr("data-num");
    $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
    setTimeout('$(".review .reviews dd p").eq(' + num + ').addClass("on");', 100);
  });
}


var d = 0;



$(window).on('scroll', function() {

  change01();

  if ($(window).scrollTop() < $(".comparison").offset().top) {
    $('.floatlayer').removeClass('on');
  } else {
    $('.floatlayer').addClass('on');
  }
});

function packsInit() {
  var cName = "deascnovbrb_p";
  packs = cGet(cName);
  if (packs === 0) {
    soldOut();
  } else {
    if(packs==null){
      getSales(2);
    }else {
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
    url: "basc.php",
    data: "action=getPacks&isInit=" + isInit + "&d=" + date.getDate()+"&packsNum="+packsNum,
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
        flipNum(0,4);
        if (!$(".discount,.buybtn,.price,.feature,.numbox").hasClass("soldout")) {
          soldOut();
        }
      }
    }
  });
}

function getRetime(isInit) {
  if(isInit==2){
    return 1000;
  }else {
    var packsNumTotal = cGet('deascnovbrb_t');
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
    url: "basc.php",
    data: "action=getViewNum",
    success: function(res) {
      $('.viewNum').html(res);
    }
  });
  setTimeout('getViewNum()', 15000);
}

$(function() {
  prev();
  next();
  flipNum(50, 4);

  setTimeout(change05(), 500);

   packsInit(1);
   setTimeout('getViewNum()', 15000);
});