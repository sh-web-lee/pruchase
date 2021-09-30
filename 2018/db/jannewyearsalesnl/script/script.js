$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};
function flipNum(num,length) {
  var num = PrefixInteger(num, length)
  var len = String(num).length;
  var str = num.toString();
  for(var i = 0; i <= len; i++){
    var  curNum = str.substring(i, i + 1);          
      $(".banner .scroll-tick").eq(i).animate({
        marginTop: - curNum * 27,
      },"slow");
      $(".footbuy .scroll-tick").eq(i).animate({
        marginTop: - curNum * 27,
      },"slow");
  }
}
function pack(number,nomal) {
  $('.price dd strong').prop('number', nomal).animateNumber(
  {
    number: number
  },
  1000
  );
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

$(function() {
  $(".giveway a").target($(".banner"),0);
  flipNum(packsNum,2);
  pack(buyNum,2000);
  setTimeout('getPacksNum()', 20000);
  setTimeout('getBuyNum()', 20000);
});

function getPacksNum(){
  $.ajax({
    type: "GET",
    url: "../../callback.php",
    data: "action=getPacksNum&packsCount="+packsCount+"&r="+Math.random()+"&reTime="+reTime,
    success: function(packs){
      flipNum(parseInt(packs),2);
      setTimeout('getPacksNum()', 20000);
    }
  });
}

function getBuyNum(){
  $.ajax({
    type: "GET",
    url: "../../callback.php",
    data: "action=getBuyNum&reduceNum="+reduceNum+"&reTime=&r="+Math.random(),
    success: function(packs){
      $('.buyNum').html(packs);
      setTimeout('getBuyNum()', 20000);
    }
  });
}