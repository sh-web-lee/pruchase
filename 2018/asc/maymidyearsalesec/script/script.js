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

// number
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".packbox .list").remove();
  var num = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(num).length;
  var str = num.toString();
  var box = $(".packbox");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<b class="list"></b>'));
    } else {
      createobj = $('<b class="list"></b>');
    }
    box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    list += '<strong>' + arr[j] + '</strong>';
  }
  $(".packbox .list").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".banner .packbox .list").eq(a).animate({
      marginTop: -curNum * 25,
    }, 1000);
    $(".bottomlayer .packbox .list").eq(a).animate({
      marginTop: -curNum * 25,
    }, 1000);
  }
}

function onPosition(packs, packsBef) {
  var tBar = new TimelineLite();
  tBar.to('.progress .progressbar', 1, {
    width: packs + 'px',
    onComplete: function() {
      reduce((packsBef - packs-1), packs);
    }
  }, '+=1');
}

//reduce
function reduce(num, packs) { // num = 0 or 1 or 2
  var barLeft = packs;
  if(num!=-1) {
    $('.bottomlayer .reducebox').append('<div class="reduce"><div class="ghost"></div><div class="num num' + num + '"></div></div>');
  }
  var tReduce = new TimelineLite();
  tReduce.from('.bottomlayer .reduce .num', 0.5, {
      scale: 0.5,
      autoAlpha: 0
    }).from('.bottomlayer .reduce', 0.5, {
      opacity: 0,
      autoAlpha: 0
    }, '-=0.1')
    .to('.reduce', 1, {
      y: -100,
      autoAlpha: 0,
      onComplete: function() {
        $('.bottomlayer .progress .progressbar').css('width', barLeft);
        $('.bottomlayer .reduce').remove();
      }
    });
}

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
var _href = [
  'https://www.iobit.com/buy.php?product=asc111pc1999&ref=asc1pc1999midyear&aff=' + aff + '&refs=purchase_asc&tw=' + tw,
  'https://www.iobit.com/buy.php?product=asc113pc2198&ref=asc3pc2198midyear&aff=' + aff + '&refs=purchase_asc&tw=' + tw,
  'https://www.iobit.com/buy.php?product=asc111pc1599&ref=asc1pc1599midyear&aff=' + aff + '&refs=purchase_asc&tw=' + tw,
  'https://www.iobit.com/buy.php?product=asc113pcs1677&ref=asc3pc1677midyear&aff=' + aff + '&refs=purchase_asc&tw=' + tw,
  'https://www.iobit.com/buy.php?product=asc11sdiuamc19991pc&ref=ascsdiuamc1999midyear&aff=' + aff + '&refs=purchase_asc&tw=' + tw,
  'https://www.iobit.com/buy.php?product=asc11sdiuamc2198&ref=ascsdiuamc2198midyear&aff=' + aff + '&refs=purchase_asc&tw=' + tw,
  'https://www.iobit.com/buy.php?product=asc11sdiuamc2198&ref=ascsdiuamc2198midyear&aff=' + aff + '&refs=purchase_asc&tw=' + tw,
  'https://www.iobit.com/buy.php?product=asc11sdiuamc2198&ref=ascsdiuamc2198midyearpop&aff=' + aff + '&refs=purchase_asc&tw=' + tw
];
var _ga = [
  "ga('send', 'event', 'asc1pcbuy', 'buy', 'ascpurchase-201805b');",
  "ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-201805b');",
  "ga('send', 'event', 'asc1pcbuy', 'buy', 'ascpurchase-201805c');",
  "ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-201805c');",
  "ga('send', 'event', 'asc1pcbuy', 'buy', 'ascpurchase-201805a');",
  "ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-201805a');",
  "ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-201805a');",
  "ga('send', 'event', 'asc3pcpopbuy', 'buy', 'ascpurchase-201805a');"
];

function showIndex() {
  $(".banner .offer").addClass("pagerotate").removeClass("pageshow");
  setTimeout('$(".banner .offer").removeClass("pagerotate").addClass("pageshow")', 900);
}

