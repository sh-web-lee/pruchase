(function($) {
  $.fn.isOnScreen = function(x, y) {
    if (x == null || typeof x == 'undefined') x = 1;
    if (y == null || typeof y == 'undefined') y = 1;
    var win = $(window);
    var viewport = {
      top: win.scrollTop(),
      left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var height = this.outerHeight();
    var width = this.outerWidth();
    if (!width || !height) {
      return false;
    }
    var bounds = this.offset();
    bounds.right = bounds.left + width;
    bounds.bottom = bounds.top + height;
    var visible = (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    if (!visible) {
      return false;
    }
    var deltas = {
      top: Math.min(1, (bounds.bottom - viewport.top) / height),
      bottom: Math.min(1, (viewport.bottom - bounds.top) / height),
      left: Math.min(1, (bounds.right - viewport.left) / width),
      right: Math.min(1, (viewport.right - bounds.left) / width)
    };
    return (deltas.left * deltas.right) >= x && (deltas.top * deltas.bottom) >= y;

  };
})(jQuery);

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
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

$(function() {
  $(window).on('scroll', function() {
    if ($('.feature-box').isOnScreen(.2, .2)) {
      $('.feature-box dl').addClass("on");
    }
  });
  $(".feature-box .per ").target($("#compare"), 0);
  $(".footbuy li").on("click", function() {
    var index = $(this).index();
    var dataName = $(this).attr("data-num");
    var dataUrl = $(".banner .box").eq(dataName).find(".buybtn").attr("href");
    var dataGa = $(".banner .box").eq(dataName).find(".buybtn").attr("onclick");
    var original = $(".banner .box").eq(dataName).find(".original").text();
    var current = $(".banner .box").eq(dataName).find(".current").text();
    var currentsm = $(".banner .box").eq(dataName).find(".current-sm").text();

    if (dataName == 1) {
      $(".footbuy .price").removeClass("active");
      $(".footbuy .price").find(".original").text(original);
    } else {
      $(".footbuy .price").addClass("active");
    }
    $(".footbuy .price").find(".current").text(current);
    $(".footbuy .price").find(".current-sm").text(currentsm);
    $(this).addClass("active").siblings().removeClass("active");
    $(".footbuy .imgbox").find("img").eq(index).addClass("active").siblings().removeClass("active");
    $(".footbuy .buybtn").attr("href", dataUrl);
    $(".footbuy .buybtn").attr("onclick", dataGa);
  });

  $(".review dl dt .img-box").mouseover(function(event) {
    $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });

  //$(".giftnum .shadow").addClass("zoomout");

  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $("#floatlayer .close").on('click', function(event) {
    $("#floatlayer").hide();
  });
  packsInit();
});

window.onload = function() {
  getPacks();
};

function packsInit() {
  var date = new Date();
  var cName = "itdban" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 98;
  } else {
    packs = arr[2];
  }

  flipNum(packs);
}

function getPacks(){
  timeCheck();
  setTimeout('getSales()', reTime * 1000);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "annives2018.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (reTime > 2) {
        $("#floatlayer").removeClass('on');
        setTimeout("$('#floatlayer').addClass('on');", 800);
      }
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        flipNum(packs);
        zoomout();
        timeCheck();
      }
    }
  });
  setTimeout('getSales()', reTime * 1000);
}

function timeCheck() {
  if (packs > 97) {
    reTime = 1;
  } else if(packs>94){
    reTime = 3;
  } else if (packs > 88) {
    reTime = 9;
  } else {
    reTime = 18;
  }
}

function zoomout() {
  $(".giftnum .shadow").addClass("zoomout");
  $(".banner .ds-box").append("<span class='dissolve'></span>");
  setTimeout(function() {
    $(".giftnum .shadow").removeClass("zoomout");
    $(".banner .ds-box .dissolve").remove();
  }, 800);
}

function flipNum(packsNum) {
  var firstNum = $('.fisrt');
  var lastNum = $('.last');
  if (packsNum >= 10) {
    firstNum.html(Math.floor(packsNum / 10));
    lastNum.html(packsNum % 10);
  } else {
    firstNum.html(0);
    lastNum.html(packsNum);
  }
}