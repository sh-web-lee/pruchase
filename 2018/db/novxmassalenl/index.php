<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$viewNum=rand(82,105);
if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $cName='nldboct'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>2){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=2;
    }
  }else{
    $packsNum=60;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit();
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
    'garegion'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if(in_array($_GET['st'],array('dbxmasr','db_xmas'))){
  $refStr.='-'.$_GET['st'];
}
if(in_array($_GET['pop'],array('x_db'))){
  $refStr.='-'.$_GET['pop'];
}
if($_GET['to']=='purchase-6'){
  $ver=$_GET['ver'];
  if(preg_match('/^([0-9])\.([0-9])\.[0-9]\.[0-9]{3}/',$ver,$matches)){
    $verStr=$matches[1].$matches[2];
    $refStr.='-'.$verStr;
  }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>80% Kerstkorting op Driver Booster PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      Speciale Kerstaanbieding
      <p>De beste prijs van het jaar. Wie het eerst komt, wie het eerst maalt!</p>
    </h1>
    <!-- content -->
    <div class="content clearfix">
      <!-- left-message -->
      <div class="left-message fl">
        <img src="<?php echo $pResUrl;?>images/banner-db.png" alt="">
        <img class="db-reduce" src="<?php echo $pResUrl;?>images/banner-db-reduce.png" alt="">
        <img class="banner-off85" src="<?php echo $pResUrl;?>images/banner-off85.png" alt="">
      </div>
      <!-- right-message -->
      <div class="right-message fr">
        <!-- title -->
        <h3>Vandaag slechts 150 beschikbaar!</h3>
        <!-- surplus -->
        <p class="surplus">Nog maar <b class="one">0</b><b class="two">0</b> over*</p>
        <!-- progressbar -->
        <div class="progressbar">
          <span></span>
        </div>
        <!-- view -->
        <p class="view"><span class="viewNum"><?php echo $viewNum;?></span> mensen bekijken deze deal</p>
        <!-- price -->
        <p class="price">
          <strong>24</strong>
          <sup> 99</sup>
          <del> €144,79</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-db63pciupf2499&ref=nl_db63pciupf2499purchase1811<?php echo $refStr;?>&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811-nl')">
          Profiteer Nu
        </a>
        <!-- attention -->
        <p class="attention">1-jarig abonnement / 3 pc’s</p>
        <!-- moneyback -->
        <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      </div>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
</div>
<!-- payment end -->

<!-- benfits start -->
<div class="benfits wrapper clearfix">
  <h2>Houd uw Drivers up-to-date voor stabiele pc-prestaties</h2>
  <div class="showcase">
    <div class="inner">
      <ul class="screenshot">
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt=""/>
        </li>
      </ul>
    </div>
    <ul class="zoom">
      <li class="fun1 active">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun2">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun3">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun4">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt=""/>
        </div>
      </li>
    </ul>
  </div>
  <div class="detail-list">
    <dl class="active first">
      <dt><i class="benfits01"></i></dt>
      <dd>
        <h3>Houd meer dan 3.000.000 drivers up-to-date</h3>
        <p>
          De ideale oplossing om automatisch meer dan 3.000.000 <br>verouderde en niet-werkende drivers te updaten.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benfits02"></i></dt>
      <dd>
        <h3>100% veilig updaten</h3>
        <p>
          Downloadt alleen gecontroleerde drivers en maakt <br>herstelpunten aan zodat er niets mis kan gaan.
        </p>
      </dd>
    </dl>
    <dl class="three">
      <dt><i class="benfits03"></i></dt>
      <dd>
        <h3>Optimale gameprestaties</h3>
        <p>
          Verbetert de gameprestaties met de nieuwste Game Ready <br>Drivers en laat games vloeiend werken met de laatste <br>gamecomponenten.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benfits04"></i></dt>
      <dd>
        <h3>Sneller drivers downloaden</h3>
        <p>
          Downloadt en installeert drivers automatisch als het <br>systeem inactief is.
        </p>
      </dd>
    </dl>
  </div>
  <div class="clear"></div>
  <a class="intro fr" href="javascript: void(0)">Meer over PRO >></a>
</div>
<!-- benfits end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>Nu met twee GRATIS kertcadeaus!</h2>
    <div class="clearfix">
      <!-- PF -->
      <dl class="fl pf-box clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/pf-box.png" alt="Protected Folder"></dt>
        <dd>
          <h3>Protected Folder</h3>
          <p><del>€39,95</del> <strong>€<b>0</b></strong></p>
          <p><i></i> <span>Vergrendel uw belangrijke mappen met <br>een wachtwoord!</span></p>
          <p><i></i> <span>Voorkom dat uw gegevens gestolen of <br>bekeken worden!</span></p>
        </dd>
      </dl>
      <!-- IU -->
      <dl class="fr iu-box clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/iu-box.png" alt="IObit Uninstaller 8 PRO"></dt>
        <dd>
          <h3>IObit Uninstaller 8 PRO</h3>
          <p><del>€29,99</del> <strong>€<b>0</b></strong></p>
          <p><i></i> <span>Verwijder hardnekkige software, <br>plug-ins en bundleware!</span></p>
          <p><i></i> <span>Laat geen resten van verwijderde <br>programma’s achter op uw pc!</span></p>
        </dd>
      </dl>
    </div>
    <!-- words -->
    <h4>Wees er snel bij, de cadeaus zijn beperkt beschikbaar!</h4>
    <p class="surplus">Vandaag nog maar <b class="viewNum"><?php echo $viewNum;?></b> over</p>
    <!-- buybtn -->
    <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-db63pciupf2499&ref=nl_db63pciupf2499purchase1811<?php echo $refStr;?>&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811-nl')">
      Claim Uw Kerstcadeaus!
    </a>
  </div>
</div>
<!-- gift-box end -->

<!-- review start -->
<div class="review wrapper">
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
        <dd>
          <h2>Media recensie</h2>
          <p>
            “IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”
          </p>
          <cite>PC Magazine</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt=""></dt>
        <dd>
          <h2>Klantbeoordeling</h2>
          <p>
            "Met Driver Booster werk ik alle drivers gemakkelijk bij. Daarnaast lost dit programma allerlei foutmeldingen op zoals geen geluid, netwerkfouten, apparaat fouten enz. Voordat ik dit programma downloadde, geloofde ik niet dat dit programma mijn computer nog kon redden, maar nu ben ik helemaal overtuigd en loopt mijn PC weer als nieuw."
          </p>
          <cite>Myo Thuya</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""></dt>
        <dd>
          <h2>Klantbeoordeling</h2>
          <p>
            "Driver Booster is een geweldige applicatie. Voor iemand die veel applicaties en drivers op de computer heeft staan maar geen tijd heeft om deze bij te werken, raad ik Driver Booster aan iedereen die gemakkelijk en snel zijn drivers wil bijwerken direct aan."
          </p>
          <cite>Adam Backlund</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt=""></dt>
        <dd>
          <h2>Klantbeoordeling</h2>
          <p>
            "Dit is een van de beste driver update software op de markt. Microsoft heeft zelfs gesuggereerd dat updates voor mijn drivers niet zouden werken met mijn systeem. Maar dit programma vind alle updates die ik nodig heb. Het werkte perfect. Eenvoudig te gebruiken, informatief en intuïtief. Deze software zal altijd in mijn toolbox blijven... Goed gedaan!"
          </p>
          <cite>Wayne Bowler</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->

<!-- comparison start -->
<div id="compare" class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th class="text" colspan="2">Driver Booster PRO functies</th>
        <th class="itemb">Driver Booster <b>FREE</b></th>
        <td class="space"></td>
        <th class="itema">Driver Booster <b>PRO</b></th>
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
        <td class="virtue">Scant &amp; identificeert automatisch verouderde, missende en foutieve drivers</td>
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
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
        <td class="virtue">Veiliger updaten met alléén gekwalificeerde WHQL drivers</td>
        <td class="itemb"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons orange">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
        <td class="virtue">Grotere database werkt nog meer verouderde en zeldzame drivers bij</td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons orange">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
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
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
        <td class="virtue">Update alle game componenten</td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons orange">√</i></td>
      </tr>
      <tr class="bottall">
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
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
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
        <td class="virtue">Download &amp; installeert drivers tijdens het opstarten</td>
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
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
        <td class="virtue">Automatisch bijwerken naar de nieuwste versie </td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons orange">√</i></td>
      </tr>
      <tr class="bottall">
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
        <td class="virtue">Gratis 24/7 technische ondersteuning</td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons orange">√</i></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <div class="left-message">
      <img src="<?php echo $pResUrl;?>images/bottom-db.png" alt="">
      <img class="db-reduce" src="<?php echo $pResUrl;?>images/bottom-db-reduce.png" alt="">
    </div>
    <dl class="price-content">
      <dt>
        <h3>Beperkt beschikbaar! OP = OP</h3>
        <!-- price -->
        <p class="price">
          <strong>24</strong>
          <sup>99</sup>
          <del> €144,79</del>
        </p>
      </dt>
      <dd>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-db63pciupf2499&ref=nl_db63pciupf2499purchase1811<?php echo $refStr;?>&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811-nl')">
          Profiteer Nu
        </a>
        <!-- attention -->
        <p class="attention"><i></i>LET OP slechts <span class="viewNum"><?php echo $viewNum;?></span> over!</p>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><h3>Garantie</h3></dd>
      <dd>60 dagen niet-goed-geld-terug garantie.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/service.png" alt=""></dt>
      <dd><h3>Directe Levering</h3></dd>
      <dd>U ontvangt de licentie binnen enkele minuten na bestelling.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><h3>24/7 gratis klantenservice</h3></dd>
      <dd>Gratis klantenservice voor PRO gebruikers.</dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Opmerkingen:</dt>
    <dd>*IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.</dd>
    <dd>*Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright ©2005-<?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
</div>
<!-- footer end -->
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>