<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

$reduceNum=758560000;
$reduceTime=2;
$buyNum = ceil(microtimeFloat()*1000/(1000*$reduceTime)) - $reduceNum;
$buyNum = number_format($buyNum);

$driverCount=intval($_GET['uc']);
$installDays=intval($_GET['iday']);
$expireTimestamp=intval(base64_decode($_GET['ext']));
$expireDate=date('Y-m-d H:i:s',$expireTimestamp);
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Bezahlen 0€ um Driver Booster PRO für Giveaway-Nutzer wieder zu erhalten  – IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Play" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="http://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<div class="info">
				<h2>Driver Booster 5 PRO</h2>
				<p>Genießen Sie die exklusiven Privilegien um die <span>PRO-Version für weitere 15 Tage KOSTENLOS zu halten</span></p>
				<div class="count-down">
					<strong>6</strong>Tage : 
					<strong>22</strong>Std : 
					<strong>34</strong>Min : 
					<strong>25</strong>Sek : 
					<small>345</small>MS
				</div>
				<div class="btn-zone">
					<a href="http://www.iobit.com/buy.php?product=de-db5preorder15d&ref=de_2018giveaway&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-de');" class="orig-btn">
						<span>PRO erhalten - 0€</span>
					</a>
					<div class="shadow"></div>
				</div>
				<div class="crowd-count"><span class="buy-num"><?php echo $buyNum;?></span> Menschen erhalten das Privileg</div>
			</div>
			<div class="steps clearfix">
				<ul>
					<li>0€ zahlen, um Driver Booster 5 PRO (3 PCs) <span>für 15 Tage länger  weiter zu behalten</span></li>
					<li>Nach 15 Tagen erhalten Sie den exklusiven 70% <span>Rabatt (Originalpreis: 89,99€) auf  Driver Booster</span> 5 PRO (1 Jahr / 3 PCs)</li>
					<li>Sie werden erst nach Ablauf der 15-tägigen <span>kostenlosen Probezeit  abgerechnet, und Sie</span> können die Bestellung jederzeit kündigen</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end banner -->
	<!-- statistics -->
	<div class="statistics">
		<div class="wrapper">
			<h2>Driver Booster hat <strong class="driver">57</strong> Treiber in den letzten <strong class="countDay">345</strong> Tagen für Sie </h2>
			<p>installiert und hat Ihre PC-Leistung stabil und leistungsfähig gehalten.</p>
		</div>
	</div>
	<!-- end statistics -->
	<!-- features -->
	<div class="features">
		<div class="wrapper">
			<h2>Jetzt genießen Sie weiterhin alle Verbesserungen von Driver Booster 5 PRO, <span>Wir sichern Ihnen einen stabileren PC im neuen Jahr!</span></h2>
			<div class="disp">
				<dlv class="list feat-01">
					<h3>Mit nur Ein-Klick Treiber updaten</h3>
					<p>Ein-Klick zur Treiber-Erkennung &amp;-Aktualisierung bieten</p>
				</dlv>
				<div class="list feat-02">
					<h3>Treiber sicher downloden &amp; updaten</h3>
					<p>Hilft bei der Wiederherstellung unerwünschter Treiber-Updates jederzeit!</p>
				</div>
				<div class="list feat-03">
					<h3>Kein unerwarteter Systemabsturz</h3>
					<p>Hält alle Treiber immer aktuell um einen stabilen PC zu garantieren </p>
				</div>
				<div class="list feat-04">
					<h3>200% schneller dowloaden</h3>
					<p>Beim Systemleerlauf zeitsparend herunterladen mit bis zu 200% schnellerer Geschwindigkeit</p>
				</div>
				<div class="list feat-05" >
					<h3>Spiel-Komponenten-Datenbank</h3>
					<p>Einschließlich VC Runtime 2008, VC Runtime 2010 und VC Runtime 2012, VC Runtime 2013</p>
				</div>
			</div>
			<div class="cart-zone">
				<h3>Erhalten Sie jetzt die 15-Tage-Testversion kostenlos, um Ihre <span>Gerätetreiber einfach zu reparieren und zu aktualisieren!</span></h3>
				<div class="btn-zone">
					<a href="http://www.iobit.com/buy.php?product=de-db5preorder15d&ref=de_2018giveaway1&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-de');" class="orig-btn"><span>PRO erhalten - 0€</span></a>
					<div class="shadow red"></div>
				</div>
				<div class="count-down">
					<strong>6</strong>Tage : 
					<strong>22</strong>Std : 
					<strong>34</strong>Min : 
					<strong>25</strong>Sek : 
					<small>345</small>MS
				</div>
			</div>
		</div>
	</div>
	<!-- end features -->
	<!-- awards -->
	<div class="awards">
		<div class="wrapper">
			<h2>Weltweite Auszeichnungen</h2>
			<img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
		</div>
	</div>
	<!-- end awards -->
	<!-- reviews -->
	<div class="reviews">
		<div class="wrapper">
			<h2>Driver Booster 5 PRO wird von berühmten Medien und Benutzern ausgezeichnet</h2>
				<div class="review active">
					<h3>Media Review</h3>
					<h4>„Automatische Treiberdownloads gibt es nur in der kostenpflichtigen Pro-Version.“</h4>
					<p>„Damit es keine unschönen Überraschungen gibt, legt der "IObit Driver Booster Pro" zuvor einen Wiederherstellungspunkt an. Hat bei einer <span>Treiber-Installation einmal etwas nicht geklappt, erlaubt die neue "Roll Back"-Funktion die einfache Rückkehr zu einer älteren Treiber-Version.</span> Neben schnelleren Downloadleitungen bietet der Hersteller eine breitere Hardware-Unterstützung und eine Backup-Funktion bei der erweiterten <span>Pro-Version der Software an.“</span>
					</p>
				</div>
				<div class="review">
					<h3>Kundenbewertung</h3>
					<h4>"Mein PC ist schneller, sicherer und fühlt sich neuer an als noch vor 8 Monaten."</h4>
					<p>"Durch Driver Booster weiß ich mit Leichtigkeit, welche Gerätetreiber veraltet sind und kann diese einfach updaten. Nebenbei hilft es mir auch <span>dabei, Soundfehler, Netzwerkfehler, Gerätefehler usw. zu beheben. Ich hatte es vor dem Gebrauch nicht geglaubt, aber nach wenigen</span> Anwendungen, lernte ich es zu lieben. Mein PC ist schneller, sicherer und fühlt sich neuer an als noch vor 8 Monaten. Danke IObit."
					</p>
				</div>
				<div class="review">
					<h3>Kundenbewertung</h3>
					<h4>"Ich kann Driver Booster nur dringendst empfehlen, er wird euch dabei helfen, Updates und Treiber schnell und einfach zu updaten."</h4>
					<p>„Driver Booster ist eine großartige Anwendung. Für jemanden, der viele Anwendungen und Treiber besitzt, aber nicht die Zeit dafür hat diese <span>manuell zu aktualisieren, kann Driver Booster nur dringendst empfehlen, er wird Euch dabei helfen, Updates und Treiber schnell und einfach zu</span> updaten.“
					</p>
				</div>
				<div class="review">
					<h3>Kundenbewertung</h3>
					<h4>"Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, <span>es hat ganze Arbeit geleistet!"</span></h4>
					<p>"Das ist eines der besten Programme, um Treiber zu aktualisieren. Microsoft hat mir sogar Updates vorgeschlagen, die nicht auf meinem <span>System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche, und hat sie ohne Fehler installiert. Es hat einfach</span> perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"
					</p>
				</div>
				<ul class="users clearfix">
					<li class="active">
						<img src="<?php echo $pResUrl; ?>images/chip-de.png" alt="Chip.de">
						<span>Chip.de</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya">
						<span>Myo Thuya</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund">
						<span>Adam Backlund</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
						<span>Wayne Bowler</span>
					</li>
				</ul>	
		</div>
	</div>
	<!-- end reviews -->
	<!-- bottom -->
	<div class="bottom">
		<div class="wrapper">
			<div class="solgan">
				<p>Zögern Sie auch noch? </p>
				<h2>Jetzt erhalten Sie PRO, um einen reibungslosen PC zu genießen und das <span>Spielen zu beschleunigen!</span></h2>
			</div>
			<div class="btn-zone">
				<a href="http://www.iobit.com/buy.php?product=de-db5preorder15d&ref=de_2018giveaway2&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-de');" class="orig-btn"><span>PRO erhalten - 0€</span></a>
				<div class="shadow"></div>
			</div>
			<div class="count-down">
				<strong>6</strong>Tage : 
				<strong>22</strong>Std : 
				<strong>34</strong>Min : 
				<strong>25</strong>Sek : 
				<small>345</small>MS
			</div>
			<div class="footer">
				<dl>
					<dt>Notiz:</dt>
					<dd>* Solche Werbeaktionen können von IObit nach eigenem Ermessen zu jeder Zeitund ohne vorheriger Ankündigung geändert werden.</dd>
				</dl>
				<p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
			</div>
		</div>
	</div>
	<!-- end bottom -->
	<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
	<script>
		function getBuyNum(){
			$.ajax({
				type: "GET",
				url: "<?php echo $pRootUrl;?>callback.php",
				data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reduceTime;?>&r="+Math.random(),
				success: function(packs){
					$('.buy-num').html(packs);
				}
			});
			setTimeout('getBuyNum()', 3000);
		}
		setTimeout('getBuyNum()', 3000);

		$(".reviews .users li").click(function(event) {
			$(this).addClass("active").siblings().removeClass("active");
			$(".reviews .review").eq($(this).index()).addClass("active").siblings().removeClass("active");
		});
		$(document).ready(function() {
			cycleCountdown();
			$('.countDay').animateNumber({
						number: <?php echo $installDays;?>
					},
					5000,
					'linear'
			);
			$('.driver').animateNumber({
						number: <?php echo $driverCount;?>
					},
					3000,
					'linear'
			);
		});

		function cycleCountdown(){
			var datetime = timeCountDown(<?php echo $expireTimestamp;?>);
			if(datetime==false){
				window.location.href='index.php';
			}else {
				d = MApp(2.2).packages.zeroize(datetime[0], 2);
				h = MApp(2.2).packages.zeroize(datetime[1], 2);
				i = MApp(2.2).packages.zeroize(datetime[2], 2);
				s = MApp(2.2).packages.zeroize(datetime[3], 2);
				mi = MApp(2.2).packages.zeroize(datetime[4], 3);
				$('.count-down').each(function () {
					$(this).find('strong').eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
				});
				$('.count-down small').html(mi);
				setTimeout('cycleCountdown()', 1);
			}
		}

		function timeCountDown(startTimestamp) {
			var dateObj = new Date();
			var time = dateObj.getTime().toString().substring(0, 10);
			var remainingTime = startTimestamp - time;
			if (remainingTime > 0) {
				var d = Math.floor(remainingTime / (24 * 60 * 60));
				var h = Math.floor(remainingTime / (60 * 60) % 24);
				var i = Math.floor(remainingTime / 60 % 60);
				var s = Math.floor(remainingTime % 60);
				var mi = 999 - dateObj.getMilliseconds();
				if (mi < 10) {
					mi = '00' + mi;
				} else if (mi < 100) {
					mi = '0' + mi;
				}
				return [d, h, i, s, mi];
			} else {
				return false;
			}
		}
		function clickCount(){
			$.ajax({
				type: "GET",
				url: "dbgive.php",
				data: "action=clickCount&r="+Math.random()
			});
		}
	</script>
</body>
</html>