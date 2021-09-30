<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
    $date = $_GET['d'];
    $c_name = 'deascaug' . $date;
    if (!isset($_COOKIE[$c_name])) {
      $packsNum = 163;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if ($_GET['t'] == 1) {
        $packsNum = $_COOKIE[$c_name];
      } else {
        if (intval($_COOKIE[$c_name]) <= 3) {
          setcookie($c_name, 3, time() + 3600 * 24 * 2);
          $packsNum = 3;
        } else {
          $packsNum = $_COOKIE[$c_name] - 1;
          setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
          if (rand(1, 100) % 2 == 0) {
            $packsNum++;
          }
        }
      }
    }
    echo $packsNum;
    exit;
  }
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
$name=explode(' ',trim(get_line('data/iu_aug_name.txt',rand(1,40))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
//$saleType=(rand(1,6)%6==0)?1:3;
$saleType=3;
if($_GET['action']=='getSales'){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType));
  exit();
}
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';

if (in_array($_GET['st'], array('asc_c1new', 'asc_c1new1', 'asc_c6', 'asc_c2', 'asc_c3', 'asc_feature', 'asc_c7',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s2', 'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_freetip', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie 83% auf Advanced SystemCare &amp; erhalten den drei zusätzlichen Schutz kostenlos!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700,900'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="top clearfix">
        <a class="logo fl" href="http://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
        </a>
        <img class="fr" src="<?php echo getStaticUrl('images/sichere_website.png')?>" alt="" />
      </div>
      <div class="title">
        <h1>Frohes neues Jahr 2018</h1>
        <h2>4 FÜR 1</h2>
      </div>
      <p>Kauf ASC PRO(1 Jahr, 3PCs)  und erhalte drei besondere <span>Geschenke GRATIS.</span></p>
      <div class="panel">
        <div class="imgbox"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" /></div>
        <div class="price">
          <p><strong>24,99€</strong> <del>149,92€</del></p>
          <p class="inkl">*alle Preise inkl.MwSt.</p>
          <a class="buybtn" 
             href="http://www.iobit.com/buy.php?product=de-asc113pcamciupf2499&ref=de_asc113pcbundle201801<?php echo $refStr;?>&refs=de_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase201801-de')">
            <i class="all-icons"></i>
            <span>JETZT KAUFEN</span>
          </a>
          <p><i class="all-icons"></i>von <b class="buyNum">6.063.294</b> Menschen aktiviert</p>
        </div>
      </div>
      <!-- payments start -->
      <div class="payments"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
      <!-- payments end -->
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- cause start -->
  <div class="cause">
    <div class="wrapper">
      <h2>Warum wählen über 250 Millionen Nutzer Advanced SystemCare?</h2>
      <p>
        Denn wird dein PC bis zu 300% schneller als bisher laufen, Advanced SystemCare überwacht RAM, CPU &amp; Festplatten in Echtzeit, <span>analysiert, repariertund optimiert  Windows und deinen PC. Es schützt deinen PC vor bösartigen</span> Angriffe mit dem System-Verstärken.
      </p>
    </div>
  </div>
  <!-- cause end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Hilfreiche Features, die sich problemlos an deine Bedürfnisse anpassen</h2>
    <p>1-Jahres-Abonnement für 3 PCs</p>
    <div class="clearfix panel">
      <div class="list one">
        <img class="fl" src="<?php echo getStaticUrl('images/list01.png')?>" alt="" />
        <dl class="fl">
          <dt><h3>Keine lästigen Anzeigen und sicheres Surfen</h3><b>Verbessert</b></dt>
          <dd>Entfernt verschiedene Onlineanzeigen <span>und blockiert mehr bösartige</span> Webseiten.</dd>
        </dl>
      </div>
      <div class="list two">
        <img class="fl" src="<?php echo getStaticUrl('images/list02.png')?>" alt="" />
        <dl class="fl">
          <dt><h3>Automatische Reinigung</h3><b>Verbessert</b></dt>
          <dd>Scannt und bereinigt Restdateien <span>automatisch , um den PC schneller</span> zu machen</dd>
        </dl>
      </div>
      <div class="list three">
        <img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" />
        <dl>
          <dt><h3>FaceID</h3><b>Neu</b></dt>
          <dd>Macht Fotos von Eindringlingen, <span>die deine Privatsphäre ausspionieren wollen.</span></dd>
        </dl>
      </div>
      <div class="list four">
        <img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" />
        <dl>
          <dt><h3>Mit Windows 10 kompatibel</h3><b>Verbessert</b></dt>
          <dd>Entfernt Windows 10 Erweiterungen <span>vom Microsoft Edge</span></dd>
        </dl>
      </div>
      <div class="circle"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
      <div class="circle sec"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
      <div class="circle third"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper">
      <div class="gift-title">
        <h2>VIP- Geschenkpaket für dich nur  im Jahr 2018</h2>
        <p>Jetzt erhältst du drei notwendige Tools kostenlos!</p>
      </div>
      <div class="clearfix">
        <div class="list">
          <img src="<?php echo getStaticUrl('images/gift_iu.png')?>" alt="IObit Uninstaller PRO" />
          <div class="text">
            <h3>IObit Uninstaller PRO</h3>
            <strong>0€</strong> <del>23,90€</del>
            <ul>
              <li><i class="all-icons"></i><span>Starke Deinstallation von unerwünschten Programmen</span></li>
              <li><i class="all-icons"></i><span>Schnellere Entfernung von Plug-ins</span></li>
            </ul>
          </div>
        </div>
        <div class="list pf">
          <img src="<?php echo getStaticUrl('images/gift_pf.png')?>" alt="Smart Defrag 5 PRO" />
          <div class="text">
            <h3>Protected Folder</h3>
            <strong>0€</strong> <del>39,95€</del>
            <ul>
              <li><i class="all-icons"></i><span>Deine wichtigen und persönlichen Dateien schützen</span></li>
              <li><i class="all-icons"></i><span>Keine Sorgen um Datendiebstahl</span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="amc">
        <h2>IObit schützt nicht nur deinen PC, sondern auch dein Handy!</h2>
        <div class="list clearfix">
          <img src="<?php echo getStaticUrl('images/gift_amc.png')?>" alt="Protected Folder" />
          <div class="text">
            <h3>AMC Security <small>(Systemanforderung: Android 4.0.3 oder höher)</small></h3>
            <strong>0€</strong> <del>19,99€</del>
            <ul>
              <li><i class="all-icons"></i><span>Keine Sorgen um Bedrohungen für Mobilgeräte </span></li>
              <li><i class="all-icons"></i><span>Großer Schutz für Zahlungen im Internet</span></li>
              <li><i class="all-icons"></i><span>Deine wichtigen und persönlichen Dateien schützen</span></li>
              <li><i class="all-icons"></i><span>Beschleunigt dein Mobil um bis zu 200% </span></li>
            </ul>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- donation end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <div class="title">
        <h2>Nimm3 Zahl1 SSV 2017</h2>
        <h3>83% Rabatt auf ASC PRO und erhalte das besondere Geschenkpaket( im Wert von 93,75€)  Gratis!</h3>
      </div>
      <div class="price">
        <p><strong>24,99€</strong> <del>149,92€</del></p>
        <p class="inkl">*alle Preise inkl.MwSt.</p>
        <a class="buybtn" 
           href="http://www.iobit.com/buy.php?product=de-asc113pcamciupf2499&ref=de_asc113pcbundle201801<?php echo $refStr;?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase201801-de')">
          <i class="all-icons"></i>
          <span>JETZT KAUFEN</span>
        </a>
        <p><i class="all-icons"></i>von <b class="buyNum">6.063.294</b> Menschen aktiviert</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- describe start -->
  <div class="describe">
    <div class="wrapper">
      <h2>Advanced SystemCare bemüht sich, deine Probleme zu lösen:</h2>
      <ul>
        <li><i class="all-icons"></i>Der Systemstart des PCs dauerte sehr lange</li>
        <li><i class="all-icons"></i>Dein PC hatte ständig Verzögerungen/ist oftmals eingefroren</li>
        <li><i class="all-icons"></i>Du willst die PC-Performance auf das höchste Level bringen</li>
        <li><i class="all-icons"></i>Du willst verhindern, dass dein PC im Laufe der Zeit Performance verliert</li>
        <li><i class="all-icons"></i>Du willst deine persönlichen Daten vor Unbekannten schützen</li>
      </ul>
    </div>
  </div>
  <!-- describe end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->
  <div class="wrapper">
    <!-- review start -->
    <div class="review">
      <div class="content">
        <dl class="active">
          <dt><h3>Kundenbewertung</h3></dt>
          <dd><h4>„Das Produkt an sich ist genau so großartig wie der dazugehörige Support.“</h4></dd>
          <dd>
            „Ich machte es wie viele andere auch. Ich startete mit der Testversion und kaufte dann anschließend die Vollversion. Es hält meinen Computer sauber und entfernt Bugs restlos und hat mich bisher noch nie enttäuscht. Ich kontaktierte Advanced SystemCare vor Kurzem und sie reagierten innerhalb von ein oder zwei Tagen. Sie sagten mir alles, was ich wissen wollte. Meiner Meinung nach ist der Support ein wichtiger Aspekt, wenn ich mich für ein Produkt entscheide. ASC gewinnt bei Produkt und Support.“
          </dd>
        </dl>
        <dl>
          <dt><h3>Kundenbewertung</h3></dt>
          <dd><h4>„Advanced SystemCare Pro ist das beste Programm, das ich seit Jahren getestet habe.“</h4></dd>
          <dd>
            „Wie die meisten Menschen bin ich kein Computerexperte. Ich weiß nicht wie viele Programme, die alle von sich behaupten das Beste zu sein, ich über die letzten Jahre ausprobiert habe, ohne auch nur ansatzweise an meinen Schutz von Advanced SystemCare heranzukommen. Seit ich dieses großartige Programm besitze, musste ich mich kein einziges Mal an einen Techniker wenden. Es hat meine Erwartungen mehr als übertroffen, immer auf dem neusten Stand, und die Grafiken sehen auch super aus. Vielen Dank an Euch alle, dass Ihr mein Leben so viel einfacher gemacht habt.“
          </dd>
        </dl>
        <dl>
          <dt><h3>Media Review</h3></dt>
          <dd><h4>„Advanced SystemCare Pro beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte.“</h4></dd>
          <dd>
            „Zusätzlich zu den Features der Free-Version bietet Advanced SystemCare in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version.“
          </dd>
        </dl>
        <dl>
          <dt><h3>Kundenbewertung</h3></dt>
          <dd>
            <h4>
              „Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein.“
            </h4>
          </dd>
          <dd>
            „Dieses Programm ist das mit Abstand beste, das ich jemals ausprobiert habe. Mein Computer läuft so viel besser und schneller, nachdem ich ASC11 downgeloadet habe. Es hat unnötige und doppelte Dateien, leere Ordner gesäubert und ich habe es zum Vernichten von Dateien genutzt. Es säuberte und defragmentierte das Register und alle Dateien auf dem PC. Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein. Du wirst es lieben, das verspreche ich.“
          </dd>
        </dl>
        <dl>
          <dt><h3>Kundenbewertung</h3></dt>
          <dd><h4>„Das Programm säubert &amp; beschleunigt den PC sehr zuverlässig und sicher.“</h4></dd>
          <dd>
            „Was die Funktionalität &amp; Leistung vom neuen Advanced SystemCare 11 angeht, kann ich hier an diesem Punkt nur eine ganz klare Empfehlung aussprechen. Das Programm säubert &amp; beschleunigt den PC sehr zuverlässig und sicher. Selbst PC´s älterer Generationen werden um ein Vielfaches beschleunigt und zugleich perfekt optimiert. Damit gehören langsame und zugemüllte Computer der Vergangenheit an. Wer seinen PC optimal nutzen möchte (jetzt und in Zukunft), sollte sich das neue IObit Advanced SystemCare 11 am besten in der Pro-Version anschaffen und die Freude an einem sehr gut gewartetem PC genießen.“
          </dd>
        </dl>
      </div>
      <ul class="users">
        <li class="active">
          <img src="<?php echo getStaticUrl('images/bruce-ramsay.jpg')?>" alt="">
          Bruce Ramsay
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/hank-ewert.jpg')?>" alt="">
          Hank Ewert
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip">
          Chip
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/loretta-harnarine.jpg')?>" alt="">
          Loretta Harnarine
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/markus-thomas-geldermann.jpg')?>" alt="">
          Markus Thomas Geldermann
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
            <th class="itemb">Advanced SystemCare <b>FREE</b></th>
            <th class="itema">Advanced SystemCare <b>PRO</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Grundlegende System-Reinigung, Reparatur und Optimierung</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Ultimatives System Tuneup für Top Performance</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Erhöht die Internet-Geschwindigkeit um 300% mit Internet Booster *</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Maximale Festplattenleistung</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Grundlegender Schutz vor Sicherheitsbedrohungen</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Umfassende Erkennung von Sicherheitsbedrohungen</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Auto-RAM-Bereinigung auf Performance-Monitor</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Automatische Beseitigung von privaten Spuren im Internet mit der <b>Anti Browser Verfolgung</b></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Automatisches Update auf die neueste Version</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
            <td class="virtue">Läuft im Hintergrund - Installiert und vergisst es</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
            <td class="virtue">Fantastische neue Skins &amp; Themes</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
            <td class="virtue">Kostenloser 24/7 technischer Support</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_15.png')?>" alt="" /></td>
            <td class="virtue">Support für den Nutzer von 3 Geräten</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
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
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/boxshot-bot.png')?>" alt="" /></div>
      <div class="fr">
        <!-- time -->
        <ul id="countdown2" class="countdown">
          <li><strong>00</strong>Std : </li>
          <li><strong>00</strong>Min : </li>
          <li><strong>00</strong>Sek : </li>
          <li class="last"><strong>000</strong>Ms</li>
        </ul>
        <h2>Zeitlich begrenztes Angebot </h2>
        <div class="price">
          <p><strong>24,99€</strong> <del>149,92€</del></p>
          <p class="inkl">*alle Preise inkl.MwSt.</p>
          <a class="buybtn" 
             href="http://www.iobit.com/buy.php?product=de-asc113pcamciupf2499&ref=de_asc113pcbundle201801<?php echo $refStr;?>&refs=de_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase201801-de')">
            <i class="all-icons"></i>
            <span>JETZT KAUFEN</span>
          </a>
          <p><i class="all-icons"></i>Nur <b class="packsNum">164</b> Deals verfügbar</p>
        </div>
      </div>
    </div>
  </div>
  <!-- footbuy start -->

  <div class="bottom">
    <div class="wrapper">
      <!-- annotation start -->
      <dl class="annotation">
        <dt>Notiz:</dt>
        <dd>
          *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
        </dd>
        <dd>*. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
        <dd>* Lizenz für die Vollversion von AMC Security mit in-app Werbung.</dd>
      </dl>
      <!-- annotation end -->

      <!-- footer start -->
      <div class="footer">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- container end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <img src="<?php echo getStaticUrl('images/float_asc.png') ?>" alt="">
    <div class="right">
      <h4>
        <span id="first" class="first-name"><?php echo $firstName;?> </span>&nbsp;&nbsp;
        <span id="last" class="last-name"><?php echo $lastName;?></span>
      </h4>
      <p>hat ASC 1 Jahr/3 PCs schon aktiviert</p>
    </div>
    <i class="close all-icons">×</i>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>