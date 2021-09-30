<?php
	define("IObit","IObit");
	error_reporting(0);
	$pRootUrl = '../../';
	include '../../include/common.inc.php';
	
	if(prob(5,10)){
		if (empty($_GET['ref'])) $_GET['ref'] = '2013mother';
		$url = 'http://www.iobit.com/buy.php?product=asc6ashampoo&ref='.$_GET['ref'];
	}else{
		if (empty($_GET['ref'])) $_GET['ref'] = '2013mother2';
		$url = 'http://www.iobit.com/buy.php?product=asc6ebook3pc4&ref='.$_GET['ref'];
	}

	function prob($x, $y){
		return (mt_rand(0, $y - 1) < $x);
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mother's Day Special Offer</title>
<link type="text/css" rel="stylesheet" href="style/2013may.css" />
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
<script type="text/javascript" src="./js/jquery.scroll.js"></script>
<script type="text/javascript">
var setArr = Array();
setArr['default'] = '';
setArr['ja'] = 'http://jp.iobit.com/lp/upgrade';
gLanguageObj.setJumpSecond = 0;
gLanguageObj.jump(setArr);
$(document).ready(function() {
	$("#scrollDiv").Scroll({line:3,speed:700,timer:5000});
});
</script>
<?php echo $gJavascript['head'];?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="main">
	<div class="head">
		<div class="wrapper">
			<div id="lang"><span id="google_translate_element"></span> </div>
	  		<a href="http://www.iobit.com" class="homelink">Iobit</a>	
	  		<h2>Mother's Day Special Offer</h2>		
            <div class="countdown">
	  			<ul>
			    	<li id="leftD">--</li>
			    	<li id="leftH">--</li>
			    	<li id="leftI">--</li>
			    	<li class="last" id="leftS">--</li>
			    </ul>	
	  		</div>
            <script type="text/javascript">showCountDown(2013,5,16,24);</script>    
		</div>
	</div>
	<div class="mainbody">			
		<div class="proinfo">
			<div class="boxshot"></div>
			<dl class="benifits">
				<dt>Advanced SystemCare 6 PRO</dt>
				<dd>Protect Internet and System Better</dd>
				<dd>Clean and Optimize Registry More Deeply</dd>
				<dd>Boost Internet up to 300% Faster</dd>
				<dd>Double the Speed of Your Slow PC</dd>
			</dl>
		</div>
		<div class="clear"></div>
		<div class="upgrade">
        	<h4>Upgrade Now to Get Extra<span>3</span>Gifts!</h4>
            <dl class="offer">
            	<dt><span><em>$99.96</em>$19.99</span>Click to See Your Offer</dt>
                <dd class="content"><strong>Upgrade to ASC PRO</strong> today and you will get 3 of the 5 gifts listed on the right for <span>FREE</span> randomly, with the total value up to <em>$99.96</em>! Now click to see what you’ll get! </dd>
                <dd class="rolling"  id="scrollDiv">
                	<ul>
                		<li><span>Alan ****</span> Get 3 gifts valued at $89.96</li>
                    	<li><span>Raymond ****</span> Get 3 gifts valued at $99.96</li>
                    	<li><span>Scott ****</span> Get 3 gifts valued at $79.97</li>
                    	<li><span>James ****</span> Get 3 gifts valued at $69.96</li>
                    	<li><span>Robert ****</span> Get 3 gifts valued at $89.96</li>
                    	<li><span>Keith ****</span> Get 3 gifts valued at $99.96</li>
                    	<li><span>Charles ****</span> Get 3 gifts valued at $79.97</li>
                    	<li><span>Joseph ****</span> Get 3 gifts valued at $69.96</li>
                    	<li><span>Anthony ****</span> Get 3 gifts valued at $89.96</li>
                    	<li><span>Andrew ****</span> Get 3 gifts valued at $99.96</li>
                    	<li><span>Yvonne ****</span> Get 3 gifts valued at $79.97</li>
                    	<li><span>Carol ****</span> Get 3 gifts valued at $69.96</li>
                    	<li><span>Shawn ****</span> Get 3 gifts valued at $89.96</li>
                    	<li><span>Bobby ****</span> Get 3 gifts valued at $99.96</li>
                    	<li><span>Dawn ****</span> Get 3 gifts valued at $79.97</li>
                    	<li><span>Pauline ****</span> Get 3 gifts valued at $69.96</li>
                    	<li><span>Ralph ****</span> Get 3 gifts valued at $89.96</li>
                    	<li><span>Brian ****</span> Get 3 gifts valued at $99.96</li>
                    	<li><span>William ****</span> Get 3 gifts valued at $79.97</li>
                    	<li><span>Philip</span> Get 3 gifts valued at $69.96</li>
                    </ul>
                </dd>
            </dl>
            <div class="arrbtn"></div>
            <div class="gifts">
            	<div class="btn"><a href="<?php echo $url;?>&aff=<?php echo $_GET['aff']; ?>" class="upgradebtn">Upgrade &amp; Get Gifts</a></div>
                <table cellpadding="0" cellspacing="0" width="100%" class="giftstab">
                	<tr>
                    	<td class="tipbox" id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">Send flower to your wife, mother, daughter, yourself, or any female friend to express your love or gratitude.</td>
                    	<td height="45" class="gifts_pic"><a onmouseover="mopen('m1')" onmouseout="mclosetime()"><img src="img/flower.png" alt="Mother's Day Flower"></a></td>
                        <td class="gifts_name"><span onmouseover="mopen('m1')" onmouseout="mclosetime()">Mother's Day Flower</span></td>
                        <td class="gifts_price"><span onmouseover="mopen('m1')" onmouseout="mclosetime()">$39.99</span></td>
                    </tr>
                    <tr>
                    	<td class="tipbox" id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">Get ASC PRO licensed on additional 2 PCs so that you can share the new PC feelings with your families and friends!</td>
                    	<td height="45" class="gifts_pic"><a onmouseover="mopen('m2')" onmouseout="mclosetime()"><img src="img/asc6.png" alt="Extra Support for 2 PCs" /></a></td>
                        <td class="gifts_name"><span onmouseover="mopen('m2')" onmouseout="mclosetime()">Extra Support for 2 PCs</span></td>
                        <td class="gifts_price"><span onmouseover="mopen('m2')" onmouseout="mclosetime()">$39.98</span></td>
                    </tr>
                    <tr>
                    	<td class="tipbox" id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">Ashampoo Snap 6 let you capture screenshots and screencasts in syle, and store or share valuable information.</td>
                    	<td height="45" class="gifts_pic"><a onmouseover="mopen('m3')" onmouseout="mclosetime()"><img src="img/ashampoo_small.png" alt="Ashampoo Snap 6" /></a></td>
                        <td class="gifts_name"><span onmouseover="mopen('m3')" onmouseout="mclosetime()">Ashampoo Snap 6</span></td>
                        <td class="gifts_price"><span onmouseover="mopen('m3')" onmouseout="mclosetime()">$19.99</span></td>
                    </tr>
                    <tr>
                    	<td class="tipbox" id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">Get a Free Diagnosis with the help of a live Tech Expert to troubleshoot and fix your technology glitches.</td>
                    	<td height="45" class="gifts_pic"><a onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="img/pcs.png" alt="Free Setup" /></a></td>
                        <td class="gifts_name"><span onmouseover="mopen('m4')" onmouseout="mclosetime()">Free Setup</span></td>
                        <td class="gifts_price"><span onmouseover="mopen('m4')" onmouseout="mclosetime()">$19.99</span></td>
                    </tr>
                    <tr>
                    	<td class="tipbox" id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">Get rid of PC troubles with the help of this complete, step-by-step system optimization guide.</td>
                    	<td height="45" class="gifts_pic"><a onmouseover="mopen('m5')" onmouseout="mclosetime()"><img src="img/ebooks.png" alt="Windows Tweak ebook"></a></td>
                        <td class="gifts_name"><span onmouseover="mopen('m5')" onmouseout="mclosetime()">Windows Tweak ebook</span></td>
                        <td class="gifts_price"><span onmouseover="mopen('m5')" onmouseout="mclosetime()">$9.99</span></td>
                    </tr>
                </table>
            </div>
            <div class="clear"></div>
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
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;
function mopen(id)
{	
	mcancelclosetime();if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';
}
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}
document.onclick = mclose; 
</script>
<?php echo $gJavascript['foot']; ?>
</body>
</html>