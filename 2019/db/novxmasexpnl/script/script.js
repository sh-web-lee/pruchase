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

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".numbox .listbox").remove();
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
  $(".numbox .list").append(_list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#flip .list").eq(a).animate({
      marginTop: -curNum * 22,
    }, "slow");
  }
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#flipbottom .list").eq(a).animate({
      marginTop: -curNum * 22,
    }, "slow");
  }
}

function reduceNum() {
  $(".reduce").remove();
  $(".banner .giftnum span").text(packs);
  $(".banner .reduceNum").append('<span class="reduce"></span>');
  setTimeout('$(".reduce").addClass("on");', 300);
  setTimeout('$(".banner .giftnum .reduce").remove();', 1500);
}

function soldout() {
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".maskbg,.ausbox").remove();
  $(".offer.center").append('<div class="maskbg"></div><div class="ausbox">AUSVERKAUFT</div>');
  var _href3 = $(".banner .offer.left").find(".buybtn").attr("href");
  var _ga3 = $(".banner .offer.left").find(".buybtn").attr("onclick");
  var _origian3 = $(".banner .offer.left .price").find("del").text();
  var _discount3 = $(".banner .offer.left .price").find("strong").text();
  $(".floatlayer").addClass("soldout");
  $(".floatlayer .center h2").text("Helaas, kerstaanbieding uitverkocht...");
  $(".floatlayer .numbox").html("<p>Kies toch nog voor Driver Booster PRO!</p>");
  $(".floatlayer .price strong").text(_discount3);
  $(".floatlayer .price del").text(_origian3);
  $(".floatlayer .buybtn").attr({"href": _href3, "onclick": _ga3});
  setTimeout(function() {
    $(".ausbox").addClass("zoomout");
  }, 300);
}

$(function() {
  //feature
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".feature").offset().top - 300) {
      $(".feature .list").addClass("active");
    }
  });
  $(".feature .panel .list").mouseover(function() {
    $(".feature .panel ul").css('marginLeft', -700 * ($(this).index()));
    $(this).addClass('on').siblings().removeClass("on");
  });
  //intro
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".intro h2").offset().top - 200) {
      $(".intro dl").addClass("on");
    }
  });
  //user
  $(".users li").mouseover(function(event) {
    var num = $(this).index();
    $(".users li").eq(num).addClass('current').siblings().removeClass('current');
    $(".review-list >dl").eq(num).addClass('active').siblings().removeClass('active');
  });
  //floatlayer
  $(window).scrollWindow($(".banner .buybtn"),$('.floatlayer'),("on"));

  viewCheck();
  packsInit();
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
  flipNum(packs, 2);
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
        flipNum(packs, 2);
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