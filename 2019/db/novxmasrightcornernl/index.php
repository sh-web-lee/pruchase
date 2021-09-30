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

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  ob_get_clean();
  $date = $_GET['d'];
  $c_name = 'nldbxmas' . $date;
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
  echo json_encode(array('packsNum'=>$packsNum));
  exit;
}
$reduceNum=152813229;
$reTime=10;
//$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$packsCount = 212;
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('xr_db'))){
	$refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>85% Kerstkorting op Driver Booster PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?> 
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>Speciale Kerstaanbieding! Slechts <b>300</b> pakketten beschikbaar vandaag</h1>
      <div class="offer left">
        <div class="discount small"><b>Geen <small>Cadeaus</small></b></div>
        <img src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Jaar, 3 PC’s</p>
          <p><strong>€24,99</strong> <del>€74,85</del></p>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=nl-db73pc2499&ref=nl_db73pc2499purchase1911<?php echo $refStr;?>&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbrightcornerpurchase1911-nl')">
            <i class="all-icons"></i>
            <span>Nu Kopen</span>
          </a>
        </div>
      </div>
      <div class="offer center">
        <div class="gift">
          <i class="all-icons"></i> Nog maar <b class="reduceNum giftnum"><span>88</span></b> pakketten over
        </div>
        <div class="discount">
          <strong>-85%</strong>
          <b>Gratis <small>Kerstcadeaus</small></b>
        </div>
        <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Jaar, 3 PC’s</p>
          <p><strong>€19,99</strong> <del>€138,70</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=nl-db73pciupf1999&ref=nl_db73pciupf1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbrightcornerpurchase1911-nl')">
            <i class="all-icons"></i>
            Nu Kopen
          </a>
        </div>
        <p class="people">Door <b class="packsCount"><?php echo $packsCount;?></b> mensen gekocht</p>
        <!-- <div class="maskbg"></div>
        <div class="ausbox">AUSVERKAUFT</div> -->
      </div>
      <div class="offer right">
        <div class="discount small"><b>Voordeel <small>bundel</small></b></div>
        <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 Jaar, 3 PC’s</p>
          <p><strong>€28,99</strong> <del>€138,70</del></p>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=nl-db73pciupf2899&ref=nl_db73pciupf2899purchase1911<?php echo $refStr;?>&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbrightcornerpurchase1911-nl')">
            <i class="all-icons"></i>
            <span>Nu Kopen</span>
          </a>
        </div>
      </div>
      <div class="payment"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- banner end -->

  <div class="main">
    <!-- intro start -->
    <div class="intro wrapper">
      <h2>Waarom Kiest U Driver Booster PRO?</h2>
      <div class="clearfix panel">
        <div class="list one">
          <span class="icons01"><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Meer dan 3.500.000 Drivers updaten <b>Verbeterd</b></h3></dt>
            <dd>
              Herkent en updatet ruim 3.500.000 verouderde,<br> niet-werkende, en zeldzame drivers voor al uw apparaten.
            </dd>
          </dl>
        </div>
        <div class="list two on">
          <span class="icons02"><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""/></span>
          <dl>
            <dt><h3>De Beste Game- en pc-prestaties <b>Verbeterd</b></h3></dt>
            <dd>
              Beëindigt alle overbodige processen in 1 klik, zodat<br> RAM vrijkomt om games en andere programma’s<br> soepel te laten draaien.
            </dd>
          </dl>
        </div>
        <div class="list three">
          <span class="icons03"><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Game Ready Drivers <b>Verbeterd</b></h3></dt>
            <dd>
              Game Ready Drivers zijn zodra ze uitkomen voor u<br> beschikbaar, voor de beste prestaties, het verhelpen<br> van bugs en een geweldige game-ervaring.
            </dd>
          </dl>
        </div>
        <div class="list four">
          <span class="icons04"><img src="<?php echo getStaticUrl('images/intro-icon04.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Snel Apparaatproblemen Verhelpen <b>Verbeterd</b></h3></dt>
            <dd>
              Verhelpt apparaatproblemen in 1 klik, voor een<br> soepel draaiende en probleemloze pc.
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

    <!-- feature start -->
    <div class="feature wrapper clearfix">
      <h2>Driver Booster 7 geeft u het beste en veiligste updateproces:</h2>
      <p>Automatisch en veilig drivers updaten</p>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
        <dd>
          <h3>SCANNEN</h3>
          <p>Controleert de status van uw drivers automatisch en detecteert de juiste update.</p>
          <div class="green">
            <span>Alleen drivers die aan WHQL- en IObiteisen voldoen</span>
          </div>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
        <dd>
          <h3>UPDATEN</h3>
          <p>Verouderde drivers worden snel en secuur bijgewerkt naar de laatste versie.</p>
          <div class="green">Veilige HTTPS-verbinding</div>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
        <dd>
          <h3>INSTALLEREN</h3>
          <p>Drivers worden automatisch geïnstalleerd als het systeem inactief is.</p>
          <div class="green"><span>Voor de zekerheid wordt een back-up van huidige drivers aangemaakt</span></div>
        </dd>
      </dl>
    </div>
    <!-- feature end -->

    <!-- giftbox start -->
    <div class="giftbox">
      <div class="wrapper">
        <h2>Twee Kerstcadeaus helemaal gratis als u nu koopt!</h2>
        <div class="clearfix">
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
            <dd>
              <h5>Protected Folder</h5>
              <strong>€0</strong> <del>€39,95</del>
              <p>Wachtwoordbescherming voor uw bestanden en mappen</p>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/></dt>
            <dd>
              <h5>IObit Uninstaller PRO</h5>
              <strong>€0</strong> <del>€29,99</del>
              <p>Deïnstalleert ongewenste programma’s volledig en snel</p>
            </dd>
          </dl>
        </div>
        <div class="price">
          <h3>DB PRO + Gratis Cadeaus</h3>
          <p class="people">Nog maar <span class="giftnum"></span> beschikbaar</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=nl-db73pciupf1999&ref=nl_db73pciupf1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbrightcornerpurchase1911-nl')">
            <i class="all-icons"></i>
            CLAIM MIJN CADEAUS
          </a>
        </div>
      </div>
      <!-- <div class="maskbg"></div>
      <div class="ausbox">AUSVERKAUFT</div> -->
    </div>
    <!-- giftbox end -->

    <!-- probleme start -->
    <div class="probleme">
      <div class="wrapper clearfix">
        <h2>Zonder PRO kunt u last krijgen van:</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/probleme-01.png')?>" alt=""/></dt>
          <dd>
            <h3>PC-problemen</h3>
            <p>
              Zonder bijgwerkte en de juiste drivers, zal uw computer niet soepel draaien, en kan het scherm bevriezen of de pc crashen.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/probleme-02.png')?>" alt=""/></dt>
          <dd>
            <h3>Slechte Game-ervaring</h3>
            <p>
              Het ontbreken van gamecompnenten kan ervoor zorgen dat uw games niet succesvol laden en door verouderde drivers kunnen de graphics en andere functies niet optimaal werken.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/probleme-03.png')?>" alt=""/></dt>
          <dd>
            <h3>Incompatibele Hardware</h3>
            <p>
              Als hardware niet goed kan samenwerken met uw systeem, kunnen apparaten zoals, de muis, het toetsenbord en de audio van uw computer niet goed werken. De juiste drivers voorkomen zulke problemen.
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- probleme end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Driver Booster wordt geprezen door de volgende media:</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review wrapper">
      <div class="review-list">
        <dl class="active">
          <dt><h2>Media recensie</h2></dt>
          <dd>
            <p>
              “IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Klantbeoordeling</h2></dt>
          <dd>
            <p>
              "Met Driver Booster werk ik alle drivers gemakkelijk bij. Daarnaast lost dit programma allerlei foutmeldingen op zoals geen geluid, netwerkfouten, apparaat fouten enz. Voordat ik dit programma downloadde, geloofde ik niet dat dit programma mijn computer nog kon redden, maar nu ben ik helemaal overtuigd en loopt mijn PC weer als nieuw."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Klantbeoordeling</h2></dt>
          <dd>
            <p>
              "Driver Booster is een geweldige applicatie. Voor iemand die veel applicaties en drivers op de computer heeft staan maar geen tijd heeft om deze bij te werken, raad ik Driver Booster aan iedereen die gemakkelijk en snel zijn drivers wil bijwerken direct aan."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Klantbeoordeling</h2></dt>
          <dd>
            <p>
              "Dit is een van de beste driver update software op de markt. Microsoft heeft zelfs gesuggereerd dat updates voor mijn drivers niet zouden werken met mijn systeem. Maar dit programma vind alle updates die ik nodig heb. Het werkte perfect. Eenvoudig te gebruiken, informatief en intuïtief. Deze software zal altijd in mijn toolbox blijven... Goed gedaan!"
            </p>
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li class="first current">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC Magazine"/>
          </div>
          <p><span>PC Magazine</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"/>
          </div>
          <p><span>Myo Thuya</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"/>
          </div>
          <p><span>Adam Backlund</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"/>
          </div>
          <p><span>Wayne Bowler</span></p>
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div id="compare" class="comparison wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Welke voordelen biedt PRO?</th>
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
            <td class="virtue">Scant en herkent verouderde, missende & niet-werkende drivers</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Werkt uw verouderde drivers in 1 klik bij</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Ongelimiteerde downloadsnelheden</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Grootste database die vrijwel alle drivers bij kan werken</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Voorkomt schermbevriezingen en crashes voor de beste pc-prestaties</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Automatisch downloaden en installeren als het systeem inactief is</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Automatisch back-ups aanmaken van huidige drivers</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Voorrang op de laatste Game Ready Drivers en gamecomponenten</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Automatisch updaten naar de laatste versie</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Gratis 24/7 technische ondersteuning</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons fork">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper clearfix">
        <div class="imgbox fl">
          <div class="imglist three">
            <img src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
            <div class="discount small"><b>Geen <small>Cadeaus</small></b></div>
          </div>
          <div class="imglist gift on">
            <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
            <div class="discount">
              <strong>-85%</strong>
              <b>Gratis <small>Kerstcadeaus</small></b>
            </div>
          </div>
          <div class="imglist five">
            <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
            <div class="discount small"><b>Voordeel <small>bundel</small></b></div>
          </div>
        </div>
        <ul class="fl">
          <li class="three" data-num="0">
            <span>Geen Cadeaus</span>
            <strong>€24,99</strong>
          </li>
          <li class="gift on" data-num="1">
            <span>Kerstcadeaus</span>
            <strong>€19,99</strong>
            <!-- <div class="ausbox">AUSVERKAUFT</div> -->
          </li>
          <li class="five" data-num="2">
            <span>Voordeelbundel</span>
            <strong>€28,99</strong>
          </li>
        </ul>
        <div class="price fr">
          <p><strong>€19,99</strong> <del>€138,70</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=nl-db73pciupf1999&ref=nl_db73pciupf1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbrightcornerpurchase1911-nl')">
            <i class="all-icons"></i>
            <span>Nu Kopen</span>
          </a>
        </div>
      </div>
    </div> 
    <!-- footbuy end -->
  </div>

  <!-- notes start -->
  <dl class="notes wrapper">
    <dt>Let op:</dt>
    <dd>      
      *Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen goeddunken
    </dd>
    <dd>* De gegevens kunnen variëren op basis van verschillende systemen en computers.</dd>
  </dl>
  <!-- notes end -->
  <p class="copyright wrapper">Copyright 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>

  <!-- xmaxbox start -->
  <div class="xmaxbox">
    <span class="tree one"></span>
    <span class="tree two"></span>
    <span class="tree three"></span>
    <span class="tree four"></span>
    <span class="tree five"></span>
    <span class="tree six"></span>
    <span class="tree seven"></span>
    <span class="tree eight"></span>
    <span class="tree night"></span>
    <span class="tree ten"></span>
    <span class="tree eleven"></span>
  </div>
  <!-- xmaxbox end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>