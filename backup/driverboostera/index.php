
<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	$pRootUrl = '../';
	include '../include/common.inc.php';
	if (empty($_GET['ref'])) $_GET['ref'] = 'dbproregister';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Driver Booster PRO Register</title>
<link type="text/css" rel="stylesheet" href="./style/style.css" />
<?php echo $gJavascript['public'];?>
<script type="text/javascript">
$(function () {
	$(window).scroll(function () {
		var sh=$(document).scrollTop();
			if (sh>720){
				$('#floatlayer').fadeIn(1000);	
				}else if (sh<720){
				$('#floatlayer').fadeOut(1000);
			}
	});
});
</script>
<?php echo $gJavascript['head']; ?>
<!--[if IE 7]>
<style type="text/css">
#main .intro .bgwihte{min-height:auto;}
#main .intro .salebox{min-height:auto;}
#main .intro .freebox{min-height:auto;}
.left{float: left;}
.price em{left:0;}
</style>
<![endif]-->
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<a name="top"></a>
<div id="main">
	<div class="floatlayer" id="floatlayer">
		<div class="moneyback"> You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 60 DAYS, or we'll send you a full refund. No questions asked. <a href="http://www.iobit.com/buy.php?product=driver-booster2&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Upgrade Now</a> </div>
		<div class="btn"> <span>Original <del>$60.93</del> Now $24.95</span> <a href="http://www.iobit.com/buy.php?product=driver-booster2&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="CHECKOUT" class="checkbtn">Checkout >></a> <span>100% money back guarantee</span> </div>
	</div>
	<div class="head">
		<div id="lang"><span id="google_translate_element"></span> </div>
		<div class="logo"><a href="http://www.iobit.com"></a></div>
		<div class="maintitle">60% OFF</div>
		<div class="savepoint">Smarter, Safer, 300% Faster and Support More Hardware Devices!</div>
		
	</div>
	<div class="mbody">
		<div class="intro left">
			<div class="salebox">
				<div class="iconsale">iconsale</div>
				<div class="bgwihte">
					<div class="textconn">
						<div class="imgbig"></div>
						<div class="txtbox">
							<h4>Driver Booster PRO</h4>
							<dl>
								<dt>Enhanced technology and expanded database for faster,more secure and stable driver update.</dd>
								<dd>Support More Hardware Devices</dd>
								<dd>Update Outdated Drivers More Promptly</dd>
								<dd>Backup Drivers for Safe Restore</dd>
								<dd>Enjoy 300% Higher Driver Updating Speed</dd>
							</dl>
						</div>
						<div class="clear"></div>
					</div>
					<div class="link">Price <span>$24.95</span> &nbsp;&nbsp;&nbsp;<a href="http://www.iobit.com/buy.php?product=driver-booster2&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Get it now&gt;&gt;</a></div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="freebox ml10 left">
				<div class="iconfree">free</div>
				<div class="bgwihte">
					<div class="textconns">
						<h3 style="width:150px">Additional 2 PCs Supported</h3>
						<img src="img/pcbig.png" alt="" />Buy Driver Booster PRO today and we'll provide support for 2 additional PCs with your license for FREE so that you can share it with your family and friends.
						<div class="clear"></div>
					</div>
					<div class="link">Original <span class="del">$21.99</span>&nbsp;&nbsp;&nbsp;<a href="http://www.iobit.com/buy.php?product=driver-booster2&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Get it now&gt;&gt;</a></div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="freebox right">
				<div class="iconfree">free</div>
				<div class="bgwihte">
					<div class="textconns">
						<h3 style="width:210px">Windows Tweaks Guide</h3>
						 <img src="img/ebookbig.png" alt="" />Buy Driver Booster Pro today and we'll send you this complete, step-by-step system optimization guide FOR FREE. Learn tips and tricks that will help your system run faster and more efficiently!
						<div class="clear"></div>
					</div>
					<div class="link">Original <span class="del">$9.99</span>&nbsp;&nbsp;&nbsp;<a href="http://www.iobit.com/buy.php?product=driver-booster2&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Get it now&gt;&gt;</a></div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="pricebox"> <a name="cart"></a>
			<h2>Your Cart</h2>
			<table cellpadding="0" cellspacing="0" width="100%" class="pricetab">
				<tr class="grybg">
					<td width="60" class="tlborder"></td>
					<td width="250" class="topborder"></td>
					<td class="topborder"></td>
					<td width="120" class="topborder bf16 center">Original</td>
					<td width="120" class="topborder rborder bf16 center">Now</td>
				</tr>				
				<tr>
					<td height="50" class="tlborder center"><img src="img/dbsmall.png" alt="" /></td>
					<td class="topborder bf14">Driver Booster PRO</td>
					<td class="topborder f11">Identify & Update outdated drivers and improve PC performance.<br />
						<a href="http://www.iobit.com/buy.php?product=driver-booster2&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Get it now>></a></td>
					<td class="tlborder bf16 center"><span class="price">$28.95</span></td>
					<td class="tlborder rborder bf16 center red">$24.95</td>
				</tr>
				<tr>
					<td height="50" class="tlborder center"><img src="img/pcs.png" alt="" /></td>
					<td class="topborder bf14">Additional 2 PCs Supported</td>
					<td class="topborder f11">Get up-to-data drivers and peak performance for 2 additional PCs with your license code.<br />
						<a href="http://www.iobit.com/buy.php?product=driver-booster2&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Get it now>></a></td>
					<td class="tlborder bf16 center"><span class="price">$21.99<em></em></span></td>
					<td class="tlborder rborder bf16 center red">FREE</td>
				</tr>
				<tr>
					<td height="50" class="tlborder center"><img src="img/ebooks.png"/></td>
					<td class="topborder bf14">Windows Tweaks Guide</td>
					<td class="topborder f11">Get the complete, step-by-step system optimization e-Book completely FREE when you upgrade to PRO today. <a href="http://www.iobit.com/buy.php?product=driver-booster2&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Get it now>></a></td>
					<td class="tlborder bf16 center"><span class="price">$9.99<em></em></span></td>
					<td class="tlborder rborder bf16 center red">FREE</td>
				</tr>
				<tr>
					<td height="50" class="topborder center"></td>
					<td class="topborder bf14 myfont" colspan="2" align="right">Save 50% When You Purchase Today!(1 Year Subscription/3PCs)&nbsp;&nbsp;&nbsp;</td>
					<td class="tlborder bborder grybg bf16 center"><span class="price">$60.93<em></em></span></td>
					<td class="tlborder rborder bborder grybg bf16 center red">$24.95</td>
				</tr>
			</table>
		</div>
		<div class="checkout">
			<div class="moneyback"> You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 60 DAYS, or we'll send you a full refund. No questions asked. <a href="http://www.iobit.com/buy.php?product=driver-booster2&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Upgrade Now</a> </div>
			<div class="btn"> <a href="http://www.iobit.com/buy.php?product=driver-booster2&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="CHECKOUT" class="checkbtn order_url">Check out >></a> <span>100% money back guarantee</span> </div>
		</div>
		<div class="clear"></div>
		<div class="awards">
			<h2 class="mb10">Company Awards</h2>
			<img src="img/awards-banner.gif" style="margin:20px 0;"> </div>
		<div class="usersaying">
            <h2 class="mb10">Customer Review</h2>
            <div class="boxa" style="margin-top:0;">
                <h3>"Driver Booster did it all with just one click of the mouse. 19 drivers were updated in no time at all."</h3>
                <dl class="user">
                    <dt><img src="img/vince_lewis.jpg" alt=""/></dt>
                    <dd>Vince Lewis</dd>
                    <dd>2013</dd>
                </dl>
                <dl class="quit">
                    <dt><img alt="quote" src="img/quote.png"></dt>
                    <dd>I am delighted with Driver Booster. I have come across these types of program before but they only told me what drivers I needed then left me to search for them myself. Driver Booster did it all with just one click of the mouse. I was very impressed by the whole operation and of course the results. 19 drivers were updated in no time at all."</dd>
                </dl>
            </div>
            <div class="boxb" style="margin-top:0;">
                <h3>"I had 10 drivers that were out of date and the Driver Booster updated them all perfectly."</h3>
                <dl class="user">
                    <dt><img src="img/mike_goggans.jpg" alt=""/></dt>
                    <dd>Mike Goggans</dd>
                    <dd>2013</dd>
                </dl>
                <dl class="quit">
                    <dt><img alt="quote" src="img/quote.png" /></dt>
                    <dd>WOW! This is a great program. I upgraded my laptop from dual core to a quad and was having trouble updating some of the new hardware that I have installed. I had 10 drivers that were out of date and the Driver Booster updated them all perfectly. My laptop is completely up to date now and running smoothly. GOOD JOB.......I will recommend this program to my family and friends."</dd>
                </dl>
            </div>
            <div class="boxa">
                <h3>"It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"</h3>
                <dl class="user">
                    <dt><img src="img/wayne_bowler.jpg" alt=""/></dt>
                    <dd>Wayne Bowler</dd>
                    <dd>2013</dd>
                </dl>
                <dl class="quit">
                    <dt><img alt="quote" src="img/quote.png"></dt>
                    <dd>This is one of the best driver updater programs around. Microsoft has even led me astray by suggesting updates that wouldn’t work with my machine. This program knew what updates I needed without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"</dd>
                </dl>
            </div>
            <div class="boxb">
                <h3>"Driver Booster found I needed two driver updates, while the other driver updater failed to find them."</h3>
                <dl class="user">
                    <dt><img src="img/leslie_hutton.jpg" alt=""/></dt>
                    <dd>Leslie Hutton</dd>
                    <dd>2013</dd>
                </dl>
                <dl class="quit">
                    <dt><img alt="quote" src="img/quote.png"></dt>
                    <dd>I have recently installed Driver Booster, and found it like all other IObit products, brilliant. I already had a driver updater installed, but yours found I needed two driver updates, while the other driver updater failed to find them. It downloaded the required updates in no time at all. I am so pleased with this product."</dd>
                </dl>
            </div>
            <div class="clear"></div>
        </div>
		<div style="height:50px;"></div>
	</div>
	<div class="footer"></div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
