<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'decascdbimfiusdxr' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,78);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
$refStr = empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr .= empty($_GET['r'])?'':('-'.$_GET['r']);
include $pRootUrl.'include/common.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>90% OFF to get 5 PC optimization & security utilities -  Christmas  Sale | IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Best BLACK Friday Discount Offered</h1>
    <!-- content -->
	<div class="salecont">
		<div class="saleselbox">
			<ul class="clearfix">
				<li class="selbox selbox1 checked" data-id="asc" data-price="4999">
					<img src="<?php echo getStaticUrl('images/salebox1.png')?>" alt=""/>
				</li>
				<li class="selbox selbox2 checked" data-id="db" data-price="7485">
					<img src="<?php echo getStaticUrl('images/salebox2.png')?>" alt=""/>
				</li>
				<li class="selbox selbox3 checked" data-id="iu" data-price="4299">
					<img src="<?php echo getStaticUrl('images/salebox3.png')?>" alt=""/>
				</li>
				<li class="selbox selbox4 checked" data-id="imf" data-price="5495">
					<img src="<?php echo getStaticUrl('images/salebox4.png')?>" alt=""/>
				</li>
				<li class="selbox selbox6 checked" data-id="sd" data-price="3999">
					<img src="<?php echo getStaticUrl('images/salebox6.png')?>" alt=""/>
				</li>
			</ul>
		</div>
		
		<div class="salesedes clearfix">
			<div class="salesepro fl">
				<div class="salesepro-head clearfix">
					<h4 class="salesepro-name fl">PRODUCT</h4>
					<h4 class="salesepro-price fr">PRICE</h4>
				</div>
				<ul class="salesepro-cont">
					<li class="checked">
						<div class="salesepro-name" data-grid="asc"><p>Advanced SystemCare 14 PRO ( 1 Year / 3 PCs )</p></div>
						<div class="salesepro-price"><p>$49.99</p></div>
					</li>
					<li class="checked">
						<div class="salesepro-name" data-grid="db"><p>Driver Booster 8 PRO ( 1 Year / 3 PCs )</p></div>
						<div class="salesepro-price"><p>$74.85</p></div>
					</li>
					<li class="checked">
						<div class="salesepro-name" data-grid="iu"><p>IObit Uninstaller 10 PRO ( 1 Year / 3 PCs )</p></div>
						<div class="salesepro-price"><p>$42.99</p></div>
					</li>
					<li class="checked">
						<div class="salesepro-name" data-grid="imf"><p>IObit Malware Fighter 8 PRO ( 1 Year / 3 PCs )</p></div>
						<div class="salesepro-price"><p>$54.95</p></div>
					</li>
					<li class="checked">
						<div class="salesepro-name" data-grid="sd"><p>Smart Defrag 6 PRO ( 1 Year / 3 PCs )</p></div>
						<div class="salesepro-price"><p>$39.99</p></div>
					</li>
				</ul>
			</div>
			
			<div class="saleseorder fr">
				<div class="saleseordercnt">
					<div class="saleseorder-head">
						<div class="saleseorder-name"><h4>Order Summary</h4></div>
						<div class="saleseorder-price"><img src="<?php echo getStaticUrl('images/saletoday.png')?>" alt=""></div>
					</div>
					<div class="saleseorder-cont">
						<div class="saleseorder-items">
							<div class="saleseorder-name"><p>ITEMS SUBTOTAL <b>(<span class="quatynum">5</span>)</b></p></div>
							<div class="saleseorder-price"><p>$<span class="orprice">262.77</p></span></div>
						</div>
						<div class="saleseorder-discount">
							<div class="saleseorder-name"><p>DISCOUNT (<span class="saleratio">90</span>% OFF) </p></div>
							<div class="saleseorder-price"><p>-$<span class="salernum">236.49</span></p></div>
						</div>
					</div>
					<div class="saleseorder-buy">
						<div class="saleseorder-total">
							<div class="saleseorder-name"><p><span>Total</span></p></div>
							<div class="saleseorder-price"><p>$<span class="salertotal">26.28</span></p></div>
						</div>
						<a href="https://www.iobit.com/buy.php?product=2020ascdbimfiusd2628&ref=xr_ascdbimfiusd<?= $refStr; ?>&refs=purchase_5bundlexr" onclick="ga('send', 'event', 'ascdbimfiusdbuy', 'buy', '5bundlepurchasexr-ascdbimfiusd');" class="buybtn banbuybtn"><span>Buy Now</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
