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
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
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
      <!-- logo -->
			<a class="logo" href="https://www.iobit.com" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
      <!-- title -->
			<h1>The Global Presale Is Live</h1>
			<div class="clearfix">
        <!-- left-message: iu-box -->
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
        <!-- right-message -->
				<div class="right fr">
					<h2>IObit Uninstaller 9 PRO</h2>
					<p>Complete uninstall without leaving a trace</p>
					<ul class="price clearfix">
						<li class="first">
              <p><strong>$<big>0</big><sup>*</sup></strong> <del>$29.99</del></p>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change"><b class="giftNum">50</b> seats left now</p>
						</li>
						<li>
              <!-- buybtn -->
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=iu9preorder&ref=iu9preorderiu<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
							   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderiu');">
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
    <h2>Why Upgrade to PRO Edition?</h2>
    <!-- content -->
    <div class="content">
      <div class="wrapper">
        <ul class="clearfix">
          <li class="active">More Powerful Uninstall</li>
          <li>More Thorough Cleaning</li>
        </ul>
        <div class="box">
          <div class="inlist">
            <div class="indetail first clearfix">
              <dl class="fl">
                <dt>
                  <h3>Your Current Edition</h3>
                  <h4>Uninstall</h4>
                </dt>
                <dd>
                  Programs, browser extensions and
                  <br> Windows apps.
                </dd>
              </dl>
              <dl class="fr">
                <dt>
                  <h3>IObit Uninstaller 9 PRO</h3>
                  <h4>Uninstall <i>IMPROVED</i></h4>
                </dt>
                <dd>
                  Programs, browser extensions and <br>
                  Windows apps.
                </dd>
                <dd>
                  Stubborn programs that can't be <br>
                  uninstalled by conventional means.
                </dd>
                <dd>
                  Bundled programs alongside freeware <br>
                  to advertise or steal privacy data.<br>
                  <em class="space">unique on market</em>
                </dd>
                <dd>
                  Malicious and advertising plug-ins <br>
                  which inject ads or malicious links into <br>
                  the pages that display. <br>
                  <em class="space">unique on market</em>
                </dd>
              </dl>
              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
            </div>
            <div class="indetail last clearfix">
              <dl class="fl">
                <dt>
                  <h3>Your Current Edition</h3>
                </dt>
                <dd>
                  <h4>Remove</h4>
                  Left files and registries after <br>
                  uninstalling.
                </dd>
              </dl>
              <dl class="fr">
                <dt>
                  <h3>IObit Uninstaller 9 PRO</h3>
                </dt>
                <dd>
                  <h4>Remove <i>IMPROVED</i></h4>
                  Left files and registries after <br>
                  uninstalling.
                </dd>
                <dd>
                  <h4>Detect <i class="new">NEW</i></h4>
                  System changes made by a program <br>
                  and revert them after uninstalling the <br>
                  program.
                </dd>
                <dd>
                  <h4>Scan <i class="new">NEW</i></h4>
                  Leftover files of programs uninstalled <br>
                  previously without using IObit <br>
                  Uninstaller. <br>
                  <em class="space">unique on market</em>
                </dd>
              </dl>
              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
            </div>
          </div>
        </div>
      </div>
      <span class="prev"><</span>
      <span class="next active">></span>
    </div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>More Other Benefits of IObit Uninstaller 9 PRO</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-03.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li><i class="all-icons">√</i> Remove programs, browser extensions and windows apps in batch</li>
						<li><i class="all-icons">√</i> Uninstall programs via desk icon, opened window or system tray icon </li>
						<li><i class="all-icons">√</i> Auto make a restore point before uninstalling</li>
						<li><i class="all-icons">√</i> Update all outdated programs with one click</li>
						<li><i class="all-icons">√</i> Auto update when a new version is available </li>
						<li><i class="all-icons">√</i> Premium 24/7 technical support on demand</li>
					</ul>
				</div>
			</div>
      <div class="price clearfix">
        <h3>Pre-order for $0 Now to Unlock All PRO Features</h3>
        <div class="fl">
          <strong>$<big>0</big><sup>*</sup></strong> <del>$29.99</del>
          <p class="change">only<b class="giftNum">50</b>seats left now</p>
        </div>
        <a class="buybtn fl"
           href="https://www.iobit.com/buy.php?product=iu9preorder&ref=iu9preorderiu<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderiu');">
          Pre-order Now
        </a>
      </div>
		</div>
	</div>
	<!-- feature end -->

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
             href="https://www.iobit.com/buy.php?product=iu9preorder&ref=iu9preorderiu<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderiu');">
	  			  Pre-order Now	
	  			</a>
	  		</div>
	  	</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>