<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$buyNum = ceil(microtimeFloat() * 1000 / 20000) - 76400174;
$buyNum = number_format($buyNum);

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if (in_array($_GET['pop'], array('x_asc', 'xr_sdpasc', 'xr_dbpasc'))) {
    $refStr .= '-' . $_GET['pop'];
}
if (in_array($_GET['type'], array('pro', 'giveawayexp'))) {
    $refStr .= '-' . $_GET['type'];
}
if (in_array($_GET['to'], array('event1', 'ascrenew'))) {
    $refStr .= '-' . $_GET['to'];
}
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-l' . $_GET['litype'] . '-e' . $_GET['expd'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>75% Korting op een Schone en Snelle PC met Advanced SystemCare PRO - IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<div class="banner">
	 	<div class="wrapper">
	 		<a href="https://www.iobit.com/nl/" target="_blank" class="logo">IObit</a>
			<h1>Speciale Kerstaanbieding</h1>
			<h2>Wees er snel bij, beperkt beschikbaar!</h2>

 			<div class="one-pc-box">
 				<div class="img-box">
 					<img src="<?php echo $pResUrl; ?>images/onepc.png" alt="">
 				</div>
 				<dl>
 					<dt><strong>35%</strong> KORTING</dt>
 					<dd><a href="https://www.iobit.com/buy.php?product=nl-asc141pc1899&ref=nl_asc141pc1899purchase1902<?php echo $refStr; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1902-nl')" class="button">Activeer Nu!</a></dd>
 				</dl>
 			</div>

 			<div class="packs">
 				<h3><img src="<?php echo $pResUrl; ?>images/date.png" alt=""><strong>55</strong> min <strong>55</strong> sec <strong>55</strong> ms *</h3>
 				<div class="img-box">
 					<span></span>
 				</div>
 				<dl>
 					<dt><strong>75%</strong> KORTING</dt>
 					<dd><a href="https://www.iobit.com/buy.php?product=nl-asc143pcsd1999&ref=nl_asc143pcsd1999purchase1902<?php echo $refStr; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1902-nl')" class="button button-btm-lag"> <span></span>Activeer Nu!</a></dd>
 					<dd>Al <span class="buyNum"><?php echo $buyNum ?></span> keer geactiveerd</dd>
 				</dl>
 			</div>

 			<div class="one-pc-box three-pcs">
 				<div class="img-box">
 					<span></span>
 				</div>
 				<dl>
 					<dt><strong>60%</strong> KORTING</dt>
 					<dd><a href="https://www.iobit.com/buy.php?product=nl-asc141y3pc1999&ref=nl_asc143pc1999purchase1902<?php echo $refStr; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1902-nl')" class="button">Activeer Nu!</a></dd>
 				</dl>
 			</div>
	 	</div>
	</div>
	<div class="payments wrapper">
		<img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
	</div>
	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2>De ideale alles-in-één oplossing om het maximale uit uw pc te halen!</h2>
			<div class="showcase">
				<div class="inner">
					<ul class="screenshot">
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
						</li>
					</ul>
				</div>
				<ul class="zoom">
					<li></li>
					<li class="fun3">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
						</div>
					</li>
					<li class="fun2">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
						</div>
					</li>
					<li class="fun4">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
						</div>
					</li>
					<li class="fun5">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
						</div>
					</li>
				</ul>
				<ul class="list-icon">
					<li class="active"></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="detail-list">
				<dl>
					<dt><i class="benfits04"></i></dt>
					<dd>
						<h3>100% BESCHERMING</h3>
						<p>Beschermt uw privacy en data tegen toegang van buitenaf. Beschermt uw privacy twee keer zo goed*  als de gratis versie.</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits02"></i></dt>
					<dd>
						<h3>200%* SNELLER SYSTEEM</h3>
						<p>Ruimt onnodige bestanden op en optimaliseert CPU en RAM voor een sneller systeem. Maakt uw systeem tot 200% sneller dan de gratis versie.</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits03"></i></dt>
					<dd>
						<h3>300%* SNELLER INTERNET</h3>
						<p>Downloads, online games, internetpagina’s en YouTube video’s worden tot 300% sneller dan met de gratis versie.</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits01"></i></dt>
					<dd>
						<h3>MEER VRIJE SCHIJFRUIMTE</h3>
						<p>Ruimt overbodige bestanden, ongeldige snelkoppelingen, registeritems en onvoltooide downloadbestanden volledig op.</p>
					</dd>
				</dl>
				<a href="Javascript:void(0);" onclick="goTarget($('.compare'))" class="textlink">Meer informatie ></a>
			</div>
		</div>
	</div>
	<!-- end benfits -->
	<!-- gifts -->
	<div class="gifts default">
		<div class="wrapper">
			<h2>Smart Defrag PRO Gratis en Voor Niets!</h2>
			<img src="<?php echo $pResUrl; ?>images/gift-box.png" alt="" class="img-box">
			<dl>
				<dt>Smart Defrag PRO is de ideale aanvulling op Advanced SystemCare <br> PRO. Samen halen ze het maximale uit uw harde schijf!</dt>
				<dd>Automatische Defragmentatie</dd>
				<dd>Sneller toegang tot uw bestanden</dd>
				<dd>SSDs trimmen voor de beste resultaten</dd>
			</dl>
			<div class="price">
				<span><strong>€0</strong> <del>€29,99</del></span>
				<a href="https://www.iobit.com/buy.php?product=nl-asc143pcsd1999&ref=nl_asc143pcsd1999purchase1902<?php echo $refStr; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1902-nl')" class="button btn-gift-lag">Claim Uw Gratis Cadeau!</a>
				<p><strong>6</strong> min <strong>66</strong> sec <strong>66</strong> ms</p>
			</div>
		</div>
	</div>
	<!-- end gifts -->
	<div class="gifts exceed hide">
		<div class="wrapper">
			<div class="message">
				<h2>Pak 60% Korting nu het nog kan!</h2>
				<img src="<?php echo $pResUrl; ?>images/asc-box.png" alt="" class="img-box">
				<dl>
					<dt>19,99 Normaal 49,99</dt>
					<dd><a href="https://www.iobit.com/buy.php?product=nl-asc141y3pc1999&ref=nl_asc143pc1999purchase1902<?php echo $refStr; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1902-nl')" class="button button-btm-lag">Activeer Nu!</a></dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- review -->
	<div class="reviews ">
		<div class="wrapper">
			<h2>Wereldwijd erkend en gewaardeerd</h2>
			<p>Wij gaan altijd voor tevreden klanten, waar ook ter wereld</p>
			<ul class="message clearfix">
				<li>
					<strong>200+</strong>
					<p>Populair in meer dan <b>200</b> landen wereldwijd</p>
				</li>
				<li>
					<strong>1.000+</strong>
					<p>Reviews en waardering van meer dan <b>1.000</b> media </p>
				</li>
				<li>
					<strong>250.000.000+</strong>
					<p>Gekozen en gewaardeerd door meer dan <b>250 miljoen</b> mensen</p>
				</li>
				<li>
					<strong>80%+</strong>
					<p>Meer dan <b>80%</b> van de gebruikers heeft PRO geactiveerd</p>
				</li>
			</ul>
			<div class="map">
				<span class="recover recover01 big"></span>
				<span class="recover recover02 middle"></span>
				<span class="recover recover03 smail"></span>
				<span class="recover recover04 big"></span>
				<span class="recover recover05 middle"></span>
				<span class="recover recover06 smail"></span>
				<span class="recover recover07 big"></span>
				<span class="recover recover08 middle"></span>
				<span class="recover recover09 smail"></span>
				<span class="recover recover10 smail"></span>
				<span class="recover recover11 smail"></span>
				<span class="recover recover12 smail"></span>
				<span class="recover recover13 middle"></span>
				<span class="recover recover14 middle"></span>
				<span class="recover recover15 smail"></span>
				<span class="recover recover16 smail"></span>
				<span class="recover recover17 big"></span>
				<span class="recover recover18 smail"></span>
				<span class="recover recover19 smail"></span>
				<span class="recover recover20 big"></span>
				<span class="recover recover22 smail"></span>
				<span class="recover recover23 smail"></span>
				<span class="recover recover24 smail"></span>
				<span class="recover recover25 smail"></span>
				<span class="recover recover26 smail"></span>
				<dl class="tradotto-da-tedesco">
					<dt><img src="<?php echo $pResUrl; ?>images/siegfried-van-hoek.png"></dt>
					<dd>
						<strong>Siegfried van Hoek</strong>
						<p>Ik adviseer altijd mijn vrienden om Advanced SystemCare PRO te gebruiken!</p>
						<span></span>
					</dd>
				</dl>
				<dl class="html-it">
					<dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
					<dd>
						<strong>HTML.it</strong>
						<p>Advanced SystemCare PRO is een krachtig <br> programma om het beste uit je systeem te <br> halen. Bijna alles gaat automatisch, heel <br> gemakkelijk!</p>
						<span></span>
					</dd>
					</dl>
				<dl class="baixaki">
					<dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
					<dd>
						<strong>Baixaki</strong>
						<p>Advanced SystemCare presteert uitzonderlijk goed. <br>
