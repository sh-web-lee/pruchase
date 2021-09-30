$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function reduceNum() {
  $(".offer.center").append('<div class="ghost"></div> ')
  setTimeout('$(".banner .counter .bar span").append(\'<div class="reduce"></div>\');', 1100);
  setTimeout('$(".banner .counter .bar span .reduce").addClass("rezoom");', 1200);
  setTimeout('$(".banner .counter .bar span .reduce").remove();', 1500);
  setTimeout('$(".offer.center .ghost").remove();', 1500);
}

function soldOut() {
  $(".footbuy img").eq(0).addClass("active").siblings().removeClass("active");
  $(".footbuy li").eq(1).addClass("sold").removeClass("active");
  // $(".footbuy li").eq(1).find("strong").text("132,94€ sparen");
  $(".footbuy li").eq(0).addClass("active");
  $(".banner .offer.center").removeClass("sold").addClass("sold");
  $(".centbuy").removeClass("sold").addClass("sold");
  $(".banner .offer.center").empty().append('<div class="mask"></div><div class="bounce"></div>');
  $(".centbuy .wrapper").append('<div class="bounce"></div>');
  $(".footbuy li.center").append('<div class="bounce"></div>');
}

function setWidth(packsNum) {
  $('.bar span').css('width', packsNum * 0.9);
}

$(function() {
  // $(window).scrollWindow($(".cause"), $('.intro .list'), ("active"));
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $("#floatlayer .close").on('click', function(event) {
    $("#floatlayer").hide();
  });
  $(".footbuy li").on("mouseover", function() {
    var index = $(this).index();
    var num = $(this).attr("data-num");
    if (!$(this).hasClass("sold")) {
      $(this).addClass("active").siblings().removeClass("active");
      $(".footbuy img").eq(index).addClass("active").siblings().removeClass("active");
      var discount = $(".banner .offer").eq(num).find(".discount").text();
      var original = $(".banner .offer").eq(num).find(".original").text();
      var btnHref = $(".banner .offer").eq(num).find(".buybtn").attr("href");
      var btnGa = $(".banner .offer").eq(num).find(".buybtn").attr("onclick");
      $(".footbuy .price").find(".discount").text(discount);
      $(".footbuy .price").find(".original").text(original);
      $(".footbuy .price").find(".buybtn").attr("href", btnHref);
      $(".footbuy .price").find(".buybtn").attr("onclick", btnGa);
    }
  });
  timeInit();
  countdown((".countdown strong"), 1);
  packsInit();
});

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function getSalesNum(packsNow) {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    $('.buynum').html(commafy(625964));
  } else {
    var buyNum = 625915 + (49 - packsNow);
    $('.buynum').html(commafy(buyNum));
  }
}

function timeCheck() {
  if (packs > 58) {
    reTime = 10;
  } else {
    reTime = 6.2;
  }
}

function getSales() {
  var date = new Date();
  var statusNow = statusCheck();
  $.ajax({
    type: "GET",
    url: "decny.php",
    data: "action=getPacks&d=" + date.getDate() + "&s=" + statusNow + '&v=' + viewNum,
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        if (packs != sales.packsNum) {
          reduceNum();
          packs = sales.packsNum;
          $('.packsNum').html(packs);
        }
        getSalesNum(packs);
        setWidth(packs);
      }
      viewNum = sales.viewNum;
      $('.viewNum').html(viewNum);
      var scrollHeight = $(".banner").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $(".floatlayer").removeClass('on');
        setTimeout("$('.floatlayer').addClass('on');", 800);
      }
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
      $("#saleType").html(sales.saleType);
    }
  });
  if (packs > 45) {
    setTimeout('getSales()', 2000);
  } else if (packs > 5) {
    setTimeout('getSales()', 7500);
  } else {
    setTimeout('getSales()', 45000);
  }
}

function commafy(num) {
  num = num + "";
  num = num.replace(/[ ]/g, "");
  if (num == "") {
    return;
  }
  if (isNaN(num)) {
    return;
  }
  var index = num.indexOf(".");
  if (index == -1) {
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(num)) {
      num = num.replace(reg, "$1,$2");
    }
  } else {
    var intPart = num.substring(0, index);
    var pointPart = num.substring(index + 1, num.length);
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(intPart)) {
      intPart = intPart.replace(reg, "$1.$2");
    }
    num = intPart + "." + pointPart;
  }
  return num;
}

$(".intro .message dl").hover(function() {
  $(".intro .inner ul").css('marginLeft', -274 * ($(this).index() + 1));
  $(this).addClass('active').siblings().removeClass("active");
  $(".intro .zoom li").removeClass('active').eq($(this).index()).addClass('active');
});

$(".review dl dt .img-box").mouseover(function(event) {
  $(this).parent().parent().addClass("active").siblings().removeClass("active");
});

if ($(window).scrollTop() > $(".reason").offset().top) {
  $('.review dl').addClass("red-round");
} else {
  $('.review dl').removeClass("red-round");
  $('.review dl.active').addClass("red-round");
}

function timeInit() {
  var date = new Date();
  var cName = "itdbdecny_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 600;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
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

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

var countdown = function(countdown, tType) {
  statusSet();
  if (tType == 1) {
    getCycleCountdown(countTime);
  }
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    //if($(".footbuy li").eq(1).hasClass('active')){
    if (!$(".banner .offer.center").hasClass('sold')) {
      soldOut();
      getSalesNum();
    }
  }
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

function packsInit() {
  var date = new Date();
  var cName = "itdbdecnyb_p" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 49;
  } else {
    packs = arr[2];
  }
  $('.packsNum').html(packs);
  getSalesNum(parseInt(packs));
  if (packs > 45) {
    setTimeout('getSales()', 2000);
  } else if (packs > 5) {
    setTimeout('getSales()', 7500);
  } else {
    setTimeout('getSales()', 45000);
  }
  setWidth(packs);
}