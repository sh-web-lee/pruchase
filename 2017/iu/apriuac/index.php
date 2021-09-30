<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
$refStr='';
if(in_array($_GET['to'],array('db_ac_iu','cr_a','cr_b'))){
  $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('ascu_aciu','asc_aciu'))){
  $refStr.='-'.$_GET['st'];
}
  include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>75% OFF on IObit Uninstaller PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Uninstall Unwanted Programs & Plug-ins Promptly & Thoroughly!">
<meta property="og:url" content="https://purchase.iobit.com/iu-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="75% OFF on IObit Uninstaller PRO - IObit">
<meta property="og:description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Uninstall Unwanted Programs & Plug-ins Promptly & Thoroughly!">
<meta property="og:image" content="https://purchase.iobit.com/2017/iu/apriuac/images/snapshot-large.png?t=11">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,800'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>IObit Uninstaller 11 PRO</h1>
        <p>Best Uninstaller to Remove Bundled and Unwanted Programs & Plug-ins with 1-click</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" />
        <div class="discount fl">
          <h2>75% OFF</h2>
          <p>Exclusive for IObit Valued Users</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>ONLY: <strong>$4.99 </strong><del>$19.99</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=iu11-acak&ref=iu-ac<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=ac_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuac');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Activate Now</span>
              </div>
            </a>
          </dd>
          <dd>1 Year / 1 PC</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <div class="feature wrapper">
    <h2>What IObit Uninstaller PRO can do for you?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt="" /></dt>
        <dd>
          <h3>REMOVE STUBBORN PROGRAMS</h3>
          <p>Easily uninstall 1000+ stubborn software & bundleware that are hard to remove by common uninstallation.</p>
        </dd>
      </dl>
      <dl class="right one">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt="" /></dt>
        <dd>
          <h3>AUTO CLEAN LEFTOVERS</h3>
          <p>Thoroughly detect & clean leftover files of uninstalled programs, even those left by uninstallation with other utilities.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt="" /></dt>
        <dd>
          <h3>NO MALEWARE & ADS</h3>
          <p>Quickly find and eliminate malware & ad-based plug-ins to protect your privacy while surfing.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_07.png')?>" alt="" /></dt>
        <dd>
          <h3>BETTER SOFTWARE PERFORMANCE</h3>
          <p>1-click to manage software permission, disable notifications, fix uninstall issues, and clean installation files.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt="" /></dt>
        <dd>
          <h3>INSTALLATION MONITOR</h3>
          <p>Monitor all changes made to system during program installation and fully revert them when uninstalling.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt="" /></dt>
        <dd>
          <h3>1-CLICK TO UPDATE SOFTWARE</h3>
          <p>Make it easy to keep all your software always up to date to protect against privacy & security exploits.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt>
        <h3>User Review</h3></dt>
        <dd><h4></h4></dd>
        <dd>
          "IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>User Review</h3></dt>
        <dd><h4></h4></dd>
        <dd>
          This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."
        </dd>
      </dl>
      <dl class="active">
        <dt>
        <h3>Editor Review</h3></dt>
        <dd>
          <h4>"IObit Uninstaller is easily the best Windows uninstaller utility I've tested."</h4>
        </dd>
        <dd>"If you're in need of an app that lets you cleanly and completely uninstall applications with ease, fire up IObit Uninstaller. This utility, now compatible with Windows 10, makes it a breeze to remove apps, including stray support files that are often left behind when a program is removed from a PC, and those pesky Web browser toolbars and plug-ins. In short, if you use a Windows PC, you should download IObit Uninstaller."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Media Review</h3></dt>
        <dd>
          <h4>"IObit Uninstaller delivers what it promises: thorough uninstallation."</h4>
        </dd>
        <dd>"IObit Uninstaller is small and its interface is friendly. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. In general, this uninstaller delivers what it promises: thorough uninstallation. The performance alone makes this little uninstall tool worth keeping. "
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Media Review</h3></dt>
        <dd><h4></h4></dd>
        <dd>
          "I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed. "
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/ivan.png" alt="Ivan White"></div>
        <p>Ivan White</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/ali.png" alt="Ali Tekin"></div>
        <p>Ali Tekin</p>
      </li>
      <li class="active">
        <a href="https://www.pcmag.com/" target="_blank">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc-magazine.png" alt="PC Magazine"></div>
          <p>PC Magazine</p>
        </a>
      </li>
      <li>
        <a href="https://www.makeuseof.com/" target="_blank">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt="MakeUseOf"></div>
          <p>MakeUseOf</p>
        </a>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/samrat.png" alt="Samrat Kumar Chakrabortty"></div>
        <p>Samrat Kumar Chakrabortty</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Guarantee a Clean, Light PC & Safe Online Surfing </h2>
      <div class="pricebox">
        <dl class="price">
          <dt>ONLY: <strong>$4.99 </strong><del>$19.99</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=iu11-acak&ref=iu-ac<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=ac_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuac');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Activate Now</span>
              </div>
            </a>
          </dd>
          <dd>1 Year / 1 PC</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">© 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>EXCLUSIVE OFFER</h2>
        <p><strong>75% OFF</strong> to Get Rid of Unwanted Programs & Annoying Pop-up Ads</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>$4.99 </strong><del>$19.99</del></dt>
          <dd>
            <a class="buybtn smallbtn" href="https://www.iobit.com/buy.php?product=iu11-acak&ref=iu-ac<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=ac_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuac');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Activate Now</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo $pResUrl; ?>script/script.js"></script>
</body>
</html>