function packsOut() {
	$(".banner .showcase").removeClass('normal').addClass('double');
	$(".banner .showcase .maincase").empty();
	$(".gifts .lists").addClass('soldout').eq(0).removeClass('soldout');
	$(".bottomcart .showcase ul").removeAttr("style");
	$(".bottomcart .showcase ul").removeClass('pack').addClass('double');
	$(".bottomcart .selection .pack").removeClass('active').addClass('soldout');
	$(".bottomcart .selection .double").addClass('active');
	// 
	$(".btn-mid-lag").attr('href', $(".selection li").eq(2).data("url"));
	$(".btn-mid-lag").attr('onclick', $(".selection li").eq(2).data("ga"));

	$(".button-btm-lag").attr('href', $(".selection li").eq(2).data('url'));
	$(".button-btm-lag").attr('onclick', $(".selection li").eq(2).data('ga'));
	$(".btnarea .original").html($(".selection li").eq(2).data('original'));
	$(".btnarea .price").html($(".selection li").eq(2).data("price"));
	$(".btnarea .scanty").html($(".selection li").eq(2).data("scanty"));

}
function bundOut() {
	$(".banner .showcase").removeClass('double').addClass('only');
	$(".banner .showcase .double").empty();
	$(".gifts .lists").addClass('soldout');
	$(".bottomcart .showcase ul").removeAttr("style");
	$(".bottomcart .showcase ul").removeClass('double').addClass('single');
	$(".bottomcart .selection .double").removeClass('active').addClass('soldout');
	$(".bottomcart .selection .single").addClass('active');

	$(".btn-mid-lag").attr('href', $(".selection li").eq(0).data("url"));
	$(".btn-mid-lag").attr('onclick', $(".selection li").eq(0).data("ga"));
	$(".button-btm-lag").attr('href', $(".selection li").eq(0).data('url'));
	$(".button-btm-lag").attr('onclick', $(".selection li").eq(0).data('ga'));
	$(".btnarea .original").html($(".selection li").eq(0).data('original'));
	$(".btnarea .price").html($(".selection li").eq(0).data("price"));
	$(".btnarea .scanty").html($(".selection li").eq(0).data("scanty"));
}

function goTarget(target, yoffset) {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
}
$(window).on('scroll', function () {
    var scrollHeight = $(".banner").offset().top;
    if ($(window).scrollTop() > scrollHeight) {
        $('.float').addClass('on');
    } else {
        $('.float').removeClass('on');
    }
});

function hideFloat(argument) {
	$('.float').remove();
}

$(".benfits .detail-list dl").hover(function() {
	$(".benfits .showcase .screenshot").css('marginLeft', -405*($(this).index()+1));
	$(".benfits .zoom li").removeClass('active').eq($(this).index()+1).addClass('active');
});

$(".cartarea .selection li").click(function(event) {
	// console.log($(this).data("scanty"))
	if ($(this).hasClass('soldout')) {
		return;
	}else{
		$(".cartarea .selection li").removeClass('active');
		$(this).addClass('active');
		$(".cartarea .showcase ul").css('marginLeft', -342*$(this).index());
		$(".button-btm-lag").attr('href', $(this).data('url'));
		$(".button-btm-lag").attr('onclick', $(this).data('ga'));

		$(".btnarea .original").html($(this).data('original'));
		$(".btnarea .price").html($(this).data("price"));
		$(".btnarea .scanty").html($(this).data("scanty"));
	}	
});

$(".map .stand .pointer").hover(function(event) {
	$(".map .zoom").removeClass('active');
	$(this).next(".zoom").addClass('active');
	pause();
});
$(".carousel .zoom").hover(function(event){
	$(".map .zoom").removeClass('active');
	$(this).addClass('active');
	pause();
});


function pause() {
	$('#ghost').timer('pause');
}
$(".map .zoom").mouseover(function(event) {	
	if ($(this).hasClass('active')) {
		pause();
	}else{
		return;
	}	
});
$(".map .zoom").mouseleave(function(event) {	
	$('#ghost').timer('resume');
});


$(document).ready(function() {
	var i = 0
	$('#ghost').timer({
	    duration: '22s',
	    callback: function() {
	        i = i+1;
	        $(".map .zoom").removeClass('active');	
			$(".carousel .zoom").eq(i).addClass('active');
			if (i == 5) {
				i = -1;
			}	
	    },
	    repeat: true //repeatedly call the callback
	});
	timeInit();
	countdown((".maincase .countdown strong"),1);
	countdown((".three-box .countdown strong"),2);
});

function cSet(cName,cVal){
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days*24*60*60*1000);
	document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
	var date = new Date();
	var cName = "itascnata" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime=Math.floor(date.getTime()/1000);
	if (arr == null) {
		count1=nowTime+540;
		count2=nowTime+8340;
		cSet(cName,count1+'.'+count2);
	} else {
		var packsArr = arr[2].split('.');
		count1 = parseInt(packsArr[0]);
		count2 = parseInt(packsArr[1]);
	}
}

function packsInit(){
	var date = new Date();
	var cName = "itascnatapa" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		packs=85;
	} else {
		packs=arr[2];
	}
	$('.packsNum').html(packs);
}

function statusCheck(){
	var date=new Date();
	var timeNow=date.getTime()/1000;
	if(timeNow<count1){
		return 1;
	}else if(timeNow<count2){
		return 2;
	}else{
		return 3;
	}
}

function statusSet(){
	var statusNow=statusCheck();
	if(statusNow==2){
		//if(!$(".gift-box").hasClass('expired')){
		if(!$(".bottomcart .selection .pack").hasClass('soldout')){
			packsOut();
		}
	}else if(statusNow==3){
		if(!$(".bottomcart .selection .double").hasClass('soldout')){
			packsOut();
			bundOut();
			packsInit();
			setTimeout('getPacks()',15000);
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
		url:'natalesale2017.php',
		data:'action=getSales&d='+date.getDate(),
		success:function(sPacks){
			if(!isNaN(sPacks)){
				$('.packsNum').html(sPacks);
			}
		}
	});
	setTimeout('getPacks()',15000);
}

var countdown = function (countdown,tType){
	statusSet();
	if(tType==1){
		getCycleCountdown(count1);
	}else if(tType==2){
		getCycleCountdown(count2);
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
	var type=((typeof(packs)=='undefined')?1:2);
	$.ajax({
		type: "GET",
		url: "natalesale2017.php",
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
			$(".buyNum").html(sales.buyNum);
			setTimeout('getSales()',20000);
		}
	})
}
setTimeout('getSales()',20000);