<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  if (empty($_GET['ref'])) $_GET['ref'] = '2016freetrial30';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Enjoy 30 Days FREE of the Advanced SystemCare 9 PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- header -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="panel clearfix">
        <img class="fl" src="<?php echo $pResUrl; ?>images/header_asc.png" alt="Advanced System Care">
        <div class="fl">
          <dl class="free clearfix">
            <dt><img src="<?php echo $pResUrl; ?>images/header_pay.png"></dt>
            <dd class="first">
              <i class="all-icons mark">√</i>Try the best PC TuneUp for FREE  
            </dd>
            <dd>
              <i class="all-icons mark">√</i>Enjoy up to 300% faster PC 
            </dd>
            <dd>
              <i class="all-icons mark">√</i>Opt out anytime during the 30-day trial    
            </dd>
          </dl>
          <dl class="offer">
            <dt class="offer-dt">
              <span>Now <strong>$0</strong> Original: <del>$89.97</del></span>
              <span>1 year Subscription/ 3PCs</span>
            </dt>
            <dd class="clearfix">
              <a class="buybtn" href="http://www.iobit.com/buy.php?product=asc9preorder&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', '2016freetrial30');">
                Get Your 30-day Free Trial 
              </a>
              <p><i class="all-icons">people</i>4599062 people tried!</p>
            </dd>
          </dl>
        </div>
      </div>
      <dl class="terms">
        <dt>Promotion terms:</dt>
        <dd>
          Nothing will be billed at this time. At the end of the 30-day free trial period, your credit card or PayPal account will be charged $19.99 automatically. This 80% discount is bonus for customers who choose 30-day trial only!
        </dd>
      </dl>
      <!-- time -->
      <ul id="countdown" class="countdown">
        <li>00</li>
        <li>00</li>
        <li>00</li>
        <li>000</li>
      </ul>
    </div>
  </div>

  <div class="wrapper">
    <!-- awards -->
    <div class="awards">
      <h2>Company Awards</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png">
    </div>
    <!-- feature -->
    <div class="feature clearfix">
      <h2>Get a cleaner, faster and more secured PC with Advanced SystemCare 9 PRO</h2>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/feature_icon1.png"></dt>
        <dd><h3>Up to 300% Faster PC</h3></dd>
        <dd>
          One-click to deep clean & optimize Internet, system and Hard Drive for ultimate PC performance
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/feature_icon2.png"></dt>
        <dd><h3>Smoother & Safer Browsing</h3></dd>
        <dd>
          Enjoy better surfing experience with newly added DNS Protect and enhanced Browser Anti-Tracking. 
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/feature_icon3.png"></dt>
        <dd><h3>Enhanced PC Protection</h3></dd>
        <dd>
          Protect your PC against spyware, adware and other malware in real-time.
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/feature_icon4.png"></dt>
        <dd><h3>Auto RAM Clean</h3></dd>
        <dd>
          Free up RAM automatically to keep your PC always in best performance.
        </dd>
      </dl>
    </div>
    <!-- center-buy -->
    <div class="center-buy">
      <dl>
        <dt class="offer-dt">
          <span>Now <strong>$0</strong> Original: <del>$89.97</del></span>
        </dt>
        <dd>
          <a class="buybtn" href="http://www.iobit.com/buy.php?product=asc9preorder&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', '2016freetrial30');">
            Get Your 30-day Free Trial 
          </a>
        </dd>
      </dl>
      <ul class="clearfix">
        <li>
          <i>1、</i> <span>Trusted by 250 Million Users</span>
        </li>
        <li>
          <i class="student">2、</i> <span>Recommended by Experts</span>
        </li>
        <li>
          <i class="sale">3、</i> <span>Enjoy exclusive 80% off</span>
        </li>
      </ul>
    </div>
    <!-- payment -->
    <div class="payment clearfix">
      <dl>
        <dt>Accepted Payments</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/payments.jpg"></dd>
      </dl>
      <dl>
        <dt>Money Back Guarantee</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/moneyback.jpg"></dd>
      </dl>
      <dl class="last">
        <dt>Support Service</dt>
        <dd>
          <span>Free 24/7 Technical Support</span>
          <span class="live">Live Chat Service</span>
        </dd>
      </dl>
    </div>
  </div>

  <!-- review -->
  <div class="review">
    <div class="wrapper">
      <!-- media-rev -->
      <div class="media-rev clearfix">
        <h3>Media Review</h3>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
          <dd>
            "There's nothing worse than a computer that is bogged down so much that it impedes your ability to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience." 
          </dd>
        </dl>
      </div>
      <!-- user-rev -->
      <div class="user-rev" id="user_rev">
        <div class="content">
          <h3>User Review</h3>
          <dl class="show">
            <dd><h4>"I'm really happy I upgraded, it puts my mind at ease and does all the work"</h4></dd>
            <dd>
              "The Advanced-System Care Pro keeps my computer well cleaned. Not only that, their customer service is excellent. They persevered with courteous help until I was able to solve my problem of sending a gift of this ASC service to another person. This is evidence of a good company."
            </dd>
          </dl>
          <dl>
            <dd><h4>"Cleaned up Spyware and Malware My antivirus lets slip through"</h4></dd>
            <dd>
              "We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence."
            </dd>
          </dl>
          <dl>
            <dd><h4>"It takes care of everything in the background"</h4></dd>
            <dd>
              "Advanced System Care Pro has proved to be a trusted tool, automatically improving performance and security in a simple interface and with a great support. I recommend it to all my Family and friends."
            </dd>
          </dl>
          <dl>
            <dd><h4>My system has never run better.</h4></dd>
            <dd>
              In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers.
            </dd>
          </dl>
        </div>
        <ul class="users">
          <li class="current">
            <img src="<?php echo $pResUrl; ?>images/jane_mcclain.jpg" alt="Jane McClain">
            <span>Jane McClain</span>
            <span>2015</span>
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/bob.jpg" alt="Bob Bassett">
            <span>Bob Bassett</span>
            <span>2015</span>
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/almir.jpg" alt="Almir Romboli Tavares">
            <span>Almir Romboli Tavares</span>
            <span>2015</span>
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/gordon.jpg" alt="Gordon Griswold">
            <span>Gordon Griswold</span>
            <span>2015</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="wrapper">
    <!-- footer-buy -->
    <dl class="footer-buy clearfix">
      <dt><img class="fl" src="<?php echo $pResUrl; ?>images/footer_asc.png" alt="Advanced System Care"></dt>
      <dd class="offer">
        <span class="first">
          <i class="all-icons mark">√</i>Speed up your PC like a new one 
        </span>
        <span>
          <i class="all-icons mark">√</i>Secure your privacy in real-time
        </span>
      </dd>
      <dd>
        <a class="buybtn" href="http://www.iobit.com/buy.php?product=asc9preorder&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', '2016freetrial30');">
          Get Your 30-day Free Trial 
        </a>
      </dd>
    </dl>
    <!-- annotation -->
    <dl class="annotation">
      <dt>Note: </dt>
      <dd>
        *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
      </dd>
      <dd>*.Data may vary based on different system or computer.</dd>
    </dl>
    <!-- footer -->
    <div class="footer">Copyright © 2005 - 2016 IObit. All Rights Reserved</div>
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
  <script>    
    //userreview 
    $(".users li").mouseover(function(event) {
      var num = $(this).index();
      $(".users li").eq(num).addClass('current').siblings().removeClass('current');
      $(".user-rev .content>dl").eq(num).addClass('show').siblings().removeClass('show');
    });

    //count down
    function cycleCountdown(){
      var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
      var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
      d = MApp(2.2).packages.zeroize(datetime[0], 2);
      h = MApp(2.2).packages.zeroize(datetime[1], 2);
      i = MApp(2.2).packages.zeroize(datetime[2], 2);
      s = MApp(2.2).packages.zeroize(datetime[3], 2);
      mi = MApp(2.2).packages.zeroize(datetime[4], 3);
      document.getElementById('countdown').innerHTML = '<li>'+d+'<span>Day</span></li><li>'+ h+'<span>hr</span></li><li>'+ i+'<span>m</span></li><li class="last">'+ s+'<span>s</span></li>';
      setTimeout('cycleCountdown()', 1);
    }
    cycleCountdown();
    setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);
  </script></div>
</body>
</html>