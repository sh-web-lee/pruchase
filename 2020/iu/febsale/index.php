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
	$c_name = 'eniufeb_p' . $date;
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
//{"promote":{"file":34051675,"reg":2,"task":1,"service":0,"plugin":0,"update":1}}
//if($_GET['data']){
  $transData=json_decode(base64_decode($_GET['data']));
  $preData=$transData->promote;
  $preDataArr=(array)$preData;
  $plugin=$preDataArr['plugin']==0||!isset($preDataArr['plugin'])?'Detect <b>malicious</b> plugins on browser':'<b>'.$preDataArr['plugin'].'</b> malicious plugins are detected';
  $update=$preDataArr['update']==0||!isset($preDataArr['update'])?'Keep <b>outdated</b> programs updated':'<b>'.$preDataArr['update'].'</b> program updates are ready';
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Up to 70% OFF on IObit Uninstaller PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">

  <!-- top -->
  <div class="top">
    <div class="wrapper">
      <ul class="clearfix">
        <li class="one">
          <h3>Log Installations</h3>
          <p>Monitor <b>changes</b> made by installation</p>
        </li>
        <li class="two">
          <h3>Delete stubborn programs</h3>
          <p>Remove program that <b>refuses</b> to uninstall</p>
        </li>
        <li class="three">
          <h3>Safe browsing</h3>
          <p><?php echo $plugin;?></p>
          <!-- add parameter 
          <p><b>5</b> malicious plugins are detected </p>
          -->
        </li>
        <li class="four">
          <h3>1-click software updater</h3>
          <p><?php echo $update;?></p>
          <!-- add parameter 
          <p><b>5</b> program updates are ready </p>
          -->
        </li>
      </ul>
    </div>
  </div>

  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <!-- panel -->
    <div class="panel">

      <!-- 1pc -->
      <div class="offer small">
        <h4>Personal</h4>
        <h5>IObit Uninstaller 9 PRO</h5>
        <!-- price -->
        <p class="price">$<b>14</b>.77 <del>$19.99</del></p>
        <p class="type"><span>1 PC, 1 Year</span></p>
        <!-- buybtn -->
        <a class="buybtn" 
        href="https://www.iobit.com/buy.php?product=iu91pc1477&ref=en-iu1pcfeb<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" 
        onclick="ga('send', 'event', 'iu1pcbuy', 'buy', 'iupurchase-202002');">
        Activate Now
        </a>
        <p class="save">SAVE 25%</p>
      </div>

      <!-- 3pcs -->
      <div class="offer large">
        <h4>Home</h4>
        <h5>IObit Uninstaller 9 PRO</h5>
        <p class="price">$<b>16</b>.77 <del>$59.93</del></p>
        <p class="type"><span>3 PCs, 1 Year</span></p>
        <!-- buybtn -->
        <a class="buybtn" 
        href="https://www.iobit.com/buy.php?product=iu9pro1677&ref=en-iu3pcsdpffeb<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" 
        onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-202002');">
        Activate Now
        </a>
        <p class="save">SAVE 75%</p>
        <!-- banner-bottom -->
        <div class="banner-bottom clearfix">
          <img src="<?php echo getStaticUrl('images/banner-gift.png');?>" alt="">
          <dl>
            <dd>
              <div class="numdown">
                <div class="numlist">
                  <strong><span><span>5</span></span></strong>
                  <strong class="last"><span><span>0</span></span></strong>
                </div>
                packs left today
              </div>
              <p class="note">
                <i class="all-icons"></i> Smart Defrag PRO <span></span>
                <i class="all-icons"></i> Protected Folder
              </p>
            </dd>
          </dl>
        </div>
      </div>

    </div>
  </div>
  
</div>
<!-- end banner -->

<!-- comparison -->
<div class="comparison wrapper">
  <span class="arrow"></span>
  <h2>Activate Pro Edition to Uninstall Programs Thoroughly and Easily</h2>
  <table>
    <thead>
      <tr>
        <th colspan="2"></th>
        <th class="space"></th>
        <th class="free" valign="bottom"><div>FREE</div></th>
        <th class="space"></th>
        <th class="pro"><div>PRO</div></th>
      </tr>
    </thead>
    <tbody>
      <!-- 01 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon01.png');?>" alt=""></td>
        <td class="text">1-click to uninstall programs and extensions</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons yes"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon02.png');?>" alt=""></td>
        <td class="text">
        Remove programs that can't be uninstalled by conventional means
        <small>Eg. AVG PC TuneUp, McAfee Security Scan Plus, Avira System Speedup, Reimage Repair, etc.</small>
        </td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon03.png');?>" alt=""></td>
        <td class="text">Monitor system changes made by installations for complete uninstall </td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon04.png');?>" alt=""></td>
        <td class="text">Uninstall third-party programs installed alongside freeware</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon05.png');?>" alt=""></td>
        <td class="text">Auto delete leftovers that other utilities failed to remove </td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon06.png');?>" alt=""></td>
        <td class="text">Identify and remove malicious & advertising plug-ins</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon07.png');?>" alt=""></td>
        <td class="text">One click to update all important software</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon08.png');?>" alt=""></td>
        <td class="text">Automatic update to latest version</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon09.png');?>" alt=""></td>
        <td class="text">Premium 24/7 technical support on demand</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="2"></th>
        <th class="space"></th>
        <th class="free">Your current version </th>
        <th class="space"></th>
        <th class="pro">
          <!-- buybtn -->
          <a class="buybtn" 
          href="https://www.iobit.com/buy.php?product=iu9pro1677&ref=en-iu3pcsdpffeb<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" 
          onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-202002');">
          Activate Now
          </a>
        </th>
      </tr>
    </tfoot>
  </table>
