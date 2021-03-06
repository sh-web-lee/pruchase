$(document).ready(function() {
	$(".users li").mouseover(function(event) {
		var num = $(this).index();
		$(".users li").eq(num).addClass('current').siblings().removeClass('current');
		$(".review .content > dl").eq(num).addClass('active').siblings().removeClass('active');
	});
	$(".box span.one").addClass("one-end");
	$(".box span").addClass("active");

	packsGet();
	setNumber(packs);
	pack(packs);
	setTimeout('decreasingPacks(1)', 3000);
	setTimeout('getViewNum()', 60000);
});

function focus() {
	$('.left-message').append('<div class="reduce"><div class="num"></div><div class="ghost"></div></div>');
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
				$('.reduce').remove();
			}
		})
}
$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('#floatlayer').addClass('on');
		$('.float').addClass('on');
	} else {
		$('#floatlayer').removeClass('on');
		$('.float').removeClass('on');
	}
});

function setNumber(number) {
	var mark = /[.]/g;
	var n = String(number),
		len = n.length;
	var boxlen = $(".box span").length - len;
	var mark = n.indexOf(".");
	for (var i = 0; i < len; ++i) {
		var obj = $(".box span").eq(i + boxlen);
		var y = -44 * parseInt(n.charAt(i), 10) - 440;
		obj.animate({
			top: y + "px"
		}, 1200);
		if (len == 1) {
			$(".box span").eq(2).animate({
				top: "-440px"
			}, 1200);
		}
		if (len == 2) {
			$(".box span").eq(1).animate({
				top: "-440px"
			}, 1200);
		}
		if (len == 3) {
			$(".box span").eq(0).animate({
				top: "-440px"
			}, 1200);
		}
	}
	setTimeout(function() {
		$(".box span").removeClass("active");
	}, 2000);
};

function pack(number) {
	$('.pack').prop('number', 2000).animateNumber({
			number: number
		},
		1000
	);
}

function ChangeNumber(number) {
	focus();
	setTimeout(function() {
		setNumber(number);
		$(".pack").html(number);
	}, 1000);

}

function packsGet() {
	var date = new Date();
	var cName = "febcdb" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	packs = (arr == null) ? 78 : arr[2];
}

function decreasingPacks(isFirst) {
	var dateNow = new Date();
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getPacks&r=" + Math.random() + "&d=" + dateNow.getDate() + (isFirst == 1 ? '&f=1' : ''),
		success: function(sPacks) {
			var rePacks = packs - sPacks;
			if (rePacks > 0) {
				ChangeNumber(sPacks);
			}
			packs = sPacks;
			setTimeout('decreasingPacks()', 10000);
		}
	});
}

function getViewNum() {
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getViewNum",
		success: function(viewNum) {
			$('.viewNum').html(viewNum);
			setTimeout('getViewNum()', 60000);
		}
	});
}