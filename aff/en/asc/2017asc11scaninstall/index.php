<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_asc11_scaninstall';
$buyHref = "https://www.iobit.com/buy.php?product=asc111pc1477_aff&ref=".$_GET['ref']."&aff=".$_GET['aff'];
if($_GET['ref']=='fs1702en'){
	$buyHref="https://iobit.onfastspring.com/advanced-systemcare-10-pro-1-year-subscription-1-pc-1477";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Activate Advanced SystemCare PRO Now!</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic' rel='stylesheet' type='text/css'>
	<link href="<?php echo getStaticUrl('style/base.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo getStaticUrl('style/common.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo getStaticUrl('style/lang.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo getStaticUrl('style/products.css')?>" rel="stylesheet" media="all">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<script src="<?php echo getStaticUrl('script/jquery.superbox-min.js')?>" type="text/javascript"></script>
	<style>
		#products .comparepage .compare .button.yellowbtn.middle span{padding: 12px 0 15px; font-size: 20px;}
		#products .compare .major-title .leftarea .button.yellowbtn span{padding: 15px 32px;}
	</style>
</head>
<body id="products">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<?php echo $linkStr;?>
<div id="header">
	<div class="wrapper">
		<a href="http://www.iobit.com/en/index.php" class="logo" target="_blank">IObit</a>
	</div>
</div>
<div id="container" class="comparepage">
	<!-- compare tab -->
	<div class="compare">
		<div class="wrapper">
			<!--  -->
			<div class="major-title">
				<div class="leftarea">
					<h1>Activate Advanced SystemCare 11 PRO now!</h1>
					<p>Upgrade to PRO to speed up your slow PC and boost your internet speed by up to 300%</p>
					<ul>
						<li>Save 50%</li>
						<li class="price">Only $14.77</li>
						<li><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc11scaninstall')" class="button yellowbtn"><span>BUY NOW</span></a></li>
					</ul>
				</div>
				<dl class="rightarea">
					<dt><img src="<?php echo getStaticUrl('images/asc-leftside.png')?>" alt=""/><span class="guarantee orange"></span></dt>
					<dd>Limited Time Special Offer!</dd>
					<dd id="countdown" class="countdown"><strong>2</strong>d: <strong>5</strong>h: <strong>53</strong>m: <strong>2</strong>s <em>813</em><i>*</i></dd>
				</dl>
			</div>
			<!--  -->
			<table border="0" cellspacing="0" cellpadding="0" width="100%" class="comparetab">
				<thead>
				<tr>
					<td colspan="2" class="intro">
						<p><strong>Some highlights after activating your ASC PRO</strong> :</p>
						<p>As an all-in-one PC optimization utility, Advanced SystemCare 11 PRO unlocks the full potential of your old computer. You are able to enjoy up to 300% faster internet connection and 200% quicker PC startup. Registry files piled up in your PC for years can be removed for better PC performance and more stable system. New disk optimization engine maximizes disk space and speeds up your PC. Advanced SystemCare 11 PRO provides deep and comprehensive protection as well to keep you PC away from various threats and guarantee your online privacy in real time.</p>
						<p><img src="<?php echo getStaticUrl('images/promo_awards.png')?>" alt=""/></p>
					</td>
					<td class="items itemb">
						<table>
							<thead>
							<tr class="name">
								<td class="items"><span>Advanced SystemCare<br>PRO</span></td>
							</tr>
							<tr class="product">
								<td class="items">
									<div class="discount"><img src="<?php echo getStaticUrl('images/discount-50.png')?>" alt=""></div>
									<a rel="superbox[gallery][b]" href="<?php echo getStaticUrl('images/ascpro-large.jpg')?>"><img src="<?php echo getStaticUrl('images/ascpro-small.jpg')?>" alt="" /></a>
								</td>
							</tr>
							<tr class="price">
								<td class="items"><span><strong>Only $14.77</strong><del>$29.99</del></span></td>
							</tr>
							<tr class="limit">
								<td><span>1 Year Subscription / 1 PC</span></td>
							</tr>
							<tr class="handle">
								<td><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc11scaninstall')" target="" class="button yellowbtn middle"><span>BUY NOW</span></a></td>
							</tr>
							<tr class="special">
								<td>
									<span>New Release Special Offer!</span>
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
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_02.png')?>" alt=""></td>
					<td class="text"><span>Ultimate System Tuneup for Top Performance</span><i class="improved">Improved</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_03.png')?>" alt="" data-pin-nopin="true"></td>
					<td class="text"><span>Up to 300% Internet Speedup with Internet Booster</span><i class="improved">Improved</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_16.png')?>" alt=""></td>
					<td class="text"><span>Capture intruders automatically with FaceID</span><i class="improved">Improved</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_15.png')?>" alt=""></td>
					<td class="text"><span>Auto RAM Clean with Real-time Optimization </span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_05.png')?>" alt=""></td>
					<td class="text"><span>Clean Piled-up Registries for Stable System</span><i class="improved">Improved</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_06.png')?>" alt=""></td>
					<td class="text"><span>New Disk Optimization Engine to Maximize PC Performance</span><i class="new">New</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_07.png')?>" alt=""></td>
					<td class="text"><span>Fix System Weakness to Prevent Hacking with 1-click</span><i class="new">New</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_08.png')?>" alt=""></td>
					<td class="text"><span>Remove Infections and Protect against Various Threats</span><i class="improved">Improved</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_09.png')?>" alt=""></td>
					<td class="text"><span>Auto Online Privacy Trace Clean with Browser Anti-Tracking</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_18.png')?>" alt=""></td>
					<td class="text"><span>Redesigned Performance Monitor Monitors and Boosts Your PC</span><i class="improved">Improved</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_17.png')?>" alt=""></td>
					<td class="text"><span>Up to 200% Quicker PC Startup</span><i class="improved">Improved</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_11.png')?>" alt=""></td>
					<td class="text"><span>Auto Update to the Latest Version</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_12.png')?>" alt=""></td>
					<td class="text"><span>Runs in the Background - Install and Forget It</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_13.png')?>" alt=""></td>
					<td class="text"><span>Fantastic New Skins &amp; Themes</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_14.png')?>" alt=""></td>
					<td class="text"><span>Free 24/7 Technical Support on Demand</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				</tbody>
				<tfoot>
				<tr class="name">
					<td></td>
					<td></td>
					<td class="items"><span>Advanced SystemCare<br>PRO</span></td>
				</tr>
				<tr class="handle">
					<td></td>
					<td></td>
					<td class="items"><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc11scaninstall')" target="" class="button yellowbtn middle"><span>BUY NOW</span></a></td>
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
	<!-- end compare tab -->
	<!-- review -->
	<div class="review clearfix">
		<div class="wrapper">
			<div class="media_rev">
				<h3>Media Review</h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""></dt>
					<dd><h4>"Advanced Systemcare aims to remedy whatever ails your computer."</h4></dd>
					<dd>"There's nothing worse than a computer that is bogged down so much that it impedes your ability to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."<span>-Cnet</span></dd>
				</dl>
			</div>
			<div class="user_rev" id="user_rev">
				<div class="content">
					<h3 class="hide">User Review</h3>
					<dl class="hide">
						<dd><h4>"Not only is it a great product, but the support is equally great"</h4></dd>
						<dd>"I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."</dd>
					</dl>
					<dl class="hide">
						<dd><h4>"Advanced SystemCare Pro is the best program I’ve ever tried over the years."</h4></dd>
						<dd>"Like most people I am not a computer expert. I don't know how many programs I have tried over the years, all claiming to be the best but never coming close to the Advanced SystemCare Pro protection that I have now. Since I got this awesome program I haven't had to call a tech even once. It has more than surpassed my expectations, always up to date, and the graphics are very cool too! Many thanks to all of you for making my life much easier."</dd>
					</dl>
					<dl class="hide">
						<dd><h4>"My choice is still overwhelmingly Advanced SystemCare Pro"</h4></dd>
						<dd>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</dd>
					</dl>
					<dl class="show">
						<dd><h4>"I highly recommend that you purchase this program. It is not expensive and what it will do for your computer will be totally amazing."</h4></dd>
						<dd>"This program is the very best one that I have ever tried out. My computer is running so much better and faster now that I have downloaded ASC10. It has cleaned up unnecessary and duplicate files, empty folders and I have used it to shred files. It cleaned and defragged the registry and all the files on this PC. I highly recommend that you purchase this program. It is not expensive and what it will do for your computer will be totally amazing. You will love it, I promise."</dd>
					</dl>
				</div>
				<ul class="users" style="width: 640px;">
					<li class=""><img src="<?php echo getStaticUrl('images/bruce-ramsay.jpg')?>" alt="">Bruce Ramsay<br>2015</li>
					<li><img src="<?php echo getStaticUrl('images/hank-ewert.jpg')?>" alt="">Hank Ewert<br>2016</li>
					<li class=""><img src="<?php echo getStaticUrl('images/charles-r-widick.jpg')?>" alt="">Charles R. Widick<br>2015</li>
					<li class="current"><img src="<?php echo getStaticUrl('images/loretta-harnarine.jpg')?>" alt="">Loretta Harnarine<br>2016</li>
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
				<p>Over <strong>250,000,000</strong> Users' Choice</p>
				<p>200% Quicker PC Startup and 300% Faster Online Surfing</p>
			</h2>
			<dl class="handelbuy">
				<dt>$14.77</dt>
				<dd>
					<p class="butt-holder">
						<a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc11scaninstall')" target="" class="button yellowbtn"><span>BUY NOW</span></a>
					</p>
				</dd>
				<dd>100% MONEY BACK GUARANTEE <br>1 Year Subscription / 1 PC</dd>
			</dl>
		</div>
	</div>
	<!-- end btmarea -->
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