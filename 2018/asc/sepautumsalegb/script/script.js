//进入可视区域播放动画
var wh = $(window).height(),
    div = $(".animate"),
    scrollTop;
div.each(function () {
    var offSetTop = $(this).offset().top;
    $(this).attr("offSetTop", offSetTop);
    $(this).on("show", function () {
        var offSetTop = $(this).attr("offSetTop");
        scrollTop = $(window).scrollTop();
        if (offSetTop < wh + scrollTop) {
            if (!$(this).hasClass("active"))$(this).addClass("active");
        }
    });
});
$(window).on("scroll", function () {
    div.each(function () {
        $(this).trigger("show");
    });
});
$(window).resize(function () {
    wh = $(window).height();
});

// review
$('.review .handle li').hover(function () {
    $(this).addClass('active').siblings().removeClass('active');
    $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});
//
function Totarget(target, m) {
    var toTop = target.offset().top - m;
    $("html,body").animate({
        scrollTop: toTop
    }, "slow");
}

$(window).on('scroll', function () {
    var scrollHeight = $(".banner .buy-btn").offset().top;
    if ($(window).scrollTop() > scrollHeight) {
        $('#floatlayer').addClass('on');
        $(".gotop").fadeIn();
    } else {
        $('#floatlayer').removeClass('on');
        $(".gotop").fadeOut();
    }
});
$("#floatlayer .close").on('click', function () {
    $("#floatlayer").hide();
});
// mask进入
// setTimeout("$('.mask').fadeIn()",30000);
function mask(scroll){
    if((scroll==1)&&(maskTime==-1)){
        return false;
    }else {
        maskTime = -1;
        cSet('mask_t', maskTime);
        maskCount();
        var expireTime = cGet('mask_e');
        if (expireTime == null) {
            expireTime = Date.parse(new Date()) + 60 * 2 * 1000;
            cSet('mask_e', expireTime);
        }
        if (expireTimeCheck()) {
            $('.mask,.mask-box').css("display", "block");
            cycleCountdown();
            var tReduce = new TimelineLite();
            tReduce.from('.mask-box', 0.5, {
                    scale: 0,
                    autoAlpha: 1
                })
                .to(".mask-box", 1.1, {
                    scale: 1,
                    autoAlpha: 1
                })
        }
    }
}

//mask展示统计
function maskCount(){
    $.ajax({
        type: "GET",
        url: "index.php",
        data: "ip=&action=maskCount&mask=1"
    })
}

// 点击关闭mask
$(".close-msg,.close").on('click',function(){
    $(".mask,.mask-box").fadeOut();
});

// 设置进度条初始值
function cutBack() {
    var marginLeft=(100-packs)*(4.02);
    TweenMax.to($('.progressbar'), 5, {onStart:function () {
        $(".progressbar").animate({width:marginLeft+"px"},1000);
        $(".counter").animate({left:marginLeft+"px"},1000);
    }
    })
}
// fadeOut();
function fadeOut(num) {
    (num == undefined) ? num = 0 : num = parseInt(num);
    $(".gift-count").append("<i class='cut-box'>"+"+"+num+"</i>");
    $(".count-num-box").append("<i class='num-none'></i>");
    var  tReduce = new TimelineLite();
    tReduce.from('.cut-box',0.5,{
            scale: 0.5,
            autoAlpha: 0
        })
        .to('.cut-box',0.8,{
            top: -10,
            autoAlpha:0,
            onComplete: function(){
                $('.gift-count .cut-box').remove();
                $(".count-num").html(100-packs);
                $(".num-none").html($(".count-num").html());
                $(".left-num").html(packs);
                // 执行动画
                TweenLite.to($('.num-none'),0.5,{
                    scale:3,
                    autoAlpha:0,
                    onComplete :function(){
                        $('.count-num-box .num-none').remove();
                    }
                });
            }
        })
}
window.onload=function(){
    counterRight = 144;
}
// 减少动画
function cutWidth(){
    var marginLeft=(100-packs)*(4.04);
    $(".progressbar").css("width",marginLeft + "px");
    $(".counter").css("left",marginLeft + "px");
}
// 售完
function soldOut(){
    TweenMax.to($('.cut-box'), 3, {onStart:function () {
        $(".progressbar").animate({width:"400px"},3000);
        $(".counter").animate({left:"400px"},3000);
        count();
        function count(){
            m = packs;
            function showtime(){
                $(".count-num").html(m);
                $(".left-num").html(parseInt(100-m));
                m++;
                if(m > 100){
                    clearInterval(settime);
                }

            }
            clearInterval(settime);
            var settime = setInterval(function(){
                showtime();
            },28);
        }
    }, onComplete: function () {
        var aff=MApp(2.2).url.getParameters('aff');
        var tw = MApp(2.2).datetime.getTimeZone();
        $(".banner-boxshot").addClass("sold-out");
        $(".defult").css("display","none");
        $(".sold-out-banner").css("display","block");
        $(".middle-buy").css("display","none");
        $(".sold-out-bar").css("display","block");
        $(".item-pro del").html("$89.97");
        $(".table-peice").html("<span>75% OFF </span>Save $67.99");
        $(".buy-btn").attr("href","https://www.iobit.com/buy.php?product=asc113pc2198gb&ref=asc3pc2198may2018gb&aff="+aff+"&refs=purchase_asc&tw="+tw).attr('onclick',"ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-gb');");
        $("#floatlayer,.gotop").hide();
    }});
}

