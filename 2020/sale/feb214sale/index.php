<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'feb214sale' . $date;
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
$refStr .= empty($_GET['to'])?'':('-'.$_GET['to']);
include $pRootUrl.'include/common.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Up to 83% Off on IObit Valued Products - Valentine's Day Sale</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
	
</head>
<body>
	<div class="banner-wrap">
		<div class="banner">
			<a class="logo" href="https://www.iobit.com/en/index.php"></a>
			<div class="banner-title"><img src="<?php echo getStaticUrl('images/title.png')?>" style="margin-right: -40px;" /><p>Choose a valentine for Advanced SystemCare Pro at only $21.4</p></div>
			<div class="banner-cont">
				<div class="heart">83</div>
				<div class="boxes box2"></div>
				<div class="boxes box3"></div>
				<div class="boxes box4"></div>
				<div class="banner-option">
					<div class="option-title"><p>Product</p><span>Price</span></div>
					<ul>
						<li class="custom-radio">
							<input type="radio" name="opinions-1" id="box1" value="1" checked="">
							<label for="box1" style="background-position:-1px 2px;">Advanced SystemCare 14 PRO<i> (1 Year / 3 PCs)</i></label>
							<span>$49.99</span>
						</li>
						<li class="custom-radio">
							<input type="radio" name="opinions" id="box2" value="1" checked="">
							<label for="box2">Driver Booster 8 PRO<i> (1 Year / 3 PCs)</i></label>
							<span>$74.85</span>
						</li>
						<li class="custom-radio">
							<input type="radio" name="opinions" id="box3" value="2">
							<label for="box3">IObit Uninstaller 10 PRO<i> (1 Year / 3 PCs)</i></label>
							<span>$29.99</span>
						</li>
						<li class="custom-radio">
							<input type="radio" name="opinions" id="box4" value="3">
							<label for="box4">IObit Malware Fighter 8 PRO<i> (1 Year / 3 PCs)</i></label>
							<span>$54.95</span>
						</li>
					</ul>
					<div class="total">
						<p id="sub-total">Subtotal: <span style="text-decoration: line-through;">$124.8</span></p>
						<p id="total">Total: <span style="color:#4fd36c; font-size: 24px;">$21.4</span></p>
					</div>
					<div class="getItNow">
						<a class="button anim" id="ascdbbuy" style="display: block;" onclick="ga('send', 'event', 'ascdbbuy', 'buy', '214sale');"
						href="https://www.iobit.com/buy.php?product=2021ascdb3pc214&ref=en-214ascdb<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_214sale">Get It Now</a>
						<a class="button" id="asciubuy" onclick="ga('send', 'event', 'asciubuy', 'buy', '214sale');"
						href="https://www.iobit.com/buy.php?product=2021asciu3pc214&ref=en-214asciu<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_214sale">Get It Now</a>
						<a class="button" id="ascimfbuy" onclick="ga('send', 'event', 'ascimfbuy', 'buy', '214sale');"
						href="https://www.iobit.com/buy.php?product=2021ascimf3pc214&ref=en-214ascimf<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_214sale">Get It Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="otherProduct">
		<div class="small-title st1"></div>
		<div class="arrange arr-two">
			<div class="prod-cont">
				<!-- <div class="prod-img" style="background-image: url(images/oprod-1.png);"></div> -->
				<div class="prod-img" style="background-image: url('<?php echo getStaticUrl('images/oprod-1.png')?>');"></div>
				<h3>Advanced SystemCare 14 PRO</h3>
				<p>$19.99<span>$49.99</span></p>
				<div style="padding-left: 30px;">
					<font>• Intelligently care PC with AI</font>
					<font>• 200% faster system running</font>
					<font>• 300% faster Internet speedup</font>
				</div>
				<a class="button" href="https://www.iobit.com/buy.php?product=asc14ebook3pc&ref=en-214asc<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_214sale" 
				onclick="ga('send', 'event', 'ascbuy', 'buy', '214sale');">Get It Now</a>
			</div>
			<div class="prod-cont">
				<div class="prod-img" style="background-image: url('<?php echo getStaticUrl('images/oprod-2.png')?>');"></div>
				<h3>Driver Booster 8 PRO</h3>
				<p>$22.95<span>$74.85</span></p>
				<div style="padding-left: 30px;">
					<font>• 4,500,000+ driver database</font>
					<font>• Automatic & Safe Driver Update</font>
					<font>• Better Game Performance</font>
				</div>
				<a class="button" href="https://www.iobit.com/buy.php?product=driverbooster8&ref=en-214db<?= $refStr; ?>&aff<?php echo $_GET['aff']?>=&refs=purchase_214sale" 
				onclick="ga('send', 'event', 'dbbuy', 'buy', '214sale');">Get It Now</a>
			</div>
		</div>
		<div class="small-title st2"></div>
		<div class="arrange arr-two">
			<div class="prod-cont">
				<div class="prod-img" style="background-image: url('<?php echo getStaticUrl('images/oprod-3.png')?>');"></div>
				<h3>IObit Malware Fighter 8 PRO</h3>
				<p>$23.99<span>$54.95</span></p>
				<font>• Detect & remove 209 million threats</font>
				<font>• Protect personal data with password</font>
				<font>• Block ransomware attacks</font>
				<a class="button" href="https://www.iobit.com/buy.php?product=imf83pc&ref=en-214imf<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_214sale" 
				onclick="ga('send', 'event', 'imfbuy', 'buy', '214sale');">Get It Now</a>
			</div>
			<div class="prod-cont">
				<div class="prod-img" style="background-image: url('<?php echo getStaticUrl('images/oprod-4.png')?>');"></div>
				<h3>IObit Uninstaller 10 PRO</h3>
				<p>$19.99<span>$29.99</span></p>
				<font>• Completely delete stubborn programs</font>
				<font>• Automatically clean leftovers</font>
				<font>• Monitor and record system changes</font>
				<a class="button" href="https://www.iobit.com/buy.php?product=iu10pro3pc1999&ref=en-214iu<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_214sale" 
				onclick="ga('send', 'event', 'iubuy', 'buy', '214sale');">Get It Now</a>
			</div>
		</div>
		<div class="small-title st3"></div>
		<div class="arrange arr-three">
			<div class="prod-cont">
				<div class="prod-img" style="background-image: url('<?php echo getStaticUrl('images/oprod-5.png')?>');"></div>
				<h3 >Advanced SystemCare Ultimate 14 PRO</h3>
				<p>$29.99<span>$49.99</span></p>
				<font>
					Optimize for ultimate PC performance<br />
					Defend against viruses in real time<br />
					Protects against malicious infection
				</font>
				<a class="button" href="https://www.iobit.com/buy.php?product=ascultimate14&ref=en-214ascu<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_214sale" 
				onclick="ga('send', 'event', 'ascubuy', 'buy', '214sale');">Get It Now</a>
			</div>
			<div class="prod-cont">
				<div class="prod-img" style="background-image: url('<?php echo getStaticUrl('images/oprod-6.png')?>');"></div>
				<h3>IObit Software Updater 3 PRO</h3>
				<p>$12.97<span>$29.99</span></p>
				<font>
					Automatically update software<br />
					1-click to keep all software updated<br />
					Directly download & install essential software
				</font>
				<a class="button" href="https://www.iobit.com/buy.php?product=isu33pc&ref=en-214isu<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_214sale" 
				onclick="ga('send', 'event', 'isubuy', 'buy', '214sale');">Get It Now</a>
			</div>
			<div class="prod-cont">
				<div class="prod-img" style="background-image: url('<?php echo getStaticUrl('images/oprod-7.png')?>');"></div>
				<h3>Smart Defrag 6 PRO</h3>
				<p>$19.99<span>$29.99</span></p>
				<font>
					Faster defrag speed<br />
					Auto defrag select files<br />
					Quicker PC startup
				</font>
				<a class="button" href="https://www.iobit.com/buy.php?product=sd6pro&ref=en-214sd<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_214sale" 
				onclick="ga('send', 'event', 'sdbuy', 'buy', '214sale');">Get It Now</a>
			</div>
			<div class="prod-cont">
				<div class="prod-img" style="background-image: url('<?php echo getStaticUrl('images/oprod-8.png')?>');"></div>
				<h3>Start Menu 8 PRO</h3>
				<p>$7.99<span>$22.95</span></p>
				<font>
					Back to classic start menu with 1-click<br />
					Quick & powerful file search<br />
					No-ads and clean start menu
				</font>
				<a class="button" href="https://www.iobit.com/buy.php?product=sm83pc&ref=en-214sm8<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_214sale" 
				onclick="ga('send', 'event', 'sm8buy', 'buy', '214sale');">Get It Now</a>
			</div>
			<div class="prod-cont">
				<div class="prod-img" style="background-image: url('<?php echo getStaticUrl('images/oprod-9.png')?>');"></div>
				<h3>Protected Folder</h3>
				<p>$19.95<span>$39.95</span></p>
				<font>
					Protect your files from malicious attacks<br />
					1 password for all files<br />
					Protect privacy from others
				</font>
				<a class="button" href="https://www.iobit.com/buy.php?product=protected-folder&ref=en-214pf<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_214sale" 
				onclick="ga('send', 'event', 'pfbuy', 'buy', '214sale');">Get It Now</a>
			</div>
			<div class="prod-cont">
				<div class="prod-img" style="background-image: url('<?php echo getStaticUrl('images/oprod-10.png')?>');"></div>
				<h3>AMC Security</h3>
				<p>$9.99<span>$19.99</span></p>
				<font>
					Auto scan & clean your mobile<br />
					Secure your shopping payment<br />
					Anti-phishing & anti-theft
				</font>
				<a class="button" href="https://www.iobit.com/buy.php?product=amc&ref=en-214amc<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_214sale" 
				onclick="ga('send', 'event', 'amcbuy', 'buy', '214sale');">Get It Now</a>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer-cont">
			<div class="left">
				<img src="<?php echo getStaticUrl('images/footer-bg.png')?>"/>
				<h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
				<p>We're confident that activating PRO edition will improve your PC performance for affordable price!</p>
			</div>
			<div class="right">
				<h3>We accept</h3>
				<img src="<?php echo getStaticUrl('images/footer-icons.png')?>" />
			</div>
		</div>
		<div class="footer-note">
			<p>Note:<br />*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</p>
			<p style="text-align: center; font-size: 14px; margin-top: 10px;">Copyright © 2005 - 2021 IObit. All Rights Reserved</p>
		</div>
	</div>

<script>
	refStr = "<?= $refStr; ?>";	
	aff="<?php echo $_GET['aff']?>"
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>