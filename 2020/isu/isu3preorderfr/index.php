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
	$c_name = 'isuofficial_p' . $date;
	$c_name_t='isuofficial_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(68,78);
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

$viewNum=rand(115,125);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Précommandez le nouvel IObit Software Updater 3 PRO pour 0€</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800&display=swap" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank"></a>
			<div class="right-message">
				<h1>Vous êtes les bienvenus pour nos <strong>Préventes </strong></h1>
					<div class="number">
						<img src="<?php echo getStaticUrl('images/hurry.png')?>"/> 
						<div id="topNum" class="giftNum">
              <span class="nwrap">
		          	<strong>
		          		<b>1</b>
		          	</strong>
		          </span>
		          <span class="nwrap">
		          	<strong>
		          		<b>1</b>
		          	</strong>
		          </span>

            </div>
            restants, et <strong class="viewNum"><?php echo $viewNum;?></strong> personnes en ligne
					</div>
					<p class="price">
						<span><strong>0€</strong><sup>*</sup></span>
						<a href="https://www.iobit.com/buy.php?product=fr-isu3preorder&ref=fr_isu3preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3preorder-fr');" class="buybtn">Vite, j’en profite !</a>
					</p>
				</div>
		</div>
	</div>
	<!-- banner end -->


	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>C’est le gestionnaire de mise à jour de logiciels que vous cherchiez !</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
				<dd>
					<strong>Mises à jour illimités</strong>
					<p>Tous les logiciels obsolètes sur votre ordinateur<br> peuvent être mis à jour par lot. </p>
					<span>La version gratuite : 2 par jour</span>
				</dd>
			</dl>
			<dl style="padding-bottom: 10px;">
				<dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
				<dd>
					<strong>Mise à jour directe depuis IObit Software Updater</strong>
					<p>Mettez à jour les logiciels obsolètes ou installez directement les logiciels  que vous voulez depuis l’interface du programme.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
				<dd>
					<strong>Mises à jour automatiques</strong>
					<p>Configurez le logiciel pour qu’il procède aux mises à jour immédiatement ou au moment que vous préférez.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""></dt>
				<dd>
					<strong>Restez protégé</strong>
					<p>Gardez vos logiciels à jour et réparez toutes les failles exploitables par les hackers.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list05.png')?>" alt=""></dt>
				<dd>
					<strong>Mise à jour et rien d’autre</strong>
					<p>Pas de publicités, de barres d’outils ou de logiciels s’installant en supplément.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list06.png')?>" alt=""></dt>
				<dd>
					<strong>Des suggestions de logiciels</strong>
					<p>Téléchargez les logiciels populaires et fiables sans devoir aller sur chacun de leur site.</p>
				</dd>
			</dl>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Il vous offre une expérience utilisateur parfaite</h2>
			<ul class="message-list">
				<li class="list01 active"><i></i> <span>La suppression automatique des fichiers d’installations</span></li>
				<li class="list02"><i></i> <span>La création automatique de points de restaurations</span></li>
				<li class="list03"><i></i> La possibilité d’ignorer des mises à jour</li>
				<li class="list04"><i></i> Une liste personnelle de mises à jour </li>
				<li class="list05"><i></i> Pas de publicités, ni de sponsors </li>
			</ul>
			<div class="img-list">
				<div class="img-box">
					<ul class="box">
						<li data-num="0"><img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt=""/></li>
						<li data-num="1"><img src="<?php echo getStaticUrl('images/feature-list02.png')?>" alt=""/></li>
						<li data-num="2"><img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt=""/></li>
						<li data-num="3"><img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt=""/></li>
						<li data-num="4"><img src="<?php echo getStaticUrl('images/feature-list05.png')?>" alt=""/></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="review ">
		<div class="wrapper">
		<h2>Ce que l'on dit de nous :</h2>
		<div class="review-box">
			<a href="javascript::" class="prev"></a>
			<div class="content">
				<div class="roll">
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt=""/></dt>
							<dd>
								L’avis de média
								<strong>softpedia</strong>
							</dd>
						</dl>
						<p>IObit Software Updater a été conçu pour simplifier la tâche de mise à jour de tous les programmes de votre ordinateur. Il peut vérifier les nouvelles versions et les installer automatiquement, et sans intervention de l'utilisateur. En outre, il peut vous aider à télécharger et à installer des logiciels populaires à diverses fins.</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Avis d’utilisateur
								<strong>Nicolae Mocioc</strong>
							</dd>
						</dl>
						<p>J'ai installé IObit Software Update Free selon les conseils d'un ami et je suis très heureux de la rapidité et de la simplicité d’utilisation. Concernant la maintenance d’ordinateur, le logiciel répond aux besoins du débutant. Merci pour ça! Je vais acheter une licence IObit, afin de soutenir votre travail. Merci! </p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Avis d’utilisateur
								<strong>Joshua Irving</strong>
							</dd>
						</dl>
						<p>J'adore l'aspect automatique des mises à jour. C'est rapide et efficace, et cela crée également un point de restauration avant l'installation, au cas où quelque chose se passe mal. J'aime aussi que le programme télécharge les mises à jour directement depuis les sites appropriés plutôt que de devoir aller sur chaque site pour télécharger une mise à jour. Je pense que c'est l'une de vos meilleures idées pour le moment!</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Avis d’utilisateur
								<strong>Nico Bremmer</strong>
							</dd>
						</dl>
						<p>C'est un excellent programme de mise à jour de logiciel. C'est très facile à utiliser et très simple. Ce programme est très clair, fonctionne très bien et est très rapide. De plus, le design est agréable et moderne et je suis satisfait de la nouvelle version du programme. Il est également agréable que ce programme vous montre de nouveaux conseils.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- bottom start -->
	<div class="awards">
		<h2>Des récompenses mondiales :</h2>
		<p>Parce que nous sommes reconnus et récompensés par ces médias de renommés internationale, vous savez donc que<br> IObit Software Updater est le logiciel qu’il vous faut.</p>
		<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
	</div>
	<div class="bottom">
		<div class="wrapper">
			<p class="annotation">
				Nota : <br>* A la fin de la période d’essai de 30 jours, votre carte de crédit ou votre compte Paypal sera prélevé automatiquement d’un montant de 14,99€. Ce 50% de réduction sur le prix original de 29,99€ est une bonus exclusivement réservé aux préventes.
			</p>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer nomal">
		<div class="wrapper clearfix">
			<img src="<?php echo getStaticUrl('images/fl-isu-box.png')?>" class="img-box" alt=""/>
			<div class="number">
				<img src="<?php echo getStaticUrl('images/hurry.png')?>"/> 
				<div class="giftNum">
          <span class="nwrap">
          	<strong>
          		<b>1</b>
          	</strong>
          </span>
          <span class="nwrap">
          	<strong>
          		<b>1</b>
          	</strong>
          </span>

        </div>
        restants, et <strong class="viewNum"><?php echo $viewNum;?></strong> personnes regardent
			</div>
			<p class="price">
				<span><strong>0€</strong><sup>*</sup></span>
				<a href="https://www.iobit.com/buy.php?product=fr-isu3preorder&ref=fr_isu3preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3preorder-fr');" class="buybtn">Vite, j’en profite !</a>
				</p>
			</p>
		</div>
	</div>
	<!-- floatlayer end -->
	<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>