function giftHide() {
  $(".giveaway").addClass("pagerotate");
  setTimeout('$(".giveaway").removeClass("pagerotate").addClass("_hide")', 900);
}

function giftShow() {
  $(".giveaway").addClass("pageshow");
  setTimeout('$(".giveaway").removeClass("pageshow").removeClass("_hide")', 900);
}

function changeIndex() {
  giftHide();
  document.title = 'Save Up to 75% OFF on Advanced SystemCare PRO';
  $(".bottomlayer").addClass("_hide");
  $(".banner").removeClass("giftpage");
  $(".banner").addClass("special");
  $(".main").removeClass("giftchange");
  $(".comparison").addClass("specialtab").removeClass("giftab");
  $("body").find("h1").html("SAVE UP TO 75%");
  $(".special").find(".countbox").html('');
  $(".comparison").find(".countbox").html('');
  $(".floatlayer").remove();
  $(".special").find(".subtitle").html("Real-time Protection, Deeper Clean and 300% Faster PC");
  $(".special .offer .left").find(".top").html('<div class="sign">Personal</div><h2>Advanced SystemCare 11 PRO</h2><h5><strong><small>$</small>19.99</strong>/ year</h5><del>$29.99</del><p>1 PC, $19.99 per PC <b>SAVE 35%</b></p>');
  $(".special .offer .right").find(".top").html('<div class="sign">Home</div><h2>Advanced SystemCare 11 PRO</h2><h5><strong><small>$</small>21.98</strong>/ year</h5><del>$89.97</del><p>3 PCs, $7.32 per PC <b>SAVE 75%</b></p>');
  $(".special .offer .left").find(".buybtn").attr("href", _href[0]);
  $(".special .offer .left").find(".buybtn").attr("onclick", _ga[0]);
  $(".special .offer .right").find(".buybtn").attr("href", _href[1]);
  $(".special .offer .right").find(".buybtn").attr("onclick", _ga[1]);
  $(".specialtab").find(".buybtn").attr("href", _href[1]);
  $(".specialtab").find(".buybtn").attr("onclick", _ga[1]);
  $(".comparison").find(".price").html('<del>$89.97</del> <strong>$21.98</strong>');
  $(".awards").find(".imgbox").html('<img src="' + awardspurple + '" alt=""/>');
  $(".service dl.last").find("dt").html('<img src="' + cart + '" alt=""/>');
  $(".annotation").addClass("_hide");
}

function changeSpecial() {
  giftHide();
  document.title = 'Save Up to 85% OFF on Advanced SystemCare PRO';
  $(".bottomlayer").addClass("_hide");
  $(".giveaway").addClass("pagerotate");
  setTimeout('$(".giveaway").removeClass("pagerotate").addClass("_hide")', 900);
  $(".main").removeClass("giftpage");
  $(".banner").removeClass("special").removeClass("giftpage");
  $(".comparison").removeClass("specialtab").removeClass("giftab");
  $("body").find("h1").html("Mid-Year Special Offer");
  $(".subtitle").html("");
  $(".banner").find(".countbox").html('<h4>Ends in:</h4><ul id="banCountdown" class="countdown clearfix"><li><strong>09</strong>m:</li><li><strong>59</strong>s:</li><li class="last"><strong>123</strong>ms</li></ul>');
  $(".comparison").find(".countbox").html('<h4>Offer Ends: </h4><ul id="tabCountdown" class="countdown clearfix"><li><strong>09</strong>m:</li><li><strong>59</strong>s:</li><li class="last"><strong>123</strong>ms</li></ul>');
  $(".floatbox").append('<div class="floatlayer" id="floatCountdown"><h4>Ends in:</h4><ul id="floatCountdown" class="countdown"><li><strong>09</strong>m:</li><li><strong>59</strong>s:</li><li class="last"><strong>123</strong>ms</li></ul></div>');
  $(".banner .offer .left").find(".top").html('<h2>Advanced SystemCare 11 PRO</h2><b class="sign">Personal</b><div class="price"><h4>Special Price</h4><h5><strong><small>$</small>15.99</strong>/ year</h5></div><del>$29.99</del><p>1 PC, $15.99 per PC <b>SAVE 45%</b></p>');
  $(".banner .offer .right").find(".top").html('<h2>Advanced SystemCare 11 PRO</h2><b class="sign">Home</b><div class="price"><h4>Special Price</h4><h5><strong><small>$</small>16.77</strong>/ year</h5></div><del>$89.97</del><p>3 PCs, $5.59 per PC <b>SAVE 85%</b></p>');
  $(".comparison").find(".price").html('<del>$89.97</del> <strong>Special Price <big>$16.77</big></strong>');
  $(".banner .offer .left").find(".buybtn").attr("href", _href[2]);
  $(".banner .offer .left").find(".buybtn").attr("onclick", _ga[2]);
  $(".banner .offer .right").find(".buybtn").attr("href", _href[3]);
  $(".banner .offer .right").find(".buybtn").attr("onclick", _ga[3]);
  $(".comparison").find(".buybtn").attr("href", _href[3]);
  $(".specialtab").find(".buybtn").attr("onclick", _ga[3]);
  $(".awards").find(".imgbox").html('<img src="' + awardspurple + '" alt=""/>');
  $(".service dl.last").find("dt").html('<img src="' + cart + '" alt=""/>');
  $(".annotation").addClass("_hide");
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
}

