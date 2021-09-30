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
    orprice = [0,212.78,179.79,157.83,137.93,162.79,124.84,104.94,82.98,129.8,107.84,87.94,49.99,74.85,54.95,32.99],
	nowprice = [0,21.28,35.96,31.57,26.98,32.56,24.97,20.99,16.59,25.96,21.57,17.59,14.77,19.95,16.99,9.99],
	dit = [0,90,80,80,80,80,80,80,80,80,80,80,70,70,70,70],
	ditprice = [0,191.50,143.83,126.26,110.95,130.23,99.87,83.95,66.39,103.84,86.27,70.35,35.22,54.90,37.96,23.00],
	_ga = ["ga('send', 'event', 'no', 'buy', 'no');","ga('send', 'event', 'ascdbimfisubuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'ascdbimfbuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'ascdbisubuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'ascimfisubuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'dbimfisubuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'ascdbbuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'ascimfbuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'ascisubuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'dbimfbuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'dbisubuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'imfisubuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'ascbuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'dbbuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'imfbuy', 'buy', '4bundlepurchasebf-ascdbimfisu');","ga('send', 'event', 'isubuy', 'buy', '4bundlepurchasebf-ascdbimfisu');"],
	_href =["javascript:void(0);","https://www.iobit.com/buy.php?product=2020ascdbimfisu2128&ref=br_ascdbimfisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascdbimf3596&ref=br_ascdbimf"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascdbisu3157&ref=br_ascdbisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascimfisu2698&ref=br_ascimfisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbimfisu3256&ref=br_dbimfisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascdb2497&ref=br_ascdb"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascimf2099&ref=br_ascimf"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020ascisu1659&ref=br_ascisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbimf2596&ref=br_dbimf"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020dbisu2157&ref=br_dbisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020imfisu1759&ref=br_imfisu"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=br_asc"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_db"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=br_imf"+ refStr +"&refs=purchase_4bundlebf","https://www.iobit.com/buy.php?product=2020isu3pc999&ref=br_isu"+ refStr +"&refs=purchase_4bundlebf"];

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
	}else if(totalnum == "ascdbimfisu"){
		buyinf(1);
	}else if(totalnum == "ascdbimf"){
		buyinf(2);
	}else if(totalnum == "ascdbisu"){
		buyinf(3);
	}else if(totalnum == "ascimfisu"){
		buyinf(4);
	}else if(totalnum == "dbimfisu"){
		buyinf(5);
	}else if(totalnum == "ascdb"){
		buyinf(6);
	}else if(totalnum == "ascimf"){
		buyinf(7);
	}else if(totalnum == "ascisu"){
		buyinf(8);
	}else if(totalnum == "dbimf"){
		buyinf(9);
	}else if(totalnum == "dbisu"){
		buyinf(10);
	}else if(totalnum == "imfisu"){
		buyinf(11);
	}else if(totalnum == "asc"){
		buyinf(12);
	}else if(totalnum == "db"){
		buyinf(13);
	}else if(totalnum == "imf"){
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
