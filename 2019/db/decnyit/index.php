<?php
ob_start();
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
include $pRootUrl . 'callback.php';

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
$statusNow=empty($_GET['s'])?1:(intval($_GET['s']));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(($statusNow==2)?'3 PC/1 Anno':((rand(1,4)==4)?'3 PC/1 Anno':'3 PC/1 Anno+REGALI'));

$maxViewNum=899;
$minViewNum=641;
$viewNum=rand($minViewNum,$maxViewNum);

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  ob_get_clean();
  $date = $_GET['d'];
  $viewNumBef=$_GET['v'];
  $viewNum=rand($viewNumBef-100,$viewNumBef+100);
  $i=0;
  while(($viewNum<641)||($viewNum>899)){
    $viewNum=rand($viewNumBef-100,$viewNumBef+100);
    if($i>=8){
      $viewNum=rand($minViewNum,$maxViewNum);
      break;
    }
    $i++;
  }
  $c_name = 'itdbdecnyb_p' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 48;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 1) {
      setcookie($c_name, 1, time() + 3600 * 24);
      $packsNum = 1;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'viewNum'=>$viewNum));
  exit;
}

$reduceNum=152813229;
$reTime=10;
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$packsCount = 212;

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
    'garegion','dbofficialfree','dbofficialpro','purchase-35','purchase-36','crpro_1','crpro_2','reggaexpired','regovermax'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if($_GET['to']=='purchase-6'){
  if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    if(count($matches[1])>=2){
      $refStr.='-'.$matches[1][0].$matches[1][1];
    }
  }
}
if(in_array($_GET['pop'],array('x_db'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['ref'],array('de_ncdb6'))){
  $refStr.='-'.$_GET['ref'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Grande Offerta! sconti fino al 85% su Driver Booster PRO – Offerta capodanno 2019 di IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700'>
<link href="<?php echo getStaticUrl('style/style.min.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <div class="title">
        <h1>GRANDE SALDI</h1>
        <p>Risparmi fino all'85% su Driver Booster PRO e ottieni subito i regali gratis!</p>
      </div>
      <div class="panel clearfix">
        <div class="offer left" data-num="2">
          <img src="<?php echo getStaticUrl('images/discount-55.png')?>" alt=""/>
          <p class="anno">1 Anno / 1 PC</p>
          <p><strong class="discount">23</strong> <span class="uvp"><del class="original">59,85</del><b>,99</b></del></span></p>
          <a class="buybtn" href="http://www.iobit.com/buy.php?product=it-db61pc2399&ref=it_db61pc2399purchase1812<?php echo $refStr;?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1812-it')">
            <b>ACQUISTA ORA</b>
            <p>Risparmi €35,86</p>
          </a>
        </div>
        <div class="offer center" data-num="0">
          <div class="countdown">
            <i class="all-icons"></i>
            <span><strong>04</strong> Ore: <strong>08</strong> Min: <strong>48</strong> Sec: <strong class="last">126</strong> Ms</span>
          </div>
          <div class="counter">
            <div class="bar">
              <span style="width: 70%"></span>
            </div>
            <p>Soli <span class="packsNum"><?php echo $packsNum;?></span> pezzi restanti!</p>
          </div>   
          <img src="<?php echo getStaticUrl('images/discount-packs.png')?>" alt=""/>
          <p class="anno">1 Anno / 3 PC</p>
          <p><strong class="discount">24</strong> <span class="uvp"><del class="original">164,78</del><b>,99</b></del></span></p>
          <a class="buybtn yellowbtn" href="http://www.iobit.com/buy.php?product=it-db63pcsdpfamc2499&ref=it_db63pcsdpfamc2499purchase1812<?php echo $refStr;?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1812-it')">
            <b>APPROFITTANE ORA</b>
            <p>Risparmi €139,79</p>
          </a>
          <p class="people">Più di <span class="buynum"><?php echo $buyNum;?></span> acquistati</p>
        </div>
        <div class="offer right" data-num="1">
          <img src="<?php echo getStaticUrl('images/discount-65.png')?>" alt=""/>
          <p class="anno">1 Anno / 3 PC</p>
          <p><strong class="discount">24</strong> <span class="uvp"><del class="original">74,85</del><b>,99</b></del></span></p>
          <a class="buybtn" href="http://www.iobit.com/buy.php?product=it-db63pc2499&ref=it_db63pc2499purchase1812<?php echo $refStr;?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1812-it')">
            <b>ACQUISTA ORA</b>
            <p>Risparmi €49,86</p>
          </a>
        </div>
      </div>
      <div class="starbox">
        <span class="star"></span>
        <em class="flick"></em>
        <em class="light"></em>
      </div>

    </div>
  </div>
  <!-- banner end -->

  <!-- payments start -->
  <div class="payments">
    <div class="wrapper">
      <ul>
        <li>
          <div class="imgarea"><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></div>
          <p>Garanzia di Soddisfazione</p>
        </li>
        <li>
          <div class="imgarea"><img src="<?php echo getStaticUrl('images/safety.png')?>" alt=""></div>
          <p>Pagamento 100% Sicuro</p>
        </li>
        <li>
          <div class="imgarea"><img src="<?php echo getStaticUrl('images/qkcart.png')?>" alt=""></div>
          <p>Attivazione Veloce</p>
        </li>
        <li>
          <div class="imgarea"><img src="<?php echo getStaticUrl('images/support.png')?>" alt=""></div>
          <p>Servizio di Supporto</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- payments end -->

  <div class="intro">
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
           <dt>Download e Aggiornamento più Sicuri</dt>
           <dd>Effettua automaticamente il backup e crea un punto<br> di ripristino del sistema prima dell'aggiornamento,<br>nel caso qualcosa vada storto.</dd>
         </dl>
         <dl class="list04">
           <dt>Nuovissimo Game Boost Migliora le <br> Prestazioni del PC e Gioco</dt>
           <dd>Il nuovo Game Boost massimizza le risorse di sistema <br> con un solo clic garantendo una prestazione di gioco <br> più veloce e più fluida.</dd>
         </dl>
         <dl class="list05">
           <dt>Download più Rapidi del 200%*</dt>
           <dd>Download dei driver durante i<br> periodi di inattività del sistema<br> fino al 200% più rapido. </dd>
         </dl>
       </div>
    </div>
  </div>


  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Regali Gratis Esclusivi per Super Offerta a Tempo Limitato</h2>
      <div class="panel clearfix">
        <dl class="sd">
          <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/></dt>
          <dd>
            <h4>Smart Defrag PRO</h4>
            <strong>0€ <del>€29,99</del></strong>
            <p>Offre la migliore deframmentazione del disco e accelera al massimo l'hard driver!</p>
          </dd>
        </dl>
        <dl class="amc">
          <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="Advanced MobileCare"/></dt>
          <dd>
            <h4>Advanced MobileCare PRO</h4>
            <strong>0€ <del>€19,99</del></strong>
            <p>Accelera e protegge il tuo dispositivo mobile in tempo reale e non dovrai più preoccuparti delle frodi.</p>
          </dd>
        </dl>
        <dl class="pf">
          <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
          <dd>
            <h4>Protected Folder</h4>
            <strong>0€ <del>€39,95</del></strong>
            <p>Protegge i tuoi file personali e li mantiene lontani dagli attacchi dannosi!</p>
          </dd>
        </dl>  
      </div>
      <h3>Driver Booster 6 PRO + 3 Utilità Potenti GRATIS</h3>
      <p class="people">Più di <b class="buynum"><?php echo $buyNum;?></b> acquistati</p>
      <a class="buybtn yellowbtn" href="http://www.iobit.com/buy.php?product=it-db63pcsdpfamc2499&ref=it_db63pcsdpfamc2499purchase1812<?php echo $refStr;?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1812-it')">
        OTTIENI SUBITO I REGALI 
      </a>
      <span class="star"></span>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- reason start -->
  <div class="reason">
    <div class="wrapper">
      <h2>Senza la versione PRO potresti incontrare i seguenti problemi:</h2>
      <ul class="clearfix">
        <li>
          <span><img src="<?php echo getStaticUrl('images/res-icon01.png')?>" alt=""/></span>
          <h3>PC Problematico</h3>
          <p>Senza driver aggiornati o adatti, il computer non può funzionare correttamente e può bloccarsi e spegnersi spesso.</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/res-icon02.png')?>" alt=""/></span>
          <h3>Cattiva Performance di Gioco </h3>
          <p>La mancanza di componenti può rendere il tuo gioco inutilizzabile e driver obsoleti possono farti perdere una buona grafica e altre funzionalità di gioco.</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/res-icon03.png')?>" alt=""/></span>
          <h3>Hardware Incompatibile</h3>
          <p>A causa di dispositivi mancanti o difettosi, alcuni elementi hardware come mouse, tastiera e audio non possono funzionare insieme fluidamente, peggiorando le prestazioni del PC.</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- reason end -->
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
        <th colspan="2" class="text">Confronto delle funzionalità:</th>
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
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
        <td class="virtue">Sblocca la velocità massima di aggiornamento dei driver <em class="nuo">MIGLIORATO</em></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons line">√</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
        <td class="virtue top">
          <span>Database del 200% più grande per aggiornare più  driver rari e obsoleti </span>
          <em class="nuo">MIGLIORATO</em></td>
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
        <td class="virtue">Backup automatico di tutti i driver per il ripristino sicuro </td>
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
        <td class="virtue">Supporta 3 PC</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons line">√</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">√</i></td>
      </tr
      </tbody>
    </table>
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img class="left" src="<?php echo getStaticUrl('images/discount-55.png')?>" alt=""/>
        <img class="center active" src="<?php echo getStaticUrl('images/discount-packs.png')?>" alt=""/>
        <img class="right" src="<?php echo getStaticUrl('images/discount-65.png')?>" alt=""/>
      </div>
      <ul class="fl">
        <li class="left" data-num="0">
          <i class="all-icons">◎</i>
          <b>DB6 1 Anno / 1 PC</b>
          <strong>Risparmi 35,86</strong>
        </li>
        <li class="center active" data-num="1">
          <i class="all-icons">◎</i>
          <b>DB6 1 Anno / 3PC +SD+PF+AMC</b>
          <strong>Risparmi 139,79</strong>
        </li>
        <li class="right" data-num="2">
          <i class="all-icons">◎</i>
          <b>DB6 1 Anno / 3 PC</b>
          <strong>Risparmi 49,86</strong>
        </li>
      </ul>
      <div class="price fr">
        <p><strong class="discount">24</strong> <span><del class="original">164,78</del> <b>,99</b></span></p>
        <a class="buybtn yellowbtn" href="http://www.iobit.com/buy.php?product=it-db63pcsdpfamc2499&ref=it_db63pcsdpfamc2499purchase1812<?php echo $refStr;?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1812-it')">
         APPROFITTANE ORA
        </a>
      </div>
    </div>
  </div> 
  <!-- footbuy end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <!-- annotation start -->
      <dl class="annotation">
        <dt>Note:</dt>
        <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
        <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
      </dl>
      <!-- annotation end -->
      <p>Copyright 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer strat -->
  <div class="floatlayer" id="floatlayer">
    <img class="fl" src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
    <div class="fl right">
       <h2><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></h2>
<!--      <h2><span>Giuse***</span>   <span>Schill***</span></h2>-->
      <p>ha già attivato <span id="saleType"><?php echo $saleType?></span></p>
      <p><span class="viewNum"><?php echo $viewNum;?></span> utenti stanno guardando</p>
    </div>
    <i class="all-icons close">×</i>
  </div>
  <!-- floatlayer end -->

<script>
  viewNum='<?php echo $viewNum;?>';
</script>
<script src="<?php echo getStaticUrl('script/script.min.js')?>"></script> 
</body>
</html>