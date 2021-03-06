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
  var _box = $(".reduceNum");
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
    $("#reduce .list").eq(a).animate({
      marginTop: -curNum * 31,
    }, "slow");
    $("#fReduce .list").eq(a).animate({
      marginTop: -curNum * 34,
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

function dissolve(num) {
  $('.disappear').attr('class', 'disappear');
  $('.disappear').addClass("disappear" + num);
  $(".banner .disappear").css({
    "opacity": 0,
    "top": 244
  }).animate({
    "opacity": 1
  }, 500).animate({
    "top": 200,
    "opacity": 0
  }, 500);
  $(".banner .ghost").css({
    "opacity": 0,
    "top": 164
  }).animate({
    "opacity": 1
  }, 500).animate({
    "top": 100,
    "opacity": 0
  }, 500);
  $(".floatlayer .disappear").css({
    "opacity": 0,
    "top": 53
  }).animate({
    "opacity": 1
  }, 500).animate({
    "top": 3,
    "opacity": 0
  }, 500);
  $(".floatlayer .ghost").css({
    "opacity": 0,
    "top": 0
  }).animate({
    "opacity": 1
  }, 500).animate({
    "top": -50,
    "opacity": 0
  }, 500);
}

$(function() {
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"), $('.intro .message dl,.intro .message .img-box'), ("on"));
  $(window).scrollWindow($(".intro .message .last"), $('.intro .message2 dl'), ("on"));
  $(window).scrollWindow($(".intro .message2 span"), $('.intro2 ul'), ("on"));
  // review
  // review
  var sWidth = $(".review .relist").width();
  var len = $(".review .box dl").length;
  var index = 0;
  var picTimer;

  $(".review .prev,.review .next").css("opacity", 0.6).hover(function() {
    $(this).stop(true, false).animate({
      "opacity": "1"
    }, 300);
  }, function() {
    $(this).stop(true, false).animate({
      "opacity": "0.6"
    }, 300);
  });

  $(".review .prev").click(function() {
    index -= 1;
    if (index == -1) {
      index = len - 1;
    }
    showPics(index);
  });

  $(".review .next").click(function() {
    index += 1;
    if (index == len) {
      index = 0;
    }
    showPics(index);
  });
  $(".review .relist").css("width", sWidth * (len));

  function showPics(index) {
    var nowLeft = -index * sWidth;
    $(".review .relist").stop(true, false).css({
      "left": nowLeft
    });
    $(".review .box dl").removeClass("on").eq(index).addClass("on");
  }
});
(function($) {
  $.getUrlParam = function(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]);
    return '';
  }
})(jQuery);

function soldout() {
  var aff = $.getUrlParam('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.gift-message,.floatlayer").addClass("soldout");
  $(".floatlayer .number").html("Vollst??ndige Deinstallation und gr??ndliche Reinigung");
  $(".banner .price del").html("39,35???");
  $(".floatlayer .message p,.disappear,.ghost").remove();
  $(".banner .right .message").html("<h2>Auf IObit Uninstaller 9 PRO upgraden</h2>");
  $(".floatlayer .buybtn").html("Jetzt aktivieren");
  $(".floatlayer .price").append("<p>1 Jahresabo / 3 PCs</p><p class='money'><strong><b>16</b></strong><span><del>39,95???</del><cite>,99???</cite></span></p>");
  $(".buybtn").attr("href", "https://www.iobit.com/buy.php?product=de-iu113pc1699&ref=de_iu113pc1699launch" + refStr + "&aff=" + aff + "&refs=de_purchase_iu&tw=" + tw);
  $(".buybtn").attr("onclick", "ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-newlaunch-de');");
}
// soldout();

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function packsInit() {
  packs = 99;
  getSales(1);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "newlaunch.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        flipNum(sales.packsNum, 2);
        packs = sales.packsNum;
        dissolve(1);
        if ((packs <= 0) && (!$(".banner,.gift-message,.floatlayer").hasClass('soldout'))) {
          soldout();
        }
      }
      if (packs > 0) {
        setTimeout('getSales(0)', getReTime());
      }
    }
  });
}

function getReTime() {
  var packsNumTotal = cGet('deiulaun_t');
  if (packsNumTotal > 1) {
    return (1200 / packsNumTotal) * 1000;
  } else {
    return 20000;
  }
}

function getViewNum() {
  if (packs > 0) {
    $.ajax({
      type: "GET",
      url: "newlaunch.php",
      data: "action=getViewNum",
      success: function(res) {
        $('.viewNum').html(res);
      }
    });
    setTimeout('getViewNum()', 12000);
  }
}

$(function() {
  packsInit();
  setTimeout('getViewNum()', 12000);
});