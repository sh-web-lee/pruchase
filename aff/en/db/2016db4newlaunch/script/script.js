$('.check-btn').click(function(event) {
	var target = $(this).parent().parent();
	var type = $(this).attr('data-type');
	var buddy = $('.mid-selet .options.active');
	if (target.is('.active')) {
		return;
	}else{
		toggle(init(type));	
		target.addClass('active').siblings().removeClass('active');
		buddy.removeClass('active').siblings().addClass('active');
		animate();
	} 	
});
$('.mid-selet .options').click(function(event) {
	var target = $(this);
	var type = $(this).attr('data-type');
	var buddy = $('.header .options.active')
	buddy.removeClass('active').siblings().addClass('active');
	if(target.is('active')){
		return;
	}else{
		toggle(init(type));
		target.addClass('active').siblings().removeClass('active');
	}
});
// functions
function animate(){
	$('.header .cart .mask').addClass('move');
	setTimeout(function(){
		$( ".header .cart .extraText" ).find('ins').addClass('zoomout');
		$( ".header .cart .discpunt" ).find('ins').addClass('zoomout');
	}, 500 );
	setTimeout(function() {
		$('.header .cart .mask').remove();
		$('<div class="mask"></div>').appendTo($('.header .cart '));
	}, 1000 );
}
function init(type) {
	var aff=MApp(2.2).url.getParameters('aff');
	var ref=MApp(2.2).url.getParameters('ref');
	if(ref.length==0){
		ref='enaff_db_2016db4newlaunch';
	}
	if (type=='1pc') {
		dataLink = "http://www.iobit.com/buy.php?product=affdb414m1pc&ref="+ref+"&aff="+aff+"&refs=purchase_db";
		Extra = "$2.99";
		extraText = "Extra 2 Months";
		subTotal = "$27.95";
		Discount = " -$5";
		discountText = "$25+";
		Total = "$22.95";
		Per = "$1.63";
		Month ="14 Months / 1 PC";
	}
	if (type=='3pcs') {
		dataLink = "http://www.iobit.com/buy.php?product=affdb414m3pc&ref="+ref+"&aff="+aff+"&refs=purchase_db";
		Extra = "$19.99";
		extraText = "Extra 2 Months + 2 PCs Supported";
		subTotal = "$44.95";
		Discount = " -$20";
		discountText = "$30+";
		Total = "$24.95";
		Per = "$0.59";
		Month ="14 Months / 3 PCs";
	}
}
function toggle(contents) {
	$('.link-btn').attr('href', dataLink);
	$('.extraText').html(extraText + '<ins>'+extraText+'</ins>');
	$('.extraPrice').html(Extra);
	$('.subTotal').html(subTotal);
	$('.Month').html(Month);
	$('.discountText').html(discountText);
	$('.discpunt').html(Discount + '<ins>'+Discount+'</ins>');
	$('.Total').html(Total);
	$('.mid-selet .per').html(Per);
}

function cycleCountdown(){
	var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
	$('#countdown').html('<li>'+ h +'<span>hr</span> : </li><li>'+ i +'<span>m</span> : </li><li>'+ s +'<span>s</span> : </li><li class="last">'+ mi +'<sup>*</sup></li>')
	setTimeout('cycleCountdown()', 1);
}
cycleCountdown();

function goTaget(target) {
	var Theigth = target.offset().top;
	$("html, body").animate({scrollTop: Theigth}, 'slow');
}
$('.more p').click(function(event) {
	if($(this).parent().hasClass('active')) {
		$(this).parent().removeClass("active");
		$(this).parent().find("ul").removeClass("show");
	}
	else {
		$(this).parent().addClass("active");
		$(this).parent().find("ul").addClass("show");
	}
});