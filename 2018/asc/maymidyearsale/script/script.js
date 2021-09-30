$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
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
$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

(function($) {
  $.getUrlParam = function(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]);
    return '';
  }
})(jQuery);

var aff = $.getUrlParam('aff');
var tw = MApp(2.2).datetime.getTimeZone();

function showIndex() {
  $(".banner .offer").addClass("pagerotate").removeClass("pageshow");
  setTimeout('$(".banner .offer").removeClass("pagerotate").addClass("pageshow")', 900);
}

function changeIndex() {
  document.title = 'Save Up to 80% OFF on Advanced SystemCare PRO';
  $(".banner").addClass("special");
  $(".comparison").addClass("specialtab");
  $("body").find("h1").html("SAVE UP TO 80%");
  $(".special").find(".countbox").html('');
  $(".comparison").find(".countbox").html('');
  $(".floatlayer").remove();
  $(".special").find(".subtitle").html("Real-time Protection, Deeper Clean and 300% Faster PC");
  $(".special .offer .left").find(".top").html('<div class="sign">Personal</div><h2>Advanced SystemCare 11 PRO</h2><h5><strong><small>$</small>14.77</strong>/ year</h5><del>$29.99</del><p>1 PC, $14.77 per PC <b>SAVE 50%</b></p>');
  $(".special .offer .right").find(".top").html('<div class="sign">Home</div><h2>Advanced SystemCare 11 PRO</h2><h5><strong><small>$</small>19.99</strong>/ year</h5><del>$89.97</del><p>3 PCs, $6.66 per PC <b>SAVE 80%</b></p>');
  $(".special .offer .left").find(".buybtn").attr("href", 'https://www.iobit.com/buy.php?product=asc111pc1477&ref=asc1pc1477midyeara&aff=' + aff + '&refs=purchase_asc&tw=' + tw);
  $(".special .offer .left").find(".buybtn").attr("onclick", "ga('send', 'event', 'asc1pcbuy', 'buy', 'ascpurchase-201805a');");
  $(".special .offer .right").find(".buybtn").attr("href", 'https://www.iobit.com/buy.php?product=asc113pc1999&ref=asc3pc1999midyeara&aff=' + aff + '&refs=purchase_asc&tw=' + tw);
  $(".special .offer .right").find(".buybtn").attr("onclick", "ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-201805a');");
  $(".specialtab").find(".buybtn").attr("href", 'https://www.iobit.com/buy.php?product=asc113pc1999&ref=asc3pc1999midyeara&aff=' + aff + '&refs=purchase_asc&tw=' + tw);
  $(".specialtab").find(".buybtn").attr("onclick", "ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-201805a');");
  $(".comparison").find(".price").html('<del>$89.97</del> <strong>$19.99</strong>');
}

