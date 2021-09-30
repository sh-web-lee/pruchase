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

$name=explode(' ',trim(get_line('../imf/data/names_jan.txt',rand(1,50))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,4)==4)?'offerta FAMILIARE':'offerta COMPLETA';
if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'itdbmar_p' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 78;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 2) {
      setcookie($c_name, 2, time() + 3600 * 24);
      $packsNum = 2;
    } else {
      if($saleType=='offerta COMPLETA'){
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
      }else{
        $packsNum=$_COOKIE[$c_name];
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType));
  exit;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Grande Saldi 2019, sconti fino all’83% su Driver Booster PRO – Offerte di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>"/>
  <link href="https://fonts.googleapis.com/css?family=Barlow:400,600" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="header">
  <div class="wrapper">
    <a href="https://www.iobit.com" class="logo" target="_blank">IObit</a>
    <h1>OFFERTA SPECIALE - SCONTI FINO ALL’80%</h1>
    <p>Driver Booster PRO porta le prestazioni del PC e l’esperienza di gioco ad un livello superiore!</p>
    <div class="box">
      <h2>50% SCONTO</h2>
      <p class="line"><span></span>ESSENZIALE <span></span> </p>
      <div class="img-box"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""></div>
      <h4>1 Anno/1 PC</h4>
      <p class="message">Aggiornamento dei driver automatico. <br> PC personale più fluido.</p>
      <p class="price">
        <strong>€<b>25</b>.99</strong>
        <del> €59.85</del>
      </p>
      <a href="http://www.iobit.com/buy.php?product=it-db61pc2599&ref=it_db61pc2599purchase1903&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc1903-it')"
         class="buybtn gray">
        <i></i>
        <span>ATTIVA ORA</span>
      </a>
    </div>
    <div class="box gift-box">
      <h2><span>80</span>% SCONTO</h2>
      <p class="line"><span></span>COMPLETA <span></span> </p>
      <div class="img-box"><span class="reduce"></span><img src="<?php echo getStaticUrl('images/db-gift.png')?>" alt=""></div>
      <h4>1 Anno/3 PC + <b>Pacchetto REGALO<i><span>Acquista Driver Booster PRO 3 PC e ottieni 2 programmi potenti GRATIS!</span></i></b></h4>
      <p class="message">Aggiornamento dei driver automatico. <br> PC più fluido per <span>tutta la famiglia. <br> Regali gratis per migliorare la sicurezza e stabilità del PC.</span> </p>
      <p class="price">
        <strong>€<b>26</b>.99</strong>
        <del> €144.79</del>
      </p>
      <a href="http://www.iobit.com/buy.php?product=it-db63pcsdpf2699&ref=it_db63pcsdpf2699purchase1903&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcsdpf1903-it')"
         class="buybtn">
        <i></i>
        <span>OTTIENILO SUBITO</span>
      </a>
      <p class="last">Solo <strong class="buyNum packsNum">27</strong> pezzi disponibili</p>
    </div>
    <div class="box three-pc ">
      <h2>60% SCONTO</h2>
      <p class="line"><span></span>FAMILIARE <span></span> </p>
      <div class="img-box"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""></div>
      <h4>1 Anno/3 PC</h4>
      <p class="message">Aggiornamento dei driver automatico. <br> PC più fluido per <span>tutta la famiglia.</span></p>
      <p class="price">
        <strong>€<b>26</b>.99</strong>
        <del> €74.85</del>
      </p>
      <a href="http://www.iobit.com/buy.php?product=it-db63pc2699&ref=it_db63pc2699purchase1903&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc1903-it')"
         class="buybtn gray">
        <i></i>
        <span>ATTIVA ORA</span>
      </a>
    </div>
  </div>
</div>

<div class="db-message">
  <div class="wrapper">
    <h2><strong>Perché Driver Booster PRO?</strong> Migliori prestazioni del PC, Senza sforzo né perdite di tempo. </h2>
    <img src="<?php echo $pResUrl; ?>images/db-computer.png" alt="" class="img-box">
     <div class="message">
        <dl>
          <dt>icons</dt>
          <dd>
            <strong>Download più Rapidi del 200%*</strong>
            <p>Download dei driver del 200% più veloce durante i periodi di inattività del sistema.</p>
          </dd>
        </dl>
        <dl class="list02">
          <dt>icons</dt>
          <dd>
            <strong>Aggiornamento Automatico</strong>
            <p>Effettua automaticamente l’aggiornamento e crea un punto di ripristino.</p>
          </dd>
        </dl>
        <dl class="list03">
          <dt>icons</dt>
          <dd>
            <strong>Game Ready per un Gioco più Fluido</strong>
            <p>Gli ultimi driver di Game Ready di diverse marche riparano i bug e migliorano l'esperienza di gioco.</p>
          </dd>
        </dl>
        <dl class="list04">
          <dt>icons</dt>
          <dd>
            <strong>Nuovissimo Game Boost Migliora la Prestazione del PC e del Gioco</strong>
            <p>Il nuovo Game Boost massimizza le risorse di sistema con un solo clic.</p>
          </dd>
        </dl>
     </div>
  </div>
