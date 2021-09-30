var tw = MApp(2.2).datetime.getTimeZone();
var buyLinkArr = []; //db dbsd dbiu dbsdiu
if (refStr.indexOf('fspi') == -1) {
	buyLinkArr = [
		"https://www.iobit.com/buy.php?product=enaff-driverbooster72395&ref=cyri_enaff_db7_2019launchsale" + refStr + "&aff=" + affStr + "&tw=" + tw,
		"https://www.iobit.com/buy.php?product=enaff-db7sd&ref=cyri_enaff_db7_2019launchsale" + refStr + "&aff=" + affStr + "&tw=" + tw,
		"https://www.iobit.com/buy.php?product=enaff-db7iu&ref=cyri_enaff_db7_2019launchsale" + refStr + "&aff=" + affStr + "&tw=" + tw,
		"https://www.iobit.com/buy.php?product=enaff-db7sdiu&ref=cyri_enaff_db7_2019launchsale" + refStr + "&aff=" + affStr + "&tw=" + tw
	];
} else {
	buyLinkArr = [
		"https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-2395?ref=cyri_enaff_db7_2019launchsale" + refStr,
		"https://iobit.onfastspring.com/driver-booster-pro-with-smart-defrag-pro-2495?ref=cyri_enaff_db7_2019launchsale" + refStr,
		"https://iobit.onfastspring.com/driver-booster-pro-with-iobit-uninstaller-pro-2495?ref=cyri_enaff_db7_2019launchsale" + refStr,
		"https://iobit.onfastspring.com/driver-booster-pro-valued-pack-2595?ref=cyri_enaff_db7_2019launchsale" + refStr
	]
}
$.fn.userMouseover = function(UserMessage) {
	$(this).mouseover(function(event) {
		var num = $(this).index();
		$(this).addClass("active").siblings().removeClass("active");
		$(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
	});
};

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		} else {
			scrollclass.removeClass(ClassName);
		}
	});
};

