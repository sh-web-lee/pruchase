$(document).ready(function() {
	$(".users li").mouseover(function(event) {
		var num = $(this).index();
		$(".users li").eq(num).addClass('current').siblings().removeClass('current');
		$(".review .content > dl").eq(num).addClass('active').siblings().removeClass('active');
	});
	$(".info").hover(function(){
	    $(".info-message").addClass('active');
	},function(){
	   $(".info-message").removeClass('active');
	});
});

$.fn.target=function (target) {
  $(this).click(function() {
    var Theigth = target.offset().top;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};

$(".intro").target($("#compare"));

$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('#floatlayer').addClass('on');
		$('.float').addClass('on');
	} else {
		$('#floatlayer').removeClass('on');
		$('.float').removeClass('on');
	}
});
(function($) {
	$.getUrlParam = function(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return unescape(r[2]);
		return '';
	}
})(jQuery);

function soldOut() {
	var aff = $.getUrlParam('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".banner .message").addClass("active");
	$(".activate,.floatlayer .img-box").addClass("sold-out");
	$(".banner .gift-box .date,.banner .gift-box .info,.banner .info-message,.between-buy .last").remove();
	$(".banner .gift-box strong").html("$<b>19</b>.99");
	$(".banner .gift-box del,.between-buy del").html("$89.97");
	$(".banner .gift-box p:eq(1)").html("only $1.66 / Month");
	$(".banner .gift-box p:eq(2)").html("$69.98 Saved");
	$(".banner .gift-box p:eq(3)").html("Advanced SystemCare Pro   <del>$89.97</del>");
	$(".banner .gift-box p:eq(4),.banner .gift-box p:eq(5),.banner .gift-box p:eq(6)").html("-");
	$(".between-buy").css({"backgroundPosition" : "center bottom"});
	$(".between-buy .content").remove();
	$(".between-buy p strong,.comparison th strong").html("$19.99");
	$(".banner .buybtn,.between-buy .buybtn,.comparison .buybtn,.floatlayer .buybtn").attr("href", "https://www.iobit.com/buy.php?product=asc123pc1999&ref=asc1999av2019soldouttkasec"+refStr+"&aff=" + aff + "&refs=purchase_asc&tw=" + tw).attr("onclick", "ga('send', 'event', 'asc1999soldbuy', 'buy', 'ascpurchase-tkasec');");
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
	name=name+exp.getDate();
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	if (arr = document.cookie.match(reg))
		return unescape(arr[2]);
	else
		return null;
}
function cSetPop(name,value) {
	var Days=2;
	var exp = new Date();
	name=name+exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}
function timeInit(){
	var date = new Date();
	var cName = "endbstate_t" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime = Math.floor(date.getTime() / 1000);
	if (arr == null) {
		countTime = nowTime + 300;
		cSet("endbstate_t", countTime);
	} else {
		countTime = parseInt(arr[2]);
	}

	maskTime = cGet('mask_t');
	if (maskTime == null) {
		maskTime = 60 * 2;
		cSet('mask_t', maskTime);
	}
	//if (maskTime == -1) {
	//	if (expireTimeCheck()) {
	//		mask();
	//	}
	//}

	if(cGet('enascanni_s')==-1) {
		maskTimeInit();
	}else{
		var maskStatus = cGet('enascanni_s');
		if ((maskStatus != -1)&&(maskStatus != -2)) {
			mouseCheck = 0;
			maskTimeCountDown();
			//$(document).bind('mousemove', mouseOut);
		}
	}
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
		cSet('mask_t', maskTime);
		setTimeout('maskTimeCountDown()', 1000);
	} else if ((maskTime == 0)) {
		$(document).bind('mousemove', mouseMove);
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

function showPop() {
  $(".pop").fadeIn(500);
}
function showSoldoutPop() {
  $(".pop-container").addClass("soldout");
  $(".pop").fadeIn(500);
}
function closePop() {
  $(".pop").fadeOut(500);
}

function getCycleCountdown(endTime) {
	var datetime = timeCountDown(endTime);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

var countdown = function(countdown, tType) {
	var statusNow=statusSet();
	if (statusNow == 1) {
		getCycleCountdown(countTime);
		$(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
		$('.count-time span').eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
	}
	setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
};

function statusSet() {
	var statusNow = statusCheck();
	if (statusNow == 2) {
		//if($(".footbuy li").eq(1).hasClass('active')){
		if(!$(".activate,.floatlayer .img-box").hasClass('sold-out')){
			soldOut();
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

$(function(){
	timeInit();
	countdown('.date strong',1);
	setTimeout('getViewNum()', 20000);
	//var maskStatus = cGet('enascanni_s');
	//if ((maskStatus != -1)&&(maskStatus != -2)) {
	//	$(document).bind('mousemove', mouseOut);
	//}
	//if(cGet('enascanni_s')==-1) {
	//	maskTimeInit();
	//}
});

function getViewNum() {
	$.ajax({
		type: "GET",
		url: "tkasec.php",
		data: "action=getViewNum",
		success: function(viewNum) {
			$('.viewNum').html(viewNum);
			setTimeout('getViewNum()', 20000);
		}
	});
}

function mouseOut(e) {
	if (e.clientY < 3) {
		var cName='enascanni_s';
		cSetPop(cName,-1);
		maskTimeInit();
		$(document).unbind('mousemove', mouseOut);
	}
}

function mouseMove(e) {
	var cName='enascanni_s';
	cSetPop(cName,-1);
	maskTimeInit();
	$(document).unbind('mousemove', mouseMove);
}

function maskTimeInit(){
	if(cGet('enascanni_s')==-1){
		var statusNow=statusCheck();
		if(statusNow==1){
			showPop();
			popStatistic(1);
		}else{
			showSoldoutPop();
			popStatistic(2);
		}
		var date = new Date();
		var cName = "enascanni_c";
		var arr = cGet("enascanni_c");
		var nowTime = Math.floor(date.getTime() / 1000);
		if (arr == null) {
			maskCountTime = nowTime + 60;
			cSetPop(cName, maskCountTime);
		} else {
			maskCountTime = parseInt(arr);
		}
		maskCountdown();
	}
}

var maskCountdown = function() {
	var statusNow=maskStatusSet();
	getCycleCountdown(maskCountTime);
	var popS = Math.floor(s/10);
	var popG = Math.floor(s - popS*10);
	$(".pop .countdown .min span").animate({"marginTop": popS*(-20)}, 500);
	$(".pop .countdown .sec span").animate({"marginTop": popG*(-20)}, 500);

	if(statusNow==1) {
		setTimeout("maskCountdown()", 1000);
	}
};

function maskStatusSet() {
	var statusNow =maskStatusCheck();
	if (statusNow == 2) {
		cSetPop('enascanni_s',-2);
		closePop();
	}
	return statusNow;
}

function maskStatusCheck() {
	var date = new Date();
	var timeNow = date.getTime() / 1000;
	if (timeNow < maskCountTime) {
		return 1;
	} else {
		return 2;
	}
}

function popStatistic(type){
	$.ajax({
		type: "GET",
		url: "anniversary.php",
		data: "action=popStatistic&type="+type
	});
}