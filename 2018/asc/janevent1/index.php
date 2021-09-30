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
$refStr='';
if(in_array($_GET['st'],array('no_patch_asc','patch_installed_asc','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf'))){
    $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Fix Intel Kernel Flaw & Avoid Performance Hit with Advanced SystemCare PRO - IObit</title>
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
     <a href="https://www.iobit.com" target="_blank" class="logo"> IObit</a>
     <h3>Dear IObit Users,</h3>
     <p>Recently, the news concerning the kernel flaw in Intel’s processors broke out. Two major security bugs called Meltdown and Spectre has been reported mostly in this issue. They might affect millions on millions of computers which runs Intel processor since 1995. Microsoft released security update Tuesday to fix industry-level security vulnerability affecting most average users. <strong>Advanced SystemCare PRO</strong> makes you never bothered by such issues and applies important Windows update for your PC.</p>
   </div>
 </div>
 <div class="asc-message wrapper">
   <p>As redesigning operating system to protect against Intel kernel flaw, Windows 7 and Windows 8 machines even Windows 10 machines with old processors would experience apparent decrease of PC performance from 5 to 30 percent. <strong>We strongly recommend IObit users to run Advanced SystemCare PRO</strong> – world’s leading PC cleaner and optimizer trusted by 250,000,000 users worldwide.</p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="" class="asc-box">
     <dl class="price">
       <dt><a href="https://www.iobit.com/buy.php?product=asc1999event1&ref=asc1999event12018a<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-2018event1a');" class="buybtn">Activate Now - $<strong>19.99</strong></a></dt>
       <dd>1 Year Subscription / 3 PCs</dd>
       <dd><p>Save <strong>$30.00</strong> for IObit Valued Users Only</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>More Powerful Features of Advanced SystemCare PRO Tune up Your Computer</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Deeply and automatically clean registries, browsing data to improve PC performance.</p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Optimize browser settings for up to 300%* faster internet connection.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Automatically care for your computer as scheduled without disturbing.</p>
     </li>
   </ul>
   <h3>Stay away from Intel Kernel Flaw and PC Performance Hit Now</h3>
   <dl class="price">
     <dt><a href="https://www.iobit.com/buy.php?product=asc1999event1&ref=asc1999event12018b<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-2018event1b');" class="buybtn">Activate Now - $<strong>19.99</strong></a></dt>
     <dd>1 Year Subscription / 3 PCs</dd>
     <dd><p>Save <strong>$30.00</strong> for IObit Valued Users Only</p></dd>
   </dl>
 </div>
 <div class="footer">
   Note:*.Data may vary based on different system or computer. <span>© 2005 - <?php echo date('Y')?> IObit Information Technology. All Rights Reserved.</span>
 </div>
</body>
</html>