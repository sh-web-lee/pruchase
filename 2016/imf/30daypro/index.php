<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}


$refStr='';
$reduceNum=68807174;
$buyNum = ceil(microtime_float() * 1000 / 20000) -$reduceNum;
$buyNum = number_format($buyNum);

if ($_GET['action'] == 'getPacks'){
    echo $buyNum;
    exit;
}
if(!empty($_GET['pop'])){
    $refStr.='-'.$_GET['pop'];
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
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<!-- header start -->
<div class="banner">
	<div class="wrapper">
		<a href="https://www.iobit.com/en/index.php" class="logo" target="_blank">IObit</a>
		<div class="title">
			<h1>IObit Malware Fighter 8 PRO</h1>
			<h2>Enjoy 30-Day Full Protection from IObit Malware Fighter 8 PRO for FREE</h2>
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
					<dd>Pay $0 to enjoy IMF 8 PRO for 30 days</dd>
					<dd>Opt out anytime during 30-day period</dd>
				</dl>
				<p class="leaving">Leaving this page will lose your chance!</p>
				<a href="https://www.iobit.com/buy.php?product=imf30day&ref=en-imf30daypro<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-30daypro');" class="buybtn">Get 30 Days PRO for FREE</a>
			</div>
		</div>
	</div>
</div>
<!-- header end -->
<div class="trial">
	<dl class="wrapper">
		<dt>Promotion terms</dt>
		<dd>At the end of the 30-day period, your credit card or PayPal account will be charged $24.95 automatically. This 55% discount from the original price of $54.95 is exclusive bonus for customers who choose to order today!</dd>
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
			<dd><strong>Detect, Block and Remove 209,000,000+ Threats  </strong> Dual Engines allow to detect, block and remove over 209 million hidden threats like spyware, ransomware, adware, trojans, keyloggers, bots, worms, and hijackers more deeply and efficiently</dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/icons03.jpg" alt=""></dt>
			<dd><strong>Camera Guard and Anti-Tracking </strong> Inform you immediately if any program attempts to use your camera secretly to steal your privacy and auto clean harmful traces to protect sensitive information you enter online, such as bank accounts, emails or other social accounts.</dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/icons04.jpg" alt=""></dt>
			<dd><strong> Block Ransomware & Protect Your Files and Money </strong> Proactively stop any ransomware trying to break into your PC. Even Petya/GoldenEye ransomware can be easily blocked and removed.</dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/icons05.jpg" alt=""></dt>
			<dd><strong>Password-protected personal data </strong> Your personal data can be kept separately from others and protected with customized password. No one can gain access without permission. </dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/icons06.jpg" alt=""></dt>
			<dd><strong>Prevent Malicious Processes & Viruses from USB </strong> Effectively stop malicious processes running in the system and virus infections carried by USB Disk.</dd>
		</dl>
	</div>
	<dl class="opt-out">
		<dt><span>Now</span> <span class="price">$0</span></dt>
		<dd><a href="https://www.iobit.com/buy.php?product=imf30day&ref=en-imf30daypro<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-30daypro');" class="buybtn">Get My 30-Day PRO for FREE</a></dd>
		<dd><span>Opt out anytime during 30-day period</span><span>Enjoy exclusive 55% OFF after 30-day period is over</span></dd>
	</dl>
	<div class="media clearfix">
		<h2>Media & User Review</h2>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/software.jpg" alt=""></dt>
			<dd><strong>Software.Informer</strong> <p>It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.</p></dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/gelu-batir.jpg" alt=""></dt>
			<dd><strong>Gelu Batir</strong> <p>It scans my laptop without affecting its performance while I also recommended this product to two of my friends.</p></dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/clnet.jpg" alt=""></dt>
			<dd><strong>Cnet</strong> <p>This easy-to-use and informative application cleans, configures, and optimizes your PC.</p></dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/david-cassidy.jpg" alt=""></dt>
			<dd><strong>David Cassidy </strong> <p>It is lot quicker at scanner and easy to use.</p></dd>
		</dl>
	</div>
	<div class="comparison-table wrapper" id="compare">
		<h2>See What PRO Edition Can Do for You and Enjoy the PRO Benefits for 30 Days for FREE</h2>
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<thead>
			<tr>
				<th class="text" colspan="2">

				</th>
				<th class="itemb">
					<div class="thbg">
						IObit Malware Fighter <br>FREE
					</div>
				</th>
				<th class="itema">
					<div class="thbg">
						IObit Malware Fighter <br> PRO
					</div>
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
				<td class="virtue">Anti-malware with latest IObit malware database  <sup>IMPROVED</sup></td>
				<td class="itemb"><div class="bg bgnone"><span class="mark-icons gray-icon">√</span></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
				<td class="virtue"> Quickly detect threats hiding in your computer <sup>IMPROVED</sup></td>
				<td class="itemb"><div class="bg bgnone"><span class="mark-icons gray-icon">√</span></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
				<td class="virtue">Detect 203,000,000+ threats with Bitdefender & IObit engines  <sup>IMPROVED</sup></td>
				<td class="itemb"><div class="bg"></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
				<td class="virtue">Stop ransomware attempting to encrypt your important files </td>
				<td class="itemb"></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
				<td class="virtue">No one can access to your personal data without password <sup> IMPROVED </sup>    </td>
				<td class="itemb"><div class="bg"></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_email.png"></td>
				<td class="virtue">	Detect and identify malicious links in your web mails <sup class="red"> NEW </sup>    </td>
				<td class="itemb"><div class="bg bgnone"><span class="mark-icons gray-icon">√</span></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
				<td class="virtue">Scan Download Files and Remove Ads to Enhance Protection <sup> IMPROVED</sup>  </td>
				<td class="itemb"><div class="bg bgnone"><span class="mark-icons gray-icon">√</span></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
				<td class="virtue">Full Anti-Malware Ability with Unique "Dual-Core" Engine  <sup>IMPROVED</sup> </td>
				<td class="itemb"><div class="bg"></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
				<td class="virtue">Boot-time Disk Protection Against Malicious Attacks with MBR Guard  </td>
				<td class="itemb"><div class="bg"></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
				<td class="virtue">Safeguard Your Camera against Unauthorized Access  <sup>IMPROVED</sup></td>
				<td class="itemb"><div class="bg"></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
				<td class="virtue">Comprehensive Real-time Protection for Top PC Security <sup>IMPROVED</sup></td>
				<td class="itemb"><div class="bg"></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
				<td class="virtue">Prevent Virus Infection Carried by USB Disk   </td>
				<td class="itemb"><div class="bg"></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
				<td class="virtue">Detect Malicious Process Running in RAM</td>
				<td class="itemb"><div class="bg"></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
				<td class="virtue">Auto Clean Surfing Privacy Trace with Browser Anti-Tracking <sup>IMPROVED</sup></td>
				<td class="itemb"><div class="bg"></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
				<td class="virtue">Intelligently Works in Background without Interrupting</td>
				<td class="itemb"><div class="bg"></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
				<td class="virtue">Automatic Update to the Latest Version</td>
				<td class="itemb"><div class="bg"></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_16.png"></td>
				<td class="virtue">Free 24/7 Technical Support on Demand</td>
				<td class="itemb"><div class="bg"></div></td>
				<td class="itema"><span class="mark-icons">√</span></td>
			</tr>
			</tbody>
		</table>
	</div>
</div>

<!-- container end -->
<div class="bottom-buy">
	<div class="wrapper">
		<img src="<?php echo $pResUrl; ?>images/imf-bottom-box.png" alt="">
		<ul>
			<li>Pay $0 to enjoy IMF 8 PRO for 30 days </li>
			<li>Opt out anytime during 30-day period</li>
		</ul>
		<a href="https://www.iobit.com/buy.php?product=imf30day&ref=en-imf30daypro<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-30daypro');" class="buybtn">Get 30 Days PRO for FREE</a>
	</div>
</div>
<div class="product">
	<h2>Product Awards</h2>
	<img src="<?php echo $pResUrl; ?>images/awrad.jpg" alt="">
	<!-- footer start -->
	<div class="footer wrapper">Copyright © 2005 - <?php echo date(Y)?> IObit. All Rights Reserved</div>
	<!-- footer end -->
</div>
</body>
</html>