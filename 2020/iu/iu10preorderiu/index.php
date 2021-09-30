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
	$c_name = 'eniujuneorder_p' . $date;
	$c_name_t='eniujuneorder_t' . $date;
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

$refStr = empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
if (!empty($_GET['to'])) {
    $refStr .= '-' . $_GET['to'];
}
$ver = explode('.', $_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : ('-' . $ver[0] . $ver[1]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pay $0 to get the latest IObit Uninstaller PRO</title>
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
	<div class="banner" data-name="animation">
		<div class="wrapper">
			<div class="top">
				<a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
				  IObit
				</a>
				<div class="icon">
					<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
					IObit Uninstaller 10
				</div>
			</div>
			<div class="clearfix">
				<div class="left-img">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iu-box" data-name="default">
					<img src="<?php echo getStaticUrl('images/banner-icon01.png')?>" alt="" class="iu-icon01" data-name="default">
					<img src="<?php echo getStaticUrl('images/banner-icon02.png')?>" alt="" class="iu-icon02" data-name="default">
				</div>
				<div class="right fr">
					<h1 data-name="default">Welcome to our Presale</h1>
					<h2 data-name="default">Upgrade to the Latest Pro for $0</h2>
					<h3 data-name="default">Limited to first 500 users per day before August 25<sup>th</sup></h3>
					<div class="number" data-name="default">
						<div id="reduce" class="reduceNum">
							<div class="listbox"><span class="list"><b>5</b></span></div>
							<div class="listbox"><span class="list"><b>0</b></span></div>
						</div>
						left now
						<div class="bar">
							<span></span>
						</div>
					</div>
					<div class="price" data-name="default">
						<strong>$0 <sup>*</sup></strong>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=iu10preorder&ref=en-iu10preorderiu<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
						   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10preorderiu');">
						  Upgrade Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- feature start -->
	<div class="feature" data-name="animation">
		<div class="wrapper">
			<h2>It’s the Best Uninstaller by Far</h2>
			<div class="clearfix">
				<ul class="feature-tab fl">
					<li class="tab-one on">
						<div class="icons">
							<span>
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
								<img class="tab-three-img" src="<?php echo getStaticUrl('images/feature-tab-icons02.png')?>" alt=""/>
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
		</div>
	</div>
	<!-- feature end -->

	<!-- comparison start -->
	<div class="comparison">
		<div class="wrapper">
			<h2><span>You Can Enjoy More with It</span> <em>More</em></h2>
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<thead>
					<th class="text" colspan="2"></th>
					<th class="free">What you have<br> now</th>
					<th class="pro"><h3>IObit Uninstaller 10<br> PRO</h3></th>
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
						<td class="text">In-depth cleaning of files which can’t be removed by standard uninstall</td>
						<td class="free"><i class="all-icons"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></td>
						<td class="text">Remove programs that can't be uninstalled by conventional means</td>
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
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></td>
						<td class="text">Auto clean leftovers of already uninstalled programs</td>
						<td class="free"><i class="all-icons"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></td>
						<td class="text">Identify and remove malicious & advertising plug-ins</td>
						<td class="free"><i class="all-icons"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""/></td>
						<td class="text">One click to update all important software</td>
						<td class="free"><i class="all-icons"></i></td>
						<td class="pro"><i class="all-icons green"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- comparison end -->

	<!-- feature-02 start -->
	<div class="feature-02" data-name="animation">
		<div class="wrapper">
			<div class="feature-dl clearfix">
				<dl class="one on">
				  <dt><img src="<?php echo getStaticUrl('images/feature-icon09.png')?>" alt=""></dt>
				  <dd>
				    <h3>50% Faster</h3>
				    <p>Programs Uninstalling</p>
				    <span class="feature-tag orange">Improved</span>
				  </dd>
				</dl>
				<dl class="center on">
				  <dt><img src="<?php echo getStaticUrl('images/feature-icon10.png')?>" alt=""></dt>
				  <dd>
				    <h3>Stop</h3>
				    <p>Annoying Notifications</p>
				    <span class="feature-tag orange">New</span>
				  </dd>
				</dl>
				<dl class="three on">
				  <dt><img src="<?php echo getStaticUrl('images/feature-icon11.png')?>" alt=""></dt>
				  <dd>
				    <h3>30% More</h3>
				    <p>Leftovers Detection</p>
				    <span class="feature-tag orange">Improved</span>
				  </dd>
				</dl>
			</div>
			<h2 data-name="default">Incomplete Uninstall <span>May Cause</span></h2>
			<div class="feature-div clearfix" data-name="default">
				<div class="feature-screen fl">
					<div class="screen-list left">
						<span></span>
					</div>
					<div class="screen-list low">
						<em class="low-bg"></em>
						<h3>Low Disk Space</h3>
						<span class="low-bar one"></span>
						<span class="low-bar two"></span>
						<span class="low-bar three"></span>
						<span class="low-bar four"></span>
					</div>
					<div class="screen-list slowly">
						<span class="loading loading-icon"></span>
						<b class="loading loading-txt">Loading...</b>
						<span class="loading loading-bar"><em></em></span>
					</div>
				</div>
				<ul class="feature-list fr">
					<li class="one"><span>Leftovers piled up</span></li>
					<li class="two"><span>Disk space decreased</span></li>
					<li class="three"><span>PC run slowly</span></li>
				</ul>
			</div>
			<h2 class="upgrade" data-name="default">Upgrade now to clean all leftovers files </h2>
			<div class="buybox" data-name="default">
				<a class="buybtn"
				   href="https://www.iobit.com/buy.php?product=iu10preorder&ref=en-iu10preorderiu<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
				   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10preorderiu');">
				  Upgrade Now for $0
				</a>
			</div>
		</div>
	</div>
	<!-- feature-02 end -->
	
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
			<ul>
				<li>
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
		</div>
	</div>
	<!-- review end -->

  <!-- service start -->
	<div class="service">
		<div class="wrapper">
			<h2>World-wide Awards</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					*.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $14.77 automatically. This 50% discount from the original price of $29.99 is bonus only for preorders!
				</dd>
				<dd>*.If you're unsatisfied, you can cancel the order you placed within 30 days without paying a fee.</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
				IObit Uninstaller 10
	  	</div>
  		<div class="number fl">
  			<div id="fReduce" class="reduceNum">
  				<div class="listbox"><span class="list"><b>5</b></span></div>
  				<div class="listbox"><span class="list"><b>0</b></span></div>
  			</div>
  			of 500 places left now
  		</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>