function changeGift() {
  giftShow();
  document.title = 'Save Up to 75% OFF on Advanced SystemCare PRO';
  $(window).scrollWindow($(".banner .buybtn"), $('.bottomlayer'), ("on"));
  $(".bottomlayer").removeClass("_hide");
  $(".main").removeClass("giftpage");
  $(".main").addClass("giftchange");
  $(".banner").addClass("giftpage");
  $(".banner").removeClass("special");
  $(".comparison").removeClass("specialtab").addClass("giftab");
  $("body").find("h1").html("SAVE UP TO 75% & GET A FREE GIFT PACK");
  $(".banner .subtitle").html('<span>A <a class="free" href="javascript: void(0);">Free Gift Pack<div class="pop"><img src="' + popgift + '" alt=""/><ul><li class="popgift"><i class="all-icons"></i> Smart Defrag PRO</li><li class="popgift"><i class="all-icons"></i> IObit Uninstaller PRO</li><li class="popgift"><i class="all-icons"></i> AMC Security PRO</li></ul></div></a> Limited to First 300 Orders! Hurry, Pack Left:</span><span id="packbox" class="packbox"></span>');
  $(".giftpage .offer .left .top").find("strong").html('<small>$</small>19.99');
  $(".giftpage .offer .right .top").find("strong").html('<small>$</small>21.98');
  $(".giftpage .offer .left .top").find("p").html('1 PC, $19.99 per PC <b>SAVE 35%</b>');
  $(".giftpage .offer .right .top").find("p").html('3 PCs, $7.32 per PC <b>SAVE 75%</b>');
  $(".giftpage .awards").find(".imgbox").html('<img src="' + awardsbalck + '" alt=""/>');
  $(".giftpage .service dl.last").find("dt").html('<img src="' + cartpurple + '" alt=""/>');
  $(".giftchange .comparison").find(".price").html('<del>$89.97</del> <strong>$21.98</strong>');
  $(".banner .offer .left").find(".buybtn").attr("href", _href[4]);
  $(".banner .offer .left").find(".buybtn").attr("onclick", _ga[4]);
  $(".banner .offer .right").find(".buybtn").attr("href", _href[5]);
  $(".banner .offer .right").find(".buybtn").attr("onclick", _ga[5]);
  $(".comparison").find(".buybtn").attr("href", _href[5]);
  $(".comparison").find(".buybtn").attr("onclick", _ga[5]);
  $(".giveaway").find(".buybtn").attr("href", _href[6]);
  $(".giveaway").find(".buybtn").attr("onclick", _ga[6]);
  $(".bottomlayer").find(".buybtn").attr("href", _href[7]);
  $(".bottomlayer").find(".buybtn").attr("onclick", _ga[7]);
  $(".popgift").target($(".giveaway"), 0);
  $(".giveaway").removeClass("pageshow").removeClass("pagerotate");
  $(".giveaway").removeClass("_hide");
  $(".annotation").removeClass("_hide");
}

