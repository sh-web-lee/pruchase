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

function startAnimation() {
  var astart = new TimelineMax();
  astart.set('.browser,.file-left,.file-right,.worm,.worm-small,.worm-mask,.lock,.chain,.shield,.star,.webpage,.red-circle,.thief,.thief-hook,.password,.safebox,.shieldtwo,', {
    opacity: 0,
  });
  astart.set('.browser,.webpage,.shieldtwo', {
    scale: 0,
  });
  astart.set('.shieldtwo', {
    scale: 0,
    x: -240,
    y: 280,
    z: 50,
  });
  astart.set('.file-left', {
    left: 166,
    rotation: "90deg",
  });
  astart.set('.file-right', {
    right: 186,
    rotation: "-40deg",
  });
  astart.set('.worm', {
    x: getRndInteger(-120, 100),
    y: getRndInteger(200, 240),
  });
  astart.set('.worm-small', {
    x: getRndInteger(-20, 40),
    y: getRndInteger(40, 80),
  });
  astart.set('.shield,.safebox', {
    x: -100,
  });
  astart.set('.thief,.thief-hook', {
    y: -200,
  });
  astart.set('.thief-hook', {
    height: 100 + "px",
  });
  // astart.set('.safe-handle', {
  //   rotation: 90,
  // });
  astart.set('.codebox', {
    opacity: 0,
    y: 60,
  });
}
startAnimation();

function screenAnimation() {

  var s1 = new TimelineMax();

  if ($('.feature.ftop').hasClass('animate-started')) {
    return;
  }

  if ($(window).scrollTop() > $(".banner .buybtn").offset().top - 200) {
    $('.feature.ftop').addClass('animate-started');
    browser();
  }
}

function screentwoAnimation() {

  var s2 = new TimelineMax();

  if ($('.feature.fbottom').hasClass('animate-started')) {
    return;
  }

  if ($(window).scrollTop() > $(".banner .buybtn").offset().top + 200 && $(".feature.ftop").hasClass("stop")) {
    $('.feature.fbottom').addClass('animate-started');
    webpage();
  } else if ($(window).scrollTop() > $(".feature .hlast").offset().top) {
    $('.feature.fbottom').addClass('animate-started');
    webpage();
  }
}

function browser() {
  var browser = new TimelineMax();
  browser.to('.browser', 0.8, {
    opacity: 1,
    scale: 1,
    transformOrigin: "0% 100%",
    onComplete: files,
  });
}

function files() {
  var files = new TimelineMax();
  files.to(".file-left", 0.8, {
    delay: 0.1,
    opacity: 1,
    left: 116,
    rotation: "0deg",
    transformOrigin: "50% 100%",
    ease: Back.easeOut,
  });
  files.to(".file-right", 0.8, {
    opacity: 1,
    right: 102,
    rotation: "0deg",
    transformOrigin: "0% 50%",
    ease: Back.easeOut,
    onComplete: worm,
  }, "-=0.2");
}

function worm() {
  var worm = new TimelineMax();
  var worm2 = new TimelineMax();
  worm.to(".worm", 0.2, {
    opacity: 1,
  }).to(".worm", 1, {
    x: getRndInteger(-20, -10),
    y: getRndInteger(60, 100),
  }).to(".worm", 1, {
    x: 0,
    y: 0,
    onComplete: function() {
      $(".worm > em").removeClass("on");
      lock();
    },
  });
  TweenLite.to(".worm-small-left", 0.8, {
    delay: 1,
    opacity: 1,
    y: 0,
    x: 0,
  });
  TweenLite.to(".worm-small-right", 0.8, {
    delay: 1.2,
    opacity: 1,
    y: 0,
    x: 0,
  });
  worm2.to(".worm-mask", 0.8, {
    delay: 1.2,
    opacity: 1,
    repeat: 1,
  });
}

