<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
		$pResUrl = './';
		$pRootUrl = '../../../../';
}

if(!empty($_GET['ref'])&&in_array($_GET['ref'],array('dbst1atweb','dbst2atweb','dbst3atweb'))){
    $refstr='-'.$_GET['ref'];
}else{
    $refstr='';
}

$ref1='db1pcdecb';
$ref2='db3pcsdecb';

//if($_GET['ref']=='dbst3atweb'){
//    $ststr = '-dbst3atweb';
//}else if($_GET['ref']=='dbst4atweb'){
//    $ststr = '-dbst4atweb';
//} else if($_GET['ref']=='db3st13'){
//    $ststr = '-db3st13';
//}
//else{
//    $ststr = '';
//}
//
//if($_GET['ref']=='db3irsource'){
//    $ref1=$ref2='db3irsource';
//}else{
//    $ref1.=$ststr;
//    $ref2.=$ststr;
//}
//
//if($_GET['x']=='dbxmaspopup'){
//    $ref1=$ref2='dbxmaspopup';
//}



include $pRootUrl . 'include/common.inc.php';
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Save 80% on DB 3 PRO and Get Your Exclusive Free XMAS Gift Pack</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo $pResUrl; ?>style/style.css">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
    <script type="text/javascript">
    function decreasingPacks(){
      $.ajax({
        type: "GET",
        url: "xmasspecialsaleb.php",
        data: "action=getPacks&r="+Math.random(),
        success: function(packs){
          $('#packs').html(packs);
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
<!--banner-->
<div class="banner">
  <div class="wrapper">
    <div class="banner-top">
      <a href="http://www.iobit.com/en/index.php" target="_blank" class="logo"></a>
      <div class="right">
        <ul id="counttime" class="date"><li>08</li><li>16</li><li>27</li><li class="ms">726 <sup>*</sup></li></ul>
        <div class="clear"></div>
        <ul class="date jour">
          <li>Hr</li>
          <li>m</li>
          <li>s</li>
          <li>ms</li>
        </ul>
      </div>
      <h1>XMAS Special Sale</h1>
      <h2>Save <span>80%</span> on DB PRO and get the Exclusive XMAS Gift Pack for <span>FREE!</span></h2>
    </div>
    <div class="content">
      <!--60% 0ff-->
      <div class="two_off box-content">
        <dl class="money">
          <dt><img src="<?php echo $pResUrl; ?>images//db-60.jpg" alt=""></dt>
          <dd><strong>Driver Booster PRO</strong>1 Year / 1 PC</dd>
        </dl>
        <dl class="message">
          <dt><strong><b>$</b>22.95</strong> <del>$59.85</del></dt>
          <dd><a href="http://www.iobit.com/buy.php?product=db32295&ref=<?php echo $ref1;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onClick="ga('send', 'event', 'dbbuy', 'buy', 'christmas2015-en-aff');" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images//shop.png"></span>Get It Now</a></dd>
          <dd>Only <b>$0.06</b> per PC per day </dd>
        </dl>
        <div class="clear"></div>
      </div>
      <!--1pc-->
      <div class="one_off box-content">
        <dl class="money">
          <dt><img src="<?php echo $pResUrl; ?>images//db-80.jpg" alt=""></dt>
          <dd><strong>Driver Booster PRO</strong>1 Year / <b>3 PCs</b></dd>
        </dl>
        <dl class="message">
          <dt><strong><b>$</b>24.95</strong> <del>$134.78</del></dt>
          <dd><a href="http://www.iobit.com/buy.php?product=db3sdpfiu&ref=<?php echo $ref2;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onClick="ga('send', 'event', 'dbbuy', 'buy', 'christmas2015-en-aff');" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images//shop.png"></span>Get It Now</a></dd>
          <dd>Only <b>$0.023</b> per PC per day </dd>
        </dl>
        <p><img src="<?php echo $pResUrl; ?>images//info.png" class="pop-info">IObit Gift Pack<span>Free</span><del>$59.93</del> </p>
        <img class="most" src="<?php echo $pResUrl; ?>images//most-popular.png" alt=""/>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<!--introduce-->
<div id="introduce" class="introduce-content">
  <h2>Enjoy more stable PC performance with up-to-date drivers</h2>
  <dl class="introduce">
    <dt><img src="<?php echo $pResUrl; ?>images//db-sceen.jpg"></dt>
    <dd>Support More Hardware Devices</dd>
    <dd>Enhance Hardware Functionality for Better Performance</dd>
    <dd>Fix System Issues Caused By Outdated Driver</dd>
    <dd>Specialized Driver Tweaking for Better Gaming Experience</dd>
    <dd>Backup Drivers for Safe Restore</dd>
    <dd class="last"><a href="javascript:;" onClick="goTaget($('#compare'))">  Learn more about PRO edition>></a></dd>
  </dl>
  <div class="clear"></div>
</div>
<div class="wrapper">
  <!--gift-->
  <div id="gift" class="gift-content">
    <h2>IObit XMAS Gift Pack for DB user only</h2>
    <img src="<?php echo $pResUrl; ?>images//gift.jpg">
    <ul>
      <li>
        <div><span>IObit Uninstaller PRO</span> <span class="money">$<strong>0</strong>  <del>$19.99</del></span> <span>1 year /1 PC </span> </div>
        <sub>Most Powerful Uninstaller to Remove Plug-ins & Apps!</sub>
      </li>
      <li>
        <div><span>Smart Defrag PRO</span> <span class="money">$<strong>0</strong>  <del>$19.99</del></span> <span>1 year /1 PC </span> </div>
        <sub> Get the Maximum Hard Drive Performance!</sub>
      </li>
      <li>
        <div><span>Protected Folder</span> <span class="money">$<strong>0</strong>  <del>$19.95</del></span> <span>1 year /1 PC  </span> </div>
        <sub>No Worries of Data Theft or Privacy Leaks!</sub>
      </li>
    </ul>
    <div class="clear"></div>
  </div>
    <!--footbtn-->
  <div class="wrapper foot-btn">
    <h2>Enjoy Quicker and Safer Driver Updating with DB 3 PRO</h2>
    <h3>Get Exclusive Christmas Gift Pack for Free!      </h3>
    <ul>
      <li><span>$<strong>24.95</strong></span> <del>$134.78</del></li>
      <li class="btn"><a href="http://www.iobit.com/buy.php?product=db3sdpfiu&ref=<?php echo $ref2;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onClick="ga('send', 'event', 'dbbuy', 'buy', 'christmas2015-en-aff');" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images//shop.png"></span>Get It Now</a></li>
      <li>1 Year Subscription / <b>3 PCs</b></li>
    </ul>
  </div>
  <!--footbtn end-->
  <!--payment-->
<ul class="payment wrapper">
  <li>60 Days Money Back <img src="<?php echo $pResUrl; ?>images//days.jpg" alt=""></li>
  <li>Accept Payments <img src="<?php echo $pResUrl; ?>images//visa.jpg" alt=""></li>
  <li>100% Secured Payment <img src="<?php echo $pResUrl; ?>images//verified.jpg" alt=""></li>
</ul>
  <!--user-->
  <div id="user" class="user-content">
    <div class="review">
      <h2>DB Media Review</h2>
      <div class="content">
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images//clnet.jpg"></dt>
          <dd><img src="<?php echo $pResUrl; ?>images//four_star.jpg">“Update system drivers with the greatest </dd>
          <dd>of ease.” </dd>
        </dl>
        <dl class="cor">
          <dt><img src="<?php echo $pResUrl; ?>images//soft.jpg"></dt>
          <dd><img src="<?php echo $pResUrl; ?>images//five_star.jpg">“Works fine and eliminates   </dd>
          <dd>the problems created by incompatible drivers.”</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images//softonic.jpg"></dt>
          <dd><img src="<?php echo $pResUrl; ?>images//four_star.jpg">“Simple and effective solution for quickly  </dd>
          <dd>updating outdated drivers.”</dd>
        </dl>
      </div>
    </div>
    <!--user-->
    <div class="user">
      <h2>User Review</h2>
      <dl class="db">
        <dt>Mike Goggans</dt>
        <dd><span>I had 10 drivers that were out of date and the Driver Booster updated them all perfectly.</span></dd>
      </dl>
      <dl class="iu">
        <dt>Vince Lewis</dt>
        <dd><span>Driver Booster did it all with just one click of the mouse. 19 drivers were updated in no time at all.</span></dd>
      </dl>
      <dl class="db sd">
        <dt>Wayne Bowler</dt>
        <dd><span>It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!</span></dd>
      </dl>
    </div>
  </div>
  <div class="clear"></div>
  <div class="comparison_table" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th colspan="2" class="text">See what PRO edition can do for you:</th>
        <th class="itemb two_width"><span>Driver Booster Free</span></th>
        <th class="itema">
          <span>Driver Booster PRO</span>
          <a class="activebtn" href="http://www.iobit.com/buy.php?product=db32295&ref=<?php echo $ref1;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onClick="ga('send', 'event', 'dbbuy', 'buy', 'christmas2015-en-aff');">Activate Now</a>
          <p><b>$22.95 </b> <del>$59.85</del><br>1 year/ 1 PC</p>
        </th>
        <th class="itemb">
          <span>Driver Booster PRO</span>
          <a class="activebtn" href="http://www.iobit.com/buy.php?product=db3sdpfiu&ref=<?php echo $ref2;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onClick="ga('send', 'event', 'dbbuy', 'buy', 'christmas2015-en-aff');">Activate Now</a>
          <p><b>$24.95</b> <del>$134.78</del> <br>1 year/ 3 PCs</p>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images//icon_01.png"></td>
        <td class="text">Automatically Identify Outdated Drivers</td>
        <td class="itemb two_width"><img src="<?php echo $pResUrl; ?>images//greenmark.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images//yellowmark.png"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images//greenmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images//icon_02.png"></td>
        <td class="text">Download and Update Outdated Drivers with One Click</td>
        <td class="itemb two_width"><img src="<?php echo $pResUrl; ?>images//greenmark.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images//yellowmark.png"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images//greenmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images//icon_03.png"></td>
        <td class="text">Unlock Driver Update Speed Limit</td>
        <td class="itemb two_width"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images//yellowmark.png"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images//greenmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images//icon_04.png"></td>
        <td class="text">Specialized Driver Tweaking for Better Gaming Experience</td>
        <td class="itemb two_width"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images//yellowmark.png"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images//greenmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images//icon_05.png"></td>
        <td class="text">Support More Comprehensive Hardware Devices</td>
        <td class="itemb two_width"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images//yellowmark.png"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images//greenmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images//icon_06.png"></td>
        <td class="text">Enjoy Priority to Update Outdated Drivers Promptly</td>
        <td class="itemb two_width"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images//yellowmark.png"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images//greenmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images//icon_07.png"></td>
        <td class="text">Backup Drivers for Safe Restore</td>
        <td class="itemb two_width"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images//yellowmark.png"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images//greenmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images//icon_08.png"></td>
        <td class="text">Enhance Hardware Functionality for Better Performance</td>
        <td class="itemb two_width"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images//yellowmark.png"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images//greenmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images//icon_09.png"></td>
        <td class="text">Automatically Update to the Latest Version</td>
        <td class="itemb two_width"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images//yellowmark.png"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images//greenmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images//icon_10.png"></td>
        <td class="text">Free 24/7 Technical Support on Demand</td>
        <td class="itemb two_width"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images//yellowmark.png"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images//greenmark.png"></td>
      </tr>
      </tbody>
      <tfoot>
      <tr>
        <th colspan="2"></th>
        <th class="itemb two_width"> <span>Driver Booster Free</span>
          Your current edition </th>
        <th class="itema">
          <p><b>$22.95 </b> <del>$59.85 </del> <br> 1 year/ 1 PC</p>
          <a class="activebtn" href="http://www.iobit.com/buy.php?product=db32295&ref=<?php echo $ref1;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onClick="ga('send', 'event', 'dbbuy', 'buy', 'christmas2015-en-aff');">Activate Now</a>
        </th>
        <th class="itemb">
          <p> <b>$24.95</b> <del>$134.78</del> <br> 1 year/ 3 PCs</p>
          <a class="activebtn" href="http://www.iobit.com/buy.php?product=db3sdpfiu&ref=<?php echo $ref2;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db" onClick="ga('send', 'event', 'dbbuy', 'buy', 'christmas2015-en-aff');">Activate Now</a>
        </th>
      </tr>
      </tfoot>
    </table>
  </div>
  <dl class="annotation">
    <dt>Note:</dt>
    <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
  </dl>
  <p class="footer">Copyright © 2005 - 2015 IObit. All Rights Reserved</p>
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
  function goTaget(target) {
    var Theigth = target.offset().top;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }
  $(function(){
    $(".pop-info").hover(function(){
      $(this).parent().append("<div class='pop_message'>The Gift Pack including IObit Uninstaller PRO, Smart Defrag PRO & Protected Folder.</div>")
    },function(){
      $(".pop_message").remove();
    });
  });
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    document.getElementById('counttime').innerHTML = '<li>'+h+'</li><li>'+i+'</li><li>'+s+'</li><li class="last">'+mi+'<sup>*</sup></li>';
    setTimeout('cycleCountdown()', 1);
  }
  cycleCountdown();
  setTimeout('window.location.href="https://purchase.iobit.com/aff/en/db/2017general/index.php'+location.search+'"',5000);
</script></div>
</body>
</html>