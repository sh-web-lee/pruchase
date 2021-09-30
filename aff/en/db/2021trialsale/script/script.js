var tw = MApp(2.2).datetime.getTimeZone();
$.fn.userMouseover = function(UserMessage) {
	$(this).mouseover(function(event) {
		var num = $(this).index();
		$(this).addClass("active").siblings().removeClass("active");
		$(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
	});
};

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		} else {
			scrollclass.removeClass(ClassName);
		}
	});
};

$.fn.target = function(target, yoffset) {
	$(this).click(function() {
		if (!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({
			scrollTop: Theigth
		}, 'slow');
	});
};

function soldGift() {
	$(".banner,.floatlayer,.comparison").removeClass("sold").addClass("sold");
	if ($(".banner").hasClass("sold")) {
		$(".off").text("70%");
		$(".floatlayer .left img").attr("src", imgSrc);
		$(".floatlayer .countdown").remove();
		$(".buybtn").attr({
			"href": _href,
			"onclick": _ga
		});
		var  newRight = $('.offer.left').children().clone();
		$(".offer.right").html(newRight);
		$(".offer.right .buybtn").removeClass("nonshadow").addClass("shadow");
		$(".offer.left").html('<div class="mask"><span>SOLDOUt</span></div>');
		$(".comparison tfoot .itemc").append('<div class="mask"><span>SOLDOUt</span></div>');
		setTimeout(function() {
			$(".mask span").addClass("zoomout");
		}, 300);
		$(".comparison .countdown").remove();
		$(".comparison .itemc .buybtn").removeClass("shadow");
	}
}

$(function() {
	$('#dg-container').gallery();
	timeInit();
	countdown();
	$(window).scrollWindow($(".feature dl.four"), $('.floatlayer'), ("on"));
	$(window).scrollWindow($(".banner .buybtn"), $('.feature .content dl'), ("on"));
});

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
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

var countdown = function() {
	var countdownArr = ["#tabcount b", "#bancount b", "#floatcount b"];
	var statusNow = statusSet();
	if (statusNow == 1) {
		getCycleCountdown(countTime);
		for (var j = 0; j < countdownArr.length; j++) {
			$(countdownArr[j]).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
		}
	}
	setTimeout("countdown()", 1);
};

function statusSet() {
	var statusNow = statusCheck();
	if (statusNow == 2) {
		if (!$(".banner,.floatlayer,.comparison").hasClass('sold')) {
			soldGift();
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

function titleSet(paragraph1, paragraph2, status) {
	if (status == 1) {
		$(".title").html("<h1>" + paragraph1 + "</h1> <p>" + paragraph2 + "</p>");
	} else {
		$(".title").html("<p>" + paragraph1 + "</p> <h1>" + paragraph2 + "</h1>");
	}
}

$(function() {
	if (transData.length !== 0) {
		driverSet();
		compSet();
	}
	bannerSet();
});

function bannerSet() {
	var leftDays = transData.LftTrlDay;
	var driverCount = parseInt(transData.LftDrvCount) + parseInt(transData.LftCmpCount);
	var paramTo = MApp(2.2).url.getParameters('to');
	var paragraph1 = "";
	var paragraph2 = "";
	var status = 0;
	switch (paramTo) {
		case "trialbuy_7":
		case "trialbuy_2":
			if (driverCount > 1) {
				paragraph1 = "<b class='nums'>" + driverCount + "</b> Drivers Available for Update";
				paragraph2 = "Buy now to update them all with 1-click";
			} else {
				paragraph1 = "<b class='nums'>1</b> Driver Available for Update";
				paragraph2 = "Buy now to update with 1-click";
			}
			status = 1;
			break;
		case "trialbuy_3":
			break;
		case "trialbuy_9":
		case "trialbuy_4":
			//trialOver();
			paragraph1 = "Your Driver Booster Trial has expired!";
			if (driverCount > 0) {
				paragraph2 = driverCount + ((driverCount > 1) ? ' Drivers' : ' Driver') + " Out of Date. Buy Now to Update with 1-click";
			} else {
				paragraph2 = "Buy Now to Keep Your Driver Up to Date ";
			}
			break;
		case "trialbuy_8":
		case "trialbuy_10":
			paragraph1 = "Your trial will end in <span class='days'>7</span> <span class='dayStr'>days</span>.";
			paragraph2 = "Don't Miss Out the Offer Only for Trial User";
			break;
		default:
			break;
	}
	if ((paragraph1 + paragraph2).length > 0) {
		titleSet(paragraph1, paragraph2, status);
	}

	if (leftDays == 0) {
		$(".days").html(1);
		if (paramTo == 'trialbuy_10') {
			$(".title p:eq(0)").html("Your trial will end in less than 24h.");
		}
		$(".comparison tbody tr:eq(1),.comparison tbody tr:eq(2),.comparison tbody tr:eq(3),.comparison tbody tr:eq(4)").find(".itema").html("Expires in less than 24h");
	} else {
		if (leftDays == 1) {
			$(".dayStr").html("day");
		}
		$(".days").html(leftDays);
	}
}

function driverSet() {
	var drvCount = parseInt(transData.LftDrvCount);
	var cmpCount = parseInt(transData.LftCmpCount);
	var totalNum = drvCount + cmpCount;
	if (totalNum > 0) {
		$(".driverCount").html(totalNum);
		$(".feature .words").find(".nums").text(totalNum);
		if ((drvCount > 0) && (cmpCount > 0)) {
			//$(".feature .words").find("span").text("drivers");
			$(".feature").addClass("update");
			$(".feature .content").prepend('<dl class="five"><dt class="driveNum">' + drvCount + '</dt><dd><h3>' + ((drvCount == 1) ? ' driver' : ' drivers') + ' update available <sup>PRO</sup></h3></dd></dl><dl class="six"><dt class="gameNum">' + cmpCount + '</dt><dd><h3>game ' + ((cmpCount == 1) ? 'component' : 'components') + ' update available <sup>PRO</sup></h3></dd></dl>');
			$(window).scrollWindow($(".banner .buybtn"), $('.feature .content'), ("on"));
			$(window).scrollWindow($(".banner .buybtn"), $('.feature .content dl'), ("on"));
		} else {
			if (totalNum == 1) {
				$(".feature .words").find("span").text((drvCount == 0) ? "game component" : "driver");
			}
		}
	}
}

function compSet() {
	var leftDays = parseInt(transData.LftTrlDay);
	if (leftDays > 0) {
		var paramTo = MApp(2.2).url.getParameters('to');
		$(".comparison .exTxt").html('Expires after <span class="days">' + leftDays + '</span> ' + ((leftDays == 1) ? 'day' : 'days'));
		if ((paramTo == 'trialbuy_2') || (paramTo == 'trialbuy_7')) {
			$(".comparison .exTxt.first").html('2 per day');
			$(".limite").html('Unlimited');
		}
	} else {
		$(".comparison .exTxt").text('Expired');
		//$(".comparison .limite").html('<i class="all-icons black"></i>');
		//$(".comparison .itemc .limite").find(".all-icons").removeClass("black").addClass("red");
	}
}