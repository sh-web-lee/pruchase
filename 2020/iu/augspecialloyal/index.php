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
	$c_name = 'eniuaugspecialloyal_p' . $date;
	$c_name_t='eniuaugspecialloyal_t' . $date;
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
	<title>Best chance to get the latest IObit Uninstaller PRO</title>
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
				<!-- <b class="last"><span>124</
					span><i class="left"></i><i class="center"></i><i class="right"></i></b> --> * left now
			</div>
			<div class="clearfix">
				<div class="offer left">
					<img class="iubox" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
					<div class="price">
						<p><strong><small>$</small>11.97</strong> <del>$19.99</del></p>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=iu111pc1197&ref=en-iu1pcspecialloyal<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" 
						   onclick="ga('send', 'event', 'iu1pcbuy', 'buy', 'iu11specialloyal');">
						  Buy Now   	
						</a>
					</div>
					<div class="explain">
						<h3 class="off">40% Off</h3>
						<ul>
							<li><i class="one">-40%</i> <span>IObit Uninstaller PRO</span> <del>$19.99</del></li>
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
						<p><strong><small>$</small>12.97</strong> <del>$59.93</del></p>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=iu113pcpfsd1297&ref=en-iu3pcspecialloyal<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" 
						   onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iu11specialloyal');">
						  Buy Now   	
						</a>
					</div>
					<div class="explain">
						<h3 class="off">78% Off</h3>
						<ul>
							<li><i class="one">-78%</i> <span>IObit Uninstaller PRO</span> <del>$59.93</del></li>
							<li><i>FREE</i> <span>Smart Defrag  7 PRO</span> <del>$19.99</del></li>
							<li><i>FREE</i> <span>Protected Folder</span> <del>$19.99</del></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- feature start -->
	<div class="feature" data-name="animation">
		<div class="wrapper">
			<h2>Get the Best & the latest Uninstaller by Far</h2>
			<div class="clearfix">
				<ul class="feature-tab fl">
					<li class="tab-one on">
						<div class="icons">
							<span>
								<i></i>
								<em class="one"></em>
								<em class="two"></em>
								<em class="three"></em>
								<em class="four"></em>
								<em class="five"></em>
							</span>
						</div>
						<h4>Uninstall</h4>
					</li>
					<li class="tab-two">
						<div class="icons">
							<span>
								<!-- <img class="tab-three-img" src="<?php echo getStaticUrl('images/feature-tab-icons02.png')?>" alt=""/> -->
								<i class="tab-three-img"></i>
								<em class="one"></em>
								<em class="remove-arrow two"></em>
								<em class="remove-arrow three"></em>
								<em class="remove-arrow four"></em>
							</span>
						</div>
						<h4>Remove</h4>
					</li>
					<li class="tab-three">
						<div class="icons">
							<span>
								<img class="tab-three-img" src="<?php echo getStaticUrl('images/feature-tab-icons03.png')?>" alt=""/>
								<em class="one"></em>
								<em class="two"></em>
								<em class="three"></em>
								<em class="four"></em>
								<em class="five"></em>
							</span>
						</div>
						<h4>Auto Clean</h4>
					</li>
					<li class="tab-four">
						<div class="icons">
							<span>
								<img src="<?php echo getStaticUrl('images/feature-tab-icons04.png')?>" alt=""/>
								<em class="one"></em>
								<em class="two"></em>
							</span>
						</div>
						<h4>Record</h4>
					</li>
				</ul>
				<div class="feature-msg fr">
					<dl class="one on">
						<dt><h3>Uninstall Problematic Programs</h3></dt>
						<dd>
							<p>Completely uninstall programs which refuse to be removed or secretly installed along with freeware on your PC.</p>
						</dd>
					</dl>
					<dl class="two">
						<dt><h3>Remove Malicious Plug-ins</h3></dt>
						<dd>
							<p>Remove malicious and advertising plug-ins in mainstream browsers with just 1-click.</p>
							<span class="feature-tag">Unique on market</span>
						</dd>
					</dl>
					<dl class="three">
						<dt><h3>Auto Clean Leftovers</h3></dt>
						<dd>
							<p>Automatically clean leftover files, even those left by programs uninstalled by other utilities.</p>
							<span class="feature-tag">Unique on market</span>
						</dd>
					</dl>
					<dl class="four">
						<dt><h3>Record & Clean</h3></dt>
						<dd>
							<p>Automatically monitor all files and registries created during software installation to guarantee thorough uninstall afterwards.</p>
						</dd>
					</dl>
				</div>
			</div>
			<div class="feature-list clearfix">
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/feature-tab-icons08.png')?>" alt=""/></dt>
					<dd>
						<h4>1000+ stubborn</h4>
						<p>programs uninstalling</p>
						<span class="feature-tag orange">Improved</span>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/feature-tab-icons09.png')?>" alt=""/></dt>
					<dd>
						<h4>Make</h4>
						<p>Software Safer & Smoother</p>
						<span class="feature-tag orange">New</span>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/feature-tab-icons07.png')?>" alt=""/></dt>
					<dd>
						<h4>20% More</h4>
						<p>Leftovers Detection</p>
						<span class="feature-tag orange">Improved</span>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- feature end -->

	<!-- comparison start -->
	<div class="comparison">
		<div class="wrapper">
			<h2>You Can Enjoy More with This Pack</h2>
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<thead>
					<th class="text" colspan="2"></th>
					<th class="free">What you have<br> now</th>
					<th class="pro"><h3>IObit Uninstaller 11 PRO<br> Loyal-user Pack</h3></th>
				</thead>
				<tbody>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></td>
						<td class="text">Uninstall some programs, plugins and apps with 1-click</td>
						<td class="free"><i class="all-icons green"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></td>
						<td class="text">Auto scan & in-depth cleaning leftovers of already uninstalled programs</td>
						<td class="free"><i class="all-icons"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></td>
						<td class="text">Remove stubborn programs, even those with uninstall issues</td>
						<td class="free"><i class="all-icons"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></td>
						<td class="text">Uninstall third-party programs installed alongside freeware</td>
						<td class="free"><i class="all-icons"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></td>
						<td class="text">Detect and remove malicious software & advertising plug-ins</td>
						<td class="free"><i class="all-icons"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr>
					<!-- <tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></td>
						<td class="text">Identify and remove malicious & advertising plug-ins</td>
						<td class="free"><i class="all-icons"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr> -->
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""/></td>
						<td class="text">One click to update all important software</td>
						<td class="free"><i class="all-icons"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></td>
						<td class="text">Deep defrag hard drive data to optimize PC performance</td>
						<td class="free"><i class="all-icons"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""/></td>
						<td class="text">Protect your important files and folders with password</td>
						<td class="free"><i class="all-icons"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- comparison end -->

	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>We Are Trust-worthy</h2>
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

	<!-- footbuy start -->
	<div class="footbuy">
		<div class="wrapper clearfix">
			<div class="imgbox fl free">
				<span class="iubox"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/></span>
				<span class="gift"><img src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/></span>
			</div>
			<ul class="changelist fl">
				<li class="on" data-num="1"><span>1 Year / 3 PCs + Free Gifts </span> <b>78% Off</b></li>
				<li class="last" data-num="0"><span>1 Year / 1 PC</span> <b>40% Off</b></li>
			</ul>
			<div class="price fr">
				<p><strong><small>$</small>12.97</strong> <del>$59.93</del></p>
				<a class="buybtn"
				   href="https://www.iobit.com/buy.php?product=iu113pcpfsd1297&ref=en-iu3pcspecialloyal<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu" 
				   onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iu11specialloyal');">
				  Buy Now   	
				</a>
			</div>
		</div>
	</div>
	<!-- footbuy end -->

<script>refStr="<?php echo $refStr;?>";</script>
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>