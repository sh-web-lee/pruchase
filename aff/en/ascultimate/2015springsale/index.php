<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../../';
	}
	include $pRootUrl.'include/common.inc.php';
	function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
  $buyNum = ceil(microtime_float()*1000/20000)-68799080;

//  禁止ADN缓存
  header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
  header('Cache-Control: no-cache, must-revalidate');
  header('Pragma: no-cache');

//  主要内容
  if (empty($_GET['ref'])) $_GET['ref'] = 'ascu7';
  // 折扣信息
  $discountListArr = array(
    // 折扣比例、价格、购买链接标签
    '6m' => array('90', '$9.99', 'ascu8pf-6m'), // 到期大于6个月 pro2
    '6' => array('85', '$12.99', 'ascu8pf-6'), // 到期小于6个月 pro1
    'default' => array('70', '$29.99', 'ascu8pf'),
    'title' => array(
      'um7trial' => array(
        '6m' => 'Our Gift Pack - Exclusive for Advanced SystemCare PRO User!',
        '6' => 'Our Gift Pack - Exclusive for Advanced SystemCare PRO User!',
        'default' => 'Activate Now to Get 3 Secured PCs and Our Gift Pack!'
      ),
      'um7trial2' => array(
        '6m' => 'Exclusive for Advanced SystemCare PRO User – Activate before Trial Expiring!',
        '6' => 'Exclusive for Advanced SystemCare PRO User – Activate before Trial Expiring!',
        'default' => 'Activate Now to Get Our Gift Pack before Trial Expiring!'
      ),
      'um7expire' => array(
        '6m' => 'Trial expired. Get Gift Pack Exclusive for Advanced SystemCare PRO User!',
        '6' => 'Trial expired. Get Gift Pack Exclusive for Advanced SystemCare PRO User!',
        'default' => 'Trial expired. Activate Now to Get Our Gift Pack!'
      ),
      'um7pro2' => array('default' => 'Your license has expired. Activate Now to Get 3 Secured PCs and Our Gift Pack!'),
      'ascum7' => array('default' => 'Your PC&acute;s Ultimate Protection and Ultimate Performance!'),
      'default' => 'Your PC&acute;s Ultimate Protection and Ultimate Performance!'
    )
  );

$cd = strtolower($_GET['cd']);
$discountArr = $discountListArr[$cd] ? $discountListArr[$cd] : $discountListArr['default'];
$discount = $discountArr[0];
$price = $discountArr[1];
$buyTag = $discountArr[2];

$ref = strtolower($_GET['ref']);
$title = $discountListArr['title'][$ref] ? $discountListArr['title'][$ref][$cd] ? $discountListArr['title'][$ref][$cd] : $discountListArr['title'][$ref]['default'] : $discountListArr['title']['default'];

