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

function numberJump(obj, num, time) {
	var num2 = $(obj).text();
	$(obj).prop('number', num).animateNumber({
		number: num2,
	}, time);
}

function numberJumpTwo(obj, time) {
	var num = $(obj).text();
	var comma_separator_number_step = $.animateNumber.numberStepFactories.separator('.');
	$(obj).animateNumber({
		number: num,
		numberStep: comma_separator_number_step
	}, time);
}

function soldOut() {
	var aff = MApp(2.2).url.getParameters('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".banner,.floatlayer").addClass("sold");
	flipNum(0, 2);
	$(".banner .number").html("");
	$(".banner .right h3").remove();
	$(".banner h2,.floatlayer .number").html("Kaufen Sie den besten Uninstaller mit <strong> 52% Rabatt</strong>");
	$(".price").find("strong").html("€<big>18</big>,99");
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=de-iu10preorder1899&ref=de_iu10preorderexpsoldout' + refStr + '&aff=' + aff + '&&refs=de_purchase_iu&tw=' + tw,
		"onclick": "ga('send', 'event', 'iubuy', 'buy', 'iu10predorderexpsoldout-de');"
	});
}
// soldOut();

var c = 0;
var flag = true;
$(window).scroll(function() {
	$("[data-name^='animation']").each(function(i) {
		if ($(document).scrollTop() > $(this).offset().top - 200) {
			$(this).find("[data-name^='default']").addClass('on');
		}
	});

	if ($(document).scrollTop() > $(".intro").offset().top - 360) {
		$(".intro").find("[data-name^='default']").addClass('on');
		if (flag) {
			flag = false;
			setTimeout(function() {
				$(".intro dl b").addClass("on");
				numberJump(".intro .total", 0, 1200);
				numberJump(".intro .bundle", 0, 1200);
				numberJump(".intro .sofeware", 0, 1200);
				numberJump(".intro .plug-total", 0, 1200);
				numberJump(".intro .mail", 0, 1200);
				numberJump(".intro .files", 0, 1200);
				numberJump(".intro .registries", 0, 1200);
				numberJump(".intro .disk .integer", 0, 2000);
				numberJump(".intro .disk .decimal", 0, 2000);
			}, 300);
		} else {
			return;
		}
	}
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
	}, 500);
	setTimeout('getViewNum()', 15000);
	$('.review ul li').hover(function() {
		$(this).addClass('active').siblings().removeClass('active');
		$('.review .review-box .box').eq($(this).index()).addClass('active').siblings().removeClass('active');
	});
});

function packsInit() {
	packs = cGet("deiujunexp0716_p");
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
		url: "iu10preorderexp.php",
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
			url: "iu10preorderexp.php",
			data: "action=getViewNum",
			success: function(res) {
				$('.viewNum').html(res);
			}
		});
		setTimeout('getViewNum()', 12000);
	}
}

function getReTime() {
	var packsNumTotal = cGet('deiujunexp0716_t');
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