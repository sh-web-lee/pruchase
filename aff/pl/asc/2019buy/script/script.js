var aff = MApp(2.2).url.getParameters('aff');
var tw = MApp(2.2).datetime.getTimeZone();
var $ref1pc = $ref3pc = $ref1pcoff = $ref3pcoff = MApp(2.2).url.getParameters('ref');
var pcga = "ga('send', 'event', 'ascbuy', 'buy', 'plaffasc122019buy1pc');";
var pcsga = "ga('send', 'event', 'ascbuy', 'buy', 'plaffasc122019buy3pc');";

var pcgab = "ga('send', 'event', 'ascbuy', 'buy', 'plaffasc122019buy1pcoff');";
var pcsgab = "ga('send', 'event', 'ascbuy', 'buy', 'plaffasc122019buy3pcoff');";

var pcgabc = "ga('send', 'event', 'ascbuy', 'buy', 'plaffasc122019buy1pc');";
var pcsgabc = "ga('send', 'event', 'ascbuy', 'buy', 'plaffasc122019buy3pc')";

if ($ref1pc.length <= 0) $ref1pc = 'plaff_asc12_2019buy1pc';
if ($ref3pc.length <= 0) $ref3pc = 'plaff_asc12_2019buy3pc';

if ($ref1pcoff.length <= 0) $ref1pcoff = 'plaff_asc12_2019buy1pcoff';
if ($ref3pcoff.length <= 0) $ref3pcoff = 'plaff_asc12_2019buy3pcoff';


//This is original state ...
function planA() {
  $(".offer").removeClass("planb").removeClass("planc");
  $("h2.title").removeClass("planb").removeClass("planc");
  $(".offer .price").removeClass("priceb").removeClass("pricec");
  $(".offer .pc").find(".price").html('' +
    '<p><strong>54,90<small> zł</small></strong> <del>109,80 zł</del></p>' +
    '<a class="buybtn"' +
    ' href="https://www.iobit.com/buy.php?product=plaff-asc121pc5490&ref='+ $ref1pc +'&aff='+ aff +'&tw='+ tw +'"' +
    'onclick="' + pcga + '">' +
    'Dodaj do koszyka'+
    '</a>');
  $(".offer .pcs").find(".price").html('' +
    '<p><strong>79,90<small> zł</small></strong> <del> 199,75 zł</del></p>' +
    '<a class="buybtn" ' +
    'href="https://www.iobit.com/buy.php?product=plaff-asc123pc7990&ref='+ $ref3pc +'&aff='+ aff +'&tw='+ tw +'"' +
    'onclick="' + pcsga + '">' +
    'Dodaj do koszyka' +
    '</a>' +
    '<p class = "people" ><b class="buynum">3,966,571</b>personer har købt denne</p>');
  reBuyLink();
}

//show planB after closing maskB
function planB() {
  $(".offer").removeClass("planc").addClass("planb");
  $("h2.title").removeClass("planc").addClass("planb").html("Zniżka została wykorzystana. Ciesz się <b>dodatkowym 25% rabatem</b> już teraz!" +
    "<span id='countdown2' class='countdown'><i></i> Oferta kończy się za " +
    "<strong>00</strong>M: " +
    "<strong>00</strong>S: " +
    "<strong class='last'>000</strong>ms*</span>");
  $(".offer .price").addClass("priceb");
  $(".offer .pc").find(".price").html('<table>' +
    '<tr>' +
    '<td>Początkowo</td>' +
    '<td> Z rabatem</td>' +
    '<td><b>Dodatkowe 25% mniej</b></td>' +
    '</tr>' +
    '<tr>' +
    '<td><del>109,80 zł</del></td>' +
    '<td><del>54,90 zł</del></td>' +
    '<td><strong>41,18 zł</strong></td>' +
    '</tr></table>' +
    '<a class="buybtn" ' +
    'href=https://www.iobit.com/buy.php?product=plaff-asc121pc4118&ref='+ $ref1pcoff +'&aff='+ aff +'&tw='+ tw +'"' +
    ' onclick="' + pcgab + '">' +
    'Dodaj do koszyka' +
    '</a>' +
    '<h5>Zaoszczędź: 68,62 zł </h5>');
  $(".offer .pcs").find(".price").html('<table>' +
    '<tr>' +
    '<td>Początkowo</td>' +
    '<td>Z rabatem</td>' +
    '<td><b>Dodatkowe 25% mniej</b></td>' +
    '</tr>' +
    '<tr>' +
    '<td><del>199,75 zł</del></td>' +
    '<td><del>79,90 zł</del></td>' +
    '<td><strong>59,93 zł</strong></td>' +
    '</tr></table>' +
    '<a class="buybtn" ' +
    'href="https://www.iobit.com/buy.php?product=plaff-asc123pc5993&ref='+ $ref3pcoff +'&aff='+ aff +'&tw='+ tw +'" ' +
    'onclick="' + pcsgab + '">' +
    'Dodaj do koszyka' +
    '</a>' +
    '<h5>Zaoszczędź: 139,82 zł</h5>');
  reBuyLink();
}