</div>
<!-- end comparison -->

<!-- review -->
<div class="review">
  <div class="wrapper">
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
          <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></dt>
          <dd>
            <h2>User Review</h2>
            <p>"I have used IObit programs for years with great effect ! For this reason I stay with IObit products. I, in the past have serviced and fixed laptops and mobiles (android) and always leave them, with IObit products installed, and ask them to regularly 'hit the big' C' and tell them it will automatically fix and speed up their laptop/computer/mobile! :) I highly recommend the uninstaller (and the latest beta) as a safe reliable program that shifts stubborn programs! Most importantly, remove 'hidden' coding that the programmer intended to leave, which then brings adverts to re-install again! IObit 'ALL' products are safe' and easy to use' most of all look after your PC's."</p>
            <cite>Jeff A Watts</cite>
          </dd>
        </dl> 

        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></dt>
          <dd>
            <h2>User Review</h2>
            <p>"I find IObit uninstaller excellent to use as it has all you could wish for. I love the fact that it uninstalls all the left over fragments. It also has a software updater which reminds you when one of the programs need updating, and the fact that it will uninstall batch programs really makes it a winner. In fact it is basically just what one needs to keep your computer good to go."</p>
            <cite>Lynette van Niekerk</cite>
          </dd>
        </dl>  

        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></dt>
          <dd>
            <h2>User Review</h2>
            <p>"IObit Uninstaller is the best software to remove programs on the computer, it is fast and very effective it does not compare anything with basic uninstaller of windows, it seriously cleans all the rest of the program and so there are no delays in the computer. I have been using it for a few months and I do not know how to live without it, I recommend it to my friends and family. Thanks IObit Uninstaller is fantastic."</p>
            <cite>Paulo Martins</cite>
          </dd>
        </dl>

        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></dt>
          <dd>
            <h2>User Review</h2>
            <p>"The IObit Uninstaller gets better with every update. I've been using it for more than 3 years now. It's fast to load and has simple UI. Some of the many features I regularly use are Batch uninstall, Powerful scan, File shredder and Recently installed feature which gives me quick access to a program that I just installed which I don't like or it doesn't work properly."</p>
            <cite>Lovro Žužić</cite>
          </dd>
        </dl>
      </div>  
    </div>
    <span class="arrow"></span>
  </div>
</div>
<!-- end review -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <h2>Activate Now to Get Two PC Optimizing Tools for Free</h2>
    <div class="gifts-content clearfix">
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/gifts-sd.png');?>" alt=""></dt>
        <dd>
          <h3>Smart Defrag PRO</h3>
          <h4><b>$0</b> <del>$19.99</del> 1 Year / 1 PC</h4>
          <p>Get the Maximum Hard Drive Performance!</p>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/gifts-pf.png');?>" alt=""></dt>
        <dd>
          <h3>Protected Folder</h3>
          <h4><b>$0</b> <del>$19.99</del> 1 Year / 1 PC</h4>
          <p>Never Worry about Data Theft or Privacy Leaks!</p>
        </dd>
      </dl>
    </div>
    <p class="numdown2">Quantity limited, <b class="packsNum">50</b> left now</p>
    <!-- buybtn -->
        <a class="buybtn" 
        href="https://www.iobit.com/buy.php?product=iu9pro1677&ref=en-iu3pcsdpffeb<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" 
        onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-202002');">
        Get It Now
        </a>
  </div>
</div>
<!-- end gifts -->

<!-- bottom -->
<div class="bottom">
    <div class="award wrapper ">
      <h2>World-wide Awards</h2>
      <p>As being trusted and awarded by those world-class media in the past eight years, you know you've got the right PC uninstaller. </p>
      <img src="<?php echo getStaticUrl('images/award.png?')?>" alt="">
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
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
<!-- end bottom -->


<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script type="text/javascript">
  var aff = "<?php echo $_GET['aff'];?>";
  var refStr = "<?php echo $refStr;?>";
</script>
</body>
</html>