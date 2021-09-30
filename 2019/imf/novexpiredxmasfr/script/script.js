$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
  setTimeout("countdown('"+ countdown +"')", 1000);
};
function getCycleCountdown () {
  var e = new Date;
  var startTimestamp = new Date(new Date().toLocaleDateString()).getTime().toString().substring(0, 10);
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = 0;
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
  var barnum = (parseInt(startTimestamp)+86400-e.getTime().toString().substring(0, 10))*100/86400;
  progressbar(barnum);
}

function progressbar(len) {
  $(".progressbar > p").stop().animate({"width": len}, 300);
}

/*function getPacksNum(){
  var e = new Date;
  var n1 = MApp(2.2).cookie.get('frimfxmas2019')/1000;
  var n2 = Math.floor(e.getTime()/1000);
  if(n1-n2>0){
    packs = Math.floor((n1-n2)/7.5);
  }else {
    packs=20;
  }
  $('.packsNum').html(packs);
  progressbar(packs);
  setTimeout('getPacksNum()', 5000);
}*/

//review
var className = ["one", "two", "three", "four"];
var index = 1;
var $reviewLi = $(".review ul li");
var nextFun = function () {
  var addName = className.pop();
  className.unshift(addName);
  for(var i=0; i<$reviewLi.length; i++) {
    $reviewLi.eq(i).attr("class", className[i]);
  }
  if(index < 3) {
    index ++;
    review(index);
  }else {
    index = 0;
    review(index);
  }
};
var prevFun = function () {
  var addName = className.shift();
  className.push(addName);
  for(var i=0; i<$reviewLi.length; i++) {
    $reviewLi.eq(i).attr("class", className[i]);
  }
  if(index > 0) {
    index --;
    review(index);
  }else {
    index = 3;
    review(index);
  }

};
var review = function (index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};


(function () {
  setTimeout('$(".tree span").addClass("on")', 300);
  setTimeout('$(".banner .message").addClass("on")', 450);
  //intro
  $(window).scrollWindow($(".banner .buybtn"),$('.intro>img,.intro dl,.float'),("on"));
  //float
  $(window).scrollWindow($(".comparison table"),$('.float'),("on"));
  //banner point
  $(".banner .message dd.one i").hover(function () {
    $(".point").fadeIn(300);
  }).mouseleave(function () {
    $(".point").fadeOut(300);
  });
  progressbar(80);
  //getPacksNum();
  
  //countdown
  countdown((".banner .countdown strong"));
  countdown((".float .countdown strong"));
}());
