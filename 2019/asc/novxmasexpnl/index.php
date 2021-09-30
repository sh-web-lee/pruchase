<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$buyNum = ceil(microtimeFloat() * 1000 / 20000) - 76400174;
$buyNum = number_format($buyNum);
$refStr='';
if(in_array($_GET['pop'],array('xr_asce'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>85% Kerstkorting op Advanced SystemCare PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>
<!--banner-->
<div class="banner">
  <div class="snow"></div>
  <div class="wrapper">
    <a href="https://www.iobit.com/nl/index.php" target="_blank" class="logo">IObit</a>
    <h1>Speciale Kerstaanbieding</h1>
    <h2>Tijdelijke aanbieding
      <div class="date"><span>nog maar</span> <strong>00</strong> uur <strong>55</strong> min <strong>55</strong> sec <strong>55</strong> ms</div>
    </h2>

    <div class="one-pc-box">
      <h2>35% Korting</h2>
      <div class="img-box clearfix">
        <img src="<?php echo $pResUrl; ?>images/asc-one-box.png" alt="">
        <div class="price">
          <strong>€<b>18</b>,99</strong>
          <del>€29,99</del>
        </div>
      </div>
      <a href="https://www.iobit.com/buy.php?product=nl-asc131pc1899&ref=nl_asc131pc1899purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911exp-nl')" class="button border"
      >Activeer Nu!</a>
    </div>
    <div class="packs">
      <h2>35% Korting</h2>
      <div class="img-box clearfix">
        <span class="box"></span>
        <div class="price">
          <strong>€<b>17</b>,99</strong>
          <del>€119,93</del>
        </div>
      </div>
      <a href="https://www.iobit.com/buy.php?product=nl-asc133pcsdpf1799&ref=nl_asc133pcsdpf1799purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911exp-nl')"
         class="button"
      >Activeer Nu!</a>
    </div>
    <div class="one-pc-box three-pcs">
      <h2>35% Korting</h2>
      <div class="img-box clearfix">
        <span class="box"></span>
        <div class="price">
          <strong>€<b>19</b>,99</strong>
          <del>€49,99</del>
        </div>
      </div>
      <a href="https://www.iobit.com/buy.php?product=nl-asc131y3pc1999&ref=nl_asc133pc1999purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911exp-nl')"
         class="button border"
      >Activeer Nu!</a>
    </div>
  </div>
</div>
<!--banner-->

<!--payments-->
<div class="payments">
  <div class="wrapper">
    <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
  </div>
</div>
<!--payments-->

<!-- benfits -->
<div class="benfits">
  <div class="wrapper">
    <h2><span>Haal deze feestdagen het maximale uit uw pc!</span></h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li></li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
          </div>
        </li>
        <li class="fun5">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
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
    <div class="detail-list">
      <dl>
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>100% BESCHERMING</h3>
          <p>Beschermt uw privacy en data tegen toegang van buitenaf. Beschermt uw privacy twee keer zo goed* als de gratis versie.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>200%* SNELLER SYSTEEM</h3>
          <p>Ruimt onnodige bestanden op en optimaliseert CPU en RAM voor een sneller systeem. Maakt uw systeem tot 200% sneller dan de gratis versie.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>300%* SNELLER INTERNET</h3>
          <p>Downloads, online games, internetpagina’s en YouTube video’s worden tot 300% sneller dan met de gratis versie.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>MEER VRIJE SCHIJFRUIMTE</h3>
          <p>Ruimt overbodige bestanden, ongeldige snelkoppelingen, registeritems en onvoltooide downloadbestanden volledig op.</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end benfits -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h2>Laat uw computer niet vertragen door ophoping van overbodige bestanden</h2>
  <table>
    <thead>
    <tr>
      <th class="itema"><big>Problemen</big> waar u tegenaan kunt lopen:</th>
      <th class="itemb"><big>Oplossingen</big> die u terug kunt krijgen:</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="itema">
        Instabiel systeem kan <span>crashes</span> veroorzaken
      </td>
      <td class="itemb">
        <span>Grondige</span> registeropschoning om systeemfouten op te lossen en te voorkomen
      </td>
    </tr>
    <tr>
      <td class="itema">
        Handmatige optimalisatie garandeert <span>niet</span> dat uw systeem altijd snel en soepel werkt
      </td>
      <td class="itemb">
        <span>Automatisch RAM opschonen</span> houdt uw pc snel en soepel
      </td>
    </tr>
    <tr>
      <td class="itema">
        <span>Onvolledige</span> schijfoptimalisatie beperkt de prestaties
      </td>
      <td class="itemb">
        Schijfoptimalisatie geeft uw schijf de maximale <span>snelheid</span> en prestaties
      </td>
    </tr>
    <tr>
      <td class="itema">
        <span>Trage & instabiele</span> internetverbinding
      </td>
      <td class="itemb">
        Maak uw internetverbinding tot wel <span>300%* sneller</span>
      </td>
    </tr>
    <tr>
      <td class="itema">
        <span>Matige</span> optimalisering van de opstartsnelheid
      </td>
      <td class="itemb">
        Start uw computer tot wel <span>200%* sneller</span> op
      </td>
    </tr>
    <tr class="float-beacon">
      <td class="itema">
        Basale bescherming kan <span>niet garanderen</span> dat uw privacy volledig beschermd is
      </td>
      <td class="itemb">
        Persoonlijke gegevensbescherming levert <span>volledige bescherming</span> van uw privacy
      </td>
    </tr>
    <tr>
      <td class="itema">
        Nieuwe spyware kan uw systeem <span>infecteren en beschadigen</span>
      </td>
      <td class="itemb">
        Realtime bescherming <span>blokkeert spyware infecties</span>
      </td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper clearfix">
    <h2>Het Nieuwe Advanced SystemCare 13 kan <br> nog veel meer dan u dacht!</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png') ?>" alt="" /></dt>
      <dd>
        <h3>Schoner</h3>
        <p>Detecteert en verwijdert tot <b>4GB*</b> meer overbodige bestanden </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png') ?>" alt="" /></dt>
      <dd>
        <h3>Compleet</h3>
        <p>Wist privacysporen van meer dan <b>200</b> programma’s en <b>15</b> browsers voor alle gebruikersaccounts</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png') ?>" alt="" /></dt>
      <dd>
        <h3>Veiliger</h3>
        <p><b>Bescherm e-mail</b> tegen bedreigingen zoals spam en phishing</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png') ?>" alt="" /></dt>
      <dd>
        <h3>Groter</h3>
        <p>Grotere database om <b>60%</b> meer software te updaten</p>
      </dd>
    </dl>
  </div>
</div>
<!-- intro end -->

<!-- review -->
<div class="review wrapper">
  <h2>WE DOEN ER ALLES AAN OM ONZE KLANTEN WAAR OOK TER WERELD, <br> TEVREDEN TE MAKEN!</h2>
  <div class="container">
    <h3>&nbsp;</h3>
    <ul>
      <li class="one"><img src="<?php echo getStaticUrl('images/siegfried-van-hoek.png') ?>" alt="Siegfried van Hoek"></li>
      <li class="two"><img src="<?php echo getStaticUrl('images/cnet.png') ?>" alt="Cnet"></li>
      <li class="three"><img src="<?php echo getStaticUrl('images/richard-beavers.png') ?>" alt="Richard Beavers"></li>
      <li class="four"><img src="<?php echo getStaticUrl('images/patsy-clark.png') ?>" alt="Patsy Clark"></li>
      <li class="five"><img src="<?php echo getStaticUrl('images/rej-visschers-bernabela.png') ?>" alt="R.E.J Visschers-Bernabela"></li>
    </ul>
    <div class="details">
      <div>
        <h4>Siegfried van Hoek</h4>
        <p>"Mijn favoriete tool aller-tijden de Ontbrekende Updates en Systeem Zwakheden Zoek-tool was echt heel alert, alleen daarom al adviseer ik alle vrienden die ik help
          altijd Iobit Sytemcare. Met versie 13 was het alsof ik een oude vriend terug ontmoette met een enthousisme net als toen ik ooit begon met Iobit Systemcare nr. 5. Welkom
          Iobit Sytemcare 13!"</p>
      </div>
      <div class="active">
        <h4>Cnet</h4>
        <p>“Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of online gamen belemmert. Advanced SystemCare blaast nieuw leven in uw computer. Niet
          alleen door het opruimen en verwijderen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de
          pc-prestaties te verbeteren."</p>
      </div>
      <div>
        <h4>Richard Beavers</h4>
        <p>“Ik heb over de jaren verschillende programma’s geprobeerd die computers probleemloos zouden doen werken. Een paar jaar geleden ben ik bij ASC uitgekomen en merkte dat
          ik eindelijk van alle computerproblemen af was. Advanced SystemCare Pro is de enige die ik anderen zou aanbevelen, gebaseerd op mijn ervaring.”</p>
      </div>
      <div>
        <h4>Patsy Clark</h4>
        <p>“Advanced System Care is een geweldig programma. Ik gebruik het al jaren en het werkt fantastisch. Ze verbeteren hun producten continu en het wordt alleen maar beter
          over de jaren. Ik gebruik meerdere IObit producten en ze werken allemaal volledig naar behoren.”</p>
      </div>
      <div>
        <h4>R.E.J Visschers-Bernabela</h4>
        <p>“Ik heb Advanced SystemCare 12 en de 13 beta, gedownload en uitgebreid getest (win 7). De uitstraling is mooi en overzichtelijk. De nieuwe functies zijn super.”</p>
      </div>
    </div>
    <a class="next" href="javascript: nextFun();"></a>
    <a class="prev" href="javascript: prevFun();"></a>
  </div>
</div>
<!-- end review -->

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
      <div class="numbox">
        <p>Nog maar</p>
        <div id="flip1" class="flipNum">
          <div class="listbox">0</div>
          <div class="listbox">0</div>
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
      <a class="buybtn btn-mid-lag"
         href="https://www.iobit.com/buy.php?product=nl-asc133pcsdpf1799&ref=nl_asc133pcsdpf1799purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911exp-nl')">
        Krijg Nu PRO terug!
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script type="text/javascript">
var refStr = '<?php echo $refStr;?>';
</script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>
