<?php
  error_reporting(E_ERROR);
  define("IObit","IObit");
  $pRootUrl = '../';
  include '../include/common.inc.php';
  $refStr = 'db-ac';
    if(in_array($_GET['st'],array('ascu_acdb','asc_acdb'))){
        $refStr.='-'.$_GET['st'];
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Update Outdated Drivers Safely and Rapidly!"/>
<title>85% Off on IObit Driver Booster</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="./style/style.css" />
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
	<div class="wrapper">
    	<a href="http://www.iobit.com" class="homelink">Iobit</a>
    	<dl>
        	<dt></dt>
            <dd>Driver Booster, from IObit, promises an easier solution to download and update driver with its most advanced technology. <br />-- MakeUseOf</dd>
        </dl>
    </div>
</div>
<div id="main">
	<div class="wrapper">
    	<div class="shadow"></div>
        <div class="intro">
        	<h1>Driver Booster 4 PRO </h1>
            <h2>—— Update Outdated Drivers Safely and Rapidly</h2>
            <div class="boxshot"><img src="img/boxshot.jpg" alt="" /></div>
            <div class="discount">
            	<h3><span>Exclusive Offer</span><br />for IObit Valued User ONLY!</h3>
                <div class="disprice">85%<span>OFF</span></div>
                <div class="wprice">ONLY <em>$9.99</em> <del>$74.85</del><span>1 Year Subscription / 3 PCs</span></div>
                <div class="btnarea">
                    <a href="http://www.iobit.com/buy.php?product=db4-acak&ref=<?php echo $refStr;?>&aff=<?php echo $_GET["aff"];?>&refs=ac_db" class="checkbtn dbbuybtn">Buy Now >></a>
                    <span>100% money back guarantee</span>
                </div>
            </div>
        </div>
        <div class="promise">

            <div class="leftbox">
              <h2><span>Some Highlights of Benefits</span></h2>
              <ul>
                  <li class="icon01">Support Over 400,000 Drivers & Devices</li>
                  <li class="icon02">Enjoy Priority to Update Outdated, Missing & Faulty Drivers</li>
                  <li class="icon03">Fix System Issues Caused By Outdated Drivers</li>
                  <li class="icon04">Backup Drivers for Safe Restore</li>
              </ul>
             </div>
            <div class="review"><span></span>Driver Booster, from IObit, promises an easier solution to download and update driver with its most advanced technology by acting as an all-in-one command center. All of your drivers are listed in the app’s interface, making it a super easy process to download and update drivers. Downloading and installing drivers with this software is a cinch and often takes just minutes (or less)."<br /><div class="awpic"><img src="img/makeuseof_icon.jpg" alt=""/></div></div>
        </div>
        <div class="clear"></div>
        <div class="checkout">
        	<div class="moneyback">
            	You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 60 DAYS, or we'll send you a full refund. No questions asked. <a class="dbbuybtn" href="http://www.iobit.com/buy.php?product=db4-acak&ref=<?php echo $refStr;?>&aff=<?php echo $_GET["aff"];?>&refs=ac_db">Buy now</a>
            </div>
            <div class="btn">
            	<a href="http://www.iobit.com/buy.php?product=db4-acak&ref=<?php echo $refStr;?>&aff=<?php echo $_GET["aff"];?>&refs=ac_db" title="CHECKOUT" class="checkbtn dbbuybtn">Buy Now >></a>
                <span>100% money back guarantee</span>
            </div>
        </div>
        <div class="clear"></div>
        <div class="awards"></div>
    </div>
</div>
<div id="footer">
	<div class="wrapper">
© 2005 - <?php echo date('Y')?> IObit. All Rights Reserved
    </div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
