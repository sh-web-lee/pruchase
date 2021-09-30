<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if($_GET['action']=='clickCount'){
	try{
		$dsn="mysql:host=mariadb-071.wc2.dfw3.stabletransit.com;dbname=1015490_pricssw";
		$pdo=new PDO($dsn,'1015490_pricssw','7CcjUGsxLN82');
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo->query("set names utf8");

		$sql="insert into enascbdaya (ip,addTime,timezone,c_type,c_des,local_time) values(:ip,:addTime,:timezone,:cType,:cDes,:localTime)";
		$pre=$pdo->prepare($sql);
		$timezone=empty($_GET['timezone'])?13:intval($_GET['timezone']);
		$clientIp=empty($_GET['ip'])?getIP():$_GET['ip'];
		$addTime=time();
		$cType=$_GET['cType'];
		$cDes=$_GET['cDes'];
		$localTime=$_GET['localTime'];
		$pre->bindParam(':ip',$clientIp);
		$pre->bindParam(':timezone',$timezone);
		$pre->bindParam(':addTime',$addTime);
		$pre->bindParam(':cType',$cType);
		$pre->bindParam(':cDes',$cDes);
		$pre->bindParam(':localTime',$localTime);

		$pre->execute();
	}catch(PDOException $e){

	}
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Up to 85% OFF Birthday Pack for you to Celebrate 13th Anniversary - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="banner">
	<div class="wrapper">
		<a href="https://www.iobit.com" target="_blank" class="logo">IObit</a>
		<div class="title">
			<h1>Let’s Celebrate IObit’s 13 Birthday</h1>
			<h2>Make Your PC Run like New from Now on & Get the Birthday Pack You Prefer!</h2>
		</div>
		<div class="gift-box one-gift">
			<div class="box">
				<h3>80% OFF</h3>
				<dl>
					<dt>
						<h5>Advanced SystemCare 11 PRO</h5> 1 Year / 3 PCs
					</dt>
					<dd><i></i><span>IOtransfer 2</span> <i class="gift"></i></dd>
				</dl>
				<p><strong>$<b>23</b>.99</strong> <del>$117.92</del></p>
				<a href="https://www.iobit.com/buy.php?product=asc113pciot&ref=marbdaysaleamultia&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-maramultia');clickCount(1,'1 gift default')" class="buybtn blue"><i></i>Activate Now</a>
			</div>
		</div>
		<div class="img-box"></div>
		<div class="gift-box three-gift">
			<div class="box">
				<h3>85% OFF</h3>
				<p class="date">
					<span class="first">00</span>
					<span>00</span>
					<span>000</span>
				</p>
				<dl>
					<dt>
						<h5>Advanced SystemCare 11 PRO</h5> 1 Year / 3 PCs
					</dt>
					<dd><i></i><span>Smart Defrag 5 PRO</span> <i class="gift"></i></dd>
					<dd><i></i><span>IObit Uninstaller 7 PRO</span> <i class="gift"></i></dd>
					<dd><i></i><span>Protected Folder</span> <i class="gift"></i></dd>
				</dl>
				<p><strong>$<b>21</b>.98</strong> <del>$149.9</del></p>
				<a href="https://www.iobit.com/buy.php?product=asc113pcsdiupf&ref=marbdaysaleapca&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-marapca');clickCount(2,'3 gift default')" class="buybtn orange"><i></i>Activate Now</a>
			</div>
		</div>
	</div>
</div>
<div class="payment">
	<img src="<?php echo getStaticUrl('images/payment.png')?>">
</div>
<ul class="strongpoint wrapper">
	<li>
		<img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
		<h3>2,000,000+</h3>
		Media Reviews
	</li>
	<li class="center">
		<img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
		<h3>50,000,000+</h3>
		PRO Users
	</li>
	<li>
		<img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
		<h3>150+</h3>
		Countries Worldwide
	</li>
</ul>
<div class="asc-message">
	<div class="wrapper">
		<h2>Activate Advanced SystemCare PRO to Enjoy Cleaner, Faster and Safer PC</h2>
		<p class="list01"><span>Deeper</span> clean & fix registry issues to <br> reduce Windows crashes & error messages.</p>
		<p class="list02"><span>Auto</span> stop unused processes to release <br> RAM and improve PC performance.</p>
		<p class="list03">Reduce system stutter/lag and speed up <br> PC startup up to <span>200% faster</span> *  </p>
		<p class="list04"><strong>No malicious tracking</strong> while automatically <br> erases privacy traces.</p>
		<p class="list05"><strong>Block & remove</strong> spyware and <br> malware in real time.</p>
		<p class="list06">Accelerate download, surfing, gaming, YouTube <br> viewing up to <span>300% faster</span>  * </p>
	</div>
</div>
<!-- compare-table -->
<div class="compar-tab wrapper clearfix">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
		<tr>
			<th colspan="2" class="text">See more about what PRO edition can do for you:</th>
			<th class="space"></th>
			<th class="item-free"><div class="free-box">Advanced SystemCare <br> FREE</div></th>
			<th class="space"></th>
			<th class="item-pro">
			<div class="pro-box">
					Advanced SystemCare <br> PRO 
					<i></i> 
					<p><i class="gift"></i> PC Performance Gifts <span>(Valued at $59.93)</span> </p>
			</div>
			</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon1.png"></td>
			<td class="text">Basic System Clean, Fix and Optimization</td>
			<td class="space"></td>
			<td class="item-free"><img src="<?php echo $pResUrl; ?>images/check-gray.png"></td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/check-pro.png"></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon2.png"></td>
			<td class="text">Fix System Weakness to Prevent Hacking with 1-click <sup class="red"> NEW</sup></td>
			<td class="space"></td>
			<td class="item-free"><img src="<?php echo $pResUrl; ?>images/check-gray.png"></td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/check-pro.png"></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon3.png"></td>
			<td class="text">Up to 300% Internet Speed with Internet Booster <sup> IMPROVED</sup></td>
			<td class="space"></td>
			<td class="item-free"><img src="<?php echo $pResUrl; ?>images/check-f.png"></td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/check-pro.png"></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon4.png"></td>
			<td class="text">Up to 200% Faster PC Startup with Startup Optimization <sup> IMPROVED</sup></td>
			<td class="space"></td>
			<td class="item-free"><img src="<?php echo $pResUrl; ?>images/check-f.png"></td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/check-pro.png"></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon5.png"></td>
			<td class="text">Deep Registry Clean and Defrag for Less Crashes <sup> IMPROVED</sup></td>
			<td class="space"></td>
			<td class="item-free"><img src="<?php echo $pResUrl; ?>images/check-f.png"></td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/check-pro.png"></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon6.png"></td>
			<td class="text">New Disk Optimization Engine for Quicker System Speed <sup class="red"> NEW</sup></td>
			<td class="space"></td>
			<td class="item-free"><img src="<?php echo $pResUrl; ?>images/check-f.png"></td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/check-pro.png"></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon7.png"></td>
			<td class="text">Real-time Protection from Security Threats<sup> IMPROVED</sup></td>
			<td class="space"></td>
			<td class="item-free"><img src="<?php echo $pResUrl; ?>images/check-f.png"></td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/check-pro.png"></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon8.png"></td>
			<td class="text">Full Detection against the Deepest Infections</td>
			<td class="space"></td>
			<td class="item-free"><img src="<?php echo $pResUrl; ?>images/check-f.png"></td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/check-pro.png"></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon9.png"></td>
			<td class="text">Auto Remove Ads &amp; Privacy Traces for Safer Browsing <sup> IMPROVED</sup></td>
			<td class="space"></td>
			<td class="item-free"><img src="<?php echo $pResUrl; ?>images/check-f.png"></td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/check-pro.png"></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon10.png"></td>
			<td class="text">Auto RAM Clean for Smoother System Running </td>
			<td class="space"></td>
			<td class="item-free"><img src="<?php echo $pResUrl; ?>images/check-f.png"></td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/check-pro.png"></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon11.png"></td>
			<td class="text">Auto Update to the Latest Version</td>
			<td class="space"></td>
			<td class="item-free"><img src="<?php echo $pResUrl; ?>images/check-f.png"></td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/check-pro.png"></td>
		</tr>
		<tr>
			<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon12.png"></td>
			<td class="text">Free 24/7 Technical Support on Demand</td>
			<td class="space"></td>
			<td class="item-free"><img src="<?php echo $pResUrl; ?>images/check-f.png"></td>
			<td class="space"></td>
			<td class="item-pro"><img src="<?php echo $pResUrl; ?>images/check-pro.png"></td>
		</tr>
		<tfoot>
		<tr>
			<th colspan="2" class="text"></th>
			<th class="space"></th>
			<th class="item-free">Your Current Version</th>
			<th class="space"></th>
			<th class="item-pro">
				<p><strong>$<b>21.98</b></strong> <del>$149.9</del></p>
				<a href="https://www.iobit.com/buy.php?product=asc113pcsdiupf&ref=marbdaysaleapcb&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-marapcb');clickCount(3,'3 gift default')" class="buybtn">ACTIVATE NOW</a>
				<p class="date"><span>4</span>m: <span>4</span>s: <span>4</span>ms<sup>*</sup> Left Only</p>
			</th>
		</tr>
		</tfoot>
		</tbody>
	</table>
</div>
<div class="awards clearfix">
	<div class="wrapper">
		<h2>World-wide Awards</h2>
		<span>As being trusted and awarded by those world-class media in the past ten years, you know you’ve got the right PC optimizer.</span>
		<p>
			<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/pc-magazine.png"></a>
			<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/clnet.png"></a>
			<a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/major-geers.png"></a>
			<a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/pc-world.png"></a>
			<a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/chlp.png"></a>
			<a href="http://www.softpedia.com/get/Tweak/System-Tweak/Advanced-WindowsCare-Professional.shtml?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/softpedia.png"></a>
			<a href="http://driver-booster.updatestar.com/?ref=ascindex" target="_blank"><img src="<?php echo $pResUrl; ?>images/updatestar.png"></a>
		</p>
	</div>
</div>
<!-- review -->
<div class="container clearfix">
	<div class="review wrapper">
		<div class="review-box">
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<h3>"Not only is it a great product, but the support is equally great"</h3>
				<p>"I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."</p>
			</div>
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<h3>"Cleaned up Spyware and Malware My antivirus lets slip through"</h3>
				<p>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"</p>
			</div>
			<div class="reviews clearfix active">
				<h2>Media Review</h2>
				<h3>A PC optimization tool that wipes out security threats and helps stop new ones in their tracks.</h3>
				<p>IObit Avanced SystemCare is one of our favorite PC cleanup and maintenance tools, and the latest version builds on an already great toolkit with new security-focused options.</p>
			</div>
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<h3>"My choice is still overwhelmingly Advanced SystemCare Pro"</h3>
				<p>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</p>
			</div>
			<div class="reviews clearfix">
				<h2>User Review</h2>
				<h3>"My system has never run better."</h3>
				<p>"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</p>
			</div>
		</div>
		
		<ul class="handle clearfix">
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Bruce-Ramsay.png" alt="Bruce Ramsay"><span></span></div>
				<strong>Bruce Ramsay</strong>

			</li>
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Bob-Bassett.png" alt="Bob Bassett"><span></span></div>
				<strong>Bob Bassett</strong>

			</li>
			<li class="active">
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/techradar.png" alt="Techradar"><span></span></div>
				<strong>Techradar</strong>
			</li>
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Charles-R-Widick.png" alt="Charles R. Widick"><span></span></div>
				<strong>Charles R. Widick</strong>

			</li>
			<li class="last">
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/Gordon-Griswold.png" alt="Gordon Griswold"><span></span></div>
				<strong>Gordon Griswold</strong>

			</li>
		</ul>
	</div>
</div>
<div class="bottom-buy">
	<div class="wrapper">
		<h2>What's More, You Can Get Free Gifts as A Bonus! </h2>
		<div class="box three-box active">
			<div class="img-box"><img src="<?php echo getStaticUrl('images/bottom-three-box.png')?>" alt="" class="img"></div>
			<div class="message">
				<h3>85% OFF</h3>
				<h4><span></span>Top PC Performance<span></span></h4>
				<p>+ 3 Free PC Utilities with 
					<span>
						<strong>00</strong>
						<strong>00</strong>
						<strong>000</strong>
					</span>
				 Left Only</p>
			</div>
			<dl>
				<dt><strong>$<b>21</b>.98 </strong> <del>$149.9</del></dt>
				<dd><a href="https://www.iobit.com/buy.php?product=asc113pcsdiupf&ref=marbdaysaleapcc&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-marapcc');clickCount(4,'3 gift default')" class="buybtn orange"><i></i>Activate Now</a></dd>
			</dl>
		</div>
		<div class="box one-box">
			<div class="img-box"><img src="<?php echo getStaticUrl('images/bottom-one-box.png')?>" alt="" class="img"></div>
			<div class="message">
				<h3>85% OFF</h3>
				<h4><span></span>Multi-device Management<span></span></h4>
				<p>· Improve PC Performance  · Transfer Files between iOS & Windows</p>
			</div>
			<dl>
				<dt><strong>$<b>23</b>.99 </strong> <del>$117.92</del></dt>
				<dd><a href="https://www.iobit.com/buy.php?product=asc113pciot&ref=marbdaysaleamultib&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-maramultib');clickCount(5,'1 gift default')" class="buybtn blue"><i></i>Activate Now</a></dd>
			</dl>
		</div>
	</div>
</div>
<!-- footer -->
<div class="footer">
	<div class="wrapper">
		<div class="additional-info clearfix">
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
				<dd><strong>Money Back Guarantee</strong></dd>
				<dd>If you're not satisfied in the first 60 days, <br>we will give you back your money.</dd>
			</dl>
			<dl>
				<dt><img class="secure-img" src="<?php echo $pResUrl; ?>images/godaddy-secure.png"></dt>
				<dd><strong>Secure Payment</strong></dd>
				<dd>IObit supports several safe modes of payment.</dd>
			</dl>
			<dl class="last">
				<dt><img class="license-img" src="<?php echo $pResUrl; ?>images/get-license.png"></dt>
				<dd><strong>Get License</strong></dd>
				<dd>You will receive the license within a few minutes after purchase.</dd>
			</dl>
		</div>
		<dl class="annotation">
			<dt>Note:</dt>
			<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
			<dd>*.Data may vary based on different system or computer.</dd>
			<dd>*.License for IOTransfer is valid forever for current version.</dd>
			<dd>*.License for Smart Defrag/IObit Uninstaller/Protect Folder is valid for 1 year on 1 computer only.</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
	</div>
</div>
<script type="text/javascript" src="<?php echo getStaticUrl('script/script.js');?>"></script>
</body>
</html>