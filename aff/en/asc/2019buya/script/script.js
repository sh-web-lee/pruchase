var aff = MApp(2.2).url.getParameters('aff');
var $ref1pc = $ref3pc = $ref3pcgift = $ref1pcoff = $ref3pcoff = MApp(2.2).url.getParameters('ref');
var pcsga = "ga('send', 'event', 'ascbuy', 'buy', 'enaffasc122019buya3pc')";
var pcgab = "ga('send', 'event', 'ascbuy', 'buy', 'enaffasc122019buya1pcoff')";
var pcga = "ga('send', 'event', 'ascbuy', 'buy', 'enaffasc122019buya1pc')";
var pcsgab = "ga('send', 'event', 'ascbuy', 'buy', 'enaffasc122019buya3pcoff')";

if ($ref1pc.length <= 0) $ref1pc = 'enaff_asc12_2019buya1pc';
if ($ref3pc.length <= 0) $ref3pc = 'enaff_asc12_2019buya3pc';
if ($ref3pcgift.length <= 0) $ref3pcgift = 'enaff_asc11_2019buya3pcgift';
if ($ref1pcoff.length <= 0) $ref1pcoff = 'enaff_asc11_2019buya1pcoff';
if ($ref3pcoff.length <= 0) $ref3pcoff = 'enaff_asc12_2019buya3pcoff';

function planA() {
  $(".offer .price").removeClass("priceb");
  $(".offer .pc").find(".price").html('<p><strong><small>$</small>14.77</strong> <del>$29.99</del></p><a class="buybtn" href="https://www.iobit.com/buy.php?product=enaff-asc121pc1477a&ref=' + $ref1pc + '&aff=' + aff + '&tw=-8" onclick="' + pcga + '">Add to Cart</a>');
  $(".offer .pcs").find(".price").html('<p><strong><small>$</small>19.99</strong> <del>$49.99</del></p><a class="buybtn" href=https://www.iobit.com/buy.php?product=enaff-asc123pc1999a&ref=' + $ref3pc + '&aff=' + aff + '&tw=-8" onclick="' + pcsga + '">Add to Cart </a><p class = "people" ><b class="buynum">2,829,369</b>people has bought</p>');
}

function planB() {
  $(".offer .price").addClass("priceb");
  $(".offer .pc").find(".price").html('<p><span>Original</span><span>Sale Price</span><b>After Extra 25% OFF</b></p><p><del>$29.99</del><del class="center">$14.77</del><strong>$11.08</strong></p><a class="buybtn" href="https://www.iobit.com/buy.php?product=enaff-asc121pc1108a&ref=' + $ref1pcoff + '&aff=' + aff + '&tw=-8" onclick="' + pcgab + '">Add to Cart</a><h5>Save: $18.91</h5>');
  $(".offer .pcs").find(".price").html('<p><span><b>Original</b></span><span><b>Sale Price </b></span><b>After Extra 25% OFF</b></p><p><del>$49.99</del><del class="center">$19.99</del><strong>$14.99</strong></p><a class="buybtn" href="https://www.iobit.com/buy.php?product=enaff-asc123pc1499a&ref=' + $ref3pcoff + '&aff=' + aff + '&tw=-8" onclick="' + pcsgab + '">Add to Cart</a><h5>Save: $35.00</h5>');
}

function maskA() {
  $(".mask").addClass("active");
  $(".mask").removeClass("maskb");
  $(".mask .plana").removeClass("mhide");
  $(".mask .planb").remove();
  cycleCountdown(1);
}

