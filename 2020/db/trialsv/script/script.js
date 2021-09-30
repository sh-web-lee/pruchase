$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .scroll-tick").html(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".banner .scroll-tick").eq(a).animate({
      marginTop: -(9 - curNum) * 50,
    }, "slow");
  }
}

function zoomout() {
  $(".banner .pop").addClass("zoomout");
  setTimeout(function() {
    $(".banner .pop").removeClass("zoomout");
  }, 800);
}

var className = ["one", "two", "three", "four"];
var index = 1;
var nextFun = function() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if (index < 3) {
    index++;
    review(index);
  } else {
    index = 0;
    review(index);
  }
};

var prevFun = function() {
  var addName = className.shift();
  className.push(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if (index > 0) {
    index--;
    review(index);
  } else {
    index = 3;
    review(index);
  }

};

var review = function(index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};


$(function() {
  $(window).scrollWindow($(".banner .title"), $('.feature .content dl'), ("on"));
  $(window).scrollWindow($(".feature"), $('.floatlayer'), ("on"));
  packsInit();
});

// progressbar
function focus() {
  $('.progressbar > span').append('<span class="reduce"></span>');
  var tReduce = new TimelineLite();
  tReduce.to('.reduce', 1.5, {
    y: -100,
    autoAlpha: 0,
    onComplete: function() {
      $('.reduce').remove();
    }
  });
  if(packs<90){
    $(".db-reduce").css({ "opacity": 1, "bottom": 0, "zIndex": 8}).animate({ "opacity": 0, "bottom": 40, "zIndex": -9}, 1500);
  }else{
    $(".db-reduce").css({ "opacity": 1, "bottom": 0, "zIndex": 8}).animate({ "opacity": 0, "bottom": 40, "zIndex": -9}, 700);
  }
}
function flipNum(num) {
  var number =num*0.86;
  $(".progressbar > span").css("width",number);
  setTimeout(function () {
    focus();
  }, 500);
  $(".packsNum").html(num);
}

function getPacksNum(){
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "trial.php",
    data: "action=getPacks&d="+date.getDate()+"&r="+Math.random(),
    success: function(res){
      var packsInfo=JSON.parse(res);
      if(packs!=packsInfo['packsNum']){
        packs=packsInfo['packsNum'];
        showPacksNum(packs);
        flipNum(packs);
      }
      var viewNum=packsInfo['viewNum'];
      $('.packsNum').html(packs);
      $('.viewNum').html(viewNum);
    }
  });
  if(packs>94){
    setTimeout('getPacksNum()', 6000);
  }else{
    setTimeout('getPacksNum()', 20000);
  }
}

function showPacksNum(packs) {
  var one = Math.floor(packs/100);
  var two = Math.floor(packs/10) - one*10;
  var three = Math.floor(packs) - one*100 - two*10;
  $("p.surplus b").eq(0).html(one).end().eq(1).html(two).end().eq(2).html(three);
}

function packsInit(){
  var date = new Date();
  var cName = "svdbjul" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs=99;
  } else {
    packs=arr[2];
  }
  showPacksNum(packs);
  var number =packs*0.86;
  $(".progressbar > span").css("width",number);
  $('.packsNum').html(packs);
  if(packs>94){
    setTimeout('getPacksNum()', 6000);
  }else{
    setTimeout('getPacksNum()', 20000);
  }
}

$(function(){
  if(transData.length!==0){
    driverSet();
    compSet();
  }
  bannerSet();
});

//add trialOver by 2020-07-22
function trialOver() {
  $(".comparison .exTxt").text("Utgånget");
  $(".comparison .changed.itemc").html("<i class='all-icons red'>√</i>");
}

function bannerSet() {
  var driverCount = parseInt(transData.LftDrvCount) + parseInt(transData.LftCmpCount);
  var paramTo = MApp(2.2).url.getParameters('to');
  var paragraph1 = "";
  var paragraph2 = "";
  var status=0;
  var leftDays = transData.LftTrlDay;
  switch (paramTo) {
    case "trialbuy_7":
    case "trialbuy_2":
      paragraph1 = "<b class='nums'>"+driverCount + "</b> drivrutiner är tillgängliga för uppdatering";
      paragraph2 = "Köp nu för att uppdatera alla med ett klick ";
      status=1;
      break;
    case "trialbuy_3":
      break;
    case "trialbuy_9":
    case "trialbuy_4":
      trialOver();
      paragraph1 = "Din provperiod för din Driver Booster är slut!";
      if (driverCount > 0) {
        paragraph2 = driverCount + " föråldrade drivrutiner. Köp nu för att uppdatera med 1 klick";
      }else {
        paragraph2 = "Köp nu för att hålla dina drivrutiner uppdaterade";
      }
      break;
    case "trialbuy_8":
    case "trialbuy_10":
      paragraph1="Din provperiod slutar om <span class='days'>7</span> dagar!";
      paragraph2="Missa inte erbjudandet endast för provanvändare";
      break;
    default:
      break;
  }
  if ((paragraph1 + paragraph2).length > 0) {
    titleSet(paragraph1, paragraph2,status);
  }

  $(".days").html(leftDays);
  if(leftDays==0){
    if(paramTo=='trialbuy_10') {
      $(".title p").html("Din provperiod slutar på mindre än 24 timmar!");
    }
    $(".comparison tbody tr:eq(1),.comparison tbody tr:eq(2),.comparison tbody tr:eq(3),.comparison tbody tr:eq(4)").find(".itema").html("Slutar om 24 timmar");
  }
}

function titleSet(paragraph1, paragraph2, status) {
  if(status==1){
    $(".title").html("<h1>" + paragraph1 + "</h1> <p>" + paragraph2 + "</p>");
  }else {
    $(".title").html("<p>" + paragraph1 + "</p> <h1>" + paragraph2 + "</h1>");
  }
}

function driverSet(){
  var drvCount = parseInt(transData.LftDrvCount);
  var cmpCount = parseInt(transData.LftCmpCount);
  var totalNum=drvCount+cmpCount;
  if(totalNum>0){
    $(".feature .driverCount").html(totalNum);
    if((drvCount>0)&&(cmpCount>0)){
      $(".feature .original").css({"display": "none"});
      $(".feature .update").css({"display": "block"});

      $(".feature .update h3 strong").text(totalNum);
      $(".feature .update .driveNum").text(drvCount);
      $(".feature .update .gameNum").text(cmpCount);
    }else{
      if(totalNum==1){
        $(".feature").find(".driverStr").html("driver");
      }
    }
  }
}
function compSet(){
  var leftDays=parseInt(transData.LftTrlDay);
  var paramTo = MApp(2.2).url.getParameters('to');
  if(leftDays>0){
    $(".comparison .exTxt").text("Slutar om "+leftDays+" dagar");
    if((paramTo=='trialbuy_2')||(paramTo=='trialbuy_7')){
      $(".comparison .changed.itemc").html("Obegränsat");
      $(".comparison .exTxt.first").text("2 om dagen");
    }else{
      $(".comparison .changed.itemc").html("<i class='all-icons red'>√</i>");
    }
  }else{
    $(".comparison .exTxt").text("Utgånget");
    $(".comparison .changed.itemc").html("<i class='all-icons red'>√</i>");
  }
}
