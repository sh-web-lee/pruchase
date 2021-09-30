$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function maxboxShow() {
  $(".float").addClass("active").removeClass("on");
  $(".mask").removeClass("on").addClass("on");
  $(".maxbox").removeClass("slipUp").addClass("slipUp");
  $(".minmax span.first").click(function() {
    $(".mask").removeClass("on");
    $(".maxbox").removeClass("slipUp");
    $(".float").addClass("on").removeClass("active");
  });
  $(".minmax span.last").click(function() {
    $(".mask").removeClass("on");
    $(".maxbox").removeClass("slipUp");
  });
}

$(function() {
  timeInit();
  countdown(".countdown b",1);
  $(".feature .more").target($("#compare"), 0);
  $(".footbuy li").hover(function() {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".footbuy .buybtn").addClass("graytwo");
    $(this).find(".buybtn").removeClass("graytwo");
    $(".footbuy .imgbox").find("._img").eq(index).addClass("active").siblings().removeClass("active");
  });

  if ($(".maxbox").hasClass("show")) {
    $(window).scrollWindow($(".banner .buybtn"), $('.float'), ("on"));
    $(".float .minbox").click(function() {
      $(".maxbox").removeClass("show");
      maxboxShow();
    });
  }
});

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "enimfflash_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 18000;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  maskTime=30;
  maskTimeCountDown();
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

var countdown = function(countdown, tType) {
  var statusNow=statusSet();
  if (statusNow == 1) {
    getCycleCountdown(countTime);
    $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  }
  setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    var date=new Date();
    var nowTime = Math.floor(date.getTime() / 1000);
    var cName = "enimfflash_t" + date.getDate();
    countTime = nowTime + 18000;
    cSet(cName, countTime);
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

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function maskTimeCountDown(){
  var maskCName='deimfflash_m';
  var maskShow=cGet(maskCName);
  if(maskShow==1){
    maxboxShow();
    $(".float .minbox").click(function() {
      $(".maxbox").removeClass("show");
      maxboxShow();
    });
  }else {
    if (maskTime > 0) {
      maskTime--;
      setTimeout('maskTimeCountDown()', 1000);
    } else {
      if (!$(".maxbox").hasClass('show')) {
        cSet(maskCName+new Date().getDate(),1);
        maxboxShow();
        $(".float .minbox").click(function () {
          $(".maxbox").removeClass("show");
          maxboxShow();
        });
      }
    }
  }
}