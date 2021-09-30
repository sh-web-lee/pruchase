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
  $c_name = 'endbhall' . $date;
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
  echo $packsNum;
  exit;
}

$refStr='';
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Save up to 80% on Driver Booster 6 PRO</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <!-- flower -->
  <div class="flower clearfix">
    <img class="fl" src="<?php echo $pResUrl;?>images/banner-left.png" alt="">
    <img class="fr" src="<?php echo $pResUrl;?>images/banner-right.png" alt="">
  </div>
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      Merry Christmas & Happy New Year
      <span>Holiday Special Offer - Once Per Year Only!</span>
    </h1>
    <!-- left-message -->
    <div class="left-message fl">
      <img class="box" src="<?php echo $pResUrl;?>images/banner-db.png" alt="">
      <img class="balloon" src="<?php echo $pResUrl;?>images/balloon.png" alt="">
      <!-- reduce -->
      <img class="reduce" src="<?php echo $pResUrl;?>images/reduce.png" alt="">
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <!-- title -->
      <h3>2,000 limited quantities available, <span class="soldNum">1,997</span> sold now</h3>
      <!-- number -->
      <div class="number">
        <p>Rush, only</p>
        <ul class="surplus clearfix">
          <li><p class="one">0123456789</p></li>
          <li><p class="two">0123456789</p></li>
          <li><p class="three">0123456789</p></li>
          <li><p class="four">0123456789</p></li>
        </ul>
        <p>seats left</p>
      </div>
      <!-- price -->
      <p class="price">Now <strong>$24.95</strong> <del>$114.83</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=db5decxmas<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-db510');">
        ACTIVATE NOW
      </a>
      <!-- attention -->
      <p class="attention">1 Year Subscription / 3 PCs</p>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- comparison start -->
<div class="comparison wrapper">
  <!-- title -->
  <h2>Upgrade to Driver Booster 6 PRO Now</h2>
  <p>Make <b>Driver Update Easier</b> and <b>Game Performance Faster</b></p>
  <!-- table -->
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <td class="w453"></td>
        <td class="w304 grey">Your Current Version</td>
        <td class="space"></td>
        <td class="w333 yellow">Driver Booster 6 PRO</td>
      </tr>
    </thead>
    <tbody>
      <tr class="head noborder">
        <td class="w453">SMART DRIVER UPDATE</td>
        <td class="w304"></td>
        <td class="space"></td>
        <td class="w343"></td>
      </tr>
      <!-- 01 -->
      <tr>
        <td class="w453">
          <p>
            <img src="<?php echo $pResUrl;?>images/icon01.png" alt="">
            Driver database
            <sup class="improved">IMPROVED</sup>
          </p>
        </td>
        <td class="w304 grey">1,000,000+</td>
        <td class="space"></td>
        <td class="w343 yellow">3,000,000+</td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="w453">
          <p>
            <img src="<?php echo $pResUrl;?>images/icon02.png" alt="">
            Driver download speed
            <sup class="improved">IMPROVED</sup>
          </p>
        </td>
        <td class="w304 grey">Limited</td>
        <td class="space"></td>
        <td class="w343 yellow">Unlimited</td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="w453">
          <p>
            <img src="<?php echo $pResUrl;?>images/icon03.png" alt="">
            Auto update outdated drivers
            <sup class="improved">IMPROVED</sup>
          </p>
        </td>
        <td class="w304 grey"><i></i></td>
        <td class="space"></td>
        <td class="w343 yellow"><i></i></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="w453">
          <p>
            <img src="<?php echo $pResUrl;?>images/icon04.png" alt="">
            Auto back up drivers against accidents
          </p>
        </td>
        <td class="w304 grey"><i></i></td>
        <td class="space"></td>
        <td class="w343 yellow"><i></i></td>
      </tr>
      <!-- 05 -->
      <tr class="noborder">
        <td class="w453">
          <p>
            <img src="<?php echo $pResUrl;?>images/icon05.png" alt="">
            Fix device errors
          </p>
        </td>
        <td class="w304 grey"><i></i></td>
        <td class="space"></td>
        <td class="w343 yellow"><i></i></td>
      </tr>
      <tr class="head noborder">
        <td class="w453">BETTER GAME EXPERIENCE</td>
        <td class="w304"></td>
        <td class="space"></td>
        <td class="w343"></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="w453">
          <p>
            <img src="<?php echo $pResUrl;?>images/icon06.png" alt="">
            Boost game performance
            <sup class="new">NEW</sup>
          </p>
        </td>
        <td class="w304 grey"><i></i></td>
        <td class="space"></td>
        <td class="w343 yellow"><i></i></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="w453">
          <p>
            <img src="<?php echo $pResUrl;?>images/icon07.png" alt="">
            Check game components
          </p>
        </td>
        <td class="w304 grey"><i></i></td>
        <td class="space"></td>
        <td class="w343 yellow"><i></i></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="w453">
          <p>
            <img src="<?php echo $pResUrl;?>images/icon08.png" alt="">
            Priority to check game ready drivers
            <sup class="new">NEW</sup>
          </p>
        </td>
        <td class="w304 grey"><i></i></td>
        <td class="space"></td>
        <td class="w343 yellow"><i></i></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td class="w453"></td>
        <td class="w304"></td>
        <td class="space"></td>
        <td class="w343"></td>
      </tr>
    </tfoot>
  </table>
