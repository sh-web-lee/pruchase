
//var countdown = function (countdown){
//  getCycleCountdown();
//  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
//  setTimeout("countdown('"+ countdown +"')", 1);
//};
//function getCycleCountdown () {
//  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
//  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
//  d = MApp(2.2).packages.zeroize(datetime[0], 2);
//  h = MApp(2.2).packages.zeroize(datetime[1], 2);
//  i = MApp(2.2).packages.zeroize(datetime[2], 2);
//  s = MApp(2.2).packages.zeroize(datetime[3], 2);
//  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
//}

var num = true;

$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function goTarget(target, height) {
  var Theigth = target.offset().top + height;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}

// Float Function
var $float = $(".float");
var unfold = function () {
  if(statusCheck()==1) {
    $float.addClass('unfold');
    $float.find('.fold-message').hide(30, function () {
      $float.find('.unfold-message').fadeIn(10);
    });
  }
};
var fold = function () {
  if(statusCheck()==1) {
    $float.removeClass('unfold');
    $float.find('.unfold-message').hide(30, function () {
      $float.find('.fold-message').fadeIn(10);
    });
  }
};
var soldout = function () {
  $('.fold-message .countdown').remove();
  var statusCName='enaffbf_s';
  var statusNow=cGet(statusCName);
  if((statusNow!=2)&&(statusNow!=3)){
    cSet(statusCName,2);
  }
  $float.removeClass('unfold');
  $float.find('.unfold-message').hide(30, function () {
    $float.find('.fold-message').fadeIn();
  });
  $float.addClass('soldout');
  $float.find('.learnmore').attr('href','javascript: void(0);');
};

//coupon
var $coupon = $(".coupon");
var showCoupon = function (param) {
  // $(".float").css({"visibility": "hidden"});
  // switch (param) {
  //   case 'info': setTimeout('$(".info").show().siblings().hide();$coupon.fadeIn();',1000); break;
  //   case 'mail': $(".mail").show().siblings().hide(); $coupon.fadeIn();break;
  //   case 'gift':
  //     // $coupon.fadeIn();
  //     $(".mail").html("" +
  //     "<div class='content'>" +
  //     "<h2>Congrats!</h2>" +
  //     "<h4>The <b>FREE gift</b> pack has been sent to your mail box.</h4>" +
  //     "<em><small>* Please check your email and feel free to contact tickets@iobit.com <br> if you have any question.</small></em>" +
  //     "</div><a class='close' href='javascript: closeCoupon();'>×</a>").show().siblings().hide(); break;
  // }
};
var closeCoupon = function (isInit) {
  $(".float").css({"visibility": "visible"});
  if(isInit==1){
    _init();
  }
//  $coupon.fadeOut();
};

function cSet(name, value, withDate) {
  var Days = 1;
  var exp = new Date();
  if(withDate){
    name = name + exp.getDate();
  }
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name,withDate) {
  var exp = new Date();
  if(withDate){
    name = name + exp.getDate();
  }
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function timeInit() {
  var date = new Date();
  var cName = "enaffbf_t";
  var nowTime = Math.floor(date.getTime() / 1000);
  countTime=cGet(cName,1);
  if (cGet(cName,1) == null) {
    countTime = nowTime + 300;
    cSet(cName, countTime,1);
  }
}

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    var d = Math.floor(remainingTime / (24 * 60 * 60));
    var h = Math.floor(remainingTime / (60 * 60) % 24);
    var i = Math.floor(remainingTime / 60 % 60);
    var s = Math.floor(remainingTime % 60);
    var mi = 999 - dateObj.getMilliseconds();
    if (mi < 10) {
      mi = '00' + mi;
    } else if (mi < 100) {
      mi = '0' + mi;
    }
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

var countdown = function(countdown1, countdown2) {
  var statusNow = statusSet();
  getCycleCountdown(countTime);
  $(countdown1).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if (statusNow == 2) {
    cSet('2021sale','soldout');
    $('#countdown2').fadeOut()
    $('.float').removeClass('ac')
    $('.float—max-box').css('visibility','hidden').removeClass("on")
    $('.float').css('visibility','visible')
    wl = false
    window.localStorage.setItem('end','true')
    $('.coupon').hide()
    return
  }
  if(num==true) {
    setTimeout("countdown('" + countdown1 + "','" + countdown2 + "')",1);
  }
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$float.hasClass('soldout')) {
      soldout();
    }
  }
  return statusNow;
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < countTime) {
    return 1;
  } else {
    return 2;
  }
}


