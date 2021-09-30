<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
if (!empty($_GET['AFF'])) $_GET['aff'] = $_GET['AFF'];

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'spring2021_en' . $date;
	if (empty($_COOKIE[$c_name])) {
		$packsNum = rand(50, 100);
		setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			$packsNum = 3;
		} else {
			$packsNum = $_COOKIE[$c_name];
			$packsNum -- ;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(['packsNum' => $packsNum]);
	exit();
}
if(in_array($_GET['st'],array('dbxmasr'))){
    $refStr='-'.$_GET['st'];
}else{
    $refStr='';
}
if(!empty($_GET['to'])){
    $refStr.='-'.$_GET['to'];
}
if($_GET['to']=='purchase-6'){
    if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
        if(count($matches[1])>=2){
            $refStr.='-'.$matches[1][0].$matches[1][1];
        }
    }
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
if(!empty($_GET['pop'])){
    $refStr.='-'.$_GET['pop'];
}
/*if($_GET['pop']=='x_db'){
	$refStr.='-'.$_GET['pop'];
	if(in_array($_GET['user'],array('1','2'))){
		$refStr.=$_GET['user'];
	}
}*/
$transData=json_decode(base64_decode($_GET['idata']));

if(!empty($_GET['ref'])){
    $refStr.='-'.$_GET['ref'];
}
if(!empty($_GET['insur'])){
    $refStr.='-'.$_GET['insur'];
}
if(!empty($_GET['pdt'])){
    $refStr.='-'.$_GET['pdt'];
}
if(!empty($_GET['finstd'])){
    $refStr.='-f'.$_GET['finstd'];
}
$paramPri=$_GET['pri'];
if((!empty($paramPri))&&$transData->$paramPri!==null){
    $refStr.='-'.$paramPri.$transData->$paramPri;
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Up to 80% OFF to Get Driver Booster PRO with Free Gifts</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
	
</head>
<body id="body">
	<div id="touming"></div>
	<div class="banner-wrap">
		<div class="banner">
			<a class="logo" href="https://www.iobit.com/en/index.php"></a>
			<div class="banner-title"><img src="<?php echo getStaticUrl('images/title.png')?>" style="margin-right: -40px;" /></div>
			<div class="banner-cont">
				<div class="box"></div>
				<div class="heart label80"></div>
				<div class="box-gift"></div>
				<div class="banner-option">
					<ul>
						<li class="custom-radio">
							<input type="radio" name="opinions" id="box2" value="1" >
							<a></a>
							<label for="box2">Quarterly Plan<i>Save 20%</i></label>
							<span>$14.95<i>$18.72</i></span>
						</li>
						<li class="custom-radio">
							<input type="radio" name="opinions" id="box3" value="2">
							<a></a>
							<label for="box3">Half-year Plan<i>Save 55%</i></label>
							<span>$16.95<i>$37.43</i></span>
						</li>
						<li class="custom-radio active">
							<input type="radio" name="opinions" id="box4" value="3" checked="">
							<a></a>
							<label for="box4">Annual Plan<i>Save 80%</i></label>
							<span>$24.95<i>$114.83</i></span>
							<p class="banner-count"><i></i><span class="active"></span> Left Only!</p>
							<div class="getFreeGifts" style="">Get Free Gifts</div>
						</li>
					</ul>
					
					<div class="getItNow">
						<a class="button" id="planC" onclick="ga('send', 'event', 'db1495buy', 'buy', 'dbpurchase-2021spring')  " href="https://www.iobit.com/buy.php?product=db83m1495&ref=en-db3pc3mmar2021<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db">Activate Now</a>
						<a class="button" id="planB" onclick="ga('send', 'event', 'db1695buy', 'buy', 'dbpurchase-2021spring')" href="https://www.iobit.com/buy.php?product=db86m1695&ref=en-db3pc6mmar2021<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db">Activate Now</a>
						<a class="button" id="planA" onclick="ga('send', 'event', 'db2495buy', 'buy', 'dbpurchase-2021spring')" href="https://www.iobit.com/buy.php?product=db812m2495pack&ref=en-db3pc12mmar2021<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db" style="display: block;">Activate Now</a>
						<p> 100% 60-day Money Back Guarantee</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="content">
			<h3 class="screen-title">How Does Driver Booster PRO Help to Save Your Time?</h3>
			<div class="prod-ui pageInit" data-animation="on">
				<div class="rocket"></div>
				<div class="linePoint"></div>
				<div class="point" style="top: -25px; left: -185px;">Auto scan and identify outdated, missing or faulty drivers as scheduled</div>
				<div class="point" style="top: -30px; left: 610px;">1-Click to download and install all drivers you need</div>
				<div class="point" style="top: 300px; left: -220px;">Accelerate driver <br />download speed up to 100% faster</div>
				<div class="point" style="top: 352px; left: 300px;">Update game ready drivers and components for smoother and quicker game wins</div>
				<div class="point" style="top: 210px; left: 665px;">Auto download and update drivers when your system is idle</div>
			</div>
		</div>
	</div>
	<div class="wrapper free-and-pro">
		<div class="content">
			<h3 class="screen-title">To See Clearly the Differences between FREE and PRO</h3>
			<div class="list">
				<ul class="left-list">
					<li>3,500,000+ driver database</li>
					<li>1-Click to update drivers</li>
				</ul>
				<ul class="right-list">
					<li>4,500,000+ driver database</li>
					<li>1-Click to update drivers</li>
					<li>100% faster driver download speed</li>
					<li>1-Click to fix device errors</li>
					<li>Offline driver update</li>
					<li>Update Game Ready Drivers</li>
					<li>Update necessary game components</li>
					<li>Driver backup for safe restore</li>
					<li>Priority to update the stability-first drivers</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="wrapper gift">
		<div class="content">
			<div class="gift-cont fl">
				<div class="gift-box iu"></div>
				<h3>IObit Uninstaller PRO</h3>
				<p><span>$0</span> <del style="margin: 0 5px;">$19.99</del> 1 Year / 1 PC</p>
				<font>Remove Useless Apps for <span>Cleaner PC</span></font>
			</div>
			<div class="gift-cont fr">
				<div class="gift-box sd"></div>
				<h3>Smart Defrag PRO</h3>
				<p><span>$0</span> <del style="margin: 0 5px;">$19.99</del> 1 Year / 1 PC</p>
				<font>Optimize Hard Drive for <span>Faster PC</span></font>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<!-- review start -->
		<div class="review">
		  <div class="content">
		    <dl class="active">
		      <dt>
		        <h3>Trusted by 150,000,000 Users</h3></dt>
		      <dd>
		        <h4>IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best.</h4>
		      </dd>
		      <dd>
		        Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.
		      </dd>
		    </dl>
		    <dl>
		      <dt>
		        <h3>Trusted by 150,000,000 Users</h3></dt>
		      <dd>
		        <h4></h4>
		      </dd>
		      <dd>
		        First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM,  i was able to play new game titles without having to shutdown any background process.  I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product.
		      </dd>
		    </dl>
		    <dl>
		      <dt>
		        <h3>Trusted by 150,000,000 Users</h3></dt>
		      <dd>
		        <h4></h4>
		      </dd>
		      <dd>
		        What a surprise to receive the new Driver Booster from IObit.  Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade.  Once upgrading was complete it was as if my PC had a complete makeover. Sensational!
		      </dd>
		    </dl>
		    <dl>
		      <dt>
		        <h3>Trusted by 150,000,000 Users</h3></dt>
		      <dd>
		        <h4></h4>
		      </dd>
		      <dd>
		        Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended.
		      </dd>
		    </dl>
		    <dl>
		      <dt>
		        <h3>Trusted by 150,000,000 Users</h3></dt>
		      <dd>
		        <h4></h4>
		      </dd>
		      <dd>
		        It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB7. Easy to use and fast downloads it is the best tool in the Market until now!
		      </dd>
		    </dl>
		  </div>
		  <ul class="users clearfix">
		    <li class="active">
		      <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine">
		      </div>
		      <p>PC Magazine</p>
		    </li>
		    <li>
		      <div class="pic"><img src="<?php echo $pResUrl; ?>images/dunston-diaz.png" alt="Dunston Diaz"></div>
		      <p>Dunston Diaz</p>
		    </li>
		    <li>
		      <div class="pic"><img src="<?php echo $pResUrl; ?>images/harold-barr.png" alt="Harold Barr"></div>
		      <p>Harold Barr</p>
		    </li>
		    <li>
		      <div class="pic"><img src="<?php echo $pResUrl; ?>images/hishaam-salasa.png" alt="Hishaam Salasa">
		      </div>
		      <p>Hishaam Salasa</p>
		    </li>
		    <li>
		      <div class="pic">
		        <img src="<?php echo $pResUrl; ?>images/carlos-alexandre.png" alt="Carlos Alexandre Veríssimo">
		      </div>
		      <p>Carlos Alexandre Veríssimo</p>
		    </li>
		  </ul>
		</div>
		<!-- review end -->
	</div>
	<div class="wrapper awrads-bg">
		<!-- awards start -->
		<div class="awards">
		  <h2>World-wide Awards</h2>
		  <p>
		    As being trusted and awarded by those world-class media in the past seven years, you know you’ve got the right driver updater.
		  </p>
		  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
		</div>
		<!-- awards end -->
	</div>
	
	<div class="footer">
		<div class="footer-cont">
			<!-- service start -->
			<div class="service clearfix">
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
			    <dt><h3>We accept</h3></dt>
			    <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
			  </dl>
			</div>
			<!-- service end -->
			
			
		</div>
		<div class="footer-note">
			<p>
				Note:<br />
				*.Data may vary based on different system or computer.<br />
				*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
			</p>
			<p style="text-align: center; font-size: 14px; margin-top: 30px;">Copyright © 2005 - 2021 IObit. All Rights Reserved</p>
		</div>
	</div>
	<div class="float-footer">
		<div class="content planA" style="display: block;">
			<div class="box"></div>
			<div class="heart label80"></div>
			<div class="box-gift"></div>
			<div class="font-layer">
				<p style="font-size: 16px; font-weight: 700;">80% OFF to Get Annual Plan for 3 PCs</p>
				<p class="banner-count">Limited Offer <span class="active">100</span>Left Only!</p>
			</div>
			<div class="footer-btn">
				<p>Only $<span>24.95</span> <i>$114.83</i></p>
				<a class="button" onclick="ga('send', 'event', 'db2495buy', 'buy', 'dbpurchase-2021spring')" href="https://www.iobit.com/buy.php?product=db812m2495pack&ref=en-db3pc12mmar2021<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db">Activate Now</a>
			</div>
		</div>
		<div class="content planB">
			<div class="box"></div>
			<div class="heart label45"></div>
			<div class="font-layer">
				<p style="font-size: 16px; margin-top: 15px; font-weight: 700;">55% OFF to Get Half-year Plan for 3 PCs</p>
			</div>
			<div class="footer-btn">
				<p>Only $<span>16.95</span> <i>$37.43</i></p>
				<a class="button" onclick="ga('send', 'event', 'db1695buy', 'buy', 'dbpurchase-2021spring')" href="https://www.iobit.com/buy.php?product=db86m1695&ref=en-db3pc6mmar2021<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db">Activate Now</a>
			</div>
		</div>
		<div class="content planC">
			<div class="box"></div>
			<div class="heart"></div>
			<div class="font-layer">
				<p style="font-size: 16px; margin-top: 15px; font-weight: 700;">20% OFF to Get Quarterly Plan for 3 PCs</p>
			</div>
			<div class="footer-btn">
				<p>Only $<span>14.95</span> <i>$18.72</i></p>
				<a class="button" onclick="ga('send', 'event', 'db1495buy', 'buy', 'dbpurchase-2021spring')  " href="https://www.iobit.com/buy.php?product=db83m1495&ref=en-db3pc3mmar2021<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db">Activate Now</a>
			</div>
		</div>
	</div>
	
	<div class="pop-layer-wrap">
		<div class="pop-layer">
			<div class="box"></div>
			<div class="box-gift"></div>
			<p class="pop-count">Hurry, this offer is valid in <span class="active countNum">60</span> s</p>
			<div class="pop-price">
				<div style="width: 130px;">Original Price <span>$114.83</span></div>
				<div style="width: 108px;">Sale Price <span>$24.95</span></div>
				<div style="width: 160px; color: #000000; font-weight: 700;">Special Offer Price <span style="color: #d31605; font-size: 16px; text-decoration: none;">$22.95</span></div>
			</div>
			<div class="pop-button">
				<a href="https://www.iobit.com/buy.php?product=db812m2295pack&ref=en-db3pcpop12mmar2021<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db" onclick="ga('send', 'event', 'db2295buy', 'buy', 'dbpurchase-2021spring')">Get It Now</a>
			</div>
			<div class="pop-close" onclick="javascript:closePop();"></div>
		</div>
	</div>

<script>refStr = "<?= $refStr; ?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>