var stopcountdown = false;
var maskTime = 60;
var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if (!stopcountdown) setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var date = new Date();
  if (MApp(2.2).cookie.get('xmasindexpt')) {
    dt = MApp(2.2).cookie.get('xmasindexpt');

  } else {
    dt = date.setMinutes(date.getMinutes() + 8);
    MApp(2.2).cookie.set('xmasindexpt', dt);
  }

  var datetime = getCountdown(dt);
  if (datetime == 0) {
    stopcountdown = true;
    d = h = i = s = mi = 0;
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

function maskTimeCountDown() {
  if (maskTime > 0) {
    maskTime--;
    setTimeout('maskTimeCountDown()', 1000);
  } else if ((maskTime == 0)) {
    $(document).bind('mousemove', mouseOut);
  }
}

function mouseOut(e) {
  if (e.clientY < 5) {
    $(document).unbind('mousemove', mouseOut);
  }
}

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

//soldOut
function soldOut() {
  var tw = MApp(2.2).datetime.getTimeZone();
  var aff = MApp(2.2).url.getParameters("aff");
  //banner
  $(".banner .large,.bottombuy,.banner").removeClass("soldout").addClass("soldout");

  //gifts
  $(".gifts .gifts-box").unbind("hover").removeClass("soldout").addClass("soldout");
  $(".gifts .buybtn,.bottombuy .buybtn").attr({
    "href": "https://www.iobit.com/buy.php?product=pt-sd63pc7699&ref=pt_sd6purchase1911&refs=pt_purchase_sd&refs=fr_purchase_asc&tw=" + tw,
  });
  $(".bottombuy .price").find("big").text("76,99");
  $(".bottombuy .price").find("del").text("R$ 119,99");
}

var c1 = 0;
var d1 = 0;

$(".dg-next").click(function() {
  $(".review .reviews dd p").removeClass("on");
  var message = $('.dg-container ul li:eq(0)');
  //$('.dg-container ul li:eq(0)').removeClass("first")
  $('.dg-container ul li').removeClass("first");
  $('.dg-container ul li:eq(0)').removeClass("two");
  $('.dg-container ul li:eq(1)').removeClass("three");
  $('.dg-container ul li:eq(2)').removeClass("active");
  $('.dg-container ul li:eq(3)').removeClass("four");
  $('.dg-container ul li:eq(4)').removeClass("five");


  $('.dg-container ul').find('li:first').appendTo($('.dg-container ul'));

  $('.dg-container ul li:eq(0)').addClass("two");
  $('.dg-container ul li:eq(1)').addClass("three");
  $('.dg-container ul li:eq(2)').addClass("active");
  $('.dg-container ul li:eq(3)').addClass("four");
  $('.dg-container ul li:eq(4)').addClass("first");
  setTimeout(function() {
    $('.dg-container ul li:eq(4)').addClass("five").removeClass("first");
  }, 100);

  var num = $('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
  setTimeout('$(".review .reviews dd p").eq(' + num + ').addClass("on");', 100);
});


$(".dg-prev").click(function() {
  var message = $('.dg-container ul li:last');
  $(".review .reviews dd p").removeClass("on");
  var index = $(".dg-container ul li").length;

  //$('.dg-container ul li:eq(0)').removeClass("first")
  $('.dg-container ul li:eq(0)').removeClass("two");
  $('.dg-container ul li:eq(1)').removeClass("three");
  $('.dg-container ul li:eq(2)').removeClass("active");
  $('.dg-container ul li:eq(3)').removeClass("four");
  $('.dg-container ul li:eq(4)').removeClass("five");


  $('.dg-container ul li:eq(0)').before(message);
  //$('.dg-container ul li:eq(0)').addClass("first")


  setTimeout(function() {
    $('.dg-container ul li:eq(0)').addClass("two")
  }, 100);


  //$('.dg-container ul li:eq(0)').addClass("two")
  $('.dg-container ul li:eq(1)').addClass("three");
  $('.dg-container ul li:eq(2)').addClass("active");
  $('.dg-container ul li:eq(3)').addClass("four");
  $('.dg-container ul li:eq(4)').addClass("five");

  var num = $('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
  setTimeout('$(".review .reviews dd p").eq(' + num + ').addClass("on");', 100);
});

(function() {

  $(".clique").target($("#compare"), 0);

  //asc
  setTimeout('$(".banner .box").addClass("on");', 500);
  //countdown
  countdown((".banner .countdown strong"));
  countdown((".bottombuy .countdown strong"));
  maskTimeCountDown();
  //gifts
  $(".gifts .gifts-message .gifts-box").hover(function() {
    var giftsNum = $(this).index();
    $(this).find("ul").slideDown(300);
    $(this).find(".arrow").hide();
    $(this).siblings().find("ul").slideUp(300, function() {
      $(this).siblings().find(".arrow").show();
    });
  });
  //gifts fold
  $(document).on("mouseover", function(e) {
    if ($(e.target).closest('.gifts-box').length == 0) {
      $(".gifts .gifts-message .gifts-box").find("ul").slideUp(300).end().find(".arrow").show();
    }
  });
}());