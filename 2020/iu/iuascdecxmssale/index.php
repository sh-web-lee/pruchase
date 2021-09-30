<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
$refStr='';
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
/*if(preg_match('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1];
  $refStr.='-'.$ver;
}*/
if(!empty($_GET['insur'])){
  $refStr.='-'.$_GET['insur'];
}
if(!empty($_GET['ver'])){
    $ver = explode('.',$_GET['ver']);
    $refStr .= '-v'.$ver[0].$ver[1];
}
if(strlen($_GET['user'])){
  $refStr.='-u'.$_GET['user'];
}
if(strlen($_GET['insday'])){
  $refStr.='-i'.$_GET['insday'];
}
if(!empty($_GET['pop'])){
    $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>80% OFF to Get ASC PRO & IObit Uninstaller PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <!-- wrapper -->
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <h1 class="title">CHRISTMAS SALE</h1>
    <h2><span class="hurry">Hurry up, Once Per Year Only! </span> <span class="time countdown"><strong>15</strong>HR : <strong>15</strong>M : <strong>15</strong>S : <strong class="last">123</strong> *Left</span></h2>
    <div class="container clearfix">
      <dl class="left">
        <dt>IObit Uninstaller PRO</dt>
        <dd class="first"><img src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt=""/></dd>
        <dd><span>$<strong>19.99 </strong></span><del>$29.99</del></dd>
        <dd>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=iu10pro3pc1999&ref=en-iu3pciuasc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase-iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-asc201612');">
            Activate Now
          </a>
        </dd>
        <dd class="last">
          <p class="no"> <img src="<?php echo $pResUrl; ?>images/redmark.png" alt=""> Up to 300% Faster Internet</p>
          <p class="no"> <img src="<?php echo $pResUrl; ?>images/redmark.png" alt=""> Up to 200% Faster PC</p>
          <p class="no"> <img src="<?php echo $pResUrl; ?>images/redmark.png" alt=""> Secured Privacy Protection</p>
          <p class="no"> <img src="<?php echo $pResUrl; ?>images/redmark.png" alt=""> Deeper PC Cleaning & Fixing</p>
          <p><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt=""><del>$29.99</del> Save $10</p>
        </dd>
      </dl>
      <dl class="right">
        <dt>Advanced SystemCare PRO<span> IObit Uninstaller PRO</span></dt>
        <dd class="first"><img src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt=""/></dd>
        <dd><span>$<strong>22.95 </strong></span><del>$119.96</del></dd>
        <dd>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=asc14iu3pc&ref=en-iuasc3pciuasc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase-iu"
             onclick="ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201612');">
            Activate Now
          </a>
        </dd>
        <dd class="last">
          <p><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Up to 300% Faster Internet</p>
          <p><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Up to 200% Faster PC</p>
          <p><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Secured Privacy Protection</p>
          <p><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Deeper PC Cleaning & Fixing</p>
          <p><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt=""><del>$119.96</del>  Save <strong>$97.01</strong></p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->
<!-- product -->
<div class="product">
  <h2>Optimize Your PC to Top Performance & Get Cleaner PC and Browser</h2>
  <div class="wrapper">
    <dl class="left">
      <dt><img src="<?php echo $pResUrl; ?>images/product-sale.png" alt=""><strong>What you can get by activating ASC PRO</strong></dt>
      <dd><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Boost Internet up to 300% Faster</dd>
      <dd><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Double the Speed of Your Slow PC *</dd>
      <dd class="special"><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Protect Personal Data from Privacy Breach & Prevent Malicious <br> <span></span> Infections in Real Time</dd>
      <dd class="special"><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Smarter AI mode for intelligent scan and premium PC cleaning <br> <span></span> & optimization</dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/product-free.png')?>" alt=""><strong>IObit Uninstaller PRO</strong></dt>
      <dd><img src="<?php echo $pResUrl; ?>images/blackmark.png" alt="">Detect and Uninstall Bundleware & Bundled Plug-ins</dd>
      <dd><img src="<?php echo $pResUrl; ?>images/blackmark.png" alt="">Faster & Safer Surfing by Removing Malicious Toolbars</dd>
      <dd><img src="<?php echo $pResUrl; ?>images/blackmark.png" alt="">Auto Clean Leftovers That Other Utilities Failed to Clean</dd>
      <dd><img src="<?php echo $pResUrl; ?>images/blackmark.png" alt="">Record & Revert System Changes Made by Program Installations</dd>
      <dd><img src="<?php echo $pResUrl; ?>images/blackmark.png" alt="">Update Important Software with 1-Click</dd>

    </dl>
  </div>
</div>
<!-- end product -->
<!-- windows -->
<p class="wrapper windows"><img src="<?php echo $pResUrl; ?>images/windows.png" alt="">Compatible with Windows 10, 8, 7, Vista, xp sp3</p>
<!-- end windows -->
<!-- foot-banner -->
<div class="foot-banner">
  <h2>ACT NOW to Get ASC PRO & IObit Uninstaller PRO</h2>
  <div class="wrapper">
    <img class="smail-gift" src="<?php echo getStaticUrl('images/bottom-asc.png')?>" alt=""/>
    <dl>
      <dt>ONLY <strong> <b>$</b>22.95</strong> <del>$119.96</del></dt>
      <dd>
        <a href="https://www.iobit.com/buy.php?product=asc14iu3pc&ref=en-iuasc3pciuasc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase-iu"
           onclick="ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201612');"
           class="buybtn bottom">
          Activate Now
        </a>
      </dd>
      <dd><img src="<?php echo $pResUrl; ?>images/safe.png" alt="">100% 60-DAY MONEY BACK GUARANTEE</dd>
    </dl>
  </div>
</div>
<!-- end foot-banner -->
<!-- payments -->
<div class="paymanets wrapper clearfix">
  <dl class="left clearfix">
    <dt class="left"><img src="<?php echo $pResUrl; ?>images/money-back-guarantee.png" alt=""></dt>
    <dd class="left">
      <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
      <p>
        We're confident that activating PRO edition will quickly uninstall <br>
        unwanted programs for affordable price!
      </p>
    </dd>
  </dl>
  <dl class="right">
    <dt>We accept</dt>
    <dd><img src="<?php echo $pResUrl; ?>images/payments.png" alt=""></dd>
  </dl>
</div>
<!-- end payments -->

<!-- awards -->
<div class="awards wrapper">
  <h2>World-wide Awards</h2>
  <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
</div>
<!-- end awards -->
<!-- annotation --->
<dl class="wrapper annotation">
  <dt>Note:</dt>
  <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
  <dd>*.Data may vary based on different system or computer.</dd>
</dl>
<p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. All Rights Reserved</p>
<!-- end annotation -->

<script type="text/javascript">
  var countdown = function (countdown){
    getCycleCountdown();
    $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    setTimeout("countdown('"+ countdown +"')", 1);
  };
  function getCycleCountdown () {
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
  }
  $(document).ready(function() {
    //banner
    $(".banner .cloud").addClass("on");
    setTimeout('$(".banner .tree").addClass("on")', 600);
    setTimeout('$(".banner .container dl.left").addClass("on")', 800);
    setTimeout('$(".banner .container dl.right").addClass("on")', 900);
    setTimeout('$(".banner .fawn,.banner .xmastree").addClass("on")', 800);
    //
    countdown((".countdown strong"));
  });
</script>
</body>
</html>

