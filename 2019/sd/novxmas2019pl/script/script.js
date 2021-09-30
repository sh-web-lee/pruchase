
var stopcountdown = false;
var maskTime = 60;
var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);;
  if(!stopcountdown) setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
  var date=new Date();
  if (cGet('plxmassalesfr2019')) {
    dt = cGet('plxmassalesfr2019');
  
  }else{
    dt=date.setMinutes(date.getMinutes()+8);
    // /MApp(2.2).cookie.set('plxmassalesfr2019', dt);
    cSet('plxmassalesfr2019', dt);
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

function cSet(name, value) {
  var Days = 1;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
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


function sect02() {
  var tl = new TimelineMax();
  tl.to(".list02 .privacy-right", 1, {opacity:1,scale: 1},'+=1')

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
  var tw = MApp(2.2).datetime.getTimeZone();
  var aff = MApp(2.2).url.getParameters("aff");
  var pop = MApp(2.2).url.getParameters("pop");
  var ref='';
  if(pop=='xr_sd')  ref='-'+pop;
  
  //banner
  $(".banner .large").addClass("soldout");
  $(".banner .large .price del").text(" 199,90 zł");
  $(".banner .large .buybtn").attr({
    "href": "http://www.iobit.com/buy.php?product=pl-sd3pc69&ref=pl_sd3pc69purchase1911"+ref+"&refs=pl_purchase_sd" 
  });
  //gifts
  $(".gifts .gifts-box").unbind("hover").addClass("soldout");
  $(".gifts .buybtn").addClass("gray");
   $(".gifts .buybtn").attr({
    "href": "javascript::"
  });
  $(".comparison .buybtn").html("<i class=\"all-icons\"></i> KUP TERAZ").attr({
    "href": "http://www.iobit.com/buy.php?product=pl-sd3pc69&ref=pl_sd3pc69purchase1911"+ref+"&refs=pl_purchase_sd"
  });
  //bottombuy
  $(".bottombuy").addClass("soldout");
  $(".bottombuy .price del").text("199,90 zł");
  $(".bottombuy .buybtn").attr({
    "href": "http://www.iobit.com/buy.php?product=pl-sd3pc69&ref=pl_sd3pc69purchase1911"+ref+"&refs=pl_purchase_sd"
  });
  $(".comparison h4").html("Aktywuj Smart Defrag PRO z <span>65%</span> zniżką i przyśpiesz komputer nawet o 200%")
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
  if ($(window).scrollTop() > $(".intro").offset().top && $(window).scrollTop() < $(".left-message .message:eq(1)").offset().top -300) {
    $(".title,.change-img").addClass("on");
    $(".list01").addClass("on");
  }
  else {
    $(".title,.change-img").removeClass("on");
  }
  if ($(window).scrollTop() > $(".left-message .message").offset().top -130 ) {
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
$(".dg-next").click(function(){ 
  var message = $('.dg-container ul li:eq(0)')
  $('.dg-container ul li').removeClass("first")
  $('.dg-container ul li:eq(0)').removeClass("two")
  $('.dg-container ul li:eq(1)').removeClass("three")
  $('.dg-container ul li:eq(2)').removeClass("active")
  $('.dg-container ul li:eq(3)').removeClass("four")
  $('.dg-container ul li:eq(4)').removeClass("five")


  $('.dg-container ul').find('li:first').appendTo($('.dg-container ul'));

  $('.dg-container ul li:eq(0)').addClass("two")
  $('.dg-container ul li:eq(1)').addClass("three")
  $('.dg-container ul li:eq(2)').addClass("active")
  $('.dg-container ul li:eq(3)').addClass("four")

  $('.dg-container ul li:eq(4)').addClass("first")
  setTimeout(function() {
        $('.dg-container ul li:eq(4)').addClass("five").removeClass("first");
   }, 100);

  var num =$('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});
//prev
$(".dg-prev").click(function(){ 
  var message = $('.dg-container ul li:last')

  $('.dg-container ul li:eq(0)').removeClass("two")
  $('.dg-container ul li:eq(1)').removeClass("three")
  $('.dg-container ul li:eq(2)').removeClass("active")
  $('.dg-container ul li:eq(3)').removeClass("four")
  $('.dg-container ul li:eq(4)').removeClass("five")

  $('.dg-container ul li:eq(0)').before(message);

  setTimeout(function() {
        $('.dg-container ul li:eq(0)').addClass("two")
   }, 100);

 
  $('.dg-container ul li:eq(1)').addClass("three")
  $('.dg-container ul li:eq(2)').addClass("active")
  $('.dg-container ul li:eq(3)').addClass("four")
  $('.dg-container ul li:eq(4)').addClass("five")

  var num =$('.dg-container ul li.active').attr("data-num");
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
  $(".pop").remove();
}

(function () {
  //asc
  setTimeout('$(".banner .box").addClass("on");', 500);
  //countdown
  countdown((".banner .countdown strong"));
  countdown((".bottombuy .countdown strong"));
  maskTimeCountDown();
}());
