<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name='janasc'.$date;
	if (!isset($_COOKIE[$c_name])) {
		$packsNum = 97;
		setcookie($c_name, $packsNum, time() + 3600 * 24);
	} else {
		if ($_GET['t'] == 1) {
			$packsNum = $_COOKIE[$c_name];
		}
		else {
			if (intval($_COOKIE[$c_name]) <= 0) {
				setcookie($c_name, 0, time() + 3600 * 24);
				$packsNum = 0;
			} else {
				$packsNum = $_COOKIE[$c_name] - 1;
				setcookie($c_name, $packsNum, time() + 3600 * 24);
				if (rand(1, 100) % 2 == 0) {
					$packsNum++;
				}
			}
		}
	}
	echo $packsNum;
	exit;
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(preg_match('/([0-9]*)\./',$_GET['ver'],$matches)){
	$ver=$matches[1];
	$refStr.='-'.$ver;
}
if(in_array($_GET['pop'],array('x_imf','b_imf'))){
	$refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['lsnstatus'])){
	$refStr.='-'.$_GET['lsnstatus'];
}
	include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Save up to 71% OFF on IMF PRO. Holiday Season Exclusive Discount - IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<!-- header -->
				<div class="header">
					<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
					<div class="title">
						<h1>New Year Sale - Special Offer</h1>
					</div>
				</div>
				<!-- stage before-->
				<div class="stage before active">
					<div class="packs">
						<div class="info">
							<h2>IObit Malware Fighter 6 PRO  Holiday Season Pack</h2>
							<strong>73% OFF</strong>
							Save<del>$64.9</del>
						</div>
						<div class="focus">
							<div class="counter">
								<span class="countNum">98</span>
							</div>
						</div>
					</div>
					<div class="details">
						<div class="info">
							<h3>Limited Supply <span class="countNum">98</span> Packs Left Today!</h3>
							<dl>
								<dt>IObit Malware Fighter 6 PRO <del>$54.95</del></dt>
								<dd>Protected Folder <del>$19.95</del></dd>
								<dd>AMC Security PRO <del>$19.99</del></dd>
							</dl>
						</div>
						<dl class="checkout">
							<dt>only <strong>$27.99</strong> <del>$94.89</del></dt>
							<dd><a href="https://www.iobit.com/buy.php?product=imf63pcpfamc2799&ref=imf3pcpfamc2019usbapr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf2799buyusb', 'buy', 'imfpurchase-201904');" class="checkbtn large buylink">Activate Now</a></dd>
							<dd class="last"><i></i>100% 60-Day Money Back Guarantee</dd>
						</dl>
					</div>
				</div>
				<!-- extra -->
				<div class="extra single">
					<div class="info">
						<h3>Single Solution</h3>
						<p>1 Year / 1 PC</p>
						<strong>40%off</strong>
					</div>
					<dl class="checkout">
						<dt><strong>$21.99</strong> <del>$39.95</del></dt>
						<dd><a href="https://www.iobit.com/buy.php?product=imf61pc2199&ref=imf1pc2019usb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf1pcbuyusb', 'buy', 'imfpurchase-201901');" class="checkbtn middle link1pc buylink">Activate Now</a></dd>
					</dl>
				</div>
				<div class="extra family-pack">
					<div class="info">
						<h3>Family Protection Pack</h3>
						<p>1 Year / 3 PCs</p>
						<strong>56%off</strong>
					</div>
					<dl class="checkout">
						<dt><strong>$25.99</strong> <del>$54.95</del></dt>
						<dd><a href="https://www.iobit.com/buy.php?product=imf63pc2599&ref=imf3pc2019usb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf3pcbuyusb', 'buy', 'imfpurchase-201901');" class="checkbtn middle buylink">Activate Now</a></dd>
					</dl>
				</div>

		</div>
	</div>
	<!-- paymanets -->
	<div class="paymanets">
		<div class="wrapper">
			<img src="<?php echo $pResUrl; ?>images/paymanets.png" alt="">
		</div>
	</div>
	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2>​Activate Now to Enjoy Much More Secure PC with Real-time Protection</h2>
			<div class="container clearfix">
				<div class="list">
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-01.png" alt=""></dt>
						<dd class="titlebar"><h3>Anti-Virus &amp; Anti-Malware</h3></dd>
						<dd>Double Protection Offered by Advanced Bitdefender Anti-virus Engine &amp; IObit Anti-Malware Engine</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-02.png" alt=""></dt>
						<dd class="titlebar"><h3>Real-time Protection</h3></dd>
						<dd>Automatically Block &amp; Remove Over 200 Million Threats in Real Time and Clear Harmful Tracking Data</dd>
					</dl>
				</div>
				<div class="list last">
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-03.png" alt=""></dt>
						<dd class="titlebar"><h3>No Ransomware Attack</h3></dd>
						<dd>Proactively Stop any Ransomware Trying to Break into Your PC. Even Petya/GoldenEye Ransomware Can Be Easily Blocked and Removed.</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-04.png" alt=""></dt>
						<dd class="titlebar"><h3>Folder Protection </h3></dd>
						<dd>SafeBox Keeps Specified Important Folders from Unauthorized Access & Latest Threats</dd>
					</dl>
				</div>
			</div>
			<p class="link clearfix">
				<a href="javascript:void(0);" onclick="goTaget($('.compar-tab'))">Learn more about PRO edition ></a>
			</p>
		</div>
	</div>
	<!-- packsintro -->
	<div class="gift-pack">
		<div class="wrapper">
			<h2>IObit Malware Fighter 6 PRO Holiday Season Pack Includes</h2>
			<div class="container clearfix">
				<ul>
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-imf-extra.png" alt=""></li>
					<li><strong>IObit Malware Fighter 6 PRO</strong></li>
					<li> <del>$54.95</del>  1 Year / 3 PCs</li>
					<li class="last">Protect Your PC from Virus, Malware &amp; Ransomware in Real Time</li>
				</ul>
				<ul>
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-amc.png" alt=""></li>
					<li><strong>AMC Security PRO</strong></li>
					<li><del>$19.99</del>  1 Y / Multi Devices</li>
					<li class="last">200% Speed up and Fully Protect Your Android from any Threat!</li>
				</ul>
				<ul class="last">
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-pf.png" alt=""></li>
					<li><strong>Protected Folder</strong></li>
					<li><del>$19.95</del>   1 Y / 1 PC</li>
					<li class="last">Never Worry about Data Theft or Privacy Leaks!</li>
				</ul>
			</div>
			<div class="cartarea clearfix">
				<h3>Limited Supply, <span class="countNum">98</span> Packs Left Today!</h3>
				<dl class="checkout">
					<dt>only <strong>$27.99</strong> <del>$94.89</del></dt>
					<dd><a href="https://www.iobit.com/buy.php?product=imf63pcpfamc2799&ref=imf3pcpfamc2019usbapr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf2799buyusb', 'buy', 'imfpurchase-201904');" class="checkbtn large buylink">Activate Now</a></dd>
					<dd class="last"><i></i>100% 60-DAY MONEY BACK GUARANTEE</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- awards -->
	<div class="awards">
		<div class="wrapper">
			<h2>Trusted and awarded by these medias</h2>
			<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=imfindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/pc-magazine.png" alt=""></a>
			<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=imfindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt=""></a>
			<a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=imfindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/major-geeks.png" alt=""></a>
			<a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=imfindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/pc-world.png" alt=""></a>
			<a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=imfindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/chlp.png" alt=""></a>
			<a href="http://www.softpedia.com/get/Tweak/System-Tweak/Advanced-WindowsCare-Professional.shtml?ref=imfindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/softpedia.png" alt=""></a>
			<a href="http://driver-booster.updatestar.com/?ref=imfindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/updatestar.png" alt=""></a>
		</div>
	</div>
	<!-- review -->
	<div class="review wrapper">
		<div class="reviews">
			<h2>User Review</h2>
			<h3>"  It is lot quicker at scanner and easy to use."</h3>
			<p>"I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter. I would recommend that they forget the rest and get the best which is IObit Malware Fighter."</p>
		</div>
		<div class="reviews active">
			<h2>Media Review</h2>
			<h3>"It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots. "</h3>
			<p>The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similartools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.</p>
		</div>
		<div class="reviews">
			<h2>User Review</h2>
			<h3>" It scans my laptop without affecting its performance while I also recommended this product to two of my friends."</h3>
			<p>I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.</p>
		</div>
		<ul class="handle clearfix">
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy"><span></span></div>
				<strong>David Cassidy</strong>
			</li>
			<li class="active">
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/software.png" alt="software.informer.com"><span></span></div>
				<strong>software.informer</strong>
			</li>
			<li>
			<div class="badge"><img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir"><span></span></div>
				<strong>Gelu Batir</strong>
			</li>
		</ul>
	</div>
	<!-- comparetab -->
	<div class="compar-tab wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<thead>
			<tr>
				<th colspan="2" class="text">See what PRO edition can do for you:</th>
				<th class="space"></td>
				<th class="item-free"><strong>IObit Malware Fighter <span>FREE</span></strong></th>
				<th class="space"></td>
				<th class="item-pro">
					IObit Malware Fighter PRO
					<dl>
						<dt class="txtExtra"><strong>1 Year / 3 PCs </strong> + Free Gifts</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=imf63pcpfamc2799&ref=imf3pcpfamc2019usbapr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf2799buyusb', 'buy', 'imfpurchase-201904');" class="checkbtn small link3pc buylink">Activate Now</a></dd>
					</dl>
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
				<td class="text">Basic Anti-Malware Function  <sup class="c-green">IMPROVED</sup></td>
				<td class="space"></td>
				<td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
				<td class="text">Up to 130% Faster Scan to Target Active Threats Quickly <sup class="c-green">IMPROVED</sup></td>
				<td class="space"></td>
				<td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
				<td class="text">Brand New Anti-ransomware Engine to Block Untrusted Access to Important Files    <sup class="c-red"> NEW</sup></td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
				<td class="text">Protect Specified Important Folders from Unauthorized Access with Safebox  <sup class="c-red">NEW </sup></td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
				<td class="text">Scan Download Files and Remove Ads to Enhance Protection <sup class="c-green"> IMPROVED</sup></td>
				<td class="space"></td>
				<td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"> </td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
				<td class="text">Full Anti-Malware Ability with Unique "Dual-Core" Engine <sup class="c-green">IMPROVED</sup> </td>
				<td class="space"></td>
				<td class="item-free"> </td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
				<td class="text">Advanced Threat Protection with Bitdefender Anti-Virus Engine  <sup class="c-green">IMPROVED</sup></td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
				<td class="text">Boot-time Disk Protection Against Malicious Attacks with MBR Guard  <sup class="c-red">  NEW</sup></td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
				<td class="text">Safeguard Your Camera against Unauthorized Access <sup class="c-green">IMPROVED</sup></td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
				<td class="text">Comprehensive Real-time Protection for Top PC Security  <sup class="c-green">IMPROVED</sup></td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
				<td class="text">Prevent Virus Infection Carried by USB Disk</td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
				<td class="text">Detect Malicious Process Running in RAM</td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
				<td class="text">Auto Clean Surfing Privacy Trace with Browser Anti-Tracking <sup class="c-green"> IMPROVED</sup></td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
				<td class="text">Intelligently Works in Background without Interrupting</td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
				<td class="text">Automatic Update to the Latest Version</td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_16.png"></td>
				<td class="text">Free 24/7 Technical Support on Demand</td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tfoot>
				<tr>
				<th colspan="2"></th>
				<th class="space"></td>
				<th class="item-free">
					<strong>IObit Malware Fighter <span>FREE</span></strong>
				</th>
				<th class="space"></td>
				<th class="item-pro">
					<dl>
						<dt class="priceExtra"><strong>$27.99</strong> <del>$94.89</del></dt>
						<dd class="txtExtra">1 Year / 3 PCs + Free Gifts</dd>
						<dd><a href="https://www.iobit.com/buy.php?product=imf63pcpfamc2799&ref=imf3pcpfamc2019usbapr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf2799buyusb', 'buy', 'imfpurchase-201904');"  class="checkbtn small link3pc buylink">Activate Now</a></dd>
						<dd class="inform">Hurry up, <span  class="countNum">98</span> left today!</dd>
					</dl>
				</th>
			</tr>
			</tfoot>
			</tbody>
		</table>
	</div>
	<!-- end compar-tab -->
	<!-- footer -->
	<div class="footer">
		<div class="wrapper">
			<div class="additional-info clearfix">
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/money-back-guarantee.png')?>" alt=""/></dt>
					<dd><strong>Money Back Guarantee</strong></dd>
					<dd>If you're not satisfied in the first 60 days, we will give you back your money.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/verified.png"></dt>
					<dd><strong>Secure Payment</strong></dd>
					<dd>IObit supports several safe modes of payment.</dd>
				</dl>
				<dl class="last">
					<dt><img src="<?php echo $pResUrl; ?>images/license-cart.png"></dt>
					<dd><strong>Get License</strong></dd>
					<dd>You will receive the license within a few minutes after purchase.</dd>
				</dl>
			</div>
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
				<dd>*.License for AMC Security Full Version with in-app ads.</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- float -->
	<div class="float">
		<a href="https://www.iobit.com/buy.php?product=imf63pcpfamc2799&ref=imf3pcpfamc2019usbapr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf2799buyusb', 'buy', 'imfpurchase-201904');" class="buylink">
			<div class="inner">
				<p>Only <strong  class="countNum">98 </strong> Packs Left! <em>Buy Now</em></p>
			</div>
		</a>
	</div>
	<script type="text/javascript">
		refStr="<?php echo $refStr;?>";
	</script>
	<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
	<script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>
</body>
</html>