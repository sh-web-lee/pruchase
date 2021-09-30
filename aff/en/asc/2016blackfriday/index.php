<?php  
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './'; 
		$pRootUrl = '../../../../'; 
	}
	include $pRootUrl.'include/common.inc.php';
	if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_asc10_2016blackfriday';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Save up to 80% on ASC PRO, speed up, protect and optimize your PC!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:400,600'>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400" rel="stylesheet">
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
	<div class="top">
		<div class="banner">
			<div class="wrapper">
				<a href="http://www.iobit.com" target="_blank" class="logo">IObit</a>
				<h1>BLACK Friday UP to 80% OFF FREE GIFT Pack Sale</h1>
				<ul class="date" id="countdown">
					<li>15 <span>hr :</span> </li>
					<li>15 <span>m :</span></li>
					<li>15 <span>s :</span></li>
					<li>155 <sup>*</sup></li>
				</ul>
				<p class="asc-pro">-ASC 10 PRO Most Shocking Offer of 2016!</p>
				<div class="clear"></div>
				<div class="content">
					<div class="pc one-pc">
						<h3>1 Year / 1 PC</h3>
						<dl>
							<dt><del>$29.99</del></dt>
							<dd class="price">$14.77 50% OFF</dd>
							<dd><a href="http://www.iobit.com/buy.php?product=enaffasc101pc1477&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaff_asc10_2016blackfriday');" class="buybtn black">Get It Now</a></dd>
						</dl>
						<h4>BLACK Friday Gift Pack</h4>
						<ul>
							<li><span>Smart Defrag PRO</span> $0  <del>$19.99</del></li>
							<li><span>Protected Folder</span> $0  <del>$19.99</del></li>
							<li><span>AMC Security PRO</span> $0  <del>$19.99</del></li>
						</ul>
						<div class="chapter"></div>
					</div>
					<div class="pc three-pc">
						<h3>1 Year / 3 PCs</h3>
						<dl>
							<dt><del> $89.97</del></dt>
							<dd class="price">$19.77 50% OFF</dd>
							<dd><a href="http://www.iobit.com/buy.php?product=enaffasc3pc1999gift&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaff_asc10_2016blackfriday');" class="buybtn">Get It Now</a></dd>
						</dl>
						<h4>BLACK Friday Gift Pack</h4>
						<ul>
							<li><img src="<?php echo $pResUrl; ?>images/gift.png" alt="" onclick="goTarget($('.gift-content'))"><span>Smart Defrag PRO</span> <strong>$0</strong>  <del>$19.99</del></li>
							<li><img src="<?php echo $pResUrl; ?>images/gift.png" alt="" onclick="goTarget($('.gift-content'))"><span>Protected Folder</span> <strong>$0</strong>  <del>$19.99</del></li>
							<li><img src="<?php echo $pResUrl; ?>images/gift.png" alt="" onclick="goTarget($('.gift-content'))"><span>AMC Security PRO</span> <strong>$0</strong>  <del>$19.99</del></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- container start -->
	<div class="wrapper">
		<!-- payment start -->
		<div class="payment clearfix">
			<dl>
				<dt>Accepted Payments </dt>
				<dd><img src="<?php echo $pResUrl; ?>images/payments.jpg" alt=""></dd>
			</dl>
			<dl>
				<dt>Money Back Guarantee  </dt>
				<dd><img src="<?php echo $pResUrl; ?>images/guarantee.jpg" alt=""></dd>
			</dl>
			<dl>
				<dt>Secure Payment  </dt>
				<dd><img src="<?php echo $pResUrl; ?>images/verified.jpg" alt=""></dd>
			</dl>
		</div>
		<!-- payment end -->
		<div class="asc-content">
			<h2>Activate ASC 10 PRO to get a faster, cleaner and more secure PC!</h2>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons01.jpg" alt=""></dt>
				<dd><strong>200% <sup>*</sup></strong>
					<p>Reduce system stutter/lag and speed up PC up to 200% faster</p>
				</dd>
			</dl>
			<dl class="right">
				<dt><img src="<?php echo $pResUrl; ?>images/icons02.jpg" alt=""></dt>
				<dd><strong>300% <sup>*</sup></strong>
					<p>Accelerate download, surfing, gaming, YouTube viewing up to 300% faster</p>
				</dd>
			</dl>
			<div class="clear"></div>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons03.jpg" alt=""></dt>
				<dd><strong>Deeper <sup>*</sup></strong>
					<p>Fix registry issues to reduce Windows crashes & error messages
					</p>
				</dd>
			</dl>
			<dl class="right">
				<dt><img src="<?php echo $pResUrl; ?>images/icons04.jpg" alt=""></dt>
				<dd><strong>Safer</strong><p>Erase privacy traces to prevent from being tracked</p></dd>
			</dl>
			<img src="<?php echo $pResUrl; ?>images/message.jpg" alt="" class="message">
		</div>
		<div class="gift-content clearfix">
			<h2>BLACK Friday Gift Pack</h2>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/amc-gift.png" alt=""></dt>
				<dd><strong>AMC Security PRO</strong></dd>
				<dd><b>$0</b> <del>$19.99</del>   1 Y / Multi Devices</dd>
				<dd>200% Speed up and Fully Protect <br> your Android from any treats!</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/sd-gift.png" alt=""></dt>
				<dd><strong>Smart Defrag PRO</strong></dd>
				<dd><b>$0</b> <del>$19.99</del>   1 Y / 1 PC</dd>
				<dd>Get the Maximum Hard <br> Drive Performance!</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/pf-gift.png" alt=""></dt>
				<dd><strong>Protected Folder</strong></dd>
				<dd><b>$0</b> <del>$19.99</del>   1 Y / 1 PC</dd>
				<dd>Never Worry about Data Theft <br> or Privacy Leaks!</dd>
			</dl>
			<div class="clear"></div>
			<p class="price">ASC PRO ($19.99) + Gift Pack ($0)</p>
			<a href="http://www.iobit.com/buy.php?product=enaffasc3pc1999gift&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaff_asc10_2016blackfriday');" class="buybtn">Get It Now</a>
			<p class="secure"><img src="<?php echo $pResUrl; ?>images/secure.png" alt="">100% 60-DAY MONEY BACK GUARANTEE</p>
		</div>
		<div class="visa">
			<span>
				Accepted Payments <img src="<?php echo $pResUrl; ?>images/visa.jpg" alt="">
			</span>
			<span class="f-right">Secure Payment <img src="<?php echo $pResUrl; ?>images/verified.jpg" alt=""></span>
		</div>
		<div class="trusted">
			<h2>Trusted and awarded by these medias</h2>
			<img src="<?php echo $pResUrl; ?>images/clnet.jpg" alt="">
		</div>
		<!-- media-rev start -->
		<div class="review">
			<div class="content">
					<dl>
						<dt><h3>User Review</h3></dt>
							<dd>
									<h4>"Not only is it a great product, but the support is equally great"</h4>
							</dd>
							<dd>
									"I like many started off with the free version and eventually purchased the full version. It's
									been working to keep my computer clean and "bug" free for years now and it hasn't let me down
									yet. I contacted Advanced System Care recently and they responded within a day or two with all I
									needed to know. In my mind support is huge in the decision to stay with a product and ASC wins
									in both product and support."
							</dd>
					</dl>
					<dl>
							<dt><h3>User Review</h3></dt> 
							<dd>
									<h4>"Cleaned up Spyware and Malware My antivirus lets slip through"</h4>
							</dd>
							<dd>
									"We used to use up to a dozen different programs to keep our machines running smoothly and keep
									the bad guys out. It took hours every week to maintain security and performance. Now, with
									Advanced System Care Pro, everything is in one place and it takes us just a few minutes every
									couple of days to do the same jobs with much more confidence"
							</dd>
					</dl>
					<dl class="active">
						 <dt><h3>Media Review</h3></dt>
							<dd>
									<h4>"Advanced Systemcare aims to remedy whatever ails your computer."</h4>
							</dd>
							<dd>
									"There's nothing worse than a computer that is bogged down so much that it impedes your ability
									to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not
									only cleaning up junk files, malware, and invalid registry entries, but by giving your computer
									a boost to optimize your PC experience."-Cnet
							</dd>
					</dl>
					<dl>
							<dt><h3>User Review</h3></dt>
							<dd>
									<h4>"My choice is still overwhelmingly Advanced SystemCare Pro"</h4>
							</dd>
							<dd>
									"As a computer repair tech I find by downloading and scanning with ASC free most common problems
									are resolved. When finished with a repair I usually suggest the client purchase the Pro package.
									Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7?
									This is the best product a home user can buy. Thank you for making my job easier."
							</dd>
					</dl>
					<dl>
							<dt><h3>User Review</h3></dt>
							<dd>
									<h4>"My system has never run better."</h4>
							</dd>
							<dd>
									"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows
									user, providing excellent value and function in both its shareware and freeware versions. IObit
									provides expert technical support that is competent, knowledgeable and responsive, adding
									significant value to their products and services for their customers."
							</dd>
					</dl>
			</div>
			<ul class="users clearfix">
					<li>
							<div class="pic"><img src="<?php echo $pResUrl; ?>images/review_icons1.png" alt="Bruce Ramsay">
							</div>
							<p>Bruce Ramsay <b>2015</b></p>
					</li>
					<li>
							<div class="pic"><img src="<?php echo $pResUrl; ?>images/review_icons2.png" alt="Bob Bassett"></div>
							<p>Bob Bassett<b>2014</b></p>
					</li>
					<li  class="current">
							<div class="pic"><img src="<?php echo $pResUrl; ?>images/review_icons3.png" alt="Cnet"></div>
							<p>Cnet</p>
					</li>
					<li>
							<div class="pic"><img src="<?php echo $pResUrl; ?>images/review_icons4.png" alt="Charles R. Widick">
							</div>
							<p>Charles R. Widick <b>2015</b></p>
					</li>
					<li >
							<div class="pic"><img src="<?php echo $pResUrl; ?>images/review_icons5.png" alt="Gordon Griswold">
							</div>
							<p>Gordon Griswold <b>2014</b></p>
					</li>
			</ul>
		 </div>
		<!-- media-rev end -->
		
		<!-- annotation start -->
		<dl class="annotation">
			<dt>Note:</dt>
			<dd>
				1*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
			</dd>
			<dd>2*.Data may vary based on different system or computer.</dd>
		</dl>
		<!-- annotation end -->

	</div>
	<!-- container end -->

	<!-- footer start -->
	<div class="footer">Copyright © 2005 - <?php echo date(Y)?> IObit. All Rights Reserved</div>
	<!-- footer end -->
