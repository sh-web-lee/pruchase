<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dedbofficial_p' . $date;
  $c_name_t='dedbofficial_t' . $date;
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
$refStr .= empty($_GET['ref']) ? '' : ('-'.$_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-'.$_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);

$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Holen Sie sich Dirver Booster 8 PRO für 0€</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Play:wght@700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header">
        <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png')?>"/> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right">
          <p>Vorverkauf ist da</p>
          <h2>Bester Driver-Updater weltweit</h2>
          <h4>PC und Spiele deutlich schneller machen</h4>
          <div class="price">
            <span>Vorverkauf <br> Preis:</span>
            <strong>0€ <sup>*</sup></strong>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=de-db8preorder&ref=de_db8preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-de');">
              Jetzt vorbestellen
           </a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              übrig
            </h3>
            <div class="bar">
               <div class="barbox"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="feature">
    <div class="message01 wrapper">
      <div class="title">
        <h2>Über 4.500.000 Treiber</h2>
        <h4>Die größte Datenbank von Driver Booster bisher</h4>
      </div>
      <div class="line"></div>
      <ul class="img-box">
        <li class="one active">
          <img src="<?php echo getStaticUrl('images/feature-01-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-01-02.png')?>" alt="" class="icon02">
        </li>
        <li class="two ">
          <img src="<?php echo getStaticUrl('images/feature-04-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-04-02.png')?>" alt="" class="icon02">
        </li>
        <li class="three ">
          <img src="<?php echo getStaticUrl('images/feature-03-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-03-02.png')?>" alt="" class="icon02">
        </li>
         <li class="four">
          <img src="<?php echo getStaticUrl('images/feature-02-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-02-02.png')?>" alt="" class="icon02">
        </li>
      </ul>
      <div class="message-box">
        <dl class="active">
          <dt><i></i>Automatische Treiberaktualisierung <span>WHQL</span></dt>
          <dd>
            Findet die am besten passenden Treiber, die <br>WHQL-zertifiziert sind, und aktualisiert diese Treiber automatisch.
          </dd>
        </dl>
        <dl class="two">
          <dt>
            <i></i>
            <h3>Stabile Treiber VS Aktuelle Treiber<br> <span class="market">einzigartig auf dem Markt</span></h3>
          </dt>
          <dd>
            Bietet stabile Treiber für die die Nutzer, die Stabilität des Geräts priorisieren oder aktuelle Treiber für die Nutzer, die die neueste Funktionen des Treibers priorisiert.
          </dd>
        </dl>
        <dl>
          <dt><i></i>Behebung von Hardwareproblemen</dt>
          <dd>
            Behebt Probleme (z.B. schlechte Grafik- oder Tonqualität, unterbrochene Internetverbindung und externe Geräte, die nicht funktionieren) mit nur einem Klick.
          </dd>
        </dl>
        <dl>
          <dt><i></i>Offline-Treiberaktualisierung</dt>
          <dd>
            Installieren Sie Netzwerktreiber ohne Internetverbindung. Laden Sie den richtigen Netzwerktreiber auf einen PC herunter und übertragen Sie ihn auf einen anderen PC.
          </dd>
        </dl>
      </div>
    </div>
    <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Game Ready Treiber & Komponenten</h2>
        <h4>Optimierung der 90% PC-Spiele</h4>
      </div>
      <div class="line"></div>
      <dl class="message-box">
        <dt class="one" data-name='default'>Reibungsloses Spiel</dt>
        <dd class="one" data-name='default'>
          Bietet die neuesten Game Ready-Treiber und Komponenten, um Computerverzögerungen oder Einzelbild-Zerreißen zu reduzieren und die neuen Spielfunktionen zu liefern.
        </dd>
        <dt class="two" data-name='default'>Spiel-Beschleunigung</dt>
        <dd class="two" data-name='default'>Stoppt unnötige Dienste, um die PC-Geschwindigkeit für ein besseres Spielerlebnis zu verbessern.</dd>
      </dl>
      <div class="img-box">
        <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" class="computer three" data-name='default'>
        <span class="light four" data-name='default'></span>
        <span class="smail-light"></span>
        <img src="<?php echo getStaticUrl('images/feature-icon.png')?>" alt="" class="icon five" data-name='default'>
      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Weitere Funktionen, die Sie haben können</h2>
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt="" ></dt>
          <dd>
            <h3>Sichere Aktualisierung</h3>
            <p>Sichert Treiber und erstellt einen Systemwiederherstellungspunkt automatisch.</p>
          </dd>
        </dl>
        <dl class="center two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt="" ></dt>
          <dd>
            <h3>Still-Modus</h3>
            <p>Keine Benachrichtigungen von Driver Booster während der Nutzung des Fullscreenmodus wie etwa beim Gaming.</p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt="" ></dt>
          <dd>
            <h3>Automatisches Löschen</h3>
            <p>Löscht das installierte Treiberpaket automatisch.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>Bester Treiber-Updater weltweit</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40M+ </strong>
          Downloads
        </li>
        <li class="center" data-name='default'>
          <strong>4.7+ </strong>
          Benutzerbewertung
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          positive Rezensionen
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Media Review</dt>
              <dd>
                „IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. Driver Booster PRO bietet mehrere Funktionenen und Lizenz-Schlüssel zu einem guten Preis sowie eine anpassbare Benutzeroberfläche, die beim Anzeigen spezifischer Hardware-Informationen gut macht. Seine Wettbewerber wie Ashampoo Driver Updater und SlimWare Utilities DriverUpdate bieten überzeugende Funktionen an, aber IObit Driver Booster PRO tut krass besser.“
              </dd>
            </dl>
            <dl>
              <dt>Kundenbewertung</dt>
              <dd>
                Auf die heutige Zeit bezogen, ist es sehr schwierig, immer mit den Treibern auf dem neuesten Stand zu sein. Da ich mit meinem PC viel experementiere und immer wieder was neues ausprobiere, bin ich eben auf den Driver Booster gekommen, weil Ihr immer fast genau, aktuell seid. Ich bin ein Hobby Mensch  in Sachen PC`s und freu mich immer über neue Errungenschaften. Macht weiter so und wir werden im Geschäft bleiben.  
              </dd>
            </dl>
            <dl>
              <dt>Kundenbewertung</dt>
              <dd>
                Es hat geholfen, Probleme mit der Langsamkeit meines Laptops zu lösen, ohne ihn zum Absturz zu bringen. Manchmal, wenn ich versuchte, meine Treiber zu aktualisieren, stürzte der Computer ab und ich musste meinen Computer formatieren, um die Funktionen wiederherzustellen, und jetzt ist solche Situation mit DB7 nicht mehr möglich. Es ist einfach zu bedienen als das beste Tool auf dem Markt bis jetzt!
              </dd>
            </dl>
            <dl>
              <dt>Kundenbewertung</dt>
              <dd>
                Driver Booster ist wirklich der beste Treiber-Updater auf dem Markt. Es ist benutzerfreundlich, hat eine einfache und gute Oberfläche und erledigt seine Aufgabe besser als jede andere Anwendung, die ich verwendet habe. Dieses Programm ist 5 Sterne wert. Sehr empfehlenswert. 
              </dd>
            </dl>
            <dl>
              <dt>Kundenbewertung</dt>
              <dd>
                Was für eine Überraschung, den neuen Driver Booster von IObit zu erhalten. Sobald die Installation fertig ist, startet sein Update sofort. Nachdem das Upgrade abgeschlossen war, sah es so aus, als ob mein PC komplett überarbeitet worden wäre. Wirklich super!
              </dd>
            </dl>
          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></div>
            <p>Harold Barr</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/peter-bomers.png')?>" alt="Peter Bomers"></div>
            <p>Peter Bomers</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Verissimo"></div>
            <p>Carlos Alexandre Verissimo</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Redaktions-Tipp</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
  </div>

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Hinweis</dt>
      <dd>
        *.Nach Ablauf der 30-tägigen Testphase wird Ihre Kreditkarten- oder PayPal-Konto automatisch mit 26,99€ belastet. Der Rabatt i.H.v. 70% auf den ursprünglichen Preis von 89,99 € gilt nur für Vorbestellungen!
      </dd>
      <dd>*.Wenn Sie mit unserem Produkt nicht zufrieden sind, können Sie die Bestellung innerhalb von 30 Tagen kostenfrei stornieren.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/fl-db-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        von 1000 Stück übrig
      </h3>
    </div>
    <div class="price fr">
      <strong>0€ <sup>*</sup></strong>
      <span></span>
      <a class="buybtn" 
          href="https://www.iobit.com/buy.php?product=de-db8preorder&ref=de_db8preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_db"
          onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-de');">
        Jetzt vorbestellen
      </a>
    </div>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>