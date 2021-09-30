"use strict";

$.fn.target = function (target, yoffset) {
  $(this).click(function () {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate(
      {
        scrollTop: Theigth,
      },
      "slow"
    );
  });
};
var countTime =0
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
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "iusemmer2020" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 900;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
}
var d,h,i,s,mi
function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    d = Math.floor(remainingTime / (24 * 60 * 60));
    h = Math.floor(remainingTime / (60 * 60) % 24);
    i = Math.floor(remainingTime / 60 % 60);
    s = Math.floor(remainingTime % 60);
    mi = Math.floor((999 - dateObj.getMilliseconds()) / 10);
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}
var countdown = function(countdown) {
  var statusNow = statusSet();
  getCycleCountdown(countTime);
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if (statusNow == 1) {
    setTimeout("countdown('" + countdown + "')", 1);
  }
};

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 2);
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$(".banner").hasClass('"sold"')) {
      soldout();
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

function soldout(){
  $('.banlist.big').addClass('soldout')
  $('.giftbox .wrapper').addClass('soldout')
  $('.banner .banlist.big').addClass('soldout')
  $('.floatlayer .text h3').html('Ottieni ancora il 65% di sconto!')
  $('.floatlayer .text h2').html('Elimina facilmente tutti i problemi dei tuoi driver!')
  $('.floatlayer .price del').text('74,78€')
  var options = {
    ga:$('.banlist ').eq(0).find('.buybtn').attr('onclick'),
    href:$('.banlist ').eq(0).find('.buybtn').attr('href'),
    src:$('.floatlayer .left > img').attr('src')
  }
  $('.floatlayer .buybtn').attr({"href": options.href, "onclick": options.ga}).text('Acquista ora');
  $('.floatlayer .left > img').attr('src', options.src.replace(/float/,'db'))
}

$(".buybtn").on('click', function () {
  cSet('clickbuy', new Date().getTime());
})

$(function () {
  // packs = 321;
  timeInit();
  lightCtrl();
  countdown((".date strong b"));
  //review
  $("#dg-container").gallery();

  $(".db-more").target($(".comparison"), 0);

  $(window).on("scroll", function () {
    var featureIcon = $(".feature-txt dl,.feature-icon");

    if ($(window).scrollTop() > $(".feature h2").offset().top - 360) {
      if (!featureIcon.hasClass("on")) featureIcon.addClass("on");
    } else {
      featureIcon.removeClass("on");
    }

    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $(".floatlayer").addClass("on");
    } else {
      $(".floatlayer").removeClass("on");
    }
  });

  $(".popbox .close").click(function () {
    $(".popbox").remove();
  });
});

// function reduceNum(num) {
//   $(".zoomout").remove();
//   $(".reduce .first").text(num);
//   $(".reduce").append('<span class="zoomout">' + num + "</span>");
//   setTimeout('$(".zoomout").addClass("on");', 300);
// }

// function getViewNum(viewNow) {
//   $(".viewNum").html(viewNow);
// }

// function getSales() {
//   var date = new Date();
//   $.ajax({
//     type: "GET",
//     url: "xmas.php",
//     data: "action=getPacks&d=" + date.getDate(),
//     success: function (res) {
//       var sales = JSON.parse(res);
//         var packs = sales.packsNum;
//         $(".gift b").html(packs);
//         $(".floatlayer .text b").html(packs);
//         if(packs > 3){
//           setTimeout("getSales()",timeCheck());
//         }
//     },
//   });
// }

// function timeCheck() {
//   var packsNumTotal = cGet('optimizedtext2020_t');
//   if(packsNumTotal <= 80 && packsNumTotal >= 70){
//     var retime = (Math.random() > 0.5) ? 5.7 : 7.7;
//   }else{
//     var retime = (Math.random() > 0.5) ? 4.8 : 6.8;
//   }
//   return retime * 1000;
// }

// function cSet(cName, cVal) {
//   var exp = new Date();
//   cName = cName + exp.getDate();
//   var Days = 2;
//   exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
//   document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
// }

// function cGet(name) {
//   var exp = new Date();
//   name = name + exp.getDate();
//   var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
//   if (arr = document.cookie.match(reg))
//     return unescape(arr[2]);
//   else
//     return null;
// }

// //************************************************************************************
function lightCtrl() {
  let lightIndex = 0;
  var container = $("#light-ctrl");
  setInterval(() => {
    container.find(".light-" + lightIndex).removeClass("on");
    lightIndex = lightIndex === 1 ? (lightIndex = 0) : 1;
    container.find(".light-" + lightIndex).addClass("on");
  }, 1000);
}

// // popup
// var popupContainer = $("#popup");
// popupContainer.on("click", ".close", function () {
//   popupContainer.removeClass("on");
// });

// function countpop(){
//   var popcount = cGet('optimizedpop2020');
//   if(popcount == null){
//     popcount = 60;
//   }else{
//     if(popcount > 0){
//       popcount --;
//       var one = popcount % 10;
//       var ten = (popcount - one) / 10;
//       $('#popup h3 b').eq(0).html(ten).end().eq(1).html(one).end();
//     }else{
//       popcount = 0
//       popupContainer.removeClass("on");
//     }
//   }
//   cSet('optimizedpop2020',popcount);
//   setTimeout('countpop()',1000);
// }