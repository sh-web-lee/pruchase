function packNum(number, starnumber) {
	$('.buyNum').prop('number', starnumber).animateNumber({
		number: number
	}, 1500);
}

function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length, _time) {
  $(".nwrap .numlist").html('');
  $(".nwrap em").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".barbox").css('width',num*1.5)
  $(".nwrap .numlist").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#topNum .nwrap").eq(a).append('<em>' + curNum + '</em>');
    $("#botNum .nwrap").eq(a).append('<em>' + curNum + '</em>');

    $("#topNum .numlist").eq(a).animate({
      marginTop: -curNum * 29,
    }, _time, function() {
      if (a = 1) {
        $("#topNum .nwrap").eq(1).find("em").css({
          "opacity": 1,
          "fontSize": 26 + "px"
        }).animate({
          "opacity": 0,
          "fontSize": 46 + 'px',
        }, 500);
      }
    });
    $("#botNum .numlist").eq(a).animate({
      marginTop: -curNum * 29,
    }, _time, function() {
      if (a = 1) {
        $("#botNum .nwrap").eq(1).find("em").css({
          "opacity": 1,
          "fontSize": 26 + "px"
        }).animate({
          "opacity": 0,
          "fontSize": 46 + 'px',
        }, 500);
      }
    });
  }
}

function soldout() {
	var aff = MApp(2.2).url.getParameters('aff');
	$(".banner,.floatlayer").removeClass("sold").addClass("sold");
	$(".banner .numbox").remove();
	$(".price strong").remove();
	if(window.isF){
		$('.banner .right p').attr('class','x')
	}else{
		$('.banner .right p').attr('class','')
	}
	
	$('.banner .first-l h2').text('Get PRO Edition with 70% OFF')
	$(".price span").html("<strong>$<b>22</b>.95</strong><del>$74.85 </del>")
	$(".floatlayer .price span").html("<strong>$<b>22</b>.95</strong><del>$74.85 </del>")
	$('.banner .second-l h2').html('Now Get PRO with 70% OFF to Keep <span>'+listCount+' </span>Drivers Up-to-date')
	$(".floatlayer .numbox").html('Get the NO.1 Driver Updater with <strong>70% OFF</strong>');
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=db8preorder2295&ref=en-db8preorderrcsoldout'+refStr+'&aff='+aff+'&refs=purchase_db&tw=-8',
		"onclick": "ga('send', 'event', 'db3pcbuy', 'buy', 'db8preorderrc');"
	})
	$(".buybtn").html("Get It Now");
	$('.banner .buybtn').text('Get It Now – 70% OFF')
}

window.isF = false
function show(){
	isF = true
	$('.banner').addClass('ac')
	$('.second-l').removeClass('display-n')
	$('.first-l').addClass('display-n')
	$('.banner .right p').attr('class','s')
}
// show()
function seview() {
	var num = $(".feature .message-box dl.active").index();
	$(".feature .message-box dl").eq(num+1).addClass("active").siblings().removeClass("active");
	$(".feature .message01 .img-box li").eq(num+1).addClass("active").siblings().removeClass("active");
	if (num==3) {
			clearInterval(d);
	}
}
var e =0;
var d;
$(window).on('scroll', function() {
		if ( $(window).scrollTop() > $(".banner .buybtn").offset().top+60) {
			$('.floatlayer').addClass('on');
		} else {
			$('.floatlayer').removeClass('on');
		}
		if ( $(window).scrollTop() > $(".feature .message01").offset().top-200) {
				e+=1;
				// if(e==1) {
				// 	d = setInterval(function(){
				// 		seview()
				// 	}, 5000);
				// }
		}
		$("[data-name^='animation']").each(function(i){
			if($(document).scrollTop()  > $(this).offset().top -200 ){
				$(this).find("[data-name^='default']").addClass('on');
			}
		});
		var scroll_pos = $(window).scrollTop(),i;
		if(scroll_pos>700) i = 0
		if(scroll_pos>1400) i = 1
		$('.message01').eq(i).find('.animate__animated').each(function(i,v){
			$(v).addClass('animate__fadeInUp')
		})
		// $('.animate__animated').
});

