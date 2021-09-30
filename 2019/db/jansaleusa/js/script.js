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
	$(".banner .gift-box strong b").html("22")
	$(".banner .gift-box del,.between-buy del").html("$74.85")
	$(".banner .gift-box p:eq(1)").html("only $1.95 / Month")
	$(".banner .gift-box p:eq(2)").html("$51.9 Saved")
	$(".banner .gift-box p:eq(3)").html("Driver Booster 6 Pro   $74.85")
	$(".banner .gift-box p:eq(4),.banner .gift-box p:eq(5),.banner .gift-box p:eq(6)").html("-")
	$(".between-buy .content").remove();
	$(".between-buy p strong,.comparison th strong").html("$22.95")
	$(".buybtn").attr("href","https://www.iobit.com/buy.php?product=driverbooster6&ref=db63pcsoldout2019usa"+refStr+"&aff=" + aff + "&refs=purchase_db&tw=" + tw)
	$(".buybtn").attr("onclick","ga('send', 'event', 'db3pcsoldbuyusa', 'buy', 'dbpurchase-201901') ")
}
function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}
function timeInit(){
	var date = new Date();
	var cName = "endbstate_t" + date.getDate();
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
})