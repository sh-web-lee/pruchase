<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr = empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
$refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% di SCONTO su iFun Screen Recorder PRO</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Offerta esclusiva solo per i clienti IObit. Godi facilmente di un PC pulito, veloce e sicuro.">
<meta property="og:url" content="https://purchase.iobit.com/asc-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="70% di SCONTO su iFun Screen Recorder PRO">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://recorder.iobit.com/it/" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>iFun Screen Recorder PRO</h1>
        <p>Registra tutto sullo schermo senza filigrana o limitazioni</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot-asc.png')?>" alt="" />
        <div class="discount fl">
          <h2><b>70%</b> <span>SCONTO</span></h2>
          <p>Esclusivo per i clienti IObit</p>
        </div>
      </div>
      <div class="price">
        <p>Solo: <strong>14,99€ </strong><del>49,99€</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=it-isr11pc1499&ref=it_isr11pc1499-ac<?= $refStr; ?>&refs=it_purchase_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcac1499-it')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Acquista ora</span>
              </div>
        </a>
        <span>1 Anno / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <h2 class="feature-h2">Perché hai bisogno di iFun Screen Recorder PRO?</h2>
  <div class="feature wrapper">
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>REGISTRA QUALSIASI AREA DEL TUO SCHERMO</h3>
          <p>Seleziona qualsiasi finestra o area personalizzata sul tuo schermo e registrala esattamente come desideri.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>CATTURA LA TUA WEBCAM E MICROFONO</h3>
          <p>Registra contemporaneamente lo schermo, la webcam e il microfono per raccontare ciò che vedono i tuoi spettatori. Ideale per lezioni online, videoconferenze e gameplay.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>RIMUOVI LA FILIGRANA DI DEFAULT</h3>
          <p>Con iFun Screen Recorder PRO non hai nessuna filigrana obbligatoria sul tuo video. <strong style="color: #b80000; font-weight: 500;"> Ancora meglio, puoi aggiungere la tua filigrana personalizzata se lo desideri! </strong></p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>REGISTRA TUTTO IL TEMPO CHE VUOI</h3>
          <p>I registratori dello schermo gratuiti di solito registrano solo pochi minuti, ma con iFun Screen Recorder PRO registri tutto il tempo che vuoi. Registra interi film, lezioni e ore di gioco.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt=""></dt>
        <dd>
          <h3>CREA VIDEO DI ALTA QUALITÀ</h3>
          <p>La nostra accelerazione della GPU, ti garantisce massima qualità. Risoluzione fino a 4K e 60 FPS per video eccezionali senza lag.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt=""></dt>
        <dd>
          <h3>MODIFICA IL TUO VIDEO</h3>
          <p>Dopo la registrazione, modifica immediatamente il tuo video senza bisogno di altri software. Crea direttamente il tuo video perfetto!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Premi in tutto il mondo</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews active">
          <dt><h2><span>Ascoltiamo sempre i nostri utenti</span></h2></dt>
          <dd>
            <p>
              "Finora tutto fantastico. iFun Screen Recorder è davvero un programma facile da usare. Non sono un’esperta di computer, non sapevo come registrare lo schermo del mio Windows, ma con questo software ce l'ho fatta! Posso catturare lo schermo, aggiungere la mia filigrana personale, fare screenshot durante la registrazione e caricare facilmente i video su Instagram. Questo registratore dello schermo mi ha aiutato tantissimo ad avviare il mio business. Tra l'altro è 100% gratuito."
            </p>
           <cite>Elsie Weston</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Ascoltiamo sempre i nostri utenti</span></h2></dt>
          <dd> 
            <p>
              "Ho trovato questo registratore dello schermo gratuito per caso e mi sono innamorato delle sue semplici funzioni di editing. Mi piace registrare i processi operativi per aiutare le persone a risolvere i loro problemi con il computer e con questo software di registrazione dello schermo, posso catturare i video con audio e caricarli direttamente su YouTube dopo averli editati. iFun Screen Recorder supporta sia la registrazione dello schermo sia il video editing, il che è molto conveniente per gli youtubers come me che vogliono condividere i loro video tutorial."
            </p>
            <cite>Enrico Valencia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Ascoltiamo sempre i nostri utenti</span></h2></dt>
          <dd>
            <p>
              "In quanto segretaria, ho bisogno di usare molto spesso software per registrare lo schermo del PC. È stato difficile trovare un registratore dello schermo ideale per le mie esigenze, fortunatamente ho provato iFun Screen Recorder, uno strumento perfetto per registrare le videoconferenze, mi ha aiutato moltissimo! Con iFun Screen Recorder posso registrare lo schermo in HD e convertire i video in diversi formati. Raccomando vivamente questo software a tutti!"
            </p>
            <cite>Marielle Irvine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Ascoltiamo sempre i nostri utenti</span></h2></dt>
          <dd>
            <p>
              "Questo registratore dello schermo gratis è fantastico! Con iFun Screen Recorder posso registrare tutti i miei momenti preziosi, soprattutto le live streaming video. La qualità dei video che ho registrato con iFun Screen Recorder è ottima! Posso condividerli subito con i miei amici. Brava, IObit!"
            </p>
            <cite>Robbins Hilton</cite>
          </dd>
        </dl>
      </div>
      <ul class="switchHead">
		<li class="active" ><img src="<?php echo getStaticUrl('images/user1.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user2.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user3.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user4.png')?>"></li>
      </ul>
    </div>
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Crea video di alta qualità senza filigrana o limitazioni</h2>
      <div class="price">
        <p>Solo: <strong>14,99€ </strong><del>49,99€</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=it-isr11pc1499&ref=it_isr11pc1499-ac<?= $refStr; ?>&refs=it_purchase_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcac1499-it')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Acquista ora</span>
              </div>
        </a>
        <span>1 Anno / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  
  <!-- container end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- annotation start -->
      <!-- <p class="annotation" >*Opmerking:.Data kan variëren afhankelijk van verschillende computer systemen.</p> -->
      <!-- annotation end -->
      
      <!-- footer start -->
      <div class="footer" style="margin-top: 0;">©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>OFFERTA ESCLUSIVA</h2>
        <p><strong>70% di sconto</strong> per registrare schermo PC senza limitazioni</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt>Solo: <strong>14,99€ </strong><del>49,99€</del></dt>
          <dd>
            <a class="buybtn smallbtn"
               href="https://www.iobit.com/buy.php?product=it-isr11pc1499&ref=it_isr11pc1499-ac<?= $refStr; ?>&refs=it_purchase_isr"
               onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcac1499-it')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Acquista ora</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>