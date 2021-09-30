<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'eniusummersale_p' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=78;
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
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
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

if(in_array($_GET['st'],array('iu_xmas','iuxmasr','iu_ascxmas','iu_dbxmas','iu_imfxmas'))){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(!empty($_GET['pop'])){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['user'])){
  $refStr.='-'.$_GET['user'];
}
if(!empty($_GET['insday'])){
  $refStr.='-'.$_GET['insday'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>83% OFF to Get IObit Uninstaller PRO Summer Bundle Set - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,600,700i,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
  </div>
  <h1>Summer’s  In the Air, Go Get the Hottest Deal</h1>
  <div class="wrapper clearfix">
    <div class="offer one">
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
      <span class="discount">50% OFF</span>
      <div class="price">
        <p><strong>$14.77</strong> <del>$29.99</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=iu9pro1477&ref=en-iu1pcsummer<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
           onclick="ga('send', 'event', 'iu1477buy', 'buy', 'iupurchase-2020summer');">
          Activate Now
        </a>
        <p>Save <b>$15.22</b></p>
      </div>
      <ul class="list">
        <li>IObit Uninstaller 9 PRO (1 Year / 1 PC)</li>
        <li><span class="line"></span></li>
        <li><span class="line"></span></li>
      </ul>
    </div>
    <div class="offer three">
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt=""/>
      <span class="discount">83% OFF</span>
      <div class="price">
        <p><strong>$16.77</strong> <del>$99.91</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=iu9bundle1677&ref=en-iu3pcsdpfsummer<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
           onclick="ga('send', 'event', 'iu1677buy', 'buy', 'iupurchase-2020summer');">
          Activate Now
        </a>
        <p>Save <b>$83.14</b></p>
      </div>
      <ul class="list">
        <li>IObit Uninstaller 9 PRO (1 Year / 3 PCs)</li>
        <li>Smart Defrag PRO (1 Year / 1 PC)</li>
        <li>Protected Folder (1 Year / 1 PC)</li>
      </ul>
      <div class="packsbox">Limited offer, only <b class="packsNum"><em>87</em></b> sets remaining!</div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Get Rid of Unwanted Programs Completely, Enjoy a Cleaner and Safer PC</h2>
    <div class="feature-box clearfix">
      <div class="feature-img fl">
        <ul>
          <li><img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/></li>
          <li><img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/></li>
          <li><img src="<?php echo getStaticUrl('images/screen03.png')?>" alt=""/></li>
          <li><img src="<?php echo getStaticUrl('images/screen04.png')?>" alt=""/></li>
          <li><img src="<?php echo getStaticUrl('images/screen05.png')?>" alt=""/></li>
        </ul>
      </div>
      <div class="feature-list fr">
        <dl>
          <dt><h4>Remove Bundled & Stubborn Programs</h4></dt>
          <dd>Completely delete programs that cannot be uninstalled normally</dd>
        </dl>
        <dl>
          <dt><h4>Clean Leftovers Automatically</h4></dt>
          <dd>Clean the leftover registry items, folders and files of programs</dd>
        </dl>
        <dl>
          <dt><h4>Remove Malicious & Advertising Plug-ins</h4></dt>
          <dd>Remove plug-ins & toolbars to protect your privacy data</dd>
        </dl>
        <dl>
          <dt><h4>1-click Software Updater</h4></dt>
          <dd>Keep your software updated to the latest versions with 1 click</dd>
        </dl>
        <dl>
          <dt><h4>Program Installation Monitor </h4></dt>
          <dd>Monitor & record system changes during program installation</dd>
        </dl>
      </div>
      <span class="arrow prev"></span>
      <span class="arrow next"></span>
    </div>
    <a class="more" href="javascript: void(0);">Learn more about PRO edition >></a>
  </div>
</div>
<!-- feature end -->

<!-- gifts start -->
<div class="gifts">
  <div class="wrapper">
    <h2>Get <b>83%</b> Off on Happy Summer Bundle Set for Better PC Optimization </h2>
    <div class="clearfix">
      <dl class="iu">
        <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 9 PRO"/></dt>
        <dd>
          <h4>IObit Uninstaller 9 PRO</h4>
          <p class="small">1 Year / 3 PC <del>$59.93</del></p>
          <p>Uninstall Unwanted Software</p>
        </dd>
      </dl>
      <dl class="sd">
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/></dt>
        <dd>
          <h4>Smart Defrag PRO</h4>
          <p class="small">1 Year / 1 PC <del>$19.99</del></p>
          <p>Max Hard Driver Performance</p>
        </dd>
      </dl>
      <dl class="pf">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd>
          <h4>Protected Folder</h4>
          <p class="small">1 Year / 1 PC <del>$19.99</del></p>
          <p>Important File Protector</p>
        </dd>
      </dl>
    </div>
    <h3 class="packsbox">The best deal has only <b class="packsNum"><em>87</em></b> left now, you don’t wanna miss this!</h3>
    <div class="price">
      <p><strong>$16.77</strong> <del>$99.91</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=iu9bundle1677&ref=en-iu3pcsdpfsummer<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
         onclick="ga('send', 'event', 'iu1677buy', 'buy', 'iupurchase-2020summer');">
        Activate Now
      </a>
    </div>
  </div>
</div>
<!-- gifts end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl class="fl clearfix">
    <dt class="fl"><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    <dd class="fl">
      <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
      <p>
        We're confident that activating PRO edition will quickly uninstall <br>
        unwanted programs for affordable price!
      </p>
    </dd>      
  </dl>
  <dl class="fr">
    <dt><h3>We accept</h3></dt>
    <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
  </dl>
</div>
<!-- service end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>World-wide Awards</h2>
  <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
</div>
<!-- awards end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>What Others Say</h2>
    <div class="review-box">
      <ul>
        <li>
          <div class="clearfix">
            <img class="fl" src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt=""/>
            <h3 class="fl"><b>Media review</b> MakeUseOf</h3>
          </div>
          <p>
            "This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."
          </p>
        </li>
        <li>
          <div class="clearfix">
            <img class="fl" src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt=""/>
            <h3 class="fl"><b>User Review</b> Lynette van Niekerk</h3>
          </div>
          <p>
            "I find IObit uninstaller excellent to use as it has all you could wish for. I love the fact that it uninstalls all the left over fragments. It also has a software updater which reminds you when one of the programs need updating, and the fact that it will uninstall batch programs really makes it a winner. In fact it is basically just what one needs to keep your computer good to go."
          </p>
        </li>
        <li>
          <div class="clearfix">
            <img class="fl" src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt=""/>
            <h3 class="fl"><b>User Review</b> Paulo Martins</h3>
          </div>
          <p>
            "IObit Uninstaller is the best software to remove programs on the computer, it is fast and very effective it does not compare anything with basic uninstaller of windows, it seriously cleans all the rest of the program and so there are no delays in the computer. I have been using it for a few months and I do not know how to live without it, I recommend it to my friends and family. Thanks IObit Uninstaller is fantastic."
          </p>
        </li>
        <li>
          <div class="clearfix">
            <img class="fl" src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt=""/>
            <h3 class="fl"><b>User Review</b> Lovro Žužić</h3>
          </div>
          <p>
            "The IObit Uninstaller gets better with every update. I've been using it for more than 3 years now. It's fast to load and has simple UI. Some of the many features I regularly use are Batch uninstall, Powerful scan, File shredder and Recently installed feature which gives me quick access to a program that I just installed which I don't like or it doesn't work properly."
          </p>
        </li>
      </ul>
    </div>
    <span class="arrow next"></span>
  </div>
</div>
<!-- review end -->

<!-- comparesion start -->
<div id="compare" class="comparesion">
  <div class="wrapper">
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
          <td class="text">Uninstall programs via desk icon, opened window or system tray icon </td>
          <td class="space"></td>
          <td class="item-free"><span class="all-icons">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>"></td>
          <td class="text">Remove extensions from edge, chrome, IE, firefox, etc. </td>
          <td class="space"></td>
          <td class="item-free"><span class="all-icons">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>"></td>
          <td class="text">Automatically scan leftovers on your PC <em class="tag new"><i>NEW</i></em></td>
          <td class="space"></td>
          <td class="item-free"><span class="all-icons">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>"></td>
          <td class="text">Support stubborn programs removal <em class="tag"><i>IMPROVED</i></em></td>
          <td class="space"></td>
          <td class="item-free"><span class="all-icons fork">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_12.png')?>"></td>
          <td class="text">Record & revert system changes made by program installations <em class="tag new"><i>NEW</i></em></td>
          <td class="space"></td>
          <td class="item-free"><span class="all-icons fork">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="text">Detect and uninstall third-party programs alongside freeware</td>
          <td class="space"></td>
          <td class="item-free"><span class="all-icons fork">√</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>"></td>
          <td class="text">Auto delete leftovers that other utilities failed to remove <em class="tag"><i>IMPROVED</i></em></td>
          <td class="space"></td>
          <td class="item-free"><span class="all-icons fork">×</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>"></td>
          <td class="text">Support identifying and removing malicious plug-ins <em class="tag"><i>IMPROVED</i></em></td>
          <td class="space"></td>
          <td class="item-free"><span class="all-icons fork">×</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>"></td>
          <td class="text">Support identifying and removing advertising plug-ins <em class="tag"><i>IMPROVED</i></em></td>
          <td class="space"></td>
          <td class="item-free"><span class="all-icons fork">×</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" ></td>
          <td class="text">1-click to update all important software <em class="tag"><i>IMPROVED</i></em></td>
          <td class="space"></td>
          <td class="item-free"><span class="all-icons fork">×</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>"></td>
          <td class="text">Automatic update to latest version</td>
          <td class="space"></td>
          <td class="item-free"><span class="all-icons fork">×</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>"></td>
          <td class="text">Premium 24/7 technical support on demand</td>
          <td class="space"></td>
          <td class="item-free"><span class="all-icons fork">×</span></td>
          <td class="space"></td>
          <td class="item-pro"><span class="all-icons orange">√</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- comparesion end -->

<!-- annotation -->
<dl class="note">
  <dt>Note: </dt>
  <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
</dl>

<!-- copyright -->
<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt=""/></div>
    <div class="packsbox fl">Only <b class="packsNum"><em>87</em></b> Happy Summer Bundle Sets Left</div>
    <div class="price fl">
      <p><strong>$16.77</strong> <del>$99.91</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=iu9bundle1677&ref=en-iu3pcsdpfsummer<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
         onclick="ga('send', 'event', 'iu1677buy', 'buy', 'iupurchase-2020summer');">
        Activate Now
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script type="text/javascript">
  var refStr = "<?php echo $refStr;?>";
  var imgSrc = "<?php echo getStaticUrl('images/iu-box.png')?>";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>