<?php
    error_reporting(E_ERROR);
    define("IObit","IObit");
    $pRootUrl = '../';
    include '../include/common.inc.php';
    if (empty($_GET['ref'])) $_GET['ref'] = 'imf2014newyear';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upgrade to IObit Malware Fighter 2 PRO</title>
<link type="text/css" rel="stylesheet" href="./style/style.css" />
<?php echo $gJavascript['public'];?>
<script type="text/javascript">
function countdownHiddendDiscount(time){
	if (time == 0){
		hiddenDiscount();
		return;
	}
	$('#countHiddendPopoutTime').html(time);
	time -= 1;
	setTimeout('countdownHiddendDiscount('+time+')', 1000);
}
function hiddenDiscount(){
	$('#popout').hide();
}
function showDiscount(){
	$('#popout').show();
	countdownHiddendDiscount(60);
	MApp(2.2).cookie.set('imfupgradeb', '1');
}
$(function () {
	$(window).scroll(function () {
		var sh=$(document).scrollTop();
		if (sh>200){
			$('#floatlayer').fadeIn(1000);	
			}else if (sh<200){
			$('#floatlayer').fadeOut(1000);
		}
	});
	// Countdown time display discount layer
	var discountPurchase = MApp(2.2).cookie.get('imfupgradeb');
	if (discountPurchase != '1'){
		setTimeout('showDiscount()', 120000);
	}
});
</script>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="popout">
  <div id="popout_lightbox">
    <div class="box_btp">
    	<dl>
    		<dt>Not decided?</dt>
    		<dd>We may help you make a good decision.</dd>
    	</dl>
    </div>
    <div class="box_mid">
      <div class="leftbox">
      	<dl>
      		<dt><span>Single Solution</span><img src="img/singelpack.png" alt="" /></dt>
      		<dd class="price">Only <strong>$14.77</strong> Original <del>$19.95</del> 1 Year / 1 PC</dd>
      		<dd><a href="http://www.iobit.com/buy.php?product=imf-update&ref=imf2014newyearpopc&aff=<?php echo $_GET['aff']; ?>" class="txtlink">Get Single Solution </a></dd>
      	</dl>
      	
      </div>
      
      <div class="rightbox">
      	<dl>
      		<dt><span>Gift Pack</span><img src="img/giftpack.png" alt="" /></dt>
      		<dd></dd>
      		<dd class="price">Only <strong>$19.95</strong> Original <del>$64.88</del> 1 Year / 3 PCs</dd>
      		<dd>
      			<div class="light_btnarea">
			        <a href="http://www.iobit.com/buy.php?product=imfpfebook&ref=imf2014newyearpopc&aff=<?php echo $_GET['aff']; ?>" class="light_checkbtn"><em><img src="img/giftbox.png" alt="" /></em><span>Get Gift Pack</span></a>	       
		        </div>
		        <div class="moneyback"><img src="img/moneyback.png" alt="" /></div>
      		</dd>
      	</dl>
      </div>      
      <div class="clear"></div>      
    </div>
    <div class="box_btm">
    	<ul>
    		<li class="tips">This offer is limited for <span id="countHiddendPopoutTime">60</span> seconds only!</li>
    		<li class="callorder">Or Call to Order: <span>1-855-855-6343</span> (Toll-Free 7*24)</li>
    		<li><a href="" class="pop_skip">Skip</a></li>
    	</ul>
    </div>
  </div>
  <div class="graylayer"></div>
