$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
  });
};
$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

function reduceNum() {
  $(".giftNum.reduce").addClass("on");
  setTimeout(function() {
    $(".giftNum.reduce").removeClass("on");
  }, 800);
}

function soldGift() {
  $(".centbuy").removeClass("sold").addClass("sold");
  $(".offer").removeClass("on");
  $(".offer.left").addClass("on");
  $(".offer .countdown,.offer .mask,.offer .slogn,.centbuy li.two .mask").remove();
  $(".offer.left").append('<div class="countdown">Sólo quedan <b class="gift"><span class="giftNum">49</span><span class="giftNum reduce">49</span></b> paquetes</div>');
  $(".offer.right").append('<div class="mask"><span class="reduce">AGOTADO</span></div>');
  $(".donation").append('<div class="mask"><span class="reduce">AGOTADO</span></div>');
  $(".centbuy li.one").append('<div class="mask"><span class="reduce">Agotado</span></div> ');
  setTimeout(function() {
    $(".mask span.reduce").removeClass("on").addClass("on");
  }, 300);
  $(".centbuy li").removeClass("on");
  $(".centbuy li.two").addClass("on");
  $(".centbuy .imgbox").find("img").removeClass("on");
  $(".centbuy .imgbox img.smart").addClass("on");
  $(".centbuy .original").text($(".banner .offer.left").find(".original").text());
  $(".centbuy .buybtn").attr({
    "href": $(".banner .offer.left").find(".buybtn").attr("href"),
    "onclick": $(".banner .offer.left").find(".buybtn").attr("onclick"),
  });
  packsInit();
}
//soldGift();

$(function() {
  $(".users li").userMouseover($(".content dl"));
  timeInit();
  //countdown(("#banCountdown b"));
  //if (!$(".banner .offer.left").hasClass("on")) {
  //  countdown(("#giftCountdown b"));
  //} else {
  //  $(".donation .countdown b").text("00");
  //  $(".donation .countdown b.last").text("000");
  //}
  $(".intro .more").target($(".comparison"));
});

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "esascuapr_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 600;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  countdown("#banCountdown b","#giftCountdown b");
}

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    var d = Math.floor(remainingTime / (24 * 60 * 60));
    var h = Math.floor(remainingTime / (60 * 60) % 24);
    var i = Math.floor(remainingTime / 60 % 60);
    var s = Math.floor(remainingTime % 60);
    var mi = Math.floor((999 - dateObj.getMilliseconds())/10);
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}

var countdown = function(countdown1,countdown2) {
  statusSet();
  getCycleCountdown(countTime);
  $(countdown1).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown2).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('" + countdown1 + "','" + countdown2 + "')", 1);
};

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 2);
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < countTime) {
    return 1;
  } else {
    return 2;
  }
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$(".centbuy").hasClass('sold')) {
      soldGift();
    }
  }
  return statusNow;
}

function packsInit(){
  var date = new Date();
  var cName = "esascuapr_p" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 59;
  } else {
    packs = arr[2];
  }
  $('.giftNum').html(packs);
  setTimeout('getSales()', getReTime());
}

function getReTime(packsNum){
  var reTime=20;
  if (packsNum > 51) {
    reTime=5;
  }else if(packsNum>21){
    reTime=15;
  } else {
    reTime=20;
  }
  return reTime*1000;
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        if (packs != sales.packsNum) {
          reduceNum();
          packs = sales.packsNum;
          $('.giftNum').html(packs);
        }
      }
    }
  });
  setTimeout('getSales()', getReTime(packs));
}