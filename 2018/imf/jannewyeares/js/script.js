$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		}else {
			scrollclass.removeClass(ClassName);
		}
	});
};
$.fn.target=function (target) {
	$(this).click(function() { 
		var Theigth = target.offset().top;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
}
var countdown = function (countdown){
  getCycleCountdown();
	$(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
	setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
	var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		}else {
			scrollclass.removeClass(ClassName);
		}
	});
};