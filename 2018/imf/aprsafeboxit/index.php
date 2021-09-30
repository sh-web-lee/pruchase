<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'itimfsb' . $date;
	if (!isset($_COOKIE[$c_name])) {
		$packsNum = 55;
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			setcookie($c_name, 3, time() + 3600 * 24 * 2);
			$packsNum = 3;
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>Offerta speciale! 85% di sconto sulla protezione raddoppiata per i tuoi file importanti - IObit Malware Fighter 8 nuova versione speciale | IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<h1>Cassetta di Sicurezza: senza password, nessun accesso   </h1>
			<h2>Protezione semplice ma potente per i tuoi dati personali</h2>
			<div class="left-img">
				<img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
			</div>
			<div class="right-message">
				<div class="box">
					<dl class="message">
						<dt>
							<h3>Solo 
								<div class="countdown">
				          <div class="scroll-tick" ><span>0</span></div>
				          <div class="scroll-tick" ><span>0</span></div>
				        </div>
	      				Pacchetti di Sicurezza Rimasti Oggi!      
	      			</h3>
							<span>   Protezione di 3 PC per l'intero anno</span> <del>€59.95</del>
						</dt>
						<dd>
							<span><i></i> Protected Folder</span> <del>€39.95</del><em>    Gratis</em>
						</dd>
						<dd>
							<span><i></i> Smart Defrag 6  </span> <del>€29.99</del><em>    Gratis</em>
						</dd>
					</dl>
					<dl class="price">
						<dt>
							  SOLO  <strong>€19.99</strong> <del>€129.89</del>
						</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=it-imf83pcpfsd1999&ref=it_imfsb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-safebox1805-it');" class="buybtn"><i></i> Attiva Ora</a></dd>
					</dl>
				</div>
				<img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" class="payment">
			</div>
		</div>
	</div>
	<!--end banner-->
	<!--cruces-->
	<div class="cruces">
		<div class="wrapper clearfix">
			<h2>Cose che Devi Sapere</h2>
			<ul>
				<li>
					<h3>Perché c’è bisogno di proteggere i file importanti?</h3>
					<p> I pirati informatici sono in grado di rubare la tua identità per accedere ai tuoi file personali, come i registri finanziari e altri file importanti. Anche i file aziendali conservati sul tuo computer potrebbero essere divulgati per sabotare la tua attività.  </p>
				</li>
				<li class="last">
					<h3>Difendersi dai Ransomware</h3>
					<p>Oltre al furto d'identità, l’attacco di ransomware è un’altra minaccia crescente degna di nota. Il malware limita l'accesso ai tuoi file importanti richiedendo un riscatto da pagare  per decriptarli. Solo l’anno scorso, i ransomware e le sue varianti come WannaCry e Petya hanno colpito milioni di organizzazioni e di utenti.</p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>Potente protezione con password per i tuoi dati personali </h2>
		<p>IObit Malware Fighter 8 PRO consente di tenere separati i file importanti con password per evitare qualsiasi tipo di accesso non autorizzato.</p>
		<div class="message-box">
			<dl class="list01">
				<dt>Scudo della Privacy</dt>
				<dd>È possibile mantenere i file importanti come informazioni personali e file finanziari separati dagli altri file. Nessuno può accedervi senza permesso. </dd>
			</dl>
			<dl class="list02">
				<dt>Nessun attacco Ransomware </dt>
				<dd>Una volta che i file vengono aggiunti alla Cassetta di Sicurezza, sono fuori dalla portata degli hacker. Il ransomware non riuscirebbe a crittografare questi file.</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				  SOLO <strong>€19.99</strong> <del>€129.89</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=it-imf83pcpfsd1999&ref=it_imfsb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-safebox1805-it');" class="buybtn">Attiva Subito la Mia Protezione</a></dd>
			<dd class="last"><i></i>  100% Garanzia di Rimborso entro 60 Giorni</dd>
		</dl>
	</div>
	<!--end db message-->
	<!--feature-->
	<div class="feature">
		<div class="wrapper">
			<h2>Altre Garanzie che Puoi Ottenere Solo con PRO</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
				<dd><h3>Motore Anti-Ransomware</h3></dd>
				<dd>Blocca proattivamente e intelligentemente qualsiasi Ransomware che intende invadere il tuo PC proteggendo i tuoi file.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Motore Bitdefender</h3></dd>
				<dd>Rilevazione di virus imbattibili con il motore Anti-Virus Bitdefender.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Camera Guard</h3></dd>
				<dd>Ti avverte immediatamente di ogni attacco segreto alla tua webcam per tutelare la tua privacy.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
				<dd><h3>Protezione dei Dati Sensibili</h3></dd>
				<dd>Aggiunge un extra strato di protezione per i tuoi dati sensibili come documenti, immagini e video.</dd>
			</dl>
		</div>
	</div>
	<!--end feature-->
	<!--gift-message-->
	<div class="gift-message">
		<div class="wrapper">
			<h2>85% DI SCONTO se Attivi Oggi IObit Malware Fighter PRO</h2>
			<h3>Ottieni 2 strumenti extra di protezione (del valore di €69.94) GRATIS</h3>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Protected Folder</strong> <del> €39.95</del> (1 ANNO / 1 PC)
				</dd>
				<dd class="last">Nessuna perdita di file importanti e privacy assicurata</dd>
			</dl>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Smart Defrag 6</strong> <del> €29.99</del>  (1 ANNO / 1 PC)
				</dd>
				<dd class="last">Offre la migliore deframmentazione del disco e accelera al massimo l'hard driver!</dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				  SOLO <strong>€19.99</strong> <del>€129.89</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=it-imf83pcpfsd1999&ref=it_imfsb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-safebox1805-it');" class="buybtn">Attiva Subito la Mia Protezione</a></dd>
			<dd class="last"><i></i>  100% Garanzia di Rimborso entro 60 Giorni</dd>
		</dl>
	</div>
	<div class="review wrapper clearfix">
		<h2>Recensioni dei media e degli utenti</h2>
		<dl class="gelu-batir">
			<dt>
				<img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="">
			</dt>
			<dd>
				<strong>Gelu Batir</strong>
			</dd>
			<dd>Sono molto soddisfatto con il vostro prodotto – IObit Malware Fighter. Prima di conoscerlo le interferenze maligne mi causavano moltissimi problemi. Grazie al vostro programma ogni operazione è chiara, sicura e ben protetta. IObit Malware Fighter scansiona il mio PC portatile senza influenzare le prestazioni, per questo motivo l’ho consigliato a due dei miei amici. - Tradotto da inglese</dd>
		</dl>
		<dl class="software">
			<dt>
				<img src="<?php echo getStaticUrl('images/software.png')?>" alt="">
			</dt>
			<dd>
				<strong>Software.Informer</strong>
			</dd>
			<dd>Il programma utilizza due motori AV - il proprio e BitDefender – ed è efficace contro i malware impossibili da rilevare con altri strumenti. Un altro vantaggio è che funziona contemporaneamente con il programma standard AV. IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojans, worms, keyloggers e bots. - Tradotto da inglese</dd>
		</dl>
		<dl class="david-cassidy">
			<dt>
				<img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="">
			</dt>
			<dd>
				<strong>David Cassidy</strong>
			</dd>
			<dd>Questo aggiornamento è eccellente per gli utenti. La scansione è molto più veloce ed è facilissimo da usare. Chi cerca un buon programma anti-virus e anti-malware con un buon rapporto qualità-prezzo non deve fare altro che scaricare IObit Malware Fighter. Non accontentatevi, provate il migliore, IObit Malware Fighter. - Tradotto da inglese</dd>
		</dl>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="award wrapper">
			<h2>Premi dei Media </h2>
			<p>Fidati e premiati dai media di livello mondiale negli ultimi dieci anni, è la giusta protezione del PC per te!</p>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
		</div>
		<dl class="note wrapper">
			<dt>Note:</dt>
			<dd>1*. Tali promozioni sono soggette periodicamente a modifiche senza preavviso, a nostra esclusiva discrezione.</dd>
			<dd>2*. I dati potrebbero variare in base al sistema o computer.</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - 2019 IObit. Tutti i diritti riservati</p>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</div>
</body>
</html>