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
  $c_name = 'itdbanb' . $date;
  if($_GET['isExpired']==0){
    $packsNum=89;
  }else {
    if (!isset($_COOKIE[$c_name])) {
      $packsNum = 97;
    } else {
      if (intval($_COOKIE[$c_name]) <= 5) {
        $packsNum = 5;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
    }
  }
  setcookie($c_name, $packsNum, time() + 3600 * 24 *30);
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>3));
  exit();
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Offerta Speciale, sconti fino all’ 75% su Driver Booster PRO – Promozione per l’Anniversario di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
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
      <p>PER TE UN’OFFERTA SPECIALE</p>
      <h1>PER FESTEGGIARE IL 9 ANNIVERSARIO</h1>
    </div>
    <div class="panel clearfix">
      <div class="box">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" />
        <div class="price">
          <p><strong><span class="current">59</span><small class="current-sm">,85</small></strong></p>
          <a class="buybtn banbtn"
             href="https://www.iobit.com/buy.php?product=it-db51pc5985&ref=it_db51pc5985purchase1803<?php echo $refStr;?>&refs=it_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1PC1803-it')">
            Acquista Ora
          </a>
        </div>
      </div>
      <div class="box red">
        <div class="gift clearfix">
          <span>Mancano:</span>
          <ul id="countdown" class="countdown">
            <li><strong>00</strong> ore </li>
            <li><strong>09</strong> min </li>
            <li><strong>49</strong> sec </li>
            <li><strong>618</strong> ms* </li>
          </ul>
        </div>
        <div class="ds-box">
          <img src="<?php echo getStaticUrl('images/ds-box.png')?>" alt="" />
        </div>
        <div class="price">
          <p><strong><span class="current">24</span><small class="current-sm">,99</small></strong> <span><b>SOLO €2.1 al mese</b><del class="original">104,84</del></span></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-db5sd3pc2499&ref=it_db53pcsd2499purchase1803<?php echo $refStr;?>&refs=it_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsd1803-it')">
            Approfittane Ora!
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- second start -->
<div class="second">
  <div class="payment">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" /></div>
  </div>
  <div class="intro wrapper">
    <h2>Fidati di noi, facciamo solo le cose giuste per te.</h2>
    <div class="feature clearfix">
      <img class="feature-img" src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
      <div class="feature-box">
        <dl class="database">
          <dt><h3>Database del 200% Più Grande</h3></dt>
          <dd>Un database due volte più ampio per aggiornare ancora più driver rari e obsoleti</dd>
        </dl>
        <dl class="driver">
          <dt><h3>Driver Più Completi</h3></dt>
          <dd>Goditi le funzioni esclusive per aggiornare i driver obsoleti o difficili da trovare</dd>
        </dl>
        <dl class="veloce">
          <dt><h3>Aggiornamento Più Veloce</h3></dt>
          <dd>Sblocca il limite di velocità per aggiornare i driver in modo fulmineo</dd>
        </dl>
        <dl class="backup">
          <dt><h3>Backup Più Sicuro</h3></dt>
          <dd>Backup automatico per il ripristino sicuro di tutti i driver</dd>
          <dd>
            <a class="per" href="javascript: void(0);">Per maggiori informazioni clicca qui.</a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- second end -->

<!-- donation start -->
<div class="donation">
  <div class="wrapper">
    <h2>Regalo Gratis solo per abbonamento di 3 PC / 1 Anno </h2>
    <dl class="clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="" /></dt>
      <dd class="fl">
        <del>29,99</del> <strong>Gratis</strong>
        <p>Offre la migliore deframmentazione del disco e accelera al massimo le prestazioni dell'hard driver</p>
        <a class="blast" href="https://www.iobit.com/buy.php?product=it-db5sd3pc2499&ref=it_db53pcsd2499purchase1803<?php echo $refStr;?>&refs=it_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsd1803-it');">
          <b>Ottieni il regalo subito!</b> <i class="all-icons"></i>
          <span class="blast-box"></span>
          <span class="blast-box right"></span>
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- donation end -->

