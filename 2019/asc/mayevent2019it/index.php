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
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Risolvi la vulnerabilità legata all'esecuzione di codice in modalità remota in Servizi Desktop remoto con Advanced SystemCare PRO - IObit</title>
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
     <a href="https://www.iobit.com/it/index.php" target="_blank" class="logo">IObit</a>
     <h3>Attenzione! Trovato un exploit di sicurezza simile a WannaCry</h3>
     <p>
       Il <strong>14 maggio 2019</strong>, Microsoft ha rilasciato una patch per una vulnerabilità di esecuzione di un codice in modalità remota in Servizi Desktop remoto che riguarda Windows XP, Windows 7 o altri sistemi operativi precedenti. Questa vulnerabilità è pre-autenticazione e non richiede l'interazione dell'utente. In altre parole, una volta che un utente malintenzionato sfrutta questa vulnerabilità, potrebbe assumere il controllo del computer per visualizzare, modificare o eliminare i dati e persino provocare la paralisi del sistema. Per peggiorare le cose, i sistemi interessati possono propagare il virus da un computer vulnerabile ad un altro in un modo simile a quello adottato dal malware WannaCry, diffuso in tutto il mondo nel 2017.
     </p>
   </div>
 </div>
 <div class="asc-message wrapper">
  <p>
    Pertanto, ti consigliamo vivamente ai nostri utenti di eseguire l'aggiornamento a Advanced SystemCare PRO per ridurre il rischio di essere attaccati. Advanced SystemCare PRO fornisce una doppia protezione applicando tempestivamente importanti aggiornamenti a Windows per evitare futuri attacchi e rinforzare il sistema con il fine di difendersi dai potenziali attacchi. <strong>Aggiorna ora con il 65% di sconto!</strong>
  </p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="" class="asc-box">
     <dl class="price">
       <dt><a href="https://www.iobit.com/buy.php?product=it-asc123pc1699&ref=it_asc3pc201905event1<?php echo $refStr;?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcevent1905-it');" class="buybtn">Aggiorna Ora - €<strong>16,99</strong></a></dt>
       <dd>Abbonamento 1 anno / 3 PC</dd>
       <dd><p><strong>Risparmia €33</strong> per gli utenti stimati di IObit</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Funzioni più potenti di Advanced SystemCare PRO per accelerare il computer</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Pulisce i registri in profondità e in modo automatico, sfoglia i dati per migliorare le prestazioni e la protezione del PC.</p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Ottimizza le impostazioni del browser per una connessione Internet fino al 300% * più veloce.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Mantiene i dati sensibili come contatti, posta elettronica, Dropbox, OneDrive, ecc. lontani da qualsiasi accesso segreto.</p>
     </li>
   </ul>
   <h3>Stai lontano da attacchi di Cybersecurity e ripara la vulnerabilità ora</h3>
   <dl class="price">
     <dt><a href="https://www.iobit.com/buy.php?product=it-asc123pc1699&ref=it_asc3pc201905event1<?php echo $refStr;?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcevent1905-it');" class="buybtn">Aggiorna Ora - €<strong>16,99</strong></a></dt>
     <dd>Abbonamento 1 anno / 3 PC</dd>
     <dd><p><strong>Risparmia €33</strong> per gli utenti stimati di IObit</p></dd>
   </dl>
 </div>
 <div class="footer">
   Nota: *. I dati possono variare in base al sistema o al computer.
   <p>© 2005 - <?php echo date('Y')?> Tecnologia di informazione IObit. Tutti i diritti riservati.</p>
 </div>
</body>
</html>