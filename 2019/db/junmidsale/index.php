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
  $c_name = 'endbmid_p' . $date;
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
  <title>70% OFF Driver Booster PRO + Free Mid-year Gifts</title>
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
    <h1>Special Offer for Our Valued User</h1>
    <!-- left-message -->
    <div class="left-message">
      <img class="box" src="<?php echo $pResUrl;?>images/banner-box.png" alt="Driver Booster PRO">
      <img class="off" src="<?php echo $pResUrl;?>images/banner-off.png" alt="70% off">
      <img class="gift" src="<?php echo $pResUrl;?>images/banner-gift.png" alt="Smart Defrag PRO 6 + Protected Folder">
    </div>
    <!-- right-message -->
    <div class="right-message">
      <h3>Auto Driver Updater + 2 Free Gifts</h3>
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
      <p class="price">$<strong>22</strong>.95 <del> $114.79</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=db6sdpf2295&ref=dbsdpf2295midyear<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
         onclick="ga('send', 'event', 'db2295buymid', 'buy', 'dbpurchase-midyear');">
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
    <h2>Why Is Driver Booster PRO Worth Paying for?</h2>
    <dl class="top-message clearfix">
      <dd class="fl">
        <h3>Easier to Update Drivers</h3>
        <ul>
          <li>Update over 3,000,000 outdated, missing or faulty PC drivers <br> to avoid system crashes.</li>
          <li><b>Automatically download, install and update</b> drivers without <br> disturbing your daily routine.</li>
          <li>Detect and fix device errors that may impact PC performance.</li>
        </ul>
      </dd>
      <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-top.png" alt=""></dt>
    </dl>
    <dl class="bottom-message clearfix">
      <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-bottom.png" alt=""></dt>
      <dd class="fr">
        <h3>Better Gaming Experience</h3>
        <ul>
          <li>Keep game components up-to-date to guarantee your games <br> run smoothly.</li>
          <li>Latest Game Ready Drivers boost game performance and fix bugs.</li>
          <li>Stop unnecessary processes to release RAM for better gaming <br> with just 1-click.</li>
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
      <dd>Fast Download Speed</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
      <dd>Auto Backup</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
      <dd>Fix Sound Issues</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
      <dd>WHQL Certified Drivers</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
      <dd>Support 5000+ Brands</dd>
    </dl>
  </div>
</div>
<!-- end benefits -->

<!-- container -->
<div class="container">
  <!-- gifts -->
  <div class="gifts clearfix">
    <div class="wrapper">
      <h2>Free Gifts Help Optimize & Protect PC for You</h2>
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
          We’re confident that activating PRO edition will fix all your <br>
          headache driver matters for affordable price!
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
      <img class="box" src="<?php echo $pResUrl;?>images/float-box.png" alt="Driver Booster PRO">
      <img class="off" src="<?php echo $pResUrl;?>images/float-off.png" alt="70% off">
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
      <p class="price">$<strong>22</strong>.95 <del> $114.79</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=db6sdpf2295&ref=dbsdpf2295midyear<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
         onclick="ga('send', 'event', 'db2295buymid', 'buy', 'dbpurchase-midyear');">
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
    bannerTitle: "Auto Driver Updater",
    floatGift: "<?php echo $pResUrl;?>images/float-gift-soldout.png",
    del: "$74.85",
    href: "https://www.iobit.com/buy.php?product=driverbooster6&ref=db2295midyear<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db",
    ga: "ga('send', 'event', 'db2295buymid', 'buy', 'dbpurchase-midyearsold');"
  }
</script>
</body>
</html>