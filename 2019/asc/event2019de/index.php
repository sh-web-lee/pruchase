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
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Behebt die Sicherheitslücke in Remotedesktopdiensten bezüglich Remotecodeausführung mit Advanced SystemCare PRO - IObit</title>
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
     <a href="https://www.iobit.com/de/index.php" target="_blank" class="logo">IObit</a>
     <h3>Beachtung! Ein wichtiger WannaCry-ähnlicher Sicherheits-Exploit gefunden</h3>
     <p>
       Am <strong>14. Mai 2019</strong> veröffentlichte Microsoft einen Patch für eine Sicherheitslücke in Remotedesktopdiensten, die Windows XP, Windows 7 oder andere frühe Betriebssysteme betrifft. Diese Sicherheitslücke ist eine Vorauthentifizierung und erfordert keine Benutzerinteraktion. Das heißt, sobald die Angreifer diese Sicherheitslücke ausnutzen, können Sie die Kontrolle über Ihren Computer übernehmen, um Ihre Daten auszuspionieren, zu ändern oder zu löschen, und sogar zu einer Systemlähmung führen. Um die Situation noch zu verschlimmern, können die betroffenen Systeme den Virus auf ähnliche Weise von einem anfälligen Computer auf einen anfälligen Computer übertragen, wie sich die WannaCry-Malware 2017 weltweit verbreitet hat.
     </p>
   </div>
 </div>

 <div class="asc-message wrapper">
  <p>
    Wir empfehlen unseren Benutzern daher dringend, ein Upgrade auf Advanced SystemCare PRO durchzuführen, um das Risiko eines Angriffs zu verringern. Advanced SystemCare PRO bietet doppelten Schutz, indem wichtige Windows-Updates rechtzeitig angewendet werden, um zukünftige Angriffe zu vermeiden und Ihr System gegen potenzielle Angriffe zu schützen. <strong>Jetzt mit 60% RABATT upgraden!</strong>
  </p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="" class="asc-box">
     <dl class="price">
       <dt><a href="http://www.iobit.com/buy.php?product=de-asc122399-ac&ref=de_asc3pc201905event1<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcevent1905-de');" class="buybtn">Jetzt upgraden - <strong>23,99</strong>€</a></dt>
       <dd>1 Jahr / 3 PCs</dd>
       <dd><p><b>36€</b> Rabatt für die von IObit geschätzten Kunden</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Leistungsfähigere Funktionen von Advanced SystemCare PRO optimieren Ihren Computer</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Reinigt Registrierung tief und automatisch und scannt die Daten, um die PC-Leistung zu verbessern und zu schützen.</p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Optimiert Browsereinstellungen für bis zu 300% * schnellere Internetverbindung.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Schützt vertrauliche Daten wie Kontakte, E-Mail-Daten, Dropbox, OneDrive usw. vor jedem geheimen Zugang.</p>
     </li>
   </ul>
   <h3>Jetzt vermeiden Sie Cybersecurity-Angriffe und beheben Sie Systemschwächen</h3>
   <dl class="price">
     <dt><a href="http://www.iobit.com/buy.php?product=de-asc122399-ac&ref=de_asc3pc201905event1<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcevent1905-de');" class="buybtn">Jetzt upgraden - <strong>23,99</strong>€</a></dt>
     <dd>1 Jahr / 3 PCs</dd>
     <dd><p><b>36€</b> Rabatt für die von IObit geschätzten Kunden</p></dd>
   </dl>
 </div>
 <div class="footer">
   Notiz: * *Daten können sich system- oder computerabhängig ändern.
   <p>© 2005 - <?php echo date('Y')?>  IObit Information Technology. Alle Rechte vorbehalten.</p>
 </div>
</body>
</html>