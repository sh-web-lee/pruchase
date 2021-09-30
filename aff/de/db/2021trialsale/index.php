<?php
ob_start();
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
include $pRootUrl . 'callback.php';

$transData=json_decode(base64_decode($_GET['tdata']));
if(($transData->LftTrlDay<=4)&&($_GET['to']=='trialbuy_8')){
  header("location:./trialbuy.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
}

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  ob_get_clean();
  $date = $_GET['d'];
  $c_name = 'dedbtrial' . $date;
  if (!isset($_COOKIE[$c_name])) {
    if($_GET['pageView']==1){
      $packsNum=29;
    }else {
      $packsNum = 98;
    }
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24);
      $packsNum = 3;
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

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if (empty($_GET['ref'])) $_GET['ref'] = 'deaff_db8_2021trialsale';
if(!in_array($_GET['to'],array('trialbuy_7','trialbuy_2','trialbuy_9','trialbuy_4','trialbuy_8'))){
  $_GET['to']='';
}
if(empty(json_decode(base64_decode($_GET['tdata'])))){
  $_GET['tdata']='W10=';
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Holen Sie sich 77% Rabatt auf Driver Booster PRO und ein Gratisgeschenk - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800" rel="stylesheet">
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
    <div class="title changed">
      <p>Ihre Testversion endet bald</p>
      <h1>Verpassen Sie nicht unser Angebot exklusiv für Kunden der Testverison</h1>
    </div>
    <!-- panel -->
    <div class="panel">

      <!-- dbox-40 -->
      <dl class="small-box left">
        <dt>
          <img src="<?php echo $pResUrl;?>images/dbox-40.png" alt="Driver Booster PRO6">
          <p>1 Jahr/ 1 PC</p>
        </dt>
        <dd>
          <!-- price -->
          <p class="price">
            <strong>24</strong>,99€ <span class="all-icons uvp">UVP</span> <del>69,99€</del>
          </p>
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=deaff-db81pc2499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb82021trialsale')">
            <strong>JETZT KAUFEN</strong>
            45€ sparen
          </a>
        </dd>
      </dl>

      <!-- dbox-77 -->
      <dl class="large-box middle sold">
        <dt>
          <img src="<?php echo $pResUrl;?>images/dbox-77.png" alt="Driver Booster PRO6">
          <!-- countdown -->
          <div class="date">
            <h5 class="up">HEUTE NUR</h5>
            <div class="countdown">
              <div class="scroll-tick"></div>
              <div class="scroll-tick"></div>
            </div>
            <h5 class="down">DEALS ÜBRIG</h5>
          </div>
        </dt>
        <dd>
          <!-- price -->
          <p class="price">
            <strong>26</strong>,99€ <span class="all-icons uvp">UVP</span> <del>119,89€</del>
          </p>
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=deaff-db83pcsd2699&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb82021trialsale')">
            <strong>JETZT KAUFEN</strong>
            92,90€ sparen
          </a>
          <p class="people">Von <strong><span class="buynum">212</span><span class="pop">212</span></strong> Personen gekauft</p>
        </dd>
      </dl>

      <!-- dbox-55 -->
      <dl class="small-box right sold">
        <dt>
          <img src="<?php echo $pResUrl;?>images/dbox-55.png" alt="Driver Booster PRO6">
          <p>1 Jahr/ 3 PCs</p>
        </dt>
        <dd>
          <!-- price -->
          <p class="price">
            <strong>26</strong>,99€ <span class="all-icons uvp">UVP</span> <del>89,99€</del>
          </p>
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=deaff-db83pc2699&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb82021trialsale')">
            <strong>JETZT KAUFEN</strong>
            63€ sparen
          </a>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature wrapper">
  <div class="original">
    <h2>Warum Driver Booster PRO?</h2>
    <h3>
      Aktualisiert <strong class="driverCount"></strong> veraltete Treiber & Spielekomponenten, um die Stabilität ihres PCs und ihr Spieleerlebnis zu <br>
      verbessern
    </h3>
    <img class="scan" src="<?php echo $pResUrl;?>images/feature-scan01.png" alt="">
    <div class="content">
      <!--one -->
      <dl class="one clearfix">
        <dt></dt>
        <dd>
          <h4>Stabile Leistung</h4>
          <p>
            Aktualisiert wichtige PC Treiber, um <br>
            das Einfrieren oder Abstürzen des <br>
            PCs zu vermeiden
          </p>
        </dd>
      </dl>
      <!-- two -->
      <dl class="two clearfix">
        <dt></dt>
        <dd>
          <h4>Effektiver Gerätemanager</h4>
          <p>
            Korrigiert Fehlercodes, um Hardwareprobleme <br>
            zu beheben.
          </p>
        </dd>
      </dl>
      <!-- three -->
      <dl class="three clearfix">
        <dt></dt>
        <dd>
          <h4>Schnelles Laden von Spielen</h4>
          <p>
            Aktualisiert passende Komponenten, um <br>
            einen einwandfreien Start zu garantieren
          </p>
        </dd>
      </dl>
      <!-- four -->
      <dl class="four clearfix">
        <dt></dt>
        <dd>
          <h4>Verbessertes Gaming Erlebnis</h4>
          <p>
            Aktualisiert alle fürs Gaming nötige Treiber, <br>
            damit Sie verbesserte & neue Funktionen <br>
            nutzen können.
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <div class="update">
    <h2>Warum Driver Booster PRO?</h2>
    <h3>
      Aktualisiert <strong class="driverCount">30</strong> veraltete Treiber & Spielekomponenten, um die Stabilität ihres PCs und ihr <br>
      Spieleerlebnis zu verbessern
    </h3>
    <img class="scan" src="<?php echo $pResUrl;?>images/feature-scan02.png" alt="">
    <div class="content">
      <!-- five -->
      <dl class="five top clearfix">
        <dt class="driveNum">15</dt>
        <dd>Treiber Updates <br> verfügbar  <sup>PRO</sup></dd>
      </dl>
      <!-- six -->
      <dl class="six top clearfix">
        <dt class="gameNum">15</dt>
        <dd>Aktualisierungen für <br> Spielekomponenten verfügbar <sup>PRO</sup></dd>
      </dl>
      <!-- one -->
      <dl class="one clearfix">
        <dt></dt>
        <dd>
          <h4>Stabile Leistung</h4>
          <p>
            Aktualisiert wichtige PC Treiber, um <br>
            das Einfrieren oder Abstürzen des <br>
            PCs zu vermeiden
          </p>
        </dd>
      </dl>
      <!-- two -->
      <dl class="two clearfix">
        <dt></dt>
        <dd>
          <h4>Effektiver Gerätemanager</h4>
          <p>
            Korrigiert Fehlercodes, um Hardwareprobleme <br>
            zu beheben.
          </p>
        </dd>
      </dl>
      <!-- three -->
      <dl class="three clearfix">
        <dt></dt>
        <dd>
          <h4>Schnelles Laden von Spielen</h4>
          <p>
            Aktualisiert passende Komponenten, um <br>
            einen einwandfreien Start zu garantieren
          </p>
        </dd>
      </dl>
      <!-- four -->
      <dl class="four clearfix">
        <dt></dt>
        <dd>
          <h4>Verbessertes Gaming Erlebnis</h4>
          <p>
            Aktualisiert alle fürs Gaming nötige Treiber, <br>
            damit Sie verbesserte & neue Funktionen <br>
            nutzen können.
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h2> Was sind die Unterschiede zwischen ihrer aktuellen Edition und der PRO Version?</h2>
  <table>
    <thead>
    <tr>
      <th colspan="2"></th>
      <th class="itema">
        <div class="free">Ihre aktuelle Edition</div>
      </th>
      <th class="space"></th>
      <th class="itemb">
        <div class="free">Driver Booster PRO</div>
      </th>
      <th class="space"></th>
      <th class="itemc">
        <div class="pro"><span>2-in-1</span> Bündel</div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
      <td class="virtue">Automatische Treiberupdates während eines Systemleerlaufs</td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons black">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
      <td class="virtue">Mit 1-Klick Treiber aktualisieren</td>
      <td class="itema"><p class="exTxt first">≤7 Tage</p></td>
      <td class="space"></td>
      <td class="itemb changed"><b class="limite"><i class='all-icons black'>√</i></b></td>
      <td class="space"></td>
      <td class="itemc changed"><b class="limite"><i class='all-icons red'>√</i></b></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
      <td class="virtue">Bis zu 100% schnellere Updates</td>
      <td class="itema"><p class="exTxt">≤7 Tage</p></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons black">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
      <td class="virtue">Behebung von Geräteproblemen, für einen sicheren PC</td>
      <td class="itema"><p class="exTxt">≤7 Tage</p></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons black">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
      <td class="virtue">Automatischer Download & Erstellung von Back-Ups</td>
      <td class="itema"><p class="exTxt">≤7 Tage</p></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons black">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon04.png')?>" alt=""></td>
      <td class="virtue">Maximale Verbesserung der Festplatte für einen schnelleren PC</td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th colspan="2"></th>
      <th class="itema"></th>
      <th class="space"></th>
      <th class="itemb">
        <p><b>€26,99</b> <del>€89,99</del></p>
        <a class="buybtn other"
           href="https://www.iobit.com/buy.php?product=deaff-db83pc2699&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb82021trialsale')">
          <i class="all-icons"></i> Jetzt kaufen
        </a>
      </th>
      <th class="space"></th>
      <th class="itemc">
        <p><b>€26,99</b> <del>€119,89</del></p>
        <a class="buybtn other shadow"
           href="https://www.iobit.com/buy.php?product=deaff-db83pcsd2699&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb82021trialsale')">
          <i class="all-icons"></i> Jetzt kaufen
        </a>
        <p>Heute nur <strong class="packsNum">***</strong> Deals verfügbar</p>
      </th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison end -->

<!-- review start -->
<div class="review wrapper">
  <h2>Was sagen andere?</h2>
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/chip-de.png')?>" alt="Chip.de"></dt>
        <dd>
          <h2>Media Review</h2>
          <h4>„Automatische Treiberdownloads gibt es nur in der kostenpflichtigen Pro-Version.“</h4>
          <p class="media">
            „Damit es keine unschönen Überraschungen gibt, legt der "IObit Driver Booster Pro" zuvor einen Wiederherstellungspunkt an. Hat bei einer Treiber-Installation einmal etwas nicht geklappt, erlaubt die neue "Roll Back"-Funktion die einfache Rückkehr zu einer älteren Treiber-Version. Neben schnelleren Downloadleitungen bietet der Hersteller eine breitere Hardware-Unterstützung und eine Backup-Funktion bei der erweiterten Pro-Version der Software an.“
          </p>
          <cite>Chip.de</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/peter-bomers.png')?>" alt="Peter Bomers"></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            Auf die heutige Zeit bezogen, ist es sehr schwierig, immer mit den Treibern auf dem neuesten Stand zu sein. Da ich mit meinem PC viel experementiere und immer wieder was neues ausprobiere, bin ich eben auf den Driver Booster gekommen, weil Ihr immer fast genau, aktuell seid. Ich bin ein Hobby Mensch  in Sachen PC`s und freu mich immer über neue Errungenschaften. Macht weiter so und wir werden im Geschäft bleiben.
          </p>
          <cite>Peter Bomers</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            Was für eine Überraschung, den neuen Driver Booster von IObit zu erhalten. Sobald die Installation fertig ist, startet sein Update sofort. Nachdem das Upgrade abgeschlossen war, sah es so aus, als ob mein PC komplett überarbeitet worden wäre. Wirklich super!
          </p>
          <cite>Harold Barr</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
        <dd>
          <h2>User Review</h2>
          <p>
            Driver Booster ist wirklich der beste Treiber-Updater auf dem Markt. Es ist benutzerfreundlich, hat eine einfache und gute Oberfläche und erledigt seine Aufgabe besser als jede andere Anwendung, die ich verwendet habe. Dieses Programm ist 5 Sterne wert. Sehr empfehlenswert.
          </p>
          <cite>Hishaam Salasa</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <p>
      Da das Programm zuverlässlich ist und in den letzten fünf Jahren von weltweiten Medien ausgezeichnet wurde, <br>
      können Sie sich sicher sein die richtige Wahl mit diesem Treiber Updater zu machen
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
</div>
<!-- awards end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl class="fl">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    <dd>
      <h3>Risikofrei tesen – mit unserer 60 Tage Geld-zurück-Garantie</h3>
      <p>
        Wir sind stolz darauf, dass die Aktivierung der Pro Version all ihre <br>
        Treiberprobleme für einen angemessenen Preis lösen wird.
      </p>
    </dd>
  </dl>
  <dl class="fr">
    <dd><h3>Wir akzeptieren</h3></dd>
    <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
  </dl>
</div>
<!-- service end -->

<!-- bottom start -->
<dl class="note wrapper">
  <dt>Hinweis:</dt>
  <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
  <dd>*. Daten können sich system- oder computerabhängig ändern.</dd>
  <dd>*. Smart Defrag PRO unterstützt 1 Jahr, 1 PC</dd>
</dl>
<div class="copyright">
  <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/db-bundle-box.png')?>" alt="Driver Booster PRO6"></div>
    <h2 class="fl">77% RABATT</h2>
    <div class="price fr">
      <h3>Halten Sie das ganze Jahr über alle ihre Treiber aktuell</h3>
      <a class="buybtn shadow other"
         href="https://www.iobit.com/buy.php?product=deaff-db83pcsd2699&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb82021trialsale')">
        <i class="all-icons"></i> Jetzt kaufen
      </a>
      <p>Heute nur <strong class="packsNum">***</strong> Deals verfügbar</p>
    </div>
  </div>
</div>
<!-- floatlayer end -->
<script>
  var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
  transData = JSON.parse(transDataJson);
</script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>