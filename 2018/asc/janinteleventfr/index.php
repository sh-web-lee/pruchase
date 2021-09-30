<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }

$refStr='';
if(in_array($_GET['st'],array('no_patch_asc','patch_installed_asc','no_patch_db','patch_installed_db','no_patch_imf',
    'patch_installed_imf'))){
    $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Réparez les failles de sécurité d'Intel & maintenez les performances du PC avec Advanced SystemCare PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
 <div class="header">
   <div class="wrapper">
     <a href="https://www.iobit.com" target="_blank" class="logo"> IObit</a>
     <h3>Chers utilisateurs IObit,</h3>
     <p>Récemment, les failles sur les processeurs d’Intel ébranlent toute l’industrie de l’informatique et du numérique. Meltdown et Spectre touchent quasiment tous les ordinateurs du monde qui embarquent les processeurs Intel fabriqués depuis 1995. Microsoft a publié en urgence une mise à jour de sécurité de Windows Mercredi pour corriger la vulnérabilité qui affecte la plupart des utilisateurs moyens. <strong>Advanced SystemCare PRO</strong> réalise les mises à jour importantes de Windows, cela vous aide à éviter d’être dérangé par ces problèmes. </p>
   </div>
 </div>
 <div class="asc-message wrapper">
 <p>Des correctifs proposés par les éditeurs pour corriger les failles, mais cette mise à jour majeure risque d’impacter les performances des CPU. Les machines Windows 7 et Windows 8, même les machines Windows 10 avec d’anciens processeurs connaîtraient une baisse de performances entre 5% et 30%. <strong>Nous recommandons vivement d’exécuter Advanced SystemCare PRO</strong> – l’utilitaire du leader mondial du nettoyage et de l’optimisation de PC, approuvé par 250 millions d’utilisateurs dans le monde.</p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="" class="asc-box">
     <dl class="price">
       <dt><a href="https://www.iobit.com/buy.php?product=fr-asc113pc1799&ref=fr_asc1799event2018a<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchaseevent2018a-fr')" class="buybtn">Activez Maintenant -<strong>17,99€</strong></a></dt>
       <dd>1 An d’abonnement / 3 PCs</dd>
       <dd><p><strong>32€ </strong> d’économie pour nos utilisateurs appréciables</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Plus de fonctions puissantes d’ Advanced SystemCare PRO améliorent les performances de votre ordinateur</h3>
   <ul class="clearfix">
     <li class="first">
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Nettoie profondément et automatiquement les registres et les données de navigation pour améliorer la performance PC.</p>
     </li>
     <li class="first">
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Optimise les paramètres du navigateur pour une connexion Internet jusqu'à 300% * plus rapide. </p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Entretient automatiquement votre PC comme prévu et ne vous dérange jamais. </p>
     </li>
   </ul>
   <h3>Mettez votre PC à l’abri des failles de sécurité d'Intel et maintenez les performances du PC</h3>
   <dl class="price">
     <dt><a href="https://www.iobit.com/buy.php?product=fr-asc113pc1799&ref=fr_asc1799event2018b<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchaseevent2018b-fr')" class="buybtn">Activez Maintenant -<strong>17,99€</strong></a></dt>
     <dd>1 An d’abonnement / 3 PCs</dd>
     <dd><p><strong>32€ </strong> d’économie pour nos utilisateurs appréciables</p></dd>
   </dl>
 </div>
 <div class="footer">
   Note: *.Les données peuvent varier en fonction de différents systèmes ou ordinateurs. <span>© 2005 - <?php echo date('Y')?> Technologie de l'information IObit. Tous droits réservés</span>
 </div>
</body>
</html>