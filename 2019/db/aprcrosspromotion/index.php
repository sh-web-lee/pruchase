<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

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
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
	$ver=$matches[1][0].$matches[1][1];
	$refStr.='-'.$ver;
}
if($_GET['pop']=='x_db'){
	$refStr.='-'.$_GET['pop'];
	if(in_array($_GET['user'],array('1','2'))){
		$refStr.=$_GET['user'];
	}
}

$productName='';
$paramPri=$_GET['pri'];
switch($paramPri){
	case 'imf':
		$productName='IObit Malware Fighter Pro';
		break;
	case 'iu':
		$productName='IObit Uninstaller Pro';
		break;
	case 'sd':
		$productName='Smart Defrag Pro';
		break;
	default:
		$productName='Advanced SystemCare Pro';
		break;
}

$transData=json_decode(base64_decode($_GET['idata']));
if((!empty($paramPri))&&$transData->$paramPri!==null){
	$refStr.='-'.$paramPri.$transData->$paramPri;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>70% OFF Driver Booster</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<script>
		var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
		var browserLanguage=MApp(2.2).language.langArr[0];
		if(browserLanguage=='tr'){
			window.location.replace('./tka.php' + queryStr);
		}else {
			var ver = MApp(2.2).url.getParameters('ver');
			var paramTo = MApp(2.2).url.getParameters('to');
			var reg=new RegExp("^6\.[3-9]|^[7-9]\.[0-9]|^[1-9]\\d+\.[0-9]");
			if (reg.test(ver) && ((paramTo == 'gaexpired')||(paramTo == 'multipcexpired_2'))) {
				var cName = 'endbtestab';
				var pageAb = cGet(cName);
				if (pageAb == 'tob') {
					window.location.replace('./dbexp.php' + queryStr);
				} else {
					if (pageAb == null) {
						var randNum = Math.random();
						if (randNum > 0.5) {
							window.location.replace('./dbexp.php' + queryStr);
							cSet(cName, 'tob');
						} else {
							cSet(cName, 'toa');
						}
					}
				}
			}

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
		}
	</script>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<div class="title">
				<h1>IObit 14 Anniversary Big Sale</h1>
				<p>Enjoy 70% OFF+ IObit Signature Product just for $1</p>
			</div>
			<div class="offer clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster"/>
					<p><strong>$<big>23</big>.95</strong>  was <del>$74.85</del></p>
				</div>
				<div class="center fl">
					<div id="bancountdown" class="countdown">
						<i class="all-icons">Hurry!</i> Only <b>04</b>M:<b>54</b>S:<b>25</b>Ms Left
					</div>
					<h2>Get other IObit signature product for $1 more</h2>
					<ul id="banlist">
						<li id="sd" class="on">
							<i class="all-icons"></i>
							<h3>Smart Defrag PRO <span><b>$<big>1</big></b> <del>was $19.99</del></span></h3>
							<img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/>
						</li>
						<li id="iu">
							<i class="all-icons"></i>
							<h3>IObit Uninstaller PRO <span><b>$<big>1</big></b> <del>was $19.99</del></span></h3>
							<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
						</li>
						<li id="pf">
							<i class="all-icons"></i>
							<h3>Protected Folder <span><b>$<big>1</big></b> <del>was $19.95</del></span></h3>
							<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/>
						</li>
					</ul>
					<!-- <div class="mask"><span class="zoomout">SOLDOUt</span></div> -->
				</div>
				<div class="right fr">
					<h2 class="line">your items:</h2>
					<ul>
						<li class="one">
							<h3>Driver Booster 6 PRO <span><b><small>$</small>23.95</b> <del>$74.85</del></span></h3>
							<p>1 year subscription / 3 PCs</p>
						</li>
						<li class="sd">
							<h3>Smart Defrag PRO <span><b><small>$</small>1</b> <del>$19.99</del></span></h3>
							<p>1 year subscription / 1 PC</p>
						</li>
					</ul>
					<div class="price line">
						<p><span>Total: </span> <strong>$<big>24</big>.95</strong></p>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=db6sdcp&ref=db6sdcp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
						   onclick="ga('send', 'event', 'db6sdbuy', 'buy', 'dbsdpurchase-201904cp')">
						  <i class="all-icons"></i> <span>Activate Now</span>
						</a>
						<!-- <p class="only">only $1.95 / Month </p> -->
						<div class="tips">
							<i class="all-icons">!</i>
							<div class="txt">
								<p>The price shown in the page is valid only for this promotion.</p>
								<p>
									Your Driver Booster subscription will continue after the initial subscription period at the non-promotional price of $29.99.
								</p>
								<p>
									If you choose the Driver Booster 6 bundle pack, all products will also continue after the first year at the normal price shown in the page below.
								</p>
								<p class="bottom">Cancel Auto-renewal</p>
								<p>
									If you do not want to participate in the auto-renewal plan, you can uncheck the Auto-renewal box in shopping cart review page or in your account at any time before the start of the next subscription.
							  </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="choose">
				<h2>Why do over 150 million users choose Driver Booster?</h2>
				<p>
					Because their PC runs up to 200% faster* than before, by keeping device drivers always Up-to-date and improving Stability of PC Performance, with the proven driver updating and security technology.
				</p>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- feature start -->
	<div class="feature wrapper">
		<img class="db-box" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt=""/>
		<dl>
			<dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></dt>
			<dd>
				<strong>No need of one-by-one driver update</strong>
				<p>Providing you one-stop driver detecting & updating solution.</p>
			</dd>
		</dl>
		<dl class="two">
			<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
			<dd>
				<strong>Safe driver download & update</strong>
				<p>Automatically backing up & creating system restore point before <br> updating, in case of anything unexpected.</p>
			</dd>
		</dl>
		<dl class="three">
			<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
			<dd>
				<strong>No unexpected system crash</strong>
				<p>Always keeping all drivers up-to-date  to <br> ensure you a stable PC.</p>
			</dd>
		</dl>
		<dl class="four">
			<dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
			<dd>
				<strong>100% * faster download</strong>
				<p>Time-saving with system idle time <br> downloading with up to 100% faster <br> speed.</p>
			</dd>
		</dl>
		<dl class="five">
			<dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
			<dd>
				<strong>Peak gaming performance guaranteed</strong>
				<p>Game Ready Driver and necessary game components are available to help <br> run game smoothly.</p>
			</dd>
		</dl>
	</div>
	<!-- feature end -->

	<!-- giftbox start -->
	<div class="giftbox">
		<div class="wrapper">
			<h2>IObit 14<sup>th</sup> Anniversary - Buy IObit Signature Products for $1</h2>
			<p>Keep drivers always up-to-date and optimize your PCs for better performance.</p>
			<ul class="clearfix">
				<li>
					<img src="<?php echo getStaticUrl('images/sd-icon.png')?>" alt="Smart Defrag PRO"/>
					<h3>Smart Defrag PRO</h3>
					<strong>$1</strong> <del>$19.99</del>
					<p>Maximize Hard Drive Optimization <span>for Faster PC</span></p>
					<!-- <div class="mask"><span>SOLDOUt</span></div> -->
				</li>
				<li>
					<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt="IObit Uninstaller PRO"/>
					<h3>IObit Uninstaller PRO</h3>
					<strong>$1</strong> <del>$19.99</del>
					<p>Uninstall Unwanted Plug-ins <span>for Cleaner PC & Browsing</span></p>
				</li>
				<li class="last">
					<img src="<?php echo getStaticUrl('images/pf-icon.png')?>" alt="Protected Folder"/>
					<h3>Protected Folder</h3>
					<strong>$1</strong> <del>$19.95</del>
					<p>No Leak of Important Files <span>for Secured Privacy</span></p>
				</li>
			</ul>
		</div>
	</div>
	<!-- giftbox end -->

	<div class="wrapper">
		<!-- service start -->
		<div class="service clearfix">
			<dl class="fl">
				<dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
				<dd>
					<h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
					<p>
						We???re confident that activating PRO edition will fix all your headache driver matters for affordable price!
					</p>
				</dd>
			</dl>
			<dl class="fr">
				<dt><h3>We accept</h3></dt>
				<dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
			</dl>
		</div>
	  <!-- service end -->	

	  <!-- awards start -->
	  <div class="awards">
	  	<h2>World-wide Awards</h2>
	  	<p>
	  		As being trusted and awarded by those world-class media in the past five years, you know you???ve got the right driver updater.
	  	</p>
	  	<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
	  </div>
	  <!-- awards end -->
	</div>

	<!-- review start -->
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
						suggesting updates that wouldn???t work with my machine. This program knew what updates I needed
						without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will
						stay in my toolbox forever... Great job!"
					</dd>
				</dl>
			</div>
			<ul class="users clearfix lato">
				<li class="active">
					<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro" target="_blank">
						<div class="pic"><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></div>
					   <p>PC Magazine</p>
					</a>
				</li>
				<li>
					<div class="pic"><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"></div>
					<p>Myo Thuya</p>
				</li>
				<li>
					<div class="pic"><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></div>
					<p>Adam Backlund</p>
				</li>
				<li>
					<div class="pic"><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler">
					</div>
					<p>Wayne Bowler</p>
				</li>
			</ul>
		</div>
	</div>
	<!-- review end -->

	<!-- comparison start -->
	<div class="comparison">
		<div class="wrapper">
			<h2>The comparison between FREE and PRO may help you make better decision</h2>
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
						<td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
						<td class="virtue">Auto Scan Outdated/Missing Drivers</td>
						<td class="itema"><i class="all-icons">???</i></td>
						<td class="itemb"><i class="all-icons red">???</i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
						<td class="virtue">Priority to Get Latest Game Ready Driver <span class="new"><em>NEW</em></span></td>
						<td class="itema"><i class="all-icons gray">??</i></td>
						<td class="itemb"><i class="all-icons red">???</i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
						<td class="virtue">Necessary Components for Smooth Game <span><em>IMPROVED</em></span></td>
						<td class="itema"><i class="all-icons gray">??</i></td>
						<td class="itemb"><i class="all-icons red">???</i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
						<td class="virtue">200% More Devices Supported <span><em>IMPROVED</em></span></td>
						<td class="itema"><i class="all-icons gray">??</i></td>
						<td class="itemb"><i class="all-icons red">???</i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
						<td class="virtue">Up to 100% Higher Update Speed <span><em>IMPROVED</em></span></td>
						<td class="itema"><i class="all-icons gray">??</i></td>
						<td class="itemb"><i class="all-icons red">???</i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/com-icon04.png')?>" alt=""></td>
						<td class="virtue">Auto Download & Backup <span><em>IMPROVED</em></span></td>
						<td class="itema"><i class="all-icons gray">??</i></td>
						<td class="itemb"><i class="all-icons red">???</i></td>
					</tr>
				</tbody>
				<!-- <tfoot>
					<tr>
						<th colspan="2"></th>
						<th class="itema"></th>
						<th class="itemb">
							<p>Only <strong>$22.95</strong></p>
							<a class="buybtn">
							  <i class="all-icons"></i> <span>Activate Now</span>
							</a>
							<p>1 Year Subscription / 3 PCs</p>
						</th>
					</tr>
				</tfoot> -->
			</table>
		</div>
	</div>
	<!-- comparison end -->

	<!-- footbuy start -->
	<div class="footbuy">
		<div class="wrapper clearfix">
			<div class="left fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster"/></div>
			<ul id="footlist" class="fl clearfix">
				<li class="on">
					<img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/>
					<p><b>$<big>1</big></b> <del>was $19.99</del></p>
					<i class="all-icons"></i>
				</li>
				<li>
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
					<p><b>$<big>1</big></b> <del>was $19.99</del></p>
					<i class="all-icons"></i>
				</li>
				<li class="last">
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/>
					<p><b>$<big>1</big></b> <del>was $19.95</del></p>
					<i class="all-icons"></i>
				</li>
			</ul>
			<div class="price fr">
				<p>only <strong>$<big>24</big>.95</strong></p>
				<a class="buybtn"
				   href="https://www.iobit.com/buy.php?product=db6sdcp&ref=db6sdcp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
				   onclick="ga('send', 'event', 'db6sdbuy', 'buy', 'dbsdpurchase-201904cp')">
				  <i class="all-icons"></i> <span>Activate Now</span>
				</a>
				<p class="subscript">1 year subscription / <em>3</em> PCs</p>
			</div>
			<div id="footcountdown" class="countdown">
				<i class="all-icons">Hurry!</i> Only <b>04</b>M:<b>54</b>S:<b>25</b>Ms Left
			</div>
			<!-- <div class="mask"><span class="zoomout">SOLDOUt</span></div>
			<div class="all-icons add">+</div> -->
		</div>
	</div>
	<!-- footbuy end -->

	<!-- bottom start -->
	<dl class="note wrapper">
		<dt>Note:</dt>
		<dd>*.Data may vary based on different system or computer.</dd>
		<dd>
			*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
		</dd>
		<dd>*. Smart Defrag PRO / IObit Uninstaller PRO / Protected Folder support 1 year subscription / 1 PC.</dd>
	</dl>
	<div class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
	<!-- bottom end -->

	<!-- coupon start -->
	<div id="coupon" class="coupon on">
		<h2>VIP Discount</h2>
		<p class="name"><b><?php echo $productName;?></b> user only</p>
		<img src="<?php echo getStaticUrl('images/pop-off.png')?>" alt="EXTRA 10% OFF"/>
		<div class="copybox">
			<span id="ctxt" class="copy-txt">VIP10</span>
			<span id="cbtn" class="copy-btn">COPY</span>
		</div>
		<p>Copy and use it at checkout</p>
	</div>
	<!-- coupon end -->

<script>
	var refStr="<?php echo $refStr;?>";
	var affStr="<?php echo $_GET['aff'];?>";
</script>
<script src="<?php echo getStaticUrl('script/clipboard.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>