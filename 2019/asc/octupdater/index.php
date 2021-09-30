<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'eniumar_p' . $date;
  $c_name_t='eniumar_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
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
$data=json_decode(base64_decode($_GET['data']));
$driversCount=intval($data->softall->update);
$driversCountStr=str_pad($driversCount,2,0,STR_PAD_LEFT);

if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr = '-' . ((strlen($_GET['ref']) == 0) ? 'unknown' : $_GET['ref']);
$refStr .= '-' . ((strlen($_GET['st']) == 0) ? 'unknown' : $_GET['st']);
$refStr .= '-' . ((strlen($_GET['insur']) == 0) ? 'unknown' : $_GET['insur']);
$refStr .= '-' . $ver;
$refStr .= '-' . ((strlen($_GET['instd']) == 0) ? 'unknown' : 'i'.$_GET['instd']);
$refStr .= '-' . ((strlen($_GET['usr']) == 0) ? 'unknown' : 'u'.$_GET['usr']);
$refStr .= '-' . ((strlen($_GET['litype']) == 0) ? 'unknown' : 'l'.$_GET['litype']);
$refStr .= '-' . ((strlen($_GET['expd']) == 0) ? 'unknown' : 'e'.$_GET['expd']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>75% OFF to Get Advanced SystemCare PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <a href="https://www.iobit.com/en/index.php" target="_blank" class="logo">IObit</a>
    <?php if($driversCount>0):?>
      <ul class="clearfix">
        <li class="lt">Prefer To Update</li>
        <li class="md"><strong><?php echo $driversCountStr;?></strong></li>
        <li class="rt">Programs In An Easier Way?</li>
      </ul>
    <?php else:?>
      <ul class="nonumber">
        <li><i></i>Prefer To Update Programs In An Easier Way?</li>
      </ul>
    <?php endif;?>
    <div class="left-img">
      <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare PRO">
    </div>
    <div class="right-message">
      <h1>Advanced SystemCare 15 PRO</h1>
      <h2>Keep software updated & tune up PC</h2>
      <p class="price"><strong>$<b>19</b>.99</strong> <del>$89.97</del></p>
      <p class="pc"><span></span> 1 Year Subscription / 3 PCs</p>
      <div class="number-message">
        <div class="number">
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          <p>Hurry, only <span class="gift">50</span> left at this cost!</p>
        </div>
        <div class="buy-content">
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=asc153pc1999&ref=en-asc3pcupdater<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
             onclick="ga('send', 'event', 'ascbuy-updater', 'buy', 'ascpurchase-updater');">
            <i></i> <span>Activate Now</span>
          </a>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- end banner -->

<!-- reason -->
<div class="reason ">
  <h2>Why You Need to Keep Software <span>Up-to-date</span>?</h2>
  <div class="wrapper-box">
    <div class="message-box">
      <div class="message-box2"></div>
      <dl class="list01">
        <dt><span>Reason 1</span> Smooth Performance</dt>
        <dd>By fixing bugs of previous version and adding new  <br> features, you can enjoy smoother and better <br> performance.</dd>
      </dl>
      <dl class="list02">
        <dt><span>Reason 2</span> Safe System</dt>
        <dd>Updated software patches existing security  <br> vulnerabilities that leave PC open to <br> hackers, so your computer would stay safe.</dd>
      </dl>
    </div>
  </div>
</div>
<!-- end reason -->

<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <div class="left-message">
      <h2>See How Easy <span>Advanced SystemCare PRO</span> <br> Makes It for You</h2>

      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list01-upd.png')?>" alt=""></dt>
        <dd>
          <strong>Auto Check</strong>
          <p>Automatically check important software <br> updates for you.</p>
        </dd>
      </dl>

      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list02-upd.png')?>" alt=""></dt>
        <dd>
          <strong>Easy Update</strong>
          <p>1-click to keep Programs updated in batch <br> without redirecting to webpages.</p>
        </dd>
      </dl>

    </div>
    <img src="<?php echo getStaticUrl('images/cleaning-upd.png')?>" alt="" class="img-box">
  </div>
</div>
<!-- end feature -->

<!-- benfits -->
<div class="benfits ">
  <div class="wrapper">
    <h2>What <span>Other Benefits</span> Can I Get from <br> Advanced SystemCare PRO?</h2>
    <dl class="list01">
      <dt>200%* Faster PC</dt>
      <dd>Fix slow PC intelligently and free up disk space to<br> keep your PC running faster.</dd>
      <dd><strong>*Pro only</strong></dd>
    </dl>
    <dl class="list02">
      <dt>300%* Faster Surfing</dt>
      <dd>Optimize browser settings for up <br> to 300%* faster downloading, <br> video viewing, online gaming etc.</dd>
      <dd><strong>*Pro only</strong></dd>
    </dl>
    <dl class="list03">
      <dt>Deep Cleaning with AI</dt>
      <dd>Scan more intelligently with new AI Mode,<br> and get rid of useless registry files to<br> avoid system freezes or crashes.</dd>
      <dd><strong>*Pro only</strong></dd>
    </dl>
    <dl class="list04">
      <dt>Stay Anonymous Online</dt>
      <dd>Fully prevent your online behaviors from<br> being tracked in real-time with privacy eraser.</dd>
      <dd><strong>*Pro only</strong></dd>
    </dl>
    <dl class="list05">
      <dt>Keep PC Safe</dt>
      <dd>Prevent malware, spyware and others from <br> infecting your computer in real time.</dd>
      <dd><strong>*Pro only</strong></dd>
    </dl>
  </div>
</div>
<!-- end benfits -->

<!-- review -->
<div class="review wrapper">
  <h2>What Other Users and Media Say</h2>
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""></dt>
        <dd>
          <h2>Media Review</h2>
          <p>"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."</p>
          <cite>Cnet</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/brendon-o-rourke.png')?>" alt=""></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            I have been using ASC for years now. I have recently tested the latest version V15. And it is by far the most comprehensive version to date. IObit continue to improve their Products and Technology. With more options and easier navigation that help find solutions. I don't need to shop elsewhere.
          </p>
          <cite>Brendon O'Rourke</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/anthony-baker.png')?>" alt=""></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            The features in Advanced System Care (ASC) 15 are awesome and the overall appearance is clean, fresh, and modern. I have used other all-in-one system maintenance programs, but none have been as effective as ASC 15. The program reduces and eliminates the use of non-essential resources which allow your computer to run cooler and more efficiently. This product is amazing and the best in class. If you care about your laptop or pc, use Advanced System Care 15!
          </p>
          <cite>Anthony Baker</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/ryan-hill.png')?>" alt=""></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            Advanced system care 15 is the most complete all in one system on the market. I've been using the products for years now and every year there getting better the new easy interface the deep cleaning you get with the software its breeze to use one click and its doing its magic all the other options that come within system are great also the empty folder finder the internet booster even game booster rocks!! I think it's one of the best cleaning systems out there today.
          </p>
          <cite>Ryan Hill</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt=""></dt>
        <dd>
          <h2>User Review</h2>
          <p>"I have been using Advanced SystemCare Pro for a long time and this latest version 15 is even better than version 12. It can find and fix problems very quickly and has so many extra features you can use to keep your computer running well and stable. I cannot recommend it more highly."</p>
          <cite>Tony Fisher</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt=""></dt>
        <dd>
          <h2>User Review</h2>
          <p>"The New ASC 15 is a must have for all PC users. Its clean and intuitive interface makes it easy to use for the novice as well as the advanced user. Many powerful tools included to keep your PC running at its peak performance. Kudos to you IObit for such a wonderful set of tools all in one place."</p>
          <cite>Daniel Sanders</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/lyle-stelmaschuk.png')?>" alt=""></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            I have purchased many different software programs to speed up and fix problems with my PC. Unfortunately, most of them really didn't help or make a difference until I tried out Advanced System Care 15. I love that there are so many options and solutions to fix any problem. It's amazing how much faster my PC is now after the first scan and repair. Definitely the best product I have come across.
          </p>
          <cite>Lyle Stelmaschuk</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end review -->

