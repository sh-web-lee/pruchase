<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf','xi_imf','xb_imf'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta Speciale - Sconti fino all’85% per IObit Malware Fighter PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- container -->
<div class="container">
  <!-- tree -->
  <div class="tree wrapper">
    <span class="tree-l"></span>
    <span class="tree-r"></span>
  </div>
  <!-- end tree -->

  <!-- spree -->
  <div class="spree wrapper">
    <div class="spree-box">
      <p>Solo <b class="packsNum"><?php echo $packsNum?></b> rimasti!</p>
      <a class="spree-buy"
         href="https://www.iobit.com/buy.php?product=it-imf83pcsdpfamc1999&ref=it_imf83pcsdpfamc1999purchase1912<?php echo $refStr;?>&refs=it_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcsdpfamc1912-it')">
      </a>
    </div>
  </div>
  <!-- end spree -->
</div>
<!-- end container -->

<!-- main -->
<div class="main wrapper">

  <!-- banner -->
  <div class="banner">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Super Offerta della Settimana </h1>
    <!-- subtitle -->
    <p>Migliore protezione di sicurezza e privacy ti offre la massima libertà digitale!</p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-55.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 Anno / 1 PC</p>
        <dl>
          <dd class="clearfix">
            Risparmi: <span class="fr">21,96€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>17</b> <del>39,95€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-imf81pc1799&ref=it_imf81pc1799purchase1912<?php echo $refStr;?>&refs=it_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1912-it')"
               data-num="2">
              <i class="all-icons"></i> ACQUISTA ORA
            </a>
          </dd>
        </dl>  
      </div>

      <!-- imf-85 -->
      <div class="message large fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-85.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 Anno / 3 PC</p>
        <!-- progress -->
        <div class="progress clearfix">
          <div class="progressbar fl clearfix">
            <p class="fr"></p>
          </div>
          <p class="countdown fl">
            <strong>00</strong>O
            <strong>00</strong>M
            <strong>00</strong>S
            <strong>30</strong>MS
          </p>
        </div>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            Risparmi: <span class="fr">129,89€</span>
          </dd>
          <dd class="one">
            Regali Gratis <i class="all-icons"></i>
            <p class="point">
              Regali Gratis inclusi Smart Defrag<br> PRO, Protected Folder e AMC Security.
            </p>
          </dd>
          <dd class="two">
            <p class="price red"><b>19</b> <del>149,88€</del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=it-imf83pcsdpfamc1999&ref=it_imf83pcsdpfamc1999purchase1912<?php echo $refStr;?>&refs=it_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcsdpfamc1912-it')"
               data-num="0">
              <i class="all-icons"></i> APPROFITTANE ORA
            </a>
            <p class="note"><i class="all-icons"></i><b class="viewNum">132.838</b> utenti l’hanno già acquistato</p>
          </dd>
        </dl>
      </div>

      <!-- imf-70 -->
      <div class="message small fr">
        <img class="box" src="<?php echo getStaticUrl('images/imf-70.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 Anno / 3 PC</p>
        <dl>
          <dd class="clearfix">
            Risparmi: <span class="fr">39,96€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>19</b> <del>59,95€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-imf83pc1999&ref=it_imf83pc1999purchase1912<?php echo $refStr;?>&refs=it_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pc1912-it')"
               data-num="1">
              <i class="all-icons"></i> ACQUISTA ORA
            </a>
          </dd>
        </dl>
      </div>

    </div>
    <!-- payment -->
    <img class="payment" src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
  </div>
  <!-- end banner -->

  <!-- feature -->
  <div class="feature">
    <!-- ball -->
    <div class="ball">
      <span>1</span>
    </div>
    <!-- title -->
    <h2>Approfitta della protezione di Bitdefender per una<br> sicurezza informatica superiore!</h2>
    <p>
      Grazie ai potenti motori Bitdefender Anti-Virus e Anti-malware, <span>oltre 209 milioni</span> di nuove<br> minacce online, come adware, virus, malware, spyware, ecc., possono essere facilmente rimosse dal PC.
    </p>
    <img src="<?php echo getStaticUrl('images/feature-icons.png')?>" alt="">
  </div>
  <!-- end feature -->

  <!-- intro -->
  <div class="intro">
    <!-- ball -->
    <div class="ball">
      <span>2</span>
    </div>
    <!-- title -->
    <h2>Goditi anche i seguenti vantaggi:</h2>
    <img src="<?php echo getStaticUrl('images/intro-adorn.png')?>" alt="">
    <!-- 01 -->
    <dl class="one clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Motore Anti-Ransomware</h3>
        <p>
          Blocca in modo proattivo il ransomware<br> che tenta di accedere al tuo computer<br> o crittografare i tuoi file importanti.
        </p>
      </dd>
    </dl>
    <!-- 02 -->
    <dl class="two clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon04.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Protezione dei Dati Sensibili <span>Nuovo</span></h3>
        <p>
          Protezione multistrato garantisce la<br> maggiore sicurezza dei tuoi dati sensibili<br> dagli accessi non autorizzati o ad alto rischio.
        </p>
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="three clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Navigazione più sicura su Internet</h3>
        <p>
          Elimina automaticamente i cookie e le tracce<br> pericolose quando chiudi il browser web<br> e impedisce agli hacker di cercare ciò<br> che leggi, visualizzi e acquisti online.
        </p>
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="four clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Protezione della webcam</h3>
        <p>
          Qualsiasi tentativo di accedere alla<br> tua webcam può essere confermato solo<br> con il tuo consenso.
        </p>
      </dd>
    </dl>
  </div>
  <!-- end intro -->

  <!-- gifts -->
  <div class="gifts">
    <!-- title -->
    <h2 class="on">Fai un solo clic per ottenere una protezione più potente</h2>
    <!-- dl -->
    <div class="content clearfix">
      <!-- iu -->
      <dl class="iu">
        <dt></dt>
        <dd>
          <p class="cost"><del>29,99€</del> <span><big>0</big>€</span></p>
          <p class="detail">
            Offre la migliore deframmentazione del<br> disco e accelera al massimo l'hard driver!
          </p>
        </dd>
      </dl>
      <!-- pf -->
      <dl class="pf">
        <dt></dt>
        <dd>
          <p class="cost"><del>39,95€</del> <span><big>0</big>€</span></p>
          <p class="detail">
            Protegge i tuoi file personali e li<br> mantiene lontani dagli attacchi dannosi!
          </p>
        </dd>
      </dl>
      <!-- amc -->
      <dl class="amc">
        <dt></dt>
        <dd>
          <p class="cost"><del>19,99€</del> <span><big>0</big>€</span></p>
          <p class="detail">Accelera il tuo dispositivo<br> fino al 200% più veloce!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end gifts -->

  <!-- comparison -->
  <div class="comparison">
    <!-- title -->
    <h2 class="on">Il tuo computer è vulnerabile senza protezione completa!</h2>
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
          <td class="item-a">3 milioni</td>
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
    <!-- subtitle -->
    <h3>Acquista IObit Malware Fighter PRO con uno sconto del <span>85%</span> per un PC più sicuro!</h3>
    <!-- imf-85 buybtn -->
    <a class="buybtn red"
       href="https://www.iobit.com/buy.php?product=it-imf83pcsdpfamc1999&ref=it_imf83pcsdpfamc1999purchase1912<?php echo $refStr;?>&refs=it_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcsdpfamc1912-it')">
      <i class="all-icons"></i> APPROFITTANE ORA!
    </a>

  </div>
  <!-- end comparison -->

  <!-- review -->
  <div class="review">
    <h2 class="on">FACCIAMO TUTTO IL POSSIBILE PER SODDISFARE I NOSTRI<br> CLIENTI OVUNQUE ESSI SIANO! </h2>
    <div class="content">
      <h3>Cosa dicono di noi</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/navigaweb.png')?>" alt="Navigaweb"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/filipe.png')?>" alt="Filipe"></li>
      </ul>
      <div class="details">
        <div>
          <h4>Navigaweb</h4>
          <p>"Se desideriamo una protezione completa del nostro computer, possiamo acquistare la versione PRO di IObit Malware Fighter, in grado di sbloccare il motore di scansione in tempo reale di Bitdefender (in grado di rimpiazzare quindi l'antivirus utilizzato finora sul PC), il modulo anti-ransomware e le altre impostazioni di sicurezza viste nella guida."</p>
        </div>
        <div class="active">
          <h4>Software.Informer</h4>
          <p>
            "IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojan, worm, keylogger e bot. Il programma utilizza due motori AV - il proprio e BitDefender – ed è efficace contro i malware impossibili da rilevare con altri strumenti. Un altro vantaggio è che funziona contemporaneamente con il programma standard AV. IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojans, worms, keyloggers e bots."
          </p>
        </div>
        <div>
          <h4>Adam Cullen</h4>
          <p>
            "IObit Malware Fighter è uno strumento grande, è in grado non solo di scansionare i file e le chiavette USB, proteggerti anche contro le minacce online e offline. Con i prodotti di IObit, ho ricevuto i grandi risultati e mi hanno aiutato tanto per proteggere il mio computer. Raccomando IObit e tutti i suoi prodotti a ciascuno che stia cercando una protezione e ottimizzazione del computer per rendere la tua vita più facile e semplice."
          </p>
        </div>
        <div>
          <h4>Filipe</h4>
          <p>
            "IObit Malware Fighter è il migliore programma per rimuovere i malware. Sono un tecnico e lavoro in Centro di Supporto, IMF è lo strumento ottimale per combattere contro malware, tutti i Malware saranno terminati. IMF è un software intuitivo con funzionalità avanzate e un'interfaccia grafica molto bella. Uno strumento moderno e vale usare tutti i giorni."
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- end review -->

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">Blocca più minacce online di sempre!</h2>
    <!-- box -->
    <div class="box fl">
      <img class="on" src="<?php echo getStaticUrl('images/bottombuy-imf-bundle.png')?>" alt="IObit Malware Fighter PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-imf.png')?>" alt="IObit Malware Fighter PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-imf.png')?>" alt="IObit Malware Fighter PRO">
    </div>
    <!-- ul -->
    <ul class="fl">
      <li class="active top">1 Anno / 3 PC + REGALI GRATIS</li>
      <li class="mid">1 Anno / 3 PC</li>
      <li class="bot">1 Anno / 1 PC</li>
    </ul>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price"><b>19</b> <del>129,89€</del></p>
      </dd>
      <dd>
        <a class="buybtn small"
           href="https://www.iobit.com/buy.php?product=it-imf83pcsdpfamc1999&ref=it_imf83pcsdpfamc1999purchase1912<?php echo $refStr;?>&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcsdpfamc1912-it')">
          <i class="all-icons"></i> ACQUISTA ORA
        </a>
      </dd>
    </dl>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>
          <h3>Garanzia di Soddisfazione</h3>
          <p>Garanzia di Soddisfazione</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dt>
        <dd>
          <h3>Pagamento Assicurato</h3>
          <p>Tutti i metodi di pagamento sono 100% verificati e sicuri</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/buycut.png')?>" alt=""/></dt>
        <dd>
          <h3>Attivazione Veloce</h3>
          <p>Dopo il tuo acquisto, riceverai il codice di licenza in pochi muniti tramite la mail </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dt>
        <dd>
          <h3>Servizio Clienti</h3>
          <p>24/7 Supporto tecnico gratuito</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Note:</dt>
        <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
        <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente a nostra esclusiva discrezione.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit.  Tutti i diritti riservati</p>
    </div>
  </div>
  <!-- end footer -->

</div>
<!-- end main -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>