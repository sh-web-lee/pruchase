//target
$.fn.target = function(target, yoffset) {
	$(this).click(function() {
		if (!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({
			scrollTop: Theigth
		}, 'slow');
	});
};
//countdown
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

//floatlayer
function showFloat(subject, target) {
	var scrollHeight = $(subject).offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$(target).addClass('on');
	} else {
		$(target).removeClass('on');
	}
}
$(document).ready(function() {
	$(".comparebtn").target($(".comparison"));

	$(window).on('scroll', function() {
		showFloat(".payments", "#floatlayer");
	});

	$(".floatlayer .close").on("click", function() {
		$(".floatlayer").remove();
	});
	$('#dg-container').gallery();

	countdown((".banner .countdown strong"));
	countdown((".complimentary .countdown strong"));
	countdown((".floatlayer .countdown strong"));
	//switchover
	var cArr = ["shot3", "shot2", "shot1"];
	var index = 0;
	//next
	$(".showcase .next").click(function() {
		nextimg();
	});
	//prev
	$(".showcase .prev").click(function() {
		previmg();
	});
	//previmg
	function previmg() {
		cArr.unshift(cArr[2]);
		cArr.pop();
		$(".showcase .imglist li").each(function(i, e) {
			$(e).removeClass().addClass(cArr[i]);
		});
		index--;
		if (index < 0) {
			index = 2;
		}
	}
	//nextimg
	function nextimg() {
		cArr.push(cArr[0]);
		cArr.shift();
		$(".showcase .imglist li").each(function(i, e) {
			$(e).removeClass().addClass(cArr[i]);
		});
		index++;
		if (index > 2) {
			index = 0;
		}
	}

	$(document).on("click", ".shot1", function() {
		previmg();
		return false;
	});

	$(document).on("click", ".shot3", function() {
		nextimg();
		return false;
	});
});