 <?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr='';
if(in_array($_GET['pop'],array('x_iu','xi_iu','xb_iu','xnc_iu'))){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(in_array($_GET['st'],array('iu_wr','officialfree','officialpro'))){
  $refStr.='-'.$_GET['st'];
}

$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Spécial Noël – Profitez des cadeaux de Noël d’IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="lamp">
    <div class="light hide"></div>
    <div class="light01 hide"></div>
    <div class="light02 hide"></div>
  </div>
  <div class="snow"></div>

  <div class="wrapper">
    <div class="star"></div>
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Vente Flash – DE NOËL 80% d’économie </h1>
    <div class="box">
      <dl>
        <dt> <strong>15 </strong> <span>99€ <del>39,99€</del></span></dt>
        <dd>
          
          <span>1 AN / 3 PC</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=fr-iu91y3pc1599&ref=fr_iu93pcpurchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911-fr')" class="buybtn small">VITE, J’EN PROFITE</a>
    </div>
    <div class="box gift-box">
      <dl>
        <dt>  <strong>15</strong> <span>99€ <del>89,97€</del></span> </dt>
        <dd>
         
          <span>1 AN / <b>3 PC</b></span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=fr-iu93pcamcpf1599&ref=fr_iu93pcamcpf1599purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911b-fr')" class="buybtn">VITE, J’EN PROFITE</a>
      <p>Quantité limitée</p>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">

  <!-- intro -->
  <div class="intro wrapper clearfix">
    <h2>Économisez plus de temps et d'efforts <br> grâce à IObit Uninstaller PRO</h2>
    <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" class="img-box">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Efficace</strong>
        <p>Désinstalle facilement les programmes indésirables qui ne peuvent pas être supprimés.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Propre</strong>
        <p>Nettoie automatiquement les données inutiles des programmes désinstallés pour un PC plus propre et plus rapide.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Intelligent</strong>
        <p>Détecte et supprime les bundlewares et les plugins publicitaires.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd>
        <strong>Rapide</strong>
        <p>Met à jour tous les logiciels importants en un clic.</p>
      </dd>
    </dl>
    <p class="learn-more">En savoir plus sur la version PRO >></p>
  </div>
  <!-- end intro -->

  <div class="gift-content wrapper clearfix">
    <h2>À quoi servent les cadeaux gratuits suivants ?</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sm-gift.png')?>" alt=""></dt>
      <dd>
        <strong>0€</strong>  <del> 19,99€</del>
        <p>La première application mobile de sécurité et d’optimisation pour vos téléphones et tablettes Android.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""></dt>
      <dd>
        <strong>0€</strong>  <del> 39,99€</del>
        <p> Il fait office de coffre-fort pour vos fichiers et dossiers</p>
        <p>Un mot de passe empêche quiconque de les ouvrir</p>
      </dd>
    </dl>
  </div>
  <div class="wrapper">
    <div class="betwwen-buy">
      <div class="content">
        <img src="<?php echo getStaticUrl('images/between-buy-box.png')?>" alt="" class="img-box">
        <dl>
          <dt><strong>15,99€ </strong> <del>89,97€</del></dt>
          <dd><a href="https://www.iobit.com/buy.php?product=fr-iu93pcamcpf1599&ref=fr_iu93pcamcpf1599purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911b-fr')" class="buybtn red">J’en Profite   <span>– 80% d’économie</span></a></dd>
          <dd class="last">Quantité limitée</dd>
        </dl>
      </div>
    </div>
  </div>


</div>
<!-- end container -->
<!-- review -->
<div class="review wrapper clearfix">
  <div class="title">
    <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
  </div>
  <div class="review-icons fl">
    <img src="<?php echo $pResUrl;?>images/review-icons.png" alt="">
  </div>
  <div class="review-content fr">
    <ul class="clearfix">
      <li class="active">
        <img src="<?php echo $pResUrl;?>images/pc-magazine.png" alt="PC.MAGAZINE">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/makeuseof.png" alt="MakeUseOf">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/jeff-a-watts.png" alt="Jeff A Watts">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/lynett-van-niekerk.png" alt="Lynette van Niekerk">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/paulo-martins.png" alt="Paulo Martins">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/lovro-zuzic.png" alt="Lovro Žužić">
      </li>
    </ul>
    <span class="line"></span>
    <div class="review-message">
      <!-- CHIP -->
      <p class="active">
        «Cet utilitaire, compatible parfaitement avec Win 10, est mesure de désinstaller des applications en toute simplicité, y compris des fichiers restants dans le registre Windows lors que vous supprimez des logiciels en utilisant le désinsatalleur intégré sous Windows, ainsi que les barres d’outils et plug-ins du navigateur agaçants. En un mot, si vous utilisez un PC sous Windows, je vous recommande IObit Uninstaller. » <span>- PC.MAGAZINE</span>
      </p>
      
      <p>
        «IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Il proposera aux utilisateurs une fonctionnalité "Analyse Approfondie" pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. » <span>- MakeUseOf</span>
       </p>
      <!-- Jeff A Watts -->
      <p class="jeff">
        «Pour cette raison, je reste fidèle aux produits IObit. Dans le passé, j'ai entretenu et réparé des ordinateurs portables et des téléphones portables (android) et les ai toujours laissés, avec les produits IObit installés. J'ai toujours dit à mes clients que cela corrigera et accélérera automatiquement leur ordinateur portable / ordinateur / mobile! :) Je recommande vivement ce désinstallateur en tant que programme fiable et sûr qui permet de désinstaller les programmes les plus tenaces! Plus important encore, supprimer le code "caché" que le programmeur avait l'intention de laisser, ce qui obligerait ensuite les publicités à être réinstallées! Tous les produits IObit sont sûrs et faciles à utiliser pour optimiser votre PC. » <span>- Jeff A Watts</span>
      </p>
      <!-- Lynette van Niekerk -->
      <p>
        «J'aime le fait qu'il désinstalle tous les fragments restants. Il dispose également d'un programme de mise à jour du logiciel qui vous rappelle lorsque l'un des programmes doit être mis à jour. La désinstallation des programmes de traitement par lots en fait un outil de choix. En fait, c’est essentiellement ce dont vous avez besoin pour garder votre ordinateur en état de fonctionner. » <span>- Lynette van Niekerk</span>
      </p>
      <!-- Paulo Martins -->
      <p>
         «Il est rapide et très efficace, il est incomparable face au programme de désinstallation de base de Windows. Il nettoie entièrement tous les résidus de programme et évite ainsi tout ralentissement de l'ordinateur. J’utilise IObit Uninstaller depuis quelques mois et je ne peux désormais plus m’en passer. Je le recommande à mes amis et à ma famille. Merci, IObit Uninstaller est fantastique. »  <span>- Paulo Martins</span>
      </p>
      <!-- Lovro Žužić -->
      <p>
        «Je l’ai utilisé depuis 3 ans. Téléchargement rapide et son interface conviviale et claire. J’ai souvent utilisé les fonctionnalités Désinstaller en lot, Analyse Minutieuse , Broyeur de fichiers et la fonctionnalité Récemment installés qui peut m’aider à trouver facilement les programmes récemment installé qui ne fonctionnent pas correctement ou que je n’aime pas. Il est également facile de contrôler vos éléments de démarrage pour booster considérablement la vitesse du démarrage. » <span> - Lovro Žužić</span>
      </p>
    </div>
  </div>
