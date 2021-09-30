<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}
if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_imf5_201730daypro';
$reduceNum=68807174;
$buyNum = ceil(microtime_float() * 1000 / 20000) -$reduceNum;
$buyNum = number_format($buyNum);

if ($_GET['action'] == 'getPacks'){
	echo $buyNum;
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pay $0 to enjoy 30 days PRO for free!</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<script type="text/javascript">
		function decreasingPacks(){
			$.ajax({
				type: "GET",
				url: "<?php echo $pRootUrl;?>callback.php",
				data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>r="+Math.random(),
				success: function(packs){
					$('#buyNum').html(packs);
					setTimeout('decreasingPacks()', 20000);
				}
			});
		}
		setTimeout('decreasingPacks()', 20000);
	</script>
</head>

<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<!-- header start -->
<div class="banner">
	<div class="wrapper">
		<a href="http://www.iobit.com" class="logo" target="_blank">IObit</a>
		<div class="title">
			<h1>IObit Malware Fighter 5 PRO</h1>
			<h2>Enjoy 30-Day Full Protection from IObit Malware Fighter 5 PRO for FREE</h2>
		</div>
		<div class="content">
			<div class="left">
				<img src="<?php echo $pResUrl; ?>images/imf-box.png" alt="">
				<p><img src="<?php echo $pResUrl; ?>images/people.png" alt=""><strong id="buyNum"><?php echo $buyNum; ?></strong> people got 30-day PRO for free</p>
			</div>
			<div class="right">
				<p class="now clearfix"><span class="text">Now</span> <span class="price">$0</span></p>
				<dl>
					<dt>Seize the Chance to Enjoy 30 Days PRO for FREE</dt>
					<dd>Pay $0 to enjoy IMF 5 PRO for 30 days</dd>
					<dd>Opt out anytime during 30-day period</dd>
				</dl>
				<p class="leaving">Leaving this page will lose your chance!</p>
				<a href="http://www.iobit.com/buy.php?product=imf30day_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf&tw=-8" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf5201730daypro')" class="buybtn">Get 30 Days PRO for FREE</a>
			</div>
		</div>
	</div>
</div>
<!-- header end -->
<div class="trial">
	<dl class="wrapper">
		<dt>Promotion terms</dt>
		<dd>At the end of the 30-day period, your credit card or PayPal account will be charged $24.95 automatically. This 65% discount from the original price of $69.99 is exclusive bonus for customers who choose to order today!</dd>
	</dl>
</div>

<!-- container start -->
<div class="main wrapper">
	<div class="enjoy clearfix">
		<h2>Enjoy Full Protection from IMF PRO for Free in the Next 30 Days</h2>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/icons01.jpg" alt=""></dt>
			<dd><strong>Double Protection from Bitdefender & IObit </strong> Combine powerful IObit anti-malware engine with world’s leading Bitdefender anti-virus engine to deliver a more compre- hensive anti-malware and anti-virus security solution to you.</dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/icons02.jpg" alt=""></dt>
			<dd><strong>Detect, Block and Remove 200,000,000+ Threats  </strong> Dual Engines allow to detect, block and remove over 200 million hidden threats like spyware, ransomware, adware, trojans, keyloggers, bots, worms, and hijackers more deeply and efficiently</dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/icons03.jpg" alt=""></dt>
			<dd><strong>Camera Guard and Anti-Tracking </strong> Inform you immediately if any program attempts to use your camera secretly to steal your privacy and auto clean harmful traces to protect sensitive information you enter online, such as bank accounts, emails or other social accounts.</dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/icons04.jpg" alt=""></dt>
			<dd><strong> Block Ransomware & Protect Your Files and Money </strong> Take proactive protection against all kinds of ransomware attacks & detect all known versions of WannaCry in real-time and remove it thoroughly.</dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/icons05.jpg" alt=""></dt>
			<dd><strong>Safe Surf, Search and Download </strong> Enable real-time protection on browsers to block possible threats and ensure you a safer environment while surfing, downloading and browsing. </dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/icons06.jpg" alt=""></dt>
			<dd><strong>Prevent Malicious Processes & Viruses from USB </strong> Effectively stop malicious processes running in the system and virus infections carried by USB Disk.</dd>
		</dl>
	</div>
	<dl class="opt-out">
		<dt><span>Now</span> <span class="price">$0</span></dt>
		<dd><a href="http://www.iobit.com/buy.php?product=imf30day_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf&tw=-8" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf5201730daypro')" class="buybtn">Get My 30-Day PRO for FREE</a></dd>
		<dd><span>Opt out anytime during 30-day period</span><span>Enjoy exclusive 65% OFF after 30-day period is over</span></dd>
	</dl>
	<div class="media clearfix">
		<h2>Media & User Review</h2>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/bn.jpg" alt=""></dt>
			<dd><strong>Betanews.com</strong> <p>IObit Malware Fighter PRO is a complete security package.</p></dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/bob.jpg" alt=""></dt>
			<dd><strong>Bob Bassett</strong> <p>Now, with IObit Malware Fighter Pro and Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence.</p></dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/clnet.jpg" alt=""></dt>
			<dd><strong>Cnet</strong> <p>This easy-to-use and informative application cleans, configures, and optimizes your PC.</p></dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/peter.jpg" alt=""></dt>
			<dd><strong>Peter Stoffers</strong> <p>I also had other programs for this purpose installed, but IMF always finds the problems first and blocks them.</p></dd>
		</dl>
	</div>
</div>
<!-- container end -->
<div class="bottom-buy">
	<div class="wrapper">
		<img src="<?php echo $pResUrl; ?>images/imf-bottom-box.png" alt="">
		<ul>
			<li>Pay $0 to enjoy IMF 5 PRO for 30 days </li>
			<li>Opt out anytime during 30-day period</li>
		</ul>
		<a href="http://www.iobit.com/buy.php?product=imf30day_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf&tw=-8" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf5201730daypro')" class="buybtn">Get 30 Days PRO for FREE</a>
	</div>
</div>
<div class="product">
	<h2>Product Awards</h2>
	<img src="<?php echo $pResUrl; ?>images/awrad.jpg" alt="">
	<!-- footer start -->
	<div class="footer wrapper">Copyright © 2005 - <?php echo date(Y)?> IObit. All Rights Reserved</div>
	<!-- footer end -->
</div>
    <div class="pop-up">
        <div class="pop-main">
            <div class="pop-box">
                <h2>Note:</h2>
                <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
                <p>You will be redirected to the latest IObit promotion page automatically.</p>
            </div>
        </div>
    </div>
    <script>setTimeout('window.location.href="https://purchase.iobit.com/aff/en/imf/2020newlaunchsale/index.php'+location.search+'"',5000);</script>
</div>
</body>
</html>