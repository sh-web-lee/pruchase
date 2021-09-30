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
  };
})(jQuery);

function numberJump(target, num, starnumber, time) {
  target.prop('number', starnumber).animateNumber({
    number: num,
  }, time);
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length, type) {
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
  $(".floatlayer .packbox .list").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    //if ($(".mask-box").hasClass("sixty")) {
    if (type == 2) {
      $(".mask-box .packbox .list").html(list);
      $(".mask-box .packbox .list").eq(a).animate({
        marginTop: -curNum * 21,
      }, "slow");
    } else {
      $(".banner .packbox .list").eq(a).animate({
        marginTop: -curNum * 34,
      }, "slow");
      $(".floatlayer .packbox .list").eq(a).animate({
        marginTop: -curNum * 34,
      }, "slow");
    }
  }
}

function reduceNum(num, numRe) {
  $('.progressbar span').append('<em class="reduce"></em>');
  var number = num * 2.31;
  $(".progressbar span").css("width", number);
  setTimeout('$(".progressbar .reduce").addClass("zoomout");', 100);
  setTimeout('$(".progressbar .reduce").remove();', 1500);
  if (numRe == 1) {
    setTimeout(function() {
      flipNum(num, 2, 1);
    }, 800);
  }
}

var aff = $.getUrlParam('aff');

function endShow() {
  $(".mask-box").removeClass("sixty");
  $(".mask").remove();
  $('.mask-box').remove();
  $('.main .maskAll').append('<div class="mask"></div>');
  $('.main .mask').append('<div class="mask-box"><h2>OOPS,Flash Sale Has Ended!</h2><div class="clearfix"><div class="fl left"><img src="' + imgSrcTrial + '" alt="Advanced SystemCare 12 Pro"/></div><div class="price fl"><img src="' + imgSrcOff + '" alt="50% OFF"/><p class="discount"><strong>$<big>14</big>.77</strong> <del>$29.99</del></p><a class="buybtn" href="' + _hrefEnd + '" onclick="' + _gaEnd + '"><i class="all-icons"></i><span>Activate Now</span></a><p class="year"> 1 Year Subscription / 3 PCs</p></div></div></div>');
  setTimeout('$(".mask-box").addClass("slipUp");', 300);
}

function trialShow() {
  $(".mask-box").removeClass("sixty");
  $(".mask").remove();
  $('.mask-box').remove();
  $('.main .maskAll').append('<div class="mask"></div>');
  // $(".mask-box").addClass("sixty");
  $('.main .mask').append('<div class="mask-box sixty"><h2>BLACK FRIDAY SURPRISE</h2><div class="panel clearfix"><div class="left fl"><img src="' + imgSrcTrial + '" alt=""/></div><div class="right fl"><h3>Try PRO Edition for 30 Days for <b>FREE</b>!</h3><p class="watching">Hurry, this deal ends in<b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b> s</p><ul><li><i class="all-icons">√</i> <b>Quick</b> uninstall of stubborn programs</li><li><i class="all-icons">√</i> <b>Monitor</b> bundled items install </li><li><i class="all-icons">√</i> <b>Auto</b> clean software leftovers</li><li><i class="all-icons">√</i> <b>Identify</b> malicious plug-ins</li></ul><a class="buybtn" href="' + _hrefTrial + '" onclick="' + _gaTrial + '">GET MY FREE TRIAL</a><div class="pay"><span>Pay $0 at Checkout</span><i class="all-icons"><b>You will not be billed during the 30 days. If you have not cancelled, your credit card or PayPal account will be charged $14.77 for 1 year subscription at the end of the 30-day free trial period. And you can cancel at anytime during 30 days.</b></i></div></div></div><div class="close"></div></div><div class="light"></div>');
  $('.mask').addClass('started');
  setTimeout('$(".mask-box, .light").addClass("slipUp");', 300);
  if ($(".mask").hasClass("started")) {
    $(".mask-box .close").on("click", function() {
      $(".mask").remove();
      $(".mask-box").remove();
    });
  }
  trialCount();
}

