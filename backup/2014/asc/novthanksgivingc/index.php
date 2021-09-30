<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl.'include/common.inc.php';
	//if (empty($_GET['ref'])) $_GET['ref'] = '';
	$_GET['ref'] = '2014july';
	
	function microtime_float(){
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}
	$buyNum = ceil(microtime_float()*1000/20000)-67875499;
	
	$packsNum = ceil(microtime_float()*2000/20000);
	$packsNum = 360-($packsNum%360);
	if ($_GET['action'] == 'getPacks'){
		echo $packsNum;
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Save 80% on ASC PRO for 3 PCs – IObit Thanksgving Special Sale</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>css/style.css"/>
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function decreasingPacks(){
	$.ajax({
		type: "GET",=
		url: "index.php",
		data: "action=getPacks&r="+Math.random(),
		success: function(packs){
			$('#packs').html(packs+' Packs');
			setTimeout('decreasingPacks()', 10000);
		}
	});
}
setTimeout('decreasingPacks()', 10000);
</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="maintop">
	<div class="wrapper">
    	<div class="content">
        	<div class="logo"><a href="http://www.iobit.com" target="_blank"></a></div>
            <div class="introduce">
            	<dl class="left">
                    <dt>Save <span>80%</span> on ASC PRO & Get Super Gift Pack for FREE!</dt>
                    <dd>Activate ASC PRO for 3 PCs, and get IObit Uninstaller PRO, Smart Defrag PRO and AMC Security PRO for FREE. <span><strong id="packs"><?php echo $packsNum; ?> Packs</strong> Left Today!</span></dd>	
                    <dd class="imgbox"><a href="http://www.iobit.com/buy.php?product=asc8iusdamc&ref=2014thanksgivingascc&aff=&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201411');"><img src="<?php echo $pResUrl; ?>img/giftpack.jpg" alt=""/></a></dd>
                </dl>
                <div class="lace">
                	<dl class="counttime">
                    	<dt>Time-limited Offer</dt>
                        <dd id="counttime"><span>00</span><span>00</span><span>00</span><em>000</em><sub>①</sub></dd>
                    </dl>
                    <dl class="middle">
                    	<dt>Only <span>$23.98</span> <del>$119.94</del></dt>
                        <dd><a href="http://www.iobit.com/buy.php?product=asc8iusdamc&ref=2014thanksgivingascc&aff=&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201411');" class="btnactivate">Activate Now</a></dd>
                        <dd><span><?php echo $buyNum; ?></span>people activated</dd>
                        <dd>1 year subscription / 3 PCs</dd>
                    </dl>
                    <dl class="payment">
                    	<dt><img src="<?php echo $pResUrl; ?>img/payment.jpg" alt="" /></dt>
                        <dd>100% Money Back Guarantee within 60 Days</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
  <div class="cross clearfix">
    <h2>Treat your PC to the Ultimate Performance with our Free Gift Pack!</h2>
    <div class="counttime" id="counttime1"><span>00</span><span>00</span><span>00</span><em>000</em><sub>①</sub></div>
  </div>
  <div class="ascintrobox">
  	<em></em>
  	<h3>What you can get by activating ASC PRO edition:</h3>
    <dl class="benfits">
      <dt><img src="<?php echo $pResUrl; ?>img/boxshot_asc.jpg" alt="" /></dt>
      <dd>Double the Speed of Your Slow PC!<sub>②</sub></dd>
      <dd>Clean and Fix Various Kinds of PC Problems!</dd>
      <dd>Boost Internet up to 300% Faster!</dd>
      <dd>Secure Your System and Online Experience!</dd>
      <dd><a href="#compare">Learn more about PRO edition &raquo;</a></dd>
    </dl>
  </div>
  <div class="giftpack">
  	<dl>
    	<dt><img src="<?php echo $pResUrl; ?>img/boxshot_iu.jpg" /></dt>
        <dd class="name">IObit Uninstaller PRO</dd>
        <dd>Most Powerful Uninstaller to Remove Plug-ins & Apps!</dd>
    </dl>
    <dl>
    	<dt><img src="<?php echo $pResUrl; ?>img/boxshot_sd.jpg" /></dt>
        <dd class="name">Smart Defrag PRO</dd>
        <dd>Get the Maximum Hard Drive Performance!</dd>
    </dl>
    <dl>
    	<dt><img src="<?php echo $pResUrl; ?>img/boxshot_amc.jpg" /></dt>
        <dd class="name">AMC Security PRO</dd>
        <dd>Secure Your Android devices against viruses.</dd>
    </dl>
  </div>
  <div class="payments">
    <dl class="tips">
    	<dt>Act now and SAVE 80%!</dt>
        <dd>Activate ASC PRO for 3 PCs, and get IObit Uninstaller PRO, Smart Defrag PRO and AMC Security PRO with the price of one. Time-limited Offer!</dd>
    </dl>
    <dl class="preorder">
    	<dd>Only <span>$23.98</span> <del>$119.94</del></dd>
        <dd><a href="http://www.iobit.com/buy.php?product=asc8iusdamc&ref=2014thanksgivingascc&aff=&refs=purchase_asc"  onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201411');" class="btnactivate">Activate Now</a></dd>
        <dt><span><?php echo $buyNum; ?></span> people activated!</dt>
    </dl>
    <div class="clear"></div>
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
            <a href="http://www.iobit.com/buy.php?product=asc8iusdamc&ref=2014thanksgivingascc&aff=&refs=purchase_asc"  onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201411');" class="tbbuybtn">Activate Now</a></p>
          </th>
        </tr>
      </tfoot>
    </table>
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>①.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      <dd>②.Data may vary based on different system or computer. </dd>
    </dl>
  </div>
  <div class="copy">Copyright &copy; 2005 - 2014 IObit. All Rights Reserved</div>
</div>
<div id="float">
    <div class="wrapper">
        <dl class="padinfo">
            <dt>Save <span>80%</span> on ASC PRO & Share New PC Feeling with Your Family!</dt>
            <dd><span><?php echo $buyNum; ?></span> people activated</dd>
        </dl>
        <dl class="paybox">
            <dt>Only<span>$23.98</span> <del>Original:$119.94</del></dt>
            <dd><a href="http://www.iobit.com/buy.php?product=asc8iusdamc&ref=2014thanksgivingascc&aff=&refs=purchase_asc"  onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201411');" class="btnactivate">Activate Now</a></dd>
            <dd class="counttime" id="counttime2"><span>00</span><span>00</span><span>00</span><em>000</em><sub>①</sub></dd>
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
			document.getElementById('counttime').innerHTML = '<span>'+h+'</span><span>'+i+'</span><span>'+s+'</span><em>'+mi+'</em><sub>①</sub>';
			document.getElementById('counttime1').innerHTML = '<span>'+h+'h</span>:<span>'+i+'m</span>:<span>'+s+'s</span>:<em>'+mi+'</em><sub>①</sub>';
			document.getElementById('counttime2').innerHTML = '<span>'+h+'h</span>:<span>'+i+'m</span>:<span>'+s+'s</span>:<em>'+mi+'</em><sub>①</sub>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();
		$(function () {
			$(window).on('scroll',function(){
		    if ($(window).scrollTop() >= 640) {
		      $('#float').addClass('on');
		    }else{
		      $('#float').removeClass('on');
		    }
		  });  
		});
</script> 
<?php echo $gJavascript['foot']; ?>
</body>
</html>