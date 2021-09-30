<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enffascuanni_p' . $date;
  $c_name_t='enffascuanni_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(156,200);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) -68807174;
$buyNum = number_format($buyNum);
//  禁止ADN缓存
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');

//  主要内容
//if (empty($_GET['ref'])) $_GET['ref'] = 'en-ascu3pciusdpf';
if (empty($_GET['ref'])) {
   $_GET['ref'] = 'enaff_ascu13_2020anniversarysale';
   // $_GET['ref2'] = 'enaff-ascu3pciusdpf2699pop';
}

// $refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);

if(!empty($_GET['pop'])){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
// $refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
// 折扣信息
$discountListArr = array(
  // 折扣比例、价格、购买链接标签
    '6m' => array('80', '$9.99', 'enaff-ascu13iusdpf999', '-$40', 'enff-ascu13iusdpf999'.$refStr, 'ascu13999', 'enff-ascu13soldout999'.$refStr), // 到期大于6个月 pro2
    '6' => array('74', '$12.99', 'enaff-ascu13iusdpf1299', '-$37', 'enff-ascu13iusdpf1299'.$refStr, 'ascu131299', 'enff-ascu13soldout1299'.$refStr), // 到期小于6个月 pro1
    'default' => array('40', '$29.99', 'enaff-ascu13iusdpf', '-$20','enff-ascu13iusdpf2999'.$refStr,'ascu13','enff-ascu13soldout2999'.$refStr),
    'title' => array(
        'um10trial' => array(
            '6m' => 'Our Gift Pack - Exclusive for Advanced SystemCare PRO User!',
            '6' => 'Our Gift Pack - Exclusive for Advanced SystemCare PRO User!',
            'default' => 'Activate Now to Get 3 Secured PCs and Our Gift Pack!'
        ),
        'um10trial2' => array(
            '6m' => 'Exclusive for Advanced SystemCare PRO User – Activate before Trial Expiring!',
            '6' => 'Exclusive for Advanced SystemCare PRO User – Activate before Trial Expiring!',
            'default' => 'Activate Now to Get Our Gift Pack before Trial Expiring!'
        ),
        'um10expire' => array(
            '6m' => 'Trial expired. Get Gift Pack Exclusive for Advanced SystemCare PRO User!',
            '6' => 'Trial expired. Get Gift Pack Exclusive for Advanced SystemCare PRO User!',
            'default' => 'Trial expired. Activate Now to Get Our Gift Pack!'
        ),
        'um10pro2' => array('default' => 'Your license has expired. Activate Now to Get 3 Secured PCs and Our Gift Pack!'),
        'ascum10' => array('default' => 'Your PC&acute;s Ultimate Protection and Ultimate Performance!'),
        'default' => 'Your PC&acute;s Ultimate Protection and Ultimate Performance!'
    )
);

$cd = strtolower($_GET['cd']);
$discountArr = $discountListArr[$cd] ? $discountListArr[$cd] : $discountListArr['default'];
$discount = $discountArr[0];
$price = $discountArr[1];
$buyTag = $discountArr[2];
$reduced = $discountArr[3];
$refActive = $discountArr[4];
$buyTagSold=$discountArr[5];
$refSold=$discountArr[6];

$ref = strtolower($_GET['ref']);

$title = $discountListArr['title'][$ref] ? $discountListArr['title'][$ref][$cd] ? $discountListArr['title'][$ref][$cd] : $discountListArr['title'][$ref]['default'] : $discountListArr['title']['default'];

if ($_POST['action'] == 'getDiscount') exit($discount.'|'.$price.'|'.$buyTag.'|'.$reduced.'|'.$refActive.'|'.$buyTagSold.'|'.$refSold);

$packsNum = ceil(microtime_float()*2000/20000);
$packsNum = 360-($packsNum%360);
if ($_GET['action'] == 'getPacks'){
  echo $packsNum;
  exit;
}

//取消进入页面的折扣
$discount=40;
$price='$29.99';
$buyTag='ascu13pf';
$reduced='-$20';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>40% OFF Advanced SystemCare Ultimate</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getDiscountInfo(codeType){
      $.ajax({
        type : 'post',
        url : './anniversary.php?cd='+codeType+'&<?php echo $_SERVER['QUERY_STRING']?>',
        timeout: 5000,
        dataType : 'text',
        data : 'action=getDiscount',
        error : function() {getDiscountInfo()},
        success : function(discount) {
          discountArr = discount.split('|');
          percent = discountArr[0];
          price = discountArr[1];
          reduced = discountArr[3];
          buyTag=(packs>0)?discountArr[2]:discountArr[5];
          refTag=(packs>0)?discountArr[4]:discountArr[6];
          $('.percent').html(percent);
          $('.banner .img-box').attr('class', 'img-box');
          $('.banner .img-box').addClass("discount"+percent);
          $('.floatlayer  .number h2').attr('class', '');
          $('.floatlayer  .number h2').addClass("discount"+percent);

          $('.prime').html(price);
          $(".reduced").html(reduced);
          var tw = MApp(2.2).datetime.getTimeZone();
          buyUrl = 'https://www.iobit.com/buy.php?product='+buyTag+'&ref='+refTag+'&aff=<?php echo $_GET['aff']; ?>&refs=purchase_ascu&tw='+tw;
          $('.change-buybtn').attr('href', buyUrl);
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
          if (codeType == '6' || codeType == '6m'){
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

    window.setTimeout(function() {
      $(".header #balloon").addClass("on");
    }, 1000);
  </script>
</head>

<body>

<!-- header start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
    <h1>IObit's 15th Anniversary</h1>
    <h2>Take <span class="percent">40</span>% OFF + Free Gift Pack</h2>
    <div class="img-box discount40">
      <img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt="">
      <img src="<?php echo getStaticUrl('images/reduce.png')?>" alt="" class="reduce">
      <div class="number">
        <i class="all-icons"></i><span class="viewNum"><?php echo $viewNum;?></span> watching,
        <div class="countdown countdown1">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>                 
        packs left now!
      </div>
    </div>
    <div class="message">
      <h3>Your Items</h3>
      <p class="nobod">
        <strong>Advanced SystemCare Ultimate 13</strong> <span>$49.99</span>
        <em>1 Year Subscription / 3 PCs </em>
      </p>
      <p>
        <strong><i class="all-icons"></i>Spring Gift Pack </strong> <span>$0</span>
        <em>Hurry, <b class="packsNum">100</b> packs left now! </em>
      </p>
      <p class="off">
        <strong> Subtotal</strong> <span>$49.99</span>
        <strong> <span class="percent"><?php echo $discount; ?></span>% OFF</strong> <span class="reduced">-$20</span>
      </p>
      <p class="last">
        <strong> Total</strong> <span class="prime"><?php echo $price; ?></span>
      </p>
      <dl>
        <dt><a href="https://www.iobit.com/buy.php?product=enaff-ascu13iusdpf&ref=<?php echo $_GET['ref'];?><?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascubuy', 'buy', 'enaffascu132020anniversarysale')" class="buybtn change-buybtn">Activate Now</a></dt>
        <dd><i class="all-icons"></i> 60-day Money Back Guarantee</dd>
      </dl>
      

    </div>
  </div>
</div>
<!-- header end -->
<?php if($_GET['to']=='buyascu'):?>
<div class="descrip  wrapper clearfix">
  <p>A bigger discount for our valued Advanced SystemCare PRO user. Enter your Advanced SystemCare PRO license to redeem it!</p>
  <div class="collection">
    <input id="discountCode">
    <button id="discountSubmit" onclick="getDiscount();ga('send', 'event', 'ascuclick', 'click', 'ascupurchase');">Redeem</button>
    <span id="reportMessage"></span>
  </div>
</div>
<?php endif;?>
<div class="boxshot wrapper">
  <h2>Why Choose the All-in-one Utility Combined Antivirus with Optimizer?</h2>
  <dl>
    <dt> <img src="<?php echo $pResUrl; ?>images/icons-01.png" alt=""> PC Protection</dt>
    <dd>
      <strong>Unrivaled Detection Rate</strong>
      <p>Accurate at detecting threats <br> with Bitdefender engine</p>
    </dd>
     <dd>
      <strong>Real-time Protection</strong>
      <p>Prevent from viruses, ransomware, <br>  spyware, Trojans and more in real time </p>
    </dd>
     <dd>
      <strong>Privacy Security</strong>
      <p>Block secret accesses and hide <br>  your online activities</p>
    </dd>
  </dl>
  <img src="<?php echo $pResUrl; ?>images/boxshot-ascu.png" alt="" class="img-box">
  <dl class="right">
    <dt> <img src="<?php echo $pResUrl; ?>images/icons-02.png" alt=""> PC Optimization</dt>
    <dd>
      <strong>200%* Faster PC</strong>
      <p>Reduce system stutter/lag and speed <br>  up PC up to 200% faster</p>
    </dd>
     <dd>
      <strong>300%* Faster Internet</strong>
      <p>Accelerate download, surfing, gaming, <br>  YouTube viewing up to 300% faster</p>
    </dd>
     <dd>
      <strong>Deeper Clean</strong>
      <p>Fix registry issues to reduce Windows <br>  crashes & error messages</p>
    </dd>
  </dl>
</div>

<div class="gift-message">
  <div class="wrapper">
    <h2>What Will You Get from Spring Gift Pack?</h2>
    <dl>
      <dt>
        <img src="<?php echo getStaticUrl('images/gift-iu.png')?>" alt=""/>
        IObit Uninstaller PRO <br>
        <strong>$0</strong> <del>$19.99</del> 1 Year / 1 PC
      </dt>
      <dd>
        Uninstall Unwanted Plug-ins <br> <strong>for Cleaner PC & Browsing</strong>
      </dd>
    </dl>
    <dl class="center">
      <dt>
        <img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt=""/>
        Smart Defrag PRO <br>
        <strong>$0</strong> <del>$19.99</del> 1 Year / 1 PC
      </dt>
      <dd>
        Maximize Hard Drive Optimization<br> <strong> for Faster PC</strong>
      </dd>
    </dl>
    <dl>
      <dt>
        <img src="<?php echo $pResUrl; ?>images/gift-pf.png" alt="">
        Protected Folder <br>
        <strong>$0</strong> <del>$19.95</del> 1 Year / 1 PC
      </dt>
      <dd>
        No Leak of Important Files <br> <strong> for Secured Privacy</strong>
      </dd>
    </dl>
    <a href="https://www.iobit.com/buy.php?product=enaff-ascu13iusdpf&ref=<?php echo $_GET['ref'];?><?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascubuy', 'buy', 'enaffascu132020anniversarysale');" class="buybtn change-buybtn">Get It Now</a>
    <p><i class="all-icons"></i><span class="viewNum"><?php echo $viewNum;?></span> watching,<strong class="packsNum">100</strong>packs left now!</p>
  </div>
</div>
<!-- comparison start -->
<div class="comparison wrapper">
  <h2>See what PRO edition can do for you?</h2>
  <div class="ctable">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text"></th>
        <th class="space"></th>
        <th class="itemb"><p>PRO</p></th>
      </tr>
      </thead>
      <tbody>
        <tr class="gray">
          <td class="text"><img src="<?php echo $pResUrl; ?>images/icons-03.png" alt=""> Full Protection</td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text">Defend against viruses in real time</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Protect your important files from ransomware</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Protect you from malicious and phishing websites </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Block secret accesses to your identity and privacy</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Capture intruders who attempt to use your computer </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr class="gray">
          <td class="text"><img src="<?php echo $pResUrl; ?>images/icons-04.png" alt=""> Maximum Optimization</td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text">Clean up junk files and useless registries</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Speed your computer up to 200% faster  </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Boost your Internet connection up to 300% faster </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Reduce your Windows crashes & error messages </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
      </tbody>
      <tfoot>
        <th class="text"></th>
        <th class="space"></th>
        <th class="itemb">
          <strong class="prime"><?php echo $price; ?></strong> <del>$49.99</del>
          <a href="https://www.iobit.com/buy.php?product=enaff-ascu13iusdpf&ref=<?php echo $_GET['ref'];?><?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascubuy', 'buy', 'enaffascu132020anniversarysale');" class="buybtn change-buybtn">Activate Now</a>
        </th>
      </tfoot>
    </table>
  </div>
</div>
<!-- comparison end -->
<!-- review -->
<div class="review ">
  <div class="wrapper">
    <h2>What Others Say</h2>
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
<!-- end review -->


<div class="awards ">
  <div class="wrapper">
    <h2>World-wide Awards</h2>
    <p>As being trusted and awarded by those world-class media in the past twelve years, you know you’ve got the right PC antivirus & optimizer.</p>
    <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
  </div>
</div>
<div class="footer">
  <div class="wrapper">
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
        <dd>
          <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
          <p>We’re confident that activating PRO edition will fully protect and optimize your computer for affordable price!</p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>We accept</h4>
        </dd>
        <dt><img src="<?php echo $pResUrl; ?>images/payments.png" alt=""></dt>
      </dl>
    </div>
    <div class="statement">
      <ul>
        <li>Note:</li>
        <li>*.Data may vary based on different system or computer.</li>
        <li>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</li>
      </ul>
    </div>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
</div>
<!-- floatlayer start -->
<div class="floatlayer">
  <div class="wrapper clearfix">
    <div class="img-box"></div>
    <div class="number">
      <div class="countdown countdown2">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
      </div>
      <p><i class="all-icons"></i><b class="viewNum"><?php echo $viewNum;?></b> watching,<span class="packsNum">100</span>packs left now!</p>
    </div>
    <!-- buybtn -->
    <div class="price">
      <p></p>
      <a class="buybtn change-buybtn" href="https://www.iobit.com/buy.php?product=enaff-ascu13iusdpf&ref=<?php echo $_GET['ref'];?><?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascubuy', 'buy', 'enaffascu132020anniversarysale');">
        Get It Now
      </a>
    </div>
  </div>  
</div>
<!-- floatlayer end -->
<div class="popbg hide"></div>
<div class="congrats-pop hide">
  <h2>You've been selected to win our <span>extra 10% OFF!</span></h2>
  <i class="close"></i>
  <div class="img-box"></div>
  <div class="message number">
    <h3>Hurry, this offer is valid in 
      <div class="countdown countdown3">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
      </div><span>s</span>
    </h3>
    <ul>
      <li>
        <span>Original</span> <del>$109.92</del>
      </li>
      <li>
        <span>Sale price </span>  <del>$29.99</del>
      </li>
      <li class="last">
        <span>Special Offer Price</span>   $26.99
      </li>
    </ul>
    <a href="https://www.iobit.com/buy.php?product=enaff-ascu13iusdpf2699&ref=<?php echo $_GET['ref'];?><?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascubuy', 'buy', 'enaffascu132020anniversarysale');" class="buybtn">Get It Now</a>
  </div>
</div>
<div class='popout'><p>ASCU v13 will recognize ASCU v12 license key as <strong>valid for ASCU v13.</strong></p></div>
<script>
refStr="<?php echo $refStr;?>"; 
_ref="<?php echo $_GET['ref'];?>"; 
price="<?php echo $price; ?>";
</script>
<script src="<?php echo $pResUrl; ?>script/modernizr.min.js"></script>
<script src="<?php echo $pResUrl; ?>script/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>