function lock() {
  var lock = new TimelineMax();
  var lock2 = new TimelineMax();
  lock.to(".lock.close,.chain", 0.8, {
    opacity: 1,
    onComplete: function() {
      TweenLite.to(".shield", 0.8, {
        delay: 0.4,
        opacity: 1,
        x: 0,
        onComplete: function() {
          $(".feature.ftop .imgbox").append('<span class="lock open"></span>');
          TweenLite.to(".lock.close", 0.8, {
            opacity: 0,
            zIndex: -1,
          });
          TweenLite.to(".lock.open", 0.8, {
            rotation: -5,
            transformOrigin: "0% 100%",
          });
          TweenLite.to(".chain.left", 0.8, {
            rotation: -5,
            transformOrigin: "0% 100%",
          });
          TweenLite.to(".chain", 0.8, {
            delay: 1,
            y: 160,
            ease: Bounce.easeOut,
          });
          TweenLite.to(".chain,.lock.open", 0.8, {
            delay: 1.4,
            opacity: 0,
          });
          TweenLite.to(".lock.open", 0.8, {
            delay: 1,
            y: 160,
            ease: Bounce.easeOut,
            onComplete: function() {
              lock2.to(".star", 1, {
                delay: 1.4,
                opacity: 1,
                repeat: 2,
              });
              setTimeout('$(".worm,.worm-small,.worm-mask").remove();', 800);
              setTimeout('$(".feature.ftop").removeClass("stop").addClass("stop")', 1200);
            },
          });
        }
      });
    },
  });
}

var redcircle = new TimelineMax();

function webpage() {
  var webpage = new TimelineMax();
  webpage.to('.webpage', 0.8, {
    opacity: 1,
    scale: 1,
    transformOrigin: "0% 100%",
    onComplete: function() {
      redcircle.from('.red-circle', 0.8, {
        opacity: 0,
      }).to('.red-circle', 0.8, {
        opacity: 1,
        repeat: -1,
      });
      thief();
    },
  });
}

function thief() {
  var thief = new TimelineMax();
  var password = new TimelineMax();
  var code = new TimelineMax();
  thief.to('.thief,.thief-hook', 0.8, {
    delay: 2,
    opacity: 1,
    y: 0,
    onComplete: function() {
      $(".thief-hook").removeClass("on").addClass("on");
      TweenLite.to(".thief-hook", 0.5, {
        delay: 1,
        rotationZ: -4,
        transformOrigin: "0% 0% 0%",
        onComplete: function() {
          TweenLite.to(".thief-hook", 0.5, {
            rotationZ: 1,
            transformOrigin: "0% 0% 0%",
          });
        },
      });
      TweenLite.to(".password", 0.8, {
        opacity: 1,
        onComplete: function() {
          redcircle.pause();
          // $(".thief-hook").removeClass("ontwo").addClass("ontwo");
        },
      }, "-=0.3");
      TweenLite.to(".thief-hook", 0.8, {
        delay: 0.8,
        height: 171 + "px",
        onComplete: function() {
          redcircle.pause();
          $(".thief-hook").removeClass("change").addClass("change");
        },
      });
      TweenLite.to(".password", 0.8, {
        delay: 2,
        rotation: -5,
        x: 6,
        transformOrigin: "0% 100%",
        ease: Back.easeOut,
      });
      TweenLite.to(".thief-hook", 0.8, {
        delay: 1.8,
        height: 158 + "px",
      });
      TweenLite.to(".thief-hook", 4.6, {
        delay: 2,
        height: 132 + "px",
      });
      password.to('.password', 5, {
        delay: 2.4,
        x: 6,
        y: -26,
      });
      code.to('.codebox', 3, {
        delay: 2.6,
        opacity: 1,
        y: -90,
      });
      setTimeout(safebox, 3200);
    },
  });
}

function safebox() {
  var safe = new TimelineMax();
  var shieldtwo = new TimelineMax();
  safe.to('.safebox', 0.8, {
    opacity: 1,
    x: 0,
    onComplete: function() {
      TweenLite.to(".safe-handle", 0.8, {
        rotation: 90,
        ease: Bounce.easeOut,
        onComplete: function() {
          $(".thief-hook").removeClass("change");
          TweenLite.to(".thief-hook", 0.8, {
            height: 100 + "px",
          }, "-=0.3");
        },
      });
      TweenLite.to(".thief", 0.8, {
        delay: 1.4,
        y: -150,
        // ease: Bounce.easeOut,
      });
      TweenLite.to(".thief-hook", 0.8, {
        delay: 1.4,
        top: -150,
        // ease: Bounce.easeOut,
      });
      TweenLite.to(".codebox", 0.8, {
        delay: 2.2,
        opacity: 0,
      });
      TweenLite.to(".thief", 0.8, {
        delay: 1.9,
        scale: 0,
        ease: Bounce.easeOut,
      });
      setTimeout('$(".thief-hook").remove()', 2000);
      TweenLite.to('.password', 0.8, {
        delay: 1.6,
        rotation: 0,
        y: 0,
        x: 0,
        transformOrigin: "0% 100%",
        onComplete: function() {
          // $(".red-circle").remove();
          shieldtwo.to('.shieldtwo', 0.8, {
            delay: 0.4,
            opacity: 1,
            scale: 1,
            x: 0,
            y: 0,
            z: 0,
            transformOrigin: "0% 0% 0%",
            ease: Back.easeOut,
            onComplete: function() {
              TweenLite.to(".fork", 0.8, {
                delay: 0.2,
                width: 64,
              });
            },
          });
        },
      });
    },
  });
}

