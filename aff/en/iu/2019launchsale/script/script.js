function showFloat() {
	var scrollHeight = $('.banner').height();
	if ($(window).scrollTop() > scrollHeight) {
		$('.float').addClass('on');
	} else {
		$('.float').removeClass('on');
	}
}
$(document).ready(function() {
	$(".review .users li").mouseover(function(event) {
		var num = $(this).index();
		$(".review .users li").eq(num).addClass('current').siblings().removeClass('current');
		$(".review dl").eq(num).addClass('active').siblings().removeClass('active');
	});
});

function onPosition() {
	var tBar = new TimelineLite();
	var sNum = 78 - packs;
	tBar.to('.progress .counter', 1.5, {
			left: (382 + sNum) + 'px',
			onStart: function() {
				$('.countNum').prop('number', 2000);
				$('.countNum').animateNumber({
					number: packs,
				}, 1500);
			}
		})
		.to('.progress .progressbar', 1.5, {
			width: packs + 'px',
			onComplete: function() {
				$('.progress .counter').addClass('positioned');
				$('.progress .progressbar').addClass('positioned');
			}
		}, '-=1.5');
}

function reduce(nPacks, bPacks) {
	var num = bPacks - nPacks;
	var counterLeft = 460 - nPacks;
	var barLeft = packs;

	$('.focus').append('<div class="reduce reduce' + num + '"><div class="num"></div><div class="ghost"></div></div>');
	var tReduce = new TimelineLite();
	tReduce.from('.reduce .num', 0.5, {
			scale: 0.5,
			autoAlpha: 0
		})
		.from('.reduce .ghost', 0.5, {
			opacity: 0,
			autoAlpha: 0
		}, '-=0.1')
		.to('.reduce', 1, {
			y: -100,
			autoAlpha: 0,
			onComplete: function() {
				$('.progress .counter').css('left', counterLeft);
				$('.progress .progressbar').css('width', barLeft);
				$('.focus .reduce').remove();
				var curNumber = Number(nPacks);
				$('.countNum').html(curNumber);
				$('.progress .counter').append('<em class="numGhost">' + curNumber + '</em>');
				TweenLite.to($('.numGhost'), 0.5, {
					scale: 3,
					autoAlpha: 0,
					onComplete: function() {
						$('.numGhost').remove();
					}
				});
			}
		})
}

$(window).on('scroll', function() {
	showFloat();
});

$(function() {
	packsGet();
	showFloat();
	onPosition();
	setTimeout('decreasingPacks()', 20000);

	var paramTo = MApp(2.2).url.getParameters('to');
	if ($.inArray(paramTo, ['prombn', 'promrn']) >= 0) {
		prombn();
	}
});

function goTaget(target) {
	var Theigth = target.offset().top;
	$("html, body").animate({
		scrollTop: Theigth
	}, 'slow');
}

function packsGet() {
	var date = new Date();
	var cName = "eniu_launch" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	packs = (arr == null) ? 78 : arr[2];
}

function decreasingPacks() {
	var dateNow = new Date();
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getPacks&r=" + Math.random() + "&d=" + dateNow.getDate(),
		success: function(sPacks) {
			var rePacks = packs - sPacks;
			if (rePacks > 0) {
				reduce(sPacks, packs);
			}
			packs = sPacks;
			setTimeout('decreasingPacks()', 20000);
		}
	});
}

function prombn() {
	$(".banner .title").addClass("prombn");
	$(".gift-pack").addClass("prombn");
}