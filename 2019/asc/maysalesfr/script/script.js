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

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  //$(".secbox").html("");
  //$(".seclist").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();
  var box = $(".secbox");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<b class="seclist"></b>'));
    } else {
      createobj = $('<b class="seclist"></b>');
    }
    box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  if($(".seclist").html()==''){
    $(".seclist").append(list);
  }
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#sec .seclist").eq(a).animate({
      marginTop: -curNum * 20,
    }, "slow");
  }
}

function soldGift() {
  $(".offer .mask").remove();
  $(".giftbox").removeClass("sold").addClass("sold");
  $(".giftbox .buybtn").removeClass("gray").addClass("gray");
  $(".giftbox .buybtn").attr("href", "javascript: void(0)");
  $(".offer.center").append('<div class="mask"><span class="reduce">EXPIRE</span></div>');
  setTimeout(function() {
    $(".mask span.reduce").removeClass("on").addClass("on");
    $(".footbuy .mask").removeClass("on").addClass("on");
  }, 300);
  $(".footbuy li.center").removeClass("on").addClass("sold");
  $(".footbuy li.center").append('<div class="mask">EXPIRE</div>');
  choice($(".footbuy li").eq(0));

}

function popShow() {
  $(".popbg,.popbox").removeClass("on").addClass("on");
  $(".close").click(function() {
    $(".popbg,.popbox").removeClass("on");
  });
}

function popHide() {
  $(".popbg,.popbox").removeClass("on");
}

function choice(select) {
  var index = $(select).index();
  if ($('.giftbox').hasClass("sold") && index === 1) {
    return;
  }
  // console.log(index);
  var _discount = $(".banner .offer").eq(index).find("big").text();
  var _original = $(".banner .offer").eq(index).find("del").text();
  var _href = $(".banner .offer .price").eq(index).find(".buybtn").attr("href");
  var _ga = $(".banner .offer .price").eq(index).find(".buybtn").attr("onclick");
  $(select).addClass("on").siblings().removeClass("on");
  $(".footbuy .imgbox img").eq(index).addClass("on").siblings().removeClass("on");
  $(".footbuy .price").find("big").text(_discount);
  $(".footbuy .price").find("del").text(_original);
  $(".footbuy .buybtn").attr({
    "href": _href,
    "onclick": _ga,
  });

}

$(function() {
  $(window).scrollWindow($(".feature dl"), $('.reviews dl'), ("on"));
  //soldGift();

  $(".footbuy li").click(function() {
    choice(this);
  });
});

var cArr = ["shot3", "shot2", "shot1"];
var index = 0;

//prevFun
function prevFun() {
  cArr.unshift(cArr[2]);
  cArr.pop();
  $(".showcase .imglist li").each(function(i, e) {
    $(e).removeClass().addClass(cArr[i]);
  });
  index--;
  if (index < 0) {
    index = 2;
  }
}
//nextFun
function nextFun() {
  cArr.push(cArr[0]);
  cArr.shift();
  $(".showcase .imglist li").each(function(i, e) {
    $(e).removeClass().addClass(cArr[i]);
  });
  index++;
  if (index > 2) {
    index = 0;
  }
}

$(function() {
  timeInit();
  countdown(("#bantime b"));
  countdown(("#giftime b"));
  if ($(".giftbox").hasClass("sold")) {
    $("#giftime b").text("00");
  }
});

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

function timeInit() {
  var date = new Date();
  var tCName = "frascmay_t";
  var cName = "frascmay_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 415;
    cSet(tCName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  mouseEvent = false;
  if (cGet('enascanni_s') == -1) {
    maskTimeInit();
  }
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
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

function getCycleCountdownPop(endTime) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = endTime - time;
  sp = remainingTime % 60;
}

var countdown = function(countdown, tType) {
  var statusNow = statusSet();
  if ((statusNow == 1)) {
    getCycleCountdown(countTime);
    $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
    $("#giftime b").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
    setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
  }
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$(".giftbox").hasClass('sold')) {
      soldGift();
    }
  }
  return statusNow;
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if ((timeNow >= (countTime - 355)) && (cGet('enascanni_s') == null) && (!mouseEvent)) {
    mouseEvent = true;
    $(document).bind('mousemove', mouseOut);
  }
  if (timeNow <= countTime) {
    return 1;
  } else {
    return 2;
  }
}

function mouseOut(e) {
  if (e.clientY < 10) {
    var cName = 'enascanni_s';
    cSet(cName, -1);
    maskTimeInit();
    $(document).unbind('mousemove', mouseOut);
  }
}

function maskTimeInit() {
  if ((cGet('enascanni_s') == -1) && (!$(".popbg,.popbox").hasClass('on'))) {
    popShow();
    var date = new Date();
    var cName = "enascanni_c";
    var arr = cGet("enascanni_c");
    var nowTime = Math.floor(date.getTime() / 1000);
    if (arr == null) {
      maskCountTime = nowTime + 60;
      cSet(cName, maskCountTime);
    } else {
      maskCountTime = parseInt(arr);
    }
    maskCountdown();
  }
}

var maskCountdown = function() {
  var statusNow = maskStatusSet();
  getCycleCountdownPop(maskCountTime);
  flipNum(parseInt(sp), 2);

  if (statusNow == 1) {
    setTimeout("maskCountdown()", 1000);
  }
};

function maskStatusSet() {
  var statusNow = maskStatusCheck();
  if (statusNow == 2) {
    cSet('enascanni_s', -2);
    popHide();
  }
  return statusNow;
}

function maskStatusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < maskCountTime) {
    return 1;
  } else {
    return 2;
  }
}