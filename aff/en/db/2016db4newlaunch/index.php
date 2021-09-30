<?php
//  初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
$ref=empty($_GET['ref'])?"enaff_db_2016db4newlaunch":$_GET['ref'];
include $pRootUrl . 'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Save up to $20 on DB PRO and enjoy more stable PC performance with up-to-date drivers!</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<!-- header -->
<div class="header">
	<div class="wrapper">
		<a href="http://www.iobit.com" class="logo" target="_blank">IObit</a>
		<div class="titile">
			<h1>Up to $20 OFF Driver Booster 4 New Launch Special Sale</h1>
		</div>
		<div class="panel clearfix">
			<div class="showcase">
				<div class="major">
					<img src="<?php echo $pResUrl; ?>images/boxshot-db.png" alt="">
					<p>$24.96</p>
				</div>
				<span class="tags add">+</span>
				<dl class="options top single">
					<dt><div class="imgholder">Extra 2 Months</div></dt>
					<dd class="first"><strong>$2.99</strong>2 Months</dd>
					<dd><a href="javascript:;" class="check-btn" data-type="1pc"><i></i>Click to SAVE <strong>$5</strong></a></dd>
					<dd class="last">when you spend $25+</dd>
				</dl>
				<span class="tags or">OR</span>
				<dl class="options top packs active">
					<dt><div class="imgholder">Extra 2 Months + 2 PCs Supported</div></dt>
					<dd class="first"><strong>$19.99</strong>2 Months + 2 PCs</dd>
					<dd><a href="javascript:;" class="check-btn" data-type="3pcs"><i></i>Click to SAVE <strong>$20</strong></a></dd>
					<dd class="last">when you spend $30+</dd>
				</dl>
			</div>
			<div class="cart">
				<ul class="goods clearfix">
					<li><strong>Driver Booster PRO</strong> <em>1 Year / 1 PC</em> <span>$24.96</span></li>
					<li><strong class="extraText stand-out">Extra 2 Months + 2 PCs Supported <ins>Extra 2 Months + 2 PCs Supported</ins></strong> <span class="extraPrice">$19.99</span></li>
				</ul>
				<ul class="subtotal clearfix">
					<li><strong>Subtotal <em>(DB PRO <font class="Month">14 Months / 3 PCs</font>)</em></strong> <span class="subTotal">$44.95</span></li>
					<li><strong>Discount <em>(when you spend <font class="discountText">$30+</font>)</em></strong> <span class="discpunt stand-out">-$20 <ins>-$20</ins></span></li>
				</ul>
				<dl class="order clearfix">
					<dt>Order Total <strong class="Total">$24.95</strong></dt>
					<dd><a href="http://www.iobit.com/buy.php?product=affdb414m3pc&ref=<?php echo $ref;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016db4newlaunch');" onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-201604');" class="active-btn link-btn">Activate Now</a></dd>
				</dl>
				<div class="mask"></div>
			</div>
		</div>
		<ul class="countdown" id="countdown">
			<li>15<span>hr</span> : </li>
			<li>15<span>m</span> : </li>
			<li>15<span>s</span> : </li>
			<li class="last">123 <sup>*</sup></li>
		</ul>
	</div>
</div>
<!-- end header -->
<!-- payments -->
<div class="payments  clearfix">
	<div class="wrapper">
		<dl>
			<dt>Accepted Payments</dt>
			<dd><img src="<?php echo $pResUrl; ?>images/payments.png" alt=""></dd>
		</dl>
		<dl>
			<dt>Money Back Guarantee</dt>
			<dd><img src="<?php echo $pResUrl; ?>images/moneyback-guarantee.png" alt=""></dd>
		</dl>
		<dl class="last">
			<dt>Secure Payment  </dt>
			<dd><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dd>
		</dl>
	</div>
</div>
<!-- end payments -->
<!-- awards -->
<div class="awards">
	<div class="wrapper">
		<h2>Trusted and awarded by these medias</h2>
		<img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
	</div>
