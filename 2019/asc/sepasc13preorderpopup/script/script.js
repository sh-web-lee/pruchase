
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

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  $(".price").addClass("soldout")
  $(".price strong").html("$<b>16</b>.77")
  $('.banner .price strong').after("<del>$49.99</del>");
  $(".banner .number").html("$0 preorder reservations are full today. Don't miss out <strong>65%</strong> discount again!").addClass("soldout")
  $(".floatlayer .number").html("Don't miss out <strong>65%</strong> discount again!").addClass("soldout")
  $(".buybtn").attr({
    "href": 'https://www.iobit.com/buy.php?product=asc13preorder1677&ref=asc13preorderpopup1677'+refStr+'&aff=' + aff + '&refs=purchase_asc&tw=-8',
    "onclick": "ga('send', 'event', 'asc1677buy', 'buy', 'asc13predorderpopup');"
  });
}
$(window).on('scroll', function() {
  $(".floatlayer").removeClass("on");
  if($(window).scrollTop() > $(".intro").offset().top ){ 
      $(".message01 dl").addClass("on");
      setTimeout(function() {
          $(".intro .message01 .rightcircle").addClass("on")
          $(".intro .message01 .guide").addClass("on")
          
     }, 500);
    setTimeout(function() {
          $(".intro .message01 .good").addClass("on")
     }, 1000);
     setTimeout(function() {
          
          $(".intro .message01 .icons02,.intro .message01 .icons01").addClass("on")
     }, 1500);
    }
    if($(window).scrollTop() > $(".title2").offset().top -100 ){ 
      $(".message02 .lock").addClass("on");
    }
    if($(window).scrollTop() > $(".title3").offset().top -100 ){ 
      $(".message03 .trigon").addClass("on");
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

  var num =$('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});
$(".dg-prev").click(function(){ 
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

  var num =$('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});

function packsInit() {
    var cName="enascpup_p";
    packs=cGet(cName);
    if(packs===0){
        soldOut();
    }else{
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
            }else{
                if(!$(".price").hasClass("soldout")){
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