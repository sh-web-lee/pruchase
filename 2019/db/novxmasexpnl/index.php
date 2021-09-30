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
$refStr='';
if(in_array($_GET['pop'],array('xr_dbe'))){
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
             href="https://www.iobit.com/buy.php?product=nl-db73pc2499&ref=nl_db73pc2499purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1911exp-nl')">
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
             href="https://www.iobit.com/buy.php?product=nl-db73pciupf1999&ref=nl_db73pciupf1999purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1911exp-nl')">
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
             href="https://www.iobit.com/buy.php?product=nl-db73pciupf2899&ref=nl_db73pciupf2899purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1911exp-nl')">
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
    <!-- feature start -->
    <div class="feature wrapper">
      <h2>Waarom Kiest U Driver Booster PRO?</h2>
      <div class="clearfix panel">
        <div class="list one">
          <span class="icons01"><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Meer dan 3.500.000 Drivers updaten <b>Verbeterd</b></h3></dt>
            <dd>
              Herkent en updatet ruim 3.500.000 verouderde,<br> niet-werkende, en zeldzame drivers voor al uw apparaten.
            </dd>
          </dl>
        </div>
        <div class="list two on">
          <span class="icons02"><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""/></span>
          <dl>
            <dt><h3>De Beste Game- en pc-prestaties <b>Verbeterd</b></h3></dt>
            <dd>
              Beëindigt alle overbodige processen in 1 klik, zodat<br> RAM vrijkomt om games en andere programma’s<br> soepel te laten draaien.
            </dd>
          </dl>
        </div>
        <div class="list three">
          <span class="icons03"><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Game Ready Drivers <b>Verbeterd</b></h3></dt>
            <dd>
              Game Ready Drivers zijn zodra ze uitkomen voor u<br> beschikbaar, voor de beste prestaties, het verhelpen<br> van bugs en een geweldige game-ervaring.
            </dd>
          </dl>
        </div>
        <div class="list four">
          <span class="icons04"><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""/></span>
          <dl>
            <dt><h3>Snel Apparaatproblemen Verhelpen <b>Verbeterd</b></h3></dt>
            <dd>
              Verhelpt apparaatproblemen in 1 klik, voor een<br> soepel draaiende en probleemloze pc.
            </dd>
          </dl>
        </div>
        <div class="imgbox">
          <ul>
            <li><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></li>
            <li class="two"><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></li>
            <li><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></li>
            <li class="four"><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- comparison -->
    <div class="comparison wrapper" id="compare">
      <!-- title -->
      <h2 class="on">
        Laat driverproblemen niet langer uw pc <br> beschadigen!
      </h2>
      <!-- table -->
      <table>
        <thead>
        <tr>
          <th><p>Problemen<span> waar u tegenaan kunt lopen:</span></p></th>
          <th><p>Oplossingen<span> die u terug kunt krijgen:</span></p></th>
        </tr>
        </thead>
        <tbody>
        <!-- 01 -->
        <tr>
          <td>
            Met handmatig updaten kunt u belangrijke updates <br>
            <b>mislopen</b>
          </td>
          <td>
            <b class="black">Update automatisch</b> alle drivers zodra er <br>
            nieuwe versies beschikbaar zijn
          </td>
        </tr>
        <!-- 02 -->
        <tr>
          <td>
            <b>Beperkte</b> downloadsnelheid vereist meer tijd om elke <br>
            driver te downloaden
          </td>
          <td>
            <b class="black">Vekrijg 100% download versnelling</b> om drivers <br>
            binnen enkele minuten te downloaden
          </td>
        </tr>
        <!-- 03 -->
        <tr>
          <td>
            <b>Krimpende</b> driver database kan u mogelijk niet van <br>
            alle juiste drivers voorzien
          </td>
          <td>
            40%* <b class="black">grotere</b> driver database bevat 99% van wat <br>
            onze gebruikers nodig hebben
          </td>
        </tr>
        <!-- 04 -->
        <tr>
          <td>
            <b>Ingewikkeld</b> handmatig back-upproces kost tijd en moeite
          </td>
          <td>
            Automatische back-ups garanderen de veiligheid <br>
            van uw update met <b class="black">dubbele zekerheid</b>
          </td>
        </tr>
        <!-- 05 -->
        <tr>
          <td>
            Verouderde gamecomponenten kunnen tot <b>matige</b> <br>
            gameprestaties leiden
          </td>
          <td>
            Toegang tot exclusieve, zeldzame en nieuwe <br>
            gamecomponenten voor een <b class="black">fantastische game-ervaring</b>
          </td>
        </tr>
        <!-- 06 -->
        <tr>
          <td>
            <b>Geen voorrang</b> op het updaten van de laatste drivers, <br>
            waaronder game ready drivers
          </td>
          <td>
            Altijd als eerste toegang tot de nieuwste en <br>
            <b class="black">exlcusieve drivers</b>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
    <!-- end comparison -->

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper clearfix">
        <h2>Het Nieuwe Driver Booster 7 PRO <br> kan nog veel meer dan u dacht! </h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
          <dd>
            <h3>Meer dan 3.500.000</h3>
            <p>
              beschikbaar voor uw pc
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
          <dd>
            <h3>20% meer</h3>
            <p>
              gamecomponenten ondersteund
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
          <dd>
            <h3>20% sneller</h3>
            <p>
              scannen voor de juiste drivers
            </p>
          </dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
          <dd>
            <h3>Blokkeer notificaties</h3>
            <p>
              van Driver Booster als u volledig scherm gebruikt
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

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

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>Wereldwijd Bekroond door de Media</h2>
        <p>Dankzij de waardering van vooraanstaande media over de hele wereld, weet u dat het goed zit!</p>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <!-- service  -->
    <div class="service  clearfix">
      <div class="wrapper">
        <dl>
          <dt>Garantie</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dd>
        </dl>
        <dl>
          <dt>Veilig betalen</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dd>
        </dl>
        <dl class="last">
          <dt>24/7 Gratis Klantenservice</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dd>
        </dl>
      </div>
    </div>
    <!-- end service -->

    <!-- footer -->
    <div class="footer">
      <dl class="annotation wrapper">
        <dt>*Opmerkingen:</dt>
        <dd>
          IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.
        </dd>
        <dd>
          Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.
        </dd>
      </dl>
      <div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</div>
    </div>
    <!-- end footer -->
  </div>

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl"><span></span></div>
      <div class="center fl">
        <h2>Exclusieve Kerstaanbieding!</h2>
        <div class="numbox">
          <p>Wees er snel bij, slechts</p>
          <div id="flip" class="flipNum">
            <div class="listbox"><span class="list"><b>2</b></span></div>
            <div class="listbox"><span class="list"><b>1</b></span></div>
          </div>
          <p>over</p>
        </div>

      </div>
      <div class="price fr">
        <p><strong>€19,99</strong> <del>€138,70</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-db73pciupf1999&ref=nl_db73pciupf1999purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1911exp-nl')">
          Krijg Nu PRO terug!
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

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