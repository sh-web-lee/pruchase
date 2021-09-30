<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>85% Kerstkorting op IObit Malware Fighter PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
  <script type="text/javascript">
  		var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
		var paramTo=MApp(2.2).url.getParameters('to');
  </script>
</head>
<body>
  <!-- banner -->
  <div class="banner">
	 <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Tijdelijke Kerstaanbieding</h1>
    <!-- subtitle -->
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <div class="message-box">
			<div class="message-box-sale message-box-sing"><p>-70%</p></div>
			<img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
		</div>
        <p> 1 Jaar, 3 pc’s</p>
        <dl>
          <dd class="clearfix">
            U bespaart : <span class="fr">€58</span>
          </dd>
          <dd class="two">
            <p class="price">€<b>21</b>,99 <del>€79,99</del></p>
          </dd>
          <dd>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-imf83pc2199&ref=nl_imf83pc2199exppurchase2011<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfexppurchase2011-nl');"> <i class="all-icons"></i> Nu bestellen </a>
          </dd>
        </dl>
      </div>

      <!-- imf-85 -->
      <div class="message large fr">
		<div class="countd countdown">
			<div class="countdcnt">
				<strong>00</strong><span>h :</span>
				<strong>00</strong><span>m :</span>
				<strong>30</strong><span>s</span>
			</div>
		</div>
		<div class="message-box">
			<div class="message-box-sale message-box-eaux"><p>-85%</p></div>
			<img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
			<div class="xmas-giveaway"></div>
		</div>
        <p> 1 jaar, 3 pc’s + <del class="messagecad">Cadeaus</del></p>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            U bespaart : <span class="fr largeolsa"><em>€113,89</em></span>
          </dd>
          <dd class="two">
            <p class="price">€<b>19</b>,99 <del class="largeold"><em>€133,88</em></del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=nl-imf83pcsdiu1999&ref=nl_imf83pcsdiu1999exppurchase2011<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfexppurchase2011-nl');"> <i class="all-icons"></i> Nu bestellen</a>
          </dd>
        </dl>
      </div>
    </div>
	</div>
  </div>
  <!-- end banner -->
