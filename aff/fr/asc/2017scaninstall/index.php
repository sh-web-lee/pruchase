<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
if (empty($_GET['ref'])) $_GET['ref'] = 'fraff_asc_2017scaninstall';
include $pRootUrl . 'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Activer Advanced SystemCare 10 PRO!</title>
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
		#products .comparepage .compare .button.yellowbtn.middle span{padding: 12px 0 15px;}
		#products .compare .major-title .leftarea .button.yellowbtn span{padding: 15px 32px;}
		html[lang=fr] .guarantee.orange { background-image: url('<?php echo getStaticUrl('images/moneyback.png')?>'); }
	</style>
</head>
<body id="products">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<?php echo $linkStr;?>
<div id="header">
	<div class="wrapper">
		<a href="http://www.iobit.com/fr/index.php" class="logo" target="_blank">IObit</a>
	</div>
</div>
<div id="container" class="comparepage">
	<!-- compare tab -->
	<div class="compare">
		<div class="wrapper">
			<!--  -->
			<div class="major-title">
				<div class="leftarea">
					<h1>Activer Advanced SystemCare 10 PRO!</h1>
					<p>ASC PRO permet d'acc??l??rer votre PC et de booster l'Internet jusqu'?? 300% plus rapide</p>
					<ul>
						<li>50% OFF</li>
						<li class="price">Seulement 12,99???</li>
						<li><a href="http://www.iobit.com/buy.php?product=fr_asc101pc1299_aff&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc102017scaninstall');" class="button yellowbtn"><span>Acheter maintenant</span></a></li>
					</ul>
				</div>
				<dl class="rightarea">
					<dt><img src="<?php echo $pResUrl; ?>images/asc-leftside.png" alt=""><span class="guarantee orange"></span></dt>
					<dd>Offre sp??ciale ?? dur??e limit??e!</dd>
					<dd id="countdown" class="countdown"><strong>2</strong>d: <strong>5</strong>h: <strong>53</strong>m: <strong>2</strong>s <em>813</em><i>*</i></dd>
				</dl>
			</div>
			<!--  -->
			<table border="0" cellspacing="0" cellpadding="0" width="100%" class="comparetab">
				<thead>
				<tr>
					<td colspan="2" class="intro">
						<p><strong>Les fonctionnalit??s principales apr??s avoir mis ?? niveau vers la version PRO</strong> :</p>
						<p>Advanced SystemCare 10 PRO, une suite simple et efficace d???utilitaires pour nettoyer, optimiser, acc??l??rer et prot??ger votre ordinateur en un seul clic. Avec l?????largissement de la base de donn??es, il offre non seulement un PC plus propre, mais aussi une exp??rience en ligne fluide, s??re et agr??able. Dans le but de mieux satisfaire les utilisateurs, il a ??galement int??gr?? Gestionnaire de Ressources surveillant en temps r??el l???utilisation de la RAM, du Disque et du CPU afin de rendre RAM ??tre automatiquement nettoy?? et de redonner un second souffle ?? votre PC.</p>
						<p><img src="<?php echo getStaticUrl('images/promo_awards.png')?>" alt=""></p>
					</td>
					<td class="items itemb">
						<table>
							<thead>
							<tr class="name">
								<td class="items"><span>Advanced SystemCare <br>PRO</span></td>
							</tr>
							<tr class="product">
								<td class="items">
									<div class="discount"><img src="<?php echo getStaticUrl('images/discount-50.png')?>" alt=""></div>
									<a rel="superbox[gallery][b]" href="<?php echo $pResUrl; ?>images/ascpro-large.jpg"><img src="<?php echo $pResUrl; ?>images/ascpro-small.jpg" alt=""></a>
								</td>
							</tr>
							<tr class="price">
								<td class="items"><span><strong>Seulement 12,99??? </strong><del>29,99???</del></span></td>
							</tr>
							<tr class="limit">
								<td><span>1 an / 1 PC</span></td>
							</tr>
							<tr class="handle">
								<td><a href="http://www.iobit.com/buy.php?product=fr_asc101pc1299_aff&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc102017scaninstall');" target="" class="button yellowbtn middle"><span>Acheter maintenant</span></a></td>
							</tr>
							<tr class="special">
								<td>
									<span>Offre sp??ciale de nouvelle diffusion!</span>
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
					<td class="text"><span>Acc??l??ration Ultime du Syst??me pour Booster la Performance</span><i class="improved">Am??lior??</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_03.png')?>" alt="" data-pin-nopin="true"></td>
					<td class="text"><span>Acc??l??rer Internet Jusqu????? 300% plus rapide avec Acc??l??rateur Internet</span><i class="improved">Am??lior??</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_16.png')?>" alt=""></td>
					<td class="text"><span>Capturer automatiquement les intrus avec FaceID</span><i class="new">Nouveau</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_15.png')?>" alt=""></td>
					<td class="text"><span>Optimisation En Temps R??el avec Optimisation Active </span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_05.png')?>" alt=""></td>
					<td class="text"><span>Nettoyer en profondeur le Registre de Windows</span><i class="improved">Am??lior??</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_06.png')?>" alt=""></td>
					<td class="text"><span>Maximiser la Performance de Disque Dur</span><i class="improved">Am??lior??</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_08.png')?>" alt=""></td>
					<td class="text"><span>D??tection Compl??te contre les Menaces de S??curit??</span><i class="improved">Am??lior??</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_09.png')?>" alt=""></td>
					<td class="text"><span>Effacer Auto la vie priv??e en ligne avec Navigateur anti-pistage</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_18.png')?>" alt=""></td>
					<td class="text"><span>Surveiller l???utilisation de la RAM, du CPU & du Disque avec Moniteur de performance am??lior??</span><i class="improved">Am??lior??</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_17.png')?>" alt=""></td>
					<td class="text"><span>D??marrage du PC jusqu????? 200% plus rapide</span><i class="improved">Am??lior??</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_11.png')?>" alt=""></td>
					<td class="text"><span>Mise ?? jour Auto vers la Derni??re Version</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_12.png')?>" alt=""></td>
					<td class="text"><span>Marche en Arri??re-plan ??? Installer ASC et laissez-le s???occuper du reste	</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_13.png')?>.png" alt=""></td>
					<td class="text"><span>Nouvelle Interface et Th??mes Fantastiques</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_14.png')?>.png" alt=""></td>
					<td class="text"><span>Soutien Technique Gratuit de 24/7 ?? la Demande</span></td>
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
					<td class="items"><a href="http://www.iobit.com/buy.php?product=fr_asc101pc1299_aff&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc102017scaninstall');" target="" class="button yellowbtn middle"><span>Acheter maintenant</span></a></td>
				</tr>
				<tr class="limit">
					<td></td>
					<td></td>
					<td class="items"><span>Offre sp??ciale de nouvelle diffusion!</span></td>
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
				<h3>Avis des M??dias</h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/clubic-fr.png')?>" alt=""></dt>
					<dd><h4>"Une suite simple et efficace d'utilitaires pour r??parer et optimiser son syst??me."</h4></dd>
					<dd>"Advanced SystemCare en fait beaucoup et offre incontestablement de bons et nombreux outils. Parfait pour les utilisateurs qui veulent un logiciel simple et un r??sultat imm??diat, il est de plus propos?? ?? un tarif int??ressant." <span> - Clubic</span></dd>
				</dl>
			</div>
			<div class="user_rev" id="user_rev">
				<div class="content">
					<h3 class="hide">Commentaire des Utilisateurs</h3>
					<dl class="hide">
						<dd><h4>"Non seulement il est un bon produit, mais le support est ??galement tr??s bon."</h4></dd>
						<dd>"J???utilise les produits d???IObit pendant des ann??es, je vous recommande particuli??rement l???Advanced SystemCare PRO. Il gardait mon ordinateur propre et loin de ?? bug ?? depuis plusieurs ann??es et il ne m???a pas laiss?? tomb?? jusqu????? pr??sent. J???ai connect?? r??cemment l?????quipe d???Advanced SystemCare, et ils m???ont r??pondu dans un jour ou deux avec tout ce que je voulais savoir. D???apr??s moi, le support service est un ??norme facteur d??cidant si je vais garder ce produit, et ASC est le gagnant ?? la fois en produit et en support."</dd>
					</dl>
					<dl class="hide">
						<dd><h4>"Advanced SystemCare Pro est le meilleur logiciel que j???ai jamais essay?? au fil des ans."</h4></dd>
						<dd>"Comme la plupart des gens, je ne suis pas un expert en informatique. Je ne sais pas combien de programmes que j'ai essay?? au fil des ans, tout pr??tend ??tre le meilleur parmi les plus utilis??s sur le march?? des logiciels d???optimisation, mais Advanced SystemCare Pro est vraiment le meilleur programme que j'ai jamais utilis??. Depuis que j'ai eu ce programme g??nial je n'ai pas eu ?? appeler le support technique, m??me une fois. Il a bien surpass?? mes attentes, toujours ?? jour, et l???interface est tr??s cool aussi! Merci beaucoup ?? vous tous pour avoir facilit?? ma vie."</dd>
					</dl>
					<dl class="hide">
						<dd><h4>"Mon choix est sans aucun doute Advanced SystemCare PRO."</h4></dd>
						<dd>Comme un technicien de r??paration d???ordinateur, je vous recommande particuli??rement l???Advanced SystemCare PRO, un logiciel parfait et efficace, qui est destin?? ?? nettoyer PC en un seul clic. Quand j???ai fini la r??paration, je habituellement proposais ?? mes clients d???acheter ce programme. Qui a besoin d???un technicien lorsque l???on profite du puissant Advanced SystemCare PRO marchant sur votre syst??me 24-7? C???est le meilleur produit qu???un utilisateur d??butant peut acheter. Merci ?? IObit qui rend mon travail plus facile. </dd>
					</dl>
					<dl class="show">
						<dd><h4>"Je vous recommande ?? acheter ce programme, pas cher mais tr??s efficace pour maximiser les performances de votre PC."</h4></dd>
						<dd>"Ce programme est le meilleur que j???ai jamais essay??. Mon ordinateur est beaucoup plus performant depuis que j???ai t??l??charg?? ASC10. Il a nettoy?? les fichiers ind??sirables, les fichiers en double et les dossiers vides. Je l???ai aussi utilis?? pour d??chiqueter des fichiers. Je vous recommande ?? acheter ce programme, pas cher mais tr??s efficace pour maximiser les performances de votre PC. Vous allez l???adorer, je promets."</dd>
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
				<dd>Ces programmes de promotion sont modifiables sans pr??avis, ?? tout moment et ?? notre seule discr??tion.</dd>
			</dl>
		</div>
	</div>
	<!-- btmarea -->
	<div class="btmarea clearfix">
		<div class="wrapper">
			<h2>
				<p>Le choix de plus de <strong>250 </strong> Millions d'Utilisateurs</p>
				<p>Acc??l??rer Votre PC jusqu'?? 300% plus Rapide </p>
			</h2>
			<dl class="handelbuy">
				<dt>12,99???</dt>
				<dd>
					<p class="butt-holder">
						<a href="http://www.iobit.com/buy.php?product=fr_asc101pc1299_aff&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc102017scaninstall');" target="" class="button yellowbtn"><span>Acheter maintenant</span></a>
					</p>
				</dd>
				<dd>Garantie 100% Satisfait ou Rembours?? <br>1 an /1 PC</dd>
			</dl>
		</div>
	</div>
	<!-- end btmarea -->
	<!-- bottom -->
	<div id="bottom" class="clearfix">
		<div class="wrapper">
			<div class="footer" style="padding-top:40px;">
				<p> ?? 2005 - <?php echo date(Y)?> IObit. Tous droits r??serv??s &nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/en/privacy.php"><span>Politique de confidentialit??</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/en/legal.php"><span>Notification Juridique</span></a></p>
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