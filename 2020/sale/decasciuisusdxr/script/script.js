//goTarget
function goTarget(target, yoffset) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}

var saleexclu = $(".saleexclu-cont").offset().top;
$(window).on('scroll', function() {
  if ($(window).scrollTop() > 500) {
    $('.floatlayer').addClass('on');
  } else {
    $('.floatlayer').removeClass('on');
  }

  if ($(window).scrollTop() > saleexclu) {
    $(".saleexclu-cont").addClass("fixed");
  } else {
    $(".saleexclu-cont").removeClass("fixed");
  }
  
});


$('.review .next').click(function(event) {
  $('.review .roll').stop(true, true).animate({marginLeft: -820}, 'slow',function(){
    $('.review .roll').css('marginLeft', '0');
    $('.review .roll').find('dl:first').appendTo($('.review .roll'));
  });
});
$('.review .prev').click(function(event) {
  $('.review .roll').find('dl:last').prependTo($('.review .roll'));
  $('.review .roll').css('marginLeft', -820);
  $('.review .roll').stop(true, true).animate({marginLeft: 0}, 'slow');
});
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}



function cSet(name,value) {
  var Days=2;
  var exp = new Date();
  name=name+exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var exp = new Date();
  name=name+exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

var pdtsInfo = {"0":{"oldPrice":0,"price":0,"off":"0","offPrice":"0","ga":"ga('send', 'event', 'no', 'buy', 'no');","link":"javascript:void(0);"},"asciuisusd":{"oldPrice":"165.96","price":"16.59","off":"90","offPrice":"149.37","ga":"ga('send', 'event', 'asciuisusdbuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020asciuisusd1659&ref=xr_asciuisusd"+ refStr +"&refs=purchase_4bundlexr "},"undefined":{"oldPrice":"32.99","price":"9.99","off":"70","offPrice":"23.00","ga":"ga('send', 'event', 'isubuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020isu3pc999&ref=xr_isu"+ refStr +"&refs=purchase_4bundlexr"},"asciuisu":{"oldPrice":"125.97","price":"25.19","off":"80","offPrice":"100.78","ga":"ga('send', 'event', 'asciuisubuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020asciuisu2519&ref=xr_asciuisu"+ refStr +"&refs=purchase_4bundlexr"},"asciusd":{"oldPrice":"132.97","price":"26.59","off":"80","offPrice":"106.38","ga":"ga('send', 'event', 'asciusdbuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020asciusd2659&ref=xr_asciusd"+ refStr +"&refs=purchase_4bundlexr"},"ascisusd":{"oldPrice":"122.97","price":"24.59","off":"80","offPrice":"98.38","ga":"ga('send', 'event', 'ascisusdbuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020ascisusd2459&ref=xr_ascisusd"+ refStr +"&refs=purchase_4bundlexr"},"iuisusd":{"oldPrice":"115.97","price":"23.19","off":"80","offPrice":"92.78","ga":"ga('send', 'event', 'iuisusdbuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020iuisusd2319&ref=xr_iuisusd"+ refStr +"&refs=purchase_4bundlexr"},"asciu":{"oldPrice":"92.98","price":"18.59","off":"80","offPrice":"74.39","ga":"ga('send', 'event', 'asciubuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020asciu1859&ref=xr_asciu"+ refStr +"&refs=purchase_4bundlexr"},"ascisu":{"oldPrice":"82.98","price":"16.59","off":"80","offPrice":"66.39","ga":"ga('send', 'event', 'ascisubuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020ascisu1659&ref=xr_ascisu"+ refStr +"&refs=purchase_4bundlexr"},"ascsd":{"oldPrice":"89.98","price":"17.99","off":"80","offPrice":"71.99","ga":"ga('send', 'event', 'ascsdbuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020ascsd3pc1799&ref=xr_ascsd"+ refStr +"&refs=purchase_4bundlexr"},"iuisu":{"oldPrice":"75.98","price":"15.19","off":"80","offPrice":"60.79","ga":"ga('send', 'event', 'iuisubuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020iuisu1519&ref=xr_iuisu"+ refStr +"&refs=purchase_4bundlexr"},"iusd":{"oldPrice":"82.98","price":"16.59","off":"80","offPrice":"66.39","ga":"ga('send', 'event', 'iusdbuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020iusd3pc1659&ref=xr_iusd"+ refStr +"&refs=purchase_4bundlexr"},"isusd":{"oldPrice":"72.98","price":"14.59","off":"80","offPrice":"58.39","ga":"ga('send', 'event', 'isusdbuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020isusd3pc1459&ref=xr_isusd"+ refStr +"&refs=purchase_4bundlexr"},"asc":{"oldPrice":"49.99","price":"14.77","off":"70","offPrice":"35.22","ga":"ga('send', 'event', 'ascbuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=xr_asc"+ refStr +"&refs=purchase_4bundlexr"},"iu":{"oldPrice":"42.99","price":"12.97","off":"70","offPrice":"30.02","ga":"ga('send', 'event', 'iubuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=xr_iu"+ refStr +"&refs=purchase_4bundlexr"},"isu":{"oldPrice":"32.99","price":"9.99","off":"70","offPrice":"23.00","ga":"ga('send', 'event', 'isubuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020isu3pc999&ref=xr_isu"+ refStr +"&refs=purchase_4bundlexr"},"sd":{"oldPrice":"39.99","price":"11.99","off":"70","offPrice":"28.00","ga":"ga('send', 'event', 'sdbuy', 'buy', '4bundlepurchasexr-asciuisusd');","link":"https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sd"+ refStr +"&refs=purchase_4bundlexr"}};

function buycheck(){
	var arrid = [];
	$(".saleselbox li.checked").each(function(){
		var dataid = $(this).attr("data-id");
		arrid.push(dataid);
	});
	var arrleng = arrid.length;
	var pdtsName = arrid.join('');
	if(pdtsName == ""){
		pdtsName = 0
	}
	buyinf(pdtsName,arrleng);
}


function buyinf(name, arrleng){
	$(".quatynum").html(arrleng);
	$(".orprice").html(pdtsInfo[name]['oldPrice']);
	$(".saleratio").html(pdtsInfo[name]['off']);
	$(".salernum").html(pdtsInfo[name]['offPrice']);
	$(".salertotal").html(pdtsInfo[name]['price']);
	$(".banbuybtn").attr({"href":pdtsInfo[name]['link'],"onClick":pdtsInfo[name]['ga']});
}

$(".saleselbox li").click(function(){
	var idx = $(this).index();
	$(this).toggleClass("checked");
	$(".salesepro-cont li").eq(idx).toggleClass("checked");
	buycheck();
});
$(".salesepro-cont li .salesepro-name").click(function(){
	var idx = $(this).parent("li").index();
	$(this).parent("li").toggleClass("checked");
	$(".saleselbox li").eq(idx).toggleClass("checked");
	buycheck();
});
