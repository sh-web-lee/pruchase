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
    orprice = [0,205.78,172.79,162.79,150.83,130.93,129.80,117.84,107.84,97.94,87.94,75.98,74.85,54.95,42.99,32.99],
	nowprice = [0,20.58,34.56,32.56,30.17,26.19,25.96,23.57,21.57,19.59,17.59,15.19,19.95,16.99,12.97,9.99],
	dit = [0,90,80,80,80,80,80,80,80,80,80,80,70,70,70,70],
	ditprice = [0,185.20,138.23,130.23,120.66,104.74,103.84,94.27,86.27,78.35,70.35,60.79,54.90,37.96,30.02,23.00],
	_ga = ["ga('send', 'event', 'no', 'buy', 'no');","ga('send', 'event', 'dbimfiuisubuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'dbimfiubuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'dbimfisubuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'dbiuisubuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'imfiuisubuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'dbimfbuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'dbiubuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'dbisubuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'imfiubuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'imfisubuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'iuisubuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'dbbuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'imfbuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'iubuy', 'buy', '4bundlepurchasebf-dbimfiuisu');","ga('send', 'event', 'isubuy', 'buy', '4bundlepurchasebf-dbimfiuisu');"],
	_href =["javascript:void(0);","https://www.iobit.com/buy.php?product=2020dbimfiuisu2058&ref=br_dbimfiuisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbimfiu3456&ref=br_dbimfiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbimfisu3256&ref=br_dbimfisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbiuisu3017&ref=br_dbiuisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020imfiuisu2619&ref=br_imfiuisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbimf2596&ref=br_dbimf"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbiu2357&ref=br_dbiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbisu2157&ref=br_dbisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020imfiu1959&ref=br_imfiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020imfisu1759&ref=br_imfisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020iuisu1519&ref=br_iuisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_db"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=br_imf"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=br_iu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020isu3pc999&ref=br_isu"+ refStr +"&refs=purchase_4bundlebf"];

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
	}else if(totalnum == "dbiuimfisu"){
		buyinf(1);
	}else if(totalnum == "dbiuimf"){
		buyinf(2);
	}else if(totalnum == "dbimfisu"){
		buyinf(3);
	}else if(totalnum == "dbiuisu"){
		buyinf(4);
	}else if(totalnum == "iuimfisu"){
		buyinf(5);
	}else if(totalnum == "dbimf"){
		buyinf(6);
	}else if(totalnum == "dbiu"){
		buyinf(7);
	}else if(totalnum == "dbisu"){
		buyinf(8);
	}else if(totalnum == "iuimf"){
		buyinf(9);
	}else if(totalnum == "imfisu"){
		buyinf(10);
	}else if(totalnum == "iuisu"){
		buyinf(11);
	}else if(totalnum == "db"){
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