</div>
<!-- awards -->
<!-- benfits -->
<div class="benfits">
	<div class="wrapper">
		<h2> Get More Drivers & Enjoy More Stable PC Performance with Driver Booster 4 PRO</h2>
		<div class="screenshot">
			<img src="<?php echo $pResUrl; ?>images/screenshot.jpg" alt="">
		</div>
		<div class="features clearfix">
			<div class="feature-list">
				<div class="left-img">
					<img src="<?php echo $pResUrl; ?>images/benfits-01.png" alt="">
				</div>
				<dl>
					<dt>Support 400,000+ Drivers & Devices Update</dt>
					<dd>200% larger database to update outdated, missing & incorrect drivers to proper drivers (audio, network, graphic, etc.) from Nvidia®, Realtek, Intel, AMD, etc. </dd>
					<dd class="more">
						<p>Why update drivers <i></i></p>
						<ul>
							<li>Stop system freezing & crashes</li>
							<li>Fix no sound error & dropping or slow internet </li>
							<li>Reduce problems with printers & external devices</li>
							<li>Improve stability by more outdated & rare drivers update </li>
						</ul>
					</dd>
				</dl>
			</div>
			<div class="feature-list">
				<div class="left-img">
					<img src="<?php echo $pResUrl; ?>images/benfits-02.png" alt="">
				</div>
				<dl>
					<dt>Faster & Smoother Gaming</dt>
					<dd>Detect & upgrade game components with 1-click, such as DirectX®, Adobe® Flash®, PhysX®, etc. to allow you to enjoy faster & smoother gaming. </dd>
					<dd class="more">
						<p>Why update components <i></i></p>
						<ul>
							<li> Improve graphics & audio quality of gaming</li>
							<li> Fix components bugs to smooth game control </li>
						</ul>
					</dd>
				</dl>
			</div>
			<div class="clear"></div>
			<div class="feature-list">
				<div class="left-img">
					<img src="<?php echo $pResUrl; ?>images/benfits-03.png" alt="">
				</div>
				<dl>
					<dt>Time-saving Download for Faster Update</dt>
					<dd>With auto-download feature and new driver compression algorithm, the driver upgrade time is greatly reduced and the drivers will be installed during system idle time.  </dd>
					<dd class="more">
						<p>Why need time-saving download <i></i></p>
						<ul>
							<li>Reduce driver update time by 50% or more</li>
							<li>Reduce computer stutter/lag during driver update </li>
						</ul>
					</dd>
				</dl>
			</div>
			<div class="feature-list">
				<div class="left-img">
					<img src="<?php echo $pResUrl; ?>images/benfits-04.png" alt="">
				</div>
				<dl>
					<dt>Safer Driver Update</dt>
					<dd>Ensure the security of supplied drivers and safely updating drivers by auto backup of previous copy and creating a system restore point before updating. </dd>
					<dd class="more">
						<p>Why it is safe <i></i></p>
						<ul>
							<li>All supplied drivers have passed WHQL</li>
							<li>Easily restore once the unexpected happens </li>
						</ul>
					</dd>
				</dl>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!-- end benfits -->
<!-- middle slection -->
<div class="mid-selet">
	<div class="wrapper">
		<div class="panel">
			<div class="showcase clearfix">
				<img src="<?php echo $pResUrl; ?>images/bottom-dbbox.png" alt="" class="major">
				<span class="tags add">+</span>
				<dl class="options mid single"  data-type="1pc">
					<dt><div class="imgholder">Extra 2 Months</div><span></span></dt>
					<dd>Extra 2 Months</dd>
				</dl>
				<span class="tags or">OR</span>
				<dl class="options mid packs active" data-type="3pcs">
					<dt><div class="imgholder">Extra 2 Months + 2 PCs Supported</div><span></span></dt>
					<dd>Extra 2 Months + Extra 2 PCs Supported</dd>
				</dl>
			</div>
			<div class="cart">
				<dl>
					<dt><strong class="per">$0.59</strong>/month per PC</dt>
					<dd><a href="http://www.iobit.com/buy.php?product=affdb414m3pc&ref=<?php echo $ref;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016db4newlaunch');" class="active-btn link-btn"> Activate Now</a></dd>
					<dd>100% 60-day Money-back Guarantee</dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<!-- end middle slection -->
<!-- reviews -->
<div class="reviews wrapper clearfix">
	<div class="review media">
		<h2>DB Media Review</h2>
		<div class="container">
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/clnet.jpg"></dt>
				<dd>
					<img src="<?php echo $pResUrl; ?>images/fourandhalf-stars.jpg" alt="">
					<p>“Update system drivers with the greatest of ease.”</p>
				</dd>
			</dl>
			<dl class="gray">
				<dt><img src="<?php echo $pResUrl; ?>images/softpedia.png"></dt>
				<dd>
					<img src="<?php echo $pResUrl; ?>images/five-stars.jpg" alt="">
					<p>“Works fine and eliminates the problems created by incompatible drivers.”</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/softonic.png"></dt>
				<dd>
					<img src="<?php echo $pResUrl; ?>images/fourandhalf-stars.jpg" alt="">
					<p>“Simple and effective solution for quickly updating outdated drivers.”</p>
				</dd>
			</dl>
		</div>

	</div>
	<div class="review users">
		<h2>User Review</h2>
		<dl>
			<dt>Mike Goggans</dt>
			<dd>
				<p>I had 10 drivers that were out of date and the Driver Booster updated them all perfectly.</p>
				<img src="<?php echo $pResUrl; ?>images/mike-goggans.jpg" alt="">
			</dd>
		</dl>
		<dl class="white">
			<dt>Vince Lewis</dt>
			<dd>
				<p>Driver Booster did it all with just one click of the mouse. 19 drivers were updated in no time at all.</p>
				<img src="<?php echo $pResUrl; ?>images/vince-lewis.jpg" alt="">
			</dd>
		</dl>
		<dl>
			<dt>Wayne Bowler</dt>
			<dd>
				<p>It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!</p>
				<img src="<?php echo $pResUrl; ?>images/wayne-bowler.jpg" alt="">
			</dd>
		</dl>
	</div>
</div>
<!-- end reviews -->
<div class="footer wrapper">
	<dl class="annotation">
		<dt>Note:</dt>
		<dd>*.Data may vary based on different system or computer.</dd>
		<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
	</dl>
	<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
</div>
<div class="pop-up">
    <div class="pop-main">
        <div class="pop-box">
            <h2>Note:</h2>
            <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
            <p>You will be redirected to the latest IObit promotion page automatically.</p>
        </div>
    </div>
</div></div>
</body>
<script src="<?php echo $pResUrl; ?>script/script.js"></script>
<script>setTimeout('window.location.href="https://purchase.iobit.com/aff/en/db/2017general/index.php'+location.search+'"',5000);</script>
</html>