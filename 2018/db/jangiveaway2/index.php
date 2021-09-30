<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

$reduceNum=758560000;
$reduceTime=2;
$buyNum = ceil(microtimeFloat()*1000/(1000*$reduceTime)) - $reduceNum;
$buyNum = number_format($buyNum);

$driverCount=intval($_GET['uc']);
$installDays=intval($_GET['iday']);
$expireTimestamp=intval(base64_decode($_GET['ext']));
$expireDate=date('Y-m-d H:i:s',$expireTimestamp);

$buyLinkA='https://www.iobit.com/buy.php?product=db53pctrial&ref=2018giveaway&aff=&refs=purchase_db';
$buyLinkB='https://www.iobit.com/buy.php?product=db53pctrial2&ref=2018giveawayb&aff=&refs=purchase_db';
$buyLink=$buyLinkA;
if(($_COOKIE['ascbl']=='tob')||(empty($_COOKIE['ascbl'])&&(rand(1, 100) % 2 == 0))){
	$buyLink=$buyLinkB;
	setcookie("ascbl", "tob", time() + 10 * 24 * 3600);
}else{
	setcookie("ascbl", "toa", time() + 10 * 24 * 3600);
}

if($_GET['action']=='clickCount'){
	file_put_contents('clickCount.txt',(($_COOKIE['ascbl']=='tob')?'toB':'toA').' '.date('m-d H:i:s').' '.getIP().PHP_EOL,FILE_APPEND);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Pay $0 to Redeem Driver Booster PRO for Giveaway Users – IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Play" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<div class="info">
				<h2>Driver Booster 5 PRO</h2>
				<p>Enjoy Your Exclusive Privilege to Keep PRO for Another 15 DAYS for FREE!</p>
				<div class="count-down">
					<strong>6</strong>D : 
					<strong>22</strong>H : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
				<div class="btn-zone">
					<a href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give');clickCount()" class="orig-btn">
						<span>Get PRO at $0</span>
					</a>
					<div class="shadow"></div>
				</div>
				<div class="crowd-count"><span class="buy-num"><?php echo $buyNum;?></span> people got the privilege</div>
			</div>
			<div class="steps clearfix">
				<ul>
					<li>Pay $0 to continue keeping Driver Booster 5 PRO (3 PCs) for 15 days longer</li>
					<li>After 15 days, get exclusive 67% OFF (Original: $74.85) on Driver Booster 5 PRO (1 Year / 3 PCs) </li>
					<li>You won't be billed until after 15-day trial expires, you can cancel the order at any time.</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end banner -->
	<!-- statistics -->
	<div class="statistics">
		<div class="wrapper">
			<h2>Driver Booster 5 has installed <strong class="driver">57</strong> drivers in the past <strong class="countDay">345</strong> days for you, </h2>
			<p>and has been keeping your PC in stable and top performance.</p>
		</div>
	</div>
	<!-- end statistics -->
	<!-- features -->
	<div class="features">
		<div class="wrapper">
			<h2>Now continue to enjoy all the improvements of Driver Booster 5 PRO, <span>we will ensure you a more stable PC in the new year!</span></h2>
			<div class="disp">
				<dlv class="list feat-01">
					<h3>No need of one-by- one driver update</h3>
					<p>Providing you one-stop driver detecting & updating solution.</p>
				</dlv>
				<div class="list feat-02">
					<h3>Safe driver download & update</h3>
					<p>Automatically backing up & creating system restore point before updating, in case of anything unexpected.</p>
				</div>
				<div class="list feat-03">
					<h3>No unexpected system crash</h3>
					<p>Always keeping all drivers up-to-date to ensure you a stable PC.</p>
				</div>
				<div class="list feat-04">
					<h3>200% <sup>*</sup> faster download</h3>
					<p>Time-saving with system idle time downloading with up to 200% faster speed.</p>
				</div>
				<div class="list feat-05" >
					<h3>Peak gaming performance guaranteed</h3>
					<p>Huge game components database including Nvidia, Realtek, Intel, AMD, Broadcom, VIA, etc. to ensure smooth game experience.</p>
				</div>
			</div>
			<div class="cart-zone">
				<h3>Get 15 Days for Free Now, to fix & update your device drivers easily!</h3>
				<div class="btn-zone">
					<a href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give');clickCount()" class="orig-btn"><span>Get PRO at $0</span></a>
					<div class="shadow"></div>
				</div>
				<div class="count-down">
					<strong>6</strong>D : 
					<strong>22</strong>H : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
			</div>
		</div>
	</div>
	<!-- end features -->
	<!-- awards -->
	<div class="awards">
		<div class="wrapper">
			<h2>World-wide Awards</h2>
			<p>As being trusted and awarded by those world-class media in the past four years, you know you’ve got the right driver updater.</p>
			<img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
		</div>
	</div>
	<!-- end awards -->
	<!-- reviews -->
	<div class="reviews">
		<div class="wrapper">
			<h2>Driver Booster 5 PRO is praised by famous Medias and users</h2>
				<div class="review active">
					<h3>Media Review</h3>
					<h4>IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best. </h4>
					<p>Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion
						of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does
						a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater
						and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads
						the pack.
					</p>
				</div>
				<div class="review">
					<h3>User Review</h3>
					<h4>"My PC is faster, securer and newer more than the last 8 months ago."</h4>
					<p>"With Driver Booster, I can easily know which devices drivers are out of date and can easily update
						them. Besides, it helps me to fix sound error, network error, device error etc...I don't believe it
						before I using, but after using it I really love it..just my PC is faster ,securer and newer more
						than the last 8 months ago..so thank you IObit."
					</p>
				</div>
				<div class="review">
					<h3>User Review</h3>
					<h4>"I strongly recommend Driver Booster, it will help to update the driver quickly and	easily."</h4>
					<p>"Driver booster is an amazing application. As for someone who has a lot of applications and drives
						as does not have the time to manually update them, I strongly recommend Driver Booster, it will help
						to update the driver quickly and easily."
					</p>
				</div>
				<div class="review">
					<h3>User Review</h3>
					<h4>"It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox	forever... Great job!"</h4>
					<p>"This is one of the best driver updater programs around. Microsoft has even led me astray by
						suggesting updates that wouldn’t work with my machine. This program knew what updates I needed
						without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will
						stay in my toolbox forever... Great job!"
					</p>
				</div>
				<ul class="users clearfix">
					<li class="active">
						<img src="<?php echo $pResUrl; ?>images/pcmag.png" alt="PC Magazine">
						<span>PC Magazine</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya">
						<span>Myo Thuya</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund">
						<span>Adam Backlund</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
						<span>Wayne Bowler</span>
					</li>
				</ul>	
		</div>
	</div>
	<!-- end reviews -->
	<!-- bottom -->
	<div class="bottom">
		<div class="wrapper">
			<div class="solgan">
				<p>So why hesitate?</p>
				<h2>Get PRO now to enjoy smooth PC and speeds up gaming!</h2>
			</div>
			<div class="btn-zone">
				<a href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give');clickCount()" class="orig-btn"><span>Get PRO at $0</span></a>
				<div class="shadow"></div>
			</div>
			<div class="count-down">
				<strong>6</strong>D : 
				<strong>22</strong>H : 
				<strong>34</strong>M : 
				<strong>25</strong>S : 
				<small>345</small>ms
			</div>
			<div class="footer">
				<dl>
					<dt>Note:</dt>
					<dd>*.Data may vary based on different system or computer.</dd>
					<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
				</dl>
				<p>Copyright © 2005 - 2018 IObit. All Rights Reserved</p>
			</div>
		</div>
	</div>
	<!-- end bottom -->
	<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
	<script>
		function getBuyNum(){
			$.ajax({
				type: "GET",
				url: "<?php echo $pRootUrl;?>callback.php",
				data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reduceTime;?>&r="+Math.random(),
				success: function(packs){
					$('.buy-num').html(packs);
				}
			});
			setTimeout('getBuyNum()', 3000);
		}
		setTimeout('getBuyNum()', 3000);

		$(".reviews .users li").click(function(event) {
			$(this).addClass("active").siblings().removeClass("active");
			$(".reviews .review").eq($(this).index()).addClass("active").siblings().removeClass("active");
		});
		$(document).ready(function() {
			cycleCountdown();
			$('.countDay').animateNumber({
				number: <?php echo $installDays;?>
			},
			5000,
    			'linear'
			);
			$('.driver').animateNumber({
				number: <?php echo $driverCount;?>
			},
			3000,
    			'linear'
			);
		});

		function cycleCountdown(){
			var datetime = timeCountDown(<?php echo $expireTimestamp;?>);
			if(datetime==false){
				window.location.href='index.php';
			}else {
				d = MApp(2.2).packages.zeroize(datetime[0], 2);
				h = MApp(2.2).packages.zeroize(datetime[1], 2);
				i = MApp(2.2).packages.zeroize(datetime[2], 2);
				s = MApp(2.2).packages.zeroize(datetime[3], 2);
				mi = MApp(2.2).packages.zeroize(datetime[4], 3);
				$('.count-down').each(function () {
					$(this).find('strong').eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
				});
				$('.count-down small').html(mi);
				setTimeout('cycleCountdown()', 1);
			}
		}

		function timeCountDown(startTimestamp) {
			var dateObj = new Date();
			var time = dateObj.getTime().toString().substring(0, 10);
			var remainingTime = startTimestamp - time;
			if (remainingTime > 0) {
				var d = Math.floor(remainingTime / (24 * 60 * 60));
				var h = Math.floor(remainingTime / (60 * 60) % 24);
				var i = Math.floor(remainingTime / 60 % 60);
				var s = Math.floor(remainingTime % 60);
				var mi = 999 - dateObj.getMilliseconds();
				if (mi < 10) {
					mi = '00' + mi;
				} else if (mi < 100) {
					mi = '0' + mi;
				}
				return [d, h, i, s, mi];
			} else {
				return false;
			}
		}
		function clickCount(){
			$.ajax({
				type: "GET",
				url: "dbgive.php",
				data: "action=clickCount&r="+Math.random()
			});
		}
	</script>
</body>
</html>