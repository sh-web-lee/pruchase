<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enbtwobdbiu_p' . $date;
  $c_name_t='enbtwobdbiu_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(105,124);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr = (empty($_GET['ref']) ? '' : ('-' . $_GET['ref']));
$refStr .=  (empty($_GET['st']) ? '' : ('-' . $_GET['st']));
$refStr .=  (empty($_GET['pop']) ? '' : ('-' . $_GET['pop']));
$refStr .=  (empty($_GET['r']) ? '' : ('-' . $_GET['r']));
include $pRootUrl.'include/common.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>80% OFF to Get DB PRO & IU PRO - Black Friday Sale | IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Best BLACK Friday Discount Offered</h1>
    <!-- content -->
   <div class="default">
      <div class="content">
        <img src="<?php echo getStaticUrl('images/asc-box-bundle.png')?>" alt="">
        <span class="gift"><strong>23</strong><b>23</b></span>
        <div class="right-message">
          <div class="numer">
          Hurry!  
          <span id="topNum" class="giftNum">
            <b class="nwrap"><b class="numlist"><span>0</span></b></b>
            <b class="nwrap"><b class="numlist"><span>0</span></b></b>
            <b class="nwrap"><b class="numlist"><span>0</span></b></b>
          </span>          
            packs left
          </div>
          <ul>
            <li>Driver Booster 8 PRO <del>$74.85</del></li>
            <li>IObit Uninstaller 10 PRO  <del>$42.99</del></li>
          </ul>
          <dl class="price">
            <dt>Only <strong>$<b>23</b>.57</strong> <del>$117.84</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=2020dbiu3pc2357&ref=br_dbiu<?= $refStr; ?>&refs=purchase_2bundlebf"
                   onclick="ga('send', 'event', 'dbiubuy', 'buy', '2bundlepurchasebf-dbiu');" class="buybtn">Get It Now</a></dd>
            <dd>1 Year Subscription / 3 PCs</dd>
          </dl>
        </div>
      </div>
      <div class="box">
        <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="">
        <dl>
          <dt>Stable & Secure PC Solution</dt>
          <dd><strong>$<b>19</b>.95</strong> <del>$74.85</del></dd>
          <dd><a href="https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_db<?= $refStr; ?>&refs=purchase_2bundlebf"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', '2bundlepurchasebf-dbiu');  " class="border-buybtn">Get It Now</a></dd>
        </dl>
      </div>
      <div class="box right">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
        <dl>
          <dt>Complete Uninstall Solution</dt>
          <dd><strong>$<b>12</b>.97</strong> <del>$42.99</del></dd>
          <dd><a href="https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=br_iu<?= $refStr; ?>&refs=purchase_2bundlebf"
                 onclick="ga('send', 'event', 'iubuy', 'buy', '2bundlepurchasebf-dbiu');" class="border-buybtn">Get It Now</a></dd>
        </dl>
      </div>
  </div>
    <div class="soldout-content hide">
      <div class="box">
        <img src="<?php echo getStaticUrl('images/asc-soldout-box.png')?>" alt="">
        <div class="message">
          <h3>Driver Booster PRO</h3>
          <p>Stable & Secure PC Solution</p>
          <dl class="price">
            <dt><strong>$<b>19</b>.95</strong> <del>$74.85</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_dbsold<?= $refStr; ?>&refs=purchase_2bundlebf"
             	   onclick="ga('send', 'event', 'dbsoldbuy', 'buy', '2bundlepurchasebf-dbiu');" class="buybtn">Get It Now</a></dd>
            <dd>1 Year / 3 PCs</dd>
          </dl>
        </div>
      </div>
      <div class="box db">
        <img src="<?php echo getStaticUrl('images/db-soldout-box.png')?>" alt="">
        <div class="message">
          <h3>IObit Uninstaller PRO </h3>
          <p>Complete Uninstall Solution</p>
          <dl class="price">
            <dt><strong>$<b>12</b>.97</strong> <del>$42.99</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=br_iusold<?= $refStr; ?>&refs=purchase_2bundlebf"
                   onclick="ga('send', 'event', 'iusoldbuy', 'buy', '2bundlepurchasebf-dbiu');" class="buybtn">Get It Now</a></dd>
            <dd>1 Year / 3 PCs</dd>
          </dl>
        </div>
      </div>
      <div class="content-sold"></div>
    </div>
  </div>
