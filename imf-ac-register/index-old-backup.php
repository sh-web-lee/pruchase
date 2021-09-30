<?php
    error_reporting(E_ERROR);
    define("IObit","IObit");
    $pRootUrl = '../';
    include '../include/common.inc.php';
    $refStr = '';
    if($_GET['to']=='db_ac_imf'){
        $refStr.='-'.$_GET['to'];
    }
if(in_array($_GET['st'],array('asc_acimf'))){
    $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Extra Protection for Your PC Security!"/>
<title>85% Off on IObit Malware Fighter</title>
<link type="text/css" rel="stylesheet" href="./style/style.css" />
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
	<div class="wrapper">
    	<a href="http://www.iobit.com" class="homelink">IObit</a>
    	<dl>
        	<dt></dt>
            <dd><img src="images/star.png" alt=""/></dd>
            <dd>IObit Malware Fighter offers a lot in addition to its scanning capabilities.</dd>
        </dl>
    </div>
</div>
<div id="main">
	<div class="wrapper">
    	<div class="shadow"></div>
        <div class="intro">
        	<h1>IObit Malware Fighter PRO</h1>
            <h2>—— Extra Protection for Your PC Security!</h2>
            <div class="boxshot"></div>
            <div class="discount">
            	<h3><span>Exclusive Offer</span><br />for IObit Valued User ONLY!</h3>
                <div class="disprice">85%<span>OFF</span></div>
                <div class="wprice">ONLY <em>$5.99</em> <del>$39.99</del><span>1 Year Subscription / 1 PC</span></div>
                <div class="btnarea">
                    <a href="http://www.iobit.com/buy.php?product=imf5-acak&ref=imf5-ac<?php echo $refStr;?>&aff=<?php echo $_GET["aff"];?>&refs=ac_imf " onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfac');" class="checkbtn imfbuybtn">Buy Now >></a>
                    <span>100% money back guarantee</span>
                </div>
            </div>
        </div>
        <div class="promise">
        	
            <div class="leftbox">
              <h2><span>Some Highlights of Benefits</span></h2> 
              <ul>
                  <li><span><img src="images/icon-av-engine.png" alt="" /></span>Deep Malware Removal with Bitdefender Anti-virus Engine</li>
                  <li><span><img src="images/icon-threate-remove.png" alt="" /></span>Detect and Remove over 200 Million Hidden Threats</li>
                  <li><span><img src="images/icon-browser-protect.png" alt="" /></span>Auto Clean Surfing Privacy Trace with Browser Anti-Tracking</li>
                  <li><span><img src="images/icon-file-money-protect.png" alt="" /></span>Protect Your Files & Money from Ransomware Attacks</li>
                  <li><span><img src="images/icon-camera-protect.png" alt="" /></span>Safeguard Your Camera against Unauthorized Access</li>
              </ul>
             </div>
            <div class="review"><span></span>You should already have antivirus protection and similar safeguards, but we strongly recommend regularly scanning your PC for infections with an antimalware tool. With automatic updates, a variety of system guards, and a Cloud Security option, IObit Malware Fighter offers a lot in addition to its scanning capabilities."<br /><div class="awpic"><img src="images/download_com_logo.jpg" alt=""/><br />
- download.com</div></div>            
        </div>
        <div class="clear"></div>
        <div class="checkout">
        	<div class="moneyback">
            	You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 60 DAYS, or we'll send you a full refund. No questions asked. <a class="imfbuybtn" href="http://www.iobit.com/buy.php?product=imf5-acak&ref=imf5-ac<?php echo $refStr;?>&aff=<?php echo $_GET["aff"];?>&refs=ac_imf " onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfac');">Buy now</a>
            </div>
            <div class="btn">
            	<a href="http://www.iobit.com/buy.php?product=imf5-acak&ref=imf5-ac<?php echo $refStr;?>&aff=<?php echo $_GET["aff"];?>&refs=ac_imf " title="CHECKOUT" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfac');" class="checkbtn imfbuybtn">Buy Now >></a>
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
