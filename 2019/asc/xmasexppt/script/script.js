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
    $("#hlip .list").eq(a).animate({
      marginTop: -curNum * 23,
    }, "slow");

    $("#flip .list").eq(a).animate({
      marginTop: -curNum * 22,
    }, "slow");
  }
}

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$(function() {
  packsInit();

  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"), 0);

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".intro h2").offset().top - 320) {
      $(".intro dl").removeClass("on").addClass("on");
    }
  });

  //flipNum(554, 3);
});

function packsInit() {
  packs = 210;
  getSales(1);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xrasce.php",
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
  var packsNumTotal = cGet('xmasexppt2019');
  if (packsNumTotal > 1) {
    if (packs > 140) {
      reTime = (Math.random() > 0.5) ? 0.5 : 2;
    } else {
      reTime = 600 / packsNumTotal;
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