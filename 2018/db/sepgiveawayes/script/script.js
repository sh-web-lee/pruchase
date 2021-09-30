$(function () {
  if(autoUpdate==0){
    $('.feature-part1').addClass('point2');
  }
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $(".arrow").addClass("on");
      $("ul.details li span i").addClass("on");
    }

    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $(".float").addClass("on");
      setNum(driversCount,3);
    }else {
      $(".float").removeClass("on");
      setNum(0,3);
    }

    if ($(window).scrollTop() > $(".feature-part2").offset().top) {
      $(".feature-part3 .content dl").addClass("on");
    }

    $('#dg-container').gallery();
  });
});

function setNum(num,length){
  num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  for (var i = 0; i <= (len-1); i++) {
    var curNum = str.substring(i, i + 1);
    var marTop=-(36*curNum);
    $('.numbers i').eq(i).css('margin-top',marTop+'px');
  }
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

