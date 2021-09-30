<?php
	error_reporting(E_ERROR);

//$param = $_SERVER["QUERY_STRING"] ? ('?' . $_SERVER["QUERY_STRING"]) : '';
//header("location:../2017asc10general/index.php" . $param);
//exit;


	define("IObit","IObit");
	$pRootUrl = '../../../../';
	include $pRootUrl.'include/common.inc.php';
	//if (empty($_GET['ref'])) $_GET['ref'] = '2014mayflashb';
	$_GET['ref'] = '2014mayflashb';
	
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
<title>Save 80% on ASC PRO & Get Gift Pack  for Free!</title>
<link rel="icon" href="../../tpl/img/favicon.ico" mce_href="../../tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../../tpl/img/favicon.ico" mce_href="../../tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
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
  <div class="warpper clearfix"> <a href="http://www.iobit.com" class="logo" target="_blank"></a>
    <div class="title">Flash Sale in May</div>
    <dl class="time">
      <dt>Time-limited Offer</dt>
      <dd id="counttime"><span>00</span><span>00</span><span>00</span><span>00</span><em>000</em></dd>
    </dl>
  </div>
</div>
<div class="middle">
  <div class="warpper clearfix">
    <div class="lace">
      <div class="introduce">
        <h3>Save <span>80%</span> on ASC PRO & Get Gift Pack for Free!</h3>
        <p>Activate ASC PRO for 3 PCs today, get Super Gift Pack your PC will adore! <span><em id="packs"><?php echo $packsNum; ?> Packs</em> Left Today!</span></p>
        <div class="foucs"><img src="img/foucs.png"></div>
      </div>
      <div class="control">
        <ul>
          <li class="name">Ultimate PC Performance</li>
          <li class="price">Today <span>$23.98</span></li>
          <li class="original">Original: <span>$119.99</span></li>
          <li class="link"><a href="http://www.iobit.com/buy.php?product=asc7sdpfiu&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc">ACTIVATE NOW</a></li>
          <li class="people"><span><?php echo $buyNum; ?></span> people activated</li>
          <li class="subscription">1 year subscription  / <span>3 PCs</span></li>
        </ul>
      </div>
    </div>
    <h3 class="corssname">Treat your PC to the best protection & optimization with affordable price!</h3>
    <div class="whatdo clearfix">
        <div class="left">
            <h3>What you can get by activating ASC PRO edition:</h3>
            <dl class="clearfix">
                <dt><img src="img/asc7box_small.jpg"></dt>
                <dd class="list01">Double the Speed of Your Slow PC!</dd>
                <dd class="list02">Clean and Fix All Kinds of PC Problems!</dd>
                <dd class="list03">Boost Internet up to 300% Faster!</dd>
                <dd class="list04">Secure Your System and Online Experience!</dd>
                <dd class="edition"><a href="#compare">Learn more about PRO edition &raquo;</a></dd>
            </dl>
        </div>
        <div class="right">
            <dl class="clearfix">
                <dt><img src="img/boxshot_iu.jpg"></dt>
                <dd class="name">IObit Uninstaller PRO</dd>
                <dd>Most Powerful Uninstaller to Remove Plug-ins &amp; Apps!</dd>
                <dd class="price">$19.99</dd>
                <dd class="free"></dd>
            </dl>
            <dl class="clearfix">
                <dt><img src="img/boxshot_pf.jpg"></dt>
                <dd class="name">Protected Folder</dd>
                <dd>No Worries of Data Theft or Privacy Leaks!</dd>
                <dd class="price">$19.95</dd>
                <dd class="free"></dd>
            </dl>
            <dl class="end clearfix">
                <dt><img src="img/boxshot_sd.jpg"></dt>
                <dd class="name">Smart Defrag PRO</dd>
                <dd>Get the Maximum Hard Drive Performance!</dd>
                <dd class="price">$19.99</dd>
                <dd class="free"></dd>
            </dl>
        </div>
    </div>
    <div class="cross clearfix">
        <dl class="left">
            <dd>Get all these four powerful tools today with the price of one! Time-limited Offer!</dd>
            <dt>Act now and SAVE <span>80%</span>!</dt>
        </dl>
        <dl class="link">
            <dt><span><?php echo $buyNum; ?></span> people activated</dt>
            <dd><a href="http://www.iobit.com/buy.php?product=asc7sdpfiu&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc">activate now</a></dd>
        </dl>
        <dl class="right">
            <dt>Now <span>$23.98</span></dt>
            <dd>Valued at <span>$119.99</span></dd>
        </dl>
    </div>
    <dl class="awards">
      <dt>Product Awards</dt>
      <dd><img src="img/awards.jpg"></dd>
    </dl>
    <div class="usersaying">
      <h2>Customer Review</h2>
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
            <dt id="compare"><img alt="quote" src="img/quote.png"></dt>
            <dd>In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</dd>
          </dl>
        </div>
        <div class="clear"></div>
      </div>
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
            <th class="itemb"><span>Advanced SystemCare Free</span><br />
              Your current edition</th>
            <th class="itema"><span>Advanced SystemCare PRO</span><br />
              <a href="http://www.iobit.com/buy.php?product=asc7sdpfiu&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" class="tbbuybtn">Activate Now</a> </th>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="floatlayer" id="floatlayer">
      <dl class="left">
        <dt>Save <span>80%</span> on ASC PRO & Get Gift Pack  for Free!</dt>
        <dd><span><?php echo $buyNum; ?></span> people activated</dd>
      </dl>
      <div class="price">$23.98</div>
      <dl class="right">
        <dt><a href="http://www.iobit.com/buy.php?product=asc7sdpfiu&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc">activate now</a></dt>
        <dd id="counttime1"><span>00</span>h: <span>00</span>m: <span>00</span>s <em>000</em></dd>
      </dl>
    </div>
  </div>
  <div class="copy">Copyright &copy; 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
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
<script type="text/javascript">
    $(function () {
        $(window).on('scroll',function(){
        if ($(window).scrollTop() > 390) {
          $('#floatlayer').addClass('on');
        }else{
          $('#floatlayer').removeClass('on');
        }
      });
        setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);
    });
    </script> 
<script type="text/javascript">
		function cycleCountdown(){
			var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 00:00:00');
			var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 1);
			d = MApp(2.2).packages.zeroize(datetime[0], 2);
			h = MApp(2.2).packages.zeroize(datetime[1], 2);
			i = MApp(2.2).packages.zeroize(datetime[2], 2);
			s = MApp(2.2).packages.zeroize(datetime[3], 2);
			mi = MApp(2.2).packages.zeroize(datetime[4], 3);
			document.getElementById('counttime').innerHTML = '<span>'+h+'</span><span>'+i+'</span><span>'+s+'</span><em>'+mi+'</em>';
			document.getElementById('counttime1').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();
	</script> 
<?php echo $gJavascript['foot']; ?>
</body>
</html>