<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	$pRootUrl = '../';
	include '../include/common.inc.php';
	if (empty($_GET['ref'])) $_GET['ref'] = 'db2014easter';
	
	function microtime_float(){
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}
	$buyNum = ceil(microtime_float()*1000/20000)-69041280;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Save 75% on Driver Booster PRO & Get Easter Gifts for FREE!</title>
<link rel="icon" href="../tpl/img/favicon.ico" mce_href="../tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../tpl/img/favicon.ico" mce_href="../tpl/img/favicon.ico" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
	<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
	<div class="header">
    	<div class="warpper clearfix">
            <a href="http://www.iobit.com" class="logo"></a>
            <div class="title">Eggsellent Easter Big Sale</div>
            <dl class="time">
                <dt>Time-limited Offer</dt>
                <dd id="counttime"><span>00</span><span>00</span><span>00</span><span>00</span><em>000</em></dd>
            </dl>
        </div>
    </div>
    <div class="middle">
    	<div class="warpper clearfix">
    		<div class="lace">
            	<dl class="introduce">
                	<dt><span>Save 75%</span> on Driver Booster PRO &amp; Get Easter Gifts for FREE!</dt>
                    <dd><img src="img/introduce.jpg"></dd>
                </dl>
                <div class="control">
                	<h2>Keep Drivers Up-to-date</h2>
                    <ul>
                    	<li class="price">Today <span>$24.95</span> <em>$104.83</em></li>
                        <li class="link"><a href="http://www.iobit.com/buy.php?product=dbsdebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['ref']; ?>&refs=purchase_db">activate now</a></li>
                        <li class="people"><span><?php echo $buyNum; ?></span> people activated</li>
                        <li class="subscription">1 year subscription / <span>3 PCs</span></li>
                        <li class="guarantee">100% 60-day Money Back Guarantee!</li>
                    </ul>
                </div>
                <div class="grass"></div>
            </div>
            <h2>Enjoy 300% higher driver updating speed with affordable price! 
            <p id="counttime2"><span>00</span>d: <span>00</span>h: <span>00</span>m: <span>00</span>s <em>000</em></p></h2>
            <div class="whatdo clearfix">
            	<div class="left">
                	<div class="boxshot"></div>
                    <dl>
                        <dt>Driver Booster PRO:</dt>
                        <dd>Enhanced technology and expanded database for faster,more secure and stable driver update.</dd>
                        <dd>
                            <ul>
                                <li>Support More Hardware Devices</li>
                                <li>Update Outdated Drivers More Promptly</li>
                                <li>Backup Drivers for Safe Restore</li>
                                <li>Enjoy 300% Higher Driver Updating Speed</li>
                            </ul>
                        </dd>
                        <dd class="edition"><a href="#compare">See more about PRO edition >></a></dd>
                        <dd class="sale"></dd>
                    </dl>
                </div>
                <div class="right">
                	<dl class="clearfix">
                    	<dt><img src="img/boxshot_sd.jpg"></dt>
                        <dd class="name">Smart Defrag PRO</dd>
                        <dd>Get the Maximum Hard Drive Performance!</dd>
                        <dd class="free"></dd>
                    </dl>
                    <dl class="end clearfix">
                    	<dt><img src="img/boxshot_wte.jpg"></dt>
                        <dd class="name">Windows Tweaks Guide</dd>
                        <dd>This complete, step-by-step system optimization guide is given to you for FREE</dd>
                        <dd class="free"></dd>
                    </dl>
                </div>
            </div>
            <div class="cross clearfix">
            	<dl class="left">
                	<dd>Get Driver Booster PRO, Smart Defrag PRO & Windows Tweak Guide today with the price of one! Time-limited Offer!</dd>
                    <dt>Act now and SAVE <span>75%</span>!</dt>
                </dl>
                <dl class="link">
                	<dt><span><?php echo $buyNum; ?></span> people activated</dt>
					<dd><a href="http://www.iobit.com/buy.php?product=dbsdebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['ref']; ?>&refs=purchase_db">activate now</a></dd>
                </dl>
                <dl class="right">
                	<dt>Now <span>$24.95</span></dt>
                    <dd>Valued at <span>$104.83</span></dd>
                </dl>
            </div>
            <dl class="awards">
            	<dt>Product Awards</dt>
                <dd><img src="img/awards.jpg"></dd>
            </dl>
            <div class="usersaying" id="compare">
                <h2>Customer Review</h2>
                <div class="boxa" style="margin-top:0;">
                <h3>"Driver Booster did it all with just one click of the mouse. 19 drivers were updated in no time at all."</h3>
                <dl class="user">
                    <dt><img src="img/vince_lewis.jpg" alt=""/></dt>
                    <dd>Vince Lewis</dd>
                    <dd>2013</dd>
                </dl>
                <dl class="quit">
                    <dt><img alt="quote" src="img/quote.png"></dt>
                    <dd>I am delighted with Driver Booster. I have come across these types of program before but they only told me what drivers I needed then left me to search for them myself. Driver Booster did it all with just one click of the mouse. I was very impressed by the whole operation and of course the results. 19 drivers were updated in no time at all."</dd>
                </dl>
            </div>
            <div class="boxb" style="margin-top:0;">
                <h3>"I had 10 drivers that were out of date and the Driver Booster updated them all perfectly."</h3>
                <dl class="user">
                    <dt><img src="img/mike_goggans.jpg" alt=""/></dt>
                    <dd>Mike Goggans</dd>
                    <dd>2013</dd>
                </dl>
                <dl class="quit">
                    <dt><img alt="quote" src="img/quote.png" /></dt>
                    <dd>WOW! This is a great program. I upgraded my laptop from dual core to a quad and was having trouble updating some of the new hardware that I have installed. I had 10 drivers that were out of date and the Driver Booster updated them all perfectly. My laptop is completely up to date now and running smoothly. GOOD JOB.......I will recommend this program to my family and friends."</dd>
                </dl>
            </div>
            <div class="clear"></div>
            <div class="boxa">
                <h3>"It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"</h3>
                <dl class="user">
                    <dt><img src="img/wayne_bowler.jpg" alt=""/></dt>
                    <dd>Wayne Bowler</dd>
                    <dd>2013</dd>
                </dl>
                <dl class="quit">
                    <dt><img alt="quote" src="img/quote.png"></dt>
                    <dd>This is one of the best driver updater programs around. Microsoft has even led me astray by suggesting updates that wouldn’t work with my machine. This program knew what updates I needed without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"</dd>
                </dl>
            </div>
            <div class="boxb">
                <h3>"Driver Booster found I needed two driver updates, while the other driver updater failed to find them."</h3>
                <dl class="user">
                    <dt><img src="img/leslie_hutton.jpg" alt=""/></dt>
                    <dd>Leslie Hutton</dd>
                    <dd>2013</dd>
                </dl>
                <dl class="quit">
                    <dt><img alt="quote" src="img/quote.png"></dt>
                    <dd>I have recently installed Driver Booster, and found it like all other IObit products, brilliant. I already had a driver updater installed, but yours found I needed two driver updates, while the other driver updater failed to find them. It downloaded the required updates in no time at all. I am so pleased with this product."</dd>
                </dl>
            </div>
            <div class="clear"></div>
            </div>
            <div class="comparison_table">
                 <table border="0" cellspacing="0" cellpadding="0" width="100%">
		      <thead>
		        <tr>
		          <th colspan="2" style="text-align:left">See what PRO edition can do for you:</th>
		          <th class="itemb"><span>Driver Booster Free</span></th>
		          <th class="itema"><span>Driver Booster Pro</span></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
			        <td class="icons" width="45"><img src="img/icon_01.png"></td>
			        <td class="virtue">Automatically Identify Outdated Drivers</td>
			        <td class="itemb"><img src="img/bluemark.png"/></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_02.png"></td>
			        <td class="virtue">Download and Update Outdated Drivers with One Click</td>
			        <td class="itemb"><img src="img/bluemark.png"/></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_03.png"></td>
			        <td class="virtue">Support More Comprehensive Hardware Devices</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_04.png"></td>
			        <td class="virtue">Enjoy Priority to Update Outdated Drivers Promptly</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_05.png"></td>
			        <td class="virtue">Backup Drivers for Safe Restore</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_06.png"></td>
			        <td class="virtue">Download and Update Drivers 300% Faster</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_07.png"></td>
			        <td class="virtue">Enhance Hardware Functionality for Top Performance</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_08.png"></td>
			        <td class="virtue">Automatic Update to the Latest Version</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_09.png"></td>
			        <td class="virtue">Free 24/7 Technical Support on Demand</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
		      </tbody>
		      <tfoot>
		        <tr>
		          <th colspan="2"></th>
		          <th class="itemb"><span>Driver Booster Free</span><br />
		            Your current edition</th>
		          <th class="itema"><span>Driver Booster PRO</span><br />
		            <a href="http://www.iobit.com/buy.php?product=dbsdebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['ref']; ?>&refs=purchase_db" class="tbbuybtn" >Buy Now</a> </th>
		        </tr>
		      </tfoot>
		  </table>
           </div>
           <div class="floatlayer" id="floatlayer">
				<dl class="left">
                	<dt>Save <span>75%</span>, Enjoy 300% Higher Driver Updating Speed!</dt>
                    <dd><span><?php echo $buyNum; ?></span> people activated</dd>
                </dl>
                <div class="price">$24.95</div>
                <dl class="right">
                	<dt><a href="http://www.iobit.com/buy.php?product=dbsdebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['ref']; ?>&refs=purchase_db">activate now</a></dt>
                    <dd id="counttime1"><span>00</span>d: <span>00</span>h: <span>00</span>m: <span>00</span>s <em>000</em></dd>
                </dl>
           </div>
        </div>
        <div class="copy">Copyright &copy; 2005 - 2014 IObit. All Rights Reserved</div>
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
			document.getElementById('counttime').innerHTML = '<span>'+d+'</span><span>'+h+'</span><span>'+i+'</span><span>'+s+'</span><em>'+mi+'</em>';
			document.getElementById('counttime1').innerHTML = '<span>'+d+'</span>d: <span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em>';
			document.getElementById('counttime2').innerHTML = '<span>'+d+'</span>d: <span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();
	</script>
<?php echo $gJavascript['foot']; ?>
</body>
</html>