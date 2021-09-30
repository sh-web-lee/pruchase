function numberJump(obj, num, num2, time) {
	$(obj).prop('number', num).animateNumber({
		number: num2,
	}, time);
}

function sect01() {
	var tl = new TimelineMax();
	tl.to(".feature .list01", .5, {
			top: 60,
			opacity: 1,
			ease: 'ease'
		}, '+=1')
		.to(".feature .list01 .hand", .5, {
			opacity: 1,
			top: 13,
			ease: 'ease'
		}, '+=0.5')
		.to(".feature .list01 .button", .5, {
			onStart: function() {
				$(".feature .list01 .button").addClass("on")
			}
		}, '+=0.1')
		.to(".feature .list01", .5, {
			scale: 0,
			opacity: 0,
			ease: 'ease'
		}, '+=0.5')
		.to(".feature .list02", .5, {
			top: 60,
			opacity: 1,
			ease: 'ease'
		}, '-=0.5')
		.to(".feature .list02", 1, {
			onStart: function() {
				numberJump(".feature .list02 span:eq(1)", 0, 79.13, 1000);
				numberJump(".feature .list02 span:eq(2)", 0, 13, 1000);
				$("span.circle").addClass("on")
			}
		})
		.to(".feature .list02", .5, {
			scale: 0,
			opacity: 0,
			ease: 'ease'
		}, '+=1')
		.to(".feature .list03", .7, {
			top: 84,
			opacity: 1,
			ease: 'ease'
		}, '-=0.5')
		.to(".feature .list03 .bar span", 1, {
			width: 360,
			ease: 'ease'
		}, '+=0.7')
		.to(".feature .list03", .7, {
			scale: 0,
			opacity: 0,
			ease: 'ease'
		}, '+=.2')
		.to(".feature .list04", .7, {
			top: 84,
			opacity: 1,
			ease: 'ease',
			onComplete: function() {
				numberJump(".feature .list04 strong:eq(0)", 0, 1, 500);
				numberJump(".feature .list04 strong:eq(1)", 0, 32, 500);
				numberJump(".feature .list04 strong:eq(2)", 0, 79, 500);
				numberJump(".feature .list04 strong:eq(3)", 0, 13, 500);
				numberJump(".feature .list04 strong:eq(4)", 0, 3, 500);
				numberJump(".feature .list04 strong:eq(5)", 0, 22, 500);
				numberJump(".feature .list04 strong:eq(6)", 0, 48, 500);
			}
		}, '-=0.2')
}

function soldOut() {
	var aff = MApp(2.2).url.getParameters('aff');
	var tw = MApp(2.2).datetime.getTimeZone();

	$(".offer.left .off").html("25% OFF");
	$(".offer.left .explain li i.one").html("-25%");
	$(".offer .price").find("strong").html("<small>$</small>16.77");
	$(".offer.left .price").find("strong").html("<small>$</small>14.77");
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsoldspecialnew' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
		"onclick": "ga('send', 'event', 'iu3pcsoldbuy', 'buy', 'iu11specialnew');"
	});
	$(".offer.left .buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=iu111pc1477&ref=en-iu1pcsoldspecialnew' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
		"onclick": "ga('send', 'event', 'iu1pcsoldbuy', 'buy', 'iu11specialnew');"
	});
}
// soldOut();

var c = 0;
$(window).scroll(function() {
	$("[data-name^='animation']").each(function(i) {
		if ($(document).scrollTop() > $(this).offset().top - 200) {
			$(this).find("[data-name^='default']").addClass('on');
		}
		if ($('.feature .img-box').hasClass('on')) {
			c += 1;
			if (c == 1) {
				sect01();
			}
		}
	});
	if ($(document).scrollTop() > 350) {
		$(".banner .price").removeClass("delay").addClass("nomail");
		$(".floatlayer").addClass('on');
		$(".price").addClass("flext");
	} else {
		$(".banner .price").removeClass("delay").addClass("nomail");
		$(".floatlayer").removeClass('on');
		$(".price").removeClass("flext");
	}

});

$(function() {
	timeInit();
	setTimeout(function() {
		$(".banner").find("[data-name^='default']").addClass('on');
	}, 300);

	$('.review ul li').hover(function() {
		$(this).addClass('active').siblings().removeClass('active');
		$('.review .review-box .box').eq($(this).index()).addClass('active').siblings().removeClass('active');
	});
});

// var i1 = [],
// 	s1 = [],
// 	mi1 = [],
// 	iNumber,
// 	sNumber,
// 	miNumber;

// var countdown = function(countdown) {
// 	getCycleCountdown();

// 	console.log(s1);

// 	$(countdown).eq(1).find("i").eq(0).html(i1[0]);
// 	setTimeout("countdown('" + countdown + "')", 1);
// };

// function getCycleCountdown() {
// 	var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
// 	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
// 	d = MApp(2.2).packages.zeroize(datetime[0], 2);
// 	h = MApp(2.2).packages.zeroize(datetime[1], 2);
// 	i = MApp(2.2).packages.zeroize(datetime[2], 2);
// 	s = MApp(2.2).packages.zeroize(datetime[3], 2);
// 	mi = MApp(2.2).packages.zeroize(datetime[4], 3);

// 	iNumber = i.toString();
// 	sNumber = s.toString();
// 	miNumber = mi.toString();
// 	for (var i = 0, len = iNumber.length; i < len; i += 1) {
// 		i1.push(+sNumber.charAt(i));
// 	}
// 	for (var i = 0, len = sNumber.length; i < len; i += 1) {
// 		s1.push(+sNumber.charAt(i));
// 	}
// 	for (var i = 0, len = miNumber.length; i < len; i += 1) {
// 		mi1.push(+sNumber.charAt(i));
// 	}
// }

// countdown((".countdown"));

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
	var date = new Date();
	var cName = "spancialnew_t" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime = Math.floor(date.getTime() / 1000);
	if (arr == null) {
		countTime = nowTime + 600;
		cSet(cName, countTime);
	} else {
		countTime = parseInt(arr[2]);
	}
	countdown();
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

function getCycleCountdown(endTime) {
	var datetime = timeCountDown(endTime);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

var countdown = function() {
	var statusNow = statusSet();
	getCycleCountdown(countTime);
	// $(".banner .countdown b span").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
	$(".banner .countdown b span").eq(0).html(i).end().eq(1).html(s);
	// $(".date h3 strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
	// $(".date h4 strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
	if (statusNow == 1) {
		setTimeout("countdown()", 1);
	}
};

function statusSet() {
	var statusNow = statusCheck();
	if (statusNow == 2) {
		//if($(".footbuy li").eq(1).hasClass('active')){
		if (!$(".banner").hasClass('soldout')) {
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