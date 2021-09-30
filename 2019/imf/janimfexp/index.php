<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='enimfexp'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>0){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
    }else{
      $packsNum=0;
      setcookie($cName,$packsNum);
    }
  }else{
    $packsNum=rand(48,55);
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

function paramDeal($num,$str){
  return (intval($num)>0)?('<p ><span class="dataNum">'.number_format(intval($num)).'</span> '.$str.'</p>'):'<p><span class="dataNum"></span> &nbsp;</p>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>55% OFF to Get IObit Malware Fighter PRO</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Anton|Montserrat|Open+Sans:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <!-- banner-bg -->
  <div class="bg">
    <div class="bgl"></div>
    <div class="bgr"></div>
    <div class="bgb"></div>
  </div>
  <div class="wrapper upper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      <span>Your registered IObit Malware Fighter Pro has expired!</span>
      Welcome Back and We Miss You
    </h1>
    <!-- imf-box -->
    <div class="box fl">
      <img src="<?php echo $pResUrl;?>images/banner-imf.png" alt="IObit Malware Fighter 6 Pro">
      <span class="off"></span>
    </div>
    <!-- imf-message -->
    <div class="message fr">
      <!-- hint -->
      <p class="hint">55% OFF Special Offer Has Ended. Don't Miss Out the 50% OFF!</p>
      <!-- message-title -->
      <h3>
        IObit Malware Fighter 6 Pro
        <span>1 Year Subscription / 3 PCs</span>
      </h3>
      <!-- price -->
      <p class="price">$<strong>23.99</strong> <del>$54.95</del></p>
      <!-- countdown -->
      <p class="countdown">
        Hurry, only <strong class="packsNum"><?php echo $packsNum ?></strong> left at this cost!
      </p>
      <!-- progressbar -->
      <div class="progressbar">
        <div class="bar">
          <p></p>
        </div>
      </div>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=imf63pc&ref=imf63pc2399expb&aff=<?php echo $_GET['aff']?>&refs=purchase_imf&tw=-8"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-exp');">
        Renew Now
      </a>
      <!-- timer -->
      <span class="timer"></span>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- feature-title -->
    <h3>
      <span>Since Being with You,</span>
      What Did IObit Malware Fighter Pro Do for You
    </h3>
    <!-- feature-list -->
    <div class="list fl">
      <!-- 01  -->
      <dl class="fl">
        <dt>Triple Protection</dt>
        <dd>
          <?php echo paramDeal($_GET['fileto'],'threats removed')?>
        </dd>
        <dd>
          Effectively detect various <br>
          threats with three scanning engines.
        </dd>
      </dl>
      <!-- 02  -->
      <dl class="fr">
        <dt>Block Ransomware Attack</dt>
        <dd>
          <?php echo paramDeal($_GET['rsto'],'attack(s) blocked')?>
        </dd>
        <dd>
          Proactively stop ransomware trying <br>
          to encrypt your files.
        </dd>
      </dl>
      <!-- 03  -->
      <dl class="fl">
        <dt>Protect Privacy Online</dt>
        <dd>
          <?php echo paramDeal($_GET['traceto'],'traces removed')?>
        </dd>
        <dd>
          Auto clean surfing traces <br>
          to stop harmful tracking.
        </dd>
      </dl>
      <!-- 04  -->
      <dl class="fr">
        <dt>Safeguard Camera</dt>
        <dd>
          <?php echo paramDeal($_GET['camto'],'accesses detected')?>
        </dd>
        <dd>
          Detect and notify you when <br>
          someone try to access your camera.
        </dd>
      </dl>
      <!-- 05  -->
      <dl class="fl">
        <dt>Ensure Fast and Safe Surfing</dt>
        <dd>
          <?php echo paramDeal($_GET['adsto'],'ads blocked')?>
        </dd>
        <dd>
          Block annoying ads on web <br>
          pages in browser.
        </dd>
      </dl>
      <!-- 06  -->
      <dl class="fr">
        <dt>Protect Download</dt>
        <dd>
          <?php echo paramDeal($_GET['dlto'],'downloads protected')?>
        </dd>
        <dd>
          Scan download files to keep your PC <br>
          away from malicious files.
        </dd>
      </dl>
    </div>
    <!-- feature-computer -->
    <img class="computer fr" src="<?php echo $pResUrl;?>images/computer.png" alt="">
  </div>
</div>
<!-- feature end -->

<!-- comparison start -->
<div class="comparison">
  <div class="wrapper">
    <!-- comparison-title -->
    <h3>
      <span>Without IObit Malware Fighter Pro, </span>
      What Will You Lose
    </h3>
    <!-- table -->
    <table cellpadding="0" cellspacing="0" border="0" width="1020" valign="middle" align="left">
      <!-- 01 -->
      <tr>
        <td class="w82"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""></td>
        <td class="w732">
          <strong>Bitdefender Anti-virus Engine</strong>
          Increase threats detection rate with 10 times larger database.
        </td>
        <td class="w206">
          <p><i></i> Unavailable</p>
        </td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="w82"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""></td>
        <td class="w732">
          <strong>IObit Anti-ransomware Engine</strong>
          Prevent you from ransomware attack.
        </td>
        <td class="w206">
          <p><i></i> Unavailable</p>
        </td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="w82"><img src="<?php echo $pResUrl;?>images/icon03.png" alt=""></td>
        <td class="w732">
          <strong>Auto Clean Harmful Cookies</strong>
          Prevent you from being tracked.
        </td>
        <td class="w206">
          <p><i></i> Unavailable</p>
        </td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="w82"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""></td>
        <td class="w732">
          <strong>Safeguard Your Camera</strong>
          Stop hackers from peeping at you via camera.
        </td>
        <td class="w206">
          <p><i></i> Unavailable</p>
        </td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="w82"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""></td>
        <td class="w732">
          <strong>USB Disk Guard</strong>
          Avoid unknown threats from removable disk.
        </td>
        <td class="w206">
          <p><i></i> Unavailable</p>
        </td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="w82"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""></td>
        <td class="w732">
          <strong>Safe Box</strong>
          Protect your important data from suspicious access by hackers.
        </td>
        <td class="w206">
          <p><i></i> Unavailable</p>
        </td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="w82"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""></td>
        <td class="w732">
          <strong>Auto Update</strong>
          Automatic update to the latest version.
        </td>
        <td class="w206">
          <p><i></i> Unavailable</p>
        </td>
      </tr>
    </table>
  </div>
  <!-- matter -->
  <span class="matter-l"></span>
  <span class="matter-r"></span>
</div>
<!-- comparison end -->

<!-- benfits start -->
<div class="benfits">
  <div class="wrapper">
    <!-- benfits title -->
    <h3>
      Now Come Back with IObit Malware Fighter Pro
      <span>Unlock the following exclusive features for more complete protection</span>
    </h3>
    <!-- details -->
    <!-- 01 -->
    <dl class="fl">
      <dt><img src="<?php echo $pResUrl;?>images/benfits01.png" alt=""></dt>
      <dd>
        <strong>10X</strong> Larger Database
      </dd>
    </dl>
    <!-- 02 -->
    <dl class="fl">
      <dt><img src="<?php echo $pResUrl;?>images/benfits02.png" alt=""></dt>
      <dd>
        <strong>3</strong> Scanning Engines
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="fl">
      <dt><img src="<?php echo $pResUrl;?>images/benfits03.png" alt=""></dt>
      <dd>
        Hacker Prevention
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="fl">
      <dt><img src="<?php echo $pResUrl;?>images/benfits04.png" alt=""></dt>
      <dd>
        Privacy Protection
      </dd>
    </dl>
    <!-- clear float -->
    <div class="clear"></div>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=imf63pc&ref=imf63pc2399expb&aff=<?php echo $_GET['aff']?>&refs=purchase_imf&tw=-8"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-exp');">
      Renew Now & Save 55%
    </a>
    <!-- attention -->
    <p>1 Year Subscription / 3 PCs</p>
  </div>
</div>
<!-- benfits end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>Trusted by 5,500,000 Users</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="software.informer"></dt>
          <dd>
            <h2>Media Review</h2>
            <p>
              The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similartools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.
            </p>
            <cite>software.informer</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              "I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter. I would recommend that they forget the rest and get the best which is IObit Malware Fighter."
            </p>
            <cite>David Cassidy</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.
            </p>
            <cite>Gelu Batir</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- award start -->
<div class="award">
  <div class="wrapper">
    <h3>Trusted and awarded by these medias</h3>
    <img src="<?php echo $pResUrl;?>images/award-icons.jpg" alt="">
  </div>
</div>
<!-- award end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>
          <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
          <p>
            We’re confident that activating PRO edition will ensure your PC security for protection price!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>We accept</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Note:</dt>
        <dd>
          *.Data may vary based on different system or computer.
        </dd>
        <dd>
          *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
        </dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div class="floatlayer">
  <div class="wrapper clearfix">
    <!-- box -->
    <img class="box fl" src="<?php echo $pResUrl;?>images/floatlayer-imf.png" alt="IObit Malware Fighter 6 Pro">
    <!-- message -->
    <div class="message fl">
      <!-- countdown -->
      <p class="countdown">
        <span class="viewNum"><?php echo $viewNum;?></span> visitors now, only <strong class="packsNum"><?php echo $packsNum ?></strong> left at this cost!
      </p>
      <!-- progressbar -->
      <div class="progressbar">
        <div class="bar">
          <p></p>
        </div>
      </div>
    </div>
    <!-- price+buybtn -->
    <div class="else fr">
      <!-- price -->
      <p class="price">$<strong>23.99</strong> <del>$54.95</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=imf63pc&ref=imf63pc2399expb&aff=<?php echo $_GET['aff']?>&refs=purchase_imf&tw=-8"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-exp');">
        Get It Now
      </a>
    </div>
    <!-- timer -->
    <span class="timer"></span>
  </div>
</div>
<!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script>
  var tw = MApp(2.2).datetime.getTimeZone();
  var _href = "https://www.iobit.com/buy.php?product=imf63pc2599&ref=imf63pc2599expb&aff=<?php echo $_GET['aff']?>&refs=purchase_imf&tw=-8";
  var _ga = "ga('send', 'event', 'imf2399buy', 'buy', 'imfpurchase-exp');";
</script>
</body>
</html>