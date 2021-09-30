$(function() {
  $(window).scrollWindow($(".banner .title"), $('.feature .content dl'), ("on"));
  $(window).scrollWindow($(".feature"), $('.floatlayer'), ("on"));

  $(".review dl dt .img-box").mouseover(function(event) {
    $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });

  timeInit();
  packsInit();
  countdown();
});

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};
$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$(window).on('scroll', function() {
  if ($(window).scrollTop() > $(".comparison").offset().top) {
    $('.review dl').addClass("red-round");
  } else {
    $('.review dl').removeClass("red-round");
    $('.review dl.active').addClass("red-round");
  }
});

function soldoutGift() {
  $(".banner .gift-box").addClass("expired").removeClass("active");
  $('.fl-des').html('<span class="viewNum">**</span> utenti stanno guardando ora ');
  $(".comparison tfoot th.itemc").addClass("soldout");
  $(".comparison .date").hide();
  $(".floatlayer .floatbox").attr("src", _src);
  $(".floatlayer h2").html("65% <small>DI SCONTO</small>");
  $(".floatlayer h3").css({"margin": "10px 0"});
  $(".floatlayer .buybtn").attr({"href": _href, "onclick": _ga});
  $(".floatlayer .date").hide();
}

function focus() {
  $('.bar span').append('<i class="reduce"></i>');
  setTimeout(function() {
    $(".reduce").remove();
  }, 600);
}

function settime() {
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = count1 - nowTime;
  $(".number .num strong").html("" + timeDiff + "")
}

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "itascjune_e" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    count1 = nowTime + 10;
    count2 = nowTime + 600;
    cSet(cName, count1 + '.' + count2);
  } else {
    var packsArr = arr[2].split('.');
    count1 = parseInt(packsArr[0]);
    count2 = parseInt(packsArr[1]);
  }
}

function statusCheck(){
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < count1) {
    //return 1;
    return 2;
  } else if (timeNow < count2) {
    return 2;
  } else {
    return 3;
  }
}

function statusSet(){
  var statusNow = statusCheck();
  if(statusNow==1){

  }else if(statusNow==2){
    if ($(".banner .gift-box").hasClass('before')) {
      $(".banner .gift-box").removeClass("before");
      $(".banner .gift-box .number").remove();
    }
  }else{
    if(!$(".banner .gift-box").hasClass("expired")){
      $(".banner .gift-box .number").remove();
      soldoutGift();
    }
  }
  return statusNow;
}

function getSales() {
  var packsNow;
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = count2 - nowTime;
  if(timeDiff>=595){
    packsNow=Math.ceil(timeDiff / 2)-221;
  }else{
    packsNow = Math.ceil(timeDiff / 7.83) > 0 ? Math.ceil(timeDiff / 7.83) : 0;
  }
  if(packs!=packsNow){
    if(statusCheck() != 1) {

    }
    packs=packsNow;
    focus();
  }
  $('.packsNum').html(packs);
  $('.bar span').css('width',packs*3.46+'px');
  getSalesNum(packs);

  //$.ajax({
  //  type: "GET",
  //  url: "trial.php",
  //  data:"action=getPack",
  //  success: function(res){
  //    var sales=JSON.parse(res);
  //    $("#first").html(sales.firstName);
  //    $("#last").html(sales.lastName);
  //    $(".viewNum").html(sales.viewNum);
  //  }
  //});

  if (statusCheck() != 3) {
    if(timeDiff>=595){
      setTimeout('getSales()', 2000);
    }else{
      setTimeout('getSales()', 13000);
    }
  }
}

function packsInit() {
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = count2 - nowTime;
  //packs = Math.ceil(timeDiff / 12) > 0 ? Math.ceil(timeDiff / 12) : 0;
  if(timeDiff>=595){
    packs=Math.ceil(timeDiff / 2)-221;
  }else{
    packs = Math.ceil(timeDiff / 7.83) > 0 ? Math.ceil(timeDiff / 7.83) : 0;
  }
  var statusNow=statusCheck();
  if(statusNow==3){
    packs=0;
  }
  $('.packsNum').html(packs);
  $('.bar span').css('width',packs*5.59+'px');
  getSales();
}

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2018-09-18')) / (3600 * 24 * 1000));
  var buyNum = 2379 + daysDiff * 49 + (49 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}

var countdown = function() {
  var statusNow = statusSet();
  getCycleCountdown();
  if (statusNow == 1) {
    settime();
  } else if (statusNow == 2) {
    getCycleCountdown(count2);
  }

  $('.date').each(function(){
    $(this).find('strong').eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  });
  $('.tabcount').each(function(){
    $(this).find('b').eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);;
  });
  if (statusNow != 3) {
    setTimeout("countdown(" + statusNow + ")", 1);
  }
};

