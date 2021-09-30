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
    orprice = [0,222.78,179.79,167.83,147.93,172.79,124.84,104.94,92.98,129.80,117.84,97.94,49.99,74.85,54.95,42.99],
	nowprice = [0,22.28,35.96,32.92,29.96,34.56,24.97,20.99,18.59,25.96,23.57,19.59,14.77,19.95,16.99,12.97],
	dit = [0,90,80,80,80,80,80,80,80,80,80,80,70,70,70,70],
	ditprice = [0,200.50,143.83,134.91,117.97,138.23,99.87,83.95,74.39,103.84,94.27,78.35,35.22,54.90,37.96,30.02],
	_ga = ["ga('send', 'event', 'no', 'buy', 'no');","ga('send', 'event', 'ascdbimfiubuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'ascdbimfbuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'ascdbiubuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'ascimfiubuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'dbimfiubuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'ascdbbuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'ascimfbuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'asciubuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'dbimfbuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'dbiubuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'imfiubuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'ascbuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'dbbuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'imfbuy', 'buy', '4bundlepurchasebf-ascdbimfiu');","ga('send', 'event', 'iubuy', 'buy', '4bundlepurchasebf-ascdbimfiu');"],
	_href =["javascript:void(0);","https://www.iobit.com/buy.php?product=2020ascdbimfiu2228&ref=br_ascdbimfiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascdbimf3596&ref=br_ascdbimf"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascdbiu3292&ref=br_ascdbiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascimfiu2996&ref=br_ascimfiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbimfiu3456&ref=br_dbimfiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascdb2497&ref=br_ascdb"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascimf2099&ref=br_ascimf"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020asciu1859&ref=br_asciu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbimf2596&ref=br_dbimf"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbiu2357&ref=br_dbiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020imfiu1959&ref=br_imfiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=br_asc"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_db"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=br_imf"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=br_iu"+ refStr +"&refs=purchase_4bundlebf"];
console.log(ditprice.length)
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
	}else if(totalnum == "ascdbiuimf"){
		buyinf(1);
	}else if(totalnum == "ascdbimf"){
		buyinf(2);
	}else if(totalnum == "ascdbiu"){
		buyinf(3);
	}else if(totalnum == "asciuimf"){
		buyinf(4);
	}else if(totalnum == "dbiuimf"){
		buyinf(5);
	}else if(totalnum == "ascdb"){
		buyinf(6);
	}else if(totalnum == "ascimf"){
		buyinf(7);
	}else if(totalnum == "asciu"){
		buyinf(8);
	}else if(totalnum == "dbimf"){
		buyinf(9);
	}else if(totalnum == "dbiu"){
		buyinf(10);
	}else if(totalnum == "iuimf"){
		buyinf(11);
	}else if(totalnum == "asc"){
		buyinf(12);
	}else if(totalnum == "db"){
		buyinf(13);
	}else if(totalnum == "imf"){
		buyinf(14);
	}else if(totalnum == "iu"){
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
