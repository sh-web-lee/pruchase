<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
  $refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
  if(in_array($_GET['pop'],array('x_db','xi_db','xb_db'))){
    $refStr.='-'.$_GET['pop'];
  }
  if(!empty($_GET['to'])){
    $refStr.='-'.$_GET['to'];
  }
  if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
  }
  $refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
  $refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
  $refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
  $refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
  $refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Bis zu 83% Rabatt auf Driver Booster PRO & kostenloses Datenschutz-Tool - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700,700i,900'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
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
<!--  start -->
<!--  end -->
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="top clearfix">
        <a class="logo fl" href="http://www.iobit.com" target="_blank">
          <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit" />
        </a>
        <div class="fr">
          <span>Sichere Website</span>
          <img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="" />
        </div>
      </div>
      <div class="clearfix">
        <div class="left fl">
          <h2>Mehr als <b class="off">107,95€</b> <span><strong class="percent">83%</strong> reduziert !</span></h2>
          <div class="boxpc">
            <img class="pcs active" src="<?php echo getStaticUrl('images/box3pc.png')?>" alt="" />
            <img class="pc" src="<?php echo getStaticUrl('images/box1pc.png')?>" alt="" />
          </div>
          <!-- time -->
          <ul id="countdown" class="countdown">
            <li><strong>00</strong></li>
            <li><strong>00</strong></li>
            <li><strong>00</strong></li>
            <li><strong>000</strong></li>
          </ul>
        </div>
        <div class="right fr">
          <h1>Sonderangebote für treue Benutzer</h1>
          <h4>Bis zu 83% Rabatt auf Driver Booster Pro & kostenloses Geschenk!</h4>
          <div class="choice">
            <div class="list pcs active" data-url="http://www.iobit.com/buy.php?product=de-db83pcpf2199&ref=de_db3pcoldspecial2006<?php echo $refStr;?>&refs=de_purchase_db" data-off="107,95€" data-percent="83%">
              <div class="fl">
                <h3>Driver Booster PRO</h3>
                <b>3PCs, 1 Jahr</b>
                <p><i class="all-icons"></i>Protected Folder  <b>GRATIS</b></p>
              </div>
              <div class="fr"><strong class="original">21,99€ </strong> <del class="discount">129,94€</del></div>
            </div>
            <div class="list pc" data-url="http://www.iobit.com/buy.php?product=de-db81pc2099&ref=de_db1pcoldspecial2006<?php echo $refStr;?>&refs=de_purchase_db" data-off="49€" data-percent="70%">
              <div class="fl">
                <h3>Driver Booster PRO</h3>
                <b>1PC, 1 Jahr  </b>
              </div>
              <div class="fr"><strong class="original">20,99€ </strong> <del class="discount">69,99€</del></div>
            </div>
          </div>
          <a class="buybtn" 
             href="http://www.iobit.com/buy.php?product=de-db83pcpf2199&ref=de_db3pcoldspecial2006<?php echo $refStr;?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dboldspecial202006-de')">
            JETZT KAUFEN
          </a>
          <p>
            <i class="all-icons"></i>
            Bereits <strong class="buyNum buy-num"><?php echo $buyNum ?></strong> Deals verkauft 
          </p>
        </div>
      </div>
      
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- payments start -->
  <div class="payments">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  </div>
  <!-- payments end -->

  <!-- cause start -->
  <div class="cause">
    <div class="wrapper">
      <h2>Warum wählen über 150 Millionen Nutzer Driver Booster? </h2>
      <p>
        Dein PC wird bis zu 200% schneller als bisher laufen,  Driver Booster hält die Gerätetreiber <span>immer auf dem neuesten Stand und verbessert die Stabilität der PC -Performance, mit der</span> bewährten Treiberaktualisierung und Sicherheitstechnik.
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
    <p><img src="<?php echo getStaticUrl('images/win10.png')?>" alt="" /> <span>Mit Windows 10 kompatibel</span></p>
    <div class="clearfix panel">
      <div class="fl">
        <div class="list one">
          <img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" />
          <dl>
            <dt><h3>Bessere Spiel-Leistung</h3></dt>
            <dd>Komponenten für gängige PC-Spiele wie Counter-Strike, League of Legends, Dota usw. können aktualisiert werden</dd>
          </dl>
        </div>
        <div class="list">
          <img src="<?php echo getStaticUrl('images/list02.png')?>" alt="" />
          <dl>
            <dt><h3>Schnellere Downloads</h3></dt>
            <dd>Treiber werden mit maximaler Geschwindigkeit heruntergeladen</dd>
          </dl>
        </div>
      </div>
      <div class="fr">
        <div class="list one">
          <img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" />
          <dl>
            <dt><h3>Größere Treiberdatenbank</h3></dt>
            <dd>Unterstützt mehr als 4.500.000 Treiber und erkennt fehlende & fehlerhafte Treiber</dd>
          </dl>
        </div>
        <div class="list">
          <img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" />
          <dl>
            <dt><h3>Sicheres Backup</h3></dt>
            <dd>Automatische Wiederherstellung der Treiber im Falle eines Problems</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation wrapper">
    <h2>Exklusives Geschenk für dich im Jahr 2018</h2>
    <p>Jetzt erhältst du ein Datenschutz-Tool kostenlos!</p>
    <div class="clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/giftbox.png')?>" alt="" />
      <div class="fl">
        <h3>Protected Folder  <b>Gratis</b></h3>
        <ul>
          <li><i class="all-icons"></i>Keine Sorgen um Datendiebstahl</li>
          <li><i class="all-icons"></i>Deine wichtigen und persönlichen Dateien schützen </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Spare bis zu 83% Rabatt auf Driver Booster PRO heute,</h2>
      <p>und erhalte ein besonderes Geschenk <b>GRATIS!</b></p>
      <div class="clearfix">
        <div class="boxpc fl">
          <img class="pcs active" src="<?php echo getStaticUrl('images/box3pc.png')?>" alt="" />
          <img class="pc" src="<?php echo getStaticUrl('images/box1pc.png')?>" alt="" />
        </div>
        <div class="smchoice fl">
          <div class="list pcs active">
            <h3>3PCs + Protected Folder</h3>
            <b>107,95€ sparen</b>
          </div>
          <div class="list pc">
            <h3>1PC <b>49€ sparen</b></h3>
          </div>
        </div>
        <div class="price fr">
          <strong class="original">21,99€ </strong> <del class="discount">129,94€</del>
          <a class="buybtn" 
             href="http://www.iobit.com/buy.php?product=de-db83pcpf2199&ref=de_db3pcoldspecial2006<?php echo $refStr;?>&refs=de_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dboldspecial202006-de')">
            JETZT KAUFEN
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- describe start -->
  <div class="describe">
    <div class="wrapper">
      <h2>Driver Booster bemüht sich, deine Probleme zu lösen</h2>
      <ul>
        <li><i class="all-icons"></i>alle veralteten und seltenen Treiber finden und aktualisieren </li>
        <li><i class="all-icons"></i>deine Geräteprobleme beheben und deinen PC reibungsloser laufen lassen </li>
        <li><i class="all-icons"></i>dein Spiel reibungslos laufen lassen.</li>
        <li>
          <i class="all-icons"></i>
          das Problem lösen, dass dein PC ständig Verzögerungen hatte / oftmals eingefroren ist
        </li>
        <li><i class="all-icons"></i>deine Zeit durch maximale Download-Geschwindigkeit der Treiber sparen</li>
        <li><i class="all-icons"></i>alle Treiber Up-to-Date und den PC auf das höchste Leistungsniveau halten</li>
      </ul>
    </div>
  </div>
  <!-- describe end -->
  <div class="wrapper">
    <!-- awards start -->
    <div class="awards">
      <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
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
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/chip-de.png" alt="Chip.de">
          </div>
          <p>Chip.de</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya"></div>
          <p>Myo Thuya</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund">
          </div>
          <p>Adam Backlund</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
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
            <th class="itema">Driver Booster <b>PRO</b></th>
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
            <td class="virtue">Finden und updaten Sie veraltete Treiber mit nur einem Klick</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Entsperrt die Geschwindigkeitsbeschränkung von Treiber-Updates</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Größere DatenBank, um mehr veraltete &amp; seltene Treiber zu updaten</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Reduziert Einfrieren &amp; Abstürze des Systems für bessere Leistung</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Automatische Download- und Installationsfunktion beim Systemleerlauf</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Automatisches Backup aller Treiber zur Sicherheitswiederherstellung</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Erhalten Sie Vorzug bei Updates für Spielkomponenten für ein besseres Gaming-Erlebnis</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Sicheres Updaten mit AUSSCHLIEßLICH zertifizierten WHQL Treibern</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Automatische Updates auf die neuste Version</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Kostenloser technischer Support 24/7</td>
            <td class="space"></td>
            <td class="itemb"></td>
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
        * Solche Werbeaktionen können von IObit nach eigenem Ermessen zu jeder Zeitund ohne vorheriger Ankündigung geändert werden.
      </dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
    <!-- footer end -->

  </div>
  <!-- container end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="fl">
        <h2>Optimiere deine PC-Leistung mit den aktuellsten Treibern!</h2>
        <ul class="fchoice">
          <li class="list active"><b>1 Jahr, 3 PCs</b><span><strong>21,99€ </strong> UVP*<del>129,94€</del></span></li>
          <li class="list"><b>1 Jahr, 1 PC</b> <span><strong>20,99€ </strong> UVP*<del>69,99€</del></span></li>
        </ul>
      </div>
      <div class="fr">
        <p>Mehr als <b class="off">107,95€</b> <b class="percent">83%</b> reduziert !</p>
        <a class="buybtn" 
           href="http://www.iobit.com/buy.php?product=de-db83pcpf2199&ref=de_db3pcoldspecial2006<?php echo $refStr;?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dboldspecial202006-de')">
          JETZT KAUFEN
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>