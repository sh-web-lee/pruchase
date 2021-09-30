function flipNum(num, length) {
	var num = PrefixInteger(num, length);
	var len = String(num).length;
	var str = num.toString();
	var list = '';
	var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
	var wid = num * 3.6;
	for (var j = 0; j < arr.length; j++) {
		list += '<span>' + arr[j] + '</span>';
	}
	$(".banner .scroll-tick").html(list);
	for (var i = 0; i <= len; i++) {
		var curNum = str.substring(i, i + 1);
		$(".countdown .scroll-tick").eq(i).animate({
			marginTop: -(9 - curNum) * 32,
		}, "slow");
	}
}

function numInit(num, length) {
	var num = PrefixInteger(num, length);
	var len = String(num).length;
	var str = num.toString();
	var list = '';
	var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
	var wid = num * 3.6;
	for (var j = 0; j < arr.length; j++) {
		list += '<span>' + arr[j] + '</span>';
	}
	$(".banner .scroll-tick").html(list);
	for (var i = 0; i <= len; i++) {
		var curNum = str.substring(i, i + 1);
		$(".countdown .scroll-tick").eq(i).animate({
			marginTop: -(9 - curNum) * 32,
		}, 1200);
	}
}

function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}
$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		} else {
			scrollclass.removeClass(ClassName);
		}
	});
};

function reduce(num) {
	$('.banner .left-img').append('<div class="reduce reduce' + num + '"></div>');
	setTimeout(function() {
		$('.banner .left-img .reduce').remove();
	}, 1000);
}
$(window).scrollWindow($(".gift-message dd.last"), $('.between-buy'), ("on"));

$(document).ready(function() {
	packsInit();
});

function packsInit() {
	var date = new Date();
	var cName = "enimfar" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		packs = 56;
	} else {
		packs = arr[2];
	}
	numInit(packs, 2);
	timeCheck();
	setTimeout('getSales()', reTime * 1000);
}

function timeCheck() {
	if (packs > 36) {
		reTime = 3;
	} else {
		reTime = 15;
	}
}

function getSales() {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "sb.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				reduce(packs - sales.packsNum);
				packs = sales.packsNum;
				flipNum(packs, 2);
				timeCheck();
			}
		}
	});
	setTimeout('getSales()', reTime * 1000);
}