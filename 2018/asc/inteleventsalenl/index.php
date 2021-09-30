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
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Beveilig uw verouderde Intelprocessor tegen beveiligingslekken met Advanced SystemCare PRO - IObit</title>
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
     <h3>Geachte IObit Klanten,</h3>
     <p>Onlangs, heeft u in verschillende nieuwsmedia kunnen lezen over twee gigantische beveiligingslekken in computerchips van Intel. De Spectre –en Meltdown-lekken zitten in de computerchip zelf, en maakt het mogelijk om wachtwoorden en andere gevoelige gegevens uit te lezen. Deze lekken kunnen van invloed zijn op miljoenen computers die sinds 1995 met een Intelprocessor werken.</p>
     <p>Vorige week kwam Microsoft al met een update voor Windows computers. Met <strong>Advanced SystemCare PRO</strong> werkt u Windows updates bij, en hoeft u zich geen zorgen te maken over beveiligingslekken.</p>
   </div>
 </div>
 <div class="asc-message wrapper">
  <p>Windows 7, 8 en zelfs Windows 10 systemen met verouderde processors kunnen na deze updates tussen de 5 à 30 procent vertragen. <strong>Wij raden onze IObit klanten sterk aan om Advanced SystemCare PRO</strong> – met meer dan 250 miljoen gebruikers wereldwijd, te installeren en uw computer een boost te geven.</p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="" class="asc-box">
     <dl class="price">
       <dt><a href="https://www.iobit.com/buy.php?product=nl-asc111y3pc1999&ref=nl_asc1999event2018a<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchaseeventa1801-nl')" class="buybtn">Nu Activeren -  €<strong>19,99</strong></a></dt>
       <dd>1-jarig abonnement / 3 PC’s</dd>
       <dd><p>Alléén vandaag bespaart u <strong>€30</strong>,- als IObit klant</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Meer krachtige functies in Advanced SystemCare PRO voor een razendsnelle computer</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Automatisch verwijderen van registerbestanden en browsergeschiedenis</p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Optimaliseert browserinstellingen voor 300%* sneller internet</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Automatisch uw PC opschonen en boosten zonder omkijken</p>
     </li>
   </ul>
   <h3>Beveilig uw software en hardware tegen beveiligingslekken en indringers</h3>
   <dl class="price">
     <dt><a href="https://www.iobit.com/buy.php?product=nl-asc111y3pc1999&ref=nl_asc1999event2018b<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchaseeventb1801-nl')" class="buybtn">Nu Activeren -  €<strong>19,99</strong></a></dt>
     <dd>1-jarig abonnement / 3 PC’s</dd>
     <dd><p>Alléén vandaag bespaart u <strong>€30</strong>,- als IObit klant</p></dd>
   </dl>
 </div>
 <div class="footer">
   Opmerking: *.Data kan variëren afhankelijk van verschillende computer systemen <span>© 2005 - <?php echo date('Y')?> IObit Information Technology. Alle rechten voorbehouden</span>
 </div>
</body>
</html>