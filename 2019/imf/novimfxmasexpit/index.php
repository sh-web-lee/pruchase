<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf','xr_imfe'))){
  $refStr.='-'.$_GET['pop'];
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Grande Offerta! Sconto fino a 90% su IObit Malware Fighter PRO – Offerta di natale 2019 di IObit </title>
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
         href="https://www.iobit.com/buy.php?product=it-imf73pcsdpfamc1699&ref=it_imf73pcsdpfamc1699xmasexp1911<?php echo $refStr;?>&refs=it_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf73pciupfamc1699xmasexp1911-it')">
      </a>
    </div>
  </div>
  <!-- end spree -->

  <!-- star -->
  <div class="star wrapper">
    <span class="star-l"></span>
    <span class="star-r"></span>
  </div>
  <!-- end star -->
</div>
<!-- end container -->

<!-- main -->
<div class="main wrapper">

  <!-- banner -->
  <div class="banner">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>OFFERTA LAMPO - NATALE SPECIALE</h1>
    <!-- subtitle -->
    <p>Le migliori offerte sono adesso! Fino al <span>-90%</span>, perché aspettare ancora?</p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-55.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 Anno / 1 PC</p>
        <dl>
          <dd class="clearfix">
            Risparmi: <span class="fr">23,96€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>15</b> <del>39,95€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-imf71pc1599&ref=it_imf71pc1599xmasexp1911<?php echo $refStr;?>&refs=it_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf71pc1599xmasexp1911-it')"
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
            Risparmi: <span class="fr">132,89€</span>
          </dd>
          <dd class="one">
            Regali di Natale <i class="all-icons"></i>
            <p class="point">
              Regali di Natale inclusi Smart Defrag<br> PRO, Protected Folder e AMC Security.
            </p>
          </dd>
          <dd class="two">
            <p class="price red"><b>16</b> <del>149,88€</del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=it-imf73pcsdpfamc1699&ref=it_imf73pcsdpfamc1699xmasexp1911<?php echo $refStr;?>&refs=it_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf73pciupfamc1699xmasexp1911-it')"
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
            Risparmi: <span class="fr">42,96€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>16</b> <del>59,95€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-imf73pc1699&ref=it_imf73pc1699xmasexp1911<?php echo $refStr;?>&refs=it_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf73pc1699xmasexp1911-it')"
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
      Grazie ai potenti motori Bitdefender Anti-Virus e Anti-malware, <span>oltre 203 milioni</span> di nuove<br> minacce online, come adware, virus, malware, spyware, ecc., possono essere facilmente rimosse dal PC.
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
        <h3>Il motore leader mondiale di Bitdefender</h3>
        <p>
          Con oltre 203 milioni di database,<br> ti protegge dalle minacce, tra cui virus,<br> malware, sypware, cryptojacking.
        </p>
      </dd>
    </dl>
    <!-- 02 -->
    <dl class="two clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Navigazione più sicura su Internet</h3>
        <p>
          Elimina automaticamente i cookie e le tracce<br> pericolose quando chiudi il browser web<br> e impedisce agli hacker di cercare ciò<br> che leggi, visualizzi e acquisti online.
        </p>
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="three clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Protezione della webcam</h3>
        <p>
          Qualsiasi tentativo di accedere alla<br> tua webcam può essere confermato solo<br> con il tuo consenso.
        </p>
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="four clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon04.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Dati personali più sicuri</h3>
        <p>
          Protegge i tuoi dati sensibili con una<br> password e nessuno può accedervi senza<br> la tua autorizzazione.
        </p>
      </dd>
    </dl>
  </div>
  <!-- end intro -->

  <!-- comparison start -->
  <div class="comparison">
    <h2>Non lasciare che i problemi dei driver<br> degradino il tuo PC!</h2>
    <table>
      <thead>
        <tr>
          <th class="itema"><big>Problemi</big> del PC che potresti incontrare:</th>
          <th class="itemb"><big>Soluzioni</big> che puoi ottenere:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">
            L’aggiornamento manuale potrebbe farti<br> <span>perdere</span> aggiornamenti importanti
          </td>
          <td class="itemb">
            Aggiorna automaticamente i driver e<br> mantiene tutti i tuoi driver <span>sempre aggiornati</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            La velocità di download <span>limitata</span> potrebbe richiedere<br> più tempo per scaricare ogni driver
          </td>
          <td class="itemb">
            <span>Sblocca l’accelerazione</span> di download al 100% per ridurre<br> notevolmente il tempo di download dei driver
          </td>
        </tr>
        <tr>
          <td class="itema">
            Il database driver <span>ridotto</span> potrebbe non rispondere<br> alle esigenze dei tuoi driver
          </td>
          <td class="itemb">
            Il database <span>ingrandito</span> del 40% copre il 99%* in<br> più delle esigenze dei tuoi driver
          </td>
        </tr>
        <tr>
          <td class="itema">
            Il processo di backup manuale <span>complicato</span> potrebbe<br> richiederti molto tempo
          </td>
          <td class="itemb">
            Backup automatico ti garantisce aggiornamenti<br> sicuri con una <span>doppia sicurezza</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            I componenti di gioco obsoleti potrebbero <span>degradare</span><br> le prestazioni di gioco
          </td>
          <td class="itemb">
            Componenti di gioco esclusivi, rari e più recenti a<br> disposizione per garantire un’<span>ottima</span> esperienza di gioco
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Nessuna priorità</span> in più per aggiornare i più recenti<br> ed esclusivi driver, inclusi i driver game-ready
          </td>
          <td class="itemb">
            Essere sempre il primo a ottenere i <span>più recenti</span><br> ed esclusivi driver
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->


  <!-- offermore start -->
  <div class="offermore clearfix">
    <h2>L’ULTIMO IOBIT MALWARE FIGHTER 7 TI OFFRE<br> MOLTO PIÙ DI QUANTO PENSI! </h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-01.png')?>" alt=""/></dt>
      <dd>
        <span><em>Migliorato</em></span>
        <h3>60% Più Grande</h3>
        <p>Database di Malware</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-02.png')?>" alt=""/></dt>
      <dd>
        <span class="nuovo"><em>Nuovo</em></span>
        <h3>Password Protette</h3>
        <p>Dati personali al sicuro</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/offermore-03.png')?>" alt=""/></dt>
      <dd>
        <span><em>Migliorato</em></span>
        <h3>300% Più Veloce</h3>
        <p>Scansione delle minacce</p>
      </dd>
    </dl>
  </div>
  <!-- offermore end -->

  
  <!-- review -->
  <div class="review">
    <h2 class="on">FACCIAMO TUTTO IL POSSIBILE PER SODDISFARE I NOSTRI<br> CLIENTI OVUNQUE ESSI SIANO! </h2>
    <div class="content">
      <h3>Cosa dicono di noi</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/navigaweb.png')?>" alt="Navigaweb"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></li>
        <li class="five"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></li>
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
          <h4>Bob Bassett</h4>
          <p>
            "Abbiamo utilizzato tanti programmi diversi per mantenere i nostri PC puliti e senza nessun intoppo. Ogni settimana ci volevano ore per questo processo. Ora, con IObit Malware Fighter Pro e Advanced System Care Pro, tutto è al suo posto e ci vogliono solo pochi minuti ogni due giorni per fare lo stesso lavoro con molta più fiducia. Il computer non ha più nessun problema dopo aver installato i prodotti di IObit."
          </p>
        </div>
        <div>
          <h4>David Cassidy</h4>
          <p>
            "Voglio ringraziare tutto lo staff di IObit per il loro impegno nel rilasciare sempre i programmi migliori. Questo aggiornamento è eccellente per gli utenti. La scansione è molto più veloce ed è facilissimo da usare. Chi cerca un buon programma anti-virus e anti-malware con un buon rapporto qualità-prezzo non deve fare altro che scaricare IObit Malware Fighter. Non accontentatevi, provate il migliore, IObit Malware Fighter."
          </p>
        </div>
        <div>
          <h4>Gelu Batir</h4>
          <p>
            "Sono molto soddisfatto del vostro prodotto – IObit Malware Fighter. Prima di conoscerlo le interferenze maligne mi causavano moltissimi problemi, non riuscivo a guardare un film per intero o godermi un concerto. Grazie al vostro programma, ogni operazione è diventata chiara, sicura e ben protetta. IObit Malware Fighter scansiona il mio PC portatile senza influenzarne le prestazioni, per questo motivo l’ho consigliato a due miei amici."
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- end review -->

  <!-- awards start -->
  <div class="awards">
    <h2>Premi a livello mondiale</h2>
    <p>
      Raccomandato e premiato dai media a livello mondiale, hai scelto il programma giusto per aggiornare i driver!
    </p>
    <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
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
        <dd><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dd>
      </dl>
    </div>
    <dl class="note">
      <dt>Note:</dt>
      <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
      <dd>* Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.</dd>
    </dl>
    <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
  <!-- footer end -->
</div>
<!-- end main -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/bottombuy-imf-bundle.png')?>" alt=""/></div>
    <div class="center fl"><h2>Offerta esclusiva per il Natale 2019!</h2></div>
    <div class="price fr">
      <p><strong>16,99€ </strong> <del>149,88€</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=it-imf73pcsdpfamc1699&ref=it_imf73pcsdpfamc1699xmasexp1911<?php echo $refStr;?>&refs=it_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf73pciupfamc1699xmasexp1911-it')">
        Rinnova e risparmia ora!
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script>
  var _imgsrc = "<?php echo getStaticUrl('images/bottombuy-imf.png')?>";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>