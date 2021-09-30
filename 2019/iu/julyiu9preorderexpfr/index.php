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
	$c_name = 'friuexpjune_p' . $date;
	$c_name_t='friuexpjune_t' . $date;
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
$preData=$transData->iu9pre;
$preDataArr=(array)$preData;
$pluginMp=$preDataArr['plugin-mp'];
$fileSizeShow=number_format($preData->filesize/(1024*1024*1024),1);
$fileSizeShow=$fileSizeShow>0.1?$fileSizeShow:0;
$leftOvers=intval($preData->reg)+intval($preData->file)+intval($preData->task)+intval($preData->service);
$preData->fileSizeShow=$fileSizeShow;
$preData->leftOvers=$leftOvers;
$preData->pluginMp=$pluginMp;
$preDataJs=json_encode($preData);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profitez d'IObit Uninstaller 9 PRO pour 0€</title>
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
					<p>Réalisez la désinstallation sans laisser de traces</p>
					<ul class="price clearfix">
						<li class="first">
							<strong><sup>*</sup><big>0</big>€</strong> <del>29,99€</del>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change">Plus que<b class="giftNum">50</b>disponibles</p>
						</li>
						<li>
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=fr-iu9preorder30day&ref=fr_iu9preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
							   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderexp-fr');">
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
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Qu'a fait IObit Uninstaller 8 PRO pour vous ?</h2>
			<div class="three clearfix">
				<div class="left-message fl">
					<div class="post">
					  <div class="post-criale"></div>
						<div class="mask"></div>
						<span class="star"></span>
					</div>
					<span class="clean"></span>
					<div class="left-post">
					  <div class="post-criale"></div>
						<div class="mask"></div>
					</div>
				</div>
				<?php if(($fileSizeShow+intval($preData->soft)+$leftOvers+intval($preData->plugin)+intval($preData->softupdate)+intval($preData->stubborn)+intval($preData->bundle)+intval($pluginMp))<=0):?>
					<ul class="right-message normal">
						<li>
							<h3>Désinstaller</h3>
							<p>Les programmes récalcitrants, Bundleware, extension de navigateur et applications pré-installées sur Windows.</p>
						</li>
						<li>
							<h3>Nettoyer</h3>
							<p>Complètement les fichiers et registres résiduels après la désinstallation.</p>
						</li>
						<li>
							<h3>Détecter</h3>
							<p>Les plug-ins malveillants et publicitaires pour une navigation plus sûre.</p>
						</li>
						<li>
							<h3>Mettre à jour </h3>
							<p>Tous les programmes obsolètes en un clic pour vous protéger contre les vulnérabilité du système.</p>
						</li>
					</ul>
				<?php else:?>
				<ul class="right-message">
					<?php if(!empty($fileSizeShow)):?>
					<li class="data1">
						<h3><span>2</span> G </h3>
						<p>d'espace disque libéré</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->soft))):?>
					<li class="data2">
						<h3><span>20</span>  </h3>
						<p>programme(s) désinstallé(s)</p>
					</li>
					<?php endif;?>
					<?php if(!empty($leftOvers)):?>
					<li class="data3">
						<h3><span>200</span>  </h3>
						<p>résidu(s) nettoyé(s)</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->plugin))):?>
					<li class="data4">
						<h3><span>10</span> </h3>
						<p>extension(s) supprimée(s)</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->softupdate))):?>
					<li class="data5">
						<h3><span>3</span> </h3>
						<p>logiciel(s) obsolète(s) mis à jour</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->stubborn))):?>
					<li class="data6">
						<h3><span>5</span> </h3>
						<p>programme(s) récalcitrant(s) désinstallé(s)</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->bundle))):?>
					<li class="data7">
						<h3><span>5</span></h3>
						<p>bundleware(s) désinstallé(s)</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($pluginMp))):?>
					<li class="data8">
						<h3><span>2</span> </h3>
						<p>plug-in(s) malveillant(s) supprimé(s)</p>
					</li>
					<?php endif;?>
				</ul>
				<?php endif;?>
			</div>
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Ce que IObit Uninstaller 9 PRO fait pour vous ?</h2>
			<div class="one clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-01.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h3><b>Désinstallation plus puissante</b></h3>
					<dl>
						<dt><h4>Les logiciels indésirables</h4></dt>
						<dd>Désinstalle les programmes, extensions de navigateur et applications Windows.</dd>
					</dl>
					<dl>
						<dt><h4>Les programmes récalcitrants <span><em>Amélioré de 150%</em></span></h4></dt>
						<dd>
							Désinstalle proprement les programmes qui ne peuvent pas être désinstallés de manière classique.
						</dd>
					</dl>
					<dl>
						<dt><h4>Bundlewares</h4></dt>
						<dd>
							Supprime les programmes installés à côté des logiciels gratuits qui pourraient vous montrer des annonces ou voler votre vie privée.
						</dd>
						<dd><span><em>unique sur le marché</em></span></dd>
					</dl>
					<dl>
						<dt><h4>Plug-ins malveillants et publicitaires <span><em>Amélioré de 50%</em></span></h4></dt>
						<dd>
							Supprime les plug-ins infectés qui injectent des publicités ou des liens malveillants dans les pages affichées.
						</dd>
						<dd><span><em>unique sur le marché</em></span></dd>
					</dl>
				</div>
			</div>
			<div class="two clearfix">
				<div class="right fl">
					<h3><b>Nettoyage plus approfondi</b></h3>
					<dl class="safe">
						<dt><h4>Nettoie <span><em>Amélioré de 15%</em></span></h4></dt>
						<dd>les fichiers et registres résiduels après la désinstallation</dd>
					</dl>
					<dl>
						<dt><h4>Détecte <span class="green"><em>NOUVEAU</em></span></h4></dt>
						<dd>
							les modifications du système causées par un programme et les annule après la désinstallation du programme.
						</dd>
					</dl>
					<dl>
						<dt><h4>Analyse <span class="green"><em>NOUVEAU</em></span></h4></dt>
						<dd>
							les fichiers résiduels qui persistent après la suppression du programme effectuée par tiers.
						</dd>
						<dd><span><em>unique sur le marché</em></span></dd>
					</dl>
				</div>
				<div class="left fr">
					<img src="<?php echo getStaticUrl('images/iu-screen-02.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Aperçu des différences entre votre version et IObit Uninstaller 9 PRO </h2>
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<thead>
					<tr>
						<th class="text"></th>
						<th class="space"></th>
						<th class="itema"><span>Votre version actuelle</span></th>
						<th class="space"></th>
						<th class="itemb"><span>IObit Uninstaller 9 PRO</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></span>
							<span class="txt">Désinstalle des programmes, extensions de navigateur et applications Windows par lot</span>
						</td>
						<td class="space"></td>
						<td class="itema"><span class="currt"></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></span>
							<span class="txt">Détecte et désinstalle les programmes récalcitrants et bundlewares</span>
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></span>
							<span class="txt">Détecte et annule les modifications du système causées par l’installation d’un programme</span>  
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></span>
							Détecte les extensions malveillantes et publicitaires    
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></span>
							<span class="txt">Nettoie automatiquement les résidus qui ne peuvent pas être supprimés par d'autres utilitaires.</span>
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></span>
							Analyse les résidus de programmes déjà désinstallés    
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></span>
							Met à jour tous les programmes obsolètes en un clic
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""/></span>
							<span class="txt">Mise à jour automatique dès qu’une nouvelle version est disponible </span>
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""/></span>
							Assistance téléphonique 7j/7 et 24h/24 
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- feature end -->
	<div class="between-buy">
		<div class="wrapper">
			<h2>Profitez d’IObit Uninstaller 9 PRO maintenant pour seulement <span>0€</span></h2>
			<ul class="price clearfix">			
				<li class="first">
					<strong><sup>*</sup><big>0</big>€</strong> <del>29,99€</del>
					<p class="change">Plus que<b class="giftNum">50</b>disponibles</p>
				</li>
				<li>
					<a class="buybtn"
					   href="https://www.iobit.com/buy.php?product=fr-iu9preorder30day&ref=fr_iu9preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
					   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderexp-fr');">
						VITE, J’EN PROFITE
					</a>
				</li>
			</ul>
		</div>
	</div>

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
	  			<p class="change"><span class="viewNum"><?php echo $viewNum;?></span> clients en ligne, plus que<b class="giftNum">50</b>dispos !</p>
	  		</div>
	  		<div class="two fl"><strong><sup>*</sup><big>0</big>€</strong> <del>29,99€</del></div>
	  		<div class="three fl">
	  			<a class="buybtn"
             href="https://www.iobit.com/buy.php?product=fr-iu9preorder30day&ref=fr_iu9preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderexp-fr');">
            VITE, J’EN PROFITE
          </a>
	  		</div>
	  	</div>
	  </div>
	</div>
	<!-- floatlayer end -->
	<script>
		refStr="<?php echo $refStr;?>";
		preData=JSON.parse('<?php echo $preDataJs;?>');
	</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>