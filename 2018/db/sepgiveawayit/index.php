<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$driversCount=empty($_GET['uc'])?0:intval($_GET['uc']);
$updateAuto=($_GET['adu']==1)?1:0;

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>

<!DOCTYPE html>
  <html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>85% di sconto a riattivare il nuovo Driver Booster 7 PRO - IObit</title>
    <meta name="Copyright" content="IObit">
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
    <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>

  </head>
  <body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
      <!-- title -->
      <h1>Riattiva il nuovo Driver Booster 7 PRO</h1>
      <!-- subtitle -->
      <h2>L’aggiornatore di driver numero uno - aggiorna i driver in modo semplice, sicuro e veloce</h2>
      <!-- db-box -->
      <img class="db-box fl" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO">
      <!-- db-message -->
      <div class="db-message fr">
        <!-- db-off -->
        <img class="db-off" src="<?php echo getStaticUrl('images/db-off.png')?>" alt="">
        <!-- db-line -->
        <p class="db-des">Offerta esclusiva per gli utenti di Giveaway</p>
        <!-- price -->
        <p class="price">
          Solo: <span>€<b>9</b>,99</span> <del>€74,85</del>  
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-db73pc999&ref=it_2018sepgiveaway<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
           onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-it');">
          Riattiva Ora
        </a>
        <!-- attention -->
        <p class="attention">Abbonamento annuale per 3 PC <b>al prezzo di 1</b></p>
        <!-- money-back -->
        <img class="money-back" src="<?php echo getStaticUrl('images/money-back.png')?>" alt="">
      </div>
    </div>
  </div>
  <!-- banner end -->
  <!-- feature-part1 start -->
  <div class="feature-part1">
    <div class="wrapper">
      <!-- arrow -->
      <img class="arrow" src="<?php echo $pResUrl;?>images/feature-arrow.png" alt="">
      <!-- title -->
      <h2>
        <span class="top">Rinnovando Driver Booster PRO</span>
        <span class="bottom">potrai:</span>
      </h2>
      <!-- details -->
      <ul class="details fr">
        <!-- updated -->
        <li class="updated">
          <?php if($driversCount!=0):?>
          <strong>Aggiornare</strong> 
          <span class="numbers clearfix">
            <i class="num1">0123456789</i>
            <i class="num2">0123456789</i>
            <i class="num3">0123456789</i>
          </span> driver e i componenti di gioco, garantendoti <b>prestazioni stabili del PC e un’esperienza di gioco fluida</b>.
          <?php else:?>
            Stabilizzare le prestazioni del PC e godere di un'esperienza di gioco più fluida.
          <?php endif;?>
        </li>
        <!-- saved -->
        <li class="saved">
          <?php if($updateAuto==1):?>
          <strong>Risparmiare almeno la </strong>
          <span class="letters clearfix">
            <i class="let1">à b c d e f g i j k l H m n o p q r s t u v w x y z</i>
            <i class="let2">b c d à f g H i j k l m e n o p q r s t u v w x y z</i>
            <i class="let3">à b c d e f g H i j k t m n o p q r s l u v w x y z</i>
            <i class="let4">f b c d e i g H à j k l m n o p q r s t u v w x y z</i>
            </span>
          del tuo tempo con l’aggiornamento automatico.
          <?php endif;?>
        </li>
        <!-- reduced -->
        <li class="reduced">
          <b class="red">Ridurre</b> <strong>i crash di sistema</strong> durante il processo di aggiornamento con il backup di driver automatico e la tecnologia di recupero.
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part1 end -->
  <!-- feature-part2 start -->
  <div class="feature-part2">
    <div class="wrapper">
      <!-- content -->
      <p>
        Negli ultimi 6 anni, Driver Booster PRO ha aggiornato <strong>12,700,000</strong> driver per  <br><strong>1,500,000</strong> utenti stimati; con Driver Booster PRO il loro PC è stato accelerato del <strong>200%*</strong> in più, mantenendo i driver sempre aggiornati e migliorando la stabilità del sistema.
      </p>
    </div>
  </div>
  <!-- feature-part2 end -->
  <!-- feature-part3 start -->
  <div class="feature-part3 wrapper">
    <!-- title -->
    <h2>Se ti perdi la nuova versione PRO, potresti incorrere in</h2>
    <!-- content for progress -->
    <div class="content clearfix">
      <!-- Worse PC Performance -->
      <dl class="performance fl">
        <dt>Peggioramento della <br>performance del PC</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>15% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Unstable & Stuck Gaming Experience -->
      <dl class="experience fl">
        <dt>Esperienza di gioco <br>instabile con continui blocchi</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>35% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Time-consuming Driver Update -->
      <dl class="update fr">
        <dt>Spreco di tempo durante <br>l'aggiornamento dei driver</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>2X più Lungo </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <!-- notes -->
    <p>*Abbiamo testato Driver Booster 7 PRO nei nostri laboratori interni. I tuoi risultati potrebbero variare.</p>
  </div>
  <!-- feature-part3 end -->
  <hr>
  <!-- feature-part4 start -->
  <div class="feature-part4">
    <div class="wrapper clearfix">
      <!-- title -->
      <h2>
        Ti suggeriamo caldamente di riattivare Driver Booster PRO per <br>mantenere tutti i tuoi driver sempre aggiornati
      </h2>
      <!-- left-message -->
      <ul class="left-message fl">
        <li class="padding-right25">
          Database di <strong>oltre 3.500.000 di driver</strong> per mantenere tutti i tuoi driver sempre aggiornati
        </li>
        <li class="padding-right55">
          <strong>Aggiorna automaticamente</strong> i driver senza nessun disturbo durante il processo di aggiornamento
        </li>
        <li class="padding-right5">
          <strong>Soluzione a un clic</strong> per riparare tutti gli errori dei dispositivi del tuo computer
        </li>
      </ul>
      <!-- right-message -->
      <ul class="right-message fr">
        <li class="padding-left45">
          <strong>Componenti necessari</strong> disponibili per avviare il tuo gioco con successo
        </li> 
        <li class="padding-left5">
          Priorità di aggiornare i <strong>driver di Game Ready</strong> per godere di una migliore esperienza di gioco
        </li>
        <li class="padding-left10">
          <strong>Blocca i processi non necessari</strong>  con un clic per un gioco più veloce
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part4 end -->
  <!-- between-buy start -->
  <div class="between-buy wrapper">
    <!-- title -->
    <h2>Vuoi ottimizzare le prestazioni del PC e godere di un’esperienza di gioco più fluida? Riattiva ora!</h2>
    <!-- price -->
    <p class="price">
      Solo: <span>€<b>9</b>,99</span> <del>€74,85</del>  
    </p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=it-db73pc999&ref=it_2018sepgiveaway<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
       onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-it');">
      Riattiva Ora
    </a>
    <!-- attention -->
    <p class="attention">Abbonamento annuale per 3 PC <b>al prezzo di 1</b></p>
    <!-- money-back -->
    <img class="money-back" src="<?php echo getStaticUrl('images/money-back.png')?>" alt="">
  </div>
  <!-- between-buy end -->
  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <!-- title -->
      <h2>Se mantieni la versione Free, perderesti:</h2>
      <!-- table -->
      <table cellspacing="0" cellpadding="0" valign="middle" align="cnter">
        <thead>
        <tr>
          <th class="w320"></th>
          <th class="w530"></th>
          <th class="w350"></th>
          <th class="w50"></th>
        </tr>
        </thead>
        <tbody>
        <!-- 01 -->
        <tr>
          <td class="w320 grey">3.000.000+</td>
          <td class="w530">Database di driver</td>
          <td class="w350 red">3.500.000+</td>
          <td class="w50"></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="w320 grey">Non accelerazione</td>
          <td class="w530">Velocità di download di driver</td>
          <td class="w350 red">200% più veloce</td>
          <td class="w50"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="w320 grey">Nessuna Priorità</td>
          <td class="w530">Driver di Game Ready</td>
          <td class="w350 red">Priorità</td>
          <td class="w50"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Componenti di gioco</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Aggiornamento automatico di driver</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Backup di driver</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td class="w320"></td>
          <td class="w530"></td>
          <td class="w350"></td>
          <td class="w50"></td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- comparison end -->
  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>Recensioni dei media</h2>
            <p>
              "IObit fornisce varie utilità e tra cui Driver Booster PRO, il quale ti aiuta ad aggiornare i driver in automatico, è il migliore! La funzionalità di base semplice di Driver Booster PRO è diventato ancora più attraente grazie all'inserimento di più licenze ad un prezzo molto ecconomico, così come un'interfaccia personalizzabile che fa un buon lavoro di visualizzare informazioni specifiche relativi ai hardware. I concorrenti come Ashampoo Driver Updater e SlimWare Utilities DriverUpdate offrono caratteristiche interessanti, ma IObit Driver Booster PRO conduce nel campo."
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/giardiniblog.png')?>" alt="GiardiniBlog"></dt>
          <dd>
            <h2>Recensioni dei media</h2>
            <p>
              Tutte e due le versioni ti permettono di aggiornare i driver in automatico, ma con la versione a pagamento otterrai un database molto più grande (ottimo per aggiornare driver rari e obsoleti), una velocità di download maggiore (nella versione free è limitata a 100 KB/s) il backup automatico dei driver aggiornati (nella versione free crea solo punti di ripristino in automatico) e il supporto tecnico 24 ore su 24, 7 giorni su 7.
            </p>
            <cite>GiardiniBlog</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt=""></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>
              "Con Driver Booster, posso facilmente scoprire quali dispositivi di driver sono obsoleti e aggiornarli in modo facile. Inoltre, mi aiuta a riparare gli errori di suono, di rete, di dispositivi, ecc...Non ci credevo prima dell’uso, ma dopo averlo provato, mi è piaciuto molto perché il mio PC è stato più stabile veloce e più sicuro di 8 mesi fa. Grazie, IObit."
            </p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>
              "Driver Booster è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer e pero non avete tempo per aggiornare manualmente come me, vi raccomando sinceramente il Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile."
            </p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt=""></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>
              "Uno dei migliori programmi per l'aggiornamento driver esistenti. Microsoft mi aveva portato fuori strada, suggerendomi aggiornamenti che non avrebbero funzionato sul mio PC. Invece, questo programma sapeva quali erano gli aggiornamenti di cui avevo bisogno e che non avrebbero causato conflitti. Ha funzionato perfettamente. Facile da usare, intuitivo e informativo. Ora che l'ho scoperto, non lo mollo più... Ottimo lavoro!"
            </p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->
  <!-- awards start -->
  <div class="awards wrapper">
    <!-- title -->
    <h2>Premi Mondiali</h2>
    <img src="<?php echo getStaticUrl('images/awards-icon.png')?>" alt="">
  </div>
  <!-- award end -->
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="footer-servizio clearfix">
        <dl class="money_back fl">
          <dd>
            <img src="<?php echo getStaticUrl('images/money-back.png')?>" alt="">
          </dd>
          <dt>
            <h3>Garanzia di Soddisfazione</h3>
            <p>Garantiamo il rimborso entro <br>60 giorni dalla data d’acquisto.</p>
          </dt>
        </dl>
        <dl class="veloce fl">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/veloce.png" alt="">
          </dd>
          <dt>
            <h3>Pagamento Assicurato</h3>
            <p>IObit offre i metodi di pagamento <br>sicuri per la transazione.</p>
          </dt>
        </dl>
        <dl class="verified fr">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/verified.png" alt="">
          </dd>
          <dt>
            <h3>Attivazione Veloce</h3>
            <p>Dopo avere completato il tuo <br>acquisto, riceverai il codice di licenza <br>in pochi minuti tramite la mail</p>
          </dt>
        </dl>
      </div>
      <p class="note">
        Nota:<br>
        *I dati potrebbero variare in base al sistema o computer.
      </p>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i Diritti Riservati</p>
    </div>
  </div>
  <!-- footer end -->
  <!-- float start -->
  <div class="float">
    <div class="wrapper clearfix">
      <dl class="fl">
        <dt>Offerta Esclusiva</dt>
        <dd><strong><b>85%</b> di sconto</strong> per mantenere il sistema stabile e godere di un’esperienza di gioco fluida</dd>
      </dl>
      <div class="float-message fr">
        <!-- price -->
        <p class="price">
          Solo: <span>€<b>9</b>,99</span> <del>€74,85</del>  
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-db73pc999&ref=it_2018sepgiveaway<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
           onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-it');">
          Riattiva Ora
        </a>
      </div>
    </div>
  </div>
  <!-- float end -->
  <script>
    driversCount='<?php echo $driversCount;?>';
    autoUpdate='<?php echo $updateAuto;?>';
    $(document).ready(function() {
      $('#dg-container').gallery();
    });
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  </body>
  </html>