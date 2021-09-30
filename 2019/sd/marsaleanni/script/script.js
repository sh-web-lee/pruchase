$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

var tw = MApp(2.2).datetime.getTimeZone();
$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};


function soldNow() {
  var html = "";
  for (var i = 0; i < offerMessage.soldNow.length; i++) {
    html += "<li>" +
      "<h4 class='clearfix'>" +
      "<strong>" + offerMessage.soldNow[i].name + "</strong>" +
      "<span>" + offerMessage.soldNow[i].price + " <del>" + offerMessage.soldNow[i].del + "</del></span></h4>" +
      "<p>" + offerMessage.soldNow[i].type + "<span>" + offerMessage.soldNow[i].off + "</span></p>" +
      "</li>"
  }
  $("ul.offerMessage").html(html);
}

function soldOut() {
  //banner
  $(".banner .offer .middle").append("<div class='mask'></div>").addClass("soldout");
  $(".banner .offer .right").addClass("soldout");
  $("ul.offerMessage").html("<li>" +
    "<h4 class='clearfix'><strong>" + offerMessage.soldOut[0].name + "</strong><span>" + offerMessage.soldOut[0].price + "</span></h4>" +
    "<p>" + offerMessage.soldOut[0].type + "</p>" +
    "</li>" +
    "<li>" +
    "<h4 class='clearfix'><strong>" + offerMessage.soldOut[0].off + "</strong><span>" + offerMessage.soldOut[0].save + "</span></h4>" +
    "</li>");
  $(".buybtn").attr({
    "href": soldout._bannerhref,
    "onclick": soldout._bannerga
  });
  //gift
  $(".gift").append("<div class='mask'></div>").addClass("soldout");
  //float
  $(".float ").hide();
}


$(function() {
  packsInit();
  soldNow();
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".choose").offset().top) {
      $('.feature dl').addClass("on");
    }
  });
  $(window).scrollWindow($(".banner .buybtn"), $('.float'), ("on"));
  $(".users li").userMouseover($(".content dl"));
});

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$(".banner .offer .right").hasClass('soldout')) {
      soldOut();
    }
  }
  return statusNow;
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < countTime) {
    return 1;
  } else {
    return 2;
  }
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

(function($) {
  $.getUrlParam = function(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]);
    return '';
  }
})(jQuery);

function flipNum(num, length) {
  $(".packsNum").html(num);
  $(".packbox .list b").text("");
  var num = PrefixInteger(num, length);
  var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
  var list = '';
  var len = String(num).length;
  var str = num.toString();
  var box = $(".packbox");
  for (var j = 0; j < arr.length; j++) {
    list += '<strong>' + arr[j] + '</strong>';
  }
  $(".countdown1 .scroll-tick").html(list);
  $(".countdown2 .scroll-tick").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".countdown1 .scroll-tick").eq(a).animate({
      marginTop: -(9 - curNum) * 20,
    }, "slow");
    $(".countdown2 .scroll-tick").eq(a).animate({
      marginTop: -(9 - curNum) * 19,
    }, "slow");
  }
}

function focus(reduce) {
  $(".number").append("<span class='reduce'>-" + reduce + "</span>");
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
  packs = cGet('ensdanni');
  if (packs == null) {
    packs = 78;
  }
  if (packs == 0) {
    soldOut();
  } else {
    setTimeout('getPacksNum()', 5000);
  }
  flipNum(packs, 3);
}

function getPacksNum() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "anniversary.php",
    data: "action=getPacks&d=" + date.getDate() + "&r=" + Math.random(),
    success: function(res) {
      res = JSON.parse(res);
      var sPacks = res.packsNum;
      var viewNum = res.viewNum;

      if (packs != sPacks) {
        flipNum(sPacks, 3);
        var reNum = packs - sPacks;
        focus(reNum);
        packs = sPacks;

        if ((packs == 0) && (!$(".banner .offer .right").hasClass('soldout'))) {
          soldOut();
        }
        if (sPacks % 3 == 0) {
          $('.viewNum').html(viewNum);
        }
      }
    }
  });
  if (packs > 0) {
    setTimeout('getPacksNum()', 5000);
  }
}