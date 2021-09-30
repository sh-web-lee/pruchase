<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $cName='itascoffgar_p'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=15;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
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
  fclose($fp);
}

$buyNum = ceil(microtimeFloat() * 1000 / 20000) -76400174;
$buyNum = number_format($buyNum);

$name=explode(' ',trim(get_line('data/it_name_natale.txt',rand(1,454))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,4)==4)?'Professional &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp':'Professional Plus';
$viewNum=rand(60,88);
//if($_GET['type']==2){
//	$saleType=1;
//}
if($_GET['action']=='getBuyUser'){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType));
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta del giorno, sconti fino all'85% su Advanced SystemCare PRO – Promozione limitata di IObit 2019</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      IL TUO PC HA BISOGNO DI <br>
      UNA MIGLIORE CURA PROFESSIONALE!
    </h1>
    <!-- countdown -->
    <p class="countdown">
      <span>SALE</span>
      <strong>00</strong> min:
      <strong>00</strong> sec:
      <strong>00</strong> ms
    </p>
    <!-- attention -->
    <p class="attention"><span class="buyNum">*</span> Persone hanno attivato</p>
    <!-- container -->
    <ul>

      <!-- 1PC -->
      <li class="basic">
        <h3>BASIC</h3>
        <dl class="save">
          <dt>€10</dt>
          <dd>risparmi</dd>
        </dl>
        <img src="<?php echo $pResUrl;?>images/asc-1pc.png" alt="Advanced SystemCare PRO 12">
        <!-- price -->
        <p class="price clearfix">
          <del>€29,99</del>
          <span>1 PC / 1 Anno</span>
          <strong>€19,99</strong>
        </p>
        <!-- 1PC buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=it-asc131pc1999&ref=it_asc131pc1999purchase1902cgaranzia<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1902cgaranzia-it')">
          <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
          ACQUISTA SUBITO
        </a>
      </li>

      <!-- 3PC -->
      <li class="professional">
        <h3>Professional</h3>
        <dl class="save">
          <dt>€32</dt>
          <dd>risparmi</dd>
        </dl>
        <dl class="were">
          <dt class="packsNumPro">**</dt>
          <dd>rimasti</dd>
        </dl>
        <img src="<?php echo $pResUrl;?>images/asc-3pc.png" alt="Advanced SystemCare PRO 12">
        <!-- price -->
        <p class="price clearfix">
          <del>€49,99</del>
          <span>3 PC / 1 Anno</span>
          <strong>€17,99</strong>
        </p>
        <!-- 3PC buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=it-asc133pc1799&ref=it_asc133pc1799purchase1902cgaranzia<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1902cgaranzia-it')">
          <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
          ACQUISTA SUBITO
        </a>
      </li>

      <!-- 3PC + gifts -->
      <li class="professional-plus">
        <h3>Professional Plus</h3>
        <dl class="save">
          <dt>€120</dt>
          <dd>risparmi</dd>
        </dl>
        <dl class="were">
          <dt class="packsNum">**</dt>
          <dd>rimasti</dd>
        </dl>
        <div class="box">
          <img src="<?php echo $pResUrl;?>images/asc-3pc.png" alt="Advanced SystemCare PRO 12">
          <img onclick="goTarget($('.gifts'))" class="asc-gifts" src="<?php echo $pResUrl;?>images/asc-gifts.png" alt="">
        </div>
        <!-- price -->
        <p class="price clearfix">
          <span class="tip">Kit Completo <i></i></span>
          <del>€139,99</del>
          <span>3 PC / 1 Anno</span>
          <strong>€19,99</strong>
        </p>
        <!-- tipbox -->
        <dl class="tipbox">
          <dt>Ulteriori Informazioni</dt>
          <dd>
            4 Prodotti in 1! <strong>Advanced SystemCare PRO</strong>, <strong>Smart Defrag <br> PRO</strong>,
            <strong>IObit Uninstaller PRO</strong> e <strong>Protected Folder</strong>. Pacchetto <br>
            completo per rendere il tuo PC più pulito, più veloce, e più sicuro.
          </dd>
        </dl>
        <!-- 3PC + gifts buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=it-asc133pciusdpf1999&ref=it_asc133pciusdpf1999purchase1902cgaranzia<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdiupf1902cgaranzia-it')">
          <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
          ACQUISTA SUBITO
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- end banner -->

<!-- payments -->
<div class="payments wrapper">
  <img src="<?php echo $pResUrl;?>images/payments.png" alt="">
</div>
<!-- end payments -->

