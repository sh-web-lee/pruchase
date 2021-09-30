<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'isulaun_p' . $date;
  $c_name_t='isulaun_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(156,200);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Risparmia il 85% di sconto su IObit Software Updater PRO e Prende pacchetti regalo gratuiti - IObit  </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <!-- title -->
    <h1>Offerta Speciale del nuovo rilascio</h1>
    <div class="img-box">
      <img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Update PRO"/>
    </div>
    <div class="right-message">
      <h2><span>2 REGALI GRATIS</span> limitati per i primi 100 acquisti</h2>
      <!-- progress -->
      <div class="progress">
        <p><strong class="viewNum"><?php echo $viewNum;?></strong> visitori,  <span class="buyNum">51</span> posti restani</p>
        <div class="bar">
          <span class="box"><span class="disappear"></span></span>
        </div>
      </div>
      <p class="price">
        <!-- price -->
        <span>Ora <strong>€<b>12</b>.99</strong></span>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-isu23pcsdpf1299&ref=it_isu23pcsdpf1299<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_isu"
           onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase1905-it');">
          ATTIVA ORA
        </a>
      </p>
      <ul class="list">
        <li>Originale <span>€99.93 </span></li>
        <li>Sconto <span>85% </span></li>
        <li>Risparmi <span>€86.94 </span></li>
      </ul>
    </div>
  </div>
</div>
<!-- banner end -->


<!-- intro start -->
<div class="intro">
  <div class="wrapper clearfix">
    <h2>Perché IObit Software Updater PRO?</h2>
    <img src="<?php echo getStaticUrl('images/intro-box.png')?>" class="img-box" alt="IObit Software Update PRO"/>
    <div class="left-message">
      <h3><i></i>Mantiene i software sempre aggiornati </h3>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
        <dd><strong>Protezione</strong></dd>
        <dd>Software aggiornati riparano le <br> falle di sicurezza prevenendo gli <br> attacchi informatici.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
        <dd><strong>Miglioramento</strong></dd>
        <dd>Software aggiornati riportano le <br> nuove funzioni e migliorano la <br> prestazione e la stabilità del PC.</dd>
      </dl>
    </div>
    <div class="right-message">
      <h3><i></i>Aggiorna i software in modo semplice </h3>
      <dl class="list01">
        <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
        <dd><strong>Semplice</strong> Scarica gli aggiornamenti dei software senza apertura del websiti. </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
        <dd><strong>Automatico</strong> Aggiornamento programmato ti aiuta a scaricare e installare gli aggiornamenti in modo automatico e silenzioso quando sono disponibili. </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt=""></dt>
        <dd><strong>Sicuro</strong> Crea automaticamente il punto di ripristino prima di installare nel caso qualcosa vada storto. </dd>
      </dl>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Quali sono i vantaggi di IObit Software Updater PRO?</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
        <span class="suspend01"></span>
        <span class="suspend02"></span>
        <span class="suspend03"></span>

      </div>
      <div class="right fr">
        <ul class="feature-list">
          <li><i class="all-icons">◎</i> Aggiorna i software con un solo clic</li>
          <li><i class="all-icons">◎</i> Scarica e installa gli aggiornamento in modo silenzioso</li>
          <li><i class="all-icons">◎</i> Imposta le scansioni e gli aggiornamenti automatici</li>
          <li><i class="all-icons">◎</i> Esclude un certo programma che non vuoi aggiornare</li>
          <li><i class="all-icons">◎</i> Opzione di creare automaticamente un punto di ripristino prima d’installazione</li>
          <li><i class="all-icons">◎</i> Opzione di cancellare automaticamente i file di setup dopo l’installazione</li>
          <li><i class="all-icons">◎</i> Supporta il download diretto di altri programmo popolari</li>
          <li><i class="all-icons">◎</i> Disattiva le pubblicità sponsorizzate nella versione free</li>
        </ul>
        <p class="price">
          <!-- price -->
          <span>Ora <strong>€<b>12</b>.99</strong> <span>Solo <b class="buyNum">50</b> restanti, affrettati!</span></span>
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-isu23pcsdpf1299&ref=it_isu23pcsdpf1299<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_isu"
             onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase1905-it');">
            ATTIVA ORA
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- gift-message start -->
<div class="gift-message">
  <div class="wrapper">
    <h2>Quali sono i vantaggi otterai con i regali gratis?</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="Smart Defrag PRO"/></dt>
      <dd>
        <h3>Smart Defrag PRO</h3>
        <strong>€0</strong> <del>€29.99</del> 1 Anno / 1 PC
        <p>Massimizzare l’ottimizzazione  <br> dell’hard driver del PC!</p>
      </dd>
    </dl>
    <dl class="pf">
      <dt><img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="Protected Folder"/></dt>
      <dd>
        <h3>Protected Folder</h3>
        <strong>€0</strong> <del>€39.95</del> 1 Anno / 1 PC
        <P>Non preoccupare più della perdita <br> dei data e della privacy!</P>
      </dd>
    </dl>
  </div>
