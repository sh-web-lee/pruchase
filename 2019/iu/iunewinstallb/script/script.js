$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		} else {
			scrollclass.removeClass(ClassName);
		}
	});
};

function numberJump(target, num, starnumber, time) {
	target.prop('number', starnumber).animateNumber({
		number: num
	}, time);
}

function reduce(num) {
	$(".glist .imgbox").append('<span class="reduceImg"></span>');
	$(".gift").append('<b class="reduceGift">' + num + '</b>');
	setTimeout('$(".reduceGift").addClass("on");', 200);
	$(".reduceImg").css({
		"opacity": 0,
		"top": -14
	}).animate({
		"opacity": 1
	}, 500).animate({
		"top": -80,
		"opacity": 0
	}, 600);
	setTimeout('$(".reduceImg,.reduceGift").remove();', 1000);
}

var aff = MApp(2.2).url.getParameters('aff');
var arr = [{
	_href: "https://www.iobit.com/buy.php?product=iu10sdpfsm1pc&ref=en-iu1pcsdpfsminstallb" + refStr + "&aff=" + aff + "&refs=purchase_iu&tw=-8",
	_ga: "ga('send', 'event', 'iu1pcbuy', 'buy', 'iupurchase-newinstallb');",
	_price: '14'
}, {
	_href: "https://www.iobit.com/buy.php?product=iu10sdpfsm3pc&ref=en-iu3pcsdpfsminstallb" + refStr + "&aff=" + aff + "&refs=purchase_iu&tw=-8",
	_ga: "ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-newinstallb');",
	_price: '16'
}];

function selectList() {
	$("#clist li").click(function() {
		var index = $(this).index();
		$("#clist li").removeClass("active");
		$(this).addClass("on").siblings().removeClass("on");
		$("#clist li").click(function() {
			$(this).addClass("active").siblings().removeClass("active");
		});
		$(".allprice p").find("span").text(arr[index]._price);
		$(".buybtn,.fbtn").attr({
			"href": arr[index]._href,
			"onclick": arr[index]._ga,
		});
		if (index === 1) {
			$("#clist .imgbox b").addClass("three");
		} else {
			$("#clist .imgbox b").removeClass("three");
		}
		$("#clist .imgbox img").css({
			"opacity": 0,
		}).animate({
			"opacity": 1
		}, 500);
		setTimeout("$('#clist .imgbox img').stop(true, true);", 600);
	});
}

$(function() {
	packsInit();
	$('#dg-container').gallery();
	selectList();
});

function packsInit() {
	var date = new Date();
	var cName = "eniunewinsb_p" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		packs = 98;
	} else {
		packs = arr[2];
	}
	reduce(packs);
	numberJump($('.giftNum'), parseInt(packs), 500, 1500);
	getSales();
}

function getSales() {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "newinstallb.php",
		data: "action=getSales&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				numberJump($('.giftNum'), parseInt(sales.packsNum), parseInt(packs), 1500);
				packs = parseInt(sales.packsNum);
				reduce(packs);
			}
		}
	});
	setTimeout('getSales()', getRetime());
}

function getRetime() {
	var reTime = 20;
	if (packs > 48) {
		reTime = 6;
	}
	return reTime * 1000;
}