</div>
<!-- comparison end -->

<!-- feature start -->
<div class="feature wrapper">
  <div class="flex clearfix">
    <!-- larger -->
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/arrow.png" alt=""></dt>
      <dd>
        <img src="<?php echo $pResUrl;?>images/feature-percent200.png" alt="">
        <p>
          <span>Larger</span><br>
          Driver Database
        </p>
      </dd>
    </dl>
    <!-- quicker -->
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/arrow.png" alt=""></dt>
      <dd>
        <img src="<?php echo $pResUrl;?>images/feature-percent150.png" alt="">
        <p>
          <span>Quicker</span><br>
          Driver Download
        </p>
      </dd>
    </dl>
    <!-- faster -->
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/arrow.png" alt=""></dt>
      <dd>
        <img src="<?php echo $pResUrl;?>images/feature-percent28.png" alt="">
        <p>
          <span>Faster</span><br>
          Game Performance
        </p>
      </dd>
    </dl>
  </div>
  <hr>
  <!-- buybtn -->
  <a class="buybtn"
     href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=db5decxmas<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
     onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-db510');">
    Upgrade Now
  </a>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <!-- title -->
    <h2>Trusted by 150,000,000 Users</h2>
    <!-- container -->
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>Media Review</h2>
            <p>
              "IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best. Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack."
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt=""></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              "With Driver Booster, I can easily know which devices drivers are out of date and can easily update them. Besides, it helps me to fix sound error, network error, device error etc...I don't believe it before I using, but after using it I really love it..just my PC is faster ,securer and newer more than the last 8 months ago..so thank you IObit."
            </p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              "Driver booster is an amazing application. As for someone who has a lot of applications and drives as does not have the time to manually update them, I strongly recommend Driver Booster, it will help to update the driver quickly and easily."
            </p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt=""></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              "This is one of the best driver updater programs around. Microsoft has even led me astray by suggesting updates that wouldn’t work with my machine. This program knew what updates I needed without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"
            </p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- gift start -->
<div class="gift">
  <div class="wrapper">
    <!-- title -->
    <h2>Moreover, You Can Get 3 PC Optimization Tools for FREE today!</h2>
    <!-- flex -->
    <div class="flex clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/gift-sd.png" alt=""></dt>
        <dd>
          <p class="pro-name">Smart Defrag PRO</p>
          <P class="pro-original">$19.99<i></i></P>
          <p class="pro-describe">
            Max Hard Drive Optimization<br>
            for Faster PC
          </p>
        </dd>
      </dl>
      <dl class="middle">
        <dt><img src="<?php echo $pResUrl;?>images/gift-iu.png" alt=""></dt>
        <dd>
          <p class="pro-name">IObit Uninstaller PRO</p>
          <P class="pro-original">$19.99<i></i></P>
          <p class="pro-describe">
            Uninstall Unwanted Plug-ins<br>
            for Cleaner PC & Browsing
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/gift-pf.png" alt=""></dt>
        <dd>
          <p class="pro-name">Protected Folder</p>
          <P class="pro-original">$19.99<i></i></P>
          <p class="pro-describe">
            No Leak of Important Files<br>
            for Secured Privacy
          </p>
        </dd>
      </dl>
    </div>
    <!-- buybtn -->
    <img class="ribbon1" src="<?php echo $pResUrl;?>images/ribbon-icon1.png" alt="">
    <a class="buybtn yellow"
       href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=db5decxmas<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-db510');">
      get my free gifts
      <img class="ribbon2" src="<?php echo $pResUrl;?>images/ribbon-icon2.png" alt="">
    </a>
  </div>
