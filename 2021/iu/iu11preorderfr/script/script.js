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
	var width = num * 2.8;
	$(".banner .bar span").css("width", width);
}

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
	$(".banner,.floatlayer").addClass("sold");
	flipNum(0, 2);
	$(".banner .number").html("");
	$(".banner h2").html("Profitez du meilleur<br> programme de désinstallation<br> <strong>60% de réduction</strong>");
	$(".floatlayer .number").html("Profitez du meilleur désinstalleur <strong>60% de réduction</strong>");
	$(".price").find("strong").html("<big>14</big>,99€ <del>39,99€</del>");
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=fr-iu11preorder1499&ref=fr_iu11preorder1499' + refStr + '&aff=' + aff + '&refs=fr_purchase_iu&tw=' + tw,
		"onclick": "ga('send', 'event', 'iusoldbuy', 'buy', 'iu11preorder-fr');"
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
	packsInit();
	$(".banner .price").addClass("delay");
	setTimeout(function() {
		$(".banner").find("[data-name^='default']").addClass('on');
	}, 300);
	setTimeout('getViewNum()', 15000);
	$('.review ul li').hover(function() {
		$(this).addClass('active').siblings().removeClass('active');
		$('.review .review-box .box').eq($(this).index()).addClass('active').siblings().removeClass('active');
	});
});

function packsInit() {
	packs = cGet("friujune_p");
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
		url: "iu11preorder.php",
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
				reTime = Math.floor((Math.random() * 8) + 4) * 1000;
				setTimeout('getSales(0)', reTime);
			}
		}
	});
}

function getViewNum() {
	if (packs > 0) {
		$.ajax({
			type: "GET",
			url: "iu11preorder.php",
			data: "action=getViewNum",
			success: function(res) {
				$('.viewNum').html(res);
			}
		});
		setTimeout('getViewNum()', 12000);
	}
}

function getReTime() {
	var packsNumTotal = cGet('friujune_t');
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