<!-- end banner -->

<div class="salekeep">
	<div class="wrapper">
		<div class="salefea-title">
			<img src="<?php echo getStaticUrl('images/salearrdown.png')?>" alt="">
			<p>Better PC Performance</p>
			<h2>Keep your PC running smoothly</h2>
		</div>
		<div class="clearfix salekeep-cont">
			<div class="salekeep-cntbox salekeep-cntbox1 fl">
				<div class="salekeep-cntmid">
					<div class="salekeep-cntpro salekeep-cntproasc">
						<figure>
							<img src="<?php echo getStaticUrl('images/saleicon-asc.png')?>" alt="">
							<figcaption>
								<h4>Advanced SystemCare 14 PRO</h4>
								<p>More advanced AI optimization</p>
							</figcaption>
						</figure>
					</div>
					<div class="salekeep-cntdes clearfix">
						<div class="salekeep-cntwordp">
							<ul>
								<li><b>200%*</b> faster system running</li>
								<li><b>300%*</b> faster download, watching, etc.</li>
								<li><b>Private</b> web surfing without traces</li>
								<li><b>Stop</b> untrusted access to privacy</li>
								<li><b>Real-time</b> protection from threats</li>
							</ul>
						</div>
						<div class="salekeep-cntstore">
							<h3>SAVE 70%</h3>
							<div class="salekeep-cntprice">
								<p class="salekeep-price">$<big>14</big>.77<del>$49.99</del></p>
								<a href="https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=xr_asc<?= $refStr; ?>&refs=purchase_5bundlexr" onclick="ga('send', 'event', 'ascbuy', 'buy', '5bundlepurchasexr-ascdbimfiusd');" class="buybtn"><span>Buy Now</span></a>
								<div class="salekeep-cnttips">1 Year / 3 PCs</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="salekeep-cntbox salekeep-cntbox2 fr">
				<div class="salekeep-cntmid">
					<div class="salekeep-cntpro salekeep-cntprodb">
						<figure>
							<img src="<?php echo getStaticUrl('images/saleicon-db.png')?>" alt="">
							<figcaption>
								<h4>Driver Booster 8 PRO</h4>
								<p>Larger driver database</p>
							</figcaption>
						</figure>
					</div>
					<div class="salekeep-cntdes clearfix">
						<div class="salekeep-cntwordp">
							<ul>
								<li><b>4,500,000+</b> drivers support</li>
								<li><b>100%*</b> faster driver updating</li>
								<li><b>28%*</b> faster gaming</li>
								<li><b>Offline</b> driver updating</li>
								<li><b>Auto</b> backup and restore</li>
								<li><b>Fixing issues</b> of video, sound, Internet connection, etc.</li>
							</ul>
						</div>
						<div class="salekeep-cntstore">
							<h3>SAVE 70%</h3>
							<div class="salekeep-cntprice">
								<p class="salekeep-price">$<big>19</big>.95<del>$74.85</del></p>
								<a href="https://www.iobit.com/buy.php?product=2020db3pc1995&ref=xr_db<?= $refStr; ?>&refs=purchase_5bundlexr" onclick="ga('send', 'event', 'dbbuy', 'buy', '5bundlepurchasexr-ascdbimfiuisusd');" class="buybtn"><span>Buy Now</span></a>
								<div class="salekeep-cnttips">1 Year / 3 PCs</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="saleenjoy">
	<div class="wrapper">
		<div class="salefea-title">
			<img src="<?php echo getStaticUrl('images/salearrdown.png')?>" alt="">
			<p>Safer Surfing Online</p>
			<h2>Enjoy overall protection when surfing online</h2>
		</div>
		<div class="saleenjoy-cont clearfix">
			<div class="saleenjoy-probox saleenjoy-probox1 fl">
				<div class="saleenjoy-proboxcnt">
					<figure>
						<img src="<?php echo getStaticUrl('images/saleicon-imf.png')?>" alt="">
						<figcaption>
							<h4>IObit Malware Fighter 8 PRO</h4>
							<p>More comprehensive protection</p>
						</figcaption>
					</figure>
					<h3 class="saleenjoy-save">SAVE 70%</h3>
					<p class="salekeep-price">$<big>16</big>.99<del>$54.95</del></p>
					<a href="https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=xr_imf<?= $refStr; ?>&refs=purchase_5bundlexr" onclick="ga('send', 'event', 'imfbuy', 'buy', '5bundlepurchasexr-ascdbimfiuisusd');" class="buybtn"><span>Buy Now</span></a>
					<div class="saleenjoy-cnttips">1 Year / 3 PCs</div>
					<div class="saleenjoy-cntwordp">
						<ul>
							<li><b>Accurate</b> detection with Bitdefender engine</li>
							<li><b>209 million</b> malware database</li>
							<li><b>Real-time</b> protection</li>
							<li><b>Ransomware</b> protection</li>
							<li><b>Sensitive</b> data protection</li>
							<li><b>Prevention</b> of infection via USB drive</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="saleenjoy-probox saleenjoy-probox2 fl">
				<div class="saleenjoy-proboxcnt">
					<figure>
						<img src="<?php echo getStaticUrl('images/saleicon-iu.png')?>" alt="">
						<figcaption>
							<h4>IObit Uninstaller 10 PRO</h4>
							<p>More complete uninstall</p>
						</figcaption>
					</figure>
					<h3 class="saleenjoy-save">SAVE 70%</h3>
					<p class="salekeep-price">$<big>12</big>.97<del>$42.99</del></p>
					<a href="https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=xr_iu<?= $refStr; ?>&refs=purchase_5bundlexr" onclick="ga('send', 'event', 'iubuy', 'buy', '5bundlepurchasexr-ascdbimfiuisusd');" class="buybtn"><span>Buy Now</span></a>
					<div class="saleenjoy-cnttips">1 Year / 3 PCs</div>
					<div class="saleenjoy-cntwordp">
						<ul>
							<li><b>Force uninstall</b> of stubborn apps</li>
							<li><b>Uninstall</b> of bundled programs</li>
							<li><b>In-depth</b> cleaning of leftovers</li>
							<li><b>Removal</b> of harmful plugins</li>
							<li><b>1-click</b> update of outdated program</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="saleenjoy-probox saleenjoy-probox3 fr">
				<div class="saleenjoy-proboxcnt">
					<figure>
						<img src="<?php echo getStaticUrl('images/saleicon-sd.png')?>" alt="">
						<figcaption>
							<h4>Smart Defrag 6 PRO</h4>
							<p class="sd">Faster and deeper defragmentation</p>
						</figcaption>
					</figure>
					<h3 class="saleenjoy-save">SAVE 70%</h3>
					<p class="salekeep-price">$<big>11</big>.99<del>$39.99</del></p>
					<a href="https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sd<?= $refStr; ?>&refs=purchase_5bundlexr" onclick="ga('send', 'event', 'sdbuy', 'buy', '5bundlepurchasexr-ascdbimfiuisusd');" class="buybtn"><span>Buy Now</span></a>
					<div class="saleenjoy-cnttips">1 Year / 3 PCs</div>
					<div class="saleenjoy-cntwordp">
						<ul>
							<li><b>Auto defrag</b> at idle time</li>
							<li><b>Monitor</b> the disk status in real-time</li>
							<li><b>100%* faster</b> startup with Boot Time Defrag</li>
							<li><b>200%* faster</b> file access with defragmentation</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="snow-bg">
	<div class="saleexclu">
		<div class="wrapper">
			<h2 class="saleexclu-title">ONCE PER YEAR ONLY Get Exclusive 90% OFF to Enjoy a Faster, Cleaner, Safer PC</h2>
			<div class="saleexclu-cont">
				<img class="salecent-box" src="<?php echo getStaticUrl('images/salecent-box.png')?>" alt="">
				<ul class="salecent-ul">
					<li>Advanced SystemCare 14 PRO</li>
					<li>Driver Booster 8 PRO</li>
					<li>IObit Uninstaller 10 PRO</li>
					<li>IObit Malware Fighter 8 PRO</li>
					<li>Smart Defrag 6 PRO</li>
				</ul>
				<div class="saleexclu-super">
					<img class="salecent-arrow" src="<?php echo getStaticUrl('images/salecent-arrow.png')?>" alt="">
					<div class="saleexclu-supcnt">
						<h4>Super Value Pack <img src="<?php echo getStaticUrl('images/salecent-today.png')?>" alt=""></h4>
						<p>Comprehensively optimize and protect your PC.</p>
						<p class="salekeep-price">$<big>26</big>.28<del>$262.77</del></p>
						<div class="saleexclu-buy"><a href="https://www.iobit.com/buy.php?product=2020ascdbimfiusd2628&ref=xr_ascdbimfiusd<?= $refStr; ?>&refs=purchase_5bundlexr" onclick="ga('send', 'event', 'ascdbimfiusdbuy', 'buy', '5bundlepurchasexr-ascdbimfiusd');" class="buybtn"><span>Buy Now</span></a></div>
						<div class="saleexclu-cnttips">1 Year / 3 PCs</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="award wrapper">
		<h2>Trusted and awarded by these media</h2>
		<img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
	</div>
