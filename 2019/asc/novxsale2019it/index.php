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

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);

$reduceNum=152813229;
$reTime=10;
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$packsCount = 270;
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  ob_get_clean();
  $date = $_GET['d'];
  $c_name = 'itascnovx' . $date;
  if (!isset($_COOKIE[$c_name])) {
    if($_GET['pageView']==1){
      $packsNum=29;
    }else {
      $packsNum = 29;
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
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Offerte Speciali – Sconti fino all’85% per Advanced SystemCare PRO</title>
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
      <h1>Offerte Speciali - solo <b>300</b> pezzi disponibili ogni giorno</h1>
      <p>Sconti fino all'85% su PRO e in più ricevi un pacchetto regalo gratuito!</p>
      <div class="offer left">
        <div class="discount small"><b><small>Risparmi</small>13€</b></div>
        <img src="<?php echo getStaticUrl('images/asc-one-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Anno, 1 PC</p>
          <p><strong>16,99€</strong> <del>29,99€</del></p>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=it-asc131pc1699&ref=it_asc131pc1699purchase1912<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1pc1912-it');">
            <i class="all-icons"></i>
            <span>ACQUISTA ORA</span>
          </a>
        </div>
      </div>
      <div class="offer center">
        <div class="gift">
          <i class="all-icons"></i> Solo <b class="reduceNum giftnum"><span>30</span></b> pezzi disponibili ora!
        </div>
        <div class="discount">
          <strong>-85%</strong>
          <b><small>Risparmi</small>131,93€</b>
        </div>
        <img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Anno, 3 PC</p>
          <p><strong>17,99€</strong> <del>149,92€</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-asc133pciusdpf1799&ref=it_asc133pciusdpf1799purchase1912<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pciusdpf1912-it');">
            <i class="all-icons"></i>
            ACQUISTA ORA
          </a>
        </div>
        <p class="people"><b class="packsCount"><?php echo $packsCount;?></b> utenti hanno acquistato</p>
        <!-- <div class="maskbg"></div>
        <div class="ausbox">AUSVERKAUFT</div> -->
      </div>
      <div class="offer right">
        <div class="discount small"><b><small>Risparmi</small>32€</b></div>
        <img src="<?php echo getStaticUrl('images/asc-three-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Anno, 3 PC</p>
          <p><strong>17,99€</strong> <del>49,99€</del></p>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=it-asc133pc1799&ref=it_asc133pc1799purchase1912<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1912-it');">
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

    <!-- feature start -->
    <div class="feature wrapper clearfix">
      <h2>Advanced SystemCare 13 ti offre molto più di quello che pensi</h2>
      <p>Non è solo un programma di pulizia</p>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
        <dd>
          <h3>Scudo della Privacy</h3>
          <p>
            Blocca i programmi non attendibili per accedere ai dati sensibili come contatti, dati e-mail, Dropbox, OneDrive ecc.
          </p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
        <dd>
          <h3>Blocca i malware</h3>
          <p>
            Impedisce a malware e spyware di entrare nel tuo computer grazie alla protezione in tempo reale.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
        <dd>
          <h3>Cancella le tracce </h3>
          <p>
            Le tue tracce online vengono cancellate automaticamente per evitare tracciamenti maligni.
          </p>
        </dd>
      </dl>
    </div>
    <!-- feature end -->

    <!-- giftbox start -->
    <div class="gifts">
      <div class="wrapper clearfix">
        <h2>PAGHI UNO A UN PREZZO SCONTATO E NE OTTIENI QUATTRO!</h2>
        <h3>IL PACCHETTO REGALO GRATUITO HA UN TEMPO LIMITATO</h3>
        <dl class="iu">
          <dt>
            <span class="ribbon"></span>
            <img src="<?php echo getStaticUrl('images/gifts-iu.png')?>" alt="IObit Uninstaller PRO"/>
          </dt>
          <dd>
            <h4>IObit Uninstaller PRO</h4>
            <strong>0€ </strong> <del>29,99€</del>
            <p>Elimina definitivamente programmi, plugin e app di Windows indesiderati con un solo clic!</p>
          </dd>
        </dl>
        <dl class="sd">
          <dt>
            <span class="ribbon"></span>
            <img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"/>
          </dt>
          <dd>
            <h4>Smart Defrag PRO</h4>
            <strong>0€ </strong> <del>29,99€</del>
            <p>Offre la migliore deframmentazione del disco e  accelera al massimo l'hard driver!</p>
          </dd>
        </dl>
        <dl class="pf">
          <dt>
            <span class="ribbon"></span>
            <img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"/>
          </dt>
          <dd>
            <h4>Protected Folder</h4>
            <strong>0€ </strong> <del>39,95€</del>
            <p>Protegge i tuoi file personali e li mantiene lontani dagli attacchi dannosi!</p>
          </dd>
        </dl>
      </div>
      <!-- centbuy start -->
      <div class="centbuy price wrapper">
        <p><strong>17,99€</strong> <del>149,92€</del></p>
        <p>PREZZO PIÙ VANTAGGIOSO</p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-asc133pciusdpf1799&ref=it_asc133pciusdpf1799purchase1912<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pciusdpf1912-it');">
          <i class="all-icons"></i>
          ACQUISTA ORA
        </a>
        <p class="pick">Solo <b class="pickNum">39</b> pezzi disponibili ora, affrettati!</p>
      </div>
      <!-- centbuy end -->
    </div>
    <!-- giftbox end -->

    <!-- review start -->
    <div class="gray-bg">
      <div class="map wrapper">
        <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
        <h4>Soddisfare i nostri clienti ovunque essi siano</h4>
        <div class="mapbox clearfix">
          <dl>
            <dt><b>200+</b></dt>
            <dd>Popolare in più di <b>200</b> paesi in tutto il mondo</dd>
          </dl>
          <dl class="two">
            <dt><b>1,000+</b></dt>
            <dd>Più di <b>1,000</b> Media hanno apprezzato e commentato Advanced </dd>
          </dl>
          <dl>
            <dt><b>2,500,000+</b></dt>
            <dd>Scelto e consigliato da oltre<br> <b>250 milioni</b> di utenti mondiali</dd>
          </dl>
          <dl class="four">
            <dt><b>80%+</b></dt>
            <dd>Più dell'<b>80%</b> degli utenti di Advanced SystemCare hanno attivato l'edizione PRO</dd>
          </dl>
        </div>
      </div>

      <div class="review wrapper">
        <h2>Facciamo tutto il possibile per soddisfare i nostri<br> clienti ovunque essi siano!</h2>
        <div class="reviewbox">
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
            <div>
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
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div id="compare" class="comparison wrapper">
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
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" /></td>
            <td class="virtue">Pulizia, riparazione ed ottimizzazione di base del sistema </td>
            <td class="itemb"><i class="all-icons close">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" /></td>
            <td class="virtue">
              300% maggiore rapidità di Internet con Internet Booster<span class="all-icons">Aggiornato</span>
            </td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" /></td>
            <td class="virtue">
              200% avvio più veloce con Ottimizzazione dell’Avvio<span class="all-icons">Aggiornato</span>
            </td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" /></td>
            <td class="virtue">
              Sistema più stabile con Pulizia Profonda del Registro di Windows<span class="all-icons ra">Raccomandat</span>
            </td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt="" /></td>
            <td class="virtue">
              Sistema più veloce con Motore di Ottimizzazione del Disco Rigido<span class="all-icons ra">Raccomandat</span>
            </td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt="" /></td>
            <td class="virtue">
              Assicura la privacy online con Scudo della Privacy e Pulizia dell’Impronta Digitale <span class="all-icons nuo">Nuovo</span>
            </td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt="" /></td>
            <td class="virtue">
              Rileva e blocca le minacce alla sicurezza con Protezione in Tempo Reale <span class="all-icons">Aggiornato</span>
            </td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt="" /></td>
            <td class="virtue">
              Navigazione online più sicura con Rimozione Automatica delle Tracce di Privacy <span class="all-icons agg">Aggiornato</span>
            </td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt="" /></td>
            <td class="virtue">
              Massima convenienza con Aggiornamento Automatico e Pulizia Automatica della RAM
            </td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt="" /></td>
            <td class="virtue">Privilegi di servizio 24/7 Supporto Tecnico Gratuito</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr class="last">
            <td class="virtue" colspan="2"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper clearfix">
        <div class="imgbox fl">
          <div class="imglist three">
            <img src="<?php echo getStaticUrl('images/asc-one-box.png')?>" alt=""/>
            <div class="discount small"><b><small>Risparmi</small> 13€</b></div>
          </div>
          <div class="imglist five">
            <img src="<?php echo getStaticUrl('images/asc-three-box.png')?>" alt=""/>
            <div class="discount small"><b><small>Risparmi</small> 32€</b></div>
          </div>
          <div class="imglist gift on">
            <img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
            <div class="discount">
              <strong>-85%</strong>
              <b><small>Risparmi</small> 131,93€</b>
            </div>
          </div>
        </div>
        <ul class="fl">
          <li class="three" data-num="0">
            <span>1 Anno / 1 PC</span>
            <strong>Risparmi 13€</strong>
          </li>
          <li class="five" data-num="2">
            <span>1 Anno / 3 PC</span>
            <strong>Risparmi 32€</strong>
          </li>
          <li class="gift on" data-num="1">
            <span>1 Anno / 3PC + IU+SD+PF </span>
            <strong>Risparmi 131,93€</strong>
            <!-- <div class="ausbox">AUSVERKAUFT</div> -->
          </li>
        </ul>
        <div class="price fr">
          <p><strong>17,99€</strong> <del>149,92€</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-asc133pciusdpf1799&ref=it_asc133pciusdpf1799purchase1912<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pciusdpf1912-it');">
            <i class="all-icons"></i>
            ACQUISTA ORA
          </a>
        </div>
      </div>
    </div> 
    <!-- footbuy end -->
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

  <!-- floatlayer strat -->
  <div class="floatlayer" id="floatlayer">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
    <div class="fl right">
      <h2><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></h2>
      <p>ha già acquistato!</p>
    </div>
    <i class="all-icons close">×</i>
  </div>
  <!-- floatlayer end -->

  <!-- xmaxbox start -->
  <!-- <div class="xmaxbox">
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
  </div> -->
  <!-- xmaxbox end -->

  <div class="circlebox">
    <span class="one on"></span>
    <span class="two on"></span>
    <span class="two l1 on"></span>
    <span class="three on"></span>
    <span class="three l2 on"></span>
    <span class="four on"></span>
    <span class="four l3 on"></span>
    <span class="four l9 on"></span>
    <span class="four l10 on"></span>
    <span class="five on"></span>
    <span class="six on"></span>
    <span class="seven on"></span>
    <span class="eight on"></span>
    <span class="one l5 on"></span>
    <span class="nine on"></span>
    <span class="nine on"></span>
    <span class="ten on"></span>
    <span class="ten l6 on"></span>
    <span class="ten l7 on"></span>
    <span class="ten l8 on"></span>
    <span class="eleven on"></span>
    <span class="twelve on"></span>
    <span class="thirteen on"></span>
    <span class="fourteen on"></span>
    <span class="fifteen on"></span>
    <span class="sixteen on"></span>
    <span class="seventeen on"></span>
    <span class="ten l11 on"></span>
  </div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>