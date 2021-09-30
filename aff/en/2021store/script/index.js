
$('.nav li').click(function() {
    var idx = $(this).index()
    $('.nav li').removeClass('active')
    $(this).addClass('active')

    $('.nav li').each(function(index) {
        var imgName = $(this).find('img').attr('alt')
        var imgSrc = 'images/' + imgName + '.png'
        var imgActiveSrc = 'images/' + imgName + '-active.png'
        var bgSrc = 'url(images/' + imgName + '-active-bg.png) no-repeat'
        if (idx === index) {
            var className = '.' + imgName + '-box'
            $(this).find('img').attr('src', imgActiveSrc)
            $(this).css('background', bgSrc)
            $('.platform-box').hide()
            $(className).show()
        } else {
            $(this).find('img').attr('src', imgSrc)
            $(this).css('background', '')
        }
        if (index !== 0) {
            $('.flo-win').hide();
        } else {
        }
    })
})


var isClick = false
var proHeight = $('.pro-title').offset().top - 30;
var securityHeight = $('.security-title').offset().top - 30;

// 回到首页
$('.top').click(function() {
    isClick = true
    $("html,body").animate({ scrollTop: 0 }, 500);
    $('.flo-win').css('display', 'none');
    setTimeout(function() {
        isClick = false
    }, 500)
})

$(window).on('scroll', function() {
    var platform = $('.nav li.active img').attr('alt')
    if (isClick || platform !== 'windows') {
        return
    }
    var scrollTop = $(document).scrollTop();
    if (scrollTop < proHeight - 500) {
        $('.flo-win').css('display', 'none');
    } else {
        $('.flo-win').css('display', 'block');
        if (scrollTop >= proHeight - 500 && scrollTop < securityHeight - 500) {
            $(".flo-win li").each(function(index){
                if (index === 0) {
                    $(this).addClass('active')
                } else {
                    $(this).removeClass('active')
                }
            });
        } else {
            $(".flo-win li").each(function(index){
                if (index === 1) {
                    $(this).addClass('active')
                } else {
                    $(this).removeClass('active')
                }
            });
        }
    }
});


reloadPage()
function reloadPage() {
    var curHeight = $(document).scrollTop();
    if (curHeight < proHeight - 500) {
        $('.flo-win').css('display', 'none');
    } else {
        $('.flo-win').css('display', 'block');
        if (curHeight >= proHeight - 500 && curHeight < securityHeight - 500) {
            $(".flo-win li").each(function(index){
                if (index === 0) {
                    $(this).addClass('active')
                } else {
                    $(this).removeClass('active')
                }
            });
        } else {
            $(".flo-win li").each(function(index){
                if (index === 1) {
                    $(this).addClass('active')
                } else {
                    $(this).removeClass('active')
                }
            });
        }
    }
}

$(".flo-win li").click(function () {
    isClick = true
    $(".flo-win li").removeClass("active");
    $(this).addClass("active");
    var idx = $(this).index();
    if (idx === 0) {
        $("html,body").animate({ scrollTop: proHeight }, 500);
    } else {
        $("html,body").animate({ scrollTop: securityHeight }, 500);
    }
    setTimeout(function() {
        isClick = false
    }, 500)
});
