$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".packsNum").html(num);
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var _list = '';
  var len = String(number).length;
  var str = number.toString();
  var _box = $(".flipNum");
  var createobj;
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#flip .list").eq(a).animate({
      marginTop: -curNum * 47,
    }, "slow");
    $("#fliptwo .list").eq(a).animate({
      marginTop: -curNum * 47,
    }, "slow");
  }
}
// flipNum(48, 3);

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var paramPop = MApp(2.2).url.getParameters('pop');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.discount,.buybtn,.price,.feature,.numbox,.popbox").removeClass("soldout").addClass("soldout");
  $(".change").html('Sorry, 65% discount is sold out.');
  $(".change-title").html("<p>Oops, 65% discount SOLD OUT!</p><h2>However, <span>60% discount</span> is still available.</h2>");
  $(".feature h2").find("span").html("60%");
  $(".change-price").html('$<big>14</big>.77');
  $(".popbox .change-price").html('$<big>11</big>.97');
  $(".buybtn.exbtn.soldout").attr({
    "href": "https://www.iobit.com/buy.php?product=sd63pc1477&ref=xr_sd1477" + refStr + "&refs=purchase_sdx",
    "onclick": "ga('send', 'event', 'sdbuysold', 'buy', 'sdpurchase-xmas');",
  });
}

// soldOut();

var d = 0;

$(window).on('scroll', function() {

  if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
    $('.floatlayer').addClass('on');
  } else {
    $('.floatlayer').removeClass('on');
  }

  if ($(window).scrollTop() > $(".intro h2").offset().top - 200) {
    $('.intro .rocket').removeClass('on').addClass("on");
  }

});

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function mouseMove(e) {
  if (e.clientY > 6 || e.clientX > 6) {
    mask(1);
  }

  $(document).unbind('mousemove', mouseMove);
}

function mask(scroll) {
  var maskTimetwoiu = new Date();
  var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
  maskTimeiu = cGet('masksd_t');

  if ((scroll == 1) && (_maskTimetwoiu - maskTimeiu) < 300) {
    return false;
  } else {
    var expireTime = cGet('masksd_e');
    if (expireTime == null) {
      expireTime = Date.parse(new Date()) + 60 * 1000;
      cSet('masksd_e', expireTime);
    }
    popShow();
    cycleCountdown();
  }
}

function expireTimeCheck() {
  var expireTime = cGet('masksd_e');
  if (Date.parse(new Date()) < expireTime) {
    return (expireTime - Date.parse(new Date())) / 1000;
  } else {
    return false;
  }
}

function cycleCountdown() {
  remainTime = expireTimeCheck();
  if (remainTime > 0) {
    var s = ((remainTime % 60) < 10) ? ('0' + (remainTime % 60)) : (remainTime % 60);
    var m = Math.floor(remainTime / 60);
    var arr = String(s).split("");
    $(".minute em").html(arr[0]);
    $(".minute em.last").html(arr[1]);
    remainTime--;
    setTimeout('cycleCountdown(remainTime)', 1000);
  } else {
    $(".pop-bg,.popbox").remove();
  }
}

function timeInit() {
  maskTimeiu = cGet('masksd_t');
  if (maskTimeiu == null) {
    var maskTimeiu = new Date();
    var _maskTimeiu = Math.floor(maskTimeiu.getTime() / 1000);
    cSet('masksd_t', _maskTimeiu);
  }
  mouseCheck = 0;
  maskTimeCountDown();
}

function maskTimeCountDown() {
  var maskTimetwoiu = new Date();
  var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
  maskTimeiu = cGet('masksd_t');
  if ((_maskTimetwoiu - maskTimeiu) < 300) {
    setTimeout('maskTimeCountDown()', 1000);
  } else {
    $(document).bind('mousemove', mouseMove);
  }
}

function packsInit() {
  var cName = "endecsdxr_p";
  packs = cGet(cName);
  if (packs === 0) {
    soldOut();
  } else {
    if (packs == null) {
      getSales(2);
    } else {
      getSales(1);
    }
  }
}

function getSales(isInit) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xsd.php",
    data: "action=getPacks&isInit=" + isInit + "&d=" + date.getDate() + "&packsNum=" + packsNum,
    success: function(res) {
      var sales = JSON.parse(res);
      if ((sales.packsNum != packs) || (isInit)) {
        packs = sales.packsNum;
        if (isInit) {
          flipNum(sales.packsNum, 3, 1000);
        } else {
          flipNum(sales.packsNum, 3, 100);
        }
      }
      if (packs > 0) {
        setTimeout('getSales(0)', getRetime(isInit));
      } else {
        flipNum(0, 3);
        if (!$(".discount,.buybtn").hasClass("soldout")) {
          soldOut();
        }
      }
    }
  });
}

function getRetime(isInit) {
  if (isInit == 2) {
    return 1000;
  } else {
    var reTime = 6.3;
    var packsNumTotal = cGet('endecsdxr_t');
    if (packsNumTotal > 1) {
      if ((packsNumTotal !== null) && (!isNaN(packsNumTotal))) {
        return (600 / packsNumTotal) * 1000;
      }
    } else {
      return 20000;
    }
  }
}

function getViewNum() {
  if (packs > 0) {
    $.ajax({
      type: "GET",
      url: "xsd.php",
      data: "action=getViewNum",
      success: function(res) {
        $('.viewNum').html(res);
      }
    });
    setTimeout('getViewNum()', 15000);
  }
}

function popShow() {
  $(".pop-bg,.popbox").addClass("on");
}

$(function() {
  //flipNum(50, 4);

  $(".users li").userMouseover($(".content dl"));

  $(".close").click(function() {
    $(".pop-bg,.popbox").removeClass("on");
  });

  packsInit();
  timeInit();
  setTimeout('getViewNum()', 15000);
});