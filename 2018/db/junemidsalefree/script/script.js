$(document).ready(function() {
	packsInit();
	$('#dg-container').gallery();
});

$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('#floatlayer').addClass('on');
	} else {
		$('#floatlayer').removeClass('on');
	}
});


function flipNum(num,length) {
	var num = PrefixInteger(num, length)
	var len = String(num).length;
	var str = num.toString();
	// console.log(len);
  var list = '';
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var wid=num/2;
  for (var j = 0; j < arr.length; j++) {
      list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .scroll-tick").html(list);
  $(".floatlayer .scroll-tick").html(list);
	for(var i = 0; i <= len; i++){
		var  curNum = str.substring(i, i + 1);       		
			$(".banner .scroll-tick").eq(i).animate({
				marginTop: - curNum * 20,
			},"slow");
	}
	for(var i = 0; i <= len; i++){
		var  curNum = str.substring(i, i + 1);       		
			$(".floatlayer .scroll-tick").eq(i).animate({
				marginTop: - curNum * 20,
			},"slow");
	}
	if(num<=1000) {
    $(".progress span").css("width",(500-wid)+'px');
  }
  $('.between-buy h3 span').html(num);
}
function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function pack(number,after) {
	$('.between-buy h3 span').prop('number', 999).animateNumber({
			number: number
		},
		1000
	);
}
function focus() {
	$('.right-box').append('<div class="reduce"><div class="num"></div><div class="ghost"></div></div>');
	$('.floatlayer .wrapper').append('<div class="reduce"><div class="num"></div><div class="ghost"></div></div>');
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
				$('.reduce').remove();
			}
		})
}

function packsInit() {
	var date = new Date();
	var cName = "endbmid" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var reTime=10000;
	if (arr == null) {
		reTime=3000;
		packs=936;
	} else {
		packs = arr[2];
	}
	flipNum(packs);
	pack(1000-packs);
	setTimeout('getSales()', reTime);
}

function getSales() {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "2018midsalefree.php",
		data: "action=getSales&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if(sales.packsNum!=packs){
				flipNum(sales.packsNum);
				$('.packsNum').html(1000-sales.packsNum);
				focus();
			}
			packs=sales.packsNum;
		}
	});
	setTimeout('getSales()', 10000);
}