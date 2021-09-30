//userreview 
function switchover(name, clickname, active, contname) {
  $(name).on(clickname, function() {
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

function reduceNum() {
  $(".reduce").remove();
  $(".banner .giftnum span").text(packs);
  $(".giftbox .giftnum").text(packs);
  $(".banner .reduceNum").append('<span class="reduce"></span>');
  setTimeout('$(".reduce").addClass("on");', 300);
  setTimeout('$(".banner .giftnum .reduce").remove();', 1500);
}

function soldout() {
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".maskbg,.ausbox").remove();
  $(".giftbox").removeClass("sold").addClass("sold");
  $(".offer.center").append('<div class="maskbg"></div><div class="ausbox">AUSVERKAUFT</div>');
  $(".giftbox h2").html("Kerstcadeaus uitverkocht! Gelukkig zitten ze ook in de voordeelbundel");
  $(".giftbox .price h3").html("DB PRO + 2 extra’s voor €28,99");
  $(".giftbox .price .people").remove();
  $(".giftbox .buybtn").html('<i class="all-icons"></i> Nu Kopen');
  $(".giftbox .buybtn").attr("href", "https://www.iobit.com/buy.php?product=nl-db73pciupf2899&ref=nl_db73pciupf2899purchase1911&refs=nl_purchase_db");
  $(".footbuy li.gift").append('<div class="ausbox">AUSVERKAUFT</div>');
  var _href3 = $(".banner .offer.right").find(".buybtn").attr("href");
  var _ga3 = $(".banner .offer.right").find(".buybtn").attr("onclick");
  var _origian3 = $(".banner .offer.right .price").find("del").text();
  var _discount3 = $(".banner .offer.right .price").find("strong").text();
  $(".footbuy li").removeClass("on");
  $(".footbuy .imglist").removeClass("on");
  $(".footbuy li.gift").addClass("sold");
  $(".footbuy li.five").addClass("on");
  $(".footbuy .imglist.five").addClass("on");
  $(".footbuy li.gift").addClass("default");
  $(".footbuy .buybtn").attr({
    "href": _href3,
    "onclick": _ga3
  });
  $(".footbuy .price").find("del").text(_origian3);
  $(".footbuy .price").find("strong").text(_discount3);
  setTimeout(function() {
    $(".ausbox").addClass("zoomout");
  }, 300);
}
// soldout();

$(function() {

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".intro").offset().top - 300) {
      $(".intro .list").addClass("active");
    }
  });

  $(".intro .panel .list").mouseover(function() {
    $(".intro .panel ul").css('marginLeft', -700 * ($(this).index()));
    $(this).addClass('on').siblings().removeClass("on");
  });

  $(".users li").mouseover(function(event) {
    var num = $(this).index();
    $(".users li").eq(num).addClass('current').siblings().removeClass('current');
    $(".review-list >dl").eq(num).addClass('active').siblings().removeClass('active');
  });

  viewCheck();
  packsInit();


  $(".footbuy li").on("click", function() {
    if (!$(this).hasClass("sold")) {
      var index = $(this).index();
      var _num = $(this).attr("data-num");
      $(this).addClass('on').siblings().removeClass("on");
      $(".footbuy .imglist").eq(index).addClass("on").siblings().removeClass("on");
      var _origian = $(".banner .offer").eq(_num).find(".price del").text();
      var _discount = $(".banner .offer").eq(_num).find(".price strong").text();
      var btnHref = $(".banner .offer").eq(_num).find(".buybtn").attr("href");
      var btnGa = $(".banner .offer").eq(_num).find(".buybtn").attr("onclick");
      $(".footbuy .price").find("del").text(_origian);
      $(".footbuy .price").find("strong").text(_discount);
      $(".footbuy .price").find(".buybtn").attr({
        "href": btnHref,
        "onclick": btnGa,
      });
    }
  });

});

function packsInit() {
  var date = new Date();
  var cName = "nldbxmas" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    if (pageView) {
      packs = 30;
      reTime = 10;
    } else {
      packs = 88;
      timeCheck();
    }
  } else {
    packs = arr[2];
    timeCheck();
  }
  reduceNum();
  var packsCount = 300 - packs;
  //flipNum(packsCount, 3);
  $(".banner .people .packsCount").text(packsCount);
  $(".buynum").text(packsCount);
  if (packs == 0) {
    soldout();
  } else {
    //numInit(packs,2);
    setTimeout('getSales()', reTime * 1000);
  }
}

function viewCheck() {
  var date = new Date();
  var dateToday = date.getDate();
  var cName = "nldbxmasv";
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  pageView = (arr != null);
  if ((arr == null) || ((arr != null) && (arr[2] == dateToday))) {
    pageView = false;
    cSet(cName, dateToday);
  } else {
    pageView = true;
  }
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeCheck() {
  if (packs > 58) {
    reTime = 10;
  } else {
    reTime = 6.2;
  }
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xdb.php",
    data: "action=getPacks&d=" + date.getDate() + '&pageView=' + (pageView ? 1 : 0),
    success: function(res) {
      var sales = JSON.parse(res);

      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if (packs == 0) {
          soldout();
        }
        reduceNum();
        var packsCount = 300 - packs;
        $(".banner .people .packsCount").text(packsCount);
        $(".buynum").text(packsCount);
        if (!pageView) {
          timeCheck();
        }
      }
    }
  });
  setTimeout('getSales()', reTime * 1000);
}

function commafy(num) {
  num = num + "";
  num = num.replace(/[ ]/g, "");
  if (num == "") {
    return;
  }
  if (isNaN(num)) {
    return;
  }
  var index = num.indexOf(".");
  if (index == -1) {
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(num)) {
      num = num.replace(reg, "$1,$2");
    }
  } else {
    var intPart = num.substring(0, index);
    var pointPart = num.substring(index + 1, num.length);
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(intPart)) {
      intPart = intPart.replace(reg, "$1.$2");
    }
    num = intPart + "." + pointPart;
  }
  return num;
}