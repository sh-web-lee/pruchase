<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
$exTime=empty(intval($_COOKIE['_extasc']))?(empty($_GET['ext'])?0:intval(base64_decode($_GET['ext']))):intval($_COOKIE['_extasc']);
$cTime=3600*24*2;
setcookie('_extasc',$exTime,time()+$cTime);
$refStr='';
if(in_array($_GET['st'],array('asc_gift'))){
	$refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Save 85% OFF on Advanced SystemCare PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="banner">
	<div class="wrapper">
		<a href="https://www.iobit.com/en/index.php" target="_blank" class="logo">IObit</a>
		<h1>
			<span>Thank you! </span> In gratitude for your continued support we are glad to offer <strong>85% OFF</strong>
		</h1>
		<p class="date"> <img src="<?php echo getStaticUrl('images/date.png')?>"> Offer Ends: <strong>72</strong><span>h : </span><strong>72</strong><span>m : </span><strong>72</strong><span>s : </span><strong class="last">72</strong><span>ms</span> </p>
		<div class="content">
			<img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="" class="img-box">
			<dl>
				<dt>
					<h2>Advanced SystemCare 15 PRO</h2>
					1 Year Subscription / 3 PCs 
				</dt>
				<dd> 
					<strong><b>$</b>16.77</strong> <del>$89.97 </del>
				</dd>
				<dd><a href="https://www.iobit.com/buy.php?product=asc153pc1677&ref=en-asc3pcloyaluser<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=purchase_asc " onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-loyaluser');" class="buybtn">Activate Now & Save 85%</a></dd>
			</dl>
		</div>
	</div>
</div>
<div class="payment">
	<img src="<?php echo getStaticUrl('images/payment.png')?>">
</div>
<div class="introduce wrapper">
	<h2>Activate Now to Enjoy FREE cleaning plus PRO benefits:</h2>
	<ul class="clearfix">
		<li>
			<img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
			<h3>PRIVACY PROTECTION </h3>
			<strong>Protect Online Privacy </strong>
			<p>Stop untrusted programs accessing to your personal data.</p>
		</li>
		<li class="faster-3">
			<img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
			<h3>300% FASTER</h3>
			<strong>Ultimate Tuneup</strong>
			<p>Accelerate Internet speed up <br> to 300% faster. </p>
		</li>
		<li class="faster-2">
			<img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
			<h3>200% FASTER</h3>
			<strong>Auto RAM Clean</strong>
			<p>Speed up computer up to <br> 200% faster. </p>
		</li>
		<li class="last">
			<img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="">
			<h3>LESS CRASH</h3>
			<strong>Deep Registry Clean</strong>
			<p>Reduce Windows crashes and <br> errors and improve stability. </p>
		</li>
	</ul>
</div>
<!-- compare-table -->
<div class="compar-tab wrapper clearfix">
	<h2>Learn more about PRO edition</h2>
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
		<tr>
			<th class="item-free">
				<p>Advanced SystemCare 15 FREE</p>
				  Your Current Version
			</th>
			<th class="space"></th>
			<th class="text"></th>
			<th class="space"></th>
			<th class="item-pro">
				<p>Advanced SystemCare 15 PRO</p>
				 1 Year / 3 PCs
			</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td class="item-free"><img src="<?php echo getStaticUrl('images/check-gray.png')?>" alt=""></td>
			<td class="space"></td>
			<td class="text">Basic system clean, fix and optimization</td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo getStaticUrl('images/check-pro.png')?>" alt=""></td>
		</tr>
		<tr>
			<td class="item-free"><img src="<?php echo getStaticUrl('images/check-gray.png')?>" alt=""></td>
			<td class="space"></td>
			<td class="text">Detect malicious links in your web email</td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo getStaticUrl('images/check-pro.png')?>" alt=""></td>
		</tr>
		<tr>
			<td class="item-free"><span class="circle"></span></td>
			<td class="space"></td>
			<td class="text">AI Mode for intelligent scan and premium PC cleaning</td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo getStaticUrl('images/check-pro.png')?>" alt=""></td>
		</tr>
		<tr>
			<td class="item-free"><span class="circle"></span></td>
			<td class="space"></td>
			<td class="text">Reduce and repair system crashes and errors</td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo getStaticUrl('images/check-pro.png')?>" alt=""></td>
		</tr>
		<tr>
			<td class="item-free"><span class="circle"></span></td>
			<td class="space"></td>
			<td class="text">Speed up computer up to 200% faster</td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo getStaticUrl('images/check-pro.png')?>" alt=""></td>
		</tr>
		<tr>
			<td class="item-free"><span class="circle"></span></td>
			<td class="space"></td>
			<td class="text">Accelerate Internet speed up to 300% faster</td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo getStaticUrl('images/check-pro.png')?>" alt=""></td>
		</tr>
		<tr>
			<td class="item-free"><span class="circle"></span></td>
			<td class="space"></td>
			<td class="text">Block unauthorized access to your private files</td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo getStaticUrl('images/check-pro.png')?>" alt=""></td>
		</tr>
		<tr>
			<td class="item-free"><span class="circle"></span></td>
			<td class="space"></td>
			<td class="text">Prevent web pages from stealing your digital fingerprint</td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo getStaticUrl('images/check-pro.png')?>" alt=""></td>
		</tr>
		<tr>
			<td class="item-free"><span class="circle"></span></td>
			<td class="space"></td>
			<td class="text">Auto keep essential programs up-to-date</td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo getStaticUrl('images/check-pro.png')?>" alt=""></td>
		</tr>
		<tr>
			<td class="item-free"><span class="circle"></span></td>
			<td class="space"></td>
			<td class="text">Auto remove privacy traces for safe browsing</td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo getStaticUrl('images/check-pro.png')?>" alt=""></td>
		</tr>
		<tr>
			<td class="item-free"><span class="circle"></span></td>
			<td class="space"></td>
			<td class="text">Auto update to the latest version</td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo getStaticUrl('images/check-pro.png')?>" alt=""></td>
		</tr>
		<tr>
			<td class="item-free"><span class="circle"></span></td>
			<td class="space"></td>
			<td class="text">Free 24/7 technical support on demand</td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo getStaticUrl('images/check-pro.png')?>" alt=""></td>
		</tr>
		</tbody>
		<tfoot>
			<tr>
				<th class="item-free">Your Current Free Version</th>
				<td class="space"></td>
				<th class="text"></th>
				<td class="space"></td>
				<th class="item-pro">
					<a href="https://www.iobit.com/buy.php?product=asc153pc1677&ref=en-asc3pcloyaluser<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=purchase_asc " onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-loyaluser');"class="buybtn">Activate Now</a>
					<del>$89.97</del> <strong>$16.77 </strong>
				</th>
			</tr>
		</tfoot>
	</table>
</div>
<!-- review -->
<div class="container clearfix">
	<div class="review wrapper">
		<div class="review-box">
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<p>
					"Advanced system care 15 is the most complete all in one system on the market. I've been using the products for years now and every year there getting better the new easy interface the deep cleaning you get with the software its breeze to use one click and its doing its magic all the other options that come within system are great also the empty folder finder the internet booster even game booster rocks!! I think it's one of the best cleaning systems out there today."
				</p>
			</div>
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<p>
					"I have purchased many different software programs to speed up and fix problems with my PC. Unfortunately, most of them really didn't help or make a difference until I tried out Advanced System Care 15. I love that there are so many options and solutions to fix any problem. It's amazing how much faster my PC is now after the first scan and repair. Definitely the best product I have come across."
				</p>
			</div>
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<p>
					"I have been using Advanced SystemCare Pro for a long time and this latest version 15 is even better than version 14. It can find and fix problems very quickly and has so many extra features you can use to keep your computer running well and stable. I cannot recommend it more highly."
				</p>
			</div>
			<div class="reviews clearfix active">
				<h2>Media Review</h2>
				<p>"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."</p>
			</div>
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<p>"I have tried various programs over time which have promised to keep my computers running problem free. I turned to ASC years ago using the free version at first. Finding that I no longer suffered from the niggles and bloating that occurs I upgraded to the Paid version and have never looked back since. Advanced SystemCare Pro is the only one I would recommend based on my experiences.  I also use IObit Uninstaller, Smart Defrag and Driver Booster just make things much better."</p>
			</div>
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<p>"I have been using ASC for years now. I have recently tested the latest version V15. And it is by far the most comprehensive version to date. IObit continue to improve their Products and Technology. With more options and easier navigation that help find solutions. I don't need to shop elsewhere."</p>
			</div>
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<p>"The features in Advanced System Care (ASC) 15 are awesome and the overall appearance is clean, fresh, and modern. I have used other all-in-one system maintenance programs, but none have been as effective as ASC 15. The program reduces and eliminates the use of non-essential resources which allow your computer to run cooler and more efficiently. This product is amazing and the best in class. If you care about your laptop or pc, use Advanced System Care 15!"</p>
			</div>
		</div>
		
		<ul class="handle clearfix">
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Ryan-Hill.png" alt="Ryan Hill"><span></span></div>
				<strong>Ryan Hill</strong>

			</li>
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Lyle-Stelmaschuk.png" alt="Lyle Stelmaschuk"><span></span></div>
				<strong>Lyle Stelmaschuk</strong>

			</li>
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/tony-fisher.png" alt="Tony Fisher"><span></span></div>
				<strong>Tony Fisher</strong>

			</li>
			<li class="active">
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"><span></span></div>
				<strong>Cnet</strong>
			</li>
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/danny-r-sheets.png" alt="Danny R. Sheets"><span></span></div>
				<strong>Danny R. Sheets</strong>

			</li>
			<li class="last">
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Brendon-O'Rourke.png" alt="Brendon O'Rourke"><span></span></div>
				<strong>Brendon O'Rourke</strong>

			</li>
			<li class="last">
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Anthony-Baker.png" alt="Anthony Baker"><span></span></div>
				<strong>Anthony Baker</strong>

			</li>
		</ul>
	</div>
</div>
<div class="awards clearfix">
	<div class="wrapper">
		<h2>World-wide Awards</h2>
		<span>As being trusted and awarded by those world-class media in the past fourteen years, you know you’ve got the right PC optimizer.</span>
		<p>
			<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/pc-magazine.png"></a>
			<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/clnet.png"></a>
			<a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/major-geers.png"></a>
			<a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/pc-world.png"></a>
			<a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/chlp.png"></a>
			<a href="http://www.softpedia.com/get/Tweak/System-Tweak/Advanced-WindowsCare-Professional.shtml?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/softpedia.png"></a>
			<a href="http://driver-booster.updatestar.com/?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/updatestar.png"></a>
		</p>
	</div>
</div>

<!-- footer -->
<div class="additional-info wrapper clearfix">
	<dl>
		<dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
		<dd><strong>Money Back Guarantee</strong></dd>
		<dd>If you're not satisfied in the first 60 days, we will give you back your money.</dd>
	</dl>
	<dl>
		<dt><img src="<?php echo $pResUrl; ?>images/godaddy-secure.png"></dt>
		<dd><strong>Secure Payment</strong></dd>
		<dd>IObit supports several safe modes of payment.</dd>
	</dl>
	<dl class="last">
		<dt><img src="<?php echo $pResUrl; ?>images/get-license.png"></dt>
		<dd><strong>Get License</strong></dd>
		<dd>You will receive the license within a few minutes after purchase.</dd>
	</dl>
</div>
<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
<div class="float">
	<div class="wrapper">
		<img src="<?php echo $pResUrl; ?>images/fl-asc-box.png" alt="" class="img-box">
		<div class="left-message">
			<h2><strong>SAVE 85%</strong> on Advanced SystemCare 15 PRO</h2>
			<p><img src="<?php echo getStaticUrl('images/date.png')?>"> Offer Ends: <span> <strong>72</strong>h : <strong>72</strong>m : <strong>72</strong>s : <strong class="last">72</strong>ms</span></p>
		</div>
		<dl>
			<dt><strong><b>$</b>16.77</strong> <del>$89.97 </del></dt>
			<dd><a href="https://www.iobit.com/buy.php?product=asc153pc1677&ref=en-asc3pcloyaluser<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-loyaluser');" class="buybtn">Activate Now</a></dd>
		</dl>
	</div>
</div>
<script>
	exTime=<?php echo $exTime;?>;
</script>
<script type="text/javascript" src="<?php echo getStaticUrl('script/script.js');?>"></script>
</body>
</html>