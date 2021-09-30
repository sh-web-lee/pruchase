
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".scroll-tick strong").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();

  for (var j = 0; j < arr.length; j++) {
    list += '<strong>' + arr[j] + '</strong>';
  }
  $(".scroll-tick").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".countdown1 .scroll-tick").eq(a).animate({
      marginTop: -curNum * 22,
    }, "slow");
  }
   for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".countdown2 .scroll-tick").eq(a).animate({
      marginTop: -curNum * 22,
    }, "slow");
  }
}
function goTaget(target) {
	var Theigth = target.offset().top;
	$("html, body").animate({
		scrollTop: Theigth
	}, 'slow');
}
$('.review .handle li').hover(function() {
	$(this).addClass('active').siblings().removeClass('active');
	$('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});
$(".payments p a").hover(function() {
	$(".payments p span").fadeIn(300);
}).mouseleave(function() {
	$(".payments p span").fadeOut(300);
});
var packs=98;
/*getUrlParam*/
(function($) {
	$.getUrlParam = function(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return unescape(r[2]);
		return '';
	}
})(jQuery);


$(".banner .message li").click(function() {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");

    $(".banner .buybtn").attr("href",$(this).attr("data-url"));
	  $(".banner .buybtn").attr("onclick",$(this).attr("data-ga"));
	  $(".banner .message dl dd p:eq(0)").html("IObit Malware Fighter 8 PRO (1 Year / 3 PCs) <del>$54.95</del>")
	 
    if(num==0) {
    	$(".banner .left-img,.banner .message ul").removeClass("three-box").removeClass("one-box")
    	$(".banner .message dl dd p:eq(1),.banner .message dl dd p:eq(2)").removeClass("leave")
    	$(".banner .price del").html("$94.93")
    	$(".banner .price strong").html("$<b>25</b>.99")
      $(".banner .left-img h2").html("Valuable Bundle Pack")
    }
    else if(num==1){
    	$(".banner .left-img,.banner .message ul").removeClass("three-box").addClass("one-box");
    	$(".banner .message dl dd p:eq(1),.banner .message dl dd p:eq(2)").addClass("leave")
    	 $(".banner .price del").html("$39.95")
    	 $(".banner .price strong").html("$<b>19</b>.95")
    	$(".banner .message dl dd p:eq(0)").html("IObit Malware Fighter 8 PRO (1 Year / 1 PC) <del>$39.95</del>")
      $(".banner .left-img h2").html("Single Solution")
    }
    else {
    	$(".banner .left-img,.banner .message ul").addClass("three-box").removeClass("one-box")
    	$(".banner .price del").html("$54.95")
    	$(".banner .price strong").html("$<b>23</b>.99")
    	$(".banner .message dl dd p:eq(1),.banner .message dl dd p:eq(2)").addClass("leave")
      $(".banner .left-img h2").html("Family Protection Pack ")
    }

    $(".banner .off").addClass("animateflipInX");
    $(".banner .maskbox").addClass("maskboxanimate");
    setTimeout('$(".banner .off").removeClass("animateflipInX"); $(".banner .maskbox").removeClass("maskboxanimate");', 500);
});

function getPacksNum(){
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "newinstallb.php",
    data: "action=getPacks&d="+date.getDate()+"&r="+Math.random(),
    success: function(res){
      var packsInfo=JSON.parse(res);
      if(packs!=packsInfo['packsNum']){
        //bynum = 680+50-parseInt(packsInfo['packsNum']);
        //$('#bynum').html('8,007,'+bynum);
        packs=packsInfo['packsNum'];
        //showPacksNum(packs);
        flipNum(packs,2);
      }
      var viewNum=packsInfo['viewNum'];
      $('.packsNum').html(packs);
      if(packs<5) {
        $('.viewNum').html(viewNum);
      }
    }
  });
  setTimeout('getPacksNum()', 15000);
}

$(function(){
  packsInit();
});
function packsInit(){
  getPacksNum();
  //var packs=50;
  flipNum(packs,2);
  //$('.packsNum').html(packs);
  //setTimeout('getPacksNum()', 1000);
}

