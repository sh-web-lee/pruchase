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
        <!-- <div class="date countdown"><span>nog maar</span> <strong>00</strong> uur <strong>05</strong> min <strong>27</strong> sec <strong>43</strong> ms</div> -->
          <div class="countdown"><span>Nog maar</span><b>00</b>m<b>00</b>s<b>00</b>ms</div>

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
               href="https://www.iobit.com/buy.php?product=nl-asc143pcsdpf1799&ref=nl_asc143pcsdpf1799exppurchase2011-i-u-l-e<?php echo $refStr;?>&refs=nl_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascexppurchase2011-nl')">
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
               href="https://www.iobit.com/buy.php?product=nl-asc141y3pc1999&ref=nl_asc143pc1999exppurchase2011-i-u-l-e<?php echo $refStr;?>&refs=nl_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascexppurchase2011-nl')">
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
  <div class="serviceone">
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
  <div class="comparison wrapper">
  <h2>Krijg alle PRO-functies terug om uw<br/> pc-problemen te verhelpen</h2>
  <table>
    <thead>
    <tr>
      <th class="itema itemabg"><big>Pas op!</big> Momenteel riskeert u …</th>
      <th class="itemb itembg"><big>U</big> kunt ook genieten van…</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="itema">

      Uw pc <span>reageert traag</span> en laat u lang wachten
      </td>
      <td class="itemb">
      Complete systeemopschoning voor de <span>snelste PC</span>
      </td>
    </tr>
    <tr>
      <td class="itema">
        
      Instabiele internetverbinding en <span>lange laadtijden van websites</span> 
      </td>
      <td class="itemb">
      Browseroptimalisatie voor tot wel <span>300% snellere internetverbinding</span> 
      </td>
    </tr>
    <tr>
      <td class="itema">
      Instabiel systeem dat regelmatig <span>crasht of bevriest</span>
      </td>
      <td class="itemb">
      Grondige registeropschoning voor het <span>stabielste systeem</span>
      </td>
    </tr>
    <tr>
      <td class="itema">
        <span>Wachten</span> tot uw pc opgestart is
      </td>
      <td class="itemb">
      Maximale opstartversnelling om <span>nooit meer te hoeven wachten</span>
      </td>
    </tr>
    <tr>
      <td class="itema">
      Programma’s hebben toegang tot <span>uw persoonlijke bestanden</span>
      </td>
      <td class="itemb">
        <span>Volledige privacybescherming</span> die niet-vertrouwde programma’s blokkeert
      </td>
    </tr>
    <tr class="float-beacon">
      <td class="itema">
      Zware software laat uw pc <span>vastlopen</span>
      </td>
      <td class="itemb">
      Schoont automatisch RAM op zodat uw computer constant <span>soepel draait</span>
      </td>
    </tr>
    <tr>
      <td class="itema">
      Spyware kan uw pc binnendringen en <span>uw gegevens stelen</span>
      </td>
      <td class="itemb">
         <span>Realtime bescherming</span> houdt spyware en andere malware uit uw pc
      </td>
    </tr>
    </tbody>
  </table>
</div>
  <!-- gifts end -->

  <!-- comparison start -->
  <div class="intro">
  <div class="wrapper clearfix">
    <h2>Advanced SystemCare 14 PRO<br/> kan zelfs nog meer dan uw vorige versie!</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png') ?>" alt="" /></dt>
      <dd>
        <h3>AI</h3>
        <p>De nieuwe AI-modus optimaliseert uw pc volledig op basis van wat uw systeem nodig heeft</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png') ?>" alt="" /></dt>
      <dd>
        <h3>Schoner</h3>
        <p>Verwijdert <b>50%</b> meer ongewenste bestanden voor het schoonste systeem</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png') ?>" alt="" /></dt>
      <dd>
        <h3>Sneller</h3>
        <p>Laat uw pc tot wel dubbel zo snel opstarten als de vorige versie</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png') ?>" alt="" /></dt>
      <dd>
        <h3>Up-to-date</h3>
        <p>Houdt <b>33%</b> meer belangrijke software up-to-date zodat hackers geen zwakheden kunnen misbruiken</p>
      </dd>
    </dl>
  </div>
