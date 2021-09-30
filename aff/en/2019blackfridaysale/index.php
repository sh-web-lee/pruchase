<?php
error_reporting(0);
session_start();
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(($_GET['src']=='tp') && in_array($_GET['t'],array('26634253','26634264','26660412','26708771',
        '26695207','26695234','15526758','15817409','26695295','26695255','26695361','26695367','26696019',
        '26696077','26696248','26696471','26696522','26696578','26696655','27232005','27232028'))){
  $cName='enaffbf_s';
  $currentStatus=$_COOKIE[$cName];
  if($currentStatus==2){
    header('location:https://www.iobit.com/en/thankyou.php?refs=enaffbf');
    exit();
  }
}

if($_GET['action']=='statistic'){
  $status=$_GET['status'];
  $des=$_GET['des'];
  statistic($status,$des);
  exit();
}

function statistic($status,$des=''){
  try{
    $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
    $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("set names utf8");
    $insertSql="insert into enaffbf(ip,addtime,status,des) values(:ip,:addtime,:status,:des)";
    $pre=$pdo->prepare($insertSql);

    $ip=getIP();
    $addTime=time();
    $pre->bindParam(':ip',$ip);
    $pre->bindParam(':addtime',$addTime);
    $pre->bindParam(':status',$status);
    $pre->bindParam(':des',$des);
    $pre->execute();
  }catch (PDOException $e){
    var_dump($e->getMessage());
  }
}
$refStr = (empty($_GET['ref']) ? '' : $_GET['ref']);
$affStr = (empty($_GET['aff']) ? (empty($_GET['AFF']) ? '' : $_GET['AFF']) : $_GET['aff']);

$ref = empty($refStr) ? (empty($affStr) ? '' : '?aff='.$affStr) : (empty($affStr) ? '?ref=ir' : '?ref='.$refStr.'&aff='.$affStr);
header("Refresh: 5; url=https://purchase.iobit.com/aff/en/asc/2017asc10general/index.php$ref");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Save up to 80% OFF on the Best PC & Mac Utilities</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
  <script
      id="fsc-api"
      src="https://d1f8f9xcsvx3ha.cloudfront.net/sbl/0.7.4/fastspring-builder.min.js"
      type="text/javascript"
      data-popup-closed="onPopClosed"
      data-storefront="iobit.onfastspring.com/popup-iobit">
  </script>
</head>
<body>
<!-- float -->
<div class="float">
  <div class="float-content">
    <div class="wrapper">
      <!-- fold-message -->
      <div class="fold-message clearfix">
        <!-- left -->
        <dl class="fl">
          <dt>EXCLUSIVELY FOR YOU</dt>
          <dd>Get Free <b>$60 Value</b> Gift Pack with Any Purchase</dd>
        </dl>
        <!-- right -->
        <dl class="fr">
          <dt>
            <!-- countdown -->
          <p class="countdown" id="countdown1">
            Hurry !
            <strong>05</strong> <span>M <b>:</b></span>
            <strong>00</strong> <span>S <b>:</b></span>
            <strong class="last">00</strong> <span>Ms</span>
            Left
          </p>
          </dt>
          <dd>
            <!-- learn more -->
            <a class="learnmore" href="javascript: unfold();"><span>Learn More</span></a>
          </dd>
        </dl>
      </div>
      <!-- unfold-message -->
      <div class="unfold-message clearfix">
        <!-- note -->
        <p><i class="all-icons"></i> Get Free <b>$60 Value</b> Gift Pack with Any Purchase</p>
        <!-- countdown -->
        <p class="countdown" id="countdown2">
          <em>Hurry! Offer ends in</em> <br>
          <strong>05</strong> <span>M <b>:</b></span>
          <strong>00</strong> <span>S <b>:</b></span>
          <strong class="last">00</strong> <span>Ms</span>
        </p>
        <!-- ul -->
        <ul class="clearfix">
          <li><span>1.  Select any product</span></li>
          <li class="second"><span>2. Complete the purchase</span></li>
          <li class="last"><span>3. Enter email in the pop-up Window</span></li>
        </ul>
        <!-- gift -->
        <div class="gift clearfix">
          <!-- sd -->
          <dl class="sd">
            <dt><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="Smart Defrag PRO"></dt>
            <dd>
              <h3>Smart Defrag PRO</h3>
              <del>$19.99</del>
              <p>
                Fast & Deep Defrag for the <br>
                Maximized Hard Drive & PC <br>
                Performance
              </p>
            </dd>
          </dl>
          <!-- iu -->
          <dl class="iu">
            <dt><img src="<?php echo getStaticUrl('images/gift-iu.png')?>" alt="IObit Uninstaller PRO"></dt>
            <dd>
              <h3>IObit Uninstaller PRO</h3>
              <del>$19.99</del>
              <p>
                Remove Stubborn Programs <br>
                 without Leaving a Trace
              </p>
            </dd>
          </dl>
          <!-- pf -->
          <dl class="sd">
            <dt><img src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="Protected Folder"></dt>
            <dd>
              <h3>Protected Folder</h3>
              <del>$19.99</del>
              <p>
                Secure Important Files <br>
                with One Password Access
              </p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end float -->

