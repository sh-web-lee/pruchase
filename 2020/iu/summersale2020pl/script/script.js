$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

//PrefixInteger
function PrefixInteger(number, length) {
  return (Array(length).join('0') + number).slice(-length);
}

//flipNum
function flipNum(number, length) {
  var num = PrefixInteger(number, length);
  var len = String(num).length;
  var str = num.toString();
  var list = "";
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var i = 0; i < arr.length; i++) {
    list += "<span>" + arr[i] + "</span>";
  }
  $(".banner .numbox>div").html(list);
  $(".gifts .numbox>div").html(list);
  $(".bottombuy .numbox>div").html(list);
  $(".floatlayer .numbox>div").html(list);
  for (var j = 0; j <= len; j++) {
    var curNum = str.substring(j, j + 1);
    $(".banner .numbox>div").eq(j).animate({
      marginTop: -curNum * 18
    }, 'slow');
    $(".gifts .numbox>div").eq(j).animate({
      marginTop: -curNum * 18
    }, 'slow');
    $(".bottombuy .numbox>div").eq(j).animate({
      marginTop: -curNum * 18
    }, 'slow');
    $(".floatlayer .numbox>div").eq(j).animate({
      marginTop: -curNum * 18
    }, 'slow');
  }
}

//select
function select(selector) {
  var _index = selector.index();
  var _href = selector.attr("data-url");
  var _ga = selector.attr("data-ga");
  var _price = selector.attr("data-price");
  var _del = selector.attr("data-del");
  if (_index == 0) {
    $(".bottombuy .box .off").removeClass("off1").addClass("off0");
  } else if (_index == 1) {
    $(".bottombuy .box .off").removeClass("off0 off1");
    $(".bottombuy .box .off big").text("-80");
  } else if (_index == 2) {
    $(".bottombuy .box .off").removeClass("off0").addClass("off1");
    $(".bottombuy .box .off big").text("-50");
  }
  selector.addClass("active").siblings().removeClass("active");
  $(".bottombuy .box .iu").attr("class", "iu iu" + _index);
  $(".bottombuy .box .bundle").attr("class", "bundle bundle" + _index);
  $(".bottombuy dl .price").html("<strong><big>" + _price + "</big>,90zł</strong> <del>" + _del + "</del>");
  $(".bottombuy dl .buybtn").attr({
    "href": _href,
    "onclick": _ga
  });
}

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

function getNum() {
  data = new Date();
  var name = 'summersale' + data.getDate();
  num = cGet(name);
  if (num == null) {
    num = 153;
  } else if (num > 47) {
    num--;
  }
  flipNum(num, 3);
  cSet(name, num);
  setTimeout('getNum()', 3000)
}

function getuserNum() {
  $.ajax({
    type: "GET",
    url: "summersale2020.php",
    data: "action=getuserNum",
    success: function(res) {
      var sales = JSON.parse(res);
      $('.people b').text(sales.userNum);
    }
  });
  setTimeout('getuserNum()', 8000);
}

$(function() {
  // flipNum(999, 3);
  // setTimeout('flipNum(156, 3)', 1000);
  // setTimeout('flipNum(155, 3)', 2000);
  // setTimeout('flipNum(154, 3)', 3000);
  // setTimeout('flipNum(153, 3)', 4000);
  getNum();
  getuserNum();
  //banner
  $(".banner .offer").addClass("on");
  //feature
  $(window).scrollWindow($(".intro .container"), $('.feature .message01'), ("on"));
  $(window).scrollWindow($(".feature"), $('.feature .message02'), ("on"));
  $(window).scrollWindow($(".feature .message01"), $('.feature .message03'), ("on"));
  $(window).scrollWindow($(".feature .message02"), $('.feature .message04'), ("on"));
  //review
  $(".review ul li").hover(function() {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review .interview>p").eq(index).addClass("on").siblings().removeClass("on");
  });
  //bottombuy
  $(".bottombuy ul li").click(function() {
    select($(this));
  });

  $(".floatlayer .close").click(function() {
    $(".floatlayer").remove();
  });
  //floatlayer
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $(".floatlayer").addClass("on");
    } else {
      $(".floatlayer").removeClass("on");
    }
  })
});