function packNum(number, starnumber) {
	$('.buyNum').prop('number', starnumber).animateNumber({
		number: number
	}, 1500);
}


function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length, _time) {
	$(".nwrap .numlist span").remove();
	var number = PrefixInteger(num, length);
	var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	var list = '';
	var len = String(number).length;
	var str = number.toString();
	for (var j = 0; j < arr.length; j++) {
		list += '<span>' + arr[j] + '</span>';
	}
	$(".nwrap .numlist").append(list);
	for (var a = 0; a <= len; a++) {
		var curNum = str.substring(a, a + 1);
		$("#topNum .numlist").eq(a).animate({
			marginTop: -curNum * 31,
		}, _time);
		$("#botNum .numlist").eq(a).animate({
			marginTop: -curNum * 31,
		}, _time);
	}
}

function soldout() {
	var aff = MApp(2.2).url.getParameters('aff');
	$(".banner,.floatlayer,.price").removeClass("sold").addClass("sold");
	$(".banner .offer .right").find("h2").html('Oops!');
	$(".db-feature .buybtn span").remove();
	$(".banner .numbox").html('<h4>I pre-ordini gratuiti di Driver Booster non sono disponibili</h4><p>Ma ti regaliamo questo  <b>sconto del 70%</b> solo per te!</p>');
	$(".price li.first").html('<p><strong>€<big>22</big>,95</strong> <del>€74,85</del></p><p>Abbonamento 1 anno / 3 PC</p>');
	$(".floatlayer .numbox").html('Sii il primo a ricevere l’Ultimo Driver Booster 7 PRO <br> per Migliori Prestazioni su PC e Giochi');
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=it-db7preorder2295&ref=it_db7preorder2295exp'+refStr+'&aff=' + aff + '&refs=it_purchase_db&tw=-8',
		"onclick": "ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp2295-it');"
	});
}
// soldout();
$(document).ready(function() {
	$('#dg-container').gallery();
});

function cSet(name,value) {
	var Days=2;
	var exp = new Date();
	name=name+exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
	var exp = new Date();
	name=name+exp.getDate();
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	if (arr = document.cookie.match(reg))
		return unescape(arr[2]);
	else
		return null;
}

function packsInit() {
	packs=99;
	getSales(1);
}

function getSales(isInit) {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "db7preorderexp.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				packs = sales.packsNum;
				if(isInit){
					flipNum(sales.packsNum, 4, 1000);
				}else{
					flipNum(sales.packsNum, 4, 100);
				}
				if ((packs <= 0) && (!$(".banner,.floatlayer,.price").hasClass('sold'))) {
					soldout();
				}
			}
			if(packs>0){
				setTimeout('getSales(0)', getReTime());
			}
		}
	});
}

function getReTime(){
	var packsNumTotal=cGet('endbexp_t');
	if(packsNumTotal>1) {
		return (1200 / packsNumTotal) * 1000;
	}else{
		return 20000;
	}
}

function getViewNum() {
	$.ajax({
		type: "GET",
		url: "db7preorderexp.php",
		data: "action=getViewNum",
		success: function(res) {
			$('.buyNum').html(res);
		}
	});
	setTimeout('getViewNum()', 12000);
}

$(function() {
	packsInit(1);
	setTimeout('getViewNum()', 12000);
});
$(window).on('scroll', function() {
	if ($(window).scrollTop() > $(".banner .buybtn").offset().top + 100) {
		$('.forlist').addClass('on');
		$('.rocket').addClass('on');
		setTimeout('$(".foryou").addClass("first");', 2400);
	}
	if ($(window).scrollTop() > $(".forlist.right").offset().top - 50) {
		$('.hashow .left,.hashow .right').addClass('on');
		$('.hashow .point').addClass('on');
		setTimeout('$(".hashow").addClass("first");', 2400);
	}
	if ($(window).scrollTop() > $(".db-feature h2").offset().top - 200) {
		$('.featlist').addClass('on');
		$(".db-feature").addClass("first");
	}

	$('.floatlayer').removeClass('on');
	clearTimeout($.data(this, 'scrollTimer'));
	$.data(this, 'scrollTimer', setTimeout(function() {
		if ($(window).scrollTop() < $(".banner .buybtn").offset().top) {
			$('.floatlayer').removeClass('on');
			console.log("##");
		} else {
			if ($(".foryou").hasClass("first") && $(window).scrollTop() < $(".hashow h2").offset().top - 300) {
				$('.floatlayer').addClass('on');
			} else if ($(".hashow").hasClass("first")) {
				$('.floatlayer').addClass('on');
			} else {
				$('.floatlayer').removeClass('on');
			}
		}
	}, 300));
});