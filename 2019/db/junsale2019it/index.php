<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function get_line($file, $line)
{
  $fp = fopen($file, 'r');
  $i = 0;
  while (!feof($fp)) {
    $i++;
    $c = fgets($fp);
    if ($i == $line) {
      return $c;
      break;
    }
  }
}
$name=explode(' ',trim(get_line('data/db_data.txt',rand(1,500))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=3;

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'itdbjun_p' . $date;
  if ($_COOKIE[$c_name]===null) {
    $packsNum = 46;
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
    }
  }
  setcookie($c_name, $packsNum, time() + 3600 * 24 *30);
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
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Saldi 2019 - Sconti fino all’80% su Driver Booster PRO - Offerta Speciale di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>"/>
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo"  href="https://www.iobit.com/it/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
    </a>
    <div class="title">
      <h1>Offerte Estive</h1>
      <p>Mantenere il tuo PC sempre efficiente con un prezzo più basso!</p>
    </div>
    <div class="panel clearfix">
      <div class="offer">
        <div class="top">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
          <h3>1 ANNO / 1 PC</h3>
        </div>
        <h2>-50%</h2>
        <div class="price">
          <p><strong><big class="discount">24</big>,99€</strong> <del>59,85€</del></p>
          <a class="buybtn gray"
             href="http://www.iobit.com/buy.php?product=it-db61pc2499&ref=it_db61pc2499purchase1906<?php echo $refStr;?>&refs=it_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1PC1906a-it')">
            <span>ACQUISTA ORA</span>
            <em><big>></big></em>
          </a>
        </div>
      </div>
      <div class="offer red">
        <div class="top">
          <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
          <h3>1 ANNO / <b>3 PC</b> + Regali Gratis</h3>
        </div>
        <h2>-80%</h2>
        <div class="price">
          <p><strong><big class="discount">26</big>,99€</strong> <del>144,79€</del></p>
          <a class="buybtn red"
             href="http://www.iobit.com/buy.php?product=it-db63pcsdpf2699&ref=it_db63pcsdpf2699purchase1906<?php echo $refStr;?>&refs=it_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpf1906b-it')">
            <span>APPROFITTANE ORA</span>
            <em><big>></big></em>
          </a>
        </div>
        <div id="bandown" class="countdown">
          <i class="all-icons"></i> <b>17</b>Ore: <b>56</b>Min: <b>38</b>Sec: <b class="last">123</b>Ms
        </div>
        <!-- <div class="mask"><span>ESAURITO</span></div> -->
      </div>
      <div class="offer">
        <div class="top">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
          <h3>1 ANNO / <b>3 PC</b></h3>
        </div>
        <h2>-65%</h2>
        <div class="price">
          <p><strong><big class="discount">26</big>,99€</strong> <del>74,85€</del></p>
          <a class="buybtn gray"
             href="http://www.iobit.com/buy.php?product=it-db63pc2699&ref=it_db63pc2699purchase1906<?php echo $refStr;?>&refs=it_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PC1906c-it')">
            <span>ACQUISTA ORA</span>
            <em><big>></big></em> 
          </a>
        </div>
      </div>
    </div>
    <div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" /></div>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>È l’ora di aggiornare i driver del tuo computer!</h2>
    <h3>Per una migliore esperienza di gioco con Driver Booster!</h3>
    <div class="imgbox">
      <img class="screen01" src="<?php echo getStaticUrl('images/screen-01.png')?>" alt=""/>
      <img class="screen02" src="<?php echo getStaticUrl('images/screen-02.png')?>" alt=""/>
      <img class="screen03" src="<?php echo getStaticUrl('images/screen-03.png')?>" alt=""/>
    </div>
    <div class="clearfix">
      <dl class="top clearfix">
        <dt><img src="<?php echo getStaticUrl('images/intro-01.png')?>" alt=""/></dt>
        <dd>
          <h4>Gioco più Fluido</h4>
          <p>
            Mantiene i driver grafici e i driver di Game Ready sempre aggiornati al fine di ottimizzare le prestazioni hardware e migliorare al massimo l’esperienza di gioco.
          </p>
        </dd>
      </dl>
      <dl class="top right clearfix">
        <dt><img src="<?php echo getStaticUrl('images/intro-02.png')?>" alt=""/></dt>
        <dd>
          <h4>Download e Installazione Automatici </h4>
          <p>
            Download e installazione automatici dei driver durante il tempo di inattività del PC. Per i utenti che spengono raramente i loro computer.
          </p>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/intro-03.png')?>" alt=""/></dt>
        <dd>
          <h4>Nuovissimo Game Boost</h4>
          <p>
            Il nuovo Game Boost massimizza le risorse di sistema con un solo clic garantendo una prestazione di gioco più veloce e più fluida.
          </p>
        </dd>
      </dl>
      <dl class="right clearfix">
        <dt><img src="<?php echo getStaticUrl('images/intro-04.png')?>" alt=""/></dt>
        <dd>
          <h4>Aggiornamento più Sicuri</h4>
          <p>
            Effettua automaticamente il backup e crea un punto di ripristino del sistema prima dell'aggiornamento, nel caso qualcosa vada storto.
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- donation start -->
<div class="donation">
  <div class="wrapper">
    <h2><strong>Regali Gratis</strong> per una protezione più completa!</h2>
    <div class="content clearfix">
      <dl class="fl clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd class="fl">
          <h3>Protected Folder</h3>
          <del>€39,95</del> <strong>€0</strong>
          <p>Protegge i tuoi file personali e li mantiene lontani dagli attacchi dannosi!</p>
        </dd>
      </dl>
      <dl class="fr clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6"/></dt>
        <dd class="fl">
          <h3>Smart Defrag 6</h3>
          <del>€29,99</del> <strong>€0</strong>
          <p>Offre la migliore deframmentazione del disco e accelera al massimo l'hard driver!</p>
        </dd>
      </dl>
    </div>
    <div class="price">
      <a class="buybtn red"
         href="http://www.iobit.com/buy.php?product=it-db63pcsdpf2699&ref=it_db63pcsdpf2699purchase1906<?php echo $refStr;?>&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpf1906b-it')">
        <span>OTTIENI SUBITO I REGALI</span>
        <em><big>></big></em>
      </a>
    </div>
    <div id="giftdown" class="countdown">
      <i class="all-icons"></i> <b>17</b>Ore: <b>56</b>Min: <b>38</b>Sec: <b class="last">123</b>Ms
    </div>
  </div>
</div>
<!-- donation end -->

<!-- review start -->
<div class="review">
  <div class="wrapper ">
    <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
    <h3>Scelto da oltre <strong> 200 milioni</strong> di utenti mondiali</h3>
    <div class="review-message">
      <span class="drop"></span>
      <dl class="wayne">
        <dt>
          <div class="img-box">
            <h4>Wayne Bowler</h4>
            <img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster PRO ha funzionato perfettamente. Facile da usare, intuitivo e informativo. Ora che l'ho scoperto, non lo mollo più... Ottimo lavoro!" – <em>Tradotto da Inglese</em></dd>
      </dl>
      <dl class="myo">
        <dt>
          <div class="img-box">
            <h4>Myo Thuya</h4>
            <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>“Il mio computer è più veloce e sicuro che negli ultimi 8 mesi con Driver Booster PRO." – <em> Tradotto da Inglese</em></dd>
      </dl>
      <dl class="pcmag">
        <dt>
          <div class="img-box">
            <h4>PC-MAG</h4>
            <img src="<?php echo $pResUrl; ?>images/pc-mag.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"IObit fornisce vari software di windows, e Driver Booster PRO, il quale aggiorna automaticamente i driver, è uno dei migliori." – <em>Tradotto da Inglese</em></dd>
      </dl>
      <dl class="chip">
        <dt>
          <div class="img-box">
            <h4>chip</h4>
            <img src="<?php echo $pResUrl; ?>images/chip.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster Pro: La funzionalità di download automatico di driver è disponibile solo nella versione Pro." – <em>Tradotto da Tedesco</em></dd>
      </dl>
      <dl class="fabio red-round active">
        <dt>
          <div class="img-box">
            <h4>Fabio Tursi</h4>
            <img src="<?php echo $pResUrl; ?>images/fabio-tursi.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>”Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema.”</dd>
      </dl>
      <dl class="vector">
        <dt>
          <div class="img-box">
            <h4>Vector</h4>
            <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
            <div>
              <div class="line"></div>
        </dt>
        <dd>"Finalmente, ho trovato Driver Booster Pro, il programma perfetto per mantenere sempre pulito e aggiornato il mio sistema in modo super semplice." - <em>Tradotto da Giapponese</em></dd>
      </dl>
      <dl class="adam">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="">
            <h4>Adam Backlund</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Consiglio vivamente Driver Booster PRO: mantiene aggiornati i driver rapidamente e facilmente." – <em>Tradotto da Inglese</em></dd>
      </dl>
      <dl class="olnet">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
            <h4>01net</h4>
            <div>
              <div class="line"></div>
        </dt>
        <dd>"Tutte le operazioni possono essere finite con un solo clic, Driver Booster ti aiuta a risparmiare il tuo tempo e rendere il PC più stabile." – <em>Tradotto da Francese</em></dd>
      </dl>
      <dl class="olorin">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
            <h4>Olorin 89</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster è semplicemente il tool di aggiornamento driver che semplifica la vita a tutti."</dd>
      </dl>
      <dl class="html">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/html-it.png" alt="">
            <h4>HTML-it</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster di IObit, ti offre una soluzione dell'aggiornamento dei driver più semplice con la sua più avanzata tecnologia."</dd>
      </dl>

    </div>
  </div>
</div>
<!-- review end -->

<!-- comparison start -->
<div id="compare" class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2" class="text">La comparazione dei prodotti:</th>
      <th class="space"></th>
      <th class="itema">
        <div class="box">
          <p>La tua versione</p>  ATTUALE
          <img src="<?php echo getStaticUrl('images/cry.png')?>" alt="" />
        </div>
      </th>
      <th class="space"></th>
      <th class="itemb">
        <div class="box">
          <p>La versione PRO</p> AGGIORNATA
          <img src="<?php echo getStaticUrl('images/smile.png')?>" alt="" />
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Analizza e identifica automaticamente i driver obsoleti, mancanti o errati</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Scarica e aggiorna i driver obsoleti con un solo clic</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Sblocca la velocità massima di aggiornamento dei driver <em>MIGLIORATO</em></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue top">
        <span>Database del 200% più grande per aggiornare molti più driver rari e obsoleti</span>
        <em>MIGLIORATO</em></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Riduce i blocchi del sistema, migliorandone le prestazioni</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">
        <span>Download, aggiornamento e installazione automatica dei driver durante i periodi di inattività del sistema </span>
        <em class="nuo">NUOVO</em>
      </td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Backup automatico di tutti i driver per il ripristino sicuro</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Aggiornamento prioritario delle periferiche per giocare <em>MIGLIORATO</em></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop-icon-09.png"></td>
      <td class="virtue">Rileva e ripara gli errori dei driver in modo efficace</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Aggiornamento automatico alla versione più recente</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Supporto tecnico 24/7 gratuito su richiesta</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="imgbox">
      <span class="on"><img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/></span>
      <span class="pc pcs"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" /></span>
      <span class="pc"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" /></span>
    </div>
    <ul class="fl">
      <li class="first on" data-num="1"><em><i class="all-icons">√</i></em> <span>1 ANNO / 3 PC + Regali Gratis</span> <b>-80%</b></li>
      <li data-num="2"><em><i class="all-icons">√</i></em> <span>1 ANNO / 3 PC</span> <b>-65%</b></li>
      <li class="last" data-num="0"><em><i class="all-icons">√</i></em> <span>1 ANNO / 1 PC</span> <b>-50%</b></li>
    </ul>
    <div class="price fr">
      <p><strong><big class="discount">26</big>,99€</strong> <del>144,79€</del></p>
      <a class="buybtn red"
         href="http://www.iobit.com/buy.php?product=it-db63pcsdpf2699&ref=it_db63pcsdpf2699purchase1906<?php echo $refStr;?>&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpf1906b-it')">
        <span>APPROFITTANE ORA</span>
        <em><big>></big></em>
      </a>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd>
          <h3>Garanzia di Soddisfazione</h3>
          <p>60 giorni rimborso</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/secure-payment.png')?>" alt="" /></dt>
        <dd>
          <h3>Pagamento Assicurato</h3>
          <p>IObit supporta diverse modalità di pagamento sicure</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt="" /></dt>
        <dd>
          <h3>Attivazione Veloce</h3>
          <p>Dopo il tuo acquisto, riceverai il codice di licenza in pochi muniti tramite la mail</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt="" /></dt>
        <dd>
          <h3>Servizio Clienti</h3>
          <p>24/7 Supporto tecnico gratuito</p>
        </dd>
      </dl>
    </div>

    <dl class="annotation">
      <dt>Note:</dt>
      <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
      <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
    </dl>
    <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <h3>Soli<b class="packsNum">46</b>pezzi restanti!</h3>
  <h4>EXTRA SCONTO <big>-3€</big></h4>
  <div class="price">
    <a class="buybtn red small"
       href="http://www.iobit.com/buy.php?product=it-db63pcsdpf2399&ref=it_db63pcsdpf2399purchase1906<?php echo $refStr;?>&refs=it_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpfextra-it')">
      <span>Ottienilo SUBITO</span>
      <em><big>></big></em>
    </a>
  </div>
  <!-- <h2>COMPLIMENTI! HAI VINTO UN EXTRA SCONTO!</h2>
  <h3>Soli <b class="buyNum">46</b> pezzi restanti!</h3>
  <h4><img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/> <big>-3€</big></h4>
  <div class="price">
    <p><strong>26,99€</strong></p>
    <a class="buybtn red"
       href="http://www.iobit.com/buy.php?product=it-db63pcsdpf2699&ref= it-db63pcsdpf2699purchase1906&refs=it_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpf1906b-it')">
      <span>Ottienilo SUBITO</span>
      <em><big>></big></em>
    </a>
  </div> -->
  <div class="close">
    <i class="max">Massimizza</i>
    <!-- <i class="shut">Rinuncio</i> -->
  </div>
</div>
<div class="floatbg"></div>
<!-- floatlayer end -->

<script>
  var imgSrc = "<?php echo getStaticUrl('images/db-gift-box.png')?>";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>