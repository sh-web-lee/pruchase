<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$entryIsPdts = false;

$entryIsPdts = preg_match("/^p_/", $_GET['ref']);

$refStr = empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Save 90% on 5 Best PC Utilities - Easter Sale</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
  <script src="https://cdn.paddle.com/paddle/paddle.js"></script>
  <script type="text/javascript">
	Paddle.Setup({ vendor: 125015 });
  </script>

</head>
<body>
<!-- banner -->
<div class="banner" data="<?php echo $entryIsPdts ?>">
    <div class="wrapper">
        <!-- logo -->
        <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
        <!-- title -->
        <h1>Happy Eastes Sale</h1>
        <h4><span>9</span><span class="egg"></span> % OFF to Get All the Best PC Utilities</h4>
        <!-- content -->
        <div class="salecont">
            <div class="left">
                <img src="<?php echo getStaticUrl('images/banner-l.png')?>">
            </div>
            <div class="saleselbox">
                <h5>Your Easter Basket includes</h5>
                <ul class="clearfix detail">
                    <li>
                        <p>Advanced SystemCare 14 PRO (1 Year / 3 PCs)</p><span class="price fr"><?= $entryIsPdts ? '$49.99' : '$89.97'; ?></span>
                    </li>
                    <li>
                        <p>Driver Booster 8 PRO (1 Year / 3 PCs)</p><span class="price fr">$74.85</span>
                    </li>
                    <li>
                        <p>IObit Uninstaller 10 PRO (1 Year / 3 PCs)</p><span class="price fr"><?= $entryIsPdts ? '$29.99' : '$59.93'; ?></span>
                    </li>
                    <li>
                        <p>IObit Malware Fighter 8 PRO (1 Year / 3 PCs)</p><span class="price fr">$54.95</span>
                    </li>
                    <li>
                        <p>Smart Defrag 6 PRO PRO (1 Year / 3 PCs)</p><span class="price fr">$39.99</span>
                    </li>
                </ul>
                <ul class="clearfix total">
                    <li>
                        <p>Subtotal</p><p class="price fr"><?= $entryIsPdts ? "$249.77" : "$319.69"; ?></p>
                    </li>
                    <li>
                        <p>90% OFF</p><p class="price fr"><?= $entryIsPdts ? "-$219.78" : "-$289.70"; ?></p>
                    </li>
					<li>
                        <p>Total</p><p class="price fr">$<span>29.99</span> </p>
                    </li>
                </ul>
                <div class="purchase">
                    <a href="https://www.iobit.com/buy.php?product=ascdbiuimfsd2999&ref=en-ascdbiuimfsdeaster<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_easter" onclick="ga('send', 'event', 'ascdbiuimfsdbuy', 'buy', 'bundlepurchase-2021easter')" class="purchase-btn" id="bannerPurchaseBtn">Buy Now </a>
					<p class="tips"><span></span>60-day Money Back Guarantee</p>
				</div>
			</div>
		</div>
  </div>
</div>
<!-- end banner -->

