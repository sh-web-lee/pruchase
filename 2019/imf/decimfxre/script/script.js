$.fn.userMouseover = function(UserMessage, arrow) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(arrow).stop().animate({
      marginLeft: 220 * num
    }, 300);
  });
};

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

// flipNum(48, 4);
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

// soldOut();
function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var paramPop = MApp(2.2).url.getParameters('pop');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.discount,.buybtn,.price,.feature,.numbox,.popbox").removeClass("soldout").addClass("soldout");
  $(".change").html('Sorry, 60% discount is sold out.');
  $(".change-title").html("<p>Oops, 60% discount SOLD OUT!</p><h2>However, <span>55% discount</span> is still available.</h2>");
  $(".change-price").html('$<big>21</big>.99');
  $(".popbox .change-price").html('$<big>19</big>.95');
  $(".exbtn.soldout").attr({
    "href": 'https://www.iobit.com/buy.php?product=2019imf3pc2199&ref=xr_imfe2199' + refStr + '&refs=purchase_imfx',
    "onclick": "ga('send', 'event', 'imfebuysold', 'buy', 'imfepurchase-xmas');",
  });
}


//feature
function fillFeature(db) {
  var title = "";
  var divPad = 0;
  var divWidth = 0;
  var dlWidth = 0;
  var dlNum = 0;
  var dlMessage = {};
  var html = "";
  if (db === 7) {
    $(".enjoy li.imf7").show();
    $(".feature").removeClass("seven").addClass("seven");
    title = "So Come Back to IObit Malware Fighter 7 PRO, for:";
    dlNum = 3;
    divPad = "0 40px";
    divWidth = 340;
    dlWidth = 226;
    dlMessage = {
      iconsClassName: ["icon05", "icon04", "icon06"],
      h3Text: ["Safe PC", "Safe personal data", "Safe Online Browsing"],
      pText: ["<b>Over 203 million threats are kept away from your PC in real-time.</b>", "<b>Nobody can access to your personal files without permission.</b>", "<b>Hackers can’t track your online behaviors and violate your privacy.</b>"]
    };
    // $("li.db5").show();
  } else {
    title = "Come Back with Us, New PRO Version <span>Helps More</span>:";
    $(".enjoy li.imf7").hide();
    if (db === 6) {
      dlNum = 3;
      divPad = "0 40px";
      divWidth = 340;
      dlWidth = 226;
      dlMessage = {
        iconsClassName: ["icon03", "icon02", "icon04"],
        h3Text: ["203,000,000", "300%* faster", "Password-protect"],
        pText: ["<b>Malware Identified</b>", "<b>Threats Scanning</b>", "<b>Personal Data</b>"]
      };
      // $("li.db5").show();
    }
    if (db === 5) {
      title = "Come Back with Us, New PRO Version <span>Helps More</span>:";
      dlNum = 4;
      divPad = "0 0";
      divWidth = 275;
      dlWidth = 226;
      dlMessage = {
        iconsClassName: ["icon01", "icon02", "icon03", "icon04"],
        h3Text: ["Ransomware", "300%* faster", "203,000,000", "Password-protect"],
        pText: ["<b>Protection in real-time</b>", "<b>Threats Scanning</b>", "<b>Malware Identified</b>", "<b>Personal Data </b>"]
      };
      // $("li.db5").hide();
    }

  }

  for (var i = 0; i < dlNum; i++) {
    html += "<div><dl>" +
      "<dt><span class=" + dlMessage.iconsClassName[i] + "></span></dt>" +
      "<dd>" +
      "<h3>" + dlMessage.h3Text[i] + "</h3>" +
      "<p>" + dlMessage.pText[i] + "</p>" +
      "</dd>" +
      "</dl></div>"
  }
  $(".feature .container").html(html).css({
    "padding": divPad
  });
  $(".feature .container > div").width(divWidth);
  $(".feature .container > div dl").width(dlWidth);

  $(".feature h2").html(title);
}