if ($_POST['action'] == 'getDiscount') exit($discount.'|'.$price.'|'.$buyTag);

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
	<title>Activate ASC Ultimate for 3 PCs with big discount, and get free gifts!</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>css/style.css"/>
	<?php echo $gJavascript['public'];?>
	<script type="text/javascript">
  function getDiscountInfo(codeType){
    $.ajax({
      type : 'post',
      url : './index.php?cd='+codeType,
      timeout: 5000,
      dataType : 'text',
      data : 'action=getDiscount',
      error : function() {getDiscountInfo()},
      success : function(discount) {
        discountArr = discount.split('|');
        // $('#discount1').text(discountArr[0]);
        $('#discount1').attr('class', 'discount discount_'+discountArr[0]);
        $('#discount2').text(discountArr[0]);
        $('#money1').text(discountArr[1]);
        $('#money2').text(discountArr[1]);
        $('#money3').text(discountArr[1]);
        buyUrl = 'http://www.iobit.com/buy.php?product='+discountArr[2]+'&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu';
        $('#buyUrl1').attr('href', buyUrl);
        $('#buyUrl2').attr('href', buyUrl);
        $('#buyUrl3').attr('href', buyUrl);
        $('#reportMessage').text('Dear PRO user, please enjoy your sole discount.');
        $('#discountCode').removeAttr('disabled');
        $('#discountSubmit').removeAttr('disabled');
      }
    });
  }
  function getDiscount(){
    var code = MApp(2.2).packages.trim($('#discountCode').val());
    if (!MApp(2.2).check.isCode(code)){
      $('#reportMessage').text('Your license is not valid. Please confirm and type it again.');
      $('#discountCode').removeAttr('disabled');
      $('#discountSubmit').removeAttr('disabled');
      return;
    }
    // Disabled user input
    $('#errormsg').html('&nbsp;');
    $('#discountCode').attr('disabled', 'disabled');
    $('#discountSubmit').attr('disabled', 'disabled');
    // Get code type
    $.ajax({
      type : 'post',
      url : '../../../../en/ascu/discount.php',
      timeout: 5000,
      dataType : 'text',
      data: 'action=query&code='+code,
      error : function() {getDiscount()},
      success : function(codeType){
        if (codeType == '6' || codeType == '6m' || codeType == 'other'){
          // Get discount info
          getDiscountInfo(codeType);
        } else {
          $('#reportMessage').text('Your license is not valid. Please confirm and type it again.');
          $('#discountCode').removeAttr('disabled');
          $('#discountSubmit').removeAttr('disabled');
        }
      }
    });
  }
  </script>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function decreasingPacks(){
      $.ajax({
        type: "GET",
        url: "index.php",
        data: "action=getPacks&r="+Math.random(),
        success: function(packs){
          $('#packs').html(packs+' Packs');
          setTimeout('decreasingPacks()', 10000);
        }
      });
    }
    setTimeout('decreasingPacks()', 10000);
  </script>
