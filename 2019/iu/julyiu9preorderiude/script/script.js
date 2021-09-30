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
			marginTop: -curNum * 46,
		}, "slow");
		$("#fReduce .list").eq(a).animate({
			marginTop: -curNum * 46,
		}, "slow");
	}
}

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		} else {
			scrollclass.removeClass(ClassName);
		}
	});
};

function soldOut() {
	var aff = MApp(2.2).url.getParameters('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".banner,.feature,.floatlayer").removeClass("sold").addClass("sold");
	flipNum(0, 4);
	$(".banner").find(".change").html("0€ Vorbestellungen sind ausverkauft, verpasse <br>nicht auch noch diesen Rabatt");
	$(".banner .left, .floatlayer .imgbox").append('<span class="discount">52% Rabatt</span>');
	setTimeout('$(".discount").addClass("on")', 300);
	$(".floatlayer").find(".one").html('<p>Bestellen Sie jetzt vor, um IObit <br>Uninstaller PRO als Erster zu genießen</p>');
	$(".feature .price .change").remove();
	$(".price").find("strong").html("€<big>18</big>,99€");
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=de-iu9preorder1899&ref=de_iu9preorder1899iu' + refStr + '&aff=' + aff + '&refs=de_purchase_iu',
		"onclick": "ga('send', 'event', 'iu3pcbuy', 'buy', 'iu9predorderiu-de');"
	});
	$(".feature h3").html('Jetzt vorbestellen, um alle PRO Funktionen freizuschalten');
}
// soldOut();

var introIndex = 0;

function introShow(index) {
	var tabIndex = Math.abs(1 - index);
	$(".intro .content ul li").eq(index).addClass("active").siblings().removeClass("active");
	$(".inlist .indetail").eq(index).fadeIn(300).end().eq(tabIndex).hide();
	$(".intro span").eq(index).removeClass("active").end().eq(tabIndex).addClass("active");
}

$(window).on('scroll', function() {

	if ($(window).scrollTop() > $('.feature .iumouse').offset().top) {
		$('.feature .left img').addClass("on");
	}
});

$(function() {
	packsInit();
	setTimeout('getViewNum()', 12000);
	$(window).scrollWindow($(".payment"), $('.floatlayer'), ("on"));

	//intro
	$(".intro .content ul li").hover(function() {
		introIndex = $(this).index();
		introShow(introIndex);
	});
	$(".intro span.next").click(function() {
		introIndex = 1;
		introShow(introIndex);
	});
	$(".intro span.prev").click(function() {
		introIndex = 0;
		introShow(introIndex);
	});

	var sWidth = $(".review .relist").width();
	var len = $(".review .box dl").length;
	var index = 0;
	var picTimer;

	$(".review .prev,.review .next").css("opacity", 0.6).hover(function() {
		$(this).stop(true, false).animate({
			"opacity": "1"
		}, 300);
	}, function() {
		$(this).stop(true, false).animate({
			"opacity": "0.6"
		}, 300);
	});

	$(".review .prev").click(function() {
		index -= 1;
		if (index == -1) {
			index = len - 1;
		}
		showPics(index);
	});

	$(".review .next").click(function() {
		index += 1;
		if (index == len) {
			index = 0;
		}
		showPics(index);
	});
	$(".review .relist").css("width", sWidth * (len));

	function showPics(index) {
		var nowLeft = -index * sWidth;
		$(".review .relist").stop(true, false).css({
			"left": nowLeft
		});
		$(".review .box dl").removeClass("on").eq(index).addClass("on");
	}
});

function packsInit() {
	packs = cGet("deiuoldjune_p");
	if (packs == null) {
		packs = 99;
		getSales(1);
	} else {
		flipNum(packs, 4);
		$(".buyNum").html(500 - packs);
		$(".giftNum").html(packs);
		if ((packs <= 0) && (!$(".banner,.feature,.floatlayer").hasClass('sold'))) {
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
		url: "iu9preorderiu.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				flipNum(sales.packsNum, 4);
				packs = sales.packsNum;
				$(".buyNum").html(500 - packs);
				$(".giftNum").html(packs);
				if ((packs <= 0) && (!$(".banner,.feature,.floatlayer").hasClass('sold'))) {
					soldOut();
				}
			}
			if (packs > 0) {
				setTimeout('getSales(0)', getReTime());
			}
		}
	});
}

function getViewNum() {
	if (packs > 0) {
		$.ajax({
			type: "GET",
			url: "iu9preorderiu.php",
			data: "action=getViewNum",
			success: function(res) {
				$('.viewNum').html(res);
			}
		});
		setTimeout('getViewNum()', 12000);
	}
}

function getReTime() {
	var packsNumTotal = cGet('deiuoldjune_t');
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