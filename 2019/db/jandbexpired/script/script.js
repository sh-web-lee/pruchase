$(document).ready(function() {
	$('#dg-container').gallery();
	$('.progress-bar .bar >span').addClass("normal");
	setTimeout(function() {
		$('.progress-bar .bar >span').removeClass("normal");
	}, 1000);
	//countdown((".date strong"));
	//countdown((".float .date strong"));

});
$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('.float').addClass('on');
	} else {
		$('.float').removeClass('on');
	}
	if ($(window).scrollTop() > scrollHeight) {
		$('.screenshot div').addClass('on');
	} else {
		$('.screenshot div').removeClass('on');
	}
});

function focus() {
	$(".reduce").css({
		"opacity": 1,
		"top": -10,
		"zIndex": 8
	}).animate({
		"opacity": 0,
		"top": -60,
		"zIndex": -9
	}, 500);
	var num = $(".banner .left-number .gift").text() - 1;
	//flipNum(num);
	$(".left-number .gift").html(num);
}

function pack(number, starnumber) {
	$('.gift').prop('number', starnumber).animateNumber({
			number: number
		},
		1500
	);
}

function soldout() {
	$(".banner,.float").addClass("soldout");
	$(".progress-bar").html("Don't Miss Out This Valuable <span>80%</span> Discount Again").addClass("soldout");
	$(".db-feature .buybtn span").html("80%");
	$(".banner dl dt strong").html("<span>$</span>16<span>.</span><b>99</b>");
	$(".buybtn").attr("href", "https://www.iobit.com/buy.php?product=db83pc1699&ref=en-db3pc1699soldoutexp" + refStr + "&refs=purchase_db&tw=-8");
	$(".buybtn").attr("onclick", "ga('send', 'event', 'dbexpbuysold1699', 'buy', 'dbpurchase-expired201905');");
}

function flipNum(num) {
	var number = num * 3.7;
	$(".progress-bar .bar >span").css("width", number);
}

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
		url: "dbexp.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				flipNum(sales.packsNum);
				pack(sales.packsNum, packs);
				packs = sales.packsNum;
				if (isInit) {
					setTimeout('focus()', 1500);
				} else {
					focus();
				}
				if ((packs <= 0) && (!$(".banner,.float").hasClass('soldout'))) {
					soldout();
				}
			}
			if (packs > 0) {
				setTimeout('getSales(0)', getReTime());
			}
		}
	});
}

function getReTime() {
	var packsNumTotal = cGet('endbexp_t');
	if (packsNumTotal > 1) {
		return (1200 / packsNumTotal) * 1000;
	} else {
		return 20000;
	}
}

function getViewNum() {
	$.ajax({
		type: "GET",
		url: "dbexp.php",
		data: "action=getViewNum",
		success: function(res) {
			$('.viewNum').html(res);
		}
	});
	setTimeout('getViewNum()', 12000);
}

$(function() {
	packsInit();
	setTimeout('getViewNum()', 12000);
});