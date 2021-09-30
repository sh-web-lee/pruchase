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

var pdtsInfo = {"0":{"oldPrice":0,"price":0,"off":"0","offPrice":"0","ga":"ga('send', 'event', 'no', 'buy', 'no');","link":"javascript:void(0);"},"dbimfiusd":{"oldPrice":"212.78","price":"21.28","off":"90","offPrice":"191.50","ga":"ga('send', 'event', 'dbimfiusdbuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020dbimfiusd2128&ref=xr_dbimfiusd"+ refStr +"&refs=purchase_4bundlexr"},"undefined":{"oldPrice":"42.99","price":"12.97","off":"70","offPrice":"30.02","ga":"ga('send', 'event', 'iubuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=xr_iu"+ refStr +"&refs=purchase_4bundlexr"},"dbimfiu":{"oldPrice":"172.79","price":"34.56","off":"80","offPrice":"138.23","ga":"ga('send', 'event', 'dbimfiubuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020dbimfiu3456&ref=xr_dbimfiu"+ refStr +"&refs=purchase_4bundlexr"},"dbimfsd":{"oldPrice":"169.79","price":"33.95","off":"80","offPrice":"135.84","ga":"ga('send', 'event', 'dbimfsdbuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020dbimfsd3395&ref=xr_dbimfsd"+ refStr +"&refs=purchase_4bundlexr"},"dbiusd":{"oldPrice":"157.83","price":"31.56","off":"80","offPrice":"126.27","ga":"ga('send', 'event', 'dbiusdbuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020dbiusd3156&ref=xr_dbiusd"+ refStr +"&refs=purchase_4bundlexr"},"imfiusd":{"oldPrice":"137.93","price":"27.58","off":"80","offPrice":"110.35","ga":"ga('send', 'event', 'imfiusdbuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020imfiusd2758&ref=xr_imfiusd"+ refStr +"&refs=purchase_4bundlexr"},"dbimf":{"oldPrice":"129.80","price":"25.96","off":"80","offPrice":"103.84","ga":"ga('send', 'event', 'dbimfbuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020dbimf2596&ref=xr_dbimf"+ refStr +"&refs=purchase_4bundlexr"},"dbiu":{"oldPrice":"117.84","price":"23.57","off":"80","offPrice":"94.27","ga":"ga('send', 'event', 'dbiubuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020dbiu2357&ref=xr_dbiu"+ refStr +"&refs=purchase_4bundlexr"},"dbsd":{"oldPrice":"114.84","price":"22.96","off":"80","offPrice":"91.88","ga":"ga('send', 'event', 'dbsdbuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020dbsd3pc2296&ref=xr_dbsd"+ refStr +"&refs=purchase_4bundlexr"},"imfiu":{"oldPrice":"97.94","price":"19.59","off":"80","offPrice":"78.35","ga":"ga('send', 'event', 'imfiubuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020imfiu1959&ref=xr_imfiu"+ refStr +"&refs=purchase_4bundlexr"},"imfsd":{"oldPrice":"94.94","price":"18.99","off":"80","offPrice":"75.95","ga":"ga('send', 'event', 'imfsdbuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020imfsd3pc1899&ref=xr_imfsd"+ refStr +"&refs=purchase_4bundlexr"},"iusd":{"oldPrice":"82.98","price":"16.59","off":"80","offPrice":"66.39","ga":"ga('send', 'event', 'iusdbuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020iusd3pc1659&ref=xr_iusd"+ refStr +"&refs=purchase_4bundlexr"},"db":{"oldPrice":"74.85","price":"19.95","off":"70","offPrice":"54.90","ga":"ga('send', 'event', 'dbbuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020db3pc1995&ref=xr_db"+ refStr +"&refs=purchase_4bundlexr"},"imf":{"oldPrice":"54.95","price":"16.99","off":"70","offPrice":"37.96","ga":"ga('send', 'event', 'imfbuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=xr_imf"+ refStr +"&refs=purchase_4bundlexr"},"iu":{"oldPrice":"42.99","price":"12.97","off":"70","offPrice":"30.02","ga":"ga('send', 'event', 'iubuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=xr_iu"+ refStr +"&refs=purchase_4bundlexr"},"sd":{"oldPrice":"39.99","price":"11.99","off":"70","offPrice":"28.00","ga":"ga('send', 'event', 'sdbuy', 'buy', '4bundlepurchasexr-dbimfiusd');","link":"https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sd"+ refStr +"&refs=purchase_4bundlexr"}};

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
