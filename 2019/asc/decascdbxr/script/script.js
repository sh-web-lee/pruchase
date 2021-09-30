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

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var paramPop = MApp(2.2).url.getParameters('pop');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.discount,.buybtn,.price,.feature,.numbox,.popbox").removeClass("soldout").addClass("soldout");
  $(".change").html('Sorry, 75% discount is sold out.');
  $(".change-title").html("<p>Oops, 75% discount SOLD OUT!</p><h2>However, <span>70% discount</span> is still available.</h2>");
  $(".change-price").html('$<big>34</big>.99');
  $(".centbuy .clist.two .cost").find("span").html('70%');
  $(".popbox .change-price").html('$<big>28</big>.99');
  $(".exbtn.soldout").attr({
    "href": 'https://www.iobit.com/buy.php?product=2019ascdb3499&ref=xr_ascdb3499' + refStr + '&refs=purchase_ascx',
    "onclick": "ga('send', 'event', 'ascdbbuysold', 'buy', 'ascdbpurchase-xmas');",
  });
}

// soldOut();

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
    $('.dg-container ul li:eq(6)').removeClass("six");
    $('.dg-container ul li').removeClass("last");

    $('.dg-container ul li:eq(0)').before(message);
    $('.dg-container ul li:eq(0)').addClass("first").addClass("on");
    $('.dg-container ul li:eq(1)').addClass("two");
    $('.dg-container ul li:eq(2)').addClass("three");
    $('.dg-container ul li:eq(3)').addClass("active");
    $('.dg-container ul li:eq(4)').addClass("four");
    $('.dg-container ul li:eq(5)').addClass("five");
    $('.dg-container ul li:eq(6)').addClass("six");

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
    $('.dg-container ul li:eq(6)').removeClass("six");

    $('.dg-container ul').find('li:first').appendTo($('.dg-container ul'));

    $('.dg-container ul li:eq(0)').addClass("first");
    $('.dg-container ul li:eq(1)').addClass("two");
    $('.dg-container ul li:eq(2)').addClass("three");
    $('.dg-container ul li:eq(3)').addClass("active");
    $('.dg-container ul li:eq(4)').addClass("four");
    $('.dg-container ul li:eq(5)').addClass("five");
    $('.dg-container ul li:eq(6)').addClass("six");

    var num = $('.dg-container ul li.active').attr("data-num");
    $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
    setTimeout('$(".review .reviews dd p").eq(' + num + ').addClass("on");', 100);
  });
}

$(window).on('scroll', function() {

  if ($(window).scrollTop() > $(".intro").offset().top - 100) {
    $(".intro .screen.asc").removeClass("bounce").addClass("bounce");
    $(".intro .screen.db").removeClass("bounce2").addClass("bounce2");
    $(".intro dl").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".centbuy").offset().top - 140) {
    $(".centbuy .cost,.centbuy .month").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".feature").offset().top - 140) {
    $(".feature .besom").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".feature .asc .imgbox").offset().top + 240) {
    $(".feature .forbid").removeClass("on").addClass("on");
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
  if (e.clientY > 6 || e.clientX > 6) {
    mask(1);
  }

  $(document).unbind('mousemove', mouseMove);
}

function mask(scroll) {
  var maskTimetwoiu = new Date();
  var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
  maskTimeiu = cGet('maskasciu_t');

  if ((scroll == 1) && (_maskTimetwoiu - maskTimeiu) < 300) {
    return false;
  } else {
    var expireTime = cGet('maskasciu_e');
    if (expireTime == null) {
      expireTime = Date.parse(new Date()) + 60 * 1000;
      cSet('maskasciu_e', expireTime);
    }
    popShow();
    cycleCountdown();
  }
}

function expireTimeCheck() {
  var expireTime = cGet('maskasciu_e');
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
    //console.log("11");
    $(".pop-bg,.popbox").remove();
  }
}

function timeInit() {
  maskTimeiu = cGet('maskasciu_t');
  if (maskTimeiu == null) {
    var maskTimeiu = new Date();
    var _maskTimeiu = Math.floor(maskTimeiu.getTime() / 1000);
    cSet('maskasciu_t', _maskTimeiu);
  }
  mouseCheck = 0;
  maskTimeCountDown();
}

function maskTimeCountDown() {
  var maskTimetwoiu = new Date();
  var _maskTimetwoiu = Math.floor(maskTimetwoiu.getTime() / 1000);
  maskTimeiu = cGet('maskasciu_t');
  if ((_maskTimetwoiu - maskTimeiu) < 300) {
    // console.log((_maskTimetwoiu - maskTimeiu));
    setTimeout('maskTimeCountDown()', 1000);
  } else {
    // console.log("bangding");
    $(document).bind('mousemove', mouseMove);
  }
}

function packsInit() {
  var cName = "endecascdbxr_p";
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
    url: "xascdb.php",
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
    var packsNumTotal = cGet('endecascdbxr_t');
    if (packsNumTotal > 1) {
      if ((packsNumTotal !== null) && (!isNaN(packsNumTotal))) {
        // console.log((600 / packsNumTotal) * 1000);
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
      url: "xascdb.php",
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
    $(".pop-bg,.popbox").removeClass("on");
  });


  setTimeout('getViewNum()', 15000);
});