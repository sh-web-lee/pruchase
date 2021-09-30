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
  var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .scroll-tick").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".banner .scroll-tick").eq(a).animate({
      marginTop: -(9 - curNum) * 50,
    }, "slow");
  }
}

function zoomout() {
  $(".banner .pop").addClass("zoomout");
  setTimeout(function() {
    $(".banner .pop").removeClass("zoomout");
  }, 1200);
}

function rightBox() {
  $(".footbuy li").eq(2).addClass("sold").removeClass("active");
  $(".footbuy li").eq(1).addClass("active");
  $(".banner .box.center").removeClass("active").addClass("sold");
  $(".banner .box.center").find(".inner").remove();
  $(".banner .box.center").append('<div class="mask"></div>');
  $(".banner .box.right").addClass("active");
  $(".banner .box.right").find("img").attr("src", imgSrc);
  $(".centbuy").addClass("sold");
  $(".centbuy").find("img").attr("src", midimgSrc);
  $(".centbuy").find(".buybtn").attr("href", "javascript: void(0);");
  $(".centbuy .wrapper").append('<div class="mask"></div>');
}

$(function() {
  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(window).scrollWindow($(".cause"), $('.intro .list'), ("active"));
  if ($(document).scrollTop() > $(".intro").offset().top - 300) {
    $(".intro .list").addClass("active");
  }

  $(".footbuy li").on("click", function() {
    var index = $(this).index();
    var num = $(".banner .box").eq(index).attr("data-num");
    $(this).addClass("active").siblings().removeClass("active");
    switch (index) {
      case 0:
        $(".footbuy .imgbox").addClass("pc").removeClass("pcsd").removeClass("pcs");
        break;
      case 1:
        $(".footbuy .imgbox").addClass("pcs").removeClass("pcsd").removeClass("pc");
        break;
      case 2:
        $(".footbuy .imgbox").addClass("pcsd").removeClass("pc").removeClass("pcs");
        break;
      default:
    }
    var discount = $(".banner .box").eq(num).find(".discount").text();
    var original = $(".banner .box").eq(num).find(".original").text();
    var btnHref = $(".banner .box").eq(num).find(".buybtn").attr("href");
    var btnGa = $(".banner .box").eq(num).find(".buybtn").attr("onclick");
    $(".footbuy .price").find(".discount").text(discount);
    $(".footbuy .price").find(".original").text(original);
    $(".footbuy .price").find(".buybtn").attr("href", btnHref);
    $(".footbuy .price").find(".buybtn").attr("onclick", btnGa);
  });
  viewCheck();
  packsInit();
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
  getSalesNum(packs);
  flipNum(packs, 2);
  zoomout();
  if (packs == 0) {
    if (!$('.centbuy').hasClass('sold')) {
      //rightBox();
    }
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
  if(pageView){
    reTime=10;
  }else {
    if (packs > 68) {
      reTime = 6.2;
    } else {
      reTime = 9;
    }
  }
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "marpromodeb.php",
    data: "action=getPacks&d=" + date.getDate() + '&pageView=' + (pageView ? 1 : 0),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if (packs == 0) {
          if (!$('.centbuy').hasClass('sold')) {
            //rightBox();
          }
        }
        flipNum(packs, 2);
        getSalesNum(packs);
        zoomout();
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