<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'endbpre' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 63;
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
    }
  }
  setcookie($c_name, $packsNum, time() + 3600 * 24 *30);
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['to'])?'':('-'.$_GET['to']));
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title> 0€ zahlen, um Driver Booster 6 PRO vorzubestellen</title>
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:500,700' rel='stylesheet'>
    <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public'];?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <!-- head -->
    <h1 class="head">Bereit fur unseren globalen Vorverkauf?</h1>
    <!-- db-off -->
    <div class="db-off fr">
      <!-- only -->
      <h3 class="only">
      <strong> Für nur<span>0€  </span></strong>
        Driver Booster 6 PRO erwerben
      </h3>
      <!-- progressbar -->
      <div class="progressbar">
        <p class="viewNum">Beeilung! Nur noch <strong class="gift">53</strong> Deals übrig</p>
        <div class="bar">
          <span></span>
        </div>
      </div>
      <!-- price -->
      <p class="price"><strong>0€</strong> Originalpreis:<del>89,99€ <i></i></del></p>
      <!-- buybtn -->
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-db6preorder30d&ref=de_db6preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6preorder-de');">
        <span>Jetzt vorbestellen</span>
      </a>
      <!-- attention -->
      <p class="attention">1 Jahr, 3 PCs</p>
    </div>
    <div class="clear"></div>
    <!-- distance -->
    <ul class="distance">
      <li>Für 0€ erhalten Sie Driver Booster 6 PRO <br>(3 PCs, 30 Tage)</li>
      <li class="center">Nach 30 Tagen Sparen Sie 70% auf <br> Driver Booster 6 PRO (1 Jahr / 3 PCs)</li>
      <li>Sie können die Bestellung innerhalb von <br> 30 Tagen ohne Gebühren stornieren</li>
    </ul>
  </div>
</div>
<!-- banner end -->
<!-- feature-db start -->
<div class="feature-db">
  <div class="wrapper">
    <h2 class="head">Warum auf Driver Booster 6 PRO upgraden?</h2>
    <h3 class="subhead">Erhebliche Verbesserung der PC-Leistung</h3>
    <div class="container">
      <img class="db-box" src="<?php echo $pResUrl;?>images/db-box.png" alt="">
      <!-- update 3000000+ drivers -->
      <dl class="update clearfix">
        <dt class="fr">
          <img src="<?php echo $pResUrl;?>images/db-update-drivers.png" alt="">
        </dt>
        <dd class="fl">
          <h3>Über 3.000.000 Treiber updaten<br><span></span></h3>
          <p>
           Erkennt und aktualisiert sofort 3.000.000 <br> fehlerhafte, fehlende oder seltene Treiber <br> für alle Ihre Hardwaregeräte.
          </p>
        </dd>
      </dl>
      <!-- quickly fix device errors -->
      <dl class="quickly clearfix">
        <dt class="fl">
          <img src="<?php echo $pResUrl;?>images/db-quickly-device.png" alt="">
        </dt>
        <dd class="fr">
          <h3>Gerätefehler schnell beheben <span></span></h3>
          <p>
            Repariert Gerätefehler schnell mit nur 1 <br> Klick, um die PC-Leistung nicht zu <br> beeinträchtigen.
          </p>
        </dd>
      </dl>
      <!-- auto update -->
      <dl class="auto clearfix">
        <dt class="fl">
          <img src="<?php echo $pResUrl;?>images/db-auto-update.png" alt="">
        </dt>
        <dd class="fr">
          <h3>Automatisches Update <span></span></h3>
          <p>
           Ohne täglich den Treiberstatus zu überprüfen, können Sie die <br> PC-Treiber auf dem neuesten Stand halten und den PC <br> reibungslos laufen lassen.
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- feature-db end -->
<!-- feature-exp start -->
<div class="feature-sf">
  <div class="sf-box"></div>
  <div class="wrapper">
    <h3 class="subhead">Glattere und schnellere Spielerfahrung</h3>
    <dl class="details clearfix">
      <dt class="fl">
        <img src="<?php echo $pResUrl;?>images/major-game-components.png" alt="">
      </dt>
      <dd class="fr">
        <h3>Hauptspielkomponenten</h3>
        <p>
         Lädt schnell aktualisierte und geeignete Komponenten <br> herunter und installiert sie, so dass die Spiele auf Ihrem <br> PC reibungslos funktionieren.
        </p>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt class="fl">
        <img src="<?php echo $pResUrl;?>images/game-ready-drivers.png" alt="">
      </dt>
      <dd class="fr">
        <h3>Game Ready-Treiber <span></span></h3>
        <p>
          Game Ready-Treiber ist sofot verfügbar nach der <br> Veröffentlichung, um die Leistung zu erhöhen, Bugs zu <br> beheben und das Spielerlebnis zu verbessern.
        </p>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt class="fl">
        <img src="<?php echo $pResUrl;?>images/boots-game-performance.png" alt="">
      </dt>
      <dd class="fr">
        <h3>Spieleleistung verbessern <span></span></h3>
        <p>
          Beendet alle unnötigen Prozesse mit 1 Klick, um RAM <br> freizugeben und die Spieleleistung dramatisch zu verbessern.
        </p>
      </dd>
    </dl>
  </div>