function sendGift() {
  var sendEmail = $('.email').val();
  if (sendEmail.length <= 0) {
    alert('Please enter your email address to claim your free gift pack.');
  } else if (!isEmail(sendEmail)) {
    alert('Incorrect E-mail format.');
  } else {
    var pid = MApp(2.2).url.getParameters('t');
    $('.mail form button').before("<p style='text-align: center;' id='mail-note'>Sending message.Please wait a moment.</p>");
    $('.emailbtn').attr('onclick', 'javascript:void(0)');
    $.ajax({
      url: 'requestDeal.php',
      type: 'GET',
      dataType: 'json',
      async: true,
      timeout: 10000,
      data: 'action=sendGift&sendEmail=' + sendEmail + '&pid=' + pid,
      success: function(res) {
        statistic(3,'mail send');
        if ((res.status == 1) || (res.status == 2)) {
          showCoupon('gift');
          //setTimeout('closeCoupon(0)',6000);
        } else if (res.errorMsg.length > 0) {
          alert(res.errorMsg);
        } else {
          alert('There is something wrong while sending email.Please try again later.');
        }
        $('#mail-note').remove();
        $('.emailbtn').attr('onclick', 'sendGift()');
      }
    });
  }
  return false;
}

function statistic(status,des){
  $.ajax({
    type: "GET",
    url:'index.php?action=statistic&status='+status+'&des='+des
  })
}

function _init(){
  timeInit();
  countdown("#countdown1 strong","#countdown2 strong");

  $(".fold-message").hover(function(){
    unfold();
  });
  $(".unfold-message").mouseleave(function(){
    fold();
  });

  $(document).on("click", function (e) {
    if($(e.target).closest('.float-content').length === 0) {
      fold();
    }
  });
}


$('.coupon').click(function(e){
  if(e.target.className.indexOf('playnow')>-1){
    return
  }
  if(e.target.className.indexOf('icon') > -1){
    allNum()
    // $('.coupon,.float—max-box,.float').remove();
    $('.coupon').hide();
    clearInterval(setInterval_t)
    clearTimeout(set)
    // z()
    // if(!$(".zj").is(":hidden") ) {
    //   $('.coupon,.float—max-box,.float').remove();
    // }
    // else {
    //   z();
    // }
    return
  }
  if(e.target.className.indexOf('zj_b') > -1){
    z()
    return
  }
})
var isz = false
function z(){
  wl = true
  $('.coupon').hide()
  clearInterval(setInterval_t)
  $('.float').css('visibility','visible')
  var cName='enaffbf_i';
  if(cGet(cName,1)==null){
    setTimeout(showCoupon('info'), 1000);
    cSet(cName,1,1);
    setTimeout('closeCoupon(1)',1000);
  }else{
    _init();
  }
}

function float_c(){
  if($('.float').hasClass('soldout')) return
  if(isMobile()){
    $(this).css('visibility','hidden')
    $('.float—max-box').css('visibility','visible').addClass("on")
  }
}
$('.float—max-box').click(function(){
  if(isMobile()){
    $(this).css('visibility','hidden').removeClass("on")
    $('.float').css('visibility','visible')
  }
})
function emailcheck(email) {
  if (email.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1){
    $('.email .bg').addClass('succ')
    $('.email .bg .cont').hide()
    $('.email .bg ._cont').show()
    $.ajax({
      type:'POST',
      url:'index.php',
      data:{'email':email},
    });
    setTimeout(function () {
      $(".email").css("display", "none");
    }, 10000)
  }else
    return alert("incorrect E-mail format");
}

$('.email .bg .cont button').click(()=>{
  cSet('2021sale','soldout');
  cSet('2021affsale','asd165132132');
  $('.float').css('visibility', 'hidden');
  var email = $("#email").val();
  if(email === ''){alert("Please enter your email address to claim your free gift pack.")}
  else emailcheck(email);
})

function keeppophidden(){
  var check = cGet('2021affsale');
  if(check != null){
    $('.float').css("display", "none");
  }
}

$('.email .bg i.hide').click(()=>{
  $('.email').hide()
})

function float_m(){
  if($('.float').hasClass('soldout')) return
  $('.float').css('visibility','hidden')
  $('.float—max-box').css('visibility','visible').addClass("on")
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "popup=keep",
    success: function (res) {
      // console.log(res);
    }
  });
}

$('.float—max').mouseleave(()=>{
  $('.float').css('visibility','visible')
  $('.float—max-box').css('visibility','hidden').removeClass("on")
})

