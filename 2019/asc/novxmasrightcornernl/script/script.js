function soldout() {
	//threePc();
	$(".banner .packs").addClass("three-packs");
	$(".banner .three-pcs").addClass("sold-out");
	$(".banner .packs .button,.bottomcart .button").attr("href", $(".gifts.exceed .button").attr("href"));
	$(".gifts.default").remove();
	$(".gifts.exceed").removeClass("hide");
	$(".bottomcart").addClass("exceed");
	$(".bottomcart h2").html("Gun Deze Feestdagen Uw Computer een Geweldige Opknapbeurt")
	$(".banner h2").html("Cadeaus uitverkocht. Pak 60% Kerstkorting nu het nog kan!")
	$(".packs .price strong b,.bottomcart .price strong b").html("19");
	$(".banner .packs del,.bottomcart del").html("€49,99");
	$(".bottomcart .date").remove();
}

function goTarget(target, yoffset) {
	if (!yoffset) yoffset = 0;
	var Theigth = target.offset().top - yoffset;
	$("html, body").animate({
		scrollTop: Theigth
	}, 'slow');
}

$(".benfits .detail-list dl").hover(function() {
	$(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index() + 1));
	$(".benfits .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
	$(this).addClass("active").siblings().removeClass("active");
	$(".benfits .list-icon li").removeClass('active').eq($(this).index() + 1).addClass('active');
});
$(".benfits .list-icon li").hover(function() {
	$(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index()));
	$(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
	var num = $(this).index()
	if (num == 0) {

		$(".benfits .detail-list dl").removeClass("active");
	} else {
		$(".benfits .detail-list dl").eq($(this).index() - 1).addClass("active").siblings().removeClass("active");
	}
	$(".benfits .list-icon li").removeClass('active')
	$(this).addClass('active');
});


$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		} else {
			scrollclass.removeClass(ClassName);
		}
	});
};


$(function() {
	timeInit();
	$('#dg-container').gallery();
	countdown(".banner .date strong", ".gifts .date strong", ".bottomcart .date strong");
});

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
	var date = new Date();
	var cName = "nlascxmas_t" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime = Math.floor(date.getTime() / 1000);
	if (arr == null) {
		countTime = nowTime + 408;
		cSet(cName, countTime);
	} else {
		countTime = parseInt(arr[2]);
	}
}

function timeCountDown(startTimestamp) {
	var dateObj = new Date();
	var time = dateObj.getTime().toString().substring(0, 10);
	var remainingTime = startTimestamp - time;
	if (remainingTime > 0) {
		var d = Math.floor(remainingTime / (24 * 60 * 60));
		var h = Math.floor(remainingTime / (60 * 60) % 24);
		var i = Math.floor(remainingTime / 60 % 60);
		var s = Math.floor(remainingTime % 60);
		var mi = Math.floor((999 - dateObj.getMilliseconds()) / 10);
		return [d, h, i, s, mi];
	} else {
		return [0, 0, 0, 0, 0];
	}
}

var countdown = function(countdown, countdown1, countdown2) {
	var statusNow = statusSet();
	getCycleCountdown(countTime);
	$(countdown).eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
	$(countdown1).eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
	$(countdown2).eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
	if (statusNow == 1) {
		setTimeout("countdown('" + countdown + "','" + countdown1 + "','" + countdown2 + "')", 1);
	}
};

function getCycleCountdown(endTime) {
	var datetime = timeCountDown(endTime);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 2);
}

function statusSet() {
	var statusNow = statusCheck();
	if (statusNow == 2) {
		if (!$(".banner .three-pcs").hasClass('"sold-out"')) {
			soldout();
		}
	}
	return statusNow;
}

function statusCheck() {
	var date = new Date();
	var timeNow = date.getTime() / 1000;
	if (timeNow < countTime) {
		return 1;
	} else {
		return 2;
	}
}