function changeSpecial() {
  document.title = 'Save Up to 85% OFF on Advanced SystemCare PRO';
  $(".banner").removeClass("special");
  $(".comparison").removeClass("specialtab");
  $("body").find("h1").html("Mid-Year Special Offer");
  $(".subtitle").html("");
  $(".banner").find(".countbox").html('<h4>Ends in:</h4><ul id="banCountdown" class="countdown clearfix"><li><strong>09</strong>m:</li><li><strong>59</strong>s:</li><li class="last"><strong>123</strong>ms</li></ul>');
  $(".comparison").find(".countbox").html('<h4>Offer Ends: </h4><ul id="tabCountdown" class="countdown clearfix"><li><strong>09</strong>m:</li><li><strong>59</strong>s:</li><li class="last"><strong>123</strong>ms</li></ul>');
  $(".floatbox").append('<div class="floatlayer" id="floatCountdown"><h4>Ends in:</h4><ul id="floatCountdown" class="countdown"><li><strong>09</strong>m:</li><li><strong>59</strong>s:</li><li class="last"><strong>123</strong>ms</li></ul></div>');
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $(".banner .offer .left").find(".top").html('<h2>Advanced SystemCare 11 PRO</h2><b class="sign">Personal</b><div class="price"><h4>Special Price</h4><h5><strong><small>$</small>12.97</strong>/ year</h5></div><del>$29.99</del><p>1 PC, $12.97 per PC <b>SAVE 55%</b></p>');
  $(".banner .offer .right").find(".top").html('<h2>Advanced SystemCare 11 PRO</h2><b class="sign">Home</b><div class="price"><h4>Special Price</h4><h5><strong><small>$</small>16.77</strong>/ year</h5></div><del>$89.97</del><p>3 PCs, $5.59 per PC <b>SAVE 85%</b></p>');
  $(".comparison").find(".price").html('<del>$89.97</del> <strong>Special Price <big>$16.77</big></strong>');
  $(".banner .offer .left").find(".buybtn").attr("href", 'https://www.iobit.com/buy.php?product=asc111pc1297&ref=asc1pc1297midyearb&aff=' + aff + '&refs=purchase_asc&tw=' + tw);
  $(".banner .offer .left").find(".buybtn").attr("onclick", "ga('send', 'event', 'asc1pcbuy', 'buy', 'ascpurchase-201805b');");
  $(".banner .offer .right").find(".buybtn").attr("href", 'https://www.iobit.com/buy.php?product=asc113pcs1677&ref=asc3pc1677midyearb&aff=' + aff + '&refs=purchase_asc&tw=' + tw);
  $(".banner .offer .right").find(".buybtn").attr("onclick", "ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-201805b');");
  $(".comparison").find(".buybtn").attr("href", 'https://www.iobit.com/buy.php?product=asc113pcs1677&ref=asc3pc1677midyearb&aff=' + aff + '&refs=purchase_asc&tw=' + tw);
  $(".specialtab").find(".buybtn").attr("onclick", "ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-201805b');");
}

$(function() {
  $("#backtotop").target($(".banner"), 0);
  $(window).scrollWindow($(".banner .buybtn"), $('.backtotop'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $(".review .users li").userMouseover($(".review .content dl"));
  setTimeout(function() {
    $(".offer > div").addClass("active");
  }, 1000);
  timeInit();
});

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function timeInit() {
  var expireTime = cGet('enascmd_e');
  if (expireTime == null) {
    expireTime = Date.parse(new Date()) + 60 * 5 * 1000;
    cSet('enascmd_e', expireTime);
  }
  if ((Date.parse(new Date()) >= expireTime) && (!isExpired())) {
    changeSpecial();
    specialOfferCount();
  } else {
    changeIndex();
  }
  viewCount();
}

function isExpired() {
  var expireTime = cGet('enascmd_s');
  return (expireTime != null) && (Date.parse(new Date()) >= expireTime);
}

function expireTimeCheck() {
  var expireTime = cGet('enascmd_s');
  if (expireTime == null) {
    expireTime = Date.parse(new Date()) + 60 * 10 * 1000;
    cSet('enascmd_s', expireTime);
  }
  if (Date.parse(new Date()) < expireTime) {
    return (expireTime - Date.parse(new Date())) / 1000;
  } else {
    return false;
  }
}

function specialOfferCount() {
  var dateObj = new Date();
  var remainTime = expireTimeCheck();
  if (remainTime > 0) {
    var s = ((remainTime % 60) < 10) ? ('0' + (remainTime % 60)) : (remainTime % 60);
    var m = ('0' + (Math.floor(remainTime / 60))).slice(-2);
    var mi = ('00' + (999 - dateObj.getMilliseconds())).slice(-3);
    $('.countdown').each(function() {
      $(this).find('strong').eq(0).html(m).end().eq(1).html(s).end().eq(2).html(mi);
    });
    setTimeout('specialOfferCount()', 1);
  } else {
    $('.countdown strong').eq(0).html("00").end().eq(1).html("00").eq(2).html("000");
    showIndex();
    changeIndex();
  }
}

function statusGet() {
  var expireTime = cGet('enascmd_s');
  if (expireTime == null) {
    return 1;
  } else if (Date.parse(new Date()) < expireTime) {
    return 2;
  } else {
    return 3;
  }
}

function viewCount() {
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var statusCode = statusGet();
  $.ajax({
    type: 'GET',
    url: 'midyearsale.php',
    data: 'action=viewCount&timezone=' + MApp(2.2).datetime.getTimeZone() + '&localTime=' + nowTime + '&statusCode=' + statusCode
  })
}