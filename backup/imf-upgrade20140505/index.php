<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	$pRootUrl = '../';
	include '../include/common.inc.php';
	if (empty($_GET['ref'])) $_GET['ref'] = 'imf2014easter';
	
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
<title>Upgrade to IObit Malware Fighter 2 PRO</title>
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
                	<dt><span>Save 70%</span> on IMF PRO &amp; Get Easter Gifts for FREE!</dt>
                    <dd><img src="img/introduce.jpg"></dd>
                </dl>
                <div class="control">
                	<h2>Extra PC Protection</h2>
                    <ul>
                    	<li class="price">Today <span>$19.95</span> <em>$64.88</em></li>
                        <li class="link"><a href="http://www.iobit.com/buy.php?product=imfpfebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['ref']; ?>&refs=purchase_imf">activate now</a></li>
                        <li class="people"><span><?php echo $buyNum; ?></span> people activated</li>
                        <li class="subscription">1 year subscription</li>
                        <li class="guarantee">100% 60-day Money Back Guarantee!</li>
                    </ul>
                </div>
                <div class="grass"></div>
            </div>
            <h2>Get extra protection for your PC security with affordable price! <p id="counttime2"><span>00</span>d: <span>00</span>h: <span>00</span>m: <span>00</span>s <em>000</em></p></h2>
            <div class="whatdo clearfix">
            	<div class="left">
                	<div class="boxshot"></div>
                    <dl>
                        <dt>IObit Malware Fighter PRO:</dt>
                        <dd>With unique "Dual-Core" anti-malware engine, it???s your extra protection for PC security by removing the deepest hidden malware of all kinds.</dd>
                        <dd>
                            <ul>
                                <li>Most Efficient to Remove the Deepest Malware</li>
                                <li>100% Privacy Security with Real-time Protection</li>
                                <li>Automated or Scheduled Scan without Interrupting</li>
                                <li>Automatic and Frequent Database Updates</li>
                            </ul>
                        </dd>
                        <dd class="edition"><a href="#compare">See more about PRO edition >></a></dd>
                        <dd class="sale"></dd>
                    </dl>
                </div>
                <div class="right">
                	<dl class="clearfix">
                    	<dt><img src="img/boxshot_pf.jpg"></dt>
                        <dd class="name">Protected Folder </dd>
                        <dd>No Worries of Data Theft or Privacy Leaks!</dd>
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
                	<dd>Get IMF PRO, Protected Folder & Windows Tweak Guide today with the price of one! Time-limited Offer!</dd>
                    <dt>Act now and SAVE <span>70%</span>!</dt>
                </dl>
                <dl class="link">
                	<dt><span><?php echo $buyNum; ?></span> people activated</dt>
					<dd><a href="http://www.iobit.com/buy.php?product=imfpfebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['ref']; ?>&refs=purchase_imf">activate now</a></dd>
                </dl>
                <dl class="right">
                	<dt>Now <span>$19.95</span></dt>
                    <dd>Valued at <span>$64.88</span></dd>
                </dl>
            </div>
            <dl class="awards">
            	<dt>Product Awards</dt>
                <dd><img src="img/awards.jpg"></dd>
            </dl>
            <div class="usersaying" id="compare">
                <h2>Customer Review</h2>
                <div class="boxa" style="margin-top:0;" i>
                    <h3>"We have not had a problem since using your products."</h3>
                    <dl class="user">
                        <dt><img src="img/bob_bassett.jpg" alt=""/></dt>
                        <dd>Bob Bassett</dd>
                        <dd>2013</dd>
                    </dl>
                    <dl class="quit">
                        <dt><img alt="quote" src="img/quote.png"></dt>
                        <dd>We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with IObit Malware Fighter Pro and Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence. We have not had a problem since using your products."</dd>
                    </dl>
                </div>
                <div class="boxb" style="margin-top:0;">
                    <h3>"I also had other programs for this purpose installed, but IMF always finds the problems first and blocks them."</h3>
                    <dl class="user">
                        <dt><img src="img/peter_stoffers.jpg" alt=""/></dt>
                        <dd>Peter Stoffers</dd>
                        <dd>2012</dd>
                    </dl>
                    <dl class="quit">
                        <dt><img alt="quote" src="img/quote.png" /></dt>
                        <dd>Some years ago somebody drew my attention to IObit Malware Fighter. First I was sceptic. But after installing it, it became my favourite anti-malware program. It is very easy to use. Through the years it already has detected several threats and removed it. In cooperation with the other IObit programs, like for example ASC, I have a good PC protection. I now recommend these programs to all my friends and family."</dd>
                    </dl>
                </div>
                <div class="clear"></div>
            </div>
            <div class="comparison_table">
                 <table border="0" cellspacing="0" cellpadding="0" width="100%">
		      <thead>
		        <tr>
		          <th colspan="2" style="text-align:left">See what PRO edition can do for you:</th>
		          <th class="itemb"><span>IObit Malware Fighter FREE</span></th>
		          <th class="itema"><span>IObit Malware Fighter PRO</span></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
			        <td class="icons" width="45"><img src="img/icon_01.png"></td>
			        <td class="virtue">Basic Anti-Malware Function</td>
			        <td class="itemb"><img src="img/bluemark.png"/></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_02.png"></td>
			        <td class="virtue">Full Anti-Malware Ability with Unique "Dual-Core" Engine</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_03.png"></td>
			        <td class="virtue">Basic Real-time Protection against Malicious Behavior</td>
			        <td class="itemb"><img src="img/bluemark.png"/></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_04.png"></td>
			        <td class="virtue">Comprehensive Real-time Protection for Top PC Security</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_05.png"></td>
			        <td class="virtue">Prevent Virus Infection Carried by USB Disk</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_06.png"></td>
			        <td class="virtue">Detect Malicious Process Running in RAM</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_07.png"></td>
			        <td class="virtue">Detect Threats by Analyzing Malicious Action</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_08.png"></td>
			        <td class="virtue">Intelligently Works in Background without Interrupting</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_09.png"></td>
			        <td class="virtue">Automatic Update to the Latest Version</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
			    <tr>
			        <td class="icons" width="45"><img src="img/icon_10.png"></td>
			        <td class="virtue">Free 24/7 Technical Support on Demand</td>
			        <td class="itemb"></td>
			        <td class="itema"><img src="img/redmark.png"/></td>
			    </tr>
		      </tbody>
		      <tfoot>
		        <tr>
		          <th colspan="2"></th>
		          <th class="itemb"><span>IObit Malware Fighter FREE</span><br />
		            Your current edition</th>
		          <th class="itema"><span>IObit Malware Fighter PRO</span><br />
		            <a href="http://www.iobit.com/buy.php?product=imfpfebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['ref']; ?>&refs=purchase_imf" class="tbbuybtn" >Buy Now</a><br />
					</span>
		        </th>
		        </tr>
		      </tfoot>
		  </table>
           </div>
           <div class="floatlayer" id="floatlayer">
				<dl class="left">
                	<dt>Save <span>70%</span>, Get Extra Protection for Your PC Security!</dt>
                    <dd><span><?php echo $buyNum; ?></span> people activated</dd>
                </dl>
                <div class="price">$19.95</div>
                <dl class="right">
                	<dt><a href="http://www.iobit.com/buy.php?product=imfpfebook&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['ref']; ?>&refs=purchase_imf">activate now</a></dt>
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