<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../';
	}
	include $pRootUrl.'include/common.inc.php';
	//if (empty($_GET['ref'])) $_GET['ref'] = '';
	$_GET['ref'] = '2014oct';
	
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
<title>Save 80% on ASC PRO & Get AMC PRO for FREE!</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>css/style.css"/>
<?php echo $gJavascript['public'];?><?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function decreasingPacks(){
	$.ajax({
		type: "GET",
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
<div class="header">
	<div class="wrapper">
    	<div class="logo"><a href="http://www.iobit.com" target="_blank"></a></div>
        <h2>Autumn Exclusive Sale</h2>
        <h3><span>Save 80%</span> on ASC PRO & Get AMC PRO FREE!</h3>        
        <div class="boxshots"><img src="<?php echo $pResUrl; ?>img/boxshot.jpg" alt="" /></div>
        <div class="buyarea">
          <div id="counttime" class="counttime"></div>
          <dl class="price">
            <dt>Special deal <span>$19.99</span> <em>$89.98</em></dt>
              <dd><a href="http://www.iobit.com/buy.php?product=asc7amc&ref=<?php echo $_GET['ref']; ?>&aff=&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201410');" class="btnbuy">Activate Now</a></dd>
              <dd>Activate ASC PRO for 3 PCs <br />and get your mobile protected for FREE!</dd>
          </dl>
          <div class="moneyback"><img src="<?php echo $pResUrl; ?>img/moneyback.jpg" alt="" /></div>
        </div>
        
    </div>
</div>
<div class="cross">
	<div class="wrapper">
    	<h3>Ultimate PC Performance & Ultimate Mobile Security!</h3>
        <div id="counttime1" class="counttime"></div>
    </div>
</div>
<div class="introduce">
	<div class="wrapper clearfix">
    	<dl class="asc">
        	<dt><span><img src="<?php echo $pResUrl; ?>img/boxshot_asc.jpg" alt="" /></span><p>What you can get by activating ASC PRO edition:</p></dt>
            <dd>Double the Speed of Your Slow PC! <sub>②</sub></dd>
            <dd>Clean and Fix Various Kinds of PC Problems!</dd>
            <dd>Boost Internet up to 300% Faster!</dd>
            <dd>Secure Your System and Online Experience!</dd>
            <dd><a href="#compare">Learn more about PRO edition »</a></dd>
        </dl>
        <dl class="amc">
        	<dt><span><img src="<?php echo $pResUrl; ?>img/boxshot_amc.jpg" alt="" /></span><p>What you can get from AMC Security PRO edition:</p></dt>
            <dd>Real-time protection against mobile threats!</dd>
            <dd>Speed up your device up to 200% faster!</dd>
            <dd>Protect your data from prying eyes!</dd>
            <dd>Never worry about a lost phone again!</dd>
            <dd><a href="#amc">Learn more about AMC edition »</a></dd>
        </dl>
    </div>
</div>
<div class="middle">
	<div class="wrapper clearfix">
        <dl class="left">
            <dd>Get ASC PRO for 3 PCs & AMC Security PRO now with the price of one! Time-limited Offer!</dd>
            <dt>Act now and SAVE <span>80%</span>!</dt>
        </dl>
        <dl class="link">
            <dt><span><?php echo $buyNum; ?></span> people activated</dt>
            <dd><a href="http://www.iobit.com/buy.php?product=asc7amc&<?php echo $_GET['ref']; ?>&aff=&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201410');" class="btnbuy">Activate Now</a></dd>
        </dl>
        <dl class="right">
            <dt>Now <span>$19.99</span></dt>
            <dd>Valued at <span>$89.98</span></dd>
        </dl>
    </div>
</div>
<div class="payment">
	<div class="wrapper">
		<img src="<?php echo $pResUrl; ?>img/payment.jpg" alt="" />
    </div>
</div>
<div class="bottom">
	<div class="wrapper">
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
                        <th class="itemb"><span>Advanced SystemCare Free</span><br />
                          Your current edition</th>
                        <th class="itema"><span>Advanced SystemCare PRO</span><br />
                          <a href="http://www.iobit.com/buy.php?product=asc7amc&<?php echo $_GET['ref']; ?>&aff=&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201410');" class="tbbuybtn">Activate Now</a> </th>
                      </tr>
                    </tfoot>
                  </table>
          </div>
          <div class="amcbox" id="amc">
               <h3>What does AMC Security do?</h3>
               <dl>
                   <dt><img src="<?php echo $pResUrl; ?>img/boxshot_amc_big.jpg" alt="" /></dt>
                   <dd><strong>Requires Android:</strong> 2.2 and up</dd>
                   <dd>AMC is designed to secure Mobiles and Tablets against viruses, malware and other threats, with anti-phishing, privacy locker, call blocker, and other security features! </dd>
                   <dd><strong>Key Benefits of AMC Security PRO:</strong> <p></p>Virus Database Auto Update; </p><p>Contacts & SMS Vault; </p><p>Customized Scan and Clean;</p><p>Anti-Phishing.</p></dd>
               </dl>
          </div>
          <dl class="annotation">
              <dt>Note:</dt>
              <dd>①.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
              <dd>②.Data may vary based on different system or computer. </dd>
          </dl>
          <div class="copy">Copyright &copy; 2005 - 2014 IObit. All Rights Reserved</div>
    </div>
</div>
<div class="floatlayer" id="floatlayer">
   <div class="wrapper">
      <dl class="left">
        <dt>Save <span>80%</span> ASC PRO & Get AMC Security PRO for Free!</dt>
        <dd><span><?php echo $buyNum; ?></span> people activated</dd>
      </dl>
      <div class="price">$19.99<span>Valued at <em>$89.98</em></span></div>
      <dl class="right">
        <dt><a href="http://www.iobit.com/buy.php?product=asc7amc&ref=<?php echo $_GET['ref']; ?>&aff=&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201410');" class="btnbuy">Activate Now</a></dt>
        <dd id="counttime2"></dd>
      </dl>
  </div>
</div>
<script type="text/javascript">
    $(function () {
        $(window).on('scroll',function(){
        if ($(window).scrollTop() > 600) {
          $('#floatlayer').addClass('on');
        }else{
          $('#floatlayer').removeClass('on');
        }
      });  
    });
</script>
<script type="text/javascript">
		function cycleCountdown(){
			var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
			var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
			d = MApp(2.2).packages.zeroize(datetime[0], 2);
			h = MApp(2.2).packages.zeroize(datetime[1], 2);
			i = MApp(2.2).packages.zeroize(datetime[2], 2);
			s = MApp(2.2).packages.zeroize(datetime[3], 2);
			mi = MApp(2.2).packages.zeroize(datetime[4], 3);
			document.getElementById('counttime').innerHTML = '<span>'+h+'h</span> : <span>'+i+'m</span> : <span>'+s+'s</span> : <em>'+mi+'</em><sub>①</sub>';
			document.getElementById('counttime1').innerHTML = '<span>'+h+'h</span> : <span>'+i+'m</span> : <span>'+s+'s</span> : <em>'+mi+'</em><sub>①</sub>';
			document.getElementById('counttime2').innerHTML = '<span>'+h+'h</span> : <span>'+i+'m</span> : <span>'+s+'s</span> : <em>'+mi+'</em> <sub>①</sub>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();
</script> 
<?php echo $gJavascript['foot']; ?>
</body>
</html>