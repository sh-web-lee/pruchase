<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
if (empty($_GET['ref'])) $_GET['ref'] = 'asc9compare';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Advanced SystemCare FREE and Advanced SystemCare PRO Comparison- IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic' rel='stylesheet' type='text/css'>
	<link href="http://www.iobit.com/tpl/styles/base.css" rel="stylesheet" media="all">
	<link href="http://www.iobit.com/tpl/styles/common.css" rel="stylesheet" media="all">
	<link href="http://www.iobit.com/tpl/styles/products.css" rel="stylesheet" media="all">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<script src="http://www.iobit.com/tpl/js/jquery.superbox-min.js" type="text/javascript"></script>
</head>
<body id="products">
	<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
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
						<h1>Activate Advanced SystemCare 9 PRO Now!</h1>
						<p>Upgrade to PRO to Get Cleaner, Faster and More Secure PC!</p>
						<ul>
							<li>Save 50%</li>
							<li class="price">Only $14.77</li>
							<li><a href="http://www.iobit.com/buy.php?product=asc91pc1477&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016compare')" class="button yellowbtn"><span>UPGRADE TO PRO</span></a></li>
						</ul>
					</div>
					<dl class="rightarea">
						<dt><img src="http://www.iobit.com/tpl/images/products/boxshots/asc-leftside.png" alt=""><span class="guarantee orange"></span></dt>
						<dd>Limited Time Special Offer!</dd>
						<dd id="countdown" class="countdown"><strong>2</strong>d: <strong>5</strong>h: <strong>53</strong>m: <strong>2</strong>s <em>813</em><i>*</i></dd>					
					</dl>
				</div>
			<!--  -->
				<table border="0" cellspacing="0" cellpadding="0" width="100%" class="comparetab">
					<thead>
						<tr>
							<td colspan="2" class="intro">
								<p><strong>Some highlights after upgrading your ASC Free to PRO</strong> : <br>
								</p><dd> * Enjoy up to 300% faster Internet speed than Free edition </dd>
								<dd> * Get up to 200% faster PC by managing resources automatically intelligent </dd>
								<dd> * Get deep cleaning and full protection for better PC performance &amp; protection </dd>
								<dd> * Spyware detection lagged change to Real-Time Monitoring </dd><p></p>
								<p><img src="http://www.iobit.com/tpl/images/awards/promo-awards/promo_awards.png" alt=""></p>
							</td>
							<td class="items itema">
								<table>
									<thead>
										<tr class="name">
											<td class="items"><span>Advanced SystemCare<br>Free</span></td>
										</tr>
										<tr class="product">
											<td class="items"><a rel="superbox[gallery][a]" href="http://www.iobit.com/tpl/images/products/screenshots/en/asc/ascfree-large.jpg"><img src="http://www.iobit.com/tpl/images/products/screenshots/en/asc/ascfree-small.jpg" alt=""></a></td>
										</tr>
										<tr>
											<td class="items">Your current edition</td>
										</tr>
										<tr>
											<td></td>
										</tr>
										<tr>
											<td></td>
										</tr>
									</thead>
								</table>
							</td>
							<td class="items itemb">
								<table>
									<thead>
										<tr class="name">
											<td class="items"><span>Advanced SystemCare<br>PRO</span></td>
										</tr>
										<tr class="product">
											<td class="items">
											<div class="discount"><img src="http://www.iobit.com/tpl/images/products/discount/discount-50.png" alt=""></div>
												<a rel="superbox[gallery][b]" href="http://www.iobit.com/tpl/images/products/screenshots/en/asc/ascpro-large.jpg"><img src="http://www.iobit.com/tpl/images/products/screenshots/en/asc/ascpro-small.jpg" alt=""></a>
											</td>
										</tr>
										<tr class="price">
											<td class="items"><span><strong>Only $14.77</strong></span></td>
										</tr>
										<tr class="limit">
											<td><span>1 Year Subscription / 1 PC</span></td>
										</tr>
										<tr class="handle">
											<td><a href="http://www.iobit.com/buy.php?product=asc91pc1477&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016compare')" target="" class="button yellowbtn middle"><span>Upgrade <em>to pro</em></span></a></td>
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
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_01.png" alt=""></td>
							<td class="text"><span>Basic System Clean, Fix and Optimization</span></td>
							<td class="items itema"><span class="greenstar"></span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_02.png" alt=""></td>
							<td class="text"><span>Ultimate System Tuneup for Top Performance</span><i class="improved">Improved</i></td>
							<td class="items itema"></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_03.png" alt=""></td>
							<td class="text"><span>Up to 300% Internet Speedup with Internet Booster</span><i class="improved">Improved</i></td>
							<td class="items itema"></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_04.png" alt=""></td>
							<td class="text"><span>Real-time Optimization with Active Optimize</span></td>
							<td class="items itema"></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_05.png" alt=""></td>
							<td class="text"><span>Deep Windows Registry Clean</span><i class="improved">Improved</i></td>
							<td class="items itema"></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_06.png" alt=""></td>
							<td class="text"><span>Maximum Hard Drive Performance</span><i class="improved">Improved</i></td>
							<td class="items itema"></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_07.png" alt=""></td>
							<td class="text"><span>Basic Protection from Security Threats</span><i class="improved">Improved</i></td>
							<td class="items itema"><span class="greenstar"></span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_08.png" alt=""></td>
							<td class="text"><span>Full Detection against Security Threats</span></td>
							<td class="items itema"></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_09.png" alt=""></td>
							<td class="text"><span>Auto Online Privacy Trace Clean with Browser Anti-Tracking</span></td>
							<td class="items itema"></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_15.png" alt=""></td>
							<td class="text"><span>Auto RAM Clean on Performance Monitor</span><i class="new">New</i></td>
							<td class="items itema"></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_11.png" alt=""></td>
							<td class="text"><span>Auto Update to the Latest Version</span></td>
							<td class="items itema"></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_12.png" alt=""></td>
							<td class="text"><span>Runs in the Background - Install and Forget It</span></td>
							<td class="items itema"></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_13.png" alt=""></td>
							<td class="text"><span>Fantastic New Skins &amp; Themes</span></td>
							<td class="items itema"><span class="greenstar"></span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="http://www.iobit.com/tpl/images/comparison/asc/cop_asc_i_14.png" alt=""></td>
							<td class="text"><span>Free 24/7 Technical Support on Demand</span></td>
							<td class="items itema"></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="name">
							<td></td>
							<td></td>
							<td class="items"><span>Advanced SystemCare<br>Free</span></td>
							<td class="items"><span>Advanced SystemCare<br>PRO</span></td>
						</tr>
						<tr class="handle">
							<td></td>
							<td></td>
							<td class="items">Your current edition</td>
							<td class="items"><a href="http://www.iobit.com/buy.php?product=asc91pc1477&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016compare')" target="" class="button yellowbtn middle"><span>Upgrade <em>to pro</em></span></a></td>
						</tr>
						<tr class="limit">
							<td></td>
							<td></td>
							<td class="items"></td>
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
						<dt><img src="http://www.iobit.com/tpl/images/reviews/cnet.png" alt=""></dt>
						<dd><h4>"Advanced Systemcare aims to remedy whatever ails your computer."</h4></dd>
						<dd>"There's nothing worse than a computer that is bogged down so much that it impedes your ability to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."<span>-Cnet</span></dd>
					</dl>
				</div>
				<div class="user_rev" id="user_rev">
					<div class="content">
						<h3 class="hide">User Review</h3>
						<dl class="hide">	
							<dd><h4>"Cleaned up Spyware and Malware My antivirus lets slip through"</h4></dd>
							<dd>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"</dd>
						</dl>
						<dl class="hide">							
							<dd><h4>"Not only is it a great product, but the support is equally great"</h4></dd>
							<dd>"I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."</dd>
						</dl>
						<dl class="hide">
								 <dd><h4>"My choice is still overwhelmingly Advanced SystemCare v9 Pro"</h4></dd>
							<dd>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</dd>
						</dl>
						<dl class="show">							
							<dd><h4>"My system has never run better."</h4></dd>
							<dd>"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</dd>
						</dl>
					</div>
					<ul class="users" style="width: 640px;">
						<li class=""><img src="http://www.iobit.com/tpl/images/users/bob-bassett.jpg" alt="">Bob Bassett<br>2014</li>
						<li><img src="http://www.iobit.com/tpl/images/users/bruce-ramsay.jpg" alt="">Bruce Ramsay<br>2015</li>
						<li class=""><img src="http://www.iobit.com/tpl/images/users/charles-r-widick.jpg" alt="">Charles R. Widick<br>2015</li>
						<li class="current"><img src="http://www.iobit.com/tpl/images/users/gordon.jpg" alt="">Gordon Griswold<br>2014</li>
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
								<p>Boost Your PC up to 300% Faster</p>
				</h2>
				<dl class="handelbuy">
					<dt>$14.77</dt>
					<dd>
						<p class="butt-holder">
							<a href="http://www.iobit.com/buy.php?product=asc91pc1477&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016compare')" target="" class="button yellowbtn"><span>Buy Now</span></a>
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
				 	<p> ?? 2005 - 2016 IObit. All Rights Reserved &nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/en/privacy.php"><span>Privacy Policy</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/en/legal.php"><span>Legal Notice</span></a></p>
					<ul>
						<li><a href="http://www.iobit.com/en/index.php"><span>Home</span></a></li>
						<li><a href="http://www.iobit.com/en/products.php"><span>Products</span></a></li>
						<li><a href="http://www.iobit.com/en/onlinefeedback.php"><span>Support</span></a></li>
						<li class="end"><a href="http://www.iobit.com/en/contact.php"><span>Contact Us</span></a></li>
					</ul>
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