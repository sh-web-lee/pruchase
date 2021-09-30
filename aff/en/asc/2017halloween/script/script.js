$('#dg-container').gallery();
var gRunning = false;
$(".btn-start").click(function(e) {
    $(".card").eq(0).addClass("active");
    $(".btn-content .down span").removeClass("animationdown");
    if (gRunning) {
        return;
    }
    gRunning = true;
    next(parseInt(Math.random() * 100));
    $(".btn-start").unbind();
});
(function($) {
    $.getUrlParam = function(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]);
        return '';
    }
})(jQuery);
var aff = $.getUrlParam('aff');
var ref = MApp(2.2).url.getParameters('ref');
if (ref.length <= 0) ref = 'enaff_asc10_2017halloween';
var tw = MApp(2.2).datetime.getTimeZone();

function next(time) {
    var activeItem = $(".card.active"),
        activeIndex = activeItem.data("index"),
        max = $(".card").length,
        nextTime = time + 5 * time / 30,
        nextIndex = 1,
        nextItem = null;
    if (activeIndex == max) {
        nextIndex = 1;
    } else {
        nextIndex = activeIndex + 1;
    }
    activeItem.removeClass("active");
    nextItem = $(".card[data-index=" + nextIndex + "]").addClass("active");
    var x = 1;
    var y = 0;
    if (time > 500) {
        gRunning = false;
        $(".card[data-index=" + nextIndex + "]").addClass("change-active");
        setTimeout(function() {
            $(".banner .content h2").html("Congratulations! ").addClass("reveal");
            $(".btn-content").html("<h3>You Win Extra 2 Months Subscription of Advanced SystemCare PRO!</h3> ");
        }, 100);
        setTimeout(function() {
            if (nextIndex == 1) {
                $(".card").eq(1).addClass("boo");
                $(".card").eq(2).addClass("boo");
            } else if (nextIndex == 2) {
                $(".card").eq(0).addClass("boo");
                $(".card").eq(2).addClass("boo")
            } else {
                $(".card").eq(0).addClass("boo");
                $(".card").eq(1).addClass("boo")
            }
            var rand = parseInt(Math.random() * (x - y + 1) + y);
            $(".card.boo").eq(rand).addClass("boob");
            $(".card-content").addClass("magnify");
        }, 1500);
        setTimeout(function() {
            $(".banner .content h2").html("Activate Now to Get Extra 2 Months Subscription for Free ").addClass("activate");
            $(".btn-content").html("<h3 class='date'>Hurry Up, the offer is Valid for <strong><span class='minutes'>02</span>:<span class='seconds'>00</span></strong></h3> ");
            $(".price h2").html("Activate in the <b>next</b>  <strong class='date'><c class='minutes'>02</c>:<c class='seconds'>00</c></strong>Get Extra 2 Months Subscription for Free! ").addClass("activate");
            $(".price p").html("  1 Year / 3 PCs + Extra 2 Months / 3 PCs");

            $(".top-message .buy-top .buybtn").attr("href", "http://www.iobit.com/buy.php?product=asc103pc1999_aff&ref=" + ref + "&aff=" + aff + "&refs=purchase_asc&tw=" + tw);

            $(".top-message .buy-top .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017halloween');clickCount(2)");

            $(".price .buybtn").attr("href", "http://www.iobit.com/buy.php?product=asc103pc14m1999_aff&ref=" + ref + "&aff=" + aff + "&refs=purchase_asc&tw=" + tw);

            $(".price .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017halloween');clickCount(2)");
            $(".asc-buy").addClass("show");
        }, 4000);
        setTimeout(function() {
            $(".card-content").remove();
        }, 5000);

    } else {
        window.setTimeout(function() {
            next(nextTime);
        }, nextTime);
    }
    countPre();
}

