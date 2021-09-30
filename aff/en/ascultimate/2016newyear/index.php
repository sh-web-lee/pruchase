<?php
error_reporting(0); 
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) -68807174;

//  禁止ADN缓存
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');

//  主要内容
if (empty($_GET['ref'])) $_GET['ref'] = 'ascu9';
// 折扣信息
$discountListArr = array(
	// 折扣比例、价格、购买链接标签
	'6m' => array('90', '$9.99', 'ascu9pf-6m'), // 到期大于6个月 pro2
	'6' => array('85', '$12.99', 'ascu9pf-6'), // 到期小于6个月 pro1
	'default' => array('70', '$29.99', 'ascu9pf'),
	'title' => array(
		'um9trial' => array(
			'6m' => 'Our Gift Pack - Exclusive for Advanced SystemCare PRO User!',
			'6' => 'Our Gift Pack - Exclusive for Advanced SystemCare PRO User!',
			'default' => 'Activate Now to Get 3 Secured PCs and Our Gift Pack!'
		),
		'um9trial2' => array(
			'6m' => 'Exclusive for Advanced SystemCare PRO User – Activate before Trial Expiring!',
			'6' => 'Exclusive for Advanced SystemCare PRO User – Activate before Trial Expiring!',
			'default' => 'Activate Now to Get Our Gift Pack before Trial Expiring!'
		),
		'um9expire' => array(
			'6m' => 'Trial expired. Get Gift Pack Exclusive for Advanced SystemCare PRO User!',
			'6' => 'Trial expired. Get Gift Pack Exclusive for Advanced SystemCare PRO User!',
			'default' => 'Trial expired. Activate Now to Get Our Gift Pack!'
		),
		'um9pro2' => array('default' => 'Your license has expired. Activate Now to Get 3 Secured PCs and Our Gift Pack!'),
		'ascum9' => array('default' => 'Your PC&acute;s Ultimate Protection and Ultimate Performance!'),
		'default' => 'Your PC&acute;s Ultimate Protection and Ultimate Performance!'
	)
);

$cd = strtolower($_GET['cd']);
$discountArr = $discountListArr[$cd] ? $discountListArr[$cd] : $discountListArr['default'];
$discount = $discountArr[0];
$price = $discountArr[1];
$buyTag = $discountArr[2];

$ref = strtolower($_GET['ref']);
$title = $discountListArr['title'][$ref] ? $discountListArr['title'][$ref][$cd] ? $discountListArr['title'][$ref][$cd] : $discountListArr['title'][$ref]['default'] : $discountListArr['title']['default'];

if ($_POST['action'] == 'getDiscount') exit($discount.'|'.$price.'|'.$buyTag);

