
function soldOut() {
	$(".banner .sold-box .img-box").addClass("one-box");
	$(".banner .one-pc-box").addClass("default");
	$(".banner .sold-box dl dt strong").html("64%");
	$(".banner .one-pc-box dl dt strong").html("85%");
	$(".banner .one-pc-box dl .button").html("Approfittane Ora!");
	$(".banner .sold-box h3").html("<span class='num'><span class='pack packsNum'>25</span> <span class='popup-font packsNum'>25</span></span> Pezzi Rimasti Oggi");
	$(".selection li").eq(0).addClass("default").removeClass("active");
	$(".selection li").eq(1).addClass("active");
	$(".gifts dl").addClass("exceed");
	$(".banner .sold-box .button,.gifts .button").attr("href","http://www.iobit.com/buy.php?product=it-asc123pc1799&ref=it_asc123pc1799purchase1811"+refStr+"&refs=it_purchase_asc");
	$(".banner .sold-box .button,.gifts .button").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1811-it')");
	 onePc();
}
function zoomout () {
	$(".popup-font").addClass("zoomout");
	$(".sold-box .img-box").append("<span class='dissolve'></span>");
	setTimeout(function () {
		$(".popup-font").removeClass("zoomout");
		$(".sold-box .img-box .dissolve").remove();
	}, 800);
}
function onePc() {
	$(".bottomcart .button").attr("href","http://www.iobit.com/buy.php?product=it-asc123pc1799&ref=it_asc123pc1799purchase1811"+refStr+"&refs=it_purchase_asc");
	$(".bottomcart .button").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1811-it')");
	$(".bottomcart dl strong").html("<b>17</b>,99");
	$(".bottomcart dl dt del").html("49,99");
	$(".bottomcart dl dt span").html("32,00");
	$(".showcase .img").addClass("one-pc");
}
function threePc() {
	$(".bottomcart .button").attr("href","http://www.iobit.com/buy.php?product=it-asc123pcsdpf1799&ref=it_asc123pcsdpf1799purchase1811"+refStr+"&refs=it_purchase_asc");
	$(".bottomcart .button").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1811-it')");
	$(".bottomcart dl strong").html("<b>17</b>,99");
	$(".bottomcart dl del").html("119,93");
	$(".bottomcart dl dt span").html("101,94");
	$(".showcase .img").removeClass("one-pc");
}
function pack(number) {
	$('.pack,.popup-font').prop('number', 129).animateNumber(
			{
				number: number
			},
			1000
	);
}
function goTarget(target, yoffset) {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
}

function hideFloat(argument) {
	$('.float').remove();
}

$(".benfits .detail-list dl").hover(function() {
	$(".benfits .showcase .screenshot").css('marginLeft', -555*($(this).index()+1));
	$(".benfits .zoom li").removeClass('active').eq($(this).index()+1).addClass('active');
	$(this).addClass("active").siblings().removeClass("active");
  $(".benfits .list-icon li").removeClass('active').eq($(this).index()+1).addClass('active');
	
});
$(".benfits .list-icon li").hover(function() {
	$(".benfits .showcase .screenshot").css('marginLeft', -555*($(this).index()));
	$(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
	var num = $(this).index();
	if(num==0) {

		$(".benfits .detail-list dl").removeClass("active");
	}
	else {
		$(".benfits .detail-list dl").eq($(this).index()-1).addClass("active").siblings().removeClass("active");
	}
	$(".benfits .list-icon li").removeClass('active');
	$(this).addClass('active');
});

$(".bottomcart .selection li").mouseover(function(event) {
	var num =$(this).index();
	if ($(this).hasClass('default')) {
		return;
	}else{
		if(num==0) {
			threePc();
		}
		else {
			onePc();
		}
		$(".bottomcart .selection li").removeClass('active');
		$(this).addClass('active');
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

$(window).scrollWindow($(".gifts .button"),$('.reviews dl'),("on"));
$(window).scrollWindow($(".payments"),$('.float'),("on"));

function cSet(cName,cVal){
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days*24*60*60*1000);
	document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
	var date = new Date();
	var cName = "itascjan" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime=Math.floor(date.getTime()/1000);
	if (arr == null) {
		countTime=nowTime+549;
		cSet(cName,countTime);
	} else {
		countTime=parseInt(arr[2]);
	}
}

function packsInit(){
	var date = new Date();
	var cName = "itascjanpa" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		packs=42;
	} else {
		packs=arr[2];
	}
	pack(packs);
}

function statusCheck(){
	var date=new Date();
	var timeNow=date.getTime()/1000;
	if(timeNow<countTime){
		return 1;
	}else{
		return 2;
	}
}

function statusSet(){
	var statusNow=statusCheck();
	if(statusNow==2){
		if(!$(".banner .sold-box .img-box").hasClass('one-box')){
			soldOut();
			packsInit();
			setTimeout('getPacks()',2000);
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

function getPacks(){
	var date=new Date();
	$.ajax({
		type:'GET',
		url:'natale2018.php',
		data:'action=getSales&d='+date.getDate(),
		success:function(sPacks){
			if(!isNaN(sPacks)){
				if(sPacks!=packs) {
					zoomout();
					$('.packsNum').html(sPacks);
					packs=sPacks;
				}
			}
		}
	});
}

var countdown = function (countdown,tType){
	statusSet();
	if(tType==1){
		getCycleCountdown(countTime);
	}
	$(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
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

function getSales(){
	var statusNow=statusCheck();
	var type=((typeof(packs)=='undefined')?1:2);
	$.ajax({
		type: "GET",
		url: "natale2018.php",
		data:"action=getPack&type="+type,
		success: function(res){
			var sales=JSON.parse(res);
			var scrollHeight = $(".banner").offset().top;
			if ($(window).scrollTop() > scrollHeight) {
				$(".float").removeClass('on');
				setTimeout("$('.float').addClass('on');", 800);
			}
			$("#first").html(sales.firstName);
			$("#last").html(sales.lastName);
			$("#saleType").html(sales.saleType);
			$(".viewNum").html(sales.viewNum);
			//$(".buyNum").html(sales.buyNum);
			getSalesNum(0);
		}
	});
	if(typeof packs!='undefined'){
		getPacks();
		if(packs>39){
			setTimeout('getSales()',3000);
		}else {
			setTimeout('getSales()', 15000);
		}
	}else{
		setTimeout('getSales()',10000);
	}
}

function getSalesNum(packsNow) {
	if(typeof packs!='undefined'){
		console.log(packs);
		packsNow=packs;
	}
	var date=new Date();
	var timeNow=date.getTime()/1000;
	var timeDiff=countTime-timeNow;
	timeDiff=((timeDiff>0)?timeDiff:0);
	var statusNow=statusCheck();
	var daysDiff = Math.floor((date.getTime() - Date.parse('2018-10-26')) / (3600 * 24 * 1000));
	var buyNum=625872+daysDiff * 42+(55-Math.floor(timeDiff/10));
	if(statusNow==2){
		buyNum+=(42 - packsNow);
	}
	$(".buyNum").html(commafy(buyNum));
}

$(function(){
	timeInit();
	getSales();
	countdown((".sold-box h3 strong"),1);
});

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
			num = num.replace(reg, "$1,$2");
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
