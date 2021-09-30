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
	$(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
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

function trialOver() {
	$(".banner").removeClass("trialover").addClass("trialover");
	$(".banner .title").html("<p>Votre Driver Booster Trial est expiré</p><h1>Achetez maintenant pour garder vos pilotes à jour</h1>");
	$(".comparison .exTxt").text('Expiré');
	$(".comparison .limite").html('<i class="all-icons black"></i>');
	$(".comparison .itemc .limite").find(".all-icons").removeClass("black").addClass("red");
}

$(function() {
	countdown(("#tabcount b"));
	countdown(("#bancount b"));
	countdown(("#floatcount b"));
	$(window).scrollWindow($(".feature dl.four"), $('.floatlayer'), ("on"));
	$(window).scrollWindow($(".banner .buybtn"), $('.feature .content dl'), ("on"));
	$(".review dl dt .img-box").mouseover(function() {
		$(this).parent().parent().addClass("active").siblings().removeClass("active");
	});
});

$(function(){
	if(transData.length!==0){
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
				paragraph1 = "<b class='nums'>" + driverCount + "</b> pilotes disponibles pour mettre à jour";
				paragraph2 = "Achetez maintenant pour les mettre à jour en un clic";
			} else {
				paragraph1 = "<b class='nums'>1</b> pilote disponible pour mettre à jour";
				paragraph2 = "Achetez maintenant pour le mettre à jour en un clic";
			}
			status = 1;
			break;
		case "trialbuy_3":
			break;
		case "trialbuy_9":
		case "trialbuy_4":
			trialOver();
			paragraph1 = "Votre Driver Booster Trial est expiré";
			if (driverCount > 0) {
				if (driverCount == 1) {
					paragraph2 = "1 pilote obsolète. Achetez maintenant pour le mettre à jour en un clic";
				} else {
					paragraph2 = driverCount + " pilotes obsolètes. Achetez maintenant pour les mettre à jour en un clic";
				}
			} else {
				paragraph2 = "Achetez maintenant pour garder vos pilotes à jour";
			}
			break;
		case "trialbuy_8":
		case "trialbuy_10":
		paragraph1 = "Votre période d'essai arrive à expiration dans <span class='days'>7</span> <span class='dayStr'>jours</span>.";
			paragraph2 = "Ne ratez pas l'offre uniquement pour les utilisateurs à l'essai";
			break;
		default:
			break;
	}
	if ((paragraph1 + paragraph2).length > 0) {
		titleSet(paragraph1, paragraph2, status);
	}

	$(".days").html(leftDays);
	if(leftDays==0){
		if(paramTo=='trialbuy_10') {
			$(".title p").html("Votre période d'essai arrive à expiration dans moins de 24 heures");
		}
		$(".comparison tbody tr:eq(1),.comparison tbody tr:eq(2),.comparison tbody tr:eq(3),.comparison tbody tr:eq(4)").find(".itema").html("Expirera dans 24 heures");
	}else{
		if(leftDays==1){
			$(".dayStr").html("jour");
		}
	}
}

function titleSet(paragraph1, paragraph2, status) {
	if (status == 1) {
		$(".title").html("<h1>" + paragraph1 + "</h1> <p>" + paragraph2 + "</p>");
	} else {
		$(".title").html("<p>" + paragraph1 + "</p> <h1>" + paragraph2 + "</h1>");
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
			// $(".feature .words").find("span").text("pilotes");
			$(".feature .words").find("span").text("pilotes obsolètes");
			$(".feature .words").find("em").text("& composants");
			$(".feature").addClass("update");
			$(".feature .content").prepend('<dl class="five"><dt class="driveNum">' + drvCount + '</dt><dd><h3>mises à jour de pilotes disponibles <sup>PRO</sup></h3></dd></dl><dl class="six"><dt class="gameNum">' + cmpCount + '</dt><dd><h3>mises à jour de composants de jeu disponibles <sup>PRO</sup></h3></dd></dl>');
			$(window).scrollWindow($(".banner .buybtn"), $('.feature .content'), ("on"));
			$(window).scrollWindow($(".banner .buybtn"), $('.feature .content dl'), ("on"));
		} else {
			if (totalNum == 1) {
				// $(".feature .words").find("span").text("pilote");
				$(".feature .words").find("span").text("pilote obsolète");
				$(".feature .words").find("em").text("/ composant");
			}
		}
	}
}

function compSet() {
	var leftDays = parseInt(transData.LftTrlDay);
	var paramTo = MApp(2.2).url.getParameters('to');
	if (leftDays > 0) {
		$(".comparison .exTxt").html('Expirera dans <span class="days">' + leftDays + '</span>' + ((leftDays==1)?' jour':' jours'));
		if((paramTo=='trialbuy_2')||(paramTo=='trialbuy_7')){
			$(".comparison .limite").html('Illimité');
			$(".comparison .exTxt.first").html('2 par jour');
		}
	} else {
		$(".comparison .exTxt").text('Expiré');
		$(".comparison .limite").html('<i class="all-icons black"></i>');
		$(".comparison .itemc .limite").find(".all-icons").removeClass("black").addClass("red");
	}
}