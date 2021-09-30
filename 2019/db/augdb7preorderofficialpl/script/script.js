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
  var tw =  MApp(2.2).datetime.getTimeZone();
  $(".banner,.floatlayer,.price").removeClass("sold").addClass("sold");
  $(".banner .offer .right").find("h2").html('Ups!');
  $(".banner .numbox").html('<h4>Darmowa przedsprzedaż Driver Booster jest niedostępna</h4><p>Mamy jednak <b>70% zniżki</b> specjalnie dla Ciebie</p>');
  $(".price li.first").html('<p><strong><big>79</big>,90 zł</strong> <del>279,90 zł</del></p><p>Roczna subskrypcja / 3 PC\n</p>');
  $(".floatlayer .numbox").html('Bądź pierwszy! Uzyskaj najnowszą wersję Driver Booster 7 PRO<br> dla lepszej wydajności komputera i gier');
  $(".buybtn").attr({
    "href": 'https://www.iobit.com/buy.php?product=pl-db7preorder79&ref=pl_db7preorderofficial79' + refStr + '&aff=' + aff + '&refs=pl_purchase_db&tw=' + tw,
    "onclick": "ga('send', 'event', 'dbbuy', 'buy', 'db7preorderofficial79-pl');"
  });
}

$(window).on('scroll', function() {
	var _timer;
	var _timer1;
	var _timer2;

	if ($(window).scrollTop() > $(".why").offset().top + 100) {
		$('.maglist').addClass('on');
		_timer1 = setTimeout('$(".db-message").addClass("first");', 800);
	}
	if ($(window).scrollTop() > $(".maglist.three").offset().top + 100) {
		$('.featlist').addClass('on');
		_timer2 = setTimeout('$(".db-feature").addClass("first");', 3200);
	}

	$('.floatlayer').removeClass('on');
	clearTimeout($.data(this, 'scrollTimer'));
	$.data(this, 'scrollTimer', setTimeout(function() {
		$('.floatlayer').addClass('on');
		if ($('.floatlayer').hasClass("on") && $(window).scrollTop() < $(".banner .buybtn").offset().top) {
			$('.floatlayer').removeClass('on');
		} else {
			$('.floatlayer').addClass('on');
			if ($(window).scrollTop() > $(".why").offset().top - 200 && !$(".db-message").hasClass("first")) {
				$('.floatlayer').removeClass('on');
			} else if ($(window).scrollTop() > $(".maglist.three").offset().top - 100 && !$(".db-feature").hasClass("first")) {
				$('.floatlayer').removeClass('on');
			} else {
				$('.floatlayer').addClass('on');
			}
		}
	}, 300));
});

$(document).ready(function() {
	$('#dg-container').gallery();
});

function setUnit(packsNum) {
	var unitStrBefore = 'Pozostało';
	var unitStrAfter = 'jedynie';
	var unitStrBottom='zostało tylko';
	var packsLast = packsNum % 10;
	var packsLastTwo = packsNum % 100;
	if(packsNum==1){
		unitStrBottom='został tylko';
		unitStrBefore='Pozostał';
		unitStrAfter='tylko';
	} else if (($.inArray(packsLast, [2, 3, 4]) != -1)&&($.inArray(packsLastTwo,[12,13,14])==-1)) {
		unitStrBefore = 'Pozostały';
		unitStrBottom='zostały tylko';
	}
	$('.unit-bef').html(unitStrBefore);
	$('.unit-af').html(unitStrAfter);
	$('.unit-bottom').html(unitStrBottom);
}

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
		url: "db7preorderofficial.php",
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
				setUnit(packs);
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
		url: "db7preorderofficial.php",
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