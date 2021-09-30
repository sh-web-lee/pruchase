function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

var comma_separator_number_step = $.animateNumber.numberStepFactories.separator('.');

function animateNumber(select, number) {
  $(select).prop('number',  10).animateNumber({      
    number: number,
    numberStep:  comma_separator_number_step
  }, 2000);
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

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  $(".price").addClass("soldout");
  $(".banner .sold").remove();
  $(".price strong").html("€<b>19</b>,99");
  $('.banner .price strong').after("<del>€49,99</del>");
  $(".banner .number").html("Helaas is de €14,99 deal uitverkocht. Pak toch nog <strong>60%</strong> korting!").addClass("soldout");
  $(".floatlayer .number").html("Pak toch nog <strong>60%</strong> korting!").addClass("soldout");
  $(".buybtn").attr({
    "href": 'https://www.iobit.com/buy.php?product=nl-asc13preorder1999&ref=nl_asc13preorderexpired1999'+refStr+'&aff=' + aff + '&refs=nl_purchase_asc&tw=-8',
    "onclick": "ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpiredsoldout-nl');"
  });
}
// soldOut();

var c = 0;
var d = 0;
var e = 0;
$(window).on('scroll', function() {
  $(".floatlayer").removeClass("on");
  if ($(window).scrollTop() > $(".intro").offset().top - 100) {
    $(".intro .besom").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".enjoy .arrow").offset().top - 140) {
    $(".enjoy .forbid").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".feature h2").offset().top - 280) {
    $(".feature dl").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".feature dl").offset().top) {
    animateNumber('.present h4.first', 30000000);
    animateNumber('.present h4.two', 2666667);
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
  setTimeout('$(".review .reviews dd p").eq(' + num + ').addClass("on");', 100);
});


$(".dg-prev").click(function(){
  var message = $('.dg-container ul li:last');
  $(".review .reviews dd p").removeClass("on");
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
  setTimeout('$(".review .reviews dd p").eq(' + num + ').addClass("on");', 100);
});

function packsInit() {
  var cName = "enascexd_p";
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
    url: "asc13preorderexpired.php",
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
    url: "asc13preorderexpired.php",
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