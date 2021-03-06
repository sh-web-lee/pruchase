$(document).ready(function() {
	packsGet();
	setTimeout('decreasingPacks(1)',2000);
	$(".users li").mouseover(function(event) {
		var num = $(this).index();
		$(".users li").eq(num).addClass('current').siblings().removeClass('current');
		$(".review .content > dl").eq(num).addClass('active').siblings().removeClass('active');
	});
	setTimeout(function(){
		$(".box span.one").addClass("one-end");
		$(".box span").addClass("active");
		setNumber(packs);
		pack(packs);
	},800)
	var number=$(".header p.listCount").text();
	var allNumber=$(".header p strong").text();
	if(number<=3) {
		$(".header a").addClass("disnone");
	}
	if(number==2) {
		$(".list-content").addClass("two-list");
	}
	if(number==1) {
		$(".list-content").addClass("one-list");
	}
	if(number==4) {
		$(".list-content").eq(1).addClass("one-list");
	}
	if((number==5)&&(allNumber==5)) {
		$(".list-content").eq(1).addClass("two-list");
	}
	//$(".list-content dl dd,list-content dl dt").addClass("active");
	setTimeout('getViewNum()',60000);
});
function focus(){
 $('.left-message').append('<div class="reduce"><div class="num"></div><div class="ghost"></div></div>');
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
   onComplete: function() {
	  $('.reduce').remove();
	 }
  })
}
$(window).on('scroll', function () {
	var scrollHeight = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('#floatlayer').addClass('on');
		$('.float').addClass('on');
	}else {
		$('#floatlayer').removeClass('on');
		$('.float').removeClass('on');
	}
});
function setNumber(number){
	var mark=/[.]/g;
	var n = String(number),len = n.length;
	var boxlen=$(".box span").length-len;
	var mark=n.indexOf(".");
	for(var i=0;i<len;++i){
		var obj = $(".box span").eq(i+boxlen);
		var y = -54 * parseInt(n.charAt(i), 10) -540;
		obj.animate({ top:y+"px" }, 1200);
		if(len==1) {
			$(".box span").eq(2).animate({ top:"-540px" }, 1200);
		}
		if(len==2) {
			$(".box span").eq(1).animate({ top:"-540px" }, 1200);
		}
		if(len==3) {
			$(".box span").eq(0).animate({ top:"-540px" }, 1200);
		}
	}
	setTimeout(function () {
		$(".box span").removeClass("active");
	}, 2000);
};
function pack(number) {
	$('.pack').prop('number', 2000).animateNumber(
		{
			number: number
		},
		1000
	);
}
function ChangeNumber(number) {
	focus();
	setTimeout(function () {
		setNumber(number);
	  $(".pack").html(number);
	}, 1000);
	
}
var num=918;
var count = $('.header .roll .list-content').length;
if ($('.header .roll').length != 0) {
    $('.header .roll').css('width', 918 * count);
  };
  $('.header .dg-next').click(function(event) { 
  	$(".header .roll").animate({marginLeft:"-"+num+"px"});
  	num=num +918;
  	if(num>=918 * count) {
  		$('.header .dg-next').addClass("unable");
  		$('.header .dg-prev').removeClass("unable");
  	  num = 918;
  	}
  	else {
  		$('.header .dg-next').removeClass("unable");
  		$('.header .dg-prev').addClass("unable");
  	}
    return num;
  });
  $('.header .dg-prev').click(function(event) {
  	num= num -918;
  	$(".header .roll").animate({marginLeft:"-"+num+"px"});
  	if(num==0) {
  		$('.header .dg-prev').addClass("unable");
  		$('.header .dg-next').removeClass("unable");
  		num=918;
  	}
  	else {
  		$('.header .dg-prev').removeClass("unable");
  		$('.header .dg-next').addClass("unable");
  	}
  	return num;
  });
function packsGet(){
	var date=new Date();
	var cName="dbdriverup"+date.getDate();
	var arr=document.cookie.match(new RegExp("(^| )"+cName+"=([^;]*)(;|$)"));
	packs=(arr==null)?78:arr[2];
}
function decreasingPacks(isFirst) {
	var dateNow = new Date();
	$.ajax({
		type: "GET",
		url: "driverupdate.php",
		data: "action=getPacks&r=" + Math.random()+"&d="+dateNow.getDate()+(isFirst==1?'&f=1':''),
		success: function(sPacks) {
			var rePacks=packs-sPacks;
			if(rePacks>0){
				ChangeNumber(sPacks);
			}
			packs=sPacks;
			setTimeout('decreasingPacks()', 10000);
		}
	});
}
function getViewNum(){
	$.ajax({
		type: "GET",
		url: "driverupdate.php",
		data: "action=getViewNum",
		success: function(viewNum) {
			$('.viewNum').html(viewNum);
			setTimeout('getViewNum()', 60000);
		}
	});
}