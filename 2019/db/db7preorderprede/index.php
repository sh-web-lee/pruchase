<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dedbexp_p' . $date;
  $c_name_t='dedbexp_t' . $date;
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

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

function paramDeal($num){
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$paramData=json_decode(base64_decode($_GET['udata']));

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if($_GET['to']=='db6preicon') {
  if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
  }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Kaufen Sie Driver Booster 7 PRO für 0€</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <p class="name">Driver Booster 7 PRO</p>
    <h1>DER VORVERKAUF BEGINNT</h1>
    <div class="offer clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
      </div>
      <div class="right fl">
        <h2>Täglich stehen <big>1.000</big> Stück zur Verfügung</h2>
        <div class="numbox">
          <h3>
            Nur
            <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
            Stück übrig
          </h3>
          <p><span class="buyNum"><?php echo $viewNum; ?></span> Benutzer sind gerade auf dieser Seite</p>
        </div>
        <ul class="price clearfix">
          <li class="first"><strong>0<small>€</small></strong></li>
          <li class="last">
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-db7preorder&ref=de_db7preorderpre<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderpre-de');">
              Jetzt vorbestellen
            </a>
          </li>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- function-wrap start -->
<div class="function-wrap">
  <div class="wrapper">
    <h2 class="why">
      Warum auf <br> Driver Booster 7 PRO upgraden? <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
    </h2>
    <div class="db-message">
      <h2>Behebt Probleme, die von Treibern verursacht wurden</h2>
      <div class="screenshot">
        <div class="maglist one">
          <h3> Probleme  mit Spielverzögerung <big>beheben  </big> </h3>
          <p>
            Aktualisiert Game Ready Treiber und empfiehlt geeignete Spielkomponenten, um langsames Laden des Spiels zu beschleunigen und schlechte Spieleleistung zu erhöhen.
          </p>
          <span class="tag">PRO kann mehr beheben</span>
        </div>
        <div class="maglist two">
          <h3> Systemabsturz  <big>beheben  </big></h3>
          <p>
            Scannt mehr als 3.500.000 Treiber und hält diese auf dem neuesten Stand, um Bluescreen-, Systemabsturz- und andere Systemprobleme zu beheben.
          </p>

          <span class="tag">Nur mit der PRO Version</span>
        </div>
        <div class="maglist three">
          <h3>Gerätefehler<big> beheben  </big></h3>
          <p>
            Erkennt und zu behebt mit 1 Klick Fehlercodes wie Fehler beim Laden des Treibers, Deaktivierung des Geräts, Geräteverbindungsprobleme usw..
          </p>
          <span class="tag last">Nur mit der PRO Version</span>
        </div>
      </div>
    </div>
    <div class="db-feature">
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
      <h2>Automatische und sichere Treiberaktualisierung</h2>
      <div class="featlist one">
        <div class="inner">
          <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
          <h3>SCANNEN</h3>
          <p>Überprüft den Status des Gerätetreibers automatisch auf Updates.</p>
          <p class="red"><span>Nur die Treiber, die die WHQL- und IObit-Regel bestanden haben</span></p>
        </div>
      </div>
      <div class="featlist two">
        <div class="inner">
          <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
          <h3>HERUNTERLADEN</h3>
          <p>Treiber werden beim Systemleerlauf automatisch heruntergeladen</p>
          <p class="red"><span>Sichere https-Verbindung</span></p>
        </div>
      </div>
      <div class="featlist three">
        <div class="inner">
          <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
          <h3>INSTALLIEREN</h3>
          <p>Treiber werden beim Systemleerlauf automatisch installiert.</p>
          <p class="red"><span>Sicherung früherer Treiber</span></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- function-wrap end -->

<!-- comparison start -->
<div class="comparison">
  <div class="wrapper">
    <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
    <h2>Mehr Vorteile von Driver Booster 7 PRO</h2>
    <table>
      <thead>
      <tr>
        <th class="text"></th>
        <th class="itema">
          <h3>Ihre aktuelle Edition</h3>
        </th>
        <th class="space"></th>
        <th class="itemb">
          <h3>Driver Booster 7 PRO</h3>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""> Treiberdatenbank</td>
        <td class="itema">2.500.000+</td>
        <td class="space"></td>
        <td class="itemb">3.500.000+</td>
      </tr>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""> Erhöht die Downloadgeschwindigkeit der Treiber </td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon03.png" alt=""> Scannt and updatet Treiber wie geplant </td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""> Sichert vorherige Treiber </td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""> Aktualisiert Spielkomponenten </td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""> Bevorzugtes Updaten mit Game Ready Treibern </td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""> Reduziert Hardwareprobleme </td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      </tbody>
      <tfoot>
      <tr>
        <th class="text"></th>
        <th class="itema"></th>
        <th class="space"></th>
        <th class="itemb"></th>
      </tr>
      </tfoot>
    </table>
    <h4>Für <strong><big>0</big>€</strong> upgraden, um alle PRO-Features zu aktivieren</h4>
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=de-db7preorder&ref=de_db7preorderpre<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderpre-de');">
      Jetzt vorbestellen
    </a>
  </div>
</div>
<!-- comparison end -->

<!-- review start -->
<div class="review wrapper">
  <h2>Was sagen andere?  </h2>
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
        <dd>
          <h2>Media Review</h2>
          <p>IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. Driver Booster PRO bietet mehrere Funktionenen und Lizenz-Schlüssel zu einem guten Preis sowie eine anpassbare Benutzeroberfläche, die beim Anzeigen spezifischer Hardware-Informationen gut macht. Seine Wettbewerber wie Ashampoo Driver Updater und SlimWare Utilities DriverUpdate bieten überzeugende Funktionen an, aber IObit Driver Booster PRO tut krass besser.“</p>
          <cite>PC Magazine</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/chip.png')?>" alt=""></dt>
        <dd>
          <h2>Media Review</h2>
          <p>Damit es keine unschönen Überraschungen gibt, legt der "IObit Driver Booster Pro" zuvor einen Wiederherstellungspunkt an. Hat bei einer Treiber-Installation einmal etwas nicht geklappt, erlaubt die neue "Roll Back"-Funktion die einfache Rückkehr zu einer älteren Treiber-Version. Neben schnelleren Downloadleitungen bietet der Hersteller eine breitere Hardware-Unterstützung und eine Backup-Funktion bei der erweiterten Pro-Version der Software an.</p>
          <cite>Chip.de</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/peter-bomers.png')?>" alt="Peter Bomers"></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            Auf die heutige Zeit bezogen, ist es sehr schwierig, immer mit den Treibern auf dem neuesten Stand zu sein. Da ich mit meinem PC viel experementiere und immer wieder was neues ausprobiere, bin ich eben auf den Driver Booster gekommen, weil Ihr immer fast genau, aktuell seid. Ich bin ein Hobby Mensch  in Sachen PC`s und freu mich immer über neue Errungenschaften. Macht weiter so und wir werden im Geschäft bleiben.
          </p>
          <cite>Peter Bomers</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            Was für eine Überraschung, den neuen Driver Booster von IObit zu erhalten. Sobald die Installation fertig ist, startet sein Update sofort. Nachdem das Upgrade abgeschlossen war, sah es so aus, als ob mein PC komplett überarbeitet worden wäre. Wirklich super!
          </p>
          <cite>Harold Barr</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            Driver Booster ist wirklich der beste Treiber-Updater auf dem Markt. Es ist benutzerfreundlich, hat eine einfache und gute Oberfläche und erledigt seine Aufgabe besser als jede andere Anwendung, die ich verwendet habe. Dieses Programm ist 5 Sterne wert. Sehr empfehlenswert.
          </p>
          <cite>Hishaam Salasa</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            Es hat geholfen, Probleme mit der Langsamkeit meines Laptops zu lösen, ohne ihn zum Absturz zu bringen. Manchmal, wenn ich versuchte, meine Treiber zu aktualisieren, stürzte der Computer ab und ich musste meinen Computer formatieren, um die Funktionen wiederherzustellen, und jetzt ist solche Situation mit DB7 nicht mehr möglich. Es ist einfach zu bedienen als das beste Tool auf dem Markt bis jetzt!
          </p>
          <cite>Carlos Alexandre Veríssimo</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Medien-Auszeichnungen</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>RISIKOFREI TESTEN – 60 Tage Geld zurück Garantie</h4>
          <p>
            Aktivieren Sie die PRO-Edition, werden alle Treiber-Probleme zu einem erschwinglichen Preis behoben!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Wir akzeptieren</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Hinweis:</dt>
        <dd>*. Nach Ablauf der 30-tägigen Testphase wird Ihr Kreditkarten- oder PayPal-Konto automatisch mit 26,99 € belastet. Der Rabatt i.H.v. 70% auf den ursprünglichen Preis von 89,99 € gilt nur für Vorbestellungen!</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Beeilung, nur
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        Stück verfügbar
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> Personen sind gerade auf dieser Seite</p>
    </div>
    <ul class="price fr">
      <li class="first"><strong>0<small>€</small></strong></li>
      <li class="last">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-db7preorder&ref=de_db7preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderrc-de');">
          Jetzt vorbestellen
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

<script>refStr='<?php echo $refStr;?>';</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>