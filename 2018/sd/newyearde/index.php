<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  $packsCount=299;
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
  $refStr='';
  if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide'))){
    $refStr.='-'.$_GET['ref'];
  }
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie bis zu 70% auf Smart Defrag Pro</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,600'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script>
    function getPacksNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>r="+Math.random(),
        success: function(packs){
          $('.packsNum').html(packs);
          setTimeout('getPacksNum()', 10000);
        }
      });
    }
    setTimeout('getPacksNum()', 10000);
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
        <h1>Neujahrsaktion 70% reduziert </h1>
        <h2>nur für kurze Zeit 2 KAUFEN 1 ZAHLEN </h2>
      </div>
      <div class="offer clearfix">
        <dl class="first">
          <dt><img src="<?php echo getStaticUrl('images/sdbox.png')?>" alt="" /></dt>
          <dd><strong>19,99€ </strong> <del>29,99€</del></dd>
          <dd class="name"><i class="all-icons"></i>1 Jahresabo für 3 Computer</dd>
          <dd class="last">Mehr Festplatten-Leistung &amp; PC-Tempo</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pfbox.png')?>" alt="" /></dt>
          <dd><strong>0€ </strong> <del>39,95€</del></dd>
          <dd class="name"><i class="all-icons"></i>1 Jahresabo für 1 Computer</dd>
          <dd class="last">Besserer Schutz für Ihre Daten</dd>
        </dl>
        <div class="fr informa">
          <img src="<?php echo getStaticUrl('images/sdpfbox.png')?>" alt="" />
          <div class="price">
            <p><strong>19,99€</strong> <span><del>69,94€</del> <b>49,95€ gespart</b></span></p>
            <a class="buybtn" href="http://www.iobit.com/buy.php?product=de-sd53pcpf1999&ref=de_sd53pcpf1801<?php echo $refStr;?>&refs=de_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201801-de')">
              JETZT SPAREN
            </a>
            <p>Nur <span class="packsNum"><?php echo $packsNum;?></span> Deals erhältlich!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- payments start -->
  <div class="payments ">
    <div class="wrapper">
      <img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" />
    </div>
  </div>
  <!-- payments end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Ultimative Performance für Ihre Festplatte - Smart Defrag Pro!</h2>
    <div class="cont clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <div class="fl">
        <h3>Warum soll man die Pro-Version erwerben?</h3>
        <ul>
          <li><i class="all-icons"></i>Intelligenter Defragmentierer mit über 5.000.000 Pro-Nutzern</li>
          <li><i class="all-icons"></i>Sichere &amp; automatische Festplattendefragmentierung </li>
          <li><i class="all-icons"></i>Maximale Festplattenleistung und schnellerer Dateizugriff</li>
          <li><i class="all-icons"></i>Um bis zu 100% schnellere Systemstart und PC-Spiele</li>
        </ul>
        <a class="compareBtn" href="javascript: void(0);">Unterschiede zwischen den Free &amp; Pro-Versionen ></a>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Von den folgenden Medien ausgezeichnet</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
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
            „Mein „Smart Defragt 5 Pro“ auf auto defragmentieren zu stellen und einmal die Woche „Defragmentieren und Optimieren“ durchlaufen zu lassen, hält mein System ruhig und gesund.“
          </h4>
        </dd>
        <dd>
          „Ich habe Iobit’s Produkte für eine gute Anzahl an Jahren genutzt. Weil eine ältere Maschine mit 6 Treibern, 2 davon extern, nutze, finde ich, dass mir Iobit’s „Smart Defrag 5 Pro“ sehr gut gedient hat. Als eine ältere Maschine neigt mein Computer dazu, sehr schnell fragmentiert zu werden. Mein „Smart Defragt 5 Pro“ auf autodefragmentieren zu stellen und einmal die Woche „Defragmentieren und Optimieren“ durchlaufen zu lassen, hält mein System ruhig und gesund. Iobit rüstet stetig auf und strebt danach über die Zeit hinweg das Produkt immer weiter zu verbessern. Ich bin mit diesem Produkt sehr zufrieden.“
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
            „Smart Defrag v5 ist eine große Bereicherung für mein System. Es macht alles was ich will und benötige.“
          </h4>
        </dd>
        <dd>
          „Ich bin mit Smart Defrag v5 sehr zufrieden. Es ist jedes Mal wie Magie. Ich muss nur das Programm laufen lassen und schon ist alles sauber. Ich bin zu 100% zufrieden. Nicht nur mit dem Programm, sondern auch mit den schnellen Antworten, wenn ich Hilfe bei Problemen benötige. Das schätze ich sehr.“
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

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Welche Vorteile bietet Ihnen die PRO Edition :</th>
          <td class="space"></td>
          <th class="itemb">Smart Defrag <b>FREE</b></th>
          <td class="space"></td>
          <th class="itema">
            Smart Defrag PRO
            <p>1 Jahr, 3 PC + Geschenk</p>
            <a class="buybtn" href="http://www.iobit.com/buy.php?product=de-sd53pcpf1999&ref=de_sd53pcpf1801<?php echo $refStr;?>&refs=de_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201801-de')">
              JETZT SPAREN
            </a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Grundlegende Defragmentierung der Festplatte und Optimierung</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Bis zu 200% schnellere Datenzugriffsgeschwindigkeit</td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Boot-Time-Defragmentierung für schnelleren PC-Start</td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Defragmentiert fragmentierte Dateien automatisch und intelligent</td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Angepasste Defragmentierungsmethode​n &amp; Festplatten/Dateien können defragmentiert werden</td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Verwendung von DMA für eine verbesserte, schnellere &amp; stabilere Übertragung von Dateien</td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Keine Unterbrechung bei Arbeiten oder Spielen mit dem stillen Modus</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Top Spielerfahrung mit Spieloptimerung</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Geplante Aufgabe unterstützt leere Defragmentierung</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Automatisches Update auf die neueste Version</td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Kostenloser 24/7 technischer Support</td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th class="text" colspan="2"></th>
          <td class="space"></td>
          <th class="itemb">Smart Defrag <b>FREE</b></th>
          <td class="space"></td>
          <th class="itema">
            <p>1 Jahr, 3 PC + Geschenk</p>
            <p><strong>19,99€ </strong> <del>69,94€</del></p>
            <a class="buybtn" href="http://www.iobit.com/buy.php?product=de-sd53pcpf1999&ref=de_sd53pcpf1801<?php echo $refStr;?>&refs=de_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201801-de')">
              JETZT SPAREN
            </a>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->
  <div class="footer">
    <!-- annotation start -->
    <dl class="annotation wrapper">
      <dt>Notiz:</dt>
      <dd>
        *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
      </dd>
      <dd>*. Daten können auf der Grundlage verschiedener Systeme oder Computer geändert werden.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <p> Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>
  <!-- footer end -->


  <!-- backtotop start -->
  <div class="backtotop">
    <a href="javascript: void(0);"><img src="<?php echo getStaticUrl('images/backtotop.png')?>" alt="" /></a>
    <p>Nach oben</p>
  </div>
  <!-- backtotop end -->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>