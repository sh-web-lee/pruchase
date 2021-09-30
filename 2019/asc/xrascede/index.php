<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float()*1000/20000) - 69041325;
$buyNum = number_format($buyNum);

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
$name=explode(' ',trim(get_line('data/maysale.txt',rand(1,40))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$viewNum=rand(60,88);

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $time = time();
  $c_name = 'deascxmax2019' . $date;
  if (!isset($_COOKIE[$c_name])) {
    setcookie($c_name, '321'.'-'.$time, $time + 3600 * 24 *2);
  } else {
    $packsNum = explode('-',$_COOKIE[$c_name]);
    $outtime = $time-$packsNum[1];
    if($outtime>10){
      $addPacks = ceil($outtime/4);
      $packsNum = $_COOKIE[$c_name] + $addPacks;
    }else{
      $packsNum = $_COOKIE[$c_name] + 1;
    }
    setcookie($c_name, $packsNum.'-'.$time, $time + 3600 * 24 * 2);
  }
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'viewNum'=>$viewNum));
  exit();
}
$refStr='';
if(in_array($_GET['pop'],array('xr_asce'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sparen Sie bis zu 85% auf Advanced SystemCare& erhalten Sie Ihre Weihnachtsgeschenke kostenlos!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <h1>Einfach mal das Beste zu Weihnachten!</h1>

    <div class="banlist">
      <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
      <div class="price">
        <p><strong><big>24</big>,99€</strong> UVP <del>59,99€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-asc133pc2499&ref=de_asc131pcsingle201912expired<?php echo $refStr;?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcexpired1912-de');">
          JETZT KAUFEN
        </a>
      </div>
      <ul class="txtlist">
        <li><i class="all-icons"></i> 35€ sparen</li>
        <li><i class="all-icons"></i> Advanced SystemCare PRO 59,99€</li>
      </ul>
      <div class="discount">
        <b>-58%</b>
        <p>1 Jahreslizenz</p>
      </div>
    </div>

    <div class="banlist big">
      <div class="gift"><i class="all-icons"></i> Von <b class="reduce"><span class="first"></span></b> Personen gekauft</div>
      <img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
      <div class="price">
        <p><strong><big>21</big>,99€</strong> UVP <del>149,92€</del></p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=de-asc13sdpfamc2199&ref=de_asc133pcbundle2199expired<?php echo $refStr;?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcbundleexpired1912-de');">
          JETZT KAUFEN
        </a>
      </div>
      <ul class="txtlist">
        <li><i class="all-icons"></i> 127,93€ sparen</li>
        <li><i class="all-icons"></i> Advanced SystemCare PRO 59,99€</li>
        <li><i class="all-icons red"></i> Smart Defrag PRO 29,99€</li>
        <li><i class="all-icons red"></i> Protected Folder 39,95€</li>
        <li><i class="all-icons red"></i> AMC Security PRO 19,99€</li>
      </ul>
      <div class="discount">
        <b>-85%</b>
        <p>1 Jahreslizenz</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Die fortschrittlichste Lösung zur Optimierung Ihres PCs bis zum Maximum!</h2>
    <div class="feature-box">
      <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
      <dl class="one">
        <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
        <dd>
          <h3>100% Schutz</h3>
          <p>
            Sie schützt Ihre Privatsphäre und Ihre Daten vor geheimem Zugriff, verhindert jeden Versuch böswilliger Eindringlinge und bietet gleichzeitig doppelt so viel Privatsphäre wie die kostenlose Version.
          </p>
        </dd>
      </dl>
      <dl class="two">
        <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
        <dd>
          <h3>200% * zügiger</h3>
          <p>
            Reinigt alle unnötigen Dateien und optimiert die CPU und den Arbeitsspeicher, um das Booten zu beschleunigen, erhöht die Geschwindigkeit des Systems, um den langsamen PC um bis zu 200% zu beschleunigen.
          </p>
        </dd>
      </dl>
      <dl class="three">
        <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
        <dd>
          <h3>300% * schneller</h3>
          <p>
            Die Geschwindigkeit von Downloads, Spielen, Internet-Browsing und Videoplattformen wie YouTube steigt um bis zu 300%.
          </p>
        </dd>
      </dl>
      <dl class="four">
        <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
        <dd>
          <h3>Mehr freien Platz</h3>
          <p>
            Bereinigt gründlich Junk-Dateien, ungültige Links, Systemprotokolldateien und unvollständige Download-Dateien mit erweiterter Optimierung.
          </p>
        </dd>
      </dl>
      <div class="scan"></div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- comparison -->
<div class="comparison wrapper" id="compare">
  <!-- title -->
  <h2 class="on">
    Lassen Sie ihren PC nicht durch angestaute <br>
    Junk Dateien verlangsamen!
  </h2>
  <!-- table -->
  <table>
    <thead>
    <tr>
      <th><p><span>PC </span>Probleme<span>, denen Sie eventuell begegnen: </span></p></th>
      <th><p>Lösungen<span>, die Sie genießen können:</span></p></th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td>
        Instabile Systeme können jederzeit <b>abstürzen</b>
      </td>
      <td>
        <b class="black">Tiefgehende Reinigung</b> der Registrierungsdateien,<br>
        um Systemprobleme zu beheben
      </td>
    </tr>
    <!-- 02 -->
    <tr>
      <td>
        Manuelle Optimierung kann <b>keine</b> schnelllaufende <br>
        Geschwindigkeit in Echtzeit für ihren PC <b>garantieren</b>
      </td>
      <td>
        <b class="black">Auto RAM Reinigung,</b> um dafür zu sorgen, dass ihr <br>
        PC reibungslos läuft
      </td>
    </tr>
    <!-- 03 -->
    <tr>
      <td>
        <b>Keine komplett</b> optimierte Festplattenleistung
      </td>
      <td>
        Das Festplattenoptimierungsmodul <b class="black">erhöht</b> die <br>
        Festplattenleistung bis zu ihrem Maximum
      </td>
    </tr>
    <!-- 04 -->
    <tr>
      <td>
        <b>Träge & instabile</b> Internetverbindung
      </td>
      <td>
        Das Programm zur Beschleunigung ihres Internets <br>
        <b class="black">steigert</b> ihre Internetgeschwindigkeit um bis zu <b class="black">300%*</b>
      </td>
    </tr>
    <!-- 05 -->
    <tr>
      <td>
        <b>Marginale</b> Optimierung der Startgeschwindigkeit
      </td>
      <td>
        Optimierung des Starts für einen bis zu  <br>
        <b class="black">200%* schnelleren</b> Start
      </td>
    </tr>
    <!-- 06 -->
    <tr>
      <td>
        Die meisten <b>grundlegenden</b> Schutzsysteme können <br>
        keinen Privatssphärenschutz garantieren
      </td>
      <td>
        Der Schutz für ihre persönlichen Dateien deckt  <br>
        ihre Privatsphäre vollkommen ab
      </td>
    </tr>
    <!-- 07 -->
    <tr>
      <td>
        Aktuellste Spyware kann in ihren PC <b>eindringen</b> und <br>
        ihr System attackieren
      </td>
      <td>
        LEchtzeitschutz blockiert Infektionen durch Spyware
      </td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper clearfix">
    <h2>Das neueste Advanced SystemCare 13 <br> kann viel mehr als Sie denken!</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
      <dd>
        <h3>Bereinigter</h3>
        <p>
          Erkennt und bereinigt <b>4GB*</b> mehr Junk Dateien
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
      <dd>
        <h3>All-round</h3>
        <p>
          Beseitigt persönliche Spuren von mehr als <b>200</b> Programmen und <b>15</b> Browsern für alle Nutzer-Accounts
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
      <dd>
        <h3>Sicherer</h3>
        <p><b>Schutz gegen</b> zahlreiche E-mail-basierte Bedrohungen</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
      <dd>
        <h3>Größer</h3>
        <p>Eine größere Datenbank unterstützt das Aktualisieren von <b>60%</b> mehr Software</p>
      </dd>
    </dl>
  </div>
</div>
<!-- intro end -->

<!-- review start -->
<div class="review">
  <div id="dg-container" class="dg-container wrapper">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews active">
        <dt><h2><span>Media Review</span></h2></dt>
        <dd>
          <p>"Advanced SystemCare Pro" beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte. Zusätzlich zu den Features der Free-Version bietet "Advanced SystemCare" in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version.</p>
          <cite>CHIP</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><h2><span>User Review</span></h2></dt>
        <dd>
          <p>Ich habe im Laufe der Zeit verschiedene Programme ausprobiert, die versprochen haben, dass mein Computer problemlos laufen wird. Ich habe vor Jahren die kostenlose Version von ASC versucht. Seitdem ich die kostenpflichtige Version aktiviert habe, leide ich nicht mehr unter Systemproblemen. Advanced SystemCare Pro ist das Einzige, das ich aufgrund meiner Erfahrungen empfehlen würde. Ich benutze auch IObit Uninstaller, Smart Defrag und Driver Booster, um meinen PC viel besser zu machen.</p>
          <cite>Richard Beavers</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><h2><span>User Review</span></h2></dt>
        <dd>
          <p>Advanced System Care ist ein tolles Programm. Ich habe dieses Programm für viele Jahre benutzt und es funktioniert super gut. Der Hersteller verbessert ständig seine Produkte. Diese Produkte werden im Laufe der Jahre immer besser. Ich verwende viele ihrer Produkte und sie funktionieren alle großartig.</p>
          <cite>Patsy Clark</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><h2><span>User Review</span></h2></dt>
        <dd>
          <p>Ich habe noch nie ein besseres PC-Wartungs- oder Sicherheitsprogramm als Advanced Systems Care gefunden, seitdem ich ASC gekauft habe, hatte ich noch nie Probleme mit Viren, Phishing, schwarzen Bildschirmen oder einer anderen Art von Bugaboo Wenn es um Computer geht, vielen Dank an ASC, dass Sie meinen PC so viel angenehmer gemacht haben.</p>
          <cite>Danny R. Sheets</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><h2><span>User Review</span></h2></dt>
        <dd>
          <p>Ich benutze Advanced SystemCare Pro seit langer Zeit und diese neueste Version 13 ist sogar besser als Version 12. Sie kann Probleme sehr schnell finden und beheben. Das Produkt verfügt über so viele zusätzliche Funktionen, die man verwenden kann, um Ihren Computer gut und stabil zu halten. Es ist ziemlich empfehlenswert.</p>
          <cite>Tony Fisher</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><h2><span>User Review</span></h2></dt>
        <dd>
          <p>Der neue ASC 13 ist ein Muss für alle PC-Benutzer. Die übersichtliche und intuitive Benutzeroberfläche macht die Bedienung sowohl für Anfänger als auch für Fortgeschrittene einfach. Viele leistungsstarke Tools sorgen dafür, dass Ihr PC stets mit der bestmöglichen Leistung arbeitet. Ein großes Lob ist an IObit für eine so wunderbare Reihe von Werkzeugen. Vielen Dank an IObit für das wunderbare Werkzeug.</p>
          <cite>Daniel Sanders</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><h2><span>User Review</span></h2></dt>
        <dd>
          <p>Ich liebe Advanced SystemCare 13 Beta. Es läuft schnell und bereinigt persönliche Spuren, Junk-Dateien und Registrierungsfragmente. Besonders gut gefällt mir das Popup-Fenster mit den Zugriffsberechtigungen für sensible Bereiche. Wenn eine App zum ersten Mal versucht, auf sensible Dateien zuzugreifen, wird ein Fenster geöffnet, um den Zugriff zuzulassen oder zu verweigern. Sobald die Berechtigung für eine App erteilt wurde, wird das Popup für diese App nicht mehr angezeigt. Ich weiß, dass meine vertraulichen Dateien sicher aufbewahrt werden.</p>
          <cite>Richard Preston</cite>
        </dd>
      </dl>
    </div>
    <ul>
      <li class="first" data-num="4">
        <img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher">
      </li>
      <li class="two" data-num="5">
        <img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders">
      </li>
      <li class="three" data-num="6">
        <img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston">
      </li>
      <li class="active" data-num="0">
        <img src="<?php echo getStaticUrl('images/chip.png')?>" alt="CHIP">
      </li>
      <li class="four" data-num="1">
        <img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers">
      </li>
      <li class="five" data-num="2">
        <img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark">
      </li>
      <li class="six" data-num="3">
        <img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets">
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>WELTWEITE AUSZEICHNUNGEN</h2>
    <p>
      Da das Programm in den letzten 6 Jahren von weltweiten Medien ausgezeichnet wurde, haben Sie sicher den richtigen PC-Schutz.
    </p>
    <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
        <dd>
          <h4>
            Risikofrei testen – mit unserer 60 Tage Geld-zurück-Garantie
          </h4>
          <p>
            Wir sind stolz darauf, dass Ihnen die Aktivierung der Pro Version für einen angemessenen Preis einen umfassenden PC-Schutz liefert.
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Wir akzeptieren</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png') ?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Notiz:</dt>
        <dd>
          *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
        </dd>
        <dd>
          *. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.
        </dd>
        <dd>
          *. Smart Defrag PRO /Protected Folder unterstützt 1 Jahr / 1 PC.
        </dd>
        <dd>
          *. AMC Security PRO unterstützt 1 Jahr/ 1 Gerät.
        </dd>
        <dd>
          *. Lizenz für AMC Security Vollversion mit In-App-Werbung.
        </dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y') ?> IObit. Alle Rechte vorbehalten</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/iu-float-box.png')?>" alt=""/></div>
    <div class="center fl">
      <h2>Exklusives Angebot zu Weihnachten 2019!</h2>
      <div class="numbox">
        <p>Machen Sie Ihrem alten PC das perfekte Weihnachtsgeschenk!</p>
      </div>
    </div>
    <div class="price fr">
      <p><strong>21,99€</strong> <del>149,92€</del></p>
      <a class="buybtn"
         href="http://www.iobit.com/buy.php?product=de-asc13sdpfamc2199&ref=de_asc133pcbundle2199expired<?php echo $refStr;?>&refs=de_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcbundleexpired1912-de');">
        Erneuern und sparen Sie jetzt!
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<!-- popbox strat -->
<div class="popbox" id="popbox">
  <div class="clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/pop-user.png')?>" alt=""/>
    <div class="fl right">
      <h2><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></h2>
      <p>hat ASC PRO schon aktiviert</p>
    </div>
  </div>
  <p class="view"><span class="viewNum"><?php echo $viewNum;?></span> Beobachter auf der Seite</p>
  <i class="all-icons close">×</i>
</div>
<!-- popbox end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>