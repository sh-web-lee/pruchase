$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top && $(window).scrollTop() <= $(document).height() - $(window).height() - 400) {
      scrollclass.addClass(ClassName).removeClass("active");
    } else if ($(window).scrollTop() > $(document).height() - $(window).height() - 400) {
      scrollclass.addClass("active").removeClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName).removeClass("active");
    }
  });
};

$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
  });
};

//add mask
function sold() {
  $(".banner .offer").eq(2).find(".mask").remove();
  $(".giveaway .list").eq(1).find(".mask").remove();
  $(".giveaway .list").eq(2).find(".mask").remove();
  var _discount = [
    "17,99€",
    "14,99€"
  ];
  var _original = [
    "79,89€",
    "29,99€"
  ];
  var _href = [
    "http://www.iobit.com/buy.php?product=es-asc113pcpfsd1799&ref=es_asc113pcpfsdpurchase1805&refs=es_purchase_asc",
    "http://www.iobit.com/buy.php?product=es-asc111pc1499&ref=es_asc111pcpurchase1805&refs=es_purchase_asc"
  ];
  $(".footbuy li").eq(1).addClass("sold").removeClass("active");
  $(".footbuy li").eq(2).addClass("current");
  $(".footbuy li").eq(2).addClass("active");
  $(".footbuy .imgbox").find("img").eq(1).addClass("active").siblings().removeClass("active");
  $(".banner .offer").eq(2).addClass("sold");
  $(".banner .offer").eq(2).append('<div class="mask"><img src="' + soldl + '" alt=""/></div>');
  $(".giveaway .list").eq(1).append('<div class="mask"><img src="' + soldsm + '" alt=""/></div>');
  $(".giveaway .list").eq(2).append('<div class="mask"><img src="' + soldsm + '" alt=""/></div>');
  $(".banner .offer").eq(2).find(".mask img").addClass("bounceout");
  $(".giveaway .list").eq(1).find(".mask img").addClass("bounceout");
  $(".giveaway .list").eq(2).find(".mask img").addClass("bounceout");
  $(".banner .center").addClass("fifty");
  $(".banner .center .imgbox").find("img").attr("src", pc);
  $(".banner .right .imgbox").find("img").attr("src", pcs);
  $(".banner .center").find(".buybtn").attr("href", _href[1]);
  $(".banner .right").find(".buybtn").attr("href", _href[0]);
  $(".banner .center").find(".discount").text(_discount[1]);
  $(".banner .center").find(".original").text(_original[1]);
  $(".banner .right").find(".discount").text(_discount[0]);
  $(".banner .right").find(".original").text(_original[0]);
  $(".footbuy .price").find(".discount").text(_discount[1]);
  $(".footbuy .price").find(".original").text(_original[1]);
  $(".footbuy .price").find(".buybtn").attr("href", _href[1]);
  $(".giveaway").find(".buybtn").attr("href", _href[1]);
  $(".banner .center").find(".time").html('<div class="time">¡Sólo <b class="packs"><span class="packsNum">' + packs + '</span><span class="packsNum shadow">' + packs + '</span></b> piezas quedadas hoy!</div>');
}
//sold();
// zoomout();

function zoomout() {
  $(".banner .time .shadow").addClass("zoomout");
  $(".banner .fifty .imgbox").append("<span class='dissolve'><img src='" + shadow + "' alt=''/></span>");
  setTimeout(function() {
    $(".banner .time .shadow").removeClass("zoomout");
    $(".banner .fifty .imgbox .dissolve").remove();
  }, 1500);
}


$(function() {
  $(".banner .offer").eq(0).append('<div class="mask"><img src="' + soldl + '" alt=""/></div>');
  $(".giveaway .list").eq(0).append('<div class="mask"><img src="' + soldsm + '" alt=""/></div>');

  $(".review .list li").userMouseover($(".content dl"));

  $(".banner .tipbox").hover(function() {
    $(".tips").show(500);
  }, function() {
    $(".tips").hide(500);
  });
  $(window).scrollWindow($(".banner .buybtn"), $('.intro .box dl'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $(".close").on("click", function() {
    $(".floatlayer").hide();
  });

  $(".footbuy li").on("click", function() {
    if (!$(this).hasClass("sold") && !$(this).hasClass("current")) {
      var index = $(this).index();
      var dataName = $(this).attr("data-num");
      var dataUrl = $(".banner .offer").eq(index).find(".buybtn").attr("href");
      var original = $(".banner .offer").eq(index).find(".original").text();
      var discount = $(".banner .offer").eq(index).find(".discount").text();
      $(this).addClass("active").siblings().removeClass("active");
      $(".footbuy .imgbox").find("img").eq(dataName).addClass("active").siblings().removeClass("active");
      $(".footbuy .price").find("del").text(original);
      $(".footbuy .price").find(".discount").text(discount);
      $(".footbuy .buybtn").attr("href", dataUrl);
    }
  });
});

function timeInit() {
  var date = new Date();
  var cName = "esascfeb_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 900;
    cSet(cName, countTime);
  } else {
    countTime = arr[2];
  }
}

function packsInit() {
  var date = new Date();
  var cName = "esascfeb" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 125;
  } else {
    packs = arr[2];
  }
  $('.packsNum').html(packs);
}

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}


function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "febspringes.php",
    data: "action=getSales&status=" + statusCheck() + "&d=" + date.getDate()+"&r="+Math.random(),
    success: function(res) {
      var sales = JSON.parse(res);
      var scrollHeight = $(".banner").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $(".floatlayer").removeClass('on');
        setTimeout("$('.floatlayer').addClass('on');", 800);
      }
      if (packs != sales.packsNum) {
        $('.packsNum').html(sales.packsNum);
        zoomout();
      }
      packs = sales.packsNum;
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
    }
  });
  setTimeout('getSales()', 20000);
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

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if ($(".footbuy li").eq(1).hasClass('active')) {
      sold();
    }
  }
  return statusNow;
}

var countdown = function(tType) {
  var statusNow = statusSet();
  getCycleCountdown(countTime);
  $("#countdown strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if (statusNow == 1) {
    setTimeout("countdown(" + statusNow + ")", 1);
  }
};

function getCycleCountdown(endTime, ctype) {
  var datetime = timeCountDown(endTime, ctype);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
  return (eval(datetime.join("+")) == 0);
}

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    var d = Math.floor(remainingTime / (24 * 60 * 60));
    var h = Math.floor(remainingTime / (60 * 60) % 24);
    var i = Math.floor(remainingTime / 60 % 60);
    var s = Math.floor(remainingTime % 60);
    var mi = 999 - dateObj.getMilliseconds();
    if (mi < 10) {
      mi = '00' + mi;
    } else if (mi < 100) {
      mi = '0' + mi;
    }
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}

$(function() {
  timeInit();
  packsInit();
  countdown();
  setTimeout('getSales()', 15000);
});