</div>
<!-- end banner -->
<div class="feature wrapper">
	<h2>One-Off Super Value Deal, Double PC Performance</h2>
	<dl>
		<dt><img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""> Driver Booster PRO</dt>
		<dd>
			<strong>Improve PC Stability</strong>
			<p>Unlock 4,500,000+ driver database to update more outdated & rare drivers to avoid freezing and crashes.</p>
			<strong>Peak Gaming Experience</strong>
			<p>Priority to update game-related drivers to experience advanced & new features.</p>
		</dd>
  </dl>
  <div class="asc-left"><img src="<?php echo getStaticUrl('images/left-asc.png')?>" alt=""></div>
  <div class="db-right"><img src="<?php echo getStaticUrl('images/right-iu.png')?>" alt=""></div>
	<img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" class="computer">
	<dl class="db">
		<dt><img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""> IObit Uninstaller PRO</dt>
		<dd>
			<strong>Remove Anything Unwanted</strong>
			<p>Uninstall bundled & stubborn programs, malicious plug-ins and useless Windows Apps with ease.</p>
			<strong>Uninstall Everything Completely</strong>
			<p>Auto delete and deep clean files, registries as well as leftovers left by other utilities’ uninstallation.</p>
		</dd>
	</dl>
</div>
<!-- compare -->
<div class="compare">
	<div class="wrapper">
		<h2>Super Value Pack Unlocks All Other Premium Features</h2>
		<p>of both Driver Booster and IObit Uninstaller</p>
		<table>
			<thead>
				<tr>
					<th class="text"></th>
					<th class="itema">Driver Booster <br> PRO</th>
					<th class="space"></th>
					<th class="itemb">IObit Uninstaller <br>PRO </th>
					<th class="space"></th>
					<th class="itemc"><div>Super Value Pack</div></th>
				</tr>
			</thead>
			<tbody>
			<tr>
					<td colspan="6" class="title">Auto Driver Updating </td>
				</tr>
				<tr>
					<td class="text">Large database with 4,500,000+ drivers support  </td>
					<td class="itema"><i></i></td>
					<td class="space"></td>
					<td class="itemb"><span></span></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Update and install network drivers offline  </td>
					<td class="itema"><i></i></td>
					<td class="space"></td>
					<td class="itemb"><span></span></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Priority to update the stability-first drivers </td>
					<td class="itema"><i></i></td>
					<td class="space"></td>
					<td class="itemb"><span></span></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Priority to update Game-Ready driver and components </td>
					<td class="itema"><i></i></td>
					<td class="space"></td>
					<td class="itemb"><span></span></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Easily fix device errors for better performance</td>
					<td class="itema"><i></i></td>
					<td class="space"></td>
					<td class="itemb"><span></span></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td colspan="6" class="title">Powerful but Easy Uninstallation </td>
				</tr>
				<tr>
					<td class="text"> Monitor & revert system changes made by installations  </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text"> Support removing stubborn programs completely </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Uninstall third-party programs alongside freeware  </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text"> Identify and remove malicious & advertising plug-ins  </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr class="last">
					<td class="text">Discount</td>
					<td class="itema">70% Off  </td>
					<td class="space"></td>
					<td class="itemb">70% Off  </td>
					<td class="space"></td>
					<td class="itemc">80% Off  </td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th class="text"></th>
					<th class="itema">
						<p><strong>$<b>19</b>.95</strong> <del>$74.85</del></p>
            			<a href="https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_db<?= $refStr; ?>&refs=purchase_2bundlebf"
                 		   onclick="ga('send', 'event', 'dbbuy', 'buy', '2bundlepurchasebf-dbiu');  " class="border-buybtn">Get It Now</a>
					</th>
					<th class="space"></th>
					<th class="itemb">
						<p><strong>$<b>12</b>.97</strong> <del>$42.99</del></p>
            			<a href="https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=br_iu<?= $refStr; ?>&refs=purchase_2bundlebf"
                 		   onclick="ga('send', 'event', 'iubuy', 'buy', '2bundlepurchasebf-dbiu');"  class="border-buybtn">Get It Now</a>
					</th>
					<th class="space"></th>
					<th class="itemc">
						<p><strong>$<b>23</b>.57</strong> <del>$117.84</del></p>
						<a href="https://www.iobit.com/buy.php?product=2020dbiu3pc2357&ref=br_dbiu<?= $refStr; ?>&refs=purchase_2bundlebf"
                   			onclick="ga('send', 'event', 'dbiubuy', 'buy', '2bundlepurchasebf-dbiu');"  class="buybtn">Get It Now</a>
					</th>
				</tr>
			</tfoot> 
		</table>
	</div>		
