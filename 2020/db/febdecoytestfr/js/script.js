$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};

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
  $("a.intro").target($("#compare"));

  $(".usereview .users li").mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("current").siblings().removeClass("current");
    $(".userbox dl").eq(num).addClass("active").siblings().removeClass("active");
  });

  //bottomcart
  $(".bottomcart ul li").click(function () {
    var index = $(this).index();
    var num = $(this).attr("data-num");
    var _strong = $(".banner .content li").eq(num).find(".price strong").html();
    var _del = $(".banner .content li").eq(num).find(".price del").html();
    var _url = $(".banner .content li").eq(num).find(".buybtn").attr("href");
    var _ga = $(".banner .content li").eq(num).find(".buybtn").attr("onclick");
    $(this).addClass("active").siblings().removeClass("active");
    $(".bottomcart .buybtn").attr({"href": _url, "onclick": _ga});
    $(".bottomcart .price").find("strong").html(_strong);
    $(".bottomcart .price").find("del").html(_del);
    if(index === 0) {
      $(".bottomcart .img").removeClass("three-pc").removeClass("one-pc");
    }else if(index === 1) {
      $(".bottomcart .img").addClass("three-pc").removeClass("one-pc");
    } else {
      $(".bottomcart .img").addClass("one-pc").removeClass("three-pc");
    }
  });
  // timeInit();
  
  countdown((".countdown strong"));
});

var countdown = function (countdown){
  getCycleCountdown();
	$(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
	setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
	var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}






// function cSet(cName,cVal){
//   var Days = 2;
//   var exp = new Date();
//   exp.setTime(exp.getTime() + Days*24*60*60*1000*3);
//   document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
// }

// function timeInit(){
//   var date = new Date();
//   var cName = "frdbfeb";
//   var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
//   var nowTime=Math.floor(date.getTime()/1000);
//   if (arr == null) {
//     countTime=nowTime + 0;
//     cSet(cName,countTime);
//   } else {
//     countTime=parseInt(arr[2]);
//   }
//   countdown();
// }

// function timeCountDown(startTimestamp) {
//   var dateObj = new Date();
//   var time = dateObj.getTime().toString().substring(0, 10);
//   var remainingTime = startTimestamp - time;
//   if (remainingTime > 0) {
//     var d = Math.floor(remainingTime / (24 * 60 * 60));
//     var h = Math.floor(remainingTime / (60 * 60) % 24);
//     var i = Math.floor(remainingTime / 60 % 60);
//     var s = Math.floor(remainingTime % 60);
//     var mi = 999 - dateObj.getMilliseconds();
//     if (mi < 10) {
//       mi = '00' + mi;
//     } else if (mi < 100) {
//       mi = '0' + mi;
//     }
//     return [d, h, i, s, mi];
//   } else {
//     return [0, 0, 0, 0, 0];
//   }
// }

// var countdown = function (){
//   var statusNow=statusCheck();
//   if(statusNow==1){
//     getCycleCountdown(countTime);
//     $(".countdown:eq(0) strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
//     $(".countdown:eq(1) strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
//   }else{
//     var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 00:00:00');
//     var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
//     d = MApp(2.2).packages.zeroize(datetime[0], 2);
//     h = MApp(2.2).packages.zeroize(datetime[1], 2);
//     i = MApp(2.2).packages.zeroize(datetime[2], 2);
//     s = MApp(2.2).packages.zeroize(datetime[3], 2);
//     mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0,2);
//     $(".countdown:eq(2) strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
//   }
//   setTimeout("countdown()", 1);
// };

// function getCycleCountdown (endTime) {
//   var datetime = timeCountDown(endTime);
//   d = MApp(2.2).packages.zeroize(datetime[0], 2);
//   h = MApp(2.2).packages.zeroize(datetime[1], 2);
//   i = MApp(2.2).packages.zeroize(datetime[2], 2);
//   s = MApp(2.2).packages.zeroize(datetime[3], 2);
//   mi = MApp(2.2).packages.zeroize(datetime[4], 3);
// }

// function statusCheck(){
//   var date=new Date();
//   var timeNow=date.getTime()/1000;
//   if(timeNow<countTime){
//     return 1;
//   }else{
//     // if(!$("#db-3pc p.attention").hasClass('hidden')){
//     //   afterThirtySeconds();
//     // }
//     return 2;
//   }
// }