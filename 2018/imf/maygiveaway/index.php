<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
  $refStr = '';
if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr .= empty($_GET['to']) ? '-unknown' : '-'.$_GET['to'];
$refStr .= empty($_GET['ref']) ? '-unknown' : '-'.$_GET['ref'];
$refStr .= '-'.$ver;
$refStr .= empty($_GET['insur']) ? '-unknown' : '-'.$_GET['insur'];
$refStr .= '-' . ((strlen($_GET['lsnstatus']) == 0) ? 'unknown' : 'I'.$_GET['lsnstatus']);
$refStr .= '-' . ((strlen($_GET['user']) == 0) ? 'unknown' : 'u'.$_GET['user']);
$refStr .= '-' . ((strlen($_GET['insday']) == 0) ? 'unknown' : 'i'.$_GET['insday']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Special 85% OFF for Giveaway Users to Redeem IObit Malware Fighter PRO – IObit</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Raleway:400,600'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo getStaticUrl('style/swiper.css')?>">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
    </a>
    <div class="title">
      <strong>Giveaway Users ONLY!</strong>
      <h1>Exclusive Discount on Latest PRO Version</h1>
    </div>
    <ul id="banCuntdown" class="countdown">
      <li><strong>24</strong> H : </li>
      <li><strong>34</strong> M : </li>
      <li><strong>25</strong> S : </li>
      <li class="last"><strong>345</strong> MS* </li>
    </ul>
    <div class="clearfix">
      <img class="imf fl" src="<?php echo getStaticUrl('images/imf.png')?>" alt=""/>
      <div class="offer fr">
        <ul>
          <li><h3>Original Price <b><small>$</small>39.99</b></h3></li>
          <li class="black">
            <h3>Sale Price <b><small>$</small>19.95</b></h3>
            <p>regular discount</p>
          </li>
          <li class="red">
            <h3>Best Price for You <b><small>$</small>5.99</b></h3>
            <p>time-limited discount</p>          
          </li>
        </ul>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=imf8-acak&ref=en-imf1pcgiveaway<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-give2019');" data-text="Redeem Now">
          <!-- Redeem Now  -->
          <span>R</span><span>e</span><span>d</span><span>e</span><span>e</span><span>m</span> <span>N</span><span>o</span><span>w</span>
        </a>
        <p>100% 60-DAY MONEY BACK GUARANTEE </p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- payment start -->
<div class="payment">
  <div class="wrapper"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
</div>
<!-- payment end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Why Stay with IObit Malware Fighter PRO?</h2>
    <h3>Without profound protection provided by PRO, your computer would encounter severe security problems.</h3>
    <div class="status clearfix">
      <div class="left">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/status-01.png')?>" alt=""/></dt>
          <dd>
            <h4>Weak PC Security</h4>
            <p>Without large virus database of Bitdefender, your computer is not strong enough to defend itself.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/status-02.png')?>" alt=""/></dt>
          <dd>
            <h4>Privacy Exposure</h4>
            <p>Unsecured PC camera is easy to be hacked in resulting your daily life and privacy exposed. </p>
          </dd>
        </dl>
      </div>
      <div class="computer"><img src="<?php echo getStaticUrl('images/computer.png')?>" alt=""/></div>
      <div class="right">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/status-03.png')?>" alt=""/></dt>
          <dd>
            <h4>Potential Ransomware Attacks</h4>
            <p>Unable to identify suspicious behaviors that trying to encrypt your computer or files and you may lose access to them. </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/status-04.png')?>" alt=""/></dt>
          <dd>
            <h4>Risky Online Surfing</h4>
            <p>Without protection, annoying ads would pop up while surfing and your online trace may be tracked or recorded.</p>
          </dd>
        </dl>
      </div>
    </div>
    <h3 class="ftitle">And you will also miss these exciting <b>IMF8 PRO-ONLY</b> features</h3>
    <ul class="feature clearfix">
      <li>
        <img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/>
        <h4>Safe Personal Data <span><em>IMPROVED</em></span></h4>
        <p>With password protection, your improtant files can be kept away from any unauthorized access and guarantee your privacy.</p>
      </li>
      <li class="center">
        <img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/>
        <h4>Latest Bitdefender Engine <span><em>IMPROVED</em></span></h4>
        <p>with latest Bitdefender engine, 200,000,000+ threats like malware, virus and spyware can not harm your computer.</p>
      </li>
      <li>
        <img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/>
        <h4>Prevent USB Virus <span><em>IMPROVED</em></span></h4>
        <p>Automatically scanning USB drive that plugged in in case any virus hides in it and attempts to spread to your computer.</p>
      </li>
    </ul>
    <a class="more" href="javascript: void(0);">Learn more about PRO edition </a>
  </div>
</div>
<!-- intro end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>What Others Say: </h2>
    <div class="review-box">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <dl>
              <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"/></dt>
              <dd>
                <h3>"It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots. </h3>
                <p>
                  The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similar tools. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.
                  <span>- Software Informer</span>
                </p>
              </dd>
            </dl>
            <dl class="two">
              <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"/></dt>
              <dd>
                <h3>"It scans my laptop without affecting its performance"</h3>
                <p>
                  I am very satisfied with your product IObit Maleware Fighter. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.
                  <span>- Gelu Batir</span>
                </p>
              </dd>
            </dl>
          </div>
          <div class="swiper-slide">
            <dl>
              <dt><img src="<?php echo getStaticUrl('images/betanews-com.png')?>" alt="Betanews.com"/></dt>
              <dd>
                <h3>"IObit Malware Fighter PRO is a complete security package."</h3>
                <p>
                  "IObit Malware Fighter PRO is a complete security package. It weeds out spyware, Trojan and all manner of other nasties, there're also Startup Guard that ensures no malicious processes start with Windows, Browser Guard that ensures no software makes changes to your web browser, File Guard that ensures unknown file you open do not cause any damage, USB Guard, Process Guard and more."
                  <span>- Betanews.com</span>
                </p>
              </dd>
            </dl>
            <dl class="two">
              <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"/></dt>
              <dd>
                <h3>"It is lot quicker at scanner and easy to use."</h3>
                <p>
                  "I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter.
                  <span>- David Cassidy</span>
                </p>
              </dd>
            </dl>
          </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<div class="wrapper">
  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <p>As being trusted and awarded by those world-class media in the past seven years, you know you’ve got the right PC protector</p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">See what PRO edition can do for you:</th>
          <td class="space"></td>
          <th class="itemb">IObit Malware Fighter <b>FREE</b></th>
          <td class="space"></td>
          <th class="itema">
            IObit Malware Fighter PRO
            <p>1 Year / 1 PC</p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=imf8-acak&ref=en-imf1pcgiveaway<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-give2019');" data-text="Redeem Now">
              <span>R</span><span>e</span><span>d</span><span>e</span><span>e</span><span>m</span> <span>N</span><span>o</span><span>w</span>
            </a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Anti-malware with latest IObit malware database <sup>IMPROVED</sup></td>
          <td class="space"></td>
          <td class="itemb gray"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Quickly detect threats hiding in your computer <sup>IMPROVED</sup></td>
          <td class="space"></td>
          <td class="itemb gray"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Detect 209,000,000+ threats with Bitdefender & IObit engines <sup>IMPROVED</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Stop ransomware attempting to encrypt your important files </td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">No one can access to your personal data without password <sup>IMPROVED</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_email.png')?>" alt="" /></td>
          <td class="virtue">Detect and identify malicious links in your web mails <sup class="new">NEW</sup></td>
          <td class="space"></td>
          <td class="itemb gray"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Scan Download Files and Remove Ads to Enhance Protection <sup>IMPROVED</sup></td>
          <td class="space"></td>
          <td class="itemb gray"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Full Anti-Malware Ability with Unique "Dual-Core" Engine  <sup>IMPROVED</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Boot-time Disk Protection Against Malicious Attacks with MBR Guard</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Safeguard Your Camera against Unauthorized Access <sup>IMPROVED</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Comprehensive Real-time Protection for Top PC Security <sup>IMPROVED</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Prevent Virus Infection Carried by USB Disk</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
          <td class="virtue">Detect Malicious Process Running in RAM</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
          <td class="virtue">Auto Clean Surfing Privacy Trace with Browser Anti-Tracking <sup>IMPROVED</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
          <td class="virtue">Intelligently Works in Background without Interrupting</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_15.png')?>" alt="" /></td>
          <td class="virtue">Automatic Update to the Latest Version</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_16.png')?>" alt="" /></td>
          <td class="virtue">Free 24/7 Technical Support on Demand</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th class="text" colspan="2"></th>
          <td class="space"></td>
          <th class="itemb">IObit Malware Fighter <b>FREE</b></th>
          <td class="space"></td>
          <th class="itema">
            <p><strong><small>$</small>5<small class="two">.99</small></strong> <del>$39.99</del></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=imf8-acak&ref=en-imf1pcgiveaway<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-give2019');" data-text="Redeem Now">
              <span>R</span><span>e</span><span>d</span><span>e</span><span>e</span><span>m</span> <span>N</span><span>o</span><span>w</span>
            </a>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->
</div>

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd>
          <h3>Money Back Guarantee</h3>
          <p>If you're not satisfied in the first 60 days, we will give you back your money.</p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
        <dd>
          <h3>Secure Payment</h3>
          <p>IObit supports several safe modes of payment.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt="" /></dt>
        <dd>
          <h3>Get License</h3>
          <p>You will receive the license within a few minutes after purchase.</p>
        </dd>
      </dl>
    </div>
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
    </dl>
    <p class="copyright">© 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl">
      <ul id="floatCuntdown" class="countdown">
        <li><strong>24</strong> H : </li>
        <li><strong>34</strong> M : </li>
        <li><strong>25</strong> S :</li>
        <li class="last"><strong>345</strong>MS* </li>
      </ul>
      <h2>Best Price Ever to Enjoy Full-round PC & Surfing Protection</h2>
    </div>
    <div class="right fr">
      <p><strong><small>$</small>5<small class="two">.99</small></strong> <del>$39.99</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=imf8-acak&ref=en-imf1pcgiveaway<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-give2019');" data-text="Redeem Now – 85% OFF">
        <span>R</span><span>e</span><span>d</span><span>e</span><span>e</span><span>m</span> <span>N</span><span>o</span><span>w</span> <span>–</span> <span>85%</span> <span>OFF</span>
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/swiper-min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    effect: 'flip',
    loop:true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
</body>
</html>