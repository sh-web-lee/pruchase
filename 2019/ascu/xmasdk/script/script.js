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
  $("a.intro").target($(".comparison"));
 
  setTimeout(function () {
    $(".banner .right-box").addClass("on");
  }, 500);
  setTimeout(function () {
    $(".banner .left-box").addClass("on");
  }, 2000);
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
   $(".gift-box .raduem").css({ "opacity": 1, "top": 0, "zIndex": 8}).animate({ "opacity": 0, "top": -15, "zIndex": -9}, 800);
   $(".raduem-box").css({ "opacity": 1, "top": 182, "zIndex": 8}).animate({ "opacity": 0, "top": 122, "zIndex": -9}, 800);
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
        bynum = 680+50-parseInt(packsInfo['packsNum']);
        $('#bynum').html('8,007,'+bynum);
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
  var num = PrefixInteger(num, length)
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
      marginTop: -curNum * 21,
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
