

function selectProd(name,value){
	if(name == 'opinions'){
		if(value == "1"){
			changeValue('$124.84','83')
			$('.boxes').css({'opacity':0,'left':'180px'})
			$('.box2').css({'opacity':1}).animate({'left':'160px'},300)
			$(".getItNow .button").hide()
			$("#ascdbbuy").css("display","block")
		}else if(value == 2){
			changeValue('$79.98','73')
			$('.boxes').css({'opacity':0,'left':'180px'})
			$('.box3').css({'opacity':1}).animate({'left':'160px'},300)
			$(".getItNow .button").hide()
			$("#asciubuy").css("display","block")
		}else{
			changeValue('$104.94','80')
			$('.boxes').css({'opacity':0,'left':'180px'})
			$('.box4').css({'opacity':1}).animate({'left':'160px'},300)
			$(".getItNow .button").hide()
			$("#ascimfbuy").css("display","block")
		}
	}
}
function changeValue(subtotal,off){
	$("#sub-total span").html(subtotal)
	$('.heart').html(off)
	$('.heart').addClass('heartShake')
	setTimeout(function(){
		$(".heart").removeClass('heartShake')
	},500)
}
setTimeout(function(){
	$(".getItNow .button").removeClass("anim")
},1500)


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

