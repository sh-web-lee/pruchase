<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }

if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='decxdb'.$date;
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
  include $pRootUrl.'include/common.inc.php';

$refStr='';
if(in_array($_GET['to'],array('iucross','iucrossgf'))){
  $refStr.='-'.$_GET['to'];
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>83% OFF to Get IObit Uninstaller PRO &amp; Exclusive Gift Package - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <?php if(!isEdge()):?>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,700i,900' rel='stylesheet' type='text/css'>
  <?php endif;?>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner -->
  <div class="banner">
    <div class="container">
      <div class="wrapper">
        <a class="logo" href="http://www.iobit.com/" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
        </a>
        <h1 class="title">IObit 14 Years Anniversary</h1>
        <!-- activity -->
        <div class="activity">
          <div class="steps mainstep">
            <h2>FIRST 2,000 ORDERS</h2>
            <p>83% OFF + Free Gift Pack</p>
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
              <dt><strong>IObit Uninstaller 8 PRO </strong></dt>
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
              <dt><strong>$16.77</strong> <span><del>$99.91</del> <em>83% OFF</em></span></dt>
              <dd>
                <a class="buybtn activebtn" href="https://www.iobit.com/buy.php?product=iu8pro1677cp&ref=iu8sdpf2019apr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-201904');">
                  Activate Now
                </a>
              </dd>
              <dd>Hurry up, <span class="countNum">00</span> left today!</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <!-- end banner -->
  
  <!-- benfits -->
  <div class="benfits wrapper">
    <h2>Powerfully Uninstall More Programs & Plug-ins for Lighter PC & Safer Online Browsing</h2>
    <div class="snapshoot">
      <img src="<?php echo getStaticUrl('images/snapshoot.jpg')?>" alt="" />
    </div>
    <div class="benfits-list clearfix">
      <div class="list fl">
        <img src="<?php echo getStaticUrl('images/benfits-icon-01.png')?>" alt="" />
        <dl>
          <dt>Bundleware Detection & Uninstall</dt>
          <dd>Detect and uninstall bundleware like adware, browser plug-ins, and other third-party software that may be part of the installation process.</dd>
        </dl>
      </div>
      <div class="list fr">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-02.png" alt="">
        <dl>
          <dt>Ad-free Browsing</dt>
          <dd>
            Powerfully uninstall ad-based & malicious plug-ins to ensure secure & clean browsing experience.
          </dd>
        </dl>
      </div>
      <div class="list fl">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-03.png" alt="">
        <dl>
          <dt>AutoClean</dt>
          <dd>Automatically detect & clean leftovers of uninstalled programs including those removed by other uninstallers.</dd>
        </dl>
      </div>
      <div class="list fr">
        <img src="<?php echo getStaticUrl('images/benfits-icon-04.png')?>" alt="" />
        <dl>
          <dt>Software Update</dt>
          <dd>
            With one click, upgrade your important software on your PC </br>
            without any user intervention.
          </dd>
        </dl>
      </div>
    </div>
    <a class="morelink" href="javascript:void(0);" onclick="goTaget($('.compar-tab'))">
      Learn more about PRO edition >>
    </a>
  </div>
  <!-- end benfits -->

  <!-- gift-pack -->
  <div class="gift-pack wrapper clearfix">
    <h2>Anniversary Gift Pack</h2>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/boxshot-sd.png" alt="Smart Defrag PRO"></dt>
      <dd><strong>Smart Defrag PRO</strong></dd>
      <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / 1 PC</dd>
      <dd>Get the Maximum Hard Drive <span>Performance!</span></dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/boxshot-pf.png" alt="Protected Folder"></dt>
      <dd><strong>Protected Folder</strong></dd>
      <dd class="price"><strong>$0</strong> <del>$19.99</del>  1 Y / 1 PC</dd>
      <dd>Never Worry about Data Theft or Privacy Leaks!</dd>
    </dl>
  </div>
  <!-- end gift-pack -->

  <!-- mid-cart -->
  <div class="midcart">
    <div class="container">
      <div class="showcase">
        <div class="details">
          <div class="imgcase"><img src="<?php echo getStaticUrl('images/boxshot-iu.png')?>" alt=""></div>
          <dl>
            <dt><strong>IObit Uninstaller 8 PRO </strong></dt>
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
            <dt><strong>$16.77</strong> <span><del>$99.91</del> <em>83% OFF</em></span></dt>
            <dd>
              <a class="buybtn activebtn"  href="https://www.iobit.com/buy.php?product=iu8pro1677cp&ref=iu8sdpf2019apr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-201904');">
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
        <li class="current">
          <a href="https://www.pcmag.com/" target="_blank">
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/giga.png" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </a>
        </li>
        <li>
          <a href="http://www.makeuseof.com/" target="_blank">
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/makeuseof.jpg" alt="MakeUseOf"></div>
            <p>MakeUseOf</p>
          </a>
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
            <th class="space"></td>
            <th class="item-free">IObit Uninstaller FREE</th>
            <th class="space"></td>
            <th class="item-pro">IObit Uninstaller PRO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>"></td>
            <td class="text">Uninstall programs via desk icon, opened window or system tray icon <img src="<?php echo getStaticUrl('images/new.png')?>"></td>
            <td class="space"></td>
            <td class="item-free checked"><span class="all-icons">√</span></td>
            <td class="space"></td>
            <td class="item-pro"><span class="all-icons solid">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>"></td>
            <td class="text">Remove extensions from edge, chrome, IE, firefox, etc. </td>
            <td class="space"></td>
            <td class="item-free checked"><span class="all-icons">√</span></td>
            <td class="space"></td>
            <td class="item-pro"><span class="all-icons solid">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>"></td>
            <td class="text">Support stubborn programs removal <img src="<?php echo getStaticUrl('images/improved.png')?>"> <span>3x <i></i></span></td>
            <td class="space"></td>
            <td class="item-free checked"><span class="all-icons">√</span></td>
            <td class="space"></td>
            <td class="item-pro"><span class="all-icons solid">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="text">Detect and uninstall third-party programs alongside freeware <img src="<?php echo getStaticUrl('images/new.png')?>"></td>
            <td class="space"></td>
            <td class="item-free fork"><span class="all-icons">√</span></td>
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
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>"></td>
            <td class="text">Support identifying and removing malicious plug-ins <img src="<?php echo getStaticUrl('images/improved.png')?>"> <span>2x <i></i></span></td>
            <td class="space"></td>
            <td class="item-free fork"><span class="all-icons">×</span></td>
            <td class="space"></td>
            <td class="item-pro"><span class="all-icons solid">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>"></td>
            <td class="text">Support identifying and removing advertising plug-ins <img src="<?php echo getStaticUrl('images/improved.png')?>"> <span>2x <i></i></span></td>
            <td class="space"></td>
            <td class="item-free fork"><span class="all-icons">×</span></td>
            <td class="space"></td>
            <td class="item-pro"><span class="all-icons solid">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" ></td>
            <td class="text">1-click to update all important software <img src="<?php echo getStaticUrl('images/improved.png')?>"> <span>5x <i></i></span></td>
            <td class="space"></td>
            <td class="item-free fork"><span class="all-icons">×</span></td>
            <td class="space"></td>
            <td class="item-pro"><span class="all-icons solid">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>"></td>
            <td class="text">Automatic update to latest version</td>
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
                <dt>$<strong>16.77</strong> <del>$99.91</del></dt>
                <dd>
                  <a class="buybtn activesmall"  href="https://www.iobit.com/buy.php?product=iu8pro1677cp&ref=iu8sdpf2019apr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-201904');">
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
    <!-- coupon start -->
  <div id="coupon" class="coupon on">
    <h2>VIP Discount</h2>
    <p class="name"><b><?php echo $productName;?></b> user only</p>
    <img src="<?php echo getStaticUrl('images/pop-off.png')?>" alt="EXTRA 10% OFF"/>
    <div class="copybox">
      <span id="ctxt" class="copy-txt">10OFF</span>
      <span id="cbtn" class="copy-btn">COPY</span>
    </div>
    <p>Copy and use it at checkout</p>
  </div>
  <!-- coupon end -->

  <script src="<?php echo $pResUrl; ?>script/TweenMax.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/clipboard.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>
</body>
</html>