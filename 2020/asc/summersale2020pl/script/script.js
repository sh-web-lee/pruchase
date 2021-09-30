$(window).on('scroll', function() {

  if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
    $(".miliony dl").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".review-title").offset().top - 200) {
    $(".magazin .circle").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".service").offset().top) {
    $('.floatlayer').addClass('on');
  } else {
    $('.floatlayer').removeClass('on');
  }
});

//soldout
function soldout() {
  var href = $(".banner .offer").eq(2).attr("href");
  var _del = $(".banner .offer").eq(2).find(".price del").text();

  $(".mask,.mask-word,.giftbox .price .discount").remove();
  $(".banner,.giftbox,.bottombuy").addClass("sold");
  $(".banner .center").removeClass("bundle").addClass("right");
  $(".banner .last").removeClass("right").addClass("bundle");
  $(".banner .center .buybtn").removeClass("gray").addClass("gray");
  $(".banner .last .buybtn").removeClass("gray");
  $(".banner .center .discount").addClass("small");
  $(".banner .last .discount").removeClass("small");
  $(".banner .center img").attr("src", _imgSrc);

  $(".banner .offer.center,.giftbox .wrapper").append('<div class="mask"><span class="mask-word"></span></div>');
  $(".giftbox .price").append('<span class="discount small">-60<small>%</small></span>');
  $(".changelist li.first").append('<em class="mask-word"></em>');

  $(".giftbox .price del, .float .price del").text(_del);
  $(".giftbox .buybtn, .bottombuy .buybtn").attr({
    "href": href,
  });
  $(".bottombuy .changelist li").eq(0).removeClass("on").addClass("sold");
  $(".floatcount").html("<span>Wykorzystaj <b>60%</b> zniżkę!</span>");
  bottombuy($(".bottombuy .changelist li").eq(1));
}
// soldout();

var num;
var choice;

function bottombuy(selector) {
  var index = selector.index();
  if (index < 2) {
    num = index + 1;
  } else {
    num = 0;
  }
  var _href = $(".banner .offer").eq(num).find(".buybtn").attr("href");
  var _price = $(".banner .offer").eq(num).find(".price strong").text();
  var _del = $(".banner .offer").eq(num).find(".price del").text();
  if (!$(selector).hasClass("sold")) {
    selector.addClass("on").siblings().removeClass("on");
    $(".bottombuy .imgbox span").eq(index).addClass("on").siblings().removeClass("on");
    $(".bottombuy .buybtn").attr({
      "href": _href,
    });
    $(".bottombuy .price strong").text(_price);
    $(".bottombuy .price del").text(_del);
  } else {
    return;
  }
}

var className = ["one", "two", "three"];
var index = 1;
var nextFun = function() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $(".reviewuser span").length; i++) {
    $(".reviewuser span").eq(i).attr("class", className[i]);
  }
  if (index < 2) {
    index++;
    review(index);
  } else {
    index = 0;
    review(index);
  }
};

var prevFun = function() {
  var addName = className.shift();
  className.push(addName);
  for (var i = 0; i < $(".reviewuser span").length; i++) {
    $(".reviewuser span").eq(i).attr("class", className[i]);
  }
  if (index > 0) {
    index--;
    review(index);
  } else {
    index = 3;
    review(index);
  }
};

var sWidth = $(".reviewlist").width();
var len = $(".reviewlist li").length;
$(".reviewlist ul").css("width", sWidth * (len));
var review = function(index) {
  $(".reviewlist ul").css("width", sWidth * (len));
  var nowLeft = $(".reviewlist").width();
  $(".reviewlist ul").stop(true, true).animate({
    "marginLeft": -nowLeft
  }, 'slow', function() {
    $('.reviewlist ul').css('marginLeft', '0');
    $('.reviewlist ul').find('li:first').appendTo($('.reviewlist ul'));
  });
};

$(function() {

  $(".benefits .detail-list dl").hover(function() {
    $(".benefits .showcase .screenshot").css('marginLeft', -486 * ($(this).index()));
    $(".benefits .zoom li").removeClass('on').eq($(this).index()).addClass('on');
    $(this).addClass("on").siblings().removeClass("on");
  });

  //countdown
  countdown((".banner .countdown b"), (".floatcount b"));

  $(".bottombuy .changelist li").hover(function() {
    bottombuy($(this));
  });

  $(".floatlayer .close").click(function() {
    $(".floatlayer").remove();
  });

  // packsInit();
});

// function packsInit() {
//   var date = new Date();
//   var cName = "summersale2020pl0622_p" + date.getDate();
//   var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
//   if (arr === null) {
//     packs = 63;
//   } else {
//     packs = arr[2];
//   }
//   $(".packsNum").text(packs);
//   if (statusCheck()) {
//     setTimeout('getSales()', getReTime());
//   }
// }

// function statusCheck() {
//   if (packs == 7) {
//     return 0;
//   } else {
//     return 1;
//   }
// }

// function getReTime() {
//   if (packs > 61) {
//     return 10 * 1000;
//   } else {
//     return 20 * 1000;
//   }
// }

// function getSales() {
//   var date = new Date();
//   $.ajax({
//     type: "GET",
//     url: "summersale2020.php",
//     data: "action=getPacks&d=" + date.getDate(),
//     success: function(res) {
//       var sales = JSON.parse(res);
//       if (sales.packsNum != packs) {
//         packs = sales.packsNum;
//         $(".packsNum").text(packs);
//         statusCheck();
//       }
//     }
//   });
//   if (statusCheck()) {
//     setTimeout('getSales()', getReTime());
//   }
// }

//countdown


// var countdown = function(countdown1, countdown2, countdown3) {
//   getCycleCountdown();
//   $(countdown1).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s);
//   $(countdown2).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s);
//   $(countdown3).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s);
//   if (h != '00' || i != '00' || s != '00' || mi != '00') setTimeout("countdown('" + countdown1 + "' , '" + countdown2 + "' , '" + countdown3 + "')", 1);
//   else soldout();
// };

var countdown = function(countdown1, countdown2) {
  getCycleCountdown();
  $(countdown1).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if (h != '00' || i != '00' || s != '00' || mi != '00') setTimeout("countdown('" + countdown1 + "' , '" + countdown2 + "')", 1);
  else soldout();
};

function getCycleCountdown() {
  var date = new Date();
  var cName = "summersale2020pl0622" + date.getDate();
  if (MApp(2.2).cookie.get(cName)) {
    dt = MApp(2.2).cookie.get(cName);
  } else {
    dt = date.setSeconds(date.getSeconds() + 1200);
    MApp(2.2).cookie.set(cName, dt);
  }

  var datetime = getCountdown(dt);
  if (datetime == 0) {
    d = h = i = s = mi = '00';
    mi = '00';
    soldout();
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