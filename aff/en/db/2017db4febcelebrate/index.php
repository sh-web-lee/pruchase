<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'febcdb' . $date;
  if (empty($_COOKIE[$c_name])) {
    $packsNum = 77;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    $packsNum = $_COOKIE[$c_name];
    if (intval($packsNum) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24);
    } else {
      if ($_GET['f'] == 1) {
        $packsNum--;
      } else {
        if (rand(1, 100) % 2 == 0) {
          $packsNum--;
        }
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo $packsNum;
  exit;
}
if (empty($_GET['ref'])) $_GET['ref'] = 'en_aff_db4_2017febcelebrate';
function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$packsNum = ceil(microtime_float() * 2000 / 20000);
$packsNum = 360 - ($packsNum % 360);
if ($_GET['action'] == 'getPacks') {
  echo $packsNum;
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Limited Offer: Save 80% on Drvier Booster PRO + Free Gifts - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
        mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
        mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:700|Play" rel="stylesheet">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="banner">
  <div class="wrapper">
    <a href="http://www.iobit.com" target="_blank" class="logo">IObit</a>
    <span class="offer">Limited Offer</span>

    <div class="title">
      <h1>Celebrating Over 150 Million</h1>

      <h2>Downloads for Driver Booster</h2>
    </div>
    <div class="content">
      <div class="left-message">
        <img src="<?php echo $pResUrl; ?>images/db-box.png" alt="" class="db-box">
      </div>
      <div class="right-message lato">
        <p class="message">Activate Driver Booster PRO Immediately to <br>Keep Drivers Up-to-date and PC
          Performance Stable</p>

        <p class="date">Only <span class="pack">78</span> of 2,000 Gift Packs Left </p>

        <div class="box">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
          <span class="four"></span>
        </div>
        <dl>
          <dt>Now <strong>$24.95</strong> Was
            <del>$114.83</del>
          </dt>
          <dd>
            <a href="http://www.iobit.com/buy.php?product=db4sdiupf_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db&tw=-8" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb42017febcelebrate')" class="buybtn"><i></i>
              <span>ACTIVATE NOW</span></a></dd>
          <dd> 1 Year Subscription / 3 PCs</dd>
        </dl>
      </div>
    </div>
    <p class="try lato">Try it RISK FREE - Activate Now to keep PC in excellent status and get a 60-day Money Back
      Guarantee</p>
  </div>
</div>
<div class="million cut-off">
  <div class="wrapper">
    <h2 class="subhead red-block">Why do over 150 million users choose Driver Booster?</h2>

    <p>Because their PC runs up to 200% faster* than before, by keeping device drivers always Up-to-date and
      improving Stability of PC Performance, with the proven driver updating and security technology. </p>
  </div>
</div>
<div class="db-computer">
  <div class="wrapper">
    <h2 class="subhead">So if you’re feeling…</h2>
    <img src="<?php echo $pResUrl; ?>images/computer-iocns.png" alt="" class="computer">
    <ul>
      <li>Difficult to find and update all the outdated drivers at one time</li>
      <li class="two">Not secure to update drivers with other tools or manually</li>
      <li class="three">Stuck with frequent system crash caused by outdated drivers</li>
      <li class="four">Frustrated with time-wasting caused by slow updating speed</li>
      <li class="five">Worried about poor gaming performance caused by graphics & audio card</li>
    </ul>
  </div>
</div>
<div class="cut-off noborder db-message">
  <div class="wrapper">
    <h2 class="subhead red-block"> Don’t worry! You can change things now by activating Driver Booster PRO</h2>

    <div class="content">
      <img src="<?php echo $pResUrl; ?>images/db-message.png" alt="" class="db-box">
      <dl class="">
        <dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
        <dd>
          <strong>No need of one-by- one driver update</strong>

          <p>Providing you one-stop driver detecting & updating <br> solution.</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
        <dd>
          <strong>Safe driver download & update</strong>

          <p>Automatically backing up & creating system restore <br> point before updating, in case of
            anything unexpected.</p>
        </dd>
      </dl>
      <dl class="three">
        <dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
        <dd>
          <strong>No unexpected system crash</strong>

          <p>Always keeping all drivers up-to-date <br> to ensure you a stable PC.</p>
        </dd>
      </dl>
      <dl class="four">
        <dt><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></dt>
        <dd>
          <strong>200% * faster download</strong>

          <p>Time-saving with system idle time <br> downloading with up to 200% faster <br> speed.</p>
        </dd>
      </dl>
      <dl class="five">
        <dt><img src="<?php echo $pResUrl; ?>images/icons05.png" alt=""></dt>
        <dd>
          <strong>Peak gaming performance guaranteed</strong>

          <p>Huge game components database including Nvidia, Realtek, Intel, <br> AMD, Broadcom, VIA, etc. to
            ensure smooth game experience.</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<div class="between-buy lato">
  <div class="wrapper">
    <div class="content">
      <h2 class="subhead">Activate Now to Help You out from All the above Frustrating PC Problems</h2>

      <p>Now <strong>$24.95</strong> Was
        <del>$114.83</del>
      </p>
      <a href="http://www.iobit.com/buy.php?product=db4sdiupf_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db&tw=-8" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb42017febcelebrate')" class="buybtn save"><i></i> <span>Activate Now & <strong>Save 80%</strong></span></a>
      <p class="last"> 1 Year Subscription / 3 PCs</p>
    </div>
    <dl class="days">
      <dt><img src="<?php echo $pResUrl; ?>images/days.png" alt=""></dt>
      <dd>
        <strong> Try it RISK FREE - with our 60-day Money Back Guarantee</strong>

        <p>We’re confident that activating PRO edition will fix all your headache driver matters with affordable
          price!</p>
      </dd>
    </dl>
    <dl class="visa">
      <dt>We accept</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/visa.png" alt=""></dd>
    </dl>
  </div>
</div>
<div class="award">
  <div class="wrapper">
    <h2 class="subhead">World-wide Awards</h2>

    <p>As being trusted and awarded by those world-class media in the past four years, you know you’ve got the right
      driver updater.</p>
    <img src="<?php echo $pResUrl; ?>images/award.png" alt="">
  </div>
</div>
<div class="review cut-off noborder">
  <div class="wrapper">
    <div class="content ">
      <dl class="active">
        <dt>
        <h3>Media Review</h3></dt>
        <dd>
          <h4>IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is
            one of its best. </h4>
        </dd>
        <dd>Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion
          of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does
          a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater
          and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads
          the pack.
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>User Review</h3></dt>
        <dd>
          <h4>"My PC is faster, securer and newer more than the last 8 months ago."</h4>
        </dd>
        <dd>"With Driver Booster, I can easily know which devices drivers are out of date and can easily update
          them. Besides, it helps me to fix sound error, network error, device error etc...I don't believe it
          before I using, but after using it I really love it..just my PC is faster ,securer and newer more
          than the last 8 months ago..so thank you IObit."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>User Review</h3></dt>
        <dd>
          <h4>"I strongly recommend Driver Booster, it will help to update the driver quickly and
            easily."</h4>
        </dd>
        <dd>"Driver booster is an amazing application. As for someone who has a lot of applications and drives
          as does not have the time to manually update them, I strongly recommend Driver Booster, it will help
          to update the driver quickly and easily."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>User Review</h3></dt>
        <dd>
          <h4>"It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox
            forever... Great job!"</h4>
        </dd>
        <dd>"This is one of the best driver updater programs around. Microsoft has even led me astray by
          suggesting updates that wouldn’t work with my machine. This program knew what updates I needed
          without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will
          stay in my toolbox forever... Great job!"
        </dd>
      </dl>
    </div>
    <ul class="users clearfix lato">
      <li class="current">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine">
        </div>
        <p>PC Magazine</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya"></div>
        <p>Myo Thuya</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund"></div>
        <p>Adam Backlund</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
        </div>
        <p>Wayne Bowler</p>
      </li>
    </ul>
  </div>
</div>
<div class="activate wrapper">
  <p>Activate Today to Save 80% and get 3 PRO tools for FREE (valued at $59.93) to give you a</p>

  <h3>clean, fast and secure PC!</h3>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/sd-free.png" alt=""></dt>
    <dd>
      <strong>Smart Defrag PRO</strong>

      <p>Max Hard Drive Performance</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/iu-free.png" alt=""></dt>
    <dd>
      <strong> IObit Uninstaller PRO</strong>

      <p>Cleaner PC & Browser </p>
    </dd>
  </dl>
  <dl class="last">
    <dt><img src="<?php echo $pResUrl; ?>images/pf-free.png" alt=""></dt>
    <dd>
      <strong>Protected Folder</strong>

      <p>No Privacy Leak & Secured Files </p>
    </dd>
  </dl>
  <div class="clear"></div>
  <a href="http://www.iobit.com/buy.php?product=db4sdiupf_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db&tw=-8" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb42017febcelebrate')" class="buybtn save"><i></i> <span>Activate Now & <strong>Save 80%</strong></span></a>
  <p class="price lato">Only <strong>$24.95</strong> Was
    <del>$114.83</del>
  </p>
</div>
<!-- annotation start -->
<div class="annotation lato ">
  <dl class="wrapper">
    <dt>Note:</dt>
    <dd>*.Data may vary based on different system or computer.</dd>
    <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole
      discretion.
    </dd>
    <dd>*. Smart Defrag PRO / IObit Uninstaller PRO / Protected Folder support 1 year subscription / 1 PC.</dd>
  </dl>
</div>
<!-- annotation end -->
<!-- footer start -->
<div class="footer lato">Copyright © 2005 - <?php echo date(Y) ?> IObit. All Rights Reserved</div>
<!-- fooFilter
ter end -->
<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
  <div class="wrapper clearfix">
    <div class="left">
      <h2 class="lato">SAVE 80% to Activate Now to Enjoy More Stable PC! </h2>
      <p>Only <span class="pack">78</span> Gift Packs Left</p>
    </div>
    <div class="right">
      <p class="lato"> Now <strong>$24.95</strong> Was
        <del>$114.83</del>
      </p>
      <a class="buybtn" href="http://www.iobit.com/buy.php?product=db4sdiupf_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db&tw=-8" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb42017febcelebrate')" onclick="ga('send', 'event', 'dbbuye', 'buy', 'dbpurchase');"><i></i> <span>Activate Now</span></a>
    </div>
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
<script type="text/javascript" src="<?php echo $pResUrl; ?>js/jquery.animateNumber.min.js"></script>
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script type="text/javascript" src="<?php echo $pResUrl; ?>js/script.min.js"></script>
    <script>setTimeout('window.location.href="https://purchase.iobit.com/aff/en/db/2017general/index.php'+location.search+'"',5000);</script></div>
</body>
</html>