<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'itdbsum_p' . $date;
  $c_name_t='itdbsum_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(37,50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta del giorno, sconti fino all'80% su Driver Booster PRO – Promozione limitata di IObit 2019</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title">
      <h1>CORREGGI E AGGIORNA TUTTI I DRIVER ORA!</h1>
      <p>PIÙ DRIVER ESCLUSIVI, PIÙ SICURI GLI AGGIORNAMENTI, PIÙ EFFICACE E VELOCE SARÀ IL TUO PC!</p>
    </div>
    <!-- left-message -->
    <dl class="left-message fl">
      <dt>SALE -65%</dt>
      <dd><img src="<?php echo $pResUrl;?>images/db-box.png" alt="Driver Booster PRO + Smart Defrag PRO + Protected Folder"></dd>
    </dl>
    <!-- right-message -->
    <div class="right-message fr">
      <!-- chart -->
      <div class="chart">
        <dl class="one">
          <dd class="point"></dd>
          <dd class="line"></dd>
          <dd class="text"><strong>26,99€</strong> <br> <span></span></dd>
        </dl>
        <dl class="two">
          <dd class="point"></dd>
          <dd class="line"></dd>
          <dd class="text"><strong>24,99€</strong></dd>
        </dl>
        <dl class="three">
          <dd class="point"></dd>
          <dd class="line"></dd>
          <dd class="text"><strong>29,99€</strong> <br> <span></span></dd>
        </dl>
        <dl class="four">
          <dd class="point"></dd>
          <dd class="line"></dd>
          <dd class="text"><strong>34,99€</strong> <br> <span></span></dd>
        </dl>
      </div>
      <!-- top-message -->
      <h2><del>74,85€</del> <strong>-65%</strong> <br> OGGI È IL SUPER GIORNO!</h2>
      <!-- pickNum -->
      <h3><strong class="pickNum">39</strong><strong>*</strong> pezzi rimasti, affrettati!</h3>
      <!-- price -->
      <p class="price"><strong>24,99€</strong> &nbsp; <del>74,85€</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="http://www.iobit.com/buy.php?product=it-db73pcsdpf2499&ref=it_db73pcsdpf2499purchase1907<?php echo $refStr;?>&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PC1907-it')">
        Approfittane Ora
      </a>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payment -->
<div class="payment wrapper">
  <img src="<?php echo $pResUrl;?>images/payments.png" alt="">
</div>
<!-- end payment -->

<!-- map -->
<div class="map">
  <div class="wrapper">
    <h2>
      ESCLUSIVO DATABASE DI DRIVER, TECNOLOGIA AVANZATA DI AGGIORNAMENTO, <br>
      EFFICACISSIMO SARÀ IL TUO PC!
    </h2>
    <p>Oltre 10 milioni di utenti internazionali hanno scelto Driver Booster PRO</p>
  </div>
</div>
<!-- end map -->

<!-- feature -->
<div class="feature wrapper">
  <dl class="one clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
    <dd>
      <h3>AGGIORNAMENTO DI DRIVER <strong>PIÙ VELOCE E SEMPLICE</strong></h3>
      <p>
        Ti offre la soluzione di aggiornamento automatico che installa e aggiorna <br>
        i driver in modo automatico durante il tempo di inattività del tuo PC.
      </p>
    </dd>
  </dl>
  <dl class="two clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
    <dd>
      <h3>AGGIORNAMENTO DI DRIVER <strong>PIÙ SICURO</strong></h3>
      <p>
        Effettua automaticamente il backup e crea un punto di <br>
        ripristino del sistema prima dell'aggiornamento, <br>
        nel caso qualcosa vada storto.
      </p>
    </dd>
  </dl>
  <dl class="three clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
    <dd>
      <h3>SISTEMA <strong>PIÙ STABILE</strong></h3>
      <p>
        Mantiene tutti i tuoi driver sempre <br>
        aggiornati così il sistema funziona in <br>
        modo più stabile.
      </p>
    </dd>
  </dl>
  <dl class="four clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
    <dd>
      <h3><strong>100%* PIÙ VELOCE</strong> IL DOWNLOAD</h3>
      <p>
        La velocità di download di driver è 100% più <br>
        veloce rispetto alla versione Free
      </p>
    </dd>
  </dl>
  <dl class="five clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
    <dd>
      <h3><strong>OTTIMA ESPERIENZA</strong> DI GIOCO</h3>
      <p>
        Mantiene i driver grafici e i driver di Game Ready sempre aggiornati al fine di <br>
        ottimizzare le prestazioni hardware e migliorare al massimo l’esperienza di gioco.
      </p>
    </dd>
  </dl>
  <img class="feature-db" src="<?php echo $pResUrl;?>images/feature-db.png" alt="">
  <img class="machine" src="<?php echo $pResUrl;?>images/feature-machine.png" alt="">
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper clearfix">
    <h2>Paghi uno a prezzo scontato e ottieni tre!*</h2>
    <h3>Tutto quello che vuoi per il tuo PC è qui, a portata di clic!</h3>
    <dl class="db">
      <dt>
        <span class="ribbon"></span>
        <img src="<?php echo $pResUrl;?>images/gifts-db.png" alt="Driver Booster PRO">
      </dt>
      <dd>
        <h4>Driver Booster PRO</h4>
        <p>
          Aggiornamento di driver sicuro, <br>
          automatico e veloce! Supporta <br>
          3.500.000 di driver e componenti <br>
          popolari di gioco.
        </p>
      </dd>
    </dl>
    <dl class="sd">
      <dt>
        <span class="ribbon"></span>
        <img src="<?php echo $pResUrl;?>images/gifts-sd.png" alt="Smart Defrag PRO">
      </dt>
      <dd>
        <h4>Smart Defrag PRO</h4>
        <p>
          Offre la migliore deframmentazione <br>
          del disco e  accelera al massimo <br>
          l'hard driver!
        </p>
      </dd>
    </dl>
    <dl class="pf">
      <dt>
        <span class="ribbon"></span>
        <img src="<?php echo $pResUrl;?>images/gifts-pf.png" alt="Protected Folder">
      </dt>
      <dd>
        <h4>Protected Folder</h4>
        <p>
          Protegge i tuoi file personali e li <br>
          mantiene lontani dagli <br>
          attacchi dannosi!
        </p>
      </dd>
    </dl>
  </div>
