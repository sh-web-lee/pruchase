<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'eniulaun_p' . $date;
  $c_name_t='eniulaun_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
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

$paramPct=$_GET['pct'];
$tagShow=true;
if(!empty($paramPct)){
  $refStr.='-'.$paramPct;
  if($paramPct==2){
    $tagShow=false;
  }
}

$transData=json_decode(base64_decode($_GET['data']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>75% OFF IObit Uninstaller PRO and Free Thank-you Gifts - IObit </title>
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
			<a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
      <!-- title -->
			<h1> Launch Special FOR YOUR LOYAL SUPPORT</h1>
			<div class="clearfix">
        <!-- left-message: iu-box -->
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
          <img src="<?php echo getStaticUrl('images/ghost.png')?>" class="ghost"/>
          <span class="disappear"></span>
				</div>
        <!-- right-message -->
				<div class="right fr">
          <div class="message">
            <h2>Upgrade to New IObit Uninstaller 11 PRO</h2>
            <div class="number">
              <span>And Get Free Gifts, </span>
              <div id="reduce" class="reduceNum">
                <div class="listbox"><span class="list"><b>0</b></span></div>
                <div class="listbox"><span class="list"><b>0</b></span></div>
              </div>
              <span>Left Only  </span>
            </div>
            <p><img src="<?php echo getStaticUrl('images/people.png')?>"> <strong class="viewNum"><?php echo $viewNum;?></strong> users viewing at this page now</p>
          </div>
          <dl class="price">
            <dt><strong><small>$</small><b>12</b>.97</strong> <del>$59.93</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=iu113pcpfsd1297&ref=en-iu3pcsdpflaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
                   onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-newlaunch');" 
                   class="buybtn">Activate Now</a></dd>
          </dl>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->
  <div class="intro">
    <div class="wrapper">
      <h2>New IObit Uninstaller 11 PRO Helps You More <span></span></h2>
      <div class="message clearfix">
        <h3>1. Besides Unwanted Programs, These Tricky Ones Can Be Uninstalled</h3>
        <img src="<?php echo getStaticUrl('images/intro-message.png')?>" class="img-box" alt="" / >
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>"></dt>
          <dd>
            <strong>Corrupted & stubborn programs </strong>that can’t be removed through standard uninstallation. <br>
            <?php if($tagShow):?>
              <span>improved</span>
            <?php endif;?>
          </dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>"></dt>
          <dd>
            <strong>Bundled programs </strong>take up your disk space without notice.
          </dd>
        </dl>
        <div class="clear"></div>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>"></dt>
          <dd>
            <strong>Malware & malicious browser plugins  </strong> target your personal data and attempt to comprise PC security. <br>
            <?php if($tagShow):?>
            <span>improved</span>
            <?php endif;?>
          </dd>
        </dl>
        <dl class="right last">
          <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>"></dt>
          <dd>
            <strong>Advertising plug-ins </strong>have popup ads that follow you everywhere while surfing the internet. 
            <?php if($tagShow):?>
            
            <?php endif;?>
          </dd>
        </dl>
      </div>
      <div class="message2 clearfix">
        <h3>2. Besides Residual Files, <br> Other Useless Data Can Be Wiped Off </h3>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
          <dd><strong>Automatically detect </strong></dd>
          <dd>existing leftover files on your PC before using IObit Uninstaller 11 PRO and help to remove them with just 1-click.</dd>
          <dd><span>unique on market</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
          <dd><strong>Automatically clean up </strong></dd>
          <dd>useless inatallation files & data of programs uninstalled through standard Windows method or uninstalled by other utilities. </dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
          <dd><strong>Automatically revert the</strong></dd>
          <dd><strong>changes </strong> that a program has made to your system after uninstalling it.</dd>
          <dd><span>unique on market</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="intro2">
    <div class="wrapper">
      <h3>3. Certainly There Are More Benefits You Don’t Want to Miss</h3>
      <img src="<?php echo getStaticUrl('images/intro2-message.png')?>" class="img-box"> 
      <ul>
        <li>Update all outdated programs with 1-click; <span>improved 50%</span></li>
        <li>Auto scan and clean residual files after uninstalling; <?php if($tagShow):?><span>improved 20%</span><?php endif;?> </li>
        <li>Remove unwanted windows apps in batch;</li>
        <li>Manage software permissions & disable notification <br> prompts for smooth browsing; <span>new</span></li>
        <li>Premium 24/7 technical support on demand;</li>
      </ul>
    </div>
  </div>
  <div class="gift-message">
    <div class="wrapper clearfix">
      <h2>We also Prepare Two Powerful Utilities as Our Thank-you Gifts</h2>
      <div class="gift clearfix">
        <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="">
        <dl>
          <dt>
            <strong>$0</strong> <del>$19.99</del> <br>
            <span>1 Year / 1 PC</span>
          </dt>
          <dd>Maximize Hard Drive <br> Optimization for Faster PC.</dd>
        </dl>
      </div>
      <div class="gift clearfix">
        <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="">
        <dl>
          <dt>
            <strong>$0</strong> <del>$19.99</del> <br>
            <span>1 Year / 1 PC</span>
          </dt>
          <dd>Never Worry about Data Theft <br> or Privacy Leaks!</dd>
        </dl>
      </div>
    </div>
  </div>
	<!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>What Others Say?</h2>
      <div class="box">
        <div class="relist clearfix">
          <dl class="on clearfix">
            <dt><img src="<?php echo getStaticUrl('images/PCMAG.png')?>" alt="PC Magazine"/></dt>
            <dd>
              <h3>Media Review</h3>
              <p>
                "If you need a program that lets you cleanly and completely uninstall applications, fire up IObit Uninstaller. This free utility makes it a breeze to delete apps, including stray files that are often left behind when you use Windows to delete software from your hard drive or SSD."
              </p>
              <h4>PC Magazine</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"/></dt>
            <dd>
              <h3>User Review</h3>
              <p>
                "I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed. "
              </p>
              <h4>Samrat Kumar Chakrabortty</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/John.png')?>" alt="John Glenn Perong"/></dt>
            <dd>
              <h3>User Review</h3>
              <p>
                "IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."
              </p>
              <h4>John Glenn Perong</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/Ivan.png')?>" alt="Ivan White"/></dt>
            <dd>
              <h3>User Review</h3>
              <p>
                "IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."
              </p>
              <h4>Ivan White</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/Ali.png')?>" alt="Ali Tekin"/></dt>
            <dd>
              <h3>User Review</h3>
              <p>
                This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."
              </p>
              <h4>Ali Tekin</h4>
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
	<div class="awards">
		<div class="wrapper">
			<h2>World-wide Awards</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
      <div class="service clearfix">
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
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					*.Data may vary based on different system or computer.
				</dd>
        <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl"> 
        <img src="<?php echo getStaticUrl('images/fl-ghost.png')?>" class="ghost"/>
        <span class="disappear"></span>
        </div>
      <div class="message">
        <div class="number">
          <span>And Get Free Gifts, </span>
          <div id="fReduce" class="reduceNum">
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          <span> Left Only  </span>
        </div>
        <p><strong class="viewNum"><?php echo $viewNum;?></strong> users viewing at this page now</p>
      </div>
      <div class="price">
        <a href="https://www.iobit.com/buy.php?product=iu113pcpfsd1297&ref=en-iu3pcsdpflaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
           onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-newlaunch');" class="buybtn">Get My Free Gifts </a>
      </div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
    strTo="<?php echo $_GET['to'];?>";
    if(strTo === 'oldicon2') othertitle();
</script>
</body>
</html>