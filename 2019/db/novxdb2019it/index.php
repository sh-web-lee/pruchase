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
  $c_name = 'itdbxdb_p' . $date;
  $c_name_t='itdbxdb_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=49;
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
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

if(in_array($_GET['pop'],array('xr_db'))){
  $refStr.='-'.$_GET['pop'];
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta di Natale - Sconto fino all'90% per Driver Booster PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1>CORREGGI E AGGIORNA TUTTI I DRIVER ORA!</h1>
        <p>PIÙ DRIVER ESCLUSIVI, PIÙ SICURI GLI AGGIORNAMENTI, PIÙ EFFICACE E VELOCE SARÀ IL TUO PC!</p>
      </div>
      <div class="left fl">
        <h4>OFFERTA DI NATALE</h4>
        <h2>SALE -90%</h2>
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
      </div>
      <div class="right fr">
        <div class="chart">
          <div class="clist one">
            <span class="cost"><strong>26,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">12 Luglio</span>
          </div>
          <div class="clist two">
            <span class="cost"><strong><big>19</big>,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="text"><b class="pickNum">39</b>* pezzi rimasti, affrettati!</span>
          </div>
          <div class="clist three">
            <span class="cost"><strong>29,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">16 Luglio</span>
          </div>
        </div>
        <div class="price">
          <p><strong><big>19</big>,99€</strong> <del>174,78€</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-db73pciusdpf1999&ref=it_db73pciusdpf1999purchasexdb1911<?php echo $refStr;?>&refs=it_purchase_db"
             onclick="ga( 'send', 'event', 'dbbuy', 'buy', 'dbpurchasexdb-it');">
            Approfittane Ora
          </a>
        </div>
      </div>
    </div>
    <span class="snow snow01"></span>
    <span class="snow snow02"></span>
    <span class="snow snow03"></span>
    <span class="snow snow04"></span>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
  <!-- payment end -->

  <!-- map start -->
  <div class="map">
    <div class="wrapper">
      <h2>
        ESCLUSIVO DATABASE DI DRIVER, TECNOLOGIA AVANZATA DI AGGIORNAMENTO, <br>
        EFFICACISSIMO SARÀ IL TUO PC!
      </h2>
      <p>Oltre 10 milioni di utenti internazionali hanno scelto Driver Booster PRO</p>
    </div>
  </div>
  <!-- map end -->

  <!-- feature start -->
  <div class="feature wrapper">
    <img class="feature-db" src="<?php echo getStaticUrl('images/feature-db.png')?>" alt=""/>
    <dl class="one clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      <dd>
        <h3>AGGIORNAMENTO DI DRIVER <strong>PIÙ VELOCE E SEMPLICE</strong></h3>
        <p>
          Ti offre la soluzione di aggiornamento automatico che installa e aggiorna <br>i driver in modo automatico durante il tempo di inattività del tuo PC.
        </p>
      </dd>
    </dl>
    <dl class="two clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
      <dd>
        <h3>AGGIORNAMENTO DI DRIVER <strong>PIÙ SICURO</strong></h3>
        <p>
          Effettua automaticamente il backup e crea un punto di <br>ripristino del sistema prima dell'aggiornamento, <br>nel caso qualcosa vada storto.
        </p>
      </dd>
    </dl>
    <dl class="three clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
      <dd>
        <h3>SISTEMA <strong>PIÙ STABILE</strong></h3>
        <p>
          Mantiene tutti i tuoi driver sempre <br>aggiornati così il sistema funziona in <br>modo più stabile.</p>
      </dd>
    </dl>
    <dl class="four clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
      <dd>
        <h3><strong>100%* PIÙ VELOCE</strong> IL DOWNLOAD</h3>
        <p>La velocità di download di driver è 100% più <br>veloce rispetto alla versione Free</p>
      </dd>
    </dl>
    <dl class="five clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
      <dd>
        <h3><strong>OTTIMA ESPERIENZA</strong> DI GIOCO</h3>
        <p>
          Mantiene i driver grafici e i driver di Game Ready sempre aggiornati al fine di <br> ottimizzare le prestazioni hardware e migliorare al massimo l’esperienza di gioco.
        </p>
      </dd>
    </dl>
  </div>
  <!-- feature end -->

  <!-- gifts start -->
  <div class="gifts">
    <div class="wrapper clearfix">
      <h2>Paghi uno a prezzo scontato e ottieni QUATTRO!*</h2>
      <h3>Tutto quello che vuoi per il tuo PC è qui, a portata di clic!</h3>
      <dl class="iu">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-iu.png')?>" alt="IObit Uninstaller PRO"/>
        </dt>
        <dd>
          <h4>IObit Uninstaller PRO</h4>
          <strong>0€ </strong> <del>29,99€</del>
          <p>Elimina definitivamente programmi, plugin e app di Windows indesiderati con un solo clic!</p>
        </dd>
      </dl>
      <dl class="sd">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"/>
        </dt>
        <dd>
          <h4>Smart Defrag PRO</h4>
          <strong>0€ </strong> <del>29,99€</del>
          <p>Offre la migliore deframmentazione del disco e  accelera al massimo l'hard driver!</p>
        </dd>
      </dl>
      <dl class="pf">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"/>
        </dt>
        <dd>
          <h4>Protected Folder</h4>
          <strong>0€ </strong> <del>39,95€</del>
          <p>Protegge i tuoi file personali e li mantiene lontani dagli attacchi dannosi!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- gifts end -->

  <!-- centbuy start -->
  <div class="centbuy price wrapper">
    <p><strong>19,99€</strong> <del>174,78€</del></p>
    <p>PREZZO DEL NATALE</p>
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=it-db73pciusdpf1999&ref=it_db73pciusdpf1999purchasexdb1911<?php echo $refStr;?>&refs=it_purchase_db"
       onclick="ga( 'send', 'event', 'dbbuy', 'buy', 'dbpurchasexdb-it');">
      Approfittane Ora
    </a>
    <p class="pick">Solo <b class="pickNum">39</b> pezzi disponibili ora, affrettati!</p>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Facciamo tutto il possibile per soddisfare i nostri<br> clienti ovunque essi siano!</h2>
    <div class="reviewbox">
      <h3>Cosa dicono di noi</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip"></li>
        <li class="two">
          <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund">
        </li>
        <li class="three">
          <img src="<?php echo getStaticUrl('images/fabio-tursi.png')?>" alt="Fabio Tursi">
        </li>
        <li class="four"><img src="<?php echo getStaticUrl('images/olorin89.png')?>" alt="Olorin 89"></li>
      </ul>
      <div class="details">
        <div>
          <h4>CHIP <span class="flag de"></span></h4>
          <p>
            "Driver Booster Pro: La funzionalità di download automatico di driver è disponibile solo nella versione Pro." – Tradotto da Tedesco
          </p>
        </div>
        <div class="active">
          <h4>Adam Backlund <span class="flag us"></span></h4>
          <p>
            "Driver Booster Pro è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer ma non avete tempo per aggiornarli manualmente come me, vi consiglio vivamente Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile." – Tradotto da inglese
          </p>
        </div>
        <div>
          <h4>Fabio Tursi <span class="flag it"></span></h4>
          <p>
            “Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema.”
          </p>
        </div>
        <div>
          <h4>Olorin 89 <span class="flag it"></span></h4>
          <p>
            "Driver Booster è semplicemente il tool di aggiornamento driver che semplifica la vita a tutti."
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>I PREMI DI DRIVER BOOSTER</h2>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- comparison start -->
  <div class="comparison wrapper">
    <table>
      <thead>
        <tr>
          <th colspan="2" class="text">La comparazione dei prodotti:</th>
          <th class="space"></th>
          <th class="itema">
            <div class="pro">
              <h3>La versione PRO<br> <big>AGGIORNATA</big></h3>
              <em class="all-icons smile"></em>
            </div>
          </th>
          <th class="space"></th>
          <th class="itemb">
            <div class="free">
              <h3>La tua versione<br> <big>ATTUALE</big></h3>
              <em class="all-icons"></em>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon01.png')?>" alt=""/></td>
          <td class="virtue">Scarica e aggiorna i driver obsoleti con un solo clic</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""/></td>
          <td class="virtue">
            Sblocca la velocità massima di aggiornamento dei driver <sup class="all-icons">Migliorato</sup>
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""/></td>
          <td class="virtue vtop">
             <span>Database del 200% più grande per aggiornare molti più driver rari e obsoleti </span>
             <sup class="all-icons"></sup>
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon04.png')?>" alt=""/></td>
          <td class="virtue">
            Riduce i blocchi del sistema, migliorandone le prestazioni
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon05.png')?>" alt=""/></td>
          <td class="vtop">
            <span>
              Download, aggiornamento e installazione automatica dei driver durante i periodi di inattività del sistema
            </span>
            <sup class="all-icons nov">Nuovo</sup>
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon06.png')?>" alt=""/></td>
          <td class="virtue">Backup automatico di tutti i driver per il ripristino sicuro</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon07.png')?>" alt=""/></td>
          <td class="virtue">
            Aggiornamento prioritario delle periferiche per giocare <sup class="all-icons">Migliorato</sup>
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon08.png')?>" alt=""/></td>
          <td class="virtue">Rileva e ripara gli errori dei driver in modo efficace</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon09.png')?>" alt=""/></td>
          <td class="virtue">Aggiornamento automatico alla versione più recente</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt=""/></td>
          <td class="virtue">Supporto tecnico 24/7 gratuito su richiesta</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- bottombuy start -->
  <div class="bottombuy wrapper clearfix">
    <h2>Non farti rovinare la giornata da un problema del PC!</h2>
    <div class="left fl"><img src="<?php echo getStaticUrl('images/bottombuy-db.png')?>" alt=""/></div>
    <div class="right price fr">
      <p><strong>19,99€</strong> <del>174,78€</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=it-db73pciusdpf1999&ref=it_db73pciusdpf1999purchasexdb1911<?php echo $refStr;?>&refs=it_purchase_db"
         onclick="ga( 'send', 'event', 'dbbuy', 'buy', 'dbpurchasexdb-it');">
        Approfittane Ora
      </a>
      <p>SOLO OGGI, AFFRETTATI!</p>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h3>Garanzia di Soddisfazione</h3>
            <p>60 giorni rimborso</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/secure.png')?>" alt=""></dt>
          <dd>
            <h3>Pagamento Assicurato</h3>
            <p>IObit supporta diverse modalità di <br> pagamento sicure</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""></dt>
          <dd>
            <h3>Attivazione Veloce</h3>
            <p>Dopo il tuo acquisto, riceverai il codice <br> di licenza in pochi muniti tramite la mail</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""></dt>
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
        <dd>* IObit Uninstaller PRO / Smart Defrag PRO / Protected Folder per un anno di iscrizione su 1 PC.</dd>
      </dl>
      <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
    </div>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>