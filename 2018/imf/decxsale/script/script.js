// 浮动
function showFloat() {
	var scrollHeight = $('.banner').height();
	if ($(window).scrollTop() > scrollHeight) {
		$('.float').addClass('on');
	} else {
		$('.float').removeClass('on');
	}
}
// 消失动画
function reduce(packsNow, packsBefore) {
	var num = packsBefore - packsNow;
	$('.focus').append('<div class="reduce reduce' + num + '"><div class="num"></div><div class="ghost"></div></div>')
	var tReduce = new TimelineLite();
	tReduce.from('.reduce .num', 0.5, {
			scale: 0.5,
			autoAlpha: 0
		})
		.from('.reduce .ghost', 0.5, {
			opacity: 0,
			autoAlpha: 0
		}, '-=0.1')
		.to('.reduce', 1, {
			y: -100,
			autoAlpha: 0,
			onComplete: function() {
				// 进度条随动
				$('.focus .reduce').remove();
				// 数字减少
				//var curNumber = Number($('.countNum').html()) - num ;
				var curNumber = (Number(packsNow) < 10) ? ('0' + packsNow) : Number(packsNow);
				$('.countNum').html(curNumber);
				// 数字动画
				// 创建动画对象
				// 主舞台
				$('.focus .counter').append('<span class="numGhost">' + curNumber + '</span>');
				// 浮动
				$('.float strong').append('<span class="numGhost">' + curNumber + '</span>');
				// 执行动画
				TweenLite.to($('.numGhost'), 0.5, {
					scale: 3,
					autoAlpha: 0,
					onComplete: function() {
						$('.numGhost').remove();
					}
				});
			}
		})
}

$('.banner .extra').hover(function() {
	if ($(this).hasClass('sold-out')) {
		return;
	} else {
		$(this).addClass('active');
		$('.banner .stage').removeClass('active');
	}
}, function() {
	$(this).removeClass('active');
	$('.banner .stage').addClass('active');
});

