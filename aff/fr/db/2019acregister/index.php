<?php
  error_reporting(0);
  define('IObit', 'IObit');
  if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
  }
  include $pRootUrl . 'include/common.inc.php';
  if (empty($_GET['ref'])) $_GET['ref'] = 'fraff_db6_2019acregister'; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Update Outdated Drivers Safely and Rapidly!"/>
<title>85% de rabais sur Driver Booster PRO</title>
<link type="text/css" rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
	<div class="wrapper">
    	<a href="https://www.iobit.com/fr/index.php" class="homelink" target="_blank">Iobit</a>
    	<dl>
        	<dt></dt>
            <dd>Driver Booster, from IObit, promises an easier solution to download and update driver with its most advanced technology. <br />-- MakeUseOf</dd>
        </dl>
    </div>
</div>
<div id="main">
	<div class="wrapper">
    	<div class="shadow"></div>
        <div class="intro">
        	<h1>Driver Booster 6 PRO </h1>
            <h2>—— Mise à Jour du Pilote Rapide et en Toute Sécurité</h2>
            <div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" /></div>
            <div class="discount">
            	<h3><span>Offre Exclusive</span><br />pour Notre Utilisateurs Importants SEULEMENT!</h3>
                <div class="disprice">85%<span>OFF</span></div>
                <div class="wprice">SEULEMENT <em>13,49€</em> <del>89,93€</del><span>1 an d'abonnement / 1 PC</span></div>
                <div class="btnarea">
                    <a href="https://www.iobit.com/buy.php?product=fraff-db61pc1349&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET["aff"];?>"
                       onclick="ga('send', 'event', 'dbbuy', 'buy', 'fraffdb62019acregister');"  class="checkbtn">
                        Achetez Maintenant >>
                      </a>
                    <span>100% GARANTIE DE REMBOURSEMENT</span>
                </div>
            </div>
        </div>
        <div class="promise">
        	
            <div class="leftbox">
              <h2><span>Les Caractéristiques Principales</span></h2> 
              <ul>
                  <li class="icon01">Mettez à jour plus de 3 000 000 pilotes en 1 clic afin d’améliorer la stabilité et les performances de l’ordinateur.</li>
                  <li class="icon02">Augmentez les performances de jeu avec les derniers pilotes Game Ready et améliorez l’expérience de jeu avec les composants mis à jour et appropriés.</li>
                  <li class="icon03">Téléchargez et installez automatiquement les pilotes pendant le temps d’inactivité.</li>
                  <li class="icon04">Sauvegardez automatiquement les pilotes précédents avant la mise à jour.</li>
              </ul>
             </div>
            <div class="review"><span></span>Driver Booster, from IObit, promises an easier solution to download and update driver with its most advanced technology by acting as an all-in-one command center. All of your drivers are listed in the app’s interface, making it a super easy process to download and update drivers. Downloading and installing drivers with this software is a cinch and often takes just minutes (or less)."<br /><div class="awpic"><img src="<?php echo getStaticUrl('images/makeuseof_icon.jpg')?>" alt=""/></div></div>          
        </div>
        <div class="clear"></div>
        <div class="checkout">
        	<div class="moneyback">
            	Vous êtes complètement protégé par notre 100% garantie de remboursement et vous VERREZ une amélioration significative de la performance de votre PC Dans les 60 JOURS, ou nous vous enverrons un remboursement complet. Sans aucun souci.<a 
              href="https://www.iobit.com/buy.php?product=fraff-db61pc1349&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET["aff"];?>"
                       onclick="ga('send', 'event', 'dbbuy', 'buy', 'fraffdb62019acregister');">Achetez maintenant</a>
            </div>
            <div class="btn">
            	<a href="https://www.iobit.com/buy.php?product=fraff-db61pc1349&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET["aff"];?>"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'fraffdb62019acregister');" 
                title="CHECKOUT" 
                class="checkbtn">
                  Achetez maintenant >>
                </a>
                <span>100% Garantie de remboursement</span>
            </div>
        </div>
        <div class="clear"></div>
        <div class="awards"></div>
    </div>
</div>
<div id="footer">
	<div class="wrapper">
© 2005 - <?php echo date('Y')?> IObit. Tous droits réservés
    </div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
