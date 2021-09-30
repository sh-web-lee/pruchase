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
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title> 84% korting op IMF PRO, IObit Malware Fighter PRO detecteert en Blokkeert Ransomaware & Malware!</title>
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
		<h1>FlASH SALE</h1>
		<ul class="date"> 
			<li>00</li>
			<li>00</li>
			<li>00</li>
			<li>00</li>
		</ul>
		<h2>Bespaar <span>84%</span> op IObit Malware Fighter PRO en ontvang een <span>GRATIS </span>familiepakket!</h2>
		<div class="box three-box clearfix">
			<h3>Familiepakket</h3>
			<img src="<?php echo $pResUrl; ?>images/imf-box.png" alt="" class="img-box">
			<dl class="message">
				<dt>
					<h4>IObit Malware Fighter 5 Pro</h4>
					<strong>3</strong> PC’s, 1 jaar 
				</dt>
				<dd><i></i> Protected Folder </dd>
				<dd><i></i> Smart Defrag Pro </dd>
			</dl>
			<dl class="price">
				<dt><strong>21<b>99</b></strong> <del>139,93</del></dt>
				<dd><a href="http://www.iobit.com/buy.php?product=nl-imf5sdpf2199&ref=nl_imf53pcsdpf2199purchase1801<?php echo $refStr;?>&aff=&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801-nl')" class="buybtn"><i></i>Nu Activeren</a></dd>
				<dd>Al  <span id="packs"><?php echo $buyNum;?></span>  keer geactiveerd</dd>
			</dl>
		</div>
		<div class="box one-box clearfix">
			<h3>Basispakket </h3>
			<img src="<?php echo $pResUrl; ?>images/imf.png" alt="" class="img-box">
			<dl class="message">
				<dt>
					<h4>IObit Malware Fighter 5 Pro</h4>
					1 PC, 1 jaar
				</dt>
			</dl>
			<dl class="price">
				<dt><strong>19<b>95</b></strong> <del> 39,95</del></dt>
				<dd><a href="http://www.iobit.com/buy.php?product=nl-imf51pc1995&ref=nl_imf51y1pc1995purchase1801<?php echo $refStr;?>&aff=&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801-nl')" class="buybtn"><i></i>Nu Activeren</a></dd>
			</dl>
		</div>
	</div>
</div>
<div class="payment wrapper clearfix">
	<dl>
		<dt>Betaalmethoden</dt>
		<dd><img src="<?php echo $pResUrl; ?>images/paypal.png" alt=""></dd>
	</dl>
	<dl>
		<dt>60 Dagen niet goed-geld- <br> terug-garantie</dt>
		<dd><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dd>
	</dl>
	<dl>
		<dt>Certificaat</dt>
		<dd><img src="<?php echo $pResUrl; ?>images/opswat.png" alt=""></dd>
	</dl>
</div>
<div class="imf-message wrapper clearfix">
	<h2>Een aantal voordelen van de IObit Malware Fighter PRO versie</h2>
	<div class="inner">
		<img src="<?php echo $pResUrl; ?>images/imf-message.jpg" alt="" class="box">
		<ul>
			<li class="one">Scant uw gedownloade bestanden</li>
			<li class="two">Blokkeert ongewenste reclames tijdens het surfen</li>
			<li class="three">Zorgt ervoor dat uw camera niet beheerd kan worden <br> door onbevoegden </li>
			<li class="four">Detecteert en verwijdert alle soorten ransomware </li>
			<li><a href="javascript:void(0);">Meer informative over de PRO versie >></a></li>
		</ul>
	</div>	
</div>
<div class="gift-box wrapper clearfix">
	<dl>
		<dt><img src="<?php echo $pResUrl; ?>images/pf-box.jpg" alt=""></dt>
		<dd>Bescherm uw mappen en bestanden tegen diefstal en fraude</dd>
		<dd>Beveilig uw persoonlijke gegevens, data & privacy</dd>
	</dl>
	<dl>
		<dt><img src="<?php echo $pResUrl; ?>images/sd-box.jpg" alt=""></dt>
		<dd>Sneller toegang tot al uw bestanden</dd>
		<dd>100% snellere opstarttijd </dd>
		<dd>Snelle en veilige defragmentatie</dd>
	</dl>
</div>
<div class="award">
	<div class="wrapper">
		<h2>Vertrouwd en bekroond door de volgende media</h2>
		<img src="<?php echo getStaticUrl('images/awrad.png')?>" alt="" />
	</div>
</div>
<div class="review wrapper">
	<h2>Klant & media beoordelingen</h2>
	<div class="clearfix">
		<dl class="bob">
			<dt><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"></dt>
			<dd>
				<h3>Bob Bassett</h3>
				<p>"We gebruikten tientallen verschillende programma's om onze systemen soepel te laten lopen en te beveiligen. Het duurde elke week uren om alle programma’s te laten lopen. Met IObit Malware Fighter PRO en Advanced SystemCare PRO, hebben we eindelijk alles wat we nodig hebben op één plek en gaat het scannen in een fluitje van een cent. We hebben geen problemen meer gehad sinds we jullie producten gebruiken!”</p>
			</dd>
		</dl>
		<dl class="chip">
			<dt><img src="<?php echo $pResUrl; ?>images/betanews.png" alt=""></dt>
			<dd>
				<h3>betanews</h3>
				<p>"IObit Malware Fighter PRO is een compleet beveiligingspakket. Het wiedt onkruid als spyware, trojans en andere narigheid allemaal uit. IObit Malware Fighter verzekert dat er geen kwaadaardige processen gestart worden in Windows. Browser Guard verzekert u dat software geen kwaadaardige aanpassingen maakt in uw webbrowser. File Guard verzekert onbekende bestanden geen schade toebrengen. USB Guard zorgt dat virussen niet via de USB poort verspreid worden en IMF biedt nog heel veel meer."</p>
			</dd>
		</dl>
		<dl class="peter">
			<dt><img src="<?php echo $pResUrl; ?>images/peter-stoffers.png" alt="Peter Stoffers"></dt>
			<dd>
				<h3>Peter Stoffers</h3>
				<p>"Enkele jaren geleden heeft een vriend mij getipt over IObit Malware Fighter. In het begin was ik sceptisch, maar na het installeren werd het direct mijn favoriete anti-malware programma. Het is zeer eenvoudig te gebruiken. In de afgelopen jaren heeft het al verschillende bedreigingen gedetecteerd en verwijderd. In samenwerking met andere IObit programma's, bijvoorbeeld ASC, biedt het een zeer goede bescherming van mijn PC. Ik heb nu al meerdere programma's van IObit aan al mijn vrienden en familie aangeraden."</p>
			</dd>
		</dl>
	</div>
