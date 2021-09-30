<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$driversCount=empty($_GET['uc'])?0:intval($_GET['uc']);
$updateAuto=($_GET['adu']==1)?1:0;

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>

<!DOCTYPE html>
  <html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>Mit dem exklusiven 85% Rabatt lösen Sie Driver Booster 8 PRO ein – IObit</title>
    <meta name="Copyright" content="IObit">
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
    <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>

  </head>
  <body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
      <!-- title -->
      <h1>Lösen Sie den neuen Driver Booster 8 Pro ein</h1>
      <!-- subtitle -->
      <h2>Nr.1 PC Treiberupdater – aktualisiert Treiber einfach, sicher und schnell</h2>
      <!-- db-box -->
      <img class="db-box fl" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO">
      <!-- db-message -->
      <div class="db-message fr">
        <!-- db-off -->
        <img class="db-off" src="<?php echo getStaticUrl('images/db-off.png')?>" alt="">
        <!-- db-line -->
        <p class="db-des">Exklusiv für Nutzer des Werbegeschenks</p>
        <!-- price -->
        <p class="price">
          Nur: <span><b>9</b>,99€</span>  <del>74,85€</del>  
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-db8-ac&ref=de_2018sepgiveawaya<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-de');">
          Jetzt einlösen
        </a>
        <!-- attention -->
        <p class="attention">1 Jahresabo  / 1 PC</p>
        <!-- money-back -->
        <img class="money-back" src="<?php echo getStaticUrl('images/money-back.png')?>" alt="">
      </div>
    </div>
  </div>
  <!-- banner end -->
  <!-- feature-part1 start -->
  <div class="feature-part1">
    <div class="wrapper">
      <!-- arrow -->
      <img class="arrow" src="<?php echo $pResUrl;?>images/feature-arrow.png" alt="">
      <!-- title -->
      <h2 class="fr">
        <span class="top">Seit er mit uns ist</span>
        <span class="bottom">hat der Driver Booster</span>
      </h2>
      <!-- details -->
      <ul class="details fr">
        <!-- updated -->
        <li class="updated">
          <?php if($driversCount!=0):?>
          <span class="numbers clearfix">
            <i class="num1">0123456789</i>
            <i class="num2">0123456789</i>
            <i class="num3">0123456789</i>
          </span> <strong>Treiber aktualisiert</strong> sowie Spielkomponenten und sichergestellt, dass Sie <b>eine stabile PC Performance und flüssige Spielerfahrung haben</b>;
          <?php else:?>
            Garantiert Ihnen eine stabile PC Performance und flüssige Spielerfahrung
          <?php endif;?>
        </li>
        <!-- saved -->
        <li class="saved">
          <?php if($updateAuto==1):?>
          <strong>Ihnen mindestens die </strong>
          <span class="letters clearfix">
            <i class="let1">ä b c d e f g i j k l m H n o p q r s t u v w x y z</i>
            <i class="let2">b c d e f g H i j k l m ä n o p q r s t u v w x y z</i>
            <i class="let3">ä b c d e f g H i j k l m n o p q r s t u v w x y z</i>
            <i class="let4">ä b c d e i g H f j k l m n o p q r s t u v w x y z</i>
            <i class="let5">ä b c d e f g H i j k l m n o p q r s t u v w x y z</i>
            <i class="let6">b c d ä f g H i j k l m e n o p q r s t u v w x y z</i>
            </span>
          Ihrer Zeit mit automatischen Updates <b>gespart</b>;
          <?php endif;?>
        </li>
        <!-- reduced -->
        <li class="reduced">
          Ihre <strong>Systemabstürze</strong> mit automatischen Treiberbackups und Recovery-Technologie <b class="red">verringert</b>.
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part1 end -->
  <!-- feature-part2 start -->
  <div class="feature-part2">
    <div class="wrapper">
      <!-- content -->
      <p>
        Während der letzten 6 Jahre hat der Driver Booster Pro <strong>12.700.000</strong> Treiber für <strong>1.500.000</strong> wertgeschätzte Nutzer aktualisiert, was deren PCs durch das Up-to-Date halten im Durchschnitt bis zu <strong>200%</strong> beschleunigt* und die Stabilität und PC Performance verbessert.
      </p>
    </div>
  </div>
  <!-- feature-part2 end -->
  <!-- feature-part3 start -->
  <div class="feature-part3 wrapper">
    <!-- title -->
    <h2>Verpassen Sie die neue Pro Version, <br>haben Sie vielleicht die folgenden Probleme</h2>
    <!-- content for progress -->
    <div class="content clearfix">
      <!-- Worse PC Performance -->
      <dl class="performance fl">
        <dt>schlechtere PC Performance </dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>15% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Unstable & Stuck Gaming Experience -->
      <dl class="experience fl">
        <dt>unstabile & schlimme Spielerfahrung</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>35% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Time-consuming Driver Update -->
      <dl class="update fr">
        <dt>zeitsparende Treiberaktualisierung</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>2X länger </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <!-- notes -->
    <p>* Wir haben Driver Booster 8 PRO in unserem internen Testlabor untersucht. Ihre Ergebnisse können abweichen.</p>
  </div>
  <!-- feature-part3 end -->
  <hr>
  <!-- feature-part4 start -->
  <div class="feature-part4">
    <div class="wrapper clearfix">
      <!-- title -->
      <h2>
        Somit empfehlen wir Ihnen, den Driver Booster 8 Pro einzulösen, <br>um alle Ihre Treiber immer aktuell zu halten.
      </h2>
      <!-- left-message -->
      <ul class="left-message fl">
        <li class="padding-right25">
          <strong>4.500.000+ Treiber</strong> große <br>Datenbank, um Ihre Gerätetreiber <br>zu aktualisieren
        </li>
        <li class="padding-right55">
          <strong>Treiber automatisch aktualisieren</strong>, wenn Ihr System inaktiv ist
        </li>
        <li class="padding-right5">
          <strong>1-Klick zur Lösung</strong> aller Gerätefehler <br>auf Ihrem Computer
        </li>
      </ul>
      <!-- right-message -->
      <ul class="right-message fr">
        <li class="padding-left45">
          <strong>Notwendige Spielkomponenten,</strong> <br>um Ihre Spiele erfolgreich zu <br>starten
        </li> 
        <li class="padding-left5">
          <strong>Priorisiert</strong> das Updaten mit <strong>Game<br> Ready Treibern</strong>, um eine bessere Spielerfahrung zu genießen
        </li>
        <li class="padding-left10">
          1-Klick zum <strong>Stopp unnötiger Prozesse</strong> für schnellere Spiele
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part4 end -->
  <!-- between-buy start -->
  <div class="between-buy wrapper">
    <!-- title -->
    <h2>Garantiert eine bessere PC Performance & flüssigere Spielerfahrung</h2>
    <!-- price -->
    <p class="price">
      Nur: <span><b>9</b>,99€</span>  <del>74,85€</del>  
    </p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=de-db8-ac&ref=de_2018sepgiveawaya<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_db"
       onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-de');">
      Jetzt einlösen
    </a>
    <!-- attention -->
    <p class="attention">1 Jahresabo  / 1 PC</p>
    <!-- money-back -->
    <img class="money-back" src="<?php echo getStaticUrl('images/money-back.png')?>" alt="">
  </div>
  <!-- between-buy end -->
  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <!-- title -->
      <h2>Sehen Sie hier genau, was Sie verpassen würden, falls Sie bei Free bleiben</h2>
      <!-- table -->
      <table cellspacing="0" cellpadding="0" valign="middle" align="cnter">
        <thead>
        <tr>
          <th class="w320"></th>
          <th class="w530"></th>
          <th class="w350"></th>
          <th class="w50"></th>
        </tr>
        </thead>
        <tbody>
        <!-- 01 -->
        <tr>
          <td class="w320 grey">3.500.000+</td>
          <td class="w530">Treiber Datenbank</td>
          <td class="w350 red">4.500.000+</td>
          <td class="w50"></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="w320 grey">Keine Beschleunigung</td>
          <td class="w530">Treiber Downloadgeschwindigkeit</td>
          <td class="w350 red">200% schneller</td>
          <td class="w50"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="w320 grey">Keine Priorität</td>
          <td class="w530">Game Ready Treiber</td>
          <td class="w350 red">Priorität</td>
          <td class="w50"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Spielkomponenten</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Automatische Treiber Updates</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Treiberbackups</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td class="w320"></td>
          <td class="w530"></td>
          <td class="w350"></td>
          <td class="w50"></td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- comparison end -->
  <!-- review start -->
  <div class="review wrapper">
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
            <h4>„IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. “</h4>
            <p>
              „IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. Driver Booster PRO bietet mehrere Funktionenen und Lizenz-Schlüssel zu einem guten Preis sowie eine anpassbare Benutzeroberfläche, die beim Anzeigen spezifischer Hardware-Informationen gut macht. Seine Wettbewerber wie Ashampoo Driver Updater und SlimWare Utilities DriverUpdate bieten überzeugende Funktionen an, aber IObit Driver Booster PRO tut krass besser.“
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/peter-bomers.png')?>" alt="Peter Bomers"></dt>
          <dd>
            <h2>Kundenbewertung</h2>
            <h4></h4>
            <p>
              Auf die heutige Zeit bezogen, ist es sehr schwierig, immer mit den Treibern auf dem neuesten Stand zu sein. Da ich mit meinem PC viel experementiere und immer wieder was neues ausprobiere, bin ich eben auf den Driver Booster gekommen, weil Ihr immer fast genau, aktuell seid. Ich bin ein Hobby Mensch  in Sachen PC`s und freu mich immer über neue Errungenschaften. Macht weiter so und wir werden im Geschäft bleiben.
            </p>
            <cite>Peter Bomers</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
          <dd>
            <h2>Kundenbewertung</h2>
            <h4></h4>
            <p>
              Was für eine Überraschung, den neuen Driver Booster von IObit zu erhalten. Sobald die Installation fertig ist, startet sein Update sofort. Nachdem das Upgrade abgeschlossen war, sah es so aus, als ob mein PC komplett überarbeitet worden wäre. Wirklich super! 
            </p>
            <cite>Harold Barr</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt>
            <img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo">
          </dt>
          <dd>
            <h2>Kundenbewertung</h2>
            <h4></h4>
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
  <div class="awards wrapper">
    <!-- title -->
    <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
    <img src="<?php echo getStaticUrl('images/awards-icon.png')?>" alt="">
  </div>
  <!-- award end -->
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="footer-servizio clearfix">
        <dl class="money_back fl">
          <dd>
            <img src="<?php echo getStaticUrl('images/money-back.png')?>" alt="">
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
            <p>Kurz nach dem Kauf erhalten Sie <br>einen Aktivierungscode</p>
          </dt>
        </dl>
      </div>
      <p class="note">
        Hinweis:<br>
        *. Daten können sich system- oder computerabhängig ändern.
      </p>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
  </div>
  <!-- footer end -->
  <!-- float start -->
  <div class="float">
    <div class="wrapper clearfix">
      <dl class="fl">
        <dt>Exklusives Angebot</dt>
        <dd><strong>85% RABATT</strong>, um Systemabstürze & instabile Spielerfahrung loszuwerden</dd>
      </dl>
      <div class="float-message fr">
        <!-- price -->
        <p class="price">
          Nur: <span><b>9</b>,99€</span>  <del>74,85€</del>  
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-db8-ac&ref=de_2018sepgiveawaya<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-de');">
          Jetzt einlösen
        </a>
      </div>
    </div>
  </div>
  <!-- float end -->


  <script>
    driversCount=<?php echo $driversCount;?>;
    autoUpdate=<?php echo $updateAuto;?>;
    $(document).ready(function() {
      $('#dg-container').gallery();
    });
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  </body>
  </html>