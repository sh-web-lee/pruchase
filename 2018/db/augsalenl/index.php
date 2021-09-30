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

if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
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
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>80% korting op Driver Booster PRO met IObit Uninstaller en Protected Folder</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700'>
<link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1 class="title">
        Vandaag nog <b id="num" class="numbox"><span class="list"></span><span class="list"></span></b> Dubbel Voordeelpakketten over!
      </h1>
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
               href="https://www.iobit.com/buy.php?product=nl-db63pc2499&ref=nl_db63pc2499purchase1807<?php echo $refStr;?>&refs=nl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1807-nl')">
              KOOP NU  
            </a>
          </div>
        </div>
        <div class="box center active">
          <div class="top"><h2>Dubbel Voordeelpakket</h2></div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
            <del>€144,79</del>
          </div>
          <div class="price">
            <p><strong><big>80%</big> Korting</strong></p>
            <a class="buybtn green"
               href="https://www.iobit.com/buy.php?product=nl-db63pciupf2699&ref=nl_db63pciupf2699purchase1807<?php echo $refStr;?>&refs=nl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1807-nl')">
              PROFITEER NU  
            </a>
            <p class="people"><i class="all-icons"></i> <b class="buyNum">5,202,235</b> mensen gebruiken Driver Booster PRO</p>
          </div>
        </div>
        <div class="box right">
          <div class="top"><h2>Voordeelpakket</h2></div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/db-iu-box.png')?>" alt=""/>
            <del>€104,84</del>
          </div>
          <div class="price">
            <p><strong><big>75%</big> Korting</strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nl-db63pciu2599&ref=nl_db63pciu2599purchase1807<?php echo $refStr;?>&refs=nl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1807-nl')">
              KOOP NU  
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment">
    <div class="wrapper clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
        <dd>Betaalmethoden</dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>60 Dagen niet goed geld terug garantie</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/veilig.png')?>" alt=""/></dt>
        <dd>Veilig betalen</dd>
      </dl>
    </div>
  </div>
  <!-- payment end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>De voordelen van Driver Booster PRO</h2>
    <p>Automatisch drivers updaten! Zonder dat u er iets voor hoeft te doen</p>
    <div class="clearfix panel">
      <div class="list one">
        <span class="icons01"></span>
        <b>Sneller scannen en updaten!</b>
      </div>
      <div class="list two">
        <span class="icons02"></span>
        <b>Gratis 24/7 ondersteuning!</b>
      </div>
      <div class="list three">
        <span class="icons03"></span>
        <b>Meer tools om apparaatproblemen <br>in 1 klik op te lossen!</b>
      </div>
      <div class="list four">
        <span class="icons04"></span>
        <b>Toegang tot alle gamecomponenten <br>en Game Ready Drivers!</b>
      </div>
      <div class="list five">
        <span class="icons05"></span>
        <b>Grotere database!</b>
      </div>
      <div class="list six">
        <span class="icons06"></span>
        <b>Automatisch back-uppen!</b>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <div class="wrapper">
    <!-- comparison start -->
    <div id="compare" class="comparison">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Driver Booster PRO functies</th>
            <th class="itemb">Driver Booster <b>Free</b></th>
            <td class="space"></td>
            <th class="itema">Driver Booster <b>Pro</b></th>
          </tr>
        </thead>
        <tbody>
          <tr class="title">
            <td class="icons gray" width="45"></td>
            <td class="virtue gray"><strong>Snel &amp; Veilig Updaten</strong></td>
            <td class="itemb gray"></td>
            <td class="space"></td>
            <td class="itema orange"></td>
          </tr>
          <tr class="tall">
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Scant & identificeert automatisch verouderde, missende en foutieve drivers</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons orange">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Update verouderde drivers met 1-klik</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons orange">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Veiliger updaten met alléén gekwalificeerde WHQL drivers</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons orange">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Grotere database werkt nog meer verouderde en zeldzame drivers bij</td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons orange">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Ontgrendel de maximale updatesnelheid</td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons orange">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Maakt automatisch een backup van alle drivers voor een veilig herstel</td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons orange">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Update alle game componenten</td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons orange">√</i></td>
          </tr>
          <tr class="bottall">
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Repareert apparaatfouten automatisch voor betere prestaties</td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons orange">√</i></td>
          </tr>
          <tr class="title">
            <td class="icons gray" width="45"></td>
            <td class="virtue gray"><strong>Sneller Downloaden</strong></td>
            <td class="itemb gray"></td>
            <td class="space"></td>
            <td class="itema orange"></td>
          </tr>
          <tr class="tall">
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Kleinere driver pakketten voor snelle installatie</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons orange">√</i></td>
          </tr>
          <tr class="bottall">
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Download & installeert drivers tijdens het opstarten</td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons orange">√</i></td>
          </tr>
          <tr class="title">
            <td class="icons gray" width="45"></td>
            <td class="virtue gray"><strong>Premium IObit service</strong></td>
            <td class="itemb gray"></td>
            <td class="space"></td>
            <td class="itema orange"></td>
          </tr>
          <tr class="tall">
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Automatisch bijwerken naar de nieuwste versie</td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons orange">√</i></td>
          </tr>
          <tr class="bottall">
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
            <td class="virtue">Gratis 24/7 technische ondersteuning</td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons orange">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->

    <!-- review start -->
    <div class="review">
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

    <!-- donation start -->
    <div class="donation">
      <h2>Twee extra’s in uw Dubbel Voordeelpakket!</h2>
      <div class="clearfix">
        <div class="item">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
          <h3>IObit Uninstaller PRO</h3>
          <p>Normaal: <b>€29,99</b></p>
          <ul>
            <li>
              <i class="all-icons">√</i> 
              <span>Verwijder hardnekkige software, plug-ins en  bundleware!</span></li>
            <li>
              <i class="all-icons">√</i> 
              <span>Laat geen resten van verwijderde programma’s achter op uw pc!</span>
            </li>
          </ul>
        </div>
        <div class="item">
          <img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/>
          <h3>Protected Folder</h3>
          <p>Normaal: <b>€39,95</b></p>
          <ul>
            <li>
              <i class="all-icons">√</i> 
              <span>Vergrendel uw belangrijke mappen met een wachtwoord!</span>
            </li>
            <li>
              <i class="all-icons">√</i> 
              <span>Voorkom dat uw gegevens gestolen of bekeken worden!</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- donation end -->
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imgbox eight"></div>
      <ul class="fl">
        <li class="eight active" data-num="1">
          <span>Dubbel Voordeelpakket</span>
          <strong>-80%</strong>
        </li>
        <li data-num="2">
          <span>Voordeelpakket</span>
          <strong>-75%</strong>
        </li>
        <li data-num="0">
          <span>Standaardpakket</span>
          <strong>-66%</strong>
        </li>
      </ul>
      <div class="price fr">
        <p class="discount">
          <strong>€<big>26</big>,99</strong> <del>€144,79</del>
        </p>
        <a class="buybtn green"
           href="https://www.iobit.com/buy.php?product=nl-db63pciupf2699&ref=nl_db63pciupf2699purchase1807<?php echo $refStr;?>&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1807-nl')">
          PROFITEER NU  
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <!-- annotation start -->
    <dl class="annotation">
      <dt>Let op:</dt>
      <dd>
        *Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen goeddunken
      </dd>
      <dd>* De gegevens kunnen variëren op basis van verschillende systemen en computers.</dd>
    </dl>
    <!-- annotation end -->
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
  </div>
  <!-- footer end -->

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>