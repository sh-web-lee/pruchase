$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function choice(select) {
  var index = $(select).index();
  var num = $(select).attr("data-num");
  if ($('.footbuy').hasClass("sold") && index === 0) {
    return;
  }
  var _discount = $(".banner .offer").eq(num).find(".discount").text();
  var _original = $(".banner .offer").eq(num).find("del").text();
  var _href = $(".banner .offer .price").eq(num).find(".buybtn").attr("href");
  var _ga = $(".banner .offer .price").eq(num).find(".buybtn").attr("onclick");
  $(select).addClass("on").siblings().removeClass("on");
  $(".footbuy .imgbox span").eq(index).addClass("on").siblings().removeClass("on");
  $(".footbuy .price").find(".discount").text(_discount);
  $(".footbuy .price").find("del").text(_original);
  $(".footbuy .buybtn").attr({
    "href": _href,
    "onclick": _ga,
  });

}

function soldGift() {
  $(".mask").remove();
  $(".footbuy li.first").removeClass("on");
  $(".offer,.donation,.footbuy,.footbuy li.first").removeClass("sold").addClass("sold");
  $(".offer.red,.donation dl,.footbuy li.sold").append('<div class="mask"><span class="reduce">ESAURITO</span></div>');
  setTimeout(function() {
    $(".mask span.reduce").removeClass("on").addClass("on");
  }, 300);
  $(".donation .price,.donation .countdown").remove();
  choice($(".footbuy li").eq(1));
  $(".floatlayer,.floatbg").remove();
}
//soldGift();

function minBox() {
  $(".floatbg,.floatlayer").removeClass("on");
  $(".floatlayer").removeClass("maxbox").addClass("on");
  $(".floatlayer h2,.floatlayer .price p,.floatlayer .ribbon").remove();
  $(".floatlayer h4").html('EXTRA SCONTO <big>-3€</big>');
  $(".floatlayer .close").html('<i class="max">Massimizza</i>');
  $(".floatlayer .buybtn").removeClass("small").addClass("small");
  $(".floatlayer .max").click(function() {
    maxBox();
  });
}

function maxBox() {
  $(".floatbg,.floatlayer").removeClass("on").addClass("on");
  $(".floatlayer").removeClass("maxbox").addClass("maxbox");
  $(".floatlayer").prepend('<h2>COMPLIMENTI! HAI VINTO UN EXTRA SCONTO!</h2>');
  $(".floatlayer h4").html('<img src="' + imgSrc + '" alt=""/> <big>-3€</big>');
  $(".floatlayer .price").prepend('<p><strong>23,99€</strong></p>');
  $(".floatlayer .close").html('<i class="min">Minimizza</i><i class="shut">Rinuncio</i>');
  $(".floatlayer .buybtn").removeClass("small");
  $(".floatlayer").append('<span class="ribbon"></span>');
  $(".floatlayer .min").click(function() {
    minBox();
  });
  $(".floatlayer .shut").click(function() {
    $(".floatlayer,.floatbg").remove();
  });
}

$(function() {
  timeInit();
  var cName = "itdbjun_p";
  packs=cGet(cName);
  if(packs==null){
    setTimeout('boxInit()', 30000);
  }else{
    boxInit();
  }

  $(".footbuy li").hover(function() {
    choice(this);
  });

  $(".floatlayer .max").click(function() {
    maxBox();
  });

  $(".review dl dt .img-box").mouseover(function(event) {
    $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".donation").offset().top) {
      $('.review dl').addClass("red-round");
    } else {
      $('.review dl').removeClass("red-round");
      $('.review dl.active').addClass("red-round");
    }
  });

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".banner .offer h2").offset().top) {
      $('.intro .imgbox img').addClass("on");
    }
  });
});

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

function boxInit() {
  if (packs == null) {
    packs = 47;
  }
  if (packs > 0) {
    maxBox();
    $('.packsNum').html(packs);
    getSales();
  }
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "junsale2019.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      packs = sales.packsNum;
      $('.packsNum').html(packs);
      if (packs <= 0) {
        $(".floatbg,.floatlayer").removeClass("on");
      }
    }
  });
  if(packs>0){
    setTimeout('getSales()', 9000);
  }
}

function timeInit() {
  var date = new Date();
  var cName = "itdbjun_t";
  var nowTime = Math.floor(date.getTime() / 1000);
  countTime = cGet(cName);
  if (countTime == null) {
    countTime = nowTime + 600;
    cSet(cName, countTime);
  }
  countdown("#bandown b", "#giftdown b");
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

var countdown = function(countdown1, countdown2) {
  var statusNow = statusSet();
  if (statusNow == 1) {
    getCycleCountdown(countTime);
    $(countdown1).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    $(countdown2).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  }
  setTimeout("countdown('" + countdown1 + "','" + countdown2 + "')", 1);
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$(".offer,.donation,.footbuy,.footbuy li.first").hasClass('sold')) {
      //$(".countdown").html('<i class="all-icons">Hurry!</i> Only <b>00</b>M:<b>00</b>S:<b>00</b>Ms Left');
      soldGift();
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