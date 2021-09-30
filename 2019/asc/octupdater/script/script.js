$(document).ready(function() {
	$('#dg-container').gallery();
});
$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('.float').addClass('on');
	} else {
		$('.float').removeClass('on');
	}
	if ($(window).scrollTop() > scrollHeight) {
		$('.reason .message-box').addClass("on");
		setTimeout(function() {
			$('.reason .message-box2').addClass("on");
		}, 1000);
	}
	if ($(window).scrollTop() > $('.feature').offset().top) {
		$('.feature .left-message,.feature .img-box').addClass("on");
	}
	if ($(window).scrollTop() > $('.benfits').offset().top - 100) {
		$('.benfits dl').addClass("on");
	}
});

function twinkle() {
	$(".countdown").addClass("twinkle");
	setTimeout(function() {
		$(".countdown").removeClass("twinkle")
	}, 2000);
}
/*getUrlParam*/
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
	$(".banner,.float ").addClass("soldout");
	$(".number p").html("75% OFF Special Offer Has Ended. <p class='zoomout'>75% OFF Special Offer Has Ended.</p>");
	$(".buybtn").not("#fl-buybtn").html("<p>Activate Now & Save 70% <small>Don't Miss Again!</small></p>");
	$(".price strong").html("$<b>21</b>.98");
	$(".price del").text("$89.97");
	$(".gifts-box").hide();
	// soldOut buybtn
	$(".buybtn").not("#fl-buybtn").attr("href", "https://www.iobit.com/buy.php?product=asc153pc2198&ref=en-asc3pc2198soldoutupdater" + refStr + "&aff=" + aff + "&refs=purchase_asc&tw=" + tw);
	$(".buybtn").not("#fl-buybtn").attr("onclick", "ga('send', 'event', 'ascbuy-sold', 'buy', 'ascpurchase-updatersold');");
	$(".countdown").removeClass("twinkle");
}

function popbox() {
	$(".pop-over,.pop-bg").addClass("active")
}
$(".pop-bg .close").click(function() {
	$(".pop-over,.pop-bg").remove();
});

function flipNum(num, length) {
	var num = PrefixInteger(num, length);
	var len = String(num).length;
	var str = num.toString();
	var list = '';
	var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	for (var j = 0; j < arr.length; j++) {
		list += '<span>' + arr[j] + '</span>';
	}
	$(".banner .countdown .scroll-tick").html(list);
	$(".float .countdown .scroll-tick").html(list);
	for (var i = 0; i <= len; i++) {
		var curNum = str.substring(i, i + 1);
		$(".banner .countdown .scroll-tick").eq(i).animate({
			marginTop: -curNum * 45,
		}, "slow");
		$(".float .countdown .scroll-tick").eq(i).animate({
			marginTop: -curNum * 35,
		}, "slow");
	}

}

function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function pack(number, starnumber) {
	$('.gift').prop('number', starnumber).animateNumber({
			number: number
		},
		1500
	);
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

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	name = name + exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function mouseOut(e) {
	if (e.clientY < 3) {
		mask(1);
		$(document).unbind('mousemove', mouseOut);
	}
}

function mouseMove(e) {
	mask(1);
	$(document).unbind('mousemove', mouseMove);
}

function mask(scroll) {
	//if(packs>0) {
	if ((scroll == 1) && ((maskTime == -1) || (maskTime == -2))) {
		return false;
	} else {
		if (maskTime >= 0) {
			if (packs > 0) {
				ga('send', 'event', 'iubuy-pop', 'buy', 'iupurchase-updaterbpop03uv');
				maskTime = -1;
			} else {
				ga('send', 'event', 'iubuy-pop', 'buy', 'iupurchase-updaterb03soldpopuv');
				maskTime = -2;
			}
		}
		cSet('mask_t', maskTime);
		var expireTime = cGet('mask_e');
		if (expireTime == null) {
			expireTime = Date.parse(new Date()) + 60 * 1000;
			cSet('mask_e', expireTime);
		}
		if (expireTimeCheck()) {
			popbox();
			cycleCountdown();
		}
	}
	//}
}

function expireTimeCheck() {
	var expireTime = cGet('mask_e');
	if (Date.parse(new Date()) < expireTime) {
		return (expireTime - Date.parse(new Date())) / 1000;
	} else {
		return false;
	}
}

function cycleCountdown() {
	remainTime = expireTimeCheck();
	if (remainTime > 0) {
		var s = ((remainTime % 60) < 10) ? ('0' + (remainTime % 60)) : (remainTime % 60);
		var m = Math.floor(remainTime / 60);
		$(".count-time").html(s);
		remainTime--;
		setTimeout('cycleCountdown(remainTime)', 1000);
	} else {
		$(".pop-over,.pop-bg").remove();
	}
}

function timeInit() {
	maskTime = cGet('mask_t');
	if (maskTime == null) {
		maskTime = 60 * 2;
		cSet('mask_t', maskTime);
	}
	if ((maskTime == -1) || (maskTime == -2)) {
		if (expireTimeCheck()) {
			mask();
		}
	}
	mouseCheck = 0;
	maskTimeCountDown();
}

function maskTimeCountDown() {
	if (maskTime > 0) {
		if (maskTime == 110) {
			$(document).bind('mousemove', mouseOut);
		} else if (maskTime == 80) {
			$(document).unbind('mousemove', mouseOut);
		}
		maskTime--;
		cSet('mask_t', maskTime);
		setTimeout('maskTimeCountDown()', 1000);
	} else if ((maskTime == 0)) {
		$(document).bind('mousemove', mouseMove);
	}
}

function packsInit() {
	packs = 99;
	getSales(1);
}

function getSales() {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "updater.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				flipNum(sales.packsNum, 4);
				pack(sales.packsNum, packs);
				packs = sales.packsNum;
				if (packs <= 10) {
					twinkle();
				}
				if ((packs <= 0) && (!$(".banner,.float").hasClass('soldout'))) {
					soldOut();
				}
			}
			if (packs > 0) {
				setTimeout('getSales(0)', getReTime());
			}
		}
	});
}

function getReTime() {
	var packsNumTotal = cGet('eniumar_t');
	if (packsNumTotal > 1) {
		return (1200 / packsNumTotal) * 1000;
	} else {
		return 20000;
	}
}

function getViewNum() {
	if (packs > 0) {
		$.ajax({
			type: "GET",
			url: "updater.php",
			data: "action=getViewNum",
			success: function(res) {
				$('.viewNum').html(res);
			}
		});
		setTimeout('getViewNum()', 15000);
	}
}

$(function() {
	packsInit();
	timeInit();
	setTimeout('getViewNum()', 15000);
});