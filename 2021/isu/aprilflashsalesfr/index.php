<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=310931325;
$buyNum = number_format(ceil(microtime_float()*1000/5000) - $reduceNum);

if($_GET['action']=='getSales'){
  echo json_encode(array('buyNum'=>$buyNum));
  exit();
}

if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
    'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
    'sdfeatures_noaction','sdddact_noaction','actreport'))){
  $refStr='-'.$_GET['ref'];
}else{
  $refStr='';
}
$refStr .= empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>85% d'économie sur IObit Software Updater PRO - Vente flash IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Vente Flash du Jour</h1>
    <!-- content -->
    <div class="content clearfix">

      <!-- 3pc -->
      <dl class="fl">
        <dt>
          <img src="<?php echo $pResUrl;?>images/db-3pc.png" alt="Driver Booster PRO 6">
          <p>1 an, 3 PC</p>
        </dt>
        <dd>
          <p class="price"><strong><big>14</big>,99€</strong> <del>29,99€</del></p>
          <!-- 3pc buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=fr-isu41y3pc1499&ref=fr_isu43pc1499puchase2104<?php echo $refStr;?>&refs=fr_purchase_isu"
             onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3pcpurchase2104-fr');">
            <i class="all-icons"></i>
            <span>J’EN PROFITE VITE</span>
          </a>
        </dd>
        <!-- <div class="mask"><span>TERMINÉ!</span></div> -->
      </dl>

      <!-- 3pc bundle -->
      <dl class="fl large">
        <dt>
          <!-- countdown -->
          <p class="countdown" id="countdown">
            <i class="all-icons"></i>
            Plus que 
            <strong>00</strong>H :
            <strong>00</strong>m :
            <strong>00</strong>s :
            <strong class="last">000</strong>ms
          </p>
          <img src="<?php echo $pResUrl;?>images/db-3pcbundle.png" alt="Driver Booster PRO 6 + IObit Software Updater PRO 6">
          <p>1 an, 3 PC</p>
        </dt>
        <dd>
          <p class="price"><strong><big>14</big>,99€</strong> <del>99,97€</del></p>
          <!-- 3pc bundle buybtn -->
          <a class="buybtn black"
             href="https://www.iobit.com/buy.php?product=fr-isu43pcpfsd1499&ref=fr_isu43pcpfsd1499puchase2104<?php echo $refStr;?>&refs=fr_purchase_isu"
             onclick="ga('send', 'event', 'isubuy', 'buy', 'isubundlepurchase2104-fr');">
            <i class="all-icons"></i>
            <span>J’EN PROFITE VITE</span>
          </a>
          <!-- person -->
          <p class="person"><i class="all-icons"></i>&nbsp;&nbsp;&nbsp;<strong class="buyNum"><?php echo $buyNum;?></strong> personnes l’ont déjà acheté</p>
        </dd>
      </dl>

      <!-- 1pc -->
      <dl class="fr">
        <dt>
          <img src="<?php echo $pResUrl;?>images/db-1pc.png" alt="Driver Booster PRO 6">
          <p>1 an, 1 PC</p>
        </dt>
        <dd>
          <p class="price"><strong><big>12</big>,99€</strong> <del>19,99€</del></p>
          <!-- 1pc buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=fr-isu41y1pc1299&ref=fr_isu41pc1299puchase2104<?php echo $refStr;?>&refs=fr_purchase_isu"
             onclick="ga('send', 'event', 'isubuy', 'buy', 'isu1pcpurchase2104-fr');">
            <i class="all-icons"></i>
            <span>J’EN PROFITE VITE</span>
          </a>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->
<div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>