$('.r-nav ul li').click(function(){
  $(this).addClass('ac').siblings().removeClass('ac')
  if(isMobile())$('.banner').css('padding-top','153px')
})
var domList = {
  Seventy:[
    {id:'asc',oneYear:{delac:'73',leftNum:'135',b:'$11.75',del:'$65.28',ga:"ga('send', 'event', 'ascbuy', 'buy', 'enaffasc142020ny1pc')",link:buyLinkAsc1pc},threeYear:{delac:'64',leftNum:'128',b:'$14.75',del:'$81.94',ga:"ga('send', 'event', 'ascbuy', 'buy', 'enaffasc142020ny3pc')",link:buyLinkAsc3pc},imgName:"./images/70-asc.png",title:"The World's 1st PC Tune-Up Utility",text:"Deep clean your PC with one-click & make your PC cleaner, faster and more secure."},
    {id:'db',oneYear:{delac:'58',leftNum :'119',b:'$14.95',del:'$83.06',ga:"ga('send', 'event', 'dbbuy', 'buy', 'enaffdb82020ny1pc') ",link:buyLinkDb1pc},threeYear:{delac:'73',leftNum:'116',b:'$17.95',del:'$99.72',ga:"ga('send', 'event', 'dbbuy', 'buy', 'enaffdb82020ny3pc')  ",link:buyLinkDb3pc},imgName:"./images/70-db.png",title:"Your Must-have Driver Updating Tool",text:"Automatically and safely keep over 4,500,000 drivers & popular game components up-to-date."},
    {id:'imf',oneYear:{delac:'133',leftNum :'353',b:'$13.95',del:'$77.50',ga:"ga('send', 'event', 'imfbuy', 'buy', 'enaffimf82020ny1pc') ",link:buyLinkImf1pc},threeYear:{delac:'118',leftNum:'314',b:'$16.95',del:'$94.17',ga:"ga('send', 'event', 'imfbuy', 'buy', 'enaffimf82020ny3pc') ",link:buyLinkImf3pc},imgName:"./images/70-up.png",title:"Stay Protected with Full-scale Antimalware ",text:"Triple engines to fully protect your PC against malware,virus & ransomware in real time."},
    {id:'mb',oneYear:{delac:'76',leftNum :'309',b:'$15.99',del:'$88.83',ga:"ga('send', 'event', 'mbbuy', 'buy', 'enaffmb82020ny1mac')",link:buyLinkMb1pc},threeYear:{delac:'76',leftNum:'316',b:'$27.99',del:'$155.50',ga:"ga('send', 'event', 'mbbuy', 'buy', 'enaffmb82020ny3mac')",link:buyLinkMb3pc},imgName:"./images/70-mb.png",title:"A Faster and more Secured Mac ",text:"Your one-stop Mac maintenance tool to clean up junks, boost Mac performance, and remove Mac malware & virus."},
    {id:'isu',oneYear:{delac:'92',leftNum :'235',b:'$6.99',del:'$38.83',ga:"ga('send', 'event', 'isubuy', 'buy', 'enaffisu32020ny1pc')",link:buyLinkIsu1pc},threeYear:{delac:'99',leftNum:'227',b:'$9.99',del:'$55.50',ga:"ga('send', 'event', 'isubuy', 'buy', 'enaffisu32020ny3pc')",link:buyLinkIsu3pc},imgName:"./images/70-isu.png",title:"Auto-Keep your Software Up-to-date",text:"Automatically update your software on schedule & download & install recommended essential software."},
    {id:'iu',oneYear:{delac:'106',leftNum :'213',b:'$9.99',del:'$55.50',ga:"ga('send', 'event', 'iubuy', 'buy', 'enaffiu102020ny1pc')",link:buyLinkIu1pc},threeYear:{delac:'95',leftNum:'206',b:'$12.97',del:'$72.06',ga:"ga('send', 'event', 'iubuy', 'buy', 'enaffiu102020ny3pc')",link:buyLinkIu3pc},imgName:"./images/70-iur.png",title:"Completely Remove Stubborn Programs",text:"Completely delete stubborn and bundled programs, Windows Apps & browser plug-ins without leaving a trace ."},
  ],
  seventyFive:[
    {oneYear:{b:'$19.28',del:'$148.33',ga:"ga('send', 'event', 'ascbuy', 'buy', 'enaffasc14db2020ny1pc')",link:buyLinkAscDb1pc},threeYear:{b:'$23.62',del:'$181.67',ga:"ga('send', 'event', 'ascbuy', 'buy', 'enaffasc14db2020ny3pc')",link:buyLinkAscDb3pc},imgName:"./images/asc-db.png",title:"Make your PC Faster and more Stable",text:"Includes:<br/> Advanced SystemCare PRO and <br/>Driver Booster PRO"},
    {oneYear:{b:'$15.70',del:'$120.78',ga:"ga('send', 'event', 'ascbuy', 'buy', 'enaffasc14iu2020ny1pc')",link:buyLinkAscIu1pc},threeYear:{b:'$20.02',del:'$154',ga:"ga('send', 'event', 'ascbuy', 'buy', 'enaffasc14iu2020ny3pc')",link:buyLinkAscIu3pc},imgName:"./images/asc-iu.png",title:"Keep your PC & Software in Top Condition",text:"Includes:<br/>Advanced SystemCare PRO and <br/>IObit Uninstaller PRO"},
    {oneYear:{b:'$20.87',del:'$160.56',ga:"ga('send', 'event', 'dbbuy', 'buy', 'enaffdb8imf2020ny1pc')",link:buyLinkDbImf1pc},threeYear:{b:'$25.21',del:'$193.89',ga:"ga('send', 'event', 'dbbuy', 'buy', 'enaffdb8imf2020ny3pc')",link:buyLinkDbImf3pc},imgName:"./images/db-imf.png",title:"Make your PC more Stable and Secure",text:"Includes:<br/>Driver Booster PRO and <br/>IObit Malware Fighter PRO"},
  ],
  Review:[
    {type:'Media Review',text:'"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."'},
    {type:'User Review',text:`"Advanced System Care is a great program. I have used this program for many years and it works great. They're always improving their products and just get better over the years. I use many of their products and they all work great."`},
    {type:'User Review',text:`"First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM, i was able to play new game titles without having to shutdown any background process. I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product."`},
    {type:'User Review',text:`"As a result of using several of the IObit computer software products & being very impressed with the innovation & results obtained with these products, I can recommend the IObit Malware Fighter product. IObit Malware Fighter runs quietly in the background with minimal user input required. I am confident that IObit Malware Fighter is able to monitor malware & prevent malware from reaching my computer. I recommend IObit Malware Fighter for all computer users."`},
    {type:'User Review',text:`"This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."`},
    {type:'User Review',text:`"I've used MacBooster on Mac OS X for several years and strongly recommend it. It's my all-in-one maintenance tool, keeping my machines constantly running like new."`},
    {type:'Media Review',text:'"IObit Software Updater was designed to simplify the task of keeping all the applications on your computer up-to-date. It can check for new versions and install them automatically, even without user input. Moreover, it can help you download and install popular applications for various purposes."'},
  ]
}
function initializeDom(){
  for(let i in domList.Seventy){
    let str = `<li id="${domList.Seventy[i].id}"><img class="" src="${domList.Seventy[i].imgName}" alt="" />
              <p class="title">${domList.Seventy[i].title}</p>
              <span class="text">${domList.Seventy[i].text}</span>
              <div class="buy-btn">
              <dl>
               
                  <dd class="onepc">
                    <h4>Only <b>${domList.Seventy[i].oneYear.b} </b> <del>${domList.Seventy[i].oneYear.del}</del></h4>
                    <a href="${domList.Seventy[i].oneYear.link}" onclick="${domList.Seventy[i].oneYear.ga}"><button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="12" viewBox="0 0 19 12"><path id="形状_26" data-name="形状 26" class="cls-1" d="M1271.26,941.422h-2.54l-4.48,6.883a0.811,0.811,0,0,1-.25.242,0.789,0.789,0,0,1-.52.194H1256a0.833,0.833,0,0,1,0-1.665h7.08l0.65-1h-9.09a0.832,0.832,0,0,1,0-1.664h10.06a0.718,0.718,0,0,1,.11.007l0.69-1.054h-11.62a0.833,0.833,0,0,1,0-1.665h12.71l0.99-1.525a0.841,0.841,0,0,1,.27-0.259,0.827,0.827,0,0,1,.49-0.164h2.92A0.833,0.833,0,0,1,1271.26,941.422Zm-13.54,7.986a1.175,1.175,0,1,1-1.15,1.174A1.157,1.157,0,0,1,1257.72,949.408Zm4.33,0a1.175,1.175,0,1,1-1.15,1.174A1.165,1.165,0,0,1,1262.05,949.408Z" transform="translate(-1253.06 -939.75)"/></svg><b>Buy Now</b> 1 year / 1 pc</button></a>
                    <p><i><del style="width:${domList.Seventy[i].oneYear.delac}px"></del></i><span> ${domList.Seventy[i].oneYear.leftNum} Left </span></p>
                  </dd>
                  <dd class="threepc">
                    <h4>Only <b>${domList.Seventy[i].threeYear.b} </b> <del>${domList.Seventy[i].threeYear.del}</del></h4>
                    <a href="${domList.Seventy[i].threeYear.link}" onclick="${domList.Seventy[i].threeYear.ga}"><button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="12" viewBox="0 0 19 12"><path id="形状_26" data-name="形状 26" class="cls-1" d="M1271.26,941.422h-2.54l-4.48,6.883a0.811,0.811,0,0,1-.25.242,0.789,0.789,0,0,1-.52.194H1256a0.833,0.833,0,0,1,0-1.665h7.08l0.65-1h-9.09a0.832,0.832,0,0,1,0-1.664h10.06a0.718,0.718,0,0,1,.11.007l0.69-1.054h-11.62a0.833,0.833,0,0,1,0-1.665h12.71l0.99-1.525a0.841,0.841,0,0,1,.27-0.259,0.827,0.827,0,0,1,.49-0.164h2.92A0.833,0.833,0,0,1,1271.26,941.422Zm-13.54,7.986a1.175,1.175,0,1,1-1.15,1.174A1.157,1.157,0,0,1,1257.72,949.408Zm4.33,0a1.175,1.175,0,1,1-1.15,1.174A1.165,1.165,0,0,1,1262.05,949.408Z" transform="translate(-1253.06 -939.75)"/></svg><b>Buy Now</b> 1 year / 3 pcs</button></a>
                    <p><i><del style="width:${domList.Seventy[i].threeYear.delac}px"></del></i><span> ${domList.Seventy[i].threeYear.leftNum} Left </span></p>
                  </dd>
              </dl>
            </div></li>`
    $('#offer70').append(str)
  }

  for(let i in domList.seventyFive){
    let str = `<li><img class="" src="${domList.seventyFive[i].imgName}" alt="" />
              <p class="title">${domList.seventyFive[i].title}</p>
              <span class="text">${domList.seventyFive[i].text}</span>
              <div class="buy-btn">
              <dl>
                  <dd class="onepc">
                    <h4>Only <b>${domList.seventyFive[i].oneYear.b} </b> <del>${domList.seventyFive[i].oneYear.del}</del></h4>
                    <a href="${domList.seventyFive[i].oneYear.link}" onclick="${domList.seventyFive[i].oneYear.ga}"><button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="12" viewBox="0 0 19 12"><path id="形状_26" data-name="形状 26" class="cls-1" d="M1271.26,941.422h-2.54l-4.48,6.883a0.811,0.811,0,0,1-.25.242,0.789,0.789,0,0,1-.52.194H1256a0.833,0.833,0,0,1,0-1.665h7.08l0.65-1h-9.09a0.832,0.832,0,0,1,0-1.664h10.06a0.718,0.718,0,0,1,.11.007l0.69-1.054h-11.62a0.833,0.833,0,0,1,0-1.665h12.71l0.99-1.525a0.841,0.841,0,0,1,.27-0.259,0.827,0.827,0,0,1,.49-0.164h2.92A0.833,0.833,0,0,1,1271.26,941.422Zm-13.54,7.986a1.175,1.175,0,1,1-1.15,1.174A1.157,1.157,0,0,1,1257.72,949.408Zm4.33,0a1.175,1.175,0,1,1-1.15,1.174A1.165,1.165,0,0,1,1262.05,949.408Z" transform="translate(-1253.06 -939.75)"/></svg><b>Buy Now</b> 1 year / 1 pc</button></a>
                  </dd>
                  <dd class="threepc">
                    <h4>Only <b>${domList.seventyFive[i].threeYear.b} </b> <del>${domList.seventyFive[i].threeYear.del}</del></h4>
                    <a href="${domList.seventyFive[i].threeYear.link}" onclick="${domList.seventyFive[i].threeYear.ga}"><button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="12" viewBox="0 0 19 12"><path id="形状_26" data-name="形状 26" class="cls-1" d="M1271.26,941.422h-2.54l-4.48,6.883a0.811,0.811,0,0,1-.25.242,0.789,0.789,0,0,1-.52.194H1256a0.833,0.833,0,0,1,0-1.665h7.08l0.65-1h-9.09a0.832,0.832,0,0,1,0-1.664h10.06a0.718,0.718,0,0,1,.11.007l0.69-1.054h-11.62a0.833,0.833,0,0,1,0-1.665h12.71l0.99-1.525a0.841,0.841,0,0,1,.27-0.259,0.827,0.827,0,0,1,.49-0.164h2.92A0.833,0.833,0,0,1,1271.26,941.422Zm-13.54,7.986a1.175,1.175,0,1,1-1.15,1.174A1.157,1.157,0,0,1,1257.72,949.408Zm4.33,0a1.175,1.175,0,1,1-1.15,1.174A1.165,1.165,0,0,1,1262.05,949.408Z" transform="translate(-1253.06 -939.75)"/></svg><b>Buy Now</b> 1 year / 3 pcs</button></a>
                  </dd>
              </dl>
            </div></li>`
    $('#offer75').append(str)
  }

  for(let i in domList.Review){
    let str = `<dl class="${i == 3?'active':''}">
                <dd>
                  <h3>${domList.Review[i].type}</h3>
                  <p>${domList.Review[i].text}</p>  
                </dd>
              </dl>`
    $('.review-content').append(str)
  }
}