// review
$('.review .handle li').hover(function() {
	$(this).addClass('active').siblings().removeClass('active');
	$('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});

/*getUrlParam*/
(function($) {
	$.getUrlParam = function(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return unescape(r[2]);
		return '';
	}
})(jQuery);

function change() {
	$('.stage').removeClass('before').addClass('after');
	var packs = '<div class="packs">' +
		'<div class="info">' +
		'<h2>IObit Malware Fighter 6 PRO Valuable Birthday Pack</h2>' +
		'<strong>56% OFF</strong>' +
		'Save<del>$30.96</del>' +
		'</div>' +
		'</div>'
	var details = '<div class="details">' +
		'<div class="info">' +
		'<h3> Holiday Season Pack Sold Out</h3>' +
		'<dl>' +
		'<dt> But IObit Malware Fighter 6 PRO Family Protection Pack on Sale Now! </dt>' +
		'<dd>Hurry up, seize your another chance</dd>' +
		'</dl>' +
		'</div>' +
		'<dl class="checkout">' +
		'<dt>only <strong>$23.99</strong> <del>$54.95</del></dt>' +
		'<dd><a class="checkbtn large link3pc buylink">Activate Now</a></dd>' +
		'<dd class="last"><i></i>100% 60-Day Money Back Guarantee</dd>' +
		'</dl>' +
		'</div>'
	$('.stage').append(packs);
	$('.stage').append(details);

	var valuePack = '<div class="extra value-pack sold-out">' +
		'<div class="info">' +
		'<h3>Valuable New Year Pack</h3>' +
		'<p>1 Year / 3 PCs + Gift Pack</p>' +
		'</div>' +
		'<dl class="checkout">' +
		'<dt><strong>$25.99</strong> <del>$94.89</del></dt>' +
		'<dd><a class="checkbtn middle buylink">Activate Now</a></dd>' +
		'</dl>' +
		'</div>'
	$('.banner .wrapper').append(valuePack);

	// 移除不必要元素
	$('.gift-pack').remove();
	$('.float').remove();
	$('.inform').html('');
	// 赋值
	var aff = $.getUrlParam('aff');
	var ref = $.getUrlParam('ref');
	var pop = $.getUrlParam('pop');
	var refLink='imf3pc201701a';
	var refStr='';
	if (ref.length > 0) {
		refStr = '-' + ref;
	}

	if((pop=='b_imf')||(pop=='x_imf')){
		refStr+='-'+pop;
	}
	var tw = MApp(2.2).datetime.getTimeZone();
	var new3pc = "https://www.iobit.com/buy.php?product=imf63pc&ref=imf3pca"+refStr+"&aff=" + aff + "&refs=purchase_imf&tw=" + tw;
	var new3pcStat = "ga('send', 'event', 'imfbuya', 'buy', 'imfpurchase-imf63pc');"
	var new1pc = "https://www.iobit.com/buy.php?product=imf61pc&ref=imf1pca"+refStr+"&aff=" + aff + "&refs=purchase_imf&tw=" + tw;
	var new1pcStat = "ga('send', 'event', 'imfbuya', 'buy', 'imfpurchase-imf61pc');"
	$('.link3pc').attr('href', new3pc);
	$('.link3pc').attr('onclick', new3pcStat);
	$('.link1pc').attr('href', new1pc);
	$('.link1pc').attr('onclick', new1pcStat);

	$('.compar-tab .txtExtra').html('<strong>1 Year / 3 PCs</strong>')
	$('.priceExtra').html('<strong>$23.99</strong> <del>$54.95</del>')
	$('.priceExtra').css('marginTop', '20px');

	refCheck();
}

//changeStage
function changeStage() {
	// $('.stage').removeClass('before').addClass('after');
	$('.stage .packs').fadeOut("400", function() {

		$(this).remove();
	});
	$('.stage .details').fadeOut('400', function() {
		$(this).remove();
	});


	// extra
	$('.family-pack').fadeOut('400', function() {
		$(this).remove();
		setTimeout(change(), '600');
	});


}


$(window).on('scroll', function() {
	showFloat();
});

$(function() {
	//var pop = $.getUrlParam('pop');
	//if(pop=='b_imf'){
	//	$('.buylink').each(function(){
	//		var buyHrefTemp = $(this).attr('href');
	//		var buyHref = buyHrefTemp.replace(/ref=(.*)&aff=/, 'ref=' + pop + '&aff=');
	//		$(this).attr('href', buyHref);
	//	})
	//}
	packsGet();
	showFloat();
});

function goTaget(target) {
	var Theigth = target.offset().top;
	$("html, body").animate({
		scrollTop: Theigth
	}, 'slow');
}

function packsGet() {
	var date = new Date();
	var cName = "janasc" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	packs = (arr == null) ? 98 : arr[2];
	if (packs > 0) {
		$('.countNum').html((packs < 10) ? ('0' + packs) : packs);
		setTimeout('decreasingPacks()', 20000);
	} else {
		changeStage();
	}
}

function decreasingPacks() {
	var dateNow = new Date();
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getPacks&r=" + Math.random() + "&d=" + dateNow.getDate(),
		success: function(sPacks) {
			var rePacks = packs - sPacks;
			if (sPacks > 0) {
				if (rePacks > 0) {
					reduce(sPacks, packs);
				}
				setTimeout('decreasingPacks()', 20000);
			} else {
				changeStage();
			}
			packs = sPacks;
		}
	});
}

$(function(){
	refCheck();
});

function in_array(stringToSearch, arrayToSearch) {
	for (s = 0; s < arrayToSearch.length; s++) {
		thisEntry = arrayToSearch[s].toString();
		if (thisEntry == stringToSearch) {
			return true;
		}
	}
	return false;
}

function refCheck(){
	var refStr=MApp(2.2).url.getParameters('pop');
	var checkArr=['x_imf'];
	if(in_array(refStr,checkArr)){
		//$('.buylink').each(function () {
		//	var buyHrefTemp = $(this).attr('href');
		//	if(typeof(buyHrefTemp)!='undefined') {
		//		var buyHref = buyHrefTemp.replace(/ref=(.*)&aff=/, 'ref=' + refStr + '&aff=');
		//		$(this).attr('href', buyHref);
		//	}
		//})
	}
}