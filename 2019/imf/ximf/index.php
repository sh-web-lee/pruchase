<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('xr_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Sparen Sie bis zu 88% auf IObit Malware Fighter& erhalten Sie ein Geschenkpaket kostenlos!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- container -->
<div class="container">
  <!-- tree -->
  <div class="tree wrapper">
    <span class="tree-l"></span>
    <span class="tree-r"></span>
  </div>
  <!-- end tree -->

  <!-- spree -->
  <div class="spree wrapper">
    <div class="spree-box">
      <p>Nur <b class="packsNum"><?php echo $packsNum?></b> Stück übrig!</p>
      <a class="spree-buy"
         href="https://www.iobit.com/buy.php?product=de-imf73pcsdpf1799&ref=de_imf73pcbundlepurchase201912xr<?php echo $refStr;?>&refs=de_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcbundle1912xr-de');">
      </a>
    </div>
  </div>
  <!-- end spree -->

  <!-- star -->
  <div class="star wrapper">
    <span class="star-l"></span>
    <span class="star-r"></span>
  </div>
  <!-- end star -->
</div>
<!-- end container -->

<!-- main -->
<div class="main wrapper">

  <!-- banner -->
  <div class="banner">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Blitzangebot – Weihnachts-Special </h1>
    <!-- subtitle -->
    <p>Die besten Angebote des Jahres! Bis zu <span>-88%</span></p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-55.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 Jahr, 1 PC</p>
        <dl>
          <dd class="clearfix">
            Reduziert: <span class="fr">20€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>19</b> <del>39,99€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-imf71pc1999&ref=de_imf71pcpurchase201912xr<?php echo $refStr;?>&refs=de_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1pc1912xr-de')"
               data-num="2">
              <i class="all-icons"></i> Jetzt kaufen
            </a>
          </dd>
        </dl>  
      </div>

      <!-- imf-88 -->
      <div class="message large fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-85.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 Jahr, 3 PCs</p>
        <!-- progress -->
        <div class="progress clearfix">
          <div class="progressbar fl clearfix">
            <p class="fr"></p>
          </div>
          <p class="countdown fl">
            <strong>00</strong>D
            <strong>00</strong>H
            <strong>00</strong>M
            <strong>30</strong>S
          </p>
        </div>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            Reduziert: <span class="fr">131,93€</span>
          </dd>
          <dd class="one">
            Weihnachtsgeschenke <i class="all-icons"></i>
            <p class="point">
              Weihnachtsgeschenke beinhalten Smart Defrag PRO, Protected Folder und IObit Software Updater PRO
            </p>
          </dd>
          <dd class="two">
            <p class="price red"><b>17</b> <del>149,92€</del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=de-imf73pcsdpfisu1799&ref=de_imf73pcbundlepurchase201912xr<?php echo $refStr;?>&refs=de_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcbundle1912xr-de')"
               data-num="0">
              <i class="all-icons"></i> Jetzt kaufen
            </a>
            <p class="note"><i class="all-icons"></i><b class="viewNum">321</b> Deals bereits abgeschlossen</p>
          </dd>
        </dl>
      </div>

      <!-- imf-70 -->
      <div class="message small fr">
        <img class="box" src="<?php echo getStaticUrl('images/imf-70.png')?>" alt="IObit Malware Fighter PRO">
        <p>1  Jahr, 3 PCs</p>
        <dl>
          <dd class="clearfix">
            Reduziert: <span class="fr">38€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>21</b> <del>59,99€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-imf73pc2199&ref=de_imf3pcpurchase1912xr<?php echo $refStr;?>&refs=de_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pc1912xr-de')"
               data-num="1">
              <i class="all-icons"></i> Jetzt kaufen
            </a>
          </dd>
        </dl>
      </div>

    </div>
    <!-- payment -->
    <img class="payment" src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
  </div>
  <!-- end banner -->

  <!-- feature -->
  <div class="feature">
    <!-- ball -->
    <div class="ball">
      <span>1</span>
    </div>
    <!-- title -->
    <h2>Nutzen Sie den Schutz<br> von Bitdefender für eine überlegene Internetsicherheit!</h2>
    <p>
      Ausgestattet mit den weltweit führenden Bitdefender Anti-Virus- und Anti-Malware-Einheiten,<br> können <span>über 203 Millionen</span> neue Online-Bedrohungen wie Adware, Viren, Malware, Spyware usw. problemlos von Ihrem<br> PC entfernt werden.
    </p>
    <img src="<?php echo getStaticUrl('images/feature-icons.png')?>" alt="">
  </div>
  <!-- end feature -->

  <!-- intro -->
  <div class="intro">
    <!-- ball -->
    <div class="ball">
      <span>2</span>
    </div>
    <!-- title -->
    <h2>Sie können ebenfalls folgende Vorteile genießen:</h2>
    <img src="<?php echo getStaticUrl('images/intro-adorn.png')?>" alt="">
    <!-- 01 -->
    <dl class="one clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Anti-Ransomware-Einheit</h3>
        <p>
          Machen Sie sich nie wieder Sorgen um Hacker,<br> die in ihren Computer eindringen, umso ihre<br> wichtigen und persönlichen Daten zu verschlüsseln, 
        </p>
      </dd>
    </dl>
    <!-- 02 -->
    <dl class="two clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Sichereres Surfen im Internet</h3>
        <p>
          Automatisches Löschen von Cookies und gefährlichen Pfaden, wenn sie den Webbrowser schließen. Somit wird verhindert, dass Hacker danach suchen können was Sie online lesen, ansehen und kaufen.
        </p>
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="three clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Webcam Schutz</h3>
        <p>
          Jeder Versuch auf ihre Webcam zuzugreifen,<br> wird nur mit ihrem Einverständnis zugelassen,<br> sodass alle unerwünschten Blicke verhindert werden.
        </p>
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="four clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon04.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Geschützte Ordner</h3>
        <p>
          Schützen Sie ihre privaten Ordner und Photos<br> mit einem sicheren Passwort. Niemand kann<br> auf ihre sensitiven Daten zugreifen, ohne ihr Passwort zu kennen. 
        </p>
      </dd>
    </dl>
  </div>
  <!-- end intro -->

  <!-- gifts -->
  <div class="gifts">
    <!-- title -->
    <h2 class="on">Mit unseren kostenlosen Geschenken, sparen Sie mehr Zeit und Mühe.</h2>
    <!-- dl -->
    <div class="content clearfix">
      <!-- iu -->
      <dl class="iu">
        <dt></dt>
        <dd>
          <p class="cost"><del>29,99€</del> <span><big>0</big>€</span></p>
          <p class="detail">
            Defragmentieren Sie ihre Festplatte<br> zügig und automatisch und beschleunigen<br> Sie den Zugang zu Ordnern, 
          </p>
        </dd>
      </dl>
      <!-- pf -->
      <dl class="pf">
        <dt></dt>
        <dd>
          <p class="cost"><del>39,95€</del> <span><big>0</big>€</span></p>
          <p class="detail">
            Ein leistungsstarkes Schutzinstrument,<br> das für den Schutz ihrer Ordner und Dateien sorgt.  
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end gifts -->

  <!-- comparison -->
  <div class="comparison">
    <!-- title -->
    <h2 class="on">Ihr Computer kann ohne ganzheitlichen Schutz angegriffen werden!</h2>
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th class="item-a"><p>Ihre derzeitige Version</p></th>
          <th class="item-b"></th>
          <th class="item-c"><p>IObit Malware Fighter 7 PRO</p></th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="item-a">3 Millionen</td>
          <td class="item-b">Anti-Malware Datenbank</td>
          <td class="item-c">Über 203 Millionen</td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Nicht verfügbar</td>
          <td class="item-b">Bitdefender Anti-Virus Einheit</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Nicht verfügbar</td>
          <td class="item-b">Anti-Ransomware Einheit</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Nicht verfügbar</td>
          <td class="item-b">Webcam Schutz</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Nicht verfügbar</td>
          <td class="item-b">Anti-tracking Schutz</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Nicht verfügbar</td>
          <td class="item-b">USB-Festplattenschutz</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Nicht verfügbar</td>
          <td class="item-b">Sensitive Daten sind geschützt durch ein Passwort</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Nicht verfügbar</td>
          <td class="item-b">Echtzeitschutz</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Nicht verfügbar</td>
          <td class="item-b">Automatisches Update</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
      </tbody>
    </table>
    <!-- subtitle -->
    <h3>Aktivieren Sie IObit Malware Fighter PRO mit einem <span>88%</span>-Rabatt für einen umfassenden Schutz. </h3>
    <!-- imf-88 buybtn -->
    <a class="buybtn red"
       href="https://www.iobit.com/buy.php?product=de-imf73pcsdpfisu1799&ref=de_imf73pcbundlepurchase201912xr<?php echo $refStr;?>&refs=de_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcbundle1912xr-de')">
      <i class="all-icons"></i> Jetzt kaufen
    </a>

  </div>
  <!-- end comparison -->

  <!-- review -->
  <div class="review">
    <h2 class="on">Wir geben unser Bestes um unsere Kunden zufrieden zustellen,<br> ganz egal wo Sie sich gerade befinden!</h2>
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
            Danke, dass Sie Malware Fighter V6 herausgebracht haben, es ist ein großartiges Update, das Sie für Ihre Benutzer erstellt haben. Es ist viel schneller beim Scannen und einfach zu bedienen. Für Leute, die wirklich ein gutes Malware- und Antiviren-Programm wollen, ist IObit Malware Fighter preiswert und die beste Wahl. Ich würde empfehlen, dass alle Leute die beste Software „IObit Malware Fighter“ benutzen.
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
  </div>
  <!-- end review -->

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">Machen Sie ihrem Computer die besten Weihnachtsgeschenke</h2>
    <!-- box -->
    <div class="box fl">
      <img class="on" src="<?php echo getStaticUrl('images/bottombuy-imf-bundle.png')?>" alt="IObit Malware Fighter PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-imf.png')?>" alt="IObit Malware Fighter PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-imf.png')?>" alt="IObit Malware Fighter PRO">
    </div>
    <!-- ul -->
    <ul class="fl">
      <li class="active top">1 Jahr, 3 PCs + Geschenkpaket</li>
      <li class="mid">1 Jahr, 3 PCs</li>
      <li class="bot">1 Jahr, 1 PC</li>
    </ul>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price"><b>17</b> <del>129,93€</del></p>
      </dd>
      <dd>
        <a class="buybtn small"
           href="https://www.iobit.com/buy.php?product=de-imf73pcsdpfisu1799&ref=de_imf73pcbundlepurchase201912xr<?php echo $refStr;?>&refs=de_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcbundle1912xr-de')">
          <i class="all-icons"></i> Jetzt kaufen
        </a>
      </dd>
    </dl>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>
          <h3>Zufriedenheitsgarantie</h3>
          <p>60-Tage-Geld-zurück-Garantie</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/verified.png')?>" alt=""/></dt>
        <dd>
          <h3>Zahlungssicherheit</h3>
          <p>Ihre Zahlung ist 100% sicher</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/buycut.png')?>" alt=""/></dt>
        <dd>
          <h3>Schnelle Aktivierung</h3>
          <p>Kurz nach dem Kauf erhalten Sie einen Aktivierungscode.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dt>
        <dd>
          <h3>Kundendienst</h3>
          <p>Kostenloser technischer Support 24/7</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Notiz:</dt>
        <dd>
          *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
        </dd>
        <dd>*. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
        <dd>*. Smart Defrag PRO /Protected Folder/ IObit Software Updater PRO unterstützt 1 Jahr / 1 PC.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
  </div>
  <!-- end footer -->

</div>
<!-- end main -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>