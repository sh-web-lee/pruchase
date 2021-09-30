<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
if (in_array($_GET['pop'], array('x_asc', 'xr_sdpasc', 'xr_dbpasc'))) {
    $refStr .= '-' . $_GET['pop'];
}
if (in_array($_GET['type'], array('pro', 'giveawayexp'))) {
    $refStr .= '-' . $_GET['type'];
}
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-l' . $_GET['litype'] . '-e' . $_GET['expd'];

if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Gratis Cadeau bij Advanced SystemCare PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
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
    <!-- h1 -->
    <h1 class="ease">Tijdelijk met Gratis Cadeau!</h1>
    <!-- offer -->
    <div class="content">

      <!-- 3pc -->
      <div class="offer small">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/asc.png')?>" alt="Advanced SystemCare PRO"></dt>
          <dd>
            <ul>
              <li><i class="all-icons"></i> 200% Sneller Systeem</li>
              <li><i class="all-icons"></i> 300% Sneller Internet</li>
              <li><i class="all-icons"></i> Volledige registeropschoning</li>
              <li><i class="all-icons"></i> Ondersteunt 3 pc’s (1 jaar)</li>
            </ul>
            <!-- price -->
            <p class="price">€<b>19</b>,99&nbsp;&nbsp;<del>€49,99</del></p>
            <!-- buybtn -->
            <a class="buybtn gray small"
               href="https://www.iobit.com/buy.php?product=nl-asc141y3pc1999&ref=nl_asc143pc1999purchase2003<?php echo $refStr;?>&refs=nl_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2003-nl')">
              <i class="all-icons"></i>
              <span>NU KOPEN</span>
            </a>
          </dd>
        </dl>
      </div>

      <!-- 3pc+bundle -->
      <div class="offer large">
        <dl>
          <dt class="clearfix">
            <img src="<?php echo getStaticUrl('images/asc-bundle.png')?>" alt="Advanced SystemCare PRO+Smart Defrag PRO">
            <span></span>
          </dt>
          <dd>
            <ul>
              <li><i class="all-icons"></i> 200% Sneller Systeem</li>
              <li><i class="all-icons"></i> 300% Sneller Internet</li>
              <li><i class="all-icons"></i> Volledige registeropschoning</li>
              <li><i class="all-icons"></i> Defragmenteert harde schijven</li>
              <li><i class="all-icons"></i> Trimt SSD’s</li>
              <li><i class="all-icons"></i> Ondersteunt 3 pc’s (1 jaar)</li>
            </ul>
            <!-- price -->
            <p class="price large">€<b>19</b>,99&nbsp;&nbsp;<del>€79,98</del></p>
            <!-- buybtn -->
            <a class="buybtn yellow large"
               href="https://www.iobit.com/buy.php?product=nl-asc143pcsd1999&ref=nl_asc143pcsd1999purchase2003<?php echo $refStr;?>&refs=nl_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2003-nl')">
              <i class="all-icons"></i>
              <span>NU KOPEN</span>
            </a>
            <!-- countdown -->
            <p class="countdown">
              Tijdelijk: nog maar
              <strong>00</strong><span>:</span>
              <strong>00</strong><span>:</span>
              <strong>00</strong><span>:</span>
              <strong class="last">000</strong>
            </p>
          </dd>
        </dl>
      </div>

    </div>
  </div>
</div>
<!-- end banner -->

<!-- payments -->
<div class="payments wrapper">
  <img src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
</div>
<!-- end payments -->

<!-- benefits -->
<div class="benefits">
  <div class="wrapper">
    <h2>De ideale alles-in-één oplossing om het maximale uit uw pc te halen!</h2>
    <!-- showcase -->
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-00.jpg')?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt="">
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li></li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt="">
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt="">
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt="">
          </div>
        </li>
        <li class="fun5">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-05-zoom.png')?>" alt="">
          </div> 
        </li>
      </ul>
      <ul class="list-icon">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <!-- detail-list -->
    <div class="detail-list">
      <dl>
        <dt><i class="benefits04"></i></dt>
        <dd>
          <h3>100% BESCHERMING</h3>
          <p>Beschermt uw privacy en data tegen toegang van buitenaf. Beschermt uw privacy twee keer zo goed*  als de gratis versie.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits02"></i></dt>
        <dd>
          <h3>200%* SNELLER SYSTEEM</h3>
          <p>Ruimt onnodige bestanden op en optimaliseert CPU en RAM voor een sneller systeem. Maakt uw systeem tot 200% sneller dan de gratis versie.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits03"></i></dt>
        <dd>
          <h3>300%* SNELLER INTERNET</h3>
          <p>Downloads, online games, internetpagina’s en YouTube video’s worden tot 300% sneller dan met de gratis versie.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits01"></i></dt>
        <dd>
          <h3>MEER VRIJE SCHIJFRUIMTE</h3>
          <p>Ruimt overbodige bestanden, ongeldige snelkoppelingen, registeritems en onvoltooide downloadbestanden volledig op.</p>
        </dd>
      </dl>
      <a href="Javascript: goTarget($('.compare'))" class="textlink">Meer informatie ></a>
    </div>
  </div>
