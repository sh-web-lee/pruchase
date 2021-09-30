$('.review .handle li').hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});
$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};
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
			$(".countdown .scroll-tick").eq(i).animate({
					marginTop: -curNum * 27,
			}, "slow");
			$(".between-buy .countdown .scroll-tick").eq(i).animate({
					marginTop: -curNum * 18,
			}, "slow");
			$(".nember .countdown .pop-message span").eq(i).html(curNum);
	}
	$(".between-buy .countdown .scroll-tick").eq(i).animate({
			marginTop: -curNum * 18,
	}, "slow");
	if(num<=100) {
		$(".progress-bar .bar").css("width",wid+'px');
	}
	setTimeout(function () {
		$(".nember .countdown .pop-message").addClass("zoomout")
    	setTimeout(function () {
				$(".nember .countdown .pop-message").removeClass("zoomout");
  		}, 1500);
  }, 1000);
	
}
function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}
(function($){
    $.getUrlParam = function(name){
		var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    		var r = window.location.search.substr(1).match(reg);
    		if (r!=null) return unescape(r[2]); return '';
    }
})(jQuery);
$.fn.target=function (target,yoffset) {
	$(this).click(function() {
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};

function soldOut() {
	var aff = $.getUrlParam('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".banner .gift-box,.between-buy .three-box,.float .three-box").addClass("soldout").removeClass("active");
	$(".float .one-box,.banner .gift-box,.between-buy .one-box").addClass("active");
	$(".nember .message").html("multi-device packs left only");
	$(".banner .three-gift p").html("<strong>$<b>23</b>.99 </strong> <del>$117.92</del>");
	$(".between-buy .three-box .countdown").remove();
	$(".banner .three-gift dl").html("<dt><strong>Advanced SystemCare 11 PRO</strong> <del>$89.97</del></dt><dd><span><i></i>IOTransfer 2</span> <del>$27.95</del></dd>")
	$(".banner .gift-box.three-gift .buybtn").attr("href","https://www.iobit.com/buy.php?product=asc113pciot&ref=marbdaysalebmultid&aff="+aff+"&refs=purchase_asc&tw="+tw);
	$(".banner .gift-box.three-gift .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-marbmultid');clickCount(7,'md top exp')");
	$(".between-buy .one-box .buybtn").attr("href","https://www.iobit.com/buy.php?product=asc113pciot&ref=marbdaysalebmultie&aff="+aff+"&refs=purchase_asc&tw="+tw);
	$(".between-buy .one-box .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-marbmultie');clickCount(8,'md mid exp')");
	$(".float .buybtn").attr("href","https://www.iobit.com/buy.php?product=asc113pciot&ref=marbdaysalebmultif&aff="+aff+"&refs=purchase_asc&tw="+tw);
	$(".float .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-marbmultif');clickCount(9,'md bot exp')");
	$(".banner i").target($(".between-buy"),0);
}
$(window).scrollWindow($(".strongpoint"),$('.asc-message p'),("on"));
$(window).scrollWindow($(".awards"),$('.float'),("on"));
$(".banner i").target($(".between-buy"),0);

function packsInit(){
	var date = new Date();
	var cName = "enascbdayb" + date.getDate();
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
			reTime = 3.2;
		}
	}else{
		reTime=6;
	}
}

function getSales(reCheck) {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "bdaysaleb.php",
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
});

function clickCount(cType,cDes){
	var date=new Date();
	var nowTime=Math.floor(date.getTime()/1000);
	$.ajax({
		type:'GET',
		url:'bdaysaleb.php',
		data:'action=clickCount&timezone='+MApp(2.2).datetime.getTimeZone()+'&cType='+cType+'&cDes='+cDes+'&localTime='+nowTime+'&type='+type+'&packs='+packs
	})
}