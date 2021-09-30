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
  $(".price strong").html("<b>74</b>,90 zł")
  $(".banner h1").html(soldout_banner)
  $(".banner .numbox").remove();
  $(".floatlayer .numbox").html(soldout_float)
  $(".buybtn").attr({
    "href": 'http://www.iobit.com/buy.php?product=pl-asc14preorder74&ref=pl_asc14preorderofficialsoldout' + refStr + '&aff=' + aff + '&refs=pl_purchase_asc&tw=-8',
    "onclick": "ga('send', 'event', ' ascbuy', 'buy', 'asc14preorderofficial-soldout-pl');"
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
    url: "asc14preorderofficial.php",
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
        $(window).unload(function(){
          packs = cGet('plascoff_p');
        });
        setTimeout('getSales(0)', getReTime());
      }
    }
  });
}

function getReTime() {
  var packsNumTotal = cGet('plascoff_t');
  if (packsNumTotal > 1) {
    if ((packsNumTotal - packs) <= 30) {
      retime = (Math.random() > 0.5) ? 2 : 6
      return retime * 1000;
    } else {
      if(packsNumTotal <= 78 && packsNumTotal >= 71){
        retime = (Math.random() > 0.5) ? 5.5 : 7.5;
      }else{
        retime = (Math.random() > 0.5) ? 7 : 9;
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
    url: "asc14preorderofficial.php",
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
    if ( $(window).scrollTop() > $(".feature03").offset().top-500) {
      $(".feature03 .animation").addClass('on');
      $(".feature03 .light").addClass('on');
      c+=1;
      if(c==1) {
      setTimeout(function () {
        $(".feature03 .list01 .line").animate({height:'59px'},200);
        $(".feature03 .list02 .line").animate({height:'48px'},200);
        $(".feature03 .list03 .line").animate({height:'43px'},200);
      },500);
      setTimeout(function () {
        $(".feature03 .list01 .line").animate({width:'125px'},300);
        $(".feature03 .list02 .line").animate({width:'101px'},300);
        $(".feature03 .list03 .line").animate({width:'50px'},300);
      },700);
      setTimeout(function () {
        $(".feature03 .safe").addClass('on');
        $(".feature03 img").addClass('on');
      },1100);
    }
      
    } 

});