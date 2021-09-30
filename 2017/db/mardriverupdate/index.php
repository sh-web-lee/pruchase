<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'dbdriverup' . $date;
	if (empty($_COOKIE[$c_name])) {
		$packsNum = 77;
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
	} else {
		$packsNum = $_COOKIE[$c_name];
		if (intval($packsNum) <= 3) {
			setcookie($c_name, 3, time() + 3600 * 24*2);
		} else {
			if ($_GET['f'] == 1) {
				$packsNum--;
			} else {
				if (rand(1, 100) % 2 == 0) {
					$packsNum--;
				}
			}
			setcookie($c_name, $packsNum, time() + 3600 * 24*2);
		}
	}
	echo $packsNum;
	exit;
}
function strCut($text){
	$length=30;
	if(mb_strlen($text, 'utf8') > $length) {
		$text=mb_substr($text, 0, $length, 'utf8');
		$text=mb_substr($text,0,strrpos($text,' ')).'...';
	}
	return $text;
}
$data=json_decode(base64_decode($_GET['ddata']));
if($data){
	$driverCount=$data->m;
}else{
	$driverCount=0;
}
$drivers=$data->l;
$listCount=count($drivers);
$status=array('Old','Very Old','Extremely Old','Outdated','Missing','Faulty','Not Installed');

function microtime_float()
{
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

$packsNum = ceil(microtime_float() * 2000 / 20000);
$packsNum = 360 - ($packsNum % 360);
if ($_GET['action'] == 'getPacks') {
	echo $packsNum;
	exit;
}
$viewNum=rand(35,45);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}
$doRedirect=false;
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
	if((($matches[1][0]>6)||(($matches[1][0]==6)&&($matches[1][1]>=5)))&&(in_array($_GET['to'],array('purchase-6',
					'purchase-21', 'purchase-28','purchase-34','purchase-35','purchase-36','purchase-37','purchase-38',
					'bannerbuy','bannerbuy_2')))){
//		$doRedirect=true;
		$doRedirect=false;
	}
}
$refStr='';
$ver=$_GET['ver'];
$verArr=explode('.',$_GET['ver']);
$verFloat=floatval($verArr[0].'.'.$verArr[1].$verArr[2]);
//if(($verFloat>=6.4)||(empty($_GET['ddata']))){

if(in_array($_GET['st'],array('dbxmasr'))){
    $refStr='-'.$_GET['st'];
}
if(!empty($_GET['pop'])){
    $refStr.='-'.$_GET['pop'];
}

if(!empty($_GET['pdt'])){
    $refStr.='-'.$_GET['pdt'];
}
if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr .= empty($_GET['to']) ? '-unknown' : '-'.$_GET['to'];
$refStr .= '-'.$ver;
$refStr .= empty($_GET['ref']) ? '-unknown' : '-'.$_GET['ref'];
$refStr .= empty($_GET['insur']) ? '-unknown' : '-'.$_GET['insur'];
$refStr .= empty($_GET['finstd']) ? '-unknown' : '-f'.$_GET['finstd'];
$refStr .= '-' . ((strlen($_GET['instd']) == 0) ? 'unknown' : 'i'.$_GET['instd']);
$refStr .= '-' . ((strlen($_GET['usr']) == 0) ? 'unknown' : 'u'.$_GET['usr']);
$refStr .= '-' . ((strlen($_GET['type']) == 0) ? 'unknown' : 't'.$_GET['type']);
$refStr .= '-' . ((strlen($_GET['expd']) == 0) ? 'unknown' : 'e'.$_GET['expd']);
$refStr .= '-' . ((strlen($_GET['flag']) == 0) ? 'unknown' : 'flag'.$_GET['flag']);

$transData=json_decode(base64_decode($_GET['idata']));
$paramPri=$_GET['pri'];
if((!empty($paramPri))&&$transData->$paramPri!==null){
    $refStr.='-'.$paramPri.$transData->$paramPri;
}

$pageDevice=in_array($_GET['pri'],array('asc','imf','iu','sd'))?1:0;