$packsNum = ceil(microtime_float()*2000/20000);
	$packsNum = 360-($packsNum%360);
	if ($_GET['action'] == 'getPacks'){
		echo $packsNum;
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Activate ASC Ultimate for 3 PCs with exclusive discount before trial expiring, and get free gifts!</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<script type="text/javascript">
	function getDiscountInfo(codeType){
		$.ajax({
			type : 'post',
			url : './index.php?cd='+codeType,
			timeout: 5000,
			dataType : 'text',
			data : 'action=getDiscount',
			error : function() {getDiscountInfo()},
			success : function(discount) {
				discountArr = discount.split('|');
				percent = discountArr[0];
				price = discountArr[1];
				$('.percent').html(percent);
				$('.discount span').attr('class', '_'+percent);
				$('.price').html(price);
				$('.price').eq(0).html($('.price').eq(0).html().replace('$',''));
				buyUrl = 'http://www.iobit.com/buy.php?product='+discountArr[2]+'&ref=<?php echo $ref; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu';
				$('.buybtn').attr('href', buyUrl);
				$('#reportMessage').text('Dear PRO user, please enjoy your sole discount.');
				$('#discountCode').removeAttr('disabled');
				$('#discountSubmit').removeAttr('disabled');
			}
		});
	}
	function getDiscount(){
		var code = MApp(2.2).packages.trim($('#discountCode').val());
		if (!MApp(2.2).check.isCode(code)){
			$('#reportMessage').text('Your license is not valid. Please confirm and type it again.');
			$('#discountCode').removeAttr('disabled');
			$('#discountSubmit').removeAttr('disabled');
			return;
		}
		// Disabled user input
		$('#errormsg').html('&nbsp;');
		$('#discountCode').attr('disabled', 'disabled');
		$('#discountSubmit').attr('disabled', 'disabled');
		// Get code type
		$.ajax({
			type : 'post',
			url : './discount.php',
			timeout: 5000,
			dataType : 'text',
			data: 'action=query&code='+code,
			error : function() {getDiscount()},
			success : function(codeType){
				if (codeType == '6' || codeType == '6m' || codeType == 'other'){
					// Get discount info
					getDiscountInfo(codeType);
				} else {
					$('#reportMessage').text('Your license is not valid. Please confirm and type it again.');
					$('#discountCode').removeAttr('disabled');
					$('#discountSubmit').removeAttr('disabled');
				}
			}
		});
	}
	</script>
	<script type="text/javascript">
	function decreasingPacks(){
		$.ajax({
			type: "GET",
			url: "index.php",
			data: "action=getPacks&r="+Math.random(),
			success: function(packs){
				$('.packs').html(packs);
				setTimeout('decreasingPacks()', 10000);
			}
		});
	}
	setTimeout('decreasingPacks()', 10000);
	</script>
</head>
<body>
<div class="main">
	<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
	<div class="header">
		<div class="wrapper">
			<a href="http://www.iobit.com/" class="logo" target="_blank">IObit</a>
			<div class="title">
				<h1>New Year Special Sale</h1>
				<h2>Save <strong><span class="percent"><?php echo $discount; ?></span>%</strong> on ASC Ultimate & Get Super Gift for FREE!</h2>
			</div>
			<div class="discount">
				<span class="_<?php echo $discount; ?>"></span>
			</div>
			<div class="panel">
				<div class="intro">
					<p>Activate ASC Ultimate for 3 PCs today, get FREE Gift your PC will adore! </p>
					<strong><span class="packs"><?php echo $packsNum; ?></span> Packs Left Today!</strong>
					<h3>UItimate PC Protection</h3>
				</div>
				<dl class="handle">
					<dt><span>Today <i>$</i></span> <strong class="price"><?php echo $price; ?></strong> <span class="original">Original: <del>$109.99</del> <em>1 year / <strong>3 PCs</strong></em></span></dt>
					<dd><a href="http://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $ref; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', 'affenascu2016newyear');" class="active-btn buybtn">Activate Now</a></dd>
					<dd><strong><?php echo $buyNum;?></strong> people activated</dd>
				</dl>
			</div>
			<div class="countdown">
				<ul id="counttime">
					<li>00<span>h</span></li>
					<li>00<span>m</span></li>
					<li>00<span>s</span></li>
					<li>000</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="main">
		<div class="wrapper">
			<h2><?php echo $title; ?></h2>
			<div class="intro clearfix">
				<div class="left-part clearfix">
					<div class="showcase">
						<img src="<?php echo $pResUrl; ?>images/boxshot-ascu.jpg" alt="">
					</div>					
					<i>Sale</i>
					<div class="continer">
						<h3>What you can get by <br><span>activating</span> ASC Ultimate 9:</h3>
						<p>An always-on, automated, and all-in-one protection against all kinds of viruses, system slow down, freeze and crash. It's your best solution for security and performance.</p>
						<p><img src="<?php echo $pResUrl; ?>images/product-awards.png" alt=""></p>
						<p><a  href="javascript:void(0);" onclick="goTaget($('.comparison_table'))">See more about PRO edition >></a></p>
					</div>
				</div>
				<div class="right-part">
					<div class="continer clearfix">
						<div class="showcase">
							<img src="<?php echo $pResUrl; ?>images/additional.jpg" alt="">
						</div>						
						<i>Free</i>
						<dl>
							<dt><strong>$0</strong> <del>$39.99</del></dt>
							<dd><strong>Additional 2 PCs Supported</strong></dd>
							<dd>Advanced SystemCare Ultimate license supports additional 2 PCs so you can share it with your family & friends!</dd>
						</dl>						
					</div>
					<div class="continer clearfix">
						<div class="showcase">
							<img src="<?php echo $pResUrl; ?>images/boxshot-pf.jpg" alt="">
						</div>		
						<i>Free</i>
						<dl>
							<dt><strong>$0</strong> <del>$19.95</del></dt>
							<dd><strong>Protected Folder</strong>  1 year / 1 PC</dd>
							<dd>No Worries of Data Theft or Privacy Leaks!</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="descrip clearfix">
				<div class="details">
					<p>Activate Advanced SystemCare Ultimate today, Get 2 Additional Secured PCs and Protected Folder for FREE. Offer limited for New Year Sale ONLY!</p>
					<p>Or you can enter Advanced SystemCare PRO license to redeem a bigger discount!</p>
					<div class="collection clearfix">
						<input id="discountCode">
						<button id="discountSubmit" onclick="getDiscount();ga('send', 'event', 'ascuclick', 'click', 'ascupurchase');">Update Cart</button>
						<span id="reportMessage"></span>
					</div>
				</div>
				<dl class="handle">
					<dt>Only <strong  class="price"><?php echo $price; ?></strong> <del>$109.99</del></dt>
					<dd><a href="http://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $ref; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', 'affenascu2016newyear');" class="active-btn-large buybtn">Act Now and SAVE <em class="percent"><?php echo $discount; ?></em>%!</a></dd>
					<dd><strong class="packs"><?php echo $packsNum; ?></strong> Packs Left Only! <span><strong><?php echo $buyNum;?></strong> people activated!</span></dd></dd>
				</dl>
			</div>
			<div class="payments">
				<img src="<?php echo $pResUrl; ?>images/payments.jpg" alt="">
			</div>
			<div class="awards">
				<h3>Product Awards</h3>
				<img src="<?php echo $pResUrl; ?>images/awards.jpg" alt="">
			</div>
			<div class="review">
				<div class="media-rev clearfix">
					<h3>Media Review</h3>
					<img src="<?php echo $pResUrl; ?>images/addictive.jpg" alt="">
					<div class="continer">
						<h4>"Advanced SystemCare Ultimate  is a powerful anti-virus and system optimization tool."</h4>
						<p>"Advanced SystemCare Ultimate  is a powerful anti-virus and system optimization tool. Apart from protecting your PC from malware, viruses and similar threats, it can also boost your PC's performance by applying various registry and shortcut fixes, removing junk files, scanning local disk volumes for system vulnerabilities, etc." <span>-Addictivetips</span></p>
					</div>
				</div>
				<div class="user-rev">
					<h3>Customer Review</h3>
					<div class="reviews active">
						<h4>"Advanced System Care Ultimate is the new mother load. The big winner! "</h4>
						<p>I have had a past problem of always messing with my computer. Then I got my first copy of Advanced Systemcare. There is no need to mess around any longer. Now that I have antivirus, included in the product, my need for secondary software is none existent. Advanced System Care Ultimate is the new mother load. The big winner! My computer is always up to date and runs like deer. Unlike other products; there has not been a constant stream of conflicts."</p>
					</div>
					<div class="reviews">
						<h4>"I recommend advanced systemcare ultimate as their antivirus/system optimizer."</h4>
						<p>On the past version of advanced systemcare ultimate, i had no problem on almost everything, system, malwares, etc. and now, it's updated, more features on it will make my laptop run 5x faster than before. i also like the new skin of it. so next time i fix other's computer, i recommend advanced systemcare ultimate as their antivirus/system optimizer."</p>
					</div>
					<ul class="users">
						<li class="active"><img src="<?php echo $pResUrl; ?>images/rod_garnett.jpg" alt="">Jane McClain<br>2012</li>
						<li><img src="<?php echo $pResUrl; ?>images/dareen_lim.jpg" alt="">Bob Bassett<br>2013</li>
					</ul>
				</div>
			</div>
			<div class="comparison_table">
				<h3>Why Choose Advanced SystemCare Ultimate?</h3>
				<div class="comtable">
					<h4><span>Better Protection</span>, and <span>No Performance Lag</span> Anymore. See Comparison below</h4>
					<img src="<?php echo $pResUrl; ?>images/comparetable.jpg">
				</div>
				<div class="comlist">
					<h4>Unrivaled Detection Rate and Maximum Protection</h4>
					<p>One click to clean hipen and stubborn Viruses, Trojans, worms, spyware, adware and various malware. Advanced SystemCare Ultimate also provides an always-on, automated, and proactive protection against all kinds of Internet security threats, with rapid virus database updating.</p>
					<h4>Enjoy Confident Security without System Slowdown </h4>
					<p>Your system runs at its top speed without any performance lag, due to our industry-leading Internet security technology.</p>
					<h4>Safe Surf, Search, Download and Share with Confidence</h4>
					<p>Proactive Virus Control technology monitors processes behavior in real-time, scans files shared with email and blocks possible threats. Unmatched detection rate assures you a safer environment while using your PC.</p>
					<h4>Get Highly-tuned Performance and Enjoy the New PC Feeling</h4>
					<p>Already proven powerful PC tune-up ability unleashes the full power of your PC. With Real-time optimization and ActiveBoost feature, system resources are intelligently managed to ensure you a super-fast PC.</p>
				</div>
			</div>
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
			</dl>
			<div class="footer">
				 <p>Copyright © 2005 - <?php echo date(Y)?> IObit. All Rights Reserved</p> 
			</div>
		</div>
	</div>
	<div class="floatlayer">
		<div class="wrapper">
			<div class="left">
				<h3>Save <strong><span class="percent"><?php echo $discount; ?></span>%</strong>, Enjoy Ultimate Protection and Ultimate Performance! </h3>
				<p><strong><?php echo $buyNum;?></strong> people activated  </p>
				<div id="counttime1" class="countdown"><span>11<small>h</small>:</span><span>44<small>m</small>:</span><span>15<small>s</small></span><span class="end">634*</span></div>
			</div>
			<dl>
				<dt>Only <strong class="price"><?php echo $price; ?></strong> <del>$109.99</del></dt>
				<dd><a href="http://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $ref; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', 'affenascu2016newyear');" class="active-btn buybtn">Activate Now</a></dd>
			</dl>
		</div>
	</div>
    <div class="pop-up">
        <div class="pop-main">
            <div class="pop-box">
                <h2>Note:</h2>
                <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
                <p>You will be redirected to the latest IObit promotion page automatically.</p>
            </div>
        </div>
    </div>
	<script>
		var newobj=$('.price').eq(0).html().replace("$","");
		$('.price').eq(0).html($('.price').eq(0).html().replace('$',''));
		$(window).on('scroll', function () {
			var scrollHeight = $(".header .handle").offset().top;
			if ($(window).scrollTop() > scrollHeight) {
				$('.floatlayer').addClass('on');
			} else {
				$('.floatlayer').removeClass('on');
			}
		});
		$(".users li").mouseover(function(event) {
			var num = $(this).index();
			$(".users li").eq(num).addClass('active').siblings().removeClass('active');
			$(".reviews").eq(num).addClass('active').siblings().removeClass('active');
		});
		function goTaget(target) {
			var Theigth = target.offset().top - 130;
			$("html, body").animate({scrollTop: Theigth}, 'slow');
		}
		function cycleCountdown(){
			var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
			var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
			d = MApp(2.2).packages.zeroize(datetime[0], 2);
			h = MApp(2.2).packages.zeroize(datetime[1], 2);
			i = MApp(2.2).packages.zeroize(datetime[2], 2);
			s = MApp(2.2).packages.zeroize(datetime[3], 2);
			mi = MApp(2.2).packages.zeroize(datetime[4], 3);
			document.getElementById('counttime').innerHTML = '<li>' + h + '<span>h</span></li><li >' + i + '<span>m</span></li><li>' + s + '<span>s</span></li><li>' + mi + '</li>';
			document.getElementById('counttime1').innerHTML = '<span>' + h + '<small>h</small>:</span><span>' + i + '<small>m</small>:</span><span>' + s + '<small>s</small></span><span class="end">' + mi + '*</span>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();
        setTimeout('window.location.href="https://purchase.iobit.com/aff/en/ascultimate/2020anniversarysale/index.php'+location.search+'"',5000);
    </script></div>
</body>
</html>