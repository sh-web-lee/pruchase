$.fn.userMouseover = function(UserMessage) {
    $(this).mouseover(function(event) {
        var num = $(this).index();
        $(this).addClass("active").siblings().removeClass("active");
        $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
    });
};

//var countdown = function(countdown) {
//    getCycleCountdown();
//    $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
//    setTimeout("countdown('" + countdown + "')", 1);
//};
//
//function getCycleCountdown() {
//    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
//    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
//    d = MApp(2.2).packages.zeroize(datetime[0], 2);
//    h = MApp(2.2).packages.zeroize(datetime[1], 2);
//    i = MApp(2.2).packages.zeroize(datetime[2], 2);
//    s = MApp(2.2).packages.zeroize(datetime[3], 2);
//    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
//}

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > topheight.offset().top) {
            scrollclass.addClass(ClassName);
        } else {
            scrollclass.removeClass(ClassName);
        }
    });
};


function PrefixInteger(num, length) {
    return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
    $(".banner .numlist").remove();
    var num = PrefixInteger(num, length);
    var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    var list = '';
    var len = String(num).length;
    var str = num.toString();
    var box = $(".banner .num");
    var createobj;
    for (var i = 0; i < length; i++) {
        if (length < 2) {
            createobj = $(new Array(3).join('<b class="numlist"></b>'));
        } else {
            createobj = $('<b class="numlist"></b>');
        }
        box.append(createobj);
    }
    for (var j = 0; j < arr.length; j++) {
        list += '<span>' + arr[j] + '</span>';
    }
    $(".banner .numlist").append(list);
    for (var a = 0; a <= len; a++) {
        var curNum = str.substring(a, a + 1);
        $(".banner .numlist").eq(a).animate({
            marginTop: -curNum * 36,
        }, "slow");
    }
}

var _href = [
    'http://www.iobit.com/buy.php?product=it-imf63pc1999&ref=it_imf63pc1999purchase1806&refs=it_purchase_imf',
    'http://www.iobit.com/buy.php?product=it-imf63pcpf1999&ref=it_imf63pcpf1999purchase1806&refs=it_purchase_imf',
    'http://www.iobit.com/buy.php?product=it-imf63pcpf2199&ref=it_imf63pcpf2199purchase1806&refs=it_purchase_imf'
];
var _current = ['19', '21'];
var _original = ['59,95€', '99,90€', '77,91€'];
var _discount = ['39,96', '79,91', '55.92'];

function exchange() {
    $(".banner .right").addClass("exchange");
    $(".footbuy").addClass("exchange");
    $(".footbuy .current").text(_current[1]);
    $(".footbuy .original").text(_original[2]);
    $(".footbuy .discount").text(_discount[2]);
    $(".footbuy .price").find(".buybtn").attr("href", _href[2]);
    $(".banner .countdown").html('Solo <span id="num" class="num"></span> Pezzi Rimasti');
    flipNum(78, 2);
    $(".banner .right").find(".change").text(_discount[1]);
    $(".banner .right").find(".current").text(_current[1]);
    $(".banner .right").find(".original").text(_original[2]);
    $(".banner .right").find(".buybtn").attr("href", _href[2]);
    $(".giveway").find(".buybtn").attr("href", _href[2]);

}
//exchange();

function maskBox() {
    $(".maskbox").addClass("on");
}

function maskHide() {
    $(".maskbox").remove();
    $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
}

