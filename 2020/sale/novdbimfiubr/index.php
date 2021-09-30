<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enbtwob_p' . $date;
  $c_name_t='enbtwob_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(89,105);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
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
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>70% OFF to buy 2 utilities and get our flagship product for Free  - Black Friday Sale | IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/animate.css')?>">
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
	<div class="content">
		<ul class="list clearfix">
			<li code="0" class="ac one ones">
				<p class="soldoutimg"></p>
			<p class="ac-s"></p>
				<i><del></del></i>
				<p class="img-box-false"></p>
				<p class="img-box-true"></p>
				<p class="text"><span class="time-text"></span> left only</p>
			</li>
			<li code="1" class="twos">
			<i><del></del></i>
			<p class="ac-s"></p>
				<p class="img-box-false"></p>
				<p class="img-box-true"></p>
				<p class="text">$19.95</p>
			</li>
			<li code="2" class="threes">
			<p class="ac-s"></p>
			<i><del></del></i>
			<p class="img-box-false"></p>
				<p class="img-box-true"></p>
				<p class="text">$16.99</p>
			</li>
			<li code="3" class="fours">
			<p class="ac-s"></p>
			<i><del></del></i>
			<p class="img-box-false"></p>
				<p class="img-box-true"></p>
				<p class="text">$12.97</p>
			</li>
		</ul>
		<div class="change clearfix">
			<div class="left box clearfix">
				<p class="p"><i class="f-ds"></i></p>
				<dl>
					<dt class="clearfix">
						<span>Shopping Cart</span>
						<span class="num">3 Items</span>
					</dt>
					<table>
						<thead>
							<tr><td>PRODUCT</td><td width="100">PCS</td><td>ORIGINAL PRICE</td><td>PRICE</td></tr>
						</thead>
						<tbody>
							<tr><td>Driver Booster 8 PRO</td><td>3 PCs</td><td>$74.85</td><td>$0</td></tr>
							<tr><td>IObit Uninstaller 10 PRO</td><td>3 PCs</td><td>$42.99</td><td>$12.97</td></tr>
							<tr><td>IObit Malware Fighter 8 PRO</td><td>3 PCs</td><td>$54.95</td><td>$16.99</td></tr>
						</tbody>
					</table>
					<div class="tis">
						<span><span class="time-text"></span>&nbsp;left in stock only</span>
						<p></p>
					</div>
				</dl>
			</div>
			<div class="right box">
				<dl>
					<dt><span>Order Summary</span></dt>
					<dd>
						<p class="clearfix"><span>Subtotal</span><span class="Subtotal right">$172.79</span></p>
						<p class="border clearfix"><span>Discount</span><span class="Discount right">70% OFF + Free Gift</span></p>
						<p class="clearfix total"><span>Total</span><span class="Total right">$29.96</span></p>
						<a 
						href="https://www.iobit.com/buy.php?product=2020dbimfiu2996&ref=br_dbimfiu<?= $refStr; ?>&refs=purchase_3bundlebf"
						onclick="ga('send', 'event', 'dbimfiubuy', 'buy', '3bundlepurchasebf-dbimfiu');" >
							<button class="buy-new">
							<i></i> Buy Now</button>
						</a>
					</dd>
				</dl>
			</div>
		</div>
	</div>
  </div>
</div>
<!-- end banner -->
<div class="as-item project-item">
	<img class="bg" src="<?php echo getStaticUrl('images/as-bg.png')?>" alt="">
	<div class="feature wrapper clearfix">
		<img class="left" src="<?php echo getStaticUrl('images/as.png')?>" alt="">
		<dl class="right">
			<dt>
				<p>Best Driver Updater</p>
				<span>Smoother PC and Gaming</span>
			</dt>
			<dd>
				<ul class="clearfix db">
					<li class="fl">
						<div class="item">
							<p>4,500,000+ Drivers</p>
							<span>are supported being updated</span>
						</div>
						<div class="item">
							<p>Smoother Launching</p>
							<span>with suitable game components</span>
						</div>
					</li>
					<li class="fr">
						<div class="item">
							<p>28% Faster Gaming</p>
							<span>with related game-ready drivers</span>
						</div>
						<div class="item">
							<p>Secure Updating</p>
							<span>by backing up drivers automatically</span>
						</div>
					</li>
				</ul>
				<div class="buy-btn clearfix">
					<span><strong>$<b>19</b>.95</strong> <del>$74.85</del></span>
					<a 
						href="https://www.iobit.com/buy.php?product=2020db3pc1995&ref=br_db<?= $refStr; ?>&refs=purchase_3bundlebf"
						onclick="ga('send', 'event', 'dbbuy', 'buy', '3bundlepurchasebf-dbimfiu');" >
					<button class="buy-new"><i></i> Buy Now</button>
					</a>
				</div>
			</dd>
		</dl>
	</div>
