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
<title>Red Hot Sale - the best deal ever for IObit Malware Fighter 3 PRO</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>style/style.css"/>
<?php echo $gJavascript['public'];?><?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <div id="banner" class="wrapper">
    <img src="<?php echo $pResUrl; ?>images/imf_box.png">
    <dl>
    	<dd>Most Efficient to Remove the Newest & Deepest Malware</dd>
      <dd>100% Privacy Security with Real-time Protection</dd>
      <dd>Block Homepage Hijacking & Malicious Website</dd>
      <dd>Automated & Scheduled Scan without Interrupting</dd>
      <dt>
      	<img src="<?php echo $pResUrl; ?>images/shop.png"><span><strong>only $9.95&nbsp;&nbsp;</strong> <del>$19.95</del><br>1 year subscription / 1 PC</span>
      	<div class="clear"></div>
      	<a href="https://store.iobit.com/order/checkout.php?PRODS=4637724&QTY=1&CART=1&COUPON=2015RD" onClick="ga('send', 'event', 'imfbuy', 'buy', 'aff-en-redhotsale2015' );" class="activebtn">BUY NOW </a>
      	<p>Supports Windows 2000/XP/Vista/7/8/8.1</p>
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
  	<dt>Secure Your Online Surfing with Full Browser Protection</dt>
    <dd><img src="<?php echo $pResUrl; ?>images/shop.jpg"><span><strong>only $9.95&nbsp;&nbsp;</strong><del>$19.95</del><br>1 year subscription / 1 PC</span></dd>
    <dd><a href="https://store.iobit.com/order/checkout.php?PRODS=4637724&QTY=1&CART=1&COUPON=2015RD" onClick="ga('send', 'event', 'imfbuy', 'buy', 'aff-en-redhotsale2015' );" class="activebtn">BUY NOW</a></dd>
  </dl>
  <div class="present present_right">
  	<dl>
    <dt>Protect your PC against the Deepest Malware</dt>
    <dd>With IObit unique "Dual-Core" anti-malware engine, IObit Malware Fighter 3 PRO is able to detect and remove the newest and deepest malware like spyware, adware, Trojans, key loggers, bots, worms, hijackers etc.</dd>
    </dl>
    <img src="<?php echo $pResUrl; ?>images/present_01.png">
  </div>
  <div class="present present_left">
    <img src="<?php echo $pResUrl; ?>images/present_02.png">  
  	<dl>
      <dt>Prevent Your Privacy Data from Theft</dt>
      <dd>IObit Malware Fighter 3 PRO will take a proactive way to fully protect your privacy by removing harmful tacking data, and prevent you accessing to known malicious webpages.</dd>
    </dl>
  </div> 
  <div class="present present_right">
  	<dl>
    <dt>Secure Your Browser for Better Surfing Experience</dt>
    <dd>IObit Malware Fighter 3 PRO will remove malicious browser toolbars & plug-ins, protect your homepage, default search engine and DNS settings from malicious modification to ensure a clean and fast surfing experience.</dd>
    </dl>
    <img src="<?php echo $pResUrl; ?>images/present_03.png" >
  </div>  
  <div class="present present_left">
    <img src="<?php echo $pResUrl; ?>images/present_04.png">  
  	<dl>
      <dt>Protect Your System in Real-time</dt>
      <dd>IObit Malware Fighter 3 PRO works intelligently in the background to protect your system in real-time with network guard, file guard, startup guard, cookie guard,  browser guard, process guard, USB disk guard and malicious action guard.</dd>
    </dl>
  </div>   
   <div class="choose">
  	 Secure Your Online Surfing with Full Browser Protection
   </div>
   <dl class="user">
      <dt><img src="<?php echo $pResUrl; ?>images/betanews.jpg"></dt>
      <dd>Media Review</dd>
      <dd>"IObit Malware Fighter PRO is a complete security package.”</dd>
      <dd>"It weeds out spyware, Trojan and all manner of other nasties, there're also Startup Guard that ensures no malicious processes start with Windows, Browser Guard that ensures no software makes changes to your web browser, File Guard that ensures unknown file you open do not cause any damage, USB Guard, Process Guard and more."</dd>
   </dl>
  <dl class="product">
    <dd><img src="<?php echo $pResUrl; ?>images/shop.jpg"><span><strong>only $9.95&nbsp;&nbsp;</strong> <del>$19.95</del><br>1 year subscription / 1 PC</span></dd>
    <dt><a href="https://store.iobit.com/order/checkout.php?PRODS=4637724&QTY=1&CART=1&COUPON=2015RD" onClick="ga('send', 'event', 'imfbuy', 'buy', 'aff-en-redhotsale2015' );" class="activebtn">BUY NOW</a></dt>
  </dl>
  <p class="footer">Copyright © 2005 - 2015 IObit. All Rights Reserved</p>   
</div>
</body>
</html>