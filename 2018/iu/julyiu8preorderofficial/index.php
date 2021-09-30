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
  $cName='eniupreoff_p'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>1){
      $packsNum--;
    }
  }else{
    $packsNum=48;
  }
  setcookie($cName,$packsNum);
  echo $packsNum;
  exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
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
      <a href="https://www.iobit.com" target="_blank" class="logo" target="_blank">IObit</a>
      <h1>The Global Presale  Is Live</h1>
      <h2>Rush! 500 limited quantities available / <span class="soldNum">450</span> sold now</h2>
     <div class="message clearfix">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="img-box">
        <div class="right-message">
          <h3>IObit Uninstaller 8 PRO</h3>
          <h4>Now: <strong>$0</strong><del>$29.99</del></h4>
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
          <a href="https://www.iobit.com/buy.php?product=iu8preorder&ref=iu8preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderofficial');" class="buybtn"><span>Pre-order Now</span></a>
          <p>1 Year Subscription / 3 PCs</p>
        </div>
     </div>
    </div>
  </div>
  <!-- end banner -->

  <ul class="distance wrapper">
    <li>get 50% off original price <br> 30 days after pre-order</li>
    <li class="center">  If satisfied   <span>$0 pre-order today</span> If unsatisfied</li>
    <li>cancel within 30 days <br> without paying a fee</li>
  </ul>
  <!-- benfits -->
  <div class="feature wrapper clearfix">
    <h2>Why IObit Uninstaller 8 PRO?</h2>
    <h3> <span></span> Experience new features and improvements earlier than others <span></span></h3>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd><strong>Bundleware Uninstall <i class="orange">New</i></strong> </dd>
      <dd>
        Detect adware, toolbars, and unwanted third-party programs that install alongside freeware to advertise or steal your privacy data.
        <p><img src="<?php echo getStaticUrl('images/impotant.png')?>" alt=""> only available on Pro</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd><strong>Stubborn Programs Uninstall <i>Improved</i></strong></dd>
      <dd>
         Completely uninstall unwanted programs or stubborn programs you can't uninstall by Windows or other programs.
        <p><img src="<?php echo getStaticUrl('images/impotant.png')?>" alt=""> only available on Pro</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd><strong>Software Updater <i>Improved</i></strong></dd>
      <dd>With one click, upgrade your important software on your PC without any user intervention.<p><img src="<?php echo getStaticUrl('images/impotant.png')?>" alt=""> only available on Pro</p></dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd><strong>Identify Malicious Plugins <i>Improved</i></strong></dd>
      <dd>Remove malicious or advertising supported plug-ins from browser to ensure secure & clean browsing experience. <p><img src="<?php echo getStaticUrl('images/impotant.png')?>" alt=""> only available on Pro</p></dd>
    </dl>
  </div>
  <!-- end feature -->
  <div class="between-buy wrapper">
    <h2><span></span>and pay <strong>$0</strong> to enjoy the latest PRO version today<span></span></h2>
    <a href="https://www.iobit.com/buy.php?product=iu8preorder&ref=iu8preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderofficial');" class="buybtn"><span>Pre-order Now</span></a>
    <p><span class="viewNum"><?php echo $viewNum?></span> watching, <strong class="gift">35</strong> seats left now</p>
  </div>
  <!-- benfits -->
  <div class="benfits ">
    <div class="wrapper">
      <h2>How does IObit Uninstaller 8 PRO work</h2>
      <h3>to keep your computer clean, fast and safe</h3>
      <img src="<?php echo getStaticUrl('images/snapshoot.png')?>" alt="" class="img-box">
      <dl class="list01">
        <dt><i>1</i></dt>
        <dd>Help you quickly find and uninstall unwanted and stubborn programs </dd>
      </dl>
      <dl class="list02">
        <dt><i>2</i></dt>
        <dd>Notify you when a download has a toolbar or third party programs bundled</dd>
      </dl>
      <dl class="list03">
        <dt><i>3</i></dt>
        <dd>Identify and mark out the malicious or advertising supported plug-ins </dd>
      </dl>
      <dl class="list04">
        <dt><i>4</i></dt>
        <dd>Auto clean all leftovers of uninstalled programs and plug-ins </dd>
      </dl>
      <dl class="list05">
        <dt><i>5</i></dt>
        <dd>1-click to keep your essential <br> software up-to-date </dd>
      </dl>
      <div class="between-buy">
        <h2>Clean and protect your computer with <strong>$0</strong> now</h2>
        <a href="https://www.iobit.com/buy.php?product=iu8preorder&ref=iu8preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderofficial');" class="buybtn"><span>Pre-order Now</span></a>
        <p><span class="viewNum"><?php echo $viewNum?></span> watching, <strong class="gift">35</strong> seats left now</p>
      </div>
    </div>
  </div>
  <!-- end benfits -->


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
  <div class="award">
  <div class="wrapper">
    <h2>World-wide Awards</h2>
    <p>As being trusted and awarded by those world-class media in the past seven years, you know you’ve got the right uninstaller.</p>
    <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
  </div>
</div>
<!-- payments -->
<div class="serive wrapper">
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/money-back-guarantee.png')?>" alt=""></dt>
    <dd><strong>Money Back Guarantee</strong></dd>
    <dd>If you're not satisfied in the first 60 days, we will give you back your money.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""></dt>
    <dd><strong>Secure Payment</strong></dd>
    <dd>IObit supports several safe modes of payment.</dd>
  </dl>
  <dl class="last">
    <dt><img src="<?php echo getStaticUrl('images/license.png')?>" alt=""></dt>
    <dd><strong>Get License</strong></dd>
    <dd>You will receive the license within a few minutes after purchase.</dd>
  </dl>
</div>
<!-- end payments -->
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>*At the end of the 30-day free trial period, your credit card or PayPal account will be charged $14.77 automatically. </dt>
    <dd>This 50% discount from the original price of $29.99 is bonus only for preorders!</dd>
  </dl>

  <!-- footer -->
  <div class="footer">    
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>

  <!-- float -->
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
      <a href="https://www.iobit.com/buy.php?product=iu8preorder&ref=iu8preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderofficial');" class="buybtn"><span>$0 Pre-order Now</span></a>
    </div>
  </div>
  <div class="pop-over">
    <h2>OOPS</h2>
    <h3>Pre-order reservations are full today.</h3>
    <a href="https://purchase.iobit.com/en/iu/index.php" onclick="ga('send', 'event', 'iu7buy', 'buy', 'iu8predorderofficial');">Check another offer>></a>
  </div>
  <div class="pop-bg"></div>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>