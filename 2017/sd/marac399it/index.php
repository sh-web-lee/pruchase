<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
	$pResUrl = './'; 
	$pRootUrl = '../../../'; 
}
include $pRootUrl.'include/common.inc.php';
	$refStr = 'it_sd-ac-register';
	if($_GET['to']=='db_ac_sd'){
			$refStr.='-'.$_GET['to'];
	}
	if(in_array($_GET['st'],array('ascu_acsd','asc_acsd'))){
			$refStr.='-'.$_GET['st'];
	}
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Ultimate Performance for Your Hard Drive!"/>
<title>85% di Sconti su Smart Defrag PRO</title>
<link type="text/css" rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>" />
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
					<h1>Smart Defrag PRO</h1>
						<h2>——Ottima Prestazione per il tuo Hard Driver</h2>
						<div class="boxshot"></div>
						<div class="discount">
							<h3><span>Offerta Esclusiva</span><br />Solo per gli Utenti Importanti di IObit!</h3>
								<div class="disprice">85%<span>di Sconti</span></div>
								<div class="wprice">Solo <em>3.99€</em> <del>29.99€</del><span>1PC / 1 Anno</span></div>
								<div class="btnarea">
										<a href="https://www.iobit.com/buy.php?product=it-sd61pc399-ac&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=it_ac_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdac-it');" class="checkbtn">Acquista Ora >></a>
										<span>100% Garanzia di Rimborso</span>
								</div>
						</div>
				</div>
				<div class="promise">
					
						<div class="leftbox">
							<h2><span>Le Caratteristiche Principali</span></h2> 
							<ul>
									<li class="icon01">Assicura la deframmentazione del disco con l'intelligente ottimizzazione e l'avanzata deframmentazione</li>
									<li class="icon02">Supporta la deframmentazione delle App su Windows 10/8/8.1 Metro in modo più completo</li>
									<li class="icon03">Ottima prestazione dell'hard drive per accelerare la velocità dell'accesso dei dati</li>
									<li class="icon04">Garantisce la sicurezza dei dati e la stabilità del disco</li>
							</ul>
						 </div>
						<div class="review"><span></span>Il modo più semplice per fare funzionare il tuo PC al più veloce possibile è deframmentare il tuo disco fisso. <br />Con il più avanzato motore di deframmentazione, Smart Defrag offre un ottimo modo per accelerare il tuo PC."<br /><div class="awpic"><img src="<?php echo $pResUrl; ?>images/pcworld_logo.jpg" alt=""/><br />
- PCWORLD.com</div></div>            
				</div>
				<div class="clear"></div>
				<div class="checkout">
					<div class="moneyback">
							Sei stato protetto completamente dalla nostra garanzia di 100% rimborso. Scoprirai un miglioramento significativo della prestazione del tuo PC ENTRO 60 giorni, altrimenti, ti procederemo il rimborso subito. Senza preoccupazione. <a href="https://www.iobit.com/buy.php?product=it-sd61pc399-ac&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=it_ac_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdac-it');"> Acquista Ora.</a>
						</div>
						<div class="btn">
							<a href="https://www.iobit.com/buy.php?product=it-sd61pc399-ac&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=it_ac_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdac-it');" class="checkbtn">Acquista Ora >></a>
								<span>100% GARANZIA DI RIMBORSO</span>
						</div>
				</div>
				<div class="clear"></div>
				<div class="awards"></div>
		</div>
</div>
<div id="footer">© 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati </div>
</body>
</html>
