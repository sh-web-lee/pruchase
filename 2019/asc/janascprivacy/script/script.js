$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function numberJump(target, num, starnumber, time) {
  target.prop('number', starnumber).animateNumber({
    number: num,
  }, time);
  var number = num * 2.31;
  $(".progressbar span").css("width", number);
}

function focus(num, numRe) {
  $('.progressbar span').append('<em class="reduce"></em>');
  var number = num * 2.31;
  $(".progressbar span").css("width", number);
  setTimeout(function() {
    $('.progressbar .reduce').addClass("zoomout");
  }, 100);
  if (numRe == 1) {
    setTimeout(function() {
      $(".packsNum").text(num);
    }, 500);
  }
  if (num < 10) {
    $(".hurry").find("i.clock").remove();
    $(".hurry").prepend('<i class="all-icons clock two"></i>');
    if (num == 9) {
      $(".hurry").prepend('<i class="all-icons clock one"></i>');
      $('.hurry .clock').addClass("_hide");
      var t1 = setTimeout(function() {
        $('.hurry .clock').addClass("_show");
      }, 100);
      var t2 = setTimeout(function() {
        $('.hurry .one').remove();
        $('.hurry .clock').removeClass("_hide,_show");
        $('.hurry .clock.two').addClass("on");
      }, 1100);
      var t3 = setTimeout(function() {
        $('.hurry .clock.two').removeClass("on");
      }, 1600);
      clearTimeout(function() {
        t1,
        t2,
        t3
      }, 1800);
    } else {
      var t4 = setTimeout(function() {
        $('.hurry .clock.two').addClass("on");
      }, 300);
      var t5 = setTimeout(function() {
        $('.hurry .clock.two').removeClass("on");
      }, 800);
      clearTimeout(function() {
        t4,
        t5
      }, 1400);
    }
  }
}

function maskStart() {
  $(".mask").remove();
  $(".mask-box").remove();
  $('.main').append('<div class="mask"></div><div class="mask-box"><h2>Surprise! You Are Our Lucky Visitor</h2><p>Activate Advanced SystemCare Pro Today to Get Your Free Gifts</p><p class="red">Limited Offer! Ends in <b class="countdown"><big>60</big> s</b></p><p><img src="' + imgSrc + '" alt=""/></p><a class="buybtn" href="' + _href + '" onclick="' + _ga + '">Get My Free Gifts</a><i class="all-icons close"></i></div>');
}

function maskShow() {
  $('.mask').addClass('started');
  $('.mask').addClass('on');
  $('.mask-box').addClass('slipUp');
  $(".mask-box .close").on("click", function() {
    maskClose();
  });
}

function maskClose(){
  $(".mask").remove();
  $(".mask-box").remove();
}

function soldShow() {
  if (!$(".banner").hasClass("sold")) {
    $(".banner").addClass("sold");
    $(".mask").remove();
    $(".mask-box").remove();
    $(".floatlayer").remove();
    $(".footer").addClass("on");
    $(".banner .right").prepend("<h3>80% OFF Special Offer Has Ended. Don't Miss Out the 75% OFF!</h3>");
    $(".banner .right").find(".hurry").remove();
    $(".banner .right").find(".progressbar").remove();
    $(".banner .right").find(".discount").text("21.98");
    $(".buybtn").attr({
      href: _hrefSold,
      onclick: _gaSold
    });
    setTimeout(function() {
      $(".banner .right").addClass("on");
    }, 100);
  }
}

$(function() {
  $('#dg-container').gallery();
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $(window).scrollWindow($(".flow dl p"), $('.intro span'), ("on"));
  maskStart();
  $(document).bind('mousemove', mouseOut);
  packsInit();
  timeInit();
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

function mouseOut(e) {
  if (e.clientY < 3) {
    mask(1);
    $(document).unbind('mousemove', mouseOut);
  }
}

function mask(scroll){
  if(packs>0) {
    if ((scroll == 1) && (maskTime == -1)) {
      return false;
    } else {
      maskTime = -1;
      cSet('mask_t', maskTime);
      var expireTime = cGet('mask_e');
      if (expireTime == null) {
        expireTime = Date.parse(new Date()) + 60 * 1000;
        cSet('mask_e', expireTime);
      }
      if (expireTimeCheck()) {
        maskShow();
        cycleCountdown();
      }
    }
  }
}

function expireTimeCheck() {
  var expireTime = cGet('mask_e');
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
    $(".countdown big").html(s);
    remainTime--;
    setTimeout('cycleCountdown(remainTime)', 1000);
  } else {
    $('.mask,.mask-box').fadeOut();
  }
}

function timeInit() {
  maskTime = cGet('mask_t');
  if (maskTime == null) {
    maskTime = 60 * 2;
    cSet('mask_t', maskTime);
  }
  if (maskTime == -1) {
    if (expireTimeCheck()) {
      mask();
    }
  }
  mouseCheck = 0;
  maskTimeCountDown();
}

function maskTimeCountDown() {
  if (maskTime > 0) {
    $(document).bind('mousemove', mouseOut);
  }
}

function packsInit(){
  var date = new Date();
  var cName = "enascpri" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs=null;
    getPacks(1);
  } else {
    packs = arr[2];
    if(packs>0){
      numberJump($('.packsNum'), packs, 100, 1500);
      setTimeout('getPacks()', 6300);
    }else{
      soldShow();
    }
  }
  setTimeout('getViewNum()', 15000);
}

function getPacks(isInit) {
  var date = new Date();
  $.ajax({
    type: 'GET',
    url: 'privacy.php',
    data: 'action=getSales&d=' + date.getDate(),
    success: function(sPacks) {
      if (!isNaN(sPacks)) {
        if (sPacks != packs) {
          packs = sPacks;
          if(isInit){
            numberJump($('.packsNum'), packs, 100, 1500);
          }else{
            focus(packs,1);
          }
        }

        if(sPacks<=0){
          soldShow();
        }
      }
    }
  });
  setTimeout('getPacks()', 6300);
}

function getViewNum() {
  if(packs>0) {
    $.ajax({
      type: "GET",
      url: "privacy.php",
      data: "action=getViewNum",
      success: function (res) {
        $('.viewNum').html(res);
      }
    });
    setTimeout('getViewNum()', 15000);
  }
}