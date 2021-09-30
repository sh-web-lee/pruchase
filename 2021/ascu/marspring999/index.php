<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enascuxmas2020cdm_p' . $date;
  $c_name_t='enascuxmas2020cdm_t' . $date;
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

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) -68807174;
$buyNum = number_format($buyNum);

$ref = strtolower($_GET['ref']);
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);

if(!empty($_GET['pop'])){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>80% OFF Advanced SystemCare Ultimate</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- header start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank"></a>
    <h1>CHRISTMAS SALE</h1>
    <h2><i class="left"></i>Take <span class="percent">80</span>% OFF + Free Gift Pack<i class="right"></i></h2>
    <div class="img-box discount80">
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
        <strong>Advanced SystemCare Ultimate 14</strong> <span>$49.99</span>
        <em>1 Year Subscription / 3 PCs </em>
      </p>
      <p>
        <strong><i class="all-icons"></i>Valuable Gift Pack</strong> <span>$0</span>
        <em>Hurry, <b class="packsNum">100</b> packs left now! </em>
      </p>
      <p class="off">
        <strong> Subtotal</strong> <span>$49.99</span>
        <strong> 80% OFF</strong> <span>-$40</span>
      </p>
      <p class="last">
        <strong> Total</strong> <span class="prime"> $9.99</span>
      </p>
      <dl>
        <dt><a href="https://www.iobit.com/buy.php?product=ascu14iusdpf999&ref=en-ascu3pciusdpfcd6m<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase-999');" class="buybtn change-buybtn">Activate Now</a></dt>
        <dd><i class="all-icons"></i> 60-day Money Back Guarantee</dd>
      </dl>
      

    </div>
  </div>
</div>
<!-- header end -->
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
  <h2>What Will You Get from Valuable Gift Pack?</h2>
  <div class="wrapper clearfix">
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
    <a href="https://www.iobit.com/buy.php?product=ascu14iusdpf999&ref=en-ascu3pciusdpfcd6m<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase-999');" class="buybtn change-buybtn">Get It Now</a>
    <p><i class="all-icons"></i><span class="viewNum"><?php echo $viewNum;?></span> watching,<strong class="packsNum">100</strong>packs left now!</p>
  </div>
</div>
<!-- comparison start -->
<div class="comparison wrapper">
  <h2>What's  the Difference Between Your Current Version and PRO Version? </h2>
  <div class="ctable">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text"></th>
        <th class="space"></th>
        <th class="itema">
          Your Current Version
        </th>
        <th class="space"></th>
        <th class="itemb"><p>PRO</p></th>
      </tr>
      </thead>
      <tbody>
        <tr class="gray">
          <td class="text"><img src="<?php echo $pResUrl; ?>images/icons-03.png" alt=""> Full Protection</td>
          <td class="space"></td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text">Defend against viruses in real time</td>
          <td class="space"></td>
          <td class="itema">Expires after 30 days </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Protect your important files from ransomware</td>
          <td class="space"></td>
          <td class="itema">Expires after 30 days </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Protect you from malicious and phishing websites </td>
          <td class="space"></td>
          <td class="itema">Expires after 30 days </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Block secret accesses to your identity and privacy</td>
          <td class="space"></td>
          <td class="itema">Expires after 30 days </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Capture intruders who attempt to use your computer </td>
          <td class="space"></td>
          <td class="itema">Expires after 30 days </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr class="gray">
          <td class="text"><img src="<?php echo $pResUrl; ?>images/icons-04.png" alt=""> Maximum Optimization</td>
          <td class="space"></td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
         <tr>
          <td class="text">Clean up junk files and useless registries</td>
          <td class="space"></td>
          <td class="itema">Expires after 30 days </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Speed your computer up to 200% faster  </td>
          <td class="space"></td>
          <td class="itema">Expires after 30 days </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Boost your Internet connection up to 300% faster </td>
          <td class="space"></td>
          <td class="itema">Expires after 30 days </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Reduce your Windows crashes & error messages </td>
          <td class="space"></td>
          <td class="itema">Expires after 30 days </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
      </tbody>
      <tfoot>
        <th class="text"></th>
        <th class="space"></th>
        <th class="itema"></th>
        <th class="space"></th>
        <th class="itemb">
          <strong class="prime"> $9.99</strong> <del>$49.99</del>
          <a href="https://www.iobit.com/buy.php?product=ascu14iusdpf999&ref=en-ascu3pciusdpfcd6m<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase-999');" class="buybtn change-buybtn">Activate Now</a>
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
    <p>As being trusted and awarded by those world-class media in the past thirteen years, you know you’ve got the right PC antivirus & optimizer.</p>
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
      <p><nobr><i class="all-icons"></i><nobr class="viewNum"><?php echo $viewNum;?></nobr> watching,<span class="packsNum">100</span>packs left now!</nobr></p>
    </div>
    <!-- buybtn -->
    <div class="price">
      <p></p>
      <a class="buybtn change-buybtn" href="https://www.iobit.com/buy.php?product=ascu14iusdpf999&ref=en-ascu3pciusdpfcd6m<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase-999');">
        Get It Now
      </a>
    </div>
  </div>  
</div>
<!-- floatlayer end -->
<!-- <div class='popout'><p>ASCU v14 will recognize ASCU v12 license key as <strong>valid for ASCU v14.</strong></p></div> -->

<script>
refStr="<?php echo $refStr;?>"; 
</script>
<script src="<?php echo $pResUrl; ?>script/modernizr.min.js"></script>
<script src="<?php echo $pResUrl; ?>script/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>