$(function() {
  viewCheck = 0;
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      if (viewCheck == 0) {
        onPosition(packs, packs);
      }
      viewCheck = 1;
    }
  });
  $("#backtotop").target($(".banner"), 0);
  $(window).scrollWindow($(".banner .buybtn"), $('.backtotop'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $(".review .users li").userMouseover($(".review .content dl"));
  setTimeout(function() {
    $(".offer > div").addClass("active");
  }, 1000);

  packsinit();
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
  var expireTime = cGet('enascmdsec_e');
  if (expireTime == null) {
    expireTime = Date.parse(new Date()) + 60 * 4 * 1000;
    cSet('enascmdsec_e', expireTime);
  }
  if ((Date.parse(new Date()) >= expireTime) && (!isExpired())) {
    changeSpecial();
    specialOfferCount();
  } else {
    if(checkPacks()<=0){
      changeIndex();
    }
  }
}

function isExpired() {
  var expireTime = cGet('enascmdsec_s');
  return (expireTime != null) && (Date.parse(new Date()) >= expireTime);
}

function expireTimeCheck() {
  var expireTime = cGet('enascmdsec_s');
  if (expireTime == null) {
    expireTime = Date.parse(new Date()) + 60 * 10 * 1000;
    cSet('enascmdsec_s', expireTime);
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
  var expireTime = cGet('enascmdsec_s');
  if (expireTime == null) {
    if(checkPacks()>0){
      return 4;
    }else {
      return 1;
    }
  } else if (Date.parse(new Date()) < expireTime) {
    return 2;
  } else {
    return 3;
  }
}

function viewCount(buttonClick) {
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var statusCode = statusGet();
  $.ajax({
    type: 'GET',
    url: 'midyearsalesec.php',
    data: 'action=viewCount&buttonClick='+buttonClick+'&timezone=' + MApp(2.2).datetime.getTimeZone() + '&localTime=' + nowTime + '&statusCode=' + statusCode
  })
}

function packsinit() {
  var date = new Date();
  var timeTo=cGet('enascmdsec_t');
  if(timeTo==null){
    timeTo=Date.parse(new Date()) + 210 * 1000;
    cSet('enascmdsec_t',timeTo);
  }
  var timeDiff=(timeTo-Date.parse(new Date()))/1000;
  packs=Math.ceil(timeDiff/5);

  if (packs > 0) {
    changeIndex();
    changeGift();
    flipNum(packs, 3);
    if (viewCheck == 1) {
      onPosition(packs, packs);
    }
    setTimeout('getSales()', 4 * 1000);
  } else {
    timeInit();
  }
  viewCount(0);
}

function checkPacks(){
  var timeTo=cGet('enascmdsec_t');
  var timeDiff=(timeTo-Date.parse(new Date()))/1000;
  return (Math.ceil(timeDiff/5));
}

function getSales() {
  var date = new Date();
  var timeTo=cGet('enascmdsec_t');
  $.ajax({
    type: "GET",
    url: "midyearsalesec.php",
    data: "action=getPacks&d=" + date.getDate()+"&timeNow="+Date.parse(new Date())+"&timeTo="+timeTo,
    success: function(res) {
      var sales = JSON.parse(res);
      $('.viewNum').html(sales.viewNum);
      if (sales.packsNum != packs) {
        if (viewCheck == 1) {
          onPosition(sales.packsNum, packs);
        }
        packs = sales.packsNum;
        flipNum(packs, 3);
        if ((packs <= 0) && ($(".banner").hasClass('giftpage'))) {
          timeInit();
        }
      }
    }
  });
  setTimeout('getSales()', 4 * 1000);
}

$(document).ready(function() {
  $("a").each(function(){
    if(this.href.indexOf("://www.iobit.com/buy.php") != -1){
      $(this).bind('click',function(){
        viewCount(1);
      })
    }
  });
});