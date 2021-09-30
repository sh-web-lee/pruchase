<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

function get_line($file, $line)
{
	$fp = fopen($file, 'r');
	$i = 0;
	while (!feof($fp)) {
		$i++;
		$c = fgets($fp);
		if ($i == $line) {
			return $c;
			break;
		}
	}
}
$userData=array();
for($i=0;$i<2;$i++){
	$randNum=rand(9,70);
	if($randNum>=60){
		$buyTime='1 minitue';
	}else{
		$buyTime=$randNum.' seconds';
	}
	$singleUserData=explode('	',trim(get_line('data/userData.txt',rand(1,201))));
	$username=$singleUserData[0];
	$userAddress=$singleUserData[1];
	if(preg_match('/.(.{2}).*/',$username)){
		$username=preg_replace('/(.{1})(.{2})(.*)/','${1}'.str_repeat('*',2).'${3}',$username);
	}elseif(preg_match('/.(.{1})s+.*/',$username)){
		$username=preg_replace('/(.{1})(.{1})(.*)/','${1}'.str_repeat('*',1).'${3}',$username);
	}
	$userData[$i]['username']=$username;
	$userData[$i]['address']=$userAddress;
	$userData[$i]['buyTime']=$buyTime;
}
if($_GET['action']=='getSales'){
	echo json_encode($userData);
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>  Big Sales for Start Menu 8 PRO - IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $pResUrl; ?>style/style.css">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<script type="text/javascript">
		/*if (Math.random() < 0.5) {
			var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
			window.location.replace('./price.php' + queryStr);
		}*/
	</script>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<!--top-->
<div class="header">
	<div class="wrapper">
		<a href="http://www.iobit.com" target="_blank" class="logo">IObit</a>
		<ul id="counttime">
			<li>15 <span>hr :</span></li>
			<li>15 <span>m :</span></li>
			<li>15 <span>s :</span></li>
			<li>15 <sup>*</sup></li>
		</ul>
	</div>
</div>
<!--header-->
<div class="banner">
	<div class="wrapper">
		<div class="left-img"><img src="<?php echo $pResUrl; ?>images/sm-box.png" alt="" class="img-box"></div>
		<div class="right-content">
			<h1>Holiday Season Big Sale</h1>
			<h2>Save <span>70%</span> to Bring Back Start Menu & Manage Desktop & Modern Apps</h2>
			<div class="sm-price">
				<span class="sm-box"></span>
				<div class="price">
					<dl>
						<dt><span>70%</span> OFF</dt>
						<dd>Lifetime Subscription</dd>
					</dl>
				</div>
			</div>
			<dl class="price-btn">
				<dt><strong>$12.97</strong> <del>$39.99</del></dt>
				<dd><a href="https://www.iobit.com/buy.php?product=sm1297&ref=sm8prolifetime2018&aff=<?php echo $_GET['aff']; ?>&refs=purchase_sm8" onclick="ga('send', 'event', 'sm8lifetimebuy', 'buy', 'sm8purchase-2018feb');" class="buybtn top-buybtn">Activate Now</a></dd>
				<dd><img src="<?php echo $pResUrl; ?>images/people.png" alt=""> <strong>94,975</strong> people activated</dd>
			</dl>
		</div>
	</div>
</div>
<!--end header-->

<!--container-->
<div class="wrapper">
	<div class="payment clearfix">
		<dl>
			<dt>Accepted Payments</dt>
			<dd><img src="<?php echo $pResUrl; ?>images/payment.jpg" alt=""></dd>
		</dl>
		<dl>
			<dt>Money Back Guarantee </dt>
			<dd><img src="<?php echo $pResUrl; ?>images/days.jpg" alt=""></dd>
		</dl>
		<dl>
			<dt>Secure Payment</dt>
			<dd><img src="<?php echo $pResUrl; ?>images/secure.jpg" alt=""></dd>
		</dl>
	</div>
  <div class="sm-content">
    <h2>Improved Highlights in Brand New Start Menu 8 v4 PRO</h2>
    <img src="<?php echo $pResUrl; ?>images/sm-content.jpg" alt="" class="sm-box">
    <dl class="last-01">
    	<dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
    	<dd><strong>No Ads Disturbing</strong>Annoyed by the advertisement displayed in Windows start menu? Version 4 will return you a clean start menu.</dd>
    	<dd><img src="<?php echo $pResUrl; ?>images/bottom.png" alt="" class="bottom"></dd>
    </dl>
    <dl class="last-02">
    	<dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
    	<dd><strong>Classic Start Menu</strong>Not only bring back Start Menu to Windows 8, you may also enjoy a Classic Start Menu in Windows 10 with one-click.</dd>
    	<dd><img src="<?php echo $pResUrl; ?>images/left.png" alt="" class="left"></dd>
    </dl>
    <dl class="last-03">
    	<dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
    	<dd><strong>More Accurate & Faster</strong>You may easily type file name or even file contents on search menu to easily and accurately get your file.</dd>
    	<dd><img src="<?php echo $pResUrl; ?>images/right.png" alt="" class="right"></dd>
    </dl>
  </div>
  <div class="between-buy">
  	<h2><span></span>Easy way to return to classic Start Menu. <strong>ACT NOW TO SAVE MORE!</strong><span></span></h2>
  	<dl>
			<dt><strong>$12.97</strong>/ Lifetime</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=sm1297&ref=sm8prolifetime2018&aff=<?php echo $_GET['aff']; ?>&refs=purchase_sm8" onclick="ga('send', 'event', 'sm8lifetimebuy', 'buy', 'sm8purchase-2018feb');" class="buybtn top-buybtn">Activate Now</a></dd>
  	</dl>
  </div>
  <div class="award">
  	<h2>Trusted and awarded by these medias</h2>
  	<img src="<?php echo $pResUrl; ?>images/award.jpg" alt="">
  </div>
	<!--end container-->
	<div class="comparison_table" id="comparison_table">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<thead>
				<tr>
					<th colspan="2" class="text">More Reasons to Activate Start Menu 8 PRO </th>
					<th class="space"></th>
					<th class="itemb">Start Menu 8 <br> Trial Expired</th>
					<th class="space"></th>
					<th class="itema">Start Menu 8 <br> PRO Lifetime</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icons-01.png"></td>
					<td class="virtue">Bring back Classic Start Menu to Windows 8	</td>
					<td class="space"></td>
					<td class="itemb gray"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/blove-star.png"></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icons-02.png"></td>
					<td class="virtue">Enable Windows 7 style start menu available on Windows 10	</td>
					<td class="space"></td>
					<td class="itemb gray"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/blove-star.png"></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icons-03.png"></td>
					<td class="virtue">Enable to pin and organize favorite apps and websites with Start Menu 8	</td>
					<td class="space"></td>
					<td class="itemb gray"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/blove-star.png"></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icons-04.png"></td>
					<td class="virtue">Enhanced technology on file search, makes it more easily and accurately</td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/blove-star.png"></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icons-05.png"></td>
					<td class="virtue">100% clean program with no ads disturbing	</td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/blove-star.png"></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icons-06.png"></td>
					<td class="virtue">Auto Update to the Latest Version		</td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/blove-star.png"></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icons-07.png"></td>
					<td class="virtue">Free 24/7 Technical Support on Demand	</td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/blove-star.png"></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icons-08.png"></td>
					<td class="virtue">Enjoy Start Menu 8 full features without time limitation	</td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/blove-star.png"></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="2" class="off"><img src="<?php echo $pResUrl; ?>images/off.png" alt="70% OFF">Get Holiday Season Saving Now</th>
					<th class="space"></th>
					<th class="itemb">Start Menu 8 <br> Trial Expired</th>
					<th class="space"></th>
					<th class="itemc">
						<strong>$12.97 </strong>/ Lifetime
						<a class="buybtn" href="https://www.iobit.com/buy.php?product=sm1297&ref=sm8prolifetime2018&aff=<?php echo $_GET['aff']; ?>&refs=purchase_sm8" onclick="ga('send', 'event', 'sm8lifetimebuy', 'buy', 'sm8purchase-2018feb');"> Activate Now</a> </th>
				</tr>
			</tfoot>
		</table>
		 <dl class="annotation">
			<dt>Note:</dt>
			<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
		</dl>
	</div>
  <p class="footer">Copyright © 2005 - 2017 IObit. All Rights Reserved</p>
</div>
<div class="float on">
	<p>
		<?php foreach($userData as $userInfo):?>
			<span class="user-info"><span class="username"><?php echo $userInfo['username'];?></span> from <br> <span class="userAddr"><?php echo $userInfo['address'];?></span> Activated <?php echo $userInfo['buyTime'];?> ago <br></span>
		<?php endforeach;?>
	</p>
</div>
<script>
	$(window).scroll(function(){
		$(".sm-content").each(function(i){
			if($(document).scrollTop()  > $(this).offset().top-$(window).height()+$(this).height()/3 ){
				$('.sm-box').addClass('active');
				$('.sm-content dl').addClass('anmian');
			}
		});
	});
	function cycleCountdown(){
		var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
		var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
		d = MApp(2.2).packages.zeroize(datetime[0], 2);
		h = MApp(2.2).packages.zeroize(datetime[1], 2);
		i = MApp(2.2).packages.zeroize(datetime[2], 2);
		s = MApp(2.2).packages.zeroize(datetime[3], 2);
		mi = MApp(2.2).packages.zeroize(datetime[4], 3);
		document.getElementById('counttime').innerHTML = '<li>'+h+' <span>hr :</span>'+'</li><li>'+ i+' <span>m :</span>'+'</li><li>'+ s+' <span>s :</span>'+'</li><li>'+ mi+' <sup>*</sup>'+'</li>';
		setTimeout('cycleCountdown()', 1);
	}
	cycleCountdown();

	function getSales(){
		$.ajax({
			type: "GET",
			url: "feb.php",
			data:"action=getSales",
			success: function(res){
				var sales=JSON.parse(res);
				var float=$('.float');
//				float.removeClass('on');

				float.find('.user-info').eq(0).remove();
				float.find('p').append('<span class="user-info">'+sales[0]['username']+' from <br>'+sales[0]['address']+' Activated '+sales[0]["buyTime"]+' ago <br></span>');
//				setTimeout("$('.float').addClass('on');", 800);
			}
		});
		setTimeout('getSales()',6000);
	}
	setTimeout('getSales()',6000);
</script>
</body>
</html>