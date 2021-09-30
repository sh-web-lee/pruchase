//userreview 
$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		} else {
			scrollclass.removeClass(ClassName);
		}
	});
};

function flipNum(num, length) {
	var num = PrefixInteger(num, length)
	var len = String(num).length;
	var str = num.toString();
	// console.log(len);
	for (var i = 0; i <= len; i++) {
		var curNum = str.substring(i, i + 1);
		$(".countdown .scroll-tick").eq(i).animate({
			marginTop: -curNum * 52,
		}, "slow");
	}
}

function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

$(function() {
	if ($(document).scrollTop() > $(".intro").offset().top - 300) {
		$(".intro .list").addClass("active");
	}
	$(".users li").mouseover(function(event) {
		var num = $(this).index();
		$(this).addClass("active").siblings().removeClass("active");
		$(".review .content > dl").eq(num).addClass("active").siblings().removeClass("active");
	});
	$(window).scrollWindow($(".cause"), $('.intro .list'), ("active"));
	$(window).scrollWindow($(".banner .buybtn:last"), $('.floatlayer'), ("on"));
	$("#floatlayer .close").on('click', function(event) {
		$("#floatlayer").hide();
	});

	packsInit();
});

function soldout() {
	$(".banner .three-box").removeClass("active");
	$(".banner .three-pc").addClass("active");
	$(".banner .three-pc .buybtn").addClass("middle").removeClass("border");
	$(".footbuy ul li").removeClass("active");
	$(".footbuy ul li").eq(2).addClass("default");
	$(".footbuy ul li").eq(1).addClass("active");
	$(".centbuy").addClass("default");
	threePc();
	$(".centbuy .buybtn").attr("href", "https://www.iobit.com/buy.php?product=de-asc123pc2599&ref=de_asc123pc2599purchase1901test" + refStr + "&refs=de_purchase_asc&tw=" + tw);
	$(".centbuy .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1901test-de')");
}

function onePc() {
	$(".footbuy dl strong b").html("23");
	$(".footbuy dl del").html("39,99€");
	$(".footbuy .left-img .box").addClass("one-pc").removeClass("three-pc");
	$(".footbuy dl .buybtn").attr("href", "https://www.iobit.com/buy.php?product=de-asc121pc2399&ref=de_asc121pc2399purchase1901test" + refStr + "&refs=de_purchase_asc&tw=" + tw);
	$(".footbuy dl .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1901test-de')");
}

function threePc() {
	$(".footbuy dl strong b").html("25");
	$(".footbuy dl del").html("59,99€");
	$(".footbuy .left-img .box").addClass("three-pc").removeClass("one-pc");
	$(".footbuy dl .buybtn").attr("href", "https://www.iobit.com/buy.php?product=de-asc123pc2599&ref=de_asc123pc2599purchase1901test" + refStr + "&refs=de_purchase_asc&tw=" + tw);
	$(".footbuy dl .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1901test-de')");
}

function threeBox() {
	$(".footbuy dl strong b").html("26")
	$(".footbuy dl del").html("99,94€")
	$(".footbuy .left-img .box").removeClass("three-pc").removeClass("one-pc");
	$(".footbuy dl .buybtn").attr("href", "https://www.iobit.com/buy.php?product=de-asc12iu3pc2699&ref=de_asc123pciu2699purchase1901test" + refStr + "&refs=de_purchase_asc&tw=" + tw);
	$(".footbuy dl .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiu1901test-de')");
}

function zoomout() {
	$(".pop-font").addClass("zoomout");
	setTimeout(function() {
		$(".pop-font").removeClass("zoomout");
	}, 800);
}

function pack(number) {
	$('.pack,.pop-font').prop('number', 129).animateNumber({
			number: number
		},
		1000
	);
}

function pop() {
	$(".pop-bg,.pop").addClass("on");
}

$(function() {
	popShow = 1;

	$(".close").click(function() {
		$(".pop-bg,.pop").removeClass("on");
		$(".pop-small").removeClass("on");
		popShow = 0;
	});

	$(".smaller").click(function() {
		$(".pop-bg,.pop").removeClass("on");
		$(".pop-small").addClass("on");
	});
	$(".larger").click(function() {
		var statusNow = statusCheck();
		if (statusNow == 1) {
			pop();
			$(".pop-small").removeClass("on");
		}
	});

	timeInit();

});

