<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
    date_default_timezone_set("Etc/GMT+7");
    $end_time = strtotime('2013-11-12 23:59:59').'000';
	$pRootUrl = '../../';
	include '../../include/common.inc.php';
	if (empty($_GET['ref'])) $_GET['ref'] = 'asc6sdpf';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IObit Anniversary Special Offer</title>
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
		//console.log(sh);
	});
});
</script>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="main">
	<div class="floatlayer" id="floatlayer">
		<div class="moneyback"> You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 60 DAYS, or we'll send you a full refund. No questions asked. <a href="http://www.iobit.com/buy.php?product=asc6sdpf&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Upgrade Now</a> </div>
		<div class="btn"> <span>Original <del>$99.95</del> Now $19.99</span> <a href="http://www.iobit.com/buy.php?product=asc6sdpf&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="ASC 6 license also works on ASC 7. Get it Now!" class="checkbtn">Checkout >></a> 
		<div class="countdown" id="counttime1">
			<span>0</span>d：<span>0</span>h：<span>0</span>m：<span>0</span>s <em>000</em>
		</div>
		 </div>
	</div>
	<div class="head">
		<div id="lang"><span id="google_translate_element"></span> </div>
		<div class="logo"><a href="http://www.iobit.com"></a></div>		
		<div class="countdown" id="counttime">
			<span>0</span>d：<span>0</span>h：<span>0</span>m：<span>0</span>s <em>000</em>
		</div>
		<div class="valid">Valid from Nov.5-Nov.12</div>
	</div>
	<div class="mbody">
		<h1>Save <span>80</span>%, Get 3 Fully Optimized PCs and Our Anniversary Gift Pack!</h1>
		<div class="intro" id="intro">
			<dl>
				<dt><img src="img/boxasc3pcs.png" alt="" /></dt>
				<dd class="icon_01">Double the Speed of Your Slow PC!</dd>
				<dd class="icon_04">Boost Internet up to 300% Faster!</dd>
				<dd class="icon_02">Clean and Fix All Kinds of PC Problems!</dd>
				<dd class="icon_03">Secure Your System and Online Experience!</dd>
				<dd class="txtlink"><a href="#compare">Learn more about PRO edition>></a></dd>
			</dl>
			<div class="moneyback"><img src="img/moneyback.png" alt="" /></div>
		</div>
		<div class="pricebox">
			<table cellpadding="0" cellspacing="0" width="100%" class="pricetab">
				<tr>
					<td width="85" align="center"><img src="img/boxsd.png" title="Smart Defrag PRO ensures MAXIMUM performance for your hard drive by accelerating your disk speed and streamlining your files intelligently, automatically and quietly!" /><span>Smart Defrag PRO</span></td>
					<td width="37"><img src="img/symble_add.png" alt="" /></td>
					<td width="135"><img src="img/boxasc.png" alt="" /></td>
					<td width="37"><img src="img/symble_add.png" alt="" /></td>
					<td width="85" align="center"><img src="img/boxpf.png" title="Protected Folder protects your privacy and important data from theft, loss or leaks. Just drag and drop your files and folders into Protected Folder's safety box and your data is sealed!" /><span>Protected Folder</span></td>
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
							echo ceil(microtime_float()*1000/20000)-67844300;
							?>
							</div>
							<a href="http://www.iobit.com/buy.php?product=asc6sdpf&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="buybtn" title="ASC 6 license also works on ASC 7. Get it Now!">Buy Now</a>
							<span>1 Year Subscription</span>
						</div>						
					</td>
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
			</div>
		</div>
		<div class="comparison_table" id="compare">
		  <table border="0" cellspacing="0" cellpadding="0" width="100%">
		      <thead>
		        <tr>
		          <th colspan="2" style="text-align:left">See what PRO edition can do for you:</th>
		          <th class="itemb"><span>Advanced Systemcare Free</span></th>
		          <th class="itema"><span>Advanced Systemcare PRO</span></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_01.png"></td>
		          <td class="virtue">Basic System Clean, Fix and Optimization</td>
		          <td class="itemb"><img src="img/bluemark.png"/></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_02.png"></td>
		          <td class="virtue">Ultimate System Tuneup for Top Performance</td>
		          <td class="itemb"></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_03.png"></td>
		          <td class="virtue">300% Internet Speed up with Internet Booster</td>
		          <td class="itemb"></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_04.png"></td>
		          <td class="virtue">Real-time Optimization with Active Optimize</td>
		          <td class="itemb"></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_05.png"></td>
		          <td class="virtue">Deep Windows Registry Clean</td>
		          <td class="itemb"></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_06.png"></td>
		          <td class="virtue">Maximum Hard Drive Performance</td>
		          <td class="itemb"></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_07.png"></td>
		          <td class="virtue">Basic Protection from Security Threats</td>
		          <td class="itemb"><img src="img/bluemark.png"/></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_08.png"></td>
		          <td class="virtue">Full Detection against Security Threats</td>
		          <td class="itemb"></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_09.png"></td>
		          <td class="virtue">Safe Online Experience with Surfing Protection</td>
		          <td class="itemb"></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_10.png"></td>
		          <td class="virtue">Auto Clean for Privacy Security Whenever You Log on</td>
		          <td class="itemb"><img src="img/bluemark.png"/></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_11.png"></td>
		          <td class="virtue">Auto Update to the Latest Version</td>
		          <td class="itemb"></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_12.png"></td>
		          <td class="virtue">Runs in the Background - Install and Forget It</td>
		          <td class="itemb"></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_13.png"></td>
		          <td class="virtue">Fantastic New Skins &amp; Themes</td>
		          <td class="itemb"></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		        <tr>
		          <td class="icons"><img src="img/compare_icon_14.png"></td>
		          <td class="virtue">Free 24/7 Technical Support on demand</td>
		          <td class="itemb"></td>
		          <td class="itema"><img src="img/redmark.png"/></td>
		        </tr>
		      </tbody>
		      <tfoot>
		        <tr>
		          <th colspan="2"></th>
		          <th class="itemb"><span>Advanced Systemcare Free</span><br />
		            Your current edition</th>
		          <th class="itema"><span>Advanced Systemcare PRO</span><br />
		            <a href="http://www.iobit.com/buy.php?product=asc6sdpf&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="tbbuybtn" title="ASC 6 license also works on ASC 7. Get it Now!">Buy Now</a> </th>
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
    function ShowTimes(){
        //var AfterTime= new Date("2013-11-01 00:00:00");
        LeaveTime = <?php echo $end_time;?> - new Date();
        console.log(LeaveTime);
        LeaveDays=Math.floor(LeaveTime/(1000*60*60*24));
        LeaveHours=Math.floor(LeaveTime/(1000*60*60)%24);
        LeaveMinutes=Math.floor(LeaveTime/(1000*60)%60);
        LeaveSeconds=Math.floor(LeaveTime/1000%60);
        var c=new Date();
        var q=c.getMilliseconds();
        if(q<10){
            q="00"+c.getMilliseconds();
        }
        if(q>=10 && q<100){
            q="0"+c.getMilliseconds();
        }
        $('#counttime').html("<span>"+LeaveDays+"</span>d：<span>"+LeaveHours+"</span>h：<span>"+LeaveMinutes+"</span>m：<span>"+LeaveSeconds+"</span>s <em>"+q+"</em>");
        $('#counttime1').html("<span>"+LeaveDays+"</span>d：<span>"+LeaveHours+"</span>h：<span>"+LeaveMinutes+"</span>m：<span>"+LeaveSeconds+"</span>s <em>"+q+"</em>");
    }
    setInterval(ShowTimes,10);
</script>
</body>
</html>
