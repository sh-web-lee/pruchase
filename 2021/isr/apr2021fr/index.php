<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
if (!empty($_GET['AFF'])) $_GET['aff'] = $_GET['AFF'];

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'apr2021fr' . $date;
	if (empty($_COOKIE[$c_name])) {
		$packsNum = rand(50, 100);
		setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			$packsNum = 3;
		} else {
			$packsNum = $_COOKIE[$c_name];
			$packsNum -- ;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(['packsNum' => $packsNum]);
	exit();
}
$refStr = empty($_GET['st']) ? '' : '-'.$_GET['st'];
$refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];
$refStr .= empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['insur']) ? '' : '-'.$_GET['insur'];
if(!empty($_GET['ver'])){
	$ver = explode('.',$_GET['ver']);
	$refStr .= '-'.$ver[0].$ver[1];
}
$refStr .= empty($_GET['instd']) ? '' : '-'.$_GET['instd'];
$refStr .= empty($_GET['finstd']) ? '' : '-'.$_GET['finstd'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="robots" content="noindex, nofollow"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offre spéciale pour le nouveau lancement - iFun Screen Recorder</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/swiper.min.css')?>">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
	
</head>
<body>
	<div class="banner-wrap">
		<div class="banner">
			<a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank"></a>
			<div class="banner-title">
				<img src="<?php echo getStaticUrl('images/title.png')?>"/>
				<p>Personnalisez et créez vos vidéos de haute qualité sans aucune limite !</p>
			</div>
			<div class="banner-cont">
				<div class="box"></div>
				<div class="heart label70"></div>
				<div class="banner-option">
					<p class="banner-count">Seulement <span class="active countNum">50<i></i></span>places disponibles!</p>
					<ul>
						<li class="custom-radio">
							<label>Licence à vie / 1 PC<i>-38%</i></label>
							<div class="sel-list">
								<p>Utilisation à vie dans la version actuelle</p>
								<p>Sans filigrane par défaut et ajout de filigrane personnalisé</p>
								<p>Enregistrement de haute qualité</p>
								<p>Enregistrement fluide sans décalage</p>
							</div>
						</li>
						<li class="custom-radio active">
							<span class="like"></span>
							<label>Licence annuelle / 1 PC<i>-44%</i></label>
							<div class="sel-list">
								<p>Licence pour 1 PC pendant 1 an</p>
								<p>Sans filigrane par défaut et ajout de filigrane personnalisé</p>
								<p>Enregistrement de haute qualité</p>
								<p>Enregistrement fluide sans décalage</p>
							</div>
						</li>
					</ul>
					<dl class="price">
						<dd>
							<div class="now">
								<h3>49<i>99</i></h3>
								<span>€</span>
							</div>
							<div class="old">
								<h3>79<i>99</i></h3>
								<span>€</span>
							</div>
							<div class="getItNow">
								<a class="button"onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpcpurchase2103-fr') " href="https://www.iobit.com/buy.php?product=fr-isrlt1pc4999&ref=fr_isr1lf1pc4999purchase2103<?= $refStr; ?>&refs=fr_purchase_isr">Vite, J’en Profite</a>
							</div>
						</dd>
						<dd style="display: block;">
							<div class="now">
								<h3>27<i>99</i></h3>
								<span>€</span>
							</div>
							<div class="old">
								<h3>49<i>99</i></h3>
								<span>€</span>
							</div>
							<div class="getItNow">
								<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2103-fr')" href="https://www.iobit.com/buy.php?product=fr-isr1y1pc2799&ref=fr_isr1y1pc2799purchase2103<?= $refStr; ?>&refs=fr_purchase_isr">Vite, J’en Profite</a>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen2">
		<div class="content" style="overflow: hidden;">
			<h3 class="screen-title" style="text-align: left; color: #484b53; margin-bottom: 60px; "><span style="font-size: 24px; ">iFun Screen Recorder PRO </span><br />Bien plus que l'enregistrement d'écran</h3>
			<div class="screen2-cont" >
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/addMark.gif')?>" />
				</div>
				<div class="cont-text cont1 fr">
					<h3><i class="seal"></i>Filigrane personnalisé</h3>
					<span>Réservé à la version PRO</span>
					<p>Enregistrez l'écran sans filigrane par défaut et ajoutez votre propre filigrane sur vos vidéos.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/timeout.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont2 fl">
					<h3><i class="date"></i>Enregistrement programmé</h3>
					<span>Réservé à la version PRO</span>
					<p>L’enregistreur permet de créer des tâches programmées en définissant une heure spécifique pour démarrer et arrêter l'enregistrement de l'écran et de la webcam.</p>
					<p>Il est possible de créer plusieurs tâches d'enregistrement automatique. Vous pouvez alors capturer les conférences, les cours et les émissions en streaming sans avoir à rester devant le PC.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fl">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/audio.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont3 fr">
					<h3><i class="audio"></i>Extraire l'audio de la vidéo</h3>
					<span>Réservé à la version PRO</span>
					<p>iFun Screen Recorder PRO vous aide dans le cas où vous ne vous intéressez qu'à la musique d'une vidéo YouTube ou si vous souhaitez enregistrer uniquement l'audio de votre PC.</p>
					<p>Une fois l'enregistrement fini, Vous pouvez extraire l'audio de la vidéo et les enregistrer respectivement.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<video src="<?php echo getStaticUrl('images/video.mp4')?>" preload="" autobuffer="" muted="" loop="" autoplay="autoplay"></video>
				</div>
				<div class="cont-text cont4 fl">
					<h3><i class="rec"></i>Enregistrement en haute définition sans décalage*</h3>
					<span>Réservé à la version PRO</span>
					<p>La technique avancée d'accélération du GPU vous permet d'enregistrer des jeux sans baisse de FPS et d'obtenir des vidéos d'une définition s'élevant jusqu'à 4K.</p>
					<p>Pour les joueurs, iFun Screen Recoder est le meilleur enregistreur pour réaliser des guides de jeu et les partager sur Youtube.</p>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="wrapper screen3">
		<div class="content">
			<h3 class="screen-title">Des fonctions plus poussées que la version gratuite</h3>
			<div class="versionTable">
				<div class="versionDesc">
					
					<ul><li><i class="descIcon time"></i>Durée d’enregistrement illimitée</li></ul>
					<ul><li><i class="descIcon cut"></i>Montage d'enregistrement personnalisé</li></ul>
					<ul><li><i class="descIcon remove"></i>Suppression de filigrane par défaut</li></ul>
					<ul><li><i class="descIcon seal"></i>Ajout de filigrane personnel</li></ul>
					<ul><li><i class="descIcon date"></i>Création des tâches d'enregistrement programmé</li></ul>
					<ul><li><i class="descIcon audio"></i>Extraire l'audio et l'enregistrer individuellement</li></ul>
					<ul><li><i class="descIcon game"></i>Enregistrement de jeu plus fluide avec jusqu'à <span>30%</span> d'optimisation FPS en plus *<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon done"></i>Enregistrement sans décalage avec une accélération matérielle jusqu'à <span>50%</span> plus rapide *<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon hd"></i>Haute qualité vidéo<i class="tableIcon up"></i> <p style="font-size: 12px;">(jusqu'à <span>30%</span> de définition plus élevée)</p></li></ul>
					<ul><li><i class="descIcon update"></i>Mise à jour automatique de la dernière version</li></ul>
					<ul><li><i class="descIcon spt24"></i>Assistance technique gratuite sur demande, 24h/24, 7j/7</li></ul>
				</div>
				<div class="versionFree">
					<div class="topTitle">Version FREE</div>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
				</div>
				<div class="versionPro">
					<div class="topTitle">Version PRO</div>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<div class="buyPro">
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option3" value="1" checked="">
							<label for="option3">1 AN</label>
						</div>
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option4" value="2">
							<label for="option4">À VIE</label>
						</div>
						<div class="optionsLink">
							<a class="button" id="planA" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2103-fr')" href="https://www.iobit.com/buy.php?product=fr-isr1y1pc2799&ref=fr_isr1y1pc2799purchase2103<?= $refStr; ?>&refs=fr_purchase_isr" style="display: block;">J’en profite-27,99€</a>
							<a class="button" id="planB" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpcpurchase2103-fr') " href="https://www.iobit.com/buy.php?product=fr-isrlt1pc4999&ref=fr_isr1lf1pc4999purchase2103<?= $refStr; ?>&refs=fr_purchase_isr">J’en profite-49,99€</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen4" >
		<div class="content">
			<h3 class="screen-title">Nous sommes fiers d’avoir la confiance de</h3>
			<div class="media">
				<p>Ces médias de classe mondiale depuis plus d'une décennie. IObit est totalement votre meilleur.</p>
				<img src="<?php echo getStaticUrl('images/media.png')?>" />
			</div>
			<h3 class="screen-title" style="margin-top: 160px;">Ce que disent les utilisateurs</h3>
			<div class="review-wrap">
				<!-- Swiper -->
				<div class="user-head">
					<div class="swiper-container">
					    <div class="swiper-wrapper">
					        <div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user4.png')?>" />
							</div>
					    </div>
						
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				<div class="user-avator">
					<ul>
						<li>
							Jusqu’à présent, c’est le Top. iFun Screen Recorder est vraiment un outil complet et facile d’utilisation. Je ne savais pas du tout comment enregistrer mon écran sur Windows, mais avec ce logiciel c’est complétement naturel. Avec ISR, je peux faire des impressions d’écran en plein enregistrement en HD, mais aussi ajouter du contenu sur mes vidéos. Je les mets ensuite sur mon Instagram et je m’attire ainsi plein d’abonnés. Cet enregistreur d’écran puissant m’a aidé à faire avancer mon business et cela gratuitement.
							<p>—Elsie Weston</p>
							<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
						</li>
						<li>
							Je suis tombé par hasard sur cet enregistreur d’écran et ses fonctions d’éditions de vidéo m’ont rendu accro. Parce que j’aime enregistrer les process opérationnels afin d’aider les gens à résoudre les problèmes informatiques, ce logiciel d’enregistrement me permet de tout enregistrer avec le son et pour ensuite uploader directement la vidéo éditée sur Youtube. Il combine enregistrement et édition, ce qui est vraiment pratique pour les YouTubers comme moi qui adore partager des tutoriels vidéo.
							<p>—Enrico Valencia</p>
							<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
						</li>
						<li>
							En tant que secretaire, j’utilise énormément les logiciels d’enregistrement d’écran. Cela m’a pris beaucoup de temps et de nombreux essais afin de trouver le logiciel idéal. iFun Screen Recorder a été comme une évidence pour moi, il est l’outil parfait pour enregistrer les vidéo-conférences. Je peux enregistrer mon écran en HD et le convertir sous différents formats. Je recommande grandement iFun Screen Recorder.
							<p>—Marielle Irvine</p>
							<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
						</li>
						<li>
							Salut ! Votre enregistreur gratuit est sensationnel. Je peux enregistrer toutes mes précieuses mémoires d’enfances mais aussi les stream live. Les vidéos enregistrés avec ISR sont vraiment de très bonne qualités. Je peux les stocker et les partager à mes amis. Aux premiers abords ce logiciel me semblait comme les autres mais après la première utilisation, j’ai sentis avoir trouvé ce que je cherchais.
							<p>—Robbins Hilton</p>
							<img src="<?php echo getStaticUrl('images/user/user4.png')?>" />
						</li>
					</ul>
					
				</div>
			</div>
			
		</div>
	</div>
	<div class="wrapper screen5">
		<div class="content" >
			<h3 class="screen-title">Pourquoi IObit ?</h3>
			<p style="font-size: 22px; text-align: center; margin-top: 10px;">Les chiffres ne mentent jamais</p>
			<div class="circle-wrap">
				<div class="circle">
					<h3>500M</h3>
					de <br />téléchargements
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>1.5M</h3>
					de <br/>visites de pages
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>200K</h3>
					utilisateurs actifs quotidiens
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>220</h3>
					pays et <br />territoires
				</div>
				<div class="plus equal"></div>
				<div class="circle" style="padding-top: 30px;">
					<h3 style="color: #373737;">IObit</h3>
					<p style="color: #cd3540; font-size: 16px; margin-top: -10px; margin-bottom: 3px;">17</p>
					Ans d'expérience
				</div>
			</div>
		</div>
		
	</div>
	<div class="wrapper" style="background-color: #F2F2F2; border-top: #cecece 1px solid;">
		<div class="content backMoney">
			<p ><img src="<?php echo getStaticUrl('images/foot-icon1.png')?>">Modes de paiement acceptés</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon2.png')?>">Paiement 100% Sécurisé</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon3.png')?>">Satisfait ou Remboursé</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon4.png')?>">Livraison immédiate</p>
		</div>
	</div>
	<div class="footer">
		<div class="footer-note">
			<p>
				Note:<br />
				*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.<br />
				* Les données peuvent varier en fonction de différents systèmes ou ordinateurs
			</p>
			<p style="text-align: center; font-size: 14px; margin-top: 30px; font-weight: 500;">Copyright © 2005 - 2021 IObit. Tous droits réservés</p>
		</div>
	</div>
	<div class="float-footer">
		<div class="content planA" style="display: block;">
			<div class="box"></div>
			<div class="heart label70"></div>
			<div class="font-layer">
				<ul>
					<li class="active">Licence annuelle / 1 PC <span>-44%</span></li>
					<li class="">Licence à vie / 1 PC <span>-38%</span></li>
				</ul>
			</div>
			<div class="footer-btn">
				<dl class="price">
					<dd style="display: block;">
						<div class="now">
							<h3>27<i>99</i></h3>
							<span>€</span>
						</div>
						<div class="old">
							<h3>49<i>99</i></h3>
							<span>€</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2103-fr')" href="https://www.iobit.com/buy.php?product=fr-isr1y1pc2799&ref=fr_isr1y1pc2799purchase2103<?= $refStr; ?>&refs=fr_purchase_isr">Vite, J’en Profite</a>
					</dd>
					<dd>
						<div class="now">
							<h3>49<i>99</i></h3>
							<span>€</span>
						</div>
						<div class="old">
							<h3>79<i>99</i></h3>
							<span>€</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpcpurchase2103-fr') " href="https://www.iobit.com/buy.php?product=fr-isrlt1pc4999&ref=fr_isr1lf1pc4999purchase2103<?= $refStr; ?>&refs=fr_purchase_isr">Vite, J’en Profite</a>
					</dd>
				</dl>
				<p>Viiiite, il ne reste que <span class="countNum">50</span>  places!</p>
			</div>
		</div>
		
	</div>
	

<script>refStr = "<?= $refStr; ?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo getStaticUrl('script/swiper.min.js')?>"></script>

 <script>
	   var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        slidesPerView: 3,
	        paginationClickable: true,
	        spaceBetween: 150,
			loop : true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			onSlideChangeEnd: function(swiper){
				
				$('.user-avator ul li').hide()
				$('.user-avator ul li').eq(swiper.realIndex).show()
			}
	    });
  </script>
</body>
</html>