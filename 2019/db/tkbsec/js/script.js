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

	var scrollBottom=$(".comparison").offset().top;
	if($(window).scrollTop() > scrollBottom){
		if(maskShow==false) {
			var cName = 'endbtkb_m';
			maskShow = true;
			cSetPop(cName, 1);
		}
	}
});
function dissolve(num) {
	$('.disappear').attr('class', 'disappear');
  $('.disappear').addClass("disappear"+num);
  $(".disappear").css({ "opacity": 0, "top":0}).animate({ "opacity": 1}, 500).animate({ "top": -30,"opacity": 0},500);
}
function popbox() {
	//ga('send', 'event', 'db3mpopbuysecuv', 'buy', 'dbpurchase-tkbsecpopuv');
	$(".pop-over,.pop-bg").addClass("active")
}
function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}
function flipNum(num, length) {
	var num = PrefixInteger(num, length);
	var len = String(num).length;
	var str = num.toString();
	var list = '';
	var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .countdown .scroll-tick").html(list);
  $(".floatlayer .countdown .scroll-tick").html(list);
	for (var i = 0; i <= len; i++) {
			var curNum = str.substring(i, i + 1);
			$(".banner .countdown .scroll-tick").eq(i).animate({
					marginTop: -curNum * 19,
			}, "slow");
	}
	for (var i = 0; i <= len; i++) {
			var curNum = str.substring(i, i + 1);
			$(".floatlayer .countdown .scroll-tick").eq(i).animate({
					marginTop: -curNum * 28,
			}, "slow");
	}
	var number = num * 2.8;
	$(".progress .bar").css("width", number);
}
(function($) {
	$.getUrlParam = function(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return unescape(r[2]);
		return '';
	}
})(jQuery);
function soldout() {
	maskInit();
	var aff = $.getUrlParam('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".banner .default,.comparison tfoot .iteme").addClass("sold-out")
	$(".banner .packs").addClass("nomal")
	$(".floatlayer.soldout-fl").removeClass("hide");
	$(".banner .packs .numer,.banner .packs h4,.floatlayer.consent").remove();
	$(".banner .packs h3").html("Seasonal Subscription");
	$(".banner .packs strong b").html("6.19");
	$(".banner .packs .at").html("Supports 3 PCs <br> Checkout at $18.57");
	$(".banner .packs .buybtn").html("Buy Now");

	$(".floatlayer ul li.packs").addClass("active").siblings().removeClass("active");

	$(".floatlayer ul li.packs").html("<p>Seasonal</p><strong>$<b>6.19</b></strong>/mo")
	$(".floatlayer .buybtn,.banner .box.packs .buybtn,.comparison .itemd .buybtn").attr("href", "https://www.iobit.com/buy.php?product=db3m1857&ref=db3msold1857"+refStr+"&aff=" + aff + "&refs=purchase_db&tw=" + tw);
  $(".floatlayer .buybtn,.banner .box.packs .buybtn,.comparison .itemd .buybtn").attr("onclick", "ga('send', 'event', 'db3msoldbuysec', 'buy', 'dbpurchase-tkbsec')  ");
  $(".banner .box:eq(0) .buybtn,.comparison .itemc .buybtn").attr("href", "https://www.iobit.com/buy.php?product=db1m619&ref=db1m619sold"+refStr+"&aff=" + aff + "&refs=purchase_db&tw=" + tw);
  $(".banner .box:eq(0) .buybtn,.comparison .itemc .buybtn").attr("onclick", "ga('send', 'event', 'db1msoldbuysec', 'buy', 'dbpurchase-tkbsec')");

  $(".floatlayer .right p").html("3 Months / 3 PCs")
}
$(".floatlayer ul li").click( function () {
	var aff = $.getUrlParam('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	var index = $(this).index();
  $(this).addClass("active").siblings().removeClass("active");
	$(".floatlayer .buybtn").attr("href", $(".banner .box").eq(index).find(".buybtn").attr("href"));
  $(".floatlayer .buybtn").attr("onclick", $(".banner .box").eq(index).find(".buybtn").attr("onclick"));
	if(index==0) {
  	$(".floatlayer .right p").html("1 Month / 3 PCs")
	}
	else {
  	$(".floatlayer .right p").html("3 Months / 3 PCs")
	}
});
$(".pop-over .close").click( function () {
	$(".pop-over,.pop-bg").removeClass("active");
});
function cSetPop(name,value) {
	var Days=2;
	var exp = new Date();
	name=name+exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
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
$(function(){
	var cName = 'endbtkb_m';
	maskShow=cGet(cName)==1;
	packsInit();
});
function packsInit() {
	var date = new Date();
	var cName = "endbtkb_p" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	packs = (arr == null) ? 59 : arr[2];
	$(".nomal").html(packs);
	$(".redum").html(packs);
	flipNum(packs,2);
	if (packs > 0) {
		setTimeout('getSales()', 6000);
	} else {
		soldout();
	}
}

function getSales() {
	var dateNow = new Date();
	$.ajax({
		type: "GET",
		url: "tkbsec.php",
		data: "action=getPacks&r=" + Math.random() + "&d=" + dateNow.getDate(),
		success: function(res) {
			res=JSON.parse(res);
			var sPacks=res.packsNum;
			var rePacks = packs - sPacks;
			if (rePacks > 0) {
				$(".nomal").html(sPacks);
				$(".redum").html(sPacks);
				flipNum(sPacks,2);
				if((rePacks==1)||(rePacks==2)){
					dissolve(rePacks);
				}
			}
			if (sPacks > 0) {
				setTimeout('getSales()', 6000);
			} else {
				soldout();
			}
			packs = sPacks;
		}
	});
}

function maskInit(){
	if(cGet('enascanni_s')==-1) {
		maskTimeInit();
	}else{
		var maskStatus = cGet('enascanni_s');
		if ((maskStatus != -1)&&(maskStatus != -2)) {
			$(document).bind('mousemove', mouseOut);
			if(maskShow){
				setTimeout('maskReady()',10000);
			}
		}
	}
}
function maskReady(){
	if(maskShow) {
		var cName = 'enascanni_s';
		cSetPop(cName, -1);
		maskTimeInit();
		$(document).unbind('mousemove', mouseOut);
		ga('send', 'event', 'db3mpopbuysecuvb', 'buy', 'dbpurchase-tkbsecpopuvb');
		console.log('1b');
	}
}
function mouseOut(e) {
	if (e.clientY < 3) {
		maskShow=true;
		var cName='enascanni_s';
		cSetPop(cName,-1);
		maskTimeInit();
		$(document).unbind('mousemove', mouseOut);
		if(cGet('endbtkb_m')==1){
			console.log('1 a');
			ga('send', 'event', 'db3mpopbuysecuva', 'buy', 'dbpurchase-tkbsecpopuva');
		}else{
			console.log('2');
			ga('send', 'event', 'db3mpopbuysecuv', 'buy', 'dbpurchase-tkbsecpopuv');
		}
	}
}

function maskTimeInit(){
	if(cGet('enascanni_s')==-1){
		if(maskShow) {
			console.log('mask show');
			popbox();
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
			maskShow=false;
		}
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

var maskCountdown = function() {
	var statusNow=maskStatusSet();
	getCycleCountdown(maskCountTime);
	$(".count-time").html(s);

	if(statusNow==1) {
		setTimeout("maskCountdown()", 1000);
	}
};

function maskStatusSet() {
	var statusNow =maskStatusCheck();
	if (statusNow == 2) {
		cSetPop('enascanni_s',-2);
		$(".pop-over,.pop-bg").removeClass("active");
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
