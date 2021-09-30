<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$refStr='';
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
if($_GET['pop']=='x_iu'){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);

if (empty($_GET['ref'])) $_GET['ref'] = 'fraff_iu8_2019summersale';

include $pRootUrl.'include/common.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Vente flash du jour - jusqu'à -80% sur IObit Uninstaller PRO</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,700i">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      VENTE FLASH DU JOUR
      <span> Offre limitée, n’attendez pas la dernière minute !</span>
    </h1>
    <!-- product-message -->
    <ul class="message">
      <!-- 3pc -->
      <li class="prev">
        <!-- countdown -->
        <p class="countdown countdown2 prev hide">
          <span>Plus que</span>
          <strong>00</strong> H
          <strong>00</strong> M
          <strong>00</strong> S
          <strong>00</strong> Ms*
        </p>
        <!-- box -->
        <div class="box">IObit Uninstaller PRO8</div>
        <!-- price -->
        <p class="price"><strong>15</strong> <sup>€99</sup> <del>29,99€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fraff-iu83pc1599&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'fraffiu82019summersale')">
          VITE, J’EN PROFITE
        </a>
      </li>
      <!-- 3pc+gifts -->
      <li class="last">
        <!-- countdown -->
        <p class="countdown countdown1">
          <span>Plus que</span>
          <strong>00</strong> M
          <strong>00</strong> S
          <strong>00</strong> Ms*
        </p>
        <!-- box -->
        <div class="box">IObit Uninstaller PRO8 + Protected Folder + AMC Security PRO</div>
        <!-- price -->
        <p class="price small"><strong>15</strong> <sup>€99</sup> <del>89,97€</del></p>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=fraff-iu8pfamc1599&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'fraffiu82019summersale')">
          VITE, J’EN PROFITE
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- banner end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo $pResUrl; ?>images/payment.jpg" alt="">
</div>
<!-- payment end -->

<!-- intro start -->
<div class="intro wrapper">
  <h2>Profitez d’un PC plus léger & une navigation plus sûre avec IObit Uninstaller PRO !</h2>
  <div class="showcase">
    <div class="imglist">
      <ul>
        <li class="shot3"><img src="<?php echo $pResUrl;?>images/screenshot02.png" alt=""></li>
        <li class="shot2"><img src="<?php echo $pResUrl;?>images/screenshot03.png" alt=""></li>
        <li class="shot1"><img src="<?php echo $pResUrl;?>images/screenshot01.png" alt=""></li>
      </ul>
    </div>
    <a href="javascript:void(0);" class="prev control"><</a>
    <a href="javascript:void(0);" class="next control">></a>
  </div>
  <div class="features clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature_01.png" alt=""></dt>
      <dd>
        <h3><span>NOUVEAU !</span> Détecter et désinstaller les bundlewares</h3>
        <p>Détecter et désinstaller les bundlewares comme les logiciels publicitaires, les plug-ins de navigateur et d'autres logiciels tiers qui peuvent faire partie du processus d'installation.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature_02.png" alt=""></dt>
      <dd>
        <h3><span>AMELIORE !</span> Navigation sans publicité</h3>
        <p>Désinstaller puissamment les plug-ins malveillants et publicitaires pour assurer une expérience de navigation sécurisée et propre.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature_03.png" alt=""></dt>
      <dd>
        <h3><span>AMELIORE !</span> Nettoyage automatique </h3>
        <p>Détecter et nettoyer automatiquement les restes de programmes désinstallés, y compris ceux supprimés par d'autres désinstallateurs.</p>
      </dd>
    </dl>
    <dl class="udp">
      <dt><img src="<?php echo $pResUrl;?>images/feature_04.png" alt=""></dt>
      <dd>
        <h3><span>NOUVEAU !</span> Mise à jour de logiciel sécurisée <img src="<?php echo $pResUrl;?>images/attention.png" alt="ATTENTION"> </h3>
        <p>
          Mettez à jour en un seul clic des logiciels importants sans intervention de l'utilisateur, y compris <b>WinRAR*, dont la faille de sécurité existante peut mettre votre ordinateur en péril depuis des années.</b> <br>
          <em>* Mise à jour immédiate, une fois que la nouvelle version officielle est disponible.</em>
        </p>
      </dd>
    </dl>
  </div>
  <a href="javascript: void(0);" class="comparebtn">En savoir plus sur version PRO>></a>
</div>
<!-- intro end -->

<!-- complimentary start -->
<div class="complimentary">
  <div class="wrapper">
    <h2>Profitez d’un paquet cadeau à durée limitée, dépêchez-vous !</h2>
    <div class="gift-list clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/gift-amc.png" alt=""></dt>
        <dd>
          <h3>AMC Security PRO*<strong>0€ </strong> <del>19,99€</del></h3>
          <ul>
            <li>Un tout-en-un protecteur et accélérateur pour votre smartphone Android</li>
            <li>Prend en charge plusieurs appareils</li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/gift-pf.png" alt=""></dt>
        <dd>
          <h3>Protected Folder <strong>0€ </strong> <del>39,99€</del></h3>
          <ul>
            <li>Il fait office de coffre-fort pour vos fichiers et dossiers</li>
            <li>Un mot de passe empêche quiconque de les ouvrir</li>
          </ul>
        </dd>
      </dl>
    </div>
    <!-- buybtn -->
    <a class="buybtn yellow"
       href="https://www.iobit.com/buy.php?product=fraff-iu8pfamc1599&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
       onclick="ga('send', 'event', 'iubuy', 'buy', 'fraffiu82019summersale')">
      VITE , J’EN PROFITE
    </a>
    <!-- countdown -->
    <p class="countdown countdown1 bottom">
      <strong>00</strong> M :
      <strong>00</strong> S :
      <strong>00</strong> MS*
    </p>
  </div>
