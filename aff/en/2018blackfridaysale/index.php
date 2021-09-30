<?php
error_reporting(0);
session_start();
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
$cName='p_ved';
if(($_GET['src']=='tp') && in_array($_GET['t'],array('15542643','15547495','15513187','15517187',
    '15518679','15520688','15522226','15524084','15526758','15817409','18194432',''))){
  $viewPage=$_COOKIE[$cName];
  if($viewPage==1){

  }elseif($viewPage==2){
    $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
    header('location:https://purchase.iobit.com/aff/en/2019newyearsale/index.php'.$param);
    exit();
  }elseif($viewPage==3){
    $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
    header('location:https://purchase.iobit.com/aff/en/2019blackfridaysale/index.php'.$param);
    exit();
  }else{
    header('location:https://www.iobit.com/en/thankyou.php?refs=enaffbf');
    exit();
  }
}
if ($_GET['action'] == 'getSales') {
  $date = $_GET['d'];
  $c_name = 'affen' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 78;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24);
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
      if($_GET['t']!=1){
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo $packsNum;
  exit();
}
setcookie($cName,1,time()+3600*24*2,'/');
include $pRootUrl.'include/common.inc.php';
include $pRootUrl.'callback.php';

if(!empty($_GET['ref'])){
  setcookie('bf_ref',$_GET['ref'],time()+3600*24*2,'/');
}
if(!empty($_GET['aff'])){
  setcookie('bf_aff',$_GET['aff'],time()+3600*24*2,'/');
}

$buyLinkAscDbImf3pc='https://www.iobit.com/buy.php?product=enaff2018bfpack3398&ref=enaff-asc12dbimf-2018bf3pc&aff=';
$buyLinkAscDbImf1pc='https://www.iobit.com/buy.php?product=enaff2018bfpack2398&ref=enaff-asc12dbimf-2018bf1pc&aff=';
$buyLinkAsc3pc='https://www.iobit.com/buy.php?product=enaffasc121495&ref=enaff-asc12-2018bf3pc&aff=';
$buyLinkAsc1pc='https://www.iobit.com/buy.php?product=enaffasc121196&ref=enaff-asc12-2018bf1pc&aff=';
$buyLinkDb3pc='https://www.iobit.com/buy.php?product=enaffdb61793&ref=enaff-db6-2018bf3pc&aff=';
$buyLinkDb1pc='https://www.iobit.com/buy.php?product=enaffdb61195&ref=enaff-db6-2018bf1pc&aff=';
$buyLinkIot3pc='https://www.iobit.com/buy.php?product=enaffiot31799&ref=enaff-iot3-2018bf3pc&aff=';
$buyLinkIot1pc='https://www.iobit.com/buy.php?product=enaffiot31477&ref=enaff-iot3-2018bf1pc&aff=';
$buyLinkMb3pc='https://www.iobit.com/buy.php?product=enaffmb7a3288&ref=enaff-mb7a-2018bf3pc&aff=';
$buyLinkMb1pc='https://www.iobit.com/buy.php?product=enaffmb7a1494&ref=enaff-mb7a-2018bf1pc&aff=';

if($_GET['ref']=='fs1702en'){
  $buyLinkAscDbImf3pc='https://iobit.onfastspring.com/2017-iobit-black-friday-special-pack-3-pcs';
  $buyLinkAscDbImf1pc='https://iobit.onfastspring.com/2017-iobit-black-friday-special-pack-1-pc';
  $buyLinkAsc3pc='https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-3-pcs-70off';
  $buyLinkAsc1pc='https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-1-pc-70off';
  $buyLinkDb3pc='https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-70off';
  $buyLinkDb1pc='https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-1-pc-70off';
  $buyLinkIot3pc='https://iobit.onfastspring.com/iotransfer-1-year-3pcs-1799';
  $buyLinkIot1pc='https://iobit.onfastspring.com/iotransfer-1-year-1-pc-1477';
  $buyLinkMb3pc='https://iobit.onfastspring.com/macbooster-standard-3-macs-70off';
  $buyLinkMb1pc='https://iobit.onfastspring.com/macbooster-lite-1-mac-70off';
}
$refStr = (empty($_GET['ref']) ? '' : $_GET['ref']);
$affStr = (empty($_GET['aff']) ? (empty($_GET['AFF']) ? '' : $_GET['AFF']) : $_GET['aff']);

