<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
	$pResUrl = './'; 
	$pRootUrl = '../../../../'; 
}
include $pRootUrl.'include/common.inc.php';

$refStr = 'it_imf-ac-register';
if($_GET['to']=='db_ac_imf'){
		$refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acimf'))){
		$refStr.='-'.$_GET['st'];
}
if (empty($_GET['ref'])) $_GET['ref'] = 'itaff_imf7_2020acregister';
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Extra Protection for Your PC Security!"/>
<title>85% di Sconti su IObit Malware Fighter PRO</title>
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
						<dd>IObit Malware Fighter offers a lot in addition to its scanning capabilities.</dd>
				</dl>
		</div>
</div>
<div id="main">
		<div class="wrapper">
				<div class="shadow"></div>
				<div class="intro">
						<h1>IObit Malware Fighter PRO</h1>
						<h2>—— La migliore protezione per la sicurezza del tuo PC!</h2>
						<div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt=""/></div>
						<div class="discount">
								<h3><span>Offerta Esclusiva</span><br />Solo per gli Utenti Importanti di IObit! </h3>
								<div class="disprice">85%<span>di Sconti</span></div>
								<div class="wprice">Solo <em>11,99€</em> <del>79,93€</del><span>1PC / 1 Anno</span></div>
								<div class="btnarea">
										<a href="https://www.iobit.com/buy.php?product=itaff-imf7-ac&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'itaffimf72020acregister')" class="checkbtn">Acquista Ora >></a>
										<span>100% Garanzia di Rimborso</span>
								</div>
						</div>
				</div>
				<div class="promise">            
						<div class="leftbox">
							<h2><span>Le Caratteristiche Principali</span></h2> 
							<ul>
								<li>
									<span><img src="<?php echo $pResUrl; ?>images/icon-av-engine.png" alt="" /></span>
									<strong>Rileva oltre 203.000.000 di minacce</strong> per impedire infezioni al computer con il motore anti-virus Bitdefender e il motore anti-malware di IObit.
								</li>
								<li>
									<span><img src="<?php echo getStaticUrl('images/icon-protect.png')?>" alt="" /></span>
									I motori a tripla protezione e le multiple guardie di sicurezza garantiscono un <strong>computer sicuro in tempo reale</strong>.
								</li>
								<li>
									<span><img src="<?php echo $pResUrl; ?>images/icon-browser-protect.png" alt="" /></span>
									<strong>Pulisce automaticamente</strong> le tracce di privacy con Browser Anti-Tracce
								</li>
								<li>
									<span><img src="<?php echo $pResUrl; ?>images/icon-file-money-protect.png" alt="" />
									</span><strong>Arresta il ransomware</strong> tentando di crittografare i tuoi file importanti.
								</li>
								<li>
									<span><img src="<?php echo getStaticUrl('images/icon-usb.png')?>" alt="" /></span>
									<strong>La potente protezione della chiave USB</strong> arresta le minacce nascoste nel dispositivo esterno.
								</li>
								<li>
									<span><img src="<?php echo $pResUrl; ?>images/folder-protection.png" alt="" /></span>
									File importanti come i tuoi dati personali possono essere tenuti separati dagli altri e <strong>nessuno può accedervi senza una password</strong>.
								</li>
							</ul>
						 </div>
						<div class="review"><span></span> IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojan, worm, keylogger e bot. <br>
							Il programma utilizza due motori AV - il proprio e BitDefender – ed è efficace contro i malware impossibili da rilevare con altri strumenti. Un altro vantaggio è che funziona contemporaneamente con il programma standard AV.IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojans, worms, keyloggers e bots. - Tradotto da inglese"<br /><div class="awpic"><img src="<?php echo $pResUrl; ?>images/download_com_logo.jpg" alt=""/></div></div>            
				</div>
				<div class="clear"></div>
				<div class="checkout">
						<div class="moneyback">
								Sei stato protetto completamente dalla nostra garanzia di 100% rimborso. Scoprirai un miglioramento significativo della prestazione del tuo PC ENTRO 60 giorni, altrimenti, ti procederemo il rimborso subito. Senza preoccupazione.<a href="https://www.iobit.com/buy.php?product=itaff-imf7-ac&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'itaffimf72020acregister')">Acquista Ora.</a>
						</div>
						<div class="btn">
								<a href="https://www.iobit.com/buy.php?product=itaff-imf7-ac&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'itaffimf72020acregister')" title="CHECKOUT" class="checkbtn">Acquista Ora >></a>
								<span>100% GARANZIA DI RIMBORSO</span>
						</div>
				</div>
				<div class="clear"></div>
				<div class="awards"></div>
		</div>
</div>
<div id="footer">
		<div class="wrapper">
© 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati
		</div>
</div>
</body>
</html>
