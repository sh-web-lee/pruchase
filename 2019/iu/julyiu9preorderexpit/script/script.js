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
	$(".banner").find(".change").html("I pre-ordini a €0 sono esauriti, non perdere di nuovo questo sconto");
	$(".banner .left, .floatlayer .imgbox").append('<span class="discount">55% OFF</span>');
	setTimeout('$(".discount").addClass("on")', 300);
	$(".floatlayer").find(".one").html('<p>Pre-ordina ora per essere il primo <br>a godere di IObit Uninstaller 9 PRO</p>');
	$(".between-buy .price p").remove();
	$(".price").find("strong").html("€<big>15</big>,99");
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=it-iu9preorder1599&ref=it_iu9preorder1599exp' + refStr + '&aff=' + aff + '&refs=it_purchase_iu',
		"onclick": "ga('send', 'event', 'iubuy', 'buy', 'iu9predorder1599exp-it');"
	});
	$(".between-buy h2").html('Pre-Ordina ora per godere di nuovo le funzionalità esclusive di <br>IObit Uninstaller 9 PRO');
}
// soldOut();

function changeNum() {
	$(".intro .right-message .one").text('programma disinstallato');
	$(".intro .right-message .two").text('residuo di programmo rimosso');
	$(".intro .right-message .eight").text('estensione del browser rimossa');
	$(".intro .right-message .four").text('software scaduto aggiornato');
	$(".intro .right-message .five").text('programma ostinato disinstallato');
	$(".intro .right-message .six").text('programma in bundle disinstallato');
	$(".intro .right-message .seven").text('plug-in maligno rimosso');
}

$(window).on('scroll', function() {
	if ($(window).scrollTop() > $('.intro h2').offset().top) {
		$('.intro .one .left,.intro .one .right').addClass("on");
	}
	if ($(window).scrollTop() > $('.intro h2:eq(1)').offset().top) {
		$('.intro .two .left,.intro .two .right').addClass("on");
	}
	if ($(window).scrollTop() > $('.feature .iumouse').offset().top) {
		$('.feature .left img').addClass("on");
	}
	if ($(window).scrollTop() > $('.banner .buybtn').offset().top + 100) {
		$('.intro .left-message .mask').addClass("active");
		setTimeout(function() {
			$('.intro .left-message .star').addClass("active");
		}, 1000);
	}
});

$(function() {
	packsInit();
	setTimeout('getViewNum()', 12000);
	$(window).scrollWindow($(".payment"), $('.floatlayer'), ("on"));

	var listCount = $(".right-message:eq(0) li").length;
	if (listCount <= 2) {
		$(".right-message:eq(0)").addClass("two-list");
	} else if (listCount <= 4) {
		$(".right-message:eq(0)").addClass("four-list");
	} else if (listCount <= 6) {
		$(".right-message:eq(0)").addClass("six-list");
	}
	$('.intro .right-message .data1 h3 span').prop('number', 0).animateNumber({
		number: preData.fileSizeShow,
		numberStep: function(now, tween) {
			var target = $(tween.elem);
			target.text(preData.fileSizeShow);
		}
	}, 500);
	$('.intro .right-message .data2 h3 span').prop('number', 0).animateNumber({
		number: preData.soft
	}, 500);
	$('.intro .right-message .data3 h3 span').prop('number', 0).animateNumber({
		number: preData.leftOvers
	}, 500);
	$('.intro .right-message .data4 h3 span').prop('number', 0).animateNumber({
		number: preData.plugin
	}, 500);
	$('.intro .right-message .data5 h3 span').prop('number', 0).animateNumber({
		number: preData.softupdate
	}, 500);
	$('.intro .right-message .data6 h3 span').prop('number', 0).animateNumber({
		number: preData.stubborn
	}, 500);
	$('.intro .right-message .data7 h3 span').prop('number', 0).animateNumber({
		number: preData.bundle
	}, 500);
	$('.intro .right-message .data8 h3 span').prop('number', 0).animateNumber({
		number: preData.pluginMp
	}, 500);

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
	packs = cGet("itiuexpjune_p");
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
		url: "iu9preorderexp.php",
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
			url: "iu9preorderexp.php",
			data: "action=getViewNum",
			success: function(res) {
				$('.viewNum').html(res);
			}
		});
		setTimeout('getViewNum()', 12000);
	}
}

function getReTime() {
	var packsNumTotal = cGet('itiuexpjune_t');
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