function getCycleCountdown(endTime, ctype) {
  var datetime = timeCountDown(endTime, ctype);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
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
      num = num.replace(reg, "$1.$2");
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
$(function(){
  if(transData.length!==0){
    driverSet();
    compSet();
  }
  bannerSet();
});
function bannerSet() {
  var driverCount = parseInt(transData.LftDrvCount) + parseInt(transData.LftCmpCount);
  var paramTo = MApp(2.2).url.getParameters('to');
  var paragraph1 = "";
  var paragraph2 = "";
  var status=0;
  var leftDays = transData.LftTrlDay;
  switch (paramTo) {
    case "trialbuy_7":
    case "trialbuy_2":
      if (driverCount > 1) {
        paragraph1 = "<b class='nums'>"+driverCount + "</b> AGGIORNAMENTI DI DRIVER DISPONIBILI";
        paragraph2 = "Acquista ora per aggiornarli con un solo clic";
      } else {
        paragraph1 = "<b class='nums'>1</b> AGGIORNAMENTO DI DRIVER DISPONIBILE";
        paragraph2 = "Acquista ora per aggiornarlo con un solo clic";
      }
      status=1;
      break;
    case "trialbuy_3":
      break;
    case "trialbuy_9":
    case "trialbuy_4":
      if (driverCount > 0) {
        if (driverCount == 1) {
          paragraph1="1 AGGIORNAMENTO DI DRIVER DISPONIBILI";
          paragraph2 = "Acquista ora per aggiornarlo con un solo clic";
        } else {
          paragraph1 = driverCount + " AGGIORNAMENTI DI DRIVER DISPONIBILI";
          paragraph2 = "Acquista ora per aggiornarli con un solo clic";
        }
      }else {
        paragraph1 = "LA TUA VERSIONE DI PROVA DI DRIVER BOOSTER È SCADUTA!";
        paragraph2 = "Acquista ora per mantenere tutti i tuoi driver sempre aggiornati";
      }
      break;
    case "trialbuy_8":
    case "trialbuy_10":
      paragraph1="LA TUA VERSIONE DI PROVA SCADRÀ TRA <span class='days'>7</span> <span class='dayStr'>GIORNI</span>";
      paragraph2="Non farti scappare l’offerta esclusiva per gli utenti trial";
      break;
    default:
      break;
  }
  if ((paragraph1 + paragraph2).length > 0) {
    titleSet(paragraph1, paragraph2,status);
  }

  $(".days").html(leftDays);
  if(leftDays==0){
    if(paramTo=='trialbuy_10') {
      $(".title p").html("La tua versione di prova scadrà in meno di 24 ore.");
    }
    $(".comparison tbody tr:eq(1),.comparison tbody tr:eq(2),.comparison tbody tr:eq(3),.comparison tbody tr:eq(4)").find(".itema").html("Scadrà in meno di 24 ore");
  }else{
    if(leftDays==1){
      $(".dayStr").html("GIORNO");
    }
  }
}

function titleSet(paragraph1, paragraph2, status) {
  if(status==1){
    $(".title").html("<h1>" + paragraph1 + "</h1> <p>" + paragraph2 + "</p>");
  }else {
    $(".title").html("<p>" + paragraph1 + "</p> <h1>" + paragraph2 + "</h1>");
  }
}

function driverSet(){
  var drvCount = parseInt(transData.LftDrvCount);
  var cmpCount = parseInt(transData.LftCmpCount);
  var totalNum=drvCount+cmpCount;
  if(totalNum>0){
    $(".feature .driverCount").html(totalNum);
    if((drvCount>0)&&(cmpCount>0)){
      $(".feature .original").css({"display": "none"});
      $(".feature .update").css({"display": "block"});

      $(".feature .update h3 strong").text(totalNum);
      $(".feature .update .driveNum").text(drvCount);
      $(".feature .update .gameNum").text(cmpCount);

      if(drvCount==1){
        $(".five .fea-des1").html("aggiornamento");
        $(".five .fea-des2").html("disponibile");
      }
      if(cmpCount==1){
        $(".six .fea-des1").html("aggiornamento");
        $(".six .fea-des2").html("disponibile");
      }
    }else{
      if(totalNum==1){
        $(".feature").find(".driverStr").html("driver obsoleto / componente");
      }
    }
  }
}
function compSet(){
  var leftDays=parseInt(transData.LftTrlDay);
  var paramTo = MApp(2.2).url.getParameters('to');
  if(leftDays>0){
    $(".comparison .exTxt").text("Scadrà tra "+ leftDays +" "+((leftDays==1)?"giorno":"giorni"));

    if((paramTo=='trialbuy_2')||(paramTo=='trialbuy_7')){
      $(".comparison .changed.itemc").html("Illimitato");
      $(".comparison .changed.itemb").html("Illimitato");
      $(".comparison .exTxt.first").text("2 al giorno");
    }
  }else{
    $(".comparison .exTxt").text("Scaduta");
    $(".comparison .changed.itemb").html("<i class='all-icons black'>√</i>");
    $(".comparison .changed.itemc").html("<i class='all-icons red'>√</i>");
  }
}