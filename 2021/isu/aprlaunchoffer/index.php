<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action']) && $_GET['action'] == 'getPacks'){

    $date = date('d');

    $cookie_name = 'launchoff'.$date;

    $cookie_name_t = 'launchoff_t'.$date;

    $packs = $_COOKIE[$cookie_name];

    $packs_t = $_COOKIE[$cookie_name_t];

    if(strlen($packs) <= 0){

        $packs = rand(74,89);

        $packs_t = $packs;

        setcookie($cookie_name_t,$packs_t,time()+3600*24);

    }else{

        $packs --;

        $packs = $packs <= 0 ? '0' : $packs;
    }
    setcookie($cookie_name,$packs,time()+3600*24);

    echo json_encode(['packsNum'=>$packs]);

    exit();
}

$refStr = '';

$refStr .= (strlen($_GET['to']) > 0) ? '-'.$_GET['to'] : '';

$refStr .= (strlen($_GET['usr']) > 0) ? '-u'.$_GET['usr'] : '';

$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-v'.$ver_arr[0].$ver_arr[1];

$info_json = str_replace(';"names":', ',"names":', base64_decode(urldecode($_GET['info'])));

$info_json = str_replace(';"vers":', ',"vers":', $info_json);

$info = json_decode($info_json, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>80% OFF to Get New IObit Software Updater PRO and 2 Utilities - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/swiper.min.css')?>">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
	
</head>
<body>
	<div class="banner-wrap">
		<div class="banner">
			<a class="logo" href="https://www.iobit.com/en/index.php" target="_blank"></a>
			<div class="banner-title">
				<img src="<?php echo getStaticUrl('images/title.png')?>" style="margin-left: -10px;"/>
			</div>
			<div class="banner-cont offer80">
				<div class="box">
                    <?php if( !empty($info['nums']) ): ?>
					<div class="box-pop"><span id="scrollPage"><?= $info['nums']; ?></span>more software need updates</div>
                    <?php endif; ?>
					<div class="box-gift"></div>
				</div>
				<!-- use class 'soldOut' to control the selling state -->
				<div class="banner-option">
					<div class="state-before">
						<p>Get New IObit Software Updater & 2 PC Utilities with</p>
						<div class="offer-title"></div>
						<div class="banner-line"></div>
						<div class="banner-count">
							<div class="countdown">
							  <div class="scroll-tick"><span>0</span></div>
							  <div class="scroll-tick"><span>0</span></div>
							  <div class="scroll-tick"><span>0</span></div>
							  <div class="scroll-tick"><span>0</span></div>
							</div>
						Places Left Only 
						</div>
						<dl class="price">
							<dt>
								<div class="now"><i>$</i><h3>12<i>.97</i></h3></div>
								<div class="old"><h3>$69.93</h3></div>
							</dt>
							<dd>
								<div class="getItNow">
									<a class="button" onclick="" href="">Buy Now</a>
								</div>
							</dd>
						</dl>
					</div>
					<div class="state-after">
						<p>Oops! No more loyal-user only discount left, but</p>
						<div class="offer-title"></div>
						<div class="banner-line"></div>
						<dl class="price clearfix">
							<dt>
								<div class="now"><i>$</i><h3>14<i>.77</i></h3></div>
								<div class="old"><h3>$69.93</h3></div>
							</dt>
							<dd>
								<div class="getItNow">
									<a class="button" onclick="" href="">Buy Now</a>
								</div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen2">
		<div class="content" style="overflow: hidden;">
			<h3 class="screen-title" style="padding-bottom: 80px;">It Gives You the Best Software Updating Experience</h3>
			<div class="left-pic">
				<span class="suspend01"></span>
				<span class="suspend02"></span>
				<span class="suspend03"></span>
			</div>
			<div class="right-cont">
				<dl>
					<dd><strong>Unlimited</strong>Without quantity limitation, you can update all of your outdated software via our large software database.</dd>
				</dl>
				<dl>
					<dd><strong>Simple</strong>Update software inside IObit Software Updater without being redirected to webpage.</dd>
				</dl>
				<dl>
					<dd><strong>Secure</strong>Automatically update software if there are any updates available to fix security flaws.</dd>
				</dl>
			</div>
		</div>
        <?php if( !empty($info)): ?>
		<div class="content review-wrap ">
			<div class="update-num">Update <span><?= $info['nums']; ?> more</span> software now</div>
			<!-- Swiper -->
			<div class="user-head">
				<div class="swiper-container">
				    <div class="swiper-wrapper">
                        <?php $num = ($info['nums'] > 5) ? '5' : $info['nums'];
                        for($i = 0; $i < $num; $i ++): ?>
				        <div class="swiper-slide">
							<p>software name: <strong> <?= explode(';', $info['names'])[$i]; ?> </strong></p>
							<p>new version: <strong> <?= explode(';', $info['vers'])[$i]; ?> </strong></p>
						</div>
                        <?php endfor; ?>
                        <?php if($info['nums'] > 5): ?>
                            <div class="swiper-slide">
                                <strong> and more... </strong>
                            </div>
                        <?php endif; ?>
				    </div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
        <?php endif; ?>
	</div>
	
	<div class="wrapper gift-message">
		<div class="content">
			<h2>These Utilities also Do Good for Your Computer</h2>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/gift1.png')?>"/>
				</dt>
				<dd>
					<h3>Protected Folder</h3>
					<strong>$0</strong> <del>$19.95</del>
					<p>Protect your personal data <br/>from being stolen.</p>
				</dd>
			</dl>
			<dl class="pf">
				<dt>
				  <img src="<?php echo getStaticUrl('images/gift2.png')?>"/>
				</dt>
				<dd>
					<h3>Smart Defrag</h3>
					<strong>$0</strong> <del>$19.99</del>
					<p>Speed up your PC by optimizing <br/>hard drives.</p>
				</dd>
			</dl>
		</div>
	</div>
	
	<!-- reviews -->
	<div class="review wrapper">
		<h3 class="screen-title" style="padding-top: 30px;">What Others Say?</h3>
	  <div class="content">
	    <div id="dg-container" class="dg-container">
	      <div class="nav">
	        <span class="dg-prev"></span>
	        <span class="dg-next"></span>
	      </div>
	      <div class="content dg-wrapper">
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="softpedia"></dt>
	          <dd>
	            <h2>Media review</h2>
	            <p>"IObit Software Updater was designed to simplify the task of keeping all the applications on your computer up-to-date. It can check for new versions and install them automatically, even without user input. Moreover, it can help you download and install popular applications for various purposes."</p>
	            <cite>softpedia</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="user"></dt>
	          <dd>
	            <h2>User Review</h2>
	            <p>"I installed a free IObit from a friend, and I am very pleased with the speed and simplicity that meets the needs of a beginner in maintaining his personal computer. Thank you for that! I have to inform you that I will buy an IObit license, just to donate an amount to help you continue your work. Thank you!"</p>
	            <cite>Nicolae Mocioc</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="user"></dt>
	          <dd>
	            <h2>User Review</h2>
	            <p>"I love the automatic aspect of the updates. It's fast and efficient, and it also creates a restore point prior to install just in case something goes wrong. I also love that the program downloads the updates directly from the appropriate sites rather than my having to go to each individual site to download an update. I think this is one of your best ideas yet!"</p>
	            <cite>Joshua Irving</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="user"></dt>
	          <dd>
	            <h2>User Review</h2>
	            <p>"It's an great Software update program. It's very easy to use and very simple. This program is very clear, works very smooth and its really fast. Also the design is nice and modern and its good that you seen your old and the new version of the program you wanna update. It's also nice that this program shows you new program tips. "</p>
	            <cite>Nico Bremmer</cite>
	          </dd>
	        </dl>
	        
	      </div>
	    </div>
	  </div>
	</div>
	<!-- end reviews -->
	
	<div class="wrapper screen3">
		<div class="content">
			<h3 class="screen-title" style="font-size: 34px;">PRO Version Does Serves You Well</h3>
			<div class="versionTable">
				<div class="versionDesc">
					<div class="topTitle">Features</div>
					<ul><li>1-click software updating</li></ul>
					<ul><li>Automatically update software</li></ul>
					<ul><li>Autimatically patch vulnerabilities of outdated software</li></ul>
					<ul><li>Never bothered by sponsored ads that displayed on free version</li></ul>
					<ul><li>Auto update to the latest version</li></ul>
					<ul><li>AFree 24/7 technical support</li></ul>
				</div>
				<div class="versionFree">
					<div class="topTitle">Your Current Version</div>
					<ul> <li>2 per day</li> </ul>
					<ul> <li></li> </ul>
					<ul> <li></li> </ul>
					<ul> <li></li> </ul>
					<ul> <li></li> </ul>
					<ul> <li></li> </ul>
				</div>
				<div class="versionPro">
					<div class="topTitle">IObit Software Updater PRO</div>
					<ul><li>no quantity limits
                            <?php if( !empty($info) ): ?>
                            <p style="font-size: 12px; color: #f36201; margin-bottom: -14px;"><?= $info['nums']; ?> need updates</p>
                            <?php endif; ?>
                        </li>
                    </ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<div class="buyPro">
						<div class="optionsLink">
							<a class="button" onclick="" href="">Buy Now</a>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer wrapper">
		<div class="content">
			<div class="service ">
				<dl>
					<dt>Trusted by these medias </dt>
					<dd><img src="<?php echo getStaticUrl('images/medias.png')?>" alt=""/></dd>
				</dl>
				<dl class="right">
					<dt>Support several modes of payment</dt>
					<dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
				</dl>
			</div>
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	
	<div class="float-footer sale80">
		<div class="content" >
			<div class="box"></div>
			<div class="float-title"></div>
			
			<dl class="price">
				
				<dd>
					<div class="getItNow">
						<a class="button" onclick="" href="">Buy Now</a>
					</div>
				</dd>
				<dt>
					<div class="now"><i>$</i><h3>12<i>.97</i></h3></div>
					<div class="old"><h3>$69.93</h3></div>
				</dt>
			</dl>
		</div>
	</div>
<!--	<div class="testChangeState">-->
<!--		<p onclick="javascript:testChangeState(80);">80%</p>-->
<!--		<p onclick="javascript:testChangeState(85);">85%</p>-->
<!--		<p onclick="javascript:testChangeState(7580);">80% soldOut</p>-->
<!--		<p onclick="javascript:testChangeState(7585);">85% soldOut</p>-->
<!--	</div>-->
	

<script>refStr = "<?= $refStr; ?>";</script>
<script>ver = "<?= $ver_arr[0]; ?>";</script>
<script>usr = "<?= $_GET['usr']; ?>";</script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/swiper.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
 <script>
	   var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        slidesPerView: 2,
	        paginationClickable: true,
	        spaceBetween: 60,
			loop : true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			onSlideChangeEnd: function(swiper){
			}
	    });
	   if(usr == 2 || ver < 4)
           saleFlag = 85;
	   else
           saleFlag = 80;
       testChangeState(saleFlag);
  </script>
</body>
</html>