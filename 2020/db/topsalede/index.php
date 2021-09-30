<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
//$time = time();
//if(isset($_COOKIE['toreturn'])&&$time-$_COOKIE['toreturn']>86400){
//  $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
//  header("Location:return.php".$param);
//    exit;
//}else{
//  if(!isset($_COOKIE['toreturn'])) setcookie('toreturn',$time,$time+2592000);
//}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_db','xi_db','xb_db'))){
  $refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
$refStr.=empty($_GET['flag'])?'':('-flag'.$_GET['flag']);

?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Sparen Sie heute bis zu 77% auf Driver Booster PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <h1>Treiber und Spielkomponenten immer aktuell</h1>
    <div class="panel clearfix">
      <ul>
        <li class="box">
          <img src="<?php echo getStaticUrl('images/db-1pc.png')?>" alt="Driver Booster PRO"/>
          <p>1 PC, 1 Jahr</p>
        </li>
        <li class="off">
          <h2>64% Rabatt</h2>
          <p>(Vorher:<del>69,99€</del> Jetzt:<span>24</span>,99€)</p>
        </li>
        <li class="price">
          <p>Nur <strong>2€</strong> 1 Monat/1 PC</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=de-db81pc2499&ref=de_db81pcsale2004<?php echo $refStr;?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc2004-de');">
            JETZT KAUFEN
          </a>
        </li>
      </ul>
      <ul class="asc3pcs">
        <li class="box">
          <img src="<?php echo getStaticUrl('images/db-3pc.png')?>" alt="Driver Booster PRO"/>
          <p>3 PCs, 1 Jahr + Gratis</p>
        </li>
        <li class="off">
          <h2>77% Rabatt</h2>
          <p>(Vorher:<del>119,99€</del> Jetzt:<span>26</span>,99€)</p>
        </li>
        <li class="price">
          <p>Nur <strong>0,75€</strong> 1 Monat/1 PC</p>
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=de-db83pcsd2699&ref=de_db83pcsdsale2004<?php echo $refStr;?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc2004-de');">
            JETZT KAUFEN
          </a>
        </li>
      </ul>
    </div>
    <p class="code">Der Lizenzcode ist auch für die nächste Version gültig</p>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature wrapper clearfix">
  <h2>
    <span>Die PRO-Version hält Ihre Treiber immer aktuell und macht Ihren PC effektiver Andernfalls erstatten wir Ihnen den Kaufpreis umgehend!</span>
    <em></em>
  </h2>
  <div class="machine">
    <img src="<?php echo getStaticUrl('images/feature-mac01.png')?>" alt=""/>
    <img src="<?php echo getStaticUrl('images/feature-mac02.png')?>" alt=""/>
  </div>
  <ul>
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""/></dt>
        <dd>
          <h3>Größere Datenbank</h3>
          <p>
            Erkennt fehlerhafte, fehlende Treiber und unterstützt mehr als<br> 4.500.000 Treiber, die von Microsoft zertifiziert sind.
          </p>
        </dd>
      </dl>
    </li>
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""/></dt>
        <dd>
          <h3>Bessere Spielleistung</h3>
          <p>
            Beendet unnötige Prozesse und bietet beliebte Spielkomponenten,<br> um ein besseres Spielerlebnis zu gewährleisten.
          </p>
        </dd>
      </dl>
    </li>
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""/></dt>
        <dd>
          <h3>Weniger Geräteprobleme</h3>
          <p>
            Behebt häufig auftretende Windows-Probleme, z.B. kein Sound,<br> keine Netzwerkverbindung oder schlechte Bildauflösung.
          </p>
        </dd>
      </dl>
    </li>
  </ul>
</div>
<!-- end feature -->

<!-- gift -->
<div class="gift">
  <div class="wrapper">
    <h2>Die Vollversion von Smart Defrag bekommen Sie heute geschenkt.</h2>
    <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
    <dl>
      <dd>Defragmentiert Ihren PC automatisch und beschleunigt den Zugriff auf Dateien.</dd>
      <dd>Verdicht die Dateien auf der HDD beim Systemstart für einen schnellen PC-Start.</dd>
    </dl>
  </div>
</div>
<!-- end gift -->