</div>
<!-- end review -->
<!-- comparison start -->
<div class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Savoir ce que PRO édition peut faire pour vous?</th>
      <th class="itemb">IObit Uninstaller 9 FREE</th>
      <th class="itema">IObit Uninstaller 9 PRO</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_01.png" alt="" /></td>
      <td class="virtue double">Désinstaller un programme depuis sa fenêtre ouverte, de son icône sur <br> le bureau ou de l'icône de la barre d'état système</td>
      <td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-mark.png" alt="" /></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_02.png" alt="" /></td>
      <td class="virtue">Supprimer plug-ins &amp; extensions sur Edge, Chrome, IE, Firefox, etc </td>
      <td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-mark.png" alt="" /></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_11.png" alt=""></td>
      <td class="virtue">Annuler automatiquement les modifications du système apportées par un programme <br> lors de la désinstallation. <span class="nuo">NOUVEAU</span></td>
      <td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_03.png" alt="" /></td>
      <td class="virtue">Prise en charge de la désinstallation des programmes tenaces<span class="red">AMÉLIORÉ</span></td>
      <td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_04.png" alt="" /></td>
      <td class="virtue">Détecter et désinstaller les bundlewares et les plug-ins regroupés <span class="red">AMÉLIORÉ</span></td>
      <td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_05.png" alt="" /></td>
      <td class="virtue">Mettre à jour automatiquement tous les logiciels obsolètes choisis <span class="red">AMÉLIORÉ</span></td>
      <td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_06.png" alt="" /></td>
      <td class="virtue">Désinstaller plug-ins malveillants pour un navigateur plus sécurisé <span class="red">AMÉLIORÉ</span> </td>
      <td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_07.png" alt="" /></td>
      <td class="virtue">Expérience en ligne plus rapide et plus sûre en activant Déinstallation Adware<span class="red">AMÉLIORÉ</span></td>
      <td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_08.png" alt="" /></td>
      <td class="virtue">Nettoyer automatiquement les restes que d’autres utilitaires ont échoué à supprimer<span class="red">AMÉLIORÉ</span></td>
      <td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_09.png" alt="" /></td>
      <td class="virtue">Mise à jour Auto vers la Dernière Version</td>
      <td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_10.png" alt="" /></td>
      <td class="virtue">Soutien Technique Gratuit de 24/7 à la Demande</td>
      <td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->
