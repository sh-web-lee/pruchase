function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');

function animateNumber(select, number) {
  $(select).prop('number',  10).animateNumber({      
    number: number,
    numberStep:  comma_separator_number_step
  }, 2000);
}

function numberJump() {
  $(".change-num").prop('number', 50).animateNumber({
    number: 100,
  }, 1000);
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
  $(".change").html('Sorry, 70% discount is sold out.');
  $(".change-title").html("<p>Oops, 70% discount SOLD OUT!</p><h2>However, <span>65% discount</span> is still available.</h2>");
  $(".change-price").html('$<big>16</big>.77');
  $(".popbox .change-price").html('$<big>14</big>.77');
  $(".exbtn.soldout").attr({
    "href": 'https://www.iobit.com/buy.php?product=2019asc3pc1677x&ref=xr_asce1677' + refStr + '&refs=purchase_ascx',
    "onclick": "ga('send', 'event', 'ascebuysold', 'buy', 'ascepurchase-xmas');",
  });
}

//feature
function fillFeature(asc) {
  var title = "";
  var divPad = 0;
  var divWidth = 0;
  var dlWidth = 0;
  var dlNum = 0;
  var dlMessage = {};
  var html = "";
  switch (asc) {
    case 13:
      {
        title = "So Come Back to Advanced SystemCare 13 PRO, for:";
        dlNum = 3;
        divPad = "0 40px";
        divWidth = 340;
        dlWidth = 272;
        dlMessage = {
          iconsClassName: ["icon05", "icon06", "icon02"],
          h3Text: ["Cleaner PC", "Faster PC", "Safer PC"],
          pText: ["No useless files and registries can take up your disk space.", "Optimize startup items, system resources and browser settings easily.", "Block external threats and protect your online privacy at the same time."]
        };
      }
      break;
    case 12:
      {
        title = "Come Back with Us, New PRO Version <span>Helps More</span>:";
        dlNum = 3;
        divPad = "0 40px";
        divWidth = 340;
        dlWidth = 226;
        dlMessage = {
          iconsClassName: ["icon01", "icon02", "icon03"],
          h3Text: ["4GB<small>*</small> More", "195% More", "60% More"],
          pText: ["<b>disk space released</b>", "<b>spyware detected</b>", "<b>software kept updated</b>"]
        };
      }
      break;
    case 11:
      {
        title = "Come Back with Us, New PRO Version <span>Helps More</span>: ";
        dlNum = 4;
        divPad = "0 0";
        divWidth = 275;
        dlWidth = 226;
        dlMessage = {
          iconsClassName: ["icon01", "icon02", "icon03", "icon04"],
          h3Text: ["4GB<small>*</small> More", "195% More", "90% More", "Fully"],
          pText: ["<b>disk space released</b>", "<b>spyware detected</b>", "<b>software kept updated</b>", "<b>protected privacy</b>"]
        };
      }
      break;
  }
  $(".feature h2").html(title);
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
}

function prev() {
  $(".dg-prev").click(function() {

    var message = $('.dg-container ul li:last');
    $(".review .reviews dd p").removeClass("on");
    var index = $(".dg-container ul li").length;

    $('.dg-container ul li:eq(0)').removeClass("first");
    $('.dg-container ul li:eq(1)').removeClass("two");
    $('.dg-container ul li:eq(2)').removeClass("three");
    $('.dg-container ul li:eq(3)').removeClass("active");
    $('.dg-container ul li:eq(4)').removeClass("four");
    $('.dg-container ul li:eq(5)').removeClass("five");
    $('.dg-container ul li').removeClass("last");

    $('.dg-container ul li:eq(0)').before(message);
    $('.dg-container ul li:eq(0)').addClass("first").addClass("on");
    $('.dg-container ul li:eq(1)').addClass("two");
    $('.dg-container ul li:eq(2)').addClass("three");
    $('.dg-container ul li:eq(3)').addClass("active");
    $('.dg-container ul li:eq(4)').addClass("four");
    $('.dg-container ul li:eq(5)').addClass("five");

    var num = $('.dg-container ul li.active').attr("data-num");
    $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
    setTimeout('$(".review .reviews dd p").eq(' + num + ').addClass("on");', 100);
  });
}