</div>
<!-- end gifts -->

<!-- betweenbuy -->
<div class="betweenbuy wrapper">
  <!-- price -->
  <p class="price"><strong>24,99€</strong> &nbsp; <del>74,85€</del></p>
  <h3><span>PREZZO DEL SUPER GIORNO</span></h3>
  <!-- buybtn -->
  <a class="buybtn"
     href="http://www.iobit.com/buy.php?product=it-db73pcsdpf2499&ref=it_db73pcsdpf2499purchase1907<?php echo $refStr;?>&refs=it_purchase_db"
     onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PC1907-it')">
    Approfittane Ora
  </a>
  <p class="attention">Solo <strong class="pickNum">39</strong><strong>*</strong> pezzi disponibili ora, affrettati!</p>
</div>
<!-- end betweenbuy -->

<!-- review -->
<div class="review wrapper">
  <h2>
    Facciamo tutto il possibile per soddisfare i nostri <br>
    clienti ovunque essi siano!
  </h2>
  <div class="container">
    <h3>Cosa dicono di noi</h3>
    <ul>
      <li class="one"><img src="<?php echo $pResUrl;?>images/chip.png" alt="Chip"></li>
      <li class="two"><img src="<?php echo $pResUrl;?>images/adam-backlund.png" alt="Adam Backlund"></li>
      <li class="three"><img src="<?php echo $pResUrl;?>images/fabio-tursi.png" alt="Fabio Tursi"></li>
      <li class="four"><img src="<?php echo $pResUrl;?>images/olorin89.png" alt="Olorin 89"></li>
    </ul>
    <div class="details">
      <div>
        <h4>CHIP <img src="<?php echo $pResUrl;?>images/flag-de.png" alt=""></h4>
        <p>"Driver Booster Pro: La funzionalità di download automatico di driver è disponibile solo nella versione Pro." – Tradotto da Tedesco</p>
      </div>
      <div class="active">
        <h4>Adam Backlund <img src="<?php echo $pResUrl;?>images/flag-us.png" alt=""></h4>
        <p>"Driver Booster Pro è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer ma non avete tempo per aggiornarli manualmente come me, vi consiglio vivamente Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile." – Tradotto da inglese</p>
      </div>
      <div>
        <h4>Fabio Tursi <img src="<?php echo $pResUrl;?>images/flag-it.png" alt=""></h4>
        <p>“Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema.”</p>
      </div>
      <div>
        <h4>Olorin 89 <img src="<?php echo $pResUrl;?>images/flag-it.png" alt=""></h4>
        <p>"Driver Booster è semplicemente il tool di aggiornamento driver che semplifica la vita a tutti."</p>
      </div>
    </div>
    <a class="next" href="javascript: nextFun();"></a>
    <a class="prev" href="javascript: prevFun();"></a>
  </div>
</div>
<!-- end review -->

<!-- award -->
<div class="award">
  <div class="wrapper">
    <h2>I PREMI DI DRIVER BOOSTER</h2>
    <img src="<?php echo $pResUrl;?>images/award.png" alt="">
  </div>
</div>
<!-- end award -->

