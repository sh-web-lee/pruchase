<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $isInit=$_GET['isInit'];
  $c_name = 'enascnovbrb_p' . $date;
  $c_name_t='enascnovbrb_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if($isInit==1){
        $packsNum = intval($_COOKIE[$c_name]);
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['id'])?'':('-'.$_GET['id']);
if(in_array($_GET['pop'],array('bi_db','bb_db','bnc_db'))){
  $refStr.='-'.$_GET['pop'];
}

function paramDeal($num){
  return (intval($num)>0)?number_format(intval($num)):'';
}

$packsNum=49;
$transData=$paramData=json_decode(base64_decode($_GET['data']));

$transDataPacks=json_decode(base64_decode($_GET['num']));
if(!empty($transDataPacks)){
  if(@intval($transDataPacks->seats)){
    $packsNum=@intval($transDataPacks->seats);
  }
}
$ver=0;
if(preg_match('/(.*)\./isU',$_GET['ver'],$matches)){
  $ver=$matches[1];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sparen Sie 77% auf Driver Booster PRO am Black Friday - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <div class="title clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
      </div>
      <div class="right fr">
        <b class="only">Nur heute</b>
        <h1>Black Friday Sale</h1>
        <h5>Niedrigster Preis des Jahres</h5>
        <div class="discount">77% Rabatt</div>
      </div>
    </div>
    <div class="chart">
      <div class="chartbox one"><span>Normal <b>89,99€</b></span></div>
      <div class="chartbox big two"><span>Halloween <b>26,99€</b></span></div>
      <div class="chartbox center three"><span>Heute <b class="change-price"><big>20</big>,99€</b></span></div>
      <div class="chartbox big four"><span> Weihnachten <b>26,99€</b></span></div>
      <div class="chartbox five"><span>Normal <b>89,99€</b></span></div>
    </div>
    <div class="price clearfix">
      <div class="numbox">
        Nur noch
        <div id="flip" class="flipNum">
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>5</b></span></div>
          <div class="listbox last"><span class="list"><b>0</b></span></div>
        </div>
        Stück zu diesem Preis!
      </div>
      <div class="btnbox">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-db3pc2099&ref=de_dbbf2099sale1911<?php echo $refStr;?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db2099bfsale1911-de');">
          Jetzt aktivieren <small>– 20,99€</small>
        </a>
        <p>1 Jahresabo für 3 PCs</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Was kann Driver Booster?</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
        <div class="scan">PRÜFEN</div>
      </div>
      <ul class="right fr">
        <li>
          <i class="all-icons">●</i>
          <span>Aktualisiert veraltete Treiber für eine reibungslose PC-Leistung</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Aktualisiert Komponenten (und Game Ready-Treiber) für flüssigeres Spielen</span>
        </li>
        <li class="db5">
          <i class="all-icons">●</i>
          <span>(Aktualisierte Game-Ready-Treiber für eine bessere Spieleleistung)</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Behebt Gerätefehler für reibungslose Hardwareverbindung</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Beschleunigt das Herunterladen von Treibern um bis zu <b>100%</b></span>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- enjoy start -->
<div class="enjoy">
  <div class="wrapper clearfix">
    <span class="arrow"></span>
    <div class="left fl">
      <h3>
        Ohne Driver Booster PRO <br>
        kann Ihr PC diese Probleme haben：
      </h3>
      <ul>
        <li>
          <i class="all-icons">√</i>
          <span><b>Langsamere</b> Download-Geschwindigkeit</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span><b>Keine</b> automatische Treiberaktualisierung</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span><b>Keine</b> gesicherten Treiber</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span><b>Keine</b> Fehlerbehebung beim Systemabsturz</span>
        </li>
        <li class="db5">
          <i class="all-icons">√</i>
          <span><b>Keine</b> Aktualisierung der Spielkomponenten</span>
        </li>
      </ul>
    </div>
    <div class="right fr">
      <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
      <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt="">
    </div>
  </div>
</div>
<!-- enjoy end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Driver Booster 7 PRO hilft Ihnen mehr für:</h2>
    <div class="container clearfix">
      <div class="special left">
        <dl>
          <dt><span class="icon05"></span></dt>
          <dd>
            <h3>Einen reibungsloseren PC</h3>
            <p>hält 3,500,000 Treiber automatisch <br> und sicher auf dem neuesten Stand</p>
          </dd>
        </dl>
      </div>
      <div class="special right">
        <dl>
          <dt><span class="icon06"></span></dt>
          <dd>
            <h3>Besseres Spielen</h3>
            <p>sichert einen reibungslosen Spielstart, <br> behebt Fehler und führt neue Funktionen ein</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>Was andere dazu sagen</h2>
    <div class="content">
      <dl class="active">
        <dt><h3>Media Review</h3></dt>
        <dd>
          Damit es keine unschönen Überraschungen gibt, legt der "IObit Driver Booster Pro" zuvor einen Wiederherstellungspunkt an. Hat bei einer Treiber-Installation einmal etwas nicht geklappt, erlaubt die neue "Roll Back"-Funktion die einfache Rückkehr zu einer älteren Treiber-Version. Neben schnelleren Downloadleitungen bietet der Hersteller eine breitere Hardware-Unterstützung und eine Backup-Funktion bei der erweiterten Pro-Version der Software an.
        </dd>
      </dl>
      <dl>
        <dt><h3>Media Review</h3></dt>
        <dd>
          IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. Driver Booster PRO bietet mehrere Funktionenen und Lizenz-Schlüssel zu einem guten Preis sowie eine anpassbare Benutzeroberfläche, die beim Anzeigen spezifischer Hardware-Informationen gut macht. Seine Wettbewerber wie Ashampoo Driver Updater und SlimWare Utilities DriverUpdate bieten überzeugende Funktionen an, aber IObit Driver Booster PRO tut krass besser.
        </dd>
      </dl>
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>
          Auf die heutige Zeit bezogen, ist es sehr schwierig, immer mit den Treibern auf dem neuesten Stand zu sein. Da ich mit meinem PC viel experementiere und immer wieder was neues ausprobiere, bin ich eben auf den Driver Booster gekommen, weil Ihr immer fast genau, aktuell seid. Ich bin ein Hobby Mensch  in Sachen PC`s und freu mich immer über neue Errungenschaften. Macht weiter so und wir werden im Geschäft bleiben.
        </dd>
      </dl>
      <dl>
        <dt><h3>User Review</h3></dt>
        <dd>
          Driver Booster ist wirklich der beste Treiber-Updater auf dem Markt. Es ist benutzerfreundlich, hat eine einfache und gute Oberfläche und erledigt seine Aufgabe besser als jede andere Anwendung, die ich verwendet habe. Dieses Programm ist 5 Sterne wert. Sehr empfehlenswert.
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="active">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/chip-de.png" alt="Chip.de"></div>
        <p>Chip.de</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="Pcmag.com"></div>
        <p>Pcmag.com</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/peter-bomers.png" alt="Peter Bomers"></div>
        <p>Peter Bomers</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/hishaam-salasa.png" alt="Hishaam Salasa"></div>
        <p>Hishaam Salasa</p>
      </li>
    </ul>
    <span class="arrow"></span>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Redaktions-Tipp</h2>
    <p>
      Millionen von Nutzern weltweit haben ihre Erfahrungen geteilt
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <div class="service">
      <dl class="left fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>
          <h3>Risikofrei testen - 60-Tage-Geld-zurück-Garantie</h3>
          <p>
            Die PRO-Version behebt ihre Treiberprobleme effizient <br> zum besten Preis.
          </p>
        </dd>
      </dl>
      <dl class="right fr">
        <dt><h3>Wir akzeptieren</h3></dt>
        <dd>
          <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
        </dd>
      </dl>
    </div>
    <dl>
      <dt>Hinweis:</dt>
      <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
      <dd>*. Daten können sich system- oder computerabhängig ändern.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
      <div class="discount">85% OFF</div>
    </div>
    <div class="numbox fl">
      <div id="fliptwo" class="flipNum">
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox last"><span class="list"><b>0</b></span></div>
      </div>
      <p class="change"><b class="userNum">157</b> Beobachter, nur noch <b class="viewNum">50</b> Stück zu diesem Preis!</p>
    </div>
    <div class="price fl">
      <strong class="change-price">20,99€</strong> <del>89,99€</del>
      <p>1 Jahresabo für 3 PCs</p>
    </div>
    <a class="buybtn fr"
       href="https://www.iobit.com/buy.php?product=de-db3pc2099&ref=de_dbbf2099sale1911<?php echo $refStr;?>&refs=de_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db2099bfsale1911-de');">
      Jetzt aktivieren
    </a>
  </div>
</div>
<!-- floatlayer end -->

<script>
  refStr="<?php echo $refStr;?>";
  packsNum=<?php echo $packsNum;?>;
  $(".intro .wrapper .right b").eq(0).html("<?php echo paramDeal($paramData->UpdDrv);?>").end().
  eq(1).html("<?php echo paramDeal($paramData->UpdCmp);?>").end().
  eq(2).html("<?php echo paramDeal($paramData->UpdRdy);?>").end().
  eq(3).html("<?php echo paramDeal($paramData->FixedErr);?>");
</script>

<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>