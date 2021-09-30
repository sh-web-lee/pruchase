<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
	$refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['to'],array('softall','soft','iuself','bdplug','plug','uqprom','bdfail',
		'bdprog','iuasc'))){
	$refStr.='-'.$_GET['to'];
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jusqu'à -80% sur IObit Uninstaller PRO - Vente Flash d'été - IObit !</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700,700i'>
	<link href="<?php echo $pResUrl;?>style/style.css" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://www.iobit.com" class="logo">IObit</a>
			<h1 class="title">Vente Flash d'été</h1>
			<div class="showcase">
				<div class="single">
					<dl>
						<dt><img src="<?php echo $pResUrl;?>images/single-box.png" alt=""></dt>
						<dd class="price">
							<strong>12<small>€99</small></strong> <del>19,99€</del>
						</dd>
						<dd><a href="https://www.iobit.com/buy.php?product=fr-iu81pc1299&ref=fr_iu81pcpurchase1804<?php echo $refStr;?>&aff=&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1803b-fr')" class="button ghost">VITE , J’EN PROFITE</a></dd>
					</dl>
				</div>
				<div class="packs">
					<div class="countdown">
						<strong>10</strong> H : <strong>45</strong> M : <strong>15</strong> S : <strong>435</strong> MS*
					</div>
					<dl>
						<dt><img src="<?php echo $pResUrl;?>images/packs-box.png" alt=""></dt>
						<dd class="price">
							<strong>15<small>€99</small></strong> <del>89,97€</del>
						</dd>
						<dd><a href="https://www.iobit.com/buy.php?product=fr-iu8pfamc1599&ref=fr_iu83pcpurchase1804<?php echo $refStr;?>&aff=&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1803-fr')" class="button stand">VITE , J’EN PROFITE</a></dd>
					</dl>
					<div class="counter"><strong>6,675,771</strong> personnes l’ont acheté !</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end banner -->
	<div class="payments wrapper">
		<img src="<?php echo $pResUrl;?>images/payments.png" alt="">
	</div>
	<!-- intro -->
	<div class="intro wrapper">
		<h2>Profitez d'une désinstallation puissante pour une navigation plus rapide et plus sécurisée !</h2>
		<p>1 an d’abonnement pour 3 PC</p>
		<div class="showcase">
			<div class="imglist">
				<ul>
					<li class="shot3"><img src="<?php echo $pResUrl;?>images/screenshot02.png" alt=""></li>
					<li class="shot2"><img src="<?php echo $pResUrl;?>images/screenshot03.png" alt=""></li>
					<li class="shot1"><img src="<?php echo $pResUrl;?>images/screenshot01.png" alt=""></li>
				</ul>
			</div>
			<a href="javascript:;" class="prev control"><</a>
			<a href="javascript:;" class="next control">></a>
		</div>
		<div class="features clearfix">
			<dl>
				<dt><img src="<?php echo $pResUrl;?>images/feature_01.png" alt=""></dt>
				<dd>
					<h3><span>NOUVEAU !</span> Détecter et désinstaller les bundlewares</h3>
					<p>Détecter et désinstaller les bundlewares comme les logiciels publicitaires, les plug-ins de navigateur et d'autres logiciels tiers qui peuvent faire partie du processus d'installation.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl;?>images/feature_02.png" alt=""></dt>
				<dd>
					<h3><span>AMELIORE !</span> Navigation sans publicité</h3>
					<p>Désinstaller puissamment les plug-ins malveillants et publicitaires pour assurer une expérience de navigation sécurisée et propre.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl;?>images/feature_03.png" alt=""></dt>
				<dd>
					<h3><span>AMELIORE !</span> Nettoyage automatique </h3>
					<p>Détecter et nettoyer automatiquement les restes de programmes désinstallés, y compris ceux supprimés par d'autres désinstallateurs.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl;?>images/feature_04.png" alt=""></dt>
				<dd>
					<h3><span>NOUVEAU !</span> Mise à jour de logiciel </h3>
					<p>En un clic, mettre à niveau votre logiciel important sur votre PC sans intervention de l'utilisateur.</p>
				</dd>
			</dl>
		</div>
		<a href="javascript: void(0);" class="comparebtn">En savoir plus sur version PRO>></a>
	</div>
	<!-- end intro -->
	<!-- complimentary -->
	<div class="complimentary wrapper">
		<h2>Les cadeaux exclusifs pour l’abonnement de 3 PCs / 1 An</h2>
		<div class="countdown"><strong>10</strong> H : <strong>45</strong> M : <strong>15</strong> S : <strong>435</strong> MS*</div>
		<div class="gift-list clearfix">
			<dl>
				<dt><img src="<?php echo $pResUrl;?>images/gift-amc.png" alt=""></dt>
				<dd>
					<h3>AMC Security PRO*<strong>0€ </strong> <del>19,99€</del></h3>
					<ul>
						<li>Un tout-en-un protecteur et accélérateur pour votre smartphone Android</li>
						<li>Prend en charge plusieurs appareils</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl;?>images/gift-pf.png" alt=""></dt>
				<dd>
					<h3>Protected Folder <strong>0€ </strong> <del>39,99€</del></h3>
					<ul>
						<li>Il fait office de coffer-fort pour vos fichiers et dossiers</li>
						<li>Un mot de passe empêche quiconque de les ouvrir</li>
					</ul>
				</dd>
			</dl>
		</div>
		<a href="https://www.iobit.com/buy.php?product=fr-iu8pfamc1599&ref=fr_iu83pcpurchase1804<?php echo $refStr;?>&aff=&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1803-fr')" class="button stand">VITE , J’EN PROFITE</a>
	</div>
	<!-- end complimentary -->
	<!-- awards -->
	<div class="awards wrapper">
		<h2>Recommandé par ces médias </h2>
		<img src="<?php echo $pResUrl;?>images/awards.png" alt="" />
	</div>
	<!-- end awards -->
	<!-- review -->
	<div class="review wrapper">
		<div id="dg-container" class="dg-container">
			<div class="nav"> 
				<span class="dg-prev"></span>
				<span class="dg-next"></span>
			</div>
			<div class="content dg-wrapper">  
				<dl class="reviews">
					<dt><img src="<?php echo $pResUrl;?>images/fernando.png" alt="Fernando Lourenço Gomes"></dt>
					<dd>
						<h2>Avis d’utilisateur</h2>
						<cite>Fernando Lourenço Gomes</cite>
						<h4>《IObit Uninstaller, un outil pratique et efficace destiné à désinstaller des programmes, des barres d’outils et plug-ins. 》
						</h4>
						<p>《Il est très utile pour moi parce que cet outil parfait me permet de désinstaller les programmes et applications indésirables, et de nettoyer les restes dans le registre Windows ainsi que l’ensemble des fichiers et dossiers associés au programmes. Bravo jamais je n’ai pu avoir aussis efficace, je le recommande vivement! 》
						</p>
					</dd>
				</dl>
				<dl class="reviews">
					<dt><img src="<?php echo $pResUrl;?>images/pc-magazine.png" alt="PC.MAGAZINE"></dt>
					<dd>
						<h2>Avis des médias</h2>
						<cite>PC.MAGAZINE</cite>
						<h4>《Si vous avez besoin d’un programme vous permettant de désinstaller complètement et proprement des applications, séléctionnez IObit Uninstaller. 》
						</h4>
						<p>
							《Cet utilitaire, compatible parfaitement avec Win 10, est mesure de désinstaller des applications en toute simplicité, y compris des fichiers restants dans le registre Windows lors que vous supprimez des logiciels en utilisant le désinsatalleur intégré sous Windows, ainsi que les barres d’outils et plug-ins du navigateur agaçants. En un mot, si vous utilisez un PC sous Windows, je vous recommande IObit Uninstaller. 》
						</p>
					</dd>
				</dl>
				<dl class="reviews">
					<dt><img src="<?php echo $pResUrl;?>images/makeuseof.png" alt="MakeUseOf"></dt>
					<dd>
						<h2>Avis des médias</h2>
						<cite>MakeUseOf</cite>
						<h4>
							《Cet outil de désinstallation peut être classé comme le meilleur programme de désinstallation qui permet aux utilisateurs de réaliser la désinstallation par lot d’applicationssur PC. 》
						</h4>
						<p>
							《IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Il proposera aux utilisateurs une fonctionnalité "Analyse Approfondie" pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. 》
						</p>
					</dd>
				</dl>
			</div>               
		</div>
	</div>
	<!-- end review -->
	<!-- copmtab -->
	<div class="comparison wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<thead>
				<tr>
					<th class="text" colspan="2">Savoir ce que PRO édition peut faire pour vous?</th>
					<th class="itemb">IObit Uninstaller 8 FREE</th>
					<th class="itema">IObit Uninstaller 8 PRO</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_01.png" alt="" /></td>
					<td class="virtue">Désinstaller un programme depuis sa fenêtre ouverte, de son icône sur le bureau ou de l'icône de la barre d'état système <span class="nuo">NOUVEAU</span></td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-mark.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_02.png" alt="" /></td>
					<td class="virtue">Supprimer plug-ins &amp; extensions sur Edge, Chrome, IE, Firefox, etc </td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-mark.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_03.png" alt="" /></td>
					<td class="virtue">Pris en charge de la désinstallation des programmes tenaces<span class="red">AMÉLIORÉ</span></td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_04.png" alt="" /></td>
					<td class="virtue">Détecter et désinstaller les bundlewares et les plug-ins regroupés <span class="nuo">NOUVEAU</span></td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_05.png" alt="" /></td>
					<td class="virtue">Mettre à jour tous les programmes importants en un seul clic <span class="red">AMÉLIORÉ</span></td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_06.png" alt="" /></td>
					<td class="virtue">Désinstaller plug-ins malveillants pour un navigateur plus sécurisé <span class="red">AMÉLIORÉ</span> </td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_07.png" alt="" /></td>
					<td class="virtue">Expérience en ligne plus rapide et plus sûre en activant Déinstallation Adware<span class="red">AMÉLIORÉ</span></td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_08.png" alt="" /></td>
					<td class="virtue">Nettoyer automatiquement les restes que d’autres utilitaires ont échoué à supprimer<span class="red">AMÉLIORÉ</span></td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_09.png" alt="" /></td>
					<td class="virtue">Mise à jour Auto vers la Dernière Version</td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_10.png" alt="" /></td>
					<td class="virtue">Soutien Technique Gratuit de 24/7 à la Demande</td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- end copmtab -->
	<!-- bottom -->
	<div class="bottom">
		<div class="wrapper">
			<!-- service start -->
			<div class="service clearfix">
				<dl>
					<dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt="" /></dt>
					<dd><h4>Satisfait ou Remboursé</h4></dd>
					<dd>Garantie satisfait ou remboursé <span>pendant 60 jours après la date d’achat.</span></dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl;?>images/godaddy-secure.png" alt="" /></dt>
					<dd><h4>Paiement 100% Sécurisé</h4></dd>
					<dd>IObit vous propose huit modes de paiement sécurisé pour régler vos achats.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl;?>images/cart.png" alt="" /></dt>
					<dd><h4>Obtenir la licence</h4></dd>
					<dd>Vous recevrez le code de licence dans <span>les minutes après l’achat.</span></dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl;?>images/24hours.png" alt="" /></dt>
					<dd><h4>Service Client à votre écoute</h4></dd>
					<dd>Notre Support Technique gratuit est à votre disposition 24 heures sur 24, 7 jours sur 7.</dd>
				</dl>
			</div>
			<!-- service end -->

			<!-- annotation start -->
			<dl class="annotation">
				<dt>N.B.</dt>
				<dd>1*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
				<dd>2*.Licence gratuite d'AMC Security PRO, la version complète comprend annonces intégrées.</dd>
			</dl>
			<!-- annotation end -->

			<!-- footer start -->
			<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
			<!-- footer end -->
		</div>
	</div>
	<!-- end bottom -->
	<div class="floatlayer" id="floatlayer">
		<div class="wrapper clearfix"> 
			<div class="info">
				<h2><strong>80%</strong> d'économie sur IObit Uninstaller 8 PRO (1 An / 3 PCs)</h2>
				<h3>Et obtenez gratuitement deux outils PRO </h3>
				<div class="countdown"><strong>10</strong> H : <strong>45</strong> M : <strong>15</strong> S : <strong>435</strong> MS*</div>
			</div>
			<div class="offer">
				<div class="price">
					<strong>15<small>€99</small></strong> <del>89,97€</del>
				</div>
				<a href="https://www.iobit.com/buy.php?product=fr-iu8pfamc1599&ref=fr_iu83pcpurchase1804<?php echo $refStr;?>&aff=&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1803-fr')" class="button float" href="">VITE , J’EN PROFITE</a>
			</div>
			<a class="close"></a>
		</div>
	</div>
	<script src="<?php echo $pResUrl;?>script/modernizr.min.js"></script>
	<script src="<?php echo $pResUrl;?>script/review-3d-carousel.min.js"></script>
	<script src="<?php echo $pResUrl;?>script/script.min.js"></script>
</body>
</html>