$(document).ready(function() {
	var startTime = new Date().getTime();
	var c= 0;
	// $(".feature .message-box dl").click(function(event) {
	// 	var num=$(this).index();
	// 	 $(this).addClass("active").siblings().removeClass("active");
	// 	 $(".feature .message01 .img-box li").eq(num).addClass("active").siblings().removeClass("active");
	// 	 c+=1;
	// 	 if(c>1) {
	// 	 	clearInterval(d);
	// 	 }
	// 	 else {
	// 	 	if(new Date().getTime() - startTime > 30000){
	// 			clearInterval(d);
	// 			return;
	// 		}
	// 	 }
	// });

	var continer = $(".review-message").width();
	if ($('.review-message .roll').length != 0) {
			var count = $('.review-message .roll dl').length;
			$('.review-message .roll').css('width', continer * count);
		};
		$('.review-box span.next').click(function(event) {	
			var num =$(".review-box ul li.active").index();
				if(num==4) {
					$(".review-box ul li").eq(0).addClass("active").siblings().removeClass("active");
					$(".review-box .light").css('left','117px');
				}
				else {
					var len =num+1;
					$(".review-box ul li").eq(num+1).addClass("active").siblings().removeClass("active");
					$(".review-box .light").css('left', 117+(len*175));
				}

			$('.review-message  .roll').stop(true, true).animate({marginLeft: -continer}, 'slow',function(){
				$('.review-message  .roll').css('marginLeft', '0');
				$('.review-message  .roll').find('dl:first').appendTo($('.review-message  .roll'));
				
			});
		});
		$('.review-box  span.prev').click(function(event) {
			$('.review-message  .roll').find('dl:last').prependTo($('.review-message  .roll'));
			$('.review-message  .roll').css('marginLeft', -continer);
			$('.review-message  .roll').stop(true, true).animate({marginLeft: 0}, 'slow');
			var num =$(".review-box ul li.active").index();
			if(num==0) {
				$(".review-box ul li").eq(4).addClass("active").siblings().removeClass("active");
				$(".review-box .light").css('left', 117+(4*175));
			}
			else {
				var len =num-1;
				$(".review-box ul li").eq(num-1).addClass("active").siblings().removeClass("active");
				$(".review-box .light").css('left',117+(len*175));
			}
		});
		
		$('.ac-header .ac-header-icon').click(function(){
			var type = $(this).attr('_type')
			if(type == 'left'){
				$('.ac-header .cont-list').animate({'left':0},500)
			}else{
				$('.ac-header .cont-list').animate({'left':'-930px'},500)
			}
		})
		// contListWidth($('.cont-list li').length)
});

function contListWidth(itemNumber){
	if(itemNumber<=3) $('.ac-header-icon').hide()

	if(itemNumber>5){
		var str = '<li class="end-item more-item">and more...</li>'
		$('.cont-list').append(str)
	}
	$('.cont-list').css('width',(itemNumber>3?1860:940)+'px');
	var leftN = ((3-(itemNumber%3==0?3:itemNumber%3))*310)/2;

	if(leftN>0 && itemNumber<6){
		$('.cont-list li').eq(itemNumber>3?3:0).css('margin-left',leftN+'px')
	}
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

function packsInit() {
	packs=99;
	getSales(1);
}

function getSales(isInit) {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "db8preorderofficial.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);

			if (sales.packsNum != packs) {
				packs = sales.packsNum;
				if(isInit){
					flipNum(sales.packsNum, 2, 1000);
				}else{
					flipNum(sales.packsNum, 2, 500);
				}
				if ((packs <= 0) && (!$(".banner,.floatlayer,.price").hasClass('sold'))) {
					soldout();
				}
			}
			if(packs>0){
				setTimeout('getSales(0)', getReTime());
			}
		}
	});
}

function getReTime() {
	var packsNumTotal = cGet('endbofficial_t');
	if (packsNumTotal > 1) {
		if ((packsNumTotal - packs) <= 30) {
			retime = (Math.random() > 0.5) ? 2 : 6
			return retime * 1000;
		} else {
			if(packsNumTotal <= 98 && packsNumTotal >= 90){
				retime = (Math.random() > 0.5) ? 3.5 : 5.5;
			}else if(packsNumTotal <= 89 && packsNumTotal >= 80){
				retime = (Math.random() > 0.5) ? 4.5 : 6.5;
			}else if(packsNumTotal <= 79 && packsNumTotal >= 70){
				retime = (Math.random() > 0.5) ? 5.5 : 7.5;
			}else{
				retime = (Math.random() > 0.5) ? 7 : 9;
			}
			return retime * 1000;
		}
	} else {
		return 20000;
	}
}

function getViewNum() {
	$.ajax({
		type: "GET",
		url: "db8preorderofficial.php",
		data: "action=getViewNum",
		success: function(res) {
			$('.buyNum').html(res);
		}
	});
	setTimeout('getViewNum()', 12000);
}


$(function() {
	packsInit(1);
	setTimeout('getViewNum()', 12000);
	console.log(listCount);
	if(listCount > 0){
		contListWidth(listCount);
		show();
	}
});