<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$pc1ref = 'imf1pc2015febc';
$pc3ref = 'imf3pc2015febc';
//if($_GET['ref']=='imfirsource'){
//    $pc3ref=$pc1ref='imfirsource';
//}
//if($_GET['x']=='imfxmaspopup'){
//    $pc3ref=$pc1ref='imfxmaspopup';
//}

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) - 68799080;

$packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>80% OFF! Activate IMF PRO to Protect PC and Online Experience!</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="mian">
	<div id="header" class="warpper">
  	<a href="http://www.iobit.com/en/index.php" target="_blank"></a>
    <ul id="counttime">
        <li>12<span>Hr :</span></li>
        <li>12<span>m :</span></li>
        <li>12<span>s :</span></li>
        <li class="ms">999<span>ms</span> <sup>*</sup></li>
    </ul>
    <h1>XMAS Special Sale</h1>
    <h2>Save <span>80%</span> to protect your family and yourself online</h2>
  </div>

  <div class="cor warpper">
  	<div id="banner">
    	<img src="<?php echo $pResUrl; ?>images/imf.jpg">
      <dl>
      	<dt>IObit Malware Fighter 3 PRO</dt>
        <dd>Most Efficient to Remove the Deepest Malware</dd>
        <dd>100% Privacy Security with Real-time Protection <span style="font-size: 12px;">2*</span></dd>
        <dd>Block Homepage Hijacking & Malicious Website</dd>
        <dd>Automated or Scheduled Scan without Interrupting</dd>
        <p><a href="#" onclick="goTaget($('.users'))">Learn more about PRO edition >></a></p>
      </dl>
    </div>
    <div class="buy">
    	<div class="left">
      	<p class="first">Single Solution <br> <font>$19.95</font> <em><del>$39.95</del></em></p>
        <a href="http://www.iobit.com/buy.php?product=imf-upgrade3&ref=<?php echo $pc1ref;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'christmas2015-en-aff');" class="btn"><img src="<?php echo $pResUrl; ?>images/shop.png">Get It Now</a>
        <p class="size2"><strong>1 Year / 1 PC</strong> <br> <strong>$1.66</strong> per PC per month</p>
        <p class="size1">/</p>
        <p class="size1">/</p>
        <p class="size1">/</p>
        <p><del>$39.95</del>  Save 50%</p>
      </div>
      <!--right-->
      <div class="right">
      	<p class="first">Family Pack<br> <font>$23.99</font> <em><del>$114.88</del></em></p>
        <a href="http://www.iobit.com/buy.php?product=imfiusdpf2399&ref=<?php echo $pc3ref;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'christmas2015-en-aff');" class="btn"><img src="<?php echo $pResUrl; ?>images/shop.png">Get It Now</a>
        <p class="size2"><strong>1 Year / 3 PCs</strong><br> Only <strong>$0.67</strong> per PC per month</p>
        <ul>
        	<li><span class="name">IObit Uninstaller PRO</span><span><del>$19.99</del></span> <font class="free">FREE</font></li>
          <li><span class="name">Smart Defrag PRO  </span><span><del>$19.99</del></span> <font class="free">FREE</font></li>
          <li><span class="name">Protected Folder </span><span><del>$19.95</del></span> <font class="free">FREE</font></li>
        </ul>
        <p><del>$114.88</del>&nbsp; Save <b class="size">80%</b></p>
      </div>
     	<div class="clear"></div>
      <dl>
      	<dt><img src="<?php echo $pResUrl; ?>images/iu.jpg"></dt>
        <dd class="first"><strong>$0</strong> <del>$19.99</del> 1 Y / 1 PC</dd>
        <dd><strong>IObit Uninstaller PRO</strong></dd>
        <dd>Most Powerful Unin- <br>staller to Remove <br>Plug-ins & Apps!</dd>
      </dl>
      <dl>
      	<dt><img src="<?php echo $pResUrl; ?>images/sd.jpg"></dt>
        <dd class="first"><strong>$0</strong> <del>$19.99</del> 1 Y / 1 PC</dd>
        <dd><strong>Smart Defrag PRO</strong></dd>
        <dd>Get the Maximum Hard  <br>Drive Performance! </dd>
      </dl>
      <dl>
      	<dt><img src="<?php echo $pResUrl; ?>images/pf.jpg"></dt>
        <dd class="first"><strong>$0</strong> <del>$19.95</del> 1 Y / 1 PC</dd>
        <dd><strong>Protected Folder</strong></dd>
        <dd>No Worries of Data  <br>Theft or Privacy Leaks!</dd>
      </dl>
      <div class="clear"></div>
    </div>
    <!--Payments-->
    <ul class="payments">
    	<li>
      	<p>Accepted Payments  </p>
        <p><img src="<?php echo $pResUrl; ?>images/payments.jpg"></p>
      </li>
      <li>
      	<p>Money Back Guarantee</p>
        <p><img src="<?php echo $pResUrl; ?>images/guarantee.jpg"></p>
      </li>
      <li>
      	<p>Secure Payment</p>
        <p><img src="<?php echo $pResUrl; ?>images/payment.jpg"></p>
      </li>
    </ul>
    <!--Review-->
    <div class="review">
	      <div class="media_rev">
	        <h3>Media Review</h3>
	        <dl>
	          <dt><img src="<?php echo $pResUrl; ?>images/betanews.jpg" alt=""></dt>
	          <dd>"IObit Malware Fighter PRO is a complete security package. It weeds out spyware, Trojan and all manner of other nasties, there're also Startup Guard that ensures no malicious processes start with Windows, Browser Guard that ensures no software makes changes to your web browser, File Guard that ensures unknown file you open do not cause any damage, USB Guard, Process Guard and more." <span>- betanews.com</span></dd>
	        </dl>
	      </div>
	      <div class="user_rev" id="user_rev">
	        <div class="content">
	          <h3>User Review</h3>
	          <dl class="hidden">
	            <dd><h4>"We have not had a problem since using your products."</h4></dd>
	            <dd>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with IObit Malware Fighter Pro and Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence. We have not had a problem since using your products."</dd>
	          </dl>
	          <dl class="show">
	            <dd><h4>"I also had other programs for this purpose installed, but IMF always finds the problems first and blocks them."</h4></dd>
	            <dd>"Some years ago somebody drew my attention to IObit Malware Fighter. First I was sceptic. But after installing it, it became my favourite anti-malware program. It is very easy to use. Through the years it already has detected several threats and removed it. In cooperation with the other IObit programs, like for example ASC, I have a good PC protection. I now recommend these programs to all my friends and family."</dd>
	          </dl>
	        </div>
	        <ul class="users">
	          <li class=""><img src="<?php echo $pResUrl; ?>images/bob_bassett.jpg" alt="">Bob Bassett<br>2013</li>
	          <li class="current"><img src="<?php echo $pResUrl; ?>images/peter_stoffers.jpg" alt="">Peter Stoffers<br>2012</li>
	        </ul>
	      </div>
	    </div>
    <div class="clear"></div>
    <div class="comparison_table" id="compare">
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <thead>
        	  <tr>
        	    <th colspan="2" style="text-align:left;"><strong>See what PRO edition can do for you:</strong></th>
        		  <th class="itemb"><span>IObit Malware Fighter<br>FREE</span></th>
        		  <th class="itema"><span>IObit Malware Fighter<br>PRO</span>1 Year / 1 PC</th>
              <th class="itemb"><span>IObit Malware Fighter<br>PRO</span>1 Year / 3 PCs</th>
        		</tr>
        	</thead>
        	<tbody>
        	  <tr>
		        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
		        <td class="virtue">Basic Anti-Malware Function</td>
		        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
		        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
		      </tr>
		      <tr>
		        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
		        <td class="virtue">Full Anti-Malware Ability with Unique "Dual-Core" Engine</td>
		        <td class="itemb"></td>
		        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
		      </tr>
		      <tr>
		        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
		        <td class="virtue">Basic Real-time Protection against Malicious Behavior</td>
		        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
		        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
		      </tr>
		      <tr>
		        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
		        <td class="virtue">Comprehensive Real-time Protection for Top PC Security</td>
		        <td class="itemb"></td>
		        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
		      </tr>
		      <tr>
		        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
		        <td class="virtue">Prevent Virus Infection Carried by USB Disk</td>
		        <td class="itemb"></td>
		        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
		      </tr>
		      <tr>
		        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
		        <td class="virtue">Detect Malicious Process Running in RAM</td>
		        <td class="itemb"></td>
		        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
		      </tr>
		      <tr>
		        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
		        <td class="virtue">Detect Threats by Analyzing Malicious Action</td>
		        <td class="itemb"></td>
		        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
		      </tr>
		      <tr>
		        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
		        <td class="virtue">Intelligently Works in Background without Interrupting</td>
		        <td class="itemb"></td>
		        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
		      </tr>
		      <tr>
		        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
		        <td class="virtue">Automatic Update to the Latest Version</td>
		        <td class="itemb"></td>
		        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
		      </tr>
		      <tr>
		        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
		        <td class="virtue">Free 24/7 Technical Support on Demand</td>
		        <td class="itemb"></td>
		        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
		      </tr>
	        </tbody>
	        <tfoot>
	          <tr>
	            <th colspan="2"></th>
	            <th class="itemb"><span>IObit Malware Fighter FREE</span><br>
	            Your current edition</th>
	            <th class="itema"><span><strong>$19.95</strong> <del>$39.95</del></span><br>
                1 Year / <strong>1 PC</strong>
	              <a href="http://www.iobit.com/buy.php?product=imf-upgrade3&ref=<?php echo $pc1ref;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'christmas2015-en-aff');" class="tbbuybtn">Buy Now</a>

	            </th>
              <th class="itemb"><span><strong>$23.99</strong> <del>$114.88</del></span><br>
                1 Year / <strong>3 PCs</strong>
                <a href="http://www.iobit.com/buy.php?product=imfiusdpf2399&ref=<?php echo $pc3ref;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'christmas2015-en-aff');" class="tbbuybtn">Buy Now</a>
                We Recommend
              </th>
	          </tr>
	        </tfoot>
          </table>
        </div>
      <dl class="annotation">
          <dt>Note:</dt>
          <dd>1*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
          <dd>2*.Data may vary based on different system or computer.</dd>
        </dl>
   </div>
	<div class="copy">
      Copyright © 2005 - 2015 IObit. All Rights Reserved
  </div>
