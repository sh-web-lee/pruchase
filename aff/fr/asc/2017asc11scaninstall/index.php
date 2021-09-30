<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
if (empty($_GET['ref'])) $_GET['ref'] = 'fraff_asc11_2017scaninstall';
$buyHref = "https://www.iobit.com/buy.php?product=fraffasc111pc1299&ref=".$_GET['ref']."&aff=".$_GET['aff'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Activer Advanced SystemCare 11 PRO!</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic' rel='stylesheet' type='text/css'>
	<link href="<?php echo getStaticUrl('style/base.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo getStaticUrl('style/common.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo getStaticUrl('style/products.css')?>" rel="stylesheet" media="all">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<script src="<?php echo getStaticUrl('script/jquery.superbox-min.js')?>" type="text/javascript"></script>
	<style>
		#products .comparepage .compare .button.yellowbtn.middle span{padding: 12px 0 15px; font-size: 16px; }
		#products .compare .major-title .leftarea .button.yellowbtn span{padding: 15px 32px;}
		#products .comparepage .btmarea .handelbuy dt { margin-bottom: 10px; }
		#products .comparepage .btmarea .handelbuy dt del { font-size: 18px; color: #9c9c9c; }
		html[lang=fr] .guarantee.orange { background-image: url('<?php echo getStaticUrl('images/moneyback.png')?>'); }
	</style>
</head>
<body id="products">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<?php echo $linkStr;?>
<div id="header">
	<div class="wrapper">
		<a href="https://www.iobit.com/en/index.php" class="logo" target="_blank">IObit</a>
	</div>
</div>
<div id="container" class="comparepage">
	<!-- compare tab -->
	<div class="compare">
		<div class="wrapper">
			<!--  -->
			<div class="major-title">
				<div class="leftarea">
					<h1>Activez Advanced SystemCare 11 PRO!</h1>
					<p>Mettez à niveau vers PRO pour obtenir un PC plus propre, plus rapide et plus sécurisé!</p>
					<ul>
						<li>50% OFF</li>
						<li class="price">Seulement 12,99€</li>
						<li><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc112017scaninstall')" class="button yellowbtn"><span>Acheter Maintenant</span></a></li>
					</ul>
				</div>
				<dl class="rightarea">
					<dt><img src="<?php echo getStaticUrl('images/asc_left256.png')?>" alt=""/><span class="guarantee orange"></span></dt>
					<dd>Offre spéciale à durée limitée!</dd>
					<dd id="countdown" class="countdown"><strong>2</strong>d: <strong>5</strong>h: <strong>53</strong>m: <strong>2</strong>s <em>813</em><i>*</i></dd>
				</dl>
			</div>
			<!--  -->
			<table border="0" cellspacing="0" cellpadding="0" width="100%" class="comparetab">
				<thead>
				<tr>
					<td colspan="2" class="intro">
						<p><strong>Les fonctionnalités principales après avoir mis à niveau vers la version PRO</strong> :</p>
						<p>En tant qu’utilitaire tout-en-un d’optimisation système, Advanced SystemCare 11 PRO déverrouille le plein potentiel de votre ancien ordinateur. Vous bénéficiez d’une connexion Internet jusqu’à 300% plus fluide et d’un démarrage du PC 200% plus rapide. Les fichiers de registre empilés dans votre PC depuis des années peuvent être supprimés pour de meilleures performances du PC ainsi qu’un système plus stable. Le nouveau moteur d’optimisation de disque maximise l’espace disque et accélère votre PC. Advanced SystemCare 11 PRO vous propose une protection intégrale afin de vous mettre à l’abri de diverses menaces et de sécuriser votre confidentialité en ligne en temps réel.</p>
						<ul class="awards">
							<li><a href="https://www.pcmag.com/article2/0,2817,2499949,00.asp?source=autosuggest"><img src="<?php echo getStaticUrl('images/pcmag-nl.png')?>" alt=""></a></li>
							<li><a href="https://www.netzwelt.de/download/13595-advanced-systemcare-free.html"><img src="<?php echo getStaticUrl('images/netzwelt-de.png')?>" alt=""></a></li>
							<li><a href="http://www.techradar.com/reviews/iobit-advanced-systemcare-11 "><img src="<?php echo getStaticUrl('images/techrader.png')?>" alt=""></a></li>
							<li><a href="https://advanced-systemcare.informer.com/awards/"><img src="<?php echo getStaticUrl('images/si-award-epick5.png')?>" alt=""></a></li>
							<li><a href="<?php echo getStaticUrl('images/si-award-epick5.png')?> http://download.cnet.com/blog/download-blog/downloads-of-the-year-2014/"><img src="<?php echo getStaticUrl('images/badge-top-10-download.jpg')?>" alt=""></a></li>
						</ul>
					</td>
					<td class="items itemb">
						<table>
							<thead>
							<tr class="name">
								<td class="items"><span>Advanced SystemCare<br>PRO</span></td>
							</tr>
							<tr class="product">
								<td class="items">
									<div class="discount"><img src="<?php echo getStaticUrl('images/discount-50.png')?>" alt=""></div>
									<a rel="superbox[gallery][b]" href="<?php echo getStaticUrl('images/ascpro-large.jpg')?>"><img src="<?php echo getStaticUrl('images/ascpro-small.jpg')?>" alt="" /></a>
								</td>
							</tr>
							<tr class="price">
								<td class="items"><span><strong>Seulement 12,99€ </strong><del>29,99€</del></span></td>
							</tr>
							<tr class="limit">
								<td><span>1 an / 1 PC</span></td>
							</tr>
							<tr class="handle">
								<td><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc112017scaninstall')" class="button yellowbtn middle"><span>Acheter Maintenant</span></a></td>
							</tr>
							<tr class="special">
								<td>
									<span>Offre spéciale de nouvelle diffusion!</span>
									<p class="countdown" id="countdown"></p>
								</td>
							</tr>
							</thead>
						</table>
					</td>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_02.png')?>" alt=""></td>
					<td class="text"><span>Nettoyage, réparation et optimisation du système de base</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_03.png')?>" alt="" data-pin-nopin="true"></td>
					<td class="text"><span>Ultimate System Tuneup pour une performance supérieure</span><i class="improved">Amélioré</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_16.png')?>" alt=""></td>
					<td class="text"><span>Optimisation de la rapidité Internet jusqu'à 300% avec Internet Booster</span><i class="improved">Amélioré</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_15.png')?>" alt=""></td>
					<td class="text"><span>Localisez les intrus automatiquement avec FaceID </span><i class="improved">Amélioré</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_05.png')?>" alt=""></td>
					<td class="text"><span>Nettoyage automatique de la RAM avec Optimisation Temps Réel</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_06.png')?>" alt=""></td>
					<td class="text"><span>Nettoyage des registres empilés pour un système stable</span><i class="improved">Amélioré</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_06.png')?>" alt=""></td>
					<td class="text"><span>Nouveau moteur d'optimisation du disque pour maximiser les performances PC</span><i class="new">Nouveau</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_07.png')?>" alt=""></td>
					<td class="text"><span>Réparer les failles de sécurité pour empêcher le piratage en un clic</span><i class="new">Nouveau</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_08.png')?>" alt=""></td>
					<td class="text"><span>Supprimer des infections et protéger des menaces variées</span><i class="improved">Amélioré</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_09.png')?>" alt=""></td>
					<td class="text"><span>Effacer automatiquement la vie privée en ligne avec Navigateur anti-pistage</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_18.png')?>" alt=""></td>
					<td class="text"><span>Le moniteur de performance redessiné pour surveiller et accélérer votre PC</span><i class="improved">Amélioré</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_17.png')?>" alt=""></td>
					<td class="text"><span>Le démarrage jusqu'à 200% plus rapide de votre PC</span><i class="improved">Amélioré</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_11.png')?>" alt=""></td>
					<td class="text"><span>Mise à jour automatique vers la dernière version</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_12.png')?>" alt=""></td>
					<td class="text"><span>Fonctionne en arrière plan - Installez-vous et oubliez-le</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_13.png')?>" alt=""></td>
					<td class="text"><span>Nouveaux fond d’écran et thèmes fantastiques</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_14.png')?>" alt=""></td>
					<td class="text"><span>Assistance technique gratuite 24h / 24 et 7 jours sur 7</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				</tbody>
				<tfoot>
				<tr class="name">
					<td></td>
					<td></td>
					<td class="items"><span>Advanced SystemCare<br>PRO</span></td>
				</tr>
				<tr class="handle">
					<td></td>
					<td></td>
					<td class="items"><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc112017scaninstall')" class="button yellowbtn middle"><span>Acheter Maintenant</span></a></td>
				</tr>
				<tr class="limit">
					<td></td>
					<td></td>
					<td class="items"><span>Offres spéciales de nouvelle diffusion!</span></td>
				</tr>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- end compare tab -->
	<!-- review -->
	<div class="review clearfix">
		<div class="wrapper">
			<div class="media_rev">
				<h3>Avis des Médias</h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/clubic-fr.png')?>" alt=""></dt>
					<dd><h4>"Une suite simple et efficace d'utilitaires pour réparer et optimiser son système."</h4></dd>
					<dd>"Advanced SystemCare en fait beaucoup et offre incontestablement de bons et nombreux outils. Parfait pour les utilisateurs qui veulent un logiciel simple et un résultat immédiat, il est de plus proposé à un tarif intéressant."<span>-Clubic</span></dd>
				</dl>
			</div>
			<div class="user_rev" id="user_rev">
				<div class="content">
					<h3 class="hide">Commentaire des Utilisateurs</h3>
					<dl class="hide">
						<dd><h4>"Non seulement c’est un bon produit, mais le support est également très bon."</h4></dd>
						<dd>"J’aime beaucoup les fonctionnalités de base dans la version gratuite et finalement j’ai acheté la version complète. Il gardait mon ordinateur propre et loin de tout « bug » depuis plusieurs années et il ne m’a jamais laissé tombé jusqu’à présent. J’ai contacté récemment l’équipe d’Advanced SystemCare, et ils m’ont répondu en un jour ou deux avec tout ce que je voulais savoir. D’après moi, le support service est un énorme facteur décisif concernant la fidélisation de ce produit, et ASC est le gagnant à la fois en produit et en support."</dd>
					</dl>
					<dl class="hide">
						<dd><h4>"Advanced SystemCare Pro est le meilleur logiciel que j’ai jamais essayé au fil des ans."</h4></dd>
						<dd>"Comme la plupart des gens, je ne suis pas un expert en informatique. Je ne sais pas combien de programmes j'ai pu essayé au fil des ans, tous prétendent être le meilleur parmi les plus utilisés sur le marché des logiciels d’optimisation, mais Advanced SystemCare Pro est vraiment le meilleur programme que j'ai jamais utilisé. Depuis que j'ai ce programme génial je n'ai pas eu à appeler le support technique, pas même une fois. Il a surpassé toutes mes attentes, toujours à jour, et l’interface est très cool aussi! Merci à tous d’avoir facilité ma vie."</dd>
					</dl>
					<dl class="hide">
						<dd><h4>"Mon choix est sans aucun doute Advanced SystemCare Pro."</h4></dd>
						<dd>"En tant que technicien de réparation d’ordinateurs, je trouve que la plupart des problèmes communs peuvent être souvent résolu en scannant le PC avec ASC free. Quand j’ai fini la réparation , je proposais habituellement à mes clients d’acheter la version Pro. Qui a besoin d’un technicien lorsque l’on peut profiter d’un logiciel aussi puissant qu’Advanced SystemCare Pro 24-7? C’est le meilleur produit qu’un utilisateur débutant peut acheter. Merci à IObit qui rend mon travail plus facile."</dd>
					</dl>
					<dl class="show">
						<dd><h4>"Je vous recommande d’acheter ce programme, pas cher et très efficace pour maximiser les performances de votre PC."</h4></dd>
						<dd>"Ce programme est le meilleur que j’ai jamais essayé. Mon ordinateur est beaucoup plus performant depuis que j’ai téléchargé ASC. Il a nettoyé les fichiers indésirables, les fichiers en double et les dossiers vides. Je l’ai aussi utilisé pour déchiqueter des fichiers. Je vous recommande d’acheter ce programme, pas cher et très efficace pour maximiser les performances de votre PC. Vous allez l’adorer, je vous le promets."</dd>
					</dl>
				</div>
				<ul class="users" style="width: 640px;">
					<li class=""><img src="<?php echo getStaticUrl('images/bruce-ramsay.jpg')?>" alt="">Bruce Ramsay<br>2015</li>
					<li><img src="<?php echo getStaticUrl('images/hank-ewert.jpg')?>" alt="">Hank Ewert<br>2016</li>
					<li class=""><img src="<?php echo getStaticUrl('images/charles-r-widick.jpg')?>" alt="">Charles R. Widick<br>2015</li>
					<li class="current"><img src="<?php echo getStaticUrl('images/loretta-harnarine.jpg')?>" alt="">Loretta Harnarine<br>2016</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end review -->
	<div class="statementarea">
		<div class="wrapper">
			<dl class="statement">
				<dt>Note:</dt>
				<dd>Ces programmes de promotion sont modifiable sans préavis, à tout moment et à notre seule discrétion.</dd>
			</dl>
		</div>
	</div>
	<!-- btmarea -->
	<div class="btmarea clearfix">
		<div class="wrapper">
			<h2> 
				<p>Le choix de plus de <strong>250 Millions</strong> d'Utilisateurs</p>
				<p>Accélérez Votre PC jusqu'à 300% plus Rapide</p>
			</h2>
			<dl class="handelbuy">
				<dt>12,99€</dt>
				<dd>
					<p class="butt-holder">
						<a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc112017scaninstall')" class="button yellowbtn"><span>Acheter Maintenant</span></a>
					</p>
				</dd>
				<dd>Garantie 100% Satisfait ou Remboursé <br>1 an / 1 PC</dd>
			</dl>
		</div>
	</div>
	<!-- end btmarea -->
	<!-- bottom -->
	<div id="bottom" class="clearfix">
		<div class="wrapper">
			<div class="footer" style="padding-top:40px;">
				<p> © 2005 - <?php echo date('Y')?>  IObit. Tous droits réservés &nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/en/privacy.php"><span>Politique de confidentialité</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/en/legal.php"><span>Notification Juridique</span></a></p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$.superbox();
		/*user review*/
		var user_rev_width = $("#products #user_rev .users li").outerWidth() * $("#products #user_rev .users li").length ;
		$("#products #user_rev .users").css("width", user_rev_width);

		$("#products #user_rev .users li").mouseover(function(event) {
			var num = $(this).index();
			var selecter = $(this);
			var target = $("#user_rev dl");
			selecter.addClass("current").siblings().removeClass("current")
			target.eq(num).removeClass("hide").addClass("show").siblings().removeClass("show").addClass("hide");
		});
	});

	function countdown(){
		var startTimestamp = 1383553207;
		var intervalTimestamp = 4*24*60*60;
		var dateObj = new Date();
		var time = dateObj.getTime().toString().substring(0,10);
		for(i=1;;i++){
			var remainingTime = (startTimestamp+intervalTimestamp*i)-time;
			if (remainingTime > 0) break;
		}
		var d = Math.floor(remainingTime/(24*60*60));
		var H = Math.floor(remainingTime/(60*60)%24);
		var i = Math.floor(remainingTime/60%60);
		var s = Math.floor(remainingTime%60);
		var mi = 999-dateObj.getMilliseconds();
		if (mi < 10){
			mi = '00'+mi;
		} else if(mi < 100) {
			mi = '0'+mi;
		}
		var countdown = '<strong>'+d+'</strong>d: <strong>'+H+'</strong>h: <strong>'+i+'</strong>m: <strong>'+s+'</strong>s <em>'+mi+'</em>';
		$('#countdown').html(countdown + '<i>*</i>');
		setTimeout('countdown()', 1);
	}
	countdown();
</script>
</body>
</html>