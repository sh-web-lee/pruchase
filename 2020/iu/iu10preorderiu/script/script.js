$(function() {
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
				break;
		}
	}

	uninstall();
	removePlug();
	autoClean();
	record();
});

function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
	$(".listbox").remove();
	var number = PrefixInteger(num, length);
	var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	var _list = '';
	var len = String(number).length;
	var str = number.toString();
	var _box = $(".reduceNum");
	var createobj;
	for (var i = 0; i < length; i++) {
		if (length < 2) {
			createobj = $(new Array(3).join('<div class="listbox"><div class="list"></div></div>'));
		} else {
			createobj = $('<div class="listbox"><div class="list"></div></div>');
		}
		_box.append(createobj);
	}
	for (var j = 0; j < arr.length; j++) {
		_list += '<b>' + arr[j] + '</b>';
	}
	$(".list").append(_list);
	for (var a = 0; a <= len; a++) {
		var curNum = str.substring(a, a + 1);
		$("#reduce .list").eq(a).animate({
			marginTop: -curNum * 28,
		}, "slow");
		$("#fReduce .list").eq(a).animate({
			marginTop: -curNum * 28,
		}, "slow");
	}
	var width = num * 1.8;
	$(".banner .bar span").css("width", width);
}

function numberJump(obj, num, num2, time) {
	$(obj).prop('number', num).animateNumber({
		number: num2,
	}, time);
}

function soldOut() {
	var aff = MApp(2.2).url.getParameters('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".banner,.floatlayer").addClass("sold");
	flipNum(0, 2);
	$(".banner .number").html("");
	$(".banner h2").html("Get the best uninstaller <br> with <strong>50% OFF</strong>");
	$(".floatlayer .number").html('Get the best uninstaller with <strong> 50% OFF</strong>');
	$(".price").find("strong").html("$14.77<del>$29.99</del>");
	$(".buybtn").html("Upgrade Now");
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=iu10preorder1477&ref=en-iu10preorderiusoldout' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
		"onclick": "ga('send', 'event', 'iusoldbuy', 'buy', 'iu10preorderiu');"
	});
}
// soldOut();

function actionStar() {
	var ts = new TimelineMax();
	var ts2 = new TimelineMax();
	ts.set(".screen-list", {
		opacity: 0,
	}).set(".screen-list.left", {
		opacity: 1,
		height: 95,
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

var c = 0;
var flag = true;
$(window).scroll(function() {
	$("[data-name^='animation']").each(function(i) {
		if ($(document).scrollTop() > $(this).offset().top - 200) {
			$(this).find("[data-name^='default']").addClass('on');
			if ($(this).hasClass("feature-02")) {
				if ($(this).find(".upgrade").hasClass('on')) {
					if (flag) {
						flag = false;
						setTimeout(leftovers, 1000);
					} else {
						return;
					}
				}
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
	packsInit();
	setTimeout('getViewNum()', 15000);

	actionStar();
	// uninstall();
	// removePlug();
	// autoClean();
	// record();

	$(".banner .price").addClass("delay");
	setTimeout(function() {
		$(".banner").find("[data-name^='default']").addClass('on');
	}, 300);

	$('.review ul li').hover(function() {
		$(this).addClass('active').siblings().removeClass('active');
		$('.review .review-box .box').eq($(this).index()).addClass('active').siblings().removeClass('active');
	});
});

function packsInit() {
	packs = cGet("eniujuneorder_p");
	if (packs == null) {
		packs = 99;
		getSales(1);
	} else {
		flipNum(packs, 2);
		$(".buyNum").html(500 - packs);
		$(".giftNum").html(packs);
		if ((packs <= 0) && (!$(".banner,.floatlayer").hasClass('sold'))) {
			soldOut();
		} else {
			setTimeout('getSales(0)', 1000);
		}
	}
}

function getSales() {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "iu10preorderiu.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				flipNum(sales.packsNum, 2);
				packs = sales.packsNum;
				$(".buyNum").html(500 - packs);
				$(".giftNum").html(packs);
				if ((packs <= 0) && (!$(".banner,.feature,.floatlayer").hasClass('sold'))) {
					soldOut();
				}
			}
			if (packs > 0) {
				if (packs > 40) {
					reTime = (Math.random() > 0.5) ? 2 : 3;
				} else if (packs <= 10) {
					reTime = (Math.random() > 0.5) ? 3 : 7;
				} else {
					reTime = (Math.random() > 0.5) ? 5 : 10;
				}
				setTimeout('getSales(0)', reTime * 1000);
			}
		}
	});
}

function getViewNum() {
	if (packs > 0) {
		$.ajax({
			type: "GET",
			url: "iu10preorderiu.php",
			data: "action=getViewNum",
			success: function(res) {
				$('.viewNum').html(res);
			}
		});
		setTimeout('getViewNum()', 12000);
	}
}

function getReTime() {
	var packsNumTotal = cGet('eniujuneorder_t');
	if ((packsNumTotal >= 49) && (packsNumTotal <= 58)) {
		return (420 / packsNumTotal) * 1000;
	} else {
		return 15000;
	}
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