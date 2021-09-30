<?php
error_reporting(0); 
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) -68807174;
$buyNum = number_format($buyNum);

$packsNum = ceil(microtime_float()*2000/20000);
$packsNum = 360-($packsNum%360);
if ($_GET['action'] == 'getPacks'){
  echo $packsNum;
  exit;
}
$ref = 'ascu11cd6m';
//st 参数处理
if(isset($_GET['st'])&&in_array($_GET['st'],array('pm_t3','pm_t4','pm_t5','pm_t1','pm_t2','ob_1','ob_2','news'))){
  $ref .= '-'.$_GET['st'];
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
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function decreasingPacks(){
  $.ajax({
    type: "GET",
    url: "cd6m.php",
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
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- header start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <h1>Mid-year Sale</h1>
      <h2>
        <!-- time -->
        <ul class="countdown" id="countdown">
          <li>00</li>
          <li>00</li>
          <li>00</li>
          <li>000</li>
          <sup>*</sup>
        </ul>
        Left to Get <span>90</span>% OFF & Free Gifts
      </h2>
      <div class="panel clearfix">
        <div class="product fl">
          <img src="<?php echo $pResUrl; ?>images/header_asc.png">
          <!-- rednum -->
          <div class="discount">
            <span class="_90"></span>
          </div>
        </div>
        <div class="infor fr">
          <div class="infor-top">
            <p>Activate ASC Ultimate for 3 PCs today, get FREE Gift your PC will adore! </p>
            <strong><span class="packs"><?php echo $packsNum; ?></span> Packs Left Today!</strong>
            <h3>UItimate PC Protection</h3>
          </div>
          <dl>
            <dt>
              <span class="today">
                <em>$</em>Today
              </span>
              <strong class="infor-price price">$9.99</strong>
              <span class="original">
                Original: <del>$109.93</del>
                <em>1 year / <b>3 PCs</b></em>
              </span>
            </dt>
            <dd>
              <a class="buybtn inforbtn" href="https://www.iobit.com/buy.php?product=ascu11pf-6m&ref=<?php echo $ref; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase-999');">
                <i></i>
                <span>Activate Now</span>
              </a>
            </dd>
            <dd class="last">
              <i class="all-icons">people</i>
              <strong><?php echo $buyNum;?> </strong>people activated
            </dd>
          </dl>
        </div>
      </div>      
    </div>
  </div>
  <!-- header end -->

  <!-- container start -->
  <div class="wrapper main">

    <h2 class="exclus">Exclusive Discount for Advanced SystemCare PRO User – Activate before Trial Expiring!</h2>
    <div class="product-intro clearfix">
      <div class="left-part clearfix">
        <div class="showcase">
          <img src="<?php echo $pResUrl; ?>images/boxshot-ascu.png">
        </div>          
        <i>Sale</i>
        <div class="continer">
          <h3>What you can get by <br><span>ACTIVATING</span> ASC Ultimate 11:</h3>
          <p>An always-on, automated, and full-scale antivirus utility against all kinds of viruses, Ransomware, system slowdown, freezing and crashes. It's your best solution for security and performance.</p>
          <p><img src="<?php echo $pResUrl; ?>images/product_awards.png"></p>
          <p><a  href="javascript:void(0);" onclick="goTarget($('.comparison'),122)">See more about PRO edition >></a></p>
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
            <dd>Advanced SystemCare Ultimate license supports an additional 2 PCs so you can share it with your family & friends!</dd>
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
        <p>Activate Advanced SystemCare Ultimate today, Get 2 Additional Secured PCs and Protected Folder for FREE. Offer limited for Mid-year Sale ONLY!</p>
        <span>Act Now to SAVE More!</span>
      </div>
      <dl class="handle fr">
        <dt>
          Only <strong  class="price">$9.99</strong> <del>$109.93</del>
        </dt>
        <dd>
          <a class="buybtn descripbtn" href="https://www.iobit.com/buy.php?product=ascu11pf-6m&ref=<?php echo $ref; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase-999');">
            <i></i>
            <span>Act Now and SAVE <em class="percent">90</em>%!</span>
          </a>
        </dd>
        <dd>
          <strong class="packs"><?php echo $packsNum; ?></strong> Packs Left Only! 
          <span><strong class="black"><?php echo $buyNum;?></strong> people activated!</span>
        </dd>
      </dl>
    </div>
  </div>
  <!-- descrip end -->
  <!-- review start -->
  <div class="review ">
    <div class="wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo $pResUrl; ?>images/logo-addictivetips.png" alt=""></dt>
            <dd>
              <h2>Media Review</h2>
              <h3>"Advanced SystemCare Ultimate is a powerful anti-virus and system optimization tool."</h3>
              <p>"Advanced SystemCare Ultimate is a powerful anti-virus and system optimization tool. Apart from protecting your PC from malware, viruses and similar threats, it can also boost your PC's performance by applying various registry and shortcut fixes, removing junk files, scanning local disk volumes for system vulnerabilities, etc."</p>
              <cite>Addictivetips</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt=""></dt>
            <dd>
              <h2>User Review</h2>
              <h3>"Advanced System Care Ultimate is the new mother load. The big winner! "</h3>
              <p>"I have had a past problem of always messing with my computer. Then I got my first copy of Advanced Systemcare. There is no need to mess around any longer. Now that I have antivirus, included in the product, my need for secondary software is none existent. Advanced System Care Ultimate is the new mother load. The big winner! My computer is always up to date and runs like deer. Unlike other products; there has not been a constant stream of conflicts."</p>
              <cite>Rod Garnett</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt=""></dt>
            <dd>
              <h2>User Review</h2>
              <h3>"I recommend advanced systemcare ultimate as their antivirus/system optimizer."</h3>
              <p>"On the past version of advanced systemcare ultimate, i had no problem on almost everything, system, malwares, etc. and now, it's updated, more features on it will make my laptop run 5x faster than before. i also like the new skin of it. so next time i fix other's computer, i recommend advanced systemcare ultimate as their antivirus/system optimizer."</p>
              <cite>Dareen Lim</cite>
            </dd>
          </dl> 
          <dl class="reviews">
            <dt><img src="<?php echo $pResUrl; ?>images/russell-peck.png" alt=""></dt>
            <dd>
              <h2>User Review</h2>
              <h3>"One of the simplest yet effective programs I have found to keep all three of my computers healthy."</h3>
              <p>"I have used various versions of Advanced SystemCare for several years. When I looked at the features of Advanced SystemCare Ultimate I knew I had to have it. It has not disappointed me. One of the simplest yet effective programs I have found to keep all three of my computers healthy."</p>
              <cite>Russell Peck</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->
  <!-- comparison start -->
  <div class="comparison wrapper">
    <h4>Why Choose Advanced SystemCare Ultimate 11?</h4>
    <h5><b>Better Protection</b>, and <b>No Performance Lag</b> Anymore. See Comparison below</h5>
    <div class="ctable">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text"></th>
            <th class="blue">
              <p><span>Advanced SystemCare</span> Ultimate</p>
            </th>
            <th>AVG<span>Anti-virus</span></th>
            <th>Norton Security<span>Deluxe</span></th>
            <th>Avast! Pro<span>Antivirus</span></th>
            <th>Microsoft<span>Security Essentials</span></th>
            <th>McAfee® AntiVirus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="title first">Detection Rate</td>
            <td class="gray">Very high</td>
            <td>Normal</td>
            <td>High</td>
            <td>Normal</td>
            <td>High</td>
            <td>High</td>
          </tr>
          <tr>
            <td class="title">Performance Lag</td>
            <td class="gray">No</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes </td>
            <td>Yes</td>
            <td>Yes</td>
          </tr>
          <tr>
            <td class="title">Top PC Cleaning <br /> and Optimization</td>
            <td class="gray"><i class="tb-icons red">√</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
          </tr>
          <tr>
            <td class="title">Over 20 Extra Tools for PC Performance</td>
            <td class="gray"><i class="tb-icons red">√</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <dl class="comlist">
      <dt>
        <i class="all-icons">√</i>
        Unrivaled Detection Rate and Maximum Protection
      </dt>
      <dd>
        One click to clean hidden and stubborn Viruses, Trojans, worms, spyware, adware and various malware. Advanced SystemCare Ultimate also provides an always-on, automated, and proactive protection against all kinds of Internet security threats,  with rapid updating to the virus database.
      </dd>
    </dl>
    <dl class="comlist">
      <dt>
        <i class="all-icons">√</i>
        Enjoy Confident Security without System Slowdown
      </dt>
      <dd>
        Your system runs at its top speed without any performance lag, due to our industry-leading Internet security technology.
      </dd>
    </dl>
    <dl class="comlist">
      <dt>
        <i class="all-icons">√</i>
        Surf safely, Search, Download and Share with Confidence
      </dt>
      <dd>
        Proactive Virus Control technology monitors processes' behavior in real-time, scans files shared by email and blocks possible threats. The unmatched detection rate
        assures you a safer environment while using your PC.
      </dd>
    </dl>
    <dl class="comlist">
      <dt>
        <i class="all-icons">√</i>
        Get Highly-tuned Performance and Enjoy the New PC Feeling
      </dt>
      <dd>
        The already proven powerful PC tune-up ability unleashes the full power of your PC. With the Real-time optimization and ActiveBoost feature, system resources are
        intelligently managed to ensure you have a super-fast PC.
      </dd>
    </dl>
  </div>
  <!-- comparison end -->

  <div class="award">
    <div class="wrapper">
      <h2>Product Awards</h2>
      <img src="<?php echo $pResUrl; ?>images/award.png" alt="">
    </div>
  </div>
   <div class="footer">
    <div class="wrapper">
      <div class="payments clearfix">
        <ul class="secure">
          <li><img src="<?php echo $pResUrl; ?>images/secure-payment.png" alt=""></li>
          <li>
            <h4>Secure Payment</h4>
            <p>IObit supports several safe modes of payment.</p>
          </li>
        </ul>
         <div class="payments-icon">
          <img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
         </div>
      </div>
      <div class="statement">
        <ul>
          <li>Note:</li>
          <li>*Such promotional programs are subject to change without notice, from time to time in our sole discretion.</li>
        </ul>
      </div>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
   </div>

  <!-- floatlayer start -->
  <div class="floatlayer">
    <div class="wrapper">
      <div class="left">
        <h3>Save <strong><span class="percent">90</span>%</strong>, Enjoy Ultimate Protection and Ultimate Performance! </h3>
        <p><strong><?php echo $buyNum;?></strong> people activated  </p>
        <div id="float-countdown" class="countdown">
          <span>11<small>h</small>:</span>
          <span>44<small>m</small>:</span>
          <span>15<small>s</small></span>
          <span class="end">634*</span>
        </div>
      </div>
      <dl>
        <dt>Only <strong class="price">$9.99</strong> <del>$109.93</del></dt>
        <dd>
          <a class="buybtn floatbtn" href="https://www.iobit.com/buy.php?product=ascu11pf-6m&ref=<?php echo $ref; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase-999');">
            <i></i>
            <span>Activate Now</span>
          </a>
        </dd>
      </dl>
    </div>
  </div>
  <!-- floatlayer end -->
  <div class='popout'><p>ASCU v10 will recognize ASCU v9 license key as <strong>valid for ASCU v10!</strong></p></div>
  <script src="<?php echo $pResUrl; ?>script/modernizr.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/review-3d-carousel.min.js"></script>
<script>
  $('#dg-container').gallery();
  var newobj=$('.price').eq(0).html().replace("$","");
  $('.price').eq(0).html($('.price').eq(0).html().replace('$',''));
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

  //time
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $("#countdown").html("<li>" + h + "<span>h</span></li><li>" + i + "<span>m</span></li><li>" + s + '<span>s</span></li><li class="last">' + mi + "</li><sup>*</sup>");
    document.getElementById('float-countdown').innerHTML = '<span>' + h + '<small>h</small>:</span><span>' + i + '<small>m</small>:</span><span>' + s + '<small>s</small></span><span class="end">' + mi + '*</span>';
      setTimeout("cycleCountdown()", 1);
  }
  cycleCountdown();

   function showPop(){
    $('.popout').addClass('on');
  }
</script>
</body>
</html>