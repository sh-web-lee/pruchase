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
if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'febcdb' . $date;
	if (empty($_COOKIE[$c_name])) {
		$packsNum = 77;
		setcookie($c_name, $packsNum, time() + 3600 * 24);
	} else {
		$packsNum = $_COOKIE[$c_name];
		if (intval($packsNum) <= 3) {
			setcookie($c_name, 3, time() + 3600 * 24);
		} else {
			if ($_GET['f'] == 1) {
				$packsNum--;
			} else {
				if (rand(1, 100) % 2 == 0) {
					$packsNum--;
				}
			}
			setcookie($c_name, $packsNum, time() + 3600 * 24);
		}
	}
	echo $packsNum;
	exit;
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

if(in_array($_GET['st'],array('dbxmasr'))){
	$refStr='-'.$_GET['st'];
}else{
	$refStr='';
}
if(!empty($_GET['to'])){
	$refStr.='-'.$_GET['to'];
}
if($_GET['to']=='purchase-6'){
	if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
		if(count($matches[1])>=2){
			$refStr.='-'.$matches[1][0].$matches[1][1];
		}
	}
}
if(preg_match('/([0-9]*)\./',$_GET['ver'],$matches)){
	$ver=$matches[1];
	$refStr.='-'.$ver;
}
if($_GET['pop']=='x_db'){
	$refStr.='-'.$_GET['pop'];
	if(in_array($_GET['user'],array('1','2'))){
		$refStr.=$_GET['user'];
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Save 80% on Driver Booster PRO + Free Gifts - IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="banner">
	<div class="wrapper clearfix">
		<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
		<div class="title">
			<h1>New Year Big Sale</h1>
			<p>Keep Drivers Update in Holiday Season!</p>
		</div>
		<div class="message box ">
			<div class="top-message">
				<div class="img-box">
					<span></span>
				</div>
				<h2>60% OFF</h2>
				<p><strong>$<b>22</b>.95</strong>  was <del>$74.85</del></p>
				<a href="https://www.iobit.com/buy.php?product=driverbooster6&ref=db63pc2018novautorenewb<?php echo $refStr?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'db3pcbuyautorenew', 'buy', 'dbpurchase-autorenewb')" class="buybtn"><i></i> <span>Activate Now</span></a>

			</div>
			<p> only $1.95 / Month</p>
			<p>$51.9 Saved</p>
			<p class="nomal">Driver Booster 6 Pro   $74.85</p>
			<p class="nomal">-</p>
			<p class="nomal">-</p>
			<p class="noborder nomal">-</p>
		</div>
		<div class="gift-box message">
			<div class="top-message">
				<div class="img-box">
					<span class="gif-box"></span>
					<span class="three-box"></span>
				</div>
				<h2>80% OFF</h2>
				<p><strong>$<b>24</b>.95</strong>  was <del>$114.83</del></p>
				<a href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=db6bundle2018novautorenewb<?php echo $refStr?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuyautorenew', 'buy', 'dbpurchase-autorenewb')" class="buybtn"><i></i> <span>Activate Now</span></a>
				<span class="info"></span>
				<p class="date">Hurry! <strong>04</strong>M: <strong>04</strong>S: <strong>004</strong> Ms Left</p>
			</div>
			<p>only $2.09 / Month</p>
			<p>$89.88 Saved</p>
			<p class="nomal">Driver Booster 6 Pro   $74.85</p>
			<p class="nomal">IObit Uninstaller 8 Pro   $19.99</p>
			<p class="nomal">Smart Defrag 6 Pro   $19.99</p>
			<p class="noborder nomal">Protected Folder   $19.95</p>
		</div>
	</div>
	<div class="info-message">
		<p>
			The price shown in the page is valid only for this promotion. 
			<br> Your Driver Booster subscription will continue after the initial subscription period at the non-promotional price of $29.99. 
			<br> If you choose the Driver Booster 6 bundle pack, all products will also continue after the first year at the normal price shown in the page below.
		</p>
		<p> 
			Cancel Auto-renewal
			<br>If you do not want to participate in the auto-renewal plan, you can uncheck the Auto-renewal box in shopping cart review page or in your 
			<br>account at any time before the start of the next subscription.
		</p>
	</div>

</div>
<div class="million">
	<div class="wrapper">
		<h2>Why do over 150 million users choose Driver Booster?</h2>
		<p>Because their PC runs up to 200% faster* than before, by keeping device drivers always Up-to-date and improving Stability of PC Performance, with the proven driver updating and security technology.</p>
	</div>
</div>
<div class="db-message">
	<div class="wrapper">
		<div class="content">
			<img src="<?php echo $pResUrl; ?>images/db-message.png" alt="" class="db-box">
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
				<dd>
					<strong>No need of one-by-one driver update</strong>
					<p>Providing you one-stop driver detecting & updating solution.</p>
				</dd>
			</dl>
			<dl class="two">
				<dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
				<dd>
					<strong>Safe driver download & update</strong>
					<p>Automatically backing up & creating system restore point before <br> updating, in case of anything unexpected.</p>
				</dd>
			</dl>
			<dl class="three">
				<dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
				<dd>
					<strong>No unexpected system crash</strong>
					<p>Always keeping all drivers up-to-date  to <br> ensure you a stable PC.</p>
				</dd>
			</dl>
			<dl class="four">
				<dt><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></dt>
				<dd>
					<strong>100% * faster download</strong>
					<p>Time-saving with system idle time <br> downloading with up to 100% faster <br> speed.</p>
				</dd>
			</dl>
			<dl class="five">
				<dt><img src="<?php echo $pResUrl; ?>images/icons05.png" alt=""></dt>
				<dd>
					<strong>Peak gaming performance guaranteed</strong>
					<p>Game Ready Driver and necessary game components are available to help <br> run game smoothly.</p>
				</dd>
			</dl>
		</div>
	</div>
</div>
<div class="activate ">
	<div class="wrapper clearfix">
		<h3>What extra benefit will you get from bundle option?</h3>
		<p>Keep drivers always up-to-date and optimize your PCs for better performance.</p>
		<dl>
			<dt>
				<span>Smart Defrag PRO</span>
				<strong>Smart Defrag PRO</strong>
				<del>$19.99</del>
			</dt>
			<dd>Max Hard Drive Optimization <br> for <span>Faster PC</span></dd>
		</dl>
		<dl class="iu">
			<dt>
				<span>IObit Uninstaller PRO</span>
				<strong> IObit Uninstaller PRO</strong>
				<del>$19.99</del>
			</dt>
			<dd>Uninstall Unwanted Plug-ins <br> for <span>Cleaner PC & Browsing</span></dd>
		</dl>
		<dl class="last pf">
			<dt>
				<span>Protected Folder</span>
				<strong>Protected Folder</strong>
				<del>$19.95</del>
			</dt>
			<dd>No Leak of Important Files <br> for <span>Secured Privacy</span></dd>
		</dl>
	</div>
</div>
<div class="between-buy">
	<div class="wrapper">
		<div class="content">
			<h2 class="">SAVE 80% to Activate Now to Enjoy More Stable PC!</h2>
			<p>Now <strong>$24.95</strong> Was <del>$114.83</del></p>
			<a href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=db6bundle2018novautorenewb<?php echo $refStr?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuyautorenew', 'buy', 'dbpurchase-autorenewb')" class="buybtn save"><i></i> Activate Now</a>
			<p class="last count-time"> Hurry! <span>04</span>M:<span>53</span>S:<span>463</span> Ms Left</p>
		</div>
		<dl class="days">
			<dt><img src="<?php echo getStaticUrl('images/days.png')?>" alt="" /></dt>
			<dd>
				<strong> Try it RISK FREE - with our 60-day Money Back Guarantee</strong>
				<p>We’re confident that activating PRO edition will fix all your headache driver matters for affordable price!</p>
			</dd>
		</dl>
		<dl class="visa">
			<dt><b>We accept</b></dt>
			<dd><img src="<?php echo $pResUrl; ?>images/payment.png" alt=""></dd>
		</dl>
	</div>
</div>
<div class="award">
	<div class="wrapper">
		<h2 class="">World-wide Awards</h2>
		<p>As being trusted and awarded by those world-class media in the past five years, you know you’ve got the right driver updater.</p>
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
<div class="review">
	<div class="wrapper">
		<div class="content ">
			<dl class="active">
				<dt>
				<h3>Media Review</h3></dt>
				<dd>
					<h4>IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best. </h4>
				</dd>
				<dd>Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion
					of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does
					a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater
					and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads
					the pack.
				</dd>
			</dl>
			<dl>
				<dt>
				<h3>User Review</h3></dt>
				<dd>
					<h4>"My PC is faster, securer and newer more than the last 8 months ago."</h4>
				</dd>
				<dd>"With Driver Booster, I can easily know which devices drivers are out of date and can easily update
					them. Besides, it helps me to fix sound error, network error, device error etc...I don't believe it
					before I using, but after using it I really love it..just my PC is faster ,securer and newer more
					than the last 8 months ago..so thank you IObit."
				</dd>
			</dl>
			<dl>
				<dt>
				<h3>User Review</h3></dt>
				<dd>
					<h4>"I strongly recommend Driver Booster, it will help to update the driver quickly and	easily."</h4>
				</dd>
				<dd>"Driver booster is an amazing application. As for someone who has a lot of applications and drives
					as does not have the time to manually update them, I strongly recommend Driver Booster, it will help
					to update the driver quickly and easily."
				</dd>
			</dl>
			<dl>
				<dt>
				<h3>User Review</h3></dt>
				<dd>
					<h4>"It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox	forever... Great job!"</h4>
				</dd>
				<dd>"This is one of the best driver updater programs around. Microsoft has even led me astray by
					suggesting updates that wouldn’t work with my machine. This program knew what updates I needed
					without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will
					stay in my toolbox forever... Great job!"
				</dd>
			</dl>
		</div>
		<ul class="users clearfix lato">
			<li class="current">
				<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro" target="_blank">
					<div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine"></div>
				   <p>PC Magazine</p>
				</a>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya"></div>
				<p>Myo Thuya</p>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund"></div>
				<p>Adam Backlund</p>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
				</div>
				<p>Wayne Bowler</p>
			</li>
		</ul>
	</div>
</div>

<div class="comparison">
	<div class="wrapper">
		<h2 class=""> The comparison between FREE and PRO may help you make better decision</h2>
		<table>
			<thead>
			<tr>
				<th colspan="2"></th>
				<th class="itema">
					<div class="free">Driver Booster FREE</div>
				</th>
				<th class="itemb">
					<div class="pro">Driver Booster PRO</div>
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon01.png" alt=""></td>
				<td class="virtue">Auto Scan Outdated/Missing Drivers</td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-cancel.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon05.png" alt=""></td>
				<td class="virtue">Priority to Get Latest Game Ready Driver <img src="<?php echo $pResUrl; ?>images/new.png" alt=""></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon06.png" alt=""></td>
				<td class="virtue">Necessary Components for Smooth Game <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon02.png" alt=""></td>
				<td class="virtue">200% More Devices Supported <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon03.png" alt=""></td>
				<td class="virtue">Up to 100% Higher Update Speed <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon04.png" alt=""></td>
				<td class="virtue">Auto Download & Backup <img src="<?php echo $pResUrl; ?>images/improveo.png" alt="">
				</td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
			</tbody>
			<tfoot>
			<th colspan="2"></th>
			<th class="itema"></th>
			<th class="itemb">
				Only <strong>$24.95</strong>
				<a href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=db6bundle2018novautorenewb<?php echo $refStr?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuyautorenew', 'buy', 'dbpurchase-autorenewb')" class="buybtn"><i></i>
					<span>Activate Now</span></a>
				1 Year Subscription / 3 PCs
			</th>
			</tfoot>
		</table>
	</div>
</div>
<!-- annotation start -->
<div class="annotation lato ">
	<dl class="wrapper">
		<dt>Note:</dt>
		<dd>*.Data may vary based on different system or computer.</dd>
		<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole
			discretion.
		</dd>
		<dd>*. Smart Defrag PRO / IObit Uninstaller PRO / Protected Folder support 1 year subscription / 1 PC.</dd>
	</dl>
</div>
<!-- annotation end -->
<!-- footer start -->
<div class="footer lato">Copyright © 2005 - <?php echo date(Y) ?> IObit. All Rights Reserved</div>
<!-- fooFilter
ter end -->
<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
	<div class="wrapper clearfix">
		<div class="img-box"></div>
		<div class="right">
			<p>Keep All Driver Up-to-date in Whole Year! </p>
			<a class="buybtn" href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=db6bundle2018novautorenewb<?php echo $refStr?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuyautorenew', 'buy', 'dbpurchase-autorenewb')">Activate Now</a>
		</div>
	</div>
</div>
<div class="float">
	<img src="<?php echo $pResUrl; ?>images/fl-user.png" alt="">
	<p>There are <strong class="viewNum"><?php echo $viewNum;?></strong> users <br> viewing at this page.</p>
</div>
<script type="text/javascript">refStr='<?php echo $refStr;?>';</script>
<script type="text/javascript" src="<?php echo getStaticUrl('js/script.js')?>"></script>
</body>
</html>