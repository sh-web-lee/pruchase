<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'frimfbd' . $date;
	if (!isset($_COOKIE[$c_name])) {
		$packsNum = 55;
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			setcookie($c_name, 3, time() + 3600 * 24 * 2);
			$packsNum = 3;
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title> La protection optimale pour votre PC - IObit Malware Fighter PRO </title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<h1>Le moteur Bitdefender : Protection optimale pour votre PC </h1>
			<h2>Protégez votre PC contre plus de 209 millions de menaces </h2>
			<div class="left-img">
				<img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
			</div>
			<div class="right-message">
				<div class="box">
					<dl class="message">
						<dt>
							<h3>Il ne reste plus que
								<div class="countdown">
				          <div class="scroll-tick" ><span>0</span></div>
				          <div class="scroll-tick" ><span>0</span></div>
				        </div>
	      				paquets !
	      			</h3>
							<span>   Un an de protection pour 3 PC</span> <del>79,99€</del>
						</dt>
						<dd>
							<span><i></i> Protected Folder  </span> <del>39,99€</del> <em>  Gratuit</em>
						</dd>
						<dd>
							<span><i></i> AMC Security PRO </span> <del>19,99€</del> <em>  Gratuit</em>
						</dd>
						<dd>
							<span><i></i> Smart Defrag  PRO </span> <del>29,99€</del> <em>  Gratuit</em>
						</dd>
					</dl>
					<dl class="price">
						<dt>
							  Seulement  <strong>21 <sup>€99</sup></strong> <del>169,96€</del>
						</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=fr-imf8pfsdamc2199&ref=fr_imf8bdengine<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdengine-fr');" class="buybtn"><i></i> VITE, J’EN PROFITE</a></dd>
					</dl>
				</div>
				<img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" class="payment">
			</div>
		</div>
	</div>
	<!--end banner-->
	<!--cruces-->
	<div class="cruces">
		<div class="wrapper clearfix">
			<h2> A savoir</h2>
			<ul>
				<li>
					<h3>Les malwares sont partout !</h3>
					<p> Internet est plus dangereux qu’on ne le pense, chaque jour de nombreux et nouveaux logiciels malveillants, comme les chevaux de Troie, les logiciels espions, de rançons et publicitaires sont créés qui tentent de porter atteintes à votre ordinateur.</p>
				</li>
				<li class="last">
					<h3>De graves conséquences</h3>
					<p>Une fois infecté, les conséquences sont désastreuses et ces logiciels malveillants peuvent, entre-autres, voler vos informations personnelles, vos données financières ou pire vous faire du chantage.</p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>Protection supérieure contre les malwares avec le dernier moteur Bitdefender </h2>
		<p>Equipé du moteur anti-virus Bitdefender, IObit Malware Fighter 8 PRO élimine plus de 209 millions de menaces de sécurité.</p>
		<div class="message-box">
			<dl class="list01">
				<dt>Base de données à jour </dt>
				<dd>Chaque nouvel échantillon de malware serait constamment ajouté à la base de données de Bitdefender afin que votre ordinateur soit à l’abri de ces infections dangereuses. </dd>
			</dl>
			<dl class="list02">
				<dt>Protection en temps réel</dt>
				<dd>Une fois le moteur Bitdefender activé, votre ordinateur sera entièrement protégé en temps réel. Toute menace qui tente de pénétrer dans votre machine sera immédiatement bloquée ou supprimée.</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				  Seulement  <strong>21 <sup>€99</sup></strong> <del>169,96€</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=fr-imf8pfsdamc2199&ref=fr_imf8bdengine<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdengine-fr');" class="buybtn"><i></i> VITE, J'EN PROFITE</a></dd>
			<dd class="last"><i></i> Satisfait ou 100% remboursé durant les 60 premiers jours</dd>
		</dl>
	</div>
	<!--end db message-->
	<!--feature-->
	<div class="feature">
		<div class="wrapper">
			<h2>Les autres protections exclusives à la version PRO</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
				<dd><h3>Moteur Anti-Ransomware</h3></dd>
				<dd>Stoppez tout Ransomware de manière proactive et intelligente qui tente d’envahir votre machine et protégez vos fichiers importants.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Coffre-fort</h3></dd>
				<dd>Protégez vos dossiers importants contre l’accès non autorisé ainsi que des nouvelles menaces.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Protection de la webcam</h3></dd>
				<dd>Vous informera immédiatement lorsqu’un programme tentera de dérober vos informations confidentielles via votre webcam.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
				<dd><h3>Protection de données sensibles</h3></dd>
				<dd>Intégrez une couche de protection supplémentaire pour vos données sensibles comme les documents, les photos et les vidéos.</dd>
			</dl>
		</div>
	</div>
	<!--end feature-->
	<!--gift-message-->
	<div class="gift-message">
		<div class="wrapper">
			<h2>87% de réduction pour activer IObit Malware Fighter PRO</h2>
			<h3>  Obtenez gratuitement 3 outils PRO ( d’une valeur de 89,97€ )</h3>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Protected Folder</strong> <del>39,99€</del> (1 An / 1 PC)
				</dd>
				<dd class="last">Aucune fuite de fichiers importants pour la confidentialité sécurisée</dd>
			</dl>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>AMC Security PRO*</strong> <del>19,99€</del> (1 An / 1 Appareil)
				</dd>
				<dd class="last">Gardez votre Android rapide, sûr et sans virus !</dd>
			</dl>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Smart Defrag 6 PRO</strong> <del> 29,99€</del> (1 An / 1 PC)
				</dd>
				<dd class="last">Satisfait ou 100% remboursé durant les 60 premiers jours</dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				  Seulement  <strong>21 <sup>€99</sup></strong> <del>169,96€</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=fr-imf8pfsdamc2199&ref=fr_imf8bdengine<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdengine-fr');" class="buybtn"><i></i> VITE, J'EN PROFITE</a></dd>
			<dd class="last"><i></i> Satisfait ou 100% remboursé durant les 60 premiers jours</dd>
		</dl>
	</div>
	<div class="review wrapper clearfix">
		<h2>Avis des utilisateurs et des médias</h2>
		<dl class="gelu-batir">
			<dt>
				<img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="">
			</dt>
			<dd>
				<strong>Gelu Batir</strong>
			</dd>
			<dd>Je suis très satisfait de votre produit IObit Malware Fighter. J'ai eu beaucoup de problèmes d'interférences malveillantes auparavant, je n'ai pas pu regarder un film ou un concert entier que j'aime beaucoup. Grâce à votre produit, maintenant chaque opération est claire, sûre et bien protégée. Il scanne mon ordinateur portable sans affecter sa performance. Je l'ai déjà recommandé à deux de mes amis.</dd>
		</dl>
		<dl class="software">
			<dt>
				<img src="<?php echo getStaticUrl('images/software.png')?>" alt="">
			</dt>
			<dd>
				<strong>Software.Informer</strong>
			</dd>
			<dd>Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est donc compatible avec votre logiciel antivirus standard. IObit Malware Fighter 6 est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots.</dd>
		</dl>
		<dl class="david-cassidy">
			<dt>
				<img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="">
			</dt>
			<dd>
				<strong>David Cassidy</strong>
			</dd>
			<dd>Merci d'avoir fait sortir Malware Fighter V6, c’est une autre mise à jour majeure pour vos utilisateurs. Il est facile à utiliser et la vitesse du scan est beaucoup plus rapide. Les gens qui veulent vraiment un bon programme anti-malware et ant-virus qui est aussi à un prix raisonnable ne doivent pas chercher plus loin qu’IObit Malware Fighter. Je recommanderais qu'ils oublient le reste et choisissent le meilleur qui est IObit Malware Fighter.</dd>
		</dl>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="award wrapper">
			<h2>Prix et Distinctions</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
		</div>
		<dl class="note wrapper">
			<dt>Notification</dt>
			<dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
			<dd>*.Licence gratuite d'AMC Security PRO, la version complète comprend annonces intégrées.</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</div>
</body>
</html>