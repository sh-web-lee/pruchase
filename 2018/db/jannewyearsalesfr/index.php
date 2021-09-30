<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
function microtime_float() {
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) - 68457026;
$buyNum = number_format($buyNum);

$packsNum = ceil(microtime_float() * 2000 / 20000);
$packsNum = 360 - ($packsNum % 360);
if ($_GET['action'] == 'getPacks') {
	echo $packsNum;
	exit ;
}
if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
		'purchase-10','purchase-14','purchase-15','purchase-16',
		'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
		'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
		'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34'))){
	$refStr='-'.$_GET['to'];
}else{
	$refStr='';
}
if(in_array($_GET['st'],array('dbxmasr','db_xmas'))){
	$refStr.='-'.$_GET['st'];
}
if($_GET['to']=='purchase-6'){
	$ver=$_GET['ver'];
	if(preg_match('/^([0-9])\.([0-9])\.[0-9]\.[0-9]{3}/',$ver,$matches)){
		$verStr=$matches[1].$matches[2];
		$refStr.='-'.$verStr;
	}
}
if(in_array($_GET['pop'],array('x_db'))){
	$refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>Jusqu'à -85% sur Driver Booster PRO et obtenez la super paquet cadeau pour votre famille - Solde d'hiver 2018!</title>
		<meta name="Copyright" content="IObit">
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
		<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
		<?php echo $gJavascript['public']; ?>
		<?php echo $gJavascript['head']; ?>
		<script>
			var ver = MApp(2.2).url.getParameters('ver');
			var paramTo = MApp(2.2).url.getParameters('to');
			var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
			var reg=new RegExp("^4\.[3-9]|^[5-9]\.[0-9]|^[1-9]\\d+\.[0-9]");
			if (reg.test(ver) && (paramTo == 'purchase-6')) {
				if (Math.random() < 0.5) {
					window.location.replace('./junedriverupdate.php' + queryStr);
				}
			}
		  function decreasingPacks() {
		    $.ajax({
		      type: "GET",
		      url: "<?php echo $pRootUrl;?>callback.php",
      		data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>r="+Math.random(),
		      success: function(packs) {
		        $('#packs').html(packs);
		        setTimeout('decreasingPacks()', 10000);
		      }
		    });
		  }
		  setTimeout('decreasingPacks()', 10000);
		</script>
	</head>
	<body>
		<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
		<div class="header">
			<div class="wrapper">
				<a href="http://www.iobit.com/" target="_blank" class="logo">IObit</a>
				<ul>
					<li><strong>00</strong> H :</li>
					<li><strong>00</strong> MIN :</li>
					<li><strong>00</strong> SEC:</li>
					<li><strong>00</strong> MS <sup>*</sup></li>
				</ul>
			</div>
		</div>
		<div class="banner">
			<div class="wrapper">
				<div class="title">
					<h1>Soldes d'hiver 2018</h1>
					<p>Offre valable uniquement aujourd’hui ! Premier arrivé, premier servi !</p>
				</div>
				<div class="offer clearfix">
					<img class="db-box" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" />
					<div class="right-message">
						<h2>-85%</h2>
						<h3>
							Jusqu’à -85% sur Driver Booster PRO et obtenez un super paquet cadeau à durée limitée pour votre famille!
						</h3>
						<dl class="price-content">
							<dt>24,99€ <del>174,82€</del></dt>
							<dd><a href="http://www.iobit.com/buy.php?product=fr-db5sdpfiu2499&ref=fr_db5sdpfiupurchase1801<?php echo $refStr;?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1801-fr')" class="buybtn">VITE, J’EN PROFITE</a></dd>
							<dd><img src="<?php echo $pResUrl; ?>images/people.png" alt=""> 5,206,553 personnes l’ont acheté!</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		<div class="payment">
			<img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
		</div>
		<div class="db-message wrapper clearfix">
			<h2>Mettez à jour automatiquement les pilotes périmés, défectueux pour des performances au top!</h2> 
			<img src="<?php echo $pResUrl; ?>images/db-message.jpg" alt="" class="db-img">
			<p>Compatible avec  <img src="<?php echo $pResUrl; ?>images/win10.png" alt="">   Windows10</p>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/benfits-01.png" alt=""></dt>
				<dd>Solution “one-stop” pour détecter et mettre à jour <br> automatiquement 200% plus de pilotes obsolètes,<br> manquants, incorrects et rares.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/benfits-02.png" alt=""></dt>
				<dd>Sauvegarder automatiquement tous les pilotes installés et <br> créer un point de restauration du système avant la mise à jour <br>	 en cas d’imprévus.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/benfits-03.png" alt=""></dt>
				<dd>Prend en charge plus de composants du jeu comme <br> Nvidia, Realtek, Intel, AMD, Broadcom, VIA, DirectX®<br>, Adobe® Flash®, PhysX®, etc.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/benfits-04.png" alt=""></dt>
				<dd>Télécharger et installer automatiquement les pilotes & les <br> composants du jeu pendant le temps d’inactivité et <br> débloquer la limitation de vitesse. </dd>
			</dl>
		</div>
		<div class="gift-box">
			<div class="gift-title">
				<div class="wrapper"><h2>Un super paquet cadeau à durée limitée pour l'année 2018</h2></div>
			</div>
			<div class="wrapper clearfix"> 	
				<dl>
					<dt>
						<img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="" />
						<strong>Smart Defrag 5 PRO </strong>
					</dt>
					<dd>Maximise les performances de <br> disque dur de votre PC </dd>
				</dl>
				<dl>
					<dt>
						<img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="" />
						<strong>Protected Folder </strong>
					</dt>
					<dd>vous prémunit contre la perte, le <br> vol et la fuite de données. </dd>
				</dl>
				<dl>
					<dt>
						<img src="<?php echo getStaticUrl('images/iu-gift.png')?>" alt="" />
						<strong>IObit Uninstaller 7 PRO</strong>
					</dt>
					<dd>Détecte et désinstalle les bundlewares  et les plug-ins regroupés</dd>
				</dl>
			</div>
		</div>
		<div class="between-buy">
		  <div class="wrapper">
		    <img src="<?php echo $pResUrl; ?>images/between-db-box.png" alt="" class="db-box">
		    <div class="buy-bg">
		      <dl>
		        <dt><h3>Driver Booster 5 PRO</h3> ( 1 an / 3 PCs )</dt>
		        <dd>24,99€  <del>74,85€ </del></dd>
		      </dl>
		      <ul>
		        <li><img src="<?php echo $pResUrl; ?>images/gift.png" alt=""> IObit Uninstaller 7 PRO</li>
		        <li><img src="<?php echo $pResUrl; ?>images/gift.png" alt=""> Smart Defrag 5 PRO</li>
		        <li><img src="<?php echo $pResUrl; ?>images/gift.png" alt=""> Protected Folder</li>
		      </ul>
		    </div>
	   		<dl class="price-content">
					<dt>24,99€ <del>174,82€</del></dt>
					<dd><a href="http://www.iobit.com/buy.php?product=fr-db5sdpfiu2499&ref=fr_db5sdpfiupurchase1801<?php echo $refStr;?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1801-fr')" class="buybtn">VITE, J’EN PROFITE</a></dd>
					<dd><img src="<?php echo $pResUrl; ?>images/people.png" alt=""> 5,206,553 personnes l’ont acheté!</dd>
				</dl>
		  </div>
		</div>
		<div class="awards wrapper">
			<h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
			<img src="<?php echo $pResUrl; ?>images/awards.jpg"/>
		</div>
		<div class="review wrapper">
	    <div class="content">
	      <dl>
	        <dt><h3>Commentaire des Utilisateurs</h3></dt>
	        <dd>
	          <h4>"Mon PC est plus rapide et plus stable que je ne le pensais."</h4>
	        </dd>
	        <dd>"Avec Driver Booster, je peux facilement trouver les pilotes obsolètes et les mettre à jour avec simplicité. En outre, il m’aide à corriger l’erreur sonore, l’erreur réseau, l’erreur de périphérique etc. Je ne le croyais pas avant de l’utiliser, mais après l’avoir essayé je l’ai aimé parce que mon PC est plus rapide et plus stable que je ne le pensais... Merci à IObit."</dd>
	      </dl>
	      <dl>
	        <dt><h3>Commentaire des Utilisateurs</h3></dt>
	        <dd>
	          <h4>"Je recommande vivement Driver Booster , il vous aide rapidement et facilement à mettre à jour les pilotes."</h4>
	        </dd>
	        <dd>"Driver Booster est une application sensationnelle. Si vous êtes comme moi avez de nombreuses applications et périphériques ou pilotes et ne pas avoir le temps de les mettre à jour manuellement."</dd>
	      </dl>
	      <dl class="active">
	        <dt><h3>Avis des Médias</h3></dt>
	        <dd>
	          <h4>La fonctionnalité de base simple de Driver Booster PRO est encore plus attrayante. "</h4>
	        </dd>
	        <dd>La fonctionnalité de base simple de Driver Booster PRO est encore plus attrayante. Grâce à l’inclusion de multiples licences à un prix très favorable ainsi qu’une interface personnalisable qui peut bien afficher des informations spécifiques sur le matériel. Alors que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent des fonctionnalités convaincantes, mais IObit Driver Booster PRO est le meilleur d’entre eux.</dd>
	      </dl>
	      <dl>
	        <dt><h3>Commentaire des Utilisateurs</h3></dt>
	        <dd>
	          <h4>"Il fonctionne parfaitement. Facile à utiliser, informatif et intuitif. Driver Booster restera dans ma boîte à outils pour toujours ... Great job!"</h4>
	        </dd>
	        <dd>"Ceci est l'un des meilleurs programmes de mise à jour du pilote. Microsoft m'a même égaré en suggérant des mises à jour qui ne compatible pas avec ma machine. Ce programme savait ce que les mises à jour je devais sans conflits. "</dd>
	      </dl>
	      <dl>
	        <dt><h3>Commentaire des Utilisateurs</h3></dt>
	        <dd>
	          <h4>“Les résultats étaient si fantastique que je vous conseille de l’obtenir tout de suite.”</h4>
	        </dd>
	        <dd>“Microsoft m’a égaré par conseiller les mises à jour inutiles pour ma machine. Driver Booster PRO détectait automatiquement les mises à jour des pilotes dont j’ai besoin et il peut les télécharger rapidement ”</dd>
	      </dl>
	    </div>
	    <ul class="users clearfix">
	      <li>
	        <div class="pic"><img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya"></div>
	        <p>Myo Thuya</p>
	      </li>
	      <li>
	        <div class="pic"><img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund"></div>
	        <p>Adam Backlund</p>
	      </li>
	      <li class="active">
	        <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc-magazine.png" alt="PC magazine">
	        </div>
	        <p>PC magazine</p>
	      </li>
	      <li>
	        <div class="pic"><img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
	        </div>
	        <p>Wayne Bowler</p>
	      </li>
	      <li>
	        <div class="pic"><img src="<?php echo $pResUrl; ?>images/leslie-hutton.png" alt="Leslie Hutton ">
	        </div>
	        <p>Leslie Hutton </p>
	      </li>
	    </ul>
		</div>
		<div class="comparison_table" id="compare">
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<thead>
				<tr>
					<th colspan="2">La comparaison de produit</th>
					<th class="space"></th>
					<th class="itemb">Driver Booster FREE</th>
					<th class="space"></th>
					<th class="itema">Driver Booster PRO</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
					<td class="virtue">Identifier Auto les pilotes obsolètes, manquants et défectueux	</td>
					<td class="space"></td>
					<td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
					<td class="virtue">Mise à jour en un clic pour une performance maximale du matériel</td>
					<td class="space"></td>
					<td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
					<td class="virtue">Débloquer la limite de vitesse de la mise à jour des pilotes</td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
					<td class="virtue">Priorité pour mettre à jour plus de pilotes obsolètes & rares  <sup>Amélioré  </sup> </td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
					<td class="virtue">Réduire les crashs Système pour une meilleure performance    <sup class="nou">Nouveau</sup></td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
					<td class="virtue">Télécharger & Installer Auto les pilotes pendant le temps d’inactivité   <sup class="nou"> Nouveau</sup></td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
					<td class="virtue">Sauvegarde automtique de tous les pilotes pour une restauration sûre </td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
					<td class="virtue">Priorité pour mettre à jour les composants de jeux  <sup> Amélioré</sup></td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
					<td class="virtue">Détecter et réparer efficacement les erreurs de périphériques <sup class="nou"> Nouveau </sup></td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
					<td class="virtue"> Mettre à jour Automatiquement vers la Dernière Version</td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
					<td class="virtue">Soutien Technique Gratuit de 24/7 à la Demande</td>
					<td class="space"></td>
					<td class="itemb"></td>
					<td class="space"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
				</tr>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="2"></th>
						<th class="space"></th>
						<th class="itemb">Driver Booster FREE <span>Votre édition actuelle</span></th>
						<th class="space"></th>
						<th class="itema">
							Driver Booster PRO
							<span>(1 an / 3 PCs)</span>
							<strong>24,99€</strong> <del>174,82€</del>
							<a href="http://www.iobit.com/buy.php?product=fr-db5sdpfiu2499&ref=fr_db5sdpfiupurchase1801<?php echo $refStr;?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1801-fr')" class="buybtn">VITE, J’EN PROFITE</a>
						</th>
					</tr>
				</tfoot>
			</table>
		</div>
		<dl class="annotation wrapper">
				<dt>Note:</dt>
				<dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
		</dl>
		<!-- main end -->
		<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
		<div class="floatlayer">
		  <div class="wrapper clearfix">
		    <h2>Economisez jusqu’à <strong>85%</strong> sur Driver Booster PRO et obtenez <br> gratuitement un super paquet cadeau!</h2>
		    <dl>
		    	<dt><strong>24,99€ </strong> <del>174,82€</del></dt>
		    	<dd><a href="http://www.iobit.com/buy.php?product=fr-db5sdpfiu2499&ref=fr_db5sdpfiupurchase1801<?php echo $refStr;?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1801-fr')" class="buybtn">VITE, J’EN PROFITE</a></dd>
		    </dl>
		  </div>
		</div>

		<script src="<?php echo $pResUrl; ?>js/script.js"></script>
		<script type="text/javascript">
			$(".right-message img").target($(".gift-box"));
			countdown((".header li strong"));
			$(".users li").userMouseover($(".content dl"));
			$(window).scrollWindow($(".banner .buybtn"),$('.floatlayer'),("on"));
		</script>
	</body>
</html>