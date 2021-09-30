<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if (empty($_GET['ref'])) $_GET['ref'] = 'nlaff_db8_2021trialendsale';
if(empty(json_decode(base64_decode($_GET['tdata'])))){
  $_GET['tdata']='eyJMZnRUb2RDb3VudCI6MCwiTGZ0RHJ2Q291bnQiOjAsIkxmdENtcENvdW50IjowLCJMZnRUcmxEYXkiOjF9';
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>75% Korting op Driver Booster PRO - IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,800" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<div class="title">
				<p>Uw proefversie verloopt binnen <span class="days">3</span> <span class="dayStr">dagen</span>!</p>
				<h1> Laatste Kans Op de Beste Prijs! Exclusief voor proefversiegebruikers</h1>
			</div>
			<div class="offer clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
				</div>
				<div class="right fr">
					<h2>Mis deze speciale prijs niet!</h2>
          <div class="curvebox">
            <img src="<?php echo getStaticUrl('images/price-curve.png')?>" alt=""/>
            <span class="one">
							Voor <i class="date0">11</i> <em class="month">april</em>
						</span>
            <span class="two">
							<i class="date0">11</i> - <i class="date1">21</i> <em class="month">april</em>
						</span>
            <span class="three">
							<i class="date2">22</i> + <i class="date3">23</i> + <i class="date4">24</i> <em class="month">april</em>
						</span>
            <span class="four">
							Na <i class="date4">24</i> <em class="month">april</em>
						</span>
          </div>
					<ul class="price clearfix">
						<li><p>Vandaag  <b>€19,99</b></p> Korting: 75%</li>
						<li class="last">
							<a class="buybtn" 
							   href="https://www.iobit.com/buy.php?product=nlaff-db83pc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
							   onclick="ga('send', 'event', 'dbbuy', 'buy', 'nlaffdb82021trialendsale')">
								<i class="all-icons"></i> KOOP NU
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

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
	          <div class="pro">Driver Booster PRO</div>
	        </th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
	        <td class="virtue">Automatisch drivers updaten als de pc niet wordt gebruikt</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
	        <td class="virtue">Drivers updaten met 1 klik</td>
	        <td class="itema">Vervalt binnen <span class="days">3</span> <span class="dayStr">dagen</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
	        <td class="virtue">Tot 100% sneller updaten</td>
	        <td class="itema">Vervalt binnen <span class="days">3</span> <span class="dayStr">dagen</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
	        <td class="virtue">Los apparaatproblemen op voor een veiligere pc</td>
	        <td class="itema">Vervalt binnen <span class="days">3</span> <span class="dayStr">dagen</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
	        <td class="virtue">Automatisch downloaden & back-uppen</td>
	        <td class="itema">Vervalt binnen <span class="days">3</span> <span class="dayStr">dagen</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	    </tbody>
	    <tfoot>
	      <tr>
	        <th colspan="2"></th>
	        <th class="itema"></th>
	        <th class="space"></th>
	        <th class="itemb">
	          <p><b>€19,99</b> <del>€74,85</del></p>
	          <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nlaff-db83pc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'nlaffdb82021trialendsale')">
	          	<i class="all-icons"></i> Koop Nu
	          </a>
            <p>1-jarig abonnement / 3 pc’s</p>
	        </th>
	      </tr>
	    </tfoot>
	  </table>
	</div>
	<!-- comparison end -->

	<!-- review start -->
  <div class="review wrapper">
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
      <div class="left fl"><img width="213" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"></div>
      <h2 class="fl">75% KORTING</h2>
      <div class="price fr">
        <h3>Houd al uw drivers up-to-date!</h3>
        <a class="buybtn shadow other"
           href="https://www.iobit.com/buy.php?product=nlaff-db83pc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'nlaffdb82021trialendsale')"">
          <i class="all-icons"></i> Koop Nu
        </a>
        <p>1-jarig abonnement / 3 pc’s</p>
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