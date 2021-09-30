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

if($_GET['action']=='popStatistic'){
  $type=intval($_GET['type']);
  statistic($type);
  exit();
}

function statistic($type){
  try{
    $dsn="mysql:host=localhost;dbname=purchase";
    $pdo=new PDO($dsn,'root','123a123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("set names utf8");
    $insertSql="insert into enascannipop(ip,type,addTime) values(:ip,:type,:addTime)";
    $pre=$pdo->prepare($insertSql);

    $ip=getIP();
    $addTime=time();
    $pre->bindParam(':ip',$ip);
    $pre->bindParam(':type',$type);
    $pre->bindParam(':addTime',$addTime);
    $pre->execute();
  }catch (PDOException $e){
  }
}

statistic(3);


$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
if(!empty($_GET['k'])){
  $refStr.='-'.$_GET['k'];
}
if(!empty($_GET['c'])){
  $refStr.='-'.$_GET['c'];
}
if(!empty($_GET['insur'])){
  $refStr.='-'.$_GET['insur'];
}

if(!empty($_GET['pop'])){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Up to 85% OFF to Get Advanced SystemCare PRO - IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<?php if(!isEdge()):?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,700i" rel="stylesheet">
	<?php endif;?>
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<script>
		function cSet(name,value) {
			var Days = 2;
			var exp = new Date();
			exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
			document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
		}
		function cGet(name) {
			var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
			if (arr = document.cookie.match(reg))
				return unescape(arr[2]);
			else
				return null;
		}
		var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
		var browserLanguage = MApp(2.2).language.langArr[0];
		var irpid=MApp(2.2).url.getParameters('irpid');
	</script>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a href="https://www.iobit.com/en/index.php" target="_blank" class="logo">IObit</a>
    <h1 class="title">BLACK FIRDAY</h1>
    <div class="clearfix">
      <div class="offer left">
        <div class="top-message">
          <div class="img-box">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
          </div>
          <h2 class="discount">75% OFF</h2>
          <p><strong>$<b>19</b>.99</strong>  was <del>$89.97</del></p>
          <a class="buybtn empty"
               href="https://www.iobit.com/buy.php?product=asc143pc1999&ref=en-asc3pcspringb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
               onclick="ga('send', 'event', 'asc1999buy', 'buy', 'ascpurchase-2020springb');">
            <i></i> <span>Activate Now</span>
          </a>
        </div>
        <ul class="message-list">
          <li>only $1.66 / Month</li>
          <li>$69.98 Saved</li>
          <li class="small">Advanced SystemCare Pro   <del>$89.97</del></li>
          <li class="small">-</li>
          <li class="small">-</li>
          <li class="small last">-</li>
        </ul>
      </div>
      <div class="offer right sale">
        <div class="top-message">
          <div class="img-box">
            <img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
          </div>
          <h2 class="discount">85% OFF</h2>
          <p><strong>$<b>21</b>.98</strong>  was <del>$149.94</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=asc14sdiuamc2198&ref=en-asc3pcsdiuamcspringb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
             onclick="ga('send', 'event', 'asc2198buy', 'buy', 'ascpurchase-2020springb');">
            <i></i> <span>Activate Now</span>
          </a>
          <span class="info"></span>
          <p class="date">Hurry! <strong>04</strong>M: <strong>04</strong>S Left</p>
        </div>
        <ul class="message-list">
          <li>only $1.83 / Month</li>
          <li>$127.96 Saved</li>
          <li class="small">Advanced SystemCare Pro   <del>$89.97</del></li>
          <li class="small">IObit Uninstaller 10 Pro   <del>$19.99</del></li>
          <li class="small">Smart Defrag 6 Pro   <del>$19.99</del></li>
          <li class="small last">AMC Security Pro  <del>$19.99</del></li>
        </ul>
      </div>
    </div>
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
      <img class="asc-box" src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
      <span class="feature-line"></span>
      <!-- 200%* -->
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons01.png?" alt=""></dt>
				<dd>
					<strong>200%*</strong>
					<p>Reduce system stutter/lag and speed up PC up to 200% faster.</p>
				</dd>
			</dl>
      <!-- 300%* -->
			<dl class="two">
				<dt><img src="<?php echo $pResUrl; ?>images/icons02.png?" alt=""></dt>
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
				<dt><img src="<?php echo $pResUrl; ?>images/icons03.png?" alt=""></dt>
				<dd>
					<strong>Smarter</strong>
					<p>
          Reduce Windows crashes & error <br> messages completely with new AI mode

          </p>
				</dd>
			</dl>
      <!-- Auto -->
			<dl class="four">
				<dt><img src="<?php echo $pResUrl; ?>images/icons04.png?" alt=""></dt>
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
				<dt><img src="<?php echo $pResUrl; ?>images/icons05.png?" alt=""></dt>
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
        <dt><img src="<?php echo $pResUrl; ?>images/icons06.png?" alt=""></dt>
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
    <div class="content">
      <img class="asc-box" src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
      <span class="feature-line"></span>
      <!-- 200%* -->
      <dl style="top: 62px;">
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
            With just one click, you can update important software without<br> any
            user intervention, including <b>WinRAR*, whose existing<br> security flaw
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
<div class="activate">
	<div class="wrapper">
		<h2>What extra benefit will you get from bundle option?</h2>
		<p>Optimize your PCs for better performance</p>
		<div class="clearfix">
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
    <h3><span>SAVE <big>85%</big></span> to Activate Now to Enjoy Faster and Cleaner PC!</h3>
    <p class="now">Now <strong>$21.98</strong> Was <del>$149.94</del></p>
    <a class="buybtn" 
       href="https://www.iobit.com/buy.php?product=asc14sdiuamc2198&ref=en-asc3pcsdiuamcspringb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc" 
       onclick="ga('send', 'event', 'asc2198buy', 'buy', 'ascpurchase-2020springb');">
      <i></i> Activate Now
    </a>
    <p class="now last count-time">Hurry! <span>04</span>M:<span>53</span>S Ms Left</p>
	</div>
</div>
<!-- activate end -->
 
<!-- between-buy start -->
<div class="between-buy">
	<div class="wrapper">
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
		<p>As being trusted and awarded by those world-class media in the past thirteen years, you know you’ve got the right PC optimizer.</p>
		<ul class="clearfix">
			<li class="first">
				<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/pc-sm.png')?>" alt="" />
				</a>
			</li>
			<li>
				<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=dbstate" target="_blank">
					<img src="<?php echo getStaticUrl('images/cnet02.png')?>" alt="" />
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
        <dt><h3>User Review</h3></dt>
        <dd>"Advanced system care 14 is the most complete all in one system on the market. I've been using the products for years now and every year there getting better the new easy interface the deep cleaning you get with the software its breeze to use one click and its doing its magic all the other options that come within system are great also the empty folder finder the internet booster even game booster rocks!! I think it's one of the best cleaning systems out there today."</dd>
        
      </dl>
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>"I have purchased many different software programs to speed up and fix problems with my PC. Unfortunately, most of them really didn't help or make a difference until I tried out Advanced System Care 14. I love that there are so many options and solutions to fix any problem. It's amazing how much faster my PC is now after the first scan and repair. Definitely the best product I have come across."</dd>
      </dl>
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>"I love using Advanced SystemCare 14 Beta. It is fast. It cleans up privacy traces, junk files and registry fragments. I especially like the sensitive area access permission pop-up. The first time an app tries to access sensitive files, a window opens to either allow access or deny. Once permission is granted for an app, the pop-up no longer occurs for that app. I know my sensitive files will be kept safe."</dd>
      </dl>
			<dl class="active">
				<dt>
				<h3>Media Review</h3></dt>
				<dd>"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."</dd>
			</dl>
			<dl>
				<dt><h3>User Review</h3></dt>
				<dd>"I have tried various programs over time which have promised to keep my computers running problem free. I turned to ASC years ago using the free version at first. Finding that I no longer suffered from the niggles and bloating that occurs I upgraded to the Paid version and have never looked back since. Advanced SystemCare Pro is the only one I would recommend based on my experiences. I also use IObit Uninstaller, Smart Defrag and Driver Booster just make things much better."</dd>
			</dl>
			<dl>
				<dt><h3>User Review</h3></dt>
				<dd>"I have been using ASC for years now. I have recently tested the latest version V14. And it is by far the most comprehensive version to date. IObit continue to improve their Products and Technology. With more options and easier navigation that help find solutions. I don't need to shop elsewhere."</dd>
			</dl>
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>"The features in Advanced System Care (ASC) 14 are awesome and the overall appearance is clean, fresh, and modern. I have used other all-in-one system maintenance programs, but none have been as effective as ASC 14. The program reduces and eliminates the use of non-essential resources which allow your computer to run cooler and more efficiently. This product is amazing and the best in class. If you care about your laptop or pc, use Advanced System Care 14!"</dd>
      </dl>
		</div>
		<ul class="users clearfix lato">
      <li>
         <div class="pic"><img src="<?php echo $pResUrl; ?>images/Ryan-Hill.png" alt="Ryan Hill"><span></span></div>
			   <p>Ryan Hill</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/Lyle-Stelmaschuk.png" alt="Lyle Stelmaschuk"><span></span></div>
				<p>Lyle Stelmaschuk</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/richard-preston.png" alt="Richard Preston"></div>
        <p>Richard Preston</p>
      </li>
			<li class="current">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"></div>
        <p>Cnet</p>
			</li>
			<li>
				<div class="pic"><img src="<?php echo $pResUrl; ?>images/richard-beavers.png" alt="Richard Beavers"></div>
				<p>Richard Beavers</p>
			</li>
			<li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/Brendon-O'Rourke.png" alt="Brendon O'Rourke"><span></span></div>
				<p>Brendon O'Rourke</p>
			</li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/Anthony-Baker.png" alt="Anthony Baker"><span></span></div>
				<p>Anthony Baker</p>
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
        <td class="virtue">Fix System Weakness to Prevent Hacking with 1-click</td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-cancel.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- new -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon15.png" alt=""></td>
        <td class="virtue">Smarter AI Mode for Intelligent Scan and Premium PC Cleaning <img src="<?php echo $pResUrl; ?>images/new.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon16.png" alt=""></td>
        <td class="virtue">1-Click to Fix Disk Errors for More Stable Efficient PC System <img src="<?php echo $pResUrl; ?>images/new.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-cancel.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- 03 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon03.png" alt=""></td>
				<td class="virtue">Keep Your Personal Data away from Untrusted Programs <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
			</tr>
      <!-- 04 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon04.png" alt=""></td>
        <td class="virtue">No One Can Steal Your Digital Fingerprint to Track Your Web Browsing </td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- 05 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon05.png" alt=""></td>
				<td class="virtue">Up to 300% Internet Speed with Internet Booster </td>
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
				<td class="virtue">Deep Registry Clean and Defrag for Less Crashes</td>
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
        <td class="virtue">Real-time Protection from Security Threats <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- 10 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon10.png" alt=""></td>
        <td class="virtue">Full Detection against the Deepest Infections <img src="<?php echo $pResUrl; ?>images/improveo.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <!-- 11 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon17.png" alt=""></td>
        <td class="virtue">Detect and Enable Both Antivirus & Firewall for Dual Protection <img src="<?php echo $pResUrl; ?>images/new.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-cancel.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon11.png" alt=""></td>
        <td class="virtue">Auto Remove Ads & Privacy Traces for Safer Browsing </td>
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
      <tr>
        <th colspan="2"></th>
        <th class="itema"></th>
        <th class="itemb">
          Only <strong>$21.98</strong>
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=asc14sdiuamc2198&ref=en-asc3pcsdiuamcspringb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
             onclick="ga('send', 'event', 'asc2198buy', 'buy', 'ascpurchase-2020springb');">
            <i></i>
            <span>Activate Now</span>
          </a>
          1 Year Subscription / 3 PCs
        </th>
      </tr>
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
		<div class="img-box">
      <img src="<?php echo getStaticUrl('images/fl-asc-gift-box.png')?>" alt=""/>  
    </div>
    <div class="discount">85% OFF</div>
		<div class="right">
			<p>Get a Faster, Cleaner and More Secure PC</p>
      <!-- buybtn -->
			<a class="buybtn"
         href="https://www.iobit.com/buy.php?product=asc14sdiuamc2198&ref=en-asc3pcsdiuamcspringb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
         onclick="ga('send', 'event', 'asc2198buy', 'buy', 'ascpurchase-2020springb');">
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
      <div class="countdown">Hurry, this offer is valid in <p class="min"><span>0 1 2 3 4 5 6 7 8 9</span></p><p class="sec"><span>0 1 2 3 4 5 6 7 8 9</span></p> s </div>
      <div class="message clearfix">
        <dl class="left">
          <dt><img src="<?php echo $pResUrl;?>images/asc-box.png" alt="Advanced SystemCare PRO 12"></dt>
          <dd>
            <p class="price">Now <span>$<strong>17</strong>.99</span> <del>$19.99</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=asc143pc1799&ref=en-asc3pc1799popspringb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
               onclick="ga('send', 'event', 'asc1799buy', 'buy', 'ascpurchase-2020springb');">
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
               href="https://www.iobit.com/buy.php?product=asc14sdiuamc1978&ref=en-asc3pcsdiuamc1978popspringb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
               onclick="ga('send', 'event', 'asc1978buy', 'buy', 'ascpurchase-2020springb');">
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
      <dt class="fl"><img src="<?php echo $pResUrl;?>images/asc-box.png" alt="Advanced SystemCare PRO 12"></dt>
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
           href="https://www.iobit.com/buy.php?product=asc143pc1799&ref=en-asc3pc1799soldoutpopspringb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc "
           onclick="ga('send', 'event', 'asc1799soldbuy', 'buy', 'ascpurchase-2020springb');">
          Get It Now
        </a>
      </dd>
    </dl>
    <a class="pop-close" href="javascript: closePop();">X</a>
  </div>
</div>
<!-- pop end -->

<script type="text/javascript">
  refStr='<?php echo $refStr;?>';
  var _imgSrc = "<?php echo getStaticUrl('images/asc-box.png')?>";
</script>
<script type="text/javascript" src="<?php echo getStaticUrl('js/script.js')?>"></script>
</body>
</html>