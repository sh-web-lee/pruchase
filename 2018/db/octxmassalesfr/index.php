<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$viewNum=rand(96,125);
if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $cName='frdboct'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>2){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=2;
    }
  }else{
    $packsNum=97;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit();
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
    'garegion','dbofficialfree','dbofficialpro'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if(in_array($_GET['st'],array('dbxmasr','db_xmas'))){
  $refStr.='-'.$_GET['st'];
}
if(in_array($_GET['pop'],array('x_db'))){
  $refStr.='-'.$_GET['pop'];
}
if($_GET['to']=='purchase-6'){
  $ver=$_GET['ver'];
  if(preg_match('/^([0-9])\.([0-9])\.[0-9]\.[0-9]{3}/',$ver,$matches)){
    $verStr=$matches[1].$matches[2];
    $refStr.='-'.$verStr;
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Profitez de l'offre la plus étonnante de cette année et des cadeaux exclusifs uniquement pour Noël - Stock limitée! Premier arrivé, premier servi!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      Vente Flash Spéciale Noël
      L’offre la plus étonnante de l’année 2018. 1er arrivé, 1er servi !
    </h1>
    <!-- content -->
    <div class="content clearfix">
      <!-- left-message -->
      <div class="left-message fl">
        <img src="<?php echo $pResUrl;?>images/banner-db.png" alt="">
        <img class="db-reduce" src="<?php echo $pResUrl;?>images/banner-db-reduce.png" alt="">
        <img class="banner-off85" src="<?php echo $pResUrl;?>images/banner-off85.png" alt="">
      </div>
      <!-- right-message -->
      <div class="right-message fr">
        <!-- title -->
        <h3>Offre limitée à 500 pièces aujourd’hui!</h3>
        <!-- surplus -->
        <p class="surplus">plus que <b class="one">0</b><b class="two">0</b><b class="three">0</b> disponibles* !</p>
        <!-- progressbar -->
        <div class="progressbar">
          <span></span>
        </div>
        <!-- view -->
        <p class="view"><span class="viewNum"><?php echo $viewNum;?></span> clients sur la page maintenant !</p>
        <!-- price -->
        <p class="price">
          <strong>24</strong>
          <sup> 99</sup>
          <del> 174,82€</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-db6iusdpf2499&ref=fr_db6sdpfiuxmaspurchase1811<?php echo $refStr;?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811-fr')">
          VITE, J’EN PROFITE
        </a>
        <!-- attention -->
        <p class="attention">1 an d'abonnement / 3 PCs</p>
        <!-- moneyback -->
        <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      </div>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo $pResUrl; ?>images/payment.jpg" alt="">
</div>
<!-- payment end -->

<!-- benfits start -->
<div class="benfits wrapper clearfix">
  <h2>Gardez les pilotes à jour et les performances du PC stables</h2>
  <div class="showcase">
    <div class="inner">
      <ul class="screenshot">
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt=""/>
        </li>
      </ul>
    </div>
    <ul class="zoom">
      <li class="fun1 active">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun2">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun3">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun4">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt=""/>
        </div>
      </li>
    </ul>
  </div>
  <div class="detail-list">
    <dl class="active first">
      <dt><i class="benfits01"></i></dt>
      <dd>
        <h3>Met à jour plus de 3 000 000 pilotes</h3>
        <p>
          Solution “one-stop” pour mettre à jour automatiquement<br>
          plus de 3 000 000 pilotes obsolètes et incompatibles.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benfits02"></i></dt>
      <dd>
        <h3>Mise à jour 100% sécurisée</h3>
        <p>
          Sauvegarder automatiquement tous les pilotes et créer un point<br>
          de restauration du système.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benfits03"></i></dt>
      <dd>
        <h3>Performance de jeu maximale</h3>
        <p>
          Augmentez les performances de jeu avec les derniers<br>
          pilotes Game Ready et améliorez l’expérience de jeu avec<br>
          les composants mis à jour et appropriés.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benfits04"></i></dt>
      <dd>
        <h3>Téléchargement de pilotes plus rapide</h3>
        <p>
          Télécharger et installer automatiquement les<br>
          pilotes & les composants du jeu pendant le temps d’inactivité.
        </p>
      </dd>
    </dl>
  </div>
  <div class="clear"></div>
  <a class="intro fr" href="javascript: void(0)">En savoir plus sur la version PRO >></a>
</div>
<!-- benfits end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>Profitez des cadeaux exclusifs uniquement pour Noël !</h2>
    <!-- SD -->
    <dl class="fl sd-box">
      <dt><img src="<?php echo $pResUrl;?>images/sd-box.png" alt=""></dt>
      <dd>
        <h3>Smart Defrag 6 PRO</h3>
        <p><del>29,99€</del> <span><b>0</b>€</span></p>
        <p>
          Maximisez les performances<br>
          du disque dur et de votre PC.
        </p>
      </dd>
    </dl>
    <!-- PF -->
    <dl class="fl pf-box">
      <dt><img src="<?php echo $pResUrl;?>images/pf-box.png" alt=""></dt>
      <dd>
        <h3>Protected Folder</h3>
        <p><del>39,99€</del> <span><b>0</b>€</span></p>
        <p>
          Protégez vos fichiers et vos données<br>
          importants contre le vol, la perte et les fuites.
        </p>
      </dd>
    </dl>
    <!-- IU -->
    <dl class="fr iu-box">
      <dt><img src="<?php echo $pResUrl;?>images/iu-box.png" alt=""></dt>
      <dd>
        <h3>IObit Uninstaller 8 PRO</h3>
        <p><del>29,99€</del> <span><b>0</b>€</span></p>
        <p>
          Désinstallez les bundlewares, programmes<br>
          indésirables et les plug-ins en un clic.
        </p>
      </dd>
    </dl>
    <!-- clear float -->
    <div class="clear"></div>
    <!-- words -->
    <h4>Vite, les cadeaux exclusifs sont disponibles à quantité limitée !</h4>
    <p class="surplus">Plus que <b class="packsNum"><?php echo $packsNum ?></b> disponibles aujourd’hui !</p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=fr-db6iusdpf2499&ref=fr_db6sdpfiuxmaspurchase1811<?php echo $refStr;?>&refs=fr_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811-fr')">
      VITE, J’EN PROFITE
    </a>
  </div>
</div>
<!-- gift-box end -->

<!-- review start -->
<div class="review">
  <div class="wrapper ">
    <h2> Approuvé par ces célèbres médias à travers le monde</h2>
    <div class="review-message">
      <dl class="wayne">
        <dt>
          <div class="img-box">
            <h4>Wayne Bowler</h4>
            <img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster PRO est l’un des meilleurs programmes de mise à jour de pilotes sur le marché. Très facile à utiliser, informatif et intuitif, il contient toutes les mises à jour dont j’ai besoin."</dd>
      </dl>
      <dl class="myo ">
        <dt>
          <div class="img-box">
            <h4>Myo Thuya</h4>
            <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Mon PC est plus rapide, plus stable que je ne le pensais avec Driver Booster PRO."</dd>
      </dl>
      <dl class="pcmag red-round active">
        <dt>
          <div class="img-box">
            <h4>PC-MAG</h4>
            <img src="<?php echo $pResUrl; ?>images/pc-mag.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>“IObit développe de nombreux logiciels pour Windows, Driver Booster PRO, qui met automatiquement à jour les pilotes, est l’un de ses meilleurs programmes.”</dd>
      </dl>
      <dl class="chip ">
        <dt>
          <div class="img-box">
            <h4>chip</h4>
            <img src="<?php echo $pResUrl; ?>images/chip.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster PRO: La mise à jour automatique de pilotes n’est que offerte dans la version PRO. ”</dd>
      </dl>
      <dl class="fabio red-round active">
        <dt>
          <div class="img-box">
            <h4>Fabio Tursi</h4>
            <img src="<?php echo $pResUrl; ?>images/fabio-tursi.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Avec Driver Booster PRO, j’ai finalement trouvé le programme parfait pour garder mon système propre et à jour.”</dd>
      </dl>
      <dl class="vector ">
        <dt>
          <div class="img-box">
            <h4>Vector</h4>
            <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>“Enfin un programme qui maintient mon système à jour de la manière la plus simple!”</dd>
      </dl>
      <dl class="adam">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="">
            <h4>Adam Backlund</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Je recommande vivement Driver Booster PRO à tous ceux qui veulent mettre à jour leurs pilotes rapidement et facilement."</dd>
      </dl>
      <dl class="olnet">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
            <h4>01net</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>“Toutes ces opérations sont réalisées en un seul clic, ce qui vous fait gagner un temps précieux, et rend votre PC plus stable.”</dd>
      </dl>
      <dl class="olorin red-round active">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
            <h4>Olorin 89</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>“Driver Booster est un outil simple de mise à jour du pilote qui rend la vie plus facile pour tout le monde.”</dd>
      </dl>
      <dl class="html ">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/html-it.png" alt="">
            <h4>HTML-it</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>“IObit Driver Booster garde tous les pilotes toujours à jour avec sa technologie de pointe.”</dd>
      </dl>

    </div>
  </div>
</div>
<!-- review end -->

<!-- comparison-table start -->
<div class="comparison-table" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2">Découvrez plus d’avantages de Driver Booster PRO</th>
      <th class="space"></th>
      <th class="itemb">Driver Booster FREE</th>
      <th class="space"></th>
      <th class="itema">Driver Booster PRO</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Identifier Auto les pilotes obsolètes, manquants et défectueux	</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Mise à jour en un clic pour une performance maximale du matériel</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Débloquer la limite de vitesse de la mise à jour des pilotes</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Priorité pour mettre à jour plus de pilotes obsolètes & rares  <sup>Amélioré  </sup> </td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Réduire les crashs Système pour une meilleure performance    <sup class="nou">Nouveau</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Télécharger & Installer Auto les pilotes pendant le temps d’inactivité   <sup class="nou"> Nouveau</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Sauvegarde automtique de tous les pilotes pour une restauration sûre </td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- ADD NEW -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue">Priorité pour obtenir les pilotes Game Ready <sup class="nou"> Nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- AMEND OLD -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Priorité pour installer les composants de jeu mis à jour et appropriés <sup> Amélioré</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Détecter et réparer efficacement les erreurs de périphériques <sup class="nou"> Nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue"> Mettre à jour Automatiquement vers la Dernière Version</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Soutien Technique Gratuit de 24/7 à la Demande</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison-table end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <div class="left-message">
      <img src="<?php echo $pResUrl;?>images/bottom-db.png" alt="">
      <img class="db-reduce" src="<?php echo $pResUrl;?>images/bottom-db-reduce.png" alt="">
    </div>
    <dl class="price-content">
      <dt>
        <h3>Stock limitÉ ! 1er arrivÉ, 1er servi !</h3>
        <!-- price -->
        <p class="price">
          <strong>24</strong>
          <sup>99</sup>
          <del> 174,82€</del>
        </p>
      </dt>
      <dd>
        <!-- buybtn -->
        <a class="buybtn cart"
           href="https://www.iobit.com/buy.php?product=fr-db6iusdpf2499&ref=fr_db6sdpfiuxmaspurchase1811<?php echo $refStr;?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811-fr')">
          <span>VITE, J’EN PROFITE</span>
        </a>
        <!-- attention -->
        <p class="attention"><i></i>ATTENTION, plus que <span class="packsNum"><?php echo $packsNum?></span> disponibles !</p>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><h3>Satisfait ou Remboursé</h3></dd>
      <dd>Garantie satisfait ou remboursé pendant 60 <br> jours après la date d’achat.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/service.png" alt=""></dt>
      <dd><h3>Obtenir la licence</h3></dd>
      <dd>Vous recevrez le code de licence dans les <br> minutes après l’achat.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><h3>Service Client à votre écoute</h3></dd>
      <dd>Notre Support Technique gratuit est à<br>
        votre disposition 24 heures sur 24, 7 jours sur 7.</dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
    <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - 2018 IObit. Tous droits réservés</p>
</div>
<!-- footer end -->
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>