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
  if(_num === 1) {
    $(".feature .original").css({"display": "block"});
    $(".feature .update").css({"display": "none"});

  }else if (_num > 1){
    $(".feature .original").css({"display": "none"});
    $(".feature .update").css({"display": "block"});
    $(".feature .update h3 strong").text(_num);
    $(".feature .update .driveNum").text(_driveNum);
    $(".feature .update .gameNum").text(_gameNum);
  }
}

$(function() {
	$(window).scrollWindow($(".comparison h2"), $('.floatlayer'), ("on"));
	$(window).scrollWindow($(".banner .title"), $('.feature .content dl'), ("on"));
  $(".review dl dt .img-box").mouseover(function(event) {
    $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });
	//changeFreture(12, 4);
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
	$(".curvebox .four").html("Dopo "+afterDaysArr[0][1]+' '+afterDaysArr[0][0]);
	$(".curvebox .one").html("Prima di "+before3DaysArr[0][1]+' '+before3DaysArr[0][0]);
	$(".days").html(leftDays);
	if(leftDays==0){
		$(".title p").html("La tua versione di prova scadrà in meno di 24 ore.");
		$(".comparison tbody tr:eq(1),.comparison tbody tr:eq(2),.comparison tbody tr:eq(3),.comparison tbody tr:eq(4)").find(".itema").html("Scadrà in meno di 24 ore");
	}else{
		if(leftDays==1){
			$(".dayStr").html("GIORNO");
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
			return daysArr[0][1]+' - '+daysArr[1][1]+ ' '+daysArr[0][0];
		}else {
			return tempArr[0][1]+' '+tempArr[0][0];
		}
	}else{
		if(isBef){
			return daysArr[0][1] + ' ' + daysArr[0][0] + ' - ' + daysArr[1][1] + ' ' + daysArr[1][0];
		}else {
			return daysArr[0][1] + ' ' + daysArr[0][0] + ' - ' + daysArr[3][1] + ' ' + daysArr[3][0];
		}
	}

}

function getMonthStr(i){
	var month=["Gen.","Feb.","Mar.","Apr.","Mag.","Giu.","Lug.","Ago.","Set.","Ott.","Nov.","Dic."];
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
		$(".feature .driverCount").html(totalNum);
		if((drvCount>0)&&(cmpCount>0)){
			$(".feature .original").css({"display": "none"});
			$(".feature .update").css({"display": "block"});

			$(".feature .update h3 strong").text(totalNum);
			$(".feature .update .driveNum").text(drvCount);
			$(".feature .update .gameNum").text(cmpCount);

			if(drvCount==1){
				$(".five .fea-des1").html("aggiornamento");
				$(".five .fea-des2").html("disponibile");
			}
			if(cmpCount==1){
				$(".six .fea-des1").html("aggiornamento");
				$(".six .fea-des2").html("disponibile");
			}
		}else{
			if(totalNum==1){
				$(".feature").find(".driverStr").html("driver obsoleto / componente");
				//$(".fea-des1").html("aggiornamento");
				//$(".fea-des2").html("disponibile");
			}
		}
	}
}