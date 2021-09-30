<?php
	error_reporting(0);
	define('IObit', 'IObit');
	if (@!$include) {
	  $pResUrl = './';
	  $pRootUrl = '../../../../';
	}
	include $pRootUrl . 'include/common.inc.php';
$refStr = 'sv_imf-ac-register';
if($_GET['to']=='db_ac_imf'){
	$refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acimf'))){
	$refStr.='-'.$_GET['st'];
}
if (empty($_GET['ref'])) $_GET['ref'] = 'svaff_imf8_2021acregister';
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Beskrivning: Exklusivt Erbjudande för Värderade IObit-användare och Inbjudna Medlemmar. Njut av Extra Skydd för Din Dators Säkerhet!"/>
<title>70% Rabatt på IObit Malware Fighter</title>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
	<div class="wrapper">
		<a href="https://www.iobit.com" class="homelink">IObit</a>
		<dl>
			<dt></dt>
			<dd><img src="<?php echo $pResUrl; ?>images/star.png" alt=""/></dd>
			<dd>IObit Malware Fighter erbjuder mycket utöver dess skanningsfunktioner.</dd>
		</dl>
	</div>
</div>
<div id="main">
	<div class="wrapper">
		<div class="shadow"></div>
		<div class="intro">
			<h1>IObit Malware Fighter PRO</h1>
			<h2>—— Extra Skydd för Din PC-Säkerhet!</h2>
			<div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>"></div>
			<div class="discount">
				<h3><span>Exklusivt Erbjudande</span>Endast för Värderade IObit-användare!</h3>
				<div class="disprice">70%<span>RABATT</span></div>
				<div class="wprice">ENDAST <em>199kr</em> <del> 1393kr </del> <span> 1 Års Prenumation / 1 PC</span></div>
				<div class="btnarea">
					<a href="https://www.iobit.com/buy.php?product=svaff-imf81pc199&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'svaffimf82021acregister') " class="checkbtn imfbuybtn">Köp Nu >></a>
					<span>100% PENGARNA TILLBAKA GARANTI</span>
				</div>
			</div>
		</div>
		<div class="promise">
			<div class="leftbox">
				<h2><span>Några Höjdpunkter och Fördelar</span></h2> 
				<ul>
					<li>
						<span><img src="<?php echo $pResUrl; ?>images/icon-av-engine.png" alt="" /></span>
						Förhindra hot från att infektera din dator med Bitdefender antivirusmotor & med IObit anti-malware motor.
					</li>
					<li>
						<span><img src="<?php echo $pResUrl; ?>images/icon-threate-remove.png" alt="" /></span>
						Hitta och ta bort över 209,000,000 dolda hot
					</li>
					<li>
						<span><img src="<?php echo $pResUrl; ?>images/icon-browser-protect.png" alt="" /></span>
						Viktiga filer som personlig data kan hållas separat från andra och ingen kan få tillgång till dem utan tillstånd.
					</li>
					<li>
						<span><img src="<?php echo $pResUrl; ?>images/icon-file-money-protect.png" alt="" /></span>
						Stoppa ransomware från att försöka kryptera dina viktiga filer.
					</li>
					<li class="last">
						<span><img src="<?php echo getStaticUrl('images/icon-videor.png')?>" alt="" /></span>
						Lägger till ett extra lager skydd för dina känsliga data t.ex. dokument, bilder och videor.
					</li>
				</ul>
			 </div>
			<div class="review">
				<span></span>"Du borde redan ha ett antivirusprogram eller liknande skydd men vi rekommenderar dig att regelbundet skanna din dator efter infektioner med ett anti-malware verktyg. Med automatiska uppdateringar, en mängd systemväktare och ett Cloud Security alternativ erbjuder IObit Malware Fighter mycket utöver dess skanningfunktioner."
				<div class="awpic"><img src="<?php echo $pResUrl; ?>images/download_com_logo.jpg" alt=""/><br />- download.com</div>
			</div>            
		</div>
		<div class="clear"></div>
		<div class="checkout">
			<div class="moneyback">
				Du skyddas helt av vår 100% pengarna tillbaka garanti och du KOMMER att se en betydande förbättring av datorns prestanda INOM 60 DAGAR, eller så gör vi en full återbetalning. Inga frågor.  <a class="imfbuybtn" href="https://www.iobit.com/buy.php?product=svaff-imf81pc199&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'svaffimf82021acregister') ">Köp Nu</a>
			</div>
			<div class="btn">
				<a href="https://www.iobit.com/buy.php?product=svaff-imf81pc199&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'svaffimf82021acregister') " class="checkbtn imfbuybtn">Köp Nu >></a>
				<span>100% PENGARNA TILLBAKA GARANTI</span>
			</div>
		</div>
		<div class="clear"></div>
		<div class="awards"></div>
	</div>
</div>
<div id="footer">
	<div class="wrapper">
		© 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehålls
	</div>
</div>
</body>
</html>
