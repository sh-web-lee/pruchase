$.fn.target = function(target, yoffset, event) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({
    scrollTop: Theigth
  }, 'slow');
};

function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

var totalNum;

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".scroll-tick strong").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();

  for (var j = 0; j < arr.length; j++) {
    list += '<strong>' + arr[j] + '</strong>';
  }
  $(".scroll-tick").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".countdown1 .scroll-tick").eq(a).animate({
      marginTop: -curNum * 18,
    }, "slow");
  }
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".countdown2 .scroll-tick").eq(a).animate({
      marginTop: -curNum * 18,
    }, "slow");
  }
}
// flipNum(15, 3);

function soldOut() {
  flipNum(0, 2);
  var aff = MApp(2.2).url.getParameters('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.gift,.floatlayer").addClass("soldout");
  $(".floatlayer .imgbox .number").html('But you can still get PRO version with <strong>65%</strong> OFF ');
  $(".floatlayer .buybtn,.banner .buybtn").attr({
    "href": "https://www.iobit.com/buy.php?product=imf83pc1995&ref=en-imf3pcloyal&aff=" + aff + "&refs=purchase_imf&tw=" + tw,
    "onclick": "ga('send', 'event', 'imf3pcbuy', 'buy', 'imfpurchase-loyal');",
  });
}

function getNumber() {
  num = cGet("loyalimf8");
  if (num == null) {
    num = Math.floor(Math.random() * (88 - 49)) + 49;
  } else {
    num--;
    if (num < 0) num = 0;
  }
  flipNum(num, 2);
  cSet('loyalimf8', num);
  // t1 = (Math.random() > 0.5) ? 5.3 : 7.3;
  // t2 = (Math.random() > 0.5) ? 9.3 : 11.3;
  t1 = (Math.random() > 0.5) ? 5.3 : 7.3;
  t2 = (Math.random() > 0.5) ? 8.3 : 10.3;
  reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
  //console.log(reTime);
  if (num > 0) setTimeout('getNumber()', reTime);
  else {
    flipNum(0, 2);
    soldOut();
  }
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
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
function popbox() {
  $(".pop-bg,.pop-box").addClass("on");
}
$(function() {

  $(".close").click(function() {
    $(".pop-bg,.pop-box").removeClass("on");
  });

  getNumber();

  $(".review .prev").click(function() {
    $(".review ul li").removeClass("active").removeClass("last");
    var message = $('.review ul li:last');
    $('.review ul li:eq(0)').before(message);
    $('.review ul li:last').addClass('last')
    var num = $('.review ul li.last').attr("data-num");
    if(num==3) {
      $('.review h2').removeClass("user");
    }
    else {
      $('.review h2').addClass("user");
    }
    $('.review .message div').eq(num).addClass("active").siblings().removeClass("active");
    setTimeout("$('.review ul li:last').addClass('active')", 200);
  });

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".feature h2").offset().top) {
      $('.feature .left-message,.feature .right-message').addClass('on');
      setTimeout('$(".floatlayer").addClass("on");', 500);
    }
    else {
      $('.floatlayer').removeClass('on');
    }
  });
});