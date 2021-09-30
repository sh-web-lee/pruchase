$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top + 300) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

//closeCoupon
function closeCoupon() {
  $(".coupon").slideUp('slow').removeClass('on');
}

//soldOut
function soldOut () {
  var aff = MApp(2.2).url.getParameters('aff');
  //banner
  $(".banner").addClass("sold");
  $(".banner .message h3").html("Niet getreurd, er staat toch nog een mooie <br> korting voor u klaar!");
  //bottom-buy
  $(".bottom-buy").addClass("sold");
  $(".bottom-buy .message h2").html("<span>De voorverkoopactie is verlopen</span><br>Toch nog een mooie korting!");
  //price
  $(".price b").text("19");
  //buybtn
  $(".buybtn").attr({
    "href": "https://www.iobit.com/buy.php?product=nl-asc13preorder1999&ref=nl_asc13preorderofficialnlsoldout"+refStr+"&aff="+ aff +"&refs=nl_purchase_asc&tw=-8",
    "onclick": "ga('send', 'event', 'ascbuy', 'buy', 'asc13preorderofficialsoldoutnl-nl');"
  });
  //coupon
  closeCoupon();
}

$(function () {
  timeInit();
  countdown((".countdown"), 1);
  //feature
  $(".feature ul.message li").hover(function () {
    var index = $(this).index() + 1;
    $(this).addClass("active").siblings().removeClass("active");
    $(".feature ul.machine-list li").eq(index).addClass("active").siblings().removeClass("active");
    $(".feature ul.machine-list").stop().animate({"marginLeft": -460*index}, 300);
  });
  //intro
  $(window).scrollWindow($(".feature"),$('.intro dl'),("on"));
  //review
  $('#dg-container').gallery();
  //float
  $(window).on('scroll', function () {
    if (($(window).scrollTop() > $(".banner .buybtn").offset().top + 300)) {
      $('.coupon').addClass('on');
    }else {
      $('.coupon').removeClass('on');
    }
    if (($(window).scrollTop() >= $(".comparison").offset().top)) {
      $('.coupon').addClass("hide");
    }else {
      $('.coupon').removeClass('hide');
    }
  });
});

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "frascpre" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 454;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
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
    var mi = 999 - dateObj.getMilliseconds();
    if (mi < 10) {
      mi = '00' + mi;
    } else if (mi < 100) {
      mi = '0' + mi;
    }
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}

var countdown = function(countdown, tType) {
  statusSet();
  if (tType == 1) {
    getCycleCountdown(countTime);
  }
  $(countdown).each(function() {
    $(this).find('strong').eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  });
  setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
};

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
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
    if (!$(".banner").hasClass('sold')) {
      soldOut();
    }
  }
}