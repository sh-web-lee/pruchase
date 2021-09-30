<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
$refStr=empty($_GET['ref'])?'enaff_db5_2017install':$_GET['ref'];
$buyHref="http://www.iobit.com/buy.php?product=enaffdriverbooster5&ref=".$refStr."&aff=".$_GET['aff'];
$clickid=empty($_GET['clickid'])?'':$_GET['clickid'];
if(preg_match('/^fspi([0-9]*)$/',$refStr,$matches)){
	$match=$matches[1];
	if($match==''){
		$buyHref='http://macbooster.7eer.net/c/301238/434372/4385';
	}else{
		$buyHref='http://macbooster.7eer.net/c/'.$match.'/434372/4385';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Activate Driver Booster PRO now</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic' rel='stylesheet' type='text/css'>
	<link href="<?php echo getStaticUrl('style/base.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo getStaticUrl('style/common.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo getStaticUrl('style/lang.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo getStaticUrl('style/products.css')?>" rel="stylesheet" media="all">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<?php if(!empty($clickid)):?>
		<script type="text/javascript" src="//d33wwcok8lortz.cloudfront.net/js/4385/14521/irv3.js"></script>
		<script type="text/javascript">
			// required advertiser supplied values
			irEvent.setOrderId("<?php echo $clickid;?>");
			irEvent.fire();
		</script>
	<?php endif;?>
	<script src="<?php echo getStaticUrl('script/jquery.superbox-min.js')?>" type="text/javascript"></script>
	<style>
		#products .comparepage .compare .button.yellowbtn.middle span{padding: 12px 0 15px;}
		#products .compare .major-title .leftarea .button.yellowbtn span{padding: 15px 32px;}
	</style>
</head>
<body id="products">
	<div id="header">
		<div class="wrapper">
			<a href="http://www.iobit.com/en/index.php" class="logo" target="_blank">IObit</a>
		</div>
	</div>
	<div id="container" class="comparepage">
		<!-- comparetab -->
		<div class="compare">
			<div class="wrapper">
				<div class="major-title">
					<div class="leftarea">
						<h1>Activate Driver Booster 5 PRO Now!</h1>
						<p>Upgrade to PRO to Enjoy a Faster &amp; More Stable PC with Up-to-date Drivers!</p>
						<ul>
							<li>Save 60%</li>
							<li class="price">Only $15.98</li>
							<li><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb52017install');" class="button yellowbtn"><span>Buy Now</span></a></li>
						</ul>
					</div>
					<dl class="rightarea">
						<dt><img src="<?php echo $pResUrl; ?>images/db_left256.png" alt=""><span class="guarantee orange"></span></dt>
						<dd>Limited Time Special Offer!</dd>
						<dd id="countdown" class="countdown"><strong>0</strong>d: <strong>4</strong>h: <strong>57</strong>m: <strong>49</strong>s <em>488</em><i>*</i></dd>					</dl>
				</div>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" class="comparetab">
					<thead>
						<tr>
							<td colspan="2" class="intro">
								<p>With 200% larger online database, Driver Booster 5 PRO allows you to get more PC drivers up-to-date securely with just one-click. More game components are supported by Driver Booster 5 letting you have smoother gaming experience. You can also enjoy at least 2 times faster download speed and automatic PC driver installation and update during system idle time.</p>
								<p><img src="<?php echo getStaticUrl('images/promo-awards-db.png')?>" alt=""></p>
							</td>
							<td class="items itemb">
								<table>
									<thead>
										<tr class="name">
											<td class="items"><span>Driver Booster PRO</span></td>
										</tr>
										<tr class="product">
											<td class="items">
											<div class="discount"><img src="<?php echo getStaticUrl('images/discount-60.png')?>" alt=""></div>
												<a rel="superbox[gallery][b]" href="<?php echo $pResUrl; ?>images/dbpro-large.jpg"><img src="<?php echo $pResUrl; ?>images/dbpro-small.jpg" alt=""></a>
											</td>
										</tr>
										<tr class="price">
											<td class="items"><span><strong>Only $15.98<strong> <del>$39.95</del></strong></strong></span></td>
										</tr>
										<tr class="limit">
											<td><span>1 Year Subscription / 1 PC</span></td>
										</tr>
										<tr class="handle">
											<td><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb52017install');" target="" class="button yellowbtn middle"><span>Buy Now</span></a></td>
										</tr>
										<tr class="special">
											<td>
												<span>Time-limited Offer!</span>
												<p class="countdown" id="countdown"></p>
											</td>
										</tr>
									</thead>
								</table>
							</td>
						</tr>
					</thead>
					<tbody>
												<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_01.png')?>" alt=""></td>
							<td class="text"><span>Automatically Scan &amp; Identify Outdated, Missing &amp; Faulty Drivers</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
											<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_02.png')?>" alt=""></td>
							<td class="text"><span>Download and Update Outdated Drivers with One Click</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
											<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_15.png')?>" alt=""></td>
							<td class="text"><span>Smaller Driver Package with New Driver Compression Algorithm</span><i class="improved">Improved</i></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
											<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_16.png')?>" alt=""></td>
							<td class="text"><span>Safer Updating with Qualified WHQL Drivers ONLY </span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
											<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_03.png')?>" alt=""></td>
							<td class="text"><span>Unlock Driver Update Speed Limit</span><i class="improved">Improved</i></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
											<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_17.png')?>" alt=""></td>
							<td class="text"><span>200% Larger Database to Update More Outdated &amp; Rare Drivers</span><i class="improved">Improved</i></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
											<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_12.png')?>" alt=""></td>
							<td class="text"><span>Reduce System Freezes &amp; Crashes for Better Performance</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
											<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_18.png')?>" alt=""></td>
							<td class="text"><span>Improved Auto Download to Accelerate Download</span><i class="improved">Improved</i></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
											<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_07.png')?>" alt=""></td>
							<td class="text"><span>Automatically Backup All Drivers for Safe Restore</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
											<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_12.png')?>" alt=""></td>
							<td class="text"><span>Auto Driver Install &amp; Update during System Idle Time</span><i class="new">New</i></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
											<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_14.png')?>" alt=""></td>
							<td class="text"><span>Priority to Update Game Components for Better Gaming</span><i class="improved">Improved</i></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
											<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_09.png')?>" alt=""></td>
							<td class="text"><span>Automatically Update to the Latest Version</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
											<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_10.png')?>" alt=""></td>
							<td class="text"><span>Free 24/7 Technical Support on Demand</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="name">
							<td></td>
							<td></td>
							<td class="items"><span>Driver Booster PRO</span></td>
						</tr>
						<tr class="handle">
							<td></td>
							<td></td>
							<td class="items"><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb52017install');" target="" class="button yellowbtn middle"><span>Buy Now</span></a></td>
						</tr>
						<tr class="limit">
							<td></td>
							<td></td>
							<td class="items"><span>New Release Special Offer!</span></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
		<!-- end comparetab -->
		<!-- review -->
		<div class="review clearfix">
			<div class="wrapper">
				<div class="media_rev">
					<h3>Media Review</h3>
					<dl>
						<dt>
						     <a href="http://www.pcmag.com/review/351094/iobit-driver-booster-pro" target="_blank"><img src="<?php echo getStaticUrl('images/pcmag-editchoice.png')?>" alt=""></a>
                            </dt>
						<dd><h4>"IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best."</h4></dd>
						<dd>"IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best. Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack." <span>-Jeffrey L. Wilson</span></dd>
					</dl>
				</div>
								<div class="user_rev" id="user_rev">
					<div class="content">
						<h3>User Review</h3>
												<dl class="show">							<dd><h4>"My PC is faster, securer and newer more than the last 8 months ago."</h4></dd>
							<dd>"With Driver Booster, I can easily know which devices drivers are out of date and can easily update them. Besides, it helps me to fix sound error, network error, device error etc...I don't believe it before I using, but after using it I really love it..just my PC is faster ,securer and newer more than the last 8 months ago..so thank you IObit."</dd>
						</dl>
												<dl class="hide">							<dd><h4>"I strongly recommend Driver Booster, it will help to update the driver quickly and easily."</h4></dd>
							<dd>"Driver booster is an amazing application. As for someone who has a lot of applications and drives as does not have the time to manually update them, I strongly recommend Driver Booster, it will help to update the driver quickly and easily."</dd>
						</dl>
												<dl class="hide">							<dd><h4>"It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"</h4></dd>
							<dd>"This is one of the best driver updater programs around. Microsoft has even led me astray by suggesting updates that wouldn’t work with my machine. This program knew what updates I needed without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"</dd>
						</dl>
											</div>
					<ul class="users" style="width: 480px;">
											<li class="current"><img src="<?php echo getStaticUrl('images/myo-thuya.jpg')?>" alt="">Myo Thuya<br>2016</li>
											<li><img src="<?php echo getStaticUrl('images/adam-backlund.jpg')?>" alt="">Adam Backlund<br>2016</li>
											<li><img src="<?php echo getStaticUrl('images/wayne-bowler.jpg')?>" alt="">Wayne Bowler<br>2013</li>
										</ul>
				</div>
							</div>
		</div>
		<!-- end review -->
				<div class="statementarea">
			<div class="wrapper">
				<dl class="statement">
					<dt>Note:</dt>
					<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
				</dl>
			</div>
		</div>
				<!-- btmarea -->
		<div class="btmarea clearfix">
			<div class="wrapper">
				<h2>
					<p>Download &amp; Update More Rare PC Drivers <strong>Rapidly and Securely</strong></p>
		            <p>Smooth Gaming Experience with Various Game Components</p>
				</h2>
				<dl class="handelbuy">
					<dt>$15.98</dt>
					<dd>
						<p class="butt-holder">
							<a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb52017install');" target="" class="button yellowbtn"><span>Buy Now</span></a>
						</p>
					</dd>
					<dd>100% MONEY BACK GUARANTEE <br>1 Year Subscription / 1 PC</dd>
				</dl>
			</div>
		</div>
		<!-- end  btmarea-->
		<!-- bottom -->
		<div id="bottom" class="clearfix">
			<div class="wrapper">
				<div class="footer" style="padding-top:40px;">
					<p> © 2005 - <?php echo date(Y)?> IObit. All Rights Reserved &nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/en/privacy.php"><span>Privacy Policy</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/en/legal.php"><span>Legal Notice</span></a></p>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	$(document).ready(function() {
		$.superbox();
		/*user review*/
		var user_rev_width = $("#products #user_rev .users li").outerWidth() * $("#products #user_rev .users li").length ;
		$("#products #user_rev .users").css("width", user_rev_width);

		$("#products #user_rev .users li").mouseover(function(event) {
			var num = $(this).index();
			var selecter = $(this);
			var target = $("#user_rev dl");
			selecter.addClass("current").siblings().removeClass("current")
			target.eq(num).removeClass("hide").addClass("show").siblings().removeClass("show").addClass("hide");
		});
	});

	function countdown(){
		var startTimestamp = 1383553207;
		var intervalTimestamp = 4*24*60*60;
		var dateObj = new Date();
		var time = dateObj.getTime().toString().substring(0,10);
		for(i=1;;i++){
			var remainingTime = (startTimestamp+intervalTimestamp*i)-time;
			if (remainingTime > 0) break;
		}
		var d = Math.floor(remainingTime/(24*60*60));
		var H = Math.floor(remainingTime/(60*60)%24);
		var i = Math.floor(remainingTime/60%60);
		var s = Math.floor(remainingTime%60);
		var mi = 999-dateObj.getMilliseconds();
		if (mi < 10){
			mi = '00'+mi;
		} else if(mi < 100) {
			mi = '0'+mi;
		}
		var countdown = '<strong>'+d+'</strong>d: <strong>'+H+'</strong>h: <strong>'+i+'</strong>m: <strong>'+s+'</strong>s <em>'+mi+'</em>';
		$('#countdown').html(countdown + '<i>*</i>');
		setTimeout('countdown()', 1);
	}
	countdown();
</script>
</body>
</html>