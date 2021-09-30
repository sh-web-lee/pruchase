$.fn.target = function (target, yoffset) {
  $(this).click(function () {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $('html, body').animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$.fn.scrollWindow = function (topheight, scrollclass, ClassName) {
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function popShow() {
  $('.popbg,.popbox').removeClass('on').addClass('on');
  $('.close').click(function () {
    $('.popbg,.popbox').removeClass('on');
  });
}

function popHide() {
  $('.popbg,.popbox').removeClass('on');
}

$(function () {
  countdown('.countdown-container span', '.countdown-lab span');
  $(window).scrollWindow($('.giftbox'), $('.reviews dl'), ('on'));

  $('.feature .textlink').target($('#compare'), 0);

  $('.feature .detail-list dl').hover(function () {
    $(this).addClass('active').siblings().removeClass('active');
    $('.feature .showcase .screenshot').css('marginLeft', -392 * ($(this).index() + 1));
    $('.feature .zoom li').removeClass('active').eq($(this).index()).addClass('active');
  });

  $('.footbuy li').on('click', function () {
    var bundle = $('.banner .bundle');
    var index = $(this).index();
    var dataName = $(this).attr('data-num');
    var dataUrl = bundle.eq(dataName).find('.buyBTN').attr('href');
    var dataGa = bundle.eq(dataName).find('.buyBTN').attr('onclick');
    var original = bundle.eq(dataName).find('.original').text();
    var discount = bundle.eq(dataName).find('.discount').text();
    $(this).addClass('on').siblings().removeClass('on');
    $('.footbuy .imgbox').find('img').eq(index).addClass('on').siblings().removeClass('on');
    $('.footbuy .original').text(original);
    $('.footbuy .discount').text(discount);
    $('.footbuy .buyBTN').attr('href', dataUrl);
    $('.footbuy .buyBTN').attr('onclick', dataGa);
  });

  $('.popbox .close').on('click', function () {
    popHide();
  });

  if (cGet('frascsum_s') == -1) {
    maskTimeInit();
  } else {
    setTimeout('$(document).bind(\'mousemove\', mouseOut)', 30000);
  }
});

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + '=' + escape(value) + ';expires=' + exp.toGMTString();
}

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp('(^| )' + name + '=([^;]*)(;|$)');
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

var countdown = function (countdown1, countdown2) {
  getCycleCountdown();
  $(countdown1).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown2).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout('countdown(\'' + countdown1 + '\',\'' + countdown2 + '\')', 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function mouseOut(e) {
  if (e.clientY < 3) {
    var cName = 'frascsum_s';
    cSet(cName, -1);
    maskTimeInit();
    $(document).unbind('mousemove', mouseOut);
  }
}

function maskTimeInit() {
  if ((cGet('frascsum_s') == -1) && (!$('.popbg,.popbox').hasClass('on'))) {
    popShow();
    var date = new Date();
    var cName = 'frascsum_c';
    var arr = cGet('frascsum_c');
    var nowTime = Math.floor(date.getTime() / 1000);
    if (arr == null) {
      maskCountTime = nowTime + 60;
      cSet(cName, maskCountTime);
    } else {
      maskCountTime = parseInt(arr);
    }
    maskCountdown();
  }
}

var maskCountdown = function () {
  var statusNow = maskStatusSet();
  getCycleCountdownPop(maskCountTime);
  setNum(s);
  if (statusNow == 1) {
    setTimeout('maskCountdown()', 1000);
  }
};

function setNum(num) {
  $('.secbox').eq(0).html(Math.floor(num / 10));
  $('.secbox').eq(1).html(num % 10);
}

function maskStatusSet() {
  var statusNow = maskStatusCheck();
  if (statusNow == 2) {
    cSet('frascsum_s', -2);
    popHide();
  }
  return statusNow;
}

function maskStatusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < maskCountTime) {
    return 1;
  } else {
    return 2;
  }
}

function getCycleCountdownPop(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    s = remainingTime % 60;
  } else {
    s = 0;
  }
}
