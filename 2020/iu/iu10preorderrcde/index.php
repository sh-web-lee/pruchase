<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'deiujunerc_p' . $date;
  $c_name_t='deiujunerc_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(50,79);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['user'])?'':('-u'.$_GET['user']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Zahlen Sie 0 €, um IObit Uninstaller 10 PRO zu erhalten</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- container start -->
<div class="container">
  <!-- banner start -->
  <div class="banner" data-name="animation">
    <div class="wrapper">
      <!-- top -->
      <div class="top clearfix">
        <!-- logo -->
        <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
        <div class="record-box">
          <i></i>
          Willkommen zu unserem Vorverkauf
        </div>
        <!-- icon -->
        <div class="icon"><img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""> IObit Uninstaller 10</div>
      </div>
      <!-- content -->
      <div class=" content clearfix">
        <!-- left-img -->
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iu-box" data-name="default">
          <img src="<?php echo getStaticUrl('images/banner-icon01.png')?>" alt="" class="iu-icon01" data-name="default">
          <img src="<?php echo getStaticUrl('images/banner-icon02.png')?>" alt="" class="iu-icon02" data-name="default">
        </div>
        <!-- right -->
        <div class="right fr">
          <h1 data-name="default">Holen Sie sich IObit Uninstaller Pro</h1>
          <h2 data-name="default">für 0€</h2>
          <h3 data-name="default">Begrenzt auf die ersten 500 Kunden pro Tag bis zum 25 August</h3>
          <!-- number -->
          <div class="number" data-name="default">
            <div id="reduce" class="reduceNum">
              <div class="listbox"><span class="list"><b>0</b></span></div>
              <div class="listbox"><span class="list"><b>5</b></span></div>
              <div class="listbox"><span class="list"><b>0</b></span></div>
            </div>
            von 500 Stück übrig 
            <div class="bar">
              <span></span>
            </div>
          </div>
          <!-- message -->
          <div class="price" data-name="default">
            <!-- price -->
            <strong>0€<sup>*</sup></strong>
            <!-- buybtn -->
            <a class="buybtn"
              href="https://www.iobit.com/buy.php?product=de-iu10preorder&ref=de_iu10preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_iu"
              onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderrc-de');">
              Jetzt vorbestellen
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <!-- title -->
      <h2>Entfernen von unerwünschten Programmen und Datenresten <br> IObit Uninstaller 10 PRO macht Deinstallation einfacher, sauberer and sicherer. </h2>
      <!-- content -->
      <div class="content">
        <!-- feature-nav -->
        <ul class="feature-nav" id="barUl">
          <li class="active one">Einfacher </li>
          <li class="two">Sauberer</li>
          <li class="three">Sicherer</li>
        </ul>
        <!-- feature-container -->
        <div class="feature-container clearfix">
          <!-- interface -->
          <div class="interface-list fl">
            <!-- Easier -->
            <div class="interface easier">
              <span>Deinstallieren</span>
              <ul>
                <li class="act05"><img src="<?php echo getStaticUrl('images/feature-easier-icon05.png')?>" alt=""></li>
                <li class="act04"><img src="<?php echo getStaticUrl('images/feature-easier-icon04.png')?>" alt=""></li>
                <li class="act03"><img src="<?php echo getStaticUrl('images/feature-easier-icon03.png')?>" alt=""></li>
                <li class="act02"><img src="<?php echo getStaticUrl('images/feature-easier-icon02.png')?>" alt=""></li>
                <li class="act01"><img src="<?php echo getStaticUrl('images/feature-easier-icon01.png')?>" alt=""></li>
              </ul>
            </div>

            <!-- Cleaner -->
            <div class="interface cleaner">
              <span></span>
              <div class="picture"><span></span></div>
              <div class="xprogress"><span></span></div>
            </div>

            <!-- Safer -->
            <div class="interface safer">
              <ul>
                <li class="act one">
                  Malicious Toolbars and Plugs-ins
                </li>
                <li class="act two">
                  Ad-based Toolbars and Plug-ins
                </li>
                <li class="three">
                  Trusted Toolbars and Plug-ins
                </li>
              </ul>
            </div>
          </div>

          <!-- details -->
          <div class="detail-list fr" id="wheelUl">
            <!-- one -->
            <div class="detail">
              <h3>Deinstallieren Sie alle Programme,Plugins und Windows-Apps</h3>
              <ul>
                <li class="one">Programme die mit konventionellen Mitteln nicht löschbar sind.</li>
                <li class="two">Programme von Dritten, die mit der Installation von Programmen installiert wurden.</li>
                <li class="three">Browsererweiterungen die ohne ihre Zustimmung installiert wurden.</li>
                <li class="four">Vorinstallierte Windows 10 Apps die sonst nicht deinstallierbar sind.</li>
              </ul>
            </div>

            <!-- two -->
            <div class="detail">
              <h3>Beseitigen Sie Dateireste von deinstallierten Programmen</h3>
              <ul>
                <li class="one">Übriggebliebene Dateien standardmäßiger Deinstallation</li>
                <li class="two">Überreste bereits deinstallierter Programme</li>
                <li class="three">Dateien und Register die mit einer Standarddeinstallation nicht entfernbar sind.</li>
              </ul>
            </div>

            <!-- three -->
            <div class="detail">
              <h3><br>Reduzierung von Sicherheitsrisiken</h3>
              <ul>
                <li class="one">Identifizierung von gefährlichen Plug-ins.</li>
                <li class="two">Aktualisierung von Software um Sicherheitslücken zu schließen.</li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <h2>Versionsvergleich</h2>
      <!-- table -->
      <table>
        <thead>
          <tr>
            <th colspan="2"></th>
            <th class="free" valign="bottom"><div>Ihre aktuelle Version</div></th>
            <th class="pro"><div>PRO Edition</div></th>
          </tr>
        </thead>
        <tbody>
          <!-- 01 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
            <td class="text">Deinstallieren von Programmen,Plug-ins und Apps mit nur einem Klick  </td>
            <td class="free"><i class="all-icons yes">√</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 02 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
            <td class="text">Scannen von Dateiüberresten standardmäßiger Deinstallation</td>
            <td class="free"><i class="all-icons yes">√</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 03 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
            <td class="text">Gründliche Bereinigung von Dateien die mit einer standardmäßigen Deinstallation nicht entfernbar sind </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 04 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
            <td class="text">Beseitigen von Programmen die mit normalen Mitteln nicht deinstalliert werden können </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 05 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
            <td class="text">Deinstallieren von Programmen, die mit der Installation anderer Programme einhergehen</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 07 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></td>
            <td class="text">Automatische Bereinigung von Überresten von bereits deinstallierten Programmen  </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 08 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></td>
            <td class="text">Identifizierung von gefährlichen Plug-ins und Werbe-Plug-ins  </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 09 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></td>
            <td class="text">Aktualisierung von wichtiger Software mit nur einem Klick  </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 10 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></td>
            <td class="text">Aktualisiert sich automatischer auf die neueste Version </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 11 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""></td>
            <td class="text">24/7 technischer Premiumsupport auf Anfrage  </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
        </tbody>
      </table>
      <!-- buybtn -->
      <div>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-iu10preorder&ref=de_iu10preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderrc-de');">
          <span>Pro kaufen für 0€</span>
        </a>
      </div>
    </div>
  </div>
  <!-- comparison end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Praktisches Deinstallationsprogramm</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
        <dd>
          <h3>50M+</h3>
          <p>Downloads</p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
        <dd>
          <h3>4.5+</h3>
          <p>Benutzerbewertung</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
        <dd>
          <h3>1000+</h3>
          <p>positive Rezensionen</p>
        </dd>
      </dl>
      <div class="review-box">
        <div class="box">
          <h3>Kundenbewertung</h3>
          <p>Ich benutze den IObit Uninstaller schon eine lange Zeit und ich kann mich nicht beklagen. Es hat das erste Mal als ich es benutzt habe bereits gut funktioniert aber verbessert wurde er über die Jahre trotzdem, was auch letztlich der Grund war, warum ich dieses Programm bereits so lange nutze. Ich kann dieses Produkt jedem weiterempfehlen der Schwierigkeiten damit hat Programme komplett zu deinstallieren ohne, dass Datenreste auf dem Computer verbleiben.</p>
        </div>
        <div class="box">
          <h3>Kundenbewertung</h3>
          <p>Ich bin echt froh, dass ich dieses Programm gefunden habe, weil mein Computer war sehr langsam und ich dachte, es liegt daran da er vielleicht alt ist. Mein Kumpel hat mir dann aber gesagt, dass der Grund  auch sein kann, dass sich zu viele Daten von deinstallierten Programmen  auf meinem Computer befinden. Er hatte recht. Nachdem ich mit IObit Uninstaller Programme deinstalliert habe, von denen ich nichts mehr wusste und andere Programme, die ich eigentlich schon deinstalliert habe, komplett vom Computer entfernen konnte hat sich die Computergeschwindigkeit deutlich verbessert. Ich kann mich bei IObit nur bedanken. Vielen Dank.</p>
        </div>
        <div class="box active">
          <h3>Media Review</h3>
          <p>
            Die Pro-Version beinhaltet alle Funktionen der Freeware und kommt mit einigen praktischen Zusatz-Features. So kann die Vollversion beispielsweise auch gebündelte Programme oder Plugins entfernen und alle Ihre wichtigen Programme mit nur einem Klick auf die neueste Version updaten.
          </p>
        </div>
        <div class="box">
          <h3>Kundenbewertung</h3>
          <p>Ich habe in der Vergangenheit mehrere Deinstallationsprogramme verwendet. Nachdem ich IOBit  (Version 7.0) benutzt habe, habe ich kein anderes Programm mehr benutzt. Es hat eine einfach zu bedienende Benutzeroberfläche und erledigt alles sehr schnell und effektiv. Es hilft Ihnen, die Registrierungsdaten automatisch zu bereinigen und somit die Computerperformance auf einem guten Level zu halten. Die Fähigkeit, Bundleware zu identifizieren und zu entfernen, ist eine großartige Funktion in IOBit, die unübertroffen ist.</p>
        </div>
        <div class="box">
          <h3>Kundenbewertung</h3>
          <p>Der IObit Uninstaller findet Plugins in meinen Browsern, von denen ich nicht einmal wusste, dass sie existieren. Die Bereinigung von Restdateien ist sehr gut. Es bleiben keine Datenreste von deinstallierten Programmen übrig. Es erinnert mich außerdem an die verfügbaren Updates für alle meine Programme. Insgesamt hat sich die Leistung meines Computers dadurch verbessert. Es ist sehr bequem und leicht zu handhaben. Ich habe das sogar meinen Freunden empfohlen.</p>
        </div>
      </div>
      <ul>
        <li>
          <span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
          <p>Ivan White</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></span>
          <p>Ali Tekin</p>
        </li>
        <li class="active">
          <span><img src="<?php echo getStaticUrl('images/chip-de.png')?>" alt="Chip.de"></span>
          <p>Chip.de</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></span>
          <p>Samrat Kumar Chakrabortty</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></span>
          <p>John Glenn Perong</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper">
      <h2>Weltweite Auszeichnungen</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- service end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <dl class="annotation">
        <dt>Hinweis:</dt>
        <dd>
          *.Nach Ablauf der 30-tägigen Testphase wird Ihre Kreditkarten- oder PayPal-Konto automatisch mit 18,99€ belastet. Der Rabatt i.H.v. 52% auf den ursprünglichen Preis von 39,95 € gilt nur für Vorbestellungen!
        </dd>
        <dd>*.Wenn Sie mit unserem Produkt nicht zufrieden sind, können Sie die Bestellung innerhalb von 30 Tagen kostenfrei stornieren.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
  </div>
  <!-- bottom end -->
</div>
<!-- container end -->


<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
      IObit Uninstaller 10
    </div>
    <div class="number fl">
      <div id="fReduce" class="reduceNum">
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
      </div>
      Stück übrig
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>