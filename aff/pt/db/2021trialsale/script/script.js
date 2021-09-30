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

function slodGift() {
	$(".banner .title").html("<p>Seu Período de Avaliação do Driver Booster Expirou!</p><h1>Adquira Agora para Manter Seus Drivers Atualizados </h1>").removeClass("fourday").addClass("soldout");
	$(".comparison .exTxt").html("Expirado");
	$(".comparison .limite").html("<i class='all-icons red'>√</i>");
}

$(function() {
	countdown((".countdown li  strong"));
	countdown(("#tabcount b"));
	countdown(("#floatcount b"));
	//changeFreture(14, 14);
	$(window).scrollWindow($(".feature dl.four"), $('.floatlayer'), ("on"));
	$(window).scrollWindow($(".banner .buybtn"), $('.feature .content,.feature .content dl'), ("on"));
});

$(function(){
	if(transData.length!==0){
		driverSet();
		compSet();
	}
	bannerSet();
});

function bannerSet() {
	var driverCount = parseInt(transData.LftDrvCount) + parseInt(transData.LftCmpCount);
	var paramTo = MApp(2.2).url.getParameters('to');
	var paragraph1 = "";
	var paragraph2 = "";
	var status=0;
	var leftDays = transData.LftTrlDay;
	switch (paramTo) {
		case "trialbuy_7":
		case "trialbuy_2":
			if (driverCount > 1) {
				paragraph1 = "<b class='nums'>"+driverCount + "</b> drivers disponíveis para atualização";
				paragraph2 = "Compre Agora para atualizar todos com 1-clique";
			} else {
				paragraph1 = "<b class='nums'>1</b> driver disponível para atualização";
				paragraph2 = "Compre Agora para atualizar com 1-clique";
			}
			status=1;
			break;
		case "trialbuy_3":
			break;
		case "trialbuy_9":
		case "trialbuy_4":
			paragraph1 = "Seu Período de Avaliação do Driver Booster Expirou!";
			if (driverCount > 0) {
				if (driverCount == 1) {
					paragraph2="1 drivers desatualizados. Compre Agora para atualizar com 1-clique";
				} else {
					paragraph2 = driverCount + " drivers desatualizados. Compre Agora para atualizar com 1-clique";
				}
			}else {
				paragraph2 = "Adquira Agora para Manter Seus Drivers Atualizados";
			}
			break;
		case "trialbuy_8":
		case "trialbuy_10":
			paragraph1="O seu período de avaliação terminará em <span class='days'>7</span> <span class='dayStr'>dias</span>.";
			paragraph2="Não perca esta oferta única para usuários da versão de avaliação";
			break;
		default:
			break;
	}
	if ((paragraph1 + paragraph2).length > 0) {
		titleSet(paragraph1, paragraph2,status);
	}

	$(".days").html(leftDays);
	if(leftDays==0){
		if(paramTo=='trialbuy_10') {
			$(".title p").html("Seu Período de Avaliação terminará em menos de 24 horas! ");
		}
		$(".comparison tbody tr:eq(1),.comparison tbody tr:eq(2),.comparison tbody tr:eq(3),.comparison tbody tr:eq(4)").find(".itema").html("Expira após 24 horas!");
	}else{
		if(leftDays==1){
			$(".dayStr").html("dia");
		}
	}
}

function titleSet(paragraph1, paragraph2, status) {
	if(status==1){
		$(".title").html("<h1>" + paragraph1 + "</h1> <p>" + paragraph2 + "</p>");
	}else {
		$(".title").html("<p>" + paragraph1 + "</p> <h1>" + paragraph2 + "</h1>");
	}
}

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
function compSet(){
	var leftDays=parseInt(transData.LftTrlDay);

	if(leftDays>0){
		$(".comparison .limite").html('Ilimitado');
		$(".comparison .exTxt").html("Expira após <span class='days'>"+leftDays+"</span> days");
		$(".comparison .exTxt.first").html('2 por dia');
	}else{
		$(".comparison .exTxt").text('Expirado');
		$(".comparison .limite").html('<i class="all-icons black"></i>');
		$(".comparison .itemc .limite").find(".all-icons").removeClass("black").addClass("red");
	}
}
