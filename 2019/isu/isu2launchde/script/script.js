function flipNum(num, length) {
	var num = PrefixInteger(num, length);
	var len = String(num).length;
	var str = num.toString();
	var list = '';
	var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	for (var j = 0; j < arr.length; j++) {
		list += '<span>' + arr[j] + '</span>';
	}
	$(".floatlayer .countdown .scroll-tick").html(list);
	for (var i = 0; i <= len; i++) {
		var curNum = str.substring(i, i + 1);
		$(".floatlayer .countdown .scroll-tick").eq(i).animate({
			marginTop: -curNum * 42,
		}, "slow");
	}
	var number = num * 3.38 + 18;
	$(".progress .bar .box").css("width", number);
}

function dissolve() {
	$(".disappear").css({
		"opacity": 0,
		"top": 10
	}).animate({
		"opacity": 1
	}, 500).animate({
		"top": -25,
		"opacity": 0
	}, 500);
}

function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
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

function pack(number, starnumber) {
	$('.buyNum').prop('number', starnumber).animateNumber({
			number: number
		},
		1500
	);
	$('.packnum').html(500 - number);
}

function soldOut() {
	var aff = MApp(2.2).url.getParameters('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".banner,.gift-message,.floatlayer,.feature .price").addClass("soldout");
	$(".banner .right-message h2").html("<span>Es tut uns leid, es sind leider keine Geschenke mehr auf Lager.</span> Sie haben <strong>50% RABATT</strong> auf den");
	$(".banner .right-message .progress").html("<h3>IObit Software Updater 2 PRO</h3> <p>1 Jahr / 3 PCs</p>");
	$(".banner .right-message ul span:eq(0)").html("29,99€");
	$(".banner .right-message ul span:eq(1)").html("50%");
	$(".banner .right-message ul span:eq(2)").html("15€");
	$(".floatlayer .number").html("<h2>Aktualisiere deine Programme <br>Schließe jetzt Sicherheitslücken</h2>");
	$(".floatlayer .price del").html("$29,99");
	$(".feature .price span >span").remove();
	$(".floatlayer .wrapper").append("<p class='year'>1 Jahr / 3 PCs</p>");

	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=de-isu23pc1499&ref=de_isu3pcsoldout1499' + refStr + '&aff=' + aff + '&refs=de_purchase_isu&tw=' + tw,
		"onclick": "ga('send', 'event', 'isu3pcbuy', 'buy', 'isupurchase-de');"
	});
}
// soldOut();

$(window).on('scroll', function() {
	if ($(window).scrollTop() > $('.banner .buybtn').offset().top) {
		$('.intro .left-message,.intro .right-message').addClass("on");
	}
	if ($(window).scrollTop() > $('.feature').offset().top) {
		$('.feature .left span').addClass("on");
	}
});

$(function() {
	$(window).scrollWindow($(".banner ul"), $('.floatlayer'), ("on"));
	$('#dg-container').gallery();
	packsInit();
	setTimeout("getViewNum()", 30000);
});

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	name = name + exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
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

function packsInit() {
	packs = 99;
	getSales(1);
}

function getSales(isInit) {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				pack(sales.packsNum, packs);
				packs = sales.packsNum;
				flipNum(packs, 4);
				dissolve();
				if ((packs <= 0) && (!$(".banner,.gift-message,.floatlayer,.feature .price").hasClass('soldout'))) {
					soldOut();
				}
			}
			if (packs > 0) {
				setTimeout('getSales(0)', getReTime());
			}
		}
	});
}

function getReTime() {
	var packsNumTotal = cGet('isulaun_t');
	if (packsNumTotal > 1) {
		return (1200 / packsNumTotal) * 1000;
	} else {
		return 20000;
	}
}

function getViewNum() {
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getViewNum",
		success: function(viewNum) {
			if (!isNaN(viewNum)) {
				$(".viewNum").html(viewNum);
			}
		}
	});
	setTimeout("getViewNum()", 30000);
}