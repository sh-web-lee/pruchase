<?php
    error_reporting(E_ERROR);
    define("IObit","IObit");
    $pRootUrl = '../';
    include '../include/common.inc.php';
    $refStr = 'sd5-ac';
    if($_GET['to']=='db_ac_sd'){
        $refStr.='-'.$_GET['to'];
    }
if(in_array($_GET['st'],array('ascu_acsd','asc_acsd'))){
    $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Ultimate Performance for Your Hard Drive!"/>
<title>85% OFF on Smart Defrag 5 PRO</title>
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
            <dd><img src="img/star.png" alt=""/></dd>
        </dl>
    </div>
</div>
<div id="main">
	<div class="wrapper">
    	<div class="shadow"></div>
        <div class="intro">
        	<h1>Smart Defrag 5 PRO</h1>
            <h2>—— Maximum Hard Drive Performance for Higher Data Access Speed!</h2>
            <div class="boxshot"></div>
            <div class="discount">
            	<h3><span>Exclusive Offer</span><br />for IObit Valued User ONLY!</h3>
                <div class="disprice">85%<span>OFF</span></div>
                <div class="wprice">ONLY <em>$3.99</em> <del>$29.99</del><span>1 Year Subscription / 3 PCs</span></div>
                <div class="btnarea">
                    <a href="http://www.iobit.com/buy.php?product=sd5-acak&ref=<?php echo $refStr;?>&aff=<?php echo $_GET["aff"];?>&refs=ac_sd5" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdac');" class="checkbtn sdbuybtn">Buy Now >></a>
                    <span>100% money back guarantee</span>
                </div>
            </div>
        </div>
        <div class="promise">
        	
            <div class="leftbox">
              <h2><span>Some Highlights of Benefits</span></h2> 
              <ul>
                  <li class="icon01">New Disk Defrag Engine for 100% Secure Disk Defragmentation</li>
                  <li class="icon02">Full support of defragmentation on Windows 10/8/8.1 Metro Apps</li>
                  <li class="icon03">Maximum Hard Drive Performance & Highest Data Access Speed</li>
                  <li class="icon04">Guaranteed Data Safety and Disk Stability</li>
              </ul>
             </div>
            <div class="review"><span></span>One of the simplest ways to make sure your PC runs as efficiently as possible is to defragment your hard disk. <br />With several level of defragmentation, simple-to-use scheduler and extra offers, Smart Defrag is a great way to do it."<br /><div class="awpic"><img src="img/pcworld_logo.jpg" alt=""/><br />
- PCWORLD.com</div></div>            
        </div>
        <div class="clear"></div>
        <div class="checkout">
        	<div class="moneyback">
            	You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 60 DAYS, or we'll send you a full refund. No questions asked. <a class="sdbuybtn" href="http://www.iobit.com/buy.php?product=sd5-acak&ref=<?php echo $refStr;?>&aff=<?php echo $_GET["aff"];?>&refs=ac_sd5" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdac');">Buy now</a>
            </div>
            <div class="btn">
            	<a href="http://www.iobit.com/buy.php?product=sd5-acak&ref=<?php echo $refStr;?>&aff=<?php echo $_GET["aff"];?>&refs=ac_sd5" title="CHECKOUT" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdac');" class="checkbtn sdbuybtn">Buy Now >></a>
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
