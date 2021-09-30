<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
if (empty($_GET['ref'])) {
  $refStr = 'enaff_asc11_2018general1';
  $refDownloadStr='enascg17a';
}else{
  $refStr=$refDownloadStr=$_GET['ref'];
}
if($_GET['ref']=='cb1712en'){
  $buyHref="https://www.cleverbridge.com/289/?scope=checkout&cart=184422&pricerule=enaff2999&coupon=CB50OFF&ref=".$refStr."&AFFILIATE=".$_GET['aff'];
}elseif($_GET['ref']=='fs1702en'){
  $buyHref="https://www.macboost.net/xhtml/iobit.html?product=advanced-systemcare-10-pro-1-year-subscription-3-pcs&coupon=ASC50OFF";
}elseif($_GET['ref']=='rw1702en'){
  $buyHref="https://safecart.com/iobit/ascpro/1year3pcs?coupon_code=66PQ";
}elseif($_GET['ref']=='fs269814'){
  $buyHref="https://macbooster.7eer.net/c/269814/378283/4385";
}elseif($_GET['ref']=='fs391813'){
  $buyHref="https://macbooster.7eer.net/c/391813/378283/4385";
}else{
  $buyHref="https://www.iobit.com/buy.php?product=enaffasc111pc999&ref=".$refStr."&aff=".$_GET['aff'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Enjoy a worry-free fast PC with ASC PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600'>
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <p>The World's 1st PC Tune-Up Utilities</p>
      <h1>Advanced SystemCare PRO</h1>
      <h4>Make Your PC Cleaner, Faster and More Stable with Only 1 Click</h4>
      <div class="btnbox">
        <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc112018general1');">
          Buy Now & Save <strong>50%</strong> 
        </a>
      </div>
      <div class="interface"><img src="<?php echo $pResUrl; ?>images/interface.png" alt=""></div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="container">

    <!-- mediareview start -->
    <dl class="mediareview wrapper clearfix">
      <dt>
        <img src="<?php echo $pResUrl; ?>images/media_icon.png" alt="">
        <p>Over 250 million users' choice</p>
      </dt>
      <dd>
        <h3>Advanced Systemcare aims to remedy whatever ails your computer.</h3>
        <p>
          "There's nothing worse than a computer that is bogged down so much that it impedes your ability to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."-Cnet
        </p>
      </dd>
    </dl>
    <!-- mediareview end -->

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper clearfix">
        <h2>The Must-have TuneUp Utilities for Every PC User</h2>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/intro1.png" alt=""></dt>
          <dd><h3>Faster PC</h3></dd>
          <dd>Identify and remove performance issues causing PC slowdown</dd>
        </dl>
        <dl class="more">
          <dt><img src="<?php echo $pResUrl; ?>images/intro2.png" alt=""></dt>
          <dd><h3>More Stable System</h3></dd>
          <dd>Fix Windows errors to restore system stability and reduce PC crashes</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/intro3.png" alt=""></dt>
          <dd><h3>Safer Browsing</h3></dd>
          <dd>Erase privacy traces and protect against spyware in real time</dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>A Clean, Fast and Stable PC is just a Mouse Click Away</h2>
        <div class="btnbox">
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc112018general1');">
            Buy Now & Save <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- describe start -->
    <div class="wrapper">
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo $pResUrl; ?>images/describe1.png" alt=""></div>
        <div class="fl txtbox">
          <h2>Deep Clean & Optimize Your PC</h2>
          <p>
            Advanced SystemCare PRO deeply cleans up junk files, invalid registry entries, unwanted & stubborn programs, adbased toolbars & plugins, and optimizes startup, RAM, Internet, system and disks to restore a clean and fast PC.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo $pResUrl; ?>images/describe2.png" alt=""></div>
        <div class="txtbox fr">
          <h2>Fix All Kinds of PC Problems</h2>
          <p>
            Advanced SystemCare PRO identifies and fixes all kinds of Windows problems including registry errors, disk errors, Windows security issues, outdated drivers, system problems, etc. to restore system stability and prevent PC crashes.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo $pResUrl; ?>images/describe3.png" alt=""></div>
        <div class="txtbox fl">
          <h2>Monitor System Resource in Real-time</h2>
          <p>
            Advanced SystemCare PRO helps you manage RAM, CPU and Disk usage with 1-click, and automatically detects & disables inactive processes & programs to release memory and boost PC performance.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo $pResUrl; ?>images/describe4.png" alt=""></div>
        <div class="txtbox fr">
          <h2>Protect Your Online Privacy Proactively</h2>
          <p>
            Advanced SystemCare PRO prevents malicious modifications to your homepage, search engine, and DNS settings, removes spyware & adware, and protects your PC against online threats in real-time. It automatically sweeps the browsing and download history, cookies, caches, etc. to keep your privacy always in confidential.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo $pResUrl; ?>images/describe5.png" alt=""></div>
        <div class="txtbox fl">
          <h2>Remove Ads & Block Malicious Websites</h2>
          <p>
            Advanced SystemCare PRO removes annoying ads in Internet Explorer, Chrome and Firefox, and blocks malicious & unsafe websites while browsing to ensure a better surfing experience.
          </p>
        </div>
      </div>
      <div class="describe last clearfix">
        <div class="imgbox fl"><img src="<?php echo $pResUrl; ?>images/describe6.png" alt=""></div>
        <div class="txtbox fr">
          <h2> Capture Intruder Automatically <span>(Camera Required)</span></h2>
          <p>
            Advanced SystemCare PRO helps capture intruders accessing to your PC without permis-sion or trying to steal your personal information and important files. After recording your own face, it will automatically capture intruders' image silently in the background.
          </p>
        </div>
      </div>
    </div>
    <!-- describe end -->

    <!-- tool start -->
    <div class="tool">
      <div class="wrapper clearfix">
        <h2>More Amazing Tools</h2>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon1.png" alt=""></dt>
          <dd><h4>Startup Manager</h4></dd>
          <dd>Manage startup items to accelerate PC Startup.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon2.png" alt=""></dt>
          <dd><h4>Smart RAM</h4></dd>
          <dd>Free up memory to boost PC performance.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon3.png" alt=""></dt>
          <dd><h4>Internet Booster</h4></dd>
          <dd>Optimize browsers to speed up Internet connection.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon4.png" alt=""></dt>
          <dd><h4>Win Fix</h4></dd>
          <dd>Identify and fix Windows problems.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon5.png" alt=""></dt>
          <dd><h4>Large Files Finder</h4></dd>
          <dd>Find and remove large files for more space.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon6.png" alt=""></dt>
          <dd><h4>File Shredder</h4></dd>
          <dd>Permanently remove unwanted files beyond recovery.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon7.png" alt=""></dt>
          <dd><h4>Registry Cleaner</h4></dd>
          <dd>Safely clean and repair registry problems.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon8.png" alt=""></dt>
          <dd><h4>Disk Cleaner</h4></dd>
          <dd>Clean up all kinds of junk files to free up disk space.</dd>
        </dl>
      </div>
    </div>
    <!-- tool end -->
  
    <!-- usereview start -->
    <div id="user" class="usereview wrapper clearfix">
      <h2>User Review</h2>
      <dl class="active">
        <dt><h4>"Not only is it a great product, but the support is equally great"</h4></dt>
        <dd>
          "Advanced SystemCare has been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."
        </dd>
      </dl>
      <dl>
        <dt><h4>"Cleaned up Spyware and Malware My antivirus lets slip through"</h4></dt>
        <dd>
          "We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"
        </dd>
      </dl>
      <dl>
        <dt><h4>"My choice is still overwhelmingly Advanced SystemCare Pro"</h4></dt>
        <dd>
          "As a computer repair tech I find by downloading and scanning with ASC PRO most PC problems are resolved. When finished with a scan I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."
        </dd>
      </dl>
      <dl>
        <dt><h4>"My system has never run better."</h4></dt>
        <dd>
          "In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function. Meanwhile, IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."
        </dd>
      </dl>
      <ul class="username">
        <li class="current">
          <img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay">
          <p>Bruce Ramsay</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett">
          <p>Bob Bassett</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick">
          <p>Charles R. Widick</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt="Gordon Griswold">
          <p>Gordon Griswold</p>
        </li>
      </ul>
    </div>
    <!-- usereview end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper clearfix">
        <h2>Advanced SystemCare PRO</h2>
        <p>Trusted by over 250 million users worldwide</p>
        <div class="btnbox">
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc112018general1');">
            Buy Now & Save <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- service start -->
    <div class="service">
      <div class="wrapper clearfix">
        <dl>
          <dt>100% Clean</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dd>
        </dl>
        <dl class="back">
          <dt>60-day Money Back</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dd>
        </dl>
        <dl class="last">
          <dt>24/7 support</dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/call.png" alt="">
            <span>Free 24/7 Technical Support on Demand</span>
          </dd>
        </dl>
      </div>
    </div>
    <!-- service end -->

  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
  <!-- footer end -->

  <!-- backtop start -->
  <div id="backtop" class="backtop" onclick="goTarget($('.header'))"></div>
  <!-- backtop end -->

<script>    
  //userreview 
  $(".username li").mouseover(function(event) {
    var num = $(this).index();
    $(".username li").eq(num).addClass('current').siblings().removeClass('current');
    $("#user dl").eq(num).addClass('active').siblings().removeClass('active');
  });

  //floatlayer
  $(window).on('scroll', function () {
    var scrollHeight = $(".header .interface:last").offset().top;
    if ($(window).scrollTop() > scrollHeight) {
      $('#backtop').addClass('on');
    }else {
      $('#backtop').removeClass('on');
    }
  });

  function goTarget(target,yoffset) {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }
</script>
</body>
</html>