function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
	$(".listbox").remove();
	var number = PrefixInteger(num, length);
	var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	var list = '';
	var len = String(number).length;
	var str = number.toString();
	var box = $(".reduceNum");
	var createobj;
	for (var i = 0; i < length; i++) {
		if (length < 2) {
			createobj = $(new Array(3).join('<div class="listbox"><div class="list"></div></div>'));
		} else {
			createobj = $('<div class="listbox"><div class="list"></div></div>');
		}
		box.append(createobj);
	}
	for (var j = 0; j < arr.length; j++) {
		list += '<b>' + arr[j] + '</b>';
	}
	$(".list").append(list);
	for (var a = 0; a <= len; a++) {
		var curNum = str.substring(a, a + 1);
		$("#reduce .list").eq(a).animate({
			marginTop: -curNum * 42,
		}, "slow");
		$("#fReduce .list").eq(a).animate({
			marginTop: -curNum * 42,
		}, "slow");
	}
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

function soldOut() {
	var aff = MApp(2.2).url.getParameters('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".discount,.annotation,.rush").remove();
	$(".steps").children().remove();
	$(".banner,.feature,.floatlayer").removeClass("sold").addClass("sold");
	$(".steps").removeClass("on").addClass("on");
	flipNum(0, 4);
	$(".banner").find(".change").html("$0 preorder reservations are full, don't miss out this <span>discount again!</span>");
	$(".banner .left, .floatlayer .imgbox").append('<span class="discount">55% OFF</span>');
	setTimeout('$(".discount").addClass("on")', 300);
	$(".floatlayer").find(".change").html("$0 preorder reservations are full");
	$(".floatlayer").find(".three").append("<p>Don't miss out this <span>discount again!</span></p>");
	$(".feature .price li.first").find("p").remove();
	$(".price").find("strong").html("$<big>12</big>.97");
	// $(".buybtn").attr({
	// 	"href": 'https://www.iobit.com/buy.php?product=isu23pc1297&ref=isu2preordersoldout&aff=' + aff + '&refs=purchase_isu&tw=' + tw,
	// 	"onclick": "ga('send', 'event', 'isusoldbuy', 'buy', 'isu2predorder');"
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=isu23pc1297&ref=isu2preordersoldout'+refStr+'&aff=' + aff + '&refs=purchase_isu',
		"onclick": "ga('send', 'event', 'isusoldbuy', 'buy', 'isu2predorder');"
	});
}

$(window).on('scroll', function() {
	if ($(window).scrollTop() > $('.banner .buybtn').offset().top) {
		$('.intro .one .left,.intro .one .right').addClass("on");
	}
	if ($(window).scrollTop() > $('.intro h2').offset().top) {
		$('.intro .two .left,.intro .two .right').addClass("on");
	}
	if ($(window).scrollTop() > $('.intro .two .safe').offset().top) {
		$('.feature .left span').addClass("on");
	}
});

$(function() {
	packsInit();
	setTimeout('getViewNum()', 15000);
	$(window).scrollWindow($(".steps"), $('.floatlayer'), ("on"));
	var sWidth = $(".review .content").width();
	var len = $(".review .content li").length;
	var index = 0;
	var picTimer;

	$(".review .prev,.review .next").css("opacity", 0.6).hover(function() {
		$(this).stop(true, false).animate({
			"opacity": "1"
		}, 300);
	}, function() {
		$(this).stop(true, false).animate({
			"opacity": "0.6"
		}, 300);
	});

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
	$(".review .content ul").css("width", sWidth * (len));

	function showPics(index) {
		var nowLeft = -index * sWidth;
		$(".review .content ul").stop(true, false).css({
			"left": nowLeft
		});
		$(".review .content li").removeClass("on").eq(index).addClass("on");
		$(".review .left li").removeClass("on").eq(index).addClass("on");
	}
});

function packsInit(){
	packs=cGet("enisumar_p");
	if(packs==null){
		packs=99;
		getSales(1);
	}else{
		flipNum(packs,4);
		$(".buyNum").html(500-packs);
		$(".giftNum").html(packs);
		if ((packs <= 0) && (!$(".banner,.feature,.floatlayer").hasClass('sold'))) {
			soldOut();
		}else{
			setTimeout('getSales(0)', 1000);
		}
	}
}

function getSales() {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "isu2preorder.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				flipNum(sales.packsNum,4);
				packs = sales.packsNum;
				$(".buyNum").html(500-packs);
				$(".giftNum").html(packs);
				if ((packs <= 0) && (!$(".banner,.feature,.floatlayer").hasClass('sold'))) {
					soldOut();
				}
			}
			if(packs>0){
				setTimeout('getSales(0)', getReTime());
			}
		}
	});
}

function getViewNum() {
	if(packs>0) {
		$.ajax({
			type: "GET",
			url: "isu2preorder.php",
			data: "action=getViewNum",
			success: function (res) {
				$('.viewNum').html(res);
			}
		});
		setTimeout('getViewNum()', 15000);
	}
}

function getReTime(){
	var packsNumTotal=cGet('enisumar_t');
	if((packsNumTotal>=78)&&(packsNumTotal<=98)){
		return (1200/packsNumTotal)*1000;
	}else{
		return 15000;
	}
}

function cGet(name) {
	var exp = new Date();
	name = name + exp.getDate();
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	if (arr = document.cookie.match(reg))
		return unescape(arr[2]);
	else
		return null;
}

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	name = name + exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}