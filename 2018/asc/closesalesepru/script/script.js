$.fn.target = function(target, yoffset) {
	$(this).click(function() {
		if (!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({
			scrollTop: Theigth
		}, 'slow');
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
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function reduce(number, starnumber) {
	$('.reducebox').append('<span class="reduce"></span>');
	$(".reduce").addClass("reduceNum");
	$('.giftnum').prop('number', starnumber).animateNumber({
		number: number
	}, 1500);
	setTimeout('$(".reduce").remove()', 1100);
}

$(function() {
	$('#dg-container').gallery();
	$(".textlink").target($("#compare"), 0);
	countdown(("#bantime b"));
	countdown(("#footime b"));
	// reduce(49, 50);

	$(".feature .detail-list dl").hover(function() {
		$(this).addClass('active').siblings().removeClass("active");
		$(".feature .showcase .screenshot").css('marginLeft', -377 * ($(this).index()));
	});
	packsInit();
});

function packsInit() {
	var date = new Date();
	var cName = "ruasc" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		packs = 80;
	} else {
		packs = arr[2];
	}
	reduce(packs, 80);
	setTimeout('getPacks()', 7500);
}

function getPacks() {
	var date = new Date();
	$.ajax({
		type: 'GET',
		url: 'index.php',
		data: 'action=getSales&d=' + date.getDate(),
		success: function(sPacks) {
			if (!isNaN(sPacks)) {
				if (sPacks != packs) {
					reduce(parseInt(sPacks), parseInt(packs));
					packs = sPacks;
				}
			}
		}
	});
	setTimeout('getPacks()', 7500);
}