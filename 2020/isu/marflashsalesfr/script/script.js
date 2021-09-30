function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function pack(number, starnumber) {
	$('.buyNum').prop('number', starnumber).animateNumber({
			number: number
		},
		1500
	);
	$('.packnum').html(500 - number);
}

function soldOut() {
	var aff = MApp(2.2).url.getParameters('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".banner,.gift-message,.floatlayer,.feature .price").addClass("soldout");
	$(".banner .right-message h2").html("<span>Désolé, les cadeaux sont déjà épuisés. </span> Vous profiterez encore de  <strong>50%</strong> de réduction sur")
	$(".banner .right-message .progress").html("<h3>IObit Software Updater 2 PRO</h3> <p>1 an d’abonnement / 3 PC</p>")
  $(".banner .right-message ul span:eq(0)").html("29,99€ ")
  $(".banner .right-message ul span:eq(1)").html("50% ")
  $(".banner .right-message ul span:eq(2)").html("15,99€")
	$(".floatlayer .number").html("<h2>Mettez à jour vos programmes Corrigez les failles de sécurité maintenant</h2>");
	$(".floatlayer .price span del").html("29,99€")
	$(".feature .price span >span").remove();
	$(".floatlayer .wrapper").append("<p class='year'>1 an d’abonnement / 3 PC</p>");

	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=fr-isu21y3pc1499&ref=fr_isu23pcsoldout1499'+refStr+'&aff=' + aff + '&refs=fr_purchase_isu&tw=' + tw,
		"onclick": " ga('send', 'event', 'isu3pcbuy', 'buy', 'isupurchase-fr');"
	});
}

$(window).on('scroll', function() {
	if ($(window).scrollTop() > $('.pay-service').offset().top) {
		$('.intro .left-message,.intro .right-message').addClass("on");
	}
	if ($(window).scrollTop() > $('.feature').offset().top) {
		$('.feature .left span').addClass("on");
	}
});

var countdown = function (countdown){
  getCycleCountdown();
	$(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
	setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
	var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

$(function() {
	$('#dg-container').gallery();

	countdown(("#botcount b"));
	countdown(("#bancount b"));

	packsInit();
	// setTimeout("getViewNum()",30000);
});

function cSet(name,value) {
	var Days=2;
	var exp = new Date();
	name=name+exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
	var exp = new Date();
	name=name+exp.getDate();
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	if (arr = document.cookie.match(reg))
		return unescape(arr[2]);
	else
		return null;
}

function packsInit() {
	packs=150;
	getSales(1);
}

function getSales(isInit) {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				pack(sales.packsNum, packs);
				packs = sales.packsNum;
				//flipNum(packs,4);
				$('.packsNum').html(packs);
				//dissolve();
				if ((packs <= 0) && (!$(".banner").hasClass('soldout'))) {
					// soldOut();
				}
			}
			if(packs>0){
				setTimeout('getSales(0)', getReTime());
			}
		}
	});
}

function getReTime(){
	var packsNumTotal=cGet('isulaun_t');
	if(packsNumTotal>1) {
		return (1200 / packsNumTotal) * 1000;
	}else{
		return 20000;
	}
}

function getViewNum(){
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getViewNum",
		success: function(viewNum) {
			if(!isNaN(viewNum)){
				$(".viewNum").html(viewNum);
			}
		}
	});
	setTimeout("getViewNum()",30000);
}