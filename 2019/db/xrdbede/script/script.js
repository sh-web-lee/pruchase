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

$(function() {

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".feature").offset().top - 300) {
      $(".feature .list").addClass("active");
    }
  });

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".intro h2").offset().top - 200) {
      $(".intro dl").addClass("on");
    }
  });

  $(".feature .panel .list").mouseover(function() {
    $(".feature .panel ul").css('marginLeft', -700 * ($(this).index()));
    $(this).addClass('on').siblings().removeClass("on");
  });

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
  var cName = "dedbxmas" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    if (pageView) {
      packs = 3;
      reTime = 10;
    } else {
      packs = 49;
      timeCheck();
    }
  } else {
    packs = arr[2];
    timeCheck();
  }
  reduceNum();
  var packsCount = 300 - packs;
  $(".banner .people .packsCount").text(packsCount);
  $(".buynum").text(packsCount);
  if (packs <= 3) {
    packs = 3;
  } else {
    setTimeout('getSales()', reTime * 1000);
  }
}

function viewCheck() {
  var date = new Date();
  var dateToday = date.getDate();
  var cName = "dedbxmasv";
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
  if (packs > 49) {
    reTime = 10;
  } else {
    reTime = 6.2;
  }
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xrdbe.php",
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
        if (packs <= 3) {
          packs = 3;
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