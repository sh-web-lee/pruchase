<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if($_GET['action']=='viewCount'){
//  try{
//    $dsn="mysql:host=mariadb-071.wc2.dfw3.stabletransit.com;dbname=1015490_pricssw";
//    $pdo=new PDO($dsn,'1015490_pricssw','7CcjUGsxLN82');
//    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//    $pdo->query("set names utf8");
//
//    $sql="insert into endbpre (ip,addTime,tw,pop) values(:ip,:addTime,:tw,:isPop)";
//    $pre=$pdo->prepare($sql);
//    $timezone=empty($_GET['timezone'])?13:intval($_GET['timezone']);
//    $clientIp=empty($_GET['ip'])?getIP():$_GET['ip'];
//    $addTime=time();
//    $isPop=$_GET['pop'];
//    $pre->bindParam(':ip',$clientIp);
//    $pre->bindParam(':tw',$timezone);
//    $pre->bindParam(':addTime',$addTime);
//    $pre->bindParam(':isPop',$isPop);
//
//    $pre->execute();
//  }catch(PDOException $e){
//  }
  exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'endbpre' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 63;
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
    }
  }
  setcookie($c_name, $packsNum, time() + 3600 * 24 *30);
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['to'])?'':('-'.$_GET['to']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Pay $0 to pre-order the new Driver Booster 6 PRO</title>
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:500,700' rel='stylesheet'>
    <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public'];?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <!-- head -->
    <h1 class="head">READY TO JOIN OUR GLOBAL PRESALE?</h1>
    <!-- db-off -->
    <div class="db-off fr">
      <!-- only -->
      <h3 class="only">
        Only<span></span>to<br>
        Get Driver Booster 6 PRO
      </h3>
      <img class="free" src="<?php echo $pResUrl;?>images/money.png" alt="">
      <!-- progressbar -->
      <div class="progressbar">
        <p class="viewNum">Hurry! <strong class="gift">100</strong> places left only</p>
        <div class="bar">
          <span></span>
        </div>
      </div>
      <!-- price -->
      <p class="price"><strong>$0</strong> original price:<del>$74.85<i></i></del></p>
      <!-- buybtn -->
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=db6preorder&ref=db6preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6preorder');">
        <span></span>
      </a>
      <!-- attention -->
      <p class="attention">1 Year Subscription / 3 PCs</p>
    </div>
    <div class="clear"></div>
    <!-- distance -->
    <ul class="distance">
      <li>Pay $0 to enjoy Driver Booster 6 PRO (3 PCs)<br>
        for 30 days</li>
      <li class="center">After 30 days, get exclusive 70% OFF on<br>
        Driver Booster 6 PRO (1 Year / 3 PCs)</li>
      <li>You won't be billed until after 30-day trial expires<br>
        you can cancel the order at any time</li>
    </ul>
  </div>
</div>
<!-- banner end -->
<!-- feature-db start -->
<div class="feature-db">
  <div class="wrapper">
    <h2 class="head">Why Upgrade to Driver Booster 6 PRO?</h2>
    <h3 class="subhead">Apparently Improve PC Performance</h3>
    <div class="container">
      <img class="db-box" src="<?php echo $pResUrl;?>images/db-box.png" alt="">
      <!-- update 3000000+ drivers -->
      <dl class="update clearfix">
        <dt class="fr">
          <img src="<?php echo $pResUrl;?>images/db-update-drivers.png" alt="">
        </dt>
        <dd class="fl">
          <h3>Update 3,000,000+ Drivers<br><span></span></h3>
          <p>
            Quickly identify & update 3,000,000+ faulty,<br>
            missing or rare drivers for all of your<br>
            hardware devices.
          </p>
        </dd>
      </dl>
      <!-- quickly fix device errors -->
      <dl class="quickly clearfix">
        <dt class="fl">
          <img src="<?php echo $pResUrl;?>images/db-quickly-device.png" alt="">
        </dt>
        <dd class="fr">
          <h3>Quickly Fix Device Errors <span></span></h3>
          <p>
            Quickly resolve device errors with 1-click<br>
            to avoid impacting PC performance.
          </p>
        </dd>
      </dl>
      <!-- auto update -->
      <dl class="auto clearfix">
        <dt class="fl">
          <img src="<?php echo $pResUrl;?>images/db-auto-update.png" alt="">
        </dt>
        <dd class="fr">
          <h3>Auto Update <span></span></h3>
          <p>
            Without daily checking driver status, you can keep PC drivers<br>
            updated and PC running smoothly .
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- feature-db end -->
<!-- feature-exp start -->
<div class="feature-sf">
  <div class="sf-box"></div>
  <div class="wrapper">
    <h3 class="subhead">Smoother & Faster Gaming Experience</h3>
    <dl class="details clearfix">
      <dt class="fl">
        <img src="<?php echo $pResUrl;?>images/major-game-components.png" alt="">
      </dt>
      <dd class="fr">
        <h3>Major Game Components</h3>
        <p>
          Quickly download and install updated and suitable<br>
          components to ensure games run smoothly on your PC.
        </p>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt class="fl">
        <img src="<?php echo $pResUrl;?>images/game-ready-drivers.png" alt="">
      </dt>
      <dd class="fr">
        <h3>Game Ready Drivers <span></span></h3>
        <p>
          Get Game Ready Drivers immediately once it is released to<br>
          boost performance, fix bugs and improve gaming experience.
        </p>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt class="fl">
        <img src="<?php echo $pResUrl;?>images/boots-game-performance.png" alt="">
      </dt>
      <dd class="fr">
        <h3>Boost Game Performance <span></span></h3>
        <p>
          1-click to stop all unnecessary processes in order to release<br>
          RAM and dramatically boost game performance.
        </p>
      </dd>
    </dl>
  </div>
</div>
<!-- feature-exp end -->
<div class="contrast">
  <div class="wrapper">
    <h2>Easy & Hand-free Driver Update Process</h2>
    <table border="0" cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th class="itema"></th>
          <th class="itemb">Step 1</th>
          <th class="itemc">Step 2</th>
          <th class="itemc">Step 3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">Free :</td>
          <td class="itemb">Check Driver Status <span>2,000,000+ drivers</span></td>
          <td class="itemc">Manually Download Driver <span>No acceleration</span></td>
          <td class="itemc">Manually Install Driver <span>Can’t backup</span></td>
        </tr>
        <tr>
          <td class="itema space"></td>
          <td class="itemb space"></td>
          <td class="itemc space"></td>
          <td class="itemc space"></td>
        </tr>
        <tr>
          <td class="itema">PRO : </td>
          <td class="itemb pro"><span class="size">Auto</span> Check Driver Status <br> <span>3,000,000+ drivers</span></td>
          <td class="itemc pro"><span class="size">Auto</span> Download Driver <br> <span>200% faster</span></td>
          <td class="itemc pro"><span class="size">Auto</span> Install Driver <br> <span>Backup driver</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- between-buy start -->
<div class="between-buy">
  <div class="wrapper">
    <h3>
      <img src="<?php echo $pResUrl;?>images/money.png">
      to Get on Board for Better PC and Game Performance
    </h3>
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=db6preorder&ref=db6preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6preorder-popup');">
      <span></span>
    </a>
    <p class="viewNum"><strong class="gift">56</strong> places left only</p>
  </div>
</div>
<!-- between-buy end -->
<!-- comparision start -->
<div class="comparision">
  <div class="comparision-content">
    <div class="wrapper">
      <h3>To See Clearly What You Would Miss, if Stay as Free:</h3>
      <table>
        <thead>
          <tr>
            <th class="itema">Driver Booster 6 Free</th>
            <th class="itemb"><img src="<?php echo $pResUrl;?>images/vs.png"></th>
            <th class="itemc">Driver Booster 6 PRO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="itema">2,000,000+</td>
            <td class="itemb">Driver Database</td>
            <td class="itemc">3,000,000+</td>
          </tr>
          <tr>
            <td class="itema">No Acceleration</td>
            <td class="itemb">Driver Download Speed</td>
            <td class="itemc">200% Faster</td>
          </tr>
          <tr>
            <td class="itema">No Priority  </td>
            <td class="itemb">Game Ready Driver </td>
            <td class="itemc">Priority</td>
          </tr>
          <tr>
            <td class="itema"><i class="free"></i></td>
            <td class="itemb">Game Component</td>
            <td class="itemc"><i class="pro"></i></td>
          </tr>
          <tr>
            <td class="itema"><i class="free"></i></td>
            <td class="itemb">Auto Update Driver</td>
            <td class="itemc"><i class="pro"></i></td>
          </tr>
          <tr>
            <td class="itema"><i class="free"></i></td>
            <td class="itemb">Backup Driver </td>
            <td class="itemc"><i class="pro"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- comparision end -->
<!-- review start -->
<div class="review">
  <div class="wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>Media Review</h2>
            <h4>IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best.</h4>
            <p>
              Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt=""></dt>
          <dd>
            <h2>User Review</h2>
            <h4>"My PC is faster, securer and newer more than the last 8 months ago."</h4>
            <p>
              "With Driver Booster, I can easily know which devices drivers are out of date and can easily update them. Besides, it helps me to fix sound error, network error, device error etc...I don't believe it before I using, but after using it I really love it..just my PC is faster ,securer and newer more than the last 8 months ago..so thank you IObit."
            </p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""></dt>
          <dd>
            <h2>User Review</h2>
            <h4>"I strongly recommend Driver Booster, it will help to update the driver quickly and	easily."</h4>
            <p>
              "Driver booster is an amazing application. As for someone who has a lot of applications and drives as does not have the time to manually update them, I strongly recommend Driver Booster, it will help to update the driver quickly and easily."
            </p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt=""></dt>
          <dd>
            <h2>User Review</h2>
            <h4>"It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox	forever... Great job!"</h4>
            <p>
              "This is one of the best driver updater programs around. Microsoft has even led me astray by suggesting updates that wouldn’t work with my machine. This program knew what updates I needed without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"
            </p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- review end -->
<!-- awards start -->
<div class="awards">
    <div class="wrapper">
      <h3>World-wide Awards</h3>
      <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
    </div>
</div>
<!-- award end -->
<!-- footer start -->
<div class="footer">
    <div class="wrapper">
        <div class="footer-servizio clearfix">
            <dl class="money_back fl">
                <dd>
                    <img src="<?php echo $pResUrl; ?>images/money_back.png" alt="">
                </dd>
                <dt>
                    <h3>Money Back Guarantee</h3>
                    <p>If you're not satisfied in the first 60 days, <br>we will give you back your money.</p>
                </dt>
            </dl>
            <dl class="veloce fl">
                <dd>
                    <img src="<?php echo $pResUrl; ?>images/veloce.png" alt="">
                </dd>
                <dt>
                    <h3>Secure Payment</h3>
                    <p>IObit supports several safe modes of <br>payment.</p>
                </dt>
            </dl>
            <dl class="verified fr">
                <dd>
                    <img src="<?php echo $pResUrl; ?>images/verified.png" alt="">
                </dd>
                <dt>
                    <h3>Get License</h3>
                    <p>You will receive the license within a few <br>minutes after purchase.</p>
                </dt>
            </dl>
        </div>
        <p class="note">
          note<br>
          *At the end of the 30-day free period, your credit card or PayPal account will be charged $22.95 automatically. This 70% discount from the original price of $74.85 is bonus only for preorders!<br>
          *.Data may vary based on different system or computer.
        </p>
        <p class="copyright">Copyright © 2005 - 2018 IObit. All Rights Reserved</p>
    </div>
</div>
<!-- footer end -->
<!-- float start -->
<div class="floatlayer">
    <div class="wrapper clearfix">
      <!-- progressbar -->
      <div class="progressbar fl">
        <p class="viewNum">Hurry! <strong class="gift">53</strong> places left only</p>
        <div class="bar">
          <span></span>
        </div>
      </div>
      <!-- buybtn -->
      <a class="buybtn fr" href="https://www.iobit.com/buy.php?product=db6preorder&ref=db6preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6preorder-popup');">
        <span></span>
      </a>
    </div>
</div>
<!-- float end -->

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  $(document).ready(function() {
    $('#dg-container').gallery();
  });
</script>
</body>
</html>