</div>
<div id="main">
	<div class="floatlayer" id="floatlayer">
		<div class="moneyback"> You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 60 DAYS, or we'll send you a full refund. No questions asked. <a href="http://www.iobit.com/buy.php?product=imfpfebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Upgrade Now</a> </div>
		<div class="btn"> <span>Original <del>$64.88</del> Now $19.95</span> <a href="http://www.iobit.com/buy.php?product=imfpfebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="Purchase IObit Malware Fighter PRO to get Protected Folder for FREE!" class="checkbtn">Checkout >></a> 
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
		<h1>Save 70%, Get Extra Protection for Your PC Security & Our Gift Pack!</h1>
		<div class="procdetail">
			<div class="salebox">
				<span class="iconsale"></span>
				<dl>
					<dt><img src="img/boximf.png" alt="" /></dt>
					<dd class="intro"><span>IObit Malware Fighter PRO</span>With unique "Dual-Core" anti-malware engine, it’s your extra protection for PC security by removing the deepest hidden malware of all kinds.</dd>
					<dd>
						<ul>
							<li>Most Efficient to Remove the Deepest Malware</li>
							<li>100% Privacy Security with Real-time Protection</li>
							<li>Automated or Scheduled Scan without Interrupting</li>
							<li>Automatic and Frequent Database Updates</li>
						</ul>
					</dd>
					<dd class="txtlink"><a href="#compare">See more about PRO edition >></a></dd>
				</dl>
			</div>
			<div class="freebox">
				<span class="iconfree"></span>
				<dl>
					<dt><img src="img/pf_r.png" alt="" /></dt>
					<dd><span>Protected Folder </span>No Worries of Data Theft or Privacy Leaks!</dd>
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
					<td width="85" align="center"><img src="img/boximf_small.png" /></td>
					<td width="37"><img src="img/symble_add.png" alt="" /></td>
					<td width="90"><img src="img/pfsmall.png" alt="" /></td>
					<td width="37"><img src="img/symble_add.png" alt="" /></td>
					<td width="85" align="center"><img src="img/ebook.png" /></td>
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
							<a href="http://www.iobit.com/buy.php?product=imfpfebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="buybtn" title="Purchase IObit Malware Fighter PRO to get Protected Folder for FREE!">Active Now</a>
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
                <h3>"We have not had a problem since using your products."</h3>
                <dl class="user">
                    <dt><img src="img/bob_bassett.jpg" alt=""/></dt>
                    <dd>Bob Bassett</dd>
                    <dd>2013</dd>
                </dl>
                <dl class="quit">
                    <dt><img alt="quote" src="img/quote.png"></dt>
                    <dd>We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with IObit Malware Fighter Pro and Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence. We have not had a problem since using your products."</dd>
                </dl>
            </div>
            <div class="boxb" style="margin-top:0;">
                <h3>"I also had other programs for this purpose installed, but IMF always finds the problems first and blocks them."</h3>
                <dl class="user">
                    <dt><img src="img/peter_stoffers.jpg" alt=""/></dt>
                    <dd>Peter Stoffers</dd>
                    <dd>2012</dd>
                </dl>
                <dl class="quit">
                    <dt><img alt="quote" src="img/quote.png" /></dt>
                    <dd>Some years ago somebody drew my attention to IObit Malware Fighter. First I was sceptic. But after installing it, it became my favourite anti-malware program. It is very easy to use. Through the years it already has detected several threats and removed it. In cooperation with the other IObit programs, like for example ASC, I have a good PC protection. I now recommend these programs to all my friends and family."</dd>
                </dl>
            </div>
            <div class="clear"></div>
        </div>
		<div class="comparison_table" id="compare">
		  <table border="0" cellspacing="0" cellpadding="0" width="100%">
		      <thead>
		        <tr>
		          <th colspan="2" style="text-align:left">See what PRO edition can do for you:</th>
		          <th class="itemb"><span>IObit Malware Fighter FREE</span></th>
		          <th class="itema"><span>IObit Malware Fighter PRO</span></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
			        <td class="icons" width="45"><img src="img/icon_01.png"></td>
			        <td class="virtue">Basic Anti-Malware Function</td>
			        <td class="itemb"><img src="img/bluemark.png"/></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_02.png"></td>
			        <td class="virtue">Full Anti-Malware Ability with Unique "Dual-Core" Engine</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_03.png"></td>
			        <td class="virtue">Basic Real-time Protection against Malicious Behavior</td>
			        <td class="itemb"><img src="img/bluemark.png"/></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_04.png"></td>
			        <td class="virtue">Comprehensive Real-time Protection for Top PC Security</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_05.png"></td>
			        <td class="virtue">Prevent Virus Infection Carried by USB Disk</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_06.png"></td>
			        <td class="virtue">Detect Malicious Process Running in RAM</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_07.png"></td>
			        <td class="virtue">Detect Threats by Analyzing Malicious Action</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_08.png"></td>
			        <td class="virtue">Intelligently Works in Background without Interrupting</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_09.png"></td>
			        <td class="virtue">Automatic Update to the Latest Version</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_10.png"></td>
			        <td class="virtue">Free 24/7 Technical Support on Demand</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
		      </tbody>
		      <tfoot>
		        <tr>
		          <th colspan="2"></th>
		          <th class="itemb"><span>IObit Malware Fighter FREE</span><br />
		            Your current edition</th>
		          <th class="itema"><span>IObit Malware Fighter PRO</span><br />
		            <a href="http://www.iobit.com/buy.php?product=imfpfebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="tbbuybtn" >Buy Now</a><br />
					</span>
		        </th>
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