//show planC after planB'countdown over
function planC() {
  $(".offer").removeClass("planb").addClass("planc");
  $("h2.title").removeClass("planb").addClass("planc").html("Ups! Twój kupon wygasł.");
  $(".offer .price").removeClass("priceb").addClass("pricec");
  $(".offer .pc").find(".price").html('' +
    '<dl class="clearfix">' +
    '<dd> Dodatkowe 25% mniej <del> 41,18 zł </del></dd>' +
    '<dd class="nowsaleprice"> Z rabatem <strong> 54,90 zł</strong></dd>' +
    '<dt></dt>' +
    '</dl>' +
    '<a class="buybtn" ' +
    'href="https://www.iobit.com/buy.php?product=plaff-asc121pc5490&ref='+ $ref1pc +'&aff='+ aff +'&tw='+ tw +'"' +
    'onclick="' + pcgabc + '">' +
    'Dodaj do koszyka' +
    '</a>');
  $(".offer .pcs").find(".price").html('' +
    '<dl class="clearfix">' +
    '<dd> Dodatkowe 25% mniej <del>59,93 zł</del></dd>' +
    '<dd class="nowsaleprice"> Z rabatem <strong>79,90 zł</strong></dd>' +
    '<dt></dt>' +
    '</dl>' +
    '<a class="buybtn" ' +
    'href="https://www.iobit.com/buy.php?product=plaff-asc123pc7990&ref='+ $ref3pc +'&aff='+ aff +'&tw='+ tw +'"' +
    'onclick="' + pcsgabc + '">' +
    'Dodaj do koszyka' +
    '</a>');
  reBuyLink();
}

//show maskB when aware that the user is closing the page
function maskB() {
  $(".mask").addClass("active");
  $(".mask").addClass("maskb");
  $(".mask .plana").addClass("mhide");
  $(".mask-box").append('<div class="planb"></div>');
  $(".planb").html("" +
    "<h2>GRATULACJE!</h2>" +
    "<p>Jesteś dzisiejszym szczęśliwym odwiedzającym! <br> Tylko przez ograniczony czas, otrzymasz <b>25% rabatu!</b></p>" +
    "<img class='off' src='" + imgSrc + "'>" +
    "<div class='buybox'>" +
    "<a class='buybtn'" +
    " href='javascript: void(0);'" +
    " onclick='maskCount(1);cycleCountdown(2);'>" +
    "WYKORZYSTAJ MOJĄ ZNIŻKĘ TERAZ" +
    "</a>" +
    "<p onclick='maskClose()'>Nie, dziękuję, chcę zapłacić pełną cenę</p>" +
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
  if(ref=='asc12trb') {
    $.ajax({
      type: "GET",
      url: "https://www.iobit.com/goto.php?id=affvsasc12&ref=paramreset&aff=paramtest&refs=asc12trialactivation",
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
});

function reBuyLink(){
  var aff = MApp(2.2).url.getParameters('aff');
  var ref = MApp(2.2).url.getParameters('ref');
  if(aff.length>0){
    $('.buybtn').each(function() {
      var buyHrefTemp = $(this).attr('href');
      var buyHref = buyHrefTemp.replace(/&aff=(.*)&/, '&aff='+aff+'&');
      var ref=MApp(2.2).url.getParameters('ref');
      var refs=MApp(2.2).url.getParameters('refs');
      if(ref=='asc12trb') {
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