function trialCount() {
  var cName = 'enbiu_t' + new Date().getDate();
  var showSeconds = cGet(cName);
  if (showSeconds == null) {
    showSeconds = 60
  }
  flipNum(showSeconds, 2, 2);
  cSet(cName, showSeconds - 1);
  if (showSeconds > 0) {
    setTimeout('trialCount()', 1000);
  } else {
    $(".mask").remove();
    $(".mask-box").remove();
  }
}

function boxShow() {
  $('.main').append('<div class="mask-box sixty"><img src="' + imgSrcOff + '" alt="50% OFF"/><img src="' + imgSrcTrial + '" alt="50% OFF"/><img src="' + imgSrcOff + '" alt="50% OFF"/></div>');
}

$(function() {
  $('#dg-container').gallery();
  $("#backtotop").target($(".banner"), 0);
  $(window).scrollWindow($(".comparison h2"), $('.backtotop'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  numberJump($('.viewNum'), viewNum, 500, 1500);
  setTimeout('boxShow()', 8000);
});

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function timeInit() {
  var date = new Date();
  var cName = "dbpre" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 300;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
}

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    var d = Math.floor(remainingTime / (24 * 60 * 60));
    var h = Math.floor(remainingTime / (60 * 60) % 24);
    var i = Math.floor(remainingTime / 60 % 60);
    var s = Math.floor(remainingTime % 60);
    var mi = 999 - dateObj.getMilliseconds();
    if (mi < 10) {
      mi = '00' + mi;
    } else if (mi < 100) {
      mi = '0' + mi;
    }
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}

var countdown = function(countdown, tType) {
  statusSet();
  if (tType == 1) {
    getCycleCountdown(countTime);
  }
  $(countdown).each(function() {
    $(this).find('b').eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  });
  setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
};

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

function packsInit() {
  var date = new Date();
  var cName = "dbprepa" + date.getDate();

  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = countTime - nowTime;
  packs = Math.ceil(timeDiff / 5.9) > 0 ? Math.ceil(timeDiff / 5.9) : 0;
  reduceNum(packs, 1);

  $('.progressbar span').css('transition', '.5s linear');
}

function getSales() {
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = countTime - nowTime;
  var packsNow = Math.ceil(timeDiff / 5.9) > 0 ? Math.ceil(timeDiff / 5.9) : 0;
  if (packsNow != packs) {
    if (statusCheck() == 2) {
      packs = 0;
    } else {
      packs = packsNow;
    }
    reduceNum(packs, 1);
    // focus(packs);
  }
  if (statusCheck() != 2) {
    setTimeout('getSales()', 6000);
  }
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < countTime) {
    return 1;
  } else {
    return 2;
  }
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$('.mask').hasClass('started')) {
      var cName = 'enbiu_t' + new Date().getDate();
      var showSeconds = cGet(cName);
      if (showSeconds > 0) {
        trialShow();
      } else {
        if (!$(".mask-box").hasClass('slipUp')) {
          endShow();
        }
      }
      flipNum(0, 2, 1);
    }
  }
}

function getViewNum() {
  $.ajax({
    type: "GET",
    url: "biu.php",
    data: "action=getViewNum",
    success: function(res) {
      $('.viewNum').html(res);
    }
  });
  setTimeout('getViewNum()', 15000);
}

$(function() {
  timeInit();
  packsInit();
  countdown((".countdown"), 1);
  setTimeout('getSales()', 6000);
  setTimeout('getViewNum()', 15000);
  if ($(".banner").hasClass("sold")) {
    window.setTimeout(function() {
      $(".banner .balloon").addClass("on");
    }, 1000);
  }
  //trialShow(55, 2);

  var cName = 'enbiu_t' + new Date().getDate();
  var showSeconds = cGet(cName);
  if (showSeconds == null) {
    //$(document).bind('mousemove', mouseOut);
  } else if (showSeconds > 0) {
    if (!$('.mask').hasClass('started')) {
      trialShow();
    }
  }
});

window.onload = function() {
  var cName = 'enbiu_t' + new Date().getDate();
  var showSeconds = cGet(cName);
  if (showSeconds == null) {
    $(document).bind('mousemove', mouseOut);
  }
};

function mouseOut(e) {
  if (e.clientY < 3) {
    if (!$('.mask').hasClass('started')) {
      trialShow();
    }
    $(document).unbind('mousemove', mouseOut);
  }
}