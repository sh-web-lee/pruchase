<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'enimfcg' . $date;
	if (!isset($_COOKIE[$c_name])) {
		$packsNum = 55;
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			setcookie($c_name, 3, time() + 3600 * 24 * 2);
			$packsNum = 3;
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>73% OFF to Get All-round Protection -  New Released IObit Malware Fighter 6 | IObit</title>
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
			<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<h1>IObit Malware Fighter 6 - New Release Special  </h1>
			<h2>Comprehensive Online Protection for You and Your Beloved  </h2>
			<div class="left-img">
				<img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
			</div>
			<div class="right-message">
				<div class="box">
					<dl class="message">
						<dt>
							<h3>Only 
								<div class="countdown">
				          <div class="scroll-tick" ><span>0</span></div>
				          <div class="scroll-tick" ><span>0</span></div>
				        </div>
	      				Security Packs Left Today! 
	      			</h3>
							<span>  Whole Year Protection for 3 PCs</span> <del>699 kr</del>
						</dt>
						<dd>
							<span><i></i> Protected Folder</span> <del>249 kr</del><em>  Free</em>
						</dd>
						<dd>
							<span><i></i> AMC Security PRO </span> <del>249 kr</del><em>  Free</em>
						</dd>
					</dl>
					<dl class="price">
						<dt>
							 Only <strong>329 kr</strong> <del>1 197 kr</del>
						</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=sv-imf63pcpfamc329&ref=sv_imfcg3pcpfamc1804&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-cameraguard-sv');" class="buybtn"><i></i> Activate Now</a></dd>
					</dl>
				</div>
				<img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" class="payment">
			</div>
		</div>
	</div>
	<!--end banner-->
	<!--cruces-->
	<div class="cruces">
		<div class="wrapper clearfix">
			<h2>Things You Must Know</h2>
			<ul>
				<li>
					<h3>Camera Security</h3>
					<p>Computer camera is not as safe as you believed. Oppositely, many programs can break into internet connected camera in minutes. Computer cameras without safeguard are undoubtedly exposed to be hacked.</p>
				</li>
				<li>
					<h3>Under surveillance once hacked</h3>
					<p>Everything you do in front of the camera will be watched by strangers. Your life will be shared online and broadcasted live through internet. Once attacked, expose all your privacy.</p>
				</li>
				<li class="last">
					<h3>How to prevent</h3>
					<p>Change the password regularly or choose a trustworthy camera guard. In fact, changing the password is far from enough. You need a powerful camera guard. </p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>The Super Powerful Protection Your Camera Need</h2>
		<p>Camera Guard in IObit Malware Fighter 6 PRO will inform you immediately once unauthorized software uses your camera secretly.</p>
		<div class="message-box">
			<dl class="list01">
				<dt>Block Unauthorized Access</dt>
				<dd>Once the camera was used by unauthorized program, Camera Guard will detect and keep you informed to prevent privacy leak. </dd>
			</dl>
			<dl class="list02">
				<dt>Full Protection</dt>
				<dd>To make sure full protection, Camera Guard will confirm with you every time when programs try to use the camera, unless you click “remember” if you strongly trust the program.</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				 Only <strong>329 kr</strong> <del>1 197 kr</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=sv-imf63pcpfamc329&ref=sv_imfcg3pcpfamc1804&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-cameraguard-sv');" class="buybtn"><i></i> Activate Now</a></dd>
			<dd class="last"><i></i> 100% 60 Days Money Back Guarantee</dd>
		</dl>
	</div>
	<!--end db message-->
	<!--feature-->
	<div class="feature">
		<div class="wrapper">
			<h2>You Can Also Get Other Protections Only in PRO</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
				<dd><h3>Bitdefender Engine</h3></dd>
				<dd>Unbeatable virus detection with advanced Bitdefender Anti-virus Engine.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Safe Box</h3></dd>
				<dd>Protection on your specified important folders from unauthorized access and latest threats.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Anti-ransomware Engine</h3></dd>
				<dd>Proactively and intelligently stop any Ransomware trying to break into your PC and protect your files.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
				<dd><h3>Auto Update</h3></dd>
				<dd>Automatic update to the latest version</dd>
			</dl>
		</div>
	</div>
	<!--end feature-->
	<!--gift-message-->
	<div class="gift-message">
		<div class="wrapper">
			<h2>73% OFF to Activate IObit Malware Fighter PRO Today</h2>
			<h3>  Get 2 Extra Protection Tools (valued at 498 kr) for FREE</h3>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Protected Folder</strong> <del> 249 kr</del> (1 Y / 1 PC)
				</dd>
				<dd class="last">No Leak of Important Files for Secured Privacy</dd>
			</dl>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>AMC Security PRO</strong> <del> 249 kr</del> (1 Y / 1 device)
				</dd>
				<dd class="last">Keep Your Android Fast, Safe and Virus Free!</dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				 Only <strong>329 kr</strong> <del>1 197 kr</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=sv-imf63pcpfamc329&ref=sv_imfcg3pcpfamc1804&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-cameraguard-sv');" class="buybtn"><i></i> Activate Now</a></dd>
			<dd class="last"><i></i> 100% 60 Days Money Back Guarantee</dd>
		</dl>
	</div>
	<div class="review wrapper clearfix">
		<h2>What Other Users and Media Say About This New Version</h2>
		<dl class="gelu-batir">
			<dt>
				<img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="">
			</dt>
			<dd>
				<strong>Gelu Batir</strong>
			</dd>
			<dd>I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while  I also recommended this product to two of my friends. </dd>
		</dl>
		<dl class="software">
			<dt>
				<img src="<?php echo getStaticUrl('images/software.png')?>" alt="">
			</dt>
			<dd>
				<strong>Software.Informer</strong>
			</dd>
			<dd>The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similar tools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.</dd>
		</dl>
		<dl class="david-cassidy">
			<dt>
				<img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="">
			</dt>
			<dd>
				<strong>David Cassidy</strong>
			</dd>
			<dd>I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter. I would recommend that they forget the rest and get the best which is IObit Malware Fighter. </dd>
		</dl>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="award wrapper">
			<h2>World-wide Awards</h2>
			<p>As being trusted and awarded by those world-class media in the past ten years, you know you’ve got the right PC protection</p>
			<ul class="clearfix">
				<li class="first">
					<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/pc-sm.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/major-geeks.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/pcworld.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/chip.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.softpedia.com/get/System/System-Miscellaneous/IObit-Driver-Booster.shtml?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="">
					</a>
				</li>
				<li class="last">
					<a href="http://driver-booster.updatestar.com/?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/updatestar.png')?>" alt="">
					</a>
				</li>
			</ul>
		</div>
		<dl class="note wrapper">
			<dt>Note:</dt>
			<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - 2018 IObit. All Rights Reserved</p>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</div>
</body>
</html>