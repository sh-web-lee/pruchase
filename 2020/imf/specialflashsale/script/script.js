function goTaget(target) {
  var Theigth = target.offset().top;
  $("html, body").animate({
    scrollTop: Theigth
  }, 'slow');
}

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner").addClass("soldout");
  $(".banner .box:eq(0) dd b").html("19.95")
  $(".banner .box:eq(1) dd b").html("25.99")
  $(".banner .box:eq(0) p span").html("-50%")
  $(".banner .box:eq(1) p:eq(0) span").html("-52%")
  $(".bottom-buy ul li:eq(0) b").html("52% Off")
  $(".bottom-buy ul li:eq(1) b").html("50% Off")

  $(".float").remove();
  $(".bottom-buy dl strong b").html("25.99");


  $(".banner .buybtn:eq(0)").attr({
    "href": "https://www.iobit.com/buy.php?product=imf81pc&ref=en-imf1pcspecial" + refStr + "&aff=" + aff + "&refs=purchase_imf&tw=" + tw,
    "onclick": "ga('send', 'event', 'imf1pcsoldbuy', 'buy', 'imfpurchase-special');",
  });
  $(".banner .buybtn:eq(1),.bottom-buy .buybtn").attr({
    "href": "https://www.iobit.com/buy.php?product=imf83pciusd2599&ref=en-imf3pciusdspecial" + refStr + "&aff=" + aff + "&refs=purchase_imf&tw=" + tw,
    "onclick": "ga('send', 'event', 'imfbundlesoldbuy', 'buy', 'imfpurchase-special');",
  });
}


// soldOut();

$(function() {
  timeInit();
  var sWidth = $(".review-box .reviews").width();
  var len = $(".review-box dl").length;
  var index = 0;
  var picTimer;

  $(".review-box .handle span").click(function() {
    index = $(".review-box .handle span").index(this);
    showPics(index);
  }).eq(0).trigger("click");

  $(".review-box .reviews .inner").css("width", sWidth * (len));

  $(".review-box").hover(function() {
    clearInterval(picTimer);
  }, function() {
    picTimer = setInterval(function() {
      showPics(index);
      index++;
      if (index == len) {
        index = 0;
      }
    }, 4000);
  }).trigger("mouseleave");

  function showPics(index) {
    var nowLeft = -index * sWidth;
    $(".review-box .reviews .inner").stop(true, false).animate({
      "left": nowLeft
    }, 300);
    $(".review-box .handle span").eq(index).attr("class", "on two");
    if (index === 0) {
      $(".review-box .handle span").eq(1).attr("class", "three");
      $(".review-box .handle span").eq(2).attr("class", "one");
    } else if (index === 1) {
      $(".review-box .handle span").eq(2).attr("class", "three");
      $(".review-box .handle span").eq(0).attr("class", "one");
    } else {
      $(".review-box .handle span").eq(0).attr("class", "three");
      $(".review-box .handle span").eq(1).attr("class", "one");
    }
  }

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $('.float').addClass('on');
      $(".feature dl dd").addClass("on");
    } else {
      $('.float').removeClass('on');
    }

  });

});
$(".bottom-buy li").click(function() {
    var num = $(this).attr("data-num");
    $(this).addClass("active").siblings().removeClass("active");
    $(".bottom-buy .buybtn").attr("href",$(".banner .buybtn").eq(num).attr("href"));
    $(".bottom-buy .buybtn").attr("onclick",$(".banner .buybtn").eq(num).attr("onclick"));
    $(".bottom-buy dl strong b").html($(".banner .box").eq(num).find("dd strong b").text());
    $(".bottom-buy dl del").html($(".banner .box").eq(num).find("dd del").text())
    if(num==0) {
       $(".bottom-buy .content").animate({marginLeft:"-364px"});
    }
    else if(num==1){
       $(".bottom-buy .content").animate({marginLeft:"0px"});
    }
});
function dateanmain() {
  $(".float .date h4").addClass("dateanmain");
   setTimeout('$(".float .date h4").removeClass("dateanmain");', 1500);
}
function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "enimfindex_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 600;
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
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  cTime = countTime-nowTime;
  if(cTime==300||cTime==180||cTime==60){
    dateanmain();
  }
  $(".banner h2 strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(".date h3 strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(".date h4 strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if(statusNow==1) {
    setTimeout("countdown()", 1);
  }
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    //if($(".footbuy li").eq(1).hasClass('active')){
    if (!$(".banner").hasClass('soldout')) {
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