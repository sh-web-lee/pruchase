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
$refStr='';
if(!empty($_GET['pop'])){
    $refStr.='-'.$_GET['pop'];
}
//if(in_array($_GET['ref'],array('newgift'))){
//	$refStr='-'.$_GET['ref'];
//}
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
	<script>
		function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}
	function pageDivide(divideUrl){
      var queryStr ="";
      var cName = 'enimftestabnewinstallb';
      var pageAb = cGet(cName);
      if (pageAb == 'tob') {
        window.location.replace(divideUrl + queryStr);
      } else {
        if (pageAb == null) {
          var randNum = Math.random();
          if (randNum > 0.5) {
            window.location.replace(divideUrl + queryStr);
            cSet(cName, 'tob');
          } else {
            cSet(cName, 'toa');
          }
        }
      }
    }
    var queryStr ="<?php echo (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING']));?>";
    //pageDivide('./newinstallb.php'+queryStr);
	</script>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<!-- header -->
				<div class="header">
					<a href="https://www.iobit.com/en/index.php" target="_blank" class="logo">IObit</a>
					<div class="title">
						<h1>Special Offer Exclusive for New Members</h1>
					</div>
				</div>
				<!-- stage before-->
				<div class="stage before active">
					<div class="packs">
						<div class="info">
							<h2>IObit Malware Fighter 8 PRO  Valuable New Year Pack</h2>
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
								<dt>IObit Malware Fighter 8 PRO <del>$54.95</del></dt>
								<dd>IObit Uninstaller PRO <del>$19.99</del></dd>
								<dd>Smart Defrag PRO <del>$19.99</del></dd>
								<dd class="gift-name"><img src="<?php echo $pResUrl; ?>images/gift.png" alt="" onclick="goTaget($('.benfits .link'))"> Free Gift for New Member</dd>
								<dd class="last"><em>IObit Malware Fighter PRO Extra 2 Months for 3 PCs</em></dd>
							</dl>
						</div>
						<dl class="checkout">
							<dt>only <strong>$25.99</strong> <del>$94.93</del></dt>
							<dd><a href="https://www.iobit.com/buy.php?product=imf814miusd2599&ref=en-imf14miusdinstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf14mbuy', 'buy', 'imfpurchase-201804');" class="checkbtn large">Activate Now</a></dd>
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
						<dd><a href="https://www.iobit.com/buy.php?product=imf81pc&ref=en-imf1pcinstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf1pcbuy', 'buy', 'imfpurchase-201804');" class="checkbtn middle link1pc">Activate Now</a></dd>
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
						<dd><a href="https://www.iobit.com/buy.php?product=imf83pc&ref=en-imf3pcinstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf3pcbuy', 'buy', 'imfpurchase-201804');" class="checkbtn middle">Activate Now</a></dd>
					</dl>
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
					<li class="last">Protect Your PC from Virus, Malware & Ransomware in Real Time</li>
				</ul>
				<ul>
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-iu.png" alt=""></li>
					<li><strong>IObit Uninstaller PRO</strong></li>
					<li><del>$19.99</del>   1 Year / 1 PC</li>
					<li class="last">Remove Useless Programs & Plug-ins for Cleaner PC</li>
				</ul>
				<ul>
					<li><img src="<?php echo $pResUrl; ?>images/boxshot-sd.png" alt=""></li>
					<li><strong>Smart Defrag PRO</strong></li>
					<li><del>$19.99</del>    1 Year / 1 PC</li>
					<li class="last">Maximize Hard Drive Optimization for Faster PC</li>
				</ul>
				<ul class="last">
					<li><img src="<?php echo $pResUrl; ?>images/months-gift.png" alt=""></li>
					<li><strong>IObit Malware Fighter 8 PRO</strong></li>
					<li>  Extra 2 Months for 3 PCs</li>
					<li class="last">A welcome gift for our new members. </li>
				</ul>
			</div>
			<div class="cartarea clearfix">
				<h3>Limited Supply, <span class="countNum">98</span> Packs Left Today!</h3>
				<dl class="checkout">
					<dt>only <strong>$25.99</strong> <del>$94.93</del></dt>
					<dd><a href="https://www.iobit.com/buy.php?product=imf814miusd2599&ref=en-imf14miusdinstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf14mbuy', 'buy', 'imfpurchase-201804');" class="checkbtn large">Activate Now</a></dd>
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
					<dl>
						<dt class="txtExtra">Valuable New Member Pack</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=imf814miusd2599&ref=en-imf14miusdinstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf14mbuy', 'buy', 'imfpurchase-201804');" class="checkbtn small link3pc">Activate Now</a></dd>
					</dl>
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
						<dd class="txtExtra"></dd>
						<dd><a href="https://www.iobit.com/buy.php?product=imf814miusd2599&ref=en-imf14miusdinstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf14mbuy', 'buy', 'imfpurchase-201804');" class="checkbtn small link3pc">Activate Now</a></dd>
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
	<!-- float -->
	<div class="float">
		<a href="https://www.iobit.com/buy.php?product=imf814miusd2599&ref=en-imf14miusdinstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imf14mbuy', 'buy', 'imfpurchase-201804');">
			<div class="inner">
				<p>Only <strong  class="countNum">98 </strong> Packs Left! <em>Buy Now</em></p>
			</div>
		</a>
	</div>
    <script>refStr="<?php echo $refStr;?>";</script>
	<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
	<script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>
<!--	<script src="--><?php //echo getStaticUrl('script/script.js')?><!--"></script>-->
</body>
</html>