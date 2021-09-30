<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'isdecxmassalefr2020_p' . $date;
	$c_name_t='isdecxmassalefr2020_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(78,98);
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
		setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 0) {
			$packsNum = 0;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$viewNum=rand(156,200);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].'-'.$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jusqu'à 87% d'économie sur IObit Software Updater PRO et profitez des cadeaux de Noël !</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<h1>Nouveau Lancement Offre Spéciale</h1>
			<div class="img-box">
				<img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Update PRO"/>
        <img class="slist snow" src="<?php echo getStaticUrl('images/snow.png')?>" alt=""/>
        <img class="slist cap" src="<?php echo getStaticUrl('images/cap.png')?>" alt=""/>
			</div>
			<div class="right-message">
          <h2><span>2 cadeaux offerts</span> pour les 100 premiers acheteurs! </h2>
          <div class="progress">
            <p><strong class="viewNum"><?php echo $viewNum;?></strong> visiteurs,  <span class="buyNum">51</span> places restantes</p>
            <div class="bar">
              <span class="box"><span class="disappear"></span></span>
            </div>
          </div>
          <p class="price">
            <span>Maintenant <strong><b>12</b> <span>€<b>99</b></span></strong></span>
            <a href="https://www.iobit.com/buy.php?product=fr-isu33pcpfsd1299&ref=fr_isu33pcsdpfindexpuchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2012-fr');"  class="buybtn">J’EN PROFITE VITE</a>
          </p>
          <ul class="list">
          	<li>
          		Prix original <span>99,97€</span>
          	</li>
          	<li>Remise  <span>87%  </span></li>
          	<li>Économisez <span>86,98€</span></li>
          </ul>
        </div>
		</div>
	</div>
	<!-- banner end -->


	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>C’est le gestionnaire de mise à jour de logiciels que vous cherchiez !</h2>
			<img src="<?php echo getStaticUrl('images/intro-box.jpg')?>" class="img-box" alt="IObit Software Update PRO"/>
      <img class="oldoman" src="<?php echo getStaticUrl('images/oldman.png')?>" alt=""/>
			<div class="left-message">
				<h3><i></i> Mise à jour immédiate  </h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
					<dd><strong>Restez Protégé </strong></dd>
          <dd>Gardez vos logiciels à jour et réparez <br> toutes les failles exploitables <br> par les hackers.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
					<dd><strong>Performances Maximales </strong></dd>
          <dd>La mise à jour de logiciels obsolètes vous <br> permettant de profiter de ses nouvelles <br> fonctions et d’améliorer la performance ainsi que la stabilité de votre PC.</dd>
				</dl>
			</div>
			<div class="right-message">
				<h3><i></i> Mise à jour facile et sécurisée  </h3>
				<dl class="list01">
					<dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
					<dd><strong>Mises à jour illimités</strong> Mettez à jour tous les logiciels obsolètes sur votre ordinateur par lot. <span>(La version gratuite : 2 par jour)</span> </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
					<dd><strong>Mises à jour automatiques </strong> Téléchargez et installez automatiquement les mises à jour de vos logiciels selon vos heures programmées.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt=""></dt>
					<dd><strong>Mise à jour et rien d’autre </strong> Pas de publicités, de barres d’outils ou de logiciels s’installant en supplément.</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Plus d’avantages vous obtenez d’IObit Software Updater 3 PRO</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
					<span class="suspend01"></span>
					<span class="suspend02"></span>
					<span class="suspend03"></span>

				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li>Téléchargez et installez les programmes depuis l’interface du programme</li>
						<li>Téléchargez et installez les mises à jour en mode silencieux</li>
						<li>Configurez des analyses et des mises à jour automatiques selon votre préférence</li>
						<li>Ignorez des programmes que vous ne souhaitez pas mettre à jour</li>
						<li>Téléchargez directement les outils de télétravail populaires</li>
						<li>Créez automatiquement un point de restauration avant l’installation</li>
						<li>Supprimez automatiquement les fichiers d’installation après l’installation</li>
						<li>Pas de publicités, ni de sponsors</li>
					</ul>
					 <p class="price">
            <span><strong><b>12</b> <span>€<b>99</b></span></strong> <span>Il ne reste plus que <b class="buyNum">50</b> places!</span></span>
            <a href="https://www.iobit.com/buy.php?product=fr-isu33pcpfsd1299&ref=fr_isu33pcsdpfindexpuchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2012-fr');" class="buybtn">J’EN PROFITE VITE </a>
          </p>
				</div>
			</div>
		</div>
	</div>
	<!-- feature end -->
	<div class="gift-message">
		<div class="wrapper">
			<h2>Quels avantages supplémentaires obtiendrez-vous des cadeaux gratuits?</h2>
			<dl>
				<dt>
          <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""/>
          <img class="ball" src="<?php echo getStaticUrl('images/ball.png')?>" alt=""/>
        </dt>
				<dd>
					<h3>Smart Defrag PRO</h3>
					<strong>0€</strong> <del>29,99€</del> 1 an / 1 PC
					<p>Maximisez les performances du <br> disque dur et de votre PC.</p>
				</dd>
			</dl>
			<dl class="pf">
				<dt>
          <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""/>
          <img class="ball" src="<?php echo getStaticUrl('images/ball.png')?>" alt=""/>
        </dt>
				<dd>
					<h3>Protected Folder</h3>
					<strong>0€</strong> <del>39,99€</del> 1 an / 1 PC
					<p>Ne vous inquiétez jamais du vol de <br> données ou des fuites de la vie privée! </p>
				</dd>
			</dl>
		</div>
	</div>
	<div class="review ">
		<div class="wrapper">
    <h2>Qu’en pensent-ils?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>L’avis de média</h2>
              <p>IObit Software Updater a été conçu pour simplifier la tâche de mise à jour de tous les programmes de votre ordinateur. Il peut vérifier les nouvelles versions et les installer automatiquement, et sans intervention de l'utilisateur. En outre, il peut vous aider à télécharger et à installer des logiciels populaires à diverses fins.</p>
              <cite>softpedia</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nicolae Mocioc"></dt>
            <dd>
              <h2>Avis d’utilisateur</h2>
              <p>J'ai installé IObit Software Update Free selon les conseils d'un ami et je suis très heureux de la rapidité et de la simplicité d’utilisation. Concernant la maintenance d’ordinateur, le logiciel répond aux besoins du débutant. Merci pour ça! Je vais acheter une licence IObit, afin de soutenir votre travail. Merci! </p>
              <cite>Nicolae Mocioc</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Joshua Irving"></dt>
            <dd>
              <h2>Avis d’utilisateur</h2>
              <p>J'adore l'aspect automatique des mises à jour. C'est rapide et efficace, et cela crée également un point de restauration avant l'installation, au cas où quelque chose se passe mal. J'aime aussi que le programme télécharge les mises à jour directement depuis les sites appropriés plutôt que de devoir aller sur chaque site pour télécharger une mise à jour. Je pense que c'est l'une de vos meilleures idées pour le moment!</p>
              <cite>Joshua Irving</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nico Bremmer"></dt>
            <dd>
              <h2>Avis d’utilisateur</h2>
              <p>C'est un excellent programme de mise à jour de logiciel. C'est très facile à utiliser et très simple. Ce programme est très clair, fonctionne très bien et est très rapide. De plus, le design est agréable et moderne et je suis satisfait de la nouvelle version du programme. Il est également agréable que ce programme vous montre de nouveaux conseils.</p>
              <cite>Nico Bremmer</cite>
            </dd>
          </dl>                  
        </div>  
      </div>             
    </div>
  </div>
	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<div class="service clearfix">
				<dl>
					<dt>Ils nous font confiance     </dt>
					<dd><img src="<?php echo getStaticUrl('images/medias.png')?>" alt=""/></dd>
				</dl>
				<dl class="right">
					<dt>Plusieurs mode de paiement</dt>
					<dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
				</dl>
			</div>
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		IObit Software Update PRO
	  	</div>
	  	<div class="number">
        <div class="countdown">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        <p><span class="viewNum"><?php echo $viewNum;?></span> visiteurs, plus que   <strong class="buyNum">86</strong> places disponibles!</p>
      </div>
       <p class="price">
          <span> <strong><b>12</b> <span>€<b>99</b></span></strong> <del>99,97€</del>  </span>
          <a href="https://www.iobit.com/buy.php?product=fr-isu33pcpfsd1299&ref=fr_isu33pcsdpfindexpuchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2012-fr');" class="buybtn">J’EN PROFITE VITE</a>
       </p>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>