//soldout
function soldout() {
    var tl = new TimelineMax();
    var url = $(".banner .offer.medium .buybtn").attr("href");
    var ga = $(".banner .offer.medium .buybtn").attr("onclick");
    var price = $(".banner .offer.medium .price big").text();
    var del = $(".banner .offer.medium .price del").text();
    //banner
    tl.to(".banner .offer.medium", .5, {
        x: 175
    }).to(".banner .offer.medium", .1, {
        zIndex: 4
    }).to(".banner .offer.medium", .5, {
        x: 0
    });
    $(".banner .offer.medium").removeClass("dns");
    $(".banner .offer.medium h3, .banner .offer.medium span").fadeOut(500);
    $(".banner .offer.large").addClass("soldout").find(".buybtn").attr({
        "href": "javascript: void(0);",
        "onclick": " "
    });
    //float
    $(".float").addClass("soldout").find(".buybtn").attr({
        "href": url,
        "onclick": ga
    }).end().find(".price big").text(price).end().find(".price del").text(del);
}

//Sixty second countdown
var timer = 60;

function second60() {
    var timerReduce = setInterval(function () {
        if (timer < 0) {
            clearInterval(timerReduce);
            closeCoupon();
        }
        flipNum(timer, 2);
        timer--;
    }, 1000);
}

//showCoupon
function showCoupon() {
    if(cGet('junesummercoupon') == null)
    $(".coupon").fadeIn(500);
    setTimeout('$(".coupon-content").removeClass("hide");', 250);
}

//closeCoupon
function closeCoupon() {
    $(".coupon-content").addClass("hide");
    setTimeout('$(".coupon").fadeOut(500)', 250);
}

//number
function PrefixInteger(num, length) {
    return (Array(length).join('0') + num).slice(-length);
}

//flipNum
function flipNum(num, length) {
    var number = PrefixInteger(num, length);
    var len = String(number).length;
    var str = number.toString();
    var list = "";
    var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    for (var j = 0; j < arr.length; j++) {
        list += "<span>" + arr[j] + "</span>";
    }
    $(".coupon .countdown div strong").html(list);
    for (var k = 0; k <= len; k++) {
        var curNum = str.substring(k, k + 1);
        $(".coupon .countdown div strong").eq(k).animate({marginTop: -curNum * 60}, 'slow');
    }
}

$(document).ready(function () {
    //banner
    setTimeout(function () {
        $(".banner .offer, .banner .shadow").addClass("on")
    }, 500);
    //countdown
    timeInit();
    countdown((".banner .countdown strong"));
    // feature
    $(".feature").on("mouseenter", "dl", function () {
        var index = $(this).attr("data-index");
        $("#show" + index).addClass("on").siblings().removeClass("on");
        $(".detail-show").addClass("on");
    }).stop().on("mouseleave", "dl", function () {
        $(".showes").removeClass("on");
        $(".detail-show").removeClass("on");
    });
    //scroll
    $(window).on('scroll', function () {
        //gifts
        if ($(window).scrollTop() > $(".feature .left-message").offset().top) {
            $(".gifts dl").addClass("on");
        }
    });
    //coupon
    setTimeout(function () {
        $(document).bind('mousemove', mouseOut);
    }, 30000);
    //userNum
    getNumber();
});

//countdown
// var countdown = function (countdown){
//   getCycleCountdown();
//   $(countdown).eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
//   setTimeout("countdown('"+ countdown +"')", 1);
// };
// function getCycleCountdown () {
//   var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
//   var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
//   d = MApp(2.2).packages.zeroize(datetime[0], 2);
//   h = MApp(2.2).packages.zeroize(datetime[1], 2);
//   i = MApp(2.2).packages.zeroize(datetime[2], 2);
//   s = MApp(2.2).packages.zeroize(datetime[3], 2);
//   mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
// }
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
    var cName = "junesummer" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    var nowTime = Math.floor(date.getTime() / 1000);
    if (arr == null) {
        countTime = nowTime + 600;
        cSet(cName, countTime);
    } else {
        countTime = parseInt(arr[2]);
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
        var mi = Math.floor((999 - dateObj.getMilliseconds()) / 10);
        return [d, h, i, s, mi];
    } else {
        return [0, 0, 0, 0, 0];
    }
}

var countdown = function (countdown) {
    var statusNow = statusSet();
    getCycleCountdown(countTime);
    $(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
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
            var date = new Date();
            var cName = 'junesummercoupon' + date.getDate();
            dtpop = date.setMinutes(date.getMinutes() - 10);
            cSet(cName, dtpop);
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

//userNum
function getNumber() {
    var date = new Date();
    var cName = 'junesummernum' + date.getDate();
    num = cGet("junesummernum");
    if (num == null) {
        num = $(".userNum").text();
    } else {
        num = num.replace(/\s+/g, '')
        num++;
    }
    num = num.toString().replace(/(?=(\B)(\d{3})+$)/g, ' ');
    $('.userNum').html(num);
    cSet(cName, num);
    t1 = (Math.random() > 0.5) ? 5 : 8;
    t2 = (Math.random() > 0.5) ? 6 : 10;
    reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
    setTimeout('getNumber()', reTime);
}

function mouseOut(e) {
    if (e.clientY < 100) {
        // showCoupon();
        // $(document).unbind('mousemove', mouseOut);
        // second60();
    }
}
