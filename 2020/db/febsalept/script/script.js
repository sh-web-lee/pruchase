
function soldout() {
  //banner
  $(".banner .offer.large").html("<span class='off'>65% OFF</span>").addClass("soldout");
  //giftbox
  $(".giftbox .content").html(" ").addClass("soldout");
  //footbuy
  $(".footbuy").addClass("soldout");
  footbuy($(".footbuy li").eq(1));
}

function footbuy(selector) {
  var index = selector.index();
  var num = selector.attr("data-num");
  var _origain = $(".banner .offer").eq(num).find(".price del").html();
  var _discount = $(".banner .offer").eq(num).find(".price big").text();
  var _href = $(".banner .offer").eq(num).find(".buybtn").attr("href");
  selector.addClass("active").siblings().removeClass("active");
  $(".footbuy .imfbox").find("img").eq(index).addClass("on").siblings().removeClass("on");
  $(".footbuy .price").find("strong > span").text(_discount);
  $(".footbuy .price").find("del").html(_origain);
  $(".footbuy .price").find(".buybtn").attr({
    "href": _href,
  });
}

$(function() {
  //countdown
  countdown((".countdown strong"));
  //footbuy
  $(".footbuy li").on("click", function() {
    footbuy($(this));
  });
});


/*var countdown = function (countdown){
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
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}*/
var countdown = function (countdown){
  getCycleCountdown();
  //$(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if(h!=0||i!=0||s!=0||mi!=0) setTimeout("countdown('"+ countdown +"')", 1);
  else  soldout();
};
function getCycleCountdown () {
  var date=new Date();
  var cName = "febsalept" + date.getDate();
  if (MApp(2.2).cookie.get(cName)) {
    dt = MApp(2.2).cookie.get(cName);
  }else{
  	s = Math.floor(Math.random() * (7865 - 5710) ) + 5710;
    dt=date.setSeconds(date.getSeconds()+s);
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