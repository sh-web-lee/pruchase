<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'affisulaun_p' . $date;
  $c_name_t='affisulaun_t' . $date;
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

$viewNum=rand(156,200);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);

if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_isu3_2020specialsale';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Save 55% OFF on IObit Software Updater PRO and Get free gift pack - IObit  </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <h1>Special Offer</h1>
    <div class="img-box">
      <img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Update PRO"/>
    </div>
    <div class="right-message">
      <h2><span>2 FREE GIFTS</span> limited to first 100 purchases!</h2>
      <div class="progress">
        <p><strong class="viewNum"><?php echo $viewNum;?></strong> visitors,  <span class="buyNum">51</span> seats left</p>
        <div class="bar">
          <span class="box"><span class="disappear"></span></span>
        </div>
      </div>
      <p class="price">
        <span>Now <strong>$<b>12</b>.97</strong></span>
        <!-- buybtn -->
        <a href="https://www.iobit.com/buy.php?product=enaff-isu33pcsdpf&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'isubuy', 'buy', 'enaffisu32020specialsale');"
           class="buybtn">
          Activate Now
        </a>
      </p>
      <ul class="list">
        <li>
          Original <span>$69.93</span>
        </li>
        <li>Discount <span>80% OFF</span></li>
        <li> Save <span>$56.96</span></li>
      </ul>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper clearfix">
    <h2>Why IObit Software Updater 3 PRO?</h2>
    <img src="<?php echo getStaticUrl('images/intro-box.jpg')?>" class="img-box" alt="IObit Software Update PRO"/>
    <div class="left-message">
      <h3><i></i>Update Instantly  </h3>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
        <dd><strong>Protection</strong></dd>
        <dd>Updating outdated software covers <br> the security holes in time to keep <br> hackers out.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
        <dd><strong>Improvement</strong></dd>
        <dd>Updating outdated software delivers <br> new features and improves <br> performance and stability.</dd>
      </dl>
    </div>
    <div class="right-message">
      <h3><i></i>Update Easily  </h3>
      <dl class="list01">
        <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
        <dd><strong>Unlimited</strong> Unlimited software updates with 1-click, get correctly downloaded and installed without opening your web browser.  </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
        <dd><strong>Automatic</strong> Set up auto-updates on schedule  and then automatically and silently  download and install when  updates are available. </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt=""></dt>
        <dd><strong>Safe</strong> Automatically create restore point  before installing in case something  goes wrong. </dd>
      </dl>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2> IObit Software Updater 3 PRO Can Serve You Better</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
        <span class="suspend01"></span>
        <span class="suspend02"></span>
        <span class="suspend03"></span>

      </div>
      <div class="right fr">
        <ul class="feature-list">
          <li><i class="all-icons">◎</i> 1-click to update all software</li>
          <li><i class="all-icons">◎</i> Download and install updates silently but rapidly </li>
          <li><i class="all-icons">◎</i> Set up automatic scans and updates on a schedule</li>
          <li><i class="all-icons">◎</i> Exclude certain programs from being updated</li>
          <li><i class="all-icons">◎</i> Support direct download of remote work tools</li>
          <li><i class="all-icons">◎</i> Option to auto create restore point before installing</li>
          <li><i class="all-icons">◎</i> Option to auto delete setup files after installation</li>
          <li><i class="all-icons">◎</i> Disable sponsored ads displayed in the free version</li>
        </ul>
        <p class="price">
          <span>Now <strong>$<b>12</b>.97</strong> <span>Only <b class="buyNum">50</b> seats left now</span></span>
          <!-- buybtn -->
          <a href="https://www.iobit.com/buy.php?product=enaff-isu33pcsdpf&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'isubuy', 'buy', 'enaffisu32020specialsale');"
             class="buybtn">
            Activate Now
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<div class="gift-message">
  <div class="wrapper">
    <h2>What extra benefit will you get from free gifts?</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""/></dt>
      <dd>
        <h3>Smart Defrag PRO</h3>
        <strong>$0</strong> <del>$19.99</del> 1 Year / 1 PC
        <p>Maximize Hard Drive <br> Optimization for Faster PC</p>
      </dd>
    </dl>
    <dl class="pf">
      <dt><img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""/></dt>
      <dd>
        <h3>Protected Folder</h3>
        <strong>$0</strong> <del>$19.95</del> 1 Year / 1 PC
        <p>Never Worry about Data Theft <br> or Privacy Leaks!</p>
      </dd>
    </dl>
  </div>
</div>

<div class="review ">
  <div class="wrapper">
    <h2>What Others Say?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="Software.Informer"></dt>
          <dd>
            <h2>Media review</h2>
            <p>IObit Software Updater was designed to simplify the task of keeping all the applications on your computer up-to-date. It can check for new versions and install them automatically, even without user input. Moreover, it can help you download and install popular applications for various purposes.</p>
            <cite>softpedia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nicolae Mocioc"></dt>
          <dd>
            <h2>User Review</h2>
            <p>I installed a IObit from a friend, and I am very pleased with the speed and simplicity that meets the needs of a beginner in maintaining his personal computer. Thank you for that! I have to inform you that I will buy an IObit license, just to donate an amount to help you continue your work. Thank you!</p>
            <cite>Nicolae Mocioc</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Joshua Irving"></dt>
          <dd>
            <h2>User Review</h2>
            <p>I love the automatic aspect of the updates. It's fast and efficient, and it also creates a restore point prior to install just in case something goes wrong. I also love that the program downloads the updates directly from the appropriate sites rather than my having to go to each individual site to download an update. I think this is one of your best ideas yet!</p>
            <cite>Joshua Irving</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nico Bremmer"></dt>
          <dd>
            <h2>User Review</h2>
            <p>It's an great Software update program. It's very easy to use and very simple. This program is very clear, works very smooth and its really fast. Also the design is nice and modern and its good that you seen your old and the new version of the program you wanna update. It's also nice that this program shows you new program tips. </p>
            <cite>Nico Bremmer</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <div class="service clearfix">
      <dl>
        <dt>Trusted by these medias </dt>
        <dd><img src="<?php echo getStaticUrl('images/medias.png')?>" alt=""/></dd>
      </dl>
      <dl class="right">
        <dt>Support several modes of payment</dt>
        <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
      </dl>
    </div>
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>
        *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      IObit Software Update PRO
    </div>
    <div class="number">
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
      </div>
      <p><span class="viewNum"><?php echo $viewNum;?></span> visitors now, only  <strong class="buyNum">86</strong> seats left!</p>
    </div>
    <p class="price">
      <span><strong>$<b>12</b>.97</strong> <del>$69.93</del></span>
      <!-- buybtn -->
      <a href="https://www.iobit.com/buy.php?product=enaff-isu33pcsdpf&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
         onclick="ga('send', 'event', 'isubuy', 'buy', 'enaffisu32020specialsale');"
         class="buybtn">
        Activate Now
      </a>
    </p>
  </div>
</div>
<!-- floatlayer end -->
<script>ref="<?php echo $_GET['ref']?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>