var stopcountdown = false;
var maskTime = 60;

var countdown = function (countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout('countdown(\'' + countdown + '\')', 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function numberJump() {
  $(".change-num").prop('number', 50).animateNumber({
    number: 100,
  }, 1000);
}

function sect01() {
  var tl = new TimelineMax();
  tl.to(".bottom-circle", 1, {height:114})
    .to(".completed", .5, {opacity:1},'+=.5')


}

function sect02() {
  var tl = new TimelineMax();
  tl.to(".privacy", 1, {opacity:1,scale: 1},'+=.5')
    .to(".list02 .check", 1, {width:47,backgroundColor:'#326de8',
      onComplete: function() {
        $('.list02 .privacy').addClass('on');
      }
    })
    .to(".list02 .privacy .text", 1, {opacity:1,bottom: 54})
    .to(".list02 .privacy-right", 1, {opacity:1,scale: 1})

}
function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + '=' + escape(value) + ';expires=' + exp.toGMTString();
}

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp('(^| )' + name + '=([^;]*)(;|$)');
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function maskTimeInit() {
  if ((cGet('frascsum_s') == -1) && (!$('.popbg,.popbox').hasClass('on'))) {
    showPop();
    var date = new Date();
    var cName = 'frascsum_c';
    var arr = cGet('frascsum_c');
    var nowTime = Math.floor(date.getTime() / 1000);
    if (arr == null) {
      maskCountTime = nowTime + 60;
      cSet(cName, maskCountTime);
    } else {
      maskCountTime = parseInt(arr);
    }
    maskCountdown();
  }
}

var maskCountdown = function () {
  var statusNow = maskStatusSet();
  getCycleCountdownPop(maskCountTime);
  setNum(s);
  if (statusNow == 1) {
    setTimeout('maskCountdown()', 1000);
  }
};

function maskStatusSet() {
  var statusNow = maskStatusCheck();
  if (statusNow == 2) {
    cSet('frascsum_s', -2);
    closePop();
  }
  return statusNow;
}

function maskStatusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < maskCountTime) {
    return 1;
  } else {
    return 2;
  }
}

function setNum(num) {
  $('.secbox').eq(0).html(Math.floor(num / 10));
  $('.secbox').eq(1).html(num % 10);
}

function getCycleCountdownPop(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    s = remainingTime % 60;
  } else {
    s = 0;
  }
}

function maskTimeCountDown() {
  if (maskTime > 0) {
    maskTime--;
    setTimeout('maskTimeCountDown()', 1000);
  } else if ((maskTime == 0)) {
    $(document).bind('mousemove', mouseOut);
  }
}

function mouseOut(e) {
  if (e.clientY < 3) {
    var cName = 'frascsum_s';
    cSet(cName, -1);
    maskTimeInit();
    $(document).unbind('mousemove', mouseOut);
  }
}


//soldOut
function soldOut() {
  var tw = MApp(2.2).datetime.getTimeZone();
  var aff = MApp(2.2).url.getParameters("aff");
  //banner
  $(".banner .large").addClass("soldout");
  $(".banner .large .price del").text("49,99€");
  $(".banner .large .buybtn").attr({
    "href": "https://www.iobit.com/buy.php?product=fr-asc133pc1999&ref=fr_asc133pc1999purchase1911&aff="+ aff +"&refs=fr_purchase_asc&tw=" + tw ,
    "onclick": "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911c-fr')"
  });
  //gifts
  $(".gifts .gifts-box").unbind("hover").addClass("soldout");
  $(".gifts .buybtn").html("<i class=\"all-icons\"></i> VITE, J'EN PROFITE").attr({
    "href": "https://www.iobit.com/buy.php?product=fr-asc133pc1999&ref=fr_asc133pc1999purchase1911&aff="+ aff +"&refs=fr_purchase_asc&tw=" + tw ,
    "onclick": "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911c-fr')"
  });
  //bottombuy
  $(".bottombuy").addClass("soldout");
  $(".bottombuy .price del").text("49,99€");
  $(".bottombuy .buybtn").attr({
    "href": "https://www.iobit.com/buy.php?product=fr-asc133pc1999&ref=fr_asc133pc1999purchase1911&aff="+ aff +"&refs=fr_purchase_asc&tw=" + tw ,
    "onclick": "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911c-fr')"
  });
  //float
  closeFloat ();
}

var c1 = 0;
var d1 = 0;

