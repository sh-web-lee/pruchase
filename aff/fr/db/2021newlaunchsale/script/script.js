$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

function buyChange(name) {
  $(name + " li").click(function() {
    var index = $(this).index();
    var num = $(this).attr("data-num");
    var _strong = $(".banner .content li").eq(num).find(".price strong").html();
    var _del = $(".banner .content li").eq(num).find(".price del").html();
    var _url = $(".banner .content li").eq(num).find(".buybtn").attr("href");
    var _ga = $(".banner .content li").eq(num).find(".buybtn").attr("onclick");
    if (!$(this).hasClass("sold")) {
      $(this).addClass("on").siblings().removeClass("on");
      $(name + " .showcase img").eq(index).addClass("on").siblings().removeClass("on");
      $(name + " .buybtn").attr({
        "href": _url,
        "onclick": _ga
      });
      $(name + " .price").find("strong").html(_strong);
      $(name + " .price").find("del").html(_del);
    }
  });
}

/*function soldOut() {
  $(".mask,.sold-word").remove();
  var _strong = $(".banner .content li").eq(2).find(".price strong").html();
  var _del = $(".banner .content li").eq(2).find(".price del").html();
  var _url = $(".banner .content li").eq(2).find(".buybtn").attr("href");
  var _ga = $(".banner .content li").eq(2).find(".buybtn").attr("onclick");
  $(".bottomcart .bundle").removeClass("on");
  $(".bottomcart .bundle,.banner .on-middle").addClass("sold");
  $(".bottomcart li.three,.bottomcart .showcase img.three").addClass("on").siblings().removeClass("on");
  $(".bottomcart li.three").removeClass("sold");
  $(".bottomcart .price").find("strong").html(_strong);
  $(".bottomcart .price").find("del").html(_del);
  $(".bottomcart .buybtn").attr({
    "href": _url,
    "onclick": _ga
  });
  $(".banner .on-middle,.gift-box .wrapper").append('<div class="mask"><em class="sold-word">TERMINÉ!</em></div>');
  $(".bottomcart .bundle").append('<em class="sold-word">TERMINÉ!</em>');
  setTimeout('$(".sold-word").addClass("on")', 300);
}*/
// soldOut();

function popShow() {
  $(".pop,.pop-bg").addClass("on");
}

function popHide() {
  $(".pop,.pop-bg").removeClass("on");
}

$(function() {

  // $(document).bind('mousemove', mouseOut);

  $(".usereview .users li").mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("current").siblings().removeClass("current");
    $(".userbox dl").eq(num).addClass("active").siblings().removeClass("active");
  });

  //bottomcart
  buyChange("#centbuy");
  buyChange("#bottombuy");

  // timeInit();

  countdown((".countdown b"));

  //feature
  $(window).on('scroll', function() {　
    if ($(document).scrollTop() > $(".feature").offset().top - 200) {
      $(".feature dl").addClass("on");
    }
  });
  //intro
  $(".intro .right-message dl").hover(function() {
    var index = $(this).index();
    $(".intro .right-message>span").stop().animate({
      marginTop: index * 104
    }, 500);
    $(".intro .left-message ul li").eq(index).addClass("on").siblings().removeClass("on");
  });

  $(".pop .close").click(function() {
    $(".pop,.pop-bg").remove();
  });

});


var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 23:59:59');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

// var countdown = function(countdown) {
//   getCycleCountdown();
//   $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi).end();
//   if (h != 0 || i != 0 || s != 0 || mi != 0) setTimeout("countdown('" + countdown + "')", 1);
//   else ;
// };
//
// function getCycleCountdown() {
//   dt = cGet("junesummersalefr20200624");
//   if (dt == null) {
//     var date = new Date();
//     dt = date.setMinutes(date.getMinutes() + 10);
//     cSet('junesummersalefr20200624', dt);
//   }
//
//   var datetime = getCountdown(dt);
//   if (datetime == 0) {
//     d = h = i = s = mi = 0;
//   } else {
//     d = MApp(2.2).packages.zeroize(datetime[0], 2);
//     h = MApp(2.2).packages.zeroize(datetime[1], 2);
//     i = MApp(2.2).packages.zeroize(datetime[2], 2);
//     s = MApp(2.2).packages.zeroize(datetime[3], 2);
//     mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
//   }
// }
//
// function getCountdown(t) {
//   var e = new Date,
//     i = Math.floor(e.getTime() / 1000),
//     r = t / 1000,
//     n = r - i;
//   if (n > 0) {
//     var s = Math.floor(n / 86400),
//       a = Math.floor(n / 3600 % 24),
//       o = Math.floor(n / 60 % 60),
//       u = Math.floor(n % 60),
//       h = 999 - e.getMilliseconds();
//     return 10 > h ? h = "00" + h : 100 > h && (h = "0" + h),
//       Array(s, a, o, u, h)
//   }
//   return 0
// }

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

function getNumber() {
  let num = cGet("2020summernum");
  if (num == null) {
    num = 60;
  } else {
    num--;
    if (num < 0) num = 0;
  }
  ones = num % 10;
  tens = (num - ones) / 10;
  $('.second em').eq(0).html(tens).end().eq(1).html(ones).end();
  cSet('2020summernum', num);
  if (num > 0)
    setTimeout('getNumber()', 1000);
  if (num === 0) {
    popHide();
  }
}

function mouseOut(e) {
  if (e.clientY < 15) {
    popShow();
    $(document).unbind('mousemove', mouseOut);
    getNumber();
  }
}