<!-- comparison -->
<div class="comparison wrapper">
  <table>
    <thead>
    <tr>
      <th class="text" colspan="2">La comparazione dei prodotti:</th>
      <th class="space"></th>
      <th class="itema">
        <div>
          La versione PRO <br>
          AGGIORNATA
        </div>
      </th>
      <th class="space"></th>
      <th class="itemb" valign="bottom">
        <div>
          La tua versione <br>
          ATTUALE
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""></td>
      <td class="text">
        Scarica e aggiorna i driver obsoleti con un solo clic
      </td>
      <td class="space"></td>
      <td class="itema"><i></i></td>
      <td class="space"></td>
      <td class="itemb"><i class="yes"></i></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""></td>
      <td class="text">
        <span>Sblocca la velocità massima di aggiornamento dei driver</span>
      </td>
      <td class="space"></td>
      <td class="itema"><i></i></td>
      <td class="space"></td>
      <td class="itemb"><i></i></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl;?>images/icon03.png" alt=""></td>
      <td class="text">
        <span>Database del 200% più grande per aggiornare molti più driver <br> rari e obsoleti</span>
      </td>
      <td class="space"></td>
      <td class="itema"><i></i></td>
      <td class="space"></td>
      <td class="itemb"><i></i></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""></td>
      <td class="text">
        Riduce i blocchi del sistema, migliorandone le prestazioni
      </td>
      <td class="space"></td>
      <td class="itema"><i></i></td>
      <td class="space"></td>
      <td class="itemb"><i></i></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""></td>
      <td class="text">
        <span class="new">Download, aggiornamento e installazione automatica dei driver <br> durante i periodi di inattività del sistema	</span>
      </td>
      <td class="space"></td>
      <td class="itema"><i></i></td>
      <td class="space"></td>
      <td class="itemb"><i></i></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""></td>
      <td class="text">
        Backup automatico di tutti i driver per il ripristino sicuro
      </td>
      <td class="space"></td>
      <td class="itema"><i></i></td>
      <td class="space"></td>
      <td class="itemb"><i></i></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""></td>
      <td class="text">
        <span>Aggiornamento prioritario delle periferiche per giocare	</span>
      </td>
      <td class="space"></td>
      <td class="itema"><i></i></td>
      <td class="space"></td>
      <td class="itemb"><i></i></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl;?>images/icon08.png" alt=""></td>
      <td class="text">
        Rileva e ripara gli errori dei driver in modo efficace
      </td>
      <td class="space"></td>
      <td class="itema"><i></i></td>
      <td class="space"></td>
      <td class="itemb"><i></i></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl;?>images/icon09.png" alt=""></td>
      <td class="text">
        Aggiornamento automatico alla versione più recente
      </td>
      <td class="space"></td>
      <td class="itema"><i></i></td>
      <td class="space"></td>
      <td class="itemb"><i></i></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl;?>images/icon10.png" alt=""></td>
      <td class="text">
        Supporto tecnico 24/7 gratuito su richiesta
      </td>
      <td class="space"></td>
      <td class="itema"><i></i></td>
      <td class="space"></td>
      <td class="itemb"><i></i></td>
    </tr>
    </tbody>
  </table>
  <span class="shadow"></span>
</div>
<!-- end comparison -->

<!-- bottombuy -->
<div class="bottombuy wrapper clearfix">
  <h2>Mantieni tutti i tuoi driver sempre <strong>AGGIORNATI</strong> con un solo clic!</h2>
  <img class="fl" src="<?php echo $pResUrl;?>images/bottombuy-db.png" alt="Driver Booster PRO + Smart Defrag PRO + Protected Folder">
  <dl class="fr">
    <dd>
      <!-- price -->
      <p class="price"><strong>24,99€</strong> &nbsp; <del>74,85€</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="http://www.iobit.com/buy.php?product=it-db73pcsdpf2499&ref=it_db73pcsdpf2499purchase1907<?php echo $refStr;?>&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PC1907-it')">
        Approfittane Ora
      </a>
      <p class="attention">SOLO OGGI, AFFRETTATI!</p>
    </dd>
  </dl>
</div>
<!-- end bottombuy -->

<!-- footer -->
<div class="footer">
  <div class="wrapper">
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
        <dd>
          <h3>Garanzia di Soddisfazione</h3>
          <p>60 giorni rimborso</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/secure.png" alt=""></dt>
        <dd>
          <h3>Pagamento Assicurato</h3>
          <p>IObit supporta diverse modalità di <br> pagamento sicure</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/cart.png" alt=""></dt>
        <dd>
          <h3>Attivazione Veloce</h3>
          <p>Dopo il tuo acquisto, riceverai il codice <br> di licenza in pochi muniti tramite la mail</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/service.png" alt=""></dt>
        <dd>
          <h3>Servizio Clienti</h3>
          <p>24/7 Supporto tecnico gratuito</p>
        </dd>
      </dl>
    </div>
    <dl class="note">
      <dt>Note:</dt>
      <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
      <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
      <dd>* Smart Defrag PRO /Protected Folder per un anno di iscrizione su 1 PC</dd>
    </dl>
    <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
</div>
<!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>