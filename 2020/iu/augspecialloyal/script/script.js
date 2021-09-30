function numberJump(obj, num, num2, time) {
	$(obj).prop('number', num).animateNumber({
		number: num2,
	}, time);
}

function actionStar() {
	var ts = new TimelineMax();
	var ts2 = new TimelineMax();
	ts.set(".screen-list", {
		opacity: 0,
	}).set(".screen-list.left", {
		opacity: 1,
		height: 95,
	});
	t7.set(".feature-tab .tab-three em", {
		opacity: 0,
	});
}

function leftovers() {
	var t1 = new TimelineMax();
	t1.set(".screen-list", {
		opacity: 0,
	}).set(".screen-list.left", {
		opacity: 1,
		height: 95,
	}).to(".screen-list.left", 0.8, {
		height: 225,
		onComplete: function() {
			setTimeout(function() {
				lowdisk();
				$(".feature-list li").removeClass("on");
				$(".feature-list li.two").addClass("on");
			}, 2000);
		},
	}, "+=0.2");

	setTimeout(function() {
		$(".feature-list li").removeClass("on");
		$(".feature-list li.one").addClass("on");
	}, 600);
}
// leftovers();

function lowdisk() {
	var t2 = new TimelineMax();
	t2.set(".screen-list", {
		opacity: 0,
	}).set(".screen-list.low", {
		scale: 0,
		transformOrigin: "50% 50%",
	}).to(".screen-list.low", 0.8, {
		opacity: 1,
		scale: 1,
		onComplete: function() {
			$(".screen-list.low h3").addClass("on");
			setTimeout(function() {
				slowly();
				$(".feature-list li").removeClass("on");
				$(".feature-list li.three").addClass("on");
			}, 2000);
		},
	});
}

function slowly() {
	var t3 = new TimelineMax();
	t3.set(".screen-list", {
		opacity: 0,
	}).set(".loading-bar em", {
		width: 0,
	}).to(".screen-list.slowly", 1, {
		opacity: 1,
	}).to(".loading-bar em", 1, {
		width: 138,
	}, "-=0.2");
}
// slowly();

function getRndInteger(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}

var t4 = new TimelineMax();
var t5 = new TimelineMax();

function uninstall() {
	t4.set(".tab-one em", {
		opacity: 0,
		y: 200,
	}).staggerTo(".tab-one em.one,.tab-one em.three", 1, {
		opacity: 0.9,
		y: 0,
	}, 0.2);

	t5.set(".tab-one em", {
		opacity: 0,
		y: 200,
	}).staggerTo(".tab-one em.two,.tab-one em.four,.tab-one em.five", 1, {
		opacity: 0.4,
		y: 0,
	}, 0.2);
	t4.repeat(-1);
	t5.repeat(-1);
}

var t11 = new TimelineMax();

function removePlug() {
	t11.set(".feature-tab .tab-two em.one", {
		opacity: 0,
		y: 40,
		x: 18,
	}).set(".feature-tab .tab-two em.remove-arrow", {
		opacity: 0,
	}).set(".feature-tab .tab-two em.two", {
		x: -10,
	}).set(".feature-tab .tab-two em.three", {
		x: 10,
	}).set(".feature-tab .tab-two em.four", {
		y: -10,
	}).to(".feature-tab .tab-two em.one", 0.8, {
		opacity: 1,
		y: 0,
		x: 0,
	}).staggerTo(".feature-tab .tab-two em.remove-arrow", 0.8, {
		opacity: 1,
		x: 0,
		y: 0,
	}, 0.2);

	t11.repeat(-1);
}

var t7 = new TimelineMax();
var t8 = new TimelineMax();
var t9 = new TimelineMax();
var t10 = new TimelineMax();

function autoClean() {
	t7.set(".feature-tab .tab-three em.one", {
		opacity: 1,
		y: 50,
	}).to(".feature-tab .tab-three em.one", 5, {
		opacity: 0,
		y: getRndInteger(-80, -40),
	});

	t8.set(".feature-tab .tab-three em.two", {
		opacity: 1,
		y: 0,
		scale: 0.6,
	}).to(".feature-tab .tab-three em.two", 4, {
		opacity: 0,
		y: getRndInteger(-100, -80),
	});

	t9.set(".feature-tab .tab-three em.three,.feature-tab .tab-three em.five", {
		opacity: 1,
		y: 0,
		scale: 0.4,
	}).to(".feature-tab .tab-three em.three,.feature-tab .tab-three em.five", 4, {
		opacity: 0,
		y: getRndInteger(-20, -50),
	});

	t10.set(".feature-tab .tab-three em.four", {
		opacity: 1,
		y: 0,
	}).to(".feature-tab .tab-three em.four", 4, {
		opacity: 0,
		y: getRndInteger(-150, -120),
	});

	t7.repeat(-1);
	t8.repeat(-1);
	t9.repeat(-1);
	t10.repeat(-1);
}

var t6 = new TimelineMax();

function record() {
	t6.set(".tab-four em", {
		opacity: 1,
		scale: 0.8,
	}).staggerTo(".tab-four em", 1, {
		opacity: 0,
		scale: 1.6,
	}, 0.5);

	t6.repeat(-1);
}

