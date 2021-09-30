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
  $refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Correction de la vulnérabilité d'exécution de code à distance dans Remote Desktop Services avec Advanced SystemCare PRO - IObit</title>
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
     <a href="https://www.iobit.com/fr/index.php" target="_blank" class="logo"> IObit</a>
     <h3>Attention ! Une faille majeure semblable à WannaCry trouvée.</h3>
     <p>Microsoft, <strong>le 14 mai 2019</strong>,  a annoncé qu’une faille de sécurité sévère qui affecte Windows XP, Windows 7 ou d’anciennes versions de Windows. Cette vulnérabilité est 'wormable', ce qui signifie que tout malware futur qui en profiterait pourrait se propager de machine en machine de la même manière que WannaCry s'est propagé dans le monde entier en 2017. Cela pourrait donner des idées à des individus malveillants.</p>
   </div>
 </div>
 <div class="asc-message wrapper">
   <p>C’est pour cette raison que nous vous recommandons vivement de passer à Advanced SystemCare PRO afin de diminuer les risques d’attaque. Advanced SystemCare PRO vous propose une double protection en temps réel en appliquant rapidement les mises à jour majeures de Windows et en renforçant votre système pour bloquer des attaques potentiellement malveillantes. Mettez à niveau maintenant avec <strong> 66% de réduction ! </strong></p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="Advanced SystemCare PRO" class="asc-box">
     <dl class="price">
       <dt><a href="http://www.iobit.com/buy.php?product=fr-asc123pc1699&ref=fr_asc3pc201905event1<?php echo $refStr;?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcevent1905-fr')" class="buybtn">J’EN PROFITE VITE – <strong>16,99€</strong></a></dt>
       <dd>1 An d’abonnement / 3 PC</dd>
       <dd><p> <strong>33€</strong>  d’économie pour nos utilisateurs appréciables</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3> Plus d'avantages dont vous profiterez d'Advanced SystemCare PRO</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Nettoie automatiquement et en profondeur des registres et des données de navigation pour améliorer les performances et la protection de votre PC.</p>
     </li>
     <li class="center">
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Optimise les paramètres du navigateur pour une connexion Internet jusqu’à 300%* plus rapide.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Mettez les données sensibles, y compris les contacts, les données de courrier électronique, Dropbox, OneDriver etc. à l’abri de tous les regards indiscrets.</p>
     </li>
   </ul>
   <h3>Corrigez les vulnérabilités du système et bloquez les attaques de cybersécurité</h3>
   <dl class="price">
     <dt><a href="http://www.iobit.com/buy.php?product=fr-asc123pc1699&ref=fr_asc3pc201905event1<?php echo $refStr;?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcevent1905-fr')" class="buybtn">J’EN PROFITE VITE – <strong>16,99€</strong></a></dt>
     <dd>1 An d’abonnement / 3 PC</dd>
     <dd><p> <strong>33€</strong>  d’économie pour nos utilisateurs appréciables</p></dd>
   </dl>
 </div>
 <div class="footer">
   Note: *.Les données peuvent varier en fonction de différents systèmes ou ordinateurs. <span>© 2005 - <?php echo date('Y')?>  Technologie de l'information IObit. Tous Droits Réservés</span>
 </div>
</body>
</html>