$('.coupon .playnow').click(()=>{
  cj('1')
})
var setInterval_t = null,set=null

function cj(t){
  clearInterval(setInterval_t)
  if(!t){
    let time=10
    setInterval_t = setInterval(()=>{
      if(time === 0){
        clearInterval(setInterval_t)
        $('.coupon .time').css('opacity',0)
        zj()
        return
      }
      $('.coupon .time').text(`0:0${--time}`)
    },1000)
  }else{
    $('.coupon .time').css('opacity',0)
    zj()
  }
}

function zj(){
  cSet('2021salecj','1')
  ga('send', 'event', 'nybuy', 'buy', 'enaff2020nypopup1');
  $('.coupon .pop .cj .zp .zb').addClass('ac')
  
  let list = ['1.1','1.3','1.5','1.7','1.9'] //0-Grand Prize  1-Thank You  2-First Prize  3-Second Prize 4-Third Prize
  setTimeout(function(){
    $.ajax({
      type: "GET",
      url: "index.php",
      data: "popup=gift_re",
      success: function (res) {
        isz = true
        window.localStorage.setItem('isz',true)
        $('.coupon .pop .zj').show().siblings().hide()
        $(".coupon i").removeClass("icon").addClass("zj_b")
        ga('send', 'event', 'nybuy', 'buy', 'enaff2020nypopup5');
        $('.coupon i.hide').removeAttr('onclick').attr('onclick',`ga('send', 'event', 'nybuy', 'buy', 'enaff2020nypopup6')`)
        set = setTimeout(()=>{
          z()
          allNum()
        },10000)
      }
    });
  },4000)
}

