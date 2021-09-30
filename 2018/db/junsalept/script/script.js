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

$(function() {
  timeInit();
  countdown();
  $(".imf-message a ").target($("#compare"), 0);
  $(".footbuy li").on("click", function() {
    var index = $(this).index();
    var dataName = $(this).attr("data-num");
    var dataUrl = $(".banner .box").eq(dataName).find(".buybtn").attr("href");
    var original = $(".banner .box").eq(dataName).find(".original").text();
    var current = $(".banner .box").eq(dataName).find(".current").text();
    var currentsm = $(".banner .box").eq(dataName).find(".current-sm").text();

    if (dataName == 1) {
      $(".footbuy .price").removeClass("active");
      $(".footbuy .price").find(".original").text(original);
    } else {
      $(".footbuy .price").addClass("active");
    }
    $(".footbuy .price").find(".current").text(current);
    $(".footbuy .price").find(".current-sm").text(currentsm);
    $(this).addClass("active").siblings().removeClass("active");
    $(".footbuy .imgbox").find("img").eq(index).addClass("active").siblings().removeClass("active");
    $(".footbuy .buybtn").attr("href", dataUrl);
  });
  countdown((".countdown strong"));
});

function expire(){
  $(".banner .box .gift").html('Apenas  <div id="giftnum" class="giftnum"><b><span class="fisrt">*</span><span class="last">*</span></b><b class="shadow"><span class="fisrt">9</span><span class="last">8</span></b></div> PACOTES RESTANTES HOJE!');
}

function zoomout() {
  $(".giftnum .shadow").addClass("zoomout");
  $(".banner .ds-box").append("<span class='dissolve'></span>");
  setTimeout(function() {
    $(".giftnum .shadow").removeClass("zoomout");
    $(".banner .ds-box .dissolve").remove();
  }, 1500);
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function setPacks(packsNum){
  packsNum=PrefixInteger(packsNum,2);
  $('#giftnum b span').eq(0).html(packsNum.substr(0,1)).end().eq(1).html(packsNum.substr(1,1));
}

function timeInit() {
  var date = new Date();
  var cName = "ptdbjun_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    count1 = nowTime + 60 * 10;
    cSet(cName, count1);
  } else {
    count1 = arr[2];
  }
}

function packsInit() {
  var packs;
  var date = new Date();
  var cName = "ptdbjun_p" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs=37;
    isFirst=true;
  } else {
    packs = arr[2];
    isFirst=false;
  }
  setPacks(packs);
  setTimeout('getSales()', 30000);
}

function getSales() {
  var date = new Date();
  var statusNow = statusCheck();
  $.ajax({
    type: "GET",
    url: "junsalept.php",
    data: "action=getSales&type=" + statusNow + "&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      setPacks(sales.packsNum);
      zoomout();
    }
  });
  setTimeout('getSales()', 30000);
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < count1) {
    return 1;
  } else {
    return 2;
  }
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if($('#giftnum').length<=0){
      expire();
      packsInit();
    }
  }
  return statusNow;
}

function getCycleCountdown(endTime, ctype) {
  var datetime = timeCountDown(endTime, ctype);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
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

var countdown = function() {
  statusSet();
  getCycleCountdown(count1);
  $(".countdown strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout("countdown()", 1);
};