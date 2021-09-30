var featureDl = $(".feature dl");
var startY = $(".service").offset().top;
var valY = 0;

$(window).on('scroll', function() {
  if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
    $(".float").addClass("on");
  } else {
    $(".float").removeClass("on");
  }
  if ($(window).scrollTop() > startY) {
    valY = ($(window).scrollTop() - startY) / 50;
    featureDl.each(function() {
      $(this).addClass("on").css({
        "transform": "translateY(" + valY + "%)"
      }, 10);
    });
  }
  if ($(window).scrollTop() > $(".feature dl:last-child").offset().top) {
    $(".intro dl").addClass("on");
  }
  if ($(window).scrollTop() > $(".gifts dl dd").offset().top) {
    $(".user img").addClass("on");
  }
});

//soldout
function soldout() {
  var href = $(".banner .content dl.pc3 .buybtn").attr("href");
  var ga = $(".banner .content dl.pc3 .buybtn").attr("onclick");
  //banner
  $(".banner .content dl").eq(1).removeClass("large middle").addClass("small right soldout").end().eq(2).removeClass("small right").addClass("large middle");
  //countdown
  $(".countdown").css({
    "visibility": "hidden"
  });
  //gifts+float
  $(".gifts,.float,.bottombuy").addClass("soldout");
  $(".gifts .price del, .float .price del").text("199,90 zł");
  $(".gifts .buybtn, .float .buybtn").attr({
    "href": href,
    "onclick": ga
  });
  //bottombuy
  $(".bottombuy ul li").eq(0).removeClass("active").addClass("soldout");
  bottombuy($(".bottombuy ul li").eq(1));
}

var num;
var choice;
//bottombuy
function bottombuy(selector) {
  var index = selector.index();
  if (index < 2) {
    num = index + 1;
    if (index == 0) {
      $(".bottombuy .countdown").fadeIn();
    } else {
      $(".bottombuy .countdown").fadeOut();
    }
  } else {
    num = 0;
  }
  var _href = $(".banner .content dl").eq(num).find(".buybtn").attr("href");
  var _ga = $(".banner .content dl").eq(num).find(".buybtn").attr("onclick");
  var _price = $(".banner .content dl").eq(num).find(".price big").text();
  var _del = $(".banner .content dl").eq(num).find(".price del").text();
  selector.addClass("active").siblings().removeClass("active");
  $(".bottombuy .box img").eq(index).addClass("active").siblings().removeClass("active");
  $(".bottombuy .buybtn").attr({
    "href": _href,
    "onclick": _ga
  });
  $(".bottombuy .price big").text(_price);
  $(".bottombuy .price del").text(_del);
}

$(function() {
  //review
  $('#dg-container').gallery();
  //countdown
  countdown((".banner .countdown strong"), (".gifts .countdown strong"), (".bottombuy .countdown strong"));
  //bottombuy
  $(".bottombuy ul li").hover(function() {
    bottombuy($(this));
  });
  //
  packsInit();
});

function packsInit() {
  var date = new Date();
  var cName = "plascjan_p" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr === null) {
    packs = 63;
  } else {
    packs = arr[2];
  }
  $(".packsNum").text(packs);
  if (statusCheck()) {
    setTimeout('getSales()', getReTime());
  }
}

function statusCheck() {
  if (packs == 7) {
    return 0;
  } else {
    return 1;
  }
}

function getReTime() {
  if (packs > 61) {
    return 10 * 1000;
  } else {
    return 20 * 1000;
  }
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "jansale.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        $(".packsNum").text(packs);
        statusCheck();
      }
    }
  });
  if (statusCheck()) {
    setTimeout('getSales()', getReTime());
  }
}

//countdown


var countdown = function(countdown1, countdown2, countdown3) {
  getCycleCountdown();
  $(countdown1).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s);
  $(countdown2).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s);
  $(countdown3).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s);
  if (h != '00' || i != '00' || s != '00' || mi != '000') setTimeout("countdown('" + countdown1 + "' , '" + countdown2 + "' , '" + countdown3 + "')", 1);
  else soldout();
};

function getCycleCountdown() {
  var date = new Date();
  var cName = "ascjansale2020pl" + date.getDate();
  if (MApp(2.2).cookie.get(cName)) {
    dt = MApp(2.2).cookie.get(cName);
  } else {
    dt = date.setSeconds(date.getSeconds() + 1200);
    MApp(2.2).cookie.set(cName, dt);
  }

  var datetime = getCountdown(dt);
  if (datetime == 0) {
    d = h = i = s = '00';
    mi = '000';
    soldout();
  } else {
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 3);
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