$(window).on('scroll', function() {

  if ($(window).scrollTop() > $(".intro").offset().top - 100) {
    $(".intro .besom").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".enjoy").offset().top - 140) {
    $(".enjoy .forbid").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".feature h2").offset().top - 280) {
    $(".feature dl").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() < $(".banner .buybtn").offset().top) {
    $('.floatlayer').removeClass('on');
  } else {
    $('.floatlayer').addClass('on');
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
  mask(1);
  $(document).unbind('mousemove', mouseMove);
  $(document).unbind('mousemove', mouseOut);
}

var _mouseOut;

var _onscroll = 0;

function mouseOut(e) {
  _onscroll = cGet('maskiuxre_t');
  if (_onscroll == -1) {
    return false;
  } else {
    if (e.clientY < 3) {
      mask(1);
      $(document).unbind('mousemove', mouseOut);
      _mouseOut = cSet('mouseOut_t');
    }
  }
}

function mask(scroll) {
  var maskTimetwoiu = new Date();
  var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
  maskTimeiu = cGet('maskimfxre_t');

  if ((scroll == 1) && (_maskTimetwoiu - maskTimeiu) < 600) {
    return false;
  } else {
    _mouseOut = cGet('mouseOut_t');
    if (_mouseOut !== null) {
      return false;
    }
    var expireTime = cGet('maskimfxre_e');
    if (expireTime == null) {
      expireTime = Date.parse(new Date()) + 60 * 1000;
      cSet('maskimfxre_e', expireTime);
    }
    popShow();
    cycleCountdown();
  }
}

function expireTimeCheck() {
  var expireTime = cGet('maskimfxre_e');
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
  maskTimeiu = cGet('maskimfxre_t');
  if (maskTimeiu == null) {
    var maskTimeiu = new Date();
    var _maskTimeiu = Math.floor(maskTimeiu.getTime() / 1000);
    cSet('maskimfxre_t', _maskTimeiu);
  }
  mouseCheck = 0;
  maskTimeCountDown();
}

function maskTimeCountDown() {
  var maskTimetwoiu = new Date();
  var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
  maskTimeiu = cGet('maskimfxre_t');
  //console.log(_maskTimetwoiu - maskTimeiu);
  if ((_maskTimetwoiu - maskTimeiu) < 600) {
    setTimeout('maskTimeCountDown()', 1000);
    _onscroll = cGet('maskimfxre_t');
  } else {
    var maskTimetwoiu = new Date();
    var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
    maskTimeiu = cGet('maskimfxre_t');
    if ((_maskTimetwoiu - maskTimeiu) < 630) {
      //console.log("10 hou");
      $(document).bind('mousemove', mouseOut);
      setTimeout('maskTimeCountDown()', 1000);
    } else {
      //console.log("15 hou");
      $(document).bind('mousemove', mouseMove);
      window.onscroll = function() {
        var t = document.documentElement.scrollTop || document.body.scrollTop;
        if (_onscroll == -1) {
          _onscroll = cGet('maskimfxre_t');
          return false;
        } else {
          if (t > 10) {
            $(document).unbind('mousemove', mouseMove);
            mask(1);
            _onscroll = -1;
            _onscroll = cSet('maskimfxre_t');
          }
        }
      };
    }
  }
}

function packsInit() {
  var cName = "endecimfxre_p";
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
    url: "xrimfe.php",
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
    var packsNumTotal = cGet('endecimfxre_t');
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
      url: "xrimfe.php",
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
  packsInit();
  timeInit();

  setTimeout('getViewNum()', 15000);

  $(".close").click(function() {
    $(".pop-bg,.popbox").remove();
  });

  //feature
  // fillFeature(7);
  //fillFeature(6);
  //fillFeature(5);
  //review
  $(".users li").userMouseover($(".content dl"), $(".review span.arrow"));
});