function cycleCountdown(){
    remainTime = expireTimeCheck();
    if(remainTime>0){
        var s=((remainTime%60)<10)?('0'+(remainTime%60)):(remainTime%60);
        var m=Math.floor(remainTime/60);
        $(".time-count i").eq(0).html("0" + m).end().eq(1).html(s);
        remainTime--;
        setTimeout('cycleCountdown(remainTime)',1000);
    }else {
        $('.mask,.mask-box').fadeOut();
    }
}

$(function(){
    scrollBefore=0;
    dateNow=new Date().getDate();
    timeInit();
    packsInit();
});
//检查mask时间是否过期
function expireTimeCheck(){
    var expireTime=cGet('mask_e');
    if(Date.parse(new Date())<expireTime){
        return (expireTime-Date.parse(new Date()))/1000;
    }else{
        return false;
    }
}
//跟时间
function maskTimeCountDown(){
    if(maskTime>0){
        if(maskTime==109){
            $(document).bind('mousemove',mouseOut);
        }
        if(maskTime==80){
            $(document).unbind('mousemove',mouseOut)
        }
        maskTime--;
        cSet('mask_t',maskTime);
        setTimeout('maskTimeCountDown()',1000);
    }else if((maskTime==0)&&(packs>0)){
        $(document).bind('mousemove',mouseMove);
    }
}

function mouseOut(e){
    if(e.clientY<3){
        mask(1);
        $(document).unbind('mousemove',mouseOut);
    }
}

function mouseMove(e){
    mask(1);
    $(document).unbind('mousemove',mouseMove);
}

//showTime
function timeInit(){
    maskTime=cGet('mask_t');
    if(maskTime==null){
        maskTime=60*2;
        cSet('mask_t',maskTime);
    }
    if(maskTime==-1){
        if(expireTimeCheck()){
            mask();
        }
    }
    mouseCheck=0;
    maskTimeCountDown();
}
//设置cookie
function cSet(name,value) {
    var Days = 2;
    var exp = new Date();
    name=name+exp.getDate();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}
//获取cookie
function cGet(name) {
    var exp = new Date();
    name=name+exp.getDate();
    var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
    if (arr = document.cookie.match(reg))
        return unescape(arr[2]);
    else
        return null;
}
function countOut(){
    var aff=MApp(2.2).url.getParameters('aff');
    var tw = MApp(2.2).datetime.getTimeZone();
    $(".banner-boxshot").addClass("sold-out");
    $(".defult").css("display","none");
    $(".sold-out-banner").css("display","block");
    $(".middle-buy").css("display","none");
    $(".sold-out-bar").css("display","block");
    $(".item-pro del").html("$89.97");
    $(".table-peice").html("<span>75% OFF </span>Save $67.99");
    $(".buy-btn").attr("href","https://www.iobit.com/buy.php?product=asc113pc2198gb&ref=asc3pc2198may2018gb&aff="+aff+"&refs=purchase_asc&tw="+tw).attr('onclick',"ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-gb');");
    $("#floatlayer,.gotop").hide();
}
function getPacks(isFirst){
    var dateNow = new Date();
    $.ajax({
        type: "GET",
        url: "index.php",
        data: "action=getPacks&r=" + Math.random()+"&d="+dateNow.getDate()+(isFirst==1?'&f=1':''),
        success: function(res) {
            res=JSON.parse(res);
            var sPacks=res.packsNum;
            var viewNum=res.viewNum;
            $('.view-num').html(viewNum);
            var rePacks=packs-sPacks;
            if(rePacks>0){
                fadeOut(rePacks);
                cutWidth(packs);
            }
            packs=sPacks;
            if(packs>0){
                setTimeout('getPacks()', 15000);
            }else{
                countOut();
                $(document).unbind('mousemove',mouseMove);
            }
        }
    });
}
function packsInit(){
    packs=cGet('ascmaymid');
    if(packs==null){
        packs=64;
    }
    if(packs==0){
        soldOut();
    }else{
        cutBack();
        var isFirst=cGet('isf');
        if(isFirst!=1){
            cSet('isf',1);
            setTimeout('getPacks(1)',1000);
        }else {
            setTimeout('getPacks()', 15000);
        }
    }
    $('.count-num').html(100-packs);
    $('.left-num').html(packs);
}
function clickCount(type){
    $.ajax({
        type: "GET",
        url: "index.php",
        data: "ip=&action=maskCount&mask="+type
    })
}