let wl = false


// $('body').mousemove(function(e){
//   if(wl && isz && e.clientY<10){
//     $('.coupon').show();
//     $('.coupon .pop .wl').show().siblings().hide()
//     $(".coupon i").removeClass("showz").addClass("icon")
//     $('.coupon').removeAttr('onclick').attr('onclick',`ga('send', 'event', 'bfbuy', 'buy', 'enaff2020nypopup8')`)
//     $('.coupon i.hide').removeAttr('onclick').attr('onclick',`ga('send', 'event', 'bfbuy', 'buy', 'enaff2020nypopup9')`)
//     wl = false
//   }
// })


function is24(){
  let time = window.localStorage.getItem('t')
  if(time){
    if(!window.localStorage.getItem('isz'))return
    if(!window.localStorage.getItem('end')){
      allNum()
      $('.float').css('visibility','visible')
      var cName='enaffbf_i';
      if(cGet(cName,1)==null){
        setTimeout(showCoupon('info'), 1000);
        cSet(cName,1,1);
        setTimeout('closeCoupon(1)',1000);
      }else{
        _init();
      }
      return
    }else{
      allNum()
      $('#countdown2').fadeOut()
      $('.float').removeClass('ac').css('visibility','visible').addClass('soldout')
      z()
    }

    if((Date.parse(new Date())-Number(time))/24/60/60/1000 >= 1){
      window.localStorage.removeItem('t')
      window.localStorage.removeItem('end')
      window.localStorage.removeItem('isz')
      $.ajax({
        type: "GET",
        url: "index.php",
        data: "popup=gift"+new Date().getDate(),
        success: function (res) {
          // console.log(res);
        }
      });
      $('.float').css('visibility','hidden')
      $('.coupon').show();
      window.localStorage.setItem('t',Date.parse(new Date()))
      cj()
    }
  }else{
    $('.coupon').show();
    window.localStorage.setItem('t',Date.parse(new Date()))
    cj()
  }
}


