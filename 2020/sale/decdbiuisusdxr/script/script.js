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

var pdtsInfo = {"0":{"oldPrice":0,"price":0,"off":"0","offPrice":"0","ga":"ga('send', 'event', 'no', 'buy', 'no');","link":"javascript:void(0);"},"dbiuisusd":{"oldPrice":"190.82","price":"19.08","off":"90","offPrice":"171.74","ga":"ga('send', 'event', 'dbiuisusdbuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020dbiuisusd1908&ref=xr_dbiuisusd"+ refStr +"&refs=purchase_4bundlexr"},"undefined":{"oldPrice":"32.99","price":"9.99","off":"70","offPrice":"23.00","ga":"ga('send', 'event', 'isubuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020isu3pc999&ref=xr_isu"+ refStr +"&refs=purchase_4bundlexr"},"dbiuisu":{"oldPrice":"150.83","price":"30.17","off":"80","offPrice":"120.66","ga":"ga('send', 'event', 'dbiuisubuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020dbiuisu3017&ref=xr_dbiuisu"+ refStr +"&refs=purchase_4bundlexr"},"dbiusd":{"oldPrice":"157.83","price":"31.56","off":"80","offPrice":"126.27","ga":"ga('send', 'event', 'dbiusdbuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020dbiusd3156&ref=xr_dbiusd"+ refStr +"&refs=purchase_4bundlexr"},"dbisusd":{"oldPrice":"147.83","price":"29.56","off":"80","offPrice":"118.27","ga":"ga('send', 'event', 'dbisusdbuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020dbisusd2956&ref=xr_dbisusd"+ refStr +"&refs=purchase_4bundlexr"},"iuisusd":{"oldPrice":"115.97","price":"23.19","off":"80","offPrice":"92.78","ga":"ga('send', 'event', 'iuisusdbuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020iuisusd2319&ref=xr_iuisusd"+ refStr +"&refs=purchase_4bundlexr"},"dbiu":{"oldPrice":"117.84","price":"23.57","off":"80","offPrice":"94.27","ga":"ga('send', 'event', 'dbiubuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020dbiu2357&ref=xr_dbiu"+ refStr +"&refs=purchase_4bundlexr"},"dbisu":{"oldPrice":"107.84","price":"21.57","off":"80","offPrice":"86.27","ga":"ga('send', 'event', 'dbisubuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020dbisu2157&ref=xr_dbisu"+ refStr +"&refs=purchase_4bundlexr"},"dbsd":{"oldPrice":"114.84","price":"22.96","off":"80","offPrice":"91.88","ga":"ga('send', 'event', 'dbsdbuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020dbsd3pc2296&ref=xr_dbsd"+ refStr +"&refs=purchase_4bundlexr"},"iuisu":{"oldPrice":"75.98","price":"15.19","off":"80","offPrice":"60.79","ga":"ga('send', 'event', 'iuisubuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020iuisu1519&ref=xr_iuisu"+ refStr +"&refs=purchase_4bundlexr"},"iusd":{"oldPrice":"82.98","price":"16.59","off":"80","offPrice":"66.39","ga":"ga('send', 'event', 'iusdbuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020iusd3pc1659&ref=xr_iusd"+ refStr +"&refs=purchase_4bundlexr"},"isusd":{"oldPrice":"72.98","price":"14.59","off":"80","offPrice":"58.39","ga":"ga('send', 'event', 'isusdbuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020isusd3pc1459&ref=xr_isusd"+ refStr +"&refs=purchase_4bundlexr"},"db":{"oldPrice":"74.85","price":"19.95","off":"70","offPrice":"54.90","ga":"ga('send', 'event', 'dbbuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020db3pc1995&ref=xr_db"+ refStr +"&refs=purchase_4bundlexr"},"iu":{"oldPrice":"42.99","price":"12.97","off":"70","offPrice":"30.02","ga":"ga('send', 'event', 'iubuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=xr_iu"+ refStr +"&refs=purchase_4bundlexr"},"isu":{"oldPrice":"32.99","price":"9.99","off":"70","offPrice":"23.00","ga":"ga('send', 'event', 'isubuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020isu3pc999&ref=xr_isu"+ refStr +"&refs=purchase_4bundlexr"},"sd":{"oldPrice":"39.99","price":"11.99","off":"70","offPrice":"28.00","ga":"ga('send', 'event', 'sdbuy', 'buy', '4bundlepurchasexr-dbiuisusd');","link":"https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sd"+ refStr +"&refs=purchase_4bundlexr"}};

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
