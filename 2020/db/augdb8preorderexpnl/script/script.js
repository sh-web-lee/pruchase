function packNum(number, starnumber) {
    $('.buyNum').prop('number', starnumber).animateNumber({
        number: number
    }, 1500);
}

function PrefixInteger(num, length) {
    return (Array(length).join('0') + num).slice(-length);
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
            marginTop: -curNum * 29,
        }, _time, function() {
            if (a = 1) {
                $("#topNum .nwrap").eq(1).find("em").css({
                    "opacity": 1,
                    "fontSize": 26 + "px"
                }).animate({
                    "opacity": 0,
                    "fontSize": 46 + 'px',
                }, 500);
            }
        });
        $("#botNum .numlist").eq(a).animate({
            marginTop: -curNum * 29,
        }, _time, function() {
            if (a = 1) {
                $("#botNum .nwrap").eq(1).find("em").css({
                    "opacity": 1,
                    "fontSize": 26 + "px"
                }).animate({
                    "opacity": 0,
                    "fontSize": 46 + 'px',
                }, 500);
            }
        });
    }
}

function soldout() {
    var aff = MApp(2.2).url.getParameters('aff');
    $(".banner,.floatlayer").removeClass("sold").addClass("sold");
    $(".banner .numbox").remove();
    $(".price strong").remove();
    $(".banner .right p").html("Exclusieve deal uitverkocht");
    $(".banner .right h2").html("Toch Nog 60% Korting");
    $(".price span").html("<strong>€<b>24</b>,99</strong><del>€74,85 </del>")
    $(".floatlayer .numbox").html('Krijg <strong>60% Korting</strong> op de Beste Driver Updater ');
    $(".buybtn").attr({
        "href": 'https://www.iobit.com/buy.php?product=nl-db8preorder2499&ref=nl_db8preorderexp2499' + refStr + '&aff=' + aff + '&refs=nl_purchase_db&tw=-8',
        "onclick": "ga('send', 'event', 'dbbuy', 'buy', 'db8preorderexpsoldout-nl');"
    })
    $('.price .buybtn').text('Krijg PRO Terug');
}

function seview() {
    var num = $(".feature .message-box dl.active").index();
    $(".feature .message-box dl").eq(num + 1).addClass("active").siblings().removeClass("active");
    $(".feature .message01 .img-box li").eq(num + 1).addClass("active").siblings().removeClass("active");
    if (num == 3) {
        clearInterval(d);
    }
}
var e = 0;
var d;
var flag = true;
$(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
        $('.floatlayer').addClass('on');
    } else {
        $('.floatlayer').removeClass('on');
    }
    if ($(window).scrollTop() > $(".feature .message01").offset().top - 200) {
        e += 1;
        if (e == 1) {
            d = setInterval(function() {
                seview()
            }, 5000);
        }
    }
    $("[data-name^='animation']").each(function(i) {
        if ($(document).scrollTop() > $(this).offset().top - 200) {
            $(this).find("[data-name^='default']").addClass('on');
        }
    });
    if ($(window).scrollTop() > $(".feature .message02").offset().top - 200) {
        if (flag) {
            flag = false;
            setTimeout(function() {
                if($(".message02 .updated").text()!=0) {
                    numberJump(".message02 .updated", 0, 1200);
                }
                if($(".message02 .fixed").text()!=0) {
                    numberJump(".message02 .fixed", 0, 1200);
                }
                if($(".message02 .game").text()!=0) {
                    numberJump(".message02 .game", 0, 1200);
                }
            }, 500);
        } else {
            return;
        }
    }
});