</div>
<div class="gift-message ">
  <div class="wrapper">
    <h2><strong>Regali Gratis</strong> solo per OFFERTA COMPLETA</h2>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/pf-box.png" alt=""></dt>
      <dd>
        <h3>Protected Folder  </h3>
        <del>€39,95</del> <strong>€0</strong>
        <p>Protegge i tuoi file personali e li mantiene lontani dagli attacchi dannosi!</p>
      </dd>
    </dl>
    <dl class="sd">
      <dt><img src="<?php echo $pResUrl; ?>images/sd-box.png" alt=""></dt>
      <dd>
        <h3>Smart Defrag 6 </h3>
        <del>€29,99</del> <strong>€0</strong>
        <p>Offre la migliore deframmentazione del <br> disco e accelera al massimo l'hard driver!</p>
      </dd>
    </dl>
    <a href="http://www.iobit.com/buy.php?product=it-db63pcsdpf2699&ref=it_db63pcsdpf2699purchase1903&refs=it_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcsdpf1903-it')"
       class="buybtn">
      <i></i>
      <span>OTTIENI I REGALI SUBITO!</span>
    </a>
  </div>
</div>

<!-- review -->
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
<!-- end review -->

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
        <span>Database del 200% più grande per aggiornare più  driver rari e obsoleti </span>
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
        <span>Download, aggiornamento installazione automatica dei driver durante i periodi di inattività del sistema </span>
        <em class="nuo">NUOVO</em>
      </td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Backup automatico di tutti i driver per il ripristino sicuro </td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Aggiornamento prioritario dei driver di Game Ready per un'esperienza di gioco più veloce e più fluida <em>MIGLIORATO</em></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Migliora l'esperienza di gioco con i componenti di gioco necessari</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Rileva e ripara gli errori di driver in modo efficace</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Aggiornamento automatico alla versione più recente</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue">Supporto tecnico 24/7 gratuito su richiesta</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
  </table>
</div>
<div class="bottom-buy">
  <div class="wrapper">
    <h2>Con soli €0,02 al al giorno, restare aggiornati non è mai stato così facile!</h2>
    <div class="img-box three-gift">
      <span class="db-box"></span>
      <span class="gift-box"></span>
    </div>
    <ul>
      <li><strong>ESSENZIALE</strong> <span>50% di sconto</span></li>
      <li class="active"> <strong>COMPLETA</strong> <span>80% di sconto</span></li>
      <li> <strong>FAMILIARE</strong> <span>60% di sconto</span></li>
    </ul>
    <div class="message">
      <p class="price">
        <strong>€<b>26</b>.99</strong>
        <del> €144.79</del>
      </p>
      <!-- db+sd+pd 1anno/5pc buybtn -->
      <a href="http://www.iobit.com/buy.php?product=it-db63pcsdpf2699&ref=it_db63pcsdpf2699purchase1903&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcsdpf1903-it')"
         class="buybtn">
        <i></i>
        <span>Approfittane ora!</span>
      </a>
    </div>
  </div>
</div>
<div class="footer">
  <ul class="visa wrapper clearfix">
    <li>
      <span><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></span>
      <strong>Garanzia di Soddisfazione</strong>
      Garantiamo il rimborso entro <br> 60 giorni.
    </li>
    <li>
      <span><img src="<?php echo getStaticUrl('images/serives.png')?>" alt=""></span>
      <strong>Pagamento 100% Sicuro</strong>
      IObit offre i metodi di pagamento <br> sicuri per la transazione.
    </li>
    <li>
      <span><img src="<?php echo getStaticUrl('images/veloce.png')?>" alt=""></span>
      <strong>Attivazione Veloce</strong>
      Riceverai il codice di licenza in pochi minuti <br> tramite la mail.
    </li>
    <li>
      <span><img src="<?php echo getStaticUrl('images/support.png')?>" alt=""></span>
      <strong>Servizio di Supporto</strong>
      Il nostro supporto tecnico gratuito <br> è disponibile 24 ore su 24.
    </li>
  </ul>
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>* Data potrebbe variare in base al sistema o computer.</dd>
    <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
  </dl>
  <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
</div>
<div class="floatlayer" id="floatlayer">
  <p class="ales"><span id="first"><?php echo $firstName;?></span><span id="last"><?php echo $lastName;?></span> ha acquistato<br><span id="saleType"><?php echo $saleType;?></span> <br><span> Solo <strong class="packsNum buyNum">*</strong> pezzi rimasti.</span></p>
  <i class="close">×</i>
</div>

</body>
<script type="text/javascript">
  refStr='<?php echo $refStr;?>';
</script>
<script type="text/javascript" src="<?php echo getStaticUrl('js/script.js')?>"></script>


</html>