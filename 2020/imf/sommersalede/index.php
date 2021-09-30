<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr = "";
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf','xi_imf','xb_imf'))){
    $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Sparen Sie heute bis zu 80% auf IObit Malware Fighter PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/de/index.php">IObit</a>
    <!-- sun -->
    <span class="sun"></span>
    <!-- h1 -->
    <h1>SOMMER SALE</h1>
    <!-- h2 -->
    <h2>Coole Preise für heiße Tage. Wer zuerst kommt, mahlt zuerst!</h2>
    <!-- container -->
    <div class="container">
      <!-- large offer -->
      <div class="offer large">
        <!-- countdown -->
        <p class="countdown">
          <i class="all-icons"></i>
          <strong>00</strong>Tg.
          <strong>00</strong>Std.
          <strong>00</strong>Min.
          <strong>00</strong>Sek.
          <strong>00</strong>Ms.
        </p>
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/banner-imfbundle.png')?>" alt="IObit Malware Fighter PRO+Protected Folder+Smart Defrag PRO+IObit Software Updater PRO">
        <!-- dl -->
        <dl>
          <dd>
            <!-- price -->
            <p class="price"><big>23</big> <del>117,97€</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-imf83pcbun2399&ref=de_imf8bun2399sale2007<?php echo $refStr;?>&refs=de_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfbun2399sale2007-de');">
              <i class="all-icons"></i>
              JETZT SPAREN
            </a>
            <!-- view -->
            <p class="view"><i class="all-icons"></i> Bereits <b class="viewNum">4,006,553</b> Stück verkauft</p>
          </dd>
        </dl>
      </div>

      <!-- medium offer -->
      <div class="offer medium dns">
        <!-- h3 -->
        <h3>Zweite Preissenkung</h3>
        <!-- off -->
        <span class="off">-60%</span>
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/banner-imf.png')?>" alt="IObit Malware Fighter PRO">
        <!-- dl -->
        <dl>
          <dd>
            <!-- price -->
            <p class="price"><big>23</big> <del>59,99€</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-imf83pc2399&ref=de_imf8sin2399sale2007<?php echo $refStr;?>&refs=de_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfsin2399sale2007-de');">
              <i class="all-icons"></i>
              JETZT SPAREN
            </a>
          </dd>
        </dl>
      </div>

      <!-- small offer -->
      <div class="offer small dns">
        <h3>Letzte Preissenkung</h3>
        <span class="off">-50%</span>
      </div>

      <!-- shadow -->
      <span class="shadow"></span>
    </div>
    <!-- service -->
    <div class="service">
      <dl class="one fl">
        <dd>Wir akzeptieren</dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
      <dl class="fl">
        <dd>100% Zufriedenheitsgarantie</dd>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
      </dl>
      <dl class="fr">
        <dd>Sicher zahlen</dd>
        <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></dt>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- h2 -->
    <h2>Sie verdienen einen besseren Virenschutz</h2>
    <!-- left-message -->
    <div class="left-message fl">
      <h3><strong>3 Engines</strong> arbeiten<br> perfekt zusammen</h3>
      <img class="arrow" src="<?php echo getStaticUrl('images/arrow.png')?>" alt="">
      <dl class="clearfix" data-index="01" data-color="blue">
        <dd class="fl">
          <h4>Bitdefender-Engine</h4>
          <p>
            Weltweit führende Engine gegen Viren und Malware
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
      </dl>
      <dl class="clearfix" data-index="02" data-color="blue">
        <dd class="fl">
          <h4>IObit Anti-Malware-Engine</h4>
          <p>Assistant der Bitdefender-Engine</p>
        </dd>
        <dt class="fr"><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
      </dl>
      <dl class="clearfix" data-index="03" data-color="blue">
        <dd class="fl">
          <h4>IObit Anti-Ransomware-Engine</h4>
          <p>Blockieren von Ransomware-Angriffen</p>
        </dd>
        <dt class="fr paddingtop15"><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <dl data-index="04" data-color="green">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
        <dd>
          <h4>Echtzeitschutz</h4>
          <p>Modernste Virenscanner geben Malware keine Chance</p>
        </dd>
      </dl>
      <dl data-index="05" data-color="green">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
        <dd>
          <h4>Schutz sensibler Daten</h4>
          <p>Ein unbefugter Zugriff ist nicht möglich</p>
        </dd>
      </dl>
    </div>
    <!-- detail-show -->
    <div class="detail-show clearfix">
      <div id="show01" class="showes fl on blue">
        <h5>Bitdefender-Engine</h5>
        <hr>
        <p>Eine umfassende Antiviren-Datenbank, die täglich aktualisiert wird, ermöglicht es Ihnen, diverse Online-Viren zu finden.</p>
      </div>
      <div id="show02" class="showes fl blue">
        <h5>IObit Anti-Malware-Engine</h5>
        <hr>
        <p>Mehr als 209 Millionen Bedrohungen wie Viren, Malware, Spyware und  viele andere können problemlos entfernt werden.</p>
      </div>
      <div id="show03" class="showes fl blue">
        <h5>IObit Anti-Ransomware-Engine</h5>
        <hr>
        <p>Machen Sie sich keine Sorgen um Hacker, die in Ihren Computer eindringen, um Ihre wichtigen Dateien und persönlichen Daten zu verschlüsseln.</p>
      </div>
      <div id="show04" class="showes fl green">
        <h5>Echtzeitschutz</h5>
        <hr>
        <p>
          Gefährliche Cookies und Spuren werden automatisch gelöscht, wenn Sie den Browser schließen. So weiss niemand was Sie im Internet gemacht haben.
        </p>
      </div>
      <div id="show05" class="showes fl green">
        <h5>Schutz sensibler Daten</h5>
        <hr>
        <p>
          Der mehrschichtige Schutz der wichtigen Dateien wurde durch die Kombination des Schutzes sensibler Daten und Safe-Box verstärkt.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper clearfix">
    <!-- h2 -->
    <h2>Praktische Optimierungstools kostenlos erhältlich. Limitierte Anzahl!</h2>
    <!-- sd -->
    <dl class="sd fl">
      <dt><img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"></dt>
      <dd>
        Die Leistung Ihres Computers wird maximiert, indem Sie Systemregister und -dateien defragmentieren.
      </dd>
    </dl>
    <!-- isu -->
    <dl class="isu">
      <dt><img src="<?php echo getStaticUrl('images/gifts-isu.png')?>" alt="IObit Software Updater PRO"></dt>
      <dd>
        All Ihre Programme werden automatisch aktualisiert, um ausnutzbare Sicherheitslücken für Hacker zu vermeiden
      </dd>
    </dl>
  </div>