</div>
<!-- feature-exp end -->
<div class="contrast">
  <h2>Das Wichtigste ist der einfache und handfreie Treiber-Update-Prozess</h2>
  <div class="wrapper"> 
    <table border="0" cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th class="itema"></th>
          <th class="itemb">Schritt 1</th>
          <th class="itemb">Schritt 2</th>
          <th class="itemc">Schritt 3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">Free-Version :</td>
          <td class="itemb">Treiberstatus überprüfen <span>2.000.000+ Treiber</span></td>
          <td class="itemb">Treiber manuell herunterladen <span>Keine Beschleunigung</span></td>
          <td class="itemc">Treiber manuell installieren <span>Backup unverfügbar</span></td>
        </tr>
        <tr>
          <td class="itema space"></td>
          <td class="itemb space"></td>
          <td class="itemb space"></td>
          <td class="itemc space"></td>
        </tr>
        <tr>
          <td class="itema">PRO-Version : </td>
          <td class="itemb pro">Treiberstatus <span class="size">automatisch</span> überprüfen <br> <span>3.000.000+ Treiber</span></td>
          <td class="itemb pro">Treiber <span class="size">automatisch</span> herunterladen <br> <span>200% schneller</span></td>
          <td class="itemc pro">Treiber <span class="size">automatisch</span> installieren <br> <span>Treiber sichern</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- between-buy start -->
<div class="between-buy">
  <div class="wrapper">
    <h3>
      Zahlen Sie <img src="<?php echo $pResUrl;?>images/money.png">
      für bessere PC- und Spieleleistung
    </h3>
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-db6preorder30d&ref=de_db6preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6preorder-de');">
      <span>Jetzt vorbestellen</span>
    </a>
    <p class="viewNum"> Nur <strong class="gift">56</strong> Deals übrig</p>
  </div>
</div>
<!-- between-buy end -->
<!-- comparision start -->
<div class="comparision">
  <div class="comparision-content">
    <div class="wrapper">
      <h3>Sie sollen wissen was passieren wird wenn es als die Free-Version bleibt:</h3>
      <table>
        <thead>
          <tr>
            <th class="itema">Driver Booster 6 Free</th>
            <th class="itemb"><img src="<?php echo $pResUrl;?>images/vs.png"></th>
            <th class="itemc">Driver Booster 6 PRO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="itema">2.000.000+</td>
            <td class="itemb">Treiberdatenbank</td>
            <td class="itemc">3,000,000+</td>
          </tr>
          <tr>
            <td class="itema">Keine Beschleunigung</td>
            <td class="itemb">Treiber Download-Geschwindigkeit</td>
            <td class="itemc">200% Schneller</td>
          </tr>
          <tr>
            <td class="itema">Keine Priorität </td>
            <td class="itemb">Game Ready-Treiber </td>
            <td class="itemc">Priorität verfügbar</td>
          </tr>
          <tr>
            <td class="itema"><i class="free"></i></td>
            <td class="itemb">Spielkomponenten</td>
            <td class="itemc"><i class="pro"></i></td>
          </tr>
          <tr>
            <td class="itema"><i class="free"></i></td>
            <td class="itemb">Automatische Treiber-Updates</td>
            <td class="itemc"><i class="pro"></i></td>
          </tr>
          <tr>
            <td class="itema"><i class="free"></i></td>
            <td class="itemb">Treiber-Sicherung </td>
            <td class="itemc"><i class="pro"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- comparision end -->
