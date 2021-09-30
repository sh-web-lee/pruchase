$.fn.userMouseover = function (UserMessage) {
    $(this).mouseover(function (event) {
        var num = $(this).index();
        $(this).addClass("active").siblings().removeClass("active");
        $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
    });
};

$.fn.scrollWindow = function (topheight, scrollclass, ClassName) {
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > topheight.offset().top) {
            scrollclass.addClass(ClassName);
        } else {
            scrollclass.removeClass(ClassName);
        }
    });
};

function floatLayer() {
    $("#main").append('<div class="floatlayer" id="floatlayer"><div class="oops"><h2>OOPS!</h2><p>THIS 24-HOUR FLASH SALE IS EXPIRED, <span>BUT WE HAVE ANOTHER OFFER ON SALE NOW.</span></p><a href="http://purchase.iobit.com/en/asc/index.php">Go & Check it Out >></a></div></div>');
    if (!$(".floatlayer").hasClass("on")) {
        setTimeout('$(".floatlayer").addClass("on");', 100);
    } else {
        $(".floatlayer").remove();
    }
    $(".floatlayer .close").on("click", function () {
        $(".floatlayer").remove();
    });
}

function getRandomArrayElements(arr, count) {
    var shuffled = arr.slice(0),
        i = arr.length,
        min = i - count,
        temp,
        index;
    while (i-- > min) {
        index = Math.floor((i + 1) * Math.random());
        temp = shuffled[index];
        shuffled[index] = shuffled[i];
        shuffled[i] = temp;
    }

    return shuffled.slice(min);
}

$(function () {
    $(".review .users li").userMouseover($(".review .content dl"));
    $(window).scrollWindow($(".review .users"), $('.worldmap .mapbox'), ("play"));
    $('.worldmap .dialog div').removeClass('on');
    for (var i in users) {
        setUser(users[i], i);
    }
    timeInit();
    countdown((".countdown strong"));
    setTimeout('getPurchasedUsers()',4000);
});

function setUser(userArr, area) {
    userArr.forEach(function (value, index, array) {
        var elementOn = $('.' + area + '0' + value['index']);
        elementOn.addClass('on');
        elementOn.find('span').html(value['userName']);
    })
}

function getPurchasedUsers(){
    $.ajax({
        type:'GET',
        url:'2018midsalefree.php',
        data:'action=getPurchasedUsers',
        success:function(res){
            var purchasedUser=JSON.parse(res);
            $(".dialog").find("div").removeClass("on");
            for (var i in purchasedUser) {
                setUser(purchasedUser[i], i);
            }
        }
    });
    setTimeout('getPurchasedUsers()',4000);
}

function cSet(cName,cVal){
    var Days = 30;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
    var date = new Date();
    var cName = "enascmid" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    var nowTime=Math.floor(date.getTime()/1000);
    if (arr == null) {
        countTime=nowTime+24*3600;
        cSet(cName,countTime);
    } else {
        countTime=parseInt(arr[2]);
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

var countdown = function (countdown,tType){
    var date=new Date();
    var timeNow=date.getTime()/1000;
    if(timeNow<=countTime) {
        getCycleCountdown(countTime);
        $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s)
        setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
    }else{
        floatLayer();
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