</div>
<!-- complimentary end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>Recommandé par ces médias </h2>
  <img src="<?php echo $pResUrl;?>images/awards.png" alt="" />
</div>
<!-- awards end -->

<!-- review -->
<div class="review wrapper">
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo $pResUrl;?>images/fernando.png" alt="Fernando Lourenço Gomes"></dt>
        <dd>
          <h2>Avis d’utilisateur</h2>
          <cite>Fernando Lourenço Gomes</cite>
          <h4>«IObit Uninstaller, un outil pratique et efficace destiné à désinstaller des programmes, des barres d’outils et plug-ins. »
          </h4>
          <p>«Il est très utile pour moi parce que cet outil parfait me permet de désinstaller les programmes et applications indésirables, et de nettoyer les restes dans le registre Windows ainsi que l’ensemble des fichiers et dossiers associés au programmes. Bravo jamais je n’ai pu avoir aussis efficace, je le recommande vivement! »
          </p>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo $pResUrl;?>images/pc-magazine.png" alt="PC.MAGAZINE"></dt>
        <dd>
          <h2>Avis des médias</h2>
          <cite>PC.MAGAZINE</cite>
          <h4>«Si vous avez besoin d’un programme vous permettant de désinstaller complètement et proprement des applications, séléctionnez IObit Uninstaller. »
          </h4>
          <p>
            «Cet utilitaire, compatible parfaitement avec Win 10, est mesure de désinstaller des applications en toute simplicité, y compris des fichiers restants dans le registre Windows lors que vous supprimez des logiciels en utilisant le désinsatalleur intégré sous Windows, ainsi que les barres d’outils et plug-ins du navigateur agaçants. En un mot, si vous utilisez un PC sous Windows, je vous recommande IObit Uninstaller. »
          </p>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo $pResUrl;?>images/makeuseof.png" alt="MakeUseOf"></dt>
        <dd>
          <h2>Avis des médias</h2>
          <cite>MakeUseOf</cite>
          <h4>
            «Cet outil de désinstallation peut être classé comme le meilleur programme de désinstallation qui permet aux utilisateurs de réaliser la désinstallation par lot d’applicationssur PC. »
          </h4>
          <p>
            «IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Il proposera aux utilisateurs une fonctionnalité "Analyse Approfondie" pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. »
          </p>
        </dd>
      </dl>
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
      <th class="itema">IObit Uninstaller 9 PRO</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_01.png" alt="" /></td>
      <td class="virtue double">Désinstaller un programme depuis sa fenêtre ouverte, de son icône sur <br> le bureau ou de l'icône de la barre d'état système <span class="nuo">NOUVEAU</span></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_02.png" alt="" /></td>
      <td class="virtue">Supprimer plug-ins &amp; extensions sur Edge, Chrome, IE, Firefox, etc </td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_03.png" alt="" /></td>
      <td class="virtue">Prise en charge de la désinstallation des programmes tenaces<span class="red">AMÉLIORÉ</span></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_04.png" alt="" /></td>
      <td class="virtue">Détecter et désinstaller les bundlewares et les plug-ins regroupés <span class="red">AMÉLIORÉ</span></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_05.png" alt="" /></td>
      <td class="virtue">Mettre à jour tous les programmes importants en un seul clic <span class="red">AMÉLIORÉ</span></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_06.png" alt="" /></td>
      <td class="virtue">Désinstaller plug-ins malveillants pour un navigateur plus sécurisé <span class="red">AMÉLIORÉ</span> </td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_07.png" alt="" /></td>
      <td class="virtue">Expérience en ligne plus rapide et plus sûre en activant Déinstallation Adware<span class="red">AMÉLIORÉ</span></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_08.png" alt="" /></td>
      <td class="virtue">Nettoyer automatiquement les restes que d’autres utilitaires ont échoué à supprimer<span class="red">AMÉLIORÉ</span></td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_09.png" alt="" /></td>
      <td class="virtue">Mise à jour Auto vers la Dernière Version</td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_10.png" alt="" /></td>
      <td class="virtue">Soutien Technique Gratuit de 24/7 à la Demande</td>
      <td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- bottombuy start -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <div class="box fl">
      <ul class="clearfix fl">
        <li class="active"></li>
        <li class="second"></li>
      </ul>
    </div>
    <div class="middle fl">
      <ul class="select">
        <li class="active"
            data-url="https://www.iobit.com/buy.php?product=fraff-iu8pfamc1599&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>&tw=-8"
            data-del="89,97€">
          <i></i>
          1 AN / 3 PC + paquet cadeaux
          <span>-80%</span>
        </li>
        <li class="second"
            data-url="https://www.iobit.com/buy.php?product=fraff-iu83pc1599&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>&tw=-8"
            data-del="29,99€">
          <i></i>
          1 AN / 3 PC
          <span>-45%</span>
        </li>
      </ul>
    </div>
    <div class="fr another">
      <p class="price"><strong>15</strong> <sup>€99</sup> <del>29,99€</del></p>
      <a class="buybtn yellow"
         href="https://www.iobit.com/buy.php?product=fraff-iu8pfamc1599&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'fraffiu82019summersale')">
        VITE, J’EN PROFITE
      </a>
    </div>
  </div>
</div>
<!-- boittombuy enb -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
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
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/24hours.png" alt="" /></dt>
        <dd><h4>Service Client à votre écoute</h4></dd>
        <dd>Notre Support Technique gratuit est à votre disposition 24 heures sur 24, 7 jours sur 7.</dd>
      </dl>
    </div>
    <!-- service end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>N.B.</dt>
      <dd>1*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
      <dd>2*.Licence gratuite d'AMC Security PRO, la version complète comprend annonces intégrées.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->


<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>