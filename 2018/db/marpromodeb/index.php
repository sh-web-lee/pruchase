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
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie bis zu 77% auf Driver Booster&amp; erhalten Sie ein Geschenk kostenlos!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:600,800'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
  function strFormat(str){
    return str.replace(/,/g, '.');
  }
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
      success: function(packs){
        $('.buy-num').html(strFormat(packs));
        setTimeout('getBuyNum()', 20000);
      }
    });
  }
  setTimeout('getBuyNum()', 20000);
</script>  
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <div class="title">
        <img src="<?php echo getStaticUrl('images/title.png')?>" alt="" />
      </div>
      <div class="panel clearfix">
        <div class="box left" data-num="0">
          <div class="top">
            <img src="<?php echo getStaticUrl('images/dbox-40.png')?>" alt="" />
            <h3>1 Jahr/ 1 PC</h3>
          </div>
          <div class="bottom price">
            <p>
              <strong><span class="discount">24</span><small>,99€</small></strong> <span class="all-icons uvp">UVP</span><del class="original">69,99€</del>
            </p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=de-db51pc2499&ref=de_db51pcpurchase1805<?php echo $refStr;?>&refs=de_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1PC1805-de')">
              <b>JETZT KAUFEN</b> 
              45€ sparen 
            </a>
          </div>
        </div>
        <div class="box center active" data-num="2">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/dbox-75.png')?>" alt="" />
            <div class="price">
              <p>
                <strong><span class="discount">26</span><small>,99€</small></strong> <span class="all-icons uvp">UVP</span><del class="original">119,89€</del>
              </p>
              <a class="buybtn"
                 href="http://www.iobit.com/buy.php?product=de-db53pcsd2699&ref=de_db5sdpurchase1805<?php echo $refStr;?>&refs=de_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsd1805-de')">
                <b>JETZT KAUFEN</b> 
                92,90€ sparen
              </a>
              <p class="people">Von <b><span class="buynum">212</span><span class="buynum pop">212</span></b> Personen gekauft</p>
            </div>
            <div class="date">
              <h5>HEUTE NUR</h5>
              <div class="cuntdown">
                <div class="scroll-tick"></div>
                <div class="scroll-tick"></div>
              </div>
              <h5>DEALS ÜBRIG</h5>
            </div>
          </div>
        </div>
        <div class="box right" data-num="1">
          <div class="top">
            <img src="<?php echo getStaticUrl('images/dbox-55.png')?>" alt="" />
            <h3>1 Jahr/ 3 PCs</h3>
          </div>
          <div class="bottom price">
            <p>
              <strong><span class="discount">26</span><small>,99€</small></strong> <span class="all-icons uvp">UVP</span><del class="original">89,99€</del>
            </p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=de-db53pc2699&ref=de_db53pcpurchase1805<?php echo $refStr;?>&refs=de_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PC1805-de')">
              <b>JETZT KAUFEN</b> 
              63€ sparen
            </a>
          </div>
        </div>
      </div>
      <!-- payments start -->
      <div class="payments">
        <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
      </div>
      <!-- payments end -->
    </div>
  </div>
  <!-- banner end -->

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
      <h2>Das kostenfreie Geschenk nur für Zeitlich begrenzte Deals</h2>
      <div class="clearfix">
        <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="" />
        <h3>Smart Defrag PRO</h3>
        <p><strong>0<small>€</small></strong> <del>23,90€</del></p>
        <p>Defragmentiert die Festplatten und verbessert deine PC-Leistung</p>
        <h4>Driver Booster PRO + Smart Defrag PRO</h4>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=de-db53pcsd2699&ref=de_db5sdpurchase1805<?php echo $refStr;?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsd1805-de')">
          JETZT ERHALTEN
        </a>
        <p class="people">von <b class="buynum">212</b> Menschen aktiviert</p>
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
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imgbox pcsd fl"></div>
      <ul class="fl">
        <li>
          <i class="all-icons">◎</i>
          <b>1 Jahr/ 1 PC</b>
          <strong>-45€ sparen</strong>
        </li>
        <li>
          <i class="all-icons">◎</i>
          <b>1 Jahr/ 3 PCs</b>
          <strong>-63€ sparen</strong>
        </li>
        <li class="active">
          <i class="all-icons">◎</i>
          <b>1 Jahr/ 3 PCs + SD Gratis</b>
          <strong>-92,9€ sparen</strong>
        </li>
      </ul>
      <div class="price fr">
        <p>
          <strong><span class="discount">26</span><small>,99€</small></strong> <span class="all-icons uvp">UVP</span><del class="original">119,89€</del>
        </p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=de-db53pcsd2699&ref=de_db5sdpurchase1805<?php echo $refStr;?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsd1805-de')">
          <b>JETZT SPAREN!</b> 
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <!-- annotation start -->
      <dl class="annotation">
        <dt>Notiz:</dt>
        <dd>
          *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
        </dd>
        <dd>*. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
      </dl>
      <!-- annotation end -->
      <p>Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
  </div>
  <!-- footer end -->
<script>
  var imgSrc = "<?php echo getStaticUrl('images/dbox-55-active.png')?>";
  var midimgSrc = "<?php echo getStaticUrl('images/sd-box-gray.png')?>";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>