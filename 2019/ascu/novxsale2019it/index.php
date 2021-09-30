<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr='';
//if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
//    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
//  $refStr.='-'.$_GET['st'];
//}
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
if($_GET['ref']=='nc'){
  $refStr.='-'.$_GET['ref'];
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta Speciale - Sconto fino all’80% per Advanced SystemCare Ultimate</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
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
      <h1>Combattiamo duramente contro il virus, siamo sempre con voi!</h1>
      <h2>Antivirus intelligente, protezione totale per il tuo PC e regali GRATIS!</h2>
    </div>
    <!-- message -->
    <div class="message clearfix">

      <!-- 1pc asc -->
      <div class="message-box small fl">
        <!-- off -->
        <div class="off">-40%</div>
        <!-- box -->
        <div class="box">Advanced SystemCare Ultimate</div>
        <!-- price -->
        <p class="price"><span><big>29</big> <sup>€</sup> <sub>99</sub> </span> <del>59,99€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-au142999&ref=it_au143pc2999purchase1912<?php echo $refStr;?>&refs=it_purchase_ascu"
           onclick="ga( 'send', 'event', 'ascubuy', 'buy', 'ascupurchase3pc1912-it')">
          <i class="all-icons"></i> ACQUISTA ORA
        </a>
      </div>

      <!-- 3pc asc -->
      <div class="message-box large fr">
        <!-- off -->
        <div class="off">-85%</div>
        <!-- box -->
        <div class="box">
          Advanced SystemCare PRO+bundles
          <span>Cadeaux valent 89,97€</span>
        </div>
        <!-- price -->
        <p class="price large"><span><big>29</big> <sup>€</sup> <sub>99</sub></span> <del> 159,92€</del></p>
        <!-- buybtn -->
        <a class="buybtn large"
           href="https://www.iobit.com/buy.php?product=it-au143pciusdpf2999&ref=it_au143pciusdpfpurchase1912<?php echo $refStr;?>&refs=it_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pciusdpf1912-it')">
          <i class="all-icons"></i>  APPROFITTANE ORA
        </a>
        <!-- countdown -->
        <p class="countdown">
          <i class="all-icons"></i>
          <strong>00</strong> O :
          <strong>00</strong> M :
          <strong>00</strong> S :
          <strong class="last">000</strong> MS *
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payment -->
<div class="payment wrapper">
  <img src="<?php echo getStaticUrl('images/payment.png')?>images/payment.png" alt="">
</div>
<!-- end payment -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Il tuo computer ha bisogno di <br> una protezione più professionale e potente</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/hightlight.png')?>" alt=""/>
      </div>
      <div class="describe fr">
        <ul>
          <li> Protegge il PC contro virus, spyware, ransomware, hacker, e molte altre minacce.</li>
          <li> Protegge il PC in modo proattivo dagli attacchi ransomware come WannaCry.</li>
          <li> Protegge la tua privacy online in tempo reale.</li>
          <li> Accelera, pulisce e ripara i vari problemi del PC con un solo clic.</li>
          <li> Leggero, veloce e compatibile con altri prodotti per la sicurezza.</li>
        </ul>
        <img class="service" src="<?php echo getStaticUrl('images/prize-icon.png')?>" alt=""/>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <!-- title -->
    <h2>Prendili subito a un prezzo conveniente per Natale!</h2>
    <!-- gifts message -->
    <div class="gifts-message clearfix">
      <!-- iu -->
      <div class="gifts-box">
        <dl class="iu">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon01.png')?>" alt=""></dt>
          <dd>
            <!-- box -->
            <div class="box"></div>
            <h3>IObit Uninstaller 11 PRO</h3>
            <em>(1 Anno / 1 PC)</em>
            <span class="arrow"></span>
            <ul>
              <li>Elimina definitivamente programmi, plugin e app di Windows indesiderati con un solo clic!</li>
            </ul>
          </dd>
        </dl>
      </div>
      <!-- sd -->
      <div class="gifts-box">
        <dl class="sd">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon02.png')?>" alt=""></dt>
          <dd>
            <!-- box -->
            <div class="box"></div>
            <h3>Smart Defrag 7 PRO</h3>
            <em>(1 Anno / 1 PC)</em>
            <span class="arrow"></span>
            <ul>
              <li>Offre la migliore deframmentazione del disco e accelera al massimo l'hard driver!</li>
            </ul>
          </dd>
        </dl>
      </div>
      <!-- isu -->
      <div class="gifts-box last">
        <dl class="pf">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon03.png')?>" alt=""></dt>
          <dd>
            <!-- box -->
            <div class="box"></div>
            <h3>Protected Folder</h3>
            <em>(1 Anno / 1 PC)</em>
            <span class="arrow"></span>
            <ul>
              <li>Protegge i tuoi file personali e li mantiene lontani dagli attacchi dannosi!</li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
    <!-- buybtn -->
    <a class="buybtn larger"
       href="https://www.iobit.com/buy.php?product=it-au143pciusdpf2999&ref=it_au143pciusdpfpurchase1912<?php echo $refStr;?>&refs=it_purchase_ascu"
       onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pciusdpf1912-it')">
      <i class="all-icons"></i> APPROFITTANE ORA
    </a>
  </div>
</div>
<!-- end gifts -->

<div class="map wrapper">
  <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
  <h4>Soddisfiamo i nostri clienti ovunque essi siano</h4>
  <div class="mapbox clearfix">
    <dl>
      <dt><b>200+</b></dt>
      <dd>Popolare in più di <b>200</b> paesi in tutto il mondo</dd>
    </dl>
    <dl class="two">
      <dt><b>500+</b></dt>
      <dd>Più di  <b>500+</b>  media hanno apprezzato e commentato Advanced SystemCare Ultimate </dd>
    </dl>
    <dl>
      <dt><b>150,000+</b></dt>
      <dd>Scelto e consigliato da oltre <br> <b>150 mila</b> utenti mondiali</dd>
    </dl>
    <dl class="four">
      <dt><b>80%+</b></dt>
      <dd>Più dell’<b>80%</b> dei nostri utenti ha attivato Advanced SystemCare Ultimate</dd>
    </dl>
  </div>
</div>

<!-- review-content -->
<div class="review wrapper">
  <h2>Facciamo tutto il possibile per soddisfare i nostri<br> clienti ovunque essi siano!</h2>
  <div class="reviewbox ">
    <h3>Recensione dei Media</h3>
    <ul>
      <li class="one"><img src="<?php echo getStaticUrl('images/htmlit.png')?>" alt="HTML"></li>
      <li class="two">
        <img src="<?php echo getStaticUrl('images/dareen-lim.png')?>" alt="Dareen Lim">
      </li>
      <li class="three">
        <img src="<?php echo getStaticUrl('images/rod-garnett.png')?>" alt="Rod Garnett">
      </li>
      <li class="four"><img src="<?php echo getStaticUrl('images/russell-peck.png')?>" alt="Russell Peck"></li>

    </ul>
    <div class="details">
      <div class="">
        <h4>HTML</h4>
        <p>
          "In conclusione Advanced SystemCare Ultimate è un ottimo prodotto che unisce le caratteristiche della versione precedente, insieme a quelle di Advanced SystemCare con Antivirus dando vita ad un prodotto nuovo, robusto e dalle eccellenti funzionalità. L’interfaccia grafica di Advanced SystemCare era già accattivante e ben organizzata."
        </p>
      </div>
      <div class="active">
        <h4>Dareen Lim</h4>
        <p>
         "Con la versione precedente di Advanced SystemCare Ultimate non ho mai avuto problemi di nessun tipo, né per il sistema né per i malware. Dopo aver aggiornato all’ultima versione, le funzionalità aggiuntive hanno reso il mio PC cinque volte più veloce di prima. Mi piace anche la nuova interfaccia. Vi consiglio caldamente di installare Advanced SystemCare Ultimate come programma antivirus, è eccezionale."
        </p>
      </div>
      <div>
        <h4>Rod Garnett</h4>
        <p>
          "Ho avuto un problema che metteva sempre nei guai il mio computer. Dopo avere installato Advanced SystemCare Ultimate, non c’è più il problema dei guai. Antivirus è già incluso nel prodotto, non ho bisogno di installarne un altro. È il vincitore! Il mio computer è sempre aggiornato e funziona velocemente. È il programma più eccellente tra gli altri e senza nussun flusso costante di conflitti."
        </p>
      </div>
      <div>
        <h4>Russell Peck</h4>
        <p>
          "Ho usato varie versioni di Advanced SystemCare per tanti anni. Quando ho visto le caratteristiche di Advanced SystemCare Ultimate, ho subito capito che ne avrei avuto bisogno. Non mi ha mai deluso. Uno dei programmi più semplici, ma più efficaci che ho trovato per mantenere tutti i miei 3 PC sicuri e sani."
        </p>
      </div>
    </div>
    <a class="next" href="javascript: nextFun();"></a>
    <a class="prev" href="javascript: prevFun();"></a>
  </div>
</div>
<!-- end review-content -->
<div class="comparison">
  <div class="wrapper clearfix">
    <div class="comparison">
      <h4>Perché scegliere Advanced SystemCare Ultimate 14?</h4>
      <h5>Una migliore protezione e nessun rallentamento delle prestazioni. Guarda la seguente tabella comparativa</h5>
      <div class="ctable">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
          <tr>
            <th class="text"></th>
            <th class="blue">
              <p><span>Advanced SystemCare</span> Ultimate</p>
            </th>
            <th>AVG<span>Anti-virus</span></th>
            <th>Norton Security<span>Deluxe</span></th>
            <th>Avast! Pro<span>Antivirus</span></th>
            <th>Microsoft<span>Security Essentials</span></th>
            <th>McAfee® AntiVirus</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td class="title first">Percentuale rilevamenti</td>
            <td class="gray">Molto alta</td>
            <td>Normale</td>
            <td>Alta</td>
            <td>Normale</td>
            <td>Alta</td>
            <td>Alta</td>
          </tr>
          <tr>
            <td class="title">Rallentamenti di sistema</td>
            <td class="gray">No</td>
            <td>Sì</td>
            <td>Sì</td>
            <td>Sì</td>
            <td>Sì</td>
            <td>Sì</td>
          </tr>
          <tr>
            <td class="title">Ottimizzazione e pulizia <br> complete del PC</td>
            <td class="gray"><i class="tb-icons red">√</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
          </tr>
          <tr>
            <td class="title">Oltre 20 strumenti aggiuntivi per migliorare le prestazioni del PC</td>
            <td class="gray"><i class="tb-icons red">√</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
          </tr>
          </tbody>
        </table>
      </div>
      <dl class="comlist">
        <dt>
          <i class="all-icons">√</i>
          Percentuale di rilevazioni e protezione massima senza rivali
        </dt>
        <dd>
          Basta un clic per spazzare via virus, trojan, worm, spyware, adware e malware più ostinati e nascosti. Advanced SystemCare Ultimate garantisce anche una protezione proattiva,
          automatizzata ed efficace contro ogni tipo di minaccia alla sicurezza proveniente da Internet, aggiornando rapidamente il suo database di virus.
        </dd>
      </dl>
      <dl class="comlist">
        <dt>
          <i class="all-icons">√</i>
          Scopri la sicurezza senza rallentamenti
        </dt>
        <dd>
          Grazie alla nostra tecnologia di sicurezza all’avanguardia, il tuo sistema lavorerà alla massima velocità, senza alcun rallentamento.
        </dd>
      </dl>
      <dl class="comlist">
        <dt>
          <i class="all-icons">√</i>
          Naviga in sicurezza: cerca, scarica e condividi senza timori.
        </dt>
        <dd>
          La tecnologia antivirus proattiva tiene sotto controllo i processi in tempo reale, analizza i file condivisi via email e blocca le potenziali minacce. Grazie al nostro database impareggiabile
          di rilevazioni, potrai usare il tuo PC in totale sicurezza.
        </dd>
      </dl>
      <dl class="comlist">
        <dt>
          <i class="all-icons">√</i>
          Ottimizza le prestazioni e scopri un nuovo modo di usare il PC
        </dt>
        <dd>
          Il nostro efficace strumento di messa a punto ti permette di usufruire di tutto il potenziale del tuo computer. Grazie all'ottimizzazione in tempo reale e alla funzione ActiveBoost,
          le risorse di sistema vengono gestite in maniera intelligente per garantirti un PC velocissimo.
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- box -->
    <div class="box fl">Advanced SystemCare PRO</div>
    <!-- bottombuy-mid -->
    <div class="bottombuy-mid fl">
      <!-- countdown -->
      <p class="countdown">
        <strong>00</strong> O :
        <strong>00</strong> M :
        <strong>00</strong> S :
        <strong class="last">000</strong>MS*
      </p>
      <!-- off -->
      <div class="off"></div>
    </div>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <!-- price -->
        <p class="price white"><span><big>29</big> <sup>€</sup> <sub>99</sub></span> <del>159,92€</del></p>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=it-au143pciusdpf2999&ref=it_au143pciusdpfpurchase1912<?php echo $refStr;?>&refs=it_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pciusdpf1912-it')">
          <i class="all-icons"></i> APPROFITTANE ORA
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->



<!-- footer -->
<div class="footer ">
  <!-- service -->
  <div class="server wrapper clearfix">
      <!-- visa -->
      <dl class="visa">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd><strong>Garanzia di Rimborso</strong></dd>
        <dd>Garantiamo il rimborso entro <br>60 giorni.</dd>
      </dl>
      <!-- moneyback -->
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dt>
        <dd><strong>Pagamento 100% Sicuro</strong></dd>
        <dd>IObit offre i metodi di pagamento <br>sicuri per la transazione.</dd>
      </dl>
      <!-- godaddy -->
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""/></dt>
        <dd><strong>Attivazione Veloce</strong></dd>
        <dd>Riceverai il codice di <br>licenza in pochi minuti tramite la mail.</dd>
      </dl>
      <!-- servicion -->
      <dl class="servicion">
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dt>
        <dd><strong>Servizio di Supporto</strong></dd>
        <dd>Il nostro supporto tecnico gratuito <br>è disponibile 24 ore su 24.</dd>
      </dl>
    </div>
  <!-- service end -->
  <div class="annotation wrapper">
    <p>Note:</p>
    <p>* I dati potrebbero variare in base al sistema o computer.</p>
    <p>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</p>
  </div>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit.  Tutti i diritti riservati</p>
</div>
<!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>