<!-- intro start -->
	<div class="intro">
		<h2>C’est le gestionnaire de mise à jour de logiciels que vous cherchiez !</h2>
		<div class="wrapper clearfix">
			
			<img src="<?php echo getStaticUrl('images/intro-box.jpg')?>" class="img-box" alt="IObit Software Update PRO"/>
			<div class="left-message">
				<h3><i></i> Mise à jour immédiate  </h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
					<dd><strong>Restez Protégé </strong></dd>
          <dd>Gardez vos logiciels à jour et réparez <br> toutes les failles exploitables <br> par les hackers.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
					<dd><strong>Performances Maximales </strong></dd>
          <dd>La mise à jour de logiciels obsolètes vous <br> permettant de profiter de ses nouvelles <br> fonctions et d’améliorer la performance ainsi que la stabilité de votre PC.</dd>
				</dl>
			</div>
			<div class="right-message">
				<h3><i></i> Mise à jour facile et sécurisée  </h3>
				<dl class="list01">
					<dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
					<dd><strong>Mises à jour illimités</strong> Mettez à jour tous les logiciels obsolètes sur votre ordinateur par lot. <span>(La version gratuite : 2 par jour)</span> </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
					<dd><strong>Mises à jour automatiques </strong> Téléchargez et installez automatiquement les mises à jour de vos logiciels selon vos heures programmées.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt=""></dt>
					<dd><strong>Mise à jour et rien d’autre </strong> Pas de publicités, de barres d’outils ou de logiciels s’installant en supplément.</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- intro end -->
<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2 style="width: 1200px; margin-left: -50px;">Plus d’avantages vous obtenez d’IObit Software Updater PRO</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
					<span class="suspend01"></span>
					<span class="suspend02"></span>
					<span class="suspend03"></span>

				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li>Téléchargez et installez les programmes depuis l’interface du programme</li>
						<li>Téléchargez et installez les mises à jour en mode silencieux</li>
						<li>Configurez des analyses et des mises à jour automatiques selon votre préférence</li>
						<li>Ignorez des programmes que vous ne souhaitez pas mettre à jour</li>
						<li>Téléchargez directement les outils de télétravail populaires</li>
						<li>Créez automatiquement un point de restauration avant l’installation</li>
						<li>Supprimez automatiquement les fichiers d’installation après l’installation</li>
						<li>Pas de publicités, ni de sponsors</li>
					</ul>
					 <!-- <p class="price soldout">
            <span><strong><b>12</b> <span>€<b>99</b></span></strong> <span>Il ne reste plus que <b class="buyNum">50</b> places!</span></span>
            <a href="https://www.iobit.com/buy.php?product=fr-isu33pcpfsd1299&ref=fr_isu33pcsdpfindexpuchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2012-fr');" class="buybtn black">J’EN PROFITE VITE </a>
          </p> -->
					<p class="price soldout">
						<span><strong><b>14</b> <span>€<b>99</b></span></strong> </span>
						<a href="https://www.iobit.com/buy.php?product=fr-isu43pcpfsd1499&ref=fr_isu43pcpfsd1499puchase2104<?php echo $refStr;?>&aff=&refs=fr_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isubundlepurchase2104-fr');" class="buybtn black">J’EN PROFITE VITE </a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- feature end -->
<!-- gifts -->
<div class="gifts">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Notre cadeau exclusif uniquement pour vous</h2>
    <!-- message -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt=""/></dt>
      <dd>
        <p class="price"><strong>0€</strong> <del>19,99€</del></p>
        <ul>
          <li>
            La première application mobile de sécurité et d’optimisation pour vos téléphones et tablettes Android.
          </li>
        </ul>
      </dd>
    </dl>
    <dl class="pf">
      <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></dt>
      <dd>
        <p class="price"><strong>0€</strong> <del>39,99€</del></p>
        <ul>
          <li>
            Un outil de protection puissant des fichiers qui garantit la sécurité de vos dossiers et données avec un mot de passe.
          </li>
        </ul>
      </dd>
    </dl>
  </div>
</div>
<!-- end gifts -->




<!-- awards -->
<div class="awards wrapper">
  <h2>APPROUVÉ PAR LES MÉDIAS CÉLÈBRES DU MONDE</h2>
  <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
</div>
<!-- end awards -->

