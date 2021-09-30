$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top - 300) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

var review = function (review) {
  $(review).mouseover(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $("span.line").stop().animate({"marginLeft": 98*index}, 200);
    $(".review-message p").eq(index).addClass("active").siblings().removeClass("active");
  });
};
function light() {
  $(".light02").addClass("hide");
  $(".light").removeClass("hide");
  setTimeout(function () {
    $(".light").addClass("hide");
    $(".light01").removeClass("hide");
  }, 500);
  setTimeout(function () {
    $(".light,.light01").addClass("hide");
    $(".light02").removeClass("hide");
  }, 1000);
  setTimeout("light()",1500)
}

$(function () {
  //review
  review((".review ul li"));
  //light
  light();
  //intro
  $(window).scrollWindow($(".intro"), $('.intro dl'), ("on"));
  //float
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  //
  packsInit();

});

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function packsInit() {
  packs = 99;
  getSales(1);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xriue.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
      }
      if (packs > 0) {
        setTimeout('getSales()', getReTime());
      }
    }
  });
}

function getReTime() {
  var reTime = 20;
  var packsNumTotal = cGet('itdbxnovexp_t');
  if (packsNumTotal > 1) {
    if (packs > 32) {
      reTime = (Math.random() > 0.5) ? 0.5 : 2;
    } else {
      reTime = 200 / packsNumTotal;
    }
  }
  return reTime * 1000;
}