<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	$pRootUrl = '../../';
	include '../../include/common.inc.php';
	//if (empty($_GET['ref'])) $_GET['ref'] = '20142yr';
  $_GET['ref'] = '20142yr';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Save 75% on ASC 2 Year License</title>
<link rel="icon" href="../../tpl/img/favicon.ico" mce_href="../../tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../../tpl/img/favicon.ico" mce_href="../../tpl/img/favicon.ico" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="./style/style.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800' rel='stylesheet' type='text/css'>
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
	});
});
</script>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="main">
  <div class="floatlayer" id="floatlayer">
    <div class="moneyback"> You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 60 DAYS, or we'll send you a full refund. No questions asked. <a href="http://www.iobit.com/buy.php?product=asc72yrpack&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc">Upgrade Now</a> </div>
    <div class="btn"> <span>Original <del>$119.91</del> Now $29.99</span> <a href="http://www.iobit.com/buy.php?product=asc72yrpack&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" title="CHECKOUT" class="checkbtn">Checkout >></a>
      <div class="countdown" id="counttime1"><span>0</span>d: <span>0</span>h: <span>0</span>m: <span>0</span>s <em>000</em></div>
    </div>
  </div>
  <div class="head">
    <div id="lang"><span id="google_translate_element"></span></div>
    <div class="logo"><a href="http://www.iobit.com"></a></div>
    <div id="counttime" class="countdown"></div>
  </div>
  <div class="mbody">
    <div class="intro">
      <h1>Enjoy 300% Faster PC & Get Gifts your PC will adore!</h1>
      <div class="boxgroup"><a href="#compare"><img src="img/ascboxshot.jpg" alt="" /></a></div>
      <div class="bound">
        <h3>Activate the 2-year license today, and get Protected Folder, Smart Defrag PRO and IObit Uninstaller PRO for FREE!</h3>
        <dl>
          <dt><img src="img/boxshot_pf.png" title="No Worries of Data Theft or Privacy Leaks!" /></dt>
          <dd><strong>Protected Folder  <del>$19.95</del></strong><img src="img/doubt.png"  title="No Worries of Data Theft or Privacy Leaks!" /></dd>
        </dl>
        <dl>
          <dt><img src="img/boxshot_sd.png" title="Get the Maximum Hard Drive Performance!" /></dt>
          <dd><strong>Smart Defrag <del>$19.99</del></strong><img src="img/doubt.png" title="Get the Maximum Hard Drive Performance!" /></dd>
        </dl>
        <dl>
          <dt><img src="img/boxshot_iu.png" title="Most Powerful Uninstaller to Remove Plug-ins & Apps!" /></dt>
          <dd><strong>IObit Uninstaller <del>$19.99</del></strong><img src="img/doubt.png" title="Most Powerful Uninstaller to Remove Plug-ins & Apps!" /></dd>
        </dl>
      </div>
    </div>
    <div class="comprestab">
      <div class="totlenum">
        <?php
        function microtime_float(){
          list($usec, $sec) = explode(" ", microtime());
          return ((float)$usec + (float)$sec);
        }
        echo ceil(microtime_float()*1000/20000)-67844300;
        ?>
      </div>
      <table cellpadding="0" cellspacing="0" width="100%" class="compress">
        <tr>
          <td width="315">
            <a href="http://www.iobit.com/buy.php?product=asc73pc1999&ref=20141yr&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td><span class="itema_head">1 Year Solution</span></td>
                </tr>
                <tr>
                  <td><span class="itema_price">$19.99 <em><del>$29.99</del></em></span></td>
                </tr>
                <tr>
                  <td><a href="http://www.iobit.com/buy.php?product=asc73pc1999&ref=20141yr&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" class="btna">Get it Now</a></td>
                </tr>
              </table>
            </a>
          </td>
          <td width="350">
            <a href="http://www.iobit.com/buy.php?product=asc72yrpack&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td><span class="itemb_head">2-year Solution Pack</span></td>
                </tr>
                <tr>
                  <td><span class="itemb_price">$29.99 <em><del>$119.91</del></em></span></td>
                </tr>
                <tr>
                  <td><a href="http://www.iobit.com/buy.php?product=asc72yrpack&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" class="btnb">Get it Now<span></span></a></td>
                </tr>
              </table>
            </a>
            
          </td>
        </tr>
        <tr>
          <td class="lists"><strong>$0.56</strong> Per PC per month</td>
          <td class="lists"><strong class="c_yellow">$0.42</strong> Per PC per month</td>
        </tr>
        <tr>
          <td class="lists"><strong class="c_yellow">3 PCs</strong> Supported</td>
          <td class="lists"><strong class="c_yellow">3 PCs</strong> Supported</td>
        </tr>
        <tr>
          <td class="lists">\</td>
          <td class="lists">Protected Folder&nbsp;&nbsp;<del>$19.95</del>&nbsp;&nbsp;<sup>FREE</sup></td>
        </tr>
        <tr>
          <td class="lists">\</td>
          <td class="lists" valign="middle">Smart Defrag PRO&nbsp;&nbsp;<del>$19.99</del>&nbsp;&nbsp;<sup>FREE</sup></td>
        </tr>
        <tr>
          <td class="lists">\</td>
          <td class="lists" valign="middle">IObit Uninstaller PRO&nbsp;&nbsp;<del>$19.99</del>&nbsp;&nbsp;<sup>FREE</sup></td>
        </tr>
        <tr>
          <td class="lists"><del>$29.99</del>&nbsp;&nbsp;Save 35%</td>
          <td class="lists"><del>$119.91</del>&nbsp;&nbsp;Save <strong class="c_yellow">75%</strong></td>
        </tr>
      </table>
    </div>
    <div class="clear"></div>
    <div class="awards">
      <h2 class="mb10">Product Awards</h2>
      <img src="img/awards-banner.png" style="margin:20px 0;"> </div>
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
              <a href="http://www.iobit.com/buy.php?product=asc72yrpack&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" class="tbbuybtn">Activate Now</a> </th>
          </tr>
        </tfoot>
      </table>
    </div>
    <div style="height:80px;"></div>
  </div>
  <div class="footer"></div>
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
	document.getElementById('counttime').innerHTML = '<span class="day">'+d+'</span><span class="hor">'+h+'</span><span class="min">'+i+'</span><span class="sec">'+s+'</span><span class="minsec">'+mi+'</span>';
  document.getElementById('counttime1').innerHTML = '<span>'+d+'</span>d: <span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em>';
  setTimeout('cycleCountdown()', 1);
}
cycleCountdown();
</script> 
<?php echo $gJavascript['foot']; ?>
</body>
</html>
