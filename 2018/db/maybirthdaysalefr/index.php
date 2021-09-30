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

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>Vente Flash pour célébrer le 9ème anniversaire de Driver Booster PRO！</title>
		<meta name="Copyright" content="IObit">
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
		<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
		<?php echo $gJavascript['public']; ?>
		<?php echo $gJavascript['head']; ?>
		<script>
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
		<div class="banner">
			<div class="wrapper">
				<a href="https://www.iobit.com/fr/index.php" target="_blank" class="logo" target="_blank">IObit</a>
				<h1> Célébrons le 9ème anniversaire de Driver Booster</h1>
				<div class="box">
					<h3>-10%</h3>
					<span>Driver Booster 1AN 1PC</span>
					<dl class="price-content">
						<dt>
							<strong>22</strong>
							<span>€99 <del>24,95€</del></span>
						</dt>
						<dd>
							<a href="https://www.iobit.com/buy.php?product=fr-db51pc2299&ref=fr_db51pc2299purchase1805<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1805c-fr')" class="buybtn border"><i></i> VITE, J’EN PROFITE</a>
						</dd>
					</dl>
				</div>
				<div class="three-box box">
					<p class="date"><img src="<?php echo $pResUrl; ?>images/date.png" alt=""> Expiré dans <strong>03</strong>H: <strong>03</strong>m: <strong>03</strong>s: <strong>003</strong>ms *</p>
					<img src="<?php echo $pResUrl; ?>images/db-three-box.png" alt="" class="img-box">
					<dl class="price-content">
						<dt>
							<strong>24</strong>
							<span>€99 <del>144,83€</del></span>
						</dt>
						<dd>
							<a href="https://www.iobit.com/buy.php?product=fr-db5sdpf2499&ref=fr_db5sdpf2499purchase1805<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1805a-fr')" class="buybtn"><i></i> VITE, J’EN PROFITE</a>
						</dd>
						<dd class="last"><img src="<?php echo $pResUrl; ?>images/people.png" alt=""> 5,406,553 personnes l'ont acheté!</dd>
					</dl>
				</div>
				<div class="three-pc box">
					<h3>-60%</h3>
					<span>Driver Booster 1AN 3PC</span>
					<dl class="price-content">
						<dt>
							<strong>24</strong>
							<span>€99 <del>74,85€</del></span>
						</dt>
						<dd>
							<a href="https://www.iobit.com/buy.php?product=fr-db53pc2499&ref=fr_db53pc2499purchase1805<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1805b-fr')" class="buybtn border"><i></i> VITE, J’EN PROFITE</a>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="payment">
			<img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
		</div>
	<div class="feature">
		<div class="wrapper">
			<h2>Gardez les pilotes à jour et les performances du PC stables</h2>
			<img src="<?php echo $pResUrl; ?>images/showcase.png" alt="" class="showcase">
			<div class="detail-list">
				<dl>
					<dt><i class="benfits01"></i></dt>
					<dd>
						<h3>Base de données 200%* plus grande</h3>
						<p>Solution “one-stop” pour mettre à jour automatiquement 200% plus de pilotes obsolètes et imcompatibles.</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits02"></i></dt>
					<dd>
						<h3>Mise à jour 100% sécurisée</h3>
						<p>Sauvegarder automatiquement tous les pilotes et créer un point de restauration du système.</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits03"></i></dt>
					<dd>
						<h3>Expérience du jeu plus fluide</h3>
						<p>Prend en charge plus de composants du jeu comme Nvidia, Realtek, Intel, AMD, Broadcom, VIA, DirectX<sup>®</sup>, et VC Runtime 2013, etc.</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits04"></i></dt>
					<dd>
						<h3>Téléchargement de pilotes plus rapide </h3>
						<p>Télécharger et installer automatiquement les pilotes & les composants du jeu pendant le temps d’inactivité.</p>
					</dd>
				</dl>
				<a href="Javascript:void(0);" onclick="goTarget($('.compare'))" class="textlink">En savoir plus sur la version PRO >></a>
			</div>
		</div>
	</div>
	<div class="gift-box">
		<h2>Un paquet cadeau à durée limitée pour nos utilisateurs importants !</h2>
		<div class="wrapper clearfix"> 	
			<div class="box">
				<img src="<?php echo $pResUrl; ?>images/sd-gift.png" alt="">
				<dl>
					<dt>
						<h3>Smart Defrag 6 PRO</h3>
						<del>29,99€</del> <strong>0<b>€</b> </strong>
					</dt>
					<dd>Accélère la vitesse d’accès aux fichiers & de <br> lancement du jeu</dd>
					<dd>Maximise les performances du disque dur <br> et de votre PC    </dd>
				</dl>
			</div>
			<div class="box last">
				<img src="<?php echo $pResUrl; ?>images/pf-gift.png" alt="">
				<dl>
					<dt>
						<h3>Protected Folder</h3>
						<del>39,99€</del> <strong>0<b>€</b> </strong>
					</dt>
					<dd>Il fait office de coffre-fort pour vos fichiers <br> et dossiers</dd>
					<dd>Un mot de passe empêche quiconque <br> de les ouvrir   </dd>
				</dl>
			</div>
			<a href="https://www.iobit.com/buy.php?product=fr-db5sdpf2499&ref=fr_db5sdpf2499purchase1805<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1805a-fr')" class="buybtn red"><i></i> VITE, J’EN PROFITE</a>
		</div>
	</div>
  <div class="review">
    <div class="wrapper ">
      <h2> Approuvé par ces célèbres médias à travers le monde</h2>
      <div class="review-message">
        <dl class="wayne">
          <dt>
            <div class="img-box">
              <h4>Wayne Bowler</h4>
              <img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>"Driver Booster PRO est l’un des meilleurs programmes de mise à jour de pilotes sur le marché. Très facile à utiliser, informatif et intuitif, il contient toutes les mises à jour dont j’ai besoin."</dd>
        </dl>
        <dl class="myo ">
          <dt>
            <div class="img-box">
              <h4>Myo Thuya</h4>
              <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>"Mon PC est plus rapide, plus stable que je ne le pensais avec Driver Booster PRO."</dd>
        </dl>
        <dl class="pcmag red-round active">
          <dt>
            <div class="img-box">
              <h4>PC-MAG</h4>
              <img src="<?php echo $pResUrl; ?>images/pc-mag.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>“IObit développe de nombreux logiciels pour Windows, Driver Booster PRO, qui met automatiquement à jour les pilotes, est l’un de ses meilleurs programmes.”</dd>
        </dl>
        <dl class="chip ">
          <dt>
            <div class="img-box">
              <h4>chip</h4>
              <img src="<?php echo $pResUrl; ?>images/chip.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>"Driver Booster PRO: La mise à jour automatique de pilotes n’est que offerte dans la version PRO. ”</dd>
        </dl>
        <dl class="fabio red-round active">
          <dt>
            <div class="img-box">
              <h4>Fabio Tursi</h4>
              <img src="<?php echo $pResUrl; ?>images/fabio-tursi.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>"Avec Driver Booster PRO, j’ai finalement trouvé le programme parfait pour garder mon système propre et à jour.”</dd>
        </dl>
        <dl class="vector ">
          <dt>
            <div class="img-box">
              <h4>Vector</h4>
              <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
            <div>
            <div class="line"></div>
          </dt>
          <dd>“Enfin un programme qui maintient mon système à jour de la manière la plus simple!”</dd>
        </dl>
        <dl class="adam">
          <dt>
            <div class="img-box">
              <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="">
               <h4>Adam Backlund</h4>
             </div>
            <div class="line"></div>
          </dt>
          <dd>"Je recommande vivement Driver Booster PRO à tous ceux qui veulent mettre à jour leurs pilotes rapidement et facilement."</dd>
        </dl>
        <dl class="olnet">
          <dt>
            <div class="img-box">
              <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
               <h4>01net</h4>
             <div>
            <div class="line"></div>
          </dt>
          <dd>“Toutes ces opérations sont réalisées en un seul clic, ce qui vous fait gagner un temps précieux, et rend votre PC plus stable.”</dd>
        </dl>
        <dl class="olorin red-round active">
          <dt>
            <div class="img-box">
              <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
               <h4>Olorin 89</h4>
             </div>
            <div class="line"></div>
          </dt>
          <dd>“Driver Booster est un outil simple de mise à jour du pilote qui rend la vie plus facile pour tout le monde.”</dd>
        </dl>
        <dl class="html ">
          <dt>
            <div class="img-box">
              <img src="<?php echo $pResUrl; ?>images/html-it.png" alt="">
               <h4>HTML-it</h4>
            </div>
            <div class="line"></div>
          </dt>
          <dd>“IObit Driver Booster garde tous les pilotes toujours à jour avec sa technologie de pointe.”</dd>
        </dl>

      </div>
    </div>
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
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
					<td class="virtue">Priorité pour mettre à jour les composants de jeux  <sup> Amélioré</sup></td>
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
		<div class="bottomcart">
		<div class="wrapper">
			<h2>Premier arrivé, premier servi !</h2>
			<div class="showcase">
				<span class="img three-box"></span>
			</div>
			<ul>
				<li class="active" data-url="https://www.iobit.com/buy.php?product=fr-db5sdpf2499&ref=fr_db5sdpf2499purchase1805<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=fr_purchase_db" data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1805a-fr')" data-price="24" data-original="144,83€"><span>1 An / 3 PC+Paquet Cadeau</span> <strong>-83%</strong></li>
				<li class="three-pc" data-url="https://www.iobit.com/buy.php?product=fr-db53pc2499&ref=fr_db53pc2499purchase1805<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=fr_purchase_db" data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1805b-fr')" data-price="24" data-original="74,85€"><i></i> <span> 1 An / 3 PC </span> <strong>-60%</strong></li>
				<li class="one-pc" data-url="https://www.iobit.com/buy.php?product=fr-db51pc2299&ref=fr_db51pc2299purchase1805<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=fr_purchase_db" data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1805c-fr')" data-price="22" data-original="24,95€"><i></i> <span>1 An / 1 PC  </span> <strong>-10%</strong></li>
			</ul>
			<dl class="price-content">
				<dt>
					<strong class="price">24</strong>
					<span>€99 <del class="original">144,83€</del></span>
				</dt>
				<dd>
					<a href="https://www.iobit.com/buy.php?product=fr-db5sdpf2499&ref=fr_db5sdpf2499purchase1805<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1805a-fr')" class="buybtn"><i></i> VITE, J’EN PROFITE</a>
				</dd>
			</dl>
		</div>
	</div>
	<div class="footer">
    <div class="service wrapper clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
        <dd><h3>Satisfait ou Remboursé</h3></dd>
        <dd>Garantie satisfait ou remboursé pendant 60 <br> jours après la date d’achat.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
        <dd><h3>Paiement 100% Sécurisé</h3></dd>
        <dd>IObit vous propose huit modes de paiement <br> sécurisés pour régler vos achats.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/service.png" alt=""></dt>
        <dd><h3>Obtenir la licence</h3></dd>
        <dd>Vous recevrez le code de licence dans les <br> minutes après l’achat.</dd>
      </dl>
    </div>
    <!-- annotation start -->
    <dl class="annotation wrapper">
      <dt>Note:</dt>
      <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
      <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
    </dl>
    <!-- annotation end -->
    <!-- footer start -->
    <p>Copyright © 2005 - 2018 IObit. Tous droits réservés</p>
    <!-- footer end -->
  </div>
		<script src="<?php echo $pResUrl; ?>js/script.js"></script>
	</body>
</html>