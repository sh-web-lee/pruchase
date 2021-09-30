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


var quaty = [0,5,4,4,4,4,4,3,3,3,3,3,3,3,3,3,3,2,2,2,2,2,2,2,2,2,2,1,1,1,1,1],
    orprice = [0,255.77,222.78,212.78,200.82,180.92,205.78,179.79,167.83,157.83,147.93,137.93,125.97,172.79,162.79,150.83,130.93,124.84,104.94,92.98,82.98,129.80,117.84,107.84,97.94,87.94,75.98,49.99,74.85,54.95,42.99,32.99],
	nowprice = [0,25.58,22.28,21.28,20.08,18.09,20.58,35.96,32.92,31.57,29.96,26.98,25.19,34.56,32.56,30.17,26.19,24.97,20.99,18.59,16.59,25.96,23.57,21.57,19.59,17.59,15.19,14.77,19.95,16.99,12.97,9.99],
	dit = [0,90,90,90,90,90,90,80,80,80,80,80,80,80,80,80,80,80,80,80,80,80,80,80,80,80,80,70,70,70,70,70],
	ditprice = [0,230.19,200.50,191.50,180.74,162.83,185.20,143.83,134.91,126.26,117.97,110.95,100.78,138.23,130.23,120.66,104.74,99.87,83.95,74.39,66.39,103.84,94.27,86.27,78.35,70.35,60.79,35.22,54.90,37.96,30.02,23.00],
	_ga = ["ga('send', 'event', 'no', 'buy', 'no');","ga('send', 'event', 'ascdbimfiuisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascdbimfiubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascdbimfisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascdbiuisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascimfiuisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'dbimfiuisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascdbimfbuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascdbiubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascdbisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascimfiubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascimfisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'asciuisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'dbimfiubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'dbimfisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'dbiuisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'imfiuisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascdbbuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascimfbuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'asciubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'dbimfbuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'dbiubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'dbisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'imfiubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'imfisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'iuisubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'ascbuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'dbbuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'imfbuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'iubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');","ga('send', 'event', 'isubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisu');"],
	_href =["javascript:void(0);","https://www.iobit.com/buy.php?product=2020ascdbimfiuisu2558&ref=xr_ascdbimfiuisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020ascdbimfiu2228&ref=xr_ascdbimfiu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020ascdbimfisu2128&ref=xr_ascdbimfisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020ascdbiuisu2008&ref=xr_ascdbiuisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020ascimfiuisu1809&ref=xr_ascimfiuisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020dbimfiuisu2058&ref=xr_dbimfiuisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020ascdbimf3596&ref=xr_ascdbimf"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020ascdbiu3292&ref=xr_ascdbiu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020ascdbisu3157&ref=xr_ascdbisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020ascimfiu2996&ref=xr_ascimfiu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020ascimfisu2698&ref=xr_ascimfisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020asciuisu2519&ref=xr_asciuisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020dbimfiu3456&ref=xr_dbimfiu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020dbimfisu3256&ref=xr_dbimfisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020dbiuisu3017&ref=xr_dbiuisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020imfiuisu2619&ref=xr_imfiuisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020ascdb2497&ref=xr_ascdb"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020ascimf2099&ref=xr_ascimf"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020asciu1859&ref=xr_asciu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020ascisu1659&ref=xr_ascisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020dbimf2596&ref=xr_dbimf"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020dbiu2357&ref=xr_dbiu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020dbisu2157&ref=xr_dbisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020imfiu1959&ref=xr_imfiu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020imfisu1759&ref=xr_imfisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020iuisu1519&ref=xr_iuisu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=xr_asc"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020db3pc1995&ref=xr_db"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=xr_imf"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=xr_iu"+ refStr +"&refs=purchase_5bundlexr","https://www.iobit.com/buy.php?product=2020isu3pc999&ref=xr_isu"+ refStr +"&refs=purchase_5bundlexr"],
	arrtotal =["0","ascdbiuimfisu","ascdbiuimf","ascdbimfisu","ascdbiuisu","asciuimfisu","dbiuimfisu","ascdbimf","ascdbiu","ascdbisu","asciuimf","ascimfisu","asciuisu","dbiuimf","dbimfisu","dbiuisu","iuimfisu","ascdb","ascimf","asciu","ascisu","dbimf","dbiu","dbisu","iuimf","imfisu","iuisu","asc","db","imf","iu","isu"];

function buycheck(){
	var arrid=new Array();
	$(".saleselbox li.checked").each(function(){
		var dataid = $(this).attr("data-id");
		arrid.push(dataid);
	});
	var arrleng = arrid.length;
	var totalnum = arrid.join('');
	if(totalnum == ""){
		totalnum = 0
	}else{
		totalnum = totalnum
	}
	var i = arrtotal.length;
	while (i--) {
	    if (arrtotal[i] == totalnum) {
			buyinf(i);
	    }
	}
}


function buyinf(i){
	$(".quatynum").html(quaty[i]);
	$(".orprice").html(orprice[i].toFixed(2));
	$(".saleratio").html(dit[i]);
	$(".salernum").html(ditprice[i].toFixed(2));
	$(".salertotal").html(nowprice[i].toFixed(2));
	$(".banbuybtn").attr({"href":_href[i],"onClick":_ga[i]})
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
