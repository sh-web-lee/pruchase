$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};

var packs=50;
$(function () {
  //goto comparison-table
  $("a.intro").target($(".comparison-table"));

  //benefits
  $(".benefits .detail-list dl").hover(function() {
    $(this).addClass("active").siblings().removeClass("active");
    $(".benefits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benefits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  });
  $(".reviews .img-box li").hover(function() {
    var num =$(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".reviews .message li").eq(num).addClass("active").siblings().removeClass("active");
  });
  $(".bottom-buy ul li").click(function() {
    var num =$(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".bottom-buy .buybtn").attr("href", $(".banner .box").eq(num).find(".buybtn").attr("href"));
    $(".bottom-buy .buybtn").attr("onclick", $(".banner .box").eq(num).find(".buybtn").attr("onclick"));
    $(".bottom-buy dl del").html($(".banner .box").eq(num).find("del").text())
     if(num==0) {
      $(".bottom-buy .left-img").removeClass("three-box").addClass("one-box");
      $(".bottom-buy dl dt").html("<strong>17<b>,</b><span><span>99</span>€</span></strong><del>35,98€  </del> ")
    }
    else if(num==1) {
      $(".bottom-buy .left-img").removeClass("one-box").removeClass("three-box");
      $(".bottom-buy dl dt").html(" <strong>19<b>,</b><span><span>99</span>€</span></strong><del>144,79€  </del>")
    }
    else {
      $(".bottom-buy .left-img").addClass("three-box").removeClass("one-box");
      $(".bottom-buy dl dt").html("<strong>19<b>,</b><span><span>99</span>€</span></strong><del>74,85€  </del> ")
    }
  });
});

// progressbar
function focus() {
   $(".raduem").css({ "opacity": 1, "top": -100, "zIndex": 8}).animate({ "opacity": 0, "top": -130, "zIndex": -9}, 800);
   $(".raduemnum").css({ "opacity": 1, "top": 13, "zIndex": 8}).animate({ "opacity": 0, "top": -60, "zIndex": 0}, 800);
   $(".raduemtab").css({ "opacity": 1, "top": 14, "zIndex": 8}).animate({ "opacity": 0, "top": 22, "zIndex": 0}, 800);
}

function getPacksNum(){
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "index.php",
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
  if(packs>45){
    setTimeout('getPacksNum()', 5000);
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
  var wid = num * 6.8;
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".surplus b").html(list);
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".surplus b").eq(i).animate({
      marginTop: -curNum * 24,
    }, "slow");
  }
  focus();

}
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}
function packsInit(){
  getPacksNum();
  //var packs=50;
  flipNum(packs,2);
  //$('.packsNum').html(packs);
  //setTimeout('getPacksNum()', 1000);
}

