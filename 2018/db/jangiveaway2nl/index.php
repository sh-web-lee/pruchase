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
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>€0,- voor Driver Booster 5 PRO! Probeer DB PRO vandaag vrijblijvend uit!</title>
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
				<p>Mis het niet! Exclusief aanbod om de PRO versie 15 DAGEN GRATIS te proberen!</span></p>
				<div class="count-down">
					<strong>6</strong>D : 
					<strong>22</strong>U : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
				<div class="btn-zone">
					<a href="https://www.iobit.com/buy.php?product=nl-db5preorder15d&ref=2018giveawaynl&aff=&refs=nl_purchase_db" onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-nl');" class="orig-btn">
						<span>Ontvang PRO voor €0,-</span>
					</a>
					<div class="shadow"></div>
				</div>
				<div class="crowd-count">Al door <span class="buy-num"><?php echo $buyNum;?></span> personen geactiveerd</div>
			</div>
			<div class="steps clearfix">
				<ul>
					<li>Gebruik Driver Booster 5 PRO (3 PC's) 15 <span>dagen lang voor slechts  €0,-</span></li>
					<li>Na 15 dagen, ontvangt u exclusief 67% Korting <span>(Originele prijs €74,85) op Driver Booster 5 PRO</span> (1 Jaar / 3 PC’s)</li>
					<li>U wordt niet gefactureerd binnen de proefpe-<span>riode van 15-dagen. U kunt de bestelling op</span> elk gewenst moment annuleren</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end banner -->
	<!-- statistics -->
	<div class="statistics">
		<div class="wrapper">
			<h2>Driver Booster heeft de afgelopen <strong class="countDay">345</strong> dagen al <strong class="driver">57</strong> drivers bijgewerkt.</h2>
		</div>
	</div>
	<!-- end statistics -->
	<!-- features -->
	<div class="features">
		<div class="wrapper">
			<h2>Ga nu verder om te profiteren van alle voordelen van Driver Booster 5 PRO. <span>Wij garanderen u een stabiele PC in 2018!</span></h2>
			<div class="disp">
				<dlv class="list feat-01">
					<h3>Werkt alle Drivers in een keer bij</h3>
					<p>Detecteert &amp; Update alle drivers met maar 1-klik.</p>
				</dlv>
				<div class="list feat-02">
					<h3>Veilig &amp; Snel updaten</h3>
					<p>Maakt automatisch een herstelpunt aan voordat drivers worden bijgewerkt.</p>
				</div>
				<div class="list feat-03">
					<h3>200% Grotere database</h3>
					<p>Vindt alle verouderde &amp; zeldzame drivers die allemaal WHQL getest zijn.</p>
				</div>
				<div class="list feat-04">
					<h3>200% Sneller downloaden</h3>
					<p>Download en installeert drivers wanneer het systeem niet actief is.</p>
				</div>
				<div class="list feat-05" >
					<h3>UItieme gamingprestaties</h3>
					<p>Update de nieuwste spelcomponenten waarom DirectX®, PhysX®, Visual C++ 2017 Redistributable, etc met maar 1-klik.</p>
				</div>
			</div>
			<div class="cart-zone">
				<h3>Ontvang 15 dagen gratis om verouderde drivers te installeren &amp; repareren.</h3>
				<div class="btn-zone">
					<a href="https://www.iobit.com/buy.php?product=nl-db5preorder15d&ref=2018giveaway1nl&aff=&refs=nl_purchase_db" onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-nl');" class="orig-btn"><span>Ontvang PRO voor €0,-</span></a>
					<div class="shadow red"></div>
				</div>
				<div class="count-down">
					<strong>6</strong>D : 
					<strong>22</strong>U : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
			</div>
		</div>
	</div>
	<!-- end features -->
	<!-- awards -->
	<div class="awards">
		<div class="wrapper">
			<h2>Vertrouwd en bekroond door de volgende media</h2>
			<img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
		</div>
	</div>
	<!-- end awards -->
	<!-- reviews -->
	<div class="reviews">
		<div class="wrapper">
			<h2>Driver Booster 5 PRO wordt vertrouwd en bekroond door de beste media wereldwijd</h2>
				<div class="review active">
					<h3>Media recensie</h3>
					<p>
						“IObit maakt meerdere programma's maar Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt <span>meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat het erg</span> overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver <span>Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”</span>
					</p>
				</div>
				<div class="review">
					<h3>Klantbeoordeling</h3>
					<p>
						"Met Driver Booster werk ik alle drivers gemakkelijk bij. Daarnaast lost dit programma allerlei foutmeldingen op zoals geen geluid, <span>netwerkfouten, apparaat fouten enz. Voordat ik dit programma downloadde, geloofde ik niet dat dit programma mijn computer nog kon</span> redden, maar nu ben ik helemaal overtuigd en loopt mijn PC weer als nieuw."
					</p>
				</div>
				<div class="review">
					<h3>Klantbeoordeling</h3>
					<p>
						"Driver Booster is een geweldige applicatie. Voor iemand die veel applicaties en drivers op de computer heeft staan maar geen tijd heeft om <span>deze bij te werken, raad ik Driver Booster aan iedereen die gemakkelijk en snel zijn drivers wil bijwerken direct aan."</span>
					</p>
				</div>
				<div class="review">
					<h3>Klantbeoordeling</h3>
					<p>
						"Dit is een van de beste driver updater programma's op de markt. Microsoft heeft zelfs gesuggereerd dat updates voor mijn drivers niet <span>zouden werken met mijn systeem. Maar dit programma vind alle updates die ik nodig heb. Het werkt perfect. Het is eenvoudig te gebruiken,</span> informatief en intuïtief. Deze software zal altijd in mijn toolbox blijven. Goed gedaan!"
					</p>
				</div>
				<ul class="users clearfix">
					<li class="active">
						<img src="<?php echo $pResUrl; ?>images/pcmag.png" alt="PC Magazine">
						<span>PC Magazine</span>
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
				<p>Probeert u het uit?</p>
				<h2>Installeer de PRO versie nu voor een soepele PC en de beste graphics tijdens het gamen!</h2>
			</div>
			<div class="btn-zone">
				<a href="https://www.iobit.com/buy.php?product=nl-db5preorder15d&ref=2018giveaway2nl&aff=&refs=nl_purchase_db" onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-nl');" class="orig-btn"><span>Ontvang PRO voor €0,-</span></a>
				<div class="shadow"></div>
			</div>
			<div class="count-down">
				<strong>6</strong>D : 
				<strong>22</strong>U : 
				<strong>34</strong>M : 
				<strong>25</strong>S : 
				<small>345</small>ms
			</div>
			<div class="footer">
				<dl>
					<dt>Opmerking:</dt>
					<dd>*.Dergelijke promotionele programma's kunnen zonder voorafgaande kennisgeving worden gewijzigd, van tijd tot tijd naar eigen goeddunken.</dd>
					<dd>*.Data kan variëren afhankelijk van verschillende computer systemen.</dd>
				</dl>
				<p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
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