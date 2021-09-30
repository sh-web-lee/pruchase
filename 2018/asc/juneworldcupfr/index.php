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

$buyNum = ceil(microtime_float() * 1000 / 20000) - 68457026;
$buyNum = number_format($buyNum);

$packsNum = ceil(microtime_float() * 2000 / 20000);
$packsNum = 360 - ($packsNum % 360);
if ($_GET['action'] == 'getPacks') {
	echo $packsNum;
	exit ;
}

if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
        'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
        'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
        'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
        'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12')
)){
  $refstr='-'.$_GET['st'];
}else{
  $refstr='';
}

if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refstr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>Jusqu'à -85% sur Advanced SystemCare PRO pour le rendez-vous football 2018 – Vente Flash chez IObit !</title>
		<meta name="Copyright" content="IObit">
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
		<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
		<?php echo $gJavascript['public']; ?>
		<?php echo $gJavascript['head']; ?>
		<script>
		  function decreasingPacks() {
		    $.ajax({
		      type: "GET",
		      url: "<?php echo $pRootUrl;?>callback.php",
      		data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>r="+Math.random(),
		      success: function(packs) {
		        $('#packs').html(packs);
		        setTimeout('decreasingPacks()', 10000);
		      }
		    });
		  }
		  setTimeout('decreasingPacks()', 10000);
		</script>
	</head>
	<body>
		<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

		<div class="banner">
			<div class="wrapper">
				<a href="https://www.iobit.com/fr/index.php" target="_blank" class="logo" target="_blank">IObit</a>
				<div class="title">
					<h1>Vente Flash pour La Coupe du Monde 2018</h1>
					<h2>Jusqu’à <b>-85%</b> sur Advanced SystemCare PRO pour supporter votre équipe de foot. Bravo !</h2>
				</div>
				<div class="box">
					<h3>-40%</h3>
					<span>Driver Booster 1AN 1PC</span>
					<dl class="price-content">
						<dt>
							<strong>16</strong>
							<span>€99 <del>29,99€</del></span>
						</dt>
						<dd>
							<a href="https://www.iobit.com/buy.php?product=fr-asc111pc1699&ref=fr_asc111pcpurchase1806<?php echo $refstr;?>&aff=&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1806b-fr')" class="buybtn border"><i></i> VITE, J’EN PROFITE</a>
						</dd>
					</dl>
				</div>
				<div class="three-box box">
					<p class="date"><img src="<?php echo $pResUrl; ?>images/date.png" alt=""> Expiré dans <strong>03</strong>H: <strong>03</strong>m: <strong>03</strong>s: <strong>003</strong>ms *</p>
          <img class="img-box" src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
					<dl class="price-content">
						<dt>
							<strong>17</strong>
							<span>€99 <del>119,97€</del></span>
						</dt>
						<dd>
							<a href="https://www.iobit.com/buy.php?product=fr-asc11pfsd1799&ref=fr_asc113pcpfsdpurchase1806<?php echo $refstr;?>&aff=&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1806-fr')" class="buybtn"><i></i> VITE, J’EN PROFITE</a>
						</dd>
						<dd class="last"><img src="<?php echo $pResUrl; ?>images/people.png" alt=""> 4,406,553 personnes l’ont acheté!</dd>
					</dl>
				</div>
				<div class="three-pc box">
					<h3>-60%</h3>
					<span>Driver Booster 1AN 3PC</span>
					<dl class="price-content">
						<dt>
							<strong>17</strong>
							<span>€99 <del>49,99€</del></span>
						</dt>
						<dd>
							<a href="https://www.iobit.com/buy.php?product=fr-asc113pc1799&ref=fr_asc113pcpurchase1806<?php echo $refstr;?>&aff=&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1806a-fr')" class="buybtn border"><i></i> VITE, J’EN PROFITE</a>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="payment">
			<img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
		</div>

    <!-- feature start -->
    <div class="feature clearfix">
      <div class="wrapper">
        <h2>Regardez le match de foot sans ralentissement grâce <br>à un PC rapide et performant</h2>
        <div class="showcase">
          <div class="inner">
            <ul class="screenshot">
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-00.png" alt="">
              </li>
              <li>              
                <img src="<?php echo $pResUrl; ?>images/screenshot-01.png" alt="">
              </li>
              <li>              
                <img src="<?php echo $pResUrl; ?>images/screenshot-02.png" alt="">
              </li>
              <li>              
                <img src="<?php echo $pResUrl; ?>images/screenshot-03.png" alt="">
              </li>
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-04.png" alt="">
              </li>
            </ul>         
          </div>  
          <ul class="zoom">
            <li class="fun1">
              <div class="container">
                <img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
              </div>
            </li>
            <li class="fun2">
              <div class="container">
                <img src="<?php echo $pResUrl; ?>images/screenshot-01-zoom.png" alt="">
              </div>
            </li>
            <li class="fun3">
              <div class="container">
                <img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
              </div>
            </li>
            <li></li>
            <li></li>
          </ul>     
        </div>
        <div class="detail-list">
          <dl>
            <dt><i class="benfits03"></i></dt>
            <dd>
              <h3>300%* plus rapide</h3>
              <p>Optimisation de la rapidité Internet jusqu'à 300% avec Accélérateur Internet</p>
            </dd>
          </dl>
          <dl class="active two">
            <dt><i class="benfits02"></i></dt>
            <dd>
              <h3>Nettoyage automatique du registre</h3>
              <p>Un registre propre améliore le temps du démarrage et de la fermeture de Windows, il permet également de charger les programmes plus rapidement.</p>
            </dd>
          </dl>
          <dl class="two">
            <dt><i class="benfits04"></i></dt>
            <dd>
              <h3>Supprimer les malwares en temps réel</h3>
              <p>Mettre votre PC à l’abri de malware et des menaces de sécurité diverses pour vous proposer la sécurité informatique.</p>
            </dd>
          </dl>
          <dl>
            <dt><i class="benfits01"></i></dt>
            <dd>
              <h3>Corriger des vulnérabilités Windows</h3>
              <p>Scanner et corriger des vulnérabilités Windows pour prévenir les problèmes avant qu’il ne se produisent.</p>
            </dd>
          </dl>
          <dl>
            <dt><i class="benfits05"></i></dt>
            <dd>
              <h3>Garder vos logiciels à jour automatiquement</h3>
              <p>Vous aider à mettre à jour vos programmes importants en un seul clic</p>
            </dd>
          </dl>
          <a class="textlink" href="Javascript:void(0);">En savoir plus sur PRO version>>></a>
        </div>
      </div>
    </div>
    <!-- feature end -->

	<div class="gift-box">
		<h2>Un paquet cadeau à durée limitée pour les fans de foot</h2>
		<div class="wrapper clearfix"> 	
			<div class="box">
				<img src="<?php echo $pResUrl; ?>images/sd-gift.png" alt="">
				<dl>
					<dt>
						<h3>Smart Defrag 5 PRO</h3>
						<del>29,99€</del> <strong>0<b>€</b> </strong>
					</dt>
					<dd>Accélère la vitesse d’accès aux fichiers & de <br> lancement du jeu</dd>
					<dd>Maximise les performances du disque dur <br> et de votre PC    </dd>
				</dl>
			</div>
			<div class="box last">
				<img src="<?php echo $pResUrl; ?>images/pf-gift.png" alt="">
				<dl>
					<dt>
						<h3>Protected Folder</h3>
						<del>39,99€</del> <strong>0<b>€</b> </strong>
					</dt>
					<dd>Il fait office de coffre-fort pour vos fichiers <br> et dossiers</dd>
					<dd>Un mot de passe empêche quiconque <br> de les ouvrir   </dd>
				</dl>
			</div>
			<a href="https://www.iobit.com/buy.php?product=fr-asc11pfsd1799&ref=fr_asc113pcpfsdpurchase1806<?php echo $refstr;?>&aff=&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1806-fr')" class="buybtn red"><i></i> VITE, J’EN PROFITE</a>
			<p><strong>4,406,553</strong> personnes ont supporté leur équipe préférée!</p>
		</div>
	</div>

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
      <h3>ASC - Le choix de plus de <b>250 millions</b> d'utilisateurs dans le monde</h3>
    </div>
    <div class="map">
      <span class="recover recover01 big"></span>
      <span class="recover recover02 middle"></span>
      <span class="recover recover03 smail"></span>
      <span class="recover recover04 big"></span>
      <span class="recover recover05 middle"></span>
      <span class="recover recover06 smail"></span>
      <span class="recover recover07 big"></span>
      <span class="recover recover08 middle"></span>
      <span class="recover recover09 smail"></span>
      <span class="recover recover10 smail"></span>
      <span class="recover recover11 smail"></span>
      <span class="recover recover12 smail"></span>
      <span class="recover recover13 middle"></span>
      <span class="recover recover14 middle"></span>
      <span class="recover recover15 smail"></span>
      <span class="recover recover16 smail"></span>
      <span class="recover recover17 big"></span>
      <span class="recover recover18 smail"></span>
      <span class="recover recover19 smail"></span>
      <span class="recover recover20 big"></span>
      <span class="recover recover21 middle"></span>
      <span class="recover recover22 smail"></span>
      <dl class="chip">
        <dt><img src="<?php echo getStaticUrl('images/markus-thomas-geldermann.png')?>"></dt>
        <dd>
          C'est le meilleur programme qui nettoie et accélère mon PC <span>correctement et en toute sécurité.</span>
        </dd>
      </dl>
      <dl class="html-it">
        <dt><img src="<?php echo getStaticUrl('images/01net.png')?>"></dt>
        <dd>
          Advanced SystemCare Pro intègre des outils indispensables pour surveiller la santé <span>de votre système en vérifiant l'état des disques durs, en bouchant les failles de</span> sécurité et pour protéger votre vie privée en effaçant les fichiers sensibles ainsi <span>qu'une fonction Turbo Boost pour nettoyer votre PC en profondeur.</span>
        </dd>
      </dl>
      <dl class="br">
        <dt><img src="<?php echo getStaticUrl('images/baixaki.png')?>"></dt>
        <dd>
          Advanced SystemCare a une efficacité exceptionnelle. Il est capable de détecter et de résoudre des <span>problèmes qui sont vraiment complexes, difficiles à imaginer.</span>
        </dd>
      </dl>
      <dl class="bob-bassett">
        <dd>
          Mon choix est sans aucun doute <span>Advanced SystemCare Pro.</span></span>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>"></dt>
      </dl>
      <dl class="peter-stoffers">
        <dd>
          Advanced SystemCare vise à remédier à tout <span>problème affectant votre ordinateur!</span>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>"></dt>
      </dl>
    </div>
  </div>
  <!-- review end -->

  <!-- comparsion start -->
  <div class="comparsion wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th colspan="2" class="text">La comparaison des produits:</th>
        <th class="space"></th>
        <th class="itemb">
          Advanced SystemCare <strong>Free</strong>
        </th>
        <th class="space"></th>
        <th class="itema">
          Advanced SystemCare <strong>PRO</strong>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_01.png')?>" alt=""/></td>
        <td class="virtue">Nettoyage, réparation et optimisation du système de base </td>
        <td class="space"></td>
        <td class="itemb gray"><i class="all-icons">☆</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_02.png')?>" alt=""/></td>
        <td class="virtue"><span>Réparer les failles de sécurité pour empêcher le piratage en un clic</span> <sup class="nou">nouveau </sup></td>
        <td class="space"></td>
        <td class="itemb gray"><i class="all-icons">☆</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_03.png')?>" alt=""/></td>
        <td class="virtue"><span>Le moniteur de performance redessiné pour surveiller et accélérer votre PC </span> <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itemb gray"><i class="all-icons">☆</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_04.png')?>" alt=""/></td>
        <td class="virtue"><span>Capturer automatiquement les intrus avec FaceID</span></td>
        <td class="space"></td>
        <td class="itemb gray"><i class="all-icons">☆</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_05.png')?>" alt=""/></td>
        <td class="virtue"><span>Optimisation de la vitesse Internet jusqu'à 300% avec Internet Booster </span> <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_06.png')?>" alt=""/></td>
        <td class="virtue"><span>Le démarrage jusqu'à 200% plus rapide de votre PC </span> <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_07.png')?>" alt=""/></td>
        <td class="virtue"><span>Nettoyage des registres empilés pour un système stable </span> <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_08.png')?>" alt=""/></td>
        <td class="virtue midvirtue">Nouveau moteur d'optimisation du disque pour maximiser les performances PC <sup class="nou">nouveau </sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_09.png')?>" alt=""/></td>
        <td class="virtue">Protection en temps réel contre les menaces de sécurité</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_10.png')?>" alt=""/></td>
        <td class="virtue">Déctection complète contre les infections les plus approfondies</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_11.png')?>" alt=""/></td>
        <td class="virtue">Supprimer Auto les publicités &amp; la vie privée en ligne pour une navigation plus sûre</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_12.png')?>" alt=""/></td>
        <td class="virtue"><span>Nettoyage Auto de la RAM pour un système plus fluide</span</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_13.png')?>" alt=""/></td>
        <td class="virtue">Mise à jour automatique vers la dernière version</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_14.png')?>" alt=""/></td>
        <td class="virtue">Soutien technique gratuit de 24/7 à la demande</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      </tbody>
    </table>
  </div>
  <!-- comparsion end -->

		<div class="bottomcart">
		<div class="wrapper">
			<h2>Premier arrivé, premier servi !</h2>
			<div class="showcase">
				<span class="img three-box"></span>
			</div>
			<ul>
				<li class="active" data-url="https://www.iobit.com/buy.php?product=fr-asc11pfsd1799&ref=fr_asc113pcpfsdpurchase1806<?php echo $refstr;?>&aff=&refs=fr_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1806-fr')" data-price="17" data-original="119,97€"><span>1 An / 3 PC+Paquet Cadeau</span> <strong>-85%</strong></li>
				<li class="three-pc" data-url="https://www.iobit.com/buy.php?product=fr-asc113pc1799&ref=fr_asc113pcpurchase1806<?php echo $refstr;?>&aff=&refs=fr_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1806a-fr')" data-price="17" data-original="29,99€"><i></i> <span> 1 An / 3 PC </span> <strong>-60%</strong></li>
				<li class="one-pc" data-url="https://www.iobit.com/buy.php?product=fr-asc111pc1699&ref=fr_asc111pcpurchase1806<?php echo $refstr;?>&aff=&refs=fr_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1806b-fr')" data-price="16" data-original="49,99€"><i></i> <span>1 An / 1 PC  </span> <strong>-40%</strong></li>
			</ul>
			<dl class="price-content">
				<dt>
					<strong class="price">17</strong>
					<span>€99 <del class="original">119,97€</del></span>
				</dt>
				<dd>
					<a href="https://www.iobit.com/buy.php?product=fr-asc11pfsd1799&ref=fr_asc113pcpfsdpurchase1806<?php echo $refstr;?>&aff=&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1806-fr')" class="buybtn"><i></i> VITE, J’EN PROFITE</a>
				</dd>
			</dl>
		</div>
	</div>
	<div class="footer">
    <div class="service wrapper clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
        <dd><h3>Satisfait ou Remboursé</h3></dd>
        <dd>Garantie satisfait ou remboursé <br>pendant 60 jours après la <br>date d’achat.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
        <dd><h3>Paiement 100% Sécurisé</h3></dd>
        <dd>IObit vous propose huit modes de <br>paiement sécurisés pour <br>régler vos achats.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""/></dt>
        <dd><h3>Obtenir la licence</h3></dd>
        <dd>Vous recevrez le code de licence <br>dans les minutes après l’achat.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dt>
        <dd><h3>Service Client à votre écoute</h3></dd>
        <dd>Notre Support Technique gratuit est à <br>votre disposition 24 heures sur 24, 7 <br>jours sur 7.</dd>
      </dl>
    </div>
    <!-- annotation start -->
    <dl class="annotation wrapper">
      <dt>Note:</dt>
      <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
      <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
    </dl>
    <!-- annotation end -->
    <!-- footer start -->
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    <!-- footer end -->
  </div>
		<script src="<?php echo getStaticUrl('js/script.js')?>"></script>
	</body>
</html>