$.fn.target = function(target, yoffset) {
	$(this).click(function() {
		if (!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({
			scrollTop: Theigth
		}, 'slow');
	});
};

function addUrl(name) {
	switch (name) {
		case "sd":
			$(".buybtn").attr({
				"href": buyLinkArr[1],
				"onclick": "ga('send', 'event', 'cyridbbuy', 'buy', 'enaffdb72019launchsale')",
			});
			break;
		case "iu":
			$(".buybtn").attr({
				"href": buyLinkArr[2],
				"onclick": "ga('send', 'event', 'cyridbbuy', 'buy', 'enaffdb72019launchsale')",
			});
			break;
		case "iusd":
			$(".buybtn").attr({
				"href": buyLinkArr[3],
				"onclick": "ga('send', 'event', 'cyridbbuy', 'buy', 'enaffdb72019launchsale')",
			});
			break;
		default:
	}
}

function soldProduct() {
	$(".mask, .only").remove();
	$(".banner .price .tips").remove();
	$(".banner .offer, .footbuy, .giftbox ul").removeClass("sold").addClass("sold");
	$(".banner .offer .right").removeClass("unchecked");
	$(".banner .offer .center,.giftbox li,.footbuy .wrapper").append('<div class="mask"><span>SOLDOUt</span></div>');
	$(".footbuy .wrapper").append('<div class="all-icons add">+</div>');
	$(".footbuy ul li").removeClass("on");
	setTimeout(function() {
		$(".mask span").addClass("zoomout");
	}, 300);
	$(".banner .offer .right").removeClass("two");
	$(".banner .right ul").html('<li class="one"><h3>Driver Booster 7 PRO <span><b><small>$</small>23.95</b> <del>$74.85</del></span></h3><p>1 year subscription / 3 PCs</p></li>');
	$(".banner .price").append('<p class="only">only $1.99 / Month </p>');
	$(".comparison table").append('<tfoot><tr><th colspan="2"></th><th class="itemb"><p>Only <strong>$23.95</strong></p><a class="buybtn"><i class="all-icons"></i> <span>Activate Now</span></a><p>1 Year Subscription / 3 PCs</p></th></tr></tfoot>');
	$(".price strong big").text("23");
	$(".buybtn").attr({
		"href": buyLinkArr[0],
		"onclick": "ga('send', 'event', 'cyridbbuy', 'buy', 'enaffdb72019launchsale')",
	});
	$(".subscript em").text("3");
}
// soldProduct();

function _hide() {
	$(".banner .exclus,.giftbox .exclus").addClass("_hide");
	$(".banner .new,.giftbox .new").removeClass("_hide");
}

$(function() {
	$(".buybtn").attr("href", buyLinkArr[3]);
	var paramTo = MApp(2.2).url.getParameters('to');
	if ($.inArray(paramTo, ['hombnrn', 'prebtnn']) == -1) {
		_hide();
	}
	timeInit();
	countdown("#bancountdown b", "#footcountdown b");
	$(".giftbox li").target($(".banner"), 0);
	$(window).scrollWindow($(".choose"), $('.feature dl'), ("on"));
	$(".users li").userMouseover($(".content dl"));

	var price = 0;
	var arr = [{
		id: "0",
		cname: "sd",
		name: "Smart Defrag PRO",
		original: " $19.99"
	}, {
		id: "1",
		cname: "iu",
		name: "IObit Uninstaller PRO",
		original: " $19.99"
	}];


	$(".offer .center li, .footbuy li").on("click", function() {
		$(".mask, .only").remove();
		$(".banner .offer .right").removeClass("unchecked");
		var parClass = $(this).parent().attr("id");
		var index = $(this).index();
		var length = $(".banner .right li").length;
		//console.log(length);
		var cid = $(".banner .center li").eq(index).attr("id");

		var allprice = parseInt($(".banner .price strong big").text());
		//console.log(allprice);
		var arrPrePrice = [];
		var allName;

		if (!$(this).hasClass("on")) {
			$(this).addClass("on");
			switch (parClass) {
				case "banlist":
					$(".footbuy li").eq(index).addClass("on");
					break;
				case "footlist":
					$("..offer .center li").eq(index).addClass("on");
					break;
				default:
			}
			if (0 < length < 4) {
				$(".banner .price .tips").remove();
				$(".banner .price").append('<div class="tips"><i class="all-icons">!</i><div class="txt"><p>The price shown in the page is valid only for this promotion.</p><p>Your Driver Booster subscription will continue after the initial subscription period at the non-promotional price of $29.99.</p><p>If you choose the Driver Booster 7 bundle pack, all products will also continue after the first year at the normal price shown in the page below.</p><p class="bottom">Cancel Auto-renewal</p><p>If you do not want to participate in the auto-renewal plan, you can uncheck the Auto-renewal box in shopping cart review page or in your account at any time before the start of the next subscription.</p></div></div>');
				$(".offer .right ul").append("<li class='" + arr[index].cname + "'><h3>" + arr[index].name + "<span><b><small>$</small>1</b> <del>" + arr[index].original + "</del></span></h3><p>1 year subscription / 1 PC</p></li>");
				$(".banner .price strong big,.footbuy .price strong big").text(allprice + 1);
				$('.banner .right li').each(function() {
					arrPrePrice.push($(this).attr("class"));
				});
				arrPrePrice.splice(0, 1);
				arrPrePrice.sort();
				allName = arrPrePrice.join("");
				addUrl(allName);
				if (allName.length === 4) {
					$(".banner .offer .right").addClass("two");
				} else {
					$(".banner .offer .right").removeClass("two");
				}
			}
			//console.log("yes:" + length);
		} else {
			$(this).removeClass("on");
			$(".banner .price .tips").remove();
			$(".banner .price").append('<div class="tips"><i class="all-icons">!</i><div class="txt"><p>The price shown in the page is valid only for this promotion.</p><p>Your Driver Booster subscription will continue after the initial subscription period at the non-promotional price of $29.99.</p><p>If you choose the Driver Booster 7 bundle pack, all products will also continue after the first year at the normal price shown in the page below.</p><p class="bottom">Cancel Auto-renewal</p><p>If you do not want to participate in the auto-renewal plan, you can uncheck the Auto-renewal box in shopping cart review page or in your account at any time before the start of the next subscription.</p></div></div>');
			length = length - 1;
			switch (parClass) {
				case "banlist":
					$(".footbuy li").eq(index).removeClass("on");
					break;
				case "footlist":
					$("..offer .center li").eq(index).removeClass("on");
					break;
				default:
			}
			if (0 < length < 4) {
				switch (cid) {
					case "sd":
						$(".banner .right li.sd").remove();
						break;
					case "iu":
						$(".banner .right li.iu").remove();
						break;
					default:
				}
				$(".banner .price strong big,.footbuy .price strong big").text(allprice - 1);
				$('.banner .right li').each(function() {
					arrPrePrice.push($(this).attr("class"));
				});
				var arrone = arrPrePrice.length;
				arrPrePrice.splice(0, 1);
				arrPrePrice.sort();
				allName = arrPrePrice.join("");
				addUrl(allName);
				if (allName.length === 4) {
					$(".banner .offer .right").addClass("two");
				} else {
					$(".banner .offer .right").removeClass("two");
				}
				if (arrone === 1) {
					$(".banner .price strong big,.footbuy .price strong big").text("23");
					$(".banner .offer .right").removeClass("unchecked").addClass("unchecked");
					$(".banner .price").append('<p class="only">only $1.99 / Month </p>');
					$(".buybtn").attr({
						"href": buyLinkArr[0],
						"onclick": "ga('send', 'event', 'cyridbbuy', 'buy', 'enaffdb72019launchsale')",
					});
					$(".banner .price .tips").remove();
				}
			}
			//console.log("no:" + length);
		}
	});
});

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
	var date = new Date();
	var cName = "endbannicyri_tnew" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime = Math.floor(date.getTime() / 1000);
	if (arr == null) {
		countTime = nowTime + 300;
		cSet(cName, countTime);
	} else {
		countTime = parseInt(arr[2]);
	}
}

