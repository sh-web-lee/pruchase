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
if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_sd_2016xmassale';
include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Save 70% on Smart Defrag PRO to Enjoy Maximum Hard Drive Performance – IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
  <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner -->
  <div class="banner">
    <div class="container">
      <div class="wrapper">
        <!-- header -->
        <div class="header">
           <a href="http://www.iobit.com/" target="_blank" class="logo">IObit</a>
           <div class="title">
             <h1> Smart BIG Christmas Sale</h1>
             <p>Up to 70% OFF & Gift Pack</p>
           </div>
        </div>
        <!-- activity -->
        <div class="activity">
          <div class="steps mainstep">
            <h2>First 2,000 Orders</h2>
            <p>70% OFF + Free Gift Pack</p>
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
            <div class="imgcase"><img src="<?php echo $pResUrl; ?>images/boxshot-sd.png" alt=""></div>
            <dl>
              <dt><strong>Smart Defrag 5 PRO</strong></dt>
              <dd>1 Year / 1 PC   <strong>$19.99</strong> <del>$29.99</del></dd>
            </dl>
            <ul>
              <li><strong>SD5 PRO Extra 2 PCs<span>$0</span></strong> <del>$19.99</del></li>
              <li><strong>AMC Security PRO<span>$0</span></strong> <del>$19.99</del></li>
            </ul>
          </div>
          <div class="checkout">
            <dl>
              <dt><strong>$19.99</strong> <span><del>$69.97</del> <em>70% OFF</em></span></dt>
              <dd><a href="https://www.iobit.com/buy.php?product=sd53pcsamc_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_sd&tw=-8" onclick="ga('send', 'event', 'sdbuy', 'buy', 'enaffsd2016xmassale');" class="activebtn"><div class="inner"><i></i><span>Activate Now</span></div></a></dd>
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
    <h2>Maximize Hard Drive Performance & Speed Up Your PC with SD 5 PRO</h2>
    <div class="snapshoot">
      <img src="<?php echo $pResUrl; ?>images/snapshoot.jpg" alt="">
    </div>
    <div class="benfits-list clearfix">
      <div class="list">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-01.png" alt="">
        <dl>
          <dt>New Ultra-fast Engine</dt>
          <dd>Defragment files more efficiently and thoroughly in less time</dd>
        </dl>
      </div>
      <div class="list">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-02.png" alt="">
        <dl>
          <dt>Up to 200% Faster *</dt>
          <dd>Accelerate file access speed & game launching speed with Large File Defrag </dd>
        </dl>
      </div>
      <div class="list feed">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-03.png" alt="">
        <dl>
          <dt>Auto Smart Defrag</dt>
          <dd>Automatically and intelligently defragment selected files and disks without interruption</dd>
        </dl>
      </div>
      <div class="list">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-04.png" alt="">
        <dl>
          <dt>Quicker PC Startup </dt>
          <dd>Enjoy quicker PC startup and top system running speed with Boot Time Defrag</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->
  <!-- gift-pack -->
  <div class="gift-pack wrapper">
    <h2>Christmas Free Gift Pack</h2>
    <div class="gift two-gift">
      <img src="<?php echo $pResUrl; ?>images/boxshot-sd-two.png" alt="">
      <dl>
        <dt>
          <strong>Smart Defrag PRO</strong>
          <b>$0</b> <del>$19.99</del>  1 Y / 2 PCs
        </dt>
        <dd>Get the Maximum Hard Drive Performance!</dd>
      </dl>
    </div>
    <div class="gift">
      <img src="<?php echo $pResUrl; ?>images/boxshot-amc.png" alt="">
      <dl>
        <dt>
          <strong>AMC Security PRO</strong>
          <b>$0</b> <del>$19.99</del>  1 Y / Multi Devices
        </dt>
        <dd> 200% Speed up and Fully Protect <br> your Android from any treats! </dd>
      </dl>
    </div>
  </div>
  <!-- end gift-pack -->
  <!-- mid-cart -->
  <div class="midcart">
    <div class="container">
      <div class="showcase">
        <div class="details">
          <div class="imgcase"><img src="<?php echo $pResUrl; ?>images/boxshot-sd.png" alt=""></div>
          <dl>
            <dt><strong>Smart Defrag 5 PRO</strong></dt>
            <dd>1 Year / 1 PC   <strong>$19.99</strong> <del>$29.99</del></dd>
          </dl>
          <ul>
            <li><strong>SD5 PRO Extra 2 PCs<span>$0</span></strong> <del>$19.99</del></li>
            <li><strong>AMC Security PRO<span>$0</span></strong> <del>$19.99</del></li>
          </ul>
        </div>
        <div class="checkout">
          <dl>
            <dt><strong>$19.99</strong> <span><del>$69.97</del> <em>70% OFF</em></span></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=sd53pcsamc_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_sd&tw=-8" onclick="ga('send', 'event', 'sdbuy', 'buy', 'enaffsd2016xmassale');" class="activebtn"><div class="inner"><i></i><span>Activate Now</span></div></a></dd>
            <dd>Hurry up, <span class="countNum">00</span> left today!</dd>
          </dl>
        </div>
      </div>      
    </div>
  </div>
  <!-- end mid-cart -->
  <!-- reviews -->
  <div class="media-rev wrapper">
    <h3>Media Review</h3>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/cnet.png" alt=""></dt>
      <dd>
        <strong>
          "IObit Smart Defrag is the best defragger we've tried yet."
        </strong>
      </dd>
      <dd>
        "IIObit Smart Defrag optimizes your PC to take full advantage of SSD performance while defragmenting your hard disks. Its SSD Trim tool automatically enables system tweaks that typically require experience to apply. Smart Defrag's updates include a new defrag engine, specialized Game Defrag, a cool new look, and many more language options (35 and counting)."
        <span>- Cnet</span>
      </dd>
    </dl>
  </div>
  <div class="user-rev wrapper">
      <div class="content">
        <h3>User Review</h3>
        <dl class="show">
          <dd>
            <h4>
              "Smart defrag is a very well behaved disk defrag software."
            </h4>
          </dd>
          <dd>
            "Smart defrag is a very well behaved disk defrag software, operating in the background whenever computer is idle so that you hardly notice it. As a result: drives are permanently defragmented allowing rapid access and less wear and tear. Smart defrag is the best Free disk defragmenter I've ever used and I'll definitely recommend it to my family and friends!"
          </dd>
        </dl>
        <dl>
          <dd><h4>"It is easy to use, must have utility, for your hard disc or SSD."</h4></dd>
          <dd>
            "I run a combination of RAID 0 SSDs and RAID 0 HDDs and use Smart Defrag Pro to analyse, defrag and keep my drives running at peak performance. As with all IObit software it is easy to install, use and very reliable. Just set it up and forget it. Smart Defrag has a very small memory foot print so it won't slow down your system. Definitely recommended!"
          </dd>
        </dl>
        <dl >
          <dd><h4>"Since using this fantastic software my desktop and my laptop are fast and save."</h4></dd>
          <dd>
            "I am a user of Smart defrag for many years. Since using this fantastic software my desktop and my laptop are fast and save. Together with advance system care ultimate you have a complete tool for keeping you system up to date, fast and secure.Using it every day without need to wait (pc closes itself) you keep your system in top condition even if you have no technical background!"
          </dd>
        </dl>
      </div>
      <ul class="users">
        <li class="active">
          <img src="<?php echo $pResUrl; ?>images/amnon.jpg" alt="">
          Amnon<span>2014</span>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.jpg" alt="">
          Edward Lee Ah Yen
          <span>2014</span>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/hans.jpg" alt="">
          Hans
          <span>2014</span>
        </li>
      </ul>
    </div>
  <!-- end reviews -->
  <dl class="annotation wrapper">
      <dt>Note:</dt>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      <dd>*.Data may vary based on different system or computer.</dd>
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
    <script src="<?php echo $pResUrl; ?>script/script.js"></script>
    <script>setTimeout('window.location.href="https://purchase.iobit.com/aff/en/sd/anniversarysale/index.php'+location.search+'"',5000);</script>
</div>
</body>
</html>