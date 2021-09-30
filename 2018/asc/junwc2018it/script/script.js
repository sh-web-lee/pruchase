function soldOut() {
	$(".banner .sold-box .img-box").addClass("one-box");
	$(".banner .one-pc-box").addClass("default");
	$(".banner .sold-box dl dt strong").html("50%");
	$(".banner .one-pc-box dl dt strong").html("75%");
	$(".banner .one-pc-box dl .button").html("Approfittane Ora!");
	$(".banner .sold-box h2").html("<span class='num'><span class='pack packsNum'>25</span> <span class='popup-font packsNum'>25</span></span> Pezzi Rimasti Oggi");
	$(".selection li").eq(0).addClass("default").removeClass("active");
	$(".selection li").eq(1).addClass("active");
	$(".gifts .lists").addClass("exceed");
	$(".banner .sold-box .button,.gifts .button").attr("href", "https://www.iobit.com/buy.php?product=it-asc111pc1499&ref=it_asc111pc1499purchase1806wc" + refStr + "&refs=it_purchase_asc");
	$(".banner .sold-box .button,.gifts .button").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1806wc-it')");
	onePc();
}

function zoomout() {
	$(".popup-font").addClass("zoomout");
	$(".sold-box .img-box").append("<span class='dissolve'></span>");
	setTimeout(function() {
		$(".popup-font").removeClass("zoomout");
		$(".sold-box .img-box .dissolve").remove();
	}, 800);
}

function onePc() {
	$(".bottomcart .button").attr("href", "https://www.iobit.com/buy.php?product=it-asc111pc1499&ref=it_asc111pc1499purchase1806wc" + refStr + "&refs=it_purchase_asc");
	$(".bottomcart .button").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1806wc-it')");
	$(".bottomcart dl strong").html("<b>14</b>,99")
	$(".bottomcart dl dt del").html("29,99")
	$(".bottomcart dl dt span").html("15,00")
	$(".showcase .img").addClass("one-pc");
}

function threePc() {
	$(".bottomcart .button").attr("href", "https://www.iobit.com/buy.php?product=it-asc11iu3pc1799&ref=it_asc113pciu1799purchase1806wc" + refStr + "&refs=it_purchase_asc");
	$(".bottomcart .button").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiu1806wc-it')");
	$(".bottomcart dl strong").html("<b>17</b>,99")
	$(".bottomcart dl del").html("79,98")
	$(".bottomcart dl dt span").html("61,99")
	$(".showcase .img").removeClass("one-pc");
}

function pack(number) {
	$('.pack,.popup-font').prop('number', 129).animateNumber({
			number: number
		},
		1000
	);
}

function goTarget(target, yoffset) {
	if (!yoffset) yoffset = 0;
	var Theigth = target.offset().top - yoffset;
	$("html, body").animate({
		scrollTop: Theigth
	}, 'slow');
}

function hideFloat(argument) {
	$('.float').remove();
}

$(".benfits .detail-list dl").hover(function() {
	$(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index() + 1));
	$(".benfits .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
});

$(".cartarea .selection li").mouseover(function(event) {
	var num = $(this).index();
	if ($(this).hasClass('default')) {
		return;
	} else {
		if (num == 0) {
			threePc();
		} else {
			onePc();
		}
		$(".cartarea .selection li").removeClass('active');
		$(this).addClass('active');
	}
});

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		} else {
			scrollclass.removeClass(ClassName);
		}
	});
};

$(window).scrollWindow($(".gifts .lists"), $('.reviews dl'), ("on"));
$(window).scrollWindow($(".payments"), $('.float'), ("on"));

function cSet(cName, cVal) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
	document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit() {
	var date = new Date();
	var cName = "itascjan" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime = Math.floor(date.getTime() / 1000);
	if (arr == null) {
		countTime = nowTime + 549;
		cSet(cName, countTime);
	} else {
		countTime = parseInt(arr[2]);
	}
}

function packsInit() {
	var date = new Date();
	var cName = "itascjanpa" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		packs = 129;
	} else {
		packs = arr[2];
	}
	pack(packs);
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
		if (!$(".banner .sold-box .img-box").hasClass('one-box')) {
			soldOut();
			packsInit();
			setTimeout('getPacks()', 2000);
		}
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

function getPacks() {
	var date = new Date();
	$.ajax({
		type: 'GET',
		url: 'junwc2018.php',
		data: 'action=getSales&d=' + date.getDate(),
		success: function(sPacks) {
			if (!isNaN(sPacks)) {
				if (sPacks != packs) {
					zoomout();
					$('.packsNum').html(sPacks);
					packs = sPacks;
				}
			}
		}
	});
	if (packs > 125) {
		setTimeout('getPacks()', 3000);
	} else {
		setTimeout('getPacks()', 15000);
	}
}

var countdown = function(countdown, tType) {
	statusSet();
	if (tType == 1) {
		getCycleCountdown(countTime);
	}
	$(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
	setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
};

function getCycleCountdown(endTime) {
	var datetime = timeCountDown(endTime);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function getSales() {
	var type = ((typeof(packs) == 'undefined') ? 1 : 2);
	$.ajax({
		type: "GET",
		url: "junwc2018.php",
		data: "action=getPack&type=" + type,
		success: function(res) {
			var sales = JSON.parse(res);
			var scrollHeight = $(".banner").offset().top;
			if ($(window).scrollTop() > scrollHeight) {
				$(".float").removeClass('on');
				setTimeout("$('.float').addClass('on');", 800);
			}
			$("#first").html(sales.firstName);
			$("#last").html(sales.lastName);
			$("#saleType").html(sales.saleType);
			$(".buyNum").html(sales.buyNum);
		}
	});
	setTimeout('getSales()', 20000);
}
$(function() {
	timeInit();
	countdown((".sold-box h2 strong"), 1);
});
setTimeout('getSales()', 20000);