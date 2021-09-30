// 浮动
function showFloat(){
	var scrollHeight = $('.banner').height();
	if ($(window).scrollTop() > scrollHeight) {
		$('.float').addClass('on');
	} else {
		$('.float').removeClass('on');
	}
}
// 消失动画
function reduce(packsNow,packsBefore){
	var num=packsBefore-packsNow;
	$('.focus').append('<div class="reduce reduce'+num+'"><div class="num"></div><div class="ghost"></div></div>')
	var  tReduce = new TimelineLite();
	tReduce.from('.reduce .num',0.5,{
		scale: 0.5,
		autoAlpha: 0
	})
	.from('.reduce .ghost',0.5,{
		opacity:0,
		autoAlpha:0
	},'-=0.1')
	.to('.reduce',1,{
		y: -100,
		autoAlpha:0,
		onComplete: function(){
			// 进度条随动
			$('.focus .reduce').remove();
			// 数字减少
			//var curNumber = Number($('.countNum').html()) - num ;
			var curNumber = Number(packsNow) ;
			$('.countNum').html(curNumber);
			// 数字动画
			// 创建动画对象
			// 主舞台
			$('.focus .counter').append('<span class="numGhost">'+curNumber+'</span>');
			// 浮动
			$('.float strong').append('<span class="numGhost">'+curNumber+'</span>');
			// 执行动画
			TweenLite.to($('.numGhost'),0.5,{
				scale:3,
				autoAlpha:0,
				onComplete :function(){
					$('.numGhost').remove();
				}
			});
		}
	})
}

$('.banner .extra').hover(function() {
	if ($(this).hasClass('sold-out')) {
		return;
	}else{
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
(function($){
    $.getUrlParam = function(name){
		var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    		var r = window.location.search.substr(1).match(reg);
    		if (r!=null) return unescape(r[2]); return '';
    }
})(jQuery);



function change(){
	$('.stage').removeClass('before').addClass('after');
	var packs = '<div class="packs">'+
						'<div class="info">'+
							'<h2>Advanced SystemCare 10 PRO Golden Family Pack</h2>'+
							'<strong>77% OFF</strong>'+
							'Save<del>$69.98</del>'+
						'</div>'+
					'</div>'
	var details ='<div class="details">'+
					'<div class="info">'+
						'<h3>ASC super value pack is sold out</h3>'+
						'<dl>'+
							'<dt>Advanced SystemCare 10 PRO <del>$89.97</del></dt>'+
							'<dd>Hurry up, seize your another chance</dd>'+
						'</dl>'+
					'</div>'+
					'<dl class="checkout">'+
						'<dt>only <strong>$19.99</strong> <del>$89.97</del></dt>'+
						'<dd><a class="checkbtn large link3pc">Activate Now</a></dd>'+
						'<dd class="last"><i></i>100% 60-Day Money Back Guarantee</dd>'+
					'</dl>'+
				'</div>'
	$('.stage').append(packs);
	$('.stage').append(details);

	var valuePack = '<div class="extra value-pack sold-out">'+
					'<div class="info">'+
						'<h3>Super Value Pack</h3>'+
						'<p>14 Months / 3 PCs + Gift Pack</p>'+
					'</div>'+
					'<dl class="checkout">'+
						'<dt><strong>$23.98</strong> <del>$164.93</del></dt>'+
						'<dd><a class="checkbtn middle">Activate Now</a></dd>'+
					'</dl>'+
				'</div>'
	$('.banner .wrapper').append(valuePack);

	// 移除不必要元素
	$('.gift-pack').remove();
	$('.float').remove();
	$('.inform').html('');
	// 赋值
	var aff = $.getUrlParam('aff');
	var ref = $.getUrlParam('ref');
	if(ref.length==0){
		ref='enaff_asc_2017newyearsale';
	}
	var tw = MApp(2.2).datetime.getTimeZone();
	var new1pc = "http://www.iobit.com/buy.php?product=asc101pc1477_aff&ref="+ref+"&aff="+aff+"&refs=purchase_asc&tw="+tw;
	var new1pcStat = "ga('send', 'event', 'ascbuy', 'buy', 'enaffasc2017newyearsale');"

	var new3pc = "http://www.iobit.com/buy.php?product=asc103pc1999_aff&ref="+ref+"&aff="+aff+"&refs=purchase_asc&tw="+tw;
	var new3pcStat = "ga('send', 'event', 'ascbuy', 'buy', 'enaffasc2017newyearsale');"

	$('.link1pc').attr('href', new1pc);
	$('.link1pc').attr('onclick', new1pcStat);

	$('.link3pc').attr('href',new3pc);
	$('.link3pc').attr('onclick',new3pcStat);

	$('.compar-tab .txtExtra').html('<strong>1 Year / 3 PCs</strong>')
	$('.priceExtra').html('<strong>$19.99</strong> <del>$89.97</del>')
	$('.priceExtra').css('marginTop', '10px');
}

//changeStage
function changeStage(){
	// $('.stage').removeClass('before').addClass('after');
	$('.stage .packs').fadeOut("400",function(){
		
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


$(window).on('scroll', function () {
	showFloat();
});

$(function() {
	packsGet();
	showFloat();
});


function packsGet(){
	var date=new Date();
	var cName="janasc"+date.getDate();
	var arr=document.cookie.match(new RegExp("(^| )"+cName+"=([^;]*)(;|$)"));
	packs=(arr==null)?98:arr[2];
	if(packs>0){
		$('.countNum').html(packs);
		setTimeout('decreasingPacks()', 20000);
	}else{
		changeStage();
	}
}
function decreasingPacks() {
	var dateNow = new Date();
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getPacks&r=" + Math.random()+"&d="+dateNow.getDate(),
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