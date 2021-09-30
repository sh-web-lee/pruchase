<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
        'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
        'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
        'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
        'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','ascofficialfree','ascofficialpro',
        'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
        'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','asc_wr','crcur',
        'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
        'asc_promote9','asc_promote10','asc_promote11','asc_promote12')
)){
  $refstr='-'.$_GET['st'];
}else{
  $refstr='';
}

if(in_array($_GET['ref'],array('nc_fr'))){
  $refstr.='-'.$_GET['ref'];
}

if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refstr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'à -85% sur Advanced SystemCare PRO - Vente Flash - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>VENTE FLASH DU JOUR</h1>
      <h3>Offre limitée, n’attendez pas la dernière minute</h3>
      <div class="clearfix">
        <div class="offer left">
          <img class="imgbox" src="<?php echo getStaticUrl('images/asc-one-box.png')?>" alt=""/>
          <div class="price">
            <p><strong><big>21</big>,99€</strong> <del>29,99€</del></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-asc121pc2199&ref=fr_asc121pc2199purchase1905<?php echo $refstr;?>&aff=&refs=fr_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905c-fr')">
              VITE, J'EN PROFITE 
            </a>
          </div>
        </div>
        <div class="offer center">
          <div id="bantime" class="countdown">
            <i class="all-icons"></i> <b>59</b> M : <b>46</b> S  : <b class="last">000</b>Ms*
          </div>
          <img class="imgbox" src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
          <div class="price">
            <p><strong><big>19</big>,99€</strong> <del>119,97€</del></p>
            <a class="buybtn orange"
               href="https://www.iobit.com/buy.php?product=fr-asc123pciupf1999&ref=fr_asc123pciupf1999purchase1905<?php echo $refstr;?>&aff=&refs=fr_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905a-fr')">
               <i class="all-icons"></i> VITE, J'EN PROFITE 
            </a>
          </div>
        </div>
        <div class="offer right">
          <img class="imgbox" src="<?php echo getStaticUrl('images/asc-three-box.png')?>" alt=""/>
          <div class="price">
            <p><strong><big>19</big>,99€</strong> <del>49,99€</del></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-asc123pc1999&ref=fr_asc123pc1999purchase1905<?php echo $refstr;?>&aff=&refs=fr_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905b-fr')">
              VITE, J'EN PROFITE 
            </a>
          </div>
        </div>
      </div>
    </div>
	</div>
	<!-- banner end -->

  <?php if($_GET['st']!='asc_wr'):?>
  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h3 class="title">Pourquoi choisir Advanced SystemCare 12 PRO</h3>
      <p class="subtitle">Des fonctions plus poussées que la version gratuite</p>
      <div class="showcase">
        <div class="imglist">
          <ul>
            <li class="shot3"><img src="<?php echo getStaticUrl('images/screenshot01.png')?>" alt=""/></li>
            <li class="shot2"><img src="<?php echo getStaticUrl('images/screenshot02.png')?>" alt=""/></li>
            <li class="shot1"><img src="<?php echo getStaticUrl('images/screenshot03.png')?>" alt=""/></li>
          </ul>
        </div>
        <a href="javascript: prevFun();" class="prev control">&lt;</a>
        <a href="javascript: nextFun();" class="next control">&gt;</a>
      </div>
      <div class="clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
          <dd>
            <h3>Registre plus propre</h3>
            <p>
              Nettoyez en profondeur les registres inutiles<br>
              ou invalides pour libérer de l'espace disque<br>
              et améliorer les performances du PC.
            </p>
          </dd>
        </dl>
        <dl class="fl middle">
          <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
          <dd>
            <h3>
              Une navigation sur Internet<br>
              jusqu'à 300% plus rapide
            </h3>
            <p>
              Optimiser les paramètres du navigateur pour<br>
              accélérer la connexion Internet.
            </p>
          </dd>
        </dl>
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
          <dd>
            <h3>Navigation en ligne plus sûre</h3>
            <p>
              Efface automatiquement les traces privées<br>
              lorsque vous quittez le navigateur pour<br>
              évitertout suivi malveillant.
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- feature end -->
  <?php else:?>

  <!-- feature start -->
  <div class="feature upd">
    <div class="wrapper">
      <h3 class="title">Pourquoi choisir Advanced SystemCare 12 PRO</h3>
      <p class="subtitle">Des fonctions plus poussées que la version gratuite</p>
      <div class="showcase">
        <div class="imglist">
          <ul>
            <li class="shot3"><img src="<?php echo getStaticUrl('images/screenshot01.png')?>" alt=""/></li>
            <li class="shot2"><img src="<?php echo getStaticUrl('images/screenshot02.png')?>" alt=""/></li>
            <li class="shot1"><img src="<?php echo getStaticUrl('images/screenshot03.png')?>" alt=""/></li>
          </ul>
        </div>
        <a href="javascript: prevFun();" class="prev control">&lt;</a>
        <a href="javascript: nextFun();" class="next control">&gt;</a>
      </div>
      <div class="clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
          <dd>
            <h3>Registre plus propre</h3>
            <p>
              Nettoyez en profondeur les registres inutiles<br>
              ou invalides pour libérer de l'espace disque<br>
              et améliorer les performances du PC.
            </p>
          </dd>
        </dl>
        <dl class="fl middle">
          <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
          <dd>
            <h3>
              Mise à jour de logiciel sécurisée <img src="<?php echo $pResUrl;?>images/attention.png" alt="ATTENTION">
            </h3>
            <p>
              Mis à jour automatique sans intervention de l'utilisateur, y compris <b>WinRAR *, dont la faille de sécurité existante mettant votre <br>
                ordinateur en péril depuis des années. </b><br>
              <em>* Mise à jour immédiate, une fois que la nouvelle version <br> officielle est disponible. </em>
            </p>
          </dd>
        </dl>
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
          <dd>
            <h3>Navigation en ligne plus sûre <br> et 300%* plus rapide</h3>
            <p>
              Optimise les paramètres du navigateur pour accélérer la connexion Internet et efface automatiquement les traces privées.
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- feature end -->
  <?php endif;?>

  <!-- gifubox start -->
  <div class="giftbox">
    <div class="wrapper">
      <h2>Profitez des cadeaux exclusives à durée limitée</h2>
      <div class="clearfix">
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
          <dd class="fl">
            <h3>Protected Folder</h3>
            <del>39,99€</del>
            <p>Protégez vos fichiers et vos données <br> importants contre le vol, la perte et les fuites.</p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/></dt>
          <dd class="fl">
            <h3>IObit Uninstaller PRO </h3>
            <del>29,99€</del>
            <p>Désinstallez les bundlewares, <br> programmes indésirables et les plug-ins en un clic.</p>
          </dd>
        </dl>
      </div>
      <div class="price">
        <h3> Vite, les cadeaux exclusifs sont disponibles à durée limitée !</h3>
        <p id="giftime" class="countdown"><b>00</b>M :<b>00</b>s :<b class="last">000</b>Ms*</p>
        <a class="buybtn orange yellow"
           href="https://www.iobit.com/buy.php?product=fr-asc123pciupf1999&ref=fr_asc123pciupf1999purchase1905<?php echo $refstr;?>&aff=&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905a-fr')">
          VITE, J'EN PROFITE 
        </a>
      </div>
    </div>
  </div>
  <!-- gifubox end -->

	<!-- review start -->
	<div class="reviews wrapper">
		<h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
		<p>ASC - Le choix de plus de <span>250 millions</span> d'utilisateurs dans le monde</p>
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
			<dl class="tradotto-da-tedesco">
				<dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
				<dd>C'est le meilleur programme qui nettoie et accélère mon PC<br> correctement et en toute sécurité.</dd>
			</dl>
			<dl class="html-it">
				<dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
				<dd>
          Advanced SystemCare Pro intègre des outils indispensables pour surveiller la santé <br>
          de votre système en vérifiant l'état des disques durs, en bouchant les failles de<br>
          sécurité et pour protéger votre vie privée en effaçant les fichiers sensibles ainsi<br>
          qu'une fonction Turbo Boost pour nettoyer votre PC en profondeur.
        </dd>
			</dl>
			<dl class="baixaki">
				<dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
				<dd>Advanced SystemCare a une efficacité exceptionnelle. Il est capable de détecter et de résoudre des<br> problèmes qui sont vraiment complexes, difficiles à imaginer.</dd>
			</dl>
			<dl class="charles-r-widick">
				<dd>Mon choix est sans aucun doute<br> Advanced SystemCare Pro.</dd>
				<dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
			</dl>
			<dl class="cnet">
				<dd>Advanced SystemCare vise à remédier à tout<br> problème affectant votre ordinateur!</dd>
				<dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
			</dl>
		</div>
	</div>
	<!-- review end -->

  <!-- compare start -->
  <div class="compare wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">La comparaison des produits:</th>
          <th class="spac"></th>
          <th class="itemb">
            <div class="box">
              Advanced SystemCare  <br> <strong>Free</strong>
            </div>
          </th>
          <th class="spac"></th>
          <th class="itema">
            <div class="box">
              Advanced SystemCare  <br> <strong>PRO</strong>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
          <td class="virtue">
            <strong>Nettoyage, réparation</strong> et <strong>optimisation</strong> du système de base
          </td>
          <td class="spac"></td>
          <td class="itemb gray">
            <i class="star grey"></i>
          </td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
          <td class="virtue">
            <strong>Réparer</strong> les failles de sécurité pour empêcher le piratage en un clic <sup class="green">nouveau</sup>
          </td>
          <td class="spac"></td>
          <td class="itemb gray">
            <i class="star grey"></i>
          </td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
          <td class="virtue">
            Mettez vos données personnelles à l'abris des programmes frauduleux <sup class="green">nouveau</sup>
          </td>
          <td class="spac"></td>
          <td class="itemb"></td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
          <td class="virtue">
            Personne ne peut voler votre empreinte digitale numérique pour suivre vos comportements en ligne <sup class="green">nouveau</sup>
          </td>
          <td class="spac"></td>
          <td class="itemb"></td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
          <td class="virtue">
            Optimisation de <strong>la vitesse Internet jusqu'à 300%</strong> avec Internet Booster <sup class="red">amélioré</sup>
          </td>
          <td class="spac"></td>
          <td class="itemb"></td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
          <td class="virtue">
            Le démarrage jusqu'à 200% <strong>plus rapide</strong> de votre PC <sup class="red">amélioré</sup>
          </td>
          <td class="spac"></td>
          <td class="itemb"></td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
          <td class="virtue">
            <strong>Nettoyage</strong> des registres empilés pour un système stable <sup class="red">amélioré</sup>
          </td>
          <td class="spac"></td>
          <td class="itemb"></td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
          <td class="virtue">
            Nouveau moteur d'optimisation du disque pour <strong>maximiser</strong> les performances PC <sup class="green">nouveau</sup>
          </td>
          <td class="spac"></td>
          <td class="itemb"></td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
          <td class="virtue">
            <strong>Protection</strong> en temps réel contre les menaces de sécurité
          </td>
          <td class="spac"></td>
          <td class="itemb"></td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
          <td class="virtue">
            <strong>Déctection</strong> complète contre les infections les plus approfondies
          </td>
          <td class="spac"></td>
          <td class="itemb"></td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
          <td class="virtue lineheight20">
            <strong>Suppression Automatique des publicités & protège</strong> vos infos personnelles <br>une navigation plus sûre
          </td>
          <td class="spac"></td>
          <td class="itemb"></td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
          <td class="virtue">
            <strong>Nettoyage</strong> Auto de la RAM pour un système plus fluide
          </td>
          <td class="spac"></td>
          <td class="itemb"></td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
          <td class="virtue">
            <strong>Mise à jour automatique</strong> vers la dernière version
          </td>
          <td class="spac"></td>
          <td class="itemb"></td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
          <td class="virtue">
            Soutien technique <strong>gratuit de 24/7</strong> à la demande
          </td>
          <td class="spac"></td>
          <td class="itemb"></td>
          <td class="spac"></td>
          <td class="itema">
            <i class="star red"></i>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- compare end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img class="small" src="<?php echo getStaticUrl('images/asc-one-box.png')?>" alt=""/>
        <img class="on" src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
        <img class="small" src="<?php echo getStaticUrl('images/asc-three-box.png')?>" alt=""/>
      </div>
      <ul class="fl">
        <li><span>1 An / 1 PC</span> <em>-20%</em></li>
        <li class="center on"><span>1 An / 3 PC + 2 Outils PRO</span> <em>-85%</em></li>
        <li><span>1 An / 3 PC</span> <em>-60%</em></li>
      </ul>
      <div class="price fl">
        <p><strong><big>19</big>,99€</strong> <del>119,97€</del></p>
        <a class="buybtn orange yellow"
           href="https://www.iobit.com/buy.php?product=fr-asc123pciupf1999&ref=fr_asc123pciupf1999purchase1905<?php echo $refstr;?>&aff=&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905a-fr')">
           <i class="all-icons"></i> VITE, J'EN PROFITE 
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl class="astisfait fl">
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
      <dd>
        <h3>Satisfait ou Remboursé</h3>
        <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
      </dd>
    </dl>
    <dl class="paiement fl">
      <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""></dt>
      <dd>
        <h3>Paiement 100% Sécurisé</h3>
        <P>IObit vous propose sept modes de paiement sécurisé pour régler vos achats.</P>
      </dd>
    </dl>
    <dl class="modes fl">
      <dt><img src="<?php echo getStaticUrl('images/modes.png')?>" alt=""></dt>
      <dd>
        <h3>Modes de paiement acceptés</h3>
        <p>Nous vous proposons 7 modes de paiement</p>
      </dd>
    </dl>
    <dl class="service-client fr">
      <dt><img src="<?php echo getStaticUrl('images/service-client.png')?>" alt=""></dt>
      <dd>
        <h3>Service Client à votre écoute</h3>
        <p>
          Notre Support Technique gratuit est à votre disposition 24 heures sur 24, 7 jours sur 7.
        </p>
      </dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <div class="notes">
      <p>Note:</p>
      <p>*. Les données peuvent varier en fonction du système ou de l'ordinateur.</p>
      <p>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</p>
      <p>*.Licence gratuite d'AMC Security PRO, la version complète comprend annonces intégrées.</p>
    </div>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
  </div>
  <!-- footer end -->

  <div class="popbg"></div>
  <div class="popbox">
    <h2>FELICITATIONS</h2>
    <h4>Vous profiterez de <b>10%</b> de réduction supplémentaire ! </h4>
    <div class="clearfix">
      <img class="left fl" src="<?php echo getStaticUrl('images/asc-pop-box.png')?>" alt=""/>
      <div class="right fl">
        <h3>Offre expirera dans <em id="sec" class="secbox"></em>s</h3>
        <p><strong class="one">49,99€</strong> <strong class="two">19,99€</strong> <strong class="three">17,99€</strong></p>
        <a class="buybtn orange yellow"
           href="https://www.iobit.com/buy.php?product=fr-asc123pc1799&ref=fr_asc123pc1799purchasepop1905<?php echo $refstr;?>&aff=&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905pop-fr')">
           <i class="all-icons"></i> VITE, J'EN PROFITE 
        </a>
      </div>
    </div>
    <i class="all-icons close">X</i>
  </div>

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>