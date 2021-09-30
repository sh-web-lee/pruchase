<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itdbseppa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>5){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
    }else{
      $packsNum=5;
    }
  }else{
    $packsNum=84;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) -70807174;
$buyNum = number_format($buyNum);

// 剩余礼品数
$packsNum = ceil(microtime_float()*2000/20000);
//礼品数最大值
$packsCount=360;
$packsNum = 360-($packsNum%360);
if ($_GET['action'] == 'getPacks'){
  echo $packsNum;
  exit;
}

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
$viewNum=rand(64,87);
if($_GET['action']=='getPack'){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'viewNum'=>$viewNum));
  exit();
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
  'purchase-10','purchase-14','purchase-15','purchase-16',
  'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
  'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
  'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
  'garegion'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Saldi 2018, sconti fino all’83% su Driver Booster PRO – Offerta Speciale di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>"/>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="header">
  <div class="wrapper">
    <a href="https://www.iobit.com" class="logo" target="_blank">IObit</a>
    <h1>SALDI SCONTI FINO ALL’ 83% SUL NUOVO RILASCIO</h1>
    <div class="box">
      <h2>-60%</h2>
      <div class="img-box"></div>
      <p class="line"><span></span>1 Anno/3 PC <span></span> </p>
      <p class="price">
        <strong>25</strong>
        <span>
          <del>74,85</del>
          <b>,99</b>
        </span>
      </p>
      <!-- db 1anno/3pc buybtn -->
      <a href="http://www.iobit.com/buy.php?product=it-db63pc2599&ref=it_db63pc2599purchase1809b<?php echo $refStr;?>&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PC1809b-it')"
         class="buybtn db-box">
        <i></i>
        <span>ACQUISTA ORA</span>
      </a>
    </div>
    <div class="box gift-box">
      <h2>-83%</h2>
      <div class="date">
        <h3>Scade tra: <strong>12</strong>m, <strong>12</strong>s, <strong>12</strong>ms</h3>
        <p>Soli <strong class="packsNum">40</strong> pezzi restanti!</p>
        <div class="bar">
          <span></span>
        </div>
      </div>
      <div class="img-box"></div>
      <p class="line"><span></span>1 Anno/5 PC <span></span> </p>
      <p class="price">
        <strong>27</strong>
        <span>
          <del>169,93</del>
          <b>,99</b>
        </span>
      </p>
      <!-- db+sd+pf 1anno/5pc buybtn -->
      <a href="http://www.iobit.com/buy.php?product=it-db65pcsdpf2799&ref=it_db65pcsdpf2799purchase1809b<?php echo $refStr;?>&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase5PCsdpf1809b-it')"
         class="buybtn">
        <i></i>
        <span>APPROFITTANE SUBITO</span>
      </a>
      <p class="last">Più di <strong class="buyNum">**</strong> acquistati</p>
    </div>
    <div class="box three-pc ">
      <h2>-70%</h2>
      <div class="img-box"></div>
      <p class="line"><span></span>1 Anno/5 PC <span></span> </p>
      <p class="price">
        <strong>27</strong>
        <span>
          <del>99,99</del>
          <b>,99</b>
        </span>
      </p>
      <!-- db 1anno/5pc buybtn -->
      <a href="http://www.iobit.com/buy.php?product=it-db65pc2799&ref=it_db65pc2799purchase1809b<?php echo $refStr;?>&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase5PC1809b-it')"
         class="buybtn db-box">
        <i></i>
        <span>ACQUISTA ORA</span>
      </a>
    </div>
  </div>
</div>
<ul class="visa wrapper clearfix">
  <li>
    <span><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></span>
    Garanzia di Soddisfazione
  </li>
  <li>
    <span><img src="<?php echo getStaticUrl('images/serives.png')?>" alt=""></span>
    Pagamento 100% Sicuro
  </li>
  <li>
    <span><img src="<?php echo getStaticUrl('images/veloce.png')?>" alt=""></span>
    Attivazione Veloce
  </li>
  <li>
    <span><img src="<?php echo getStaticUrl('images/support.png')?>" alt=""></span>
    Servizio di Supporto
  </li>
