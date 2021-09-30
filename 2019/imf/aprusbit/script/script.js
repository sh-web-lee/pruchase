$(window).on('scroll', function() {
  var scrollHeight = $(".banner .buybtn").offset().top + 50;
  if ($(window).scrollTop() > scrollHeight) {
    $('.float,.float-right').addClass('on');
  } else {
    $('.float,.float-right').removeClass('on');
  }
  if ($(window).scrollTop() > $('.banner .buybtn').offset().top) {
    $('.feature01 .img-box,.feature01 dl').addClass("on");
  }
  if ($(window).scrollTop() > $('.feature01 dl').offset().top) {
    $('.feature02 .img-box,.feature02 dl').addClass("on");
  }
});

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
  $(".banner .countdown .scroll-tick").html(list);
  $(".float .countdown .scroll-tick").html(list);
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".banner .countdown  .scroll-tick").eq(i).animate({
      marginTop: -(9 - curNum) * 22,
    }, "slow");
    $(".float .countdown .scroll-tick").eq(i).animate({
      marginTop: -(9 - curNum) * 22,
    }, "slow");
  }
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
$(function() {
  $(window).scrollWindow($(".award"), $('.review dl'), ("on"));
  packsGet();
});
(function($) {
  $.getUrlParam = function(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]);
    return '';
  }
})(jQuery);

function soldout() {
  $(".banner,.float").addClass("soldout");
  $(".banner .three-pcs p strong,.float dl dt strong").html("€17,99");
  $(".banner .three-pcs p del,.float dl dt del").html("€39,95");
  $(".banner .one-pc p strong").html("€19,99");
  $(".banner .one-pc p del").html("€59,95");
  $(".float h2").html("<strong>55% di sconto</strong> per avere una protezione <br>completa del tuo computer personale");
  $(".number").remove();

  var aff = $.getUrlParam('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  var new1pc = "https://www.iobit.com/buy.php?product=it-imf81pc1799&ref=it_imf1pcusbguardsold" + refStr + "&aff=" + aff + "&refs=it_purchase_imf&tw=" + tw;
  var new1pcStat = "ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1904usb1pcsold-it');";
  $('.buybtn').attr('href', new1pc);
  $('.buybtn').attr('onclick', new1pcStat);
}
// soldout();

function packsGet() {
  var date = new Date();
  var cName = "usbimf" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  packs = (arr == null) ? 99 : arr[2];
  if (packs > 0) {
    flipNum(packs, 2);
    setTimeout('decreasingPacks()', 20000);
  } else {
    soldout();
  }
}

function decreasingPacks() {
  var dateNow = new Date();
  $.ajax({
    type: "GET",
    url: "usb.php",
    data: "action=getPacks&r=" + Math.random() + "&d=" + dateNow.getDate(),
    success: function(sPacks) {
      if (sPacks > 0) {
        flipNum(sPacks, 2);
      } else {
        soldout();
      }
      packs = sPacks;
    }
  });
  if (packs !== 0) {
    setTimeout('decreasingPacks()', 20000);
  }
}