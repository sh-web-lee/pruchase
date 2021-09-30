<?php
//	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
    include $pRootUrl . 'include/common.inc.php';

    $ref1='asc1pc2015dec';
    $ref2='asc3pc2015dec';
//    if(isset($_GET['st'])&&$_GET['st']!=null){
//        $ststr='-'.$_GET['st'];
//    }else{
//        $ststr='';
//    }
//    if(in_array($_GET['ref'], array('es_a8purchase','ascfeature'))){
//        $ststr.= '-'.$_GET['ref'];
//    }
//    if($_GET['ref']=='asc9irsource') {
//        $ref1 = $ref2 = 'asc9irsource';
//    }else{
//        $ref1.=$ststr;
//        $ref2.=$ststr;
//    }
//    if($_GET['x']=='ascxmaspopup'){
//        $ref1=$ref2='ascxmaspopup';
//    }

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
<title> Save 80% on ASC PRO, speed up, protect and optimize your PC! </title>
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
<!--banner-->
<div id="banner">
  <div class="wrapper">
    <a href="http://www.iobit.com/" class="logo" target="_blank"></a>
    <h1>Christmas Big Sale</h1>
    <ul class="date" id="counttime">
      <li>00</li>
      <li>00</li>
      <li>00</li>
      <li>000</li>
    </ul>
    <div class="clear"></div>
    <h2>Save 80% on ASC PRO today, share 300% faster PC <span> with your family in the whole holiday season!</span></h2>
    <div class="sold-content">
      <div class="img-box"><img src="<?php echo $pResUrl; ?>images/asc.png" alt="" class="asc"></div>
      <span class="message">
        <b>1 PC </b>/ 1 Year <del>$29.99</del> <strong><i>$</i>13.99</strong>
      </span>
      <span class="add"></span>
      <ul>
        <li><b>1 PC </b> Extra 1 month <span>$<strong>0.99</strong> <del>$2.49</del></span></li>
        <li><b>1 PC </b> Extra 1 month <span>$<strong>0.79</strong> <del>$2.49</del></span></li>
      </ul>
      <dl>
        <dt>
          <strong>1 PC / 14 Months</strong>Only <b>$1.12</b> per PC per month
        </dt>
        <dd><del>$34.97</del>   <strong><span>$</span>15.77</strong><a href="http://www.iobit.com/buy.php?product=asc91pc1577&ref=<?php echo $ref1;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'christmas2015-en-aff');" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>Get It Now</a></dd>
      </dl>
    </div>
    <div class="sold-content">
      <div class="img-box"><img src="<?php echo $pResUrl; ?>images/gif-box.png" alt="" class="gif-box"></div>
      <span class="message">
        <b>3 PCs </b>/ 1 Year <del>$89.97</del> <strong><i>$</i>19.99</strong>
      </span>
      <span class="add"></span>
      <ul>
        <li><b>3 PCs </b> Extra 1 month <span>$<strong>0</strong> <del>$9.99</del></span></li>
        <li><b>3 PCs </b> Extra 1 month <span>$<strong>0</strong> <del>$9.99</del></span></li>
      </ul>
      <dl>
        <dt>
          <strong>3 PCs / 14 Months</strong>Only <b>$0.47</b> per PC per month
        </dt>
        <dd><del>$109.95</del>   <strong><span>$</span>19.99</strong><a href="http://www.iobit.com/buy.php?product=asc93pc14m&ref=<?php echo $ref2;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'christmas2015-en-aff');" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>Get It Now</a></dd>
      </dl>
    </div>
  </div>
