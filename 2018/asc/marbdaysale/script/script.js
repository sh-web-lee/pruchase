$('.review .handle li').hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});
$(".banner .gift-box").mouseover(function(event) {
	var num = $(this).index();
 if(!$(".banner .three-gift").hasClass("soldout")){
   $(this).addClass("active").siblings().removeClass("active");
	   if(num==3) {
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
$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};
//var countdown = function (countdown){
//  getCycleCountdown();
//	$(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
//	setTimeout("countdown('"+ countdown +"')", 1);
//};
//function getCycleCountdown () {
//	var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
//	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
//	d = MApp(2.2).packages.zeroize(datetime[0], 2);
//	h = MApp(2.2).packages.zeroize(datetime[1], 2);
//	i = MApp(2.2).packages.zeroize(datetime[2], 2);
//	s = MApp(2.2).packages.zeroize(datetime[3], 2);
//	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
//}

(function($){
    $.getUrlParam = function(name){
		var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    		var r = window.location.search.substr(1).match(reg);
    		if (r!=null) return unescape(r[2]); return '';
    }
})(jQuery);

function soldOut() {
	var aff = $.getUrlParam('aff');
	$(".banner .gift-box,.between-buy .gift").addClass("soldout");
	$(".banner .gift-box.one-gift .box").remove();
	$(".between-buy .gift.one-gift h3,.between-buy .gift.one-gift dl,.between-buy .gift.one-gift a").remove();
	$(".banner .gift-box.three-gift h4").html("for better Multi-device Performance")
	$(".banner .img-box").removeClass("one-gift").removeClass("three-gift").addClass("soldout-img");
	$(".banner .gift-box.three-gift dl").html("<dl><dt><h5>Advanced SystemCare 11 PRO</h5> 1 Year / 3 PCs</dt><dd><i></i><span>MacBooster 6 Lite</span> <i class='gift'></i></dd><dd><i></i><span>IOTransfer 2</span> <i class='gift'></i></dd>");
	$(".banner .gift-box.three-gift p").html("<strong>$29.99</strong> <del>$169.91</del>");
	$(".banner .gift-box.three-gift .buybtn").attr("href","https://www.iobit.com/buy.php?product=asc113pcmbiot&ref=marbdaysalemultid&aff="+aff+"&refs=purchase_asc");
	$(".banner .gift-box.three-gift .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-marmultid');clickCount(5,'mdtop')");
	$(".banner .gift-box.three-gift p.date").hide();
	$(".banner .gift-box.one-gift").append("<span class='boxsold'></span>")
	$(".between-buy .three-gift").html("<h3>Better Multi-device Performance</h3> <dl><dt>MacBooster 6 Lite</dt><dd>Speed up & Protect Mac</dd></dl><dl><dt>IOTransfer 2</dt><dd>Transfer Files between iOS & Windows</dd></dl> <a class='buybtn orange'><strong>Get Free Utilities</strong> Valued at $79.94</a>")
	$(".between-buy .three-gift .buybtn").attr("href","https://www.iobit.com/buy.php?product=asc113pcmbiot&ref=marbdaysalemultie&aff="+aff+"&refs=purchase_asc");
	$(".between-buy .three-gift .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-marmultie');clickCount(6,'mdbot')");
	$(".compar-tab .buybtn").attr("href","https://www.iobit.com/buy.php?product=asc113pcmbiot&ref=marbdaysalemultic&aff="+aff+"&refs=purchase_asc");
	$(".compar-tab .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-marmultic');");
	$(".compar-tab tfoot .item-pro p").html("<strong>$<b>29.99</b></strong> <del>$169.91</del>")
	$(".compar-tab thead .item-pro p").html("<i></i> Multi-device Pack <i class='gift'></i>")
	$(".compar-tab tfoot .item-pro p.date").html("82% OFF, Save $139.92")

}
$(window).scrollWindow($(".strongpoint"),$('.asc-message p'),("on"));
$(".asc-message a").target($(".compar-tab"),0);

function timeInit(){
	var date = new Date();
	var cName = "itascjan" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime=Math.floor(date.getTime()/1000);
	if (arr == null) {
		countTime=nowTime+300;
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
});

function clickCount(cType,cDes){
	var date=new Date();
	var nowTime=Math.floor(date.getTime()/1000);
	$.ajax({
		type:'GET',
		url:'bdaysale.php',
		data:'action=clickCount&timezone='+MApp(2.2).datetime.getTimeZone()+'&cType='+cType+'&cDes='+cDes+'&localTime='+nowTime
	})
}