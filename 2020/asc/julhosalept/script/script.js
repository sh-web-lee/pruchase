$.fn.scrollWindow = function (topheight, scrollclass, ClassName) {
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > topheight.offset().top) {
            scrollclass.addClass(ClassName);
        } else {
            scrollclass.removeClass(ClassName);
        }
    });
};
// var countdown = function (countdown){
//   getCycleCountdown();
//   $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
//   setTimeout("countdown('"+ countdown +"')", 1);
// };
// function getCycleCountdown () {
//   var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
//   var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
//   d = MApp(2.2).packages.zeroize(datetime[0], 2);
//   h = MApp(2.2).packages.zeroize(datetime[1], 2);
//   i = MApp(2.2).packages.zeroize(datetime[2], 2);
//   s = MApp(2.2).packages.zeroize(datetime[3], 2);
//   mi = MApp(2.2).packages.zeroize(datetime[4], 3);
// }
$(function () {
    timeInit();
    countdown((".banner .date strong"));
    //feature
    $(window).scrollWindow($(".banner .buybtn"), $('.feature .machine img'), ("on"));

    //bottombuy
    $(".bottombuy ul li").click(function () {
        if ($(".bottombuy ul li:eq(0)").hasClass("nomail")) {
            var index = $(this).index();
            var url = $(this).attr("data-url");
            var price = $(this).attr("data-price");
            var original = $(this).attr("data-original");
            $(this).addClass("active").siblings().removeClass("active");
            $(".bottombuy .box img").stop().animate({"marginLeft": -330 * index}, 300);
            $(".bottombuy dl dd .price strong").text(price);
            $(".bottombuy dl dd .price del").text(original);
            $(".bottombuy dl dd .buybtn").attr({"href": url});
        }
    });
});

function soldout() {
    $(".banner .asc3pcs,.bottombuy ul li:eq(0)").addClass("soldout")
    $(".bottombuy ul li:eq(0)").removeClass("active").removeClass("nomail")
    $(".bottombuy ul li:eq(1)").addClass("active");
    $(".bottombuy .box img").stop().animate({"marginLeft": -330}, 300);
    $(".bottombuy dl dd .price strong").text("74");
    $(".bottombuy dl dd .price del").text("129,99");
    $(".bottombuy dl dd .buybtn").attr({"href": '.bottombuy ul li:eq(1).attr("data-url");'});
}

function getTime(min,max) {
    rand = parseInt(Math.random() * (max - min + 1) + min);
    return rand;
}
function cSet(name, value) {
    var Days = 2;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
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

function timeInit(num) {
    var date = new Date();
    var cName = "julhosale" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    var nowTime = Math.floor(date.getTime() / 1000);
    if (arr == null) {
        countTime = nowTime + getTime(6311,8466);
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
        var mi = Math.floor((999 - dateObj.getMilliseconds()));
        return [d, h, i, s, mi];
    } else {
        return [0, 0, 0, 0, 0];
    }
}

var countdown = function (countdown) {
    var statusNow = statusSet();
    getCycleCountdown(countTime);
    $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
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