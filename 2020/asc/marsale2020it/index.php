<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];

include $pRootUrl.'include/common.inc.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta speciale, sconti fino all'85% su Advanced SystemCare PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
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
    <h1>SALDI</h1>
    <h6>Sconti fino all’<b>85%</b> per sbloccare il potenziale del tuo computer al massimo!</h6>
    <!-- content -->
    <div class="content clearfix">

      <!-- 1pc -->
      <div class="offer small fl">
        <dl>
          <dt>
            <h4>BASIC</h4>
            <img class="box" src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt="Advanced SystemCare PRO">
            <span class="off"><b>-40</b>%</span>
          </dt>
          <dd>
            <p class="type"><span>1 Anno / 1 PC</span></p>
            <!-- price -->
            <p class="price"><del>29,99€</del> <span>17,99€</span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=it-asc131pc1799&ref=it_asc131pc1799purchase2003<?php echo $refStr;?>&refs=it_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC2003-it')">
              <i class="all-icons"></i>
              ACQUISTA
            </a>
          </dd>
        </dl>
      </div>

      <!-- 3pc -->
      <div class="offer large fl">
        <!-- dl -->
        <dl>
          <dt>
            <h4>PROFESIONALE</h4>
            <img class="box" src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt="Advanced SystemCare PRO">
            <span class="off"><b>-60</b>%</span>
          </dt>
          <dd>
            <p class="type"><span>1 Anno / 3 PC</span></p>
            <!-- price -->
            <p class="price"><del>49,99€</del> <span>19,99€</span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=it-asc133pc1999&ref=it_asc133pc1999purchase2003<?php echo $refStr;?>&refs=it_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc2003-it')">
              <i class="all-icons"></i>
              ACQUISTA
            </a>
            <!-- packsNum -->
            <p class="packs"><strong class="packsNum1">12</strong> PEZZI RIMASTI!</p>
          </dd>
        </dl>
      </div>

      <!-- 3pc+bundle -->
      <div class="offer largest fr">
        <!-- dl -->
        <dl>
          <dt>
            <!-- countdown -->
            <p class="countdown">
              <i></i>
              <strong>00</strong>min:
              <strong>00</strong>sec:
              <strong>00</strong>ms
            </p>
            <h4>PREMIUM</h4>
            <img class="box" src="<?php echo getStaticUrl('images/banner-bundle.png')?>" alt="Advanced SystemCare PRO+Smart Defrag PRO+IObit Uninstaler PRO+ Protected Folder">
            <span class="off"><b>-85</b>% <em class="more">-20%</em></span>
            <span class="tip"></span>
            <div class="detail">
              <h3><b>4 in 1.</b> Advanced SystemCare PRO, </h3>
              <p>
                Smart Defrag PRO, IObit Uninstaller PRO e <br>
                Protected Folder. Pacchetto completo per rendere <br>
                il tuo PC più pulito, più veloce, e più sicuro.
              </p>
            </div>
          </dt>
          <dd>
            <p class="type"><span>1 Anno / 3 PC</span> + Regalo Gratis</p>
            <!-- price -->
            <p class="price"><del>199,92€</del> <span>21,99€</span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=it-asc133pciusdpf2199&ref=it_asc133pciupfsd2199purchase2003<?php echo $refStr;?>&refs=it_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pciupfsd2003-it')">
              <i class="all-icons"></i>
              ACQUISTA
            </a>
            <!-- packsNum -->
            <p class="packs"><strong class="packsNum2">5</strong> PEZZI RIMASTI!</p>
          </dd>
        </dl>
      </div>

    </div>
  </div>
</div>
<!-- end banner -->

