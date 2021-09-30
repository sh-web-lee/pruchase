<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
$viewNum = rand(96, 125);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
    $date = $_GET['d'];
    $cName = 'newinstallb' . $date;
    $cookie = $_COOKIE[$cName];
    if ($cookie) {
        $packsNum = $_COOKIE[$cName];
        if ($packsNum > 3) {
            $packsNum--;
            setcookie($cName, $packsNum);
            if (rand(0, 100) % 2 == 0) {
                $packsNum = $packsNum + 1;
            }
        } else {
            $packsNum = 3;
        }
    } else {
        $packsNum = 98;
        setcookie($cName, $packsNum);
    }
    echo json_encode(array('packsNum' => $packsNum, 'viewNum' => $viewNum));
    exit();
}
	$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
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
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://www.iobit.com/en/index.php" class="logo" target="_blank">IObit</a>
			<div class="title">
				<h1>FREE GIFT with every purchase</h1>
				<p>Exclusive for New Members</p>
			</div>
			<div class="left-img">
				<h2>Valuable Bundle Pack</h2>
				<div class="img-box"></div>
				<span class="off "></span>
			  <div class="mask-gift">
			    <div class="mask-box">
			    	<div class="maskbox"></div>
			    </div>
			  </div>
			</div>
			<div class="message">
				<ul>
					<li class="active" data-url="https://www.iobit.com/buy.php?product=imf814miusd2599&ref=en-imf14miusdinstallb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
					                   data-ga="ga('send', 'event', 'imfbundlebuy', 'buy', 'imfpurchase-2020');">
						<div class="img-box"> 
							<img src="<?php echo $pResUrl;?>images/imf-smail-box.png" alt="">
							<img src="<?php echo $pResUrl;?>images/gift-smail-box.png" alt="" class="gift">
						</div>
						<p>73% OFF</p>
					</li>
					<li data-url="https://www.iobit.com/buy.php?product=imf81pc14m&ref=en-imf1pc14minstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
					    data-ga="ga('send', 'event', 'imf1pcbuy', 'buy', 'imfpurchase-2020');">
						<div class="img-box"> 
							<img src="<?php echo $pResUrl;?>images/imf-smail-box.png" alt="">
						</div>
						<p>50% OFF</p>
					</li>
					<li data-url="https://www.iobit.com/buy.php?product=imf83pc14m&ref=en-imf3pc14minstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
					    data-ga="ga('send', 'event', 'imf3pcbuy', 'buy', 'imfpurchase-2020');">
						<div class="img-box"> 
							<img src="<?php echo $pResUrl;?>images/imf-smail-box.png" alt="">
						</div>
						<p>56% OFF</p>
					</li>
				</ul>
				<dl>
					<dd>
						<p>IObit Malware Fighter 8 PRO (1 Year / 3 PCs) <del>$54.95</del></p>
						<p>IObit Uninstaller PRO (1 Year / 1 PC) <del>$19.99</del></p>
						<p>Smart Defrag PRO (1 Year / 1 PC) <del>$19.99</del></p>
					</dd>
					<dt>
						<div class="countdown countdown1">
	            <div class="scroll-tick"><strong>0</strong></div>
	            <div class="scroll-tick"><strong>0</strong></div>
	          </div>
	          Sets to Get 2 Extra Months Free of IObit Malware Fighter 8 PRO
					</dt>
				</dl>
				<div class="price">
					<del>$94.93</del> <strong>$<b>25</b>.99</strong>
					<a href="https://www.iobit.com/buy.php?product=imf814miusd2599&ref=en-imf14miusdinstallb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbundlebuy', 'buy', 'imfpurchase-2020');" class="buybtn large" data-text="Activate Now">
						<span>A</span>
						<span>c</span>
						<span>t</span>
						<span>i</span>
						<span>v</span>
						<span>a</span>
						<span>t</span>
						<span>e</span>
						<span>N</span>
						<span>o</span>
						<span>w</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- payments -->
	<div class="payments">
	  <div class="wrapper clearfix">
	    <img class="fl" src="<?php echo $pResUrl;?>images/opswat.png" alt="">
	    <p class="fl">
	      <strong>Opswat Certified </strong>  <br>
	      IObit Malware Fighter receives Silver certification from <a>OPSWAT</a> in their anti-malware quality test.
	      <span>
	        OPSWAT has partnered with AV-TEST, AV-Comparatives, Virus Bulletin, SE Labs, SKD Labs and ICSA Labs <br>
	        to test the performance, protection, and usability of anti-malware applications.
	      </span>
	    </p>
	  </div>
	</div>
	<!-- end payments -->
	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2>Activate Now to Enjoy Top Computer Security with Full-round Protection</h2>
			<div class="container clearfix">
				<div class="list">
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-01.png" alt=""></dt>
						<dd class="titlebar"><h3>Bitdefender Engine</h3></dd>
						<dd>Prevent over 200 million security threats from infecting and damaging your computer.</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-02.png" alt=""></dt>
						<dd class="titlebar"><h3>Deeper Real-time Protection</h3></dd>
						<dd>Triple protection engines and multiple security guards guarantee full-round pc protection in real time.</dd>
					</dl>
				</div>
				<div class="list last">
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-04.png" alt=""></dt>
						<dd class="titlebar"><h3>Safer Personal Data</h3></dd>
						<dd>Use password to protect your personal data so no one could gain access without permission.</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/benfits-icon-03.png" alt=""></dt>
						<dd class="titlebar"><h3>Stop Ransomware</h3></dd>
						<dd>Stop ransomware attempting to break into your computer or encrypt your important files.</dd>
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
			<h2>IObit Malware Fighter 8 PRO Valuable New Member Pack Includes </h2>
			<div class="container clearfix">
				<ul>
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-imf-extra.png" alt=""></li>
					<li><strong>IObit Malware Fighter 8 PRO</strong></li>
					<li> <del>$54.95</del>  1 Year / 3 PCs</li>
					<li class="last">Protect PC from Virus, Malware & Ransomware in Real Time</li>
				</ul>
				<ul>
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-iu.png" alt=""></li>
					<li><strong>IObit Uninstaller PRO</strong></li>
					<li><del>$19.99</del>   1 Year / 1 PC</li>
					<li class="last">Uninstall Unwanted Plug-ins for Cleaner PC & Browsing</li>
				</ul>
				<ul>
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-sd.png" alt=""></li>
					<li><strong>Smart Defrag PRO</strong></li>
					<li><del>$19.99</del>    1 Year / 1 PC</li>
					<li class="last">Maximize Hard Drive Optimization for Faster PC</li>
				</ul>
				<ul class="last">
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-imf.png" alt=""></li>
					<li><strong>IObit Malware Fighter 8 PRO</strong></li>
					<li>  Extra 2 Months for 3 PCs</li>
					<li class="last">A welcome gift for our new members. </li>
				</ul>
			</div>
			<div class="cartarea clearfix">
				<h3>Limited Supply, <div class="countdown countdown2">
	            <div class="scroll-tick"><strong>0</strong></div>
	            <div class="scroll-tick"><strong>0</strong></div>
	          </div> Packs Left Today!
	       </h3>
				<dl class="checkout">
					<dt> <del>$94.93</del> <strong>$<b>25</b>.99</strong></dt>
					<dd><a href="https://www.iobit.com/buy.php?product=imf814miusd2599&ref=en-imf14miusdinstallb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf " onclick="ga('send', 'event', 'imfbundlebuy', 'buy', 'imfpurchase-2020');" class="buybtn large" data-text="Activate Now">
							<span>A</span>
							<span>c</span>
							<span>t</span>
							<span>i</span>
							<span>v</span>
							<span>a</span>
							<span>t</span>
							<span>e</span>
							<span>N</span>
							<span>o</span>
							<span>w</span>
						</a>
					</dd>
					<dd class="last"><i></i>100% 60-Day Money Back Guarantee</dd>
				</dl>
			</div>
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
		<div class="reviews">
			<h2>User Review</h2>
			<h3>"IObit Malware fighter is great as it can scan files and usbs and protect against online and offline threats."</h3>
			<p> Overall with IObit products I have gotten great results even with the free versions as they have helped me and my computer. I would recommend IObit and all of their programs to anyone looking for protection and speediness of their computer and making life just that bit easier.</p>
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
			<li>
			<div class="badge"><img src="<?php echo $pResUrl; ?>images/adam-cullen.png" alt="Adam Cullen"><span></span></div>
				<strong>Adam Cullen</strong>
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
					<a href="https://www.iobit.com/buy.php?product=imf814miusd2599&ref=en-imf14miusdinstallb&aff=<?php echo $_GET['aff']?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbundlebuy', 'buy', 'imfpurchase-2020');" class="buybtn small" data-text="Activate Now">
						<span>A</span>
						<span>c</span>
						<span>t</span>
						<span>i</span>
						<span>v</span>
						<span>a</span>
						<span>t</span>
						<span>e</span>
						<span>N</span>
						<span>o</span>
						<span>w</span>
					</a>
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
				<td class="text">Anti-malware with latest IObit malware database  <sup class="c-green">IMPROVED</sup></td>
				<td class="space"></td>
				<td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
				<td class="text">Quickly detect threats hiding in your computer <sup class="c-green">IMPROVED</sup></td>
				<td class="space"></td>
				<td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
				<td class="text">Detect 209,000,000+ threats with Bitdefender & IObit engines  <sup class="c-green">IMPROVED</sup></td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
				<td class="text">Stop ransomware attempting to encrypt your important files   </td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
				<td class="text">No one can access to your personal data without password <sup class="c-green">IMPROVED </sup></td>
				<td class="space"></td>
				<td class="item-free"></td>
				<td class="space"></td>
				<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/ginger-star.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_email.png"></td>
				<td class="text">Detect and identify malicious links in your web mails <sup class="c-red">NEW</sup></td>
				<td class="space"></td>
				<td class="item-free checked"> <img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
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
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
				<td class="text">Boot-time Disk Protection Against Malicious Attacks with MBR Guard </td>
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
						<dt class="priceExtra"><strong>$25.99</strong> <del>$94.93</del></dt>
						<dd class="txtExtra">Valuable Bundle Pack</dd>
						<dd>
							<a href="https://www.iobit.com/buy.php?product=imf814miusd2599&ref=en-imf14miusdinstallb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbundlebuy', 'buy', 'imfpurchase-2020');" class="buybtn small" data-text="Activate Now">
								<span>A</span>
								<span>c</span>
								<span>t</span>
								<span>i</span>
								<span>v</span>
								<span>a</span>
								<span>t</span>
								<span>e</span>
								<span>N</span>
								<span>o</span>
								<span>w</span>
							</a>
						</dd>
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
	    <!-- award -->
	    <div class="award">
	      <h2>Trusted and awarded by these media</h2>
	      <img src="<?php echo $pResUrl;?>images/award.png" alt="">
	    </div>
	    <!-- service -->
	    <div class="service clearfix">
	      <dl class="fl clearfix">
	        <dt><img src="<?php echo $pResUrl;?>images/money-back.png" alt=""></dt>
	        <dd>
	          <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
	          <p>
	            We're confident that activating PRO edition will protect your PC all-round for
	            affordable price!
	          </p>
	        </dd>
	      </dl>
	      <dl class="fr">
	        <dd>
	          <h3>We accept</h3>
	        </dd>
	        <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
	      </dl>
	    </div>
	    <!-- annotation -->
	    <dl class="annotation">
	      <dt>Note:</dt>
	      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
	    </dl>
	    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
	  </div>
	</div>
	<!-- end footer -->
	<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>