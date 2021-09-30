<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$viewNum=rand(154,196);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'endbnew_p' . $date;
  $c_name_t='endbnew_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

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
  <title>70% OFF Driver Booster - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Prompt:400,600" rel="stylesheet">
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
      <div class="title">
        <h1>Redeem</h1>
        <p>Your Driver Booster 8 PRO Launch Gift</p>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <div class="top">
            <h2>Quarterly</h2>
            <p><strong>$<big>6.24</big>/MO</strong></p>
            <p><span class="sign">no discount</span></p>
            <a class="buybtn small"
               href="https://www.iobit.com/buy.php?product=db83m&ref=en-db3m<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
               onclick="ga('send', 'event', 'db3mbuy', 'buy', 'dbpurchase-newlaunch');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Buy Now</span>     
            </a>
          </div>
          <div class="price">
            <h3>Pricing Breakdown</h3>
            <ul>
              <li><span>3 Months</span><span class="right">$18.72</span></li>
              <li><span><b>Total</b></span><span class="right"><b>$18.72</b></span></li>
              <li class="last"><b class="red">(Savings $0)</b></li>
            </ul>
          </div>
        </div>
        <div class="offer right">
          <div class="top">
            <h2>Annual</h2>
            <p><strong>$<big>1.91</big>/MO</strong></p>
            <p><span class="sign">70% OFF + 2 Months for Free</span></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=db814m&ref=en-db14m<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
               onclick="ga('send', 'event', 'db14mbuy', 'buy', 'dbpurchase-newlaunch');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Buy Now</span>  
            </a>
          </div>
          <div class="price">
            <h3>Pricing Breakdown</h3>
            <ul>
              <li><span>12 Months</span><span class="right">$74.85</span></li>
              <li><span>Extra 2 months</span><span class="right"><del>$12.48</del></span></li>
              <li><span>70% Discount</span><span class="right">-$51.9</span></li>
              <li><span><b>Total</b></span><span class="right"><b>$22.95</b></span></li>
              <li class="last"><b class="red">(Savings $64.38)</b></li>
            </ul>
          </div>
          <div class="numbox">
            <h3>
              Hurry, only
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">5</b></b>
                <b class="nwrap"><b class="numlist">5</b></b>
              </span>
              seats left
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature first">
    <h2 class="wrapper">New Features and Improvements of<br> Driver Booster 8 PRO</h2>
    <div class="wrapper clearfix">
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/device.png')?>" alt=""/></div>
      <div class="content fr">
        <h3>1-click Driver Update</h3>
        <ul>
          <li class="twice">
            <i>●</i>
            <span>Update 4,500,000+ drivers with one click to reduce system crashes and freezing.</span>
          </li>
          <li>
            <i>●</i>
            <span>Smarter Update Mode to scan and update drivers based on the stability first or latest first.</span>
          </li>
          <li>
            <i>●</i>
            <span>More sound and Internet issues can be fixed with enhanced tools.</span>
          </li>
        </ul>
        <div class="clearfix">
          <dl>
            <dt>
              <img src="<?php echo getStaticUrl('images/arrow-icon01.png')?>" alt=""/>
              <span class="_num">3,000,000+</span>
              <span class="_num red">4,500,000+</span>
            </dt>
            <dd>
              <strong>50%</strong>
              <p>Larger Driver Database</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/arrow-icon02.png')?>" alt=""/></dt>
            <dd>
              <strong>Smarter</strong>
              <p>Driver Update Mode</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="feature second">
    <div class="wrapper clearfix">
      <div class="content fl">
        <h3>Better Game Experience</h3>
        <ul>
          <li class="twice">
            <i>●</i>
            <span>Increase the game boost speed to quickly speed up your PC when gaming.</span>
          </li>
          <li>
            <i>●</i>
            <span>Auto silence all notifications of Driver Booster to stop disturbing.</span>
          </li>
          <li>
            <i>●</i>
            <span>Keep game components updated to give you smoother gaming and support new game features.</span>
          </li>
        </ul>
        <div class="clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/arrow-icon01.png')?>" alt=""/></dt>
            <dd>
              <strong>90%</strong>
              <p>PC Game Coverage</p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="scan01" src="<?php echo getStaticUrl('images/scan-01.png')?>" alt=""/>
        <img class="scan02" src="<?php echo getStaticUrl('images/scan-02.png')?>" alt=""/>
        <img class="scan03" src="<?php echo getStaticUrl('images/scan-03.png')?>" alt=""/> 
      </div>
    </div>
  </div>
  <div class="feature third wrapper">
    <p>
      <span><i></i> <b>Driver Booster 7 Free</b></span> <span class="red"><i></i> <b>Driver Booster 8 PRO</b></span>
    </p>
    <p class="gray">*.We tested the driver booster 8 PRO in our internal test lab. Your results may vary.</p>
  </div>
  <!-- feature end -->

  <!-- unique start -->
  <div class="feature unique">
    <div class="wrapper">
      <h2>Other Unique Benefits of Driver Booster 8 PRO</h2>
      <div class="clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/></div>
        <ul class="content fr">
          <li>
            <i class="all-icons"></i>
            <span>Unlimited driver download speed</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Priority to get latest game ready driver</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Auto download and update drivers during system idle time</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Update necessary components for smooth game</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Easily fix device errors for better performance</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Update and install network drivers offline <em><b>New</b></em></span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Priority to update the stability-first drivers <em><b>New</b></em></span>
          </li>
        </ul>
      </div>
      <div class="giftbox">
        <h3>Moreover, a Launch Gift for You</h3>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/></dt>
          <dd>
            <div class="numbox">
              <h3>
                Hurry, only
                <span id="centNum" class="giftNum">
                  <b class="nwrap"><b class="numlist">0</b></b>
                  <b class="nwrap"><b class="numlist">0</b></b>
                  <b class="nwrap"><b class="numlist">5</b></b>
                  <b class="nwrap"><b class="numlist">5</b></b>
                </span>
                seats left
              </h3>
            </div>
            <a class="buybtn green"
               href="https://www.iobit.com/buy.php?product=db814m&ref=en-db14m<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
               onclick="ga('send', 'event', 'db14mbuy', 'buy', 'dbpurchase-newlaunch');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Get It Now</span>     
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- unique end -->

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
        As being trusted and awarded by those world-class media in the past seven years, you know you’ve got the right driver updater.
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
          *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
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
      <img src="<?php echo getStaticUrl('images/float-gift-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Hurry, only
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
        </span>
        seats left
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> visitors on this page now</p>
    </div>
    <a class="buybtn fr"
       href="https://www.iobit.com/buy.php?product=db814m&ref=en-db14m<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
       onclick="ga('send', 'event', 'db14mbuy', 'buy', 'dbpurchase-newlaunch');">
      <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
      <span>Get It Now</span>     
    </a>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>