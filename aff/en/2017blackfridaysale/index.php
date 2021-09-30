<?php
error_reporting(0);
session_start();
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
$cName='p_ved';
if(($_GET['src']=='tp') && in_array($_GET['t'],array('4719026','4718966','4718965','4718973',
        '4718972','4718980','4718979','4718982','4718981','4718984','4721708','4721709'))){
  $viewPage=$_COOKIE[$cName];
  if($viewPage==1){

  }elseif($viewPage==2){
    $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
    header('location:http://purchase.iobit.com/aff/en/2018newyearsale/index.php'.$param);
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
  <title>Save up to 80% off &amp; Get special gift pack for FREE!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
  <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400'>
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
      <!-- time -->
      <ul id="toptime" class="countdown source clearfix">
        <li><strong>00</strong></li>
        <li><strong>00</strong></li>
        <li><strong>00</strong></li>
        <li class="last"><strong>00</strong></li>
      </ul>
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
            <dt><i class="all-icons"></i><b>Advanced SystemCare 11 PRO:</b></dt>
            <dd>Deep clean your PC with one-click &amp; boost your slow PC up to 200% faster*</dd>
          </dl>
          <dl>
            <dt><i class="all-icons"></i><b>Driver Booster 5 PRO:</b></dt>
            <dd>Fix 2,000,000+ outdated, missing &amp; incorrect PC drivers with one-click</dd>
          </dl>
          <dl>
            <dt><i class="all-icons"></i><b>IObit Malware Fighter 5 PRO:</b></dt>
            <dd>Protect PC against trojan, ransomware, rootkit, spyware &amp; adware in real-time</dd>
          </dl>
          <ul class="btnbox clearfix">
            <li>
              <p><strong><small>$</small>23<small>.98</small></strong> <del>$119.89</del></p>
              <a class="buybtn bfp1" href="https://www.iobit.com/buy.php?product=enaffbfpack2398&ref=enaff-asc11dbimf-2017bf1pc&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc11dbimf2017bf1pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/ 1 PC</em></b>
              </a>
            </li>
            <li id="introbtn" class="red">
              <p><strong><small>$</small>33<small>.98</small></strong> <del>$169.89</del></p>
              <a class="buybtn bfp3" href="https://www.iobit.com/buy.php?product=enaffbfpack3398&ref=enaff-asc11dbimf-2017bf3pc&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc11dbimf2017bf3pc')">
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
      <h2>Get a <em>70%</em> Discount on Your MUST-HAVE PC &amp; Mac Utilities</h2>
      <div class="giftbox clearfix">
        <div class="gift fl">
          <img src="<?php echo getStaticUrl('images/asc.png')?>" alt="" />
          <h3>Deep Clean and Optimize Your PC</h3>
          <p class="text">Deep clean your PC with <span>one-click &amp; boost your slow PC</span> up to 200% faster*</p>
          <ul class="btnbox clearfix">
            <li>
              <p>Only $<strong>11<small>.96</small></strong> <del>$39.99</del></p>
              <a class="buybtn asc1" href="https://www.iobit.com/buy.php?product=enaffasc111199&ref=enaff-asc11-2017bf1pc&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc112017bf1pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/ 1 PC</em></b>
              </a>
            </li>
            <li class="red">
              <p>Only $<strong>14<small>.95</small></strong> <del>$49.99</del></p>
              <a class="buybtn asc3" href="https://www.iobit.com/buy.php?product=enaffasc111499&ref=enaff-asc11-2017bf3pc&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc112017bf3pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/3 PCs</em></b>
              </a>
            </li>
          </ul>
        </div>
        <div class="gift fr">
          <img src="<?php echo getStaticUrl('images/db.png')?>" alt="" />
          <h3>Keep Your Device Drivers Up-to-date</h3>
          <p class="text">
            Fix 2,000,000+ outdated, missing &amp; incorrect <span>PC drivers with one-click for top PC and</span> gaming experience
          </p>
          <ul class="btnbox clearfix">
            <li>
              <p>Only $<strong>11<small>.95</small></strong> <del>$39.95</del></p>
              <a class="buybtn db1" href="https://www.iobit.com/buy.php?product=enaffdb51199&ref=enaff-db5-2017bf1pc&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb52017bf1pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/ 1 PC</em></b>
              </a>
            </li>
            <li class="red">
              <p><strong><small>$</small>17<small>.93</small></strong> <del>$59.95</del></p>
              <a class="buybtn db3" href="https://www.iobit.com/buy.php?product=enaffdb51799&ref=enaff-db5-2017bf3pc&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb52017bf3pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/3 PCs</em></b>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="giftbox clearfix">
        <div class="gift fl">
          <img src="<?php echo getStaticUrl('images/imf.png')?>" alt="" />
          <h3>Protect PC against Virus &amp; Malware</h3>
          <p class="text">Protect your PC against trojan, <span>ransomware, rootkit, spyware</span> &amp; adware in real-time</p>
          <ul class="btnbox clearfix">
            <li>
              <p>Only $<strong>11<small>.95</small></strong> <del>$39.95</del></p>
              <a class="buybtn imf1" href="https://www.iobit.com/buy.php?product=enaffimf51199&ref=enaff-imf5-2017bf1pc&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf52017bf1pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/ 1 PC</em></b>
              </a>
            </li>
            <li class="red">
              <p>Only $<strong>17<small>.93</small></strong> <del>$59.95</del></p>
              <a class="buybtn imf3" href="https://www.iobit.com/buy.php?product=enaffimf51799&ref=enaff-imf5-2017bf3pc&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf52017bf3pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 Year/3 PCs</em></b>
              </a>
            </li>
          </ul>
        </div>
        <div class="gift fr">
          <img src="<?php echo getStaticUrl('images/mb6.png')?>" alt="" />
          <h3>A Faster and more Secured Mac</h3>
          <p class="text">
            Clean up junks, boost Mac performance, and <span>remove Mac malware &amp; virus in one click</span>
          </p>
          <ul class="btnbox clearfix">
            <li>
              <p>Only $<strong>14<small>.94</small></strong> <del>$49.95</del></p>
              <a class="buybtn mb1" href="https://www.iobit.com/buy.php?product=enaffmb61499&ref=enaff-mb6-2017bf1pc&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'mbbuy', 'buy', 'enaffmb62017bf1pc')">
                <i class="all-icons"></i>
                <b>BUY NOW <em>1 MAC/ Lifetime</em></b>
              </a>
            </li>
            <li class="red">
              <p>Only $<strong>32<small>.88</small></strong> <del>$109.95</del></p>
              <a class="buybtn mb3" href="https://www.iobit.com/buy.php?product=enaffmb63299&ref=enaff-mb6-2017bf3pc&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'mbbuy', 'buy', 'enaffmb62017bf3pc')">
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
      <h2>Hurry up before the deals are gone! </h2>
      <!-- time -->
      <ul id="botime" class="countdown source clearfix">
        <li><strong>00</strong></li>
        <li><strong>00</strong></li>
        <li><strong>00</strong></li>
        <li class="last"><strong>00</strong></li>
      </ul>
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
        <div class="count">
          <strong>$0</strong>
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
        <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
        <p>You will be redirected to the latest IObit promotion page automatically.</p>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo getStaticUrl('script/script-pop.js')?>"></script>
</body>
</html>