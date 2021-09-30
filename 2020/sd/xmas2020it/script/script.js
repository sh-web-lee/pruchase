$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $('html, body').animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function soldOut() {
  $(".mask").remove();
  $(".banner,.giftbox,.footbuy").removeClass("sold").addClass("sold");
  var _href = $(".banner .message-box.small").find(".buybtn").attr("href");
  var _ga = $(".banner .message-box.small").find(".buybtn").attr("onclick");
  var _del = $(".banner .message-box.small").find(".price del").text();
  $(".footbuy .price").find("del").text(_del);
  $(".footbuy .buybtn").attr({
    "href": _href,
    "onclick": _ga,
  });

  $('.footbuy .buybtn').text('Acquista ora');

  $(".message-box.large,.giftbox").append('<div class="mask"><span class="sold-word">Terminés</span></div>');
  setTimeout('$(".sold-word").addClass("on")', 300);
}
// soldOut();

$(function() {

  setTimeout('$(".banner .off,.footbuy .off").addClass("on");', 500);

  countdown('.banner .countdown b', '.giftbox .countdown b', '.footbuy .countdown b');

  //review
  $(window).scrollWindow($(".giftbox h3"), $('.reviews dl'), ("on"));

  $('.gift-next-icon').on('click', function() {
    if (!$(this).parent().hasClass("on")) {
      $(this).parent().addClass("on").siblings().removeClass('on');
    } else {
      $(this).parent().removeClass("on").siblings().removeClass('on');
    }
  });

  $('.feature .textlink').target($('#compare'), 0);

  $('.feature .detail-list dl').hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    $('.feature .showcase .screenshot').css('marginLeft', -392 * ($(this).index() + 1));
    $('.feature .zoom li').removeClass('active').eq($(this).index()).addClass('active');
  });

  $('.footbuy li').on('click', function() {
    var bundle = $('.banner .bundle');
    var index = $(this).index();
    var dataName = $(this).attr('data-num');
    var dataUrl = bundle.eq(dataName).find('.buybtn').attr('href');
    var dataGa = bundle.eq(dataName).find('.buybtn').attr('onclick');
    var original = bundle.eq(dataName).find('.original').text();
    var discount = bundle.eq(dataName).find('.discount').text();
    $(this).addClass('on').siblings().removeClass('on');
    $('.footbuy .imgbox').find('img').eq(index).addClass('on').siblings().removeClass('on');
    $('.footbuy .original').text(original);
    $('.footbuy .discount').text(discount);
    $('.footbuy .buybtn').attr('href', dataUrl);
    $('.footbuy .buybtn').attr('onclick', dataGa);
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

var countdown = function(countdown1, countdown2, countdown3) {
  getCycleCountdown();
  $(countdown1).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown2).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown3).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if (d != 0 || h != 0 || i != 0 || s != 0 || mi != 0)
    setTimeout('countdown(\'' + countdown1 + '\',\'' + countdown2 + '\',\'' + countdown3 + '\')', 1);
  else soldOut();
};

function getCycleCountdown() {
  var date = new Date();
  if (MApp(2.2).cookie.get('sd-xmas2020it')) {
    dt = MApp(2.2).cookie.get('sd-xmas2020it');

  } else {
    dt = date.setMinutes(date.getMinutes() + 15);
    MApp(2.2).cookie.set('sd-xmas2020it', dt);
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
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
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