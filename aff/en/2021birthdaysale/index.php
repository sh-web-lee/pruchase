<?php
  error_reporting(0);
  define("IObit", "IObit");
  if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';

  // $refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

  $buyGa = "ga('send', 'event', 'ascbuy', 'buy', 'enaffasc142021birthdaysale');";

  $refStr = (empty($_GET['ref']) ? '' : $_GET['ref']);
  $affStr = (empty($_GET['aff']) ? (empty($_GET['AFF']) ? '' : $_GET['AFF']) : $_GET['aff']);

  $ref = empty($refStr) ? (empty($affStr) ? '' : '?aff='.$affStr) : (empty($affStr) ? '?ref=ir' : '?ref='.$refStr.'&aff='.$affStr);

  $buyLinkBirthdayPack='https://www.iobit.com/buy.php?product=enaff-2021bp3299&ref='.($refStr ? $refStr : 'enaff_asc14bp_2021birthdaysale').'&aff='.$affStr;
  $buyLinkASC='https://www.iobit.com/buy.php?product=enaff-asc143pc1999a&ref='.($refStr ? $refStr : 'enaff_asc14_2021birthdaysale').'&aff='.$affStr;
  $buyLinkASCU='https://www.iobit.com/buy.php?product=enaff-ascultimate14&ref='.($refStr ? $refStr : 'enaff_ascu14_2021birthdaysale').'&aff='.$affStr;
  $buyLinkDB='https://www.iobit.com/buy.php?product=enaff-driverbooster8&ref='.($refStr ? $refStr : 'enaff_db8_2021birthdaysale').'&aff='.$affStr;
  $buyLinkIU='https://www.iobit.com/buy.php?product=enaff-iu103pc1677&ref='.($refStr ? $refStr : 'enaff_iu10_2021birthdaysale').'&aff='.$affStr;
  $buyLinkISR='https://www.iobit.com/buy.php?product=enaff-isr3299seo&ref='.($refStr ? $refStr : 'enaff_isr_2021birthdaysale').'&aff='.$affStr;
  $buyLinkIMF='https://www.iobit.com/buy.php?product=enaff-imf8&ref='.($refStr ? $refStr : 'enaff_imf8_2021birthdaysale').'&aff='.$affStr;
  $buyLinkISU='https://www.iobit.com/buy.php?product=enaff-isu43pc&ref='.($refStr ? $refStr : 'enaff_isu4_2021birthdaysale').'&aff='.$affStr;
  $buyLinkSD='https://www.iobit.com/buy.php?product=enaff-sd63pcs&ref='.($refStr ? $refStr : 'enaff_sd6_2021birthdaysale').'&aff='.$affStr;
  $buyLinkSM8='https://www.iobit.com/buy.php?product=enaff-sm83pc&ref='.($refStr ? $refStr : 'enaff_sm8_2021birthdaysale').'&aff='.$affStr;
  $buyLinkPF='https://www.iobit.com/buy.php?product=enaff-protected-folder&ref='.($refStr ? $refStr : 'enaff_pf_2021birthdaysale').'&aff='.$affStr;
  $buyLinkAMC='https://www.iobit.com/buy.php?product=enaff-amc&ref='.($refStr ? $refStr : 'enaff_amc_2021birthdaysale').'&aff='.$affStr;
