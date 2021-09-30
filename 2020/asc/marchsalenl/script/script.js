function goTarget(target, yoffset) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}

function soldout() {
  $(".banner, .bottombuy").addClass("soldout");
  $(".banner .offer.small .buybtn, .bottombuy .offer.small .buybtn").removeClass("gray").addClass("yellow");
}

$(function () {
  //countdown
  countdown((".banner .countdown strong"), (".bottombuy .countdown strong"));
  //benefits
  $(".benefits .detail-list dl").hover(function() {
    $(".benefits .showcase .screenshot").css('marginLeft', -555*($(this).index()+1));
    $(".benefits .zoom li").removeClass('active').eq($(this).index()+1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benefits .list-icon li").removeClass('active').eq($(this).index()+1).addClass('active');
  });
  $(".benefits .list-icon li").hover(function() {
    $(".benefits .showcase .screenshot").css('marginLeft', -555*($(this).index()));
    $(".benefits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if(num==0) {

      $(".benefits .detail-list dl").removeClass("active");
    }
    else {
      $(".benefits .detail-list dl").eq($(this).index()-1).addClass("active").siblings().removeClass("active");
    }
    $(".benefits .list-icon li").removeClass('active');
    $(this).addClass('active');
  });
  //review
  $(".review ul li").hover(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review .describe p").eq(index).addClass("active").siblings().removeClass("active");
    $(".review .arrow img").stop().animate({"marginTop": index*72 - 339}, 300);
  });
});


var countdown = function (countdown1, countdown2){
  getCycleCountdown();
  //$(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
  $(countdown1).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown2).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  //$(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if(h!=0||i!=0||s!=0||mi!=0)  setTimeout("countdown('"+ countdown1 +"', '"+ countdown2 +"')", 1);
  else  soldout();
};
function getCycleCountdown () {
  var date=new Date();
  var cName = "marchsalenl" + date.getDate();
  if (MApp(2.2).cookie.get(cName)) {
    dt = MApp(2.2).cookie.get(cName);
  }else{
    dt=date.setSeconds(date.getSeconds()+545);
    MApp(2.2).cookie.set(cName, dt);
  }

  var datetime = getCountdown(dt);
  if(datetime==0){
    d=h=i=s=mi=0;
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