<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float) $usec + (float) $sec);
}

$viewNum = rand(96, 125);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
  $date = $_GET['d'];
  $cName = 'novxsale2019' . $date;
  $cookie = $_COOKIE[$cName];
  if ($cookie) {
    $packsNum = $_COOKIE[$cName];
    if ($packsNum > 5) {
      $packsNum--;
      setcookie($cName, $packsNum);
      if (rand(0, 100) % 2 == 0) {
        $packsNum = $packsNum + 1;
      }
    } else {
      $packsNum = 5;
    }
  } else {
    $packsNum = 26;
    setcookie($cName, $packsNum);
  }
  echo json_encode(array('packsNum' => $packsNum, 'viewNum' => $viewNum));
  exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('xr_sd'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
  'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
  'sdfeatures_noaction','sdddact_noaction','actreport','nc'))){
  $refStr.='-'.$_GET['ref'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Offerta Speciale - Sconto fino all’85% per Smart Defrag PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title">
      <h1>Offerta Speciale</h1>
      <p>Tempo limitato con uno sconto fino al <span class="percent">85</span>%!</p>
    </div>
    <!-- left-box -->
    <div class="left-box">
<!--      <span class="hand"></span>-->
<!--      <span class="head"></span>-->
      <h2><strong>85%</strong> di sconto <span> Non perderti questa occasione! </span></h2>
      <img src="<?php echo $pResUrl; ?>images/db-box.png" alt="">
      <img src="<?php echo $pResUrl; ?>images/raduem-box.png" alt="" class="raduem-box">
    </div>
    <!-- right-box -->
    <div class="right-box">
      <h3>
        Oggi solo
        <strong class="raduem"></strong>
        <span class="surplus">
          <b class="one"><span>0</span></b>
          <b class="two"><span>0</span></b>
        </span> pezzi rimasti
      </h3>
      <dl>
        <dt><strong>Smart Defrag 6 PRO</strong> <span>15,99€</span> <del>39,99€</del></dt>
        <dd><strong>Protected Folder </strong> <span>0€</span></dd>
        <dd><strong>IObit Uninstaller 9 PRO </strong> <span>0€</span></dd>
        <dd class="last"><span>Vale</span> <b>69,94€</b></dd>
      </dl>
    </div>
    <dl class="price">
      <dt> <strong>15,99€</strong> <del>109,93€</del></dt>
      <dd>
        <a href="https://www.iobit.com/buy.php?product=it-sd63pciupf1599&ref=it_sd63pc1599purchasex1912<?php echo $refStr;?>&refs=it_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3pc1912-it')"
           class="buybtn">
          ACQUISTA ORA
        </a>
      </dd>
      <dd>Più di <b id="bynum">8.007.725</b>  persone hanno acquistato</dd>
    </dl>
  </div>
</div>
<!-- banenr end -->

<!-- choose -->
<div class="choose">
  <div class="wrapper">
    <h2>Perché è necessario attivare Smart Defrag 6 PRO?</h2>
    <hr>
    <p>
      Smart Defrag 6 PRO deframmenta automaticamente tutti i tuoi dischi rigidi, ottimizza il posizionamento dei file e consolida lo spazio libero per garantire una velocità di accesso ai file del 200%* più veloce e migliori prestazioni del PC.
    </p>
  </div>
</div>
<!-- end choose -->

<!-- feature -->
<div class="feature wrapper">
  <h2>Massimizza la prestazione del tuo disco rigido e velocizza il tuo PC</h2>
  <!-- one -->
  <dl class="one clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
    <dd>
      <h3>Fino al 200%* più veloce</h3>
      <p>
        La deframmentazione di file di grandi dimensioni più completa <br>
        ti consente di accedere ai file e avviare il gioco fino al 200%* <br>
        più velocemente.
      </p>
    </dd>
  </dl>
  <!-- two -->
  <dl class="two clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
    <dd>
      <h3>Deframmentazione rapida</h3>
      <p>
        Deframmenta i tuoi dischi e file in modo più completo ed efficiente <br>
        per liberarti dall'attesa della deframmentazione di lunga data.
      </p>
    </dd>
  </dl>
  <!-- three -->
  <dl class="three clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
    <dd>
      <h3>Avvio più veloce del PC</h3>
      <p>
        Deframmenta il registro e i file di <br>
        sistema durante l'esecuzione del <br>
        sistema, assicurandoti un avvio del PC <br>
        più veloce e prestazioni di sistema <br>
        ottimali.
      </p>
    </dd>
  </dl>
  <!-- four -->
  <dl class="four clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
    <dd>
      <h3>Intelligente </h3>
      <p>
        Deframmenta automaticamente file e <br>
        dischi in modo intelligente per far <br>
        funzionare il tuo PC alle massime <br>
        prestazioni ogni volta che ne hai bisogno.
      </p>
    </dd>
  </dl>
</div>
<!-- end feature -->

<!-- gift -->
<div class="gift">
  <div class="wrapper clearfix">
    <h2>Cancella i file ostinati e non preoccuparti mai delle perdite di privacy!</h2>
    <dl class="fl clearfix">
      <dt class="fl"><img src="<?php echo $pResUrl;?>images/pf-gift-box.png" alt="Protected Folder"></dt>
      <dd class="fl">
        <h3>Protected Folder</h3>
        <p>Protegge i tuoi file personali e li mantiene lontani dagli attacchi dannosi!</p>
      </dd>
    </dl>
    <dl class="fl clearfix">
      <dt class="fl"><img src="<?php echo $pResUrl;?>images/iu-gift-box.png" alt="IObit Uninstaller PRO"></dt>
      <dd class="fl">
        <h3>IObit Uninstaller PRO</h3>
        <p>Elimina definitivamente programmi, plugin e app di Windows indesiderati con un solo clic!</p>
      </dd>
    </dl>
    <div class="other fl">
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=it-sd63pciupf1599&ref=it_sd63pc1599purchasex1912<?php echo $refStr;?>&refs=it_purchase_sd"
         onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3pc1912-it')">
        APPROFITTANE ORA
      </a>
      <!-- countdown -->
      <div class="number">
        Affrettati! Solo
        <div class="countdown countdown2">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        pezzi rimasti.
      </div>
    </div>
  </div>
</div>
<!-- end gift -->

<!-- award -->
<div class="award">
  <div class="wrapper">
    <h2>Raccomandato e premiato dai media mondiali</h2>
    <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
  </div>
</div>
<!-- end award -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <div class="content ">
      <dl class="active">
        <dt>
          <h3>Recensioni dei Media</h3></dt>
        <dd>
          <h4>"Il nuovo Smart Defrag si mette in luce per una migliorata efficienza complessiva rispetto al suo predecessore."</h4>
        </dd>
        <dd>"Smart Defrag è stato migliorato per consumare meno risorse del sistema in cui viene installato. In questo modo potrà svolgere tutte le operazioni senza andare a rallentare le normali attività del computer. Smart Defrag non può certo mancare nella collezioni di software presenti sul proprio computer. Testato a fondo su di un computer Windows 8.1, ha dato ottima prova di se offrendo grande velocità ed efficacia."</dd>
      </dl>
      <dl>
        <dt>
          <h3>Recensioni degli Utenti</h3></dt>
        <dd>
          <h4>"Dopo aver usato questo software fantastico, il mio desktop e il mio computer portatile rimangono sempre veloci con tanti spazi liberi."</h4>
        </dd>
        <dd>"Sono un utente di Smart Defrag per tanti anni. Dopo aver usato questo software fantastico, il mio desktop e il mio computer portatile rimangono sempre veloci con tanti spazi liberi. Insieme con il Advanced SystemCare Ultimate, potresti ottenere una protezione completa che mantiene il sistema sempre aggiornato, veloce e sicuro. Potresti utilizzarlo tutti i giorni senza nessun bisogno di aspettare (PC si chiude in automatico) a mantenere il sistema all'ottima condizione, anche se non tu sia un esperto tecnico!"</dd>
      </dl>
      <dl>
        <dt>
          <h3>Recensioni degli Utenti</h3></dt>
        <dd>
          <h4>"È facile da usare, un'utilità che si deve avere per il disco rigido o SSD."</h4>
        </dd>
        <dd>"Ho eseguito una combinazione di RAID 0 SSD e RAID 0 HDD e utilizzo il Smart Defrag Pro per analizzare, deframmentare e mantenere i miei dischi in esecuzione alla massima prestazione. Come tutti i software di IObit, Smart Defrag è molto facile da installare, usare e molto affidabile. Basta impostarlo e lasciarlo. Smart Defrag ha una piccola foot print memoria in modo da non rallentare il sistema. Decisamente consigliato!"</dd>
      </dl>
      <dl>
        <dt>
          <h3>Recensioni degli Utenti</h3></dt>
        <dd>
          <h4>"Smart Defrag è uno strumento di deframmentazione molto efficiente."</h4>
        </dd>
        <dd>"Smart Defrag è uno strumento di deframmentazione molto efficiente, funziona silenziosamente in background quando il computer è inattivo e non ti disturba mai. I dischi sono sempre stati deframmentati e così permette l’accesso rapido ai file e riduce i logori dei dischi. Smart Defrag è il migliore deframmentatore che ho usato, senza dubbio, raccomanderò alla mia famiglia e gli miei amici."</dd>
      </dl>
    </div>
    <ul class="users clearfix lato">
      <li class="active">
        <a href="javascript: void(0);">
          <div class="pic"><img src="<?php echo getStaticUrl('images/html-it.png')?>" alt="HTML.it"></div>
          <p>Cnet</p>
        </a>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/amnon.png')?>" alt="Amnon"></div>
        <p>Amnon</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/hans.png')?>" alt="Hans"></div>
        <p>Hans</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen">
        </div>
        <p>Edward Lee Ah Yen</p>
      </li>
    </ul>
  </div>
</div>
<!-- end review -->

<!-- comparison start -->
<div class="comparison wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Il confronto dei prodotti:</th>
      <td class="space"></td>
      <th class="itemb">Smart Defrag <b>FREE</b></th>
      <td class="space"></td>
      <th class="itema">Smart Defrag <b>PRO</b></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
      <td class="virtue">Deframmentazione ed ottimizzazione di base del disco rigido</td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
      <td class="virtue">Velocità d’accesso ai file fino al 200% più rapida </td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
      <td class="virtue">Avvio del PC più veloce con Boot Time Defrag </td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
      <td class="virtue">Deframmenta i file frammentati in modo automatico e intelligente</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
      <td class="virtue">Personalizza il mode di deframmentazione e i dischi o file da deframmentare  </td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
      <td class="virtue">DMA applicata per un trasferimento dei dati più rapido e più stabile</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
      <td class="virtue">Nessuna interruzione durante il lavoro o la sessione di gioco con Modo Silenzioso</td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
      <td class="virtue">Ottima esperienza di gioco con Ottimizzazione di Gioco</td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
      <td class="virtue">Deframmentazione pianificata durante i periodi di inattività del sistema</td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
      <td class="virtue">Aggiornamento automatico alla versione più recente</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
      <td class="virtue">Supporto tecnico in linea entro 24 ore</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th class="text" colspan="2"></th>
      <td class="space"></td>
      <th class="itemb">Smart Defrag <b>FREE</b></th>
      <td class="space"></td>
      <th class="itema">
        <p>1 Anno, 3 PC + Regali</p>
        <p><strong>€15,99 </strong> <del>€109,93</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-sd63pciupf1599&ref=it_sd63pc1599purchasex1912<?php echo $refStr;?>&refs=it_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3pc1912-it')">
          ACQUISTA ORA
        </a>
      </th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison end -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl class="fl">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    <dd>
      <h3>Provalo SENZA RISCHI - con la nostra garanzia di rimborso entro 60 giorni</h3>
      <p>
        Siamo certi che l’attivazione della versione PRO a un prezzo ragionevole <br>
        aumenterà le prestazioni del disco!
      </p>
    </dd>
  </dl>
  <dl class="fr">
    <dt><h3>Accettiamo</h3></dt>
    <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
  </dl>
</div>
<!-- end servide -->

<!-- annotation start -->
<dl class="annotation wrapper">
  <dt>Note:</dt>
  <dd>
    1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.
  </dd>
  <dd>2*.Data potrebbe variare in base al sistema o computer. </dd>
</dl>
<!-- annotation end -->

<!-- footer start -->
<div class="footer wrapper">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
<!-- footer end -->

<!-- float -->
<div class="float">
  <p>
    Affrettati, <br>
    solo <span class="packsNum">78</span> pezzi rimasti.
  </p>
</div>
<!-- end float -->

<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>