 <?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}

$refStr='';
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_iu','xi_iu','xb_iu','xnc_iu'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerte Speciali - Sconti fino all’85% su IObit Uninstaller 10 PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
  <script>
  var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
  var paramTo = MApp(2.2).url.getParameters('to');
    if ((paramTo == 'enable') || (paramTo == 'installmonitor')) {
      window.location.href = "./installmonitor.php" + queryStr;
    }
  </script>
</head>
<body>
<!-- banner -->
<div class="banner">
<!--  <div class="lamp">-->
<!--    <div class="light hide"></div>-->
<!--    <div class="light01 hide"></div>-->
<!--    <div class="light02 hide"></div>-->
<!--  </div>-->
<!--  <div class="snow"></div>-->

  <div class="wrapper">
<!--    <div class="star"></div>-->
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Offerte Speciali Il prezzo più basso!</h1>
    <div class="box">
      <dl>
        <dt>Vale <del>29,99€</del></dt>
        <dd>
          <strong>13,99€</strong>
          <span>1 PC, 1 Anno</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO" class="img-box">
      <!-- 1pc buybtn -->
      <a href="https://www.iobit.com/buy.php?product=it-iu101pc1399&ref=it_iu101pc1399purchase1912<?php echo $refStr;?>&refs=it_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1912-it')"
         class="buybtn small">
        ACQUISTA ORA
      </a>
    </div>
    <div class="box gift-box">
      <dl>
        <dt>Vale <del>109,93€</del></dt>
        <dd>
          <strong>15,99€</strong>
          <span><b>3 PC</b>, 1 Anno</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" class="img-box">
      <!-- 3pc buybtn -->
      <a href="https://www.iobit.com/buy.php?product=it-iu103pcsdpf1599&ref=it_iu103pcsdpf1599purchase1912<?php echo $refStr;?>&refs=it_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcsdisu1912-it')"
         class="buybtn">
        ACQUISTA ORA
      </a>
      <p>Pochi pezzi disponibili, affrettati!</p>
    </div>
    <p class="last">Se non sei soddisfatto, verrai rimborsato entro i primi 60 giorni.</p>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">

  <!-- intro -->
  <div class="intro wrapper clearfix">
    <h2>Goditi una disinstallazione potente <br> per una navigazione più sicura e veloce!</h2>
    <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" class="img-box">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Potente</strong>
        <p>Disinstalla facilmente i programmi indesiderati che non possono essere rimossi.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Pulito <span>NEW</span></strong>
        <p>Blocca le notifiche fastidiose del browser e pulisce automaticamente i dati inutili dei programmi disinstallati. </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Intelligente</strong>
        <p>Rileva e disinstalla i plugin pubblicitari maligni.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd>
        <strong>Veloce</strong>
        <p>Aggiorna tutti i software importanti con un solo clic.</p>
      </dd>
    </dl>
    <p class="learn-more">Differenze tra la versione FREE e PRO >></p>
  </div>
  <!-- end intro -->

  <div class="gift-content wrapper clearfix">
    <h2>Cosa possono fare questi regali gratuiti per te?</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="Smart Defrag PRO"></dt>
      <dd>
        <strong>0€</strong> <del>29,99€</del>
        <p>Deframmenta il disco automaticamente e rapidamente.</p>
        <p>Accelera notevolmente l'accesso ai dati.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="IObit Software Updater PRO"></dt>
      <dd>
        <strong>0€</strong> <del>39,95€</del>
        <p>Protegge i tuoi file personali dagli attacchi dannosi.</p>
        <p>L’uso della password impedisce a chiunque di aprire i tuoi file.</p>
      </dd>
    </dl>
  </div>
  <div class="wrapper">
    <div class="betwwen-buy">
      <div class="content">
        <img src="<?php echo getStaticUrl('images/between-buy-box.png')?>" alt="" class="img-box">
        <dl>
          <dt><strong>15,99€</strong> <del>109,93€</del></dt>
          <dd>
            <!-- 3pc buybtn -->
            <a href="https://www.iobit.com/buy.php?product=it-iu103pcsdpf1599&ref=it_iu103pcsdpf1599purchase1912<?php echo $refStr;?>&refs=it_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcsdisu1912-it')"
               class="buybtn red">
              APPROFITTANE ORA
            </a>
          </dd>
          <dd class="last">Pochi pezzi disponibili, affrettati!</dd>
        </dl>
      </div>
    </div>
  </div>