</div>
<!-- gift-message end -->

<!-- review start -->
<div class="review ">
  <div class="wrapper">
    <h2>Cosa dicono gli altri?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="Software.Informer"></dt>
          <dd>
            <h2>Recensione del Media</h2>
            <p>IObit Software Updater è progettato per semplificare il lavoro di mantenere sempre aggiornati i programmi installati sul tuo PC. Esso può cercare e installare automaticamente le versioni nuove, anche senza l'input degli utenti. Inoltre, può aiutare a scaricare e installare i programmi popolari per vari scopi.</p>
            <cite>softpedia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nicolae Mocioc"></dt>
          <dd>
            <h2>Recensioni degli Utenti</h2>
            <p>Ho installato IObit Uninstaller dal mio amico, e sono molto soddisfato della velocità di download e la semplicità che incontra i bisogni di un principiante per mantenere il suo computer personale. Grazie per questo! Pagherò la versione PRO e vorrei donare un pò per aiutarvi a continuare il vostro lavoro! Grazie mille!</p>
            <cite>Nicolae Mocioc</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Joshua Irving"></dt>
          <dd>
            <h2>Recensioni degli Utenti</h2>
            <p>Mi piace la funzionlità di aggiornamento automatico che è veloce ed efficiente, IObit software updater crea anche un punto di ripristino prima dell’installazione in caso che qualcosa non va corretamente. Mi piace anche che il software scarica e installa l’aggiornamento direttamente dai siti approriati piuttosto che mi manda ad ogni sito individuale. Penso che sia uno dei migliori idea di IObit! </p>
            <cite>Joshua Irving</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nico Bremmer"></dt>
          <dd>
            <h2>Recensioni degli Utenti</h2>
            <p>È un ottimo software per aggiornare i programmi. È facile da usare. Questo software è molto chiaro, funziona in modo fluido e veloce. Anche il design è bello e moderno. È bello che tutti i programmi vecchi che vuoi aggiornare sono passati all’ultima versione. È anche bello che questo software ti offre i suggerimenti dei programmi nuovi e essenziali per il tuo PC. </p>
            <cite>Nico Bremmer</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <div class="service clearfix">
      <dl>
        <dt>Affidato dei media </dt>
        <dd><img src="<?php echo getStaticUrl('images/medias.png')?>" alt=""/></dd>
      </dl>
      <dl class="right">
        <dt>Pagamento supportato </dt>
        <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
      </dl>
    </div>
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>
        Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit.  Tutti i diritti riservati</p>
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      IObit Software Update PRO
    </div>
    <div class="number">
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
      </div>
      <p><span class="viewNum"><?php echo $viewNum;?></span> visitori, <strong class="buyNum">86</strong> posti restani</p>
    </div>
    <p class="price">
      <!-- price -->
      <span><strong>€<b>12</b>.99</strong> <del>€99.93</del></span>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=it-isu23pcsdpf1299&ref=it_isu23pcsdpf1299<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_isu"
         onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase1905-it');">
        ATTIVA ORA
      </a>
    </p>
  </div>
</div>
<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>