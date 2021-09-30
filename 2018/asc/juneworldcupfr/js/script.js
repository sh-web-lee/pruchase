$.fn.target = function(target, yoffset) {
	$(this).click(function() {
		if (!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({
			scrollTop: Theigth
		}, 'slow');
	});
};
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
	$(".feature .textlink").target($("#compare"), 0);
	$(".feature .detail-list dl").hover(function() {
		$(this).addClass('active').siblings().removeClass("active");
		$(".feature .showcase .screenshot").css('marginLeft', -392 * ($(this).index()));
		$(".feature .zoom li").removeClass('active').eq($(this).index()).addClass('active');
	});
	$(window).scrollWindow($(".gift-box .box"), $('.review dl'), ("on"));

	$(".bottomcart ul li").click(function(event) {
		var num = $(this).index();
		$(this).addClass("active").siblings().removeClass("active");
		$(".bottomcart .buybtn").attr("href", $(this).attr("data-url"));
		$(".bottomcart .buybtn").attr("onclick", $(this).attr("data-ga"));
		$(".bottomcart .price").html($(this).attr("data-price"));
		$(".bottomcart .original").html($(this).attr("data-original"));
		if (num == 0) {
			$(".bottomcart .img").removeClass("three-pc").removeClass("one-pc");
		} else if (num == 1) {
			$(".bottomcart .img").addClass("three-pc").removeClass("one-pc");
		} else {
			$(".bottomcart .img").removeClass("three-pc").addClass("one-pc");
		}
	});

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

function timeinit() {
	countTime = cGet('frdbbd_c');
	if ((countTime == null)) {
		countTime = 4 * 3600;
		expireTime = Date.parse(new Date()) + countTime * 1000;
		cSet('frdbbd_c', countTime);
	}
	expireTime = Date.parse(new Date()) + countTime * 1000;
	cSet('frdbbd_t', expireTime);
	timeCountdown();
}

function timeCountdown() {
	var dateObj = new Date();
	var remainTime = expireTimeCheck();
	if (remainTime > 0) {
		var h = ('0' + (Math.floor(remainTime / 3600))).slice(-2);
		var s = ((remainTime % 60) < 10) ? ('0' + (remainTime % 60)) : (remainTime % 60);
		var m = ('0' + ((Math.floor(remainTime / 60)) % 60)).slice(-2);
		var mi = ('00' + (999 - dateObj.getMilliseconds())).slice(-3);
		$('.date strong').eq(0).html(h).end().eq(1).html(m).end().eq(2).html(s).end().eq(3).html(mi);
		setTimeout('timeCountdown()', 1);
	}
}

function expireTimeCheck() {
	var expireTime = cGet('frdbbd_t');
	if (Date.parse(new Date()) < expireTime) {
		countTime = (expireTime - Date.parse(new Date())) / 1000;
	} else {
		countTime = 4 * 3600;
		cSet('frdbbd_t', Date.parse(new Date()) + countTime * 1000);
	}
	cSet('frdbbd_c', countTime);
	return countTime;
}
timeinit();