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

$refStr='';

if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr = '-' . ((strlen($_GET['to']) == 0) ? 'unknown' : $_GET['to']);
$refStr .= '-' . $ver;
$refStr .= '-' . ((strlen($_GET['user']) == 0) ? 'unknown' : 'u'.$_GET['user']);
$refStr .= '-' . ((strlen($_GET['insday']) == 0) ? 'unknown' : 'i'.$_GET['insday']);
$refStr .= '-' . ((strlen($_GET['insur']) == 0) ? 'unknown' : $_GET['insur']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>70% OFF to Get IObit Uninstaller PRO & Free Gifts</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
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
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO 11">
      <img class="gifts-box" src="<?php echo getStaticUrl('images/gifts-box.png')?>" alt="">
    </div>
    <div class="right-message">
      <h1>IObit Uninstaller 11 PRO</h1>
      <h2>Making software update a breeze</h2>
      <p class="price"><strong>$<b>16</b>.77</strong> <del>$59.93</del></p>
      <p class="pc"><span></span> 1 Year Subscription / 3 PCs</p>
      <div class="number-message">
        <div class="number">
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          <p>Act Now! Only <span class="gift">50</span> free gifts left</p>
        </div>
        <div class="buy-content">
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsdpfupdater<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
             onclick="ga('send', 'event', 'iubuy-updaterb', 'buy', 'iupurchase-updaterb03');">
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
      <h2>See How Easy <span>IObit Uninstaller PRO</span> <br> Makes It for You</h2>

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
<!-- benfits -->
<div class="benfits ">
  <div class="wrapper">
    <h2>What Other Benefits Can I Get from <br> IObit Uninstaller PRO?</h2>
    <dl class="list01">
      <dt>Fast & Safe Surfing</dt>
      <dd>Quickly find and eliminate malware & ad-based browser<br> plug-ins to protect your online privacy.</dd>
      <dd><strong>*Pro only</strong></dd>
    </dl>
    <dl class="list02">
      <dt>Auto Clean Leftovers</dt>
      <dd>Fully detect & clean leftover files of<br> programs uninstalled without using<br> IObit Uninstaller.</dd>
      <dd><strong>*Pro only</strong></dd>
    </dl>
    <dl class="list03">
      <dt>Uninstall Stubborn Programs</dt>
      <dd>Safely & completely uninstall<br> 1000+ stubborn programs that<br> refuse to remove from your PC.</dd>
      <dd><strong>*Pro only</strong></dd>
    </dl>
    <dl class="list04">
      <dt>Better Software Performance</dt>
      <dd>1-click to manage software permission, disable notifications, fix uninstall issues, and clean installation files.</dd>
      <dd><strong>*Pro only</strong></dd>
    </dl>
    <dl class="list05">
      <dt>Real-time Installation Monitor</dt>
      <dd>Track all changes made to system during program installation<br> and fully revert them to the pre-installation state when uninstalling.</dd>
      <dd><strong>*Pro only</strong></dd>
    </dl>
  </div>
</div>
<!-- end benfits -->
<!-- gifts -->
<div class="gifts">
  <div class="wrapper clearfix">
    <h2>Plus You Can Get Two Powerful Utilities for <strong>Free</strong></h2>
    <!-- sd -->
    <dl class="sd">
      <dt><img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag 7 PRO"></dt>
      <dd>
        <h3>Smart Defrag 7 PRO</h3>
        <p><strong>$0</strong> <del>$19.99</del></p>
        <p>Max Hard Drive Optimization for Faster PC</p>
      </dd>
    </dl>
    <!-- pf -->
    <dl class="pf">
      <dt><img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"></dt>
      <dd>
        <h3>Protected Folder</h3>
        <p><strong>$0</strong> <del>$19.99</del></p>
        <p>No Leak of Important Files for Secured Privacy</p>
      </dd>
    </dl>
  </div>
</div>
<!-- end gifts -->
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
        <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt=""></dt>
        <dd>
          <h2>Media Review</h2>
          <p>"This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."</p>
          <cite>MakeUseOf</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            "IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."
          </p>
          <cite>Ivan White</cite>
        </dd>
      </dl>             
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/ali.png')?>" alt="Ali Tekin"></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."
          </p>
          <cite>Ali Tekin</cite>
        </dd>
      </dl>                 
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            "I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed. "
          </p>
          <cite>Samrat Kumar Chakrabortty</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            "IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."
          </p>
          <cite>John Glenn Perong</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end review -->
<!-- bottom -->
<div class="bottom">
  <div class="award wrapper ">
    <h2>World-wide Awards</h2>
    <p>As being trusted and awarded by those world-class media in the past ten years, you know you've got the right PC uninstaller.</p>
    <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
  </div>
  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl class="fl">
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
      <dd>
        <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
        <p>
          We’re confident that activating PRO edition will quickly uninstall unwanted programs for affordable price!
        </p>
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
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=" IObit Uninstalller PRO 8">
      <img class="gifts-box" src="<?php echo getStaticUrl('images/fl-gifts-box.png')?>" alt="">
    </div>
    <div class="number">
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
      </div>
      <p><span class="viewNum"><?php echo $viewNum;?></span> visitors now, only <span class="gift">50</span> free gifts left!</p>
    </div>
    <p class="price"> <del>$59.93</del> <strong>$<b>16</b>.77</strong></p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsdpfupdater<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
       onclick="ga('send', 'event', 'iubuy-updaterb', 'buy', 'iupurchase-updaterb03');">
      <i></i> <span>Activate Now</span>
    </a>
  </div>
</div>

<div class="pop-over clearfix">
  <h2>Surprise! You are Our Lucky Visitor Today</h2>
  <img class="fl imgbox" src="<?php echo getStaticUrl('images/pop-iu-box.png')?>" alt="IObit Uninstalller PRO 8">
  <dl class="fl">
    <dt>
      <h3>Extra 10% OFF for You</h3>
      <p>Ends in <strong><span class="count-time">60</span>s</strong></p>
    </dt>
    <dd>
      <!-- pop price -->
      <p>$<strong>14</strong>.77 <del>$59.93</del></p>
      <!-- pop buybtn -->
      <a class="buybtn" id="fl-buybtn"
         href="https://www.iobit.com/buy.php?product=iu11sdpf1477&ref=en-iu3pcsdpf1477popupdater<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
         onclick="ga('send', 'event', 'iubuy-pop', 'buy', 'iupurchase-updaterbpop03');">
        Get My Special Offer
      </a>
    </dd>
  </dl>
</div>
<div class="pop-bg "><span class="close">X</span></div>
<script>
  refStr = "<?php echo $refStr;?>";
  var soldoutPopBox = "<?php echo getStaticUrl('images/iu-box.png')?>";
</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>