<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'desdson_p' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 67;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 2) {
      setcookie($c_name, 2, time() + 3600 * 24);
      $packsNum = 2;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo $packsNum;
  exit();
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Holen Sie sich unser Spezial-Angebot zu Smart Defrag PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
      <h1> Blitzangebot </h1>
      <h2> Kaufen Sie Smart Defrag und bekommen Protected Folder <strong>gratis</strong> dazu.</h2>
      <div class="box">
        <img src="<?php echo getStaticUrl('images/sd-one-box.png')?>" alt="" class="img-box" />
        <p>   1 Jahr, 3 PCs</p>
        <strong><b>19</b>,99€</strong>
        <a href="https://www.iobit.com/buy.php?product=de-sd63pc1999&ref=de_sd6sale1906&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchasea1906-de')" class="buybtn border"> JETZT KAUFEN</a>
        <p class="last">Nur 0,55€/Monat/PC</p>
      </div>
      <div class="box three-box">
        <img src="<?php echo getStaticUrl('images/sd-gift-box.png')?>" alt="" class="img-box" />
        <p>   1 Jahr, 3 PCs</p>
        <strong><b>18</b>,99€</strong>
        <a href="https://www.iobit.com/buy.php?product=de-sd63pcpf1899&ref=de_sd6pfsale1906&refs=de_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchaseb1906-de')" class="buybtn"> JETZT KAUFEN</a>
        <div class="impotant">
          <span> <h3> Protected Folder  </h3> jetzt <strong>0€</strong> vorher <del>39,95€</del> <br> Verbessert die Sicherheit ihres Computers Schützt all ihre Dateien mit einem Passwort</span>
        </div>
        <p class="last"><img src="<?php echo getStaticUrl('images/hot.png')?>" alt="" /> <span class="buyNum">78</span> verkauft! <strong class="packsNum">26</strong> verfügbar!</p>
      </div>
    </div>
  </div>
 <div class="review-bg">
  <!-- awards start -->
  <div class="awards wrapper" >
    <h2>Von den folgenden Medien ausgezeichnet</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
  </div>
  <!-- awards end -->
  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>
            „Mein „Smart Defragt Pro“ auf auto defragmentieren zu stellen und einmal die Woche „Defragmentieren und Optimieren“ durchlaufen zu lassen, hält mein System ruhig und gesund.“
          </h4>
        </dd>
        <dd>
          „Ich habe Iobit’s Produkte für eine gute Anzahl an Jahren genutzt. Weil eine ältere Maschine mit 6 Treibern, 2 davon extern, nutze, finde ich, dass mir Iobit’s „Smart Defrag Pro“ sehr gut gedient hat. Als eine ältere Maschine neigt mein Computer dazu, sehr schnell fragmentiert zu werden. Mein „Smart Defragt Pro“ auf autodefragmentieren zu stellen und einmal die Woche „Defragmentieren und Optimieren“ durchlaufen zu lassen, hält mein System ruhig und gesund. Iobit rüstet stetig auf und strebt danach über die Zeit hinweg das Produkt immer weiter zu verbessern. Ich bin mit diesem Produkt sehr zufrieden.“
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>„Es ist sehr einfach zu bedienen und ein „Must have“ Tool für die Festplatte oder SSD.“</h4>
        </dd>
        <dd>
          „Ich verwende eine Kombination aus RAID 0 SSDs und RAID 0 HDDs und benutze Smart Defrag Pro um meine Laufwerke zu analysieren und zu defragmentieren, damit diese auf Spitzenniveau bleiben. Jede Software von IObit ist einfach zu installieren und zu nutzen und dabei sehr zuverlässig. Einfach nur installieren und dann vergessen. Smart Defrag benötigt sehr wenig Speicherplatz, sodass das System nicht verlangsamt wird. Sehr empfehlenswert.“das Produkt immer weiter zu verbessern. Ich bin mit diesem Produkt sehr zufrieden.“
        </dd>
      </dl>
      <dl class="active">
        <dt>
        <h3>Media Review</h3></dt>
        <dd>
          <h4>
            „Smart Defrag kommt nicht nur mit herkömmlichen HDD-Festplatten zurecht, sondern unterstützt zudem das moderne Solid-State-Drive-System (SSD).“
          </h4>
        </dd>
        <dd>
          „Sollte euch der Funktionsumfang des Programms nicht ausreichen, könnt ihr auf die kostenpflichtige Pro-Version setzen. Diese bietet unter anderem einen Auto-Modus, der die Festplatten im Hintergrund automatisch defragmentiert. Die kostenpflichtige Variante könnt ihr aus der Free-Version heraus aktivieren.“
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>
            „Mit Smart Defrag eine robustere und genauere Diagnose als dem Windows 10 Optimiser erzielen“
          </h4>
        </dd>
        <dd>
          „Ich nutze Smart Defrag seit der Erstveröffentlichung auf mehreren PCs und seit Beginn konnte ich zusammen mit den Mitgliedern meines Computerclubs stetige Verbesserungen erkennen. Bis auf die englische Sprache war es perfekt. Also habe ich meine Zeit für IObit‘s französische Übersetzung investiert. Seit dem empfehlen französische IT-Magazine Smart Defrag besonders, einschließlich des Windows 10 Optimierers für eine robustere und genauere Diagnose mit Optionen, den Systemstart zu beschleunigen.“
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>
            „Smart Defrag ist eine große Bereicherung für mein System. Es macht alles was ich will und benötige.“
          </h4>
        </dd>
        <dd>
          „Ich bin mit Smart Defrag sehr zufrieden. Es ist jedes Mal wie Magie. Ich muss nur das Programm laufen lassen und schon ist alles sauber. Ich bin zu 100% zufrieden. Nicht nur mit dem Programm, sondern auch mit den schnellen Antworten, wenn ich Hilfe bei Problemen benötige. Das schätze ich sehr.“
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/william-howes.png')?>" alt="William Howes">
        </div>
        <p>William Howes</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></div>
        <p>Edward Lee Ah Yen</p>
      </li>
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/netzwelt-de.png')?>" alt="NetzWelt.de">
        </div>
        <p>NetzWelt.de</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/roland-lalis.png')?>" alt="Roland LALIS">
        </div>
        <p>Roland LALIS</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten">
        </div>
        <p>Jim Parten</p>
      </li>
    </ul>
  </div>
  <!-- review end -->
  </div>
  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Sehen Sie, warum sich die PRO-Edition lohnt.</th>
          <th class="itema">Free</th>
          <th class="itemb">PRO</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
          <td class="text">Grundlegende Defragmentierung und Optimierung der Festplatte</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="itemb"><i class="all-icons yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt=""/></td>
          <td class="text">Defragmentiert Registrierungsdateien für mehr PC-Leistung</td>
          <td class="itema"><i class="all-icons circle">√</i></td>
          <td class="itemb"><i class="all-icons yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""/></td>
          <td class="text">Boot-Time-Defragmentierung für einen schnelleren PC-Start</td>
          <td class="itema"><i class="all-icons circle">√</i></td>
          <td class="itemb"><i class="all-icons yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""/></td>
          <td class="text">Bis zu 200% schnellere Datenzugriffsgeschwindigkeit</td>
          <td class="itema"><i class="all-icons circle">√</i></td>
          <td class="itemb"><i class="all-icons yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""/></td>
          <td class="text">Defragmentiert ausgewählte Dateien und Festplatten automatisch und intelligent</td>
          <td class="itema"><i class="all-icons circle">√</i></td>
          <td class="itemb"><i class="all-icons yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""/></td>
          <td class="text">Angepasste Defragmentierung von Dateien während des Systemstarts</td>
          <td class="itema"><i class="all-icons circle">√</i></td>
          <td class="itemb"><i class="all-icons yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""/></td>
          <td class="text">Verwendet DMA, um die Festplatten-Performance zu verbessern</td>
          <td class="itema"><i class="all-icons circle">√</i></td>
          <td class="itemb"><i class="all-icons yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""/></td>
          <td class="text">Schnellere und reibungslosere Spiele mit Spiel-Optimieren</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="itemb"><i class="all-icons yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""/></td>
          <td class="text">Automatische Updates auf die neuste Version</td>
          <td class="itema"><i class="all-icons circle">√</i></td>
          <td class="itemb"><i class="all-icons yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt=""/></td>
          <td class="text">Kostenloser technischer Support 24/7</td>
          <td class="itema"><i class="all-icons circle">√</i></td>
          <td class="itemb"><i class="all-icons yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt=""/></td>
          <td class="text">Schützt ihre Dateien gegen Ransomware und andere Gefahren </td>
          <td class="itema"><i class="all-icons circle">√</i></td>
          <td class="itemb"><i class="all-icons yellow">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th class="text" colspan="2">Verpassen Sie nicht das beste Angebot!</th>
          <th class="itema"><h3>Smart Defrag Free</h3></th>
          <th class="itemb">
            <div class="price">
              <p> Smart Defrag PRO  + Protected Folder</p>
              <strong>Nur <b>18</b>,99€    </strong>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=de-sd63pcpf1899&ref=de_sd6pfsale1906&refs=de_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchaseb1906-de')">
                JETZT SPAREN
              </a>
            </div>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->
  <div class="footer">
    <!-- annotation start -->
    <dl class="annotation wrapper">
      <dt>Hinweis:</dt>
      <dd>
        *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
      </dd>
      <dd>*. Daten können sich system- oder computerabhängig ändern.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="note ">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
    <!-- footer end -->
  </div>
  <!-- container end -->

  <!-- backtotop start -->
  <div class="backtotop"></div>
  <!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>