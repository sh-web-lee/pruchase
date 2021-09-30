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

var countdown = function(countdown) {
	getCycleCountdown();
	$(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
	setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
	var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

var review = function(index) {
	$(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};

var className = ["one", "two", "three", "four"];
var index = 1;
var nextFun = function() {
	var addName = className.pop();
	className.unshift(addName);
	for (var i = 0; i < $(".review ul li").length; i++) {
		$(".review ul li").eq(i).attr("class", className[i]);
	}
	if (index < 3) {
		index++;
		review(index);
	} else {
		index = 0;
		review(index);
	}
};
var prevFun = function() {
	var addName = className.shift();
	className.push(addName);
	for (var i = 0; i < $(".review ul li").length; i++) {
		$(".review ul li").eq(i).attr("class", className[i]);
	}
	if (index > 0) {
		index--;
		review(index);
	} else {
		index = 3;
		review(index);
	}

};


$(function() {
	countdown((".bottomcart .date strong"));
	countdown((".banner .date strong"));
	$(".more").target($(".comparison"), 0);

	$(".benefits .detail-list dl").hover(function() {
		$(this).addClass("active").siblings().removeClass("active");
		$(".benefits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
		$(".benefits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
	});

	$(window).scrollWindow($(".intro"), $('.floatlayer'), ("on"));

	$(window).scrollWindow($(".intro-beacon"), $('.intro dl'), ("on"));
});