</div>
<div class="pop-up">
    <div class="pop-main">
        <div class="pop-box">
            <h2>Note:</h2>
            <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
            <p>You will be redirected to the latest IObit promotion page automatically.</p>
        </div>
    </div>
</div>
<script>
	$(document).ready(function() {
		$("#user_rev .users li").mouseover(function(event) {
			var num = $(this).index();
				$("#user_rev .users li").each(function(index, el) {
					$(this).removeClass('current');
				});
				$(this).addClass('current');
				$("#user_rev dl").each(function(index, el) {
					$(this).removeClass('show').addClass('hidden')
				});
				$("#user_rev dl").eq(num).removeClass('hidden').addClass('show');
		});
	});

  function scrollto(target) {
		var targetHeight =  target.offset().top - 140;
		$('html,body').stop(true,true).animate({scrollTop: targetHeight}, "slow");
	}

  function goTaget(target) {
		var Theigth = target.offset().top;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	}
	function cycleCountdown(){
		var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
		var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
		d = MApp(2.2).packages.zeroize(datetime[0], 2);
		h = MApp(2.2).packages.zeroize(datetime[1], 2);
		i = MApp(2.2).packages.zeroize(datetime[2], 2);
		s = MApp(2.2).packages.zeroize(datetime[3], 2);
		mi = MApp(2.2).packages.zeroize(datetime[4], 3);
		$('#counttime').html('<li>'+h+'<span>Hr :</span></li><li>'+i+'<span>m :</span></li><li>'+s+'<span>s :</span></li><li class="ms">'+mi+'<span>ms</span> <sup>*</sup></li>');
		setTimeout('cycleCountdown()', 1);
	}
	cycleCountdown();
    setTimeout('window.location.href="https://purchase.iobit.com/aff/en/imf/2020newlaunchsale/index.php'+location.search+'"',5000);
</script></div>
</body>
</html>
