<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

$reduceNum=758560000;
$reduceTime=2;
$buyNum = ceil(microtimeFloat()*1000/(1000*$reduceTime)) - $reduceNum;
$buyNum = number_format($buyNum);

$driverCount=intval($_GET['uc']);
$installDays=intval($_GET['iday']);
$expireTimestamp=intval(base64_decode($_GET['ext']));
$expireDate=date('Y-m-d H:i:s',$expireTimestamp);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title> Profitez de Driver Booster 5 PRO à 0€, ne vous en manquez pas - IObit !</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Play" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<div class="info">
				<h2>Driver Booster 5 PRO</h2>
				<p>Profitez de votre privilège exclusif pour prolonger encore PRO de 15 jours </p>
				<div class="count-down">
					<strong>6</strong>J : 
					<strong>22</strong>H : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
				<div class="btn-zone">
					<a href="https://www.iobit.com/buy.php?product=fr-db5preorder15d&&ref=2018giveawayfr&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-fr');" class="orig-btn">
						<span>Profitez de PRO à 0€</span>
					</a>
					<div class="shadow"></div>
				</div>
				<div class="crowd-count"><span class="buy-num"><?php echo $buyNum;?></span> utilisateurs l’ont obtenu</div>
			</div>
			<div class="steps clearfix">
				<ul>
					<li>Prolongez Driver Booster 5 PRO (3 PCs) de 15 jours à 0€.</li>
					<li>Après 15 jours, 67% de rabais exclusif ( Prix original 74,85€ ) sur Driver Booster 5 PRO (1 An / 3 PCs). </li>
					<li>Vous ne serez pas débité pendant la période d’essai de 15 jours, vous pourrez l’annuler à tout moment.</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end banner -->
	<!-- statistics -->
	<div class="statistics">
		<div class="wrapper">
			<h2>Driver Booster a installé <strong class="driver">57</strong> pilotes depuis  <strong class="countDay">345</strong>  jours pour vous, </h2>
			<p>et vous avez bénéficiiez d’un PC stable et performant.</p>
		</div>
	</div>
	<!-- end statistics -->
	<!-- features -->
	<div class="features">
		<div class="wrapper">
			<h2> Continuez à profiter toutes les améliorations de Driver Booster 5 PRO <span>pour obtenir des performances au top !</span></h2>
			<div class="disp">
				<dlv class="list feat-01">
					<h3>Pas besoin de mettre à jour les pilotes un par un</h3>
					<p>Vous offre la solution “one-stop” pour détecter et mettre à jour les pilotes obsolète, rares et manquants.</p>
				</dlv>
				<div class="list feat-02">
					<h3>Télécharger et mettre à jour les pilotes en toute sécurité</h3>
					<p>Sauvegarde automatiquement et crée un point de restauration du système avant la mise à jour en cas d’inattendue.</p>
				</div>
				<div class="list feat-03">
					<h3>Pas de système crash inattendue</h3>
					<p>Garde tous les pilotes toujours à jour pour vous proposer un système stable.</p>
				</div>
				<div class="list feat-04">
					<h3>Gagner vos temps précieux</h3>
					<p>Télécharge et installe Auto les pilotes pendant le temps d’inactivité et débloque la limite de vitesse de la mise à jour.</p>
				</div>
				<div class="list feat-05" >
					<h3>Expérience de jeu plus lisse</h3>
					<p>Prise en charge de plus de composants de jeu comme Nvidia, Realtek, Intel, AMD, Broadcom, VIA, Microsoft Visual C++ 2017 Redistributable etc.</p>
				</div>
			</div>
			<div class="cart-zone">
				<h3>Profitez de votre chance exclusive de <br> passer à la dernière version PRO, ne vous en manquez pas !</h3>
				<div class="btn-zone">
					<a href="https://www.iobit.com/buy.php?product=fr-db5preorder15d&ref=2018giveaway1fr&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-fr');" class="orig-btn"><span>Profitez de PRO à 0€</span></a>
					<div class="shadow"></div>
				</div>
				<div class="count-down">
					<strong>6</strong>J : 
					<strong>22</strong>H : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
			</div>
		</div>
	</div>
	<!-- end features -->
	<!-- awards -->
	<div class="awards">
		<div class="wrapper">
			<h2>Récompenses Obtenues</h2>
			<img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
		</div>
	</div>
	<!-- end awards -->
	<!-- reviews -->
	<div class="reviews">
		<div class="wrapper">
			<h2> Les experts l’ont approuvé, les utilisateurs l’adorent !</h2>
				<div class="review active">
					<h3>Avis des Médias</h3>
					<h4>"La fonctionnalité de base simple de Driver Booster PRO est encore plus attrayante. " </h4>
					<p>La fonctionnalité de base simple de Driver Booster PRO est encore plus attrayante. Grâce à l’inclusion de multiples licences à un prix très favorable ainsi qu’une interface personnalisable qui peut bien afficher des informations spécifiques sur le matériel. Alors que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent des fonctionnalités convaincantes, mais IObit Driver Booster PRO est le meilleur d’entre eux.</p>
				</div>
				<div class="review">
					<h3>Commentaire des Utilisateurs</h3>
					<h4>"Mon PC est plus rapide et plus stable que je ne le pensais."</h4>
					<p>"Avec Driver Booster, je peux facilement trouver les pilotes obsolètes et les mettre à jour avec simplicité. En outre, il m’aide à corriger l’erreur sonore, l’erreur réseau, l’erreur de périphérique etc. Je ne le croyais pas avant de l’utiliser, mais après l’avoir essayé je l’ai aimé parce que mon PC est plus rapide et plus stable que je ne le pensais... Merci à IObit."</p>
				</div>
				<div class="review">
					<h3>Commentaire des Utilisateurs</h3>
					<h4>"Je recommande vivement Driver Booster , il vous aide rapidement et facilement à mettre à jour les pilotes."</h4>
					<p>"Driver Booster est une application sensationnelle. Si vous êtes comme moi avez de nombreuses applications et périphériques ou pilotes et ne pas avoir le temps de les mettre à jour manuellement."</p>
				</div>
				<div class="review">
					<h3>Commentaire des Utilisateurs</h3>
					<h4>"Il fonctionne parfaitement. Facile à utiliser, informatif et intuitif. Driver Booster restera dans ma boîte à outils pour toujours ... Great job!"</h4>
					<p>"Ceci est l'un des meilleurs programmes de mise à jour du pilote. Microsoft m'a même égaré en suggérant des mises à jour qui ne compatible pas avec ma machine. Ce programme savait ce que les mises à jour je devais sans conflits. "</p>
				</div>
				<ul class="users clearfix">
					<li class="active">
						<img src="<?php echo $pResUrl; ?>images/pcmag.png" alt="PC Magazine">
						<span>PC Magazine</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya">
						<span>Myo Thuya</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund">
						<span>Adam Backlund</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
						<span>Wayne Bowler</span>
					</li>
				</ul>	
		</div>
	</div>
	<!-- end reviews -->
	<!-- bottom -->
	<div class="bottom">
		<div class="wrapper">
			<div class="solgan">
				<p> Pourquoi hésitez-vous ?</p>
				<h2>Obtenez maintenant la version PRO pour profiter d’un PC stable et <br> d’une meilleure expérience des jeux !</h2>
			</div>
			<div class="btn-zone">
				<a href="https://www.iobit.com/buy.php?product=fr-db5preorder15d&ref=2018giveaway2fr&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-fr');" class="orig-btn"><span>Profitez de PRO à 0€</span></a>
				<div class="shadow"></div>
			</div>
			<div class="count-down">
				<strong>6</strong>J : 
				<strong>22</strong>H : 
				<strong>34</strong>M : 
				<strong>25</strong>S : 
				<small>345</small>ms
			</div>
			<div class="footer">
				<dl>
					<dt>Note:</dt>
					<dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion..</dd>
				</dl>
				<p>Copyright © 2005 - 2018 IObit. Tous droits réservés</p>
			</div>
		</div>
	</div>
	<!-- end bottom -->
	<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
	<script>
		function getBuyNum(){
			$.ajax({
				type: "GET",
				url: "<?php echo $pRootUrl;?>callback.php",
				data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reduceTime;?>&r="+Math.random(),
				success: function(packs){
					$('.buy-num').html(packs);
				}
			});
			setTimeout('getBuyNum()', 3000);
		}
		setTimeout('getBuyNum()', 3000);

		$(".reviews .users li").click(function(event) {
			$(this).addClass("active").siblings().removeClass("active");
			$(".reviews .review").eq($(this).index()).addClass("active").siblings().removeClass("active");
		});
		$(document).ready(function() {
			cycleCountdown();
			$('.countDay').animateNumber({
						number: <?php echo $installDays;?>
					},
					5000,
					'linear'
			);
			$('.driver').animateNumber({
						number: <?php echo $driverCount;?>
					},
					3000,
					'linear'
			);
		});

		function cycleCountdown(){
			var datetime = timeCountDown(<?php echo $expireTimestamp;?>);
			if(datetime==false){
				window.location.href='index.php';
			}else {
				d = MApp(2.2).packages.zeroize(datetime[0], 2);
				h = MApp(2.2).packages.zeroize(datetime[1], 2);
				i = MApp(2.2).packages.zeroize(datetime[2], 2);
				s = MApp(2.2).packages.zeroize(datetime[3], 2);
				mi = MApp(2.2).packages.zeroize(datetime[4], 3);
				$('.count-down').each(function () {
					$(this).find('strong').eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
				});
				$('.count-down small').html(mi);
				setTimeout('cycleCountdown()', 1);
			}
		}

		function timeCountDown(startTimestamp) {
			var dateObj = new Date();
			var time = dateObj.getTime().toString().substring(0, 10);
			var remainingTime = startTimestamp - time;
			if (remainingTime > 0) {
				var d = Math.floor(remainingTime / (24 * 60 * 60));
				var h = Math.floor(remainingTime / (60 * 60) % 24);
				var i = Math.floor(remainingTime / 60 % 60);
				var s = Math.floor(remainingTime % 60);
				var mi = 999 - dateObj.getMilliseconds();
				if (mi < 10) {
					mi = '00' + mi;
				} else if (mi < 100) {
					mi = '0' + mi;
				}
				return [d, h, i, s, mi];
			} else {
				return false;
			}
		}
	</script>
</body>
</html>