<!-- benefit -->
<div class="benefit">
  <div class="wrapper">
    <h2>
      Ti garantiamo un PC più veloce, stabile e sicuro con la <br>
      versione PRO Altrimenti, ti rimborseremo subito! <img class="bottombtn" src="<?php echo getStaticUrl('images/tip02.png')?>" alt="">
    </h2>
    <div class="original clearfix">
      <!-- showcase -->
      <div class="showcase">
        <div class="inner">
          <ul class="screenshot">
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-00.jpg'); ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-04.jpg'); ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-02.jpg'); ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-03.jpg'); ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-01.jpg'); ?>" alt="">
            </li>
          </ul>
        </div>
        <ul class="zoom">
          <li></li>
          <li class="fun3">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png'); ?>" alt="">
            </div>
          </li>
          <li class="fun2">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png'); ?>" alt="">
            </div>
          </li>
          <li class="fun4">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png'); ?>" alt="">
            </div>
          </li>
          <li class="fun5">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-05-zoom.png'); ?>" alt="">
            </div>
          </li>
        </ul>
        <ul class="list-icon">
          <li class="active"></li>
          <li class=""></li>
          <li class=""></li>
          <li class=""></li>
          <li class=""></li>
        </ul>
      </div>
      <!-- detail-list -->
      <div class="detail-list">
        <dl class="">
          <dt><i class="benefit04"></i></dt>
          <dd>
            <h3>100%* PIÙ SICURO</h3>
            <p>Protegge la tua privacy e i tuoi dati dagli accessi segreti, impedisce qualsiasi tentativo da parte di intrusi maligni mantenendo la tua privacy due volte* più sicura rispetto alla versione Free.</p>
          </dd>
        </dl>
        <dl class="">
          <dt><i class="benefit02"></i></dt>
          <dd>
            <h3>200%* PIÙ VELOCE</h3>
            <p>Pulisce tutti i file inutili e ottimizza la CPU e la Ram per accelerare l'avvio, aumenta la velocità del sistema per velocizzare il PC lento fino al 200% in più.</p>
          </dd>
        </dl>
        <dl class="three">
          <dt><i class="benefit03"></i></dt>
          <dd>
            <h3>300%* PIÙ FLUIDO</h3>
            <p>Aumenta notevolmente la velocità di download, di gioco, di navigazione su Internet e su piattaforme video come YouTube fino al 300% in più.</p>
          </dd>
        </dl>
        <dl class="three">
          <dt><i class="benefit01"></i></dt>
          <dd>
            <h3>MASSIMO SPAZIO LIBERO</h3>
            <p>Pulisce in modo più profondo i file spazzatura, i collegamenti invalidi, i file di registro di sistema e i file di download incompleti con l'ottimizzazione avanzata.</p>
          </dd>
        </dl>
        <a href="Javascript:void(0);" class="intro">Per maggiori informazioni clicca qui &gt;</a>
      </div>
    </div>
  </div>
</div>
<!-- end benefit -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper clearfix">
    <h2><b>Paghi 1 ottieni 4!</b> Il pacchetto più completo per mantenere il pc veloce e sicuro!</h2>
    <!-- asc -->
    <dl class="asc">
      <dt>
        <!-- packsNum -->
        <p class="packs">
          <strong class="packsNum2">5</strong>
          <span>PEZZI <br> RIMASTI!</span>
        </p>
        <!-- off -->
        <span class="off">-85%</span>
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/gifts-asc.png')?>" alt="Advanced SystemCare PRO">
      </dt>
      <dd>
        <h3>ASC PRO</h3>
        <p>
          Ottimizzazione professionale per <br>
          mantenere il PC pulito e veloce!
        </p>
      </dd>
    </dl>
    <!-- sd -->
    <dl class="sd">
      <dt>
        <!-- off -->
        <span class="off">GRATIS</span>
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO">
      </dt>
      <dd>
        <h3>SD PRO <del>39,99€</del></h3>
        <p>
          Offre la migliore deframmentazione <br>
          del disco e  accelera al massimo <br>
          l'hard driver!
        </p>
      </dd>
    </dl>
    <!-- iu -->
    <dl class="iu">
      <dt>
        <!-- off -->
        <span class="off">GRATIS</span>
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/gifts-iu.png')?>" alt="IObit Uninstaller PRO">
      </dt>
      <dd>
        <h3>IU PRO <del>39,99€</del></h3>
        <p>
          Elimina definitivamente tutti <br>
          i programmi,  plugin e  applicazioni <br>
          non desiderati con un solo clic.
        </p>
      </dd>
    </dl>
    <!-- pf -->
    <dl class="pf">
      <dt>
        <!-- off -->
        <span class="off">GRATIS</span>
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder">
      </dt>
      <dd>
        <h3>PF <del>39,99€</del></h3>
        <p>
          Protegge i tuoi file personali e li <br>
          mantiene lontani dagli attacchi <br>
          dannosi!
        </p>
      </dd>
    </dl>
    <!-- buybtn -->
    <a class="buybtn"
       href="http://www.iobit.com/buy.php?product=it-asc133pciusdpf2199&ref=it_asc133pciupfsd2199purchase2003<?php echo $refStr;?>&refs=it_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pciupfsd2003-it')">
      <i class="all-icons"></i>
      APPROFITTANE SUBITO
    </a>
  </div>
