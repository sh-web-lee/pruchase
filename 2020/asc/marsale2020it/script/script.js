$.fn.target=function (target) {
  $(this).click(function() {
    var Theigth = target.offset().top;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
}
var originalLink = "http://www.iobit.com/buy.php?product=it-asc133pciusdpf2199&ref=it_asc133pciupfsd2199purchase2003&refs=it_purchase_asc&tw=-8";
var discountLink = "http://www.iobit.com/buy.php?product=it-asc133pciusdpf1799&ref=it_asc133pciupfsd1799purchase2003&refs=it_purchase_asc&tw=-8";

function footbuy (selector) {
  var index = selector.index();
  var _num = selector.attr("data-num");
  selector.addClass('on').siblings().removeClass("on");
  $(".footbuy .imglist").eq(index).addClass("on").siblings().removeClass("on");
  var _origian = $(".banner .offer").eq(_num).find(".price del").text();
  var _discount = $(".banner .offer").eq(_num).find(".price span").text();
  var btnHref = $(".banner .offer").eq(_num).find(".buybtn").attr("href");
  var btnGa = $(".banner .offer").eq(_num).find(".buybtn").attr("onclick");
  $(".footbuy .price").find("del").text(_origian);
  $(".footbuy .price").find("span").text(_discount);
  $(".footbuy .buybtn").attr({
    "href": btnHref,
    "onclick": btnGa,
  });
}
//blink
function blink () {
  $(".banner .content .offer.largest .packs, .gifts dl.asc .packs").addClass("blink");
}
//discount
function discount () {
  $(".banner .content .offer.largest, .gifts dl.asc, .footbuy").addClass("discount");
  $(".banner .content .offer.largest .price span").text(" 17,99€");
  $(".banner .content .offer.largest .buybtn, .gifts .buybtn").attr({"href": discountLink});
  footbuy($(".footbuy ul li.gift"));
}
//miss
function miss () {
  //coupon
  smaller();
  $(".coupon.smaller").addClass("miss");
  //banner
  $(".banner .content .offer.largest, .footbuy").removeClass("discount").addClass("miss");
  $(".banner .content .offer.largest .price span").text(" 21,99€");
  $(".banner .content .offer.largest .buybtn, .gifts .buybtn").attr({"href": originalLink});
  //gifts
  $(".gifts dl.asc").removeClass("discount");
  footbuy($(".footbuy ul li.gift"));

}
//show
function popshow () {
  $(".coupon.larger").fadeIn();
  $(".banner .offer.largest").css({"height": 474, "margin": 0});
  $(".banner .offer.largest dl dt").css({"height": 264});
  $(".banner .countdown").css({"display": "block"});
  //countdownpop((".coupon.larger .countdown strong"), (".coupon.smaller .countdown strong"));
}
//close
function close () {
  $(".coupon").fadeOut();
  discount ();
  var date = new Date();
  dtpop = date.setMinutes(date.getMinutes() - 10);
  cSet('marsale2020itpop', dtpop);
}
//smaller
function smaller () {
  $(".coupon.larger").addClass("small");
  setTimeout(function () {
    $(".coupon.larger").hide();
    $(".coupon.smaller").fadeIn(300);
  }, 500);
  discount ();
}
//larger
function larger () {
  $(".coupon.smaller").fadeOut(300);
  $(".coupon.larger").removeClass("small").fadeIn(300);
}

//soldout
function soldout () {
  $(".banner .content .offer.largest, .gifts dl, .footbuy").addClass("soldout");
  $(".banner .content .offer.largest .packs, .gifts dl.asc .packs").removeClass("blink");
  $(".gifts .buybtn").attr({
    "href": $(".banner .offer").eq(1).find(".buybtn").attr("href"),
    "onclick": $(".banner .offer").eq(1).find(".buybtn").attr("onclick")
  });
  $(".footbuy ul li.gift").removeClass("on");
  footbuy($(".footbuy ul li.two"));
}

var reviewPersonName = ['HTML', 'Bruce Ramsay', 'Hank Ewert', 'Charles R. Widick', 'Loretta Harnarine'];

$(function () {
  setTimeout('popshow()', 15000);
  //countdown
  timeInit();
  countdown((".banner .countdown strong"),(".coupon.larger .countdown strong"), (".coupon.smaller .countdown strong"));
  $(document).bind('mousemove', mouseOut);
  getNumber1();
  getNumber2();
  //tip
  $(".banner .tip").hover(function () {
    $(".banner .detail").fadeIn();
  }).mouseout(function () {
    $(".banner .detail").fadeOut();
  });
  //benefit
  $(".benefit .detail-list dl").hover(function() {
    $(".benefit .showcase .screenshot").css('marginLeft', -555 * ($(this).index() + 1));
    $(".benefit .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benefit .list-icon li").removeClass('active').eq($(this).index() + 1).addClass('active');
  });
  $(".benefit .list-icon li").hover(function() {
    $(".benefit .showcase .screenshot").css('marginLeft', -555 * ($(this).index()));
    $(".benefit .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if (num === 0) {
      $(".benefit .detail-list dl").removeClass("active");
    } else {
      $(".benefit .detail-list dl").eq($(this).index() - 1).addClass("active").siblings().removeClass("active");
    }
    $(".benefit .list-icon li").removeClass('active');
    $(this).addClass('active');
  });
  //review
  $(".review .content ul li").hover(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review .content .review-content p").eq(index).addClass("active").siblings().removeClass("active");
    $(".review .content .line").text(reviewPersonName[index]).stop().animate({"left": index*134 }, 300);
  });
  //intro
  $(".intro").target($("#compare"));
  //footbuy
  $(".footbuy li").on("hover", function() {
    footbuy($(this));
  });
  //
  $(".bottombtn").target($(".footer"));
});

/*var countdownpop = function(countdown1, countdown2) {
  getCycleCountdownPop();
  $(countdown1).eq(0).html(ip).end().eq(1).html(sp).end().eq(2).html(mip);
  $(countdown2).eq(0).html(ip).end().eq(1).html(sp).end().eq(2).html(mip);
  if (hp != '00' || ip != '00' || sp != '00' || mip != '00') setTimeout("countdownpop('"+ countdown1 +"', '"+ countdown2 +"')", 1);
  else miss();
};*/
//
// function getCycleCountdown() {
//   dt = cGet("marsale2020it");
//   if (dt == null) {
//     var date = new Date();
//     dt = date.setMinutes(date.getMinutes() + 15);
//     cSet('marsale2020it', dt);
//   }
//
//   var datetime = getCountdown(dt);
//   if (datetime == 0) {
//     d = h = i = s = mi = '00';
//     miss();
//     soldout();
//   } else {
//     d = MApp(2.2).packages.zeroize(datetime[0], 2);
//     h = MApp(2.2).packages.zeroize(datetime[1], 2);
//     i = MApp(2.2).packages.zeroize(datetime[2], 2);
//     s = MApp(2.2).packages.zeroize(datetime[3], 2);
//     mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
//   }
// }


function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 2);
}
/*function getCycleCountdownPop() {
  dtpop = cGet("marsale2020itpop");
  if (dtpop == null) {
    var date = new Date();
    dtpop = date.setMinutes(date.getMinutes() + 10);
    cSet('marsale2020itpop', dtpop);
  }

  var datetimepop = getCountdown(dtpop);
  if (datetimepop == 0) {
    dp = hp = ip = sp = mip = '00';
    miss();
  } else {
    dp = MApp(2.2).packages.zeroize(datetimepop[0], 2);
    hp = MApp(2.2).packages.zeroize(datetimepop[1], 2);
    ip = MApp(2.2).packages.zeroize(datetimepop[2], 2);
    sp = MApp(2.2).packages.zeroize(datetimepop[3], 2);
    mip = MApp(2.2).packages.zeroize(datetimepop[4], 3).substr(0, 2);
  }
}*/

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

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

