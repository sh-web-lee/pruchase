<?php
error_reporting(0); 
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) -68807174;
$buyNum = number_format($buyNum,0,".",".");

if ($_GET['action'] == 'getPacks'){
	echo $buyNum;
	exit;
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Nutzen Sie IObit Malware Fighter PRO 30 Tage gratis!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
		<script type="text/javascript">
				function decreasingPacks(){
						$.ajax({
								type: "GET",
								url: "30daytrial.php",
								async:true,
								data: "action=getPacks&r="+Math.random(),
								success: function(packs){
										$('#buyNum').html(packs);
										setTimeout('decreasingPacks()', 20000);
								}
						});
				}
				setTimeout('decreasingPacks()', 20000);
		</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
	<!-- header start -->
	<div class="banner">
		<div class="wrapper">
		 <a href="http://www.iobit.com" class="logo" target="_blank">IObit</a>
		 <div class="title">
			<h1>IObit Malware Fighter 8 </h1>
			<h2>haben die Gratis-Vollversion ausprobiert</h2>
		 </div>
		 <div class="content">
			 <div class="left">
				 <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
				 <p><img src="<?php echo $pResUrl; ?>images/people.png" alt=""><strong id="buyNum"><?php echo $buyNum; ?></strong> haben die Gratis-Vollversion ausprobiert</p>
			 </div>
			 <div class="right">
				 <p class="now clearfix"><span class="text">Jetzt nur</span> <span class="price">0€</span></p>
				 <dl>
					 <dt class="family">Nutzen Sie die Chance, die PRO-Version KOSTENLOS auszuprobieren</dt>
					 <dd>0€ zahlen, um 30-Tage-Testversion zu genießen</dd>
					 <dd>Während der 30-Tage-Testzeit kündigen Sie jederzeit</dd>
				 </dl>
				 <p class="leaving">Verlassen Sie diese Seite, werden Sie Ihre Chance verlieren</p>
				 <a class="buybtn" 
				    href="https://www.iobit.com/buy.php?product=de-imf8preorder&ref=de_imf830daytrial<?php echo $refStr;?>&aff=&refs=de_purchase_imf"
				    onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-30daytrial-de');" >
				  	<span class="family">PRO-Version kostenlos nutzen</span>
				 </a>
			 </div>
		 </div>
		</div>
	</div>
	<!-- header end -->
	<div class="trial">
		<dl class="wrapper">
			<dt>Werbebedingungen:</dt>
			<dd>Am Ende der kostenlosen 30-Tage-Testabo, wird Ihre Kreditkarte- oder Paypal-Konto automatisch 21,99€ berechnet. Der 63 % Rabatt auf Originalpreis von 59,95€ für 1 Jahr, 3 PCs ist ein Bonus nur für die vorbestellenden Personen.</dd>
		</dl>
	</div>

	<!-- container start -->
	<div class="main wrapper">
		<div class="enjoy clearfix">
			<h2>Genießen Sie den kostenlosen umfassenden Schutz</h2>
			<div class="clearfix">
				<div class="lists">
					<div class="title">
						<img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" />
						<h3>Doppelschutz von Bitdefender & IObit</h3>
					</div>
					<p>
						Kombiniert leistungsstarke IObit Anti-Malware-Engine mit weltweit führenden
						Bitdefender Anti-Virus-Engine, um Ihnen eine umfassendere Anti-Malware- und
						Antiviren-Sicherheitslösung zu bieten.
					</p>
				</div>
				<div class="lists right">
					<div class="title">
						<img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" />
						<h3>Erkennen, Blockieren und Entfernen von 209.000.000 + Bedrohungen</h3>
					</div>
					<p>
						Dual Engine kann über 209 Millionen versteckte Bedrohungen wie Spyware, Ransomware, Adware, Trojaner, Keylogger, Bots, Würmer und Hijackers tiefer und effizienter erkennen, blockieren und entfernen.    
					</p>
				</div>
				<div class="lists cent">
					<div class="title">
						<img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" />
						<h3>Kamera–Wächter und Anti-Verfolgung</h3>
					</div>
					<p>
						IMF Informiert Sie sofort, wenn ein Programm versucht, Ihre Kamera <br>heimlich zu benutzen, Ihre Privatsphäre zu stehlen, IMF reinigt automatisch schädliche Spuren und schützt ihre sensible Informationen, die Sie online <br>eingeben , wie Bankkonten, E-Mails oder andere soziale Konten.
					</p>
				</div>
				<div class="lists right cent">
					<div class="title">
						<img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" />
						<h3>Schutz der sensitiven Daten</h3>
					</div>
					<p>
						Fügt einen weiteren Schutz basierend auf der Anti-Ransomware-Maschine hinzu, um mehrere Dateitypen und Ordner vor Angreifern zu schützen.      
					</p>
				</div>
				<div class="lists">
					<div class="title">
						<img src="<?php echo getStaticUrl('images/icons05.png')?>" alt="" />
						<h3>Besserer Ordnerschutz</h3>
					</div>
					<p>
						Passwortgeschützte persönliche Daten Ihre persönlichen Daten können <br>getrennt von anderen gespeichert und mit einem benutzerdefinierten <br>Passwort geschützt werden. Niemand kann ohne Erlaubnis Zugang erhalten.
					</p>
				</div>
				<div class="lists right">
					<div class="title">
						<img src="<?php echo getStaticUrl('images/icons06.png')?>" alt="" />
						<h3>Verhindert bösartige Prozesse und Viren von USB </h3>
					</div>
					<p>
						Verhindert effektiv bösartige Prozesse, die im System laufen und Virusinfektionen, die von USB Disk getragen werden.             
					</p>
				</div>

			</div>
		</div>
		<dl class="opt-out">
			<dt><span>Jetzt nur</span> <span class="price">0€</span></dt>
			<dd>
				<a class="buybtn" 
				    href="https://www.iobit.com/buy.php?product=de-imf8preorder&ref=de_imf830daytrial<?php echo $refStr;?>&aff=&refs=de_purchase_imf"
				    onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-30daytrial-de');" >
				  	<span class="family">PRO-Version kostenlos nutzen</span> 
				 </a>
			</dd>
			<dd><span>Während der 30 Tage-Testzeit kündigen Sie jederzeit</span><span>Exklusiver 63% Rabatt wenn die Testversion abläuft</span></dd>
		</dl>
		<div class="media clearfix">
			<h2>Medien Review und Kundenbewertungen</h2>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/chip.png" alt=""></dt>
				<dd><strong>Chip.de</strong> <p>„Der IObit Malware Fighter tritt den Kampf gegen gefährliche Malware für Sie an.“</p></dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir"></dt>
				<dd><strong>Gelu Batir</strong> <p>„Es scannt meinen Laptop, ohne seine Leistung zu beeinträchtigen, während ich auch zwei meiner Freunde dieses Produkt empfohlen habe.“</p></dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/betzwelt.png" alt=""></dt>
				<dd><strong>Netzwelt.de</strong> <p>„Ständige Sicherheitsupdates machen den IObit Malware Fighter zu einem alltagstauglichen Tool, dass allerdings immer in Kombination mit einer vollwertigen Antiviren-Software genutzt werden sollte. “</p></dd>
			</dl>
			<dl class="david">
				<dt><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt=""></dt>
				<dd><strong>David Cassidy</strong> <p>„Es ist viel schneller beim Scannen und einfach zu bedienen.“</p></dd>
			</dl>
		</div>
		<div class="comparison-table wrapper" id="compare">
		 <h2>Probieren Sie die Testversion kostenlos aus, <span>um die Vorteile der PRO-Version weiterhin zu genießen.</span></h2>
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<thead>
					<tr>
						<th class="text" colspan="2">
						 
						</th>
						<th class="itemb">
							<div class="thbg">
								IObit Malware Fighter <br>FREE
							</div>
						</th>
						<th class="itema">
							<div class="thbg">
								IObit Malware Fighter <br> PRO
							</div>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
						<td class="virtue">Anti-Malware mit der neuesten IObit-Malware-Datenbank <sup>Verbessert</sup></td>
						<td class="itemb"><div class="bg bgnone"><span class="mark-icons gray-icon">√</span></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
						<td class="virtue">Erkennt Bedrohungen schnell, die sich in Ihrem Computer verstecken <sup>Verbessert</sup></td>
						<td class="itemb"><div class="bg bgnone"><span class="mark-icons gray-icon">√</span></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
						<td class="virtue">Verhindert Ransomware, Ihre wichtigen Dateien zu verschlüsseln <sup class="red">Neu</sup></td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
						<td class="virtue">Niemand kann ohne Passwort auf Ihre persönlichen Daten zugreifen <sup class="red">Neu</sup></td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
						<td class="virtue">Scannt die herunterdeladenen Dateien und entfernt die Anzeigen für höhere Sicherheit <sup> Verbessert</sup></td>
						<td class="itemb"><div class="bg bgnone"><span class="mark-icons gray-icon">√</span></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
						<td class="virtue">Vollkommende Anti-Malware-Funktion mit IObit-Dual-Core-Maschine <sup> Verbessert</sup></td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
						<td class="virtue">Erkennt über 209.000.000 Bedrohungen mit Bitdefender und IObit-Engine <sup> Verbessert</sup></td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
						<td class="virtue">Bootzeit-Diskschutz gegen bösartige Angriffe mit MBR-Wächter <sup class="red">Neu</sup></td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
						<td class="virtue">Schützt Ihre Kamera vor unbefugtem Zugriff <sup>Verbessert</sup></td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
						<td class="virtue">Umfassender Echtzeitschutz für erstklassige PC Sicherheit <sup>Verbessert</sup></td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
						<td class="virtue six">Verhindert Vireninfektion durch USB-Datenträger</td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
						<td class="virtue">Erkennt bösartige Prozesse, die im RAM laufen</td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
						<td class="virtue">Löschen automatisch die Spuren im Internet mit der Anti-Verfolgung <sup>Verbessert</sup></td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
						<td class="virtue">Läuft intelligent im Hintergrund, ohne Sie zu stören</td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
						<td class="virtue">Automatische Updates auf die neuste Version</td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
					<tr>
						<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_16.png"></td>
						<td class="virtue">Kostenloser 24/7 Technischer Support</td>
						<td class="itemb"><div class="bg"></div></td>
						<td class="itema"><span class="mark-icons">√</span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<!-- container end -->
	<div class="bottom-buy">
		<div class="wrapper clearfix">
			<img src="<?php echo getStaticUrl('images/imf-bottom-box.png')?>" alt="">
			<ul>
				<li>0€ zahlen, um 30-Tage-Testversion zu genießen</li>
				<li>Während der 30 Tage-Testzeit kündigen Sie jederzeit</li>
			</ul>
			<a class="buybtn" 
			   href="https://www.iobit.com/buy.php?product=de-imf8preorder&ref=de_imf830daytrial<?php echo $refStr;?>&aff=&refs=de_purchase_imf"
			   onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-30daytrial-de');" >
			  <span class="family">PRO-Version kostenlos nutzen</span>
			 </a>
		</div>
	</div>
	<div class="product">
		<h2>Produktauszeichnungen</h2>
		<img src="<?php echo getStaticUrl('images/awrad.jpg')?>" alt="">
		<!-- footer start -->
		<div class="footer wrapper">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
		<!-- footer end -->
	</div>
</body>
</html>