<div class="xmas-annou"><i class="all-icons"></i>Let op! De cadeaus verlopen binnen 24 uur. Wees er snel bij!</div>
<div class="xmas-payment"></div>
<div class="wrapper xmas-pour">
  <!-- feature -->
  <div class="feature">
    <h2>Waarom kiest u IObit Malware Fighter PRO?</h2>
    <p>Alleen PRO beschermt uw pc eenvoudig tegen meer dan 209 miljoen bedreigingen</p>
  </div>
  <!-- end feature -->

  <!-- intro -->
  <div class="intro">
    <!-- 01 -->
    <dl class="one clearfix">
      <dd>
		<img src="<?php echo getStaticUrl('images/xmas-icon1.png')?>" alt="">  
        <h3>Bitdefender Engine</h3>
        <p>Beschermt tegen meer dan 209 miljoen bedreigingen die uw computer kunnen infecteren en beschadigen.</p>
      </dd>
    </dl>
    <!-- 02 -->
    <dl class="two clearfix">
      <dd>
        <img src="<?php echo getStaticUrl('images/xmas-icon2.png')?>" alt="">
        <h3>Bescherm gevoelige gegevens</h3>
        <p>Vergrendel uw persoonlijke bestanden met een wachtwoord zodat niemand bij uw gegevens komt zonder uw toestemming.</p>
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="three clearfix">
      <dd>
        <img src="<?php echo getStaticUrl('images/xmas-icon3.png')?>" alt="">
        <h3>Anti-ransomware Engine</h3>
        <p>Blokkeer ransomware die uw belangrijke bestanden probeert te vergrendelen en ervoor kan zorgen dat u al uw gegevens kwijt raakt.</p>
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="four clearfix">
      <dd>
        <img src="<?php echo getStaticUrl('images/xmas-icon4.png')?>" alt="">
        <h3>Veiliger Browsen</h3>
        <p>Wis automatisch uw surfsporen bij het sluiten van uw browser zodat niemand meekijkt wat u doet of online koopt.</p>
        </p>
      </dd>
    </dl>
  </div>
   </div>
  <!-- end intro -->
  <!-- comparison start -->
  <div class="comparison">
    <h2>Krijg alle PRO-functies terug voor een volledig<br> beschermde pc</h2>
    <table class="wrapper">
      <thead>
        <tr>
          <th class="itema"><big>Pas op!</big> Momenteel riskeert u …</th>
          <th class="itemb"><big>U kunt ook genieten van…</big></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">
            <span>Virusinfecties</span> die uw systeem beschadigen door de beperkte database
          </td>
          <td class="itemb">
            <span>209.000.000 virus database van Bitdefender</span> beschermt uw pc tegen virussen
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Nieuwe virusvarianten infecteren</span> uw pc omdat ze niet herkend worden
          </td>
          <td class="itemb">
            Geavanceerde Heuristiek gebruikt kennis over bestaande virussen om zelfs <span>de nieuwste varianten te detecteren</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            Ransomware kaapt uw pc en <span>vergrendelt al uw bestanden en gegevens</span>
          </td>
          <td class="itemb">
            Krachtige anti-ransomware engine <span>blokkeert ransomware-aanvallen</span> om uw bestanden veilig te houden
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Uw belangrijkste bestanden worden gestolen</span> of door anderen ingezien
          </td>
          <td class="itemb">
            Zet uw belangrijkste bestanden <span>in de Kluis</span> om te voorkomen dat hackers of andere gebruikers er toegang tot krijgen
          </td>
        </tr>
        <tr>
          <td class="itema">
            Hackers en bedrijven monitoren welke websites u bezoekt en <span>volgen uw online gedrag</span>
          </td>
          <td class="itemb">
            Met anti-tracking <span>verwijdert u uw online sporen</span> en wordt uw privacy niet geschonden
          </td>
        </tr>
        <tr>
          <td class="itema">
            Uw pc wordt <span>geïnfecteerd door een USB-schijf</span>
          </td>
          <td class="itemb">
            USB Schijfbescherming <span>controleert USB-schijven en blokkeert ze</span> als ze schadelijke bestanden bevatten
          </td>
        </tr>
		<tr>
		  <td class="itema">
		    Hackers krijgen <span>toegang tot uw webcam</span> en bespieden u in uw eigen huis
		  </td>
		  <td class="itemb">
		    Camerabescherming garandeert dat <span>niemand toegang tot uw webcam krijgt</span> zonder uw toestemming
		  </td>
		</tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
  
  <!-- offermore start -->
  <div class="offermore clearfix">
    <h2>IObit Malware Fighter 8 PRO kan zelfs<br> nog meer dan uw vorige versie!</h2>
	<div class="offermorecnt">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-01.png')?>" alt=""/></dt>
      <dd>
        <h3>Grotere database</h3>
        <p>Met de 100% grotere malware database worden alle bedreigingen gedetecteerd.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-02.png')?>" alt=""/></dt>
      <dd>
        <h3>Slimmer</h3>
        <p>Met Geavanceerde Heuristiek bent u zelfs beschermd tegen nieuwe virusvarianten.</p>
      </dd>
    </dl>
	<dl>
	  <dt><img src="<?php echo getStaticUrl('images/offermore-03.png')?>" alt=""/></dt>
	  <dd>
	    <h3>Sneller</h3>
	    <p>Scant uw pc 50% sneller zodat u een hoop tijd bespaart.</p>
	  </dd>
	</dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-04.png')?>" alt=""/></dt>
      <dd>
        <h3>Veilig E-mailen</h3>
        <p>IObit Malware Fighter beschermt nu ook uw e-mail tegen spam, phishing en schadelijke links.</p>
      </dd>
    </dl>
  </div>
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
            "We gebruikten tientallen verschillende programma's om onze systemen soepel te laten lopen en te beveiligen. Het duurde elke week uren om alle programma’s te laten lopen. Met IObit Malware Fighter PRO en Advanced SystemCare PRO, hebben we eindelijk alles wat we nodig hebben op één plek en is het scannen een fluitje van een cent. We hebben geen problemen meer gehad sinds we jullie producten gebruiken!”
          </p>
        </div>
        <div>
          <h4>David Cassidy</h4>
          <p>
            "Ik wil al het personeel van IObit hartelijk bedanken voor het harde werk dat zij leveren om de beste programma’s uit te kunnen brengen. Het is een geweldige update die jullie hebben gemaakt. Het scannen gaat een stuk sneller and het is gebruiksvriendelijk. Iedereen die een goed anti-malware en anti-virus programma wil dat het geld ruimschoots waard is, hoeft niet verder te zoeken dan IObit Malware Fighter. Ik zou aanraden andere opties te vergeten en voor de beste optie te gaan: IObit Malware Fighter."
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
        <dd>* De gegevens kunnen variëren op basis van verschillende systemen en computers.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
    </div>
  </div>
  <!-- end footer -->

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
      <p><strong>€19,99</strong> <del>€133,88</del></p>
      <a class="buybtn large"
         href="https://www.iobit.com/buy.php?product=nl-imf83pcsdiu1999&ref=nl_imf83pcsdiu1999exppurchase2011<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfexppurchase2011-nl')">
        <i class="all-icons"></i> Krijg Nu PRO terug!
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script>var _imgsrc = "<?php echo getStaticUrl('images/xmas-imfbox.png')?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>