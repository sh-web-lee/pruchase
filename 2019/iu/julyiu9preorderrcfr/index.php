<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'friujune_p' . $date;
	$c_name_t='friujune_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(49,58);
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
	$refStr.='-'.$_GET['to'];
}
$transData=json_decode(base64_decode($_GET['data']));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Passez à IObit Uninstaller 9 PRO pour 0€</title>
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
			<h1>La prévente mondiale en direct</h1>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h2>IObit Uninstaller 9 PRO</h2>
					<?php if(($_GET['to']!='softwarehealth')||((intval($transData->softwarehealth->plugin)+intval($transData->softwarehealth->software))<=0)):?>
					<p>Réalisez la désinstallation sans laisser de traces</p>
					<?php else:?>
          			<p class="data">
						<?php if(intval($transData->softwarehealth->plugin)>0):?>
            			Supprime  <strong><?php echo intval($transData->softwarehealth->plugin);?></strong> plug-in(s) malveillant(s) en un clic <br>
						<?php endif;?>
						<?php if(intval($transData->softwarehealth->software)>0):?>
							<?php echo (intval($transData->softwarehealth->plugin)>0)?'et':'';?> met à jour <strong><?php echo intval($transData->softwarehealth->software);?></strong> logiciel(s) obsolète(s) sur votre PC
						<?php endif;?>
          			</p>
					<?php endif;?>
					<ul class="price clearfix">
						<li class="first">
							<strong><sup>*</sup><big>0</big>€</strong> <del>29,99€</del>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change">Plus que<b class="giftNum">50</b> disponibles</p>
						</li>
						<li>
							<a class="buybtn"
							   href="http://www.iobit.com/buy.php?product=fr-iu9preorder30day&ref=fr_iu9preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
					 			 nclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderrc-fr');">
                VITE, J’EN PROFITE
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
	<div class="intro">
    <h2>Pourquoi passer à la version PRO?</h2>
    <!-- content -->
    <div class="content">
      <div class="wrapper">
        <ul class="clearfix">
          <li class="active">Désinstallation plus puissante</li>
          <li>Nettoyage plus approfondi</li>
        </ul>
        <div class="box">
          <div class="inlist">
            <div class="indetail first clearfix">
              <dl class="fl">
                <dt>
                  <h3>Votre version actuelle </h3>
                  <h4>Déinstalle</h4>
                </dt>
                <dd>
                 Les programmes, extensions de navigateur et applications pré-installées sur Windows.
                </dd>
              </dl>
              <dl class="fr">
                <dt>
                  <h3>Version PRO </h3>
                  <h4>Déinstalle</h4>
                </dt>
                <dd>Les programmes, extension de navigateur et applications pré-installées sur Windows.</dd>
                <dd>Les programmes récalcitrants qui ne peuvent pas être désinstallés de manière classique.</dd>
                <dd>
									Les Bundlewares installés à côté des logiciels gratuits qui pourraient vous montrer des annonces ou voler votre vie privée. <br>                  
									<em class="space">unique sur le marché</em>
                </dd>
                <dd>
                  Les plug-ins malveillants et publicitaires qui injectent des publicités ou des liens malveillants dans les pages affichées. <br>
                  <em class="space">unique sur le marché</em>
                </dd>
              </dl>
              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
            </div>
            <div class="indetail last clearfix">
              <dl class="fl">
                <dt>
                  <h3>Votre version actuelle </h3>
                </dt>
                <dd>
                  <h4>Nettoie </h4>
                  Les fichiers et registres résiduels après la désinstallation.
                </dd>
              </dl>
              <dl class="fr">
                <dt>
                  <h3>Version PRO </h3>
                </dt>
                <dd><h4>Nettoie</h4> les fichiers et registres résiduels après la désinstallation.</dd>
                <dd>
                  <h4>Détecte  <i>NOUVEAU </i></h4>
                  Les modifications du système causées par l’installation d’un programme et les annuler après la désinstallation
                </dd>
                <dd>
                  <h4>Analyse  <br> <em class="space">unique sur le marché  </em></h4>
                  Les fichiers résiduels qui persistent après la suppression du programme effectuée par tiers.
                </dd>
              </dl>
              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
            </div>
          </div>
        </div>
      </div>
      <span class="prev"><</span>
      <span class="next active">></span>
    </div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Plus d'avantages que vous profiterez d'IObit Uninstaller 9 PRO</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-03.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li><i class="all-icons">√</i> <span>Désinstaller des programmes, des extensions de navigateur et des applications Windows par lot</span></li>
						<li><i class="all-icons">√</i> <span>Désinstaller les programmes via l’icône du bureau, la fenêtre ouverte ou l’icône de la barre d’état système</span> </li>
						<li><i class="all-icons">√</i> <span>Créer automatiquement un point de restauration avant la désinstallation </span></li>
						<li><i class="all-icons">√</i> <span>Mettre à jour tous les programmes obsolètes en un clic </span></li>
						<li><i class="all-icons">√</i> <span>Mise à jour automatique une fois qu’une nouvelle version est disponible </span> </li>
						<li><i class="all-icons">√</i> <span>Assistance téléphonique 7j/7 et 24h/24</span> </li>
					</ul>
				</div>
			</div>
      <div class="price clearfix">
        <h3>DÉBLOQUEZ TOUTES LES FONCTIONNALITES PRO MAINTENANT POUR 0€</h3>
        <div class="fl">
          <strong><big>0</big>€<sup>*</sup></strong> <del>29,99€</del>
          <p class="change">Plus que <b class="giftNum">50</b> disponibles.</p>
        </div>
        <a class="buybtn fl"
           href="http://www.iobit.com/buy.php?product=fr-iu9preorder30day&ref=fr_iu9preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
					 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderrc-fr');">
          VITE, J’EN PROFITE
        </a>
      </div>
		</div>
	</div>
	<!-- feature end -->

	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>Que disent les autres ?</h2>
			<div class="box">
				<div class="relist clearfix">
					<dl class="on clearfix">
						<dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
						<dd>
							<h3>Avis des médias</h3>
							<p>
                « IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Cet outil de désinstallation peut être classé comme le meilleur programme de désinstallation qui permet aux utilisateurs de réaliser la désinstallation par lot. Il proposera aux utilisateurs une fonctionnalité Analyse Approfondie pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. »
              </p>
							<h4>MakeUseOf</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"/></dt>
						<dd>
							<h3>Avis des utilisateurs</h3>
							<p>
                J'utilise les programmes IObit depuis plusieurs années avec une grande satisfaction! Pour cette raison, je reste fidèle aux produits IObit. Dans le passé, j’ai entretenu et réparé des ordinateurs portables et des téléphones portables (android) et les ai toujours laissés, avec les produits IObit installés. J’ai toujours dit à mes clients que cela corrigera et accélérera automatiquement leur ordinateur portable / ordinateur / mobile! :) Je recommande vivement le programme de désinstallation (et la dernière version bêta) en tant que programme fiable et sûr qui permet de désinstaller les programmes les plus tenaces! Plus important encore, supprimer le code "caché" que le programmeur avait l'intention de laisser, ce qui obligerait ensuite les publicités à être réinstallées! Tous les produits IObit sont sûrs et faciles à utiliser pour optimiser votre PC.
							</p>
							<h4>Jeff A Watts</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
						<dd>
							<h3>Avis des utilisateurs</h3>
							<p>
                Je trouve le programme de désinstallation IObit excellent, car il répond à vos attentes. J'aime le fait qu'il désinstalle tous les fragments restants. Il dispose également d'un programme de mise à jour du logiciel qui vous rappelle lorsque l'un des programmes doit être mis à jour. La désinstallation des programmes de traitement par lots en fait un outil de choix. En fait, c’est essentiellement ce dont vous avez besoin pour garder votre ordinateur en état de fonctionner.
							</p>
							<h4>Lynette van Niekerk</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
						<dd>
							<h3>Avis des utilisateurs</h3>
							<p>
                IObit Uninstaller est le meilleur logiciel pour supprimer des programmes sur ordinateur, il est rapide et très efficace, il est incomparable face au programme de désinstallation de base de Windows. Il nettoie entièrement tous les résidus de programme et évite ainsi tout ralentissement de l'ordinateur. J’utilise IObit Uninstaller depuis quelques mois et je ne peux désormais plus m’en passer. Je le recommande à mes amis et à ma famille. Merci, IObit Uninstaller est fantastique.
							</p>
							<h4>Paulo Martins</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
						<dd>
							<h3>Avis des utilisateurs</h3>
							<p>
                « IObit Uninstaller s’améliore avec chaque mise à jour. Je l’ai utilisé depuis 3 ans. Téléchargement rapide et son interface conviviale et claire. J’ai souvent utilisé les fonctionnalités Désinstaller en lot, Analyse Minutieuse , Broyeur de fichiers et la fonctionnalité Récemment installés qui peut m’aider à trouver facilement les programmes récemment installé qui ne fonctionnent pas correctement ou que je n’aime pas. Il est également facile de contrôler vos éléments de démarrage pour booster considérablement la vitesse du démarrage. »
							</p>
							<h4>Lovro Žužić</h4>
						</dd>
					</dl>
				</div>
			</div>
			<span class="prev"><</span>
			<span class="next">></span>
		</div>
	</div>
	<!-- review end -->

  <!-- service start -->
	<div class="service">
		<div class="wrapper">
			<h2>APPROUVÉ PAR LES MÉDIAS CÉLÈBRES DU MONDE</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
          * À la fin de la période d'essai gratuite de 30 jours, votre carte de crédit ou votre compte PayPal sera automatiquement facturé de 14,99€. Ce rabais de 50% par rapport au prix original de 29,99€ est un bonus réservé uniquement aux précommandes !
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
	  		<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
	  	</div>
	  	<div class="price fr clearfix">
	  		<div class="one fl">
	  			<div id="fReduce" class="reduceNum">
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>5</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  			</div>
	  			<p class="change"><span class="viewNum"><?php echo $viewNum;?></span> clients en ligne, plus que <b class="giftNum">50</b> dispos !</p>
	  		</div>
	  		<div class="two fl"><strong><sup>*</sup><big>0</big>€</strong> <del>29,99€</del></div>
	  		<div class="three fl">
	  			<a class="buybtn"
             href="http://www.iobit.com/buy.php?product=fr-iu9preorder30day&ref=fr_iu9preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
					 	 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderrc-fr');">
            VITE, J’EN PROFITE
          </a>
	  		</div>
	  	</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>