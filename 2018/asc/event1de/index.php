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
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Repariert die Intel-Kernel-Fehler & vermeidet den Leistungsverlust mit Advanced SystemCare PRO - IObit</title>
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
     <h3>Sehr geehrte Kundin, sehr geehrter Kunde, </h3>
     <p>vor Kurzem brachen die Nachrichten über den Kernel-Fehler in Intel-Prozessoren aus. Zwei wichtige Sicherheitsbugs nämlich Meltdown und Spectre wurden vor allem in dieser Ausgabe berichtet. Die könnten seit 1995 Millionen Computern beeinflußen, in den ein Intel-Prozessor läuft. Microsoft hat das Sicherheitsupdate am Dienstag veröffentlicht, um die Sicherheitsrisiken auf Branchenebene zu beheben, die die meisten Benutzer betreffen. Mit <strong>Advanced SystemCare PRO</strong> werden Sie nie durch solche Probleme belästigt werden und wichtige Windows-Updates für Ihren PC gelten.</p>
   </div>
 </div>
 <div class="asc-message wrapper">
  <p>Beim Umgestalten des Betriebssystems zum Schutz vor Intel-Kernel-Fehlern, würden Windows 7 und Windows 8 Maschinen sogar Windows 10 Maschinen mit alten Prozessoren eine sichtbare Verringerung der PC-Leistung von 5 auf 30 Prozent erleben. <strong>Wir empfehlen IObit-Benutzern dringend Advanced SystemCare PRO</strong> zu verwenden, den weltweit führenden PC-Cleaner, der von 250.000.000 Benutzern weltweit vertraut sind, der nutzlose Daten löscht, um Speicherplatz freizugeben, Laufwerkdaten intelligent zu verwalten, um die Festplattenleistung zu maximieren und Windows vollständig zu optimieren.</p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="" class="asc-box">
     <dl class="price">
       <dt><a href="https://www.iobit.com/buy.php?product=de-asc113pc2499&ref=de_asc2499event2018a<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-event1a-de')" class="buybtn">Jetzt aktivieren -<strong>24,99€</strong></a></dt>
       <dd>1 Jahr/3 PC</dd>
       <dd><p><strong>35€</strong> sparen für die von IObit geschätzten Kunden</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Leistungsfähigere Funktionen von Advanced SystemCare PRO optimieren Ihren Computer</h3>
   <ul class="clearfix">
     <li class="frist">
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Tiefe und automatische Registrierungsbereinigungen und Durchsuchen der Daten, um die PC-Leistung zu verbessern.</p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Optimiert Browsereinstellungen für bis zu 300% * schnellere Internetverbindung .</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Pflegt Ihren Computer automatisch wie geplant ohne Sie zu stören.</p>
     </li>
   </ul>
   <h3>Bleiben Sie weg von Intel Kernel-Fehlern und PC-Leistungsverlust</h3>
   <dl class="price">
     <dt><a href="https://www.iobit.com/buy.php?product=de-asc113pc2499&ref=de_asc2499event2018b<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-event1b-de')" class="buybtn">Jetzt aktivieren -<strong>24,99€</strong></a></dt>
     <dd>1 Jahr/3 PC</dd>
     <dd><p><strong>35€</strong> sparen für die von IObit geschätzten Kunden</p></dd>
   </dl>
 </div>
 <div class="footer">
  Notiz: * Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden. <span>© 2005 - <?php echo date('Y')?> IObit Information Technology. Alle Rechte vorbehalten.</span>
 </div>
</body>
</html>