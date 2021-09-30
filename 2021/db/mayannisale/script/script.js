$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
  });
};
 $(".users li").userMouseover($(".content dl"));

function selectProd(name,value){
	if(name == 'opinions'){
		if(value == "1"){
			changeValue(0)
			$('.boxes').animate({'opacity':0,'left':'140px'},200)
			$('.box2').animate({'opacity':1,'left':'160px'},200)
			$(".getItNow .button").hide()
			$("#planC").css("display","block")
			$(".float-footer .content").hide()
			$(".planC").css("display","block")
			$(".box-gift").hide()
		}else if(value == 2){
			changeValue(45)
			$('.boxes').animate({'opacity':0,'left':'140px'},200)
			$('.box3').animate({'opacity':1,'left':'160px'},200)
			$(".getItNow .button").hide()
			$("#planB").css("display","block")
			$(".float-footer .content").hide()
			$(".planB").css("display","block")
			$(".box-gift").hide()
		}else{
			changeValue(70)
			$('.boxes').animate({'opacity':0,'left':'140px'},200)
			$('.box4').animate({'opacity':1,'left':'160px'},200)
			$(".getItNow .button").hide()
			$("#planA").css("display","block")
			$(".float-footer .content").hide()
			$(".planA").css("display","block")
			$(".box-gift").show()
		}
	}
}
function changeValue(off){
	if(off == 70){
		$('.heart').removeClass('label45').removeClass('label20').addClass("label80")
	}else if(off == 45){
		$('.heart').removeClass('label80').removeClass('label20').addClass("label45")
	}else{
		$('.heart').removeClass('label80').removeClass('label45').addClass("label20")
	}
	
	// $('.heart').addClass('heartShake')
	// setTimeout(function(){
	// 	$(".heart").removeClass('heartShake')
	// },500)
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
$(document).ready(function() {
	isScroll.init('.pageInit');
	setTimeout(function() {
		getCode()
	}, 1000)
	
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
function getCode() {
	var count;
	// console.log(cGet('spring2021_en'))
	var TIME_COUNT = cGet('spring2021_en');
	if(TIME_COUNT == null){TIME_COUNT = 100;}
	count = TIME_COUNT;
	if (count > 3) {
		count --;
		$(".banner-count span").html(formatInt(count,3) + "<i></i>")
		$(".banner-count span i").animate({'top': '-20px', 'opacity': '1'}, 500)
		setTimeout(function () {
			$(".banner-count span i").animate({'opacity': '0'}, 300)
			setTimeout(function () {
				$(".banner-count span i").css({'top': '-6px'})
			}, 900)
		}, 600)
	}else
	$(".banner-count span").html(formatInt(3,3) + "<i></i>")
	cSet('spring2021_en', count);
	setTimeout("getCode()", getReTime());
}
/*滚动添加css*/
var isScroll = {
	init: function(_el) {
		this.start(_el);
		$(window).on('scroll', function() {
			isScroll.start(_el)
		});
	},
	start: function(_el) {
		var self = this;
		$(_el).each(function() {
			var _self = $(this);
			var isScrollTop = $(window).scrollTop();
			var isWindowHeiget = $(window).height() * 0.6;
			/**/
			var _class = $(this).data('animation');
			if (isScrollTop + isWindowHeiget > $(this).offset().top) {
				_self.addClass(_class);
			}
		});
	}
}

$(window).scroll(function() {
	if ($(document).scrollTop() > 600) {
		$('.float-footer').fadeIn(500)
	} else {
		$('.float-footer').fadeOut(500)
	}
})

function formatInt(number,len) {
	return number.toString().padStart(len,'0');
}
/**
 * String.padStart()
 * version 1.0.1
 * Feature	        Chrome  Firefox Internet Explorer   Opera	Safari	Edge
 * Basic support	57   	51      (No)	            44   	10      15
 * -------------------------------------------------------------------------------
 */
if (!String.prototype.padStart) {
  String.prototype.padStart = function padStart(targetLength, padString) {
    targetLength = targetLength >> 0; //floor if number or convert non-number to 0;
    padString = String(typeof padString !== 'undefined' ? padString : ' ');
    if (this.length > targetLength) {
      return String(this);
    } else {
      targetLength = targetLength - this.length;
      if (targetLength > padString.length) {
        padString += padString.repeat(targetLength / padString.length); //append to original to ensure we are longer than needed
      }
      return padString.slice(0, targetLength) + String(this);
    }
  };
}

function getReTime(){
	var totalNum = cGet('spring2021_en');
	if (totalNum > 50 && totalNum <= 100)
		retime = 6;
	else
		retime = 3;
	// console.log(retime)
	return retime*1000;
}


function countPop(){
	var count = 60;
	var timer = setInterval(function(){
		if(count > 1){
			count --;
			$(".pop-count span").html(formatInt(count,2))
			if(count < 20 && count > 9){
				$(".pop-count span").css({"text-indent":"8px"})
			}else{
				$(".pop-count span").css({"text-indent":"5px"})
			}
		}else{
			clearInterval(timer);
			$('.pop-layer-wrap').hide()
		}
	  }, 1000)
}
function closePop(){
	$('.pop-layer-wrap').hide()
}

function TanChuang(){
	console.log(event.pageY)
	var marspringPop = document.cookie.match("marspringPop")
	if(!marspringPop){
		var inFifteenMinutes = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
		document.cookie = "marspringPop=true;" + "expires=" + inFifteenMinutes.toGMTString()
		$('.pop-layer-wrap').css({'display':'flex'})
		countPop()
	}else{}
}
var gaga = function(wrap) {
  var wrap = document.getElementById(wrap);
  var num = 1;
  var hoverDir = function(e) {
    var w = wrap.offsetWidth,
      h = wrap.offsetHeight,
      x = (e.clientX - wrap.offsetLeft - (w / 2)) * (w > h ? (h / w) : 1),
      y = (e.clientY - wrap.offsetTop - (h / 2)) * (h > w ? (w / h) : 1),
      direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4,
      eventType = e.type,
      dirName = new Array('上方', '右侧', '下方', '左侧');
    if (e.type == 'mouseover' || e.type == 'mouseenter') {
    } else {
      if (num != 1) return;
      if (dirName[direction] == '上方') {
        num++;
        TanChuang();
      }
    }
  }
  if (window.addEventListener) {
    wrap.addEventListener('mouseover', hoverDir, false);
    wrap.addEventListener('mouseout', hoverDir, false);
  } else if (window.attachEvent) {
    wrap.attachEvent('onmouseenter', hoverDir);
    wrap.attachEvent('onmouseleave', hoverDir);
  }
}

// gaga('touming')
// $("body").mousemove(function(event){

//                 // var relPageCoords = "(" + event.pageX + "," + event.pageY + ")";
// 				console.log(event.pageY)
// 	if(event.pageY <= 1){
		
// 		var marspringPop = document.cookie.match("marspringPop")
// 		if(!marspringPop){
// 			var inFifteenMinutes = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
// 			document.cookie = "marspringPop=true;" + "expires=" + inFifteenMinutes.toGMTString()
// 			$('.pop-layer-wrap').css({'display':'flex'})
// 			countPop()
// 		}else{}
// 	}
//  });
// $(".banner-wrap").mouseleave(function(){
// 	// console.log("mouseleave")
	
// })