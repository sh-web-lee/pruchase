$(document).ready(function() {
	$('#dg-container').gallery();
});
$(window).on('scroll', function() {
	var scrollHeight = $(".between2 .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('.float').addClass('on');
	} else {
		$('.float').removeClass('on');
	}
	if($(window).scrollTop() > $('.product img').offset().top) {
		$('.product2 dl').addClass("on");
	}
	else {
		$('.product2 dl').removeClass("on");
	}
	if($(window).scrollTop() > $('.between-buy').offset().top) {
		$('.feature .left-message,.feature .imgbox').addClass("on");
	}
	else {
		$('.feature .left-message,.feature .imgbox').removeClass("on");
	}
});
function thousandBitSeparator(num) {
  return num && (num
    .toString().indexOf('.') != -1 ? num.toString().replace(/(\d)(?=(\d{3})+\.)/g, function($0, $1) {
      return $1 + ",";
    }) : num.toString().replace(/(\d)(?=(\d{3}))/g, function($0, $1) {
      return $1 + ",";
    }));
}

function popbox() {
	$(".pop-over,.pop-bg").addClass("active")
}
function pack(number,starnumber) {
	$('.packnum').prop('number', starnumber).animateNumber({
				number: number
			},
			1500
	);
	$('.packsNum').html(number);
	$('.buyNum').html(thousandBitSeparator(500-number));
}
function flipNum(num) {
	var number =num*1.13;
	$(".progress .bar .box").css("width",number);
}
function cGet(name) {
	var exp = new Date();
	name = name + exp.getDate();
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	if (arr = document.cookie.match(reg))
		return unescape(arr[2]);
	else
		return null;
}
$(function(){
	timeInit();
	packsInit();
	countdown((".date"), 1);
	setTimeout('getSales()', 6000);
	setTimeout('getViewNum()', 15000);
});
function dissolve(num) {
	$('.disappear').attr('class', 'disappear');
  $('.disappear').addClass("disappear"+num);
  $(".disappear").css({ "opacity": 0, "top":0}).animate({ "opacity": 1}, 500).animate({ "top": -25,"opacity": 0},500);
}

function getReTime(){
	var reTime=6;
	return reTime*1000;
}

function cSet(cName, cVal) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
	document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit() {
	var date = new Date();
	var cName = "ascpre" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime = Math.floor(date.getTime() / 1000);
	if (arr == null) {
		countTime = nowTime + 360;
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

var countdown = function(countdown, tType) {
	statusSet();
	if (tType == 1) {
		getCycleCountdown(countTime);
	}
	$(countdown).each(function() {
		$(this).find('strong').eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi)
	});
	setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
};

function getCycleCountdown(endTime) {
	var datetime = timeCountDown(endTime);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function packsInit() {
	var date = new Date();
	var cName = "ascprepa" + date.getDate();

	var nowTime = Math.floor(date.getTime() / 1000);
	var timeDiff = countTime - nowTime;
	packs = Math.ceil(timeDiff / 6) > 0 ? Math.ceil(timeDiff / 6) : 0;
	pack(packs,500);
	flipNum(packs);

}

function getSales() {
	var date = new Date();
	var nowTime = Math.floor(date.getTime() / 1000);
	var timeDiff = countTime - nowTime;
	var packsNow = Math.ceil(timeDiff / 6) > 0 ? Math.ceil(timeDiff / 6) : 0;
	console.log(packsNow);
	if (packsNow != packs) {
		pack(packsNow,packs);
		if (statusCheck() == 2) {
			packs = 0;
		} else {
			var reNum=packs-packsNow;
			dissolve(reNum);
			packs = packsNow;
		}
		flipNum(packs);
	}
	if (statusCheck() != 2) {
		setTimeout('getSales()', 6000);
	}
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

function statusSet() {
	var statusNow = statusCheck();
	if (statusNow == 2) {
		if(!$(".pop-over,.pop-bg").hasClass('active')){
			popbox();
		}
	}
}
function getViewNum() {
	$.ajax({
		type: "GET",
		url: "imf7preorderrcfr.php",
		data: "action=getViewNum",
		success: function(res) {
			$('.viewNum').html(res);
		}
	});
	setTimeout('getViewNum()', 15000);
}

