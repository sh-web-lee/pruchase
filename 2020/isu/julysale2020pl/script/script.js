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

function reduceNum(num) {
	$('.buyNum').html(num);
	$(".reduce").remove();
	$(".reduce-icon").removeClass("on");
	$(".reduceNum b").text(num);
	$(".reduceNum").append('<b class="reduce">' + num + '</b>');
	setTimeout('$(".reduce").addClass("on");', 300);
	setTimeout('$(".reduce-icon").addClass("on");', 1000);
}
// reduceNum(80);

function soldOut() {
	var aff = MApp(2.2).url.getParameters('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".banner,.gift-message,.floatlayer,.feature .price").addClass("soldout");
	$(".banner .right-message h2").html("<span>Przepraszamy, prezenty są już wyprzedane.</span> Jednak nadal masz szansę na <strong>55% ZNIŻKI</strong> na")
	$(".banner .right-message .progress").html("<h3>IObit Software Updater 3 PRO</h3> <p>Roczna subskrypcja / 3 PC</p>")
	$(".banner .right-message ul span:eq(0)").html("119,90 zł  ")
	$(".banner .right-message ul span:eq(1)").html(" 55% ")
	$(".banner .right-message ul span:eq(2)").html("70,00 zł")
	$(".floatlayer .number").html("<h2>Zwiększ komfort pracy TERAZ</h2>");
	$(".floatlayer .price del").html("119,90 zł");
	$(".feature .price span >span").remove();
	$(".floatlayer .wrapper").append("<p class='year'>Roczna subskrypcja / 3 PC</p>");

	$(".buybtn").attr({
		"href": 'http://www.iobit.com/buy.php?product=pl-isu33pc49&ref=pl_isu3pc49purchase1911' + refStr + '&refs=pl_purchase_isu&tw=' + tw,
		"onclick": "ga('send', 'event', 'isubuy', 'buy', 'isupurchase3PC1911-pl')"
	});
}

$(window).on('scroll', function() {
	if ($(window).scrollTop() > $('.service').offset().top) {
		$('.intro .left-message,.intro .right-message').addClass("on");
	}
	if ($(window).scrollTop() > $('.feature').offset().top) {
		$('.feature .left span').addClass("on");
	}
});

$(function() {
	$(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
	$('#dg-container').gallery();
	getNumber();
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

function getNumber() {
	num = cGet("julysale20200708pl");
	if (num == null) {
		num = Math.floor(Math.random() * (51 - 50)) + 50;
	} else {
		num--;
		if (num < 7) num = 7;
	}
	// pack(sales.packsNum, num);
	flipNum(num, 4);
	reduceNum(num);
	cSet('julysale20200708pl', num);
	t1 = (Math.random() > 0.5) ? 1.3 : 3.3;
	t2 = (Math.random() > 0.5) ? 10.3 : 13.3;
	reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
	if (num > 7) setTimeout('getNumber()', reTime);
	else return;
}