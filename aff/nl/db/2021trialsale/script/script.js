
$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
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

$(function() {
  $(window).scrollWindow($(".banner .title"), $('.feature .content dl'), ("on"));
  $(window).scrollWindow($(".feature"), $('.floatlayer'), ("on"));
  packsInit();
  $('#dg-container').gallery();
});

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  $(".packsNum").html(num);
}

function zoomout() {
  $(".banner .center .imgbox").append("<span class='dissolve'></span><span class='numreduce'></span>");
  setTimeout(function() {
    $(".banner .imgbox .dissolve").remove();
    $(".banner .imgbox .numreduce").remove();
  }, 1200);
}

function packsInit() {
  var date = new Date();
  var cName = "nldbaug" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 50;
  } else {
    packs = arr[2];
  }
  getSalesNum(packs);
  flipNum(packs, 2);
  setTimeout('getSales()', 11500);
}

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2017-11-17')) / (3600 * 24 * 1000));
  var buyNum = 5202235 + daysDiff * 56 + (56 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "trial.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        flipNum(packs, 2);
        getSalesNum(packs);
        setTimeout('zoomout()', 500);
        //timeCheck();
      }
    }
  });
  setTimeout('getSales()', 11500);
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
        paragraph1 = "<b class='nums'>"+driverCount + "</b> drivers staan voor u klaar om te updaten";
        paragraph2 = "Koop nu om ze in 1 klik bij te werken";
      } else {
        paragraph1 = "<b class='nums'>1</b> driver staat voor u klaar om te updaten";
        paragraph2 = "Koop nu om ‘m in 1 klik bij te werken";
      }
      status=1;
      break;
    case "trialbuy_3":
      break;
    case "trialbuy_9":
    case "trialbuy_4":
      paragraph1="Uw Driver Booster Proefversie is verlopen!";
      if (driverCount > 0) {
        paragraph2 = driverCount+" verouderde "+((driverCount==1)?"Driver":"Drivers")+". Koop Nu om ze in 1 klik bij te werken";
      }else {
        paragraph2 = "Koop Nu om uw drivers up-to-date te houden!";
      }
      break;
    case "trialbuy_8":
    case "trialbuy_10":
      paragraph1="Uw proefversie verloopt over <span class='days'>7</span> <span class='dayStr'>dagen</span>!";
      paragraph2="Pak deze exclusieve kans voor proefversiegebruikers!";
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
      $(".title p:eq(0)").html("Uw proefversie verloopt over minder dan 24 uur");
    }
    $(".comparison tbody tr:eq(1),.comparison tbody tr:eq(2),.comparison tbody tr:eq(3),.comparison tbody tr:eq(4)").find(".itema").html("Vervalt binnen 24 uur");
  }else{
    if(leftDays==1){
      $(".dayStr").html("dag");
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
  console.log(totalNum);
  if(totalNum>0){
    $(".feature .driverCount").html(totalNum);
    if((drvCount>0)&&(cmpCount>0)){
      $(".feature .original").css({"display": "none"});
      $(".feature .update").css({"display": "block"});

      $(".feature .update h3 strong").text(totalNum);
      $(".feature .update .driveNum").text(drvCount);
      $(".feature .update .gameNum").text(cmpCount);
    }else{
      if(totalNum==1){
        $(".feature .original h3").html("Update <strong>"+ totalNum +"</strong> verouderde driver / gamecomponent voor betere PC-prestaties en game-ervaring. <br>");
      }
    }
  }
}
function compSet(){
  var leftDays=parseInt(transData.LftTrlDay);
  var paramTo = MApp(2.2).url.getParameters('to');
  if(leftDays>0){
    $(".comparison .exTxt").text("Vervalt binnen "+leftDays+((leftDays==1)?" dag":" dagen"));
    if((paramTo=='trialbuy_2')||(paramTo=='trialbuy_7')) {
      $(".comparison .exTxt.first").text("2 per dag");
    }else{
      $(".comparison .changed.itemb").html("<i class='all-icons black'>√</i>");
      $(".comparison .changed.itemc").html("<i class='all-icons red'>√</i>");
    }
  }else{
    $(".comparison .exTxt").text("Scaduta");
    $(".comparison .changed.itemb").html("<i class='all-icons black'>√</i>");
    $(".comparison .changed.itemc").html("<i class='all-icons red'>√</i>");
  }
}