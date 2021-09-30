<?php
error_reporting(0);
session_start();
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
	$ascRef='enaff-asc10-2016blackfriday';
	$dbRef='enaff-db4-2016blackfriday';
	$iuRef='enaff-iu6-2016blackfriday';
	$pfRef='enaff-pf-2016blackfriday';
	$mbRef='enaff-mb4-2016blackfriday';
	$imfRef='enaff-imf4pack-2016blackfriday';
	$amcRef='enaff-sdamc-2016blackfriday';
	if(!empty($_GET['ref'])){
		$ascRef=$dbRef=$iuRef=$pfRef=$mbRef=$imfRef=$amcRef=$_GET['ref'];
	}
	include $pRootUrl.'include/common.inc.php';
    $refStr = (empty($_GET['ref']) ? '' : $_GET['ref']);
    $affStr = (empty($_GET['aff']) ? (empty($_GET['AFF']) ? '' : $_GET['AFF']) : $_GET['aff']);

    $ref = empty($refStr) ? (empty($affStr) ? '' : '?aff=' . $affStr) : (empty($affStr) ? '?ref=ir' : '?ref=' . $refStr . '&aff=' . $affStr);
    header("Refresh: 5; url=https://purchase.iobit.com/aff/en/asc/2017asc10general/index.php$ref");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Black Friday & Cyber Monday Sale- 50% off</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>style/style.css"/>
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="banner">
	<div class="wrapper">
		<a href="http://www.iobit.com" target="_blank" class="logo">IObit</a>
		<div class="title">
			<h1>50% OFF SALE</h1>
			<h2>Black Friday & Cyber Monday Sale</h2>
		</div>
		<ul class="date date1">
			<li>00</li>
			<li>00</li>
			<li>00</li>
			<li>000</li>
		</ul>
		<div class="box db">
			<img src="<?php echo $pResUrl; ?>images/db-box.jpg" alt="" class="img-box">
			<dl class="price">
				<dt><del>$24.95</del> <strong>$12.47</strong> <span>50% OFF</span> </dt>
				<dd><a href="http://www.iobit.com/buy.php?product=enaffdb41247&ref=<?php echo $dbRef;?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb42016bf')" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt="" /></span>BUY NOW <i></i></a></dd>
			</dl>
			<div class="clear"></div>
			<div class="line"></div>
			<div class="message">
				<h2>Keep Your Device Drivers Up-to-date</h2>
				<p>Easily identify and fix 400,000+ outdated, missing & incorrect PC drivers for top PC and gaming experience.</p>
			</div>
		</div>
		<div class="box asc">
			<img src="<?php echo $pResUrl; ?>images/asc-box.jpg" alt="" class="img-box">
			<dl class="price">
				<dt><del>$29.99</del> <strong>$14.99</strong> <span>50% OFF</span> </dt>
				<dd><a href="http://www.iobit.com/buy.php?product=enaffasc101499&ref=<?php echo $ascRef;?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102016bf')" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt="" /></span>BUY NOW <i></i></a></dd>
			</dl>
			<div class="clear"></div>
			<div class="message">
				<h2>Deep Clean and Optimize Your PC</h2>
				<p>One click to boost your slow PC up to 300% faster* and secure your browser & system in real-time.</p>
			</div>
		</div>
	</div>
</div>
<div class="gift-content wrapper">
	<div class="left-message">
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/pf-gift.png" alt="" /></dt>
			<dd>
				<span class="name"><strong>Protected Folder 1 year / 1 PC </strong> No Worries of Data Theft or Privacy Leaks!</span>
				<span class="price"><strong>$0 </strong> <del>$19.99</del></span>
			</dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/iu-gift.png" alt="" /></dt>
			<dd>
				<span class="name"><strong>IObit Uninstaller 6 PRO 1 year / 1 PC  </strong> Powerfully Uninstall Unwanted Programs & Plug-ins</span>
				<span class="price"><strong>$0 </strong> <del>$19.99</del></span>
			</dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/sd-gift.png" alt="" /></dt>
			<dd>
				<span class="name"><strong>Smart Defrag 5 PRO 1 year / 1 PC</strong> Get the Maximum Hard Drive Performance!</span>
				<span class="price"><strong>$0 </strong> <del>$19.99</del></span>
			</dd>
		</dl>
	</div>
	<div class="right-message">
		<img src="<?php echo $pResUrl; ?>images/imf-off.png" alt="" />
		<p>Buy IObit Malware Fighter 4 PRO, and get super gift pack for FREE. Protect your PC against all kinds of threats in real-time.</p>
		<p><strong> $19.97</strong> <del>$39.95</del></p>
		<a href="http://www.iobit.com/buy.php?product=enaffimf4pack1997&ref=<?php echo $imfRef;?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimfpack2016bf')" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt="" /></span>BUY NOW <i></i></a>
	</div>
