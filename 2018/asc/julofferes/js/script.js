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
$(function() {
  $(".review dl dt .img-box").mouseover(function () {
      $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });
  $(window).scrollWindow($(".gift-message  .buybtn"), $('.reviews dl'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"),$('.feature ul li'),("on"));
  $(".feature a").target($(".comparison"),0);
    var _imgcss = ['img-box one-pc', 'img-box three-box', 'img-box three-gift '];
    $(".bottom-buy li").on("click", function() {
    var index = $(this).index();
    var dataName = $(this).attr("data-num");
    var dataUrl = $(".banner .box").eq(dataName).find(".buybtn").attr("href");
    var dataga = $(".banner .box").eq(dataName).find(".buybtn").attr("onclick");
    var original = $(".banner .box").eq(dataName).find(".price del").text();
    var price = $(".banner .box").eq(dataName).find(".price b").text();
    if($(".bottom-buy li:eq(0)").hasClass("exceed")) {
        if(!index==0) {
         $(this).addClass("active").siblings().removeClass("active");
         $(".bottom-buy .img-box").attr('class', _imgcss[dataName]);
         $(".bottom-buy .price").find("del").text(original);
         $(".bottom-buy .price").find("b").text(price);
         $(".bottom-buy .buybtn").attr("href", dataUrl);
         $(".bottom-buy .buybtn").attr("onclick", dataga);
        }
    }
    else {
     $(this).addClass("active").siblings().removeClass("active");
     $(".bottom-buy .img-box").attr('class', _imgcss[dataName]);
     $(".bottom-buy .price").find("del").text(original);
     $(".bottom-buy .price").find("b").text(price);
     $(".bottom-buy .buybtn").attr("href", dataUrl);
     $(".bottom-buy .buybtn").attr("onclick", dataga);
    }
  });
});
function sold() {
    var dataUrl = $(".banner .box").eq(2).find(".buybtn").attr("href");
    var dataga = $(".banner .box").eq(2).find(".buybtn").attr("onclick");
    $(".three-active,.three-gift").addClass("active");
    $(".bottom-buy .img-box").addClass("three-gift");
    $(".banner .box:eq(2),.bottom-buy li:eq(0),.gift-message").addClass("exceed");
    $(".bottom-buy li:eq(1)").addClass("active").siblings().removeClass("active");
    $(".bottom-buy .price del,.three-active .price del").html("49,99€")
    $(".three-active h3").html("¡Date prisa! Sólo quedan <strong class='packsNum'>"+packs+"</strong> paquetes ");
    $(".three-active .buybtn,.gift-message .buybtn,.bottom-buy .buybtn").attr("href", dataUrl);
    $(".three-active .buybtn,.gift-message .buybtn,.bottom-buy .buybtn").attr("onclick", dataga);
}
function zoomout() {
  $(".banner .three-active").append("<span class='numreduce'></span>");
  setTimeout(function() {
    $(".banner .imgbox .numreduce").remove();
  }, 1200);
}

function cSet(cName,cVal){
    var Days = 2;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
    var date = new Date();
    var cName = "esascjul" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    var nowTime=Math.floor(date.getTime()/1000);
    if (arr == null) {
        countTime=nowTime+510;
        cSet(cName,countTime);
    } else {
        countTime=parseInt(arr[2]);
    }
}

function packsInit(){
    var date = new Date();
    var cName = "esascjulpa" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    if (arr == null) {
        packs=60;
    } else {
        packs=arr[2];
    }
    $('.packsNum').html(packs);
    getSalesNum(packs);
}

function statusCheck(){
    var date=new Date();
    var timeNow=date.getTime()/1000;
    if(timeNow<countTime){
        return 1;
    }else{
        return 2;
    }
}

function statusSet(){
    var statusNow=statusCheck();
    if(statusNow==2){
        //if(!$(".banner .sold-box .img-box").hasClass('one-box')){
        if(!$(".three-active,.three-gift").hasClass('active')){
            packsInit();
            sold();
            setTimeout('getPacks()',2000);
        }
    }
    return statusNow;
}

function timeCountDown(startTimestamp) {
    var dateObj = new Date();
    var time = dateObj.getTime().toString().substring(0, 10);
    var remainingTime = startTimestamp - time;
    if (remainingTime > 0) {
        if((remainingTime==10)||(remainingTime==5)){
            if(!$(".three-active").find('.date').length){
                dataZoomout();
            }
        }
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
        url:'julofferes.php',
        data:'action=getSales&d='+date.getDate(),
        success:function(sPacks){
            if(!isNaN(sPacks)){
                if(sPacks!=packs) {
                    zoomout();
                    $('.packsNum').html(sPacks);
                    packs=sPacks;
                    getSalesNum(packs);
                }
            }
        }
    });
    if(packs>35){
        setTimeout('getPacks()',10000);
    }else {
        setTimeout('getPacks()',20000);
    }
}

function getSalesNum(packsNow) {
    var date = new Date();
    var daysDiff = Math.floor((date.getTime() - Date.parse('2018-10-25')) / (3600 * 24 * 1000));
    var buyNum = 6396949 + daysDiff * 75 + (75 - packsNow);
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

var countdown = function (countdown,tType){
    var statusNow=statusSet();
    if(tType==1){
        getCycleCountdown(countTime);
    }
    $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    if(statusNow==1){
        setTimeout("countdown('"+ countdown +"',"+tType+")", 1);
    }
};

function getCycleCountdown (endTime) {
    var datetime = timeCountDown(endTime);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}
function dataZoomout() {
    $(".three-active").append("<h3 class='date'><i></i> <strong>00</strong> h: <strong>00</strong> min: <strong>00</strong> s: <strong>000</strong> ms*</h3>");
    setTimeout(function() {
      $(".three-active h3.date").remove();
    }, 1200);
}
$(function(){
    timeInit();
    dataZoomout()
    countdown((".three-active h3 strong"),1);
    countdown((".three-active h3.date strong"),1);
    countdown((".gift-message h3 strong"),1);
});