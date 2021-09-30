<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './'; 
  $pRootUrl = '../../../'; 
}
include $pRootUrl.'include/common.inc.php';

  $refStr = 'fr_sd-ac-register';
if($_GET['to']=='db_ac_sd'){
    $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acsd','ascu_acsd'))){
    $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Ultimate Performance for Your Hard Drive!"/>
<title>85% de rabais sur Smart Defrag PRO</title>
<link type="text/css" rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>" />
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="head">
	<div class="wrapper">
    	<a href="https://www.iobit.com/fr/index.php" class="homelink">Iobit</a>
      <span>
        <img src="<?php echo $pResUrl; ?>images/star.png" alt="">
        <img src="<?php echo $pResUrl; ?>images/cnet_logo.png" alt="">
      </span>
    </div>
</div>
<div id="main">
	<div class="wrapper">
    	<div class="shadow"></div>
        <div class="intro">
        	<h1>Smart Defrag 6 PRO</h1>
            <h2>—— Ultimate Performance pour Votre Disque Dur!</h2>
            <div class="boxshot"></div>
            <div class="discount">
            	<h3><span>Offre Exclusive</span><br />pour Nos Utilisateurs Importants SEULEMENT!</h3>
                <div class="disprice">85%<span>OFF</span></div>
                <div class="wprice">SEULEMENT <em>3,99€</em> <del>29,99€</del><span>1 an d'abonnement / 1 PC</span></div>
                <div class="btnarea">
                    <a href="https://www.iobit.com/buy.php?product=fr-sd61pc399-ac&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_ac_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdac-fr');" class="checkbtn">Achetez Maintenant >></a>
                    <span>100% GARANTIE DE REMBOURSEMENT</span>
                </div>
            </div>
        </div>
        <div class="promise">
        	
            <div class="leftbox">
              <h2><span>Les principales fonctionnalités</span></h2> 
              <ul>
                  <li class="icon01">Nouveau moteur de défragmentation de disque pour la défragmentation de disque sécurisée</li>
                  <li class="icon02">Prend en charge totalement la défragmentation des applications Metro sur Windows 10/8/8.1</li>
                  <li class="icon03">Maximise la performance de disque dur et la vitesse d’accès aux fichiers la plus rapide</li>
                  <li class="icon04">Assure la securité de données et la stabilité de disque</li>
              </ul>
             </div>
            <div class="review"><span></span>One of the simplest ways to make sure your PC runs as efficiently as possible is to defragment your hard disk. <br />With several level of defragmentation, simple-to-use scheduler and extra offers, Smart Defrag is a great way to do it."<br /><div class="awpic"><img src="<?php echo $pResUrl; ?>images/pcworld_logo.jpg" alt=""/><br />
- PCWORLD.com</div></div>            
        </div>
        <div class="clear"></div>
        <div class="checkout">
        	<div class="moneyback">
            	Vous êtes complètement protégé par notre 100% garantie de remboursement et vous VERREZ une amélioration significative de la performance de votre PC Dans les 60 JOURS, ou nous vous enverrons un remboursement complet. Sans aucun souci. <a href="https://www.iobit.com/buy.php?product=fr-sd61pc399-ac&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_ac_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdac-fr');">Achetez maintenant </a>
            </div>
            <div class="btn">
            	<a href="https://www.iobit.com/buy.php?product=fr-sd61pc399-ac&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_ac_sd" title="CHECKOUT" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdac-fr');" class="checkbtn">Achetez Maintenant >></a>
                <span>100% Garantie de remboursement</span>
            </div>
        </div>
        <div class="clear"></div>
        <div class="awards"></div>
    </div>
</div>
<div class="footer">© 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
</body>
</html>
