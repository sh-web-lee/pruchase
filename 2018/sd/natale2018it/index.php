<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$viewNum=rand(96,125);
if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $cName='itsdoct'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>2){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=2;
    }
  }else{
    $packsNum=97;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit();
}

$refStr='';
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
    'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
    'sdfeatures_noaction','sdddact_noaction','actreport'))){
  $refStr.='-'.$_GET['ref'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Grande Offerta! sconti fino al 80% su Smart Defrag PRO – Offerta di natale 2018 | IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
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
    <h1>
       Saldi Natalizi 2018
       Prezzo più basso del 2018 in assoluto! Primo arrivato, primo s
    </h1>
    <!-- content -->
    <div class="content clearfix">
      <!-- left-message -->
      <div class="left-message fl">
        <img src="<?php echo $pResUrl;?>images/banner-sd.png" alt="">
        <img class="db-reduce" src="<?php echo getStaticUrl('images/banner-sd-reduce.png')?>" alt="">
      </div>
      <!-- right-message -->
      <div class="right-message fr">
        <!-- title -->
        <h3> Offerta limitata a 300 pezzi oggi!</h3>
        <!-- surplus -->
        <p class="surplus">Solo  <b class="one">0</b><b class="two">0</b><b class="three">0</b> disponibili*!</p>
        <!-- progressbar -->
        <div class="progressbar">
          <span></span>
        </div>
        <!-- view -->
        <p class="view"><span class="viewNum"><?php echo $viewNum;?></span> utenti stanno guardando</p>
        <!-- price -->
        <p class="price">
          <strong>17</strong>
          <sup> 99</sup>
          <del> €99,93</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-sd63pciupf1799&ref=it_sd63pciupfpurchase1811<?php echo $refStr;?>&refs=it_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1811-it')">
           APPROFITTANE ORA
        </a>
        <!-- attention -->
        <p class="attention">Più di <span class="buyNum">626,078</span> acquistati</p>
        <!-- moneyback -->
        <img class="moneyback" src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="">
      </div>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
</div>
<!-- payment end -->

<!-- benfits start -->
<div class="benfits wrapper clearfix">
 <h2>Massimizza la prestazione del tuo disco rigido e velocizza il tuo PC con Smart Defrag 6 PRO</h2>
 <img src="<?php echo getStaticUrl('images/benfits.jpg')?>" alt="">
 <dl>
    <dt><img src="<?php echo getStaticUrl('images/benfits-icon01.png')?>" alt=""></dt>
    <dd>
      <strong>Nuovo motore ultra-rapido</strong>
      <p>Deframmenta i file in modo più efficiente e <br> completo in meno tempo</p>
    </dd>
  </dl>
   <dl>
    <dt><img src="<?php echo getStaticUrl('images/benfits-icon02.png')?>" alt=""></dt>
    <dd>
      <strong>Fino al 200% più veloce *</strong>
      <p>Aumenta la velocità di accesso ai file e quella di avvio del gioco con Deframmentazione di File di Grandi Dimensioni </p>
    </dd>
  </dl>
   <dl>
    <dt><img src="<?php echo getStaticUrl('images/benfits-icon03.png')?>" alt=""></dt>
    <dd>
      <strong>Auto Deframmentazione Intelligente </strong>
      <p>Deframmenta in modo automatico e intelligente <br> i file e i dischi selezionati senza interruzioni</p>
    </dd>
  </dl>
   <dl>
    <dt><img src="<?php echo getStaticUrl('images/benfits-icon04.png')?>" alt=""></dt>
    <dd>
      <strong>Avvio del PC più veloce</strong>
      <p>Goditi l'avvio del PC più veloce e la massima velocità di esecuzione del sistema con Deframmentazione di Avvio</p>
    </dd>
  </dl>
</div>
<!-- benfits end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>REGALI GRATIS ESCLUSIVI PER NATALE 2018!</h2>
        <!-- IU -->
    <dl class="iu-box">
      <dt><img src="<?php echo $pResUrl;?>images/iu-box.png" alt=""></dt>
      <dd>
        <h3>IObit Uninstaller 8 PRO</h3>
        <p><del>€29,99 </del> <span>€<b>0</b></span></p>
        <p>
         La migliore scelta per disinstallare in modo <br> potente i programmi e plug-in ostinati!
        </p>
      </dd>
    </dl>
    <!-- PF -->
    <dl class="pf-box">
      <dt><img src="<?php echo $pResUrl;?>images/pf-box.png" alt=""></dt>
      <dd>
        <h3>Protected Folder</h3>
        <p><del>€39,95 </del> <span>€<b>0</b></span></p>
        <p>
          Il programma più affidabile per proteggere <br> i tuoi file dagli attacchi maligni e assicurare <br> la tua privacy al massimo!
        </p>
      </dd>
    </dl>

    <!-- clear float -->
    <div class="clear"></div>
    <!-- words -->
    <h4>I regali esclusivi sono disponibili in quantità limitata! AFFRETTATI!</h4>
    <p class="surplus">Solo <b class="packsNum"><?php echo $packsNum ?></b> pezzi disponibili oggi!</p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=it-sd63pciupf1799&ref=it_sd63pciupfpurchase1811<?php echo $refStr;?>&refs=it_purchase_sd"
       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1811-it')">
      OTTIENI SUBITO I REGALI
    </a>
  </div>
</div>
<!-- gift-box end -->

  <!-- review -->
  <div class="reviews ">
    <div class="wrapper">
      <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
      <div class="map">
        <span class="recover recover01 big"></span>
        <span class="recover recover02 middle"></span>
        <span class="recover recover03 smail"></span>
        <span class="recover recover04 big"></span>
        <span class="recover recover05 middle"></span>
        <span class="recover recover06 smail"></span>
        <span class="recover recover07 big"></span>
        <span class="recover recover08 middle"></span>
        <span class="recover recover09 smail"></span>
        <span class="recover recover10 smail"></span>
        <span class="recover recover11 smail"></span>
        <span class="recover recover12 smail"></span>
        <span class="recover recover13 middle"></span>
        <span class="recover recover14 middle"></span>
        <span class="recover recover15 smail"></span>
        <span class="recover recover16 smail"></span>
        <span class="recover recover17 big"></span>
        <span class="recover recover18 smail"></span>
        <span class="recover recover19 smail"></span>
        <span class="recover recover20 big"></span>
        <span class="recover recover22 smail"></span>
        <span class="recover recover23 smail"></span>
        <span class="recover recover24 smail"></span>
        <span class="recover recover25 smail"></span>
        <span class="recover recover26 smail"></span>
        <dl class="tradotto-da-tedesco">
          <dt><img src="<?php echo $pResUrl; ?>images/hans.png"></dt>
          <dd>
            <strong>Hans</strong>
            <p>"È facile da usare, un'utilità che si deve avere per <br> il disco rigido o SSD."</p>
            <span></span>
          </dd>
        </dl>
        <dl class="html-it">
          <dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
          <dd>
            <strong>HTML.it</strong>
            <p>"Il nuovo Smart Defrag si mette in luce per <br> una migliorata efficienza complessiva <br> rispetto al suo predecessore."</p>
            <span></span>
          </dd>
          </dl>
        <dl class="baixaki">
          <dt><img src="<?php echo $pResUrl; ?>images/pcword.png"></dt>
          <dd>
            <strong>PCWORLD.com</strong>
            <p>“Il modo più semplice per fare funzionare il tuo PC come una scheggia è deframmentare il tuo disco fisso. Con il motore di deframmentazione più avanzato Smart Defrag offre un ottimo modo per accelerare il tuo PC."</p>
            <span></span>
          </dd>
        </dl>
        <dl class="charles-r-widick">
          <dt><img src="<?php echo $pResUrl; ?>images/amnon.png"></dt>
          <dd>
            <strong>Amnon</strong>
            <p>"Dopo aver usato questo software fantastico, il mio desktop e <br> il mio computer portatile rimangono sempre veloci con tanti <br> spazi liberi."</p>
            <span></span>
          </dd>
        </dl>
        <dl class="cnet">

          <dt><img src="<?php echo $pResUrl; ?>images/edward-lLee-ah-yen.png"></dt>
          <dd>
            <strong>Edward Lee Ah Yen</strong>
            <p>"Smart Defrag è uno strumento di <br> deframmentazione molto efficiente."</p>
            <span></span>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end review -->

  <!-- compare -->
  <div class="compare wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="itemb">
            <div class="box">
              La tua versione <br> ATTUALE
              <span></span>
            </div>
          </th>
          <th class="text">Confronto delle funzionalità:</th>

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
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="virtue"> <img src="<?php echo $pResUrl; ?>images/icons01.png"> Deframmentazione ed ottimizzazione di base del disco rigido </td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="itemb"><i class="all-icons close">√</i></td>
          <td class="virtue"> <img src="<?php echo $pResUrl; ?>images/icons02.png"> Deframmentazione pianificata durante i periodi di inattività del sistema</td>

          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="virtue"> <img src="<?php echo $pResUrl; ?>images/icons03.png"> Velocità d’accesso ai file fino al 200% in più</td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="virtue"> <img src="<?php echo $pResUrl; ?>images/icons04.png"> Avvio del PC più veloce con Boot Time Defrag</td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="virtue"> <img src="<?php echo $pResUrl; ?>images/icons05.png"> Deframmenta i file frammentati in modo automatico e intelligente</td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="virtue">  <img src="<?php echo $pResUrl; ?>images/icons06.png"> Personalizza il modo di deframmentazione e i dischi o file da deframmentare</td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="virtue"> <img src="<?php echo $pResUrl; ?>images/icons07.png"> DMA applicata per un trasferimento dei dati più rapido e più stabile</td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="virtue"> <img src="<?php echo $pResUrl; ?>images/icons08.png"> Aggiornamento automatico alla versione più recente</td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="virtue">
             <img src="<?php echo $pResUrl; ?>images/icons09.png"> Privilegi di servizio 24/7 supporto tecnico gratuito 
          </td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="itemb radius"></td>
          <td class="virtue radius"></td>
          <td class="itema radius"> <span class="shadow"></span></td>
        </tr>
      </tbody>
    </table>
  </div>

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <div class="left-message">
      <img src="<?php echo $pResUrl;?>images/bottom-sd.png" alt="">
      <img class="db-reduce" src="<?php echo $pResUrl;?>images/bottom-sd-reduce.png" alt="">
    </div>
    <dl class="price-content">
      <dt>
        <h3>Pacchetti Limitati! AFFRETTATI!</h3>
        <!-- price -->
        <p class="price">
          <strong>17</strong>
          <sup>99</sup>
          <del>€99,93</del>
        </p>
      </dt>
      <dd>
        <!-- buybtn -->
        <a class="buybtn cart"
           href="https://www.iobit.com/buy.php?product=it-sd63pciupf1799&ref=it_sd63pciupfpurchase1811<?php echo $refStr;?>&refs=it_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1811-it')">
          <span>APPROFITTANE ORA</span>
        </a>
        <!-- attention -->
        <p class="attention"><i></i>ATTENZIONE, solo <span class="packsNum"><?php echo $packsNum?></span> pezzi disponibili !</p>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><h3>Garanzia di Rimborso</h3></dd>
      <dd>Garantiamo il rimborso entro <br> 60 giorni.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/secure.png" alt=""></dt>
      <dd><h3>Pagamento 100% Sicuro</h3></dd>
      <dd>IObit offre i metodi di pagamento <br>sicuri per la transazione.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/service.png" alt=""></dt>
      <dd><h3>Attivazione Veloce</h3></dd>
      <dd>Riceverai il codice di <br> licenza in pochi minuti tramite la mail.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><h3>Servizio di Supporto</h3></dd>
      <dd>Il nostro supporto tecnico gratuito <br> è disponibile 24 ore su 24.</dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>Tali promozioni sono soggette periodicamente a modifiche senza preavviso, a nostra esclusiva discrezione.</dd>
    <dd>I dati potrebbero variare in base al sistema o computer.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
</div>
<!-- footer end -->
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>