</head>
<body>
	<div id="main" class="main">
		<div class="wrapper">
			<div id="head">
				<div id="discount1" class="discount discount_<?php echo $discount; ?>"></div>	
			  <img src="<?php echo $pResUrl; ?>img/giftpack.jpg" alt="" class="giftpack">
			  <div class="headinfo">
				 	<h1>Spring Big Sale</h1>
				 	<dl class="guarantee clearfix">
				 		<dt><img src="<?php echo $pResUrl; ?>img/guarantee-moneyback.jpg" alt=""></dt>
				 		<dd>Activate ASC Ultimate for 3 PCs today, get Protected Folder for FREE for better privacy protection! </dd>
				 	</dl>
				 	<ul class="purchase-info">
				 		<li class="price">Today: <strong id="money1"><?php echo $price; ?></strong>  <del>$109.93</del></li>
				 		<li><a id="buyUrl1" href="http://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', '2015springsale-en-aff');" class="activebtn large"><span><i></i>Activate Now</span></a></li>
				 		<li><em id="packs"><?php echo $packsNum; ?> Packs</em> Left Today!</li>
				 		<li><em><?php echo $buyNum;?></em> people activated!</li>
				 		<li id="counttime" class="countdown"><span>02</span>:<span>02</span>:<span>02</span><em>222</em><sub>1*</sub></li>
				 	</ul>
			 	</div>
			</div>
			<div class="intro clearfix">
				<h3><?php echo $title; ?></h3>
				<img src="<?php echo $pResUrl; ?>img/product-intro.jpg" alt="" class="introimg">
				<dl class="info">
					<dt>What you can get by <br><span>activating</span> ASCU PRO edition:</dt>
					<dd>An always-on, automated, and all-in-one protection against all kinds of viruses, system slow down, freeze and crash. It's your best solution for security and performance.</dd>
					<dd><img src="<?php echo $pResUrl; ?>img/au-awards.jpg" alt=""></dd>
					<dd class="nobg"><small><a href="javascript:void(0);" onclick="scrollto($('#compare'));">Learn more about PRO edition >></a></small></dd>
				</dl>
			</div>
			<div class="pack-intro">
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>img/intro-add-pcs.jpg" alt=""></dt>
					<dd class="price">$0 <del>$39.99</del></dd>
					<dd><strong>Additional 2 PCs Supported</strong></dd>
					<dd>Advanced SystemCare Ultimate license supports additional 2 PCs so you can share it with your family & friends!</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>img/intro-box-pf.jpg" alt=""></dt>
					<dd class="price">$0 <del>$19.95</del></dd>
					<dd><strong>Protected Folder</strong></dd>
					<dd>No Worries of Data Theft or Privacy Leaks!</dd>
				</dl>
			</div>
			<div class="purchase-info middle">
				<dl class="discribe">
          <dt>Activate Advanced SystemCare Ultimate today, Get 2 Additional Secured PCs and Protected Folder for FREE. Offer limited for New Year Celebration!</dt>
          <dd class="note">Or you can enter Advanced SystemCare PRO license to redeem a bigger discount!</dd>
          <dd>
            <input type="text" id="discountCode" class="sntext" />
            <button id="discountSubmit" onclick="getDiscount();ga('send', 'event', 'ascuclick', 'click', 'ascupurchase');"class="clickbtn">Update Cart</button>
          </dd>
          <dd class="errmsg" id="reportMessage">&nbsp;</dd>
        </dl>
				<ul class="pay-info">
					<li class="price">Today: <strong id="money2"><?php echo $price; ?></strong>  <del>$109.93</del></li>
					<li><a id="buyUrl2" href="http://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', '2015springsale-en-aff');" class="activebtn large middle"><span><i></i>Act now and SAVE <?php echo $discount; ?>%!</span></a></li>
					<li id="counttime1" class="countdown"><span>02</span>:<span>02</span>:<span>02</span><em>222</em><sub>1*</sub></li>
				</ul>
			</div>
			<div class="reviews">
				<div class="media_rev">
					<h3>Media Review</h3>
	        <dl>
          <dt><img src="<?php echo $pResUrl; ?>img/addictivetips.jpg" alt="" /></dt>
          <dd>"Advanced SystemCare Ultimate 8 is a powerful anti-virus and system optimization tool. Apart from protecting your PC from malware, viruses and similar threats, it can also boost your PC's performance by applying various registry and shortcut fixes, removing junk files, scanning local disk volumes for system vulnerabilities, etc." <span>- Addictivetips</span></dd>
        </dl>				
				</div>
				<div class="user_rev" id="user_rev">
	        <div class="content">
	          <h3>User Review</h3>
	          <dl class="show">
            <dd><h4>"Advanced System Care Ultimate is the new mother load. The big winner!"</h4></dd>
            <dd>"I have had a past problem of always messing with my computer. Then I got my first copy of Advanced Systemcare. There is no need to mess around any longer. Now that I have antivirus, included in the product, my need for secondary software is none existent. Advanced System Care Ultimate is the new mother load. The big winner! My computer is always up to date and runs like deer. Unlike other products; there has not been a constant stream of conflicts."</dd>
          </dl>
          <dl class="hidden">
            <dd><h4>"I recommend advanced systemcare ultimate as their antivirus/system optimizer."</h4></dd>
            <dd>"On the past version of advanced systemcare ultimate, i had no problem on almost everything, system, malwares, etc. and now, it's updated, more features on it will make my laptop run 5x faster than before. i also like the new skin of it. so next time i fix other's computer, i recommend advanced systemcare ultimate as their antivirus/system optimizer."</dd>
          </dl>
	        </div>
	        <ul class="users">
	          <li class="current"><img src="<?php echo $pResUrl; ?>img/rod_garnett.jpg" alt="" />Rod Garnett<br />2012</li>
	          <li><img src="<?php echo $pResUrl; ?>img/dareen_lim.jpg" alt="" />Dareen Lim<br />2013</li>
	        </ul>
      	</div>
			</div>
			<div class="comparison_table" id="compare">
				<h4>Why Choose Advanced SystemCare Ultimate 8?</h4>
	      <div id="hidetab">
	        <dl class="comtable">
	          <dt><span>Better Protection</span>, and <span>No Performance Lag</span> Anymore. See Comparison below</dt>
	          <dd><img src="<?php echo $pResUrl; ?>img/comparetable.jpg"  /></dd>
	        </dl>
	        <dl class="comlist">
	          <dt>Unrivaled Detection Rate and Maximum Protection</dt>
	          <dd>One click to clean hidden and stubborn Viruses, Trojans, worms, spyware, adware and various malware. Advanced SystemCare Ultimate 8 also provides an always-on, automated, and proactive protection against all kinds of Internet security threats, with rapid virus database updating.</dd>
	          <dt>Enjoy Confident Security without System Slowdown </dt>
	          <dd>Your system runs at its top speed without any performance lag, due to our industry-leading Internet security technology.</dd>
	          <dt>Safe Surf, Search, Download and Share with Confidence</dt>
	          <dd>Proactive Virus Control technology monitors processes behavior in real-time, scans files shared with email and blocks possible threats. Unmatched detection rate assures you a safer environment while using your PC.</dd>
	          <dt>Get Highly-tuned Performance and Enjoy the New PC Feeling</dt>
	          <dd>Already proven powerful PC tune-up ability unleashes the full power of your PC. With Real-time optimization and ActiveBoost feature, system resources are intelligently managed to ensure you a super-fast PC.</dd>
	        </dl>
	      </div>
			</div>
			<dl class="annotation">
	      <dt>Note:</dt>
	      <dd>1*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
	    </dl>
	    <p class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
		<div class="floatlayer" id="floatlayer">
      <div class="wrapper">
      	<dl class="left">
	        <dt>Save <span id="discount2"><?php echo $discount; ?></span>% Enjoy Ultimate Protection and Ultimate Performance!</dt>
	        <dd><em><?php echo $buyNum; ?></em> people activated</dd>
	        <dd id="counttime2" class="countdown"><span>02</span>:<span>02</span>:<span>02</span><em>222</em><sub>1*</sub></dd>
	      </dl>
	      <dl class="checkarea">
	        <dt>Today: <span id="money3"><?php echo $price; ?></span> <del>Original: $109.93</del></dt>
	        <dd><a id="buyUrl3" href="http://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', '2015springsale-en-aff');" class="activebtn small top"><span><i></i>Activate Now</span></a></dd>
	      </dl>
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
	</div>
	<script>
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
      //      
    }); 
    function scrollto(target) {
			var targetHeight =  target.offset().top - 140;
			$('html,body').stop(true,true).animate({scrollTop: targetHeight}, "slow");
		}
		$(document).ready(function() {
			 $(window).on('scroll', function () {
          var scrollHeight = $("#head .activebtn").offset().top;
          if ($(window).scrollTop() > scrollHeight) {
              $('#floatlayer').addClass('on');
          } else {
              $('#floatlayer').removeClass('on');
          }
	      }); 
		});

		function cycleCountdown(){
			var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
			var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
			d = MApp(2.2).packages.zeroize(datetime[0], 2);
			h = MApp(2.2).packages.zeroize(datetime[1], 2);
			i = MApp(2.2).packages.zeroize(datetime[2], 2);
			s = MApp(2.2).packages.zeroize(datetime[3], 2);
			mi = MApp(2.2).packages.zeroize(datetime[4], 3);
			document.getElementById('counttime').innerHTML = '<span>'+h+'</span>:<span>'+i+'</span>:<span>'+s+'</span><em>'+mi+'</em> <sub>1*</sub>';
			document.getElementById('counttime1').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em> <sub>1*</sub>';
			document.getElementById('counttime2').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em> <sub>1*</sub>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();
        setTimeout('window.location.href="https://purchase.iobit.com/aff/en/ascultimate/2020anniversarysale/index.php'+location.search+'"',5000);
	</script>
</body>
</html>