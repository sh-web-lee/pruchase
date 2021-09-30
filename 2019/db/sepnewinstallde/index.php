<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(154,196);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dedbnew_p' . $date;
  $c_name_t='dedbnew_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['to'])?'':('-').$_GET['to'];
$refStr.=empty($_GET['flag'])?'':('-flag'.$_GET['flag']);
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>55€ Rabatt auf Driver Booster PRO für neue Benutzer - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>55€ Rabatt Sonderangebot für Neukunden</h1>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- box -->
      <img class="box" src="<?php echo $pResUrl;?>images/banner-db.png" alt="Driver Booster PRO">

      <!-- coupon -->
      <div class="coupon">
        <!-- numbox -->
        <div class="numbox">
          Nur
          <div class="giftNum clearfix">
            <div class="nwrap"><div class="numlist"><strong>0</strong></div></div>
            <div class="nwrap"><div class="numlist"><strong>2</strong></div></div>
            <div class="nwrap last"><div class="numlist"><strong>5</strong></div></div>
          </div>
          Gutscheine übrig
        </div>
        <p>Ihre erste Bestellung</p>
      </div>

      <!-- message -->
      <div class="message">
        <!-- list -->
        <table>
          <tr>
            <td>Driver Booster PRO</td>
            <td>82,99€</td>
          </tr>
          <tr>
            <td><span class="grey">1 Jahresabo für 3 PCs</span></td>
            <td></td>
          </tr>
          <tr class="last">
            <td>Gutschein für Neukunden</td>
            <td><span class="red"> -55€</span></td>
          </tr>
        </table>
        <img class="line" src="<?php echo $pResUrl;?>images/line.png" alt="">
        <!-- price -->
        <p class="price"><strong>27</strong>,99€</p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-db83pc2799&ref=de_db83pc2799newinstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_db"
           onclick="ga( 'send', 'event', 'dbbuy', 'buy', 'dbpurchase-newinstall-de')">
          Jetzt aktivieren
        </a>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature">
  <!-- title -->
  <h2>Driver Booster PRO bietet <b>mehr </b> Vorteile</h2>
  <!-- top -->
  <div class="feature-panel wrapper">
    <h3><span>Automatische Aktualisierung</span></h3>
    <div class="feature-db">
      <!-- 01 -->
      <dl class="one clearfix">
        <dt>
          <span class="line"></span>
          <span class="point"></span>
        </dt>
        <dd>
          <h4>Automatischer <b>Scan</b></h4>
          <p>
            Erkennt automatisch mehr als <b>4.500.000</b> seltene, <br>
            fehlerhafte und veraltete Treiber  <br>
            und Spielkomponenten wie geplant
          </p>
          <hr>
          <em>
            * Nur mehr als <b>3.500.000</b> veraltete Treiber <br>
            können mit der Free-Version erkannt werden
          </em>
        </dd>
      </dl>
      <!-- 02 -->
      <dl class="two clearfix">
        <dt>
          <span class="line"></span>
          <span class="point"></span>
        </dt>
        <dd>
          <h4>Automatischer <b>Download</b></h4>
          <p>
            <b>Lädt Treiber </b> beim Systemleerlauf schnell und  <br>
            automatisch herunter.
          </p>
          <hr>
          <em>
            * <b>Nicht verfügbar</b> für die Free-Version
          </em>
        </dd>
      </dl>
      <!-- 03 -->
      <dl class="three clearfix">
        <dt>
          <span class="line"></span>
          <span class="point"></span>
        </dt>
        <dd>
          <h4>Automatische  <b>Installation</b></h4>
          <p>
            <b>Installiert </b> Treiber automatisch beim <br>
            Systemleerlauf und sichert vorherige  <br>
            Treiber vor der Installation.
          </p>
          <hr>
          <em>
            * <b>Nicht verfügbar</b> für die Free-Version
          </em>
        </dd>
      </dl>
      <!-- 04 -->
      <dl class="four clearfix">
        <dt>
          <span class="line"></span>
          <span class="point"></span>
        </dt>
        <dd>
          <h4><b>Update</b> <span>abgeschlossen</span></h4>
          <p>Genießen Sie eine reibungslose und stabile PC- <br>und Spieleleistung </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- bottom -->
  <div class="feature-panel">
    <h3><span>Umfassende Behebung von Hardwareproblemen</span></h3>
    <div class="feature-chart">
      <div class="wrapper">
        <!-- chart -->
        <span class="chart"></span>
        <!-- icons -->
        <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        <!-- 01 -->
        <dl class="one clearfix">
          <dt>
            <span class="line"></span>
            <span class="point"></span>
          </dt>
          <dd>
            <p>Behebt „Kein Ton“</p>
          </dd>
        </dl>
        <!-- 02 -->
        <dl class="two clearfix">
          <dt>
            <span class="line"></span>
            <span class="point"></span>
          </dt>
          <dd>
            <p>Behebt Netzwerkausfall </p>
          </dd>
        </dl>
        <!-- 03 -->
        <dl class="three clearfix">
          <dt>
            <span class="line"></span>
            <span class="point"></span>
          </dt>
          <dd>
            <p> Behebt Gerätefehler mit 1 Klick</p>
            <em>* Nicht verfügbar mit der Free-Version</em>
          </dd>
        </dl>
        <h5>Hardware funktioniert  <br> reibungslos mit Ihrem Windows-System</h5>
      </div>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <div class="content">
      <dl class="active">
        <dt>
          <h3>Media Review</h3></dt>
        <dd>
          IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. Driver Booster PRO bietet mehrere Funktionenen und Lizenz-Schlüssel zu einem guten Preis sowie eine anpassbare Benutzeroberfläche, die beim Anzeigen spezifischer Hardware-Informationen gut macht. Seine Wettbewerber wie Ashampoo Driver Updater und SlimWare Utilities DriverUpdate bieten überzeugende Funktionen an, aber IObit Driver Booster PRO tut krass besser.“
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>Media Review</h3></dt>
        <dd>
          Damit es keine unschönen Überraschungen gibt, legt der "IObit Driver Booster Pro" zuvor einen Wiederherstellungspunkt an. Hat bei einer Treiber-Installation einmal etwas nicht geklappt, erlaubt die neue "Roll Back"-Funktion die einfache Rückkehr zu einer älteren Treiber-Version. Neben schnelleren Downloadleitungen bietet der Hersteller eine breitere Hardware-Unterstützung und eine Backup-Funktion bei der erweiterten Pro-Version der Software an.
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
           Auf die heutige Zeit bezogen, ist es sehr schwierig, immer mit den Treibern auf dem neuesten Stand zu sein. Da ich mit meinem PC viel experementiere und immer wieder was neues ausprobiere, bin ich eben auf den Driver Booster gekommen, weil Ihr immer fast genau, aktuell seid. Ich bin ein Hobby Mensch  in Sachen PC`s und freu mich immer über neue Errungenschaften. Macht weiter so und wir werden im Geschäft bleiben.
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          Was für eine Überraschung, den neuen Driver Booster von IObit zu erhalten. Sobald die Installation fertig ist, startet sein Update sofort. Nachdem das Upgrade abgeschlossen war, sah es so aus, als ob mein PC komplett überarbeitet worden wäre. Wirklich super!
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
           Driver Booster ist wirklich der beste Treiber-Updater auf dem Markt. Es ist benutzerfreundlich, hat eine einfache und gute Oberfläche und erledigt seine Aufgabe besser als jede andere Anwendung, die ich verwendet habe. Dieses Programm ist 5 Sterne wert. Sehr empfehlenswert.
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>User Review</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd>
          Es hat geholfen, Probleme mit der Langsamkeit meines Laptops zu lösen, ohne ihn zum Absturz zu bringen. Manchmal, wenn ich versuchte, meine Treiber zu aktualisieren, stürzte der Computer ab und ich musste meinen Computer formatieren, um die Funktionen wiederherzustellen, und jetzt ist solche Situation mit DB nicht mehr möglich. Es ist einfach zu bedienen als das beste Tool auf dem Markt bis jetzt!
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="active">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine">
        </div>
        <p>PC Magazine</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/chip.png" alt="Chip.de"></div>
        <p>Chip.de</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/peter-bomers.png" alt="Peter Bomers"></div>
        <p>Peter Bomers</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/harold-barr.png" alt="Harold Barr"></div>
        <p>Harold Barr</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/hishaam-salasa.png" alt="Hishaam Salasa">
        </div>
        <p>Hishaam Salasa</p>
      </li>
      <li>
        <div class="pic">
          <img src="<?php echo $pResUrl; ?>images/carlos-alexandre.png" alt="Carlos Alexandre Veríssimo">
        </div>
        <p>Carlos Alexandre Veríssimo</p>
      </li>
    </ul>
  </div>
</div>
<!-- end review -->

<!-- awards -->
<div class="awards wrapper">
  <h2>Medien-Auszeichnungen</h2>
  <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
</div>
<!-- end awards -->

<!-- bottom -->
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
        <dd>
          *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
        </dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- end bottom -->

<!-- float -->
<div class="float">
  <div class="wrapper clearfix">
    <!-- box -->
    <img class="box" src="<?php echo $pResUrl;?>images/float-db.png" alt="Driver Booster PRO">
    <!-- numbox -->
    <div class="numbox">
      Nur
      <div class="giftNum clearfix">
        <div class="nwrap"><div class="numlist"><strong>0</strong></div></div>
        <div class="nwrap"><div class="numlist"><strong>2</strong></div></div>
        <div class="nwrap last"><div class="numlist"><strong>5</strong></div></div>
      </div>
      Gutscheine für Neukunden übrig
    </div>
    <!-- price -->
    <p class="price"><strong>27</strong>,99€ <del>82,99€</del></p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=de-db83pc2799&ref=de_db83pc2799newinstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_db"
       onclick="ga( 'send', 'event', 'dbbuy', 'buy', 'dbpurchase-newinstall-de')">
      Jetzt aktivieren
    </a>
  </div>
</div>
<!-- end float -->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>