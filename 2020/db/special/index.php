<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(120,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'endbnew2020_p' . $date;
  $c_name_t='endbnew2020_p' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,78);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
      if (intval($_COOKIE[$c_name]) <= 0) {
          $packsNum = 0;
          setcookie($c_name, $packsNum, time() + 3600 * 24);
      } else {
          $packsNum = $_COOKIE[$c_name] - 1;
          setcookie($c_name, $packsNum, time() + 3600 * 24);
      }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

if(in_array($_GET['st'],array('dbxmasr'))){
    $refStr='-'.$_GET['st'];
}else{
    $refStr='';
}

if($_GET['to']=='purchase-6'){
    if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
        if(count($matches[1])>=2){
            $refStr.='-'.$matches[1][0].$matches[1][1];
        }
    }
}

if(!empty($_GET['pop'])){
    $refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['count'])){
    $refStr.='-c'.$_GET['count'];
}
if(!empty($_GET['pdt'])){
    $refStr.='-'.$_GET['pdt'];
}

$transData=json_decode(base64_decode($_GET['idata']));

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

$paramPri=$_GET['pri'];
if((!empty($paramPri))&&$transData->$paramPri!==null){
    $refStr.='-'.$paramPri.$transData->$paramPri;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>70% OFF Driver Booster PRO for New Users - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Galada:400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>65% OFF + Free Gift Pack New User Special</h1>
    <!-- <h4>Free gifts are limited to first 500 orders.</h4> -->
    <!-- panel -->
    <div class="panel">
      <div class="clearfix">
        <img class="box" src="<?php echo getStaticUrl('images/banner-db.png')?>" alt="Driver Booster PRO" />
        <div class="coupon">
          <p>Free Gift valued <span>$39.98</span></p>
          <img src="<?php echo getStaticUrl('images/bundle-box.png')?>" alt="" />
          <div class="numbox">
            <b class="hurry">Hurry,</b>  only 
            <div class="giftNum clearfix">
              <div class="nwrap"><div class="numlist"><strong>0</strong></div></div>
              <div class="nwrap"><div class="numlist"><strong>2</strong></div></div>
              <div class="nwrap last"><div class="numlist"><strong>5</strong></div></div>
            </div>
             gift pack left
          </div>
        </div>
        <div class="message">
          <h2>YOUR ITEMS:</h2>
          <ul class="message-list">
            <li>
              <h3>Driver Booster 8 PRO <strong>$74.85</strong></h3>
              <span>1 Year Subscription / 3 PCs</span>

              <h3 class="gift"><i class="all-icons"></i> Free Gift Pack <strong>$0</strong></h3>
              <span class="gift-span">Hurry, <b class="reduceNum"><em>81</em><em class="reduce">81</em></b> packs left now!</span>
            </li>
            <li>
              <h3>Subtotal <strong>$74.85</strong></h3>
              <h3 class="green">70% OFF <strong>-$50.9</strong></h3>
            </li>
            <li class="last">
              <h3 class="total">Total <strong>$23.95</strong></h3>
            </li>
          </ul>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=db8special&ref=en-db8special<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db" 
             onclick="ga( 'send', 'event', 'dbbuy', 'buy', 'dbpurchase-special')">
            Buy Now 
          </a>
        </div>
        <span class="sold-words">SOLD OUT</span>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Why do over 150 million users choose Driver Booster?</h2>
    <p>
      Because their PC runs up to 200% faster* than before, by keeping device drivers always Up-to-date and improving Stability of PC Performance, with the proven driver updating and security technology.
    </p>
    <img class="db-box" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt=""/>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></dt>
      <dd>
        <strong>No need of one-by-one driver update</strong>
        <p>Providing you one-stop driver detecting & updating solution.</p>
      </dd>
    </dl>
    <dl class="two">
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Safe driver download & update</strong>
        <p>Automatically backing up & creating system restore point before <br> updating, in case of anything unexpected.</p>
      </dd>
    </dl>
    <dl class="three">
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>4,500,000+ driver database</strong>
        <p>Priority to update more outdated & rare<br> drivers, and all supplied drivers are WHQL<br> certified.</p>
      </dd>
    </dl>
    <dl class="four">
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd>
        <strong>Offline driver update</strong>
        <p>Update and install network drivers<br> without Internet connection.</p>
      </dd>
    </dl>
    <dl class="five">
      <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
      <dd>
        <strong>Peak gaming performance guaranteed</strong>
        <p>Game Ready Driver and necessary game components are available to help <br> run game smoothly.</p>
      </dd>
    </dl>
    <!-- <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></dt>
      <dd>
        <strong>No need of one-by-one driver update</strong>
        <p>Providing you one-stop driver detecting & updating solution.</p>
      </dd>
    </dl>
    <dl class="two">
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Safe driver download & update</strong>
        <p>Automatically backing up & creating system restore point before <br> updating, in case of anything unexpected.</p>
      </dd>
    </dl>
    <dl class="three">
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>No unexpected system crash</strong>
        <p>Always keeping drivers up-todate to<br> ensure you a stable PC.</p>
      </dd>
    </dl>
    <dl class="four">
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd>
        <strong>100% faster download</strong>
        <p>Time-saving with system idle time<br> downloading with up to 100% faster <br>speed.</p>
      </dd>
    </dl>
    <dl class="five">
      <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
      <dd>
        <strong>Peak gaming performance guaranteed</strong>
        <p>Game Ready Driver and necessary game components are available to help <br> run game smoothly.</p>
      </dd>
    </dl> -->
  </div>
</div>
<!-- feature end -->
<!-- end feature -->

<!-- giftbox start -->
<div class="giftbox">
  <div class="wrapper">
    <h2 class="new">Free Gift Pack Includes</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/sd-icon.png')?>" alt=""/></dt>
        <dd>
          <strong>$0</strong> <del>$19.99</del> <span>1 Year / 1 PC</span>
          <h3>Smart Defrag PRO</h3>
          <p>Maximize Hard Drive Optimization for Faster PC</p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/></dt>
        <dd>
          <strong>$0</strong> <del>$19.99</del> <span>1 Year / 1 PC</span>
          <h3>IObit Uninstaller PRO</h3>
          <p>Remove Useless Programs<br> & Plug-ins for Cleaner PC</p>
        </dd>
      </dl>
    </div>
    <div class="mask">
      <span class="sold-words one">SOLD OUT</span>
      <span class="sold-words two">SOLD OUT</span>
    </div>
  </div>
</div>
<!-- giftbox end -->

<div class="wrapper">
  <!-- service start -->
  <div class="service clearfix">
    <dl class="fl">
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
      <dd>
        <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
        <p>
          We’re confident that activating PRO edition will fix all your headache driver matters for affordable price!
        </p>
      </dd>
    </dl>
    <dl class="fr">
      <dt><h3>We accept</h3></dt>
      <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- awards start -->
  <div class="awards">
    <h2>World-wide Awards</h2>
    <p>
      As being trusted and awarded by those world-class media in the past seven years, you know you’ve got the right driver updater.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->
</div>

<!-- review start -->
<div class="review wrapper">
  <div class="content">
    <dl class="active">
      <dt>
        <h3>Media Review</h3></dt>
      <dd>
        <h4>IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best.</h4>
      </dd>
      <dd>
        Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>User Review</h3></dt>
      <dd>
        <h4></h4>
      </dd>
      <dd>
        First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM,  i was able to play new game titles without having to shutdown any background process.  I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product.
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>User Review</h3></dt>
      <dd>
        <h4></h4>
      </dd>
      <dd>
        What a surprise to receive the new Driver Booster from IObit.  Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade.  Once upgrading was complete it was as if my PC had a complete makeover. Sensational!
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>User Review</h3></dt>
      <dd>
        <h4></h4>
      </dd>
      <dd>
        Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended.
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>User Review</h3></dt>
      <dd>
        <h4></h4>
      </dd>
      <dd>
        It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB7. Easy to use and fast downloads it is the best tool in the Market until now!
      </dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li class="active">
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine">
      </div>
      <p>PC Magazine</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/dunston-diaz.png" alt="Dunston Diaz"></div>
      <p>Dunston Diaz</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/harold-barr.png" alt="Harold Barr"></div>
      <p>Harold Barr</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/hishaam-salasa.png" alt="Hishaam Salasa">
      </div>
      <p>Hishaam Salasa</p>
    </li>
    <li>
      <div class="pic">
        <img src="<?php echo $pResUrl; ?>images/carlos-alexandre.png" alt="Carlos Alexandre Veríssimo">
      </div>
      <p>Carlos Alexandre Veríssimo</p>
    </li>
  </ul>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison">
  <div class="wrapper">
    <h2>The comparison between FREE and PRO may help you make better decision</h2>
    <table>
      <thead>
      <tr>
        <th colspan="2"></th>
        <th class="itema">
          <div class="free">Driver Booster FREE</div>
        </th>
        <th class="itemb">
          <div class="pro">Driver Booster PRO</div>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
        <td class="virtue">Auto Scan Outdated/Missing Drivers <span><em>IMPROVED</em></span></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
        <td class="virtue">Auto Update Drivers when System Is Idle <span><em>IMPROVED</em></span></td>
        <td class="itema"><i class="all-icons gray">×</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
        <td class="virtue">100%* Faster Download Speed</td>
        <td class="itema"><i class="all-icons gray">×</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon04.png')?>" alt=""></td>
        <td class="virtue">Auto Backup & Restore before Updating</td>
        <td class="itema"><i class="all-icons gray">×</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon07.png')?>" alt=""></td>
        <td class="virtue">Priority to update the stability-first drivers <span class="new"><em>NEW</em></span></td>
        <td class="itema"><i class="all-icons gray">×</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
        <td class="virtue">Necessary Components for Smooth Game <span><em>IMPROVED</em></span></td>
        <td class="itema"><i class="all-icons gray">×</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
        <td class="virtue">Priority to Get Latest Game Ready Driver</td>
        <td class="itema"><i class="all-icons gray">×</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      </tbody>
      <!-- <tfoot>
        <tr>
          <th colspan="2"></th>
          <th class="itema"></th>
          <th class="itemb">
            <p>Only <strong>$22.95</strong></p>
            <a class="buybtn">
              <i class="all-icons"></i> <span>Activate Now</span>
            </a>
            <p>1 Year Subscription / 3 PCs</p>
          </th>
        </tr>
      </tfoot> -->
    </table>
  </div>
</div>
<!-- comparison end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="imgbox">
      <img class="db" src="<?php echo getStaticUrl('images/banner-db.png')?>" alt=""/>
      <img class="bundle" src="<?php echo getStaticUrl('images/bundle-box.png')?>" alt=""/>
    </div>
    <div class="numbox">
      <b class="hurry">Hurry,</b>  only 
      <div class="giftNum clearfix">
        <div class="nwrap"><div class="numlist"><strong>0</strong></div></div>
        <div class="nwrap center"><div class="numlist"><strong>2</strong></div></div>
        <div class="nwrap last"><div class="numlist"><strong>5</strong></div></div>
      </div>
       gift pack left
    </div>
    <div class="price">
      <p>only <strong>$<big>23</big>.95</strong></p>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=db8special&ref=en-db8special<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db" 
         onclick="ga( 'send', 'event', 'dbbuy', 'buy', 'dbpurchase-special')">
        Buy Now 
      </a>
      <p class="year">1 year subscription / 3 PCs</p>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- bottom start -->
<div class="bottom">
  <dl class="note wrapper">
    <dt>Note:</dt>
    <dd>*.Data may vary based on different system or computer.</dd>
    <dd>
      *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
    </dd>
    <dd>*. Smart Defrag PRO / IObit Uninstaller PRO support 1 year subscription / 1 PC.</dd>
  </dl>
  <div class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
</div>
<!-- bottom end -->

<script>
  var _href = "https://www.iobit.com/buy.php?product=db8special2395&ref=en-db8specialsoldout<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db";
  var _ga = "ga( 'send', 'event', 'dbsoldbuy', 'buy', 'dbpurchase-special')";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>