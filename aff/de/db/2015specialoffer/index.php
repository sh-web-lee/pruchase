<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
// if (empty($_GET['ref'])) $_GET['ref'] = '';
function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) -68807174;

$packsNum = ceil(microtime_float()*2000/20000);
$packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>Sparen Sie 70% auf DriverBooster PRO & erhalten Sie ein 14-Monate-Abonnement</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $pResUrl; ?>style/style.css">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function decreasingPacks(){
	$.ajax({
		type: "GET",
		url: "junespecialofferde.php",
		data: "action=getPacks&r="+Math.random(),
		success: function(packs){
			$('.packs').html(packs);
			setTimeout('decreasingPacks()', 10000);
		}
	});
}
setTimeout('decreasingPacks()', 10000);
</script>
</head>

<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="header">
	<div class="wrapper">
  	<a href="http://www.iobit.com" target="_blank"></a>
    <ul id="counttime">
    	<li>02</li>
      <li>45</li>
      <li>12</li>
      <li>222</li>
    </ul>
  </div>
</div>
<div id="banner">
	<div class="wrapper">
  	<h1>Große Rabattaktion! </h1>
    <h2>Kaufen Sie heute Driver Booster PRO 1-Jahres-Abo und erhalten Sie zusätzlich ein 2-Monate-Abo Gratis!</h2>
    <div class="right">
    	<p>Jetzt 14-Monate-Abo kostet nur 24,95 und sparen Sie <span>70%</span> auf Ihr neues Abonnement!</p>
      <dl class="content">
      	<dt><img src="<?php echo $pResUrl; ?>images/db.jpg"></dt>
        <dd><strong>Driver Booster PRO  </strong><span>24,95€ <del>87,44 €</del></span></dd>
        <dd>3 PC / 1 Jahr</dd>
        <dd><span class="gift">+2 Monate / 3 PC </span><span>Nur <font>1,7€</font> pro Monat</span></dd>
      </dl>
      <dl class="container">
      	<dt><strong>24,95€</strong><del>87,44€</del></dt>
        <dd><strong>14 Monate</strong> / 3 PC </dd>
        <dd><a href="http://www.iobit.com/buy.php?product=de-db14m-aff&aff=<?php echo $_GET['aff']; ?>&refs=de_dbpurchase_aff" onClick="ga('send', 'event', 'dbbuy', 'buy', '2015speicaloffer-de-aff');" class=" btn">Jetzt kaufen</a><img src="<?php echo $pResUrl; ?>images/paypal.jpg"></dd>
      </dl>
    </div>
  </div>
</div>
<div class="wrapper" id="content">
	<h2>Optimieren Sie Ihre PC-Leistung mit den aktuellsten Treibern!   <span>Nur noch <span class="packs"><?php echo $packsNum; ?></span> erhältlich</span></h2>
  <img src="<?php echo $pResUrl; ?>images/content.jpg">
  <dl>
  	<dt>Was macht Driver Booster PRO 2:</dt>
    <dd>Unterstützt eine große Anzahl an Hardware-Geräten</dd>
    <dd>300% höhere Geschwindigkeit von Treiber-Updates *</dd>
    <dd>Behebt von veralteten Treibern verursachte Probleme</dd>
    <dd>Enthält Backup-Treiber für die sichere Wiederherstellung</dd>
    <dd><a href="javascript:void(0);" onClick="goTaget($('.comparison_table'))" >Erfahren Sie mehr über die PRO-Version >></a></dd>
  </dl>
</div>
<div class="media_rev">
  <div class="wrapper">
    <h3>Media Review</h3>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/media_muf.jpg" alt=""></dt>
      <dd>"Driver Booster, from IObit, promises an easier solution to download and update driver with its most advanced technology by acting as an all-in-one command center. All of your drivers are listed in the app’s interface, making it a super easy process to download and update drivers. Downloading and installing drivers with this software is a cinch and often takes just minutes (or less)."</dd>
      <dd>- MakeUseOf</dd>
    </dl>
  </div>
