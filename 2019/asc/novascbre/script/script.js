function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');

function animateNumber(select, number) {
  $(select).prop('number',  10).animateNumber({      
    number: number,
    numberStep:  comma_separator_number_step
  }, 2000);
}

function numberJump() {
  $(".change-num").prop('number', 50).animateNumber({
    number: 100,
  }, 1000);
}

// flipNum(48, 4);
function flipNum(num, length) {
  $(".packsNum").html(num);
  $(".listbox").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var _list = '';
  var len = String(number).length;
  var str = number.toString();
  var _box = $(".flipNum");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<div class="listbox"><div class="list"></div></div>'));
    } else {
      createobj = $('<div class="listbox"><div class="list"></div></div>');
    }
    _box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    _list += '<b>' + arr[j] + '</b>';
  }
  $(".list").append(_list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#flip .list").eq(a).animate({
      marginTop: -curNum * 46,
    }, "slow");
    $("#fliptwo .list").eq(a).animate({
      marginTop: -curNum * 46,
    }, "slow");
  }
}

function change05() {
  var c6 = new TimelineMax();
  c6.set($('.banner .chartbox'), {
    opacity: 0,
    y: -100,
    onComplete: function() {
      TweenLite.to($('.banner .chartbox'), 1, {
        opacity: 1,
        y: 0,
        onComplete: function() {
          TweenLite.to($('.banner .chartbox.center'), 0.6, {
            y: -50,
          }, "-=0.5");
          TweenLite.to($('.banner .chartbox.center'), 0.8, {
            delay: 0.4,
            y: 0,
            ease: Bounce.easeOut,
          }, "-=0.5");
        },
      });
    },
  });
}

// soldOut();
function soldOut() {
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".price").addClass("soldout");
  $(".change-price").html("$<big>14</big>.77");
  $(".price strong").html("$<b>14</b>.77");
  $(".discount,.buybtn,.price,.feature,.numbox").removeClass("soldout").addClass("soldout");
  $(".banner .price strong").after("<del>$49.99</del>");
  $("p.change").html("Sorry, 75% OFF offer is sold out");
  $(".banner .buybtn small").text("- $14.77");
  $(".banner .number").html("$0 preorder reservations are full today. Don't miss out <strong>65%</strong> discount again!").addClass("soldout");
  $(".floatlayer .number").html("Don't miss out <strong>65%</strong> discount again!").addClass("soldout");
  $(".buybtn").attr({
    "href": 'https://www.iobit.com/buy.php?product=2019asc3pc1477&ref=br_asce1477&refs=purchase_ascbf&tw=' + tw,
    "onclick": "ga('send', 'event', 'ascebuysold', 'buy', 'ascepurchase-bf');"
  });
}

//feature
function fillFeature(asc) {
  var title = "";
  var divPad = 0;
  var divWidth = 0;
  var dlWidth = 0;
  var dlNum = 0;
  var dlMessage = {};
  var html = "";
  switch (asc){
    case 13: {
      title = "So Come Back to Advanced SystemCare 13 PRO, for:";
      dlNum = 3;
      divPad = "0 40px";
      divWidth = 340;
      dlWidth = 272;
      dlMessage = {
        iconsClassName: ["icon05", "icon06", "icon02"],
        h3Text: ["Cleaner PC", "Faster PC", "Safer PC"],
        pText: ["No useless files and registries can take up your disk space.", "Optimize startup items, system resources and browser settings easily.", "Block external threats and protect your online privacy at the same time."]
      };
    } break;
    case 12: {
      title = "Come Back with Us, New PRO Version <span>Helps More</span>:";
      dlNum = 3;
      divPad = "0 40px";
      divWidth = 340;
      dlWidth = 226;
      dlMessage = {
        iconsClassName: ["icon01", "icon02", "icon03"],
        h3Text: ["4GB<small>*</small> More", "195% More", "60% More"],
        pText: ["<b>disk space released</b>", "<b>spyware detected</b>", "<b>software kept updated</b>"]
      };
    } break;
    case 11: {
      title = "Come Back with Us, New PRO Version <span>Helps More</span>: ";
      dlNum = 4;
      divPad = "0 0";
      divWidth = 275;
      dlWidth = 226;
      dlMessage = {
        iconsClassName: ["icon01", "icon02", "icon03", "icon04"],
        h3Text: ["4GB<small>*</small> More", "195% More", "90% More", "Fully"],
        pText: ["<b>disk space released</b>", "<b>spyware detected</b>", "<b>software kept updated</b>", "<b>protected privacy</b>"]
      };
    } break;
  }
  $(".feature h2").html(title);
  for (var i=0;i<dlNum;i++) {
    html += "<div><dl>" +
      "<dt><span class="+ dlMessage.iconsClassName[i] +"></span></dt>" +
      "<dd>" +
      "<h3>"+ dlMessage.h3Text[i] +"</h3>" +
      "<p>"+ dlMessage.pText[i] +"</p>" +
      "</dd>" +
      "</dl></div>"
  }
  $(".feature .container").html(html).css({"padding": divPad});
  $(".feature .container > div").width(divWidth);
  $(".feature .container > div dl").width(dlWidth);
}

