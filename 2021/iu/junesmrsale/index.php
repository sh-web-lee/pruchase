<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}

if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='eniuxmas2020'.$date;
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

if(in_array($_GET['st'],array('iu_xmas','iuxmasr','iu_ascxmas','iu_dbxmas','iu_imfxmas'))){
  $refStr.='-'.$_GET['st'];
}

if(!empty($_GET['pop'])){
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

include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>70% OFF to Get IObit Uninstaller PRO &amp; Exclusive Gift Package - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <script src="https://www.googleoptimize.com/optimize.js?id=OPT-NDV7W55"></script>
  <?php if(!isEdge()):?>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,700i,900' rel='stylesheet' type='text/css'>
  <?php endif;?>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <script>
    function pageDevice(cName,devicePage){
      var queryStr = <?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
      var pageAb = cGet(cName);
      if (pageAb == 'tob') {
        window.location.replace(devicePage + queryStr);
      } else {
        if (pageAb == null) {
          randNum = Math.random();
          if (randNum > 0.5) {
            window.location.replace(devicePage + queryStr);
            cSet(cName, 'tob');
          } else {
            cSet(cName, 'toa');
          }
        }
      }
    }
    pageDevice('fansaleDevice','fansaleb.php')
    function cSet(name,value) {
        var Days = 2;
        var exp = new Date();
        name = name + exp.getDate()
        exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
        document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
    }
    function cGet(name) {
        var exp = new Date();
        name = name + exp.getDate();
        var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
        if (arr = document.cookie.match(reg))
            return unescape(arr[2]);
        else
            return null;
    }
    var paramTo=MApp(2.2).url.getParameters('to');
    var paramUser=MApp(2.2).url.getParameters('user');
    var queryStr = <?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
    if((paramTo=='softall')||(paramTo=='softnew')){
      var ver=MApp(2.2).url.getParameters('ver');
      var verArr=ver.split('.');
      if(((verArr[0]==8)&&(verArr[1]>=2))||(verArr[0]>8)){
        window.location.replace('iu8updater.php' + queryStr);
      }
    }else if(paramTo=='trd'){
//      pageDevice('entrdab','autoclean.php');
      window.location.replace('autoclean.php' + queryStr);
    }
    
    /*if(paramUser==1){
      if((paramTo=='prom_a')||(paramTo=='prom_b')||(paramTo=='activate')||(paramTo=='atim')||(paramTo=='atsb')||(paramTo=='atpl')||(paramTo=='atsu')||(paramTo=='uqprom')){
        pageDevice('eniufebsale_ab','febsale.php');
      }
    }*/
    //pageDevice('eniusummersaleabtest','summersale.php');
  </script>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <!-- wrapper -->
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
    </a>
    <h1 class="title">Spring Big Sale</h1>
    <!-- activity -->
    <div class="activity">
      <div class="steps mainstep">
        <h2>FIRST 2,000 ORDERS</h2>
        <p>70% OFF + Free Gift Pack</p>
        <div class="focus"></div>
        <em class="notice">Hurry up, <i class="countNum">00</i> left today!</em>
        <div class="progress">
          <div class="counter"><span class="countNum">00</span></div>
          <div class="bar-mask">
            <div class="progressbar"></div>
          </div>
          <em class="count"><i class="countNum">00</i> of 2,000 left</em>
        </div>
      </div>
      <div class="steps others">
        <h2>NEXT 3,000 ORDERS</h2>
        <p>40% OFF</p>
      </div>
      <div class="steps others">
        <h2>REST ALL ORDERS</h2>
        <p>10% OFF</p>
      </div>
    </div>
    <!-- end activity -->
    <div class="showcase">
      <div class="details">
        <div class="imgcase"><img src="<?php echo getStaticUrl('images/boxshot-iu.png')?>" alt="" /></div>
        <dl>
          <dt><strong>IObit Uninstaller 11 PRO </strong></dt>
          <dd>1 Year / 3 PCs &nbsp;&nbsp; <strong>$16.77</strong> <del>$59.93</del></dd>
        </dl>
        <ul>
          <li onclick="goTaget($('.gift-pack'))">
            <strong>Smart Defrag PRO <span>$0 </span></strong>
            <del>$19.99</del>
          </li>
          <li onclick="goTaget($('.gift-pack'))">
            <strong>Protected Folder <span>$0 </span></strong>
            <del>$19.99</del>
          </li>
        </ul>
      </div>
      <div class="checkout">
        <dl>
          <dt><strong>$16.77</strong> <span><del>$59.93</del> <em>70% OFF</em></span></dt>
          <dd>
            <a class="buybtn activebtn"
               href="https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsdpf<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-201812');">
              Activate Now
            </a>
          </dd>
          <dd>Hurry up, <span class="countNum">00</span> left today!</dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- benfits -->
<div class="benfits">
  <div class="wrapper">
    <h2>Powerfully Uninstall Programs, Keep Your Software Healthy and Enjoy Faster PC<br>–All With a Single Uninstaller!</h2>
    <div class="snapshoot">
      <img src="<?php echo getStaticUrl('images/snapshoot.png')?>" alt="" />
    </div>
    <div class="benfits-list clearfix">
      <div class="list fl">
        <img src="<?php echo getStaticUrl('images/benfits-icon-01.png')?>" alt="" />
        <dl>
          <dt>Uninstall Stubborn Programs</dt>
          <dd>
          Easily uninstall 1000+ stubborn programs <br/>that failed to remove through Control Panel<br> or other third-party utilities. 
          </dd>
        </dl>
      </div>
      <div class="list fr">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-02.png" alt="">
        <dl>
          <dt>Auto Clean Leftovers</dt>
          <dd>
            Automatically clean leftovers of uninstalled <br>
            programs, even those left by uninstallation with <br>
            other utillties.
          </dd>
        </dl>
      </div>
      <div class="list fl">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-03.png" alt="">
        <dl>
          <dt>No Malicious Software & Ads</dt>
          <dd>
            Quickly find and eliminate malware & ad-based <br>
            plugins to protect your privacy while surfing.
          </dd>
        </dl>
      </div>
      <div class="list fr">
        <img src="<?php echo getStaticUrl('images/benfits-icon-04.png')?>" alt="" />
        <dl>
          <dt>Better Software Performance</dt>
          <dd>
          1-click to manage software permission, disable<br> notifications, fix uninstall issues, and clean<br> installation files.
          </dd>
        </dl>
      </div>
      <div class="list fl">
        <img src="<?php echo getStaticUrl('images/benfits-icon-05.png')?>" alt="" />
        <dl>
          <dt>Real-time Installation Monitor</dt>
          <dd>
            Track all changes made to system during <br>
            program installation and fully revert them to the <br>
            pre-installation state when uninstalling.
          </dd>
        </dl>
      </div>
      <div class="list fr">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-06.png" alt="">
        <dl>
          <dt>1-click to Update Software</dt>
          <dd>
            Make it easy to keep all your software always up to <br>
            date to protect against privacy & security exploits.
          </dd>
        </dl>
      </div>
    </div>
    <a class="morelink" href="javascript:void(0);" onclick="goTaget($('.compar-tab'))">
      Learn more about PRO edition >>
    </a>
  </div>
</div>
<!-- end benfits -->

<!-- gift-pack -->
<div class="gift-pack wrapper clearfix">
  <h2>Valuable Gift Pack</h2>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/boxshot-sd.png" alt="Smart Defrag PRO"></dt>
    <dd class="prod-name"><strong>Smart Defrag PRO</strong></dd>
    <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / 1 PC</dd>
    <dd>Get the Maximum Hard Drive <span>Performance!</span></dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/boxshot-pf.png" alt="Protected Folder"></dt>
    <dd class="prod-name"><strong>Protected Folder</strong></dd>
    <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / 1 PC</dd>
    <dd>Never Worry about Data Theft or<br /> Privacy Leaks!</dd>
  </dl>
</div>
<!-- end gift-pack -->

<!-- mid-cart -->
<div class="midcart">
  <div class="mid-container">
    <div class="showcase">
      <div class="details">
        <div class="imgcase"><img src="<?php echo getStaticUrl('images/boxshot-iunew.png')?>" alt=""></div>
        <dl>
          <dt><strong>IObit Uninstaller 11 PRO </strong></dt>
          <dd>1 Year / 3 PCs   <strong>$16.77</strong> <del>$59.93</del></dd>
        </dl>
        <ul>
          <li onclick="goTaget($('.gift-pack'))">
            <i class="all-icons"></i>
            <strong>Smart Defrag PRO <span>$0 </span></strong>
            <del>$19.99</del>
          </li>
          <li onclick="goTaget($('.gift-pack'))">
            <i class="all-icons"></i>
            <strong>Protected Folder <span>$0 </span></strong>
            <del>$19.99</del>
          </li>
        </ul>
      </div>
      <div class="checkout">
        <dl>
          <dt><strong>$16.77</strong> <span><del>$59.93</del> <em>70% OFF</em></span></dt>
          <dd>
            <a class="buybtn activebtn"
               href="https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsdpf<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-201812');">
              Activate Now
            </a>
          </dd>
          <dd>Hurry up, <span class="countNum">00</span> left today!</dd>
        </dl>
      </div>
      <p><i class="all-icons"></i>100% 60-DAY MONEY BACK GUARANTEE </p>
    </div>
  </div>
</div>
<!-- end mid-cart -->

<!-- payments -->
<div class="paymanets wrapper clearfix">
  <dl class="fl clearfix">
    <dt class="fl"><img src="<?php echo $pResUrl; ?>images/money-back-guarantee.png" alt=""></dt>
    <dd class="fl">
      <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
      <p>
        We're confident that activating PRO edition will quickly uninstall <br>
        unwanted programs for affordable price!
      </p>
    </dd>
  </dl>
  <dl class="fr">
    <dt>We accept</dt>
    <dd><img src="<?php echo $pResUrl; ?>images/payments.png" alt=""></dd>
  </dl>
</div>
<!-- end payments -->

<!-- awards -->
<div class="awards">
  <div class="wrapper">
    <h2>World-wide Awards</h2>
    <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
  </div>
</div>
<!-- end awards -->

<!-- review -->
<div class="wrapper">
  <!-- reviews -->
  <div class="review">
    <div class="content">
      <dl class="active">
        <dt><h3>Media Review</h3></dt>
        <dd>
          "This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."
        </dd>
      </dl>
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>
          "IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."
        </dd>
      </dl>
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>
          This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."
        </dd>
      </dl>
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>
          "I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed. "
        </dd>
      </dl>
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>
          "IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">     
      <li class="current">
        <div class="pic"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf">
        </div>
        <p>MakeUseOf</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></div>
        <p>Ivan White</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/ali.png')?>" alt="Ali Tekin"></div>
        <p>Ali Tekin</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></div>
        <p>Samrat Kumar Chakrabortty</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></div>
        <p>John Glenn Perong</p>
      </li>
    </ul>
  </div>
  <!-- end reviews -->

  <!-- compar-tab start -->
  <div class="compar-tab wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th colspan="2" class="text">See what PRO edition can do for you:</th>
          <th class="space"></th>
          <th class="item-free">IObit Uninstaller FREE</th>
          <th class="space"></th>
          <th class="item-pro">IObit Uninstaller PRO</th>
        </tr>      
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>"></td>
          <td class="text">Uninstall unwanted programs, Windows apps and browser plug-ins</td>
          <td class="space"></td>
          <td class="item-free checked"><span class="all-icons">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>"></td>
          <td class="text">Automatically scan residual files after uninstalling</td>
          <td class="space"></td>
          <td class="item-free checked"><span class="all-icons">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>"></td>
          <td class="text">Manage software permissions and clean useless installation files <img src="<?php echo getStaticUrl('images/new.png')?>"></td>
          <td class="space"></td>
          <td class="item-free checked"><span class="all-icons">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_13.png')?>"></td>
          <td class="text">Block site & app notification prompts for smooth online experience </td>
          <td class="space"></td>
          <td class="item-free checked"><span class="all-icons">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>"></td>
          <td class="text">Auto delete leftovers that other utilities failed to remove <img src="<?php echo getStaticUrl('images/improved.png')?>"></td>
          <td class="space"></td>
          <td class="item-free fork"><span class="all-icons">×</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>"></td>
          <td class="text">Unique database supports removing 1000+ stubborn programs <img src="<?php echo getStaticUrl('images/improved.png')?>"></td>
          <td class="space"></td>
          <td class="item-free fork"><span class="all-icons">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_12.png')?>"></td>
          <td class="text">Record & revert system changes made by program installations <img src="<?php echo getStaticUrl('images/improved.png')?>"></td>
          <td class="space"></td>
          <td class="item-free fork"><span class="all-icons">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>"></td>
          <td class="text">Support to identify and remove malware & advertising plug-ins <img src="<?php echo getStaticUrl('images/improved.png')?>"></td>
          <td class="space"></td>
          <td class="item-free fork"><span class="all-icons">×</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="text">Detect and uninstall third-party programs alongside freeware </td>
          <td class="space"></td>
          <td class="item-free fork"><span class="all-icons">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr>
        <!-- <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>"></td>
          <td class="text">Support identifying and removing advertising plug-ins <img src="<?php echo getStaticUrl('images/improved.png')?>"></td>
          <td class="space"></td>
          <td class="item-free fork"><span class="all-icons">×</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr> -->
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" ></td>
          <td class="text">1-click to update all your important software <img src="<?php echo getStaticUrl('images/improved.png')?>"></td>
          <td class="space"></td>
          <td class="item-free fork"><span class="all-icons">×</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>"></td>
          <td class="text">Automatic update the latest version</td>
          <td class="space"></td>
          <td class="item-free fork"><span class="all-icons">×</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>"></td>
          <td class="text">Premium 24/7 technical support on demand</td>
          <td class="space"></td>
          <td class="item-free fork"><span class="all-icons">×</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons solid">√</span></td>
        </tr>      
      </tbody>
      <tfoot>
        <tr>
          <th colspan="2"></th>
          <th class="space"></td>
          <th class="item-free">IObit Uninstaller FREE</th>
          <th class="space"></td>
          <th class="item-pro">
            <dl>
              <dt>$<strong>16.77</strong> <del>$59.93</del></dt>
              <dd>
                <a class="buybtn activesmall"
                   href="https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsdpf<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu"
                   onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-201812');">
                  ACTIVATE NOW
                </a>
              </dd>
              <dd class="last">Hurry up, <span class="countNum">00</span> left today!</dd>
            </dl>
          </th>
        </tr>      
      </tfoot>
    </table>
  </div>
  <!-- compar-tab end -->
</div>
<!-- end review -->

<!-- annotation -->
<dl class="annotation wrapper">
  <dt>Note:</dt>
  <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
</dl>

<!-- footer -->
<div class="footer">
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
</div>

<!-- float -->
<div class="float clearfix">
  <img class="fl" src="<?php echo getStaticUrl('images/float_gift.png')?>" onclick="goTaget($('.gift-pack'))" alt="" />
  <div class="cont fl">
    <p>Hurry up,</p>
    <p>only <strong class="countNum">00</strong> free gift packs left.</p>
  </div>
</div>

<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>