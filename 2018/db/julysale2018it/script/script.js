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

var _discountwo = ['115,98', '117,98'];
var _current = ['24', '26'];
var _dataUrl = [
  'https://www.iobit.com/buy.php?product=it-db53pcsdpf2499&ref=it_db53pcsdpf2499purchase1807a&refs=it_purchase_db',
  'https://www.iobit.com/buy.php?product=it-db53pcsdpf2699&ref=it_db53pcsdpf2699purchase1807&refs=it_purchase_db',
  'https://www.iobit.com/buy.php?product=it-db53pcsdpf2499&ref=it_db53pcsdpf2499purchase1807b&refs=it_purchase_db',
  'https://www.iobit.com/buy.php?product=it-db53pcsdpf2499&ref=it_db53pcsdpf2499purchase1807c&refs=it_purchase_db'
];
var _dataGa = ["ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpf1807b-it')", "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpf1807a-it')"];
var current, dataUrl, dataGa, _discount, original;

var dateExp=new Date().getDate()+2;
$('.date-num').html(dateExp);

//这个方法是弹出框出现后three offer 内容的变化
function tenChange() {
  $(window).scrollWindow($(".giftbox"), $('.floatlayer'), ("on"));
  $(".banner").find(".red").addClass("reduce");
  $(".footbuy").addClass("reduce");
  $(".floatlayer").addClass("reduce");
  $(".banner .red .giftbox").find("p").addClass("countdown");
  $(".banner .red .giftbox").find("p").html("Offerta scade tra <span>10</span> Min <span>00</span> Sec <span>00</span> Ms");
  //countdown((".mask .countdown span"));
  //countdown((".banner .countdown span"));
  //countdown((".floatlayer .countdown span"));
  $(".banner .red").append("<div class='reducenum'>-2€</div>");
  $(".floatlayer").append("<div class='reducenum'>-2€</div>");
  $(".banner .red .tag").find("span").text(_discountwo[0]);
  $(".footbuy .price").find(".discount").text(_discountwo[0]);
  $(".banner .red .price").find(".current").text(_current[0]);
  $(".footbuy .price").find("small").text(_current[0]);
  $(".banner .red .price").find(".buybtn").attr("href", _dataUrl[0]);
  $(".banner .red .price").find(".buybtn").attr("onclick", _dataGa[0]);
  $(".footbuy .price").find(".buybtn").attr("href", _dataUrl[3]);
  $(".footbuy .price").find(".buybtn").attr("onclick", _dataGa[0]);
  $(".donation").find(".buybtn").attr("href", _dataUrl[3]);
  $(".donation").find(".buybtn").attr("onclick", _dataGa[0]);
  $(".floatlayer").append('<div class="mass">Massimizza</div>');
  $(".floatlayer .mass").on("click", function() {
    $(".maskbox").addClass("active");
    $(".mask").addClass("active");
  });
}

//这个方法是页面打开30秒钟后调用，出现弹出框
function maskBox() {
  maskTime = -1;
  cSet('mask_t', maskTime);
  packsInit();
  countTimeInit();
  if (expireCheck()) {
    $(".maskbox").addClass("active");
    $(".mask").addClass("active");
    $(".mask .close").on("click", function() {
      $(".maskbox").removeClass("active");
      $(".mask").removeClass("active");
    });
    tenChange();
  } else {
    giftCountdown();
  }
}