// function cSet(name, value) {
//   var Days = 2;
//   var exp = new Date();
//   name = name + exp.getDate();
//   exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
//   document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
// }
function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "marsale2020it" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 600;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
}

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    var d = Math.floor(remainingTime / (24 * 60 * 60));
    var h = Math.floor(remainingTime / (60 * 60) % 24);
    var i = Math.floor(remainingTime / 60 % 60);
    var s = Math.floor(remainingTime % 60);
    var mi = Math.floor((999 - dateObj.getMilliseconds()) / 10);
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}

var countdown = function(countdown,countdown1, countdown2) {
  // var statusNow = statusSet();
  getCycleCountdown(countTime);
  Countdonspace(i);
  Countdonspace(s);
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown1).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if (h != '00' || i != '00' || s != '00' || mi != '00')
    setTimeout("countdown('" + countdown + "','" + countdown1 + "','" + countdown2 + "')", 1);
  else{
    miss();
  }
};

function Countdonspace(t) {
  parseInt(t);
  if(t < 10) {
    t = "0"+t;
  }
  return t;
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$(".banner").hasClass('"sold"')) {
      soldout();
    }
  }
  return statusNow;
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < countTime) {
    return 1;
  } else {
    return 2;
  }
}

function getNumber1() {
  var date = new Date();
  var cName = 'marsale2020itnum1' + date.getDate();
  num = cGet("marsale2020itnum1");
  if (num == null) {
    num = 80;
  } else {
    num--;
    if(num<3) num=3;
  }
  buynum = 101-num;
  $('.packsNum1').html(num);
  $('.viewNum1').html(buynum);
  cSet(cName, num);
  if(num>3) setTimeout('getNumber1()', 15000);
}

function getNumber2() {
  var date = new Date();
  var cName = 'marsale2020itnum2' + date.getDate();
  num2 = cGet("marsale2020itnum2");
  if (num2 == null) {
    num2 = 60;
  } else {
    num2--;
    if(num2<0) num2=0;
  }
  buynum2 = 79-num2;
  $('.packsNum2').html(num2);
  $('.viewNum2').html(buynum2);
  cSet(cName, num2);
  if(num2>57){
    reTime=1500;
  }else{
    reTime = 15000;
  }
  if(num2>0) setTimeout('getNumber2()', reTime);
  if(num2 == 0){
    soldout();
  }
}

function mouseOut(e) {
  if (e.clientY < 100) {
    popshow();
    $(document).unbind('mousemove', mouseOut);
  }
}