<?php
ob_start();
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
include $pRootUrl . 'callback.php';

function get_line($file, $line)
{
  $fp = fopen($file, 'r');
  $i = 0;
  while (!feof($fp)) {
    $i++;
    $c = fgets($fp);
    if ($i == $line) {
      return $c;
      break;
    }
  }
}
$name=explode(' ',trim(get_line('data/names_xms.txt',rand(1,40))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  ob_get_clean();
  $date = $_GET['d'];
  $c_name = 'dedbxmas' . $date;
  if (!isset($_COOKIE[$c_name])) {
    if($_GET['pageView']==1){
      $packsNum=3;
    }else {
      $packsNum = 49;
    }
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 0, time() + 3600 * 24);
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
      if (rand(1, 100) % 2 == 0) {
        $packsNum++;
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName));
  exit;
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
    'garegion','dbofficialfree','dbofficialpro','purchase-35','purchase-36','crpro_1','crpro_2'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('xr_dbe'))){
  $refStr.='-'.$_GET['pop'];
}
if($_GET['to']=='purchase-6'){
  if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    if(count($matches[1])>=2){
      $refStr.='-'.$matches[1][0].$matches[1][1];
    }
  }
}
if(in_array($_GET['pop'],array('x_db'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['ref'],array('de_ncdb6'))){
  $refStr.='-'.$_GET['ref'];
}
$reduceNum=152813229;
$reTime=10;
//$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$packsCount = 212;
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie bis zu 87% auf DriverBooster& erhalten Sie Ihre Weihnachtsgeschenke kostenlos!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?> 
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>
        Weihnachtssale - täglich stehen nur <b>300</b> Pakete zur Verfügung
      </h1>
      <p>Spare bis zu 87% auf DB PRO und erhalte extra ein nützliches Geschenkpaket gratis! </p>

      <div class="offer left">
        <div class="discount small"><b>63€ <small>sparen</small></b></div>
        <img src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Jahr, 3 PCs</p>
          <p><strong>26,99€</strong> UVP  <del>89,99€</del></p>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=de-db73pc2699&ref=de_db73pcpurchase1912ep<?php echo $refStr; ?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc1912ep-de')">
            <i class="all-icons"></i>
            <span>Jetzt kaufen</span>
          </a>
        </div>
      </div>

      <div class="offer center">
        <div class="gift">
          <i class="all-icons"></i> Heute nur <b class="reduceNum giftnum"><span>58</span></b> Deals übrig
        </div>
        <div class="discount">
          <strong>-87%</strong>
          <b>160,84€ <small>sparen</small></b>
        </div>
        <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Jahr, 3 PCs</p>
          <p><strong>22,99€</strong> UVP  <del>183,83€</del></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=de-db73pciusdpf2299&ref=de_db73pcbundlepurchase1912ep<?php echo $refStr; ?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcbundle1912ep-de')">
            <i class="all-icons"></i>
            Jetzt kaufen
          </a>
        </div>
        <p class="people">Von <b class="packsCount"><?php echo $packsCount;?></b> Personen gekauft</p>
      </div>

      <div class="offer right">
        <div class="discount small"><b>80€ <small>sparen</small></b></div>
        <img src="<?php echo getStaticUrl('images/db-five-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Jahr, 5 PCs</p>
          <p><strong>29,99€</strong> UVP  <del>109,99€</del></p>
          <a class="buybtn small"
             href="http://www.iobit.com/buy.php?product=de-db75pc2999&ref=de_db75pcpurchase1912ep<?php echo $refStr; ?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase5pc1912ep-de')">
            <i class="all-icons"></i>
            <span>Jetzt kaufen</span>
          </a>
        </div>
      </div>

    </div>
  </div>
  <!-- banner end -->

  <div class="main">
    <!-- feature start -->
    <div class="feature wrapper">
      <h2>Warum Driver Booster PRO wählen?</h2>
      <p><img src="<?php echo getStaticUrl('images/win10.png')?>" alt=""/> Mit Windows 10 kompatibel</p>
      <div class="clearfix panel">
        <div class="list one">
          <span class="icons01"><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Über 3.500.000 Treiber updaten <b>Verbessert</b></h3></dt>
            <dd>
              Erkennt und aktualisiert 3.500.000 fehlerhafte, fehlende <br>oder seltene Treiber für alle Ihre Hardwaregeräte.
            </dd>
          </dl>
        </div>
        <div class="list two on">
          <span class="icons02"><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Spielleistung verbessern <b class="green">Neu</b></h3></dt>
            <dd>
              Beendet alle unnötigen Prozesse mit 1 Klick, <br>um RAM freizugeben und die Spieleleistung <br>dramatisch zu verbessern.
            </dd>
          </dl>
        </div>
        <div class="list three">
          <span class="icons03"><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Game Ready-Treiber <b class="green">Neu</b></h3></dt>
            <dd>
              Game Ready-Treiber ist sofot verfügbar nach der <br>Veröffentlichung, um die Leistung zu erhöhen, Bugs <br>zu beheben und das Spielerlebnis zu verbessern.
            </dd>
          </dl>
        </div>
        <div class="list four">
          <span class="icons04"><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Gerätefehler schnell beheben <b>Verbessert</b></h3></dt>
            <dd>
              Repariert Gerätefehler schnell mit nur 1 Klick, um die <br>PC-Leistung nicht zu beeinträchtigen.
            </dd>
          </dl>
        </div>
        <div class="imgbox">
          <ul>
            <li><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></li>
            <li class="two"><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></li>
            <li><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></li>
            <li class="four"><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- comparison -->
    <div class="comparison wrapper" id="compare">
      <!-- title -->
      <h2 class="on">
        Beheben Sie die Treiberprobleme, <br>
        die Ihren PC beeinträchtigen
      </h2>
      <!-- table -->
      <table>
        <thead>
        <tr>
          <th><p>PC-Probleme<span>, auf die Sie stoßen können:</span></p></th>
          <th><p>Lösungen<span>, die Sie erneut haben können:</span></p></th>
        </tr>
        </thead>
        <tbody>
        <!-- 01 -->
        <tr>
          <td>
            Manuelle Updates können dazu führen, dass wichtige <br>
            Updates <b>übersehen</b> werden
          </td>
          <td>
            Updaten Sie die Software automatisch und halten Sie alle <br>
            Treiber <b class="black">aktuell</b>
          </td>
        </tr>
        <!-- 02 -->
        <tr>
          <td>
            <b>Begrenzte</b> Download-Geschwindigkeit erfordert eine <br>
            längere Zeit zum Herunterladen der einzelnen Treiber
          </td>
          <td>
            <b class="black">Maximale Download-Geschwindigkeit</b> zum <br>
            Herunterladen von Treibern in nur wenigen Minuten
          </td>
        </tr>
        <!-- 03 -->
        <tr>
          <td>
            Die <b>verkleinerte</b> Treiberdatenbank erfüllt möglicherweise <br>
            nicht alle Anforderungen Ihrer Geräte
          </td>
          <td>
            Die um 40% <b class="black">erweiterte</b> Treiberdatenbank deckt 99%* <br>
            Ihrer Anforderungen ab
          </td>
        </tr>
        <!-- 04 -->
        <tr>
          <td>
            Ein <b>komplizierter</b> manueller Sicherungsvorgang nimmt <br>
            viel Zeit in Anspruch
          </td>
          <td>
            Die automatische Sicherung <b class="black">verdoppelt die Sicherheit</b> <br>
            Ihres Updates
          </td>
        </tr>
        <!-- 05 -->
        <tr>
          <td>
            Veraltete Spielkomponenten können zu einer <b>schlechten</b> <br>
            Spielleistung führen
          </td>
          <td>
            Exklusive, seltene und aktuelle Spielkomponenten sorgen <br>
            für ein <b class="black">fantastisches</b> Spielerlebnis
          </td>
        </tr>
        <!-- 06 -->
        <tr>
          <td>
            <b>Keine bevorzugten Updates</b> der aktuellen und exklusiven <br>
            Treiber einschließlich Game Ready-Treiber
          </td>
          <td>
            Seien Sie immer der Erste, der die neuesten und <br>
            <b class="black">exklusiven</b> Treiber erhält
          </td>
        </tr>
        </tbody>
      </table>
    </div>
    <!-- end comparison -->

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper clearfix">
        <h2>Der neue Driver Booster 7 PRO <br> kann viel mehr als Sie denken!</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
          <dd>
            <h3>3.500.000+</h3>
            <p>
              PC-Treiber werden unterstützt
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
          <dd>
            <h3>20% MEHR</h3>
            <p>
              Komponenten werden unterstützt
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
          <dd>
            <h3>20% SCHNELLERES</h3>
            <p>
              Treiber-Scan
            </p>
          </dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
          <dd>
            <h3>KEINE BENACHRICHTIGUNGEN</h3>
            <p>
              von Driver Booster wenn Ihr PC im Vollbildmodus arbeitet
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

    <!-- review start -->
    <div class="review wrapper">
      <div class="review-list">
        <dl class="active">
          <dt><h2>Media Review</h2></dt>
          <dd>
            <h3>„Automatische Treiberdownloads gibt es nur in der kostenpflichtigen Pro-Version.“</h3>
            <p>
              „Damit es keine unschönen Überraschungen gibt, legt der "IObit Driver Booster Pro" zuvor einen Wiederherstellungspunkt an. Hat bei einer Treiber-Installation einmal etwas nicht geklappt, erlaubt die neue "Roll Back"-Funktion die einfache Rückkehr zu einer älteren Treiber-Version. Neben schnelleren Downloadleitungen bietet der Hersteller eine breitere Hardware-Unterstützung und eine Backup-Funktion bei der erweiterten Pro-Version der Software an.“
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>User Review</h2></dt>
          <dd>
            <h3>"Mein PC ist schneller, sicherer und fühlt sich neuer an als noch vor 8 Monaten."</h3>
            <p>
              "Das ist eines der besten Programme, um Treiber zu aktualisieren. Microsoft hat mir sogar Updates vorgeschlagen, die nicht auf meinem System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche, und hat sie ohne Fehler installiert. Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>User Review</h2></dt>
          <dd>
            <h3>"Ich kann Driver Booster nur dringendst empfehlen, er wird euch dabei helfen, Updates und Treiber schnell und einfach zu updaten."</h3>
            <p>
              „Driver Booster ist eine großartige Anwendung. Für jemanden, der viele Anwendungen und Treiber besitzt, aber nicht die Zeit dafür hat diese manuell zu aktualisieren, kann Driver Booster nur dringendst empfehlen, er wird Euch dabei helfen, Updates und Treiber schnell und einfach zu updaten.“
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>User Review</h2></dt>
          <dd>
            <h3>"Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"</h3>
            <p>
              "Das ist eines der besten Programme, um Treiber zu aktualisieren. Microsoft hat mir sogar Updates vorgeschlagen, die nicht auf meinem System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche, und hat sie ohne Fehler installiert. Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"
            </p>
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li class="first current">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/chip-de.png')?>" alt=""/>
          </div>
          <p><span>Chip.de</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"/>
          </div>
          <p><span>Myo Thuya</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"/>
          </div>
          <p><span>Adam Backlund</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"/>
          </div>
          <p><span>Wayne Bowler</span></p>
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>Media-Auszeichnungen</h2>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <!-- bottom start -->
    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
            <dd>
              <h4>
                RISIKOFREI TESTEN – 60 Tage Geld zurück Garantie
              </h4>
              <p>
                Aktivieren Sie die PRO-Edition, werden alle Treiber-Probleme zu einem erschwinglichen Preis behoben!
              </p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Wir akzeptieren</h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payments.png') ?>" alt=""></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt>Notiz:  </dt>
            <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden. </dd>
            <dd>*. Daten können auf der Grundlage verschiedener Systeme und Computer geändert werden.</dd>
            <dd>*.Smart Defrag PRO /Protected Folder/ IObit Uninstaller PRO unterstützt 1 Jahr / 1 PC.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y') ?> IObit. Alle Rechte vorbehalten</p>
        </div>
        <!-- footer end -->
      </div>
    </div>
    <!-- bottom end -->
  </div>

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl"><img src="<?php echo getStaticUrl('images/iu-float-box.png')?>" alt=""/></div>
      <div class="center fl">
        <h2>Exklusivangebot nur zu Weihnachten</h2>
      </div>
      <div class="price fr">
        <p><strong>22,99€</strong> <del>183,83€</del></p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=de-db73pciusdpf2299&ref=de_db73pcbundlepurchase1912ep<?php echo $refStr; ?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcbundle1912ep-de')">
          Jetzt erneuern und sparen!
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <!-- xmaxbox start -->
  <div class="xmaxbox">
    <span class="tree one"></span>
    <span class="tree two"></span>
    <span class="tree three"></span>
    <span class="tree four"></span>
    <span class="tree five"></span>
    <span class="tree six"></span>
    <span class="tree seven"></span>
    <span class="tree eight"></span>
    <span class="tree night"></span>
    <span class="tree ten"></span>
    <span class="tree eleven"></span>
  </div>
  <!-- xmaxbox end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>