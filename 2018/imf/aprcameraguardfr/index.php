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
	$c_name = 'frimfcg' . $date;
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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title> 87% d'economie sur le nouvel IObit Malware Fighter 6 PRO – IObit</title>
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
			<h1>Offre spéciale de nouvel IObit Malware Fighter 6 </h1>
			<h2>Protection en ligne complète pour vous et vos familles </h2>
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
							<span>   Une année de protection pour 3 PCs</span> <del>79,99€</del>
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
						<dd><a href="https://www.iobit.com/buy.php?product=fr-imf6amcpfsd2199&ref=fr_imf6cg&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf " onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-cameraguard-fr');" class="buybtn"><i></i> VITE, J’EN PROFITE</a></dd>
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
			<h2>Ce que vous devez savoir</h2>
			<ul>
				<li>
					<h3>Sécurité de webcam</h3>
					<p>Webcam n'est pas aussi sûre que vous le croyez. En revanche, de nombreux programmes peuvent scanner et accéder aux webcams en quelques minutes. Les webcams sans protection peuvent être facilement piratées.</p>
				</li>
				<li>
					<h3>Sous surveillance une fois piraté</h3>
					<p>Tout ce que vous faites devant la webcam sera surveillé par des inconnus. Votre vie sera partagée en ligne et diffusée en direct sur Internet. Une fois attaqué, toute votre vie privée sera exposée.</p>
				</li>
				<li class="last">
					<h3>Comment se protéger</h3>
					<p>Changez fréquemment de mot de passe ou choisissez la protection de webcam digne de votre confiance.</p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>La protection puissante dont vous avez besoin</h2>
		<p>Protection de Webcam dans IObit Malware Fighter 6 PRO vous en informera immédiatement une fois que tout programme non autorisé tente de dérober <br> vos informations confidentielles via votre webcam.</p>
		<div class="message-box">
			<dl class="list01">
				<dt>Bloquer l’accès non autorisé  </dt>
				<dd>Une fois que la webcam a été utilisée par un programme non autorisé, Protection de Webcam le détectera et vous tiendra informé afin d’éviter les fuites de confidentialité. </dd>
			</dl>
			<dl class="list02">
				<dt>Protection complète </dt>
				<dd>Pour éviter tous les regards indiscrets et assurer une protection complète, toute tentative d'accès à votre webcam ne peut se faire qu'avec votre accord. Si vous faites vraiment confiance à un programme, vous ne cliquez  que sur « Mémoriser ».</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				  Seulement  <strong>21 <sup>€99</sup></strong> <del>169,96€</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=fr-imf6amcpfsd2199&ref=fr_imf6cg&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf " onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-cameraguard-fr');" class="buybtn"><i></i> VITE, J'EN PROFITE</a></dd>
			<dd class="last"><i></i> 100% Garantie de remboursement de 60 jours</dd>
		</dl>
	</div>
	<!--end db message-->
	<!--feature-->
	<div class="feature">
		<div class="wrapper">
			<h2>Les autres protections dont vous ne profitez que dans la version PRO</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
				<dd><h3>Moteur Bitdefender</h3></dd>
				<dd>Détection de virus imbattable grâce au moteur Anti-virus avancé de Bitdefender.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Coffre-fort</h3></dd>
				<dd>Protection de vos dossiers importants spécifiés contre l'accès non autorisé et les dernières menaces.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Moteur Anti-rançongiciel </h3></dd>
				<dd>Stopper tout Ransomware de manière proactive et intelligente qui tente d’envahir votre machine et protéger vos fichiers importants.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
				<dd><h3>Mise à jour automatique</h3></dd>
				<dd>Mise à jour automatique vers la dernière version</dd>
			</dl>
		</div>
	</div>
	<!--end feature-->
	<!--gift-message-->
	<div class="gift-message">
		<div class="wrapper">
			<h2>87% d’économie pour activer IObit Malware Fighter PRO</h2>
			<h3>  Obtenez gratuitement 3 outils PRO ( valent 89,97€ )</h3>
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
				<dd class="last">Maximisez les performances de disque de votre PC</dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				  Seulement  <strong>21 <sup>€99</sup></strong> <del>169,96€</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=fr-imf6amcpfsd2199&ref=fr_imf6cg&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf " onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-cameraguard-fr');" class="buybtn"><i></i> VITE, J'EN PROFITE</a></dd>
			<dd class="last"><i></i> 100% Garantie de remboursement de 60 jours</dd>
		</dl>
	</div>
	<div class="review wrapper clearfix">
		<h2>Avis des utilisateurs et des médias sur cette version</h2>
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