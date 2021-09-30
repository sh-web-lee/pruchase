<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(168,236);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}


$refStr = empty($_GET['st']) ? '' : ('-' . $_GET['st']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['to']) ? '' : ('-' . $_GET['to']);
$refStr .= empty($_GET['insur']) ? '' : ('-' . $_GET['insur']);
$refStr .= empty($_GET['pop']) ? '' : ('-' . $_GET['pop']);
$refStr .= empty($_GET['r']) ? '' : ('-' . $_GET['r']);
if (in_array($_GET['type'], array('pro', 'giveawayexp'))) {
    $refStr .= '-' . $_GET['type'];
}
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-l' . $_GET['litype'] . '-e' . $_GET['expd'];
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>85% Kerstkorting op Advanced SystemCare PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1>Tijdelijke Kerstaanbieding</h1>
        <h2>Uw exclusieve kans op hoge korting en cadeaus t.w.v. €69,94</h2>
      </div>
      <div class="clearfix">
        <div class="offer big">
          <div class="countdown"><span>Nog maar</span><b>15</b>m<b>24</b>s<b>00</b>ms</div>
          <b class="discount">-<big>85</big>%</b>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
            <div class="giftbox">
              <span class="gift-bg"></span>
              <!-- <img class="iu" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/> -->
              <img class="sd" src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
              <img class="pf" src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/>
              <span class="gift-line one"></span>
              <!-- <span class="gift-line two"></span> -->
              <span class="gift-flower"></span>
            </div>
          </div> 
          <div class="tag"><span>1 jaar /</span> 3 pc’s + Gratis Cadeaus</div>
          <div class="price">
            <p><strong><small>€</small>17,99</strong> <del>€119,93</del></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nl-asc143pcsdpf1799&ref=nl_asc143pcsdpf1799rightcornerpurchase2011-i-u-l-e<?php echo $refStr;?>&refs=nl_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascrightcornerpurchase2011-nl')">
               Nu Activeren
            </a>
            <p>Licentie ook geldig voor toekomstige versies</p>
          </div>
        </div>
        <div class="offer">
          <b class="discount">-<big>60</big>%</b>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
          </div>
          <div class="tag"><span>1 jaar /</span> 3 pc’s</div>
          <div class="price">
            <p><strong><small>€</small>19,99</strong> <del>€49,99</del></p>
            <a class="buybtn empty"
               href="https://www.iobit.com/buy.php?product=nl-asc141y3pc1999&ref=nl_asc143pc1999rightcornerpurchase2011-i-u-l-e<?php echo $refStr;?>&refs=nl_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascrightcornerpurchase2011-nl')">
               Nu Activeren
            </a>
            <p>Licentie ook geldig voor toekomstige versies</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper clearfix">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pagamento-sicuro.png')?>" alt=""/></dt>
        <dd>Veilige betaling</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>Geldteruggarantie</dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dt>
        <dd>24/7 Klantenservice</dd>
      </dl>
    </div>
  </div>
  <!-- service end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Waarom kiest u Advanced SystemCare PRO?</h2>
      <p>Alleen PRO kan uw pc volledig en grondig opschonen met de geavanceerde AI-modus</p>
      <div class="feature-wrap clearfix">
        <div class="feature-screen fl">
          <div class="feature-list">
            <img src="<?php echo getStaticUrl('images/asc-screen01.png')?>" alt=""/>
          </div>
          <div class="feature-list">
            <img src="<?php echo getStaticUrl('images/asc-screen02.png')?>" alt=""/>
            <img class="feature-screen-small one" src="<?php echo getStaticUrl('images/asc-screen02-small.png')?>" alt=""/>
          </div>
          <div class="feature-list on">
            <img src="<?php echo getStaticUrl('images/asc-screen03.png')?>" alt=""/>
            <img class="feature-screen-small two" src="<?php echo getStaticUrl('images/asc-screen03-small.png')?>" alt=""/>
          </div>
          <div class="feature-list">
            <img src="<?php echo getStaticUrl('images/asc-screen04.png')?>" alt=""/>
          </div>
        </div>
        <div class="feature-tab fr">
          <dl class="one on">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""/></dt>
            <dd>
              <h3>Grondigere Registeropschoning</h3>
              <p>
              Wist alle overbodige en ongeldige register items om meer schijfruimte vrij te maken en crashes te voorkomen. Nu nog slimmer met de AI-modus.
              </p>
            </dd>
          </dl>
          <dl class="two">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""/></dt>
            <dd>
              <h3>200% Snellere PC</h3>
              <p>
              Optimaliseert automatisch uw RAM-geheugen en beheert uw opstartitems en schijfruimte, voor een tot wel 200% sneller pc.
              </p>
            </dd>
          </dl>
          <dl class="three">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""/></dt>
            <dd>
              <h3>300% Sneller Internet</h3>
              <p>
              Optimaliseert uw browserinstellingen voor een tot wel 300% snellere internetverbinding. 
              </p>
            </dd>
          </dl>
          <dl class="four">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""/></dt>
            <dd>
              <h3>Browser- en Privacybescherming</h3>
              <p>
              Wis sporen van bezochte websites, zodat u niet gevolgd wordt en bescherm uw persoonlijke gegevens tegen programma’s die er toegang toe proberen te krijgen.
              </p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gifts start -->
  <div class="gifts">
    <div class="wrapper">
      <h2>Tijdelijk met Gratis Kerstcadeaus!</h2>
      <div class="gift-list clearfix">
    
        <dl style="margin-left: 160px;">
          <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="IObit Smart Defrag PRO"/></dt>
          <dd>
            <h4>IObit Smart Defrag PRO</h4>
            <p>Houd uw harde schijf en SSD snel en gezond</p>
            <p>Sneller toegang tot uw bestanden</p>
          
          </dd>
        </dl>
        <dl class="lasttwo" style="margin-left: 160px;width: 370px;">
          <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
          <dd>
            <h4>Protected Folder</h4>
            <p>Bescherm uw bestanden met een wachtwoord</p>
            <p>Houd hackers en andere nieuwsgierigen weg bij uw belangrijke bestanden</p>
     
          </dd>
        </dl>
      </div>
      <div class="price">
        <h3>Advanced SystemCare PRO + 2 GRATIS CADEAUS</h3>
        <p>Slechts <strong><small>€</small>17,99</strong> <span>Bespaar €101,94</span></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-asc143pcsdpf1799&ref=nl_asc143pcsdpf1799rightcornerpurchase2011-i-u-l-e<?php echo $refStr;?>&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascrightcornerpurchase2011-nl')">
           Nu Activeren
        </a>
      </div>
    </div>
  </div>
  <!-- gifts end -->

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <h2>Nog meer voordelen van PRO</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <th class="icons"><img src="<?php echo getStaticUrl('images/compare-icon01.png')?>" alt=""/></th>
          <th class="text">Belangrijkste Functies</th>
          <th class="space one"></th>
          <th class="pro"><h3>PRO-versie</h3></th>
          <th class="space two"></th>
          <th class="free"><h3>Gratis versie</h3></th>
          <th class="space three"></th>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></td>
            <td class="text">Basis opschoning, reparatie en optimalisatie van het systeem</td>
            <td class="space one"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space two"></td>
            <td class="free"><i class="all-icons"></i></td>
            <td class="space three"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></td>
            <td class="text">Volledige PC-opschoning en optimalisering met AI-Modus</td>
            <td class="space one"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space two"></td>
            <td class="free"><i class="all-icons gray"></i></td>
            <td class="space three"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></td>
            <td class="text">Grondige Windows register opschoning voorkomt computer crashes</td>
            <td class="space one"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space two"></td>
            <td class="free"><i class="all-icons gray"></i></td>
            <td class="space three"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></td>
            <td class="text">Tot wel 200% snellere opstarttijd</td>
            <td class="space one"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space two"></td>
            <td class="free"><i class="all-icons gray"></i></td>
            <td class="space three"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></td>
            <td class="text">Blokkeer programma’s die toegang tot uw persoonlijke gegevens willen</td>
            <td class="space one"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space two"></td>
            <td class="free"><i class="all-icons gray"></i></td>
            <td class="space three"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></td>
            <td class="text">Tot wel 300% sneller internet met internet booster</td>
            <td class="space one"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space two"></td>
            <td class="free"><i class="all-icons gray"></i></td>
            <td class="space three"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""/></td>
            <td class="text">Dicht beveiligingsgaten in real time</td>
            <td class="space one"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space two"></td>
            <td class="free"><i class="all-icons gray"></i></td>
            <td class="space three"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></td>
            <td class="text">Wist surfsporen om online privacy te garanderen</td>
            <td class="space one"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space two"></td>
            <td class="free"><i class="all-icons gray"></i></td>
            <td class="space three"></td>
          </tr>
          <tr class="last">
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""/></td>
            <td class="text">Gratis 24/7 technische ondersteuning</td>
            <td class="space one"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space two"></td>
            <td class="free"><i class="all-icons gray"></i></td>
            <td class="space three"></td>
          </tr>
        </tbody>
        <tfoot>
          <th class="icons"></th>
          <th class="text"></th>
          <th class="space one"></th>
          <th class="pro"></th>
          <th class="space two"></th>
          <th class="free"></th>
          <th class="space three"></th>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- review start -->
   
     
     <!-- copy14 -->
     <div class="review wrapper">
     <h2>Meer dan <span>2.500.000</span> gebruikers gingen u voor</h2>
     <ul>
      <li><img src="<?php echo getStaticUrl('images/ryan.png')?>" alt="Ryan Hill"> </li>
      <li><img src="<?php echo getStaticUrl('images/lyle.png')?>" alt="Lyle Stelmaschuk"> </li>
      <li class="active"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""> </li>
      <li><img src="<?php echo getStaticUrl('images/brendon.png')?>" alt="Brendon O'Rourke"> </li>
      <li><img src="<?php echo getStaticUrl('images/anthony-baker.png')?>" alt="Anthony Baker"> </li>
    </ul>
    <div class="content">
      <dl>
        <dt>Ryan Hill</dt>
        <dd>"Advanced system care 14 beta is het compleetste alles-in-één systeem dat er is. Ik gebruik het programma al jaren en elk jaar wordt het beter en is de interface nog gemakkelijker. Grondig opschonen is heel makkelijk, in één klik doet het programma alles voor je. Ook alle andere opties zijn super fijn! Zoals de lege mappen vinder, de internet booster en zelfs de gamebooster is top!! Volgens mij is dit de beste opschoonsoftware die er is."</dd>
      </dl>
      <dl>
        <dt>Lyle Stelmaschuk</dt>
        <dd>"Ik heb veel verschillende software aangeschaft om mijn pc sneller te maken en computerproblemen op te lossen. Helaas heeft geen één mijn echt kunnen helpen, totdat ik Advanced System Care 14 probeerde. Ik vind het geweldig dat er zo veel opties zijn en dat het oplossingen voor al mijn problemen biedt. Het is ongelooflijk hoe veel sneller mijn pc is na de eerste keer scannen en repareren. Bij uitstek het beste product dat ik heb kunnen vinden."</dd>
      </dl>
      <dl class="active">
        <dt>Cnet</dt>
        <dd>"Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of online gamen belemmert. Advanced SystemCare heeft als doel om uw computer nieuw leven in te blazen. Niet alleen door het opruimen en verwijderen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."</dd>
      </dl>
        <dl>
        <dt>Brendon O'Rourke</dt>
        <dd>"Ik gebruik ASC al jaren. Recent heb ik de laatste V14 Beta versie geprobeerd. En het is met afstand de volledigste en beste versie die er is. IObit blijft hun producten en technologie constant verbeteren. Met meer opties en gemakkelijkere navigatie vind je snel de juiste oplossing. Ik hoef geen andere software meer te overwegen. "</dd>
      </dl>
      <dl>
        <dt>Anthony Baker</dt>
        <dd>"De functies van Advanced System Care (ASC) 14 zijn geweldig en het programma ziet er netjes, fris en modern uit. Ik heb andere alles-in-één systeemonderhoudsprogramma’s gebruikt, maar geen één was zo effectief als ASC 14. Het programma is eenvoudig in gebruik en zeer intuïtief. De tools maken het programma heel compleet en nadat ik het programma laat draaien is mijn computer duidelijk sneller. Het programma voorkomt het overbodig gebruik van systeembronnen zodat uw computer sneller en efficiënter wordt. Dit product is geweldig en de beste in z’n soort. Als je iets om je laptop of pc geeft, gebruik je Advanced System Care 14!"</dd>
      </dl>
    </div>
    <div class="change">
      <span></span>
      <span></span>
      <span class="active"></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Ook aanbevolen door:</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <h2>Complete optimalisatie en beveiliging met Gratis Cadeaus!</h2>
    <div class="wrapper clearfix">
      <div class="imglist fl">
        <img class="asc" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="" />
        <!-- <img class="iu" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/> -->
        <img class="sd" src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
        <img class="pf" src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/>
        <span class="gift-line"></span>
        <span class="gift-flower"></span>
        <div class="tag"><span>1 Jaar / </span> 3 pc’s + 2 cadeaus</div>
        <b class="gift-font">GRATIS</b>
      </div>
      <div class="changelist fl">
        <div class="changeprice">
          <p class="price"><strong><small>€</small>17,99</strong> <del>€119,93</del></p>
          <!-- <p>0,05€ al giorno</p> -->
        </div>
        <h3>3 voor de prijs van 1!</h3>
      </div>
      <a class="buybtn fr"
         href="https://www.iobit.com/buy.php?product=nl-asc143pcsdpf1799&ref=nl_asc143pcsdpf1799rightcornerpurchase2011-i-u-l-e<?php echo $refStr;?>&refs=nl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascrightcornerpurchase2011-nl')">
         Nu Activeren
      </a>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Opmerkingen:</dt>
      <dd>1*.IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.</dd>
      <dd>2*.Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.</dd>
    </dl>
    <p class="copyright">Copyright ©2005 - 2020 IObit. Alle Rechten Voorbehouden</p>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/jquery.min.js')?>"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>