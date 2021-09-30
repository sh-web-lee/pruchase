<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$refstr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$buyNum = ceil(microtime_float() * 1000 / 20000) -68807174;
$buyNum = number_format($buyNum);

if ($_GET['action'] == 'getPacks'){
  echo $buyNum;
  exit;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Paga €0 per provare la versione PRO GRATIS!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <!--
  <script>
    var browserLanguage=MApp(2.2).language.langArr[0];
    if(browserLanguage=='fr'){
      window.location.href='https://purchase.iobit.com/fr/imf/30daytrial.php<?php echo empty($_SERVER["QUERY_STRING"])?"":("?".$_SERVER["QUERY_STRING"])?>';
    }
  </script>
  -->
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function decreasingPacks(){
      $.ajax({
        type: "GET",
        url: "./30daytrial.php",
        async:true,
        data: "action=getPacks&r="+Math.random(),
        success: function(packs){
          $('#buyNum').html(packs);
          setTimeout('decreasingPacks()', 20000);
        }
      });
    }
    setTimeout('decreasingPacks()', 20000);
  </script>
</head>
<body>
<!-- header start -->
<div class="banner">
  <div class="wrapper">
    <a href="http://www.iobit.com/it/index.php" class="logo" target="_blank">IObit</a>
    <div class="title">
      <h1>IObit Malware Fighter 8</h1>
      <h2></h2>
    </div>
    <div class="content">
      <div class="left">
        <img src="<?php echo $pResUrl; ?>images/imf-box.png" alt="">
        <p><img src="<?php echo $pResUrl; ?>images/people.png" alt=""><strong id="buyNum"><?php echo $buyNum; ?></strong> persone hanno provato</p>
      </div>
      <div class="right">
        <p class="now clearfix"><span class="text">Ora</span> <span class="price">0€</span></p>
        <dl>
          <dt>Offerta imperdibile per provare PRO GRATIS</dt>
          <dd>Prova la versione PRO per 30 giorni a 0€.</dd>
          <dd>Annullare in qualsiasi momento durante il periodo di 30 giorni.</dd>
        </dl>
        <p class="leaving">Non fartela scappare!</p>
        <a href="https://www.iobit.com/buy.php?product=it-imf30day&ref=it_imf30daytrial<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', '30daytrialpurchase-it');"
           class="buybtn">
          Prova PRO GRATIS
        </a>
      </div>
    </div>
  </div>
</div>
<!-- header end -->

<!-- trial -->
<div class="trial">
  <dl class="wrapper">
    <dt>Termini di promozione - Prova gratuito di 30 giorni</dt>
    <dd>Alla fine del periodo di prova gratuito di 30 giorni, verranno addebitati automaticamente €19,99 sulla tua carta di credito o conto PayPal. Questo sconto del 65% dal prezzo originale di €59,95 è un bonus per i clienti che scelgono la prova gratuito solo!</dd>
  </dl>
</div>
<!-- end trail -->

<!-- container start -->
<div class="main wrapper">
  <!-- enjoy -->
  <div class="enjoy clearfix">
    <h2>Prova la versione PRO GRATUITAMENTE e ottieni la protezione totale!</h2>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons01.jpg" alt=""></dt>
      <dd>
        <strong>Doppia protezione di Bitdefender e IObit</strong>
        Combina motore anti-malware di IObit con il motore antivirus leader nel mondo di Bitdefender per offrirti una soluzione di sicurezza anti-malware e antivirus più completa.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons02.jpg" alt=""></dt>
      <dd>
        <strong>Rileva, blocca e rimuovi oltre 209.000.000 di minacce</strong>
        Doppio motore consente di rilevare, bloccare e rimuovere in modo più profondo ed efficiente oltre 209 milioni di minacce nascoste come spyware, ransomware, adware, trojan, keylogger, robot, worm e dirottatori.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons03.jpg" alt=""></dt>
      <dd>
        <strong>Camera Guard e Anti-Tracking</strong>
        Ti informa immediatamente una volta un programma tenta di utilizzare segretamente la videocamera per rubare la tua privacy e ripulire automaticamente le tracce dannose, protegge così le informazioni sensibili immesse online, come conti bancari, e-mail o altri account social.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons04.jpg" alt=""></dt>
      <dd>
        <strong>Blocca ransomware e proteggi file e denaro</strong>
        Blocca in modo proattivo qualsiasi ransomware che tenta di entrare nel tuo PC. Anche il ransomware Petya / GoldenEye può essere facilmente bloccato e rimosso.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons05.jpg" alt=""></dt>
      <dd>
        <strong>Dati personali protetti</strong>
        I tuoi dati personali possono essere conservati separatamente dagli altri e protetti con la password personalizzata. Nessuno può accedere senza permesso.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons06.jpg" alt=""></dt>
      <dd>
        <strong>Previeni processi e virus dannosi da USB</strong>
        Blocca efficacemente i processi dannosi in esecuzione nel sistema e le infezioni da virus portate da USB Disk.
      </dd>
    </dl>
  </div>

  <!-- opt-out -->
  <dl class="opt-out">
    <dt><span>Ora</span> <span class="price">0€</span></dt>
    <dd>
      <a href="https://www.iobit.com/buy.php?product=it-imf30day&ref=it_imf30daytrial<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', '30daytrialpurchase-it');"
         class="buybtn">
        Estendi la tua prova a 30 giorni
      </a>
    </dd>
    <dd><span>Annullare in qualsiasi momento durante il periodo di prova gratuito di 30 giorni</span><span>Ottieni uno sconto esclusivo del 65% al termine del periodo di prova</span></dd>
  </dl>

  <!-- media -->
  <div class="media clearfix">
    <h2>Recensioni dei media e degli utenti</h2>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/software.jpg" alt=""></dt>
      <dd>
        <strong>Software.Informer</strong>
        <p>"IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojan, worm, keylogger e bot. Il programma utilizza due motori AV - il proprio e BitDefender – ed è efficace contro i malware impossibili da rilevare con altri strumenti."</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/adam-cullen.png" alt=""></dt>
      <dd>
        <strong>Adam Cullen</strong>
        <p>"IObit Malware Fighter è uno strumento grande, è in grado non solo di scansionare i file e le chiavette USB, proteggerti anche contro le minacce online e offline."</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/navigaweb.png" alt=""></dt>
      <dd>
        <strong>Navigaweb</strong>
        <p>"Se desideriamo una protezione completa del nostro computer, possiamo acquistare la versione PRO di IObit Malware Fighter, in grado di sbloccare il motore di scansione in tempo reale di Bitdefender."</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/filipe.png" alt=""></dt>
      <dd>
        <strong>Filipe</strong>
        <p>"IObit Malware Fighter è il migliore programma per rimuovere i malware. Sono un tecnico e lavoro in Centro di Supporto, IMF è lo strumento ottimale per combattere contro malware, tutti i Malware saranno terminati."</p>
      </dd>
    </dl>
  </div>

  <!-- comparison -->
  <div class="comparison">
    <!-- title -->
    <h2 class="on">Prova la versione PRO a 0€ e ottieni subito la protezione totale </h2>
    <!-- table -->
    <table>
      <thead>
      <tr>
        <th class="item-a"><p>Versione attuale</p></th>
        <th class="item-b"></th>
        <th class="item-c"><p>IObit Malware Fighter 8 PRO</p></th>
      </tr>
      </thead>
      <tbody>
      <!-- 01 -->
      <tr>
        <td class="item-a">9 milioni</td>
        <td class="item-b">Database anti-malware</td>
        <td class="item-c">Oltre 209 milioni</td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
        <td class="item-b">Motori antivirus di Bitdefender</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
        <td class="item-b">Motore Anti-Ransomware</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
        <td class="item-b">Protezione delle tue cartelle e dei multipli tipi di file</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
        <td class="item-b">Protezione Webcam</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
        <td class="item-b">Protezione Anti-Traccia</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
        <td class="item-b">Prevenzione di virus tramite USB</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
        <td class="item-b">Dati sensibili protetti da password</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
        <td class="item-b">Protezione in tempo reale</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
        <td class="item-b">Aggiornamento automatico</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- container end -->

<!-- bottom-buy -->
<div class="bottom-buy">
  <div class="wrapper">
    <img src="<?php echo $pResUrl; ?>images/imf-bottom-box.png" alt="">
    <ul>
      <li>Prova la versione PRO per 30 giorni a 0€.</li>
      <li>Annullare in qualsiasi momento durante il periodo di 30 giorni.</li>
    </ul>
    <a href="https://www.iobit.com/buy.php?product=it-imf30day&ref=it_imf30daytrial<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', '30daytrialpurchase-it');"
       class="buybtn">
      Estendi GRATUITAMENTE
    </a>
  </div>
</div>
<!-- end bottom-buy -->

<!-- product -->
<div class="product">
  <h2>Premi in tutto il mondo</h2>
  <img src="<?php echo $pResUrl; ?>images/awrad.png" alt="">
  <!-- footer -->
  <div class="footer wrapper">Copyright © 2005 - <?php echo date(Y)?> IObit. Tutti i diritti riservati</div>
</div>
<!-- product -->
</body>
</html>