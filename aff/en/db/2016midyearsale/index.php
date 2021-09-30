<?php
//  初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
//if(!empty($_GET['ref'])&&in_array($_GET['ref'],array('db3st13','dbst3atweb','dbst4atweb','db3st20','db3giveaway'))){
//    $refstr='-'.$_GET['ref'];
//}else{
//    $refstr='';
//}
//$ref3='db3pc2016apr';
//if($_GET['ref']=='db3irsource'){
//    $ref3='db3irsource';
//}else if($_GET['ref']=='ddniDB'){
//    $ref3='ddniDB';
//}else{
//    $ref3.=$refstr;
//}
$refstr=empty($_GET['ref'])?'enaff_db_2016midyearsale':$_GET['ref'];
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
				<h1>Spring into Savings</h1>
				<h2>Buy More, Save More</h2>
			</div>
			<div class="panel clearfix">
				<div class="showcase">
					<div class="major">
						<img src="<?php echo $pResUrl; ?>images/boxshot-db.png" alt="">
					</div>
					<span class="tags add">+</span>
					<dl class="options top single">
						<dt><div class="imgholder">Extra 2 Months</div></dt>
						<dd><strong>$2.99</strong>2 Months</dd>
						<dd><a href="javascript:;" class="check-btn" data-type="1pc">Click to SAVE <strong>$5</strong></a></dd>
						<dd class="last">when you spend $25+</dd>
					</dl>
					<span class="tags or">OR</span>
					<dl class="options top packs active">
						<dt><div class="imgholder">Extra 2 Months + 2 PCs Supported</div></dt>
						<dd><strong>$19.99</strong>2 Months + 2 PCs</dd>
						<dd><a href="javascript:;" class="check-btn" data-type="3pcs">Click to SAVE <strong>$20</strong></a></dd>
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
						<dd><a  href="http://www.iobit.com/buy.php?product=db14m3pc&ref=<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016midyearsale');" class="active-btn link-btn">Activate Now</a></dd>
					</dl>
					<div class="mask"></div>
				</div>
			</div>
			<div class="countdown">
				<ul id="countdown">
					<li>15<span>hr</span> : </li>
					<li>15<span>m</span> : </li>
					<li>15<span>s</span> : </li>
					<li class="last">123</li>
				</ul>
				<sup>*</sup>
			</div>			
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
			<h2>Upgrade to PRO to Get More Drivers & Enjoy More Stable PC Performance</h2>
			<div class="screenshot">
				<img src="<?php echo $pResUrl; ?>images/screenshot.jpg" alt="">
			</div>
			<div class="features clearfix">
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/benfits-01.png" alt=""></dt>
					<dd>
						<strong>200% Larger Database</strong>
						Priority to update more outdated and rare drivers
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/benfits-02.png" alt=""></dt>
					<dd>
						<strong>200% Faster Download *</strong>
						Up to 200% faster driver download at system idle time
					</dd>
				</dl>
				<dl class="last">
					<dt><img src="<?php echo $pResUrl; ?>images/benfits-03.png" alt=""></dt>
					<dd>
						<strong>Auto & Safe</strong>
						Auto download and backup drivers for safe restore
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/benfits-04.png" alt=""></dt>
					<dd>
						<strong>VC Runtime, Adobe Flash, PhysX, OpenAL,DirectX, etc. </strong>
						Fix system issues caused by outdated drivers for better PC performance
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/benfits-05.png" alt=""></dt>
					<dd>
						<strong>Nvidia, Realtek, Intel, AMD, Broadcom, VIA,etc. </strong>
						Enjoy more smooth gaming & video playback
					</dd>
				</dl>
				<a href="javascript:;" onclick="goTaget($('.compare'))" class="more-link">Learn more about PRO edition  >></a>
			</div>
		</div>
	</div>
	<!-- end benfits -->
	<!-- middle slection -->
	<div class="mid-selet">
		<div class="wrapper">
			<div class="panel">
				<div class="showcase clearfix">
					<dl class="major">
						<dt><img src="<?php echo $pResUrl; ?>images/boxshot-db-small.png" alt=""></dt>
						<dd>1 Year / 1 PC</dd>
					</dl>
					<span class="tags add">+</span>
					<dl class="options mid single"  data-type="1pc">
						<dt><div class="imgholder">Extra 2 Months</div><span></span></dt>
						<dd>Extra 2 Months</dd>
					</dl>
					<span class="tags or">OR</span>
					<dl class="options mid packs active" data-type="3pcs">
						<dt><div class="imgholder">Extra 2 Months + 2 PCs Supported</div><span></span></dt>
						<dd>Extra 2 Months <span>+</span> Extra 2 PCs Supported</dd>
					</dl>
				</div>
				<div class="cart">
					<dl>
						<dt><strong class="per">$0.59</strong>/month per PC</dt>
						<dd><a  href="http://www.iobit.com/buy.php?product=db14m3pc&ref=<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016midyearsale');" class="active-btn link-btn">Activate Now</a></dd>
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
	<!-- compare -->
	<div class="compare wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<thead>
			<tr>
				<th colspan="2" class="text">See what PRO edition can do for you:</th>
				<th class="itemb"><strong>Driver Booster FREE</strong></th>
				<th class="itema">
					<strong>Driver Booster PRO</strong>
					<em class="Month">14 Months / 3 PCs</em>
					<a class="activebtn link-btn" href="http://www.iobit.com/buy.php?product=db14m3pc&ref=<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016midyearsale');">Activate Now</a>
					<p><b class="Total">$24.95</b> <del class="subTotal">$44.95</del></p>
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
				<td class="text">Automatically Identify Outdated Drivers</td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
				<td class="text">Download and Update Outdated Drivers with One Click</td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
				<td class="text">Unlock Driver Update Speed Limit</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
				<td class="text">Specialized Driver Tweaking for Better Gaming Experience</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
				<td class="text">Support More Comprehensive Hardware Devices</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
				<td class="text">Enjoy Priority to Update Outdated Drivers Promptly</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
				<td class="text">Backup Drivers for Safe Restore</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
				<td class="text">Enhance Hardware Functionality for Better Performance</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
				<td class="text">Automatically Update to the Latest Version</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
				<td class="text">Free 24/7 Technical Support on Demand</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<th colspan="2"></th>
				<th class="itemb"> 
					<strong>Driver Booster Free</strong>
					Your current edition 
				</th>
				<th class="itema">
					<a class="activebtn link-btn"  href="http://www.iobit.com/buy.php?product=db14m3pc&ref=<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb2016midyearsale');">Activate Now</a>
				</th>
			</tr>
			</tfoot>
		</table>
	</div>
	<!-- end compare -->
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