function maskB() {
  $(".mask").addClass("active");
  $(".mask").addClass("maskb");
  $(".mask .plana").addClass("mhide");
  $(".mask-box").append('<div class="planb"></div>');
  $(".planb").html("<h2>CONGRATS!</h2><p>You’re Today's Lucky Visitor! Get an <b>Extra 25% Discount</b> at a Limited Time!</p><p class='ends'>Offer ends in:</p><div id='countdown2' class='countdown'><strong class='left'>02</strong><b>:</b><strong class='right'>00</strong></div><img class='off' src='" + imgSrc + "'><div class='buybox'><a class='buybtn' href='javascript: void(0);' onclick='maskCount(1)'>APPLY MY DISCOUNT NOW</a><p onclick='maskClose()'>No thanks, I want to pay the full price</p></div>");
  $(".maskb .buybtn").on("click", function() {
    removeMask();
    planB();
    cSet('aff_ma_ty', 3);
  });
  cycleCountdown(2);
}

function innerMask() {
  $(".mask-box").append('<div class="inner-mask"><div class="expired"></div></div>');
  $("body").click(function() {
    removeMask();
  });
}

function removeMask() {
  $(".mask").removeClass("active");
  $(".inner-mask").remove();
}

$(function() {
  timeInit();
});

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

//showTime
function timeInit() {
  maskTime = cGet('aff_ma_t');
  if (maskTime == null) {
    maskTime = 60 * 2;
    cSet('aff_ma_t', maskTime);
  }
  if (maskTime == -1) {
    var tcName = 'aff_ma_ty';
    maskType = cGet(tcName);
    if (maskType == 3) {
      planB();
    } else {
      if (expireTimeCheck()) {
        mask();
      }
    }
  }
  mouseCheck = 0;
  maskTimeCountDown();
}

function maskTimeCountDown() {
  if (maskTime > 0) {
    if (maskTime == 109) {
      $(document).bind('mousemove', mouseOut);
    }
    if (maskTime == 80) {
      $(document).unbind('mousemove', mouseOut)
    }
    maskTime--;
    cSet('aff_ma_t', maskTime);
    setTimeout('maskTimeCountDown()', 1000);
  } else if ((maskTime == 0)) {
    $(document).bind('mousemove', mouseMove);
  }
}

function mouseOut(e) {
  if (e.clientY < 3) {
    mask();
    $(document).unbind('mousemove', mouseOut);
  }
}

function mouseMove(e) {
  mask();
  $(document).unbind('mousemove', mouseMove);
}

function mask() {
  var tcName = 'aff_ma_ty';
  maskType = cGet(tcName);
  if (maskType == null) {
    maskTime = -1;
    cSet('aff_ma_t', maskTime);
    //maskType=(Math.random()<0.5)?1:2;
    maskType = 2;
    cSet(tcName, maskType);
  }
  if (maskType == 1) {
    maskA();
  } else {
    maskB();
  }
  maskCount(0);
}

function maskCount(buttonClick) {
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=maskCount&maskType=" + maskType + "&buttonClick=" + buttonClick
  })
}

function maskClose() {
  cSet('aff_ma_t', -2);
  $(".inner-mask").remove();
  $(".mask").removeClass("active");
  maskCount(-1);
}

function cycleCountdown() {
  remainTime = expireTimeCheck();
  if (remainTime > 0) {
    var s = ((remainTime % 60) < 10) ? ('0' + (remainTime % 60)) : (remainTime % 60);
    var m = Math.floor(remainTime / 60);
    if (maskType == 1) {
      $('#countdown strong').eq(0).html("0" + m).end().eq(1).html(s);
    } else {
      $('#countdown2 strong').eq(0).html("0" + m).end().eq(1).html(s);
    }
    remainTime--;
    setTimeout('cycleCountdown(maskType)', 1000);
  } else {
    if (maskType == 1) {
      $('#countdown strong').eq(0).html("00").end().eq(1).html('00');
    } else {
      $('#countdown2 strong').eq(0).html("00").end().eq(1).html('00');
    }
    innerMask();
  }
}

function expireTimeCheck() {
  var expireTime = cGet('aff_ma_e');
  if (expireTime == null) {
    expireTime = Date.parse(new Date()) + 60 * 2 * 1000;
    cSet('aff_ma_e', expireTime);
  }
  if (Date.parse(new Date()) < expireTime) {
    return (expireTime - Date.parse(new Date())) / 1000;
  } else {
    return false;
  }
}