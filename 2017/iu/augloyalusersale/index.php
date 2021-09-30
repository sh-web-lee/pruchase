<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  $exTime=empty(intval($_COOKIE['_ext']))?(empty($_GET['ext'])?0:intval(base64_decode($_GET['ext']))):intval($_COOKIE['_ext']);
  $exTime=0;
  $cTime=3600*24*2;
  setcookie('_ext',$exTime,time()+$cTime);
  include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Save 85% to Get IObit Uninstaller PRO &amp; Extra Loyal-user Gifts – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700,900'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit" />
      </a>
      <h4>We’re Turning 9, Celebrate with Us!</h4>
      <div class="title">
        <h1>85% OFF</h1>
        <h2>+ Loyal-user Gift for You</h2>
      </div>
      <!-- time -->
      <div class="time">
        <ul id="countdown" class="countdown">
          <li><strong>00</strong>h</li>
          <li><strong>00</strong>m</li>
          <li><strong>00</strong>s</li>
          <li><strong>000</strong>ms*</li>
        </ul>
        <span>left to grab this special reward</span>
      </div>
      <div class="pricebox">
        <p><strong><small>$</small>14.77</strong> <del>$79.92</del></p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=iu93pc14m&ref=iu93pc14maug2017a&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
           onclick="ga('send', 'event', 'iu14mbuy', 'buy', 'iupurchase-201708a');">
          <span>Activate Now - Save 85%</span>
          <i class="all-icons">></i>
        </a>
        <p>14 Months / 3 PCs</p>
      </div>
      <img class="iubox" src="<?php echo getStaticUrl('images/iuboxshot.png')?>" alt="" />
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="wrapper">

    <!-- payments start -->
    <div class="payments"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
    <!-- payments end -->

    <!-- new-feature start -->
    <div class="new-feature">
      <p>Why trusted by over <span>15,000,000</span> users worldwide?</p>
      <h2>IObit Uninstaller PRO Makes It A Breeze for All Uninstallation Needs </h2>
      <div class="feature-box clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/newfeature_01.png')?>" alt="" /></dt>
          <dd><h4>No Malicious Plug-ins</h4></dd>
          <dd>Powerfully uninstall ad-based &amp; <span>malicious plug-ins to ensure secure</span> &amp; clean browsing <span>experience.</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/newfeature_02.png')?>" alt="" /></dt>
          <dd><h4>Delete Bundled Items</h4></dd>
          <dd>When uninstalling the main <span>programs, you can get rid</span> of its bundled items at the <span>same time.</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/newfeature_03.png')?>" alt="" /></dt>
          <dd><h4>Auto Clean Leftovers</h4></dd>
          <dd>Automatically detect &amp; <span>clean leftovers of</span> uninstalled programs <span>including those removed by</span> other uninstallers.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/newfeature_04.png')?>" alt="" /></dt>
          <dd><h4>Installation Monitor</h4></dd>
          <dd>Monitor and record all<br> things that a program did to<br> your system during<br> installation and fully revert<br> all changes when the<br> program is no longer<br> needed.</dd>
        </dl>
      </div>
      <a class="comparbtn" href="javascript: void(0)">See comparison between FREE and PRO edition</a>
    </div>
    <!-- new-feature end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Save 85% to get IObit Uninstaller PRO &amp; loyal-user gift</h2>
      <div class="clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/iuboxshot_small.png')?>" alt="" />
        <div class="pricebox fl">
          <p><strong><small>$</small>14.77</strong> <del>$79.92</del></p>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=iu93pc14m&ref=iu93pc14maug2017a&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
             onclick="ga('send', 'event', 'iu14mbuy', 'buy', 'iupurchase-201708b');">
            <span>Activate Now - Save 85%</span>
            <i class="all-icons">></i>
          </a>
          <p>14 Months / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->
    
    <!-- review start -->
    <div class="review">
      <div class="content">
        <dl>
          <dt>
          <h3>User Review</h3></dt>
          <dd>
            <h4>"Uninstaller is great at finding the remnants of bits and bytes hiding here and there taking up disk spaces and impacting the register."</h4>
          </dd>
          <dd>"Uninstaller PRO is just one of five IObit family of ‘maintenance’ programs I have invested in my PC, like Chefs invested in their knives. Uninstaller is great at finding the remnants of bits and bytes hiding here and there taking up disk spaces and impacting the register. If I used the 'uninstall' of the software program to uninstall, it worked. But, Uninstaller PRO somehow popped up later and showed 35 files need to be cleared. All I need to do is click OK. Highly recommended and I bought a license for 3 PCs. Support service is courteous and excellent."
          </dd>
        </dl>
        <dl class="active">
          <dt>
          <h3>Media Review</h3></dt>
          <dd>
            <h4>"IObit Uninstaller is easily the best Windows uninstaller utility I've tested."</h4>
          </dd>
          <dd>"If you're in need of an app that lets you cleanly and completely uninstall applications with ease, fire up IObit Uninstaller. This utility, now compatible with Windows 10, makes it a breeze to remove apps, including stray support files that are often left behind when a program is removed from a PC, and those pesky Web browser toolbars and plug-ins. In short, if you use a Windows PC, you should download IObit Uninstaller."
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>User Review</h3></dt>
          <dd>
            <h4>"IObit Uninstaller is probably one of the best software to remove unnecessary program from your computer."</h4>
          </dd>
          <dd>"IObit Uninstaller is probably one of the best software to remove unnecessary program from your computer. Unlike the basic windows uninstaller that program will remove all leftovers of the program, which later may slow down performance of your PC. I have been using this program for a several years and always it helps to keep my computer clean and fast. I had recommended this program to some of my friends in the past and would recommend it again today."
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/joseph-yu.png" alt="Joseph Yu">
          </div>
          <p>Joseph Yu</p>
        </li>
        <li class="active">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc-magazine.png" alt="PC Magazine"></div>
          <p>PC Magazine</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/sergey-erlich.png" alt="Sergey Erlich">
          </div>
          <p>Sergey Erlich</p>
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th colspan="2"></th>
            <td class="space"></td>
            <th class="itemb">IObit Uninstaller 9 <span>FREE</span></th>
            <td class="space"></td>
            <th class="itema">IObit Uninstaller 9 <span>PRO</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Uninstall unwanted programs</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Uninstall bundled and unwanted programs <sup>improved</sup></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons line">-</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Remove regular plug-ins for quicker browsing</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Remove malicious plug-ins for cleaner &amp; quicker browsing <sup>improved</sup></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons line">-</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Auto delete leftovers of uninstalled programs</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Automatically scan leftovers on your PC <sup class="new">new</sup></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
            <td class="virtue">Record & revert system changes made by program installations <sup class="new">new</sup></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons line">-</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Auto delete leftovers that other utilities failed to remove <sup>improved</sup></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons line">-</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">1-click to update all important software <sup>improved</sup></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons line">-</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Automatic update to latest version</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons line">-</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Premium 24/7 technical support on demand</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons line">-</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th class="text" colspan="2">Save 85% and Get Loyal-user Gift Now</th>
            <td class="space"></td>
            <th class="itemb">Your Current Version</th>
            <td class="space"></td>
            <th class="itema">
              <p><strong><small>$</small>14.77</strong> <del>$79.92</del></p>
              <a  class="buybtn" 
                  href="https://www.iobit.com/buy.php?product=iu93pc14m&ref=iu93pc14maug2017a&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" 
                  onclick="ga('send', 'event', 'iu14mbuy', 'buy', 'iupurchase-201708c');">
                Activate Now
              </a>
              <p>14 Months / 3 PCs</p>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- comparison end -->
  </div>

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <p>As being trusted and awarded by those world-class media in the past eight years, you know you’ve got the right uninstaller.</p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd><h4>Money Back Guarantee</h4></dd>
          <dd>If you're not satisfied in the first 60 days, <span>we will give you back your money.</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/godaddy_secure.png')?>" alt="" /></dt>
          <dd><h4>Secure Payment</h4></dd>
          <dd>IObit supports several safe modes of <span>payment.</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt="" /></dt>
          <dd><h4>Get License</h4></dd>
          <dd>You will receive the license within a few <span>minutes after purchase.</span></dd>
        </dl>
      </div>
      <!-- service end -->

      <!-- annotation start -->
      <dl class="annotation">
        <dt>Note:</dt>
        <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      </dl>
      <!-- annotation end -->

      <!-- footer start -->
      <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->
  <!-- container end -->
<script>
  exTime=<?php echo $exTime;?>;
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>