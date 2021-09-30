<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_asc9_2016newyearsale'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Save 80% on ASC PRO, speed up, protect and optimize your PC!</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">

    <script src="http://codes.iobit.com/js/mapplication/2.2/mapplication.js" type="text/javascript"></script>
    <script type="text/javascript">
        var lan=MApp(2.2).language.langArr[0];
        var query=MApp(2.2).url.getQuery();
    </script>

  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<!--banner-->
<div class="header">
  <div class="wrapper">
    <a href="http://www.iobit.com/" class="logo" target="_blank"></a>
    <h1>New Year New PC Feel 80% OFF & FREE GIFT</h1>
    <div class="container">
      <dl class="left">
        <dt><h2><strong>Save 80%</strong> on ASC PRO & Choose a PRO Gift for <strong>FREE!</strong></h2>Activate ASC PRO for 3 PCs and get one of the three PRO products with $0!</dt>
        <dd>
          <ul class="big">
            <li><img src="<?php echo $pResUrl; ?>images/asc9-banner.jpg" alt=""></li>
            <li><strong>Only <img src="<?php echo $pResUrl; ?>images/price.png" alt="$19.99"><del>$89.99</del></strong><br>1 Year Subscription / 3 PCs</li>
          </ul>
          <ul class="small sd">
            <li><img src="<?php echo $pResUrl; ?>images/gift-sd.png" alt=""><span class="ico"></span></li>
            <li><em>Smart Defrag PRO</em><br><span>$0 <del>$19.99</del></span></li>
            <li><a class="on" href="javascript:void(0);">ADD Now $0</a></li>
            <li class="last">Get Maximum Hard
              Drive Performance!</li>
          </ul>
          <ul class="small pf">
            <li><img src="<?php echo $pResUrl; ?>images/gift-pf.png" alt=""><span class="ico"></span></li>
            <li><em>Protected Folder</em><br><span>$0 <del>$19.99</del></span></li>
            <li><a href="javascript:void(0);">ADD Now $0</a></li>
            <li class="last">No Worries of Data
              Theft or Privacy Leaks!
            </li>
          </ul>
          <ul class="small amc">
            <li><img src="<?php echo $pResUrl; ?>images/gift-amc.png" alt=""><span class="ico"></span></li>
            <li><em>AMC Security PRO</em><br><span>$0 <del>$19.99</del></span></li>
            <li><a href="javascript:void(0);">ADD Now $0</a></li>
            <li class="last">Android devices
              against viruses.</li>
          </ul>
        </dd>
      </dl>
      <dl class="right">
        <dt>
          <ul class="date" id="counttime">
            <li>00<br><span>hr</span></li>
            <li>00<br><span>m</span></li>
            <li>00<br><span>s</span></li>
            <li class="last">000<sup>*</sup></li>
          </ul>
        </dt>
        <dd><em>ASC PRO </em><span>1 year / 3 PCs</span><br>Only: <strong>$19.99 </strong><del>$89.99</del></dd>
        <dd class="add"><img src="<?php echo $pResUrl; ?>images/ico-add.png" alt=""></dd>
        <dd><p><em>Smart Defrag PRO</em><span> 1 year / 1 PC</span></p>Only: <strong>$0 </strong><del>$19.99</del></dd>
        <dd><a class="buybtn" href="http://www.iobit.com/buy.php?product=affasc9sd&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016newyearsale');" >Activate Now</a></dd>
        <dd class="total">Total: <img height="29" src="<?php echo $pResUrl; ?>images/price.png" alt="$19.99"><del>$109.98</del></dd>
        <dd class="last">100% Money-back Guarantee</dd>
      </dl>
    </div>
  </div>
</div>
<!--banner end-->
<div class="wrapper">
  <!--awarded-->
  <dl class="awarded">
    <dt>Trusted and awarded by these medias</dt>
    <dd><img src="<?php echo $pResUrl; ?>images/awarded.jpg"></dd>
  </dl>
  <!--awarded end-->
  <!--asc-message-->
  <div class="asc-message">
    <h2>Keep Your PC Running Like a New One in the New Year with ASC9 PRO!</h2>
    <dl>
      <dd><img src="<?php echo $pResUrl; ?>images/ico-check.png" alt="">Boost Internet up to 300% Faster</dd>
      <dd><img src="<?php echo $pResUrl; ?>images/ico-check.png" alt="">Double the Speed of Your Slow PC *</dd>
      <dd><img src="<?php echo $pResUrl; ?>images/ico-check.png" alt="">Auto RAM Clean & Auto Online Privacy Trace Clean <img class="new" src="<?php echo $pResUrl; ?>images/ico-new.png" alt=""></dd>
      <dd><img src="<?php echo $pResUrl; ?>images/ico-check.png" alt="">One-click Cleaning and Fixing All Kinds of PC Problems</dd>
      <dt><a href="javascript:void(0);" onclick="goTaget($('.comparison_table'))">Learn more about PRO edition></a></dt>
    </dl>
    <img src="<?php echo $pResUrl; ?>images/asc9-screen.jpg" alt="">
  </div>
  <!--asc-message end-->
  <!--banner-center-->
  <div class="banner-center">
    <dl class="asc">
      <dt><img src="<?php echo $pResUrl; ?>images/asc9-center.jpg" alt=""></dt>
      <dd class="first"><em>3 PCs</em> / 1 Year </dd>
      <dd><del>$89.99</del></dd>
      <dd><strong>$19.99</strong></dd>
    </dl>
    <dl class="gift">
      <dt><img src="<?php echo $pResUrl; ?>images/gift-sd.png" alt=""><span class="ico"></span></dt>
      <dd class="first"><em>1 PC</em> / 1 Year </dd>
      <dd><del>$19.99</del></dd>
      <dd><strong>$0</strong></dd>
    </dl>
    <dl class="last">
      <dd class="first">Total: <img height="28" src="<?php echo $pResUrl; ?>images/price.png" alt=""><del>$109.98</del></dd>
      <dd><a class="buybtn"  href="http://www.iobit.com/buy.php?product=affasc9sd&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016newyearsale');" >Activate Now</a></dd>
    </dl>
  </div>
  <!--banner-center end-->
  <!--payment-->
  <ul class="payment">
    <li>Accepted Payments  <br> <img src="<?php echo $pResUrl; ?>images/payments.jpg"></li>
    <li>Money Back Guarantee  <br> <img src="<?php echo $pResUrl; ?>images/guarantee.jpg"></li>
    <li>Secure Payment  <br> <img src="<?php echo $pResUrl; ?>images/payment.jpg"></li>
  </ul>
