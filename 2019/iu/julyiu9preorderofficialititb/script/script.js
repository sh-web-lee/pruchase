



$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		} else {
			scrollclass.removeClass(ClassName);
		}
	});
};


$(window).on('scroll', function() {
	if ($(window).scrollTop() > $('.payment').offset().top) {
		$('.intro .message:eq(0),.intro .img-box:eq(0)').addClass("on");
	}
	if ($(window).scrollTop() > $('.intro h3').offset().top) {
		$('.intro .message:eq(1),.intro .img-box:eq(1)').addClass("on");
	}
	if ($(window).scrollTop() > $('.intro h3:eq(1)').offset().top) {
		$('.feature .left-img').addClass("on");
	}
});

$(function() {
	$(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
	$(".close").click(function() {
		$(".floatlayer").remove();
	});

	var sWidth = $(".review .relist").width();
	var len = $(".review .box dl").length;
	var index = 0;
	var picTimer;


	$(".review .prev").click(function() {
		index -= 1;
		if (index == -1) {
			index = len - 1;
		}
		showPics(index);
	});

	$(".review .next").click(function() {
		index += 1;
		if (index == len) {
			index = 0;
		}
		showPics(index);
	});
	$(".review .relist").css("width", sWidth * (len));

	function showPics(index) {
		var nowLeft = -index * sWidth;
		$(".review .relist").stop(true, false).css({
			"left": nowLeft
		});
		$(".review .box dl").removeClass("on").eq(index).addClass("on");
	}
});
