<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../../';
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
  if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_imf5_2017newlaunchsale';
	include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Save up to 73% on IObit Malware Fighter PRO & Free Gifts – IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<!-- header -->
				<div class="header">
					<a href="http://www.iobit.com/" target="_blank" class="logo">IObit</a>
					<div class="title">
						<h1>New Launch New PC Feeling</h1>
					</div>
				</div>
				<!-- stage before-->
				<div class="stage before active">
					<div class="packs">
						<div class="info">
							<h2>IObit Malware Fighter 5 PRO  Valuable New Year Pack</h2>
							<strong>73% OFF</strong>
							Save<del>$68.9</del>
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
								<dt>IObit Malware Fighter 5 PRO <del>$54.95</del></dt>
								<dd>Protected Folder <del>$19.95</del></dd>
								<dd>AMC Security PRO <del>$19.99</del></dd>
							</dl>
						</div>
						<dl class="checkout">
							<dt>only <strong>$25.99</strong> <del>$94.89</del></dt>
							<dd><a href="https://www.iobit.com/buy.php?product=imf53pcpfamc2599_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf&tw=-8" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf52017newlaunchsale')" class="checkbtn large">Activate Now</a></dd>
							<dd class="last"><i></i>100% 60-Day Money Back Guarantee</dd>
						</dl>
					</div>
				</div>
				<!-- extra -->
				<div class="extra single">
					<div class="info">
						<h3>Single Solution</h3>
						<p>1 Year / 1 PC</p>
						<strong>50%off</strong>
					</div>
					<dl class="checkout">
						<dt><strong>$19.95</strong> <del>$39.95</del></dt>
						<dd><a href="https://www.iobit.com/buy.php?product=imf51pc_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf&tw=-8" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf52017newlaunchsale')" class="checkbtn middle link1pc">Activate Now</a></dd>
					</dl>
				</div>
				<div class="extra family-pack">
					<div class="info">
						<h3>Family Protection Pack</h3>
						<p>1 Year / 3 PCs</p>
						<strong>56%off</strong>
					</div>
					<dl class="checkout">
						<dt><strong>$23.99</strong> <del>$54.95</del></dt>
						<dd><a href="https://www.iobit.com/buy.php?product=imf53pc_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf&tw=-8" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf52017newlaunchsale')" class="checkbtn middle">Activate Now</a></dd>
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
			<h2>Activate Now to Enjoy Much More Secure PC with Real-time Protection</h2>
			<div class="container clearfix">
				<div class="list">
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-01.png" alt=""></dt>
						<dd class="titlebar"><h3>Anti-Virus & Anti-Malware</h3></dd>
						<dd>Double Protection Offered by Advanced Bitdefender Anti-virus Engine & IObit Anti-Malware Engine</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-02.png" alt=""></dt>
						<dd class="titlebar"><h3>Real-time Protection</h3></dd>
						<dd>Automatically Block & Remove Over 200 Million Threats in Real Time and Clear Harmful Tracking Data</dd>
					</dl>
				</div>
				<div class="list last">
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-03.png" alt=""></dt>
						<dd class="titlebar"><h3>No Ransomeware Attack</h3></dd>
						<dd>Proactively Stop any Ransomware Trying to Break into Your PC. Even Petya/GoldenEye Ransomware Can Be Easily Blocked and Removed.</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-04.png" alt=""></dt>
						<dd class="titlebar"><h3>Camera Guard </h3></dd>
						<dd>Inform You Immediately If Any Program Attempts to Use Your Camera Secretly to Steal Your Privacy</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<!-- packsintro -->
	<div class="gift-pack">
		<div class="wrapper">
			<h2>IObit Malware Fighter 5 PRO Valuable New Year Pack Includes </h2>
			<div class="container clearfix">
				<ul>
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-imf-extra.png" alt=""></li>
					<li><strong>IObit Malware Fighter 5 PRO</strong></li>
					<li> <del>$54.95</del>  1 Year / 3 PCs</li>
					<li class="last">Protect Your PC from Virus, Malware & Ransomware in Real Time</li>
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
					<dt>only <strong>$25.99</strong> <del>$94.89</del></dt>
					<dd><a href="https://www.iobit.com/buy.php?product=imf53pcpfamc2599_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf&tw=-8" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf52017newlaunchsale')" class="checkbtn large">Activate Now</a></dd>
					<dd class="last"><i></i>100% 60-Day Money Back Guarantee</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- awards -->
	<div class="awards">
		<div class="wrapper">
			<h2>Trusted and awarded by these medias</h2>
			<img src="<?php echo $pResUrl; ?>images/brand-media.jpg" alt="">
		</div>
	</div>
	<!-- review -->
	<div class="review wrapper">
		<div class="reviews">
			<h2>User Review</h2>
			<h3>"We have not had a problem since using IObit Malware Fighter PRO."</h3>
			<p>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with IObit Malware Fighter Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence. We have not had a problem since using your products."</p>
		</div>
		<div class="reviews active">
			<h2>Media Review</h2>
			<h3>"IObit Malware Fighter will thoroughly scan your system hard drives and any other external storage device"</h3>
			<p>“IObit Malware Fighterwill thoroughly scan your system hard drives and any other external storage device connected to your computer looking for spyware, trojans, keyloggers, worms, hijackers, adware, etc."</p>
		</div>
		<div class="reviews">
			<h2>User Review</h2>
			<h3>"I also had other programs for this purpose installed, but IMF always finds the problems first and blocks them."</h3>
			<p>"Some years ago somebody drew my attention to IObit Malware Fighter. First I was sceptic. But after installing it, it became my favourite anti-malware program. It is very easy to use. Through the years it already has detected several threats and removed it. In cooperation with the other IObit programs, like for example ASC, I have a good PC protection. I now recommend these programs to all my friends and family."</p>
		</div>
		<ul class="handle clearfix">
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"><span></span></div>
				<strong>Bob Bassett</strong>
			</li>
			<li class="active">
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/software.png" alt="software.informer.com"><span></span></div>
				<strong>software.informer.com</strong>
			</li>
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/peter-stoffers.png" alt="Peter Stoffers"><span></span></div>
				<strong>Peter Stoffers</strong>
			</li>
		</ul>
	</div>
	<!-- footer -->
	<div class="footer">
		<div class="wrapper">
			<div class="additional-info clearfix">
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/money-back-guarantee.png"></dt>
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
			<p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- float -->
	<div class="float">
		<a href="https://www.iobit.com/buy.php?product=imf53pcpfamc2599_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf&tw=-8" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf52017newlaunchsale')">
			<div class="inner">
				<p>Only <strong  class="countNum">98 </strong> Packs Left! <em>Buy Now</em></p>
			</div>
		</a>
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
	<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
	<script src="<?php echo $pResUrl; ?>script/script.min.js"></script>
    <script>setTimeout('window.location.href="https://purchase.iobit.com/aff/en/imf/2020newlaunchsale/index.php'+location.search+'"',5000);</script>
</div>
</body>
</html>