//倒计时10分钟结束后，调用这个方法回到原始状态
function giftCountdown() {
  var dateExp=new Date().getDate()+2;
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $(".floatlayer .mass").remove();
  $(".banner").find(".red").removeClass("reduce");
  $(".footbuy").removeClass("reduce");
  $(".floatlayer").removeClass("reduce");
  $(".maskbox").remove();
  $(".mask").remove();
  $(".reducenum").remove();
  $(".floatlayer").addClass("reducend").removeClass("reduce");
  $(".floatlayer .countdown").html("scade il "+dateExp+" Augosto.");
  $(".banner .red .giftbox").find("p").html('<div id="giftnum" class="giftnum packsNum"><b>' + ((normalPack == null) ? 78 : normalPack) + '</b><b class="shadow packsNum">78</b></div> pezzi rimasti! Offerta scade il '+dateExp+' agosto.');
  $(".banner .red .tag").find("span").text(_discountwo[1]);
  $(".footbuy .price").find(".discount").text(_discountwo[1]);
  $(".banner .red .price").find(".current").text(_current[1]);
  $(".footbuy .price").find("small").text(_current[1]);
  $(".banner .red .price").find(".buybtn").attr("href", _dataUrl[1]);
  $(".banner .red .price").find(".buybtn").attr("onclick", _dataGa[1]);
  $(".footbuy .price").find(".buybtn").attr("href", _dataUrl[1]);
  $(".footbuy .price").find(".buybtn").attr("onclick", _dataGa[1]);
  $(".donation").find(".buybtn").attr("href", _dataUrl[1]);
  $(".donation").find(".buybtn").attr("onclick", _dataGa[1]);
  $(".floatlayer").append('<div class="close"></div>');
  $("#floatlayer .close").on('click', function(event) {
    $("#floatlayer").hide();
  });
}

//倒计时剩下三分钟时调用这个方法。
function link() {
  $(".reducenum").addClass("blink");
}

//礼物减少时的动画效果
function zoomout() {
  $(".giftnum .shadow").addClass("zoomout");
  //$(".banner .red .imgbox").append("<span class='dissolve'></span>");

  $(".banner .red .imgbox").append("<span class='dissolve first'></span><span class='numreduce'></span>");
  setTimeout(function() {
    $(".banner .imgbox .dissolve").remove();
    $(".banner .imgbox .numreduce").remove();
  }, 1200);
  setTimeout(function() {
    $(".giftnum .shadow").removeClass("zoomout");
    $(".banner .imgbox .dissolve").remove();
  }, 800);
}

// 最开始礼包减少效果
var _time = 0;

function firstZoomout() {
  $(".banner .red .imgbox").append("<span class='dissolve first'></span><span class='numreduce'></span>");
  setTimeout(function() {
    $(".banner .imgbox .dissolve").remove();
    $(".banner .imgbox .numreduce").remove();
  }, 1200);
  _time = _time + 1;
  t = setTimeout("firstZoomout()", 1300);
  if (_time > 2) {
    clearTimeout(t);
  }
}

$(function() {
  packs = null;
  normalPack = null;
  getSalesNum();
  timeInit();
  $(window).scrollWindow($(".banner .buybtn"), $('.intro .list'), ("active"));
  if ($(document).scrollTop() > $(".intro").offset().top - 300) {
    $(".intro .list").addClass("active");
  }
  $(".review dl dt .img-box").mouseover(function(event) {
    $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });

  $(".footbuy li").on("click", function() {
    var index = $(this).index();
    var dataName = $(this).attr("data-num");

    $(this).addClass("active").siblings().removeClass("active");
    $(".footbuy .imgbox").find("img").eq(index).addClass("active").siblings().removeClass("active");

    dataUrl = $(".banner .box").eq(dataName).find(".buybtn").attr("href");
    dataGa = $(".banner .box").eq(dataName).find(".buybtn").attr("onclick");
    original = $(".banner .box").eq(dataName).find(".original").text();
    current = $(".banner .box").eq(dataName).find(".current").text();
    _discount = $(".banner .box").eq(dataName).find(".tag span").text();
    if ($(".footbuy").hasClass("reduce") && dataName == 1) {
      dataUrl = _dataUrl[3];
      dataGa = _dataGa[0];
      current = _current[0];
      _discount = _discountwo[0];
    }
    $(".footbuy .price strong").find("small").text(current);
    $(".footbuy .price p").find("del").text(original);
    $(".footbuy .price p").find(".discount").text(_discount);
    $(".footbuy .buybtn").attr("href", dataUrl);
    $(".footbuy .buybtn").attr("onclick", dataGa);
  });
});