</div>
<div class="db-item project-item">
	<div class="feature wrapper clearfix">
	<dl class="left">
			<dt>
				<p>Powerful PC Protector</p>
				<span>Secure PC and Personal Data</span>
			</dt>
			<dd>
				<ul class="clearfix mf">
					<li class="fl">
						<div class="item">
							<p>200 Million Threats</p>
							<span>detected with Bitdefender anti-virus engine</span>
						</div>
						<div class="item">
							<p>Real-time Protection</p>
							<span>keeps external threats away</span>
						</div>
					</li>
					<li class="fr">
						<div class="item">
							<p>Stop Ransomware</p>
							<span>from hijacking your computer</span>
						</div>
						<div class="item">
							<p>Safer Personal Data</p>
							<span>by protecting important files with password</span>
						</div>
					</li>
				</ul>
				<div class="buy-btn clearfix">
					<span><strong>$<b>16</b>.99</strong> <del>$54.95</del></span>
					<a 
						href="https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=br_imf<?= $refStr; ?>&refs=purchase_3bundlebf"
						onclick="ga('send', 'event', 'imfbuy', 'buy', '3bundlepurchasebf-dbimfiu');" >
					<button class="buy-new"><i></i> Buy Now</button>
					</a>
				</div>
			</dd>
		</dl>
		<img class="right" src="<?php echo getStaticUrl('images/mf.png')?>" alt="">
	</div>
</div>
<div class="mf-item project-item">
	<img class="bg" src="<?php echo getStaticUrl('images/mf-bg.png')?>" alt="">
	<div class="feature wrapper clearfix">
		<img class="left" src="<?php echo getStaticUrl('images/iu_left.png')?>" alt="">
		<dl class="right">
			<dt>
				<p>Best Uninstall Tool</p>
				<span>Cleaner PC with no unwanted programs</span>
			</dt>
			<dd>
				<ul class="clearfix mf">
					<li class="fl">
						<div class="item">
							<p>Uninstall Stubborn Programs</p>
							<span>that cannot be removed through standard uninstall.</span>
						</div>
						
						<div class="item">
							<p>In-depth Cleaning</p>
							<span>ensures complete uninstall and leaves no leftovers. </span>
						</div>
					</li>
					<li class="fr">
					<div class="item">
							<p>Remove Malicious Plug-ins</p>
							<span>that may violate your online privacy.</span>
						</div>
					<div class="item">
							<p>Auto Clean Leftovers</p>
							<span>that other utilities cannot get rid of.</span>
						</div>
						
					</li>
				</ul>
				<div class="buy-btn clearfix">
					<span><strong>$<b>12</b>.97</strong> <del>$42.99</del></span>
					<a 
						href="https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=br_iu<?= $refStr; ?>&refs=purchase_3bundlebf"
						onclick="ga('send', 'event', 'iubuy', 'buy', '3bundlepurchasebf-dbimfiu');" >
					<button class="buy-new"><i></i> Buy Now</button>
					</a>
				</div>
			</dd>
		</dl>
	</div>
</div>


<div class="review wrapper">
	<div class="content">
    <span class="next"></span>
    <span class="prev"></span>
		<div class="message">
			<div class="roll">
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you.</p>
						<h4>Ali Tekin</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>What a surprise to receive the new Driver Booster from IObit. Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade. Once upgrading was complete it was as if my PC had a complete makeover. Sensational!</p>
						<h4>Harold Barr</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
					<dd>
						<h3>Media Review</h3>
						<p>Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.</p>
						<h4>PC Magazine</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.</p>
						<h4>Gelu Batir</h4>
					</dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<div class="award wrapper">
	<h2>Trusted and awarded by these media</h2>
	<img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
</div>
<div id="floatlayer" class="floatlayer">
	<img class="bg" src="<?php echo getStaticUrl('images/fl-bg.png')?>" alt=""/>	
  	<div class="wrapper default  clearfix">
		<div class="left fl">
			<img class="pc" src="<?php echo getStaticUrl('images/box-one-true.png')?>" alt=""/>
		</div>
		<div class="numer">
		<span class="s one">Buy 2 Utilities with <b>70% OFF</b> and Get</span>
		<span class="s two">Driver Booster PRO for FREE!</span>
		<div class="tis">
			<span><span class="time-text"></span>&nbsp;left in stock only</span>
			<p></p>
		</div>
		</div>
		<div class="price fr">
			<div class="buy-btn clearfix">
				<span><strong>$<b>29</b>.96</strong> <del>$172.79</del></span>
				<a 
						href="https://www.iobit.com/buy.php?product=2020dbimfiu2996&ref=br_dbimfiu<?= $refStr; ?>&refs=purchase_3bundlebf"
						onclick="ga('send', 'event', 'dbimfiubuy', 'buy', '3bundlepurchasebf-dbimfiu');" >
				<button class="buy-new"><i></i> Buy Now</button>
				</a>
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

<!-- floatlayer start -->

<!-- floatlayer end -->
<script>refStr = "<?= $refStr; ?>"</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>