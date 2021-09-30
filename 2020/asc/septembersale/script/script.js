//goTarget
function goTarget(target, yoffset) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}

$(".sepsale_acare").hover(function(){
	$(this).addClass("checked").siblings("dl").removeClass("checked");
	var idx=$(this).index()-1;
	$(".sepsale_aimg img").eq(idx).addClass("showed").siblings("img").removeClass("showed");
})

$(window).on('scroll', function() {
  if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
    $('.floatlayer').addClass('on');
  } else {
    $('.floatlayer').removeClass('on');
  }
  
  if ($(window).scrollTop() > $(".sepsale_option").offset().top) {
    $('.sepsale_backup').slideDown();
  } else {
	$('.sepsale_backup').slideUp();
  }
  
});

$(".float-change li").mouseover(function() {
    var index = $(this).index();
    var _num = $(this).attr("data-num");
    var _price = '';
    var _href = '';
    var _ga = '';
	if(_num == 1){
		_price = '24';
		_href = "https://www.iobit.com/buy.php?product=de-asc153pciupf2499&ref=de_asc153pcbundlepurchase2110" + refStr + "&refs=de_purchase_asc";
		_ga = "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcbundle2009b-de')";
	}else if(_num == 2){
		_price = '23';
		_href = "https://www.iobit.com/buy.php?product=de-asc152399-ac&ref=de_asc153pcpurchase2110" + refStr + "&refs=de_purchase_asc";
		_ga = "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc2009b-de')";
	}
    $(this).addClass("on").siblings().removeClass("on");
    $(".floatlayer .left img").eq(index).addClass("on").siblings().removeClass("on");
    $(".floatlayer .price").find("big").text(_price);
    $(".floatlayer .buybtn").attr({
      "href": _href,
      "onclick": _ga
    });
});


(function () {
  //review
  $('#dg-container').gallery();
}());

function cGet(name) {
    var exp = new Date();
    name=name+exp.getDate();
    var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
    if (arr = document.cookie.match(reg))
        return unescape(arr[2]);
    else
        return null;
}

function getPacks() {
    var date = new Date();
    $.ajax({
        type: "GET",
        url: "septembersale.php",
        data: "action=getPacks&d=" + date.getDate(),
        success : function (data) {
            var sales = JSON.parse(data);
            packs = sales.packsNum;
            $(".sepsale_tipsico span").text(packs);
            if(packs>3){
                setTimeout('getPacks()', getReTime());
            }
        }
    })
}

function getReTime() {
    var packsNumTotal = cGet('septemb_t');
    if (packsNumTotal > 1) {
        if ((packsNumTotal - packs) <= 30) {
            retime = (Math.random() > 0.5) ? 2 : 6
            return retime * 1000;
        } else {
            if(packsNumTotal <= 52 && packsNumTotal >= 63){
                retime = (Math.random() > 0.5) ? 12.5 : 14.5;
            }else{
                retime = (Math.random() > 0.5) ? 8.5 : 10.5;
            }
            return retime * 1000;
        }
    } else {
        return 20000;
    }
}
getPacks();