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
  $(".packsNum").html(num);
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var _list = '';
  var len = String(number).length;
  var str = number.toString();
  var _box = $(".flipNum");
  var createobj;
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#flip .list").eq(a).animate({
      marginTop: -curNum * 47,
    }, "slow");
    $("#fliptwo .list").eq(a).animate({
      marginTop: -curNum * 47,
    }, "slow");
  }
}

function reduceNum(num, numRe) {
  $('.progressbar span').append('<em class="reduce"></em>');
  var number = num * 2.31;
  setTimeout('$(".progressbar .reduce").addClass("zoomout");', 100);
  $(".progressbar span").css("width", number);
  setTimeout('$(".progressbar .reduce").remove();', 1500);
  if (numRe == 1) {
    setTimeout(function() {
      flipNum(num, 3);
    }, 800);
  }
}

function maskShow() {
	$(".mask").remove(),
	$(".mask-box").remove();
	$.getUrlParam("aff");
	$(".main").append('<div class="mask"></div><div class="mask-box"><h2>A Christmas Surprice</h2><div class="clearfix"><div class="fl left"><img src="' + imgSrc + '" alt="Advanced SystemCare 14 Pro"/></div><div class="price fl"><h3>Extra <b>$ <big>1</big> OFF</b> for you exclusively!</h3><p><strong>Only $<big>11</big>.97</strong> <b>1 year / 3 PCs</b></p><a class="buybtn" href="' + _href + '" onclick="' + _ga + '"><i class="all-icons"></i><span>Renew Now</span></a><p class="year">Seize your last chance for the biggest saving ever!</p></div></div></div>'),
	$(".mask").addClass("started"),
	$(".mask-box").addClass("slipUp"),
	$(".mask").hasClass("started") && $(".mask-box .close").on("click",
	function() {
		$(".mask").remove(),
		$(".mask-box").remove()
	})
}

function dataHide() {
  if (!$(".feature dl").hasClass("datahide")) {
    $(".feature dl").addClass("datahide");
    $(".feature dl").find("h3").addClass("hide");
  }
}

function dataShow() {
  $(".feature dl").removeClass("datahide");
  $(".feature dl").find("h3").removeClass("hide");
}

$(function() {
  $(".banner").addClass("sold");
  $('#dg-container').gallery();
  $(window).scrollWindow($(".feature"), $('.backtotop'), ("on"));
  $(window).scrollWindow($(".feature .btitle"), $('.floatlayer'), ("on"));
  $("#backtotop").target($(".banner"), 0);

  numberJump($('.viewNum'), viewNum, 500, 1500);

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > 550) {
      $('.feature dl').addClass("on");
    }
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
  var cName = "ascpreascxre" + date.getDate();
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
  var cName = "ascprepa" + date.getDate();

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
    setTimeout('getSales()', 5880);
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
    url: "xrasce.php",
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
  setTimeout('getViewNum()', 12000);
});