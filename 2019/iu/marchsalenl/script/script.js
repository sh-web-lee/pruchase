
$(window).on('scroll', function () {
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
        $('.intro dl').addClass("on");
    } else {
        $('.intro dl').removeClass("on");
    }

});
 function refto() {
 	$(".banner h1").html("Update verouderde software automatisch voor een klein prijsje!").addClass("refto");
 	$(".banner p.pro").html("IObit Uninstaller PRO verwijdert de hardnekkigste software zonder sporen achter te laten en werkt <br /> automatisch software op uw computer bij. ");
 	$(".intro h2").html("Update uw verouderde software automatisch!");
 	$(".intro h4").html("IObit Uninstaller PRO werkt al uw belangrijke software tegelijkertijd bij zonder dat u de website van de ontwikkelaar hoeft te bezoeken. U hoeft <br> zich geen zorgen meer te maken over kwetsbaarheden in uw software en bent altijd voorzien van de nieuwste functies.");
 }

$(function () {
	if ($('.usreview .roll').length != 0) {
		var count = $('.usreview .roll dl').length;
		$('.usreview .roll').css('width', 900 * count);
	}
	$('.usreview .dg-next').click(function (event) {
		$('.usreview .roll').stop(true, true).animate({marginLeft: -900}, 'slow', function () {
			$('.usreview .roll').css('marginLeft', '0');
			$('.usreview .roll').find('dl:first').appendTo($('.usreview .roll'));
		});
	});
	$('.usreview .dg-prev').click(function (event) {
		$('.usreview .roll').find('dl:last').prependTo($('.usreview .roll'));
		$('.usreview .roll').css('marginLeft', -900);
		$('.usreview .roll').stop(true, true).animate({marginLeft: 0}, 'slow');
	});
	var paramTo=MApp(2.2).url.getParameters('to');
	if((paramTo=='softall')||(paramTo=='softnew')){
		refto();
	}
});

setInterval(function () {
	$('.usreview .roll').stop(true, true).animate({marginLeft: -900}, 'slow', function () {
		$('.usreview .roll').css('marginLeft', '0');
		$('.usreview .roll').find('dl:first').appendTo($('.usreview .roll'));
	});
}, 15000);
