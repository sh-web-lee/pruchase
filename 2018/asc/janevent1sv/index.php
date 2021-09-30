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
if(in_array($_GET['st'],array('no_patch_asc','patch_installed_asc','no_patch_db','patch_installed_db','no_patch_imf',
    'patch_installed_imf'))){
    $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Fix Intel Kernelfel och undvik prestanda hit med Advanced SystemCare PRO - IObit</title>
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
     <a href="https://www.iobit.com" target="_blank" class="logo">IObit</a>
     <h3>Kära IObitanvändare!</h3>
     <p>Nyligen har nyheten om kärnfelet i Intels processorer uppdagats. Två stora säkerhetsbuggar, Meltdown and Specter, har rapporterats. De kan påverka många miljoner datorer, som kört Intel-processorer sedan 1995. Microsoft släppte en säkerhetsuppdatering i tisdags för att fixa säkerhet och sårbarhet på industrinivå, vilket också påverkar de flesta genomsnittliga användarna. <strong>Advanced SystemCare PRO</strong> gör att du aldrig blir störd av sånt och ser till, att viktiga Windows-uppdateringar hämtas till din dator.</p>
   </div>
 </div>
 <div class="asc-message wrapper">
   <p>När du omformar operativsystemet för att skydda dig mot kärnfelet i Intel, så kan Windows 7-, Windows 8- och även Windows 10-maskiner, med gamla processorer, uppleva en tydlig minskning av prestandan med 5-30%. <strong>Vi rekommenderar starkt, att IObit-användare kör Advanced SystemCare PRO</strong> - världens ledande skräprensare och optimator för dator, vilken är betrodd av 250.000.000 användare över hela världen</p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="" class="asc-box">
     <dl class="price">
       <dt><a href="https://www.iobit.com/buy.php?product=sv-asc113pc299&ref=sv_asc299event2018a<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchaseevent1-sv');" class="buybtn">KÖP NU– <strong>299.00 </strong>SEK</a></dt>
       <dd> 3 PC, 1 År </dd>
       <dd><p>300.00 SEK billigare endast för Värderade IObit-användare</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Mer kraftfulla funktioner i Advanced SystemCare PRO - optimera din dator</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Rensar registren grundligt och automatiskt, kontrollerar data för att förbättra datorns prestanda </p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Optimerar webbläsarinställningar för upp till 300% * snabbare internetuppkoppling.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Hanterar din dator automatiskt enligt ett schema utan att störa.</p>
     </li>
   </ul>
   <h3>Håll dig borta från Intels kärnfel och Förbättra datorns prestanda nu!</h3>
   <dl class="price">
     <dt><a href="https://www.iobit.com/buy.php?product=sv-asc113pc299&ref=sv_asc299event2018b<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchaseevent1-sv');" class="buybtn">KÖP NU– <strong>299.00 </strong>SEK</a></dt>
     <dd>3 PC, 1 År</dd>
     <dd><p>300.00 SEK billigare endast för Värderade IObit-användare</p></dd>
   </dl>
 </div>
 <div class="footer">
   Notera: *.Uppgifter kan variera beroende på olika system eller datorer.
   <p>© 2005 - <?php echo date('Y')?> IObit Information Technology. All Rights Reserved.</p>
 </div>
</body>
</html>