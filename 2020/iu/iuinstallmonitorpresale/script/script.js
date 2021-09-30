$(function() {
	$('#dg-container').gallery();

	setTimeout(function() {
		$(".banner").find("[data-name^='default']").addClass('on');
	}, 600);
});


$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > $(".problem h2").offset().top) {
		$('.float').addClass('on');
	} else {
		$('.float').removeClass('on');
	}
	if ($(window).scrollTop() > scrollHeight) {
		$('.problem .message-box > div,.problem .message-box .screen').addClass("on");
	}
	if ($(window).scrollTop() > $('.feature').offset().top) {
		$('.feature .left-message,.feature .img-box').addClass("on");
	}
	if ($(window).scrollTop() > $('.benfits').offset().top - 100) {
		$('.benfits dl').addClass("on");
	}
});

/*getUrlParam*/
(function($) {
	$.getUrlParam = function(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return unescape(r[2]);
		return '';
	};
})(jQuery);

function soldOut(num) {
	var aff = MApp(2.2).url.getParameters('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	flipNum(0, 3);
	$(".banner,.float").addClass("sold");
	$(".float .number").html('Get the best uninstaller with <strong> 50% OFF</strong>');
	$(".price").find("strong").html("<del>$29.99</del> <span>$14.77</span>");
	setTimeout(function() {
		$(".price strong").addClass("remove");
	}, 500);
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=iu10preorder1477&ref=en-iu10preorderrcsoldout' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
		"onclick": "ga('send', 'event', 'iusoldbuy', 'buy', 'iu10predordercuninstall');"
	}).html("<span>Get It Now - 50% OFF</span>");
}
// soldOut();

function flipNum(num, length) {
	$(".listbox").remove();
	var _number = PrefixInteger(num, length);
	var _arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	var _list = '';
	var _len = String(_number).length;
	var _str = _number.toString();
	var _box = $(".reduceNum");
	var _createobj;
	for (var i = 0; i < length; i++) {
		if (length < 2) {
			_createobj = $(new Array(3).join('<div class="listbox"><div class="list"></div></div>'));
		} else {
			_createobj = $('<div class="listbox"><div class="list"></div></div>');
		}
		_box.append(_createobj);
	}
	for (var j = 0; j < _arr.length; j++) {
		_list += '<b>' + _arr[j] + '</b>';
	}
	$(".list").append(_list);
	for (var a = 0; a <= _len; a++) {
		var curNum = _str.substring(a, a + 1);
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

function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
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

function packsInit() {
	packs = cGet("eniu10mon_p");
	if (packs == null) {
		packs = 99;
		getSales(1);
	} else {
		flipNum(packs, 2);
		// $(".buyNum").html(500 - packs);
		// $(".giftNum").html(packs);
		if ((packs <= 0) && (!$(".banner,.float").hasClass('sold'))) {
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
		url: "iu10preorder.php?st=cleanuninstall",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				flipNum(sales.packsNum, 2);
				packs = sales.packsNum;
				// $(".buyNum").html(500 - packs);
				// $(".giftNum").html(packs);
				if ((packs <= 0) && (!$(".banner,.float").hasClass('sold'))) {
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
			url: "iu10preorder.php?st=cleanuninstall",
			data: "action=getViewNum",
			success: function(res) {
				// $('.viewNum').html(res);
			}
		});
		setTimeout('getViewNum()', 12000);
	}
}

function getReTime() {
	var packsNumTotal = cGet('eniu10mon_t');
	if ((packsNumTotal >= 49) && (packsNumTotal <= 58)) {
		return (420 / packsNumTotal) * 1000;
	} else {
		return 15000;
	}
}

$(function() {
	packsInit();
});