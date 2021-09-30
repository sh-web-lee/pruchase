function packNum(number, starnumber) {
  $('.buyNum').prop('number', starnumber).animateNumber({
    number: number
  }, 1500);
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length, _time) {
  $(".nwrap .numlist").html('');
  $(".nwrap em").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".barbox").css('width',num*1.5)
  $(".nwrap .numlist").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#topNum .nwrap").eq(a).append('<em>' + curNum + '</em>');
    $("#botNum .nwrap").eq(a).append('<em>' + curNum + '</em>');

    $("#topNum .numlist").eq(a).animate({
      marginTop: -curNum * 49,
    });
    $("#botNum .numlist").eq(a).animate({
      marginTop: -curNum * 49,
    });
  }
}


function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  $(".banner,.floatlayer").addClass("soldout")
  $(".price strong").html("€<b>19</b>,99")
  $(".banner h1").html(soldout_banner)
  $(".banner .numbox").remove();
  $(".floatlayer .numbox").html(soldout_float)
  $(".buybtn").attr({
    "href": 'https://www.iobit.com/buy.php?product=nl-asc14preorder1999&ref=nl_asc14preorderrc1999'+refStr+'&aff=' + aff + '&refs=nl_purchase_asc&tw=-8',
    "onclick": "ga('send', 'event', 'ascbuy', 'buy', 'asc14preorderrcsoldout-nl');"
  });
}


function cSet(name,value) {
  var Days=2;
  var exp = new Date();
  name=name+exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var exp = new Date();
  name=name+exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function packsInit() {
  packs=99;
  getSales(1);
}
function numberJump(obj, num, time) {
  var num2 = $(obj).text();
  $(obj).prop('number', num).animateNumber({
    number: num2,
  }, time);
}
function getSales(isInit) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "asc14preorder.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if(isInit){
          flipNum(sales.packsNum, 3, 1000);
        }else{
          flipNum(sales.packsNum, 3, 500);
        }
        if ((packs <= 0) && (!$(".banner,.floatlayer").hasClass('sold'))) {
          soldOut();
        }
      }
      if(packs>0){
        setTimeout('getSales(0)', getReTime());
      }
    }
  });
}

function getReTime() {
  var packsNumTotal = cGet('nlascrc_t');
  if (packsNumTotal > 1) {
    if ((packsNumTotal - packs) <= 30) {
      retime = (Math.random() > 0.5) ? 2 : 6
      return retime * 1000;
    } else {
      if(packsNumTotal <= 78 && packsNumTotal >= 71){
        retime = (Math.random() > 0.5) ? 7.5 : 9.5;
      }else{
        retime = (Math.random() > 0.5) ? 9 : 11;
      }
      return retime * 1000;
    }
  } else {
    return 20000;
  }
}

function getViewNum() {
  $.ajax({
    type: "GET",
    url: "asc14preorderpopup.php",
    data: "action=getViewNum",
    success: function(res) {
      $('.buyNum').html(res);
    }
  });
  setTimeout('getViewNum()', 12000);
}

$(function() {
  packsInit(1);
  setTimeout('getViewNum()', 12000);
  $(".review  .change span").click(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review ul li").eq(num).addClass("active").siblings().removeClass("active");
    $(".review .content dl").eq(num).addClass("active").siblings().removeClass("active");
  });
});
var c =0;
$(window).on('scroll', function() {
    if ( $(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $('.floatlayer').addClass('on');
      $('.feature-box .ai').addClass('on');
    } else {
      $('.floatlayer').removeClass('on');
    }
    $("[data-name^='animation']").each(function(i){
      if($(document).scrollTop()  > $(this).offset().top -500 ){
        $(this).find(".animation").addClass('on');
      }
    });
});