</div>
<div class="wrapper">
  <dl class="awarded">
    <dt>Be trusted and awarded by these medias</dt>
    <dd><img src="<?php echo $pResUrl; ?>images/awarded.jpg"></dd>
  </dl>
  <div class="asc-message">
    <h2>Get a faster, cleaner and more secure PC with NEW ASC9 PRO!</h2>
    <dl>
      <dd>Boost Internet up to 300% Faster</dd>
      <dd>Double the Speed of Your Slow PC *</dd>
      <dd>Auto RAM Clean & Auto Online Privacy Trace Clean <sup>New</sup></dd>
      <dd>One-click Cleaning and Fixing All Kinds of PC Problems</dd>
      <dt><a href="javascript:void(0);" onclick="goTaget($('.comparison_table'))">Learn more about PRO edition></a></dt>
    </dl>
    <div class="asc-img-box">
      <img src="<?php echo $pResUrl; ?>images/asc-box.jpg" alt="">
      <span></span>
    </div>
  </div>
  <div class="clear"></div>
  <div class="footer-sold">
    <div class="img-box"><img src="<?php echo $pResUrl; ?>images/smail-asc.png" alt="" class="asc"></div>
      <span class="message">
        <b>3 PCs </b>/ 1 Year <del>$89.97</del> <strong><i>$</i>19.99</strong>
      </span>
      <span class="add"></span>
      <ul>
        <li><b>3 PCs</b> Extra 1 month <span>$<strong>0</strong> <del>$9.99</del></span></li>
        <li><b>3 PCs</b> Extra 1 month <span>$<strong>0</strong> <del>$9.99</del></span></li>
      </ul>
      <dl>
        <dt>
          <del>$109.95</del> <strong><span>$</span>19.99</strong>
        </dt>
        <dd>
          <a href="http://www.iobit.com/buy.php?product=asc93pc14m&ref=<?php echo $ref2;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'christmas2015-en-aff');" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>Get It Now</a>
          <strong>3 PCs</strong> / 14 Months
        </dd>
      </dl>
  </div>
  <!--payment-->
	<ul class="payment">
  	<li>Accepted Payments  <br> <img src="<?php echo $pResUrl; ?>images/payments.jpg"></li>
    <li>Money Back Guarantee  <br> <img src="<?php echo $pResUrl; ?>images/guarantee.jpg"></li>
    <li>Secure Payment  <br> <img src="<?php echo $pResUrl; ?>images/payment.jpg"></li>
  </ul>
</div>
<div class="clear"></div>
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
    <div class="wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th colspan="2">See what PRO edition can do for you:</th>
            <th class="itemb"><span>Advanced SystemCare Free</span></th>
            <th class="itema"><span>Advanced SystemCare PRO</span><br>
            <p> 14 Months / 1 PC</p></th>
            <th class="itemb">
              <span>Advanced SystemCare PRO</span>
              <p>14 Months / 3 PCs</p>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_01.png"></td>
            <td class="virtue">Basic System Clean, Fix and Optimization</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_02.png"></td>
            <td class="virtue">Ultimate System Tuneup for Top Performance span</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_03.png"></td>
            <td class="virtue">Up to 300% Internet Speedup with Internet Booster</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_04.png"></td>
            <td class="virtue">Real-time Optimization with Active Optimize</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_05.png"></td>
            <td class="virtue">Deep Windows Registry Clean</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_06.png"></td>
            <td class="virtue">Maximum Hard Drive Performance</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_07.png"></td>
            <td class="virtue">Basic Protection from Security Threats</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_08.png"></td>
            <td class="virtue">Full Detection against Security Threats</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_09.png"></td>
            <td class="virtue">Auto Online Privacy Trace Clean with Browser Anti-Tracking</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_15.png"></td>
            <td class="virtue"> Auto RAM Clean on Performance Monitor</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_11.png"></td>
            <td class="virtue">Auto Update to the Latest Version</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_12.png"></td>
            <td class="virtue">Runs in the Background - Install and Forget It</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_13.png"></td>
            <td class="virtue">Fantastic New Skins &amp; Themes</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_14.png"></td>
            <td class="virtue">Free 24/7 Technical Support on demand</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="2"></th>
            <th class="itemb"> <span>FREE</span> <br>
              Your current edition </th>
            <th class="itema"><span>$15.77 </span> <del>$34.97</del><br>
              <p>1 PC / 14 Months</p>
              <a href="http://www.iobit.com/buy.php?product=asc91pc1577&ref=<?php echo $ref1;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'christmas2015-en-aff');" class="tbbuybtn">Activate Now</a>

            </th>
            <th class="itemb"><span>$19.99</span> <del>$109.95</del><br>
             <p><strong>3 PCs</strong> / 14 Months</p>
              <a href="http://www.iobit.com/buy.php?product=asc93pc14m&ref=<?php echo $ref2;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'christmas2015-en-aff');" class="tbbuybtn">Activate Now</a>
              <p>We Recommend</p>
            </th>            
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <div class="annotation">
    <dl class="wrapper">
      <dt>Note:</dt>
      <dd>1*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      <dd>2*.Data may vary based on different system or computer. </dd>
    </dl>
  </div>  
  <div id="footer">
    Copyright © 2005 - 2015 IObit. All Rights Reserved
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
			document.getElementById('counttime').innerHTML = '<li>'+h+'</li><li>'+i+'</li><li>'+s+'</li><li>'+mi+'</li>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();

    function goTaget(target) {
      var Theigth = target.offset().top - 160;
      $("html, body").animate({scrollTop: Theigth}, 'slow');
    }
</script> 
</div>
</body>
</html>
