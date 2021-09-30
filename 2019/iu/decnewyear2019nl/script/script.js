$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};

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


function focus() {
  $(".banner-reduce").css({
    "opacity": 1,
    "top": -20,
    "zIndex": 8
  }).animate({
    "opacity": 0,
    "top": -80,
    "zIndex": -9
  }, 1000);
  $(".notes .reduce").css({
    "opacity": 1,
    "top": 7,
    "zIndex": 8
  }).animate({
    "opacity": 0,
    "top": -40,
    "zIndex": -9
  }, 1000);
}

function packsInit() {
  var date = new Date();
  var cName = "nlesiuoct" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 59;
  } else {
    packs = arr[2];
  }
  $('.packsNum').html(packs);

  if (packs > 48) {
    setTimeout('getPacks()', 5000);
  } else if (packs > 24) {
    setTimeout('getPacks()', 20000);
  } else if (packs > 0) {
    setTimeout('getPacks()', 6000);
  }

  getSalesNum(packs);
}

function getPacks() {
  var date = new Date();
  $.ajax({
    type: 'GET',
    url: 'index.php',
    data: 'action=getSales&d=' + date.getDate(),
    success: function(sPacks) {
      if (!isNaN(sPacks)) {
        if (sPacks != packs) {
          packs = sPacks;
          $('.packsNum').html(sPacks);
          focus();
          getSalesNum(packs);
        }
      }
    }
  });
  if (packs > 48) {
    setTimeout('getPacks()', 5000);
  } else if (packs > 24) {
    setTimeout('getPacks()', 20000);
  } else if (packs > 0) {
    setTimeout('getPacks()', 6000);
  }
}

$(function() {
  packsInit();
  $(".users li").userMouseover($(".content dl"));
  setTimeout(function() {
    $(".gift-box").addClass("active");
  }, 100);
  $(".gift-box").target($(".betweenbuy"), 0);
});

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2018-10-26')) / (3600 * 24 * 1000));
  var buyNum = 1319211 + daysDiff * 59 + (59 - packsNow);
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