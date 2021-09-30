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
	$c_name = 'isuofficial_p' . $date;
	$c_name_t='isuofficial_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(68,78);
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

$viewNum=rand(115,125);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pay $0 to pre-order the new IObit Software Updater 3 PRO  </title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800&display=swap" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com" target="_blank"></a>
			<div class="right-message">
				<h1>Welcome to participate in our <strong>Presale </strong></h1>
					<div class="number">
						<img src="<?php echo getStaticUrl('images/hurry.png')?>"/> 
						<div id="topNum" class="giftNum">
              <span class="nwrap">
		          	<strong>
		          		<b>1</b>
		          	</strong>
		          </span>
		          <span class="nwrap">
		          	<strong>
		          		<b>1</b>
		          	</strong>
		          </span>

            </div>
            left only, while <strong class="viewNum"><?php echo $viewNum;?></strong> are viewing 
					</div>
					<p class="price">
						<span> <strong>$0</strong><sup>*</sup></span>
						<a href="https://www.iobit.com/buy.php?product=isu3preorder&ref=en-isu3preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3preorder');  " class="buybtn">Pre-order Now</a>
					</p>
				</div>
		</div>
	</div>
	<!-- banner end -->


	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>It’s THE Software Updater that You Are Looking for</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
				<dd>
					<strong>Large Software Database</strong>
					<p>Support updating hundreds of programs including <br>  those commonly used ones.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
				<dd>
					<strong>In-program Updating</strong>
					<p>Easily update outdated programs right inside IObit <br> Software Updater.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
				<dd>
					<strong>Auto Updating</strong>
					<p>Automatically download and install updates for <br> programs at scheduled time.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""></dt>
				<dd>
					<strong>Stay Safe</strong>
					<p>Update programs to repair security vulnerabilities <br> which could be used by hackers.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list05.png')?>" alt=""></dt>
				<dd>
					<strong>Clean Update</strong>
					<p>No bundleware, toolbars or installers would attached.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list06.png')?>" alt=""></dt>
				<dd>
					<strong>Recommend Software</strong>
					<p>Majority of popular software can be quickly <br> downloaded without going to webpage.</p>
				</dd>
			</dl>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>It Gives You the Perfect User Experience</h2>
			<ul class="message-list">
				<li class="list01 active"><i></i> Auto Delete Installers</li>
				<li class="list02"><i></i> Auto Create System Restore Point</li>
				<li class="list03"><i></i> Ignore Update Option</li>
				<li class="list04"><i></i> Customize Auto-update List</li>
				<li class="list05"><i></i> No Sponsored Ads </li>
			</ul>
			<div class="img-list">
				<div class="img-box">
					<ul class="box">
						<li data-num="0"><img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt=""/></li>
						<li data-num="1"><img src="<?php echo getStaticUrl('images/feature-list02.png')?>" alt=""/></li>
						<li data-num="2"><img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt=""/></li>
						<li data-num="3"><img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt=""/></li>
						<li data-num="4"><img src="<?php echo getStaticUrl('images/feature-list05.png')?>" alt=""/></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="review ">
		<div class="wrapper">
		<h2>What Others Say:</h2>
		<div class="review-box">
			<a href="javascript::" class="prev"></a>
			<div class="content">
				<div class="roll">
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt=""/></dt>
							<dd>
								Media review
								<strong>softpedia</strong>
							</dd>
						</dl>
						<p>IObit Software Updater was designed to simplify the task of keeping all the applications on your computer up-to-date. It can check for new versions and install them automatically, even without user input. Moreover, it can help you download and install popular applications for various purposes.</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								User Review
								<strong>Nicolae Mocioc</strong>
							</dd>
						</dl>
						<p>I installed a free IObit from a friend, and I am very pleased with the speed and simplicity that meets the needs of a beginner in maintaining his personal computer. Thank you for that! I have to inform you that I will buy an IObit license, just to donate an amount to help you continue your work. Thank you!</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								User Review
								<strong>Joshua Irving</strong>
							</dd>
						</dl>
						<p>I love the automatic aspect of the updates. It's fast and efficient, and it also creates a restore point prior to install just in case something goes wrong. I also love that the program downloads the updates directly from the appropriate sites rather than my having to go to each individual site to download an update. I think this is one of your best ideas yet!</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								User Review
								<strong>Nico Bremmer</strong>
							</dd>
						</dl>
						<p>It's an great Software update program. It's very easy to use and very simple. This program is very clear, works very smooth and its really fast. Also the design is nice and modern and its good that you seen your old and the new version of the program you wanna update. It's also nice that this program shows you new program tips.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- bottom start -->
	<div class="awards">
		<h2>World-wide Awards</h2>
		<p>As being trusted and awarded by those world-class media, you know you've got the right software updater.</p>
		<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
	</div>
	<div class="bottom">
		<div class="wrapper">
			<p class="annotation">
				Note: <br> *.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $12.97 automatically. This 55% discount from the original price of $29.99 is bonus only for preorders!
				<br> *.If you're unsatisfied, you can cancel the order you placed within 30 days without paying a fee.
			</p>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer nomal">
		<div class="wrapper clearfix">
			<img src="<?php echo getStaticUrl('images/fl-isu-box.png')?>" class="img-box" alt=""/>
			<div class="number">
				<img src="<?php echo getStaticUrl('images/hurry.png')?>"/> 
				<div class="giftNum">
          <span class="nwrap">
          	<strong>
          		<b>1</b>
          	</strong>
          </span>
          <span class="nwrap">
          	<strong>
          		<b>1</b>
          	</strong>
          </span>

        </div>
        left only, while <strong class="viewNum"><?php echo $viewNum;?></strong> are viewing 
			</div>
			<p class="price">
				<span> <strong>$0</strong><sup>*</sup></span>
				<a href="https://www.iobit.com/buy.php?product=isu3preorder&ref=en-isu3preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3preorder');  " class="buybtn">Pre-order Now</a>
			</p>
		</div>
	</div>
	<!-- floatlayer end -->
	<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>