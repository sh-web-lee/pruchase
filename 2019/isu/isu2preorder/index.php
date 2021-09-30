<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(147,178);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'enisumar_p' . $date;
	$c_name_t='enisumar_t' . $date;
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
	$refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pay $0 to pre-order the new IObit Software Updater PRO</title>
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
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<h1>The Global Presale Is Live</h1>
			<p class="rush">Rush! 500 limited quantities available, <span class="buyNum">453</span> sold now</p>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Update PRO"/>
				</div>
				<div class="right fr">
					<h2>IObit Software Updater 2 PRO</h2>
					<p>Update your programs <i>●</i> Cover security holes</p>
					<ul class="price clearfix">
						<li class="first">
							<strong>$<big>0</big></strong> <del>$29.99</del>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change">Only<b class="giftNum">50</b>seats left now</p>
						</li>
						<li>
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=isu2preorder&ref=isu2preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_isu"
							   onclick="ga('send', 'event', 'isubuy', 'buy', 'isu2predorder');">
							  Pre-order Now   	
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

  <!-- steps start -->
	<ul class="steps wrapper clearfix">
		<li>If satisfied, get 55% OFF original price 30 days after pre-order</li>
		<li class="center">Pay $0 to pre-order today</li>
		<li>If unsatisfied, cancel within 30 days without paying a fee</li>
	</ul>
	<!-- steps end -->

	<!-- intro start -->
	<div class="intro">
		<div class="wrapper">
			<h2>Why IObit Software Updater 2 PRO?</h2>
			<div class="one clearfix">
				<div class="left fl">
					<h3>Always keep software up to date</h3>
					<dl>
						<dt><h4>Protection</h4></dt>
						<dd>
							<p>Updating outdated software covers the security holes in time to keep hackers out.</p>
						</dd>
					</dl>
					<dl>
						<dt><h4>Improvement</h4></dt>
						<dd>
							<p>Updating outdated software delivers new features and improves performance and stability.</p>
						</dd>
					</dl>
				</div>
				<div class="right fr">
					<img src="<?php echo getStaticUrl('images/isu-screen.png')?>" alt="IObit Software Update PRO"/>
				</div>
			</div>
			<div class="two clearfix">
				<div class="left fl">
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""/></dt>
						<dd>
							<h4>Automatic</h4>
							<p>Set up auto-updates on schedule and then automatically and silently download and install when updates are available.</p>
						</dd>
					</dl>
				</div>
				<div class="right fr">
					<h3>Get the software updates easily</h3>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""/></dt>
						<dd>
							<h4>Simple</h4>
							<p>Software updates get downloaded without opening a web browser. </p>
						</dd>
					</dl>
					<dl class="clearfix safe">
						<dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""/></dt>
						<dd>
							<h4>Safe</h4>
							<p>Automatically create restore point before installing in case something goes wrong.</p>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>What the benefits of IObit Software Updater 2 PRO?</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
					<span class="suspend01"></span>
					<span class="suspend02"></span>
					<span class="suspend03"></span>

				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li><i class="all-icons">◎</i> Update software with 1 click</li>
						<li><i class="all-icons">◎</i> Silently download and install updates</li>
						<li><i class="all-icons">◎</i> Set up automatic scans and updates on a schedule</li>
						<li><i class="all-icons">◎</i> Exclude certain program you don’t want to update</li>
						<li><i class="all-icons">◎</i> Option to auto create restore point before installing</li>
						<li><i class="all-icons">◎</i> Option to auto delete setup files after installation</li>
						<li><i class="all-icons">◎</i> Support direct download of other popular software</li>
						<li><i class="all-icons">◎</i> Disable sponsored ads displayed in the free version</li>
					</ul>
					<ul class="price clearfix">
						<li class="first">
							<strong>$<big>0</big></strong> <del>$29.99</del>
							<p>Only<b class="giftNum">50</b>seats left now</p>
						</li>
						<li>
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=isu2preorder&ref=isu2preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_isu"
							   onclick="ga('send', 'event', 'isubuy', 'buy', 'isu2predorder');">
							  Pre-order Now   	
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- feature end -->

	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>What Others Say?</h2>
			<div class="clearfix">
				<ul class="left fl">
					<li class="on">
						<img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="softpedia"/>
						<h4>softpedia</h4>
					</li>
					<li>
						<img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nicolae Mocioc"/>
						<h4>Nicolae Mocioc</h4>
					</li>
					<li>
						<img src="<?php echo getStaticUrl('images/user.png')?>" alt="Joshua Irving"/>
						<h4>Joshua Irving</h4>
					</li>
					<li>
						<img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nico Bremmer"/>
						<h4>Nico Bremmer</h4>
					</li>
					<span class="prev"><</span>
					<span class="next">></span>
				</ul>
				<div class="content fr">
					<ul>
						<li class="on">
							<h3>Media review</h3>
							<p>
								IObit Software Updater was designed to simplify the task of keeping all the applications on your computer up-to-date. It can check for new versions and install them automatically, even without user input. Moreover, it can help you download and install popular applications for various purposes. 
							</p>
						</li>
						<li>
							<h3>User review</h3>
							<p>
								I installed a free IObit from a friend, and I am very pleased with the speed and simplicity that meets the needs of a beginner in maintaining his personal computer. Thank you for that!
								I have to inform you that I will buy an IObit license, just to donate an amount to help you continue your work.
								Thank you!
							</p>
						</li>
						<li>
							<h3>User review</h3>
							<p>
								I love the automatic aspect of the updates. It's fast and efficient, and it also creates a restore point prior to install just in case something goes wrong. I also love that the program downloads the updates directly from the appropriate sites rather than my having to go to each individual site to download an update. I think this is one of your best ideas yet! 
							</p>
						</li>
						<li>
							<h3>User review</h3>
							<p>
								It's an great Software update program. It's very easy to use and very simple. This program is very clear, works very smooth and its really fast. Also the design is nice and modern and its good that you seen your old and the new version of the program you wanna update. It's also nice that this program shows you new program tips. 
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- review end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<div class="service clearfix">
				<dl>
					<dt>Trusted by these medias </dt>
					<dd><img src="<?php echo getStaticUrl('images/medias.png')?>" alt=""/></dd>
				</dl>
				<dl class="right">
					<dt>Support several modes of payment</dt>
					<dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
				</dl>
			</div>
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					*.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $12.97 automatically. This 55% discount from the original price of $29.99 is bonus only for preorders!
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		<img src="<?php echo getStaticUrl('images/isu-small-box.png')?>" alt="IObit Software Update PRO"/>
	  	</div>
	  	<div class="price fr clearfix">
	  		<div class="one fl">
	  			<div id="fReduce" class="reduceNum">
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>5</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  			</div>
	  			<p class="change"><span class="viewNum"><?php echo $viewNum;?></span> visitors now, only<b class="giftNum">50</b>seats left!</p>
	  		</div>
	  		<div class="two fl"><strong>$<big>0</big></strong> <del>$29.99</del></div>
	  		<div class="three fl">
	  			<a class="buybtn"
	  			   href="https://www.iobit.com/buy.php?product=isu2preorder&ref=isu2preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_isu"
	  			   onclick="ga('send', 'event', 'isubuy', 'buy', 'isu2predorder');">
	  			  Pre-order Now   	
	  			</a>
	  		</div>
	  	</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>