<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'eniujune_p' . $date;
	$c_name_t='eniujune_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(49,58);
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
		setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 0) {
			$packsNum = 0;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
	$refStr.='-'.$_GET['to'];
}

$transData=json_decode(base64_decode($_GET['data']));
$preData=$transData->iu9pre;
$preDataArr=(array)$preData;
$pluginMp=$preDataArr['plugin-mp'];
$fileSizeShow=number_format($preData->filesize/(1024*1024*1024),1);
$fileSizeUnit='GB';
if($fileSizeShow<=0.1){
	$fileSizeShow=number_format($preData->filesize/(1024*1024),1);
	$fileSizeUnit='MB';
}
$fileSizeShow=$fileSizeShow>0.1?$fileSizeShow:0;
$leftOvers=intval($preData->reg)+intval($preData->file)+intval($preData->task)+intval($preData->service);
$preData->fileSizeShow=$fileSizeShow;
$preData->leftOvers=$leftOvers;
$preData->pluginMp=$pluginMp;
$preDataJs=json_encode($preData);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pay $0 to get IObit Uninstaller 9 PRO</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<h1>The Global Presale Is Live</h1>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h2>IObit Uninstaller 9 PRO</h2>
					<p>Complete uninstall without leaving a trace</p>
					<ul class="price clearfix">
						<li class="first">
							<strong>$<big>0</big><sup>*</sup></strong> <del>$29.99</del>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change"><b class="giftNum">50</b> seats left now</p>
						</li>
						<li>
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=iu9preorder&ref=iu9preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
							   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderexp');">
							  Pre-order Now	
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
	<div class="intro">
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>What Did IObit Uninstaller 8 PRO Do for You?</h2>
			<div class="three clearfix">
				<div class="left-message fl">
					<div class="post">
					  <div class="post-criale"></div>
						<div class="mask"></div>
						<span class="star"></span>
					</div>
					<span class="clean"></span>
					<div class="left-post">
					  <div class="post-criale"></div>
						<div class="mask"></div>
					</div>
				</div>
				<?php if(($fileSizeShow+intval($preData->soft)+$leftOvers+intval($preData->plugin)+intval($preData->softupdate)+intval($preData->stubborn)+intval($preData->bundle)+intval($pluginMp))<=0):?>
					<ul class="right-message normal">
						<li>
							<h3>Uninstall </h3>
							<p>Stubborn and bundled programs, browser extensions and Windows apps</p>
						</li>
						<li>
							<h3>Clean </h3>
							<p>Leftover files of uninstalled programs completely</p>
						</li>
						<li>
							<h3>Identify </h3>
							<p>Malicious and advertising plug-ins for safer browser</p>
						</li>
						<li>
							<h3>Update </h3>
							<p>All outdated software with one click for covering the security holes</p>
						</li>
					</ul>
				<?php else:?>
				<ul class="right-message ">
					<?php if(!empty($fileSizeShow)):?>
					<li class="data1">
						<h3><span></span> <?php echo $fileSizeUnit;?> </h3>
						<p>disk space released</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->soft))):?>
					<li class="data2">
						<h3><span></span>  </h3>
						<p>programs uninstalled </p>
					</li>
					<?php endif;?>
					<?php if(!empty($leftOvers)):?>
					<li class="data3">
						<h3><span></span>  </h3>
						<p> leftovers removed   </p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->plugin))):?>
					<li class="data4">
						<h3><span></span> </h3>
						<p>browser extensions removed</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->softupdate))):?>
					<li class="data5">
						<h3><span></span> </h3>
						<p>outdated software updated</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->stubborn))):?>
					<li class="data6">
						<h3><span></span> </h3>
						<p>stubborn programs uninstalled </p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->bundle))):?>
					<li class="data7">
						<h3><span></span></h3>
						<p> bundled programs uninstalled  </p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($pluginMp))):?>
					<li class="data8">
						<h3><span>2</span> </h3>
						<p>malicious plug-ins removed  </p>
					</li>
					<?php endif;?>
				</ul>
				<?php endif;?>
			</div>
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>What Can IObit Uninstaller 9 PRO Do for You?</h2>
			<div class="one clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-01.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h3><b>More Powerful Uninstall</b></h3>
					<dl>
						<dt><h4>Unwanted programs</h4></dt>
						<dd>
							Remove programs, browser extensions and Windows apps.
						</dd>
					</dl>
					<dl>
						<dt><h4>Stubborn programs <span><em>IMPROVE 150% </em></span></h4></dt>
						<dd>
							Forcefully remove programs that can't be uninstalled by conventional means
						</dd>
					</dl>
					<dl>
						<dt><h4>Bundled programs</h4></dt>
						<dd>Remove programs that install alongside freeware to advertise or steal privacy data.</dd>
						<dd><span><em>unique on market</em></span></dd>
					</dl>
					<dl>
						<dt><h4>Malicious and advertising plug-ins  <span><em>IMPROVE 50%  </em></span></h4></dt>
						<dd>Remove infected plug-ins which inject advertisements or malicious links into the pages that display.</dd>
						<dd><span><em>unique on market</em></span></dd>
					</dl>
				</div>
			</div>
			<div class="two clearfix">
				<div class="right fl">
					<h3><b>More Thorough Cleaning</b></h3>
					<dl class="safe">
						<dt><h4>Remove <span><em>IMPROVE 15% </em></span></h4></dt>
						<dd>
							Left files and registries after uninstalling.
						</dd>
					</dl>
					<dl>
						<dt><h4>Detect <span class="green"><em>NEW</em></span></h4></dt>
						<dd>
							System changes made by a program and revert them after uninstalling the program.
						</dd>
					</dl>
					<dl>
						<dt><h4>Scan <span class="green"><em>NEW</em></span></h4></dt>
						<dd>
							Leftover files of programs uninstalled previously without using IObit Uninstaller.
						</dd>
						<dd><span><em>unique on market</em></span></dd>
					</dl>
				</div>
				<div class="left fr">
					<img src="<?php echo getStaticUrl('images/iu-screen-02.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Difference Between Your Current Edition and IObit Uninstaller 9 PRO </h2>
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<thead>
					<tr>
						<th class="text"></th>
						<th class="space"></th>
						<th class="itema"><span>Your Current Edition </span></th>
						<th class="space"></th>
						<th class="itemb"><span> IObit Uninstaller 9 PRO</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></span>
							Remove programs, extensions and windows apps in batch
						</td>
						<td class="space"></td>
						<td class="itema"><span class="currt"></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></span>
							Identify and remove stubborn programs and bundleware 
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></span>
							Detect and revert system changes an installer made   
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></span>
							Identify malicious and advertising extensions   
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></span>
							Auto clean leftovers that cannot be deleted by other utilities 
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></span>
							Scan leftovers of already uninstalled programs    
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></span>
							Update all outdated programs with one click  
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""/></span>
							Auto update when a new version is available  
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""/></span>
							Premium 24/7 technical support on demand 
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- feature end -->
	<div class="between-buy">
		<div class="wrapper">
			<h2>Pre-order for <span>$0</span> to Enjoy IObit Uninstaller 9 PRO Now</h2>
			<ul class="price clearfix">
				<li class="first">
					<strong>$<big>0</big><sup>*</sup></strong> <del>$29.99</del>
					<p class="change"><b class="giftNum">50</b> seats left now</p>
				</li>
				<li>
					<a class="buybtn" href="https://www.iobit.com/buy.php?product=iu9preorder&ref=iu9preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
						 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderexp');">
					  Pre-order Now	
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- review start -->
	<div class="review">
    <div class="wrapper">
      <h2>What Others Say?</h2>
      <div class="box">
        <div class="relist clearfix">
          <dl class="on clearfix">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
            <dd>
              <h3>Media review</h3>
              <p>
                This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping.
              </p>
              <h4>MakeUseOf</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"/></dt>
            <dd>
              <h3>User Review</h3>
              <p>
                I have used IObit programs for years with great effect ! For this reason I stay with IObit products. I, in the past have serviced and fixed laptops and mobiles (android) and always leave them, with IObit products installed, and ask them to regularly 'hit the big' C' and tell them it will automatically fix and speed up their laptop/computer/mobile! :) I highly recommend the uninstaller (and the latest beta) as a safe reliable program that shifts stubborn programs! Most importantly, remove 'hidden' coding that the programmer intended to leave, which then brings adverts to re-install again! IObit 'ALL' products are safe' and easy to use' most of all look after your PC's.
              </p>
              <h4>Jeff A Watts</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
            <dd>
              <h3>User Review</h3>
              <p>
                I find IObit uninstaller excellent to use as it has all you could wish for. I love the fact that it uninstalls all the left over fragments. It also has a software updater which reminds you when one of the programs need updating, and the fact that it will uninstall batch programs really makes it a winner. In fact it is basically just what one needs to keep your computer good to go.
              </p>
              <h4>Lynette van Niekerk</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
            <dd>
              <h3>User Review</h3>
              <p>
                IObit Uninstaller is the best software to remove programs on the computer, it is fast and very effective it does not compare anything with basic uninstaller of windows, it seriously cleans all the rest of the program and so there are no delays in the computer. I have been using it for a few months and I do not know how to live without it, I recommend it to my friends and family. Thanks IObit Uninstaller is fantastic.
              </p>
              <h4>Paulo Martins</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
            <dd>
              <h3>User Review</h3>
              <p>
                The IObit Uninstaller gets better with every update. I've been using it for more than 3 years now. It's fast to load and has simple UI. Some of the many features I regularly use are Batch uninstall, Powerful scan, File shredder and Recently installed feature which gives me quick access to a program that I just installed which I don't like or it doesn't work properly.
              </p>
              <h4>Lovro Žužić</h4>
            </dd>
          </dl>
        </div>
      </div>
      <span class="prev"><</span>
      <span class="next">></span>
    </div>
  </div>
	<!-- review end -->

  <!-- service start -->
	<div class="service">
		<div class="wrapper">
			<h2>World-wide Awards</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					*.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $14.77 automatically. This 50% discount from the original price of $29.99 is 
					bonus only for preorders!
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
	  	</div>
	  	<div class="price fr clearfix">
	  		<div class="one fl">
	  			<div id="fReduce" class="reduceNum">
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>5</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  			</div>
	  			<p class="change"><span class="viewNum"><?php echo $viewNum;?></span> visitors now, only<b class="giftNum">50</b>seats left!</p>
	  		</div>
	  		<div class="two fl"><strong>$<big>0</big><sup>*</sup></strong> <del>$29.99</del></div>
	  		<div class="three fl">
	  			<a class="buybtn"
	  			   href="https://www.iobit.com/buy.php?product=iu9preorder&ref=iu9preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
						 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderexp');">
	  			  Pre-order Now	
	  			</a>
	  		</div>
	  	</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>
	refStr="<?php echo $refStr;?>";
	preData=JSON.parse('<?php echo $preDataJs;?>');
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>