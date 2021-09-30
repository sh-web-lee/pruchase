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
			$(".feature .content").prepend('<dl class="five"><dt class="driveNum">' + _driveNum + '</dt><dd><h3>drivers update available <sup>PRO</sup></h3></dd></dl><dl class="six"><dt class="gameNum">' + _gameNum + '</dt><dd><h3>game components update available <sup>PRO</sup></h3></dd></dl>');
		}
	}
	$(".feature p.words").find(".nums").text(_num);
	$(window).scrollWindow($(".banner .buybtn"), $('.feature .content'), ("on"));
	$(window).scrollWindow($(".banner .buybtn"), $('.feature .content dl'), ("on"));
}

$(function() {
	$('#dg-container').gallery();
	$(window).scrollWindow($(".feature dl.four"), $('.floatlayer'), ("on"));
	$(window).scrollWindow($(".banner .buybtn"), $('.feature .content dl'), ("on"));
	//changeFreture(12, 4);

	var myDate = new Date();
	var _month = myDate.toDateString().split(" ")[1];
	var _date = myDate.toDateString().split(" ")[2];
	var _date1 = parseInt(_date) + 1;
	var _date2 = parseInt(_date1) + 1;
	var _date3 = parseInt(_date2) + 1;
	var _date4 = parseInt(_date3) + 1;
	$(".month").text(_month);
	$(".date0").text(_date);
	$(".date1").text(_date1);
	$(".date2").text(_date2);
	$(".date3").text(_date3);
	$(".date4").text(_date4);
	timeSet();
	featureSet();
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
	$(".curvebox .four").html("After "+afterDaysArr[0][0]+' '+afterDaysArr[0][1]);
	$(".curvebox .one").html("Before "+before3DaysArr[0][0]+' '+before3DaysArr[0][1]);
	if(leftDays==0){
		$(".days").html(1);
		$(".title p:eq(0)").html("Your trial will end in less than 24h.");
		$(".comparison tbody tr:eq(1),.comparison tbody tr:eq(2),.comparison tbody tr:eq(3),.comparison tbody tr:eq(4)").find(".itema").html("Expires in less than 24h");
	}else{
		if(leftDays==1){
			$(".dayStr").html("day");
		}
		$(".days").html(leftDays);
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
			return daysArr[0][0] + ' ' + daysArr[0][1]+' - '+daysArr[1][1];
		}else {
			return tempArr[0][0] + ' ' + tempArr[0][1];
		}
	}else{
		if(isBef){
			return daysArr[0][0] + ' ' + daysArr[0][1] + ' - ' + daysArr[1][0] + ' ' + daysArr[1][1];
		}else {
			return daysArr[0][0] + ' ' + daysArr[0][1] + ' - ' + daysArr[3][0] + ' ' + daysArr[3][1];
		}
	}

}

function getMonthStr(i){
	var month=["Jan.","Feb.","Mar.","Apr.","May","Jun.","Jul.","Aug.","Sep.","Oct.","Nov.","Dec."];
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

function featureSet() {
	//var drvCount = parseInt(transData.LftDrvCount);
	//var cmpCount = parseInt(transData.LftCmpCount);
	//var dayCount = parseInt(transData.LftTrlDay);
	//changeFreture(drvCount, cmpCount, dayCount);
}

driverSet();
function driverSet() {
	var drvCount = parseInt(transData.LftDrvCount);
	var cmpCount = parseInt(transData.LftCmpCount);
	var totalNum = drvCount + cmpCount;
	console.log(totalNum);
	if (totalNum > 0) {
		$(".driverCount").html(totalNum);
		$(".feature .words").find(".nums").text(totalNum);
		if ((drvCount > 0) && (cmpCount > 0)) {
			$(".feature").addClass("update");
			$(".feature .content").prepend('<dl class="five"><dt class="driveNum">' + drvCount + '</dt><dd><h3>'+((drvCount==1)?' driver':' drivers')+' update available <sup>PRO</sup></h3></dd></dl><dl class="six"><dt class="gameNum">' + cmpCount + '</dt><dd><h3>game '+((cmpCount==1)?'component':'components')+' update available <sup>PRO</sup></h3></dd></dl>');
			$(window).scrollWindow($(".banner .buybtn"), $('.feature .content'), ("on"));
			$(window).scrollWindow($(".banner .buybtn"), $('.feature .content dl'), ("on"));
		} else {
			if (totalNum == 1) {
				$(".feature .words").find("span").text((drvCount==0)?"game component":"driver");
			}
		}
	}
}