$(function() {
  //packsInit
  packsInit();
  //init
  _init();
  //review
  $('#dg-container').gallery();
  //feature
  $(window).on('scroll', function() {　
    if ($(document).scrollTop() > $(".feature").offset().top -200) {
      $(".feature dl").addClass("on");
    }
    if ($(document).scrollTop() > $(".banner .buybtn").offset().top) {
      $(".floatlayer").addClass("on");
    }
    else {
      $(".floatlayer").removeClass("on");
    }
  });
  //intro
  $(".intro .right-message dl").hover(function () {
    var index = $(this).index();
    $(".intro .right-message>span").stop().animate({marginTop: index*105}, 500);
    $(".intro .left-message ul li").eq(index).addClass("on").siblings().removeClass("on");
  });
  //footbuy
});

function after20seconds() {
  var tw = MApp(2.2).datetime.getTimeZone();
  //banner
  $(".banner,.floatlayer").addClass("after");
  $(".banner .title").html("<b>Tijdelijke Kortingsactie! Nog maar</b> <span><strong>08</strong>:<strong>08</strong>:<strong>08</strong></span>");
  $(".buybtn").attr("href", 'https://www.iobit.com/buy.php?product=nl-db73pciupf2699&ref=nl_db73pciupf2699purchase2008-i-u-t-e' + refStr + '&refs=nl_purchase_db&tw=' + tw);
  $(".floatlayer .message").append("<h3><strong>08</strong>:<strong>08</strong>:<strong>08</strong></h3>");
  //footbuy
  //float
  //$(".float").addClass("on");
}

function rollBack() {
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".buybtn").attr("href", 'https://www.iobit.com/buy.php?product=nl-db73pciupf2899&ref=nl_db73pciupf2899purchase2008-i-u-t-e' + refStr + '&refs=nl_purchase_db&tw=' + tw);
  $(".banner .title").html("Nu Met Twee Krachtige Extra’s! ");
  $(".banner,.floatlayer").removeClass("after");
  $(".floatlayer .message h3").remove();
  //$(".float").removeClass("on");
}



function packsInit() {
  var date = new Date();
  var cName = "nldbspecial" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 50;
  } else {
    packs = arr[2];
  }
  getSalesNum(packs);
  setTimeout('getSales()', 11500);
}


function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2017-11-17')) / (3600 * 24 * 1000));
  var buyNum = 5202235 + daysDiff * 56 + (56 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}


function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "specialdiscount2020.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        getSalesNum(packs);
      }
    }
  });
  setTimeout('getSales()', 11500);
}

function commafy(num) {
  num = num + "";
  num = num.replace(/[ ]/g, "");
  if (num == "") {
    return;
  }
  if (isNaN(num)) {
    return;
  }
  var index = num.indexOf(".");
  if (index == -1) {
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(num)) {
      num = num.replace(reg, "$1,$2");
    }
  } else {
    var intPart = num.substring(0, index);
    var pointPart = num.substring(index + 1, num.length);
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(intPart)) {
      intPart = intPart.replace(reg, "$1.$2");
    }
    num = intPart + "." + pointPart;
  }
  return num;
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function _init() {
  var cName = "nldbspecial_d";
  var showDiscount = cGet(cName);
  if (showDiscount == null) {
    setTimeout("timeInit(1)", 20000);
  } else if (showDiscount == 1) {
    timeInit(0);
  }
}

function timeInit(isInit) {
  after20seconds();
  if (isInit == 1) {
    cSet("nldbspecial_d", 1);
    shake();
  }
  var date = new Date();
  var cName = "nldbspecial_t";
  var nowTime = Math.floor(date.getTime() / 1000);
  countTime = cGet(cName);
  if (countTime == null) {
    countTime = nowTime + 480;
    cSet(cName, countTime);
  }
  countdown((".banner h1 strong"));
  countdown((".floatlayer h3 strong"));
}

var countdown = function(countDownNow) {
  var statusNow = statusCheck();
  getCycleCountdown(countTime);
  $(countDownNow).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if (statusNow == 1) {
    setTimeout("countdown('" + countDownNow + "')", 1);
  }
};

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

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < countTime) {
    return 1;
  } else {
    if ($(".banner").hasClass('after')) {
      rollBack();
      cSet("nldbspecial_d", 2);
    }
    return 2;
  }
}

function shake(u) {
  var a = ['top', 'left'],
    b = 0;
  var doc = document.getElementById('win');
  u = setInterval(function() {
    doc.style[a[b % 2]] = ((b++) % 4 < 2 ? 0 : 4) + 'px';
    if (b > 25) {
      clearInterval(u);
      b = 0;
      doc.style.top = 0;
      doc.style.left = 0;
    }
  }, 32);
}