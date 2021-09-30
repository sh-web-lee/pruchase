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
  $c_name = 'enascumid_p' . $date;
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
  <title>40% OFF Advanced SystemCare Ultimate + Free Mid-year Gifts</title>
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
      <img class="box" src="<?php echo $pResUrl;?>images/banner-box.png" alt="Advanced SystemCare Ultimate">
      <img class="off" src="<?php echo $pResUrl;?>images/banner-off.png" alt="40% off">
      <img class="gift" src="<?php echo $pResUrl;?>images/banner-gift.png" alt="Smart Defrag PRO 6 + Protected Folder">
    </div>
    <!-- right-message -->
    <div class="right-message">
      <h3>All-in-one PC Utility + 2 Free Gifts</h3>
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
      <p class="price">$<strong>29</strong>.99 <del> $89.93</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=ascu12sdpf2999&ref=ascusdpf2999midyear<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_ascu"
         onclick="ga('send', 'event', 'ascu2999buymid', 'buy', 'ascupurchase-midyear');">
        Buy Now
      </a>
      <!-- note -->
      <p class="note">1 Year Subscription / 3 PCs</p>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <h2>Why Is Advanced SystemCare Ultimate Worth Paying for?</h2>
    <dl class="top-message clearfix">
      <dd class="fl">
        <h3>Protect PC & Privacy</h3>
        <ul>
          <li>Quickly identify and remove threats with Bitdefender engine <br> and IObit anti-ransomware engine.</li>
          <li>Prevent computer from being infected with strong <br> real-time protection.</li>
          <li>Stop untrusted programs attempting to access your <br> personal data.</li>
          <li>Automatically clear online trace for you to avoid privacy breach.</li>
        </ul>
      </dd>
      <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-top.png" alt=""></dt>
    </dl>
    <dl class="bottom-message clearfix">
      <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-bottom.png" alt=""></dt>
      <dd class="fr">
        <h3>Clean & Speed up PC</h3>
        <ul>
          <li>1-click to release disk space by removing junk files, useless shortcuts etc.</li>
          <li>Prevent system crash and improve pc performance by getting rid of <br> registries and cleaning RAM automatically.</li>
          <li>Optimize browser settings to accelerate internet connection to <br> 300%* faster.</li>
          <li>Quickly disable unnecessary startup items for boost PC startup <br> to 200%* faster.</li>
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
      <dd>Remove Ads</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
      <dd>Anti-cryptocurrency mining</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
      <dd>Disguise Digital Fingerprint</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
      <dd>Fix System Weakness</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
      <dd>Capture Intruders</dd>
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
          We’re confident that activating PRO edition will fully protect <br>
          and optimize your computer for affordable price!
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
      <dd>*.Data may vary based on different system or computer.</dd>
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
      <img class="box" src="<?php echo $pResUrl;?>images/float-box.png" alt="Advanced SystemCare Ultimate">
      <img class="off" src="<?php echo $pResUrl;?>images/float-off.png" alt="40% off">
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
      <p class="price">$<strong>29</strong>.99 <del> $89.93</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=ascu12sdpf2999&ref=ascusdpf2999midyear<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_ascu"
         onclick="ga('send', 'event', 'ascu2999buymid', 'buy', 'ascupurchase-midyear');">
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
    bannerTitle: "All-in-one PC Utility",
    floatGift: "<?php echo $pResUrl;?>images/float-gift-soldout.png",
    del: "$49.99",
    href: "https://www.iobit.com/buy.php?product=ascultimate12&ref=ascu2999midyear<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_ascu",
    ga: "ga('send', 'event', 'ascu2999buymid', 'buy', 'ascupurchase-midyearsold');"
  }
</script>
</body>
</html>