Het detecteert complexe problemen en lost ze direct op. </p>
						<span></span>
					</dd>
				</dl>
				<dl class="charles-r-widick">
					<dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
					<dd>
						<strong>Charles R. Widick</strong>
						<p>Ik kies nog altijd voor Advanced SystemCare PRO!</p>
						<span></span>
					</dd>
				</dl>
				<dl class="cnet">

					<dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
					<dd>
						<strong>Cnet</strong>
						<p>Advanced SystemCare kan uw <br> computer nieuw leven in blazen. Het <br> vindt de juiste oplossing voor elk <br> probleem!</p>
						<span></span>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- end review -->
	<!-- compare -->
	<div class="compare wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
			<tr>
				<th class="itemb">
					<div class="box">
						Uw huidige versie
						<span></span>
					</div>
				</th>
				<th class="text">Vergelijking van de functionaliteit:</th>

				<th class="itema">
					<div class="box">
						De PRO versie
						<span></span>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="itemb"><i class="all-icons">√</i></td>
				<td class="virtue">Basis opschoning, reparatie en optimalisatie van het systeem</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">√</i></td>
				<td class="virtue">
					Tot wel 300% sneller internet met internet booster
					<span class="all-icons">Aggiornato</span>
				</td>

				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
					Tot wel 200% snellere opstarttijd
					<span class="all-icons">Aggiornato</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
						Grondige Windows register opschoning voorkomt computer crashes
						<span class="all-icons ra">Raccomandat</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
					Sneller systeem door volledige harde schijf optimalisatie
					<span class="all-icons ra">Raccomandat</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Volledige PC opschoning en optimalisering met AI-Modus <span class="all-icons nieuw">Nieuw</span></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Blokkeer programma’s die toegang tot uw persoonlijke gegevens willen</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Dicht beveiligingsgaten in real time</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
					Optimaal gemak met automatische updates en automatische RAM-opschoning
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Gratis 24/7 technische ondersteuning</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb radius"></td>
				<td class="virtue radius"></td>
				<td class="itema radius"> <span class="shadow"></span></td>
			</tr>
		</tbody>
	</table>
	</div>
	<!-- end compare -->
	<!-- bottomcart -->
	<div class="bottomcart">
		<div class="wrapper">
			<div class="showcase">
				<span class="packs"></span>
			</div>
			<div class="selection">
				<ul>
					<li class="three-pc"><span>1 JAAR / 3 PC’s</span> <strong>-60%</strong></li>
					<li class="packs active" ><span>1 JAAR / 3 PC’s + SD    	</span> <strong>-75%</strong></li>
					<li class="one-pc"><span>1 JAAR / 1 PC </span> <strong>-35%</strong></li>
				</ul>
			</div>
			<dl class="btnarea">
				<dt> <strong><b>€19</b>,99</strong> <del>€79,98 </del></dt>
				<dd>
					<a href="https://www.iobit.com/buy.php?product=nl-asc143pcsd1999&ref=nl_asc143pcsd1999purchase1902<?php echo $refStr; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1902-nl')" class="button btn-gift-lag"> <span></span>Activeer Nu!</a>
				</dd>
				<dd><strong>6</strong> min <strong>66</strong> sec <strong>66</strong> ms</dd>
			</dl>
		</div>
	</div>
	<!-- end bottomcart -->
	<!-- payments  -->
	<div class="service  clearfix">
		<div class="wrapper">
			<dl>
				<dt>Garantie</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dd>
			</dl>
			<dl>
				<dt>Veilig betalen</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dd>
			</dl>
			<dl class="last">
				<dt>24/7 Gratis Klantenservice</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dd>
			</dl>
		</div>
	</div>
	<!-- end payments -->
	<!-- footer -->
	<div class="footer">
		<dl class="annotation wrapper">
			<dt>*Opmerkingen:</dt>
			<dd>
				IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.
			</dd>
			<dd>
			 Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.
			</dd>
		</dl>
		<div class="copyright">Copyright ©2005 - <?php echo date('Y') ?> IObit. Alle Rechten Voorbehouden</div>
	</div>
	<!-- end footer -->
	<script src="<?php echo $pResUrl; ?>script/script.js"></script>
	<script type="text/javascript">
		var refStr = '<?php echo $refStr; ?>'
	</script>
</body>
</html>