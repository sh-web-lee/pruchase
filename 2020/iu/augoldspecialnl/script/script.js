var userIndex = 0;

/*var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
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
}*/

var countdown = function (countdown){
	getCycleCountdown();
	$(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
	//$(countdown).eq(0).html(0).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
	setTimeout("countdown('"+ countdown +"')", 1);
  };
  function getCycleCountdown () {
	if (MApp(2.2).cookie.get('iuoldspecial')) {
	  dt = MApp(2.2).cookie.get('iuoldspecial');
	}else{
	  var date=new Date();
	  dt=date.setSeconds(date.getSeconds()+576);
	  setCookie('iuoldspecial',dt,1);
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

//solOut
function soldOut() {
  var del = $(".banner .panel.small .price del").text();
  var href = $(".banner .panel.small .buybtn").attr("href");
  //banner
  $(".banner .panel").addClass("soldout");
  //gifts
  $(".gifts").addClass("soldout");
  //bottombuy
  $(".bottombuy .box img").animate({"marginLeft": -433}, 500);
  $(".bottombuy dl").animate({"marginLeft": -148}, 500);
  $(".bottombuy dl dt h2").text("Helaas! Gratis Cadeaus uitverkocht. Pak toch nog 33% korting!");
  $(".bottombuy dl dd .price del").text(del);
   $(".bottombuy dl dd .price big").html("19");
  $(".bottombuy dl dd .buybtn").attr({"href": href});
  $(".bottombuy dl dd .countdown").hide();
}

//review
function review(index) {
  if(index == 1 || index == 2) {
    $(".review .user .details").addClass("long");
  }else {
    $(".review .user .details").removeClass("long");
  }
  $(".review .user .details p").eq(index).addClass("active").siblings().removeClass("active");
  $(".review .user .photos ul li").eq(index).addClass("active").siblings().removeClass("active");
}

//prevUser
function prevUser() {
  userIndex --;
  if(userIndex >= 0) {
    review(userIndex);
  }else {
    userIndex = 3;
    review(userIndex);
  }
}
//nextUser
function nextUser() {
  userIndex ++;
  if(userIndex <= 3) {
    review(userIndex);
  }else {
    userIndex = 0;
    review(userIndex);
  }
}

(function () {
  //countdown
  countdown((".countdown strong"));
  countdown((".countdown2 strong"));
  countdown((".countdown3 strong"));
  setTimeout(function() {
    $(".banner .countdown").addClass("show");
  }, 2000);

  //feature
  $(".feature .message ul li").hover(function() {
    var index = $(this).index();
    $(".feature .message>span").stop().animate({"marginTop": index*104}, 300);
    $(".feature .screen .list").stop().animate({"marginLeft": -(index+1)*560}, 300);
  });
}());
