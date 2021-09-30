<?php
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../../';
  }

if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='decxdb'.$date;
  if (empty($_COOKIE[$c_name])) {
    $packsNum = 77;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 3) {
        setcookie($c_name, 3, time() + 3600 * 24);
        $packsNum = $_COOKIE[$c_name];
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo $packsNum;
  exit;
}
  if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_iu_2017newyearsale';
  include $pRootUrl.'include/common.inc.php';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>83% OFF to Get IObit Uninstaller PRO & Exclusive Gift Package - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<div class="main">
  <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner -->
  <div class="banner">
    <div class="container">
      <div class="wrapper">
        <!-- header -->
        <div class="header">
           <a href="http://www.iobit.com/" target="_blank" class="logo fl">IObit</a>
           <div class="title">
             <h1>New Year Free Gift Pack</h1>
             <p>Up to 83% OFF & Gift Pack</p>
           </div>
        </div>
        <!-- activity -->
        <div class="activity">
          <div class="steps mainstep">
            <h2>FIRST 2,000 ORDERS</h2>
            <p>83% OFF + Free Gift Pack</p>
            <div class="focus"></div>
            <em class="notice">Hurry up, <i class="countNum">00</i> left today!</em>
            <div class="progress">
              <div class="counter"><span class="countNum">00</span></div>
              <div class="bar-mask">
                <div class="progressbar"></div>
              </div>
              <em class="count"><i class="countNum">00</i> of 2,000 left</em>
            </div>
          </div>
          <div class="steps others">
            <h2>NEXT 3,000 ORDERS</h2>
            <p>40% OFF</p>
          </div>
          <div class="steps others">
            <h2>REST ALL ORDERS</h2>
            <p>10% OFF</p>
          </div>
        </div>
        <!-- end activity -->
        <div class="showcase">
          <div class="details">
            <div class="imgcase"><img src="<?php echo $pResUrl; ?>images/boxshot-iu.png" alt=""></div>
            <dl>
              <dt><strong>IObit Uninstaller 6 PRO </strong></dt>
              <dd>1 Year / 3 PCs   <strong>$16.77</strong> <del>$59.93</del></dd>
            </dl>
            <ul>
              <li onclick="goTaget($('.gift-pack'))">
                <i class="all-icons"></i>
                <strong>Smart Defrag PRO <span>$0 </span></strong> 
                <del>$19.99</del>
              </li>
              <li onclick="goTaget($('.gift-pack'))">
                <i class="all-icons"></i>
                <strong>Protected Folder <span>$0 </span></strong> 
                <del>$19.99</del>
              </li>
            </ul>
          </div>
          <div class="checkout">
            <dl>
              <dt><strong>$16.77</strong> <span><del>$99.91</del> <em>83% OFF</em></span></dt>
              <dd>
                <a class="buybtn activebtn" href="http://www.iobit.com/buy.php?product=iupro1677_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu&tw=-8" onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu2017newyearsale')">
                  Activate Now
                </a>
              </dd>
              <dd>Hurry up, <span class="countNum">00</span> left today!</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <!-- end banner -->

  <!-- payments -->
  <div class="paymanets wrapper">
    <dl>
      <dt>Accepted Payments</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/payments.png" alt=""></dd>
    </dl>
    <dl>
      <dt>Money Back Guarantee  </dt>
      <dd><img src="<?php echo $pResUrl; ?>images/money-back-guarantee.png" alt=""></dd>
    </dl>
    <dl>
      <dt>Secure Payment</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dd>
    </dl>
  </div>
  <!-- end payments -->

  <!-- awards -->
  <div class="awards wrapper">
    <h2>Trusted and awarded by these medias</h2>
    <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
  </div>
  <!-- end awards -->
  
  <!-- benfits -->
  <div class="benfits wrapper">
    <h2>Powerfully Uninstall More Programs & Plug-ins for Lighter PC & Safer Online Browsing</h2>
    <div class="snapshoot">
      <img src="<?php echo $pResUrl; ?>images/snapshoot.jpg" alt="">
    </div>
    <div class="benfits-list clearfix">
      <div class="list fl">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-01.png" alt="">
        <dl>
          <dt>Lighter PC</dt>
          <dd>Quickly & thoroughly remove more stubborn programs & plug-ins with larger online database. </dd>
        </dl>
      </div>
      <div class="list fr">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-02.png" alt="">
        <dl>
          <dt>Ad-free Browsing</dt>
          <dd>
            Powerfully uninstall ad-based & malicious plug-ins to ensure secure & clean browsing experience.
          </dd>
        </dl>
      </div>
      <div class="list fl">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-03.png" alt="">
        <dl>
          <dt>AutoClean</dt>
          <dd>Automatically detect & clean leftovers of uninstalled programs including those removed by other uninstallers.</dd>
        </dl>
      </div>
      <div class="list fr">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-04.png" alt="">
        <dl>
          <dt>Win10 Compatible</dt>
          <dd>Fully support Windows 10 even Microsoft Edge extensions and Windows Apps removal.</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->
  <!-- gift-pack -->
  <div class="gift-pack wrapper">
    <h2>New Year Free Gift Pack</h2>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/boxshot-sd.png" alt="Smart Defrag PRO"></dt>
      <dd><strong>Smart Defrag PRO</strong></dd>
      <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / 1 PC</dd>
      <dd>Get the Maximum Hard Drive <span>Performance!</span></dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/boxshot-pf.png" alt="Protected Folder"></dt>
      <dd><strong>Protected Folder</strong></dd>
      <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / 1 PC</dd>
      <dd>Never Worry about Data Theft or Privacy Leaks!</dd>
    </dl>
  </div>
  <!-- end gift-pack -->
  <!-- mid-cart -->
  <div class="midcart">
    <div class="container">
      <div class="showcase">
        <div class="details">
          <div class="imgcase"><img src="<?php echo $pResUrl; ?>images/boxshot-iu.png" alt=""></div>
          <dl>
            <dt><strong>IObit Uninstaller 6 PRO </strong></dt>
            <dd>1 Year / 3 PCs   <strong>$16.77</strong> <del>$59.93</del></dd>
          </dl>
          <ul>
            <li onclick="goTaget($('.gift-pack'))">
              <i class="all-icons"></i>
              <strong>Smart Defrag PRO <span>$0 </span></strong> 
              <del>$19.99</del>
            </li>
            <li onclick="goTaget($('.gift-pack'))">
              <i class="all-icons"></i>
              <strong>Protected Folder <span>$0 </span></strong> 
              <del>$19.99</del>
            </li>
          </ul>
        </div>
        <div class="checkout">
          <dl>
            <dt><strong>$16.77</strong> <span><del>$99.91</del> <em>83% OFF</em></span></dt>
            <dd>
              <a class="buybtn activebtn" href="http://www.iobit.com/buy.php?product=iupro1677_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu&tw=-8" onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu2017newyearsale')">
               Activate Now
              </a>
            </dd>
            <dd>Hurry up, <span class="countNum">00</span> left today!</dd>
          </dl>
        </div>
        <p><i class="all-icons"></i>100% 60-DAY MONEY BACK GUARANTEE </p>
      </div>        
    </div>
  </div>
  <!-- end mid-cart -->


  <div class="wrapper">
    <!-- reviews -->
    <div class="review">
      <div class="content">
        <dl>
          <dt><h3>User Review</h3></dt>
          <dd>
            "IObit Uninstaller is a great tool for uninstalling programs and even toolbars and plugins. Its use has been very helpful to me as it uninstalls programs and applications, as well as it cleans their associated register, in most cases unknown to users like myself. It has a nice and intuitive interface without needing major informatics skills. I recommend it strongly!"
          </dd>
        </dl>
        <dl class="active">
          <dt><h3>Editor Review</h3></dt>
          <dd>
            "If you're in need of an app that lets you cleanly and completely uninstall applications with ease, fire up IObit Uninstaller. This utility, now compatible with Windows 10, makes it a breeze to remove apps, including stray support files that are often left behind when a program is removed from a PC, and those pesky Web browser toolbars and plug-ins. In short, if you use a Windows PC, you should download IObit Uninstaller."
          </dd>
        </dl>
        <dl>
         <dt><h3>Media Review</h3></dt>
          <dd>
            "IObit Uninstaller is small and its interface is friendly. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. In general, this uninstaller delivers what it promises: thorough uninstallation. The performance alone makes this little uninstall tool worth keeping. "
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/fernando.jpg" alt="Fernando Lourenço Gomes">
          </div>
          <p>Fernando <span>Lourenço Gomes</span></p>
        </li>
        <li class="current">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/giga.png" alt="PC Magazine"></div>
          <p>PC Magazine</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/makeuseof.jpg" alt="MakeUseOf"></div>
          <p>MakeUseOf</p>
        </li>
      </ul>
    </div>
    <!-- end reviews -->
  </div>

  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
  </dl>

  <!-- footer -->
  <div class="footer">    
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>

  <!-- float -->
  <div class="float">
    <a href="http://www.iobit.com/buy.php?product=iupro1677_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu&tw=-8" onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu2017newyearsale')">
    <div class="inner">
      <p>Hurry up, only <strong  class="countNum">00</strong> left</p>
      <span>Buy Now</span>
    </div>
    </a>
  </div>
  <div class="pop-up">
      <div class="pop-main">
          <div class="pop-box">
              <h2>Note:</h2>
              <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
              <p>You will be redirected to the latest IObit promotion page automatically.</p>
          </div>
      </div>
  </div>
</div>
  <script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/script.min.js"></script>
<script>setTimeout('window.location.href="https://purchase.iobit.com/aff/en/iu/2019launchsale/index.php'+location.search+'"',5000);</script>
</body>
</html>