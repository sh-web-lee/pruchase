var aff = MApp(2.2).url.getParameters('aff');
var tw = MApp(2.2).datetime.getTimeZone();
var $ref1pc = $ref3pc = $ref1pcoff = $ref3pcoff = MApp(2.2).url.getParameters('ref');
var pcga = "ga('send', 'event', 'ascbuy', 'buy', 'svaffasc142021buy1pc');";
var pcsga = "ga('send', 'event', 'ascbuy', 'buy', 'svaffasc142021buy3pc');";

var pcgab = "ga('send', 'event', 'ascbuy', 'buy', 'svaffasc142021buy1pcoff');";
var pcsgab = "ga('send', 'event', 'ascbuy', 'buy', 'svaffasc142021buy3pcoff');";

var pcgabc = "ga('send', 'event', 'ascbuy', 'buy', 'svaffasc142021buy1pc');";
var pcsgabc = "ga('send', 'event', 'ascbuy', 'buy', 'svaffasc142021buy3pc')";

if ($ref1pc.length <= 0) $ref1pc = 'svaff_asc14_2021buy1pc';
if ($ref3pc.length <= 0) $ref3pc = 'svaff_asc14_2021buy3pc';

if ($ref1pcoff.length <= 0) $ref1pcoff = 'svaff_asc14_2021buy1pcoff';
if ($ref3pcoff.length <= 0) $ref3pcoff = 'svaff_asc14_2021buy3pcoff';


//This is original state ...
function planA() {
  $(".offer").removeClass("planb").removeClass("planc");
  $("h2.title").removeClass("planb").removeClass("planc");
  $(".offer .price").removeClass("priceb").removeClass("pricec");
  $(".offer .pc").find(".price").html('' +
    '<p><strong>219 <small>kr</small></strong> <del>438 kr</del></p>' +
    '<a class="buybtn"' +
    ' href="https://www.iobit.com/buy.php?product=svaff-asc141pc219&ref='+ $ref1pc +'&aff='+ aff +'&tw='+ tw +'"' +
    'onclick="' + pcga + '">' +
    'Lägg till i Kundvagn' +
    '</a>');
  $(".offer .pcs").find(".price").html('' +
    '<p><strong>309 <small>kr</small></strong> <del>772 kr</del></p>' +
    '<a class="buybtn" ' +
    'href="https://www.iobit.com/buy.php?product=svaff-asc143pc309&ref='+ $ref3pc +'&aff='+ aff +'&tw='+ tw +'"' +
    'onclick="' + pcsga + '">' +
    'Lägg till i Kundvagn' +
    '</a>' +
    '<p class = "people" ><b class="buynum">3,966,571</b>personerharköpt</p>');
  reBuyLink();
}

//show planB after closing maskB
function planB() {
  $(".offer").removeClass("planc").addClass("planb");
  $("h2.title").removeClass("planc").addClass("planb").html("Rabatt Har Tillämpats. Njut av Ditt Exklusiva <b>Extra 25% RABATT</b> Nu!" +
    "<span id='countdown2' class='countdown'><i></i> Erbjudandet slutar inom " +
    "<strong>00</strong>M: " +
    "<strong>00</strong>S: " +
    "<strong class='last'>000</strong>ms*</span>");
  $(".offer .price").addClass("priceb");
  $(".offer .pc").find(".price").html('<table>' +
    '<tr>' +
    '<td>Ursprungligt</td>' +
    '<td>Försäljningspris</td>' +
    '<td><b>Extra 25% RABATT</b></td>' +
    '</tr>' +
    '<tr>' +
    '<td><del> 438 kr </del></td>' +
    '<td><del> 219 kr </del></td>' +
    '<td><strong>165 kr</strong></td>' +
    '</tr></table>' +
    '<a class="buybtn" ' +
    'href=https://www.iobit.com/buy.php?product=svaff-asc141pc165&ref='+ $ref1pcoff +'&aff='+ aff +'&tw='+ tw +'"' +
    ' onclick="' + pcgab + '">' +
    'Lägg till i Kundvagn' +
    '</a>' +
    '<h5>Sparar: 273 kr</h5>');
  $(".offer .pcs").find(".price").html('<table>' +
    '<tr>' +
    '<td>Ursprungligt</td>' +
    '<td>Försäljningspris</td>' +
    '<td><b>Extra 25% RABATT</b></td>' +
    '</tr>' +
    '<tr>' +
    '<td><del> 772 kr</del></td>' +
    '<td><del> 309 kr</del></td>' +
    '<td><strong> 232 kr</strong></td>' +
    '</tr></table>' +
    '<a class="buybtn" ' +
    'href="https://www.iobit.com/buy.php?product=svaff-asc143pc232&ref='+ $ref3pcoff +'&aff='+ aff +'&tw='+ tw +'" ' +
    'onclick="' + pcsgab + '">' +
    'Lägg till i Kundvagn' +
    '</a>' +
    '<h5>Sparar: 540 kr</h5>');
  reBuyLink();
}

//show planC after planB'countdown over
function planC() {
  $(".offer").removeClass("planb").addClass("planc");
  $("h2.title").removeClass("planb").addClass("planc").html("hoppsan! Din kupong har gått ut.");
  $(".offer .price").removeClass("priceb").addClass("pricec");
  $(".offer .pc").find(".price").html('' +
    '<dl class="clearfix">' +
    '<dd>Extra 25% RABATT <del>165 kr</del></dd>' +
    '<dd class="nowsaleprice"> Försäljningspris <strong> 219 kr</strong></dd>' +
    '<dt></dt>' +
    '</dl>' +
    '<a class="buybtn" ' +
    'href="https://www.iobit.com/buy.php?product=svaff-asc141pc219&ref='+ $ref1pc +'&aff='+ aff +'&tw='+ tw +'"' +
    'onclick="' + pcgabc + '">' +
    'Lägg till i Kundvagn' +
    '</a>');
  $(".offer .pcs").find(".price").html('' +
    '<dl class="clearfix">' +
    '<dd>Extra 25% RABATT <del>232 kr</del></dd>' +
    '<dd class="nowsaleprice">Försäljningspris <strong>309 kr </strong></dd>' +
    '<dt></dt>' +
    '</dl>' +
    '<a class="buybtn" ' +
    'href="https://www.iobit.com/buy.php?product=svaff-asc143pc309&ref='+ $ref3pc +'&aff='+ aff +'&tw='+ tw +'"' +
    'onclick="' + pcsgabc + '">' +
    'Lägg till i Kundvagn' +
    '</a>');
  reBuyLink();
}

//show maskB when aware that the user is closing the page
function maskB() {
  $(".mask").addClass("active");
  $(".mask").addClass("maskb");
  $(".mask .plana").addClass("mhide");
  $(".mask-box").append('<div class="mask-planb"></div>');
  $(".mask-planb").html("" +
    "<h2>GRATTIS!</h2>" +
    "<p>Du är dagens lyckliga besökare! Få <b>extra 25% rabatt</b> på en begränsad tid!</p>" +
    "<img class='off' src='" + imgSrc + "'>" +
    "<div class='buybox'>" +
    "<a class='buybtn' " +
    "href='javascript: void(0);' " +
    "onclick='maskCount(1);cycleCountdown(2);'>" +
    "ANVÄNDA MITT RABATT NU" +
    "</a>" +
    "<p onclick='maskClose()'>Nej tack, jag vill betala hela priset</p>" +
    "</div>");
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