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


var quaty = [0,4,3,3,3,3,2,2,2,2,2,2,1,1,1,1],
    orprice = [0,180.92,147.93,137.93,125.97,130.93,104.94,92.98,82.98,97.94,87.94,75.98,49.99,54.95,42.99,32.99],
	nowprice = [0,18.09,29.96,26.98,25.19,26.19,20.99,18.59,16.59,19.59,17.59,15.19,14.77,16.99,12.97,9.99],
	dit = [0,90,80,80,80,80,80,80,80,80,80,80,70,70,70,70],
	ditprice = [0,162.83,117.97,110.95,100.78,104.74,83.95,74.39,66.39,78.35,70.35,60.79,35.22,37.96,30.02,23.00],
	_ga = ["ga('send', 'event', 'no', 'buy', 'no');","ga('send', 'event', 'ascimfiuisubuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'ascimfiubuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'ascimfisubuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'asciuisubuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'imfiuisubuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'ascimfbuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'asciubuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'ascisubuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'imfiubuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'imfisubuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'iuisubuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'ascbuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'imfbuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'iubuy', 'buy', '4bundlepurchasexr-ascimfiuisu');","ga('send', 'event', 'isubuy', 'buy', '4bundlepurchasexr-ascimfiuisu');"],
	_href =["javascript:void(0);","https://www.iobit.com/buy.php?product=2020ascimfiuisu1809&ref=xr_ascimfiuisu"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020ascimfiu2996&ref=xr_ascimfiu"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020ascimfisu2698&ref=xr_ascimfisu"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020asciuisu2519&ref=xr_asciuisu"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020imfiuisu2619&ref=xr_imfiuisu"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020ascimf2099&ref=xr_ascimf"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020asciu1859&ref=xr_asciu"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020ascisu1659&ref=xr_ascisu"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020imfiu1959&ref=xr_imfiu"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020imfisu1759&ref=xr_imfisu"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020iuisu1519&ref=xr_iuisu"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=xr_asc"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=xr_imf"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=xr_iu"+ refStr +"&refs=purchase_4bundlexr","https://www.iobit.com/buy.php?product=2020isu3pc999&ref=xr_isu"+ refStr +"&refs=purchase_4bundlexr"],
	arrtotal =["0","asciuimfisu","asciuimf","ascimfisu","asciuisu","iuimfisu","ascimf","asciu","ascisu","iuimf","imfisu","iuisu","asc","imf","iu","isu"];

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