let arr = {
  asc:{onepc:135,onedelac:73,threepc:128,threedelac:64},
  db:{onepc:119,onedelac:58,threepc:116,threedelac:73},
  imf:{onepc:353,onedelac:133,threepc:314,threedelac:118},
  mb:{onepc:309,onedelac:76,threepc:327,threedelac:76},
  isu:{onepc:235,onedelac:92,threepc:227,threedelac:99},
  iu:{onepc:213,onedelac:106,threepc:206,threedelac:95},
  all:{onepc:98,onedelac:24,threepc:78,threedelac:18}
};
function getSales(type,button) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=getPacks&type=" + type + "&d=" + date.getDate() + "&button=" + button,
    success: function(res) {
      var sales = JSON.parse(res);
      var packs = sales.packsNum;
      let al = packs/arr[type][button]*(button.indexOf('one')>-1?arr[type]['onedelac']:arr[type]['threedelac'])
      $('#'+type).find('.'+button).children('p').find('del').css('width',packs>1?al.toFixed(2):1+'px')
      if (packs > 0) {
        $("#"+type+" ."+button+" p span").html(packs+' left');
        setTimeout('getSales(\'' + type + '\',\'' + button + '\')', getRetime(type,button));
      }
    }
  });
}

function allNum(){
  getSales('asc','threepc');
  getSales('asc','onepc');
  getSales('db','threepc');
  getSales('db','onepc');
  getSales('imf','threepc');
  getSales('imf','onepc');
  getSales('isu','threepc');
  getSales('isu','onepc');
  getSales('mb','threepc');
  getSales('mb','onepc');
  getSales('iu','threepc');
  getSales('iu','onepc');
  getSales('all','onepc');
  getSales('all','threepc');
}


