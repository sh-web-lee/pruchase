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
  <title>80% Kerstkorting op IObit Malware Fighter PRO</title>
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
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-imf83pc2199&ref=nl_imf83pc2199purchase2011<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2011-nl');"> <i class="all-icons"></i> Nu bestellen </a>
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
			<div class="message-box-sale message-box-eaux"><p>-80%</p></div>
			<img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
			<div class="xmas-giveaway"></div>
		</div>
        <p> 1 jaar, 3 pc’s + <del class="messagecad">Cadeaus</del></p>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            U bespaart : <span class="fr largeolsa"><em>€111,89</em></span>
          </dd>
          <dd class="two">
            <p class="price">€<b>21</b>,99 <del class="largeold"><em>€133,88</em></del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=nl-imf83pcsdiu2199&ref=nl_imf83pcsdiu2199purchase2011<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2011-nl');"> <i class="all-icons"></i> Nu bestellen</a>
            <!-- <p class="note"><i class="all-icons"></i><b class="viewNum">4,006,553</b> personnes l'ont acheté!</p> -->
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
  <!-- end intro -->
</div>
  <!-- gifts -->
  <div class="gifts">
    <div class="wrapper gifts-cont">
		<h2>Tijdelijk twee handige tools als Gratis Kerstcadeaus!</h2>
		<p>Beperkt beschikbaar. Mis het niet!</p>
		<div class="gifts-giveway gifts-giveway1">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>IObit Uninstaller 10 PRO <b>€0</b> <del>€23,90</del> <span>(1 jaar/1 pc)</span></h4>
				<ul>
					<li>Verwijder software grondig zonder restanten achter te laten op uw computer.</li>
					<li>Verwijder zelfs de hardnekkigste programma’s die niet op andere manieren te verwijderen zijn.</li>
				</ul>
			</div>
		</div>
		<div class="gifts-giveway gifts-giveway2">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>Smart Defrag 6 PRO <b>€0</b> <del>€29,99</del> <span>(1 jaar/1 pc)</span></h4>
				<ul>
					<li>Defragmenteer uw harde schijf zodat u sneller bij uw bestanden kunt en uw schijf in goede conditie blijft.</li>
					<li>Trim uw SSDs voor de beste prestaties en de ultieme onderhoud.</li>
				</ul>
			</div>
		</div>
	</div>
  </div>
  <!-- end gifts -->
<div class="gifts-store">
	<div class="gifts-store-arrow"></div>
	<a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-imf83pcsdiu2199&ref=nl_imf83pcsdiu2199purchase2011<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2011-nl');"> <i class="all-icons"></i>BESTEL NU EN KRIJG CADEAUS</a>
	</dd>