function timeCountDown(startTimestamp) {
	var dateObj = new Date();
	var time = dateObj.getTime().toString().substring(0, 10);
	var remainingTime = startTimestamp - time;
	if (remainingTime > 0) {
		var d = Math.floor(remainingTime / (24 * 60 * 60));
		var h = Math.floor(remainingTime / (60 * 60) % 24);
		var i = Math.floor(remainingTime / 60 % 60);
		var s = Math.floor(remainingTime % 60);
		var mi = 999 - dateObj.getMilliseconds();
		if (mi < 10) {
			mi = '00' + mi;
		} else if (mi < 100) {
			mi = '0' + mi;
		}
		return [d, h, i, s, mi];
	} else {
		return [0, 0, 0, 0, 0];
	}
}

function getCycleCountdown(endTime) {
	var datetime = timeCountDown(endTime);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

var countdown = function(countdown1, countdown2) {
	var statusNow = statusSet();
	if (statusNow == 1) {
		getCycleCountdown(countTime);
		$(countdown1).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
		$(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
	}
	setTimeout("countdown('" + countdown1 + "','" + countdown2 + "')", 1);
};

function statusSet() {
	var statusNow = statusCheck();
	if (statusNow == 2) {
		//if($(".footbuy li").eq(1).hasClass('active')){
		if (!$(".banner .offer, .footbuy, .giftbox ul").hasClass('sold')) {
			$(".countdown").html('<i class="all-icons">Hurry!</i> Only <b>00</b>M:<b>00</b>S:<b>00</b>Ms Left');
			soldProduct();
		}
	}
	return statusNow;
}

function statusCheck() {
	var date = new Date();
	var timeNow = date.getTime() / 1000;
	if (timeNow < countTime) {
		return 1;
	} else {
		return 2;
	}
}