?>
<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>IObit Hot Deal - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="description" content="Special offer, Hot sale and discount on sale for Advanced SystemCare and Driver Booster and other hot products of IObit. "/>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,600i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
      <h1>Open Your 90% OFF Birthday Pack</h1>
      <div class="message">
        <h2>Our <span>Birthday Pack</span> Includes</h2>
        <ul>
          <li>Advanced SystemCare PRO <span>(1 year / 3 PCs)</span> <b>$89.97</b></li>
          <li>Driver Booster PRO <span>(1 year / 3 PCs)</span> <b>$74.85</b></li>
          <li>IObit Uninstaller PRO <span>(1 year / 3 PCs)</span> <b>$59.93</b></li>
          <li>IObit Malware Fighter PRO <span>(1 year / 3 PCs)</span> <b>$54.95</b></li>
          <li>IObit Software Updater PRO <span>(1 year / 3 PCs)</span> <b>$29.99</b></li>
          <li>Smart Defrag PRO <span>(1 year / 3 PCs)</span> <b>$39.99</b></li>
        </ul>
        <div class="price">
          <div class="left">
            <strong><small>$</small>32.99</strong> <del>$349.68</del>
          </div>
          <a class="buybtn" href="<?= $buyLinkBirthdayPack; ?>" onclick="<?= $buyGa; ?>">
            Buy Now
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- end banner -->

  <!-- products -->
  <div class="products">
    <div class="wrapper">
      <h2>IObit Popular Products on Sale</h2>
      <p>Troubleshoot whatever problem your device encounters</p>
      <div class="list horizontal asc">
        <div class="pic">
          <img src="<?php echo getStaticUrl('images/asc.png')?>" alt="" />
        </div>
        <div class="info">
          <h4>Advanced SystemCare 14 PRO <small>1 Year / 3 PCs</small></h4>
          <p>
            Powerful tuneup utility ensures a cleaner, safer and 200% faster PC that runs like new, with single license running on 3 PCs.
          </p>
          <div class="price">
            <span><strong>$19.99</strong> <del>$89.97</del></span>
            <a class="buybtn" href="<?= $buyLinkASC; ?>" onclick="<?= $buyGa; ?>">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="list horizontal ascu">
        <div class="pic">
          <img src="<?php echo getStaticUrl('images/ascu.png')?>" alt="" />
        </div>
        <div class="info">
          <h4>Advanced SystemCare Ultimate 14 PRO <small>1 Year / 3 PCs</small></h4>
          <p>
            All-in-one utility optimizes for ultimate PC performance and protects against malicious infection, with single license running on 3 PCs.
          </p>
          <div class="price">
            <span><strong>$29.99</strong> <del>$49.99</del></span>
            <a class="buybtn" href="<?= $buyLinkASCU; ?>" onclick="<?= $buyGa; ?>">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="list horizontal db">
        <div class="pic">
          <img src="<?php echo getStaticUrl('images/db.png')?>" alt="" />
        </div>
        <div class="info">
          <h4>Driver Booster 8 PRO <small>1 Year / 3 PCs</small></h4>
          <p>
            One of the best driver updater keeps over 4,500,000 drivers and popular game components up-to-date with 1-click, with single license running on 3 PCs.
          </p>
          <div class="price">
            <span><strong>$22.95</strong> <del>$74.85</del></span>
            <a class="buybtn" href="<?= $buyLinkDB; ?>" onclick="<?= $buyGa; ?>">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="list horizontal iu">
        <div class="pic">
          <img src="<?php echo getStaticUrl('images/iu.png')?>" alt="" />
        </div>
        <div class="info">
          <h4>IObit Uninstaller 10 PRO <small>1 Year / 3 PCs</small></h4>
          <p>
            Most effective uninstaller guarantees complete software uninstallation and leftovers removal, with single license running on 3 PCs.
          </p>
          <div class="price">
            <span><strong>$16.77</strong> <del>$59.93</del></span>
            <a class="buybtn" href="<?= $buyLinkIU; ?>" onclick="<?= $buyGa; ?>">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="list horizontal isr">
        <div class="pic">
          <img src="<?php echo getStaticUrl('images/isr.png')?>" alt="" />
        </div>
        <div class="info">
          <h4>iFun Screen Recorder PRO <small>1 Year / 1 PC</small></h4>
          <p>
            The easy-to-use screen recorder makes record your screen and webcam smoothly and add a personal watermark to the video easily. 
          </p>
          <div class="price">
            <span><strong>$32.99</strong> <del>$42.99</del></span>
            <a class="buybtn" href="<?= $buyLinkISR; ?>" onclick="<?= $buyGa; ?>">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="clearfix">
        <div class="list vertical imf">
          <div class="pic">
            <img src="<?php echo getStaticUrl('images/imf.png')?>" alt="" />
          </div>
          <div class="info">
            <h4>IObit Malware Fighter 8 PRO<small>1 Year / 1 PC</small></h4>
            <p>Detect & remove 209 million threats</p>
            <p>Protect personal data with password</p>
            <p>Block ransomware attacks</p>
            <div class="price">
              <span><strong>$19.95</strong> <del>$39.95</del></span>
              <a class="buybtn" href="<?= $buyLinkIMF; ?>" onclick="<?= $buyGa; ?>">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="list vertical isu">
          <div class="pic">
            <img src="<?php echo getStaticUrl('images/isu.png')?>" alt="" />
          </div>
          <div class="info">
            <h4>IObit Software Updater 4 PRO <small>1 Year / 3 PCs</small></h4>
            <p>Automatically update software</p>
            <p>1-click to keep all software updated</p>
            <p>Directly download & install essential software</p>
            <div class="price">
              <span><strong>$12.97</strong> <del>$29.99</del></span>
              <a class="buybtn" href="<?= $buyLinkISU; ?>" onclick="<?= $buyGa; ?>">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="list vertical sd">
          <div class="pic">
            <img src="<?php echo getStaticUrl('images/sd.png')?>" alt="" />
          </div>
          <div class="info">
            <h4>Smart Defrag 6 PRO <small>1 Year / 3 PCs</small></h4>
            <p>Faster defrag speed</p>
            <p>Auto defrag select files</p>
            <p>Quicker PC startup</p>
            <div class="price">
              <span><strong>$19.99</strong> <del>$39.99</del></span>
              <a class="buybtn" href="<?= $buyLinkSD; ?>" onclick="<?= $buyGa; ?>">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="list vertical sm8">
          <div class="pic">
            <img src="<?php echo getStaticUrl('images/sm8.png')?>" alt="" />
          </div>
          <div class="info">
            <h4>Start Menu 8 PRO <small>1 Year / 3 PCs</small></h4>
            <p>Back to classic start menu with 1-click</p>
            <p>Quick & powerful file search</p>
            <p>No-ads and clean start menu</p>
            <div class="price">
              <span><strong>$7.99</strong> <del>$22.95</del></span>
              <a class="buybtn" href="<?= $buyLinkSM8; ?>" onclick="<?= $buyGa; ?>">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="list vertical pf">
          <div class="pic">
            <img src="<?php echo getStaticUrl('images/pf.png')?>" alt="" />
          </div>
          <div class="info">
            <h4>Protected Folder <small>1 Year / 1 PC</small></h4>
            <p>Protect your files from malicious attacks</p>
            <p>1 password for all files</p>
            <p>Protect privacy from others</p>
            <div class="price">
              <span><strong>$19.95</strong> <del>$39.95</del></span>
              <a class="buybtn" href="<?= $buyLinkPF; ?>" onclick="<?= $buyGa; ?>">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="list vertical amc">
          <div class="pic">
            <img src="<?php echo getStaticUrl('images/amc.png')?>" alt="" />
          </div>
          <div class="info">
            <h4>AMC Security <small>1 Year / 3 Devices</small></h4>
            <p>Auto scan & clean your mobile</p>
            <p>Secure your shopping payment </p>
            <p>Anti-phishing & anti-theft</p>
            <div class="price">
              <span><strong>$9.99</strong> <del>$19.99</del></span>
              <a class="buybtn" href="<?= $buyLinkAMC; ?>" onclick="<?= $buyGa; ?>">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end products -->

  <!-- payments -->
  <div class="payments">
    <div class="wrapper clearfix">
      <dl class="moneyback">
        <dt>
          <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" />
        </dt>
        <dd>
          <h6>Money Back Guarantee</h6>
          <p>If you're not satisfied in the first 60 days, we will give you back your money.</p>
        </dd>
      </dl>
      <dl>
        <dt>
          <img src="<?php echo getStaticUrl('images/secure-payment.png')?>" alt="" />
        </dt>
        <dd>
          <h6>Secure Payment</h6>
          <p>IObit supports several safe methods of payment</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end payments -->

  <!-- footer -->
  <div class="footer">
    <p class="copyright wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved.</p>
  </div>
  <!-- end footer -->
</body>
</html>
