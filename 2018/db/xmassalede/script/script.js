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

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var box = $(".packbox");
  var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
  for (var j = 0; j < arr.length; j++) {
    list += '<b>' + arr[j] + '</b>';
  }
  $(".banner .title .scroll-tick").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".banner .title .scroll-tick").eq(a).animate({
      marginTop: -(9 - curNum) * 50,
    }, "slow");
  }
}

function zoomout() {
  $(".banner .pop").addClass("zoomout");
  setTimeout(function() {
    $(".banner .pop").removeClass("zoomout");
  }, 800);
}

function reduceNum() {
  $(".banner .giftnum").text(packs);
  $('.banner .giftnum').append('<span class="reduce"></span>');
  setTimeout('$(".banner .giftnum .reduce").addClass("rezoom");', 100);
  setTimeout('$(".banner .giftnum .reduce").remove();', 1500);
}

function rightBox() {
  $(".footbuy li").eq(0).addClass("sold").removeClass("active");
  $(".footbuy li").eq(0).find("strong").text("132,94€ sparen");
  $(".footbuy li").eq(1).addClass("active");
  $(".banner .offer.center").removeClass("sold").addClass("sold");
  $(".centbuy").removeClass("sold").addClass("sold");
  $(".banner .offer.center").append('<div class="mask"></div><div class="bounce"></div>');
  $(".centbuy .wrapper").append('<div class="bounce"></div>');
  $(".footbuy li.center").append('<div class="bounce"></div>');
  $(".centbuy dl.sd").find("img").attr("src", sdimgSrc);
  $(".centbuy dl.pf").find("img").attr("src", pfimgSrc);
  $(".centbuy").find(".buybtn").attr("href", "javascript: void(0);");
}

$(function() {
  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(window).scrollWindow($(".cause"), $('.intro .list'), ("active"));
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $("#floatlayer .close").on('click', function(event) {
    $("#floatlayer").hide();
  });
  if ($(document).scrollTop() > $(".intro").offset().top - 300) {
    $(".intro .list").addClass("active");
  }

  $(".intro .panel .list").hover(function() {
    $(".intro .panel ul").css('marginLeft', -700 * ($(this).index()));
    $(this).addClass('on').siblings().removeClass("on");
  });

  $(".footbuy li").on("click", function() {
    var index = $(this).index();
    var num = $(this).attr("data-num");
    if (!$(this).hasClass("sold")) {
      $(this).addClass("active").siblings().removeClass("active");
      $(".footbuy img").eq(index).addClass("active").siblings().removeClass("active");
      var discount = $(".banner .offer").eq(num).find(".discount").text();
      var original = $(".banner .offer").eq(num).find(".original").text();
      var btnHref = $(".banner .offer").eq(num).find(".buybtn").attr("href");
      var btnGa = $(".banner .offer").eq(num).find(".buybtn").attr("onclick");
      $(".footbuy .price").find(".discount").text(discount);
      $(".footbuy .price").find(".original").text(original);
      $(".footbuy .price").find(".buybtn").attr("href", btnHref);
      $(".footbuy .price").find(".buybtn").attr("onclick", btnGa);
    }
  });
  viewCheck();
  packsInit();
  // flipNum(300, 3);
  // rightBox();
});

function packsInit() {
  var date = new Date();
  var cName = "dedbmar" + date.getDate();
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
  //getSalesNum(packs);
  reduceNum();
  var packsCount = 300 - packs;
  //flipNum(packsCount, 3);
  $(".banner .people .packsCount").text(packsCount);
  if (packs == 0) {
    rightBox();
  } else {
    //numInit(packs,2);
    setTimeout('getSales()', reTime * 1000);
  }
}

function viewCheck() {
  var date = new Date();
  var dateToday = date.getDate();
  var cName = "dedbmarv";
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

function getSalesNum(packsNow) {
  var buyNum = 300 - packsNow;
  $('.buynum').html(commafy(buyNum));
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
    url: "xmassalede.php",
    data: "action=getPacks&d=" + date.getDate() + '&pageView=' + (pageView ? 1 : 0),
    success: function(res) {
      var sales = JSON.parse(res);

      if ((reTime > 2)&&($(document).scrollTop() > $(".banner .buybtn").offset().top)) {
        $("#floatlayer").removeClass('on');
        setTimeout("$('#floatlayer').addClass('on');", 800);
      }
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);

      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if (packs == 0) {
          rightBox();
        }
        reduceNum();
        var packsCount = 300 - packs;
        $(".banner .people .packsCount").text(packsCount);
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