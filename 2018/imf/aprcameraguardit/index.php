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
	$c_name = 'itimfcg' . $date;
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
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>Offerta limitata, 80% di sconto per la protezione online completa - IObit Malware Fighter 6 nuova versione speciale | IObit</title>
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
			<h1>IObit Malware Fighter 6 - Offerta Limitata! </h1>
			<h2>Regala la protezione online omnicomprensiva per te e la tua famiglia!</h2>
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
							<span><i></i> AMC Security PRO </span> <del>€19.99</del><em>    Gratis</em>
						</dd>
					</dl>
					<dl class="price">
						<dt>
							  SOLO  <strong>€19.99</strong> <del>€119.89</del>
						</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=it-imf63pcpfamc1999&ref=it_imfcg&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-cameraguard1805-it');" class="buybtn"><i></i> Attiva Ora</a></dd>
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
					<h3>Camera Guard</h3>
					<p>La webcam non è così sicura come credevi. Molti programmi infatti possono accedere alla camera connessa ad internet in pochi minuti. Le webcam prive di protezione sono indubbiamente soggette a tentativi di hackeraggio. </p>
				</li>
				<li>
					<h3>Sotto la sorveglianza di hacker </h3>
					<p>Una volta colpito, tutto ciò che farai di fronte alla webcam sarà sotto gli occhi di sconosciuti. La tua vita sarà condivisa online e diffusa sulla rete. Una volta preso di mira, la tua privacy non è più al sicuro. </p>
				</li>
				<li class="last">
					<h3>Come difendersi</h3>
					<p>Cambia regolarmente la password di Internet o scegli la protezione di webcam che sia affidabile.</p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>Il Superpotere che Serve alla tua Webcam </h2>
		<p>La Camera Guard di IObit Malware Fighter 6 PRO ti informerà immediatamente non appena un programma tenterà di accedere senza consenso alla tua <br> webcam per spiarti segretamente.</p>
		<div class="message-box">
			<dl class="list01">
				<dt>Blocca gli accessi non autorizzati</dt>
				<dd>Una volta cha la camera è stata usata da un programma non autorizzato, la funzione Camera Guard è in grado di rilevarlo e ti mantiene informato per evitare qualsiasi perdita di privacy.</dd>
			</dl>
			<dl class="list02">
				<dt>Protezione completa </dt>
				<dd>Per garantire una protezione più completa, la Camera Guard ti chiederà conferma ogni qualvolta ci siano programmi che intendono utilizzare la webcam, a meno che clicchi su "ricorda" per i progammi di cui sai che puoi fidarti. </dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				  SOLO <strong>€19.99</strong> <del>€119.89</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=it-imf63pcpfamc1999&ref=it_imfcg&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-cameraguard1805-it');" class="buybtn">Attiva Subito la Mia Protezione</a></dd>
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
				<dd><h3>Motore Bitdefender</h3></dd>
				<dd>Rilevazione di virus imbattibili con il motore Anti-Virus Bitdefender.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Cassetta di Sicurezza</h3></dd>
				<dd>Protezione specifica delle cartelle importanti per prevenire gli accessi non autorizzati e le minacce più recenti.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Cassetta di Sicurezza</h3></dd>
				<dd>Protezione specifica delle cartelle importanti per prevenire gli accessi non autorizzati e le minacce più recenti.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
				<dd><h3>Aggiornamento Automatico</h3></dd>
				<dd>Aggiorna automaticamente alla versione più recente.</dd>
			</dl>
		</div>
	</div>
	<!--end feature-->
	<!--gift-message-->
	<div class="gift-message">
		<div class="wrapper">
			<h2>80% DI SCONTO se Attivi Oggi IObit Malware Fighter PRO</h2>
			<h3>Ottieni 2 strumenti extra di protezione (del valore di €59.94) GRATIS</h3>
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
					<strong>AMC Security PRO</strong> <del> €19.99</del> (1 ANNO / 1 Dispositivo)
				</dd>
				<dd class="last">Mantieni il tuo android veloce, sicuro e libero da virus!</dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				  SOLO <strong>€19.99</strong> <del>€119.89</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=it-imf63pcpfamc1999&ref=it_imfcg&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-cameraguard1805-it');" class="buybtn">Attiva Subito la Mia Protezione</a></dd>
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
		<p class="copyright">Copyright © 2005 - 2018 IObit. Tutti i diritti riservati</p>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</div>
</body>
</html>