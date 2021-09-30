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
	$c_name = 'deimfar' . $date;
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
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Sparen Sie 82% für mehr Online-Schutz – Sonderangebot für den neuen IObit Malware Fighter 8 | IObit</title>
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
			<a href="https://www.iobit.com/de/index.php" target="_blank" class="logo">IObit</a>
			<h1>Anti-Ransomware: Verhindert Angriffe, Schützt Computer </h1>
			<h2>Schützt wichtige Dateien vor ungewollten Zugriff </h2>
			<div class="left-img">
				<img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
			</div>
			<div class="right-message">
				<div class="box">
					<dl class="message">
						<dt>
							<h3>Nur noch 
								<div class="countdown">
				          <div class="scroll-tick" ><span>0</span></div>
				          <div class="scroll-tick" ><span>0</span></div>
				        </div>
	      				Sicherheitspakete heute verfügbar!
	      			</h3>
							<span>  Ganzjähriger Schutz für 3 PCs</span> <del>59,99€</del>
						</dt>
						<dd>
							<span><i></i> Protected Folder</span> <del>39,95€</del><em>  Gratis </em>
						</dd>
						<dd>
							<span><i></i> AMC Security PRO </span> <del>19,99€</del><em>  Gratis </em>
						</dd>
					</dl>
					<dl class="price">
						<dt>
							 Nur <strong>21,99€</strong> <del>119,93€</del>
						</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=de-imf8amcpf2199&ref=de_imfar<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchasear1805-de')" class="buybtn"><i></i> Jetzt aktivieren</a></dd>
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
			<h2>Dinge, die Sie wissen müssen</h2>
			<ul>
				<li>
					<h3>Ransomware</h3>
					<p>Eine Art von Malware-Angriff, der ein System infiziert, verschlüsselt oder die Kontrolle über ein System übernimmt und Lösegeld fordert, um das System wieder zuzugreifen. </p>
				</li>
				<li>
					<h3> Ihr Verlust nach der Infektion</h3>
					<p>Eine große Menge Lösegeld; kein Zugriff auf Ihre System und Dateien; Möglichkeit der Beschädigung Ihrer wichtigen und persönlichen Dateien und Daten; andere ernste Ergebnisse;</p>
				</li>
				<li class="last">
					<h3>Die notorische Ransomware</h3>
					<p>Seit den berühmten Attacken von WannaCry sind verschiedene Varianten von Ransomware wie Petya / GoldenEye, Bad Rabbit in den letzten zwei Jahren ein wachsender Trend. </p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>Ihr umfassender & starker PC-Schutz</h2>
		<p>Anti-Ransomware-Maschine in IObit Malware Fighter PRO schützt intelligent alle Dateien auf dem PC vor <br> unbefugtem Zugriff.</p>
		<div class="message-box">
			<dl class="list01">
				<dt>Große Datenbank</dt>
				<dd>Zahlreiche Ransomware-Varianten sind in unserer Datenbank gespeichert, und unser Smart-Suche kann verhindern, dass Ihre persönlichen Daten und Dateien versteckt, gelöscht oder verschlüsselt werden. </dd>
			</dl>
			<dl class="list02">
				<dt>Intelligente Anti-Ransomware</dt>
				<dd>Wir verwenden intelligente Analysen, um jeglichen nicht vertrauenswürdigen Zugriff auf wichtige Dateien zu blockieren, bevor sie sich auf Sie auswirken.</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				 Nur  <strong>21,99€</strong> <del>119,93€</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=de-imf8amcpf2199&ref=de_imfar<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchasear1805-de')" class="buybtn"><i></i> Jetzt aktivieren</a></dd>
			<dd class="last"><i></i> 100% 60 Tage Geld-Zurück-Garantie</dd>
		</dl>
	</div>
	<!--end db message-->
	<!--feature-->
	<div class="feature">
		<div class="wrapper">
			<h2>Weiterer Schutz nur in PRO, die Sie erhalten </h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
				<dd><h3>Bitdefender-Maschine</h3></dd>
				<dd>Unschlagbare Virenerkennung mit der fortschrittlichen Bitdefender Anti-Viren-Maschine.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Safe Box</h3></dd>
				<dd>Schützt Ihre bestimmten wichtigen Ordner vor unberechtigtem Zugriff und neuesten Bedrohungen.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Kamera-Wächter</h3></dd>
				<dd>Informiert Sie sofort, wenn es versucht, Ihre Kamera  heimlich zu benutzen, um Ihre Privatsphäre zu stehlen.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
				<dd><h3>Schutz der sensiblen Daten</h3></dd>
				<dd>Fügt einen weiteren Schutz für Ihre sensiblen Daten wie Dokumente, Bilder und Videos hinzu.</dd>
			</dl>
		</div>
	</div>
	<!--end feature-->
	<!--gift-message-->
	<div class="gift-message">
		<div class="wrapper">
			<h2>   82% Rabatt auf IObit Malware Fighter PRO</h2>
			<h3>    Erhalten Sie  2 zusätzliche Schutz-Tools (im Wert von 59,94€) kostenlos</h3>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Protected Folder</strong> <del> 39,95€</del> (1 Jahr/ 1 PC)
				</dd>
				<dd class="last">Besserer Schutz für Ihre wichtigen Dateien</dd>
			</dl>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>AMC Security PRO</strong> <del> 19,99€</del> (1 Jahr / 1 Gerät)
				</dd>
				<dd class="last">Hält Ihr Android schnell, sicher und virenfrei!</dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				 Nur  <strong>21,99€</strong> <del>119,93€</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=de-imf8amcpf2199&ref=de_imfar<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchasear1805-de')" class="buybtn"><i></i> Jetzt aktivieren</a></dd>
			<dd class="last"><i></i>   100% 60 Tage Geld-Zurück-Garantie</dd>
		</dl>
	</div>
	<div class="review wrapper clearfix">
		<h2>Weitere User- und Medien-Bewertungen über die neue Version</h2>
		<dl class="gelu-batir">
			<dt>
				<img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="">
			</dt>
			<dd>
				<strong>Gelu Batir</strong>
			</dd>
			<dd> Ich bin sehr zufrieden mit Ihrem Produkt IObit Maleware Fighter. Ich verwende dieses Produkt, da ich mehrere Probleme mit bösartigen Interferenzen hatte. ich konnte keinen ganzen Film oder kein Konzert anschauen, die ich mag. Dank Ihrem Produkt ist jetzt jede Operation klar, sicher und gut geschützt. Es scannt meinen Laptop, ohne seine Leistung zu beeinträchtigen, und ich habe auch zwei meiner Freunde dieses Produkt empfohlen. Ich danke IObit noch einmal!</dd>
		</dl>
		<dl class="software">
			<dt>
				<img src="<?php echo getStaticUrl('images/software.png')?>" alt="">
			</dt>
			<dd>
				<strong>Software.Informer</strong>
			</dd>
			<dd>Das Programm verfügt über zwei Antiviren-Maschinen von IObit und Bitdefender und scheint wirksam gegen Malware, die nicht von anderen ähnlichen Tools erkannt werden können. Und es kann zusammen mit Ihren Antivirenprogrammen arbeiten. Es kann eine breite Reihe von Spyware, Ransomware, Adware, Trojaner, Würmer, Keylogger und Bots erkennen.</dd>
		</dl>
		<dl class="david-cassidy">
			<dt>
				<img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="">
			</dt>
			<dd>
				<strong>David Cassidy</strong>
			</dd>
			<dd>Danke, dass Sie Malware Fighter herausgebracht haben, es ist ein großartiges Update, das Sie für Ihre Benutzer erstellt haben. Es ist viel schneller beim Scannen und einfach zu bedienen. Für Leute, die wirklich ein gutes Malware- und Antiviren-Programm wollen, ist IObit Malware Fighter preiswert und die best Wahl. Ich würde empfehlen, dass alle Leute die beste Software „IObit Malware Fighter“ benutzen.</dd>
		</dl>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="award wrapper">
			<h2>Weltweite Auszeichnungen</h2>
			<p>Wir sind von den weltweit führenden Medien anerkannt und liefern den richtigen PC-Schutz.</p>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
		</div>
		<dl class="note wrapper">
			<dt>Notiz:</dt>
			<dd>*Daten können auf der Grundlage verschiedener Systeme oder Computer geändert werden.</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</div>
</body>
</html>