$(function () {
    (function ($) {
        $.getUrlParam = function (name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) return unescape(r[2]);
            return '';
        }
    })(jQuery);

    // localStorage.clear();
    //swiper
    var _index = 0;
    $('.mobile-right').click(function () {
        _index++;
        var len = $('.mobile li').length;
        // console.log(len,_index)
        if (_index + 5 > len) {
            $('.mobile').stop().append($('.mobile').html());
        }
        $('.mobile').stop().animate({left: -_index * (479 + 82)}, 1000);

    })

    $('.mobile-left').click(function () {
        if (_index == 0) {
            $('.mobile').prepend($('.mobile').html());
            $('.mobile').css('left', '-600px');
            _index = 5;
        }
        _index--;
        $('.mobile').stop().animate({left: -_index * (479 + 82)}, 1000);
    })

    //animation
    var sec1_top = $('.sec1 .container').height();
    var sec1 = $('.sec1').height();
    var sec2 = sec1 + $('.sec2').height()

    $(document).scroll(function () {
        var soldout_status = cGet('soldout');
        var myTop = $(document).scrollTop();
        if (myTop > 250) {
            $('.sec1 .container').addClass('animated');
        }
        //float first
        if (myTop > 550 && box_status1) {
            $('.first_gift').addClass('common_gift');
            $('.mystery').show();
        }
        if (myTop > 550 && box_status) {
            $('.first_gift').addClass('common_gift');
            $('.mystery').show();
        }
        if (myTop <= 550) {
            $('.first_gift').removeClass('common_gift');
        }
        if (myTop >= 770 && box_status) {
            $('.mystery').show();
        }
        if (myTop >= 770 && box_status2) {
            $('.mystery').hide();
        }
        if (myTop >= 770 && box_gift) {
            if (soldout_status) {
                $('.clock').hide();
            } else {
                $('.clock').show();
            }
            $('.mystery').hide();

        }

        if (myTop >= 770 && !box_gift && !box_status) {
            $('.first_gift').addClass('common_gift');
        }

        //float sec
        if (myTop > 550 && box_status2) {
            if (soldout_status) {
                $('.clock').hide();
            } else {
                $('.clock').show();
            }
            if (soldout_status) {
                $('.sec_gift').removeClass('common_gift');
                $('.first_gift').addClass('common_gift');
            } else {
                $('.sec_gift').addClass('common_gift');

            }
            $('.mystery').hide();

        }
        if (myTop > 550 && box_gift) {
            if (soldout_status) {
                $('.sec_gift').removeClass('common_gift');
                $('.first_gift').addClass('common_gift');
            } else {
                $('.sec_gift').addClass('common_gift');

            }

        }
        if (myTop <= 550) {
            $('.sec_gift').removeClass('common_gift');
            $('.mystery').hide();
            $('.clock').hide();
        }
        if (box_gift && box_status) {
            $('.mystery').hide();
        }
        if (myTop > sec1_top) {
            $('.sec1-bottom').addClass('animated');
        }
        if (myTop > sec1) {
            $('.sec2').addClass('animated');
        }
        if (myTop > sec2) {
            $('.sec3').addClass('animated');
        }
    })

    //close
    var box_status1;
    var user_status;
    $('.close_box').click(function () {
        $('.bullet').removeClass('bullet-show');
        cSet('data', true);
        box_status1 = cGet("data");
        $('html,body').animate({scrollTop: 0}, 500);
        cSet('user', true);
        user_status = cGet('user');
        // console.log(user_status)
        clearTimeout(timer);
    })


    $('#close_gift').click(function () {
        box();
        user_status = cGet('user');
        clearTimeout(timer);
        getPacks()
    })

    // Determine page status
    var box_status = cGet("data");
    var box_gift = cGet("gift");
    user_status = cGet('user');
    //Appears after 20 seconds
    var timer = setTimeout(function () {
        if (!box_gift && !box_status && !user_status) {
            $('.bullet').addClass('bullet-show');
            $('.box-top').addClass('box_rotate3');
            $('.box-bottom').addClass('box_rotate4');

        }
    }, 20000)
    if (box_gift) {
        $('.mystery').hide();
        $('.b-gift').css('display', 'flex');
        $('.sec2-box').show();
        $('.b-word').hide();
        var aff = $.getUrlParam('aff');
        var tw = MApp(2.2).datetime.getTimeZone();
        // //修改a链接
        $('.button1').attr({
            "href": 'https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsdpffansale' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
            "onclick": "ga('send', 'event', 'iu1677sdpfbuy', 'buy', 'iupurchase-fansale');"
        })
        $('.button2').attr({
            "href": 'https://www.iobit.com/buy.php?product=iu1pcsdpf&ref=en-iu1pcsdpffansale' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
            "onclick": "ga('send', 'event', 'iu1477sdpfbuy', 'buy', 'iupurchase-fansale');"
        })
        $('.button3').attr({
            "href": 'https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsdpfbfansale' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
            "onclick": "ga('send', 'event', 'iu1677sdpfbbuy', 'buy', 'iupurchase-fansale');"
        })
        $('.button4').attr({
            "href": 'https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsdpffansale' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
            "onclick": "ga('send', 'event', 'iu1677sdpfbuy', 'buy', 'iupurchase-fansale');"
        })
        clearTimeout(timer);

    }

    //first box
    $('.open').on('click', function () {
        $('.first-box').hide();
        $('.sec-gift').show();
    })

    var box_status2;

    //sec box
    function box() {
        $('.bullet').removeClass('bullet-show');
        $('.b-gift').css('display', 'flex');
        $('.sec2-box').show();
        $('.b-word').hide();
        $('.mystery').hide();
        $('.clock').show();
        cSet('gift',true)
        box_status2 = cGet("gift");
        $('html,body').animate({scrollTop: 0}, 500);
        var aff = $.getUrlParam('aff');
        var tw = MApp(2.2).datetime.getTimeZone();
        // //修改a链接
        $('.button1').attr({
            "href": 'https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsdpffansale' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
            "onclick": "ga('send', 'event', 'iu1677sdpfbuy', 'buy', 'iupurchase-fansale');"
        })
        $('.button2').attr({
            "href": 'https://www.iobit.com/buy.php?product=iu1pcsdpf&ref=en-iu1pcsdpffansale' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
            "onclick": "ga('send', 'event', 'iu1477sdpfbuy', 'buy', 'iupurchase-fansale');"
        })
        $('.button3').attr({
            "href": 'https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsdpfbfansale' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
            "onclick": "ga('send', 'event', 'iu1677sdpfbbuy', 'buy', 'iupurchase-fansale');"
        })
        $('.button4').attr({
            "href": 'https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsdpffansale' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
            "onclick": "ga('send', 'event', 'iu1677sdpfbuy', 'buy', 'iupurchase-fansale');"
        })
    }

    $('.get').on('click', function () {
        box();
        clearTimeout(timer);
        getPacks()
    })

    if (cGet("gift")) {
        getPacks()
    }

    function getPacks() {
        date = new Date();
        $.ajax({
            'type': 'get',
            'url': 'fansaleb.php',
            'data': 'action=getpack&d=' + date.getDate(),
            success: function (res) {
                data = JSON.parse(res);
                pack = data.packsNum;
                if (pack > 0) {
                    flipNum(pack, 4, 1000)
                    setTimeout(getPacks, reTime())
                    setTimeout(focus, 800)
                } else {
                    soldOut()
                }
            }
        });
    }


    function focus() {
        $(".reduce").css({
            "opacity": 1,
            "position": "absolute",
            "top": 0,
            "right": 6,
            "zIndex": 8,
            "color": 'white',
            "fontSize": '20px',
            "fontWeight": 600
        }).animate({
            "opacity": 1,
            "top": -20,
            "zIndex": -9,
            "color": 'white',
            "fontSize": '20px',
            "fontWeight": 600
        }, 1000);
    }


    function reTime() {
        $total = parseInt(cGet('fansaleb_t'));
        $fast = parseInt((540 / $total).toFixed(1)) - 1;
        $slow = parseInt((540 / $total).toFixed(1)) + 1;
        retime = (Math.random() > 0.5) ? $fast : $slow;
        return retime * 1000;
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

    function cSet(name, value) {
        var Days = 2;
        var exp = new Date();
        name = name + exp.getDate();
        exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
        document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
    }

    //After closing the box, return to the first page
    $('.mystery').click(function () {
        $('.bullet').addClass('bullet-show');
        $('.first-box').hide();
        $('.sec-gift').show();
    })


    //soldOut()
    function soldOut() {
        clearTimeout(timer);
        $('.soldout1').show();
        $('.sec2-box').hide();
        $('.b-gift').hide();
        $('.b-word').hide();

        cSet('soldout', true);
        $('.sec_gift').removeClass('common_gift');
        // $('.first_gift').addClass('common_gift');
        var aff = $.getUrlParam('aff');
        var tw = MApp(2.2).datetime.getTimeZone();
        $('.button1').attr({
            "href": 'https://www.iobit.com/buy.php?product=iu113pc1677&ref=en-iu3pcfansale' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
            "onclick": "ga('send', 'event', 'iu1677buy', 'buy', 'iupurchase-fansale');"
        })
        $('.button2').attr({
            "href": 'https://www.iobit.com/buy.php?product=iu111pc1477&ref=en-iu1pcfansale' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
            "onclick": "ga('send', 'event', 'iu1477buy', 'buy', 'iupurchase-fansale');"
        })
        $('.button3').attr({
            "href": 'https://www.iobit.com/buy.php?product=iu113pc1677&ref=en-iu3pcafansale' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
            "onclick": "ga('send', 'event', 'iu1677abuy', 'buy', 'iupurchase-fansale');"
        })
        $('.button4').attr({
            "href": 'https://www.iobit.com/buy.php?product=iu113pc1677&ref=en-iu3pcbfansale' + refStr + '&aff=' + aff + '&refs=purchase_iu&tw=' + tw,
            "onclick": "ga('send', 'event', 'iu1677bbuy', 'buy', 'iupurchase-fansale');"
        })
    }

    var _num = $('.total-num').find('span');
    var arr = [];
    _num.each(function (index, item) {
        arr.push($(this).html());
    })
    var zz = arr.every(function (__num) {
        return __num == 0;
    })
    //When the number of gifts is zero, soldout appears
    if (zz) {
        soldOut();
    }
    // soldOut();


    $('.home').mousemove(function (e) {
        var xx = e.clientX;
        var yy = e.clientY;
        var box_status = cGet("data");
        var box_gift = cGet("gift");
        var soldout = cGet("soldout");
        if (yy < 20 && !box_status) {
            $('.bullet').addClass('bullet-show');
            $('.box-top').addClass('box_rotate3');
            $('.box-bottom').addClass('box_rotate4');
        }

        if (yy < 20 && box_gift) {
            $('.bullet').removeClass('bullet-show');

        }
        if (yy < 20 && soldout) {
            $('.bullet').removeClass('bullet-show');

        }
    })


//num 

    function PrefixInteger(num, length) {
        ret = '';
        for (var a = 0; a < 3; a++) {
            ret += (Array(4).join('0') + num).slice(-length);
        }
        return ret;
    }

    function flipNum(num, length, _time) {
        $(".nwrap .numlist").html('');
        $(".nwrap em").remove();
        var number = PrefixInteger(num, length);
        var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        var list = '';
        var len = String(number).length;
        var str = number.toString();
        for (var j = 0; j < arr.length; j++) {
            list += '<span>' + arr[j] + '</span>';
        }
        $(".barbox").css('width', num * 1.5)
        $(".nwrap .numlist").append(list);

        for (var a = 0; a <= len; a++) {
            var curNum = str.substring(a, a + 1);
            $("#topNum .nwrap").eq(a).append('<em>' + curNum + '</em>');
            $("#botNum .nwrap").eq(a).append('<em>' + curNum + '</em>');

            $("#topNum .numlist").eq(a).animate({
                marginTop: -curNum * 30,
            });
            $("#botNum .numlist").eq(a).animate({
                marginTop: -curNum * 30,
            });

        }

    }
})