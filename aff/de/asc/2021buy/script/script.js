var maskType;
var aff = MApp(2.2).url.getParameters('aff');
var tw = MApp(2.2).datetime.getTimeZone();
var $ref1pc = $ref3pc = $ref1pcoff = $ref3pcoff = MApp(2.2).url.getParameters('ref');
var pcga = "ga('send', 'event', 'ascbuy', 'buy', 'deaffasc142021buy1pc');";
var pcsga = "ga('send', 'event', 'ascbuy', 'buy', 'deaffasc142021buy3pc');";
var pcgab = "ga('send', 'event', 'ascbuy', 'buy', 'deaffasc142021buy1pcoff');";
var pcsgab = "ga('send', 'event', 'ascbuy', 'buy', 'deaffasc142021buy3pcoff');";
var pcgabc = "ga('send', 'event', 'ascbuy', 'buy', 'deaffasc142021buy1pc')";
var pcsgabc = "ga('send', 'event', 'ascbuy', 'buy', 'deaffasc142021buy3pc') ";

if ($ref1pc.length <= 0) $ref1pc = 'deaff_asc14_2021buy1pc';
if ($ref3pc.length <= 0) $ref3pc = 'deaff_asc14_2021buy3pc';
if ($ref1pcoff.length <= 0) $ref1pcoff = 'deaff_asc14_2021buy1pcoff';
if ($ref3pcoff.length <= 0) $ref3pcoff = 'deaff_asc14_2021buy3pcoff';

//This is original state ...
function planA() {
  $(".offer").removeClass("planb").removeClass("planc");
  $("h2.title").removeClass("planb").removeClass("planc");
  $(".offer .price").removeClass("priceb").removeClass("pricec");
  $(".offer .pc").find(".price").html('<p><strong>17,99<small>€</small></strong> <del>35,98€</del></p><a class="buybtn" href="https://www.iobit.com/buy.php?product=deaff-asc141pc1799&ref=deaff_asc14_2021buy1pc&aff=' + aff + '&tw=' + tw + '" onclick="' + pcga + '">In den Warenkorb legen</a>');
  $(".offer .pcs").find(".price").html('<p><strong>24,99<small>€</small></strong> <del>62,48€</del></p><a class="buybtn" href="https://www.iobit.com/buy.php?product=deaff-asc143pc2499&ref=deaff_asc14_2021buy3pc&aff=' + aff + '&tw=' + tw +'" onclick="' + pcsga + '"> In den Warenkorb legen </a><p class = "people" ><i></i><b class="buynum">3.966.571</b>Menschen haben es bereits gekauft</p>');
  reBuyLink();
}

//show planB after closing maskB
function planB() {
  $(".offer").removeClass("planc").addClass("planb");
  $("h2.title").removeClass("planc").addClass("planb").html("Rabatt wurde angewendet. Genießen Sie jetzt <b>Ihr exklusives Extra mit 25% RABATT!</b>" +
    "<span id='countdown2' class='countdown'><i></i> Das Angebotendet in " +
    "<strong>00</strong>M: " +
    "<strong>00</strong>S: " +
    "<strong class='last'>000</strong>ms*</span>");
  $(".offer .price").addClass("priceb");
  $(".offer .pc").find(".price").html('<p><span>Original</span><span>Verkaufspreis </span><b>25% Rabatt</b></p><p><del>35,98€</del><del class="center">17,99€</del><strong>13,50€</strong></p><a class="buybtn" href="https://www.iobit.com/buy.php?product=deaff-asc141pc1349&ref=deaff_asc14_2021buy1pcoff&aff=' + aff + '&tw='+ tw +'" onclick="'+ pcgab +'">In den Warenkorb legen</a><h5>Sie sparen: 22,48€</h5>');
  $(".offer .pcs").find(".price").html('<p><span><b>Original</b></span><span><b> Verkaufspreis </b></span><b>25% Rabatt</b></p><p><del>62,48€</del><del class="center">24,99€ </del><strong>18,74€</strong></p><a class="buybtn" href="https://www.iobit.com/buy.php?product=deaff-asc143pc1874&ref=deaff_asc14_2021buy3pcoff&aff='+ aff +'&tw='+ tw +'" onclick="' + pcsgab + '">In den Warenkorb legen</a><h5>Sie sparen: 43,74€</h5>');
  reBuyLink();
}

//show planC after planB'countdown over
function planC() {
  $(".offer").removeClass("planb").addClass("planc");
  $("h2.title").removeClass("planb").addClass("planc").html("Hoppla! Ihr Gutschein ist abgelaufen.");
  $(".offer .price").removeClass("priceb").addClass("pricec");
  $(".offer .pc").find(".price").html('<dl class="clearfix"><dd>25% Rabatt <del>13,50€</del></dd><dd class="nowsaleprice">Verkaufspreis <strong>17,99€</strong></dd><dt></dt></dl><a class="buybtn" href="https://www.iobit.com/buy.php?product=deaff-asc141pc1799&ref=deaff_asc14_2021buy1pc&aff='+ aff +'&tw='+ tw +'" onclick="' + pcgabc + '">In den Warenkorb legen</a>');
  $(".offer .pcs").find(".price").html('<dl class="clearfix"><dd>25% Rabatt <del>18,74€</del></dd><dd class="nowsaleprice">Verkaufspreis <strong>24,99€</strong></dd><dt></dt></dl><a class="buybtn" href="https://www.iobit.com/buy.php?product=deaff-asc143pc2499&ref=deaff_asc14_2021buy3pc&aff='+ aff +'&tw='+ tw +'" onclick="' + pcsgabc + '">In den Warenkorb legen</a>');
  reBuyLink();
}

