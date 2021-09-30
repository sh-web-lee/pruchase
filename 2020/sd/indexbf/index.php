<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$viewNum=rand(99,189);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='ensdblack2020'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 77;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit;
}
$refStr=empty($_GET['ref'])?'':'-'.$_GET['ref'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>50% OFF Smart Defrag + Protected Folder as Free Gift</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title">
      <h1>BLACK FRIDAY</h1>
      <p><span class="percent">50</span>% OFF + Extra Free Anniversary Gift</p>
    </div>
    <!-- offer -->
    <div class="offer clearfix">

      <!-- left -->
      <div class="fl left">
        <img src="<?php echo $pResUrl;?>images/sd-box.png" alt="Smart Defrag PRO 6">
        <p class="price"><del>$39.99</del> Now <strong>$<b>19</b>.99</strong></p>
      </div>

      <!-- middle -->
      <div class="fl middle">
        <!-- number -->
        <div class="number">
          <span class="viewNum"><?php echo $viewNum;?></span> viewing,
          <div class="countdown countdown1">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          gifts left now!
        </div>
        <!-- hint -->
        <p class="hint">
          Secure your privacy by protecting <br>
          important files for Free Now!
        </p>
        <img src="<?php echo $pResUrl;?>images/pf-box.png" alt="Protected Folder">
        <p class="price"><del>$19.95</del> Now <strong>$<b>0</b></strong></p>
      </div>

      <!-- right -->
      <div class="fr right">
        <h3>Your items:</h3>
        <ul class="offerMessage"></ul>
        <p class="total clearfix">Total: <strong>$<b>19</b>.99</strong></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sd63pcspf&ref=en-sd3pcpf<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_sd"
           onclick="ga('send', 'event', 'sd1buy', 'buy', 'sdpurchase-201903');">
          <i class="all-icons"></i>
          Activate Now
        </a>
        <!-- attention -->
        <p class="attention">$0.55 / Month / PC</p>
      </div>

    </div>
  </div>
</div>
<!-- end banner -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl class="fl">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    <dd>
      <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
      <p>
        We are confident that activating PRO edition will boost your disk performance for affordable price!
      </p>
    </dd>
  </dl>
  <dl class="fr">
    <dt><h3>We accept</h3></dt>
    <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
  </dl>
</div>
<!-- end servide -->

<!-- choose -->
<div class="choose">
  <div class="wrapper">
    <h2>Why Need to Activate Smart Defrag 6 PRO? </h2>
    <hr>
    <p>
      Because it auto defragments your entire hard disks, optimizes your files placement and consolidates free space to ensure the 200%* faster <br>
      file access speed and best PC performance.
    </p>
  </div>
</div>
<!-- end choose -->

<!-- feature -->
<div class="feature wrapper">
  <h2>Proven Benefits You Can Get</h2>
  <!-- one -->
  <dl class="one clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
    <dd>
      <h3>Up to 200%* Faster</h3>
      <p>
        More comprehensive Large File Defrag enables you to <strong>access <br>
          files & launch game up to 200%* faster.</strong>
      </p>
    </dd>
  </dl>
  <!-- two -->
  <dl class="two clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
    <dd>
      <h3>Fast Defragmentation</h3>
      <p>
        Defragment your disks and files more thoroughly and efficiently to <br>
        <strong>free you from waiting for the long-time defragmentation.</strong>
      </p>
    </dd>
  </dl>
  <!-- three -->
  <dl class="three clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
    <dd>
      <h3>Quicker PC Startup</h3>
      <p>
        Defragment your registry and system <br>
        files during system running, ensuring <br>
        you <strong> a faster PC startup and top <br>
          system performance.</strong>
      </p>
    </dd>
  </dl>
  <!-- four -->
  <dl class="four clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
    <dd>
      <h3>Auto & Smart Defrag </h3>
      <p>
        Automatically and intelligently <br>
        defragment files and disks at idle time to <br>
        <strong>ready your PC at peak performance <br>
          for any time you need it.</strong>
      </p>
    </dd>
  </dl>
</div>
<!-- end feature -->

<!-- gift -->
<div class="gift">
  <div class="wrapper clearfix">
    <h2>Plus The Free Gift We Provide for You</h2>
    <img class="fl" src="<?php echo $pResUrl;?>images/pf-gift-box.png" alt="Protected Folder">
    <div class="other fl">
      <h3>Never Worry about Data Theft or Privacy Leaks!</h3>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=sd63pcspf&ref=en-sd3pcpf<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_sd"
         onclick="ga('send', 'event', 'sd2buy', 'buy', 'sdpurchase-201903');">
        Get My Gift
      </a>
      <!-- countdown -->
      <div class="number">
        Hurry! Only
        <div class="countdown countdown2">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        gifts left.
      </div>
    </div>
  </div>
</div>
<!-- end gift -->

<!-- award -->
<div class="award">
  <div class="wrapper">
    <h2>Media Rating</h2>
    <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
  </div>
</div>
<!-- end award -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <div class="content ">
      <dl class="active">
        <dt>
          <h3>Media Review</h3></dt>
        <dd>
          <h4>"IObit Smart Defrag is the best defragger we've tried yet."</h4>
        </dd>
        <dd>"IObit Smart Defrag optimizes your PC to take full advantage of SSD performance while defragmenting your hard disks. Its SSD Trim tool automatically enables system tweaks that typically require experience to apply. Smart Defrag's updates include a new defrag engine, specialized Game Defrag, a cool new look, and many more language options (35 and counting)."</dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          <h4>"Smart defrag is a very well behaved disk defrag software."</h4>
        </dd>
        <dd>"Smart defrag is a very well behaved disk defrag software, operating in the background whenever computer is idle so that you hardly notice it. As a result: drives are permanently defragmented allowing rapid access and less wear and tear. Smart defrag is the best Free disk defragmenter I've ever used and I'll definitely recommend it to my family and friends!"</dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          <h4>"Since using this fantastic software my desktop and my laptop are fast and save."</h4>
        </dd>
        <dd>"I am a user of Smart defrag for many years. Since using this fantastic software my desktop and my laptop are fast and save. Together with advance system care ultimate you have a complete tool for keeping you system up to date, fast and secure.Using it every day without need to wait (pc closes itself) you keep your system in top condition even if you have no technical background!"</dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          <h4>"It is easy to use, must have utility, for your hard disc or SSD."</h4>
        </dd>
        <dd>"I run a combination of RAID 0 SSDs and RAID 0 HDDs and use Smart Defrag Pro to analyse, defrag and keep my drives running at peak performance. As with all IObit software it is easy to install, use and very reliable. Just set it up and forget it. Smart Defrag has a very small memory foot print so it won't slow down your system. Definitely recommended!"</dd>
      </dl>
    </div>
    <ul class="users clearfix lato">
      <li class="active">
        <a href="javascript: void(0);">
          <div class="pic"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></div>
          <p>Cnet</p>
        </a>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/amnon.png')?>" alt="Amnon"></div>
        <p>Amnon</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/hans.png')?>" alt="Hans"></div>
        <p>Hans</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen">
        </div>
        <p>Edward Lee Ah Yen</p>
      </li>
    </ul>
  </div>
</div>
<!-- end review -->

<!-- comparison -->
<div class="comparison wrapper">
  <h2> More Reasons to Activate Smart Defrag 6 PRO：</h2>
  <table>
    <thead>
    <tr>
      <th></th>
      <th class="itema">
        <div class="free">Your Current Version</div>
      </th>
      <th class="itemb">
        <div class="pro">Smart Defrag 6 PRO</div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="subhead">Defrag without Your Concerns</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="text"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""> Basic Hard Drive Defrag</td>
      <td class="itema"><i class="black all-icons"></i></td>
      <td class="itemb"><i class="red all-icons"></i></td>
    </tr>
    <tr>
      <td class="text"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""> Scheduled Defrag</td>
      <td class="itema"><i class="black all-icons"></i></td>
      <td class="itemb"><i class="red all-icons"></i></td>
    </tr>
    <tr>
      <td class="text"><img src="<?php echo $pResUrl;?>images/icon03.png" alt=""> Auto & Smart Defrag without any Worries</td>
      <td class="itema"></td>
      <td class="itemb"><i class="red all-icons"></i></td>
    </tr>
    <tr>
      <td class="subhead">Faster PC Performance</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="text"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""> Top Game Experience</td>
      <td class="itema"><i class="black all-icons"></i></td>
      <td class="itemb"><i class="red all-icons"></i></td>
    </tr>
    <tr>
      <td class="text"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""> Up to 200%* Faster File Access</td>
      <td class="itema"></td>
      <td class="itemb"><i class="red all-icons"></i></td>
    </tr>
    <tr>
      <td class="text"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""> Quicker PC Startup</td>
      <td class="itema"></td>
      <td class="itemb"><i class="red all-icons"></i></td>
    </tr>
    <tr>
      <td class="text"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""> Better, Faster & More Stable Data Transfer</td>
      <td class="itema"></td>
      <td class="itemb"><i class="red all-icons"></i></td>
    </tr>
    <tr>
      <td class="subhead">Optimum Services</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="text"><img src="<?php echo $pResUrl;?>images/icon08.png" alt=""> Auto Product Updates</td>
      <td class="itema"></td>
      <td class="itemb"><i class="red all-icons"></i></td>
    </tr>
    <tr>
      <td class="text"><img src="<?php echo $pResUrl;?>images/icon09.png" alt=""> Priority 24/7 Technical Support</td>
      <td class="itema"></td>
      <td class="itemb"><i class="red all-icons"></i></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th colspan="2"></th>
      <th>
        <p class="price small">ONLY <strong>$19.99</strong></p>
        <a class="buybtn small"
           href="https://www.iobit.com/buy.php?product=sd63pcspf&ref=en-sd3pcpf<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_sd"
           onclick="ga('send', 'event', 'sd3buy', 'buy', 'sdpurchase-201903');">
          <i class="all-icons"></i>
          ACTIVATE NOW
        </a>
        <p class="attention small">1 year subscription / 3 PCs</p>
      </th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- end comparison -->

<!-- bottom -->
<dl class="note wrapper">
  <dt>Note:</dt>
  <dd>*.Data may vary based on different system or computer.</dd>
  <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
</dl>
<div class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
<!-- end bottom -->

<!-- float -->
<div class="float">
  <p>
    Hurry up, <br>
    only <span class="packsNum">78</span> free gifts left.
  </p>
</div>
<!-- end float -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  var offerMessage = {
    soldNow: [
      {
        name: "Smart Defrag 6 PRO",
        price: "$19.99",
        del: "$39.99",
        type: "1 Year Subscription / 3 PCs",
        off: "50% OFF"
      },
      {
        name: "Protected Folder",
        price: "$0",
        del: "$19.95",
        type: "1 Year Subscription / 1 PC",
        off: ""
      }
    ],
    soldOut: [
      {
        name: "Smart Defrag 6 PRO",
        price: "$39.99",
        type: "1 Year Subscription / 3 PCs",
        off: "50% OFF",
        save: "-$20"
      }
    ]
  };
  var soldout = {
    _bannerhref: "https://www.iobit.com/buy.php?product=sd63pcs&ref=en-sd3pcsoldout<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_sd&tw=-8",
    _bannerga: "ga('send', 'event', 'sd1soldoutbuy', 'buy', 'sdpurchase-201903);",
  }
</script>
</body>
</html>