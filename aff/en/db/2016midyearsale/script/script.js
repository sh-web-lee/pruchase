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
		target.find('span').addClass('shake');
		setTimeout(function() {
			target.find('span').removeClass('shake');
		}, 1500 );
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

function GetRequest() {   
   var url = location.search;
   var theRequest = new Object();   
   if (url.indexOf("?") != -1) {   
      var str = url.substr(1);   
      strs = str.split("&");   
      for(var i = 0; i < strs.length; i ++) {   
         theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);   
      }   
   }   
   return theRequest;   
}   
function init(type) {
	var Request = new Object();
		Request = GetRequest();
		aff = Request["aff"];
    //refs=['db3giveaway','db3st13','dbst3atweb','dbst4atweb','db3st20'];
    //var ref1pc='db1pc2016apr', ref3pc='db3pc2016apr';
    ref=Request['ref'];
    //if(($.inArray(ref,refs))>=0){
    //    ref1pc+='-'+ref;
    //    ref3pc+='-'+ref;
    //}
    //if(ref=='db3irsource'){
    //    ref1pc=ref3pc='db3irsource';
    //}else if(ref=='ddniDB'){
    //    ref1pc=ref3pc='ddniDB';
    //}
    if(ref==undefined){
        ref='enaff_db_2016midyearsale';
    }
	if (aff == undefined) {
		aff='';
	}
	if (type=='1pc') {
		dataLink = "http://www.iobit.com/buy.php?product=db14m1pc&ref="+ref+"&aff="+aff+"&refs=purchase_db";
		dataAnalytics = "ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016midyearsale');";
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
		dataLink = "http://www.iobit.com/buy.php?product=db14m3pc&ref="+ref+"&aff="+aff+"&refs=purchase_db";
		dataAnalytics = "ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016midyearsale');";
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
	$('.link-btn').attr('onclick', dataAnalytics);
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
	$('#countdown').html('<li>'+ h +'<span>hr</span> : </li><li>'+ i +'<span>m</span> : </li><li>'+ s +'<span>s</span> : </li><li class="last">'+ mi +'</li>')
	setTimeout('cycleCountdown()', 1);
}
cycleCountdown();

function goTaget(target) {
	var Theigth = target.offset().top;
	$("html, body").animate({scrollTop: Theigth}, 'slow');
}