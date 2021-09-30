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
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Ripara i difetti del kernel Intel ed evita il rallentamento di prestazione con Advanced SystemCare PRO -IObit</title>
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
     <h3>Cari Utenti IObit,</h3>
     <p>Recentemente, è emersa la notizia inerente l’errore nel componente kernel dei processori Intel. In particolare sono stati rilevati due bug alla sicurezza chiamati Meltdown e Spectre, i quali possono colpire milioni di computer dotati di processori Intel dal 1995. Microsoft ha rilasciato l’aggiornamento di sicurezza Patch Martedì per riparare il problema che sta danneggiando centinaia di milioni di utenti. <strong>La tua sicurezza è la nostra priorità,</strong> e il nostro <strong>Advanced SystemCare PRO</strong> ti renderà immune da tali problematiche alla sicurezza effettuando gli aggiornamenti importanti per il tuo PC.</p>
   </div>
 </div>
 <div class="asc-message wrapper">
   <p>Come il sistema operativo ridisegnato per proteggere contro i difetti del kernel Intel, Windows 7 e Windows 8 anche le macchine Windows 10 con vecchi processori potrebbero sperimentare un apparente peggioramento di prestazione dal 5% al 30%. <strong>Raccomandiamo fortemente agli utenti IObit di attivare Advanced SystemCare PRO</strong> – programma di pulizia e ottimizzazione tra i più potenti a livello mondiale, che vanta 250,000,000 utenti in tutto il mondo.  </p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="" class="asc-box">
     <dl class="price">
       <dt><a href="http://www.iobit.com/buy.php?product=it-asc113pc1799&ref=it_asc113pceventpurchasea1801<?php echo $refStr;?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCeventa1801-it');" class="buybtn">Attiva Ora - €<strong>17.99</strong></a></dt>
       <dd>1 Anno di Iscrizione / 3 PC</dd>
       <dd><p>Risparmi €32.00 Solo per Utenti Stimati IObit</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Potenzialità Inedite di Advanced SystemCare PRO Incrementano al Massimo il tuo Computer</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Pulisce automaticamente e profondamente i registri, i dati di navigazione per migliorare la performance del PC. </p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Ottimizza le impostazioni del browser fino al 300% in più con una connessione internet accelerata.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Si prende cura automaticamente del tuo computer con interventi predefiniti, senza disturbarti durante le tue attività.</p>
     </li>
   </ul>
   <h3>Stai alla larga dalle Falle alla Sicurezza Kernel Intel e Proteggi il tuo PC</h3>
   <dl class="price">
     <dt><a href="http://www.iobit.com/buy.php?product=it-asc113pc1799&ref=it_asc113pceventpurchaseb1801<?php echo $refStr;?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCeventb1801-it');" class="buybtn">Attiva Ora - €<strong>17.99</strong></a></dt>
     <dd>1 Anno di Iscrizione / 3 PC</dd>
     <dd><p>Risparmi €32.00 Solo per Utenti Stimati IObit</p></dd>
   </dl>
 </div>
 <div class="footer">
   Nota:*.Data potrebbe variare in base al sistema o computer.
   <p>Copyright © 2005 - <?php echo date('Y')?> IObit Information Technology. Tutti i diritti riservati.</p>
 </div>
</body>
</html>