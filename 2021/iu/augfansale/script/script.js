$(function () {
    /* review*/
    $('.review-people div').click(function () {
        $(this).addClass('on').siblings().removeClass('on');
        var index = $(this).index();
        $('.review-word li').eq(index).addClass('active').siblings().removeClass('active');
    });

    /* animation*/
    var hBanner = $('.banner').height();
    var sec1 = hBanner + $('.sec1-data').height() - 400;
    var sec2 = sec1 + $('.sec1-table').height();
    var review = sec2 + $('sec2-box').height() + 1000;
    $(document).scroll(function () {
        var myTop = $(document).scrollTop();
        if (myTop > 200) {
            $('.sec1-ul').addClass('animated');
        }
        if (myTop > 540) {
            /* float*/
            $('.float').addClass('floatUp');
        } else {
            $('.float').removeClass('floatUp');
        }
        if (myTop >= hBanner - 300) {
            $('.sec1-data').addClass('animated');
        }
        if (myTop >= sec1) {
            $('.sec1-table').addClass('animated');
        }
        if (myTop >= sec2) {
            $('.sec2 .container').addClass('animated');
        }
        if (myTop >= review) {
            $('.review').addClass('animated');
        }
    })
    countdown()
    getOver()
});

// function cycleCountdown() {
//     var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 23:59:59');
//     var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
//     d = MApp(2.2).packages.zeroize(datetime[0], 2);
//     h = MApp(2.2).packages.zeroize(datetime[1], 2);
//     i = MApp(2.2).packages.zeroize(datetime[2], 2);
//     s = MApp(2.2).packages.zeroize(datetime[3], 2);
//     mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
//     $("#time1 span").eq(0).html(h[0]).end().eq(1).html(h[1]).end().eq(2).html(i[0]).end().eq(3).html(i[1]).end().eq(4).html(s[0]).end().eq(5).html(s[1]).end();
//     $("#time2 span").eq(0).html(h[0]).end().eq(1).html(h[1]).end().eq(2).html(i[0]).end().eq(3).html(i[1]).end().eq(4).html(s[0]).end().eq(5).html(s[1]).end();
//     $(".float .container .float-time span").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end();
//     setTimeout('cycleCountdown()', 1000);
// }
function cSet(cName, cVal) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
	document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
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

function countdown() {
    var date = new Date();
    var cName = "augfansale"
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    var nowTime = Math.floor(date.getTime() / 1000);
    if (arr == null) {
        countTime = nowTime + 3600*12;
        cSet(cName, countTime);
    } else {
        countTime = parseInt(arr[2]);
    }
	getCycleCountdown(countTime);
	$("#time1 span").eq(0).html(h[0]).end().eq(1).html(h[1]).end().eq(2).html(i[0]).end().eq(3).html(i[1]).end().eq(4).html(s[0]).end().eq(5).html(s[1]).end();
    $("#time2 span").eq(0).html(h[0]).end().eq(1).html(h[1]).end().eq(2).html(i[0]).end().eq(3).html(i[1]).end().eq(4).html(s[0]).end().eq(5).html(s[1]).end();
    $(".float .container .float-time span").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end();
    if(countTime < nowTime){
        countTime = nowTime + 3600*12;
        cSet(cName, countTime);
    }
	setTimeout("countdown()", 1000);
}
function getCycleCountdown(endTime) {
    var datetime = timeCountDown(endTime);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 3);
}

function getOver() {
    $.ajax({
        type: 'get',
        url: 'augfansale.php',
        data: 'action=Overnum',
        success: function (res) {
            num = parseInt($("#over_num").text().replace(/[^\d]/g, ''));
            num += parseInt(res);
            $("#over_num").text(parseFloat(num).toLocaleString());
        }
    })
    setTimeout('getOver()', 60000);
}