$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
  if (d != 0 || h != 0 || i != 0 || s != 0) setTimeout("countdown('" + countdown + "')", 1000);
  else soldOut();
};

function getCycleCountdown() {
  var date = new Date();
  if (MApp(2.2).cookie.get('imfxmasexppt2019')) {
    dt = MApp(2.2).cookie.get('imfxmasexppt2019');

  } else {
    dt = date.setMinutes(date.getMinutes() + 10);
    MApp(2.2).cookie.set('imfxmasexppt2019', dt);
  }

  var datetime = getCountdown(dt);
  if (datetime == 0) {
    d = h = i = s = 0;
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
  return 0
}

function progressbar(len) {
  $(".progressbar > p").stop().animate({
    "width": len
  }, 300);
}

function getPacksNum() {
  var e = new Date;
  var n1 = MApp(2.2).cookie.get('imfxmasexppt2019') / 1000;
  var n2 = Math.floor(e.getTime() / 1000);
  if (n1 - n2 > 0) {
    packs = Math.floor((n1 - n2) / 7.5);
  } else packs = 0;
  $('.packsNum').html(packs);
  progressbar(packs);
  flipNum(packs, 2);
  setTimeout('getPacksNum()', 5000);
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}


function flipNum(num, length) {
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
      marginTop: -curNum * 22,
    }, "slow");
  }
}

function soldOut() {
  var $imf3pc = $(".banner .buybtn[data-num='1']");
  //spree
  $(".spree-box").removeClass("on");
  setTimeout('$(".spree").hide()', 500);
  //banner
  $(".banner .panel .message").eq(1).addClass("soldout").children().css({
    "visibility": "hidden"
  });
  //gifts
  $(".gifts dl").addClass("soldout");
  //comparison
  $(".comparison h3 span").text("55% de desconto");
  $(".comparison .buybtn").attr({
    "href": $imf3pc.attr("href"),
    "onclick": $imf3pc.attr("onclick")
  });
  $('.floatlayer').remove();
}

(function() {
  setTimeout('$(".tree span").addClass("on")', 300);
  setTimeout('$(".banner .message").addClass("on")', 450);
  setTimeout('$(".spree-box").addClass("on")', 600);
  //feature
  $(window).scrollWindow($(".banner .message"), $('.feature .ball,.feature h2,.feature>p,.feature>img'), ("on"));
  //intro
  $(window).scrollWindow($(".feature>img"), $('.intro .ball,.intro h2,.intro>img,.intro dl'), ("on"));

  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"), 0);

  //banner point
  $(".banner .message dd.one i").hover(function() {
    $(".point").fadeIn(300);
  }).mouseleave(function() {
    $(".point").fadeOut(300);
  });
  packs = 80;
  $('.packsNum').html(packs);
  progressbar(packs);
  flipNum(packs, 2);
  setTimeout('getPacksNum()', 5000);
  //countdown
  countdown((".countdown strong"));
}());