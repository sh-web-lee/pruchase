
$(function () {
  $(".review").on("hover", "li", function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review .content dl").eq(index).addClass("active").siblings().removeClass("active");
  });
  timeInit();
});

function soldOut () {
  //banner
  $(".gift.default,.bottombuy  h4,.banner .box ,.banner .wrapper >p.moneyback,.banner .pf-box").remove();
  $(".gift.exceed").removeClass("hide");
  $(".banner,.bottombuy").addClass("soldout")
  $(".banner .content").removeClass("hide")
  $(".banner .buybtn").attr("href",$(".gift.exceed .buybtn").attr("href"));
}

$(document).ready(function() {
  // userreview flip
  if ($('.feature-change .roll').length != 0) {
    var count = $('.feature-change .roll .part').length;
    $('.feature-change .roll').css('width', 1031 * count);
  };

  $('.feature-change .dg-next').click(function(event) { 
     var num = $('.feature-change ul li.active').index();
     var numcont = 1031 * (num+1);
     if(num==3){
      $('.feature-change .roll').stop(true, true).animate({marginLeft: 0}, 'slow');
      $(".feature-change ul li").eq("0").addClass("active").siblings().removeClass("active");
     }
    else {
       $('.feature-change .roll').stop(true, true).animate({marginLeft: -numcont}, 'slow');
       $(".feature-change ul li").eq(num+1).addClass("active").siblings().removeClass("active");
    }
  });
  $('.feature-change .dg-prev').click(function(event) { 
     var num = $('.feature-change ul li.active').index();
     var numcont = 1031 * (num-1);
     if(num==0){
      $('.feature-change .roll').stop(true, true).animate({marginLeft: -3093}, 'slow');
      $(".feature-change ul li").eq("3").addClass("active").siblings().removeClass("active");
     }
    else {
       $('.feature-change .roll').stop(true, true).animate({marginLeft: -numcont}, 'slow');
       $(".feature-change ul li").eq(num-1).addClass("active").siblings().removeClass("active");
    }
  });

  $('.feature-change ul li').click(function(event) {   
    $(this).addClass("active").siblings().removeClass("active");
    var index = $(this).index();
    var numcont = 1031 * index;
    //var num = $('.feature-change ul li.active').index();
    $('.feature-change .roll').stop(true, true).animate({marginLeft: -numcont}, 'slow');
    $(".feature-change ul li").eq(index).addClass("active").siblings().removeClass("active")
  });
});

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "nlimfindex_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 664;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
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

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

var countdown = function() {
  var statusNow=statusSet();
  getCycleCountdown(countTime);
  $(".banner h2 strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(".countdown:eq(0) strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(".gift .date strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if(statusNow==1) {
    setTimeout("countdown()", 1);
  }
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    //if($(".footbuy li").eq(1).hasClass('active')){
    if ($(".gift.exceed").hasClass('hide')) {
      soldOut();
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