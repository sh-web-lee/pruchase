$.fn.target = function(target, yoffset) {
	$(this).click(function() {
		if (!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({
			scrollTop: Theigth
		}, 'slow');
	});
};

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		} else {
			scrollclass.removeClass(ClassName);
		}
	});
};

$(function() {
  cycleCountdown();
	$(window).scrollWindow($(".feature dl"), $('.reviews dl'), ("on"));
	$("img.asc-icon").mouseenter(function () {
    TweenMax.to(".pop", 0.3, {
      scale: 1,
    });
  }).stop().mouseout(function () {
    TweenMax.to(".pop", 0.3, {
      scale: 0,
    });
  });

	$(".selecter").click(function () {
    var _discount = $(this).attr("data-discount");
    var _original = $(this).attr("data-original");
    var _href     = $(this).attr("data-href");
    var _ga       = $(this).attr("data-ga");
    console.log(_discount,_original,_href,_ga,$(this).index());
    if($(this).index() == 0) {
      $(".asc-box-content").addClass("active");
    }else if($(this).index() == 1) {
      $(".asc-box-content").removeClass("active");
    }
    $(this).addClass("active").siblings().removeClass("active");
    $(".asc-message>img").attr("src",_discount);
    $(".asc-message p del").text(_original);
    $(".asc-message a.bottombuy-btn").attr("href",_href).attr("onclick",_ga);
  });
  packsInit();
});

function cycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 1);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0,2);
  $(".countdown:eq(0) strong").eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
  $(".countdown:eq(1) strong").eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
  setTimeout('cycleCountdown()', 1);
}


function focus() {
  $('.progress-bar .bar >span').append('<span class="reduce"></span>');
  var tReduce = new TimelineLite();
  tReduce.to('.reduce', 1.5, {
    y: -100,
    autoAlpha: 0,
    onComplete: function() {
      $('.reduce').remove();
    }
  })
}

function pack(number,starnumber) {
  $('.gift').prop('number', starnumber).animateNumber({
      number: number
    },
    500
  );
  $('.soldNum').html(500-number);
}

function flipNum(num) {
  var number =num*3.36;
  $(".progress-bar .bar >span").css("width",number);
  setTimeout(function () {
    focus();
  }, 500);
}

var cArr = ["shot3", "shot2", "shot1"];
var index = 0;

//prevFun
function prevFun() {
  cArr.unshift(cArr[2]);
  cArr.pop();
  $(".showcase .imglist li").each(function(i, e) {
    $(e).removeClass().addClass(cArr[i]);
  });
  index--;
  if (index < 0) {
    index = 2;
  }
}
//nextFun
function nextFun() {
  cArr.push(cArr[0]);
  cArr.shift();
  $(".showcase .imglist li").each(function(i, e) {
    $(e).removeClass().addClass(cArr[i]);
  });
  index++;
  if (index > 2) {
    index = 0;
  }
}

function packsInit(){
  var date = new Date();
  var cName = "itascjanpa" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs=70;
  } else {
    packs=arr[2];
  }
  pack(packs,packs);
  flipNum(packs);
  $('.packsNum').html(packs);
  setTimeout('getPacks()',6300);
}

function getPacks(){
  var date=new Date();
  $.ajax({
    type:'GET',
    url:'specialete.php',
    data:'action=getSales&d='+date.getDate(),
    success:function(sPacks){
      if(!isNaN(sPacks)){
        if(sPacks!=packs) {
          pack(parseInt(sPacks),parseInt(packs));
          flipNum(parseInt(sPacks));
          packs=sPacks;
          $('.packsNum').html(packs);
        }
      }
    }
  });
  setTimeout('getPacks()',6300);
}



