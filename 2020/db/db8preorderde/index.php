<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dedb8preorderde_p' . $date;
  $c_name_t = 'dedb8preorderde_t' . $date;
  if ($_COOKIE[$c_name] === null) {
    $totalNum = $packsNum = rand(64, 98);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t, $totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum' => $packsNum));
  exit();
}

$viewNum = rand(99, 156);
if ($_GET['action'] == 'getViewNum') {
  echo $viewNum;
  exit();
}
include $pRootUrl . 'include/common.inc.php';

function paramDeal($num)
{
  return (intval($num) > 0) ? ('<span class="dataNum">' . number_format(intval($num)) . '</span>') : '';
}

$paramData = json_decode(base64_decode($_GET['udata']));

$refStr = empty($_GET['to']) ? '' : ('-' . $_GET['to']);
if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
}
$refStr .= empty($_GET['instd']) ? '' : ('-' . $_GET['instd']);
$refStr .= empty($_GET['finstd']) ? '' : ('-' . $_GET['finstd']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-' . $_GET['st']);
?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <title>Bezahlen Sie 0€ um Driver Booster 8 PRO zu erhalten - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
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
        <p><img src="<?php echo getStaticUrl('images/db-icon.png') ?>" /> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="Driver Booster PRO" />
        </div>
        <div class="right">
          <p>Vorverkauf ist da</p>
          <h2>Upgrade auf die neueste PRO-Edition</h2>
          <h4>für maximale PC- und Spieleleistung</h4>
          <div class="price">
            <!-- <span>Presale <br> Price:</span> -->
            <span>Vorverkaufspreis:</span>
            <strong>0€ <sup>*</sup></strong>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-db8preorder&ref=de_db8preorder<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorder-de');">Jetzt upgraden</a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              58 Stück übrig
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
        <h4>Driver Booster 8 PRO ist</h4>
        <h2>neuer und besser</h2>
      </div>
      <div class="line"></div>
      <div class="message-box">
        <ul class="img-box">
          <li class="icon01">
            <img src="<?php echo getStaticUrl('images/feature-04-01.png') ?>" alt="" >
          </li>
          <li class="icon02">
            <img src="<?php echo getStaticUrl('images/feature-03-01.png') ?>" alt="">
          </li>
        </ul>
        <dl class='one'>
          <dt><i></i>
            <em>
            Erweitere
            </em>
            Treiberdatenbank
            <span class='soportes red_soportes'>50% <img src="<?php echo getStaticUrl('images/subir.png') ?>" alt=""></span></dt>
          <dd>Unterstützt mehr als 4.500.000 Treiber und bietet richtige Updates für alle veralteten, fehlerhaften oder fehlenden Treiber.</dd>
        </dl>
        <dl class='two'>
          <dt><i></i>
            <em>
            Intelligenterer
            </em>
            Aktualisierungsmodus 
            <span class='soportes green_soportes'>Neu </span></dt>
          <dd>Bietet stabile Treiber für die Nutzer, die die Stabilität des Geräts priorisieren oder aktuelle Treiber für die Nutzer, die die neueste Funktionen des Treibers priorisieren.
            <br/>
            <div class='market'>Einzigartig auf dem Markt</div>
          </dd>
        </dl>
        <dl class='three'>
          <dt><i></i>
            <em>
            Einfacheres
            </em>
            Offline-Update
            <span class='soportes green_soportes'>Neu </span></dt>
          <dd>Aktualisiert und installiert Netzwerktreiber ohne Internetverbindung, insbesondere für das neu installierte oder aktualisierte System.</dd>
        </dl>
        <dl class='four'>
          <dt><i></i>
            <em>
            Sicherere
            </em>
            Treibersicherung 
            <span class='soportes red_soportes'>Verbessert</span></dt>
          <dd>Die vollständig optimierte Treibersicherung garantiert eine höhere Erfolgsrate bei der Treibersicherung und -wiederherstellung in Windows 10.</dd>
        </dl>

      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Nutzen Sie alle PRO-Funktionen</h2>
        <div class='current_Version'>
        Ihre aktuelle Version
        </div>
        <div class='driver_Booster'>
          <p>
            Driver Booster 8<br /> PRO<br />
            <span class='soportes green_soportes'>Neu </span>
          </p>
        </div>
        <ul class='benefits-ul'>
          <li>
            <i class='_icon'></i>
            <span>Automatische Suche nach veralteten und fehlenden Treiber</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Aktualisierung veralteter Treiber mit nur einem Klick</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Erweiterte Datenbank mit mehr als 4.500.000 Treibern</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Offline-Update und -installation der Netzwerktreiber</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Automatische Treiberaktualisierung während dem Systemleerlauf</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Volle Download- und Update-Geschwindigkeit ohne Limit</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Automatische Treibersicherung und Wiederherstellungspunkt erstellen</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Einfache Behebung der Gerätefehler für eine bessere Leistung</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Priorität zum Aktualisieren der Stabilitätstreiber</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Notwendige Komponenten für ein flüssigeres Spiel</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Priorität zum Aktualisieren der neuesten Game Ready-Treiber</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
        </ul>

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
          positive <br/>Rezensionen 
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
              <dd>„IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. Driver Booster PRO bietet mehrere Funktionenen und Lizenz-Schlüssel zu einem guten Preis sowie eine anpassbare Benutzeroberfläche, die beim Anzeigen spezifischer Hardware-Informationen gut macht. Seine Wettbewerber wie Ashampoo Driver Updater und SlimWare Utilities DriverUpdate bieten überzeugende Funktionen an, aber IObit Driver Booster PRO tut krass besser.“</dd>
            </dl>
            <dl>
              <dt>User Reivew</dt>
              <dd>Auf die heutige Zeit bezogen, ist es sehr schwierig, immer mit den Treibern auf dem neuesten Stand zu sein. Da ich mit meinem PC viel experementiere und immer wieder was neues ausprobiere, bin ich eben auf den Driver Booster gekommen, weil Ihr immer fast genau, aktuell seid. Ich bin ein Hobby Mensch  in Sachen PC`s und freu mich immer über neue Errungenschaften. Macht weiter so und wir werden im Geschäft bleiben.  </dd>
            </dl>
            <dl>
              <dt>User Reivew</dt>
              <dd>Es hat geholfen, Probleme mit der Langsamkeit meines Laptops zu lösen, ohne ihn zum Absturz zu bringen. Manchmal, wenn ich versuchte, meine Treiber zu aktualisieren, stürzte der Computer ab und ich musste meinen Computer formatieren, um die Funktionen wiederherzustellen, und jetzt ist solche Situation mit DB7 nicht mehr möglich. Es ist einfach zu bedienen als das beste Tool auf dem Markt bis jetzt!</dd>
            </dl>
            <dl>
              <dt>User Reivew</dt>
              <dd>Driver Booster ist wirklich der beste Treiber-Updater auf dem Markt. Es ist benutzerfreundlich, hat eine einfache und gute Oberfläche und erledigt seine Aufgabe besser als jede andere Anwendung, die ich verwendet habe. Dieses Programm ist 5 Sterne wert. Sehr empfehlenswert. </dd>
            </dl>
            <dl>
              <dt>User Reivew</dt>
              <dd>Was für eine Überraschung, den neuen Driver Booster von IObit zu erhalten. Sobald die Installation fertig ist, startet sein Update sofort. Nachdem das Upgrade abgeschlossen war, sah es so aus, als ob mein PC komplett überarbeitet worden wäre. Wirklich super!</dd>
            </dl>


          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png') ?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/harold-barr.png') ?>" alt="Harold Barr"></div>
            <p>Harold Barr</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png') ?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/customer_de_88.png') ?>" alt="Peter Bomers"></div>
            <p>Peter Bomers</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png') ?>" alt="Carlos Alexandre Verissimo"></div>
            <p>Carlos Alexandre Verissimo</p>
          </li>

        </ul>

      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Redaktions-Tipp</h2>
      <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
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
        <img src="<?php echo getStaticUrl('images/fl-db-box.png') ?>" alt="Driver Booster PRO" />
      </div>
      <div class="numbox fl">
        <h3>
          <span id="botNum" class="giftNum">
            <b class="nwrap"><b class="numlist"></b></b>
            <b class="nwrap"><b class="numlist"></b></b>
          </span>
          von 1000 Stück 
        </h3>
      </div>
      <div class="price fr">
        <strong>0€ <sup>*</sup></strong>
        <span></span>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-db8preorder&ref=de_db8preorder<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorder-de');">
          Jetzt upgraden
        </a>
      </div>
    </div>
  </div>
  <!-- float end -->

  <script>
    refStr = '<?php echo $refStr; ?>';
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>