function timeInit() {
  maskTime = cGet('mask_t');
  if (maskTime == null) {
    maskTime = 40;
    cSet('mask_t', maskTime);
  }
  if (maskTime == -1) {
    maskBox();
  }
  maskTimeCountDown();
}

function countTimeInit() {
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var cName = "itdbjul";
  countTime = cGet(cName);
  if (countTime == null) {
    countTime = nowTime + 600;
    cSet(cName, countTime);
  }
  countdown();
}

function maskTimeCountDown() {
  if (maskTime > 0) {
    if (maskTime == 35) {
      $(document).bind('mousemove', mouseOut);
    }
    maskTime--;
    cSet('mask_t', maskTime);
    setTimeout('maskTimeCountDown()', 1000);
  } else if ((maskTime == 0)) {
    $(document).bind('mousemove', mouseMove);
  }
}

function mouseOut(e) {
  if (e.clientY < 3) {
    maskBox();
    $(document).unbind('mousemove', mouseOut);
  }
}

function mouseMove(e) {
  maskBox();
  $(document).unbind('mousemove', mouseMove);
  $(document).unbind('mousemove', mouseOut);
}

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    if (remainingTime < 180) {
      link();
    } else {
      $(".reducenum").removeClass("blink");
    }
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
    $("p.countdown").removeClass("blink");
    if (packs > 0) {
      packs = 0;
      cSet("itdbjulpa", packs);
      $('.packsNum').html(78);
    }
    return [0, 0, 0, 0, 0];
  }
}

var countdown = function(countdown, tType) {
  statusSet();
  getCycleCountdown(countTime);

  $(".mask .countdown span").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(".banner .countdown span").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(".floatlayer .countdown span").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
};

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
  if ((timeNow > countTime) || (packs <= 0)) {
    return 2;
  } else {
    return 1;
  }
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if ($(".footbuy").hasClass('reduce')) {
      giftCountdown();
    }
  }
}

function packsInit() {
  var date = new Date();
  var cName = "itdbjulpa" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 49;
  } else {
    packs = arr[2];
  }

  normalPack = cGet('itdbjulexppa');
  if (normalPack == null) {
    $('.packsNum').html(packs);
  } else {
    $('.packsNum').html(normalPack);
  }
  getSalesNum();
  if (packs > 45) {
    setTimeout('getPacks()', 2000);
  } else {
    setTimeout('getPacks()', 13000);
  }
}

function getPacks() {
  var date = new Date();
  $.ajax({
    type: 'GET',
    url: 'julysale2018.php',
    data: 'action=getSales&d=' + date.getDate() + '&exp=' + ((expireCheck() == false) ? 1 : 0),
    success: function(res) {
      res = JSON.parse(res);
      var sPacks = res.packsNum;
      var viewNum = res.viewNum;
      $('.personsNum').html(viewNum);
      $('.buyNum').html(res.buyNum);
      $("#first").html(res.firstName);
      $("#last").html(res.lastName);
      getSalesNum();
      if (sPacks == 0) {
        $('.packsNum').html(78);
      } else {
        $('.packsNum').html(sPacks);
      }
      getSalesNum();
      if (sPacks != packs) {
        //flipNum(packs);
        if (expireCheck()) {
          packs = sPacks;
        }
        zoomout();
      }
    }
  });
  if (packs > 45) {
    setTimeout('getPacks()', 2000);
  } else {
    setTimeout('getPacks()', 13000);
  }
}

function expireCheck() {
  if ((packs > 0) && (countTime > 0)) {
    return true;
  } else {
    return false;
  }
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
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

function getSalesNum(packsNow) {
  normalPack = cGet('itdbjulexppa');
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2017-11-17')) / (3600 * 24 * 1000));
  var buyNum = 722925 + daysDiff * 128 + (128 - ((packs == null) ? 49 : packs) - ((normalPack == null) ? 78 : normalPack));
  $('.buyNum').html(commafy(buyNum));
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