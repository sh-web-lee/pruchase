$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if (h != 0 || i != 0 || s != 0 || mi != 0) setTimeout("countdown('" + countdown + "')", 1);
  else soldOut();
};

function getCycleCountdown() {
  var date = new Date();
  if (MApp(2.2).cookie.get('itimfxmasrc2019')) {
    dt = MApp(2.2).cookie.get('itimfxmasrc2019');

  } else {
    dt = date.setMinutes(date.getMinutes() + 10);
    MApp(2.2).cookie.set('itimfxmasrc2019', dt);
  }

  var datetime = getCountdown(dt);
  if (datetime == 0) {
    h = i = s = mi = 0;
    soldOut();
  } else {
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
  }
}

function getCountdown(t) {
  var e = new Date,
    i = Math.floor(e.getTime() / 1000),
    r = t / 1000,
    n = r - i;
  if (n > 0) {
    var s = Math.floor(n / 86400),
      a = Math.floor(n / 3600 % 24),
      o = Math.floor(n / 60 % 60),
      u = Math.floor(n % 60),
      h = 999 - e.getMilliseconds();
    return 10 > h ? h = "00" + h : 100 > h && (h = "0" + h),
      Array(s, a, o, u, h)
  }
  return 0
}

function progressbar(len) {
  $(".progressbar > p").stop().animate({
    "width": len
  }, 300);
}

function getPacksNum() {
  var e = new Date;
  var n1 = MApp(2.2).cookie.get('itimfxmasrc2019') / 1000;
  var n2 = Math.floor(e.getTime() / 1000);
  if (n1 - n2 > 0) {
    packs = Math.floor((n1 - n2) / 12);
  } else packs = 0;
  $('.packsNum').html(packs);
  progressbar(packs);
  setTimeout('getPacksNum()', 5000);
}

function soldOut() {
  var $imf3pc = $(".banner .buybtn[data-num='1']");
  //spree
  $(".spree-box").removeClass("on");
  setTimeout('$(".spree").hide()', 500);
  //banner
  $(".banner .panel .message").eq(1).addClass("soldout").children().css({
    "visibility": "hidden"
  });
  //gifts
  $(".gifts dl").addClass("soldout");
  //comparison
  $(".comparison h3 span").text("70%");
  $(".comparison .buybtn").attr({
    "href": $imf3pc.attr("href"),
    "onclick": "ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pc1911ximf-it')"
  });
  //bottom-buy
  $(".bottom-buy ul li").eq(0).unbind("click").addClass("soldout");
  bottomBuy(1);
}

function bottomBuy(bot) {
  var $panel = $(".banner .panel .message");
  var botnum = 0;
  if (bot < 2) {
    botnum = bot + 1;
  }
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


(function() {
  setTimeout('$(".tree span").addClass("on")', 300);
  setTimeout('$(".banner .message").addClass("on")', 450);
  setTimeout('$(".spree-box").addClass("on")', 600);
  //countdown
  //progress
  //feature
  $(window).scrollWindow($(".banner .message"), $('.feature .ball,.feature h2,.feature>p,.feature>img'), ("on"));
  //intro
  $(window).scrollWindow($(".feature>img"), $('.intro .ball,.intro h2,.intro>img,.intro dl'), ("on"));
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

  // getPacksNum();
  packs = 49;
  $('.packsNum').html(packs);
  progressbar(packs);
  setTimeout('getPacksNum()', 5000);

  countdown((".countdown strong"));
}());