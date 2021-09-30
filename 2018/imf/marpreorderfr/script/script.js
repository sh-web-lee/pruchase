//floatlayer
function showFloat(subject, target) {
  var scrollHeight = $(subject).offset().top;
  if ($(window).scrollTop() > scrollHeight) {
    $(target).addClass('on');
  } else {
    $(target).removeClass('on');
  }
}

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
  $(".feature .scroll-tick").html(list);
  $(".banner .scroll-tick").html(list);
  $(".comparison .scroll-tick").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".banner .scroll-tick").eq(a).animate({
      marginTop: -(9-curNum) * 34,
    }, "slow");
    $(".feature .scroll-tick").eq(a).animate({
      marginTop: -(9-curNum) * 30,
    }, "slow");
    $(".comparison .scroll-tick").eq(a).animate({
      marginTop: -(9-curNum) * 30,
    }, "slow");
  }
}

function numInit(num, length) {
  var num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  //var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".feature .scroll-tick").html(list);
  $(".banner .scroll-tick").html(list);
  $(".comparison .scroll-tick").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".banner .scroll-tick").eq(a).animate({
      marginTop: -(9-curNum) * 34,
    }, 1200);
    $(".feature .scroll-tick").eq(a).animate({
      marginTop: -(9-curNum) * 30,
    }, 1200);
    $(".comparison .scroll-tick").eq(a).animate({
      marginTop: -(9-curNum) * 30,
    }, 1200);
  }
}

$(document).ready(function() {
  $(window).on('scroll', function() {
    showFloat(".comparison .buybtn:last", "#floatlayer");
  });
  packsInit();
});

function packsInit(){
  var date = new Date();
  var cName = "frimfmarpre" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 56;
  } else {
    packs = arr[2];
  }
  getSalesNum(packs);
  numInit(packs,2);
  timeCheck();
  setTimeout('getSales()', reTime * 1000);
}

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2017-11-17')) / (3600 * 24 * 1000));
  var buyNum = 722925 + daysDiff * 56 + (56 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}

function timeCheck() {
  if (packs > 36) {
    reTime = 3;
  } else {
    reTime = 15;
  }
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "imf6preorder.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function (res) {
      var sales = JSON.parse(res);
      if(sales.packsNum!=packs) {
        packs = sales.packsNum;
        flipNum(packs,2);
        getSalesNum(packs);
        timeCheck();
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