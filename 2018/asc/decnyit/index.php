<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itascjanpa'.$date;
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
    $packsNum=41;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
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

$buyNum = ceil(microtimeFloat() * 1000 / 20000) -76400174;
$buyNum = number_format($buyNum);

$name=explode(' ',trim(get_line('data/it_name_natale.txt',rand(1,454))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
//$saleType=(rand(1,6)%6==0)?1:3;
$saleType=3;
$viewNum=rand(60,88);
//if($_GET['type']==2){
//	$saleType=1;
//}
if($_GET['action']=='getPack'){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'buyNum'=>$buyNum,'viewNum'=>$viewNum));
  exit();
}

if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
        'invalidcode','asc_install','asc_p6','asc_p7','ascofficialfree','ascofficialpro',
        'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Super offerta capodanno, sconti fino all'87% su Advanced SystemCare PRO – Offerta di Capodanno 2019!</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
    <h1>Super Offerte di Capodanno 2019</h1>
    <h2>Non fartele scappare, solo pochi prezzi disponibili!</h2>

    <div class="defalut-exceed"></div>
    <div class="sold-box">
      <h3>Mancano: <strong>55</strong> ore <strong>55</strong> min <strong>55</strong> sec <strong>55</strong> ms *</h3>
      <div class="img-box">
        <span class="three-img"></span>
        <span class="one-img"></span>
      </div>
      <dl>
        <dt><strong>85%</strong> DI SCONTO</dt>
        <dd>
          <!-- 3pcs+sd+pf buybtn -->
          <a href="http://www.iobit.com/buy.php?product=it-asc123pcsdpf1799&ref=it_asc123pcsdpf1799purchase1812<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1812-it')"
             class="button button-btm-lag">
            <span></span>Approfittane Ora!
          </a>
        </dd>
        <dd>Più di <span class="buyNum"><?php echo $buyNum?></span> acquistati</dd>
      </dl>
    </div>
    <div class="one-pc-box">
      <div class="img-box">
        <span class="one-img"></span>
        <span class="three-img"></span>
      </div>
      <dl>
        <dt><strong>64%</strong> DI SCONTO</dt>
        <dd>
          <!-- 1pc buybtn -->
          <a href="http://www.iobit.com/buy.php?product=it-asc123pc1799&ref=it_asc123pc1799purchase1812<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1812-it')"
             class="button">
            ACQUISTA Ora!
          </a>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- payments start -->
<div class="payments wrapper">
  <img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
</div>
<!-- payments end -->

<!-- benfits start -->
<div class="benfits">
  <div class="wrapper">
    <h2>La più avanzata soluzione tutto in uno per ottimizzare <br> il tuo PC al massimo!</h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li></li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
          </div>
        </li>
        <li class="fun5">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
          </div>
        </li>
      </ul>
      <ul class="list-icon">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <div class="detail-list">
      <dl>
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>100% PROTEZIONE </h3>
          <p>Protegge la tua privacy e i tuoi dati dagli accessi segreti, impedisce qualsiasi tentativo da parte intrusi maligni mantenendo la tua privacy due volte* più sicura rispetto alla versione Free</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>200%* PIÙ VELOCE</h3>
          <p>Pulisce tutti i file inutili e ottimizza la CPU e la Ram per accelerare l’avvio, aumenta la velocità del sistema per velocizzare il PC lento fino al 200% in più</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>300%* PIÙ RAPIDO</h3>
          <p>Aumenta notevolmente la velocità di download, di gioco, di navigazione su Internet e su piattaforme video come YouTube fino al 300% in più</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>MAGGIORE SPAZIO LIBERO</h3>
          <p>Pulisce in modo più profondo i file spazzatura, i collegamenti invalidi, i file di registro di sistema e i file di download incompleti con l’ottimizzazione avanzata</p>
        </dd>
      </dl>
      <a href="Javascript:void(0);" onclick="goTarget($('.compare'))" class="textlink">Per maggiori informazioni clicca qui ></a>
    </div>
  </div>
</div>
<!-- benfits end -->

<!-- gifts start -->
<div class="gifts">
  <div class="wrapper">
    <h2>Esclusivi Regali Gratis per il Natale 2018!</h2>
    <div class="gift-list clearfix">
      <dl class="exceed">
        <dt>
          <span></span>
          <strong>IObit Uninstaller 8 PRO</strong>
        </dt>
        <dd>€29,99  <b>€<span>0</span></b></dd>
        <dd><p>La migliore scelta per disinstallare in modo <br> potente i programmi e plug-in ostinati!</p></dd>
      </dl>
      <dl class="pf">
        <dt>
          <span></span>
          <strong>Protected Folder </strong>
        </dt>
        <dd>€39,95  <b>€<span>0</span></b></dd>
        <dd><p>Il programma più affidabile per proteggere <br> i tuoi file dagli attacchi maligni e assicurare <br> la tua privacy al massimo!</p></dd>
      </dl>
      <dl class="sd">
        <dt>
          <span></span>
          <strong>Smart Defrag 6 PRO</strong>
        </dt>
        <dd>€29,99  <b>€<span>0</span></b></dd>
        <dd><p>Offre la migliore deframmentazione del <br> disco e accelera al massimo l'hard driver!</p></dd>
      </dl>


    </div>
    <!-- 3pcs+sd+pf buybtn -->
    <a href="http://www.iobit.com/buy.php?product=it-asc123pcsdpf1799&ref=it_asc123pcsdpf1799purchase1812<?php echo $refStr;?>&refs=it_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1812-it')"
       class="button btn-mid-lag">
      <span></span>OTTIENI I REGALI SUBITO!
    </a>

  </div>
