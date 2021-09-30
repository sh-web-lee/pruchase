function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
	// $(".listbox .list").remove();
	$(".listbox .list").html("");
	var _number = PrefixInteger(num, length);
	var _arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	var _list = '';
	var _len = String(_number).length;
	var _str = _number.toString();
	var _box = $(".reduceNum");
	var _createobj;
	// for (var i = 0; i < length; i++) {
	// 	if (length < 2) {
	// 		_createobj = $(new Array(3).join('<div class="listbox"><div class="list"></div></div>'));
	// 	} else {
	// 		_createobj = $('<div class="listbox"><div class="list"></div></div>');
	// 	}
	// 	_box.append(_createobj);
	// }
	for (var j = 0; j < _arr.length; j++) {
		_list += '<b>' + _arr[j] + '</b>';
	}
	$(".list").append(_list);
	for (var a = 0; a <= _len; a++) {
		var curNum = _str.substring(a, a + 1);
		$("#reduce .list").eq(a).animate({
			marginTop: -curNum * 28,
		}, "slow");
		$("#fReduce .list").eq(a).animate({
			marginTop: -curNum * 28,
		}, "slow");
	}
	var width = num * 1.4;
	$(".banner .bar span").css("width", width);
}

function soldOut() {
	var aff = MApp(2.2).url.getParameters('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
  $(".sec1,.floatlayer").addClass("sold");
  $(".sec1 .reduceNum, .floatlayer .reduceNum ").css({ display: "none" });
  $(".price").find("strong").html("$14.77 <sub>$29.99</sub>");
  $(".buybtn").attr({
    "href": 'https://www.iobit.com/buy.php?product=iu11preorder1477&ref=en-iu11preorderexpsoldout' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
    "onclick": "ga('send', 'event', 'iusoldbuy', 'buy', 'iu11preorderexp');",
  });
}
// soldOut();

function autoPlay(index) {
	var itemLen = $(".sec6 .pageation");
	var timer = setInterval(function() {
		$(".sec6 .pageation").eq(index).addClass("on").siblings().removeClass("on");
		$(".sec6 .item").eq(index).addClass("on").siblings().removeClass("on");
		index++;
		if (index >= itemLen.length) {
			index = 0;
		}
	}, 30000);
}
autoPlay(0);

//css3 滚动动画
function css3anistart() {
	$(window).scroll(function () {
		var windowTop = $(window).scrollTop() - 500;
		var itemTop = $(".sec3").offset().top;
		// console.log(itemTop, windowTop);
		if (windowTop > $(".sec3").offset().top -800) {
			$(".sec3 .tag").addClass("on");
			$(".animated .btn-roate").css('animation', 'rotate2 2s linear alternate');
		}
		//小球飞出		
	   if(windowTop >= 0){
		   $('.sec2-left').addClass('sec2-left fly');
		   $('.sec2-one').addClass('sec2-one fly_right1');
		   $('.sec2-two').addClass('sec2-two fly_right2');
		   $('.sec2-three').addClass('sec2-three fly_right3');
	   }
		if (windowTop >= 300) {
			$('.floatlayer').fadeIn();
		} else {
			$('.floatlayer').fadeOut();
		}
		$(".parts").each(function (index, element) {
			var thheight = $(this).height()
			var tdelays = $(this).data("tdelay")
			var thtops = $(this).offset().top;
			var bottomHeight = $('.sec7').offset().top;
			$(this).css("transition-delay", tdelays);
			if (windowTop >= (thtops - 1000) && windowTop < (thheight + thtops)) {
				if (!$(this).hasClass("animated")) {
					$(this).addClass("animated");
				}
			} else if (windowTop >= bottomHeight) {
				//th.removeClass("animated")	
				$(this).addClass("animated");
			}
		});
	});
}

$(function() {
	css3anistart();
	packsInit();
	setTimeout('getViewNum()', 15000);
	$(".pageations").on("click", ".pageation", function() {
		var _index = $(this).index();
		console.log(_index);
		console.log($(".sec6 .text .item").eq(_index));
		$(this).addClass("on").siblings().removeClass("on");
		$(".sec6 .text .item").eq(_index).addClass("on").siblings().removeClass("on");
	})
})

function packsInit() {
	// packs = cGet("eniujune_p");
	// if (packs == null) {
	// 	packs = 99;
	// 	getSales(1);
	// } else {
	// 	flipNum(packs, 3);
	// 	$(".buyNum").html(500 - packs);
	// 	$(".giftNum").html(packs);
	// 	if ((packs <= 0) && (!$(".banner,.floatlayer").hasClass('sold'))) {
	// 		soldOut();
	// 	} else {
	// 		setTimeout('getSales(0)', 1000);
	// 	}
	// }
	packs = 99;
	getSales(1);
}

function getSales() {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "iu11preorderexp.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				flipNum(sales.packsNum, 3);
				packs = sales.packsNum;
				$(".buyNum").html(500 - packs);
				$(".giftNum").html(packs);
				if ((packs <= 0) && (!$(".sec1,.floatlayer").hasClass('sold'))) {
					soldOut();
				}
			}
			if (packs > 0) {
				setTimeout('getSales()', getReTime());
			}
		}
	});
}

function getViewNum() {
	if (packs > 0) {
		$.ajax({
			type: "GET",
			url: "iu11preorderexp.php",
			data: "action=getViewNum",
			success: function(res) {
				$('.viewNum').html(res);
			}
		});
		setTimeout('getViewNum()', 12000);
	}
}

function getReTime() {
	total = cGet('eniu11exp_t')

	slow = (420/total) - 1;
	fast = (420/total) + 1;

	reTime = (Math.random() > 0.5) ? slow : fast;

	return reTime * 1000;
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