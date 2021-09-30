<?php
	error_reporting(0);
	define('IObit', 'IObit');
	if (@!$include) {
		$pResUrl = './';
		$pRootUrl = '../../../../';
	}
$refStr='';
if(in_array($_GET['st'],array('ascu_acsd','asc_acsd'))){
	$refStr.='-'.$_GET['st'];
}
	include $pRootUrl . 'include/common.inc.php';

	if (empty($_GET['ref'])) $_GET['ref'] = 'svaff_sd6_2020acregister';

?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exklusivt Erbjudande för Värderade IObit-användare och Inbjudna Medlemmar. Njut av Ultimat Hårddiskprestanda!"/>
<title>70% Rabatt på Smart Defrag 6 PRO</title>
<link type="text/css" rel="stylesheet" href="./style/style.css" />
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
	<div class="wrapper">
			<a href="https://www.iobit.com" class="homelink">Iobit</a>
			<dl>
					<dt></dt>
						<dd><img src="<?php echo $pResUrl; ?>images/star.png" alt=""/></dd>
				</dl>
		</div>
</div>
<div id="main">
	<div class="wrapper">
		<div class="shadow"></div>
		<div class="intro">
			<h1>Smart Defrag 6 PRO</h1>
			<h2>—— Maximal Hårddiskprestanda för Högre Fart och Dataåtkomst!</h2>
			<div class="boxshot"></div>
			<div class="discount">
				<h3><span>Exklusivt Erbjudande</span>Endast för Värderade IObit-användare!</h3>
				<div class="disprice">85%<span>RABATT</span></div>
				<div class="wprice">ENDAST <em>164 kr</em> <del>1093 kr</del><span>1 Års Prenumation / 1 PC</span></div>
				<div class="btnarea">
					<a href="https://www.iobit.com/buy.php?product=svaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'svaffsd62020acregister')" class="checkbtn sdbuybtn">Köp Nu >></a>
					<span>100% PENGARNA TILLBAKA GARANTI</span>
				</div>
			</div>
		</div>
		<div class="promise">
			<div class="leftbox">
				<h2><span>Några Höjdpunkter och Fördelar</span></h2> 
				<ul>
					<li class="icon01">Ny Motor för 100% Säker Diskdefragmentering</li>
					<li class="icon02">Fullt Stöd för Defragmentering på Windows 10/8/8.1 Metro Apps</li>
					<li class="icon03">Maximal Hårddiskprestanda för Högsta Fart och Dataåtkomst</li>
					<li class="icon04">Garanterad Datasäkerhet och Diskstabilitet</li>
				</ul>
			 </div>
			<div class="review"><span></span>"Ett av de enklaste sätten att se till att datorn kör så effektivt som möjligt är att defragmentera hårddisken. <br />Med flera nivåer av defragmentering, lättanvänd schemaläggare och extra erbjudanden, är Smart Defrag ett bra sätt att göra det."<div class="awpic"><img src="<?php echo $pResUrl; ?>images/pcworld_logo.jpg" alt=""/><br />- PCWORLD.com</div></div>            
		</div>
		<div class="clear"></div>
		<div class="checkout">
			<div class="moneyback">Du skyddas helt av vår 100% pengarna tillbaka garanti och du KOMMER att se en betydande förbättring av datorns prestanda INOM 60 DAGAR, eller så gör vi en full återbetalning. Inga frågor.  <a class="sdbuybtn" href="https://www.iobit.com/buy.php?product=svaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'svaffsd62020acregister')">Köp nu</a></div>
			<div class="btn">
				<a href="https://www.iobit.com/buy.php?product=svaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'svaffsd62020acregister')" class="checkbtn sdbuybtn">Köp Nu >></a>
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
