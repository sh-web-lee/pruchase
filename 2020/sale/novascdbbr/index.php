<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enbtwob_p' . $date;
  $c_name_t='enbtwob_t' . $date;
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
  <title>80% OFF to Get ASC PRO & DB PRO - Black Friday Sale | IObit</title>
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
            <li>Advanced SystemCare 14 PRO <del>$49.99</del></li>
            <li>Driver Booster 8 PRO  <del>$74.85</del></li>
          </ul>
          <dl class="price">
            <dt>Only <strong>$<b>24</b>.97</strong> <del>$124.84</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=2020ascdb3pc2497&ref=br_ascdb<?= $refStr; ?>&refs=purchase_2bundlebf"
                   onclick="ga('send', 'event', 'ascdbbuy', 'buy', '2bundlepurchasebf-ascdb');    " class="buybtn">Get It Now</a></dd>
            <dd>1 Year Subscription / 3 PCs</dd>
          </dl>
        </div>
      </div>
      <div class="box">
        <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="">
        <dl>
          <dt>Clean & Fast PC Solution</dt>
          <dd><strong>$<b>14</b>.77</strong> <del>$49.99</del></dd>
          <dd><a href="https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=br_asc<?= $refStr; ?>&refs=purchase_2bundlebf"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', '2bundlepurchasebf-ascdb'); " class="border-buybtn">Get It Now</a></dd>
        </dl>
      </div>
      <div class="box right">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
        <dl>
          <dt>Stable & Secure PC Solution</dt>
          <dd><strong>$<b>19</b>.95</strong> <del>$74.85</del></dd>
          <dd><a href="https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_db<?= $refStr; ?>&refs=purchase_2bundlebf"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', '2bundlepurchasebf-ascdb');  " class="border-buybtn">Get It Now</a></dd>
        </dl>
      </div>
  </div>
    <div class="soldout-content hide">
      <div class="box">
        <img src="<?php echo getStaticUrl('images/asc-soldout-box.png')?>" alt="">
        <div class="message">
          <h3>Advacned SystemCare PRO</h3>
          <p>Clean & Fast PC Solution</p>
          <dl class="price">
            <dt><strong>$<b>14</b>.77</strong> <del>$49.99</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=br_ascsold<?= $refStr; ?>&refs=purchase_2bundlebf"
                   onclick="ga('send', 'event', 'ascsoldbuy', 'buy', '2bundlepurchasebf-ascdb'); " class="buybtn">Get It Now</a></dd>
            <dd>1 Year / 3 PCs</dd>
          </dl>
        </div>
      </div>
      <div class="box db">
        <img src="<?php echo getStaticUrl('images/db-soldout-box.png')?>" alt="">
        <div class="message">
          <h3>Driver Booster PRO</h3>
          <p>Stable & Secure PC Solution</p>
          <dl class="price">
            <dt><strong>$<b>19</b>.95</strong> <del>$74.85</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_dbsold<?= $refStr; ?>&refs=purchase_2bundlebf"
                   onclick="ga('send', 'event', 'dbsoldbuy', 'buy', '2bundlepurchasebf-ascdb');     " class="buybtn">Get It Now</a></dd>
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
		<dt><img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""> Advacned SystemCare PRO</dt>
		<dd>
			<strong>Speed Up Slow PC</strong>
			<p>Intelligently boost PC up to 200%* faster, and accelerate online surfing up to 300%* faster.</p>
			<strong>Maximize Privacy & Security</strong>
			<p>Clear online trace and block secret access to keep your privacy away from untrusted programs.</p>
		</dd>
  </dl>
  <div class="asc-left"><img src="<?php echo getStaticUrl('images/left-asc.png')?>" alt=""></div>
  <div class="db-right"><img src="<?php echo getStaticUrl('images/right-db.png')?>" alt=""></div>
	<img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" class="computer">
	<dl class="db">
		<dt><img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""> Driver Booster PRO</dt>
		<dd>
			<strong>Improve PC Stability</strong>
			<p>Unlock 4,500,000+ driver database to update more outdated & rare drivers to avoid freezing and crashes.</p>
			<strong>Peak Gaming Experience</strong>
			<p>Priority to update game-related drivers to experience advanced & new features.</p>
		</dd>
	</dl>
