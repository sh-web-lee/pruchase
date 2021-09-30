var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(0).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if (h != 0 || i != 0 || s != 0 || mi != 0) setTimeout("countdown('" + countdown + "')", 1);
  else soldOut();
};
var countdownpop = function(countdown) {
  getCycleCountdownPop();
  $(countdown).eq(0).html(0).end().eq(1).html(ip).end().eq(2).html(sp).end().eq(3).html(mip);
  if (hp != 0 || ip != 0 || sp != 0 || mip != 0) setTimeout("countdownpop('" + countdown + "')", 1);
  else popSoldOut();

};

function getCycleCountdown() {
  dt = cGet("maroffersv");
  if (dt == null) {
    var date = new Date();
    dt = date.setMinutes(date.getMinutes() + 10);
    cSet('maroffersv', dt);
  }

  var datetime = getCountdown(dt);
  if (datetime == 0) {
    d = h = i = s = mi = 0;
    soldOut();
  } else {
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 3);
  }
}

function getCycleCountdownPop() {
  dtpop = cGet("maroffersvpop");
  if (dtpop == null) {
    var date = new Date();
    dtpop = date.setMinutes(date.getMinutes() + 1);
    cSet('maroffersvpop', dtpop);
  }

  var datetimepop = getCountdownPop(dtpop);
  if (datetimepop == 0) {
    dp = hp = ip = sp = mip = 0;
    popSoldOut();
  } else {
    dp = MApp(2.2).packages.zeroize(datetimepop[0], 2);
    hp = MApp(2.2).packages.zeroize(datetimepop[1], 2);
    ip = MApp(2.2).packages.zeroize(datetimepop[2], 2);
    sp = MApp(2.2).packages.zeroize(datetimepop[3], 2);
    mip = MApp(2.2).packages.zeroize(datetimepop[4], 3).substr(0, 3);
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

function getCountdownPop(t) {
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


//soldOut
function soldOut() {
  $(".mask,.sold-word").remove();
  var _hrefSold = $(".banner .offer").eq(0).find(".buybtn").attr("href");
  var _gaSold = $(".banner .offer").eq(0).find(".buybtn").attr("onclick");
  $(".banner,.giftbox,.footbuy").addClass("sold");
  $(".footbuy li").removeClass("on");
  $(".footbuy li").eq(0).addClass("sold");
  $(".footbuy li").eq(1).addClass("on");
  $(".footbuy .imgbox").find("img").removeClass("on");
  $(".footbuy .imgbox").find("img.pc").addClass("on");
  $(".footbuy .price").find("del").html($(".banner .offer.left .price").find("del").text());
  $(".footbuy .price").find(".buybtn").attr({
    "href": _hrefSold,
    "onclick": _gaSold
  });
  $(".banner .offer.left").removeClass("small").addClass("large");
  $(".banner .offer.right").removeClass("large").addClass("small");
  $(".banner .offer").find(".discount").removeClass("big");
  $(".banner .offer.left").find(".discount").addClass("big");
  $(".banner .offer.left").find(".buybtn").removeClass("graybtn").addClass("greenbtn");
  $(".banner .offer.right,.giftbox .wrapper").append('<div class="mask"><span class="sold-word">UTSÅLD</span></div>');
  $(".footbuy li").eq(0).append('<span class="sold-word">UTSÅLD</span>');
  setTimeout('$(".sold-word").addClass("on")', 300);
}
// soldOut();

function popSoldOut() {
  $(".mask").remove();
  $(".pop,.popsmall").removeClass("sold").addClass("sold");
  $(".pop,.popsmall").append('<div class="mask"><span class="sold-word">UTSÅLD</span></div>');
  setTimeout('$(".sold-word").addClass("on")', 300);
}

function popShow() {
  $(".pop,.pop-bg").removeClass("on").addClass("on");
  countdownpop(("#popcount b"));
  countdownpop(("#popsmallcount b"));

  $(".pop .mini").click(function() {
    $(".pop,.pop-bg").removeClass("on");
    $(".pop").removeClass("mini").addClass("mini");
    $(".popsmall").removeClass("on").addClass("on");
  });
}

function getNumber() {
  num = cGet("maroffersvnum");
  if (num == null) {
    num = 695;
  } else {
    ad = (Math.random() > 0.5) ? 1 : 2;
    num = Number(num) + Number(ad);
  }
  $('#num').html(num);
  cSet('maroffersvnum', num);
  setTimeout('getNumber()', getReTime());
}

function getReTime() {
  t1 = (Math.random() > 0.5) ? 3 : 5;
  t2 = (Math.random() > 0.5) ? 6 : 8;
  return reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
}
//popShow();

(function() {
  $('#dg-container').gallery();

  countdown(("#topcount b"));
  getNumber();
  // if (cGet("maroffersvpop") == null) setTimeout('popShow()', 90000);

  $(".footbuy li").mouseover(function() {
    var index = $(this).index();
    var _num = $(this).attr("data-num");

    if (!$(this).hasClass("sold")) {
      var _discount = $(".banner .offer").eq(_num).find(".price del").html();
      var _href = $(".banner .offer").eq(_num).find(".buybtn").attr("href");
      var _ga = $(".banner .offer").eq(_num).find(".buybtn").attr("onclick");
      $(this).addClass("on").siblings().removeClass("on");
      $(".footbuy .imgbox").find("img").eq(index).addClass("on").siblings().removeClass("on");
      $(".footbuy .price").find("del").html(_discount);
      $(".footbuy .price").find(".buybtn").attr({
        "href": _href,
        "onclick": _ga
      });
    }
  });

  $(".pop .close").click(function() {
    $(".pop,.pop-bg").remove();
  });

  $(".popsmall .maxi").click(function() {
    $(".popsmall").removeClass("on");
    $(".pop").removeClass("mini");
    $(".pop,.pop-bg").removeClass("on").addClass("on");
  });
}());