function reduceNum(num) {
  $(".packsNum .reduce,.imgreduce").remove();
  $(".banner .imgbox").append('<div class="imgreduce"></div>');
  $(".packsNum span").text(num);
  $(".packsNum").append('<span class="reduce">' + num + '</span>');
  setTimeout('$(".imgreduce").addClass("on");', 300);
  setTimeout('$(".reduce").addClass("on");', 700);
}
// reduceNum(78);

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".soldout,sold-words,.giftbox,.imgreduce").remove();
  $(".awards").removeClass("sold").addClass("sold");
  $(".banner .gift").append('<div class="soldout"><span class="sold-words">SOLD OUT!</span></div>');
  setTimeout('$(".sold-words").addClass("on");', 300);
  $(".banner .buybtn").attr({
    "href": 'https://www.iobit.com/buy.php?product=asc1pc1677&ref=en-asc1pcsoldmar' + refStr + '&aff=' + aff + '&refs=purchase_asc&tw=' + tw,
    "onclick": "ga('send', 'event', 'asc1pcsoldbuy', 'buy', 'iupurchase-202003');"
  });
  $(".banner .bigoff .buybtn,.comparison .buybtn").attr({
    "href": 'https://www.iobit.com/buy.php?product=asc133pc1999&ref=en-asc3pcsoldmar' + refStr + '&aff=' + aff + '&refs=purchase_asc&tw=' + tw,
    "onclick": "ga('send', 'event', 'asc3pcsoldbuy', 'buy', 'ascpurchase-202003');"
  });
}
// soldOut();

$(function() {
  packsInit();
  $(".review ul li").hover(function() {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review .review-line").stop().animate({
      "marginLeft": index * 160
    }, 300);
    $(".review .review-list").eq(index).addClass("active").siblings().removeClass("active");
  });
});

function packsInit() {
  packs = cGet("enascmarsale_p");
  if (packs == null) {
    getSales(1);
  } else {
    reduceNum(packs);
    if (packs <= 0) {
      soldOut();
    } else {
      setTimeout('getSales(0)', 1000);
    }
  }
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "marsale.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        reduceNum(packs);
        if (packs <= 0) {
          soldOut();
        }
      }
      if (packs > 0) {
        setTimeout('getSales()', getReTime());
      }
    }
  });
}

function getReTime() {
  t1 = (Math.random() > 0.5) ? 3 : 5;
  t2 = (Math.random() > 0.5) ? 6 : 8;
  return reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
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

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}