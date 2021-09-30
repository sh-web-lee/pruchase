<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

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
$viewNum=rand(35,45);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}
if($_GET['ref']=='db3irsource'){
//if(in_array($_GET['ref'],array('x_db','db3irsource'))){
	$refArr=array();
	$refArr[0]=$refArr[1]=$refArr[2]=$refArr[3]=$refArr[4]='db3irsource';
}elseif($_GET['pop']=='x_db'){
	$refArr=array();
	$reStr='x_db';
	if(in_array($_GET['user'],array(1,2))){
		$reStr.=$_GET['user'];
	}
	$refArr[0]=$refArr[1]=$refArr[2]=$refArr[3]=$refArr[4]=$reStr;
}else{
	$refArr=array('febcelebratepopup','febcelebratepopupa','febcelebratepopupb','febcelebratepopupc','febcelebratepopupd');
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
	array_walk($refArr,function (&$v,$k,$refStr){
		$v=$v.$refStr;
	},$refStr);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Save 80% on Driver Booster PRO + Free Gifts - IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Play:400,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<script type="text/javascript">
		function cSet(name,value) {
			var Days = 2;
			var exp = new Date();
			exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
			document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
		}

		function cGet(name) {
			var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
			if (arr = document.cookie.match(reg))
				return unescape(arr[2]);
			else
				return null;
		}

		var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
		var lan=MApp(2.2).language.langArr[0];
		if(lan=='ja'){
			window.location.replace('http://jp.iobit.com/rd/asc11rcpro_newscenter' + queryStr);
		}

		var ver = MApp(2.2).url.getParameters('ver');
		var paramTo = MApp(2.2).url.getParameters('to');
		var paramDdata="<?php echo $_GET['ddata'];?>";
		var reg=new RegExp("^4\.[3-9]|^[5-9]\.[0-9]|^[1-9]\\d+\.[0-9]");
		if (reg.test(ver) && ((paramTo == 'purchase-6')||(paramTo == 'purchase-21')||(paramTo == 'bannerbuy')||(paramTo == 'purchase-28'))&&(paramDdata!='')) {
			window.location.replace('./driverupdate.php' + queryStr);
		}else {
			var cName = 'endbtestab';
			var pageAb = cGet(cName);
			if (pageAb == 'tob') {
				window.location.replace('./statement.php' + queryStr);
			} else {
				if (pageAb == null) {
					var randNum = Math.random();
					if (randNum > 0.5) {
						window.location.replace('./statement.php' + queryStr);
						cSet(cName, 'tob');
					} else {
						cSet(cName, 'toa');
					}
				}
			}
		}

		$(function () {
			var guid = MApp(2.2).url.getParameters('guid');
			var lan = navigator.browserLanguage ? navigator.browserLanguage : navigator.language;
			if (guid.length > 0) {
				$('.stats').attr('src','http://ascstats.iobit.com/other/db_purchase_time.php?a=pur&guid=' + guid);
				$(window).on('beforeunload', function () {
					$('.stats').attr('src','http://ascstats.iobit.com/other/db_purchase_time.php?a=close&guid=' + guid + '&lang=' + lan);
				});
			}
		});
	</script>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner bg">
  <div class="flower clearfix">
    <img class="fl" src="<?php echo $pResUrl;?>images/banner-left.png" alt="">
    <img class="fr" src="<?php echo $pResUrl;?>images/banner-right.png" alt="">
  </div>
	<div class="wrapper">
		<img class="stats" src="" style="display: none;">
		<div class="top clearfix">
			<a class="logo" href="https://www.iobit.com" target="_blank">
				<img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
			</a>
			<span class="offer">Limited Offer</span>
		</div>
		<div class="title">
			<h1>Merry Christmas & Happy New Year</h1>
      <p>Holiday Special Offer - Once Per Year Only!</p>
		</div>
		<div class="content clearfix">
			<div class="left-message">
				<img class="db-box" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" />
        <img class="balloon" src="<?php echo getStaticUrl('images/balloon.png')?>" alt="">
			</div>
			<div class="right-message lato">
				<p class="message">Activate Driver Booster PRO Immediately to <br>Keep Drivers Up-to-date and PC Performance Stable</p>
				<p class="date">Only <span class="pack">78</span> of 2,000 Gift Packs Left </p>
				<div class="box">
					<span class="one"></span>
					<span class="two"></span>
					<span class="three"></span>
					<span class="four"></span>
				</div>
				<dl>
          <dt>Now <strong>$24.95</strong> <span>Was</span>
						<del>$114.83</del>
					</dt>
					<dd>
            <!-- buybtn -->
						<a href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=<?php echo $refArr[0];?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db"
               onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-popup');"
               class="buybtn">
							ACTIVATE NOW
            </a>
          </dd>
					<dd> 1 Year Subscription / 3 PCs</dd>
				</dl>
			</div>
		</div>
		<p class="try lato">Try it RISK FREE - Activate Now to keep PC in excellent status and get a 60-day Money Back Guarantee</p>
	</div>
</div>
<!-- banner end -->

<!-- million -->
<div class="million cut-off">
	<div class="wrapper">
		<h2 class="subhead red-block">Why do over 150 million users choose Driver Booster?</h2>
		<p>Because their PC runs up to 200% faster* than before, by keeping device drivers always Up-to-date and improving Stability of PC Performance, with the proven driver updating and security technology. </p>
	</div>
</div>
<!-- million end -->

<!-- db-computer -->
<div class="db-computer">
	<div class="wrapper">
		<h2 class="subhead">So if you’re feeling…</h2>
		<img src="<?php echo $pResUrl; ?>images/computer-iocns.png" alt="" class="computer">
		<ul>
			<li>Difficult to find and update all the outdated drivers at one time</li>
			<li class="two">Not secure to update drivers with other tools or manually</li>
			<li class="three">Stuck with frequent system crash caused by outdated drivers</li>
			<li class="four">Frustrated with time-wasting caused by slow updating speed</li>
			<li class="five">Worried about poor gaming performance caused by graphics & audio card</li>
		</ul>
	</div>
</div>
<!-- db-computer end -->

<!-- cut-off -->
<div class="cut-off noborder db-message">
	<div class="wrapper">
		<h2 class="subhead red-block"> Don’t worry! You can change things now by activating Driver Booster PRO</h2>
		<div class="content">
			<img src="<?php echo $pResUrl; ?>images/db-message.png" alt="" class="db-box">
			<dl class="">
				<dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
				<dd>
					<strong>No need of one-by-one driver update</strong>
					<p>Providing you one-stop driver detecting & updating <br> solution.</p>
				</dd>
			</dl>
			<dl class="two">
				<dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
				<dd>
					<strong>Safe driver download & update</strong>
					<p>Automatically backing up & creating system restore <br> point before updating, in case of anything unexpected.</p>
				</dd>
			</dl>
			<dl class="three">
				<dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
				<dd>
					<strong>No unexpected system crash</strong>
					<p>Always keeping all drivers up-to-date <br> to ensure you a stable PC.</p>
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
					<p>Latest Game Ready Driver from various brands help boost performance, <br> fix bugs and improve gaming experience. Necessary game components are also available <br> to help run your game smoothly.</p>
				</dd>
			</dl>
		</div>
	</div>
</div>
<!-- cut-off end -->

<!-- between-buy -->
<div class="between-buy bg lato">
	<div class="wrapper">
		<div class="content">
			<h2 class="subhead">Activate Now to Help You out from All the above Frustrating PC Problems</h2>
			<p>Now <strong>$24.95</strong> Was <del>$114.83</del></p>
      <!-- buybtn -->
			<a href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=<?php echo $refArr[1];?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db"
         onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-popup');"
         class="buybtn save yellow">
        <span>Activate Now & <strong>Save 80%</strong></span>
      </a>
			<p class="last"> 1 Year Subscription / 3 PCs</p>
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
<!-- between-buy end -->

<!-- award -->
<div class="award">
	<div class="wrapper">
		<h2 class="subhead">World-wide Awards</h2>
		<p>As being trusted and awarded by those world-class media in the past five years, you know you’ve got the right driver updater.</p>
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
<!-- award end -->

<!-- review -->
<div class="review cut-off noborder">
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
<!-- review end -->

<!-- activate -->
<div class="activate ">
	<div class="wrapper">
		<p><span>80% OFF </span>to Activate Driver Booster Today,</p>
		<h3>Get 3 PC Optimization Tools (valued at $59.93) for FREE!</h3>
		<dl>
			<dt>
				<img src="<?php echo $pResUrl; ?>images/sd-free.png" alt="">
				<strong>Smart Defrag PRO</strong>
				<del>$19.99</del>
			</dt>
			<dd>Max Hard Drive Optimization <br> for <span>Faster PC</span></dd>
		</dl>
		<dl>
			<dt>
				<img src="<?php echo $pResUrl; ?>images/iu-free.png" alt="">
				<strong> IObit Uninstaller PRO</strong>
				<del>$19.99</del>
			</dt>
			<dd>Uninstall Unwanted Plug-ins <br> for <span>Cleaner PC & Browsing</span></dd>
		</dl>
		<dl class="last">
			<dt>
				<img src="<?php echo $pResUrl; ?>images/pf-free.png" alt="">
				<strong>Protected Folder</strong>
				<del>$19.95</del>
			</dt>
			<dd>No Leak of Important Files <br> for <span>Secured Privacy</span></dd>
		</dl>
		<div class="clear"></div>
    <!-- buybtn -->
		<a href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=<?php echo $refArr[2];?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db"
       onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-popup');"
       class="buybtn save yellow">
       <span>Get My Free Gifts</span>
    </a>
		<div class="valued">Valued at $59.93</div>
	</div>
</div>
<!-- activate end -->

<!-- comparison -->
<div class="comparison">
	<div class="wrapper">
		<h2 class="subhead"> The comparison between FREE and PRO may help you make better decision</h2>
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
				<a href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=<?php echo $refArr[3];?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuyd', 'buy', 'dbpurchase-popup');" class="buybtn"><i></i>
					<span>Activate Now</span></a>
				1 Year Subscription / 3 PCs
			</th>
			</tfoot>
		</table>
	</div>
</div>
<!-- comparison end -->

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
<!-- footer end -->

<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
	<div class="wrapper clearfix">
		<div class="left">
			<h2 class="lato">SAVE <span>80%</span> to Activate Now to Enjoy More Stable PC! </h2>
			<p>Only <span class="pack">78</span> Gift Packs Left</p>
		</div>
		<div class="right">
			<p class="lato"> Now <strong>$24.95</strong> Was
				<del>$114.83</del>
			</p>
      <!-- buybtn -->
			<a class="buybtn yellow"
         href="https://www.iobit.com/buy.php?product=db6sdiupf&ref=<?php echo $refArr[4];?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db"
         onclick="ga('send', 'event', 'dbbuye', 'buy', 'dbpurchase-popup');">
        Activate Now
      </a>
		</div>
	</div>
</div>
<!-- floatlayer end -->

<!-- float -->
<div class="float">
	<img src="<?php echo $pResUrl; ?>images/fl-user.png" alt="">
	<p>There are <strong class="viewNum"><?php echo $viewNum;?></strong> users <br> viewing at this page.</p>
</div>
<!-- float end -->

<script type="text/javascript" src="<?php echo getStaticUrl('js/jquery.animateNumber.min.js')?>"></script>
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script type="text/javascript" src="<?php echo getStaticUrl('js/script.js')?>"></script>
</body>
</html>