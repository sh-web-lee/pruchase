<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='ascprepa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['st'])?'':('-'.$_GET['st']));
$popRefStr='xr_iuasc'.$refStr;
if($_GET['pop']=='x_iuasc'){
  $popRefStr=$_GET['pop'];
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>75% OFF to Get IObit Uninstaller PRO & Advanced SystemCare PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="flower clearfix">
      <img class="fl" src="<?php echo $pResUrl;?>images/banner-left.png" alt="">
      <img class="fr" src="<?php echo $pResUrl;?>images/banner-right.png" alt="">
    </div>
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <div class="title">
        <h1>Merry Christmas! Special Sale</h1>
        <p>Last chance to Save Big-Once Per Year Only!</p>
      </div>
      <!-- palen -->
      <div class="palen clearfix">
        <!-- left-message -->
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          <img class="balloon" src="<?php echo getStaticUrl('images/balloon.png')?>" alt="">
        </div>
        <!-- right-message -->
        <div class="right fr">
          <h2>
            IObit Uninstaller 8 PRO
            <span class="all-icons">+</span>
            Advanced SystemCare 12 PRO
          </h2>
          <div class="price">
            <!-- progress bar -->
            <div class="count">
              <p class="watching">
                <i class="all-icons"></i> <b id="packbox" class="reduceGift packbox"><span><b class="list"><strong>*</strong></b></span><span class="last"><b class="list"><strong>*</strong></b></span></b> seats left now!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <ul class="clearfix">
                <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching</li>
                <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">000</b> Ms* Left</li>
              </ul>
            </div>
            <p class="rate"><strong>$<big>19</big>.99</strong> <del>$79.98</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=asciu20181999&ref=<?php echo $popRefStr;?>&refs=purchase_iux "
               onclick="ga('send', 'event', 'iuascbuy', 'buy', 'iuascpurchase-xmas');">
              Activate Now
            </a>
            <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
            <p class="year">1 Year Subscription / 3 PCs</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- benfits start -->
  <div class="benfits">
    <div class="wrapper">
      <!-- title -->
      <h2>IObit’s Double Guarantee: Cleaner, Faster and Safer PC</h2>
      <!-- describe -->
      <p class="over">
        IObit Uninstaller 8 PRO together with world-leading tune-up utility – Advanced SystemCare 12 PRO, makes your old <br>
        computer run like new again and scrubs away every trace of stubborn programs.
      </p>
      <!-- content -->
      <div class="container clearfix">
        <!-- cleaner pc -->
        <dl class="cleaner">
          <dt>Cleaner PC</dt>
          <dd>
            <p>
              Deeply clean junk files, registries to <br>
              free up space
              <span>*Advanced SystemCare PRO only</span>
            </p>
            <p>
              Get rid of stubborn or bundled programs <br>
              to save space
              <span>*IObit Uninstaller PRO only</span>
            </p>
          </dd>
        </dl>
        <!-- faster browsing -->
        <dl class="faster">
          <dt>Faster Browsing</dt>
          <dd>
            <p>
              Optimize browser settings to speed up <br>
              internet to 300%* faster
              <span>*Advanced SystemCare PRO only</span>
            </p>
            <p>
              Get rid of ad-based plug-ins that slow <br>
              down browser
              <span>*IObit Uninstaller PRO only</span>
            </p>
          </dd>
        </dl>
        <!-- safer pc -->
        <dl class="safer">
          <dt>Safer PC</dt>
          <dd>
            <p>
              Keep personal data and online trace safe against <br>
              untrusted programs & malware
              <span>*Advanced SystemCare PRO only</span>
            </p>
            <p>
              Get rid of malicious bundleware and plug-ins
              <span>*IObit Uninstaller PRO only</span>
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- benfits end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper clearfix">
      <span class="arrow"><i></i></span>
      <!-- title -->
      <h2>Plus You Can Also Enjoy Following Amazing Features:</h2>
      <!-- icons -->
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-01.png" alt=""></dt>
        <dd>
          200%* Quicker <br>
          Startup
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-02.png" alt=""></dt>
        <dd>
          Digital Fingerprint <br>
          Protection
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-03.png" alt=""></dt>
        <dd>
          Auto RAM Clean
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-04.png" alt=""></dt>
        <dd>
          1-click to Update <br>
          All Software
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>So Don’t hesitate! Get These Two Powerful PC Optimization Tools Now </h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <b id="packbox" class="reduceGift packbox"><span><b class="list"><strong>*</strong></b></span><span class="last"><b class="list"><strong>*</strong></b></span></b> seats left now!
          </p>
        </div>
        <p><strong>$<big>19</big>.99</strong> <del>$79.98</del></p>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=asciu20181999&ref=<?php echo $popRefStr;?>&refs=purchase_iux "
           onclick="ga('send', 'event', 'iuascbuy', 'buy', 'iuascpurchase-xmas');">
          Activate Now
        </a>
        <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
        <p class="year">1 Year Subscription / 3 PCs</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="container clearfix">
    <div class="review wrapper">
      <div class="review-box">
        <!-- 01 -->
        <div class="reviews clearfix">
          <h2>User Review</h2>
          <h3>"My system has never run better."</h3>
          <p>"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</p>
        </div>
        <!-- 02 -->
        <div class="reviews clearfix">
          <h2>User Review</h2>
          <h3>"My choice is still overwhelmingly Advanced SystemCare Pro"</h3>
          <p>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</p>
        </div>
        <!-- 03 -->
        <div class="reviews clearfix active">
          <h2>Media Review</h2>
          <h3>"A PC optimization tool that wipes out security threats and helps stop new ones in their tracks."</h3>
          <p>"IObit Avanced SystemCare is one of our favorite PC cleanup and maintenance tools, and the latest version builds on an already great toolkit with new security-focused options."</p>
        </div>
        <!-- 04 -->
        <div class="reviews clearfix">
          <h2>Media Review</h2>
          <h3>"In short, if you use a Windows PC, you should download IObit Uninstaller to uninstall applications."</h3>
          <p>"If you're in need of an app that lets you cleanly and completely uninstall applications with ease, fire up IObit Uninstaller. This utility, now compatible with Windows 10, makes it a breeze to remove apps, including stray support files that are often left behind when a program is removed from a PC, and those pesky Web browser toolbars and plug-ins. In short, if you use a Windows PC, you should download IObit Uninstaller."</p>
        </div>
        <!-- 05 -->
        <div class="reviews clearfix">
          <h2>User Review</h2>
          <h3>IObit Uninstaller is a great tool for uninstalling programs and even toolbars and plugins.</h3>
          <p>"IObit Uninstaller is small and its interface is friendly. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. In general, this uninstaller delivers what it promises: thorough uninstallation. The performance alone makes this little uninstall tool worth keeping. "</p>
        </div>
        <!-- 06 -->
        <div class="reviews clearfix">
          <h2>User Review</h2>
          <h3>"Not only is it a great product, but the support is equally great"</h3>
          <p>"IObit Uninstaller is a great tool for uninstalling programs and even toolbars and plugins. Its use has been very helpful to me as it uninstalls programs and applications, as well as it cleans their associated register, in most cases unknown to users like myself. It has a nice and intuitive interface without needing major informatics skills. I recommend it strongly!"</p>
        </div>
      </div>

      <ul class="handle clearfix">
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Gordon-Griswold.png" alt="Gordon Griswold"><span></span></div>
          <strong>Gordon Griswold</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"><span></span></div>
          <strong>Charles R. Widick</strong>
        </li>
        <li class="active">
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/techradar.png" alt="Techradar"><span></span></div>
          <strong>Techradar</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/giga.png" alt="PC Magazine"><span></span></div>
          <strong>PC Magazine</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/makeuseof.jpg" alt="MakeUseOf"><span></span></div>
          <strong>MakeUseOf</strong>
        </li>
        <li class="last">
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/fernando.jpg" alt="Fernando Lourenço Gomes"><span></span></div>
          <strong>Fernando <br> Lourenço Gomes</strong>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>World-wide Awards</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
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
            <p>
              We’re confident that activating PRO edition will improve your PC performance for affordable price!
            </p>
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

      <!-- footer start -->
      <div class="footer">
        <dl>
          <dt>Note:</dt>
          <dd>*.Data may vary based on different system or computer.</dd>
          <dd>
            *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
          </dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
      </div>
      <!-- footer end -->

    </div>
  </div>

  <!-- floatlayer start -->
  <div class="floatlayer">
    <div class="wrapper clearfix">
      <!-- box -->
      <img class="fl" src="<?php echo $pResUrl;?>images/asc-floatlayer-box.png" alt="">
      <!-- progress bar -->
      <div class="price fl">
        <div class="count">
          <ul class="clearfix">
            <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <span class="packsNum"><?php echo $viewNum;?></span> seats left now! </li>
            <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms* Left</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
      </div>
      <div class="fr">
        <div class="price">
          <p><strong>$<big>19</big>.99</strong> <del>$79.98</del></p>
        </div>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=asciu20181999&ref=<?php echo $popRefStr;?>&refs=purchase_iux"
           onclick="ga('send', 'event', 'iuascbuy', 'buy', 'iuascpurchase-xmas');">
          Activate Now
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <!-- mask start -->
  <div class="mask"></div>
  <div class="mask-box">
    <div class="title">
      <h2>SURPRISE!! Merry Christmas to You</h2>
    </div>
    <div class="clearfix">
      <div class="fl left">
        <img src="<?php echo getStaticUrl('images/asc-mask-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fl">
        <h3>Extra $ <b>1</b> OFF as our gift for you!</h3>
        <p><strong>$<big>18</big>.<sup>99</sup></strong> <b>1 year / 3 PCs</b></p>
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=asciu20181899&ref=xr_iuasc1899<?php echo $refStr;?>&refs=purchase_iux"
           onclick="ga('send', 'event', 'iuascbuypop', 'buy', 'iuascpurchase-xmas');">
          Activate Now
        </a>
        <p class="year"> Seize your last chance for the big Christmas saving!</p>
      </div>
    </div>
  </div>
  <!-- mask end -->

</div>



<!-- backtotop start -->
<div id="backtotop" class="backtotop">top</div>
<!-- backtotop end -->


<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  var viewNum = "<?php echo $viewNum;?>";
</script>

</body>
</html>