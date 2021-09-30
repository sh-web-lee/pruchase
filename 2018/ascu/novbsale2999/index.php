<?php
error_reporting(0); 
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) -68807174;
$buyNum = number_format($buyNum);

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enascui' . $date;
  if (empty($_COOKIE[$c_name])) {
    $packsNum = 77;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    $packsNum = $_COOKIE[$c_name];
    if (intval($packsNum) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24);
    } else {
      if ($_GET['f'] == 1) {
        $packsNum--;
      } else {
        if (rand(1, 100) % 2 == 0) {
          $packsNum--;
        }
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'buyNum'=>$buyNum));
  exit;
}

//  禁止ADN缓存
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');

//  主要内容
if (empty($_GET['ref'])) $_GET['ref'] = 'ascu11';
// 折扣信息
$discountListArr = array(
  // 折扣比例、价格、购买链接标签
  '6m' => array('90', '9', 'ascu11pf-6m'), // 到期大于6个月 pro2
  '6' => array('85', '12', 'ascu11pf-6'), // 到期小于6个月 pro1
  'default' => array('70', '29', 'ascu11pf'),
  'title' => array(
    'um10trial' => array(
      '6m' => 'Our Gift Pack - Exclusive for Advanced SystemCare PRO User!',
      '6' => 'Our Gift Pack - Exclusive for Advanced SystemCare PRO User!',
      'default' => 'Activate Now to Get 3 Secured PCs and Our Gift Pack!'
    ),
    'um10trial2' => array(
      '6m' => 'Exclusive for Advanced SystemCare PRO User – Activate before Trial Expiring!',
      '6' => 'Exclusive for Advanced SystemCare PRO User – Activate before Trial Expiring!',
      'default' => 'Activate Now to Get Our Gift Pack before Trial Expiring!'
    ),
    'um10expire' => array(
      '6m' => 'Trial expired. Get Gift Pack Exclusive for Advanced SystemCare PRO User!',
      '6' => 'Trial expired. Get Gift Pack Exclusive for Advanced SystemCare PRO User!',
      'default' => 'Trial expired. Activate Now to Get Our Gift Pack!'
    ),
    'um10pro2' => array('default' => 'Your license has expired. Activate Now to Get 3 Secured PCs and Our Gift Pack!'),
    'ascum10' => array('default' => 'Your PC&acute;s Ultimate Protection and Ultimate Performance!'),
    'default' => 'Your PC&acute;s Ultimate Protection and Ultimate Performance!'
  )
);

$cd = strtolower($_GET['cd']);
$discountArr = $discountListArr[$cd] ? $discountListArr[$cd] : $discountListArr['default'];
$discount = $discountArr[0];
$price = $discountArr[1];
$buyTag = $discountArr[2];

$ref = strtolower($_GET['ref']);

$title = $discountListArr['title'][$ref] ? $discountListArr['title'][$ref][$cd] ? $discountListArr['title'][$ref][$cd] : $discountListArr['title'][$ref]['default'] : $discountListArr['title']['default'];

if ($_POST['action'] == 'getDiscount') exit($discount.'|'.$price.'|'.$buyTag);

$packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }
//取消进入页面的折扣
$discount=70;
$price='29';
$buyTag='ascu11pf';

