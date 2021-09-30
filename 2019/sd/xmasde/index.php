<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
if(!empty($_GET['ver'])){
    $ver = explode('.',$_GET['ver']);
    $refStr .= '-'.$ver[3];
}
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Holen Sie sich unser Spezial-Angebot zu Smart Defrag PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
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
    <div class="title">
      <h1>FLASH SALE - 2020</h1>
      <p>Verpassen Sie nicht unsere Geschenke, die wir für Sie vorbereitet haben</p>
    </div>
    <!-- message -->
    <div class="message clearfix">

      <!-- 1pc asc -->
      <div class="message-box small fl">
        <!-- off -->
        <div class="off">-33%</div>
        <!-- box -->
        <div class="box">Smart Defrag PRO</div>
        <!-- price -->
        <p class="price"><span><big>19</big> <sup>€</sup> <sub>99</sub></span> <del>29,99€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-sd63pc1999&ref=de_sd73pcpurchase2101-i-u-l-e<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pcsinglepurchase2101-de')">
          <i class="all-icons"></i> JETZT KAUFEN
        </a>
      </div>

      <!-- 3pc asc -->
      <div class="message-box large fr">
        <!-- off -->
        <div class="off">-72%</div>
        <!-- box -->
        <div class="box">
          Advanced SystemCare PRO+bundles
          <span>Cadeaux valent 89,97€</span>
        </div>
        <!-- price -->
        <p class="price large"><span><big>16</big> <sup>€</sup> <sub>99</sub></span> <del>59,98€</del></p>
        <!-- buybtn -->
        <a class="buybtn large"
           href="https://www.iobit.com/buy.php?product=de-sd63pcisu1699&ref=de_sd73pcbundle2101-i-u-l-e<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pcbundlepurchase2101-de') ">
          <i class="all-icons"></i> JETZT KAUFEN
        </a>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payment -->
<div class="payment wrapper">
  <img src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
</div>
<!-- end payment -->

<!-- intro -->
<div class="intro">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Warum Smart Defrag PRO wählen?</h2>
    <div class="title">
      <h2>Warum Smart Defrag PRO wählen?</h2>
    </div>
    <!-- left-message -->
    <div class="left-message">
      <!-- message -->
      <div class="message">
        <div class="list">
          <h3>Geschwindigkeit</h3>
          <dl>
            <dt>Bis zu 200% schneller</dt>
            <dd>
              Durch die umfassendere Defragmentierung von Dateien <br>
              können Sie auf Dateien schnell zugreifen und bis zu <br>
              200% schneller spielen.
            </dd>
          </dl>
          <dl>
            <dt>Schnelle Defragmentierung</dt>
            <dd>
              Defragmentiert Ihre Festplatten und Dateien gründlich <br>
              und effizient, um Zeit zu sparen.
            </dd>
          </dl>
        </div>
      </div>
      <!-- message -->
      <div class="message">
        <div class="list">
          <h3 class="small">Leistung</h3>
          <dl>
            <dt>Computer starten</dt>
            <dd>
              Schnellere Defragmentierung der Registrierung und <br>
              der Systemdateien während des Systembetriebs für <br>
              einen schnelleren Start und eine optimale <br>
              Systemleistung.
            </dd>
          </dl>
          <dl>
            <dt>Defragmentierung</dt>
            <dd>
              Defragmentiert Dateien und Festplatten automatisch <br>
              und intelligent auf Ihrem PC zu jeder Zeit mit <br>
              maximaler Leistung.
            </dd>
          </dl>
        </div>
      </div>

    </div>
    <!-- change-img-->
    <div class="change-img">
      <!-- list01 -->
      <div class="list-img list01 show">
        <img src="<?php echo getStaticUrl('images/intro1.png')?>" alt="" class="nomal">
        <div class="img-before"></div>
      </div>
      <!-- list02 -->
      <div class="list-img list02">
        <img src="<?php echo getStaticUrl('images/intro2.png')?>" alt="" class="nomal2">
        <div class="privacy-right"></div>
      </div>
    </div>
  </div>
</div>
<!-- end intro -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <!-- title -->
    <h2>Verpassen Sie nicht Ihre Geschenkegeschenke</h2>
    <!-- gifts message -->
    <div class="gifts-message clearfix">
      <!-- isu -->
      <div class="gifts-box">
        <dl class="isu">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon03.png')?>" alt=""></dt>
          <dd class="clearfix">
            <!-- box -->
            <div class="box fl"></div>
            <div class="message fl">
              <h3>IObit Software Updater 4 PRO</h3>
              <em>(1 Jahr / 1 PC)</em>
              <span class="arrow"></span>
              <ul>
                <li>Aktualisieren Sie die installierte Software, ohne <br> einen Webbrowser zu öffnen.</li>
                <li>Halten Sie all ihre Software einfach auf dem <br> neuesten Stand.</li>
              </ul>
            </div>
          </dd>
        </dl>
      </div>
    </div>
    <!-- buybtn -->
    <a class="buybtn larger"
       href="https://www.iobit.com/buy.php?product=de-sd63pcisu1699&ref=de_sd73pcbundle2101-i-u-l-e<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_sd"
       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pcbundlepurchase2101-de') ">
      <i class="all-icons"></i> JETZT KAUFEN
    </a>
  </div>
