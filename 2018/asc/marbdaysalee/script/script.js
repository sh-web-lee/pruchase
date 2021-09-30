$('.review .handle li').hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});
$(".banner .gift-box").mouseover(function(event) {
	var num = $(this).index();
 if(!$(".banner .three-gift").hasClass("soldout")){
   $(this).addClass("shadow").siblings().removeClass("shadow");
	   if(num==2) {
			$(".banner .img-box").addClass("three-gift").removeClass("one-gift");
		}
		else {
			$(".banner .img-box").addClass("one-gift").removeClass("three-gift");
			
		}
	}
});
function flipNum(num, length) {
	var num = PrefixInteger(num, length)
	var len = String(num).length;
	var str = num.toString();
	var list = '';
	var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	var wid=num*3.6;
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .scroll-tick").html(list);
  $(".between-buy .scroll-tick").html(list);
	for (var i = 0; i <= len; i++) {
			var curNum = str.substring(i, i + 1);
			$(".banner .countdown .scroll-tick").eq(i).animate({
					marginTop: -curNum * 27,
			}, "slow");
			$(".between-buy .countdown .scroll-tick").eq(i).animate({
					marginTop: -curNum * 18,
			}, "slow");
	}
}
function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}
$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};
$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};
(function($){
    $.getUrlParam = function(name){
		var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    		var r = window.location.search.substr(1).match(reg);
    		if (r!=null) return unescape(r[2]); return '';
    }
})(jQuery);

function soldOut() {
	var aff = $.getUrlParam('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".banner .three-gift,.float .three-box,.between-buy .three-box").addClass("soldout").removeClass("active");
	$(".float .one-box,.banner .one-gift,.between-buy .one-box").addClass("active");
	$(".banner .img-box").addClass("one-gift").removeClass("three-gift");
	$(".banner .one-gift .buybtn").removeClass("blue").addClass("orange");
	$(".banner .three-gift .countdown,.between-buy .three-box .countdown").remove();
	$(".banner .gift-box.one-gift .buybtn").attr("href","https://www.iobit.com/buy.php?product=asc113pciot&ref=marbdaysaleemultid&aff="+aff+"&refs=purchase_asc&tw="+tw);
	$(".banner .gift-box.one-gift .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-maremultid');clickCount(7,'md top exp')");
	$(".between-buy .one-box .buybtn").attr("href","https://www.iobit.com/buy.php?product=asc113pciot&ref=marbdaysaleemultie&aff="+aff+"&refs=purchase_asc&tw="+tw);
	$(".between-buy .one-box .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-maremultie');clickCount(8,'md mid exp')");
	$(".float .buybtn").attr("href","https://www.iobit.com/buy.php?product=asc113pciot&ref=marbdaysaleemultif&aff="+aff+"&refs=purchase_asc&tw="+tw);
	$(".float .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-maremultif');clickCount(9,'md bot exp')");
}
function popMask() {
	$(".mask,.mask-box").addClass("active");
	cycleCountdown();
}
$(".mask-box .close,.mask-box .close-msg").on('click', function() {
	maskTime=-2;
	cSet('enascbm_t',maskTime);
	clickCount(12,'mask close');
    $(".mask-box,.mask").hide()
});
$(window).scrollWindow($(".strongpoint"),$('.asc-message p'),("on"));
$(window).scrollWindow($(".awards"),$('.float'),("on"));
$(".banner i.gift").target($(".between-buy"),0);

function packsInit(){
	var date = new Date();
	var cName = "enascbdaye" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		packs=100;
		type=1;
	} else {
		var packsArr = arr[2].split('%2A');
		if(packsArr[0]>0){
			packs=packsArr[0];
			type=1;
		}else{
			packs=packsArr[1];
			type=2;
			soldOut();
		}
	}

	flipNum(packs,3);
	timeCheck();
	setTimeout('getSales()', reTime * 1000);
}

function timeCheck() {
	if(type==1) {
		if (packs > 55) {
			reTime = 2;
		} else if (packs > 0) {
			reTime = 5.5;
		}
	}else{
		reTime=6;
	}
}

function getSales(reCheck) {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "bdaysalee.php",
		data: "action=getPacks&d=" + date.getDate()+"&type="+type,
		success: function (res) {
			var sales = JSON.parse(res);
			if(sales.packsNum!=packs) {
				packs = sales.packsNum;
				if((packs==0)&&($(".banner .gift-box,.between-buy .three-box,.float .three-box").hasClass('active'))){
					type=2;
					getSales(1);
					soldOut();
				}
				flipNum(packs,3);
				timeCheck();
			}
		}
	});
	if(reCheck!=1){
		setTimeout('getSales(0)', reTime * 1000);
	}
}

$(function(){
	packsInit(0);
	clickCount(0,'');
	timeInit();
});

function clickCount(cType,cDes){
	var date=new Date();
	var nowTime=Math.floor(date.getTime()/1000);
	$.ajax({
		type:'GET',
		url:'bdaysalee.php',
		data:'action=clickCount&timezone='+MApp(2.2).datetime.getTimeZone()+'&cType='+cType+'&cDes='+cDes+'&localTime='+nowTime+'&type='+type+'&packs='+packs
	})
}

function maskTimeCountDown() {
	if (maskTime > 0) {
		if (maskTime == 109) {
			$(document).bind('mousemove', mouseOut);
		}
		if (maskTime == 80) {
			$(document).unbind('mousemove', mouseOut)
		}
		maskTime--;
		cSet('enascbm_t', maskTime);
		setTimeout('maskTimeCountDown()', 1000);
	} else if ((maskTime == 0)) {
		$(document).bind('mousemove', mouseMove);
	}
}

function mouseOut(e) {
	if (e.clientY < 3) {
		mask();
		$(document).unbind('mousemove', mouseOut);
	}
}

function mouseMove(e) {
	mask();
	$(document).unbind('mousemove', mouseMove);
}

function mask(){
	maskTime=-1;
	cSet('enascbm_t',maskTime);
	clickCount(10,'mask pop');
	popMask();
	//maskCount(0);
}

function cycleCountdown() {
	remainTime = expireTimeCheck();
	if (remainTime > 0) {
		var s = ((remainTime % 60) < 10) ? ('0' + (remainTime % 60)) : (remainTime % 60);
		var m = Math.floor(remainTime / 60);
		$('.time-count span').eq(0).html("0" + m).end().eq(1).html(s);
		remainTime--;
		setTimeout('cycleCountdown()', 1000);
	} else {
		$('.time-count span').eq(0).html("00").end().eq(1).html("00");
		maskTime=-2;
		cSet('enascbm_t',maskTime);
		$(".mask-box,.mask").hide()
	}
}

function expireTimeCheck() {
	var expireTime = cGet('enascbm_e');
	if(expireTime==null){
		expireTime = Date.parse(new Date()) + 60 * 2 * 1000;
		cSet('enascbm_e', expireTime);
	}
	if (Date.parse(new Date()) < expireTime) {
		return (expireTime - Date.parse(new Date())) / 1000;
	} else {
		return false;
	}
}

function timeInit() {
	maskTime = cGet('enascbm_t');
	if (maskTime == null) {
		maskTime = 60 * 2;
		cSet('enascbm_t', maskTime);
	}
	if (maskTime == -1) {
		if (expireTimeCheck()) {
			mask();
		}
	}
	maskTimeCountDown();
}

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	name = name + exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
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
