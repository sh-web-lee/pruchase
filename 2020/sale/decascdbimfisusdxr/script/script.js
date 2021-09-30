//goTarget
function goTarget(target, yoffset) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({
    scrollTop: Theigth
  }, 'slow');
}

var saleexclu = $(".saleexclu-cont").offset().top;
$(window).on('scroll', function() {
  if ($(window).scrollTop() > 500) {
    $('.floatlayer').addClass('on');
  } else {
    $('.floatlayer').removeClass('on');
  }

  if ($(window).scrollTop() > saleexclu) {
    $(".saleexclu-cont").addClass("fixed");
  } else {
    $(".saleexclu-cont").removeClass("fixed");
  }

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
    'ascdbimfisusd2528',
    'ascdbimfisu2128',
    'ascdbimfsd2198',
    'ascdbisusd1978',
    'ascimfisusd1779',
    'dbimfisusd2028',
    'ascdbimf3596',
    'ascdbisu3157',
    'ascdbsd3296',
    'ascimfisu2698',
    'ascimfsd2898',
    'ascisusd2459',
    'dbimfisu3256',
    'dbimfsd3395',
    'dbisusd2956',
    'imfisusd2558',
    'ascdb2497',
    'ascimf2099',
    'ascisu1659',
    'ascsd3pc1799',
    'dbimf2596',
    'dbisu2157',
    'dbsd3pc2296',
    'imfisu1759',
    'imfsd3pc1899',
    'isusd3pc1459',
    'asc3pc1477',
    'db3pc1995',
    'imf3pc1699',
    'isu3pc999',
    'sd3pc1199',
  ],
  discount = [
    22749,
    19150,
    19780,
    17804,
    16013,
    18250,
    14383,
    12626,
    13187,
    11095,
    11595,
    9838,
    13023,
    13584,
    11827,
    10235,
    9987,
    8395,
    6639,
    7199,
    10384,
    8627,
    9188,
    7035,
    7595,
    5839,
    3522,
    5490,
    3796,
    2300,
    2800,
  ],
  _choiceName = [
    'ascdbimfisusd',
    'ascdbimfisu',
    'ascdbimfsd',
    'ascdbisusd',
    'ascimfisusd',
    'dbimfisusd',
    'ascdbimf',
    'ascdbisu',
    'ascdbsd',
    'ascimfisu',
    'ascimfsd',
    'ascisusd',
    'dbimfisu',
    'dbimfsd',
    'dbisusd',
    'imfisusd',
    'ascdb',
    'ascimf',
    'ascisu',
    'ascsd',
    'dbimf',
    'dbisu',
    'dbsd',
    'imfisu',
    'imfsd',
    'isusd',
    'asc',
    'db',
    'imf',
    'isu',
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
      "onclick": "ga('send', 'event', '" + totalnum + "buy', 'buy', '5bundlepurchasexr-ascdbimfisusd');",
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