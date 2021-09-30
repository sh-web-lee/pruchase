$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};
$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};

$(window).on('scroll', function () {
  //banner
  if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
    $('.float').addClass("on");
  }else {
    $('.float').removeClass("on");
  }
  //feature
  if ($(window).scrollTop() > $(".choose").offset().top) {
    $('.feature dl').addClass("on");
  }
  //review
  $(".users li").userMouseover($(".content dl"));
});


var packs=26;
$(function () {
  //goto comparison-table
  $("a.intro").target($(".comparison-table"));
  //banner
  setTimeout(function () {
    $(".banner .right-box").addClass("on");
  }, 500);
  setTimeout(function () {
    $(".banner .left-box").addClass("on");
  }, 2000);
  //review
  $(".review dl dt .img-box").mouseover(function () {
    $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });
  //review
  $(".reviews .img-box li").hover(function() {
    var num =$(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".reviews .message li").eq(num).addClass("active").siblings().removeClass("active");
  });
});

// progressbar
function focus() {
   $(".banner .raduem").css({ "opacity": 1, "top": -14, "zIndex": 8}).animate({ "opacity": 0, "top": -35, "zIndex": -9}, 800);
   $(".raduem-box").css({ "opacity": 1, "top": 182, "zIndex": 8}).animate({ "opacity": 0, "top": 122, "zIndex": -9}, 800);
   $(".number").append("<span class='reduce'>-1</span>");
}
function flipNum(num) {
  var number =num*0.86;
  $(".progressbar > span").css("width",number);
}

function getPacksNum(){
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "novxsale2019.php",
    data: "action=getPacks&d="+date.getDate()+"&r="+Math.random(),
    success: function(res){
      var packsInfo=JSON.parse(res);
      if(packs!=packsInfo['packsNum']){
        bynum = 680+50-parseInt(packsInfo['packsNum']);
        $('#bynum').html('107.'+bynum);
        packs=packsInfo['packsNum'];
        flipNum(packs, 2);
      }
      var viewNum=packsInfo['viewNum'];
      $('.packsNum').html(packs);
      if(packs<5) {
        $('.viewNum').html(viewNum);
      }
    }
  });
  if(packs>18){
    setTimeout('getPacksNum()', 6000);
  }else{
    setTimeout('getPacksNum()', 15000);
  }
}

$(function(){
  packsInit();
});
function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".surplus b").html(list);
  $(".countdown2 .scroll-tick").html(list);
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".surplus b").eq(i).animate({
      marginTop: - curNum * 20,
    }, "slow");
    $(".countdown2 .scroll-tick").eq(i).animate({
      marginTop: - curNum * 19,
    }, "slow");
  }
  focus();

}
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}
function packsInit(){
  getPacksNum();
  flipNum(packs, 2);
}