$(window).on('scroll', function() {
  if (($(window).scrollTop() > $(".banner .buybtn").offset().top)&&($(window).scrollTop() < $(".review ul").offset().top-100)) {
    $(".float").addClass("on");
  }
  else {
    $(".float").removeClass("on");
  }
  if ($(window).scrollTop() > $(".intro").offset().top && $(window).scrollTop() < $(".left-message .message:eq(1)").offset().top -230) {
    $(".title,.change-img").addClass("on");
    $(".list01").addClass("on");
    setTimeout(function() {
      $('.scan').remove();
      c1+=1;
      if(c1==1){
        numberJump();
        sect01();
      }
    }, 2000);
  }
  else {
    $(".title,.change-img").removeClass("on");
  }
  if ($(window).scrollTop() > $(".left-message .message").offset().top +50) {
    $(".list01").removeClass("show");
    $(".list02").addClass("show");
    d1+=1;
    if(d1==1){
      sect02();
    }
  }
  else {
    $(".list01").addClass("show");
    $(".list02").removeClass("show");
  }
  clearTimeout($.data(this, 'scrollTimer'));
});

//next
$(".dg-next").click(function() {
  var message = $('.dg-container ul li:eq(0)');
  $('.dg-container ul li:eq(0)').removeClass("first");
  $('.dg-container ul li:eq(1)').removeClass("two");
  $('.dg-container ul li:eq(2)').removeClass("three");
  $('.dg-container ul li:eq(3)').removeClass("active");
  $('.dg-container ul li:eq(4)').removeClass("four");
  $('.dg-container ul li:eq(5)').removeClass("five");


  $('.dg-container ul').find('li:first').appendTo($('.dg-container ul'));

  $('.dg-container ul li:eq(0)').addClass("first");
  $('.dg-container ul li:eq(1)').addClass("two");
  $('.dg-container ul li:eq(2)').addClass("three");
  $('.dg-container ul li:eq(3)').addClass("active");
  $('.dg-container ul li:eq(4)').addClass("four");
  $('.dg-container ul li:eq(5)').addClass("five");

  var num = $('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});
//prev
$(".dg-prev").click(function() {
  var message = $('.dg-container ul li:last');

  $('.dg-container ul li:eq(0)').removeClass("first");
  $('.dg-container ul li:eq(1)').removeClass("two");
  $('.dg-container ul li:eq(2)').removeClass("three");
  $('.dg-container ul li:eq(3)').removeClass("active");
  $('.dg-container ul li:eq(4)').removeClass("four");
  $('.dg-container ul li:eq(5)').removeClass("five");


  $('.dg-container ul li:eq(0)').before(message);

  $('.dg-container ul li:eq(0)').addClass("first").addClass("on");
  $('.dg-container ul li:eq(1)').addClass("two");
  $('.dg-container ul li:eq(2)').addClass("three");
  $('.dg-container ul li:eq(3)').addClass("active");
  $('.dg-container ul li:eq(4)').addClass("four");
  $('.dg-container ul li:eq(5)').addClass("five");

  var num = $('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});

//closeFloat
function closeFloat () {
  $(".float").removeClass("on");
  setTimeout('$(".float").hide()', 500);
}

//showPop
function showPop() {
  $('.popbg,.popbox').removeClass('on').addClass('on');
  $('.close').click(function () {
    $('.popbg,.popbox').removeClass('on');
  });
}

//closePop
function closePop() {
  $('.popbg,.popbox').removeClass('on');
}

(function () {
  //asc
  setTimeout('$(".banner .box").addClass("on");', 500);
  //countdown
  countdown((".banner .countdown strong"));
  countdown((".bottombuy .countdown strong"));
  maskTimeCountDown();
  //gifts
  $(".gifts .gifts-message .gifts-box").hover(function () {
    var giftsNum = $(this).index();
    $(this).find("ul").slideDown(300);
    $(this).find(".arrow").hide();
    $(this).siblings().find("ul").slideUp(300, function () {
      $(this).siblings().find(".arrow").show()
    });
  });
  //gifts fold
  $(document).on("mouseover", function (e) {
    if($(e.target).closest('.gifts-box').length == 0) {
      $(".gifts .gifts-message .gifts-box").find("ul").slideUp(300).end().find(".arrow").show();
    }
  });

  if (cGet('frascsum_s') == -1) {
    maskTimeInit();
  } else {
    setTimeout('$(document).bind(\'mousemove\', mouseOut)', 30000);
  }
}());
