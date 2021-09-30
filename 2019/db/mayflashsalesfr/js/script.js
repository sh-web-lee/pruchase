$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}
function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".countdown .scroll-tick").html(list);
  for (var i = 0; i <= len; i++) {
      var curNum = str.substring(i, i + 1);
      $(".countdown .scroll-tick").eq(i).animate({
          marginTop: -curNum * 20,
      }, "slow");
  }
}
$(window).on('scroll', function () {
  if ($(window).scrollTop() > $(".benfits").offset().top) {
    $('.review dl').addClass("red-round");
  }else {
    $('.review dl').removeClass("red-round");
    $('.review dl.active').addClass("red-round");
  }
});

$("a.intro").target($("#compare"), 100);
function threeGift() {
  $(".bottomcart .buybtn").attr("href",$(".bottomcart ul li:eq(0)").attr("data-url")).attr("onclick",$(".bottomcart ul li:eq(0)").attr("data-ga"));
  $(".bottomcart p.price strong").text($(".bottomcart ul li:eq(0)").attr("data-price"));
  $(".bottomcart p.price del").text($(".bottomcart ul li:eq(0)").attr("data-original"));
  $(".bottomcart ul li:eq(0)").addClass("active").siblings().removeClass("active");
  $(".bottomcart .img").removeClass("three-pc").removeClass("one-pc");
}
function threePc() {
  $(".bottomcart .buybtn").attr("href",$(".bottomcart ul li:eq(1)").attr("data-url")).attr("onclick",$(".bottomcart ul li:eq(1)").attr("data-ga"));
  $(".bottomcart p.price strong").text($(".bottomcart ul li:eq(1)").attr("data-price"));
  $(".bottomcart p.price del").text($(".bottomcart ul li:eq(1)").attr("data-original"));
  $(".bottomcart ul li:eq(1)").addClass("active").siblings().removeClass("active");
  $(".bottomcart .img").addClass("three-pc").removeClass("one-pc");
}
function onePc () {
  $(".bottomcart .buybtn").attr("href",$(".bottomcart ul li:eq(2)").attr("data-url")).attr("onclick",$(".bottomcart ul li:eq(2)").attr("data-ga"));
  $(".bottomcart p.price strong").text($(".bottomcart ul li:eq(2)").attr("data-price"));
  $(".bottomcart p.price del").text($(".bottomcart ul li:eq(2)").attr("data-original"));
  $(".bottomcart ul li:eq(2)").addClass("active").siblings().removeClass("active");
  $(".bottomcart .img").removeClass("three-pc").addClass("one-pc");
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
    var num = $(this).index();
      if(!$(".bottomcart ul li").hasClass("soldout")) {
        if(num === 0) {
          threeGift()
        }else if(num === 1) {
          threePc()
        }
        else if(num ==2) {
          onePc ();
        }
      }
      else {
       if(!$(".bottomcart ul li:eq(1)").hasClass("soldout")) {
          if(num === 1) {
            threePc();
          }
          else if(num ==2) {
             onePc ();
          }
       }
       else {
         onePc ();
       }
    }
  });
  $(".pop-over .close").click( function () {
    $(".pop-over,.pop-bg").removeClass("active");
  });
  timeInit();
  countdown('.date strong');
  setTimeout('getBuyNum()', 7000);
});
function popbox() {
  $(".pop-over,.pop-bg").addClass("active")
}
function threeGiftOut() {
  $(".banner .three-pc").addClass("soldout")
  $(".banner .three-gift").addClass("active")
  $(".banner .three-pc .price del").text($(".bottomcart ul li:eq(0)").attr("data-original"))
  $(".banner .three-gift .price del").text($(".bottomcart ul li:eq(1)").attr("data-original"))
  $(".gift-box .buybtn").addClass("disabled");
  $(".gift-box .buybtn").attr("href","javascript: void(0)")
  $(".bottomcart ul li:eq(0)").addClass("soldout").removeClass("active");
  $(".banner .three-gift .people").remove();
  $(".banner .three-gift .buybtn").attr("href",$(".bottomcart ul li:eq(1)").attr("data-url")).attr("onclick",$(".bottomcart ul li:eq(1)").attr("data-ga"));
  threePc();
}
function threePcOut() {
  $(".banner .three-gift").addClass("soldout");
  $(".bottomcart ul li:eq(1)").addClass("soldout").removeClass("active");
  $(".banner .box:eq(2) .buybtn").attr("href",$(".bottomcart ul li:eq(2)").attr("data-url")).attr("onclick",$(".bottomcart ul li:eq(2)").attr("data-ga"));
  onePc();
}

function cSet(name, value) {
  var Days=2;
  var exp = new Date();
  name=name+exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var exp = new Date();
  name=name+exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function timeInit(){
  var date = new Date();
  var tCName="frdbmay_t";
  var cName = "frdbmay_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 1110;
    cSet(tCName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  if(cGet('enascanni_s')==-1) {
    maskTimeInit();
  }else{
    $(document).bind('mousemove', mouseOut);
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

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

function getCycleCountdownPop(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

var countdown = function(countdown, tType) {
  var statusNow=statusSet();
  if ((statusNow == 1)||(statusNow==2)) {
    getCycleCountdown(countTime);
    if(statusNow==1){
      i=MApp(2.2).packages.zeroize(i-10, 2);
    }
    $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
  }
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if(!$(".banner .three-pc").hasClass('soldout')){
      threeGiftOut();
    }
  }else if(statusNow==3){
    if(!$(".banner .three-gift").hasClass('soldout')){
      if(!$(".banner .three-pc").hasClass('soldout')){
        threeGiftOut();
      }
      threePcOut();
    }
  }
  return statusNow;
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < (countTime-600)) {
    if((timeNow>=(countTime-1070))){
      var cName='enascanni_s';
      if(cGet(cName)==null){
        cSet(cName,-1);
        maskTimeInit();
      }
    }
    return 1;
  } else if(timeNow < countTime){
    return 2;
  }else{
    return 3;
  }
}

function mouseOut(e) {
  if (e.clientY < 3) {
    var cName='enascanni_s';
    cSet(cName,-1);
    maskTimeInit();
    $(document).unbind('mousemove', mouseOut);
  }
}

function maskTimeInit(){
  if((cGet('enascanni_s')==-1)&&(!$(".pop-over,.pop-bg").hasClass('active'))){
    popbox();
    var date = new Date();
    var cName = "enascanni_c";
    var arr = cGet("enascanni_c");
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

var maskCountdown = function() {
  var statusNow=maskStatusSet();
  getCycleCountdownPop(maskCountTime);
  //$('.pop-over strong').eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  flipNum(s);
  if(statusNow==1) {
    setTimeout("maskCountdown()", 1000);
  }
};

function maskStatusSet() {
  var statusNow =maskStatusCheck();
  if (statusNow == 2) {
    cSet('enascanni_s',-2);
    $(".pop-over,.pop-bg").removeClass("active");
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

function getBuyNum(){
  if(statusCheck()==1) {
    $.ajax({
      type: "GET",
      url: "./mayflashsales.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r=" + Math.random(),
      success: function (packs) {
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 7000);
      }
    });
  }
}

