$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$(window).on('scroll', function() {
  if ($(window).scrollTop() > $(".gift-box .buybtn").offset().top) {
    $('.reviews dl').addClass("on");
  } else {
    $('.reviews dl').removeClass("on");
  }
});
$(function() {
  //goto comparison-table
  $("a.intro").target($(".comparison-table"));
  //review
});

// progressbar
function focus() {
  $('.progressbar > span').append('<span class="reduce"></span>');
  setTimeout(function() {
    $('.progressbar .reduce').addClass("zoomout")
  }, 100);
  if (packs < 90) {
    $(".db-reduce").css({
      "opacity": 1,
      "bottom": 0,
      "zIndex": 8
    }).animate({
      "opacity": 0,
      "bottom": 40,
      "zIndex": -9
    }, 1500);
  } else {
    $(".db-reduce").css({
      "opacity": 1,
      "bottom": 0,
      "zIndex": 8
    }).animate({
      "opacity": 0,
      "bottom": 40,
      "zIndex": -9
    }, 400);
  }
}

function flipNum(num) {
  var number = num * 0.86;
  $(".progressbar > span").css("width", number);
  setTimeout(function() {
    focus();
  }, 500);
}

function getPacksNum() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "decny.php",
    data: "action=getPacks&d=" + date.getDate() + "&r=" + Math.random(),
    success: function(res) {
      var packsInfo = JSON.parse(res);
      if (packs != packsInfo['packsNum']) {
        packs = packsInfo['packsNum'];
        showPacksNum(packs);
        flipNum(packs);
        getSalesNum(packs);
      }
      var viewNum = packsInfo['viewNum'];
      $('.packsNum').html(packs);
      if (packs < 89) {
        $('.viewNum').html(viewNum);
      }
    }
  });
  if (packs > 96) {
    setTimeout('getPacksNum()', 500);
  } else {
    setTimeout('getPacksNum()', 12000);
  }
}

$(function() {
  packsInit();
});

function showPacksNum(packs) {
  var one = Math.floor(packs / 100);
  var two = Math.floor(packs / 10) - one * 10;
  var three = Math.floor(packs) - one * 100 - two * 10;
  $("p.surplus b").eq(0).html(one).end().eq(1).html(two).end().eq(2).html(three);
}

function packsInit() {
  var date = new Date();
  var cName = "itsdoct" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 98;
  } else {
    packs = arr[2];
  }
  showPacksNum(packs);
  getSalesNum(packs);
  var number = packs * 0.86;
  $(".progressbar > span").css("width", number);
  if (packs > 96) {
    setTimeout('getPacksNum()', 500);
  } else {
    setTimeout('getPacksNum()', 12000);
  }
}

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2018-11-13')) / (3600 * 24 * 1000));
  var buyNum = 626078 + daysDiff * 98 + (98 - packsNow);
  $('.buyNum').html(commafy(buyNum));
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