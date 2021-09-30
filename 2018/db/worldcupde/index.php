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

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'deascfeb' . $date;
  if (!isset($_COOKIE[$c_name])) {
    if($_GET['view']==1){
      $packsNum=29;
    }else {
      $packsNum = 57;
    }
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType));
  exit();
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34'))){
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
$reduceNum=152813229;
$reTime=10;
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Spare 85% auf Driver Booster 5 PRO& erhalte drei tolle Geschenke gratis!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:600,800'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 10000);
      }
    });
  }
  setTimeout('getBuyNum()', 10000);
</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <div class="title">
        <h4>Alle vier Jahre einmal</h4>
        <h1>-85% Rabatt zur FUßBALL WM 2018!</h1>
      </div> 
      <h2>Driver Booster bringt dir das wunderbare Hör- und Seherlebnis für deine WM!</h2>
      <img class="imgbox" src="<?php echo getStaticUrl('images/img-box.png')?>" alt=""/>
      <div class="price fr">
        <p><strong>26<small>,99€</small></strong> <span class="all-icons">UVP</span> <del>183,74€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-db53pciusdpf2699&ref=de_db53bundle1806<?php echo $refStr;?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase201806-de')">
          <span>JETZT KAUFEN</span>
        </a>
        <p class="people">Von <b class="buyNum"><?php echo $buyNum;?></b> Personen gekauft</p>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payments start -->
  <div class="payments wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  <!-- payments end -->

  <!-- cause start -->
  <div class="cause">
    <div class="wrapper">
      <h2>Warum wählen über 150 Millionen Nutzer Driver Booster?</h2>
      <p>
        Denn wird dein PC bis zu 200% schneller als bisher laufen, Driver Booster hält die Gerätetreiber immer auf dem neuesten Stand und <span>verbessert die Stabilität der PC -Performance, mit der bewährten reiberaktualisierung und Sicherheitstechnik.</span>
      </p>
      <div class="circle c1"></div>
      <div class="circle c2"></div>
      <div class="circle c3"></div>
    </div>
  </div>
  <!-- cause end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Optimiere deine PC-Leistung mit den aktuellsten Treibern!</h2>
    <p>Mit Windows 10 kompatibel</p>
    <div class="clearfix panel">
      <div class="list one">
        <span class="icons01"></span>
        <dl>
          <dt>Spiel-Komponenten-Datenbank <b>Verbessert</b></dt>
          <dd>Einschließlich VC Runtime 2008, VC Runtime 2010 und VC <br>Runtime 2012, VC Runtime 2013.</dd>
        </dl>
      </div>
      <div class="list two">
        <span class="icons02"></span>
        <dl>
          <dt>Größere Datenbank <b>Verbessert</b></dt>
          <dd>Unterstützung für über 1.000.000 Treiber,und erkennt <br>fehlende und fehlerhafte Treiber.</dd>
        </dl>
      </div>
      <div class="list three">
        <span class="icons03"></span>
        <dl>
          <dt>100% Sicher <b>Verbessert</b></dt>
          <dd>Alle Treiber aus Driver Booster 5 <br>haben die WHQL-Tests bestanden.</dd>
        </dl>
      </div>
      <div class="list four">
        <span class="icons04"></span>
        <dl>
          <dt>Auto-Backup-Funktion <br> <b class="neu">Neu</b></dt>
          <dd>Hilft bei der Wiederherstellung <br>unerwünschter Treiber-Updates<br> jederzeit!</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <div class="score">
        <div class="title">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/score-icon.png')?>" alt=""/>
            <h2>Free Version</h2>
          </div>
          <div class="vs fl">vs</div>
          <div class="right fr">
            <h2>PRO Version</h2>
            <img src="<?php echo getStaticUrl('images/score-db.png')?>" alt=""/>
          </div>
        </div>
        <div class="tablebox">
          <table border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
            <tr>
              <td class="itema"><i class="all-icons star hollow">☆☆☆☆☆</i></td>
              <td class="itemb">200% größere Datenbank</td>
              <td class="itemc"><i class="all-icons star solid">★★★★★</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons star">★☆☆☆☆</i></td>
              <td class="itemb">Glattes Spielerlebnis</td>
              <td class="itemc"><i class="all-icons star solid">★★★★★</i></td>
            </tr>
            <tr class="three">
              <td class="itema"><i class="all-icons star">★☆☆☆☆</i></td>
              <td class="itemb">Geschwindigkeit von Treiber-Updates</td>
              <td class="itemc"><i class="all-icons star solid">★★★★★</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons star hollow">☆☆☆☆☆</i></td>
              <td class="itemb">Automatisches Backup aller Treiber</td>
              <td class="itemc"><i class="all-icons star solid">★★★★★</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons star hollow">☆☆☆☆☆</i></td>
              <td class="itemb">Automatische Updates auf die neuste Version</td>
              <td class="itemc"><i class="all-icons star solid">★★★★★</i></td>
            </tr>
          </table>
        </div>
        <a class="mehr" href="javascript: void(0)">Mehr erfahren>></a>
      </div>
      <div class="donation clearfix">
        <h2>Die kostenfreie Geschenke nur in der Fußball WM 2018!</h2>
        <h3>Jetzt erhältest du drei nützliche Tools kostenlos!</h3>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/gift-iu.png')?>" alt="IObit Uninstaller PRO"/></dt>
          <dd>
            <h4>IObit Uninstaller PRO</h4>
            <p><strong>0€</strong> <del>23,90€</del></p>
            <p>Schnellere Entfernung von Plug-ins <br>Starke Deinstallation von unerwünschten Programmen</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="Protected Folder"/></dt>
          <dd>
            <h4>Protected Folder</h4>
            <p><strong>0€</strong> <del>39,95€</del></p>
            <p>Keine Sorgen um Datendiebstahl <br>Ihre wichtigen und persönlichen Dateien schützen</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="Smart Defrag PRO"/></dt>
          <dd>
            <h4>Smart Defrag PRO</h4>
            <p><strong>0€</strong> <del>29,90€</del></p>
            <p>Schneller Zugriff auf Dateien <br>Festplatten sicher & automatisch defragmentieren</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- reason start -->
  <div class="reason">
    <div class="wrapper">
      <h2>Driver Booster bemüht sich, deine Probleme zu lösen:</h2>
      <ul>
        <li><i class="all-icons">×</i> alle veralteten und seltenen Treiber finden und aktualisieren</li>
        <li class="two">
          <i class="all-icons">×</i> deine Geräteprobleme beheben und deinen PC reibungsloser laufen lassen
        </li>
        <li class="three"><i class="all-icons">×</i> dein Spiel reibungslos laufen lassen.</li>
        <li class="four">
          <i class="all-icons">×</i>
          das Problem lösen, dass dein PC ständig Verzögerungen hatte / oftmals eingefroren ist
        </li>
        <li class="five"><i class="all-icons">×</i> frustriert mit Zeitverschwendung durch langsame Aktualisierungsgeschwindigkeit</li>
        <li class="six"><i class="all-icons">×</i> alle Treiber Up-to-Date und meinen PC auf das höchste Leistungsniveau halten</li>
      </ul>
    </div>
  </div>
  <!-- reason end -->

  <div class="wrapper">
    <!-- awards start -->
    <div class="awards">
      <h2>Medien-Auszeichnungen</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review">
      <div class="content">
        <dl class="active">
          <dt>
          <h3>Media Review</h3></dt>
          <dd>
            <h4>
              „Automatische Treiberdownloads gibt es nur in der kostenpflichtigen Pro-Version.“
            </h4>
          </dd>
          <dd>
            „Damit es keine unschönen Überraschungen gibt, legt der "IObit Driver Booster Pro" zuvor einen Wiederherstellungspunkt an.  Hat bei einer Treiber-Installation einmal etwas nicht geklappt, erlaubt die neue "Roll Back"-Funktion die einfache Rückkehr zu einer älteren Treiber-Version.  Neben schnelleren Downloadleitungen bietet der Hersteller eine breitere Hardware-Unterstützung und eine Backup-Funktion bei der erweiterten Pro-Version der Software an.“   
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>Kundenbewertung</h3></dt>
          <dd>
            <h4>"Mein PC ist schneller, sicherer und fühlt sich neuer an als noch vor 8 Monaten."</h4>
          </dd>
          <dd>
            "Durch Driver Booster weiß ich mit Leichtigkeit, welche Gerätetreiber veraltet sind und kann diese einfach updaten. Nebenbei hilft es mir auch dabei, Soundfehler, Netzwerkfehler, Gerätefehler usw. zu beheben. Ich hatte es vor dem Gebrauch nicht geglaubt, aber nach wenigen Anwendungen, lernte ich es zu lieben. Mein PC ist schneller, sicherer und fühlt sich neuer an als noch vor 8 Monaten. Danke IObit."
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>Kundenbewertung</h3></dt>
          <dd>
            <h4>
              "Ich kann Driver Booster nur dringendst empfehlen, er wird euch dabei helfen, Updates und Treiber schnell und einfach zu updaten."
            </h4>
          </dd>
          <dd>
            „Driver Booster ist eine großartige Anwendung. Für jemanden, der viele Anwendungen und Treiber besitzt, aber nicht die Zeit dafür hat diese manuell zu aktualisieren, kann Driver Booster nur dringendst empfehlen, er wird Euch dabei helfen, Updates und Treiber schnell und einfach zu updaten.“
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>Kundenbewertung</h3></dt>
          <dd>
            <h4>
              "Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"
            </h4>
          </dd>
          <dd>
            "Das ist eines der besten Programme, um Treiber zu aktualisieren. Microsoft hat mir sogar Updates vorgeschlagen, die nicht auf meinem System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche, und hat sie ohne Fehler installiert. Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li class="active">
          <div class="pic"><img src="<?php echo getStaticUrl('images/chip-de.png')?>" alt="Chip.de">
          </div>
          <p>Chip.de</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"></div>
          <p>Myo Thuya</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund">
          </div>
          <p>Adam Backlund</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler">
          </div>
          <p>Wayne Bowler</p>
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Welche Vorteile bietet dir die PRO Edition?</th>
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
            <td class="virtue">Scannt und erkennt automatisch veraltete, fehlende & fehlerhafte Treiber</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Updatet veraltete Treiber mit nur einem Klick</td>
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
            <td class="virtue">Größere Datenbank, um mehr veraltete & seltene Treiber zu updaten</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Reduziert Einfrieren & Abstürze des Systems für bessere Leistung</td>
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
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Erhalten Sie Vorzug bei Updates für Spielkomponenten für ein besseres Gaming-Erlebnis</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
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

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Notiz:</dt>
      <dd>
        *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
      </dd>
      <dd>*. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
    </dl>
    <!-- annotation end -->
    
    <!-- footer start -->
    <div class="footer">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
    <!-- footer end -->
  </div>

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/img-box-small.png')?>" alt=""/></div>
      <h2 class="fl">85% Rabatt auf DB PRO und erhältest du ein besonderes Geschenkpaket (im Wert von 93,75€) Gratis!</h2>
      <div class="price fr">
        <p><strong>26,99€</strong> <span class="all-icons">UVP</span> <del>183,74€</del></p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=de-db53pciusdpf2699&ref=de_db53bundle1806<?php echo $refStr;?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase201806-de')">
          <span>JETZT KAUFEN</span>
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  
<script>
  var imgSrc = "<?php echo getStaticUrl('images/dbox-55-active.png')?>";
  var midimgSrc = "<?php echo getStaticUrl('images/sd-box-gray.png')?>";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>