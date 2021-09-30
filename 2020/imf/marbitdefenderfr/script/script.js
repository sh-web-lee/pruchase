//scrollWindow
$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};
//target
$.fn.target=function (target) {
  $(this).click(function() {
    var Theigth = target.offset().top;
    $("html, body").animate({scrollTop: Theigth}, '800');
  });
};

// flipNum
function flipNum(number, length) {
  var num = PrefixInteger(number, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".float .countdown .countdown-list").html(list);
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".float .countdown .countdown-list").eq(i).animate({
      marginTop: -curNum * 48,
    }, "slow");
  }
}
//PrefixInteger
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}
//reduce
function reduce() {
  $(".banner .packs .reduce").addClass("on");
  setTimeout(function () {
    $(".banner .packs .reduce").removeClass("on");
  }, 1000);
}
//thousand
function thousand(num) {
  num = num.toString().replace(/\d+/, function(n){
    return n.replace(/(\d)(?=(\d{3})+$)/g,function($1){
      return $1+" ";
    });
  });
  return num;
}

(function () {
  getViewNum();
  getPacksNum();
  //review
  $('#dg-container').gallery();
  //product2
  $(window).scrollWindow($(".product img"), $(".product2 dl"), ("on"));
  //feature
  $(window).scrollWindow($(".between-buy.between1"), $(".feature .left-message,.feature .imgbox"), ("on"));
  //float
  $(window).scrollWindow($(".between-buy.between2 .buybtn"), $(".float"), ("on"));
  //top
  $(window).scrollWindow($(".compare-tab"), $(".top"), ("on"));
  //
  $(".top").target($(".banner"));
}());


function getViewNum() {
  viewNum = parseInt(Math.random()*(125-115+1)+115,10);
  $('.viewNum').html(viewNum);
  setTimeout('getViewNum()', 25000);
}


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

function getPacksNum() {
  packs = cGet("marbitdefenderfr");
  if (packs == null) {
    packs = 103;
  } 
  packs--;
  buyNum = 423-packs;
  cSet('marbitdefenderfr',packs);
  if (packs > 3) {
    $('.packsNum').html(packs);
    flipNum(packs, 4);
    $('.buyNum').html('3 562 '+buyNum);
    reduce();
    setTimeout('getPacksNum()', 8000);
  }
}