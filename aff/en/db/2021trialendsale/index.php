<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if(empty(json_decode(base64_decode($_GET['tdata'])))){
	$_GET['tdata']='eyJMZnRUb2RDb3VudCI6MCwiTGZ0RHJ2Q291bnQiOjAsIkxmdENtcENvdW50IjowLCJMZnRUcmxEYXkiOjF9';
}
if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_db8_2021trialendsale';


$buyUrl = "https://www.iobit.com/buy.php?product=enaff-db83pc1995&ref=".$_GET['ref']."&aff=". $_GET['aff'];
if (preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {
    $buyUrl = "https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-1995";
    if ($arr[1][0] != null) {
        $buyUrl = "https://macbooster.7eer.net/c/" . $arr[1][0] . "/1086644/4385";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Save 75% on Driver Booster PRO - IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,800" rel="stylesheet">
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
				<p>Your trial will end in <b class="days">3</b> <span class="dayStr">days</span>!</p>
				<h1>Last Chance to Get the Best Price Only for Trial User </h1>
			</div>
			<div class="offer clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
				</div>
				<div class="right fr">
					<h2>Don't miss out your best price!</h2>
					<div class="curvebox">
						<img src="<?php echo getStaticUrl('images/price-curve.png')?>" alt=""/>
						<span class="one">
							Before <em class="month">Apr</em>. <i class="date0">11</i>
						</span>
						<span class="two">
							<em class="month">Apr</em>. <i class="date0">11</i>-<i class="date1">21</i>
						</span>
						<span class="three">
							<em class="month">Apr</em>. <i class="date2">22</i>   <i class="date3">23</i> <i class="date4 last">24</i>
						</span>
						<span class="four">
							After  <em class="month">Apr</em>. <i class="date4">24</i>
						</span>
					</div>
					<ul class="price clearfix">
						<li><p>Today <b>$19.95</b></p> Discount: 75% OFF </li>
						<li class="last">
							<a class="buybtn" 
							   href="<?= $buyUrl; ?>"
							   onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb82021trialendsale') ">
								<i class="all-icons"></i> Buy Now
							</a>
						</li>
					</ul>
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
						<p>Update game-related drivers and components to experience advanced & new features and smooth launching.</p>
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
	          <div class="pro">Driver Booster PRO</div>
	        </th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
	        <td class="virtue">Auto update drivers while system is idle</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
	        <td class="virtue">Super Game Boost for faster gaming</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon12.png')?>" alt=""></td>
	        <td class="virtue">1-click to update drivers</td>
	        <td class="itema daysDes">Expires after <span class="days">3</span> <span class="dayStr">days</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
	        <td class="virtue">Up to 100% higher update speed</td>
	        <td class="itema daysDes">Expires after <span class="days">3</span> <span class="dayStr">days</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
	        <td class="virtue">Fix devices error for safer PC</td>
	        <td class="itema daysDes">Expires after <span class="days">3</span> <span class="dayStr">days</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon09.png')?>" alt=""></td>
	        <td class="virtue">Large database with 4,500,000+ drivers support</td>
	        <td class="itema daysDes">Expires after <span class="days">3</span> <span class="dayStr">days</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon10.png')?>" alt=""></td>
	        <td class="virtue">Update and install network drivers offline <sup><em>New</em></sup></td>
	        <td class="itema daysDes">Expires after <span class="days">3</span> <span class="dayStr">days</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon11.png')?>" alt=""></td>
	        <td class="virtue">Priority to update the stability-first drivers <sup><em>New</em></sup></td>
	        <td class="itema daysDes">Expires after <span class="days">3</span> <span class="dayStr">days</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	    </tbody>
	    <tfoot>
	      <tr>
	        <th colspan="2"></th>
	        <th class="itema"></th>
	        <th class="space"></th>
	        <th class="itemb">
	          <p><b>$19.95</b> <del>$74.85</del></p>
	          <a class="buybtn" 
	             href="<?= $buyUrl; ?>"
	             onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb82021trialendsale') ">
	          	<i class="all-icons"></i> Buy Now
	          </a>
	          <p>1 Year Subscription / 3 PCs</p>
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
	</dl>
	<div class="copyright">
		<p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	    <div class="left fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/></div>
	    <h2 class="fl"><span class="off">75%</span> OFF</h2>
	    <div class="price fr">
	    	<h3>Keep All Drivers Up-to-date in Whole Year!</h3>
	    	<a class="buybtn" 
	    	   href="<?= $buyUrl; ?>"
	    	   onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb82021trialendsale') ">
	    		<i class="all-icons"></i> Buy Now
	    	</a>
	    	<p>1 Year Subscription / 3 PCs</p>
	    </div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script type="text/javascript">
	var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
	transData = JSON.parse(transDataJson);
</script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>