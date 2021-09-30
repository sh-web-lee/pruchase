<?php
error_reporting(0);
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

if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_asc_2016xmassale';
include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Save up to 80% on ASC PRO, speed up, protect and optimize your PC!</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    var xkzid=MApp(2.2).url.getParameters('xkzid');
    var ykzid=MApp(2.2).url.getParameters('ykzid');
    kzid=xkzid.length>0?xkzid:(ykzid.length>0?ykzid:'');
    if(kzid.length>0){
      $.ajax({
        url: "http://ascstats.iobit.com/other/ascb5tip_time.php?a=pur&"+(xkzid.length>0?"xkzid":"ykzid")+"="+kzid,
        type: 'GET',
        dataType: 'JSONP'
      });
      $(window).on('beforeunload',function(){
        $.ajax({
          url: "http://ascstats.iobit.com/other/ascb5tip_time.php?a=close&"+(xkzid.length>0?"xkzid":"ykzid")+"="+kzid+"&ip=<?php echo getIP()?>",
          type: 'GET',
          dataType: 'JSONP'
        });
      });
    }
  </script>
</head>
<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<!-- banner -->
<div class="banner">
  <div class="container">
    <div class="wrapper">
      <!-- header -->
      <div class="header">
        <a href="http://www.iobit.com/" target="_blank" class="logo">IObit</a>
        <div class="title">
          <h1>Advanced SystemCare BIG Christmas SALE</h1>
          <p>80% OFF on ASC & Free Gift Pack</p>
        </div>
      </div>
      <!-- activity -->
      <div class="activity">
        <div class="steps mainstep">
          <h2>FIRST 2,000 ORDERS</h2>
          <p>80% OFF + Free Gift Pack</p>
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
          <div class="imgcase"><img src="<?php echo $pResUrl; ?>images/boxshot-asc.png" alt=""></div>
          <dl>
            <dt><strong>Advanced SystemCare 10 PRO</strong></dt>
            <dd>1 Year / 3 PCs   <strong>$19.99</strong> <del> $89.97</del> <span>80% OFF</span></dd>
          </dl>
          <ul>
            <li><strong>Smart Defrag PRO<span>$0</span></strong> <del>$19.99</del></li>
            <li><strong>Protected Folder<span>$0</span></strong> <del>$19.99</del></li>
            <li><strong>AMC Security PRO<span>$0</span></strong> <del>$19.99</del></li>
          </ul>
        </div>
        <div class="checkout">
          <dl>
            <dt><strong>$19.99</strong> <del>$149.94</del></dt>
            <dd><a href="http://www.iobit.com/buy.php?product=asc3pc1999giftc_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc2016xmassale');" class="activebtn"><div class="inner"><i></i><span>Activate Now</span></div></a></dd>
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
    <dt>Money Back Guarantee </dt>
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
  <h2>Activate ASC 10 PRO to get a faster, cleaner and more secure PC!</h2>
  <div class="snapshoot">
    <img src="<?php echo $pResUrl; ?>images/snapshoot.jpg" alt="">
  </div>
  <div class="benfits-list clearfix">
    <div class="list">
      <img src="<?php echo $pResUrl; ?>images/benfits-icon-01.png" alt="">
      <dl>
        <dt>200%*</dt>
        <dd>Reduce system stutter/lag and speed up PC up to 200% faster</dd>
      </dl>
    </div>
    <div class="list right">
      <img src="<?php echo $pResUrl; ?>images/benfits-icon-02.png" alt="">
      <dl>
        <dt>300%*</dt>
        <dd>Accelerate download, surfing, gaming, YouTube viewing up to 300% faster</dd>
      </dl>
    </div>
    <div class="clear"></div>
    <div class="list">
      <img src="<?php echo $pResUrl; ?>images/benfits-icon-03.png" alt="">
      <dl>
        <dt>Deeper</dt>
        <dd>Fix registry issues to reduce Windows crashes & error messages</dd>
      </dl>
    </div>
    <div class="list right">
      <img src="<?php echo $pResUrl; ?>images/benfits-icon-04.png" alt="">
      <dl>
        <dt>Auto </dt>
        <dd>Auto stop unused processes to release RAM and improve PC performance</dd>
      </dl>
    </div>
    <div class="clear"></div>
    <div class="list">
      <img src="<?php echo $pResUrl; ?>images/benfits-icon-05.png" alt="">
      <dl>
        <dt>Real-time </dt>
        <dd>Protect against spyware and malware in real time</dd>
      </dl>
    </div>
    <div class="list right">
      <img src="<?php echo $pResUrl; ?>images/benfits-icon-06.png" alt="">
      <dl>
        <dt>Safer </dt>
        <dd>Erase privacy traces to prevent from being tracked</dd>
      </dl>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- end benfits -->