</div>
  <!-- comparison end -->

  <!-- review start -->

  <div class="review wrapper">
  <h2>Meer dan <span>2.500.000</span> gebruikers gingen u voor</h2>
  <div class="container">
    <h3>&nbsp;</h3>
    <ul>
      <li class="one"><img src="<?php echo getStaticUrl('images/lyle.png') ?>" alt="Lyle Stelmaschuk"></li>
      <li class="two"><img src="<?php echo getStaticUrl('images/cnet.png') ?>" alt="Cnet"></li>
      <li class="three"><img src="<?php echo getStaticUrl('images/brendon-o-rourke.png') ?>" alt="brendon-o-rourke"></li>
      <li class="four"><img src="<?php echo getStaticUrl('images/anthony-baker.png') ?>" alt="anthony-baker"></li>
      <li class="five"><img src="<?php echo getStaticUrl('images/ryan.png') ?>" alt="Lyle Stelmaschuk"></li>
    </ul>
    <div class="details">
      <div>
        <h4>Lyle Stelmaschuk</h4>
        <p>"Ik heb veel verschillende software aangeschaft om mijn pc sneller te maken en computerproblemen op te lossen. Helaas heeft geen één mijn echt kunnen helpen, totdat ik Advanced System Care 14 probeerde. Ik vind het geweldig dat er zo veel opties zijn en dat het oplossingen voor al mijn problemen biedt. Het is ongelooflijk hoe veel sneller mijn pc is na de eerste keer scannen en repareren. Bij uitstek het beste product dat ik heb kunnen vinden."</p>
      </div>
      <div class="actived">
        <h4>Cnet</h4>
        <p>“Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of online gamen belemmert. Advanced SystemCare heeft als doel om uw computer nieuw leven in te blazen. Niet alleen door het opruimen en verwijderen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."</p>
      </div>
      <div>
        <h4>Brendon O'Rourke</h4>
        <p>“Ik gebruik ASC al jaren. Recent heb ik de laatste V14 Beta versie geprobeerd. En het is met afstand de volledigste en beste versie die er is. IObit blijft hun producten en technologie constant verbeteren. Met meer opties en gemakkelijkere navigatie vind je snel de juiste oplossing. Ik hoef geen andere software meer te overwegen.”</p>
      </div>
      <div>
        <h4>Anthony Baker</h4>
        <p>“De functies van Advanced System Care (ASC) 14 zijn geweldig en het programma ziet er netjes, fris en modern uit. Ik heb andere alles-in-één systeemonderhoudsprogramma’s gebruikt, maar geen één was zo effectief als ASC 14. Nadat ik het programma laat draaien is mijn computer duidelijk sneller. Als je iets om je laptop of pc geeft, gebruik je Advanced System Care 14!”</p>
      </div>
      <div>
        <h4>Ryan Hill</h4>
        <p>“
        Advanced system care 14 beta is het compleetste alles-in-één systeem dat er is. Ik gebruik het programma al jaren en elk jaar wordt het beter en is de interface nog gemakkelijker. Grondig opschonen is heel makkelijk, in één klik doet het programma alles voor je. Ook alle andere opties zijn super fijn! Zoals de lege mappen vinder, de internet booster en zelfs de gamebooster is top!! Volgens mij is dit de beste opschoonsoftware die er is.”</p>
      </div>
    </div>
    <a class="next" onclick="nextFun()"></a>
    <a class="prev" onclick="prevFun()"></a>
  </div>
</div>
  <!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Wereldwijd Bekroond door de Media</h2>
    <p>Dankzij de waardering van vooraanstaande media over de hele wereld, weet u dat het goed zit!</p>
    <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
  </div>
</div>
<!-- awards end -->

<!-- service  -->
<div class="service clearfix">
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

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl">
      <div class="box"></div>
    </div>
    <div class="center fl">
      <h2>Exclusieve Kerstaanbieding!</h2>
      <!-- <div class="countdown02"><span>Nog maar</span><b>15</b>m<b>24</b>s<b>00</b>ms</div> -->
      <div class="numbox numbox02">
        <p>Nog maar</p>
        <div id="flip1" class="flipNum">
          <div class="listbox">1</div>
          <div class="listbox">5</div>
        </div>
        <p>min</p>
        <div id="flip2" class="flipNum">
          <div class="listbox">0</div>
          <div class="listbox">0</div>
        </div>
        <p>sec</p>
        <div id="flip3" class="flipNum">
          <div class="listbox">0</div>
          <div class="listbox">0</div>
        </div>
        <p>ms</p>
      </div>
    </div>
    <div class="price fr">
      <p><strong>€17,99</strong>&nbsp;&nbsp;<del>€119,93</del>
      </p>
      <a class=" botbtn btn-mid-lag buybtn02"
         href="https://www.iobit.com/buy.php?product=nl-asc143pcsdpf1799&ref=nl_asc143pcsdpf1799exppurchase2011-i-u-l-e<?php echo $refStr;?>&refs=nl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascexppurchase2011-nl')">
         Nu Activeren
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

  <script src="<?php echo getStaticUrl('script/jquery.min.js')?>"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>