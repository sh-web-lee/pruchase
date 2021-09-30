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


function numberJump() {
  $(".change-num").prop('number', 50).animateNumber({
    number: 100,
  }, 1000);
}

function sect01() {
  var tl = new TimelineMax();
  tl.to(".bottom-circle", 1, {
      height: 114
    })
    .to(".completed", .5, {
      opacity: 1
    }, '+=.5')


}

function sect02() {
  var tl = new TimelineMax();
  tl.to(".privacy", 1, {
      opacity: 1,
      scale: 1
    }, '+=.5')
    .to(".list02 .check", 1, {
      width: 47,
      backgroundColor: '#326de8',
      onComplete: function() {
        $('.list02 .privacy').addClass('on');
      }
    })
    .to(".list02 .privacy .text", 1, {
      opacity: 1,
      bottom: 54
    })
    .to(".list02 .privacy-right", 1, {
      opacity: 1,
      scale: 1
    })

}

function sect03() {
  var tl = new TimelineMax();
  tl.to(".icon-list .icons01", 1, {
      top: 18,
      left: 3
    }, '+=.5')
    .to(".icon-list .icons02", 1, {
      top: 25,
      right: 23
    }, '-=1')
    .to(".icon-list .icons03", 1, {
      bottom: 112,
      left: -30
    }, '-=1')
    .to(".icon-list .icons04", 1, {
      bottom: -25,
      left: 167
    }, '-=1')
    .to(".icon-list .icons05", 1, {
      bottom: 17,
      right: 0
    }, '-=1')

}

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  $(".price").addClass("soldout");
  $(".price strong").html("<b>16</b>,99€");
  $('.banner .price strong').after("<del>49,99€</del>");
  $(".banner .number").html("La précommande gratuite se termine.<br> Ne manquez plus cette réduction exclusive de <strong>70%</strong>!").addClass("soldout");
  $(".floatlayer .number").html("Ne manquez plus cette réduction exclusive de <strong>70%</strong>!").addClass("soldout");
  $(".buybtn").attr({
    "href": 'https://www.iobit.com/buy.php?product=fr-asc13preorder1699&ref=fr_asc13preorderofficial1699' + refStr + '&aff=' + aff + '&refs=fr_purchase_asc&tw=-8',
    "onclick": "ga('send', 'event', 'asc1699buy', 'buy', 'asc13predorderofficial-fr');"
  });
}
// soldOut();


var c = 0;
var d = 0;
var e = 0;
$(window).on('scroll', function() {
  $(".floatlayer").removeClass("on");
  if ($(window).scrollTop() > $(".intro").offset().top && $(window).scrollTop() < $(".left-message .message:eq(2)").offset().top - 100) {
    $(".title,.change-img").addClass("on");
    $(".list01").addClass("on");
    setTimeout(function() {
      $('.scan').remove();
      c += 1;
      if (c == 1) {
        numberJump();
        sect01();
      }
    }, 2000);

  } else {
    $(".title,.change-img").removeClass("on");
  }
  if ($(window).scrollTop() > $(".left-message .message").offset().top + 150) {
    $(".list01").removeClass("show");
    //$(".list01").removeClass("on");
    $(".list02").addClass("show");
    d += 1;
    if (d == 1) {
      sect02();
    }
  } else {
    $(".list01").addClass("show");

    $(".list02").removeClass("show");
  }
  if ($(window).scrollTop() > $(".left-message .message:eq(1)").offset().top + 50) {
    $(".list02").removeClass("show");
    $(".list03").addClass("show");
    e += 1;
    if (e == 1) {
      sect03();
    }

  } else {
    //$(".nomal2").addClass("show");
    $(".list03").removeClass("show");
  }
  if ($(window).scrollTop() > $(".left-message .message:eq(2)").offset().top - 200) {
    //$(".change-img").removeClass("on");
    $(".list03").addClass("show");
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
$(function() {
  $(".change-img .list03 span").hover(function() {
    $(this).addClass("active").siblings().removeClass("active");
    $(".left-message .message ul").addClass("active");
    $(".left-message .message ul li").removeClass("on");
    var num = $(this).index();
    if (num == 0) {
      $(".left-message .message ul li:eq(2),.left-message .message ul li:eq(3),.left-message .message ul li:eq(4)").addClass("on")
    } else if (num == 1) {
      $(".left-message .message ul li:eq(8)").addClass("on")
    } else if (num == 2) {
      $(".left-message .message ul li:eq(0)").addClass("on")
    } else if (num == 3) {
      $(".left-message .message ul li:eq(7)").addClass("on")
    } else if (num == 4) {
      $(".left-message .message ul li:eq(6)").addClass("on")
    } else {
      $(".left-message .message ul li:eq(5)").addClass("on")
    }
  });
});
$(".dg-next").click(function() {
  var message = $('.dg-container ul li:eq(0)')
  $('.dg-container ul li:eq(0)').removeClass("first")
  $('.dg-container ul li:eq(1)').removeClass("two")
  $('.dg-container ul li:eq(2)').removeClass("three")
  $('.dg-container ul li:eq(3)').removeClass("active")
  $('.dg-container ul li:eq(4)').removeClass("four")
  $('.dg-container ul li:eq(5)').removeClass("five")


  $('.dg-container ul').find('li:first').appendTo($('.dg-container ul'));

  $('.dg-container ul li:eq(0)').addClass("first")
  $('.dg-container ul li:eq(1)').addClass("two")
  $('.dg-container ul li:eq(2)').addClass("three")
  $('.dg-container ul li:eq(3)').addClass("active")
  $('.dg-container ul li:eq(4)').addClass("four")
  $('.dg-container ul li:eq(5)').addClass("five")

  var num = $('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});
$(".dg-prev").click(function() {
  var message = $('.dg-container ul li:last')

  $('.dg-container ul li:eq(0)').removeClass("first")
  $('.dg-container ul li:eq(1)').removeClass("two")
  $('.dg-container ul li:eq(2)').removeClass("three")
  $('.dg-container ul li:eq(3)').removeClass("active")
  $('.dg-container ul li:eq(4)').removeClass("four")
  $('.dg-container ul li:eq(5)').removeClass("five")


  $('.dg-container ul li:eq(0)').before(message);

  $('.dg-container ul li:eq(0)').addClass("first").addClass("on")
  $('.dg-container ul li:eq(1)').addClass("two")
  $('.dg-container ul li:eq(2)').addClass("three")
  $('.dg-container ul li:eq(3)').addClass("active")
  $('.dg-container ul li:eq(4)').addClass("four")
  $('.dg-container ul li:eq(5)').addClass("five")

  var num = $('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});

function packsInit() {
  var cName = "enascpre_p";
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
    url: "asc13preorderofficial.php",
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
    url: "asc13preorderofficial.php",
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