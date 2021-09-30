<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if (empty($_GET['ref'])) $_GET['ref'] = 'fraff_db8_2021trialendsale';
if(empty(json_decode(base64_decode($_GET['tdata'])))){
	$_GET['tdata']='eyJMZnRUb2RDb3VudCI6MCwiTGZ0RHJ2Q291bnQiOjAsIkxmdENtcENvdW50IjowLCJMZnRUcmxEYXkiOjF9';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Economisez 75% sur Driver Booster PRO - IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,800" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<div class="title">
				<p>Votre période d'essai arrive à expiration dans <b class="days">3</b> <span class="dayStr">jours</span> !</p>
				<h1>La dernière chance pour profiter du meilleur prix uniquement pour l'utilisateur à l'essai</h1>
			</div>
			<div class="offer clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
				</div>
				<div class="right fr">
					<h2>Ne ratez pas le meilleur prix !</h2>
					<div class="curvebox">
						<img src="<?php echo getStaticUrl('images/price-curve.png')?>" alt=""/>
						<span class="one">
							Avant le <i class="date0">11</i> <em class="month">Avril</em>
						</span>
						<span class="two">
							<i class="date0">11</i> <em class="month">Avril</em> au <i class="date1">21</i> <em class="month">Avril</em>
						</span>
						<span class="three">
							<i class="date2">22</i>  <em class="month">Avril</em> au <i class="date3">24</i> <em class="month">Avril</em>
						</span>
						<span class="four">
							Après le <i class="date3">24</i> <em class="month">Avril</em>
						</span>
					</div>
					<ul class="price clearfix">
						<li><p>Aujourd’hui <b>19,99€</b></p> Réduction: -75%</li>
						<li class="last">
							<a class="buybtn" 
							   href="https://www.iobit.com/buy.php?product=fraff-db83pc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
							   onclick="ga('send', 'event', 'dbbuy', 'buy', 'fraffdb82021trialendsale')">
								<i class="all-icons"></i> VITE, J’EN PROFITE
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Pourquoi choisir Driver Booster PRO?</h2>
			<p class="words">Mettez à jour <b class="nums"></b> <span>pilotes obsolètes</span> <em>& composants</em> de jeu pour améliorer la stabilité des performances du PC et l’expérience du jeu.</p>
			<div class="content">
				<dl class="one">
					<dt><i class="all-icons">1</i></dt>
					<dd>
						<h3>Performance stable</h3>
						<p>Mettez à jour les pilotes nécessaires pour éviter le gel ou les crashs du système.</p>
					</dd>
				</dl>
				<dl class="two">
					<dt><i class="all-icons">2</i></dt>
					<dd>
						<h3>Chargement rapide du jeu </h3>
						<p>Mettez à jour les composants appropriés pour garantir un lancement fluide.</p>
					</dd>
				</dl>
				<dl class="three">
					<dt><i class="all-icons">3</i></dt>
					<dd>
						<h3>Gestion efficace des périphériques</h3>
						<p>Détectez et corrigez les erreurs de périphériques pour diminuer les problèmes du matériel.</p>
					</dd>
				</dl>
				<dl class="four">
					<dt><i class="all-icons">4</i></dt>
					<dd>
						<h3>Meilleure expérience du jeu</h3>
						<p>Mettez les pilotes liés au jeu pour découvrir les fonctionnalités avancées.</p>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- feature end -->

	<!-- comparison start -->
	<div class="comparison wrapper">
	  <h2>Aperçu des différences entre votre version actuelle et PRO ?</h2>
	  <table>
	    <thead>
	      <tr>
	        <th colspan="2"></th>
	        <th class="itema">
	          <div class="free">Votre version actuelle</div>
	        </th>
	        <th class="space"></th>
	        <th class="itemb">
	          <div class="pro">Driver Booster PRO</div>
	        </th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
	        <td class="virtue">Mettez à jour les pilotes lors du système inactif</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
	        <td class="virtue">Mettez à jour les pilotes en un clic</td>
	        <td class="itema">Expirera dans <span class="days">3</span> <span class="dayStr">jours</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
	        <td class="virtue">La vitesse de mise à jour jusqu’à 100% plus rapide</td>
	        <td class="itema">Expirera dans <span class="days">3</span> <span class="dayStr">jours</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
	        <td class="virtue">Corrigez les erreurs de périphériques pour un PC plus sûr</td>
	        <td class="itema">Expirera dans <span class="days">3</span> <span class="dayStr">jours</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
	        <td class="virtue">Téléchargement et sauvegarde automatiques</td>
	        <td class="itema">Expirera dans <span class="days">3</span> <span class="dayStr">jours</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	    </tbody>
	    <tfoot>
	      <tr>
	        <th colspan="2"></th>
	        <th class="itema"></th>
	        <th class="space"></th>
	        <th class="itemb">
	          <p><b>19,99€</b> <del>74,85€</del></p>
	          <a class="buybtn" 
	             href="https://www.iobit.com/buy.php?product=fraff-db83pc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
	             onclick="ga('send', 'event', 'dbbuy', 'buy', 'fraffdb82021trialendsale')">
	          	<i class="all-icons"></i> VITE, J’EN PROFITE
	          </a>
	          <p>1 An d’abonnement / 3 PC</p>
	        </th>
	      </tr>
	    </tfoot>
	  </table>
	</div>
	<!-- comparison end -->

	<!-- review start -->
	<div class="review">
	  <div class="wrapper">
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
	      <dl class="myo">
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
	          </div>
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
	          </div>
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
	<!-- review end -->

	<!-- awards start -->
	<div class="awards">
	  <div class="wrapper">
	  	<h2>Récompenses Mondiales</h2>
	  	<p>Approuvé par ces célèbres médias à travers le monde au cours des dernières cinq années</p>
	  	<img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
	  </div>
	</div>
	<!-- awards end -->

	<!-- service start -->
	<div class="service wrapper clearfix">
		<dl class="fl">
			<dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
			<dd>
				<h3>Garantie satisfait ou remboursé pendant 60 jours</h3>
				<p>L’activation de PRO édition résoudra tous vos problèmes de pilotes à un prix abordable!</p>
			</dd>
		</dl>
		<dl class="fr">
			<dd><h3>Nous acceptons </h3></dd>
			<dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
		</dl>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<dl class="note wrapper">
	  <dt>Note:</dt>
	  <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
	  <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
	</dl>
	<div class="copyright">
		<p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	    <div class="left fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/></div>
	    <h2 class="fl">-<span class="off">75</span>%</h2>
	    <div class="price fr">
	    	<h3>Maintenez tous les pilotes à jour pendant toute l’année !</h3>
	    	<a class="buybtn" 
	    	   href="https://www.iobit.com/buy.php?product=fraff-db83pc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
	    	   onclick="ga('send', 'event', 'dbbuy', 'buy', 'fraffdb82021trialendsale')">
	    		<i class="all-icons"></i> J’EN PROFITE
	    	</a>
	    	<p>1 An d’abonnement / 3 PC</p>
	    </div>
	  </div>
	</div>
	<!-- floatlayer end -->
	<script>
		var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
		transData = JSON.parse(transDataJson);
	</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>