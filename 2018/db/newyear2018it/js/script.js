
timeInit();
$.fn.target=function (target,yoffset) {
  $(this).click(function() {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
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
var countdown = function (countdown,tType){
    statusSet();
    if(tType==1){
        getCycleCountdown(count1);
    }else if(tType==2){
        getCycleCountdown(count2);
    }
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('"+ countdown +"',"+tType+")", 1);
};
function getCycleCountdown (endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}
(function ($) {
  $.fn.isOnScreen = function(x, y){
    if(x == null || typeof x == 'undefined') x = 1;
    if(y == null || typeof y == 'undefined') y = 1;
    var win = $(window);
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var height = this.outerHeight();
    var width = this.outerWidth();
    if(!width || !height){
        return false;
    }
    var bounds = this.offset();
    bounds.right = bounds.left + width;
    bounds.bottom = bounds.top + height;
    var visible = (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    if(!visible){
        return false;
    }
    var deltas = {
        top : Math.min( 1, ( bounds.bottom - viewport.top ) / height),
        bottom : Math.min(1, ( viewport.bottom - bounds.top ) / height),
        left : Math.min(1, ( bounds.right - viewport.left ) / width),
        right : Math.min(1, ( viewport.right - bounds.left ) / width)
    };
    return (deltas.left * deltas.right) >= x && (deltas.top * deltas.bottom) >= y;

  };
})(jQuery);
function soldoutGift() {
  $(".gift-box").removeClass("active").addClass("expired");
  $(".three-box").addClass("active");
  if($(".bottom-buy ul li").eq(1).hasClass("active")) {
    threePc();
    $(".gift-message dl").addClass("disable");
    $(".gift-message dl").eq(0).removeClass("disable");
    $(".bottom-buy ul li").eq(2).addClass("active");
  }
   $(".bottom-buy ul li").eq(1).removeClass("active").addClass("expired");
}
function soldoutThree(){
 $(".three-box").removeClass("active").addClass("expired");
 $(".bottom-buy ul li").eq(2).removeClass("active").addClass("expired");
 $(".one-pc").addClass("active");
 $(".gift-message dl").addClass("disable");
  onePc()
}
function onePc() {
  $(".bottom-buy .buybtn").attr("href","http://www.iobit.com/buy.php?product=it-db51pc2199&ref=it_db51pc2199purchase1711"+refStr+"&refs=it_purchase_db");
  $(".bottom-buy .buybtn").attr("onclick","ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1PC1711-it')");
  $(".bottom-buy dl del").html("€59,85");
  $(".bottom-buy dl dd").eq(0).html("Risparmi €37,86");
  $(".bottom-buy dl strong").html("€21,99");
  $(".bottom-buy ul li").eq(0).addClass("active").siblings().removeClass("active");
  $(".bottom-buy .img-box").removeClass("three-pc").removeClass("three-gift");

}
function threePc() {
  $(".bottom-buy .buybtn").attr("href","http://www.iobit.com/buy.php?product=it-db5sd3pc2499&ref=it_db53pcsd2499purchase1711"+refStr+"&refs=it_purchase_db");
  $(".bottom-buy .buybtn").attr("onclick","ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsd1711-it')");
  $(".bottom-buy dl del").html("€104,84");
  $(".bottom-buy dl dd").eq(0).html("Risparmi €79,85");
  $(".bottom-buy dl strong").html("€24,99");
  $(".bottom-buy ul li").eq(2).addClass("active").siblings().removeClass("active");
  $(".bottom-buy .img-box").addClass("three-pc").removeClass("three-gift");

}
function threePcAndGift() {
  $(".bottom-buy .buybtn").attr("href","http://www.iobit.com/buy.php?product=it-db5iusdpf3pc2499&ref=it_db53pciusdpf2499purchase1711"+refStr+"&refs=it_purchase_db");
  $(".bottom-buy .buybtn").attr("onclick","ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCiusdpf1711-it')");
  $(".bottom-buy dl del").html("€174,78");
  $(".bottom-buy dl dd").eq(0).html("Risparmi €149,79");
  $(".bottom-buy dl strong").html("€24,99");
  $(".bottom-buy ul li").eq(1).addClass("active").siblings().removeClass("active");
  $(".bottom-buy .img-box").addClass("three-gift").removeClass("three-pc");

}
$(window).on('scroll', function () {
   if($('.db-message').isOnScreen(.2,.2)) {
    $('.db-message dl').addClass("on");
   }
});
countdown((".gift-box p strong"),1);
countdown((".three-box p strong"),2);
$(".review dl dt .img-box").mouseover(function(event) {
  $(this).parent().parent().addClass("active").siblings().removeClass("active");
});
$(".top-header a").target($(".header"),0);
$(window).on('scroll', function () {
  if ($(window).scrollTop() > $(".gift-message").offset().top) {
    $('.review dl').addClass("red-round");
  }else {
    $('.review dl').removeClass("red-round");
    $('.review dl.active').addClass("red-round");
  }
});
//countdown((".countdown strong"));
$(window).scrollWindow($(".header .buybtn"),$('.floatlayer'),("on"));
$("#floatlayer .close").on('click', function (event) {
  $("#floatlayer").hide();
});
$(".bottom-buy ul li").mouseover(function(){
  var num=$(this).index();
  if($(".bottom-buy ul li").hasClass("expired")) {
   if($(".bottom-buy ul li").eq(2).hasClass("expired")) {
     onePc()
   }
   else {
    if(num==0) {
       onePc()
      }
      else {
      threePc()
    }
   }

  }
  else {
   if(num==0) {
    onePc()
   }
   else if(num==1) {
    threePcAndGift()
   }
   else {
    threePc()
   }
  }
});

function cSet(cName,cVal){
    var Days = 2;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
    var date = new Date();
    var cName = "itdbsep" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    var nowTime=Math.floor(date.getTime()/1000);
    if (arr == null) {
        count1=nowTime+540;
        count2=nowTime+8340;
        cSet(cName,count1+'.'+count2);
    } else {
        var packsArr = arr[2].split('.');
        count1 = parseInt(packsArr[0]);
        count2 = parseInt(packsArr[1]);
    }
}

function packsInit(){
    var date = new Date();
    var cName = "itdbseppa" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    if (arr == null) {
        packs=85;
    } else {
        packs=arr[2];
    }
    $('.packsNum').html(packs);
}

function statusCheck(){
    var date=new Date();
    var timeNow=date.getTime()/1000;
    if(timeNow<count1){
        return 1;
    }else if(timeNow<count2){
        return 2;
    }else{
        return 3;
    }
}

function statusSet(){
    var statusNow=statusCheck();
    if(statusNow==2){
        if(!$(".gift-box").hasClass('expired')){
            soldoutGift();
        }
    }else if(statusNow==3){
        if(!$(".three-box").hasClass('expired')){
            soldoutGift();
            soldoutThree();
            packsInit();
            setTimeout('getPacks()',15000);
        }
    }
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

function getPacks(){
    var date=new Date();
    $.ajax({
        type:'GET',
        url:'newyear2018.php',
        data:'action=getSales&d='+date.getDate(),
        success:function(sPacks){
            if(!isNaN(sPacks)){
                $('.packsNum').html(sPacks);
            }
        }
    });
    setTimeout('getPacks()',15000);
}