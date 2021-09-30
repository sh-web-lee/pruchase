<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
if(!empty($_GET['action'])&&$_GET['action']=='download'){
    $fileName='asc9trial-setup.exe';
    $filePath = "http://update.iobit.com/dl/cus/" . $fileName;
    $addContent = $_GET['aff'];
    if (!is_numeric($addContent)||mb_strlen($addContent)>9) {
        exit("<script type=\"text/javascript\">alert('Invalid Code');window.location='javascript:history.back(0)';</script>");
    }
    if (!$attachment = file_get_contents($filePath)) {
        exit("<script type=\"text/javascript\">alert('Open file error.');window.location='javascript:history.back(0)';</script>");
    }
    $addContent.='|';
    $addContentLen = mb_strlen($addContent);
    if ($addContentLen < 16) {
        $maxLen = 16 - $addContentLen;
        for ($i = 0; $i < $maxLen; $i++) {
            $addContent = " ".$addContent;
        }
    }
    $addLen=16;
    header("HTTP/1.1 200 OK");
    header('Content-Encoding:none');
    header('Content-Disposition:filename='.$fileName);
    header('Content-Type:application/octet-stream');
    header('Content-Length: '.(strlen($attachment)+$addLen));
    exit($attachment.$addContent);
}
include $pRootUrl . 'include/common.inc.php';
if (empty($_GET['ref']))
    $_GET['ref'] = 'enaff_asc9_dealoftheday';

