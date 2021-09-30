<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
	$pResUrl = './'; 
	$pRootUrl = '../../../../'; 
}
include $pRootUrl.'include/common.inc.php';

	$refStr = 'fr_imf-ac-register';
if($_GET['to']=='db_ac_imf'){
		$refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acimf'))){
		$refStr.='-'.$_GET['st'];
}
if (empty($_GET['ref'])) $_GET['ref'] = 'fraff_imf7_2020acregister';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Extra Protection for Your PC Security!"/>
<title>85% de réduction sur IObit Malware Fighter PRO</title>
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
			<h2>—— Protection Supplémentaire pour la Sécurité de Votre PC!</h2>
			<div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt=""/></div>
			<div class="discount">
				<h3><span>Offre Exclusive</span><br />pour Nos Utilisateurs Importants SEULEMENT!</h3>
					<div class="disprice">-85%</div>
					<div class="wprice">SEULEMENT <em>13,49€</em> <del>89,93€</del><span>1 an d'abonnement/1PC</span></div>
					<div class="btnarea">
						<a href="https://www.iobit.com/buy.php?product=fraff-imf7-ac&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'fraffimf72020acregister')" class="checkbtn">Achetez Maintenant >></a>
							<span>100% GARANTIE DE REMBOURSEMENT</span>
					</div>
			</div>
		</div>
		<div class="promise">
			<div class="leftbox">
				<h2><span>Les Caractéristiques Principales</span></h2> 
				<ul>
					<li>
						<span><img src="<?php echo $pResUrl; ?>images/icon-av-engine.png" alt="" /></span>
						Élimine plus de 203 millions de menaces avec le moteur anti-virus de Bitdefender et le moteur anti-malware IObit.
					</li>
					<li>
						<span><img src="<?php echo getStaticUrl('images/icon-protect.png')?>" alt="" /></span>
						Profitez de la protection multicouche en équipant de trois moteurs et de multiples outils de sécurité.
					</li>
					<li>
						<span><img src="<?php echo $pResUrl; ?>images/icon-browser-protect.png" alt="" /></span>
						Verrouille l’accès à vos données sensibles avec un mot de passe et personne ne peut y accéder sans votre permission.
					</li>
					<li>
						<span><img src="<?php echo $pResUrl; ?>images/icon-file-money-protect.png" alt="" /></span>
						Bloque les ransomwares tentant de pénétrer dans votre PC et de chiffrer vos fichiers importants.
					</li>
					<li>
						<span><img src="<?php echo getStaticUrl('images/icon-usb.png')?>" alt="" /></span>
						Empêche les virus cachés sur les clés USB de nuire à votre ordinateur.
					</li>
				</ul>
			 </div>
			<div class="review">
				<span></span>You should already have antivirus protection and similar safeguards, but we strongly recommend regularly scanning your PC for infections with an antimalware tool. With automatic updates, a variety of system guards, and a Cloud Security option, IObit Malware Fighter offers a lot in addition to its scanning capabilities."<br />
				<div class="awpic"><img src="<?php echo $pResUrl; ?>images/download_com_logo.jpg" alt=""/><br />- download.com</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="checkout">
			<div class="moneyback">
					Vous êtes complètement protégé par notre 100% garantie de remboursement et vous VERREZ une amélioration significative de la performance de votre PC Dans les 60 JOURS, ou nous vous enverrons un remboursement complet. Sans aucun souci. <a href="https://www.iobit.com/buy.php?product=fraff-imf7-ac&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'fraffimf72020acregister')"> Achetez maintenant</a>
			</div>
			<div class="btn">
				<a href="https://www.iobit.com/buy.php?product=fraff-imf7-ac&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'fraffimf72020acregister')" class="checkbtn">Achetez maintenant >></a>
					<span>100% Garantie de remboursement</span>
			</div>
		</div>
		<div class="clear"></div>
		<div class="awards"></div>
	</div>
</div>
<div class="footer">© 2005 - <?php echo date('Y')?>  IObit. Tous droits réservés </div>
</body>
</html>