function next() {
  $(".dg-next").click(function() {
    $(".review .reviews dd p").removeClass("on");
    var message = $('.dg-container ul li:eq(0)');
    $('.dg-container ul li:eq(0)').removeClass("first");
    $('.dg-container ul li:eq(1)').removeClass("two");
    $('.dg-container ul li:eq(2)').removeClass("three");
    $('.dg-container ul li:eq(3)').removeClass("active");
    $('.dg-container ul li:eq(4)').removeClass("four");
    $('.dg-container ul li:eq(5)').removeClass("five");

    $('.dg-container ul').find('li:first').appendTo($('.dg-container ul'));

    $('.dg-container ul li:eq(0)').addClass("first");
    $('.dg-container ul li:eq(1)').addClass("two");
    $('.dg-container ul li:eq(2)').addClass("three");
    $('.dg-container ul li:eq(3)').addClass("active");
    $('.dg-container ul li:eq(4)').addClass("four");
    $('.dg-container ul li:eq(5)').addClass("five");

    var num = $('.dg-container ul li.active').attr("data-num");
    $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
    setTimeout('$(".review .reviews dd p").eq(' + num + ').addClass("on");', 100);
  });
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

  if ($(window).scrollTop() > $(".review-wrap").offset().top - 100) {
    animateNumber('.present h4.first', 30000000);
    animateNumber('.present h4.two', 2666667);
  }

  if ($(window).scrollTop() < $(".banner .buybtn").offset().top) {
    $('.floatlayer').removeClass('on');
  } else {
    $('.floatlayer').addClass('on');
  }
});

function popShow() {
  $(".pop-bg,.popbox").addClass("on");
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

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function mouseMove(e) {
  // if (e.clientY > 6 || e.clientX > 6) {
  //   alert("scroll3");
  //   mask(1);
  //   $(document).unbind('mousemove', mouseMove);
  //   $(document).unbind('mousemove', mouseOut);
  // }
  mask(1);
  $(document).unbind('mousemove', mouseMove);
  $(document).unbind('mousemove', mouseOut);
  // $(window).on('scroll', function() {
  //   if ($(window).scrollTop() > 6 && $(window).scrollTop() < 20) {
  //     alert("scroll2");
  //     mask(1);
  //     $(document).unbind('mousemove', mouseMove);
  //     $(document).unbind('mousemove', mouseOut);
  //   }
  // });
}

var _mouseOut;
var _onscroll = 0;

function mouseOut(e) {
  _onscroll = cGet('maskiuxre_t');
  if (_onscroll == -1) {
    return false;
  } else {
    if (e.clientY < 3) {
      // console.log("mousemove");
      mask(1);
      $(document).unbind('mousemove', mouseOut);
      _mouseOut = cSet('mouseOut_t');
    }
  }
}

function mask(scroll) {
  var maskTimetwoiu = new Date();
  var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
  maskTimeiu = cGet('maskascxre_t');

  if ((scroll == 1) && (_maskTimetwoiu - maskTimeiu) < 600) {
    return false;
  } else {
    _mouseOut = cGet('mouseOut_t');
    if (_mouseOut !== null) {
      // console.log("buweikong");
      return false;
    }
    var expireTime = cGet('maskascxre_e');
    if (expireTime == null) {
      expireTime = Date.parse(new Date()) + 60 * 1000;
      cSet('maskascxre_e', expireTime);
    }
    popShow();
    cycleCountdown();
  }
}

function expireTimeCheck() {
  var expireTime = cGet('maskascxre_e');
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
  maskTimeiu = cGet('maskascxre_t');
  if (maskTimeiu == null) {
    var maskTimeiu = new Date();
    var _maskTimeiu = Math.floor(maskTimeiu.getTime() / 1000);
    cSet('maskascxre_t', _maskTimeiu);
  }
  // if (maskTimeiu == -1) {
  //   if (expireTimeCheck()) {
  //     mask();
  //   }
  // }
  mouseCheck = 0;
  maskTimeCountDown();
}

function maskTimeCountDown() {
  var maskTimetwoiu = new Date();
  var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
  maskTimeiu = cGet('maskascxre_t');
  //console.log(_maskTimetwoiu - maskTimeiu);
  if ((_maskTimetwoiu - maskTimeiu) < 600) {
    setTimeout('maskTimeCountDown()', 1000);
    _onscroll = cGet('maskascxre_t');
  } else {
    var maskTimetwoiu = new Date();
    var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
    maskTimeiu = cGet('maskascxre_t');
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
          _onscroll = cGet('maskascxre_t');
          // console.log("yunxingleyici");
          return false;
        } else {
          if (t > 10) {
            $(document).unbind('mousemove', mouseMove);
            mask(1);
            _onscroll = -1;
            _onscroll = cSet('maskascxre_t');
            // console.log("hh");
          }
        }
      };
    }
  }
}

function packsInit() {
  var cName = "endecascxre_p";
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
    url: "xrasce.php",
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
    var packsNumTotal = cGet('endecascxre_t');
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
      url: "xrasce.php",
      data: "action=getViewNum",
      success: function(res) {
        $('.viewNum').html(res);
      }
    });
    setTimeout('getViewNum()', 15000);
  }
}

$(function() {
  prev();
  next();

  packsInit();
  timeInit();

  //feature
  // fillFeature(13);

  $(".close").click(function() {
    $(".pop-bg,.popbox").remove();
  });


  setTimeout('getViewNum()', 15000);
});