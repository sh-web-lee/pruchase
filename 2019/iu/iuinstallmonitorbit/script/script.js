$(function() {
	$('#dg-container').gallery();

	$(window).on('scroll', function() {
		if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
			$('.float').addClass('on');
		} else {
			$('.float').removeClass('on');
		}
		if ($(window).scrollTop() > $(".feature .title-small").offset().top - 250) {
			$('.feature-box').removeClass("on").addClass("on");
		}
		if ($(window).scrollTop() > $(".benfits h2").offset().top - 150) {
			$('.benfits-box dl').removeClass("on").addClass("on");
		}
	});
});


function twinkle() {
	$(".numberbox").addClass("twinkle");
	setTimeout(function() {
		$(".numberbox").removeClass("twinkle");
	}, 2000);
}

/* getUrlParam */
(function($) {
	$.getUrlParam = function(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return unescape(r[2]);
		return '';
	};
})(jQuery);

function soldOut(num) {
	var aff = $.getUrlParam('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".banner,.float,.btnbox,.buybtn").removeClass("sold").addClass("sold");
	$(".btnbox .hurry").html("Offerta speciale del 65%<br> DI SCONTO conclusa. <p class='zoomout'>Offerta speciale del 65%<br> DI SCONTO conclusa.</p>");
	$(".banner .buybtn").html("<h4>Attiva ora e risparmia 60%</h4> Non perderlo di nuovo!");
	$(".price b").html("16");
	$(".numberbox").removeClass("twinkle");

	$(".buybtn").not(".buybtn-pop").attr("href", "https://www.iobit.com/buy.php?product=it-iu113pc1499&ref=it_iu113pc1499monitorb" + refStr + "&aff=" + aff + "&refs=it_purchase_iu&tw=" + tw);
	$(".buybtn").not(".buybtn-pop").attr("onclick", "ga('send', 'event', 'iubuy', 'buy', 'iupurchase-monitorb-it');");
}


function popbox() {
	$(".pop-over,.pop-bg").addClass("active");
}
$(".pop-bg .close").click(function() {
	$(".pop-over,.pop-bg").remove();
});
// soldOut();
// popbox();

function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
	var num = PrefixInteger(num, length);
	var len = String(num).length;
	var str = num.toString();
	var list = '';
	var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	for (var j = 0; j < arr.length; j++) {
		list += '<em>' + arr[j] + '</em>';
	}
	$(".banner .numberbox .scroll").html(list);
	$(".float .numberbox .scroll").html(list);
	for (var i = 0; i <= len; i++) {
		var curNum = str.substring(i, i + 1);
		$(".banner .numberbox .scroll").eq(i).animate({
			marginTop: -curNum * 44,
		}, "slow");
		$(".float .numberbox .scroll").eq(i).animate({
			marginTop: -curNum * 34,
		}, "slow");
	}

}

function pack(number, starnumber) {
	$('.gift').prop('number', starnumber).animateNumber({
			number: number
		},
		1500
	);
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

function mouseOut(e) {
	if (e.clientY < 3) {
		if (packs > 0) {
			mask(1);
		}
		$(document).unbind('mousemove', mouseOut);
	}
}

function mouseMove() {
	if (packs > 0) {
		mask(1);
	}
	$(document).unbind('mousemove', mouseMove);
	$(document).unbind('mousemove', mouseOut);
}

function mask(scroll) {
	//if(packs>0) {
	if ((scroll == 1) && (maskTime == -1)) {
		return false;
	} else {
		maskTime = -1;
		cSet('mask_t', maskTime);
		var expireTime = cGet('mask_e');
		if (expireTime == null) {
			expireTime = Date.parse(new Date()) + 60 * 1000;
			cSet('mask_e', expireTime);
		}
		if (expireTimeCheck()) {
			popbox();
			cycleCountdown();
		}
	}
	//}
}

function expireTimeCheck() {
	var expireTime = cGet('mask_e');
	if (Date.parse(new Date()) < expireTime) {
		return (expireTime - Date.parse(new Date())) / 1000;
	} else {
		return false;
	}
}

function cycleCountdown() {
	remainTime = expireTimeCheck();
	if (remainTime > 0) {
		var s = ((remainTime % 60) < 10) ? ('0' + (remainTime % 60)) : (remainTime % 60);
		var m = Math.floor(remainTime / 60);
		$(".count-time").html(s);
		remainTime--;
		setTimeout('cycleCountdown(remainTime)', 1000);
	} else {
		$(".pop-over,.pop-bg").remove();
	}
}

function timeInit() {
	maskTime = cGet('mask_t');
	if (maskTime == null) {
		maskTime = 60 * 2;
		cSet('mask_t', maskTime);
	}
	if (maskTime == -1) {
		if (expireTimeCheck()) {
			mask();
		}
	}
	mouseCheck = 0;
	maskTimeCountDown();
}

function maskTimeCountDown() {
	if (maskTime > 0) {
		if (maskTime == 110) {
			$(document).bind('mousemove', mouseOut);
		}
		if (maskTime == 80) {
			$(document).unbind('mousemove', mouseOut);
		}
		maskTime--;
		cSet('mask_t', maskTime);
		setTimeout('maskTimeCountDown()', 1000);
	} else if ((maskTime == 0)) {
		$(document).bind('mousemove', mouseMove);
	}
}

function packsInit() {
	var date = new Date();
	var cName = "itiumon_b" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		packs = null;
		getPacks(1);
	} else {
		packs = arr[2];
		if (packs > 0) {
			flipNum(packs, 4);
			pack(packs, 100);
			setTimeout('getPacks()', getReTime());
		} else {
			flipNum(0, 4);
			soldOut();
		}
	}
	setTimeout('getViewNum()', 15000);
}

function getPacks(isInit) {
	var date = new Date();
	$.ajax({
		type: 'GET',
		url: 'installmonitorb.php',
		data: 'action=getSales&d=' + date.getDate(),
		success: function(sPacks) {
			if (!isNaN(sPacks)) {
				if (sPacks != packs) {
					if (isInit) {
						if (!isNaN(sPacks)) {
							cSet('itiumonb_t', sPacks);
						}
						pack(sPacks, 100);
					} else {
						pack(parseInt(sPacks), parseInt(packs));
					}
					flipNum(sPacks, 4);
					packs = sPacks;
				}

				if (sPacks <= 0) {
					if (!$(".banner,.float ").hasClass('sold')) {
						flipNum(0, 4);
						soldOut();
					}
				} else if (sPacks <= 10) {
					twinkle();
				}
			}
		}
	});
	setTimeout('getPacks()', getReTime());
}

function getReTime() {
	var packsTotal = cGet('itiumonb_t');
	var reTime = 6.3;
	if ((packsTotal !== null) && (!isNaN(packsTotal))) {
		reTime = (20 * 60 / parseInt(packsTotal)).toFixed(2);
	}
	return reTime * 1000;
}

function getViewNum() {
	if (packs > 0) {
		$.ajax({
			type: "GET",
			url: "installmonitorb.php",
			data: "action=getViewNum",
			success: function(res) {
				$('.viewNum').html(res);
			}
		});
		setTimeout('getViewNum()', 15000);
	}
}

$(function() {
	packsInit();
	timeInit();
});