</div>
<!-- end gifts -->

<!-- comparison -->
<div class="comparison wrapper" id="compare">
  <!-- title -->
  <h2>Sehen Sie, warum sich die PRO-Edition lohnt. </h2>
  <!-- table -->
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2" class="text"></th>
      <th class="space"></th>
      <th class="itemb">
        Smart Defrag <strong>Free</strong>
      </th>
      <th class="space"></th>
      <th class="itema">
        Smart Defrag <strong>PRO</strong>
      </th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
      <td class="virtue">Grundlegende Defragmentierung und Optimierung der Festplatte</td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">☆</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt=""/></td>
      <td class="virtue">Schnellere und reibungslosere Spielleistung mit „Spiel-Optimieren“</td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">☆</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""/></td>
      <td class="virtue">Defragmentiert Registrierungsdateien für mehr PC-Leistung</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""/></td>
      <td class="virtue">Boot-Time-Defragmentierung für einen schnelleren PC-Start</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""/></td>
      <td class="virtue">Bis zu 200% schnellere Datenzugriffsgeschwindigkeit</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""/></td>
      <td class="virtue">Defragmentiert ausgewählte Dateien und Festplatten automatisch und intelligent</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""/></td>
      <td class="virtue">Angepasste Defragmentierung von Dateien während des Systemstarts</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 12 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""/></td>
      <td class="virtue"><span>Schützt ihre Dateien gegen Ransomware und andere Gefahren</span</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 13 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""/></td>
      <td class="virtue">Automatische Updates auf die neuste Version</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 14 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt=""/></td>
      <td class="virtue">Kostenloser technischer Support 24/7</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- review start -->
<div class="review wrapper">
  <div class="content">
    <dl>
      <dt>
        <h3>Kundenbewertung</h3></dt>
      <dd>
        <h4>
          „Mein „Smart Defragt Pro“ auf auto defragmentieren zu stellen und einmal die Woche „Defragmentieren und Optimieren“ durchlaufen zu lassen, hält mein System ruhig und gesund.“
        </h4>
      </dd>
      <dd>
        „Ich habe Iobit’s Produkte für eine gute Anzahl an Jahren genutzt. Weil eine ältere Maschine mit 6 Treibern, 2 davon extern, nutze, finde ich, dass mir Iobit’s „Smart Defrag Pro“ sehr gut gedient hat. Als eine ältere Maschine neigt mein Computer dazu, sehr schnell fragmentiert zu werden. Mein „Smart Defragt Pro“ auf autodefragmentieren zu stellen und einmal die Woche „Defragmentieren und Optimieren“ durchlaufen zu lassen, hält mein System ruhig und gesund. Iobit rüstet stetig auf und strebt danach über die Zeit hinweg das Produkt immer weiter zu verbessern. Ich bin mit diesem Produkt sehr zufrieden.“
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>Kundenbewertung</h3></dt>
      <dd>
        <h4>„Es ist sehr einfach zu bedienen und ein „Must have“ Tool für die Festplatte oder SSD.“</h4>
      </dd>
      <dd>
        „Ich verwende eine Kombination aus RAID 0 SSDs und RAID 0 HDDs und benutze Smart Defrag Pro um meine Laufwerke zu analysieren und zu defragmentieren, damit diese auf Spitzenniveau bleiben. Jede Software von IObit ist einfach zu installieren und zu nutzen und dabei sehr zuverlässig. Einfach nur installieren und dann vergessen. Smart Defrag benötigt sehr wenig Speicherplatz, sodass das System nicht verlangsamt wird. Sehr empfehlenswert.“das Produkt immer weiter zu verbessern. Ich bin mit diesem Produkt sehr zufrieden.“
      </dd>
    </dl>
    <dl class="active">
      <dt>
        <h3>Media Review</h3></dt>
      <dd>
        <h4>
          „Smart Defrag kommt nicht nur mit herkömmlichen HDD-Festplatten zurecht, sondern unterstützt zudem das moderne Solid-State-Drive-System (SSD).“
        </h4>
      </dd>
      <dd>
        „Sollte euch der Funktionsumfang des Programms nicht ausreichen, könnt ihr auf die kostenpflichtige Pro-Version setzen. Diese bietet unter anderem einen Auto-Modus, der die Festplatten im Hintergrund automatisch defragmentiert. Die kostenpflichtige Variante könnt ihr aus der Free-Version heraus aktivieren.“
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>Kundenbewertung</h3></dt>
      <dd>
        <h4>
          „Mit Smart Defrag eine robustere und genauere Diagnose als dem Windows 10 Optimiser erzielen“
        </h4>
      </dd>
      <dd>
        „Ich nutze Smart Defrag seit der Erstveröffentlichung auf mehreren PCs und seit Beginn konnte ich zusammen mit den Mitgliedern meines Computerclubs stetige Verbesserungen erkennen. Bis auf die englische Sprache war es perfekt. Also habe ich meine Zeit für IObit‘s französische Übersetzung investiert. Seit dem empfehlen französische IT-Magazine Smart Defrag besonders, einschließlich des Windows 10 Optimierers für eine robustere und genauere Diagnose mit Optionen, den Systemstart zu beschleunigen.“
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>Kundenbewertung</h3></dt>
      <dd>
        <h4>
          „Smart Defrag ist eine große Bereicherung für mein System. Es macht alles was ich will und benötige.“
        </h4>
      </dd>
      <dd>
        „Ich bin mit Smart Defrag sehr zufrieden. Es ist jedes Mal wie Magie. Ich muss nur das Programm laufen lassen und schon ist alles sauber. Ich bin zu 100% zufrieden. Nicht nur mit dem Programm, sondern auch mit den schnellen Antworten, wenn ich Hilfe bei Problemen benötige. Das schätze ich sehr.“
      </dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/william-howes.png')?>" alt="William Howes">
      </div>
      <p>William Howes</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></div>
      <p>Edward Lee Ah Yen</p>
    </li>
    <li class="active">
      <div class="pic"><img src="<?php echo getStaticUrl('images/netzwelt-de.png')?>" alt="NetzWelt.de">
      </div>
      <p>NetzWelt.de</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/roland-lalis.png')?>" alt="Roland LALIS">
      </div>
      <p>Roland LALIS</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten">
      </div>
      <p>Jim Parten</p>
    </li>
  </ul>
