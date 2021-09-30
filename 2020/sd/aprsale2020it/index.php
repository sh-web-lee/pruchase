<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
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
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta Speciale - Sconti fino all'80% su Smart Defrag PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css') ?>">
  <?php echo $gJavascript ['public']; ?>
  <?php echo $gJavascript ['head'] ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank"></a>
    <h1>OFFERTA LAMPO</h1>
    <h3>Offerta limitata con uno sconto fino all’80%!</h3>
    <div class="bundle-container clearfix">
      <div class="bundle left">
        <img src="<?php echo getStaticUrl('images/bundle-0.png')?>" alt=""/>
        <p class="price">
          <b class="discount">17</b>
          <span>
            <i>99€</i>
            <del class="original">39,99€</del>
          </span>
        </p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-sd73pc1799&ref=it_sd73pc1799purchase2004<?php echo $refStr; ?>&refs=it_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pc1799purchase2004-it');"
        >ACQUISTA ORA</a>
      </div>
      <div class="bundle right">
        <div class="countdown-container"><i></i><span>12</span> Ore : <span>24</span> Min : <span>52</span> Sec : <span>235</span> Ms
        </div>
        <img src="<?php echo getStaticUrl('images/bundle-1.png')?>" alt=""/>
        <p class="price">
          <b class="discount">17</b>
          <span>
            <i>99€</i>
            <del class="original">109,93€</del>
          </span>
        </p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-sd73pciupf1799&ref=it_sd73pciupf1799purchase2004<?php echo $refStr; ?>&refs=it_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pciupf1799purchase2004-it');">APPROFITTANE ORA</a>
        <p class="note">Più di <span>107.725</span> persone hanno acquistato</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!--payment start-->
<div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
<!--payment end-->

<!-- benfits start -->
<div class="feature clearfix">
  <div class="wrapper">
    <h2>Massimizza la prestazione del tuo disco rigido e velocizza il tuo PC</h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-00.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-01.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-04.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-03.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-02.png')?>" alt=""/>
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li class="fun1"></li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt=""/>
          </div>
        </li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt=""/>
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt=""/>
          </div>
        </li>
      </ul>
    </div>
    <div class="detail-list">
      <dl>
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>Fino al 200%* più veloce</h3>
          <p>La deframmentazione di file di grandi dimensioni più completa ti consente di accedere ai file e avviare il gioco fino al 200%* più velocemente.</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>Intelligente</h3>
          <p>Deframmenta automaticamente file e dischi in modo intelligente per far funzionare il tuo PC alle massime prestazioni ogni volta che ne hai bisogno.</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>Avvio più veloce del PC</h3>
          <p>Deframmenta il registro e i file di sistema durante l'esecuzione del sistema, assicurandoti un avvio del PC più veloce e prestazioni di sistema ottimali.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Deframmentazione rapida</h3>
          <p>Deframmenta i tuoi dischi e file in modo più completo ed efficiente per liberarti dall'attesa della deframmentazione di lunga data.</p>
        </dd>
      </dl>
      <a class="textlink" href="Javascript:void(0);">Differenze tra la versione FREE e PRO >></a>
    </div>
  </div>
</div>
<!-- benfits end -->

<!-- gifubox start -->
<div class="giftbox">
  <h2>Non perderti i regali che abbiamo preparato per te!</h2>
  <div class="wrapper">
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/></dt>
        <dd>
          <h3>IObit Uninstaller 11 PRO <span>(1 Anno / 1 PC)</span></h3>
          <p>Disinstalla software, plug-in e bundleware con un solo clic</p>
          <p>Pulisce automaticamente i resti dei programmi disinstallati</p>
        </dd>
      </dl>
      <dl class="pf">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></dt>
        <dd>
          <h3>Protected Folder <span>(1 Anno / 1 PC)</span></h3>
          <p>Protegge i file personali e li mantiene lontani dagli attacchi dannosi</p>
          <p>La password impedisce a chiunque di aprire i file</p>
        </dd>
      </dl>
    </div>
    <a href="https://www.iobit.com/buy.php?product=it-sd73pciupf1799&ref=it_sd73pciupf1799purchase2004<?php echo $refStr; ?>&refs=it_purchase_sd"
         onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pciupf1799purchase2004-it');">
      APPROFITTANE ORA
    </a>
    <div class="countdown-container countdown-lab"><i></i><span>12</span> Ore : <span>24</span> Min : <span>52</span> Sec : <span>235</span> Ms</div>
  </div>
</div>
<!-- gifubox end -->

