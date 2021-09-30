<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'enasctkb_p' . $date;
	$c_name_t='enasctkb_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(78,98);
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
		setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 0) {
			$packsNum = 0;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$viewNum=rand(156,200);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_asc'))){
	$refStr.='-'.$_GET['pop'];
}
if (preg_match('/([0-9]*)\./', $_GET['ver'], $matches)) {
	$ver = $matches[1];
	$refStr .= '-' . $ver;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Save 75% on  Advanced SystemCare PRO  - IObit</title>
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
			<h1>IObit 14 Years Anniversary</h1>
			<p> 75% discount + free gifts for your annual plan</p>
		</div>
		<div class="box">
			<p class="month">Monthly</p>
			<strong>$<b>5.59</b></strong>
			<p class="pc">per month for 3 PCs</p>
			<p class="at">$5.59 at Checkout</p>
			<a href="https://www.iobit.com/buy.php?product=asc1m559&ref=asc1m559<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc " onclick="ga('send', 'event', 'asc1mbuy', 'buy', 'ascpurchase-tkb05')" class="buybtn border">Buy Now</a>
		</div>
		<div class="box">
			<p class="month">Quarterly</p>
			<strong>$<b>5.59</b></strong>
			<p class="pc">per month for 3 PCs</p>
			<p class="at">$16.77 at Checkout</p>
			<a href="https://www.iobit.com/buy.php?product=asc3m1677&ref=asc3m1677<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc3mbuy', 'buy', 'ascpurchase-tkb05')  " class="buybtn border">Buy Now</a>
		</div>
		<div class="box packs">
			<p class="date">Hurry, only <strong class="numer-change"><span class="nomal">58</span> <span class="redum">58</span></strong> <span>seats left!</span></p>
			<p class="month">Annual</p>
			<strong>$<b>1.39</b></strong>
			<p class="pc">per month for 3 PCs</p>
			<p class="at"><del>$67.08</del> $16.77 at Checkout</p>
			<a href="https://www.iobit.com/buy.php?product=asc12m1677&ref=asc12m1677<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc6mbuy', 'buy', 'ascpurchase-tkb05') " class="buybtn">Buy Now - 75% OFF</a>
			<div class="gift-box">
				<p><i class="icons"></i> <span>+ FREE GIFT </span> IObit Uninstaller Pro</p>
				<p><i></i> <span>+ FREE GIFT </span> Smart Defrag Pro</p>
				<p><i></i> <span>+ FREE GIFT </span> Protected Folder</p>
			</div>
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
<div class="gift-message">
	<div class="wrapper">
		<h2>What extra benefit will you get from annual plan?</h2>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/sd-box.png" alt=""></dt>
			<dd>
				<h3>Smart Defrag PRO</h3>
				<p><strong>$0</strong> <del>$19.99</del>  1 Year / 1 PC </p>
			</dd>
			<dd class="last">
				Maximize Hard Drive <br> Optimization or Faster PC
			</dd>
		</dl>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/iu-box.png" alt=""></dt>
			<dd>
				<h3>IObit Uninstaller PRO</h3>
				<p><strong>$0</strong> <del>$19.99</del>  1 Year / 1 PC </p>
			</dd>
			<dd class="last">
				Uninstall Unwanted <br> Plug-ins for Cleaner PC & Browsing
			</dd>
		</dl>
		<dl class="noborder">
			<dt><img src="<?php echo $pResUrl; ?>images/pf-box.png" alt=""></dt>
			<dd>
				<h3>Protected Folder</h3>
				<p><strong>$0</strong> <del>$19.95</del>  1 Year / 1 PC </p>
			</dd>
			<dd class="last">
				No Leak of Important <br> Files for Secured Privacy
			</dd>
		</dl>
		<a href="https://www.iobit.com/buy.php?product=asc12m1677&ref=asc12m1677<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc6mbuy', 'buy', 'ascpurchase-tkb05') " class="buybtn">Get It Now</a>
	</div>
</div>
<!-- review start -->
<div class="review">
	<div class="wrapper">
		<div class="content ">
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          <h4>"Not only is it a great product, but the support is equally great"</h4>
        </dd>
        <dd>"I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."</dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          <h4>"Cleaned up Spyware and Malware My antivirus lets slip through"</h4>
        </dd>
        <dd>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"</dd>
      </dl>
			<dl class="active">
				<dt>
				<h3>Media Review</h3></dt>
				<dd>
					<h4>A PC optimization tool that wipes out security threats and helps stop new ones in their tracks.</h4>
				</dd>
				<dd>IObit Avanced SystemCare is one of our favorite PC cleanup and maintenance tools, and the latest version builds on an already great toolkit with new security-focused options.</dd>
			</dl>
			<dl>
				<dt>
				<h3>User Review</h3></dt>
				<dd>
					<h4>"My choice is still overwhelmingly Advanced SystemCare Pro"</h4>
				</dd>
				<dd>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</dd>
			</dl>
			<dl>
				<dt>
				<h3>User Review</h3></dt>
				<dd>
					<h4>"My system has never run better."</h4>
				</dd>
				<dd>"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</dd>
			</dl>
		</div>
		<ul class="users clearfix lato">
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay"></div>
        <p>Bruce Ramsay</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"></div>
        <p>Bob Bassett</p>
      </li>
			<li class="current">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/techradar.png" alt="Techradar"></div>
        <p>Techradar</p>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"></div>
				<p>Charles R. Widick</p>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt="Gordon Griswold"></div>
				<p>Gordon Griswold</p>
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
					<td class="itema">Block Unauthorized Access to Your Private Files <sup class="red">NEW</sup></td>
					<td class="itemb"><i class="currt"></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Protect Your Identity from Trackers <sup class="red">NEW</sup></td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Up to 300% Internet Speed with Internet Booster <sup>Improved</sup>	 </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Up to 200% Faster PC Startup <sup>Improved</sup></td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Deep Registry Clean and Defrag for Less Crashes </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Disk Optimization for Quicker System Speed <sup>Improved</sup></td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Real-time Protection from Security Threats</td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Full Detection against the Deepest Infections </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Auto Clean Privacy Traces for Safer Browsing <sup>Improved</sup></td>
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
				<tr>
					<td class="itema">Maximize Hard Drive Optimization for Faster PC </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i class="close"></i></td>
					<td class="itemd"><i class="close"></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Ensure the security of files, data and privacy </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i class="close"></i></td>
					<td class="itemd"><i class="close"></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema">Easily uninstall stubborn programs and malicious plug-ins</td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i class="close"></i></td>
					<td class="itemd"><i class="close"></i></td>
					<td class="iteme"><i></i></td>
				</tr>
			</tbody>
			<tfoot>
				<th class="itema"></th>
				<th class="itemb">
					Your Current <br> Version
				</th>
				<th class="itemc">
					<strong>$5.59</strong>/mo
					<a href="https://www.iobit.com/buy.php?product=asc1m559&ref=asc1m559<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc " onclick="ga('send', 'event', 'asc1mbuy', 'buy', 'ascpurchase-tkb05')" class="buybtn border">Buy Now</a>
				</th>
				<th class="itemd">
					<strong>$5.59</strong>/mo
					<a href="https://www.iobit.com/buy.php?product=asc3m1677&ref=asc3m1677<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc3mbuy', 'buy', 'ascpurchase-tkb05')  " class="buybtn border">Buy Now</a>
				</th>
				<th class="iteme">
					<strong>$1.39</strong>/mo
					<a href="https://www.iobit.com/buy.php?product=asc12m1677&ref=asc12m1677<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc6mbuy', 'buy', 'ascpurchase-tkb05') " class="buybtn">Buy Now</a>
					<p class="date">Hurry, only <strong class="numer-change"><span class="nomal">58</span> <span class="redum">58</span></strong>  seats left</p>
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
		<p>As being trusted and awarded by those world-class media in the past eleven years, you know you’ve got the right PC optimizer.</p>
		<ul class="clearfix">
			<li class="first">
				<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/pc-sm.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="" />
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
<div class="annotation ">
	<dl class="wrapper">
		<dt>Note:</dt>
		<dd>*.Data may vary based on different system or computer.</dd>
		<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
	</dl>
</div>
<!-- annotation end -->

<!-- footer start -->
<div class="footer">Copyright © 2005 - <?php echo date(Y) ?> IObit. All Rights Reserved</div>
<!-- footer end -->

<div class="floatlayer consent" id="floatlayer">
	<div class="wrapper">
		<div class="img-box"></div>
		<div class="numer">
			<div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
      </div>
			<p><span class="viewNum"><?php echo $viewNum;?></span> watching, <strong class="numer-change"><span class="nomal">58</span> <span class="redum">58</span></strong> packs left now!</p>
		</div>
		<div class="right">
			<a class="buybtn" href="https://www.iobit.com/buy.php?product=asc12m1677&ref=asc12m1677<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc6mbuy', 'buy', 'ascpurchase-tkb05') ">
        Get It Now
      </a>
		</div>
	</div>
</div>
<!-- floatlayer start -->
<div class="floatlayer soldout-fl" id="floatlayer">
	<div class="wrapper clearfix">
		<div class="img-box"></div>
		<ul>
			<li class="one-box" data-url="https://www.iobit.com/buy.php?product=asc1m559&ref=asc1m559sold<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" data-ga="ga('send', 'event', 'asc1msoldbuy', 'buy', 'ascpurchase-tkb05')">
				<p>Monthly</p>
				<strong>$<b>5.59</b></strong>
				<p class='check'>at Checkout</p>
			</li>
			<li class="active packs" data-url="https://www.iobit.com/buy.php?product=asc3m1677&ref=asc3m1677sold<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" data-ga="ga('send', 'event', 'asc3msoldbuy', 'buy', 'ascpurchase-tkb05') ">
				<p>Quarterly</p>
				<strong>$<b>16.77</b></strong>
				<p class='check'>at Checkout</p>
			</li>
		</ul>
		<div class="right">
      <!-- buybtn -->
			<a class="buybtn" href="https://www.iobit.com/buy.php?product=asc3m1677&ref=asc3m1677sold<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc3msoldbuy', 'buy', 'ascpurchase-tkb05')    ">
        Buy Now
      </a>
      <p>3 Months / 3 PCs</p>
		</div>
	</div>
</div>
<!-- floatlayer end -->
<script type="text/javascript">refStr="<?php echo $refStr;?>";</script>
<script type="text/javascript" src="<?php echo getStaticUrl('js/script.js')?>"></script>
</body>
</html>