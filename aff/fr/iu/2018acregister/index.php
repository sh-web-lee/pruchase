<?php //    初始化
error_reporting(0);
define("IObit","IObit");
if (@!$include){
	$pResUrl = './'; 
	$pRootUrl = '../../../../'; 
}
if (empty($_GET['ref'])) $_GET['ref'] = 'fraff_iu8_2018acregister'; 
include $pRootUrl . 'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>75% de Réduction sur IObit Uninstaller </title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="head">
	<div class="wrapper">
		<a href="https://www.iobit.com/fr/index.php" target="_blank" class="logo">IObit</a>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt=""/></dt>
			<dd>Cet outil de désinstallation facile à utiliser et informative nettoie, configure et optimise votre PC</dd>
		</dl>
	</div>
</div>
<div id="main" class="wrapper">
	<div class="intro">
		<h1>IObit Uninstaller 8 PRO</h1>
		<h2>——Désinstaller les bundlewares, les programmes indésirables &amp; les plug-ins en un clic</h2>
		<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="boxshot">
		<div class="discount">
			<h3><span>Offre Exclusive </span>pour Nos Utilisateurs Importants!</h3>
			<dl>
				<dt>75% off</dt>
				<dd class="price">SEULEMENT <em> 9,99 € </em> <del> 39,96 €</del> <span>1 an d’abonnement / 1 PC</span></dd>
				<dd>
					<a class="checkbtn" href="https://www.iobit.com/buy.php?product=fraff-iu81pc999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'fraffiu82018acregister')">
						Achetez Maintenant  >>
					</a>
				</dd>
				<dd>100% GARANTIE DE REMBOURSEMENT</dd>			
			</dl>
		</div>
	</div>
	<div class="promise">				
		<div class="leftbox">
			<h2>Les principales fonctionnalités</h2> 
			<ul>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-remove.png" alt=""></span>Détecte les logiciels publicitaires, les barres d'outils et les programmes tiers indésirables en plus des logiciels gratuits qui volent vos données confidentielles.</li>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-adremoving.png" alt=""></span>Désinstalle les plug-ins publicitaires et malveillants pour garantir une navigation sécurisée et propre.</li>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-uninstall.png" alt=""></span>Détecte et nettoie automatiquement les restes et les fichiers résiduels des programmes désinstallés, y compris ceux supprimés par d'autres programmes de désinstallation.</li>
				<li><span><img src="<?php echo getStaticUrl('images/icon-upgrade.png')?>" alt="" /></span>Mettez à niveau vos logiciels principaux en 1 clic sans aucune intervention de l'utilisateur.</li>
			</ul>
		</div>
		<div class="review">
			<span></span>
			Si vous avez besoin d’un programme vous permettant de désinstaller complètement et proprement des applications, séléctionnez IObit Uninstaller. Cet utilitaire, compatible parfaitement avec Win 10, est mesure de désinstaller des applications en toute simplicité, y compris des fichiers restants dans le registre Windows lors que vous supprimez des logiciels en utilisant le désinsatalleur intégré sous Windows, ainsi que les barres d’outils et plug-ins du navigateur agaçants. En un mot, si vous utilisez un PC sous Windows, je vous recommande IObit Uninstaller."
			<img src="<?php echo $pResUrl; ?>images/pcmag-editor's-choice.jpg" alt=""/>
		</div>            
	</div>
	<div class="clear"></div>
	<div class="checkout">
		<div class="moneyback">
				Vous pourrez profiter d’une garantie satisfait ou remboursé pendant 60 JOURS après la date d’achat et la performance de votre PC sera considérablement améliorée pendant les jours, sinon nous vous enverrons un remboursement complet. Sans aucun souci. <a href="https://www.iobit.com/buy.php?product=fraff-iu81pc999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'fraffiu82018acregister')">Achetez Maintenant </a>
			</div>
			<div class="btn">
				<a href="https://www.iobit.com/buy.php?product=fraff-iu81pc999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'fraffiu82018acregister')" class="checkbtn">
					Achetez Maintenant  >>
				</a>
				<span>100% GARANTIE DE REMBOURSEMENT</span>
			</div>
	</div>
	<div class="clear"></div>
	<div class="awards"></div>
</div>
</div>
<div id="footer">
	<a href="https://www.iobit.com/fr/index.php" target="_blank"><img src="<?php echo $pResUrl; ?>images/smail-logo.png" alt=""></a>© 2005-<?php echo date(Y)?> IObit. Tous droits réservés
</div>
</body>
</html>