$refStr='ascu11';
//st 参数处理
if(isset($_GET['st'])&&in_array($_GET['st'],array('pm_t3','pm_t5','pm_p1','pm_p3','pm_r2','reg','pm_t1','news',
        'no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf'))){
  $refStr.= '-'.$_GET['st'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Activate ASC Ultimate for 3 PCs with exclusive discount before trial expiring, and get free gifts!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
  var lan=MApp(2.2).language.langArr[0];
  if(lan=='sv'){
    window.location.replace('https://purchase.iobit.com/sv/ascu/index.php');
  }
function getDiscountInfo(codeType){
  $.ajax({
    type : 'post',
    url : './index.php?cd='+codeType,
    timeout: 5000,
    dataType : 'text',
    data : 'action=getDiscount',
    error : function() {getDiscountInfo()},
    success : function(discount) {
      discountArr = discount.split('|');
      percent = discountArr[0];
      price = discountArr[1];
      $('.percent').html(percent);
      $('.discount span').attr('class', '_'+percent);
      $('.price').html(price);
      $('.price').eq(0).html($('.price').eq(0).html().replace('$',''));
      var tw = MApp(2.2).datetime.getTimeZone();
      buyUrl = 'https://www.iobit.com/buy.php?product='+discountArr[2]+'&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu&tw='+tw;
      $('.buybtn').attr('href', buyUrl);
      $('#reportMessage').text('Dear PRO user, please enjoy your sole discount.');
      $('#discountCode').removeAttr('disabled');
      $('#discountSubmit').removeAttr('disabled');
    }
  });
}
function getDiscount(){
  var code = MApp(2.2).packages.trim($('#discountCode').val());
  if (!MApp(2.2).check.isCode(code)){
    $('#reportMessage').text('Your license is not valid. Please confirm and type it again.');
    $('#discountCode').removeAttr('disabled');
    $('#discountSubmit').removeAttr('disabled');
    return;
  }
  // Disabled user input
  $('#errormsg').html('&nbsp;');
  $('#discountCode').attr('disabled', 'disabled');
  $('#discountSubmit').attr('disabled', 'disabled');
  // Get code type
  $.ajax({
    type : 'post',
    url : './discount.php',
    timeout: 5000,
    dataType : 'text',
    data: 'action=query&code='+code,
    error : function() {getDiscount()},
    success : function(codeType){
      if (codeType == '6' || codeType == '6m' || codeType == 'other'){
        // Get discount info
        getDiscountInfo(codeType);
      } else {
        $('#reportMessage').text('Your license is not valid. Please confirm and type it again.');
        $('#discountCode').removeAttr('disabled');
        $('#discountSubmit').removeAttr('disabled');
      }
    }
  });
}
</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- header start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title">
        <h1>Black Friday</h1>
        <p>EXCLUSIVE SALE</p>
      </div>
      <div class="panel clearfix">
        <div class="product fl">
          <img src="<?php echo getStaticUrl('images/header_asc.png')?>" alt=""/>
          <!-- rednum -->
          <div class="discount">
            <span class="_<?php echo $discount; ?>"></span>
          </div>
        </div>
        <div class="infor fr">
          <div class="infor-top">
            <h3>All-in-one utility for better PC protection & performance Free gift comes along</h3>
            <h2><span id="packbox" class="reduceGift packbox"><b class="list"><strong>9</strong></b><b class="list"><strong>9</strong></b><b class="list"><strong>9</strong></b></span> Packs Left Today!</h2>
          </div>
          <dl>
            <dt>
              <b class="price-small">$</b><strong class="infor-price price"><?php echo $price; ?></strong><b class="price-small">.99</b>
              <span class="original">
                Original: <del>$109.93</del>
              </span>
            </dt>
            <dd>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase');">
                <i></i>
                <span>Activate Now</span>
              </a>
            </dd>
            <dd class="last">
              <i class="all-icons">people</i>
              <strong class="buyNum"><?php echo $buyNum;?> </strong>people activated
            </dd>
          </dl>
        </div>
      </div>      
    </div>
  </div>
  <!-- header end -->

  <!-- container start -->
  <div class="wrapper main">

    <h2><?php echo $title; ?></h2>
    <div class="product-intro clearfix">
      <div class="left-part clearfix">
        <div class="showcase">
          <img src="<?php echo getStaticUrl('images/boxshot-ascu.png')?>">
        </div>          
        <i>Sale</i>
        <div class="continer">
          <h3>What you can get by <br><span>ACTIVATING</span> ASC Ultimate 11:</h3>
          <p>An always-on, automated, and full-scale antivirus utility against all kinds of viruses, Ransomware, system slowdown, freezing and crashes. It's your best solution for security and performance.</p>
          <p><img src="<?php echo $pResUrl; ?>images/product_awards.png"></p>
          <p><a  href="javascript:void(0);" onclick="goTarget($('.comparison'),122)">See more about PRO edition >></a></p>
        </div>
      </div>
      <div class="right-part">
        <div class="continer clearfix">
          <div class="showcase">
            <img src="<?php echo $pResUrl; ?>images/additional.png">
          </div>            
          <i>Free</i>
          <dl>
            <dt><strong>$0</strong> <del>$39.99</del></dt>
            <dd><strong>Additional 2 PCs Supported</strong></dd>
            <dd>Advanced SystemCare Ultimate license supports an additional 2 PCs so you can share it with your family & friends!</dd>
          </dl>           
        </div>
        <div class="continer clearfix">
          <div class="showcase">
            <img src="<?php echo $pResUrl; ?>images/boxshot-pf.png">
          </div>    
          <i>Free</i>
          <dl>
            <dt><strong>$0</strong> <del>$19.95</del></dt>
            <dd><strong>Protected Folder 1 year / 1 PC</strong></dd>
            <dd>No Worries of Data Theft or Privacy Leaks!</dd>
          </dl>
        </div>
      </div>
    </div>

    <!-- descrip start -->
    <div class="descrip clearfix">
      <div class="details fl">
        <p>Activate Advanced SystemCare Ultimate today, Get 2 Additional Secured PCs and Protected Folder for FREE. Offer limited for Black Friday Sale ONLY!</p>
        <p>Or you can enter Advanced SystemCare PRO license to redeem a bigger discount!</p>
        <div class="collection clearfix">
          <input id="discountCode">
          <button id="discountSubmit" onclick="getDiscount();ga('send', 'event', 'ascuclick', 'click', 'ascupurchase');">Update Cart</button>
          <span id="reportMessage"></span>
        </div>
      </div>
      <dl class="handle fr">
        <dt>
          Only <b class="price-small">$</b><strong  class="price"><?php echo $price; ?></strong><b class="price-small">.99</b> <del>$109.93</del>
        </dt>
        <dd>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase');">
            <i></i>
            <span>Act Now and SAVE <em class="percent"><?php echo $discount; ?></em>%!</span>
          </a>
        </dd>
        <dd>
          <strong class="packsNum"><?php echo $packsNum; ?></strong> Packs Left Only!
          <span><strong class="black buyNum"><?php echo $buyNum;?></strong> people activated!</span>
        </dd>
      </dl>
    </div>
    <!-- descrip end -->
     </div>
    
     <!-- review -->
     <div class="review ">
       <div class="wrapper">
         <div id="dg-container" class="dg-container">
           <div class="nav">
             <span class="dg-prev"></span>
             <span class="dg-next"></span>
           </div>
           <div class="content dg-wrapper">
             <dl class="reviews">
               <dt><img src="<?php echo $pResUrl; ?>images/logo-addictivetips.png" alt=""></dt>
               <dd>
                 <h2>Media Review</h2>
                 <h3>"Advanced SystemCare Ultimate is a powerful anti-virus and system optimization tool."</h3>
                 <p>"Advanced SystemCare Ultimate is a powerful anti-virus and system optimization tool. Apart from protecting your PC from malware, viruses and similar threats, it can also boost your PC's performance by applying various registry and shortcut fixes, removing junk files, scanning local disk volumes for system vulnerabilities, etc."</p>
                 <cite>Addictivetips</cite>
               </dd>
             </dl>
             <dl class="reviews">
               <dt><img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt=""></dt>
               <dd>
                 <h2>User Review</h2>
                 <h3>"Advanced System Care Ultimate is the new mother load. The big winner! "</h3>
                 <p>"I have had a past problem of always messing with my computer. Then I got my first copy of Advanced Systemcare. There is no need to mess around any longer. Now that I have antivirus, included in the product, my need for secondary software is none existent. Advanced System Care Ultimate is the new mother load. The big winner! My computer is always up to date and runs like deer. Unlike other products; there has not been a constant stream of conflicts."</p>
                 <cite>Rod Garnett</cite>
               </dd>
             </dl>
             <dl class="reviews">
               <dt><img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt=""></dt>
               <dd>
                 <h2>User Review</h2>
                 <h3>"I recommend advanced systemcare ultimate as their antivirus/system optimizer."</h3>
                 <p>"On the past version of advanced systemcare ultimate, i had no problem on almost everything, system, malwares, etc. and now, it's updated, more features on it will make my laptop run 5x faster than before. i also like the new skin of it. so next time i fix other's computer, i recommend advanced systemcare ultimate as their antivirus/system optimizer."</p>
                 <cite>Dareen Lim</cite>
               </dd>
             </dl> 
             <dl class="reviews">
               <dt><img src="<?php echo $pResUrl; ?>images/russell-peck.png" alt=""></dt>
               <dd>
                 <h2>User Review</h2>
                 <h3>"One of the simplest yet effective programs I have found to keep all three of my computers healthy."</h3>
                 <p>"I have used various versions of Advanced SystemCare for several years. When I looked at the features of Advanced SystemCare Ultimate I knew I had to have it. It has not disappointed me. One of the simplest yet effective programs I have found to keep all three of my computers healthy."</p>
                 <cite>Russell Peck</cite>
               </dd>
             </dl>
           </div>
         </div>
       </div>
     </div>
     <!-- end review -->
     <!-- comparison start -->
     <div class="comparison wrapper">
       <h4>Why Choose Advanced SystemCare Ultimate 11?</h4>
       <h5><b>Better Protection</b>, and <b>No Performance Lag</b> Anymore. See Comparison below</h5>
       <div class="ctable">
         <table border="0" cellspacing="0" cellpadding="0" width="100%">
           <thead>
             <tr>
               <th class="text"></th>
               <th class="blue">
                 <p><span>Advanced SystemCare</span> Ultimate</p>
               </th>
               <th>AVG<span>Anti-virus</span></th>
               <th>Norton Security<span>Deluxe</span></th>
               <th>Avast! Pro<span>Antivirus</span></th>
               <th>Microsoft<span>Security Essentials</span></th>
               <th>McAfee® AntiVirus</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td class="title first">Detection Rate</td>
               <td class="gray">Very high</td>
               <td>Normal</td>
               <td>High</td>
               <td>Normal</td>
               <td>High</td>
               <td>High</td>
             </tr>
             <tr>
               <td class="title">Performance Lag</td>
               <td class="gray">No</td>
               <td>Yes</td>
               <td>Yes</td>
               <td>Yes </td>
               <td>Yes</td>
               <td>Yes</td>
             </tr>
             <tr>
               <td class="title">Top PC Cleaning <br /> and Optimization</td>
               <td class="gray"><i class="tb-icons red">√</i></td>
               <td><i class="tb-icons">×</i></td>
               <td><i class="tb-icons">×</i></td>
               <td><i class="tb-icons">×</i></td>
               <td><i class="tb-icons">×</i></td>
               <td><i class="tb-icons">×</i></td>
             </tr>
             <tr>
               <td class="title">Over 20 Extra Tools for PC Performance</td>
               <td class="gray"><i class="tb-icons red">√</i></td>
               <td><i class="tb-icons">×</i></td>
               <td><i class="tb-icons">×</i></td>
               <td><i class="tb-icons">×</i></td>
               <td><i class="tb-icons">×</i></td>
               <td><i class="tb-icons">×</i></td>
             </tr>
           </tbody>
         </table>
       </div>
       <dl class="comlist">
         <dt>
           <i class="all-icons">√</i>
           Unrivaled Detection Rate and Maximum Protection
         </dt>
         <dd>
           One click to clean hidden and stubborn Viruses, Trojans, worms, spyware, adware and various malware. Advanced SystemCare Ultimate also provides an always-on, automated, and proactive protection against all kinds of Internet security threats,  with rapid updating to the virus database.
         </dd>
       </dl>
       <dl class="comlist">
         <dt>
           <i class="all-icons">√</i>
           Enjoy Confident Security without System Slowdown
         </dt>
         <dd>
           Your system runs at its top speed without any performance lag, due to our industry-leading Internet security technology.
         </dd>
       </dl>
       <dl class="comlist">
         <dt>
           <i class="all-icons">√</i>
           Surf safely, Search, Download and Share with Confidence
         </dt>
         <dd>
           Proactive Virus Control technology monitors processes' behavior in real-time, scans files shared by email and blocks possible threats. The unmatched detection rate
           assures you a safer environment while using your PC.
         </dd>
       </dl>
       <dl class="comlist">
         <dt>
           <i class="all-icons">√</i>
           Get Highly-tuned Performance and Enjoy the New PC Feeling
         </dt>
         <dd>
           The already proven powerful PC tune-up ability unleashes the full power of your PC. With the Real-time optimization and ActiveBoost feature, system resources are
           intelligently managed to ensure you have a super-fast PC.
         </dd>
       </dl>
     </div>
     <!-- comparison end -->
     <div class="award">
       <div class="wrapper">
         <h2>Product Awards</h2>
         <img src="<?php echo $pResUrl; ?>images/award.png" alt="">
       </div>
     </div>
    <div class="footer">
     <div class="wrapper">
       <div class="payments clearfix">
         <ul class="secure">
           <li><img src="<?php echo $pResUrl; ?>images/secure-payment.png" alt=""></li>
           <li>
             <h4>Secure Payment</h4>
             <p>IObit supports several safe modes of payment.</p>
           </li>
         </ul>
          <div class="payments-icon">
           <img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
          </div>
       </div>
       <div class="statement">
         <ul>
           <li>Note:</li>
           <li>*Such promotional programs are subject to change without notice, from time to time in our sole discretion.</li>
         </ul>
       </div>
       <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
     </div>
    </div>

    <!-- floatlayer start -->
  <div class="floatlayer">
    <div class="wrapper">
      <div class="left">
        <h3>Save <strong><span class="percent"><?php echo $discount; ?></span>%</strong>, Enjoy Ultimate Protection and Ultimate Performance! </h3>
        <h2><span id="packbox" class="reduceGift packbox"><b class="list"><strong>9</strong></b><b class="list"><strong>9</strong></b><b class="list"><strong>9</strong></b></span> Packs Left Today!</h2>
        <p><strong class="buyNum"><?php echo $buyNum;?> </strong>people activated</p>
      </div>
      <dl>
        <dt>Only <b class="price-small">$</b><strong class="price"><?php echo $price; ?></strong><b class="price-small">.99</b> <del>$109.93</del></dt>
        <dd>
          <a class="buybtn floatbtn" href="https://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase');">
            <i></i>
            <span>Activate Now</span>
          </a>
        </dd>
      </dl>
    </div>
  </div>
  <!-- floatlayer end -->
  <div class='popout'><p>ASCU v12 will recognize ASCU v11 license key as <strong>valid for ASCU v12.</strong></p></div>
  <script src="<?php echo $pResUrl; ?>script/modernizr.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/review-3d-carousel.min.js"></script>
<script>
  
  // var newobj=$('.price').eq(0).html().replace("$","");
  // $('.price').eq(0).html($('.price').eq(0).html().replace('$',''));

  function PrefixInteger(num, length) {
    return (Array(length).join('0') + num).slice(-length);
  }

  function flipNum(num, length) {
    $(".packbox .list b").text("");
    var num = PrefixInteger(num, length);
    var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
    var list = '';
    var len = String(num).length;
    var str = num.toString();
    var box = $(".packbox");
    for (var j = 0; j < arr.length; j++) {
      list += '<strong>' + arr[j] + '</strong>';
    }
    $(".header .packbox .list").html(list);
    $(".floatlayer .packbox .list").html(list);
    for (var a = 0; a <= len; a++) {
      var curNum = str.substring(a, a + 1);
      $(".header .packbox .list").eq(a).animate({
        marginTop: -(9-curNum) * 30,
      }, "slow");
      $(".floatlayer .packbox .list").eq(a).animate({
        marginTop: -(9-curNum) * 30,
      }, "slow");
    }
  }
  $(document).ready(function() {
    $('#dg-container').gallery();
    //userreview
    $(".users li").mouseover(function(event) {
      var num = $(this).index();
      $(".users li").eq(num).addClass('current').siblings().removeClass('current');
      $(".user-rev .content > dl").eq(num).addClass('show').siblings().removeClass('show');
    });

    //floatlayer
    $(window).on('scroll', function () {
      var scrollHeight = $(".header .infor dd.last").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $('.floatlayer').addClass('on');
      } else {
        $('.floatlayer').removeClass('on');
      }
    });

  });

  window.onload=function(){
    packsInit();
  };

  function goTarget(target,yoffset) {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }

   function showPop(){
    $('.popout').addClass('on');
   }

  function packsInit(){
    var date = new Date();
    var cName = "enascui" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    packs = (arr == null) ? 78 : arr[2];
    flipNum(packs,3);
    $('.packsNum').html(packs);
    setTimeout('decreasingPacks(1)', 3000);
  }

  function decreasingPacks(isFirst) {
    var dateNow = new Date();
    $.ajax({
      type: "GET",
      url: "index.php",
      data: "action=getPacks&r=" + Math.random() + "&d=" + dateNow.getDate() + (isFirst == 1 ? '&f=1' : ''),
      success: function(res) {
        res=JSON.parse(res);
        var sPacks=res.packsNum;
        var rePacks = packs - sPacks;
        if (rePacks > 0) {
          flipNum(sPacks,3);
          $('.packsNum').html(sPacks);
        }
        packs = sPacks;
      }
    });
    setTimeout('decreasingPacks()', 10000);
  }

  $(function(){
    var ver=MApp(2.2).url.getParameters('ver');
    var patt=new RegExp('^12\.0\.(.*)');
    if(patt.test(ver)){
      showPop();
    }
  })
</script>
</body>
</html>