</div>
<!-- end gifts -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <h2>Wir geben unser Bestes um unsere Kunden zufrieden zustellen,<br> ganz egal wo Sie sich gerade befinden!</h2>
    <div class="content">
      <h3>Bewertungen</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></li>
        <li class="five"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></li>
      </ul>
      <div class="details">
        <div>
          <h4>Peter Stoffers</h4>
          <p>Vor einigen Jahren machte mich jemand auf den IObit Malware Fighter aufmerksam. Anfangs war ich skeptisch, aber nach der Installation wurde es mein lieblings Anti-Malware Programm. Es lässt sich sehr einfach bedienen. Im Laufe der Jahre hat es bereits verschiedene Bedrohungen erkannt und entfernt. Durch das Zusammenspiel mit anderen IObit Programmen, wie beispielsweise dem ASC, habe ich einen guten PC-Schutz. Diese Programme werde ich nun all meinen Freunden und meiner Familie empfehlen.</p>
        </div>
        <div class="active">
          <h4>Software.Informer</h4>
          <p>
            Das Programm verfügt über zwei Antiviren-Maschinen von IObit und Bitdefender und scheint wirksam gegen Malware, die nicht von anderen ähnlichen Tools erkannt werden können. Und es kann zusammen mit Ihren Antivirenprogrammen arbeiten. Es kann eine breite Reihe von Spyware, Ransomware, Adware, Trojaner, Würmer, Keylogger und Bots erkennen.
          </p>
        </div>
        <div>
          <h4>Bob Bassett</h4>
          <p>
            Wir waren es gewöhnt über ein Dutzend verschiedene Programme zu verwenden, damit unsere Maschinen fehlerfrei laufen und um böse Dinge zu verhindern. Um die Sicherheit und Leistung aufrechtzuerhalten, benötigten wir mehrere Stunden pro Woche. Aber mit IObit Malware Fighter Pro und Advanced System Care Pro hat man alles in einem. Jetzt nimmt es uns nur noch wenige Minuten alle paar Tage, um dieselbe Arbeit mit viel mehr Vertrauen zu erledigen. Seitdem wir ihre Produkte nutzen, haben wir keine Probleme mehr.
          </p>
        </div>
        <div>
          <h4>David Cassidy</h4>
          <p>
            Danke, dass Sie Malware Fighter herausgebracht haben, es ist ein großartiges Update, das Sie für Ihre Benutzer erstellt haben. Es ist viel schneller beim Scannen und einfach zu bedienen. Für Leute, die wirklich ein gutes Malware- und Antiviren-Programm wollen, ist IObit Malware Fighter preiswert und die beste Wahl. Ich würde empfehlen, dass alle Leute die beste Software „IObit Malware Fighter“ benutzen.
          </p>
        </div>
        <div>
          <h4>Gelu Batir</h4>
          <p>
            Ich bin sehr zufrieden mit Ihrem Produkt IObit Maleware Fighter. Ich verwende dieses Produkt, da ich mehrere Probleme mit bösartigen Interferenzen hatte. ich konnte keinen ganzen Film oder kein Konzert anschauen, die ich mag. Dank Ihrem Produkt ist jetzt jede Operation klar, sicher und gut geschützt. Es scannt meinen Laptop, ohne seine Leistung zu beeinträchtigen, und ich habe auch zwei meiner Freunde dieses Produkt empfohlen. Ich danke IObit noch einmal!
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>

    <div class="award">
      <h3>Redaktions-Tipp</h3>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
    </div>
  </div>