<!-- gift-pack -->
<div class="gift-pack wrapper">
  <h2>Christmas Free Gift Pack</h2>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/boxshot-amc.png" alt=""></dt>
    <dd><strong>AMC Security PRO</strong></dd>
    <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / Multi Devices</dd>
    <dd>200% Speed up and Fully Protect your Android from any treats!</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/boxshot-sd.png" alt=""></dt>
    <dd><strong>Smart Defrag PRO</strong></dd>
    <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / 1 PC</dd>
    <dd>Get the Maximum Hard Drive Performance!</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/boxshot-pf.png" alt=""></dt>
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
        <div class="imgcase"><img src="<?php echo $pResUrl; ?>images/boxshot-asc.png" alt=""></div>
        <dl>
          <dt><strong>Advanced SystemCare 10 PRO</strong></dt>
          <dd>1 Year / 3 PCs   <strong>$19.99</strong> <del> $89.97</del> <span>80% OFF</span></dd>
        </dl>
        <ul>
          <li><strong>Smart Defrag PRO<span>$0</span></strong> <del>$19.99</del></li>
          <li><strong>Protected Folder<span>$0</span></strong> <del>$19.99</del></li>
          <li><strong>AMC Security PRO<span>$0</span></strong> <del>$19.99</del></li>
        </ul>
      </div>
      <div class="checkout">
        <dl>
          <dt><strong>$19.99</strong> <span><del>$149.94</del> </span></dt>
          <dd><a href="http://www.iobit.com/buy.php?product=asc3pc1999giftc_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc2016xmassale');" class="activebtn"><div class="inner"><i></i><span>Activate Now</span></div></a></dd>
          <dd>Hurry up, <span class="countNum">78</span> left today!</dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end mid-cart -->
<!-- media-rev start -->
<div class="review wrapper">
  <div class="content">
    <dl>
      <dt><h3>User Review</h3></dt>
      <dd>
        <h4>"Not only is it a great product, but the support is equally great"</h4>
      </dd>
      <dd>
        "I like many started off with the free version and eventually purchased the full version. It's
        been working to keep my computer clean and "bug" free for years now and it hasn't let me down
        yet. I contacted Advanced System Care recently and they responded within a day or two with all I
        needed to know. In my mind support is huge in the decision to stay with a product and ASC wins
        in both product and support."
      </dd>
    </dl>
    <dl>
      <dt><h3>User Review</h3></dt>
      <dd>
        <h4>"Cleaned up Spyware and Malware My antivirus lets slip through"</h4>
      </dd>
      <dd>
        "We used to use up to a dozen different programs to keep our machines running smoothly and keep
        the bad guys out. It took hours every week to maintain security and performance. Now, with
        Advanced System Care Pro, everything is in one place and it takes us just a few minutes every
        couple of days to do the same jobs with much more confidence"
      </dd>
    </dl>
    <dl class="active">
      <dt><h3>Media Review</h3></dt>
      <dd>
        <h4>"Advanced Systemcare aims to remedy whatever ails your computer."</h4>
      </dd>
      <dd>
        "There's nothing worse than a computer that is bogged down so much that it impedes your ability
        to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not
        only cleaning up junk files, malware, and invalid registry entries, but by giving your computer
        a boost to optimize your PC experience."-Cnet
      </dd>
    </dl>
    <dl>
      <dt><h3>User Review</h3></dt>
      <dd>
        <h4>"My choice is still overwhelmingly Advanced SystemCare Pro"</h4>
      </dd>
      <dd>
        "As a computer repair tech I find by downloading and scanning with ASC free most common problems
        are resolved. When finished with a repair I usually suggest the client purchase the Pro package.
        Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7?
        This is the best product a home user can buy. Thank you for making my job easier."
      </dd>
    </dl>
    <dl>
      <dt><h3>User Review</h3></dt>
      <dd>
        <h4>"My system has never run better."</h4>
      </dd>
      <dd>
        "In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows
        user, providing excellent value and function in both its shareware and freeware versions. IObit
        provides expert technical support that is competent, knowledgeable and responsive, adding
        significant value to their products and services for their customers."
      </dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay">
      </div>
      <p>Bruce Ramsay <b>2015</b></p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"></div>
      <p>Bob Bassett<b>2014</b></p>
    </li>
    <li  class="current">
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"></div>
      <p>Cnet</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick">
      </div>
      <p>Charles R. Widick <b>2015</b></p>
    </li>
    <li >
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt="Gordon Griswold">
      </div>
      <p>Gordon Griswold <b>2014</b></p>
    </li>
  </ul>
</div>
<!-- media-rev end -->
<dl class="annotation wrapper">
  <dt>Note:</dt>
  <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
  <dd>*.Data may vary based on different system or computer.</dd>
  <dd>*.License for AMC Security Full Version with in-app ads.</dd>
</dl>
<div class="footer">
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
</div>
<!-- float -->
<div class="float">
  <div class="inner">
    <p>Hurry up, only <strong  class="countNum">00</strong> left</p>
  </div>
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
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
<script src="<?php echo $pResUrl; ?>script/script.js"></script>
    <script>setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);</script></div>
</body>
</html>