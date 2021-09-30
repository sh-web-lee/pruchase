<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
	$date=$_GET['d'];
	$cName='eniunewins_p'.$date;
	$cookie=$_COOKIE[$cName];
	if($cookie!==null){
		$packsNum=$_COOKIE[$cName];
		if($packsNum>3){
			$packsNum--;
			setcookie($cName,$packsNum);
		}else{
			$packsNum=3;
		}
	}else{
		$packsNum=97;
		setcookie($cName,$packsNum);
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['pst'])?'':('-p'.$_GET['pst']);

if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr = '-' . ((strlen($_GET['to']) == 0) ? 'unknown' : $_GET['to']);
$refStr .= '-' . $ver;
$refStr .= '-' . ((strlen($_GET['user']) == 0) ? 'unknown' : 'u'.$_GET['user']);
$refStr .= '-' . ((strlen($_GET['insday']) == 0) ? 'unknown' : 'i'.$_GET['insday']);
$refStr .= '-' . ((strlen($_GET['insur']) == 0) ? 'unknown' : $_GET['insur']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Save up to 70% OFF on IObit Uninstaller PRO and Get free gift pack - IObit</title>
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
			<a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<h1>Redeem Your Gifts</h1>
			<h6>when you choose any plan of IObit Uninstaller 11 PRO below</h6>
			<div id="clist" class="clist clearfix">
				<div class="imgbox fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 11 PRO"/>
					<b class="all-icons three">1 PC</b>
				</div>
				<div class="electbox fl">
					<h4><span class="name">Device(s)</span> <span>Price</span></h4>
					<ul>
						<li>
							<div class="tag"><i class="all-icons">√</i></div>
							<h2>IObit Uninstaller 11 PRO <span>1 year subscription</span></h2>
							<h3>1 PC</h3>
							<div class="price">
								<strong><small>$</small>14.77</strong> <del>$19.99</del>
								<p>Saving 25%</p>
							</div>
						</li>
						<li class="on active">
							<div class="tag"><i class="all-icons">√</i></div>
							<h2>IObit Uninstaller 11 PRO <span>1 year subscription</span></h2>
							<h3>3 PCs</h3>
							<div class="price">
								<strong><small>$</small>16.77</strong> <del>$59.93</del>
								<p>Saving 70%</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="clist glist clearfix">
				<div class="imgbox fl">
					<img src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/>
				</div>
				<ul class="electbox fl">
					<li>
						<div class="tag"><i class="all-icons">√</i></div>
						<h2>IObit Gift Pack <span>Smart Defrag 7 PRO<br> Protected Folder<br> Start Menu 8</span></h2>
						<h3><span class="gift"><b class="giftNum">96</b></span> left</h3>
						<div class="price"><strong>Free</strong></div>
					</li>
				</ul>
			</div>
			<div class="allprice clearfix">
				<p><b>Total price</b> <strong><small>$</small><span>16</span>.77</strong></p>
				<a class="buybtn fr"
				   href="https://www.iobit.com/buy.php?product=iu11sdpfsm3pc&ref=en-iu3pcsdpfsminstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
				   onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-newinstall');">
					Activate Now
				</a>
			</div>
			<p>100% 60-day money back guarantee</p>
		</div>
	</div>
	<!-- banner end -->

	<!-- comparison start -->
	<div id="compare" class="comparison wrapper">
		<h2>What Are the Differences Between Free and Pro Edition?</h2>
	  <table border="0" cellspacing="0" cellpadding="0" width="100%">
	    <thead>
	      <tr>
	        <th class="icons"></th>
	        <th class="itema"><span>IObit Uninstaller Free</span></th>
	        <th class="itemb"><span>IObit Uninstaller PRO</span></th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td class="icons" rowspan="4">
	        	<span><img src="<?php echo getStaticUrl('images/icons-01.png')?>" alt=""/></span>
	        	<b>Quick Uninstall</b>
	        </td>
	        <td class="itema first">Uninstall programs, Windows apps and browser plug-ins.</td>
	        <td class="itemb">Uninstall programs, Windows apps and browser plug-ins.</td>
	      </tr>
	      <tr>
	        <td class="itema">Uninstall programs via desk icon, opened window or system tray icon.</td>
	        <td class="itemb">Uninstall programs via desk icon, opened window or system tray icon.</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Detect and uninstall third-party programs alongside freeware.</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb" style="text-indent: 0px"><span style="display: inline-block; padding-left:25px">Easily uninstall 1000+ stubborn programs, including those with corrupted issues.</span></td>
	      </tr>
	      <tr class="space"><td></td></tr>
	      <tr>
	        <td class="icons" rowspan="3">
	        	<span><img src="<?php echo getStaticUrl('images/icons-02.png')?>" alt=""/></span>
	        	<b>Clean Browser</b>
	        </td>
	        <td class="itema first gray">Block notification prompts for cleaner and smoother surfing.</td>
	        <td class="itemb gray">Block notification prompts for cleaner and smoother surfing.</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Identify malicious plug-ins that inject malicious links into the pages.</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Identify advertising plug-ins that insert ads on the pages.</td>
	      </tr>
	      <tr class="space"><td></td></tr>
	      <tr>
	        <td class="icons" rowspan="3">
	        	<span><img src="<?php echo getStaticUrl('images/icons-03.png')?>" alt=""/></span>
	        	<b>In-depth Clean</b>
	        </td>
	        <td class="itema first gray">Auto clean residual files after uninstalling programs.</td>
	        <td class="itemb gray">Auto clean residual files after uninstalling programs.</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Auto detect & clean leftovers that other utilities failed to remove.</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Auto revert system changes made by a program after uninstalling it.</td>
	      </tr>
	      <tr class="space"><td></td></tr>
	      <tr>
	        <td class="icons last" rowspan="3">
	        	<span><img src="<?php echo getStaticUrl('images/icons-04.png')?>" alt=""/></span>
	        	<b>Other Benefits</b>
	        </td>
	        <td class="itema gray">Manage software permissions and delete useless setup files.</td>
	        <td class="itemb gray">Manage software permissions and delete useless setup files.</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Update your important software with 1-click.</td>
	      </tr>
	      <tr>
	        <td class="itema last"><i class="all-icons">×</i></td>
	        <td class="itemb last">Premium 24/7 technical support on demand. </td>
	      </tr>
	    </tbody>
	  </table>
	</div>
	<!-- comparison end -->

	<!-- giftdetails start -->
	<div class="giftdetails">
		<div class="wrapper">
			<h2>Moreover, a Free Gift Pack Is Prepared for You</h2>
			<ul class="clearfix">
				<li>
					<img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/>
					<h4>Smart Defrag PRO</h4>
					<p class="name"><strong>$0</strong> <del>$19.99</del>    1 Y / 1 PC</p>
					<p>Get the Maximum Hard Drive Performance!</p>
				</li>
				<li>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/>
					<h4>Protected Folder</h4>
					<p class="name"><strong>$0</strong> <del>$19.99</del>    1 Y / 1 PC</p>
					<p>Never Worry about Data Theft or Privacy Leaks!</p>
				</li>
				<li class="last">
					<img src="<?php echo getStaticUrl('images/sm8-box.png')?>" alt="Start Menu 8"/>
					<h4>Start Menu 8</h4>
					<p class="name"><strong>$0</strong> <del>$12.99</del>    1 Y / 1 PC</p>
					<p>Easily Return to Classic Start Menu</p>
				</li>
			</ul>
			<h3>Get My Gift Pack to Optimize My PC Performance Now!</h3>
			<a class="buybtn"
			   href="https://www.iobit.com/buy.php?product=iu11sdpfsm3pc&ref=en-iu3pcsdpfsminstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
			   onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-newinstall');">
				Get My Gift Pack
			</a>
			<p class="giftbox"><span class="gift"><b class="giftNum">96</b></span> packs left</p>
		</div>
	</div>
	<!-- giftdetails end -->

	<!-- review start -->
	<div class="review wrapper">
	  <h2>What Other Users and Media Say</h2>
	  <div id="dg-container" class="dg-container">
	    <div class="nav"> 
	      <span class="dg-prev"></span>
	      <span class="dg-next"></span>
	    </div>
	      <div class="content dg-wrapper">  
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
	          <dd>
	            <h2>Media Review</h2>
	            <p>" This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."</p>
	            <cite>MakeUseOf</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></dt>
	          <dd>
	            <h2>User Review</h2>
	            <p>"IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."</p>
	            <cite>Ivan White</cite>
	          </dd>
	        </dl>             
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/ali.png')?>" alt="Ali Tekin"></dt>
	          <dd>
	            <h2>User Review</h2>
	            <p>
	            	This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."
	            </p>
	            <cite>Ali Tekin</cite>
	          </dd>
	        </dl>                 
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></dt>
	          <dd>
	            <h2>User Review</h2>
	            <p>
	            	"I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed. "
	            </p>
	            <cite>Samrat Kumar Chakrabortty</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></dt>
	          <dd>
	            <h2>User Review</h2>
	            <p>
	            	"IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."
	            </p>
	            <cite>John Glenn Perong</cite>
	          </dd>
	        </dl>
	      </div>               
	  </div>
	</div>
	<!-- review end -->

  <!-- awards start -->
	<div class="awards">
		<div class="wrapper">
			<h2>World-wide Awards</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
		</div>
	</div>
	<!-- awards end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<!-- service start -->
			<div class="service wrapper clearfix">
			  <dl class="fl">
			    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
			    <dd>
			      <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
			      <p>
			       We’re confident that activating PRO edition will quickly uninstall unwanted programs for affordable price!
			      </p>
			    </dd>
			  </dl>
			  <dl class="fr">
			    <dd>
			      <h4>We accept</h4>
			    </dd>
			    <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
			  </dl>
			</div>
			<!-- service end -->
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- pop start -->
	<!-- <div class="popbg"></div>
	<div class="popbox">
		<div class="inner">
			<big>Welcome</big>
			<dl class="clearfix">
				<dt><img src="<?php echo getStaticUrl('images/pop-gift-box.png')?>" alt=""/></dt>
				<dd>
					<h2>Gift for<br> New Members</h2>
					<p>Limited quantities. Packs left: <span class="gift"><b class="giftNum">96</b></span></p>
				</dd>
			</dl>
			<i class="close">X</i>
		</div>
	</div> -->
	<!-- pop end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
		<img src="<?php echo getStaticUrl('images/float-gift-box.png')?>" alt=""/>
		<p class="giftbox">Only<span class="gift"><b class="giftNum">96</b></span> Packs Left</p>
		<a class="fbtn"
		   href="https://www.iobit.com/buy.php?product=iu11sdpfsm3pc&ref=en-iu3pcsdpfsminstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
		   onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-newinstall');">
		  Get It Now >>
		</a>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>