$(document).ready(function() {
    var startTime = new Date().getTime();
    var c = 0;
    $(".feature .message-box dl").click(function(event) {
        var num = $(this).index();
        $(this).addClass("active").siblings().removeClass("active");
        $(".feature .message01 .img-box li").eq(num).addClass("active").siblings().removeClass("active");
        c += 1;
        if (c > 1) {
            clearInterval(d);
        } else {
            if (new Date().getTime() - startTime > 30000) {
                clearInterval(d);
                return;
            }
        }
    });
    var continer = $(".review-message").width();
    if ($('.review-message .roll').length != 0) {
        var count = $('.review-message .roll dl').length;
        $('.review-message .roll').css('width', continer * count);
    };
    $('.review-box span.next').click(function(event) {
        var num = $(".review-box ul li.active").index();
        if (num == 4) {
            $(".review-box ul li").eq(0).addClass("active").siblings().removeClass("active");
            $(".review-box .light").css('left', '117px');
        } else {
            var len = num + 1;
            $(".review-box ul li").eq(num + 1).addClass("active").siblings().removeClass("active");
            $(".review-box .light").css('left', 117 + (len * 175));
        }

        $('.review-message  .roll').stop(true, true).animate({ marginLeft: -continer }, 'slow', function() {
            $('.review-message  .roll').css('marginLeft', '0');
            $('.review-message  .roll').find('dl:first').appendTo($('.review-message  .roll'));

        });
    });
    $('.review-box  span.prev').click(function(event) {
        $('.review-message  .roll').find('dl:last').prependTo($('.review-message  .roll'));
        $('.review-message  .roll').css('marginLeft', -continer);
        $('.review-message  .roll').stop(true, true).animate({ marginLeft: 0 }, 'slow');
        var num = $(".review-box ul li.active").index();
        if (num == 0) {
            $(".review-box ul li").eq(4).addClass("active").siblings().removeClass("active");
            $(".review-box .light").css('left', 117 + (4 * 175));
        } else {
            var len = num - 1;
            $(".review-box ul li").eq(num - 1).addClass("active").siblings().removeClass("active");
            $(".review-box .light").css('left', 117 + (len * 175));
        }
    });
});

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

function packsInit() {
    packs = 99;
    getSales(1);
}

function numberJump(obj, num, time) {
    var num2 = $(obj).text();
    $(obj).prop('number', num).animateNumber({
        number: num2,
    }, time);
}

function getSales(isInit) {
    var date = new Date();
    $.ajax({
        type: "GET",
        url: "db8preorderexp.php",
        data: "action=getPacks&d=" + date.getDate(),
        success: function(res) {
            var sales = JSON.parse(res);
            if (sales.packsNum != packs) {
                packs = sales.packsNum;
                if (isInit) {
                    flipNum(sales.packsNum, 2, 1000);
                } else {
                    flipNum(sales.packsNum, 2, 500);
                }
                if ((packs <= 0) && (!$(".banner,.floatlayer,.price").hasClass('sold'))) {
                    soldout();
                }
            }
            if (packs > 0) {
                setTimeout('getSales(0)', getReTime());
            }
        }
    });
}

function getReTime() {
    var packsNumTotal = cGet('nldbexp_t');
    if (packsNumTotal > 1) {
        if ((packsNumTotal - packs) <= 30) {
            retime = (Math.random() > 0.5) ? 2 : 6
            return retime * 1000;
        } else {
            if(packsNumTotal <= 98 && packsNumTotal >= 90){
                retime = (Math.random() > 0.5) ? 3.5 : 5.5;
            }else if(packsNumTotal <= 89 && packsNumTotal >= 80){
                retime = (Math.random() > 0.5) ? 4.5 : 6.5;
            }else if(packsNumTotal <= 79 && packsNumTotal >= 70){
                retime = (Math.random() > 0.5) ? 5.5 : 7.5;
            }else{
                retime = (Math.random() > 0.5) ? 7 : 9;
            }
            return retime * 1000;
        }
    } else {
        return 20000;
    }
}

function getViewNum() {
    $.ajax({
        type: "GET",
        url: "db8preorderexp.php",
        data: "action=getViewNum",
        success: function(res) {
            $('.buyNum').html(res);
        }
    });
    setTimeout('getViewNum()', 12000);
}

$(function() {
    packsInit(1);
    setTimeout('getViewNum()', 12000);
});