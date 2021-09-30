function numberJump(e, t, o, n) {
	e.prop("number", o).animateNumber({
		number: t
	},
	n)
}
function PrefixInteger(e, t) {
	return (Array(t).join("0") + e).slice( - t)
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
function reduceNum(e, t) {
	$(".progressbar span").append('<em class="reduce"></em>');
	var o = 2.31 * e;
	$(".progressbar span").css("width", o),
	setTimeout('$(".progressbar .reduce").addClass("zoomout");', 100),
	setTimeout('$(".progressbar .reduce").remove();', 1500),
	1 == t && setTimeout(function() {
		flipNum(e, 3)
	},
	800)
}
function maskShow() {
	$(".mask").remove(),
	$(".mask-box").remove();
	$.getUrlParam("aff");
	$("body").append('<div class="mask"></div><div class="mask-box"><h2>A Christmas Surprice</h2><div class="clearfix"><div class="fl left"><img src="' + imgSrc + '" alt="IObit Software Updater"/></div><div class="price fl"><h3>Extra <b>$ <big>1</big> OFF</b> for you exclusively!</h3><p><strong>Only $<big>8</big>.99</strong> <b>1 year / 3 PCs</b></p><a class="buybtn" href="' + _href + '" onclick="' + _ga + '"><i class="all-icons"></i><span>Activate Now</span></a><p class="year">Seize your last chance for the biggest saving ever!</p></div></div></div>'),
	$(".mask").addClass("started"),
	$(".mask-box").addClass("slipUp"),
	$(".mask").hasClass("started") && $(".mask-box .close").on("click",
	function() {
		$(".mask").remove(),
		$(".mask-box").remove()
	})
}
function cSet(e, t) {
	var o = new Date;
	o.setTime(o.getTime() + 1728e5),
	document.cookie = e + "=" + escape(t) + ";expires=" + o.toGMTString()
}
function timeInit() {
	var e = new Date,
	t = "ascpreisuxr" + e.getDate(),
	o = document.cookie.match(new RegExp("(^| )" + t + "=([^;]*)(;|$)")),
	n = Math.floor(e.getTime() / 1e3);
	null == o ? (countTime = n + 300, cSet(t, countTime)) : countTime = parseInt(o[2])
}
function timeCountDown(e) {
	var t = new Date,
	o = e - t.getTime().toString().substring(0, 10);
	if (o > 0) {
		var n = Math.floor(o / 86400),
		a = Math.floor(o / 3600 % 24),
		s = Math.floor(o / 60 % 60),
		i = Math.floor(o % 60),
		r = 999 - t.getMilliseconds();
		return r < 10 ? r = "00" + r: r < 100 && (r = "0" + r),
		[n, a, s, i, r]
	}
	return [0, 0, 0, 0, 0]
}
$.fn.scrollWindow = function(e, t, o) {
	$(window).on("scroll",
	function() {
		$(window).scrollTop() > e.offset().top ? t.addClass(o) : t.removeClass(o)
	})
},
$.fn.target = function(e, t) {
	$(this).click(function() {
		t || (t = 0);
		var o = e.offset().top - t;
		$("html, body").animate({
			scrollTop: o
		},
		"slow")
	})
},
jQuery.getUrlParam = function(e) {
	var t = new RegExp("(^|&)" + e + "=([^&]*)(&|$)"),
	o = window.location.search.substr(1).match(t);
	return null != o ? unescape(o[2]) : ""
},
$(function() {
	$("#dg-container").gallery(),
	$(window).scrollWindow($(".banner .buybtn"), $(".backtotop"), "on"),
	$(window).on("scroll",
	function() {
		var e = $(window).scrollTop();
		e >= $(".review").offset().top ? ($(".bottom").addClass("on")) : ($(".footbuy").removeClass("on"), $(".bottom").removeClass("on"))
	})
});
var countdown = function(e, t) {
	statusSet(),
	1 == t && getCycleCountdown(countTime),
	$(e).each(function() {
		$(this).find("b").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi)
	}),
	setTimeout("countdown('" + e + "'," + t + ")", 1)
};
function getCycleCountdown(e) {
	var t = timeCountDown(e);
	d = MApp(2.2).packages.zeroize(t[0], 2),
	h = MApp(2.2).packages.zeroize(t[1], 2),
	i = MApp(2.2).packages.zeroize(t[2], 2),
	s = MApp(2.2).packages.zeroize(t[3], 2),
	mi = MApp(2.2).packages.zeroize(t[4], 3).substr(0, 2)
}
function packsInit() {
	var e = new Date,
	t = (e.getDate(), Math.floor(e.getTime() / 1e3)),
	o = countTime - t;
	packs = Math.ceil(o / 5.9) > 0 ? Math.ceil(o / 5.9) : 0,
	reduceNum(packs, 1),
	$(".progressbar span").css("transition", ".5s linear")
}
function getSales() {
	var e = new Date,
	t = Math.floor(e.getTime() / 1e3),
	o = countTime - t,
	n = Math.ceil(o / 5.9) > 0 ? Math.ceil(o / 5.9) : 0;
	n != packs && (2 == statusCheck() ? packs = 0 : packs = n, reduceNum(packs, 1)),
	2 != statusCheck() && setTimeout("getSales()", 5880)
}
function statusCheck() {
	return (new Date).getTime() / 1e3 < countTime ? 1 : 2
}
function statusSet() {
	2 == statusCheck() && ($(".mask").hasClass("started") || (maskShow(), flipNum(0, 2)))
}
function getViewNum() {
	$.ajax({
		type: "GET",
		url: "xisu.php",
		data: "action=getViewNum",
		success: function(e) {
			$(".viewNum").html(e)
		}
	}),
	setTimeout("getViewNum()", 15e3)
}
$(function() {
	$("#dg-container").gallery(),
	$(window).scrollWindow($(".banner .buybtn"), $(".backtotop"), "on"),
	$("#backtotop").target($(".banner"), 0),
	numberJump($(".viewNum"), viewNum, 500, 1500)
}),
$(function() {
	timeInit(),
	packsInit(),
	countdown(".countdown", 1),
	setTimeout("getSales()", 6e3),
	setTimeout("getViewNum()", 12000)
});

$(window).on('scroll', function() {
  if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
    $('.floatlayer').addClass('on');
  } else {
    $('.floatlayer').removeClass('on');
  }

  if ($(window).scrollTop() > $('.intro').offset().top) {
    $('.intro .imgbox span').addClass("on");
  }

});




