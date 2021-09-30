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

     setTimeout(function() {
        $('.dg-container ul li:eq(0)').addClass("first");
    }, 100);
    //$('.dg-container ul li:eq(0)').addClass("first")
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
$(function () {
  packsInit();
  prev();
  next();
  setTimeout('getViewNum()', 15000);
});

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
  packs = 99;
  getSales(1);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xiuasc.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        // $(".pickNum").html(packs);
        flipNum(packs, 3);
      }
      if (packs > 0) {
        setTimeout('getSales()', getReTime());
      }
    }
  });
}

function getReTime() {
  var reTime = 20;
  var packsNumTotal = cGet('nlxasciu_t');
  if (packsNumTotal > 1) {
    if (packs > 32) {
      reTime = (Math.random() > 0.5) ? 0.5 : 2;
    } else {
      reTime = 200 / packsNumTotal;
    }
  }
  return reTime * 1000;
}