</div>
<div class="review">
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
        <li class="current"><img src="<?php echo $pResUrl; ?>images/jane_mcclain.jpg" alt="">Jane McClain<br>2014</li>
        <li class=""><img src="<?php echo $pResUrl; ?>images/bob.jpg" alt="">Bob Bassett<br>2014</li>
        <li class=""><img src="<?php echo $pResUrl; ?>images/almir.jpg" alt="">Almir Romboli Tavares<br>2014</li>
        <li class=""><img src="<?php echo $pResUrl; ?>images/gordon.jpg" alt="">Gordon Griswold<br>2014</li>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper">
  <div class="comparison_table" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th colspan="2">See what PRO edition can do for you:</th>
          <th class="itemb"><span>Advanced SystemCare Free</span></th>
          <th class="itema"><span>Advanced SystemCare PRO</span><br>
            <a href="http://www.iobit.com/buy.php?product=affasc9sd&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016newyearsale');"  class="tbbuybtn">Activate Now</a>
            <p><em>$19.99 </em><del>$109.98 </del> 1 Year / 3 PCs</p></th>
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
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_15.png"></td>
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
          <th class="itemb">Advanced SystemCare Free</th>
          <th class="itema"><span>Advanced SystemCare PRO</span><br>
            <a href="http://www.iobit.com/buy.php?product=affasc9sd&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affenasc2016newyearsale');" class="tbbuybtn">Activate Now</a>
            <p><em>$19.99 </em><del>$109.98 </del> 1 Year / 3 PCs</p></th>
        </tr>
        </tfoot>
      </table>
  </div>
  <dl class="annotation">
    <dt>Note:</dt>
    <dd>1*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
    <dd>2*.Data may vary based on different system or computer. </dd>
  </dl>
  <div class="footer">
    Copyright © 2005 - 2016 IObit. All Rights Reserved
  </div>
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
<script type="text/javascript">
  $(".container .small a").each(function(i){
    $(this).click(function(){
      $(".container .small a").removeClass("on").eq(i).addClass("on");
    });
  });
  $(".container .sd a").click(function(){
    $(".container .right p").html("<em>Smart Defrag PRO</em><span> 1 year / 1 PC</span>");
    $(".banner-center .gift .first").html("<em>1 PC</em> / 1 Year ");
    $(".banner-center .gift img").attr("src","<?php echo $pResUrl; ?>images/gift-sd.png");
      $(".buybtn,.tbbuybtn").attr("href", "http://www.iobit.com/buy.php?product=affasc9sd&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>");
      });
  $(".container .pf a").click(function(){
    $(".container .right p").html("<em>Protected Folder</em><span> 1 year / 1 PC</span>");
    $(".banner-center .gift .first").html("<em>1 PC</em> / 1 Year ");
    $(".banner-center .gift img").attr("src","<?php echo $pResUrl; ?>images/gift-pf.png");
      $(".buybtn,.tbbuybtn").attr("href", "http://www.iobit.com/buy.php?product=affasc9pf&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>");
  });
  $(".container .amc a").click(function(){
    $(".container .right p").html("<em>AMC Security PRO</em><span> 1 year / Multi Devices</span>");
    $(".banner-center .gift .first").html("Multi Devices ");
    $(".banner-center .gift img").attr("src","<?php echo $pResUrl; ?>images/gift-amc.png");
      $(".buybtn,.tbbuybtn").attr("href", "http://www.iobit.com/buy.php?product=affasc9amc&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>");
  });

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
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    document.getElementById('counttime').innerHTML = '<li>'+h+'<br><span>hr</span></li><li>'+i+'<br><span>m</span></li><li>'+s+'<br><span>s</span></li><li class="last">'+mi+'<sup>*</sup></li>';
    setTimeout('cycleCountdown()', 1);
  }
  cycleCountdown();
  function goTaget(target) {
    var Theigth = target.offset().top;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }
</script>
</div>
</body>
</html>

