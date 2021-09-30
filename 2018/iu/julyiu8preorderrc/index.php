<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(60,88);

if(!empty($_GET['action'])&&($_GET['action']=='getViewNum')){
    echo $viewNum;
    exit();
}

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
    $date=$_GET['d'];
    $cName='eniuprerc_p'.$date;
    $cookie=$_COOKIE[$cName];
    if($cookie){
        $packsNum=$_COOKIE[$cName];
        if($packsNum>0){
            $packsNum--;
        }
    }else{
        $packsNum=48;
    }
    setcookie($cName,$packsNum);
    echo $packsNum;
    exit();
}

$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['to'])?'':('-'.$_GET['to']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pay $0 to pre-order the new IObit Uninstaller PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public'];?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <h1>The Global Presale  Is Live</h1>
    <h2>Rush! 500 limited quantities available / <span class="soldNum">450</span> sold now</h2>
    <div class="message clearfix">
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="img-box">
      <div class="right-message">
        <h3>IObit Uninstaller 8 PRO</h3>
        <h4>Now: <strong>$0</strong><del>$29.99</del></h4>
        <div class="progress-bar">
          <div class="left-number">
            <span class="viewNum"><?php echo $viewNum?></span> watching , <strong class="gift">32</strong> seats  left now!
          </div>
          <div class="date">
            Expected to run out : <strong>05</strong>M: <strong>05</strong>S: <strong>05</strong>Ms
          </div>
          <div class="bar">
            <span></span>
          </div>
        </div>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=iu8preorder&ref=iu8preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderrc');"><span>Pre-order Now</span></a>
        <p>1 Year Subscription / 3 PCs</p>
      </div>
    </div>
    <ul class="distance">
      <li>get 50% off original price <br> 30 days after pre-order</li>
      <li class="center">  If satisfied   <span>$0 pre-order today</span> If unsatisfied</li>
      <li>cancel within 30 days <br> without paying a fee</li>
    </ul>
  </div>
</div>
<!-- banner end -->
<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h3 class="title">Why IObit Uninstaller 8 PRO?</h3>
    <p class="number">1</p>
    <p class="describe">New features and improvements worth trying</p>
    <dl class="rb fl">
      <dt>
        <img src="<?php echo $pResUrl; ?>images/remove-bundleware.png" alt="">
      </dt>
      <dd>
        <h3>Remove Bundleware</h3>
        <p>
          Detect adware, toolbars, and<br>
          unwanted third-party programs<br>
          that install alongside freeware to<br>
          advertise or steal your privacy data.
        </p>
      </dd>
    </dl>
    <dl class="dsp fl">
      <dt>
        <img src="<?php echo $pResUrl; ?>images/delete-stubborn-programs.png" alt="">
      </dt>
      <dd>
        <h3>Delete Stubborn Programs</h3>
        <p>
          Completely uninstall unwanted<br>
          programs or stubborn programs you<br>
          can't uninstall by Windows or other<br>
          programs.
        </p>
      </dd>
    </dl>
    <dl class="osu fl">
      <dt>
        <img src="<?php echo $pResUrl; ?>images/oneClick-software-updater.png" alt="">
      </dt>
      <dd>
        <h3>One-click Software Updater</h3>
        <p>
          With one click, upgrade your<br>
          important software on your PC<br>
          without any user<br>
          intervention.
        </p>
      </dd>
    </dl>
    <dl class="fsb fr">
      <dt>
        <img src="<?php echo $pResUrl; ?>images/fast-safe-browser.png" alt="">
      </dt>
      <dd>
        <h3>Fast & Safe Browser</h3>
        <p>
          Remove malicious or advertising<br>
          supported plug-ins from browser<br>
          to ensure secure & clean browsing<br>
          experience.
        </p>
      </dd>
    </dl>
  </div>
</div>
<!-- feature end -->
<!-- comparision start -->
<div class="comparision">
  <div class="wrapper">
    <p class="number">2</p>
    <h3 class="title">More benefits of the Pro version</h3>
    <table>
      <thead>
      <tr>
        <td class="free">
          <p>
            IObit Uninstaller 8 Free<br>
            <span> Your current version</span>
          </p>
        </td>
        <td class="space"></td>
        <td class="vs">
          VS
        </td>
        <td class="space"></td>
        <td class="pro">
          IObit Uninstaller 8 PRO
        </td>
      </tr>
      </thead>
      <tbody>
      <!-- 1 -->
      <tr>
        <td class="free">
          <span class="correct"></span>
        </td>
        <td class="space"></td>
        <td>
          Uninstall unwanted programs & Windows apps
        </td>
        <td class="space"></td>
        <td class="pro">
          <span class="correct"></span>
        </td>
      </tr>
      <!-- 2 -->
      <tr>
        <td class="free">
          <span class="error"></span>
        </td>
        <td class="space"></td>
        <td>
          Uninstall stubborn programs that refuse to uninstall
        </td>
        <td class="space"></td>
        <td class="pro">
          <span class="correct"></span>
        </td>
      </tr>
      <!-- 3 -->
      <tr>
        <td class="free">
          <span class="error"></span>
        </td>
        <td class="space"></td>
        <td>
          Uninstall unwanted third party programs alongside freeware
        </td>
        <td class="space"></td>
        <td class="pro">
          <span class="correct"></span>
        </td>
      </tr>
      <!-- 4 -->
      <tr>
        <td class="free">
          <span class="error"></span>
        </td>
        <td class="space"></td>
        <td>
          Identify and remove malicious plug-ins and toolbars
        </td>
        <td class="space"></td>
        <td class="pro">
          <span class="correct"></span>
        </td>
      </tr>
      <!-- 5 -->
      <tr>
        <td class="free">
          <span class="error"></span>
        </td>
        <td class="space"></td>
        <td>
          Auto clean all leftovers that might be slowing down PC
        </td>
        <td class="space"></td>
        <td class="pro">
          <span class="correct"></span>
        </td>
      </tr>
      <!-- 6 -->
      <tr>
        <td class="free">
          <span class="error"></span>
        </td>
        <td class="space"></td>
        <td>
          Delete residual that other utilities failed to remove
        </td>
        <td class="space"></td>
        <td class="pro">
          <span class="correct"></span>
        </td>
      </tr>
      <!-- 7 -->
      <tr>
        <td class="free">
          <span class="error"></span>
        </td>
        <td class="space"></td>
        <td>
          1-click to update essential software
        </td>
        <td class="space"></td>
        <td class="pro">
          <span class="correct"></span>
        </td>
      </tr>
      <!-- 8 -->
      <tr>
        <td class="free">
          <span class="error"></span>
        </td>
        <td class="space"></td>
        <td>
          Auto update when a new version is available
        </td>
        <td class="space"></td>
        <td class="pro">
          <span class="correct"></span>
        </td>
      </tr>
      <!-- 9 -->
      <tr>
        <td class="free">
          <span class="error"></span>
        </td>
        <td class="space"></td>
        <td>
          Premium 24/7 Technical Support
        </td>
        <td class="space"></td>
        <td class="pro">
          <span class="correct"></span>
        </td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- comparision end -->
<!-- between-buy start -->
<div class="between-buy wrapper">
  <p class="number">3</p>
  <h2>Pay <strong>$0</strong> to enjoy all Pro benefits today</h2>
  <a class="buybtn" href="https://www.iobit.com/buy.php?product=iu8preorder&ref=iu8preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderrc');"><span>Pre-order Now</span></a>
  <p><span class="viewNum"><?php echo $viewNum?></span> watching, <strong class="gift">35</strong> seats left now</p>
</div>
<!-- between-buy end -->
<!-- review start -->
<div class="review wrapper">
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt=""></dt>
        <dd>
          <h2>Media Review</h2>
          <p>" This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."</p>
          <cite>MakeUseOf</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt=""></dt>
        <dd>
          <h2>User Review</h2>
          <p>"Uninstaller PRO is just one of five IObit family of ‘maintenance’ programs I have invested in my PC, like Chefs invested in their knives. Uninstaller is great at finding the remnants of bits and bytes hiding here and there taking up disk spaces and impacting the register. If I used the 'uninstall' of the software program to uninstall, it worked. But, Uninstaller PRO somehow popped up later and showed 35 files need to be cleared. All I need to do is click OK. Highly recommended and I bought a license for 3 PCs. Support service is courteous and excellent."</p>
          <cite>Joseph Yu</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt=""></dt>
        <dd>
          <h2>User Review</h2>
          <p>"IObit Uninstaller is probably one of the best software to remove unnecessary program from your computer. Unlike the basic windows uninstaller that program will remove all leftovers of the program, which later may slow down performance of your PC. I have been using this program for a several years and always it helps to keep my computer clean and fast. I had recommended this program to some of my friends in the past and would recommend it again today."</p>
          <cite>Sergey Erlich</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt=""></dt>
        <dd>
          <h2>User Review</h2>
          <p>"IObit Uninstaller is one of the best programs with its utilization. Easy to work with, very fast cleaning and deep cleaning. From version 5 with more other functionalities cooperating not only with Windows 10. Fast cleaning from plug-ins is also very comfortable. Great searching for duplicities not used programs as well. Thanks for your hospitality of me and my family’s computers."</p>
          <cite>Áda Görtler</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt=""></dt>
        <dd>
          <h2>User Review</h2>
          <p>"The IObit Uninstaller gets better with every update. I've been using it for more than 3 years now. It's fast to load and has simple UI. Some of the many features I regularly use are Batch uninstall, Powerful scan, File shredder and Recently installed feature which gives me quick access to a program that I just installed which I don't like or it doesn't work properly."</p>
          <cite>Lovro Žužić</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->
<!-- awards start -->
<div class="awards container">
  <div class="wrapper">
    <h3 class="title">World-wide Awards</h3>
    <p>As being trusted and awarded by those world-class media in the past seven years, you know you’ve got the right uninstaller.</p>
    <img class="awards-icon" src="<?php echo $pResUrl; ?>images/awards-icon.png" alt="">
  </div>
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
          <p>If you're not satisfied in the first 60 days, <br>we will give you back your money.</p>
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
          <p>You will receive the license within a few <br>minutes after purchase.</p>
        </dt>
      </dl>
    </div>
    <p class="note">
      *At the end of the 30-day free trial period, your credit card or PayPal account will be charged $14.77 automatically.<br>
      This 50% discount from the original price of $29.99 is bonus only for preorders!
    </p>
    <p class="copyright">Copyright © 2005 - 2018 IObit. All Rights Reserved</p>
  </div>
</div>
<!-- footer end -->
<!-- float start -->
<div class="float clearfix">
  <div class="wrapper">
    <img src="<?php echo getStaticUrl('images/fl-iu-box.png')?>" alt="" class="img-box">
    <div class="progress-bar">
      <div class="left-number">
        <span class="viewNum"><?php echo $viewNum?></span> watching , <strong class="gift">32</strong> seats left now!
      </div>
      <div class="date">
        Expected to run out : <strong>05</strong>M: <strong>05</strong>S: <strong>05</strong>Ms
      </div>
      <div class="bar">
        <span></span>
      </div>
    </div>
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=iu8preorder&ref=iu8preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderrc');"><span>$0 Pre-order Now</span></a>
  </div>
</div>
<!-- float end -->
<!-- pop-over statr -->
<div class="pop-over">
  <h2>OOPS</h2>
  <h3>Pre-order reservations are full today.</h3>
  <a href="https://purchase.iobit.com/en/iu/index.php?ref=preorderrc" onclick="ga('send', 'event', 'iu7buy', 'buy', 'iu8predorderrc');">Check another offer>></a>
</div>
<div class="pop-bg"></div>
<!-- pop-over end -->
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>