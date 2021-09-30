$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
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
    "top": -22,
    "zIndex": 8
  }).animate({
    "opacity": 0,
    "top": -80,
    "zIndex": -9
  }, 1000);
}

function closeFloat() {
  $(".float").removeClass("on").hide();
}

function packsInit() {
  var date = new Date();
  var cName = "sviuoct" + date.getDate();
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

  setTimeout('getBuyUser()', 20000);
  getSalesNum(packs);
}

function getPacks() {
  var date = new Date();
  $.ajax({
    type: 'GET',
    url: 'newinstall.php',
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

function getBuyUser() {
  $.ajax({
    type: 'GET',
    url: 'newinstall.php',
    data: 'action=getUser',
    success: function(res) {
      var sales = JSON.parse(res);
      var scrollHeight = $(".banner .buybtn").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $(".float").removeClass('on');
        setTimeout("$('.float').addClass('on');", 800);
      }
      $("#firstName").html(sales.firstName);
      $("#lastName").html(sales.lastName);
    }
  });
  setTimeout('getBuyUser()', 20000);
}

$(function() {
  packsInit();
  $('#dg-container').gallery();
  $(window).scrollWindow($(".banner .buybtn"), $('.feature dl'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"), $('.float'), ("on"));
  setTimeout(function() {
    $(".gift-box").addClass("active");
  }, 100);

  $(".intro").target($(".awards"), 0);
  $(".gift-box").target($(".betweenbuy"), 0);
});

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2018-11-20')) / (3600 * 24 * 1000));
  var buyNum = 3258765 + daysDiff * 59 + (59 - packsNow);
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
      num = num.replace(reg, "$1 $2");
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