</div>
<!-- end gifts -->

<!-- review -->
<div class="review wrapper">
  <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
  <p>Soddisfare i nostri clienti ovunque essi siano</p>
  <!-- message -->
  <ul class="message clearfix">
    <li class="one">
      <strong>200+</strong>
      <p>Popolare in più di <b>200</b> paesi in <br> tutto il mondo</p>
    </li>
    <li class="two">
      <strong>1,000+</strong>
      <p>Più di <b>1,000</b> Media hanno apprez- <br> zato e commentato </p>
    </li>
    <li class="three">
      <strong>250,000,000+</strong>
      <p>Scelto e consigliato da oltre <br> <b>250</b> milioni di utenti mondiali</p>
    </li>
    <li>
      <strong>80%+</strong>
      <p>Più dell'<b>80%</b> degli utenti di Advanced <br> SystemCare hanno attivato l'edizione PRO</p>
    </li>
  </ul>
  <!-- content -->
  <div class="content clearfix">
    <!-- media-logo -->
    <img class="media-logo" src="<?php echo getStaticUrl('images/awrad.png')?>" alt="">
    <!-- review-content -->
    <div class="review-content">
      <!-- head-portrait -->
      <ul class="clearfix">
        <li class="active"><img src="<?php echo getStaticUrl('images/html.png')?>" alt="HTML"></li>
        <li><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></li>
        <li><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></li>
        <li><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></li>
        <li><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></li>
      </ul>
      <!-- line -->
      <span class="line">HTML</span>
      <!-- message -->
      <div class="review-message">
        <!-- HTML -->
        <p class="active">
          "Advanced SystemCare Pro si installa con semplicità. Advanced SystemCare Pro strizza l'occhio anche alla sicurezza ed è possibile scaricare come plugin aggiuntivo IObit Malware Fighter con cui proteggere il computer dai malware. Nella Modalità Semplificata sarà il programma a gestire in automatico quasi tutte le funzioni, mentre nella Modalità Esperto avremo la possibilità di configurare molte delle opzioni disponibili."
        </p>
        <!-- Bruce Ramsay -->
        <p>
          "Ho cominciato a usare la versione gratuita e infine ho acquistato la versione completa. Ha funzionato bene per tanti anni mantenendo il mio computer pulito e senza nessun "problema" e finora non mi ha mai deluso. Di recente, ho contattato il team di supporto di Advanced SystemCare e mi hanno risposto entro un giorno o due con tutto quello che dovevo sapere. A mio parere è importante il supporto per mantenere e far rimanere i clienti, ASC ha vinto sia in termini di prodotti che in termini di supporto."
        </p>
        <!-- Hank Ewert -->
        <p>
          "Come la maggior parte degli utenti, non sono un esperto di computer. Non so quanti programmi ho provato nel corso degli anni, tutti reclamavano di essere i migliori, ma non si sono mai avvicinati alla protezione di Advanced SystemCare Pro, che sto usando adesso. Dopo aver acquistato questo programma impressionante, non ho mai chiamato un tecnico per chiedere aiuto, nemmeno una volta. Ha superato le mie aspettative, si mantiene sempre aggiornato e la grafica è molto bella. Grazie mille a tutti voi per rendere la mia vita molto più facile e veloce."
        </p>
        <!-- Charles R. Widick -->
        <p>
          "In quanto tecnico per la riparazione di computer, ho trovato che la maggior parte dei problemi possono essere risolti con la scansione e riparazione di Advanced SystemCare Free. Di solito, dopo aver finito una riparazione, consiglio al cliente di acquistare la versione Pro di questo prodotto. Chi ha più bisogno di un tecnico, avendo il potente Advanced SystemCare che cura il tuo sistema 24-7? Questo è il miglior prodotto che ogni utente privato dovrebbe comprare e provare. Grazie per aver reso il mio lavoro più facile."
        </p>
        <!-- Loretta Harnarine -->
        <p>
          "Questo programma è il migliore che abbia mai provato e usato. Ora il mio PC funziona molto meglio ed è più veloce. Ha pulito i file indesiderati, duplicati e le cartelle vuote, mi ha aiutato a distruggere i file e ha pulito e deframmentato i registri e tanti file sul mio PC. Ti raccomando di acquistare questo programma, non è costoso e le cose che farà per il tuo PC saranno totalmente sorprendenti."
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end review -->

