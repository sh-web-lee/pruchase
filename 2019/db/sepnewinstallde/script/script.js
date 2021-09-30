$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};
$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();
  for (var j = 0; j < arr.length; j++) {
    list += '<strong>' + arr[j] + '</strong>';
  }
  $(".banner .numlist").html(list);
  $(".float .numlist").html(list);
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".banner .numlist").eq(i).animate({
      marginTop: -curNum * 23,
    }, 500);
    $(".float .numlist").eq(i).animate({
      marginTop: -curNum * 18,
    }, 500);
  }
}

$(function () {
  // feature
  $(window).scrollWindow($(".banner .buybtn"),$('.feature-db'),("on"));
  $(window).scrollWindow($(".feature-db dl"),$('.feature-chart'),("on"));
  //review
  $(".users li").userMouseover($(".content dl"));
  //float
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $(".float").addClass("on");
    }else {
      $(".float").removeClass("on");
    }
  });
});

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
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

function getSales(isInit) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "newinstall.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if (isInit) {
          flipNum(sales.packsNum, 3, 1000);
        } else {
          flipNum(sales.packsNum, 3, 100);
        }
      }
      if (packs > 0) {
        setTimeout('getSales(0)', getReTime());
      }
    }
  });
}

function getReTime() {
  var packsNumTotal = cGet('dedbnew_t');
  if (packsNumTotal > 1) {
    if(packs<=3){
      return 200000;
    }
    if ((packsNumTotal - packs) <= 20) {
      return 1000 + (packsNumTotal - packs) * 500;
    } else {
      return (1080 / packsNumTotal) * 1000;
    }
  } else {
    return 20000;
  }
}

$(function() {
  packsInit(1);
});