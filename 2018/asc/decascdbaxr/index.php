<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='ascprepa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['st'])?'':('-'.$_GET['st']));
if(in_array($_GET['pop'],array('x_ascdb','x_dbasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['user'],array('1','2'))){
  $refStr.=$_GET['user'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>75% OFF to Get Advanced SystemCare PRO & Driver Booster PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600|Roboto:700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <div class="title">
        <h1>Christmas BIGSALE</h1>
        <p>Exclusive for IObit Valued Users!</p>
      </div>
      <!-- palen -->
      <div class="palen clearfix">
        <!-- left-message -->
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <!-- right-message -->
        <div class="right fr">
          <h2>
            Driver Booster 6 PRO
            <span class="all-icons">+</span>
            Advanced SystemCare 12 PRO
          </h2>
          <div class="price">
            <!-- progress bar -->
            <div class="count">
              <p class="watching">
                <i class="all-icons"></i> <b id="packbox" class="reduceGift packbox"><span><b class="list"><strong>*</strong></b></span><span class="last"><b class="list"><strong>*</strong></b></span></b> seats left now!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <ul class="clearfix">
                <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching</li>
                <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">000</b> Ms* Left</li>
              </ul>
            </div>
            <p class="rate">Only &nbsp;&nbsp;<strong>$<big>29</big>.99</strong> <del>$124.84</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=ascdb20182999&ref=xr_ascdba<?php echo $refStr;?>&refs=purchase_ascx"
               onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase-xmas');">
              Activate Now
            </a>
            <p class="year">1 Year Subscription / 3 PCs</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- benfits start -->
  <div class="benfits">
    <div class="wrapper">
      <!-- title -->
      <h2>IObit’s Double Guarantee: Smoother PC & Better Gaming</h2>
      <!-- describe -->
      <p class="over">
        Driver Booster 6 PRO working together with world-leading tune-up utility – Advanced SystemCare 12 PRO, <br>
        keeps your computer run smoothly and PC game performs well.
      </p>
    </div>
  </div>
  <!-- benfits end -->

  <!-- together start -->
  <div class="together">
    <div class="wrapper">
      <div class="panel clearfix">
        <!-- ASC -->
        <div class="asc-box fl clearfix">
          <div class="box fl">
            <h3>Advanced SystemCare 12 PRO <i></i></h3>
            <dl>
              <dd>
                <b>Much stable system</b> that <br>
                no useless registries piling <br>
                up on your disk.
              </dd>
              <dd>
                <b>Faster game performance</b> <br>
                as unnecessary processes <br>
                stopped automatically to <br>
                clean RAM.
              </dd>
              <dd>
                <b>Faster PC response</b> owe to <br>
                300%* faster internet <br>
                connection and 200%* <br>
                quicker startup.
              </dd>
            </dl>
          </div>
          <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-asc-box.png')?>" alt="Advanced SystemCare Pro"/></div>
        </div>
        <div class="db-box fl clearfix">
          <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-db-box.png')?>" alt="Driver Booster 6 Pro"/></div>
          <!-- DB -->
          <div class="box fl">
            <h3><i></i> Driver Booster 6 PRO</h3>
            <dl>
              <dd>
                <b>Smoother game loading</b> <br>
                equipped with necessary and <br>
                updated game components.
              </dd>
              <dd>
                <b>Improved PC performance</b> for <br>
                3,000,000+ PC drivers can be <br>
                kept up-to-date.
              </dd>
              <dd>
                <b>Better gaming experience</b> with <br>
                Game Ready Drivers and game <br>
                components that being kept <br>
                updated.
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- together end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper clearfix">
      <span class="arrow"><i></i></span>
      <!-- title -->
      <h2>Plus You Can Also Enjoy Following Amazing Features:</h2>
      <!-- icons -->
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-01.png" alt=""></dt>
        <dd>
          Personal Data Protection
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-02.png" alt=""></dt>
        <dd>
          Digital Fingerprint Protection
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-03.png" alt=""></dt>
        <dd>
          Auto Driver Update
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-04.png" alt=""></dt>
        <dd>
          Device Error Fixing
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper clearfix">
      <h2>So Don’t Miss Out! Get These Two Powerful Tools for Your PC & Game Now</h2>
      <p class="watching">
        <b id="packbox" class="reduceGift packbox"><span><b class="list"><strong>*</strong></b></span><span class="last"><b class="list"><strong>*</strong></b></span></b> packs left
      </p>
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <p>Only &nbsp;&nbsp;<strong>$<big>29</big>.99</strong> <del>$124.84</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=ascdb20182999&ref=xr_ascdba<?php echo $refStr;?>&refs=purchase_ascx"
           onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase-xmas');">
          Activate Now
        </a>
        <p class="year">1 Year Subscription / 3 PCs</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="container clearfix">
    <div class="review wrapper">
      <div class="review-box">
        <!-- 01 -->
        <div class="reviews clearfix">
          <h2>User Review</h2>
          <h3>"My system has never run better."</h3>
          <p>"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</p>
        </div>
        <!-- 02 -->
        <div class="reviews clearfix">
          <h2>User Review</h2>
          <h3>"My choice is still overwhelmingly Advanced SystemCare Pro"</h3>
          <p>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</p>
        </div>
        <!-- 03 -->
        <div class="reviews clearfix active">
          <h2>Media Review</h2>
          <h3>"A PC optimization tool that wipes out security threats and helps stop new ones in their tracks."</h3>
          <p>"IObit Avanced SystemCare is one of our favorite PC cleanup and maintenance tools, and the latest version builds on an already great toolkit with new security-focused options."</p>
        </div>
        <!-- 04 -->
        <div class="reviews clearfix">
          <h2>Media Review</h2>
          <h3>"IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best."</h3>
          <p>"Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack."</p>
        </div>
        <!-- 05 -->
        <div class="reviews clearfix">
          <h2>User Review</h2>
          <h3>"My PC is faster, securer and newer more than the last 8 months ago."</h3>
          <p>"With Driver Booster, I can easily know which devices drivers are out of date and can easily update them. Besides, it helps me to fix sound error, network error, device error etc...I don't believe it before I using, but after using it I really love it..just my PC is faster ,securer and newer more than the last 8 months ago..so thank you IObit."</p>
        </div>
        <!-- 06 -->
        <div class="reviews clearfix">
          <h2>User Review</h2>
          <h3>"I strongly recommend Driver Booster, it will help to update the driver quickly and	easily."</h3>
          <p>"Driver booster is an amazing application. As for someone who has a lot of applications and drives as does not have the time to manually update them, I strongly recommend Driver Booster, it will help to update the driver quickly and easily."</p>
        </div>
      </div>

      <ul class="handle clearfix">
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Gordon-Griswold.png" alt="Gordon Griswold"><span></span></div>
          <strong>Gordon Griswold</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"><span></span></div>
          <strong>Charles R. Widick</strong>
        </li>
        <li class="active">
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/techradar.png" alt="Techradar"><span></span></div>
          <strong>Techradar</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine"><span></span></div>
          <strong>PC Magazine</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya"><span></span></div>
          <strong>Myo Thuya</strong>
        </li>
        <li class="last">
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund"><span></span></div>
          <strong>Adam Backlund</strong>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>World-wide Awards</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <div class="bottom">
    <div class="wrapper">

      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
            <p>
              We’re confident that activating PRO edition will improve your PC and game performance for affordable price!
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
          <dd>*.Data may vary based on different system or computer.</dd>
          <dd>
            *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
          </dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
      </div>
      <!-- footer end -->

    </div>
  </div>

  <!-- floatlayer start -->
  <div class="floatlayer">
    <div class="wrapper clearfix">
      <!-- box -->
      <img class="fl" src="<?php echo $pResUrl;?>images/asc-floatlayer-box.png" alt="">
      <!-- progress bar -->
      <div class="price fl">
        <div class="count">
          <ul class="clearfix">
            <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <span class="packsNum"><?php echo $viewNum;?></span> seats left now! </li>
            <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms* Left</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
      </div>
      <div class="fr">
        <div class="price">
          <p>Only &nbsp;&nbsp;<strong>$<big>29</big>.99</strong> <del>$124.84</del></p>
        </div>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=ascdb20182999&ref=xr_ascdba<?php echo $refStr;?>&refs=purchase_ascx"
           onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase-xmas');">
          Activate Now
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <!-- mask start -->
  <div class="mask"></div>
  <div class="mask-box">
    <div class="title">
      <h2>SURPRISE!! Merry Christmas to You</h2>
    </div>
    <div class="clearfix">
      <div class="fl left">
        <img src="<?php echo getStaticUrl('images/asc-mask-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fl">
        <h3>Extra $ <b>1</b> OFF as our gift for you!</h3>
        <p><strong>$<big>28</big>.<sup>99</sup></strong> <b>1 year / 3 PCs</b></p>
        <!-- buybtn -->
        <a class="buybtn yellow popbtn"
           href="https://www.iobit.com/buy.php?product=ascdb20182899&ref=xr_ascdba2899<?php echo $refStr;?>&refs=purchase_ascx"
           onclick="ga('send', 'event', 'ascdbbuypop', 'buy', 'ascdbpurchase-xmas');">
          Activate Now
        </a>
        <p class="year"> Seize your last chance for the big Christmas saving! </p>
      </div>
    </div>
  </div>
  <!-- mask end -->

</div>



<!-- backtotop start -->
<div id="backtotop" class="backtotop">top</div>
<!-- backtotop end -->


<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  var viewNum = "<?php echo $viewNum;?>";
</script>

</body>
</html>