</div>
<div class="wrapper">
 <dl class="awards ">
    <dt>Produktauszeichnungen</dt>
    <dd><img src="<?php echo $pResUrl; ?>images/awards.jpg"></dd>
  </dl>
  <div class="user_rev" id="user_rev">
      <div class="wrapper">
        <h3>Kundenbewertung</h3>
        <div class="content">
          <dl class="show">
        <dd><h4>"Driver Booster hat das für mich mit einem einfachen Mausklick erledigt. 19 Treiber wurden innerhalb kürzester Zeit aktualisiert."</h4></dd>
        <dd>"Ich bin sehr zufrieden mit Driver Booster. Ich habe schon mit einigen dieser Programme Erfahrungen gemacht, aber die Suche nach Treibern musste ich trotzdem immer selbst übernehmen. Driver Booster hat das für mich mit einem einfachen Mausklick erledigt. Der ganze Vorgang hat mich sehr beeindruckt, vor allem das Ergebnis. 19 Treiber wurden innerhalb kürzester Zeit aktualisiert."</dd>
      </dl>
          <dl class="hidden">
        <dd><h4>"10 meiner Treiber waren veraltet und durch Driver Booster wurden alle wieder auf den neuesten Stand gebracht."</h4></dd>
        <dd>"WOW! Ist das ein tolles Programm. Ich habe meinen Laptop von einem Dual-Core auf einen Quad-Core umgerüstet und hatte Probleme bei der Aktualisierung der installierten Hardware. 10 meiner Treiber waren veraltet und durch Driver Booster wurden alle wieder auf den neuesten Stand gebracht. Mein Laptop ist jetzt auf dem neusten Stand und läuft absolut reibungslos. Große Klasse! Ich werde dieses Programm definitiv meiner Familie und meinen Freunden empfehlen."</dd>
      </dl>
          <dl class="hidden">
        <dd><h4>"Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"</h4></dd>
        <dd>"Das ist eines der besten Programme, um Treiber zu aktualisieren. Microsoft hat mir sogar Updates vorgeschlagen, die nicht auf meinem System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche, und hat sie ohne Fehler installiert. Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"</dd>
      </dl>
          <dl class="hidden">
        <dd><h4>"Driver Booster hat zwei wichtige Treiber-Updates gefunden, während das andere Programm überhaupt keine Updates gefunden hat."</h4></dd>
        <dd>"Ich habe Driver Booster erst kürzlich installiert und finde es, wie auch schon die anderen Produkte von IObit, einfach großartig. Ich hatte bereits ein ähnliches Programm installiert, aber Driver Booster hat zwei wichtige Treiber-Updates gefunden, während das andere Programm überhaupt keine Updates gefunden hat. Die benötigten Updates konnte ich innerhalb weniger Sekunden herunterladen. Ich bin mit diesem Produkt wirklich sehr zufrieden!"</dd>
      </dl>
        </div>
        <ul class="users">
          <li class="current"><img src="<?php echo $pResUrl; ?>images/vince-lewis.jpg" alt="">Vince Lewis <br>2013</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/mike-goggans.jpg" alt="">Mike Goggans<br>2013</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/wayne-bowler.jpg" alt="">Wayne Bowler<br>2013</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/leslie-hutton.jpg" alt="">Leslie Hutton <br>2013</li>
        </ul>
      </div>
    </div>
