<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
    date_default_timezone_set("Etc/GMT+7");
    $end = strtotime('2013-11-12 23:59:59');
	$end_time = getEndTime($end);
	
    function getEndTime($time){
    	if(time()<$time){
    		$end_time = $time.'000';
    		return $end_time;
    	}else{
    		$time = $time+345600;
    		return getEndTime($time);
    	}
    }
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
		<div class="btn"> <span>Original <del>$99.95</del> Now $19.99</span> <a href="http://www.iobit.com/buy.php?product=&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="CHECKOUT" class="checkbtn">Checkout >></a> 
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
		<div class="valid">Act before offer expired!</div>
	</div>
	<div class="mbody">
		<div class="intro">
			<h1>Save <span>80</span>%, Get 3 Fully Optimized PCs and Our SUPER Gift Pack!</h1>
			<div class="boxgroup"><img src="img/boxgroup.png" alt="" /></div>
			<dl class="amazoncard">
				<dt><img src="img/amazoncard.png" alt="" /></dt>
				<dd style="font-size:14px; text-indent:14px;">Gift Card Amount: <strong>$5.00</strong></dd>
				<dd class="discript">Amazon.com Gift Card never expires and is redeemable towards millions of items at Amazon.com. Your card will be delivered by email upon purchase being finished.</dd>
			</dl>
		</div>
		<div class="pricebox">
			<p class="describe">Activate ASC PRO today, Get Protected Folder and Smart Defrag for FREE, plus a complimentary <strong>$5 Amazon.com Gift Card</strong>* ! <br /><span class="brownyellow">Act now and SAVE 80%!</span></p>
			<div class="buyarea">
				<div class="count">
				<?php
				function microtime_float(){
					list($usec, $sec) = explode(" ", microtime());
					return ((float)$usec + (float)$sec);
				}
				$buy_num = ceil(microtime_float()*1000/20000)-67844300;
				echo $buy_num;
				?>
				</div>
				<a href="http://www.iobit.com/buy.php?product=&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="buybtn">Buy Now</a>
				<span>Today <em class="brownyellow">$24.99</em>   <del>$124.95</del>  </span>
			</div>
			<dl class="guarantee">
				<dt><img src="img/moneyback.png" alt="" /></dt>
				<dd>1 Year Subscription</dd>
			</dl>
		</div>
		<div class="clear"></div>
		<div class="procdetail">
			<div class="proc_asc salebox">
				<span class="iconsale"></span>
				<h3>What you can get by activating ASC PRO edition:</h3>
				<dl>
					<dt><img src="img/boxshot_asc.png" alt="" /></dt>
					<dd class="icon_01">Double the Speed of Your Slow PC!</dd>
					<dd class="icon_04">Boost Internet up to 300% Faster!</dd>
					<dd class="icon_02">Clean and Fix All Kinds of PC Problems!</dd>
					<dd class="icon_03">Secure Your System and Online Experience!</dd>
					<dd class="txtlink"><a href="#compare">Learn more about PRO edition>></a></dd>
				</dl>
			</div>
			<div class="freebox">
				<span class="iconfree"></span>
				<dl>
					<dt><img src="img/boxshot_pf.png" alt="" /></dt>
					<dd>Protected Folder protects your privacy and important data from theft, loss or leaks with its powerful safety box!</dd>
				</dl>
			</div>
			<div class="freebox" style="margin-top:15px;">
				<span class="iconfree"></span>
				<dl>
					<dt><img src="img/boxshot_sd.png" alt="" /></dt>
					<dd>Smart Defrag PRO keeps your hard drives in MAXIMUM performance with the latest defragmentation technology!</dd>
				</dl>
			</div>
		</div>
		<div class="clear"></div>
		<div class="pricebox">
			<p class="describe">Get all these powerful tools today with just $24.95 and be rewarded <strong class="brownyellow">a $5 Amazon.com Gift Card*</strong> as bonus gift!  <br /><span class="brownyellow">Act now and SAVE 80%!</span></p>
			<div class="buyarea">
				<div class="count">
				<?php
				echo $buy_num;
				?>
				</div>
				<a href="http://www.iobit.com/buy.php?product=&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="buybtn">Buy Now</a>
				<span>Today <em class="brownyellow">$24.99</em>   <del>$124.95</del>  </span>
			</div>
			<dl class="guarantee">
				<dt><img src="img/moneyback.png" alt="" /></dt>
				<dd>1 Year Subscription</dd>
			</dl>
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
		            <a href="http://www.iobit.com/buy.php?product=asc6sdpf&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="tbbuybtn">Buy Now</a> </th>
		        </tr>
		      </tfoot>
		  </table>
	    </div>
	    <p class="aboutdetail">*Amazon.com is not a sponsor of this promotion. Except as required by law, Amazon.com Gift Cards ("GCs") cannot be transferred for value or redeemed for cash. GCs may be used only for purchases of eligible goods at Amazon.com or certain of its affiliated websites. For complete terms and conditions, see www.amazon.com/gc-legal. GCs are issued by ACI Gift Cards, Inc., a Washington corporation. All Amazon ®, ™ & © are IP of Amazon.com or its affiliates. No expiration date or service fees.</p>
		<div style="height:80px;"></div>
	</div>
	<div class="footer"></div>
</div>
<?php echo $gJavascript['foot']; ?>
<script type="text/javascript">
    function ShowTimes(){
        //var AfterTime= new Date("2013-11-01 00:00:00");
        LeaveTime = <?php echo $end_time;?> - new Date();
        if(LeaveTime<0)	winodw.location.reload();
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
