<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
include $pRootUrl . 'include/common.inc.php';
$viewNum=rand(115,156);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='usbimf'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 97;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>60% OFF to Get IObit Malware Fighter PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com" target="_blank" class="logo" target="_blank">IObit</a>
      <h1>Get Your USB Drive and Computer Protected Together</h1>
      <div class="box three-pcs">
        <div class="img-box"></div>
        <p>Now: <strong>$21.99</strong> <del>$54.95</del></p>
        <a href="https://www.iobit.com/buy.php?product=imf73pc2199&ref=imf3pcusbguard2019<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfusbbuy', 'buy', 'imfpurchase-201904usb');" class="buybtn"><span>Activate Now</span></a>
        <div class="number">
          Hurry, only  
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          left now    
        </div>
      </div>
      <div class="box one-pc">
        <div class="img-box"></div>
        <p>Now: <strong>$19.95</strong> <del>$39.95</del></p>
        <a href="https://www.iobit.com/buy.php?product=imf71pc&ref=imf1pcusbguard2019<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfusb1pcbuy', 'buy', 'imfpurchase-201904usb1pc');" class="buybtn border"><span>Activate Now</span></a>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <!-- feature -->
  <div class="feature feature01 wrapper clearfix">
    <h2>WHY DO I NEED <br> USB DRIVE GUARD WHEN CONNECTING TO COMPUTER</h2>
    <div class="img-box"></div>
    <dl class="list01">
      <dt>Virus Spread to USB Drive</dt>
      <dd>While bringing data around, your USB drive may have <br> connected to many computers. There is a chance that <br> virus from an infected computer spread to USB drive.</dd>
    </dl>
    <dl class="list02">
      <dt>Your PC Got Infected</dt>
      <dd>Once the USB driver with virus plugged in, your <br> computer may not only lose the data stored in it, but <br> also may become fragile to other threats. </dd>
    </dl>
  </div>
  <!-- feature -->
  <div class="feature feature02 ">
    <div class="wrapper">
      <h2>HOW USB GUARD HELPS <br> GUARANTEE COMPUTER AND USB DRIVE SAFETY </h2>
      <div class="img-box"></div>
      <dl class="list01">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>"> 1-click Solution</dt>
        <dd>Once threats detected, you <br> can quickly remove them <br> before connecting with 1-click. </dd>
      </dl>
      <dl class="list02">
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>"> Auto Virus-scanning </dt>
        <dd>Automatically scan the <br> plugged USB drive in case <br> any virus hides in it.</dd>
      </dl>
    </div>
  </div>
  <!-- benfits -->
  <div class="feature03">
    <h2>MORE BENEFITS <br> YOU CAN GET FROM IOBIT MALWARE FIGHTER 7 PRO</h2>
    <div class="message">
      <div class="wrapper">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list03.png')?>"></dt>
          <dd><strong>Latest Bitdefender Engine</strong></dd>
          <dd>203,000,000+ security <br> threats can be quickly <br> detected and kept away.</dd>
          <dd><span>PRO ONLY</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list04.png')?>"></dt>
          <dd><strong>Stop Ransomware attacks</strong></dd>
          <dd>Any suspicious actions <br> trying to encrypt your files <br> would be stopped.</dd>
          <dd><span>PRO ONLY</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list05.png')?>"></dt>
          <dd><strong>Protect Files with Password</strong></dd>
          <dd>Hackers can’t access to <br> your personal data with <br> password.</dd>
          <dd><span>PRO ONLY</span></dd>
        </dl>
         <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/list06.png')?>"></dt>
          <dd><strong>No Malicious Tracking</strong></dd>
          <dd>Private online traces <br> would be deleted <br> automatically.</dd>
          <dd><span>PRO ONLY</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->
    <!-- awards -->
  <div class="awards">
    <div class="wrapper">
      <dl class="opswat">
        <dt><img src="<?php echo $pResUrl; ?>images/opswat.png" alt=""></dt>
        <dd>
          <h3>Opswat Certified</h3>
          <p>
            IObit Malware Fighter 7 receives Silver certification <br> from <a href="javascript::">OPSWAT <span>OPSWAT has partnered with AV-TEST, AV-Comparatives, Virus Bulletin, SE Labs, SKD Labs and ICSA Labs to test the performance, protection, and usability of anti-malware applications.</span></a> in their anti-malware quality test.
          </p>
        </dd>
      </dl>
      <dl class="awarded">
        <dt>Also trusted and awarded by</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/award.png" alt=""></dd>
      </dl>

    </div>
  </div>
  <!-- review -->
  <div class="review wrapper">
    <div class="reviews">
      <h2>User Review</h2>
      <h3>"  It is lot quicker at scanner and easy to use."</h3>
      <p>"I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter. I would recommend that they forget the rest and get the best which is IObit Malware Fighter."</p>
    </div>
    <div class="reviews active">
      <h2>Media Review</h2>
      <h3>"It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots. "</h3>
      <p>The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similartools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.</p>
    </div>
    <div class="reviews">
      <h2>User Review</h2>
      <h3>" It scans my laptop without affecting its performance while I also recommended this product to two of my friends."</h3>
      <p>I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.</p>
    </div>
    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy"><span></span></div>
        <strong>David Cassidy</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/software.png" alt="software.informer.com"><span></span></div>
        <strong>software.informer</strong>
      </li>
      <li>
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir"><span></span></div>
        <strong>Gelu Batir</strong>
      </li>
    </ul>
  </div>
  <div class="bottom">
      <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
          <p>
           We’re confident that activating PRO edition will protect your PC all-round for affordable price!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>We accept</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Note: </dt>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"></div>
      <div class="message">
        <h2>All-round Protection for Whole Family! </h2>
        <div class="number">
          Hurry, only  
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          left now    
        </div>
      </div>
      <!-- buybtn -->
     <dl>
       <dt>Now: <strong>$21.99</strong> <del>$54.95</del></dt>
       <dd><a href="https://www.iobit.com/buy.php?product=imf73pc2199&ref=imf3pcusbguard2019<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfusbbuy', 'buy', 'imfpurchase-201904usb');" class="buybtn"><span>Activate Now</span></a></dd>
     </dl>
    </div>
  </div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>