<!-- review start -->
<div class="review">
  <div class="wrapper ">
    <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
    <h3>Scelto da oltre <strong> 200 milioni</strong> di utenti mondiali</h3>
    <div class="review-message">
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
      <dl class="myo ">
        <dt>
        <div class="img-box">
          <h4>Myo Thuya</h4>
          <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="">
        </div>
        <div class="line"></div>
        </dt>
        <dd>“Il mio computer è più veloce e sicuro che negli ultimi 8 mesi con Driver Booster PRO." – <em> Tradotto da Inglese</em></dd>
      </dl>
      <dl class="pcmag active right">
        <dt>
        <div class="img-box">
          <h4>PC-MAG</h4>
          <img src="<?php echo $pResUrl; ?>images/pc-mag.png" alt="">
        </div>
        <div class="line"></div>
        </dt>
        <dd>"IObit fornisce vari software di windows, e Driver Booster PRO, il quale aggiorna automaticamente i driver, è uno dei migliori." – <em>Tradotto da Inglese</em></dd>
      </dl>
      <dl class="chip ">
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
      <dl class="vector ">
        <dt>
        <div class="img-box">
          <h4>Vector</h4>
          <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
          <div>
            <div class="line"></div>
        </dt>
        <dd>"Finalmente ho trovato Driver Booster Pro, il programma perfetto per mantenere sempre pulito e aggiornato il mio sistema in modo super semplice." - <em>Tradotto da Giapponese</em></dd>
      </dl>
      <dl class="adam active">
        <dt>
        <div class="img-box">
          <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="">
          <h4>Adam Backlund</h4>
        </div>
        <div class="line"></div>
        </dt>
        <dd>"Consiglio vivamente Driver Booster PRO: mantiene aggiornati i driver rapidamente e facilmente." – <em>Tradotto da Inglese</em></dd>
      </dl>
      <dl class="olnet ">
        <dt>
        <div class="img-box">
          <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
          <h4>01net</h4>
          <div>
            <div class="line"></div>
        </dt>
        <dd>"Tutte le operazioni possono essere finalizzate con un solo clic, Driver Booster ti aiuta a risparmiare il tuo tempo rendendo il PC più stabile." – <em>Tradotto da Francese</em></dd>
      </dl>
      <dl class="olorin active">
        <dt>
        <div class="img-box">
          <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
          <h4>Olorin 89</h4>
        </div>
        <div class="line"></div>
        </dt>
        <dd>"Driver Booster è lo strumento di aggiornamento driver che semplifica la vita a tutti."</dd>
      </dl>
      <dl class="html ">
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
  <div class="wrapper">
    <h2>Con soli <b>€2.1</b> al mese, mantieni i driver sempre aggiornati con facilità!</h2>
    <div class="offer">
      <div class="imgbox">
        <img class="pcs active" src="<?php echo getStaticUrl('images/ds-box.png')?>" alt="" />
        <img class="pc" src="<?php echo getStaticUrl('images/db-box-sm.png')?>" alt="" />
      </div>
      <ul class="fl">
        <li class="active pcs" data-num="1">3 PC/ 1 Anno<strong>-75%</strong></li>
        <li class="pc" data-num="0">1 PC/ 1 Anno</li>
      </ul>
      <div class="price fr">
        <div class="price-box">
          <strong><span class="current">24</span><small class="current-sm">,99</small></strong> <del class="original">104,84</del>
          <div class="discount-box">Risparmi <span class="discount">119,80</span></div>
        </div>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-db5sd3pc2499&ref=it_db53pcsd2499purchase1803<?php echo $refStr;?>&refs=it_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsd1803-it')">
          Approfittane Ora!
        </a>
      </div>
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
          <h3>Garanzia di Rimborso</h3>
          <p>Garantiamo il rimborso entro <span>60 giorni dalla data</span> d’acquisto.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
        <dd>
          <h3>Pagamento 100% Sicuro</h3>
          <p>IObit offre i metodi di pagamento <span>sicuri per la transazione.</span></p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt="" /></dt>
        <dd>
          <h3>Attivazione Veloce</h3>
          <p>Dopo avere completato il tuo acquisto, <span>riceverai il codice di licenza in pochi</span> minuti tramite la mail</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt="" /></dt>
        <dd>
          <h3>Servizio di Supporto</h3>
          <p>Il nostro supporto tecnico gratuito <span>è disponibile tutto il giorno,</span> 24 ore su 24.</p>
        </dd>
      </dl>
    </div>

    <dl class="annotation">
      <dt>Note:</dt>
      <dd>1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
      <dd>2*.Data potrebbe variare in base al sistema o computer.</dd>
    </dl>
    <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
  <h4>
    <span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span>
  </h4>
  <p>ha già attivato <span id="saleType"> <?php echo $saleType;?></span> PC / 1 Anno</p>
  <i class="close">×</i>
</div>
<!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>