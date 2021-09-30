<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$driversCount=empty($_GET['uc'])?0:intval($_GET['uc']);
$updateAuto=($_GET['adu']==1)?1:0;

$refStr = '';
if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr .= empty($_GET['to']) ? '-unknown' : '-'.$_GET['to'];
$refStr .= '-'.$ver;
$refStr .= empty($_GET['ref']) ? '-unknown' : '-'.$_GET['ref'];
$refStr .= empty($_GET['insur']) ? '-unknown' : '-'.$_GET['insur'];
$refStr .= empty($_GET['finstd']) ? '-unknown' : '-f'.$_GET['finstd'];
$refStr .= '-' . ((strlen($_GET['instd']) == 0) ? 'unknown' : 'i'.$_GET['instd']);
$refStr .= '-' . ((strlen($_GET['usr']) == 0) ? 'unknown' : 'u'.$_GET['usr']);
$refStr .= '-' . ((strlen($_GET['type']) == 0) ? 'unknown' : 't'.$_GET['type']);
$refStr .= '-' . ((strlen($_GET['expd']) == 0) ? 'unknown' : 'e'.$_GET['expd']);
$refStr .= '-' . ((strlen($_GET['flag']) == 0) ? 'unknown' : 'flag'.$_GET['flag']);
?>
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>Exclusive 85% OFF to Redeem Driver Booster 8 PRO – IObit</title>
    <meta name="Copyright" content="IObit">
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>

  </head>
  <body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
      <!-- title -->
      <h1>Redeem New Driver Booster 8 PRO</h1>
      <!-- subtitle -->
      <h2>No.1 PC driver updater – update drivers easily, safely and quickly</h2>
      <!-- db-box -->
      <img class="db-box fl" src="<?php echo $pResUrl;?>images/db-box.png" alt="">
      <!-- db-message -->
      <div class="db-message fr">
        <!-- db-off -->
        <img class="db-off" src="<?php echo $pResUrl;?>images/db-off.png" alt="">
        <!-- db-line -->
        <p class="db-des">Exclusive for Giveaway Users</p>
        <!-- price -->
        <p class="price">
          Only: <span>$<b>9</b>.99</span>  <del>$74.85</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=db83pc999&ref=en-db3pcgiveaway<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
           onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give');">
          Redeem Now
        </a>
        <!-- attention -->
        <p class="attention">1 Year Subscription / <strong>3 PCs</strong></p>
        <!-- money-back -->
        <img class="money-back" src="<?php echo $pResUrl;?>images/money-back.png" alt="">
      </div>
    </div>
  </div>
  <!-- banner end -->
  <!-- feature-part1 start -->
  <div class="feature-part1">
    <div class="wrapper">
      <!-- arrow -->
      <img class="arrow" src="<?php echo $pResUrl;?>images/feature-arrow.png" alt="">
      <!-- title -->
      <h2 class="fr">
        <span class="top">Since being with you,</span>
        <span class="bottom">Driver Booster Pro has</span>
      </h2>
      <!-- details -->
      <ul class="details fr">
        <!-- updated -->
        <li class="updated">
          <?php if($driversCount!=0):?>
          <strong>Updated</strong>
          <span class="numbers clearfix">
              <i class="">0123456789</i>
              <i class="">0123456789</i>
              <i class="">0123456789</i>
            </span>
          drivers and game components, and ensured<br>
          you <b>stable PC performance</b> and <b>smooth gaming experience</b>;
          <?php else:?>
              Ensured you stable PC performance and smooth gaming experience
          <?php endif;?>
        </li>
        <!-- saved -->
        <li class="saved">
          <?php if($updateAuto==1):?>
          <strong>Saved</strong> you at least
          <span class="letters clearfix">
              <i class="let1">abcdefghijklmnopqrstuvwxyz</i>
              <i class="let2">bcdefghijklmanopqrstuvwxyz</i>
              <i class="let3">abcdefghijklmnopqrstuvwxyz</i>
              <i class="let4">abcdefghijklmnopqrstuvwxyz</i>
            </span>
          <b>of your time</b> with Auto Update;
          <?php endif;?>
        </li>
        <!-- reduced -->
        <li class="reduced">
          <b class="red">Reduced</b> your <b>system crash</b> with automatic driver backup<br>
          and recovery technology.
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part1 end -->
  <!-- feature-part2 start -->
  <div class="feature-part2">
    <div class="wrapper">
      <!-- content -->
      <p>
        In the past 7 years, Driver Booster Pro has updated <strong>1.2 billion </strong> drivers for <strong>2.5 million</strong> valued users,<br>
        which makes their PC runs up to <strong>200%</strong> faster* on average, by keeping device drivers always Up-to-date and improving Stability of PC Performance.
      </p>
    </div>
  </div>
  <!-- feature-part2 end -->
  <!-- feature-part3 start -->
  <div class="feature-part3 wrapper">
    <!-- title -->
    <h2>Now if you miss out the New Pro, you may encounter</h2>
    <!-- content for progress -->
    <div class="content clearfix">
      <!-- Worse PC Performance -->
      <dl class="performance fl">
        <dt>Worse PC Performance</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>15% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Unstable & Stuck Gaming Experience -->
      <dl class="experience fl">
        <dt>Unstable & Stuck Gaming Experience</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>35% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Time-consuming Driver Update -->
      <dl class="update fr">
        <dt>Time-consuming Driver Update</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>2X longer </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <!-- notes -->
    <p>*We tested Driver Booster 8 PRO in our internal test lab. Your results may vary.</p>
  </div>
  <!-- feature-part3 end -->
  <hr>
  <!-- feature-part4 start -->
  <div class="feature-part4">
    <div class="wrapper clearfix">
      <!-- title -->
      <h2>
        So we highly recommend you to Redeem Driver Booster 8 Pro,<br>
        to keep all drivers always up-to-date
      </h2>
      <!-- left-message -->
      <ul class="left-message fl">
        <li class="padding-right25">
          <strong>4,500,000+ driver</strong> database to keep<br>
          all of your device drivers up-to-date
        </li>
        <li class="padding-right55">
          <strong>Auto update</strong> drivers when your system is idle
        </li>
        <li class="padding-right5">
          <strong>1-click to fix</strong> all device errors for your<br> computer
        </li>
      </ul>
      <!-- right-message -->
      <ul class="right-message fr">
        <li class="padding-left45">
          <strong>Necessary components</strong> available<br>
          to launch your game successfully
        </li>
        <li class="padding-left5">
          Priority to update <strong>Game Ready Drivers</strong><br>
          to enjoy better game experience
        </li>
        <li class="padding-left10">
          1-click to <strong>stop unnecessary processes</strong><br>
          for faster game
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part4 end -->
  <!-- between-buy start -->
  <div class="between-buy wrapper">
    <!-- title -->
    <h2>Guarantee Better PC Performance & Smoother Game Experience Now</h2>
    <!-- price -->
    <p class="price">
      Only: <span>$<b>9</b>.99</span>  <del>$74.85</del>
    </p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=db83pc999&ref=en-db3pcgiveaway<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
       onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give');">
      Redeem Now
    </a>
    <!-- attention -->
    <p class="attention">1 Year Subscription / <strong>3 PCs</strong></p>
    <!-- money-back -->
    <img class="money-back" src="<?php echo $pResUrl;?>images/money-back.png" alt="">
  </div>
  <!-- between-buy end -->
  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <!-- title -->
      <h2>To See Clearly What You Would Miss, if Stay as Free:</h2>
      <!-- table -->
      <table cellspacing="0" cellpadding="0" valign="middle" align="cnter">
        <thead>
        <tr>
          <th class="w320"></th>
          <th class="w530"></th>
          <th class="w350"></th>
          <th class="w50"></th>
        </tr>
        </thead>
        <tbody>
        <!-- 01 -->
        <tr>
          <td class="w320 grey">3,500,000+</td>
          <td class="w530">Driver Database</td>
          <td class="w350 red">4,500,000+</td>
          <td class="w50"></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="w320 grey">No Acceleration</td>
          <td class="w530">Driver Download Speed</td>
          <td class="w350 red">100% Faster</td>
          <td class="w50"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="w320 grey">No Priority</td>
          <td class="w530">Game Ready Driver</td>
          <td class="w350 red">Priority</td>
          <td class="w50"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Game Component</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Auto Update Driver</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Backup Driver</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Offline Driver Update</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td class="w320"></td>
          <td class="w530"></td>
          <td class="w350"></td>
          <td class="w50"></td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- comparison end -->
  <!-- review start -->
  <div class="review wrapper">
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
            <h4>IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best.</h4>
            <p>
              Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"></dt>
          <dd>
            <h2>User Review</h2>
            <h4></h4>
            <p>
              First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM,  i was able to play new game titles without having to shutdown any background process.  I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product. 
            </p>
            <cite>Dunston Diaz</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
          <dd>
            <h2>User Review</h2>
            <h4></h4>
            <p>
              What a surprise to receive the new Driver Booster from IObit.  Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade.  Once upgrading was complete it was as if my PC had a complete makeover. Sensational!
            </p>
            <cite>Harold Barr</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
          <dd>
            <h2>User Review</h2>
            <h4></h4>
            <p>
              Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended.
            </p>
            <cite>Hishaam Salasa</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></dt>
          <dd>
            <h2>User Review</h2>
            <h4></h4>
            <p>
              It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB8. Easy to use and fast downloads it is the best tool in the Market until now!
            </p>
            <cite>Carlos Alexandre Veríssimo</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->
  <!-- awards start -->
  <div class="awards wrapper">
    <!-- title -->
    <h2>World-wide Awards</h2>
    <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
  </div>
  <!-- award end -->
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="footer-servizio clearfix">
        <dl class="money_back fl">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/money_back.png" alt="">
          </dd>
          <dt>
            <h3>Money Back Guarantee</h3>
            <p>If you're not satisfied in the first 60 days,<br> we will give you back your<br> money.</p>
          </dt>
        </dl>
        <dl class="veloce fl">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/veloce.png" alt="">
          </dd>
          <dt>
            <h3>Secure Payment</h3>
            <p>IObit supports several safe modes of <br>payment.</p>
          </dt>
        </dl>
        <dl class="verified fr">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/verified.png" alt="">
          </dd>
          <dt>
            <h3>Get License</h3>
            <p>You will receive the license within a <br>few minutes after purchase.</p>
          </dt>
        </dl>
      </div>
      <p class="note">
        note<br>
        *.Data may vary based on different system or computer.
      </p>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
  <!-- footer end -->
  <!-- float start -->
  <div class="float">
    <div class="wrapper clearfix">
      <dl class="fl">
        <dt>Exclusive Offer</dt>
        <dd><strong>85% OFF</strong> to Get Rid of System Crash & Unstable Game Experience</dd>
      </dl>
      <div class="float-message fr">
        <!-- price -->
        <p class="price">
          Only: <span>$<b>9</b>.99</span>  <del>$74.85</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=db83pc999&ref=en-db3pcgiveaway<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
           onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give');">
          Redeem Now
        </a>
      </div>
    </div>
  </div>
  <!-- float end -->
  <script>
    driversCount=<?php echo $driversCount;?>;
    autoUpdate=<?php echo $updateAuto;?>;
    $(document).ready(function() {
      $('#dg-container').gallery();
    });
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  </body>
  </html>