<!-- reviews -->
<div class="review wrapper">
  <div class="container">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="softpedia"></dt>
          <dd>
            <h2>L’avis de média</h2>
            <p>"IObit Software Updater a été conçu pour simplifier la tâche de mise à jour de tous les programmes de votre ordinateur. Il peut vérifier les nouvelles versions et les installer automatiquement, et sans intervention de l'utilisateur. En outre, il peut vous aider à télécharger et à installer des logiciels populaires à diverses fins."</p>
            <cite>softpedia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="user"></dt>
          <dd>
            <h2>Avis d’utilisateur</h2>
            <p>"J'ai installé IObit Software Update Free selon les conseils d'un ami et je suis très heureux de la rapidité et de la simplicité d’utilisation. Concernant la maintenance d’ordinateur, le logiciel répond aux besoins du débutant. Merci pour ça! Je vais acheter une licence IObit, afin de soutenir votre travail. Merci! "</p>
            <cite>Nicolae Mocioc</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="user"></dt>
          <dd>
            <h2>Avis d’utilisateur</h2>
            <p>"J'adore l'aspect automatique des mises à jour. C'est rapide et efficace, et cela crée également un point de restauration avant l'installation, au cas où quelque chose se passe mal. J'aime aussi que le programme télécharge les mises à jour directement depuis les sites appropriés plutôt que de devoir aller sur chaque site pour télécharger une mise à jour. Je pense que c'est l'une de vos meilleures idées pour le moment! "</p>
            <cite>Joshua Irving</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="user"></dt>
          <dd>
            <h2>Avis d’utilisateur</h2>
            <p>"C'est un excellent programme de mise à jour de logiciel. C'est très facile à utiliser et très simple. Ce programme est très clair, fonctionne très bien et est très rapide. De plus, le design est agréable et moderne et je suis satisfait de la nouvelle version du programme. Il est également agréable que ce programme vous montre de nouveaux conseils."</p>
            <cite>Nico Bremmer</cite>
          </dd>
        </dl>
        
      </div>
    </div>
  </div>
</div>
<!-- end reviews -->

<!-- cutbuy -->
<div id="footbuy" class="cutbuy footbuy">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>PERMIER ARRIVE, PERMIER SERVI !</h2>
    <!-- db-box -->
    <div class="box fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO 6"></div>
    <!-- selector -->
    <ul class="selector fl">

      <!-- 3pc bundle -->
      <li class="active clearfix" data-num="1">
        1 An / 3 PC + Cadeaux Exclusifs
        <strong>-85%</strong>
      </li>

      <!-- 1pc -->
      <li class="clearfix" data-num="2">
        1 An / 1 PC
        <strong>-35%</strong>
      </li>

      <!-- 3pc -->
      <li class="clearfix" data-num="0">
         1 An / 3 PC
        <strong>-50%</strong>
        <!-- <div class="mask"><span>TERMINÉ!</span></div> -->
      </li>

    </ul>
    <!-- message -->
    <dl class="fr">
      <dt>
        <p class="price"><strong><big>14</big>,99€</strong> <del>109,97€</del></p>
      </dt>
      <dd>
        <!-- 3pc bundle buybtn -->
        <a class="buybtn black"
           href="https://www.iobit.com/buy.php?product=fr-isu43pcpfsd1499&ref=fr_isu43pcpfsd1499puchase2104<?php echo $refStr;?>&refs=fr_purchase_isu"
           onclick="ga('send', 'event', 'isubuy', 'buy', 'isubundlepurchase2104-fr');">
          <i class="all-icons"></i>
          <span>J’EN PROFITE VITE</span>
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end cutbuy -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
    <dd>
      <h3>Satisfait ou Remboursé</h3>
      <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
    <dd>
      <h3>Paiement 100% Sécurisé</h3>
      <p>IObit vous propose huit modes de paiement sécurisés pour régler vos achats.</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/buycut.png" alt=""></dt>
    <dd>
      <h3>Obtenir la licence</h3>
      <p>Vous recevrez le code de licence dans les minutes après l’achat.</p>
    </dd>
  </dl>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer wrapper">
  <dl>
    <dt>Note:</dt>
    <dd>
      *.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion
    </dd>
    <dd>*.Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
    <dd>*.Licence gratuite d'AMC Security PRO, la version complète comprend des annonces intégrées.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
</div>
<!-- end footer -->
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>