<div class="pop-up">
    <div class="pop-main">
        <div class="pop-box">
            <h2>Note:</h2>
            <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
            <p>You will be redirected to the latest IObit promotion page automatically.</p>
        </div>
    </div>
</div>
<script>   

	//userreview 
	$(".users li").mouseover(function(event) {
		var num = $(this).index();
		$(".users li").eq(num).addClass('current').siblings().removeClass('current');
		$(".review .content > dl").eq(num).addClass('active').siblings().removeClass('active');
	});


	function goTarget(target,yoffset) {
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	}

	//count down
	function cycleCountdown(){
		var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
		var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
		d = MApp(2.2).packages.zeroize(datetime[0], 2);
		h = MApp(2.2).packages.zeroize(datetime[1], 2);
		i = MApp(2.2).packages.zeroize(datetime[2], 2);
		s = MApp(2.2).packages.zeroize(datetime[3], 2);
		mi = MApp(2.2).packages.zeroize(datetime[4], 3);
		document.getElementById('countdown').innerHTML = '<li>'+h+'<span> hr :</span></li><li>'+ i+'<span> m :</span></li><li>'+ s+'<span> s : </span></li><li class="last">'+ mi+'<sup>*</sup></li>';
		setTimeout('cycleCountdown()', 1);
	}
	cycleCountdown();
    setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);
</script></div>
</body>
</html>