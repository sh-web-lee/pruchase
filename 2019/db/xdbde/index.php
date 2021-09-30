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
  $c_name = 'xdbde2019' . $date;
  if (!isset($_COOKIE[$c_name])) {
    if($_GET['pageView']==1){
      $packsNum=29;
    }else {
      $packsNum = 50;
    }
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
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
if($_GET['to']=='purchase-6'){
  if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    if(count($matches[1])>=2){
      $refStr.='-'.$matches[1][0].$matches[1][1];
    }
  }
}
if(in_array($_GET['pop'],array('xr_db'))){
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
             href="https://www.iobit.com/buy.php?product=de-db73pc2699&ref=de_db73pcpurchase1912xr<?php echo $refStr;?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc1912xr-de');">
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
             href="https://www.iobit.com/buy.php?product=de-db73pciusdpf2299&ref=de_db73pcbundlepurchase1912xr<?php echo $refStr;?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcbundle1912xr-de');">
            <i class="all-icons"></i>
            Jetzt kaufen
          </a>
        </div>
        <p class="people">Von <b class="packsCount"><?php echo $packsCount;?></b> Personen gekauft</p>
        <!-- <div class="maskbg"></div>
        <div class="ausbox">AUSVERKAUFT</div> -->
      </div>
      <div class="offer right">
        <div class="discount small"><b>80€ <small>sparen</small></b></div>
        <img src="<?php echo getStaticUrl('images/db-five-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Jahr, 5 PCs</p>
          <p><strong>29,99€</strong> UVP  <del>109,99€</del></p>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=de-db75pc2999&ref=de_db75pcpurchase1912xr<?php echo $refStr;?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase5pc1912xr-de');">
            <i class="all-icons"></i>
            <span>Jetzt kaufen</span>
          </a>
        </div>
      </div>
      <div class="payment"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- banner end -->

  <div class="main">
    <!-- intro start -->
    <div class="intro wrapper">
      <h2>Warum Driver Booster PRO wählen?</h2>
      <p><img src="<?php echo getStaticUrl('images/win10.png')?>" alt=""/> Mit Windows 10 kompatibel</p>
      <div class="clearfix panel">
        <div class="list one">
          <span class="icons01"><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Über 3.500.000 Treiber updaten <b>Verbessert</b></h3></dt>
            <dd>
              Erkennt und aktualisiert 3.500.000 fehlerhafte, fehlende <br>oder seltene Treiber für alle Ihre Hardwaregeräte.
            </dd>
          </dl>
        </div>
        <div class="list two on">
          <span class="icons02"><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Spielleistung verbessern <b class="green">Neu</b></h3></dt>
            <dd>
              Beendet alle unnötigen Prozesse mit 1 Klick, <br>um RAM freizugeben und die Spieleleistung <br>dramatisch zu verbessern.
            </dd>
          </dl>
        </div>
        <div class="list three">
          <span class="icons03"><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Game Ready-Treiber <b class="green">Neu</b></h3></dt>
            <dd>
              Game Ready-Treiber ist sofot verfügbar nach der <br>Veröffentlichung, um die Leistung zu erhöhen, Bugs <br>zu beheben und das Spielerlebnis zu verbessern.
            </dd>
          </dl>
        </div>
        <div class="list four">
          <span class="icons04"><img src="<?php echo getStaticUrl('images/intro-icon04.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Gerätefehler schnell beheben <b>Verbessert</b></h3></dt>
            <dd>
              Repariert Gerätefehler schnell mit nur 1 Klick, um die <br>PC-Leistung nicht zu beeinträchtigen.
            </dd>
          </dl>
        </div>
        <div class="imgbox">
          <ul>
            <li><img src="<?php echo getStaticUrl('images/intro-01.png')?>" alt=""/></li>
            <li class="two"><img src="<?php echo getStaticUrl('images/intro-02.png')?>" alt=""/></li>
            <li><img src="<?php echo getStaticUrl('images/intro-03.png')?>" alt=""/></li>
            <li class="four"><img src="<?php echo getStaticUrl('images/intro-04.png')?>" alt=""/></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- feature start -->
    <div class="feature wrapper clearfix">
      <h2>Driver Booster 7 bringt Ihnen diese neuen Änderungen:</h2>
      <p>Automatische und sichere Treiberaktualisierung</p>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
        <dd>
          <h3>SCANNEN</h3>
          <p>Überprüft den Status des Gerätetreibers automatisch auf Updates.</p>
          <div class="green">
            <span>Nur die Treiber, die die WHQL- und IObit-Regel bestanden haben</span>
          </div>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
        <dd>
          <h3>HERUNTERLADEN</h3>
          <p>Treiber werden beim Systemleerlauf automatisch heruntergeladen</p>
          <div class="green">Sichere https-Verbindung</div>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
        <dd>
          <h3>INSTALLIEREN</h3>
          <p>Treiber werden beim Systemleerlauf automatisch installiert.</p>
          <div class="green">Sicherung früherer Treiber</div>
        </dd>
      </dl>
    </div>
    <!-- feature end -->

    <!-- giftbox start -->
    <div class="giftbox">
      <div class="wrapper">
        <h2>Das kostenfreie Geschenkpaket nur für zeitlich begrenzte Deals</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/></dt>
          <dd>
            <h5>Smart Defrag PRO </h5>
            <strong>0€</strong> <del>29,99€</del>
            <p>Defragmentiert die Festplatten und verbessert Ihre PC-Leistung</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
          <dd>
            <h5>Protected Folder</h5>
            <strong>0€</strong> <del>39,95€</del>
            <p>Bietet Passwortschutz für Ordner und Dateien unter Windows.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/></dt>
          <dd>
            <h5>IObit Uninstaller PRO</h5>
            <strong>0€</strong> <del>23,90€</del>
            <p>Deinstalliert ungewollte Programme einfach und schnell</p>
          </dd>
        </dl>
        <div class="price">
          <h3>DB PRO + ein tolles Geschenkpaket</h3>
          <p class="people">von <span class="buynum"><?php echo $packsCount;?></span> Menschen aktiviert</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=de-db73pciusdpf2299&ref=de_db73pcbundlepurchase1912xr<?php echo $refStr;?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcbundle1912xr-de');">
            <i class="all-icons"></i>
            Jetzt kaufen
          </a>
        </div>
      </div>
      <!-- <div class="maskbg"></div>
      <div class="ausbox">AUSVERKAUFT</div> -->
    </div>
    <!-- giftbox end -->

    <!-- probleme start -->
    <div class="probleme">
      <div class="wrapper clearfix">
        <h2>Ohne die PRO-Version können Sie folgende Probleme haben:</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/probleme-01.png')?>" alt=""/></dt>
          <dd>
            <h3>Problemhafter PC</h3>
            <p>
              Ohne aktualisierte oder geeignete Treiber kann Ihr Computer nicht reibungslos laufen, so kann er sogar häufig einfrieren oder herunterfahren.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/probleme-02.png')?>" alt=""/></dt>
          <dd>
            <h3>Schlechte Spiel-Leistung</h3>
            <p>
              Das Fehlen von Komponenten kann dazu führen, dass Ihr Spiel nicht erfolgreich geladen werden kann, und veraltete Treiber können dazu führen, dass Sie tolle Grafiken und andere Spielfunktionen verpassen.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/probleme-03.png')?>" alt=""/></dt>
          <dd>
            <h3>Inkompatible Hardware</h3>
            <p>
              Wegen fehlender oder fehlerhafter Geräten können Hardware wie Mäuse, Tastatur und Audio nicht reibungslos zusammenarbeiten. Das beeinträchtigt die PC-Leistung.
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- probleme end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Media-Auszeichnungen</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

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

    <!-- comparison start -->
    <div id="compare" class="comparison wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Welche Vorteile bietet Ihnen die PRO Edition?</th>
            <td class="space"></td>
            <th class="itemb">Driver Booster <b>FREE</b></th>
            <td class="space"></td>
            <th class="itema">
              <div class="box"></div>
              Driver Booster <b>PRO</b>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Scannt und erkennt automatisch veraltete, fehlende &amp; fehlerhafte Treiber</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Downloaden und updaten Sie veraltete Treiber mit nur einem Klick</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Entsperrt die Geschwindigkeitsbeschränkung von Treiber-Updates</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Größere DatenBank, um mehr veraltete &amp; seltene Treiber zu updaten</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Reduziert Einfrieren &amp; Abstürze des Systems für bessere Leistung</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Automatische Download- und Installationsfunktion beim Systemleerlauf</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Automatisches Backup aller Treiber zur Sicherheitswiederherstellung</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Erhalten Sie Vorzug bei Updates für Spielkomponenten für ein besseres Gaming-Erlebnis</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Sicheres Updaten mit AUSSCHLIEßLICH zertifizierten WHQL Treibern</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Automatische Updates auf die neuste Version</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Kostenloser technischer Support 24/7</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper clearfix">
        <div class="imgbox fl">
          <div class="imglist three">
            <img src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
            <div class="discount small"><b>63€ <small>sparen</small></b></div>
          </div>
          <div class="imglist five">
            <img src="<?php echo getStaticUrl('images/db-five-box.png')?>" alt=""/>
            <div class="discount small"><b>80€ <small>sparen</small></b></div>
          </div>
          <div class="imglist gift on">
            <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
            <div class="discount">
              <strong>-87%</strong>
              <b>160,84€ <small>sparen</small></b>
            </div>
          </div>
        </div>
        <ul class="fl">
          <li class="three" data-num="0">
            <span>1 Jahr / 3 PCs</span>
            <strong>-63€ sparen</strong>
          </li>
          <li class="five" data-num="2">
            <span>1 Jahr / 5 PCs</span>
            <strong>-80€ sparen</strong>
          </li>
          <li class="gift on" data-num="1">
            <span>1 Jahr / 3 PCs + SD+PF+IU  gratis</span>
            <strong>160,84€ sparen</strong>
            <!-- <div class="ausbox">AUSVERKAUFT</div> -->
          </li>
        </ul>
        <div class="price fr">
          <p><strong>22,99€</strong> UVP  <del>183,83€</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=de-db73pciusdpf2299&ref=de_db73pcbundlepurchase1912xr<?php echo $refStr;?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcbundle1912xr-de');">
            <i class="all-icons"></i>
            <span>Jetzt kaufen</span>
          </a>
        </div>
      </div>
    </div> 
    <!-- footbuy end -->
  </div>

  <!-- notes start -->
  <dl class="notes wrapper">
    <dt>Notiz:</dt>
    <dd>      
      *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
    </dd>
    <dd>*. Daten können auf der Grundlage verschiedener Systeme und Computer geändert werden.</dd>
    <dd>*.Smart Defrag PRO /Protected Folder/ IObit Uninstaller PRO unterstützt 1 Jahr / 1 PC.</dd>
  </dl>
  <!-- notes end -->
  <p class="copyright wrapper">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>

  <!-- floatlayer strat -->
  <div class="floatlayer" id="floatlayer">
    <img class="fl" src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
    <div class="fl right">
      <h2><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></h2>
      <p>hat DB PRO schon aktiviert</p>
    </div>
    <i class="all-icons close">×</i>
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