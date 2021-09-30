<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(126,158);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='eniumon_b'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
      setcookie($cName,$packsNum);
    }
  }else{
    $packsNum=rand(78,98);
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

$refStr='';
if(in_array($_GET['st'],array('iu_xmas','iuxmasr','iu_ascxmas','iu_dbxmas','iu_imfxmas'))){
  $refStr.='-'.$_GET['st'];
}

if($_GET['pop']=='x_iu'){
  $refStr.='-'.$_GET['pop'];
}

if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}

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
  <title>Save up to 75% OFF on IObit Uninstaller PRO and Get free gift pack - IObit  </title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,500,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <!-- <script type="text/javascript">
  var lang = navigator.language||navigator.userLanguage;
  lan = lang.substr(0, 2);
  var queryStr = <?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
  if(lan=='fr') window.location.replace('https://purchase.iobit.com/fr/iu/installmonitorb.php' + queryStr);
  if(lan=='de') window.location.replace('https://purchase.iobit.com/de/iu/installmonitorb.php' + queryStr);
  if(lan=='es') window.location.replace('https://purchase.iobit.com/es/iu/installmonitorb.php' + queryStr);
  if(lan=='ru') window.location.replace('https://ru.iobit.com/purchase/iu/installmonitorb.php' + queryStr);
  if(lan=='it') window.location.replace('https://purchase.iobit.com/it/iu/installmonitorb.php' + queryStr);
  </script> -->
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>

</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
      <p class="choice">We will automatically record system changes made by each installation.</p>
      <div class="clearfix">
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO">
        </div>
        <div class="right-message">
          <h2>Upgrade to IObit Uninstaller 11 PRO</h2>
          <h3>Remove software without leaving any traces</h3>
          <p class="price"><strong>$<b>14</b>.77</strong> <del>$59.93</del></p>
          <p class="pc">1 Year Subscription / 3 PCs</p>
          <ul class="btnbox">
            <li>
              <div class="numberbox">
                <span class="scroll"><em>0</em></span>
                <span class="scroll"><em>0</em></span>
                <span class="scroll"><em>5</em></span>
                <span class="scroll last"><em>0</em></span>
              </div>
              <p class="hurry">Hurry, only <span class="gift">50</span> left at this cost!</p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=iu113pc1477&ref=en-iu3pcmonitorb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu"
                 onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-monitorb');">
                Activate Now 
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end-->

  <!-- feature -->
  <div class="feature">
    <div class="wrapper">
      <div class="title-small">
        <h2>Why Upgrade to IObit Uninstaller 11 PRO?</h2>
        <span>Clean</span>
      </div>
      <div class="feature-box clearfix">
        <div class="feature-list left fl">
          <h3>Easier</h3>
          <p>
            1-click to remove any programs, including corrupted & stubborn programs that refuse to be uninstalled by regular means.
          </p>
          <img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/>
        </div>
        <div class="feature-list right fr">
          <h3>Cleaner</h3>
          <p>
            Automatically delete all files and registries of no longer needed programs for keeping your computer absolutely clean. 
          </p>
          <img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/>
        </div>
        <img class="screen" src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <b class="uninstall">uninstall</b>
      </div>
      <span class="arrow-down"></span>
    </div>
  </div>
  <!-- feature end -->

  <!-- benfits -->
  <div class="benfits">
    <div class="wrapper">
      <h2>What Other Benefits Can I Get from<br> IObit Uninstaller PRO?</h2>
      <div class="benfits-box">
        <img class="screen" src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
        <dl class="list01">
          <dt>Better Software Performance</dt>
          <dd>
            1-click to manage software permission, disable notifications, fix uninstall issues, and clean installation files.
          </dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
        <dl class="list02">
          <dt>Software Updater</dt>
          <dd>1-click to upgrade all your important software without opening a web browser.</dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
        <dl class="list03 green">
          <dt>In-depth Clean</dt>
          <dd>Auto clean leftover files of programs uninstalled without using IObit Uninstaller.</dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
        <dl class="list04 green">
          <dt>Fast & Safe Surfing</dt>
          <dd>Quickly find and eliminate malware & ad-based plug-ins to ensure secure surfing experience.</dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- benfits end -->

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
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>" This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."</p>
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
  <!-- review end -->
  
  <div class="bottom">
    <div class="award wrapper ">
      <h2>World-wide Awards</h2>
      <p>As being trusted and awarded by those world-class media in the past ten years, you know you’ve got the right PC uninstaller.</p>
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


  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=" IObit Uninstalller PRO">
      </div>
      <ul class="btnbox fr">
        <li>
          <div class="numberbox">
            <span class="scroll"><em>0</em></span>
            <span class="scroll"><em>0</em></span>
            <span class="scroll"><em>5</em></span>
            <span class="scroll last"><em>0</em></span>
          </div>
          <p class="hurry">
            <span class="viewNum"><?php echo $viewNum;?></span> visitors now, only <span class="gift">50</span> left at this cost!
          </p>
        </li>
        <li class="clearfix">
          <div class="price fl"><del>$59.93</del> <strong>$<b>14</b>.77</strong></div>
          <a class="buybtn fr"
             href="https://www.iobit.com/buy.php?product=iu113pc1477&ref=en-iu3pcmonitorb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu"
             onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-monitorb');">
            Activate Now 
          </a>
        </li>
      </ul>
    </div>
  </div>


  <div class="pop-over">
    <h2>Surprise! Free Gifts for Our Lucky Visitor</h2>
    <h3>Activate IObit Uninstaller Pro Today to Get Your Free Gifts (Value $39.98)</h3>
    <p>Limited Offer! Ends in <strong><span class="count-time">60</span>s</strong></p>
    <img src="<?php echo getStaticUrl('images/pop-iu-box.png')?>" alt=" IObit Uninstalller PRO" class="imgbox">
    <a class="buybtn buybtn-pop" 
       href="https://www.iobit.com/buy.php?product=iu11sdpf1477&ref=en-iu3pcsdpfpopmonitorb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" 
       onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-monitorb ');" >
      Get My Free Gifts
    </a>
  </div>
  <div class="pop-bg "><span class="close">X</span></div>

  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>