<div class="sale-box">
	<h2>Let Easter Bunny Be Your Guide Today</h2>
	<div class="flag">
		<div class="box">
			<img src="<?php echo getStaticUrl('images/rabbit.png')?>">
			<p class="info">
				<img src="<?php echo getStaticUrl('images/80off.png')?>">
				<span>OFF Deals ON</span>
			</p>
		</div>
		<p class="bg"></p>
	</div>
	<div class="section section1">
		<div class="center">
			<h6>Better PC Performance</h6>
			<ul>
				<li>
					<p class="img"><img src="<?php echo getStaticUrl('images/p1.png')?>"></p>
					<p class="price"><span class="now"><span class="mark">$</span>32.92</span><span class="del">$207.81</span></p>
					<a href="https://www.iobit.com/buy.php?product=2020ascdbiu3292&ref=en-ascdbiueaster<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_easter" onclick="ga('send', 'event', 'ascdbiubuy', 'buy', 'bundlepurchase-2021easter')" class="purchase-btn bg-r">Buy Now and Save 80%</a>
				</li>
				<li>
					<p class="img"><img src="<?php echo getStaticUrl('images/p2.png')?>"></p>
					<p class="price"><span class="now"><span class="mark">$</span>24.97</span><span class="del">$164.82</span></p>
					<a href="https://www.iobit.com/buy.php?product=2020ascdb2497&ref=en-ascdbeaster<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_easter" onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'bundlepurchase-2021easter')" class="purchase-btn bg-r">Buy Now and Save 80%</a>
				</li>
			</ul>
			<h6>Faster PC Running</h6>
			<ul>
				<li>
					<p class="img"><img src="<?php echo getStaticUrl('images/p3.png')?>"></p>
					<p class="price"><span class="now"><span class="mark">$</span>26.59</span><span class="del">$172.95</span></p>
					<a href="https://www.iobit.com/buy.php?product=2020asciusd2659&ref=en-asciusdeaster<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_easter" onclick="ga('send', 'event', 'asciusdbuy', 'buy', 'bundlepurchase-2021easter')" class="purchase-btn bg-r">Buy Now and Save 80%</a>
				</li>
				<li>
					<p class="img"><img src="<?php echo getStaticUrl('images/p4.png')?>"></p>
					<p class="price"><span class="now"><span class="mark">$</span>22.95</span><span class="del">$132.96</span></p>
					<a href="https://www.iobit.com/buy.php?product=asciu2295&ref=en-asciubeaster<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_easter" onclick="ga('send', 'event', 'asciubuy', 'buy', 'bundlepurchase-2021easter')" class="purchase-btn bg-r">Buy Now and Save 80%</a>
				</li>
			</ul>
		</div>
		<div class="flag">
			<div class="box">
				<img src="<?php echo getStaticUrl('images/rabbit.png')?>">
				<p class="info">
					<span>Up to</span>
					<img src="<?php echo getStaticUrl('images/75off.png')?>">
					<span>OFF Deals</span>
				</p>
			</div>
			<p class="bg"></p>
		</div>
	</div>
	<div class="section section2">
		<div class="wrapper">
			<ul>
				<li>
					<?php if ($entryIsPdts) : ?>
						<p class="img"><img src="<?php echo getStaticUrl('images/p5-1.png')?>"></p>
					<?php  else : ?>
						<p class="img"><img src="<?php echo getStaticUrl('images/p5.png')?>"></p>
					<?php endif; ?>
					<p class="price"><span class="now"><span class="mark">$</span>19.99</span><span class="del"><?= $entryIsPdts ? '$49.99' : '$89.97'; ?></span></p>
					<a href="https://www.iobit.com/buy.php?product=asc3pc1999&ref=en-asc3pceaster<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_easter" onclick="ga('send', 'event', 'ascbuy', 'buy', 'bundlepurchase-2021easter')" class="purchase-btn bg-o">Buy Now</a>
					<ol>
						<li>200% faster boot time</li>
						<li>300% faster Internet speed</li>
						<li>Real-time protection from threats</li>
						<li>Stop untrusted access to privacy</li>
					</ol>
				</li>
				<li>
					<p class="img"><img src="<?php echo getStaticUrl('images/p6.png')?>"></p>
					<p class="price"><span class="now"><span class="mark">$</span>22.95</span><span class="del">$74.85</span></p>
					<a href="https://www.iobit.com/buy.php?product=db3pc2295&ref=en-db3pceaster<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_easter" onclick="ga('send', 'event', 'dbbuy', 'buy', 'bundlepurchase-2021easter')" class="purchase-btn bg-o">Buy Now</a>
					<ol>
						<li>4,500,000+ driver database</li>
						<li>1-Click to fix device errors</li>
						<li>100% faster download speed</li>
						<li>Update game ready drivers and components</li>
					</ol>
				</li>
				<li>
				<?php if ($entryIsPdts) : ?>
						<p class="img"><img src="<?php echo getStaticUrl('images/p7-1.png')?>"></p>
					<?php else : ?>
						<p class="img"><img src="<?php echo getStaticUrl('images/p7.png')?>"></p>
					<?php endif; ?>
					<p class="price"><span class="now"><span class="mark">$</span>16.77</span><span class="del"><?= $entryIsPdts ? '$29.99' : '$59.93'; ?></span></p>
					<a href="https://www.iobit.com/buy.php?product=iu3pc1677&ref=en-iu3pceaster<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_easter" onclick="ga('send', 'event', 'iubuy', 'buy', 'bundlepurchase-2021easter')" class="purchase-btn bg-o">Buy Now</a>
					<ol>
						<li>Force uninstall of stubborn apps</li>
						<li>Uninstall of bundled programs</li>
						<li>In-depth cleaning of leftovers</li>
						<li>1-click update of outdated program</li>
					</ol>
				</li>
			</ul>
			<ul>
				<li>
					<p class="img"><img src="<?php echo getStaticUrl('images/p8.png')?>"></p>
					<p class="price"><span class="now"><span class="mark">$</span>23.99</span><span class="del">$54.95</span></p>
					<a href="https://www.iobit.com/buy.php?product=imf3pc2399&ref=en-imf3pceaster<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_easter" onclick="ga('send', 'event', 'imfbuy', 'buy', 'bundlepurchase-2021easter')" class="purchase-btn bg-o">Buy Now</a>
					<ol>
						<li>Accurate detection with Bitdefender engine</li>
						<li>Use password to protect personal data</li>
						<li>209 million malware database</li>
						<li>Stop ransomware attempting to encrypt important files</li>
					</ol>
				</li>
				<li>
					<p class="img"><img src="<?php echo getStaticUrl('images/p9.png')?>"></p>
					<p class="price"><span class="now"><span class="mark">$</span>12.97</span><span class="del">$29.99</span></p>
					<a href="https://www.iobit.com/buy.php?product=isu3pc1297&ref=en-isu3pceaster<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_easter" onclick="ga('send', 'event', 'isubuy', 'buy', 'bundlepurchase-2021easter')" class="purchase-btn bg-o">Buy Now</a>
					<ol>
						<li>1-click update of outdated software</li>
						<li>Auto removal of useless setup files</li>
						<li>Auto update on a schedule</li>
						<li>Update outdated software to avoid security holes</li>
					</ol>
				</li>
				<li>
					<p class="img"><img src="<?php echo getStaticUrl('images/p10.png')?>"></p>
					<p class="price"><span class="now"><span class="mark">$</span>19.99</span><span class="del">$39.99</span></p>
					<a href="#!" onclick="ga('send', 'event', 'sdbuy', 'buy', 'bundlepurchase-2021easter')" data-product="663111" data-theme="none" class="purchase-btn paddle_button bg-o">Buy Now</a>
					<ol>
						<li>Up to 200% faster file access</li>
						<li>Auto and smart hard disk defrag</li>
						<li>Quicker PC startup</li>
						<li>Better, faster and more stable data transfer</li>
					</ol>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="snow-bg">
	<div class="award wrapper">
		<h2>World-wide Awards</h2>
		<img src="<?php echo getStaticUrl('images/award.png')?>">
	</div>