<!-- review -->
<div class="review wrapper clearfix">
  <h2>Driver Booster PRO hat 489766050 Treiber aktualisert</h2>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"/></dt>
    <dd>
      <h4>Harold Barr</h4>
      <p>
        Was für eine Überraschung, den neuen Driver Booster von IObit zu erhalten. Sobald die Installation fertig ist, startet sein Update sofort. Nachdem das Upgrade abgeschlossen war, sah es so aus, als ob mein PC komplett überarbeitet worden wäre. Wirklich super!
      </p>
      <hr>
    </dd>
  </dl>
  <dl class="right">
    <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"/></dt>
    <dd>
      <h4>Hishaam Salasa</h4>
      <p>
        Driver Booster ist wirklich der beste Treiber-Updater auf dem Markt. Es ist benutzerfreundlich, hat eine einfache und gute Oberfläche und erledigt seine Aufgabe besser als jede andere Anwendung, die ich verwendet habe. Dieses Programm ist 5 Sterne wert. Sehr empfehlenswert.
      </p>
      <hr>
    </dd>
  </dl>
  <div class="media clearfix">
    <h2>Medienbewertung</h2>
    <img src="<?php echo getStaticUrl('images/baixaki.png')?>" alt=""/>
    <P>
      Die Gratis-Version „Driver Booster Free“ bietet bereits eine Menge Features. Einziger Wermutstropfen ist das Fehlen einer 1-Klick-Automatik für Treiberdownloads, die etwa im Hintergrund vollautomatisch alte Treiber erkennt, neue downloadet und anschließend installiert. Diese Funktion bleibt der Pro-Version vorbehalten. Hier können Sie außerdem Treiberbackups anlegen und so notfalls ein Rollback durchführen. 
    </P>
  </div>
  <!-- award -->
  <div class="award">
    <h2>Redaktions-Tipp</h2>
    <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
  </div>
</div>
<!-- end review -->

<!-- comparison -->
<div class="comparison wrapper">
  <table>
    <thead>
      <tr>
        <th colspan="2" class="text">Welche Vorteile bietet Ihnen die PRO Edition?</th>
        <th class="space"></th>
        <th class="itema">Driver Booster<br> PRO</th>
        <th class="space"></th>
        <th class="itemb">Driver Booster<br> FREE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon01.png')?>" alt=""/></td>
        <td class="text">Scannt veraltete, fehlende & fehlerhafte Treiber automatisch <sup>VERBESSERT</sup></td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="gray"></i></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""/></td>
        <td class="text">Aktualisieren Sie veraltete Treiber mit nur einem Klick</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="gray"></i></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""/></td>
        <td class="text">100% * Schnellere Downloadgeschwindigkeit <sup>VERBESSERT</sup></td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon04.png')?>" alt=""/></td>
        <td class="text">Größere DatenBank, um mehr veraltete & seltene Treiber zu updaten</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon05.png')?>" alt=""/></td>
        <td class="text">Reduziert Einfrieren & Abstürze des Systems für bessere Leistung</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon06.png')?>" alt=""/></td>
        <td class="text">Aktualisiert Treiber automatisch beim Systemleerlauf <sup>VERBESSERT</sup></td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon07.png')?>" alt=""/></td>
        <td class="text">Sichert Treiber automatisch vor Aktualisierungen </td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon08.png')?>" alt=""/></td>
        <td class="text">Bietet Spielkomponenten für ein besseres Spielerlebnis <sup>VERBESSERT</sup></td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon09.png')?>" alt=""/></td>
        <td class="text">Bietet die neuesten Game Ready Treiber früher <sup>VERBESSERT</sup></td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt=""/></td>
        <td class="text">Sicheres Updaten mit AUSSCHLIEßLICH zertifizierten WHQL Treibern</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon11.png')?>" alt=""/></td>
        <td class="text">Automatische Updates auf die neuste Version</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon12.png')?>" alt=""/></td>
        <td class="text">Kostenloser technischer Support 24/7</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <div class="box">
      <img src="<?php echo getStaticUrl('images/bottombuy-db.png')?>" alt="Driver Booster PRO"/>
    </div>
    <ul>
      <li class="active" data-num="1">Angebot für 3 PCs <strong>77% Rabatt</strong></li>
      <li data-num="0">Angebot für 1 PC <strong>64% Rabatt</strong></li>
    </ul>
    <dl>
      <dd>
        <p class="price"><strong><big>26</big>,99€</strong> <del>119,99€</del></p>
      </dd>
      <dd>
        <a class="buybtn red"
           href="https://www.iobit.com/buy.php?product=de-db83pcsd2699&ref=de_db83pcsdsale2004<?php echo $refStr;?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc2004-de');">
          JETZT KAUFEN
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    <dd><h3>Zufriedenheitsgarantie</h3></dd>
    <dd>60-Tage-Geld-zurück-Garantie</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/verified.png')?>" alt=""/></dt>
    <dd><h3>Zahlungssicherheit</h3></dd>
    <dd>Ihre Zahlung ist 100% sicher</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""/></dt>
    <dd><h3>Schnelle Aktivierung</h3></dd>
    <dd>Kurz nach dem Kauf erhalten Sie<br> einen Aktivierungscode.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dt>
    <dd><h3>Kundendienst</h3></dd>
    <dd>Kostenloser technischer<br> Support 24/7</dd>
  </dl>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer wrapper">
  <dl>
    <dd>Hinweis:</dd>
    <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
    <dd>*. Daten können sich system- oder computerabhängig ändern.</dd>
    <dd>* Wenn Sie nicht zufrieden sind, können Sie die Bestellung innerhalb von 60 Tagen ohne Zahlung einer Gebühr stornieren.<br> &nbsp;&nbsp;Das Geld wird automatisch auf Ihre Kreditkarte oder Ihr PayPal-Konto zurückerstattet.</dd>
  </dl>
  <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
</div>
<!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>