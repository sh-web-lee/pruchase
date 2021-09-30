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
$name=explode(' ',trim(get_line('data/it_name_2019.txt',rand(1,40))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  ob_get_clean();
  $date = $_GET['d'];
  $c_name = 'itascnovxexp' . $date;
  if (!isset($_COOKIE[$c_name])) {
    if($_GET['pageView']==1){
      $packsNum=26;
    }else {
      $packsNum = 26;
    }
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      setcookie($c_name, 0, time() + 3600 * 24);
      $packsNum = 0;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
      if (rand(1, 100) % 2 == 0) {
        $packsNum++;
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName));
  exit;
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
    'garegion','dbofficialfree','dbofficialpro','purchase-35','purchase-36','crpro_1','crpro_2'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('xr_asce'))){
  $refStr.='-'.$_GET['pop'];
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
$reduceNum=152813229;
$reTime=10;
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$packsCount = 274;
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Grande Offerta! Sconto fino a 90% su Advanced SuystemCare PRO – Offerta di natale 2019 di IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?> 
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>
        Offerte di Natale - solo <b>300</b> pezzi disponibili ogni giorno
      </h1>
      <p>Sconti fino all'90% su PRO e in più ricevi un pacchetto regalo gratuito!</p>
      <div class="offer left">
        <div class="discount small"><b><small>Risparmi</small>16€</b></div>
        <img src="<?php echo getStaticUrl('images/asc-one-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Anno, 1 PC</p>
          <p><strong>13,99€</strong> <del>29,99€</del></p>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=it-asc131pc1399&ref=it_asc131pc1399xmasexp1911<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc131pc1399xmasexp1911-it');">
            <i class="all-icons"></i>
            <span>ACQUISTA ORA</span>
          </a>
        </div>
      </div>
      <div class="offer center">
        <div class="gift">
          <i class="all-icons"></i> Solo <b class="reduceNum giftnum"><span>58</span></b> pezzi disponibili ora!
        </div>
        <div class="discount">
          <strong>-90%</strong>
          <b><small>Risparmi</small>134,93€</b>
        </div>
        <img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Anno, 3 PC</p>
          <p><strong>14,99€</strong> <del>149,92€</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-asc133pciusdpf1499&ref=it_asc133pciusdpf1499xmasexp1911<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc133pciusdpf1499xmasexp1911-it');">
            <i class="all-icons"></i>
            ACQUISTA ORA
          </a>
        </div>
        <p class="people"><b class="packsCount"><?php echo $packsCount;?></b> utenti hanno acquistato</p>
        <!-- <div class="maskbg"></div>
        <div class="ausbox">AUSVERKAUFT</div> -->
      </div>
      <div class="offer right">
        <div class="discount small"><b><small>Risparmi</small>35€</b></div>
        <img src="<?php echo getStaticUrl('images/asc-three-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Anno, 3 PC</p>
          <p><strong>14,99€</strong> <del>49,99€</del></p>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=it-asc133pc1499&ref=it_asc133pc1499xmasexp1911<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc133pc1499xmasexp1911-it');">
            <i class="all-icons"></i>
            <span>ACQUISTA ORA</span>
          </a>
        </div>
      </div>
      <div class="payment"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- banner end -->

  <div class="main">
    <!-- benfits -->
    <div class="benfits wrapper">
      <h2>Più funzioni esclusive, <br>Più veloce e più sicuro sarà il tuo PC!</h2>
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
        <a href="Javascript:void(0);" class="textlink">Per maggiori informazioni clicca qui ></a>
      </div>
    </div>
    <!-- end benfits -->

    <!-- comparison start -->
    <div class="comparison wrapper">
      <h2>NON LASCIARE CHE I FILE SPAZZATURA<br> RALLENTINO IL TUO PC!</h2>
      <table>
        <thead>
          <tr>
            <th class="itema"><big>Problemi</big> del PC che potresti incontrare:</th>
            <th class="itemb"><big>Soluzioni</big> di cui puoi godere:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="itema">
              Il sistema non stabile potrebbe causare <span>crash</span> del PC
            </td>
            <td class="itemb">
              La <span>pulizia profonda</span> dei file di registro ripara i problemi del sistema
            </td>
          </tr>
          <tr>
            <td class="itema">
              L’ottimizzazione <span>manuale</span> non può garantire la velocità massima del tuo PC
            </td>
            <td class="itemb">
              L’<span>Auto Pulizia</span> della RAM fa sì che il tuo PC funzioni in modo fluido
            </td>
          </tr>
          <tr>
            <td class="itema">
              La prestazione del disco <span>non</span> è completamente <span>ottimizzata</span>
            </td>
            <td class="itemb">
              Motore di Ottimizzazione del Disco accelera <span>al massimo</span> la prestazione del disco
            </td>
          </tr>
          <tr>
            <td class="itema">
              Connessione Internet <span>lenta</span> e non stabile
            </td>
            <td class="itemb">
              Accelerazione della connessione Internet accelera Internet fino al <span>300% più</span> veloce
            </td>
          </tr>
          <tr>
            <td class="itema">
              <span>Lieve</span> ottimizzazione della velocità d’avvio
            </td>
            <td class="itemb">
              Ottimizza l’avvio fino al <span>200% più</span> veloce
            </td>
          </tr>
          <tr>
            <td class="itema">
              La maggior parte delle protezioni di <span>base</span> non può garantire la sicurezza della tua privacy
            </td>
            <td class="itemb">
              Protezione dei dati personali <span>protegge completamente</span> la tua privacy
            </td>
          </tr>
          <tr>
            <td class="itema">
              Le minacce più recenti potrebbero <span>irrompere</span> nel tuo PC e attaccare il tuo sistema
            </td>
            <td class="itemb">
              Protezione in tempo reale <span>blocca le infezioni</span> di spyware
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->


    <!-- offermore start -->
    <div class="intro clearfix">
      <div class="wrapper">
        <h2>L’ULTIMO ADVANCED SYSTEMCARE 13 PRO TI OFFRE<br> MOLTO PIÙ DI QUANTO PENSI!</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
          <dd>
            <h3>Più Pulito</h3>
            <p>
              Rileva e pulisce <b>4GB*</b> in più di file spazzatura
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
          <dd>
            <h3>Omnicomprensivo</h3>
            <p>
              Pulisce le tracce personali presenti in oltre <b>200</b> programmi e <b>15</b> browser per tutti gli account utente
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
          <dd>
            <h3>Più Sicuro</h3>
            <p><b>Protegge la tua email</b> da varie minacce trasmesse via email</p>
          </dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
          <dd>
            <h3>MPiù Grande</h3>
            <p>Database ingrandito per aggiornare il <b>60%</b> in più di software</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- offermore end -->

    
    <!-- review -->
    <div class="review wrapper">
      <h2>Facciamo tutto il possibile per soddisfare i nostri<br> clienti ovunque essi siano!</h2>
      <div class="content">
        <h3>Cosa dicono di noi</h3>
        <ul>
          <li class="one"><img src="<?php echo getStaticUrl('images/html-it.png')?>" alt="HTML"></li>
          <li class="two">
            <img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay">
          </li>
          <li class="three">
            <img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick">
          </li>
          <li class="four"><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></li>
          <li class="five"><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></li>
        </ul>
        <div class="details">
          <div>
            <h4>HTML</h4>
            <p>
              Advanced SystemCare Pro si installa con semplicità. Advanced SystemCare Pro strizza l’occhio anche alla sicurezza ed è possibile scaricare come plugin aggiuntivo IObit Malware Fighter con cui proteggere il computer dai malware. Nella Modalità Semplificata sarà il programma a gestire in automatico quasi tutte le funzioni, mentre nella Modalità Esperto avremo la possibilità di configurare molte delle opzioni disponibili.
            </p>
          </div>
          <div class="active">
            <h4>Bruce Ramsay</h4>
            <p>
              Ho cominciato a usare la versione gratuita e infine ho acquistato la versione completa. Ha funzionato bene per tanti anni mantenendo il mio computer pulito e senza nessun “problema” e finora non mi ha mai deluso. Di recente, ho contattato il team di supporto di Advanced SystemCare e mi hanno risposto entro un giorno o due con tutto quello che dovevo sapere. A mio parere è importante il supporto per mantenere e far rimanere i clienti, ASC ha vinto sia in termini di prodotti che in termini di supporto.
            </p>
          </div>
          <div>
            <h4>Charles R. Widick</h4>
            <p>
              In quanto tecnico per la riparazione di computer, ho trovato che la maggior parte dei problemi possono essere risolti con la scansione e riparazione di Advanced SystemCare Free. Di solito, dopo aver finito una riparazione, consiglio al cliente di acquistare la versione Pro di questo prodotto. Chi ha più bisogno di un tecnico, avendo il potente Advanced SystemCare che cura il tuo sistema 24-7? Questo è il miglior prodotto che ogni utente privato dovrebbe comprare e provare. Grazie per aver reso il mio lavoro più facile.
            </p>
          </div>
          <div class="hank">
            <h4>Hank Ewert</h4>
            <p>
              Come la maggior parte degli utenti, non sono un esperto di computer. Non so quanti programmi ho provato nel corso degli anni, tutti reclamavano di essere i migliori, ma non si sono mai avvicinati alla protezione di Advanced SystemCare Pro, che sto usando adesso. Dopo aver acquistato questo programma impressionante, non ho mai chiamato un tecnico per chiedere aiuto, nemmeno una volta. Ha superato le mie aspettative, si mantiene sempre aggiornato e la grafica è molto bella. Grazie mille a tutti voi per rendere la mia vita molto più facile e veloce.
            </p>
          </div>
          <div>
            <h4>Loretta Harnarine</h4>
            <p>
              Questo programma è il migliore che abbia mai provato e usato. Ora il mio PC funziona molto meglio ed è più veloce. Ha pulito i file indesiderati, duplicati e le cartelle vuote, mi ha aiutato a distruggere i file e ha pulito e deframmentato i registri e tanti file sul mio PC. Ti raccomando di acquistare questo programma, non è costoso e le cose che farà per il tuo PC saranno totalmente sorprendenti.
            </p>
          </div>
        </div>
        <a class="next" href="javascript: nextFun();"></a>
        <a class="prev" href="javascript: prevFun();"></a>
      </div>
    </div>
    <!-- end review -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Premi a livello mondiale</h2>
      <p>
        Raccomandato e premiato dai media a livello mondiale, hai scelto il programma giusto per aggiornare i driver!
      </p>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
    </div>
    <!-- awards end -->

    <!-- footer start -->
    <div class="footer wrapper">
      <div class="service clearfix">
        <dl class="fl one">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h3>SENZA RISCHIO - Garanzia di rimborso di 60 giorni</h3>
            <p>
              Siamo fiduciosi che l’edizione PRO sarà in grado di offrire la migliore protezione per il tuo PC a un prezzo economico!
            </p>
          </dd>
        </dl>
        <dl class="fr two">
          <dt><h3>Accettiamo</h3></dt>
          <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
        </dl>
      </div>
    </div>
    <!-- footer end -->
  </div>

  <!-- notes start -->
  <dl class="notes wrapper">
    <dt>Note:</dt>
    <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
    <dd>
      * Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.
    </dd>
  </dl>
  <!-- notes end -->
  <p class="copyright wrapper">Copyright 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>

  <!-- popbox strat -->
  <div class="popbox" id="popbox">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
    <div class="fl right">
      <h2><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></h2>
      <p>ha già acquistato!</p>
    </div>
    <i class="all-icons close">×</i>
  </div>
  <!-- popbox end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/></div>
      <div class="center fl">
        <h2>Offerta esclusiva per il Natale 2019!</h2>
        <div class="numbox">
          <p>
            Affrettati, ne restano solo
            <div class="flipNum">
              <div class="listbox">
                <div class="list">
                  <b>0</b>
                </div>
              </div>
              <div class="listbox">
                <div class="list" >
                  <b>0</b>
                </div>
              </div>
            </div>  
          </p>
        </div>
      </div>
      <div class="price fr">
        <p><strong>14,99€</strong> <del>149,92€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-asc133pciusdpf1499&ref=it_asc133pciusdpf1499xmasexp1911<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc133pciusdpf1499xmasexp1911-it');">
          <i class="all-icons"></i>
          ACQUISTA ORA
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <!-- xmaxbox start -->
  <div class="xmaxbox">
    <span class="tree one"></span>
    <span class="tree two"></span>
    <span class="tree three"></span>
    <span class="tree four"></span>
    <span class="tree five"></span>
    <span class="tree six"></span>
    <span class="tree seven"></span>
    <span class="tree eight"></span>
    <span class="tree night"></span>
    <span class="tree ten"></span>
    <span class="tree eleven"></span>
  </div>
  <!-- xmaxbox end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>