$(function() {
    countdown(("#banCountdown strong"));
    countdown(("#footCountdown strong"));
    countdown(("#floatCountdown strong"));
    countdown(("#maskCountdown strong"));
    $(".users li").userMouseover($(".content dl"));

    $(".benfits .detail-list dl").hover(function() {
        $(".benfits .detail-list dl").removeClass("active");
        $(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
        $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    }, function() {
        $(".benfits .detail-list dl").eq(0).addClass("active");
    });

    $(".floatlayer .close").on("click", function() {
        $(".floatlayer").hide();
    });

    $(".maskbox .close").on("click", function() {
        $(".maskbox").hide();
    });

    $(".footbuy li").on("click", function() {
        var index = $(this).index();
        $(this).addClass("active").siblings().removeClass("active");
        $(".footbuy .imfbox img").eq(index).addClass("active").siblings().removeClass("active");
        $(".footbuy .current").text(_current[0]);
        $(".footbuy .original").text(_original[index]);
        $(".footbuy .discount").text(_discount[index]);
        $(".footbuy .price").find(".buybtn").attr("href", _href[index]);
        if ($(".footbuy").hasClass("exchange") && index === 1) {
            $(".footbuy .current").text(_current[1]);
            $(".footbuy .original").text(_original[2]);
            $(".footbuy .discount").text(_discount[2]);
            $(".footbuy .price").find(".buybtn").attr("href", _href[2]);
        }
    });

});

function timeCountDown(startTimestamp,ctype) {
    var dateObj = new Date();
    var time = dateObj.getTime().toString().substring(0, 10);
    var remainingTime=0;
    if(ctype==2){
        for(i=1;;i++){
            remainingTime = (startTimestamp+24*60*60*i)-time;
            if (remainingTime > 0) break;
        }
    }else {
        remainingTime = startTimestamp - time;
    }
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

var countdown = function (tType){
    var statusNow=statusSet();
    if(statusNow==2){
        getCycleCountdown(count2,1);
        //统一计时
        $(".countdown").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
    }else{
        exchange();
    }
    setTimeout("countdown("+statusNow+")", 1);
};

function getCycleCountdown (endTime,ctype) {
    var datetime = timeCountDown(endTime,ctype);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function statusCheck(){
    var date=new Date();
    var timeNow=date.getTime()/1000;
    if(timeNow<count1){
        return 1;
    }else{
        var cName='itimfsummer_2';
        count2=cGet(cName);
        if(count2==null){
            count2=timeNow+600;
            cSet(cName,count2);
        }
        if(count2>timeNow){
            return 2;
        }else{
            return 3;
        }
    }
}

function statusSet(){
    var statusNow=statusCheck();
    if(statusNow==2){
        //倒计时内
        if(!$(".maskbox").hasClass('on')){
            maskBox();
        }
    }else if(statusNow==3){
        //弹窗计时结束
        exchange();
        packsInit();
    }
    return statusNow;
}

function timeInit(){
    var date = new Date();
    var cName = "itimfsummer_1" + date.getDate();
    var nowTime=Math.floor(date.getTime()/1000);
    if(cGet(cName==null)){
        count1=nowTime+60;
        cSet(cName,count1);
    }else{
        count1=cGet(cName);
    }
}

function cSet(name, value) {
    var Days = 2;
    var exp = new Date();
    name = name + exp.getDate();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
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

function packsInit(){
    var date = new Date();
    var cName = "itimfnatapa" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    var packs=5;
    if (arr == null) {
        packs=39;
    } else {
        var packsArr = arr[2].split('%2A');
        var statusNow=statusCheck();
        if(statusNow==1){
            packs=packsArr[0];
        }else{
            packs=packsArr[1];
        }
    }
    $('.packsNum').html(packs);
}

function getSales(isTrans){
    var ctype=statusCheck();
    $.ajax({
        type: "GET",
        url: "natale2017.php",
        data:"action=getPack&type="+ctype,
        success: function(res){
            var sales=JSON.parse(res);
            var scrollHeight = $(".banner").offset().top;
            if ($(window).scrollTop() > scrollHeight) {
                $(".float").removeClass('on');
                setTimeout("$('.float').addClass('on');", 800);
            }
            $("#first").html(sales.firstName);
            $("#last").html(sales.lastName);
            $(".packsNum").html(sales.packsNum);
            if(!isTrans){
                setTimeout('getSales(0)',15000);
            }
        }
    })
}

$(function(){
    $(".float-top").target($(".banner"),0);
    timeInit();
    countdown();
    //packsInit();
    setTimeout('getSales(0)',15000);
});