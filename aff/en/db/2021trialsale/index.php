<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
$transData=json_decode(base64_decode($_GET['tdata']));
// $transData='';
if(($transData->LftTrlDay<=4)&&($_GET['to']=='trialbuy_8')){
	header("location:./trialbuy.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
}
if(!in_array($_GET['to'],array('trialbuy_7','trialbuy_2','trialbuy_9','trialbuy_4','trialbuy_8'))){
	$_GET['to']='';
}

if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_db8_2021trialsale';

if(empty(json_decode(base64_decode($_GET['tdata'])))){
	$_GET['tdata']='W10=';
}

$buyUrl1 = "https://www.iobit.com/buy.php?product=enaff-db83pc2295&ref=". $_GET['ref']."&aff=".$_GET['aff'];
$buyUrl2 = "https://www.iobit.com/buy.php?product=enaff-db83pcsdiupf2495&ref=". $_GET['ref'] ."&aff=". $_GET['aff'];

if (preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {
    $buyUrl1 = "https://iobit.onfastspring.com/driver-booster-4-pro-1-year-subscription-3-pcs-2295";
    $buyUrl2 = "https://iobit.onfastspring.com/driver-booster-pro-with-gift-pack-2495";
    if ($arr[1][0] != null) {
        $buyUrl1 = "https://macbooster.7eer.net/c/" . $arr[1][0] . "/1086647/4385";
        $buyUrl2 = "https://macbooster.7eer.net/c/" . $arr[1][0] . "/1086649/4385";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Save 80% on Driver Booster PRO + Free Gifts - IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<div class="title">
				<p>Your trial will end soon.</p>
				<h1>Don't Miss Out the Offer Only for Trial User</h1>
			</div>
			<div class="clearfix">
				<div class="offer left">
					<img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
					<div class="price">
						<h2>70% OFF</h2>
						<p><b>$<big>22</big>.95</b> <span>was <del>$74.85</del></span></p>
						<a class="buybtn banner-left nonshadow"
						   href="<?= $buyUrl1; ?>"
						   onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb82021trialsale')">
							<i class="all-icons"></i> <span>Buy Now</span>
						</a>
					</div>
					<ul>
						<li><i class="all-icons">√</i> <b>$1.91 / Month</b></li>
						<li><i class="all-icons">√</i> <b>$51.90 Saved</b></li>
						<li><i class="all-icons">√</i> Driver Booster 8 Pro   <del>$74.85</del></li>
						<li class="line">-</li>
						<li class="line">-</li>
						<li class="line">-</li>
					</ul>
				</div>
				<div class="offer right">
					<img src="<?php echo getStaticUrl('images/db-bundle-box.png')?>" alt="Driver Booster PRO"/>
					<div class="price">
						<h2>80% OFF</h2>
						<p><b>$<big>24</big>.95</b> <span>was <del>$134.78</del></span></p>
						<a class="buybtn banner-right shadow"
						   href="<?= $buyUrl2; ?>"
						   onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb82021trialsale')">
							<i class="all-icons"></i> Buy Now
						</a>
						<p id="bancount" class="countdown">Hurry! <b>04</b>M: <b>29</b>S: <b>44</b>Ms Left</p>
					</div>
					<ul>
						<li><i class="all-icons">√</i> <b>$2.09 / Month</b></li>
						<li><i class="all-icons">√</i> <b>$109.83 Saved</b></li>
						<li><i class="all-icons">√</i> Driver Booster 8 Pro   <del>$74.85</del></li>
						<li><i class="all-icons">√</i> IObit Uninstaller 10 Pro  <del>$19.99</del></li>
						<li><i class="all-icons">√</i> Smart Defrag 6 Pro  <del>$19.99</del></li>
						<li><i class="all-icons">√</i> Protected Folder   <del>$19.95</del></li>
					</ul>
					<div class="tips">
						<i class="all-icons">!</i>
						<div class="txt">
							<p>
								The price shown in the page is valid only for this promotion.
								 Your Driver Booster subscription will continue after the initial subscription period at the non-promotional price of $29.99. <br>If you choose the Driver Booster 8 bundle pack, all products will also continue after the first year at the normal price shown in the page below.
							</p>
							<p>
								Cancel Auto-renewal<br> If you do not want to participate in the auto-renewal plan, you can uncheck the Auto-renewal box in shopping cart review page or in your account at any time before the start of the next subscription.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Why Driver Booster PRO?</h2>
			<p class="words">Update <b class="nums"></b> outdated <span>drivers & game components</span> to improve stability of PC performance and game experience.</p>
			<div class="content">
				<dl class="one">
					<dt><i class="all-icons">1</i></dt>
					<dd>
						<h3>Stable Performance</h3>
						<p>Update necessary PC drivers to avoid freezing and crashes.</p>
					</dd>
				</dl>
				<dl class="two">
					<dt><i class="all-icons">2</i></dt>
					<dd>
						<h3>Super Game Boost</h3>
						<p>Enable Game Boost to guarantee<br> faster and better gaming performance.</p>
					</dd>
				</dl>
				<dl class="three">
					<dt><i class="all-icons">3</i></dt>
					<dd>
						<h3>Effective Device Management</h3>
						<p>Detect and fix device errors to reduce hardware problems. </p>
					</dd>
				</dl>
				<dl class="four">
					<dt><i class="all-icons">4</i></dt>
					<dd>
						<h3>Better Game Experience</h3>
						<p>Update game-related drivers and components to experience advanced<br> & new features and smooth launching.</p>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- feature end -->

	<!-- comparison start -->
	<div class="comparison wrapper">
	  <h2>What the difference between your current edition and PRO?</h2>
	  <table>
	    <thead>
	      <tr>
	        <th colspan="2"></th>
	        <th class="itema">
	          <div class="free">Your current edition</div>
	        </th>
	        <th class="space"></th>
	        <th class="itemb">
	          <div class="free">Driver Booster PRO</div>
	        </th>
	        <th class="space"></th>
	        <th class="itemc">
	          <div class="pro"><span>4-in-1</span> Bundle</div>
	        </th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
	        <td class="virtue">Auto update drivers while system is idle</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons black">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
	        <td class="virtue">Super Game Boost for faster gaming</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><b class="limite"><i class="all-icons black">√</i></b></td>
	        <td class="space"></td>
	        <td class="itemc"><b class="limite"><i class="all-icons red">√</i></b></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon12.png')?>" alt=""></td>
	        <td class="virtue">1-click to update drivers</td>
	        <td class="itema"><p class="exTxt first"><span class="days">7</span> <span class="dayStr">days</span></p></td>
	        <td class="space"></td>
	        <td class="itemb"><b class="limite"><i class="all-icons black">√</i></b></td>
	        <td class="space"></td>
	        <td class="itemc"><b class="limite"><i class="all-icons red">√</i></b></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
	        <td class="virtue">Up to 100% higher update speed</td>
	        <td class="itema"><p class="exTxt"><span class="days">7</span> <span class="dayStr">days</span></p></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons black">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
	        <td class="virtue">Fix devices error for safer PC</td>
	        <td class="itema"><p class="exTxt"><span class="days">7</span> <span class="dayStr">days</span></p></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons black">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon09.png')?>" alt=""></td>
	        <td class="virtue">Large database with 4,500,000+ drivers support</td>
	        <td class="itema"><p class="exTxt"><span class="days">7</span> <span class="dayStr">days</span></p></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons black">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon10.png')?>" alt=""></td>
	        <td class="virtue">Update and install network drivers offline <sup><em>New</em></sup></td>
	        <td class="itema"><p class="exTxt"><span class="days">7</span> <span class="dayStr">days</span></p></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons black">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon11.png')?>" alt=""></td>
	        <td class="virtue">Priority to update the stability-first drivers <sup><em>New</em></sup></td>
	        <td class="itema"><p class="exTxt"><span class="days">7</span> <span class="dayStr">days</span></p></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons black">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon04.png')?>" alt=""></td>
	        <td class="virtue">Maximize hard drive optimization for faster PC</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon07.png')?>" alt=""></td>
	        <td class="virtue">Ensure the security of files, data and privacy</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon08.png')?>" alt=""></td>
	        <td class="virtue">Easily uninstall stubborn programs and malicious plug-ins</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	    </tbody>
	    <tfoot>
	      <tr>
	      	<th colspan="2"></th>
	      	<th class="itema"></th>
	      	<th class="space"></th>
	      	<th class="itemb">
	      	  <p><b>$22.95</b> <del>$74.85</del></p>
	      	  <a class="buybtn"
	      	     href="<?= $buyUrl1; ?>"
	      	     onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb82021trialsale')">
	      	  	<i class="all-icons"></i> Buy Now
	      	  </a>
	      	</th>
	      	<th class="space"></th>
	      	<th class="itemc">
	      	  <p><b>$24.95</b> <del>$134.78</del></p>
	      	  <a class="buybtn shadow"
	      	     href="<?= $buyUrl2; ?>"
	      	     onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb82021trialsale')">
	      	  	<i class="all-icons"></i> Buy Now
	      	  </a>
	      	  <p id="tabcount" class="countdown">Hurry! <b>04</b>M: <b>29</b>S: <b>44</b>Ms Left</p>
	      	</th>
	      </tr>
	    </tfoot>
	  </table>
	</div>
	<!-- comparison end -->

	<!-- review start -->
	<div class="review wrapper">
	  <h2>What Others Say: </h2>
	  <div id="dg-container" class="dg-container">
	    <div class="nav">
	      <span class="dg-prev"></span>
	      <span class="dg-next"></span>
	    </div>
	    <div class="content dg-wrapper">
	      <dl class="reviews">
	        <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
	        <dd>
	          <h2>Media Review</h2>
	          <h4>IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best.</h4>
	          <p>
	            Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.
	          </p>
	          <cite>PC Magazine</cite>
	        </dd>
	      </dl>
	      <dl class="reviews">
	        <dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"></dt>
	        <dd>
	          <h2>User Review</h2>
	          <h4></h4>
	          <p>
	            First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM,  i was able to play new game titles without having to shutdown any background process.  I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product. 
	          </p>
	          <cite>Dunston Diaz</cite>
	        </dd>
	      </dl>
	      <dl class="reviews">
	        <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
	        <dd>
	          <h2>User Review</h2>
	          <h4></h4>
	          <p>
	            What a surprise to receive the new Driver Booster from IObit.  Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade.  Once upgrading was complete it was as if my PC had a complete makeover. Sensational!
	          </p>
	          <cite>Harold Barr</cite>
	        </dd>
	      </dl>
	      <dl class="reviews">
	        <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
	        <dd>
	          <h2>User Review</h2>
	          <h4></h4>
	          <p>
	            Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended. 
	          </p>
	          <cite>Hishaam Salasa</cite>
	        </dd>
	      </dl>
	      <dl class="reviews">
	        <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></dt>
	        <dd>
	          <h2>User Review</h2>
	          <h4></h4>
	          <p>
	            It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB7. Easy to use and fast downloads it is the best tool in the Market until now!
	          </p>
	          <cite>Carlos Alexandre Veríssimo</cite>
	        </dd>
	      </dl>
	    </div>
	  </div>
	</div>
	<!-- review end -->

	<!-- awards start -->
	<div class="awards">
	  <div class="wrapper">
	  	<h2>World-wide Awards</h2>
	  	<p>
	  		As being trusted and awarded by those world-class media in the past seven years, you know you’ve got the right driver updater.
	  	</p>
	  	<img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
	  </div>
	</div>
	<!-- awards end -->

	<!-- service start -->
	<div class="service wrapper clearfix">
		<dl class="fl">
			<dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
			<dd>
				<h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
				<p>
					We’re confident that activating PRO edition will fix all your headache driver matters for affordable price!
				</p>
			</dd>
		</dl>
		<dl class="fr">
			<dd><h3>We accept</h3></dd>
			<dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
		</dl>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<dl class="note wrapper">
	  <dt>Note:</dt>
	  <dd>*.Data may vary based on different system or computer.</dd>
	  <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
	  <dd>*. Smart Defrag PRO / IObit Uninstaller PRO / Protected Folder support 1 year subscription / 1 PC.</dd>
	</dl>
	<div class="copyright">
		<p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	    <div class="left fl"><img src="<?php echo getStaticUrl('images/db-bundle-box.png')?>" alt=""/></div>
	    <h2 class="fl"><span class="off">80%</span> OFF</h2>
	    <div class="price fr">
	    	<h3>Keep All Drivers Up-to-date in Whole Year!</h3>
	    	<a class="buybtn shadow"
	    	   href="<?= $buyUrl2; ?>"
	    	   onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb82021trialsale')">
	    		<i class="all-icons"></i> Buy Now
	    	</a>
	    	<p id="floatcount" class="countdown">Hurry! <b>04</b>M: <b>29</b>S: <b>44</b>Ms Left</p>
	    </div>
	  </div>
	</div>
	<!-- floatlayer end -->

<script>
	var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
	var affStr="<?php echo $_GET['aff'];?>";
	var imgSrc = "<?php echo getStaticUrl('images/db-box.png')?>";
	var _href = "<?= $buyUrl1; ?>";
	var _ga="ga('send', 'event', 'db3pcsoldoutbuy', 'buy', 'dbpurchase-trial1');";
	var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
	transData = JSON.parse(transDataJson);

	// var transDataJson='';
	// var affStr="<?php echo $_GET['aff'];?>";
	// var imgSrc = "<?php echo getStaticUrl('images/db-box.png')?>";
	// var _href = "https://www.iobit.com/buy.php?product=driverbooster7&ref=en-db3pcsoldouttrial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db&tw=-8";
	// var _ga="ga('send', 'event', 'db3pcsoldoutbuy', 'buy', 'dbpurchase-trial1');";
	// var transDataJson='';
</script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>