</div>
<!-- compare -->
<div class="compare">
	<div class="wrapper">
		<h2>Super Value Pack Unlocks All Other Premium Features</h2>
		<p>of both Advanced SystemCare and Driver Booster</p>
		<table>
			<thead>
				<tr>
					<th class="text"></th>
					<th class="itema">Advanced SystemCare <br> PRO</th>
					<th class="space"></th>
					<th class="itemb">Driver Booster <br>PRO </th>
					<th class="space"></th>
					<th class="itemc"><div>Super Value Pack</div></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="6" class="title">Maximum Optimization with AI </td>
				</tr>
				<tr>
					<td class="text">Deep clean registry to prevent system crash</td>
					<td class="itema"><i></i></td>
					<td class="space"></td>
					<td class="itemb"><span></span></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Auto RAM clean for smoother system running</td>
					<td class="itema"><i></i></td>
					<td class="space"></td>
					<td class="itemb"><span></span></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Disk optimization engine for quicker system speed</td>
					<td class="itema"><i></i></td>
					<td class="space"></td>
					<td class="itemb"><span></span></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Real-time protection from security threats</td>
					<td class="itema"><i></i></td>
					<td class="space"></td>
					<td class="itemb"><span></span></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td colspan="6" class="title">Auto Driver Updating </td>
				</tr>
				<tr>
					<td class="text">Large database with 4,500,000+ drivers support  </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Update and install network drivers offline  </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Priority to update the stability-first drivers </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Priority to update Game-Ready driver and components </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Easily fix device errors for better performance</td>
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
						<p><strong>$<b>14</b>.77</strong> <del>$49.99</del></p>
            <a href="https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=br_asc<?= $refStr; ?>&refs=purchase_2bundlebf"
              onclick="ga('send', 'event', 'ascbuy', 'buy', '2bundlepurchasebf-ascdb');" class="border-buybtn">Get It Now</a>
					</th>
					<th class="space"></th>
					<th class="itemb">
						<p><strong>$<b>19</b>.95</strong> <del>$74.85</del></p>
            <a href="https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_db<?= $refStr; ?>&refs=purchase_2bundlebf"
               onclick="ga('send', 'event', 'dbbuy', 'buy', '2bundlepurchasebf-ascdb');  " class="border-buybtn">Get It Now</a>
					</th>
					<th class="space"></th>
					<th class="itemc">
						<p><strong>$<b>24</b>.97</strong> <del>$124.84</del></p>
						<a href="https://www.iobit.com/buy.php?product=2020ascdb3pc2497&ref=br_ascdb<?= $refStr; ?>&refs=purchase_2bundlebf"
               onclick="ga('send', 'event', 'ascdbbuy', 'buy', '2bundlepurchasebf-ascdb');    "  class="buybtn">Get It Now</a>
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
					<dt><img src="<?php echo getStaticUrl('images/brendon-rourke.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>I have been using ASC for years now. I have recently tested the latest version V14. And it is by far the most comprehensive version to date. IObit continue to improve their Products and Technology. With more options and easier navigation that help find solutions. I don't need to shop elsewhere.</p>
						<h4>Brendon O'Rourke</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""></dt>
					<dd>
						<h3>Media Review</h3>
						<p>"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."</p>
						<h4>Cnet</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>What a surprise to receive the new Driver Booster from IObit. Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade. Once upgrading was complete it was as if my PC had a complete makeover. Sensational!</p>
						<h4>Harold Barr</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended.</p>
						<h4>Hishaam Salasa</h4>
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
      <dt><strong>$<b>24</b>.97</strong> <del>$124.84</del></dt>
      <dd><a class="buybtn"
            href="https://www.iobit.com/buy.php?product=2020ascdb3pc2497&ref=br_ascdb<?= $refStr; ?>&refs=purchase_2bundlebf"
            onclick="ga('send', 'event', 'ascdbbuy', 'buy', '2bundlepurchasebf-ascdb');    " >
			Get It Now
      </a></dd>
    </dl>
  </div>
  <div class="wrapper soldout hide clearfix">
    <div class="img-box"></div>
    <ul class="change">
      <li class="active">Advanced SystemCare 14 PRO </li>
      <li>Driver Booster 8 PRO</li>
    </ul>
      <dl class="price fr">
      <dt><strong>$<b>14</b>.77</strong> <del>$49.99</del></dt>
      <dd><a class="buybtn"
	  		 href="https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=br_ascsold<?= $refStr; ?>&refs=purchase_2bundlebf"
             onclick="ga('send', 'event', 'ascsoldbuy', 'buy', '2bundlepurchasebf-ascdb'); ">
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