if(empty($_GET['ddata'])||$doRedirect){
	$queryStr=empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING']);
	header('location:./index.php'.$queryStr);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Limited Offer: Save 80% on Driver Booster PRO + Free Gifts - IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:700|Play" rel="stylesheet">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="banner">
	<div class="wrapper">
		<a href="https://www.iobit.com/en/index.php" target="_blank" class="logo">IObit</a>
		<div class="header">
			<p>Driver Booster PRO found extra <strong><?php echo $driverCount;?></strong> updates for you!</p>
			<p class="hidden listCount"><?php echo $listCount;?></p>
			<a href="javascript:void(0);" class="dg-prev unable"></a>
			<a href="javascript:void(0);" class="dg-next"></a>
			<div class="continer">
				<div class="roll">
					<div class="list-content">
						<?php for($i=0;($i<$listCount)&&($i<3);$i++):?>
							<dl>
								<dt><img src="<?php echo $pResUrl.'images/'.(($drivers[$i]->g==true)?'official-icon.png':'whol-icon.png'); ?>" alt=""></dt>
								<dd class="hasname">
									<?php if(($subName=strCut($drivers[$i]->n))!= $drivers[$i]->n):?>
										<strong class="more"><?php echo $subName?></strong>
										<span><?php echo $drivers[$i]->n?></span>
									<?php else:?>
										<strong><?php echo $subName?></strong>
									<?php endif;?>
								</dd>
								<dd>Current: <span><?php echo $status[intval($drivers[$i]->al)]?></span></dd>
								<dd>
									Available: <?php echo $drivers[$i]->av?>
									<img src="<?php echo $pResUrl.'images/'.(($drivers[$i]->g==true)?'official.png':'whol.png'); ?>" alt="">
								</dd>
							</dl>
						<?php endfor;?>
					</div>
					<div class="list-content">
						<?php if($driverCount>3):?>
							<?php for($i=3;(($i<5)&&($i<$listCount));$i++):?>
								<dl>
									<dt><img src="<?php echo $pResUrl.'images/'.(($drivers[$i]->g==true)?'official-icon.png':'whol-icon.png'); ?>" alt=""></dt>
									<dd class="hasname">
										<?php if(($subName=strCut($drivers[$i]->n))!= $drivers[$i]->n):?>
											<strong class="more"><?php echo $subName?></strong>
											<span><?php echo $drivers[$i]->n?></span>
										<?php else:?>
											<strong><?php echo $subName?></strong>
										<?php endif;?>
									</dd>
									<dd>Current: <span><?php echo $status[intval($drivers[$i]->al)]?></span></dd>
									<dd>
										Available: <?php echo $drivers[$i]->av?>
										<img src="<?php echo $pResUrl.'images/'.(($drivers[$i]->g==true)?'official.png':'whol.png'); ?>" alt="">
									</dd>
								</dl>
							<?php endfor;?>
						<?php endif;?>
						<?php if($driverCount>5):?>
						<dl class="and-more">
							and more...
						</dl>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
		<h1>Activate Driver Booster PRO with 80% OFF & Gift Pack Today!</h1>
		<h2><span></span>Update <strong><?php echo $driverCount;?></strong> More Drivers to Enjoy Better PC Performance Now <span></span></h2>
		<div class="content">
			<div class="left-message">
				<img src="<?php echo $pResUrl; ?>images/db-box.png" alt="" class="db-box">
			</div>
			<div class="right-message ">
				<p class="date lato">Only <span class="pack">78</span> of 2,000 Gift Packs Left Now </p>
				<div class="box">
					<span class="one"></span>
					<span class="two"></span>
					<span class="three"></span>
					<span class="four"></span>
				</div>
				<dl>
					<dt class="lato">Now $ <strong>24.95</strong> Was <del>$134.78</del></dt>
					<dd>
						<a href="https://www.iobit.com/buy.php?product=db8sdiupf&ref=en-db3pcsdiupfdriver<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-mar');" class="buybtn"><i></i>
							<span>ACTIVATE NOW</span></a></dd>
					<dd> <img src="<?php echo $pResUrl; ?>images/safe.png" alt=""> 100% 60-Day Money Back Guarantee</dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<div class="payment">
	<img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
</div>
<div class="db-computer cut-off noborder">
	<div class="wrapper">
		<h2 class="subhead">What problems are you having with outdated <br>drivers and game components?</h2>
		<img src="<?php echo $pResUrl; ?>images/computer-iocns.png" alt="" class="computer">
		<ul>
			<li>Frequent system crashing & freezing</li>
			<li class="two">Network connection drops occasionally</li>
			<li class="three">Printer or other external device doesn't work properly</li>
			<li class="four">No sound error when listening to music or talking to others</li>
			<li class="five">Poor game performance, crashes, or hangs caused by graphics driver</li>
		</ul>
	</div>
</div>
<div class="db-message">
	<div class="wrapper">
		<h2 class="subhead red-block"> Why choose Driver Booster PRO to update outdated <br> drivers and game components?</h2>
		<div class="content">
			<img src="<?php echo $pResUrl; ?>images/db-message.png" alt="" class="db-box">
			<dl class="">
				<dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
				<dd>
					<strong>No need of one-by- one driver update</strong>
					<p>Providing you one-stop driver detecting & updating <br> solution.</p>
				</dd>
			</dl>
			<dl class="two">
				<dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
				<dd>
					<strong>Safe driver download & update</strong>

					<p>Automatically backing up & creating system restore <br> point before updating, in case of
						anything unexpected.</p>
				</dd>
			</dl>
			<dl class="three">
				<dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
				<dd>
					<strong>4,500,000 + driver database</strong>

					<p>Priority to update more outdated & rare<br> drivers  and all supplied drivers have<br> passed WHQL		 and strict IObit rules.</p>
				</dd>
			</dl>
			<dl class="four">
				<dt><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></dt>
				<dd>
					<strong>Offline driver update</strong>

					<p>Update and install network <br> drivers without Internet connection</p>
				</dd>
			</dl>
			<dl class="five">
				<dt><img src="<?php echo $pResUrl; ?>images/icons05.png" alt=""></dt>
				<dd>
					<strong>Peak gaming performance guarantee</strong>
					<p>Latest Game Ready Driver from various brands help boost performance, <br> fix bugs and improve gaming experience. Necessary game components are also available <br> to help run your game smoothly.</p>
				</dd>
			</dl>
		</div>
	</div>
</div>
<div class="activate ">
	<div class="wrapper">
		<h3>Activate Now to Help You out from All the Above PC Problems & <span>Save 80%</span></h3>
		<p class="lato">Now <strong>$24.95</strong> Was <del>$134.78</del></p>
		<a href="https://www.iobit.com/buy.php?product=db8sdiupf&ref=en-db3pcsdiupfdriver<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-mar');" class="buybtn save"><i></i> <span>Activate Now</span></a>
		<div class="valued">Valued at $59.93</div>
		<p class="line"><span></span>And<span class="last"></span></p>
		<h4>Activate Now to Get Bonus Gifts  (Valued $59.97)!</h4>
		<dl>
			<dt>
				<img src="<?php echo $pResUrl; ?>images/sd-free.png" alt="">
				<strong>Smart Defrag PRO</strong>
				<del>$19.99</del>
			</dt>
			<dd>Maximize Hard Drive Optimization <br> for <span>Faster PC</span></dd>
		</dl>
		<dl>
			<dt>
				<img src="<?php echo $pResUrl; ?>images/iu-free.png" alt="">
				<strong> IObit Uninstaller PRO</strong>
				<del>$19.99</del>
			</dt>
			<dd>Remove Useless Programs & Plug-ins <br> for<span> Cleaner PC</span></dd>
		</dl>
		<dl class="last">
			<dt>
				<img src="<?php echo $pResUrl; ?>images/pf-free.png" alt="">
				<strong>Protected Folder</strong>
				<del>$19.99</del>
			</dt>
			<dd>No Leak of Important Files <br> for <span>Secured Privacy</span></dd>
		</dl>
		<div class="clear"></div>

	</div>
</div>
<div class="award">
  <div class="wrapper">
    <h2 class="subhead">World-wide Awards</h2>
    <p> As being trusted and awarded by those world-class media in the past seven years, you know you’ve got the right driver updater.</p>
    <img src="<?php echo $pResUrl; ?>images/award.png" alt="">
    <a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=dbupdate" target="_blank" class="pc"></a>
    <a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=dbupdate" target="_blank" class="clnet"></a>
    <a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=dbupdate" target="_blank" class="major-geeks"></a>
    <a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=dbupdate" target="_blank" class="pcword"></a>
    <a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=dbupdate" target="_blank" class="chlp"></a>
    <a href="http://www.softpedia.com/get/System/System-Miscellaneous/IObit-Driver-Booster.shtml?ref=dbupdate" target="_blank" class="softpedia"></a>
    <a href="http://driver-booster.updatestar.com/?ref=dbupdate" target="_blank" class="updatestar"></a>
  </div>
</div>
<div class="review cut-off noborder">
  <div class="wrapper">
    <div class="content ">
      <dl class="active">
        <dt>
          <h3>Media Review</h3></dt>
        <dd>
          <h4>"IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best." </h4>
        </dd>
        <dd>"Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack."</dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd> "First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM,  i was able to play new game titles without having to shutdown any background process.  I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product."
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd>"What a surprise to receive the new Driver Booster from IObit.  Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade.  Once upgrading was complete it was as if my PC had a complete makeover. Sensational!"</dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd>"Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended. "
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd>"It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB8. Easy to use and fast downloads it is the best tool in the Market until now!"
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
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/carlos-alexandre.png" alt="Carlos Alexandre Veríssimo">
        </div>
        <p>Carlos Alexandre Veríssimo</p>
      </li>
    </ul>
  </div>
</div>

<div class="comparison wrapper">
  <h2 class="subhead"> The comparison between FREE and PRO may help you make better decision</h2>
  <table>
    <thead>
    <tr>
      <th colspan="2"></th>
      <th class="itema">
        <div class="free">Driver Booster FREE</div>
      </th>
      <th class="itemb">
        <div class="pro">Driver Booster PRO</div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon01.png" alt=""></td>
      <td class="virtue">Auto Scan Outdated/Missing Drivers <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-cancel.png" alt=""></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon02.png" alt=""></td>
      <td class="virtue">Auto Update Drivers when System Is Idle <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon03.png" alt=""></td>
      <td class="virtue">100%* Faster Download Speed </td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon04.png" alt=""></td>
      <td class="virtue">Auto Backup & Restore before Updating      </td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon07.png" alt=""></td>
      <td class="virtue">Priority to Update the Stability-first Drivers     <img src="<?php echo $pResUrl; ?>images/new.png" alt=""> </td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon05.png" alt=""></td>
      <td class="virtue">Necessary Components for Smooth Game </td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon06.png" alt=""></td>
      <td class="virtue">Priority to Get Latest Game Ready Driver <img src="<?php echo $pResUrl; ?>images/improveo.png" alt="">
      </td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th colspan="2"></th>
      <th class="itema"></th>
      <th class="itemb">
        Only <strong>$24.95</strong>
        <a href="https://www.iobit.com/buy.php?product=db8sdiupf&ref=en-db3pcsdiupfdriver<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-mar');" class="buybtn"><i></i>
          <span>Activate Now</span></a>
        1 Year Subscription / 3 PCs
      </th>
    </tr>
    </tfoot>
  </table>
</div>
<div class="footer lato">
  <div class="wrapper">
    <div class="additional-info clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
        <dd><strong>Money Back Guarantee</strong></dd>
        <dd>If you're not satisfied in the first 60 days, we will give you back your money.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
        <dd><strong>Secure Payment</strong></dd>
        <dd>IObit supports several safe modes of payment.</dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo $pResUrl; ?>images/license-cart.png" alt=""></dt>
        <dd><strong>Get License</strong></dd>
        <dd>You will receive the license within a few minutes after purchase.</dd>
      </dl>
    </div>
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>*.Data may vary based on different system or computer.</dd>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      <dd>*. Smart Defrag PRO / IObit Uninstaller PRO / Protected Folder support 1 year subscription / 1 PC.</dd>
    </dl>
    <div class="copyright">Copyright © 2005 - <?php echo date(Y) ?> IObit. All Rights Reserved</div>
  </div>
</div>
<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
  <div class="wrapper clearfix">
    <div class="num">
      Only <strong class="pack">78</strong> Gift Packs Left
    </div>
    <div class="left">
      <h2 class="lato">Activate Today, Get <span>80% OFF</span> and Gift Pack (Valued $59.97)! </h2>
      <p>Try it RISK FREE - 60-day Money Back Guarantee </p>
    </div>
    <div class="right">
      <p class="lato"> Now $<strong>24.95</strong> Was <del>$134.78</del></p>
      <a href="https://www.iobit.com/buy.php?product=db8sdiupf&ref=en-db3pcsdiupfdriver<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-mar');" class="buybtn"><i></i>
        <span>Activate Now</span></a>
    </div>
  </div>
</div>
<div class="float">
  <img src="<?php echo $pResUrl; ?>images/fl-user.png" alt="">
  <p>There are <strong class="viewNum"><?php echo $viewNum;?></strong> users <br> viewing at this page.</p>
</div>
<script type="text/javascript" src="<?php echo $pResUrl; ?>js/jquery.animateNumber.min.js"></script>
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script type="text/javascript" src="<?php echo $pResUrl; ?>js/script.min.js"></script>
</body>
</html>