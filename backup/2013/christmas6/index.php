<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	$pRootUrl = '../../';
	include '../../include/common.inc.php';
	if (empty($_GET['ref'])) $_GET['ref'] = 'prexmas6';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IObit X'mas Big Sale</title>
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
    <div class="moneyback"> You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 60 DAYS, or we'll send you a full refund. No questions asked. <a href="http://www.iobit.com/buy.php?product=asc6sdpfash&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>">Upgrade Now</a> </div>
    <div class="btn"> <span>Original <del>$119.99</del> Now $23.98</span> <a href="http://www.iobit.com/buy.php?product=asc6sdpfash&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="CHECKOUT" class="checkbtn">Checkout >></a>
      <div class="countdown" id="counttime1"><span>0</span>d：<span>0</span>h：<span>0</span>m：<span>0</span>s <em>000</em></div>
    </div>
  </div>
  <div class="head">
    <div id="lang"><span id="google_translate_element"></span></div>
    <div class="logo"><a href="http://www.iobit.com"></a></div>
    <div id="counttime" class="countdown"><span class="day">00</span><span class="hor">00</span><span class="min">00</span><span class="sec">00</span><span class="minsec">999</span></div>
  </div>
  <div class="mbody">
    <div class="intro">
      <h1>Save <span>80</span>%, Get Our SUPER Gift Pack & Share it with Your Family!</h1>
      <div class="boxgroup"><img src="img/boxgroup.png" alt="" /></div>
      <dl class="topbuy">
        <dt>Activate ASC PRO today, get Protected Folder, Smart Defrag and Ashampoo Snap 7 for FREE! </dt>
        <dd>
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
            <div class="giftbox"><img src="img/giftbox.png" alt="" /></div>
            <a href="http://www.iobit.com/buy.php?product=asc6sdpfash&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="buybtn">Activate Now</a> <span>Today <em class="brownyellow">$23.98</em> <del>$119.99</del> </span> </div>
          <dl class="guarantee">
            <dt><img src="img/moneyback.png" alt="" /></dt>
            <dd>1 Year Subscription</dd>
          </dl>
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <div class="conf">
      <dl>
        <dt><img src="img/snowman.png" alt="" /></dt>
        <dd>IObit Once-per-year Offer, Limited for Christmas Only! 
          <div class="countdown" id="counttime2"><span>0</span>d：<span>0</span>h：<span>0</span>m：<span>0</span>s <em>000</em></div>
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <div class="procdetail">
      <div class="proc_asc salebox"> <span class="iconsale"></span>
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
      <div class="freebox"> <span class="iconfree"></span>
        <dl>
          <dt><img src="img/boxshot_ashp.png" alt="" /></dt>
          <dd><strong>Ashampoo Snap 7</strong> <br />
            Capture & Save the Moment, Permanently! <br />
            <em>$19.99</em></dd>
        </dl>
      </div>
      <div class="freebox" style="margin-top:15px;"> <span class="iconfree"></span>
        <dl>
          <dt><img src="img/boxshot_pf.png" alt="" /></dt>
          <dd><strong>Protected Folder</strong> <br />
            No Worries of Data Theft or Privacy Leaks!<br />
            <em>$19.95</em></dd>
        </dl>
      </div>
      <div class="freebox" style="margin-top:15px;"> <span class="iconfree"></span>
        <dl>
          <dt><img src="img/boxshot_sd.png" alt="" /></dt>
          <dd><strong>Smart Defrag</strong> <br />
            Get the Maximum Hard Drive Performance!<br />
            <em>$19.99</em></dd>
        </dl>
      </div>
    </div>
    <div class="clear"></div>
    <div class="pricebox">
      <p class="describe">Get all these four powerful tools today with the price of one! Offer limited for Christmas!<br />
        <span class="brownyellow">Act now and SAVE 80%!</span></p>
      <div class="buyarea">
        <div class="count">
          <?php
				echo $buy_num;
				?>
        </div>
        <div class="giftbox"><img src="img/giftbox.png" alt="" /></div>
        <a href="http://www.iobit.com/buy.php?product=asc6sdpfash&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="buybtn">Activate Now</a> <span>Today <em class="brownyellow">$23.98</em> <del>$119.99</del> </span> </div>
      <dl class="guarantee">
        <dt><img src="img/moneyback.png" alt="" /></dt>
        <dd>1 Year Subscription</dd>
      </dl>
    </div>
    <div class="clear"></div>
    <div class="awards">
      <h2 class="mb10">Product Awards</h2>
      <img src="img/awards-banner.gif" style="margin:20px 0;"> </div>
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
              <a href="http://www.iobit.com/buy.php?product=asc6sdpfash&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="tbbuybtn">Activate Now</a> </th>
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
	document.getElementById('counttime1').innerHTML = '<span>'+d+'</span>d：<span>'+h+'</span>h：<span>'+i+'</span>m：<span>'+s+'</span>s <em>'+mi+'</em>';
	document.getElementById('counttime2').innerHTML = '<span>'+d+'</span>d：<span>'+h+'</span>h：<span>'+i+'</span>m：<span>'+s+'</span>s <em>'+mi+'</em>';
	setTimeout('cycleCountdown()', 1);
}
cycleCountdown();
</script>
<?php echo $gJavascript['foot']; ?> 
</body>
</html>
