$.fn.target = function(target, yoffset) {
	$(this).click(function() {
		if (!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({
			scrollTop: Theigth
		}, 'slow');
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

var _href = [
	'https://www.iobit.com/buy.php?product=it-asc11iu3pc1799&ref=it_asc113pciu1799purchase1806&refs=it_purchase_asc',
	'https://www.iobit.com/buy.php?product=it-asc111pc2999&ref=it_asc111pc2999purchase1806&refs=it_purchase_asc'
];
var _ga = [
	"ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiu1806-it')",
	"ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1806-it')"
];
var _original = ['79,98', '109,97'];

function maskShow() {
	$(".center.active").append('<div class="esaurito"><img src="' + esaurito + '" alt=""/></div>');
	$(".banner .center.active .buybtn").addClass("sold");
	$(".banner .esaurito").find("img").addClass("zoomout");
}

function soldOn() {
	$(".banner .center").addClass("active").removeClass("sold");
	$(".banner .left").addClass("active").addClass("sold");
	$(".banner .center").find(".countbox").remove();
	$(".banner .left").find(".countbox").html('<h2 class="countdown">Mancano: <b>55</b> ore <b>55</b> min <b>55</b> sec<b class="last">55</b>ms *</h2>');
	$(".banner .center .buybtn").find("i").remove();
	$(".banner .left .buybtn").prepend('<i class="all-icons"></i>');
	setTimeout(maskShow, 600);
	$(".gifts").find(".buybtn").attr({
		href: _href[0],
		onclick: _ga[0]
	});
	$(".gifts .last").addClass("exceed");
}

function packShow() {
	$(".banner .left").find(".countbox").html('<h2 class="packbox">Solo <span class="num"><span class="pack packsNum">25</span><span class="popup-font packsNum">25</span></span> pezzi rimasti oggi</h2>');
	$(".popup-font").addClass("zoomin");
	setTimeout(function() {
		$(".banner .sold.active").find(".imgbox").append('<div class="dissolve"></div>');
	}, 400);
	setTimeout(function() {
		$(".popup-font").removeClass("zoomin");
		$(".banner .sold.active .dissolve").remove();
	}, 1000);
}

$(function() {
	$(".textlink").target($(".compare"), 0);
	$(window).scrollWindow($(".payments"), $('.float'), ("on"));
	$(window).scrollWindow($(".gifts .lists"), $('.reviews dl'), ("on"));
	$(".benfits .detail-list dl").hover(function() {
		$(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index() + 1));
		$(".benfits .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
	});
	$(".float .close").on("click", function() {
		$('.float').remove();
	});

	$(".cartarea .selection li").mouseover(function(event) {
		var num = $(this).index();
		$(this).addClass('active').siblings().removeClass("active");
		switch (num) {
			case 0:
				$(".showcase .img").removeClass("one-pc");
				$(".btnarea .original").removeClass("_hide");
				$(".btnarea dt span").removeClass("_hide");
				$(".btnarea .discount").find("b").text("17");
				$(".btnarea .original").text("79,98");
				$(".btnarea dt span").find("b").text("61,99");
				$(".btnarea").find(".buybtn").attr({
					href: _href[0],
					onclick: _ga[0]
				});
				break;
			case 1:
				$(".showcase .img").addClass("one-pc");
				$(".btnarea .discount").find("b").text("29");
				$(".btnarea .original").addClass("_hide");
				$(".btnarea dt span").addClass("_hide");
				$(".btnarea").find(".buybtn").attr({
					href: _href[1],
					onclick: _ga[1]
				});
				break;
			default:
		}
	});
});

function timeCountDown(startTimestamp) {
	var dateObj = new Date();
	var time = dateObj.getTime().toString().substring(0, 10);
	var remainingTime = 0;
	remainingTime = startTimestamp - time;
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

var countdown = function() {
	var statusNow = statusSet();
	getCycleCountdown();
	if (statusNow == 1) {
		getCycleCountdown(count1);
	} else if (statusNow == 2) {
		getCycleCountdown(count2);
	}
	$('.countdown b').eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
	if (statusNow != 3) {
		setTimeout("countdown(" + statusNow + ")", 1);
	}
};

function getCycleCountdown(endTime, ctype) {
	var datetime = timeCountDown(endTime, ctype);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

function statusCheck() {
	var date = new Date();
	var timeNow = date.getTime() / 1000;
	if (timeNow < count1) {
		return 1;
	} else if (timeNow < count2) {
		return 2;
	} else {
		return 3;
	}
}

function statusSet() {
	var statusNow = statusCheck();
	if (statusNow == 2) {
		if (!$(".banner .left").hasClass('active')) {
			soldOn();
		}
	} else if (statusNow == 3) {
		if (!$(".banner .left").hasClass('active')) {
			soldOn();
		}
		packShow();
		packsInit();
	}
	return statusNow;
}

function timeInit() {
	var date = new Date();
	var cName = "itascjune_e" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime = Math.floor(date.getTime() / 1000);
	if (arr == null) {
		count1 = nowTime + 5;
		count2 = nowTime + 605;
		cSet(cName, count1 + '.' + count2);
	} else {
		var packsArr = arr[2].split('.');
		count1 = parseInt(packsArr[0]);
		count2 = parseInt(packsArr[1]);
	}
}

function cSet(cName, cVal) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
	document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function packsInit() {
	var date = new Date();
	var cName = "itascjune_p" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		packs = 29;
	} else {
		packs = arr[2];
	}
	$('.packsNum').html(packs);
}

function getSales() {
	var statusNow = statusCheck();
	$.ajax({
		type: "GET",
		url: "Junesale2018.php",
		data: "action=getPack&statusNow=" + statusNow,
		success: function(res) {
			var sales = JSON.parse(res);
			var scrollHeight = $(".banner").offset().top;
			if ($(window).scrollTop() > scrollHeight) {
				$(".float").removeClass('on');
				setTimeout("$('.float').addClass('on');", 800);
			}
			$("#first").html(sales.firstName);
			$("#last").html(sales.lastName);
			$(".packsNum").html(sales.packsNum);
			$('.buyNum').html(sales.buyNum);
			$(".popup-font").addClass("zoomin");
			setTimeout(function() {
				$(".banner .sold.active").find(".imgbox").append('<div class="dissolve"></div>');
			}, 400);
			setTimeout(function() {
				$(".popup-font").removeClass("zoomin");
				$(".banner .sold.active .dissolve").remove();
			}, 1000);
			setTimeout('getSales(0)', ((sales.packsNum > 27) && (statusNow == 3)) ? 3000 : 15000);
		}
	})
}

$(document).ready(function() {
	timeInit();
	countdown();
	getSales();
});