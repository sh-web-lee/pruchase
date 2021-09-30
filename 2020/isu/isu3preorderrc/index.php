<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'isurc_p' . $date;
  $c_name_t='isurc_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(68,78);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pay $0 to pre-order the new IObit Software Updater 3 PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <!-- right-message -->
    <div class="right-message">
      <!-- title -->
      <h1>Welcome to participate in our <strong>Presale </strong></h1>
      <!-- number(giftNum) -->
      <div class="number">
        Act fast to go Pro for $0, only
        <div id="topNum" class="giftNum">
          <span class="nwrap">
            <strong>
              <b>1</b>
            </strong>
          </span>
          <span class="nwrap">
            <strong>
              <b>1</b>
            </strong>
          </span>
        </div>
        left today!
      </div>
      <p class="price">
        <span> <strong>$0</strong><sup>*</sup></span>
        <!-- buybtn -->
        <a href="https://www.iobit.com/buy.php?product=isu3preorder&ref=en-isu3preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_isu"
           onclick="ga('send', 'event', 'isubuyrc', 'buy', 'isu3preorderrc');"
           class="buybtn">
          Pre-order Now
        </a>
      </p>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- intro -->
<div class="intro">
  <div class="wrapper">
    <h2>Why Upgrade to IObit Software Updater 3 PRO?</h2>
    <h3>Update Software Can’t Be Easier</h3>
    <!-- content -->
    <div class="content">
      <!-- one -->
      <dl class="one">
        <dt>Automatic</dt>
        <dd>
          Automatically download and install <br>
          updates for programs at scheduled time.
        </dd>
      </dl>
      <!-- two -->
      <dl class="two">
        <dt>Unlimited</dt>
        <dd>
          All outdated programs can be <br>
          updated in bulk. <br>
          <strong>Free version: 2 per day</strong>
        </dd>
      </dl>
      <!-- three -->
      <dl class="three">
        <dt>In-program</dt>
        <dd>
          Outdated programs can be updated <br>
          right inside IObit Software Updater.
        </dd>
      </dl>
      <!-- four -->
      <dl class="four">
        <dt>Clean</dt>
        <dd>
          No bundleware, toolbars or <br>
          installers would be attached <br>
          when updating.
        </dd>
      </dl>
      <!-- five -->
      <dl class="five">
        <dt>Safe</dt>
        <dd>
          Create system restore point <br>
          automatically before <br>
          installing updates.
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end intro -->

<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <h2>Excellent User Experience You Can’t Miss</h2>
    <table cellpadding="0" cellspacing="0" valign="middle">
      <tr class="one">
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
        <td class="text">Disable sponsored ads which display in free version;</td>
      </tr>
      <tr class="two">
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
        <td class="text">Automatically update to latest software database;</td>
      </tr>
      <tr class="three">
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
        <td class="text">Recommend hundreds of widely used programs;</td>
      </tr>
      <tr class="four">
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
        <td class="text">Auto update to latest version;</td>
      </tr>
      <tr class="five">
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
        <td class="text">24/7 premium technical support; </td>
      </tr>
    </table>
  </div>
</div>
<!-- end feature -->

<!-- review -->
<div class="review ">
  <div class="wrapper">
    <h2>What Others Say:</h2>
    <div class="review-box">
      <a href="javascript::" class="prev"></a>
      <div class="content">
        <div class="roll">
          <div class="message">
            <dl>
              <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt=""/></dt>
              <dd>
                Media review
                <strong>softpedia</strong>
              </dd>
            </dl>
            <p>IObit Software Updater was designed to simplify the task of keeping all the applications on your computer up-to-date. It can check for new versions and install them automatically, even without user input. Moreover, it can help you download and install popular applications for various purposes.</p>
          </div>
          <div class="message">
            <dl>
              <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
              <dd>
                User Review
                <strong>Nicolae Mocioc</strong>
              </dd>
            </dl>
            <p>I installed a free IObit from a friend, and I am very pleased with the speed and simplicity that meets the needs of a beginner in maintaining his personal computer. Thank you for that! I have to inform you that I will buy an IObit license, just to donate an amount to help you continue your work. Thank you!</p>
          </div>
          <div class="message">
            <dl>
              <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
              <dd>
                User Review
                <strong>Joshua Irving</strong>
              </dd>
            </dl>
            <p>I love the automatic aspect of the updates. It's fast and efficient, and it also creates a restore point prior to install just in case something goes wrong. I also love that the program downloads the updates directly from the appropriate sites rather than my having to go to each individual site to download an update. I think this is one of your best ideas yet!</p>
          </div>
          <div class="message">
            <dl>
              <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
              <dd>
                User Review
                <strong>Nico Bremmer</strong>
              </dd>
            </dl>
            <p>It's an great Software update program. It's very easy to use and very simple. This program is very clear, works very smooth and its really fast. Also the design is nice and modern and its good that you seen your old and the new version of the program you wanna update. It's also nice that this program shows you new program tips.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end review -->

<!-- awards -->
<div class="awards">
  <h2>World-wide Awards</h2>
  <p>As being trusted and awarded by those world-class media, you know you've got the right software updater.</p>
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
</div>
<!-- end awards -->

<!-- bottom -->
<div class="bottom">
  <div class="wrapper">
    <p class="annotation">
      Note: <br> *.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $12.97 automatically. This 55% discount from the original price of $29.99 is bonus only for preorders!
      <br> *.If you're unsatisfied, you can cancel the order you placed within 30 days without paying a fee.
    </p>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
</div>
<!-- end bottom -->

<!-- floatlayer -->
<div id="floatlayer" class="floatlayer nomal">
  <div class="wrapper clearfix">
    <img src="<?php echo getStaticUrl('images/fl-isu-box.png')?>" class="img-box" alt=""/>
    <div class="number">
      Act fast to go Pro for $0, only
      <div id="topNum" class="giftNum">
        <span class="nwrap">
          <strong>
            <b>1</b>
          </strong>
        </span>
        <span class="nwrap">
          <strong>
            <b>1</b>
          </strong>
        </span>
      </div>
      left today!
    </div>
    <p class="price">
      <span> <strong>$0</strong><sup>*</sup></span>
      <!-- buybtn -->
      <a href="https://www.iobit.com/buy.php?product=isu3preorder&ref=en-isu3preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_isu"
         onclick="ga('send', 'event', 'isubuyrc', 'buy', 'isu3preorderrc');"
         class="buybtn">
        Pre-order Now
      </a>
    </p>
  </div>
</div>
<!-- end floatlayer -->

<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>