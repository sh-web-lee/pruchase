<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
$packsNum = ceil(microtime_float()*2000/20000);
$packsNum = 360-($packsNum%360);
if ($_GET['action'] == 'getPacks'){
  echo $packsNum;
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>2015 IObit Christmas Sale</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function decreasingPacks(){
      $.ajax({
        type: "GET",
        url: "index.php",
        data: "action=getPacks&r="+Math.random(),
        success: function(packs){
          $('#packs').html(packs);
          setTimeout('decreasingPacks()', 10000);
        }
      });
    }
    setTimeout('decreasingPacks()', 10000);
  </script>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="header">
  <div class="wrapper">
    <a class="logo" href="http://www.iobit.com/en/index.php">iobit</a>
    <div class="time">
      <ul class="date clearfix" id="counttime">
        <li>00</li>
        <li>00</li>
        <li>00</li>
        <li class="last">000<sup>*</sup></li>
      </ul>
      <ul class="date jour">
        <li>HR</li>
        <li>M</li>
        <li>S</li>
        <li class="last">MS</li>
      </ul>
    </div>
    <h1 class="wrapper"> The Biggest Xmas Sale Ever! up to 70% off</h1>
    <h2>Save up to 70% & Get Christmas Gifts from IObit Only Today! </h2>
  </div>
</div>
<div class="main">
  <div class="banner">
    <h2>Triple Joy - Buy One Get Two Free</h2>
    <h3>Buy <strong>Advanced SystemCare 9 PRO</strong> & Get Super Security Gift Pack for FREE!</h3>
    <img src="<?php echo $pResUrl; ?>images/asc9-bag.jpg" alt="">
    <dl class="right">
      <dt>Enjoy Top PC Performance</dt>
      <dd>1 year subscription/ 3 PCs</dd>
      <dd>Now <strong>$29.99 </strong><del>$79.93</del></dd>
      <dd><a  href="https://store.iobit.com/order/checkout.php?PRODS=4670838&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&SHORT_FORM=1&NOCD=1&PRICES4670838[USD]=39.99&PHASH=2b250eb1b29227909f3e6d062b25a206&COUPON=2015XMAS" onclick="ga('send', 'event', 'ascbuy', 'buy', '2015aff-xmasascpf');"><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""> BUY NOW</a></dd>
      <dd class="packs"><img src="<?php echo $pResUrl; ?>images/packs.png" alt=""><span id="packs"><?php echo $packsNum; ?></span> Packs Left Only!</dd>
      <dd><img src="<?php echo $pResUrl; ?>images/pay-banner.jpg" alt=""></dd>
    </dl>
  </div>
  <div class="wrapper gifts">
    <ul>
      <li class="left">
        <dl>
          <dt><img class="product" width="155" height="168" src="<?php echo $pResUrl; ?>images/product-db.png" alt=""><img class="gifts-product" src="<?php echo $pResUrl; ?>images/db-gift.png" alt=""></dt>
          <dd class="first">Buy Driver Booster 3 PRO now, and get #1 ranked PC optimization tools for free. Fully optimize your PC for ultimate performance.</dd>
          <dd>Now: <strong>$29.95 </strong><del>$99.93 </del><b class="right">1year/ 3PCs</b></dd>
        </dl>
        <a class="hidden" href="https://store.iobit.com/order/checkout.php?PRODS=4670839&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&SHORT_FORM=1&NOCD=1&PRICES4670839[USD]=39.95&PHASH=00bc0047fa530bfce2249b5023d877de&COUPON=2015XMAS" onclick="ga('send', 'event', 'dbbuy', 'buy', '2015aff-xmasdbasc');">
          <span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>
          <strong>BUY NOW</strong>
          $29.95 <del>$99.93</del>
        </a>
      </li>
      <li class="right">
        <dl>
          <dt><img class="product" width="155" height="168" src="<?php echo $pResUrl; ?>images/product-imf.png" alt=""><img class="gifts-product" src="<?php echo $pResUrl; ?>images/imf-gift.png" alt=""></dt>
          <dd class="first">Buy IObit Malware Fighter 3 PRO, and get top PC security pack for free. Fully protect your PC against various kinds of online threats in real-time.</dd>
          <dd>Now: <strong>$29.95 </strong><del>$89.93 </del><b class="right">1year/ 3PCs</b></dd>
        </dl>
        <a class="hidden" href="https://store.iobit.com/order/checkout.php?PRODS=4670840&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&SHORT_FORM=1&NOCD=1&PRICES4670840[USD]=29.95&PHASH=71c47ebbd1d12da925eb8a8c2a4eb63b" onclick="ga('send', 'event', 'imfbuy', 'buy', '2015aff-xmasimfiu');">
          <span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>
          <strong>BUY NOW</strong>
          $29.95 <del>$89.93</del>
        </a>
      </li>
    </ul>
  </div>
  <div class="wrapper award">
    <dl>
      <dt>Award-winning Optimization & Protection</dt>
      <dd><img src="./<?php echo $pResUrl; ?>images/awards.jpg"></dd>
    </dl>
  </div>
</div>
<div class=" gifts sellers">
  <div class="wrapper">
    <h2>Save 50% on Our Best Sellers</h2>
    <ul>
      <li class="big">
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/product-asc9.png" alt=""><span></span></dt>
          <dd class="title"><h3>Most Comprehensive PC Tuneup Utility </h3></dd>
          <dd class="first">Clean & fix Windows registry errors, performance issues, junk
            files that slow you down, and boost your startup, Internet
            and the whole PC up to 300% faster.</dd>
          <dd>Now: <strong> $14.99 </strong><del>$29.99 </del><b class="right">1year/ 3PCs</b></dd>
        </dl>
        <a class="hidden" href="https://store.iobit.com/order/checkout.php?PRODS=4665523&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&SHORT_FORM=1&NOCD=1&COUPON=2015XMAS" onclick="ga('send', 'event', 'ascbuy', 'buy', '2015aff-xmasasc');">
          <span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>
          <strong>BUY NOW</strong>
          $14.99 <del>$29.99</del>
        </a>
      </li>
      <li class="big last">
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/product-db.png" alt=""><span></span></dt>
          <dd class="title"><h3>Most Powerful Driver Updating Tool </h3></dd>
          <dd class="first">Fix outdated, missing and faulty drivers safely and rapidly for
            maximum PC and gaming performance.</dd>
          <dd>Now: <strong> $14.99 </strong><del>$29.99 </del><b class="right">1year/ 3PCs</b></dd>
        </dl>
        <a class="hidden" href="https://store.iobit.com/order/checkout.php?PRODS=4653766&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&SHORT_FORM=1&NOCD=1&COUPON=2015XMAS" onclick="ga('send', 'event', 'dbbuy', 'buy', '2015aff-xmasdb');">
          <span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>
          <strong>BUY NOW</strong>
          $14.99 <del>$29.99</del>
        </a>
      </li>
      <li>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/product-ascu8.png" alt=""><span></span></dt>
          <dd class="title"><h3>#1 Ranked Antivirus + Top PC Tuneup </h3></dd>
          <dd class="first">Protect your PC against all kinds of
            viruses, system slowdown, freeze and crash. </dd>
          <dd>Now: <strong> $19.99 </strong><del>$39.99 </del><b class="right">3PCs/15months</b></dd>
        </dl>
        <a class="hidden" href="https://store.iobit.com/order/checkout.php?PRODS=4639139&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&SHORT_FORM=1&NOCD=1&COUPON=2015XMAS" onclick="ga('send', 'event', 'ascubuy', 'buy', '2015aff-xmasascu');">
          <span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>
          <strong>BUY NOW</strong>
          $19.99 <del>$39.99</del>
        </a>
      </li>
      <li>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/product-imf.png" alt=""><span></span></dt>
          <dd class="title"><h3>Protect over 20,000,000 PCs Worldwide</h3></dd>
          <dd class="first">Detect and remove all kinds of malwares & secure your online surfing with full browser protection.</dd>
          <dd>Now: <strong> $14.97 </strong><del>$29.95 </del><b class="right">1year/ 3PCs</b></dd>
        </dl>
        <a class="hidden" href="https://store.iobit.com/order/checkout.php?PRODS=4637723&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&SHORT_FORM=1&NOCD=1&COUPON=2015XMAS" onclick="ga('send', 'event', 'imfbuy', 'buy', '2015aff-xmasimf')">
          <span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>
          <strong>BUY NOW</strong>
          $14.97 <del>$29.95</del>
        </a>
      </li>
      <li class="last">
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/product-mac.png" alt=""><span></span></dt>
          <dd class="title"><h3>All-in-one Mac Maintenance Tool </h3></dd>
          <dd class="first">Clean up gigabytes of junk, boost Mac performance, and remove malwares for the maximum speed.</dd>
          <dd>Now: <strong> $29.97 </strong><del>$59.95 </del><b class="right"> 3 Macs/ Lifetime</b></dd>
        </dl>
        <a class="hidden" href="https://store.iobit.com/order/checkout.php?PRODS=4657209&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&SHORT_FORM=1&NOCD=1&COUPON=2015XMAS" onclick="ga('send', 'event', 'mbbuy', 'buy', '2015aff-xmasmb');">
          <span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>
          <strong>BUY NOW</strong>
          $29.97 <del>$59.95</del>
        </a>
      </li>
    </ul>
  </div>
</div>
<div class="footer">
  <dl class="wrapper payments">
    <dd>Accepted Payments <img src="<?php echo $pResUrl; ?>images/pay-foot.jpg" alt=""></dd>
    <dd>Money Back Guarantee<img src="<?php echo $pResUrl; ?>images/days.png" alt=""></dd>
    <dd class="last">Secure Payment<img src="<?php echo $pResUrl; ?>images/secure.jpg" alt=""></dd>
  </dl>
  <dl class="wrapper annotation">
    <dt>Note:</dt>
    <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - 2015 IObit. All Rights Reserved</p>
</div>
<div class="mask"><div class="panel"></div></div>
<div class="pop-up">
  <div class="pop-main">
    <div class="pop-box">
      <h2>Note:</h2>
      <p>Thank you for your visit and your interest in IObit products! This Special Offer is over now.</p>
      <p>You will be redirected to the latest IObit promotion page automatically.</p>
    </div>
  </div>
</div>
</div>
</div>
<?php echo $gJavascript['foot']; ?>
<script type="text/javascript">
  $(function () {
    $(".gifts ul li").each(function(i){
      $(this).hover(function(){
        $(this).find("a").toggleClass("hidden");
      });
    });
  });
  setTimeout('window.location.href="https://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    document.getElementById('counttime').innerHTML = '<li>'+h+'</li><li>'+i+'</li><li>'+s+'</li><li class="last">'+mi+'<sup>*</sup></li>';
    setTimeout('cycleCountdown()', 1);
  }
  cycleCountdown();
</script>
</body>
</html>
