function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

(function($) {
  $.getUrlParam = function(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]);
    return '';
  };
})(jQuery);

function flipNum(num, length, length2) {
  $(".packsNum").html((num < 10) ? ('0' + num) : num);
  $(".packbox .list b").text("");
  var num = PrefixInteger(num, length);
  var num2 = PrefixInteger(num, length2);
  var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
  var list = '';
  var len = String(num).length;
  var len2 = String(num2).length;
  var str = num.toString();
  var str2 = num2.toString();
  var box = $(".packbox");
  for (var j = 0; j < arr.length; j++) {
    list += '<strong>' + arr[j] + '</strong>';
  }
  $(".countdown1 .scroll-tick").html(list);
  $(".countdown2 .scroll-tick").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".countdown1 .scroll-tick").eq(a).animate({
      marginTop: -(9 - curNum) * 18,
    }, "slow");
  }
  for (var b = 0; b <= len2; b++) {
    var curNum = str2.substring(b, b + 1);
    $(".countdown2 .scroll-tick").eq(b).animate({
      marginTop: -(9 - curNum) * 49,
    }, "slow");
  }
}

function focus() {
  $(".banner .large-message .left").append("<span class='shadow'></span>");
  $(".banner .large-message .left .number").append("<span class='reduce'></span>");
  $(".float .wrapper").append("<span class='shadow'></span>");
  $(".float .middle p").append("<span class='reduce'></span>");
}

function soldOut() {
  var tw = MApp(2.2).datetime.getTimeZone();
  var aff = $.getUrlParam('aff');
  var buylink3pcs = {
    "href": "https://www.iobit.com/buy.php?product=imf83pc1995&ref=en-imf3pcsoldoutlaunch" + refStr + "&aff=" + aff + "&refs=purchase_imf&tw=" + tw,
    "ga": "ga('send', 'event', 'imf3pcsoldbuy', 'buy', 'imfpurchase-launch');"
  };
  var buylink1pc = {
    "href": "https://www.iobit.com/buy.php?product=imf81pc1477&ref=en-imf1pcsoldoutlaunch" + refStr + "&aff=" + aff + "&refs=purchase_imf&tw=" + tw,
    "ga": "ga('send', 'event', 'imf1pcsoldbuy', 'buy', 'imfpurchase-launch');"
  };
  $(".buybtn.imf3pcs").attr({
    "href": buylink3pcs.href,
    "onclick": buylink3pcs.ga
  });
  $(".buybtn.imf1pc").attr({
    "href": buylink1pc.href,
    "onclick": buylink1pc.ga
  });
  //banner large-message
  $(".large-message").addClass("soldout");
  setTimeout(function() {
    $(".banner .large-message .left .box").attr("src", imgUrl[1]);
    $(".banner .large-message .right .list").html("" +
      "<h3>Valuable Launch Pack Sold Out</h3>" +
      "<h4>But IObit Malware Fighter 8 PRO Family Plan on Sale Now!</h4>" +
      "<h5>Hurry up, seize your another chance</h5>");
    $(".banner .large-message .right .price").html("only <strong>$19.95</strong> <del>$54.95</del>");
    $(".large-message").addClass("changed");
  }, 400);
  //banner small-message
  $(".banner .small-message dl.change img").attr("src", imgUrl[0]);
  $(".banner .small-message dl.change .price del").text("$94.93");
  $(".banner .small-message dl.change").addClass("soldout").append("<span></span>").unbind("mouseover");
  //gifts
  $(".gifts").slideUp(500);
  //comparison
  $(".comparison tfoot tr th.itemc").append("<span></span>");
  //float
  $(".float").addClass("soldout");
  $(".float .box").attr("src", imgUrl[2]);
  $(".float .middle").html("<p>Oops, launch packs are sold out.</p><p><strong>Don't miss out 65% OFF on family plan!</strong></p>");
  $(".float .sale").html("$<strong>19.</strong>95 <del>$54.95</del>");
  $(".float .buybtn").text("Activate Now");
}

//var number = 10;
//var packsDown = setInterval(function () {
//  if(number > 0){
//    number--;
//    flipNum(number, 2, 4);
//    focus();
//  }else {
//    clearInterval(packsDown);
//    soldOut();
//  }
//},3000);

function fHide() {
  $(".feature").removeClass("_hide").addClass("_hide");
  $(".featurebox").removeClass("_hide");
}

$(function() {
  var ref = $.getUrlParam('ref');
  if ((ref == 'launchnews2') || (ref == 'launchbox2')) {
    fHide();
  }
  packsGet();
  //active
  $(".banner .small-message dl").mouseover(function() {
    $(".banner .large-message").removeClass("active");
    $(this).addClass("active").siblings().removeClass("active");
  }).mouseleave(function() {
    $(".banner .large-message").addClass("active");
    $(this).removeClass("active").siblings().removeClass("active");
  });
  //feature
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $('.feature dl').addClass("on");
      $('.float').addClass("on");
    } else {
      $('.float').removeClass("on");
    }
    if ($(window).scrollTop() > $(".payments").offset().top) {
      $('.featurebox dl').addClass("on");
    }
  });
  // review
  $('.review .handle li').hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
  });
  //payments
  $(".payments p a").hover(function() {
    $(".payments p span").fadeIn(300);
  }).mouseleave(function() {
    $(".payments p span").fadeOut(300);
  });

});

function packsGet() {
  var date = new Date();
  var cName = "enimflau" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  packs = (arr == null) ? 98 : arr[2];
  if (packs > 0) {
    flipNum(packs, 2, 4);
    setTimeout('decreasingPacks(1)', 2000);
  } else {
    soldOut();
  }
}

function decreasingPacks(isInit) {
  var dateNow = new Date();
  $.ajax({
    type: "GET",
    url: "imf7launch.php",
    data: "action=getPacks&r=" + Math.random() + "&d=" + dateNow.getDate(),
    success: function(res) {
      res = JSON.parse(res);
      var sPacks = res.packsNum;
      var viewNum = res.viewNum;
      if (!isInit) {
        $('.viewNum').html(viewNum);
      }
      var rePacks = packs - sPacks;
      if (sPacks > 0) {
        if (rePacks > 0) {
          focus();
          flipNum(sPacks, 2, 4);
        }
        setTimeout('decreasingPacks(0)', 20000);
      } else {
        soldOut();
      }
      packs = sPacks;
    }
  });
}