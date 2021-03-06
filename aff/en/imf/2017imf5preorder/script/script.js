// review
$('.review .handle li').hover(function () {
    $(this).addClass('active').siblings().removeClass('active');
    $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});

function goTarget(target, yoffset) {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
}

function showFloat() {
    var scrollHeight = $('.banner').height();
    if ($(window).scrollTop() > scrollHeight) {
        $('.floatlayer').addClass('on');
    } else {
        $('.floatlayer').removeClass('on');
    }
}

//sold-img sold-out 文字效果
function soldImg(packsKey) {
    $('.banner .' + packsKey).append('<div class="soldimg"></div>');
    TweenLite.from(".banner ."+packsKey+" .soldimg", 1, {
        scale: 2,
        autoAlpha: 0,
        ease: Bounce.easeOut,
        clearProps: "all",
    }, "+=0.75");
}

//sold sold-out盒子的翻转效果
function sold(type) {
    var bannerClass = (type == 1) ? 'packs35' : (type == 2 ? 'daysold' : 'packs30');
    //$('.banner .' + bannerClass).append('<div class="sold"></div>');
    $('.banner .' + bannerClass + ' .sold').addClass('cur');
    TweenLite.from($('.banner .'+bannerClass+' .sold'), 0.8, {
        rotationY: 90,
        autoAlpha: 0,
        onComplete: function () {
            soldImg(bannerClass);
        },
        clearProps: "all"
    });
}

//beginning  消失效果
function beginning(type) {
    var bannerClass = (type == 1) ? 'packs30 .beginning' : (type == 2 ? 'beginning' : 'packs7 .beginning');
    var begine = new TimelineLite();
    begine.to($('.banner .' + bannerClass), 0.5, {
        rotationY: 90,
        autoAlpha: 0
    });
}
//reduce  文字减少消失效果
function reduce(packsNum,myType) {
    $('.num'+(type==1?'35':'30')).html(packsNum);
    $('.packsNum').html(packsNum);
    var bannerClass=(type==1?'packs35':'packs30');
    $('.banner .'+bannerClass+' .counter').append('<span class="numGhost">'+packsNum+'</span>');
    if(((type==1)&&(packsNum!=packs35))||((type==2)&&(packsNum!=packs30))) {
        var tReduce = new TimelineLite();
        tReduce.to($('.banner .'+bannerClass+' .numGhost'), 0.8, {
                scale: 4,
                autoAlpha: 0,
                onComplete:function(){
                    water(packsNum,myType);
                    $('.numGhost').remove();
                }
            });
    }
}
//water height offer盒子中的曲线的高度变化
function water(packsNum,myType) {
    var bannerClass=(type==1?'packs35':'packs30');
    var bannerClass=(myType==2?'packs30':(myType==3?'packs35':bannerClass));
    var heightOne=(type==1?7.1:2.75);
    var cHeight=(type==1?(20-packsNum):(100-packsNum))*heightOne;
    var tReduce = new TimelineLite();
    tReduce.to($('.banner .'+bannerClass+' .water'), 0.8, {
        marginTop: cHeight
    });
}

//盒子阴影变化
function shadowChange(type){
    var bannerClass = (type == 1) ? 'packs35' : (type == 2 ? 'packs30' : 'packs7');
    $(".banner .daybox").removeClass('shadow').addClass('beginshadow');
    $(".banner ."+bannerClass).removeClass('beginshadow').addClass('shadow');
    $(".banner ."+bannerClass+ ' .water').addClass("anima");
}

/*getUrlParam*/
(function($){
    $.getUrlParam = function(name){
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if (r!=null) return unescape(r[2]); return '';
    }
})(jQuery);

//buylink
var aff = $.getUrlParam('aff');
var st = $.getUrlParam('ref');
function link30() {
    var onehref = "http://www.iobit.com/buy.php?product=imf5preorder30&ref="+st+"&aff="+aff+"&refs=purchase_imf30";
    var onega = "ga('send', 'event', 'imfbuy', 'buy', 'enaffimf5preorder30d');";
    $(".buybtn").attr('href', onehref);
    $(".buybtn").attr('onclick', onega);
}
function link7() {
    var twohref = "http://www.iobit.com/buy.php?product=imf5preorder7&ref="+st+"&aff="+aff+"&refs=purchase_imf";
    var twoga = "ga('send', 'event', 'imfbuy', 'buy', 'enaffimf5preorder7d');";
    $(".buybtn").attr('href', twohref);
    $(".buybtn").attr('onclick', twoga);
}

function decreasingPacks() {
    var date=new Date();
    var aff = $.getUrlParam('aff');
    $.ajax({
        type: "GET",
        url: "index.php",
        data: "action=getSalePacks&d="+date.getDate()+"&type="+type,
        success: function (packs) {
            var packsArr = packs.split('*');
            if(type==1){
                reduce(packsArr[0],3);
            }else{
                reduce(packsArr[1],2);
            }
            packs35=packsArr[0];
            packs30=packsArr[1];
            if(packs35>0){
                type=1;
                setTimeout('decreasingPacks()', decTime);
            }else{
                if(packs30>60){
                    decTime=8000;
                }else{
                    decTime=20000;
                }
                //decTime=1000;
                if($('.packs30 .beginning').css('visibility')!='hidden'){
                    shadowChange(2);
                    $(".countDay").html(30);
                    link30();
                    sold(1);
                    beginning(1);
                }
                if(packs30>0){
                    type=2;
                    setTimeout('decreasingPacks()', decTime);
                }else{
                    water(0);
                    shadowChange(3);
                    $(".countDay").html(7);
                    $('.packsNum').html('limited');
                    link7();
                    beginning(3);
                    sold(3);
                }
            }
        }
    });
}

$(window).on('scroll', function () {
    showFloat();
});

function packsGet() {
    var date = new Date();
    var cName = "preimf" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    if (arr == null) {
        packs35 = 20;
        packs30 = 100;
    } else {
        var packsArr = arr[2].split('%2A');
        packs35 = packsArr[0];
        packs30 = packsArr[1];
    }
}
/*getUrlParam*/
(function($){
    $.getUrlParam = function(name){
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if (r!=null) return unescape(r[2]); return '';
    }
})(jQuery);
function init() {
    var aff = $.getUrlParam('aff');
    type=1;
    if (packs35 == 0) {
        if (packs30 == 0) {
            water(0,3);
            type=2;
            water(0,2);
            link7();
            $(".countDay").html(7);
            $(".floatlayer .countNum").html('limited');
            shadowChange(3);
            sold(2);
            beginning(2);
        } else {
            water(0,3);
            shadowChange(2);
            link30();
            type=2;
            if(packs30>60){
                decTime=8000;
            }else{
                decTime=20000;
            }
            //decTime=1000;
            $(".countDay").html(30);
            $(".packsNum").html(packs30);
            sold(1);
            beginning(1);
            water(packs30);
            setTimeout('decreasingPacks()', decTime);
        }
    } else {
        type=1;
        decTime=6000;
        //decTime=1000;
        water(packs35);
        $(".countDay").html(35);
        $(".packsNum").html(packs35);
        setTimeout('decreasingPacks()', decTime);
    }
    packsInit();
}
//初始化数量
function packsInit() {
    $('.num35').html(packs35);
    $('.num30').html(packs30);
}
$(function () {
    packsGet();
    init();
    $(".floatlayer .clock").addClass('canima');
});