function prev() {
  $(".dg-prev").click(function() {

    var message = $('.dg-container ul li:last');
    $(".review .reviews dd p").removeClass("on");
    var index = $(".dg-container ul li").length;

    $('.dg-container ul li:eq(0)').removeClass("first");
    $('.dg-container ul li:eq(1)').removeClass("two");
    $('.dg-container ul li:eq(2)').removeClass("three");
    $('.dg-container ul li:eq(3)').removeClass("active");
    $('.dg-container ul li:eq(4)').removeClass("four");
    $('.dg-container ul li:eq(5)').removeClass("five");
    $('.dg-container ul li').removeClass("last");

    $('.dg-container ul li:eq(0)').before(message);
    $('.dg-container ul li:eq(0)').addClass("first").addClass("on");
    $('.dg-container ul li:eq(1)').addClass("two");
    $('.dg-container ul li:eq(2)').addClass("three");
    $('.dg-container ul li:eq(3)').addClass("active");
    $('.dg-container ul li:eq(4)').addClass("four");
    $('.dg-container ul li:eq(5)').addClass("five");

    var num = $('.dg-container ul li.active').attr("data-num");
    $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
    setTimeout('$(".review .reviews dd p").eq(' + num + ').addClass("on");', 100);
  });
}

function next() {
  $(".dg-next").click(function() {
    $(".review .reviews dd p").removeClass("on");
    var message = $('.dg-container ul li:eq(0)');
    $('.dg-container ul li:eq(0)').removeClass("first");
    $('.dg-container ul li:eq(1)').removeClass("two");
    $('.dg-container ul li:eq(2)').removeClass("three");
    $('.dg-container ul li:eq(3)').removeClass("active");
    $('.dg-container ul li:eq(4)').removeClass("four");
    $('.dg-container ul li:eq(5)').removeClass("five");

    $('.dg-container ul').find('li:first').appendTo($('.dg-container ul'));

    $('.dg-container ul li:eq(0)').addClass("first");
    $('.dg-container ul li:eq(1)').addClass("two");
    $('.dg-container ul li:eq(2)').addClass("three");
    $('.dg-container ul li:eq(3)').addClass("active");
    $('.dg-container ul li:eq(4)').addClass("four");
    $('.dg-container ul li:eq(5)').addClass("five");

    var num = $('.dg-container ul li.active').attr("data-num");
    $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
    setTimeout('$(".review .reviews dd p").eq(' + num + ').addClass("on");', 100);
  });
}

$(window).on('scroll', function() {

  if ($(window).scrollTop() > $(".intro").offset().top - 100) {
    $(".intro .besom").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".enjoy").offset().top - 140) {
    $(".enjoy .forbid").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".feature h2").offset().top - 280) {
    $(".feature dl").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".review-wrap").offset().top - 100) {
    animateNumber('.present h4.first', 30000000);
    animateNumber('.present h4.two', 2666667);
  }

  if ($(window).scrollTop() < $(".banner .buybtn").offset().top) {
    $('.floatlayer').removeClass('on');
  } else {
    $('.floatlayer').addClass('on');
  }
});

