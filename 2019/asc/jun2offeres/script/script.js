$.fn.userMouseover = function (UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};

$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$.fn.target=function (target,yoffset) {
  $(this).click(function() {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".packbox .list b").text("");
  var num = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(num).length;
  var str = num.toString();
  var box = $(".packbox");
  for (var j = 0; j < arr.length; j++) {
    list += '<strong>' + arr[j] + '</strong>';
  }
  $("div.packbox .list").html(list);
  $("b.packbox .list").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("div.packbox .list").eq(a).animate({
      marginTop: -curNum * 23,
    }, "slow");
  }
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("b.packbox .list").eq(a).animate({
      marginTop: -curNum * 20,
    }, "slow");
  }
}

function pop() {
  if(cGet('esascjun')==null){
    cSet('esascjun',1);
  }
  $(".pop-bg,.pop").addClass("on");
}
$(".close").click(function() {
  $(".pop-bg,.pop").removeClass("on").remove();
  $(".pop-small").removeClass("on").remove();
});
$(".smaller").click(function() {
    $(".pop-bg,.pop").removeClass("on");
    $(".pop-small").addClass("on");
  });
$(".larger").click(function() {
  pop();
  $(".pop-small").removeClass("on");
});
$('.review .handle li').hover(function() {
  $(this).addClass('active').siblings().removeClass('active');
  $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});

$(function () {
  packsInit();
  if(cGet('esascjun')==null){
    setTimeout('pop();packsPopInit()',20000);
  }else{
    packsPopInit();
    pop();
  }
  countdown(".right-message strong");
  $(".intro").target($(".comparison"),0);
  $("[data-name^='pc']").on("click",function(){
      var dataName = $(this).attr("data-name");
      var dataNum = $(this).attr("data-num");
      $("[data-name=\'" + dataName + "\']").addClass("active"); 
      $("[data-name^='pc']:not([data-name=\'" + dataName + "\'])").removeClass("active");
      if(dataNum==0) {
        $(".banner .content").addClass("three-box");
        $(".bottombuy .imgbox").removeClass("one-pc")
        $(".banner .price strong,.bottombuy .price strong").html("19,99€")
        $(".banner .price del,.bottombuy .price del").html("119,93€")
        $(".banner .buybtn,.bottombuy .buybtn").attr("href",$(".betweenbuy  .buybtn").attr("href"));
        $(".banner .buybtn,.bottombuy .buybtn").attr("onclick",$(".betweenbuy  .buybtn").attr("onclick"));
        $(".right-message h4").html("Elige la solución de optimización completa <br> para que tu PC funcione como si fuera nuevo")
       
         setTimeout(function () {
           focus()
        }, 500);

      }
      else {
        $(".banner .content").removeClass("three-box");
        $(".bottombuy .imgbox").addClass("one-pc")
        $(".banner .price strong,.bottombuy .price strong").html("16,99€")
        $(".banner .price del,.bottombuy .price del").html("29,99€ ")
         $(".right-message h4").html("Elige la solución adecuada <br> para que optimice tu PC lento")
        $(".banner .buybtn,.bottombuy .buybtn").attr("href","https://www.iobit.com/buy.php?product=es-asc121pc1699&ref=es_asc121pcpurchase1906&refs=es_purchase_asc&tw=-8");
        $(".banner .buybtn,.bottombuy .buybtn").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1pc1906-es')  ");

      }
    });
});
var countdown = function (countdown1){
  getCycleCountdown();
  $(countdown1).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  //$(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout("countdown('"+ countdown1 +"')", 1);
};

function getCycleCountdown () {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function focus() {
  $(".reduce").css({ "opacity": 1, "top": 80, "zIndex": 2}).animate({ "opacity": 0, "top": 20, "zIndex": -9}, 1000);
}

function focusPop(){
  $(".pop .reduce-number").css({ "opacity": 1, "top": -25, "zIndex": 2}).animate({ "opacity": 0, "top": -50, "zIndex": -9}, 1000);
  $(".pop-small .reduce-number").css({ "opacity": 1, "top": -13, "zIndex": 2}).animate({ "opacity": 0, "top": -23, "zIndex": -9}, 1000);
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

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function packsInit() {
  var date = new Date();
  var cName = "esascjun_p" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr === null) {
    packs = 90;
  } else {
    packs = arr[2];
  }
  $(".packsNum").html(packs);
  getSalesNum(packs);
  setTimeout('getSales()',getReTime());
}

function packsPopInit(){
  var cName="esascjun_pop";
  packsPop=cGet(cName);
  if(packsPop==null){
    packsPop=39;
  }
  flipNum(packsPop,2);
  setTimeout("getSalesPop()",getReTime(1));
}

function getSalesPop(){
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "jun2offeres.php",
    data: "action=getPacks&pop=1&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if(sales.packsNum!=packsPop) {
        focusPop();
        packsPop = sales.packsNum;
        if (!isNaN(packsPop)) {
          flipNum(packsPop,2);
        }
      }
    }
  });
  setTimeout('getSalesPop()',getReTime(1));
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "jun2offeres.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs=sales.packsNum;
        focus();
        $(".packsNum").html(packs);
        getSalesNum(packs);
      }
    }
  });
  setTimeout('getSales()',getReTime());
}

function getReTime(isPop){
  var reTime=isPop?15:20;
  var countPacks=isPop?packsPop:packs;
  if(isPop==1){
    if(countPacks>34){
      reTime=5;
    }else if(countPacks>20){
      reTime=10;
    }
  }else {
    if (packs > 80) {
      reTime = 5;
    } else if (packs > 33) {
      reTime = 10;
    }
  }
  return reTime*1000;
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
function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2019-06-19')) / (3600 * 24 * 1000));
  var buyNum = 66078707 + daysDiff * 39 + (39 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}

