<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  $viewNum=rand(98,165);
  if($_GET['action']=='getViewNum'){
    echo $viewNum;
    exit();
  }
if(!empty($_GET['pop'])){
    $refStr ='-'.$_GET['pop'];
}
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
<title>Save Special 65% Discount on IObit Malware Fighter PRO and Get 2 Free Gifts</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1> FLASH  SALE</h1>
        <div class="spiuto">
          <div class="spiuto-box"></div>
          <div class="maskbox"></div>
        </div>
        <h2><strong>08</strong>m:<strong>45</strong>s:<strong>234</strong>*</h2>
      </div>
      <div class="box">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""></dt>
          <dd>
            <strong>$<b>14.77</b> </strong> <del> $39.95</del>
          </dd>
          <dd><a href="https://www.iobit.com/buy.php?product=imf81pc1477&ref=en-imf1pcspecial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf1pcbuy', 'buy', 'imfpurchase-special');" class="buybtn">Buy Now</a></dd>
        </dl>
        <h3>60% Off</h3>
        <p>
          <span>-60%</span>
          <strong>IObit Malware Fighter 8 PRO <cite>(1 Year Subscription / 1 PC)</cite></strong>
          <del>$39.95 </del>
        </p>
      </div>
      <div class="box gift-box">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/imf-gift-box.png')?>" alt=""></dt>
          <dd>
            <strong>$<b>19.95</b> </strong> <del> $94.93</del>
          </dd>
          <dd><a href="https://www.iobit.com/buy.php?product=imf83pciusd1995&ref=en-imf3pciusdspecial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf" 
                 onclick="ga('send', 'event', 'imfbundlebuy', 'buy', 'imfpurchase-special');" class="buybtn">Buy Now</a></dd>
        </dl>
        <h3>65% Off + 2 Free Gifts</h3>
        <p>
          <span>-65%</span>
          <strong>IObit Malware Fighter 8 PRO <cite>(1 Year Subscription / 3 PCs)</cite></strong>
          <del>$54.95 </del>
        </p>
        <p>
          <span>FREE</span>
          <strong>IObit Uninstaller 11 PRO  </strong>
          <del>$19.99  </del>
        </p>
        <p>
          <span>FREE</span>
          <strong>Smart Defrag 7 PRO   </strong>
          <del>$19.99  </del>
        </p>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper clearfix">
      <h2>You Will Get Full-round PC Protection in PRO</h2>
      <img src="<?php echo getStaticUrl('images/feature-box.png')?>" alt="" class="img-box">
      <dl class="left">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""> PC Security </dt>
        <dd>
          <strong>Bitdefender & IObit Engines</strong>
          <p>Dual engines work to detect <br> over 209 million malware   </p>
        </dd>
        <dd>
          <strong>Anti-ransomware </strong>
          <p>Protect against ransomware <br> attacks in real time    </p>
        </dd>
        <dd>
          <strong>USB Protection</strong>
          <p>Prevent virus infection carried <br> by  USB devices       </p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""> Privacy Protection </dt>
        <dd>
          <strong>Safe Personal Data</strong>
          <p>Can’t access personal data <br> without password   </p>
        </dd>
        <dd>
          <strong>Camera Protection </strong>
          <p>Detect & stop intruders from <br> webcam spy    </p>
        </dd>
        <dd>
          <strong>Surfing Protection</strong>
          <p>Auto delete online traces and <br> block malicious sites & links       </p>
        </dd>
      </dl>
      <div class="learn-more">
        <a href="javascript:void(0);" onclick="goTaget($('.compar-tab'))">Learn more about PRO edition></a>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gift start -->
  <div class="gift-message">
    <div class="wrapper">
      <h2>2 Free Gifts Ensure You Better PC Optimization</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/iu-gift.png')?>" alt=""></dt>
        <dd>
          <h3>IObit Uninstaller PRO</h3>
          <strong>$<b>0</b></strong> <del>$19.99  </del>
          <p>Remove Useless Programs & Plug-ins for Cleaner PC</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""></dt>
        <dd>
          <h3>Smart Defrag PRO</h3>
          <strong>$<b>0</b></strong> <del>$19.99  </del>
          <p>Maximize Hard Drive Optimization <br> for Faster PC</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- gift end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>What Others Say</h2>
      <div class="review-box">
        <div class="reviews">
          <div class="inner">
            <dl>
              <dt>software.informer</dt>
              <dd>
                The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similartools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.
              </dd>
            </dl>
            <dl>
              <dt>Filipe</dt>
              <dd>
                IObit Malware Fighter the best malware removal that I use in my work. I´m a IT guy who work in Support and IMF is my best fighter tool. Be careful if you are a malware, you will be terminated. IMF is intituive software with advanced features and a very nice GUI. A modern everyday tool.
              </dd>
            </dl>
            <dl>
              <dt>Adam Cullen</dt>
              <dd>
                IObit Malware fighter is great as it can scan files and usbs and protect against online and offline threats. Overall with IObit products I have gotten great results even with the free versions as they have helped me and my computer. I would recommend IObit and all of their programs to anyone looking for protection and speediness of their computer and making life just that bit easier.
              </dd>
            </dl>
          </div>
        </div>
        <div class="handle">          
          <span class="one"><img src="<?php echo getStaticUrl('images/software.informer.png')?>" alt=""/></span>
          <span class="two on"><img src="<?php echo getStaticUrl('images/filipe.png')?>" alt="Filipe"/></span>
          <span class="three"><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->
  <!--compartab start-->
  <div class="compar-tab wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th colspan="2" class="text">See what PRO edition can do for you:</th>
        <th class="space"></td>
        <th class="item-free">IObit Malware Fighter <br> FREE</th>
        <th class="space"></td>
        <th class="item-pro">
          IObit Malware Fighter <br> PRO

        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
        <td class="text">Anti-malware with latest IObit malware database  <sup class="c-green">IMPROVED</sup></td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
        <td class="text">Quickly detect threats hiding in your computer <sup class="c-green">IMPROVED</sup></td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
        <td class="text">Detect 209,000,000+ threats with Bitdefender & IObit engines  <sup class="c-green">IMPROVED</sup></td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
        <td class="text">Stop ransomware attempting to encrypt your important files   </td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
        <td class="text">No one can access to your personal data without password <sup class="c-green">IMPROVED </sup></td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
        <td class="text">Detect and identify malicious links in your web mails <sup class="c-red">NEW</sup></td>
        <td class="space"></td>
        <td class="item-free checked"> <img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
        <td class="text">Scan Download Files and Remove Ads to Enhance Protection <sup class="c-green"> IMPROVED</sup></td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"> </td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
        <td class="text">Full Anti-Malware Ability with Unique "Dual-Core" Engine <sup class="c-green">IMPROVED</sup> </td>
        <td class="space"></td>
        <td class="item-free"> </td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
        <td class="text">Boot-time Disk Protection Against Malicious Attacks with MBR Guard </td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
        <td class="text">Safeguard Your Camera against Unauthorized Access <sup class="c-green">IMPROVED</sup></td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
        <td class="text">Comprehensive Real-time Protection for Top PC Security  <sup class="c-green">IMPROVED</sup></td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
        <td class="text">Prevent Virus Infection Carried by USB Disk</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
        <td class="text">Detect Malicious Process Running in RAM</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
        <td class="text">Auto Clean Surfing Privacy Trace with Browser Anti-Tracking <sup class="c-green"> IMPROVED</sup></td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
        <td class="text">Intelligently Works in Background without Interrupting</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_16.png"></td>
        <td class="text">Automatic Update to the Latest Version</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_17.png"></td>
        <td class="text">Free 24/7 Technical Support on Demand</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
      </tr>
      </tbody>
    </table>
  </div>
  <!--compartab end-->
  <div class="bottom-buy">
    <div class="wrapper">
      <div class="img-box">
        <div class="content">
          <img src="<?php echo $pResUrl;?>images/imf-gift-box.png" alt="">
          <img src="<?php echo $pResUrl;?>images/imf-box.png" alt="">
        </div>
      </div>
      <ul>
        <li class="active"  data-num="1"><span></span> <strong>1 Year / 3 PCs + Free Gifts</strong> <b>65% Off     </b></li>
        <li  data-num="0"><span></span> <strong> 1 Year / 1 PC</strong> <b>60% Off     </b></li>
      </ul>
      <dl>
        <dt>Now <strong>$<b>19.95</b></strong></dt>
        <dd><a href="https://www.iobit.com/buy.php?product=imf83pciusd1995&ref=en-imf3pciusdspecial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf" 
               onclick="ga('send', 'event', 'imfbundlebuy', 'buy', 'imfpurchase-special');" class="buybtn">Buy Now</a></dd>
        <dd>Valued at <del>$94.93</del></dd>
      </dl>
    </div>
  </div>

  <div class="footer">
    <div class="wrapper">
      <!-- award -->
      <div class="award">
        <h2>Trusted and awarded by these media</h2>
        <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
      </div>
      <!-- service -->
      <div class="service clearfix">
        <dl class="fl clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/money-back.png" alt=""></dt>
          <dd>
            <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
            <p>
              We're confident that activating PRO edition will protect your PC all-round for affordable price!
            </p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h3>We accept</h3>
          </dd>
          <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
        </dl>
      </div>
      <!-- annotation -->
      <dl class="annotation">
        <dt>Note:</dt>
        <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
  <div class="float">
    <div class="clock"></div>
    <p>Hurry, super flash sale ends in</p>
    <div class="date">
      <h3><strong>08</strong>m:<strong>45</strong>s:<strong>234</strong>*</h3>
      <h4><strong>08</strong>m:<strong>45</strong>s:<strong>234</strong>*</h4>
    </div>
  </div>



  <script>
    refStr="<?php echo $refStr;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>