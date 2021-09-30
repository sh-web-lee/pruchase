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
<?php echo $gJavascript['public'];?><?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <div id="banner" class="wrapper">
    <img src="<?php echo $pResUrl; ?>images/asc_box.png">
    <dl>
    	<dd>Boost Your Slow PC up to 300% Faster</dd>
      <dd>Fix a variety of PC Problems in ONE Click</dd>
      <dd>Speed up Your Intetnet Dramatically</dd>
      <dd>Protect Privacy and Secure Online Experience in Real Time</dd>
      <dt>
      	<img src="<?php echo $pResUrl; ?>images/shop.png"><strong>only $9.99</strong> <del>$19.99</del>
      	<a href="https://store.iobit.com/order/checkout.php?PRODS=4633271&QTY=1&CART=1&COUPON=2015RD" onClick="ga('send', 'event', 'ascbuy', 'buy', 'aff-en-redhotsale2015' );" class="activebtn">BUY NOW </a>
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
  	<dt>You are only 1 click away from a faster, cleaner and more secure PC</dt>
    <dd><img src="<?php echo $pResUrl; ?>images/shop.jpg"><strong>only $9.99</strong> <del>$19.99</del></dd>
    <dd><a href="https://store.iobit.com/order/checkout.php?PRODS=4633271&QTY=1&CART=1&COUPON=2015RD" onClick="ga('send', 'event', 'ascbuy', 'buy', 'aff-en-redhotsale2015' );" class="activebtn">BUY NOW</a></dd>
  </dl>
  <div class="present present_right">
  	<dl>
    <dt>Boost  Your PC up to 300% Faster</dt>
    <dd>One-click approach to fix the deepest problems that are slowing down your PC: malware, registry issues & fragments, disk errors, invaild shortcuts, junk files, etc. Optimize your disk, startup and the whole system for the top-performance.</dd>
    </dl>
    <img src="<?php echo $pResUrl; ?>images/present_01.jpg">
  </div>
  <div class="present present_left">
    <img src="<?php echo $pResUrl; ?>images/present_02.jpg">  
  	<dl>
      <dt>Speed up Your Intetnet Dramatically</dt>
      <dd>Remove unwanted toolbars & plug-ins that are ruining your browser performance; optimize your browser settings to speed up your Intetnet dramatically.</dd>
    </dl>
  </div> 
  <div class="present present_right">
  	<dl>
    <dt>Secure Your Privacy in Real-time</dt>
    <dd>Keep your privacy confidential by cleaning your surfing traces. Protect you against spyware, malicious websites and browser hijackers in real-time.</dd>
    </dl>
    <img src="<?php echo $pResUrl; ?>images/present_03.jpg" >
  </div>  
  <div class="present present_left">
    <img src="<?php echo $pResUrl; ?>images/present_04.jpg">  
  	<dl>
      <dt>Over 28 powerful tools</dt>
      <dd>Provide over 28 powerful tools including Disk Defrag, Program Uninstaller, Driver Updater, Win Fix, PC Transfer, Internet Booster, Startup Manager etc. to save you from all kinds of PC problems.</dd>
    </dl>
  </div>   
   <div class="choose">
  	 Over 200,000,000 Global Users’ Choice
   </div>
   <dl class="user">
      <dt><img src="<?php echo $pResUrl; ?>images/cnet.jpg"></dt>
      <dd>Media Review</dd>
      <dd>"This easy-to-use and informative application cleans, configures, and optimizes your PC.”</dd>
      <dd>"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system. It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."</dd>
   </dl>
  <dl class="product">
  	<dt>You are only 1 click away from a faster, cleaner and more secure PC</dt>
    <dd><img src="<?php echo $pResUrl; ?>images/shop.jpg"><strong>only $9.99</strong> <del>$19.99</del></dd>
    <dd><a href="https://store.iobit.com/order/checkout.php?PRODS=4633271&QTY=1&CART=1&COUPON=2015RD" onClick="ga('send', 'event', 'ascbuy', 'buy', 'aff-en-redhotsale2015' );" class="activebtn">BUY NOW</a></dd>
  </dl>
  <p class="footer">Copyright © 2005 - 2015 IObit. All Rights Reserved</p>   
</div>
</body>
</html>