</div>
<!-- gift end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <!-- title -->
    <h2>World-wide Awards</h2>
    <p>As being trusted and awarded by those world-class media in the past five years, you know you’ve got the right driver updater.</p>
    <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
  </div>
</div>
<!-- awards end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper clearfix">
    <dl class="service fl clearfix">
      <dt class="fl"><img src="<?php echo $pResUrl;?>images/money-back.png" alt=""></dt>
      <dd class="fl">
        <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
        <p>We’re confident that activating PRO edition will fix all your headache driver matters for affordable price!</p>
      </dd>
    </dl>
    <dl class="payments fr">
      <dd>We accept</dd>
      <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
    </dl>
    <div class="clear"></div>
    <!-- notes -->
    <p class="notes">
      Note:<br>
      *. Smart Defrag PRO / IObit Uninstaller PRO / Protected Folder support 1 year subscription / 1 PC.<br>
      *. We tested Driver Booster 6 PRO in our internal test lab. Your results may vary.
    </p>
    <!-- copyright -->
    <p class="copyright">Copyright © 2005 - 2018 IObit. All Rights Reserved</p>
  </div>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div class="floatlayer">
  <div class="wrapper clearfix">
    <!-- box -->
    <img class="fl" src="<?php echo $pResUrl;?>images/floatlayer-db.png" alt="">
    <img class="reduce" src="<?php echo $pResUrl;?>images/reduce2.png" alt="">
    <!-- middle-message -->
    <div class="middle-message fl">
      <ul class="surplus clearfix">
        <li><p class="one">0123456789</p></li>
        <li><p class="two">0123456789</p></li>
        <li><p class="three">0123456789</p></li>
        <li><p class="four">0123456789</p></li>
      </ul>
      <p>Gift Packs Left, Get It Now</p>
    </div>
    <!-- buybtn -->
    <a class="buybtn fr yellow"
       href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=db5decxmas<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-db510');">
      Get It Now
    </a>
  </div>
</div>
<!-- floatlayer end -->

<!-- pop start -->
<div class="pop">
  <div class="container">
    <!-- title -->
    <h2>Christmas Surprise</h2>
    <!-- message -->
    <dl class="clearfix">
      <dt class="fl"><img src="<?php echo $pResUrl;?>images/pop-db.png" alt=""></dt>
      <dd class="fl">
        <!-- title -->
        <h3>Try Driver Booster 6 PRO for 30 days for FREE!</h3>
        <!-- countdown -->
        <p class="countdown">
          Hurry, this deal ends in <span>s</span>
        </p>
        <ul class="surplus clearfix">
          <li><p class="ten">0123456789</p></li>
          <li><p class="unit">0123456789</p></li>
        </ul>
        <!-- details -->
        <ol>
          <li><b>200%</b> larger driver database</li>
          <li><b>150%*</b> quicker driver download</li>
          <li><b>28%*</b> faster game performance</li>
        </ol>
        <!-- buybtn -->
        <a class="buybtn green"
           href="https://www.iobit.com/buy.php?product=db630trial&ref=db5decxmastrial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-db510popup');">
          GET MY FREE TRIAL
        </a>
        <!-- note -->
        <p class="note">Pay $0 at Checkout<i></i></p>
        <p class="hiddennote">
          You will not be billed during the 30 days. Your credit card or PayPal account will be charged $24.95 for 1 year subscription at the end of the 30-day free trial period. But you can cancel at anytime during 30 days.
        </p>
      </dd>
    </dl>
    <!-- close -->
    <a class="close" href="javascript: popClose();">close</a>
  </div>
</div>
<!-- pop end -->


<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  $(document).ready(function() {
    $('#dg-container').gallery();
    //
    $("span.soldNum").text(soldNum);
    productFunStart ();
  });
</script>
</body>
</html>