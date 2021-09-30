function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".listbox").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var _list = '';
  var len = String(number).length;
  var str = number.toString();
  var _box = $(".flipNum");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<div class="listbox"><div class="list"></div></div>'));
    } else {
      createobj = $('<div class="listbox"><div class="list"></div></div>');
    }
    _box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    _list += '<b>' + arr[j] + '</b>';
  }
  $(".list").append(_list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#flip .list").eq(a).animate({
      marginTop: -curNum * 23,
    }, "slow");
  }
}

$(function() {
  packsInit();
  $(".footbuy li").on("click", function() {
    var index = $(this).index();
    var num = $(this).attr("data-num");
    var _origain = $(".banner .offer").eq(num).find(".discount del").text();
    var _discount = $(".banner .offer").eq(num).find(".discount span").text();
    var _href = $(".banner .offer").eq(num).find(".buybtn").attr("href");
    $(this).addClass("active").siblings().removeClass("active");
    $(".footbuy .imfbox").find("img").eq(index).addClass("on").siblings().removeClass("on");
    $(".footbuy .price").find("strong > span").text(_discount);
    $(".footbuy .price").find("del > span").text(_origain);
    $(".footbuy .price").find(".buybtn").attr({
      "href": _href,
    });
  });

  //flipNum(554, 3);
});

function packsInit() {
  packs = 229;
  getSales(1);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "ptnatalprom.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        //$(".pickNum").html(packs);
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
  var packsNumTotal = cGet('xmasindexptdb');
  if (packsNumTotal > 1) {
    if (packs > 165) {
      reTime = (Math.random() > 0.5) ? 0.5 : 2;
    } else {
      reTime = 700 / packsNumTotal;
    }
  }
  return reTime * 1000;
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


