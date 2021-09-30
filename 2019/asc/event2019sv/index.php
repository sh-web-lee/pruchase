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
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Åtgärda Remote Desktop Services Remote Code Execution säkerhetsbristen med Advanced SystemCare PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
 <div class="header">
   <div class="wrapper">
     <a href="https://www.iobit.com/sv/index.php" target="_blank" class="logo">IObit</a>
     <h3>OBS! En omfattande WannaCry liknande säkerhetsexploit hittad</h3>
     <p>
       Den <strong>14 maj 2019</strong>, släppte Microsoft en programkorrigering för en remote code execution i Remote Desktop Services som påverkar Windows XP, Windows 7 eller andra tidiga operativsystem. Denna säkerhetsbrist är för-autentisering och kräver ingen användarinteraktion. Med andra ord, när en angripare utnyttjar denna säkerhetsbrist kan de ta kontroll över din dator för att se, ändra eller radera dina data och kan även leda till en systemförlamning. För att göra det värre kan de drabbade systemen sprida viruset från en sårbar dator till en sårbar dator på samma sätt som WannaCry-malware spred världen över år 2017.
     </p>
   </div>
 </div>

 <div class="asc-message wrapper">
  <p>
    Därför rekommenderar vi starkt våra användare att uppgradera till Advanced SystemCare PRO för att minska risken att bli attackerad. Advanced SystemCare PRO kan ge dubbelt skydd genom att i tid tillämpa viktiga Windows-uppdateringar för att undvika framtida attacker och för att förstärka ditt system för att försvara sig mot potentiella attacker. <strong>Uppgradera nu med 50% RABATT!</strong>
  </p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="" class="asc-box">
     <dl class="price">
       <dt><a href="http://www.iobit.com/buy.php?product=sv-asc12a299-ac&ref=sv_asc3pc299event20190516<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchasedesktop190516-sv');" class="buybtn">Uppgradera Nu - <strong>299</strong>kr</a></dt>
       <dd>1-Årsprenumeration/ 3 datorer</dd>
       <dd><p>Spara <big><b>599kr</b></big> Endast för IObit användare</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Flera kraftfulla funktioner i Advanced SystemCare PRO för att förbättra din dator</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Rensar register och browsing data djupt och automatiskt för att förbättra dator-prestanda och skydd.</p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Optimera webbläsarinställningar för upp till 300% * snabbare internetuppkoppling.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Håll känsliga data som kontakter, e-postdata, Dropbox, OneDrive etc. borta från hemlig åtkomst.</p>
     </li>
   </ul>
   <h3>Håll dig borta från Cybersecurity Attacks och Fix System Weakness Nu</h3>
   <dl class="price">
     <dt><a href="http://www.iobit.com/buy.php?product=sv-asc12a299-ac&ref=sv_asc3pc299event20190516<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchasedesktop190516-sv');" class="buybtn">Uppgradera Nu - <strong>299</strong>kr</a></dt>
     <dd>1-Årsprenumeration/ 3 datorer</dd>
     <dd><p>Spara <big><b>599kr</b></big> Endast för IObit användare</p></dd>
   </dl>
 </div>
 <div class="footer">
  Notera*. Data kan variera beroende på olika system eller dator.
  <p>© 2005 - <?php echo date('Y')?> IObit Information Technology. Alla Rättigheter Förbehållna</p>
 </div>
</body>
</html>