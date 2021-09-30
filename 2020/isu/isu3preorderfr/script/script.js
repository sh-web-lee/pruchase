function flipNum(num, length) {
	var num = PrefixInteger(num, length);
	var len = String(num).length;
	var str = num.toString();
	var list = '';
	var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	for (var j = 0; j < arr.length; j++) {
		list += '<b>' + arr[j] + '</b>';
	}
	$(".floatlayer .giftNum .nwrap strong").html(list);
	$(".banner .giftNum .nwrap strong").html(list);
	for (var i = 0; i <= len; i++) {
		var curNum = str.substring(i, i + 1);
		$(".floatlayer .giftNum .nwrap strong").eq(i).animate({
			marginTop: -curNum * 28,
		}, "slow");
	}
	for (var i = 0; i <= len; i++) {
		var curNum = str.substring(i, i + 1);
		$(".banner .giftNum .nwrap strong").eq(i).animate({
			marginTop: -curNum * 28,
		}, "slow");
	}
}


function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

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
	$(".banner,.floatlayer").addClass("soldout");
	$(".banner .right-message .number").html("Oups ! Les préventes à 0€ ne sont plus disponibles mais vous pouvez profiter de 50% de réduction.");
	$(".floatlayer .number").html("Profitez de 50% de réduction !");
	$(".price span").html("<strong>€<b>14</b>,99</strong> <del> €29,99</del>")
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=fr-isu3preorder1499&ref=fr_isu3preorder1499' + refStr + '&aff=' + aff + '&refs=fr_purchase_isu&tw=' + tw,
		"onclick": "ga('send', 'event', 'isusoldbuy', 'buy', 'isu3preorder-fr');"
	});
}
// soldOut();

$(window).on('scroll', function() {
	if ($(window).scrollTop() > $('.banner .buybtn').offset().top) {
		$('.intro dl').addClass("on");
		$('.floatlayer').addClass("on");
		setTimeout("$('.floatlayer').removeClass('nomal');", 2000);
	} else {
		$('.floatlayer').removeClass("on");
	}
});

$(function() {
	packsInit();
	setTimeout("getViewNum()", 30000);

	var continer = $(".review  .content").width();
	if ($('.review  .roll').length != 0) {
		var count = $('.review  .roll .message').length;
		$('.review  .roll').css('width', continer * count);
	};

});
$('.review .prev').click(function(event) {
	var continer = $(".review  .content").width();
	$('.review .roll').stop(true, true).animate({
		marginLeft: -continer
	}, 'slow', function() {
		$('.review .roll').css('marginLeft', '0');
		$('.review .roll').find('.message:first').appendTo($('.review .roll'));
	});
});
$('.feature .message-list li').hover(function(event) {
	var numbox = $('.feature .message-list li.active').index();
	var num = $(this).index();
	if (numbox != num) {
		$(this).addClass("active").siblings().removeClass("active");
		$(".feature .img-box .box li[data-num=\'" + num + "\']").prependTo($('.feature .box'));
		$('.feature .img-box .box').css('marginTop', -355);
		$('.feature .img-box .box').stop(true, true).animate({
			marginTop: 0
		}, 'slow');
	}
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
	packs = 78;
	getSales(1);
}

function getSales(isInit) {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "isu3preorder.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				pack(sales.packsNum, packs);
				packs = sales.packsNum;
				flipNum(packs, 2);
				if ((packs <= 0) && (!$(".banner,.floatlayer").hasClass('soldout'))) {
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
	t1 = (Math.random() > 0.5) ? 2 : 4;
	t2 = (Math.random() > 0.5) ? 6 : 8;
	return reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
}


function getViewNum() {
	$.ajax({
		type: "GET",
		url: "isu3preorder.php",
		data: "action=getViewNum",
		success: function(viewNum) {
			if (!isNaN(viewNum)) {
				$(".viewNum").html(viewNum);
			}
		}
	});
	setTimeout("getViewNum()", 15000);
}