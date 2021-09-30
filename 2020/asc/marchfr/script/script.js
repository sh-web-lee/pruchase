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

var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
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

function popShow() {
  $(".pop,.pop-bg").removeClass("on").addClass("on");
}

$(function() {

  countdown(("#topcount b"));
  countdown(("#giftcount b"));
  countdown(("#botcount b"));

  setTimeout('bindPop()', 30000);

  $(window).scrollWindow($('.textlink'), $('.floatlayer'), ('on'));

  $(window).scrollWindow($('.reviews h2'), $('.reviews dl'), ('on'));

  $('.feature .textlink').target($('#compare'), 0);

  $('.feature .detail-list dl').hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    $('.feature .showcase .screenshot').css('marginLeft', -392 * ($(this).index() + 1));
    $('.feature .zoom li').removeClass('active').eq($(this).index()).addClass('active');
  });

  $(".pop .close").click(function() {
    $(".pop,.pop-bg").remove();
  });

});

function bindPop() {
  $(document).bind('mousemove', mouseOut);
}

function mouseOut(e) {
  if (cGet("marchfr") == null) {
    if (e.clientY < 3) {
      popShow();
      countTime();
      $(document).unbind('mousemove', mouseOut);
    }
  }
}

function countTime() {
  num = cGet("marchfr");
  if (num == null) {
    num = 60;
  } else {
    num--;
    if (num < 0) num = 0;
  }
  $('.packsNum').html(num);
  cSet('marchfr', num);
  if (num > 0) setTimeout('countTime()', 1000);
  else $(".pop,.pop-bg").remove();
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