//show maskB when aware that the user is closing the page
function maskB() {
  $(".mask").addClass("active");
  $(".mask").addClass("maskb");
  $(".mask .plana").addClass("mhide");
  $(".mask-box").append('<div class="mask-planb"></div>');
  $(".mask-planb").html("<h2>GLÜCKWUNSCH!</h2><p>Sie haben heute Glück! Erhalten Sie einen <b>zusätzlichen Rabatt von 25%</b> <br> für begrenzte Zeit!</p><img class='off' src='" + imgSrc + "'><div class='buybox'><a class='buybtn' href='javascript: void(0);' onclick='maskCount(1);cycleCountdown(2);'>NUTZEN SIE DEN RABATT JETZT</a><p onclick='maskClose()'>Nein danke, ich möchte den vollen Preis bezahlen</p></div>");
  $(".maskb .buybtn").on("click", function() {
    removeMask();
    planB();
    cSet('aff_ma_ty', 3);
  });
}

// do innerMask'work after the countdown over
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
  cookieClear();
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
    }
    cycleCountdown();
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

function cookieClear() {
  var ref=MApp(2.2).url.getParameters('ref');
  if(ref=='asc14trb') {
    $.ajax({
      type: "GET",
      url: "https://www.iobit.com/goto.php?id=affvsasc14&ref=paramreset&aff=paramtest&refs=asc14trialactivation",
      dataType: 'JSONP'
    })
  }
}

function maskClose() {
  cSet('aff_ma_t', -2);
  $(".inner-mask").remove();
  $(".mask").removeClass("active");
  maskCount(-1);
}

function cycleCountdown() {
  var miRemainTime=expireTimeCheck();
  remainTime = miRemainTime/1000;
  var dateObj=new Date();
  var mi = 999 - dateObj.getMilliseconds();
  if (mi < 10) {
    mi = '00' + mi;
  } else if (mi < 100) {
    mi = '0' + mi;
  }
  if (remainTime > 0) {
    var s = ((remainTime % 60) < 10) ? ('0' + (remainTime % 60)) : (remainTime % 60);
    var m = Math.floor(remainTime / 60);
    //var mi = Math.floor(miRemainTime % 1000);
    if (maskType == 1) {
      $('#countdown strong').eq(0).html("0").end().eq(1).html(s).end().eq(2).html(mi);
    } else {
      $('#countdown2 strong').eq(0).html(m).end().eq(1).html(s).end().eq(2).html(mi);
    }
    setTimeout('cycleCountdown(maskType)', 1);
  } else {
    if (maskType == 1) {
      $('#countdown strong').eq(0).html("00").end().eq(1).html('00').end().eq(2).html("000");
    } else {
      $('#countdown2 strong').eq(0).html('00').end().eq(1).html('00').end().eq(2).html('000');
    }
    //innerMask();
    planC();
  }
}

function expireTimeCheck() {
  var expireTime = cGet('aff_ma_e');
  if (expireTime == null) {
    expireTime = Date.parse(new Date()) + 60 * 30 * 1000;
    cSet('aff_ma_e', expireTime);
  }
  if (Date.parse(new Date()) < expireTime) {
    return (expireTime - Date.parse(new Date()));
  } else {
    return false;
  }
}

$(function () {
  $('.review .handle li').hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
  });
  reBuyLink();
  refsMask();
});


function refsMask(){
  var refs = MApp(2.2).url.getParameters('refs');
  if(refs=='asc14trialpopup') {
    setTimeout('mask()', 1000);
    $(document).unbind('mousemove', mouseOut);
  }
}

function reBuyLink(){
  var aff = MApp(2.2).url.getParameters('aff');
  var ref = MApp(2.2).url.getParameters('ref');
  if(aff.length>0){
    $('.buybtn').each(function() {
      var buyHrefTemp = $(this).attr('href');
      var buyHref = buyHrefTemp.replace(/&aff=(.*)&/, '&aff='+aff+'&');
      var ref=MApp(2.2).url.getParameters('ref');
      var refs=MApp(2.2).url.getParameters('refs');
      if(ref=='asc14trb') {
        buyHref=buyHref+'&refs='+refs
      }
      $(this).attr('href', buyHref);
    })
  }
  if(ref.length>0){
    $('.buybtn').each(function() {
      var buyHrefTemp = $(this).attr('href');
      var buyHref = buyHrefTemp.replace(/&ref=(.*)&aff=/, '&ref='+ref+'&aff=');
      $(this).attr('href', buyHref);
    })
  }
}