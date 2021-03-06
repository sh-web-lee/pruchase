<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf','xr_imfe'))){
  $refStr.='-'.$_GET['pop'];
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>85% Kerstkorting op IObit Malware Fighter PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- container -->
<div class="container">
  <!-- tree -->
  <div class="tree wrapper">
    <span class="tree-l"></span>
    <span class="tree-r"></span>
  </div>
  <!-- end tree -->

  <!-- star -->
  <div class="star wrapper">
    <span class="star-l"></span>
    <span class="star-r"></span>
  </div>
  <!-- end star -->

  <!-- spree -->
  <div class="spree wrapper">
    <div class="spree-box">
      <p id="spreecount" class="countdown">
        Nog maar
        <strong style="display: none">00</strong>
        <strong>00</strong>min
        <strong>30</strong>sec
      </p>
      <a class="spree-buy"
         href="https://www.iobit.com/buy.php?product=nl-imf73pcpfamc1999&ref=nl_imf73pcpfamc1999purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1911exp-nl')">
      </a>
    </div>
  </div>
  <!-- end spree -->
</div>
<!-- end container -->

<!-- main -->
<div class="main wrapper">

  <!-- banner -->
  <div class="banner">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Speciale Kerstaanbieding</h1>
    <!-- subtitle -->
    <p>De Beste Aanbieding van het Jaar! Mis ???m niet</p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-55.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 Jaar, 1 PC</p>
        <dl>
          <dd class="clearfix">
            Korting: <span class="fr">???19,96</span>
          </dd>
          <dd class="two">
            <p class="price"><small>???</small><b>19</b> <del>???39,95</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nl-imf71pc1999&ref=nl_imf71pc1999purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1911exp-nl')"
               data-num="2">
              <i class="all-icons"></i> Bestel Nu
            </a>
          </dd>
        </dl>  
      </div>

      <!-- imf-85 -->
      <div class="message large fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-85.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 Jaar, 3 PC???s</p>
        <!-- progress -->
        <div class="progress clearfix">
          <div class="progressbar fl clearfix">
            <p class="fr"></p>
          </div>
          <p id="bancount" class="countdown fl">
            <strong>00</strong>uur
            <strong>00</strong>min
            <strong>30</strong>sec
          </p>
        </div>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            Korting: <span class="fr">???117,94</span>
          </dd>
          <dd class="two">
            <p class="price red"><small>???</small><b>19</b> <del>???139,93</del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=nl-imf73pcpfamc1999&ref=nl_imf73pcpfamc1999purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1911exp-nl')"
               data-num="0">
              <i class="all-icons"></i> Bestel Nu
            </a>
            <p class="note"><i class="all-icons"></i><b class="viewNum">4.006.553</b> mensen kozen PRO!</p>
          </dd>
        </dl>
      </div>

      <!-- imf-70 -->
      <div class="message small fr">
        <img class="box" src="<?php echo getStaticUrl('images/imf-70.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 Jaar, 3 PC???s</p>
        <dl>
          <dd class="clearfix">
            Korting: <span class="fr">???58,00</span>
          </dd>
          <dd class="two">
            <p class="price"><small>???</small><b>21</b> <del>???79,99</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nl-imf73pc2199&ref=nl_imf73pc2199purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1911exp-nl')"
               data-num="1">
              <i class="all-icons"></i> Bestel Nu
            </a>
          </dd>
        </dl>
      </div>

    </div>
    <!-- payment -->
    <img class="payment" src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
  </div>
  <!-- end banner -->

  <!-- feature -->
  <div class="feature">
    <!-- ball -->
    <div class="ball">
      <span>1</span>
    </div>
    <!-- title -->
    <h2>Profiteer van de Bitdefender<br> bescherming voor superieure cyberbeveiling!</h2>
    <p>
      Met de anti-virus en anti-malware engines van Bitdefender, worden <span>meer dan 203 miljoen</span> nieuwe bedreigingen,<br> zoals adware, virussen, malware en spyware gemakkelijk van uw pc geweerd. 
    </p>
    <img src="<?php echo getStaticUrl('images/feature-icons.png')?>" alt="">
  </div>
  <!-- end feature -->

  <!-- intro -->
  <div class="intro">
    <!-- ball -->
    <div class="ball">
      <span>2</span>
    </div>
    <!-- title -->
    <h2>Bovendien profiteert u van:</h2>
    <img src="<?php echo getStaticUrl('images/intro-adorn.png')?>" alt="">
    <!-- 01 -->
    <dl class="one clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Anti-ransomeware engine</h3>
        <p>
          Nooit meer zorgen over hackers die uw<br> computer binnendringen en uw belangrijke<br> bestanden vergrendelen.
        </p>
      </dd>
    </dl>
    <!-- 02 -->
    <dl class="two clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Veilig Online Surfen</h3>
        <p>
          Verwijdert automatisch cookies en surfsporen<br> zodat niemand mee kan kijken naar wat u<br> online bekijkt, leest en koopt.
        </p>
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="three clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Camerabescherming</h3>
        <p>
          Elke toegangspoging tot uw webcam wordt<br> alleen toegelaten als u toestemming geeft,<br> zodat u niet meer bespied wordt.
        </p>
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="four clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon04.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Wachtwoordbescherming voor uw Bestanden</h3>
        <p>
          Vergrendel uw belangrijke bestanden met<br> een wachtwoord zodat niemand bij uw<br> gevoelige gegevens kan komen.
        </p>
      </dd>
    </dl>
  </div>
  <!-- end intro -->

  <!-- comparison start -->
  <div class="comparison">
    <h2>Verlies uw complete bescherming<br> niet en verlos uzelf van beveiligingsproblemen!</h2>
    <table>
      <thead>
        <tr>
          <th class="itema"><big>Beveiligingsproblemen</big> waar u last van kunt hebben:</th>
          <th class="itemb"><big>Beschermingen</big> die u terug kunt krijgen:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">
            <span>Krimpende database</span> beschermt niet tegen zeldzame en recente virussen
          </td>
          <td class="itemb">
            Bitdefender & IObit anti-virus engines bieden u <span>dubbele bescherming</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            Uw belangrijke bestanden kunnen vergrendeld worden door <span>Ransomware</span> 
          </td>
          <td class="itemb">
            <span>Anti-ransomware engine</span> beveiligt uw bestanden tegen vergrendeling door Ransomware
          </td>
        </tr>
        <tr>
          <td class="itema">
            Persoonlijke bestanden en privacygevoelige informatie kunnen <span>uitlekken</span> als de computer wordt aangevallen 
          </td>
          <td class="itemb">
            <span>De Kluis</span> biedt een extra beschermingslaag om belangrijke bestanden te beschermen tegen indringers
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Beperkte bescherming</span> tegen misbruik van privacysporen die u achterlaat
          </td>
          <td class="itemb">
            <span>Anti-tracking</span> wist automatisch uw online privacysporen
          </td>
        </tr>
        <tr>
          <td class="itema">
            Programma???s kunnen <span>stiekem uw camera gebruiken</span>
          </td>
          <td class="itemb">
            <span>Camera Guard</span> blokkeert ongewenste toegang tot uw camera
          </td>
        </tr>
        <tr>
          <td class="itema">
            Word <span>niet automatisch voorzien</span> van de nieuwste beveiligingstechnieken
          </td>
          <td class="itemb">
            <span>Automatisch updaten</span> voorziet u van bescherming tegen de laatste bedreigingen
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- offermore start -->
  <div class="offermore clearfix">
    <h2>Het nieuwste IObit Malware Fighter 7<br> kan nog veel meer dan u dacht!</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-01.png')?>" alt=""/></dt>
      <dd>
        <span><em>Verbeterd</em></span>
        <h3>60% Grotere</h3>
        <p>Malware Database</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-02.png')?>" alt=""/></dt>
      <dd>
        <span class="nuovo"><em>Nieuw</em></span>
        <h3>WACHTWOORD-BESCHERMING</h3>
        <p>Voor Persoonlijke Gegevens</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/offermore-03.png')?>" alt=""/></dt>
      <dd>
        <span><em>Verbeterd</em></span>
        <h3>300% SNELLER</h3>
        <p>Bedreigingen Scannen</p>
      </dd>
    </dl>
  </div>
  <!-- offermore end -->

  <!-- review -->
  <div class="review">
    <h2 class="on">WE DOEN ER ALLES AAN OM ONZE KLANTEN<br> WAAR OOK TER WERELD, TEVREDEN TE MAKEN!</h2>
    <div class="content">
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></li>
        <li class="five"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></li>
      </ul>
      <div class="details">
        <div>
          <h4>Peter Stoffers</h4>
          <p>
            "Enkele jaren geleden heeft een vriend mij getipt over IObit Malware Fighter. In het begin was ik sceptisch, maar na het installeren werd het direct mijn favoriete anti-malware programma. Het is zeer eenvoudig te gebruiken. In de afgelopen jaren heeft het al verschillende bedreigingen gedetecteerd en verwijderd. In samenwerking met andere IObit programma's, bijvoorbeeld ASC, biedt het een zeer goede bescherming van mijn PC. Ik heb nu al meerdere programma's van IObit aan al mijn vrienden en familie aangeraden."
          </p>
        </div>
        <div class="active">
          <h4>Software.Informer</h4>
          <p>
            "Het programma gebruikt twee engines, de eigen en de Bitdefender engine, en blijkt effectief tegen malware die vergelijkbare tools niet kunnen vinden. Het is daarom goed om deze naast eventuele eigen anti-virussoftware te draaien. Het kan een brede selectie spyware, ransomware, adware, Trojans, wormen, keyloggers en bots detecteren."
          </p>
        </div>
        <div>
          <h4>Bob Bassett</h4>
          <p>
            "We gebruikten tientallen verschillende programma's om onze systemen soepel te laten lopen en te beveiligen. Het duurde elke week uren om alle programma???s te laten lopen. Met IObit Malware Fighter PRO en Advanced SystemCare PRO, hebben we eindelijk alles wat we nodig hebben op ????n plek en is het scannen een fluitje van een cent. We hebben geen problemen meer gehad sinds we jullie producten gebruiken!???
          </p>
        </div>
        <div>
          <h4>David Cassidy</h4>
          <p>
            "Ik wil al het personeel van IObit hartelijk bedanken voor het harde werk dat zij leveren om de beste programma???s uit te kunnen brengen. Het is een geweldige update die jullie hebben gemaakt. Het scannen gaat een stuk sneller and het is gebruiksvriendelijk. Iedereen die een goed anti-malware en anti-virus programma wil dat het geld ruimschoots waard is, hoeft niet verder te zoeken dan IObit Malware Fighter. Ik zou aanraden andere opties te vergeten en voor de beste optie te gaan: IObit Malware Fighter."
          </p>
        </div>
        <div>
          <h4>Gelu Batir</h4>
          <p>
            "Ik ben zeer tevreden met jullie product IObit Malware Fighter. Voordat ik dit product had, had ik veel last van ongewenste verstoringen. Ik kon geen hele film of concert kijken, waar ik erg van houd. Dankzij jullie product verloopt alles nu soepel, veilig en met een goede bescherming. Het programma scant mijn laptop zonder dat het de prestaties beperkt. Ik heb dit product ook aanbevolen aan twee vrienden."
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- end review -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>
          <h3>Garantie</h3>
          <p>60 Dagen niet-goed-geld-teruggarantie</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dt>
        <dd>
          <h3>Website beveiliging</h3>
          <p>Alle websites van IObit zijn beveiligd</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt=""/></dt>
        <dd>
          <h3>24/7 gratis klantenservice</h3>
          <p>IObit biedt gratis 24/7<br> klantenservice voor PRO gebruikers</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Let op:</dt>
        <dd>*Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen goeddunken</dd>
        <dd>* De gegevens kunnen vari??ren op basis van verschillende systemen en computers.</dd>
      </dl>
      <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
    </div>
  </div>
  <!-- end footer -->

</div>
<!-- end main -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/imf-gift-box.png')?>" alt=""/></div>
    <div class="center fl">
      <h2>Exclusieve Kerstaanbieding!</h2>
      <p id="floatcount" class="countdown">
        <span>Nog maar</span>
        <strong>00</strong> uur
        <strong>00</strong> min
        <strong>30</strong> sec
      </p>
    </div>
    <div class="price fr">
      <p><strong>???19,99</strong> <del>???139,93</del></p>
      <a class="buybtn large"
         href="https://www.iobit.com/buy.php?product=nl-imf73pcpfamc1999&ref=nl_imf73pcpfamc1999purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1911exp-nl')"
         data-num="0">
        <i class="all-icons"></i> Krijg Nu PRO terug!
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script>var _imgsrc = "<?php echo getStaticUrl('images/imf-box.png')?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>