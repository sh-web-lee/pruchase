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
$reduceNum=150829348;
$reTime=10;
$buyNum = number_format(ceil(microtime_float() * 1000 / (1000*$reTime)) -$reduceNum);

$packsNum = ceil(microtime_float()*2000/20000);
$packsNum = 360-($packsNum%360);
if ($_GET['action'] == 'getPacks'){
	echo $packsNum;
	exit;
}

$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
		'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
		'trayusbguard','traycameraguard','traytrial','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
		'ffaut','ffcgt','ffupt'))){
	$refStr.='-'.$_GET['ref'];
}

if(in_array($_GET['pop'],array('x_imf'))){
	$refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Sparen Sie bis zu 83% auf IObit Malware Fighter Pro.</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo $pResUrl; ?>style/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<script>
		function getBuyNum(){
			$.ajax({
				type: "GET",
				url: "<?php echo $pRootUrl;?>callback.php",
				data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
				success: function(packs){
					$('#packs').html(packs);
					setTimeout('getBuyNum()', 10000);
				}
			});
		}
		setTimeout('getBuyNum()', 10000);
</script>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="header">
	<div class="wrapper clearfix">
		<a href="http://www.iobit.com" target="_blank" class="logo">IObit</a>
		<h1>DCAL DES TAGES</h1>
		<ul class="date">
			<li>00</li>
			<li>00</li>
			<li>00</li>
			<li>00</li>
		</ul>
		<h2>Sparen Sie bis zu <span>83%</span> auf IObit Malware Fighter Pro &amp; erhalten Sie zwei Geschenke für das Familienpaket <span>GRATIS!</span></h2>
		<div class="box three-box clearfix">
			<h3>Familienpaket</h3>
			<img src="<?php echo $pResUrl; ?>images/imf-box.png" alt="" class="img-box">
			<dl class="message">
				<dt>
					<h4>IObit Malware Fighter 5 Pro</h4>
					<strong>3</strong> Computer, 1 Jahr
				</dt>
				<dd><i></i> Protected Folder </dd>
				<dd><i></i> Smart Defrag Pro </dd>
			</dl>
			<dl class="price">
				<dt><strong>21,99€</strong> <del>129,80€</del></dt>
				<dd><a href="http://www.iobit.com/buy.php?product=de-imf53pcsdpf2199&ref=de_imf5sdpfpurchase1801<?php echo $refStr;?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201801-de')" class="buybtn"><i></i>JETZT KAUFEN</a></dd>
				<dd> <span id="packs"><?php echo $buyNum;?></span>  Deals verkauft</dd>
			</dl>
		</div>
		<div class="box one-box clearfix">
			<h3>Einzelpaket </h3>
			<img src="<?php echo $pResUrl; ?>images/imf.png" alt="" class="img-box">
			<dl class="message">
				<dt>
					<h4>IObit Malware Fighter 5 Pro</h4>
					1 Computer, 1 Jahr
				</dt>
			</dl>
			<dl class="price">
				<dt><strong>19,99€</strong> <del> 39,95€</del></dt>
				<dd><a href="http://www.iobit.com/buy.php?product=de-imf51pc1999&ref=de_imf51pcpurchase1801<?php echo $refStr;?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201801-de')" class="buybtn"><i></i>JETZT KAUFEN</a></dd>
			</dl>
		</div>
	</div>
</div>
<div class="payment wrapper clearfix">
	<dl>
		<dt>Akzeptierte Zahlungsmethoden</dt>
		<dd><img src="<?php echo $pResUrl; ?>images/paypal.png" alt=""></dd>
	</dl>
	<dl>
		<dt>Geld-zurück-Garantie</dt>
		<dd><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dd>
	</dl>
	<dl>
		<dt>Zertifizierung</dt>
		<dd><img src="<?php echo $pResUrl; ?>images/opswat.png" alt=""></dd>
	</dl>
</div>
<div class="imf-message wrapper clearfix">
	<h2>IMF ist eine der besten Sicherheitslösungen für Ihren Computer!</h2>
	<div class="inner">
		<img src="<?php echo $pResUrl; ?>images/imf-message.jpg" alt="" class="box">
		<dl>
			<dt>Was kann IObit Malware Fighter 5 Pro?</dt>
			<dd class="one">Scannt Ihre herunterladenen Dateien</dd>
			<dd class="two">Löscht unerwünschte Browser-Werbung</dd>
			<dd class="three">Hält Ihre Kamera von unbefugter Nutzung ab</dd>
			<dd class="four">Erkennt und entfernt alle Arten von Ransomware </dd>
			<dd><a href="javascript:void(0);">Klicken Sie hier, um mehr Pro-Funktionen zu sehen</a></dd>
		</dl>
	</div>	
</div>
<div class="gift-box wrapper clearfix">
	<dl>
		<dt><img src="<?php echo $pResUrl; ?>images/pf-box.jpg" alt=""></dt>
		<dd>Das Fortschrittlichste und am einfachsten zu benutzende Ordner-Schutzwerkzeug</dd>
		<dd>Machen Sie sich keine Sorgen um Datendiebstahl aus böswilligen Quellen</dd>
	</dl>
	<dl>
		<dt><img src="<?php echo $pResUrl; ?>images/sd-box.jpg" alt=""></dt>
		<dd>Viel schnellerer Dateizugriff</dd>
		<dd>Bis zu 100%* schnellerer Systemstart </dd>
		<dd>Sichere & automatische Defragmentierung</dd>
	</dl>
</div>
<div class="award">
	<div class="wrapper">
		<h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
		<img src="<?php echo getStaticUrl('images/awrad.png')?>" alt="" />
	</div>
</div>
<div class="review wrapper">
	<h2>Bewertungen</h2>
	<div class="clearfix">
		<dl class="bob">
			<dt><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"></dt>
			<dd>
				<h3>„Seitdem wir ihre Produkte nutzen, haben wir keine Probleme mehr. “</h3>
				<h3>-Bob Bassett</h3>
			</dd>
		</dl>
		<dl class="chip">
			<dt><img src="<?php echo $pResUrl; ?>images/chip.png" alt=""></dt>
			<dd>
				<h3>„Um sich vor Angriffen zu schützen reicht die Free-Version nicht aus.“</h3>
				<p>„Allerdings erhalten Sie erst durch die kostenpflichtige Pro-Version einen erweiterten Malware-Schutz sowie automatische Updates. Eine weitere Funktion, die Sie erst nach dem Upgade zur Pro-Version erhalten, ist der Schutz gegen Ransomware.“</p>
				<h3>-Chip.de</h3>
			</dd>
		</dl>
		<dl class="peter">
			<dt><img src="<?php echo $pResUrl; ?>images/peter-stoffers.png" alt="Peter Stoffers"></dt>
			<dd>
				<h3>„Der IMF findet alle Probleme als Erster und blockiert diese.“</h3>
				<h3>-Peter Stoffers</h3>
			</dd>
		</dl>
	</div>
</div>
<div class="comparison wrapper" id="compare">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
			<tr>
				<th class="text" colspan="2">
					Welche Vorteile bietet Ihnen die PRO Edition
				</th>
				<th class="space"></th>
				<th class="itemb">IObit Malware Fighter <br> FREE</th>
				<th class="space"></th>
				<th class="itema">IObit Malware Fighter <br> PRO</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			  <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
			  <td class="virtue">Grundlegende Anti-Malware Funktion <sup> VERBESSERT</sup></td>
			  <td class="space"></td>
			  <td class="itemb gray"><img src="<?php echo $pResUrl; ?>images/gray-mask.png"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
			  <td class="virtue">Scannt bis zu 130% schneller um aktive Bedrohungen rasch zu finden <sup>VERBESSERT</sup></td>
			  <td class="space"></td>
			  <td class="itemb gray"><img src="<?php echo $pResUrl; ?>images/gray-mask.png"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
			  <td class="virtue">Verbesserter Schutz durch Herunterladeschutz und Anzeigenentfernung  <sup class="green">NEU</sup></td>
			  <td class="space"></td>
			  <td class="itemb gray"><img src="<?php echo $pResUrl; ?>images/gray-mask.png"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
			  <td class="virtue">Vollständige Anti-Malware Funktion mit IObit Anti-Malware Engine <sup>VERBESSERT</sup></td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
			  <td class="virtue">Erweiterter Bedrohungsschutz mit Bitdefender Antivirus Engine  <sup>VERBESSERT</sup></td>
			  <td class="space"></td>
			  <td class="itemb "></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
			  <td class="virtue">Schützen Sie Ihren PC &amp; Vermögen vor Ransomware-Angriffen <sup class="green">NEU</sup></td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
			  <td class="virtue">Schützt Ihre Kamera vor unbefugtem Zugriff  <sup class="green"> NEU</sup></td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
			  <td class="virtue">Umfassender Echtzeitschutz für erstklassige PC Sicherheit  <sup>VERBESSERT</sup></td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
			  <td class="virtue">Verhindert Vireninfektion durch USB-Datenträger</td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
				<td class="virtue">Erkennt bösartige Prozesse, die im RAM laufen</td>
				<td class="space"></td>
				<td class="itemb"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
			  <td class="virtue">Erkennt Gefährdungen durch die Analyse böswilliger Aktionen</td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
			  <td class="virtue">Arbeitet intelligent im Hintergrund ohne Sie zu stören</td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
			  <td class="virtue">Automatische Updates auf die neuste Version</td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr class="last">
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
			  <td class="virtue">Kostenloser technischer Support 24/7</td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="footer">
	<dl class="annotation wrapper">
		<dt>Notiz:</dt>
		<dd>* Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
		<dd>* Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
	</dl>
	<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
</div>
<div class="backtotop">
	<div class="wrapper">
		<div class="box">Nach oben<span><i></i></span></div>
	</div>
</div>
<div class="floatlayer" id="floatlayer">
		<div class="wrapper clearfix">
			<ul>
				<li data-url="http://www.iobit.com/buy.php?product=de-imf51pc1999&ref=de_imf51pcpurchase1801<?php echo $refStr;?>&refs=de_purchase_imf" class="">
					<span class="name">
						<i></i>1 Jahr, 1 PC
					</span>
					<span><strong>19,99€ </strong> statt <del>39,95€</del></span>
				</li>
				<li class="active" data-url="http://www.iobit.com/buy.php?product=de-imf53pcsdpf2199&ref=de_imf5sdpfpurchase1801<?php echo $refStr;?>&refs=de_purchase_imf">
					<span class="name">
						<i></i>1 Jahr, 3 PCs<b>+Geschenke</b>
					</span>
					<span><strong>21,99€ </strong> statt <del>129,80€</del></span>
				</li>
			</ul>
			<a class="buybtn" href="http://www.iobit.com/buy.php?product=de-imf53pcsdpf2199&ref=de_imf5sdpfpurchase1801<?php echo $refStr;?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201801-de');">
				JETZT KAUFEN
			</a>
		</div>
	</div>
</body>
<script type="text/javascript" src="<?php echo $pResUrl; ?>script/script.js"></script>
</html>