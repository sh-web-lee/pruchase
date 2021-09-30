<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

//创建浮点计算，取 购买人数 及 剩余礼品数，根据情况选择使用
function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

// 已购买人数
// 需要精确到某个值时，先输出 ceil(microtime_float()*1000/20000) 再 由此结果计算需要减去的量
$cName='frdbau_re';
$reduceNum=empty($_COOKIE[$cName])?(ceil(microtime_float()*1000/20000)):$_COOKIE[$cName];
$buyNum = ceil(microtime_float()*1000/20000) - $reduceNum;
if($_GET['action']=='getBuyNum'){
  setcookie($cName, $reduceNum, time() + 3600 * 24 *30 *7);
  echo $buyNum;
  exit();
}

if(in_array($_GET['st'],array('dbxmasr','officialfree','officialpro'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('x_db','xi_db','xb_db'))){
	$refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];


?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Jusqu'à 85% d'économie sur Driver Booster PRO et profitez des cadeaux Noël !</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<div class="banner">
		<div class="snow"></div>
	 	<div class="wrapper">
	 		<a href="https://www.iobit.com/fr/index.php" target="_blank" class="logo">IObit</a>
			<h1>Vente Flash – Spécial Noël</h1>
			<h2>Offre à durée limitée <div class="date"><span>Plus que </span> <strong>00</strong> H <strong>55</strong> Min <strong>55</strong> Sec <strong>55</strong> Ms</div></h2>

 			<div class="one-pc-box">
 				<h2>60% de remise</h2>
 				<div class="img-box clearfix">
 					<img src="<?php echo getStaticUrl('images/db-one-box.png')?>" alt=""/>
 					<div class="price">
 						<strong>29</strong>
 						<span>
 							<b>€99</b>
 							<del>74,85€</del>
 						</span>
 					</div>
 				</div>
 				<a href="https://www.iobit.com/buy.php?product=fr-db71y3pc2999&ref=fr_db71y3pc2999purchase1911<?php echo $refStr;?>&aff=&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1911b-fr')" class="button border">J’en profite !</a>
 			</div>

 			<div class="packs">
 				<h2>85% de remise</h2>
 				<div class="img-box clearfix">
 					<span class="box"><img src="<?php echo getStaticUrl('images/packs-box.png')?>" alt=""/></span>
 					<div class="price">
 						<strong>24</strong>
 						<span>
 							<b>€99</b>
 							<del>174,82€</del>
 						</span>
 					</div>
 				</div>
 				<a href="https://www.iobit.com/buy.php?product=fr-db71y3pcisusdpf2499&ref=fr_db71y3pcisusdpf2499purchase1911<?php echo $refStr;?>&aff=&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1911a-fr')" class="button">J’en profite !</a>
 				<p class="people"><span>4 325 356</span> personnes l’ont acheté !</p>
 			</div>

 			<div class="one-pc-box three-pcs">
 				<h2>15% de remise</h2>
 				<div class="img-box clearfix">
 					<span class="box"><img src="<?php echo getStaticUrl('images/right-box.png')?>" alt=""/></span>
 					<div class="price">
 						<strong>24</strong>
 						<span>
 							<b>€99</b>
 							<del>29,99€</del>
 						</span>
 					</div>
 				</div> 	
 				<a href="https://www.iobit.com/buy.php?product=fr-db71y1pc2499&ref=fr_db71y1pc2499purchase1911<?php echo $refStr;?>&aff=&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1911c-fr')" class="button border">J’en profite !</a>
 			</div>
	 	</div>
	</div>
	<div class="payments wrapper">
		<img src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
	</div>
	<!-- benefits start -->
	<div class="benefits wrapper clearfix">
	  <h2><span>Profitez des performances optimales <br> sur PC et les jeux en ligne avec Driver Booster PRO</span></h2>
	  <div class="showcase">
	    <div class="inner">
	      <ul class="screenshot clearfix">
	        <li>
	          <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt=""/>
	        </li>
	        <li>
	          <img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt=""/>
	        </li>
	        <li>
	          <img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt=""/>
	        </li>
	        <li>
	          <img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt=""/>
	        </li>
	      </ul>
	    </div>
	    <ul class="zoom">
	      <li class="fun1 active">
	        <div class="container">
	          <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png')?>" alt=""/>
	        </div>
	      </li>
	      <li class="fun2">
	        <div class="container">
	          <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt=""/>
	        </div>
	      </li>
	      <li class="fun3">
	        <div class="container">
	          <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt=""/>
	        </div>
	      </li>
	      <li class="fun4">
	        <div class="container">
	          <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt=""/>
	        </div>
	      </li>
	    </ul>
	  </div>
	  <div class="detail-list">
	    <dl class="active first">
	      <dt><i class="benefits01"></i></dt>
	      <dd>
	        <h3>Met à jour plus de 3 500 000 pilotes</h3>
	        <p>
	          Solution “one-stop” pour mettre à jour automatiquement<br>
	          plus de 3 500 000 pilotes obsolètes et incompatibles.
	        </p>
	      </dd>
	    </dl>
	    <dl>
	      <dt><i class="benefits02"></i></dt>
	      <dd>
	        <h3>Mise à jour 100% sécurisée</h3>
	        <p>
	          Sauvegarder automatiquement tous les pilotes et créer<br> un point de restauration du système.
	        </p>
	      </dd>
	    </dl>
	    <dl class="three">
	      <dt><i class="benefits03"></i></dt>
	      <dd>
	        <h3>Performance de jeu maximale</h3>
	        <p>
	          Augmentez les performances de jeu avec les derniers<br>
	          pilotes Game Ready et améliorez l’expérience de jeu avec<br>
	          les composants mis à jour et appropriés.
	        </p>
	      </dd>
	    </dl>
	    <dl>
	      <dt><i class="benefits04"></i></dt>
	      <dd>
	        <h3>Téléchargement de pilotes plus rapide</h3>
	        <p>
	          Télécharger et installer automatiquement les<br>
	          pilotes & les composants du jeu pendant le temps d’inactivité.
	        </p>
	      </dd>
	    </dl>
	  </div>
	  <div class="clearfix"></div>
	  <a class="more fr" href="javascript: void(0)">En savoir plus sur la version PRO >></a>
	</div>
	<!-- benefits end -->

	<!-- gifts -->
	<div class="gifts">
		<div class="wrapper">
			<h2>Quantité limitée ! Ne manquez pas les cadeaux Noël !</h2>
			<div class="clearfix">
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""></dt>
					<dd>
						<strong>0€</strong> <del>39,99€ </del>
						<p>
							Un outil de protection puissant des fichiers qui garantit la sécurité de vos dossiers et vos données.
						</p>
					</dd>
				</dl>
				<dl class="center">
					<dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""></dt>
					<dd>
						<strong>0€</strong> <del>29,99€ </del>
						<p>
							Maximisez les performances et la durée de votre disque en défragmentant les registres et les fichiers du système.
						</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt=""></dt>
					<dd>
						<strong>0€</strong> <del>29,99€ </del>
						<p>Mettez à jour automatiquement tous vos logiciels sans ouvrir de navigateur Web.</p>
					</dd>
				</dl>
			</div>
			<a class="button btn-mid-lag"
			   href="https://www.iobit.com/buy.php?product=fr-db71y3pcisusdpf2499&ref=fr_db71y3pcisusdpf2499purchase1911<?php echo $refStr;?>&aff=&refs=fr_purchase_db"
			   onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1911a-fr')">
			  Profitez-en dès maintenant
			</a>
		</div>
	</div>
	<!-- end gifts -->

	<!-- review -->
	<div class="review wrapper">
	  <h2>
	    Nous faisons de notre mieux pour satisfaire <br>
	    nos clients où que vous soyez !
	  </h2>
	  <div class="container">
	    <h3>Qu'en pensent-ils ?</h3>
	    <ul>
	      <li class="one"><img src="<?php echo getStaticUrl('images/jean-pierre.png')?>" alt="Jean-Pierre FILLION"></li>
	      <li class="two"><img src="<?php echo getStaticUrl('images/pcmag.png')?>" alt="PC Magazine"></li>
	      <li class="three"><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></li>
	      <li class="four"><img src="<?php echo getStaticUrl('images/christian-cappelle.png')?>" alt="Christian Cappelle"></li>
	    </ul>
	    <div class="details">
	      <div>
	        <h4>Jean-Pierre FILLION <img src="<?php echo getStaticUrl('images/flag-fr.png')?>" alt=""></h4>
	        <p>« J'ai été fortement impressionné de voir tout ce que peut faire Driver Booster PRO ! J'en avais tellement besoin pour résoudre une partie de mes logiciels dont les drivers étaient périmés et bons à mettre à jour. Je ne regrette pas de m'être penché sur Driver Booster. »</p>
	      </div>
	      <div class="active">
	        <h4>PC Magazine</h4>
	        <p>« Driver Booster PRO, simple et efficace, offre de multiples fonctionnalités et des clés de licence pour un bon prix. Bien que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent également des fonctionnalités intéressantes, IObit Driver Booster PRO reste absolument numéro un. »</p>
	      </div>
	      <div>
	        <h4>Hishaam Salasa <img src="<?php echo getStaticUrl('images/flag-us.png')?>" alt=""></h4>
	        <p>« Le meilleur logiciel de mise à jour de pilotes sur le marché absolument qui possède une interface utilisateur conviviale et facile à utiliser. 5 ETOILES bien mérités !!! »</p>
	      </div>
	      <div>
	        <h4>Christian Cappelle <img src="<?php echo getStaticUrl('images/flag-be.png')?>" alt=""></h4>
	        <p>« Driver Booster PRO m'a permis de rafraîchir et optimise mes ordinateurs qui fonctionnent beaucoup mieux malgré leur âge avancé . Avec les mises à jour régulières il demeurent plus efficaces et plus fluides! »</p>
	      </div>
	    </div>
	    <a class="next" href="javascript: nextFun();"></a>
	    <a class="prev" href="javascript: prevFun();"></a>
	  </div>
	</div>
	<!-- end review -->

	<!-- comparison -->
	<div class="comparison wrapper">
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
	      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
	      <td class="virtue">Identifier Auto les pilotes obsolètes, manquants et défectueux	</td>
	      <td class="space"></td>
	      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
	      <td class="space"></td>
	      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
	    </tr>
	    <tr>
	      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
	      <td class="virtue">Débloquer la limite de vitesse de la mise à jour des pilotes</td>
	      <td class="space"></td>
	      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
	      <td class="space"></td>
	      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
	    </tr>
	    <tr>
	      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
	      <td class="virtue">Priorité pour mettre à jour plus de pilotes obsolètes & rares  <sup>Amélioré  </sup> </td>
	      <td class="space"></td>
	      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
	      <td class="space"></td>
	      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
	    </tr>
	    <tr>
	      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
	      <td class="virtue">Réduire les crashs Système pour une meilleure performance    <sup class="nou">Nouveau</sup></td>
	      <td class="space"></td>
	      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
	      <td class="space"></td>
	      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
	    </tr>
	    <tr>
	      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
	      <td class="virtue">Télécharger & Installer Auto les pilotes pendant le temps d’inactivité   <sup class="nou"> Nouveau</sup></td>
	      <td class="space"></td>
	      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
	      <td class="space"></td>
	      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
	    </tr>
	    <tr>
	      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
	      <td class="virtue">Sauvegarde automtique de tous les pilotes pour une restauration sûre </td>
	      <td class="space"></td>
	      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
	      <td class="space"></td>
	      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
	    </tr>
	    <!-- ADD NEW -->
	    <tr>
	      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
	      <td class="virtue">Priorité pour obtenir les pilotes Game Ready <sup class="nou"> Nouveau </sup></td>
	      <td class="space"></td>
	      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
	      <td class="space"></td>
	      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
	    </tr>
	    <!-- AMEND OLD -->
	    <tr>
	      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
	      <td class="virtue">Priorité pour installer les composants de jeu mis à jour et appropriés <sup> Amélioré</sup></td>
	      <td class="space"></td>
	      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
	      <td class="space"></td>
	      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
	    </tr>
	    <tr>
	      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
	      <td class="virtue">Détecter et réparer efficacement les erreurs de périphériques <sup class="nou"> Nouveau </sup></td>
	      <td class="space"></td>
	      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
	      <td class="space"></td>
	      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
	    </tr>
	    <tr>
	      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
	      <td class="virtue"> Mettre à jour Automatiquement vers la Dernière Version</td>
	      <td class="space"></td>
	      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
	      <td class="space"></td>
	      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
	    </tr>
	    <tr>
	      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
	      <td class="virtue">Soutien Technique Gratuit de 24/7 à la Demande</td>
	      <td class="space"></td>
	      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
	      <td class="space"></td>
	      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
	    </tr>
	    </tbody>
	  </table>
	</div>
	<!-- end comparison -->

	<!-- bottomcart -->
	<div class="bottomcart">
		<div class="wrapper">
			<h2>N'attendez pas, les meilleures offres Noël c'est maintenant !</h2>
			<div class="img-box">
				<img src="<?php echo getStaticUrl('images/bottom-box.png')?>" alt=""/>
			</div>
			<div class="price">
				<p>
					<strong>24</strong>
					<span>
						<b>€99</b>
						<del>174,82€</del>
					</span>
				</p>
				<a href="https://www.iobit.com/buy.php?product=fr-db71y3pcisusdpf2499&ref=fr_db71y3pcisusdpf2499purchase1911<?php echo $refStr;?>&aff=&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1911a-fr')" class="button">J’en profite !</a>
				<div class="date"><span>Plus que </span> <strong>00</strong> H <strong>55</strong> Min <strong>55</strong> Sec <strong class="last">55</strong> Ms</div>
			</div>
		</div>
	</div>
	<!-- end bottomcart -->
	
	<!-- service -->
	<div class="service wrapper clearfix">
	  <dl>
	    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
	    <dd>
	      <h3>Satisfait ou Remboursé</h3>
	      <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
	    </dd>
	  </dl>
	  <dl>
	    <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
	    <dd>
	      <h3>Paiement 100% Sécurisé</h3>
	      <p>IObit vous propose huit modes de paiement sécurisés pour régler vos achats.</p>
	    </dd>
	  </dl>
	  <dl>
	    <dt><img src="<?php echo $pResUrl;?>images/buycut.png" alt=""></dt>
	    <dd>
	      <h3>Obtenir la licence</h3>
	      <p>Vous recevrez le code de licence dans les minutes après l’achat.</p>
	    </dd>
	  </dl>
	</div>
	<!-- end service -->
	
	<!-- footer -->
	<div class="footer wrapper">
	  <dl>
	    <dt>Note:</dt>
	    <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
	    <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
	  </dl>
	  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
	</div>
	<!-- end footer -->
	
	<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	<script type="text/javascript">
		var refStr = '<?php echo $refStr;?>';
	</script>
</body>
</html>