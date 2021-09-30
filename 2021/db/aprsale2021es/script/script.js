$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};
// var packs=50;
// function getPacksNum(){
//   var date = new Date();
//   $.ajax({
//     type: "GET",
//     url: "aprsale2021es.php",
//     data: "action=getPacks&d="+date.getDate()+"&r="+Math.random(),
//     success: function(res){
//       var packsInfo=JSON.parse(res);
//       if(packs!=packsInfo['packsNum']){
//         //bynum = 680+50-parseInt(packsInfo['packsNum']);
//         //$('#bynum').html('8,007,'+bynum);
//         packs=packsInfo['packsNum'];
//         //showPacksNum(packs);
//         flipNum(packs,2);
//       }
//       var viewNum=packsInfo['viewNum'];
//       $('.packsNum').html(packs);
//       if(packs<5) {
//         $('.viewNum').html(viewNum);
//       }
//     }
//   });
//   if(packs>45){
//     setTimeout('getPacksNum()', 5000);
//   }else{
//     setTimeout('getPacksNum()', 15000);
//   }
// }

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

function packsInit(){
  packs = cGet('2021aprsale');
  if(packs == null){
    packs = 50;
  }else {
    packs--;
    if(packs <= 3)
      packs = 3;
  }
  if(packs < 10){
    packs = '0'+packs;
  }
  $('.banner_price span').html(packs);
  $('.bottom-buy .bottom-shadow span').html(packs);
}
function getSales(){
  var date = new Date();
  packsInit();
  // $('.banner_price span').html(packs);
  // $('.bottom-buy .bottom-shadow span').html(packs);
  cSet('2021aprsale',packs);
  if(packs >= 40) setTimeout('getSales()',6000);
  if(packs < 40 && packs >= 20) setTimeout('getSales()',20000);
  if(packs < 20) setTimeout('getSales()',7000);
}



$(function(){
  packsInit();
  setTimeout('getSales()',3000);
  //float
  $(window).scrollWindow($(".comparison-area"),$('.bottom-buy'),("on"));
  
  $(".reviews .img-box li").hover(function() {
    var num =$(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".reviews .message li").eq(num).addClass("active").siblings().removeClass("active");
  });
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
// function packsInit(){
//   getPacksNum();
//   //var packs=50;
//   flipNum(packs,2);
//   //$('.packsNum').html(packs);
//   //setTimeout('getPacksNum()', 1000);
// }

