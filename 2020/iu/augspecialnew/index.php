<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'eniuaugspecialnew_p' . $date;
	$c_name_t='eniuaugspecialnew_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(41,59);
		setcookie($c_name, $packsNum, time() + 3600 * 24);
		setcookie($c_name_t,$totalNum, time() + 3600 * 24);
	} else {
		if (intval($_COOKIE[$c_name]) <= 0) {
			$packsNum = 0;
			setcookie($c_name, $packsNum, time() + 3600 * 24);
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['pst'])?'':('-p'.$_GET['pst']);
$refStr.=empty($_GET['pct'])?'':('-'.$_GET['pct']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);

if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr = '-' . ((strlen($_GET['to']) == 0) ? 'unknown' : $_GET['to']);
$refStr .= '-' . $ver;
$refStr .= '-' . ((strlen($_GET['user']) == 0) ? 'unknown' : 'u'.$_GET['user']);
$refStr .= '-' . ((strlen($_GET['insday']) == 0) ? 'unknown' : 'i'.$_GET['insday']);
$refStr .= '-' . ((strlen($_GET['insur']) == 0) ? 'unknown' : $_GET['insur']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Time-limited chance to get the latest IObit Uninstaller PRO</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
			<h1>FLASH SALE TODAY</h1>
			<div class="countdown">
				<b><span>08</span><i class="left"></i><i class="right"></i></b> m<em>:</em> 
				<b><span>45</span><i class="left"></i><i class="right"></i></b> s<!-- <em>:</em>  -->
				<!-- <b class="last"><span>124</span><i class="left"></i><i class="center"></i><i class="right"></i></b> --> * left now
			</div>
			<div class="clearfix">
				<div class="offer left">
					<img class="iubox" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
					<div class="price">
						<p><strong><small>$</small>13.77</strong> <del>$19.99</del></p>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=iu111pc1377&ref=en-iu1pcspecialnew<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" 
						   onclick="ga('send', 'event', 'iu1pcbuy', 'buy', 'iu11specialnew');">
						  Buy Now   	
						</a>
					</div>
					<div class="explain">
						<h3 class="off">30% Off</h3>
						<ul>
							<li><i class="one">-30%</i> <span>IObit Uninstaller PRO</span> <del>$19.99</del></li>
							<li class="line"> - </li>
							<li class="line"> - </li>
						</ul>
					</div>
				</div>
				<div class="offer right">
					<img class="iubox" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
					<img class="gift" src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/>
					<!-- <img class="gift sd" src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
					<img class="gift pf" src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/> -->
					<div class="price">
						<p><strong><small>$</small>15.77</strong> <del>$59.93</del></p>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=iu11pro1577&ref=en-iu3pcspecialnew<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" 
						   onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iu11specialnew');">
						  Buy Now   	
						</a>
					</div>
					<div class="explain">
						<h3 class="off">70% Off</h3>
						<ul>
							<li><i class="one">-70%</i> <span>IObit Uninstaller PRO</span> <del>$59.93</del></li>
							<li><i>FREE</i> <span>Smart Defrag  7 PRO</span> <del>$19.99</del></li>
							<li><i>FREE</i> <span>Protected Folder</span> <del>$19.99</del></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
	<div class="intro" data-name="animation">
		<div class="wrapper ">
			<h2>Why Get IObit Uninstaller PRO?</h2>
			<h3>Uninstall Anything Unwanted</h3>
			<dl class="first" data-name="default">
				

				<dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>Windows App</h3>
					<p class="first">Useless Windows Apps</p>
					<p>Default Windows Apps</p>
					<p>Faulty Windows Apps</p>
				</dd>
			</dl>
			<dl class="two" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>Programs</h3>
					<p class="first">Useless Programs</p>
					<p>Stubborn Programs <span><em>PRO</em></span></p>
					<p>Bundled Programs <span><em>PRO</em></span></p>
					<p>Malicious Programs <span><em>PRO</em></span></p>
				</dd>
			</dl>
			<dl class="three" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>Plug-ins</h3>
					<p class="first">Useless Plug-ins</p>
					<p>Ad-based Plug-ins <span><em>PRO</em></span></p>
					<p>Malicious Plug-ins <span><em>PRO</em></span></p>
				</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/intro-img.png')?>" alt="" class="img-box" data-name="default">
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature" data-name="animation">
		<div class="wrapper">
			<h2>Uninstall Everything Completely</h2>
			 <div class="img-box" data-name="default">
			 	<b class="product-name">IObit Uninstaller 11</b>
			 	<div class="list01">
			 		<span class="button">Uninstall</span>
			 		<span class="hand"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt="">
			 	</div>
			 	<div class="list02">
			 		<span class="circle"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-01.png')?>" alt="" class="top">
			 		<p class="name">Antivirus Software</p>
			 		<p class="mb"><span>00</span>.<span class="span">00</span>MB</p>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-02.png')?>" alt="">
			 		<p class="last">Uninstalling Antivirus Software</p>
			 	</div>
			 	<div class="list03">
			 		<img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt="">
			 		<div class="bar">
			 			<span></span>
			 		</div>
			 	</div>
			 	<div class="list04">
			 		<img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt="">
			 		<p>You have successfully uninstalled <strong>0</strong> program with details below:</p>
			 		<ul>
			 			<li>Registry entries deleted: <strong>0</strong></li>
			 			<li>Files deleted: <span><strong>0</strong>.<strong>0</strong></span>MB</li>
			 			<li>Scheduled tasks deletd: <strong>0</strong></li>
			 			<li>System services deleted: <strong>0</strong></li>
			 			<li>Logged items deleted: <strong class="last">0</strong></li>
			 		</ul>
			 	</div>
			 </div>
			 <div class="message">
			 	<dl data-name="default" class="one clearfix">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Record Changes</h3>
			 			<p>Record system changes when newly installing a program, in order to guarantee further complete uninstallation.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="two clearfix">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Powerful Uninstall <span><em>PRO</em></span></h3>
			 			<p>1-click to uninstall unwanted programs in batch, including antivirus software that refuse to be removed.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="three clearfix">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Clean Leftovers <span><em>PRO</em></span></h3>
			 			<p>Automatically clean leftovers of uninstalled programs, even those left by uninstallation with other utilities.</p>
			 		</dd>
			 	</dl>
			 </div>
		</div>
	</div>
	<!-- feature end -->

	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>It’s a Trust-worthy Uninstaller</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>50M+</h3>
					<p>Downloads</p>
				</dd>
			</dl>
			<dl class="center">
				<dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>4.5+</h3>
					<p>User’s Rating</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>1000+</h3>
					<p>Media Recommendations</p>
				</dd>
			</dl>
			<div class="review-box">
				<div class="box">
					<h3>User Review</h3>
					<p>"IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."</p>
				</div>
				<div class="box">
					<h3>User Review</h3>
					<p>This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."</p>
				</div>
				<div class="box active">
					<h3>Media Review</h3>
					<p>"If you need a program that lets you cleanly and completely uninstall applications, fire up IObit Uninstaller. This free utility makes it a breeze to delete apps, including stray files that are often left behind when you use Windows to delete software from your hard drive or SSD."</p>
				</div>
				<div class="box">
					<h3>User Review</h3>
					<p>"I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed. "</p>
				</div>
				<div class="box">
					<h3>User Review</h3>
					<p>"IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."</p>
				</div>
			</div>
			<ul class="clearfix">
				<li class="first">
					<span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
					<p>Ivan White</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></span>
					<p> Ali Tekin</p>
				</li>
				<li class="active">
					<span><img src="<?php echo getStaticUrl('images/pcgm.png')?>" alt="PC Magazine"></span>
					<p>PC Magazine</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></span>
					<p>Samrat Kumar Chakrabortty</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></span>
					<p>John Glenn Perong</p>
				</li>
			</ul>
			<div class="service">
				<h2>World-wide Awards</h2>
				<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
			</div>
		</div>
	</div>
	<!-- review end -->

	<!-- giftbox start -->
	<div class="giftbox">
		<div class="gift-wrap">
			<h2>Also You Can Get Powerful Utilities for Free</h2>
			<div class="clearfix">
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/></dt>
					<dd>
						<h3>Smart Defrag PRO</h3>
						<strong><small>$</small>0</strong> <span>1 Y / 1 PC</span>
						<p>Get the Maximum Hard Drive Performance!</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
					<dd>
						<h3>Protected Folder</h3>
						<strong><small>$</small>0</strong> <span>1 Y / 1 PC</span>
						<p>Never Worry about Data Theft or Privacy Leaks!</p>
					</dd>
				</dl>
			</div>
			<a class="buybtn"
			   href="https://www.iobit.com/buy.php?product=iu11pro1577&ref=en-iu3pcspecialnew<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" 
			   onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iu11specialnew');">
			  Get Your Free Gifts  	
			</a>
		</div>
	</div>
	<!-- giftbox end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
				</dd>
			</dl>
			<!-- <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p> -->
		</div>
	</div>
	<!-- bottom end -->

<script>refStr="<?php echo $refStr;?>";</script>
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>