<!-- banner(offer80) -->
<div class="banner">
  <div class="wrapper">
    <!-- title -->
    <h1>2019 Black Friday & Cyber Monday Sale</h1>
    <!-- off -->
    <img class="off" src="<?php echo getStaticUrl('images/off80.png')?>" alt="Up to 80% OFF">
    <!-- content -->
    <div class="content clearfix">
      <!-- title -->
      <h2>Get <b>80% OFF</b> the Best Value Pack</h2>
      <!-- bundle -->
      <img class="bundle fl" src="<?php echo getStaticUrl('images/banner-bundle.png')?>" alt="">
      <!-- message -->
      <div class="message fl">
        <!-- includes -->
        <p>Includes:</p>
        <!-- ul -->
        <ul>
          <li>
            <strong>Advanced SystemCare 13 PRO</strong>
            Deep clean your PC with one-click & make your PC cleaner, faster <br>
            and more secure.
          </li>
          <li>
            <strong>Driver Booster 7 PRO</strong>
            Automatically and safely keep over 3,500,000  drivers & popular game <br>
            components up-to-date.
          </li>
          <li>
            <strong>IObit Malware Fighter 7 PRO </strong>
            Triple engines to fully protect your PC against malware, <br>
            virus & ransomware in real time.
          </li>
        </ul>
        <!-- buy area -->
        <div class="buyarea clearfix">
          <!-- 1pc -->
          <dl>
            <dt>
            <p class="price">Only <b>$27.97</b> <del>$139.85</del></p>
            </dt>
            <dd>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=enaff2019valuepack2797&ref=enaff-asc13dbimf-2019bf1pc&aff=<?php echo $_GET['aff']?>"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc13dbimf2019bf1pc');fsBuy()">
                <i class="all-icons"></i>
                <span>Buy Now</span>
                <small>1 year / 1 pc</small>
              </a>
            </dd>
          </dl>
          <!-- 3pcs -->
          <dl>
            <dt>
            <p class="price">Only <b>$33.97</b> <del>$169.85</del></p>
            </dt>
            <dd>
              <a class="buybtn red"
                 href="https://www.iobit.com/buy.php?product=enaff2019valuepack3397&ref=enaff-asc13dbimf-2019bf3pc&aff=<?php echo $_GET['aff']?>"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc13dbimf2019bf3pc');fsBuy()">
                <i class="all-icons"></i>
                <span>Buy Now</span>
                <small>1 year / 3 pcs</small>
              </a>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- offer70 -->
