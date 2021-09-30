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

$transData=json_decode(base64_decode($_GET['tdata']));
if(($transData->LftTrlDay<=4)&&($_GET['to']=='trialbuy_8')){
  header("location:./trialbuy.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'nldbaug' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24 * 2);
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ref'])){
	$refStr.='-'.$_GET['ref'];
  }
if(!in_array($_GET['to'],array('trialbuy_7','trialbuy_2','trialbuy_9','trialbuy_4','trialbuy_8'))){
  $_GET['to']='';
}
if(empty(json_decode(base64_decode($_GET['tdata'])))){
  $_GET['tdata']='W10=';
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
if(!empty($_GET['insur'])){
  $refStr.='-'.$_GET['insur'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>80% Korting op Driver Booster met IObit Uninstaller en Protected Folder</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title changed">
      <p>Uw probeerversie verloopt binnenkort</p>
      <h1> Pak deze exclusieve kans voor proefversiegebruikers!</h1>
    </div>
    <!-- panel -->
    <div class="panel clearfix">
      <div class="box left">
        <div class="top"><h2>Standaardpakket</h2></div>
        <div class="imgbox">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
          <del>€74,85</del>
        </div>
        <div class="price">
          <p><strong><big>66%</big> Korting</strong></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=nl-db83pc2499&ref=nl_db83pc2499trialpurchase-i-u-t-e&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-nl-trial1')">
            KOOP NU
          </a>
        </div>
      </div>
      <div class="box center active">
        <div class="top"><h2>Dubbel Voordeelpakket</h2></div>
        <p class="countdown">
          Slechts <strong class="packsNum"> 50 </strong> pakketten over!
        </p>
        <div class="imgbox">
          <img src="<?php echo getStaticUrl('images/db-gift-box1.png')?>" alt=""/>
          <del>€144,79</del>
        </div>
        <div class="price">
          <p><strong><big>80%</big> Korting</strong></p>
          <a class="buybtn green"
             href="https://www.iobit.com/buy.php?product=nl-db83pciupf2699&ref=nl_db83pciupf2699trialpurchase-i-u-t-e&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-nl-trial1')">
            PROFITEER NU
          </a>
          <p class="people"><i class="all-icons"></i> <b class="buyNum">5,202,235</b> mensen gebruiken Driver Booster PRO</p>
        </div>
      </div>
      <div class="box right">
        <div class="top"><h2>Voordeelpakket</h2></div>
        <div class="imgbox">
          <img src="<?php echo getStaticUrl('images/db-iu-box1.png')?>" alt=""/>
          <del>€98,75</del>
        </div>
        <div class="price">
          <p><strong><big>75%</big> Korting</strong></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=nl-db83pciu2599&ref=nl_db83pciu2599trialpurchase-i-u-t-e&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-nl-trial1')">
            KOOP NU
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature wrapper">
  <div class="original">
    <h2>Waarom Driver Booster PRO?</h2>
    <h3>
      Update <strong></strong> verouderde drivers & gamecomponent voor betere PC-prestaties en game-ervaring. <br>
    </h3>
    <img class="scan" src="<?php echo $pResUrl;?>images/feature-scan01.png" alt="">
    <div class="content">
      <!--one -->
      <dl class="one clearfix">
        <dt></dt>
        <dd>
          <h4>Stabiele computer</h4>
          <p>
            Werk essentiële drivers bij om <br>
            crashes en schermbevriezingen <br>
            te voorkomen.
          </p>
        </dd>
      </dl>
      <!-- two -->
      <dl class="two clearfix">
        <dt></dt>
        <dd>
          <h4>Apparaatbeheer</h4>
          <p>
            Los problemen met uw hardware op.
          </p>
        </dd>
      </dl>
      <!-- three -->
      <dl class="three clearfix">
        <dt></dt>
        <dd>
          <h4>Snel Games Laden</h4>
          <p>
            Update componenten om soepel <br>
            opstarten te garanderen.
          </p>
        </dd>
      </dl>
      <!-- four -->
      <dl class="four clearfix">
        <dt></dt>
        <dd>
          <h4>Betere Game-ervaring</h4>
          <p>
            Update gamegerelateerde drivers voor <br>
            de beste game-ervaring.
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <div class="update">
    <h2>Waarom Driver Booster PRO?</h2>
    <h3>
      Update <strong>30</strong> verouderde drivers & gamecomponent voor betere PC-prestaties en game-ervaring. <br>
    </h3>
    <img class="scan" src="<?php echo $pResUrl;?>images/feature-scan02.png" alt="">
    <div class="content">
      <!-- five -->
      <dl class="five top clearfix">
        <dt class="driveNum">15</dt>
        <dd>driver updates <br> beschikbaar  <sup>PRO</sup></dd>
      </dl>
      <!-- six -->
      <dl class="six top clearfix">
        <dt class="gameNum">15</dt>
        <dd>gamecomponent <br> updates beschikbaar <sup>PRO</sup></dd>
      </dl>
      <!-- one -->
      <dl class="one clearfix">
        <dt></dt>
        <dd>
          <h4>Stabiele computer</h4>
          <p>
            Werk essentiële drivers bij om crashes <br>
            en schermbevriezingen te voorkomen.
          </p>
        </dd>
      </dl>
      <!-- two -->
      <dl class="two clearfix">
        <dt></dt>
        <dd>
          <h4>Apparaatbeheer</h4>
          <p>
            Los problemen met uw hardware op.
          </p>
        </dd>
      </dl>
      <!-- three -->
      <dl class="three clearfix">
        <dt></dt>
        <dd>
          <h4>Snel Games Laden</h4>
          <p>
            Update componenten om soepel <br>
            opstarten te garanderen.
          </p>
        </dd>
      </dl>
      <!-- four -->
      <dl class="four clearfix">
        <dt></dt>
        <dd>
          <h4>Betere Game-ervaring</h4>
          <p>
            Update gamegerelateerde drivers voor <br>
            de beste game-ervaring.
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h2>Wat is het verschil tussen uw huidige versie en PRO?</h2>
  <table>
    <thead>
    <tr>
      <th colspan="2"></th>
      <th class="itema">
        <div class="free">Uw huidige versie</div>
      </th>
      <th class="space"></th>
      <th class="itemb">
        <div class="free">Driver Booster PRO</div>
      </th>
      <th class="space"></th>
      <th class="itemc">
        <div class="pro">
          Dubbel <br>
          voordeelpakket
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
      <td class="virtue">Automatisch drivers updaten als de pc niet wordt gebruikt</td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons black">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
      <td class="virtue">Drivers updaten met 1 klik</td>
      <td class="itema"><p class="exTxt first">Vervalt binnen 7 dagen</p></td>
      <td class="space"></td>
      <td class="itemb changed"><b class="limite">Onbeperkt</b></td>
      <td class="space"></td>
      <td class="itemc changed"><b class="limite">Onbeperkt</b></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
      <td class="virtue">Tot 100% sneller updaten</td>
      <td class="itema"><p class="exTxt">Vervalt binnen 7 dagen</p></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons black">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
      <td class="virtue">Los apparaatproblemen op voor een veiligere pc</td>
      <td class="itema"><p class="exTxt">Vervalt binnen 7 dagen</p></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons black">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
      <td class="virtue">Automatisch downloaden & back-uppen</td>
      <td class="itema"><p class="exTxt">Vervalt binnen 7 dagen</p></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons black">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon04.png')?>" alt=""></td>
      <td class="virtue">Beveilig uw bestanden met een wachtwoord</td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon08.png')?>" alt=""></td>
      <td class="virtue">Verwijder hardnekkige programma’s en schadelijke plug-ins</td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th colspan="2"></th>
      <th class="itema"></th>
      <th class="space"></th>
      <th class="itemb">
        <p><b>€24,99</b> <del>€74,85</del></p>
        <a class="buybtn other"
           href="https://www.iobit.com/buy.php?product=nl-db83pc2499&ref=nl_db83pc2499trialpurchase-i-u-t-e&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-nl-trial1')">
          <i class="all-icons"></i> Koop Nu
        </a>
      </th>
      <th class="space"></th>
      <th class="itemc">
        <p><b>€26,99</b> <del>€104,84</del></p>
        <a class="buybtn other shadow"
           href="https://www.iobit.com/buy.php?product=nl-db83pciupf2699&ref=nl_db83pciupf2699trialpurchase-i-u-t-e&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-nl-trial1')">
          <i class="all-icons"></i> Koop Nu
        </a>
        <p>Slechts <strong class="packsNum">***</strong> pakketten over</p>
      </th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison end -->

<!-- review start -->
<div class="review wrapper">
  <h2>Wat vinden anderen?</h2>
  <div class="container">
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
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <p>
      Vertrouwd en bekroond door de volgende media
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
</div>
<!-- awards end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl class="fl">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    <dd>
      <h3>Probeer ZONDER RISICO – <br>
        met onze 60 dagen niet-goed-geld-terug garantie</h3>
      <p>
        Door PRO te activeren zullen al uw driverproblemen opgelost <br>
        worden en zal uw computer soepeler werken!
      </p>
    </dd>
  </dl>
  <dl class="fr">
    <dd><h3>Wij accepteren:</h3></dd>
    <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
  </dl>
</div>
<!-- service end -->

<!-- bottom start -->
<dl class="note wrapper">
  <dt>Let op:</dt>
  <dd>*Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen goeddunken</dd>
  <dd>* De gegevens kunnen variëren op basis van verschillende systemen en computers.</dd>
</dl>
<div class="copyright">
  <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/db-bundle-box1.png')?>" alt="Driver Booster PRO"></div>
    <h2 class="fl">80% KORTING</h2>
    <div class="price fr">
      <h3>Houd al uw drivers up-to-date en krijg 2 extra’s!</h3>
      <a class="buybtn shadow other"
         href="https://www.iobit.com/buy.php?product=nl-db83pciupf2699&ref=nl_db83pciupf2699trialpurchase-i-u-t-e&refs=nl_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-nl-trial1')">
        <i class="all-icons"></i> Profiteer Nu
      </a>
      <p>Slechts <strong class="packsNum">***</strong> pakketten over</p>
    </div>
  </div>
</div>
<!-- floatlayer end -->
<script>
  var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
  transData = JSON.parse(transDataJson);
</script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>