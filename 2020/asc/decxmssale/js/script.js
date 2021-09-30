$(document).ready(function() {

	//user
	$(".users li").mouseover(function(event) {
		var num = $(this).index();
		$(".users li").eq(num).addClass('current').siblings().removeClass('current');
		$(".review .content > dl").eq(num).addClass('active').siblings().removeClass('active');
	});
	//intro
	$(".info").hover(function() {
		$(".info-message").addClass('active');
	}, function() {
		$(".info-message").removeClass('active');
	});
});

$.fn.target = function(target) {
	$(this).click(function() {
		var Theigth = target.offset().top;
		$("html, body").animate({
			scrollTop: Theigth
		}, 'slow');
	});
};

$(".intro").target($("#compare"));

$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('#floatlayer,.float').addClass('on');
	} else {
		$('#floatlayer,.float').removeClass('on');
	}
});
(function($) {
	$.getUrlParam = function(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return unescape(r[2]);
		return '';
	}
})(jQuery);

function soldOut() {
	var aff = $.getUrlParam('aff');
	var tw = MApp(2.2).datetime.getTimeZone();

	$(".mask,.sold-word,.activate .count-time").remove();

	$(".activate,.floatlayer").removeClass("sold").addClass("sold");

	$(".banner .offer").removeClass("sale");
	$(".banner .offer.left").addClass("sale");

	$(".banner .offer .buybtn").removeClass("empty");
	$(".banner .offer.right .buybtn,.activate .buybtn").addClass("empty");

	$(".banner .offer.right").append('<div class="mask"><span class="sold-word">SOLD OUT</span></div>');
	$(".activate dl").append('<span class="sold-word">SOLD OUT</span>');
	setTimeout('$(".sold-word").addClass("on")', 300);

	$(".activate .buybtn").attr("href", "javascript: void(0);");

	$(".floatlayer .img-box img").attr("src", _imgSrc);
	$(".comparison th strong").html("$19.99");
	$(".banner .buybtn,.activate .buybtn,.comparison .buybtn,.floatlayer .buybtn").attr("href", "https://www.iobit.com/buy.php?product=asc143pc1999&ref=en-asc3pcsoldoutspringb" + refStr + "&aff=" + aff + "&refs=purchase_asc&tw=" + tw).attr("onclick", "ga('send', 'event', 'asc1999soldbuy', 'buy', 'ascpurchase-2020springb');");
}
// soldOut();

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

function cSetPop(name, value) {
	var Days = 2;
	var exp = new Date();
	name = name + exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
	var date = new Date();
	var cName = "enascbstatexmas2020_t" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime = Math.floor(date.getTime() / 1000);
	if (arr == null) {
		countTime = nowTime + 300;
		cSet("enascbstatexmas2020_t", countTime);
	} else {
		countTime = parseInt(arr[2]);
	}

	maskTime = cGet('mask_t');
	if (maskTime == null) {
		maskTime = 60 * 2;
		cSet('mask_t', maskTime);
	}

	if (cGet('enascxmas2020_s') == -1) {
		maskTimeInit();
	} else {
		var maskStatus = cGet('enascxmas2020_s');
		if ((maskStatus != -1) && (maskStatus != -2)) {
			mouseCheck = 0;
			maskTimeCountDown();
		}
	}
}

function maskTimeCountDown() {
	if (maskTime > 0) {
		if (maskTime == 109) {
			$(document).bind('mousemove', mouseOut);
		}
		if (maskTime == 80) {
			$(document).unbind('mousemove', mouseOut)
		}
		maskTime--;
		cSet('mask_t', maskTime);
		setTimeout('maskTimeCountDown()', 1000);
	} else if ((maskTime == 0)) {
		$(document).bind('mousemove', mouseMove);
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

function showPop() {
	$(".pop").fadeIn(500);
}

function showSoldoutPop() {
	$(".pop-container").addClass("soldout");
	$(".pop").fadeIn(500);
}

function closePop() {
	$(".pop").fadeOut(500);
}

function getCycleCountdown(endTime) {
	var datetime = timeCountDown(endTime);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

var countdown = function(countdown) {
	var statusNow = statusSet();
	if (statusNow == 1) {
		getCycleCountdown(countTime);
		$(countdown).eq(0).html(i).end().eq(1).html(s);
		//$('.count-time span').eq(0).html(i).end().eq(1).html(s);
	}
	setTimeout("countdown('" + countdown + "')", 60);
};

function statusSet() {
	var statusNow = statusCheck();
	if (statusNow == 2) {
		if (!$(".activate,.floatlayer").hasClass('sold')) {
			soldOut();
		}
	}
	return statusNow;
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

$(function() {
	timeInit();
	countdown('.date strong', 1);
	countdown('.count-time span', 1);
	setTimeout('getViewNum()', 20000);
});

function getViewNum() {
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getViewNum",
		success: function(viewNum) {
			$('.viewNum').html(viewNum);
			setTimeout('getViewNum()', 20000);
		}
	});
}

function mouseOut(e) {
	if (e.clientY < 3) {
		var cName = 'enascxmas2020_s';
		cSetPop(cName, -1);
		maskTimeInit();
		$(document).unbind('mousemove', mouseOut);
	}
}

function mouseMove(e) {
	var cName = 'enascxmas2020_s';
	cSetPop(cName, -1);
	maskTimeInit();
	$(document).unbind('mousemove', mouseMove);
}

function maskTimeInit() {
	if (cGet('enascxmas2020_s') == -1) {
		var statusNow = statusCheck();
		if (statusNow == 1) {
			showPop();
			popStatistic(1);
		} else {
			showSoldoutPop();
			popStatistic(2);
		}
		var date = new Date();
		var cName = "enascbanni_c";
		var arr = cGet("enascbanni_c");
		var nowTime = Math.floor(date.getTime() / 1000);
		if (arr == null) {
			maskCountTime = nowTime + 60;
			cSetPop(cName, maskCountTime);
		} else {
			maskCountTime = parseInt(arr);
		}
		maskCountdown();
	}
}

var maskCountdown = function() {
	var statusNow = maskStatusSet();
	getCycleCountdown(maskCountTime);
	var popS = Math.floor(s / 10);
	var popG = Math.floor(s - popS * 10);
	$(".pop .countdown .min span").animate({
		"marginTop": popS * (-26)
	}, 500);
	$(".pop .countdown .sec span").animate({
		"marginTop": popG * (-26)
	}, 500);

	if (statusNow == 1) {
		setTimeout("maskCountdown()", 1000);
	}
};

function maskStatusSet() {
	var statusNow = maskStatusCheck();
	if (statusNow == 2) {
		cSetPop('enascxmas2020_s', -2);
		closePop();
	}
	return statusNow;
}

function maskStatusCheck() {
	var date = new Date();
	var timeNow = date.getTime() / 1000;
	if (timeNow < maskCountTime) {
		return 1;
	} else {
		return 2;
	}
}

function popStatistic(type) {
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=popStatistic&type=" + type
	});
}