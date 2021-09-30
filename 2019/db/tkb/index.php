<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

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
if(preg_match('/([0-9]*)\./',$_GET['ver'],$matches)){
	$ver=$matches[1];
	$refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Save up to 65% on Driver Booster PRO - IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<!-- banner start -->
<div class="banner">
	<div class="wrapper clearfix">
    <!-- logo -->
		<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
    <!-- title -->
		<div class="title">
			<h1>IObit 14 Years Anniversary</h1>
			<p>Up to 65% Anniversary Discount. You Dont't Want to Miss</p>
		</div>
		<div class="box">
			<p class="month">1 Month</p>
			<strong>$<b>6.99</b></strong>
			<p class="pc">per month for 3 PCs</p>
			<p class="at">$6.99 at Checkout</p>
			<a href="https://www.iobit.com/buy.php?product=db1m&ref=db1m<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'db1mbuy', 'buy', 'dbpurchase-tkb')" class="buybtn border">Buy Now</a>
		</div>
		<div class="box">
			<p class="month">3 Months</p>
			<strong>$<b>4.33</b></strong>
			<p class="pc">per month for 3 PCs</p>
			<p class="at"><del>$20.97 </del> $12.99 at Checkout <span>Save <b>40%</b></span></p>
			<a href="https://www.iobit.com/buy.php?product=db3m&ref=db3m<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db " onclick="ga('send', 'event', 'db3mbuy', 'buy', 'dbpurchase-tkb') " class="buybtn border">Buy Now</a>
		</div>
		<div class="box packs">
			<p class="date">Hurry! <strong>04</strong>M: <strong>04</strong>S: <strong>04</strong>Ms Left</p>
			<p class="month">6 Months</p>
			<strong>$<b>2.49</b></strong>
			<p class="pc">per month for 3 PCs</p>
			<p class="at"><del>$41.94 </del> $14.94 at Checkout <span>Save <b>65%</b></span></p>
			<a href="https://www.iobit.com/buy.php?product=db6m&ref=db6m<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db " onclick="ga('send', 'event', 'db6mbuy', 'buy', 'dbpurchase-tkb')" class="buybtn">Buy Now</a>
		</div>
	</div>
</div>
<!-- banner end -->
<div class="million">
	<div class="wrapper">
		<h2>Why do over 150 million users choose Driver Booster?</h2>
		<p>Because their PC runs up to 200% faster* than before, by keeping device drivers always Up-to-date and improving Stability of PC Performance, with the proven driver updating and security technology.</p>
	</div>
</div>
<div class="db-message">
	<div class="wrapper">
		<div class="content">
			<img src="<?php echo $pResUrl; ?>images/db-message.png" alt="" class="db-box">
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
				<dd>
					<strong>No need of one-by-one driver update</strong>
					<p>Providing you one-stop driver detecting & updating solution.</p>
				</dd>
			</dl>
			<dl class="two">
				<dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
				<dd>
					<strong>Safe driver download & update</strong>
					<p>Automatically backing up & creating system restore point before <br> updating, in case of anything unexpected.</p>
				</dd>
			</dl>
			<dl class="three">
				<dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
				<dd>
					<strong>No unexpected system crash</strong>
					<p>Always keeping all drivers up-to-date  to <br> ensure you a stable PC.</p>
				</dd>
			</dl>
			<dl class="four">
				<dt><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></dt>
				<dd>
					<strong>100% * faster download</strong>
					<p>Time-saving with system idle time <br> downloading with up to 100% faster <br> speed.</p>
				</dd>
			</dl>
			<dl class="five">
				<dt><img src="<?php echo $pResUrl; ?>images/icons05.png" alt=""></dt>
				<dd>
					<strong>Peak gaming performance guaranteed</strong>
					<p>Game Ready Driver and necessary game components are available to help <br> run game smoothly.</p>
				</dd>
			</dl>
		</div>
	</div>
</div>

<div class="review">
	<div class="wrapper">
		<div class="content ">
			<dl class="active">
				<dt>
				<h3>Media Review</h3></dt>
				<dd>
					<h4>IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best. </h4>
				</dd>
				<dd>Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion
					of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does
					a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater
					and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads
					the pack.
				</dd>
			</dl>
			<dl>
				<dt>
				<h3>User Review</h3></dt>
				<dd>
					<h4>"My PC is faster, securer and newer more than the last 8 months ago."</h4>
				</dd>
				<dd>"With Driver Booster, I can easily know which devices drivers are out of date and can easily update
					them. Besides, it helps me to fix sound error, network error, device error etc...I don't believe it
					before I using, but after using it I really love it..just my PC is faster ,securer and newer more
					than the last 8 months ago..so thank you IObit."
				</dd>
			</dl>
			<dl>
				<dt>
				<h3>User Review</h3></dt>
				<dd>
					<h4>"I strongly recommend Driver Booster, it will help to update the driver quickly and	easily."</h4>
				</dd>
				<dd>"Driver booster is an amazing application. As for someone who has a lot of applications and drives
					as does not have the time to manually update them, I strongly recommend Driver Booster, it will help
					to update the driver quickly and easily."
				</dd>
			</dl>
			<dl>
				<dt>
				<h3>User Review</h3></dt>
				<dd>
					<h4>"It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox	forever... Great job!"</h4>
				</dd>
				<dd>"This is one of the best driver updater programs around. Microsoft has even led me astray by
					suggesting updates that wouldn’t work with my machine. This program knew what updates I needed
					without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will
					stay in my toolbox forever... Great job!"
				</dd>
			</dl>
		</div>
		<ul class="users clearfix lato">
			<li class="current">
				<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro" target="_blank">
					<div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine"></div>
				   <p>PC Magazine</p>
				</a>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya"></div>
				<p>Myo Thuya</p>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund"></div>
				<p>Adam Backlund</p>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
				</div>
				<p>Wayne Bowler</p>
			</li>
		</ul>
	</div>
</div>

<!-- comparison start -->
<div class="comparison" id="compare">
	<div class="wrapper">
		<table>
			<thead>
			<tr>
				<th class="itema"></th>
				<th class="itemb"></th>
				<th class="itemc"></th>
				<th class="itemd"></th>
				<th class="iteme"></th>
			</tr>
			</thead>
			<tbody>
				<tr>
					<td class="itema"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt="">Auto Scan Outdated/Missing Drivers</td>
					<td class="itemb"><i class="currt"></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""> Priority to Get Latest Game Ready Drivers <sup class="red">NEW</sup></td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""> Necessary Components for Smooth Game <sup>Improved</sup>	 </td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""> 200% More Devices Supported <sup>Improved</sup></td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""> Up to 200% Higher Update Speed <sup>Improved</sup></td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
				<tr>
					<td class="itema"><img src="<?php echo getStaticUrl('images/com-icon04.png')?>" alt=""> Auto Download & Backup <sup>Improved</sup></td>
					<td class="itemb"><i></i></td>
					<td class="itemc"><i></i></td>
					<td class="itemd"><i></i></td>
					<td class="iteme"><i></i></td>
				</tr>
			</tbody>
			<tfoot>
				<th class="itema"></th>
				<th class="itemb">
					Your Current <br> Version
				</th>
				<th class="itemc">
					<strong>$6.99</strong>/mo
					<a href="https://www.iobit.com/buy.php?product=db1m&ref=db1m<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'db1mbuy', 'buy', 'dbpurchase-tkb')" class="buybtn border">Buy Now</a>
				</th>
				<th class="itemd">
					<strong>$4.33</strong>/mo
					<a href="https://www.iobit.com/buy.php?product=db3m&ref=db3m<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db " onclick="ga('send', 'event', 'db3mbuy', 'buy', 'dbpurchase-tkb') " class="buybtn border">Buy Now</a>
				</th>
				<th class="iteme">
					<strong>$2.49</strong>/mo
					<a href="https://www.iobit.com/buy.php?product=db6m&ref=db6m<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db " onclick="ga('send', 'event', 'db6mbuy', 'buy', 'dbpurchase-tkb')" class="buybtn">Buy Now</a>
					<p class="date"><strong>04</strong>M: <strong>04</strong>S: <strong>04</strong>Ms Left</p>
				</th>
			</tfoot>
		</table>
	</div>
</div>
<!-- comparison end -->
<div class="award">
	<div class="wrapper">
		<h2 class="">World-wide Awards</h2>
		<p>As being trusted and awarded by those world-class media in the past five years, you know you’ve got the right driver updater.</p>
		<ul class="clearfix">
			<li class="first">
				<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/pc-sm.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/major-geeks.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/pcworld.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/chip.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://www.softpedia.com/get/System/System-Miscellaneous/IObit-Driver-Booster.shtml?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="" />
				</a>
			</li>
			<li class="last">
				<a href="http://driver-booster.updatestar.com/?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/updatestar.png')?>" alt="" />
				</a>
			</li>
		</ul>
	</div>
</div>
<div class="payment wrapper">
		
	<dl class="days">
		<dt><img src="<?php echo $pResUrl; ?>images/days.png" alt=""></dt>
		<dd>
			<strong> Try it RISK FREE - with our 30-day Money Back Guarantee</strong>
			<p>We’re confident that activating PRO edition will fix all your headache driver matters with affordable price!</p>
		</dd>
	</dl>
	<dl class="visa">
		<dt><b>We accept</b></dt>
		<dd><img src="<?php echo $pResUrl; ?>images/payment.png" alt=""></dd>
	</dl>
</div>
<!-- annotation start -->
<div class="annotation ">
	<dl class="wrapper">
		<dt>Note:</dt>
		<dd>*.Data may vary based on different system or computer.</dd>
		<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
		</dd>
	</dl>
</div>
<!-- annotation end -->
<!-- footer start -->
<div class="footer lato">Copyright © 2005 - <?php echo date(Y) ?> IObit. All Rights Reserved</div>
<!-- fooFilter
ter end -->
<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
	<div class="wrapper clearfix">
		<div class="img-box"></div>
		<ul>
			<li class="one-box">
				<p>1 Month</p>
				<strong>$<b>6.99</b></strong>/mo
			</li>
			<li class="active packs">
				<p>6 Months</p>
				<strong>$<b>2.49</b></strong>/mo
				<p class="last">Save 65%</p>
				<p class="date"><strong>04</strong>M: <strong>04</strong>S: <strong>04</strong>Ms Left</p>
			</li>
		</ul>
		<div class="right">
      <!-- buybtn -->
			<a class="buybtn" href="https://www.iobit.com/buy.php?product=db6m&ref=db6m<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'db6mbuy', 'buy', 'dbpurchase-tkb')">
        Buy Now
      </a>
      <p>6 Months / 3 PCs</p>
		</div>
	</div>
</div>
<script type="text/javascript">refStr="<?php echo $refStr;?>";</script>
<script type="text/javascript" src="<?php echo getStaticUrl('js/script.js')?>"></script>
</body>
</html>