</div>
<div class="three-box wrapper ">
	<div class="box imf">
		<img src="<?php echo $pResUrl; ?>images/iu-off.png" alt="" />
		<h3>Remove Unwanted Program Easily</h3>
		<p>Completely uninstall stubborn programs, Ad-based toolbars & malicious browser plug-ins.</p>
		<p><strong> $9.99</strong> <del>$19.99</del></p>
		<a href="http://www.iobit.com/buy.php?product=enaffiu6999&ref=<?php echo $iuRef;?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu62016bf')" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt="" /></span>BUY NOW <i></i></a>
	</div>
	<div class="box sd-amc">
		<img src="<?php echo $pResUrl; ?>images/sd-amc-off.png" alt="" />
		<h3>Quicker PC Startup</h3>
		<p>Buy Smart Defrag 5 PRO, and get AMC security for your Android devices as a free gift. </p>
		<p><strong> $14.99</strong> <del>$29.99</del></p>
		<a href="http://www.iobit.com/buy.php?product=enaffsd5amc1499&ref=<?php echo $amcRef;?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'enaffsdamc2016bf')" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt="" /></span>BUY NOW <i></i></a>
	</div>
	<div class="box">
		<img src="<?php echo $pResUrl; ?>images/mb-off.png" alt="" />
		<h3>A Faster and more Secured Mac</h3>
		<p>Clean up junks, boost Mac performance, and remove Mac malware & virus in one click.</p>
		<p><strong> $24.99</strong> <del>$49.95</del></p>
		<a href="http://www.iobit.com/buy.php?product=enaffmb42498&ref=<?php echo $mbRef;?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'mbbuy', 'buy', 'enaffmb42016bf')" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt="" /></span>BUY NOW <i></i></a>
	</div>
</div>
<div class="bottom">
	<div class="wrapper">
		<div class="bottom-wrapper">
			<div class="sale">
				<h2>Hurry up Before These Deals Are Gone!</h2>
				<ul class="date date2">
					<li>00</li>
					<li>00</li>
					<li>00</li>
					<li>000</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accepet">
		<div class="wrapper">
			<ul>
				<li>Accepted Payments <img src="<?php echo $pResUrl; ?>images/visa.png" alt="" /></li>
				<li>Money Back Guarantee <img src="<?php echo $pResUrl; ?>images/days.png" alt="" /></li>
				<li class="last">Secure Payment <img src="<?php echo $pResUrl; ?>images/secured.png" alt="" /></li>
			</ul>
		</div>
	</div>
</div>
<div class="footer">
	<div class="wrapper">
		<dl class="note">
			<dt>Note:</dt>
			<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
			<dd>*.Data may vary based on different system or computer.</dd>
		</dl>
		<p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved.</p>
	</div>
</div>
<div class="pop-up">
  <div class="pop-main">
    <div class="pop-box">
      <h2>Note:</h2>
      <p>Thank you for your visit and your interest in IObit products! This Special Offer is over now.</p>
      <p>You will be redirected to the latest IObit promotion page automatically.</p>
    </div>
  </div>
</div>
<script type="text/javascript">
	function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
		$(".date1 li").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
		$(".date2 li").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
		setTimeout('cycleCountdown()',1);
	}
	cycleCountdown();

  // setTimeout('window.location.href="https://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);

</script>
</body>
</html>