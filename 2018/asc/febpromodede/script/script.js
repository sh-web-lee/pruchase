//userreview 
$.fn.scrollWindow = function (topheight, scrollclass, ClassName) {
		$(window).on('scroll', function () {
				if ($(window).scrollTop() > topheight.offset().top) {
						scrollclass.addClass(ClassName);
				} else {
						scrollclass.removeClass(ClassName);
				}
		});
};
function flipNum(num, length) {
		var num = PrefixInteger(num, length)
		var len = String(num).length;
		var str = num.toString();
		// console.log(len);
		for (var i = 0; i <= len; i++) {
				var curNum = str.substring(i, i + 1);
				$(".countdown .scroll-tick").eq(i).animate({
						marginTop: -curNum * 52,
				}, "slow");
		}
}
function PrefixInteger(num, length) {
		return (Array(length).join('0') + num).slice(-length);
}
$(".users li").mouseover(function (event) {
		var num = $(this).index();
		$(this).addClass("active").siblings().removeClass("active");
		$(".review .content > dl").eq(num).addClass("active").siblings().removeClass("active");
});
$(function () {
		if ($(document).scrollTop() > $(".intro").offset().top - 300) {
				$(".intro .list").addClass("active");
		}
		$(window).scrollWindow($(".cause"), $('.intro .list'), ("active"));
		$(window).scrollWindow($(".banner .buybtn:last"), $('.floatlayer'), ("on"));
		packsInit();
		$("#floatlayer .close").on('click', function(event) {
			$("#floatlayer").hide();
		});
});
function soldout() {
		$(".banner .three-box").removeClass("active");
		$(".banner .three-pc").addClass("active");
		$(".banner .three-pc .buybtn").addClass("middle").removeClass("border");
		$(".footbuy ul li").removeClass("active");
		$(".footbuy ul li").eq(2).addClass("default");
		$(".footbuy ul li").eq(1).addClass("active");
		$(".centbuy").addClass("default");
		threePc();
		$(".centbuy .buybtn").attr("href", "https://www.iobit.com/buy.php?product=de-asc113pc2499&ref=de_asc113pc2499purchase1802"+refStr+"&refs=de_purchase_asc");
		$(".centbuy .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1802-de')");
}
function onePc() {
		$(".footbuy dl strong b").html("22")
		$(".footbuy dl del").html("39,99€")
		$(".footbuy .left-img .box").addClass("one-pc").removeClass("three-pc");
		$(".footbuy dl .buybtn").attr("href", "https://www.iobit.com/buy.php?product=de-asc111pc2299&ref=de_asc111pc2299purchase1802"+refStr+"&refs=de_purchase_asc");
		$(".footbuy dl .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1802-de')");
}
function threePc() {
		$(".footbuy dl strong b").html("24")
		$(".footbuy dl del").html("59,99€")
		$(".footbuy .left-img .box").addClass("three-pc").removeClass("one-pc");
		$(".footbuy dl .buybtn").attr("href", "https://www.iobit.com/buy.php?product=de-asc113pc2499&ref=de_asc113pc2499purchase1802"+refStr+"&refs=de_purchase_asc");
		$(".footbuy dl .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1802-de')");
}
function threeBox() {
		$(".footbuy dl strong b").html("24")
		$(".footbuy dl del").html("99,94€")
		$(".footbuy .left-img .box").removeClass("three-pc").removeClass("one-pc");
		$(".footbuy dl .buybtn").attr("href", "https://www.iobit.com/buy.php?product=de-asc11iu3pc2499&ref=de_asc113pciu2499purchase1802"+refStr+"&refs=de_purchase_asc");
		$(".footbuy dl .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiu18021-de')");
}
function zoomout() {
		$(".pop-font").addClass("zoomout");
		setTimeout(function () {
				$(".pop-font").removeClass("zoomout");
		}, 800);
}
function pack(number) {
		$('.pack,.pop-font').prop('number', 129).animateNumber(
				{
						number: number
				},
				1000
		);
}
function commafy(num) {
		num = num + "";
		num = num.replace(/[ ]/g, "");
		if (num == "") {
				return;
		}
		if (isNaN(num)) {
				return;
		}
		var index = num.indexOf(".");
		if (index == -1) {
				var reg = /(-?\d+)(\d{3})/;
				while (reg.test(num)) {
						num = num.replace(reg, "$1.$2");
				}
		} else {
				var intPart = num.substring(0, index);
				var pointPart = num.substring(index + 1, num.length);
				var reg = /(-?\d+)(\d{3})/;
				while (reg.test(intPart)) {
						intPart = intPart.replace(reg, "$1.$2");
				}
				num = intPart + "." + pointPart;
		}
		return num;
}
function getSalesNum(packsNow) {
		var date = new Date();
		var daysDiff = Math.floor((date.getTime() - Date.parse('2017-11-17')) / (3600 * 24 * 1000));
		var buyNum = 66078707 + daysDiff * 164 + (164 - packsNow);
		$('.buyNum').html(commafy(buyNum));
}
$(".footbuy ul li").mouseover(function (event) {
		var num = $(this).index();
		if ($(this).hasClass('default')) {
				return;
		} else {
				if (num == 0) {
						onePc()
				}
				else if (num == 1) {
						threePc()
				}
				else {
						threeBox()
				}
				$(".footbuy ul li").removeClass('active');
				$(this).addClass('active');
		}
});
function packsInit() {
		var date = new Date();
		var cName = "deascfeb" + date.getDate();
		var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
		if (arr == null) {
				packs = 58;
		} else {
				packs = arr[2];
		}
		if((packs<=0)&&($(".banner .three-box").hasClass('active'))){
				soldout();
		}
		getSalesNum(packs);
		flipNum(packs,2);
		pack(200-packs);

		timeCheck();
		setTimeout('getSales()', reTime * 1000);
}
function getSales() {
		var date = new Date();
		$.ajax({
				type: "GET",
				url: "febpromode.php",
				data: "action=getPacks&d=" + date.getDate(),
				success: function (res) {
						var sales = JSON.parse(res);
						$("#floatlayer").removeClass('on');
						setTimeout("$('#floatlayer').addClass('on');", 800);
						$("#first").html(sales.firstName);
						$("#last").html(sales.lastName);
						if(sales.packsNum!=packs) {
								packs = sales.packsNum;
								if((packs<=0)&&($(".banner .three-box").hasClass('active'))){
										soldout();
								}
								$('.pop-font').html(200-packs);
								$('.pack').html(200-packs);
								flipNum(packs,2);
								zoomout();
								getSalesNum(packs);
								timeCheck();
						}
				}
		});
		setTimeout('getSales()', reTime * 1000);
}
function timeCheck() {
		if (packs > 36) {
				reTime = 3;
		} else {
				reTime = 13;
		}
}