function getRetime(type, button) {
  var packsNum_p = cGet('newyear' + type + button + '_p',1);
  if (type == "asc") {
    if (button == 'onepc') {
      if(packsNum_p > 45){reTime = 3.3;} else if(packsNum_p > 21){reTime = 24;} else{reTime = 20;}
    }
    if (button == 'threepc') {
      if(packsNum_p > 39){reTime = 3.3;}else if(packsNum_p > 19){reTime = 30;}else{reTime = 20;}
    }
  } else if (type == "db") {
    if (button == 'onepc') {
      if(packsNum_p > 31){reTime = 3.4;}else if(packsNum_p > 16){reTime = 37.5;}else{reTime = 20;}
    }
    if (button == 'threepc') {
      if(packsNum_p > 26){reTime = 3.3;}else if(packsNum_p > 5){reTime = 27.3;}else{reTime = 20;}
    }
  } else if (type == "imf") {
    if (button == 'onepc') {
      if(packsNum_p > 278){reTime = 4;}else if(packsNum_p > 194){reTime = 7.1;}else{reTime = 20;}
    }
    if (button == 'threepc') {
      if(packsNum_p > 256){reTime = 5;}else if(packsNum_p > 176){reTime = 7.5;}else{reTime = 20;}
    }
  } else if (type == "mb") {
    if (button == 'onepc') {
      if(packsNum_p > 234){reTime = 4;}else if(packsNum_p > 145){reTime = 6.7;}else{reTime = 20;}
    }
    if (button == 'threepc') {
      if(packsNum_p > 245){reTime = 3.6;}else if(packsNum_p > 151){reTime = 6.4;}else{reTime = 20;}
    }
  } else if (type == "isu") {
    if (button == 'onepc') {
      if(packsNum_p > 121){reTime = 2.6;}else if(packsNum_p > 89){reTime = 18.8;}else{reTime = 20;}
    }
    if (button == 'threepc') {
      if(packsNum_p > 126){reTime = 3;}else if(packsNum_p > 73){reTime = 11.3;}else{reTime = 20;}
    }
  } else if (type == "iu") {
    if (button == 'onepc') {
      if(packsNum_p > 114){reTime = 3;}else if(packsNum_p > 69){reTime = 13.3;}else{reTime = 20;}
    }
    if (button == 'threepc') {
      if(packsNum_p > 109){reTime = 3.1;}else if(packsNum_p > 58){reTime = 11.8;}else{reTime = 20;}
    }
  } else if (type == "all") {
    if (button == 'onepc') {
      if(packsNum_p > 20){reTime = 3.8;}else if(packsNum_p > 5){reTime = 40;}else{reTime = 60;}
    }
    if (button == 'threepc') {
      if(packsNum_p > 5){reTime = 4;}else if(packsNum_p > 3){reTime = 300;}else{reTime = 60;}
    }
  }
  return reTime*1000;
}
function isiOS() {
  const u = navigator.userAgent;
  return !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
}

function onPopClosed(orderReference) {
  if (orderReference) {
    if(cGet('2021sale') == null && cGet('2021salecj') === '1'){
      $(".email").css("display", "block");
      ga('send', 'event', 'nybuy', 'buy', 'enaff2020nypopup12')
    }else{
      window.location='https://www.iobit.com/en/thankyou.php?refs=enaffbf';
    }
  }
}

function getUrlParam(name) {
  var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
  var r = window.location.search.substr(1).match(reg);
  if (r != null) return unescape(r[2]); return null;
}
var livetime = '';
var backtime= '';
if(cGet('2021sale') == null && cGet('2021salecj') === '1'){
  if(getUrlParam('src') == 'tp'){
    $(".email").css("display", "block");
    ga('send', 'event', 'nybuy', 'buy', 'enaff2020nypopup12')
  }
}