function cover() {
    $(".title").addClass("soldout");
    $(".btn-content").addClass("soldout");
    $(".banner .content").append("<div class='pop-bg'></div>");
    $(".banner .content").append("<div class='pop'><h3>Oops, this deal is over.</h3> <p><a href='#' onclick='ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017halloween');clickCount(3)'>Activate 1 Year / 3 PCs Now</a> </p> <span class='expired'></span> </div>");

    $(".banner .content .pop a").attr("href", "http://www.iobit.com/buy.php?product=asc103pc1999_aff&ref=" + ref + "&aff=" + aff + "&refs=purchase_asc&tw=" + tw);

    $(".price h2").html("Activate Now to Enjoy a Faster, Cleaner and More Secure PC! ").removeClass("activate");
    $(".price p").html("  1 Year / 3 PCs");

    $(".price .buybtn,.top-message .buy-top .buybtn").attr("href", "http://www.iobit.com/buy.php?product=asc103pc1999_aff&ref=" + ref + "&aff=" + aff + "&refs=purchase_asc&tw=" + tw);

    $(".price .buybtn,.top-message .buy-top .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017halloween');clickCount(3)");
}

function giftGot() {
    $(".banner .content h2").html("Congratulations! ").addClass("reveal");
    $(".btn-content").html("<h3>You Win Extra 2 Months Subscription of Advanced SystemCare PRO!</h3> ");
    $(".card").addClass("boo");
    $(".card-content").addClass("magnify");
    $(".asc-buy").addClass("show");

    $(".banner .content h2").html("Activate Now to Get Extra 2 Months Subscription for Free ").addClass("activate");
    $(".btn-content").html("<h3 class='date'>Hurry Up, the offer is Valid for <strong><span class='minutes'>02</span>:<span class='seconds'>00</span></strong></h3> ");
    $(".price h2").html("Activate in the <b>next</b>  <strong class='date'><c class='minutes'>02</c>:<c class='seconds'>00</c></strong>Get Extra 2 Months Subscription for Free! ").addClass("activate");
    $(".price p").html("  1 Year / 3 PCs + Extra 2 Months / 3 PCs");

    $(".top-message .buy-top .buybtn").attr("href", "http://www.iobit.com/buy.php?product=asc103pc1999_aff&ref=" + ref + "&aff=" + aff + "&refs=purchase_asc&tw=" + tw);

    $(".top-message .buy-top .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017halloween');clickCount(2)");

    $(".price .buybtn").attr("href", "http://www.iobit.com/buy.php?product=asc103pc14m1999_aff&ref=" + ref + "&aff=" + aff + "&refs=purchase_asc&tw=" + tw);

    $(".price .buybtn").attr("onclick", "ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017halloween');clickCount(2)");
    $(".card-content").remove();
}

function cSet(name, value) {
    var dateNow = new Date();
    var Days = 2;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
    document.cookie = name + dateNow.getDate() + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
    var dateNow = new Date();
    var arr, reg = new RegExp("(^| )" + name + dateNow.getDate() + "=([^;]*)(;|$)");
    if (arr = document.cookie.match(reg))
        return unescape(arr[2]);
    else
        return null;
}

function countPre() {
    if (typeof(expTime) == 'undefined') {
        clickCount(4);
        var dateNow = new Date();
        var cName = 'expt';
        expTime = Math.floor(dateNow.getTime() / 1000) + 128;
        cSet(cName, expTime);
        counting();
    }
}

function counting() {
    var dateNow = new Date();
    var startTimestamp = parseInt(expTime);
    if (dateNow.getTime() > (expTime * 1000)) {
        if (!$(".title").hasClass('soldout')) {
            cover();
        }
    }
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    if (i < 2) {
        $(".date .minutes").html(i);
        $(".date .seconds").html(s);
    }
    setTimeout('counting()', 1000);
}

function countInit() {
    var cName = 'expt';
    var expireTime = cGet(cName);
    if (expireTime != null) {
        giftGot();
        expTime = expireTime;
        counting();
    }
}

$(function() {
    openCount();
    countInit();
});

function clickCount(ctype) {
    var cTime = 0;
    if (typeof(expTime) != 'undefined') {
        var dateNow = Math.floor((new Date()).getTime() / 1000);
        cTime = expTime - dateNow;
    }
    $.ajax({
        type: 'GET',
        url: 'index.php',
        data: 'action=clickCount&type=-1&timezone=' + MApp(2.2).datetime.getTimeZone() + '&ctype=' + ctype + '&ctime=' + cTime
    })
}

function openCount() {
    $.ajax({
        type: 'GET',
        url: 'index.php',
        data: 'action=clickCount&type=-1&timezone=' + MApp(2.2).datetime.getTimeZone() + '&ctype=0&ctime=0'
    })
}