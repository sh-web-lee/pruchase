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
    if (intval($_COOKIE[$c_name]) <= 0) {
      setcookie($c_name, 0, time() + 3600 * 24 * 2);
      $packsNum = 0;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType));
  exit();
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Sparen Sie bis zu 75% auf Advanced SystemCare& erhalten Sie ein Geschenk kostenlos!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:600,800" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a href="https://www.iobit.com/de/index.php" target="_blank" class="logo">IObit</a>
      <div class="title">
        <h1>Limitiertes Angebot</h1>
        <h2>T??glich nur 200 Pakete zur Verf??gung stehen</h2>
      </div>
      <div class="box one-pc">
        <img src="<?php echo getStaticUrl('images/one-pc-box.png')?>" alt="" />
        <p>1 Jahr / 1 PC</p>
        <dl>
          <dt><strong><b>22</b>,99???</strong><i>UVP</i> <del>39,99???</del></dt>
          <dd><a href="http://www.iobit.com/buy.php?product=de-asc111pc2299&ref=de_asc111pc2299purchase1803b&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1803b-de')" class="buybtn border"><span>Jetzt kaufen</span> 17??? sparen</a></dd>
        </dl>
      </div>
      <div class="box three-box active">
        <div class="date">
          <p>Heute nur</p>
          <div class="countdown">
            <div class="scroll-tick">
              <span>0</span>
              <span>1</span>
              <span>2</span>
              <span>3</span>
              <span>4</span>
              <span>5</span>
              <span>6</span>
              <span>7</span>
              <span>8</span>
              <span>9</span>
            </div>
            <div class="scroll-tick">
              <span>0</span>
              <span>1</span>
              <span>2</span>
              <span>3</span>
              <span>4</span>
              <span>5</span>
              <span>6</span>
              <span>7</span>
              <span>8</span>
              <span>9</span>
            </div>
          </div>
          <p>Deals ??brig</p>
        </div>
        <dl>
          <dt><strong><b>24</b>,99???</strong><i>UVP</i> <del>99,94???</del></dt>
          <dd><a href="http://www.iobit.com/buy.php?product=de-asc11iu3pc2499&ref=de_asc113pciu2499purchase1803b&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiu1803b-de')" class="buybtn middle"><span>Jetzt kaufen</span> 74,95??? sparen</a></dd>
          <dd>Von <strong><span class="pack">123</span><span class="pop-font">123</span></strong> Personen gekauft</dd>
        </dl>
      </div>
      <div class="box three-pc">
        <span class="img-box"></span>
        <p>1 Jahr / 3 PCs</p>
        <dl>
          <dt><strong><b>24</b>,99???</strong><i>UVP</i> <del>59,99???</del></dt>
          <dd><a href="http://www.iobit.com/buy.php?product=de-asc113pc2499&ref=de_asc113pc2499purchase1803b&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1803b-de')" class="buybtn border"><span>Jetzt kaufen</span> 35??? sparen</a></dd>
        </dl>
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
      <h2>Warum w??hlen ??ber 250 Millionen Nutzer Advanced SystemCare?</h2>
      <p>Denn wird dein PC bis zu 300% schneller als bisher laufen, Advanced SystemCare ??berwacht RAM, CPU & Festplatten in Echtzeit, analysiert, repariertund optimiert Windows und deinen PC. Es sch??tzt deinen PC vor b??sartigen Angriffe mit dem System-Verst??rken.</p>
    </div>
  </div>
  <!-- cause end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Hilfreiche Features, die sich problemlos an deine Bed??rfnisse anpassen</h2>
    <p>1-Jahres-Abonnement f??r 3 PCs</p>
    <div class="clearfix panel">
      <div class="list one">
        <span class="icons01"></span>
        <dl>
          <dt>Keine l??stige Anzeigen und <br> sicheres Surfen <b>Verbessert</b></dt>
          <dd>Entfernt verschiedene Onlineanzeigen und blockiert mehr <br> b??sartige Webseiten.</dd>
        </dl>
      </div>
      <div class="list two">
        <span class="icons02"></span>
        <dl>
          <dt>Automatische Reinigung <b>Verbessert</b></dt>
          <dd>Scannt und bereinigt Restdateien automatisch, um den <br> PC schneller zu machen.</dd>
        </dl>
      </div>
      <div class="list three">
        <span class="icons03"></span>
        <dl>
          <dt>FaceID <b class="neu">Neu</b></dt>
          <dd>Macht Fotos von Eindringlingen, <br> die deine Privatsph??re ausspionieren wollen.</dd>
        </dl>
      </div>
      <div class="list four">
        <span class="icons04"></span>
        <dl>
          <dt>Mit Windows 10 kompatibel <br> <b>Verbessert</b></dt>
          <dd>Entfernt Windows 10 Erweiterungen <br> vom Microsoft Edge </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Das kostenfreie Geschenk nur f??r zeitlich begrenzte Deals</h2>
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" />
      <h3>IObit Uninstaller 7 PRO</h3>
      <p><strong><b>0</b>???</strong>  <del>39,95???</del></p>
      <p class="list"><span><i></i>Starke Deinstallation von unerw??nschten Programmen. </span> <span><i></i>Schnellere Entfernung von Plug-ins.</span></p>
      <h4>Advanced SystemCare PRO + IObit Uninstaller PRO</h4>
      <a href="http://www.iobit.com/buy.php?product=de-asc11iu3pc2499&ref=de_asc113pciu2499purchase1803b&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiu1803b-de')" class="buybtn middle">Jetzt erhalten</a>
      <p class="list">von <strong class="pack">*</strong> Menschen aktiviert</p>
    </div>
  </div>
  <!-- centbuy end -->
  <!-- donation start -->
  <div class="donation">
    <div class="wrapper">
      <h2>Advanced SystemCare bem??ht sich, deine Probleme zu l??sen:</h2>
      <ul>
        <li><i></i>Der Systemstart des PCs dauerte sehr lange</li>
        <li class="two"><i></i>Dein PC hatte st??ndig Verz??gerungen/ist oftmals eingefroren</li>
        <li class="three"><i></i>Du willst die PC-Performance auf das h??chste Level bringen</li>
        <li class="four"><i></i>Du willst verhindern, dass dein PC im Laufe der Zeit Performance verliert</li>
        <li class="five"><i></i>Du willst deine pers??nlichen Daten vor Unbekannten sch??tzen</li>
      </ul>
    </div>
  </div>
  <!-- donation end -->
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
    <img src="<?php echo getStaticUrl('images/awards.jpg')?>" alt="" />
  </div>
  <!-- awards end -->
  <div class="wrapper">
    <!-- review start -->
    <div class="review">
      <div class="content">
        <dl class="active">
          <dt><h3>Kundenbewertung</h3></dt>
          <dd><h4>???Das Produkt an sich ist genau so gro??artig wie der dazugeh??rige Support.???</h4></dd>
          <dd>
            ???Ich machte es wie viele andere auch. Ich startete mit der Testversion und kaufte dann anschlie??end die Vollversion. Es h??lt meinen Computer sauber und entfernt Bugs restlos und hat mich bisher noch nie entt??uscht. Ich kontaktierte Advanced SystemCare vor Kurzem und sie reagierten innerhalb von ein oder zwei Tagen. Sie sagten mir alles, was ich wissen wollte. Meiner Meinung nach ist der Support ein wichtiger Aspekt, wenn ich mich f??r ein Produkt entscheide. ASC gewinnt bei Produkt und Support.???
          </dd>
        </dl>
        <dl>
          <dt><h3>Kundenbewertung</h3></dt>
          <dd><h4>???Advanced SystemCare Pro ist das beste Programm, das ich seit Jahren getestet habe.???</h4></dd>
          <dd>
            ???Wie die meisten Menschen bin ich kein Computerexperte. Ich wei?? nicht wie viele Programme, die alle von sich behaupten das Beste zu sein, ich ??ber die letzten Jahre ausprobiert habe, ohne auch nur ansatzweise an meinen Schutz von Advanced SystemCare heranzukommen. Seit ich dieses gro??artige Programm besitze, musste ich mich kein einziges Mal an einen Techniker wenden. Es hat meine Erwartungen mehr als ??bertroffen, immer auf dem neusten Stand, und die Grafiken sehen auch super aus. Vielen Dank an Euch alle, dass Ihr mein Leben so viel einfacher gemacht habt.???
          </dd>
        </dl>
        <dl>
          <dt><h3>Media Review</h3></dt>
          <dd><h4>???Advanced SystemCare Pro beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte.???</h4></dd>
          <dd>
            ???Zus??tzlich zu den Features der Free-Version bietet Advanced SystemCare in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version.???
          </dd>
        </dl>
        <dl>
          <dt><h3>Kundenbewertung</h3></dt>
          <dd>
            <h4>
              ???Ich empfehle den Kauf dieses Programmes w??rmstens. Es ist nicht teuer und was es f??r euren Computer machen wird, wird gro??artig sein.???
            </h4>
          </dd>
          <dd>
            ???Dieses Programm ist das mit Abstand beste, das ich jemals ausprobiert habe. Mein Computer l??uft so viel besser und schneller, nachdem ich ASC11 downgeloadet habe. Es hat unn??tige und doppelte Dateien, leere Ordner ges??ubert und ich habe es zum Vernichten von Dateien genutzt. Es s??uberte und defragmentierte das Register und alle Dateien auf dem PC. Ich empfehle den Kauf dieses Programmes w??rmstens. Es ist nicht teuer und was es f??r euren Computer machen wird, wird gro??artig sein. Du wirst es lieben, das verspreche ich.???
          </dd>
        </dl>
        <dl>
          <dt><h3>Kundenbewertung</h3></dt>
          <dd><h4>???Das Programm s??ubert &amp; beschleunigt den PC sehr zuverl??ssig und sicher.???</h4></dd>
          <dd>
            ???Was die Funktionalit??t &amp; Leistung vom neuen Advanced SystemCare 11 angeht, kann ich hier an diesem Punkt nur eine ganz klare Empfehlung aussprechen. Das Programm s??ubert &amp; beschleunigt den PC sehr zuverl??ssig und sicher. Selbst PC??s ??lterer Generationen werden um ein Vielfaches beschleunigt und zugleich perfekt optimiert. Damit geh??ren langsame und zugem??llte Computer der Vergangenheit an. Wer seinen PC optimal nutzen m??chte (jetzt und in Zukunft), sollte sich das neue IObit Advanced SystemCare 11 am besten in der Pro-Version anschaffen und die Freude an einem sehr gut gewartetem PC genie??en.???
          </dd>
        </dl>
      </div>
      <ul class="users">
        <li class="active">
          <img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="">
          Bruce Ramsay
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="">
          Hank Ewert
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip">
          Chip
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="">
          Loretta Harnarine
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/markus-thomas.png')?>" alt="">
          Markus Thomas <br> Geldermann
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
            <th class="space"></th>
            <th class="itemb"> <div class="box">Advanced SystemCare <b>FREE</b></div></th>
            <th class="space"></th>
            <th class="itema">  <div class="box">Advanced SystemCare <b>PRO</b></div></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Grundlegende System-Reinigung, Reparatur und Optimierung</td>
            <td class="space"></td>
            <td class="itemb"><i>???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Erwischt Eindringlinge automatisch mit der GesichtsID <i class="neu"></i></td>
            <td class="space"></td>
            <td class="itemb"><i>???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Erh??ht die Internetgeschwindigkeit um bis zu 300% mit dem Internet Booster <i class="verbessert"></i></td>
            <td class="space"></td>
            <td class="itemb"><i class="wrong">???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Bis zu 200% schnellerer Systemstart <i class="verbessert"></i></td>
            <td class="space"></td>
            <td class="itemb"><i class="wrong">???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Bereinigt ansammelte Registry f??r ein stabiles System <i class="verbessert"></i></td>
            <td class="space"></td>
            <td class="itemb"><i class="wrong">???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Neue Festplattenoptimierungsengine maximiert die PC Performance <i class="neu"></i></td>
            <td class="space"></td>
            <td class="itemb"><i class="wrong">???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Repariert die Systemschwachstellen mit 1 Klick um Hacker zu verhindern <i class="verbessert"></i></td>
            <td class="space"></td>
            <td class="itemb"><i class="wrong">???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Entfernt Infektionen und verhindert verschiedene Bedrohungen <i class="verbessert"></i></td>
            <td class="space"></td>
            <td class="itemb"><i class="wrong">???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Automatische Beseitigung von privaten Spuren im Internet mit der Anti Browser Verfolgung</td>
            <td class="space"></td>
            <td class="itemb"><i class="wrong">???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Automatische RAM-Bereinigung mit der Echtzeit Optimierung</td>
            <td class="space"></td>
            <td class="itemb"><i class="wrong">???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Automatisches Update auf die neueste Version</td>
            <td class="space"></td>
            <td class="itemb"><i class="wrong">???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
            <td class="virtue">Kostenloser technischer Support 24/7</td>
            <td class="space"></td>
            <td class="itemb"><i class="wrong">???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
            <td class="virtue">Unterst??tzung f??r 3 PCs</td>
            <td class="space"></td>
            <td class="itemb"><i class="wrong">???</i></td>
            <td class="space"></td>
            <td class="itema"><i class="red">???</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->
  </div>
  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="left-img">
        <span class="box"></span>
      </div>
      <ul>
        <li><i></i> <span>1 Jahr / 1 PC</span> <strong>-40%</strong></li>
        <li><i></i> <span>1 Jahr / 3 PC</span> <strong>-55%</strong></li>
        <li class="active"><i></i> <span>1 Jahr / 3 PC + IU Gratis</span> <strong>-75%</strong></li>
      </ul>
      <dl>
         <dt><strong><b>24</b>,99???</strong><i>UVP</i> <del>99,94???</del></dt>
          <dd><a href="http://www.iobit.com/buy.php?product=de-asc11iu3pc2499&ref=de_asc113pciu2499purchase1803b&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiu1803b-de')" class="buybtn center">Jetzt kaufen</a></dd>
      </dl>
    </div>
  </div>
  <!-- footbuy start -->

  <div class="footer">
    <!-- annotation start -->
    <dl class="wrapper">
      <dt>Notiz:</dt>
      <dd>
        *. Solche Promotionsprogramme k??nnen von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ank??ndigung ge??ndert werden.
      </dd>
      <dd>*. Daten k??nnen auf der Grundlage verschiedenes Systems oder Computers ge??ndert werden.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <p>Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    <!-- footer end -->
  </div>
  <!-- container end -->
  <div class="floatlayer" id="floatlayer">
    <img src="<?php echo getStaticUrl('images/float_asc.png')?>" alt="">
    <div class="right">
      <h4>
        <span id="first" class="first-name"><?php echo $firstName;?> </span>&nbsp;&nbsp;
        <span id="last" class="last-name"><?php echo $lastName;?></span>
      </h4>
      <p>hat ASC PRO schon aktiviert</p>
    </div>
    <i class="close all-icons">??</i>
  </div>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
</body>
</html>