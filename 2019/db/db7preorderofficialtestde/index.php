<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dedbpre_p' . $date;
  if ($_COOKIE[$c_name]===null) {
    $packsNum = 98;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      setcookie($c_name, 0, time() + 3600 * 24);
      $packsNum = 0;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit;
}

$viewNum = rand(99, 156);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}
include $pRootUrl . 'include/common.inc.php';

$refStr = empty($_GET['to']) ? '' : ('-' . $_GET['to']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Kaufen Sie Driver Booster 7 PRO für 0€</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Play:400,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('styles/style.css') ?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank"></a>
    <h1>WILLKOMMEN ZUM 0€ VORVERKAUF</h1>
    <h2>Nur 1.000 Vorbestellungen stehen täglich zur Verfügung!</h2>
    <div class="offer">
      <div class="left">
        <img src="<?php echo getStaticUrl('images/banner-offer-box.png') ?>" alt="Driver Booster PRO" />
      </div>
      <div class="right">
        <div class="title">
          <h3>Driver Booster 7 PRO </h3>
          <p>kostenlos vorbestellen</p>
        </div>
        <p class="number-public"><span class="buyNum"></span> verkauft, <b class="packsNum"></b> verfügbar!</p>
        <p class="price">Nur<strong>0€</strong></p>
        <a id="bannerBtn" class="btn"
           href="https://www.iobit.com/buy.php?product=de-db7preorder&ref=de_db7preordertestofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preordertestofficial-de')"
        >JETZT VORBESTELLEN</a>
        <p class="note">Nur einmal pro Jahr, nicht verpassen</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature" id="feature">
  <div class="wrapper">
    <h2>90% der Benutzer haben Driver Booster 7 PRO schon vorbestellt. Worauf warten Sie noch?</h2>
    <a id="goMore" href="javascript:" class="more">Mehr erfahren>></a>
    <h1>Features nur mit Driver Booster 7 PRO:</h1>
    <div class="feature-container">
      <div class="text text-0 line-0">
        <h3><b>Mehr als 3.500.000</b> Treiber</h3>
        <p>
          Erkennt & aktualisiert mit nur einem
          Klick mehr seltene, falsche, fehlende
          und veraltete PC-Treiber von Intel,
          Nvidia und AMD etc.
        </p>
      </div>
      <div class="text text-1 line-1">
        <h3><b>Schnelle</b> Treiberaktualisierung</h3>
        <p>
          Beschleunigt die Treiberaktualisierung
          dramatisch, um mehr Zeit zu sparen.
        </p>
      </div>
      <div class="text text-2 line-2">
        <h3><b>Automatisches</b> Treiber-Backup</h3>
        <p>
          Sichert die vorherigen Treiber, um ein
          sicheres Update zu gewährleisten und
          unerwartete Ereignisse zu vermeiden.
        </p>
      </div>
      <div class="text text-3 line-3">
        <h3><b>Game Ready Treiber</b></h3>
        <p>
          Aktualisiert Game Ready Treiber
          bevorzugt für eine flüssigere & bessere
          Spielperformance.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- function start-->
<div class="functions" id="moreFunction">
  <div class="wrapper">
    <h2>Mehr Vorteile von der PRO-Edition?</h2>
    <div class="content">
      <div class="left"></div>
      <div class="right">
        <div class="text">
          <h3>Geräteprobleme beheben <i>Nur in PRO</i></h3>
          <p>
            Probleme wie Tonstörung, Netzwerkausfall, schlechte
            Auflösung können einfach gelöst werden.
          </p>
        </div>
        <div class="text">
          <h3>Spielkomponenten bieten <i>Nur in PRO</i></h3>
          <p>
            Notwendige Spielkomponenten sind ebenfalls erhältlich,
            um zu helfen, dass Ihr Spiel flüssig läuft.
          </p>
        </div>
        <div class="text">
          <h3>Automatische Updates <i>Nur in PRO</i></h3>
          <p>
            Aktualisiert sich automatisch, sobald eine neue
            Version verfügbar ist.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="arrow"></div>
</div>
<!-- function end-->

<!-- awards and review start -->
<div class="awards-review">
  <div class="wrapper">
    <h2>Redaktions-Tipp</h2>
    <h3>Millionen von Nutzern weltweit haben ihre Erfahrungen geteilt</h3>
    <div class="content">
      <div class="left"></div>
      <div class="right">
        <div class="tabs" id="tabSwitch">
          <div class="avatar active">
            <img src="<?php echo getStaticUrl('images/review-avatar-0.png') ?>" alt="">
          </div>
          <div class="avatar">
            <img src="<?php echo getStaticUrl('images/review-avatar-1.png') ?>" alt="">
          </div>
          <div class="avatar">
            <img src="<?php echo getStaticUrl('images/review-avatar-2.png') ?>" alt="">
          </div>
          <div class="avatar">
            <img src="<?php echo getStaticUrl('images/review-avatar-3.png') ?>" alt="">
          </div>
        </div>
        <div class="line pos-0"></div>
        <div class="review-text">
          <p class="active">Damit es keine unschönen Überraschungen gibt, legt der "IObit Driver Booster Pro" zuvor einen Wiederherstellungspunkt an. Hat bei einer Treiber-Installation einmal etwas nicht geklappt, erlaubt die neue "Roll Back"-Funktion die einfache Rückkehr zu einer älteren Treiber-Version. Neben schnelleren Downloadleitungen bietet der Hersteller eine breitere Hardware-Unterstützung und eine Backup-Funktion bei der erweiterten Pro-Version der Software an.&emsp;&emsp;-- Chip.de</p>
          <p>Auf die heutige Zeit bezogen, ist es sehr schwierig, immer mit den Treibern auf dem neuesten Stand zu sein. Da ich mit meinem PC viel experementiere und immer wieder was neues ausprobiere, bin ich eben auf den Driver Booster gekommen, weil Ihr immer fast genau, aktuell seid. Ich bin ein Hobby Mensch  in Sachen PC`s und freu mich immer über neue Errungenschaften. Macht weiter so und wir werden im Geschäft bleiben.&emsp;&emsp;-- Peter Bomers</p>
          <p>Was für eine Überraschung, den neuen Driver Booster von IObit zu erhalten. Sobald die Installation fertig ist, startet sein Update sofort. Nachdem das Upgrade abgeschlossen war, sah es so aus, als ob mein PC komplett überarbeitet worden wäre. Wirklich super!&emsp;&emsp;-- Harold Barr</p>
          <p>Es hat geholfen, Probleme mit der Langsamkeit meines Laptops zu lösen, ohne ihn zum Absturz zu bringen. Manchmal, wenn ich versuchte, meine Treiber zu aktualisieren, stürzte der Computer ab und ich musste meinen Computer formatieren, um die Funktionen wiederherzustellen, und jetzt ist solche Situation mit DB7 nicht mehr möglich. Es ist einfach zu bedienen als das beste Tool auf dem Markt bis jetzt!&emsp;&emsp;-- Carlos Alexandre Veríssimo</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- awards and review end -->

<!-- badges start -->
<div class="badges">
  <div class="wrapper">
    <div class="unit">
      <h3>Wir akzeptieren</h3>
      <img src="<?php echo getStaticUrl('images/badges-payments.png') ?>" alt="">
    </div>
    <div class="unit">
      <h3>Wir garantieren</h3>
      <img src="<?php echo getStaticUrl('images/badges-money-back.png') ?>" alt="">
    </div>
    <div class="unit">
      <h3>Sicher zahlen</h3>
      <img src="<?php echo getStaticUrl('images/badges-verified.png') ?>" alt="">
    </div>
  </div>
</div>
<!-- badges end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <p class="note">
      Hinweis: <br>
      Nach der 30 tägigen kostenlosen Version wird ihre Kreditkarte oder ihr Paypal Konto automatisch iHv 26,99€ belastet. Der Rabatt von 70% auf den <br>
      Originalpreis 89,99€ gilt nur für Vorbestellungen!
    </p>
    <p class="copyright">Copyright  2005 - 2019 IObit. Alle Rechte vorbehalten</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="float" id="float">
  <div class="wrapper clearfix">
    <div class="unit left"></div>
    <div class="unit center">
      <p class="number-public"><span class="buyNum"></span> verkauft, <b class="packsNum"></b> verfügbar!</p>
      <p class="note">
        90% der Benutzer haben Driver Booster 7 PRO <br>
        schon vorbestellt.
      </p>
    </div>
    <div class="unit right">
      <a class="btn"
         href="https://www.iobit.com/buy.php?product=de-db7preorder&ref=de_db7preordertestofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preordertestofficial-de')"
      >Kostenlos vorbestellen</a>
    </div>
  </div>
</div>
<!-- float end -->

<!-- popup start -->
<div class="popup" id="popup">
  <div class="popup-container">
    <div class="popup-wrapper">
      <h2>Leider haben Sie unseren 0€ Vorverkauf verpasst!</h2>
      <h3>Ergreifen Sie die letzte Chance, <b>70%</b> auf Driver Booster PRO zu sparen.</h3>
      <div class="content">
        <div class="left"></div>
        <div class="right">
          <div class="discount">
            <div class="line"></div>
            <div class="unit u-0">
              <h4>Vorher</h4>
              <p>89,99€</p>
            </div>
            <div class="line"></div>
            <div class="unit u-1">
              <h4>Jetzt</h4>
              <p>26,99€</p>
            </div>
            <div class="line"></div>
            <div class="unit u-2">
              <h4>Rabatt</h4>
              <p>70% Rabatt</p>
            </div>
            <div class="line"></div>
          </div>
          <p class="price">26,99€</p>
          <a class="btn"
             href="https://www.iobit.com/buy.php?product=de-db7preorder2699&ref=de_db7preorder2699testofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'db7preordertestofficial-de')"
          >JETZT SPAREN</a>
          <p class="note">1 Jahr, 3 PCs</p>
        </div>
      </div>
    </div>
  </div>
  <div class="popup-mask"></div>
</div>
<!-- popup end -->

<script>refStr = '<?php echo $refStr;?>';</script>
<script src="<?php echo getStaticUrl('scripts/main.js') ?>"></script>
</body>
</html>