</div>
<!-- end benefits -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <h2>Kies Nu Advanced SystemCare PRO</h2>
    <h3>Velen gingen u voor, zoals…</h3>
    <!-- content -->
    <div class="content clearfix">
      <!-- describe -->
      <div class="describe">
        <p class="active">
          Ik gebruik ASC al jaren. Recent heb ik de laatste V14 Beta versie geprobeerd. En het is met afstand de volledigste en beste versie die er is. IObit blijft hun producten en technologie constant verbeteren. Met meer opties en gemakkelijkere navigatie vind je snel de juiste oplossing. Ik hoef geen andere software meer te overwegen.
        </p>
        <p>
          De functies van Advanced System Care (ASC) 14 zijn geweldig en het programma ziet er netjes, fris en modern uit. Ik heb andere alles-in-één systeemonderhoudsprogramma’s gebruikt, maar geen één was zo effectief als ASC 14. Het programma is eenvoudig in gebruik en zeer intuïtief. De tools maken het programma heel compleet en nadat ik het programma laat draaien is mijn computer duidelijk sneller. Het programma voorkomt het overbodig gebruik van systeembronnen zodat uw computer sneller en efficiënter wordt. Dit product is geweldig en de beste in z’n soort. Als je iets om je laptop of pc geeft, gebruik je Advanced System Care 14!
        </p>
        <p>
          Advanced system care 14 beta is het compleetste alles-in-één systeem dat er is. Ik gebruik het programma al jaren en elk jaar wordt het beter en is de interface nog gemakkelijker. Grondig opschonen is heel makkelijk, in één klik doet het programma alles voor je. Ook alle andere opties zijn super fijn! Zoals de lege mappen vinder, de internet booster en zelfs de gamebooster is top!! Volgens mij is dit de beste opschoonsoftware die er is.
        </p>
        <p>
          Ik heb veel verschillende software aangeschaft om mijn pc sneller te maken en computerproblemen op te lossen. Helaas heeft geen één mijn echt kunnen helpen, totdat ik Advanced System Care 14 probeerde. Ik vind het geweldig dat er zo veel opties zijn en dat het oplossingen voor al mijn problemen biedt. Het is ongelooflijk hoe veel sneller mijn pc is na de eerste keer scannen en repareren. Bij uitstek het beste product dat ik heb kunnen vinden.
        </p>
      </div>
      <!-- user -->
      <ul class="user">
        <li class="active clearfix">
          <img src="<?php echo getStaticUrl('images/brendon-o-rourke.png')?>" alt="">
          <p><b>Brendon O'Rourke</b></p>
        </li>
        <li class="clearfix">
          <img src="<?php echo getStaticUrl('images/anthony-baker.png')?>" alt="">
          <p><b>Anthony Baker</b></p>
        </li>
        <li class="clearfix">
          <img src="<?php echo getStaticUrl('images/ryan-hill.png')?>" alt="Ryan Hill">
          <p><b>Ryan Hill</b></p>
        </li>
        <li class="clearfix">
          <img src="<?php echo getStaticUrl('images/lyle-stelmaschuk.png')?>" alt="">
          <p><b>Lyle Stelmaschuk</b></p>
        </li>
      </ul>
      <!-- arrow -->
      <span class="arrow"><img src="<?php echo getStaticUrl('images/arrow.png')?>" alt=""></span>
      <!-- view -->
      <p class="view"> …en <span class="viewNum">4.741.306</span> anderen</p>
    </div>
  </div>
</div>
<!-- end review -->

