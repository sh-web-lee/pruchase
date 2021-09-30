//goTarget
function goTarget(target, yoffset) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({
    scrollTop: Theigth
  }, 'slow');
}

var bannerHeight = $('.banner').height();
var bannerPurchaseBtnTop = $('#bannerPurchaseBtn').offset().top;
var bannerPurchaseBtnHeight = $('#bannerPurchaseBtn').height();
console.log(bannerPurchaseBtnTop,bannerPurchaseBtnHeight);
var saleexclu = 0;
$('#goTop').click(function() {
  $('html,body').animate({ scrollTop: 0 }, 500);
})
function fixedTop(scrollTop) {  
  if (scrollTop > bannerPurchaseBtnTop + bannerPurchaseBtnHeight) {
    $('#goTop').addClass('on');
  } else {
    $('#goTop').removeClass('on');
  }
}
fixedTop($(window).scrollTop());
$(window).on('scroll', function() {
  fixedTop($(window).scrollTop())
});


$('.review .next').click(function(event) {
  $('.review .roll').stop(true, true).animate({
    marginLeft: -820
  }, 'slow', function() {
    $('.review .roll').css('marginLeft', '0');
    $('.review .roll').find('dl:first').appendTo($('.review .roll'));
  });
});
$('.review .prev').click(function(event) {
  $('.review .roll').find('dl:last').prependTo($('.review .roll'));
  $('.review .roll').css('marginLeft', -820);
  $('.review .roll').stop(true, true).animate({
    marginLeft: 0
  }, 'slow');
});

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
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

var tw = MApp(2.2).datetime.getTimeZone();

var _productNameString,
  _discount = 0,
  _bundleName = [],
  _productName = [
    'ascdbimfiusd2628',
    'ascdbimfiu2228',
    'ascdbimfsd2198',
    'ascdbiusd2078',
    'ascimfiusd1879',
    'dbimfiusd2128',
    'ascdbimf3596',
    'ascdbiu3292',
    'ascdbsd3296',
    'ascimfiu2996',
    'ascimfsd2898',
    'asciusd2659',
    'dbimfiu3456',
    'dbimfsd3395',
    'dbiusd3156',
    'imfiusd2758',
    'ascdb2497',
    'ascimf2099',
    'asciu1859',
    'ascsd3pc1799',
    'dbimf2596',
    'dbiu2357',
    'dbsd3pc2296',
    'imfiu1959',
    'imfsd3pc1899',
    'iusd3pc1659',
    'asc3pc1477',
    'db3pc1995',
    'imf3pc1699',
    'iu3pc1297',
    'sd3pc1199',
  ],
  discount = [
    23649,
    20050,
    19780,
    18704,
    16913,
    19150,
    14383,
    13491,
    13187,
    11797,
    11595,
    10638,
    13823,
    13584,
    12627,
    11035,
    9987,
    8395,
    7439,
    7199,
    10384,
    9427,
    9188,
    7835,
    7595,
    6639,
    3522,
    5490,
    3796,
    3002,
    2800,
  ],
  _choiceName = [
    'ascdbiuimfsd',
    'ascdbiuimf',
    'ascdbimfsd',
    'ascdbiusd',
    'asciuimfsd',
    'dbiuimfsd',
    'ascdbimf',
    'ascdbiu',
    'ascdbsd',
    'asciuimf',
    'ascimfsd',
    'asciusd',
    'dbiuimf',
    'dbimfsd',
    'dbiusd',
    'iuimfsd',
    'ascdb',
    'ascimf',
    'asciu',
    'ascsd',
    'dbimf',
    'dbiu',
    'dbsd',
    'iuimf',
    'imfsd',
    'iusd',
    'asc',
    'db',
    'imf',
    'iu',
    'sd',
  ];

// console.log(_choiceName.length);

function buycheck() {
  var arrid = new Array(),
    arrprice = new Array(),
    _newdiscountOff;
  $(".saleselbox li.checked").each(function() {
    var dataid = $(this).attr("data-id");
    var dataprice = $(this).attr("data-price");
    arrid.push(dataid);
    arrprice.push(dataprice);
  });
  var arrleng = arrid.length;
  var totalnum = arrid.join('');

  var totalprice = 0;

  for (var i = 0; i < arrprice.length; i++) {
    totalprice += parseInt(arrprice[i]);
  }

  var newstring = totalprice.toString();

  var _newone = newstring.substring(0, newstring.length - 2);

  var _newtwo = newstring.substring(newstring.length - 2, newstring.length);

  var _newstring = _newone + '.' + _newtwo;

  var _choiceLen = _choiceName.length;
  while (_choiceLen--) {
    if (_choiceName[_choiceLen] == totalnum) {
      _productNameString = _productName[_choiceLen];
      _discount = parseInt(discount[_choiceLen]);

      var _discountOffOne = _discount.toString().substring(0, _discount.toString().length - 2);

      var _discountOffTwo = _discount.toString().substring(_discount.toString().length - 2, _discount.toString().length);

      _newdiscountOff = _discountOffOne + '.' + _discountOffTwo;
    }
  }

  var newdiscount = Math.abs((totalprice - _discount)).toString();

  var _newdiscountone = newdiscount.substring(0, newdiscount.length - 2);

  var _newdiscounttwo = newdiscount.substring(newdiscount.length - 2, newdiscount.length);

  var _newdiscount = _newdiscountone + '.' + _newdiscounttwo;

  if (totalnum == "" || totalnum.length <= 0) {
    $(".orprice,.quatynum,.salernum,.salertotal").text("0");
    $(".saleseorder .buybtn").attr({
      "href": 'javascript: void(0);',
      "onclick": "",
    });
  } else {
    $(".orprice").text(_newstring);
    $(".quatynum").text(arrleng);
    $(".salernum").text(_newdiscountOff);
    $(".salertotal").text(_newdiscount);
    $(".saleseorder .buybtn").attr({
      "href": 'https://www.iobit.com/buy.php?product=2020' + _productNameString + '&ref=xr_' + totalnum + refStr + '&refs=purchase_5bundlexr&tw=' + tw,
      "onclick": "ga('send', 'event', '" + totalnum + "buy', 'buy', '5bundlepurchasexr-ascdbimfiusd');",
    });
  }

  if (arrleng == 1) {
    $(".saleratio").text("70");
  } else if (arrleng == 2 || arrleng == 3) {
    $(".saleratio").text("80");
  } else if (arrleng > 3) {
    $(".saleratio").text("90");
  } else if (arrleng <= 0) {
    $(".saleratio").text("0");
  }
}

$(".saleselbox li").click(function() {
  var idx = $(this).index();
  $(this).toggleClass("checked");
  $(".salesepro-cont li").eq(idx).toggleClass("checked");
  buycheck();
});
$(".salesepro-cont li .salesepro-name").click(function() {
  var idx = $(this).parent("li").index();
  $(this).parent("li").toggleClass("checked");
  $(".saleselbox li").eq(idx).toggleClass("checked");
  buycheck();
});