function commafy(num) {
	num = num + "";
	num = num.replace(/[ ]/g, "");
	if (num == "") {
		return;
	}
	if (isNaN(num)) {
		return;
	}
	var index = num.indexOf(".");
	if (index == -1) {
		var reg = /(-?\d+)(\d{3})/;
		while (reg.test(num)) {
			num = num.replace(reg, "$1.$2");
		}
	} else {
		var intPart = num.substring(0, index);
		var pointPart = num.substring(index + 1, num.length);
		var reg = /(-?\d+)(\d{3})/;
		while (reg.test(intPart)) {
			intPart = intPart.replace(reg, "$1.$2");
		}
		num = intPart + "." + pointPart;
	}
	return num;
}

function getSalesNum(packsNow) {
	var date = new Date();
	var daysDiff = Math.floor((date.getTime() - Date.parse('2017-11-17')) / (3600 * 24 * 1000));
	var buyNum = 66078707 + daysDiff * 164 + (164 - packsNow);
	$('.buyNum').html(commafy(buyNum));
}
$(".footbuy ul li").mouseover(function(event) {
	var num = $(this).index();
	if ($(this).hasClass('default')) {
		return;
	} else {
		if (num == 0) {
			onePc()
		} else if (num == 1) {
			threePc()
		} else {
			threeBox()
		}
		$(".footbuy ul li").removeClass('active');
		$(this).addClass('active');
	}
});

function packsInit() {
	var date = new Date();
	var cName = "deascjan" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		if (viewCheck()) {
			packs = 30;
		} else {
			packs = 58;
		}
	} else {
		packs = arr[2];
	}
	if ((packs <= 0) && ($(".banner .three-box").hasClass('active'))) {
		soldout();
	}
	getSalesNum(packs);
	flipNum(packs, 2);
	pack(200 - packs);

	timeCheck();
	setTimeout('getSales()', reTime * 1000);
}

function getSales() {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "januarsale.php",
		data: "action=getPacks&d=" + date.getDate() + "&view=" + viewCheck(),
		success: function(res) {
			var sales = JSON.parse(res);
			$("#floatlayer").removeClass('on');
			setTimeout("$('#floatlayer').addClass('on');", 800);
			$("#first").html(sales.firstName);
			$("#last").html(sales.lastName);
			if (sales.packsNum != packs) {
				packs = sales.packsNum;
				if ((packs <= 0) && ($(".banner .three-box").hasClass('active'))) {
					soldout();
				}
				$('.pop-font').html(200 - packs);
				$('.pack').html(200 - packs);
				flipNum(packs, 2);
				zoomout();
				getSalesNum(packs);
				timeCheck();
			}
		}
	});
	setTimeout('getSales()', reTime * 1000);
}

function timeCheck() {
	if (!viewCheck()) {
		if (packs > 36) {
			reTime = 3;
		} else {
			reTime = 13;
		}
	} else {
		reTime = 11;
	}
}

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function viewCheck() {
	var date = new Date();
	var cName = 'deascjanv';
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		cSet(cName, date.getDate());
	} else {
		if (arr[2] != date.getDate()) {
			return 1;
		}
	}
	return 0;
}

function timeInit() {
	var date = new Date();
	var cName = "deascjant" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime = Math.floor(date.getTime() / 1000);
	if (arr == null) {
		countTime = nowTime + 490;
		cSet(cName, countTime);
	} else {
		countTime = parseInt(arr[2]);
	}
	countdownPop('#countdown3 strong', 1);
}

function timeCountDown(startTimestamp) {
	var dateObj = new Date();
	var time = dateObj.getTime().toString().substring(0, 10);
	var remainingTime = startTimestamp - time;
	if (remainingTime > 0) {
		if (remainingTime <= 480) {
			if ((!$(".pop-bg").hasClass('on')) && (!$(".pop-small").hasClass('on')) && (popShow == 1)) {
				pop();
			}
		}
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

var countdownPop = function(countdown, tType) {
	var statusNow = statusSet();
	if (tType == 1) {
		getCycleCountdownPop(countTime);
	}
	if (statusNow == 1) {
		$(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
		setTimeout("countdownPop('" + countdown + "'," + tType + ")", 1);
	}
};

function getCycleCountdownPop(endTime) {
	var datetime = timeCountDown(endTime);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
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
		if (!$(".pop-small").hasClass('over')) {
			$(".pop-bg,.pop").removeClass("on");
			$(".pop-small").addClass("on").addClass('over');
			$('#countdown3 strong').eq(0).html('00').end().eq(1).html('00').end().eq(2).html('000');
		}
		if (!$(".pop-small").hasClass('on')) {
			$(".pop-small").addClass("on");
		}
		if (!$(".pop-small").hasClass('over')) {
			$(".pop-small").addClass("over");
		}
	}
	return statusNow;
}