<!-- benfits -->
<div class="benfits">
  <div class="wrapper">
    <h2>
      Ti garantiamo un PC più veloce, stabile e sicuro con la versione PRO <br>
      Altrimenti, ti rimborseremo subito! <span onclick="goTarget($('.footer'))">!</span>
    </h2>
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
          <h3>100%* PIÙ SICURO </h3>
          <p>Protegge la tua privacy e i tuoi dati dagli accessi segreti, impedisce qualsiasi tentativo da parte di intrusi maligni mantenendo la tua privacy due volte* più sicura rispetto alla versione Free.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>200%* PIÙ VELOCE</h3>
          <p>Pulisce tutti i file inutili e ottimizza la CPU e la Ram per accelerare l’avvio, aumenta la velocità del sistema per velocizzare il PC lento fino al 200% in più.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>300%* PIÙ FLUIDO</h3>
          <p>Aumenta notevolmente la velocità di download, di gioco, di navigazione su Internet e su piattaforme video come YouTube fino al 300% in più.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>MASSIMO SPAZIO LIBERO</h3>
          <p>Pulisce in modo più profondo i file spazzatura, i collegamenti invalidi, i file di registro di sistema e i file di download incompleti con l’ottimizzazione avanzata.</p>
        </dd>
      </dl>
      <a href="Javascript:void(0);" onclick="goTarget($('.compare'))" class="textlink">Per maggiori informazioni clicca qui ></a>
    </div>
  </div>
</div>
<!-- end benfits -->

<!-- gifts -->
<div class="gifts wrapper">
  <h2>
    Professional Plus <br>
    <strong>4 in 1!</strong> Tutto QUELLO che vuoi per il tuo PC è qui, a portata di clic!
  </h2>
  <dl class="asc">
    <dt>ASC PRO</dt>
    <dd>
      <h3>ASC PRO <span>3PC / 1 Anno</span></h3>
      <p>Ottimizzazione professionale disponibile per i PC di tutta la tua famiglia!</p>
    </dd>
  </dl>
  <dl class="iu">
    <dt>IU PRO</dt>
    <dd>
      <h3>IU PRO</h3>
      <p>Elimina definitivamente programmi, plugin e app di Windows indesiderati con un solo clic!</p>
    </dd>
  </dl>
  <dl class="sd">
    <dt>SD PRO</dt>
    <dd>
      <h3>SD PRO</h3>
      <p>Offre la migliore deframmentazione del disco e  accelera al massimo l'hard driver!</p>
    </dd>
  </dl>
  <dl class="pf">
    <dt>PF PRO</dt>
    <dd>
      <h3>PF PRO</h3>
      <p>Protegge i tuoi file personali e li mantiene lontani dagli attacchi dannosi!</p>
    </dd>
  </dl>
  <div class="clear"></div>
  <!-- price -->
  <p class="price">
    <strong>€19,99 </strong>
    <del>€139,99 </del> <br>
    <span>85% DI SCONTO</span>
  </p>
  <!-- 3PC + gifts buybtn -->
  <a class="buybtn"
     href="http://www.iobit.com/buy.php?product=it-asc133pciusdpf1999&ref=it_asc133pciusdpf1999purchase1902cgaranzia<?php echo $refStr;?>&refs=it_purchase_asc"
     onclick="ga('send', 'event', 'ascbuy', 'buy', ' ascpurchase3PCsdiupf1902mcgaranzia-it')">
    ATTIVA ORA!
  </a>
</div>
<!-- end gifts -->

<!-- review -->
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
<!-- end review -->

