$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

(function($) {
  $.getUrlParam = function(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]);
    return '';
  }
})(jQuery);

function numberJump(target, num, starnumber, time) {
  target.prop('number', starnumber).animateNumber({
    number: num,
  }, time);
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".packbox .list b").text("");
  var num = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(num).length;
  var str = num.toString();
  var box = $(".packbox");
  for (var j = 0; j < arr.length; j++) {
    list += '<strong>' + arr[j] + '</strong>';
  }
  $(".banner .packbox .list").html(list);
  $(".centbuy .packbox .list").html(list);
  $(".bottombuy .packbox .list").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".banner .packbox .list").eq(a).animate({
      marginTop: -curNum * 33,
    }, "slow");
    $(".centbuy .packbox .list").eq(a).animate({
      marginTop: -curNum * 33,
    }, "slow");
    $(".bottombuy .packbox .list").eq(a).animate({
      marginTop: -curNum * 33,
    }, "slow");
  }
}

function reduceNum(num, numRe) {
  $('.progressbar span').append('<em class="reduce"></em>');
  $('.banner .left').append('<span class="ghost"><span class="reduce"></span></span>');
  
  var number = num * 2.31;
  $(".progressbar span").css("width", number);
  setTimeout('$(".progressbar .reduce,.banner .ghost").remove();', 1500);
  if (numRe == 1) {
    setTimeout(function() {
      flipNum(num, 2);
    }, 100);
  }
}

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "ascpre" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 300;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
}

function packsInit() {
  var date = new Date();
  var cName = "esiuasc" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 70;
  } else {
    packs = arr[2];
  }
  reduceNum(packs, 1);
  $('.progressbar span').css('transition', '.5s linear');
  setTimeout('getSales()', 11500);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xiuasc.php",
    data: "action=getSales&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        reduceNum(packs, 1);
      }
    }
  });
  setTimeout('getSales()', 30000);
}

function getViewNum() {
  $.ajax({
    type: "GET",
    url: "xiuasc.php",
    data: "action=getViewNum",
    success: function(res) {
      $('.viewNum').html(res);
    }
  });
  setTimeout('getViewNum()', 15000);
}

$(function() {
  $(window).scrollWindow($(".banner .buybtn"), $('.backtotop'), ("on"));
  $("#backtotop").target($(".banner"), 0);
  numberJump($('.viewNum'), viewNum, 500, 1500);
  $(".users li").mouseover(function(event) {
    var num = $(this).index();
    $(".users li").eq(num).addClass('current').siblings().removeClass('current');
    $(".review .content > dl").eq(num).addClass('active').siblings().removeClass('active');
  });
});

$(function() {
  packsInit();
  cycleCountdown();
  setTimeout('getSales()', 30000);
  setTimeout('getViewNum()', 15000);
});

function cycleCountdown(){
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
  $('.countdown').each(function() {
    $(this).find('b').eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  });
  setTimeout('cycleCountdown()', 1);
}