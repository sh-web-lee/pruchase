function getCycleCountdownmore() {
	var startTimestamp = MApp(2.2).datetime.getTimestamp("2019-07-02 00:00:00");
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 3);
  }


var countdown = function (countdown){
	if(countdownmore) getCycleCountdownmore();
	else getCycleCountdown();
	$(countdown).eq(0).html(0).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
	setTimeout("countdown('"+ countdown +"')", 1);
  };
  function getCycleCountdown () {
	if (MApp(2.2).cookie.get('janwintersalesfr2020')) {
	  dt = MApp(2.2).cookie.get('janwintersalesfr2020');
	}else{
	  var date=new Date();
	  dt=date.setMinutes(date.getMinutes()+10);
	  setCookie('janwintersalesfr2020',dt,1);
	  //MApp(2.2).cookie.set('janwintersalesfr2020', dt);
	}
  
	var datetime = getCountdown(dt);
	if(datetime==0){
	  d=h=i=s=mi=0;
	  soldOut();
	}else{
	  d = MApp(2.2).packages.zeroize(datetime[0], 2);
	  h = MApp(2.2).packages.zeroize(datetime[1], 2);
	  i = MApp(2.2).packages.zeroize(datetime[2], 2);
	  s = MApp(2.2).packages.zeroize(datetime[3], 2);
	  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
	}
  }
  
  function getCountdown(t) {
	var e = new Date
	  , i = Math.floor(e.getTime()/1000)
	  , r = t/1000
	  , n = r - i;
	if (n > 0) {
	  var s = Math.floor(n / 86400)
		, a = Math.floor(n / 3600 % 24)
		, o = Math.floor(n / 60 % 60)
		, u = Math.floor(n % 60)
		, h = 999 - e.getMilliseconds();
	  return 10 > h ? h = "00" + h : 100 > h && (h = "0" + h),
		Array(s, a, o, u, h)
	}
	return 0
  }

function setCookie(cname, cvalue, exdays) {  
    var d = new Date();  
    d.setTime(d.getTime() + (exdays*24*60*60*1000));  
    var expires = "expires="+d.toUTCString();  
    document.cookie = cname + "=" + cvalue + "; " + expires;  
}  
function soldOut() {
	countdownmore = true;
	$(".banner").removeClass("sold").addClass("sold");
	$(".banner .offer.big .price,.bottombuy .price .one p").find("strong").text("26");
	$(".subtitle").html("Jusqu'à <b>-85%</b> ! Ne ratez pas l'occasion de profiter de nos offres exceptionnelles !");
	$(".buybtn").attr({
		"href": _hrefbundle,
		"onclick": _gabundle
	});
	$(".buybtn.small").attr({
		"href": _href,
		"onclick": _ga
	});
	$(".bottombuy li a").attr({
		"href": _bottomhref,
		"onclick": _bottomga
	});
	$(".bottombuy li.one a").attr({
		"href": _bottomhrefbundle,
		"onclick": _bottomgabundle
	});
}
// soldOut();
var countdownmore = false;
$(function() {
	countdown((".countdown b"));
	$(".bottombuy li").on("mouseover", function() {
		var _index = $(this).index();
		$(".bottombuy li").find(".arrow").removeClass("arrowmove");
		$(this).find(".arrow").addClass("arrowmove");
		$(this).addClass('on').siblings().removeClass("on");
		$(".bottombuy .imgbox").find("img").eq(_index).addClass('on').siblings().removeClass("on");
	});

	$(".usereview .users li").mouseover(function(event) {
		var num = $(this).index();
		$(this).addClass("current").siblings().removeClass("current");
		$(".userbox dl").eq(num).addClass("active").siblings().removeClass("active");
	});

	$(window).on('scroll', function() {
		if ($(window).scrollTop() > $(".payment").offset().top) {
			$(".intro-wrap > span").removeClass("on").addClass("on");
			setTimeout(function() {
				$(".intro-wrap > dl").removeClass("on").addClass("on");
			}, 500);
		}
	});
});