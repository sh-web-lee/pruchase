
<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	$pRootUrl = '../../';
	include '../../include/common.inc.php';
	if (empty($_GET['ref'])) $_GET['ref'] = 'asc6ashampoo';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IObit April Special Offer</title>
<link type="text/css" rel="stylesheet" href="./style/style.css" />
<meta name="description" content="Buy Advanced SystemCare 6 Pro today, OR get both top PC performance & ultimate PC security with Advanced SystemCare Ultimate." />
<?php echo $gJavascript['public'];?>
<script type="text/javascript">
var setArr = Array();
setArr['default'] = '';
setArr['ja'] = 'http://jp.iobit.com/lp/upgrade';
gLanguageObj.setJumpSecond = 0;
gLanguageObj.jump(setArr);

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

function showCountDown(year,month,day,hour){
	var now = new Date();
	var endDate = new Date(year, month-1, day, hour);
	var endTime = endDate.getTime()-now.getTime();
	var endSecond = parseInt(endTime/1000);
	var leftDay = Math.floor(endSecond/(60*60*24));
	var leftHour = Math.floor((endSecond-leftDay*24*60*60)/3600);
	var leftMinute = Math.floor((endSecond-leftDay*24*60*60-leftHour*3600)/60);
	var leftSecond = Math.floor(endSecond-leftDay*24*60*60-leftHour*3600-leftMinute*60);
	leftDay = leftDay.toString();
	if (leftDay.length < 2) leftDay = '0'+leftDay;
	leftHour = leftHour.toString();
	if (leftHour.length < 2) leftHour = '0'+leftHour;
	leftMinute = leftMinute.toString();
	if (leftMinute.length < 2) leftMinute = '0'+leftMinute;
	leftSecond = leftSecond.toString();
	if (leftSecond.length < 2) leftSecond = '0'+leftSecond;
	$('#leftD').html(leftDay);
	$('#leftH').html(leftHour);
	$('#leftI').html(leftMinute);
	$('#leftS').html(leftSecond);
	setTimeout('showCountDown('+year+','+month+','+day+','+hour+')',1000);
}
</script>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<a name="top"></a>
<div id="main">
	<div class="floatlayer" id="floatlayer">
		<div class="moneyback"> You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 30 DAYS, or we'll send you a full refund. No questions asked. <a href="http://www.iobit.com/buy.php?product=asc6ebook3pc&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Upgrade Now</a> </div>
		<div class="btn"> <span>Original <del>$99.95</del> Now $19.99</span> <a href="http://www.iobit.com/buy.php?product=asc6ashampoo&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="CHECKOUT" class="checkbtn">Checkout >></a> <span>100% money back guarantee</span> </div>
	</div>
	<div class="head">
		<div id="lang"><span id="google_translate_element"></span> </div>
		<div class="logo"><a href="http://www.iobit.com"></a></div>
		<div class="maintitle">April Special Offer</div>
		<div class="savepoint">Save <span>80%</span>, Get 3 Fully Optimized PC and the Best Screen Capture Tool! </div>
		<!-- <div class="countdown">
		  			<ul>
		    	<li id="leftD">--</li>
		    	<li id="leftH">--</li>
		    	<li id="leftI">--</li>
		    	<li class="last" id="leftS">--</li>
		    </ul>	
		  		</div>
		        <script type="text/javascript">showCountDown(2013,4,26,24);</script> -->
		<dl class="state">
			<dt>
				<span>
					<?php
			function microtime_float(){
				list($usec, $sec) = explode(" ", microtime());
				return ((float)$usec + (float)$sec);
			}
			echo ceil(microtime_float()*1000/20000)-67844300;
			?>
				</span>
			</dt>
			<dd></dd>
		</dl>
	</div>
	<div class="mbody">
		<div class="intro">
			<div class="salebox">
				<div class="iconsale">iconsale</div>
				<div class="bgwihte">
					<div class="textconn">
						<div class="imgbig"></div>
						<div class="txtbox">
							<h4>Advanced SystemCare 6</h4>
							<dl>
								<dt>Provides an automated and all-in-one PC care service for TOP PC performance</dt>
								<dd>Protect Internet and System Better</dd>
								<dd>Clean and Optimize Registry More Deeply</dd>
								<dd>Boost Internet up to 300% Faster</dd>
								<dd>Double the Speed of Your Slow PC</dd>
							</dl>
						</div>
						<div class="clear"></div>
					</div>
					<div class="link">Original <span class="del">$29.99</span> Now $19.99&nbsp;&nbsp;&nbsp;<a href="http://www.iobit.com/buy.php?product=asc6ashampoo&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Get it now&gt;&gt;</a></div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="freebox ml10">
				<div class="iconfree">free</div>
				<div class="bgwihte">
					<div class="textconns">
						<h3 style="width:150px">Ashampoo Snap 6</h3>
						<img src="img/ashampoo_big.png" alt="" />Store and share valuable information as images and videos. Create screenshots and screencasts in style with Ashampoo Snap 6. Capture and save the moment, permanently!
						<div class="clear"></div>
					</div>
					<div class="link">Original <span class="del">$19.99</span>&nbsp;&nbsp;&nbsp;<a href="http://www.iobit.com/buy.php?product=asc6ashampoo&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Get it now&gt;&gt;</a></div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="freebox right">
				<div class="iconfree">free</div>
				<div class="bgwihte">
					<div class="textconns">
						<h3 style="width:210px">Gift for Your Family</h3>
						 <img src="img/g.png" alt="" />You can get <span>additional support for 2 PCs and an eBook for Windows Tweak Guide</span> when you buy ASC today. Share it with your families and they’ll thank you for a lightning fast PC!
						<div class="clear"></div>
					</div>
					<div class="link">Original <span class="del">$49.97</span>&nbsp;&nbsp;&nbsp;<a href="http://www.iobit.com/buy.php?product=asc6ashampoo&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Get it now&gt;&gt;</a></div>
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
					<td height="50" class="tlborder center"><img src="img/asc6.png" alt="Advancd SystemCare 6" /></td>
					<td class="topborder bf14">Advanced SystemCare 6 PRO</td>
					<td class="topborder f11">Boost your PC performance up to 300% and get full protection.<br />
						<a href="http://www.iobit.com/buy.php?product=asc6ashampoo&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Get it now>></a></td>
					<td class="tlborder bf16 center"><span class="price">$29.99<em></em></span></td>
					<td class="tlborder rborder bf16 center red">$19.99</td>
				</tr>
				<tr>
					<td height="50" class="tlborder center"><img src="img/ashampoo_small.png" alt="Ashampoo Snap 6" /></td>
					<td class="topborder bf14">Ashampoo Snap 6</td>
					<td class="topborder f11">Record and document anything you see on your screen as screenshot images and video screencasts with audio support.<br />
						<a href="http://www.iobit.com/buy.php?product=asc6ashampoo&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Get it now>></a></td>
					<td class="tlborder bf16 center"><span class="price">$19.99<em></em></span></td>
					<td class="tlborder rborder bf16 center red">FREE</td>
				</tr>
				<tr>
					<td height="50" class="tlborder center"><img src="img/gs.png"/></td>
					<td class="topborder bf14">Gift for Your Family</td>
					<td class="topborder f11">With your ASC license supporting extra 2 PCs and a system tweak guide, you can share the new PC feeling with families and friends now! <a href="http://www.iobit.com/buy.php?product=asc6ashampoo&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Get it now>></a></td>
					<td class="tlborder bf16 center"><span class="price">$49.97<em></em></span></td>
					<td class="tlborder rborder bf16 center red">FREE</td>
				</tr>
				<tr>
					<td height="50" class="topborder center"></td>
					<td class="topborder bf14"></td>
					<td class="topborder myfont">Save 80% When You Purchase Today!(1Year/3PCs)</td>
					<td class="tlborder bborder grybg bf16 center"><span class="price">$99.95<em></em></span></td>
					<td class="tlborder rborder bborder grybg bf16 center red">$19.99</td>
				</tr>
			</table>
		</div>
		<div class="checkout">
			<!-- <div class="moneyback"> You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 30 DAYS, or we'll send you a full refund. No questions asked. <a href="http://www.iobit.com/buy.php?product=asc6ashampoo&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Upgrade Now</a> </div> -->
			<dl class="callhelp">
				<dd>OR call to order with the help of a live tech support</dd>
				<dt>1-855-287-1455 <span>(Toll-FREE)</span></dt>
			</dl>
			<img src="img/moneyback.png" alt="" />
			<div class="btn"> <a href="http://www.iobit.com/buy.php?product=asc6ashampoo&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="CHECKOUT" class="checkbtn order_url">Check out >></a> <span>100% money back guarantee</span> </div>
		</div>
		<div class="clear"></div>
		<div class="awards">
			<h2 class="mb10">Product Awards</h2>
			<img src="img/awards-banner.gif" style="margin:20px 0;"> </div>
		<div class="usersaying">
			<h2 class="mb10">Customer Review</h2>
			<div class="boxa" style="margin-top:0;">
				<h3>" I'm really happy I upgraded, it puts my mind at ease and does all the work "</h3>
				<dl class="user">
					<dt><img src="img/jane_mcclain.jpg" alt=""/></dt>
					<dd>Jane McClain</dd>
					<dd>2012</dd>
				</dl>
				<dl class="quit">
					<dt><img alt="quote" src="img/quote.png"></dt>
					<dd>The Advanced-System Care Pro keeps my computer well cleaned. Not only that, their customer service is excellent. They persevered with courteous help until I was able to solve my problem of sending a gift of this ASC service to another person. This is evidence of a good company."</dd>
				</dl>
			</div>
			<div class="boxb" style="margin-top:0;">
				<h3>" Cleaned up Spyware and Malware My antivirus lets slip through "</h3>
				<dl class="user">
					<dt><img src="img/bob.jpg" alt=""/></dt>
					<dd>Bob Bassett</dd>
					<dd>2012</dd>
				</dl>
				<dl class="quit">
					<dt><img alt="quote" src="img/quote.png" /></dt>
					<dd>We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"</dd>
				</dl>
			</div>
			<div class="clear"></div>
			<!--<div class="mlink" id="opentxt"><a onclick="$('#opentxt').hide();$('#hiddenfeed').show();" href="#hidden">See More >></a></div>
                        <a name="hidden"></a>-->
			<div id="hiddenfeed">
				<div class="boxa">
					<h3>" It takes care of everything in the background "</h3>
					<dl class="user">
						<dt><img src="img/almir.jpg" alt=""/></dt>
						<dd>Almir Romboli Tavares</dd>
						<dd>2012</dd>
					</dl>
					<dl class="quit">
						<dt><img alt="quote" src="img/quote.png"></dt>
						<dd>Advanced System Care Pro has proved to be a trusted tool, automatically improving performance and security in a simple interface and with a great support. I recommend it to all my Family and friends."</dd>
					</dl>
				</div>
				<div class="boxb">
					<h3>" My system has never run better "</h3>
					<dl class="user">
						<dt><img src="img/gordon.jpg" alt=""/></dt>
						<dd>Gordon Griswold</dd>
						<dd>2012</dd>
					</dl>
					<dl class="quit">
						<dt><img alt="quote" src="img/quote.png"></dt>
						<dd>In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</dd>
					</dl>
				</div>
				<div class="clear"></div>
				<!--<div class="mlink"><a href="#top" onclick="$('#opentxt').show();$('#hiddenfeed').hide();">Back to Top >></a></div>--> 
			</div>
		</div>
		<div style="height:50px;"></div>
	</div>
	<div class="footer"></div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
