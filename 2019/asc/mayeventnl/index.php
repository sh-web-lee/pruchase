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
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Herstel Windows Remote Desktop Services Remote Code Execution Kwetsbaarheid met Advanced SystemCare PRO - IObit</title>
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
     <a href="https://www.iobit.com/nl/index.php" target="_blank" class="logo">IObit</a>
     <h3>Attentie! Een Groot WannaCry-achtig Veiligheidsprobleem Gevonden</h3>
     <p>
       Op <strong>14 mei 2019</strong> heeft Microsoft een patch uitgebracht voor een “remote code execution”-kwetsbaarheid in “Remote Desktop Services”. De kwetsbaarheid brengt computers met Windows XP, Windows 7 en andere oude besturingssystemen in gevaar en is pre-authenticatie en behoeft geen gebruikersinteractie. Met andere woorden, een aanvaller die de kwetsbaarheid misbruikt kan direct uw computer overnemen en uw gegevens inzien, aanpassen en verwijderen of zelfs het systeem volledig platleggen. Wat deze kwetsbaarheid nog gevaarlijker maakt, is dat aanvallen zich gemakkelijk kunnen verspreiden van kwetsbare computer naar kwetsbare computer zoals de WannaCry malware zich wereldwijd verspreidde in 2017.
     </p>
   </div>
 </div>

 <div class="asc-message wrapper">
  <p>
    Daarom is het <strong>sterk aan te raden om te upgraden naar Advanced SystemCare PRO</strong> en het risico op aanvallen in te dammen. Advanced SystemCare PRO biedt dubbele bescherming door op tijd Windows veiligheidsupdates te verkrijgen om toekomstige aanvallen te voorkomen en door uw systeem te versterken voor solide verdediging tegen aanvallen. Upgrade Nu met <strong>62% Korting!</strong>
  </p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="" class="asc-box">
     <dl class="price">
       <dt><a href="https://www.iobit.com/buy.php?product=nl-asc121899-ac&ref=nl_asc3pc201905event<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcevent1905-nl');" class="buybtn">Nu Activeren -  €<strong>18,99</strong></a></dt>
       <dd>1-jarig abonnement / 3 PC’s</dd>
       <dd><p>Alléén vandaag bespaart u <b>€31</b>,- als IObit klant</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Meer krachtige functies in Advanced SystemCare PRO voor een snelle en veilige computer</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Verwijdert automatisch registerbestanden en surfsporen voor betere PC-prestaties en veiligheid.</p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Optimaliseert browserinstellingen voor 300%* sneller internet.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Houdt gevoelige data zoals contacten, e-mails en Dropbox en OneDrive bestanden weg bij hackers.</p>
     </li>
   </ul>
   <h3>Reken Nu Voor Goed Af met Cyberaanvallen en Systeemkwetsbaarheden</h3>
   <dl class="price">
     <dt><a href="https://www.iobit.com/buy.php?product=nl-asc121899-ac&ref=nl_asc3pc201905event<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcevent1905-nl');" class="buybtn">Nu Activeren -  €<strong>18,99</strong></a></dt>
     <dd>1-jarig abonnement / 3 PC’s</dd>
     <dd><p>Alléén vandaag bespaart u <b>€31</b>,- als IObit klant</p></dd>
   </dl>
 </div>
 <div class="footer">
   Opmerking: *.Data kan variëren afhankelijk van verschillende computer systemen
   <p>© 2005 - <?php echo date('Y')?> IObit Information Technology. Alle rechten voorbehouden</p>
 </div>
</body>
</html>