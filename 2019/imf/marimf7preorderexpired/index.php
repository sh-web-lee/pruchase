<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
include $pRootUrl . 'include/common.inc.php';
$viewNum=rand(115,156);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='enimfprea'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 48;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit;
}
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['expday'])?'':('-'.$_GET['expday']));
$transData=$_GET['fileto'].$_GET['rsto'].$_GET['traceto'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Pay $0 to pre-order the new IObit Malware Fighter PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com" target="_blank" class="logo" target="_blank">IObit</a>
      <h1>Join $0 Global Presale and Let’s Stay Together Again</h1>
      <p class="fast">2,000 quantity limited per day, act fast for this rare opportunity</p>
      <div class="clearfix">
        <div class="left-img"><span></span></div>
        <div class="right-message">
          <h2>IObit Malware Fighter 7 PRO</h2>
          <div class="progress">
            <p><strong class="packnum">*</strong> left now, <strong class="buyNum">*</strong> already sold!</p>
            <div class="bar">
              <span class="box"><span><span class="disappear"></span></span></span>
            </div>
          </div>
          <p class="price">
            Now: <strong>$<b>0</b></strong> <del>$54.95</del>
          </p>
          <!-- buybtn -->
           <a class="buybtn" href="https://www.iobit.com/buy.php?product=imf7preorder&ref=imf7preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
              onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderexpired');">
                 <span>Pre-order Now</span>
           </a>
        </div>
      </div>
      <div class="step">
        <span>If satisfied, get 55% off original price 30 days after preorder</span>
        <strong>$0 pre-order today</strong>
        <span>If unsatisfied, cancel within 30 days without paying a fee</span>
      </div>
    </div>
    
  </div>
  <!-- end banner -->
  <div class="main-bg">
    <!-- feature -->
    <div class="feature wrapper clearfix">
      <h2>Remember How IObit Malware Fighter PRO Protect Your Computer?</h2>
      <img src="<?php echo getStaticUrl('images/feature-imgbox.png')?>" alt="" class="img-box">
      <div class="message">
        <dl <?php echo empty($transData)?'class="emp"':'';?>>
          <dt>Remove</dt>
          <?php if(!empty($_GET['fileto'])):?>
          <dd><strong><?php echo number_format($_GET['fileto'])?></strong></dd>
          <?php endif;?>
          <dd>security threats to keep your PC and personal information safe</dd>
        </dl>
        <dl <?php echo empty($transData)?'class="emp"':'';?>>
          <dt>Block</dt>
          <?php if(!empty($_GET['rsto'])):?>
          <dd><strong><?php echo number_format($_GET['rsto'])?></strong></dd>
          <?php endif;?>
          <dd>ransomware from encrypting your files</dd>
        </dl>
        <dl <?php echo empty($transData)?'class="emp"':'';?>>
          <dt>Clear</dt>
          <?php if(!empty($_GET['traceto'])):?>
          <dd><span><?php echo number_format($_GET['traceto'])?></span></dd>
          <?php endif;?>
          <dd>online traces to avoid privacy leak.</dd>
        </dl>
        <dl <?php echo empty($transData)?'class="emp"':'';?>>
          <dt>Enable</dt>
          <dd><span>Full-round </span></dd>
          <dd>protection to stop suspicious activities </dd>
        </dl>
       </div>
    </div>
    <!-- benfits -->
    <div class="compar-tab wrapper clearfix">
      <h2>Full-round Protection Lost! <br> Security Issues May Bother You Every Now And Then</h2>
      <div class="message">
        <h3>Protections you no longer have</h3>
        <p><strong>no</strong> Bitdefender anti-virus engine</p>
        <p><strong>no</strong> anti-ransomware engine</p>
        <p><strong>no</strong> Safebox</p>
        <p><strong>no</strong> Camera Guard</p>
        <p><strong>no</strong> USB guard</p>
        <p><strong>no</strong> anti-tracking</p>
        <p><strong>no</strong> auto-update</p>
      </div>
      <div class="message right">
        <h3>Problems you may encounter</h3>
        <p>virus break into your PC and steal information</p>
        <p>important files being encrypted</p>
        <p>others access to your personal files</p>
        <p>programs run your camera secretly</p>
        <p>virus hide in USB drive harm your PC</p>
        <p>hackers violate your online privacy</p>
        <p>latest security threats not being identified</p>
      </div>
    </div>
    <!-- end benfits -->
    <div class="more-than wrapper">
      <h2>NEW IOBIT MALWARE FIGHTER 7 PRO GIVES YOU MORE</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
        <dd><strong>60% Larger</strong></dd>
        <dd>Malware Database</dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
        <dd><strong>Password Protected</strong></dd>
        <dd>Personal Data</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
        <dd><strong>300% Faster</strong></dd>
        <dd>Threats Scanning</dd>
      </dl>
    </div>
  </div>
  <div class="review wrapper">
    <h2>BOTH EXPERTS AND USERS PUT IN A GOOD WORD</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>" The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similar tools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots."</p>
              <cite>Software.Informer</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends."</p>
              <cite>Gelu Batir</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/dave-cassidy.png')?>" alt="David Cassidy"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter. I would recommend that they forget the rest and get the best which is IObit Malware Fighter."</p>
              <cite>David Cassidy</cite>
            </dd>
          </dl>                 
        </div>               
    </div>
  </div>
  <div class="bottom">
      <div class="award wrapper ">
        <h2>World-wide Awards</h2>
        <p>As being trusted and awarded by those world-class media in the past six years, you know you’ve got the right PC protector.</p>
        <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>
    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
          <p>
           We're confident that activating PRO edition will provide you full-round PC protection for affordable price!
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
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Note: </dt>
      <dd>*At the end of the 30-day free trial period, your credit card or PayPal account will be charged $24.95 automatically. </dd>
      <dd> This 55% discount from the original price of $54.95 is bonus only for preorders!</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>



  <div class="float-right">
    <img src="<?php echo getStaticUrl('images/people.png')?>"> <span class="viewNum"><?php echo $viewNum;?></span> viewing at this page now!
  </div>
  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"><img src="<?php echo getStaticUrl('images/fl-imf-box.png')?>" alt=" IObit Malware Fighter 7 PRO"></div>
      <div class="progress">
        <p><strong class="packnum">*</strong> left now, <strong class="buyNum">*</strong> already sold!</p>
        <div class="bar">
          <span class="box"><span><span class="disappear"></span></span></span>
        </div>
      </div>
      <!-- buybtn -->
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=imf7preorder&ref=imf7preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderexpired');">
        <span>Pre-order Now - $0</span>
      </a>
    </div>
  </div>
  <div class="pop-over ">
    <h2>OOPS! You Missed Our $0 Presale</h2>
    <h3>Don’t Let This <strong>55% Discount</strong> Slip Off Again</h3>
    <img src="<?php echo getStaticUrl('images/pop-img-box.png')?>" alt=" IObit Malware Fighter 7 PRO" class="img-box">
    <div class="message">
       <p><strong>$<b>24</b>.95</strong> <del>$54.95</del></p>
       <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=imf7preorder2495&ref=imf7preorderexpired2495<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderexpired2495');">
         <span>Pre-order Now</span>
      </a>
      <p class="last">1 Year Subscription / 3 PCs</p>
    </div>
   
  </div>
  <div class="pop-bg "></div>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>