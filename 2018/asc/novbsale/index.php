<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
$viewNum=rand(60,96);
include $pRootUrl . 'include/common.inc.php';
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name='ascmaymid'.$date;
	if (!isset($_COOKIE[$c_name])) {
		$packsNum = 63;
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
	echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
	exit;
}
if($_GET['action']=='maskCount'){
	exit();
}
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);

if(preg_match('/([0-9]*)\./',$_GET['ver'],$matches)){
	$ver=$matches[1];
	$refStr.='-'.$ver;
}
if($_GET['pop']=='b_asc'){
	$refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Save up to 85% on ASC PRO, speed up, protect and optimize your PC!</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.min.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- header -->
<div class="header container clearfix">
	<div class="wrapper head">
		<a href="http://www.iobit.com" target="_blank" class="logo">IObit</a>
		<h1>Black Friday Exclusive Sale</h1>
		<div class="banner clearfix">
			<div class="banner-boxshot fl"></div>
			<div class="banner-left fr">
				<div class="defult">
					<div class="title">
						<h2><strong>3 FREE GIFTS</strong>LIMITED TO FIRST <b>100</b> PURCHASES!</h2>
						<h3>Limited quantity available</h3>
						<h4 class="gift-count"><b class="count-num-box"><i class="count-num">36</i></b>bought</h4>
					</div>
					<div class="progress">
						<div class="counter"></div>
						<div class="bar-mask">
							<div class="progressbar"></div>
						</div>
					  <em class="count"><i class="view-num"><?php echo $viewNum;?></i>more are viewing this page now</em>
					</div>
					<div class="price-box">
						<div class="price-btn clearfix">
							<span class="price-num">Now $<strong>21</strong>.98</span>
							<a href="https://www.iobit.com/buy.php?product=asc12sdiuamc2198&ref=ascsdiuamc2198may2017<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc2198buy', 'buy', 'ascpurchase-201705');clickCount(2)" class="buy-btn"><i></i><span>ACTIVATE NOW</span></a>
						</div>
						<ul class="price-dec">
							<li class="first">
								<span>Original</span>
								<p>$149.94 </p>
							</li>
							<li>
								<span>Discount</span>
								<p class="font-green">85% OFF</p>
							</li>
							<li>
								<span>Save</span>
								<p>$127.96</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<p class="banner-msg">Try it RISK FREE - Activate Now to keep PC in excellent status and get a 60-day Money Back Guarantee</p>
	</div>
</div>
<!--hightlight-->
<div class="wrapper hightlight clearfix">
	<h2>Activate Now to get a faster, cleaner and more secure PC!</h2>
	<img class="hight-img" src="<?php echo getStaticUrl('images/computer.png')?>" alt=""/>
	<div class="hight-light clearfix">
		<dl class="list1 animate fl">
			<dt><img src="<?php echo $pResUrl; ?>images/hightlight-icon_03.png" alt=""></dt>
			<dd> <h3>200%*</h3>
				<p>Reduce system stutter/lag and speed up
					PC up to 200% faster</p></dd>
		</dl>
		<dl class="list2 animate fr">
			<dt><img src="<?php echo $pResUrl; ?>images/hightlight-icon_05.png" alt=""></dt>
			<dd><h3>300%*</h3>
				<p>Accelerate download, surfing, gaming,
					YouTube viewing up to 300% faster</p></dd>
		</dl>
		<dl class="list3 animate fl">
			<dt><img src="<?php echo $pResUrl; ?>images/hightlight-icon_09.png" alt=""></dt>
			<dd><h3>Deeper</h3>
				<p>Fix registry issues to reduce  Windows
					crashes & error messages</p></dd>
		</dl>
		<dl class="list4 animate fr">
			<dt><img src="<?php echo $pResUrl; ?>images/hightlight-icon_10.png" alt=""></dt>
			<dd><h3>Auto</h3>
				<p>Auto stop unused processes to release
					RAM and improve PC performance</p></dd>
		</dl>
		<dl class="list5 animate fl">
			<dt><img src="<?php echo getStaticUrl('images/hightlight-icon_13.png')?>" alt=""></dt>
			<dd><h3>Privacy Security</h3>
				<p>Keep your sensitive data like contact, e-mail data, Dropbox, OneDrive etc. away from any secret access.</p></dd>
		</dl>
		<dl class="list6 animate fr">
			<dt><img src="<?php echo $pResUrl; ?>images/hightlight-icon_14.png" alt=""></dt>
			<dd><h3>Safer Browsing</h3>
				<p>Auto clear browsing data and disguise digital fingerprint to stop malicious tracking.</p></dd>
		</dl>
	</div>
	<a href="javascript:void (0);" class="go-table" onclick="Totarget($('.compar-tab'), 100)">Learn more about PRO edition ></a>
</div> 
<!-- middle-buy -->
<div class="middle-buy container clearfix">
	<div class="wrapper">
		<h2>85% OFF Activate Advanced SystemCare PRO Today</h2>
		<h3>Get 3 PC Optimization Tools (valued at $59.97) for FREE!</h3>
		<ul class="pro-list clearfix">
			<li class="first">
				<img src="<?php echo $pResUrl; ?>images/sd-icon.png" alt=""/>
				<h3>Smart Defrag PRO</h3>
				<p class="list-price"><strong>$0</strong><i>$19.99</i>1 Year / 1 PC</p>
				<p class="pro-name">Max Hard Drive Optimization<br>for <span>Faster PC</span></p>
			</li>
			<li class="second">
				<img src="<?php echo $pResUrl; ?>images/iu-icon.png" alt=""/>
				<h3> IObit Uninstaller PRO</h3>
				<p class="list-price"><strong>$0</strong><i>$19.99</i>1 Year / 1 PC</p>
				<p class="pro-name">Uninstall Unwanted Plug-ins for<br><span>Cleaner PC & Browsing</span></p>
			</li>
			<li>
				<img src="<?php echo $pResUrl; ?>images/amc-icon.png" alt=""/>
				<h3>AMC Security PRO</h3>
				<p class="list-price"><strong>$0</strong><i>$19.99</i>1 Year / Multi Devices</p>
				<p class="pro-name">All-in-One Protector and Booster<br>for <span>Android Device</span></p>
			</li>
		</ul>
		<a href="https://www.iobit.com/buy.php?product=asc12sdiuamc2198&ref=ascsdiuamc2198may2017<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc2198buy', 'buy', 'ascpurchase-201705');clickCount(2)" class="buy-btn middle-btn">
			<div class="inner"><i></i> <span>Get My Free Gifts</span></div>
		</a>
		<p class="gift-last-num">Hurry, <span class="count-num">36</span> bought <span class="cut-num"><i class="left-num">64</i> left</span> now </p>
	</div>
</div>

<!-- review -->
<div class="container clearfix">
	<div class="review wrapper">
		<div class="review-box">
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<h3>"Not only is it a great product, but the support is equally great"</h3>
				<p>"I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."</p>
			</div>
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<h3>"Cleaned up Spyware and Malware My antivirus lets slip through"</h3>
				<p>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"</p>
			</div>
			<div class="reviews clearfix active">
				<h2>Media Review</h2>
				<h3>A PC optimization tool that wipes out security threats and helps stop new ones in their tracks.</h3>
				<p>IObit Avanced SystemCare is one of our favorite PC cleanup and maintenance tools, and the latest version builds on an already great toolkit with new security-focused options.</p>
			</div>
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<h3>"My choice is still overwhelmingly Advanced SystemCare Pro"</h3>
				<p>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</p>
			</div>
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<h3>"My system has never run better."</h3>
				<p>"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</p>
			</div>
		</div>
		
		<ul class="handle clearfix">
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Bruce-Ramsay.png" alt="Bruce Ramsay"><span></span></div>
				<strong>Bruce Ramsay</strong>

			</li>
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Bob-Bassett.png" alt="Bob Bassett"><span></span></div>
				<strong>Bob Bassett</strong>

			</li>
			<li class="active">
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/techradar.png" alt="Techradar"><span></span></div>
				<strong>Techradar</strong>
			</li>
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Charles-R-Widick.png" alt="Charles R. Widick"><span></span></div>
				<strong>Charles R. Widick</strong>

			</li>
			<li class="last">
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Gordon-Griswold.png" alt="Gordon Griswold"><span></span></div>
				<strong>Gordon Griswold</strong>

			</li>
		</ul>
	</div>
</div>

<!-- compare-table -->
<div class="compar-tab wrapper clearfix">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
		<tr>
			<th colspan="2" class="text">See what PRO edition can do for you:</th>
			<th class="space"></th>
			<th class="item-free"><strong>Advanced SystemCare <span>FREE</span></strong></th>
			<th class="space"></th>
			<th class="item-pro">
				Advanced SystemCare <span>PRO</span>
			</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon1.png"></td>
			<td class="text">Basic System Clean, Fix and Optimization</td>
			<td class="space"></td>
			<td class="item-free checked"><span class="icon gray">v</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon2.png"></td>
			<td class="text">Fix System Weakness to Prevent Hacking with 1-click <sup>Improved</sup></td>
			<td class="space"></td>
			<td class="item-free checked"><span class="icon gray">v</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo getStaticUrl('images/icon13.png')?>"></td>
			<td class="text">Keep Your Personal Data away from Untrusted Programs <sup class="new">NEW</sup></td>
			<td class="space"></td>
			<td class="item-free"><span class="icon close">x</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo getStaticUrl('images/icon14.png')?>"></td>
			<td class="text">No One Can Steal Your Digital Fingerprint to Track Your Web Browsing <sup class="new">NEW</sup></td>
			<td class="space"></td>
			<td class="item-free"><span class="icon close">x</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon3.png"></td>
			<td class="text">Up to 300% Internet Speed with Internet Booster <sup>Improved</sup></td>
			<td class="space"></td>
			<td class="item-free"><span class="icon close">x</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon4.png"></td>
			<td class="text">Up to 200% Faster PC Startup with Startup Optimization <sup>Improved</sup></td>
			<td class="space"></td>
			<td class="item-free"><span class="icon close">x</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon5.png"></td>
			<td class="text">Deep Registry Clean and Defrag for Less Crashes <sup>Improved</sup></td>
			<td class="space"></td>
			<td class="item-free"><span class="icon close">x</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon6.png"></td>
			<td class="text">New Disk Optimization Engine for Quicker System Speed <sup>Improved</sup></td>
			<td class="space"></td>
			<td class="item-free"><span class="icon close">x</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon7.png"></td>
			<td class="text">Real-time Protection from Security Threats<sup>Improved</sup></td>
			<td class="space"></td>
			<td class="item-free"><span class="icon close">x</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon8.png"></td>
			<td class="text">Full Detection against the Deepest Infections</td>
			<td class="space"></td>
			<td class="item-free"><span class="icon close">x</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon9.png"></td>
			<td class="text">Auto Remove Ads & Privacy Traces for Safer Browsing <sup>Improved</sup></td>
			<td class="space"></td>
			<td class="item-free"><span class="icon close">x</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon10.png"></td>
			<td class="text">Auto RAM Clean for Smoother System Running </td>
			<td class="space"></td>
			<td class="item-free"><span class="icon close">x</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon11.png"></td>
			<td class="text">Auto Update to the Latest Version</td>
			<td class="space"></td>
			<td class="item-free"><span class="icon close">x</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon12.png"></td>
			<td class="text">Free 24/7 Technical Support on Demand</td>
			<td class="space"></td>
			<td class="item-free"><span class="icon close">x</span></td>
			<td class="space"></td>
			<td class="item-pro"><span class="icon red">v</span></td>
		</tr>
		<tfoot>
		<tr>
			<th colspan="2" class="text"></th>
			<th class="space"></th>
			<th class="item-free">Your Current Version</th>
			<th class="space"></th>
			<th class="item-pro">
				<p>$<b>21.98</b><del>$149.94</del></p>
				<a href="https://www.iobit.com/buy.php?product=asc12sdiuamc2198&ref=ascsdiuamc2198may2017<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc2198buy', 'buy', 'ascpurchase-201705');clickCount(2)" class="buy-btn table-btn"><i class="car"></i><span>ACTIVATE NOW</span></a>
				<p class="table-peice"><span>85% OFF</span> Save $127.96</p>
			</th>
		</tr>
		</tfoot>
		</tbody>
	</table>
</div>
<!-- awards -->
<div class="awards clearfix">
	<div class="wrapper">
		<h2>World-wide Awards</h2>
		<span>As being trusted and awarded by those world-class media in the past eleven years, you know you’ve got the right PC optimizer.</span>
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
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
        <dd>
          <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
          <p>We’re confident that activating PRO edition will improve your PC <br> performance for affordable price!</p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>We accept </h4>
        </dd>
        <dt><img src="<?php echo $pResUrl; ?>images/payment.png" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Note:</dt>
        <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
        <dd>*.Data may vary based on different system or computer.</dd>
        <dd>*.License for AMC Security Full Version with in-app ads.</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
    <!-- footer end -->
  </div>
</div>

<!-- floatlayer -->
<div class="floatlayer" id="floatlayer">
	<p><span class="count-num">36</span> bought!<br>
	Hurry, only <span class="left-num">64</span> free gift packs left.</p>
</div>
<!-- mask -->
<div class="mask container"></div>
<div class="mask-box">
	<h2>You are today's Lucky Visitor!<br>
		Enjoy Your <b>Exclusive Extra 10% OFF Now!</b>
		<i class="close">×</i>
	</h2>
	<div class="mask-main clearfix">
		<img class="small-img" src="<?php echo getStaticUrl('images/asc-small.png')?>">
		<div class="mask-main-right fl">
			<p>The Offer is Valid for</p>
			<span class="time-count"><i>01</i>:<i>59</i></span>
			<ul class="price-dec mask-list">
				<li class="first">
					<span>Original</span>
					<p>$149.94</p>
				</li>
				<li class="second">
					<span>Sale price</span>
					<p>$21.98</p>
				</li>
				<li>
					<span class="font-green">After extra 10% off</span>
					<p>$<b>19</b>.99</p>
				</li>
			</ul>
			<div class="btn-box">
				<a href="https://www.iobit.com/buy.php?product=asc12sdiuamc1999&ref=ascsdiuamc1999may2017<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc1999buy', 'buy', 'ascpurchase-201705');clickCount(3)" class="buy-btn mask-btn clearfix"><i></i> <span>Get My Extra 10% OFF & 3 FREE Gifts</span></a>
			</div>
			<a href="javascript:void(0)" class="close-msg">No, thanks I don't want extra 10% OFF</a>
		</div>
	</div>
</div>
<!-- gotop -->
<div class="fix">
	<div class="gotop" onclick="Totarget($('.logo'), 100)"></div>
</div>
<script src="<?php echo $pRootUrl; ?>tpl/js/TweenMax.min.js"></script>
<script type="text/javascript">
	refStr="<?php echo $refStr;?>";
</script>
<script type="text/javascript" src="<?php echo getStaticUrl('script/script.min.js');?>"></script>
</body>
</html>