$(window).on('scroll', function() {
  screenAnimation();
  screentwoAnimation();
  if ($(window).scrollTop() > $(".feature .hfirst").offset().top - 50) {
    // browser();
    // screenAnimation();
  }
  if ($(window).scrollTop() > $(".feature .hlast").offset().top - 10) {
    // webpage();
    // screentwoAnimation();
  }
});

var totalNum;

function numberJump(num, starnumber, time) {
  $(".reduceNum em.packsNum").remove();
  totalNum = parseInt(500 - num);
  $('.totalNum').prop('number', starnumber).animateNumber({
    number: totalNum,
  }, time);
  var number = totalNum * 0.71;
  $(".progressbar span").css("width", number);
  $(".banner .barbox .numbox").css("left", number);
  $(".reduceNum").append('<em class="packsNum"></em>');
  $(".reduceNum em").html(num);
  setTimeout('$(".reduceNum em.packsNum").removeClass("zoomout").addClass("zoomout");', 300);
  setTimeout('$(".reduceNum em.packsNum").remove();', 1200);
}
// numberJump(2, 498, 1500);

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.price,.floatlayer").removeClass("sold").addClass("sold");
  $(".banner .changebar").text("");
  setTimeout(function() {
    $(".reducebar").html('unavailable today');
    $(".banner .barbox .numbox").remove();
  }, 600);
  $(".price strong").html('$24.95');
  $(".price sup").remove();
  $(".floatlayer h2").html('Preorder Now with 55% OFF ');
  $(".floatlayer .numbox").html('Unlock PRO edition to get full protection now');
  $(".buybtn").attr({
    "href": "https://www.iobit.com/buy.php?product=imf8preorder2495&ref=en-imf8preorderofficialsoldout" + refStr + "&aff=" + aff + "&refs=purchase_imf&tw=" + tw,
    "onclick": "ga('send', 'event', 'imfsoldbuy', 'buy', 'imf8predorderofficial');",
  });
}

function getNumber() {
  num = cGet("marimf8preorderofficial");
  if (num == null) {
    num = Math.floor(Math.random() * (88 - 49)) + 49;
  } else {
    num--;
    if (num < 0) num = 0;
  }
  // $('.reduceNum').html(num);
  // $('.totalNum').html(500-num);
  totalNum = parseInt(500 - num);
  numberJump(num, totalNum, 1500);
  cSet('marimf8preorderofficial', num);
  t1 = (Math.random() > 0.5) ? 1.3 : 3.3;
  t2 = (Math.random() > 0.5) ? 5.3 : 7.3;
  reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
  if (num > 0) setTimeout('getNumber()', reTime);
  else soldOut();
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
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
// soldOut();

$(function() {

  $(".close").click(function() {
    $(".pop-bg,.popbox").removeClass("on");
  });
  getNumber();
  var sWidth = $(".review-box .reviews").width();
  var len = $(".review-box dl").length;
  var index = 0;
  var picTimer;

  $(".review-box .handle span").click(function() {
    index = $(".review-box .handle span").index(this);
    showPics(index);
  }).eq(0).trigger("click");

  $(".review-box .reviews .inner").css("width", sWidth * (len));

  $(".review-box").hover(function() {
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

  function showPics(index) {
    var nowLeft = -index * sWidth;
    $(".review-box .reviews .inner").stop(true, false).animate({
      "left": nowLeft
    }, 300);
    $(".review-box .handle span").eq(index).attr("class", "on two");
    if (index === 0) {
      $(".review-box .handle span").eq(1).attr("class", "three");
      $(".review-box .handle span").eq(2).attr("class", "one");
    } else if (index === 1) {
      $(".review-box .handle span").eq(2).attr("class", "three");
      $(".review-box .handle span").eq(0).attr("class", "one");
    } else {
      $(".review-box .handle span").eq(0).attr("class", "three");
      $(".review-box .handle span").eq(1).attr("class", "one");
    }
  }

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".realtime").offset().top) {
      $('.floatlayer').addClass('on');
    } else {
      $('.floatlayer').removeClass('on');
    }
  });

});