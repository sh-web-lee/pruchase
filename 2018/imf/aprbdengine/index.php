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
	$c_name = 'enimfbd' . $date;
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
if(in_array($_GET['pop'],array('x_imf','b_imf'))){
    $refStr ='-'.$_GET['pop'];
}
if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr .= empty($_GET['to']) ? '-unknown' : '-'.$_GET['to'];
$refStr .= empty($_GET['ref']) ? '-unknown' : '-'.$_GET['ref'];
$refStr .= '-'.$ver;
$refStr .= empty($_GET['insur']) ? '-unknown' : '-'.$_GET['insur'];
$refStr .= '-' . ((strlen($_GET['lsnstatus']) == 0) ? 'unknown' : 'I'.$_GET['lsnstatus']);
$refStr .= '-' . ((strlen($_GET['user']) == 0) ? 'unknown' : 'u'.$_GET['user']);
$refStr .= '-' . ((strlen($_GET['insday']) == 0) ? 'unknown' : 'i'.$_GET['insday']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>73% OFF to Protect against Malware & Virus - IObit Malware Fighter 8 New Release Special | IObit</title>
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
			<a href="https://www.iobit.com/en/index.php" target="_blank" class="logo">IObit</a>
			<h1>Bitdefender Engine: Top PC Security for You </h1>
			<h2>Protect your PC against over 200 million threats </h2>
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
							<span>  Whole Year Protection for 3 PCs</span> <del>$54.95</del>
						</dt>
						<dd>
							<span><i></i> IObit Uninstaller PRO</span> <del>$19.99</del><em>  Free</em>
						</dd>
						<dd>
							<span><i></i> Smart Defrag PRO </span> <del>$19.99</del><em>  Free</em>
						</dd>
					</dl>
					<dl class="price">
						<dt>
							 Only <strong>$25.99</strong> <del>$94.93</del>
						</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=imf83pciusd2599&ref=en-imf3pciusdbd<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdengine');" class="buybtn"><i></i> Activate Now</a></dd>
					</dl>
				</div>
				<dl class="payment">
					<dt><img src="<?php echo $pResUrl; ?>images/opswat.png" alt=""></dt>
	        <dd>
	          <h3>Opswat Certified </h3>
	          <p>
	            IObit Malware Fighter receives Silver certification from <a href="javascript::">OPSWAT <span> OPSWAT has partnered with AV-TEST, AV-Comparatives, Virus Bulletin, SE Labs, SKD Labs and ICSA Labs to test the performance, protection, and usability of anti-malware applications.</span></a>  in their <br> anti-malware quality test.
	          </p>
	        </dd>
				</dl>
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
					<h3>Malware is everywhere!</h3>
					<p>The internet is an increasing dangerous place, over numerous new malware including viruses, worms, spyware, adware and Trojan emerge every day attempting to harm your computer. </p>
				</li>
				<li class="last">
					<h3>Severe consequences if infected</h3>
					<p>Those malware can steal personal, financial, or business information in your computer if it’s been attacked.</p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>Strong PC Protection with Latest Bitdefender Engine</h2>
		<p>Equipped with latest Bitdefender anti-virus engine, IObit Malware Fighter 8 PRO prevents over 209,000,000 security threats from damaging your computer.</p>
		<div class="message-box">
			<dl class="list01">
				<dt>Update-to-date Database</dt>
				<dd>New malware would be constantly added to Bitdefender database to make sure your computer is safe from these harmful infections. </dd>
			</dl>
			<dl class="list02">
				<dt>Real-time Protection</dt>
				<dd>Once Bitdefender engine is enabled, your computer would be fully-protected in real time. Any threats trying to break into would be blocked or removed immediately.</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				 Only <strong>$25.99</strong> <del>$94.93</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=imf83pciusd2599&ref=en-imf3pciusdbd<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdengine');" class="buybtn"><i></i> Activate Now</a></dd>
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
				<dd><h3>Anti-ransomware Engine</h3></dd>
				<dd>Proactively and intelligently stop any Ransomware trying to break into your PC and protect your files.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Safe Box</h3></dd>
				<dd>Protection on your specified important folders from unauthorized access and latest threats.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Camera Guard</h3></dd>
				<dd>Inform you immediately if any attempts to access your camera secretly for privacy stealing.</dd>
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
			<h3>  Get 2 Extra Protection Tools (valued at $39.98) for FREE</h3>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>IObit Uninstaller PRO</strong> <del> $19.99</del> (1 Y / 1 PC)
				</dd>
				<dd class="last">Remove Useless Programs & Plug-ins for Cleaner PC</dd>
			</dl>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Smart Defrag PRO</strong> <del> $19.99</del>  (1 Y/1 PC) 
				</dd>
				<dd class="last">Maximize Hard Drive Optimization <br> for Faster PC </dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				 Only <strong>$25.99</strong> <del>$94.93</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=imf83pciusd2599&ref=en-imf3pciusdbd<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdengine');" class="buybtn"><i></i> Activate Now</a></dd>
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
			<p>As being trusted and awarded by those world-class media in the past seven years, you know you’ve got the right PC protector.</p>
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
		<div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
          <p>
           We’re confident that activating PRO edition will protect your PC all-round for affordable price!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>We accept</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
		<dl class="note wrapper">
			<dt>Note:</dt>
			<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. All Rights Reserved</p>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</div>
</body>
</html>