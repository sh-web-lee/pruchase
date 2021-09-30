$(document).ready(function() {
	$('#dg-container').gallery();
	//countdown((".banner h2 strong"));
	//countdown((".fl-date strong"));
});
$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top;
	var scroll2Height = $(".compar-tab table").offset().top;
	var scroll3Height = $(".between-buy").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('.float,.fl-date').addClass('on');
	}
	if ($(window).scrollTop() > scroll2Height && $(window).scrollTop() < scroll3Height) {
		$('.float').removeClass('on');
		//alert(1);
	}
	if ($(window).scrollTop() < scrollHeight) {
		$('.float,.fl-date').removeClass('on');
	}
});

function timeInit(){
	var date = new Date();
	var cName = "esascjul" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime=Math.floor(date.getTime()/1000);
	if (arr == null) {
		countTime=nowTime+60*60*24*3;
		cSet(cName,countTime);
	} else {
		countTime=parseInt(arr[2]);
	}
}

function cSet(cName,cVal){
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days*24*60*60*1000);
	document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function timeCountDown(startTimestamp) {
	var dateObj = new Date();
	var time = dateObj.getTime().toString().substring(0, 10);
	var remainingTime = startTimestamp - time;
	while (remainingTime<=0){
		remainingTime+=3600*24*3;
	}
	if (remainingTime > 0) {
		var d = Math.floor(remainingTime / (24 * 60 * 60));
		var h = Math.floor(remainingTime / (60 * 60));
		var i = Math.floor(remainingTime / 60 % 60);
		var s = Math.floor(remainingTime % 60);
		var mi = Math.floor((999 - dateObj.getMilliseconds())/10);
		if (mi < 10) {
			mi = '0' + mi;
		}
		return [d, h, i, s, mi];
	} else {
		return [0, 0, 0, 0, 0];
	}
}

var countdown = function (countdown,tType){
	getCycleCountdown(countTime);
	$(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
	setTimeout("countdown('"+ countdown +"',"+tType+")", 1);
};

function getCycleCountdown (endTime) {
	var datetime = timeCountDown(endTime);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 2);
}

$(function(){
	timeInit();
	countdown((".banner h2 strong"));
	countdown((".fl-date strong"));
});
