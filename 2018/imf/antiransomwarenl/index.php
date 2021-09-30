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
	$c_name = 'enimfar' . $date;
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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bespaar 85% op Volledige Online Bescherming tegen Ransomware - IObit Malware Fighter</title>
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
			<h1>Anti-ransomware: Bescherm uw PC en Bestanden</h1>
			<h2>Voorkom dat uw belangrijke bestanden gegijzeld worden door hackers</h2>
			<div class="left-img">
				<img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
			</div>
			<div class="right-message">
				<div class="box">
					<dl class="message">
						<dt>
							<h3>Slechts 
								<div class="countdown">
				          <div class="scroll-tick" ><span>0</span></div>
				          <div class="scroll-tick" ><span>0</span></div>
				        </div>
	      				Pakketten Over Vandaag!
	      			</h3>
							<span>  Een Jaar Bescherming Voor 3 PC’s</span> <del>€79,99</del>
						</dt>
						<dd>
							<span><i></i> Protected Folder</span> <del>€39,95</del> <em>GRATIS</em>
						</dd>
						<dd>
							<span><i></i> AMC Security PRO </span> <del>€19,99</del> <em>GRATIS</em>
						</dd>
					</dl>
					<dl class="price">
						<dt>
							 <b>Slechts</b> <strong>€21,99</strong> <del>€139,93</del>
						</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=nl-imf8amcpf2199&ref=nl_imfar<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1804a-nl');" class="buybtn"><i></i> Activeer Nu</a></dd>
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
			<h2>Wat U Moet Weten</h2>
			<ul>
				<li>
					<h3>Ransomware</h3>
					<p>Een type malware-aanval dat een systeem infecteert, versleutelt of onder controle neemt en losgeld vraagt om weer toegang te kunnen krijgen.</p>
				</li>
				<li>
					<h3>Uw schade bij infectie</h3>
					<p>Diverse geldbedragen, geen toegang tot uw systeem en bestanden, mogelijk schade aan belangrijke persoonlijke bestanden en gegevens, andere ernstige gevolgen.</p>
				</li>
				<li class="last">
					<h3>Beruchtste ransomware</h3>
					<p>Sinds de grote WannaCry aanvallen, is het de trend dat verschillende varianten zoals Petya/GoldenEye en Bad Rabbit steeds vaker voorkomen.</p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>Uw Volledige &amp; Krachtige Oplossing</h2>
		<p>De Anti-ransomware Engine in IObit Malware Fighter PRO beschermt op intelligente wijze alle bestanden op uw pc tegen ongewenste toegang.</p>
		<div class="message-box">
			<dl class="list01">
				<dt>Slimme Anti-ransomware</dt>
				<dd>Wij gebruiken intelligente analyses om elke niet-vertrouwde toegang tot uw bestanden te blokkeren, voordat ze uw gegevens aantasten.</dd>
			</dl>
			<dl class="list02">
				<dt>Grote Database</dt>
				<dd>Tal van ransomware varianten in onze database en onze slimme scan voorkomt het aanpassen, verwijderen en versleutelen van uw persoonlijke gegevens en bestanden.</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				 <b>Slechts</b> <strong>€21,99</strong> <del>€139,93</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=nl-imf8amcpf2199&ref=nl_imfar<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1804a-nl');" class="buybtn"><i></i> Activeer Nu</a></dd>
			<dd class="last"><i></i> 100% 60 Dagen Geldteruggarantie</dd>
		</dl>
	</div>
	<!--end db message-->
	<!--feature-->
	<div class="feature">
		<div class="wrapper">
			<h2>Andere Beschermingen Die U Alleen Bij De PRO Versie Krijgt</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
				<dd><h3>Bitdefender Engine</h3></dd>
				<dd>Onverslaanbare virusdetectie met geavanceerde Bitdefender Anti-virus Engine.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Kluis</h3></dd>
				<dd>Beschermt door u aangewezen mappen tegen ongewenste toegang en de laatste bedreigingen. </dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Camerabescherming</h3></dd>
				<dd>Alarmeert u direct bij pogingen om toegang tot uw camera te krijgen, zodat uw privacy niet wordt geschonden.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
				<dd><h3>Auto Update</h3></dd>
				<dd>Update automatisch naar de laatste versie.</dd>
			</dl>
		</div>
	</div>
	<!--end feature-->
	<!--gift-message-->
	<div class="gift-message">
		<div class="wrapper">
			<h2>85% Korting als u IObit Malware Fighter PRO vandaag activeert</h2>
			<h3>Krijg 2 Extra Beschermingstools (t.w.v. €59,94) helemaal GRATIS</h3>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Protected Folder</strong> <del> €39,95</del> (1 Jaar / 1 PC)
				</dd>
				<dd class="last">Voorkomt het uitlekken van belangrijke bestanden</dd>
			</dl>
			<dl class="right">
				<dt>
					<img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>AMC Security PRO</strong> <del> €19,99 </del> ( 1 Jaar / 1 Device)
				</dd>
				<dd class="last">Houd Uw Android Snel, Veilig en Virusvrij!</dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				 <b>Slechts</b> <strong>€21,99</strong> <del>€139,93</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=nl-imf8amcpf2199&ref=nl_imfar<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1804a-nl');" class="buybtn"><i></i> Activeer Nu</a></dd>
			<dd class="last"><i></i> 100% 60 Dagen Geldteruggarantie</dd>
		</dl>
	</div>
	<div class="review wrapper clearfix">
		<h2>Klant &amp; media beoordelingen</h2>
		<dl class="gelu-batir">
			<dt>
				<img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="">
			</dt>
			<dd>
				<strong>Gelu Batir</strong>
			</dd>
			<dd>Ik ben zeer tevreden met jullie product IObit Malware Fighter. Voordat ik dit product had, had ik veel last van ongewenste verstoringen. Ik kon geen hele film of concert kijken, waar ik erg van houd. Dankzij jullie product verloopt alles nu soepel, veilig en met een goede bescherming. Het programma scant mijn laptop zonder dat het de prestaties beperkt. Ik heb dit product ook aanbevolen aan twee vrienden.</dd>
		</dl>
		<dl class="software">
			<dt>
				<img src="<?php echo getStaticUrl('images/software.png')?>" alt="">
			</dt>
			<dd>
				<strong>Software.Informer</strong>
			</dd>
			<dd>Het programma gebruikt twee engines, de eigen en de Bitdefender engine, en blijkt effectief tegen malware die vergelijkbare tools niet kunnen vinden. Het is daarom goed om deze naast eventuele eigen anti-virussoftware te draaien. Het kan een brede selectie spyware, ransomware, adware, Trojans, wormen, keyloggers en bots detecteren.</dd>
		</dl>
		<dl class="david-cassidy">
			<dt>
				<img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="">
			</dt>
			<dd>
				<strong>David Cassidy</strong>
			</dd>
			<dd>Ik wil al het personeel van IObit hartelijk bedanken voor het harde werk dat zij leveren om de beste programma’s uit te kunnen brengen. Het is een geweldige update die jullie hebben gemaakt. Iedereen die een goed anti-malware en anti-virus programma wil dat het geld ruimschoots waard is, hoeft niet verder te zoeken dan IObit Malware Fighter. Ik zou aanraden andere opties te vergeten en voor de beste optie te gaan: IObit Malware Fighter.</dd>
		</dl>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="award wrapper">
			<h2>Vertrouwd en bekroond door de volgende media</h2>
			<ul class="clearfix">
				<li class="first">
					<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/pc-sm.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/major-geeks.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/pcworld.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/chip.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.softpedia.com/get/System/System-Miscellaneous/IObit-Driver-Booster.shtml?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="">
					</a>
				</li>
				<li class="last">
					<a href="http://driver-booster.updatestar.com/?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/updatestar.png')?>" alt="">
					</a>
				</li>
			</ul>
		</div>
		<dl class="note wrapper">
			<dt>Opmerking:</dt>
			<dd>*.Dergelijke promotionele programma's kunnen zonder voorafgaande kennisgeving worden gewijzigd, van tijd tot tijd naar eigen goeddunken.</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</div>
</body>
</html>