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
    orprice = [0,200.82,167.83,157.83,125.97,150.83,124.84,92.98,82.98,117.84,107.84,75.98,49.99,74.85,42.99,32.99],
	nowprice = [0,20.08,32.92,31.57,25.19,30.17,24.97,18.59,16.59,23.57,21.57,15.19,14.77,19.95,12.97,9.99],
	dit = [0,90,80,80,80,80,80,80,80,80,80,80,70,70,70,70],
	ditprice = [0,180.74,134.91,126.26,100.78,120.66,99.87,74.39,66.39,94.27,86.27,60.79,35.22,54.90,30.02,23.00],
	_ga = ["ga('send', 'event', 'no', 'buy', 'no');","ga('send', 'event', 'ascdbiuisubuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'ascdbiubuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'ascdbisubuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'asciuisubuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'dbiuisubuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'ascdbbuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'asciubuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'ascisubuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'dbiubuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'dbisubuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'iuisubuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'ascbuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'dbbuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'iubuy', 'buy', '4bundlepurchasebf-ascdbiuisu');","ga('send', 'event', 'isubuy', 'buy', '4bundlepurchasebf-ascdbiuisu');"],
	_href =["javascript:void(0);","https://www.iobit.com/buy.php?product=2020ascdbiuisu2008&ref=br_ascdbiuisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascdbiu3292&ref=br_ascdbiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascdbisu3157&ref=br_ascdbisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020asciuisu2519&ref=br_asciuisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbiuisu3017&ref=br_dbiuisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascdb2497&ref=br_ascdb"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020asciu1859&ref=br_asciu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascisu1659&ref=br_ascisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbiu2357&ref=br_dbiu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbisu2157&ref=br_dbisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020iuisu1519&ref=br_iuisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=br_asc"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_db"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=br_iu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020isu3pc999&ref=br_isu"+ refStr +"&refs=purchase_4bundlebf"];

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
	}else if(totalnum == "ascdbiuisu"){
		buyinf(1);
	}else if(totalnum == "ascdbiu"){
		buyinf(2);
	}else if(totalnum == "ascdbisu"){
		buyinf(3);
	}else if(totalnum == "asciuisu"){
		buyinf(4);
	}else if(totalnum == "dbiuisu"){
		buyinf(5);
	}else if(totalnum == "ascdb"){
		buyinf(6);
	}else if(totalnum == "asciu"){
		buyinf(7);
	}else if(totalnum == "ascisu"){
		buyinf(8);
	}else if(totalnum == "dbiu"){
		buyinf(9);
	}else if(totalnum == "dbisu"){
		buyinf(10);
	}else if(totalnum == "iuisu"){
		buyinf(11);
	}else if(totalnum == "asc"){
		buyinf(12);
	}else if(totalnum == "db"){
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
