$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function reviewChange(index) {
  $(".review dl dt img").eq(index).addClass("on").siblings().removeClass("on");
  $(".review dl dd p").eq(index).addClass("on").siblings().removeClass("on");
  $(".review .content > div").eq(index).addClass("on").siblings().removeClass("on");
  $(".review ul.small-person li").eq(index).addClass("on").siblings().removeClass("on");
  $(".review ul.point li").eq(index).addClass("on").siblings().removeClass("on");
}

function reduce() {
  $("span.reduce").addClass("on");
  setTimeout('$("span.reduce").removeClass("on");', 1500);
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

function packsInit() {
  packs = 50;
  getSales(1);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        $(".packsNum").html(packs);
        reduce();
      }
      if (packs > 3) {
        setTimeout('getSales()', getReTime());
      }
    }
  });
}

function getReTime() {
  if (packs >= 40) {
    reTime = 6;
  } else if (packs >= 20) {
    reTime = 20;
  } else {
    reTime = 7;
  }
  return reTime * 1000;
}


$(function() {
  packsInit();
  //banner
  $(".banner .content").addClass("on");
  //review
  var index = 0;
  var review = setInterval(function() {
    if (index < 5) {
      reviewChange(index);
      index++;
    } else {
      index = 0;
      reviewChange(index);
    }
  }, 5000);
  $(".review ul.small-person li").click(function() {
    index = $(this).index();
    reviewChange(index);
  });
  $(".review ul.point li").click(function() {
    index = $(this).index();
    reviewChange(index);
  });
  //float
  $(window).scrollWindow($(".banner .buybtn"), $('.float'), ("on"));
});