document.addEventListener("visibilitychange", function() {
  // console.log( );
  // console.log(document.hidden);
  if(document.hidden ) {
    num = false;
    livetime=new Date().getTime() / 1000
    // console.log(livetime)
  }
  else {
    num = true;
    // _init();
    backtime=new Date().getTime() / 1000;
    var timenow2 = Math.floor(backtime - livetime);
    countTime = parseInt(countTime) + timenow2;

    var date = new Date();
    var cName = "enaffbf_t";

    cSet(cName, countTime,1);

    countdown("#countdown1 strong","#countdown2 strong");

  }
});
function isMobile() {
  const u = navigator.userAgent;
  return u.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i);
}
(function () {
  if(isiOS()) $('.footer .wrapper dl').addClass('ios')
  keeppophidden()
  initializeDom()
  is24()
  if(isMobile()){
    $('.float').attr('onclick','float_c()')
  }else{
    $('.float').attr('onmouseover','float_m()')
  }
  
  var sf = new Snowflakes({
    color: "#ffffff",
    count: isMobile()?30:50,
    minOpacity: 0.2,
    maxOpacity: 0.6
  });

  $(window).scroll(function(){
    let topp = $(document).scrollTop();
    if(isMobile()){
      if(topp>80){
        $('.r-nav').addClass("on")
        $('.r-nav li:nth-child(1)').addClass('ac').siblings().removeClass('ac')
      }
      if(topp>=518){
        $('.r-nav li:nth-child(2)').addClass('ac').siblings().removeClass('ac')
      }
      if(topp>=2260){
        $('.r-nav li:nth-child(3)').addClass('ac').siblings().removeClass('ac')
      }
      if(topp<80){
        $('.r-nav li:nth-child(1)').addClass('ac').siblings().removeClass('ac')
        $('.r-nav').removeClass("on").addClass('off')
      }else{
        $('.r-nav').removeClass("off").addClass('on')
      }
    }else{
      if(topp>200){
        $('.r-nav').addClass("on")
        $('.r-nav li:nth-child(1)').addClass('ac').siblings().removeClass('ac')
      }
      if(topp>850){
        $('.r-nav li:nth-child(2)').addClass('ac').siblings().removeClass('ac')
      }
      if(topp>2750){
        $('.r-nav li:nth-child(3)').addClass('ac').siblings().removeClass('ac')
      }
      if(topp<200){
        $('.r-nav li:nth-child(1)').addClass('ac').siblings().removeClass('ac')
        $('.r-nav').removeClass("on").addClass('off')
      }else{
        $('.r-nav').removeClass("off").addClass('on')
      }
    }

  })

  var ref = MApp(2.2).url.getParameters('ref');
  var refPattern=new RegExp('ir');
  if(refPattern.test(ref)){
    var buyBtn=$('a');
    buyBtn.eq(0).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-xmas-best-value-pack-1-pc-2258');
    buyBtn.eq(1).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-xmas-best-value-pack-3-pcs-2758');
    buyBtn.eq(2).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','advanced-systemcare-pro-1-year-subscription-1-pc-1175');
    buyBtn.eq(3).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','advanced-systemcare-pro-1-year-subscription-3-pcs-1475');
    buyBtn.eq(4).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','driver-booster-pro-1-year-subscription-1-pc-1495');
    buyBtn.eq(5).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','driver-booster-pro-1-year-subscription-3-pcs-1795');
    buyBtn.eq(6).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-malware-fighter-pro-1-year-subscription-1-pc-1395');
    buyBtn.eq(7).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-malware-fighter-pro-1-year-subscription-3-pcs-1695');
    buyBtn.eq(8).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','macbooster-pro-1-year-subscription-1-mac-1599');
    buyBtn.eq(9).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','macbooster-pro-1-year-subscription-3-macs-2799');
    buyBtn.eq(10).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-software-updater-pro-1-year-subscription-1-pc-699');
    buyBtn.eq(11).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-software-updater-pro-1-year-subscription-3-pcs-999off');
    buyBtn.eq(12).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-uninstaller-pro-1-year-subscription-1-pc-999off');
    buyBtn.eq(13).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-uninstaller-pro-1-year-subscription-3-pcs-1297off');
    buyBtn.eq(14).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-xmas-pack-asc-db-1-pc-1298');
    buyBtn.eq(15).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-xmas-pack-asc-db-3-pcs-2362');
    buyBtn.eq(16).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-xmas-pack-asc-iu-1-pc-1570');
    buyBtn.eq(17).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-xmas-pack-asc-iu-3-pcs-2202');
    buyBtn.eq(18).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-xmas-pack-db-imf-1-pc-2087');
    buyBtn.eq(19).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-xmas-pack-db-imf-3-pcs-2521');
  }

  //review
  $(".review ul li").on("hover", function () {
    var index = $(this).index();
    $(this).addClass('active').siblings().removeClass('active');
    $(".review-content dl").eq(index).addClass('active').siblings().removeClass('active');
    // $(".review span.arrow").stop().animate({'marginLeft': index*240 + 120}, 300);
  });
}());