</div>
<!-- end review -->

<!-- comparison -->
<div class="comparison">
  <!-- h2 -->
  <h2>Ohne Allround-Schutz ist Ihr Computer anfällig!</h2>
  <!-- table -->
  <table>
    <thead>
    <tr>
      <th class="item-a"><p>Ihre aktuelle Version</p></th>
      <th class="item-b"></th>
      <th class="item-c"><p>IObit Malware Fighter 8 PRO</p></th>
    </tr>
    </thead>
    <tbody>
      <!-- 01 -->
      <tr>
        <td class="item-a">9 Millionen</td>
        <td class="item-b">Anti-Malware-Datenbank</td>
        <td class="item-c">Mehr als 209 Millionen</td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Unverfügbar</td>
        <td class="item-b">Bitdefender-Antiviren-Engine</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Unverfügbar</td>
        <td class="item-b">Anti-Ransomware-Engine</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Unverfügbar</td>
        <td class="item-b">Webcam-Schutz</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Unverfügbar</td>
        <td class="item-b">Anti-Verfolgung-Schutz</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Unverfügbar</td>
        <td class="item-b">USB-Stick-Schutz</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Unverfügbar</td>
        <td class="item-b">Passwortschutz für vertrauliche Daten</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Unverfügbar</td>
        <td class="item-b">Echtzeitschutz</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> Unverfügbar</td>
        <td class="item-b">Automatische Aktualisierung</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>  
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- float -->
<div class="float">
  <div class="wrapper clearfix">
    <!-- box -->
    <span class="box fl">IObit Malware Fighter PRO</span>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <!-- price -->
        <p class="price"><big>23</big> <del>117,97€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-imf83pcbun2399&ref=de_imf8bun2399sale2007<?php echo $refStr;?>&refs=de_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfbun2399sale2007-de');">
          <i class="all-icons"></i>
          JETZT SPAREN
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end float -->

<!-- footer -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Hinweis:</dt>
      <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
      <dd>*. Daten können sich system- oder computerabhängig ändern.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. Alle Rechte vorbehalten</p>
  </div>
</div>
<!-- end footer -->

<!-- coupon -->
<div class="coupon">
  <div class="coupon-content hide">
    <!-- close -->
    <a class="close" href="javascript: closeCoupon();">×</a>
    <!-- countdown -->
    <div class="countdown">
      Jetzt nur
      <div class="tens">
        <strong></strong>
      </div>
      <div class="unit">
        <strong></strong>
      </div>
      Stück übrig
    </div>
    <!-- box -->
    <img class="box" src="<?php echo getStaticUrl('images/coupon-imfbundle.png')?>" alt="IObit Malware Fighter PRO">
    <!-- dl -->
    <dl>
      <dd>
        <!-- price -->
        <p class="price"><big>21</big> <big class="black">23</big></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-imf83pcbun2199&ref=de_imf8bun2199sale2007<?php echo $refStr;?>&refs=de_purchase_imf  "
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfbun2199sale2007-de');">
          <i class="all-icons"></i>
          JETZT SPAREN
        </a>
      </dd>
    </dl>

  </div>
</div>
<!-- end coupon -->

<script src="<?php echo $pRootUrl; ?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>