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
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='17473586-114',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Save 80% on ASC PRO & Save More for Autumn Shopping!</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>css/style.css"/>
<?php echo $gJavascript['public'];?><?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function addToCart(product){
	if($('#'+product+' a').attr('class') == 'addbtn_disable') return;
	$('#amc a').attr('class', 'addbtn');
	$('#iu a').attr('class', 'addbtn');
	$('#sd a').attr('class', 'addbtn');
	$('#'+product+' a').attr('class', 'addbtn_disable');
	var productCfgArr = Array();
	productCfgArr['buyUrl'] = Array();
	productCfgArr['name'] = Array();
	productCfgArr['listPrice'] = Array();
	productCfgArr['sellPrice'] = Array();
	productCfgArr['buyUrl']['amc'] = 'http://www.iobit.com/buy.php?product=asc8amc&ref=2014octascamc&aff=&refs=purchase_asc';
	productCfgArr['buyUrl']['iu'] = 'http://www.iobit.com/buy.php?product=asc8iu&ref=2014augasciu&aff=&refs=purchase_asc';
	productCfgArr['buyUrl']['sd'] = 'http://www.iobit.com/buy.php?product=asc8sd&ref=2014augascsd&aff=&refs=purchase_asc';
	productCfgArr['name']['amc'] = 'AMC Security PRO';
	productCfgArr['name']['iu'] = 'IObit Uninstaller PRO';
	productCfgArr['name']['sd'] = 'Smart Defrag PRO';
	productCfgArr['listPrice']['amc'] = '$19.99';
	productCfgArr['sellPrice']['amc'] = '$0';
	productCfgArr['listPrice']['iu'] = '$19.99';
	productCfgArr['sellPrice']['iu'] = '$0';
	productCfgArr['listPrice']['sd'] = '$19.99';
	productCfgArr['sellPrice']['sd'] = '$0';
	$('#additionName').html(productCfgArr['name'][product]);
	$('#additionListPrice').html(productCfgArr['listPrice'][product]);
	$('#additionSellPrice').html(productCfgArr['sellPrice'][product]);
	$('#buyButton').attr('href', productCfgArr['buyUrl'][product]);

		$('#totalSellPrice').html('$19.99');
		$('#totalListPrice').html('$109.98');

	$('.tiparrow').show();
}
</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="bodytop">
  <div class="wrapper">
    <div class="header">
      <a href="http://www.iobit.com" target="_blank"></a>
      <dl class="title">
        <dt>Spooktacular Halloween Sale</dt>
        <dd>Time-limited Offer Only</dd>
      </dl>
    </div>
    <div class="intro">      
      
      <div class="addproclist clearfix">
        <dl class="introtitle">
          <dt>Save 80% on ASC PRO & Choose a PRO Gift for <span>FREE</span>!</dt>
          <dd>Activate ASC PRO for 3 PCs, and get one of the three PRO products with $0!</dd>
        </dl>
        <dl class="mainproc">
          <dt><img src="<?php echo $pResUrl; ?>img/intro_boxshot_asc.jpg" alt="" /></dt>
          <dd>1 Year Subscription / 3 PCs</dd>
          <dd class="price">Only <span>$19.99</span> <del>$89.99</del></dd>
        </dl>
        <dl class="addproc" id="sd">
          <dt><img src="<?php echo $pResUrl; ?>img/boxshot_sd.jpg" alt="" /></dt>
          <dd class="name">Smart Defrag PRO</dd>
          <dd class="price">$0 <del>$19.99</del></dd>
          <dd><a href="#none" class="addbtn_disable" onclick="addToCart('sd');">add now <span>$0</span></a></dd>
          <dd class="introduce">Get the Maximum Hard Drive Performance!</dd>
        </dl>
        <dl class="addproc" id="iu">
          <dt><img src="<?php echo $pResUrl; ?>img/boxshot_iu.jpg" alt="" /></dt>
          <dd class="name">IObit Uninstaller PRO</dd>
          <dd class="price">$0 <del>$19.99</del></dd>
          <dd><a href="#none" class="addbtn" onclick="addToCart('iu');">add now <span>$0</span></a></dd>
          <dd class="introduce">Most Powerful Uninstaller to Remove Plug-ins &amp; Apps!</dd>
        </dl>
        <dl class="addproc" id="amc">
          <dt><img src="<?php echo $pResUrl; ?>img/boxshot_amc.jpg" alt="" /></dt>
          <dd class="name">AMC Security PRO</dd>
          <dd class="price">$0 <del>$19.99</del></dd>
          <dd><a href="#none" class="addbtn" onclick="addToCart('amc');">add now <span>$0</span></a></dd>
          <dd class="introduce">Secure Your Android devices against viruses.</dd>
        </dl>
      </div>
      <div class="choosecart">
        <div id="counttime" class="counttime"><span>00</span><span>00</span><span>00</span><em>000</em><sub>①</sub></div>
        <dl class="mainproc">
          <dt>Ultimate PC Performance</dt>
          <dd>ASC PRO  1 year / 3 PCs</dd>
          <dd class="price">Only: <span>$19.99</span> <del>$89.99</del></dd>
        </dl>
        <p class="addicon"><img src="<?php echo $pResUrl; ?>img/icon_add.png" alt="" /></p>
        <dl class="chooseproc">
          <dt id="additionName">Smart Defrag PRO</dt>
          <dd class="price"><span id="additionSellPrice">$0</span> <del id="additionListPrice">$19.99</del></dd>
        </dl>
        <a href="http://www.iobit.com/buy.php?product=asc8sd&ref=2014augascsd&aff=&refs=purchase_asc"  onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201408');" id="buyButton" class="activebtn">Activate Now</a>
        <p class="total">Total: <span id="totalSellPrice">$19.99</span> <del id="totalListPrice">$109.98</del></p>
        <p class="moneyback">100% Money-back Guarantee</p>
        <div class="tiparrow" style="display:none;"><img src="<?php echo $pResUrl; ?>img/tiparrow.png" alt="" /></div>
      </div>
    </div>
  </div>
</div>
  
<div class="wrapper">
  <div class="ascintrobox"> <img src="<?php echo $pResUrl; ?>img/boxshot_asc.jpg" alt="" />
    <dl class="benfits">
      <dt>What you can get by activating ASC PRO edition:</dt>
      <dd>Double the Speed of Your Slow PC!<sub>②</sub></dd>
      <dd>Clean and Fix Various Kinds of PC Problems!</dd>
      <dd>Boost Internet up to 300% Faster!</dd>
      <dd>Secure Your System and Online Experience!</dd>
      <dd><a href="#compare">Learn more about PRO edition &raquo;</a></dd>
    </dl>
  </div>
  <div class="payment"><img src="<?php echo $pResUrl; ?>img/payment.jpg" alt="" /></div>
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
          <th class="itema">
            <span>Advanced SystemCare PRO</span>
            <a href="http://www.iobit.com/buy.php?product=asc81pc1477&ref=2014augasc&aff=&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201408compare');" class="tbbuybtn">Activate Now</a>
            <p>$14.77 <del>$29.99</del> 1 Year / 1 PC</p>
          </th>
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
            <a href="http://www.iobit.com/buy.php?product=asc81pc1477&ref=2014augasc&aff=&refs=purchase_asc"  onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201408compare');" class="tbbuybtn">Activate Now</a>
            <p>$14.77 <del>$29.99</del> 1 Year / 1 PC</p>
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
			//document.getElementById('counttime1').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em>';
			//document.getElementById('counttime2').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();
</script> 
<?php echo $gJavascript['foot']; ?>
</body>
</html>