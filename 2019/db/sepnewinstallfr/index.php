<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(154,196);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frdbnews_p' . $date;
  $c_name_t='frdbnews_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['to'])?'':('-').$_GET['to'];
$refStr.=empty($_GET['ref'])?'':('-').$_GET['ref'];
$refStr.=empty($_GET['flag'])?'':('-flag'.$_GET['flag']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>50€ de réduction réservée aux nouveaux utilisateurs - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
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
    <h1>50€ de Réduc – Réservé aux nouveaux utilisateurs</h1>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- box -->
      <img class="box" src="<?php echo getStaticUrl('images/banner-db.png')?>" alt="Driver Booster PRO"/>

      <!-- coupon -->
      <div class="coupon">
        <!-- numbox -->
        <div class="numbox">
          <span>Vite,</span>
          <div class="giftNum clearfix">
            <div class="nwrap"><div class="numlist"><strong>0</strong></div></div>
            <div class="nwrap"><div class="numlist"><strong>2</strong></div></div>
            <div class="nwrap last"><div class="numlist"><strong>5</strong></div></div>
          </div>
          coupons dispos
        </div>
        <p>Votre première commande</p>
      </div>

      <!-- message -->
      <div class="message">
        <!-- list -->
        <table>
          <tr>
            <td>Driver Booster 8 PRO</td>
            <td>74,85€</td>
          </tr>
          <tr>
            <td><span class="grey">1 an d’abonnement / 3 PC</span></td>
            <td></td>
          </tr>
          <tr class="last">
            <td>Coupon Exclusif</td>
            <td><span class="red">-50€</span></td>
          </tr>
        </table>
        <img class="line" src="<?php echo $pResUrl;?>images/line.png" alt="">
        <!-- price -->
        <p class="price"><strong>24</strong>,85€</p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-db83pc2485&ref=fr_db83pc2485new<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga( 'send', 'event', 'dbbuy', 'buy', 'dbpurchase-newinstall-fr');">
          Vite, J’en Profite
        </a>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature">
  <!-- title -->
  <h2>Davantage de fonctionnalités dont vous profiterez de<br> <b>Driver Booster 8 PRO</b></h2>
  <!-- top -->
  <div class="feature-panel wrapper">
    <h3><span>Processus de mise à jour automatique </span></h3>
    <div class="feature-db">
      <!-- 01 -->
      <dl class="one clearfix">
        <dt>
          <span class="line"></span>
          <span class="point"></span>
        </dt>
        <dd>
          <h4><b>Analyse</b> automatique</h4>
          <p>
            Identifie automatiquement plus de<br> <b>4 500 000</b> pilotes et composants de<br> jeu obsolètes selon un planning
          </p>
          <hr>
          <em>
            *Seulement <b>3 000 000+</b> disponibles dans<br> la version gratuite
          </em>
        </dd>
      </dl>
      <!-- 02 -->
      <dl class="two clearfix">
        <dt>
          <span class="line"></span>
          <span class="point"></span>
        </dt>
        <dd>
          <h4><b>Téléchargement</b> automatique</h4>
          <p>
            <b>Télécharge</b> rapidement et automatiquement les<br> pilotes pendant l’inactivité du système
          </p>
          <hr>
          <em>
            *<b>Indisponible</b> pour la version gratuite
          </em>
        </dd>
      </dl>
      <!-- 03 -->
      <dl class="three clearfix">
        <dt>
          <span class="line"></span>
          <span class="point"></span>
        </dt>
        <dd>
          <h4><b>Installation</b> automatique</h4>
          <p>
            <b>Installe</b> les pilotes lorsque l’ordinateur<br> est moins occupé et sauvegarde automatiquement les pilotes précédents<br> avant son installation.
          </p>
          <hr>
          <em>
            *<b>Indisponible</b> pour la version gratuite
          </em>
        </dd>
      </dl>
      <!-- 04 -->
      <dl class="four clearfix">
        <dt>
          <span class="line"></span>
          <span class="point"></span>
        </dt>
        <dd>
          <h4><b>Mise à jour</b> <span>terminée</span></h4>
          <p>Profitez des performances optimales sur PC<br> et d’une expérience plus fluide sur les jeux</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- bottom -->
  <div class="feature-panel">
    <h3><span>Résoudre complètement les problèmes matériels</span></h3>
    <div class="feature-chart">
      <div class="wrapper">
        <!-- chart -->
        <span class="chart"></span>
        <!-- icons -->
        <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        <!-- 01 -->
        <dl class="one clearfix">
          <dt>
            <span class="line"></span>
            <span class="point"></span>
          </dt>
          <dd>
            <p>Réparer le problème<br> d’absence de son </p>
          </dd>
        </dl>
        <!-- 02 -->
        <dl class="two clearfix">
          <dt>
            <span class="line"></span>
            <span class="point"></span>
          </dt>
          <dd>
            <p>Résoudre les problèmes de<br> connexion internet</p>
          </dd>
        </dl>
        <!-- 03 -->
        <dl class="three clearfix">
          <dt>
            <span class="line"></span>
            <span class="point"></span>
          </dt>
          <dd>
            <p>Corriger les erreurs de vos<br> périphériques en un clic</p>
            <em>*Indisponible pour la version<br> gratuite</em>
          </dd>
        </dl>
        <h5>Les périphériques matériels fonctionnent correctement sur<br> votre système Windows</h5>
      </div>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <div class="content">
      <dl class="active">
        <dt>
          <h3>Avis des médias</h3></dt>
        <dd>
          IObit développe de nombeux utilitaires, et Driver Booster PRO, qui met automatiquement à jour vos pilotes, est l’un de ses meilleurs utilitaires. Driver Booster PRO, simple et efficace, offre de multiples fonctionnalités et des clés de licence pour un bon prix. L’interface utilisateur personnalisée affiche des informations matérielles spécifiques. Bien que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent également des fonctionnalités intéressantes, IObit Driver Booster PRO reste absolument numéro un.
        </dd>
      </dl>
      <dl>
        <dt><h3>Avis des utilisateurs</h3></dt>
        <dd>
          Je dois dire premièrement que c’est un logiciel très léger et facile à utiliser. Driver Booster travaille en arrière-plan et ne surchargera pas le processeur et la RAM. J'ai pu jouer à de nouveaux jeux sans avoir à arrêter tout processus en arrière-plan. J'exécute habituellement les mises à jour Windows quotidiennement pour obtenir les derniers pilotes et Driver Booster a mis à jour et corrigé les pilotes de mon ordinateur précisément, mieux que Windows Update. Je suis vraiment impressionné par le logiciel et le recommande fortement.
        </dd>
      </dl>
      <dl>
        <dt><h3>Avis des utilisateurs</h3></dt>
        <dd>
          Le meilleur logiciel de mise à jour de pilotes sur le marché absolument qui possède une interface utilisateur conviviale et facile à utiliser. C'est vraiment le meilleur programme que j'ai jamais utilisé ! 5 ETOILES bien mérités !!! Hautement recommandé !
        </dd>
      </dl>
      <dl>
        <dt><h3>Avis des utilisateurs</h3></dt>
        <dd>
          Driver Booster a aidé à résoudre les problèmes de lenteurs de mon ordinateur portable et éviter la plantage. Parfois, lorsque j’essayais de mettre à jour mes pilotes, l’ordinateur tombait en panne et je devais le formater pour restaurer les fonctions. Cela ne se produit plus avec DB7. Il télécharge des pilotes rapidement et facile à utiliser, c'est le meilleur outil sur le marché jusqu'à présent !
        </dd>
      </dl>
      <dl>
        <dt><h3>Avis des utilisateurs</h3></dt>
        <dd>
          J'ai été fortement impressionné de voir tout ce que peut faire Driver Booster ! J'en avais tellement besoin pour résoudre une partie de mes logiciels dont les drivers étaient périmés et bons à mettre à jour. C'est ce que Driver Booster à fait pour moi, en partie. Drivers Booster a sécurisé la plupart de mes applications devenues obsolètes et je suis impatient de finaliser l'entièreté du PC. J'ai bien remarqué que mes applications étaient plus performantes. Je ne regrette pas de m'être penché sur Driver Booster 
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="active">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine">
        </div>
        <p>PC Magazine</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/dunston-diaz.png" alt="Dunston Diaz"></div>
        <p>Dunston Diaz</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/hishaam-salasa.png" alt="Hishaam Salasa">
        </div>
        <p>Hishaam Salasa</p>
      </li>
      <li>
        <div class="pic">
          <img src="<?php echo $pResUrl; ?>images/carlos-alexandre.png" alt="Carlos Alexandre Veríssimo">
        </div>
        <p>Carlos Alexandre Veríssimo</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/jean-pierre.png" alt="Jean-Pierre FILLION"></div>
        <p>Jean-Pierre FILLION</p>
      </li>
    </ul>
  </div>
</div>
<!-- end review -->

<!-- awards -->
<div class="awards wrapper">
  <h2>APPROUVÉ PAR CES MÉDIAS CÉLÈBRES DU MONDE</h2>
  <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
</div>
<!-- end awards -->

<!-- bottom -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Essayez pendant 60 jours, sans risque.</h4>
          <p>
            Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Nous acceptons</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- end bottom -->

<!-- float -->
<div class="float">
  <div class="wrapper clearfix">
    <!-- box -->
    <img class="box" src="<?php echo getStaticUrl('images/float-db.png')?>" alt="Driver Booster PRO"/>
    <!-- numbox -->
    <div class="numbox">
      que
      <div class="giftNum clearfix">
        <div class="nwrap"><div class="numlist"><strong>0</strong></div></div>
        <div class="nwrap"><div class="numlist"><strong>2</strong></div></div>
        <div class="nwrap last"><div class="numlist"><strong>5</strong></div></div>
      </div>
      coupons dispos, <span></span>
    </div>
    <!-- price -->
    <p class="price"><strong>24</strong>,85€ <del>74,85€</del></p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=fr-db83pc2485&ref=fr_db83pc2485new<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
       onclick="ga( 'send', 'event', 'dbbuy', 'buy', 'dbpurchase-newinstall-fr');">
      Vite, J’en Profite
    </a>
  </div>
</div>
<!-- end float -->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>