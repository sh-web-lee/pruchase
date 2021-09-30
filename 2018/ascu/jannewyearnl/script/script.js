 //count down
function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2017-03-08 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $(".banner .countdown li span").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    $(".bottom-bg .count-num li span").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    setTimeout('cycleCountdown()', 1);
}
cycleCountdown();

// review
$('.review .handle li').hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});