<!--bottom-->
<div class="bottom">
  <div class="wrapper">
    <div class="content">
      <div class="img-box"></div>
      <ul>
        <li><i></i> <strong>1 AN /  <b>3 PC</b></strong> <span>15</span>,99€</li>
        <li class="active"><i></i> <strong>1 AN / 3 PC <b> + 2 Outils PRO</b></strong> <span>15</span>,99€</li>
      </ul>
      <dl>
        <dt><span>80%</span> de remise</dt>
        <dd><a href="https://www.iobit.com/buy.php?product=fr-iu93pcamcpf1599&ref=fr_iu93pcamcpf1599purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911b-fr')" class="buybtn">VITE, J’EN PROFITE</a></dd>
        <dd class="last">Quantité limitée</dd>
      </dl>
    </div>
  </div>
</div>
<!--bottom-->
<!-- service -->
<div class="service  clearfix">
  <div class="wrapper">
   <dl>
      <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt="" /></dt>
      <dd><h4>Satisfait ou Remboursé</h4></dd>
      <dd>Garantie satisfait ou remboursé <span>pendant 60 jours après la date d’achat.</span></dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/godaddy-secure.png" alt="" /></dt>
      <dd><h4>Paiement 100% Sécurisé</h4></dd>
      <dd>IObit vous propose huit modes de paiement sécurisé pour régler vos achats.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/cart.png" alt="" /></dt>
      <dd><h4>Obtenir la licence</h4></dd>
      <dd>Vous recevrez le code de licence dans <span>les minutes après l’achat.</span></dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo $pResUrl;?>images/24hours.png" alt="" /></dt>
      <dd><h4>Service Client à votre écoute</h4></dd>
      <dd>Notre Support Technique gratuit est à votre disposition 24 heures sur 24, 7 jours sur 7.</dd>
    </dl>
  </div>
</div>
<div class="note wrapper">
  <p>Note:</p>
  <p>*.Licence gratuite d’AMC Security PRO, la version complète comprend annonces intégrées.</p>
</div>
<!-- end service -->
<div class="copyright">
  Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés
</div>


<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>