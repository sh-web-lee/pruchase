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
	$c_name = 'isulaun_p' . $date;
	$c_name_t='isulaun_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=149;
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

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);

function microtime_float(){
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

$packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
	echo $packsNum;
	exit;
  }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jusqu'à 85% d'économie sur IObit Software Updater PRO et obtenez les cadeaux gratuits - 3-jours vente flash chez IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
	<script type="text/javascript">
	  function getPacksNum(){
	    $.ajax({
	      type: "GET",
	      url: "<?php echo $pRootUrl;?>callback.php",
	      data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>&r="+Math.random(),
	      success: function(packs){
	        $('.packsNum').html(packs);
	        setTimeout('getPacksNum()', 10000);
	      }
	    });
	  }
	  //setTimeout('getPacksNum()', 10000);
	</script>
</head>

<body>
	<!--header-->
	<div class="header clearfix">
		<div class="header-container">
			<a href="http://www.iobit.com/fr/index.php" target="_blank" class="logo">IObit</a>
			<img class="godaddy" src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="IObit" />
		</div>
	</div>

	<!--banner-->
	<div class="banner clearfix">
		<div class="title-container clearfix">
			<h1>3-Jours Vente Flash</h1>
			<div id="bancount" class="countdown">
				PLUS QUE <b>1</b><small>h:</small> <b>47</b><small>m:</small> <b>45</b><small>:</small> <b>30</b> POUR EN PROFITER !
			</div>
			<div class="banner-container clearfix">
				<img class="boxsort-ascu" src="<?php echo getStaticUrl('images/boxsort-ascu.png')?>" alt="" />
				<table class="banner-table">
					<thead>
					<tr>
						<th>
							<p>IObit Software Updater 2 PRO</p>
							<span>1 an / 3 PC</span>
						</th>
						<th class="th-last">14,99€</th>
						<th class="th-last"><del>29,99€</del></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><i class="gift-icon"></i>Smart Defrag 6 PRO</td>
						<td class="th-last fontred">Gratuit</td>
						<td class="th-last"><del>29,99€</del></td>
					</tr>
					<tr>
						<td><i class="gift-icon"></i>Protected Folder</td>
						<td class="th-last fontred">Gratuit</td>
						<td class="th-last"><del>39,99€</del></td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="buy-info">
				<p class="ascu-prize">Seulement <strong>14<small>99</small></strong> au lieu de <del>99,97€</del></p>
				<a class="buy-btn" 
				   href="https://www.iobit.com/buy.php?product=fr-isu23pcpfsd1499&ref=fr_isu23pcsdpfpuchase2003<?php echo $refStr;?>&aff=&refs=fr_purchase_isu" 
				   onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2003-fr');" >
				  J’en profite vite !
				</a>
				<p class="people-num"><b>3 245 898</b> personnes l’ont acheté !</p>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!--service-->
	<div class="wrapper-border clearfix">
		<ul class="pay-service clearfix">
			<li>
				<h4>Modes de paiement acceptés</h4>
				<img class="pay" src="<?php echo getStaticUrl('images/paymoment.png')?>" alt="">
			</li>
			<li>
				<h4>Satisfait ou Remboursé</h4>
				<img class="moneyback" src="<?php echo getStaticUrl('images/moneyback-guarantee.png')?>" alt="">
			</li>
			<li>
				<h4>Paiement Sécurisé</h4>
				<img class="secure" src="<?php echo getStaticUrl('images/secure.png')?>" alt="">
			</li>
		</ul>
	</div>

	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>Pourquoi IObit Software Updater 2 PRO?</h2>
			<img src="<?php echo getStaticUrl('images/intro-box.jpg')?>" class="img-box" alt="IObit Software Update PRO"/>
			<div class="left-message">
				<h3><i></i> Mise à jour immédiate  </h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
					<dd><strong>Protection </strong></dd>
					<dd>La mise à jour de logiciels obsolètes <br> corrige les failles de sécurité à temps afin <br> d’éviter les piratages.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
					<dd><strong>Améliorations </strong></dd>
					<dd>La mise à jour de logiciels obsolètes offre<br>  de nouvelles fonctionnalités et améliore <br> les performances ainsi que la stabilité.</dd>
				</dl>
			</div>
			<div class="right-message">
				<h3><i></i> Mise à jour facile et sécurisée  </h3>
				<dl class="list01">
					<dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
					<dd><strong>Simple</strong> Téléchargez les mises à jour de logiciels sans ouvrir de navigateur Web. </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
					<dd><strong>Automatique </strong> Configurez les mises à jour automatiques selon le planning, puis téléchargez et installez automatiquement et silencieusement lorsque des mises à jour sont disponibles. </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt=""></dt>
					<dd><strong>Sûr </strong> Créez automatiquement un point de restauration avant l'installation en cas de problème.</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Quels sont les avantages d’IObit Software Updater 2 PRO?</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
					<span class="suspend01"></span>
					<span class="suspend02"></span>
					<span class="suspend03"></span>

				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li>Mise à jour du logiciel en 1 clic</li>
						<li>Téléchargez et installez les mises à jour en mode silencieux</li>
						<li>Configurez des analyses et des mises à jour automatiques selon un planning</li>
						<li>Excluez certains programmes que vous ne souhaitez pas mettre à jour</li>
						<li>Option pour créer automatiquement un point de restauration avant l'installation</li>
						<li>Option pour supprimer automatiquement les fichiers d'installation après l'installation</li>
						<li>Supportez le téléchargement direct d'autres logiciels populaires</li>
						<li>Désactivez les annonces sponsorisées affichées dans la version gratuite</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- feature end -->

	<!--pro-list-->
	<div class="wrapper-bg clearfix">
		<div class="wrapper pro-list clearfix">
			<h2>Ne manquez pas les cadeaux exclusifs, quantités ultra limitées !</h2>
			<p class="second-title">Il ne reste plus que<b class="packsNum"><?php echo $packsNum ?></b> disponibles !</p>
			<ul class="boxsort-list clearfix">
				<li>
					<img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO" />
					<div class="boxsort-info">
						<h3>Smart Defrag 6 PRO</h3>
						<h4>0€ <del>29,99€</del> 1 an / 1 PC</h4>
						<ul>
							<li>. Maximisez les performances et la durée de votre disque en défragmentant les registres et les fichiers du système</li>
						</ul>
					</div>
				</li>
				<li>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="" />
					<div class="boxsort-info">
						<h3>Protected Folder</h3>
						<h4>0€ <del>39,99€</del> 1 an / 1 PC  </h4>
						<ul>
							<li>· Un outil de protection puissant des fichiers qui garantit la sécurité de vos dossiers et données</li>
						</ul>
					</div>
				</li>
			</ul>
			<div class="price-line clearfix"></div>
			<div class="buy-info btn-position">
				<p class="ascu-prize price-bg"><strong>14<small>99</small></strong> <del>99,97€</del></p>
				<a class="buy-btn" 
				   href="https://www.iobit.com/buy.php?product=fr-isu23pcpfsd1499&ref=fr_isu23pcsdpfpuchase2003<?php echo $refStr;?>&aff=&refs=fr_purchase_isu" 
				   onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2003-fr');" >
				  J’en profite vite !
				</a>
				<p class="vite-words">Dépêchez-vous !</p>
			</div>
		</div>
	</div>

	<!--awards-->
	<div class="wrapper-border clearfix">
		<div class="wrapper awards clearfix">
			<h2>Recommandé par ces médias</h2>
			<img src="<?php echo getStaticUrl('images/prize.png')?>" alt=""/>
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

  <!--bottombanner-->
  <div class="bottom-bg clearfix">
  	<div class="wrapper bottom-banner clearfix">
  		<h2>Jusqu’à <b>85%</b> d’économie et profitez de 2 cadeaux gratuits !</h2>
  		<div id="botcount" class="countdown"><b>1</b>h: <b>47</b>m: <b>45</b>: <b>30</b></div>
  		<div class="bottom-boxsort">
  			<img src="<?php echo getStaticUrl('images/boxsort-ascu.png')?>" alt="" />
  			<div class="buy-info bottom-btn">
  				<p class="ascu-prize"><strong>14<small>99</small></strong> au lieu de <del>99,97€</del></p>
  				<a class="buy-btn" 
  				   href="https://www.iobit.com/buy.php?product=fr-isu23pcpfsd1499&ref=fr_isu23pcsdpfpuchase2003<?php echo $refStr;?>&aff=&refs=fr_purchase_isu" 
  				   onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2003-fr');" >
  				  J’en profite vite !
  				</a>
  				<p class="vite-words">Premier arrivé, permier servi !</p>
  			</div>
  		</div>
  	</div>
  </div>
  
	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
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
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>