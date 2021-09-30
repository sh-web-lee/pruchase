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

$(function() {
	$('#dg-container').gallery();
	timeInit();
	$(window).scrollWindow($(".feature dl.four"), $('.floatlayer'), ("on"));
	$(window).scrollWindow($(".banner .buybtn"), $('.feature .content dl'), ("on"));
});

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}


var countdown = function (countdown, countdown2, countdown3){
  getCycleCountdown();
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown3).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout("countdown('"+ countdown +"', '"+ countdown2 +"', '"+ countdown3 +"')", 1);
};

function getCycleCountdown () {
  var startTimestamp = MApp(2.2).datetime.getTimestamp(countDate);
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "dkdbjul_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  var countTime;
  if (arr == null) {
    countTime = nowTime + 3600;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  countDate=getLocalTime(countTime);
  countdown(("#countdown strong"), ("#tabcount strong"), ("#floatcount strong"));
}

function getLocalTime(dateTime){
  var date = new Date(dateTime*1000);
  var Y = date.getFullYear() + '-';
  var M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
  var D = (date.getDate() < 10 ? '0' + (date.getDate()) : date.getDate()) + ' ';
  var h = (date.getHours() < 10 ? '0' + date.getHours() : date.getHours()) + ':';
  var m = (date.getMinutes() <10 ? '0' + date.getMinutes() : date.getMinutes()) + ':';
  var s = (date.getSeconds() <10 ? '0' + date.getSeconds() : date.getSeconds());
  return Y+M+D+h+m+s;
}


function titleSet(paragraph1, paragraph2, status) {
	if(status===1){
		$(".title").html("<h1>" + paragraph1 + "</h1> <p>" + paragraph2 + "</p>");
	}else {
		$(".title").html("<p>" + paragraph1 + "</p> <h1>" + paragraph2 + "</h1>");
	}
}

$(function(){
	if(transData.length!==0){
		driverSet();
		compSet();
	}
	bannerSet();
});

//add trialOver by 2020-07-22
function trialOver() {
  $(".comparison .exTxt").text('Udløbet');
  $(".comparison .itemb .limite").html('<i class="all-icons black"></i>');
  $(".comparison .itemc .limite").html('<i class="all-icons red"></i>');
}

function bannerSet() {
  var leftDays = transData.LftTrlDay;
  var driverCount = parseInt(transData.LftDrvCount) + parseInt(transData.LftCmpCount);
  var paramTo = MApp(2.2).url.getParameters('to');
  var paragraph1 = "";
  var paragraph2 = "";
  var status=0;
  switch (paramTo) {
    case "trialbuy_7":
    case "trialbuy_2":
      paragraph1 = "<b class='nums'>"+driverCount + "</b> drevopdateringer tilgængelige";
      paragraph2 = "Køb Pro-versionen nu og opdater alle drev med et klik";
      status=1;
      break;
    case "trialbuy_3":
      break;
    case "trialbuy_9":
    case "trialbuy_4":
      trialOver();
      paragraph1 = "Din prøveperiode af Driver Booster er udløbet";
      if (driverCount > 0) {
        paragraph2 = driverCount + " forældede drev fundet. Løb nu og opdater med et klik";
      } else {
        paragraph2 = "Køb Pro-versionen nu og hold dine drev opdaterede";
      }
      break;
    case "trialbuy_8":
    case "trialbuy_10":
      paragraph1="Din prøveperiode slutter om <span class='days'>7</span> dage.";
      paragraph2="Gå ikke glip af vores tilbud udelukkende til kunder af prøveversionen";
      break;
    default:
      break;
  }
  if ((paragraph1 + paragraph2).length > 0) {
    titleSet(paragraph1, paragraph2,status);
  }

  if (leftDays == 0) {
    $(".days").html(1);
    if(paramTo=='trialbuy_10') {
      $(".title p:eq(0)").html("Din prøveperiode slutter om mindre end 24 timer");
    }
    $(".comparison tbody tr:eq(1),.comparison tbody tr:eq(2),.comparison tbody tr:eq(3),.comparison tbody tr:eq(4)").find(".itema").html("Udløber om mindre end 24 timer");
  } else {
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
			$(".feature").addClass("update");
      $(".feature .content").prepend('<dl class="five">' +
        '<dt class="driveNum">' + drvCount + '</dt>' +
        '<dd>' +
        '<h3>driveropdateringer tilgængelige <sup>PRO</sup></h3>' +
        '</dd>' +
        '</dl>' +
        '<dl class="six">' +
        '<dt class="gameNum">' + cmpCount + '</dt>' +
        '<dd>' +
        '<h3>tilgængelige opdateringer til spilkomponenter <sup>PRO</sup></h3>' +
        '</dd>' +
        '</dl>');
			$(window).scrollWindow($(".banner .buybtn"), $('.feature .content'), ("on"));
			$(window).scrollWindow($(".banner .buybtn"), $('.feature .content dl'), ("on"));
		} else {
			if (totalNum === 1) {
				$(".feature .words").find("span").text((drvCount===0)?"Spilkomponenter":"drev");
			}
		}
	}
}

function compSet() {
  var leftDays = parseInt(transData.LftTrlDay);
  if (leftDays > 0) {
    var paramTo = MApp(2.2).url.getParameters('to');
    $(".comparison .exTxt").html('<span class="days">'+leftDays+'</span> dage');
    if((paramTo=='trialbuy_2')||(paramTo=='trialbuy_7')){
      $(".comparison .exTxt.first").html('2 pr. dag');
      $(".limite").html('Ubegrænset');
    }else if((paramTo=='trialbuy_8')){
      $(".comparison .itemc .limite").html('<i class="all-icons red"></i>');
    }
  } else {
    $(".comparison .exTxt").text('Udløbet');
    $(".comparison .itemb .limite").html('<i class="all-icons black"></i>');
    $(".comparison .itemc .limite").html('<i class="all-icons red"></i>');
  }
}