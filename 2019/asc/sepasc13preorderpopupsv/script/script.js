function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .countdown .scroll-tick").html(list);
  $(".floatlayer .countdown .scroll-tick").html(list);
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".banner .countdown .scroll-tick").eq(i).animate({
      marginTop: -curNum * 35,
    }, "slow");
  }
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".floatlayer .countdown .scroll-tick").eq(i).animate({
      marginTop: -curNum * 35,
    }, "slow");
  }
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}


function numberJump() {
  $(".change-num").prop('number', 50).animateNumber({
    number: 100,
  }, 1000);
}

// soldOut();
function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  $(".price").addClass("soldout");
  $(".price strong").html("<b>299</b> kr");
  $('.banner .price strong').after("<del>599 kr</del>");
  $(".banner .number").html("Förbeställningar på 0 kr är fulla idag. Missa inte <strong>50%</strong> rabatt igen!").addClass("soldout");
  $(".floatlayer .number").html("Missa inte <strong>50%</strong> rabatt igen!").addClass("soldout");
  $(".buybtn").attr({
    "href": 'http://www.iobit.com/buy.php?product=sv-asc13preorder299&ref=sv_asc13preorderpopup299' + refStr + '&aff=' + aff + '&refs=sv_purchase_asc&tw=-8',
    "onclick": "ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup299-sv');"
  });
  $(".floatlayer img").addClass("soldout");
}

$(window).on('scroll', function() {
  $(".floatlayer").removeClass("on");
  if ($(window).scrollTop() > $(".intro").offset().top) {
    $(".message01 dl").addClass("on");
    setTimeout(function() {
      $(".intro .message01 .rightcircle").addClass("on");
      $(".intro .message01 .guide").addClass("on")

    }, 500);
    setTimeout(function() {
      $(".intro .message01 .good").addClass("on")
    }, 1000);
    setTimeout(function() {

      $(".intro .message01 .icons02,.intro .message01 .icons01").addClass("on")
    }, 1500);
  }
  if ($(window).scrollTop() > $(".title2").offset().top - 100) {
    $(".message02 .lock").addClass("on");
  }

  clearTimeout($.data(this, 'scrollTimer'));
  $.data(this, 'scrollTimer', setTimeout(function() {
    if ($(window).scrollTop() < $(".banner .buybtn").offset().top) {
      $('.floatlayer').removeClass('on');
    } else {
      $('.floatlayer').addClass('on');
    }
  }, 1000));
});
$(".dg-next").click(function(){
  $(".review .reviews dd p").removeClass("on");
  var message = $('.dg-container ul li:eq(0)');
  //$('.dg-container ul li:eq(0)').removeClass("first")
  $('.dg-container ul li').removeClass("first");
  $('.dg-container ul li:eq(0)').removeClass("two");
  $('.dg-container ul li:eq(1)').removeClass("three");
  $('.dg-container ul li:eq(2)').removeClass("active");
  $('.dg-container ul li:eq(3)').removeClass("four");
  $('.dg-container ul li:eq(4)').removeClass("five");


  $('.dg-container ul').find('li:first').appendTo($('.dg-container ul'));

  $('.dg-container ul li:eq(0)').addClass("two");
  $('.dg-container ul li:eq(1)').addClass("three");
  $('.dg-container ul li:eq(2)').addClass("active");
  $('.dg-container ul li:eq(3)').addClass("four");
  $('.dg-container ul li:eq(4)').addClass("first");
  setTimeout(function() {
    $('.dg-container ul li:eq(4)').addClass("five").removeClass("first");
  }, 100);

  var num =$('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});


$(".dg-prev").click(function(){
  var message = $('.dg-container ul li:last');
  var index = $(".dg-container ul li").length;

  //$('.dg-container ul li:eq(0)').removeClass("first")
  $('.dg-container ul li:eq(0)').removeClass("two");
  $('.dg-container ul li:eq(1)').removeClass("three");
  $('.dg-container ul li:eq(2)').removeClass("active");
  $('.dg-container ul li:eq(3)').removeClass("four");
  $('.dg-container ul li:eq(4)').removeClass("five");


  $('.dg-container ul li:eq(0)').before(message);
  //$('.dg-container ul li:eq(0)').addClass("first")


  setTimeout(function() {
    $('.dg-container ul li:eq(0)').addClass("two")
  }, 100);


  //$('.dg-container ul li:eq(0)').addClass("two")
  $('.dg-container ul li:eq(1)').addClass("three");
  $('.dg-container ul li:eq(2)').addClass("active");
  $('.dg-container ul li:eq(3)').addClass("four");
  $('.dg-container ul li:eq(4)').addClass("five");

  var num =$('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});

function packsInit() {
  var cName = "itascpup_p";
  packs = cGet(cName);
  if (packs === 0) {
    soldOut();
  } else {
    getSales();
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

function getSales(isInit) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "asc13preorderpopup.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if (isInit) {
          flipNum(sales.packsNum, 4, 1000);
        } else {
          flipNum(sales.packsNum, 4, 100);
        }
      }
      if (packs > 0) {
        setTimeout('getSales(0)', 6000);
      } else {
        if (!$(".price").hasClass("soldout")) {
          soldOut();
        }
      }
    }
  });
}

function getViewNum() {
  $.ajax({
    type: "GET",
    url: "asc13preorderpopup.php",
    data: "action=getViewNum",
    success: function(res) {
      $('.viewNum').html(res);
    }
  });
  setTimeout('getViewNum()', 15000);
}

$(function() {
  packsInit(1);
  setTimeout('getViewNum()', 15000);
});