</div>

<div class="review wrapper">
	<div class="content">
    <span class="next"></span>
    <span class="prev"></span>
		<div class="message">
			<div class="roll">
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""></dt>
					<dd>
						<h3>Media Review</h3>
						<p>
							Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience.								
						</p>
						<h4>Cnet</h4>
					</dd>
				</dl>	
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/brendon-rourke.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>
							I have been using ASC for years now. I have recently tested the latest version V14. And it is by far the most comprehensive version to date. IObit continue to improve their Products and Technology. With more options and easier navigation that help find solutions. I don't need to shop elsewhere.	
						</p>
						<h4>Brendon O'Rourke</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>
							First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM, i was able to play new game titles without having to shutdown any background process. I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product.
						</p>
						<h4>Dunston Diaz</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>
							I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.
						</p>
						<h4>Gelu Batir</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>
							I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed.		
						</p>
						<h4>Samrat Kumar Chakrabortty</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/hans.png')?>" alt=""></dt>
					<dd>
						<h3>Media Review</h3>
						<p>
							I am a user of Smart defrag for many years. Since using this fantastic software my desktop and my laptop are fast and save. Together with advance system care ultimate you have a complete tool for keeping you system up to date, fast and secure.Using it every day without need to wait (pc closes itself) you keep your system in top condition even if you have no technical background!	
						</p>
						<h4>Hans</h4>
					</dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<!-- service -->
<div class="service">
  <div class="wrapper">
	  <div class="clearfix">
		  <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
          <p>We're confident that activating PRO edition will maximize your <br> PC performance and security for an affordable price!</p>
        </dd>
		  </dl>
		  <dl class="last">
        <dt><h3>We accept</h3></dt>
        <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""></dd>
		  </dl>
	  </div>
    <div class="note">
		<p>Note:</p>
		<p>*.Data may vary based on different system or computer.</p>
		<p>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</p>
	</div>
	<div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
  </div>
</div>
<!-- end service -->
<script>refStr = "<?= $refStr; ?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>