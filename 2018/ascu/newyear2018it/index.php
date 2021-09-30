<?php 
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name='frascu'.$date;
	if (!isset($_COOKIE[$c_name])) {
		$packsNum = 49;
		setcookie($c_name, $packsNum, time() + 3600 * 24);
	} else {
		if ($_GET['t'] == 1) {
			$packsNum = $_COOKIE[$c_name];
		}
		else {
			if (intval($_COOKIE[$c_name]) <= 3) {
				setcookie($c_name, 3, time() + 3600 * 24);
				$packsNum = 3;
			} else {
				$packsNum = $_COOKIE[$c_name] - 1;
				setcookie($c_name, $packsNum, time() + 3600 * 24);
				if (rand(1, 100) % 2 == 0) {
					$packsNum++;
				}
			}
		}
	}
	echo $packsNum;
	exit;
}

function microtime_float(){
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float()*1000/20000) - 71300746;
$packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
	echo $packsNum;
	exit;
  }
$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
		'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf'))){
	$refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>Promozione Limitata, sconti fino al 75% su Advanced SystemCare Ultimate – Offerte Speciale di IObit</title>
<meta name="Copyright" content="IObit">
<meta name="Description" content="">
<meta name="Keywords" content="">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>	
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

	<!-- banner start -->
	<div class="banner bg">
		<div class="wrapper">
			<div class="top clearfix">
				<a class="logo fl" href="https://www.iobit.com/it/index.php" target="_blank">
					<img src="<?php echo getStaticUrl('images/logo.png')?>" alt="" />
				</a>
				<div class="safety fr"><img src="<?php echo getStaticUrl('images/safety.png')?>" alt="" /></div>
			</div>
			<ul id="countdown" class="countdown">
			  <li><strong>00</strong>O : </li>
			  <li><strong>00</strong>M : </li>
			  <li><strong>00</strong>S : </li>
			  <li class="last"><strong>000</strong>MS <sup>*</sup></li>
			</ul>
			<h3>Offerta Limitata per gli Utenti Stimati!</h3>
			<h1>75% DI SCONTO</h1>
		</div>
		<p class="subhead">Compra Advanced SystemCare Ultimate e ottieni subito i regali esclusivi!</p>
		<div class="price wrapper">
			<img src="<?php echo getStaticUrl('images/shotbox.png')?>" alt="" />
			<p><strong>€29,99 </strong> <span><del>€129,93</del><b>Risparmia €99,94</b></span></p>
			<a class="buybtn" href="https://www.iobit.com/buy.php?product=it-au11iupf2999&ref=it_au11iupfpurchase1711<?php echo $refStr;?>&refs=it_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3PCiupf1711-it')">
				<i class="all-icons"></i>
				<span>ACQUISTA ORA</span>
			</a>
			<p class="people">
				<i class="all-icons"></i>
				Più di <b>6,494,966</b> acquistati
			</p>
		</div>
	</div>
	<!-- banner end -->

	<!-- payment start -->
	<div class="payment">
		<div class="wrapper"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" /></div>
	</div>
	<!-- payment end -->

	<!-- hightlight start -->
	<div class="hightlight wrapper">
	  <h2>Offre al tuo PC una migliore protezione con il motore <span>Anti-Virus di Bitdefender!</span></h2>
	  <div class="hightbox clearfix">
	    <img class="fl" src="<?php echo getStaticUrl('images/hightlight.png')?>" alt="" />
	    <div class="describe fl">
	      <ul>
	        <li><i class="all-icons">√</i> Protegge il PC contro virus, spyware, ransomware, hacker, e tanti altri</li>
	        <li><i class="all-icons">√</i> Protegge il PC in modo proattivo dagli attacchi ransomware come WannaCry.</li>
	        <li><i class="all-icons">√</i> Protegge la tua privacy online in tempo reale.</li>
	        <li><i class="all-icons">√</i> Accelera, pulisce e ripara i vari problemi del PC in un solo clic.</li>
	        <li><i class="all-icons">√</i> Leggero, veloce e compatibile con altri prodotti di sicurezza.</li>
	      </ul>
	      <img class="service" src="<?php echo getStaticUrl('images/prize-icon.png')?>" alt="" />
	    </div>
	  </div>
	</div>
	<!-- hightlight end -->

	<!-- donation start -->
	<div class="donation">
		<div class="wrapper">
			<h2>SOLO PER GLI UTENTI VIP DI ASC ULTIMATE!</h2>
			<div class="clearfix">
				<div class="list">
					<img class="fl" src="<?php echo getStaticUrl('images/gift-iu.png')?>" alt="" />
					<div class="box fl">
						<h3>IObit Uninstaller 8 PRO</h3>
						<h4><strong>€0 </strong> <del>€29,99</del> 1 PC / 1 Anno </h4>
						<ul>
							<li>
								<i class="all-icons"></i>
								<span>La scelta migliore per disinstallare efficacemente i programmi e plug-in ostinati!</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="list pf">
					<img class="fl" src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="" />
					<div class="box fl">
						<h3>Protected Folder</h3>
						<h4><strong>€0 </strong> <del>€39,95</del> 1 PC / 1 Anno </h4>
						<ul>
							<li>
								<i class="all-icons"></i>
								<span>Blocca e sblocca i file importanti con una sola password</span>
							</li>
							<li>
								<i class="all-icons"></i>
								<span>Protegge i dati importanti dal furto</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- donation end -->

	<!-- centbuy start -->
	<div class="centbuy bg">
		<div class="wrapper">
			<div class="cent-title">
				<h2>Offerta Limitata!</h2>
				<h3>75% di sconto su Advanced SystemCare Ultimate e ottieni i regali esclusivi!</h3>
			</div>
			<div class="price">
				<p><strong>€29,99 </strong> <del>€129,93</del></p>
				<a class="buybtn" href="https://www.iobit.com/buy.php?product=it-au11iupf2999&ref=it_au11iupfpurchase1711<?php echo $refStr;?>&refs=it_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3PCiupf1711-it')">
					<i class="all-icons"></i>
					<span>ACQUISTA ORA</span>
				</a>
				<p class="people">
					<i class="all-icons"></i>
					Più di <b>6,494,966</b> acquistati
				</p>
			</div>
		</div>
	</div>
	<!-- centbuy end -->

	<div class="wrapper">
		<!-- awards start -->
		<div class="awards">
			<h2>Raccomandato  e premiato dai media</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
		</div>
		<!-- awards end -->

		<!-- review start -->
		<div class="review">
		  <div class="content clearfix">
		  	<div class="reviews active">
		  		<h2>Recensioni degli Utenti</h2>
		  		<h3>"Advanced SystemCare Ultimate è Grandioso!"</h3>
		  	  <p>"Ho avuto un problema che metteva sempre nei guai il mio computer. Dopo avere installato Advanced SystemCare Ultimate, non c’è più il problema dei guai. Antivirus è già incluso nel prodotto, non ho bisogno di installarne un altro. È il vincitore! Il mio computer è sempre aggiornato e funziona velocemente. È il programma più eccellente tra gli altri e senza nussun flusso costante di conflitti."</p>
		  	</div>
		  	<div class="reviews">
		  	  <h2>Recensione dei Media</h2>
		  	  <h3>"In conclusione Advanced SystemCare Ultimate è un ottimo prodotto."</h3>
		  	  <p>"In conclusione Advanced SystemCare Ultimate è un ottimo prodotto che unisce le caratteristiche della versione precedente, insieme a quelle di Advanced SystemCare con Antivirus dando vita ad un prodotto nuovo, robusto e dalle eccellenti funzionalità. L’interfaccia grafica di Advanced SystemCare era già accattivante e ben organizzata."</p>
		  	</div>
		  	<div class="reviews">
		  	  <h2>Recensioni degli Utenti</h2>
		  	  <h3>"Vi raccomando Advanced SystemCare Ultimate come programma antivirus, è perfetto!"</h3>
		  	  <p>"Con la versione precedente di Advanced SystemCare Ultimate non ho mai avuto problemi di nessun tipo, né per il sistema né per i malware. Dopo aver aggiornato all’ultima versione, le funzionalità aggiuntive hanno reso il mio PC cinque volte più veloce di prima. Mi piace anche la nuova interfaccia. Vi consiglio caldamente di installare Advanced SystemCare Ultimate come programma antivirus, è eccezionale."</p>
		  	</div>
		  </div>
		  <ul class="handle clearfix">
		    <li>
		    	<img src="<?php echo getStaticUrl('images/rod-garnett.png')?>" alt="" />
		      <p>Rod Garnett</p>
		    </li>
		    <li class="active">
		      <img src="<?php echo getStaticUrl('images/htmlit.png')?>" alt="" />
		      <p>HTML.it</p>
		    </li>
		    <li>
		      <img src="<?php echo getStaticUrl('images/dareen-lim.png')?>" alt="" />
		      <p>Dareen Lim</p>
		    </li>
		  </ul>
		</div>
		<!-- review end -->
	</div>

	<!-- comparison start -->
	<div class="comparison">
	  <div class="wrapper clearfix">
	    <div class="comparison">
	      <h4>Perché scegliere Advanced SystemCare Ultimate 11?</h4>
	      <h5>Una migliore protezione e nessun rallentamento delle prestazioni. Guarda la seguente tabella comparativa</h5>
	      <div class="ctable">
	        <table border="0" cellspacing="0" cellpadding="0" width="100%">
	          <thead>
	          <tr>
	            <th class="text"></th>
	            <th class="blue">
	              <p><span>Advanced SystemCare</span> Ultimate</p>
	            </th>
	            <th>AVG<span>Anti-virus</span></th>
	            <th>Norton Security<span>Deluxe</span></th>
	            <th>Avast! Pro<span>Antivirus</span></th>
	            <th>Microsoft<span>Security Essentials</span></th>
	            <th>McAfee® AntiVirus</th>
	          </tr>
	          </thead>
	          <tbody>
	          <tr>
	            <td class="title first">Percentuale rilevamenti</td>
	            <td class="gray">Molto alta</td>
	            <td>Normale</td>
	            <td>Alta</td>
	            <td>Normale</td>
	            <td>Alta</td>
	            <td>Alta</td>
	          </tr>
	          <tr>
	            <td class="title">Rallentamenti di sistema</td>
	            <td class="gray">No</td>
	            <td>Sì</td>
	            <td>Sì</td>
	            <td>Sì</td>
	            <td>Sì</td>
	            <td>Sì</td>
	          </tr>
	          <tr>
	            <td class="title">Ottimizzazione e pulizia <br /> complete del PC</td>
	            <td class="gray"><i class="tb-icons red">√</i></td>
	            <td><i class="tb-icons">×</i></td>
	            <td><i class="tb-icons">×</i></td>
	            <td><i class="tb-icons">×</i></td>
	            <td><i class="tb-icons">×</i></td>
	            <td><i class="tb-icons">×</i></td>
	          </tr>
	          <tr>
	            <td class="title">Oltre 20 strumenti aggiuntivi per migliorare le prestazioni del PC</td>
	            <td class="gray"><i class="tb-icons red">√</i></td>
	            <td><i class="tb-icons">×</i></td>
	            <td><i class="tb-icons">×</i></td>
	            <td><i class="tb-icons">×</i></td>
	            <td><i class="tb-icons">×</i></td>
	            <td><i class="tb-icons">×</i></td>
	          </tr>
	          </tbody>
	        </table>
	      </div>
	      <dl class="comlist">
	        <dt>
	          <i class="all-icons">√</i>
	          Percentuale di rilevazioni e protezione massima senza rivali
	        </dt>
	        <dd>
	          Basta un clic per spazzare via virus, trojan, worm, spyware, adware e malware più ostinati e nascosti. Advanced SystemCare Ultimate garantisce anche una protezione proattiva, 
	          automatizzata ed efficace contro ogni tipo di minaccia alla sicurezza proveniente da Internet, aggiornando rapidamente il suo database di virus. 
	        </dd>
	      </dl>
	      <dl class="comlist">
	        <dt>
	          <i class="all-icons">√</i>
	          Scopri la sicurezza senza rallentamenti
	        </dt>
	        <dd>
	          Grazie alla nostra tecnologia di sicurezza all’avanguardia, il tuo sistema lavorerà alla massima velocità, senza alcun rallentamento.
	        </dd>
	      </dl>
	      <dl class="comlist">
	        <dt>
	          <i class="all-icons">√</i>
	          Naviga in sicurezza: cerca, scarica e condividi senza timori.
	        </dt>
	        <dd>
	          La tecnologia antivirus proattiva tiene sotto controllo i processi in tempo reale, analizza i file condivisi via email e blocca le potenziali minacce. Grazie al nostro database impareggiabile 
	          di rilevazioni, potrai usare il tuo PC in totale sicurezza.
	        </dd>
	      </dl>
	      <dl class="comlist">
	        <dt>
	          <i class="all-icons">√</i>
	          Ottimizza le prestazioni e scopri un nuovo modo di usare il PC
	        </dt>
	        <dd>
	          Il nostro efficace strumento di messa a punto ti permette di usufruire di tutto il potenziale del tuo computer. Grazie all'ottimizzazione in tempo reale e alla funzione ActiveBoost,
	          le risorse di sistema vengono gestite in maniera intelligente per garantirti un PC velocissimo.
	        </dd>
	      </dl>
	    </div>
	  </div>
	</div>
	<!-- comparison end -->

	<!-- footbuy start -->
	<div class="footbuy">
		<div class="wrapper clearfix">
			<img class="fl" src="<?php echo getStaticUrl('images/foot-shotbox.png')?>" alt="" />
			<div class="right fr">
				<ul id="countdown2" class="countdown">
				  <li><strong>00</strong>O : </li>
				  <li><strong>00</strong>M : </li>
				  <li><strong>00</strong>S : </li>
				  <li class="last"><strong>000</strong>MS <sup>*</sup></li>
				</ul>
				<h2>Offerta Limitata da NON Scappare!</h2>
				<div class="price">
					<p><strong>€29,99 </strong> <del>€129,93</del></p>
					<a class="buybtn" href="https://www.iobit.com/buy.php?product=it-au11iupf2999&ref=it_au11iupfpurchase1711<?php echo $refStr;?>&refs=it_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3PCiupf1711-it')">
						<i class="all-icons"></i>
						<span>ACQUISTA ORA</span>
					</a>
					<p class="people">
						<i class="all-icons"></i>
						Più di <b>6,494,966</b> acquistati
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- footbuy end -->

	<!-- footer start -->
	<div class="footer">
	  <div class="wrapper">
	    <p class="note">
	      Note:<br>
	      Tali promozioni sono soggette periodicamente a modifiche senza preavviso, a nostra esclusiva discrezione. 
	    </p>
	    <p class="copyright">
	      Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati
	    </p>
	  </div>
	</div>
	<!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>