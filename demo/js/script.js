
$.fn.userMouseover = function (UserMessage) {
	 $(this).mouseover(function(event) {
		var num = $(this).index();
		$(this).addClass("active").siblings().removeClass("active");
		$(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
	 });
};
$.fn.changeActive = function(clickName,buybtn,fun) {
	$(this).on(clickName,function() {
	 var num = $(this).index();
	 $(this).addClass("active").siblings().removeClass("active");
	 buybtn.attr("href",$(this).attr("data-url"));
	 buybtn.attr("onclick",$(this).attr("data-ga"));
	 $(".price").html($(this).attr("data-price"));
	 $(".original").html($(this).attr("data-original"));
	 fun(num);
 });
};
$.fn.changeActiveTwo = function(clickName,buybtn,fun) {
	$(this).on(clickName,function() {
	 var num = $(this).index();
	 $(this).addClass("active").siblings().removeClass("active");
	 buybtn.attr("href",$(this).attr("data-url"));
	 buybtn.attr("onclick",$(this).attr("data-ga"));
	 $(".price").html($(this).find("strong").html());
	 $(".original").html($(this).find("del").html());
	 fun(num);
 });
};
$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		}else {
			scrollclass.removeClass(ClassName);
		}
	});
};
$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};
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
(function ($) {
	$.fn.isOnScreen = function(x, y){
		if(x == null || typeof x == 'undefined') x = 1;
		if(y == null || typeof y == 'undefined') y = 1;
		var win = $(window);
		var viewport = {
				top : win.scrollTop(),
				left : win.scrollLeft()
		};
		viewport.right = viewport.left + win.width();
		viewport.bottom = viewport.top + win.height();
		var height = this.outerHeight();
		var width = this.outerWidth();
		if(!width || !height){
				return false;
		}
		var bounds = this.offset();
		bounds.right = bounds.left + width;
		bounds.bottom = bounds.top + height;
		var visible = (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
		if(!visible){
				return false;
		}
		var deltas = {
				top : Math.min( 1, ( bounds.bottom - viewport.top ) / height),
				bottom : Math.min(1, ( viewport.bottom - bounds.top ) / height),
				left : Math.min(1, ( bounds.right - viewport.left ) / width),
				right : Math.min(1, ( viewport.right - bounds.left ) / width)
		};
		return (deltas.left * deltas.right) >= x && (deltas.top * deltas.bottom) >= y;

	};
})(jQuery);