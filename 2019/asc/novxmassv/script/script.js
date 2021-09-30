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
  $(".banner .reduceNum").append('<span class="reduce"></span>');
  setTimeout('$(".reduce").addClass("on");', 300);
  setTimeout('$(".banner .giftnum .reduce").remove();', 1500);
}

function soldout() {
  $(".maskbg,.ausbox").remove();
  $(".offer.center,.giftbox").append('<div class="maskbg"></div><div class="ausbox">AUSVERKAUFT</div>');
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

  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index() + 1));
    $(".benfits .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .list-icon li").removeClass('active').eq($(this).index() + 1).addClass('active');
  });
  $(".benfits .list-icon li").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if (num === 0) {
      $(".benfits .detail-list dl").removeClass("active");
    } else {
      $(".benfits .detail-list dl").eq($(this).index() - 1).addClass("active").siblings().removeClass("active");
    }
    $(".benfits .list-icon li").removeClass('active');
    $(this).addClass('active');
  });

  $(".textlink").target($("#compare"), 80);

  $(".users li").mouseover(function(event) {
    var num = $(this).index();
    $(".users li").eq(num).addClass('current').siblings().removeClass('current');
    $(".review-list >dl").eq(num).addClass('active').siblings().removeClass('active');
  });

  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $("#floatlayer .close").on('click', function(event) {
    $("#floatlayer").hide();
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
  var cName = "svascxmas" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    if (pageView) {
      packs = 30;
      reTime = 80;
    } else {
      packs = 50;
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
  var cName = "svascxmas";
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
  if (packs > 1) {
    reTime = 8;
  } else {
    reTime = 6.2;
  }
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=getPacks&d=" + date.getDate() + '&pageView=' + (pageView ? 1 : 0),
    success: function(res) {
      var sales = JSON.parse(res);

      if ((reTime > 2) && ($(document).scrollTop() > $(".banner .buybtn").offset().top)) {
        $("#floatlayer").removeClass('on');
        setTimeout("$('#floatlayer').addClass('on');", 800);
      }
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);

      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if (packs == 0) {
          soldout()
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