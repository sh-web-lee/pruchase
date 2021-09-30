

function selectProd(name,value){
	if(name == 'tableOps'){
		if(value == 1){
			$(".optionsLink").hide()
			$("#planA").css("display","block")
		}else if(value == 2){
			$(".optionsLink").hide()
			$("#planB").css("display","block")
		}else{
		}
	}
}

/**
 * --------------------------------------------------------------------
 * jQuery customInput plugin
 * Author: Maggie Costello Wachs maggie@filamentgroup.com, Scott Jehl, scott@filamentgroup.com
 * Copyright (c) 2009 Filament Group 
 * licensed under MIT (filamentgroup.com/examples/mit-license.txt)
 * --------------------------------------------------------------------
 */
jQuery.fn.customInput = function(){
	return $(this).each(function(){	
		if($(this).is('[type=checkbox],[type=radio]')){
			var input = $(this);
			var label = $('label[for='+input.attr('id')+']');
			// input.add(label).wrapAll('<div class="custom-'+ input.attr('type') +'"></div>');
			label.hover(
				function(){ $(this).addClass('hover'); },
				function(){ $(this).removeClass('hover'); }
			);		
			input.bind('updateState', function(){	
				input.is(':checked') ? label.addClass('checked') : label.removeClass('checked checkedHover checkedFocus'); 
			})
			.trigger('updateState')
			.click(function(){ 
				$('input[name='+ $(this).attr('name') +']').trigger('updateState'); 
				
				selectProd($(this).attr('name'),$(this).attr('value'));
			})
			.focus(function(){ 
				label.addClass('focus'); 
				if(input.is(':checked')){  $(this).addClass('checkedFocus'); } 
			})
			.blur(function(){ label.removeClass('focus checkedFocus'); });
		}
	});
};
$('input').customInput();

$('.toggle').each(function(){
	$('div:first',this).addClass('first');
	$('div:last',this).addClass('last');	
}); 
$('.custom-radio input').click(function(){
	$('.custom-radio').removeClass('active')
	$(this).parent('.custom-radio').addClass('active')
})

function countInit(){
	var count;
	console.log(cGet('apr2021es'))
	var TIME_COUNT = cGet('apr2021es');

	if (TIME_COUNT == null) {
		TIME_COUNT = 50;
	}
	count = TIME_COUNT;
	$(".countNum").html(formatInt(count,2) + "<i></i>");
	setTimeout("getCode('" + count + "')", 3000)
}

$(document).ready(function() {
	countInit();
});

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	name = name + exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
	var exp = new Date();
	name = name + exp.getDate();
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	if (arr = document.cookie.match(reg))
		return unescape(arr[2]);
	else
		return null;
}

//Countdown number 
function getCode(count) {
	if (count > 3) {
		count--;
		$(".countNum").html(formatInt(count, 2) + "<i></i>")
		$(".banner-count span i").animate({'top': '-20px', 'opacity': '1'}, 500)
		setTimeout(function () {
			$(".banner-count span i").animate({'opacity': '0'}, 300)
			setTimeout(function () {
				$(".banner-count span i").css({'top': '-6px'})
			}, 900)
		}, 600)
	} else {
		$(".countNum").html(formatInt(3, 2))
	}
	cSet('apr2021es', count);
	setTimeout("getCode('" + count + "')", getReTime());
}


/**
 * --------------------------------------------------------------------
img
 * --------------------------------------------------------------------
 */
$(function () {
    var imageWrap = $('.vfx-image-wrap'),
        topImage = $(this).find('.before-image'),
        divider = $(this).find('.divider-bar'),
        stayBounce = $('.toggle-function');
    imageWrap.on("mousemove", function (e) {
      // Gotta localize top image and divider so it only applies to this
        var offsets = $(this).offset(),
            fullWidth = $(this).width(),
            mouseX = e.pageX - offsets.left,
            topImage = $(this).find('.before-image'),
            divider = $(this).find('.divider-bar');
        if (mouseX < 0) {
            mouseX = 0;
        } else if (mouseX > fullWidth) {
            mouseX = fullWidth
        }
      $(this).addClass('special');
        divider.css({ left: mouseX, transition: 'none' });
        topImage.css({ width: mouseX, transition: 'none' });
    });
  stayBounce.click(function(){
    $(this).toggleClass('stay');
  });
  imageWrap.on("mouseleave", function () {
    if (!stayBounce.hasClass('stay')) {
      divider.css({  left: '50%', transition: 'all .3s' });
      topImage.css({  width: '50%', transition: 'all .3s' });
    }
  });
}); // JavaScript Document

$(window).scroll(function() {
	if ($(document).scrollTop() > 3925) {
		$('.float-footer').fadeIn(500)
	} else {
		$('.float-footer').fadeOut(500)
	}
})

function formatInt(number,len) {
	return number.toString().padStart(len,'0');;
}

function getReTime(){
	var totalNum = cGet('apr2021es');
	if (totalNum > 40 && totalNum <= 50)
		retime = 4;
	else if(totalNum > 20 && totalNum <= 40)
		retime = 20;
	else 
		retime = 7;
	// console.log(retime)
	return retime*1000;
}

//////////////////////////////////////////////////////////////

$('.font-layer ul li').click(function(){
	$('.footer-btn dl dd').hide()
	$('.footer-btn dl dd').eq($(this).index()).show()
	$('.font-layer ul li').removeClass('active')
	$(this).addClass('active')
	$('.float-footer .heart').removeClass('label70').removeClass('label45')
	if($(this).index() == 0){
		$('.float-footer .heart').addClass('label70')
	}else{
		$('.float-footer .heart').addClass('label45')
	}
})
$('.banner-option ul li').click(function(){
	$('.banner-option dl dd').hide()
	$('.banner-option dl dd').eq($(this).index()).show()
	$('.banner-option ul li').removeClass('active')
	$(this).addClass('active')
	$('.banner-cont .heart').removeClass('label70').removeClass('label45')
	if($(this).index() == 0){
		$('.banner-cont .heart').addClass('label45')
	}else{
		$('.banner-cont .heart').addClass('label70')
	}
})
