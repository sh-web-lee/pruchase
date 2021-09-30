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

function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .scroll-tick").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".banner .scroll-tick").eq(a).animate({
      marginTop: -(9 - curNum) * 50,
    }, "slow");
  }
  $('.packsNum').html(num);
}

function zoomout() {
  $(".banner .pop").addClass("zoomout");
  setTimeout(function() {
    $(".banner .pop").removeClass("zoomout");
  }, 800);
}

$(function() {
  $(window).scrollWindow($(".banner .title"), $('.feature .content dl'), ("on"));
  $(window).scrollWindow($(".feature"), $('.floatlayer'), ("on"));
  $('#dg-container').gallery();
  viewCheck();
  packsInit();
});

function packsInit(){
  var date = new Date();
  var cName = "dedbtrial" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 99;
  } else {
    packs = arr[2];
  }
  getSalesNum(packs);
  flipNum(packs,2);
  timeCheck();
  if(packs==0){
    if(!$('.large-box').hasClass('soldout')){
      // soldOut();
    }
  }else {
    //numInit(packs,2);
    setTimeout('getSales()', reTime * 1000);
  }
}

function viewCheck(){
  var date = new Date();
  var dateToday=date.getDate();
  var cName = "dedbmarv";
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  pageView=(arr!=null);
  if((arr==null)||((arr!=null)&&(arr[2]==dateToday))){
    pageView=false;
    cSet(cName,dateToday);
  }else{
    pageView=true;
  }
}

function cSet(name,value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function getSalesNum(packsNow) {
  var buyNum=200-packsNow;
  $('.buynum').html(commafy(buyNum));
}

function timeCheck() {
  reTime=7;
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "trial.php",
    data: "action=getPacks&d=" + date.getDate()+'&pageView='+(pageView?1:0),
    success: function (res) {
      var sales = JSON.parse(res);
      if(sales.packsNum!=packs) {
        packs = sales.packsNum;
        if(packs==0){
          if(!$('.large-box').hasClass('soldout')){
            // soldOut();
          }
        }
        flipNum(packs,2);
        getSalesNum(packs);
        if(!pageView){
          timeCheck();
        }
      }
    }
  });
  setTimeout('getSales()', reTime * 1000);
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

$(function(){
  if(transData.length!==0){
    driverSet();
    compSet();
  }
  bannerSet();
});

//add trialOver by 2020-07-22
function trialOver() {
  $(".comparison .exTxt").text("Abgelaufen");
  $(".comparison .changed.itemb").html("<i class='all-icons black'>√</i>");
  $(".comparison .changed.itemc").html("<i class='all-icons red'>√</i>");
}

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
        paragraph1 = "<b class='nums'>"+driverCount + "</b> Treiberupdates verfügbar";
        paragraph2 = "Kaufen Sie jetzt die Pro Version, um alle Treiber mit 1 Klick zu aktualisieren";
      } else {
        paragraph1 = "<b class='nums'>1</b> Treiberupdate verfügbar";
        paragraph2 = "Kaufen Sie jetzt die Pro Version, um Updates mit 1 Klick vorzunehmen";
      }
      status=1;
      break;
    case "trialbuy_3":
      break;
    case "trialbuy_9":
    case "trialbuy_4":
      trialOver();
      paragraph1 = "Ihre Driver Booster Testversion ist abgelaufen";
      if (driverCount > 0) {
        paragraph2 = driverCount + " veraltete Treiber gefunden. Kaufen Sie jetzt um die mit 1 Klick upzudaten";
      } else {
        paragraph2 = "Kaufen Sie jetzt die Pro Version, um ihre Treiber aktuell zu halten";
      }
      break;
    case "trialbuy_8":
    case "trialbuy_10":
      paragraph1="Ihre Testversion endet in <span class='days'>7</span> <span class='dayStr'>Tagen</span>.";
      paragraph2="Verpassen Sie nicht unser Angebot exklusiv für Kunden der Testversion";
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
      $(".title p:eq(0)").html("Ihre Testversion wird in weniger als 24 Stunden ablaufen");
    }
    $(".comparison tbody tr:eq(1),.comparison tbody tr:eq(2),.comparison tbody tr:eq(3),.comparison tbody tr:eq(4)").find(".itema").html("＜24 Stunden");
  }else{
    if(leftDays==1){
      $(".dayStr").html("tag");
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
    $(".driverCount").html(totalNum);
    if((drvCount>0)&&(cmpCount>0)){
      $(".feature .original").css({"display": "none"});
      $(".feature .update").css({"display": "block"});
      $(".driveNum").html(drvCount);
      $(".gameNum").html(cmpCount);
    }
  }
}
function compSet(){
  var leftDays=parseInt(transData.LftTrlDay);
  if(leftDays>0){
    var paramTo = MApp(2.2).url.getParameters('to');
    $(".comparison .exTxt").text("Läuft in "+leftDays+" "+((leftDays==1)?"Tag":"Tagen")+" ab");
    if((paramTo=='trialbuy_2')||(paramTo=='trialbuy_7')){
      $(".comparison .exTxt.first").text("2 pro Tag");
      $(".comparison .changed.itemb").html("Unbegrenzt");
      $(".comparison .changed.itemc").html("Unbegrenzt");
    }
  }else{
    $(".comparison .exTxt").text("Abgelaufen");
    $(".comparison .changed.itemb").html("<i class='all-icons black'>√</i>");
    $(".comparison .changed.itemc").html("<i class='all-icons red'>√</i>");
  }
}