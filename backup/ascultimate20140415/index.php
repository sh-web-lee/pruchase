<?php
//	初始化
	error_reporting(0);
	define('IObit', 'IObit');
	$pRootUrl = '../';
	include '../include/common.inc.php';
	
//	禁止ADN缓存
	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	header('Cache-Control: no-cache, must-revalidate');
	header('Pragma: no-cache');

//	主要内容
	if (empty($_GET['ref'])) $_GET['ref'] = 'ascu7';
	// 折扣信息
	$discountListArr = array(
		// 折扣比例、价格、购买链接标签
		'6m' => array('90', '$9.99', 'ascupf-6m'), // 到期大于6个月 pro2
		'6' => array('85', '$12.99', 'ascupf-6'), // 到期小于6个月 pro1
		'default' => array('70', '$29.99', 'ascupf'),
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
			'ascum7' => array('default' => 'Your PC’s Ultimate Protection and Ultimate Performance!'),
			'default' => 'Your PC’s Ultimate Protection and Ultimate Performance!'
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Celebration of ASC Ultimate 2nd Birthday</title>
<link type="text/css" rel="stylesheet" href="./style/style.css" />
<?php echo $gJavascript['public'];?>
<script type="text/javascript">
$(function(){
	$(window).scroll(function(){
		var sh = $(document).scrollTop();
		if (sh>200){
			$('#floatlayer').fadeIn(1000);
		} else if (sh<200) {
			$('#floatlayer').fadeOut(1000);
		}
	});
});

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
			$('#discount').text(discountArr[0]);
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
		url : './discount.php',
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
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="main">
  <div class="floatlayer" id="floatlayer">
    <div class="moneyback"> You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's performance WITHIN 60 DAYS, or we'll send you a full refund. No questions asked. <a id="buyUrl3" href="http://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu">Upgrade Now</a> </div>
    <div class="btn"> <span>Original <del>$109.93</del> Now <a id="money2"><?php echo $price; ?></a></span> <a id="buyUrl2" href="http://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu" title="Purchase  Advanced SystemCare Ultimate to get Protected Folder for FREE." class="checkbtn">Checkout >></a>
      <div class="countdown" id="counttime1"><span>0</span>d: <span>0</span>h: <span>0</span>m: <span>0</span>s <em>000</em></div>
    </div>
  </div>
  <div class="head">
    <div id="lang"><span id="google_translate_element"></span> </div>
    <div class="logo"><a href="http://www.iobit.com"></a></div>
    <div class="discount">Save <span id="discount"><?php echo $discount; ?></span>%, Get Ultimate Protection for Your Families' PCs!</div>
    <div id="counttime" class="countdown"><span class="day">00</span><span class="hor">00</span><span class="min">00</span><span class="sec">00</span><span class="minsec">999</span></div>

  </div>
  <div class="mbody">
    <h1><?php echo $title; ?></h1>
    <div class="procdetail">
      <div class="salebox"> <span class="iconsale"></span>
        <dl>
          <dt><div id="money3"><?php echo $price; ?></div></dt>
          <dd class="intro"><span>Advanced SystemCare Ultimate 7</span>An always-on, automated, and all-in-one protection against all kinds of viruses, system slow down, freeze and crash. It’s your best solution for security and performance.</dd>
          <dd class="procawards"><img src="img/product_awards.png" alt="" /></dd>
          <dd class="txtlink"><a href="#compare">Why choose Advanced SystemCare Ultimate?</a></dd>
        </dl>
      </div>
      <div class="freebox"> <span class="iconfree"></span>
        <dl>
          <dt><img src="img/2pices_r.png" alt="" /></dt>
          <dd><span>Additional 2 PCs Supported</span>Advanced SystemCare Ultimate license supports additional 2 PCs so you can share it with your family& friends!</dd>
        </dl>
      </div>
      <div class="freebox" style="margin-top:15px;"> <span class="iconfree"></span>
        <dl>
          <dt><img src="img/box_pf.png" alt="" /></dt>
          <dd><span>Protected Folder </span>No Worries of Data Theft or Privacy Leaks!</dd>
        </dl>
      </div>
    </div>
    <div class="pricebox">
      <table cellpadding="0" cellspacing="0" width="100%" class="pricetab">
        <tr>
          <td width="600"><dl class="discribe">
              <dt>Activate Advanced SystemCare Ultimate today, Get 2 Additional Secured PCs and Protected Folder for FREE.</dt>
              <dd class="note">Or you can enter Advanced SystemCare PRO license to redeem a bigger discount!</dd>
              <dd>
                <input type="text" id="discountCode" class="sntext" />
                <input type="button" id="discountSubmit" onclick="getDiscount();" value="Update Cart" class="clickbtn" />
              </dd>
              <dd class="errmsg" id="reportMessage">&nbsp;</dd>
            </dl></td>
          <td width="240"><div class="buyarea">
              <div class="count">
                <?php
                function microtime_float(){
					list($usec, $sec) = explode(' ', microtime());
					return ((float)$usec + (float)$sec);
				}
				echo ceil(microtime_float()*1000/20000)-68799080;
				?>
              </div>
              <div class="giftbox"><img src="img/giftbox.png" alt="" /></div>
              <a id="buyUrl1" href="http://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu" class="buybtn" title="Purchase  Advanced SystemCare Ultimate to get Protected Folder for FREE.">Activate Now</a> <span>Today <em id="money1"><?php echo $price; ?></em> <del>$109.99</del></span> </div></td>
          <td width="80"><img src="img/moneyback.png" alt="" /></td>
        </tr>
      </table>
    </div>
    <div class="clear"></div>
    <div class="usersaying">
      <h2 class="mb10">Customer Review</h2>
      <div class="boxa" style="margin-top:0;">
        <h3>"Advanced System Care Ultimate is the new mother load. The big winner! "</h3>
        <dl class="user">
          <dt><img src="img/rod_garnett.jpg" alt=""/></dt>
          <dd>Rod Garnett</dd>
          <dd>2012</dd>
        </dl>
        <dl class="quit">
          <dt><img alt="quote" src="img/quote.png"></dt>
          <dd>I have had a past problem of always messing with my computer. Then I got my first copy of Advanced Systemcare. There is no need to mess around any longer. Now that I have antivirus, included in the product, my need for secondary software is none existent. Advanced System Care Ultimate is the new mother load. The big winner! My computer is always up to date and runs like deer. Unlike other products; there has not been a constant stream of conflicts."</dd>
        </dl>
      </div>
      <div class="boxb" style="margin-top:0;">
        <h3>"I recommend advanced systemcare ultimate as their antivirus/system optimizer."</h3>
        <dl class="user">
          <dt><img src="img/dareen_lim.jpg" alt=""/></dt>
          <dd>Dareen Lim</dd>
          <dd>2013</dd>
        </dl>
        <dl class="quit">
          <dt><img alt="quote" src="img/quote.png"></dt>
          <dd>On the past version of advanced systemcare ultimate, i had no problem on almost everything, system, malwares, etc. and now, it's updated, more features on it will make my laptop run 5x faster than before. i also like the new skin of it. so next time i fix other's computer, i recommend advanced systemcare ultimate as their antivirus/system optimizer."</dd>
        </dl>
      </div>
      <div class="clear"></div>
    </div>
    <div class="comparison_table" id="compare">
      <h4>Why Choose Advanced SystemCare Ultimate 7?</h4>
      <div id="hidetab">
        <dl class="comtable">
          <dt><span>Better Protection</span>, and <span>No Performance Lag</span> Anymore. See Comparison below</dt>
          <dd><img src="img/comparetable.png"  /></dd>
        </dl>
        <dl class="comlist">
          <dt>Unrivaled Detection Rate and Maximum Protection</dt>
          <dd>One click to clean hidden and stubborn Viruses, Trojans, worms, spyware, adware and various malware. Advanced SystemCare Ultimate 7 also provides an always-on, automated, and proactive protection against all kinds of Internet security threats, with rapid virus database updating.</dd>
          <dt>Enjoy Confident Security without System Slowdown </dt>
          <dd>Your system runs at its top speed without any performance lag, due to our industry-leading Internet security technology.</dd>
          <dt>Safe Surf, Search, Download and Share with Confidence</dt>
          <dd>Proactive Virus Control technology monitors processes behavior in real-time, scans files shared with email and blocks possible threats. Unmatched detection rate assures you a safer environment while using your PC.</dd>
          <dt>Get Highly-tuned Performance and Enjoy the New PC Feeling</dt>
          <dd>Already proven powerful PC tune-up ability unleashes the full power of your PC. With Real-time optimization and ActiveBoost feature, system resources are intelligently managed to ensure you a super-fast PC.</dd>
        </dl>
      </div>
    </div>
    <div style="height:80px;"></div>
  </div>
  <div class="footer"></div>
</div>
<?php echo $gJavascript['foot']; ?> 
<script type="text/javascript">
function cycleCountdown(){
	var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
	document.getElementById('counttime').innerHTML = '<span class="day">'+d+'</span><span class="hor">'+h+'</span><span class="min">'+i+'</span><span class="sec">'+s+'</span><span class="minsec">'+mi+'</span>';
	document.getElementById('counttime1').innerHTML = '<span>'+d+'</span>d: <span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em>';
}
setInterval("cycleCountdown()", 1);
</script>
</body>
</html>