$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};
$.fn.target=function (target) {
  $(this).click(function() {
    var Theigth = target.offset().top;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
}


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
  var ga = selector.attr("data-ga");
  var price = selector.attr("data-price");
  var del = selector.attr("data-del");
  selector.addClass("active").siblings().removeClass("active");
  $(".bottombuy .box img").eq(index).addClass("on").siblings().removeClass("on");
  $(".bottombuy .buybtn").attr({"href": url, "onclick": ga});
  $(".bottombuy .price").find("big").text(price).end().find("del").text(del);
}

//soldout
function soldout() {
  //banner
  $(".banner dl").addClass("soldout").eq(1).removeClass("large middle").addClass("small left").attr({"href": "javascript: void(0);"}).end().eq(0).removeClass("small left").addClass("large middle");
  //countdown
  $(".countdown").css({"visibility": "hidden"});
  //gifts
  $(".gifts").addClass("soldout");
  $(".gifts h2").text("¡No lo dudes y aprovecha la oferta única!");
  //centbuy
  $(".centbuy").slideUp(500);
  //bottombuy
  bottombuy($(".bottombuy ul li").eq(1));
  $(".bottombuy ul li").eq(0).addClass("soldout");
  $(".bottombuy ul").addClass("soldout");
}

$(function () {
  //feature
  $(".feature .more").target($(".compare"));
  //countdown
  countdown((".banner .countdown strong"), (".centbuy .countdown strong"), (".bottombuy .countdown strong"));
  //review
  getClassNames();
  //bottombuy
  $(".bottombuy ul li").click(function () {
    bottombuy($(this));
  });
});


var countdown = function (countdown, countdown2, countdown3){
  getCycleCountdown();
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown2).eq(0).html("00").end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown3).eq(0).html("00").end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
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