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
  $(".banner .content .large").html(" ").addClass("soldout");
  //bottombuy
  $(".bottombuy .content").html(" ").addClass("soldout");
}

$(function() {
  //countdown
  countdown((".countdown strong"));
  //feature
  $(window).scrollWindow($(".banner .buybtn"),$('.rocket'),("on"));
  //review
  var len = $(".review .content span").length;
  for(var i=0; i<len; i++){
    $(".review .content span").eq(i).addClass("span" + i);
  }
  $(window).scrollWindow($(".review"),$('.review .content dl'),("on"));
});


var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if(h!='00'||i!='00'||s!='00'||mi!='000') setTimeout("countdown('"+ countdown +"')", 1);
  else  soldout();
};
function getCycleCountdown () {
  var date=new Date();
  var cName = "ascfebsaleit" + date.getDate();
  if (MApp(2.2).cookie.get(cName)) {
    dt = MApp(2.2).cookie.get(cName);
  }else{
    dt=date.setSeconds(date.getSeconds()+900);
    MApp(2.2).cookie.set(cName, dt);
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