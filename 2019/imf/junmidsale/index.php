<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enimfmid_p' . $date;
  if ($_COOKIE[$c_name]===null) {
    $packsNum = 98;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      setcookie($c_name, 0, time() + 3600 * 24);
      $packsNum = 0;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit;
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>50% OFF IObit Malware Fighter PRO + Free Mid-year Gifts</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <!-- title -->
    <h1>WELCOME TO OUR MID-YEAR SALE</h1>
    <!-- left-message -->
    <div class="left-message">
      <img class="box" src="<?php echo $pResUrl;?>images/banner-box.png" alt="IObit Malware Fighter PRO">
      <img class="off" src="<?php echo $pResUrl;?>images/banner-off.png" alt="50% off">
      <img class="gift" src="<?php echo $pResUrl;?>images/banner-gift.png" alt="Smart Defrag PRO 6 + Protected Folder">
    </div>
    <!-- right-message -->
    <div class="right-message">
      <h3>Powerful Anti-malware Software + 2 Free Gifts</h3>
      <!-- countdown -->
      <div class="number">
        <i class="all-icons"></i> Hurry up,
        <div class="countdown clearfix">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        gift packs left only!
      </div>
      <!-- progress -->
      <div class="progress-bar">
        <div class="bar">
          <span></span>
        </div>
      </div>
      <!-- price -->
      <p class="price">$<strong>19</strong>.95 <del> $79.89</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=imf7sdpf1995&ref=imfsdpf1995midyear<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
         onclick="ga('send', 'event', 'imf1995buymid', 'buy', 'imfpurchase-midyear');">
        Buy Now
      </a>
      <!-- note -->
      <p class="note">1 Year Subscription / 1 PC</p>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <h2>Why Is IObit Malware Fighter PRO Worth Paying for?</h2>
    <dl class="top-message clearfix">
      <dd class="fl">
        <h3>Protect Your PC</h3>
        <ul>
          <li>Latest Bitdefender anti-virus engine together with IObit <br> anti-malware engine keeps 203 million threats away. </li>
          <li>Detect threats in real-time before they do any harm, like those <br> hide in USB drive or try to hack camera.</li>
          <li>With auto-updated database, emerging threats and variants <br> would be unable to infect your PC. </li>
        </ul>
      </dd>
      <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-top.png" alt=""></dt>
    </dl>
    <dl class="bottom-message clearfix">
      <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-bottom.png" alt=""></dt>
      <dd class="fr">
        <h3>Protect Your Privacy</h3>
        <ul>
          <li>Ransomware can’t break into your computer and encrypt your <br> important files.</li>
          <li>Protect your personal data with password so no one can gain <br> access without permission.</li>
          <li>Automatically clear browsing trace for you to protect your online privacy.</li>
        </ul>
      </dd>
    </dl>
  </div>
</div>
<!-- end feature -->

<!-- benefits-->
<div class="benefits">
  <div class="wrapper clearfix">
    <span class="arrow"></span>
    <h2>Of Course There Are More Benefits That You Can Enjoy:</h2>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      <dd>Fast Scanning Speed</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
      <dd>Boot-time Disk Protection</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
      <dd>Remove Ads</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
      <dd>Block Phishing Websites</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
      <dd>Download Protection</dd>
    </dl>
  </div>
</div>
<!-- end benefits -->

<!-- container -->
<div class="container">
  <!-- gifts -->
  <div class="gifts clearfix">
    <div class="wrapper">
      <h2>Free Mid-year Gifts Help to Optimize & Protect PC as Well</h2>
      <dl class="clearfix sd">
        <dt><img src="<?php echo $pResUrl;?>images/gifts-sd.png" alt="Smart Defrag PRO 6"></dt>
        <dd>
          <p><strong>$0</strong> <del>$19.99</del></p>
          <p><span>1 Y / 1 PC</span></p>
          <p class="describe">
            Maximize Hard Drive <br>
            Optimization for Faster PC
          </p>
        </dd>
      </dl>
      <dl class="clearfix pf">
        <dt><img src="<?php echo $pResUrl;?>images/gifts-pf.png" alt="Protected Folder"></dt>
        <dd>
          <p><strong>$0</strong> <del>$19.95</del></p>
          <p><span>1 Y / 1 PC</span></p>
          <p class="describe">
            Never Worry about Data Theft <br>
            or Privacy Leaks!
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end gift -->

  <!-- service -->
  <div class="service wrapper clearfix">
    <dl class="fl clearfix">
      <dt class="fl"><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
      <dd class="fl">
        <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
        <p>
          We’re confident that activating PRO edition will protect your <br>
          PC all-round for affordable price!
        </p>
      </dd>
    </dl>
    <dl class="fr">
      <dd><h4>We accept</h4></dd>
      <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
    </dl>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer wrapper">
    <dl>
      <dt>Note:</dt>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
  <!-- end footer -->
</div>
<!-- end container -->

<!-- float -->
<div class="float">
  <div class="wrapper clearfix">
    <div class="left-message">
      <img class="box" src="<?php echo $pResUrl;?>images/float-box.png" alt="IObit Malware Fighter PRO">
      <img class="off" src="<?php echo $pResUrl;?>images/float-off.png" alt="50% off">
      <img class="gift" src="<?php echo $pResUrl;?>images/float-gift.png" alt="Smart Defrag PRO 6 + Protected Folder">
    </div>
    <!--  middle-mesasge-->
    <div class="middle-message">
      <!-- countdown -->
      <div class="number">
        <i class="all-icons"></i> Hurry up,
        <div class="countdown clearfix">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        gift packs left only!
      </div>
      <!-- progress -->
      <div class="progress-bar">
        <div class="bar">
          <span></span>
        </div>
      </div>
    </div>
    <!-- right-message -->
    <div class="right-message">
      <!-- price -->
      <p class="price">$<strong>19</strong>.95 <del> $79.89</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=imf7sdpf1995&ref=imfsdpf1995midyear<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
         onclick="ga('send', 'event', 'imf1995buymid', 'buy', 'imfpurchase-midyear');">
        Buy Now
      </a>
    </div>
  </div>
</div>
<!-- float -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  var soldout = {
    bannerGift: "<?php echo $pResUrl;?>images/banner-gift-soldout.png",
    bannerTitle: "Powerful Anti-malware Software",
    floatGift: "<?php echo $pResUrl;?>images/float-gift-soldout.png",
    del: "$39.95",
    href: "https://www.iobit.com/buy.php?product=imf7&ref=imf1995midyear<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf",
    ga: "ga('send', 'event', 'imf1995buymid', 'buy', 'imfpurchase-midyearsold');"
  }
</script>
</body>
</html>