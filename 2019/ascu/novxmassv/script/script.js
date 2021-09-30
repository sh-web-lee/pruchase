function goTaget(target) {
  var Theigth = target.offset().top;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}

var stopcountdown = false;
var maskTime = 60;
var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if(!stopcountdown) setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
  var date=new Date();
  if (MApp(2.2).cookie.get('novxmassv2019')) {
    dt = MApp(2.2).cookie.get('novxmassv2019');
  
  }else{
    dt=date.setMinutes(date.getMinutes()+8);
    MApp(2.2).cookie.set('novxmassv2019', dt);
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

function maskTimeCountDown() {
  if (maskTime > 0) {
    maskTime--;
    setTimeout('maskTimeCountDown()', 1000);
  } else if ((maskTime == 0)) {
    $(document).bind('mousemove', mouseOut);
  }
}

function mouseOut(e) {
  if (e.clientY < 5) {
    showPop();
    $(document).unbind('mousemove', mouseOut);
  }
}

//soldOut
function soldOut() {
  var buybtn = {
    href: $(".banner .message-box.small .buybtn").attr("href"),
    ga: $(".banner .message-box.small .buybtn").attr("onclick")
  };
  //banner
  $(".banner .large").addClass("soldout");
  $(".banner .large .price del").text("799 kr");
  $(".banner .large .buybtn").attr({
    "href": buybtn.href,
    "onclick": buybtn.ga
  });
  //gifts
  $(".gifts .gifts-box").unbind("hover").addClass("soldout");
  $(".gifts .buybtn").attr({
    "href": buybtn.href,
    "onclick": buybtn.ga
  });
  //bottombuy
  $(".bottombuy").addClass("soldout");
  $(".bottombuy .price del").text("799 kr");
  $(".bottombuy .buybtn").attr({
    "href": buybtn.href,
    "onclick": buybtn.ga
  });
  //float
  closeFloat ();
}

$(window).on('scroll', function() {
  if (($(window).scrollTop() > $(".banner .buybtn").offset().top)&&($(window).scrollTop() < $(".comparison table").offset().top)) {
    $(".float").addClass("on");
  }
  else {
    $(".float").removeClass("on");
  }
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
  //review
  $('#dg-container').gallery();
  //asc
  setTimeout('$(".banner .box").addClass("on");', 500);
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
  //countdown
  countdown((".banner .countdown strong"));
  countdown((".bottombuy .countdown strong"));
  maskTimeCountDown();
}());
