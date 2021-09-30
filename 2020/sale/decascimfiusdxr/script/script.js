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

var pdtsInfo = {"0":{"oldPrice":0,"price":0,"off":"0","offPrice":"0","ga":"ga('send', 'event', 'no', 'buy', 'no');","link":"javascript:void(0);"},"ascimfiusd":{"oldPrice":"187.92","price":"18.79","off":"90","offPrice":"169.13","ga":"ga('send', 'event', 'ascimfiusdbuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020ascimfiusd1879&ref=xr_ascimfiusd"+ refStr +"&refs=purchase_4bundlexr "},"undefined":{"oldPrice":"42.99","price":"12.97","off":"70","offPrice":"30.02","ga":"ga('send', 'event', 'iubuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=xr_iu"+ refStr +"&refs=purchase_4bundlexr"},"ascimfiu":{"oldPrice":"147.93","price":"29.96","off":"80","offPrice":"117.97","ga":"ga('send', 'event', 'ascimfiubuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020ascimfiu2996&ref=xr_ascimfiu"+ refStr +"&refs=purchase_4bundlexr"},"ascimfsd":{"oldPrice":"144.93","price":"28.98","off":"80","offPrice":"115.95","ga":"ga('send', 'event', 'ascimfsdbuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020ascimfsd2898&ref=xr_ascimfsd"+ refStr +"&refs=purchase_4bundlexr"},"asciusd":{"oldPrice":"132.97","price":"26.59","off":"80","offPrice":"106.38","ga":"ga('send', 'event', 'asciusdbuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020asciusd2659&ref=xr_asciusd"+ refStr +"&refs=purchase_4bundlexr"},"imfiusd":{"oldPrice":"137.93","price":"27.58","off":"80","offPrice":"110.35","ga":"ga('send', 'event', 'imfiusdbuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020imfiusd2758&ref=xr_imfiusd"+ refStr +"&refs=purchase_4bundlexr"},"ascimf":{"oldPrice":"104.94","price":"20.99","off":"80","offPrice":"83.95","ga":"ga('send', 'event', 'ascimfbuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020ascimf2099&ref=xr_ascimf"+ refStr +"&refs=purchase_4bundlexr"},"asciu":{"oldPrice":"92.98","price":"18.59","off":"80","offPrice":"74.39","ga":"ga('send', 'event', 'asciubuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020asciu1859&ref=xr_asciu"+ refStr +"&refs=purchase_4bundlexr"},"ascsd":{"oldPrice":"89.98","price":"17.99","off":"80","offPrice":"71.99","ga":"ga('send', 'event', 'ascsdbuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020ascsd3pc1799&ref=xr_ascsd"+ refStr +"&refs=purchase_4bundlexr"},"imfiu":{"oldPrice":"97.94","price":"19.59","off":"80","offPrice":"78.35","ga":"ga('send', 'event', 'imfiubuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020imfiu1959&ref=xr_imfiu"+ refStr +"&refs=purchase_4bundlexr"},"imfsd":{"oldPrice":"94.94","price":"18.99","off":"80","offPrice":"75.95","ga":"ga('send', 'event', 'imfsdbuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020imfsd3pc1899&ref=xr_imfsd"+ refStr +"&refs=purchase_4bundlexr"},"iusd":{"oldPrice":"82.98","price":"16.59","off":"80","offPrice":"66.39","ga":"ga('send', 'event', 'iusdbuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020iusd3pc1659&ref=xr_iusd"+ refStr +"&refs=purchase_4bundlexr"},"asc":{"oldPrice":"49.99","price":"14.77","off":"70","offPrice":"35.22","ga":"ga('send', 'event', 'ascbuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=xr_asc"+ refStr +"&refs=purchase_4bundlexr"},"imf":{"oldPrice":"54.95","price":"16.99","off":"70","offPrice":"37.96","ga":"ga('send', 'event', 'imfbuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=xr_imf"+ refStr +"&refs=purchase_4bundlexr"},"iu":{"oldPrice":"42.99","price":"12.97","off":"70","offPrice":"30.02","ga":"ga('send', 'event', 'iubuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=xr_iu"+ refStr +"&refs=purchase_4bundlexr"},"sd":{"oldPrice":"39.99","price":"11.99","off":"70","offPrice":"28.00","ga":"ga('send', 'event', 'sdbuy', 'buy', '4bundlepurchasexr-ascimfiusd');","link":"https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sd"+ refStr +"&refs=purchase_4bundlexr"}};

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
