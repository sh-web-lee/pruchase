<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if($_GET['action']=='getSales'){
	$date = $_GET['d'];
	$c_name = 'endbmid' . $date;
	if (!isset($_COOKIE[$c_name])) {
		$packsNum = 937;
	} else {
		if (intval($_COOKIE[$c_name]) >= 998) {
			$packsNum = 998;
		} else {
			$packsNum = $_COOKIE[$c_name] + 1;
		}
	}
	setcookie($c_name, $packsNum, time() + 3600 * 24 * 30 * 2);
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

function microtime_float()
{
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

$packsNum = ceil(microtime_float() * 2000 / 20000);
$packsNum = 360 - ($packsNum % 360);
if ($_GET['action'] == 'getPacks') {
	echo $packsNum;
	exit;
}
$viewNum=rand(35,45);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Save $50 on Driver Booster Pro!</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="banner">
	<div class="wrapper"> 
		<a href="https://www.iobit.com/en/index.php" target="_blank" class="logo">IObit</a>
		<h1>Buy 1 Get 2 FREE</h1>
		<div class="date">RUSH! <strong>1,000</strong> LIMITED QUANTITIES AVAILABLE / 
			<div class="countdown">
         <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
      </div>           
       SOLD NOW
    </div>
    <dl class="left-box">
    	<dt>
    		Driver Booster PRO <span>(covers 1 PC)</span>
    	</dt>
    	<dd>$19.99  <del>$24.95</del></dd>
    </dl>
    <dl class="right-box">
    	<dt>
    		Driver Booster PRO <span>(covers extra 2 PCs)</span>
    	</dt>
    	<dd>$0  <del>$49.9</del></dd>
    </dl>
    <div class="price">
    	<p><strong>$19.99</strong> <del>$74.85</del></p>
    	<p><a href="http://www.iobit.com/buy.php?product=db5midyearedm&ref=db3pc1999june2018&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-201806free');" class="buybtn">Buy Now</a></p>
    	<p>1 Year Subscription / 3 PCs</p>
    </div>
    <p class="last">Try it RISK FREE - Activate Now to keep PC in excellent status and get a 60-day Money Back Guarantee</p>
	</div>
</div>
<div class="payment wrapper">
	<img src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
</div>
<div class="comparison wrapper">
	<h2><span>5</span>Reasons Why Upgrade to Driver Booster PRO</h2>
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
			<tr>
				<th class="itema">Driver Booster  <span>FREE </span></th>
				<th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>" alt=""></th>
				<th class="itemc">Driver Booster  <span>PRO </span></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="itema">Check outdated and missing <br> drivers</td>
				<td class="itemb">Driver Database</td>
				<td class="itemc">
					Check <span>200% more</span> outdated,missing <br> and rare drivers
				</td>
			</tr>
			<tr>
				<td class="itema">Manually download and update</td>
				<td class="itemb">Driver Update</td>
				<td class="itemc">
					Auto download and update with  <br> <span>200% higher speed</span>
				</td>
			</tr>
			<tr>
				<td class="itema">Not supported </td>
				<td class="itemb">Driver Backup</td>
				<td class="itemc">
					Auto backup a driver before <br> it is installed
				</td>
			</tr>
			<tr>
				<td class="itema">Not supported </td>
				<td class="itemb">Game Component</td>
				<td class="itemc">
					Check game components for <br> smoother game control
				</td>
			</tr>
			<tr>
				<td class="itema">Not supported </td>
				<td class="itemb">Fix Device Errors</td>
				<td class="itemc">
					Fix errors codes in device manager <br> for safer PC
				</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="between-buy wrapper">
	<h2>The Last Reason Why Upgrade to PRO Edition</h2>
	<h3>BUY 1 GET 2 FREE, ONLY <span class="packsNum">50</span> LEFT NOW</h3>
  <div class="price">
  	<p><strong>$19.99</strong> <del>$74.85</del></p>
  	<p><a href="http://www.iobit.com/buy.php?product=db5midyearedm&ref=db3pc1999june2018&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-201806free');" class="buybtn">Buy Now</a></p>
  	<p>1 Year Subscription / 3 PCs</p>
  </div>
</div>
<!-- review start -->
<div class="review wrapper">
  <div id="dg-container" class="dg-container">
    <div class="nav"> 
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
			<div class="content dg-wrapper">  
				<dl class="reviews">
					<dt><img src="<?php echo $pResUrl; ?>images/pc-magazine.png" alt=""></dt>
					<dd>
						<h2>Media Review</h2>
						<p>Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.</p>
						<cite>PC Magazine</cite>
					</dd>
				</dl>              
				<dl class="reviews">
					<dt><img src="<?php echo $pResUrl; ?>images/ian-dalton.png" alt=""></dt>
					<dd>
						<h2>User Review</h2>
						<p>I am far from a technology geek ! I am Just running Windows 7 on 2 old Dell laptops. But I do know enough to be aware that they tend run slower as every month goes by. I have been using Driver Booster for the last 3 years & have arrested my laptops performance decline with all the versions of Driver Booster. But Version 5 has actually increased my available RAM by 114% & decreased my CPU usage by 100% as well as improving my screens’ resolutions, Wi-Fi connections & audio problems. Version 5 is a landmark step forward. Congratulants to all of you at IObit</p>
						<cite>Ian Dalton</cite>
					</dd>
				</dl>
				<dl class="reviews">
					<dt><img src="<?php echo $pResUrl; ?>images/tsuneo-nagai.png" alt=""></dt>
					<dd>
						<h2>User Review</h2>
						<p>Driver Booster 5 is the best driver updater application to update to the latest version of my Windows 10 PC drivers. Coverage is over 1,000,000 official drivers and components and install by a single click. This make me the confidence to use PC and also bring me a stability of usage. I am using pro version of IObit Driver Booster, Uninstaller, Advanced SystemCare, Smart Defrag and Malware Fighter</p>
						<cite>Tsuneo Nagai</cite>
					</dd>
				</dl>                  
				<dl class="reviews">
					<dt><img src="<?php echo $pResUrl; ?>images/robert-van-oeveren.png" alt=""></dt>
					<dd>
						<h2>User Review</h2>
						<p>Over time I have bought and used quite a few of the products from IOBIT and with great satisfaction. They have now a new DriverBooster version 5 that exceeded my expectations. The new version 5 is even more sophisticated and does more than simply telling which drivers are old, this version removes them and replaces them with new ones thereby saving you searching the Internet for the correct drivers. Once I had run version 5, I thought that maybe I should try pairing it once more and would you believe: within 3 seconds the device was paired with my computer. I was again flabbergasted and very much relieved that the pairing had succeeded due to the replacement of a very old driver. You have made a total believer out of me! I strongly recommend this program. </p>
						<cite>Robert van Oeveren</cite>
					</dd>
				</dl>
				<dl class="reviews">
					<dt><img src="<?php echo $pResUrl; ?>images/faiz-wahid.png" alt=""></dt>
					<dd>
						<h2>User Review</h2>
						<p>As a desktop support tech, between doing my job, and helping relatives and friends with their computer problems, Drive Booster have saved me hours of work looking for the latest drivers, especially on more obscure hardware. Many times when I do find updated drivers for certain hardware, Driver Booster can actually find even newer ones! Very, very helpful in cutting down time spent, and helps me do my job more efficiently, professionally or otherwise!</p>
						<cite>Faiz Wahid</cite>
					</dd>
				</dl>
				<dl class="reviews">
					<dt><img src="<?php echo $pResUrl; ?>images/gabriel-parra-felipe.png" alt=""></dt>
					<dd>
						<h2>User Review</h2>
						<p>Like other IObit applications, Driver Booster has always been my favorite option. But in this update, we see a whole new product, improved, deeper and easier to use! There are a lot of software on the market that promise something unreal, but not here! Driver Booster 5 has all the tools my PC needed to make it cleaner, safer and more stable.</p>
						<cite>Gabriel Parra Felipe</cite>
					</dd>
				</dl>
			</div>               
  </div>
</div>
<!-- review end -->
<div class="award">
	<div class="wrapper">
		<h2 class="subhead">World-wide Awards</h2>
		<p>As being trusted and awarded by those world-class media in the past four years, you know you’ve got the right driver updater.</p>
		<ul class="clearfix">
			<li class="first">
				<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=dbindex" target="_blank">
					<img src="<?php echo getStaticUrl('images/pc-sm.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=dbindex" target="_blank">
					<img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=dbindex" target="_blank">
					<img src="<?php echo getStaticUrl('images/major-geeks.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=dbindex" target="_blank">
					<img src="<?php echo getStaticUrl('images/pcworld.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=dbindex" target="_blank">
					<img src="<?php echo getStaticUrl('images/chip.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://www.softpedia.com/get/System/System-Miscellaneous/IObit-Driver-Booster.shtml?ref=dbindex" target="_blank">
					<img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="" />
				</a>
			</li>
			<li class="last">
				<a href="http://driver-booster.updatestar.com/?ref=dbindex" target="_blank">
					<img src="<?php echo getStaticUrl('images/updatestar.png')?>" alt="" />
				</a>
			</li>
		</ul>
	</div>
</div>
<div class="serive wrapper">
	<dl>
		<dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
		<dd><strong>Money Back Guarantee</strong></dd>
		<dd>If you're not satisfied in the first 60 days, we will give you back your money.</dd>
	</dl>
	<dl>
		<dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""></dt>
		<dd><strong>Secure Payment</strong></dd>
		<dd>IObit supports several safe modes of payment.</dd>
	</dl>
	<dl class="last">
		<dt><img src="<?php echo getStaticUrl('images/license.png')?>" alt=""></dt>
		<dd><strong>Get License</strong></dd>
		<dd>You will receive the license within a few minutes after purchase.</dd>
	</dl>
</div>
<!-- footer start -->
<div class="footer">Copyright © 2005 - <?php echo date(Y) ?> IObit. All Rights Reserved</div>
<!-- fooFilter
ter end -->
<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
	<div class="wrapper clearfix">
		<img src="<?php echo getStaticUrl('images/gift-box.png')?>" alt="" class="img">
		<div class="number">
			<div class="date">RUSH! 1,000 LIMITED QUANTITIES AVAILABLE / 
				<div class="countdown">
	         <div class="scroll-tick"><span>0</span></div>
	          <div class="scroll-tick"><span>0</span></div>
	          <div class="scroll-tick"><span>0</span></div>
	      </div>           
	       SOLD NOW
	    </div>
	    <div class="progress">
	    	<span></span>
	    </div>
		</div>
		<a class="buybtn" href="http://www.iobit.com/buy.php?product=db5midyearedm&ref=db3pc1999june2018&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-201806free');">Get It Now</a>
	</div>
</div>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>