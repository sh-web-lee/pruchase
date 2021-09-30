var stopcountdown = false;
var maskTime = 60;
var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if(!stopcountdown) setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
  var date=new Date();
  if (MApp(2.2).cookie.get('xmassalesrcfr2019')) {
    dt = MApp(2.2).cookie.get('xmassalesrcfr2019');
  
  }else{
    dt=date.setMinutes(date.getMinutes()+8);
    MApp(2.2).cookie.set('xmassalesrcfr2019', dt);
  }

  var datetime = getCountdown(dt);
  if(datetime==0){
    stopcountdown=true;
    d=h=i=s=mi=0;
    soldOut();
  }else{
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 3);
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
function maskTimeCountDown() {
  if (maskTime > 0) {
    maskTime--;
    setTimeout('maskTimeCountDown()', 1000);
  } else if ((maskTime == 0)) {
    // $(document).bind('mousemove', mouseOut);
  }
}

// function mouseOut(e) {
//   if (e.clientY < 5) {
//     showPop();
//     $(document).unbind('mousemove', mouseOut);
//   }
// }

//soldOut
function soldOut() {
  var tw = MApp(2.2).datetime.getTimeZone();
  var aff = MApp(2.2).url.getParameters("aff");
  //banner
  $(".banner .large").addClass("soldout");
  $(".banner .large .price del").text("49,99€");
  //gifts
  $(".gifts .gifts-box").unbind("hover").addClass("soldout");
  $(".gifts .buybtn").html("<i class=\"all-icons\"></i> VITE, J'EN PROFITE");
  //bottombuy
  $(".bottombuy").addClass("soldout");
  $(".bottombuy .price del").text("49,99€");
  //buybtn
  $(".banner .large .buybtn,.gifts .buybtn,.bottombuy .buybtn").attr({
    "href": "https://www.iobit.com/buy.php?product=fr-asc133pc1799&ref=fr_asc133pc1799rightcor"+ ref +"&aff="+ aff +"&refs=fr_purchase_asc",
    "onclick": "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchaserightcorc-fr')"
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
  $(".pop").fadeIn(500);
}

//closePop
function closePop() {
  $(".pop").fadeOut(500);
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
}());
