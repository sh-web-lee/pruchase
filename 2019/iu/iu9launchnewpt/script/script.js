$.fn.target = function(target) {
  $(this).click(function() {
    var Theigth = target.offset().top;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};
$(".intro a").target($("#compare"));

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(num).length;
  var str = num.toString();
  var box = $(".numbox");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<div class="list"></div>'));
    } else {
      createobj = $('<div class="list"></div>');
    }
  }
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".numbox .list").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".numbox .list").eq(a).animate({
      marginTop: -curNum * 44,
    }, "slow");
  }
}

function zoomout() {
  $(".banner .center .imgbox").append("<span class='dissolve'></span><span class='numreduce'></span>");
  setTimeout(function() {
    $(".banner .imgbox .dissolve").remove();
    $(".banner .imgbox .numreduce").remove();
  }, 1200);
}

$(function() {
  packsInit();
  var _discount = ['55', '64', '59'];
  var _imgcss = ['imgbox six', 'imgbox eight', 'imgbox seven'];
  $(".footbuy li").on("click", function() {
    var index = $(this).index();
    var dataName = $(this).attr("data-num");
    var dataUrl = $(".banner .box").eq(dataName).find(".buybtn").attr("href");
    var original = $(".banner .box").eq(dataName).find(".imgbox del").text();
    var discount = _discount[dataName];

    $(this).addClass("active").siblings().removeClass("active");
    $(".footbuy .imgbox").attr('class', _imgcss[dataName]);
    $(".footbuy .price").find("del").text(original);
    $(".footbuy .price").find("big").text(discount);
    $(".footbuy .buybtn").attr("href", dataUrl);
  });
});

function packsInit() {
  var date = new Date();
  var cName = "ptiuout" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 50;
  } else {
    packs = arr[2];
  }
  getSalesNum(packs);
  flipNum(packs, 2);
  setTimeout('getSales()', 11500);
}

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2017-11-17')) / (3600 * 24 * 1000));
  var buyNum = 7941273 + daysDiff * 56 + (56 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "newinstall.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        flipNum(packs, 2);
        getSalesNum(packs);
        setTimeout('zoomout()', 500);
        //timeCheck();
      }
    }
  });
  setTimeout('getSales()', 11500);
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
      num = num.replace(reg, "R$1,R$2");
    }
  } else {
    var intPart = num.substring(0, index);
    var pointPart = num.substring(index + 1, num.length);
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(intPart)) {
      intPart = intPart.replace(reg, "R$1.R$2");
    }
    num = intPart + "." + pointPart;
  }
  return num;
}

$(function() {
  $('.buy-num').html(strFormat($('.buy-num').html()));
});

function strFormat(str) {
  return str.replace(/,/g, '.');
}