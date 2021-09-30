function soldOut() {
  $(".mask,.sold-word,.gifts .price > p").remove();
  $(".banner .offer.big,.gifts .imgbox").append('<div class="mask"><span class="sold-word">udsolgt</span></div>');
  setTimeout('$(".sold-word").addClass("on")', 300);
  $(".banner,.gifts,.footbuy").removeClass("sold").addClass("sold");
  $(".gifts-list,.gifts .countdown,.footbuy .countdown").remove();
  $(".gifts .price").prepend('<p><strong>179<small>kr</small></strong> <del>1177kr</del></p>');
  $(".footbuy .price,.gifts .price").find("del").html("399kr");
  $(".footbuy .price").find("strong").html("179<small>kr</small>");
  $(".gifts .buybtn").text('Køb nu');
  var _href = $(".banner .offer").eq(0).find(".buybtn").attr("href");
  var _ga = $(".banner .offer").eq(0).find(".buybtn").attr("onclick");

  $(".buybtn").attr({
    "href": _href,
    "onclick": _ga,
  });
}
// soldOut();

var countdown = function(countdown) {
  getCycleCountdown();
  // $(countdown).html(h + ':' + i + ':' + s + ':' + mi);
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if (d != 0 || h != 0 || i != 0 || s != 0 || mi != 0) setTimeout("countdown('" + countdown + "')", 100);
  else soldOut();
};

function getCycleCountdown() {
  var date = new Date();
  if (MApp(2.2).cookie.get('xmasrightdk2020')) {
    dt = MApp(2.2).cookie.get('xmasrightdk2020');

  } else {
    dt = date.setMinutes(date.getMinutes() + 12);
    MApp(2.2).cookie.set('xmasrightdk2020', dt);
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
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
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
  return 0;
}

(function() {
  $(".feature-message ul li").hover(function() {
    var index = $(this).index();
    $(".feature-tag").stop().animate({
      "marginTop": index * 106
    }, 300);
    $(".feature .computer ul").stop().animate({
      "marginLeft": -(index * 562)
    }, 300);
  });

  $(".review-list").hide();

  $(".review-list").eq(2).show();

  $(".review-icon li ").hover(function() {
    var num = $(".review-icon li ").index(this);
    $('.review-icon li').removeClass('on');
    $('.review-icon li').eq(num).addClass('on');
    $(".review-list").hide().animate({
      opacity: '0'
    }, 100);
    $(".review-list").eq(num).show().animate({
      opacity: '1'
    }, 100);
  });

  countdown((".banner .countdown b"));
  countdown((".gifts .countdown b"));
  countdown((".footbuy .countdown b"));
}());