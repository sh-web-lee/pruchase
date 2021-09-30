(function(){
    var os = function() {
        var ua = navigator.userAgent,
        isWindowsPhone = /(?:Windows Phone)/.test(ua),
        isSymbian = /(?:SymbianOS)/.test(ua) || isWindowsPhone,
        isAndroid = /(?:Android)/.test(ua),
        isFireFox = /(?:Firefox)/.test(ua),
        isChrome = /(?:Chrome|CriOS)/.test(ua),
        isTablet = /(?:iPad|PlayBook)/.test(ua) || (isAndroid && !/(?:Mobile)/.test(ua)) || (isFireFox && /(?:Tablet)/.test(ua)),
        isPhone = /(?:iPhone)/.test(ua) && !isTablet,
        isPc = !isPhone && !isAndroid && !isSymbian;
        return {
            isTablet: isTablet,
            isPhone: isPhone,
            isAndroid : isAndroid,
            isPc : isPc
        };
    }();
    if (os.isPhone || os.isAndroid) {
        $('.action-img, .try').removeClass('fadeInLeft').addClass('fadeInUp')
        $('.action-content, .payment-img').removeClass('fadeInRight').addClass('fadeInUp')
        $('.enjoy-list .active dt img').attr('src', './images/function01.png')
        $('.enjoy-list li dt img').each(function() {
            var imgAlt = $(this).attr('alt')
            var newSrc = './images/' + imgAlt + '-active.png'
            $(this).attr('src', newSrc)
        })
    }
    if (os.isPc) {
        $('.enjoy-list li').mouseenter(function() {
            if(!$(this).is('.active')){
                var img = $(this).find('dt img')
                var srcArr = img.attr('src').split('.png')
                var newSrc = srcArr[0] + '-active.png'
                img.attr('src', newSrc)
            }
        })
        $('.enjoy-list li').mouseleave(function() {
            if(!$(this).is('.active')){
                var img = $(this).find('dt img')
                var srcArr = img.attr('src').split('-active.png')
                var newSrc = srcArr[0] + '.png'
                img.attr('src', newSrc)
            }
        })
        $('.enjoy-list li').click(function() {
            $(this).addClass('active').siblings().removeClass('active')
            $(this).siblings().find('dt img').each(function() {
                var alt = $(this).attr('alt')
                var otherSrc = './images/' + alt + '.png'
                $(this).attr('src', otherSrc);
            })
            var img = $(this).find('dt img')
            var srcArr = img.attr('src').split('/')[2].split('-')[0]
            var className = '.' + srcArr + '-img'
            $(className).css('display', 'block').siblings().css('display', 'none')
            $(className).find('.icon').animate({}, function() {
                $(this).css({'transform':'scale(1)'});
            })
        })
    }
})();