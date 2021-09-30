<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enbtwobsd_p' . $date;
  $c_name_t='enbtwobsd_t' . $date;
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
  <title>80% OFF to Get ASC PRO & SD PRO - Christmas Sale | IObit</title>
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
            <li>Smart Defrag 6 PRO <del>$39.99</del></li>
          </ul>
          <dl class="price">
            <dt>Only <strong>$<b>17</b>.99</strong> <del>$89.98</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=2020ascsd3pc1799&ref=xr_ascsd<?= $refStr; ?>&refs=purchase_2bundlexr"
                   onclick="ga('send', 'event', 'ascsdbuy', 'buy', '2bundlepurchasexr-ascsd');" class="buybtn">Get It Now</a></dd>
            <dd>1 Year Subscription / 3 PCs</dd>
          </dl>
        </div>
      </div>
      <div class="box">
        <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="">
        <dl>
          <dt>Clean & Fast PC Solution</dt>
          <dd><strong>$<b>14</b>.77</strong> <del>$49.99</del></dd>
          <dd><a href="https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=xr_asc<?= $refStr; ?>&refs=purchase_2bundlexr"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', '2bundlepurchasexr-ascsd');" class="border-buybtn">Get It Now</a></dd>
        </dl>
      </div>
      <div class="box right">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
        <dl>
          <dt>Hard Drive Boost Solution</dt>
          <dd><strong>$<b>11</b>.99</strong> <del>$39.99</del></dd>
          <dd><a href="https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sd<?= $refStr; ?>&refs=purchase_2bundlexr"
                 onclick="ga('send', 'event', 'sdbuy', 'buy', '2bundlepurchasexr-ascsd');  " class="border-buybtn">Get It Now</a></dd>
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
            <dd><a href="https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=xr_ascsold<?= $refStr; ?>&refs=purchase_2bundlexr"
                   onclick="ga('send', 'event', 'ascsoldbuy', 'buy', '2bundlepurchasexr-ascsd');  " class="buybtn">Get It Now</a></dd>
            <dd>1 Year / 3 PCs</dd>
          </dl>
        </div>
      </div>
      <div class="box db">
        <img src="<?php echo getStaticUrl('images/db-soldout-box.png')?>" alt="">
        <div class="message">
          <h3>Smart Defrag PRO</h3>
          <p>Hard Drive Boost Solution</p>
          <dl class="price">
            <dt><strong>$<b>11</b>.99</strong> <del>$39.99</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sdsold<?= $refStr; ?>&refs=purchase_2bundlexr"
                   onclick="ga('send', 'event', 'sdsoldbuy', 'buy', '2bundlepurchasexr-ascsd');  " class="buybtn">Get It Now</a></dd>
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
		<dt><img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""> Smart Defrag PRO</dt>
		<dd>
			<strong>Boost PC Performance</strong>
			<p>Deep defrag for up to 100%* faster PC startup, and up to 200%* faster file access & game launching.</p>
			<strong>Auto & Smart Defragment</strong>
			<p>Automatically and intelligently defragment files and disks at idle time without interruption.</p>
		</dd>
	</dl>
</div>
<!-- compare -->
<div class="compare">
	<div class="wrapper">
		<h2>Super Value Pack Unlocks All Other Premium Features</h2>
		<p>of both Advanced SystemCare and Smart Defrag</p>
		<table>
			<thead>
				<tr>
					<th class="text"></th>
					<th class="itema">Advanced SystemCare <br> PRO</th>
					<th class="space"></th>
					<th class="itemb">Smart Defrag <br>PRO </th>
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
					<td colspan="6" class="title">Auto Disk Defragmentation</td>
				</tr>
				<tr>
					<td class="text"> Boot Time Defrag for up to 100% faster PC Startup    </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text"> Deep defrag for up to 200% faster file access    </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text"> Schedule the defrag task at idle time       </td>
					<td class="itema"><span></span></td>
					<td class="space"></td>
					<td class="itemb"><i></i></td>
					<td class="space"></td>
					<td class="itemc"><i></i></td>
				</tr>
				<tr>
					<td class="text">Monitor the disk status in real-time </td>
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
            <a href="https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=xr_asc<?= $refStr; ?>&refs=purchase_2bundlexr"
               onclick="ga('send', 'event', 'ascbuy', 'buy', '2bundlepurchasexr-ascsd');" class="border-buybtn">Get It Now</a>
					</th>
					<th class="space"></th>
					<th class="itemb">
						<p><strong>$<b>11</b>.99</strong> <del>$39.99</del></p>
            <a  href="https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sd<?= $refStr; ?>&refs=purchase_2bundlexr"
                onclick="ga('send', 'event', 'sdbuy', 'buy', '2bundlepurchasexr-ascsd');  " class="border-buybtn">Get It Now</a>
					</th>
					<th class="space"></th>
					<th class="itemc">
						<p><strong>$<b>17</b>.99</strong> <del>$89.98</del></p>
						<a href="https://www.iobit.com/buy.php?product=2020ascsd3pc1799&ref=xr_ascsd<?= $refStr; ?>&refs=purchase_2bundlexr"
               onclick="ga('send', 'event', 'ascsdbuy', 'buy', '2bundlepurchasexr-ascsd');"  class="buybtn">Get It Now</a>
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
					<dt><img src="<?php echo getStaticUrl('images/amnon.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>"Smart defrag is a very well behaved disk defrag software, operating in the background whenever computer is idle so that you hardly notice it. As a result: drives are permanently defragmented allowing rapid access and less wear and tear. Smart defrag is the best Free disk defragmenter I've ever used and I'll definitely recommend it to my family and friends!"</p>
						<h4>Amnon</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/hans.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>"I am a user of Smart defrag for many years. Since using this fantastic software my desktop and my laptop are fast and save. Together with advance system care ultimate you have a complete tool for keeping you system up to date, fast and secure.Using it every day without need to wait (pc closes itself) you keep your system in top condition even if you have no technical background!"</p>
						<h4>Hans</h4>
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
      <p><strong class="viewNum">120</strong> visitors now, <strong class="buyNum">78</strong> seats left now.</p>
			</div>
      <dl class="price fr">
      <dt><strong>$<b>17</b>.99</strong> <del>$89.98</del></dt>
      <dd><a class="buybtn"
			      href="https://www.iobit.com/buy.php?product=2020ascsd3pc1799&ref=xr_ascsd<?= $refStr; ?>&refs=purchase_2bundlexr"
            onclick="ga('send', 'event', 'ascsdbuy', 'buy', '2bundlepurchasexr-ascsd');">
			Get It Now
      </a></dd>
    </dl>
  </div>
  <div class="wrapper soldout hide clearfix">
    <div class="img-box"></div>
    <ul class="change">
      <li class="active">Advanced SystemCare 14 PRO </li>
      <li>Smart Defrag 6 PRO</li>
    </ul>
      <dl class="price fr">
      <dt><strong>$<b>14</b>.77</strong> <del>$49.99</del></dt>
      <dd><a class="buybtn"
			       href="https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=xr_ascsold<?= $refStr; ?>&refs=purchase_2bundlexr"
             onclick="ga('send', 'event', 'ascsoldbuy', 'buy', '2bundlepurchasexr-ascsd');  ">
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