<div class="offer offer70">
  <div class="wrapper">
    <!-- title -->
    <h2>Get <b>70% OFF</b> the Must-Have PC & Mac Utilities</h2>
    <!-- content -->
    <div class="content clearfix">
      <!-- asc -->
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/pro-asc.png')?>" alt="Advanced SystemCare PRO"></dt>
        <dd class="text">
          <h3>The World's 1st PC Tune-Up Utility</h3>
          <p>Deep clean your PC with one-click & make your PC cleaner, <br> faster and more secure.</p>
        </dd>
        <dd class="buyarea clearfix">
          <!-- 1pc -->
          <dl>
        <dt>
        <p class="price">Only <b>$11.99</b> <del>$39.95</del></p>
        </dt>
        <dd>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=enaffasc131199&ref=enaff-asc13-2019bf1pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc132019bf1pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 1 pc</small>
          </a>
        </dd>
      </dl>
      <!-- 3pcs -->
      <dl>
        <dt>
        <p class="price">Only <b>$14.99</b> <del>$49.95</del></p>
        </dt>
        <dd>
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=enaffasc131499&ref=enaff-asc13-2019bf3pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc132019bf3pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 3 pcs</small>
          </a>
        </dd>
      </dl>
      </dd>
      </dl>
      <!-- db -->
      <dl class="fr">
        <dt><img src="<?php echo getStaticUrl('images/pro-db.png')?>" alt="Driver Booster PRO"></dt>
        <dd class="text">
          <h3>Your Must-have Driver Updating Tool</h3>
          <p>Automatically and safely keep over 3,500,000 drivers & popular <br> game components up-to-date.</p>
        </dd>
        <dd class="buyarea clearfix">
          <!-- 1pc -->
          <dl>
        <dt>
        <p class="price">Only <b>$14.99</b> <del>$49.95</del></p>
        </dt>
        <dd>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=enaffdb71499&ref=enaff-db7-2019bf1pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb72019bf1pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 1 pc</small>
          </a>
        </dd>
      </dl>
      <!-- 3pcs -->
      <dl>
        <dt>
        <p class="price">Only <b>$17.99</b> <del>$59.95</del></p>
        </dt>
        <dd>
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=enaffdb71799&ref=enaff-db7-2019bf3pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb72019bf3pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 3 pcs</small>
          </a>
        </dd>
      </dl>
      </dd>
      </dl>
      <!-- imf -->
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/pro-imf.png')?>" alt="IObit Malware Fighter PRO"></dt>
        <dd class="text">
          <h3>Stay Protected with Full-scale Antimalware</h3>
          <p>Triple engines to fully protect your PC against malware, <br> virus & ransomware in real time.</p>
        </dd>
        <dd class="buyarea clearfix">
          <!-- 1pc -->
          <dl>
        <dt>
        <p class="price">Only <b>$14.99</b> <del>$49.95</del></p>
        </dt>
        <dd>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=enaffimf71499&ref=enaff-imf7-2019bf1pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf72019bf1pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 1 pc</small>
          </a>
        </dd>
      </dl>
      <!-- 3pcs -->
      <dl>
        <dt>
        <p class="price">Only <b>$17.99</b> <del>$59.95</del></p>
        </dt>
        <dd>
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=enaffimf71799&ref=enaff-imf7-2019bf3pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf72019bf3pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 3 pcs</small>
          </a>
        </dd>
      </dl>
      </dd>
      </dl>
      <!-- mac -->
      <dl class="fr mac">
        <dt><img src="<?php echo getStaticUrl('images/pro-mac.png')?>" alt="MacBooster"></dt>
        <dd class="text">
          <h3>A Faster and more Secured Mac</h3>
          <p>Your one-stop Mac maintenance tool to clean up junks, <br> boost Mac performance, and remove Mac malware & virus.</p>
        </dd>
        <dd class="buyarea clearfix">
          <!-- 1pc -->
          <dl>
        <dt>
        <p class="price">Only <b>$17.99</b> <del>$59.95</del></p>
        </dt>
        <dd>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=enaffmb71799&ref=enaff-mb7-2019bf1mac&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'mbbuy', 'buy', 'enaffmb72019bf1mac');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1Mac / Lifetime</small>
          </a>
        </dd>
      </dl>
      <!-- 3pcs -->
      <dl>
        <dt>
        <p class="price">Only <b>$32.99</b> <del>$109.95</del></p>
        </dt>
        <dd>
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=enaffmb73299&ref=enaff-mb7-2019bf3mac&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'mbbuy', 'buy', 'enaffmb72019bf3mac');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>3Macs / Lifetime</small>
          </a>
        </dd>
      </dl>
      </dd>
      </dl>
      <!-- isu-->
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/pro-isu.png')?>" alt="IObit Software Updater PRO"></dt>
        <dd class="text">
          <h3>Auto-Keep your Software Up-to-date</h3>
          <p>Automatically update your software on schedule & download <br> & install recommended essential software.</p>
        </dd>
        <dd class="buyarea clearfix">
          <!-- 1pc -->
          <dl>
        <dt>
        <p class="price">Only <b>$8.99</b> <del>$29.95</del></p>
        </dt>
        <dd>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=enaffisu2899&ref=enaff-isu2-2019bf1pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'isubuy', 'buy', 'enaffisu22019bf1pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 1 pc</small>
          </a>
        </dd>
      </dl>
      <!-- 3pcs -->
      <dl>
        <dt>
        <p class="price">Only <b>$11.99</b> <del>$39.95</del></p>
        </dt>
        <dd>
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=enaffisu21199&ref=enaff-isu2-2019bf3pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'isubuy', 'buy', 'enaffisu22019bf3pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 3 pcs</small>
          </a>
        </dd>
      </dl>
      </dd>
      </dl>
      <!-- iu -->
      <dl class="fr">
        <dt><img src="<?php echo getStaticUrl('images/pro-iu.png')?>" alt="IObit Uninstaller PRO"></dt>
        <dd class="text">
          <h3>Completely Remove Stubborn Programs</h3>
          <p>Completely delete stubborn and bundled programs, <br> Windows Apps & browser plug-ins without leaving a trace.</p>
        </dd>
        <dd class="buyarea clearfix">
          <!-- 1pc -->
          <dl>
        <dt>
        <p class="price">Only <b>$9.99</b> <del>$33.30</del></p>
        </dt>
        <dd>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=enaffiu9999&ref=enaff-iu9-2019bf1pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu92019bf1pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 1 pc</small>
          </a>
        </dd>
      </dl>
      <!-- 3pcs -->
      <dl>
        <dt>
        <p class="price">Only <b>$12.99</b> <del>$43.30</del></p>
        </dt>
        <dd>
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=enaffiu91299&ref=enaff-iu9-2019bf3pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu92019bf3pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 3 pcs</small>
          </a>
        </dd>
      </dl>
      </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end offer70 -->

