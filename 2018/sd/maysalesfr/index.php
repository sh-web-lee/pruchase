<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
function microtime_float() {
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

$packsNum=empty($_COOKIE['pc'])?120:$_COOKIE['pc'];
if ($_GET['action'] == 'getPacks') {
	$randNum=rand(1,100);
	if($randNum%4==0){
		$packsNum-=2;
	}else
		$packsNum--;
	if($packsNum<=0){
		$packsNum=120;
	}
	setcookie('pc',$packsNum,time()+3600*720);
	echo $packsNum;
	exit ;
}
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
		'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
		'sdfeatures_noaction','sdddact_noaction','actreport'))){
	$refStr='-'.$_GET['ref'];
}else{
	$refStr='';
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>Offre Spéciale sur Smart Defrag PRO - IObit</title>
		<meta name="Copyright" content="IObit">
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
		<?php echo $gJavascript['public']; ?>
		<?php echo $gJavascript['head']; ?>
		<script type="text/javascript">
		function decreasingPacks() {
		$.ajax({
			type: "GET",
				url: "index.php",
				data: "action=getPacks&r=" + Math.random(),
				success: function(packs) {
					$('.packs').html(packs);
					setTimeout('decreasingPacks()', 75000);
				}
			});
		}
		setTimeout('decreasingPacks()', 75000);
		</script>
	</head>
	<body>
	<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
		<!-- header -->
		<div class="header">
			<div class="wrapper">
				<a href="http://www.iobit.com" class="logo" target="_blank">IObit</a>
				<h1>Jusqu’à -70% Offre Spéciale pour SMART DEFRAG 6 PRO</h1>
				<ul class="countdown" id="counttime1">
					<li>00 <span>H:</span></li>
					<li>00 <span>M:</span></li>
					<li>00 <span>S:</span></li>
					<li>000 <sup>*</sup></li>
				</ul>
				<div class="clear"></div>
				<div class="content">
					<div class="left">
						<img src="<?php echo $pResUrl; ?>images/sd-box.png" alt="">
					</div>
					<div class="arrow"></div>
					<div class="right">
						<dl class="message">
							<dt><strong>Smart Defrag 6 PRO <span>(1 An / 1 PC)</span></strong> <b>19,99€</b> <del>29,99€</del></dt>
							<dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>SD 6 PRO 2 PCs Supplémentaires</strong> <span>Gratuit</span> <del>19,99€</del></dd>
							<dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>AMC Security PRO</strong> <span>Gratuit</span> <del>19,99€</del></dd>
						</dl>
						<dl class="buy">
							<dt><strong>19,99€</strong> <del>69,97€</del></dt>
							<dd><a href="https://www.iobit.com/buy.php?product=fr-sd6amc&ref=fr_sd6amcpurchase1805<?php echo $refStr;?>&refs=fr_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1805-fr')" class="buybtn">J’EN PROFITE</a></dd>
							<dd><img src="<?php echo $pResUrl; ?>images/count.png" alt="">  Il n’en reste plus que <strong class="packs"><?php echo $packsNum; ?></strong> paquets</dd>
						</dl>
					</div>
				</div>
		</div>
		</div>
		<!-- header end -->
		<div class="wrapper accepted">
			<img src="<?php echo $pResUrl; ?>images/pay&guartee.png" alt="">
		</div>
		<div class="wrapper awards">
			<h2>Prix et Distinction</h2>
			<img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
		</div>
		<div class="wrapper benfits clearfix">
			<h2>Maximise la performance de disque dur & Accélère votre PC avec SD 6 PRO</h2>
			<dl class="row1">
				<dt><img src="<?php echo $pResUrl; ?>images/icons001.png" alt=""></dt>
				<dd><strong>Nouveau Moteur Ultra Rapide</strong> <span>Défragmente les fichiers plus efficacement et complètement en moins de temps</span></dd>
			</dl>
			<dl class="row1 right">
				<dt><img src="<?php echo $pResUrl; ?>images/icons002.png" alt=""></dt>
				<dd><strong>Jusqu’à 200% Plus Rapide *</strong> <span>Accélère la vitesse d’accès aux fichiers & de lancement du jeu avec Défragmenter Fichiers Volumineux</span></dd>
			</dl>
			<div class="clear"></div>
			<dl class="row2">
				<dt><img src="<?php echo $pResUrl; ?>images/icons003.png" alt=""></dt>
				<dd><strong>Défragmentation Auto</strong> <span>Défragmente automatiquement et intelligemment les fichiers et disques durs séléctionnés sans aucune interruption</span></dd>
			</dl>
			<dl class="row2 right">
				<dt><img src="<?php echo $pResUrl; ?>images/icons004.png" alt=""></dt>
				<dd><strong>Démarrage de PC Plus Rapide</strong> <span>Démarrage de PC et fonctionnement du système plus rapide avec Défragmenter au Démarrage</span></dd>
			</dl>
			<div class="clear"></div>
			<p><a href="javascript:void(0);" onclick="goTaget($('#compare'))">En savoir plus sur l’édition PRO></a></p>
		</div>
		<div class="wrapper between-buy clearfix">
			<div class="left">
				<dl class="sd">
					<dt><img src="<?php echo $pResUrl; ?>images/big-sd.png" alt=""></dt>
					<dd><strong>19,99€</strong> <del>29,99€</del></dd>
				</dl>
				<dl class="free">
					<dt><img src="<?php echo $pResUrl; ?>images/additions.png" alt=""></dt>
					<dd>2 PCs Supplémentaires</dd>
					<dd><span class="see-more">Plus d’infos</span></dd>
				</dl>
				<dl class="free amc">
					<dt><img src="<?php echo $pResUrl; ?>images/amc-free.png" alt=""></dt>
					<dd>Appareils Android contre les virus</dd>
					<dd><span class="see-more">Plus d’infos</span></dd>
				</dl>
			</div>
			<div class="pop-content hidden">
				<span class="close"></span>
				<dl>
					<dt>Prend en charge 2 PCs supplémentaires</dt>
					<dd>Licence de Smart Defrag 6 PRO prend en charge 2 PCs supplémentaires, vous pouvez ainsi donc le partager avec vos amis et familles!</dd>
					<dt>AMC Security PRO</dt>
					<dd class="check">Accélère votre appareil jusqu’à 200% plus rapide</dd>
					<dd class="check">Protège votre appareil en temps réel contre menaces</dd>
					<dd class="check">Protège complètement vos données privées</dd>
					<dd class="check">Pionnier dans le domaine de sécurité de paiement,ne vous inquiétez jamais de la fraude </dd>
				</dl>
			</div>
			<dl class="right buy">
				<dt><strong>19,99€</strong> <del>69,97€</del></dt>
				<dd><a href="https://www.iobit.com/buy.php?product=fr-sd6amc&ref=fr_sd6amcpurchase1805<?php echo $refStr;?>&refs=fr_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1805-fr')" class="buybtn">J’EN PROFITE</a></dd>
				<dd><img src="<?php echo $pResUrl; ?>images/count.png" alt="">  Il n’en reste plus que <strong class="packs"><?php echo $packsNum; ?></strong> paquets</dd>
			</dl>
		</div>
		<div class="review">
			<div class="wrapper">
				<div class="media_rev">
					<h3>Avis des Médias</h3>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/clubic.png" alt=""></dt>
						<dd><strong>"Simple d'utilisation et plus complet que l'outil proposé par Windows."</strong></dd>
						<dd>"Simple d'utilisation et plus complet que l'outil proposé par Windows, Smart Defrag est un bon logiciel qui est capable de défragmenter vos disques mais aussi de les optimiser. La planification ainsi que l'analyse avancée sont des atouts de taille. Un outil à recommander!"<span>- clubic.com</span></dd>
					</dl>
				</div>
				<div class="user_rev" id="user_rev">
					<div class="content">
						<h3>Commentaire des Utilisateurs</h3>
						<dl class="show">
							<dd><h4>"Smart Defrag, un défragmenteur de disque parfait."</h4></dd>
							<dd>"Smart Defrag est un logiciel parfait destiné à défragmenter les disques qui peut travailler en arrière-plan pendant une période d’inactivité. C’est qu’il ne risque pas de vous déranger pendant le processus de défragmentation. Les disques sont défragmentés en permanence permettant de proposer un accès rapide et moins d’usure. Smart Defrag, c’est le meilleur défragmenteur de disque qu’un utilisateur débutant peut acheter et je vais le recommander à ma famille et mes amis!"</dd>
						</dl>
						<dl>
							<dd><h4>"Facile à utiliser, il est pratique pour votre disque dur ou SSD."</h4></dd>
							<dd>"Je fais fonctionner RAID 0 SSDs et RAID 0 HDDs, et j’utilise Smart Defrag Pro afin d’analyser, défragmenter mes disques et de les rendre fonctionner parfaitement. Il est fiable, facile à installer et à utiliser comme tous les logiciels d’IObit. Il suffit de le configurer et le laisser. Smart Defrag a une petite empreinte de mémoire afin de ne pas ralentir votre système. Fortement recommande!"</dd>
						</dl>
						<dl>
							<dd><h4>"Mon bureau et mon ordinateur portable marchent plus rapidement et libèrent plus d’espaces depuis mon utilisation de ce logiciel excellent."</h4></dd>
							<dd>"J’utilise Smart Defrag depuis aussi longtemps. Mon bureau et mon ordinateur portable marchent plus rapidement et libèrent plus d’espaces depuis mon utilisation de ce logiciel excellent. Vous disposez d’un outil complet pour vous proposer un PC rapide et sécurisé si vous avez également installé l’Advanced SystemCare Ultimate. Vous pourrez garder votre système en bon état même si vous n’êtes pas expert dans ce domaine!"</dd>
						</dl>
					</div>
					<ul class="users">
						<li class="active"><img src="<?php echo $pResUrl; ?>images/amnon.jpg" alt="">Amnon<br>2014</li>
						<li class=""><img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.jpg" alt="">Edward Lee Ah Yen<br>2014</li>
						<li class=""><img src="<?php echo $pResUrl; ?>images/hans.jpg" alt="">Hans<br>2014</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="comparison_table wrapper" id="compare">
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<thead>
				<tr>
					<th colspan="2"><strong>Savoir ce que PRO édition peut faire pour vous? </strong></th>
					<th class="itemb">Smart Defrag FREE</th>
					<th class="itema">
						<span>SD PRO + Cadeau Gratuit</span>
						<span><strong>19,99€</strong> <del>69,97€</del></span>
						<span>1 an / 3 PCs</span>
						<a href="https://www.iobit.com/buy.php?product=fr-sd6amc&ref=fr_sd6amcpurchase1805<?php echo $refStr;?>&refs=fr_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1805-fr')" class="tbbuybtn">J’EN PROFITE</a>
					 </th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons01.jpg"></td>
					<td class="virtue">Défragmentation et Optimisation de Base de disque dur</td>
					<td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons02.jpg"></td>
					<td class="virtue">La vitesse d’accès aux fichiers jusqu’à 200% plus rapide</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons03.jpg"></td>
					<td class="virtue">Démarrage de PC plus rapide grâce au Défragmenter au Démarrage</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons04.jpg"></td>
					<td class="virtue">Défragmenter Automatiquement et Intelligemment les fichiers fragmentés</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons05.jpg"></td>
					<td class="virtue">Personnaliser le mode & disques durs/fichiers que vous voulez défragmenter</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons06.jpg"></td>
					<td class="virtue">DMA appliqué pour Transfert de données plus rapide et stable</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons07.jpg"></td>
					<td class="virtue">Aucune interruption au travail ou au jeu avec Mode Silencieux</td>
					<td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons08.jpg"></td>
					<td class="virtue">Maximise l’expérience du jeu avec Défragmenteur de Jeux </td>
					<td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons09.jpg"></td>
					<td class="virtue">Prend en charge la tâche programmée durant une période d’inactivité</td>
					<td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons10.jpg"></td>
					<td class="virtue">Mise à jour automatique vers la dernière version</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons11.jpg"></td>
					<td class="virtue">Soutien technique gratuit de 24/7 à la demande</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="2"></th>
						<th class="itemb">Smart Defrag FREE</th>
						<th class="itema"><span>Smart Defrag PRO <br>+ Cadeau Gratuit</span>
						 </th>
					</tr>
				</tfoot>
			</table>
	</div>
	<div class="fy-banner wrapper">
		<img src="<?php echo $pResUrl; ?>images/bottom-sd-content.png" alt="">
		<dl>
			<dd>
				<span><img src="<?php echo $pResUrl; ?>images/spped.png" alt="">Accélère votre PC avec défragmentation intelligente</span>
				<span><img src="<?php echo $pResUrl; ?>images/imporve.png" alt="">Améliore performance PC avec disque dur optimisé</span>
			</dd>
			<dt>
				<a href="https://www.iobit.com/buy.php?product=fr-sd6amc&ref=fr_sd6amcpurchase1805<?php echo $refStr;?>&refs=fr_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1805-fr')" class="buybtn">J’EN PROFITE</a>
			</dt>
		</dl>
	</div>
	<dl class="annotation wrapper">
		<dt>Note:</dt>
		<dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion</dd>
		<dd>*.Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
		<dd>*.Licence gratuite d'AMC Security PRO, la version complète comprend des annonces intégrées.</dd>
	</dl>
		<!-- footer -->
		<div class="footer">
			<p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
		</div>
		<!-- footer end -->
		<script>
			$(document).ready(function() {
					$("#user_rev .users li").mouseover(function(event) {
					var num = $(this).index();
					$("#user_rev .users li").eq(num).addClass('active').siblings().removeClass('active');
					$("#user_rev dl").eq(num).addClass('show').siblings().removeClass('show');
				});
				cycleCountdown();
			});
			$(".see-more").click(function(){
				$(".pop-content").addClass("show").removeClass("hidden");
			});
			$(".close").click(function(){
				$(".pop-content").addClass("hidden").removeClass("show");
			});
			function goTaget(target) {
				var Theigth = target.offset().top;
				$("html, body").animate({scrollTop: Theigth}, 'slow');
			}
			function cycleCountdown(){
				var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
				var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
				d = MApp(2.2).packages.zeroize(datetime[0], 2);
				h = MApp(2.2).packages.zeroize(datetime[1], 2);
				i = MApp(2.2).packages.zeroize(datetime[2], 2);
				s = MApp(2.2).packages.zeroize(datetime[3], 2);
				mi = MApp(2.2).packages.zeroize(datetime[4], 3);
				document.getElementById('counttime1').innerHTML = '<li>'+h+'<span>H : </span></li><li>'+i+'<span>M : </span></li><li>'+s+'<span>S : </span></li> <li>'+mi+'<sup>*</sup></li>';
				setTimeout('cycleCountdown()', 1);
			}
		</script>
	</body>
</html>