</div>


<div class="review wrapper">
	<div class="content">
    <span class="next"></span>
    <span class="prev"></span>
		<div class="message">
			<div class="roll">
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""></dt>
					<dd>
						<h3>Media Review</h3>
						<p>
							Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience.
						</p>
						<h4>Cnet</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/brendon-rourke.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>
							I have been using ASC for years now. I have recently tested the latest version V14. And it is by far the most comprehensive version to date. IObit continue to improve their Products and Technology. With more options and easier navigation that help find solutions. I don't need to shop elsewhere.
						</p>
						<h4>Brendon O'Rourke</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>
							First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM, i was able to play new game titles without having to shutdown any background process. I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product.
						</p>
						<h4>Dunston Diaz</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>
							I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.
						</p>
						<h4>Gelu Batir</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt=""></dt>
					<dd>
						<h3>User Review</h3>
						<p>
							I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed.
						</p>
						<h4>Samrat Kumar Chakrabortty</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt=""></dt>
					<dd>
						<h3>Media Review</h3>
						<p>
							IObit Software Updater was designed to simplify the task of keeping all the applications on your computer up-to-date. It can check for new versions and install them automatically, even without user input. Moreover, it can help you download and install popular applications for various purposes.
						</p>
						<h4>Softpedia</h4>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/hans.png')?>" alt=""></dt>
					<dd>
						<h3>Media Review</h3>
						<p>
							I am a user of Smart defrag for many years. Since using this fantastic software my desktop and my laptop are fast and save. Together with advance system care ultimate you have a complete tool for keeping you system up to date, fast and secure.Using it every day without need to wait (pc closes itself) you keep your system in top condition even if you have no technical background!
						</p>
						<h4>Hans</h4>
					</dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<!-- service -->
<div class="service">
  <div class="wrapper">
	  <div class="clearfix">
		  <dl class="first">
        <dt><img src="<?= getStaticUrl('images/moneyback.png'); ?>"></dt>
        <dd>
          <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
          <p>We're confident that activating PRO edition will maximize your <br> PC performance and security for an affordable price!</p>
        </dd>
		  </dl>
		  <dl class="last">
        <dt><h3>We accept</h3></dt>
        <dd><img src="<?= getStaticUrl('images/payment.png'); ?>"></dd>
		  </dl>
	  </div>
    <div class="note">
		<p>Note:</p>
		<p>*.Data may vary based on different system or computer.</p>
		<p>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</p>
	</div>
	<div class="copyright">Copyright ©2005 - <?= date('Y'); ?> IObit. All Rights Reserved</div>
  </div>
</div>

<div class="go-top" id="goTop">
	<img src="<?= getStaticUrl('images/rabbit2.png'); ?>">
	<div class="arr">
		<img src="<?= getStaticUrl('images/arrow-up.png'); ?>">
	</div>
</div>
<!-- end service -->
<script>refStr = "<?= $refStr; ?>//";</script>
<!--//<script src="--><?php ////echo getStaticUrl('script/jquery.animateNumber.min.js')?><!--<!--"></script>-->-->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>