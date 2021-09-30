<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_iu8_2018acregister';
  include $pRootUrl.'include/common.inc.php';
$buyHref="https://www.iobit.com/buy.php?product=enaff-iu81pc499&ref=".$_GET['ref']."&aff=".$_GET['aff'];
if(preg_match('/fspi([0-9]*)/',$_GET['ref'],$matches)||preg_match('/ir([0-9]*)/',$_GET['ref'],$matches)){
  $buyHref='https://iobit.onfastspring.com/iobit-uninstaller-pro-1-year-subscription-1-pc-999';
  $pregNum=$matches[1];
  if(!empty($pregNum)){
    $buyHref='http://macbooster.7eer.net/c/'.$pregNum.'/558399/4385';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>50% OFF on IObit Uninstaller PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Uninstall Unwanted Programs & Plug-ins Promptly & Thoroughly!">
<meta property="og:url" content="https://purchase.iobit.com/iu-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="50% OFF on IObit Uninstaller PRO - IObit">
<meta property="og:description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Uninstall Unwanted Programs & Plug-ins Promptly & Thoroughly!">
<meta property="og:image" content="https://purchase.iobit.com/2017/iu/apriuac/images/snapshot-large.png">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,800'>
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>IObit Uninstaller 8 PRO</h1>
        <p>Best Uninstaller to Remove Bundled and Unwanted Programs & Plug-ins with 1-click</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" />
        <div class="discount fl">
          <h2>50% OFF</h2>
          <p>Exclusive for IObit Valued Users</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>ONLY: <strong>$9.99 </strong><del>$19.99</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="<?php echo $buyHref?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu82018acregister');">
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
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt="" /></dt>
        <dd>
          <h3>DETECT AND UNINSTALL BUNDLEWARE</h3>
          <p>Detect adware, toolbars, and unwanted third-party programs alongside freeware to steal your privacy data.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt="" /></dt>
        <dd>
          <h3>NO ADS SURFING</h3>
          <p>Uninstall ad-based & malicious plug-ins to ensure secure & clean browsing experience.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt="" /></dt>
        <dd>
          <h3>AUTOCLEAN LEFTOVERS</h3>
          <p>Automatically detect & clean leftovers of uninstalled programs including those removed by other uninstallers.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt="" /></dt>
        <dd>
          <h3>SOFTWARE UPDATER</h3>
          <p>1-click to upgrade your important software on your PC without any user intervention.</p>
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
        <dd>
          <h4>"IObit Uninstaller is a great tool for uninstalling programs and even toolbars and plugins. I recommend it strongly!"</h4>
        </dd>
        <dd>"IObit Uninstaller is a great tool for uninstalling programs and even toolbars and plugins. Its use has been very helpful to me as it uninstalls programs and applications, as well as it cleans their associated register, in most cases unknown to users like myself. It has a nice and intuitive interface without needing major informatics skills. I recommend it strongly!"
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
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/fernando-lourenco-gomes.png" alt="Fernando Lourenço Gomes">
        </div>
        <p>Fernando Lourenço Gomes</p>
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
    </ul>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Guarantee a Clean, Light PC & Safe Online Surfing </h2>
      <div class="pricebox">
        <dl class="price">
          <dt>ONLY: <strong>$9.99 </strong><del>$19.99</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu82018acregister');">
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
        <p><strong>50% OFF</strong> to Get Rid of Unwanted Programs & Annoying Pop-up Ads</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>$9.99 </strong><del>$19.99</del></dt>
          <dd>
            <a class="buybtn smallbtn" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu82018acregister');">
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