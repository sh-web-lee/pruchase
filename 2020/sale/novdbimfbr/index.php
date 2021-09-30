<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enbtwobdbimf_p' . $date;
  $c_name_t='enbtwobdbimf_t' . $date;
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
  <title>80% OFF to Get DB PRO & IMF PRO - Black Friday Sale | IObit</title>
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
            <li>IObit Malware Fighter 8 PRO  <del>$54.95</del></li>
          </ul>
          <dl class="price">
            <dt>Only <strong>$<b>25</b>.96</strong> <del>$129.80</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=2020dbimf3pc2596&ref=br_dbimf<?= $refStr; ?>&refs=purchase_2bundlebf"
                   onclick="ga('send', 'event', 'dbimfbuy', 'buy', '2bundlepurchasebf-dbimf');  " class="buybtn">Get It Now</a></dd>
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
                 onclick="ga('send', 'event', 'dbbuy', 'buy', '2bundlepurchasebf-dbimf');  " class="border-buybtn">Get It Now</a></dd>
        </dl>
      </div>
      <div class="box right">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
        <dl>
          <dt>Safe & Secure PC Solution</dt>
          <dd><strong>$<b>16</b>.99</strong> <del>$54.95</del></dd>
          <dd><a href="https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=br_imf<?= $refStr; ?>&refs=purchase_2bundlebf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', '2bundlepurchasebf-dbimf');" class="border-buybtn">Get It Now</a></dd>
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
                   onclick="ga('send', 'event', 'dbsoldbuy', 'buy', '2bundlepurchasebf-dbimf');" class="buybtn">Get It Now</a></dd>
            <dd>1 Year / 3 PCs</dd>
          </dl>
        </div>
      </div>
      <div class="box db">
        <img src="<?php echo getStaticUrl('images/db-soldout-box.png')?>" alt="">
        <div class="message">
          <h3>IObit Malware Fighter PRO </h3>
          <p>Safe & Secure PC Solution</p>
          <dl class="price">
            <dt><strong>$<b>16</b>.99</strong> <del>$54.95</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=br_imfsold<?= $refStr; ?>&refs=purchase_2bundlebf"
                   onclick="ga('send', 'event', 'imfsoldbuy', 'buy', '2bundlepurchasebf-dbimf');" class="buybtn">Get It Now</a></dd>
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
  <div class="db-right"><img src="<?php echo getStaticUrl('images/right-db.png')?>" alt=""></div>
	<img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" class="computer">
	<dl class="db">
		<dt><img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""> IObit Malware Fighter PRO</dt>
		<dd>
			<strong>Bitdefender & IObit Engines</strong>
			<p>Detect and block over 209 million security threats with enhanced multi-engines in real time.</p>
			<strong>Protect Personal Data</strong>
			<p>Stop ransomware attacks, avoid malicious tracking, and protect personal data with password.</p>
		</dd>
	</dl>
</div>
<!-- compare -->
<div class="compare">
	<div class="wrapper">
		<h2>Super Value Pack Unlocks All Other Premium Features</h2>
		<p>of both Driver Booster and IObit Malware Fighter</p>
		<table>
			<thead>
				<tr>
					<th class="text"></th>
					<th class="itema">Driver Booster <br> PRO</th>
					<th class="space"></th>
					<th class="itemb">IObit Malware Fighter <br>PRO </th>
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
					<td colspan="6" class="title">Full-round PC Protection </td>
				</tr>
				<tr>
					<td class="text">Detect 200,000,000+ threats with Bitdefender engine </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Stop ransomware attempting to encrypt important files </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Safeguard your camera against unauthorized access  </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Prevent virus infection carried by USB disk & web mails    </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Auto clean surfing trace to avoid malicious tracking  </td>
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
                 			onclick="ga('send', 'event', 'dbbuy', 'buy', '2bundlepurchasebf-dbimf');  " class="border-buybtn">Get It Now</a>
					</th>
					<th class="space"></th>
					<th class="itemb">
						<p><strong>$<b>16</b>.99</strong> <del>$54.95</del></p>
            			<a href="https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=br_imf<?= $refStr; ?>&refs=purchase_2bundlebf"
                 		   onclick="ga('send', 'event', 'imfbuy', 'buy', '2bundlepurchasebf-dbimf');" class="border-buybtn">Get It Now</a>
					</th>
					<th class="space"></th>
					<th class="itemc">
						<p><strong>$<b>25</b>.96</strong> <del>$129.80</del></p>
						<a href="https://www.iobit.com/buy.php?product=2020dbimf3pc2596&ref=br_dbimf<?= $refStr; ?>&refs=purchase_2bundlebf"
                   		   onclick="ga('send', 'event', 'dbimfbuy', 'buy', '2bundlepurchasebf-dbimf');  "  class="buybtn">Get It Now</a>
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
					<dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
					<dd>
						<h3>User Review</h3>
						<p>I am very satisfied with your product IObit Malware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.</p>
						<h4>Gelu Batir</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"></dt>
					<dd>
						<h3>User Review</h3>
						<p>Overall with IObit products I have gotten great results even with the free versions as they have helped me and my computer. I would recommend IObit and all of their programs to anyone looking for protection and speediness of their computer and making life just that bit easier.</p>
						<h4>Adam Cullen</h4>
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
      <dt><strong>$<b>25</b>.96</strong> <del>$129.80</del></dt>
      <dd><a class="buybtn"
	  				href="https://www.iobit.com/buy.php?product=2020dbimf3pc2596&ref=br_dbimf<?= $refStr; ?>&refs=purchase_2bundlebf"
                   onclick="ga('send', 'event', 'dbimfbuy', 'buy', '2bundlepurchasebf-dbimf');  " >
			Get It Now
      </a></dd>
    </dl>
  </div>
  <div class="wrapper soldout hide clearfix">
    <div class="img-box"></div>
    <ul class="change">
      <li class="active">Driver Booster 8 PRO   </li>
      <li>IObit Malware Fighter 8 PRO</li>
    </ul>
      <dl class="price fr">
      <dt><strong>$<b>19</b>.95</strong> <del>$74.85</del></dt>
      <dd><a class="buybtn"
	  		 href="https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_dbsold<?= $refStr; ?>&refs=purchase_2bundlebf"
             onclick="ga('send', 'event', 'dbsoldbuy', 'buy', '2bundlepurchasebf-dbimf');">
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