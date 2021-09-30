var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 3);
}
$(function() {
  countdown((".countdown strong"));
  //userreview
  $(".users li").mouseover(function(event) {
    var num = $(this).index();
    $(".users li").eq(num).addClass('active').siblings().removeClass('active');
    $(".user-rev .content > dl").eq(num).addClass('active').siblings().removeClass('active');
  });
  //bottombuy
  $(".bottombuy").on("mouseover","li",function () {
    var message = {
      index: $(this).index(),
      url: $(this).attr("data-url"),
      ga: $(this).attr("data-ga"),
      price: $(this).attr("data-price"),
      del: $(this).attr("data-del")
    };
    $(this).addClass("active").siblings().removeClass("active");
    $(".bottombuy .box img").stop().animate({"marginLeft": message.index*(-335)}, 400);
    $(".bottombuy .price strong").text(message.price);
    $(".bottombuy .price del").text(message.del);
    $(".bottombuy .buybtn").attr("href", message.url).attr("onclick", message.ga);
  });
  statusInit();
});

function popInit(){
  if(!isInit){
    packsInit();
    $(document).unbind('mousemove', mouseOut);
    var popCName='svdbmar_s';
    cSet(popCName, 1);
    //showPop();
    isInit=1;
  }
}

function showPop() {
    $(".pop").removeClass("mini").fadeIn(100);
    $(".pop-small").removeClass("on");
}
function closePop() {
  $(".pop").fadeOut(100);
}
function miniPop() {
  $(".pop").addClass("mini").fadeOut(500);
  setTimeout(function () {
    $(".pop-small").addClass("on");
  }, 500);
}
function foucus() {
  $(".count").append("<span class='reduce'>-1</span>");
  setTimeout('$(".count .reduce").remove()',1000);
}

function cSet(name,value) {
  var Days=2;
  var exp = new Date();
  name=name+exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var exp = new Date();
  name=name+exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function statusInit(){
  var popCName='svdbmar_s';
  var popShow=cGet(popCName);
  isInit=0;
  if(popShow==null){
    $(document).bind('mousemove', mouseOut);
    setTimeout('popInit()',10000);
  }else if(popShow==1){
    popInit()
  }
}

function packsInit(){
  var cName = "svdbmar_p";
  packs=cGet(cName);
  if (packs == null) {
    packs=39;
  }
  $('.packsNum').html(packs);
  setTimeout('getPacks()',getReTime());
}

function getPacks(){
  var date=new Date();
  $.ajax({
    type:'GET',
    url:'mar5pcsv.php',
    data:'action=getSales&d='+date.getDate(),
    success:function(sPacks){
      if(!isNaN(sPacks)){
        if(sPacks!=packs) {
          packs=sPacks;
          $('.packsNum').html(packs);
          foucus();
        }
      }
    }
  });
  setTimeout('getPacks()',getReTime());
}

function getReTime(){
  var reTime=15;
  if(packs>35){
    reTime=4;
  }
  return reTime*1000;
}

function mouseOut(e) {
  if (e.clientY < 3) {
    popInit();
  }
}