<div class="comparison_table">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th colspan="2" style="text-align:left;line-height: 60px;">Welche Vorteile bietet Ihnen die PRO Edition?</th>
              <th class="itemb"><span>Driver Booster 2 Free</span></th>
              <th class="itema"><span>Driver Booster 2 Pro </span> <br>24,95€ <del>statt 87,44€</del></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
              <td class="virtue">Erkennt automatisch veraltete Treiber</td>
              <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
              <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
              <td class="virtue">Downloaden Sie aktuelle Treiber und updaten Sie veraltete mit nur einem Klick</td>
              <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
              <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
              <td class="virtue">Geschwindigkeitsbegrenzung von Treiber-Update entsperren</td>
              <td class="itemb"></td>
              <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
              <td class="virtue">Spezielle Treiber-Optimierung für bessere Gaming-Erfahrung</td>
              <td class="itemb"></td>
              <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
              <td class="virtue">Unterstützt eine umfangreichere Zahl an Hardware Geräten</td>
              <td class="itemb"></td>
              <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
              <td class="virtue">Erhalten Sie Priorität veraltete Treiber schnellstmöglich zu updaten</td>
              <td class="itemb"></td>
              <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
              <td class="virtue">Sichern Sie Ihre Treiber für eine sichere Wiederherstellung</td>
              <td class="itemb"></td>
              <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
              <td class="virtue">Verbessert Hardware-Funktionalität für bessere Performance</td>
              <td class="itemb"></td>
              <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
              <td class="virtue">Automatische Updates auf die neuste Version</td>
              <td class="itemb"></td>
              <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
              <td class="virtue">Kostenloser technischer Support 24/7</td>
              <td class="itemb"></td>
              <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
                <th colspan="2"></th>
                <th class="itemb"><span>Driver Booster 2 Free</span><br>
                        Ihre aktuelle Version</th>
                <th class="itema"><span>Driver Booster 2 PRO</span><br>24,95€ <del>statt 87,44€</del><br>
                        <a href="http://www.iobit.com/buy.php?product=de-db14m-aff&aff=<?php echo $_GET['aff']; ?>&refs=de_dbpurchase_aff" onClick="ga('send', 'event', 'dbbuy', 'buy', '2015speicaloffer-de-aff');" class="btn">Jetzt kaufen</a> </th>
            </tr>
          </tfoot>
  </table>
</div>
	<dl class="annotation">
  	<dt>Note:</dt>
  	<dd>*.Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
   <dd>*.Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
  </dl>  
	<p class="footer">Copyright © 2005 - 2015 IObit. Alle Rechte vorbehalten</p>
</div>
<div class="floatlayer" id="floatlayer">
		<div class="wrapper">
      <dl class="left">
          <dt>Sparen Sie <span>70%</span> auf DB PRO und Ihr neues Jahresabonnement für ist dann 14 Monate lang gültig!</dt>
          <dd>Von <em><?php echo $buyNum;?></em> Nutzern aktiviert</dd>
        </dl>
        <dl class="checkarea">
          <dt> <span>24,95€</span> <del>87,44€</del></dt>
          <dd><a class="btn" href="http://www.iobit.com/buy.php?product=de-db14m-aff&aff=<?php echo $_GET['aff']; ?>&refs=de_dbpurchase_aff" onClick="ga('send', 'event', 'dbbuy', 'buy', '2015speicaloffer-de-aff');">Jetzt kaufen</a></dd>
        </dl>
    </div>
  </div>
<div class="pop-up">
    <div class="pop-main">
        <div class="pop-box">
            <h2>Note:</h2>
            <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
            <p>You will be redirected to the latest IObit promotion page automatically.</p>
        </div>
    </div>
</div>
<script>
		$("#user_rev .users li").mouseover(function(event) {
			var num = $(this).index();
			$("#user_rev .users li").each(function(index, el) {
				$(this).removeClass('current');
			});
			$(this).addClass('current');
			$("#user_rev dl").each(function(index, el) {
				$(this).removeClass('show').addClass('hidden')
			});
			$("#user_rev dl").eq(num).removeClass('hidden').addClass('show');
  });
	function goTaget(target) {
		var Theigth = target.offset().top;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	}

	$(window).on('scroll', function () {
    var scrollHeight = $("#banner .btn").offset().top;
    if ($(window).scrollTop() > scrollHeight) {
        $('#floatlayer').addClass('on');
    } else {
        $('#floatlayer').removeClass('on');
    }
  }); 
	function cycleCountdown(){
		var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
		var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
		d = MApp(2.2).packages.zeroize(datetime[0], 2);
		h = MApp(2.2).packages.zeroize(datetime[1], 2);
		i = MApp(2.2).packages.zeroize(datetime[2], 2);
		s = MApp(2.2).packages.zeroize(datetime[3], 2);
		mi = MApp(2.2).packages.zeroize(datetime[4], 3);
		document.getElementById('counttime').innerHTML = '<li>'+h+'</li><li>'+i+'</li><li>'+s+'</li><li>'+mi+'</li>';
		setTimeout('cycleCountdown()', 1);
	}
	cycleCountdown();
	setTimeout('window.location.href="https://purchase.iobit.com/aff/en/db/2017general/index.php'+location.search+'"',5000);
</script></div>
</body>
</html>
