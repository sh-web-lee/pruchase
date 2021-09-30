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
	_ga = ["ga('send', 'event', 'no', 'buy', 'no');","ga('send', 'event', 'ascdbimfiuisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascdbimfiubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascdbimfisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascdbiuisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascimfiuisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'dbimfiuisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascdbimfbuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascdbiubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascdbisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascimfiubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascimfisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'asciuisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'dbimfiubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'dbimfisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'dbiuisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'imfiuisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascdbbuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascimfbuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'asciubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'dbimfbuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'dbiubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'dbisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'imfiubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'imfisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'iuisubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'ascbuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'dbbuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'imfbuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'iubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');","ga('send', 'event', 'isubuy', 'buy', '5bundlepurchasebf-ascdbimfiuisu');"],
	_href =["javascript:void(0);","https://www.iobit.com/buy.php?product=2020ascdbimfiuisu2558&ref=br_ascdbimfiuisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020ascdbimfiu2228&ref=br_ascdbimfiu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020ascdbimfisu2128&ref=br_ascdbimfisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020ascdbiuisu2008&ref=br_ascdbiuisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020ascimfiuisu1809&ref=br_ascimfiuisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020dbimfiuisu2058&ref=br_dbimfiuisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020ascdbimf3596&ref=br_ascdbimf"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020ascdbiu3292&ref=br_ascdbiu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020ascdbisu3157&ref=br_ascdbisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020ascimfiu2996&ref=br_ascimfiu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020ascimfisu2698&ref=br_ascimfisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020asciuisu2519&ref=br_asciuisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020dbimfiu3456&ref=br_dbimfiu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020dbimfisu3256&ref=br_dbimfisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020dbiuisu3017&ref=br_dbiuisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020imfiuisu2619&ref=br_imfiuisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020ascdb2497&ref=br_ascdb"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020ascimf2099&ref=br_ascimf"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020asciu1859&ref=br_asciu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020ascisu1659&ref=br_ascisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020dbimf2596&ref=br_dbimf"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020dbiu2357&ref=br_dbiu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020dbisu2157&ref=br_dbisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020imfiu1959&ref=br_imfiu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020imfisu1759&ref=br_imfisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020iuisu1519&ref=br_iuisu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=br_asc"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_db"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=br_imf"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=br_iu"+ refStr +"&refs=purchase_5bundlebf","https://www.iobit.com/buy.php?product=2020isu3pc999&ref=br_isu"+ refStr +"&refs=purchase_5bundlebf"];

function buycheck(){
	var arrid=new Array();
	$(".saleselbox li.checked").each(function(){
		var dataid = $(this).attr("data-id");
		arrid.push(dataid);
	});
	var arrleng = arrid.length;
	var totalnum = arrid.join('');
	if(totalnum == ""){
		buyinf(0);
	}else if(totalnum == "ascdbiuimfisu"){
		buyinf(1);
	}else if(totalnum == "ascdbiuimf"){
		buyinf(2);
	}else if(totalnum == "ascdbimfisu"){
		buyinf(3);
	}else if(totalnum == "ascdbiuisu"){
		buyinf(4);
	}else if(totalnum == "asciuimfisu"){
		buyinf(5);
	}else if(totalnum == "dbiuimfisu"){
		buyinf(6);
	}else if(totalnum == "ascdbimf"){
		buyinf(7);
	}else if(totalnum == "ascdbiu"){
		buyinf(8);
	}else if(totalnum == "ascdbisu"){
		buyinf(9);
	}else if(totalnum == "asciuimf"){
		buyinf(10);
	}else if(totalnum == "ascimfisu"){
		buyinf(11);
	}else if(totalnum == "asciuisu"){
		buyinf(12);
	}else if(totalnum == "dbiuimf"){
		buyinf(13);
	}else if(totalnum == "dbimfisu"){
		buyinf(14);
	}else if(totalnum == "dbiuisu"){
		buyinf(15);
	}else if(totalnum == "iuimfisu"){
		buyinf(16);
	}else if(totalnum == "ascdb"){
		buyinf(17);
	}else if(totalnum == "ascimf"){
		buyinf(18);
	}else if(totalnum == "asciu"){
		buyinf(19);
	}else if(totalnum == "ascisu"){
		buyinf(20);
	}else if(totalnum == "dbimf"){
		buyinf(21);
	}else if(totalnum == "dbiu"){
		buyinf(22);
	}else if(totalnum == "dbisu"){
		buyinf(23);
	}else if(totalnum == "iuimf"){
		buyinf(24);
	}else if(totalnum == "imfisu"){
		buyinf(25);
	}else if(totalnum == "iuisu"){
		buyinf(26);
	}else if(totalnum == "asc"){
		buyinf(27);
	}else if(totalnum == "db"){
		buyinf(28);
	}else if(totalnum == "imf"){
		buyinf(29);
	}else if(totalnum == "iu"){
		buyinf(30);
	}else if(totalnum == "isu"){
		buyinf(31);
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












$(function() {

});