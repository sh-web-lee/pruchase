<?php //  初始化
    error_reporting(0);
    define('IObit', 'IObit');
    if (@!$include) {
        $pResUrl = './';
        $pRootUrl = '../../../../';
    }
    include $pRootUrl . 'include/common.inc.php';
  //if (empty($_GET['ref'])) $_GET['ref'] = '';
    $ref1='2016janasc1pcnero';
    $ref2='2016janasc3pcnero';
    if(in_array($_GET['st'],array('asc_c4','asc_c5','asc_t1','asc_p1','asc_su1','asc_ac1','asc_qs1','asc_qs2','asc_s9','asc_s10','asc_su2','asc_su3','asc_su4','asc_p2','asc_p3','asc_p4','asc_p5','asc_feature','asc_c1','asc_promote','asc_promote1','asc_promote2'))){
        $ref1.='-'.$_GET['st'];
        $ref2.='-'.$_GET['st'];
    }
    if($_GET['ref']=='asc9irsource'){
        $ref1=$ref2='asc9irsource';
    }
    function microtime_float() {
        list($usec, $sec) = explode(' ', microtime());
        return ((float)$usec + (float)$sec);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Save 80% on ASC PRO, speed up, protect and optimize your PC! </title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
      <script src="http://codes.iobit.com/js/mapplication/2.2/mapplication.js" type="text/javascript"></script>
      <script type="text/javascript">
          var lan=MApp(2.2).language.langArr[0];
          var query=MApp(2.2).url.getQuery();
          if(lan=='de'){
              if(query!='') {
                  window.location = "http://purchase.iobit.com/de/asc/index.php?" + query;
              }else{
                  window.location = "http://purchase.iobit.com/de/asc/index.php";
              }
          }
      </script>
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
	</head>
  <body>
  <div class="main">
    <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
    <!-- header -->
    <div class="header">
    	<div class="wrapper">
    		<a class="logo" href="http://www.iobit.com" target="_blank"><img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit"></a>
    		<h1>Congratulations on ASC for Hitting 300 Million Users</h1>
    		<div class="clear"></div>
    		<h2>Celebrate with 80% OFF on ASC PRO & Get an Exclusive Gift Pack for <span>FREE!</span></h2>
    		<div class="panel small">
    			<img src="<?php echo $pResUrl; ?>images/asc-boxshot-big.jpg">
    			<div class="case clearfix">
    				<img src="<?php echo $pResUrl; ?>images/nero-boxshot-bestprice.jpg">
  				  <ul>
  				  	<li>Copy, import, edit, or back up  files</li>
  				  	<li>Burn CDs, DVDs & Blu-ray Discs</li>
  				  	<li>Make keepsakes for the collection</li>
  				  </ul>
    			</div>
    			<div class="price-box">
    			  <dl class="clearfix">
    			  	<dt>ASC PRO <span>Nero Burning ROM 2016</span></dt>
    			  	<dd>1 PC / 1 Year <span>Lifetime</span></dd>
    			  </dl>
    				<dl class="handle">
    					<dt><del>$79.98</del> $19.98</dt>
    					<dd><a class="buybtn" href="http://www.iobit.com/buy.php?product=asc91pcnero&ref=<?php echo $ref1;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016newyear');">Get It Now</a></dd>
    				</dl>
    			</div>
    		</div>
    		<div class="panel big">
          <img src="<?php echo $pResUrl; ?>images/asc-boxshot-extra.jpg">
          <img class="second" src="<?php echo $pResUrl; ?>images/nero-boxshot-freegift.jpg">
          <div class="price-box">
          	<dl class="clearfix">
          		<dt>ASC PRO</dt>
          		<dd><span>2 PCs</span>&nbsp;/ 1 Year</dd>
          	</dl>
          	<ul>
          		<li>ASC PRO Extra 1 PC Supported</li>
          		<li>Nero Burning ROM 2016 Lifetime</li>
          	</ul>
          	<dl class="handle">
              <dt><del>$119.96</del> $23.98</dt>
              <dd><a class="buybtn" href="http://www.iobit.com/buy.php?product=asc93pcnero&ref=<?php echo $ref2;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016newyear');">Get It Now</a></dd>
            </dl>
          </div>
          <span></span>
        </div>
        <div class="countdown">
          <ul class="clearfix">
            <li><span>00</span><sub>h</sub> :</li>
            <li><span>00</span><sub>m</sub> :</li>
            <li><span>00</span><sub>s</sub> :</li>
            <li class="end"><span>000</span> <sup>*</sup></li>
          </ul>
        </div>
    	</div>
    </div>
    <!-- header end -->
    <!-- main -->
    <div class="main">
    	<div class="wrapper">
    		<!-- awards -->
    		<div class="awards">
    			<h2>Trusted and awarded by these medias</h2>
    			<img src="<?php echo $pResUrl; ?>images/awards.jpg">
    		</div>
    		<!-- awards end -->
    		<!-- details -->
    		<div class="details">
    		  <!-- intros-product -->
    			<div class="intros-product clearfix">
    				<h3>Get a faster, cleaner and more secure PC with NEW improvements in ASC9 PRO!</h3>
    				<img src="<?php echo $pResUrl; ?>images/asc-interface.jpg">
    				<ul>
    					<li><img src="<?php echo $pResUrl; ?>images/icon-intro-01.png">Boost Internet up to 300% Faster</li>
    					<li><img src="<?php echo $pResUrl; ?>images/icon-intro-02.png">Double the Speed of Your Slow PC <sup>*</sup></li>
    					<li><img src="<?php echo $pResUrl; ?>images/icon-intro-03.png">Auto RAM Clean & Auto Online Privacy Trace Clean <span>New</span></li>
    					<li><img src="<?php echo $pResUrl; ?>images/icon-intro-04.png">One-click Cleaning and Fixing All Kinds of PC Problems</li>
    					<li class="text-link"><a href="javascript:;" onclick="goTaget($('#compare'),0);">Learn more about PRO edition></a></li>
    				</ul>
    			</div>
    			<!-- intros-product end -->
    			<!-- intros-gift -->
    			<div class="intros-gift">
            <h3>Nero Burning ROM 2016 - "The Standard" for burning anything</h3>
            <img src="<?php echo $pResUrl; ?>images/nero-combination.jpg">
            <ul class="clearfix">
            	<li class="bottom-border right-border"><img src="<?php echo $pResUrl; ?>images/icon-convert.jpg"><span>Convert audio CDs into almost any new format of MP3, AAC, FLAC, APE, etc.</span></li>
            	<li class="bottom-border"><img src="<?php echo $pResUrl; ?>images/icon-copies.jpg"><span>Easily and quickly make copies of your CDs, DVDs, and Blu-ray Discs</span></li>
            	<li class="right-border"><img src="<?php echo $pResUrl; ?>images/icon-cds.jpg"><span>Effectively burn files from smartphones and tablets & music videos directly onto audio CDs</span></li>
            	<li><img src="<?php echo $pResUrl; ?>images/icon-security.jpg"><span>Electronic signature & password protection give extra security of CDs</span></li>
            </ul>
          </div>
          <!-- intros-gift end-->
          <!-- buyarea-mid -->
          <div class="buyarea-mid">
            <div class="panel big">
              <img src="<?php echo $pResUrl; ?>images/asc-boxshot-extra.jpg">
              <img class="second" src="<?php echo $pResUrl; ?>images/nero-boxshot-freegift.jpg">
              <div class="price-box">
                <dl class="clearfix">
                  <dt>ASC PRO</dt>
                  <dd><span>2 PCs</span>&nbsp;/ 1 Year</dd>
                </dl>
                <ul>
                  <li>ASC PRO Extra 1 PC Supported</li>
                  <li>Nero Burning ROM 2016 Lifetime</li>
                </ul>
                <dl class="handle">
                  <dt><del>$119.96</del> $23.98</dt>
                  <dd><a class="buybtn" href="http://www.iobit.com/buy.php?product=asc93pcnero&ref=<?php echo $ref2;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016newyear');">Get It Now</a></dd>
                </dl>
              </div>
              <span></span>
            </div>
          </div>
          <!-- buyarea-mid end-->
    		</div>
    		<!-- details end -->
    		<!-- service -->
    		<div class="service">
    			<dl class="itema">
    				<dt>Accepted Payments</dt>
    				<dd><img src="<?php echo $pResUrl; ?>images/payments.jpg"></dd>
    			</dl>
    			<dl class="itemb">
            <dt>Money Back Guarantee</dt>
            <dd><img src="<?php echo $pResUrl; ?>images/refund.jpg"></dd>
          </dl>
          <dl class="itemc">
            <dt>Secure Payment</dt>
            <dd><img src="<?php echo $pResUrl; ?>images/security.jpg"></dd>
          </dl>
    		</div>
    		<!-- service end -->
    	</div>
    	<!-- review -->
      <div class="review">
        <div class="wrapper">
        	<!-- media-review -->
        	<div class="media_rev clearfix">
            <h3>Media Review</h3>
            <dl>
              <dt><img src="<?php echo $pResUrl; ?>images/cnet.jpg"></dt>
              <dd><h4>"Advanced Systemcare aims to remedy whatever ails your computer."</h4></dd>
              <dd>"There's nothing worse than a computer that is bogged down so much that it impedes your ability to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience." <span>- Cnet</span></dd>
            </dl>
          </div>
        	<!-- media-review end -->
        	<!-- user-review -->
        	<div class="user_rev">
            <div class="inner">
              <div class="reviews active">
                <h3>User Review</h3>
                <h4>"Not only is it a great product, but the support is equally great"</h4>
                <p>"I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."</p>
              </div>
              <div class="reviews">
                <h3>User Review</h3>
                <h4>"Cleaned up Spyware and Malware My antivirus lets slip through"</h4>
                <p>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence."</p>
              </div>
              <div class="reviews">
                <h3>User Review</h3>
                <h4>"My choice is still overwhelmingly Advanced SystemCare v9 Pro"</h4>
                <p>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</p>
              </div>
              <div class="reviews">
                <h3>User Review</h3>
                <h4>"My system has never run better."</h4>
                <p>"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, aping significant value to their products and services for their customers."</p>
              </div>
            </div>
            <ul class="users">
              <li class="active"><img src="<?php echo $pResUrl; ?>images/bruce-ramsay.jpg" alt="">Bruce Ramsay<br>2015</li>
              <li class=""><img src="<?php echo $pResUrl; ?>images/bob-bassett.jpg" alt="">Bob Bassett<br>2014</li>
              <li class=""><img src="<?php echo $pResUrl; ?>images/charles-r-widick.jpg" alt="">Charles R. Widick<br>2015</li>
              <li class=""><img src="<?php echo $pResUrl; ?>images/gordon.jpg" alt="">Gordon Griswold<br>2014</li>
            </ul>
          </div>
        	<!-- user-review end-->
        </div>
      </div>
      <!-- review end -->
      <div class="wrapper">
        <!-- compare-table -->
        <div class="comparison-table" id="compare">
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <thead>
              <tr>
                <th colspan="2" class="vertical-mid">See what PRO edition can do for you:</th>
                <th class="itemb vertical-mid">Advanced SystemCare Free</th>
                <th class="itema"><span>ASC PRO + Nero Burning ROM 2016</span>
                  <a class="tbbuybtn" href="http://www.iobit.com/buy.php?product=asc93pcnero&ref=<?php echo $ref2;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016newyear');">Activate Now</a>
                  <p><em>$23.98 </em><del>$119.96</del> 1 Year / <strong>3 PCs</strong></p></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_01.png"></td>
                <td class="virtue">Basic System Clean, Fix and Optimization</td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_02.png"></td>
                <td class="virtue">Ultimate System Tuneup for Top Performance span</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_03.png"></td>
                <td class="virtue">Up to 300% Internet Speedup with Internet Booster</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_04.png"></td>
                <td class="virtue">Real-time Optimization with Active Optimize</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_05.png"></td>
                <td class="virtue">Deep Windows Registry Clean</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_06.png"></td>
                <td class="virtue">Maximum Hard Drive Performance</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_07.png"></td>
                <td class="virtue">Basic Protection from Security Threats</td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_08.png"></td>
                <td class="virtue">Full Detection against Security Threats</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_09.png"></td>
                <td class="virtue">Auto Online Privacy Trace Clean with Browser Anti-Tracking</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_10.png"></td>
                <td class="virtue"> Auto RAM Clean on Performance Monitor</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_11.png"></td>
                <td class="virtue">Auto Update to the Latest Version</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_12.png"></td>
                <td class="virtue">Runs in the Background - Install and Forget It</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_13.png"></td>
                <td class="virtue">Fantastic New Skins &amp; Themes</td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_14.png"></td>
                <td class="virtue">Free 24/7 Technical Support on demand</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
              </tr>
            </tbody>
            <tfoot>
            <tr>
              <th colspan="2">&nbsp;</th>
              <th class="itemb vertical-mid">Advanced SystemCare Free</th>
              <th class="itema"><span>ASC PRO + Nero Burning ROM 2016</span>
                <a class="tbbuybtn" href="http://www.iobit.com/buy.php?product=asc93pcnero&ref=<?php echo $ref2;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016newyear');">Activate Now</a>
                <p><em>$23.98 </em><del>$119.96</del> 1 Year / <strong>3 PCs</strong></p></th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- compare-table end -->
        <!-- annotation -->
        <dl class="annotation">
          <dt>Note:</dt>
          <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
          <dd>*.Data may vary based on different system or computer.</dd>
        </dl>
        <!-- annotation end -->
      </div>
    </div>
    <!-- main end -->
    <!-- footer -->
    <div class="footer">
      <div class="wrapper">
        <p>Copyright © 2005 - 2016 IObit. All Rights Reserved</p>
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
    <script>
      $(document).ready(function() {
        $(".user_rev .users li").mouseover(function(event) {
          var num = $(this).index();
          $(".users li").eq(num).addClass('active').siblings().removeClass('active');
          $(".reviews").eq(num).addClass('active').siblings().removeClass('active');
        });
          setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);
        cycleCountdown();
      });

      function goTaget(target,yoffset) {
        if(!yoffset) yoffset = 0;
        var Theigth = target.offset().top - yoffset;
        $("html, body").animate({scrollTop: Theigth}, 'slow');
        return false;
      }

      function cycleCountdown(){
        var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
        var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
        d = MApp(2.2).packages.zeroize(datetime[0], 2);
        h = MApp(2.2).packages.zeroize(datetime[1], 2);
        i = MApp(2.2).packages.zeroize(datetime[2], 2);
        s = MApp(2.2).packages.zeroize(datetime[3], 2);
        mi = MApp(2.2).packages.zeroize(datetime[4], 3);
        $(".header .countdown li span").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
        setTimeout('cycleCountdown()', 1);
      }
    </script>
  </div> </body>
</html>