$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};


$(window).on('scroll', function () {
  if ($(window).scrollTop() > $(".benfits").offset().top) {
    $('.review dl').addClass("red-round");
  }else {
    $('.review dl').removeClass("red-round");
    $('.review dl.active').addClass("red-round");
  }
});

$("a.intro").target($("#compare"), 100);

//
var string = "Jusqu'à -85% sur Driver Booster PRO et obtenez les cadeaux à durée limitée, viiiite!";
var classList = ["on-left isend", "on-middle", "on-right"];

//after thirty seconds
function afterThirtySeconds () {
  $(".banner h2.subtitle").html(string).addClass("after");
  classList.unshift(classList[2]);
  classList.pop();
  $("ul.content li").each(function(i, e) { $(e).removeClass().addClass(classList[i]);});
  $("#db-5pc p.attention").addClass("hidden");
  $("#db-5pc p.countdown").addClass("hidden");
  $("#db-pf-sd p.attention").removeClass("hidden");
  $("#db-pf-sd p.countdown").removeClass("hidden");
  var _href = $(".gift-box a.buybtn").attr("data-url");
  var _ga   = $(".gift-box a.buybtn").attr("data-ga");
  $(".gift-box a.buybtn").removeClass("disabled").attr("href",_href).attr("onclick",_ga);
  $(".gift-box p.countdown").removeClass("hidden");
  $(".bottomcart ul li.five-pc").removeClass("active").addClass("move");
  $(".bottomcart ul li.gift-pc").addClass("active").addClass("move");
  $(".bottomcart .img").addClass("five-pc").removeClass("three-pc");
  $(".bottomcart .wrapper > span").addClass("move");
  bottomcart($(".bottomcart ul li.gift-pc"));
}

$(function () {
  //goto comparison-table
  $(".feature a").target($(".comparison-table"));
  //benifts
  $(".benfits .detail-list dl").hover(function() {
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  });
  //review
  $(".review dl dt .img-box").mouseover(function () {
    $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });
  //bottomcart
  $(".bottomcart ul li").click(function () {
    bottomcart($(this));
    $(this).addClass("active").siblings().removeClass("active");
  });
  timeInit();
  //
});

function bottomcart(_this) {
  var num = _this.index();
  console.log(num,typeof num);
  $(".bottomcart .buybtn").attr("href",_this.attr("data-url")).attr("onclick",_this.attr("data-ga"));
  $(".bottomcart p.price strong").text(_this.attr("data-price"));
  $(".bottomcart p.price del").text(_this.attr("data-original"));
  if(num === 0) {
    $(".bottomcart .img").removeClass("three-pc").removeClass("five-pc");
  }else if(num === 1) {
    $(".bottomcart .img").addClass("three-pc").removeClass("five-pc");
  }else if(num === 2) {
    $(".bottomcart .img").addClass("five-pc").removeClass("three-pc");
  }
}

function cSet(cName,cVal){
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days*24*60*60*1000*3);
  document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "itascjan";
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime=Math.floor(date.getTime()/1000);
  if (arr == null) {
    countTime=nowTime+30;
    cSet(cName,countTime);
  } else {
    countTime=parseInt(arr[2]);
  }
  countdown();
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

var countdown = function (){
  var statusNow=statusCheck();
  if(statusNow==1){
    getCycleCountdown(countTime);
    $(".countdown:eq(0) strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    $(".countdown:eq(1) strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  }else{
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 00:00:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0,2);
    $(".countdown:eq(2) strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    $(".countdown:eq(3) strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  }
  setTimeout("countdown()", 1);
};

function getCycleCountdown (endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 2);
}

function statusCheck(){
  var date=new Date();
  var timeNow=date.getTime()/1000;
  if(timeNow<countTime){
    return 1;
  }else{
    if(!$("#db-5pc p.attention").hasClass('hidden')){
      afterThirtySeconds();
    }
    return 2;
  }
}