$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

//classNames
var classNames = [];
var detailIndex = 2;
function getClassNames() {
  $(".review ul li").each(function () {
    classNames.push($(this).attr("class"));
  });
  return classNames;
}
//previous
function previous() {
  detailIndex --;
  var className = classNames.shift();
  classNames.push(className);
  $(".review ul li").each(function (index,element) {
    $(element).attr("class", classNames[index]);
  });
  if(detailIndex < 0) {
    detailIndex = 4;
  }
  $(".review .details p").eq(detailIndex).addClass("on").siblings().removeClass("on");
}

//nextpage
function nextpage() {
  detailIndex ++;
  var className = classNames.pop();
  classNames.unshift(className);
  $(".review ul li").each(function (index,element) {
    $(element).attr("class", classNames[index]);
  });
  if(detailIndex > 4) {
    detailIndex = 0;
  }
  $(".review .details p").eq(detailIndex).addClass("on").siblings().removeClass("on");
}

//bottombuy
function bottombuy(selector) {
  var index = selector.index();
  var url = selector.attr("data-url");
  var price = selector.attr("data-price");
  var del = selector.attr("data-del");
  selector.addClass("active").siblings().removeClass("active");
  $(".bottombuy .box img").eq(index).addClass("on").siblings().removeClass("on");
  $(".bottombuy .buybtn").attr({"href": url});
  $(".bottombuy .price").find("big").text(price).end().find("del").text(del);
}

//soldout
function soldout() {
  //banner
  $(".banner .title p").html("SKORZYSTAJ Z WYJĄTKOWEJ ZNIŻKI");
  $(".banner dl").addClass("soldout").eq(1).removeClass("large middle").addClass("small right").attr({"href": "javascript: void(0);"}).end().eq(2).removeClass("small right").addClass("large middle");
  //countdown
  $(".countdown").css({"visibility": "hidden"});
  //gifts
  $(".gifts").addClass("soldout");
  $(".gifts h2").text("Nie zwlekaj i skorzystaj z wyjątkowej oferty!");
  //centbuy
  $(".centbuy").slideUp(500);
  //bottombuy
  bottombuy($(".bottombuy ul li").eq(2));
  $(".bottombuy ul li").eq(1).addClass("soldout");
  $(".bottombuy ul").addClass("soldout");
}

$(function () {
  //countdown
  countdown((".banner .countdown strong"), (".centbuy .countdown strong"), (".bottombuy .countdown strong"));
  //feature
  $(window).scrollWindow($(".banner .buybtn"),$('.feature .top dl'),("on"));
  $(window).scrollWindow($(".feature .top"),$('.feature .bot dl'),("on"));
  //review
  getClassNames();
  //bottombuy
  $(".bottombuy ul li").click(function () {
    bottombuy($(this));
  });
});


// var countdown = function (countdown, countdown2, countdown3){
//   getCycleCountdown();
//   $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
//   $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
//   $(countdown3).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
//   setTimeout("countdown('"+ countdown +"', '"+ countdown2 +"', '"+ countdown3 +"')", 1);
// };
// function getCycleCountdown () {
//   var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
//   var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
//   d = MApp(2.2).packages.zeroize(datetime[0], 2);
//   h = MApp(2.2).packages.zeroize(datetime[1], 2);
//   i = MApp(2.2).packages.zeroize(datetime[2], 2);
//   s = MApp(2.2).packages.zeroize(datetime[3], 2);
//   mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
// }


var countdown = function (countdown, countdown2, countdown3){
  getCycleCountdown();
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown3).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout("countdown('"+ countdown +"', '"+ countdown2 +"', '"+ countdown3 +"')", 1);
};

var timer = 0;

function getCycleCountdown () {
  if (MApp(2.2).cookie.get('maysale2020pl')) {
    dt = MApp(2.2).cookie.get('maysale2020pl');
  }else{
    var date=new Date();
    dt=date.setMinutes(date.getMinutes()+15);
    setCookie('maysale2020pl',dt,1);
    //MApp(2.2).cookie.set('janwintersalesfr2020', dt);
  }

  var datetime = getCountdown(dt);
  if(datetime==0){
    d=h=i=s=mi='00';
    if(timer === 0) {
      soldout();
    }
    timer ++;
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