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

var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('"+ countdown +"')", 1);
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
  $('p.notes').append('<span class="reduce">-1</span>');
  $('.left-message').append('<span class="reduce">-1</span>');
  var tReduce = new TimelineLite();
  tReduce.to('.reduce', .8, {
    y: -20,
    // autoAlpha: 0,
    onComplete: function () {
      $('.reduce').remove();
    }
  });
  $(".banner-reduce").css({ "opacity": 1, "top": -20, "zIndex": 8}).animate({ "opacity": 0, "top": -80, "zIndex": -9}, 1000);
}

function closeFloat() {
  $(".float").removeClass("on").hide();
}

function packsInit(){
  var date = new Date();
  var cName = "esascoct" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs=59;
  } else {
    packs=arr[2];
  }
  $('.packsNum').html(packs);

  if(packs>48){
    setTimeout('getPacks()',5000);
  }else if(packs>24){
    setTimeout('getPacks()', 20000);
  }else if(packs>0){
    setTimeout('getPacks()',6000);
  }

  setTimeout('getBuyUser()', 20000);
  getSalesNum(packs);
}

function getPacks(){
  var date=new Date();
  $.ajax({
    type:'GET',
    url:'octnavidad2018.php',
    data:'action=getSales&d='+date.getDate(),
    success:function(sPacks){
      if(!isNaN(sPacks)){
        if(sPacks!=packs) {
          packs=sPacks;
          $('.packsNum').html(sPacks);
          focus();
          getSalesNum(packs);
        }
      }
    }
  });
  if(packs>48){
    setTimeout('getPacks()',5000);
  }else if(packs>24){
    setTimeout('getPacks()', 20000);
  }else if(packs>0){
    setTimeout('getPacks()',6000);
  }
}

function getBuyUser(){
  $.ajax({
    type:'GET',
    url:'octnavidad2018.php',
    data:'action=getUser',
    success:function(res){
      var sales=JSON.parse(res);
      var scrollHeight = $(".banner .buybtn").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $(".float").removeClass('on');
        setTimeout("$('.float').addClass('on');", 800);
      }
      $("#firstName").html(sales.firstName);
      $("#lastName").html(sales.lastName);
    }
  });
  setTimeout('getBuyUser()', 20000);
}

$(function(){
  packsInit();
});

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2018-10-26')) / (3600 * 24 * 1000));
  var buyNum = 7985909 + daysDiff * 59 + (59 - packsNow);
  $('.buyNum').html(commafy(buyNum));
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