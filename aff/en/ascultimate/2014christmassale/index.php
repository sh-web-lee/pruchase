<?php
//  初始化
  error_reporting(0);
  define('IObit', 'IObit');
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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
        $('#discount1').text(discountArr[0]);
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
<div class="main">
  <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <div class="bodytop">
    <div class="wrapper">
      <div class="header clearfix"> 
        <a href="http://www.iobit.com" class="logo" target="_blank"></a> 
        <span class="discount"><?php echo $discount; ?></span>       
      </div> 
      <div class="intro">
        <div class="introduce">
          <dl class="introtitle">
            <dt>Save <span><em id="discount1"><?php echo $discount; ?></em>%</span> on ASC Ultimate & Get Super Gifts for FREE!</dt>
            <dd>Activate ASC Ultimate for 3 PCs today, get FREE X'MAS Gift for your family! <span><em id="packs"><?php echo $packsNum; ?> Packs</em> Left Today!</span></dd>
          </dl>
          <div class="foucs"><img src="<?php echo $pResUrl; ?>img/giftpack.jpg"></div>
        </div>
        <div class="control">
          <div id="counttime" class="counttime"><span>00</span><span>00</span><span>00</span><em>000</em><sub>①</sub></div>
          <ul>
            <li class="name">Ultimate PC Protection</li>
            <li class="price">Today <span id="money1"><?php echo $price; ?></span></li>
            <li class="original">Original: <span>$109.99</span></li>
            <li class="link"><a class="activebtn" id="buyUrl1" href="http://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', '2014christmas-en-aff');" title="Purchase  Advanced SystemCare Ultimate to get Protected Folder for FREE.">Activate Now</a></li>
            <li class="people"><span><?php echo $buyNum; ?></span> people activated</li>
            <li class="subscription">1 year subscription  / <span>3 PCs</span></li>
          </ul>
        </div>
      </div>
      <div class="leftsharp"></div>
      <div class="rightsharp"></div>
    </div>
    <div class="snowcover"></div>
  </div>
  <div class="middle">
    <div class="wrapper">
      <h3 class="corssname"><?php echo $title; ?></p>
      </h3>
      <div class="benfits clearfix">
        <div class="left">
          <div class="boxshot"><img src="<?php echo $pResUrl; ?>img/ascubox_small.jpg" alt="" /></div>
          <dl>
              <dt>Advanced SystemCare Ultimate 7:</dt>
              <dd>An always-on, automated, and all-in-one protection against all kinds of viruses, system slow down, freeze and crash. It's your best solution for security and performance.</dd>
              <dd><img src="<?php echo $pResUrl; ?>img/product_awards.png"></dd>
              <dd class="edition"><a href="#compare">See more about PRO edition >></a></dd>
              <dd class="sale"></dd>
          </dl>
        </div>
        <div class="right">
          <dl class="clearfix">
            <dt><img src="<?php echo $pResUrl; ?>img/additional2pc.jpg"></dt>
              <dd class="name">Additional 2 PCs Supported</dd>
              <dd>Advanced SystemCare Ultimate license supports additional 2 PCs so you can share it with your family &amp; friends!</dd>
              <dd class="free"></dd>
          </dl>
          <dl class="end clearfix">
            <dt><img src="<?php echo $pResUrl; ?>img/boxshot_pf.jpg"></dt>
              <dd class="name">Protected Folder </dd>
              <dd>No Worries of Data Theft or Privacy Leaks!</dd>
              <dd class="free"></dd>
          </dl>
        </div>
      </div>
      <div class="payarea clearfix">
        <div class="left">
          <dl class="discribe">
            <dt>Activate Advanced SystemCare Ultimate today, Get 2 Additional Secured PCs and Protected Folder for FREE.</dt>
            <dd class="note">Or you can enter Advanced SystemCare PRO license to redeem a bigger discount!</dd>
            <dd>
              <input type="text" id="discountCode" class="sntext" />
              <input type="button" id="discountSubmit" onclick="getDiscount();" value="Update Cart" class="clickbtn" />
            </dd>
            <dd class="errmsg" id="reportMessage">&nbsp;</dd>
          </dl>
        </div>
        <dl class="link">
          <dt><span><?php echo $buyNum; ?></span> people activated</dt>
          <dd><a class="activebtn" id="buyUrl2" href="http://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', '2014christmas-en-aff');" title="Purchase  Advanced SystemCare Ultimate to get Protected Folder for FREE.">activate now</a></dd>
        </dl>
        <dl class="right">
          <dt>Now <span id="money2"><?php echo $price; ?></span></dt>
          <dd>Valued at <span>$109.99</span></dd>
        </dl>
      </div>
      <div class="payment"><img src="<?php echo $pResUrl; ?>img/payment.jpg" alt="" /></div>
      <dl class="awards">
        <dt>Product Awards</dt>
        <dd><img src="<?php echo $pResUrl; ?>img/awards.jpg"></dd>
      </dl>
    </div>    
  </div>
  <div class="review">
    <div class="wrapper">
      <div class="media_rev">
        <h3>Media Review</h3>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>img/addictivetips.jpg" alt="" /></dt>
          <dd>"Advanced SystemCare Ultimate 7 is a powerful anti-virus and system optimization tool. Apart from protecting your PC from malware, viruses and similar threats, it can also boost your PC's performance by applying various registry and shortcut fixes, removing junk files, scanning local disk volumes for system vulnerabilities, etc." <span>- Addictivetips</span></dd>
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
  </div>
  <div class="comparison_table">
    <div class="wrapper">
      <h4>Why Choose Advanced SystemCare Ultimate 7?</h4>
      <div id="hidetab">
        <dl class="comtable">
          <dt><span>Better Protection</span>, and <span>No Performance Lag</span> Anymore. See Comparison below</dt>
          <dd><img src="<?php echo $pResUrl; ?>img/comparetable.jpg"  /></dd>
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
 </div>
  <div class="annotation">
    <dl class="wrapper">
      <dt>Note:</dt>
      <dd>①.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
    </dl>      
  </div>
  <div class="copy">
    <div class="wrapper">
      Copyright &copy; 2005 - <?php echo date('Y')?> IObit. All Rights Reserved
    </div>      
  </div>
  <div id="float">
    <div class="wrapper">
        <dl class="padinfo">
            <dt>Save <span><em id="discount2"><?php echo $discount; ?></em>%</span> Enjoy Ultimate Protection and Ultimate Performance!</dt>
            <dd><span><?php echo $buyNum; ?></span> people activated</dd>
            <dd class="counttime" id="counttime1"><span>00</span><span>00</span><span>00</span><em>000</em><sub>①</sub></dd>
        </dl>
        <dl class="paybox">
            <dt>Only<span id="money3"><?php echo $price; ?></span> <del>Original:$109.93</del></dt>
            <dd><a id="buyUrl3" href="http://www.iobit.com/buy.php?product=<?php echo $buyTag; ?>&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu"  onclick="ga('send', 'event', 'ascubuy', 'buy', '2014christmas-en-aff');" class="activebtn">Activate Now</a></dd>
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
  <script type="text/javascript">
      $(function () {
          //$(".middle .placeholder").height($(".bodytop").outerHeight());
          $("#user_rev .users li").mouseover(function(event) {
            var num = $(this).index();
            console.log(num);
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
          $(window).on('scroll',function(){
          if ($(window).scrollTop() > $('.control').outerHeight()) {
            $('#float').addClass('on');
          }else{
            $('#float').removeClass('on');
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
        document.getElementById('counttime').innerHTML = '<span>'+h+'</span><span>'+i+'</span><span>'+s+'</span><em>'+mi+'</em><sub>①</sub>';
        document.getElementById('counttime1').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em><sub>①</sub>';
        //document.getElementById('counttime2').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em><sub>①</sub>';
        setTimeout('cycleCountdown()', 1);
      }
      cycleCountdown();
      setTimeout('window.location.href="https://purchase.iobit.com/aff/en/ascultimate/2020anniversarysale/index.php'+location.search+'"',5000);
  </script> 
    <?php echo $gJavascript['foot']; ?>
</div>
</body>
</html>