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


  var countdown = function (countdown){
    getCycleCountdown();
    $(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
    setTimeout("countdown('"+ countdown +"')", 1000);
  };
  function getCycleCountdown () {
    var e = new Date;
    //var startTimestamp = new Date(new Date().toLocaleDateString()).getTime().toString().substring(0, 10);
    var startTimestamp = new Date(e.getFullYear()+'-'+(e.getMonth()+1)+'-'+e.getDate()).getTime().toString().substring(0, 10);
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

function getPacksNum(){
  var packs = MApp(2.2).cookie.get('friusale2020');
  if(packs>3){
    packs = packs-1;
    setTimeout('getPacksNum()', 5000);
    MApp(2.2).cookie.set('friusale2020', packs);
  }else packs=3;
  $('.packsNum').html(packs);
}

function bottomBuy(bot) {
  var $panel = $(".banner .panel .message");
  var botnum = 0;
  if(bot === 0) {
    botnum = 1;
  } else if (bot === 1) {
    botnum = 0;
  } else  {
    botnum = bot;
  }
  var message = {
    "price": $panel.eq(botnum).find('.price').find('b').text(),
    "del":  $panel.eq(botnum).find('.price').find('del').text(),
    "href": $panel.eq(botnum).find('.buybtn').attr('href'),
    "ga": $panel.eq(botnum).find('.buybtn').attr('onclick')
  };
  $(".bottom-buy .price b").text(message.price);
  $(".bottom-buy .price del").text(message.del);
  $(".bottom-buy .buybtn").attr({"href": message.href, "onclick": message.ga});
  $(".bottom-buy .box img").eq(bot).addClass("on").siblings().removeClass("on");
  $(".bottom-buy ul li").eq(bot).addClass("active").siblings().removeClass("active");
}

//review
var className = ["one", "two", "three", "four", "five", "six"];
var index = 1;
var $reviewLi = $(".review ul li");
var nextFun = function () {
  var addName = className.pop();
  className.unshift(addName);
  for(var i=0; i<$reviewLi.length; i++) {
    $reviewLi.eq(i).attr("class", className[i]);
  }
  if(index < 5) {
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
    index = 5;
    review(index);
  }

};
var review = function (index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};


(function () {
  setTimeout('$(".tree span").addClass("on")', 300);
  setTimeout('$(".banner .message").addClass("on")', 450);
  setTimeout('$(".spree-box").addClass("on")', 600);
  //intro
  $("a.intro").target($(".comparison"));
  //bottom-buy
  $(".bottom-buy ul li").click(function () {
    bottomBuy($(this).index());
  });
  //banner point
  $(".banner .message dd.one i").hover(function () {
    $(".point").fadeIn(300);
  }).mouseleave(function () {
    $(".point").fadeOut(300);
  });
  
  
  if (MApp(2.2).cookie.get('friusale2020')) {
    packs = MApp(2.2).cookie.get('friusale2020');
  }else{
    packs = 89;
    MApp(2.2).cookie.set('friusale2020', packs);
  }
  $('.packsNum').html(packs);
  setTimeout('getPacksNum()', 5000);
  //getPacksNum();
  
  //countdown
  countdown((".countdown strong"));
}());
