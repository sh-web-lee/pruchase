<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	$pRootUrl = '../../';
	include '../../include/common.inc.php';	
	if (empty($_GET['ref'])) $_GET['ref'] = 'familypack';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Save 80% with our most popular Family Pack!</title>
<link type="text/css" rel="stylesheet" href="style/2013mar.css" />
<?php echo $gJavascript['public'];?>
<script type="text/javascript">
var setArr = Array();
setArr['default'] = '';
setArr['ja'] = 'http://jp.iobit.com/lp/upgrade';
setArr['ru'] = 'http://ru.iobit.com/pages/asc-upgrade.htm';
gLanguageObj.setJumpSecond = 0;
gLanguageObj.jump(setArr);

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
<div id="main">
	<div class="floatlayer" id="floatlayer">
		<div class="maintxt">Save 80% with our most popular Family Pack! </div>
		<div class="btn"> <span>Original <del>$88.96</del> Now $14.77</span> <a href="http://www.iobit.com/buy.php?product=asc6ebook3pc&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="CHECKOUT" class="checkbtn">Checkout >></a> <span>100% money back guarantee</span> </div>
	</div>
	<div class="head">
		<div class="wrapper">
			<div id="lang"><span id="google_translate_element"></span> </div>
	  		<a href="http://www.iobit.com" class="homelink">Iobit</a>	
	  		<h2>Save <span>80%</span> with our most popular Family Pack!</h2>	
	  		<div class="countdown">
	  			<ul>
			    	<li id="leftD">--</li>
			    	<li id="leftH">--</li>
			    	<li id="leftI">--</li>
			    	<li class="last" id="leftS">--</li>
			    </ul>	
	  		</div>
            <script type="text/javascript">showCountDown(2013,6,27,24);</script>
		</div>
	</div>
	<div class="mainbody">			
		<h3>When you enjoy the new PC feeling, don’t forget to share it with your families!</h3>
		<div class="proinfo">
			<div class="boxshot"></div>
			<dl class="benifits">
				<dt>Advanced SystemCare 6 PRO</dt>
				<dd>Protect Internet and System Better</dd>
				<dd>Clean and Optimize Registry More Deeply</dd>
				<dd>Boost Internet up to 300% Faster</dd>
				<dd>Double the Speed of Your Slow PC</dd>
			</dl>
			<div class="moneyback"></div>
		</div>
		<div class="comprestab">
			<div class="totlenum">
			<?php
			function microtime_float(){
				list($usec, $sec) = explode(" ", microtime());
				return ((float)$usec + (float)$sec);
			}
			echo ceil(microtime_float()*1000/20000)-67844300;
			?></div>
			<table cellpadding="0" cellspacing="0" width="100%" class="compress">
				<tr>
					<td width="315">
						<a href="http://www.iobit.com/buy.php?product=asc61pc1297&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td><span class="itema_head">Single Solution</span></td>
								</tr>
								<tr>
									<td><span class="itema_price">$12.97 <em>1 year / 1 PC</em></span></td>
								</tr>
								<tr>
									<td><a href="http://www.iobit.com/buy.php?product=asc61pc1297&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="btna">Get it Now</a></td>
								</tr>
							</table>
						</a>
					</td>
					<td width="350">
						<a href="http://www.iobit.com/buy.php?product=asc6ebook3pc&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td><span class="itemb_head">Family Pack</span></td>
								</tr>
								<tr>
									<td><span class="itemb_price">$14.77 <em>1 year / 3 PCs</em></span></td>
								</tr>
								<tr>
									<td><a href="http://www.iobit.com/buy.php?product=asc6ebook3pc&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="btnb">Get it Now<span></span></a></td>
								</tr>
							</table>
						</a>
						
					</td>
				</tr>
				<tr>
					<td class="lists"><strong>$1.08</strong> Per PC per month</td>
					<td class="lists"><strong class="c_yellow">$0.55</strong> Per PC per month</td>
				</tr>
				<tr>
					<td class="lists"><strong>1 PC</strong> Supported</td>
					<td class="lists"><strong class="c_yellow">3 PCs</strong> Supported</td>
				</tr>
				<tr>
					<td class="lists">\</td>
					<td class="lists" valign="middle"><img src="img/icons.png">&nbsp;&nbsp;<strong class="c_yellow">$9</strong> Windows Tweak ebook&nbsp;&nbsp;<sup>FREE</sup></td>
				</tr>
				<tr>
					<td class="lists">\</td>
					<td class="lists" valign="middle"><img src="img/icons.png">&nbsp;&nbsp;<strong class="c_yellow">$19.99</strong> Free Setup&nbsp;&nbsp;<sup>FREE</sup></td>
				</tr>
				<tr>
					<td class="lists"><del>$14.77</del>&nbsp;&nbsp;Save 35%</td>
					<td class="lists"><del>$88.96</del>&nbsp;&nbsp;Save <strong class="c_yellow">80%</strong></td>
				</tr>
			</table>
		</div>
		<div class="awards">
			<h4>Product Awards</h4>
			<img src="img/awards.jpg">
		</div>
		<div class="review">
			<h4>Over 150 Million Users Trust ASC</h4>
			<div class="clearbox">
				<dl class="personal_info">
					<dt><img src="img/jane_mcclain.jpg"></dt>
					<dd>Jane McClain, 2012</dd>
				</dl>
				<dl class="quote">
					<dt><img src="img/quote.jpg"></dt>
					<dd>The Advanced-System Care Pro keeps my computer well cleaned. Not only that, their customer service is excellent. They persevered with courteous help until I was able to solve my problem of sending a gift of this ASC service to another person. This is evidence of a good company."</dd>
				</dl>
			</div>
			<div class="clearbox">
				<dl class="personal_info">
					<dt><img src="img/bob.jpg"></dt>
					<dd>Bob Bassett, 2012</dd>
				</dl>
				<dl class="quote">
					<dt><img src="img/quote.jpg"></dt>
					<dd>We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with  Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence. "</dd>
				</dl>
			</div>
			<div class="clearbox">
				<dl class="personal_info">
					<dt><img src="img/almir.jpg"></dt>
					<dd>Almir Romboli Tavares, 2012</dd>
				</dl>			
				<dl class="quote">
					<dt><img src="img/quote.jpg"></dt>
					<dd>Advanced System Care Pro has proved to be a trusted tool, automatically improving performance and security in a simple interface and with a great support. I recommend it to all my Family and friends."</dd>
				</dl>
			</div>
			<div class="clearbox">
				<dl class="personal_info">
					<dt><img src="img/gordon.jpg"></dt>
					<dd>Gordon Griswold, 2012</dd>
				</dl>	
				<dl class="quote">
					<dt><img src="img/quote.jpg"></dt>
					<dd>In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions.  IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</dd>
				</dl>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function () {
	$(window).scroll(function () {
		var sh=$(document).scrollTop();
			if (sh>620){
				$('#floatlayer').fadeIn(1000);	
				}else if (sh<620){
				$('#floatlayer').fadeOut(1000);
			}
	});
});
</script>
<?php echo $gJavascript['foot']; ?>
</body>
</html>