</div>
<!-- end container -->
<!-- review -->
<div class="review wrapper clearfix">
  <div class="title">
    <h2>Riconoscimenti e Recensioni in tutto il mondo </h2>
    <p>Soddisfare i nostri clienti ovunque essi siano</p>
  </div>
  <div class="review-icons fl">
    <img src="<?php echo $pResUrl;?>images/review-icons.png" alt="">
  </div>
  <div class="review-content fr">
    <ul class="clearfix">
      <li class="active">
        <img src="<?php echo $pResUrl;?>images/pc.png" alt="PC Magazine">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/samrat-kumar.png" alt="Samrat">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/john-glenn-perong.png" alt="John Glenn Perong">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/ivan.png" alt="Ivan White">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/ali-tekin.png" alt="Ali Tekin">
      </li>
    </ul>
    <span class="line"></span>
    <div class="review-message">
      <!-- MakeUseOf -->
      <p class="active">
        Se hai bisogno di un programma che ti consenta di disinstallare in modo pulito e completo i programmi e le applicazioni, avvia IObit Uninstaller. Questa utilità gratuita rende molto facile la rimozione delle app, inclusi file sparsi che spesso non vengono rimossi quando si utilizza Windows per eliminare i software dal disco rigido o dalla SSD. <span>–PC Magazine</span>
      </p>
      <!-- Jeff A Watts -->
      <p>
        In passato ho usato diversi programmi di disinstallazione, tuttavia, una volta che ho iniziato a utilizzare IOBit Uninstaller dalla versione 7.0, non ho più utilizzato nessun'altra applicazione. Ha un'interfaccia facile da usare e fa il lavoro per cui è pensato alla massima perfezione. Ti aiuta a ripulire automaticamente il registro che altrimenti rimarrebbe stracolmo di avanzi e preserva così la salute del PC. La capacità di identificare Bundleware e rimuoverli è una grande funzionalità presente in IOBit Unistaller che non ha eguali. <span>-Samrat Kumar Chakrabortty</span>
      </p>
      <!-- Lynette van Niekerk -->
      <p>
        IObit Uninstaller trova nei miei browser dei plugin che non sapevo nemmeno esistessero. La pulizia dei file residui è ottima, non lascia alcun dato inutile del software disinstallato. Mi ricorda gli aggiornamenti disponibili per tutti i miei programmi. Complessivamente, le prestazioni del mio computer sono migliorate grazie a questo programma. È molto conveniente e facilmente gestibile, l’ho persino consigliato ai miei amici. <span>- John Glenn Perong</span>
      </p>
      <!-- Paulo Martins -->
      <p>
        IObit Uninstaller ha fatto molta strada, l'ho usato per molto tempo, mi piace moltissimo, è molto accurato e migliora giorno dopo giorno. Sono molto soddisfatto, senza di lui non lo sarei. Se ancora non lo stai usando potresti provarlo, è 100 volte migliore rispetto a un anno fa. Pulisce tutta la spazzatura indesiderata del registro e lo fa anche molto bene. <span>-Ivan White</span>
      </p>
      <!-- Lovro Žužić -->
      <p>
        Questo programma mi ha permesso di risparmiare denaro. Prima di utilizzarlo, il mio computer era molto lento, non potevo usarlo per fare niente. Ora il mio computer è veramente pulito e grazie a questo programma è diventato molto più veloce. Sono riuscito a salvare il mio computer grazie a IObit Uninstaller. Grazie mille IObit, ti amo. <span>- Ali Tekin</span>
      </p>
    </div>
  </div>
</div>
<!-- end review -->
<!-- comparison -->
<div class="comparison">
  <div class="wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text" colspan="2">Quali sono i vantaggi della versione PRO?</th>
        <td class="space"></td>
        <th class="itema"><span>Versione Free</span></th>
        <td class="space"></td>
        <th class="itemb"><span>Versione PRO</span></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
        <td class="virtue">Disinstalla i programmi rapidamente</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
        <td class="virtue">Rimuove il software testardo</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
        <td class="virtue">Rileva e disinstalla i programmi di terze parti insieme al freeware </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
        <td class="virtue">Elimina automaticamente gli avanzi di file</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
        <td class="virtue">Identifica e rimuove i plugin pubblicitari</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
        <td class="virtue">Aggiorna tutti i software importanti con un solo clic</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
        <td class="virtue">Aggiornamento automatico alla versione più recente</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
        <td class="virtue">Ripristina automaticamente le modifiche</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
       <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
        <td class="virtue">24/7 Supporto tecnico gratuito </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- end comparison -->

<!--bottom-->
<div class="bottom">

  <div class="wrapper bottom-content clearfix">
    <div class="content">
      <div class="img-box"></div>
      <ul>
        <li><i></i> <strong>1 Anno, <b>1 PC</b></strong> Ora: <span>13</span>,99€</li>
        <li class="active"><i></i> <strong>1 Anno, <b>3 PC</b></strong> Ora: <span>15</span>,99€</li>
      </ul>
      <dl>
        <dt><span>85%</span> di sconto</dt>
        <dd>
          <!-- 3pc buybtn -->
          <a href="https://www.iobit.com/buy.php?product=it-iu103pcsdpf1599&ref=it_iu103pcsdpf1599purchase1912<?php echo $refStr;?>&refs=it_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcsdisu1912-it')"
             class="buybtn">
            ACQUISTA ORA
          </a>
        </dd>
        <dd class="last">Pochi pezzi disponibili, affrettati!</dd>
      </dl>
    </div>
  </div>

  <!-- service -->
  <div class="service  clearfix">
    <div class="wrapper">
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt="" /></dt>
        <dd><strong>Garanzia di Rimborso</strong></dd>
        <dd>
          Garantiamo il rimborso entro <br>
          60 giorni.
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/godaddy-secure.png" alt="" /></dt>
        <dd><strong>Pagamento 100% Sicuro</strong></dd>
        <dd>
          IObit offre i metodi di pagamento <br>
          sicuri per la transazione.
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/cart.png" alt="" /></dt>
        <dd><strong>Attivazione Veloce</strong></dd>
        <dd>
          Riceverai il codice di <br>
          licenza in pochi minuti tramite la mail.
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo $pResUrl;?>images/24hours.png" alt="" /></dt>
        <dd><strong>Servizio di Supporto</strong></dd>
        <dd>
          Il nostro supporto tecnico gratuito <br>
          è disponibile 24 ore su 24.
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer wrapper">
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
      <dd>2*.I dati potrebbero variare in base al sistema o computer.</dd>
    </dl>
    <div class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
  </div>
  <!-- end footer -->

</div>
<!--bottom-->

<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>