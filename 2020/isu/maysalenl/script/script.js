$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

//soldout
function soldout() {
  //banner
  $(".banner .message.small").addClass("soldout");
  $(".banner .message.large").addClass("soldout").html(" ");
  $(".banner .message.small .buybtn").addClass("large");
  //gifts
  $(".gifts .ago").addClass("soldout");
  $(".gifts .ago h2").text("Helaas! Gratis Cadeau Uitverkocht");
  //bottombuy
  $(".bottombuy dl.large").addClass("soldout").html(" ");
  $(".bottombuy dl.small").addClass("soldout");
  $(".bottombuy dl.small .buybtn").addClass("large");
  $(".bottombuy p.countdown").html("<span>Pak</span> 50% Korting <span>nu het nog kan!</span>").removeClass("countdown").addClass("title");
}

var countdown = function (countdown, countdown2, countdown3){
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown2).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown3).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('"+ countdown +"', '"+ countdown2 +"', '"+ countdown3 +"')", 1);
};


function getCycleCountdown () {
  if (MApp(2.2).cookie.get('maysalenl2020')) {
    dt = MApp(2.2).cookie.get('maysalenl2020');
  }else{
    var date=new Date();
    dt=date.setSeconds(date.getSeconds()+505);
    setCookie('maysalenl2020',dt,1);
    //MApp(2.2).cookie.set('janwintersalesfr2020', dt);
  }

  var datetime = getCountdown(dt);
  if(datetime==0){
    d=h=i=s='00';
    mi='000';
    soldout();
  }else{
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 3);
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

var featureIndex = 0;

$(function () {
  //countdown
  countdown((".banner .countdown strong"), (".gifts .countdown strong"), (".bottombuy .countdown strong"));
  //feature
  $(".feature .left-message>ul li").hover(function () {
    featureIndex = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".feature .screenshots>ul").stop().animate({"marginLeft": featureIndex*(-556)}, 500);
    $(".feature .screenshots>ul li").eq(featureIndex).addClass("active").siblings().removeClass("active");
    $(".feature .right-message>dl").eq(featureIndex).addClass("active").siblings().removeClass("active");
  });
  $(".feature .right-message>dl").hover(function () {
    featureIndex = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".feature .screenshots>ul").stop().animate({"marginLeft": featureIndex*(-556)}, 500);
    $(".feature .screenshots>ul li").eq(featureIndex).addClass("active").siblings().removeClass("active");
    $(".feature .left-message>ul li").eq(featureIndex).addClass("active").siblings().removeClass("active");
  });
  //intro
  $(window).scrollWindow($(".gifts"), $(".intro .top .screenshot span"),("on"));
  $(window).scrollWindow($(".intro .top"),$(".intro .bottom .screenshot span"),("on"));
  //review
  $(window).scrollWindow($(".intro .bottom"),$('.reviews dl'),("on"));
});