<!-- compare -->
<div class="compare wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Confronto delle funzionalità:</th>
      <th class="itemb">
        <div class="box">
          La tua versione <br> ATTUALE
          <span></span>
        </div>
      </th>
      <td class="space"></td>
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
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons01.png" alt=""></td>
      <td class="virtue">Pulizia, riparazione ed ottimizzazione di base del sistema </td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons02.png" alt=""></td>
      <td class="virtue">300% maggiore rapidità di Internet con Internet Booster<span class="all-icons">Aggiornato</span></td>
      <td class="itemb"><i class="all-icons close">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons03.png" alt=""></td>
      <td class="virtue">200% avvio più veloce con Ottimizzazione dell’Avvio<span class="all-icons">Aggiornato</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons04.png" alt=""></td>
      <td class="virtue">Sistema più stabile con Pulizia Profonda del Registro di Windows<span class="all-icons ra">Raccomandat</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons05.png" alt=""></td>
      <td class="virtue">Sistema più veloce con Motore di Ottimizzazione del Disco Rigido<span class="all-icons ra">Raccomandat</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons06.png" alt=""></td>
      <td class="virtue"> Assicura la privacy online con Scudo della Privacy e Pulizia dell’Impronta Digitale <span class="all-icons nuo">Nuovo</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons07.png" alt=""></td>
      <td class="virtue">Rileva e blocca le minacce alla sicurezza con Protezione in Tempo Reale <span class="all-icons">Aggiornato</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons08.png" alt=""></td>
      <td class="virtue">Navigazione online più sicura con Rimozione Automatica delle Tracce di Privacy <span class="all-icons">Aggiornato</span></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons09.png" alt=""></td>
      <td class="virtue">Massima convenienza con Aggiornamento Automatico e Pulizia Automatica della RAM</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons10.png" alt=""></td>
      <td class="virtue">Privilegi di servizio 24/7 Supporto Tecnico Gratuito</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon radius"></td>
      <td class="virtue radius"></td>
      <td class="itemb radius"></td>
      <td class="space radius"></td>
      <td class="itema radius"> <span class="shadow"></span></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end compare -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <h2>Con solo €0,05 al giorno, ottieni subito la migliore ottimizzazione professionale!</h2>
    <!-- box -->
    <div class="box fl">
      <img src="<?php echo $pResUrl;?>images/bottombuy-box.png" alt="Advance SystemCare PRO 12">
    </div>
    <!-- selector -->
    <ul class="selector fl">
      <li class="asc5pc active clearfix"
          data-url="http://www.iobit.com/buy.php?product=it-asc133pciusdpf1999&ref=it_asc133pciusdpf1999purchase1902cgaranzia<?php echo $refStr;?>&refs=it_purchase_asc&tw=-8"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdiupf1902cgaranzia-it')"
          data-price="€19,99"
          data-del="€139,99">
        <i></i>
        Professional Plus
        <strong class="fr">85% <small>di sconto</small></strong>
      </li>
      <li class="asc3pc"
          data-url="http://www.iobit.com/buy.php?product=it-asc133pc1799&ref=it_asc133pc1799purchase1902cgaranzia<?php echo $refStr;?>&refs=it_purchase_asc&tw=-8"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1902cgaranzia-it')"
          data-price="€17,99"
          data-del="€49,99">
        <i></i>
        Professional
        <strong class="fr">64% <small>di sconto</small></strong>
      </li>
      <li class="asc1pc"
          data-url="http://www.iobit.com/buy.php?product=it-asc131pc1999&ref=it_asc131pc1999purchase1902cgaranzia<?php echo $refStr;?>&refs=it_purchase_asc&tw=-8"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1902cgaranzia-it')"
          data-price="€19,99"
          data-del="€29,99">
        <i></i>
        Basic
        <strong class="fr">26% <small>di sconto</small></strong>
      </li>
    </ul>
    <!-- another -->
    <div class="another fr">
      <p class="price">
        <strong>€19,99 </strong>
        <del>€139,99 </del> <br>
      </p>
      <!-- 3PC + gifts buybtn -->
      <a class="buybtn"
         href="http://www.iobit.com/buy.php?product=it-asc133pciusdpf1999&ref=it_asc133pciusdpf1999purchase1902cgaranzia<?php echo $refStr;?>&refs=it_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdiupf1902cgaranzia-it')">
        <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
        ACQUISTA SUBITO
      </a>
    </div>
  </div>
</div>
<!-- end bottombuy -->

<!-- service -->
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
<!-- end service -->

<!-- footer -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>
      * I dati potrebbero variare in base al sistema o computer.
    </dd>
    <dd>
      * Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.
    </dd>
    <dd>
      * Se sei insoddisfatto, annulla entro 60 giorni senza alcun addebito, ti saranno rimborsati automaticamente sulla tua carta di credito o account PayPal.
    </dd>
  </dl>
  <div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
</div>
<!-- end footer -->

<!-- float -->
<div class="float">
  <a href="javascript:void(0);" onclick="hideFloat();" class="close">X</a>
  <dl>
    <dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></dt>
    <dd>ha già attivato il <strong id="saleType">Professional Plus</strong></dd>
    <dd class="last"><span class="viewNum"><?php echo $viewNum;?></span> utenti stanno guardando</dd>
  </dl>
</div>
<!-- end float -->

<!-- pop -->
<div class="pop">
  <div class="pop-large">
    <h2>COMPLIMENTI!</h2>
    <h3>HAI VINTO UN EXTRA SCONTO!</h3>
    <img class="box" src="<?php echo $pResUrl;?>images/pop-off.png" alt="">
    <p class="sold">Solo <strong>20</strong> utenti avranno la fortuna di vincere questo coupon!</p>
    <p class="price"> Ora <strong>€16,99</strong></p>
    <!-- pop buybtn -->
    <a class="buybtn"
       href="http://www.iobit.com/buy.php?product=it-asc121pc1699&ref=it_asc121pcpop1699purchase1902b<?php echo $refStr;?>&refs=it_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PCpop1902b-it');">
      <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
      ACQUISTA SUBITO
    </a>
    <!-- close -->
    <a class="button close" href="javascript: closePop();">Rinuncio</a>
    <!-- mini -->
    <a class="button mini" href="javascript: miniPop();">Minimizza</a>
  </div>
</div>
<div class="pop-small">
  <img class="box" src="<?php echo $pResUrl;?>images/pop-off-small.png" alt="">
  <!-- pop buybtn -->
  <a class="buybtn"
     href="http://www.iobit.com/buy.php?product=it-asc121pc1699&ref=it_asc121pcpop1699purchase1902b<?php echo $refStr;?>&refs=it_purchase_asc"
     onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PCpop1902b-it');">
    <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
    ACQUISTA SUBITO
  </a>
  <!-- maxi -->
  <a class="button maxi" href="javascript: showPop();">Massimizza</a>
</div>
<!-- end pop -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>