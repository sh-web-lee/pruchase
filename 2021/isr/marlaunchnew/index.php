<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
if (!empty($_GET['AFF'])) $_GET['aff'] = $_GET['AFF'];

$refStr = empty($_GET['to']) ? '' : '-'.$_GET['to'];
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];

$buyUrl = 'https://www.iobit.com/buy.php?product=isr1y2999b&ref=en-isr1y1pcnew'.$refStr.'&aff='.$_GET['aff'].'&refs=purchase_isr';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Upgrade to iFun Screen Recorder PRO with 43% OFF to recorder your screen and webcam smoothly - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600&family=Spartan:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/swiper.min.css')?>">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
    <script>
        function pageDivide(cName,devicePage){
            var queryStr = <?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
            var pageAb = cGet(cName);
            if (pageAb == 'tob') {
                window.location.replace(devicePage + queryStr);
            } else {
                if (pageAb == null) {
                    randNum = Math.random();
                    if (randNum > 0.5) {
                        window.location.replace(devicePage + queryStr);
                        cSet(cName, 'tob');
                    } else {
                        cSet(cName, 'toa');
                    }
                }
            }
        }
        pageDivide('mspecial2021', 'special.php')
        function cSet(name, value) {
            var Days = 2;
            var exp = new Date();
            exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
            document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
        }
        function cGet(name) {
            var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
            if (arr = document.cookie.match(reg))
                return unescape(arr[2]);
            else
                return null;
        }
    </script>
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
	<div class="banner-wrap">
		<div class="banner">
			<a class="logo" href="https://recorder.iobit.com/" target="_blank"></a>
			<div class="banner-title">
				<img src="<?php echo getStaticUrl('images/title.png')?>"/>
				<div class="subtitle">
					<p>Record Screen More Smoothly</p>
					<p>Better to Create HD & 4K Video</p>
					<p>Easily to Add Personal Watermark</p>
				</div>
			</div>
			<div class="banner-cont">
				<div class="banner-option">
					<ul>
						<li class="fl">
							<div class="saveMark">Save<span>30%</span></div>
							<p class="offerTitle">Annual Plan</p>
							<dl class="price">
								<dd>
									<div class="now">
										<span>$</span>
										<h3>29<i>.99</i></h3>
									</div>
									<div class="old">$42.99</div>
								</dd>
							</dl>
							<a class="button" onclick="ga('send', 'event', 'isr1ybuy', 'buy', 'isrpurchasenew')"
                               href="<?= $buyUrl; ?>">Buy Now<i class="btn-arrow"></i></a>
							<div class="plan-list">
								<div class="plan-item">
									<i class="icon"></i>
									<span class="text">One-year fee for 1 PC</span>
								</div>
								<div class="plan-item">
									<i class="icon"></i>
									<span class="text">Record HD videos more smoothly</span>
								</div>
								<div class="plan-item">
									<i class="icon"></i>
									<span class="text">Remove & customize watermark</span>
								</div>
								<div class="plan-item">
									<i class="icon"></i>
									<span class="text">Save extra audio while recording</span>
								</div>
								<div class="plan-item">
									<i class="icon"></i>
									<span class="text">Create a scheduled recording task</span>
								</div>
							</div>
						</li>
						<li class="fr active">
							<div class="saveMark saveMark02">Save<span>43%</span></div>
							<p class="offerTitle">Lifetime Plan</p>
							<dl class="price">
								<dd>
									<div class="now">
										<span>$</span>
										<h3>39<i>.99</i></h3>
									</div>
									<div class="old">$69.99</div>
								</dd>
							</dl>
							<a class="button" onclick="ga('send', 'event', 'isrltbuy', 'buy', 'isrpurchasenew')"
                               href="https://www.iobit.com/buy.php?product=isrlifetime&ref=en-isrlt1pcnew<?= $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_isr">Buy Now<i class="btn-arrow"></i></a>
							<div class="plan-list">
								<div class="plan-item">
									<i class="icon"></i>
									<span class="text">One-time fee for 1 PC</span>
								</div>
								<div class="plan-item">
									<i class="icon"></i>
									<span class="text">Lifetime guarantee</span>
									<div class="tip">
										<div class="tip-text">Lifetime use of v1.x versions</div>
									</div>
								</div>
								<div class="plan-item">
									<i class="icon"></i>
									<span class="text">Record HD videos more smoothly</span>
								</div>
								<div class="plan-item">
									<i class="icon"></i>
									<span class="text">Remove & customize watermark</span>
								</div>
								<div class="plan-item">
									<i class="icon"></i>
									<span class="text">Save extra audio while recording</span>
								</div>
								<div class="plan-item">
									<i class="icon"></i>
									<span class="text">Create a scheduled recording task</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="mouse"></div>
	<div class="wrapper screen2">
		<div class="content" style="overflow: hidden;">
			<h3 class="screen-title" >Upgrade to PRO, You Can Enjoy More</h3>
			<div class="screen2-cont" style="margin-top: 130px;" >
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/cont-img1.png')?>" />
				</div>
				<div class="cont-text fr">
					<h3>Better Video Recording</h3>
					<span>iFun Screen Recorder PRO is the ideal fit for recording your <br />screen and webcam.</span>
					<p>Record smoothly with advanced hardware acceleration.</p>
					<p>Save an extra audio file while recording for your specific needs<i></i></p>
					<p>Automatically start and end recording at a scheduled time<i></i></p>
					<div class="icon-layer top20">
						<ul>
							<li><i class="persent"></i>Smoother Recording</li>
							<li><i class="persent" style="background-position: -178px 0px;"></i>Extra Audio File</li>
							<li><i class="persent" style="background-position: -350px 0px;"></i>Recording Schedule</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<img src="<?php echo getStaticUrl('images/cont-img2.png')?>" />
				</div>
				<div class="cont-text cont2 fl">
					<h3><i class="rec"></i>Remove & Customize Watermark</h3>
					<span>Your personal watermark would keep your video content on-brand <br />and help your content from being stolen.</span>
					<p>Remove default iFun Screen Recorder watermark.</p>
					<p>Add your own watermark on video for brand identity.</p>
					<div class="icon-layer">
						<ul>
							<li><i class="icon1"></i>No Watermark</li>
							<li style="margin-left: 30px; width: 160px;"><i class="icon2"></i>Add Personal Watermark</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="screen2-cont" style="margin-bottom: 20px;">
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/cont-img3.png')?>" />
				</div>
				<div class="cont-text cont3 fr">
					<h3><i class="search"></i>Get Free Upgrades</h3>
					<span>Upgrade to iFun Screen Recorder PRO, you can enjoy all of the <br />latest features during valid period.</span>
					<p>Automatically update to the latest version without disturbing.</p>
					<p>Get all the updates for free.</p>
					<div class="icon-layer">
						<ul>
							<li><i class="icon3"></i>Auto Update</li>
							<li><i class="icon4"></i>Free Update</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="mouse"></div>
	<div class="wrapper screen3" >
		<div class="content">
			<div class="review-wrap">
				<!-- Swiper -->
				<div class="user-head">
					<div class="swiper-container">
					    <div class="swiper-wrapper">
					        <div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user4.png')?>" />
							</div>
					    </div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				<div class="user-avator">
					<h3 class="screen-title" style="text-align: left; font-size: 48px; font-family: 'Spartan', sans-serif;">What Others Say</h3>
					<font style="color: #4b577d;">Users are satisfied using our screen recorder, and want to share their experience to you.</font>
					<ul>
						<li style="display: block;">
							Well, so far so great. iFun Screen Recorder has really been an all-in-one tool that is easy to use. It solves my problem of how to record screen on Windows. With ISR, 
							I can take screenshots while HD recording and edit diverse captions for the video after recording. Then I send it to my Instagram and catch massive attention. 
							This powerful screen recorder has helped drive my business forward. BTW, it’s totally free.
							<p>Elsie Weston</p>
						</li>
						<li>
							I came across this free screen recorder and became a fan of it for its simple editing functions. Because I like to record the operation process to help people 
							solve computer problems, and this recording software allows me to record with audio so that I can directly upload the edited video to YouTube after recording.
							 It combines recording and editing, which is very convenient for bloggers who want to share tutorials video just like me!
							<p>Enrico Valencia</p>
						</li>
						<li>
							As a secretary, I need to use screen recording software a lot. It is hard to find an ideal free screen recorder for me, but iFun Screen Recorder happens to be such a
							 perfect tool for video-teleconference records and helps me a lot! I could record the HD screen with it and convert the video into different formats. I highly recommend ISR, and it deserves to be owned!
							<p>Marielle Irvine</p>
						</li>
						<li>
							Hi, there! Your fantastic free screen recorder surprises me. I can record all these precious and wonderful moments with iFun Screen Recorder, especially for some live videos. 
							The videos I record with ISR are extremely high-quality. I can save and share them with my friends. I was not sure of its services but the results I have got are far more amazing. It’s brilliant!
							<p>Robbins Hilton</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper screen4">
		<div class="content">
			<h3 class="screen-title">Choose Your Plan</h3>
			<div class="versionTable">
				<div class="versionDesc">
					<ul><li>PRO Period</li></ul>
					<!-- <ul><li>Monthly Fee</li></ul> -->
					<ul><li>New-launch Discount</li></ul>
					<ul><li>Basic screen recording</li></ul>
					<ul><li>Smoother recording with GPU acceleration</li></ul>
					<ul><li>High-quality games recording with higher FPS</li></ul>
					<ul><li>Save an extra audio file while recording<i></i></li></ul>
					<ul><li>Schedule video recording task with ease<i></i></li></ul>
					<ul><li>Remove default watermark on videos</li></ul>
					<ul><li>Personalized watermark on videos</li></ul>
					<ul><li>Auto update for the latest features when it's avaliable</li></ul>
					<ul><li>Premium 24/7 technical support on demand</li></ul>
				</div>
				<div class="versionFree">
					<div class="topTitle">Your Current Version</div>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<!-- <ul> <li><i class="tableIcon gray-no"></i></li> </ul> -->
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
				</div>
				<div class="versionMonth">
					<div class="topTitle">Annual Plan
						<a class="button-month" href="<?= $buyUrl; ?>" onclick="ga('send', 'event', 'isr1ybuy', 'buy', 'isrpurchasenew')">Buy Now -<span style="font-size: 18px;">$29.99</span></a>
					</div>
					<ul> <li>1 Year</li> </ul>
					<!-- <ul> <li><span style="font-size: 18px;">$7.99</span></li> </ul> -->
					<ul> <li>Save 30%</li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
				</div>
				<div class="versionPro">
					<div class="topTitle">Lifetime Plan
						<a class="button-year" href="https://www.iobit.com/buy.php?product=isrlifetime&ref=en-isrlt1pcnew<?= $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_isr" onclick="ga('send', 'event', 'isrltbuy', 'buy', 'isrpurchasenew')"><div>Buy Now -<span style="font-size: 18px;">$39.99</span></div></a>
					</div>
					<ul><li>Lifetime</li></ul>
					<!-- <ul> <li><span style="font-size: 18px;">$2.50</span></li> </ul> -->
					<ul><li>Save 43%</li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen5">
		<div class="content" >
			<h3 class="screen-title">World-wide Awards</h3>
			<!-- <p style="font-size: 22px; text-align: center; margin-top: 10px;">Los Números Nunca Mienten</p> -->
		</div>
	</div>

	<div class="wrapper footer">
		<div class="content">
			<div class="service clearfix">
			  <dl class="fl">
			    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
			    <dd>
			      <h3>Try it RISK FREE - with our up to 30-day Money Back Guarantee</h3>
			      <p>
			        We’re confident that activating PRO edition will give you better recording experience for affordable price!
			      </p>
			    </dd>
			  </dl>
			  <dl class="fr">
			    <dt><h3>We accept</h3></dt>
			    <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
			  </dl>
			</div>
			<p style="text-align: center; font-size: 14px; margin-top: 30px; color: #48516a;">Copyright © 2005 - 2021 IObit. All Rights Reserved</p>
		</div>
	</div>

<script>refStr = "<?= $refStr; ?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo getStaticUrl('script/swiper.min.js')?>"></script>

 <script>
   var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		slidesPerView: 1,
		paginationClickable: true,
		spaceBetween: 150,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		effect : 'flip',
		onSlideChangeEnd: function(swiper){
			$('.user-avator ul li').hide()
			$('.user-avator ul li').eq(swiper.realIndex).show()
		}
	});
  </script>
</body>
</html>