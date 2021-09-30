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
if(!empty($_GET['ver'])){
    $ver = explode('.',$_GET['ver']);
    $refStr .= '-'.$ver[3];
}
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Esclusivo Natale, sconti fino all'88% su IObit Smart Defrag PRO – IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css') ?>">
  <?php echo $gJavascript ['public']; ?>
  <?php echo $gJavascript ['head'] ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <div class="title">
      <h1>Offerta di Natale</h1>
      <p>Offerta limitata con sconti fino all’88% e 3 regali PRO gratuiti!</p>
    </div>
    <div class="clearfix">
      <div class="message-box small">
        <div class="discount"><strong>- 60%</strong></div>
        <div class="imgbox"><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/></div>
        <div class="price">
          <p><strong><big>15</big><span><small>€</small><small>99</small></span></strong> <del>39,99€</del></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=it-sd63pc1599&ref=it_sd63pc1599purchasexmas2020<?= $refStr; ?>&refs=it_purchase_sd"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3pcxmas2020-it');">
            <i class="all-icons"></i>
            Acquista ora  
          </a>
        </div>
      </div>
      <div class="message-box large">
        <div class="discount">
          <div class="countdown"><b>12</b>H : <b>12</b>M : <b>12</b>: <b>235</b>*</div>
          <strong>- 60%</strong>
        </div>
        <div class="imgbox">
          <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
          <div class="bundle">
            <img src="<?php echo getStaticUrl('images/sd-bundle.png')?>" alt=""/>
            <span class="off on">Valore regali 99,93€</span>
          </div>
        </div>
        <div class="price">
          <p><strong><big>15</big><span><small>€</small><small>99</small></span></strong> <del>139,92€</del></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=it-sd63pciuisupf1599&ref=it_sd63pciuisupf1599purchasexmas2020<?= $refStr; ?>&refs=it_purchase_sd"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3pciuisupfxmas2020-it');">
            <i class="all-icons"></i>
            APPROFITTANE ORA  
          </a>
        </div>
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
  <h2>Massimizza la prestazione del tuo disco rigido e velocizza il tuo PC</h2>
  <div class="wrapper">
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
          <p>La deframmentazione dei file di grandi dimensioni più completa ti consente di accedere ai file e avviare il gioco fino al 200% più velocemente.</p>
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
          <p>Deframmenta i tuoi dischi e file in modo più completo ed efficiente per liberarti dall’attesa di una deframmentazione di lunga durata.</p>
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
      <div class="gift-list">
        <div class="imgbox"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 10 PRO"/></div>
        <h3>IObit Uninstaller 10 PRO</h3>
        <span>(1 Anno / 1 PC)</span>
        <i class="gift-next-icon"></i>
        <ul>
          <li>Disinstalla software, plug-in e bundleware con un solo clic</li>
          <li>Pulisce automaticamente i resti dei programmi disinstallati</li>
        </ul>
      </div>
      <div class="gift-list center">
        <div class="imgbox"><img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Updater 3 PRO"/></div>
        <h3>IObit Software Updater 3 PRO</h3>
        <span>(1 Anno / 1 PC)</span>
        <i class="gift-next-icon"></i>
        <ul>
          <li>Aggiorna e installa i software in modo sicuro e in tempo reale</li>
          <li>Ottimizza le prestazioni del PC con software utili, sicuri e affidabili</li>
        </ul>
      </div>
      <div class="gift-list right">
        <div class="imgbox"><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></div>
        <h3>Protected Folder</h3>
        <span>(1 Anno / 1 PC)</span>
        <i class="gift-next-icon"></i>
        <ul>
          <li>Protegge i file personali e li mantiene lontani dagli attacchi dannosi</li>
          <li>La password impedisce a chiunque di aprire i file</li>
        </ul>
      </div>
    </div>
    <a class="buybtn"
       href="http://www.iobit.com/buy.php?product=it-sd63pciuisupf1599&ref=it_sd63pciuisupf1599purchasexmas2020<?= $refStr; ?>&refs=it_purchase_sd"
       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3pciuisupfxmas2020-it');">
      <i class="all-icons"></i>
      APPROFITTANE ORA
    </a>
    <div class="countdown"><b>12</b>H : <b>12</b>M : <b>12</b>: <b>235</b>*</div>
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
      <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
      <div class="bundle">
        <img src="<?php echo getStaticUrl('images/sd-bundle.png')?>" alt=""/>
        <span class="off on">Valore regali 99,93€</span>
      </div>
    </div>
    <div class="footbuy-off fl">
      <div class="countdown"><b>12</b>H : <b>12</b>M : <b>12</b>: <b>235</b>*</div>
      <strong class="discount">-88%</strong>
    </div>
    <div class="price fr">
      <p><strong><big>15</big><span><small>€</small><small>99</small></span></strong> <del>139,92€</del></p>
      <a class="buybtn yellow"
         href="http://www.iobit.com/buy.php?product=it-sd63pciuisupf1599&ref=it_sd63pciuisupf1599purchasexmas2020<?= $refStr; ?>&refs=it_purchase_sd"
         onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3pciuisupfxmas2020-it');">
        <i class="all-icons"></i>
        APPROFITTANE ORA 
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