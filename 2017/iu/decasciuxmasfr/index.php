<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
$refStr='';
if(in_array($_GET['pop'],array('x_iuasc','xr_iuasc'))){
  $refStr='-'.$_GET['pop'];
}
include $pRootUrl . 'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>75% de réduction sur ASC PRO et IU PRO, profitez d'un PC plus propre, plus rapide et plus stable</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">iobit</a>
    <h1>IObit Uninstaller PRO Vente Flash</h1>
    <h2> <span></span> <strong>Dépêchez-vous, le temps presse! </strong> <strong>15</strong>H : <strong>15</strong>Min : <strong>15</strong>Sec : <strong class="last">15</strong>Ms <sup>*</sup> <span></span></h2>
    <div class="container clearfix">
      <dl class="left">
        <dt>IObit Uninstaller PRO</dt>
        <dd><img class="box" src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt="" /></dd>
        <dd><strong>15,99€ </strong><del>29,99€</del></dd> 
        <dd><a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-iu101y3pc1599&ref=fr_iu10singleiuascpurchase<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-asc201712-fr');">J’EN PROFITE VITE</a></dd>
        <dd class="last">
          <p class="no">Internet jusqu’à 300% plus rapide</p>
          <p class="no">PC jusqu’à 200% plus rapide</p>
          <p class="no">Meilleure protection de confidentialité</p>
          <p class="no">Nettoyage &amp; réparation de PC plus profonds</p>
          <p><del>29,99€</del> 14,00€ d’économie</p>
        </dd>
      </dl>
      <dl class="right">
        <dt>Advanced SystemCare PRO<span> IObit Uninstaller PRO</span></dt>
        <dd><img class="box" src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt="" /></dd>
        <dd><strong>19,99€ </strong> <del>79,98€</del></dd>
        <dd><a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-asc143pciu3pc1999&ref=fr_iu10bundleiuascpurchase<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu" onclick="ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201712-fr');">J’EN PROFITE VITE</a></dd>
        <dd class="last">
          <p>Internet jusqu’à 300% plus rapide</p>
          <p>PC jusqu’à 200% plus rapide</p>
          <p>Meilleure protection de confidentialité</p>
          <p>Nettoyage &amp; réparation de PC plus profonds</p>
          <p><del>79,98€</del> <strong>59,99€</strong> d’économie</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
<div class="product">
  <h2>Profitez des performances au top sur votre PC &amp; d’un navigateur plus propre et plus rapide</h2>
  <div class="wrapper">
    <dl class="left">
      <dt><img src="<?php echo getStaticUrl('images/product-sale.png')?>" alt="" /><strong> Ce que ASC PRO vous propose</strong></dt>
      <dd>Accélérer l’Internet jusqu’à 300% plus rapide</dd>
      <dd>Doubler la vitesse de votre PC lent*</dd>
      <dd class="three">Protéger les données personnelles contre la violation & bloquer les infections malveillantes en temps réel</dd>
      <dd>Corriger tous les types de problèmes de PC en un clic</dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/product-free.png')?>" alt="" /><strong>IObit Uninstaller PRO</strong></dt>
      <dd>Détecter et désinstaller plus de bundlewares et plug-ins groupés</dd>
      <dd><span>Supprimer les barres d'outils malveillantes pour une navigation plus rapide et sûre</span></dd>
      <dd><span>Nettoyer automatiquement les résidus de programmes déjà désinstallés</span></dd>
      <dd>Mettre à jour les logiciels importants sur votre PC en un clic</dd>
    </dl>
  </div>
</div>
<dl class="awards wrapper">
  <dt>Approuvé par ces médias célèbres du monde</dt>
  <dd><img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" /></dd>
</dl>
<p class="wrapper windows"><img src="<?php echo getStaticUrl('images/windows.png')?>" alt="" />Compatible avec Windows 10, 8, 7, Vista, xp sp3</p>
<div class="foot-banner">
  <div class="wrapper">
    <h2><strong>75% de rabais immédiate</strong> sur ASC PRO &amp; IObit Uninstaller PRO</h2>
    <img class="smail-gift" src="<?php echo getStaticUrl('images/bottom-asc.png')?>" alt="" />
    <dl>
      <dt>SEULEMENT <strong>19,99€</strong> <del>79,98€</del></dt>
      <dd><a href="https://www.iobit.com/buy.php?product=fr-asc143pciu3pc1999&ref=fr_iu10bundleiuascpurchase<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu" onclick="ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201712-fr');" class="buybtn">J’EN PROFITE VITE</a></dd>
      <dd><img src="<?php echo $pResUrl; ?>images/safe.png" alt="">100% GARANTIE DE REMBOURSEMENT DE 60 JOURS</dd>
    </dl>
  </div>
</div>
<dl class="wrapper annotation">
  <dt>Note:</dt>
  <dd>*. Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
  <dd>*. Les données peuvent varier en fonction de différents systèmes ou ordinateurs.</dd>
</dl>
<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
<script type="text/javascript">
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $('.banner h2 strong').eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
    setTimeout('cycleCountdown()', 1);
  }
  cycleCountdown();
</script>
</body>
</html>