<!-- compare -->
<div class="compare wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Confronto delle funzionalità:</th>
      <th class="itemb">
        <div class="box">
          La tua versione <br> ATTUALE
          <span></span>
        </div>
      </th>
      <th class="space"></th>
      <th class="itema">
        <div class="box">
          La versione PRO <br> AGGIORNATA
          <span></span>
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icon"><img src="<?php echo getStaticUrl('images/icons-01.png')?>" alt=""></td>
      <td class="virtue">Pulizia, riparazione ed ottimizzazione di base del sistema</td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo getStaticUrl('images/icons-02.png')?>" alt=""></td>
      <td class="virtue">300% maggiore rapidità di Internet con Internet Booster <span>Agglornato</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo getStaticUrl('images/icons-03.png')?>" alt=""></td>
      <td class="virtue">200% avvio più veloce con Ottimizzazione dell'Avvio <span>Agglornato</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo getStaticUrl('images/icons-04.png')?>" alt=""></td>
      <td class="virtue">Sistema più stabile con Pulizia Profonda del Registro di Windows <span class="red">Raccomandato per PC vecchio</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo getStaticUrl('images/icons-05.png')?>" alt=""></td>
      <td class="virtue">Sistema più veloce con Motore di Ottimizzazione del Disco Rigido <span class="red">Raccomandato per PC vecchio</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo getStaticUrl('images/icons-06.png')?>" alt=""></td>
      <td class="virtue">Assicura la privacy online con Scudo della Privacy e Pulizia dell'Impronta Digitale <span class="nuo">Nuovo</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo getStaticUrl('images/icons-07.png')?>" alt=""></td>
      <td class="virtue">Rileva e blocca le minacce alla sicurezza con Protezione in Tempo Reale <span>Agglornato</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo getStaticUrl('images/icons-09.png')?>" alt=""></td>
      <td class="virtue">Navigazione online più sicura con Rimozione Automatica delle Tracce di Privacy <span>Agglornato</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo getStaticUrl('images/icons-10.png')?>" alt=""></td>
      <td class="virtue">Massima convenienza con Aggiornamento Automatico e Pulizia Automatica della RAM</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo getStaticUrl('images/icons-11.png')?>" alt=""></td>
      <td class="virtue">Privilegi di servizio 24/7 Supporto Tecnico Gratuito</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr class="last">
      <td class="icon radius"></td>
      <td class="virtue radius"></td>
      <td class="itemb radius"></td>
      <td class="space radius"></td>
      <td class="itema radius"> <span class="shadow"></span></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- compare end -->

