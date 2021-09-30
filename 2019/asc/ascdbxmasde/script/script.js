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

function packsInit() {
  var cName = "ascdbxmasde_p";
  packs = cGet(cName);
  if (packs === 5) {} else {
    if (packs == null) {
      getSales(2);
    } else {
      getSales(1);
    }
  }
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


function getSales(isInit) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xascdb.php",
    data: "action=getPacks&d=" + date.getDate() + "&packsNum=" + packsNum,
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
      if (packs > 3) {
        setTimeout('getSales(0)', 5300);
      } else {
        flipNum(3, 3);
      }
    }
  });
}

function getRetime(isInit) {
  if (isInit == 2) {
    return 1000;
  } else {
    var packsNumTotal = cGet('ascdbxmasde_t');
    if (packsNumTotal > 1) {
      return (900 / packsNumTotal) * 1000;
    } else {
      return 20000;
    }
  }
}

function getViewNum() {
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

$(function() {
  prev();
  next();

  packsInit(1);

  setTimeout('getViewNum()', 15000);
});