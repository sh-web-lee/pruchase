$(".users li").mouseover(function (event) {
    var num = $(this).index();
    $(".users li").eq(num).addClass('current').siblings().removeClass('current');
    $(".review dl").eq(num).addClass('active').siblings().removeClass('active');
});
function three() {
    $(".bottom-buy .buybtn").attr("href", "https://www.iobit.com/buy.php?product=es-db53pciu1999&ref=es_db53pciu1999purchase1806wc"+refStr+"&refs=es_purchase_db");
    $(".bottom-buy .buybtn").attr("onclick", "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pciu1806wc-es')");
    $(".bottom-buy ul li").eq(1).addClass("active").siblings().removeClass('active');
    $(".bottom-buy dl strong").html("19,99€");
    $(".bottom-buy dl dt del").html("104,84€");
    $(".bottom-buy .img-box").removeClass("one-pc");
}
function oneBox() {
    $(".bottom-buy .buybtn").attr("href", "https://www.iobit.com/buy.php?product=es-db51pc1799&ref=es_db51pc1799purchase1806wc"+refStr+"&refs=es_purchase_db");
    $(".bottom-buy .buybtn").attr("onclick", "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc1806wc-es')");
    $(".bottom-buy ul li").eq(2).addClass("active").siblings().removeClass('active');
    $(".bottom-buy dl strong").html("17,99€");
    $(".bottom-buy dl dt del").html("35,98€");
    $(".bottom-buy .img-box").addClass("one-pc");
}
function threeSold() {
    oneBox();
    $(".banner .three").addClass("active");
    $(".banner .box").eq(2).addClass("exceed");
    $(".bottom-buy ul li.three").removeClass("active").addClass("exceed");
    $(".bottom-buy .img-box").addClass("one-pc");
    $(".banner .box:eq(2) .message dt").html("<strong>19,99€</strong> <del>104,84€</del>")
    $(".banner .three .message dt").html("<strong>17,99€</strong> <del>35,98€</del>")
    $(".banner .three h3").html("<i></i> ¡<span class='packsNum'>"+packs+"</span> productos quedados hoy!");
    $(".gift-intro .gift").addClass("exceed");
    $(".gift-intro strong").html("17,99€");
    $(".gift-intro del").html("35,98€");
    $(".gift-intro .buybtn,.banner .three .buybtn").attr("href", "https://www.iobit.com/buy.php?product=es-db51pc1799&ref=es_db51pc1799purchase1806wc"+refStr+"&refs=es_purchase_db");
    $(".gift-intro .buybtn,.banner .three .buybtn").attr("onclick", "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc1806wc-es')");
}
$(".bottom-buy ul li").mouseover(function (event) {
    var num = $(this).index();
    if ($(this).hasClass('exceed')) {
        return;
    } else {
        if (num == 1) {
            three()
        }
        else {
            oneBox();
        }
    }
});

$.fn.scrollWindow = function (topheight, scrollclass, ClassName) {
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > topheight.offset().top) {
            scrollclass.addClass(ClassName);
        } else {
            scrollclass.removeClass(ClassName);
        }
    });
};
$(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
$(".floatlayer .close").on('click', function (event) {
    $(".floatlayer").hide();
});

function timeInit() {
    var date = new Date();
    var cName = "itdbjan" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    var nowTime = Math.floor(date.getTime() / 1000);
    if (arr == null) {
        countTime = nowTime + 599;
        cSet(cName, countTime);
    } else {
        countTime=arr[2];
    }
}

function packsInit() {
    var date = new Date();
    var cName = "esdbjanp" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    if (arr == null) {
        packs = 98;
    } else {
        packs = arr[2];
    }
    $('.packsNum').html(packs);
}

function cSet(cName, cVal) {
    var Days = 2;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
    document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}


function getSales() {
    var date = new Date();
    $.ajax({
        type: "GET",
        url: "jansalees.php",
        data: "action=getSales&status=" + statusCheck() + "&d=" + date.getDate(),
        success: function (res) {
            var sales = JSON.parse(res);
            var scrollHeight = $(".banner").offset().top;
            if ($(window).scrollTop() > scrollHeight) {
                $(".floatlayer").removeClass('on');
                setTimeout("$('.floatlayer').addClass('on');", 800);
            }
            packs=sales.packsNum;
            $("#first").html(sales.firstName);
            $("#last").html(sales.lastName);
            $('.packsNum').html(sales.packsNum);
        }
    });
    setTimeout('getSales()', 20000);
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
        if($(".banner .three,.bottom-buy ul li.three").hasClass('active')){
            threeSold();
            oneBox();
        }
    }
    return statusNow;
}

var countdown = function (tType){
    var statusNow=statusSet();
    getCycleCountdown(countTime);
    $(".box.three h3 strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    if(statusNow==1){
        setTimeout("countdown("+statusNow+")", 1);
    }
};

function getCycleCountdown (endTime,ctype) {
    var datetime = timeCountDown(endTime,ctype);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    return (eval(datetime.join("+"))==0);
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

$(function(){
    timeInit();
    packsInit();
    countdown();
    setTimeout('getSales()',15000);
});