<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="dk">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Fix Remote Desktop Services Remote Code Execution Vulnerability with Advanced SystemCare PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
 <div class="header">
   <div class="wrapper">
     <a href="https://www.iobit.com/dk/index.php" target="_blank" class="logo"> IObit</a>
     <h3>Attention! A Major WannaCry-like Security Exploit Found</h3>
     <p>On <strong>May 14<sup>th</sup> 2019</strong>, Microsoft released a patch for a remote code execution vulnerability in Remote Desktop Services that affects Windows XP, Windows 7 or other early operating systems. This vulnerability is pre-authentication and requires no user interaction. In other words, once an attackers exploit this vulnerability, they could take control of your computer to view, change or delete your data and even lead to system paralysis. To make things worse, the affected systems may propagate the virus from vulnerable computer to vulnerable computer in a similar way as the WannaCry malware spread across the globe in 2017.</p>
   </div>
 </div>
 <div class="asc-message wrapper">
   <p>So, we strongly recommend our users to upgrade to Advanced SystemCare PRO to reduce the risk of being attacked. Advanced SystemCare PRO could provide double protection by timely applying important windows updates to avoid future attacks and reinforcing your system to defend against potential attacks. Now, upgrade with <strong>60% OFF! </strong></p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="Advanced SystemCare PRO" class="asc-box">
     <dl class="price">
       <dt>
         <a href="http://www.iobit.com/buy.php?product=dk-asc12-ac&ref=dk_asc3pc201905event1<?php echo $refStr;?>&refs=dk_purchase_asc"
            onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcevent1905-dk');"
            class="buybtn">
           Upgrade Now - <strong>kr.179</strong>
         </a>
       </dt>
       <dd>1 Year Subscription / 3 PCs</dd>
       <dd><p>Save <strong>kr.270</strong> for IObit Valued Users Only</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>More Powerful Features of Advanced SystemCare PRO Tune up Your Computer</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Deeply and automatically clean registries, browsing data to improve PC performance and protection.</p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Optimize browser settings for <br> up to 300%* faster internet connection.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Keep sensitive data like contact, e-mail data, Dropbox, OneDrive etc. away from any secret access.</p>
     </li>
   </ul>
   <h3>Stay away from Cybersecurity Attacks and Fix System Weakness Now</h3>
   <dl class="price">
     <dt>
       <a href="http://www.iobit.com/buy.php?product=dk-asc12-ac&ref=dk_asc3pc201905event1<?php echo $refStr;?>&refs=dk_purchase_asc"
          onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcevent1905-dk');"
          class="buybtn">
         Upgrade Now - <strong>kr.179</strong>
       </a>
     </dt>
     <dd>1 Year Subscription / 3 PCs</dd>
     <dd><p>Save <strong>kr.270</strong> for IObit Valued Users Only</p></dd>
   </dl>
 </div>
 <div class="footer">
   Note:*.Data may vary based on different system or computer. <span>© 2005 - <?php echo date('Y')?> IObit Information Technology. All Rights Reserved.</span>
 </div>
</body>
</html>