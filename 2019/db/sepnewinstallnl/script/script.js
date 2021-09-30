$(function() {
  packsInit();
  _init();
  $('#dg-container').gallery();

  $(window).on('scroll', function() {　
    if ($(document).scrollTop() > $(".intro").offset().top - 300) {
      $(".intro .list").addClass("active");
    }
  });

  $(".footbuy li").on("click", function() {
    footbuyFun($(this));
  });
});

var _discount = ['26', '28', '27'];
var _imgcss = ['imgbox six', 'imgbox eight', 'imgbox seven'];

function after20seconds() {
  var tw = MApp(2.2).datetime.getTimeZone();
  //banner
  $(".banner").addClass("after");
  $(".banner .price p").removeClass("hidden");
  $(".banner .title").html("Exclusief Welkomstcadeau en Korting voor Nieuwe Gebruikers! <span>Wees er snel bij!</span>");
  $(".banner .box.left .buybtn").attr("href", buyLinks[0] + '&tw=' + tw);
  $(".banner .box.center .buybtn").attr("href", buyLinks[1] + '&tw=' + tw);
  $(".banner .box.right .buybtn").attr("href", buyLinks[2] + '&tw=' + tw);
  //footbuy
  _discount = ['24', '26', '25'];
  footbuyFun($(".footbuy ul li").eq(0));
  $(".footbuy").addClass("after");
  //float
  $(".float").addClass("on");
}

function rollBack() {
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".footbuy,.banner").removeClass("after");
  $(".banner .box.left .buybtn").attr("href", originalBuyLinks[0] + '&tw=' + tw);
  $(".banner .box.center .buybtn").attr("href", originalBuyLinks[1] + '&tw=' + tw);
  $(".banner .box.right .buybtn").attr("href", originalBuyLinks[2] + '&tw=' + tw);

  $(".banner .title").html("<h1 class='title'>Krijg Nu <strong>Twee Extra’s</strong> in Uw Dubbel Voordeelpakket! </h1>");
  $(".banner .price p").not(".people").addClass("hidden");
  $(".float").removeClass("on");
  _discount = ['26', '28', '27'];
  footbuyFun($(".footbuy ul li").eq(0));
}

function footbuyFun(selector) {
  var dataName = selector.attr("data-num");
  var dataUrl = $(".banner .box").eq(dataName).find(".buybtn").attr("href");
  var dataGa = $(".banner .box").eq(dataName).find(".buybtn").attr("onclick");
  var original = $(".banner .box").eq(dataName).find(".imgbox del").text();
  var discount = _discount[dataName];

  selector.addClass("active").siblings().removeClass("active");
  $(".footbuy .imgbox").attr('class', _imgcss[dataName]);
  $(".footbuy .price").find("del").text(original);
  $(".footbuy .price").find("big").text(discount);
  $(".footbuy .buybtn").attr("href", dataUrl);
  $(".footbuy .buybtn").attr("onclick", dataGa);
}

function packsInit() {
  var date = new Date();
  var cName = "nldbsep2" + date.getDate();
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
    url: "newinstall.php",
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
  var cName = "nldbsep2_d";
  var showDiscount = cGet(cName);
  if (showDiscount == null) {
    setTimeout("timeInit(1)", 2);
  } else if (showDiscount == 1) {
    timeInit(0);
  }
}

function timeInit(isInit) {
  after20seconds();
  if (isInit == 1) {
    cSet("nldbsep2_d", 1);
    // shake();
  }
  var date = new Date();
  var cName = "nldbsep2_t";
  var nowTime = Math.floor(date.getTime() / 1000);
  countTime = cGet(cName);
  if (countTime == null) {
    countTime = nowTime + 480;
    cSet(cName, countTime);
  }
  countdown((".countdown strong"));
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
      cSet("nldbsep2_d", 2);
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