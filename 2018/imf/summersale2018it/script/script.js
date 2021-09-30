$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
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


function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".banner .numlist").remove();
  var num = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(num).length;
  var str = num.toString();
  var box = $(".banner .num");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<b class="numlist"></b>'));
    } else {
      createobj = $('<b class="numlist"></b>');
    }
    box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .numlist").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".banner .numlist").eq(a).animate({
      marginTop: -curNum * 36,
    }, "slow");
  }
}

function flipNum(num, length) {
  $(".banner .numlist").remove();
  var num = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(num).length;
  var str = num.toString();
  var box = $(".banner .num");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<b class="numlist"></b>'));
    } else {
      createobj = $('<b class="numlist"></b>');
    }
    box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .numlist").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".banner .numlist").eq(a).animate({
      marginTop: -curNum * 36,
    }, "fast");
  }
}

var _href = [
  'https://www.iobit.com/buy.php?product=it-imf63pc1999&ref=it_imf63pc1999purchase1806&refs=it_purchase_imf',
  'https://www.iobit.com/buy.php?product=it-imf63pcpf2199&ref=it_imf63pcpf2199purchase1806&refs=it_purchase_imf',
  'https://www.iobit.com/buy.php?product=it-imf63pcpf1999&ref=it_imf63pcpf1999purchase1806&refs=it_purchase_imf'
];
var _current = ['19', '21'];
var _original = ['59,95€', '99,90€'];
var _discount = ['39,96', '77.91', '79,91'];

function exchange() {
  $('.footbuy .countdown').css('display', 'block');
  $(".banner .right").addClass("exchange");
  $(".footbuy").addClass("exchange");
  $(".footbuy .current").text(_current[0]);
  $(".footbuy .discount").text(_discount[2]);
  $(".footbuy .price").find(".buybtn").attr("href", _href[2]);
  $(".banner .right").find(".change").text(_discount[2]);
  $(".banner .right").find(".current").text(_current[0]);
  $(".banner .right").find(".buybtn").attr("href", _href[2]);
  $(".giveway").find(".buybtn").attr("href", _href[2]);
}

function original() {
  $('.footbuy .countdown').css('display', 'none');
  $(".banner .right").removeClass("exchange");
  $(".footbuy").removeClass("exchange");
  $(".footbuy .current").text(_current[1]);
  $(".footbuy .discount").text(_discount[1]);
  $(".footbuy .price").find(".buybtn").attr("href", _href[1]);
  $(".banner .right").find(".change").text(_discount[1]);
  $(".banner .right").find(".current").text(_current[1]);
  $(".banner .right").find(".buybtn").attr("href", _href[1]);
  $(".giveway").find(".buybtn").attr("href", _href[1]);
}

function maskBox() {
  exchange();
  $(".maskbox").addClass("on");
  $(".banner .countdown").remove();
  $(".banner .right").prepend('<div id="banCountdown" class="countdown"><i class="all-icons"></i>Offerta scade tra <strong>12</strong> Min <strong>52</strong> Sec <strong>05</strong> Ms</div>');
  $(".floatlayer").addClass("active");
  $(".floatlayer").prepend('<div id="floatCountdown" class="countdown">Scade tra <strong>12</strong> Min <strong>52</strong> sec <strong>05</strong> ms</div>');
}

function maskHide() {
  maskOff = 0;
  $(".maskbox").remove();
  $("#floatCountdown").remove();
  $(".floatlayer").removeClass("active");
  $(".banner .countdown").remove();
  $(".banner .right").prepend('<div id="banCountdown" class="countdown">Solo <span id="num" class="num"></span> Pezzi Rimasti</div>');
  flipNum(packs, 2);
}

$(function() {
  $(".users li").userMouseover($(".content dl"));
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));

  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .detail-list dl").removeClass("active");
    $(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  }, function() {
    $(".benfits .detail-list dl").eq(0).addClass("active");
  });

  $(".floatlayer .close").on("click", function() {
    $(".floatlayer").hide();
  });

  $(".maskbox .close").on("click", function() {
    $(".maskbox").hide();
  });

  $(".footbuy li").on("click", function() {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".footbuy .imfbox img").eq(index).addClass("active").siblings().removeClass("active");
    $(".footbuy .current").text(_current[index]);
    $(".footbuy .original").text(_original[index]);
    $(".footbuy .discount").text(_discount[index]);
    $(".footbuy .price").find(".buybtn").attr("href", _href[index]);
    if ($(".footbuy").hasClass("exchange") && index === 1) {
      $(".footbuy .current").text(_current[0]);
      $(".footbuy .original").text(_original[1]);
      $(".footbuy .discount").text(_discount[2]);
      $(".footbuy .price").find(".buybtn").attr("href", _href[2]);
    }
  });

});

function timeCountDown(startTimestamp, ctype) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = 0;
  if (ctype == 2) {
    for (i = 1;; i++) {
      remainingTime = (startTimestamp + 24 * 60 * 60 * i) - time;
      if (remainingTime > 0) break;
    }
  } else {
    remainingTime = startTimestamp - time;
  }
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

var countdown = function(tType) {
  var statusNow = statusSet();
  if (statusNow == 2) {
    getCycleCountdown(count2, 1);
    $(".countdown").each(function() {
      $(this).find('strong').eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
    });
  }
  setTimeout("countdown(" + statusNow + ")", 1);
};

function getCycleCountdown(endTime, ctype) {
  var datetime = timeCountDown(endTime, ctype);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function statusCheck() {
  var date = new Date();
  var timeNow = Math.floor(date.getTime() / 1000);
  if (timeNow < count1) {
    return 1;
  } else {
    var cName = 'itimfsummer_2_';
    count2 = cGet(cName);
    if (count2 == null) {
      count2 = timeNow + 600;
      cSet(cName, count2);
    }
    if (count2 > timeNow) {
      return 2;
    } else {
      return 3;
    }
  }
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$(".maskbox").hasClass('on')) {
      maskBox();
    }
  } else if (statusNow == 3) {
    if (maskOff == 1) {
      maskHide();
    }
    if ($(".footbuy").hasClass('exchange')) {
      original();
    }
  }
  return statusNow;
}

function timeInit() {
  var date = new Date();
  var cName = "itimfsummer_1_";
  var nowTime = Math.floor(date.getTime() / 1000);
  if (cGet(cName) == null) {
    count1 = nowTime + 60;
    cSet(cName, count1);
  } else {
    count1 = cGet(cName);
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

function packsInit() {
  var date = new Date();
  var cName = "itimfsummer_p" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 98;
  } else {
    packs = arr[2];
  }
  flipNum(packs, 2);
  $('.packsNum').html(packs);
  setTimeout('getSales()', 10000);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "summersale2018.php",
    data: "action=getSales&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      var scrollHeight = $(".banner").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $(".float").removeClass('on');
        setTimeout("$('.float').addClass('on');", 800);
      }
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
      if (packs != sales.packsNum) {
        packs = sales.packsNum;
        flipNum(packs, 2)
      }
      $(".packsNum").html(packs);
      $(".buyNum").html(sales.buyNum);
    }
  })
  setTimeout('getSales(0)', 15000);
}

$(function() {
  maskOff = 1;
  timeInit();
  packsInit();
  countdown();
  setTimeout('getSales(0)', 15000);
});