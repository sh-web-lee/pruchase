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
  $(".packbox .list b").text("");
  var num = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(num).length;
  var str = num.toString();
  var box = $(".packbox");
  for (var j = 0; j < arr.length; j++) {
    list += '<strong>' + arr[j] + '</strong>';
  }
  $(".banner .packbox .list").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".banner .packbox .list").eq(a).animate({
      marginTop: -curNum * 34,
    }, "slow");
  }
}

$(function() {
  flipNum(55, 2);
  $(window).scrollWindow($(".gifts .buybtn"), $('.reviews dl'), ("on"));
  $(window).scrollWindow($(".payments"), $('.float'), ("on"));

  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index() + 1));
    $(".benfits .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .list-icon li").removeClass('active').eq($(this).index() + 1).addClass('active');

  });
  $(".benfits .list-icon li").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if (num == 0) {

      $(".benfits .detail-list dl").removeClass("active");
    } else {
      $(".benfits .detail-list dl").eq($(this).index() - 1).addClass("active").siblings().removeClass("active");
    }
    $(".benfits .list-icon li").removeClass('active');
    $(this).addClass('active');
  });

  $(".bottomcart li").on("click", function() {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".bottomcart img").eq(index).addClass("active").siblings().removeClass("active");
    var discount = $(".banner .box").eq(index).find(".discount").text();
    var original = $(".banner .box").eq(index).find(".original").text();
    var btnHref = $(".banner .box").eq(index).find(".buybtn").attr("href");
    var btnGa = $(".banner .box").eq(index).find(".buybtn").attr("onclick");
    $(".bottomcart .price").find(".discount").text(discount);
    $(".bottomcart .price").find(".original").text(original);
    $(".bottomcart .price").find(".buybtn").attr("href", btnHref);
    $(".bottomcart .price").find(".buybtn").attr("onclick", btnGa);
  });
});

function zoomout() {
  $(".popup-font").addClass("zoomout");
  $(".sold-box .img-box").append("<span class='dissolve'></span>");
  setTimeout(function() {
    $(".popup-font").removeClass("zoomout");
    $(".sold-box .img-box .dissolve").remove();
  }, 800);
}

function pack(number) {
  $('.pack,.pop-font').prop('number', 129).animateNumber({
      number: number
    },
    1000
  );
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
      num = num.replace(reg, "$1.$2");
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

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2017-11-17')) / (3600 * 24 * 1000));
  var buyNum = 66078707 + daysDiff * 164 + (164 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}

function packsInit() {
  var date = new Date();
  var cName = "deascxmax" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    if (viewCheck()) {
      packs = 30;
    } else {
      packs = 58;
    }
  } else {
    packs = arr[2];
  }
  if ((packs <= 0) && ($(".banner .three-box").hasClass('active'))) {
    soldout();
  }
  getSalesNum(packs);
  flipNum(packs, 2);
  pack(200 - packs);

  timeCheck();
  setTimeout('getSales()', reTime * 1000);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xmas2018.php",
    data: "action=getPacks&d=" + date.getDate() + "&view=" + viewCheck(),
    success: function(res) {
      var sales = JSON.parse(res);
      $("#floatlayer").removeClass('on');
      setTimeout("$('#floatlayer').addClass('on');", 800);
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if ((packs <= 0) && ($(".banner .three-box").hasClass('active'))) {
          soldout();
        }
        $('.pop-font').html(200 - packs);
        $('.pack').html(200 - packs);
        flipNum(packs, 2);
        zoomout();
        getSalesNum(packs);
        timeCheck();
      }
    }
  });
  setTimeout('getSales()', reTime * 1000);
}

function timeCheck() {
  if (!viewCheck()) {
    if (packs > 36) {
      reTime = 3;
    } else {
      reTime = 13;
    }
  } else {
    reTime = 11;
  }
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function viewCheck() {
  var date = new Date();
  var cName = 'deascxmaxv';
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    cSet(cName, date.getDate());
  } else {
    if (arr[2] != date.getDate()) {
      return 1;
    }
  }
  return 0;
}

$(function() {
  packsInit();
});