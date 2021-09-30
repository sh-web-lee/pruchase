//goTarget
function goTarget(target, yoffset) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}

$(window).on('scroll', function() {
  if ($(window).scrollTop() > 500) {
    $('.floatlayer').addClass('on');
  } else {
    $('.floatlayer').removeClass('on');
  }
  
});

$(".floatlayer ul li").click(function() {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    if(index==1) {
      $(".floatlayer .img-box").addClass("db")
      $(".floatlayer .price dt").html("<strong>$<b>9</b>.99</strong> <del>$32.99</del>")
    }
    else {
      $(".floatlayer .img-box").removeClass("db")
      $(".floatlayer .price dt").html("<strong>$<b>19</b>.95</strong> <del>$74.85</del>")
    }
    $(".floatlayer .buybtn").attr({
      "href": $(".banner .soldout-content .box").eq(index).find(".buybtn").attr("href"),
      "onclick": $(".banner .soldout-content .box").eq(index).find(".buybtn").attr("onclick")
    });
});
$('.review .next').click(function(event) {
  $('.review .roll').stop(true, true).animate({marginLeft: -715}, 'slow',function(){
    $('.review .roll').css('marginLeft', '0');
    $('.review .roll').find('dl:first').appendTo($('.review .roll'));
  });
});
$('.review .prev').click(function(event) {
  $('.review .roll').find('dl:last').prependTo($('.review .roll'));
  $('.review .roll').css('marginLeft', -715);
  $('.review .roll').stop(true, true).animate({marginLeft: 0}, 'slow');
});
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
      marginTop: -curNum * 20,
    });
    $("#botNum .numlist").eq(a).animate({
      marginTop: -curNum * 47,
    });
  }
}
function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  $(".banner .default,.floatlayer .default").remove();
  $(".banner .soldout-content,.floatlayer .soldout").removeClass("hide")
  $(".compare tfoot .itemc").addClass("soldout");
  $(".compare tfoot .itema .border-buybtn").attr({
    "href": $(".banner .soldout-content .box:eq(0) .buybtn").attr("href"),
    "onclick": $(".banner .soldout-content .box:eq(0) .buybtn").attr("onclick")
  });
  $(".compare tfoot .itemb .border-buybtn").attr({
    "href": $(".banner .soldout-content .box:eq(1) .buybtn").attr("href"),
    "onclick": $(".banner .soldout-content .box:eq(1) .buybtn").attr("onclick")
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
    url: "xtwob.php?pop=br_dbisu",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        
        if(isInit){
          flipNum(sales.packsNum, 3, 1000);
          $(".buyNum").html(packs)
          if(packs>10){
            $(".banner .gift strong,.banner .gift b").html(packs)
          }
          else {
            $(".banner .gift strong,.banner .gift b").html('0'+packs)
          }
         
          $(".banner .gift b").addClass("on")
          setTimeout(function(){
            $(".banner .gift b").removeClass("on")
          }, 1000);
        }else{
          flipNum(sales.packsNum, 3, 500);
          $(".buyNum").html(packs)
          if(packs>10){
            $(".banner .gift strong,.banner .gift b").html(packs)
          }
          else {
            $(".banner .gift strong,.banner .gift b").html('0'+packs)
          }
          $(".banner .gift b").addClass("on")
          setTimeout(function(){
            $(".banner .gift b").removeClass("on")
          }, 1500);
        }
        if ((packs <= 0) && (!$(".banner,.floatlayer").hasClass('sold'))) {
          soldOut();
        }
      }
      if(packs>0){
        $(window).unload(function(){
          packs = cGet('enbtwobdbisu_p');
        });
        setTimeout('getSales(0)', getReTime());
      }
    }
  });
}

function getReTime() {
  var packsNumTotal = cGet('enbtwobdbisu_t');
  if (packsNumTotal > 1) {
    if ((packsNumTotal - packs) <= 80) {
      retime = (Math.random() > 0.5) ? 6.5 : 8.5
      return retime * 1000;
    } else {
      if(packsNumTotal <= 115 && packsNumTotal >= 105){
        retime = (Math.random() > 0.5) ? 14 : 18;
      }else{
        retime = (Math.random() > 0.5) ? 10 : 14;
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
    url: "xtwob.php?pop=br_dbisu",
    data: "action=getViewNum",
    success: function(res) {
      $('.viewNum').html(res);
    }
  });
  setTimeout('getViewNum()', 12000);
}

$(function() {
  packsInit(1);
  setTimeout('getViewNum()', 12000);
});