</div>
<!-- end compare -->
<div class="award wrapper">
	<h2>Trusted and awarded by these media</h2>
	<img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
</div>
<div class="review wrapper">
	<div class="content">
    <span class="next"></span>
    <span class="prev"></span>
		<div class="message">
			<div class="roll">
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>What a surprise to receive the new Driver Booster from IObit. Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade. Once upgrading was complete it was as if my PC had a complete makeover. Sensational!</p>
						<h4>Harold Barr</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="PC Magazine"></dt>
					<dd>
						<h3>Media Review</h3>
						<p>Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.</p>
						<h4>PC Magazine</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></dt>
					<dd>
						<h3>User Review</h3>
						<p>"IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."</p>
						<h4>Ivan White</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/ali.png')?>" alt="Ali Tekin"></dt>
					<dd>
						<h3>User Review</h3>
						<p>This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."</p>
						<h4>Ali Tekin</h4>
					</dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<!-- service -->
<div class="service">
  <div class="wrapper">
	  <div class="clearfix">
		  <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
          <p>We're confident that activating PRO edition will maximize your <br> PC performance and security for an affordable price!</p>
        </dd>
		  </dl>
		  <dl class="last">
        <dt><h3>We accept</h3></dt>
        <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""></dd>
		  </dl>
	  </div>
    <div class="note">
		<p>Note:</p>
		<p>*.Data may vary based on different system or computer.</p>
		<p>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</p>
	</div>
	<div class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
  </div>
</div>
<!-- end service -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper default  clearfix">
    <div class="left fl">
      <img class="pc" src="<?php echo getStaticUrl('images/fl-asc-box.png')?>" alt=""/>
    </div>
    <div class="numer">
			<span id="botNum" class="giftNum">
				<b class="nwrap"><b class="numlist"><span>0</span></b></b>
        <b class="nwrap"><b class="numlist"><span>0</span></b></b>
        <b class="nwrap"><b class="numlist"><span>0</span></b></b>
			</span>          
      Packs left only!
			</div>
      <dl class="price fr">
      <dt><strong>$<b>23</b>.57</strong> <del>$117.84</del></dt>
      <dd><a class="buybtn"
	  				href="https://www.iobit.com/buy.php?product=2020dbiu3pc2357&ref=br_dbiu<?= $refStr; ?>&refs=purchase_2bundlebf"
                   onclick="ga('send', 'event', 'dbiubuy', 'buy', '2bundlepurchasebf-dbiu');" >
			Get It Now
      </a></dd>
    </dl>
  </div>
  <div class="wrapper soldout hide clearfix">
    <div class="img-box"></div>
    <ul class="change">
      <li class="active">Driver Booster 8 PRO   </li>
      <li> IObit Uninstaller 10 PRO</li>
    </ul>
      <dl class="price fr">
      <dt><strong>$<b>19</b>.95</strong> <del>$74.85</del></dt>
      <dd><a class="buybtn"
	  		 href="https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_dbsold<?= $refStr; ?>&refs=purchase_2bundlebf"
             onclick="ga('send', 'event', 'dbsoldbuy', 'buy', '2bundlepurchasebf-dbiu');">
		 Get It Now
      </a></dd>
    </dl>
  </div>
</div>
<!-- floatlayer end -->
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>