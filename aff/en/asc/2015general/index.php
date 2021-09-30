<?php
//	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$buyUrl="http://www.iobit.com/buy.php?product=affasc15general&ref=affasc15general&aff=".$_GET['aff'];
if($_GET['ref']=='cb'){
    $buyUrl='https://www.cleverbridge.com/289/?scope=checkout&cart=165951&pricerule=asc1999&x-aff=asc9general';
}
function microtime_float(){
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float()*1000/20000)-69057026;

$packsNum = ceil(microtime_float()*2000/20000);
$packsNum = 360-($packsNum%360);
if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Special Offer for Advanced SystemCare 9, and provide you a worry-free fast PC!</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
    <?php echo $gJavascript['public'];?>
    <?php echo $gJavascript['head']; ?>
  </head>
  <body>
  <div class="main">
    <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

    <!-- header -->
    <div class="header">
    	<div class="wrapper clearfix">
        <a class="logo" href="http://www.iobit.com" target="_blank"><img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit"></a>
        <div class="clear"></div>
        <img src="<?php echo $pResUrl; ?>images/asc-boxshot-big-header.jpg">
        <div class="buy-box">
          <h1>Advanced SystemCare 9 <strong>PRO</strong></h1>
          <img src="<?php echo $pResUrl; ?>images/asc-boxshot-small-header.png">
          <dl>
            <dd>One-click solution to speed up startup<br> Internet connection and the whole PC powerfully</dd>
            <dt><a class="buybtn" href="<?php echo $buyUrl;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2015general');"><strong>Buy Now</strong><span>only <strong>$19.99</strong> for <strong>3 PCs</strong> <del>$49.99</del></span></a></dt>
            <dd><span>Fully Supports Win10/Win8/Win7/Vista/XP</span></dd>
          </dl>
        </div>
    	</div>
    </div>
    <!-- header end -->
    <!-- main -->
    <div class="main">
      <div class="wrapper">
        <!-- service -->
        <div class="service clearfix">
          <dl>
          	<dt>Accepted Payments  </dt>
          	<dd><img src="<?php echo $pResUrl; ?>images/payments.jpg"></dd>
          </dl>
          <dl>
          	<dt>Money Back Guarantee</dt>
          	<dd><img src="<?php echo $pResUrl; ?>images/60daysback.jpg"></dd>
          </dl>
          <dl class="itema">
          	<dt>Secure Payment</dt>
          	<dd><img src="<?php echo $pResUrl; ?>images/verify-security.jpg"></dd>
          </dl>
        </div>
        <!-- service end -->
        <!-- intro -->
        <div class="intro">
          <h2>What does Advanced SystemCare 9 PRO do?</h2>
          <dl class="clearfix">
            <dt><img src="<?php echo $pResUrl; ?>images/icon-intro-speed.png"></dt>
            <dd><strong>Up to 300% Faster PC</strong></dd>
            <dd>Advanced SystemCare 9 PRO will clean up junk files, solve all kinds of performance issues that slow down your PC and remove useless applications completely, to make your PC always in top performance.</dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo $pResUrl; ?>images/icon-intro-protect.png"></dt>
            <dd><strong>Keep Your Privacy Confidential </strong></dd>
            <dd>Advanced SystemCare 9 PRO will detect and remove spyware, adware and other malware which may track your online activities and steal your personal information. It also provides specialized privacy protection for Windows 10 Users.</dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo $pResUrl; ?>images/icon-intro-clean.png"></dt>
            <dd><strong>No Errors Any More</strong></dd>
            <dd>Advanced SystemCare 9 PRO will repair all the registry errors by deep clean and defrag, which frees you from the annoying error pop-ups.</dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo $pResUrl; ?>images/icon-intro-installation.png"></dt>
            <dd><strong>Install and Forget it</strong></dd>
            <dd>Advanced SystemCare 9 PRO will run in the background without interrupting your work and game playing, and take care of your PC automatically. </dd>
          </dl>
        </div>
        <!-- intro end -->
        <!-- buy-area -->
        <div class="buy-area clearfix">
          <h2>How to restore a clean and fast PC? <span>Advanced SystemCare 9 PRO will help you get it done in one-click!</span></h2>
          <a class="buybtn" href="<?php echo $buyUrl;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2015general');"><strong>Buy Now</strong><span>only <strong>$19.99</strong> for <strong>3 PCs</strong> <del>$49.99</del></span></a>
        </div>
        <!-- buy-area end -->
        <!-- awards -->
        <div class="awards">
          <h2>Product Awards</h2>
          <img src="<?php echo $pResUrl; ?>images/awards.jpg">
        </div>
        <!-- awards end -->
      </div>
      <!-- review -->
      <div class="review clearfix">
        <div class="wrapper">
          <div class="media_rev">
            <h3>Media Review</h3>
            <dl>
              <dt><img src="<?php echo $pResUrl; ?>images/cnet.jpg" alt=""></dt>
              <dd>"There's nothing worse than a computer that is bogged down so much that it impedes your ability to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience." <span>- Cnet</span></dd>
            </dl>
          </div>
          <div class="user_rev" id="user_rev">
            <div class="content">
              <h3>User Review</h3>
              <dl class="show">
                <dd><h4>"I'm really happy I upgraded, it puts my mind at ease and does all the work"</h4></dd>
                <dd>"The Advanced-System Care Pro keeps my computer well cleaned. Not only that, their customer service is excellent. They persevered with courteous help until I was able to solve my problem of sending a gift of this ASC service to another person. This is evidence of a good company."</dd>
              </dl>
              <dl class="hidden">
                <dd><h4>"Cleaned up Spyware and Malware My antivirus lets slip through"</h4></dd>
                <dd>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence."</dd>
              </dl>
              <dl class="hidden">
                <dd><h4>"It takes care of everything in the background"</h4></dd>
                <dd>"Advanced System Care Pro has proved to be a trusted tool, automatically improving performance and security in a simple interface and with a great support. I recommend it to all my Family and friends."</dd>
              </dl>
              <dl class="hidden">
                <dd><h4>My system has never run better.</h4></dd>
                <dd>In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers.</dd>
              </dl>
            </div>
            <ul class="users">
              <li class=""><img src="<?php echo $pResUrl; ?>images/almir.jpg" alt="">Almir Romboli Tavares<br>2014</li>
              <li class=""><img src="<?php echo $pResUrl; ?>images/gordon.jpg" alt="">Gordon Griswold<br>2014</li>
              <li class=""><img src="<?php echo $pResUrl; ?>images/bob.jpg" alt="">Bob Bassett<br>2014</li>
              <li class="current"><img src="<?php echo $pResUrl; ?>images/jane_mcclain.jpg" alt="">Jane McClain<br>2014</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- review end -->
      <div class="wrapper">
        <!-- info-content -->
        <div class="info-content">
          <dl class="itema">
          	<dt>Problem</dt>
          	<dd>
							When you buy a new PC, you needn’t worry about it for only a couple pieces of software running on your PC. After a period of time using, your PC becomes much slower because of the accumulated junk files, registry errors, disk fragments, malicious software, useless software running in the background, etc. However, to monitor and maintain your PC isn’t an easy technical task even for the most experienced users. To tackle all these problems manually seems like a challenge for most of people.
						</dd>
          </dl>
          <dl class="itemb">
          	<dt>Solution</dt>
          	<dd>
							Advanced SystemCare 9 PRO is equipped with a comprehensive
              performance solution, which makes PC maintenance become
							effortless. Without complicated operation, Advanced SystemCare
							9 PRO can help you to make your PC more efficient and pinpoint
							the best solutions for PC optimization. What's more, Advanced
							SystemCare 9 PRO will keep monitoring your PC status and
							repairing it automatically.
						</dd>
						<dd><a class="buybtn" href="<?php echo $buyUrl;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2015general');"><strong>Buy Now</strong><span>only <strong>$19.99</strong> for <strong>3 PCs</strong> <del>$49.99</del></span></a></dd>
						<dd><span>Over 250,000,000 Users' Choice</span></dd>
          </dl>
        </div>
        <!-- info-content end -->
      </div>
    </div>
    <!-- main end -->
    <!-- footer -->
    <div class="footer">
      <div class="wrapper">
        <p>Copyright © 2005 - 2015 IObit. All Rights Reserved</p>
      </div>
    </div>
    <!-- footer end -->
    <div class="pop-up">
        <div class="pop-main">
            <div class="pop-box">
                <h2>Note:</h2>
                <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
                <p>You will be redirected to the latest IObit promotion page automatically.</p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
      $(function () {
        $("#user_rev .users li").mouseover(function(event) {
          var num = $(this).index();
          $("#user_rev .users li").each(function(index, el) {
            $(this).removeClass('current');
          });
          $(this).addClass('current');
          $("#user_rev dl").each(function(index, el) {
            $(this).removeClass('show').addClass('hidden')
          });
          $("#user_rev dl").eq(num).removeClass('hidden').addClass('show');
        });
        setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);
      });
    </script>
  </div> </body>
</html>
