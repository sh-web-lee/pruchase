$.fn.target = function (target, yoffset) {
    $(this).click(function () {
        if (!yoffset) yoffset = 0;
        var Theigth = target.offset().top - yoffset;
        $("html, body").animate({
            scrollTop: Theigth
        }, 'slow');
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
$(".review dl dt .img-box").mouseover(function (event) {
    $(this).parent().parent().addClass("active").siblings().removeClass("active");
});
function focus() {
    $(".reduce").css({"opacity": 1, "top": 0, "zIndex": 8}).animate({"opacity": 0, "top": -120, "zIndex": -9}, 800);
}
function flicker5() {
    $(".header .gift-box").addClass("flicker5");
    $(".floatlayer").addClass("flicker5");
}
function flicker3() {
    $(".header .gift-box").addClass("flicker3");
    $(".floatlayer").addClass("flicker3");
}
$(window).on('scroll', function () {
    if ($(window).scrollTop() > $(".gift-message").offset().top) {
        $('.review dl').addClass("red-round");
    } else {
        $('.review dl').removeClass("red-round");
        $('.review dl.active').addClass("red-round");
    }
    if ($(window).scrollTop() > $(".header h4").offset().top) {
        $('.db-message .img-box,.db-message .message,.floatlayer').addClass("on");
    } else {
        $('.db-message .img-box,.db-message .message,.floatlayer').removeClass("on");
    }

});


$("#floatlayer .close").on('click', function (event) {
    $("#floatlayer").hide();
});
$(function () {
    $(".header .gift-box h4 i").target($(".gift-message"), 90);
    $(".bottom-buy ul li").mouseover(function () {
        var num = $(this).index();
        var index = $(this).index();
        $(this).addClass("active").siblings().removeClass("active");
        $(".bottom-buy .buybtn").attr("href", $(".header .box").eq(index).find(".buybtn").attr("href"));
        $(".bottom-buy .buybtn").attr("onclick", $(".header .box").eq(index).find(".buybtn").attr("onclick"));
        $(".bottom-buy .price strong b").html($(".header .box").eq(index).find(".price b").text())
        $(".bottom-buy .price del").html($(".header .box").eq(index).find(".price del").text())
        if (num == 0) {
            $(".bottom-buy .img-box").removeClass("three-gift").removeClass("three-pc");
        }
        else if (num == 1) {
            $(".bottom-buy .img-box").addClass("three-gift").removeClass("three-pc");
        }
        else {
            $(".bottom-buy .img-box").removeClass("three-gift").addClass("three-pc");
        }
    });
    packsInit();
});

function getReTime() {
    var reTime = 10;
    if (packs > 77) {
        reTime = 3;
    }
    return reTime * 1000;
}

function packsInit() {
    var date = new Date();
    var cName = "itdbmar_p" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    if (arr == null) {
        packs = 79;
    } else {
        packs = arr[2];
    }
    $('.packsNum').html(packs);
    if (packs <= 5) {
        if (packs <= 3) {
            flicker3();
        } else {
            flicker5();
        }
    }
    setTimeout('getSales()', getReTime());
}

function getSales() {
    var date = new Date();
    $.ajax({
        type: "GET",
        url: "marsale2019.php",
        data: "action=getPacks&d=" + date.getDate(),
        success: function (res) {
            var sales = JSON.parse(res);
            var saleType = sales.saleType;
            if(saleType=='offerta FAMILIARE'){
                var scrollHeight = $(".header h4").offset().top;
                if ($(window).scrollTop() > scrollHeight) {
                    $(".floatlayer").removeClass('on');
                    setTimeout("$('.floatlayer').addClass('on');", 800);
                }
                $("#first").html(sales.firstName);
                $("#last").html(sales.lastName);
                $("#saleType").html(sales.saleType);
            }else {
                if (sales.packsNum != packs) {
                    packs = sales.packsNum;
                    $('.packsNum').html(packs);
                    focus();
                    var scrollHeight = $(".header h4").offset().top;
                    if ($(window).scrollTop() > scrollHeight) {
                        $(".floatlayer").removeClass('on');
                        setTimeout("$('.floatlayer').addClass('on');", 800);
                    }
                    $("#first").html(sales.firstName);
                    $("#last").html(sales.lastName);
                    $("#saleType").html(sales.saleType);
                    if (packs <= 5) {
                        if (packs <= 3) {
                            flicker3();
                        } else {
                            flicker5();
                        }
                    }
                }
            }
        }
    });
    setTimeout('getSales()', getReTime());
}
