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

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  ob_get_clean();
  $date = $_GET['d'];
  $c_name = 'dedbmar' . $date;
  if (!isset($_COOKIE[$c_name])) {
    if($_GET['pageView']==1){
      $packsNum=29;
    }else {
      $packsNum = 87;
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
  echo json_encode(array('packsNum'=>$packsNum));
  exit;
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
    'garegion','dbofficialfree','dbofficialpro','purchase-35','purchase-36','crpro_1','crpro_2','reggaexpired','regovermax'))){
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
if(in_array($_GET['pop'],array('x_db'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['ref'],array('de_ncdb6'))){
  $refStr.='-'.$_GET['ref'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Bis zu 111€ Rabatt auf Driver Booster PRO und ein kostenloses Geschenk - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?> 
</head>

<body>
  
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="clearfix">
        <a class="logo fl" href="https://www.iobit.com/de/index.php" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <div class="title fr">
          <h1>Mehr kaufen, mehr sparen</h1>
          <h5>Täglich ist das Angebot für 1 Jahr, 5 Computer zeitlich begrentzt. NICHT VERPASSEN! </h5>
        </div>
      </div>
      <div class="panel clearfix">
        <div class="box left">
          <div class="top"><span data-text="1 Computer">1 Computer</span> <b>, 1 Jahr</b></div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
            <span>-45€</span>
          </div>
          <div class="price">
            <p><strong>24<sup>99</sup></strong> UVP: <del>69,99€</del></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-db61pc2499&ref=de_db61pcpurchase1903b<?php echo $refStr;?>"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc1902-de')">
              <i class="all-icons"></i> 
              JETZT SPAREN
            </a>
          </div>
        </div>
        <div class="box center active">
          <div class="top"><span data-text="3 Computer">3 Computer</span> <b>, 1 Jahr</b></div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/db-min-box.png')?>" alt="Driver Booster PRO"/>
            <span>-63€</span>
          </div>
          <div class="price">
            <p><strong>26<sup>99</sup></strong> UVP: <del>89,99€</del></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-db63pc2699&ref=de_db63pcpurchase1903b<?php echo $refStr;?>"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc1902-de')">
              <i class="all-icons"></i> 
              JETZT SPAREN
            </a>
          </div>
        </div>
        <div class="box right">
          <div class="countdown">Bester Deal des Tages:<b>0</b>Std<b>25</b>Min<b>30</b>Sek</div>
          <div class="top"><span data-text="5 Computer">5 Computer</span> <b>, 1 Jahr</b></div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="Driver Booster PRO"/>
            <span>-111€</span>
            <div class="point">
              <i class="all-icons">!</i>
              <p><b>1 Jahr, 1 PC</b> Defragmentiert Ihre Festplatte schnell und automatisch für einen flotten PC</p>
            </div>
          </div>
          <div class="price">
            <p><strong>28<sup>99</sup></strong> UVP: <del>139,99€</del></p>
            <a class="buybtn red"
               href="https://www.iobit.com/buy.php?product=de-db65pcsd2899&ref=de_db65pcsdpurchase1903b<?php echo $refStr;?>"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase5pc1902-de')">
              <i class="all-icons"></i> 
              JETZT SPAREN
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Warum Driver Booster PRO wählen?</h2>
    <p><img src="<?php echo getStaticUrl('images/win10.png')?>" alt=""/> Mit Windows 10 kompatibel</p>
    <div class="clearfix panel">
      <div class="list one">
        <span class="icons01"><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""/></span>
        <dl>
          <dt><h3>Über 3.000.000 Treiber updaten <b>Verbessert</b></h3></dt>
          <dd>
            Erkennt und aktualisiert 3.000.000 fehlerhafte, fehlende <br>oder seltene Treiber für alle Ihre Hardwaregeräte.
          </dd>
        </dl>
      </div>
      <div class="list two on">
        <span class="icons02"><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""/></span>
        <dl>
          <dt><h3>Spieleleistung verbessern <b class="green">Neu</b></h3></dt>
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

  <!-- review start -->
  <div class="review">
    <div class="wrapper clearfix">
      <div class="left fl">
        <div class="box white">
          <p class="imgbox"><img src="<?php echo getStaticUrl('images/chip-de.png')?>" alt="Chip.de"/></p>
          <p>
            Damit es keine unschönen Überraschungen gibt, legt der "IObit Driver Booster Pro" zuvor einen Wiederherstellungspunkt an. Hat bei einer Treiber-Installation einmal etwas nicht geklappt, erlaubt die neue "Roll Back"-Funktion die einfache Rückkehr zu einer älteren Treiber-Version. Neben schnelleren Downloadleitungen bietet der Hersteller eine breitere Hardware-Unterstützung und eine Backup-Funktion bei der erweiterten Pro-Version der 
            Software an.       
          </p>
          <b> - Chip.de</b>
        </div>
        <div class="box black">
          <p class="imgbox"><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"/></p>
          <p>
            Driver Booster ist eine großartige Anwendung. Für jemanden, der viele Anwendungen und Treiber besitzt, aber nicht die Zeit dafür hat diese manuell zu aktualisieren, kann Driver Booster nur dringendst empfehlen, er wird Euch dabei helfen, Updates und Treiber schnell und einfach zu updaten.     
          </p>
          <b> - Adam Backlund</b>
        </div>
      </div>
      <div class="center fl">
        <div class="box white"><p>Media Reviews</p></div>
        <div class="box black"><p>User Reviews</p></div>
      </div>
      <div class="right fr">
        <div class="box white">
          <p class="imgbox"><img src="<?php echo getStaticUrl('images/pcmag-com.png')?>" alt="Pcmag.com"/></p>
          <p>
            IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. Driver Booster PRO bietet mehrere Funktionenen und Lizenz-Schlüssel zu einem guten Preis sowie eine anpassbare Benutzeroberfläche, die beim Anzeigen spezifischer Hardware-Informationen gut macht. Seine Wettbewerber wie Ashampoo Driver Updater und SlimWare Utilities DriverUpdate bieten überzeugende Funktionen an, aber IObit Driver Booster PRO tut krass besser.“        
          </p>
          <b> - Pcmag.com</b>
        </div>
        <div class="box black">
          <p class="imgbox"><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"/></p>
          <p>
            Das ist eines der besten Programme, um Treiber zu aktualisieren. 
            Microsoft hat mir sogar Updates vorgeschlagen, die nicht mit meinem System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche und hat sie ohne Fehler installiert. Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu 
            bedienen.     
          </p>
          <b> - Wayne Bowler</b>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->

  <div class="wrapper">
    <!-- awards start -->
    <div class="awards">
      <h2>Auszeichnungen</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
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
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <p class="discount fl">Bis zu <b>-111€</b></p>
      <div class="imgbox fl">
        <img class="one" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        <img class="three" src="<?php echo getStaticUrl('images/db-min-box.png')?>" alt="Driver Booster PRO"/>
        <img class="five active" src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="Driver Booster PRO
        "/>
        <div class="point show">
          <i class="all-icons">!</i>
          <p><b>1 Jahr, 1 PC</b> Defragmentiert Ihre Festplatte schnell und automatisch für einen flotten PC</p>
        </div>
      </div>
      <ul class="fl">
        <li class="one">
          <span>1 Jahr, <b>1</b> PC</span>
          <em>Aktionspreis:</em>
          <strong>24,99€</strong>
        </li>
        <li class="three">
          <span>1 Jahr, <b>3</b> PC</span>
          <em>Aktionspreis:</em>
          <strong>26,99€</strong>
        </li>
        <li class="five active">
          <span>1 Jahr, <b>5</b> PC</span>
          <em>Aktionspreis:</em>
          <strong>28,99€</strong>
        </li>
      </ul>
      <div class="price fr">
        <p><strong class="off">45 €</strong> Rabatt</p>
        <a class="buybtn red"
           href="https://www.iobit.com/buy.php?product=de-db65pcsd2899&ref=de_db65pcsdpurchase1903b<?php echo $refStr;?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase5pc1902-de')">
          <i class="all-icons"></i> 
          JETZT SPAREN
        </a>
      </div>
    </div>
  </div> 
  <!-- footbuy end -->

  <div class="wrapper">
    <!-- payments  -->  
    <div class="service  clearfix">
      <div class="wrapper">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""></dt>
          <dd><strong>Zufriedenheitsgarantie</strong> 60-Tage-Geld-zurück-Garantie</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/verified.png')?>" alt=""></dt>
          <dd><strong>Zahlungssicherheit</strong> Ihre Zahlung ist 100% sicher</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/veloce.png')?>" alt=""></dt>
          <dd><strong>Schnelle Aktivierung</strong> Kurz nach dem Kauf erhalten Sie <br>einen Aktivierungscode.</dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt=""></dt>
          <dd><strong>Kundendienst</strong> Kostenloser technischer Support 24/7</dd>
        </dl>
      </div>
    </div>
    <!-- end payments -->
    
    <!-- annotation start -->
    <dl class="annotation">
      <dt>Hinweis:</dt>
      <dd>
        *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
      </dd>
      <dd>*. Daten können sich system- oder computerabhängig ändern.</dd>
    </dl>
    <!-- annotation end -->
    <p class="footer">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>

  <!-- backtotop start -->
  <div class="backtotop"></div>
  <!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>