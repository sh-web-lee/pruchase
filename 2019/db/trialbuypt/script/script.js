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

var countdown = function(countdown) {
	getCycleCountdown();
	$(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
	setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
	var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}
function changeFreture(driveNum, gameNum) {
	var _driveNum = parseInt(driveNum);
	var _gameNum = parseInt(gameNum);
	var _num = _driveNum + _gameNum;
	if (_num === 1) {
		$(".feature").removeClass("update");
		$(".feature .content dl.five,.feature .content dl.six").remove();
	} else if (_num >= 1) {
		$(".feature").removeClass("update").addClass("update");
		if ($(".feature").hasClass("update")) {
			$(".feature .content").prepend('<dl class="five"><dt class="driveNum">' + _driveNum + '</dt><dd><h3>drivers disponíveis para atualização <sup>PRO</sup></h3></dd></dl><dl class="six"><dt class="gameNum">' + _gameNum + '</dt><dd><h3>componentes de jogos disponíveis para atualização <sup>PRO</sup></h3></dd></dl>');
		}
	}
	$(".feature p.words").find(".nums").text(_num);
	$(window).scrollWindow($(".banner .buybtn"), $('.feature .content'), ("on"));
	$(window).scrollWindow($(".banner .buybtn"), $('.feature .content dl'), ("on"));
}


$(function() {
	$(window).scrollWindow($(".feature dl.four"), $('.floatlayer'), ("on"));
	$(window).scrollWindow($(".banner .buybtn"), $('.feature .content,.feature .content dl'), ("on"));
	timeSet();
});

function timeSet(){
	transData=JSON.parse(transDataJson);
	var leftDays=transData.LftTrlDay;
	var daysArr=[];
	var beforeDaysArr=[];
	var afterDaysArr=[];
	var before3DaysArr=[];
	if((leftDays==1)||(leftDays==0)){
		daysArr=[getDate(-3),getDate(-2),getDate(-1),getDate(0)];
		beforeDaysArr=[getDate(-5),getDate(-4)];
		before3DaysArr=[getDate(-5)];
		afterDaysArr=[getDate(0)];
	}else if(leftDays==2){
		daysArr=[getDate(-2),getDate(-1),getDate(0),getDate(1)];
		beforeDaysArr=[getDate(-4),getDate(-3)];
		before3DaysArr=[getDate(-4)];
		afterDaysArr=[getDate(1)];
	}else if(leftDays==3){
		daysArr=[getDate(-1),getDate(0),getDate(1),getDate(2)];
		beforeDaysArr=[getDate(-3),getDate(-2)];
		before3DaysArr=[getDate(-3)];
		afterDaysArr=[getDate(2)];
	}else{
		daysArr=[getDate(0),getDate(1),getDate(2),getDate(3)];
		beforeDaysArr=[getDate(-2),getDate(-1)];
		before3DaysArr=[getDate(-2)];
		afterDaysArr=[getDate(3)];
	}
	$(".curvebox .three").html(getDateStr(daysArr));
	$(".curvebox .two").html(getDateStr(beforeDaysArr,1));
	$(".curvebox .four").html("Depois de "+afterDaysArr[0][0]+' '+afterDaysArr[0][1]);
	$(".curvebox .one").html("Antes de "+before3DaysArr[0][0]+' '+before3DaysArr[0][1]);
	if(leftDays==0){
		$(".days").html(1);
		$(".dayStr").html("dia");
	}else{
		if(leftDays==1){
			$(".dayStr").html("dia");
		}
		$(".days").html(leftDays);
	}

	$(".days").html(leftDays);
	if(leftDays==0){
		$(".title p").html("Seu Período de Avaliação terminará em menos de 24 horas! ");
		$(".comparison tbody tr:eq(1),.comparison tbody tr:eq(2),.comparison tbody tr:eq(3),.comparison tbody tr:eq(4)").find(".itema").html("Expira após 24 horas!");
	}else{
		if(leftDays==1){
			$(".dayStr").html("dia");
		}
	}
}

function getDateStr(daysArr,isBef){
	var tempArr=[];
	for(var i=0;i<daysArr.length;i++){
		var exit=0;
		for(var j=0;j<tempArr.length;j++){
			if(tempArr[j][0]==daysArr[i][0]){
				tempArr[j][1]+='<i></i>'+daysArr[i][1];
				exit=1;
			}
		}
		if(exit==0){
			tempArr.push([daysArr[i][0],daysArr[i][1]]);
		}
	}
	//return tempArr;
	if(tempArr.length==1){
		if(isBef){
			return daysArr[0][0] + ' ' + daysArr[0][1]+'-'+daysArr[1][1];
		}else {
			return tempArr[0][0] + ' ' + tempArr[0][1];
		}
	}else{
		if(isBef){
			return daysArr[0][0] + ' ' + daysArr[0][1] + '-' + daysArr[1][0] + ' ' + daysArr[1][1];
		}else {
			return daysArr[0][0] + ' ' + daysArr[0][1] + '-' + daysArr[3][0] + ' ' + daysArr[3][1];
		}
	}

}

function getMonthStr(i){
	var month=["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
	return month[i-1];
}

function getDate(AddDayCount){
	var dd = new Date();
	dd.setDate(dd.getDate()+AddDayCount);
	var y = dd.getFullYear();
	var m = (dd.getMonth()+1)<10?"0"+(dd.getMonth()+1):(dd.getMonth()+1);
	var d = dd.getDate()<10?"0"+dd.getDate():dd.getDate();
	return [getMonthStr(parseInt(m)),d];
}

driverSet();
function driverSet(){
	var drvCount = parseInt(transData.LftDrvCount);
	var cmpCount = parseInt(transData.LftCmpCount);
	var totalNum=drvCount+cmpCount;
	if(totalNum>0){
		$(".feature .words").find("b").text(totalNum);
		if((drvCount>0)&&(cmpCount>0)){
			$(".feature .words").find("span").text("drivers");
			$(".feature").addClass("update");
			$(".feature .content").prepend('<dl class="five"><dt class="driveNum">' + drvCount + '</dt><dd><h3>drivers disponíveis para atualização <sup>PRO</sup></h3></dd></dl><dl class="six"><dt class="gameNum">' + cmpCount + '</dt><dd><h3>componentes de jogos disponíveis para atualização <sup>PRO</sup></h3></dd></dl>');
			$(window).scrollWindow($(".banner .buybtn"), $('.feature .content'), ("on"));
			$(window).scrollWindow($(".banner .buybtn"), $('.feature .content dl'), ("on"));
		}else{
			if(totalNum==1){
				$(".feature .words").find("span").text("driver");
			}
		}
	}
}
compSet();
function compSet(){
	$(".comparison .limite").html('<i class="all-icons black"></i>');
	$(".comparison .itemc .limite").find(".all-icons").removeClass("black").addClass("red");
	var leftDays=parseInt(transData.LftTrlDay);
	if(leftDays>0){
		$(".comparison .exTxt").html("Expira após "+leftDays+((leftDays==1)?' dia':' dias'));
	}
}