<!-- offer75 -->
<div class="offer offer75">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Get <b>75% OFF</b> the Top PC Utility Bundles</h2>
    <!-- content -->
    <div class="content clearfix">
      <!-- asc+db -->
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/bundle-ascdb.png')?>" alt="Advanced SystemCare PRO+Driver Booster PRO"></dt>
        <dd class="text">
          <h3>Make your PC Faster and more Stable</h3>
          <p>Includes: <br> Advanced SystemCare PRO and <br> Driver Booster PRO</p>
        </dd>
        <dd class="buyarea clearfix">
          <!-- 1pc -->
          <dl>
        <dt>
        <p class="price">Only <b>$22.48</b> <del>$89.90</del></p>
        </dt>
        <dd>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=enaff2019toppacka2248&ref=enaff-asc13db-2019bf1pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc13db2019bf1pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 1 pc</small>
          </a>
        </dd>
      </dl>
      <!-- 3pcs -->
      <dl>
        <dt>
        <p class="price">Only <b>$27.48</b> <del>$109.90</del></p>
        </dt>
        <dd>
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=enaff2019toppacka2748&ref=enaff-asc13db-2019bf3pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc13db2019bf3pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 3 pcs</small>
          </a>
        </dd>
      </dl>
      </dd>
      </dl>
      <!-- asc+imf -->
      <dl class="fl second">
        <dt><img src="<?php echo getStaticUrl('images/bundle-ascimf.png')?>" alt="Advanced SystemCare PRO+IObit Malware Fighter PRO"></dt>
        <dd class="text">
          <h3>Keep your PC Fast, Clean and Safe</h3>
          <p>Includes: <br> Advanced SystemCare PRO and <br> IObit Malware Fighter PRO</p>
        </dd>
        <dd class="buyarea clearfix">
          <!-- 1pc -->
          <dl>
        <dt>
        <p class="price">Only <b>$22.48</b> <del>$89.90</del></p>
        </dt>
        <dd>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=enaff2019toppackb2248&ref=enaff-asc13imf-2019bf1pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc13imf2019bf1pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 1 pc</small>
          </a>
        </dd>
      </dl>
      <!-- 3pcs -->
      <dl>
        <dt>
        <p class="price">Only <b>$27.48</b> <del>$109.90</del></p>
        </dt>
        <dd>
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=enaff2019toppackb2748&ref=enaff-asc13imf-2019bf3pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc13imf2019bf3pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 3 pcs</small>
          </a>
        </dd>
      </dl>
      </dd>
      </dl>
      <!-- db+imf -->
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/bundle-dbimf.png')?>" alt="Driver Booster PRO+IObit Malware Fighter PRO"></dt>
        <dd class="text">
          <h3>Make your PC Faster and more Stable</h3>
          <p>Includes: <br> Driver Booster PRO and <br> IObit Malware Fighter PRO
          </p>
        </dd>
        <dd class="buyarea clearfix">
          <!-- 1pc -->
          <dl>
        <dt>
        <p class="price">Only <b>$24.98</b> <del>$99.90</del></p>
        </dt>
        <dd>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=enaff2019toppackc2498&ref=enaff-db7imf-2019bf1pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb7imf2019bf1pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 1 pc</small>
          </a>
        </dd>
      </dl>
      <!-- 3pcs -->
      <dl>
        <dt>
        <p class="price">Only <b>$29.98</b> <del>$119.90</del></p>
        </dt>
        <dd>
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=enaff2019toppackc2998&ref=enaff-db7imf-2019bf3pc&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb7imf2019bf3pc');fsBuy()">
            <i class="all-icons"></i>
            <span>Buy Now</span>
            <small>1 year / 3 pcs</small>
          </a>
        </dd>
      </dl>
      </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end offer75 -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <!-- review-content -->
    <div class="review-content">
      <!-- Techradar -->
      <dl class="active">
        <dd>
          <h3>Media Review</h3>
          <h4>"A PC optimization tool that wipes out security threats and helps stop new ones in their tracks."</h4>
          <p>"IObit Avanced SystemCare is one of our favorite PC cleanup and maintenance tools, and the latest version builds on an already great toolkit with new security-focused options."</p>
        </dd>
      </dl>
      <!-- Myo Thuya -->
      <dl>
        <dd>
          <h3>User Review</h3>
          <h4>"My PC is faster, securer and newer more than the last 8 months ago."</h4>
          <p>"With Driver Booster, I can easily know which devices drivers are out of date and can easily update them. Besides, it helps me to fix sound error, network error, device error etc...I don't believe it before I using, but after using it I really love it..just my PC is faster ,securer and newer more than the last 8 months ago..so thank you IObit."</p>
        </dd>
      </dl>
      <!-- Charles R.Widick -->
      <dl>
        <dd>
          <h3>User Review</h3>
          <h4>"My choice is still overwhelmingly Advanced SystemCare Pro"</h4>
          <p>"As a computer repair tech I find by downloading and scanning with ASC most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</p>
        </dd>
      </dl>
      <!-- Gelu Batir -->
      <dl>
        <dd>
          <h3>User Review</h3>
          <h4>"It scans my laptop without affecting its performance while I also recommended this product to two of my friends."</h4>
          <p>"I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends. "</p>
        </dd>
      </dl>
    </div>
    <!-- review-users -->
    <ul>
      <li class="active">
        <img src="<?php echo getStaticUrl('images/techradar.png')?>" alt="">
        <cite>Techradar</cite>
      </li>
      <li>
        <img src="<?php echo getStaticUrl('images/user-myo-thuya.png')?>" alt="">
        <cite>Myo Thuya</cite>
      </li>
      <li>
        <img src="<?php echo getStaticUrl('images/user-charles-r-widick.png')?>" alt="">
        <cite>Charles.R.Widick</cite>
      </li>
      <li>
        <img src="<?php echo getStaticUrl('images/user-gelu-batir.png"')?> alt="">
        <cite>Gelu Batir</cite>
      </li>
    </ul>
    <!-- arrow -->
    <span class="arrow"></span>
  </div>