$ref = empty($refStr) ? (empty($affStr) ? '' : '?aff='.$affStr) : (empty($affStr) ? '?ref=ir' : '?ref='.$refStr.'&aff='.$affStr);
header("Refresh: 5; url=https://purchase.iobit.com/aff/en/asc/2017asc10general/index.php$ref");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Save up to 80% off & Get special gift pack for FREE!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700,900'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script>
    var packsNum = "<?php echo $packsNum; ?>";
  </script>
  <script
      id="fsc-api"
      src="https://d1f8f9xcsvx3ha.cloudfront.net/sbl/0.7.4/fastspring-builder.min.js"
      type="text/javascript"
      data-popup-closed="onPopClosed"
      data-storefront="iobit.onfastspring.com/popup-iobit">
  </script>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<div class="main">
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h1>BLACK FRIDAY &amp; CYBER MONDAY SALE</h1>
      <div class="countbox">
        <ul class="tag clearfix">
          <li>hour</li>
          <li>min</li>
          <li>sec</li>
          <li>sm</li>
        </ul>
        <!-- time -->
        <ul id="toptime" class="countdown clearfix">
          <li><strong>14</strong></li>
          <li><strong>03</strong></li>
          <li><strong>39</strong></li>
          <li class="last"><strong>28</strong><sup>*</sup></li>
        </ul>
      </div>
      <div class="offer clearfix">
        <div class="box left">
          <h2>up to 80% off</h2>
          <p>No code needed, auto-applied at checkout.</p>
        </div>
        <div class="add fl">+</div>
        <div class="box right">
          <h2>$0 <del>$60</del></h2>
          <p>
            <i class="all-icons"></i> Buy any items below to get a gift
            <span>pack (Worth $60) for FREE! <a class="more" href="javascript: void(0);">Learn More!</a></span>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <div class="wrapper">
    <!-- intro start -->
    <div class="intro">
      <h2>All the tools you need to keep your Windows PCs in tip-top</h2>
      <div class="box clearfix">
        <img class="shotbox fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" />
        <div class="right fl">
          <h3>Includes:</h3>
          <dl>
            <dt><i class="all-icons"></i><b>Advanced SystemCare 12 PRO:</b></dt>
            <dd>Deep clean your PC with one-click & boost your slow PC up to <b>200%</b> faster*.</dd>
          </dl>
          <dl>
            <dt><i class="all-icons"></i><b>Driver Booster 6 PRO:</b></dt>
            <dd>Keep over <b>3,000,000</b> drivers & popular game components up-to-date <br>quickly and safely.</dd>
          </dl>
          <dl>
            <dt><i class="all-icons"></i><b>IObit Malware Fighter 6 PRO:</b></dt>
            <dd>Complete PC security with triple protection against malware, virus & <br>ransomware in real time.</dd>
          </dl>
          <ul class="btnbox clearfix">
            <li>
              <p><strong><small>$</small>23<small>.98</small></strong> <del>$119.89</del></p>
              <a class="buybtn bfp1" href="<?php echo $buyLinkAscDbImf1pc;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc12dbimf2018bf1pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/ 1 PC</em></b>
              </a>
            </li>
            <li id="introbtn" class="red">
              <p><strong><small>$</small>33<small>.98</small></strong> <del>$169.89</del></p>
              <a class="buybtn bfp3" href="<?php echo $buyLinkAscDbImf3pc;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc12dbimf2018bf3pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1Year/ 3 PCs</em></b>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="try">
        Try it RISK FREE - Buy Now to keep PC in excellent status and get a 60-day Money Back Guarantee.
      </div>
    </div>
    <!-- intro end -->

    <!-- discount start -->
    <div class="discount">
      <div class="down"><img src="<?php echo getStaticUrl('images/down.png')?>" alt="" /></div>
      <h2>Get a <em>70%</em> Discount on Your MUST-HAVE PC & Mac Utilities</h2>
      <div class="giftbox clearfix">
        <div class="gift fl">
          <img src="<?php echo getStaticUrl('images/asc.png')?>" alt="Advanced SystemCare PRO" />
          <h3>Top-ranking PC Tuneup Utility</h3>
          <p class="text">Deep clean your PC with one-click & boost <br>your slow PC up to <b>200%</b> faster*.</p>
          <ul class="btnbox clearfix">
            <li>
              <p>Only $<strong>11<small>.96</small></strong> <del>$39.99</del></p>
              <a class="buybtn asc1" href="<?php echo $buyLinkAsc1pc;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc122018bf1pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/ 1 PC</em></b>
              </a>
            </li>
            <li class="red">
              <p>Only $<strong>14<small>.95</small></strong> <del>$49.99</del></p>
              <a class="buybtn asc3" href="<?php echo $buyLinkAsc3pc;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc122018bf3pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/3 PCs</em></b>
              </a>
            </li>
          </ul>
        </div>
        <div class="gift fr db">
          <img src="<?php echo getStaticUrl('images/db.png')?>" alt="Driver Booster PRO"/>
          <h3>Keep Your Device Drivers Up-to-date</h3>
          <p class="text">
            Keep over <b>3,000,000</b> drivers & popular game components <br>up-to-date quickly and safely for top PC and gaming <br>experience.
          </p>
          <ul class="btnbox clearfix">
            <li>
              <p>Only $<strong>11<small>.95</small></strong> <del>$39.95</del></p>
              <a class="buybtn db1" href="<?php echo $buyLinkDb1pc;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb62018bf1pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/ 1 PC</em></b>
              </a>
            </li>
            <li class="red">
              <p><strong><small>$</small>17<small>.93</small></strong> <del>$59.95</del></p>
              <a class="buybtn db3" href="<?php echo $buyLinkDb3pc;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb62018bf3pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/3 PCs</em></b>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="giftbox clearfix">
        <div class="gift fl iot">
          <img src="<?php echo getStaticUrl('images/iot.png')?>" alt="IOTransfer"/>
          <h3>Your Ultimate iPhone/iPad Manager </h3>
          <p class="text">
            Easily transfer photos, music, videos, contacts, books, <br>podcasts between iPhone/ iPad and your PC, and clean junk <br>files to free up storage space of your iPhone/ iPad.
          </p>
          <ul class="btnbox clearfix">
            <li>
              <p>Only $<strong>14<small>.72</small></strong> <del>$49.23</del></p>
              <a class="buybtn imf1" href="<?php echo $buyLinkIot1pc;?>" onclick="ga('send', 'event', 'iotbuy', 'buy', 'enaffiot32018bf1pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/ 1 PC</em></b>
              </a>
            </li>
            <li class="red">
              <p>Only $<strong>17<small>.93</small></strong> <del>$59.97</del></p>
              <a class="buybtn imf3" href="<?php echo $buyLinkIot3pc;?>" onclick="ga('send', 'event', 'iotbuy', 'buy', 'enaffiot32018bf3pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/3 PCs</em></b>
              </a>
            </li>
          </ul>
        </div>
        <div class="gift fr mb">
          <img src="<?php echo getStaticUrl('images/mb.png')?>" alt=""/>
          <h3>A Faster and more Secured Mac</h3>
          <p class="text">
            Your one-stop Mac maintenance tool to clean up <br>junks, boost Mac performance, and remove Mac <br>malware & virus.
          </p>
          <ul class="btnbox clearfix">
            <li>
              <p>Only $<strong>14<small>.94</small></strong> <del>$49.95</del></p>
              <a class="buybtn mb1" href="<?php echo $buyLinkMb1pc;?>" onclick="ga('send', 'event', 'mbbuy', 'buy', 'enaffmb7a2018bf1pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 MAC/ Lifetime</em></b>
              </a>
            </li>
            <li class="red">
              <p>Only $<strong>32<small>.88</small></strong> <del>$109.95</del></p>
              <a class="buybtn mb3" href="<?php echo $buyLinkMb3pc;?>" onclick="ga('send', 'event', 'mbbuy', 'buy', 'enaffmb7a2018bf3pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>3 MACs/ Lifetime</em></b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- discount end -->
  </div>

  <!-- payment start -->
  <div class="payment">
    <ul class="wrapper clearfix">
      <li class="first"><span>Accepted Payments </span><img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" /></li>
      <li><span>Money Back Guarantee</span><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></li>
      <li><span>Secure Payment</span><img src="<?php echo getStaticUrl('images/secure.png')?>" alt="" /></li>
    </ul>
  </div>
  <!-- payment end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <div class="timebox">
        <h2>Hurry up before the deals are gone! </h2>
        <div class="countbox">
          <ul class="tag clearfix">
            <li>hour</li>
            <li>min</li>
            <li>sec</li>
            <li>sm</li>
          </ul>
          <!-- time -->
          <ul id="botime" class="countdown clearfix">
            <li><strong>14</strong></li>
            <li><strong>03</strong></li>
            <li><strong>39</strong></li>
            <li class="last"><strong>28</strong><sup>*</sup></li>
          </ul>
        </div>
      </div>
      <dl class="annotation">
        <dt>Note:</dt>
        <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
        <dd>*.Data may vary based on different system or computer.</dd>
      </dl>
      <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved.</div>
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper">
      <h2 class="change-title hurry show">
        Hurry! Only
        <div class="num">
          <div class="scroll-tick">
            <span>0</span>
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span>
            <span>6</span>
            <span>7</span>
            <span>8</span>
            <span>9</span>
          </div>
          <div class="scroll-tick">
            <span>0</span>
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span>
            <span>6</span>
            <span>7</span>
            <span>8</span>
            <span>9</span>
          </div>
        </div> free GIFT pack left.
      </h2>
      <h2 class="change-title purse">
        Claim your FREE gift pack by leaving your email on the pop-up Window after purchasing
      </h2>
      <div class="box clearfix">
        <dl class="first">
          <dt><img src="<?php echo getStaticUrl('images/sd.png')?>" alt="" /></dt>
          <dd><h3>Smart Defrag PRO</h3></dd>
          <dd>Max Hard Drive Optimization <span>for Faster PC</span></dd>
        </dl>
        <div class="plus"><b>+</b></div>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/iu.png')?>" alt="" /></dt>
          <dd><h3>IObit Uninstaller PRO</h3></dd>
          <dd>Uninstall Stubborn Plug-ins <span>for Cleaner PC &amp; Browsing</span></dd>
        </dl>
        <div class="plus two"><b>+</b></div>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pf.png')?>" alt="" /></dt>
          <dd><h3>Protected Folder</h3></dd>
          <dd>Secure Important Files with <span>Single Password</span></dd>
        </dl>
        <div class="equal"><b>=</b></div>
        <div class="count clearfix">
          <strong><small>$</small>0</strong>
          <span>Valued at <del>$59.97</del></span>
        </div>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <div class="mask"><div class="panel"></div></div>
  <div class="pop-up">
    <div class="pop-main">
      <div class="pop-box">
        <h2>Note:</h2>
        <p>Thank you for your visit and your interest in IObit products! This Special Offer is over now.</p>
        <p>You will be redirected to the latest IObit promotion page automatically.</p>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo getStaticUrl('script/script-pop.js')?>"></script>
</body>
</html>