<!-- review start -->
<div class="review">
  <div class="wrapper">
    <div class="content">
      <dl class="active">
        <dt>
        <h3>Media Review</h3></dt>
        <dd>
          <h4>
            „Automatische Treiberdownloads gibt es nur in der kostenpflichtigen Pro-Version.“
          </h4>
        </dd>
        <dd>
          „Damit es keine unschönen Überraschungen gibt, legt der "IObit Driver Booster Pro" zuvor einen Wiederherstellungspunkt an.  Hat bei einer Treiber-Installation einmal etwas nicht geklappt, erlaubt die neue "Roll Back"-Funktion die einfache Rückkehr zu einer älteren Treiber-Version.  Neben schnelleren Downloadleitungen bietet der Hersteller eine breitere Hardware-Unterstützung und eine Backup-Funktion bei der erweiterten Pro-Version der Software an.“   
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>"Mein PC ist schneller, sicherer und fühlt sich neuer an als noch vor 8 Monaten."</h4>
        </dd>
        <dd>
          "Durch Driver Booster weiß ich mit Leichtigkeit, welche Gerätetreiber veraltet sind und kann diese einfach updaten. Nebenbei hilft es mir auch dabei, Soundfehler, Netzwerkfehler, Gerätefehler usw. zu beheben. Ich hatte es vor dem Gebrauch nicht geglaubt, aber nach wenigen Anwendungen, lernte ich es zu lieben. Mein PC ist schneller, sicherer und fühlt sich neuer an als noch vor 8 Monaten. Danke IObit."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>
            "Ich kann Driver Booster nur dringendst empfehlen, er wird euch dabei helfen, Updates und Treiber schnell und einfach zu updaten."
          </h4>
        </dd>
        <dd>
          „Driver Booster ist eine großartige Anwendung. Für jemanden, der viele Anwendungen und Treiber besitzt, aber nicht die Zeit dafür hat diese manuell zu aktualisieren, kann Driver Booster nur dringendst empfehlen, er wird Euch dabei helfen, Updates und Treiber schnell und einfach zu updaten.“
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>
            "Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"
          </h4>
        </dd>
        <dd>
          "Das ist eines der besten Programme, um Treiber zu aktualisieren. Microsoft hat mir sogar Updates vorgeschlagen, die nicht auf meinem System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche, und hat sie ohne Fehler installiert. Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="active">
        <div class="pic"><img src="<?php echo $pResUrl;?>images/chip-de.png" alt="Chip.de">
        </div>
        <p>Chip.de</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl;?>images/myo-thuya.png" alt="Myo Thuya"></div>
        <p>Myo Thuya</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl;?>images/adam-backlund.png" alt="Adam Backlund">
        </div>
        <p>Adam Backlund</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl;?>images/wayne-bowler.png" alt="Wayne Bowler">
        </div>
        <p>Wayne Bowler</p>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->
<!-- awards start -->
<div class="awards">
    <div class="wrapper">
      <h3>Medien-Auszeichnungen</h3>
      <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
    </div>
</div>
<!-- award end -->
<!-- footer start -->
<div class="footer">
    <div class="wrapper">
        <div class="footer-servizio clearfix">
            <dl class="money_back fl">
                <dd>
                    <img src="<?php echo $pResUrl; ?>images/money_back.png" alt="">
                </dd>
                <dt>
                    <h3>Zufriedenheitsgarantie</h3>
                    <p>60-Tage-Geld-zurück-Garantie</p>
                </dt>
            </dl>
            <dl class="veloce fl">
                <dd>
                    <img src="<?php echo $pResUrl; ?>images/veloce.png" alt="">
                </dd>
                <dt>
                    <h3>Zahlungssicherheit</h3>
                    <p>Ihre Zahlung ist 100% sicher</p>
                </dt>
            </dl>
            <dl class="verified fr">
                <dd>
                    <img src="<?php echo $pResUrl; ?>images/verified.png" alt="">
                </dd>
                <dt>
                    <h3>Schnelle Aktivierung</h3>
                    <p>Sie erhalten bald einen Aktivierungs- <br> code nach dem Kauf.</p>
                </dt>
            </dl>
        </div>
        <p class="note">
          note:<br>
          *Am Ende der kostenlosen 30-Tage-Testabo, wird Ihre Kreditkarte- oder Paypal-Konto automatisch 26,99€ berechnet. <br>
          *.Der 70% Rabatt auf Originalpreis von 89,99€ ist ein Bonus nur für die vorbestellenden Personen.
        </p>
        <p class="copyright">Copyright © 2005 - 2018 IObit. Alle Rechte vorbehalten</p>
    </div>
</div>
<!-- footer end -->
<!-- float start -->
<div class="floatlayer">
    <div class="wrapper clearfix">
      <!-- progressbar -->
      <div class="progressbar fl">
        <p class="viewNum">Beeilung! Nur noch <strong class="gift">53</strong> Deals übrig</p>
        <div class="bar">
          <span></span>
        </div>
      </div>
      <!-- buybtn -->
      <a class="buybtn fr" href="https://www.iobit.com/buy.php?product=de-db6preorder30d&ref=de_db6preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6preorder-de');">
        <span>Jetzt vorbestellen – 0€</span>
      </a>
    </div>
</div>
<!-- float end -->
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>