<!-- review -->
<div class="reviews wrapper">
  <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
  <p>Scelto da oltre <span>250 milioni</span> di utenti mondiali</p>
  <div class="map">
    <span class="recover recover01 big"></span>
    <span class="recover recover02 smail"></span>
    <span class="recover recover22 middle"></span>
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
    <span class="recover recover21 middle"></span>
    <dl class="tradotto-da-tedesco">
      <dt><img src="<?php echo $pResUrl; ?>images/user02.png"></dt>
      <dd>Sono un utente di Smart Defrag per tanti anni. Dopo aver usato<br> questo software fantastico, il mio desktop e il mio computer<br> portatile rimangono sempre veloci con tanti spazi liberi.</dd>
    </dl>
    <dl class="html-it">
      <dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
      <dd>Smart Defrag è stato migliorato per consumare meno risorse del<br> sistema in cui viene installato. In questo modo potrà svolgere tutte le<br> operazioni senza andare a rallentare le normali attività del computer.</dd>
    </dl>
    <dl class="baixaki">
      <dd>Smart Defrag è uno strumento di deframmentazione molto<br> efficiente, funziona silenziosamente in background quando il<br> computer è inattivo e non ti disturba mai.</dd>
      <dt><img src="<?php echo $pResUrl; ?>images/user03.png"></dt>
    </dl>
    <dl class="charles-r-widick">
      <dd>Smart Defrag è molto facile da usare. Ha una piccola foot<br> print memoria in modo da non rallentare il sistema.<br> Decisamente consigliato!</dd>
      <dt><img src="<?php echo $pResUrl; ?>images/user01.png"></dt>
    </dl>
  </div>
</div>
<!-- review end -->

<!-- comparsion start -->
<div class="comparsion wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th colspan="2" class="text">Il confronto dei prodotti:</th>
        <th class="space"></th>
        <th class="itemb">
          La tua versione <strong>attuale</strong>
        </th>
        <th class="space"></th>
        <th class="itema">
          Smart Defrag <strong>PRO</strong>
        </th>
      </tr>    
    </thead>
    <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
        <td class="virtue">
          <span>Deframmentazione ed ottimizzazione di base del disco rigido</span>
        </td>
        <td class="space"></td>
        <td class="itemb gray"><i class="all-icons">☆</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt=""/></td>
        <td class="virtue">Velocità d’accesso ai file fino al 200% più rapida <sup>Migliorato</sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr class="three">
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""/></td>
        <td class="virtue">Avvio del PC più veloce con Boot Time Defrag <sup>Migliorato</sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""/></td>
        <td class="virtue">Deframmenta i file frammentati in modo automatico e intelligente</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""/></td>
        <td class="virtue">Personalizza il mode di deframmentazione e i dischi o file da deframmentare</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""/></td>
        <td class="virtue">DMA applicata per un trasferimento dei dati più rapido e più stabile <sup>Migliorato</sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt=""/></td>
        <td class="virtue">Aggiornamento automatico alla versione più recente</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt=""/></td>
        <td class="virtue">Supporto tecnico 24/7 gratuito su richiesta</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>   
    </tbody>
  </table>
</div>
<!-- comparsion end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img class="small on" src="<?php echo getStaticUrl('images/sd-one-box.png') ?>" alt="" />
      <img class="small" src="<?php echo getStaticUrl('images/sd-three-box.png') ?>" alt="" />
    </div>
    <ul class="fl">
      <li class="on" data-num="1"><span>1 Anno / 3PC<em> + Regali Gratis</em></span></li>
      <li data-num="0"><span>1 Anno / 3PC</span></li>
    </ul>
    <div class="price fl">
      <p>
        <b class="discount">17</b>
        <span>
            <i>99€</i>
            <del class="original">109,93€</del>
          </span>
      </p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=it-sd73pciupf1799&ref=it_sd73pciupf1799purchase2004<?php echo $refStr; ?>&refs=it_purchase_sd"
         onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pciupf1799purchase2004-it');">
        ACQUISTA ORA
      </a>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- service start -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
      <dd><strong>Garanzia di Soddisfazione</strong>60 giorni rimborso</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
      <dd><strong>Pagamento Assicurato</strong>IObit supporta diverse modalità di <br> pagamento sicure</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
      <dd><strong>Attivazione Veloce</strong>Dopo il tuo acquisto, riceverai il codice  di licenza in pochi muniti tramite la mail </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
      <dd><strong>Servizio Clienti</strong>24/7 Supporto tecnico gratuito</dd>
    </dl>
  </div>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer wrapper">
  <div class="notes">
    <p>Note:</p>
    <p>1*. Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</p>
    <p>2*. Data potrebbe variare in base al sistema o computer.</p>
  </div>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Tutti i diritti riservati</p>
</div>
<!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>