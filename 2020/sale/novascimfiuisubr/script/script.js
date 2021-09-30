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
	_ga = ["ga('send', 'event', 'no', 'buy', 'no');","ga('send', 'event', 'ascimfiuisubuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'ascimfiubuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'ascimfisubuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'asciuisubuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'imfiuisubuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'ascimfbuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'asciubuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'ascisubuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'imfiubuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'imfisubuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'iuisubuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'ascbuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'imfbuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'iubuy', 'buy', '4bundlepurchasebf-ascimfiuisu');","ga('send', 'event', 'isubuy', 'buy', '4bundlepurchasebf-ascimfiuisu');"],
	_href =["javascript:void(0);","https://www.iobit.com/buy.php?product=2020ascimfiuisu1809&ref=br_ascimfiuisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascimfiu2996&ref=br_ascimfiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascimfisu2698&ref=br_ascimfisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020asciuisu2519&ref=br_asciuisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020imfiuisu2619&ref=br_imfiuisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascimf2099&ref=br_ascimf"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020asciu1859&ref=br_asciu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascisu1659&ref=br_ascisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020imfiu1959&ref=br_imfiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020imfisu1759&ref=br_imfisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020iuisu1519&ref=br_iuisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=br_asc"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=br_imf"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=br_iu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020isu3pc999&ref=br_isu"+ refStr +"&refs=purchase_4bundlebf"];

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
	}else if(totalnum == "asciuimfisu"){
		buyinf(1);
	}else if(totalnum == "asciuimf"){
		buyinf(2);
	}else if(totalnum == "ascimfisu"){
		buyinf(3);
	}else if(totalnum == "asciuisu"){
		buyinf(4);
	}else if(totalnum == "iuimfisu"){
		buyinf(5);
	}else if(totalnum == "ascimf"){
		buyinf(6);
	}else if(totalnum == "asciu"){
		buyinf(7);
	}else if(totalnum == "ascisu"){
		buyinf(8);
	}else if(totalnum == "iuimf"){
		buyinf(9);
	}else if(totalnum == "imfisu"){
		buyinf(10);
	}else if(totalnum == "iuisu"){
		buyinf(11);
	}else if(totalnum == "asc"){
		buyinf(12);
	}else if(totalnum == "imf"){
		buyinf(13);
	}else if(totalnum == "iu"){
		buyinf(14);
	}else if(totalnum == "isu"){
		buyinf(15);
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
