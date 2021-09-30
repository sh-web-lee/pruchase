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
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title> Riscatta Driver Booster PRO a costo ZERO in Omaggio agli Utenti – IObit   </title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Play" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<div class="info">
				<h2>Driver Booster 5 PRO</h2>
				<p>Goditi il privilegio esclusivo di mantenere attivo PRO  GRATIS per altri 15 GIORNI!</p>
				<div class="count-down">
					<strong>6</strong>G : 
					<strong>22</strong>O : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
				<div class="btn-zone">
					<a href="https://www.iobit.com/buy.php?product=it-db5preorder15d&ref=it_2018giveawayit&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-givea-it');" class="orig-btn">
						<span>Ottieni PRO a €0</span>
					</a>
					<div class="shadow"></div>
				</div>
				<div class="crowd-count"><span class="buy-num"><?php echo $buyNum;?></span> utenti hanno già attivato l’offerta</div>
			</div>
			<div class="steps clearfix">
				<ul>
					<li>Mantieni Driver Booster 5 PRO a costo ZERO per altri 15 giorni (3 PC)</li>
					<li>Dopo 15 giorni, otterrai uno sconto del 67% (Prezzo scontato: €24.99) su Driver Booster 5 PRO (1 Anno / 3 PC) </li>
					<li>Non dovrai pagare fino allo scadere della versione di prova al termine dei 15 giorni. Puoi cancellare l’ordine in qualsiasi momento.</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end banner -->
	<!-- statistics -->
	<div class="statistics">
		<div class="wrapper">
			<h2>Driver Booster ha installato per te <strong class="driver">57</strong> driver negli scorsi  <strong class="countDay">345</strong> giorni, </h2>
			<p>e ha mantenuto il tuo PC stabile e alle massime prestazioni.</p>
		</div>
	</div>
	<!-- end statistics -->
	<!-- features -->
	<div class="features">
		<div class="wrapper">
			<h2> Continua a godere di tutti i miglioramenti di Driver Booster 5 PRO  <span>e inizia il nuovo anno con un PC ancora più stabile e potente!</span></h2>
			<div class="disp">
				<dlv class="list feat-01">
					<h3>Non più aggiornamenti dei driver uno ad uno</h3>
					<p>Soluzione per il rilevamento e l’aggiornamento globale di tutti i driver.</p>
				</dlv>
				<div class="list feat-02">
					<h3>Download dei driver e aggiornamenti sicuri</h3>
					<p>Back up automatico e creazione di punti di ripristino prima di qualsiasi aggiornamento, in caso di cambiamenti improvvisi.</p>
				</div>
				<div class="list feat-03">
					<h3>Addio ai crash di sistema inaspettati</h3>
					<p>Mantiene tutti i driver sempre aggiornati per assicurarti un PC stabile e sicuro. </p>
				</div>
				<div class="list feat-04">
					<h3>Download del 200% più veloce</h3>
					<p>Velocità incrementata del 200% grazie al download automatico durante i periodi di inattività del sistema, per risparmiare più tempo. </p>
				</div>
				<div class="list feat-05" >
					<h3>Massime prestazioni di gioco garantite</h3>
					<p>Vasto database di componenti di gioco, compresi Nvidia, Realtek, Intel, AMD, Broadcom, VIA, Microsoft Visual C++2017 Redistributable ecc. per assicurarti un’esperienza di gioco più fluida. </p>
				</div>
			</div>
			<div class="cart-zone">
				<h3>Ottieni Subito 15 Giorni di utilizzo Gratis, per riparare & aggiornare facilmente i tuoi driver!</h3>
				<div class="btn-zone">
					<a href="https://www.iobit.com/buy.php?product=it-db5preorder15d&ref=it_2018giveaway1it&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-giveb-it');" class="orig-btn"><span>Ottieni PRO a €0</span></a>
					<div class="shadow"></div>
				</div>
				<div class="count-down">
					<strong>6</strong>G : 
					<strong>22</strong>O : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
			</div>
		</div>
	</div>
	<!-- end features -->
	<div class="review">
	  <div class="wrapper ">
	    <h2>Driver Booster PRO è stato elogiato dai Media più famosi e dagli utenti mondiali</h2>
	    <h3>Scelto da oltre <strong> 200 milioni</strong> di utenti mondiali</h3>
	    <div class="review-message">
	      <dl class="wayne">
	        <dt>
	          <div class="img-box">
	            <h4>Wayne Bowler</h4>
	            <img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="">
	          </div>
	          <div class="line"></div>
	        </dt>
	        <dd>"Driver Booster PRO ha funzionato perfettamente. Facile da usare, intuitivo e informativo. Ora che l'ho scoperto, non lo mollo più... Ottimo lavoro!" – <em>Tradotto da Inglese</em></dd>
	      </dl>
	      <dl class="myo ">
	        <dt>
	          <div class="img-box">
	            <h4>Myo Thuya</h4>
	            <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="">
	          </div>
	          <div class="line"></div>
	        </dt>
	        <dd>“Il mio computer è più veloce e sicuro che negli ultimi 8 mesi con Driver Booster PRO." – <em> Tradotto da Inglese</em></dd>
	      </dl>
	      <dl class="pcmag ">
	        <dt>
	          <div class="img-box">
	            <h4>PC-MAG</h4>
	            <img src="<?php echo $pResUrl; ?>images/pc-mag.png" alt="">
	          </div>
	          <div class="line"></div>
	        </dt>
	        <dd>"IObit fornisce vari software di windows, e Driver Booster PRO, il quale aggiorna automaticamente i driver, è uno dei migliori." – <em>Tradotto da Inglese</em></dd>
	      </dl>
	      <dl class="chip ">
	        <dt>
	          <div class="img-box">
	            <h4>chip</h4>
	            <img src="<?php echo $pResUrl; ?>images/chip.png" alt="">
	          </div>
	          <div class="line"></div>
	        </dt>
	        <dd>"Driver Booster Pro: La funzionalità di download automatico di driver è disponibile solo nella versione Pro." – <em>Tradotto da Tedesco</em></dd>
	      </dl>
	      <dl class="fabio red-round active">
	        <dt>
	          <div class="img-box">
	            <h4>Fabio Tursi</h4>
	            <img src="<?php echo $pResUrl; ?>images/fabio-tursi.png" alt="">
	          </div>
	          <div class="line"></div>
	        </dt>
	        <dd>”Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema.”</dd>
	      </dl>
	      <dl class="vector ">
	        <dt>
	          <div class="img-box">
	            <h4>Vector</h4>
	            <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
	          <div>
	          <div class="line"></div>
	        </dt>
	        <dd>"Finalmente ho trovato Driver Booster Pro, il programma perfetto per mantenere sempre pulito e aggiornato il mio sistema in modo super semplice." - <em>Tradotto da Giapponese</em></dd>
	      </dl>
	      <dl class="adam ">
	        <dt>
	          <div class="img-box">
	            <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="">
	             <h4>Adam Backlund</h4>
	           </div>
	          <div class="line"></div>
	        </dt>
	        <dd>"Consiglio vivamente Driver Booster PRO: mantiene aggiornati i driver rapidamente e facilmente." – <em>Tradotto da Inglese</em></dd>
	      </dl>
	      <dl class="olnet ">
	        <dt>
	          <div class="img-box">
	            <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
	             <h4>01net</h4>
	           <div>
	          <div class="line"></div>
	        </dt>
	        <dd>"Tutte le operazioni possono essere finalizzate con un solo clic, Driver Booster ti aiuta a risparmiare il tuo tempo rendendo il PC più stabile." – <em>Tradotto da Francese</em></dd>
	      </dl>
	      <dl class="olorin ">
	        <dt>
	          <div class="img-box">
	            <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
	             <h4>Olorin 89</h4>
	           </div>
	          <div class="line"></div>
	        </dt>
	        <dd>"Driver Booster è lo strumento di aggiornamento driver che semplifica la vita a tutti."</dd>
	      </dl>
	      <dl class="html ">
	        <dt>
	          <div class="img-box">
	            <img src="<?php echo $pResUrl; ?>images/html-it.png" alt="">
	             <h4>HTML-it</h4>
	          </div>
	          <div class="line"></div>
	        </dt>
	        <dd>"Driver Booster di IObit, ti offre una soluzione dell'aggiornamento dei driver più semplice con la sua più avanzata tecnologia."</dd>
	      </dl>

	    </div>
	  </div>
	</div>
	<!-- bottom -->
	<div class="bottom">
		<div class="wrapper">
			<div class="solgan">
				<p>Perché Esitare?</p>
				<h2>Ottieni subito la versione PRO per un PC fluido e un’esperienza di gioco super veloce!</h2>
			</div>
			<div class="btn-zone">
				<a href="https://www.iobit.com/buy.php?product=it-db5preorder15d&ref=it_2018giveaway2it&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-givec-it');" class="orig-btn"><span>Ottieni PRO a €0</span></a>
				<div class="shadow"></div>
			</div>
			<div class="count-down">
				<strong>6</strong>G : 
				<strong>22</strong>O : 
				<strong>34</strong>M : 
				<strong>25</strong>S : 
				<small>345</small>ms
			</div>
			<div class="footer">
				<dl>
					<dt>Note:</dt>
					<dd>*. Data potrebbe variare in base al sistema o computer.</dd>
					<dd>*. Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
				</dl>
				<p>Copyright © 2005 - 2018 IObit. Tutti i diritti riservati</p>
			</div>
		</div>
	</div>
	<!-- end bottom -->
	<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
	<script>
		$(".review dl").mouseover(function(event) {
			$(this).addClass("active").siblings().removeClass("active")
		});

		$(window).on('scroll', function () {
			if ($(window).scrollTop() > $(".cart-zone").offset().top) {
				$('.review dl').addClass("red-round");
			}else {
				$('.review dl').removeClass("red-round");
				$('.review dl.active').addClass("red-round");
			}
		});

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
	</script>
</body>
</html>