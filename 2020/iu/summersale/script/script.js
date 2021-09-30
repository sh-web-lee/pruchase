$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top + yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

function swiperChnage() {
  var sWidth = $(".feature-img").width();
  var len = $(".feature-img ul li").length;
  var index = 0;
  var picTimer;

  $(".feature-list dl").mouseover(function() {
    index = $(".feature-list dl").index(this);
    showPics(index);
  }).eq(0).trigger("mouseover");

  $(".feature-box .prev").click(function() {
    index -= 1;
    if (index == -1) {
      index = len - 1;
    }
    showPics(index);
  });

  $(".feature-box .next").click(function() {
    index += 1;
    if (index == len) {
      index = 0;
    }
    showPics(index);
  });

  $(".feature-img ul").css("width", sWidth * (len));

  function showPics(index) {
    var nowLeft = -index * sWidth;
    $(".feature-img ul").stop(true, false).animate({
      "left": nowLeft
    }, 300);
    $(".feature-list dl").removeClass("on").eq(index).addClass("on");
  }
}

function swiperChangereview() {
  var sWidth = $(".review-box").width();
  var len = $(".review-box ul li").length;
  var index = 0;
  var picTimer;

  $(".review .next").click(function() {
    index += 1;
    if (index == len) {
      index = 0;
    }
    showPicsreview(index);
  });

  $(".review-box ul").css("width", sWidth * (len));

  function showPicsreview(index) {
    // var nowLeft = -index * sWidth;
    var nowLeft = $(".review-box").width();
    $(".review-box ul").stop(true, true).animate({
      "marginLeft": -nowLeft
    }, 'slow', function() {
      $('.review-box ul').css('marginLeft', '0');
      $('.review-box ul').find('li:first').appendTo($('.review-box ul'));
    });
  }
}

function reduceNum(num) {
  $(".packsNum em.reduce").remove();
  $(".packsNum em").text(num);
  $(".packsNum").append('<em class="reduce">' + num + '</em>');
  setTimeout('$(".packsNum em.reduce").addClass("on");', 400);
}
// reduceNum(87);

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.floatlayer").removeClass("sold").addClass("sold");
  $(".gifts,.mask").remove();
  $(".banner .offer.three").append('<div class="mask"><span class="sold-word">SOLD OUT</span></div>');
  setTimeout('$(".sold-word").addClass("on")', 300);
  $(".floatlayer .imgbox").find("img").attr("src", imgSrc);
  $(".floatlayer .packsbox").html('Get <b>50% Off</b> to Activate Now');
  var _original = $(".banner .offer.one .price").find("del").text();
  var _discount = $(".banner .offer.one .price").find("strong").text();
  $(".floatlayer .price").find("strong").text(_discount);
  $(".floatlayer .price").find("del").text(_original);
  $(".buybtn").attr({
    "href": "https://www.iobit.com/buy.php?product=iu9pro1477&ref=en-iu1pcsummersoldout" + refStr + "&aff=" + aff + "&refs=purchase_iu&tw=" + tw,
    "onclick": "ga('send', 'event', 'iu1477soldbuy', 'buy', 'iupurchase-2020summer');",
  });
}
// soldOut();

function getNumber() {
  num = cGet("summersale_iu2020");
  if (num == null) {
    num = Math.floor(Math.random() * (98 - 72)) + 72;
  } else {
    num--;
    if (num < 0) num = 0;
  }
  reduceNum(num);
  cSet('summersale_iu2020', num);
  // t1 = (Math.random() > 0.5) ? 1.3 : 3.3;
  // t2 = (Math.random() > 0.5) ? 5.3 : 7.3;  //5 minutes
  t1 = (Math.random() > 0.5) ? 2.3 : 3.3;
  t2 = (Math.random() > 0.5) ? 13.3 : 15.3; // 12 minutes
  reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
  // console.log(reTime);
  if (num > 0) setTimeout('getNumber()', reTime);
  else {
    reduceNum(0);
    soldOut();
  }
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


$(function() {
  swiperChnage();
  swiperChangereview();
  $(".feature .more").target($("#compare"), 120);

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".feature h2").offset().top) {
      $('.floatlayer').addClass('on');
    } else {
      $('.floatlayer').removeClass('on');
    }
  });

  setTimeout('$(".banner .offer").removeClass("on").addClass("on")', 800);

  getNumber();
});

function packsInit() {
  packs = cGet("eniufeb_p");
  if (packs == null) {
    packs = 79;
    getSales(1);
  } else {
    flipNum(packs, 2);
    if (packs <= 0) {
      soldout();
    } else {
      setTimeout('getSales(0)', 1000);
    }
  }
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "febsale.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        flipNum(sales.packsNum, 2);
        packs = sales.packsNum;
        if (packs <= 0) {
          soldout();
        }
      }
      if (packs > 0) {
        setTimeout('getSales()', getReTime());
      }
    }
  });
}

function getReTime() {
  return reTime = ((Math.random() > 0.5) ? 4.5 : 9.5) * 1000;
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

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}