if($_GET['ref']=='cnetspotb'){
    $download_url='http://update.iobit.com/dl/cus/asc9cbs-cnet.exe';
}else{
    if(!empty($_GET['aff'])) {
        $download_url = './index.php?aff=' . $_GET['aff'] . '&action=download';
    }else{
        $download_url='http://update.iobit.com/dl/cus/asc9trial-setup.exe';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Deal of the Day</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>style/style.css"/>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="main">
	<!-- header -->
	<div class="header">
		<div class="wrapper">
			<a href="http://www.iobit.com" title="IObit" class="logo">IObit</a>
			<h1>Deal of the Day</h1>
			<div class="panel">
				<h2>A Faster, Much More Secure and Powerful PC is Only One-Click Away</h2>
				<div class="content clearfix">
					<dl class="discount">
						<dt>80% OFF</dt>
						<dd>Only <strong>$0.55</strong> Per Month</dd>
					</dl>
					<div class="details">
						<!-- countdown -->
						<div class="countdown">
							<ul id="counttime">
								<li>15 <small>hr</small></li>
								<li>15 <small>m</small></li>
								<li>15 <small>s</small></li>
								<li class="last">123</li>
							</ul>
							<span>*</span>
						</div>
						<!-- end countdown -->
						<h3>Activate ASC PRO for 3PCs<br>and get Smart Defrag PRO with <strong>$0!</strong></h3>
						<dl>
							<dt>Only <strong>$19.99</strong> <del>$109.98</del></dt>
							<dd><a href="http://www.iobit.com/buy.php?product=affasc9sd&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>"  onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016dealoftheday');" class="act-btn" title="Activate Now">Activate Now</a></dd>
							<dd>Or <a href="<?php echo $download_url;?>">All PRO features Free for 30 days</a></dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	<!-- awards -->
	<div class="awards">
		<div class="wrapper">
			<h2>Be trusted and awarded by these Medias</h2>
			<img src="<?php echo $pResUrl; ?>images/awards.png" alt="awards">
		</div>
	</div>
	<!-- end awards -->
	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2>Keep Your PC Running Like a New One with ASC 9 PRO</h2>
			<div class="screenshot">
				<div class="tag"><img src="<?php echo $pResUrl; ?>images/discount-tag.png" alt=""></div>
				<img src="<?php echo $pResUrl; ?>images/screenshot.jpg" alt="screenshot">
			</div>
			<div class="lists clearfix">
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/benfits_01.png" alt=""></dt>
					<dd>Boost Internet<br>up to 300% Faster</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/benfits_02.png" alt=""></dt>
					<dd>Double the Speed of<br>Your Slow PC *</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/benfits_03.png" alt=""></dt>
					<dd>Auto RAM Clean & Auto Online<br>Privacy Trace Clean <sup>NEW</sup></dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/benfits_04.png" alt=""></dt>
					<dd>One-click Cleaning and Fixing<br>All Kinds of PC Problems</dd>
				</dl>
				<p><a href="javascript:;" onclick="goTaget($('.comparison_table'))">Learn more about PRO edition ></a></p>
			</div>
		</div>
	</div>
	<!-- end benfits -->
	<!-- packs -->
	<div class="packs clearfix">
		<div class="wrapper">
			<div class="arrow"></div>
			<div class="details">
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/boxshot-asc.png" alt=""> <div class="tag"><img src="<?php echo $pResUrl; ?>images/discount-tag.png" alt=""></div></dt>
					<dd>3 PCs / 1 Year <del>$89.99</del><strong>$19.99</strong></dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/boxshot-sd.png" alt=""></dt>
					<dd>1 PC / 1 Year <del>$19.99</del><strong>$0</strong></dd>
				</dl>
			</div>
			<dl class="cart">
				<dt>Total: <strong>$19.99</strong> <del>$109.98</del></dt>
				<dd><a href="http://www.iobit.com/buy.php?product=affasc9sd&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016dealoftheday');" class="act-btn" title="Activate Now">Activate Now</a></dd>
			</dl>
		</div>
	</div>
	<!-- end packs -->
	<!-- pay-guarantee -->
	<div class="pay-guarantee clearfix">
		<div class="wrapper">
			<dl>
				<dt>Accepted Payments </dt>
				<dd><img src="<?php echo $pResUrl; ?>images/payments.png" alt=""></dd>
			</dl>
			<dl>
				<dt>Money Back Guarantee</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/monyback-guarantee.png" alt=""></dd>
			</dl>
			<dl>
				<dt>Secure Payment</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/secured.png" alt=""></dd>
			</dl>
		</div>		
	</div>
	<!-- end pay-guarantee -->
	<!-- awards -->
	<div class="review">
		<div class="wrapper">
			<div class="media clearfix">
				<h2>Media Review</h2>
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/cnet.png" alt=""></dt>
					<dd><h4>"Advanced Systemcare aims to remedy whatever ails your computer."</h4></dd>
					<dd>"There's nothing worse than a computer that is bogged down so much that it impedes your ability to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."<span>-Cnet</span></dd>
				</dl>
			</div>
			<div class="user-rev">				
				<div class="content">
					<h2>User Review</h2>
					<div class="reviews active">
						<h4>"Not only is it a great product, but the support is equally great"</h4>
						<p>"I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."</p>
					</div>
					<div class="reviews">
						<h4>"Cleaned up Spyware and Malware My antivirus lets slip through"</h4>
						<p>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence" </p>
					</div>
					<div class="reviews">
						<h4>"My choice is still overwhelmingly Advanced SystemCare v9 Pro"</h4>
						<p>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier." </p>
					</div>
					<div class="reviews">
						<h4>"My system has never run better."</h4>
						<p>"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers." </p>
					</div>
				</div>
				
				<ul class="users">
					<li class="active"><img src="<?php echo $pResUrl; ?>images/bruce-ramsay.jpg" alt="">Bruce Ramsay<br>2015</li>
					<li><img src="<?php echo $pResUrl; ?>images/bob-bassett.jpg" alt="">Bob Bassett<br>2014</li>
					<li><img src="<?php echo $pResUrl; ?>images/charles-r-widick.jpg" alt="">Charles R. Widick<br>2015</li>
					<li><img src="<?php echo $pResUrl; ?>images/gordon.jpg" alt="">Gordon Griswold<br>2014</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end awards -->
	<div class="comparison_table wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<thead>
			<tr>
				<th colspan="2" class="text">See what PRO edition can do for you:</th>
				<th class="itemb">
					<h4>Advanced SystemCare Free</h4>
					<a href="<?php echo $download_url;?>" class="downloadbtn" title="Free Download">Free Download</a>
					<span></span>
				</th>
				<th class="itema">
					<h4>Advanced SystemCare PRO</h4>
					<a href="http://www.iobit.com/buy.php?product=affasc9sd&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016dealoftheday');" class="activebtn" title="Activate Now">Activate Now</a>
					<span><strong>$19.99 </strong><del>$109.98 </del> 1 Year / 3 PCs</span>
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_01.png"></td>
				<td class="virtue">Basic System Clean, Fix and Optimization</td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_02.png"></td>
				<td class="virtue">Ultimate System Tuneup for Top Performance span</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_03.png"></td>
				<td class="virtue">Up to 300% Internet Speedup with Internet Booster</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_04.png"></td>
				<td class="virtue">Real-time Optimization with Active Optimize</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_05.png"></td>
				<td class="virtue">Deep Windows Registry Clean</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_06.png"></td>
				<td class="virtue">Maximum Hard Drive Performance</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_07.png"></td>
				<td class="virtue">Basic Protection from Security Threats</td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_08.png"></td>
				<td class="virtue">Full Detection against Security Threats</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_09.png"></td>
				<td class="virtue">Auto Online Privacy Trace Clean with Browser Anti-Tracking</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_15.png"></td>
				<td class="virtue"> Auto RAM Clean on Performance Monitor</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_11.png"></td>
				<td class="virtue">Auto Update to the Latest Version</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_12.png"></td>
				<td class="virtue">Runs in the Background - Install and Forget It</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_13.png"></td>
				<td class="virtue">Fantastic New Skins &amp; Themes</td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_14.png"></td>
				<td class="virtue">Free 24/7 Technical Support on demand</td>
				<td class="itemb"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<th colspan="2">&nbsp;</th>
				<th class="itemb">
					<h4>Advanced SystemCare Free</h4>
					<a href="<?php echo $download_url;?>" class="downloadbtn" title="Free Download">Free Download</a>
					<span><strong>All PRO</strong> features <strong>Free</strong> for 30 days</span>
				</th>
				<th class="itema">
					<h4>Advanced SystemCare PRO</h4>
					<a href="http://www.iobit.com/buy.php?product=affasc9sd&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016dealoftheday');" class="activebtn" title="Activate Now">Activate Now</a>
					<span><strong>$19.99 </strong><del>$109.98 </del> 1 Year / 3 PCs</span>
				</th>
			</tr>
			</tfoot>
		</table>
	</div>
	<div class="footer wrapper">
		<dl class="annotation">
			<dt>Note:</dt>
			<dd>1*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
			<dd>2*.Data may vary based on different system or computer. </dd>
		</dl>
		<p class="copyright">
			Copyright © 2005 - 2016 IObit. All Rights Reserved
		</p>
	</div>
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
		$(".users li").mouseover(function(event) {
			var num = $(this).index();			
			$(".users li").eq(num).addClass('active').siblings().removeClass('active');
			$(".reviews").eq(num).addClass('active').siblings().removeClass('active');
		});
		function cycleCountdown(){
			var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
			var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
			d = MApp(2.2).packages.zeroize(datetime[0], 2);
			h = MApp(2.2).packages.zeroize(datetime[1], 2);
			i = MApp(2.2).packages.zeroize(datetime[2], 2);
			s = MApp(2.2).packages.zeroize(datetime[3], 2);
			mi = MApp(2.2).packages.zeroize(datetime[4], 3);
			document.getElementById('counttime').innerHTML = '<li>' + h + '<small>hr</small></li><li >' + i + '<small>m</small></li><li>' + s + '<small>s</small></li><li class="last">' + mi + '</li>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();
		function goTaget(target) {
			var Theigth = target.offset().top;
			$("html, body").animate({scrollTop: Theigth}, 'slow');
		}
        setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);
    </script></div>
</body>
</html>