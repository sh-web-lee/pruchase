$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

function progressbar(len) {
  $(".progressbar > p").stop().animate({
    "width": len
  }, 300);
}

function getPacksNum() {
  var e = new Date;
  var n1 = MApp(2.2).cookie.get('sdimfxmas2019') / 1000;
  var n2 = Math.floor(e.getTime() / 1000);
  if (n1 - n2 > 0) {
    packs = Math.floor((n1 - n2) / 7.5);
  } else packs = 3;
  $('.packsNum').html(packs);
  // console.log(packs);
  progressbar(packs);
  setTimeout('getPacksNum()', 1000);
}

function bottomBuy(bot) {
  var $panel = $(".banner .panel .message");
  var botnum;
  if (bot === 0) {
    botnum = bot + 1;
  } else if (bot === 1) {
    botnum = 0;
  } else {
    botnum = 2;
  }
  console.log(botnum);
  var message = {
    "price": $panel.eq(botnum).find('.price').find('b').text(),
    "del": $panel.eq(botnum).find('.price').find('del').text(),
    "href": $panel.eq(botnum).find('.buybtn').attr('href'),
    "ga": $panel.eq(botnum).find('.buybtn').attr('onclick')
  };
  $(".bottom-buy .price b").text(message.price);
  $(".bottom-buy .price del").text(message.del);
  $(".bottom-buy .buybtn").attr({
    "href": message.href,
    "onclick": message.ga
  });
  $(".bottom-buy .box img").eq(bot).addClass("on").siblings().removeClass("on");
  $(".bottom-buy ul li").eq(bot).addClass("active").siblings().removeClass("active");
}

//review
var className = ["one", "two", "three", "four", "five"];
var index = 1;
var $reviewLi = $(".review ul li");
var nextFun = function() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $reviewLi.length; i++) {
    $reviewLi.eq(i).attr("class", className[i]);
  }
  if (index < 4) {
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
    index = 4;
    review(index);
  }

};
var review = function(index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};


(function() {
  setTimeout('$(".tree span").addClass("on")', 300);
  setTimeout('$(".banner .message").addClass("on")', 450);

  $(window).scrollWindow($(".banner .buybtn"), $('.feature dl'), ("on"));

  //bottom-buy
  $(".bottom-buy ul li").click(function() {
    bottomBuy($(this).index());
  });
  //banner point
  $(".banner .message dd.one i").hover(function() {
    $(".point").fadeIn(300);
  }).mouseleave(function() {
    $(".point").fadeOut(300);
  });
  progressbar(88);
  // getPacksNum();

  //countdown
  countdown((".countdown strong"));
}());