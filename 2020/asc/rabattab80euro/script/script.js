$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$.fn.target=function (target) {
  $(this).click(function() { 
    var Theigth = target.offset().top;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
}

function showPop(){
  var date=new Date();
  var cnames = 'rabattab80'+date.getDate();
  if (!MApp(2.2).cookie.get(cnames)) {
    $(".coupon").fadeIn(500);
  }
}
function closePop(){
  var date=new Date();
  var cnames = 'rabattab80'+date.getDate();
  setCookie(cnames,1,1);
  $(".coupon").fadeOut(300);
}

/*var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
  setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2).substr(0, 1);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}*/

var countdown = function (countdown){
  getCycleCountdown();
  //$(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown).eq(0).html(0).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
  if(d==0&&h==0&&i==0&s==0){
    //adsaleSoldout();
  }else{
    setTimeout("countdown('"+ countdown +"')", 1);
  }
};
function getCycleCountdown () {
if (MApp(2.2).cookie.get('rabattab80euro20200220')) {
  dt = MApp(2.2).cookie.get('rabattab80euro20200220');
}else{
  var date=new Date();
  dt=date.setSeconds(date.getSeconds()+45055);
  setCookie('rabattab80euro20200220',dt,1);
  //MApp(2.2).cookie.set('janwintersalesfr2020', dt);
}

var datetime = getCountdown(dt);
if(datetime==0){
  d=h=i=s=0;
  //adsaleSoldout();
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


var reviewPersonName = ['Bruce Ramsay', 'Hank Ewert', 'Loretta Harnarine', 'Markus Thomas <br> Geldermann'];
$(function() {
  //countdown
  countdown((".countdown strong"));
  //scroll
  $(window).scrollWindow($(".banner .buybtn"),$('.feature ul li,.float'),("on"));
  //review
  $(".review ul li").hover(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review .review-content p").eq(index).addClass("active").siblings().removeClass("active");
    $(".review .line").html(reviewPersonName[index]).stop().animate({"left": index*176 }, 300);
    if(index == 3) {
      $(".review .line").css({"lineHeight": "22px"});
    }else {
      $(".review .line").css({"lineHeight": "44px"});
    }
  });
  //intro
  $(".intro").target($(".comparison"));
  setTimeout("showPop()", 10000);
});