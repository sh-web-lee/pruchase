//goTarget
function goTarget(target, yoffset) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}

//soldout
function soldout() {
  var _href = $(".banner .offer.pc3 .buybtn").attr("href");
  //banner
  $(".banner").addClass("soldout");
  $(".banner h1").text("NIE PRZEGAP SPECJALNEJ WIELKANOCNEJ PROMOCJI!");
  $(".banner h2").html("Prezenty niedostępne. Zdobądź <b>60%</b> rabatu, póki jeszcze możesz!");
  $(".banner .offer.bundle").removeClass("large middle").addClass("small right").find(".buybtn").attr({
    "href": "javascript: void();",
    "onclick": " "
  });
  $(".banner .offer.pc3").removeClass("small right").addClass("large middle");
  //gifts
  $(".gifts").addClass("soldout");
  $(".gifts dl.pf dd, .gifts dl.iu dd, .gifts h4").hide();
  $(".gifts .before .buybtn").text("ODBIERZ PREZENTY TERAZ").attr({
    "href": "javascript: void();",
    "onclick": " "
  });
  //bottombuy
  $(".bottombuy").addClass("soldout");
  $(".bottombuy h4").hide();
  $(".bottombuy .buybtn").attr({"href": _href});
  $(".bottombuy .price del").text($(".banner .offer.pc3 .price del").text());
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "plasceaster_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 592;
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
    var mi = Math.floor((999 - dateObj.getMilliseconds())/10);
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}

//countdown
var countdown = function(countdown, countdown1, countdown2) {
  var statusNow=statusSet();
  getCycleCountdown(countTime);
  $(countdown).eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown1).eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown2).eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if(statusNow==1){
    setTimeout("countdown('"+countdown+"','"+countdown1+"','"+countdown2+"')", 1);
  }
};

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 2).substr(0,2);
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$(".banner").hasClass('"soldout"')) {
      soldout();
    }
  }
  return statusNow;
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

(function () {
  //timeInit
  timeInit();
  //countdown
  countdown((".banner .countdown strong"), (".gifts .countdown strong"), (".bottombuy .countdown strong"));
  //init
  setTimeout('$(".banner .offer").removeClass("init")', 600);
  //benefits
  $(".benefits .detail-list dl").hover(function() {
    $(".benefits .showcase .screenshot").css('marginLeft', -555*($(this).index()+1));
    $(".benefits .zoom li").removeClass('active').eq($(this).index()+1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benefits .list-icon li").removeClass('active').eq($(this).index()+1).addClass('active');
  });
  $(".benefits .list-icon li").hover(function() {
    $(".benefits .showcase .screenshot").css('marginLeft', -555*($(this).index()));
    $(".benefits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if(num==0) {

      $(".benefits .detail-list dl").removeClass("active");
    }
    else {
      $(".benefits .detail-list dl").eq($(this).index()-1).addClass("active").siblings().removeClass("active");
    }
    $(".benefits .list-icon li").removeClass('active');
    $(this).addClass('active');
  });
  //review
  $('#dg-container').gallery();
}());