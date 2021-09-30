<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'endbexp_p' . $date;
  $c_name_t='endbexp_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

function paramDeal($num){
  return (intval($num)>0)?number_format(intval($num)):'';
}

$paramData=json_decode(base64_decode($_GET['udata']));

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pay $0 to get Driver Booster 7 PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <p class="name">Driver Booster 7 PRO</p>
      <h1>Presale Starts</h1>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right fl">
          <h2>FOR FIRST  <big>1,000</big> CUSTOMERS PER DAY</h2>
          <div class="numbox">
            <h3>
              Only 
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">7</b></b>
                <b class="nwrap"><b class="numlist">9</b></b>
              </span>
              Left
            </h3>
            <p><span class="buyNum"><?php echo $viewNum; ?></span> users are viewing now</p>
          </div>
          <ul class="price clearfix">
            <li class="first"><strong><small>$</small>0</strong></li>
            <li class="last">
              <a class="buybtn big"
                 href="https://www.iobit.com/buy.php?product=db7preorder&ref=db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp');">
                Pre-order Now
              </a>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- foryou start -->
  <div class="foryou">
    <div class="wrapper">
      <h2>What Did Driver Booster 6 PRO Do for You?</h2>
      <div class="screen">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <span class="rocket"></span>
        <div class="forlist left">
          <h3>Enhanced <b>PC</b> Performance</h3>
          <p><i class="circle">.</i> Updated <b>x</b> PC drivers to stay away from system problems;</p>
          <p><i class="circle">.</i> Fixed <b>x</b> device errors to solve hardware problems; </p>
        </div>
        <div class="forlist right">
          <h3>Improved <b>Game</b> Performance</h3>
          <p><i class="circle">.</i> Updated <b>x</b> game components to guarantee successful game launching;</p>
          <p><i class="circle">.</i> Updated <b>x</b> game-ready drivers with priority to enjoy new features and fix bugs;</p>
        </div>
      </div>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
    </div>
  </div>
  <!-- foryou end -->

  <!-- hashow start -->
  <div class="hashow">
    <div class="wrapper">
      <h2>Your Driver Booster PRO Has Now Expired</h2>
      <div class="screen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
          <span class="point">!</span>
        </div>
        <ul class="right fr">
          <li><i class="all-icons arrow"></i> <span>Driver database shrink to <b>2,500,000</b></span></li>
          <li><i class="all-icons"></i> <span><b>No</b> download speed acceleration</span></li>
          <li><i class="all-icons"></i> <span><b>No</b> automatic driver updating</span></li>
          <li><i class="all-icons"></i> <span><b>No</b> previous drivers backup</span></li>
          <li><i class="all-icons"></i> <span><b>No</b> device code error fixing</span></li>
          <li><i class="all-icons"></i> <span><b>No</b> game components updating</span></li>
          <li><i class="all-icons"></i> <span><b>No</b> priority to update game-ready drivers</span></li>
        </ul>
      </div>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
    </div>
  </div>
  <!-- hashow end -->

  <!-- db-feature start -->
  <div class="db-feature">
    <div class="wrapper">
      <h2>Driver Booster 7 PRO is available for Presale,<br> It Can Do More for You</h2>
      <div class="clearfix">
        <div class="featlist one">
          <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
          <h3>3,500,000+</h3>
          <p>PC drivers supported</p>
        </div>
        <div class="featlist two">
          <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
          <h3>20% more</h3>
          <p>components supported</p>
        </div>
        <div class="featlist three">
          <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
          <h3>20% faster</h3>
          <p>driver scanning</p>
        </div>
        <div class="featlist four">
          <img src="<?php echo getStaticUrl('images/feature-icons04.png')?>" alt=""/>
          <h3>Stop Notifications</h3>
          <p>of Driver Booster when work with full-screen.</p>
        </div>
      </div>
      <h3 class="subtitle">So Back to PRO Now to Enjoy All PRO Features</h3>
      <ul class="price">
        <li class="last">
          <a class="buybtn big"
             href="https://www.iobit.com/buy.php?product=db7preorder&ref=db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp');">
            Pre-order Now - <big>$0</big>
          </a>
        </li>
      </ul>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
    </div>
  </div>
  <!-- db-feature end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>What Others Say: </h2>
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
              It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB7. Easy to use and fast downloads it is the best tool in the Market until now!
            </p>
            <cite>Carlos Alexandre Veríssimo</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <p>
        As being trusted and awarded by those world-class media in the past six years, you know you’ve got the right driver updater.
      </p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
          <p>
            We’re confident that activating PRO edition will fix all your headache driver matters for affordable price!
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

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Note:</dt>
        <dd>
          *At the end of the 30-day free period, your credit card or PayPal account will be charged $22.95 automatically. This 70% discount from the original price of $74.85 is bonus only for preorders!
        </dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Hurry, only 
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">7</b></b>
          <b class="nwrap"><b class="numlist">9</b></b>
        </span>
        Left
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> users are viewing now</p>
    </div>
    <ul class="price fr">
      <li class="first"><strong><small>$</small>0</strong></li>
      <li class="last">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=db7preorder&ref=db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp');">
          Pre-order Now
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script>
    refStr='<?php echo $refStr;?>';
    $('.foryou .screen p b').eq(0).html('<?php echo paramDeal($paramData->UpdDrv);?>').end()
        .eq(1).html('<?php echo paramDeal($paramData->FixedErr);?>').end()
        .eq(2).html('<?php echo paramDeal($paramData->UpdCmp);?>').end()
        .eq(3).html('<?php echo paramDeal($paramData->UpdRdy);?>');
    $(function() {
      $('#dg-container').gallery();
    });
  </script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>