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

function numberJump(target, num, starnumber, time) {
  target.prop('number', starnumber).animateNumber({
    number: num,
  }, time);
}

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
    console.log("arr[j]", arr[j])
  }
  $(".banner .packbox .list").html(list);
  $(".centbuy .packbox .list").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    console.log("curNum", curNum)
    $(".banner .packbox .list").eq(a).animate({
      marginTop: -curNum * 34,
    }, "slow");
    $(".centbuy .packbox .list").eq(a).animate({
      marginTop: -curNum * 34,
    }, "slow");
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
      flipNum(num, 2);
    }, 800);
  }
}

function maskShow() {
  $(".mask").remove();
  $(".mask-box").remove();
  var aff = $.getUrlParam('aff');
  $('.main').append('<div class="mask"></div><div class="mask-box"><h2>'+ soldStr +'</h2><div class="clearfix"><div class="fl left"><img src="' + imgSrc + '" alt="Driver Booster 8 Pro"/></div><div class="price fl"><img src="' + imgOff + '" alt="70% OFF"/><p><strong><big>22</big>,95€</strong> <b><del>€74,85</del></b></p><a class="buybtn" href="' + _href + '" onclick="' + _ga + '"><i class="all-icons"></i><span>Activeer Nu</span></a></div></div></div>');
  $('.mask').addClass('started');
  $(".mask-box").addClass("slipUp");
  if ($(".mask").hasClass("started")) {
    $(".mask-box .close").on("click", function() {
      $(".mask").remove();
      $(".mask-box").remove();
    });
  }
}

$(function() {
  $('#dg-container').gallery();
  $(window).scrollWindow($(".banner .buybtn"), $('.backtotop'), ("on"));
  $("#backtotop").target($(".banner"), 0);
  numberJump($('.viewNum'), viewNum, 500, 1500);

  $(window).on('scroll', function() {
    var winPos = $(window).scrollTop();
    var _topH = $(".footbuy").offset().top;
    var _botH = $(".review").offset().top;
    if (winPos >= _botH) {
      $(".footbuy").addClass("on");
      $(".bottom").addClass("on");
    } else {
      $(".footbuy").removeClass("on");
      $(".bottom").removeClass("on");
    }
  });

  $(window).on('scroll', function() {
    // if ($(window).scrollTop() > $(".feature dl.five").offset().top) {
    //   $(".together .asc-box").removeClass("on").addClass("on");
    //   $(".together .db-box").removeClass("on").addClass("on");
    // }
  });
});

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "ascpdbpre" + date.getDate();
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
  var cName = "dedbfriday" + date.getDate();

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
      maskShow();
      flipNum(0, 2);
    }
  }
}

function getViewNum() {
  $.ajax({
    type: "GET",
    url: "bascpdb.php",
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
});