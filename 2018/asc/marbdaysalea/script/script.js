$('.review .handle li').hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});
$(".banner .gift-box").mouseover(function(event) {
	var num = $(this).index();
 if(!$(".banner .three-gift").hasClass("soldout")){
   $(this).addClass("active").siblings().removeClass("active");
	   if(num==2) {
			$(".banner .img-box").addClass("one-gift").removeClass("three-gift");
		}
		else {
			$(".banner .img-box").addClass("three-gift").removeClass("one-gift");
		}
	}
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
	$(".banner .gift-box,.bottom-buy .three-box").addClass("soldout").removeClass("active");
	$(".bottom-buy .one-box").addClass("active");
	$(".bottom-buy .one-box .buybtn").removeClass("blue").addClass("orange")
	$(".banner .gift-box.one-gift .box,.bottom-buy .three-box .img-box").remove();
	$(".banner .img-box").removeClass("one-gift").removeClass("three-gift").addClass("soldout-img");
	$(".banner .gift-box.three-gift dl").html("<dt><h5>Advanced SystemCare 11 PRO</h5> 1 Year / 3 PCs</dt><dd><i></i><span>IOtransfer 2</span> <i class='gift'></i></dd>");
	$(".banner .gift-box.three-gift p").html("<strong>$<b>23</b>.99</strong> <del>$117.92</del>");
	$(".banner .gift-box.three-gift .buybtn").attr("href","https://www.iobit.com/buy.php?product=asc113pciot&ref=marbdaysaleamultic&aff="+aff+"&refs=purchase_asc&tw="+tw);
	$(".banner .gift-box.three-gift .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-maramultic');clickCount(6,'1 gift expired')");
	$(".banner .gift-box.three-gift p.date").hide();
	$(".banner .gift-box.one-gift").append("<span class='boxsold'></span>")
	$(".compar-tab .buybtn").attr("href","https://www.iobit.com/buy.php?product=asc113pciot&ref=marbdaysaleamultid&aff="+aff+"&refs=purchase_asc&tw="+tw);
	$(".compar-tab .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-maramultid');clickCount(7,'1 gift expired')");
	$(".bottom-buy .buybtn").attr("href","https://www.iobit.com/buy.php?product=asc113pciot&ref=marbdaysaleamultie&aff="+aff+"&refs=purchase_asc&tw="+tw);
	$(".bottom-buy .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-maramultie');clickCount(8,'1 gift expired')");
	$(".compar-tab tfoot .item-pro p").html("<strong>$<b>23.99</b></strong> <del>$117.92</del>")
	$(".compar-tab thead .item-pro p").html("<i class='gift'></i>Multi-device Gift <span>(Valued at $27.95)</span>")
	$(".compar-tab tfoot .item-pro p.date").html("80% OFF, Save $93.93")

}
$(window).scrollWindow($(".strongpoint"),$('.asc-message p'),("on"));


$(function(){
	//countdown((".gift-box .date span"));
	//countdown((".item-pro .date span"));
	//countdown((".bottom-buy .message strong"));
});

function timeInit(){
	var date = new Date();
	var cName = "itascjan" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime=Math.floor(date.getTime()/1000);
	if (arr == null) {
		countTime=nowTime+150;
		cSet(cName,countTime);
	} else {
		countTime=parseInt(arr[2]);
	}
}

var countdown = function (countdown,tType){
	getCycleCountdown(countTime);
	$(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
	setTimeout("countdown('"+ countdown +"',"+tType+")", 1);
};

function getCycleCountdown (endTime) {
	var datetime = timeCountDown(endTime);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
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
		if(!$('.one-gift').hasClass('soldout')){
			soldOut();
		}
		return [0, 0, 0, 0, 0];
	}
}

function cSet(cName,cVal){
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days*24*60*60*1000);
	document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

$(function(){
	clickCount(0,'');
	timeInit();
	countdown((".gift-box .date span"));
	countdown((".item-pro .date span"));
	countdown((".bottom-buy .message strong"));
});

function clickCount(cType,cDes){
	var date=new Date();
	var nowTime=Math.floor(date.getTime()/1000);
	$.ajax({
		type:'GET',
		url:'bdaysalea.php',
		data:'action=clickCount&timezone='+MApp(2.2).datetime.getTimeZone()+'&cType='+cType+'&cDes='+cDes+'&localTime='+nowTime
	})
}