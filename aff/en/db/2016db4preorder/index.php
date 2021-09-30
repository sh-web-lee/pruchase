<?php
  //  初始化
  error_reporting(0);
  define('IObit', 'IObit');
  if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
  }
function microtime_float() {
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}
function num_format($num){
    if(!is_numeric($num)){
        return false;
    }
    $rvalue='';
    $num = explode('.',$num);
    $rl = !isset($num['1']) ? '' : $num['1'];
    $j = strlen($num[0]) % 3;
    $sl = substr($num[0], 0, $j);
    $sr = substr($num[0], $j);
    $i = 0;
    while($i <= strlen($sr)){
        $rvalue = $rvalue.','.substr($sr, $i, 3);
        $i = $i + 3;
    }
    $rvalue = $sl.$rvalue;
    $rvalue = substr($rvalue,0,strlen($rvalue)-1);
    $rvalue = explode(',',$rvalue);
    if($rvalue[0]==0){
        array_shift($rvalue);
    }
    $rv = $rvalue[0];
    for($i = 1; $i < count($rvalue); $i++){
        $rv = $rv.','.$rvalue[$i];
    }
    if(!empty($rl)){
        $rvalue = $rv.'.'.$rl;
    }else{
        $rvalue = $rv;
    }
    return $rvalue;
}
$buyNum = num_format(ceil(microtime_float() * 1000 / 20000) - 73327026);

if ($_GET['action'] == 'getPacks') {
    if((rand(1,100)%2)==0){
        echo 0;
        exit();
    }
  echo $buyNum;
  exit ;
}
if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_db_2016db4preorder';

include $pRootUrl . 'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Get DB 4 PRO for 45 Days for Free & Enjoy 50% Discount for 1 Year Subscription</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function decreasingPacks() {
      $.ajax({
        type: "GET",
        url: "index.php",
        data: "action=getPacks&r=" + Math.random(),
        success: function(packs) {
            if(packs!=0){
                $('.packs').html(packs);
            }
          setTimeout('decreasingPacks()', 20000);
        }
      });
    }
    setTimeout('decreasingPacks()', 20000);
  </script>
