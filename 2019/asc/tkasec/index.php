<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(35,45);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_asc'))){
	$refStr.='-'.$_GET['pop'];
}
if (preg_match('/([0-9]*)\./', $_GET['ver'], $matches)) {
	$ver = $matches[1];
	$refStr .= '-' . $ver;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Up to 85% OFF to Get Advanced SystemCare PRO</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<?php if(!isEdge()):?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
	<?php endif;?>
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
	<div class="wrapper clearfix">
    <!-- logo -->
		<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
    <!-- title -->
		<div class="title">
			<h1>IObit 14 Years Anniversary</h1>
			<p>Take Up to 85% OFF</p>
		</div>
    <!-- asc message -->
		<div class="message box ">
			<div class="top-message">
				<div class="img-box">
					<span></span>
				</div>
				<h2>75% OFF</h2>
				<p><strong>$<b>19</b>.99</strong>  was <del>$89.97</del></p>
        <!-- buybtn -->
				<a class="buybtn"
           href="https://www.iobit.com/buy.php?product=asc123pc1999&ref=asc1999av2019tkasec<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'asc1999buy', 'buy', 'ascpurchase-tkasec');">
          <i></i> <span>Activate Now</span>
        </a>

			</div>
			<p> only $1.66 / Month</p>
			<p>$69.98 Saved</p>
      <p class="nomal">Advanced SystemCare Pro   <del>$89.97</del></p>
			<p class="nomal">-</p>
			<p class="nomal">-</p>
			<p class="noborder nomal">-</p>
		</div>
    <!-- asc bundle message -->
		<div class="gift-box message">
			<div class="top-message">
				<div class="img-box">
					<span class="gif-box"></span>
					<span class="three-box"></span>
				</div>
				<h2>85% OFF</h2>
				<p><strong>$<b>21</b>.98</strong>  was <del>$149.94</del></p>
        <!-- buybtn -->
				<a class="buybtn"
           href="https://www.iobit.com/buy.php?product=asc12sdiuamc2198&ref=ascsdiuamc2198av2019tkasec<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'asc2198buy', 'buy', 'ascpurchase-tkasec');">
          <i></i> <span>Activate Now</span>
        </a>
				<span class="info"></span>
				<p class="date">Hurry! <strong>04</strong>M: <strong>04</strong>S: <strong class="last">04</strong> Ms Left</p>
			</div>
			<p>only $1.83 / Month</p>
			<p>$127.96 Saved</p>
      <p class="nomal">Advanced SystemCare Pro   <del>$89.97</del></p>
      <p class="nomal">IObit Uninstaller 8 Pro   <del>$19.99</del></p>
      <p class="nomal">Smart Defrag 6 Pro   <del>$19.99</del></p>
      <p class="noborder nomal">AMC Security Pro  <del>$19.99</del></p>
		</div>
	</div>
  <!-- info -->
	<div class="info-message">
		<p>
      The price shown in the page is valid only for this promotion.
			<br> Your Advanced SystemCare subscription will continue after the initial subscription period at the non-promotional price of $29.99.
			<br>  If you choose the Advanced SystemCare Premier Pack, all products will also continue after the first year at the normal price shown in the page below.

    </p>
		<p>
      Cancel Auto-renewal
      <br>If you do not want to participate in the auto-renewal plan, you can uncheck the Auto-renewal box in shopping cart review page or in your
			<br>account at any time before the start of the next subscription.
    </p>
	</div>
</div>
<!-- banner end -->

<!-- million start -->
<div class="million">
	<div class="wrapper">
		<h2>Activate Now to get a faster, cleaner and more secure PC!</h2>
	</div>
</div>
<!-- million end -->

<?php if($_GET['st']!='asc_wr'):?>
<!-- asc-message start -->
<div class="asc-message">
	<div class="wrapper">
		<div class="content">
			<img src="<?php echo $pResUrl; ?>images/asc-message.png" alt="" class="asc-box">
      <!-- 200%* -->
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
				<dd>
					<strong>200%*</strong>
					<p>Reduce system stutter/lag and speed up PC up to 200% faster.</p>
				</dd>
			</dl>
      <!-- 300%* -->
			<dl class="two">
				<dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
				<dd>
          <strong>300%*</strong>
          <p>
            Accelerate download, surfing, gaming, YouTube viewing <br>
            up to 300% faster.
          </p>
				</dd>
			</dl>
      <!-- Deeper -->
			<dl class="three">
				<dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
				<dd>
					<strong>Deeper</strong>
					<p>
            Fix registry issues to reduce Windows <br>
            crashes & error messages.
          </p>
				</dd>
			</dl>
      <!-- Auto -->
			<dl class="four">
				<dt><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></dt>
				<dd>
					<strong>Auto</strong>
					<p>
            Auto stop unused processes to release <br>
            RAM and improve PC performance.
          </p>
				</dd>
			</dl>
      <!-- Privacy Security -->
			<dl class="five">
				<dt><img src="<?php echo $pResUrl; ?>images/icons05.png" alt=""></dt>
				<dd>
					<strong>Privacy Security</strong>
					<p>
            Keep your sensitive data like contact, e-mail data, <br>
            Dropbox, OneDrive etc. away from any secret access.
          </p>
				</dd>
			</dl>
      <!-- Safer Browsing -->
      <dl class="six">
        <dt><img src="<?php echo $pResUrl; ?>images/icons06.png" alt=""></dt>
        <dd>
          <strong>Safer Browsing</strong>
          <p>
            Auto clear browsing data and disguise <br>
            digital fingerprint to stop malicious tracking.
          </p>
        </dd>
      </dl>
      <!-- link -->
      <a class="intro" href="javascript: void(0);">Learn more about PRO edition ></a>
		</div>
	</div>
</div>
<!-- asc-message end -->

<?php else:?>
<!-- asc-message start -->
<div class="asc-message">
  <div class="wrapper">
    <div class="content paddingtop135">
      <img src="<?php echo $pResUrl; ?>images/asc-message-update.png" alt="" class="asc-box">
      <!-- 200%* -->
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
        <dd>
          <strong>Faster</strong>
          <p>Reduce system stutter for up to <b>200%*</b> faster startup <br> and accelerate internet connection for <b>300%*</b> faster browsing</p>
        </dd>
      </dl>
      <!-- 300%* -->
      <dl class="two add">
        <dt><img src="<?php echo $pResUrl; ?>images/icons02-update.png" alt=""></dt>
        <dd>
          <strong>Safe Software Update <img src="<?php echo $pResUrl;?>images/attention.png" alt="ATTENTION"></strong>
          <p>
            With just one click, you can update important software without any<br>
            user intervention, including <b>WinRAR*, whose existing security flaw<br>
              may put your computer at risk for years.</b><br>
            <em>*Update immediately, once the new official version is ready.</em>
          </p>
        </dd>
      </dl>
      <!-- Deeper -->
      <dl class="three">
        <dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
        <dd>
          <strong>Deeper</strong>
          <p>
            Fix registry issues to reduce Windows <br>
            crashes & error messages.
          </p>
        </dd>
      </dl>
      <!-- Auto -->
      <dl class="four">
        <dt><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></dt>
        <dd>
          <strong>Auto</strong>
          <p>
            Auto stop unused processes to release <br>
            RAM and improve PC performance.
          </p>
        </dd>
      </dl>
      <!-- Privacy Security -->
      <dl class="five">
        <dt><img src="<?php echo $pResUrl; ?>images/icons05.png" alt=""></dt>
        <dd>
          <strong>Privacy Security</strong>
          <p>
            Keep your sensitive data like contact, e-mail data, <br>
            Dropbox, OneDrive etc. away from any secret access.
          </p>
        </dd>
      </dl>
      <!-- Safer Browsing -->
      <dl class="six">
        <dt><img src="<?php echo $pResUrl; ?>images/icons06.png" alt=""></dt>
        <dd>
          <strong>Safer Browsing</strong>
          <p>
            Auto clear browsing data and disguise <br>
            digital fingerprint to stop malicious tracking.
          </p>
        </dd>
      </dl>
      <!-- link -->
      <a class="intro" href="javascript: void(0);">Learn more about PRO edition ></a>
    </div>
  </div>
</div>
<!-- asc-message end -->
<?php endif;?>

<!-- activate start -->
<div class="activate ">
	<div class="wrapper clearfix">
		<h3>What extra benefit will you get from bundle option?</h3>
		<p>Optimize your PCs for better performance</p>
		<dl>
			<dt>
				<span>Smart Defrag PRO</span>
				<strong>Smart Defrag PRO</strong>
				<del>$19.99</del>
			</dt>
			<dd>Maximize Hard Drive Optimization <br> for <span>Faster PC</span></dd>
		</dl>
		<dl class="iu">
			<dt>
				<span>IObit Uninstaller PRO</span>
				<strong> IObit Uninstaller PRO</strong>
				<del>$19.99</del>
			</dt>
			<dd>Uninstall Unwanted Plug-ins <br> for <span>Cleaner PC & Browsing</span></dd>
		</dl>
		<dl class="last amc">
			<dt>
				<span>AMC Security PRO</span>
				<strong>AMC Security PRO</strong>
				<del>$19.99</del>
			</dt>
			<dd>All-in-One Protector and Booster <br> for <span>Android Device</span></dd>
		</dl>
	</div>
</div>
<!-- activate end -->

<!-- between-buy start -->
<div class="between-buy">
	<div class="wrapper">
		<div class="content">
      <h2 class=""><span>SAVE <b>85%</b></span> to Activate Now to Enjoy Faster and Cleaner PC!</h2>
			<p>Now <strong>$21.98</strong> Was <del>$149.94</del></p>
      <!-- buybtn -->
			<a class="buybtn save"
         href="https://www.iobit.com/buy.php?product=asc12sdiuamc2198&ref=ascsdiuamc2198av2019tkasec<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc"
         onclick="ga('send', 'event', 'asc2198buy', 'buy', 'ascpurchase-tkasec');">
        <i></i> Activate Now
      </a>
			<p class="last count-time"> Hurry! <span>04</span>M:<span>53</span>S:<span>463</span> Ms Left</p>
		</div>
		<dl class="days">
			<dt><img src="<?php echo getStaticUrl('images/days.png')?>" alt="" /></dt>
			<dd>
				<strong> Try it RISK FREE - with our 60-day Money Back Guarantee</strong>
				<p>We’re confident that activating PRO edition will improve your PC performance for affordable price!</p>
			</dd>
		</dl>
		<dl class="visa">
			<dt><b>We accept</b></dt>
			<dd><img src="<?php echo $pResUrl; ?>images/payment.png" alt=""></dd>
		</dl>
	</div>
</div>
<!-- between-buy end -->

<!-- award start -->
<div class="award">
	<div class="wrapper">
		<h2 class="">World-wide Awards</h2>
		<p>As being trusted and awarded by those world-class media in the past eleven years, you know you’ve got the right PC optimizer.</p>
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
<!-- award end -->

<!-- review start -->
<div class="review">
	<div class="wrapper">
		<div class="content ">
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          <h4>"Not only is it a great product, but the support is equally great"</h4>
        </dd>
        <dd>"I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."</dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          <h4>"Cleaned up Spyware and Malware My antivirus lets slip through"</h4>
        </dd>
        <dd>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"</dd>
      </dl>
			<dl class="active">
				<dt>
				<h3>Media Review</h3></dt>
				<dd>
					<h4>A PC optimization tool that wipes out security threats and helps stop new ones in their tracks.</h4>
				</dd>
				<dd>IObit Avanced SystemCare is one of our favorite PC cleanup and maintenance tools, and the latest version builds on an already great toolkit with new security-focused options.</dd>
			</dl>
			<dl>
				<dt>
				<h3>User Review</h3></dt>
				<dd>
					<h4>"My choice is still overwhelmingly Advanced SystemCare Pro"</h4>
				</dd>
				<dd>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</dd>
			</dl>
			<dl>
				<dt>
				<h3>User Review</h3></dt>
				<dd>
					<h4>"My system has never run better."</h4>
				</dd>
				<dd>"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</dd>
			</dl>
		</div>
		<ul class="users clearfix lato">
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay"></div>
        <p>Bruce Ramsay</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"></div>
        <p>Bob Bassett</p>
      </li>
			<li class="current">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/techradar.png" alt="Techradar"></div>
        <p>Techradar</p>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"></div>
				<p>Charles R. Widick</p>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt="Gordon Griswold"></div>
				<p>Gordon Griswold</p>
			</li>
		</ul>
	</div>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison" id="compare">
	<div class="wrapper">
		<h2 class="">The comparison between FREE and PRO may help you make better decision</h2>
		<table>
			<thead>
			<tr>
				<th colspan="2"></th>
				<th class="itema">
					<div class="free">Advanced SystemCare FREE</div>
				</th>
				<th class="itemb">
					<div class="pro">Advanced SystemCare PRO</div>
				</th>
			</tr>
			</thead>
			<tbody>
      <!-- 01 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon01.png" alt=""></td>
				<td class="virtue">Basic System Clean, Fix and Optimization</td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-cancel.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
      <!-- 02 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon02.png" alt=""></td>
        <td class="virtue">Fix System Weakness to Prevent Hacking with 1-click <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-cancel.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- 03 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon03.png" alt=""></td>
				<td class="virtue">Keep Your Personal Data away from Untrusted Programs <img src="<?php echo $pResUrl; ?>images/new.png" alt=""></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
      <!-- 04 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon04.png" alt=""></td>
        <td class="virtue">No One Can Steal Your Digital Fingerprint to Track Your Web Browsing <img src="<?php echo $pResUrl; ?>images/new.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- 05 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon05.png" alt=""></td>
				<td class="virtue">Up to 300% Internet Speed with Internet Booster <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
      <!-- 06 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon06.png" alt=""></td>
				<td class="virtue">Up to 200% Faster PC Startup with Startup Optimization <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
      <!-- 07 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon07.png" alt=""></td>
				<td class="virtue">Deep Registry Clean and Defrag for Less Crashes <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
      <!-- 08 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon08.png" alt=""></td>
        <td class="virtue">New Disk Optimization Engine for Quicker System Speed</td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon09.png" alt=""></td>
        <td class="virtue">Real-time Protection from Security Threats</td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- 10 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon10.png" alt=""></td>
        <td class="virtue">Full Detection against the Deepest Infections</td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- 11 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon11.png" alt=""></td>
        <td class="virtue">Auto Remove Ads & Privacy Traces for Safer Browsing <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- 12 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon12.png" alt=""></td>
        <td class="virtue">Auto RAM Clean for Smoother System Running</td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- 13 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon13.png" alt=""></td>
        <td class="virtue">Auto Update to the Latest Version</td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- 14 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon14.png" alt=""></td>
				<td class="virtue">Free 24/7 Technical Support on Demand</td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
			</tbody>
			<tfoot>
			<th colspan="2"></th>
			<th class="itema"></th>
			<th class="itemb">
				Only <strong>$21.98</strong>
        <!-- buybtn -->
				<a class="buybtn"
           href="https://www.iobit.com/buy.php?product=asc12sdiuamc2198&ref=ascsdiuamc2198av2019tkasec<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'asc2198buy', 'buy', 'ascpurchase-tkasec');">
          <i></i>
					<span>Activate Now</span>
        </a>
				1 Year Subscription / 3 PCs
			</th>
			</tfoot>
		</table>
	</div>
</div>
<!-- comparison end -->

<!-- annotation start -->
<div class="annotation lato ">
	<dl class="wrapper">
		<dt>Note:</dt>
		<dd>*.Data may vary based on different system or computer.</dd>
		<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
		<dd>*.Smart Defrag PRO / IObit Uninstaller PRO support 1 year subscription / 1 PC.</dd>
    <dd>*.License for AMC Security Full Version with in-app ads.</dd>
	</dl>
</div>
<!-- annotation end -->

<!-- footer start -->
<div class="footer lato">Copyright © 2005 - <?php echo date(Y) ?> IObit. All Rights Reserved</div>
<!-- footer end -->

<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
	<div class="wrapper clearfix">
		<div class="img-box"></div>
		<div class="right">
			<p>Get a Faster, Cleaner and More Secure PC</p>
      <!-- buybtn -->
			<a class="buybtn"
         href="https://www.iobit.com/buy.php?product=asc12sdiuamc2198&ref=ascsdiuamc2198av2019tkasec<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc"
         onclick="ga('send', 'event', 'asc2198buy', 'buy', 'ascpurchase-tkasec');">
        Activate Now
      </a>
		</div>
	</div>
</div>
<div class="float">
	<img src="<?php echo $pResUrl; ?>images/fl-user.png" alt="">
	<p>There are <strong class="viewNum"><?php echo $viewNum;?></strong> users <br> viewing at this page.</p>
</div>
<!-- floatlayer end -->

<!-- pop start -->
<div class="pop">
  <div class="pop-container clearfix">
    <h3>You've been selected to win our <span>extra 10% OFF!</span></h3>
    <div class="message-sold">
      <div class="countdown">Hurry, this offer is valid in <p class="min"><span>0 1 2 3 4 5 6 7 8 9</span></p><p class="sec"><span>0 1 2 3 4 5 6 7 8 9</span></p> <span>s</span> </div>
      <div class="message clearfix">
        <dl>
          <dt><img src="<?php echo $pResUrl;?>images/pop-asc3pc.png" alt="Advanced SystemCare PRO 12"></dt>
          <dd>
            <p class="price">Now <span>$<strong>17</strong>.99</span> <del>$19.99</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href=" https://www.iobit.com/buy.php?product=asc123pc1799&ref=asc1799av2019tkasec<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
               onclick="ga('send', 'event', 'asc1799buy', 'buy', 'ascpurchase-tkasec');">
              Get It Now
            </a>
            <ul>
              <li>Sale price <del>$19.99</del></li>
              <li>Original <del>$89.97</del></li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl;?>images/pop-asc3gifts.png" alt="Advanced SystemCare PRO 12"></dt>
          <dd>
            <p class="price">Now <span>$<strong>19</strong>.78</span> <del>$21.98</del></p>
            <!-- buybtn -->
            <a class="buybtn another"
               href="https://www.iobit.com/buy.php?product=asc12sdiuamc1978&ref=ascsdiuamc1978av2019tkasec<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
               onclick="ga('send', 'event', 'asc1978buy', 'buy', 'ascpurchase-tkasec');">
              Get It Now
            </a>
            <ul>
              <li class="clearfix">Sale price <del>$21.98</del></li>
              <li class="clearfix">Original <del>$149.94</del></li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
    <dl class="message-soldout clearfix">
      <dt class="fl"><img src="<?php echo $pResUrl;?>images/pop-asc3pcsoldout.png" alt="Advanced SystemCare PRO 12"></dt>
      <dd class="fl">
        <div class="countdown">Hurry, this offer is valid in <p class="min"><span>0 1 2 3 4 5 6 7 8 9</span></p><p class="sec"><span>0 1 2 3 4 5 6 7 8 9</span></p> <span>s</span> </div>
        <table>
          <tr>
            <td>Original</td>
            <td>Sale price</td>
            <td class="last">Special Offer Price</td>
          </tr>
          <tr>
            <td><del>$89.97</del></td>
            <td><del>$19.99</del></td>
            <td class="last yellow">$17.99</td>
          </tr>
        </table>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=asc123pc1799&ref=asc1799av2019soldouttkasec<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'asc1799soldbuy', 'buy', 'ascpurchase-tkasec');">
          Get It Now
        </a>
      </dd>
    </dl>
    <a class="pop-close" href="javascript: closePop();">X</a>
  </div>
</div>
<!-- pop end -->

<script>refStr="<?php echo $refStr;?>";</script>
<script type="text/javascript">refStr='<?php echo $refStr;?>';</script>
<script type="text/javascript" src="<?php echo getStaticUrl('js/script.js')?>"></script>
</body>
</html>