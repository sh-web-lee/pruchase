<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$viewNum=rand(154,196);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'endbnew_p' . $date;
  $c_name_t='endbnew_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['to'])?'':('-').$_GET['to'];
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['flag'])?'':('-flag'.$_GET['flag']);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>66% KORTING op Driver Booster PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Prompt:400,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title">
        <h1>Pak Nu Uw</h1>
        <p>Driver Booster 8 PRO Lanceringscadeau</p>
      </div>
      <div class="clearfix">
        <!-- left -->
        <div class="offer left">
          <div class="top">
            <h2>Kwartaalabonnement</h2>
            <p><strong>€<big>6,24</big>/MAAND</strong></p>
            <p><span class="sign">Geen Korting</span></p>
            <a class="buybtn small"
               href="https://www.iobit.com/buy.php?product=nl-db83pc3m1872&ref=nl_db83pc3m1872<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
               onclick="ga( 'send', 'event', 'db3mbuy', 'buy', 'dbpurchase-newlaunch-nl');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Bestel Nu</span>
            </a>
          </div>
          <div class="price">
            <h3>Prijsuitsplitsing</h3>
            <ul>
              <li><span>3 Maanden</span><span class="right">€18,72</span></li>
              <li><span><b>Totaal</b></span><span class="right"><b>€18,72</b></span></li>
              <li class="last"><b class="red">(Bespaar €0)</b></li>
            </ul>
          </div>
        </div>

        <!-- right -->
        <div class="offer right">
          <div class="top">
            <h2>Jaarabonnement</h2>
            <p><strong>€<big>2,09</big>/MAAND</strong></p>
            <p><span class="sign">66% KORTING + 2 Maanden Gratis</span></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nl-db83pc14m2499&ref=nl_db83pc14m2499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
               onclick="ga( 'send', 'event', 'db14mbuy', 'buy', 'dbpurchase-newlaunch-nl');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Bestel Nu</span>
            </a>
          </div>
          <div class="price">
            <h3>Prijsuitsplitsing</h3>
            <ul>
              <li><span>12 Maanden</span><span class="right">€74,85</span></li>
              <li><span>Extra 2 maanden</span><span class="right"><del>€12,48</del></span></li>
              <li><span>66% Korting </span><span class="right">-€49,86</span></li>
              <li><span><b>Totaal</b></span><span class="right"><b>€24,99</b></span></li>
              <li class="last"><b class="red">(Bespaar €62,34)</b></li>
            </ul>
          </div>
          <div class="numbox">
            <h3>
              Wees er snel bij, slechts
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">5</b></b>
                <b class="nwrap"><b class="numlist">5</b></b>
              </span>
              over
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature first">
    <h2 class="wrapper">Nieuwe functies en verbeteringen van <br> Driver Booster 8 PRO</h2>
    <div class="wrapper clearfix">
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/device.png')?>" alt=""/></div>
      <div class="content fr">
        <h3>Update Drivers in 1 klik</h3>
        <ul>
          <li>
            <i class="twice">●</i>
            <span>Update 4.500.000+ drivers in één klik om crashes en schermbevriezing te voorkomen.</span>
          </li>
          <li>
            <i>●</i>
            <span>Sneller verouderde drivers scannen met de nieuwe scan engine.</span>
          </li>
          <li class="twice">
            <i>●</i>
            <span>Meer geluids- en netwerkproblemen kunnen worden verholpen met verbeterde tools.</span>
          </li>
        </ul>
        <div class="clearfix">
          <dl>
            <dt>
              <img src="<?php echo getStaticUrl('images/arrow-icon01.png')?>" alt=""/>
              <span class="_num">3.500.000+</span>
              <span class="_num red">4.500.000+</span>
            </dt>
            <dd>
              <strong>28%</strong>
              <p>Grotere Driver Database</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/arrow-icon02.png')?>" alt=""/></dt>
            <dd>
              <strong>2X</strong>
              <p>Hogere Scansnelheid</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="feature second">
    <div class="wrapper clearfix">
      <div class="content fl">
        <h3>Betere Game-ervaring</h3>
        <ul>
          <li class="twice">
            <i>●</i>
            <span>Verbeterde Game Boost maakt uw pc nog sneller tijdens het gamen.</span>
          </li>
          <li class="twice">
            <i>●</i>
            <span>Dempt automatisch alle Driver Booster notificaties zodat u niet gestoord wordt.</span>
          </li>
          <li class="twice">
            <i>●</i>
            <span>Houd spelcomponenten actueel voor vloeiende games en de nieuwste functies.</span>
          </li>
        </ul>
        <div class="clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/arrow-icon01.png')?>" alt=""/></dt>
            <dd>
              <strong>15%</strong>
              <p>Betere Game Boost</p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="scan01" src="<?php echo getStaticUrl('images/scan-01.png')?>" alt=""/>
        <img class="scan02" src="<?php echo getStaticUrl('images/scan-02.png')?>" alt=""/>
        <img class="scan03" src="<?php echo getStaticUrl('images/scan-03.png')?>" alt=""/> 
      </div>
    </div>
  </div>
  <div class="feature third wrapper">
    <p>
      <span><i></i> <b>Driver Booster 7 Free</b></span> <span class="red"><i></i> <b>Driver Booster 8 PRO</b></span>
    </p>
    <p class="gray">* Driver Booster 8 PRO is uitgebreid getest in ons interne test lab. Uw resultaten kunnen afwijken.</p>
  </div>
  <!-- feature end -->

  <!-- unique start -->
  <div class="feature unique">
    <div class="wrapper">
      <h2>Andere unieke voordelen van Driver Booster 8 PRO</h2>
      <div class="clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/></div>
        <ul class="content fr">
          <li>
            <i class="all-icons"></i>
            <span>Ongelimiteerde driver downloadsnelheid</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Voorrang op de laatste Game Ready Drivers</span>
          </li>
          <li class="twice">
            <i class="all-icons"></i>
            <span>Download en update drivers automatisch als het systeem inactief is</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Update noodzakelijke componenten voor soepele games</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Herstel gemakkelijk apparaatfouten voor betere prestaties</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Update automatisch naar de laatste versie</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Premium 24/7 technische ondersteuning</span>
          </li>
        </ul>
      </div>
      <!-- giftbox -->
      <div class="giftbox">
        <h3>Nu met Gratis Lanceringscadeau</h3>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/></dt>
          <dd>
            <div class="numbox">
              <h3>
                Wees er snel bij, slechts
                <span id="centNum" class="giftNum">
                  <b class="nwrap"><b class="numlist">0</b></b>
                  <b class="nwrap"><b class="numlist">0</b></b>
                  <b class="nwrap"><b class="numlist">5</b></b>
                  <b class="nwrap"><b class="numlist">5</b></b>
                </span>
                over
              </h3>
            </div>
            <a class="buybtn green"
               href="https://www.iobit.com/buy.php?product=nl-db83pc14m2499&ref=nl_db83pc14m2499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
               onclick="ga( 'send', 'event', 'db14mbuy', 'buy', 'dbpurchase-newlaunch-nl');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Claim Uw Cadeau</span>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- unique end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Wat vinden anderen?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pcmag-editchoice.png')?>" alt="PCMG"></dt>
          <dd>
            <h2>Media recensie</h2>
            <p>“IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”</p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo-Thuya"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Met Driver Booster werk ik alle drivers gemakkelijk bij. Daarnaast lost dit programma allerlei foutmeldingen op zoals geen geluid, netwerkfouten, apparaat fouten enz. Voordat ik dit programma downloadde, geloofde ik niet dat dit programma mijn computer nog kon redden, maar nu ben ik helemaal overtuigd en loopt mijn PC weer als nieuw."</p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam-Backlund"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Driver Booster is een geweldige applicatie. Voor iemand die veel applicaties en drivers op de computer heeft staan maar geen tijd heeft om deze bij te werken, raad ik Driver Booster aan iedereen die gemakkelijk en snel zijn drivers wil bijwerken direct aan."</p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne-Bowler"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Dit is een van de beste driver update software op de markt. Microsoft heeft zelfs gesuggereerd dat updates voor mijn drivers niet zouden werken met mijn systeem. Maar dit programma vind alle updates die ik nodig heb. Het werkte perfect. Eenvoudig te gebruiken, informatief en intuïtief. Deze software zal altijd in mijn toolbox blijven... Goed gedaan!"</p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Wereldwijde Awards</h2>
      <p>Dankzij het vertrouwen en de prijzen die wij de afgelopen zes jaar hebben ontvangen van deze vooraanstaande media, weet u dat u de juiste driver updater heeft.</p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>
            Probeer ZONDER RISICO – <br>
            met onze 60 dagen niet-goed-geld-terug garantie
          </h4>
          <p>
            Door PRO te activeren zullen al uw driverproblemen opgelost
            worden en zal uw computer soepeler werken!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Wij accepteren:</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Opmerking:</dt>
        <dd>
          *IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.
        </dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit.Alle Rechten Voorbehouden</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/float-gift-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Wees er snel bij, slechts
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
        </span>
        over
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> mensen bekijken deze deal</p>
    </div>
    <a class="buybtn fr"
       href="https://www.iobit.com/buy.php?product=nl-db83pc14m2499&ref=nl_db83pc14m2499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
       onclick="ga( 'send', 'event', 'db14mbuy', 'buy', 'dbpurchase-newlaunch-nl');">
      <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
      <span>Bestel Nu</span>
    </a>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>