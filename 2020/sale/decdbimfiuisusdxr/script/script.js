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
  discount = [{
    price: 22119,
    choiceName: 'dbiuimfisusd',
    prcductName: 'dbimfiuisusd2458',
  }, {
    price: 18520,
    choiceName: 'dbiuimfisu',
    prcductName: 'dbimfiuisu2058',
  }, {
    price: 19150,
    choiceName: 'dbiuimfsd',
    prcductName: 'dbimfiusd2128',
  }, {
    price: 18250,
    choiceName: 'dbimfisusd',
    prcductName: 'dbimfisusd2028',
  }, {
    price: 17174,
    choiceName: 'dbiuisusd',
    prcductName: 'dbiuisusd1908',
  }, {
    price: 15383,
    choiceName: 'iuimfisusd',
    prcductName: 'imfiuisusd1709',
  }, {
    price: 13823,
    choiceName: 'dbiuimf',
    prcductName: 'dbimfiu3456',
  }, {
    price: 13023,
    choiceName: 'dbimfisu',
    prcductName: 'dbimfisu3256',
  }, {
    price: 13584,
    choiceName: 'dbimfsd',
    prcductName: 'dbimfsd3395',
  }, {
    price: 12066,
    choiceName: 'dbiuisu',
    prcductName: 'dbiuisu3017',
  }, {
    price: 12627,
    choiceName: 'dbiusd',
    prcductName: 'dbiusd3156',
  }, {
    price: 11827,
    choiceName: 'dbisusd',
    prcductName: 'dbisusd2956',
  }, {
    price: 10474,
    choiceName: 'iuimfisu',
    prcductName: 'imfiuisu2619',
  }, {
    price: 11035,
    choiceName: 'iuimfsd',
    prcductName: 'imfiusd2758',
  }, {
    price: 10235,
    choiceName: 'imfisusd',
    prcductName: 'imfisusd2558',
  }, {
    price: 9278,
    choiceName: 'iuisusd',
    prcductName: 'iuisusd2319',
  }, {
    price: 10384,
    choiceName: 'dbimf',
    prcductName: 'dbimf2596',
  }, {
    price: 9427,
    choiceName: 'dbiu',
    prcductName: 'dbiu2357',
  }, {
    price: 8627,
    choiceName: 'dbisu',
    prcductName: 'dbisu2157',
  }, {
    price: 9188,
    choiceName: 'dbsd',
    prcductName: 'dbsd3pc2296',
  }, {
    price: 7835,
    choiceName: 'iuimf',
    prcductName: 'imfiu1959',
  }, {
    price: 7035,
    choiceName: 'imfisu',
    prcductName: 'imfisu1759',
  }, {
    price: 7595,
    choiceName: 'imfsd',
    prcductName: 'imfsd3pc1899',
  }, {
    price: 6079,
    choiceName: 'iuisu',
    prcductName: 'iuisu1519',
  }, {
    price: 6639,
    choiceName: 'iusd',
    prcductName: 'iusd3pc1659',
  }, {
    price: 5839,
    choiceName: 'isusd',
    prcductName: 'isusd3pc1459',
  }, {
    price: 5490,
    choiceName: 'db',
    prcductName: 'db3pc1995',
  }, {
    price: 3796,
    choiceName: 'imf',
    prcductName: 'imf3pc1699',
  }, {
    price: 3002,
    choiceName: 'iu',
    prcductName: 'iu3pc1297',
  }, {
    price: 2300,
    choiceName: 'isu',
    prcductName: 'isu3pc999',
  }, {
    price: 2800,
    choiceName: 'sd',
    prcductName: 'sd3pc1199',
  }];

// console.log(discount.length);

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

  var _choiceLen = discount.length;

  while (_choiceLen--) {
    if (discount[_choiceLen].choiceName == totalnum) {
      _productNameString = discount[_choiceLen].prcductName;
      _discount = parseInt(discount[_choiceLen].price);

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
      "onclick": "ga('send', 'event', '" + totalnum + "buy', 'buy', '5bundlepurchasexr-dbimfiuisusd');",
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