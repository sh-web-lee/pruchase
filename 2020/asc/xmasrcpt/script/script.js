$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

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


function getViewNum() {
  $.ajax({
    type: "GET",
    url: "xascdb.php",
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
    url: "promnatalpt.php",
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
  var packsNumTotal = cGet('nlxascdb_t');
  if (packsNumTotal > 1) {
    if (packs > 32) {
      reTime = (Math.random() > 0.5) ? 0.5 : 2;
    } else {
      reTime = 200 / packsNumTotal;
    }
  }
  return reTime * 1000;
}


$(function () {
  //feature
  $(window).scrollWindow($(".banner .buybtn"),$('.feature .machine img'),("on"));
  packsInit();
  setTimeout('getViewNum()', 15000);
  //bottombuy
  $(".bottombuy ul li").click(function () {
    var index = $(this).index();
    var url = $(this).attr("data-url");
    var ga = $(this).attr("data-ga");
    var price = $(this).attr("data-price");
    var original = $(this).attr("data-original");
    $(this).addClass("active").siblings().removeClass("active");
    if(index>0) $('.bottombuy .box').addClass('ac')
    if(index===0) $('.bottombuy .box').removeClass('ac')
    $(".bottombuy .box img").stop().animate({"marginLeft": -368*index}, 300);
    $(".bottombuy dl dd .price strong").text(price);
    $(".bottombuy dl dd .price del").text(original);
    $(".bottombuy dl dd .buybtn").attr({"href": url, "onclick": ga});
  });
});