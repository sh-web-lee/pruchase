<?php
  error_reporting(0);
  define('IObit', 'IObit');
  if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
  }

if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='decxdb'.$date;
  if (empty($_COOKIE[$c_name])) {
    $packsNum = 77;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 3) {
        setcookie($c_name, 3, time() + 3600 * 24);
        $packsNum = $_COOKIE[$c_name];
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo $packsNum;
  exit;
}
$refStr='';
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
    'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
    'sdfeatures_noaction','sdddact_noaction','actreport'))){
  $refStr.='-'.$_GET['ref'];
}
  include $pRootUrl.'include/common.inc.php';
  ?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Sparen Sie 75% auf Smart Defrag 6 PRO.</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner -->
  <div class="banner">
    <div class="container">
      <div class="wrapper">
        <!-- header -->
        <div class="header">
           <a href="http://www.iobit.com/" target="_blank" class="logo">IObit</a>
           <div class="title">
             <h1>Smart Defrag FLASH SALE</h1>
             <p>bis zu 75% Rabatt & Geschenke</p>
           </div>
        </div>
        <!-- activity -->
        <div class="activity">
          <div class="steps mainstep">
            <h2>Die ersten 2.000 Aufträge</h2>
            <p>-75%</p>
            <div class="focus"></div>
            <em class="notice">Nur <i class="countNum">00</i> Deals erhältlich!</em>
            <div class="progress">
              <div class="counter"><span class="countNum">00</span></div>
              <div class="bar-mask">
                <div class="progressbar"></div>
              </div>
              <em class="count"><i class="countNum">00</i> von 2,000 übrig</em>
            </div>
          </div>
          <div class="steps others">
            <h2>Die nächsten 3.000 Aufträge</h2>
            <p>- 40%</p>
          </div>
          <div class="steps others">
            <h2>Alle übrigen Aufträge</h2>
            <p>- 10%</p>
          </div>
        </div>
        <!-- end activity -->
        <div class="showcase">
          <div class="details">
            <div class="imgcase"><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/></div>
            <dl>
              <dt><strong>Smart Defrag 6 Pro</strong></dt>
              <dd>1 Jahr, 1 PC    <strong>19,99€</strong> <del>29,99€</del></dd>
            </dl>
            <ul>
              <li><strong>SD PRO Extra 2 PCs <span> 0€</span></strong> <del>29,99€</del></li>
              <li><strong>AMC Security PRO<span>0€</span></strong> <del>19,99€</del></li>
            </ul>
          </div>
          <div class="checkout">
            <dl>
              <dt><strong>19,99€</strong> <span><del>79,97€</del> <em>75% sparen</em></span></dt>
              <dd><a href="http://www.iobit.com/buy.php?product=de-sd63pcamc1999&ref=de_sd6rcamcpurchase1805<?php echo $refStr;?>&refs=de_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd6rc201805-de');" class="activebtn"><div class="inner"><i></i><span>Jetzt aktivieren</span></div></a></dd>
              <dd>Nur <span class="countNum">00</span> Deals erhältlich!</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <!-- end banner -->
  <!-- payments -->
  <div class="paymanets wrapper">
    <dl>
      <dt>Akzeptierte Zahlungsmittel</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/payments.png" alt=""></dd>
    </dl>
    <dl>
      <dt>Geld-zurück-Garantie </dt>
      <dd><img src="<?php echo $pResUrl; ?>images/tage.png" alt=""></dd>
    </dl>
    <dl>
      <dt>Sichere Bezahlung</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dd>
    </dl>
  </div>
  <!-- end payments -->
  <!-- awards -->
  <div class="awards wrapper">
    <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
    <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
  </div>
  <!-- end awards -->
  <!-- benfits -->
  <div class="benfits wrapper">
    <h2>SD 6 Pro maximiert die Festplatten-Leistung & beschleunigt Ihren PC</h2>
    <div class="snapshoot">
      <img src="<?php echo getStaticUrl('images/snapshoot.jpg')?>" alt=""/>
    </div>
    <div class="benfits-list clearfix">
      <div class="list">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-01.png" alt="">
        <dl>
          <dt>Neue ultraschnelle Engine</dt>
          <dd>Defragmentiert Dateien effizienter, gründlicher und schneller</dd>
        </dl>
      </div>
      <div class="list">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-02.png" alt="">
        <dl>
          <dt>Bis zu 200% schnellner *</dt>
          <dd>Beschleunigt den Zugriff auf Dateien & die Spielgeschwindigkeit</dd>
        </dl>
      </div>
      <div class="list">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-03.png" alt="">
        <dl>
          <dt>Automatische und intelligente Defragmentierung</dt>
          <dd>Defragmentiert die ausgewählten Dateien & Festplatten intelligent und automatisch ohne Unterbrechungen</dd>
        </dl>
      </div>
      <div class="list">
        <img src="<?php echo $pResUrl; ?>images/benfits-icon-04.png" alt="">
        <dl>
          <dt>Schnellerer Systemstart </dt>
          <dd>Genießen Sie schnellere Systemstarts und Systemgeschwindigkeit</dd>
          <dd><a href="javascript:void(0);" onclick="goTaget($('.compar-tab'))" class="morelink">Erfahren Sie mehr über die Pro Version ></a></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->
  <!-- gift-pack -->
  <div class="gift-pack wrapper">
    <h2>GRATIS GESCHENKE FÜR SIE</h2>
    <div class="gift-box">
      <img src="<?php echo $pResUrl; ?>images/boxshot-amc.png" alt="">
      <dl>
        <dt> <strong>AMC Security PRO <sup>*</sup></strong> <b>0€</b>  <del>19,99€</del>     1 Jahr, 1 Gerät</dt>
        <dd>Doppelte Geschwindigkeit und voller Schutz vor Sicherheitsbedrohungen für Ihre Android-Geräte!</dd>
      </dl>
    </div>
    <div class="gift-box">
      <img src="<?php echo getStaticUrl('images/boxshot-sd.png')?>" alt=""/>
      <dl>
        <dt> <strong>Smart Defrag PRO</strong> <b>0€</b>  <del>29,99</del>     1 Jahr, 2 PCs</dt>
        <dd>Erhalten Sie maximierte Festplatten-Performance.</dd>
      </dl>
    </div>
  </div>
  <!-- end gift-pack -->
  <!-- mid-cart -->
  <div class="midcart">
    <div class="container">
      <div class="showcase">
          <div class="details">
            <div class="imgcase"><img src="<?php echo $pResUrl; ?>images/sd-box.png" alt=""></div>
            <dl>
              <dt><strong>Smart Defrag 6 Pro</strong></dt>
              <dd>1 Jahr, 1 PC   <strong>19,99€</strong> <del>29,99€</del></dd>
            </dl>
            <ul>
              <li><strong>SD PRO Extra 2 PCs<span>0€</span></strong> <del>29,99€</del></li>
              <li><strong>AMC Security PRO<span>0€</span></strong> <del>19,99€</del></li>
            </ul>
          </div>
          <div class="checkout">
            <dl>
              <dt><strong>19,99€</strong> <span><del>79,97€</del> <em>75% sparen</em></span></dt>
              <dd><a href="http://www.iobit.com/buy.php?product=de-sd63pcamc1999&ref=de_sd6rcamcpurchase1805<?php echo $refStr;?>&refs=de_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd6rc201805-de');" class="activebtn"><div class="inner"><i></i><span>Jetzt aktivieren</span></div></a></dd>
              <dd>Nur <span class="countNum">78</span> Deals erhältlich!</dd>
            </dl>
          </div>
          <p><i><img src="<?php echo $pResUrl; ?>images/icon-guarantee.png" alt=""></i>100% 60 Tage Geld-zurück-Garantie</p>
        </div>        
    </div>
  </div>
  <!-- end mid-cart -->
   <!-- reviews -->
  <div class="reviews wrapper clearfix">
    <div class="review media">
      <h2>Medienbewertungen</h2>
      <div class="container">
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/chlp.png"></dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/fourandhalf-stars.jpg" alt="">
            <p>Mit "Smart Defrag" holen Sie das Beste aus Ihrer Festplatte heraus und beschleunigen Ihren Computer.</p>
          </dd>
        </dl>
          <dl class="gray">
            <dt><img src="<?php echo $pResUrl; ?>images/computer.png"></dt>
            <dd>
              <img src="<?php echo $pResUrl; ?>images/five-stars.jpg" alt="">
              <p>Defragmentieren Sie die Festplatten Ihres Computers und verbessern so unter Umständen die Performance Ihres PCs.</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo $pResUrl; ?>images/netzwelt.png"></dt>
            <dd>
              <img src="<?php echo $pResUrl; ?>images/fourandhalf-stars.jpg" alt="">
              <p>Es sorgt mit nur wenigen Klicks für eine Optimierung der Lese- und Schreibgeschwindigkeiten des Speicherplatzes.</p>
            </dd>
          </dl>
      </div>
    </div>
    <div class="review users">
        <h2>Userbewertungen</h2>
        <dl>
            <dt>Amnon</dt>
            <dd>
                <p>Treiber werden permanent defragmentiert, dann hat es den schnellen Zugriff und weniger Verschleiß.</p>
                <img src="<?php echo $pResUrl; ?>images/amnon.jpg" alt="">
            </dd>
        </dl>
        <dl class="white">
            <dt>Edward Lee Ah Yen</dt>
            <dd>
                <p>Ich verwende Smart Defrag Pro, um meine Treiber zu analysieren, zu defragmentieren und mit der Spitzenleistung zu halten. </p>
                <img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.jpg" alt="">
            </dd>
        </dl>
        <dl>
            <dt>Hans</dt>
            <dd>
                <p>Seit der Nutzung dieser fantastischen Software laufen meine Desktop und Laptop immer schneller.</p>
                <img src="<?php echo $pResUrl; ?>images/hans.jpg" alt="">
            </dd>
        </dl>
    </div>
  </div>
  <!-- end reviews -->
  <!-- compar-tab -->
  <div class="compar-tab wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th colspan="2" class="text">Welche Vorteile bietet Ihnen die PRO Edition :</th>
        <th class="space"></td>
        <th class="item-free">Smart Defrag FREE</th>
        <th class="space"></td>
        <th class="item-pro">
          Smart Defrag PRO
          <dl>
            <dt>1 Jahr, 1 PC + Geschenke</dt>
            <dd><a href="http://www.iobit.com/buy.php?product=de-sd63pcamc1999&ref=de_sd6rcamcpurchase1805<?php echo $refStr;?>&refs=de_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd6rc201805-de');" class="activesmall"><div class="inner"><i></i><span>Jetzt aktivieren</span></div></a></dd>
          </dl>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-01.png"></td>
        <td class="text">Grundlegende Defragmentierung der Festplatte und Optimierung</td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-02.png"></td>
        <td class="text">Bis zu 200% schnellere Datenzugriffsgeschwindigkeit</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-03.png"></td>
        <td class="text">Boot-Time-Defragmentierung für schnelleren PC-Start</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-04.png"></td>
        <td class="text">Defragmentiert fragmentierte Dateien automatisch und intelligent</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-05.png"></td>
        <td class="text">Angepasste Defragmentierungsmethode​n & Festplatten/Dateien können defragmentiert werden.</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-06.png"></td>
        <td class="text">Verwendung von DMA für eine verbesserte, schnellere & stabilere Übertragung von Dateien</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-07.png"></td>
        <td class="text">Keine Unterbrechung bei Arbeiten oder Spielen mit dem stillen Modus</td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-08.png"></td>
        <td class="text">Top Spielerfahrung mit Spieloptimerung</td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-09.png"></td>
        <td class="text">Geplante Aufgabe unterstützt leere Defragmentierung</td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-10.png"></td>
        <td class="text">Automatisches Update auf die neueste Version</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-11.png"></td>
        <td class="text"> Kostenloser 24/7 technischer Support</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tfoot>
        <tr>
        <th colspan="2"></th>
        <th class="space"></td>
        <th class="item-free">
          <strong>Smart Defrag FREE</strong> 
        </th>
        <th class="space"></td>
        <th class="item-pro">
          <dl>
            <dt><strong>19,99€ </strong> <del>79,97€</del></dt>
            <dd>1 Jahr, 1 PC + Geschenke</dd>
            <dd><a href="http://www.iobit.com/buy.php?product=de-sd63pcamc1999&ref=de_sd6rcamcpurchase1805<?php echo $refStr;?>&refs=de_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd6rc201805-de');" class="activesmall"><div class="inner"><i></i><span>Jetzt aktivieren</span></div></a></dd>
            <dd>Nur  <span  class="countNum">00</span> Deals erhältlich!</dd>
          </dl>
        </th>
      </tr>
      </tfoot>
      </tbody>
    </table>
  </div>
  <!-- end compar-tab -->
  <dl class="annotation wrapper">
      <dt>Note:</dt>
      <dd>* Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
      <dd>* Daten können auf der Grundlage verschiedener Systeme oder Computer geändert werden.</dd>
      <dd>* Lizenz für die Vollversion von AMC Security mit in-app Werbung</dd>
    </dl>
   <div class="footer">    
    <p class="copyright">Copyright © 2005 - 2018 IObit. Alle Rechte vorbehalten</p>
  </div>
  <!-- float -->
  <div class="float">
      <div class="inner">
        <p>Nur <strong  class="countNum">00</strong> Deals erhältlich!</p>
      </div>
  </div>
  <script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/script.min.js"></script>
</body>
</html>