function packsInit() {
  var cName = "enascnovbrb_p";
  packs = cGet(cName);
  if (packs === 0) {
    soldOut();
  } else {
    if(packs==null){
      getSales(2);
    }else {
      getSales(1);
    }
  }
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

function getSales(isInit) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "brasce.php",
    data: "action=getPacks&isInit=" + isInit + "&d=" + date.getDate()+"&packsNum="+packsNum,
    success: function(res) {
      var sales = JSON.parse(res);
      if ((sales.packsNum != packs) || (isInit)) {
        packs = sales.packsNum;
        if (isInit) {
          flipNum(sales.packsNum, 4, 1000);
        } else {
          flipNum(sales.packsNum, 4, 100);
        }
      }
      if (packs > 0) {
        setTimeout('getSales(0)', getRetime(isInit));
      } else {
        flipNum(0,4);
        if (!$(".discount,.buybtn,.price,.feature,.numbox").hasClass("soldout")) {
          soldOut();
        }
      }
    }
  });
}

function getRetime(isInit){
  if(isInit==2){
    return 1000;
  }else {
    var packsNumTotal = cGet('enascnovbrb_t');
    if (packsNumTotal > 1) {
      return (900 / packsNumTotal) * 1000;
    } else {
      return 20000;
    }
  }
}

function getViewNum() {
  $.ajax({
    type: "GET",
    url: "brasce.php",
    data: "action=getViewNum",
    success: function(res) {
      $('.viewNum').html(res);
    }
  });
  setTimeout('getViewNum()', 15000);
}

$(function() {
  prev();
  next();

  setTimeout(change05(), 500);

   packsInit(1);

  //feature
  //fillFeature(11);

  setTimeout('getViewNum()', 15000);
});

function getDateStr(daysArr,isBef){
  var tempArr=[];
  for(var i=0;i<daysArr.length;i++){
    var exit=0;
    for(var j=0;j<tempArr.length;j++){
      if(tempArr[j][0]==daysArr[i][0]){
        tempArr[j][1]+='<i></i>'+daysArr[i][1];
        exit=1;
      }
    }
    if(exit==0){
      tempArr.push([daysArr[i][0],daysArr[i][1]]);
    }
  }
  //return tempArr;
  if(tempArr.length==1){
    if(isBef){
      return daysArr[0][0] + ' ' + daysArr[0][1]+' - '+daysArr[1][1];
    }else {
      return tempArr[0][0] + ' ' + tempArr[0][1];
    }
  }else{
    if(isBef){
      return daysArr[0][0] + ' ' + daysArr[0][1] + ' - ' + daysArr[1][0] + ' ' + daysArr[1][1];
    }else {
      return daysArr[0][0] + ' ' + daysArr[0][1] + ' - ' + daysArr[3][0] + ' ' + daysArr[3][1];
    }
  }

}

function getMonthStr(i){
  var month=["Jan.","Feb.","Mar.","Apr.","May","Jun.","Jul.","Aug.","Sep.","Oct.","Nov.","Dec."];
  return month[i-1];
}

function getDate(AddDayCount){
  var dd = new Date();
  dd.setDate(dd.getDate()+AddDayCount);
  var y = dd.getFullYear();
  var m = (dd.getMonth()+1)<10?"0"+(dd.getMonth()+1):(dd.getMonth()+1);
  var d = dd.getDate()<10?"0"+dd.getDate():dd.getDate();
  return [getMonthStr(parseInt(m)),d];
}

$(function(){
  //var currentDayArr=[getDate(0)];
  var befDaysArr=[["Nov.","18"],getDate(-1)];
  var afterDaysArr=[getDate(1),["Dec.","30"]];

  var befDaysStr=getDateStr(befDaysArr,1);
  var afterDaysStr=getDateStr(afterDaysArr,1);

  $(".chartbox.two .date-str").html(befDaysStr);
  $(".chartbox.four .date-str").html(afterDaysStr);
});