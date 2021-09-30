<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
    $pRootUrl = '../';
	include '../include/common.inc.php';
	if (empty($_GET['ref'])) $_GET['ref'] = 'db2014bigd';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Celebration! Driver Booster PRO Users Reach 15,000,000</title>
<link type="text/css" rel="stylesheet" href="./style/style.css" />
<?php echo $gJavascript['public'];?>
<script type="text/javascript">
$(function () {
	$(window).scroll(function () {
		var sh=$(document).scrollTop();
		if (sh>200){
			$('#floatlayer').fadeIn(1000);	
			}else if (sh<200){
			$('#floatlayer').fadeOut(1000);
		}
	});
});
</script>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="main">
	<div class="floatlayer" id="floatlayer">
		<div class="moneyback"> You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 60 DAYS, or we'll send you a full refund. No questions asked. <a href="http://www.iobit.com/buy.php?product=dbsdebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db">Upgrade Now</a> </div>
		<div class="btn"> <span>Original <del>$104.83</del> Now $24.95</span> <a href="http://www.iobit.com/buy.php?product=dbsdebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" title="Purchase Driver Booster PRO to get Smart Defrag for FREE!" class="checkbtn">Checkout >></a> 
		<div class="countdown" id="counttime1">
			<span>0</span>d: <span>0</span>h: <span>0</span>m: <span>0</span>s <em>000</em>
		</div>
		 </div>
	</div>
	<div class="head">
		<div id="lang"><span id="google_translate_element"></span> </div>
		<div class="logo"><a href="http://www.iobit.com"></a></div>		
		<div id="counttime" class="countdown"><span class="day">00</span><span class="hor">00</span><span class="min">00</span><span class="sec">00</span><span class="minsec">999</span></div>
	</div>
	<div class="mbody">
		<h1>Save <span>75%</span>, Enjoy 300% Higher Driver Updating Speed!</h1>
		<div class="procdetail">
			<div class="salebox">
				<span class="iconsale"></span>
				<dl>
					<dt><a href="http://www.iobit.com/buy.php?product=dbsdebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db"><img src="img/boxdb.png" alt="" /></a></dt>
					<dd class="intro"><span>Driver Booster PRO</span>Enhanced technology and expanded database for faster,more secure and stable driver update.</dd>
					<dd>
						<ul>
							<li>Support More Hardware Devices</li>
							<li>Update Outdated Drivers More Promptly</li>
							<li>Backup Drivers for Safe Restore</li>
							<li>Enjoy 300% Higher Driver Updating Speed</li>
						</ul>
					</dd>
					<dd class="txtlink"><a href="#compare">See more about PRO edition >></a></dd>
				</dl>
			</div>
			<div class="freebox">
				<span class="iconfree"></span>
				<dl>
					<dt><img src="img/sd_r.png" alt="" /></dt>
					<dd><span>Smart Defrag PRO</span>Get the Maximum Hard Drive Performance!</dd>
				</dl>
			</div>
			<div class="freebox" style="margin-top:15px;">
				<span class="iconfree"></span>
				<dl>
					<dt><img src="img/ebook_r.png" alt="" /></dt>
					<dd><span>Windows Tweaks Guide</span>This complete, step-by-step system optimization guide is given to you for FREE</dd>
				</dl>
			</div>
		</div>
		<div class="pricebox">
			<table cellpadding="0" cellspacing="0" width="100%" class="pricetab">
				<tr>
					<td width="85" align="center"><img src="img/boxdb_small.png"</td>
					<td width="37"><img src="img/symble_add.png" alt="" /></td>
					<td width="90"><img src="img/sdsmall.png" alt="" /></td>
					<td width="37"><img src="img/symble_add.png" alt="" /></td>
					<td width="85" align="center"><img src="img/ebook.png"</td>
					<td width="65"><img src="img/symble_equal.png" alt="" /></td>
					<td width="175"><img src="img/price.png" alt="" /></td>
					<td width="268">
						<div class="buyarea">
							<div class="count">
							<?php
							function microtime_float(){
								list($usec, $sec) = explode(" ", microtime());
								return ((float)$usec + (float)$sec);
							}
							echo ceil(microtime_float()*1000/20000)-69041280;
							?>
							</div>
							<div class="giftbox"><img src="img/giftbox.png" alt="" /></div>
							<a href="http://www.iobit.com/buy.php?product=dbsdebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" class="buybtn" title="Purchase Driver Booster PRO to get Smart Defrag for FREE!">Active Now</a>
							<span>1 Year Subscription</span>
						</div>						
					</td>
					<td width="80"><img src="img/moneyback.png" alt="" /></td>
				</tr>
			</table>
		</div>
		<div class="clear"></div>
		<div class="awards">
			<h2 class="mb10">Product Awards</h2>
			<img src="img/awards-banner.gif" style="margin:20px 0;"> 
		</div>
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
		<div class="comparison_table" id="compare">
		  <table border="0" cellspacing="0" cellpadding="0" width="100%">
		      <thead>
		        <tr>
		          <th colspan="2" style="text-align:left">See what PRO edition can do for you:</th>
		          <th class="itemb"><span>Driver Booster Free</span></th>
		          <th class="itema"><span>Driver Booster Pro</span></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
			        <td class="icons" width="45"><img src="img/icon_01.png"></td>
			        <td class="virtue">Automatically Identify Outdated Drivers</td>
			        <td class="itemb"><img src="img/bluemark.png"/></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_02.png"></td>
			        <td class="virtue">Download and Update Outdated Drivers with One Click</td>
			        <td class="itemb"><img src="img/bluemark.png"/></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_03.png"></td>
			        <td class="virtue">Support More Comprehensive Hardware Devices</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_04.png"></td>
			        <td class="virtue">Enjoy Priority to Update Outdated Drivers Promptly</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_05.png"></td>
			        <td class="virtue">Backup Drivers for Safe Restore</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_06.png"></td>
			        <td class="virtue">Download and Update Drivers 300% Faster</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_07.png"></td>
			        <td class="virtue">Enhance Hardware Functionality for Top Performance</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_08.png"></td>
			        <td class="virtue">Automatic Update to the Latest Version</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_09.png"></td>
			        <td class="virtue">Free 24/7 Technical Support on Demand</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
		      </tbody>
		      <tfoot>
		        <tr>
		          <th colspan="2"></th>
		          <th class="itemb"><span>Driver Booster Free</span><br />
		            Your current edition</th>
		          <th class="itema"><span>Driver Booster PRO</span><br />
		            <a href="http://www.iobit.com/buy.php?product=dbsdebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" class="tbbuybtn" >Buy Now</a> </th>
		        </tr>
		      </tfoot>
		  </table>
	    </div>
		<div style="height:80px;"></div>
	</div>
	<div class="footer"></div>
</div>
<?php echo $gJavascript['foot']; ?>
<script type="text/javascript">
function cycleCountdown(){
	var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
	document.getElementById('counttime').innerHTML = '<span class="day">'+d+'</span><span class="hor">'+h+'</span><span class="min">'+i+'</span><span class="sec">'+s+'</span><span class="minsec">'+mi+'</span>';
	document.getElementById('counttime1').innerHTML = '<span>'+d+'</span>d: <span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em>';
	setTimeout('cycleCountdown()', 1);
}
cycleCountdown();
</script>
</body>
</html>
