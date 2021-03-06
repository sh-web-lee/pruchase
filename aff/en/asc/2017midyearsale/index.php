<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$viewNum=rand(60,96);
include $pRootUrl . 'include/common.inc.php';

if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name='ascmaymid'.$date;
    if (!isset($_COOKIE[$c_name])) {
        $packsNum = 63;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
        if ($_GET['t'] == 1) {
            $packsNum = $_COOKIE[$c_name];
        }
        else {
            if (intval($_COOKIE[$c_name]) <= 0) {
                setcookie($c_name, 0, time() + 3600 * 24);
                $packsNum = 0;
            } else {
                $packsNum = $_COOKIE[$c_name] - 1;
                setcookie($c_name, $packsNum, time() + 3600 * 24);
                if (rand(1, 100) % 2 == 0) {
                    $packsNum++;
                }
            }
        }
    }
    echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
    exit;
}

try{
    $dsn="mysql:host=mariadb-071.wc2.dfw3.stabletransit.com;dbname=1015490_pricssw";
    $pdo=new PDO($dsn,'1015490_pricssw','7CcjUGsxLN82');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->query("set names utf8");

    $sql="insert into midsalecount (ip,addTime,mask) values(:ip,:addTime,".(empty($_GET['mask'])?0:$_GET['mask']).")";
    $pre=$pdo->prepare($sql);
    $pre->bindParam(':ip',empty($_GET['ip'])?getIP():$_GET['ip']);
    $pre->bindParam(':addTime',time());
    $pre->execute();
}catch(PDOException $e){
}
if($_GET['action']=='maskCount'){
    exit();
}
if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_asc10_2017midyearsale';
$buyHref="https://www.iobit.com/buy.php?product=ascsdiuamc2198_aff&ref=".$_GET['ref']."&aff=".$_GET['aff']."&refs=purchase_asc&tw=-8";
$buyHrefMask="https://www.iobit.com/buy.php?product=affascsdiuamc1999&ref=".$_GET['ref']."&aff=".$_GET['aff']."&refs=purchase_asc&tw=-8";
if($_GET['ref']=='fs1702en'){
    $buyHref='https://iobit.onfastspring.com/advanced-systemcare-pro-with-3-free-gifts';
    $buyHrefMask='https://iobit.onfastspring.com/advanced-systemcare-pro-with-3-free-gifts-1999';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Save up to 85% on ASC PRO, speed up, protect and optimize your PC!</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css');?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
<!-- header -->
<div class="header container clearfix">
	<div class="wrapper head">
		<a href="http://www.iobit.com" target="_blank" class="logo">IObit</a>
		<h1>Advanced SystemCare PRO MID-YEAR SALE</h1>
		<div class="banner clearfix">
			<div class="banner-boxshot fl"></div>
			<div class="banner-left fr">
            	<div class="defult">
            		<h2><strong>3 FREE GIFTS</strong>LIMITED TO FIRST <b>100</b> PURCHASES!</h2>
					<h3>Limited quantity available</h3>
					<h4 class="gift-count"><b class="count-num-box"><i class="count-num">36</i></b>bought</h4>
					<div class="progress">
		                <div class="counter"></div>
		                <div class="bar-mask">
		                	<div class="progressbar"></div>
		            	</div>
		              <em class="count"><i class="view-num"><?php echo $viewNum;?></i>more are viewing this page now</em>
	            	</div>
                    <div class="price-box">
                        <div class="price-btn clearfix">
                            <span class="price-num">Now $<strong>21</strong>.98</span>
                            <a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017midyearsale');clickCount(2)" class="buy-btn banner-btn-words fr"><i class="car"></i><span>ACTIVATE NOW</span></a>
                        </div>
                        <ul class="price-dec">
                            <li class="first">
                                <span>Original</span>
                                <p>$149.94 </p>
                            </li>
                            <li>
                                <span>Discount</span>
                                <p class="font-green">85% OFF</p>
                            </li>
                            <li>
                                <span>Save</span>
                                <p>$127.96</p>
                            </li>
                        </ul>
                    </div>
            	</div>
            	<!-- sold-out -->
				<div class="sold-out-banner">
					<h2>No More Free Gifts,<br> Seize Your Last Chance To Get <strong>75% OFF</strong> Now!</h2>
					<h4 class="title-h4">Advanced SystemCare 11 PRO</h4>
					<h3>Limited quantity available</h3>
                    <div class="price-box">
                        <div class="price-btn clearfix">
                            <span class="price-num">Now $<strong>21</strong>.98</span>
                            <a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017midyearsale');clickCount(2)" class="buy-btn banner-btn-words fr"><i class="car"></i><span>ACTIVATE NOW</span></a>
                        </div>
                        <ul class="price-dec">
                            <li class="first">
                                <span>Original</span>
                                <p>$89.97 </p>
                            </li>
                            <li>
                                <span>Discount</span>
                                <p class="font-green">75% OFF</p>
                            </li>
                            <li>
                                <span>Save</span>
                                <p>$67.99</p>
                            </li>
                        </ul>
                    </div>
				</div>
			</div>
		</div>
		<p class="banner-msg">Try it RISK FREE - Activate Now to keep PC in excellent status and get a 60-day Money Back Guarantee</p>
	</div>
</div>
<!-- payments -->
<div class="payments container clearfix">
	<div class="wrapper">
		<img src="<?php echo $pResUrl; ?>images/payment-icon.png" alt=""/>
	</div>
</div>
<!--hightlight-->
<div class="wrapper hightlight clearfix">
    <h2>Activate Now to get a faster, cleaner and more secure PC!</h2>
    <img class="hight-img" src="<?php echo $pResUrl; ?>images/computer.png" alt=""/>
    <div class="hight-light clearfix">
        <dl class="list1 animate fl">
            <dt><img src="<?php echo $pResUrl; ?>images/hightlight-icon_03.png" alt=""></dt>
            <dd> <h3>200%*</h3>
                <p>Reduce system stutter/lag and speed up
                    PC up to 200% faster</p></dd>
        </dl>
        <dl class="list2 animate fr">
            <dt><img src="<?php echo $pResUrl; ?>images/hightlight-icon_05.png" alt=""></dt>
            <dd><h3>300%*</h3>
                <p>Accelerate download, surfing, gaming,
                    YouTube viewing up to 300% faster</p></dd>
        </dl>
        <dl class="list3 animate fl">
            <dt><img src="<?php echo $pResUrl; ?>images/hightlight-icon_09.png" alt=""></dt>
            <dd><h3>Deeper</h3>
                <p>Fix registry issues to reduce  Windows
                    crashes & error messages</p></dd>
        </dl>
        <dl class="list4 animate fr">
            <dt><img src="<?php echo $pResUrl; ?>images/hightlight-icon_10.png" alt=""></dt>
            <dd><h3>Auto</h3>
                <p>Auto stop unused processes to release
                    RAM and improve PC performance</p></dd>
        </dl>
        <dl class="list5 animate fl">
            <dt><img src="<?php echo $pResUrl; ?>images/hightlight-icon_13.png" alt=""></dt>
            <dd><h3>Real-time</h3>
                <p>Protect against spyware and malware
                    in real time</p></dd>
        </dl>
        <dl class="list6 animate fr">
            <dt><img src="<?php echo $pResUrl; ?>images/hightlight-icon_14.png" alt=""></dt>
            <dd><h3>Safer</h3>
                <p>Erase privacy traces to prevent from
                    being tracked</p></dd>
        </dl>
    </div>
</div> 
<!-- middle-buy -->
<div class="middle-buy container clearfix">
	<div class="wrapper">
		<h2>85% OFF Activate Advanced SystemCare PRO Today</h2>
		<ul class="pro-list clearfix">
			<li class="first">
				<img src="<?php echo $pResUrl; ?>images/sd-icon.png" alt=""/>
				<h3>Smart Defrag PRO</h3>
				<p class="list-price"><strong>$0</strong><i>$19.99</i>1 Year / 1 PC</p>
				<p class="pro-name">Max Hard Drive Optimization<br>for <span>Faster PC</span></p>
			</li>
			<li class="second">
				<img src="<?php echo $pResUrl; ?>images/iu-icon.png" alt=""/>
				<h3> IObit Uninstaller PRO</h3>
				<p class="list-price"><strong>$0</strong><i>$19.99</i>1 Year / 1 PC</p>
				<p class="pro-name">Uninstall Stubborn Plug-ins for<br><span>Cleaner PC & Browsing</span></p>
			</li>
			<li>
				<img src="<?php echo $pResUrl; ?>images/amc-icon.png" alt=""/>
				<h3>AMC Security PRO</h3>
				<p class="list-price"><strong>$0</strong><i>$19.99</i>1 Year / Multi Devices</p>
				<p class="pro-name">All-in-One Protector and Booster<br>for <span>Android Device</span></p>
			</li>
		</ul>
		<a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017midyearsale');clickCount(2)" class="middle-btn">
			<div class="btn-container">
				<i class="car"></i>
				<span>Get My Free Gifts</span>
			</div>
		</a>
		<p class="gift-last-num">Hurry, <span class="count-num">36</span> bought <span class="cut-num"><i class="left-num">64</i> left</span> now </p>
	</div>
</div>
<!-- sold-out-bar -->
<div class="sold-out-bar container clearfix">
	<div class="wrapper">
		<h2>Seize Your Last Chance To Get 75% OFF</h2>
		<p>on Advanced SystemCare PRO Now!</p>
		<div class="bar-banner">
			<div class="bar-box fl"></div>
			<div class="bar-right fr">
				<h4>Advanced SystemCare 11 PRO</h4>
				<h3>Limited quantity available</h3>
				<div class="price-btn bar-btn">
					<span class="price-num">Now $<strong>21</strong>.98</span>
					<a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017midyearsale');clickCount(2)" class="buy-btn banner-btn-words"><i class="car"></i><span>ACTIVATE NOW</span></a>
				</div>
			</div>
		</div>
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
                <h3>"Advanced Systemcare aims to remedy whatever ails your computer."</h3>
                <p>"There's nothing worse than a computer that is bogged down so much that it impedes your ability to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."-Cnet</p>
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
                <div class="badge"><img src="<?php echo $pResUrl; ?>images/Cnet.png" alt="Cnet"><span></span></div>
                <strong>Cnet</strong>
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
<!-- awards -->
<div class="awards clearfix">
	<div class="wrapper">
		<h2>World-wide Awards</h2>
		<span>As being trusted and awarded by those world-class media in the past ten years, you know you???ve got the right PC optimizer.</span>
		<img src="<?php echo $pResUrl; ?>images/awards.png" alt=""/>
	</div>
</div>
<!-- footer -->
<div class="footer">
    <div class="wrapper">
        <div class="additional-info clearfix">
            <dl>
                <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png"></dt>
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
            <dd>*.License for AMC Security Full Version with in-app ads.</dd>
        </dl>
        <p class="copyright">Copyright ?? 2005 - 2017 IObit. All Rights Reserved</p>
    </div>
</div>

<!-- floatlayer -->
<div class="floatlayer" id="floatlayer">
	<p><span class="count-num">36</span> bought!<br>
	Hurry, only <span class="left-num">64</span> free gift packs left.</p>
</div>
<!-- mask -->
<div class="mask container"></div>
<div class="mask-box">
	<h2>You are today's Lucky Visitor!<br>
		Enjoy Your <b>Exclusive Extra 10% OFF Now!</b>
		<i class="close">??</i>
	</h2>
	<div class="mask-main clearfix">
		<img class="small-img" src="<?php echo getStaticUrl('images/asc-small.png')?>" />
		<div class="mask-main-right fl">
			<p>The Offer is Valid for</p>
			<span class="time-count"><i>01</i>:<i>59</i></span>
			<ul class="price-dec mask-list">
				<li class="first">
					<span>Original</span>
					<p>$149.94</p>
				</li>
				<li class="second">
					<span>Sale price</span>
					<p>$21.98</p>
				</li>
				<li>
					<span class="font-green">After extra 10% off</span>
					<p>$<b>19</b>.99</p>
				</li>
			</ul>
			<div class="btn-box">
				<a href="<?php echo $buyHrefMask;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017midyearsale');clickCount(3)" class="buy-btn mask-btn clearfix"><i class="car"></i><span>Get My Extra 10% OFF & 3 FREE Gifts</span></a>
			</div>
			<a href="javascript:void(0)" class="close-msg">No, thanks I don't want extra 10% OFF</a>
		</div>
	</div>
</div>
<!-- gotop -->
<div class="fix">
    <div class="gotop" onclick="Totarget($('.logo'), 100)"></div>
</div>
<div style="display: none;">
  <img src="<?php echo $pResUrl; ?>images/mask-bg.png" alt="">
</div>
<div class="pop-up">
    <div class="pop-main">
        <div class="pop-box">
            <h2>Note:</h2>
            <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
            <p>You will be redirected to the latest IObit promotion page automatically.</p>
        </div>
    </div>
</div>
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script type="text/javascript">
    refStr="<?php echo $refStr;?>";
</script>
<script type="text/javascript" src="<?php echo getStaticUrl('script/script.min.js');?>"></script>
    <script>setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);</script></div>
</body>
</html>