<!-- compare -->
<div class="compare wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text">Waarom heeft u de PRO versie nodig?</th>
      <th class="space"></th>
      <th class="itemb" valign="bottom"><div class="box">Advanced SystemCare <br> Free</div></th>
      <th class="space"></th>
      <th class="itema"><div class="box">Advanced SystemCare <br> Pro</div></th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text">Basis opschoning, reparatie en optimalisatie van het systeem</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons yes">√</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
      </tr>
      <tr>
        <td class="text">Tot wel 300% sneller internet met internet booster <span>Verbeterd</span></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons">X</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
      </tr>
      <tr>
        <td class="text">Tot wel 200% snellere opstarttijd <span>Verbeterd</span></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons">X</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
      </tr>
      <tr>
        <td class="text">Grondige Windows register opschoning voorkomt computer crashes <span class="red">Essentieel voor oude pc's</span></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons">X</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
      </tr>
      <tr>
        <td class="text">Sneller systeem door volledige harde schijf optimalisatie  <span class="red">Essentieel voor oude pc's</span></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons">X</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
      </tr>
      <tr>
        <td class="text">Volledige PC opschoning en optimalisering met AI-Modus <span class="nieuw">Nieuw</span></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons">X</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
      </tr>
      <tr>
        <td class="text">Blokkeer programma’s die toegang tot uw persoonlijke gegevens willen</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons">X</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
      </tr>
      <tr>
        <td class="text">Dicht beveiligingsgaten in real time</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons">X</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
      </tr>
      <tr>
        <td class="text">Optimaal gemak met automatische updates en automatische RAM-opschoning</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons">X</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
      </tr>
      <tr>
        <td class="text">Gratis 24/7 technische ondersteuning</td>
        <td class="space"></td>
        <td class="itemb last"><i class="all-icons">X</i></td>
        <td class="space"></td>
        <td class="itema last"><i class="all-icons">√</i></td>
      </tr>
    </tbody>
    <tfoot>
    <tr>
      <th class="text radius"></th>
      <th class="space radius"></th>
      <th class="itemb radius"><span class="shadow"></span></th>
      <th class="space radius"></th>
      <th class="itema radius"><span class="shadow"></span></th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- compare end -->

<!-- bottombuy -->
<div class="bottombuy wrapper">

  <!-- 3pc -->
  <div class="offer small">
    <dl>
      <dt>
        <img class="box" src="<?php echo getStaticUrl('images/asc.png')?>" alt="Advanced SystemCare PRO">
        <p class="price">€<b>19</b>,99&nbsp;&nbsp;<del>€49,99</del></p>
      </dt>
      <dd>
        <ul>
          <li><i class="all-icons"></i> Volledige optimalisatie</li>
          <li><i class="all-icons"></i> Ondersteunt 3 pc’s (1 jaar)</li>
        </ul>
        <!-- buybtn -->
        <a class="buybtn gray small"
           href="https://www.iobit.com/buy.php?product=nl-asc141y3pc1999&ref=nl_asc143pc1999purchase2003<?php echo $refStr;?>&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2003-nl')">
          <i class="all-icons"></i>
          <span>NU KOPEN</span>
        </a>
      </dd>
    </dl>
  </div>

  <!-- 3pc+bundle -->
  <div class="offer large">
    <dl>
      <dt>
        <img class="box" src="<?php echo getStaticUrl('images/asc-bundle.png')?>" alt="Advanced SystemCare PRO+Smart Defrag PRO">
        <p class="price large">€<b>19</b>,99&nbsp;&nbsp;<del>€79,98</del></p>
      </dt>
      <dd>
        <ul>
          <li><i class="all-icons"></i> Volledige optimalisatie</li>
          <li><i class="all-icons"></i> Grondige defragmentatie</li>
          <li><i class="all-icons"></i> Ondersteunt 3 pc’s (1 jaar)</li>
        </ul>
        <!-- buybtn -->
        <a class="buybtn yellow large"
           href="https://www.iobit.com/buy.php?product=nl-asc143pcsd1999&ref=nl_asc143pcsd1999purchase2003<?php echo $refStr;?>&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2003-nl')">
          <i class="all-icons"></i>
          <span>NU KOPEN</span>
        </a>
        <!-- countdown -->
        <p class="countdown">
          Tijdelijk: nog maar
          <strong>00</strong><span>:</span>
          <strong>00</strong><span>:</span>
          <strong>00</strong><span>:</span>
          <strong class="last">000</strong>
        </p>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

<!-- service -->
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
  <div class="copyright">Copyright ©2005 - <?php echo date('Y') ?> IObit. Alle Rechten Voorbehouden</div>
</div>
<!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>