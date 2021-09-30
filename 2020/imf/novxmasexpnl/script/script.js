$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s);
  if(d!=0||h!=0||i!=0||s!=0) setTimeout("countdown('"+ countdown +"')", 1000);
  else  soldOut();
};
function getCycleCountdown () {
  var date=new Date();
  if (MApp(2.2).cookie.get('xmasexpnl2020')) {
    dt = MApp(2.2).cookie.get('xmasexpnl2020');

  }else{
    dt=date.setMinutes(date.getMinutes()+12);
    MApp(2.2).cookie.set('xmasexpnl2020', dt);
  }

  var datetime = getCountdown(dt);
  if(datetime==0){
    d=h=i=s="00";
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

function getPacksNum(){
  var e = new Date;
  var n1 = MApp(2.2).cookie.get('xmasexpnl2020')/1000;
  var n2 = Math.floor(e.getTime()/1000);
  if(n1-n2>0){
    packs = Math.floor((n1-n2)/7.5);
  }else packs=0;
  $('.packsNum').html(packs);
  setTimeout('getPacksNum()', 5000);
}

function soldOut() {
  //bottom-buy
  $(".messagecad,.banner .message.large").addClass("soldout");
  $(".message-box-sing").show();
  
  
  $(".floatlayer").removeClass("soldout").addClass("soldout");
  var _href = $(".banner .message").eq(0).find(".buybtn").attr("href");
  $(".floatlayer .center").find("h2").html('Helaas, kerstcadeaus uitverkocht...');
  $(".floatlayer .center").find("p").html('Pak toch nog <b>70%</b> Korting!');
  $(".floatlayer .price").find("strong").html('€21,99');
  $(".floatlayer .price").find("del").html('€79,99');
  $(".floatlayer .price").find(".buybtn").attr("href", _href);
  $(".floatlayer .left").find("img").attr("src", _imgsrc);
}
//review
var className = ["one", "two", "three", "four"];
var index = 1;
var $reviewLi = $(".review ul li");
var nextFun = function() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $reviewLi.length; i++) {
    $reviewLi.eq(i).attr("class", className[i]);
  }
  if (index < 3) {
    index++;
    review(index);
  } else {
    index = 0;
    review(index);
  }
};
var prevFun = function() {
  var addName = className.shift();
  className.push(addName);
  for (var i = 0; i < $reviewLi.length; i++) {
    $reviewLi.eq(i).attr("class", className[i]);
  }
  if (index > 0) {
    index--;
    review(index);
  } else {
    index = 3;
    review(index);
  }

};
var review = function(index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};




(function () {
  packs = 79;
  $('.packsNum').html(packs);
  setTimeout('getPacksNum()', 5000);
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"), 0);
  //getPacksNum();
  
  //countdown
  countdown((".countdown strong"));
  countdown(("#floatcount strong"));
}());