</ul>
<div class="db-message">
  <div class="wrapper">
    <h2>Vuoi le massime prestazioni del PC e un’esperienza di gioco più fluida? <span>Scopri Driver Booster 6 PRO!</span>  </h2>
    <div class="img-box">
      <div class="inner">
        <ul>
          <li><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></li>
          <li><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></li>
          <li><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></li>
          <li><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></li>
          <li><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""></li>
          <li><img src="<?php echo getStaticUrl('images/list05.png')?>" alt=""></li>
        </ul>
      </div>
      <div class="zoom">
        <ul>
          <li class="icons01"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></li>
          <li class="icons02"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></li>
          <li class="icons03"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></li>
          <li class="icons04"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></li>
          <li class="icons05"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></li>
        </ul>
      </div>
    </div>
    <div class="message">
      <dl class="list01">
        <dt>Game Ready per un Gioco più Fluido</dt>
        <dd>Gli ultimi driver di Game Ready di diverse marche <br> riparano i bug e migliorano l'esperienza di gioco.</dd>
      </dl>
      <dl class="list02">
        <dt>Database del 200%* più grande</dt>
        <dd>Un database due volte più ampio per aggiornare ancora <br> più driver rari e obsoleti. </dd>
      </dl>
      <dl class="list03">
        <dt>Scaricamento e Aggiornamento <br> più Sicuri</dt>
        <dd>Effettua automaticamente il backup e crea un <br> punto di ripristino del sistema prima dell'aggior <br> namento, nel caso qualcosa vada storto.</dd>
      </dl>
      <dl class="list04">
        <dt>Nuovissimo Game Boost Migliora la <br> Prestazioni del PC e Gioco</dt>
        <dd>Il nuovo Game Boost massimizza le risorse di sistema <br> con un solo clic garantendo una prestazione di gioco <br> più veloce e più fluida.</dd>
      </dl>
      <dl class="list05">
        <dt>Download più Rapidi del 200%*</dt>
        <dd>Download dei driver del 200% più veloce durante i periodi <br> di inattività del sistema.</dd>
      </dl>
    </div>
  </div>
</div>
<div class="gift-message ">
  <h2><strong>Regali Gratis</strong> soli per la SUPER OFFERTA</h2>
  <div class="wrapper">
    <dl class="pf">
      <dt><span class="img-box"></span></dt>
      <dd>
        <h3>Protected Folder  </h3>
        <del>39,95€</del> <strong><span>0</span>€</strong>
        <p>Protegge i tuoi file personali e li mantiene lontani dagli attacchi dannosi!</p>
      </dd>
    </dl>
    <dl class="sd">
      <dt><span class="img-box"></span></dt>
      <dd>
        <h3>Smart Defrag 6 </h3>
        <del>29,99€</del> <strong><span>0</span>€</strong>
        <p>Offre la migliore deframmentazione del <br> disco e accelera al massimo l'hard driver!</p>
      </dd>
    </dl>
    <!-- 1anno/5pc db+sd+pf buybtn -->
    <a href="http://www.iobit.com/buy.php?product=it-db65pcsdpf2799&ref=it_db65pcsdpf2799purchase1809b<?php echo $refStr;?>&refs=it_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase5PCsdpf1809b-it')"
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
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
      <td class="virtue">Supporta 5 PC</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr
    </tbody>
  </table>
</div>
<div class="bottom-buy">
  <div class="wrapper">
    <h2>Con solo <strong>€0,015</strong> al giorno, potresti godere il PC più stabile e l'esperienza di gioco più fluida!</h2>
    <div class="img-box three-gift"></div>
    <ul>
      <li class="one-pc"> <span>1 Anno / 3 PC</span> <strong>-60%</strong></li>
      <li class="active  three-gift"> <span>1 Anno / 5 PC+SD+PF</span> <strong>-83%</strong></li>
      <li class="three-pc"> <span>1 Anno / 5 PC</span> <strong>-70%</strong></li>
    </ul>
    <div class="message">
      <p class="price">
        <strong>27</strong>
        <span>
          <del>169,93</del>
          <b>,99</b>
        </span>
      </p>
      <!-- db+sd+pd 1anno/5pc buybtn -->
      <a href="http://www.iobit.com/buy.php?product=it-db63pcsdpf2499&ref=it_db63pcsdpf2499purchase1809<?php echo $refStr;?>&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpf1807a-it')"
         class="buybtn">
        <i></i>
        <span>ACQUISTA ORA</span>
      </a>
    </div>
  </div>
</div>

<dl class="annotation wrapper">
  <dt>Note:</dt>
  <dd>* Data potrebbe variare in base al sistema o computer.</dd>
  <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
</dl>
<p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
<div class="floatlayer" id="floatlayer">
  <p class="date">Scade tra: <strong>15</strong>m, <strong>15</strong>s, <strong>15</strong>ms</p>
  <h2>Super offerta</h2>
  <p class="ales"><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span> ha appena acquistato. <br><span class="fl-des"> Solo <strong class="packsNum">15</strong> pezzi rimasti.</span></p>
  <i class="close">×</i>
</div>

</body>
<script type="text/javascript">
  refStr='<?php echo $refStr;?>';
</script>
<script type="text/javascript" src="<?php echo getStaticUrl('js/script.js')?>"></script>


</html>