<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
	    $pRootUrl = '../../';
	}
	include $pRootUrl.'include/common.inc.php';
	//if (empty($_GET['ref'])) $_GET['ref'] = '';
	$_GET['ref'] = '';
	
	function microtime_float(){
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}
	$buyNum = ceil(microtime_float()*1000/20000)-67875499;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Get ASC 8 PRO for 40 Days for Free & Enjoy 60% Discount for 1-year Subscription.</title>
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $pResUrl; ?>css/style.css" />
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<div id="header">
		<div class="wrapper">
			<a href="http://www.iobit.com" target="_blank" class="homelink"></a>
			<dl class="title">
				<dt>Pre-order Advanced SystemCare 8 PRO Today</dt>
			</dl>		
			<div class="previmg">
				<img src="<?php echo $pResUrl; ?>img/productshow.jpg" alt="" />
			</div>	
			<div class="infopad">
				<dl class="discount">
					<dt>Try ASC 8 PRO for 40 Days for Free!</dt>
					<dd><strong>Offer Valid for ASC 8 Pre-ordering Only!</strong></dd>
					<dd>You may opt out anytime during the 40-day trial period</dd>
				</dl>
				<dl class="paybox">
					<dt>You pay<span>$0</span> <del>Original:$49.99</del></dt>
					<dd><a href="http://www.iobit.com/buy.php?product=asc8trialsub&ref=asc8preorderb&aff=<?php echo $_GET['aff']; ?>refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc8predorderb');" class="orderbtn">Pre-order Now</a></dd>
				</dl>
				<ul class="price">
					<li><span><?php echo $buyNum; ?></span> people pre-ordered!</li>
					<li>1 year subscription / <span>3 PCs</span></li>
				</ul>
				<div class="clear"></div>
				<p class="tips">
					Promotion terms: <br />
					At the end of the 40-day free trial period, your credit card or PayPal account will be charged $19.99 automatically. This 60% discount is bonus for customers who choose to pre-order only! 
				</p>
			</div>
			<div class="clear"></div>
			<div class="shadow"></div>
		</div>
		
	</div>

	<div id="main">
		<div class="wrapper">
			<div class="benfits_box">
				<h3>Major Improvements in Advanced SystemCare 8</h3>
				<dl class="btnfits">
					<dt><img src="<?php echo $pResUrl; ?>img/benfits_01.jpg" alt="" /></dt>
					<dd><h4>Browser Anti-Tracking</h4></dd>
					<dd>Clean privacy traces automatically to protect you from being tracked.</dd>
				</dl>
				<dl class="btnfits">
					<dt><img src="<?php echo $pResUrl; ?>img/benfits_02.jpg" alt="" /></dt>
					<dd><h4>Surfing Protection</h4></dd>
					<dd>Support real-time database update and Parent Control.</dd>
				</dl>
				<dl class="btnfits">
					<dt><img src="<?php echo $pResUrl; ?>img/benfits_03.jpg" alt="" /></dt>
					<dd><h4>Startup Manager</h4></dd>
					<dd>Speed up system boot time.</dd>
				</dl>
				<dl class="btnfits end">
					<dt><img src="<?php echo $pResUrl; ?>img/benfits_04.jpg" alt="" /></dt>
					<dd><h4>Performance Monitor</h4></dd>
					<dd>Monitor your PC performance in real time.</dd>
				</dl>
			</div>
			<div class="payments">
				<dl class="tips">
					<dd>Get ASC 8 PRO for 40 days for free & enjoy exclusive 60% discount for 1 year subscription for 3 PCs.</dd>
					<dt>Act now and SAVE more!</dt>
				</dl>
				<dl class="preorder">
					<dt><span><?php echo $buyNum; ?></span> people pre-ordered!</dt>
					<dd><a href="http://www.iobit.com/buy.php?product=asc8trialsub&ref=asc8preorderb&aff=<?php echo $_GET['aff']; ?>refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc8predorderb');" class="orderbtn">Pre-order Now</a></dd>
				</dl>
				<dl class="price">
					<dt>Now <span>$0</span></dt>
					<dd>Valued at $49.99</dd>
				</dl>
				<div class="clear"></div>
				<div><img src="<?php echo $pResUrl; ?>img/payment.jpg" alt="" /></div>
			</div>
			<div class="comparison_table">
			    <table border="0" cellspacing="0" cellpadding="0" width="100%">
			      <thead>
			        <tr>
			          <th colspan="2" style="text-align:left">See what PRO edition can do for you:</th>
			          <th class="itemb"><span>Advanced SystemCare Free</span></th>
			          <th class="itema"><span>Advanced SystemCare PRO</span></th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_01.png"></td>
			          <td class="virtue">Basic System Clean, Fix and Optimization</td>
			          <td class="itemb"><img src="<?php echo $pResUrl; ?>img/bluemark.png"/></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_02.png"></td>
			          <td class="virtue">Ultimate System Tuneup for Top Performance</td>
			          <td class="itemb"></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_03.png"></td>
			          <td class="virtue">Up to 300% Internet Speedup with Internet Booster</td>
			          <td class="itemb"></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_04.png"></td>
			          <td class="virtue">Real-time Optimization with Active Optimize</td>
			          <td class="itemb"></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_05.png"></td>
			          <td class="virtue">Deep Windows Registry Clean</td>
			          <td class="itemb"></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_06.png"></td>
			          <td class="virtue">Maximum Hard Drive Performance</td>
			          <td class="itemb"></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_07.png"></td>
			          <td class="virtue">Basic Protection from Security Threats</td>
			          <td class="itemb"><img src="<?php echo $pResUrl; ?>img/bluemark.png"/></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_08.png"></td>
			          <td class="virtue">Full Detection against Security Threats</td>
			          <td class="itemb"></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_09.png"></td>
			          <td class="virtue">Safe Online Experience with Surfing Protection</td>
			          <td class="itemb"></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_10.png"></td>
			          <td class="virtue">Auto Clean for Privacy Security Whenever You Log on</td>
			          <td class="itemb"><img src="<?php echo $pResUrl; ?>img/bluemark.png"/></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_11.png"></td>
			          <td class="virtue">Auto Update to the Latest Version</td>
			          <td class="itemb"></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_12.png"></td>
			          <td class="virtue">Runs in the Background - Install and Forget It</td>
			          <td class="itemb"></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_13.png"></td>
			          <td class="virtue">Fantastic New Skins &amp; Themes</td>
			          <td class="itemb"></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			        <tr>
			          <td class="icons"><img src="<?php echo $pResUrl; ?>img/compare_icon_14.png"></td>
			          <td class="virtue">Free 24/7 Technical Support on demand</td>
			          <td class="itemb"></td>
			          <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
			        </tr>
			      </tbody>
			      <tfoot>
			        <tr>
			          <th colspan="2"></th>
			          <th class="itemb"> <span>Advanced SystemCare Free</span> <br />
			            <br />
			            Your current edition </th>
			          <th class="itema"><span>Advanced SystemCare PRO</span><br />
			            <a href="http://www.iobit.com/buy.php?product=asc8trialsub&ref=asc8preorderb&aff=<?php echo $_GET['aff']; ?>refs=purchase_asc"  onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc8predorderb');" class="tbbuybtn">Activate Now</a>
			            
			          </th>
			        </tr>
			      </tfoot>
			    </table>
     		</div>
     		<dl class="awards">
			    <dt>Product Awards</dt>
			    <dd><img src="<?php echo $pResUrl; ?>img/awards.jpg"></dd>
			</dl>
			<div class="usersaying clearfix">
				<h2>Customer Review</h2>
			    <div class="boxa" style="margin-top:0;">
			    	<h3>" I'm really happy I upgraded, it puts my mind at ease and does all the work "</h3>
			    	<dl class="user">
			        	<dt><img src="<?php echo $pResUrl; ?>img/jane_mcclain.jpg" alt=""/></dt>
			        	<dd>Jane McClain</dd>
			        	<dd>2012</dd>
			    	</dl>
			    	<dl class="quit">
			        	<dt><img alt="quote" src="<?php echo $pResUrl; ?>img/quote.png"></dt>
			        	<dd>The Advanced-System Care Pro keeps my computer well cleaned. Not only that, their customer service is excellent. They persevered with courteous help until I was able to solve my problem of sending a gift of this ASC service to another person. This is evidence of a good company."</dd>
			    	</dl>
			    </div>
			    <div class="boxb" style="margin-top:0;">
			    	<h3>" Cleaned up Spyware and Malware My antivirus lets slip through "</h3>
			    	<dl class="user">
			        	<dt><img src="<?php echo $pResUrl; ?>img/bob.jpg" alt=""/></dt>
			        	<dd>Bob Bassett</dd>
			        	<dd>2012</dd>
			    	</dl>
			    	<dl class="quit">
			        	<dt><img alt="quote" src="<?php echo $pResUrl; ?>img/quote.png" /></dt>
			        	<dd>We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"</dd>
			    	</dl>
			    </div>
			    <div class="clear"></div>
			    <div class="boxa">
			    	<h3>" It takes care of everything in the background "</h3>
			   		<dl class="user">
			        	<dt><img src="<?php echo $pResUrl; ?>img/almir.jpg" alt=""/></dt>
			        	<dd>Almir Romboli Tavares</dd>
			        	<dd>2012</dd>
			    	</dl>
			    	<dl class="quit">
			        	<dt><img alt="quote" src="<?php echo $pResUrl; ?>img/quote.png"></dt>
			        	<dd>Advanced System Care Pro has proved to be a trusted tool, automatically improving performance and security in a simple interface and with a great support. I recommend it to all my Family and friends."</dd>
			    	</dl>
			    </div>
			    <div class="boxb">
			    	<h3>" My system has never run better "</h3>
			    	<dl class="user">
			        	<dt><img src="<?php echo $pResUrl; ?>img/gordon.jpg" alt=""/></dt>
			        	<dd>Gordon Griswold</dd>
			        	<dd>2012</dd>
			    	</dl>
			    	<dl class="quit">
			        	<dt id="compare"><img alt="quote" src="<?php echo $pResUrl; ?>img/quote.png"></dt>
			        	<dd>In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</dd>
			    	</dl>
			    </div>
			    <div class="clear"></div>
			</div>
			<div class="copy">Copyright &copy; 2005 - 2014 IObit. All Rights Reserved</div>
		</div>
		
	</div>

	<div id="float">
		<div class="wrapper">
			<dl class="padinfo">
				<dt>Try ASC 8 PRO for Free & Enjoy 60% OFF for 1 Year Subscription!</dt>
				<dd><span><?php echo $buyNum; ?></span> people pre-ordered</dd>
			</dl>
			<dl class="paybox">
				<dt>You pay<span>$0</span> <del>Original:$49.99</del></dt>
				<dd><a href="http://www.iobit.com/buy.php?product=asc8trialsub&ref=asc8preorderb&aff=<?php echo $_GET['aff']; ?>refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc8predorderb');" class="orderbtn">Pre-order Now</a></dd>
			</dl>
		</div>
	</div>
	<script type="text/javascript">
		function cycleCountdown(){
			var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
			var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
			d = MApp(2.2).packages.zeroize(datetime[0], 2);
			h = MApp(2.2).packages.zeroize(datetime[1], 2);
			i = MApp(2.2).packages.zeroize(datetime[2], 2);
			s = MApp(2.2).packages.zeroize(datetime[3], 2);
			mi = MApp(2.2).packages.zeroize(datetime[4], 3);
			//document.getElementById('counttime1').innerHTML = '<span>'+d+'</span>d: <span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em> <sub>①</sub>';
			//document.getElementById('counttime2').innerHTML = '<span>'+d+'</span>d: <span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em> <sub>①</sub>';
			//setTimeout('cycleCountdown()', 1);
		}
		//cycleCountdown();
		$(function () {
			$(window).on('scroll',function(){
		    if ($(window).scrollTop() >= 520) {
		      $('#float').addClass('on');
		    }else{
		      $('#float').removeClass('on');
		    }
		  });  
		});
		function scrollTo(num){
			if (num==1) {
				$('html, body').animate({scrollTop:560}, 'slow');
			};
			if (num==2) {
				$('html, body').animate({scrollTop:1160}, 'slow');
			};
		}
	</script> 
	<?php echo $gJavascript['foot']; ?>
</body>
</html>