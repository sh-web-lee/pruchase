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
	if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_asc_2017newyearsale';
	include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Save up to 86% on ASC PRO, speed up, protect and optimize your PC!</title>
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
						<h1>New Year New PC Feeling</h1>
					</div>
				</div>
				<!-- stage before-->
				<div class="stage before active">
					<div class="packs">
						<div class="info">
							<h2>Advanced SystemCare 10 PRO Super Value Pack</h2>
							<strong>86% OFF</strong>
							Save<del>$140.95</del>
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
								<dt>Advanced SystemCare 10 PRO <del>$89.97</del></dt>
								<dd>ASC PRO Extra 2 Months for 3 PCs <del>$14.99</del></dd>
								<dd>Smart Defrag PRO <del>$19.99</del></dd>
								<dd>Protected Folder <del>$19.99</del></dd>
								<dd>AMC Security PRO <del>$19.99</del></dd>
							</dl>
						</div>
						<dl class="checkout">
							<dt>only <strong>$23.98</strong> <del>$164.93</del></dt>
							<dd><a href="http://www.iobit.com/buy.php?product=asc14m2398sdpfamc_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc&tw=-8" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc2017newyearsale')" class="checkbtn large">Activate Now</a></dd>
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
						<dt><strong>$14.77</strong> <del>$29.99</del></dt>
						<dd><a href="http://www.iobit.com/buy.php?product=asc101pc1477_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc&tw=-8" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc2017newyearsale')" class="checkbtn middle link1pc">Activate Now</a></dd>
					</dl>
				</div>
				<div class="extra family-pack">
					<div class="info">
						<h3>Golden Family Pack</h3>
						<p>1 Year / 3 PCs</p>
						<strong>77%off</strong>
					</div>
					<dl class="checkout">
						<dt><strong>$19.99</strong> <del>$89.97</del></dt>
						<dd><a href="http://www.iobit.com/buy.php?product=asc103pc1999_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc&tw=-8" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc2017newyearsale')" class="checkbtn middle">Activate Now</a></dd>
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
			<h2>Activate ASC 10 PRO to get a faster, cleaner and more secure PC!</h2>
			<div class="container clearfix">
				<div class="list">
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-01.png" alt=""></dt>
						<dd class="titlebar"><h3>200% <sup>*</sup></h3></dd>
						<dd>Reduce system stutter/lag and speed up PC up to 200% faster</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-02.png" alt=""></dt>
						<dd class="titlebar"><h3>Deeper</h3></dd>
						<dd>Fix registry issues to reduce Windows crashes & error messages</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-03.png" alt=""></dt>
						<dd class="titlebar"><h3>Real-time</h3></dd>
						<dd>Protect against spyware and malware in real time</dd>
					</dl>
				</div>
				<div class="list last">
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-04.png" alt=""></dt>
						<dd class="titlebar"><h3>300% <sup>*</sup></h3></dd>
						<dd>Accelerate download, surfing, gaming, YouTube viewing up to 300% faster</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-05.png" alt=""></dt>
						<dd class="titlebar"><h3>Auto</h3></dd>
						<dd>Auto stop unused processes to release RAM and improve PC performance</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-06.png" alt=""></dt>
						<dd class="titlebar"><h3>Safer</h3></dd>
						<dd>Erase privacy traces to prevent from being tracked</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<!-- packsintro -->
	<div class="gift-pack">
		<div class="wrapper">
			<h2>Advanced SystemCare 10 PRO Super Value Pack Includes </h2>
			<div class="container clearfix">
				<ul>
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-asc-extra.png" alt=""></li>
					<li><strong>Advanced SystemCare 10 PRO</strong></li>
					<li><del>$14.99</del>  Extra 2 Months for 3 PCs</li>
					<li class="last">Extra 2 months' subscription is exclusive to Advanced SystemCare 10 PRO Super Value Pack.</li>
				</ul>
				<ul>
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-amc.png" alt=""></li>
					<li><strong>AMC Security PRO</strong></li>
					<li><del>$19.99</del>  1 Y / Multi Devices</li>
					<li class="last">200% Speed up and Fully Protect your Android from any treats!</li>
				</ul>
				<ul>
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-sd.png" alt=""></li>
					<li><strong>Smart Defrag PRO</strong></li>
					<li><del>$19.99</del>   1 Y / 1 PC</li>
					<li class="last">Get the Maximum Hard Drive Performance!</li>
				</ul>
				<ul class="last">
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-pf.png" alt=""></li>
					<li><strong>Protected Folder</strong></li>
					<li><del>$19.99</del>   1 Y / 1 PC</li>
					<li class="last">Never Worry about Data Theft or Privacy Leaks!</li>
				</ul>
			</div>
			<div class="cartarea clearfix">
				<h3>Limited Supply, <span class="countNum">98</span> Packs Left Today!</h3>
				<dl class="checkout">
					<dt>only <strong>$23.98</strong> <del>$164.93</del></dt>
					<dd><a href="http://www.iobit.com/buy.php?product=asc14m2398sdpfamc_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc&tw=-8" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc2017newyearsale')" class="checkbtn large">Activate Now</a></dd>
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
			<h3>"Not only is it a great product, but the support is equally great"</h3>
			<p>"it's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."</p>
		</div>
		<div class="reviews">
			<h2>User Review</h2>
			<h3>"Cleaned up Spyware and Malware My antivirus lets slip through"</h3>
			<p>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"</p>
		</div>
		<div class="reviews active">
			<h2>Media Review</h2>
			<h3>"Advanced Systemcare aims to remedy whatever ails your computer."</h3>
			<p>"There's nothing worse than a computer that is bogged down so much that it impedes your ability to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."-Cnet</p>
		</div>
		<div class="reviews">
			<h2>User Review</h2>
			<h3>"My choice is still overwhelmingly Advanced SystemCare Pro"</h3>
			<p>"As a computer repair tech I find by downloading and scanning with ASC most common problems are resolved. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</p>
		</div>
		<div class="reviews">
			<h2>User Review</h2>
			<h3>"My system has never run better."</h3>
			<p>"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</p>
		</div>
		<ul class="handle clearfix">
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Bruce-Ramsay.png" alt="Bruce Ramsay"><span></span></div>
				<strong>Bruce Ramsay</strong>
				<span>2015</span>
			</li>
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Bob-Bassett.png" alt="Bob Bassett"><span></span></div>
				<strong>Bob Bassett</strong>
				<span>2014</span>
			</li>
			<li class="active">
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Cnet.png" alt="Cnet"><span></span></div>
				<strong>Cnet</strong>
			</li>
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Charles-R-Widick.png" alt="Charles R. Widick"><span></span></div>
				<strong>Charles R. Widick</strong>
				<span>2015</span>
			</li>
			<li class="last">
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Gordon-Griswold.png" alt="Gordon Griswold"><span></span></div>
				<strong>Gordon Griswold</strong>
				<span>2014</span>
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
				<dd>*.Data may vary based on different system or computer.</dd>
				<dd>*.License for AMC Security Full Version with in-app ads.</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- float -->
	<div class="float">
		<a href="http://www.iobit.com/buy.php?product=asc14m2398sdpfamc_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc&tw=-8" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc2017newyearsale')">
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
    <script>setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);</script></div>
</body>
</html>