<!-- bottom -->
<div class="bottom">
  <!-- award -->
  <div class="award wrapper ">
    <h2>World-wide Awards</h2>
    <p>As being trusted and awarded by those world-class media in the past fourteen years, you know you’ve got the right PC optimizer.</p>
    <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
  </div>
  <!-- end award -->

  <!-- service -->
  <div class="service wrapper clearfix">
    <dl class="fl">
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
      <dd>
        <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
        <p>We’re confident that activating PRO edition will improve your PC performance for affordable price!</p>
      </dd>
    </dl>
    <dl class="fr">
      <dd>
        <h4>We accept</h4>
      </dd>
      <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
    </dl>
  </div>
  <!-- service end -->
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Note: </dt>
    <dd>*.Data may vary based on different system or computer.</dd>
    <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
  </dl>
  <!-- footer -->
  <div class="footer">
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
</div>
<!-- end bottom -->




<!-- float -->
<div class="float clearfix">
  <div class="wrapper">
    <div class="left-img">
      <img src="<?php echo getStaticUrl('images/fl-asc-box.png')?>" alt="Advanced SystemCare PRO">
    </div>
    <div class="number">
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
      </div>
      <p><span class="viewNum"><?php echo $viewNum;?></span> visitors now, only <span class="gift">50</span> left at this cost!</p>
    </div>
    <p class="price"> <del>$89.97</del> <strong>$<b>19</b>.99</strong></p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=asc153pc1999&ref=en-asc3pcupdater<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
       onclick="ga('send', 'event', 'ascbuy-updater', 'buy', 'ascpurchase-updater');">
      <i></i> <span>Activate Now</span>
    </a>
  </div>
</div>

<div class="pop-over clearfix">
  <h2>Surprise! Free Gifts for Our Lucky Visitor</h2>
  <h3>Activate Advanced SystemCare PRO Today to Get Your Free Gifts (Value $59.97)</h3>
  <p>Limited Offer! Ends in <strong><span class="count-time">60</span>s</strong></p>
  <img class="imgbox" src="<?php echo getStaticUrl('images/pop-asc-box.png')?>" alt="Advanced SystemCare PRO">
  <dl>
    <dd>
      <!-- pop buybtn -->
      <a class="buybtn" id="fl-buybtn"
         href="https://www.iobit.com/buy.php?product=asc15sdiuamc1999&ref=en-asc3pcsdiuamcpopupdater<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
         onclick="ga('send', 'event', 'ascbuy-gift', 'buy', 'ascpurchase-updatergift');">
        Get My Free Gifts
      </a>
    </dd>
  </dl>
</div>
<div class="pop-bg "><span class="close">X</span></div>
<script>
  refStr = "<?php echo $refStr;?>";
  var soldoutPopBox = "<?php echo getStaticUrl('images/pop-iu-boxsoldout.png')?>";
</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>