</head>
<body>
<div class="main">
  <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- head -->
  <div class="header">
    <div class="wrapper">
      <a href="http://www.iobit.com/" target="_blank" class="logo">IObit</a>
      <div class="countdown">
        <ul id="countdown">
          <li><span>15</span>hr : </li>
          <li><span>15</span>m : </li>
          <li><span>15</span>s : </li>
          <li><span></span>123</li>
        </ul>
        <sup>*</sup>
      </div>
    </div>
  </div>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <h1>Pre-order Driver Booster 4 Today to Enjoy the following VIP Privileges</h1>
      <div class="stage">
        <div class="boxes bannerAnimate">
          <img src="<?php echo $pResUrl; ?>images/boxes.png" alt="">
        </div>
        <div class="details">
          <div class="steps clearfix">
            <dl class="step-s1 bannerAnimate" id="step0">
              <dt><span><img src="<?php echo $pResUrl; ?>images/text-$0.png" alt=""></span>pre-order</dt>
              <dd><img src="<?php echo $pResUrl; ?>images/marks.png" alt=""></dd>
              <dd>Pay $0 to Pre-order<br> Driver Booster 4 PRO</dd>
            </dl>
            <div class="line la bannerAnimate" id="step1"><img src="<?php echo $pResUrl; ?>images/progress-a.png" alt=""></div>
            <dl class="step-s2 bannerAnimate" id="step2">
              <dt><span><img src="<?php echo $pResUrl; ?>images/text-45days.png" alt=""></span>days for free</dt>
              <dd><img src="<?php echo $pResUrl; ?>images/marks-ghost.png" alt=""></dd>
              <dd>Get 45-day trial only<br> for pre-orders</dd>
            </dl>
            <div class="line lb bannerAnimate" id="step3"><img src="<?php echo $pResUrl; ?>images/progress-b.png" alt=""></div>
            <dl class="step-s3 bannerAnimate" id="step4">
              <dt><span><img src="<?php echo $pResUrl; ?>images/text-50pct.png" alt=""></span>OFF</dt>
              <dd><img src="<?php echo $pResUrl; ?>images/marks-ghost.png" alt=""></dd>
              <dd>50% off on DB PRO<br> 1 Year / 3 PCs after a trial </dd>
            </dl>
          </div>
          <ul class="add-info bannerAnimate clearfix" id="step5">
            <li><i class="opt"></i>Opt out anytime during 45-day trial</li>
            <li><i class="group-red"></i><span class="packs"><?php echo $buyNum;?></span> people pre-ordered</li>
          </ul>
          <ul class="cart bannerAnimate" id="step6">
            <li>Pay <strong>$0</strong> original <del>$44.95</del></li>
            <li><a class="order-btn" href="http://www.iobit.com/buy.php?product=db4preorder&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db&tw=-8" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016db4preorder');">Pre-order Now</a></li>
          </ul>
        </div>
      </div>
      <div class="notes">
        <strong>Promotion terms:</strong>At the end of the 45-day free trial period, your credit card or PayPal account will be charged $22.95 automatically. This 50% discount from the original price of $44.95 is bonus only for preorders!
      </div>
    </div>
  </div>
  <!-- end banner -->
  <!-- benfits -->
  <div class="benfits clearfix" id="benfits">
    <div class="wrapper">
      <h2 class="benfitsAnimate" id="ben0">Update More Rare Drivers & Enjoy Better Gaming and PC Performance with DB 4 PRO</h2>
      <div class="lists benfitsAnimate" id="ben1">
        <img src="<?php echo $pResUrl; ?>images/benfits-01.png" alt="">
        <dl>
          <dt>Support 400,000+ Drivers & Devices Update</dt>
          <dd>200% larger database to update outdated, missing & incorrect drivers to proper drivers (audio, network, graphic, etc.) from Nvidia®, Realtek, Intel, AMD, etc. </dd>
          <dd class="details">
            <span>Why update drivers <em>+</em></span>
            <ul>
              <li>Stop system freezing & crashes</li>
              <li>Fix no sound error & dropping or slow internet</li>
              <li>Reduce problems with printers & external devices</li>
              <li>Improve stability by more outdated & rare drivers update</li>
            </ul>
          </dd>
        </dl>
      </div>
      <div class="lists odd benfitsAnimate" id="ben2">
        <img src="<?php echo $pResUrl; ?>images/benfits-02.png" alt="">
        <dl>
          <dt>Faster & Smoother Gaming</dt>
          <dd>Detect & upgrade game components with 1-click, such as DirectX®, Adobe® Flash®, PhysX®, etc. to allow you to enjoy faster & smoother gaming.</dd>
          <dd class="details">
            <span>Why update components <em>+</em></span>
            <ul>
              <li>Improve graphics & audio quality of gaming</li>
              <li>Fix components bugs to smooth game control</li>
            </ul>
          </dd>
        </dl>
      </div>
      <div class="clearfix"></div>
      <div class="lists benfitsAnimate" id="ben3">
        <img src="<?php echo $pResUrl; ?>images/benfits-03.png" alt="">
        <dl>
          <dt>Time-saving Download for Faster Update</dt>
          <dd>With auto-download feature and new driver compression algorithm, the driver upgrade time is greatly reduced and the drivers will be installed during system idle time.</dd>
          <dd class="details">
            <span>Why need time-saving download <em>+</em></span>
            <ul>
              <li>Reduce driver update time by 50% or more</li>
              <li>Reduce computer stutter/lag during driver update</li>
            </ul>
          </dd>
        </dl>
      </div>
      <div class="lists odd benfitsAnimate" id="ben4">
        <img src="<?php echo $pResUrl; ?>images/benfits-04.png" alt="">
        <dl>
          <dt>Safer Driver Updating</dt>
          <dd>Ensure the security of supplied drivers and safely updating drivers by auto backup a previous copy and create a system restore point before updating.</dd>
          <dd class="details">
            <span>Why it is safe  <em>+</em></span>
            <ul>
              <li>Ensure all supplied drivers have passed WHQL</li>
              <li>Easily restore once the unexpected happens</li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->
  <!-- compare -->
  <div class="compar">
    <div class="wrapper">
      <div class="items">
        <dl>
          <dt><strong><img src="<?php echo $pResUrl; ?>images/text-200.png" alt=""></strong>Larger driver database than before</dt>
          <dd>
            <ul>
              <li>
                <strong>Now</strong>
                <div class="progressbar hastxt red">
                  <div class="bar" id="bar0">
                    <div class="points">
                      <span></span>
                      <div class="text"><em id="num0">000,000</em>+ drivers</div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <strong>Before</strong>
                <div class="progressbar hastxt blue">
                  <div class="bar" id="bar1">
                    <div class="points">
                      <span></span>
                      <div class="text"><em id="num1">000,000</em>+ drivers</div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </dd>
        </dl>
        <dl class="even">
          <dt><strong><img src="<?php echo $pResUrl; ?>images/text-130.png" alt=""></strong>Quicker driver update than before</dt>
          <dd>
            <ul>
              <li>
                <strong>Now</strong>
                <div class="progressbar red">
                  <div class="bar" id="bar2">
                    <div class="points"><span></span></div>
                  </div>
                </div>
              </li>
              <li>
                <strong>Before</strong>
                <div class="progressbar blue">
                  <div class="bar"  id="bar3">
                    <div class="points"><span></span></div>
                  </div>
                </div>
              </li>
            </ul>
          </dd>
        </dl>
      </div>
      <div class="stage">
        <!-- front -->
        <div class="mouse stageAnimate"></div>
        <div class="laptop stageAnimate"></div>
        <div class="spaker-l stageAnimate"></div>
        <div class="spaker-r stageAnimate"></div>
        <div class="printer stageAnimate"></div>
        <div class="scanner stageAnimate"></div>
        <!-- end front -->
        <!-- text -->
        <!-- printer -->
        <div class="text-printer stageAnimate"></div>
        <div class="arrow-a stageAnimate"></div>
        <!-- sound -->
        <div class="text-spaker stageAnimate"></div>
        <div class="arrow-b stageAnimate"></div>
        <!-- graphic -->
        <div class="text-graphic stageAnimate"></div>
        <div class="arrow-c stageAnimate"></div>
        <!-- scanner -->
        <div class="text-scanner stageAnimate"></div>
        <div class="arrow-d stageAnimate"></div>
        <!-- end text -->
        <!-- bg -->
        <div class="cycle stageAnimate"></div>
        <!-- end bg -->
      </div>
    </div>
  </div>
  <!-- end compare -->
  <!-- middlecart -->
  <div class="middlecart">
    <div class="wrapper">
      <dl class="cartAnimate">
        <dt>Pay <strong>$0</strong> original <del>$44.95</del></dt>
        <dd><a class="order-btn" href="http://www.iobit.com/buy.php?product=db4preorder&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db&tw=-8" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016db4preorder');">Pre-order Now</a></dd>
      </dl>
      <ul class="cartAnimate">
        <li><i class="group-white"></i><span class="packs"><?php echo $buyNum;?></span> people pre-ordered</li>
        <li><i class="gift"></i>Get DB 4 PRO for 45 days for free</li>
        <li><i class="pencet"></i>Enjoy exclusive 50% off after trial period is over</li>
      </ul>
    </div>
  </div>
  <!-- end middlecart -->
  <!-- awards -->
  <div class="awards">
    <div class="wrapper">
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- end awards -->
  <!-- payments -->
  <div class="payments">
    <div class="wrapper">
      <dl>
        <dt>Accepted Payments</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/payments.png" alt=""></dd>
      </dl>
      <dl>
        <dt>Secure Payment</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dd>
      </dl>
    </div>
  </div>
  <!-- end payments -->
  <!-- reviews -->
  <div class="reviews wrapper clearfix">
    <div class="review media">
      <h2>DB Media Review</h2>
      <div class="container">
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/clnet.jpg"></dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/fourandhalf-stars.jpg" alt="">
            <p>“Update system drivers with the greatest of ease.”</p>
          </dd>
        </dl>
          <dl class="gray">
            <dt><img src="<?php echo $pResUrl; ?>images/softpedia.png"></dt>
            <dd>
              <img src="<?php echo $pResUrl; ?>images/five-stars.jpg" alt="">
              <p>“Works fine and eliminates the problems created by incompatible drivers.”</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo $pResUrl; ?>images/softonic.png"></dt>
            <dd>
              <img src="<?php echo $pResUrl; ?>images/fourandhalf-stars.jpg" alt="">
              <p>“Simple and effective solution for quickly updating outdated drivers.”</p>
            </dd>
          </dl>
      </div>
    </div>
      <div class="review users">
          <h2>User Review</h2>
          <dl>
              <dt>Mike Goggans</dt>
              <dd>
                  <p>I had 10 drivers that were out of date and the Driver Booster updated them all perfectly.</p>
                  <img src="<?php echo $pResUrl; ?>images/mike-goggans.jpg" alt="">
              </dd>
          </dl>
          <dl class="white">
              <dt>Vince Lewis</dt>
              <dd>
                  <p>Driver Booster did it all with just one click of the mouse. 19 drivers were updated in no time at all.</p>
                  <img src="<?php echo $pResUrl; ?>images/vince-lewis.jpg" alt="">
              </dd>
          </dl>
          <dl>
              <dt>Wayne Bowler</dt>
              <dd>
                  <p>It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!</p>
                  <img src="<?php echo $pResUrl; ?>images/wayne-bowler.jpg" alt="">
              </dd>
          </dl>
      </div>
  </div>
  <!-- end reviews -->
  <!-- compar-tab -->
  <div class="compar-tab wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th colspan="2" class="text">More Reasons to Pre-order Driver Booster 4 PRO </th>
        <th class="space"></td>
        <th class="item-free">Driver Booster 4<span>FREE</span></th>
        <th class="space"></td>
        <th class="item-pro">Driver Booster 4<span>PRO</span></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-01.png"></td>
        <td class="text">Automatically Scan & Identify Outdated, Missing & Incorrect Drivers</td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/red-star-ghost.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-02.png"></td>
        <td class="text">Update Outdated Drivers with One Click</td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/red-star-ghost.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-03.png"></td>
        <td class="text">Unlock Driver Download Speed Limit</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-04.png"></td>
        <td class="text">Priority to Update More Outdated & Rare Drivers</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-05.png"></td>
        <td class="text">Reduce System Freezing & Crashes for Better Performance</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-06.png"></td>
        <td class="text">Auto Driver Download & Installation during System Idle Time</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-07.png"></td>
        <td class="text">Automatically Backup All Drivers for Safe Restore</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-08.png"></td>
        <td class="text">Privilege to Update Game Components for Better Gaming</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-09.png"></td>
        <td class="text">Intelligently Install in Background without Interrupting</td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/red-star-ghost.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-10.png"></td>
        <td class="text">Automatically Update to the Latest Version</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-11.png"></td>
        <td class="text"> Free 24/7 Technical Support on Demand</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      </tbody>
    </table>
  </div>
  <!-- end compar-tab -->
  <!-- bottom cart -->
  <div class="btmcart clearfix">
    <div class="wrapper">
      <div class="btmbox btmAnimate">
        <img src="<?php echo $pResUrl; ?>images/btm-box.png" alt="">
      </div>
      <div class="details">
        <div class="steps clearfix">
          <dl class="step-s1 btmAnimate" id="stepS0">
            <dt><span><img src="<?php echo $pResUrl; ?>images/text-$0.png" alt=""></span>pre-order</dt>
            <dd><img src="<?php echo $pResUrl; ?>images/marks.png" alt=""></dd>
          </dl>
          <div class="line la btmAnimate" id="stepS1"><img src="<?php echo $pResUrl; ?>images/progress-a.png" alt=""></div>
          <dl class="step-s2 btmAnimate" id="stepS2">
            <dt><span><img src="<?php echo $pResUrl; ?>images/text-45days.png" alt=""></span>days for free</dt>
            <dd><img src="<?php echo $pResUrl; ?>images/marks-ghost.png" alt=""></dd>
          </dl>
          <div class="line lb btmAnimate" id="stepS3"><img src="<?php echo $pResUrl; ?>images/progress-b.png" alt=""></div>
          <dl class="step-s3 btmAnimate" id="stepS4">
            <dt><span><img src="<?php echo $pResUrl; ?>images/text-50pct.png" alt=""></span>OFF</dt>
            <dd><img src="<?php echo $pResUrl; ?>images/marks-ghost.png" alt=""></dd>
          </dl>
        </div>
        <ul class="cart">
          <li class="btmAnimate" id="stepS5">Pay <strong>$0</strong> original <del>$44.95</del></li>
          <li class="btmAnimate" id="stepS6"><a class="order-btn" href="http://www.iobit.com/buy.php?product=db4preorder&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db&tw=-8" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016db4preorder');">Pre-order Now</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end bottom cart -->
  <div class="footer wrapper">
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      <dd>*.We tested the auto download time of driver booster 4 in our internal test lab. Your results may vary.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved. AMD is the trademark of Advanced Micro Devices, Inc. registered in the U.S. IObit's software is not developed and affiliated with Advanced Micro Devices, Inc. </p>
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
  <script src="<?php echo $pResUrl; ?>script/script.min.js"></script>
  <script>setTimeout('window.location.href="https://purchase.iobit.com/aff/en/db/2017general/index.php'+location.search+'"',5000);</script>
</div>
</body>
</html>