function soldOut() {
	var aff = MApp(2.2).url.getParameters('aff');
	var tw = MApp(2.2).datetime.getTimeZone();

	$(".offer .off,.changelist li b").html("70% OFF");
	$(".offer.left .off,.changelist li.last b").html("25% OFF");
	$(".explain li i.one").html("-70%");
	$(".offer.left .explain li i.one").html("-25%");
	$(".price strong").html("");
	$(".price").find("strong").html("<small>$</small>16.77");
	$(".banner .offer.left .price").find("strong").html("<small>$</small>14.77");
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsoldspecialloyal' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
		"onclick": "ga('send', 'event', 'iu3pcsoldbuy', 'buy', 'iu11specialloyal');"
	});
	$(".offer.left .buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=iu111pc1477&ref=en-iu1pcsoldspecialloyal' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
		"onclick": "ga('send', 'event', 'iu1pcsoldbuy', 'buy', 'iu11specialloyal');"
	});
}

$(function() {
	timeInit();
	actionStar();

	$('.review ul li').hover(function() {
		$(this).addClass('active').siblings().removeClass('active');
		$('.review .review-box .box').eq($(this).index()).addClass('active').siblings().removeClass('active');
	});

	$(".footbuy li").click(function() {
		var _index = $(this).index();
		var _num = $(this).attr("data-num");
		var _price = $(".banner .offer").eq(_num).find(".price strong").html();
		var _original = $(".banner .offer").eq(_num).find(".price del").html();
		var _href = $(".banner .offer").eq(_num).find(".buybtn").attr("href");
		var _ga = $(".banner .offer").eq(_num).find(".buybtn").attr("onclick");
		$(this).addClass("on").siblings().removeClass("on");
		$(".footbuy .price").find("strong").html(_price);
		$(".footbuy .price").find("del").html(_original);
		if (_index === 0) {
			$(".footbuy .imgbox").addClass("free");
		} else {
			$(".footbuy .imgbox").removeClass("free");
		}
		$(".footbuy .buybtn").attr({
			"href": _href,
			"onclick": _ga,
		});
	});

	// soldOut();

	//feature
	var sWidth = $(".feature-msg").width();
	var len = $(".feature-msg dl").length;
	var index = 0;
	var picTimer;

	$(".feature-inner").css("width", sWidth * (len));

	$(".feature-tab li").mouseover(function() {
		index = $(".feature-tab li").index(this);
		showPics(index);
	}).eq(0).trigger("mouseover");

	$(".feature-tab").hover(function() {
		clearInterval(picTimer);
	}, function() {
		picTimer = setInterval(function() {
			showPics(index);
			index++;
			if (index == len) {
				index = 0;
			}
		}, 4000);
	}, "300").trigger("mouseleave");

	function showPics(index) {
		$(".feature-tab li").removeClass("on").eq(index).addClass("on");
		$(".feature-msg dl").removeClass("on").eq(index).addClass("on");
		switch (index) {
			case 1:
				t11.restart(true, false);
				t4.stop();
				t5.stop();
				t6.stop();
				t7.stop();
				t8.stop();
				t9.stop();
				t10.stop();
				$(".feature-tab .tab-three .tab-three-img").removeClass("on");
				t11.set(".feature-tab .tab-two em", {
					opacity: 0,
					y: 40,
					x: 18,
				});
				t4.set(".tab-one em", {
					opacity: 0,
					y: 200,
				});
				$(".feature-tab .tab-three em").css("display", "none");
				t6.set(".tab-four em", {
					opacity: 0,
				});
				break;
			case 2:
				t7.restart(true, false);
				t8.restart(true, false);
				t9.restart(true, false);
				t10.restart(true, false);
				t11.stop();
				t4.stop();
				t5.stop();
				t6.stop();
				$(".feature-tab .tab-three .tab-three-img").addClass("on");
				t4.set(".tab-one em", {
					opacity: 0,
					y: 200,
				});
				t6.set(".tab-four em", {
					opacity: 0,
				});
				$(".feature-tab .tab-three em").css("display", "block");
				break;
			case 3:
				t6.restart(true, false);
				t11.stop();
				t4.stop();
				t5.stop();
				t7.stop();
				t8.stop();
				t9.stop();
				t10.stop();
				$(".feature-tab .tab-three .tab-three-img").removeClass("on");
				t4.set(".tab-one em", {
					opacity: 0,
					y: 200,
				});
				t11.set(".feature-tab .tab-two em", {
					opacity: 0,
					y: 40,
					x: 18,
				});
				$(".feature-tab .tab-three em").css("display", "none");
				break;
			default:
				t4.restart(true, false);
				t5.restart(true, false);
				t6.stop();
				t7.stop();
				t8.stop();
				t9.stop();
				t10.stop();
				t11.stop();
				$(".feature-tab .tab-three .tab-three-img").removeClass("on");
				t11.set(".feature-tab .tab-two em", {
					opacity: 0,
					y: 40,
					x: 18,
				});
				t6.set(".tab-four em", {
					opacity: 0,
					scale: 0.8,
				});
				$(".feature-tab .tab-three em").css("display", "none");
				break;
		}
	}

	uninstall();
	removePlug();
	autoClean();
	record();
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
	var cName = "spancialloyal_t" + date.getDate();
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