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
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$paramData=json_decode(base64_decode($_GET['udata']));

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
  <title>85% OFF to Renew to Latest Driver Booster PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/en/index.php" class="logo" target="_blank">IObit</a>
      <p>Your registered Driver Booster Pro has expired!</p>
      <h1>Welcome Back and We Missed You</h1>
     <div class="message clearfix">
        <div class="left-img"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO" class="img-box"></div>
        <div class="right-message">
          <h3>Driver Booster 8 PRO</h3>
          <div class="progress-bar">
            <div class="left-number">
              <i></i> <span class="viewNum"><?php echo $viewNum;?></span> watching,  <strong class="gift">50</strong> seats left now!
            </div>
            <div class="bar">
              <span><span class="reduce"></span></span>
            </div>
          </div> 
          <dl>
            <dt><strong> <span>$</span>12<span>.</span><b>45</b></strong> <del>$74.85</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=db83pc1245&ref=en-db3pcexp<?php echo $refStr;?>&refs=purchase_db" onclick="ga('send', 'event', 'dbexpbuy1245', 'buy', 'dbpurchase-expired201905');" class="buybtn">Renew Now</a></dd>
            <dd>1 Year Subscription / 3 PCs</dd>
          </dl>
          
        </div>
     </div>
    </div>
  </div>
  <!-- end banner -->
  <div class="db-message">
    <div class="wrapper">
      <h2>Since Being with You, <br> What Did Driver Booster PRO Do for You</h2>
      <div class="screenshot">
        <div class="left-message">
          <span>PC</span>
          <dl>
            <dt>Stable Performance</dt>
            <dd><span><?php echo paramDeal($paramData->UpdDrv);?></span> necessary PC drivers updated to avoid <br> freeze or crashes</dd>
            <dt class="lfms">Effective Device Management</dt>
            <dd class="lfms"><span><?php echo paramDeal($paramData->FixedErr);?></span>  errors code corrected to fix hardware <br> problems</dd>
          </dl>
        </div>
        <div class="right-message">
          <span>GAME</span>
          <dl>
            <dt>Fast Loading</dt>
            <dd><span><?php echo paramDeal($paramData->UpdCmp);?></span> suitable components updated to <br> guarantee smooth launching</dd>
            <dt class="lfms">Better Experience</dt>
            <dd class="lfms"><span><?php echo paramDeal($paramData->UpdRdy);?></span>  game-related drivers updated to experience <br> advanced & new features</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="db-proportion">
    <div class="wrapper">
      <h2>Without Driver Booster PRO Now, You Have to Suffer:</h2>
      <ul>
        <li class="first">Driver database shrink from <strong>4,500,000</strong> to <strong>3,500,000</strong></li>
        <li><strong>Can’t</strong> accelerate driver download to save your time</li>
        <li><strong>Can’t</strong> update game components for your game</li>
        <li><strong>Can’t</strong> be the first to get latest game-ready drivers</li>
        <li><strong>Can’t</strong> update and install network drivers offline</li>
        <li><strong>Can’t</strong> get your driver installed and updated automatically</li>
        <li><strong>Can’t</strong> back up previous drivers automatically in case of unexpected problems</li>
        <li><strong>Can’t</strong> fix error codes easily to make hardware run smoothly</li>
      </ul>
    </div>
  </div>
  <div class="db-feature">
    <div class="wrapper">
      <h2>Now Come Back with Latest Driver Booster PRO</h2>
      <p>Enjoy Better PC & Game Performance and Make Update Process Easier</p>
      <ul>
        <li>
          <img src="<?php echo getStaticUrl('images/list01.png')?>" alt="">
          <strong>50% Larger</strong>
          <p>Driver Database</p>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/list02.png')?>" alt="">
          <strong>Stable</strong>
          <p>PC Performance</p>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/list03.png')?>" alt="">
          <strong>28%* Faster</strong>
          <p>Game Performance</p>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/list04.png')?>" alt="">
          <strong>Offline</strong>
          <p> Driver Update</p>
        </li>
      </ul>
      <a href="https://www.iobit.com/buy.php?product=db83pc1245&ref=en-db3pcexp<?php echo $refStr;?>&refs=purchase_db" onclick="ga('send', 'event', 'dbexpbuy1245', 'buy', 'dbpurchase-expired201905');" class="buybtn">Renew Now & Save <span>85%</span></a>
      <p class="last">1 Year Subscription / 3 PCs</p>
    </div>
  </div>


  <div class="review wrapper">
    <h2>Trusted by 150,000,000 users</h2>
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
            <p>
              "First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM, i was able to play new game titles without having to shutdown any background process. I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product."
            </p>
            <cite>Dunston Diaz</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              "What a surprise to receive the new Driver Booster from IObit. Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade. Once upgrading was complete it was as if my PC had a complete makeover. Sensational!"
            </p>
            <cite>Harold Barr</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              "Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended."
            </p>
            <cite>Hishaam Salasa</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              "It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB8. Easy to use and fast downloads it is the best tool in the Market until now!"
            </p>
            <cite>Carlos Alexandre Veríssimo</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
<!-- payments -->
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
          <dd>*. We tested Driver Booster 8 PRO in our internal test lab. Your results may vary.</dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
      </div>
      <!-- footer end -->
    </div>
  </div>
<!-- end payments -->
<!-- float -->
<div class="float clearfix">
  <div class="wrapper">
    <div class="left-img"></div>
     <div class="progress-bar">
      <div class="left-number">
        <i></i> <span class="viewNum"><?php echo $viewNum;?></span> watching , <strong class="gift">50</strong> seats left now!
      </div>
      <div class="bar">
        <span><span class="reduce"></span></span>
      </div>
    </div> 
    <a href="https://www.iobit.com/buy.php?product=db83pc1245&ref=en-db3pcexp<?php echo $refStr;?>&refs=purchase_db" onclick="ga('send', 'event', 'dbexpbuy1245', 'buy', 'dbpurchase-expired201905');" class="buybtn">Renew Now</a>
  </div>
</div>
  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>