</div>
<!-- end review -->

<!-- service -->
<div class="service">
  <div class="wrapper clearfix">
    <!-- payment -->
    <p class="payment">Accepted Payments <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""></p>
    <!-- dl -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/service-icon01.png')?>" alt=""></dt>
      <dd>
        <h3>Money-Back Guarantee</h3>
        <p>If you're not satisfied with <br> our products, you'll get a full <br> refund of your purchase <br> within 60 days.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/service-icon02.png')?>" alt=""></dt>
      <dd>
        <h3>Secure Payment</h3>
        <p>We're committed to protecting <br> your personal info with advanced <br> encryption and anti-spam <br> protection.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/service-icon03.png')?>" alt=""></dt>
      <dd>
        <h3>Free, 24/7 Tech Support</h3>
        <p>Our premium support team <br> will respond to you for any <br> questions you may have regarding <br> our products within 24 hours.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/service-icon04.png')?>" alt=""></dt>
      <dd>
        <h3>Free Updates</h3>
        <p>You will get all software <br> updates for free during <br> the subscription period.</p>
      </dd>
    </dl>
  </div>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dd>Note:</dd>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      <dd>*.Data may vary based on different system or computer.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved.</p>
  </div>
</div>
<!-- end footer -->

<!-- coupon -->
<div class="coupon">
  <!-- info -->
  <div class="info" id="info">
    <h2>Congrats! You've been selected!</h2>
    <p>Exclusive Offer: Buy any item, get <b>$60 value</b> gift pack for free!</p>
    <img src="<?php echo getStaticUrl('images/info-gift.png')?>" alt="">
    <!-- shop -->
    <a class="shop" href="javascript: closeCoupon(1);statistic(2,'shop now')">Shop Now</a>
    <!-- close -->
    <a class="close" href="javascript: closeCoupon(1);statistic(1,'pop close')"> × </a>
  </div>

  <!-- mail -->
  <div class="mail clearfix" id="mail">
    <div class="content">
      <h3>Thank you for your order.</h3>
      <p>
        To claim your <b>FREE</b> gift pack, please enter your email address <br>
        in the input box and click the "Claim My Gift Pack" button <br>
        below. The gift pack will be sent over in minutes.
      </p>
      <!-- enter your email address -->
      <form onsubmit="sendGift()" id="mail-form">
        <label>
          <input type="text" value="" class="email" placeholder="Enter your email address here">
        </label>
        <button type="button" value="" onclick="sendGift()" class="emailbtn"><i class="all-icons"></i> Claim My Gift Pack</button>
      </form>
      <em>For any help, please email tickets@iobit.com with your order id included.</em>
    </div>
  </div>
</div>
<!-- end coupon -->

<!-- nav -->
<div class="nav">
  <!-- offer80 -->
  <a class="first" href="javascript: goTarget($('.banner'), 200)">Best Value Pack</a>
  <!-- offer70 -->
  <a class="second" href="javascript: goTarget($('.offer70'), 100)">70% OFF Top Sellers</a>
  <!-- offer75 -->
  <a class="last" href="javascript: goTarget($('.offer75'), 200)">75% OFF Top Bundles</a>
</div>
<!-- end nav -->

<div class="pop-up">
  <div class="pop-main">
    <div class="pop-box">
      <h2>Note:</h2>
      <p>Thank you for your visit and your interest in IObit products! This Special Offer is over now.</p>
      <p>You will be redirected to the latest IObit promotion page automatically.</p>
    </div>
  </div>
</div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>