<!-- footbuy -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <h2><span>Solo 0.05€ al giorno,</span> goditi subito l'ottimizzazione professionale!</h2>
    <div class="imgbox fl">
      <div class="imglist gift on">
        <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
      </div>
      <div class="imglist one">
        <img src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
      </div>
      <div class="imglist three">
        <img src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
      </div>
    </div>
    <ul class="fl">
      <li class="gift on clearfix" data-num="2">
        <span>1 Anno / 3 PC+ pacchetto gtatis </span>
        <strong>-85%</strong>
        <em class="more">-20%</em>
      </li>
      <li class="two clearfix" data-num="1">
        <span>1 Anno / 3 PC</span>
        <strong> -60% </strong>
      </li>
      <li class="three clearfix" data-num="0">
        <span>1 Anno / 1 PC</span>
        <strong> -40% </strong>
      </li>

    </ul>
    <div class="fr">
      <!-- price -->
      <p class="price"><span>21,99€</span> <del>199,92€</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="http://www.iobit.com/buy.php?product=it-asc133pciusdpf2199&ref=it_asc133pciupfsd2199purchase2003<?php echo $refStr;?>&refs=it_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pciupfsd2003-it')">
        <i class="all-icons"></i>
        ACQUISTA SUBITO
      </a>
      <p class="notice">Offerta limitata, non fartela scappare!</p>
    </div>
  </div>
</div>
<!-- end footbuy -->

<!-- service -->
<div class="service wrapper">
  <dl class="one">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png');?>" alt=""></dt>
    <dd>
      <h3>Garanzia di Soddisfazione</h3>
      <p>60 giorni rimborso</p>
    </dd>
  </dl>
  <dl class="two">
    <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png');?>" alt=""></dt>
    <dd>
      <h3>Pagamento Assicurato</h3>
      <p>
        IObit supporta diverse modalità di <br>
        pagamento sicure
      </p>
    </dd>
  </dl>
  <dl class="three">
    <dt><img src="<?php echo getStaticUrl('images/carcut.png');?>" alt=""></dt>
    <dd>
      <h3>Attivazione Veloce</h3>
      <p>
        Dopo il tuo acquisto, riceverai il <br>
        codice di licenza in pochi muniti <br> tramite la mail
      </p>
    </dd>
  </dl>
  <dl class="four">
    <dt><img src="<?php echo getStaticUrl('images/service.png');?>" alt=""></dt>
    <dd>
      <h3>Servizio Clienti</h3>
      <p>
        24/7 Supporto tecnico gratuito
      </p>
    </dd>
  </dl>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer wrapper">
  <dl>
    <dt>Note:</dt>
    <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
    <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
    <dd>* Se sei insoddisfatto, annulla entro 60 giorni senza alcun addebito, ti saranno rimborsati automaticamente sulla tua carta di credito o account PayPal.</dd>
  </dl>
  <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
</div>
<!-- end footer -->

<!-- coupon -->
<div class="coupon larger">
  <div class="content clearfix">
    <!-- smaller -->
    <a class="button smaller" href="javascript: smaller();"><span>Minimizza</span></a>
    <!-- off -->
    <p class="off">
      <span>EXTRA</span> <br>
      <b>-20%</b> <br>
      <small>sull'offerta di 21,99€</small>
    </p>
    <!-- dl -->
    <dl>
      <dt>
        <strong>EXTRA SCONTO</strong>
        <p>
          Sconto speciale per gli utenti fortunati, <br>
          solo <b>20</b> vincitori!
        </p>
      </dt>

      <dd>
        <!-- buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=it-asc133pciusdpf1799&ref=it_asc133pciupfsd1799purchase2003<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pciupfsd2003-it')">
          APPROFITTANE SUBITO
        </a>
        <!-- countdown -->
        <p class="countdown">
          <strong>00</strong>min:
          <strong>00</strong>sec:
          <strong class="last">000</strong>ms
        </p>
      </dd>
    </dl>
  </div>
</div>
<div class="coupon smaller">
  <div class="content clearfix">
    <!-- close -->
    <a class="button close" href="javascript: close();"><span>Chiudi</span></a>
    <!-- off -->
    <p class="off"></p>
    <!-- dl -->
    <dl>
      <dd>
        <!-- buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=it-asc133pciusdpf1799&ref=it_asc133pciupfsd1799purchase2003<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pciupfsd2003-it')">
          APPROFITTANE SUBITO
        </a>
        <!-- countdown -->
        <p class="countdown">
          <strong>00</strong>min:
          <strong>00</strong>sec:
          <strong class="last">000</strong>ms
        </p>
      </dd>
    </dl>
  </div>
</div>
<!-- end coupon -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>