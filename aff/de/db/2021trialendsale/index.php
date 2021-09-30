<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if (empty($_GET['ref'])) $_GET['ref'] = 'deaff_db8_2021trialendsale';
if(empty(json_decode(base64_decode($_GET['tdata'])))){
  $_GET['tdata']='eyJMZnRUb2RDb3VudCI6MCwiTGZ0RHJ2Q291bnQiOjAsIkxmdENtcENvdW50IjowLCJMZnRUcmxEYXkiOjF9';
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sparen Sie 72% auf Driver Booster PRO - IObit</title>
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
			<a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<div class="title">
				<p>Ihre Testversion endet in <b class="days">3</b> Tagen!</p>
				<h1>Dies ist die letzte Chance den besten Preis zu bekommen, nur für Nutzer der Testversion</h1>
			</div>
			<div class="offer clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO 6"/>
				</div>
				<div class="right fr">
					<h2>Verpassen Sie nicht unseren besten Preis!</h2>
          <div class="curvebox">
            <img src="<?php echo getStaticUrl('images/price-curve.png')?>" alt=""/>
            <span class="one">
							Vor dem <i class="date0">11</i>. <em class="month">April</em>
						</span>
            <span class="two">
							<i class="date0">11</i>. <em class="month">April</em> bis <i class="date1">21</i>. <em class="month">April</em>
						</span>
            <span class="three">
							<i class="date2">22</i>. <em class="month">April</em> bis <i class="date3">24</i>. <em class="month">April</em>
						</span>
            <span class="four">
							Nach dem <i class="date4">24</i>. <em class="month">April</em>
						</span>
          </div>
					<ul class="price clearfix">
						<li><p>Heute <b>24,99€</b></p> 72% Rabatt</li>
						<li class="last">
							<a class="buybtn" 
							   href="https://www.iobit.com/buy.php?product=deaff-db83pc2499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
							   onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb82021trialendsale')">
								<i class="all-icons"></i> Jetzt kaufen
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
      <h2>Warum Driver Booster PRO?</h2>
      <h3>
        Aktualisiert <strong class="driverCount"></strong> veraltete Treiber & Spielekomponenten, um die Stabilität ihres PCs und ihr Spieleerlebnis zu <br>
        verbessern
      </h3>
      <img class="scan" src="<?php echo $pResUrl;?>images/feature-scan01.png" alt="">
      <div class="content">
        <!--one -->
        <dl class="one clearfix">
          <dt></dt>
          <dd>
            <h4>Stabile Leistung</h4>
            <p>
              Aktualisiert wichtige PC Treiber, um <br>
              das Einfrieren oder Abstürzen des <br>
              PCs zu vermeiden
            </p>
          </dd>
        </dl>
        <!-- two -->
        <dl class="two clearfix">
          <dt></dt>
          <dd>
            <h4>Effektiver Gerätemanager</h4>
            <p>
              Korrigiert Fehlercodes, um Hardwareprobleme <br>
              zu beheben.
            </p>
          </dd>
        </dl>
        <!-- three -->
        <dl class="three clearfix">
          <dt></dt>
          <dd>
            <h4>Schnelles Laden von Spielen</h4>
            <p>
              Aktualisiert passende Komponenten, um <br>
              einen einwandfreien Start zu garantieren
            </p>
          </dd>
        </dl>
        <!-- four -->
        <dl class="four clearfix">
          <dt></dt>
          <dd>
            <h4>Verbessertes Gaming Erlebnis</h4>
            <p>
              Aktualisiert alle fürs Gaming nötige Treiber, <br>
              damit Sie verbesserte & neue Funktionen <br>
              nutzen können.
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <div class="update">
      <h2>Warum Driver Booster PRO?</h2>
      <h3>
        Aktualisiert <strong>30</strong> veraltete Treiber & Spielekomponenten, um die Stabilität ihres PCs und ihr <br>
        Spieleerlebnis zu verbessern
      </h3>
      <img class="scan" src="<?php echo $pResUrl;?>images/feature-scan02.png" alt="">
      <div class="content">
        <!-- five -->
        <dl class="five top clearfix">
          <dt class="driveNum">15</dt>
          <dd>Treiber Updates <br> verfügbar  <sup>PRO</sup></dd>
        </dl>
        <!-- six -->
        <dl class="six top clearfix">
          <dt class="gameNum">15</dt>
          <dd>Aktualisierungen für <br> Spielekomponenten verfügbar <sup>PRO</sup></dd>
        </dl>
        <!-- one -->
        <dl class="one clearfix">
          <dt></dt>
          <dd>
            <h4>Stabile Leistung</h4>
            <p>
              Aktualisiert wichtige PC Treiber, um <br>
              das Einfrieren oder Abstürzen des <br>
              PCs zu vermeiden
            </p>
          </dd>
        </dl>
        <!-- two -->
        <dl class="two clearfix">
          <dt></dt>
          <dd>
            <h4>Effektiver Gerätemanager</h4>
            <p>
              Korrigiert Fehlercodes, um Hardwareprobleme <br>
              zu beheben.
            </p>
          </dd>
        </dl>
        <!-- three -->
        <dl class="three clearfix">
          <dt></dt>
          <dd>
            <h4>Schnelles Laden von Spielen</h4>
            <p>
              Aktualisiert passende Komponenten, um <br>
              einen einwandfreien Start zu garantieren
            </p>
          </dd>
        </dl>
        <!-- four -->
        <dl class="four clearfix">
          <dt></dt>
          <dd>
            <h4>Verbessertes Gaming Erlebnis</h4>
            <p>
              Aktualisiert alle fürs Gaming nötige Treiber, <br>
              damit Sie verbesserte & neue Funktionen <br>
              nutzen können.
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end feature -->

	<!-- comparison start -->
	<div class="comparison wrapper">
	  <h2>Was sind die Unterschiede zwischen ihrer aktuellen Edition und der PRO Version?</h2>
	  <table>
	    <thead>
	      <tr>
	        <th colspan="2"></th>
	        <th class="itema">
	          <div class="free">Ihre aktuelle Edition</div>
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
	        <td class="virtue">Automatische Treiberupdates während eines Systemleerlaufs</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
	        <td class="virtue">Mit 1-Klick Treiber aktualisieren</td>
	        <td class="itema">Läuft in <span class="days">3</span> Tagen ab</td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
	        <td class="virtue">Bis zu 100% schnellere Updates</td>
	        <td class="itema">Läuft in <span class="days">3</span> Tagen ab</td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
	        <td class="virtue">Behebung von Geräteproblemen, für einen sicheren PC</td>
	        <td class="itema">Läuft in <span class="days">3</span> Tagen ab</td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
	        <td class="virtue">Automatischer Download & Erstellung von Back-Ups</td>
	        <td class="itema">Läuft in <span class="days">3</span> Tagen ab</td>
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
	          <p><b>€24,99</b> <del>€89,99</del></p>
	          <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=deaff-db83pc2499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb82021trialendsale')">
	          	<i class="all-icons"></i> Jetzt kaufen
	          </a>
            <p>1 Jahresabo für 3 PCs</p>
	        </th>
	      </tr>
	    </tfoot>
	  </table>
	</div>
	<!-- comparison end -->

	<!-- review start -->
  <div class="review wrapper">
    <h2>Was sagen andere?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/chip-de.png')?>" alt="Chip.de"></dt>
          <dd>
            <h2>Media Review</h2>
            <h4>„Automatische Treiberdownloads gibt es nur in der kostenpflichtigen Pro-Version.“</h4>
            <p class="media">
              „Damit es keine unschönen Überraschungen gibt, legt der "IObit Driver Booster Pro" zuvor einen Wiederherstellungspunkt an. Hat bei einer Treiber-Installation einmal etwas nicht geklappt, erlaubt die neue "Roll Back"-Funktion die einfache Rückkehr zu einer älteren Treiber-Version. Neben schnelleren Downloadleitungen bietet der Hersteller eine breitere Hardware-Unterstützung und eine Backup-Funktion bei der erweiterten Pro-Version der Software an.“
            </p>
            <cite>Chip.de</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/peter-bomers.png')?>" alt="Peter Bomers"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              Auf die heutige Zeit bezogen, ist es sehr schwierig, immer mit den Treibern auf dem neuesten Stand zu sein. Da ich mit meinem PC viel experementiere und immer wieder was neues ausprobiere, bin ich eben auf den Driver Booster gekommen, weil Ihr immer fast genau, aktuell seid. Ich bin ein Hobby Mensch  in Sachen PC`s und freu mich immer über neue Errungenschaften. Macht weiter so und wir werden im Geschäft bleiben.
            </p>
            <cite>Peter Bomers</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              Was für eine Überraschung, den neuen Driver Booster von IObit zu erhalten. Sobald die Installation fertig ist, startet sein Update sofort. Nachdem das Upgrade abgeschlossen war, sah es so aus, als ob mein PC komplett überarbeitet worden wäre. Wirklich super!
            </p>
            <cite>Harold Barr</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              Driver Booster ist wirklich der beste Treiber-Updater auf dem Markt. Es ist benutzerfreundlich, hat eine einfache und gute Oberfläche und erledigt seine Aufgabe besser als jede andere Anwendung, die ich verwendet habe. Dieses Programm ist 5 Sterne wert. Sehr empfehlenswert.
            </p>
            <cite>Hishaam Salasa</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
	<!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <p>
        Da das Programm zuverlässlich ist und in den letzten fünf Jahren von weltweiten Medien ausgezeichnet wurde, <br>
        können Sie sich sicher sein die richtige Wahl mit diesem Treiber Updater zu machen
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
        <h3>Risikofrei tesen – mit unserer 60 Tage Geld-zurück-Garantie</h3>
        <p>
          Wir sind stolz darauf, dass die Aktivierung der Pro Version all ihre <br>
          Treiberprobleme für einen angemessenen Preis lösen wird.
        </p>
      </dd>
    </dl>
    <dl class="fr">
      <dd><h3>Wir akzeptieren</h3></dd>
      <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
    </dl>
  </div>
  <!-- service end -->

  <!-- bottom start -->
  <dl class="note wrapper">
    <dt>Hinweis:</dt>
    <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
    <dd>*. Daten können sich system- oder computerabhängig ändern.</dd>
  </dl>
  <div class="copyright">
    <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl"><img src="<?php echo getStaticUrl('images/db-float-box.png')?>" alt="Driver Booster PRO6"></div>
      <h2 class="fl">72% RABATT</h2>
      <div class="price fr">
        <h3>Halten Sie das ganze Jahr über alle ihre Treiber aktuell</h3>
        <a class="buybtn shadow other"
           href="https://www.iobit.com/buy.php?product=deaff-db83pc2499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb82021trialendsale')">
          <i class="all-icons"></i> Jetzt kaufen
        </a>
        <p>1 Jahresabo für 3 PCs</p>
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