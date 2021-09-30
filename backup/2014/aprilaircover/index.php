<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	$pRootUrl = '../../';
	include '../../include/common.inc.php';
	//if (empty($_GET['ref'])) $_GET['ref'] = '2014aircover';
  $_GET['ref'] = '2014aircover';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Save 75% on ASC PRO & Get AirCover Security for Free!</title>
<link rel="icon" href="../../tpl/img/favicon.ico" mce_href="../../tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../../tpl/img/favicon.ico" mce_href="../../tpl/img/favicon.ico" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="./style/style.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'><?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="main">
  <div class="head">
    <div id="lang"><span id="google_translate_element"></span></div>
    <div class="logo"><a href="http://www.iobit.com"></a></div>
    <div id="counttime" class="countdown"><span class="day">00</span><span class="hor">00</span><span class="min">00</span><span class="sec">00</span><span class="minsec">999</span></div>
  </div>
  <div class="mbody">
    <div class="intro">
      <h1>Save <span>75</span>% on ASC PRO & Get AirCover Security for Free!</h1>
      <div class="boxgroup"><img src="img/boxgroup.jpg" alt="" /></div>
      <dl class="topbuy">
        <dt>Activate ASC PRO now, Get your Android device fully protected against viruses, malware and other threats for Free!</dt>
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
            <a href="http://www.iobit.com/buy.php?product=asc7aircover&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" class="buybtn">Activate Now</a> <span>Today <em class="brownyellow">$23.98</em> <del>$89.97</del> </span> </div>
            <dl class="guarantee">
              <dt><img src="img/moneyback.png" alt="" /></dt>
              <dd>1 Year / <span>3 PCs</span></dd>
            </dl>
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <div class="procdetail">
      <div class="graybox ascp">
        <span class="iconsale"></span>
        <img src="img/boxshot_asc.jpg" alt="" />
        <div class="benfits">
          <h4>What you can get by activating ASC PRO edition:</h4>
          <ul>
            <li>Double the Speed of Your Slow PC! </li>
            <li>Boost Internet up to 300% Faster!</li>
            <li>Clean and Fix All Kinds of PC Problems!</li>
            <li>Secure Your System and Online Experience!</li>
          </ul>
          <a href="#compare" class="hotlink">Learn more about PRO edition>></a>
        </div>
      </div>
      <div class="graybox acp">
        <span class="iconfree"></span>
        <img src="img/boxshot_ac.jpg" alt="" />
        <div class="benfits">
          <h4>AirCover Security</h4>
          <ul>
            <li>Real-time protection against viruses</li>
            <li>Never worry about a lost phone again</li>
            <li>Protect you mobile privacy in real time</li>
            <li>Protect yourself from mobile threats</li>
          </ul>
          <a href="#acp" class="hotlink">Learn more about AirCover>></a>
        </div>
      </div>
    </div>
    <div class="clear"></div>
    <dl class="htactive">
      <dt>How to activate AirCover Security Premium?</dt>
      <dd><span>a)</span> Click download link in the email you received to install; <span>b)</span> Use the same email address to log in AirCover; <span>c)</span> Premium features will be activated 48 hours later automatically.
</dd>
    </dl>
    <div class="clear"></div>
    <div class="pricebox">
      <p class="describe">Get ASC PRO for 3 PCs & AirCover Security Premium now with the price of one! Time-limited Offer!<br />
        <span class="brownyellow">Act now and SAVE 75%!</span></p>
      <div class="buyarea">
        <div class="count">
          <?php
				echo $buy_num;
				?>
        </div>
        <div class="giftbox"><img src="img/giftbox.png" alt="" /></div>
        <a href="http://www.iobit.com/buy.php?product=asc7aircover&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" class="buybtn_b">Activate Now</a> <span>Today <em class="brownyellow">$23.98</em> <del>$89.97</del> </span> </div>
      <dl class="guarantee">
        <dt><img src="img/moneyback.png" alt="" /></dt>
        <dd>1 Year / <span>3 PCs</span></dd>
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
              <a href="http://www.iobit.com/buy.php?product=asc7aircover&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" class="tbbuybtn">Activate Now</a> </th>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="clear"></div>
    <div class="acp" id="acp">
      <h3>What does AirCover Security do?</h3>
      <dl>
        <dt><img src="img/screenshot_ac.jpg" alt="" /></dt>
        <dd><strong>Requires Android:</strong> 2.2 and up</dd>
        <dd>AirCover Security protects your Android devices from viruses, malware and other threats, with anti-virus, real-time protection, web-protection, anti-surveillance, and other security features!</dd>
        <dd><strong>Key benefits of AirCover Security Premium:</strong> <p></p>Virus Database Auto Update; </p><p>Anti-theft Premium Features; </p><p>Anti-surveillance;</p><p>Android Vulnerability Scan </p></dd>
      </dl>
    </div>
    <div class="floatlayer" id="floatlayer">
      <dl class="left">
        <dt>Save <span>75%</span> on ASC & Get AirCover for Free! </dt>
          <dd><span><?php echo $buy_num;?></span> people activated</dd>
      </dl>
      <div class="price">$23.98</div>
      <dl class="right">
        <dt><a href="http://www.iobit.com/buy.php?product=asc7aircover&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc">activate now</a></dt>
          <dd id="counttime1"><span>0</span>d: <span>0</span>h: <span>0</span>m: <span>0</span>s <em>000</em></dd>
      </dl>
    </div> 
  </div>
  <div class="footer">
    <p>Copyright&copy; 2005 - 2014 IObit. All Rights Reserved</p>
  </div>  
</div>
<script type="text/javascript">
$(function () {
  $(window).on('scroll',function(){
    if ($(window).scrollTop() > 500) {
      $('#floatlayer').addClass('on');
    }else{
      $('#floatlayer').removeClass('on');
    }
  });  
});

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
	//document.getElementById('counttime2').innerHTML = '<span>'+d+'</span>d: <span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em>';
	setTimeout('cycleCountdown()', 1);
}
cycleCountdown();
</script> 
<?php echo $gJavascript['foot']; ?>
</body>
</html>
