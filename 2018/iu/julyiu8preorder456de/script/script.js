$(document).ready(function() {
	$('#dg-container').gallery();
	timeInit();
	packsInit();
	timeCount();
	setTimeout('getViewNum()', 15000);
});
$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('.float').addClass('on');
	} else {
		$('.float').removeClass('on');
	}
});
function focus() {
	$('.progress-bar .bar >span').append('<span class="reduce"></span>');
	var tReduce = new TimelineLite();
	tReduce.to('.reduce', 1.5, {
		y: -100,
		autoAlpha: 0,
		onComplete: function() {
			$('.reduce').remove();
		}
	})
}
function pack(number,starnumber) {
	$('.gift').prop('number', starnumber).animateNumber({
				number: number
			},
			1500
	);
	$('.soldNum').html(500-number);
}
function flipNum(num,isFirst) {
	var number =num*0.9;
	$(".progress-bar .bar >span").css("width",number);
	setTimeout(function () {
		if(isFirst!=1) {
			focus();
		}
	}, 500);
}

function pop() {
	$(".pop-over,.pop-bg").addClass("active");
}

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	if (arr = document.cookie.match(reg))
		return unescape(arr[2]);
	else
		return null;
}

function timeInit() {
	var date = new Date();
	var cName = "deiupre_e" + date.getDate();
	var expireTime = cGet(cName);
	if (expireTime == null) {
		expireTime = Date.parse(new Date()) + 60 * 5 * 1000;
		cSet(cName, expireTime);
	}
}

function expireTimeCheck() {
	var date = new Date();
	var cName = "deiupre_e" + date.getDate();
	var expireTime = cGet(cName);
	if ((Date.parse(new Date()) < expireTime)) {
		return (expireTime - Date.parse(new Date())) / 1000;
	} else {
		return false;
	}
}

function timeCount() {
	var dateObj = new Date();
	var remainTime = expireTimeCheck();
	if (remainTime > 0) {
		var s = ((remainTime % 60) < 10) ? ('0' + (remainTime % 60)) : (remainTime % 60);
		var i = ('0' + (Math.floor(remainTime / 60))).slice(-2);
		var mi = ('00' + (999 - dateObj.getMilliseconds())).slice(-3);
		$(".date:eq(0) strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
		$(".date:eq(1) strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
		setTimeout('timeCount()', 1);
	} else {
		$(".date:eq(0) strong").eq(0).html('00').end().eq(1).html('00').end().eq(2).html('00');
		$(".date:eq(1) strong").eq(0).html('00').end().eq(1).html('00').end().eq(2).html('00');
		pop();
	}
}

function packsInit() {
	var date = new Date();
	var cName = "deiupre_p" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		packs = 49;
	} else {
		packs = arr[2];
	}
	if(expireTimeCheck()==false){
		packs=0;
	}
	pack(packs,500);
	flipNum(packs,1);
	setTimeout("getPacks()",6000);
}

function getPacks() {
	var date = new Date();
	$.ajax({
		type: 'GET',
		url: 'iu8preorder456de.php',
		data: 'action=getSales&d=' + date.getDate(),
		success: function(sPacks) {
			if(expireTimeCheck()==false){
				flipNum(0);
				pack(0,0);
			}else {
				if (!isNaN(sPacks)) {
					if (sPacks != packs) {
						flipNum(sPacks);
						pack(sPacks, parseInt(packs));
						packs = sPacks;
					}
				}
			}
		}
	});
	if(expireTimeCheck()==false){
		flipNum(0);
		pack(0,0);
	} else{
		setTimeout('getPacks()', 6000);
	}
}

function getViewNum(){
	var date = new Date();
	$.ajax({
		type: 'GET',
		url: 'iu8preorder456de.php',
		data: 'action=getViewNum&d=' + date.getDate(),
		success: function(viewNum) {
			if (!isNaN(viewNum)) {
				$('.viewNum').html(viewNum);
			}
		}
	});
	setTimeout('getViewNum()', 15000);
}