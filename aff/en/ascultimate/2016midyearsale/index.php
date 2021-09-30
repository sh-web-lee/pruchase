<?php
error_reporting(0); 
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) -68807174;


if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_ascu_2016midyearsale';

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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Activate ASC Ultimate for 3 PCs with exclusive discount before trial expiring, and get free gifts!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function decreasingPacks(){
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=getPacks&r="+Math.random(),
    success: function(packs){
      $('.packs').html(packs);
      setTimeout('decreasingPacks()', 10000);
    }
  });
}
setTimeout('decreasingPacks()', 10000);
</script>
</head>

<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- header start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <h1 class="title">70 % Spring into SAVINGS  on ASCU & Get Free Gift</h1>
      <div class="panel clearfix">
        <div class="product fl">
          <img src="<?php echo $pResUrl; ?>images/header_asc.png">
        </div>
        <div class="infor fr">
          <div class="infor-top">
            <p>Activate ASC Ultimate for 3 PCs today, get FREE Gift your PC will adore! </p>
            <strong><span class="packs"><?php echo $packsNum; ?></span> Packs Left Today!</strong>
            <h3>UItimate PC Protection</h3>
          </div>
          <dl>
            <dd>
              <span class="today">
                <em>$</em>Today
              </span>
              <strong class="infor-price price">29.99</strong>
              <span class="original">
                Original: <del>$109.99</del>
                <em>1 year / <b>3 PCs</b></em>
              </span>
            </dd>
            <dd>
              <a class="buybtn inforbtn" href="http://www.iobit.com/buy.php?product=ascu9pf&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', 'enaffascu2016midyearsale');">
                <i class="all-icons">car</i>
                Activate Now
              </a>
            </dd>
            <dd class="last">
              <i class="all-icons">people</i>
              <strong><?php echo $buyNum;?> </strong>people activated
            </dd>
          </dl>
        </div>
      </div>
      <!-- time -->
      <div class="countdown">
        <ul id="countdown">
          <li>00</li>
          <li>00</li>
          <li>00</li>
          <li>000</li>
        </ul>
        <sup>*</sup>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- container start -->
  <div class="wrapper main">

    <h2>Exclusive Discount for Advanced SystemCare PRO User – Activate before Trial Expiring!</h2>
    <div class="product-intro clearfix">
      <div class="left-part clearfix">
        <div class="showcase">
          <img src="<?php echo $pResUrl; ?>images/boxshot-ascu.png">
        </div>          
        <i>Sale</i>
        <div class="continer">
          <h3>What you can get by <br><span>ACTIVATING</span> ASC Ultimate 9:</h3>
          <p>An always-on, automated, and all-in-one protection against all kinds of viruses, system slow down, freeze and crash. It's your best solution for security and performance.</p>
          <p><img src="<?php echo $pResUrl; ?>images/product_awards.png"></p>
          <p><a  href="javascript:void(0);" onclick="goTarget($('.comparison-table'),122)">See more about PRO edition >></a></p>
        </div>
      </div>
      <div class="right-part">
        <div class="continer clearfix">
          <div class="showcase">
            <img src="<?php echo $pResUrl; ?>images/additional.png">
          </div>            
          <i>Free</i>
          <dl>
            <dt><strong>$0</strong> <del>$39.99</del></dt>
            <dd><strong>Additional 2 PCs Supported</strong></dd>
            <dd>Advanced SystemCare Ultimate license supports additional 2 PCs so you can share it with your family & friends!</dd>
          </dl>           
        </div>
        <div class="continer clearfix">
          <div class="showcase">
            <img src="<?php echo $pResUrl; ?>images/boxshot-pf.png">
          </div>    
          <i>Free</i>
          <dl>
            <dt><strong>$0</strong> <del>$19.95</del></dt>
            <dd><strong>Protected Folder 1 year / 1 PC</strong></dd>
            <dd>No Worries of Data Theft or Privacy Leaks!</dd>
          </dl>
        </div>
      </div>
    </div>

    <!-- descrip start -->
    <div class="descrip clearfix">
      <div class="details fl">
        <p>
          Activate Advanced SystemCare Ultimate today, Get 2 Additional Secured PCs and Protected Folder for FREE. Offer limited for Spring Sale ONLY!
        </p>
        <span>Act Now to SAVE More!</span>
      </div>
      <dl class="handle fr">
        <dt>
          Only <strong  class="price">$29.99</strong> <del>$109.99</del>
        </dt>
        <dd>
          <a class="buybtn descripbtn" href="http://www.iobit.com/buy.php?product=ascu9pf&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', 'enaffascu2016midyearsale');">
            <i class="all-icons">cart</i>
            Act Now and SAVE 70%!
          </a>
        </dd>
        <dd>
          <strong class="packs"><?php echo $packsNum; ?></strong> Packs Left Only! 
          <span><strong><?php echo $buyNum;?></strong> people activated!</span>
        </dd>
      </dl>
    </div>
    <!-- descrip end -->

    <!-- payments start -->
    <div class="payment clearfix">
      <dl class="clearfix">
        <dt>We accept</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/payment_icon1.jpg"><dd>
      </dl>
      <dl class="clearfix">
        <dt>Secure payment</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/payment_icon2.jpg"><dd>
      </dl>
    </div>
    <!-- payments end -->

    <!-- awards start -->
    <div class="awards">
      <h3>Product Awards</h3>
      <img src="<?php echo $pResUrl; ?>images/awards.jpg">
    </div>
    <!-- awards end -->
  
    <!-- review start -->
    <div class="review">
      <!-- media-rev -->
      <div class="media-rev">
        <h3>Media Review</h3>
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl; ?>images/addictive.jpg" alt="addictive"></dt>
          <dd><strong>"Advanced SystemCare Ultimate is a powerful anti-virus and system optimization tool."</strong></dd>
          <dd>
            "Advanced SystemCare Ultimate is a powerful anti-virus and system optimization tool. Apart from protecting your PC from malware, viruses and similar threats, it can also boost your PC's performance by applying various registry and shortcut fixes, removing junk files, scanning local disk volumes for system vulnerabilities, etc."
            <span class="fr">-Addictivetips</span>
          </dd>
        </dl>
      </div>
      <!-- user-rev -->
      <div class="user-rev">
        <div class="content">
          <h3>Customer Review</h3>
          <dl class="show">
            <dt><h4>"Advanced System Care Ultimate is the new mother load. The big winner! "</h4></dt>
            <dd>
              "I have had a past problem of always messing with my computer. Then I got my first copy of Advanced Systemcare. There is no need to mess around any longer. Now that I have antivirus, included in the product, my need for secondary software is none existent. Advanced System Care Ultimate is the new mother load. The big winner! My computer is always up to date and runs like deer. Unlike other products; there has not been a constant stream of conflicts."
            </dd>
          </dl>
          <dl>
            <dt><h4>"I recommend advanced systemcare ultimate as their antivirus/system optimizer."</h4></dt>
            <dd>
              "On the past version of advanced systemcare ultimate, i had no problem on almost everything, system, malwares, etc. and now, it's updated, more features on it will make my laptop run 5x faster than before. i also like the new skin of it. so next time i fix other's computer, i recommend advanced systemcare ultimate as their antivirus/system optimizer."
            </dd>
          </dl>
        </div>
        <ul class="users">
          <li class="current">
            <img src="<?php echo $pResUrl; ?>images/rod_garnett.jpg" alt="Rod Garnett">
            Jane McClain
            <em>2012</em>
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/dareen_lim.jpg" alt="Dareen Lim">
            Dareen Lim
            <em>2013</em>
          </li>
        </ul>
      </div>
    </div>
    <!-- review end -->
    <!-- comparison-table start -->
    <div class="comparison-table">
      <h4>Why Choose Advanced SystemCare Ultimate?</h4>
      <dl class="comtable">
        <dt><span>Better Protection</span>, and <span>No Performance Lag</span> Anymore. See Comparison below</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/comparetable.jpg"></dd>
      </dl>
      <dl class="comlist">
        <dt>
          <i class="all-icons">√</i>
          Unrivaled Detection Rate and Maximum Protection
        </dt>
        <dd>
          One click to clean hipen and stubborn Viruses, Trojans, worms, spyware, adware and various malware. Advanced SystemCare Ultimate also provides an always-on, automated, and proactive protection against all kinds of Internet security threats, with rapid virus database updating.
        </dd>
        <dt>
          <i class="all-icons">√</i>
          Enjoy Confident Security without System Slowdown
        </dt>
        <dd>
          Your system runs at its top speed without any performance lag, due to our industry-leading Internet security technology.        
        </dd>
        <dt>
          <i class="all-icons">√</i>
          Safe Surf, Search, Download and Share with Confidence
        </dt>
        <dd>
          Proactive Virus Control technology monitors processes behavior in real-time, scans files shared with email and blocks possible threats. Unmatched detection rate assures you a safer environment while using your PC.
        </dd>
        <dt>
          <i class="all-icons">√</i>
          Get Highly-tuned Performance and Enjoy the New PC Feeling
        </dt>
        <dd>
          Already proven powerful PC tune-up ability unleashes the full power of your PC. With Real-time optimization and ActiveBoost feature, system resources are intelligently managed to ensure you a super-fast PC.
        </dd>
      </dl>
    </div>
    <!-- comparison-table end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
    </dl>
    <!-- annotation end -->

  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date(Y)?> IObit. All Rights Reserved</div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer">
    <div class="wrapper">
      <div class="left">
        <h3>Save <strong><span class="percent">70</span>%</strong>, Enjoy Ultimate Protection and Ultimate Performance! </h3>
        <p><strong><?php echo $buyNum;?></strong> people activated  </p>
        <div id="float-countdown" class="countdown">
          <span>11<small>h</small>:</span>
          <span>44<small>m</small>:</span>
          <span>15<small>s</small></span>
          <span class="end">634*</span>
        </div>
      </div>
      <dl>
        <dt>Only <strong class="price">$29.99</strong> <del>$109.99</del></dt>
        <dd>
          <a class="buybtn floatbtn" href="http://www.iobit.com/buy.php?product=ascu9pf&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', 'enaffascu2016midyearsale');">
            <i class="all-icons">car</i>
            Activate Now
          </a>
        </dd>
      </dl>
    </div>
  </div>
  <!-- floatlayer end -->
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
    
    //userreview 
    $(".users li").mouseover(function(event) {
      var num = $(this).index();
      $(".users li").eq(num).addClass('current').siblings().removeClass('current');
      $(".user-rev .content > dl").eq(num).addClass('show').siblings().removeClass('show');
    });
    

    //floatlayer
    $(window).on('scroll', function () {
      var scrollHeight = $(".header .infor").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $('.floatlayer').addClass('on');
      } else {
        $('.floatlayer').removeClass('on');
      }
    });

  });

  function goTarget(target,yoffset) {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }

  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $("#countdown").html("<li>" + h + "<span>hr</span> : </li><li>" + i + "<span>m</span> : </li><li>" + s + '<span>s</span> : </li><li class="last">' + mi + "</li>");
    document.getElementById('float-countdown').innerHTML = '<span>' + h + '<small>h</small>:</span><span>' + i + '<small>m</small>:</span><span>' + s + '<small>s</small></span><span class="end">' + mi + '*</span>';
      setTimeout("cycleCountdown()", 1);
  }
  cycleCountdown();
  setTimeout('window.location.href="https://purchase.iobit.com/aff/en/ascultimate/2020anniversarysale/index.php'+location.search+'"',5000);
</script></div>
</body>
</html>