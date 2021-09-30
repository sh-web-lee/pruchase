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
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName));
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
$reduceNum=152813229;
$reTime=10;
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$packsCount = 212;
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie bis zu 83% auf Driver Booster& erhalten Sie ein tolles Geschenkpaket kostenlos!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700'>
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
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <div class="title">
        <h1>Prost Neujahr! - täglich stehen nur 300 Pakete zur verf</h1>
        <p>Bis zu 83% auf DB PRO sparen und extra ein nützliches Geschenkpaket gratis erhalten!</p>
      </div>
      <div class="panel clearfix">
        <div class="offer left" data-num="2">
          <img src="<?php echo getStaticUrl('images/dbox-40.png')?>" alt=""/>
          <p>1 Jahr, 1 PC</p>
          <p><strong class="discount">24,99€</strong> <span class="uvp">UVP <del class="original">45,99€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-db61pcnouvp2499&ref=de_db61pcpurchase1901<?php echo $refStr;?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1PC1901-de')">
            <b>Jetzt kaufen</b>
            <p>21€ sparen</p>
          </a>
        </div>
        <div class="offer center" data-num="0">
          <div class="giftbox">
            <i class="all-icons"></i>
            <strong>Heute nur <b class="giftnum">88</b> Deals übrig</strong>
          </div>
          <img src="<?php echo getStaticUrl('images/dbox-83.png')?>" alt=""/>
          <p>1 Jahr, 3 PCs</p>
          <p><strong class="discount">26,99€</strong> <span class="uvp">UVP <del class="original">159,93€</del></span></p>
          <a class="buybtn yellowbtn" href="https://www.iobit.com/buy.php?product=de-db63pcsdpf2699&ref=de_db6sdpfpurchase1901<?php echo $refStr;?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsd1901-de')">
            <b>Jetzt kaufen</b>
            <p>132,94€ sparen</p>
          </a>
          <p class="people">Von <span class="packsCount"><?php echo $packsCount;?></span> Personen gekauft</p>
        </div>
        <div class="offer right" data-num="1">
          <img src="<?php echo getStaticUrl('images/dbox-55.png')?>" alt=""/>
          <p>1 Jahr, 3 PCs</p>
          <p><strong class="discount">26,99€</strong> <span class="uvp">UVP <del class="original">65,99€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-db63pcnouvp2699&ref=de_db63pcpurchase1901<?php echo $refStr;?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PC1901-de')">
            <b>Jetzt kaufen</b>
            <p>39€ sparen</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payments start -->
  <div class="payments">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  </div>
  <!-- payments end -->

  <!-- cause start -->
  <div class="cause">
    <div class="wrapper">
      <h2>Warum wählen über 250 Millionen Nutzer Driver Booster?</h2>
      <p>
        Weil Ihr PC bis zu 200% schneller laufen wird als bisher, indem Driver Booster die Gerätetreiber auf <br>dem neuesten Stand hält und die Stabilität der PC-Leistung mit Treiberaktualisierungen und bewährter Sicherheitstechnik verbessert.
      </p>
    </div>
  </div>
  <!-- cause end -->

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

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Das kostenfreie Geschenkpaket nur für Zeitlich begrenzte Deals</h2>
      <div class="clearfix">
        <dl class="sd">
          <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/></dt>
          <dd>
            <h4>Smart Defrag PRO</h4>
            <strong>0€</strong>
            <p>Defragmentiert die Festplatte und verbessert Ihre PC-Leistung.</p>
          </dd>
        </dl>
        <dl class="pf">
          <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
          <dd>
            <h4>Protected Folder</h4>
            <strong>0€</strong>
            <p>Bietet Passwortschutz für Ordner und Dateien für Windowsnutzer.</p>
          </dd>
        </dl>
      </div>
      <h3>DB PRO + ein tolles Geschenkpaket</h3>
      <p class="people">von <span class="buynum"><?php echo $buyNum;?></span> Menschen aktiviert</p>
      <a class="buybtn yellowbtn" href="https://www.iobit.com/buy.php?product=de-db63pcsdpf2699&ref=de_db6sdpfpurchase1901<?php echo $refStr;?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsd1901-de')">
        Jetzt erhalten
      </a>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- reason start -->
  <div class="reason">
    <div class="wrapper">
      <h2>Ohne die PRO-Version können folgende Probleme auftreten und nicht gelöst werden:</h2>
      <ul class="clearfix">
        <li>
          <span><img src="<?php echo getStaticUrl('images/res-icon01.png')?>" alt=""/></span>
          <h3>Probleme bei der PC Nutzung</h3>
          <p>
            Ohne aktualisierte oder geeignete Treiber kann Ihr Computer nicht reibungslos laufen und er kann häufiger einfrieren oder abstürzen.
          </p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/res-icon02.png')?>" alt=""/></span>
          <h3>Schlechte Spiel-Leistung</h3>
          <p>
            Das Fehlen von Komponenten kann dazu führen, dass Ihr Spiel nicht erfolgreich geladen werden kann, und veraltete Treiber können dazu führen, dass Sie tolle Grafiken und andere Spielfunktionen verpassen.
          </p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/res-icon03.png')?>" alt=""/></span>
          <h3>Inkompatible Hardware</h3>
          <p>
            Wegen fehlender oder fehlerhafter Geräte kann Hardware wie Mäuse, Tastaturen oder Audiogeräte nicht reibungslos zusammenarbeiten.
          </p>
        </li>
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
            “Das ist eines der besten Programme, um Treiber zu aktualisieren. Microsoft hat mir sogar Updates vorgeschlagen, die nicht mit meinem System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche und hat sie ohne Fehler installiert. Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet! ”
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
      <div class="imgbox fl">
        <img class="center active" src="<?php echo getStaticUrl('images/dbox-83.png')?>" alt=""/>
        <img class="right" src="<?php echo getStaticUrl('images/dbox-55.png')?>" alt=""/>
        <img class="left" src="<?php echo getStaticUrl('images/dbox-40.png')?>" alt=""/>
      </div>
      <ul class="fl">
        <li class="center active" data-num="1">
          <i class="all-icons">◎</i>
          <b>1 Jahr/ 3 PCs + SD+PF gratis</b>
          <strong>-132,94€ sparen</strong>
        </li>
        <li class="right" data-num="2">
          <i class="all-icons">◎</i>
          <b>1 Jahr/ 3 PCs</b>
          <strong>-39€ sparen</strong>
        </li>
        <li class="left" data-num="0">
          <i class="all-icons">◎</i>
          <b>1 Jahr/ 1 PC</b>
          <strong>-21€ sparen</strong>
        </li>
      </ul>
      <div class="price fr">
        <p><strong class="discount">26,99€ </strong> <span>UVP <del class="original">159,93€</del></span></p>
        <a class="buybtn yellowbtn" href="https://www.iobit.com/buy.php?product=de-db63pcsdpf2699&ref=de_db6sdpfpurchase1901<?php echo $refStr;?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsd1901-de')">
          Jetzt sparen! 
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
        <dd>*. Daten können sich system- oder computerabhängig ändern.</dd>
      </dl>
      <!-- annotation end -->
      <p>Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
  </div>
  <!-- footer end -->

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

<script>
  var imgSrc = "<?php echo getStaticUrl('images/dbox-55-active.png')?>";
  var sdimgSrc = "<?php echo getStaticUrl('images/sd-box-gray.png')?>";
  var pfimgSrc = "<?php echo getStaticUrl('images/pf-box-gray.png')?>";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>