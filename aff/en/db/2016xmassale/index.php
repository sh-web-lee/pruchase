<?php
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../../';
  }

if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='decxdb'.$date;
  if (empty($_COOKIE[$c_name])) {
    $packsNum = 77;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 3) {
        setcookie($c_name, 3, time() + 3600 * 24);
        $packsNum = $_COOKIE[$c_name];
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo $packsNum;
  exit;
}
if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_db_2016xmassale';
include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Save 82% on DB PRO and enjoy more stable PC performance with up-to-date drivers!</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner -->
  <div class="main">
  <div class="banner">
    <div class="container">
      <div class="wrapper">
        <!-- header -->
        <div class="header">
           <a href="http://www.iobit.com/" target="_blank" class="logo">IObit</a>
           <div class="title">
             <h1>Driver Booster Pre-Christmas Sale</h1>
             <p>Up to 82% OFF & Gift Pack</p>
           </div>
        </div>
        <!-- activity -->
        <div class="activity">
          <div class="steps mainstep">
            <h2>FIRST 2,000 ORDERS</h2>
            <p>82% OFF + Free Gift Pack</p>
            <div class="focus"></div>
            <em class="notice">Hurry up, <i class="countNum">00</i> left today!</em>
            <div class="progress">
              <div class="counter"><span class="countNum">00</span></div>
              <div class="bar-mask">
                <div class="progressbar"></div>
              </div>
              <em class="count"><i class="countNum">00</i> of 2,000 left</em>
            </div>
          </div>
          <div class="steps others">
            <h2>NEXT 3,000 ORDERS</h2>
            <p>40% OFF</p>
          </div>
          <div class="steps others">
            <h2>REST ALL ORDERS</h2>
            <p>10% OFF</p>
          </div>
        </div>
        <!-- end activity -->
        <div class="showcase">
          <div class="details">
            <div class="imgcase"><img src="<?php echo $pResUrl; ?>images/boxshot-db.png" alt=""></div>
            <dl>
              <dt><strong>Driver Booster 4 PRO</strong></dt>
              <dd>1 Year / 3 PCs   <strong>$24.95</strong> <del>$74.85</del></dd>
            </dl>
            <ul>
              <li><strong>Smart Defrag PRO<span>$0</span></strong> <del>$19.99</del></li>
              <li><strong>Protected Folder<span>$0</span></strong> <del>$19.99</del></li>
              <li><strong>AMC Security PRO<span>$0</span></strong> <del>$19.99</del></li>
            </ul>
          </div>
          <div class="checkout">
            <dl>
              <dt><strong>$24.95</strong> <span><del>$134.82</del> <em>82% OFF</em></span></dt>
              <dd><a href="http://www.iobit.com/buy.php?product=db4sdpfamc_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016xmassale');" class="activebtn"><div class="inner"><i></i><span>Activate Now</span></div></a></dd>
              <dd>Hurry up, <span class="countNum">00</span> left today!</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <!-- end banner -->
  <!-- payments -->
  <div class="paymanets wrapper">
    <dl>
      <dt>Accepted Payments</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/payments.png" alt=""></dd>
    </dl>
    <dl>
      <dt>Money Back Guarantee </dt>
      <dd><img src="<?php echo $pResUrl; ?>images/money-back-guarantee.png" alt=""></dd>
    </dl>
    <dl>
      <dt>Secure Payment</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dd>
    </dl>
  </div>
  <!-- end payments -->
  <!-- awards -->
  <div class="awards wrapper">
    <h2>Trusted and awarded by these medias</h2>
    <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
  </div>
  <!-- end awards -->
  <!-- benfits -->
  <div class="benfits wrapper">
    <h2>Get More Drivers & Enjoy Better Gaming and PC Performance with DB 4 PRO</h2>
    <div class="snapshoot">
      <img src="<?php echo $pResUrl; ?>images/snapshoot.jpg" alt="">
    </div>
    <div class="benfits-list clearfix">
      <div class="list">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-01.png" alt="">
        <dl>
          <dt>200% Larger Database</dt>
          <dd>Priority to update more outdated and rare drivers</dd>
        </dl>
      </div>
      <div class="list">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-02.png" alt="">
        <dl>
          <dt>200% Faster Download *</dt>
          <dd>Up to 200% faster driver download at system idle time</dd>
        </dl>
      </div>
      <div class="list feed">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-03.png" alt="">
        <dl>
          <dt>Auto & Safe</dt>
          <dd>Auto download and backup drivers for safe restore</dd>
        </dl>
      </div>
      <div class="list">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-04.png" alt="">
        <dl>
          <dt>VC Runtime, Adobe Flash, PhysX, OpenAL,DirectX, etc. </dt>
          <dd>Fix system issues caused by outdated drivers for better PC performance</dd>
        </dl>
      </div>
      <div class="list">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-05.png" alt="">
        <dl>
          <dt>Nvidia, Realtek, Intel, AMD, Broadcom, VIA,etc. </dt>
          <dd>Enjoy more smooth gaming & video playback</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->
  <!-- gift-pack -->
  <div class="gift-pack wrapper">
    <h2>Christmas Free Gift Pack</h2>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/boxshot-amc.png" alt=""></dt>
      <dd><strong>AMC Security PRO</strong></dd>
      <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / Multi Devices</dd>
      <dd>200% Speed up and Fully Protect your Android from any treats!</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/boxshot-sd.png" alt=""></dt>
      <dd><strong>Smart Defrag PRO</strong></dd>
      <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / 1 PC</dd>
      <dd>Get the Maximum Hard Drive Performance!</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/boxshot-pf.png" alt=""></dt>
      <dd><strong>Protected Folder</strong></dd>
      <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / 1 PC</dd>
      <dd>Never Worry about Data Theft or Privacy Leaks!</dd>
    </dl>
  </div>
  <!-- end gift-pack -->
  <!-- mid-cart -->
  <div class="midcart">
    <div class="container">
      <div class="showcase">
          <div class="details">
            <div class="imgcase"><img src="<?php echo $pResUrl; ?>images/boxshot-db.png" alt=""></div>
            <dl>
              <dt><strong>Driver Booster 4 PRO</strong></dt>
              <dd>1 Year / 3 PCs   <strong>$24.95</strong> <del>$74.85</del></dd>
            </dl>
            <ul>
              <li><strong>Smart Defrag PRO<span>$0</span></strong> <del>$19.99</del></li>
              <li><strong>Protected Folder<span>$0</span></strong> <del>$19.99</del></li>
              <li><strong>AMC Security PRO<span>$0</span></strong> <del>$19.99</del></li>
            </ul>
          </div>
          <div class="checkout">
            <dl>
              <dt><strong>$24.95</strong> <span><del>$134.82</del> <em>82% OFF</em></span></dt>
              <dd><a  href="http://www.iobit.com/buy.php?product=db4sdpfamc_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016xmassale');" class="activebtn"><div class="inner"><i></i><span>Activate Now</span></div></a></dd>
              <dd>Hurry up, <span class="countNum">78</span> left today!</dd>
            </dl>
          </div>
          <p><i><img src="<?php echo $pResUrl; ?>images/icon-guarantee.png" alt=""></i>100% 60-DAY MONEY BACK GUARANTEE</p>
        </div>        
    </div>
  </div>
  <!-- end mid-cart -->
   <!-- reviews -->
  <div class="reviews wrapper clearfix">
    <div class="review media">
      <h2>DB Media Review</h2>
      <div class="container">
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/cnet.jpg"></dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/fourandhalf-stars.jpg" alt="">
            <p>“Update system drivers with the greatest of ease.”</p>
          </dd>
        </dl>
          <dl class="gray">
            <dt><img src="<?php echo $pResUrl; ?>images/softpedia.png"></dt>
            <dd>
              <img src="<?php echo $pResUrl; ?>images/four-stars.png" alt="">
              <p>“Works fine and eliminates the problems created by incompatible drivers.”</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo $pResUrl; ?>images/softonic.png"></dt>
            <dd>
              <img src="<?php echo $pResUrl; ?>images/fourandhalf-stars.jpg" alt="">
              <p>“Simple and effective solution for quickly updating outdated drivers.”</p>
            </dd>
          </dl>
      </div>
    </div>
    <div class="review users">
        <h2>User Review</h2>
        <dl>
            <dt>Mike Goggans</dt>
            <dd>
                <p>I had 10 drivers that were out of date and the Driver Booster updated them all perfectly.</p>
                <img src="<?php echo $pResUrl; ?>images/mike-goggans.jpg" alt="">
            </dd>
        </dl>
        <dl class="white">
            <dt>Vince Lewis</dt>
            <dd>
                <p>Driver Booster did it all with just one click of the mouse. 19 drivers were updated in no time at all.</p>
                <img src="<?php echo $pResUrl; ?>images/vince-lewis.jpg" alt="">
            </dd>
        </dl>
        <dl>
            <dt>Wayne Bowler</dt>
            <dd>
                <p>It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!</p>
                <img src="<?php echo $pResUrl; ?>images/wayne-bowler.jpg" alt="">
            </dd>
        </dl>
    </div>
  </div>
  <!-- end reviews -->
  <dl class="annotation wrapper">
      <dt>Note:</dt>
      <dd>*.Data may vary based on different system or computer.</dd>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      <dd>*.License for AMC Security Full Version with in-app ads.</dd>
    </dl>
   <div class="footer">    
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
  <!-- float -->
  <div class="float">
      <div class="inner">
        <p>Hurry up, only <strong  class="countNum">00</strong> left</p>
      </div>
  </div>
  <div class="pop-up">
      <div class="pop-main">
          <div class="pop-box">
              <h2>Note:</h2>
              <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
              <p>You will be redirected to the latest IObit promotion page automatically.</p>
          </div>
      </div>
  </div>
  <script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/script.min.js"></script>
      <script>setTimeout('window.location.href="https://purchase.iobit.com/aff/en/db/2017general/index.php'+location.search+'"',5000);</script></div>
</body>
</html>