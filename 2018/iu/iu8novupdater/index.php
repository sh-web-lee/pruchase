<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='eniuup'.$date;
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

$data=json_decode(base64_decode($_GET['data']));
$driversCount=intval($data->softall->update);

$refStr='';
if(in_array($_GET['to'],array('softall','softnew','soft'))){
  $refStr.='-'.$_GET['to'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Save up to 83% on IObit Uninstaller 8 PRO & Get 2 Free Gifts</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com" target="_blank">
            IObit
        </a>
        <div class="title">
          <h1><span class="left-title"></span> <?php if(!empty($driversCount)):?><strong><?php echo $driversCount?></strong><?php endif;?> <span class="right-title">programs</span></h1>
          <p>in an easier way?</p>
        </div>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO"/>
            <img src="<?php echo getStaticUrl('images/iu-box-reduce.png')?>" alt="IObit Uninstalller PRO" class="reduce"/>
          </div>
          <div class="right fr">
            <h2>UPGRADE TO PRO & GET <span>2 FREE GIFTS</span> NOW</h2>
            <p class="note">Hurry! Limited quantity for our loyal user</p>
            <div class="number">
               Only 
               <div class="countdown countdown1">
                  <div class="scroll-tick"><span>2</span></div>
                  <div class="scroll-tick"><span>0</span></div>
                  <div class="scroll-tick"><span>0</span></div>
                  <div class="scroll-tick last"><span>0</span></div>
                </div>
                In Stock
            </div>
            <div class="price">
              <p><strong>$<big>16.</big>77</strong> <del>$99.91</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=iu8pro1677&ref=iu82018novupdater<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy-updater', 'buy', 'iupurchase-updater');">
                 <i class="all-icons"></i>
                 Activate Now
              </a>
              <p class="year">100% 60-day Money Back Guarantee</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->
    <div class="step-content wrapper clearfix">
      <h2>See How IObit Uninstaller 8 PRO Helps</h2>
      <dl class="first ">
        <dt>STEP 1</dt>
        <dd>
          <span><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></span>
          <strong>Auto Check</strong>
          <p>Automatically check and inform <br>  you if your important programs <br> need updates.</p>
        </dd>
      </dl>
      <dl class="list02">
        <dt>STEP 2</dt>
        <dd>
          <span><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></span>
          <strong>Update in Batch</strong>
          <p>Get all outdated programs <br> updated in just one click.</p>
        </dd>
      </dl>
      <dl class="list03 last">
        <dt>STEP 3</dt>
        <dd>
          <span><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></span>
          <strong>Update in One Place</strong>
          <p>Programs can be updated <br> directly inside IObit Uninstaller <br> without redirecting to webpages.</p>
        </dd>
      </dl>
    </div>
    <div class="feature-message clearfix">
      <div class="wrapper">
        <h2>More Amazing Features You Would Enjoy with PRO Edition</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
          <dd>
            <strong>Stubborn Programs Removal</strong>
            <p>Programs unable to uninstalled <br>  by other utilities can be <br> removed completely</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
          <dd>
            <strong>Bundleware Removal</strong>
            <p>Program/plug-in installed <br>  unnoticeably while installing <br> others can be removed </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
          <dd>
            <strong>Safe & Clean Browsing</strong>
            <p>Malicious or ad-based plug-ins <br> can be quickly deleted for your <br> browser’s good.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
          <dd>
            <strong>AutoClean Leftovers</strong>
            <p>Leftovers of uninstalled <br> programs including those <br> removed by other uninstallers <br> can be cleaned automatically.</p>
          </dd>
        </dl>
         <a class="buybtn" href="https://www.iobit.com/buy.php?product=iu8pro1677&ref=iu82018novupdater<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy-updater', 'buy', 'iupurchase-updater');">
             <i class="all-icons"></i>
             Activate Now
          </a>
      </div>
    </div>
    <div class="gift-message">
      <div class="wrapper">
        <h2>Plus You Can Get Two Powerful Utilities for <span>Free</span></h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""></dt>
          <dd>
            <h3>Smart Defrag 6 PRO</h3>
            <strong>$0</strong> <del>$19.99 </del>
            <p>Max Hard Drive Optimization <br> for Faster PC</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""></dt>
          <dd>
            <h3>Protected Folder</h3>
            <strong>$0</strong> <del>$19.99 </del>
            <p>No Leak of Important Files <br> for Secured Privacy</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- reviews -->
    <div class="review wrapper">
      <div class="content">
        <dl>
          <dt><h3>User Review</h3></dt>
          <dd>
            "IObit Uninstaller is a great tool for uninstalling programs and even toolbars and plugins. Its use has been very helpful to me as it uninstalls programs and applications, as well as it cleans their associated register, in most cases unknown to users like myself. It has a nice and intuitive interface without needing major informatics skills. I recommend it strongly!"
          </dd>
        </dl>
        <dl class="active">
          <dt><h3>Editor Review</h3></dt>
          <dd>
            "If you're in need of an app that lets you cleanly and completely uninstall applications with ease, fire up IObit Uninstaller. This utility, now compatible with Windows 10, makes it a breeze to remove apps, including stray support files that are often left behind when a program is removed from a PC, and those pesky Web browser toolbars and plug-ins. In short, if you use a Windows PC, you should download IObit Uninstaller."
          </dd>
        </dl>
        <dl>
         <dt><h3>Media Review</h3></dt>
          <dd>
            "IObit Uninstaller is small and its interface is friendly. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. In general, this uninstaller delivers what it promises: thorough uninstallation. The performance alone makes this little uninstall tool worth keeping. "
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/fernando.jpg" alt="Fernando Lourenço Gomes">
          </div>
          <p>Fernando <span>Lourenço Gomes</span></p>
        </li>
        <li class="active">
          <a href="https://www.pcmag.com/" target="_blank">
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/giga.png" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </a>
        </li>
        <li>
          <a href="https://www.makeuseof.com/" target="_blank">
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/makeuseof.jpg" alt="MakeUseOf"></div>
            <p>MakeUseOf</p>
          </a>
        </li>
      </ul>
    </div>
    <!-- end reviews -->

    <!-- awards start -->
    <div class="awards ">
      <div class="wrapper">
      <h2>World-wide Awards</h2>
      <p>As being trusted and awarded by those world-class media in the past seven years, you know you’ve got the right uninstaller.</p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
              <p>We’re confident that activating PRO edition will help you quickly uninstall unwanted programs for affordable price!</p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>We accept</h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->
        <div class="notes">
          <p>Note:</p>
          <p>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</p>
        </div>
        <!-- footer start -->
        <div class="footer">
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- float start -->
    <div class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/iu-float-box.png')?>" alt="IObit Uninstalller PRO"/>
        <div class="number">
           <div class="countdown countdown2">
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick last"><span>0</span></div>
            </div>
            <p>Hurry up,Only Few Left!</p>
        </div>
        <!-- buybtn -->
        <div class="price fr">
          <p><strong>$<big>16</big>.77</strong> <del>$99.91</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=iu8pro1677&ref=iu82018novupdater<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy-updater', 'buy', 'iupurchase-updater');">
            <i class="all-icons"></i>
            Activate Now
          </a>
        </div>
      </div>  
    </div>
    <!-- float end -->

  </div>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>