</div>
<div class="comparison wrapper" id="compare">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
			<tr>
				<th class="text" colspan="2">
					Bekijk wat de PRO versie voor u kan betekeken:
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
			  <td class="virtue">Basis Anti-Malware Functie <sup class="green"> Verbeterd</sup></td>
			  <td class="space"></td>
			  <td class="itemb gray"><img src="<?php echo $pResUrl; ?>images/gray-mask.png"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
			  <td class="virtue">Tot wel 130% sneller scanproces <sup class="green">Verbeterd</sup></td>
			  <td class="space"></td>
			  <td class="itemb gray"><img src="<?php echo $pResUrl; ?>images/gray-mask.png"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
			  <td class="virtue">Beveiliging tijdens downloaden & AdBlocker voor een veilige online omgeving   <sup > Nieuw</sup></td>
			  <td class="space"></td>
			  <td class="itemb gray"><img src="<?php echo $pResUrl; ?>images/gray-mask.png"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
			  <td class="virtue">Basis bescherming in real-time tegen kwaadaardig gedrag <sup> Nieuw</sup></td>
			  <td class="space"></td>
			  <td class="itemb gray"><img src="<?php echo $pResUrl; ?>images/gray-mask.png"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
			  <td class="virtue">Voorkom infecties van de nieuwste varianten van WannaCry en <br> EternalBlue ransomware</td>
			  <td class="space"></td>
			  <td class="itemb "></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
			  <td class="virtue">Geavanceerde bescherming met de Bitdefender Anti-Virus Engine  <sup class="green"> Verbeterd</sup></td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
			  <td class="virtue">Anti-Malware bescherming met de unieke Dual Core Engine  <sup class="green"> Verbeterd</sup></td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
			  <td class="virtue">Beveilig uw webcam tegen ongeautoriseerde toegang <sup>Nieuw</sup></td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
			  <td class="virtue">Geavanceerde bescherming in real-time voor ultieme bescherming <sup class="green">Verbeterd</sup></td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
				<td class="virtue">Voorkom geïnfecteerd te raken via de USB-aansluiting</td>
				<td class="space"></td>
				<td class="itemb"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
			  <td class="virtue">Detecteert schadelijke processen in RAM</td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
			  <td class="virtue">Automatisch wissen van uw sporen online met de Anti-Browser tracking </td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
			  <td class="virtue">Detecteert en analyseert kwaadaardig gedrag</td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
			  <td class="virtue">Werkt op de achtergrond</td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr>
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
			  <td class="virtue">Automatische updates</td>
			  <td class="space"></td>
			  <td class="itemb"></td>
			  <td class="space"></td>
			  <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-mask.png"></td>
			</tr>
			<tr class="last">
			  <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_16.png"></td>
			  <td class="virtue">Gratis 24/7 klantenservice</td>
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
		<dt>Opmerking:</dt>
		<dd>*.Dergelijke promotionele programma's kunnen zonder voorafgaande kennisgeving worden gewijzigd, van tijd tot tijd naar eigen goeddunken.</dd>
		<dd>*.Data kan variëren afhankelijk van verschillende computer systemen.</dd>
	</dl>
	<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
</div>
<div class="backtotop">
	<div class="wrapper">
		<div class="box">Terug naar boven<span><i></i></span></div>
	</div>
</div>
<div class="floatlayer" id="floatlayer">
		<div class="wrapper clearfix">
			<ul>
				<li data-url="http://www.iobit.com/buy.php?product=nl-imf51pc1995&ref=nl_imf51y1pc1995purchase1801<?php echo $refStr;?>&aff=&refs=nl_purchase_imf">
					<span class="name">
						<i></i>1 jaar, 1 PC 
					</span>
					<span> slechts <strong>19<span>95</span>  </strong> van <del>39,95</del></span>
				</li>
				<li class="active" data-url="http://www.iobit.com/buy.php?product=nl-imf5sdpf2199&ref=nl_imf53pcsdpf2199purchase1801<?php echo $refStr;?>&aff=&refs=nl_purchase_imf">
					<span class="name">
						<i></i>1 jaar, 3 PC’s<b>+ 2 gratis producten</b>
					</span>
					<span>slechts <strong>21<span>99</span></strong> van  <del>139,93</del></span>
				</li>
			</ul>
			<a class="buybtn" href="http://www.iobit.com/buy.php?product=nl-imf5sdpf2199&ref=nl_imf53pcsdpf2199purchase1801<?php echo $refStr;?>&aff=&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801-nl')">
				Nu Activeren
			</a>
		</div>
	</div>
</body>
<script type="text/javascript" src="<?php echo $pResUrl; ?>script/script.js"></script>
</html>