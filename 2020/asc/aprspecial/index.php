<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(35,45);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);

if(!empty($_GET['insur'])){
  $refStr.='-'.$_GET['insur'];
}

if(!empty($_GET['pop'])){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Save 50% on Advanced SystemCare PRO - IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
	<div class="wrapper clearfix">
    <!-- logo -->
		<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
    <!-- title -->
		<div class="title">
			<h1>Work-from-home Special Sale</h1>
			<p>50% OFF your 6-month Subscription</p>
		</div>
		<div class="box">
			<p class="month">1 Month</p>
			<strong>$<b>2.66</b></strong>
			<p class="pc">per month for 3 PCs</p>
			<p class="at">$2.66 at Checkout</p>
			<a href="https://www.iobit.com/buy.php?product=asc131m&ref=en-asc1mspecial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc1mbuy', 'buy', 'ascpurchase-special2020')" class="buybtn border">Buy Now</a>
		</div>
		<div class="box">
			<p class="month">3 Months</p>
			<strong>$<b>2.66</b></strong>
			<p class="pc">per month for 3 PCs</p>
			<p class="at">$7.98 at Checkout</p>
			<a href="https://www.iobit.com/buy.php?product=asc133m&ref=en-asc3mspeical<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick=" ga('send', 'event', 'asc3mbuy', 'buy', 'ascpurchase-special2020')" class="buybtn border">Buy Now</a>
		</div>
		<div class="box packs">
			<p class="date">Hurry! <strong>04</strong>M: <strong>04</strong>S: <strong>04</strong>Ms Left</p>
			<p class="month">6 Months</p>
			<strong>$<b>1.33</b></strong>
			<p class="pc">per month for 3 PCs</p>
			<p class="at"><del>$15.96</del> $7.98 at Checkout <span>Save <b>50%</b></span></p>
			<a href="https://www.iobit.com/buy.php?product=asc136m&ref=en-asc6mspecial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick=" ga('send', 'event', 'asc6mbuy', 'buy', 'ascpurchase-special2020')   " class="buybtn">Buy Now</a>
		</div>
	</div>
</div>
<!-- banner end -->

<!-- million start -->
<div class="million">
	<div class="wrapper">
		<h2>Activate Now to get a faster, cleaner and more secure PC!</h2>
	</div>
</div>
<!-- million end -->

<!-- asc-message start -->
<div class="asc-message">
	<div class="wrapper">
		<div class="content">
			<img src="<?php echo $pResUrl; ?>images/asc-message.png" alt="" class="asc-box">
      <!-- 200%* -->
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
				<dd>
					<strong>200%*</strong>
					<p>Reduce system stutter/lag and speed up PC up to 200% faster.</p>
				</dd>
			</dl>
      <!-- 300%* -->
			<dl class="two">
				<dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
				<dd>
          <strong>300%*</strong>
          <p>
            Accelerate download, surfing, gaming, YouTube viewing <br>
            up to 300% faster.
          </p>
				</dd>
			</dl>
      <!-- Deeper -->
			<dl class="three">
				<dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
				<dd>
					<strong>Deeper</strong>
					<p>
            Fix registry issues to reduce Windows <br>
            crashes & error messages.
          </p>
				</dd>
			</dl>
      <!-- Auto -->
			<dl class="four">
				<dt><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></dt>
				<dd>
					<strong>Auto</strong>
					<p>
            Auto stop unused processes to release <br>
            RAM and improve PC performance.
          </p>
				</dd>
			</dl>
      <!-- Privacy Security -->
			<dl class="five">
				<dt><img src="<?php echo $pResUrl; ?>images/icons05.png" alt=""></dt>
				<dd>
					<strong>Privacy Security</strong>
					<p>
            Keep your sensitive data like contact, e-mail data, <br>
            Dropbox, OneDrive etc. away from any secret access.
          </p>
				</dd>
			</dl>
      <!-- Safer Browsing -->
      <dl class="six">
        <dt><img src="<?php echo $pResUrl; ?>images/icons06.png" alt=""></dt>
        <dd>
          <strong>Safer Browsing</strong>
          <p>
            Auto clear browsing data and disguise <br>
            digital fingerprint to stop malicious tracking.
          </p>
        </dd>
      </dl>
      <!-- link -->
      <a class="intro" href="javascript: void(0);">Learn more about PRO edition ></a>
		</div>
	</div>
</div>
<!-- asc-message end -->
<!-- review start -->
<div class="review">
	<div class="wrapper">
		<div class="content ">
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>"I have been using Advanced SystemCare Pro for a long time and this latest version 13 is even better than version 12. It can find and fix problems very quickly and has so many extra features you can use to keep your computer running well and stable. I cannot recommend it more highly."</dd>
      </dl>
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>"The New ASC 13 is a must have for all PC users. Its clean and intuitive interface makes it easy to use for the novice as well as the advanced user. Many powerful tools included to keep your PC running at its peak performance. Kudos to you IObit for such a wonderful set of tools all in one place."</dd>
      </dl>
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>"I love using Advanced SystemCare 13 Beta. It is fast. It cleans up privacy traces, junk files and registry fragments. I especially like the sensitive area access permission pop-up. The first time an app tries to access sensitive files, a window opens to either allow access or deny. Once permission is granted for an app, the pop-up no longer occurs for that app. I know my sensitive files will be kept safe."</dd>
      </dl>
			<dl class="active">
				<dt>
				<h3>Media Review</h3></dt>
				<dd>"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."</dd>
			</dl>
			<dl>
				<dt><h3>User Review</h3></dt>
				<dd>"I have tried various programs over time which have promised to keep my computers running problem free. I turned to ASC years ago using the free version at first. Finding that I no longer suffered from the niggles and bloating that occurs I upgraded to the Paid version and have never looked back since. Advanced SystemCare Pro is the only one I would recommend based on my experiences. I also use IObit Uninstaller, Smart Defrag and Driver Booster just make things much better."</dd>
			</dl>
			<dl>
				<dt><h3>User Review</h3></dt>
				<dd>"Advanced System Care is a great program. I have used this program for many years and it works great. They're always improving their products and just get better over the years. I use many of their products and they all work great."</dd>
			</dl>
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>" I have never found a better pc maintenance or security program than Advanced Systems Care, since buying ASC I've never had issues with viruses, phishing, black screens or any other kind of bugaboo one could think of, best money I've ever spent when it comes to computers, thank you ASC for making my pc experience so much more enjoyable."</dd>
      </dl>
		</div>
		<ul class="users clearfix lato">
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/tony-fisher.png" alt="Tony Fisher"></div>
        <p>Tony Fisher</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/daniel-sanders.png" alt="Daniel Sanders"></div>
        <p>Daniel Sanders</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/richard-preston.png" alt="Richard Preston"></div>
        <p>Richard Preston</p>
      </li>
			<li class="current">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"></div>
        <p>Cnet</p>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/richard-beavers.png" alt="Richard Beavers"></div>
				<p>Richard Beavers</p>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/patsy-clark.png" alt="Patsy Clark"></div>
				<p>Patsy Clark</p>
			</li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/danny-r-sheets.png" alt="Danny R. Sheets"></div>
        <p>Danny R. Sheets</p>
      </li>
		</ul>
	</div>
</div>
<!-- review end -->
<!-- comparison start -->
<div class="comparison" id="compare">
	<div class="wrapper">
		<table>
			<thead>
			<tr>
				<th class="itema"></th>
				<th class="itemb"></th>
				<th class="itemc"></th>
				<th class="itemd"></th>
				<th class="iteme"></th>
			</tr>
			</thead>
			<tbody>
				<tr>
					<td class="itema">Basic System Clean, Fix and Optimization</td>
					<td class="itemb"><i class="currt"></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">1-click to Fix system weakness & stop hacking <sup>Improved</sup></td>
					<td class="itemb"><i class="currt"> </i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Detect Malicious Links in Your Web E-mail <sup class="red">NEW</sup></td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Untrusted Programs Can't Access to Personal Data <sup>Improved</sup>	 </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Disguise Digital Fingerprint to Avoid Malicious Tracking</td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Up to 300% Internet Speed with Internet Booster </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Up to 200% Faster PC with Startup Optimization <sup>Improved</sup></td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Deep Registry Clean and Defrag for Less Crashes <sup>Improved</sup></td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">New Disk Optimization Engine for Quicker System Speed </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Real-time Protection from Security Threats <sup>Improved</sup></td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Full Detection against the Deepest Infections <sup>Improved</sup></td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Auto Remove Ads & Privacy Traces for Safer Browsing </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Auto RAM Clean for Smoother System Running </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Auto Update to the Latest Version </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Free 24/7 Technical Support on Demand </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
			</tbody>
			<tfoot>
				<th class="itema"></th>
				<th class="itemb">
					Your Current <br> Version
				</th>
				<th class="itemc">
					<strong>$2.66</strong>/mo
					<a href="https://www.iobit.com/buy.php?product=asc131m&ref=en-asc1mspecial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc1mbuy', 'buy', 'ascpurchase-special2020')" class="buybtn border">Buy Now</a>
				</th>
				<th class="itemd">
					<strong>$2.66</strong>/mo
					<a href="https://www.iobit.com/buy.php?product=asc133m&ref=en-asc3mspeical<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick=" ga('send', 'event', 'asc3mbuy', 'buy', 'ascpurchase-special2020')" class="buybtn border">Buy Now</a>
				</th>
				<th class="iteme">
					<strong>$1.33</strong>/mo
					<a href="https://www.iobit.com/buy.php?product=asc136m&ref=en-asc6mspecial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick=" ga('send', 'event', 'asc6mbuy', 'buy', 'ascpurchase-special2020')" class="buybtn">Buy Now</a>
					<p class="date"><strong>04</strong>M: <strong>04</strong>S: <strong>04</strong>Ms Left</p>
				</th>
			</tfoot>
		</table>
	</div>
</div>
<!-- comparison end -->
<!-- award start -->
<div class="award">
	<div class="wrapper">
		<h2 class="">World-wide Awards</h2>
		<p>As being trusted and awarded by those world-class media in the past twelve years, you know you’ve got the right PC optimizer.</p>
		<ul class="clearfix">
			<li class="first">
				<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/pc-sm.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/cnet-award.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/major-geeks.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/pcworld.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/chip.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://www.softpedia.com/get/System/System-Miscellaneous/IObit-Driver-Booster.shtml?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="" />
				</a>
			</li>
			<li class="last">
				<a href="http://driver-booster.updatestar.com/?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/updatestar.png')?>" alt="" />
				</a>
			</li>
		</ul>
	</div>
</div>
<!-- award end -->
<div class="payment wrapper">
		
	<dl class="days">
		<dt><img src="<?php echo $pResUrl; ?>images/days.png" alt=""></dt>
		<dd>
			<strong> Try it RISK FREE - with our 30-day Money Back Guarantee</strong>
			<p>We’re confident that activating PRO edition will improve your PC performance for affordable price!</p>
		</dd>
	</dl>
	<dl class="visa">
		<dt><b>We accept</b></dt>
		<dd><img src="<?php echo $pResUrl; ?>images/payment.png" alt=""></dd>
	</dl>
</div>
<!-- annotation start -->
<div class="annotation lato ">
	<dl class="wrapper">
		<dt>Note:</dt>
		<dd>*.Data may vary based on different system or computer.</dd>
		<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
	</dl>
</div>
<!-- annotation end -->

<!-- footer start -->
<div class="footer lato">Copyright © 2005 - <?php echo date(Y) ?> IObit. All Rights Reserved</div>
<!-- footer end -->

<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
	<div class="wrapper clearfix">
		<div class="img-box"></div>
		<ul>
			<li class="one-box">
				<p>3 Months</p>
				<strong>$<b>2.66</b></strong>/mo
			</li>
			<li class="active packs">
				<p>6 Months</p>
				<strong>$<b>1.33</b></strong>/mo
				<p class="last">Save 50%</p>
				<p class="date"><strong>04</strong>M: <strong>04</strong>S: <strong>04</strong>Ms Left</p>
			</li>
		</ul>
		<div class="right">
      <!-- buybtn -->
			<a class="buybtn" href="https://www.iobit.com/buy.php?product=asc136m&ref=en-asc6mspecial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick=" ga('send', 'event', 'asc6mbuy', 'buy', 'ascpurchase-special2020')">
        Buy Now
      </a>
      <p>6 Months / 3 PCs</p>
		</div>
	</div>
</div>
<!-- floatlayer end -->
<script type="text/javascript">refStr="<?php echo $refStr;?>";</script>
<script type="text/javascript" src="<?php echo getStaticUrl('js/script.js')?>"></script>
</body>
</html>