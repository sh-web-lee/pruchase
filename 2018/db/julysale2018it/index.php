<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum = rand(60, 88);
$reduceNum = 76654325;
$buyNum = number_format(ceil(microtimeFloat() * 1000 / 20000) - $reduceNum);

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
if (!empty($_GET['action']) && ($_GET['action'] == 'getSales')) {
  $date = $_GET['d'];
  if($_GET['exp']==1){
    $cName = 'itdbjulexppa' . $date;
    $maxNum=5;
  }else {
    $cName = 'itdbjulpa' . $date;
    $maxNum=0;
  }
  $cookie = $_COOKIE[$cName];
  if ($cookie != null) {
    $packsNum = $_COOKIE[$cName];
    if ($packsNum > $maxNum) {
      $packsNum--;
      setcookie($cName, $packsNum);
//      if (rand(1, 100) % 2 == 0) {
//        $packsNum++;
//      }
    } else {
      $packsNum = $maxNum;
    }
  } else {
    if($_GET['exp']==1){
      $packsNum=77;
    }else {
      $packsNum = 48;
    }
    setcookie($cName, $packsNum);
  }
  echo json_encode(array('packsNum' => $packsNum, 'viewNum' => $viewNum, 'buyNum' => $buyNum,'firstName'=>$firstName,'lastName'=>$lastName));
  exit();
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Saldi Estate 2018, sconti fino all’83% su Driver Booster PRO – Offerte di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>"/>
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<div class="main">
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo"  href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title clearfix">
        <div class="off fl">
          <b>FINO A</b>
          <h3>83%</h3>
          <b class="sconto">DI SCONTO</b>
        </div>
        <div class="text fl">
          <h2>SUPER SALTI ESTIVI</h2>
          <p>Il miglior programma al miglior prezzo!</p>
        </div>
      </div>
      <div class="panel clearfix">
        <div class="box">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
            <div class="tagbox">
              <h6>1 PC / 1 Anno</h6>
              <h6 class="tag">Risparmi <span>34,86</span></h6>
            </div>
          </div>
          <div class="price">
            <p><strong class="current">24</strong><span><b>€99</b><del class="original">59,85€</del></span></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-db51pc2499&ref=it_db51pc2499purchase1807&refs=it_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1PC1807a-it')">
              <i class="all-icons"></i>
              <span>ACQUISTA ORA</span>   
            </a>
          </div>
        </div>
        <div class="box red">
          <div class="giftbox">
            <i class="all-icons"></i>
            <p>Offerta scade il <span class="date-num">*</span> Agosto.</p>
          </div>
          <div class="inner">
            <div class="imgbox">
              <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
              <div class="tagbox">
                <h6>3 PC / 1 Anno</h6>
                <h6 class="tag">Risparmi <span>117,98</span></h6>
              </div>
            </div>
            <div class="price">
              <p><strong class="current">26</strong><span><b>€99</b><del class="original">144,97€</del></span></p>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=it-db53pcsdpf2699&ref=it_db53pcsdpf2699purchase1807&refs=it_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpf1807a-it')">
                <i class="all-icons"></i>
                <span>ACQUISTA ORA</span>   
              </a>
              <p class="people"><i class="all-icons"></i> Più di <b class="buyNum">5,538,119</b> acquistati</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
  <!-- payment end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Goditi più privilegi e la migliore esperienza di gioco con Driver Booster 5 PRO!</h2>
    <div class="clearfix panel">
      <div class="list one">
        <span class="icons01"></span>
        <dl>
          <dt><strong>Scaricamenti più Rapidi del 200% *</strong> <b>MIGLIORATO</b></dt>
          <dd>Download dei driver quando il sistema non è utilizzato <br>fino al 200% più veloce.</dd>
        </dl>
      </div>
      <div class="list two">
        <span class="icons02"></span>
        <dl>
          <dt><strong>Database del 200%* più grande</strong> <b>MIGLIORATO</b></dt>
          <dd>Un database due volte più ampio per aggiornare ancora più <br>driver rari e obsoleti.</dd>
        </dl>
      </div>
      <div class="list three">
        <span class="icons03"></span>
        <dl>
          <dt><strong>Scaricamento e <br>Aggiornamento più Sicuri</strong> <br><b>MIGLIORATO</b></dt>
          <dd>
            Effettua automaticamente il backup e crea <br>un punto di ripristino del sistema prima <br>dell'aggiornamento, nel caso qualcosa <br>vada storto.
          </dd>
        </dl>
      </div>
      <div class="list four">
        <span class="icons04"></span>
        <dl>
          <dt><strong>Nessun Crash del Sistema <br>Imprevisto</strong> <b class="neu">NUOVO</b></dt>
          <dd>Mantiene sempre aggiornati tutti i <br>driver per assicurarti un PC stabile.</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation wrapper">
    <h2>Regali Gratis per la massima protezione e ottimizzazione del PC!</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></dt>
        <dd>
          <h3>Smart Defrag 6 PRO</h3>
          <p><strong>0€</strong> <del>29,99€</del></p>
          <p>
            Offre la migliore deframmentazione del disco; <br>Accelera al massimo le prestazioni dell'hard driver
          </p>
        </dd>
      </dl>
      <dl class="pf">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd>
          <h3>Protected Folder</h3>
          <p><strong>0€</strong> <del>39,95€</del></p>
          <p>
            Protegge i tuoi file dagli intrusi che si celano nel tuo computer; <br>Mantiene i tuoi dati lontano dagli attacchi dannosi; <br>Una password singola per tutti i tuoi file.
          </p>
        </dd>
      </dl>
    </div>
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=it-db53pcsdpf2699&ref=it_db53pcsdpf2699purchase1807&refs=it_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpf1807a-it')">
      Ottieni i regali subito!
    </a>
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
        <dl class="vector">
          <dt>
          <div class="img-box">
            <h4>Vector</h4>
            <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
            <div>
              <div class="line"></div>
          </dt>
          <dd>"Finalmente ho trovato Driver Booster Pro, il programma perfetto per mantenere sempre pulito e aggiornato il mio sistema in modo super semplice." - <em>Tradotto da Giapponese</em></dd>
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
        <dl class="olnet right">
          <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
            <h4>01net</h4>
            <div>
              <div class="line"></div>
          </dt>
          <dd>"Tutte le operazioni possono essere finalizzate con un solo clic, Driver Booster ti aiuta a risparmiare il tuo tempo rendendo il PC più stabile." – <em>Tradotto da Francese</em></dd>
        </dl>
        <dl class="olorin active right">
          <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
            <h4>Olorin 89</h4>
          </div>
          <div class="line"></div>
          </dt>
          <dd>"Driver Booster è lo strumento di aggiornamento driver che semplifica la vita a tutti."</dd>
        </dl>
        <dl class="html active">
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
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
        <td class="virtue">Supporta 3 PC</td>
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
      <h2>Con soli €0,02 al giorno, ottieni il top della performance su PC e videogiochi!</h2>
      <div class="offer">
        <div class="imgbox">
          <img class="pcs active" src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="" />
          <img class="pc" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" />
        </div>
        <ul class="fl">
          <li class="active pcs" data-num="1">
            <i class="all-icons">√</i> 1 Anno / 3 PC + Gratis <strong class="off">-80%</strong>
          </li>
          <li class="pc" data-num="0"><i class="all-icons">√</i> 1 Anno / 1 PC <strong>-55%</strong></li>
        </ul>
        <div class="price fr">
          <p><del>€144,97</del> <strong>€<small>26</small>,99</strong></p>
          <p>Risparmi €<span class="discount">117,98</span></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-db53pcsdpf2699&ref=it_db53pcsdpf2699purchase1807&refs=it_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpf1807a-it')">
            Approfittane Ora!  
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- bottom start -->
  <div class="wrapper">
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>* Data potrebbe variare in base al sistema o computer.</dd>
      <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
    </dl>
    <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
  <!-- bottom end -->

  <div class="maskbox"></div>
  <div class="mask">
    <big>COMPLIMENTI!</big>
    <h4>Hai vinto un extra sconto speciale.</h4>
    <h2><b>-2€</b> subito sulla Super Offerta! </h2>
    <p>Solo <b>20</b> utenti l’hanno vinto.</p>
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=it-db53pcsdpf2499&ref=it_db53pcsdpf2499purchase1807b&refs=it_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpf1807b-it')">
      APPROFITTANE SUBITO 
    </a>
    <p class="countdown">Scade tra <span>09</span> Min <span>45</span> sec <span>306</span> ms, affrettati! </p>
    <div class="close">×</div>
  </div>

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <h2>OFFERTA ESTIVA</h2>
    <p class="countdown">Scade tra <span>40</span> Min <span>10</span> sec <span>014</span> ms *</p>
    <h4>
      <span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span> ha appena acquistato.
    </h4>
    <p><b id="saleType" class="packsNum">5</b> pezzi restanti, affrettati!</p>
  </div>
  <!-- floatlayer end -->
</div>

<script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>
</body>
</html>