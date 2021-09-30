var countdown = function(countdown) {
	getCycleCountdown();
	$(countdown).eq(0).html('00').end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
	setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
	var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 00:00:00');
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

function soldOut() {
	$(".giftbox,.bottombuy").removeClass("sold").addClass("sold");
	$(".bottombuy li").removeClass("on");
	$(".bottombuy li.two").addClass("on");
	$(".bottombuy li .arrow").removeClass("arrowmove");
	$(".bottombuy li.two .arrow").addClass("arrowmove");
	$(".bottombuy .imgbox img").removeClass("on");
	$(".bottombuy .imgbox img.box").addClass("on");
	$(".mask").remove();
	$(".banner .offer.big, .giftbox dt, .bottombuy li.one").append('<div class="mask"><span class="sold-word">TERMINè</span></div>');
	var _href = $(".banner .offer.small").find(".buybtn").attr("href");
	var _ga = $(".banner .offer.small").find(".buybtn").attr("onclick");
	$(".giftbox .buybtn").attr({
		"href": _href,
		"onclick": _ga,
	});
	setTimeout('$(".sold-word").addClass("on")', 300);
}
// soldOut();

$(function() {
	countdown(".countdown b");
	$(".bottombuy li").on("mouseover", function() {
		if (!$(".bottombuy").hasClass("sold")) {
			var _index = $(this).index();
			$(".bottombuy li").find(".arrow").removeClass("arrowmove");
			$(this).find(".arrow").addClass("arrowmove");
			$(this).addClass('on').siblings().removeClass("on");
			$(".bottombuy .imgbox").find("img").eq(_index).addClass('on').siblings().removeClass("on");
		}
	});

	$(".usereview .users li").mouseover(function(event) {
		var num = $(this).index();
		$(this).addClass("current").siblings().removeClass("current");
		$(".userbox dl").eq(num).addClass("active").siblings().removeClass("active");
	});

	$(window).on('scroll', function() {
		if ($(window).scrollTop() > $(".payment").offset().top) {
			$(".intro-wrap > span").removeClass("on").addClass("on");
			setTimeout(function() {
				$(".intro-wrap > dl").removeClass("on").addClass("on");
			}, 500);
		}
	});

	packsInit();
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
	packs = 300;
	getSales(1);
}

function getSales(isInit) {
	var date = new Date();
	var vnum = 467;
	$.ajax({
		type: "GET",
		url: "flashsales.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				packs = sales.packsNum;
				unum = 300-parseInt(packs)
				vnum = vnum+unum;
				$('.packNum').html(packs);
				$('.vNum').html('4 762 '+vnum);
			}
			if (packs > 0) {
				setTimeout('getSales(0)', getReTime());
			} else {
				soldOut();
			}
		}
	});
}

function getReTime() {
	var packsNumTotal = cGet('dbmarflashfr_t');
	if (packsNumTotal > 1) {
		return (1200 / packsNumTotal) * 1000;
	} else {
		return 20000;
	}
}

function getViewNum() {
	$.ajax({
		type: "GET",
		url: "flashsales.php",
		data: "action=getViewNum",
		success: function(viewNum) {
			if (!isNaN(viewNum)) {
				$(".viewNum").html(viewNum);
			}
		}
	});
	setTimeout("getViewNum()", 30000);
}