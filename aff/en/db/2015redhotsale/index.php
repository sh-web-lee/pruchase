<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../../';
	}
	include $pRootUrl.'include/common.inc.php';
	//if (empty($_GET['ref'])) $_GET['ref'] = '';
	$_GET['ref'] = '2014july';
	
	function microtime_float(){
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}
	$buyNum = ceil(microtime_float()*1000/20000)-67875499;
	
	$packsNum = ceil(microtime_float()*2000/20000);
	$packsNum = 360-($packsNum%360);
	if ($_GET['action'] == 'getPacks'){
		echo $packsNum;
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Red Hot Sale - the best deal ever for Advanced SystemCare PRO</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>style/style.css"/>
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="banner" class="wrapper">
  <dl>
    <dd>Automatically Identify Missing, Broken and Outdated Drivers</dd>
    <dd>One-click to Update All Outdated Drivers to the Latest Version</dd>
    <dd>Specialized Driver Tweaking for Better Gaming Experience</dd>
    <dd>Backup Drivers for Safe Restore</dd>
    <dt>
      <img src="<?php echo $pResUrl; ?>images/shop.png"><strong>only $14.37</strong> <del>$28.95</del>
      <span>1 year subscription / 3PCs</span>
      <a href="https://store.iobit.com/order/checkout.php?PRODS=4631623&QTY=1&CART=1&COUPON=2015RD" onClick="ga ('send', 'event', 'dbbuy', 'buy', 'aff-en-redhotsale2015' );" class="activebtn">BUY NOW </a>
      <span>Supports Windows 2000/XP/Vista/7/8/8.1</span>
     </dt>
  </dl>
</div>
<div class="clear"></div>
<!--payments-->
<div class="payments">
  <div class="wrapper">
    <dl>
      <dt>Accepted Payments </dt>
      <dd><img src="images/payments.jpg"></dd>
    </dl>
    <dl>
      <dt>Money Back Guarantee </dt>
      <dd><img src="images/days.jpg"></dd>
    </dl>    
    <dl>
      <dt>Support Service </dt>
      <dd>Free 24/7 Technical Support</dd>
      <dd>Live Chat Service</dd>
    </dl>
  </div>    
</div>
<div class="wrapper">
  <dl class="product">
  	<dt>Enjoy more Stable PC Performance with Driver Booster 2 PRO </dt>
    <dd>
    	<strong>only $14.37</strong> <del>$28.95</del>
    	<span>1 year subscription / 3PCs</span>
    </dd>
    <dd><a href="https://store.iobit.com/order/checkout.php?PRODS=4631623&QTY=1&CART=1&COUPON=2015RD" onClick="ga ('send', 'event', 'dbbuy', 'buy', 'aff-en-redhotsale2015' );" class="activebtn">BUY NOW</a></dd>
  </dl>
  <div class="present present_right">
  	<dl>
    <dt>More Stable with Up-to-date Drivers</dt>
    <dd>Driver Booster 2 PRO detects missing, broken and outdated drivers that can lead to hardware failures, conflicts and system crashes automatically, and fix them all with one-click for a stable PC performance.</dd>
    </dl>
    <img src="<?php echo $pResUrl; ?>images/present_01.jpg">
  </div>
  <div class="present present_left">
    <img src="<?php echo $pResUrl; ?>images/present_02.jpg">  
  	<dl>
      <dt>Game Tweaking for Top Gaming Experience</dt>
      <dd>Driver Booster 2 PRO optimizes graphics card drivers, installs the must-have game components to reduce issues and gives you the most out of the game experience.</dd>
    </dl>
  </div> 
  <div class="present present_right">
  	<dl>
    <dt>Backup Drivers for Safe Updating</dt>
    <dd>Driver Booster 2 allows you to restore to the previous driver system with the strengthened Restore & Backup feature. And the driver Uninstall & Rollback features will also maximally ensure your computer's security once unexpected happens.</dd>
    </dl>
    <img src="<?php echo $pResUrl; ?>images/present_03.jpg" >
  </div>  
  <div class="present present_left">
    <img src="<?php echo $pResUrl; ?>images/present_04.jpg">  
  	<dl>
      <dt>Unlock Driver Update Speed Limit</dt>
      <dd>With IObit latest Cloud Database, Driver Booster 2 PRO can locate over 130,000 drivers and keep your drivers always up-to-date with unlimited driver update speed.</dd>
    </dl>
  </div>   
   <div class="choose">
  	Enjoy more Stable PC Performance with Driver Booster 2 PRO
   </div>
   <dl class="user">
      <dt><img src="<?php echo $pResUrl; ?>images/cnet.jpg"></dt>
      <dd>Media Review</dd>
      <dd>"Driver Booster, from IObit, promises an easier solution to download and update driver with its most advanced technology by acting as an all-in-one command centre. All of your drivers are listed in the app's interface, making it a super easy process to download and update drivers. Downloading and installing drivers with this software is cinch and often takes just minutes (or less)." - MakeUseOf </dd>
   </dl>
  <dl class="product">
 		<dt></dt>
    <dd>
    	<strong>only $14.37</strong> <del>$28.95</del>
    	<span>1 year subscription / 3PCs</span>
    </dd>
    <dd><a href="https://store.iobit.com/order/checkout.php?PRODS=4631623&QTY=1&CART=1&COUPON=2015RD" onClick="ga ('send', 'event', 'dbbuy', 'buy', 'aff-en-redhotsale2015' );" class="activebtn">BUY NOW</a></dd>
  </dl>
  <p class="footer">Copyright © 2005 - 2015 IObit. All Rights Reserved</p>   
</div>
</body>
</html>