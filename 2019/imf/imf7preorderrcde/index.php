<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(115,156);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='deimfpre'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 48;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit;
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Für 0€ die neue IObit Malware Fighter PRO vorbestellen</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
      <h1>Willkommen bei unserem Vorverkauf</h1>
      <p class="fast">Täglich stehen 2.000 Lizenzen zur Verfügung, seien Sie schnell</p>
      <div class="clearfix">
        <div class="left-img"><span></span></div>
        <div class="right-message">
          <h2>IObit Malware Fighter 7 PRO</h2>
          <div class="progress">
            <p><strong class="packnum">*</strong> jetzt verfügbar, <strong class="buyNum">*</strong> schon verkauft!</p>
            <div class="bar">
              <span class="box"><span><span class="disappear"></span></span></span>
            </div>
          </div>
          <p class="price">
            Jetzt: <strong><b>0</b>€</strong> <del>59,95€</del>
          </p>
          <!-- buybtn -->
           <a class="buybtn"
              href="https://www.iobit.com/buy.php?product=de-imf7preoder&ref=de_imf7preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_imf"
              onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderrc-de');">
             <span>Jetzt vorbestellen</span>
           </a>
        </div>
      </div>
      <dl class="step clearfix">
        <dd>
          Falls Sie zufrieden sind, bekommen Sie 63% Rabatt auf den <br>
          originalen Preis, wenn Sie 30 Tage nach der Vorbestellung kaufen
        </dd>
        <dd class="middle">0€ Vorbestellung heute</dd>
        <dd>
          Wenn Sie nicht zufrieden sind, können Sie <br>
          innerhalb von 30 Tagen kostenlos stornieren
        </dd>
      </dl>
    </div>
    
  </div>
  <!-- end banner -->

  <!-- feature -->
  <div class="feature">
    <div class="wrapper">
      <h2>Warum auf IObit Malware Fighter 7 Pro upgraden?</h2>
      <h3>Tolle Pro Funktionen steigern die Sicherheit ihres PCs</h3>
      <dl class="list01">
        <dt>Neueste Bitdefender Engine</dt>
        <dd>
          Mit dem neuesten Bitdefender Werkzeug <br>
          können <span>200.000.000+</span> Bedrohungen wie <br>
          Viren, Malware, Spyware etc. von ihrem <br>
          PC fern gehalten werden
        </dd>
      </dl>
      <dl class="list02">
        <dt>Sichere und passwortgeschützte</dt>
        <dd>
          Wichtige Dateien können von anderen abgeschottet <br>
          und passwortgeschützt werden.
        </dd>
      </dl>
      <dl class="list03">
        <dt>Keine Ransomware Angriffe</dt>
        <dd>
          Machen Sie sich keine Sorgen um Angriffe auf <br>
          ihrem PC und die Entschlüsselung von <br>
          wichtigen und persönlichen Daten
        </dd>
      </dl>
      <dl class="list04">
        <dt>Sicheres Online Surfen</dt>
        <dd>
          Cookies und Verläufe werden automatisch <br>
          gelöscht, damit Sie online nicht verfolgt werden <br>
          und ihre Privatsphäre geschützt wird.
        </dd>
      </dl>

      <img src="<?php echo getStaticUrl('images/feature-imgbox.png')?>" alt="" class="img-box">
    </div>
  </div>
  <!-- end feature -->

  <!-- compar-tab -->
  <div class="compar-tab">
    <div class="wrapper">
      <h2>Mehr PRO Funktionen bieten einen umfassenden Schutz für ihren PC</h2>
      <table border="0" cellspacing="0" cellpadding= "0" width="100%">
        <thead>
          <tr>
            <th class="itema"></th>
            <th class="space"></th>
            <th class="itemb"><span>Was Sie haben</span></th>
            <th class="space"></th>
            <th class="itemc">Was PRO anbietet</th>
          </tr>
        </thead>
        <tbody>
          <tr class="protection">
            <td colspan="5">PC Schutz</td>
          </tr>
          <tr>
            <td class="itema">Anti-Malware Datenbank</td>
            <td class="space"></td>
            <td class="itemb">3.000.000</td>
            <td class="space"></td>
            <td class="itemc">203.000.000</td>
          </tr>
          <tr>
            <td class="itema">Echtzeitschutz</td>
            <td class="space"></td>
            <td class="itemb size14">Basic</td>
            <td class="space"></td>
            <td class="itemc size14">Umfassend</td>
          </tr>
          <tr>
            <td class="itema">Höhere Erkennunsrate mit doppelten Engines</td>
            <td class="space"></td>
            <td class="itemb">-</td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr>
            <td class="itema">Schutz vor USB Viren</td>
            <td class="space"></td>
            <td class="itemb">-</td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr>
            <td class="itema">Automatische Aktualisierung der Datenbank</td>
            <td class="space"></td>
            <td class="itemb">-</td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr class="protection">
            <td colspan="5">Datenschutz</td>
          </tr>
           <tr>
            <td class="itema">Stopp von Ransomware</td>
            <td class="space"></td>
            <td class="itemb">-</td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr>
            <td class="itema">Passwortgeschützte Dateien</td>
            <td class="space"></td>
            <td class="itemb">-</td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr class="protection">
            <td colspan="5">Schutz beim Surfen</td>
          </tr>
          <tr>
            <td class="itema">Blockieren von gefährlichen Webseiten und Werbung</td>
            <td class="space"></td>
            <td class="itemb"><i></i></td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr>
            <td class="itema">Keine gefährlichen heruntergeladenen Dateien</td>
            <td class="space"></td>
            <td class="itemb"><i></i></td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr>
            <td class="itema">Stoppt gefährliche online Verfolgung</td>
            <td class="space"></td>
            <td class="itemb">-</td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- end compar-tab -->

  <!-- between-buy -->
  <div class="between-buy wrapper">
    <h2>Aktivieren Sie alle Pro Funktionen für einen starken Schutz </h2>
    <p class="price">
      Jetzt: <strong><b>0</b>€</strong> <del>59,95€</del>
    </p>
    <!-- buybtn -->
     <a class="buybtn"
        href="https://www.iobit.com/buy.php?product=de-imf7preoder&ref=de_imf7preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_imf"
        onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderrc-de');">
       <span>Jetzt vorbestellen</span>
     </a>
     <p class="last"><strong class="packnum">*</strong> jetzt verfügbar, <strong class="buyNum">*</strong> schon verkauft!</p>
  </div>
  <!-- end between-buy -->

  <!-- review -->
  <div class="review wrapper">
    <h2>Was andere Nutzer und Medien dazu sagen</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>Das Programm verfügt über zwei Antiviren-Maschinen von IObit und Bitdefender und scheint wirksam gegen Malware, die nicht von anderen ähnlichen Tools erkannt werden können. Und es kann zusammen mit Ihren Antivirenprogrammen arbeiten. Es kann eine breite Reihe von Spyware, Ransomware, Adware, Trojaner, Würmer, Keylogger und Bots erkennen.</p>
              <cite>Software.Informer</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>Wir waren es gewöhnt über ein Dutzend verschiedene Programme zu verwenden, damit unsere Maschinen fehlerfrei laufen und um böse Dinge zu verhindern. Um die Sicherheit und Leistung aufrechtzuerhalten, benötigten wir mehrere Stunden pro Woche. Aber mit IObit Malware Fighter Pro und Advanced System Care Pro hat man alles in einem. Jetzt nimmt es uns nur noch wenige Minuten alle paar Tage, um dieselbe Arbeit mit viel mehr Vertrauen zu erledigen. Seitdem wir ihre Produkte nutzen, haben wir keine Probleme mehr.</p>
              <cite>Bob Bassett</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>Vor einigen Jahren machte mich jemand auf den IObit Malware Fighter aufmerksam. Anfangs war ich skeptisch, aber nach der Installation wurde es mein lieblings Anti-Malware Programm. Es lässt sich sehr einfach bedienen. Im Laufe der Jahre hat es bereits verschiedene Bedrohungen erkannt und entfernt. Durch das Zusammenspiel mit anderen IObit Programmen, wie beispielsweise dem ASC, habe ich einen guten PC-Schutz. Diese Programme werde ich nun all meinen Freunden und meiner Familie empfehlen.</p>
              <cite>Peter Stoffers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>Ich bin sehr zufrieden mit Ihrem Produkt IObit Maleware Fighter. Ich verwende dieses Produkt, da ich mehrere Probleme mit bösartigen Interferenzen hatte. ich konnte keinen ganzen Film oder kein Konzert anschauen, die ich mag. Dank Ihrem Produkt ist jetzt jede Operation klar, sicher und gut geschützt. Es scannt meinen Laptop, ohne seine Leistung zu beeinträchtigen, und ich habe auch zwei meiner Freunde dieses Produkt empfohlen. Ich danke IObit noch einmal!</p>
              <cite>Gelu Batir</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/dave-cassidy.png')?>" alt="David Cassidy"></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>Danke, dass Sie Malware Fighter V6 herausgebracht haben, es ist ein großartiges Update, das Sie für Ihre Benutzer erstellt haben. Es ist viel schneller beim Scannen und einfach zu bedienen. Für Leute, die wirklich ein gutes Malware- und Antiviren-Programm wollen, ist IObit Malware Fighter preiswert und die beste Wahl. Ich würde empfehlen, dass alle Leute die beste Software „IObit Malware Fighter“ benutzen.</p>
              <cite>David Cassidy</cite>
            </dd>
          </dl>                 
        </div>               
    </div>
  </div>
  <!-- end review -->

  <!-- bottom -->
  <div class="bottom">
      <div class="award wrapper ">
        <h2>Weltweite Auszeichnungen</h2>
        <p>Da das Programm in den letzten 6 Jahren von weltweiten Medien ausgezeichnet wurde, haben Sie sicher den richtigen PC-Schutz.</p>
        <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>
    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Risikofrei tesen – mit unserer 60 Tage Geld-zurück-Garantie</h4>
          <p>
            Wir sind stolz darauf, dass Ihnen die Aktivierung der Pro Version für einen angemessenen Preis einen umfassenden PC-Schutz liefert.
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
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dd>* Nach der 30 tägigen kostenlosen Version wird ihre Kreditkarte oder ihr Paypal Konto automatisch iHv 21,99€ belastet.</dd>
      <dd>Der Rabatt von 63% auf den Originalpreis 59,95€ gilt nur für Vorbestellungen!</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
  </div>




  <!-- float -->
  <div class="float-right">
    <span class="viewNum"><?php echo $viewNum;?></span> Personen sind gerade auf <br> dieser Seite!
  </div>
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"><img src="<?php echo getStaticUrl('images/fl-imf-box.png')?>" alt=" IObit Malware Fighter 7 PRO"></div>
      <div class="progress">
        <p><strong class="packnum">*</strong> jetzt verfügbar, <strong class="buyNum">*</strong> schon verkauft!</p>
        <div class="bar">
          <span class="box"><span><span class="disappear"></span></span></span>
        </div>
      </div>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=de-imf7preoder&ref=de_imf7preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderrc-de');">
        <span>Jetzt vorbestellen - 0€</span>
      </a>
    </div>
  </div>
  <div class="pop-over ">
    <h2>OOPS! Sie haben unseren 0€ Vorverkauf verpasst!</h2>
    <h3>Lassen Sie sich <strong><b>65%</b> Rabatt</strong> nicht auch noch entgehen</h3>
    <img src="<?php echo getStaticUrl('images/pop-img-box.png')?>" alt=" IObit Malware Fighter 7 PRO" class="img-box">
    <div class="message">
       <p><strong><b>20</b>,99€</strong> <del>59,95€</del></p>
       <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-imf7preoderpop&ref=de_imf7preorderrcpop<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderrcpop-de');">
         <span>Jetzt vorbestellen</span>
      </a>
      <p class="last">1 Jahresabo / 3 PCs</p>
    </div>
   
  </div>
  <div class="pop-bg "><span class="close">X</span></div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>