</div>
<!-- review end -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- box -->
    <div class="box fl">Smart Defrag PRO</div>
    <!-- bottombuy-mid -->
    <div class="bottombuy-mid fl">
      <!-- off -->
      <div class="off"></div>
    </div>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <!-- price -->
        <p class="price white"><span><big>16</big> <sup>€</sup> <sub>99</sub></span> <del>59,98€</del></p>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=de-sd63pcisu1699&ref=de_sd73pcbundle2101-i-u-l-e<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pcbundlepurchase2101-de') ">
          <i class="all-icons"></i> JETZT KAUFEN
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl class="astisfait fl">
    <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
    <dd>
      <h3>Zufriedenheitsgarantie</h3>
      <p>60-Tage-Geld-zurück-Garantie</p>
    </dd>
  </dl>
  <dl class="paiement fl">
    <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
    <dd>
      <h3>Zahlungssicherheit</h3>
      <P>Ihre Zahlung ist 100% sicher</P>
    </dd>
  </dl>
  <dl class="modes fl">
    <dt><img src="<?php echo $pResUrl; ?>images/shop-box.png" alt=""></dt>
    <dd>
      <h3>Schnelle Aktivierung</h3>
      <p> Nach dem Kauf erhalten Sie <br> sofort einen Aktivierungscode</p>
    </dd>
  </dl>
  <dl class="service-client fr">
    <dt><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dt>
    <dd>
      <h3>Kundendienst</h3>
      <p>Kostenloser technischer Support 24/7</p>
    </dd>
  </dl>
</div>
<!-- service end -->

<!-- footer -->
<div class="footer wrapper">
  <div class="notes">
    <p>Notiz:</p>
    <p>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</p>
    <p>*. Daten können auf der Grundlage verschiedener Systeme oder Computer geändert werden.</p>
    <p>*. IObit Software Updater unterstützt 1 Jahr / 1 PC.</p>
  </div>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Alle Rechte vorbehalten</p>
</div>
<!-- footer end -->

<!-- float -->
<div class="float">
  <p>
    Rabatt<br>
    <b>-72%</b>
  </p>
  <!-- buybtn -->
  <a class="buybtn small"
     href="https://www.iobit.com/buy.php?product=de-sd63pcisu1699&ref=de_sd73pcbundle2101-i-u-l-e<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_sd"
     onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pcbundlepurchase2101-de') ">
    JETZT KAUFEN
  </a>
  <!-- close -->
  <a class="close"
     href="javascript: closeFloat();"
     onclick="ga('send', 'event', 'ascclose', 'click', 'purchase-de')">
    ×
  </a>
</div>
<!-- end float -->

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/TweenMax.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>