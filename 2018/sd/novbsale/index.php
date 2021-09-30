<?php
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
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
  include $pRootUrl.'include/common.inc.php';
$refStr='';
if(in_array($_GET['ref'],array('sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad',
    'sdaadsd','sdfeatures_noaction','sdddact_noaction','actreport','sdactivate','sdactivate_b','sdaad','sdaadsd',
    'sdactivate_c','sdactivate_d','sdactivate_e','sdactivate_f','sdfeatures_new','sdddact_new','actreport',
    'sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide'))){
  $refStr.='-'.$_GET['ref'];
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Save 70% on Smart Defrag 6 PRO to Enjoy Maximum Hard Drive Performance – IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,600,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner -->
  <div class="banner">
    <div class="container">
      <div class="wrapper">
        <!-- header -->
        <div class="header clearfix">
           <a class="logo fl" href="https://www.iobit.com/" target="_blank">
             <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
           </a>
           <h1 class="title fl">Black Firday Sale</h1>
        </div>
        <!-- activity -->
        <div class="activity">
          <div class="steps mainstep">
            <h2>First 2,000 Orders</h2>
            <p>70% OFF + Free Gift Pack</p>
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
            <div class="imgcase"><img src="<?php echo getStaticUrl('images/boxshot-sd.png')?>" alt="" /></div>
            <dl>
              <dt><strong>Smart Defrag 6 PRO</strong></dt>
              <dd>1 Year / 1 PC   <strong>$19.99</strong> <del>$29.99</del></dd>
            </dl>
            <ul>
              <li onclick="goTaget($('.gift-pack'))"><i class="all-icons"></i><strong>SD6 PRO Extra 2 PCs<span>$0</span></strong> <del>$19.99</del></li>
              <li onclick="goTaget($('.gift-pack'))"><i class="all-icons"></i><strong>AMC Security PRO<span>$0</span></strong> <del>$19.99</del></li>
            </ul>
          </div>
          <div class="checkout">
            <dl>
              <dt><strong><small>$</small>19.99</strong> <span><del>$69.97</del> <em>70% OFF</em></span></dt>
              <dd><a href="https://www.iobit.com/buy.php?product=sd63pcsamc&ref=sd3pcamc2018may<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_sdrc" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase-rc');" class="activebtn buybtn">Activate Now</a></dd>
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
    <h2>Maximize Hard Drive Performance & Speed Up Your PC with SD 6 PRO</h2>
    <div class="snapshoot">
      <img src="<?php echo getStaticUrl('images/snapshoot.jpg')?>" alt="">
    </div>
    <div class="benfits-list clearfix">
      <div class="list fl">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-01.png" alt="">
        <dl>
          <dt>New Ultra-fast Engine</dt>
          <dd>Defragment files more efficiently and thoroughly in less time</dd>
        </dl>
      </div>
      <div class="list fr">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-02.png" alt="">
        <dl>
          <dt>Up to 200% Faster *</dt>
          <dd>Accelerate file access speed & game launching speed with Large File Defrag </dd>
        </dl>
      </div>
      <div class="list feed fl">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-03.png" alt="">
        <dl>
          <dt>Auto Smart Defrag</dt>
          <dd>Automatically and intelligently defragment selected files and disks without interruption</dd>
        </dl>
      </div>
      <div class="list fr">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-04.png" alt="">
        <dl>
          <dt>Quicker PC Startup </dt>
          <dd>Enjoy quicker PC startup and top system running speed with Boot Time Defrag</dd>
          <dd><a href="javascript:void(0);" onclick="goTaget($('.compar-tab'))" class="morelink">Learn more about PRO edition >></a></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->
  <!-- gift-pack -->
  <div class="gift-pack wrapper">
    <h2>Black Friday Free Gift Pack</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/boxshot-sd-two.png')?>" alt="Smart Defrag PRO"></dt>
      <dd><strong>Smart Defrag PRO</strong></dd>
      <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / 2 PCs</dd>
      <dd>Get the Maximum Hard Drive Performance!</dd>
    </dl>
    <dl class="amc">
      <dt><img src="<?php echo getStaticUrl('images/boxshot-amc.png')?>" alt=""></dt>
      <dd><strong>AMC Security PRO</strong></dd>
      <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / Multi Devices</dd>
      <dd>200% Speed up and Fully Protect  your Android from any threat!</dd>
    </dl>
  </div>
  <!-- end gift-pack -->
  <!-- mid-cart -->
  <div class="midcart">
    <div class="container">
      <div class="showcase">
        <div class="details">
          <div class="imgcase"><img src="<?php echo $pResUrl; ?>images/boxshot-sd.png" alt=""></div>
          <dl>
            <dt><strong>Smart Defrag 6 PRO</strong></dt>
            <dd>1 Year / 1 PC   <strong>$19.99</strong> <del>$29.99</del></dd>
          </dl>
          <ul>
            <li onclick="goTaget($('.gift-pack'))"><i class="all-icons"></i><strong>SD6 PRO Extra 2 PCs<span>$0</span></strong> <del>$19.99</del></li>
            <li onclick="goTaget($('.gift-pack'))"><i class="all-icons"></i><strong>AMC Security PRO<span>$0</span></strong> <del>$19.99</del></li>
          </ul>
        </div>
        <div class="checkout">
          <dl>
            <dt><strong><small>$</small>19.99</strong> <span><del>$69.97</del> <em>70% OFF</em></span></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=sd63pcsamc&ref=sd3pcamc2018may<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_sdrc" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase-rc');" class="activebtn buybtn">Activate Now</a></dd>
            <dd>Hurry up, <span class="countNum">00</span> left today!</dd>
          </dl>
        </div>
        <p><i class="all-icons"></i>100% 60-DAY MONEY BACK GUARANTEE </p>
      </div>      
    </div>
  </div>
  <!-- end mid-cart -->
  <!-- review -->
  <div class="review ">
    <div class="wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <h2>Media Review</h2>
            <dt>
              <img src="<?php echo $pResUrl; ?>images/cnet.png" alt="">
               <cite>Cnet</cite>
            </dt>
            <dd>
              <h3>"IObit Smart Defrag is the best defragger we've tried yet."</h3>
              <p>"IObit Smart Defrag optimizes your PC to take full advantage of SSD performance while defragmenting your hard disks. Its SSD Trim tool automatically enables system tweaks that typically require experience to apply. Smart Defrag's updates include a new defrag engine, specialized Game Defrag, a cool new look, and many more language options (35 and counting)."</p>
            </dd>
          </dl>
          <dl class="reviews">
            <h2>User Review</h2>
            <dt>
              <img src="<?php echo $pResUrl; ?>images/amnon.png" alt="">
              <cite>Amnon</cite>
            </dt>
            <dd>
              <h3>"Smart defrag is a very well behaved disk defrag software."</h3>
              <p>"Smart defrag is a very well behaved disk defrag software, operating in the background whenever computer is idle so that you hardly notice it. As a result: drives are permanently defragmented allowing rapid access and less wear and tear. Smart defrag is the best Free disk defragmenter I've ever used and I'll definitely recommend it to my family and friends!"</p>
            </dd>
          </dl>
          <dl class="reviews">
            <h2>User Review</h2>
            <dt>
              <img src="<?php echo $pResUrl; ?>images/hans.png" alt="">
              <cite>Hans</cite>
            </dt>
            <dd>
              <h3>"Since using this fantastic software my desktop and my laptop are fast and save."</h3>
              <p>"I am a user of Smart defrag for many years. Since using this fantastic software my desktop and my laptop are fast and save. Together with advance system care ultimate you have a complete tool for keeping you system up to date, fast and secure.Using it every day without need to wait (pc closes itself) you keep your system in top condition even if you have no technical background!"</p>            </dd>
          </dl>
          <dl class="reviews">
            <h2>User Review</h2>
            <dt>
              <img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.png" alt="">
              <cite>Edward Lee Ah Yen</cite>
            </dt>
            <dd>
              <h3>"It is easy to use, must have utility, for your hard disc or SSD."</h3>
              <p>"I run a combination of RAID 0 SSDs and RAID 0 HDDs and use Smart Defrag Pro to analyse, defrag and keep my drives running at peak performance. As with all IObit software it is easy to install, use and very reliable. Just set it up and forget it. Smart Defrag has a very small memory foot print so it won't slow down your system. Definitely recommended!"</p>
          </dl> 
        </div>
      </div>
    </div>
  </div>
  <!-- end review -->
  <!-- compar-tab -->
  <div class="compar-tab wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th colspan="2" class="text">See what PRO edition can do for you:</th>
        <th class="space"></td>
        <th class="item-free">Smart Defrag FREE</th>
        <th class="space"></td>
        <th class="item-pro">
          Smart Defrag PRO <a href="https://www.iobit.com/buy.php?product=sd63pcsamc&ref=sd3pcamc2018may<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_sdrc" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase-rc');" class="activesmall small buybtn">Activate Now</a>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-01.png"></td>
        <td class="text">Basic Hard Drive Defragmentation and Optimization</td>
        <td class="space"></td>
        <td class="item-free checked"><span class="all-icons">√</span></td>
        <td class="space"></td>
        <td class="item-pro"><span class="all-icons solid">√</span></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-02.png"></td>
        <td class="text">Up to 200% Faster File Access Speed</td>
        <td class="space"></td>
        <td class="item-free fork"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="item-pro"><span class="all-icons solid">√</span></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-03.png"></td>
        <td class="text">Boot Time Defragment for Quicker PC Startup</td>
        <td class="space"></td>
        <td class="item-free fork"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="item-pro"><span class="all-icons solid">√</span></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-04.png"></td>
        <td class="text">Automatically & Intelligently Defragment Fragmented Files</td>
        <td class="space"></td>
        <td class="item-free fork"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="item-pro"><span class="all-icons solid">√</span></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-05.png"></td>
        <td class="text">Customizing Defrag Mode & Disks/Files to Be Defragged</td>
        <td class="space"></td>
        <td class="item-free fork"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="item-pro"><span class="all-icons solid">√</span></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-06.png"></td>
        <td class="text">DMA Applied for Better, Faster & More Stable Data Transfer</td>
        <td class="space"></td>
        <td class="item-free fork"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="item-pro"><span class="all-icons solid">√</span></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-07.png"></td>
        <td class="text">No Interruption at Working or Gaming with Silent Mode</td>
        <td class="space"></td>
        <td class="item-free checked"><span class="all-icons">√</span></td>
        <td class="space"></td>
        <td class="item-pro"><span class="all-icons solid">√</span></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-08.png"></td>
        <td class="text">Top Gaming Experience with Game Optimize</td>
        <td class="space"></td>
        <td class="item-free checked"><span class="all-icons">√</span></td>
        <td class="space"></td>
        <td class="item-pro"><span class="all-icons solid">√</span></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-09.png"></td>
        <td class="text">Scheduled Task Supported for Idle Defrag</td>
        <td class="space"></td>
        <td class="item-free checked"><span class="all-icons">√</span></td>
        <td class="space"></td>
        <td class="item-pro"><span class="all-icons solid">√</span></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-10.png"></td>
        <td class="text">Auto Update to the Latest Version</td>
        <td class="space"></td>
        <td class="item-free fork"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="item-pro"><span class="all-icons solid">√</span></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-11.png"></td>
        <td class="text"> Free 24/7 Technical Support on Demand</td>
        <td class="space"></td>
        <td class="item-free fork"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="item-pro"><span class="all-icons solid">√</span></td>
      </tr>
      <tfoot>
        <tr>
        <th colspan="2"></th>
        <th class="space"></td>
        <th class="item-free">
          <strong>Smart Defrag FREE</strong>
        </th>
        <th class="space"></td>
        <th class="item-pro">
          <dl>
            <dt><strong>$19.99</strong> <del>$69.97</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=sd63pcsamc&ref=sd3pcamc2018may<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_sdrc" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase-rc');" class="activesmall small buybtn">Activate Now</a></dd>
            <dd class="hurry">Hurry up, only <strong  class="countNum">00</strong> left</dd>
          </dl>
        </th>
      </tr>
      </tfoot>
      </tbody>
    </table>
  </div>
  <!-- end compar-tab -->
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
  <div class="float clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/float_gift.png')?>" onclick="goTaget($('.gift-pack'))" alt="" />
    <div class="cont fl">
      <p>Hurry up,</p>
      <p>only <strong class="countNum">00</strong> free gift packs left.</p> 
    </div>
  </div>
  <script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/modernizr.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>
  <script type="text/javascript">
      $('#dg-container').gallery();
  </script>
</body>
</html>