</div>
<!-- gifts end -->

<!-- review start -->
<div class="reviews ">
  <div class="wrapper">
    <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
    <p>Soddisfare i nostri clienti ovunque essi siano</p>
    <ul class="message clearfix">
      <li>
        <strong>200+</strong>
        <p>Popolare in più di <b>200</b> paesi in <br> tutto il mondo</p>
      </li>
      <li>
        <strong>1,000+</strong>
        <p>Più di <b>1,000</b> Media hanno apprezzato <br> e commentato </p>
      </li>
      <li>
        <strong>250,000,000+</strong>
        <p>Scelto e consigliato da oltre <br> <b>250</b> milioni di utenti mondiali</p>
      </li>
      <li>
        <strong>80%+</strong>
        <p>Più dell'<b>80%</b> degli utenti di Advanced <br> SystemCare hanno attivato l'edizione PRO</p>
      </li>
    </ul>
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
        <dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
        <dd>
          <strong>Markus Thomas</strong>
          <p>È il migliore programma che pulisce e accelera il mio PC in <br> modo corretto e sicuro. Rende i computer di vecchia <br> generazione più veloci e potenti! </p>
          <span></span>
        </dd>
      </dl>
      <dl class="html-it">
        <dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
        <dd>
          <strong>HTML.it</strong>
          <p>Advanced SystemCare Pro è un potente <br> programma con cui potremo ottimizzare <br> al massimo le prestazioni del nostro <br> sistema operativo. Gestisce in automatico <br> quasi tutte le funzioni, molto semplice da usare!</p>
          <span></span>
        </dd>
      </dl>
      <dl class="baixaki">
        <dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
        <dd>
          <strong>Baixaki</strong>
          <p>Advanced SystemCare ha un rendimento eccezionale, è in <br> grado di rilevare e risolvere problemi davvero complessi, <br> difficili persino da immaginare..</p>
          <span></span>
        </dd>
      </dl>
      <dl class="charles-r-widick">
        <dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
        <dd>
          <strong>Charles R. Widick</strong>
          <p>La mia scelta è ancora Advanced SystemCare Pro! </p>
          <span></span>
        </dd>
      </dl>
      <dl class="cnet">

        <dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
        <dd>
          <strong>Cnet</strong>
          <p>Advanced SystemCare punta a <br> rimediare qualsiasi problema affligga	<br> il tuo computer!</p>
          <span></span>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->

<!-- compare start -->
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
      <td class="virtue">Pulizia, riparazione ed ottimizzazione di base del sistema </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">√</i></td>
      <td class="virtue">
        300% maggiore rapidità di Internet con Internet Booster
        <span class="all-icons">Aggiornato</span>
      </td>

      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        200% avvio più veloce con Ottimizzazione dell’Avvio
        <span class="all-icons">Aggiornato</span>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        Sistema più stabile con Pulizia Profonda del Registro di Windows
        <span class="all-icons ra">Raccomandat</span>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        Sistema più veloce con Motore di Ottimizzazione del Disco Rigido
        <span class="all-icons ra">Raccomandat</span>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue"> Assicura la privacy online con Scudo della Privacy e Pulizia dell’Impronta Digitale <span class="all-icons nuo">Nuovo</span></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">Rileva e blocca le minacce alla sicurezza con Protezione in Tempo Reale <span class="all-icons">Aggiornato</span></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">Navigazione online più sicura con Rimozione Automatica delle Tracce di Privacy <span class="all-icons">Aggiornato</span></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        Massima convenienza con Aggiornamento Automatico e Pulizia Automatica della RAM
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">Privilegi di servizio 24/7 Supporto Tecnico Gratuito</td>
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
<!-- compare end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <h2>A Natale, fai il MIGLIOR REGALO al tuo vecchio PC!</h2>
    <div class="showcase">
      <span class="img"></span>
    </div>
    <div class="selection">
      <ul>
        <li class="three-pc active" ><i></i> <span>3 PC / 1 ANNO +SD+PF</span> <strong>-75%</strong></li>
        <li class="one-pc"><i></i> <span>3 PC / 1 Anno</span> <strong>-50%</strong></li>
      </ul>
    </div>
    <dl class="btnarea">
      <dt> <strong><b>17</b>,99</strong> <del>119,93</del>   Risparmi <span> 101,94</span></dt>
      <dd>
        <!-- 3pcs+sd+pf buybtn -->
        <a href="http://www.iobit.com/buy.php?product=it-asc123pcsdpf1799&ref=it_asc123pcsdpf1799purchase1812<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1812-it')"
           class="button button-top-lag">
          <span></span>Approfittane Ora!
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!-- payments start -->
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
<!-- payments end -->

<!-- footer start -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>
      * I dati potrebbero variare in base al sistema o computer.
    </dd>
    <dd>
      * Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.
    </dd>
  </dl>
  <div class="copyright">Copyright ©2005 - 2019 IObit. Tutti i diritti riservati</div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="float">
  <a href="javascript:void(0);" onclick="hideFloat();" class="close">X</a>
  <dl>
    <dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></dt>
    <dd>ha già attivato <span id="saleType"><?php echo $saleType;?></span> PC / 1 Anno</dd>
    <dd class="last"><span class="viewNum"><?php echo $viewNum;?></span> utenti stanno guardando</dd>
  </dl>
</div>
<!-- float end -->

<script type="text/javascript">
  refStr="<?php echo $refStr;?>";
</script>
<script src="<?php echo $pResUrl; ?>script/script.js"></script>
<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
</body>
</html>