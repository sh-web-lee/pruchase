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
  if (MApp(2.2).cookie.get('xmasxe2020it')) {
    dt = MApp(2.2).cookie.get('xmasxe2020it');

  }else{
    dt=date.setMinutes(date.getMinutes()+15);
    MApp(2.2).cookie.set('xmasxe2020it', dt);
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
  var n1 = MApp(2.2).cookie.get('xmasxe2020it')/1000;
  var n2 = Math.floor(e.getTime()/1000);
  if(n1-n2>0){
    packs = Math.floor((n1-n2)/7.5);
  }else packs=0;
  $('.packsNum').html(packs);
  setTimeout('getPacksNum()', 5000);
}

function soldOut() {
  var babuyhref = $(".message3 .buybtn").attr("href"),
	  babuyoncl =  $(".message3 .buybtn").attr("onclick");
	$(".large.message .buybtn.large").attr({"href": babuyhref, "onclick": babuyoncl});
  $(".message-box-eaux").html('<p>-66%</p>');
  $(".largeolsa em").html("39,96");
  $(".largeold em").html("59,95");
  $(".largemony b").html("19");
  $(".message-tips").hide();
  //bottom-buy
  $(".bottom-buy ul li").eq(1).unbind("click").addClass("soldout");
  $(".bottom-buy ul li.mid,.xmas-giveaway,.messagecad,.bottom-buy ul").addClass("soldout");
  $(".opci0").addClass("opci1");
  bottomBuy(2);
}

function bottomBuy(bot) {
  var $panel = $(".banner .panel .message");
  var botnum = 1;
  botnum = bot;
  var message = {
    "price": $panel.eq(botnum).find('.price').find('b').text(),
    "del":  $panel.eq(botnum).find('.price').find('del').text(),
    "href": $panel.eq(botnum).find('.buybtn').attr('href'),
    "ga": $panel.eq(botnum).find('.buybtn').attr('onclick')
  };
  
  $(".bottom-buy .price b").text(message.price);
  $(".bottom-buy .price del").text(message.del);
  $(".bottom-buy .buybtn").attr({"href": message.href, "onclick": message.ga});
  $(".bottom-buy .box .bottom-buyimg").eq(bot).addClass("on").siblings().removeClass("on");
  $(".bottom-buy ul li").eq(bot).addClass("active").siblings().removeClass("active");
}

//review
var className = ["one", "two", "three", "four", "five"];
var index = 0;
var $reviewLi = $(".review ul li");
var nextFun = function () {
  var addName = className.pop();
  className.unshift(addName);
  for(var i=0; i<$reviewLi.length; i++) {
    $reviewLi.eq(i).attr("class", className[i]);
  }
  if(index < 4) {
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
    index = 4;
    review(index);
  }

};
var review = function (index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};


(function () {
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
  packs = 79;
  $('.packsNum').html(packs);
  setTimeout('getPacksNum()', 5000);
  //getPacksNum();
  
  //countdown
  countdown((".countdown strong"));
}());