</div>
  <!-- comparison -->
  <div class="comparison">
    <!-- title -->
    <h2>De PRO-versie biedt u volledige bescherming!</h2>
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th class="item-a"><p>Uw huidige versie</p></th>
          <th class="item-b"></th>
          <th class="item-c"><p>IObit Malware Fighter 8 PRO</p></th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="item-a">9 miljoen</td>
          <td class="item-b">Anti-malware database</td>
          <td class="item-c">Meer dan 209 miljoen</td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niet beschikbaar</td>
          <td class="item-b">Bitdefender Anti-malware Engine</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niet beschikbaar</td>
          <td class="item-b">Anti-ransomware Engine</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niet beschikbaar</td>
          <td class="item-b">Realtime bescherming</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niet beschikbaar</td>
          <td class="item-b">Anti-tracking</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niet beschikbaar</td>
          <td class="item-b">USB-bescherming</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niet beschikbaar</td>
          <td class="item-b">Wachtwoordbescherming voor bestanden</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niet beschikbaar</td>
          <td class="item-b">Camerabescherming</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niet beschikbaar</td>
          <td class="item-b">Automatisch updaten</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- end comparison -->

  <!-- review -->
  <div class="review">
    <h2>Waarom kiezen andere gebruikers en experts IObit Malware Fighter PRO?</h2>
    <div class="content">
      <div class="details">
        <div class="active">
          <h4>Media recensie</h4>
          <p>"Het programma gebruikt twee engines, de eigen en de Bitdefender engine, en blijkt effectief tegen malware die vergelijkbare tools niet kunnen vinden. Het is daarom goed om deze naast eventuele eigen anti-virussoftware te draaien. Het kan een brede selectie spyware, ransomware, adware, Trojans, wormen, keyloggers en bots detecteren."</p>
		  <h5>Software.Informer</h5>
        </div>
        <div>
          <h4>Klantbeoordeling</h4>
          <p>"We gebruikten tientallen verschillende programma's om onze systemen soepel te laten lopen en te beveiligen. Het duurde elke week uren om alle programma’s te laten lopen. Met IObit Malware Fighter PRO en Advanced SystemCare PRO, hebben we eindelijk alles wat we nodig hebben op één plek en is het scannen een fluitje van een cent. We hebben geen problemen meer gehad sinds we jullie producten gebruiken!”</p>
		  <h5>Bob Bassett</h5>
        </div>
        <div>
          <h4>Klantbeoordeling</h4>
          <p>"Enkele jaren geleden heeft een vriend mij getipt over IObit Malware Fighter. In het begin was ik sceptisch, maar na het installeren werd het direct mijn favoriete anti-malware programma. Het is zeer eenvoudig te gebruiken. In de afgelopen jaren heeft het al verschillende bedreigingen gedetecteerd en verwijderd. In samenwerking met andere IObit programma's, bijvoorbeeld ASC, biedt het een zeer goede bescherming van mijn PC. Ik heb nu al meerdere programma's van IObit aan al mijn vrienden en familie aangeraden."</p>
		  <h5>Peter Stoffers</h5>
        </div>
        <div>
          <h4>Klantbeoordeling</h4>
          <p>"Ik ben zeer tevreden met jullie product IObit Malware Fighter. Voordat ik dit product had, had ik veel last van ongewenste verstoringen. Ik kon geen hele film of concert kijken, waar ik erg van houd. Dankzij jullie product verloopt alles nu soepel, veilig en met een goede bescherming. Het programma scant mijn laptop zonder dat het de prestaties beperkt. Ik heb dit product ook aanbevolen aan twee vrienden."</p>
		  <h5>Gelu Batir</h5>
        </div>
		<div>
		  <h4>Klantbeoordeling</h4>
		  <p>"Ik wil al het personeel van IObit hartelijk bedanken voor het harde werk dat zij leveren om de beste programma’s uit te kunnen brengen. Het is een geweldige update die jullie hebben gemaakt. Het scannen gaat een stuk sneller and het is gebruiksvriendelijk. Iedereen die een goed anti-malware en anti-virus programma wil dat het geld ruimschoots waard is, hoeft niet verder te zoeken dan IObit Malware Fighter. Ik zou aanraden andere opties te vergeten en voor de beste optie te gaan: IObit Malware Fighter."</p>
		  <h5>David Cassidy</h5>
		</div>
      </div>
	  <ul>
		<a class="next nextbtn" href="javascript: nextFun();"></a>
		<li class="one"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
		<li class="two"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
	    <li class="three"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Gelu Batir"></li>
	    <li class="four"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></li>
	    <li class="five"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></li>
	  </ul>
    </div>
  </div>
  <!-- end review -->
  
  <div class="award">
	  <div class="wrapper">
		  <h2>Ook aangeraden door</h2>
		  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="Gelu Batir">
	  </div>
  </div>
  
  

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">PAK UW LAATSTE KANS OP MOOIE KERSTCADEAUS</h2>
    <!-- box -->
	<div class="wrapper bottom-buy-center">
    <div class="box fl">
	  <div class="bottom-buyimg bottom-buy2 on"></div>
	  <div class="bottom-buyimg bottom-buy3"></div>
    </div>
    <!-- ul -->
    <ul class="fl">
      <li class="active mid">1 Jaar / 3 pc’s + <small>Cadeaus</small></li>
      <li class="bot">1 Jaar / 3 pc’s</li>
    </ul>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price">€<b>21</b>,99 <del>€133,88</del></p>
      </dd>
      <dd>
        <a class="buybtn small" href="https://www.iobit.com/buy.php?product=nl-imf83pcsdiu2199&ref=nl_imf83pcsdiu2199purchase2011<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2011-nl');">
          <i class="all-icons"></i> Nu bestellen
        </a>
      </dd>
    </dl>
	</div>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h3>Geldteruggarantie</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
        <dd>
          <h3>Veilige betaling</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/service-client.png" alt=""></dt>
        <dd>
          <h3>24/7 Klantenservice</h3>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Opmerking:</dt>
        <dd>* IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
    </div>
  </div>
  <!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>